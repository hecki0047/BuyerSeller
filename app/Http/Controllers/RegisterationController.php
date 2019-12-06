<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\RegistrationFormRequest;
use App\Models\UserregistrationStep;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sentinel;
use Validator;
use Input;
use Redirect;
use Mail;
use Flash;
use View;
use Route;
use App\Models\TempUser;
use App\Models\SupplierMainProduct;
use App\Models\Companies;
use App\Models\CompanyDescription;
use App\Models\Customer;
use App\Models\Supplier;

use Jenssegers\Agent\Agent;

class RegisterationController extends Controller
{   
     /**
     * @var $user
     */
     protected $user;

    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
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

    public function send_mail($email){
        $email = trim($email);
        $rules = ['email'=>'required|email|max:100'];
        $email_array = ['email'=>$email];
        $validator = Validator::make($email_array, $rules);
        if ($validator->fails())
        {
            return $validator->errors()->all();
        }
        $user_found = Users::where('email',$email)->first();
        if($user_found){
            return "User already exists. Please login";
        }
        $rand_key = str_random(30);
        TempUser::create(['rand_key'=>$rand_key,'email'=>$email]);
        $ww=Mail::send('emails.varified', ['rand_key'=>$rand_key], function($message) {
            $message->to(Route::current()->parameters()['email'])
                ->subject('Please verify your Email address to finish your account registration');
        });
        return 1;
    }
    public function check_captcha(Request $r){
        if($this->rpHash($r->defaultReal) == $r->defaultRealHash) {
            echo 1;
        }else{
            echo 0;
        }
    }

     function rpHash($value) {
        $hash = 5381;
        $value = strtoupper($value);
        for($i = 0; $i < strlen($value); $i++) {
            $hash = ($this->leftShift32($hash, 5) + $hash) + ord(substr($value, $i));
        }
        return $hash;
    }

