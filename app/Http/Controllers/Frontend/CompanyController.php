<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ValidationController;
use App\Models\InqueryFlag;
use App\Models\InquerySpam;
use App\Models\InqueryTrush;
use App\Models\JoinQuotation;
use App\Models\SupplierQuery;
use App\Models\Country;
use App\Models\Language;
use App\Models\Attribute;
use App\Models\Companies;
use App\Models\CompanyDescription;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductUnit;
use App\Models\SupplierMainProduct;
use App\Models\SupplierProduct;
use App\Models\SupplierProductGroup;
use App\Models\Users;
use App\Models\CompanyMainMarket;
use App\Models\Categories;
use App\Models\ProductPrice;
use App\Models\WholesaleCategory;
use App\Models\FormValue;
use App\Models\ProductToCategory;
use App\Models\Supplier;
use App\Models\Role_user;
use App\Models\ProductImage;
use App\Models\PagesSeo;
use App\Models\Customer;
use App\Models\CustomerActivity;
use App\Models\TemplateSection;
use App\Models\OrderShippingTerm;
use App\Models\Notice;
use Validator;
use Input;
use View;
use Sentinel;


class CompanyController extends Controller
{

    public function rander_dashboard_section($section){
            return $this->index($section);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  index($section=false){
       
        if(Sentinel::check())
        {

            $user_id = Sentinel::getUser()->id;
            $role = Role_user::where('user_id',$user_id)->first();
            $company=Companies::where('user_id',$user_id)->first();
            if($company){
                $company_id=$company->id;
            }else{
                $company_id = Company::insertGetId(['user_id'=>$user_id]);
                CompanyDescription::insert(['company_id'=>$company_id,'name'=>'Not Available']);
            }

            if(CompanyDescription::where('company_id',$company_id)->first()){}else{
                CompanyDescription::insert(['company_id'=>$company_id,'name'=>'not available']);
            }

            if(Supplier::where('company_id',$company_id)->first()){}else{
                if($role->role_id == 4){
                    Supplier::insert(['user_id'=>$user_id,'company_id'=>$company_id,'busines_type_id'=>5]);
                }else if($role->role_id == 3){
                    Supplier::insert(['user_id'=>$user_id,'company_id'=>$company_id,'busines_type_id'=>1]);
                }
            }
            if(Customer::where('company_id',$company_id)->first()){}else{
                if($role->role_id == 4){
                    Customer::insert(['user_id'=>$user_id,'company_id'=>$company_id,'customer_group_id'=>2]);
                }else if($role->role_id == 3){
                    Customer::insert(['user_id'=>$user_id,'company_id'=>$company_id,'customer_group_id'=>1]);
                }
            }
             if($role->role_id == 4){
                // dd(123);
                if($section == 'product' || 'template_setting'){
                    $data['error']='Permission deney';
                    return View::make('error.bdtdc-agencies',$data);
                }
            }

            if($role->role_id == 3){
                $supplier = DB::table('suppliers as bs')
                    ->join('users as u','u.id','=','bs.user_id')
                    ->join('bdtdc_companies as bc','bc.user_id','=','bs.user_id')
                    ->join('bdtdc_customer as bcu','bcu.user_id','=','bs.user_id')
                    ->join('bdtdc_company_descriptions as bcd','bcd.company_id','=','bc.id')
                    ->where('bs.user_id',$user_id)
                    ->first();
                $supplier_product = ProductToCategory::with(['pro_to_cat_name','bdtdcProduct','BdtdcCategoryDescription','BdtdcSupplierProduct'])->whereHas('supp_pro_company',function($subQuery)use($user_id){
                        $subQuery->where('user_id',$user_id);
                    })
                    ->paginate(10);  
                $template_setting_section = TemplateSection::get();
                $template_setting_data = DB::table('template_settings as bts')
                    ->join('template_sections as btsec','btsec.id','=','bts.section_id')
                    ->where('bts.company_id',$company_id)
                    ->get(['bts.id','bts.section_id','bts.back_image','bts.title_logo','bts.back_color','bts.font_color','bts.is_show_image','bts.is_show_color','bts.height','bts.width','bts.company_id','btsec.section_name','btsec.slug']);
            }
            else if($role->role_id == 4){
                $supplier = DB::table('users as u')
                    ->join('customer as bcu','bcu.user_id','=','u.id')
                    ->join('companies as bc','bc.user_id','=','u.id')
                    ->join('company_descriptions as bcd','bcd.company_id','=','bc.id')
                    ->where('u.id',$user_id)
                    ->first();
            }
            
            $favorite_product=CustomerActivity::with('products','product_category')
                            ->where('customer_id',$user_id)->get();
        
            $header=PagesSeo::where('page_id',101)->first();
            $data['title']=$header->title;
            $data['keyword']=$header->meta_keyword;
            $data['description']=$header->meta_description;

            $role_id = $role->role_id;

            $data['notices'] = Notice::where('notice_type', 1)
            ->orWhere(function ($query) use($role_id){
                $query->where('notice_type', 2)->whereHas('notice_details', function ($query2) use($role_id){
                    $query2->where('user_role_id', $role_id);
                });
            })->orWhere(function ($query) use($user_id){
                $query->where('notice_type', 3)->whereHas('notice_details', function ($query2) use($user_id){
                    $query2->where('user_id', $user_id);
                });
            })->orderBy('id', 'DESC')->paginate(20);

            return View::make('frontend.supplier.dashboard',$data,compact(['supplier','supplier_product','template_setting_data','section','template_setting_section','favorite_product']));

        }
        else{
            return Redirect::to('login')->withFlashMessage('Please sign in first.');
        }
            
    }

    public function post_shipping_address(Request $request){
        $data=array();
        if(Sentinel::check()){
            $validator = Validator::make($request->all(), [
                'contact_name' => 'required|max:255',
                'address1' => 'required|max:255',
                'address2' => 'max:255',
                'country' => 'required|integer',
                'state' => 'max:255',
                'city' => 'max:255',
                'postal_code' => 'required|string|min:3|max:20',
                'phone' => 'nullable|min:6|max:15',
                'gross_weight' => 'nullable|string',
                'gross_volume' => 'nullable|string',
            ]);

            if ($validator->fails()) {
                $data['status'] = 0;
                $data['error'] = $validator->errors()->all();
            }else{
                $user_id = Sentinel::getUser()->id;
                $insert_arr_data =[
                    'user_id'   => $user_id,
                    'contact_name'       => $request->input('contact_name'),
                    'address1'           => $request->input('address1'),
                    'address2'           => $request->input('address2'),
                    'country'          => $request->input('country'),
                    'state'       => $request->input('state'),
                    'city'     => $request->input('city'),
                    'postal_code'   => $request->input('postal_code'),
                    'phone'      => $request->input('phone'),
                    'gross_weight'      => $request->input('gross_weight'),
                    'gross_volume'      => $request->input('gross_volume'),
                ];

                $shipping_address = $request->input('address1').','.$request->input('address2').','.$request->input('city').','.$request->input('state').','.$request->input('country');

                $response = OrderShippingTerm::insertGetId($insert_arr_data);
                $data['status'] = 1;
                $data['message'] = 'Shipping address stored successfully';
                $data['shipping_address'] = $shipping_address;
                $data['shipping_address_id'] = $response;
            }
        }else{
            $data['status'] = 0;
            $data['error'] = 'Please Login First and try again';
        }

        echo json_encode($data);
    }

    public function get_verified(){
        return View::make('fontend.get-verified');
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
