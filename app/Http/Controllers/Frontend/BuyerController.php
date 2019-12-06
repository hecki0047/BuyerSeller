<?php

namespace App\Http\Controllers\Frontend;

use App\Models\InqueryFlag;
use App\Models\InquerySpam;
use App\Models\InqueryTrush;
use App\Models\JoinQuotation;
use App\Models\SupplierQuery;
use App\Models\Country;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ValidationController;
use App\Models\Language;
use App\Models\Attribute;
use App\Models\Companies;
use App\Models\CompanyDescription;
use App\Models\Products;
use App\Models\ProductAttribute;
use App\Models\ProductUnit;
use App\Models\SupplierMainProduct;
use App\Models\SupplierProduct;
use App\Models\SupplierProductGroup;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Models\CompanyMainMarket;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Models\Categories;
use App\Models\ProductPrice;
use App\Models\WholesaleCategory;
use Input;
use View;
use Sentinel;
use App\Models\ProductToCategory;
use App\Models\Supplier;
use App\Models\Role_user;
use App\Models\ProductImage;
use App\Models\ProductImageNew;
use App\Models\Customer;
use App\Models\PagesSeo;

class BuyerController extends Controller
{       


    public function success(){
        
        $agent = new Agent();
        
        $device = $agent->device();
        // return View::make('mobile-view.page.success');
         
        if($agent->isPhone())
        {
            return View::make('frontend.mobile-view.success');
        }
        if($agent->isDestop())
        {
           return view('frontend.contents-view.success');
        }
        if($agent->isTab())
        {
            return View::make('frontend.mobile-view.success');
        }
        else{          
            return view('frontend.contents-view.success');
        }
    }

