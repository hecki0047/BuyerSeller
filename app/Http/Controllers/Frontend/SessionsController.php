<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use Sentinel;
use Redirect;
use URL;
use DB;
use Validator;
use view;
use Mail;
use Route;
use Input;
use App\TempUser;
use App\Models\Users;
use App\Models\Subscription;
use App\Models\PagesSeo;
use App\Models\UserregistrationStep;
use App\Models\Role_user;
use GeoIP;
use Jenssegers\Agent\Agent;

class SessionsController extends Controller
{
   
    

     public function changeEmail()
    {
        $page_content_title='Login';
       
        $sub=Subscription::all();

        return view('auth.password.change-email',compact('page_content_title'));
    }

    public function postchangeEmail(Request $request)
    {

        $rules = array(
        'email'=>'required|email|unique:users,email|unique:subscriptions,email', 
        );

         $validator = Validator::make($request->all(), $rules);
            if ($validator->fails())
            {

                return redirect::back()
                            ->withError($validator);
             
            }
            else
            {
                $email=$request->only('email');

                $data=array();
                $data = array
                (
                    'email'=> $email['email'],
                ); 
               
                $rand_key=str_random(10);
                $in=Subscription::insert(['token'=>$rand_key,'email'=>$email['email']]);

                $www=Mail::send('emails.change', ['rand_key'=>$rand_key], function($message) use ($data) {
                    $message->to($data['email'])
                        ->subject('Please verify your e-mail address to finish your process');
                });
               

                //return redirect::back();
            }
            return view('auth.password.change-email',compact('page_content_title','email'));


    }



    public function verification_by_key(Request $request){
     
       $key=Input::get('token');
            $subscription = BdtdcSubscription::where('token',$key)->first();
        
           if($subscription)
           {
            DB::table('subscriptions')
            ->where('token', $key)
            ->update(['is_active'=>1]);
            //return redirect::back();
            return view('auth.password.complete-change-mail');
            //return 'updated';
           }
           else
           {
            return 0;
           }
        }

    public function completechangeEmail()
    {
        return view('auth.password.complete-change-mail');
    }
}
