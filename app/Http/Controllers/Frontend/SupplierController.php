<?php

namespace App\Http\Controllers\Frontend;


use App\Models\InqueryFlag;
use App\Models\InquerySpam;
use App\Models\InqueryTrush;
use App\Models\SupplierQuery;
use App\Models\Country;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ValidationController;
use App\Models\Language;
use App\Models\Attribute;
use App\Models\Companies;
use App\Models\CompanyDescription;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductUnit;
use App\Models\SupplierMainProduct;
use App\Models\SupplierProduct;
use App\Models\SupplierProductGroups;
use App\Models\Users;
use App\Models\CompanyMainMarket;
use App\Models\Category;
use App\Models\ProductPrice;
use App\Models\WholesaleCategory;
use App\Models\ProductToCategory;
use App\Models\Supplier;
use App\Models\Role_user;
use App\Models\ProductImage;
use App\Models\ProductImageNew;
use App\Models\SupplierInquery;
use App\Models\JoinQuotation;
use App\Models\Country;
use App\Models\PagesPrefix;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Validator;
use URL;
use Input;
use View;
use Sentinel;
use Stripe;


/** Paypal Details classes **/
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Exception\PayPalConnectionException;


class SupplierController extends Controller
{   
    public function reverse_action_on_inquery($id){

        $inquery_id_array = explode("::",$id);
        $array_loop = count($inquery_id_array);
        $success = false;
        for($i=0;$i<$array_loop;$i++){
            $user_id = Sentinel::getUser()->id;
            $arr = explode('_',$inquery_id_array[$i]);
            $is_join_quotation = $arr[0];
            switch($arr[3]){
                case "spam":
                    $inquery = InquerySpam::where('inquery_id',$arr[2])->where('user_took_action',$user_id);
                    if($is_join_quotation == 'single'){
                        SupplierInquery::where('id',$arr[2])->update(['spam' => 0]);
                    }else{
                        SupplierInquery::where('id',$arr[2])->update(['spam' => 0]);
                    }
                    break;
                case "flag":
                    $inquery = InqueryFlag::where('inquery_id',$arr[2])->where('user_took_action',$user_id);
                    if($is_join_quotation == 'single'){
                        SupplierInquery::where('id',$arr[2])->update(['flag' => 0]);
                    }else{
                        SupplierInquery::where('id',$arr[2])->update(['flag' => 0]);
                    }
                    break;
                case "trush":
                    $inquery = InqueryTrush::where('inquery_id',$arr[2])->where('user_took_action',$user_id);
                    if($is_join_quotation == 'single'){
                        SupplierInquery::where('id',$arr[2])->update(['trush' => 0]);
                    }else{
                        SupplierInquery::where('id',$arr[2])->update(['trush' => 0]);
                    }
                    break;
            }
            switch ($arr[0]){
                case "single":
                    $inquery =$inquery->where('is_join_quotation',0);
                    break;
                case "join":
                    $inquery =$inquery->where('is_join_quotation',1);
                    break;
            }
            if($inquery->delete()){
                $success = true;
            }
            // return ($inquery->delete()) ? 1 : 0;
        }
        return ($success) ? 1 : 0;

    }
    public function inquery_action($action,$inquery_id){
        if(Sentinel::getUser()){
        }else{
            return redirect('login')->withFlashMessage('Please sign in first.');
        }
        // return $action.$inquery_id;
        $action_array = explode("::",$action);
        $inquery_id_array = explode("_",$inquery_id);
        $array_loop = count($inquery_id_array);
        for($i=0;$i<$array_loop;$i++){
                $input_arr = [
                'inquery_id' => $inquery_id_array[$i],
                'user_took_action' => Sentinel::getUser()->id,
            ];
            $is_join_quotation = (explode('_',$action_array[$i])[0] == "single") ? 0 : 1;
            switch(explode('_',$action_array[$i])[1]){
                case "flag":
                    $input_arr['is_join_quotation'] = $is_join_quotation;
                    InqueryFlag::create($input_arr);
                    if($is_join_quotation == 0){
                        SupplierInquery::where('id',$inquery_id_array[$i])->update(['flag' => 1]);
                    }else{
                        SupplierInquery::where('id',$inquery_id_array[$i])->update(['flag' => 1]);
                    }
                    break;
                case "spam":
                    $input_arr['is_join_quotation'] = $is_join_quotation;
                    InquerySpam::create($input_arr);
                    if($is_join_quotation == 0){
                        SupplierInquery::where('id',$inquery_id_array[$i])->update(['spam' => 1]);
                    }else{
                        SupplierInquery::where('id',$inquery_id_array[$i])->update(['spam' => 1]);
                    }
                    break;
                case "trush":
                    $input_arr['is_join_quotation'] = $is_join_quotation;
                    InqueryTrush::create($input_arr);
                    if($is_join_quotation == 0){
                        SupplierInquery::where('id',$inquery_id_array[$i])->update(['trush' => 1]);
                    }else{
                        SupplierInquery::where('id',$inquery_id_array[$i])->update(['trush' => 1]);
                    }
                    break;
            }
        }


    }  

    public function get_inquires_by_filter($group){
        if(Sentinel::getUser()){
        }else{
            return redirect('login')->withFlashMessage('Please sign in first.');
        }
        $user_id = Sentinel::getUser()->id;
        // dd(BdtdcSupplierInquery::take(1)->get());
        // dd(BdtdcJoinQuotation::take(1)->get());
        $condition = "";
        switch($group){
            case "all_inquery":
                $message    = $this->get_all_inquiries();
                break;
            case "sent":
                $condition  = "WHERE( result_set.sender=".$user_id.")" ;
                $message    = $this->get_inquery_message_by_group($condition);
                break;
            case "flag":
                $message = [];
                $i=0;
                foreach(InqueryFlag::where('user_took_action',$user_id)->get() as $m){
                    if($m->is_join_quotation == 0){
                        $message[$i] = DB::table('supllier_inqueries as si')
                            ->join('users as u','u.id','=','si.product_owner_id')
                            ->join('users as su','su.id','=','si.sender')
                            ->where('si.id',$m->inquery_id)
                            ->where('si.product_id', '!=',0)
                            ->first(['si.product_id','si.product_owner_id','si.sender','si.id as id','si.is_join_quotation','si.created_at','si.message','si.flag','si.spam','si.trush','u.first_name','u.last_name','su.first_name as sender_first_name','su.last_name as sender_last_name']);
                    }else{
                        $message[$i] = DB::table('join_quotation as si')
                            ->join('users as u','u.id','=','si.product_owner_id')
                            ->join('users as su','su.id','=','si.sender')
                            ->where('si.id',$m->inquery_id)
                            ->where('si.product_id', '!=',0)
                            ->first(['si.product_id','si.product_owner_id','si.sender','si.id as id','si.is_join_quotation','si.created_at','si.message','si.flag','si.spam','si.trush','u.first_name','u.last_name','su.first_name as sender_first_name','su.last_name as sender_last_name']);
                    }
                    $i++;
                }
                break;
            case "spam":
                $message = [];
                $i=0;
                foreach(InquerySpam::where('user_took_action',$user_id)->get() as $m){
                    if($m->is_join_quotation == 0){
                        $message[$i] = DB::table('supllier_inqueries as si')
                            ->join('users as u','u.id','=','si.product_owner_id')
                            ->join('users as su','su.id','=','si.sender')
                            ->where('si.id',$m->inquery_id)
                            ->where('si.product_id', '!=',0)
                            ->first(['si.product_id','si.product_owner_id','si.sender','si.id as id','si.is_join_quotation','si.created_at','si.message','si.flag','si.spam','si.trush','u.first_name','u.last_name','su.first_name as sender_first_name','su.last_name as sender_last_name']);
                    }else{
                        $message[$i] = DB::table('join_quotation as si')
                            ->join('users as u','u.id','=','si.product_owner_id')
                            ->join('users as su','su.id','=','si.sender')
                            ->where('si.id',$m->inquery_id)
                            ->where('si.product_id', '!=',0)
                            ->first(['si.product_id','si.product_owner_id','si.sender','si.id as id','si.is_join_quotation','si.created_at','si.message','si.flag','si.spam','si.trush','u.first_name','u.last_name','su.first_name as sender_first_name','su.last_name as sender_last_name']);
                    }
                    $i++;
                }
                break;
            case "trush":
                $message = [];
                $i=0;
                foreach(InqueryTrush::where('user_took_action',$user_id)->get() as $m){
                    if($m->is_join_quotation == 0){
                        $message[$i] = DB::table('supllier_inqueries as si')
                            ->join('users as u','u.id','=','si.product_owner_id')
                            ->join('users as su','su.id','=','si.sender')
                            ->where('si.id',$m->inquery_id)
                            ->where('si.product_id', '!=',0)
                            ->first(['si.product_id','si.product_owner_id','si.sender','si.id as id','si.is_join_quotation','si.created_at','si.message','si.flag','si.spam','si.trush','u.first_name','u.last_name','su.first_name as sender_first_name','su.last_name as sender_last_name']);
                    }else{
                        $message[$i] = DB::table('join_quotation as si')
                            ->join('users as u','u.id','=','si.product_owner_id')
                            ->join('users as su','su.id','=','si.sender')
                            ->where('si.id',$m->inquery_id)
                            ->where('si.product_id', '!=',0)
                            ->first(['si.product_id','si.product_owner_id','si.sender','si.id as id','si.is_join_quotation','si.created_at','si.message','si.flag','si.spam','si.trush','u.first_name','u.last_name','su.first_name as sender_first_name','su.last_name as sender_last_name']);
                    }
                    $i++;
                }
                break;
        }
        // echo "<pre>";
        // print_r($message);
        // echo "</pre>";
        return View::make('frontend.view_inquery_by_group',compact(['message','group']));
    }