     public function post_contact_with_supplier(Request $r){    
        if(!Sentinel::getUser()){
            return 0;
        }
        // return $r->all();
        $user_id = Sentinel::getUser()->id;
        $role = Role_user::where('user_id',$user_id)->first();

        $total_inq_today = SupplierInquery::where('sender',$user_id)->whereDate('created_at', '=', date('Y-m-d'))->get();

        if($total_inq_today->count() >= 50){
            return 'Maximum Buying Request(s) exceeded for today';
        }

        // $column = ($role->role_id == 3) ? "supplier_id" : "buyer_id";
        if($r->selected_product_id == 'none' && $r->product_id == ''){
            $validator = Validator::make($r->all(), [
                'supplier_id' => 'required|integer|max:1000000000',
                'inquiry_title' => 'required|max:100000',
                'message' => 'required|max:100000',
                // 'attachment_1' => 'required|mimes:jpeg,bmp,png,jpg|max:20000',
                // 'attachment_2' => 'mimes:jpeg,bmp,png,jpg|max:20000',
                // 'attachment_3' => 'mimes:jpeg,bmp,png,jpg|max:20000',
            ]);

            if($validator->fails()) {
                return $validator->errors()->all();
            }

            $input_arr = [
                'inquery_title'     => $r->get('inquiry_title'),
                'message'           => $r->get('message'),
                'sender'            => $user_id,
                'is_RFQ'            => 1,
                'created_at'        => date("Y-m-d H:i:s"),
            ];
            $inserted_inq_id = SupplierInquery::insertGetId($input_arr);

            if($inserted_inq_id){
                //Notification
                sendNotification(1, 'You have been received new Notification', Sentinel::getUser()->id, $r->input('supplier_id'), $inserted_inq_id);
                // End Notification

                $attachments = $r->file('attachments');

                $arrData = array();
                if(isset($attachments)){
                    foreach ($attachments as $key => $value) {
                        $attachment_name = 'buying_request_docs_'.uniqid().'_'.uniqid().'.'.$attachments[$key]->getClientOriginalExtension();
                        $attachments[$key]->move('buying-request-docs',$attachment_name);

                        $arrData[] = array(
                            'inquery_id' => $inserted_inq_id,
                            'docs' => $attachment_name,
                            'is_join_quote' => 0,
                            'created_at'=>date("Y-m-d H:i:s"),
                        );
                    }
                    InqueryDocs::insert($arrData);
                }

        $rand_key = str_random(30);
        $user= Users::where('id',$user_id)->first();
         return 1;
            }
            else{
                return 2;
            }
        }else if($r->selected_product_id != 'none' && $r->product_id == ''){
            //return 'multiple';
            $validator = Validator::make($r->all(), [
                    //'selected_product_id' => 'required|integer|max:1000000000',
                    'supplier_id' => 'required|integer|max:1000000000',
                    'message' => 'required|max:100000',
                    'attachment_1' => 'mimes:jpeg,bmp,png,jpg|max:20000',
                    'attachment_2' => 'mimes:jpeg,bmp,png,jpg|max:20000',
                    'attachment_3' => 'mimes:jpeg,bmp,png,jpg|max:20000',
                ]);

                if ($validator->fails()) {
                    return $validator->errors()->all();
                }

                $selecte_product_id_array = explode(",", trim($r->selected_product_id));
                $messages = array(
                    'required' => 'The product id field is required.',
                    'integer' => 'The product id field should be an integer.',
                    'max' => 'The product id field should not more than 1000000000.',
                );
                $attr_val_loop = count($selecte_product_id_array);
                for ($i=0; $i < $attr_val_loop; $i++) {
                    $validator = Validator::make($selecte_product_id_array, [
                        $i => 'required|integer|max:1000000000',
                        ],$messages);
                    if ($validator->fails()) {
                        return $validator->errors()->all();
                    }
                }

                $input_arr = [
                    'product_id'        => $r->selected_product_id,
                    'inquery_title'     => $r->get('product_title_all'),
                    'product_owner_id'  => $r->get('supplier_id'),
                    'sender'            => $user_id,
                    'message'           => $r->get('message'),
                    'is_join_quotation' => 1,
                    'created_at'        => date("Y-m-d H:i:s"),
                ];
                $inserted_inq_id = SupplierInquery::insertGetId($input_arr);

                if($inserted_inq_id){
                    //Notification
                    sendNotification(1, 'You have been received new Notification', Sentinel::getUser()->id, $r->input('supplier_id'), $inserted_inq_id);
                    // End Notification

                    $arrData = array();
                    if(isset($attachments)){
                        foreach ($attachments as $key => $value) {
                            $attachment_name = 'buying_request_docs_'.uniqid().'_'.uniqid().'.'.$attachments[$key]->getClientOriginalExtension();
                            $attachments[$key]->move('buying-request-docs',$attachment_name);

                            $arrData[] = array(
                                'inquery_id' => $inserted_inq_id,
                                'docs' => $attachment_name,
                                'is_join_quote' => 0,
                                'created_at'=>date("Y-m-d H:i:s"),
                            );
                        }
                        InqueryDocs::insert($arrData);
                    }

                     $rand_key = str_random(30);
            $user= Users::where('id',$user_id)->first();
            $receive_id=$r->get('supplier_id');
            $receive= Users::where('id',$receive_id)->first();

            $ww=Mail::send('pages.test-email', ['inserted_inq_id'=>$inserted_inq_id,'user'=>$user,'receive'=>$receive], function($message) {
            // $message->to(Route::current()->parameters()['email'])
            $message->to($user->email)
                ->subject('Inquiry Alert');

        });

                    return 1;
                }
                else{
                    return 2;
                }
        }else if($r->selected_product_id = 'none' && $r->product_id != ''){
            //return "single";
            $validator = Validator::make($r->all(), [
                'product_id' => 'required|integer|max:1000000000',
                'supplier_id' => 'required|integer|max:1000000000',
                'message' => 'required|max:100000',
                'unit_id' => 'required|integer|max:100000',
                'quantity' => 'required|integer|max:100000',
                'attachment_1' => 'mimes:jpeg,bmp,png,jpg|max:20000',
                'attachment_2' => 'mimes:jpeg,bmp,png,jpg|max:20000',
                'attachment_3' => 'mimes:jpeg,bmp,png,jpg|max:20000',
            ]);

            if ($validator->fails()) {
                return $validator->errors()->all();
            }
            $input_arr = [
                'product_id'        => $r->get('product_id'),
                'product_owner_id'  => $r->get('supplier_id'),
                'unit_id'           => $r->get('unit_id'),
                'quantity'          => $r->get('quantity'),
                // 'inquery_title'     => $r->get('inquiry_title'),
                'message'           => $r->get('message'),
                'sender'            => $user_id,
                // 'is_RFQ'            => 1,
                'created_at'        => date("Y-m-d H:i:s"),
            ];
            $inserted_inq_id = SupplierInquery::insertGetId($input_arr);

            if($inserted_inq_id){
                //Notification
                sendNotification(1, 'You have been received new Notification', Sentinel::getUser()->id, $r->input('supplier_id'), $inserted_inq_id);
                // End Notification

                $arrData = array();
                if(isset($attachments)){
                    foreach ($attachments as $key => $value) {
                        $attachment_name = 'buying_request_docs_'.uniqid().'_'.uniqid().'.'.$attachments[$key]->getClientOriginalExtension();
                        $attachments[$key]->move('buying-request-docs',$attachment_name);

                        $arrData[] = array(
                            'inquery_id' => $inserted_inq_id,
                            'docs' => $attachment_name,
                            'is_join_quote' => 0,
                            'created_at'=>date("Y-m-d H:i:s"),
                        );
                    }
                    InqueryDocs::insert($arrData);
                }
                 $rand_key = str_random(30);
      $user= Users::where('id',$user_id)->first();
      $receive_id=$r->get('supplier_id');
            $receive= Users::where('id',$receive_id)->first();
        $ww=Mail::send('pages.test-email', ['inserted_inq_id'=>$inserted_inq_id,'user'=>$user,'receive'=>$receive], function($message) {
            // $message->to(Route::current()->parameters()['email'])
            $message->to('info@buyerseller.asia')
                ->subject('Inquiry Alert');

        });

                return 1;
            }
            else{
                return 2;
            }
        }else{
            return "Unknown error occured!!!";
        }
    }

