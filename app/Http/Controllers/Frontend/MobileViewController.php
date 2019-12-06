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
use App\Models\SupplierProduct;
use Sentinel;
use Redirect;
use App\Models\Role_user;
use App\Models\Country;
use App\SupplierQuery;
use App\Models\CustomerActivity;
use App\Models\SupplierInquery;
use App\Models\InqueryDocs;
use App\Models\PagesSeo;
use App\Models\SupplierInfo;
use App\Models\Company;
use App\Models\WholesaleCategory;
use App\Models\ProductToWholesaleCategory;


class MobileViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }
    public function inquire_response()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.inquire-reaply',$data);
    }

    public function live_country()
    {
         return view::make('frontend.mobile-view.live_country');
    }
    public function post_buying_request()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.post-buying-request',$data);
    }
     public function product_sourceing()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.bdsource-view',$data);
    }
     public function cool_technology()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.cool-technology',$data);
    }
    public function warehouse_product()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.warehouse-product',$data);
    }
    public function Feedback_center()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.help-center',$data);
    }
    public function buying_request()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.buying-request',$data);
    }
    public function inquiries_msg()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.inquiries-message',$data);
    }
    public function messanger_chat()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.messanger',$data);
    }
    public function buyer_preference()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.buyer-preference-product',$data);
    }
    public function quality_supplier()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        $quality_supplier=SupplierInfo::with('name_string'
            ,'product_to_category','company','business_supplier','product_category')
                        ->paginate(10);
        //$selected_supplier=BdtdcCompany::with('company_description','location_of_reg_string','supplier')->take(5)->get();
        $selected_supplier=ProductToCategory::with('bdtdcCategory','cat_country','pro_parent_cat')
                        ->groupBy('parent_id')
                        ->get();
        
        $company=DB::table('country_list')->get();
        // dd($company);
        return view::make('frontend.mobile-view.quality-supplier',$data,compact('quality_supplier','selected_supplier'));
    }
    public function indiv_country_product($category_id,$country_id)
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        $category_supplier=ProductToCategory::
            with(['supplier_info'=>function($q){
            }])
          
            ->where('parent_id',$category_id)
            ->where('country_id',$country_id)
            ->groupBy('company_id')
            ->paginate(10);

       
        return view::make('frontend.mobile-view.country-city-product',$data,compact('category_supplier'));
    }
    public function product_category()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        $all_category=Categories::with('parent_cat')->where('parent_id',0)->get();
        // dd($all_category);
        return view::make('frontend.mobile-view.category-view',$data,compact('all_category'));
    }
    public function product_by_region()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.product-of-country',$data);
    }
    public function bdsource_buyer()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.source-for-buyer',$data);
    }
    public function bdsource_product()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.source-product',$data);
    }
    public function wholesale_product()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.wholesale-product',$data);
    }
    public function selected_country_supplier()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.select-country',$data);
    }
     public function product_of_month()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.product-of-month',$data);
    }
     public function company_info()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.company_profile_m',$data);
    }
    public function contact_supp()
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        return view::make('frontend.mobile-view.contact_supplier',$data);
    }
    public function wholesale_subcategory($name,$id)
    {
        $sub_category=WholesaleCategory::with('parent_cat')->where('id',$id)->first();
        // dd($sub_category);
        return view::make('frontend.mobile-view.wholesale_subcategory',compact('sub_category'));
    }
    public function sub_category($name, $id)
    {
        // return $id;
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;

        //$parent_category = BdtdcCategory::where('parent_id',$id)->orderByRaw("RAND()")->get();
        //dd($parent_category);
        $sub_category=Categories::with('parent_cat')->where('id',$id)->first();
         // dd($sub_category);
        // return $sub_category->parent_cat;
        return view::make('frontend.mobile-view.product-category',$data,compact('sub_category'));
    }
    public function sub_category_pro_view($id)
    {
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        $product=ProductToCategory::with('bdtdcProduct','bdtdcCategory','pro_to_cat_name','cat_pro_price')->where('category_id',$id)->paginate(10);
        // return $product->cat_pro_price;
        return view::make('frontend.mobile-view.product-category-view',$data,compact('product'));
    }
    public function wholesale_sub_category_pro_view($id)
    {
        $wholesale_product=ProductToWholesaleCategory::with('bdtdcProduct','bdtdcCategory','category_product_name','cat_pro_price')->where('category_id',$id)->paginate(10);
        // return $product->cat_pro_price;
        return view::make('frontend.mobile-view.wholesale-product-category-view',compact('wholesale_product'));
    }
    public function my_favorite()
    {
        if(Sentinel::check())
        {
            $user_id =Sentinel::getUser()->id;
            $favorite_product=CustomerActivity::with('products','bdtdc_product_category')
                            ->where('customer_id',$user_id)->get();
        
            return view::make('frontend.mobile-view.my_favorite',compact('favorite_product'));
        }
        else{
            return redirect()->route('login')->withFlashMessage('You must first login or register before accessing this page.');
        }

    }
 public function company_profile(){
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
      return view::make('frontend.mobile-view.company-home',$data);
 }
 public function company_profile_product(){
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
      return view::make('frontend.mobile-view.product-template',$data);
 }
 public function company_profile_info(){
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
      return view::make('frontend.mobile-view.company-profile',$data);
 }
 public function company_contact(){
        $header=PagesSeo::where('page_id',101)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
       return view::make('frontend.mobile-view.company-contact-profile',$data);
 }
}