      public function add_product_group($group_name){
        if(Sentinel::getUser()){
        }else{
            return redirect('login')->withFlashMessage('Please sign in first.');
        }
        $user_id = Sentinel::getUser()->id;
        $company_id = Companies::where('user_id',$user_id)->first(['id'])->id;
        $group = SupplierProductGroups::create(['name'=>$group_name,'company_id'=>$company_id]);
        return $group;
    }


    public function post_product_create(Request $request){
        if(Sentinel::getUser()){}else{
            return redirect('login')->withFlashMessage('Please sign in first.');
        }

        $validator = Validator::make($request->all(), [
            'product_name' => 'required|max:10000',
            'parent_category' => 'required|integer|max:10000000|not_in:0',
            'sub_category' => 'required|integer|max:10000000|not_in:0',
            'product_meta_keywords' => 'required|max:10000',
            'product_model' => 'required|max:1000',
            'brand_name' => 'required|max:1000',
            'country' => 'required|integer|not_in:0|max:10000000',
            'product_att_name.*' => 'min:1|max:1000',
            'product_att_value.*' => 'min:2|max:2000',
            'processing_time' => 'required|integer|max:10000',
            'port' => 'required|max:10000',
            'supply_ability' => 'required|integer|max:10000000',
            'product_groups' => 'required|max:10000000|not_in:0',
            'payment.*' => 'min:1|max:100',
            'packages_delivery' => 'required|max:10000',
            'product_description' => 'required|max:10000000',
            'others_payment' => 'max:1000',
            'unit_type' => 'max:10000000|integer',
            'product_images' => 'required',
            'product_images.*' => 'max:2048|mimes:jpg,jpeg,png',
        ],['product_images'=>'At least one product image is required']);

        if ($validator->fails()) {
            // return $validator->errors()->all();
            return back()->withErrors($validator)->withInput();
        }

        if($request->is_limited_time_offer == true){
            $validator = Validator::make($request->all(), [
                'percentage' => 'required|numeric|max:100|min:0',
                'offer_from' => 'required|date',
                'offer_to' => 'required|date',
            ]);
            if ($validator->fails()) {
                // return $validator->errors()->all();
                return back()->withErrors($validator)->withInput();
            }
        }else{}

        $attr_val_loop = count($request->product_att_name);
        for ($i=0; $i < $attr_val_loop+1; $i++) {
            $validator = Validator::make($request->all(), [
                'product_att_name.'.$i => 'max:1000',
                'product_att_value.'.$i => 'max:2000',
                ]);
            if ($validator->fails()) {
                // return $validator->errors()->all();
                return back()->withErrors($validator)->withInput();
            }
        }

        if($request->base == 'based_quantity'){
            $based_quantity_loop = count($request->product_MOQ);
            for ($j=0; $j < $based_quantity_loop+1; $j++) {
                $validator = Validator::make($request->all(), [
                    'product_MOQ.'.$j => 'max:10000000',
                    'product_FOB_from.'.$j => 'numeric|max:10000000',
                    'product_FOB_to.'.$j => 'numeric|max:10000000',
                    ]);
                if ($validator->fails()) {
                    // return $validator->errors()->all();
                    return back()->withErrors($validator)->withInput();
                }
            }
        }else{
            $validator = Validator::make($request->all(), [
                'currencies' => 'required|max:10000000',
                'currency_from' => 'max:10000000|numeric',
                'currency_to' => 'max:10000000|numeric',
                'unit_type_FOB' => 'integer|max:10000000',
                'product_MOQ_FOB' => 'max:10000000',
                'discounted_price' => 'numeric|max:10000000',
                ]);
            if ($validator->fails()) {
                // return $validator->errors()->all();
                return back()->withErrors($validator)->withInput();
            }
        }

        $payment_loop = count($request->payment);
        for ($k=0; $k < $payment_loop+1; $k++) {
            $validator = Validator::make($request->all(), [
                'payment.'.$k => 'max:1000',
                ]);
            if ($validator->fails()) {
                // return $validator->errors()->all();
                return back()->withErrors($validator)->withInput();
            }
        }

        // dd($request->all());
            
        $user_id = Sentinel::getUser()->id;
        $company=Companies::where('user_id',$user_id)->first();
        $company_id=$company->id;
        $response_to_client = [];
        $payment_array = $request->payment;
        if($payment_array){
            if (in_array("others", $payment_array)) {
                $key = array_search('others', $payment_array);
                $payment_array[$key] = $request->others_payment;
            }
        }
      
        //Insert Product Start
        $bdtdc_product_array_insert = [
            'model'         => $request->product_model,
            'brandname'     => $request->brand_name,
            'location'      => $request->country,
            'payment_method'   => ($payment_array) ? implode(',',$payment_array) : null,
            'unit_type_id' => $request->unit_type,
            'product_groups' =>$request->product_groups,
            'delivery' => $request->input('packages_delivery'),
        ];

        if($request->base == 'based_FOB'){
            $bdtdc_product_array_insert['unit_type_id'] = $request->unit_type_FOB;
        }

        $product_details_id = DB::table('products')->insertGetId($bdtdc_product_array_insert);
        $response_to_client['model'] = $request->product_model;
        $response_to_client['brandname'] = $request->brand_name;
        $response_to_client['product_id'] = $product_details_id;
        //Insert Product End

        //product_description start
        $bdtdc_product_description_array = [
            'product_id' => $product_details_id,
            'name'       => $request->product_name,
            'description' => $request->product_description,
            'meta_keyword' => $request->product_meta_keywords,
            'tag' => $request->product_meta_tag,
        ];
        $product_description = DB::table('product_description')->insertGetId($bdtdc_product_description_array);
        $response_to_client['product_name'] = $request->product_name;
        //product_description end


        //bdtdc_product_to_category start
        $bdtdc_product_to_category_data = [
            'product_id' => $product_details_id,
            'category_id'   => $request->sub_category,
            'parent_id'   => $request->parent_category,
            'company_id'   => $company_id,
            'country_id'   => $request->country,
        ];
        
        $product_description = DB::table('product_to_category')->insert($bdtdc_product_to_category_data);
        //bdtdc_product_to_category end

        //bdtdc_product_to_wholesale_category start
        if($request->is_wholesale_product == true){
            $bdtdc_product_to_wholesale_category_data = [
                'product_id' => $product_details_id,
                'category_id'   => $request->sub_category,
                'parent_id'   => $request->parent_category,
                'company_id'   => $company_id,
                'country_id'   => $request->country,
            ];
            $product_description = DB::table('product_to_wholesale_category')->insert($bdtdc_product_to_wholesale_category_data);
        }
        //bdtdc_product_to_wholesale_category end

        //bdtdc_limited_lime_offers start
        if($request->is_limited_time_offer == true){
            $bdtdc_limited_lime_offers_data = [
                'product_id' => $product_details_id,
                'sub_category'   => $request->sub_category,
                'parent_category'   => $request->parent_category,
                'country'   => $request->country,
                'company_id'   => $company_id,
                'profit_percentage'   => $request->percentage,
                'start_date'   => date("Y-m-d H:i:s",strtotime($request->offer_from)),
                'end_date'   => date("Y-m-d H:i:s",strtotime($request->offer_to)),
            ];
            $product_description = DB::table('limited_lime_offers')->insert($bdtdc_limited_lime_offers_data);
        }
        
        $response_to_client['category'] = Categories::where('id',$request->sub_category)->first(['name'])->name;
        //bdtdc_limited_lime_offers end


        //bdtdc_logistic_infos start
        $bdtdc_logistic_infos_array = [
            'product_id' => $product_details_id,
            'processing_time'   => $request->processing_time,
            'port' => $request->port,
            'supply_ability' => $request->supply_ability,
        ];
        $product_description = DB::table('logistic_infos')->insertGetId($bdtdc_logistic_infos_array);
        //bdtdc_logistic_infos end

        //bdtdc_attributes start
        $attributes_details =[];
        $prev_attr_name_exists = [];
        for($i=0,$len=count($request->get('product_att_name'));$i<$len;$i++){
            if($request->get('product_att_name')[$i] != ""){
                if(in_array($request->get('product_att_name')[$i], $prev_attr_name_exists)){}else{
                    $input_arr[$i]['name'] = $request->get('product_att_name')[$i];
                    $input_arr[$i]['value'] = $request->get('product_att_value')[$i];
                    $attributes_details[] = DB::table('bdtdc_attributes')->insertGetId($input_arr[$i]);
                    array_push($prev_attr_name_exists, $request->get('product_att_name')[$i]);
                }
            }
        }
        //bdtdc_attributes end

        //bdtdc_product_attribute start
        $product_attribute = array();
        if(count($attributes_details)> 0){
            foreach($attributes_details as $data){
                $product_attribute = array(
                    'attribute_id' => $data,
                    'product_id' => $product_details_id,
                );
                $pro_attribute =DB::table('product_attribute')->insert($product_attribute);
            }
        }
        //bdtdc_product_attribute end

        //bdtdc_product_prices start
        $input_price = [];
        if($request->base == 'based_FOB'){
            if($request->product_MOQ_FOB != ""){
                $input_price['product_id']  = $product_details_id; 
                $input_price['currency'] = $request->currencies;
                $input_price['product_MOQ'] = $request->product_MOQ_FOB;
                $input_price['product_FOB'] = $request->currency_from.'-'.$request->currency_to;
                $input_price['discounted_price'] = $request->discounted_price;
                DB::table('bdtdc_product_prices')->insert($input_price);
            }
        }else{
            for($i=0,$len=count($request->product_MOQ);$i<$len;$i++){
                if($i==0){
                    $input_price[$i]['product_id']  = $product_details_id; 
                    $input_price[$i]['product_MOQ'] = $request->product_MOQ[$i];
                    $input_price[$i]['product_FOB'] = $request->product_FOB_from[$i].'-'.$request->product_FOB_to[$i];
                    // print_r($input_price[$i]);
                    DB::table('product_prices')->insert($input_price[$i]);
                }else{
                    if($request->product_MOQ[$i] != ""){
                        $input_price[$i]['product_id']  = $product_details_id; 
                        $input_price[$i]['product_MOQ'] = $request->product_MOQ[$i];
                        $input_price[$i]['product_FOB'] = $request->product_FOB_from[$i].'-'.$request->product_FOB_to[$i];
                        // print_r($input_price[$i]);
                        DB::table('product_prices')->insert($input_price[$i]);
                    }
                }
            }
        }
        //bdtdc_product_prices end

        //bdtdc_product_images start
        $allowed_img_no = 6;
        $current_img =1;
        if($request->file('product_images')){
            if(count($request->file('product_images'))>0){
                foreach ($request->file('product_images') as $product_images_single) {
                    if($product_images_single){
                        $new_parent_cat_name = Categories::where('id',$request->parent_category)->first();
                        $new_sub_cat_name = Categories::where('id',$request->sub_category)->first();
                        if($new_parent_cat_name && $new_sub_cat_name){
                            if($current_img > $allowed_img_no){}else{
                            $parent_cat_id = $request->input('parent_category');
                            $sub_cat_id = $request->input('sub_category');
                            $pname = trim($request->input('product_name'));
                            //The name of the directory that we need to create.
                            $directoryName = 'assets/frontend/images/product-image/'.trim($new_parent_cat_name->slug).'/'.trim($new_sub_cat_name->slug);

                            //Check if the directory already exists.
                            if(!is_dir($directoryName)){
                                //Directory does not exist, so lets create it.
                                //true for nested directory (need 0777 permission for this)
                                mkdir($directoryName, 0777, true);
                            }
                            if($pname == ''){
                                $string   = 'Product-image_'.$parent_cat_id."_".$sub_cat_id."_".str_random(10);
                            }else{
                                $string   = preg_replace('/[^A-Za-z0-9]/ ', '-',substr($pname,0,100)).'_'.$parent_cat_id."_".$sub_cat_id."_".str_random(10);
                            }
                            $temp_file  = $product_images_single;
                            $ext        = $product_images_single->getClientOriginalExtension();
                            $product_photo  = $string.'.'.$ext;
                            $dst = $directoryName.'/'.$product_photo;
                            move_uploaded_file($temp_file,$dst);
                            //insert image name to database
                            $img_arr = [
                                            'image' => $dst,
                                            'product_id' => $product_details_id
                                        ];
                            ProductImageNew::create($img_arr);
                            $current_img++;
                            }
                        }
                    }
                }
            }
        }
        //bdtdc_product_images end

        //bdtdc_supplier_products start
        $supplier_product_arr =[
            'product_id' => $product_details_id,
            'supplier_id' => Sentinel::getUser()->id,
            'number_sold' => 0,
            'product_status' => 0,
            'product_approved' => 0,
        ];
        SupplierProduct::create($supplier_product_arr);
        //bdtdc_supplier_products end

        $response_to_client['success'] = true;
        // return $response_to_client;
        return Redirect::to('dashboard/product')->with('product_edit_success','Product added successfully');
    }