     function leftShift32($number, $steps) {
        $binary = decbin($number);
        $binary = str_pad($binary, 32, "0", STR_PAD_LEFT);
        $binary = $binary.str_repeat("0", $steps);
        $binary = substr($binary, strlen($binary) - 32);
        return ($binary{0} == "0" ? bindec($binary) :
            -(pow(2, 31) - bindec(substr($binary, 1)))); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = [];
        $rules=array(
            'first_name'=>'required|min:3|max:32',
            'last_name'=>'required|min:3|max:32',
            'email'=>'required|email',
            'password'=>'required|min:6|max:12|confirmed|regex:/^(?=.*[!@#\$%\^&\*\/\()^`.])/',
            'password_confirmation'=>'required|min:6|max:12|regex:/^(?=.*[!@#\$%\^&\*\/\()^`.])/',
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        {
            $data[0] = 2;
            $data[1] = $validator->errors()->all();
            return $data;
        }
        
        $input = $request->only('email', 'password', 'first_name', 'last_name','front_end_registration');
        $df=\Hash::make($request->input('password'));;

        $user = Sentinel::registerAndActivate($input);
        // Find the role using the role name
        // $usersRole = Sentinel::findRoleByName('Suppliers');

            // Assign the role to the users
            // $usersRole->users()->attach($user->id);

        sendAdminNotification(4, 'New Account Created', $user->id, $user->id);
         if(isset($_POST['front_end_registration'])){

            $input_arr = ['user_id'=>$user->id,'step_id'=>'#company_information'];
            
            UserregistrationStep::create($input_arr);
            return $user;
        }
        return  redirect('login')->withFlashMessage('User Successfully Created!');
    }

    public function save_company_info(Request $request){

        Companies::where('location_of_reg','')->update(['location_of_reg'=>18]);
        Companies::where('location_of_reg',0)->update(['location_of_reg'=>18]);
        $data = [];
        $rules=array(
            'user_id'=>'required|max:999999999',
            'country'=>'required|integer|not_in:0|max:999999',
            'customer_type'=>'required|max:100',
            'company_name'=>'required|max:200|min:5',
            'phone_country'=>'required|integer|max:99999',
            'phone_number'=>'required|integer|max:99999999999',
            'btype'=>'required|integer|max:100|not_in:0',
            'p1'=>'required|max:100',
            'p2'=>'max:100',
            'p3'=>'max:100',
            );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        {
            $data[0] = 2;
            $data[1] = $validator->errors()->all();
            return $data;
        }
        $input = $request->only(['user_id','country','customer_type','company_name','phone_country','phone_number','btype','p1','p2','p3']);

        $user_id=$input['user_id'];
        if($user_id) {
            $company_id = Companies::insertGetId(['user_id'=>$user_id,'location_of_reg'=>$input['country']]);
            $company_info =[
                'company_id'    =>$company_id,
                'name'          => $input['company_name'],
            ];
           $usersRole = Sentinel::getRoleRepository()->createModel()->create([
               'name' => $input['customer_type'],
               'slug' => $input['customer_type'],
           ]);     
            $usersRole = Sentinel::findRoleByName($input['customer_type']);

            // Assign the role to the users
             $usersRole->users()->attach($user_id);
            CompanyDescription::create($company_info);

            SupplierMainProduct::create(['supplier_id'=>$user_id,'product_name_1'=>$request->p1,'product_name_2'=>$request->p2,'product_name_3'=>$request->p3]);
            $insert_date= array(
                'user_id'       => $user_id,
                'telephone'     => $input['phone_country'].'-'.$input['phone_number'],
                'country_id'    => $input['country'],
                'company_id'    => $company_id,
            );

            if($input['customer_type'] == 'Buyers'){
                $insert_date['customer_group_id'] = 2;
                Customer::create($insert_date);
                //return $insert_date;
            }else{
                $insert_date['customer_group_id'] = 1;
                $insert_date_to_supplier['user_id'] = $user_id;
                $insert_date_to_supplier['busines_type_id'] = $input['btype'];
                Customer::create($insert_date);
                Supplier::create($insert_date_to_supplier);
                //return $insert_date;
            }

            
            $input_arr = ['user_id'=>$user_id,'step_id'=>'#confirmation'];
            UserregistrationStep::create($input_arr);

            $user_email = Users::where('id',$user_id)->first();
            if($user_email){
                return $user_email->email;
            }else{
                return 1;
            }
        }
    }
    public function country_suggesion($term){
            $country = DB::table('country_list as c')
                        ->where('c.name','LIKE','%'.$term.'%')
                        ->get();
            $row_set = [];
            foreach($country as $c){
                $row['value']=$c->name;
                $row['id']=(int)$c->id;
                $row['iso_code_2']=$c->iso_code_2;
                $row['country_code']=$c->country_code;
                $row_set[] = $row;
            }
            return $row_set;
    }

    public function check_user_by_email($email){
           $user = Users::where('email',$email)->first();
        return $user;
    }
    public function confirm($confirmation_code){
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = Users::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->activeted = 1;
        $user->confirmation_code = null;
        $user->save();

        Flash::message('You have successfully verified your account.');

        return Redirect::route('login_path');
    }

    public function veryfication_by_key(Request $request, $key){
        if(Sentinel::getUser()){
            if($request->old_key){
                Sentinel::logout();
                if( isset( $_GET["old_key"] ) && $_GET["old_key"] == "true" ) {
                    header( "Location: $key" );
                    exit;
                }
            }else{
                Sentinel::logout();
                return  redirect('login')->withFlashMessage('Please sign in.');
            }
        }
        else{
            $temp_user = TempUser::where('rand_key',$key)->first();
            $user = Users::where('email',$temp_user->email)->first();
            $step_location = '';
            // dd($temp_user);
            if($user){
                $step = UserregistrationStep::where('user_id',$user->id)->orderBy('id','desc')->first();
                if($step->step_id == '#company_information'){
                    $step_location = $step->step_id;
                }else{
                    return  redirect('login')->withFlashMessage('User already activated! Please sign in.');
                }
            }
            $varified_email = ($temp_user) ? $temp_user->email : "";
            $status = ($temp_user) ? "<span class='text-success' style='font-size:15px;font-weight:bold'>Email is verified!!!! Go to next</span>" : "Varification email will be sent to this email.";
            $page_content_title=" ";
            return view('frontend.desktop-view.custom-register',compact('varified_email','page_content_title','status','step_location','user'));
        }
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
