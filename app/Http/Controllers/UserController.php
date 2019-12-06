<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PagesSeo;
use App\Models\PagesPrefix;
use Sentinel;
use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;
use Redirect;
use URL;
use DB;
use Validator;
use view;
use Mail;
use Route;
use Input;
use App\Models\TempUser;
use App\Models\Users;
use App\Models\Subscription;
use App\Models\PageSeo;
use App\Models\UserregistrationStep;
use App\Models\Role_user;
use App\Http\Requests\LoginFormRequest;


class UserController extends Controller
{   
     public function gratings(){
        $page_content_title=" ";
        return view('frontend.gratings',['page_content_title'=>$page_content_title]);
    }

     public function post_company_info(Request $r){
        // dd(133);
        if(Sentinel::check())
        {
            if($r->submitted_form == "basic_info"){
                $data = $this->submit_basic_info($r);
                echo json_encode($data);
            }
            elseif($r->submitted_form == "trade_info"){
                $data = $this->submit_trade_info($r);
                echo json_encode($data);
            }
            elseif($r->submitted_form == "factory_info"){
                $data = $this->submit_factory_info($r);
                echo json_encode($data);
            }
            elseif($r->submitted_form == "company_introduction_info"){
                $ids=(\Sentinel::getUser()) ? \Sentinel::getUser()->id : null;
                $company_ids= (Company::where('user_id',$ids)) ? Company::where('user_id',$ids)->first(['id']) : null;

                $data = [];
                $rules=array(
                    'company_introduction' => 'nullable|string',
                    'company_services' => 'nullable|string',
                    'company_faq' => 'nullable|string',
                );

                $validator = Validator::make($r->all(), $rules);
                if ($validator->fails())
                {
                    $data['status'] = 0;
                    $data['error'] = $validator->errors()->all();
                }else{
                    CompanyDescription::where('company_id',$company_ids->id)->update(['description'=>$r->company_introduction,'service'=>$r->company_services,'faq'=>$r->company_faq]);
                    $data['status'] = 1;
                }
                $data['info_type'] = 3;
                echo json_encode($data);
            }
        }
    }
    public function delete_company_logo(Request $r){
        $ids=(\Sentinel::getUser()) ? \Sentinel::getUser()->id : null;
         $company_ids= (BdtdcCompany::where('user_id',$ids)) ? BdtdcCompany::where('user_id',$ids)->first(['id']) : null;
        $data = [];
        if(Sentinel::check())
        {}else{
            $data[0] = 0;//Please login first
            $data[1] = 'Please login first';
            return $data;
        }
        $user_data = User::where('id',$ids)->with('companies.company_description')->first();
        if($user_data){
            if($user_data->companies){
                if($user_data->companies->company_description){
                    $company_logo_old = $user_data->companies->company_description->company_logo;

                    $company_logo_arr = ['company_logo'=>''];
                    $delete_result = Users::find($ids)->companies->company_description->update($company_logo_arr);
                    if($delete_result){
                        if($company_logo_old != ''){
                            $file_location_old = 'assets/frontend/images/uploads/'.$company_logo_old;
                            if (file_exists($file_location_old)) {
                                @unlink($file_location_old);
                            }
                        }
                        $data[0] = 1; //Please login first
                        $data[1] = 'Company Logo deleted Successfully';
                        return $data;
                    }else{
                        $data[0] = 0; //Please login first
                        $data[1] = 'Unable to delete Company Logo';
                        return $data;
                    }
                }else{
                    $data[0] = 0; //Please login first
                    $data[1] = 'Unable to delete Company Logo';
                    return $data;
                }
            }else{
                $data[0] = 0; //Please login first
                $data[1] = 'Unable to delete Company Logo';
                return $data;
            }
        }else{
            $data[0] = 0; //Please login first
            $data[1] = 'Unable to delete Company Logo';
            return $data;
        }
    }
     public function post_company_logo(Request $r){
        $data = [];
        $ch=Sentinel::check();
        $ids=(Sentinel::getUser()) ? Sentinel::getUser()->id : null;
         $company_ids= (Company::where('user_id',$ids)) ? Company::where('user_id',$ids)->first(['id']) : null;
         
        
        if(Sentinel::check())
        {}else{
            $data[0] = 0;//Please login first
            $data[1] = 'Please login first';
            return $data;
        }
        $user_data = Users::where('id',$ids)->with('companies.company_description')->first();
        if($user_data){
            if($user_data->companies){
                // $profile_pic = User::where('id',$ids)->first(['profile_picture'])->profile_picture;
                $profile_pic = $user_data->profile_picture;
                // $company_logo = User::find($ids)->companies->company_description->company_logo;
                if($user_data->companies->company_description){
                    if($user_data->companies->company_description->company_logo){
                        $company_logo_old = $user_data->companies->company_description->company_logo;
                    }else{$company_logo_old = '';}
                }else{$company_logo_old = '';}
                
                if($r->file('image')){
                    $validator = Validator::make($r->all(), [
                        'image' => 'mimes:jpeg,jpg,png|max:200',
                    ]);

                    if ($validator->fails()) {
                        $err_text = '';
                        foreach ($validator->errors()->all() as $value) {
                            $err_text .= $value.' ';
                        }
                        $data[0] = 0;//invalid data
                        $data[1] = $err_text;
                        return $data;
                    }

                    $string     = "company_logo_".str_random(10);
                    $temp_file  = $_FILES['image']['tmp_name'];
                    $ext        = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    $company_logo   = $string.'.'.$ext;

                    /*if(move_uploaded_file($temp_file,'uploads/'.$company_logo)){
                        $data['img_msg'] = "Image uploaded";
                        if($company_logo_old != ''){
                            $file_location_old = 'uploads/'.$company_logo_old;
                            if (file_exists($file_location_old)) {
                                unlink($file_location_old);
                            }
                        }
                    }*/

                    $picture = $_FILES['image'];
                    $pic_type = strtolower(strrchr($picture['name'],"."));
                    $pic_name = "assets/frontend/images/uploads/original$pic_type";
                    move_uploaded_file($picture['tmp_name'], $pic_name);
                    if (true !== ($pic_error = $this->image_resize($pic_name, "assets/frontend/images/uploads/$company_logo", 80, 55, 0))) {
                      unlink($pic_name);
                      $data[0] = 0;//invalid data
                      $data[1] = $pic_error;
                      return $data;
                    }
                    else{
                        if (file_exists($pic_name)) {
                            unlink($pic_name);
                        }
                        $data['img_msg'] = "Image uploaded";
                        if($company_logo_old != ''){
                            $file_location_old = 'assets/frontend/images/uploads/'.$company_logo_old;
                            if (file_exists($file_location_old)) {
                                unlink($file_location_old);
                            }
                        }
                    }

                    /*else{
                        $company_logo = "no_image.jpg";
                    }*/
                    $company_logo_arr = ['company_logo'=>$company_logo];
                    Users::find($ids)->companies->company_description->update($company_logo_arr);
                }
                $data[0] = 1;
                $data[1] = $company_logo;
                return $data;
            }else{
                $data[0] = 0;//Company not available, Please contact with Service Provider.
                $data[1] = 'Company not available, Please contact with Service Provider.';
                return $data;
            }
            
        }else{
            $data[0] = 0;//Please login first
            $data[1] = 'Please login first';
            return $data;
        }
        
    }
    public function ServiceLogin(Request $r){
        $page_content_title='Login';
        $return_url = $r->continue;
        $agent = new Agent();
        $device = $agent->device();
        if($agent->isPhone())
        {
           return view('frontend.mobile-view.service-login',['page_content_title'=>$page_content_title,'return_url'=>$return_url]);
        }
        if($agent->isDestop())
        {
           return view('frontend.desktop-view.service-login',['page_content_title'=>$page_content_title,'return_url'=>$return_url]);
        }

        if($agent->isTab())
        {
           return view('frontend.desktop-view.service-login',['page_content_title'=>$page_content_title,'return_url'=>$return_url]);
        }
        else{
          
           return view('frontend.desktop-view.service-login',['page_content_title'=>$page_content_title,'return_url'=>$return_url]);
        }
    }