    public function wholesale_product_create(){
        $countries = DB::select('select * from country_list');
        //dd($countries);
        $user_id = Sentinel::getUser()->id;
        $company=Companies::where('user_id',$user_id)->first();
        $company_id=$company->id;
        $data['product_groups']=DB::table('supplier_product_groups')->where('company_id',$company_id)->get();
        //dd($product_groups);
        foreach($countries as $country){
            $country_data[$country->id]=$country->name;
        }
        $data['modules']=array();
        $modules=DB::table('modules')
            ->where('parent_id','0')
            ->get();
        foreach ($modules as $module) {

            $children_data = array();

            $childrens = DB::table('modules')
                ->where('parent_id',$module->id)
                ->get();
            foreach ($childrens as $children) {
                # code...
                $children_data[] = array(
                    'name'  => $children->name,
                    'icon1'  =>  $children->icon1,
                    'icon2'  =>  $children->icon2,
                    'slug'  =>  $children->slug,
                    'css_class'  =>  $children->css_class
                );

            }
            $data['modules'][] = array(
                'name'     => $module->name,
                'parent_icon1'=>$module->icon1,
                'parent_icon2'=>$module->icon2,
                'childrens' => $children_data,
                'parent_slug'  =>$module->slug
            );

        }

        $data['categorys']=array();
        $categorys=DB::table('categories')
            ->where('parent_id','0')
            ->get();
        foreach ($categorys as $category) {

            $category_children_data = array();


            $category_childrens = DB::table('categories')
                ->where('parent_id',$category->id)
                ->get();
            
            foreach ($category_childrens as $category_children) {
                
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
        $units = ProductUnit::all();
        $country = Country::lists('name','id');
        $language = Language::lists('name','language_id');
        //return $country;
        return view('frontend.supplier.wholesale_product_create',$data, array('country'=>$country, 'units'=> $units));
    }

    public function post_section_create(Request $request){
        
        $validator = Validator::make($request->all(), [
            'section' => 'required',
            'back_image' => 'mimes:jpeg,jpg,png,gif|image|max:10000', // max 10000kb
            'first_slider_image' => 'mimes:jpeg,jpg,png,gif|image|max:10000', // max 10000kb
            'second_slider_image' => 'mimes:jpeg,jpg,png,gif|image|max:10000', // max 10000kb
            'third_slider_image' => 'mimes:jpeg,jpg,png,gif|image|max:10000', // max 10000kb
        ]);
        if ($validator->fails()) {
            //return response()->json(['error' => $validator->errors()->getMessages()], 200);
            $section_error_message = '';
            foreach($validator->errors()->getMessages() as $value){
                $section_error_message .= $value[0].' ';
            }
            $request->session()->flash('alert-danger', $section_error_message);
            return redirect()->back();
            /*return redirect()->back()->withErrors($validator)
                        ->withInput();*/
        }
        else{
            $user_id = Sentinel::getUser()->id;
            $company=Company::where('user_id',$user_id)->first();
            $company_id=$company->id;
            $back_image_file = $request->file('back_image');
            if($back_image_file){
                $back_image_name = 'section_img_'.uniqid().'_'.$back_image_file->getClientOriginalName();
                $back_image_file->move('uploads',$back_image_name);
            }else{
                $back_image_name = '';
            }
            if($request->file('first_slider_image')){
                $first_slider_image = 'slider_img_1_'.uniqid().'_'.uniqid().'.'.$request->file('first_slider_image')->getClientOriginalExtension();
                $request->file('first_slider_image')->move('banner-images',$first_slider_image);
            }else{
                $first_slider_image = '';
            }
            if($request->file('second_slider_image')){
                $second_slider_image = 'slider_img_2_'.uniqid().'_'.uniqid().'.'.$request->file('second_slider_image')->getClientOriginalExtension();
                $request->file('second_slider_image')->move('banner-images',$second_slider_image);
            }else{
                $second_slider_image = '';
            }
            if($request->file('third_slider_image')){
                $third_slider_image = 'slider_img_3_'.uniqid().'_'.uniqid().'.'.$request->file('third_slider_image')->getClientOriginalExtension();
                $request->file('third_slider_image')->move('banner-images',$third_slider_image);
            }else{
                $third_slider_image = '';
            }
            
            if($request->section == '4'){
                $section_data[] = array(
                    'section_id' => $request->input('section'),
                    'back_image' => $first_slider_image,
                    'back_color' => $second_slider_image,
                    'font_color' => $third_slider_image,
                    'company_id' => $company_id,
                );
            }else{
                $section_data[] = array(
                    'section_id' => $request->input('section'),
                    'back_image' => $back_image_name,
                    'title_logo' => $request->input('title_viewer'),
                    'back_color' => $request->input('back_color'),
                    'font_color' => $request->input('font_color'),
                    'is_show_image' => $request->input('back_image_viewer'),
                    'is_show_color' => $request->input('background_color_viewer'),
                    'height' => $request->input('height'),
                    'width' => $request->input('width'),
                    'company_id' => $company_id,
                );
            }
            
            // dd($section_data);
                    $section_data_result = DB::table('template_settings')->insert($section_data);
                    if($section_data_result){
                        $request->session()->flash('alert-success', 'New Section Created Successfully!');
                        return redirect()->back();
                        // echo "Inserted";
                    }
                    else{
                        $request->session()->flash('alert-danger', 'Error on Creating Section');
                        return redirect()->back();
                        // return redirect()->back()->with('section_message' 'Error on creating new section');
                    }
        }
        
    }

      public function post_section_delete(ProductRequest $request, $id){
        $user_id = Sentinel::getUser()->id;
        $company=Company::where('user_id',$user_id)->first();
        $company_id=$company->id;
        $template_setting_data = DB::table('template_settings')->where('id',$id)->first();
        $delete_result = DB::table('template_settings')->where('id', $id)->where('company_id',$company_id)->delete();
        if($delete_result){
            if($template_setting_data->section_id == 4){
                if($template_setting_data->back_image != ''){
                    unlink("assets/frontend/images/banner-images/".urldecode($template_setting_data->back_image));
                }
                if($template_setting_data->back_color != ''){
                    unlink("assets/frontend/images/banner-images/".urldecode($template_setting_data->back_color));
                }
                if($template_setting_data->font_color != ''){
                    unlink("assets/frontend/images/banner-images/".urldecode($template_setting_data->font_color));
                }
            }else{
                if($template_setting_data->back_image != ''){
                    unlink("assets/frontend/images/uploads/".urldecode($template_setting_data->back_image));
                }
            }
            $request->session()->flash('alert-success', 'Section Deleted Successfully!');
            return redirect()->back();
        }
        else{
            $request->session()->flash('alert-danger', 'Error on Deleting Section');
            return redirect()->back();
        }
    }

     public function post_wholesale_product_create(ProductRequest $request){
        
        $user_id = Sentinel::getUser()->id;
        $company=Companies::where('user_id',$user_id)->first();
        $company_id=$company->id;
        $response_to_client = [];
        // dd($company_id);
        DB::beginTransaction();
        try {
           
            //dd($file_name);
            $insert_data = [
                'model'         => $request->product_model[0],
                'brandname'     => $request->brand_name[0],
                'location'      => $request->country[0],
                
                'payment_method'   => ($request->payment) ? implode(',',$request->payment) : null,
                'unit_type_id' => $request->unit_type[0],
                'product_groups' =>$request->product_groups[0],
            ];
            
            //return $insert_data;
            $product_details_id = DB::table('products')->insertGetId( $insert_data );
            $response_to_client['model'] = $request->product_model[0];
            $response_to_client['brandname'] = $request->brand_name[0];
            $response_to_client['product_id'] = $product_details_id;
        }
        catch(ValidationException $e){
            DB::rollback();
        }
        
        try{

            $insert_data = [
                'product_id' => $product_details_id,
                'name'       => $request->product_name[0],
                'description' => $request->product_description[0],
                'meta_keyword' => $request->product_meta_keywords[0],
            ];
            //return $insert_data;
            $product_description = DB::table('product_description')->insertGetId($insert_data);
            $response_to_client['product_name'] = $request->product_name[0];
        }
        catch(ValidationException $e){
            DB::rollback();
        }
        
        try{

            $insert_data = [
                'product_id' => $product_details_id,
                'category_id'   => $request->sub_category[0],
            ];
            //return $insert_data;
            
            $product_wholesale = DB::table('product_to_wholesale_category')->insert($insert_data);
            //dd($product_wholesale);
            $response_to_client['category'] = WholesaleCategory::where('id',$request->sub_category[0])->first(['name'])->name;
        }
        catch(ValidationException $e){
            DB::rollback();
        }
        
        try{
            $attributes_details =[];
            for($i=0,$len=count($request->get('product_att_name'));$i<$len;$i++){
                if($request->get('product_att_name')[$i] != ""){
                    $input_arr[$i]['name'] = $request->get('product_att_name')[$i];
                    $input_arr[$i]['value'] = $request->get('product_att_value')[$i];
                    $attributes_details[] = DB::table('attributes')->insertGetId($input_arr[$i]);
                }
                
            }
            //return $input_arr[0];
        }
        catch(ValidationException $e){
            DB::rollback();
        }
        
        try{
            $product_attribute = array();
            if(count($attributes_details)> 0){
                foreach($attributes_details as $data){
                    $product_attribute[] = array(
                        'attribute_id' => $data,
                        'product_id' => $product_details_id,
                    );
                    $pro_attribute =DB::table('product_attribute')->insert($product_attribute);
                }   
            }
        }
        catch(ValidationException $e){
            DB::rollback();
        }
        
        try{
            $input_price = [];
            
            for($i=0,$len=count($request->product_MOQ);$i<$len;$i++){
                if($request->product_MOQ[$i] != ""){
                    $input_price[$i]['product_id']  = $product_details_id; 
                    $input_price[$i]['product_MOQ'] = $request->product_MOQ[$i];
                    $input_price[$i]['product_FOB'] = $request->product_FOB[$i];
                    DB::table('product_prices')->insert($input_price[$i]);   
                }
            }
            // return $input_price;

          
        }
        catch(ValidationException $e){
            DB::rollback();
        }
        
        try{
            if($request->p_image){
                $img_arr = [];
                for($i=0,$len=count($request->p_image);$i<$len;$i++){
                    $img_arr[$i]['image']       = $request->p_image[$i];
                    $img_arr[$i]['product_id']  = $product_details_id;
                    ProductImage::create($img_arr[$i]);
                }
                
            }
            
        }
        catch(ValidationException $e){
            DB::rollback();
        }
        // echo $product_details_id;
        // dd(DB::table('bdtdc_product_prices')->get());
        catch(\Exception $e)
        {
            DB::rollback();
            throw $e;
        }
        DB::commit();
        $units = ProductUnit::all();

        $supplier_product_arr =[
            'product_id' => $product_details_id,
            'supplier_id' => Sentinel::getUser()->id,
            'number_sold' => 0,
            'product_status' => 0,
            'product_approved' => 0,
        ];
       
        SupplierProduct::create($supplier_product_arr);
        return $response_to_client;
    }

    public function post_product_update(Request $request, $id){
            if(Sentinel::getUser()){
            }else{
                return redirect('login')->withFlashMessage('Please sign in first.');
            }
            $user_id = Sentinel::getUser()->id;
            $company=Companies::where('user_id',$user_id)->first();

            $product_description = ProductToCategory::where('product_id',$id)->first();
            $company_id = $product_description->company_id;
            if(!$product_description || ($product_description->company_id != $company_id)){
                Sentinel::logout();
                return  redirect('login')->withFlashMessage('Please sign in!');
            }
            $validator = Validator::make($request->all(), [
                'product_name' => 'required|max:10000',
                'parent_category' => 'required|integer|max:10000000|not_in:0',
                'sub_category' => 'required|integer|max:10000000|not_in:0',
                'product_meta_keywords' => 'required|max:10000',
                'product_model' => 'required|max:1000',
                'brand_name' => 'required|max:1000',
                'country' => 'required|integer|not_in:0|max:10000000',
                'product_att_name.*' => 'min:1|max:1000',
                'product_att_value.*' => 'min:2|max:2000',
                'processing_time' => 'required|integer|max:10000',
                'port' => 'required|max:10000',
                'supply_ability' => 'required|integer|max:10000000',
                'product_groups' => 'required|max:10000000|not_in:0',
                'payment.*' => 'min:1|max:100',
                'packages_delivery' => 'required|max:10000',
                'product_description' => 'required|max:10000000',
                'others_payment' => 'max:1000',
                'unit_type' => 'max:10000000|integer',
                'product_images.*' => 'max:2048|mimes:jpg,jpeg,png',
            ],['product_images'=>'At least one product image is required']);

            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }else{}
            if($request->is_limited_time_offer == true){
                $validator = Validator::make($request->all(), [
                    'percentage' => 'required|numeric|max:1000',
                    'offer_from' => 'required|date',
                    'offer_to' => 'required|date',
                ]);
                if ($validator->fails()) {
                    return back()->withErrors($validator)->withInput();
                }
            }else{}
            $attr_val_loop = count([$request->product_att_name]);
            for ($i=0; $i < $attr_val_loop+1; $i++) {
                $validator = Validator::make($request->all(), [
                    'product_att_name.'.$i => 'max:1000',
                    'product_att_value.'.$i => 'max:2000',
                    ]);
                if ($validator->fails()) {
                    return back()->withErrors($validator)->withInput();
                }
            }
            if($request->base == 'based_quantity'){
                $based_quantity_loop = count($request->product_MOQ);
                for ($j=0; $j < $based_quantity_loop+1; $j++) {
                    $validator = Validator::make($request->all(), [
                        'product_MOQ.'.$j => 'max:10000000',
                        'product_FOB_from.'.$j => 'numeric|max:10000000',
                        'product_FOB_to.'.$j => 'numeric|max:10000000',
                        ]);
                    if ($validator->fails()) {
                        return back()->withErrors($validator)->withInput();
                    }
                }
            }else{
                $validator = Validator::make($request->all(), [
                    'currencies' => 'required|max:10000000',
                    'currency_from' => 'max:10000000|numeric',
                    'currency_to' => 'max:10000000|numeric',
                    'unit_type_FOB' => 'integer|max:10000000',
                    'product_MOQ_FOB' => 'max:10000000',
                    'discounted_price' => 'numeric|max:10000000',
                    ]);
                if ($validator->fails()) {
                    return back()->withErrors($validator)->withInput();
                }
            }
            $payment_loop = count($request->payment);
            for ($k=0; $k < $payment_loop+1; $k++) {
                $validator = Validator::make($request->all(), [
                    'payment.'.$k => 'max:1000',
                    ]);
                if ($validator->fails()) {
                    return back()->withErrors($validator)->withInput();
                }
            }

            $payment = [];
            if($request->input('payment')){
                $payment = $request->input('payment');
            }
            if($payment){
                if (in_array("others", $payment)) {
                    $key = array_search('others', $payment);
                    $payment[$key] = $request->others_payment;
                }
            }

            $response_to_client = [];
            
            // bdtdc_product update start
            $product_data = [
                'model'       => $request->input('product_model'),
                'brandname' => $request->input('brand_name'),
                'location' => $request->input('country'),
                'payment_method'   => ($payment) ? implode(',',$payment) : null,
                'product_groups' =>$request->input('product_groups'),
                'unit_type_id' => $request->input('unit_type'),
                'delivery' => $request->input('packages_delivery'),
            ];

            if($request->base == 'based_FOB'){
                    $product_data['unit_type_id'] = $request->unit_type_FOB;
            }

            $product_details_id = DB::table('products')->where('id', $id)->update($product_data);
            // bdtdc_product update end

            //bdtdc_product_description update start
            $product_description_data = [
                'name'       => $request->input('product_name'),
                'description' => $request->input('product_description'),
                'meta_keyword' => $request->input('product_meta_keywords'),
                'tag' => $request->input('product_meta_tag'),
            ];
            $product_description = DB::table('product_description')->where('product_id', $id)->update($product_description_data);
            //bdtdc_product_description update end

            //bdtdc_product_to_category & wholesale_category update start
            $product_to_category_data = [
                'category_id'   => $request->input('sub_category'),
                'parent_id'   => $request->parent_category,
                'country_id'   => $request->country,
            ];
            $product_to_category = DB::table('product_to_category')->where('product_id', $id)->update($product_to_category_data);

            if($request->is_wholesale_product == true){
                if(DB::table('product_to_wholesale_category')->where('product_id', $id)->first()){
                    $bdtdc_product_to_wholesale_category_data = [
                        'category_id'   => $request->input('sub_category'),
                        'parent_id'   => $request->parent_category,
                        'country_id'   => $request->country,
                    ];
                    $product_description = DB::table('product_to_wholesale_category')->where('product_id', $id)->update($bdtdc_product_to_wholesale_category_data);
                }else{
                    $bdtdc_product_to_wholesale_category_data = [
                        'product_id' => $id,
                        'category_id'   => $request->sub_category,
                        'parent_id'   => $request->parent_category,
                        'company_id'   => $company_id,
                        'country_id'   => $request->country,
                    ];
                    $product_description = DB::table('product_to_wholesale_category')->insert($bdtdc_product_to_wholesale_category_data);
                }
            }else{
                DB::table('product_to_wholesale_category')->where('product_id', $id)->delete();
            }

            if($request->is_limited_time_offer == true){
                if(DB::table('limited_lime_offers')->where('product_id', $id)->first()){
                    $bdtdc_limited_lime_offers_data = [
                        'profit_percentage'   => $request->percentage,
                        'start_date'   => date("Y-m-d H:i:s",strtotime($request->offer_from)),
                        'end_date'   => date("Y-m-d H:i:s",strtotime($request->offer_to)),
                    ];
                    $product_description = DB::table('limited_lime_offers')->where('product_id', $id)->update($bdtdc_limited_lime_offers_data);
                }else{
                    $bdtdc_limited_lime_offers_data = [
                        'product_id' => $id,
                        'company_id'   => $company_id,
                        'profit_percentage'   => $request->percentage,
                        'start_date'   => date("Y-m-d H:i:s",strtotime($request->offer_from)),
                        'end_date'   => date("Y-m-d H:i:s",strtotime($request->offer_to)),
                    ];
                    $product_description = DB::table('limited_lime_offers')->insert($bdtdc_limited_lime_offers_data);
                }
                
            }else{
                DB::table('limited_lime_offers')->where('product_id', $id)->delete();
            }
            //bdtdc_product_to_category & wholesale_category update end

            //bdtdc_logistic_infos update start
            $bdtdc_logistic_infos_array = [
                'product_id' => $id,
                'processing_time'   => $request->processing_time,
                'port' => $request->port,
                'supply_ability' => $request->supply_ability,
            ];
            $product_description = DB::table('logistic_infos')->where('product_id', $id)->update($bdtdc_logistic_infos_array);
            if(!$product_description){
                DB::table('logistic_infos')->insert($bdtdc_logistic_infos_array);
            }
            //bdtdc_logistic_infos update end

            //bdtdc_attributes old delete start
            $attributes_to_delete = ProductAttribute::where('product_id',$id)->get();
            if($attributes_to_delete){
                if(count($attributes_to_delete)>0){
                    foreach ($attributes_to_delete as $attributes_to_delete_single) {
                        Attribute::where('id',$attributes_to_delete_single->attribute_id)->delete();
                        ProductAttribute::where('id',$attributes_to_delete_single->id)->delete();
                    }
                }
            }
            
            //bdtdc_attributes old delete end

            //bdtdc_attributes new insert start
            $attributes_details =[];
            $prev_attr_name_exists = [];
            for($i=0,$len=count($request->get('product_attr_name'));$i<$len;$i++){
                if($request->get('product_attr_name')[$i] != ""){
                    if(in_array($request->get('product_attr_name')[$i], $prev_attr_name_exists)){}else{
                        $input_arr[$i]['name'] = $request->get('product_attr_name')[$i];
                        $input_arr[$i]['value'] = $request->get('product_attr_value')[$i];
                        $attributes_details[] = DB::table('attributes')->insertGetId($input_arr[$i]);
                        array_push($prev_attr_name_exists, $request->get('product_attr_name')[$i]);
                    }
                }
            }
            //bdtdc_attributes new insert end

            //bdtdc_product_attribute new insert start
            $product_attribute = array();
            if(count($attributes_details)> 0){
                foreach($attributes_details as $data){
                    $product_attribute = array(
                        'attribute_id' => $data,
                        'product_id' => $id,
                    );
                    $pro_attribute =DB::table('product_attribute')->insert($product_attribute);
                }
            }
            //bdtdc_product_attribute new insert end

            //BdtdcProductPrice update start
            if($request->base == 'based_FOB'){
                if($request->product_price_id_FOB[0] == 0){
                    $input_price_update['currency'] = $request->currencies;
                    $input_price_update['product_MOQ'] = $request->product_MOQ_FOB;
                    $input_price_update['product_FOB'] = $request->currency_from.'-'.$request->currency_to;
                    $input_price_update['discounted_price'] = $request->discounted_price;
                    BdtdcProductPrice::create($input_price_update);
                }else{
                    $input_price_update['currency'] = $request->currencies;
                    $input_price_update['product_MOQ'] = $request->product_MOQ_FOB;
                    $input_price_update['product_FOB'] = $request->currency_from.'-'.$request->currency_to;
                    $input_price_update['discounted_price'] = $request->discounted_price;
                    BdtdcProductPrice::where('id',$request->product_price_id_FOB[0])->update($input_price_update);
                }
            }else{
                $price_id_loop = count($request->product_price_id);
                for ($pr=0; $pr < $price_id_loop; $pr++) {
                    if($request->product_price_id[$pr] == 0){
                        $input_price_insert['product_id']  = $id;
                        $input_price_insert['product_MOQ'] = $request->product_MOQ[$pr];
                        $input_price_insert['product_FOB'] = $request->product_FOB_from[$pr].'-'.$request->product_FOB_to[$pr];
                        BdtdcProductPrice::create($input_price_insert);
                    }else{
                        $input_price_update['currency'] = '';
                        $input_price_update['product_MOQ'] = $request->product_MOQ[$pr];
                        $input_price_update['product_FOB'] = $request->product_FOB_from[$pr].'-'.$request->product_FOB_to[$pr];
                        $input_price_update['discounted_price'] = '';
                        BdtdcProductPrice::where('id',$request->product_price_id[$pr])->update($input_price_update);
                    }
                }
            }
            if($request->input('deleted_trade_id')){
                foreach ($request->input('deleted_trade_id') as $trade_id_delete) {
                    BdtdcProductPrice::where('id',$trade_id_delete)->delete();
                }
            }
            //BdtdcProductPrice update end

            //BdtdcProductImageNew new products images insert start
            $allowed_img_no = 6;
            $current_img =1;
            if($request->file('product_images')){
                if(count($request->file('product_images'))>0){
                    foreach ($request->file('product_images') as $product_images_single) {
                        if($product_images_single){
                            $new_parent_cat_name = Categories::where('id',$request->parent_category)->first();
                            $new_sub_cat_name = Categories::where('id',$request->sub_category)->first();
                            if($new_parent_cat_name && $new_sub_cat_name){
                                if($current_img > $allowed_img_no){}else{
                                $parent_cat_id = $request->input('parent_category');
                                $sub_cat_id = $request->input('sub_category');
                                $pname = trim($request->input('product_name'));
                                //The name of the directory that we need to create.
                                $directoryName = 'bdtdc-product-image/'.trim($new_parent_cat_name->slug).'/'.trim($new_sub_cat_name->slug);

                                //Check if the directory already exists.
                                if(!is_dir($directoryName)){
                                    //Directory does not exist, so lets create it.
                                    //true for nested directory (need 0777 permission for this)
                                    mkdir($directoryName, 0777, true);
                                }
                                if($pname == ''){
                                    $string   = 'Product-image_'.$parent_cat_id."_".$sub_cat_id."_".str_random(10);
                                }else{
                                    $string   = preg_replace('/[^A-Za-z0-9]/ ', '-',substr($pname,0,100)).'_'.$parent_cat_id."_".$sub_cat_id."_".str_random(10);
                                }
                                $temp_file  = $product_images_single;
                                $ext        = $product_images_single->getClientOriginalExtension();
                                $product_photo  = $string.'.'.$ext;
                                $dst = $directoryName.'/'.$product_photo;
                                move_uploaded_file($temp_file,$dst);
                                //insert image name to database
                                $img_arr = [
                                                'image' => $dst,
                                                'product_id' => $id,
                                            ];
                                ProductImageNew::create($img_arr);
                                $current_img++;
                                }
                            }
                        }
                    }
                }
            }
            //BdtdcProductImageNew new products images insert end

            //BdtdcProductImageNew old products images delete start
            if($request->input('deleted_p_image_id')){
                if(count($request->input('deleted_p_image_id'))>0){
                    foreach ($request->input('deleted_p_image_id') as $deleted_images_single) {
                        $image_to_delete = ProductImageNew::where('id',$deleted_images_single)->first();
                        if($image_to_delete){
                            if(file_exists($image_to_delete->image)){
                                @unlink($image_to_delete->image);
                            }
                        }
                        ProductImageNew::where('id',$deleted_images_single)->delete();
                    }
                }
            }
            //BdtdcProductImageNew old products images delete end

            $response_to_client['success'] = true;
            
                  $role =Role_user::where('user_id',Sentinel::getUser()->id)->first();
            
                if($role->role_id ==2){
             return Redirect::to('admin/product')->with('product_edit_success','Product updated successfully');
                }

            return Redirect::to('dashboard/product')->with('product_edit_success','Product updated successfully');

    }


     public function product_edit($id){
        if(Sentinel::getUser()){
        }else{
            return Redirect::to('ServiceLogin?continue='.URL::to($_SERVER['SCRIPT_URL']))->withFlashMessage('You must first login before accessing this page.');
        }
        $user_id = Sentinel::getUser()->id;
        $company=Company::where('user_id',$user_id)->first();
        $company_id = $company->id;
        $product_description = ProductToCategory::where('product_id',$id)->first();

        if($product_description->company_id != $company_id){
            Sentinel::logout();
            return Redirect::to('ServiceLogin?continue='.URL::to($_SERVER['SCRIPT_URL']))->withFlashMessage('You must first login before accessing this page.');
        }
        
        
        $countries = DB::select('select * from country_list');
        foreach($countries as $country){
            $country_data[$country->id]=$country->name;
        }
        

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
                //'name'=>$category->category_name,
                'category_id'     => $category->id,
                'name'=>$category->name,
                'category_childrens' => $category_children_data

            );
            //dd($category_children_data);

        }
        $units = ProductUnit::all();
        $country = Country::get(['name','id']);
        $product = Products::with(['product_name','category',])
            ->where('id', $id)
            ->first();
        $products = ProductToCategory::where('product_id', $id)->first();

