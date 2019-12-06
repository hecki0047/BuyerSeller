<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProductDescription;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidationController;
use App\Models\BusinesType;
use App\Models\Products;
use view;
use Sentinel;
use Redirect;
use DB;
use App\Models\ProductPrice;
use App\Models\LimitedTimeOffer;
use App\Models\TradeQuestions;
use App\Models\SupplierProductGroups;
use App\Models\Companies;
use Jenssegers\Agent\Agent;
use App\Models\ProductToCategory;
use App\Models\MostViewCategory;
use App\Models\Categories;
use App\Models\HomeProduct;
use App\Models\SupplierInquery; 
use App\Models\PagesPrefix;
use App\Models\Footer;
use App\Models\Notification;
use App\Models\Country;
use App\Models\PagesSeo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $data['source'] = SupplierInquery::with(['sender_company','sender_company.country','products','products.product_name','inq_docs_one','inq_products_category','inq_products_category.pro_parent_cat','inq_products_category.categories','inq_products_category.categories','products','inq_unit_id','inq_products_image','inq_products_images','home_inquiry'])
            ->where('is_RFQ',1)
            ->orderBy('id','DESC')
            ->where('active',1)
            ->take(15)->get();

           
        $data['products'] = HomeProduct::with(['homeProduct','homeProduct.product_image_new','homeProduct.product_name','homeProduct.product_prices','homeProduct.ProductUnit'])
            ->where('whole_sale',1)
            ->orderBy('sort','asc')->take(15)->get();

        $data['product_homes'] = HomeProduct::with(['homeProduct','homeProduct.product_image_new','homeProduct.product_name','homeProduct.product_prices','homeProduct.ProductUnit'])->where('hot_product',1)->orderBy('sort','asc')->take(15)->get();
            

        $data['product_bangladesh'] = HomeProduct::with(['homeProduct','homeProduct.product_image_new','homeProduct.product_name'])
                ->where('bangladesh_products',1)
                ->orderBy('sort','asc')->take(15)->get();


        $data['country']=Country::where('status',0)->take(6)->get();

        $data['toplink']=Categories::where('top',0)->take(8)->get();           

        
        
        $homepage="home";      
        // dd($most_view);  
        $header=PagesSeo::where('page_id',1)->first();

        if($header) {
            $data['title']=$header->title;
            $data['keyword']=$header->meta_keyword;
            $data['description']=$header->meta_description;
            $data['pages_id']=101;
        }

        $agent = new Agent();        
        $device = $agent->device();
        if($agent->isPhone()) {
            $data['parent_categorys'] = Categories::with('parent_cat_pro')
                                    ->whereHas('parent_cat',function($q){})                        
                                    ->where('parent_id',0)->orderByRaw("RAND()")->take(3)->get();

            $most_view=MostViewCategory::with('mostViewCategory','proimage','proimage_new','most_product','cat_name','parent_cat')
                ->take(70)->get();

            $businessTypes = DB::select('select * from business_types');

            foreach($businessTypes as $type){
                $business[$type->id]=$type->name;
            }

            $customer_group = CustomerGroup::get(['id','name']);
            $countries = Country::get(['name','id']);

           // return view('mobile-view.bdtdc-home',compact(['countries','business','homepage','most_view']), $data);
        }

         if($agent->isDestop())
        {
            return view('frontend.index',compact(['countries','business','homepage']),$data);
        }

        if($agent->isTab())
        {
           return view('frontend.index',compact(['countries','business','homepage']),$data);
        }
        else{
           return view('frontend.index',compact(['homepage']),$data);
        }

    }
}
