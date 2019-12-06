<?php

namespace App\Http\Controllers\Frontend;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidationController;
use App\Models\BusinesType;
use App\Models\Country;
use App\Models\CustomerGroup;
use Illuminate\Http\Request;
use DB;
use App\Models\Products;
use view;
use Input;
use Sentinel;
use App\Models\ProductDescription;
use App\Models\ProductPrice;
use App\Models\CompanyDescription;
use App\Models\Companies;
use App\Models\PagesSeo;
use App\Models\Supplier;
use App\Models\Users;
use App\Models\Role;
use App\Models\Role_user;
use App\Models\ProductToCategory;
use Jenssegers\Agent\Agent;

class PagesController extends Controller
{
    public $restful=true;


    public function getHome()
    {
        return view('frontend.index',compact(['countries','business']),$data);
    }
    public function getAbout()
    {
        return view('frontend.contents-view.about');
    }

    public function getContact()
    {
         $header=PagesSeo::where('page_id',124)->first();
              $data['title']=$header->title;
               $data['keyword']=$header->meta_keyword;
              $data['description']=$header->meta_description;
            $page_content_title ='';
            return View::make('frontend.contents-view.contact',$data,['page_content_title'=>$page_content_title]);
    }
    public function post_registration(ValidationController $request){
        return $request->all();
    }
    public function search(){
        return View::make('frontend.layouts.header');
    }

