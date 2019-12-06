@extends('mobile-view.layout.master_m')
	@section('content')
<section>
<div class="container">
	<div class="row padding_0" style="background: #fff; position: relative;">
		<div style="width: 100%;padding-top: 15px;box-shadow: 0px 5px 5px #efefef;">
			<ul class="nav nav-tabs" style="border-bottom: 0 none;">
			    <li class="active" style="width: 50%;"><a data-toggle="tab" href="#join_bdtdc" style="text-align: center;">Join Free</a></li>
		    </ul>
		</div>
  <div class="tab-content">
      <div id="join_bdtdc" class="tab-pane fade in active"> 
        <div style="padding: 60px 0;width: 100%;background: #fff;">
            @if (count($errors) > 0)
                    <div class="alert alert-danger" style="margin-top:10px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <form action="{{ URL::to('mobile-registration/store',null,is_secured()) }}" method="post" class="form-horizontal form-row-seperated user_registration_form" style="margin: 0 !important;">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group" style="position: relative;margin: 0 !important;">
                 <span class="user-reg-bd"><i class="fa fa-globe" aria-hidden="true" style="font-size: 20px; color:#666;"></i>
                 </span>
                <input  style="border: 0 none; border-bottom: 1px solid #dcdee3;height: 48px;margin-top: 0px; padding-left: 50px;"   type="text" class="form-control" id="" placeholder="Country/Region">
                <?php 
                 $country=DB::table('bdtdc_country')->get();
                ?>
                <select class="select_count_m" name="country" style="position: absolute;top: 10px;right: 0;">
                  @foreach($country as $data)
                  <option value="{{$data->id}}" name="country">{{$data->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group" style="position: relative;margin: 0 !important;">
                   <span class="user-reg-bd"><i class="fa fa-user" aria-hidden="true" style="font-size: 20px; color:#666;"></i>
                  </span>
                <input style="border: 0 none; border-bottom: 1px solid #dcdee3;height: 48px;margin-top: 0px;padding-left: 50px;"  type="text" name="first_name" class="form-control" id="" placeholder="First Name" required>
              </div>
               <div class="form-group" style="position: relative;margin: 0 !important;">
                  <span class="user-reg-bd"><i class="fa fa-user" aria-hidden="true" style="font-size: 20px; color:#666;"></i>
                  </span>
                <input style="border: 0 none; border-bottom: 1px solid #dcdee3;height: 48px;margin-top: 0px;padding-left: 50px;"  type="text" name="last_name" class="form-control" id="" placeholder="Last Name" required>
              </div>
                <div class="form-group" style="position: relative;margin: 0 !important;">
                    <span class="user-reg-bd"><i class="fa fa-building" aria-hidden="true" style="font-size: 20px; color:#666;"></i></span>
                    <input style="border: 0 none; border-bottom: 1px solid #dcdee3;height: 48px;margin-top: 0px;padding-left: 50px;"   type="text" name="company_name" class="form-control" id="" placeholder="Company Name" required>
                </div>

                <div class="form-group" style="position: relative;margin: 0 !important;">
                    <span class="user-reg-bd"><i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 20px; color:#666;">
                    </i></span>
                    <!-- <input type="hidden" name="check_email" value="member already existed"> -->

                    <input style="border: 0 none;border-bottom: 1px solid #dcdee3;height: 48px;margin-top: 0px;padding-left: 50px;" type="email" name="email" class="form-control" id="repeat_mail" placeholder="Email" required>
                    <div class="login_link" style="margin-left: 8%;">
                    <p class="" style="font-size: 10px;color: #ff0000;">This user already exists</p>
                    <a href="{!! URL::to('ServiceLogin') !!}" class="btn btn-primary login_link_btn" style="    font-size: 10px; padding-left: 1%; height: 23px;padding-top: 1%;width: 31%;">Click here to login</a>
                    </div>

                </div>
                <div class="form-group" style="position: relative;margin: 0 !important;">
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
</section>
@stop
@section('scripts')

    <script language="javascript">
     function validateEmail(sEmail)
      {
            var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if (filter.test(sEmail)) {
                return true;
            }
            else {
                return false;
            }
        }

        // check email

     $(document).on({keyup:function(){
                email = $(this).val();
               alert(email);
                    url = $('URL::to/').val()+"/check_existing_user/"+email;
                    // alert(url);
                    $.get(url,function(r){
                        if(typeof r.id !== typeof undefined){
                            alert(jdfjfdbvfd);
                        }else{
                            alert(ndbc);
                        }
                    })
              
            }},'#prev_email');

    $(document).ready(function(){
        $('.login_link').hide();
    });
    $(document).on({'input paste keyup':function(){
    
    var base_url="{{URL::to('/')}}";
    var check_email = $(this).val();
    // alert(check_email);
    // var email_check= $('.check_email').val();
    // $('input[name="check_email"]').val(email_check);
    
   // var url=base_url+'/Bdtdc/check_email?check_email='+check_email;
   
    // window.location.href=url;
   url = base_url+"/check_existing_user/"+check_email;

        $.get(url,function(r){
            if(typeof r.id !== typeof undefined){
                $('.login_link').show();
            }else{
                $('.login_link').hide();
            }
        });
}},'#repeat_mail');
   
/*
   $(document).on({click:function(e){
    e.preventDefault();
    var base_url="{{URL::to('/')}}";
    var check_email = $('input[name="email"]').val();
   
    window.location.href=url;

}},'.check_email');*/
        
    </script>

@stop