    public function contact_supplier($supplier_id){
        if(!Sentinel::getUser()){
            return Redirect::to('ServiceLogin?continue='.URL::to($_SERVER['REQUEST_URI']))->withFlashMessage('You must first login or register before accessing this page.');
        }
         // return $supplier_id;
        $user_id = Sentinel::getUser()->id;
        if($user_id == $supplier_id){
            return Redirect::back();
        }
        $user = \App\Models\Users::where('id',$supplier_id)->first();
        $agent = new Agent();
        
        $device = $agent->device();
         //return view('mobile-view.content-view-mobile.contact_supplier',compact(['supplier_id','user']));
        if($agent->isDestop())
        {
           return view('frontend.buyer.buyer_supplier_contact_form',compact(['user','supplier_id']));
        }
        else if($agent->isPhone())
        {
          return view('frontend.mobile-view.contact_supplier',compact(['supplier_id','user']));
        }else{
            return view('frontend.buyer.buyer_supplier_contact_form',compact(['user','supplier_id']));
        }
       }
        public function get_contact_with_supplier($supplier_id,$product_id){
            if(!Sentinel::getUser()){
                return Redirect::to('ServiceLogin?continue='.URL::to($_SERVER['REQUEST_URI']))->withFlashMessage('You must first login or register before accessing this page.');
            }
            // return $r->all();
            $user_id = Sentinel::getUser()->id;
            if($user_id == $supplier_id){
                return Redirect::back();
            }

            $products = Products::where('id',$product_id)->first();
            $BdtdcProductUnit = ProductUnit::get();
            $header=PagesSeo::where('page_id',101)->first();
            $data['title']=$header->title;
            $data['keyword']=$header->meta_keyword;
            $data['description']=$header->meta_description;


            $agent = new Agent();
            
            $device = $agent->device();
          
             
            if($agent->isPhone())
            {

              return view('frontend.mobile-view.contact_supplier',compact(['products','supplier_id','BdtdcProductUnit']));
            }
            if($agent->isDestop())
            {
               return view('frontend.buyer.buyer_supplier_contact_form',$data,compact(['products','supplier_id','BdtdcProductUnit']));
            }

            if($agent->isTab())
            {
               return view('frontend.buyer.buyer_supplier_contact_form',compact(['products','supplier_id','BdtdcProductUnit']));
            }
            else{
              
              return view('frontend.buyer.buyer_supplier_contact_form',$data,compact(['products','supplier_id','BdtdcProductUnit']));
            }

        }