    public function ServiceStore(LoginFormRequest $request){
            $input = $request->only('email', 'password','continue');
           
            try {

                if (Sentinel::authenticate($input, $request->has('remember'))) {
                    $user_id = Sentinel::getUser()->id;
                    Users::where('id',$user_id)->update(['active'=>1]);
                    Users::where('id',$user_id)->update(['vacation_mode'=>1]);
                    return redirect($request->continue);
                }

                return redirect()->back()->withInput()->withErrorMessage('Invalid credentials provided');

            } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {
                return redirect()->back()->withInput()->withErrorMessage('User Not 9.');
            } catch (\Cartalyst\Sentinel\Checkpoints\ThrottlingException $e) {
                return redirect()->back()->withInput()->withErrorMessage($e->getMessage());
            }

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function join(){
        $header= PagesSeo::where('page_id',146)->first();

        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        $data['step_location'] = '';
        $page_content_title=" ";

         $agent = new Agent();
        $device = $agent->device();

        if($agent->isPhone()){

          return view('frontend.mobile-view.custom-register',$data,['page_content_title'=>$page_content_title]);
        }
        if($agent->isDestop())
        {
           return view('frontend.desktop-view.custom-register',$data,['page_content_title'=>$page_content_title]);
        }

        if($agent->isTab())
        {
           return view('frontend.desktop-view.custom-register',$data,['page_content_title'=>$page_content_title]);
        }
        else{
          
           return view('frontend.desktop-view.custom-register',$data,['page_content_title'=>$page_content_title]);
        }

    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login($return_url=null)
    {
        
        if(Sentinel::check()){
            return redirect('/');
        }
        $header=PagesSeo::where('page_id',147)->first();
        $data['title']=$header->title;
        $data['keyword']=$header->meta_keyword;
        $data['description']=$header->meta_description;
        if($return_url==null){
        $page_content_title='Login';
         $agent = new Agent();
        $device = $agent->device();

       if($agent->isPhone())
        {
            return View::make('frontend.mobile-view.custom-login',$data,['page_content_title'=>$page_content_title]);
           
        }
        if($agent->isDestop())
        {
               return view('frontend.desktop-view.custom-login',$data,['page_content_title'=>$page_content_title]);
        }

        if($agent->isTab())
        {
               return view('frontend.desktop-view.custom-login',$data,['page_content_title'=>$page_content_title]);
        }
        else{
          
             return view('frontend.desktop-view.custom-login',$data,['page_content_title'=>$page_content_title]);
        }

    } else{
                $page_content_title='Login';
                return view('sessions.create',$data,['page_content_title'=>$page_content_title,'return_url'=>$return_url]);
    }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function post_company_photo(Request $r){
           $ids=(\Sentinel::getUser()) ? \Sentinel::getUser()->id : null;
            $company_ids= (Company::where('user_id',$ids)) ? Company::where('user_id',$ids)->first(['id']) : null;

           $data = [];
           if(Sentinel::check())
           {}else{
               $data[0] = 0;//Please login first
               $data[1] = 'Please login first';
               return $data;
           }
           if($r->file('image')){

               $validator = Validator::make($r->all(), [
                   'image' => 'mimes:jpeg,jpg,png|max:300',
               ]);

               if ($validator->fails()) {
                   $err_text = '';
                   foreach ($validator->errors()->all() as $value) {
                       $err_text .= $value.' ';
                   }
                   $data[0] = 0;//invalid data
                   $data[1] = $err_text;
                   return $data;
               }

               $string  = "company_photo_".str_random(10);
               $temp_file   = $_FILES['image']['tmp_name'];
               $ext         = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
               $company_photo   = $string.'.'.$ext;

               $picture = $_FILES['image'];
               $pic_type = strtolower(strrchr($picture['name'],"."));
               $pic_name = "assets/frontend/images/uploads/original$pic_type";
               move_uploaded_file($picture['tmp_name'], $pic_name);
               if (true !== ($pic_error = $this->image_resize($pic_name, "assets/frontend/images/uploads/$company_photo", 225.52, 244, 0))) {
                 unlink($pic_name);
                 $data[0] = 0;//invalid data
                 $data[1] = $pic_error;
                 return $data;
               }else{
                   if (file_exists($pic_name)) {
                       unlink($pic_name);
                   }
                   $data['img_msg'] = "Image uploaded";
                   if($r->id_to_update !=0){
                       $company_old_photo = CompanyImage::where('id',$r->id_to_update)->where('company_id',$company_ids->id)->first();
                       $file_location_old = "assets/frontend/images/uploads/".$company_old_photo->image;
                       if (file_exists($file_location_old)) {
                           unlink($file_location_old);
                       }
                       CompanyImage::where('id',$r->id_to_update)->where('company_id',$company_ids->id)->update(['image'=>$company_photo]);
                       $data[0] = 1;//valid data
                       $data[1] = CompanyImage::where('id',$r->id_to_update)->first();
                       return $data;
                   }else{
                       $company_photo_arr = [
                           'image'=>$company_photo,
                           'company_id' => $company_ids->id,
                       ];
                       $new_img = CompanyImage::create($company_photo_arr);
                       $data[0] = 1;//valid data
                       $data[1] = $new_img;
                       return $data;
                   }
               }
           }
           
       }

       public function delete_company_photo(Request $r){
        $ids=(\Sentinel::getUser()) ? \Sentinel::getUser()->id : null;
         $company_ids= (Company::where('user_id',$ids)) ? Company::where('user_id',$ids)->first(['id']) : null;
        $data = [];
        if(Sentinel::check())
        {}else{
            $data[0] = 0;//Please login first
            $data[1] = 'Please login first';
            return $data;
        }

        if($r->id_to_delete !=0){
            $company_old_photo = CompanyImage::where('id',$r->id_to_delete)->where('company_id',$company_ids->id)->first();
            if($company_old_photo){
                $file_location_old = "assets/frontend/images/uploads/".$company_old_photo->image;
                $delete_result = CompanyImage::where('id',$r->id_to_delete)->where('company_id',$company_ids->id)->delete();
                if($delete_result){
                    if (file_exists($file_location_old)) {
                        @unlink($file_location_old);
                    }
                    $data[0] = 1;//valid data
                    $data[1] = 'Company Logo deleted Successfully';
                    return $data;
                }else{
                    return $delete_result;
                }
            }else{
                $data[0] = 0;//invalid data
                $data[1] = 'Unable to delete this logo';
                return $data;
            }
        }else{
            $data[0] = 0;//invalid data
            $data[1] = 'Unable to delete empty value';
            return $data;
        }
        
    }

    public function all_certification_image(Request $r){
        $ids=(\Sentinel::getUser()) ? \Sentinel::getUser()->id : null;
         $company_ids= (Company::where('user_id',$ids)) ? Company::where('user_id',$ids)->first(['id']) : null;
        $model = $r->model;
        $data = [];
        if(Sentinel::check())
        {}else{
            $data[0] = 0;//Please login first
            $data[1] = 'Please login first';
            return $data;
        }
        if($r->file('image')){

            $validator = Validator::make($r->all(), [
                'image' => 'mimes:jpeg,png|max:300',
            ]);

            if ($validator->fails()) {
                $err_text = '';
                foreach ($validator->errors()->all() as $value) {
                    $err_text .= $value.' ';
                }
                $data[0] = 0;//invalid data
                $data[1] = $err_text;
                return $data;
            }

            $string     = "certification_".str_random(10);
            $temp_file  = $_FILES['image']['tmp_name'];
            $ext        = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $company_photo  = $string.'.'.$ext;
            if(count($model::where('company_id',$company_ids->id)->get()) < 3){
                if(move_uploaded_file($temp_file,'assets/frontend/images/uploads/'.$company_photo)){
                    $company_photo_arr = [
                        'image'=>$company_photo,
                        'company_id' => $company_ids->id,
                    ];
                    $new_img = $model::create($company_photo_arr);
                    $data[0] = 1;//valid data
                    $data[1] = $new_img;
                    return $data;
                }
            }else{
                $data[0] = 0;//valid data
                $data[1] = "Limit exceeded. Only 3 files are alowed";
                return $data;
            }
        }
    }

    public function post_certification_info(Request $r){
        if(Sentinel::check())
        {
        if($r->submitted_form == "add_certification"){
           return $this->add_certification($r); 
        }
        if($r->submitted_form == "add_awards"){
           return $this->add_awards($r); 
        }
        if($r->submitted_form == "add_patents"){
           return $this->add_patents($r);
        }
        if($r->submitted_form == "add_trademarks"){
           return $this->add_trademarks($r);
        }
        }
    }
    public function get_name_by_type($id){
        return FormValue::where('keyword_id',$id)->get();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $input = $request->only('email', 'password');
        try {
            if (Sentinel::authenticate($input)
               ) {
                $user = Sentinel::getUser();
                $user_id = $user->id;
                
                Users::where('id',$user_id)->update(['active'=>1]);
                Users::where('id',$user_id)->update(['vacation_mode'=>1]);
                $role = Role_user::where('user_id',$user_id)->first();
                if(!$role){
                    $temp_user = TempUser::where('email',$user->email)->orderBy('id','desc')->first();
                    if($temp_user){
                        return Redirect::to(URL::to('email/verification_by_key/'.$temp_user->rand_key.'?old_key=true'));
                        return Redirect::to('email/verification_by_key/'.$temp_user->rand_key.'?old_key=true');
                    }else{
                        return redirect('join');
                    }
                }
                $this->redirectWhenLoggedIn();
            }   
          

            return redirect()->back()->withInput()->withErrorMessage('Invalid credentials provided');

        } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {
            return redirect()->back()->withInput()->withErrorMessage('User Not');
        } catch (\Cartalyst\Sentinel\Checkpoints\ThrottlingException $e) {
            return redirect()->back()->withInput()->withErrorMessage($e->getMessage());
        }


    }
     protected function redirectWhenLoggedIn($return_url=null)
    {
        
        $rr=preg_replace('/[^A-Za-z0-9\. -]/', '/',$return_url);
        
        $user = Sentinel::getUser();
        $id=$user->id;
        $admin = Sentinel::findRoleByName('Admins');
        $users = Sentinel::findRoleByName('Users');
        $suppliers=Sentinel::findRoleByName('Suppliers');
        $buyers=Sentinel::findRoleByName('Buyers');
        // dd($user->inRole($buyers));
        if ($user->inRole($admin)) {
           redirect()->intended('admin');
        }
         elseif ($user->inRole($users)) {
           return  redirect()->route('home');
        }
        elseif ($user->inRole($suppliers)) {
            return  redirect()->route('home');

        }
        elseif ($user->inRole($buyers)) {
            return  redirect()->route('home');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_image($id,$model){
        $ids=(\Sentinel::getUser()) ? \Sentinel::getUser()->id : null;
         $company_ids= (Company::where('user_id',$ids)) ? Company::where('user_id',$ids)->first(['id']) : null;
        $model_name = 'App\\'.$model;
        $old_img_data = $model_name::where('company_id',$company_ids->id)->where('id',$id)->first();
        if($old_img_data){
            $file_location_old = "assets/frontend/images/uploads/".$old_img_data->image;
            if (file_exists($file_location_old)) {
                unlink($file_location_old);
            }
        }
        return ($model_name::where('company_id',$company_ids->id)->where('id',$id)->delete()) ? 1: 0;
    }
    
     public function banar_upload(Request $r){
        $ids=(\Sentinel::getUser()) ? \Sentinel::getUser()->id : null;
         $company_ids= (Company::where('user_id',$ids)) ? Company::where('user_id',$ids)->first(['id']) : null;

        //return $r->all();
        $banar_id   = DB::table('custom_templetes')->where('company_id','=',$company_ids->id)->get();
        $banar_img  = "add_banar.jpg";

        if($r->file('banar_img')){

            $validator = Validator::make($r->all(), [
                'banar_img' => 'mimes:jpeg,bmp,png|max:50000',
            ]);

            if ($validator->fails()) {
                return $validator->errors()->all();
            }

            $string         = "banar_img_".str_random(10);
            $temp_file      = $_FILES['banar_img']['tmp_name'];
            $ext            = pathinfo($_FILES['banar_img']['name'], PATHINFO_EXTENSION);
            $banar_img      = $string.'.'.$ext;
            if(move_uploaded_file($temp_file,'assets/frontend/images/uploads/'.$banar_img)){
                $data['img_msg'] = "Image uploaded";
            }
            else{
                $data['img_msg'] = "Image couldn't be uploaded";
            }
        }
        if(sizeof($banar_id)<=2){
            $input_arr = [
                'banar_title' => $r->banar_title,
                'height'      =>$r->height,
                'banar_image' =>$banar_img,
                'company_id' => $company_ids->id,
            ];
            DB::table('custom_templetes')->insert($input_arr);
        }
        return \Redirect::back();

    }
     public function update_banar(Request $r){
        $ids=(\Sentinel::getUser()) ? \Sentinel::getUser()->id : null;
         $company_ids= (Company::where('user_id',$ids)) ? Company::where('user_id',$ids)->first(['id']) : null;
        
        //return $r->all();
        $banar_image   = DB::table('custom_templetes')->where('id','=',$r->banner_id)->first()->banar_image;
        //return $banar_image;
        if($r->file('banar_img')){

            $validator = Validator::make($r->all(), [
                'banar_img' => 'mimes:jpeg,bmp,png|max:50000',
            ]);

            if ($validator->fails()) {
                return $validator->errors()->all();
            }

            $temp_file      = $_FILES['banar_img']['tmp_name'];
            if(move_uploaded_file($temp_file,'assets/frontend/images/uploads/'.$banar_image)){
                $data['img_msg'] = "Image uploaded";
            }
            else{
                $data['img_msg'] = "Image couldn't be uploaded";
            }
        }
        $input_arr = [
            'banar_title' => $r->banar_title,
            'height'    => $r->height,
            'banar_image' =>$banar_image,
        ];

        DB::table('custom_templetes')->where('id','=',$r->banner_id)->update($input_arr);
        return \Redirect::back();
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
    public function destroy()
    {
        if(Sentinel::getUser()){
           Users::where('id',Sentinel::getUser()->id)->update(['vacation_mode'=>0]);
        }
        Sentinel::logout();
        return redirect()->route('home');
    }
}
