<?php

namespace App\Http\Controllers\Frontend;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Categories;
use App\Models\Country;
use DB;
use Input;
use View;
use Sentinel;
use App\Models\ProductToCategory;
use App\Models\Supplier;
use App\Models\SupplierInquery;
use App\Models\Products;
use App\Models\SampleRequests;
use App\Models\SampleProducts;
use App\Models\Companies;
use App\Models\ProductCategory;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    public function gethome()
    {
        $data['categorys']=array();
            $categorys=DB::table('categories')
                ->where('parent_id','0')
                ->get();
               // dd($categorys);
                foreach ($categorys as $category) {
                
                        $category_children_data = array();

                        
                        $category_childrens = DB::table('categories')
                            ->where('parent_id',$category->id)
                            ->get();
                            //dd($category_name);
                            foreach ($category_childrens as $category_children) {
                                # code...
                                $category_children_data[] = array(
                                    'category_id'  => $category_children->id,
                                    'child_name'=>  $category_children->name
                                    
                                );
                                
                            }
                            $data['categorys'][] = array(
                    'category_id'     => $category->id,
                    'name'=>$category->name,
                    'category_childrens' => $category_children_data
                    
                );
   
                }
        return View::make('frontend.desktop-view.service-home',$data);
    }

    public function bdtdc_sourcing($category_id = null)
    {
      $categorys=DB::table('supllier_inqueries as inq')
                                ->join('product_to_category as pc','pc.product_id','=','inq.product_id')
                                ->join('categories as c','c.id','=','pc.category_id')
                                ->groupBy('c.id')
                                ->where('is_RFQ',1)
                                ->get(['c.name as cat_name','c.id as cat_id']);
                                //dd($categorys);
        

        $source=SupplierInquery::with(['inq_products_category'=>function($q){
                                        $q->groupBy('category_id')->get();
                                    },'bdtdc_product','inq_unit_id','inq_products_image'])
                                                                            ->where('is_RFQ',1)
                                                                             ->get();
                           // return $categorys;
                                                                            //dd($source);

          

        return view('frontend.buyer.bdtdc_sourcing',compact('categorys','source'));
    }

    public function bdtdc_sourcing_details($id)
    {
        $skey = '';
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
          $skey = explode('==',$search_array[0])[1];
          $categoryid = explode('==',$search_array[1])[1];
          $countryid = explode('==',$search_array[2])[1];
          $rfq = explode('==',$search_array[3])[1];
          $posted = explode('==',$search_array[4])[1];
          $quantity_form = explode('==',$search_array[5])[1];
          $quantity_to = explode('==',$search_array[6])[1];
        }
         // dd($categoryid);

        $categories=SupplierInquery::with(['inq_products_category'=>function($q){
                                        $q->groupBy('category_id')->get();
                                    },'inq_products_category.bdtdcCategory'])->where('is_RFQ',1)->get();

                        $source_query = SupplierInquery::query();
                        $source_query->with(['inq_products_category','bdtdc_product.product_name','sender_company.country','bdtdc_product','inq_unit_id','inq_products_image']);

                                 if($categoryid != 0){
                                    $source_query->whereHas('inq_products_category',function($q) use($categoryid){
                                   
                                        $q->where('category_id','=',$categoryid);
                                    
                                });
                                    }
                                    if($countryid != 0){
                                        $source_query->whereHas('sender_company',function($q) use($countryid){
                                    
                                        $q->where('location_of_reg','=',$countryid);
                                    
                                });
                                }
                              
                                $source_query->where('is_RFQ',1);
                                 if($skey != ''){
                                        $source_query->where('inquery_title','LIKE', '%'.$skey.'%');
                                    }
                                if($quantity_to != 0){
                                    $source_query->whereBetween('quantity', [$quantity_form, $quantity_to]);
                                }
                                if($rfq == "true"){
                                    $source_query->where('updated_at', '>=', date('Y-m-d', strtotime("-30 days")));
                                }
                                if ($posted != 0) {
                                    $posted_array = explode('-', $posted);
                                    if($posted_array[1] == "h"){
                                        $source_query->whereBetween('updated_at', [date("Y-m-d H:i:s", strtotime('-'.$posted_array[0].' hours')), date("Y-m-d H:i:s")]);
                                        // $source_query->where('updated_at', '<=', date("Y-m-d H:i:s", strtotime('-'.$posted_array[0].' hours')));
                                    }
                                    if($posted_array[1] == "d"){
                                        // $source_query->whereBetween('updated_at', [date('Y-m-d', strtotime("-".$posted_array[0]." days")), date("Y-m-d")]);
                                        $source_query->where('updated_at', '>=', date('Y-m-d', strtotime("-".$posted_array[0]." days")));
                                    }
                                    if($posted_array[1] == "da"){
                                        $source_query->where('updated_at', '<=', date('Y-m-d', strtotime("-7 days")));
                                    }
                                }
                                
                                $source = $source_query->paginate(20);
                                
                                //dd($source);
        
        // $edition=array();

        $country=Country::with('country_region')->where('region_id',1)->get();
        $bdtdc_country_list=BdtdcCountry::where('region_id','!=',1)->get();
         $data['keyword']='buyerseller';
         $data['description']='buyerseller';
         $data['keyword']='buyerseller';
        if($source){
        return view('frontend.buyer.sourcing_details',$data,compact('categories','source','skey','categoryid','countryid','rfq','posted','quantity_form','quantity_to','country','bdtdc_country_list'));

        }
        else{
            return Redirect::back();
        }
    }
    
  }
