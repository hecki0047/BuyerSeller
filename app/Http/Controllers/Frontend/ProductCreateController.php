<?php

namespace App\Http\Controllers\Frontend;



use URL;
use Input;
use View;
use Sentinel;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\ValidationController;

use App\Models\InqueryFlag;
use App\Models\InquerySpam;
use App\Models\InqueryTrush;
use App\Models\SupplierQuery;
use App\Models\Country;
use App\Models\Language;
use App\Models\Attribute;
use App\Models\Company;
use App\Models\CompanyDescription;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductUnit;
use App\Models\SupplierMainProduct;
use App\Models\SupplierProduct;
use App\Models\SupplierProductGroup;
use App\Models\User;
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
Use App\Models\Order;
Use App\Models\OrderDetail;


class ProductCreateController extends Controller
{
    public function index($section=false){
        if(Sentinel::check())
        {
        $user_id = Sentinel::getUser()->id;
        $company=Company::where('user_id',$user_id)->first();
        $company_id=$company->id;
        $role = Role_user::where('user_id',$user_id)->first();
        $p_name='ssad';
        $messages='ssadsad';


        // SELECT `id`, `oder_id`, `product_name`, `product_id`, `product_image`, `quantity`, `unit_id`, `unit_price`, `created_at`, `updated_at` FROM `bdtdc_order_details` WHERE 1
        // SELECT `id`, `inquery_id`, `product_id`, `messages`, `quantity`, `unit_type_id`, `unit_price`, `sender`, `product_owner_id`, `total`, `status`, `is_quote`, `is_msg`, `is_view`, `waiting_status`, `process_status`, `updated_at`, `created_at` FROM `bdtdc_order` WHERE 1



        DB::beginTransaction();

            try {
                // Validate, then create if valid
                $newAcct = Order::create(  );
            } catch(ValidationException $e)
            {
                // Rollback and then redirect
                // back to form with errors
                DB::rollback();
                return Redirect::to('/form')
                    ->withErrors( $e->getErrors() )
                    ->withInput();
            } catch(\Exception $e)
            {
                DB::rollback();
                throw $e;
            }

            try {
                // Validate, then create if valid
                $newUser = OrderDetail::create([
                    'product_name' => $p_name,
                ]);
            } catch(ValidationException $e)
            {
                // Rollback and then redirect
                // back to form with errors
                DB::rollback();
                return Redirect::to('/form')
                    ->withErrors( $e->getErrors() )
                    ->withInput();
            } catch(\Exception $e)
            {
                DB::rollback();
                throw $e;
            }

            // If we reach here, then
            // data is valid and working.
            // Commit the queries!
            DB::commit();
       
         }
         else
            return Redirect::to('ServiceLogin?continue='.URL::to($_SERVER['SCRIPT_URL']))->withFlashMessage('You must first login or register before accessing this page.');

    }

   