        public function post_conversation(Request $r){
            if(Sentinel::getUser()){
            }else{
                return redirect('login')->withFlashMessage('Please sign in first.');
            }
            
            $user_id = Sentinel::getUser()->id;
            //return $r->all();
            $previous_qp_data = InqueryMessage::where('inquery_id',$r->inquery_id)
                                    ->where('product_id',$r->product_id)
                                    ->where('product_owner_id',$r->product_owner_id)
                                    ->orderBy('id','desc')
                                    ->first();
            $quantity = trim($r->quantity);
            $unit_price = trim($r->unit_price);
            if(trim($r->quantity) == ''){
                if($previous_qp_data){
                    $quantity = $previous_qp_data->quantity;
                }
            }
            if(trim($r->unit_price) == ''){
                if($previous_qp_data){
                    $unit_price = $previous_qp_data->unit_price;
                }
            }
            $input_arr = [
                'inquery_id'        => $r->inquery_id,
                'product_id'        => $r->product_id,
                'messages'          => $r->messages,
                'quantity'          => $quantity,
                'unit_price'        => $unit_price,
                'sender'            => $user_id,
                'product_owner_id'  => $r->product_owner_id,
                'total'             => $r->total
            ];
            if(InqueryMessage::create($input_arr)){
                return 1;
            }else{
                return 0;
            }
        }