    public function search_store(Request $r, $search_value){
        $search_array = explode('+..+', $search_value);
        $search = explode('==',$search_array[0])[1];
        $key = explode('==',$search_array[1])[1];
        $country = explode('==',$search_array[2])[1];
        $buyer_protection = explode('==',$search_array[3])[1];
        $gold_supplier = explode('==',$search_array[4])[1];
        $assessed_supplier = explode('==',$search_array[5])[1];
        $filter_by_main_market = explode('==',$search_array[6])[1];
        $filter_by_total_revanue = explode('==',$search_array[7])[1];
        $filter_by_employe = explode('==',$search_array[8])[1];
        $origin = $r->origin;
        $category = $r->category;
        $business_type = $r->business_type;
        
        $search_str = $key;
        if($search == "products")
        {
            $searched_on = $search;
            $products = $this->search_product($key,$country,$buyer_protection,$gold_supplier,$assessed_supplier,$filter_by_main_market,$filter_by_total_revanue,$filter_by_employe,$origin,$category);
            $main_market_status = $this->main_market_status();
            $revanue = $this->revanue();
            $total_employe = $this->total_employe();
            $country_data=Country::with('country_region')->where('region_id',1)->get();
            $bdtdc_country_list=DB::table('country_list')->where('region_id','!=',1)->get();

            $agent = new Agent();
        
            if($agent->isMobile())

            {
             return view::make('frontend.mobile-view.search_value_details',['products' => $products->appends(Input::except('page'))],compact('products','main_market_status','revanue','total_employe','searched_on','search_str','bdtdc_country_list','country_data','country','buyer_protection','gold_supplier','assessed_supplier','filter_by_main_market','filter_by_total_revanue','filter_by_employe','origin','category'));
            }
            else{
              return view::make('frontend.supplier.product_list',['products' => $products->appends(Input::except('page'))],compact('products','main_market_status','revanue','total_employe','searched_on','search_str','bdtdc_country_list','country_data','country','buyer_protection','gold_supplier','assessed_supplier','filter_by_main_market','filter_by_total_revanue','filter_by_employe','origin','category'));
            } 

        }
        if($search == "suppliers")
        {
            $searched_on = $search;
            // $suppliers = $this->search_supplier($key);
            $suppliers = $this->search_supplier($key,$country,$buyer_protection,$gold_supplier,$assessed_supplier,$filter_by_main_market,$filter_by_total_revanue,$filter_by_employe,$business_type);
            $country_id = $country;
             // dd($suppliers);
            $main_market_status = $this->main_market_status();
            $revanue = $this->revanue();
            $total_employe = $this->total_employe();
            $country_data=Country::with('country_region')->where('region_id',1)->get();
            $bdtdc_country_list=DB::table('country_list')->where('region_id','!=',1)->get();
            $country_name_bd=Country::with('country_region')->where('id',$country_id)->first();
            if($country_name_bd){
                $country_name_title = $country_name_bd->name;
            }else{
                $country_name_title = "All Countrie's";
            }
            $title=$country_name_title.' Suppliers, manufacturers & exporters at BDTDC Example: Bangladesh Suppliers, Manufacturers & Exporters at BDTDC';
            $description='Find verified '.$country_name_title.' suppliers, manufacturers & exporters for quality products at buyerseller.asia, the largest and reliable online sourcing platform in Bangladesh.';

            $agent = new Agent();
            if($agent->isMobile()){
             return View::make('frontend.mobile-view.supplier',['suppliers'=>$suppliers->appends(Input::except('page'))],compact('main_market_status','revanue','total_employe','searched_on','search_str','bdtdc_country_list','country_data','country_id','buyer_protection','gold_supplier','assessed_supplier','filter_by_main_market','filter_by_total_revanue','filter_by_employe','business_type','title','description'));
            }else{
             return View::make('frontend.supplier.supplier_list',['suppliers'=>$suppliers->appends(Input::except('page'))],compact('main_market_status','revanue','total_employe','searched_on','search_str','bdtdc_country_list','country_data','country_id','buyer_protection','gold_supplier','assessed_supplier','filter_by_main_market','filter_by_total_revanue','filter_by_employe','business_type','title','description'));
            } 


            
        }
        if($search == "news"){
            return redirect('Sourcing/Requests/info/category==0+..+country==0+..+key=='.$key.'+..+order==0');
        }
        if($search== "factory")
        {
           $searched_on = $search;
            // $suppliers = $this->search_supplier($key);
            $suppliers = $this->search_supplier($key,$country,$buyer_protection,$gold_supplier,$assessed_supplier,$filter_by_main_market,$filter_by_total_revanue,$filter_by_employe);
            $country_id = $country;
            // dd($suppliers);
            $main_market_status = $this->main_market_status();
            $revanue = $this->revanue();
            $total_employe = $this->total_employe();
            $country_data=Country::with('country_region')->where('region_id',1)->get();
            $bdtdc_country_list=DB::table('country_list')->where('region_id','!=',1)->get();
            
            return View::make('frontend.supplier.supplier_list',['suppliers'=>$suppliers->appends(Input::except('page'))],compact('main_market_status','revanue','total_employe','searched_on','search_str','bdtdc_country_list','country_data','country_id','buyer_protection','gold_supplier','assessed_supplier','filter_by_main_market','filter_by_total_revanue','filter_by_employe','factory','traders'));
        }
        if($search== "trade")
        {
            $searched_on = $search;
            // $suppliers = $this->search_supplier($key);
            $suppliers = $this->search_supplier($key,$country,$buyer_protection,$gold_supplier,$assessed_supplier,$filter_by_main_market,$filter_by_total_revanue,$filter_by_employe);
            $country_id = $country;
            // dd($suppliers);
            $main_market_status = $this->main_market_status();
            $revanue = $this->revanue();
            $total_employe = $this->total_employe();
            $country_data=Country::with('country_region')->where('region_id',1)->get();
            $bdtdc_country_list=DB::table('country_list')->where('region_id','!=',1)->get();
            //$header=BdtdcPageSeo::where('page_id',170)->first();
           $data['title']=$country.' Suppliers, manufacturers & exporters at BDTDC Example: Bangladesh Suppliers, Manufacturers & Exporters at BDTDC';
           $data['description']='Find verified '.$country.' suppliers, manufacturers & exporters for quality products at buyerseller.asia, the largest and reliable online sourcing platform in Bangladesh.';

            return View::make('frontend.supplier.supplier_list',['suppliers'=>$suppliers->appends(Input::except('page'))],compact('main_market_status','revanue','total_employe','searched_on','search_str','bdtdc_country_list','country_data','country_id','buyer_protection','gold_supplier','assessed_supplier','filter_by_main_market','filter_by_total_revanue','filter_by_employe','factory','traders',$data));
        }
    }