    public function store(Request $r){

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

        Company::where('user_id',$user_id)->update($insert_arr_data);

        for($i=0,$len=count($r->get('product_name'));$i<$len;$i++){
            $arr[$i]['supplier_id']     = $user_id;
            $arr[$i]['product_name']    = $r->get('product_name')[$i];
            SupplierMainProduct::create($arr[$i]);
        }


        return Redirect::back()->with('update_msg','Information Saved!');


        return $insert_arr_data;

    }
    public function post_personal_info(ValidationController $r){
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
        $company=Company::where('user_id',$user_id)->first();
        $company_id=$company->id;
        $company_logo_old = "no_image.jpg";
        $company_description = CompanyDescription::where('company_id',$company_id)->first();
        if($company_description->company_logo){
            $company_logo_old = $company_description->company_logo;
        }
        $profile_pic_old = Users::where('id',$user_id)->first(['profile_picture'])->profile_picture;
        
        // $company_logo = User::find($user_id)->company->company_description->company_logo;
        //return $profile_pic;
        if($r->file('profile_picture')){
            $string     = "profile_pic_".str_random(10);
            $temp_file  = $_FILES['profile_picture']['tmp_name'];
            $ext        = pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION);
            $profile_pic    = $string.'.'.$ext;
            if(move_uploaded_file($temp_file,'uploads/'.$profile_pic)){
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
                // $profile_pic = "no_image.jpg";
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
        // dd($update_personal_info);
        // User::find($user_id)->update($update_personal_info);
        Users::where('id',$user_id)->update($update_personal_info);

        
        // User::find($user_id)->company->company_description->update($company_logo_arr);


        return Redirect::back()->with('profile_update_msg','Profile saved!');

        //return $profile_pic . ', '. $company_logo;

    }

    public function product_create(){
        $countries = DB::select('select * from country_list');
        //dd($countries);
        $user_id = Sentinel::getUser()->id;
        $company=Company::where('user_id',$user_id)->first();
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
        // echo "<pre>";
        // print_r(DB::table('bdtdc_limited_lime_offers')->get());
        // echo "</pre>";
        //return $country;
        return view('frontend.supplier.product_create',$data, array('country'=>$country, 'units'=> $units));
    }



    public function post_product_create(Request $request){
        if(Sentinel::getUser()){
            $validator = Validator::make($request->all(), [
                'product_name' => 'required|max:10000',
                'parent_category' => 'required|integer|max:10000000',
                'sub_category' => 'required|integer|max:10000000',
                'product_meta_keywords' => 'required|max:10000',
                'product_model' => 'required|max:1000',
                'brand_name' => 'required|max:1000',
                'country' => 'required|integer|not_in:0|max:10000000',
                'processing_time' => 'required|integer|max:10000',
                'port' => 'required|max:10000',
                'supply_ability' => 'required|integer|max:10000000',
                'product_groups' => 'required|max:10000000',
                'packages_delivery' => 'required|max:10000',
                'product_description' => 'required|max:10000000',
                'others_payment' => 'max:1000',
                'unit_type' => 'max:10000000|integer',
                'p_image' => 'required',
            ],['p_image'=>'At least one product image is required']);

            if ($validator->fails()) {
                return $validator->errors()->all();
            }else{}
            if($request->is_limited_time_offer == true){
                $validator = Validator::make($request->all(), [
                    'percentage' => 'required|numeric|max:100|min:0',
                    'offer_from' => 'required|date',
                    'offer_to' => 'required|date',
                ]);
                if ($validator->fails()) {
                    return $validator->errors()->all();
                }
            }else{}
            $attr_val_loop = count($request->product_att_name);
            for ($i=0; $i < $attr_val_loop+1; $i++) {
                $validator = Validator::make($request->all(), [
                    'product_att_name.'.$i => 'max:1000',
                    'product_att_value.'.$i => 'max:2000',
                    ]);
                if ($validator->fails()) {
                    return $validator->errors()->all();
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
                        return $validator->errors()->all();
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
                    return $validator->errors()->all();
                }
            }
            $payment_loop = count($request->payment);
            for ($k=0; $k < $payment_loop+1; $k++) {
                $validator = Validator::make($request->all(), [
                    'payment.'.$k => 'max:1000',
                    ]);
                if ($validator->fails()) {
                    return $validator->errors()->all();
                }
            }
            
            $user_id = Sentinel::getUser()->id;
            $company=Company::where('user_id',$user_id)->first();
            $company_id=$company->id;
            $response_to_client = [];
            $payment_array = $request->payment;
            if($payment_array){
                if (in_array("others", $payment_array)) {
                    $key = array_search('others', $payment_array);
                    $payment_array[$key] = $request->others_payment;
                }
            }
            DB::beginTransaction();
            try {
               
                //dd($file_name);
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

                // print_r($bdtdc_product_array_insert);
                //return $insert_data;
                $product_details_id = DB::table('bdtdc_product')->insertGetId( $bdtdc_product_array_insert );
                // $product_details_id = 10;
                $response_to_client['model'] = $request->product_model;
                $response_to_client['brandname'] = $request->brand_name;
                $response_to_client['product_id'] = $product_details_id;
            }
            catch(ValidationException $e){
                DB::rollback();
            }

            try{

                $bdtdc_product_description_array = [
                    'product_id' => $product_details_id,
                    'name'       => $request->product_name,
                    'description' => $request->product_description,
                    'meta_keyword' => $request->product_meta_keywords,
                    'tag' => $request->product_meta_tag,
                ];
                // return $bdtdc_product_description_array;
                $product_description = DB::table('product_description')->insertGetId($bdtdc_product_description_array);
                $response_to_client['product_name'] = $request->product_name;
            }
            catch(ValidationException $e){
                DB::rollback();
            }

            try{

                $bdtdc_product_to_category_data = [
                    'product_id' => $product_details_id,
                    'category_id'   => $request->sub_category,
                    'parent_id'   => $request->parent_category,
                    'company_id'   => $company_id,
                    'country_id'   => $request->country,
                ];
                // return $bdtdc_product_to_category_data;
                
                $product_description = DB::table('product_to_category')->insert($bdtdc_product_to_category_data);
                if($request->is_wholesale_product == true){
                    $bdtdc_product_to_wholesale_category_data = [
                        'product_id' => $product_details_id,
                        'category_id'   => $request->sub_category,
                        'parent_id'   => $request->parent_category,
                        'company_id'   => $company_id,
                        'country_id'   => $request->country,
                    ];
                    // print_r($bdtdc_product_to_wholesale_category_data);
                    $product_description = DB::table('product_to_wholesale_category')->insert($bdtdc_product_to_wholesale_category_data);
                }

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
                    // print_r($bdtdc_limited_lime_offers_data);
                    $product_description = DB::table('limited_lime_offers')->insert($bdtdc_limited_lime_offers_data);
                }
                
                $response_to_client['category'] = Category::where('id',$request->sub_category)->first(['name'])->name;
            }
            catch(ValidationException $e){
                DB::rollback();
            }

            try{

                $bdtdc_logistic_infos_array = [
                    'product_id' => $product_details_id,
                    'processing_time'   => $request->processing_time,
                    'port' => $request->port,
                    'supply_ability' => $request->supply_ability,
                ];
                // print_r ($bdtdc_logistic_infos_array);
                $product_description = DB::table('logistic_infos')->insertGetId($bdtdc_logistic_infos_array);

            }
            catch(ValidationException $e){
                DB::rollback();
            }

            try{
                $attributes_details =[];
                $prev_attr_name_exists = [];
                for($i=0,$len=count($request->get('product_att_name'));$i<$len;$i++){
                    if($request->get('product_att_name')[$i] != ""){
                        if(in_array($request->get('product_att_name')[$i], $prev_attr_name_exists)){}else{
                            $input_arr[$i]['name'] = $request->get('product_att_name')[$i];
                            $input_arr[$i]['value'] = $request->get('product_att_value')[$i];
                            // print_r($input_arr[$i]);
                            $attributes_details[] = DB::table('bdtdc_attributes')->insertGetId($input_arr[$i]);
                            array_push($prev_attr_name_exists, $request->get('product_att_name')[$i]);
                        }
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
                    $attributes_details = array_reverse($attributes_details);
                    foreach($attributes_details as $data){
                        $product_attribute = array(
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
                if($request->base == 'based_FOB'){
                    if($request->product_MOQ_FOB != ""){
                        $input_price['product_id']  = $product_details_id; 
                        $input_price['currency'] = $request->currencies;
                        $input_price['product_MOQ'] = $request->product_MOQ_FOB;
                        $input_price['product_FOB'] = $request->currency_from.'-'.$request->currency_to;
                        $input_price['discounted_price'] = $request->discounted_price;
                        // print_r($input_price[$i]);
                        DB::table('product_prices')->insert($input_price);
                    }
                }else{
                    for($i=0,$len=count($request->product_MOQ);$i<$len;$i++){
                        if($i==0){
                            $input_price[$i]['product_id']  = $product_details_id; 
                            $input_price[$i]['product_MOQ'] = $request->product_MOQ[$i];
                            $input_price[$i]['product_FOB'] = $request->product_FOB_from[$i].'-'.$request->product_FOB_to[$i];
                            // print_r($input_price[$i]);
                            DB::table('bdtdc_product_prices')->insert($input_price[$i]);
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
                //return $input_price;
            }
            catch(ValidationException $e){
                DB::rollback();
            }

            try{
                if($request->p_image){
                    $img_arr = [];
                    for($i=0,$len=count($request->p_image);$i<$len;$i++){
                        $p_image_array = explode('_', $request->p_image[$i]);
                        if($p_image_array[1] ==  $request->parent_category && $p_image_array[2] == $request->sub_category){
                            $img_arr[$i]['image']       = $request->p_image[$i];
                            $img_arr[$i]['product_id']  = $product_details_id;
                            BdtdcProductImageNew::create($img_arr[$i]);
                        }else{
                            $prev_parent_cat_name = Category::where('id',$p_image_array[1])->first(['name','id']);
                            $prev_sub_cat_name = Category::where('id',$p_image_array[2])->first(['name','id']);
                            $new_parent_cat_name = Category::where('id',$request->parent_category)->first(['name','id']);
                            $new_sub_cat_name = Category::where('id',$request->sub_category)->first(['name','id']);
                            $oldFileName = 'assets/frontend/images/product-image/'.trim($prev_parent_cat_name->name).'/'.trim($prev_sub_cat_name->name).'/'.$request->p_image[$i];
                            $ext = pathinfo($oldFileName, PATHINFO_EXTENSION);
                            $string   = preg_replace('/[^A-Za-z0-9]/ ', '-',$request->product_name).'_'.$request->parent_category."_".$request->sub_category."_".str_random(10);
                            $product_photo  = $string.'.'.$ext;
                            $directoryName = 'assets/frontend/images/product-image/'.trim($new_parent_cat_name->name).'/'.trim($new_sub_cat_name->name);
                            //Check if the directory already exists.
                            if(!is_dir($directoryName)){
                                //Directory does not exist, so lets create it.
                                //true for nested directory (need 0777 permission for this)
                                mkdir($directoryName, 0777, true);
                            }
                            $newFileName = 'assets/frontend/images/product-image/'.trim($new_parent_cat_name->name).'/'.trim($new_sub_cat_name->name).'/'.$product_photo;
                            rename($oldFileName, $newFileName);
                            $img_arr[$i]['image']       = $product_photo;
                            $img_arr[$i]['product_id']  = $product_details_id;
                            ProductImageNew::create($img_arr[$i]);
                        }
                    }
                }
                if($request->deleted_p_image){
                    $p_image_loop = count($request->deleted_p_image);
                    for ($dpi=0; $dpi < $p_image_loop; $dpi++) {
                        if(file_exists("assets/frontend/images/uploads/".$request->deleted_p_image[$dpi])){
                             (unlink("assets/frontend/images/uploads/".$request->deleted_p_image[$dpi])) ? 'deleted!!' : 'was not able to deleted';
                        }else{
                            $parent_cat_name = Category::where('id',$request->parent_category)->first();
                            $sub_cat_name = Category::where('id',$request->sub_category)->first();
                            if($parent_cat_name && $sub_cat_name){
                                $fileName = 'assets/frontend/images/product-image/'.trim($parent_cat_name->name).'/'.trim($sub_cat_name->name).'/'.$request->deleted_p_image[$dpi];
                                if(file_exists($fileName)){
                                    (unlink($fileName)) ? 'deleted!!' : 'was not able to deleted';
                                }else{
                                    $img_array = explode('_', $request->deleted_p_image[$dpi]);
                                    $parent_cat_name = Category::where('id',$img_array[1])->first(['name','id']);
                                    $sub_cat_name = Category::where('id',$img_array[2])->first(['name','id']);
                                    //The name of the directory that we need to create.
                                    $fileName = 'assets/frontend/images/product-image/'.trim($parent_cat_name->name).'/'.trim($sub_cat_name->name).'/'.$request->deleted_p_image[$dpi];
                                    if(file_exists($fileName)){
                                         (unlink($fileName)) ? 'deleted!!' : 'was not able to deleted';
                                    }
                                }
                            }
                        }
                        
                        
                        // if(file_exists("uploads/".$request->deleted_p_image[$dpi])){
                        //      (unlink("uploads/".$request->deleted_p_image[$dpi])) ? 'deleted!!' : 'was not able to deleted';
                        // }else{
                            /*$img_array = explode('_', $request->deleted_p_image[$dpi]);
                            $parent_cat_name = BdtdcCategory::where('id',$img_array[1])->get(['name','id']);
                            $sub_cat_name = BdtdcCategory::where('id',$img_array[2])->get(['name','id']);
                            //The name of the directory that we need to create.
                            $fileName = 'bdtdc-product-image/'.trim($parent_cat_name[0]->name).'/'.trim($sub_cat_name[0]->name).'/'.$request->deleted_p_image[$dpi];
                            if(file_exists($fileName)){
                                 (unlink($fileName)) ? 'deleted!!' : 'was not able to deleted';
                            }*/
                        // }
                        // if($request->deleted_p_image_id[$dpi] == 0){

                        // }else{
                        //     DB::table('bdtdc_product_image')->where('id',$request->deleted_p_image_id[$dpi])->delete();
                        //     DB::table('bdtdc_product_images')->where('id',$request->deleted_p_image_id[$dpi])->delete();
                        // }
                    }
                }
                
            }
            catch(ValidationException $e){
                DB::rollback();
            }

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
            $response_to_client['success'] = true;
            return $response_to_client;

        }else{
            return redirect('login')->withFlashMessage('Please sign in first.');
        }
    }

  
}