        $parent_id = $products?$products->parent_id:0;

        $data['parent_id'] = $parent_id;
      
        $attributes = ProductAttribute::with(['bdtdcAttribute'])
            ->where('product_id', $id)
            ->orderBy('id','asc')
            ->get();
        $prices=ProductPrice::where('product_id',$id)->first();
        $supplier_product = DB::table('products as p')
            ->join('product_description as pd','pd.product_id','=','p.id')
            ->where('p.id',$id)
            ->first();
        $product_price = DB::table('product_prices')->where('product_id',$id)->get();
        $product_image = ProductImage::where('product_id',$id)->get();
        $product_images = ProductImageNew::where('product_id',$id)->get();
   
        $product_groups=DB::table('supplier_product_groups')->where('company_id',$company_id)->get();
        $bdtdc_logistic_infos=DB::table('logistic_infos')->where('product_id',$id)->get();
        $bdtdc_product_to_wholesale_category=DB::table('bdtdc_product_to_wholesale_category')->where('product_id',$id)->get();
        $bdtdc_limited_lime_offers=DB::table('limited_lime_offers')->where('product_id',$id)->get();
        //return $product_groups;
        // echo "<pre>";
        // print_r($data['categorys']);
        // echo "</pre>";
        $data['pages']=PagesPrefix::where('active',1)->get();