    public function bangladesh_suppliers(Request $r, $search_value=null){
        if($search_value){
            $search_array = explode('+..+', $search_value);
            $search = explode('==',$search_array[0])[1];
            $key = explode('==',$search_array[1])[1];
            $country = explode('==',$search_array[2])[1];
            $buyer_protection = explode('==',$search_array[3])[1];
            $gold_supplier = explode('==',$search_array[4])[1];
            $assessed_supplier = explode('==',$search_array[5])[1];
            $filter_by_main_market = explode('==',$search_array[6])[1];
            $filter_by_total_revanue = explode('==',$search_array[7])[1];
            $filter_by_employe = explode('==',$search_array[8])[1];
            $origin = $r->origin;
            $category = $r->category;
            $business_type = $r->business_type;
        }else{
            $search = 'suppliers';
            $key = '';
            $country = 18;
            $buyer_protection = false;
            $gold_supplier = false;
            $assessed_supplier = false;
            $filter_by_main_market = 0;
            $filter_by_total_revanue = 0;
            $filter_by_employe = 0;
            $origin = $r->origin;
            $category = $r->category;
            $business_type = $r->business_type;
        }
        
        $search_str = $key;
        $searched_on = $search;
        $suppliers = $this->search_supplier($gold_supplier,$key,$country,$buyer_protection,$assessed_supplier,$filter_by_main_market,$filter_by_total_revanue,$filter_by_employe,$business_type);
        $country_id = $country;
        $main_market_status = $this->main_market_status();
        $revanue = $this->revanue();
        $total_employe = $this->total_employe();
        $country_data=Country::with('country_region')->where('region_id',1)->get();
        $bdtdc_country_list=DB::table('country_list')->where('region_id','!=',1)->get();
        
        $data['title']='Bangladesh Suppliers- Reliable Bangladeshi Suppliers & Manufacturers at buyerseller.asia';
        $data['description']='Get high-quality manufactured products from Bangladesh suppliers. Reliable Bangladesh suppliers can be found easily at buyerseller.asia. Bangladeshi Suppliers are now widely known.';
        $data['keyword'] = 'Bangladesh suppliers, Bangladesh supplier, Bangladeshi suppliers, best bangladesh suppliers,Bangladesh Supply,Bangladesh reliable suppliers, list of bangladeshi suppliers, Suppliers directory of Bangladesh, List of Bangladesh Suppliers, Bdtdc Suppliers, wholesale Bangladesh Suppliers';

        $agent = new Agent();
        
        $device = $agent->device();
         
        
        if($agent->isMobile())
        {

            return View::make('frontend.mobile-view.bangladeshi_suppliers',$data,['suppliers'=>$suppliers->appends(Input::except('page')),'main_market_status'=>$main_market_status,'revanue'=>$revanue,'total_employe'=>$total_employe,'searched_on'=>$searched_on,'search_str'=>$search_str,'bdtdc_country_list'=>$bdtdc_country_list,'country_data'=>$country_data,'country_id'=>$country_id,'buyer_protection'=>$buyer_protection,'gold_supplier'=>$gold_supplier,'assessed_supplier'=>$assessed_supplier,'filter_by_main_market'=>$filter_by_main_market,'filter_by_total_revanue'=>$filter_by_total_revanue,'filter_by_employe'=>$filter_by_employe,'business_type'=>$business_type]);
        }
        if($agent->isDestop())
        {
            return View::make('frontend.supplier.bangladesh_suppliers',$data,['suppliers'=>$suppliers->appends(Input::except('page')),'main_market_status'=>$main_market_status,'revanue'=>$revanue,'total_employe'=>$total_employe,'searched_on'=>$searched_on,'search_str'=>$search_str,'bdtdc_country_list'=>$bdtdc_country_list,'country_data'=>$country_data,'country_id'=>$country_id,'buyer_protection'=>$buyer_protection,'gold_supplier'=>$gold_supplier,'assessed_supplier'=>$assessed_supplier,'filter_by_main_market'=>$filter_by_main_market,'filter_by_total_revanue'=>$filter_by_total_revanue,'filter_by_employe'=>$filter_by_employe,'business_type'=>$business_type]);
        }

        if($agent->isTab())
        {
            return View::make('frontend.supplier.bangladesh_suppliers',$data,['suppliers'=>$suppliers->appends(Input::except('page')),'main_market_status'=>$main_market_status,'revanue'=>$revanue,'total_employe'=>$total_employe,'searched_on'=>$searched_on,'search_str'=>$search_str,'bdtdc_country_list'=>$bdtdc_country_list,'country_data'=>$country_data,'country_id'=>$country_id,'buyer_protection'=>$buyer_protection,'gold_supplier'=>$gold_supplier,'assessed_supplier'=>$assessed_supplier,'filter_by_main_market'=>$filter_by_main_market,'filter_by_total_revanue'=>$filter_by_total_revanue,'filter_by_employe'=>$filter_by_employe,'business_type'=>$business_type]);
        }
        else{
          
            return View::make('frontend.supplier.bangladesh_suppliers',$data,['suppliers'=>$suppliers->appends(Input::except('page')),'main_market_status'=>$main_market_status,'revanue'=>$revanue,'total_employe'=>$total_employe,'searched_on'=>$searched_on,'search_str'=>$search_str,'bdtdc_country_list'=>$bdtdc_country_list,'country_data'=>$country_data,'country_id'=>$country_id,'buyer_protection'=>$buyer_protection,'gold_supplier'=>$gold_supplier,'assessed_supplier'=>$assessed_supplier,'filter_by_main_market'=>$filter_by_main_market,'filter_by_total_revanue'=>$filter_by_total_revanue,'filter_by_employe'=>$filter_by_employe,'business_type'=>$business_type]);
        }
    }

