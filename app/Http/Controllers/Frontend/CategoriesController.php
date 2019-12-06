<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\BdtdcCategory;
use DB;
use Input;
use Response;
use View;
use Validator;

use App\Models\ProductToCategory;
use App\Models\ProductPrice;
use App\Models\CategoryDescription;
use App\Models\MostViewCategory;
use App\Models\PagesSeo;
use App\Models\Country;
use App\Models\Products;
use App\Models\ProductDescription;
use App\Models\CompanyDescription;
use App\Models\Companies;
use App\Models\WholesaleCategoryDescription;
use App\Models\WholesaleCategory;
use App\Models\PagesPrefix;
use App\Models\Footer;
use App\Models\Categories;
use Jenssegers\Agent\Agent;
use Route;

class CategoriesController extends Controller
{   

      public function index()
      {
          //        
      }

      public function productList(Request $r, $id){
          $header=PagesSeo::where('page_id',3)->first();
          $categoryid = 0;
          $countryid = 0;
          $buyer_protection = false;
          $gold_supplier = false;
          $assessed_supplier = false;
          $search_str = $r->search_str;   
          $origin = $r->origin;
          $name_combination = '';
          $sub_cat_name = Categories::where('id',$id)->first();
          if($sub_cat_name){
              $name_combination = $sub_cat_name->name;
          }


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

          $products=ProductToCategory::with(['supplier_info','pro_to_cat_name','bdtdcProduct','bdtdcCategory','pro_images','pro_images_new'])
              ->WhereHas('supp_pro_company', function($offerQuery) use ($countryid){
                  if($countryid != 0){
                      $offerQuery->where('location_of_reg', '=', $countryid);
                      $offerQuery->WhereHas('Role_user', function($offerQuery) {
                          $offerQuery->where('role_id', '=', 3);
                      });
                  }
                  else{
                      $offerQuery->WhereHas('Role_user', function($offerQuery) {
                          $offerQuery->where('role_id', '=', 3);
                      });
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
              ->WhereHas('bdtdcProduct', function($offerQuery) use ($origin,$search_str){
                  if($origin){
                      $offerQuery->whereHas('product_country', function($offerQuery) use ($origin){
                          $offerQuery->where('id', $origin);
                      });
                  }
                  if($search_str){
                      $offerQuery->where('brandname', 'LIKE', '%'.$search_str.'%');
                  }
              })
              ->orderBy('country_id','asc')->orderBy('product_id','desc')->where('category_id',$categoryid)->where('is_active',1)->paginate();
          if($header && $products){
              $category_id=Categories::where('id',$categoryid)->first();

              $data['title']='Best '.$category_id->name.' products | Buyer Seller';
              $data['keyword']=$category_id->name.$header->meta_keyword;
              $data['description']='Find quality '.$category_id->name.' products from reliable suppliers, exporters, manufacturers & wholesalers on buyerseller.asia';

              $parent_cats=Categories::with('parent_cat')->where('id',$category_id->parent_id)->first();

              $country=Country::with('country_region')->where('region_id',1)->get();
              $country_name=Country::with('country_region')->where('id',$countryid)->first();

              $bdtdc_country_list=DB::table('country_list')->where('region_id','!=',1)->get();
             
              return view::make('frontend.category.product',$data,['header'=>$header,'category_id'=>$category_id,'parent_cats'=>$parent_cats,'products'=>$products->appends(Input::except('page')),'bdtdc_country_list'=>$bdtdc_country_list,'country'=>$country,'categoryid'=>$categoryid,'countryid'=>$countryid,'buyer_protection'=>$buyer_protection,'gold_supplier'=>$gold_supplier,'assessed_supplier'=>$assessed_supplier,'search_str'=>$search_str,'origin'=>$origin,'name_combination'=>$name_combination,'country_name'=>$country_name]);
          }
      }

      public function showall(){
          $header=PagesSeo::where('page_id',2)->first();
          $data['title']=$header->title;
          $data['keyword']=$header->meta_keyword;
          $data['description']=$header->meta_description;
          $page_content_title="Product Category";               
          $agent = new Agent();
          $device = $agent->device();         
          if($agent->isPhone())
          {
              return View::make('frontend.mobile-view.all_category_m',$data,['page_content_title'=>$page_content_title]);
          }
          if($agent->isDestop())
          {
              return View::make('frontend.category.allcategory',$data,['page_content_title'=>$page_content_title]);
          }
          if($agent->isTab())
          {
              return View::make('frontend.category.allcategory',$data,['page_content_title'=>$page_content_title]);
          }
          else{
              return View::make('frontend.category.allcategory',$data,['page_content_title'=>$page_content_title]);
          }
      }
      
      public function get_sub_cat($id){
          return Categories::where('parent_id',$id)->get(['name','id']);
      }
          
      public function country_productList(Request $r){
          $input=$r->only('country');
          $cat_id = explode('?', $r->cat_id);
         
          $re = DB::table('product_to_category as cat');
          $re->join('products as p','p.id','=','cat.product_id');
          $re->join('product_description as pd','pd.product_id','=','p.id');
          $re->join('supplier_products as sp','sp.product_id','=','p.id');
          $re->join('users as u','u.id','=','sp.supplier_id');
          $re->join('categories as cat_name','cat_name.id','=','cat.category_id');
          $re->join('companies as company','company.user_id','=','u.id');
          $re->join('company_descriptions as company_description','company_description.company_id','=','company.id');
          $re->join('customer as cus','cus.user_id','=','u.id');
          $re->join('suppliers as s','s.user_id','=','u.id');
          $re->join('product_image as p_image','p_image.product_id','=','p.id');
          $re->join('country_list as country','country.id','=','company.location_of_reg','left');
          $re->join('busines_types as busines_type','busines_type.id','=','s.busines_type_id');
          $re->join('company_trade_info as trade','trade.company_id','=','company.id','left');
          $re->join('product_prices as bdprice','bdprice.product_id','=','p.id','left');
          $re->join('form_values as key_word','key_word.id','=','trade.anual_sales_volume','left');
          $re->join('product_unit as unit','unit.id','=','p.unit_type_id');
          $re->where('cat.category_id',$cat_id[0]);
          $re->orderBy('product_id','desc');
          if(isset($r->assessed_supplier)){
              $re->where('cus.assessed',1);
          }
          if(isset($r->country_id)){
              if($r->country_id != 'all'){
                  $re->where('p.location',$r->country_id);
              }
          }
          if(isset($r->gold_supplier)){
              $re->join('suppliers as bs','bs.user_id','=','cus.user_id');
              $re->where('bs.supplier_package_id','!=',4);
          }
          if(isset($r->trade_assurance)){
              $re->where('cus.trade_assurance',1);
          }

          $re->groupBy('p_image.product_id');
          $data['products'] =$re->get([
              'p.id','pd.name as product_name','p_image.image as images','sp.supplier_id','cat_name.name as cattegory_name',
              'u.first_name','company_description.name as company_name','company.id as company_id','company.year_of_reg as establish_date'
              ,'country.name as country_name','unit.name as unit_name','bdprice.product_MOQ','bdprice.product_FOB'
          ]);

          return View::make('frontend.category.country_product',$data);
     }
      public function bdtdc_home()
      {
          $most_view=MostViewCategory::with('bdtdcMostViewCategory','proimage','proimage_new')->get();
          return view('frontend.mobile-view.about-us-home',compact(['most_view']));
      }
      public function product_filter($parent_id, $category)
      {
          if($category=='showroom'){      
              $key= preg_replace('/[^A-Za-z0-9\.]/',' ',$parent_id);
              $category=ProductDescription::with('product_name_category')->where('name','LIKE','%'.$key.'%')->first();   
              $brandname=0;
              $categoryid = 0;
              $countryid = 0;
              $buyer_protection = false;
              $gold_supplier = false;
              $assessed_supplier = false;

              if($category)
              {
                  if(preg_match('/^\d+$/',$category->product_name_category->category_id or '')) {
                      $categoryid = $category->product_name_category->category_id or '';
                  } else {
                      $search_array = explode('+..+', $category->product_name_category->category_id or '');
                      $categoryid = explode('==',$search_array[0])[1];
                      $countryid = explode('==',$search_array[1])[1];
                      $buyer_protection = explode('==',$search_array[2])[1];
                      $gold_supplier = explode('==',$search_array[3])[1];
                      $assessed_supplier = explode('==',$search_array[4])[1];
                  }
          
          

                  $section="";
                  $products=ProductToCategory::with(['pro_to_cat_name'=>function($c) use($key){$c->where('name','LIKE','%'.$key.'%');},'most_view_category','parent_product'=>function($pp){
                        $pp->orderBy('product_id','desc');
                  },'category_product_id','bdtdcCategory','pro_parent_cat'=>function($q){
                      $q->orderBy('sort_order','asc');
                  },'pro_parent'=>function($q){
                      $q->orderBy('sort_order','asc');
                  },'supp_pro_company'=>function($q){
                      $q->groupBy('id');
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
                  ->orderBy('product_id','desc')
                  ->where('is_active',1)
                  ->paginate(10);

                  $categorys=Categories::with(['parent_cat','cat_parent_cat'=>function ($q){
                  }])->where('id',$categoryid)->first();

                  $country=Country::with('country_region')->where('region_id',1)->get();
                  $bdtdc_country_list=DB::table('country_list')->where('region_id','!=',1)->get();
                  $header=PagesSeo::where('page_id',4)->first();

                  $data['title']=$categorys->name.' '.$header->title;
                  $data['keyword']=$header->meta_keyword;
                  $data['description']=$categorys->name.' '.$header->meta_description;

                  return View::make('frontend.contents-view.product_list',$data,compact(['section','categorys','products','country','bdtdc_country_list','categoryid','countryid','buyer_protection','gold_supplier','assessed_supplier']));
              }
              else
              {
                  $key= preg_replace('/[^A-Za-z0-9\.]/','-',$parent_id);

                  $brand=Products::with('ProductToCategory')->where('brandname','LIKE','%'.$key.'%')->get();
                  $category=$brand[0]->bdtdcProductToCategory->bdtdcCategory->name;
     
                  $brandname=0;
                  $categoryid = 0;
                  $countryid = 0;
                  $buyer_protection = false;
                  $gold_supplier = false;
                  $assessed_supplier = false;

                  if($category)
                  {
                      if(preg_match('/^\d+$/',$brand[0]->bdtdcProductToCategory->category_id or '')) {
                          $categoryid = $brand[0]->bdtdcProductToCategory->category_id or '';
                      } else {
                          $search_array = explode('+..+', $brand[0]->bdtdcProductToCategory->category_id or '');
                          $categoryid = explode('==',$search_array[0])[1];
                          $countryid = explode('==',$search_array[1])[1];
                          $buyer_protection = explode('==',$search_array[2])[1];
                          $gold_supplier = explode('==',$search_array[3])[1];
                          $assessed_supplier = explode('==',$search_array[4])[1];
                      }

                      $section="";
                      $products=ProductToCategory::with(['pro_to_cat_name'=>function($c) use($key){$c->where('name','LIKE','%'.$key.'%');},'bdtdcProduct'=>function($b) use($key){$b->where('brandname','LIKE','%'.$key.'%');},'most_view_category','parent_product'=>function($pp){
                        $pp->orderBy('product_id','desc');
                      },'category_product_id','bdtdcCategory','pro_parent_cat'=>function($q){
                          $q->orderBy('sort_order','asc');
                      },'pro_parent'=>function($q){
                          $q->orderBy('sort_order','asc');
                      },'supp_pro_company'=>function($q){
                          $q->groupBy('id');
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
                      ->orderBy('product_id','desc')
                      ->where('is_active',1)
                      ->paginate(10);

                      $categorys=Categories::with(['parent_cat','cat_parent_cat'=>function ($q){
                      }])->where('id',$categoryid)->first();
                      $country=Country::with('country_region')->where('region_id',1)->get();
                      $bdtdc_country_list=DB::table('country_list')->where('region_id','!=',1)->get();
                      $header=PagesSeo::where('page_id',4)->first();

                      return View::make('frontend.contents-view.product_list',compact(['section','categorys','products','country','bdtdc_country_list','categoryid','countryid','buyer_protection','gold_supplier','assessed_supplier']));
                  }
              }
          }
          else if($category=='supplier'){
              $sn=DB::table('suppliers_info')->get();
        
              $key= preg_replace('/[^A-Za-z0-9\.]/',' ',$parent_id);
              $suppliers=CompanyDescription::where("name", "LIKE",$key."%")->get(); 

              $company=Companies::with(['name_string','users','tradeinfo','main_products'])
                ->WhereHas('name_string', function($c) use ($key){
                  $c->where('name','LIKE','%'.$key.'%');
                })->get();

              return View::make('frontend.contents-view.supplier_details',compact(['company'])); 
          }
          else if($category=='wholesale'){
              $key= preg_replace('/[^A-Za-z0-9\.]/',' ',$parent_id);
              $wholesale=DB::table('wholesale_category')->get();
              $wc=DB::table('wholesale_category_description')->get();
              $c=DB::table('categories')->get();
              $category=WholesaleCategoryDescription::where('name','LIKE','%'.$key.'%')->first();  

              $categoryid = 0;
              $countryid = 0;
              $buyer_protection = false;
              $gold_supplier = false;
              $assessed_supplier = false;

              if(preg_match('/^\d+$/',$category->category_id)) {
                  $categoryid = $category->category_id;
              } else {
                  $search_array = explode('+..+', $category->category_id);
                  $categoryid = explode('==',$search_array[0])[1];
                  $countryid = explode('==',$search_array[1])[1];
                  $buyer_protection = explode('==',$search_array[2])[1];
                  $gold_supplier = explode('==',$search_array[3])[1];
                  $assessed_supplier = explode('==',$search_array[4])[1];
              }

              $section="";
              $products=ProductToCategory::with(['BdtdcWholesaleCategoryDescription'=>function($c) use($key){$c->where('name','LIKE','%'.$key.'%');},'most_view_category','parent_product'=>function($pp){
                        $pp->orderBy('product_id','desc');
                  },'category_product_id','bdtdcCategory','pro_parent_cat'=>function($q){
                      $q->orderBy('sort_order','asc');
                  },'pro_parent'=>function($q){
                      $q->orderBy('sort_order','asc');
                  },'supp_pro_company'=>function($q){
                      $q->groupBy('id');
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
                  ->orderBy('product_id','desc')
                  ->where('is_active',1)
                  ->paginate(10);

              $categorys=Categories::with(['parent_cat','cat_parent_cat'=>function ($q){
              }])->where('id',$categoryid)->first();
              $country=Country::with('country_region')->where('region_id',1)->get();
              $bdtdc_country_list=DB::table('country_list')->where('region_id','!=',1)->get();
              $header=PagesSeo::where('page_id',4)->first();

              $data['title']=$categorys->name.' '.$header->title;
              $data['keyword']=$header->meta_keyword;
              $data['description']=$categorys->name.' '.$header->meta_description;  

              return View::make('frontend.contents-view.product_list',$data,compact(['section','categorys','products','country','bdtdc_country_list','categoryid','countryid','buyer_protection','gold_supplier','assessed_supplier']));
          }
          else {
              $header=CategoryDescription::with(['sub_cat'=>function ($q){
                                              $q->take(15);
                                          },'cat_name'])->where('category_id',$parent_id)->first();
              $id = Route::current()->parameters()['parent_id'];
              $ff=explode('-',$category);
      
              $fff=$ff[0];

              $country=Country::where('name',$fff)->first();
              if($country==null)
              {
                  $country_name='';
                  $country_id='';
              }
              else
              {
                  $country_name=$country->name;
                  $country_id=$country->id;
              }
      
              $as=array('in country');
              $ac=array('country');

              if($header){
                  $ti=str_replace($as,$country_name,$header->meta_title);
                  $ke=str_replace($as,$country_name,$header->meta_keyword);

                  $de=str_replace($as,$country_name,$header->meta_description);

                  $data['title']=str_replace($ac,$country_name,$ti);
                  $data['keyword']=str_replace($ac,$country_name,$ke);

                  $data['description']=str_replace($ac,$country_name,$de);
              }else{
                  $data['title']='none';
                  $data['keyword']='none';

                  $data['description']='none';
              }
              if($header){
                  $name_combination=$header->name;

                  $cat_name_array = explode(',', $data['keyword']);
                  $data['tags'] = explode(',',$header->tag);
          
                  if(count($cat_name_array) > 0){
                      foreach ($cat_name_array as $cat_name_value) {
                          if(trim($cat_name_value) == ''){
                          }
                          else{
                              if($cat_name_value == 's'){
                                  $name_combination .= $cat_name_value;
                              }else{
                                  $name_combination .= ''.$cat_name_value;
                              }
                          }
                      }
                  }
          
                  if($parent_id==499){
                      $products=ProductToCategory::with(['bdtdcProduct','pro_images','bdtdcCategory','pro_images_new','pro_to_cat_name','pro_parent_cat','cat_pro_price','supp_pro_company'])
                                                      ->where('category_id',$parent_id)
                                                      ->where('is_active',1)
                                                      ->orderBy('product_id','desc')
                                                       ->paginate(28);

                      $most_views=MostViewCategory::with(['parent_cat','cat_name','most_product','product_image','proimages','product_image_new','proimages_new'])
                                          ->where('category_id',$parent_id)
                                          ->groupBy('product_id')
                                          ->take(6)
                                          ->get();
                      return View::make('frontend.category.main_category_products',$data,compact(['country_id','country_name','cat_name_array','products','categorys','most_views','header'])); 

                  }
                  $products=ProductToCategory::with(['bdtdcProduct','bdtdcProduct.product_name','bdtdcProduct.product_unit','pro_images','bdtdcCategory','pro_images_new','pro_to_cat_name','pro_parent_cat','cat_pro_price','supp_pro_company'])
                              ->join('categories as cat','cat.id','=','category_id' )
                              ->where('cat.parent_id',$parent_id)
                              ->where('is_active',1)
                              ->orderBy('product_id','desc')
                               ->paginate(16);

                  $most_views=MostViewCategory::with(['parent_cat','cat_name','cat_name.category_name','most_product','product_image','proimages','product_image_new','proimages_new'])
                            ->where('parent_id',$parent_id)
                            ->groupBy('product_id')
                            ->take(6)
                            ->get();
                        
                  $data['toplink']=Categories::where('top',0)->take(8)->get();
                  return View::make('frontend.category.main_category_products',$data,compact(['country_id','country_name','cat_name_array','products','most_views','header']));     
              }
              else{
                  return View::make('errors.aggencies');
              }
          }
      }
}
