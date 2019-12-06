<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Products;
use App\Models\PageContentCategory;
use view;
use App\Models\Countries;
use App\Models\LimitedTimeOffer;
use App\Models\ProductImage;
use App\Models\PageTabs;
use App\Models\PagesPrefix;
use App\Models\PagesSeo;
use App\Models\Categories;
use Jenssegers\Agent\Agent;

class limitedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function offers1()
    {
        $products= DB::table('limited_lime_offers as l')
            ->join('products as p','p.id','=','l.product_id')
            ->join('product_description as pd','pd.product_id','=','l.product_id')
            ->join('product_image as pi','pi.product_id','=','l.product_id')
            ->join('product_to_wholesale_category as pwc','pwc.product_id','=','l.product_id')
            ->join('wholesale_category as wc', 'wc.id','=','pwc.category_id')
            
            ->get(['l.product_id as product_id','pd.name as product_name','l.profit_percentage as profit_percentage','pi.image as image','wc.name as category_name','wc.id as category_id']);
            //dd($products);
        /*$products= BdtdcLimitedTimeOffer::with('bdtdcProduct','bdtdcproductimage')->get();*/
        return View::make('frontend.offer.limited_offer',compact(['products']));
    }

    public function offers()
    {
        $categorys=DB::table('supllier_inqueries as inq')
                                ->join('product_to_category as pc','pc.product_id','=','inq.product_id')
                                ->join('categoies as c','c.id','=','pc.category_id')
                                ->groupBy('c.id')
                                ->get(['c.name as cat_name','c.id as cat_id']);

        $offer_end_date = '2016-11-18 19:00:00';

        $quotations= DB::table('limited_lime_offers as l')
            ->join('products as p','p.id','=','l.product_id')
            ->join('product_description as pd','pd.product_id','=','l.product_id')
            ->join('product_image as pi','pi.product_id','=','l.product_id')
            ->join('product_to_wholesale_category as pwc','pwc.product_id','=','l.product_id')
            ->join('wholesale_category as wc', 'wc.id','=','pwc.category_id')
            /*->whereBetween('l.end_date', [date("Y-m-d H:i:s"), $offer_end_date])*/
            ->groupBy('pi.product_id')
            ->get(['l.product_id as product_id','pd.name as product_name','l.profit_percentage as profit_percentage','pi.image as image','wc.name as category_name','wc.id as category_id','l.start_date as start_date','l.end_date as end_date']);

        $category_data = LimitedTimeOffer::groupBy('sub_category')->whereBetween('end_date', [date("Y-m-d H:i:s"), $offer_end_date])->get();
        $all_subcategory = LimitedTimeOffer::groupBy('sub_category')->whereBetween('end_date', [date("Y-m-d H:i:s"), $offer_end_date])->paginate(2);

        $Limited_time_data = LimitedTimeOffer::with('product_name','bdtdcproductimage','bdtdcproductimages','bdtdcCategory','pro_parent_cat')->groupBy('product_id')->get();

        $parent_cat_data = LimitedTimeOffer::with(['bdtdc_parent_Category'])->groupBy('parent_category')->get();
           $header=PagesSeo::where('page_id',168)->first();
           $data['title']=$header->title;
           $data['keyword']=$header->meta_keyword;
           $data['description']=$header->meta_description;
           $agent = new Agent();
           $device = $agent->device();

        if($agent->isPhone())
        {

           return View::make('frontend.mobile-view.limited_offer_m',$data,compact(['quotations','categorys','Limited_time_data','category_data','parent_cat_data','all_subcategory']));
        }
        if($agent->isDestop())
        {
          return View::make('frontend.offer.limited_offer',$data,compact(['quotations','categorys','Limited_time_data','category_data','parent_cat_data']));
        }

        if($agent->isTab())
        {
          return View::make('frontend.offer.limited_offer',$data,compact(['quotations','categorys','Limited_time_data','category_data','parent_cat_data']));
        }
        else{
          
          return View::make('frontend.offer.limited_offer',$data,compact(['quotations','categorys','Limited_time_data','category_data','parent_cat_data']));
        }
     }

     public function get_category(Request $request){
        date_default_timezone_set('Asia/Dhaka');
        $date = $request->input('date');
        // echo $date;

         $quotations= DB::table('limited_lime_offers as l')
            ->join('products as p','p.id','=','l.product_id')
            ->join('product_description as pd','pd.product_id','=','l.product_id')
            ->join('product_image as pi','pi.product_id','=','l.product_id')
            ->join('product_to_wholesale_category as pwc','pwc.product_id','=','l.product_id')
            ->join('wholesale_category as wc', 'wc.id','=','pwc.category_id')
            // ->where('l.end_date', '<=', date('Y-m-d H:I:s', strtotime('2016-04-10 00:00:00')))
            ->where('l.end_date', '<=', date('Y-m-d H:i:s', strtotime($date)))
            ->groupBy('pi.product_id')
            ->get(['l.product_id as product_id','pd.name as product_name','l.profit_percentage as profit_percentage','pi.image as image','wc.name as category_name','wc.id as category_id','l.start_date as start_date','l.end_date as end_date']);
           
     }
    
    public function outdoor($id)    
    {
        $outdoors=LimitedTimeOffer::with(['wholesale_product_category','bdtdcCategory','bdtdc_parent_Category','pro_parent_cat','pro_cat_pro','pro_sub_cat'=>function($q){
            $q->groupBy('sub_category');
        }])
            ->where('sub_category',$id)
            // ->where('parent_category',$id)
            ->first();
        $data['title']='Buy  in Limited time offers at Bdtdc.com';
        $data['description']='BDTDC provides Limited time offers for different and infinite types of products from various Manufacturers and verified Suppliers only at Bdtdc com';
        $agent = new Agent();
        $device = $agent->device();
        // return view::make('mobile-view.content-view-mobile.outdoor',$data,['outdoors'=>$outdoors]);
        if($agent->isPhone())
        {

        return view::make('frontend.mobile-view.outdoor',$data,['outdoors'=>$outdoors]);
        }
        if($agent->isDestop())
        {
        return view::make('frontend.offer.stock-product',$data,['outdoors'=>$outdoors]);
        }

        if($agent->isTab())
        {
          return view::make('frontend.offer.stock-product',$data,['outdoors'=>$outdoors]);
        }
        else{
          
          return view::make('frontend.offer.stock-product',$data,['outdoors'=>$outdoors]);
        }
       //return ($outdoors->pro_cat_pro);
           
        
        // return view::make('contents_view.stock-product',$data,['outdoors'=>$outdoors]);
        /*return View::make('pages.offer.outdoor');*/
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function buyer()
   {


         $id=35;
            $data['page_content_categorys']=array();
        $page_content_categorys=DB::table('page_content_categories')
            ->where('parent_id','0')->where('page_id', $id)
            ->get();
        //dd($page_content_categorys);
        foreach ($page_content_categorys as $page_content_category) {

            $content_children_data = array();


            $content_childrens = DB::table('page_content_categories')
                ->where('parent_id',$page_content_category->id)
                ->get();
            //dd($category_name);
            foreach ($content_childrens as $content_children) {
                # code...
                $content_children_data[] = array(
                    'child_id'  => $content_children->id,
                    'child_name'=>  $content_children->name,
                    'c_sort_name' =>  $content_children->sort_name,
                    'c_prefix'    => $content_children->prefix

                );

            }
            $data['page_content_categorys'][] = array(
                //'name'=>$category->category_name,
                'content_id'     => $page_content_category->id,
                'name'=>$page_content_category->name,
                'sort_name' =>  $page_content_category->sort_name,
                'prefix'    => $page_content_category->prefix,
                'content_childrens' => $content_children_data

            );
            //dd($content_children_data);

        }
        //dd($page_content_categorys);
        $tab_menus = PageTabs::where('page_id', $id)->get();
        $link_for_buyers=PagesPrefix::where('active',1)->where('prefix','BuyerChannel')->get();
        $link_for_suppliers=PagesPrefix::where('active',1)->where('prefix','SupplierChannel')->get();
        $data['bdtdc_pages_data']='';
        //dd($link_for_buyers);
        $page_content_title="Buyer Channel";

        return View::make('frontend.buyer.buyer',$data,['page_content_title'=>$page_content_title, 'tab_menus'=>$tab_menus,'link_for_buyers'=>$link_for_buyers,
            'link_for_suppliers'=>$link_for_suppliers]);
   }

   public function security()
   {
             $header=PagesSeo::where('page_id',118)->first();
              $data['title']=$header->title;
             $data['keyword']=$header->meta_keyword;
            $data['description']=$header->meta_description;
            $data['parent_cat_name']=PageContentCategory::where('parent_id',32)->take(4)->get();
             $data['parent_cat_nmm']=PageContentCategory::where('parent_id',33)->take(4)->get();

        return view('frontend.buyer.security',$data);
   }
   public function one_stop_service()
   {
   	//not found
      // return view('frontend.buyer.one-stop-service');
   }
   public function research()
   {
             $header=PagesSeo::where('page_id',115)->first();
               $data['title']=$header->title;
               $data['keyword']=$header->meta_keyword;
              $data['description']=$header->meta_description;

        return view('frontend.buyer.research',$data);
   }
   public function future_market_bd()
   {
        return view('frontend.buyer.future-market-bd');
   }

   public function country_region()
   {
        $country=Country::with('country_region')->where('region_id',1)->get();
        // dd($country);
        $section="Find-Suppliers";
        $header=PagesSeo::where('page_id',202)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;

        $agent = new Agent();
        
        $device = $agent->device();
          // return view::make('mobile-view.country-product.select-country',$data,compact('country','section'));
         
        if($agent->isPhone())
        {

           return view::make('frontend.mobile-view.select-country',$data,compact('country','section'));
        }
        else{
          
          return view('frontend.country_region',$data,compact('country','section'));
        }


            
   }

   public function mysource()
   {
    return view('frontend.desktop-view.details.mysource');
   }
   
   public function mysource_quotations()
   {
    return view('frontend.desktop-view.mysource_quotations');
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