    public function bangladesh_trade(){

        $data['title']='Bangladesh trade - Improving trade in Bangladesh by buyerseller.asia';

        $data['description']='Bangladesh trade has now become easier. buyerseller.asia has enabled Trade in Bangladesh to be profitable for all. Bangladesh exports different high-quality apparel products';

        $data['keyword'] = 'Bangladesh trade, trade in Bangladesh, International trade,Bangladesh exports, Bangladesh imports';

        return View::make('frontend.supplier.bangladesh_trade',$data);
    }

    public function filter_by_main_market(Request $r){
        if($r->searched_on == "suppliers"){
            $market = DB::table('company_main_markets as m');
            for($i=0,$len=count($r->filter_by_main_market);$i<$len;$i++){
                $market->orwhere('m.main_market_zone',$r->filter_by_main_market[$i]);
            }
            $market->join('company_descriptions as cd','cd.company_id','=','m.company_id');
            $market->join('companies as c','cd.company_id','=','c.id');
            $market->join('users as u','c.user_id','=','u.id');
            $market->join('country_list as country','country.id','=','c.location_of_reg','left');
            $market->join('company_trade_info as ti','ti.company_id','=','c.id','left');
            $market->join('form_values as fv','fv.id','=','ti.anual_sales_volume','left');
            $market->orderBy('main_market_zone','ASC');
            $market->groupBy('c.id');
            $result = $market->get(['u.id as user_id','u.first_name as supplier_name','m.main_market_zone',
                'cd.name as company_name','c.id as company_id',
                'country.name as country','fv.value as anual_sales_volume',
            ]);
            $suppliers = $this->return_final_supplier_arr($result);
            return View::make('frontend.supplier.filter_by_main_market',compact('suppliers'));
        }else{
            //return $r->all();
            
            $product = DB::table('product_description as pd');
            $product->join('products as p','p.id','=','pd.product_id');
            $product->join('supplier_products as sp','sp.product_id','=','p.id');
            $product->join('users as u','u.id','=','sp.supplier_id');
            $product->join('customer as customer','customer.user_id','=','u.id','left');
            $product->join('product_to_category as cat','cat.product_id','=','p.id');
            $product->join('categories as cat_name','cat_name.id','=','cat.category_id');
            $product->join('companies as company','company.user_id','=','u.id');
            $product->join('company_descriptions as company_description','company_description.company_id','=','company.id');
            $product->join('company_main_markets as m','company_description.company_id','=','m.company_id');
            $product->join('country_list as country','country.id','=','company.location_of_reg','left');
            $product->join('product_unit as unit','unit.id','=','p.unit_type_id');
            $product->where('pd.name','LIKE','%'.$r->search_str.'%');
            $product->whereIn('m.main_market_zone', $r->filter_by_main_market);
            $product->groupBy('pd.product_id');
            $product->take(30);
            $products = $product->get([
                'p.id','pd.name as product_name','p.image','sp.supplier_id','cat_name.name as cattegory_name','u.first_name',
                'company_description.name as company_name','company.id as company_id','company.year_of_reg as establish_date',
                'country.name as country_name','unit.name as unit_name'
            ]);
            //return $products;
            return view::make('frontend.supplier.filtered_product_list',compact('products'));
        }
    }