    public function get_conversation($id,$quotation_type){
        if(Sentinel::getUser()){
        }else{
            return redirect('login')->withFlashMessage('Please sign in first.');
        }
        $user_id = Sentinel::getUser()->id;
        $user_data = Users::where('id',$user_id)->first();
        $check_max_inquiry = SupplierInquery::where('product_owner_id', $user_id)->take(3)->get();
        $permitted_id = [];
        foreach ($check_max_inquiry as $check_max_inquiry_single) {
            $permitted_id[] = $check_max_inquiry_single->id;
        }
        // dd($check_max_inquiry);
        // BdtdcCompany::where('user_id',$user_id)->update(['is_gold'=>1]);
        $company_des = Companies::where('user_id',$user_id)->first();
        if($user_data->Role_user){
            if($user_data->Role_user->role_id != 2){
                if($company_des){
                    if($company_des->is_gold == 1){}else{
                        $check_inquiry_sender = SupplierInquery::where('id', $id)->first();
                        if($check_inquiry_sender){
                            if($check_inquiry_sender->sender == $user_id){}else{
                                if(in_array($id, $permitted_id)){}else{
                                    // return '<h2 class="text-center">Sorry! You are not allowed to view more than 3 Inquiry details.<br> Upgrade to <a target="_blank" href="../SupplierChannel/pages/suppliers_memebership/23">Gold Member NOW!</a></h2>';
                                }
                            }
                        }else{
                            return '<h2 class="text-center">Inquiry details not available</h2>';
                        }
                    }
                }else{
                    return '<h2 class="text-center">Company information not available.</h2>';
                }
            }
        }else{
            if($company_des){
                if($company_des->is_gold == 1){}else{
                    $check_inquiry_sender = SupplierInquery::where('id', $id)->first();
                    if($check_inquiry_sender){
                        if($check_inquiry_sender->sender == $user_id){}else{
                            if(in_array($id, $permitted_id)){}else{
                                // return '<h2 class="text-center">Sorry! You are not allowed to view more than 3 Inquiry details.<br> Upgrade to <a target="_blank" href="../SupplierChannel/pages/suppliers_memebership/23">Gold Member NOW!</a></h2>';
                            }
                        }
                    }else{
                        return '<h2 class="text-center">Inquiry details not available</h2>';
                    }
                }
            }else{
                return '<h2 class="text-center">Company information not available.</h2>';
            }
        }
            
        //return Sentinel::getUser();
        if($quotation_type == 'single'){
            $product = DB::table('supllier_inqueries as si')
                        ->join('product_description as pd','pd.product_id','=','si.product_id','left')
                        ->join('product_image as pi','pi.product_id','=','si.product_id','left')
                        ->join('product_images as pin','pin.product_id','=','si.product_id','left')
                        ->join('product_to_category as ptc','ptc.product_id','=','si.product_id','left')
                        ->join('category_description as cd','cd.category_id','=','ptc.category_id','left')
                        ->join('category_description as pcd','pcd.category_id','=','ptc.parent_id','left')
                        ->join('product_unit as pu','pu.id','=','si.unit_id','left')
                        ->join('users as u','u.id','=','si.product_owner_id','left')
                        ->join('users as u2','u2.id','=','si.sender','left')
                        ->where('si.id',$id)
                        ->groupby('pi.product_id')
                        ->first(['si.id','u.first_name as pw_first_name','u.last_name as pw_last_name','u2.first_name as s_first_name','u2.last_name as s_last_name','si.product_id','pu.name as unit','si.quantity','si.message','si.product_owner_id','si.sender','pd.name','pi.image as image','pin.image as images','si.views','si.created_at','cd.name as sub_cat','pcd.name as parent_cat']);
            $prev_quotation = InqueryMessage::where('inquery_id',$id)->get();
            // dd($prev_quotation);
            $inquery_view_update = [
                'views' => 1,
            ];

            if($product){
                if($product->views == '1'){}else{
                    if($product->product_owner_id == $user_id){
                        SupplierInquery::where('id', $id)->update($inquery_view_update);
                    }
                }
            }
            
            return view('frontend.single_product_quotation',compact(['product','prev_quotation','user_id']));
        }else{
            //$join_quotation = BdtdcJoinQuotation::where('id',$id)->first(['product_id','message','product_owner_id','sender']);
            // $join_quotation = DB::table('join_quotation as jq')
            $join_quotation = DB::table('supllier_inqueries as jq')
                                ->join('users as u','u.id','=','jq.product_owner_id','left')
                                ->join('users as u2','u2.id','=','jq.sender','left')
                                ->where('jq.id',$id)
                                ->first(['jq.id','u.first_name as pw_first_name','u.last_name as pw_last_name','u2.first_name as s_first_name','u2.last_name as s_last_name','jq.product_id','jq.message','jq.product_owner_id','jq.sender','jq.views','jq.created_at','jq.quantity']);

            // dd($join_quotation);

            $inquery_view_update = [
                'views' => 1,
            ];

            if($join_quotation){
                if($join_quotation->views == '1'){}else{
                    if($join_quotation->product_owner_id == $user_id){
                        SupplierInquery::where('id', $id)->update($inquery_view_update);
                    }
                }
            }


            $arr_of_p_id =  explode(',',$join_quotation->product_id);
            $all_join_quotation = [];
            for($i=0,$len=sizeof($arr_of_p_id);$i<$len;$i++){
                $all_join_quotation[$i] = DB::table('product_description as pd')
                                                    ->join('product_image as pi','pi.product_id','=','pd.product_id','left')
                                                    ->join('product_images as pin','pin.product_id','=','pd.product_id','left')
                                                    ->join('product_to_category as ptc','ptc.product_id','=','pd.product_id','left')
                                                    ->join('category_description as cd','cd.category_id','=','ptc.category_id','left')
                                                    ->join('category_description as pcd','pcd.category_id','=','ptc.parent_id','left')
                                                    ->join('product as p','p.id','=','pd.product_id','left')
                                                    ->join('product_unit as pu','pu.id','=','p.unit_type_id','left')
                                                    ->where('pd.product_id',$arr_of_p_id[$i])
                                                    ->groupby('pi.product_id')
                                                    ->first(['pd.product_id','pd.name','pi.image as image','pin.image as images','pu.name as unit','cd.name as sub_cat','pcd.name as parent_cat']);
                $all_join_quotation[$i]->quantity = $join_quotation->quantity;
            }

            //return $all_join_quotation;
            // dd($all_join_quotation);

            return view('frontend.multy_product_quotation',compact(['join_quotation','all_join_quotation','user_id']));
        }

    }

