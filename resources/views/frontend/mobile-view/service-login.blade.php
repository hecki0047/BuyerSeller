@extends('mobile-view.layout.master_m')
	@section('content').
<section>
<div class="container">
	<div class="row padding_0" style="background: #fff;">
				<div style="width: 100%;padding-top: 15px;box-shadow: 0px 5px 5px #efefef;">
				<div class="col-xs-12">
					 <ul class="nav nav-tabs" style="border-bottom: 0 none;">
					    <li class="active" style="width: 45%;"><a data-toggle="tab" href="#signbdtdc1" style="text-align: center;">Sign In</a></li>
					   <li class="" style="width: 45%; margin-left: 5%"><a data-toggle="tab" href="#join-bdtdc1" style="text-align: center;">Join Free</a></li>
					  </ul>
					</div>
				</div>
		 <div class="tab-content">
		 <div  id="signbdtdc1" class="tab-pane fade in active">
			<div class="col-xs-12">
				<div style="padding: 60px 0;width: 100%;overflow: hidden;background: #fff; height: 500px;">
					{!! Form::open(['route' => 'ServiceLoginPost']) !!}
					<input type="hidden" name="continue" value="{{$return_url}}">
                       

					    <div class="form-group reg-frm-bd" style="border:0 none;">
					     
					      <input style="border:0 none; border-bottom: 2px solid #255E98;" type="email" name="email" class="form-control" id="" placeholder="Enter login email" required>
					      	
					    </div>
					    <div class="form-group reg-frm-bd" style="border:0 none;">
					        <input style="border:0 none; border-bottom: 2px solid #255E98;" type="password" name="password" class="form-control" id="pwd" placeholder="Enter login password" required>
					    </div>
                        <div class="form-group">
                        </div>
                        <button type="submit" class="btn btn btn-lg btn-primary btn-block" style="width: 100%; background:#255E98;"><span style="color: #fff; font-size: 14px;">SIGN IN</span></button>
					    <button type="submit" class="btn btn  btn-lg btn-default" style="width: 100%; margin-top: 30px;background: #FF6A00;"><span style="color: #fff; font-size: 14px;"><a itemprop="url" href="{{ URL::to('forgot_password',null,is_secured())}}" id="forget-password" style="color:#fff !important;">FORGOT PASSWORD ?</a></span></button>
				   {!! Form::close() !!}
				</div>
		  </div>
		 </div>
<div id="join-bdtdc1" class="tab-pane fade"> 
	<div class="col-xs-12">
        <div style="padding: 60px 0;width: 100%;background: #fff;">
            

            <form action="{{ URL::to('mobile-registration/store',null,is_secured()) }}" method="post" class="form-horizontal form-row-seperated user_registration_form">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group" style="position: relative;">
                 <span class="user-reg-bd"><i class="fa fa-globe" aria-hidden="true" style="font-size: 20px; color:#666;"></i>
                 </span>
                <input  style="border: 0 none; border-bottom: 1px solid #dcdee3;height: 48px;margin-top: 0px; padding-left: 50px;"   type="text" class="form-control" id="" placeholder="Country/Region">
                <?php 
                 $country=DB::table('bdtdc_country')->get();
                ?>
                <select class="select_count_m" name="country" style="position: absolute;top: 10px;right: 30px">
                  @foreach($country as $data)
                  <option value="{{$data->id}}" name="country" style="text-align: left; margin-right: 20px;">{{$data->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group" style="position: relative;">
                   <span class="user-reg-bd"><i class="fa fa-user" aria-hidden="true" style="font-size: 20px; color:#666;"></i>
                  </span>
                <input style="border: 0 none; border-bottom: 1px solid #dcdee3;height: 48px;margin-top: 0px;padding-left: 50px;"  type="text" name="first_name" class="form-control" id="" placeholder="First Name" required>
              </div>
               <div class="form-group" style="position: relative;">
                  <span class="user-reg-bd"><i class="fa fa-user" aria-hidden="true" style="font-size: 20px; color:#666;"></i>
                  </span>
                <input style="border: 0 none; border-bottom: 1px solid #dcdee3;height: 48px;margin-top: 0px;padding-left: 50px;"  type="text" name="last_name" class="form-control" id="" placeholder="Last Name" required>
              </div>
                <div class="form-group" style="position: relative;">
                    <span class="user-reg-bd"><i class="fa fa-building" aria-hidden="true" style="font-size: 20px; color:#666;"></i></span>
                    <input style="border: 0 none; border-bottom: 1px solid #dcdee3;height: 48px;margin-top: 0px;padding-left: 50px;"   type="text" name="company_name" class="form-control" id="" placeholder="Company Name" required>
                </div>

                <div class="form-group" style="position: relative;">
                    <span class="user-reg-bd"><i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color:#666;">
                    </i></span>
                    <!-- <input type="hidden" name="check_email" value="member already existed"> -->

                    <input style="border: 0 none;border-bottom: 1px solid #dcdee3;height: 48px;margin-top: 0px;padding-left: 50px;" type="email" name="email" class="form-control" id="repeat_mail" placeholder="Email" required>
                    <div class="login_link" style="margin-left: 8%;">
                    <p class="" style="font-size: 10px;color: #ff0000;">This user already exists</p>
                    <a href="{!! URL::to('ServiceLogin') !!}" class="btn btn-primary login_link_btn" style="    font-size: 10px;padding-left: 1%;height: 23px; padding-top: 1%;width: 31%;">Click here to login</a>
                    </div>

                </div>
                <div class="form-group" style="position: relative;">
                <span class="user-reg-bd"><i class="fa fa-key" aria-hidden="true" style="font-size: 20px; color:#666;"></i></span>

                      <input style="border: 0 none; border-bottom: 1px solid #dcdee3;height: 48px;margin-top: 0px;padding-left: 50px;"   type="password" name="password" class="form-control" id="" placeholder="Password" required>
                </div>
              <button type="submit" class="btn btn-default check_email" style="width: 100%; background:#255E98;"><span style="color: #fff; font-size: 14px;">SUBMIT</span></button>
          </form>
        </div>
        </div>
      </div>
      </div>
	</div>
</div>
</section>
@stop