    public function filter_by_total_revanue($id,$search_str){
        return explode('_',$id);
        switch(explode('_',$id)[0]){
            case "suppliers":
                $revanue = DB::table('company_trade_info as ti')
                    ->join('companies as c','c.id','=','ti.company_id','left')
                    ->join('company_descriptions as cd','cd.company_id','=','c.id','left')
                    ->join('users as u','c.user_id','=','u.id')
                    ->join('country_list as country','country.id','=','c.location_of_reg','left')
                    ->join('form_values as fv','fv.id','=','ti.anual_sales_volume','left')
                    ->where('ti.anual_sales_volume',explode('_',$id)[1])
                    ->get(['u.id as user_id','u.first_name as supplier_name',
                        'cd.name as company_name','c.id as company_id',
                        'country.name as country','fv.value as anual_sales_volume',
                    ]);
                $suppliers = $this->return_final_supplier_arr($revanue);
                return View::make('frontend.supplier.filter_by_main_market',compact('suppliers'));
                break;
            case "products":
                $product = DB::table('product_description as pd');
                $product->join('products as p','p.id','=','pd.product_id');
                $product->join('supplier_products as sp','sp.product_id','=','p.id');
                $product->join('users as u','u.id','=','sp.supplier_id');
                $product->join('customer as customer','customer.user_id','=','u.id','left');
                $product->join('product_to_category as cat','cat.product_id','=','p.id');
                $product->join('category as cat_name','cat_name.id','=','cat.category_id');
                $product->join('companies as company','company.user_id','=','u.id');
                $product->join('company_descriptions as company_description','company_description.company_id','=','company.id');
                $product->join('company_trade_info as ti','ti.company_id','=','company.id');
                $product->join('country_list as country','country.id','=','company.location_of_reg','left');
                $product->join('product_unit as unit','unit.id','=','p.unit_type_id');
                $product->where('pd.name','LIKE','%'.$search_str.'%');
                $product->where('ti.anual_sales_volume',explode('_',$id)[1]);
                $product->groupBy('pd.product_id');
                $product->take(30);
                $products = $product->get([
                    'p.id','pd.name as product_name','p.image','sp.supplier_id','cat_name.name as cattegory_name','u.first_name',
                    'company_description.name as company_name','company.id as company_id','company.year_of_reg as establish_date',
                    'country.name as country_name','unit.name as unit_name'
                ]);
                //return $products;
                return view::make('frontend.supplier.filtered_product_list',compact('products'));
        }
        
    }
    public function filter_by_employe($id,$search_str){
        //return explode('_',$id);
        switch(explode('_',$id)[0]){
            case "suppliers":
                $total_employe = DB::table('companies as c')
                    //->join('bdtdc_companies as c','c.id','=','ti.company_id','left')
                    ->join('company_descriptions as cd','cd.company_id','=','c.id','left')
                    ->join('users as u','c.user_id','=','u.id')
                    ->join('country_list as country','country.id','=','c.location_of_reg','left')
                    ->join('company_trade_info as ti','c.id','=','ti.company_id','left')
                    ->join('form_values as fv','fv.id','=','ti.anual_sales_volume','left')
                    ->where('c.total_employe',explode('_',$id)[1])
                    ->get(['u.id as user_id','u.first_name as supplier_name',
                        'cd.name as company_name','c.id as company_id',
                        'country.name as country','fv.value as anual_sales_volume',
                    ]);
                $suppliers = $this->return_final_supplier_arr($total_employe);
                return View::make('frontend.supplier.filter_by_main_market',compact('suppliers'));
                break;
            case "products":
                //return explode('_',$id)[1];
                $product = DB::table('product_description as pd');
                $product->join('products as p','p.id','=','pd.product_id');
                $product->join('supplier_products as sp','sp.product_id','=','p.id');
                $product->join('users as u','u.id','=','sp.supplier_id');
                $product->join('customer as customer','customer.user_id','=','u.id','left');
                $product->join('product_to_category as cat','cat.product_id','=','p.id');
                $product->join('categories as cat_name','cat_name.id','=','cat.category_id');
                $product->join('companies as company','company.user_id','=','u.id');
                $product->join('company_descriptions as company_description','company_description.company_id','=','company.id');
                $product->join('country as country','country.id','=','company.location_of_reg','left');
                $product->join('product_unit as unit','unit.id','=','p.unit_type_id');
                $product->where('pd.name','LIKE','%'.$search_str.'%');
                $product->where('company.total_employe',explode('_',$id)[1]);
                $product->groupBy('pd.product_id');
                $product->take(30);
                $products = $product->get([
                    'p.id','pd.name as product_name','p.image','sp.supplier_id','cat_name.name as cattegory_name','u.first_name',
                    'company_description.name as company_name','company.id as company_id','company.year_of_reg as establish_date',
                    'country.name as country_name','unit.name as unit_name'
                ]);
                //return $products;
                return view::make('frontend.supplier.filtered_product_list',compact('products'));
                break;
        }
    }
    public function others_filter(Request $r){
        // dd($r->searched_on);
        $search_str = $r->search_str;
        $searched_on = $r->searched_on;
        if($r->searched_on == "suppliers"){
            $other_filter = DB::table('customer as customer');
            $other_filter->join('users as u','customer.user_id','=','u.id');
            $other_filter->join('companies as c','c.user_id','=','customer.user_id');
            $other_filter->join('company_descriptions as cd','cd.company_id','=','c.id','left');
            $other_filter->join('country_list as country','country.id','=','c.location_of_reg','left');
            $other_filter->join('company_trade_info as ti','c.id','=','ti.company_id','left');
            $other_filter->join('form_values as fv','fv.id','=','ti.anual_sales_volume','left');
            if(isset($r->assessed_supplier)){
                $other_filter->where('customer.assessed',1);
            }
            if(isset($r->countery)){
                if($r->countery != 0){
                    $other_filter->where('c.location_of_reg',$r->countery);
                }
            }
            if(isset($r->gold_supplier)){
                $other_filter->join('suppliers as bs','bs.user_id','=','customer.user_id');
                $other_filter->where('bs.supplier_package_id','!=',4);
            }
            if(isset($r->trade_assurence)){
                $other_filter->where('customer.trade_assurance',1);
            }
            $other_filter->take(30);
            $result=$other_filter->get(['u.id as user_id','u.first_name as supplier_name',
                'cd.name as company_name','c.id as company_id',
                'country.name as country','fv.value as anual_sales_volume',
            ]);
            $suppliers = $this->return_final_supplier_arr($result);
            return View::make('frontend.supplier.filter_by_main_market',compact('suppliers','searched_on','search_str'));
        }else{
            //return $r->all();
            $product = DB::table('product_description as pd');
            $product->join('products as p','p.id','=','pd.product_id');
            $product->join('supplier_products as sp','sp.product_id','=','p.id');
            $product->join('users as u','u.id','=','sp.supplier_id');
            $product->join('customer as customer','customer.user_id','=','u.id','left');
            $product ->join('product_to_category as cat','cat.product_id','=','p.id');
            $product->join('categories as cat_name','cat_name.id','=','cat.category_id');
            $product->join('categories as cat_name2','cat_name2.id','=','cat.parent_id');
            $product->join('companies as company','company.user_id','=','u.id');
            $product->join('company_descriptions as company_description','company_description.company_id','=','company.id');
            $product->join('bdtdc_country as country','country.id','=','company.location_of_reg','left');
            $product->join('product_unit as unit','unit.id','=','p.unit_type_id');
            $product->where('pd.name','LIKE','%'.$r->search_str.'%');
            if(isset($r->assessed_supplier)){
                $product->where('customer.assessed',1);
            }
            if(isset($r->countery)){
                if($r->countery != 0){
                    $product->where('company.location_of_reg',$r->countery); 
                }
            }
            if(isset($r->gold_supplier)){
                $product->join('suppliers as bs','bs.user_id','=','customer.user_id');
                $product->where('bs.supplier_package_id','!=',4);
            }
            if(isset($r->trade_assurence)){
                $product->where('customer.trade_assurance',1);
            }
            $product->take(30);
            $products = $product->get([
                'p.id','pd.name as product_name','p.image','sp.supplier_id','cat_name2.name as parent_name','cat_name.name as cattegory_name','u.first_name',
                'company_description.name as company_name','company.id as company_id','company.year_of_reg as establish_date',
                'country.name as country_name','unit.name as unit_name'
            ]);
            
            return view::make('frontend.supplier.filtered_product_list',compact('products','searched_on','search_str'));
        }
        
    }