    public function change_inq_view(Request $r){
        return InqueryMessage::where('id',$r->messID)->update(['is_view'=>1]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
   public function index($section=false){

        $supplier =[];

        if(Sentinel::check())
        {

        $user_id = Sentinel::getUser()->id;
        $company=Companies::where('user_id',$user_id)->first();
        $role = Role_user::where('user_id',$user_id)->first();
        // dd($company);
        // dd(BdtdcCompanyDescription::where('company_id',$company->id)->first());
        if($role->role_id == 4){
            // dd(123);
            if($section == 'product'){
                $data['error']='Permission deney';
                return View::make('error.bdtdc-agencies',$data);
            }
        }
        if($company){
            $company_id=$company->id;
        }else{
            $company_id = Companies::insertGetId(['user_id'=>$user_id]);
            CompanyDescription::insert(['company_id'=>$company_id,'name'=>'not available']);
        }

        if(CompanyDescription::where('company_id',$company_id)->first()){}else{
            CompanyDescription::insert(['company_id'=>$company_id,'name'=>'Not Available']);
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
        
        //dd($user_id);
        if($role->role_id == 3){
            $supplier = DB::table('suppliers as bs')
                ->join('users as u','u.id','=','bs.user_id')
                ->join('companies as bc','bc.user_id','=','bs.user_id')
                ->join('customer as bcu','bcu.user_id','=','bs.user_id')
                ->join('company_descriptions as bcd','bcd.company_id','=','bc.id')
                ->where('bs.user_id',$user_id)
                ->first();   
        }
       if($role->role_id == 4){

            $supplier = DB::table('users as u')
                ->join('customer as bcu','bcu.user_id','=','u.id')
                ->join('companies as bc','bc.user_id','=','u.id')
                ->join('company_descriptions as bcd','bcd.company_id','=','bc.id')
                ->where('u.id',$user_id)
                ->first();
        }
     
        $supplier_product = ProductToCategory::whereHas('supp_pro_company',function($subQuery)use($user_id){
                    $subQuery->where('user_id',$user_id);
                })
                ->orderBy('product_id','asc')
                ->get();
        
        
        $message = $this->get_all_inquiries();
        $template_setting_section = DB::table('template_sections')->get();
        $template_setting_data = DB::table('template_settings as bts')
                ->join('template_sections as btsec','btsec.id','=','bts.section_id')
                ->where('bts.company_id',$company_id)
                ->get(['bts.id','bts.section_id','bts.back_image','bts.title_logo','bts.back_color','bts.font_color','bts.is_show_image','bts.is_show_color','bts.height','bts.width','bts.company_id','btsec.section_name','btsec.slug']);
        $header=PagesSeo::where('page_id',101)->first();
                $data['title']=$header->title;
                $data['keyword']=$header->meta_keyword;
                $data['description']=$header->meta_description;
        //dd($template_setting_data);
        //return $message;
                //$users=User::where('id',$user_id)->first();
        return View::make('frontend.supplier.dashboard',$data,compact(['supplier','supplier_product','message','template_setting_data','section','template_setting_section']));

         }
         else
            return Redirect::to('/');
    }
    
    public function get_all_inquiries(){
        if(Sentinel::getUser()){
        }else{
            return redirect('login')->withFlashMessage('Please sign in first.');
        }
        $user_id = Sentinel::getUser()->id;
        return DB::select(DB::raw('
            SELECT result_set.*,pd.name as product_name,u.first_name,u.last_name,su.first_name as sender_first_name,su.last_name as sender_last_name
            FROM(
                SELECT join_quotation.product_id, join_quotation.product_owner_id,
                        join_quotation.sender,join_quotation.id as id,
                        join_quotation.is_join_quotation,
                        join_quotation.created_at,
                        join_quotation.message,
                        join_quotation.spam, join_quotation.flag, join_quotation.trush

                FROM join_quotation
                WHERE (join_quotation.product_owner_id='.$user_id.' OR join_quotation.sender='.$user_id.')
                        
                UNION
                SELECT supllier_inqueries.product_id,supllier_inqueries.product_owner_id,
                        supllier_inqueries.sender,supllier_inqueries.id as id,
                        supllier_inqueries.is_join_quotation,
                        supllier_inqueries.created_at,
                        supllier_inqueries.message,
                        supllier_inqueries.spam, supllier_inqueries.flag, supllier_inqueries.trush
                FROM supllier_inqueries
                WHERE (supllier_inqueries.product_owner_id='.$user_id.'  OR supllier_inqueries.sender='.$user_id.')
                        
            ) as result_set
            LEFT JOIN product_description as pd ON pd.product_id=result_set.product_id
            JOIN users as u ON u.id=result_set.product_owner_id
            JOIN users as su ON su.id=result_set.sender
            ORDER BY result_set.created_at DESC
        '));
    }
     public function rander_dashboard_section($section){
        return $this->index($section);
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
