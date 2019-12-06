<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use DB;
use Input;
use View;
use App\Models\ProductToCategory;
use Sentinel;
use Redirect;
use App\Models\Role_user;
use App\Models\SupplierQuery;
use App\Models\SupplierInquery;
use App\Models\InqueryDocs;
use App\Models\PagesSeo;
use Jenssegers\Agent\Agent;
use App\Models\PagesPrefix;
use App\Models\Footer;

class BdsourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $header=PagesSeo::where('page_id',104)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;

        $categorys=SupplierInquery::with(['inq_products_category'=>function($q){
                                        $q->groupBy('category_id')->get();
                                    },'inq_products_category.bdtdcCategory'])->get();
        
        
        $quotations =SupplierInquery::with(['inq_products_category'=>function($q){
                $q->groupBy('category_id')->get();
                },'bdtdc_product','inq_unit_id','p_price','inq_products_image','inq_products_images','inq_products_description'])
                  ->groupBy('product_id')
                  ->paginate(31);

        // dd($quotations);
        $agent = new Agent();
       
        $device = $agent->device();
        
        if($agent->isPhone())
        {
          $parent_category = Categories::where('parent_id',0)->get();

            return view::make('frontend.mobile-view.bd-source-for-buyer',$data,['categorys'=>$categorys,
              'parent_category'=>$parent_category,'quotations'=>$quotations]);
        }
        if($agent->isDestop())
        {
            return View::make('frontend.bd-source-home',$data,['categorys'=>$categorys,'quotations'=>$quotations]);
        }

        if($agent->isTab())
        {
            return View::make('frontend.bd-source-home',$data,['categorys'=>$categorys,'quotations'=>$quotations]);
        }
        else{
          
           return View::make('frontend.bd-source-home',$data,['categorys'=>$categorys,'quotations'=>$quotations]);
        }
        
    }

    public function bdtdc_sourcing($category_id = null)
    {
      $categorys=SupplierInquery::with(['inq_products_category'=>function($q){
                                        $q->groupBy('category_id')->get();
                                    },'inq_products_category.bdtdcCategory'])->where('is_RFQ',1)->get();
       
        $source=SupplierInquery::with(['inq_products_category'=>function($q){
                                        $q->groupBy('category_id')->get();
                                    },'bdtdc_product.product_name','sender_company.country','inq_unit_id','inq_products_image','inq_products_images','inq_docs_one'])
                                                                            ->where('is_RFQ',1)
                                                                            ->orderBy('id','desc')
                                                                             ->paginate(15);

          $header=PagesSeo::where('page_id',2)->first();
            $data['title']=$header->title;
            $data['keyword']=$header->meta_keyword;
            $data['description']=$header->meta_description;


        return view('frontend.buyer.bdtdc_sourcing',$data,compact('categorys','source'));
    }
     public function bdtdc_product_gallery()
    {
       return view('frontend.buyer.product-gallery');
    }
   public function megaMarch_sourcing_consumer()
    {
       return view('frontend.buyer.sourcing-consumer');
    }
    public function bdtdc_sourcing_details($id)
    {
        $key = '';
        $categoryid = 0;
        $countryid = 0;
        $rfq = false;
        $posted = 0;
        $quantity_form = 0;
        $quantity_to = 0;

        if(preg_match('/^\d+$/',$id)) {
          $categoryid = $id;
        } else {
          $search_array = explode('+..+', $id);
          $key = explode('==',$search_array[0])[1];
          $categoryid = explode('==',$search_array[1])[1];
          $countryid = explode('==',$search_array[2])[1];
          $rfq = explode('==',$search_array[3])[1];
          $posted = explode('==',$search_array[4])[1];
          $quantity_form = explode('==',$search_array[5])[1];
          $quantity_to = explode('==',$search_array[6])[1];
        }

        $categorys=DB::table('supllier_inqueries as inq')
                                ->join('bdtdc_roduct_to_category as pc','pc.product_id','=','inq.product_id')
                                ->join('categories as c','c.id','=','pc.category_id')
                                ->groupBy('c.id')
                                ->where('is_RFQ',1)
                                ->get(['c.name as cat_name','c.id as cat_id']);
        $source=SupplierInquery::with(['inq_products_category','bdtdc_product','inq_unit_id','inq_products_image'])
                                        ->whereHas('inq_products_category',function($q) use($categoryid){
                                            $q->where('category_id',$categoryid);
                                        })
                                                ->where('is_RFQ',1)
                                                ->paginate();
                                                //dd($source);

         
         if($source){
        return view('frontend.buyer.sourcing_details',compact('categorys','source'));

        }
        else{
            return Redirect::back();
        }
    }
    
    
}