        return view('frontend.supplier.product_edit',$data, array('country'=>$country,'prices'=>$prices,'units'=> $units,'product'=>$product, 'products'=> $products, 'attributes'=>$attributes,'supplier_product'=> $supplier_product,'product_price'=>$product_price,'product_image'=>$product_image,'product_images'=>$product_images,'product_groups'=>$product_groups,'bdtdc_logistic_infos'=>$bdtdc_logistic_infos,'bdtdc_product_to_wholesale_category'=>$bdtdc_product_to_wholesale_category,'bdtdc_limited_lime_offers'=>$bdtdc_limited_lime_offers,'product_description'=>$product_description,'id'=>$id));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     public function store(Request $r){

        $validator = Validator::make($r->all(), [
            'company_name' => 'nullable|min:3|max:500',
            'location_of_reg' => 'nullable|integer',
            'company_website' => 'nullable|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'street' => 'nullable|min:3|max:500',
            'city' => 'nullable|min:3|max:500',
            'zip_code' => 'nullable|integer|min:3|max:500',
            'postal_code' => 'nullable|min:3|max:500',
            'region' => 'nullable|min:3|max:500',
            'main_product1' => 'nullable|string|min:3|max:500',
            'main_product2' => 'nullable|string|min:3|max:500',
            'main_product3' => 'nullable|string|min:3|max:500',
            'year_of_reg' => 'nullable|integer|min:3|max:500',
            'total_employe' => 'nullable|integer|min:3|max:500',
            'office_size' => 'nullable|string|min:3|max:500',
            'company_advantage' => 'nullable|string|min:3|max:500',
            'legal_owner' => 'nullable|string|min:3|max:500',
            'contact_no' => 'nullable|min:3|max:500',
            'contact_email' => 'nullable|email|min:3|max:500',

            'anual_sales_volume' => 'nullable|integer|min:3|max:500',
            'export_percentage' => 'nullable|integer|min:3|max:500',
            'year_of_exporting' => 'nullable|digits:4|integer',
            'add_customer' => 'nullable|integer',
            'no_of_emp_trade_dept' => 'nullable|integer',
            'has_multiple_industries' => 'nullable|integer',
            'no_rd_staff' => 'nullable|integer',
            'no_qc_staff' => 'nullable|integer',
            'avarage_lead_time' => 'nullable|string',
            'has_overseas_ofice' => 'nullable|integer',

            'factory_location' => 'nullable|string',
            'factory_size' => 'nullable|integer',
            'contact_manufacturing.*' => 'nullable|integer|digits:1',
            'no_qc_staff' => 'nullable|integer',
            'no_rd_staff' => 'nullable|integer',
            'production_line' => 'nullable|integer',
            'anual_value' => 'nullable|integer',
            'has_more_anual_production_capacity' => 'nullable|integer|digits:1',

            'company_introduction' => 'nullable|string',
            'company_services' => 'nullable|string',
            'company_faq' => 'nullable|string',

            'type' => 'nullable|integer',
            'reference_no' => 'nullable|string',
            'name' => 'nullable|integer',
            'issued_by' => 'nullable|integer',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'scope' => 'nullable|string',

            'name' => 'nullable|string',
            'issued_by' => 'nullable|integer',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'scope' => 'nullable|string',

            'patent_no' => 'nullable|string',
            'patent_name' => 'nullable|string',
            'type_of_patent' => 'nullable|integer',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'scope' => 'nullable|string',
            
            'registration_no' => 'nullable|string',

        ]);
        if ($validator->fails()) {
            $error_message = '';
            foreach($validator->errors()->getMessages() as $value){
                $error_message .= $value[0].' ';
            }
            return redirect()->back()->with('profile_update_msg',$error_message);
        }


        $user_id = Sentinel::getUser()->id;
        $insert_arr_data =[
            'location_of_reg'   => $r->get('location_of_reg'),
            'year_of_reg'       => $r->get('year_of_reg'),
            'city'              => $r->get('city'),
            'region'            => $r->get('region'),
            'zip_code'          => $r->get('zip_code'),
            'postal_code'       => $r->get('postal_code'),
            'total_employe'     => $r->get('total_employe'),
            'company_website'   => $r->get('company_website'),
            'office_suite'      => $r->get('office_suite'),
        ];

        Companies::where('user_id',$user_id)->update($insert_arr_data);

        for($i=0,$len=count($r->get('product_name'));$i<$len;$i++){
            $arr[$i]['supplier_id']     = $user_id;
            $arr[$i]['product_name']    = $r->get('product_name')[$i];
            SupplierMainProduct::create($arr[$i]);
        }

        return Redirect::back()->with('update_msg','Information Saved!');

        return $insert_arr_data;
    }

