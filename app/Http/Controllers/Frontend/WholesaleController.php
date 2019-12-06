<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Country;
use DB;
use Input;
use View;
use Redirect;
use App\Models\ProductToCategory;
use App\Models\ProductToWholesaleCategory;
use App\Models\PagesSeo;
use Jenssegers\Agent\Agent;
use App\Models\PagesPrefix;
use App\Models\Footer;
class WholesaleController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($section=false)
    {

        $data['slider']=true;
        $header=PagesSeo::where('page_id',4)->first();

        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;   

           $data['product_categorys']=ProductToWholesaleCategory::with(['most_view_category','most_view_category.cat_name','parent_product'=>function($pp){
                                                $pp->groupBy('company_id')
                                                ->where('selected',1)
                                                ;
                                         },'category_product_id','bdtdcCategory','pro_parent_cat'=>function($q){
                                            $q->groupBy('id')
                                            ->orderBy('sort_order','asc')
                                            ;

                                            },'pro_parent'=>function($q){
                                                $q->orderBy('sort_order','asc')
                                                //->where('single_image',1)
                                                ;

                                            },'supp_pro_company'=>function($q){
                                                $q->groupBy('id')
                                                ;
                                            },'selected_suppliers'=>function($ss){
                                                $ss->where('page_id',101)->where('country_id',18);
                                             },'selected_suppliers.pro_name_string','selected_suppliers.select_product_images','selected_suppliers.cat_pro_price','selected_suppliers.BdtdcSelectedSupplier_products','selected_suppliers.BdtdcSelectedSupplier_products.ProductUnit'])
                                        ->groupBy('parent_id')
                                        ->whereNotIn('parent_id',[0])
                                        ->paginate(10);        
        $agent = new Agent();
        $device = $agent->device();
  
        if($agent->isPhone())
        {

           return View::make('frontend.mobile-view.wholesale-product',$data,compact(['section']));
        }
        if($agent->isDestop())
        {
           return View::make('frontend.desktop-view.wholesale-home',$data,compact(['section']));
        }

        if($agent->isTab())
        {
           return View::make('frontend.desktop-view.wholesale-home',$data,compact(['section']));
        }
        else{
          
            return View::make('frontend.desktop-view.wholesale-home',$data,compact(['section']));
        }
                           
    }

    public function product_list($id)
    {

        $categoryid = 0;
        $countryid = 0;
        $buyer_protection = false;
        $gold_supplier = false;
        $assessed_supplier = false;

        if(preg_match('/^\d+$/',$id)) {
          $categoryid = $id;
        } else {
          $search_array = explode('+..+', $id);
          $categoryid = explode('==',$search_array[0])[1];
          $countryid = explode('==',$search_array[1])[1];
          $buyer_protection = explode('==',$search_array[2])[1];
          $gold_supplier = explode('==',$search_array[3])[1];
          $assessed_supplier = explode('==',$search_array[4])[1];
        }

        $section="";
     
        $products=ProductToWholesaleCategory::with(['most_view_category','parent_product'=>function($pp){
                        $pp->orderBy('product_id','desc');
                 },'category_product_id','bdtdcCategory','pro_parent_cat'=>function($q){
                    $q
                    ->orderBy('sort_order','asc')
                    ;

                    },'pro_parent'=>function($q){
                        $q->orderBy('sort_order','asc')
                        //->where('single_image',1)
                        ;

                    },'supp_pro_company'=>function($q){
                        $q->groupBy('id')
                        ;
                    },'selected_suppliers'=>function($ss){
                        $ss->groupBy('company_id')
                        ->where('page_id',102);
                     },'category_product_name','pro_images','pro_images_new'])
                ->WhereHas('supp_pro_company', function($offerQuery) use ($countryid){
                    if($countryid != 0){
                        $offerQuery->where('location_of_reg', '=', $countryid);
                    }
                  })
                ->WhereHas('bdtdc_customer', function($offerQuery) use ($buyer_protection, $assessed_supplier, $gold_supplier){
                    if($buyer_protection == 'true'){
                        $offerQuery->where('trade_assurance', 1);
                    }
                    if($assessed_supplier == 'true'){
                        $offerQuery->where('assessed', 1);
                    }
                    if($gold_supplier == 'true'){
                        $offerQuery->where('gold_member', 1);
                    }
                  })
                ->where('category_id',$categoryid)

                ->paginate(12);

        //dd($products);
        $categorys=Categories::with(['parent_cat','cat_parent_cat'=>function ($q){
        }])->where('id',$categoryid)->first();
        // dd($categorys);
        $country=Country::with('country_region')->where('region_id',1)->get();
        $bdtdc_country_list=DB::table('country_list')->where('region_id','!=',1)->get();
        $header=PagesSeo::where('page_id',4)->first();



        $data['title']=$categorys->name.' '.$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$categorys->name.' '.$header->meta_description;  

        return View::make('frontend.desktop-view.wholesale-product-list',$data,compact(['section','categorys','products','country','bdtdc_country_list','categoryid','countryid','buyer_protection','gold_supplier','assessed_supplier']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
   
  




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    
  public function overseasstock_product()
  {
       $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;

    return View::make('frontend.contents-view.stock-product',$data);
  }
 
    
}