    /******ALL HELPER METHODE REGURDING SEARCH AND FILTER********/
    public function search_product($key,$country,$buyer_protection,$gold_supplier,$assessed_supplier,$filter_by_main_market,$filter_by_total_revanue,$filter_by_employe,$origin,$category){

        $product_data = BdtdcProduct::query();

        $product_data->whereIn('bdtdcProductToCategory', function($offerQuery) use ($country,$filter_by_main_market,$filter_by_total_revanue, $filter_by_employe){
                        
                        $offerQuery->whereIn('supp_pro_company', function($offerQuery) use ($country, $filter_by_employe){
                            if($country != 0){
                                $offerQuery->where('location_of_reg', '=', $country);
                            }
                            if($filter_by_employe != 0){
                                $offerQuery->where('total_employe', '=', $filter_by_employe);
                            }
                            $offerQuery->whereIn('Role_user', function($offerQuery) {
                                    $offerQuery->where('role_id', '=', 3);
                            });
                        });

                        if($filter_by_total_revanue != 0){
                            $offerQuery->whereIn('tradeinfo', function($offerQuery) use ($filter_by_total_revanue){
                                    $offerQuery->where('anual_sales_volume', '=', $filter_by_total_revanue);
                            });
                        }
                        if($filter_by_main_market != 0){
                            $offerQuery->whereIn('companymainmarket', function($offerQuery) use ($filter_by_main_market){
                                $filter_by_main_market_arr = explode(',', $filter_by_main_market);
                                $i = 1;
                                foreach ($filter_by_main_market_arr as $value) {
                                    if($i == 1){
                                        $offerQuery->where('main_market_zone', '=', $value);
                                    }else{
                                        $offerQuery->orWhere('main_market_zone', '=', $value);
                                    }
                                    $i++;
                                }
                            });
                        }
                        
                    });
                    

                    $product_data->whereIn('product_country', function($offerQuery) use ($origin){
                        if($origin){
                            $offerQuery->where('id', $origin);
                        }
                    });
                    
                   
                    $product_data->whereIn('bdtdcProductToCategory', function($offerQuery) use ($buyer_protection, $assessed_supplier, $gold_supplier,$category){
                        if($buyer_protection == 'true'){
                            $offerQuery->whereIn('bdtdc_customer', function($offerQuery){
                                $offerQuery->where('trade_assurance', 1);
                            });
                        }
                        if($assessed_supplier == 'true'){
                            $offerQuery->whereIn('bdtdc_customer', function($offerQuery){
                                $offerQuery->where('assessed', 1);
                            });
                        }
                        if($gold_supplier == 'true'){
                            $offerQuery->whereIn('bdtdc_customer', function($offerQuery){
                                $offerQuery->where('gold_member', 1);
                            });
                        }
                        if($category){
                            $offerQuery->where('category_id', $category);
                        }
                    })

                    ->where(function($subQuery) use ($key)
                    {
                        if($key != ''){
                            $subQuery->where(function($subQuery) use ($key)
                            {
                                $subQuery->whereIn('product_name', function($offerQuery) use ($key){
                                    $offerQuery->where('name', 'LIKE', '%'.$key.'%');
                                    // $offerQuery->orWhere('brandname', 'LIKE', '%'.$key.'%');
                                });
                            })
                            ->orWhere('brandname', 'LIKE', '%'.$key.'%')
                            ->orWhere(function($subQuery) use ($key)
                                {
                                    $subQuery->whereIn('bdtdcProductToCategory', function($offerQuery) use ($key){
                                            $offerQuery->whereIn('supp_pro_company_name', function($offerQuery) use ($key){
                                                $offerQuery->where('name', 'LIKE', '%'.$key.'%');
                                                // $offerQuery->orWhere('brandname', 'LIKE', '%'.$key.'%');
                                            });
                                        });
                                        
                                });
                        }
                    });
                    

                    // ->orwhere('id', '=', $key)
                    if($country == 0){
                        $product_data->where('location', '>', 17);
                    }
                    $product = $product_data->orderby('location','asc')->paginate(30);

                    return $product;
    }
    public function search_supplier($key,$country,$buyer_protection,$gold_supplier,$assessed_supplier,$filter_by_main_market,$filter_by_total_revanue,$filter_by_employe,$business_type){

        $query = Companies::query();
        $query->with(['name_string','users','company_description','company_description.company_product','company_description.company_product.pro_to_cat_name','company_description.company_product.pro_images_new','company_description.company_product.pro_images','location_of_reg_string','tradeinfo','tradeinfo.BdtdcFormValue','main_products']);
         if($gold_supplier == 'true'){
            $query->whereHas('customers', function($offerQuery) {
                $offerQuery->where('gold_member', 1);

            });
        }

        if($country != 0){
            $query->where('location_of_reg', '=', $country);
            
        }else{
            $query->where('location_of_reg','>',17);
        }

        if($business_type && $business_type != null && $business_type != ''){
        $query->whereHas('supplier', function($offerQuery) use ($business_type){
                    $offerQuery->where('busines_type_id', '=', $business_type);
                
            });
        }

        if($filter_by_total_revanue != 0){
            $query->whereHas('tradeinfo', function($offerQuery) use ($filter_by_total_revanue){
                    $offerQuery->where('anual_sales_volume', '=', $filter_by_total_revanue);
                });
        }

        if($filter_by_main_market != 0){
            $query->whereHas('companymainmarket', function($offerQuery) use ($filter_by_main_market){
                    $filter_by_main_market_arr = explode(',', $filter_by_main_market);
                    $i = 1;
                    foreach ($filter_by_main_market_arr as $value) {
                        if($i == 1){
                            $offerQuery->where('main_market_zone', '=', $value);
                        }else{
                            $offerQuery->orWhere('main_market_zone', '=', $value);
                        }
                        $i++;
                    }
                });
        }

        if($buyer_protection == 'true'){
            $query->whereHas('customers', function($offerQuery) {
                $offerQuery->where('trade_assurance', 1);

            });
        }

        if($assessed_supplier == 'true'){
            $query->whereHas('customers', function($offerQuery) {
                $offerQuery->where('assessed', 1);

            });
        }

       

        if ($filter_by_employe != 0) {
            $query->where('total_employe', '=', $filter_by_employe);
        }

        $query->whereHas('Role_user', function($offerQuery) {
                    $offerQuery->where('role_id', '=', 3);
            });

        $query->where(function($subQuery) use ($key)
            {   
                if($key != ''){
                    $subQuery->whereHas('name_string', function($offerQuery) use ($key){
                        $offerQuery->where('name', 'LIKE', '%'.$key.'%');
                    })
                    ->orWhereHas('users', function($offerQuery) use ($key) {
                            $offerQuery->where('first_name', 'LIKE', '%'.$key.'%');
                    })
                    ->orWhereHas('users', function($offerQuery) use ($key) {
                            $offerQuery->where('last_name', 'LIKE', '%'.$key.'%');
                    })
                    ->orWhereHas('main_products', function($offerQuery) use ($key) {
                            $offerQuery->where('product_name_1', 'LIKE', '%'.$key.'%');
                    })
                    ->orWhereHas('main_products', function($offerQuery) use ($key) {
                            $offerQuery->where('product_name_2', 'LIKE', '%'.$key.'%');
                    })
                    ->orWhereHas('main_products', function($offerQuery) use ($key) {
                            $offerQuery->where('product_name_3', 'LIKE', '%'.$key.'%');
                    });
                }
            });
                    
        $suppliers = $query->where('is_active',1)->orWhere('is_gold',1)->orderBy('location_of_reg','asc')->latest()->paginate(15);

        return $suppliers;

    }
    
    
    public function search_main_product($string){
        $main_product = DB::table('users as u')
            ->join('suppliers as s','s.user_id','=','u.id')
            ->join('supplier_main_products as mp','mp.supplier_id','=','u.id','left')
            ->where('u.first_name','LIKE','%'.$string.'%')
            ->get(['u.id','u.first_name','mp.product_name']);
        $main_product_arr = [];
        $i=0;
        foreach($main_product as $s){
            if($s->id != $main_product[$i+1]->id){
                $main_product_arr[$i]['id'] = $s->id;
                $main_product_arr[$i]['first_name'] = $s->first_name;
                for($j=0,$len=count($main_product);$j<$len;$j++){
                    if($s->id == $main_product[$j]->id){
                        $main_product_arr[$i]['main_product']['product_name'] = $main_product[$j]->product_name;
                    }
                }
                $i++;
            }
        }
        return $main_product;
    }
    public function main_market_status(){
        return  DB::select(DB::raw(
            "SELECT main_market.main_market_zone as main_market_zone_id,
                    		count(main_market.main_market_zone) as number_of_used_by_company,
                    		fv.value as market_name
                    FROM `company_main_markets` as main_market
                    JOIN `orm_values` as fv on fv.id=main_market.main_market_zone
                    GROUP BY main_market.main_market_zone"
        ));
    }
    