    public function post_personal_info(Request $r){
        $validator = Validator::make($r->all(), [
            'profile_picture' => 'mimes:jpeg,jpg,png,gif|image|max:10000',
            'company_logo' => 'mimes:jpeg,jpg,png,gif|image|max:10000', // max 10000kb
        ]);
        if ($validator->fails()) {
            $error_message = '';
            foreach($validator->errors()->getMessages() as $value){
                $error_message .= $value[0].' ';
            }
            return redirect()->back()->with('profile_update_msg',$error_message);
        }
        $user_id = Sentinel::getUser()->id;
        $company=Companies::where('user_id',$user_id)->first();
        $company_id=$company->id;

        $company_logo_old = "no_image.jpg";
        $company_description = CompanyDescription::where('company_id',$company_id)->first();
        if($company_description->company_logo){
            $company_logo_old = $company_description->company_logo;
        }
        $profile_pic_old = Users::where('id',$user_id)->first(['profile_picture'])->profile_picture;

        if($r->file('profile_picture')){
            $file = $r->file('profile_picture');
            $string     = "profile_pic_".str_random(10);
            $ext        = $file->getClientOriginalExtension();
            $profile_pic    = $string.'.'.$ext;
            $file_name = time() . $file->getClientOriginalName(); 
            $file_path = public_path().'/uploads/';

            // if(move_uploaded_file($temp_file,'uploads/'.$profile_pic)){
            if($file->move($file_path, $profile_pic)){
                $data['img_msg'] = "Image uploaded";
                if($profile_pic_old && trim($profile_pic_old) != ''){
                    $file_location_old = 'uploads/'.$profile_pic_old;
                    if (file_exists($file_location_old)) {
                        unlink($file_location_old);
                    }
                }
                $update_personal_info = [
                    'first_name' => $r->get('first_name'),
                    'last_name' => $r->get('last_name'),
                    'department' => $r->get('department'),
                    'job_title' => $r->get('position'),
                    'profile_picture' => $profile_pic,
                ];
                Users::where('id',$user_id)->update($update_personal_info);
            }
            else{
            }
        }

        if($r->file('company_logo')){
            $string     = "company_logo_".str_random(10);
            $temp_file  = $_FILES['company_logo']['tmp_name'];
            $ext        = pathinfo($_FILES['company_logo']['name'], PATHINFO_EXTENSION);
            $company_logo   = $string.'.'.$ext;
            if(move_uploaded_file($temp_file,'uploads/'.$company_logo)){
                $data['img_msg'] = "Image uploaded";
                $file_location_old = 'uploads/'.$company_logo_old;
                if (file_exists($file_location_old)) {
                    unlink($file_location_old);
                }
                $company_logo_arr = ['company_logo'=>$company_logo];
                CompanyDescription::where('company_id',$company_id)->update($company_logo_arr);
            }
            else{
                $data['img_msg'] = "Image couldn't be uploaded";
            }
        }

        $update_personal_info = [
            'first_name' => $r->get('first_name'),
            'last_name' => $r->get('last_name'),
            'department' => $r->get('department'),
            'job_title' => $r->get('position'),
        ];

        Users::where('id',$user_id)->update($update_personal_info);
        

        return Redirect::back()->with('profile_update_msg','Profile saved!');
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
  public function post_section_update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'section' => 'required',
            'back_image' => 'mimes:jpeg,jpg,png,gif|image|max:10000', // max 10000kb
            'first_slider_image' => 'mimes:jpeg,jpg,png,gif|image|max:10000', // max 10000kb
            'second_slider_image' => 'mimes:jpeg,jpg,png,gif|image|max:10000', // max 10000kb
            'third_slider_image' => 'mimes:jpeg,jpg,png,gif|image|max:10000', // max 10000kb
        ]);
        if ($validator->fails()) {
            $section_error_message = '';
            foreach($validator->errors()->getMessages() as $value){
                $section_error_message .= $value[0].' ';
            }
            $request->session()->flash('alert-danger', $section_error_message);
            return redirect()->back();
        }
        $user_id = Sentinel::getUser()->id;
        $company=Company::where('user_id',$user_id)->first();
        $company_id=$company->id;
        $template_setting_data = DB::table('template_settings')->where('id',$id)->first();
        $prev_back_image = $request->input('prev_back_image');
        $prev_back_image_name = basename($prev_back_image);
        $back_image_file = $request->file('back_image');
        if($request->input('section') == 4){
            if($request->file('first_slider_image')){
                $first_slider_image = 'slider_img_1_'.uniqid().'_'.uniqid().'.'.$request->file('first_slider_image')->getClientOriginalExtension();
                $request->file('first_slider_image')->move('banner-images',$first_slider_image);
                if (file_exists("assets/frontend/images/banner-images/".urldecode(basename($request->input('prev_first_slider_image'))))) {
                        @unlink("assets/frontend/images/banner-images/".urldecode(basename($request->input('prev_first_slider_image'))));
                    }
            }else{
                $first_slider_image = basename($request->input('prev_first_slider_image'));
            }
            if($request->file('second_slider_image')){
                $second_slider_image = 'slider_img_2_'.uniqid().'_'.uniqid().'.'.$request->file('second_slider_image')->getClientOriginalExtension();
                $request->file('second_slider_image')->move('banner-images',$second_slider_image);
                if (file_exists("assets/frontend/images/banner-images/".urldecode(basename($request->input('prev_second_slider_image'))))) {
                        @unlink("assets/frontend/images/banner-images//".urldecode(basename($request->input('prev_second_slider_image'))));
                    }
            }else{
                $second_slider_image = basename($request->input('prev_second_slider_image'));
            }
            if($request->file('third_slider_image')){
                $third_slider_image = 'slider_img_3_'.uniqid().'_'.uniqid().'.'.$request->file('third_slider_image')->getClientOriginalExtension();
                $request->file('third_slider_image')->move('banner-images',$third_slider_image);
                if (file_exists("assets/frontend/images/images/banner-images/".urldecode(basename($request->input('prev_third_slider_image'))))) {
                        @unlink("assets/frontend/images/banner-images/".urldecode(basename($request->input('prev_third_slider_image'))));
                    }
            }else{
                $third_slider_image = basename($request->input('prev_third_slider_image'));
            }
            $section_data[] = array(
                        'section_id' => $request->input('section'),
                        'back_image' => $first_slider_image,
                        'back_color' => $second_slider_image,
                        'font_color' => $third_slider_image,
                    );
        }else{
            if($back_image_file){
                $back_image_name = 'section_img_'.uniqid().'_'.$back_image_file->getClientOriginalName();
                $back_image_file->move('assets/frontend/images/uploads',$back_image_name);
                if($prev_back_image_name != 'assets/frontend/images/uploads'){
                    if(trim($prev_back_image_name)!=''){
                        if (file_exists("assets/frontend/uploads/".urldecode($prev_back_image_name))) {
                            @unlink("assets/frontend/images/uploads/".urldecode($prev_back_image_name));
                        }
                    }
                }
                // unlink($prev_back_image_path);
                $section_data[] = array(
                        'section_id' => $request->input('section'),
                        'back_image' => $back_image_name,
                        'title_logo' => $request->input('title_viewer'),
                        'back_color' => $request->input('back_color'),
                        'font_color' => $request->input('font_color'),
                        'is_show_image' => $request->input('back_image_viewer'),
                        'is_show_color' => $request->input('background_color_viewer'),
                        'height' => $request->input('height'),
                        'width' => $request->input('width'),
                    );
            }else{
                $section_data[] = array(
                        'section_id' => $request->input('section'),
                        'back_color' => $request->input('back_color'),
                        'title_logo' => $request->input('title_viewer'),
                        'font_color' => $request->input('font_color'),
                        'is_show_image' => $request->input('back_image_viewer'),
                        'is_show_color' => $request->input('background_color_viewer'),
                        'height' => $request->input('height'),
                        'width' => $request->input('width'),
                    );
            }
        }
        $section_data_result = DB::table('template_settings')->where('id', $id)->where('company_id',$company_id)->update($section_data[0]);
        if($section_data_result){
            $request->session()->flash('alert-success', 'Section Updated Successfully!');
            return redirect()->back();
        }
        else{
            $request->session()->flash('alert-danger', 'Error on Updating Section');
            return redirect()->back();
            // return redirect()->back()->with('section_message' 'Error on creating new section');
        }
        
    }
      /**
     * Gold Supplier create function.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function create($form_id)
    {
        //
        if(Sentinel::check())
        {
            $user_id =Sentinel::getUser()->id;
            $company =Company::where('user_id',$user_id)->first(['id']);
            $id=$company->id;
            $today =Carbon::now();
            $membership_info=SupplierInfo::where('end_date','>=',$today)->where('company_id',$id)->latest()->first();
            // dd($membership_info->membership_pakacge_id);
            if($membership_info){
                if(($membership_info->membership_pakacge_id) ==1)
                {
                    session()->flash('up_msg', 'You already gold member!!!');
                    return redirect()->route('dashboard')->withFlashMessage('You already gold member.');
                    }
                
                else if(($membership_info->membership_pakacge_id) ==2 || 3){
                    session()->flash('up_msg', 'Upgrade it to superior!!!');
                }   
                }       
                $golds=Company::with(['country','users','customers'])->where('id', $id)->first();
            // dd($golds);
            $suppliers=SupplierPackage::with('descriptions')->get();
            //return $suppliers;
            $supplier_memberships=SupplierPackage::with('descriptions')->get();

            return view('frontend.suppliers.goldsupplier-create',['golds'=>$golds,'suppliers'=>$suppliers,'form_id'=>$form_id,'supplier_memberships'=>$supplier_memberships,'company_id'=>$id]);  
            
        }
        else{
            return redirect()->route('login')->withFlashMessage('You must first login or register before accessing this page.');
        }
        
    }
     public function store_data(Request $request)
    {
        if(!Sentinel::getUser()){
            return redirect()->route('login')->withFlashMessage('You must first login or register before accessing this page.');
        }
        $rules = array(
            'payment_method'         => 'required',
            'membership_duration'    => 'required',                       
            'company_id'             => 'required',    
            'supplier_package_name'  => 'required',
            'membership_id'          => 'required',
            'amount'          => 'required'           
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return 2;
        }
        $amount=$request->input('amount');
        if($request->input('payment_method')=='VISA'){
            $tokensource = $request->stripeToken;
            $payment = $this->StripePayment($tokensource,$amount);
        }
        // $year = $request->input('membership_duration');
        // $bdtdc_suppliers_info_insert = array(
        //     'company_id' => $request->input('company_id'),
        //     'member_id' => $request->input('membership_id'),
        //     'membership_pakacge_id' => $request->input('supplier_package_name'),
        //     'membership_year' => $request->input('membership_duration'),
        //     'start_date' => date("Y-m-d H:i:s"),
        //     'end_date' => date('Y-m-d H:i:s', strtotime('+'.$year.' year')),
        //     );
        // if(DB::table('bdtdc_suppliers_info')->insert($bdtdc_suppliers_info_insert))
        // {
        //     return 1;
        // }else{
            return 0;
        
    }
     public function StripePayment($tokensource,$amount){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $amount,
                "currency" => "usd",
                "source" => $tokensource,
                "description" => "Test payment from buyerseller.asia." 
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function product_create(){
        $countries = DB::select('select * from country_list');
        $user_id = Sentinel::getUser()->id;
        $company=Company::where('user_id',$user_id)->first();
        $company_id=$company->id;
        $data['product_groups']=DB::table('supplier_product_groups')->where('company_id',$company_id)->get();
        //dd($product_groups);
        foreach($countries as $country){
            $country_data[$country->id]=$country->name;
        }
        $data['modules']=array();
      

        $data['categorys']=array();
        $categorys=DB::table('categories')
            ->where('parent_id','0')
            ->get();
        foreach ($categorys as $category) {

            $category_children_data = array();


            $category_childrens = DB::table('categories')
                ->where('parent_id',$category->id)
                ->get();
            
            foreach ($category_childrens as $category_children) {
                
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
        $units = ProductUnit::all();
        $country = Country::where('region_id','!=',1)->get();
        $language = Language::get(['name','language_id']);

        return view('fontend.supplier.product_create',$data, array('country'=>$country, 'units'=> $units));
    }
    public function update_group(Request $request,$id)
    {
        /*$rules = array(
            'name'              => 'required',                       
            'image'             => 'required'         
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('product/manage_product_group')
                        ->withErrors($validator);
                        
        }else{*/

        $user_id =Sentinel::getUser()->id;
      $company=Company::where('user_id',$user_id)->first(['id']);
      $company_id=$company->id;
        $old_group = SupplierProductGroups::where('id',$id)->where('company_id',$company_id)->first();
        // dd($request->all());
        if($old_group){
            // $update = BdtdcSupplierProductGroups::all();
          // $update = BdtdcSupplierProductGroups::findOrFail($id);

          $image = $request->file('image');
          if($image){
          $destinationPath = 'banner-images';
              $image_name = 'banner-images_'.uniqid().'_'.$image->getClientOriginalName();
              $image->move($destinationPath,$image_name);
            // $image = $request->file('image');
          }



        if($image){

          if($old_group->image != ''){
            if(file_exists('assets/frontend/images/banner-images/'.$old_group->image)){
                @unlink('assets/frontend/images/banner-images/'.$old_group->image);
            }}
            $update_data = array
            (
                'name' => $request->name,
                'image' => $image_name,
                'show_banner' => $request->show_image?1:0,
                'sort' => $request->sort,
                'active' => $request->active_group?1:0,
            );
          }
          else{
            $update_data = array
            (
                'name' => $request->name,
                'show_banner' => $request->show_image?1:0,
                'sort' => $request->sort,
                'active' => $request->active_group?1:0,
            );
          }
            // dd($update_data);
            DB::table('supplier_product_groups')->where('id', $old_group->id)->update($update_data);
            
            return Redirect::to('product/manage_product_group');
        }else{
            return Redirect::to('product/manage_product_group')->with("Permision Denied.");
        }
      /*}*/
    }

    public function delete_group($id)
    {
        $user_id =Sentinel::getUser()->id;
        $company=Company::where('user_id',$user_id)->first(['id']);
        $company_id=$company->id;
        $old_group = SupplierProductGroups::where('id',$id)->where('company_id',$company_id)->first();
        if($old_group){
            $make_inactive=SupplierProductGroups::where('company_id',$company_id)->where('id',$id)->update(['active'=>0]);
            if($make_inactive){
                return Redirect::to('product/manage_product_group');
            }else{
                return Redirect::to('product/manage_product_group')->with("Unkonwn Error Occured.");
            }
            return Redirect::to('product/manage_product_group');
        }else{
            return Redirect::to('product/manage_product_group')->with("Permision Denied.");
        }
    }

     public function product_manage_roup_insert(Request $request)
    {
      /***insert query***/
        if(Sentinel::getUser()){
      }else{
        return redirect()->route('login')->withFlashMessage('You must first login or register before accessing this page.');
      }
     
      $rules = array(
            'name'              => 'required',                       
            'image'             => 'required'         
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('product/manage_product_group')
                        ->withErrors($validator);
                        
        }else{
         


      // return $request->all();
      $input = $request->only(['name','image','company_id']);
      $user_id =Sentinel::getUser()->id;
      $company=Company::where('user_id',$user_id)->first(['id']);
      $company_id=$company->id;
        // dd($company_id);

      $image = $request->file('image');
              if($image){
              $destinationPath = 'assets/frontend/images/banner-images';
                  $image_name = 'banner-images_'.uniqid().'_'.$image->getClientOriginalName();
                  $image->move($destinationPath,$image_name);
              }else{
                  $image_name = '';
              }
              // dd($image);
        $insert_data=array();
        $insert_data = array
        (
            'name'=>$input['name'], 
            'image'=>$image_name,
            'company_id'=>$company_id,
        );
        // dd($insert_data);
        $group= DB::table('supplier_product_groups')->insert($insert_data);
        // dd($group);
        /***insert query***/
        // counting

        return Redirect::back();
      }
       
        // return view::make('contents_view.product-manage-roup',compact('gr'));
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
