<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use view;
use Sentinel;
use Validator;
use Input;
use Redirect;
use Mail;
use App\Models\Sitemap;
use App\Models\ProductDescription;
use App\Models\ProductToCategory;
use App\Models\Products;
use App\Models\CompanyDescription;
use App\Models\WholesaleCategoryDescription;
use App\Models\Supplier;
use App\Models\SupplierMainProduct;
use App\Models\PageSeo;
use App\Models\Companies;
use App\Models\SupplierInfo;
use App\Models\Tradeshow;
use App\Models\Users;
use App\Models\Customer;
use App\Models\SupplierProduct;
use App\Models\Country;
use App\Models\ChinaSupplier;
use App\Models\SelectedSupplier;


class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      // $supplier_info=DB::table('india_supplier')->where('country_id',99)->get();
      // foreach ($supplier_info as $key => $supplier_info) {
      //     $pp[$key]=array('product_id'=>$supplier_info->product_id, 'parent_id'=>$supplier_info->parent_id, 'company_id'=>$supplier_info->company_id, 'page_id'=>$supplier_info->page_id, 'status'=>1);
      // }
      
      // $rr=BdtdcSelectedSupplier::insert($pp);
      // dd($rr);

     
    }

    public function payment_history()
    {
      $supplier_info=SupplierInfo::with('company','name_string','invoice')->paginate(10);

      return view('frontend.account.payment_history',compact('supplier_info'));
    }
    public function my_profile()
    {
      if(Sentinel::check())
        {
      $user_id =Sentinel::getUser()->id;
      // dd($user_id);
      $profile=Users::with('companies','customers','suppliers')->where('id',$user_id)->first();
      // dd($profile->companies);
      // return $profile->suppliers->bdtdcCountry->name;
      return view('frontend.account.my_profile',compact('profile'));
      }
        else{
            return redirect()->route('login')->withFlashMessage('You must first login or register before accessing this page.');
        }
    }
    public function edit_my_profile()
    {
        if(Sentinel::check())
        {
      $user_id =Sentinel::getUser()->id;
      $country=BdtdcCountry::all();
      // dd($country);
       $profile=User::with('companies','customers','suppliers')->where('id',$user_id)->first();
      // dd($profile);
      
      return view('frontend.account.edit_my_profile',compact('profile','country'));
      }
        else{
            return redirect()->route('login')->withFlashMessage('You must first login or register before accessing this page.');
        }
    }

    public function update_my_profile(Request $request,$user_id)
    {
      $user_id =Sentinel::getUser()->id;
       $rules=array(
            'first_name'=>'required',
            'last_name'=>'required',
            'department'=>'required',
            'city'=>'required',
            'region'=>'required',
            'company_website'=>'required',
            'telephone'=>'required',
            'fax'=>'required',
            );


        $validator = Validator::make($request->all(), $rules);
            if ($validator->fails())
            {
                return redirect::back()
                            ->withErrors($validator);
             
            }
            else
            {


       $update_data = array
      (
          'first_name'=>$request->first_name, 
          'last_name'=>$request->last_name,
          'department'=>$request->department,
          'gender'=>$request->gender,
          
      );
      // dd($update_data);
      $update_data1 = array
      (
          'city'=>$request->city,
          'region'=>$request->region,
          'company_website'=>$request->company_website,
      );

      $update_data2 = array
      (
          'telephone'=>$request->telephone,
          'fax'=>$request->fax,
      );

        // dd($update_data);
      DB::table('users')->where('id', $user_id)->update($update_data);
      DB::table('companies')->where('user_id', $user_id)->update($update_data1);
      DB::table('customer')->where('user_id', $user_id)->update($update_data2);
      return Redirect::back();
  }
    }
    public function member_profile()
    {
      return view('frontend.account.member_profile');
    }
    public function upload_photo()
    {
      return view('frontend.account.upload_photo');
    }
    public function sample_photo()
    {
      return view('frontend.account.sample');
    }
    public function privacy_setting()
    {
      return view('frontend.account.privacy_setting');
    }
    
    public function email_services()
    {
      return view('frontend.account.email_service');
    }
    public function security_question()
    {
      return view('frontend.account.security_question');
    }
    public function manage_verification_phones()
    {
      return view('frontend.account.manage_verification_phones');
    }
    public function bank_account()
    {
      return view('frontend.account.bank_account');
    }

    public function account_settings()
    {
      return view('frontend.account.account_settings');
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
        $input = $request->only('email', 'password');
         //dd($input);

        //dd($return_url);
        try {
            
            if (Sentinel::authenticate($input, $request->has('remember'))) {

                $user = Sentinel::getUser();
                $user_id = $user->id;
                User::where('id',$user_id)->update(['active'=>1]);
                User::where('id',$user_id)->update(['vacation_mode'=>1]);
                $role = Role_user::where('user_id',$user_id)->first();
                if(!$role){
                    $temp_user = TempUser::where('email',$user->email)->orderBy('id','desc')->first();
                    if($temp_user){
                        return Redirect::to(URL::to('email/verification_by_key/'.$temp_user->rand_key.'?old_key=true'));
                        return Redirect::to('email/verification_by_key/'.$temp_user->rand_key.'?old_key=true');
                        // return redirect('email/verification_by_key/'.$temp_user->rand_key.'?old_key=true');
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