    public function revanue(){
        return  DB::select(DB::raw(
            "SELECT ti.anual_sales_volume as revanue_id,
                        count(ti.anual_sales_volume) as number_of_used,
                        fv.value revanue_name
                    FROM `company_trade_info` as ti
                    JOIN `form_values` as fv ON fv.id = ti.anual_sales_volume
                    GROUP BY ti.anual_sales_volume"
        ));
    }
    public function total_employe(){
        return DB::select(DB::raw(
            "SELECT c.total_employe as total_employe_id,fv.value as total_employe,count(c.total_employe) as number_of_use
            FROM `companies` as c
            JOIN `form_values` as fv ON fv.id = c.total_employe
            WHERE c.total_employe >0
            GROUP BY c.total_employe"
        ));
    }
    public function return_final_supplier_arr($query_result){

        $suppliers =[];
        $i=0;
        foreach($query_result as $r){
            $suppliers[$i]['id']             = $r->user_id;
            $suppliers[$i]['name']           = $r->supplier_name;
            $suppliers[$i]['company_id']     = $r->company_id;
            $suppliers[$i]['company_name']   = $r->company_name;
            $suppliers[$i]['country']        = $r->country;
            $suppliers[$i]['revanue']        = $r->anual_sales_volume;
            $p_arr = DB::table('supplier_products as sp')
                ->join('product_description as pd','pd.product_id','=','sp.product_id','left')
                ->join('product_to_category as cat','cat.product_id','=','sp.product_id','left')
                ->join('categories as cat_name','cat_name.id','=','cat.category_id','left')
                ->join('categories as cat_name2','cat_name2.id','=','cat.parent_id','left')
                ->join('product_image as pi','pi.product_id','=','pd.product_id','left')
                ->join('product_images as pis','pis.product_id','=','pd.product_id','left')
                ->where('sp.supplier_id',$r->user_id)
                ->groupBy('pi.product_id')
                ->take(3)
                ->get(['pd.name as product_name','pi.image','pis.image as images','cat_name2.name as parent_name','cat_name.name as cattegory_name','pd.product_id']);
            $j = 0;
            $product_arr =[];
            foreach($p_arr as $sp){
                $product_arr[$j]['product_id']      = $sp->product_id;
                $product_arr[$j]['product_name']    = $sp->product_name;
                $product_arr[$j]['product_image']   = $sp->image;
                $product_arr[$j]['product_images']   = $sp->images;
                $product_arr[$j]['parent_name']   = $sp->parent_name;
                $product_arr[$j]['cattegory_name']   = $sp->cattegory_name;
                $j++;
            }
            $suppliers[$i]['product']        = $product_arr;
            $i++;
        }

        return $suppliers;

    }

}
