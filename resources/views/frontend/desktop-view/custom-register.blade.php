@extends('frontend.layouts.master-register')
@section('page_css')
<link property='stylesheet' rel="stylesheet" type="text/css" href="{{url('/assets/frontend/css/animate.css')}}" media="screen" data-name)="skins">
<link property='stylesheet' href="{{url('/assets/frontend/css/join.css')}}" rel="stylesheet">
<link property='stylesheet' href="{{url('/assets/frontend/css/captcha/jquery.realperson.css')}}" rel="stylesheet">
@endsection
@section('content')
<br>
<!-- ---LOADING ANIMATION TRIGERED TO THIS LOADER CLASS;----- -->
<div style="background-size: 35px 35px;" class="loader"></div>
    <div class="header-bottom"><!--header-bottom-->
        <div id="home_b" class="row">
            <div class="col-xs-12" style="padding-bottom: 5%;padding-top:2%">
                <input type="hidden" name="step_location" value="{{$step_location}}">
                <div style="margin-top:1%;" class="col-xs-8 col-xs-offset-2 text-center company_information_area">
                </div>

                <ul style="display:none;padding-left:70px;padding-right:70px;" class="nav nav-pills nav-justified tab_list">
                    <li class="active triger_next"><a data-toggle="tab" href="#email_registration"><span style="background:#1A4570!important" class="badge pull-right">1</span>Verification</a></li>
                    <li class="triger_next"><a data-toggle="tab" href="#personal_information">2.Information</a></li>
                    <li class="triger_next"><a data-toggle="tab" href="#company_information">3.Company Information</a></li>
                </ul>
                
                <ul style="margin-bottom:2%;padding-left:100px;padding-right:100px;" class="nav nav-pills nav-justified visible_tab_list">
                    <li class="triger_next"><a href="#email_registration" class="active_proces"><span class="active_progress_icon badge">1</span><span class="">Verification</span> </a></li>
                    <li class="triger_next"><a href="#personal_information" class=""><span class="inactive_progress_icon badge">2</span>Information</a></li>
                    <li class="triger_next"><a href="#company_information" style="padding-left: 0;"><span class="inactive_progress_icon badge">3</span>Company Information</a></li>
                    <li class="triger_next"><a href="" class=""><span class="inactive_progress_icon badge"><i style="padding-right: 4px;" class="fa fa-check-circle"></i></span>Complete</a></li>
                    
                </ul>


                <div class="tab-content">
                    <input type="hidden" name="base_url" value="{{ URL::to('/',null ) }}">
                    <!--------------TAB CONTENT FOR EMAIL REGISTRATION STEP ONE------------------>
                    
                    
                    <div id="email_registration" class="input_holder tab-pane fade in active col-xs-10 col-xs-offset-1">
                            

                        <div class="row margin-bottom2">
                            <div align="right" style="padding-top:5px" class="col-xs-3 text-right">
                                <label for="Email"></label>
                            </div>
                            <div class="col-xs-5 send_mail_again" style="position:relative;">
                                <label id="email_label" style="position:absolute;top: 5%;left: -50px;color: #5B9BD1;"><span style="color: red">*</span> Email </label>

                                <p class="text-primary">
                                        @if(isset($status))
                                            {{ $status }}
                                        @else
                                        @endif
                                    
                                    </p>
                                    @if(isset($varified_email))
                                        @php
                                                $value = $varified_email;
                                                $validation = "validated_true";
                                                $ca_varifyed = "true";
                                        @endphp
                                        @else
                                        @php
                                            $value = "";
                                            $validation = "validated_false";
                                            $ca_varifyed = "false";
                                        @endphp
                                    @endif
                                                                    
                                <input type="email" name="prev_email" ca_varifyed="{{ $ca_varifyed }}" class="form-control" validation="{{ $validation }}" autocomplete="off" placeholder="Email Address" value="{{ $value }}">
                                <form method="post" action="{{ URL::to('check_captcha',null) }}" class="captcha_form">
                                    {!! csrf_field() !!}
                                    <div id="captcha_area" style="position:relative;margin-top:20px;">
                                        <label style="position:absolute;top:63%;left: -145px;color: #5B9BD1;"><span style="color: red">*</span> Verification Code </label>
                                    <input type="text" id="defaultReal" name="defaultReal" validated_check="" required class="form-control" placeholder="Insert captcha here" >
                                    <div style="position: absolute;top:65px;right:-50px;">
                                            <i class="fa fa-check-circle" id="captcha_valid" style="color:green;font-size: 19px;margin-top:0px;display: none;"></i>
                                            <i class="fa fa-times-circle" id="captcha_invalid" style="color:red;font-size: 19px;margin-top:0px;display: none;"></i>
                                        </div>
                                    </div>
                                    <div id="hiddeninput" style="position:relative;">
                                        <label style="position:absolute;top: 1px;left: -155px;color: #5B9BD1;"><span style="color: red">*</span> Verification Code </label>
                                        <input type="text" name="hiddeninput" class="form-control" placeholder="insert captured code here" style="margin-top:20px;" disabled>
                                    </div>
                                    
                                    <div class="reg_aditional_text">
                                        <p class="text-primary" style="line-height:20px;color:black;"><input  type="checkbox" name="terms" checked="" style="margin-top:12%">&nbsp;By creating an account, you agree to:</p>
                                        <p style="line-height:0px;margin-left:5%;padding-top: 4px; margin-right: 5px;" >- buyerseller.asia's <a href="{{ URL::to('FooterPage/pages/Policies_Rules',22 ) }}" style="position: absolute;"> Conditions of Use and Privacy.</a></p>
                                        <p style="line-height:16px;margin-left:5%;padding-top: 4px;">- Receive e-mails from buyerseller.asia related to  &nbsp;&nbsp;membership and services. </p>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xs-4 validation_status email_registration_validation" style="position:relative;">
                                <i class="fa fa-check-circle hidden_icon validated_true" style="color:green;font-size: 19px;margin-top:0px"></i>
                                <i class="fa fa-times-circle hidden_icon validated_false" style="color:red;font-size: 19px;margin-top:0px;"></i>
                                <span class="text-danger validation_message" style="position:absolute;display:block !important;top:-2px;left:39px;"></span>
                            </div>
                        </div>

                        <div class="row margin-bottom2 login_link">
                            <div class="col-xs-12 text-center">
                                <h4 class="text-primary">This user already exists</h4>
                                <a href="{!! URL::to('login') !!}" class="btn btn-primary login_link_btn">Click here to login</a>
                            </div>
                        </div>
                        
                        
                    </div>



                    <!--------------TAB CONTENT FOR PERSONAL INFORMATION STEP TWO------------------>
                    <div id="personal_information" class="input_holder tab-pane fade row">
                        
                    <form action="{{ URL::to('registration/store',null) }}" method="post" class="form-horizontal form-row-seperated user_registration_form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h3 style="font-weight:bold" class="text-center text-primary"></h3>

                        <div class="col-xs-10 col-xs-offset-1 margin-bottom2">
                            <div class="col-xs-4 text-right" style='position: relative;'>
                                <label for="Email" style="font-weight: bold;top: 0px;left: 139px;">Username:</label>
                            </div>
                            <div class="col-xs-4">
                                <input style="display: none;" type="email" name="email" validation="" class="form-control" value="" readonly>
                                <p id="text_email" style="padding-left: 12px;"></p>
                            </div>
                            <div class="col-xs-4 validation_status">
                                <i class="fa fa-check-circle hidden_icon validated_true" style="color:green;font-size:19px;margin-top:9px;"></i>
                                <i class="fa fa-times-circle hidden_icon validated_false" style="color:red;font-size:19px;margin-top:9px;"></i>
                                <span class="text-danger validation_message"></span>
                            </div>
                        </div>

                        <div class="col-xs-10 col-xs-offset-1 margin-bottom2">
                            <div class="col-xs-4 text-right">
                                <label for="Email"><span style="color: red">*</span> First Name:</label>
                            </div>
                            <div class="col-xs-4">
                                <input type="text" name="first_name" validation="validated_false" class="form-control first_name_val" placeholder="First Name">
                            </div>
                            <div class="col-xs-4 validation_status">
                                <i class="fa fa-check-circle hidden_icon validated_true" style="color:green;font-size:19px;margin-top:9px;"></i>
                                <i class="fa fa-times-circle hidden_icon validated_false" style="color:red;font-size:19px;margin-top:9px;"></i>
                                <span class="text-danger validation_message invalid_firstname"> Please enter your first name</span>
                            </div>
                        </div>

                        <div class="col-xs-10 col-xs-offset-1 margin-bottom2">
                            <div class="col-xs-4 text-right">
                                <label for="Email"><span style="color: red">*</span> Last Name:</label>
                            </div>
                            <div class="col-xs-4">
                                <input type="text" name="last_name" validation="validated_false" class="form-control last_name_val" placeholder="Last Name">
                            </div>
                            <div class="col-xs-4 validation_status">
                                <i class="fa fa-check-circle hidden_icon validated_true" style="color:green;font-size:19px;margin-top:9px;"></i>
                                <i class="fa fa-times-circle hidden_icon validated_false" style="color:red;font-size:19px;margin-top:9px;"></i>
                                <span class="text-danger validation_message invalid_lastname"> Please enter your last name</span>
                            </div>
                        </div>
                        <div class="col-xs-10 col-xs-offset-1 margin-bottom2">
                            <div class="col-xs-4 text-right">
                                <label for="Email"><span style="color: red">*</span> Create Password:</label>
                            </div>
                            <div class="col-xs-4">
                                <input type="password" name="password" validation="validated_false" class="form-control passw" placeholder="Please enter your password">
                            </div>
                            <div class="col-xs-4 validation_status" style="border:1px solid #ddd;border: 1px solid #ddd;position: absolute;right: 0;z-index: 99999;">
                                <i class="fa fa-check-circle hidden_icon validated_true" style="color:green;font-size:19px;margin-top:9px;"></i>
                                <i class="fa fa-times-circle hidden_icon validated_false" style="color:red;font-size:19px;margin-top:9px;"></i>
                                <span class="text-danger validation_message" ></span>
                            </div>
                        </div>
                        <div class="col-xs-10 col-xs-offset-1 margin-bottom2">
                            <div class="col-xs-4 text-right">
                                <label for="Email"><span style="color: red">*</span> Confirm Password:</label>
                            </div>
                            <div class="col-xs-4">
                                <input type="password" name="password_confirmation" validation="validated_false" class="form-control" placeholder="Please retype your password">
                                <p style="margin-top:5px"><span class="text-danger validation_message"></span></p>
                            </div>
                            <div class="col-xs-4 validation_status" style="z-index: ;">
                                <!-- <i class="fa fa-check-circle hidden_icon validated_true" style="color:green;font-size:19px;margin-top:9px;"></i>
                                <i class="fa fa-times-circle hidden_icon validated_false" style="color:red;font-size:19px;margin-top:9px;"></i>
                                <span class="text-danger validation_message"></span> -->
                            </div>
                        </div>
                        <input type="hidden" name="front_end_registration">
                        {!! Form::close() !!}

                    </div>

                    <!--------------TAB CONTENT FOR COMPANY REGISTRATION STEP THREE------------------>
                    <div id="company_information" class="input_holder tab-pane fade row">
                       
                        <form action="{{ URL::to('save_company_info',null ) }}" class="form-horizontal form-row-seperated user_company_form" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <input type="hidden" name="user_id" value="">
                            <h3 style="font-weight:bold" class="text-center text-primary"></h3>
                            <div class="col-xs-10 col-xs-offset-1 margin-bottom2">
                                <div class="col-xs-4 text-right">
                                    <label for="Company Location"><span style="color: red">*</span> Company Location:</label>
                                </div>
                                <div class="col-xs-4">
                                    <!-- <input type="hidden" name="country" value="">
                                    {-!! Form::text('country_suggession','',array('class'=>'form-control','id'=>'country','placeholder'=>'country...','validation'=>"validated_true")) !!-} -->
                                    @php
                                        $all_countries = App\Models\Country::where('region_id','!=',1)->get();
                                    @endphp
                                    <select name="country" id="country" validation="validated_false">
                                        <option value="0" data-ccode="0" data-cpcode="0">Please Select Country</option>
                                        @foreach($all_countries as $country_single)
                                        <option value="{{$country_single->id}}" data-ccode="{{$country_single->iso_code_2}}" data-cpcode="{{$country_single->country_code}}">{{$country_single->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-4 validation_status">
                                    <img id="iso_code" style="height: 21px;margin-right: 10px;" src="{!! asset('assets/frontend/images/no-image.jpg') !!}">
                                    <i class="fa fa-check-circle hidden_icon validated_true" style="color:green;font-size:19px;margin-top:9px;"></i>
                                    <i class="fa fa-times-circle hidden_icon validated_false" style="color:red;font-size:19px;margin-top:9px;"></i>
                                    <span class="text-danger validation_message invalid_country">Please select your Country</span>
                                </div>
                            </div>

                            <div class="col-xs-10 col-xs-offset-1 margin-bottom2">
                                <div class="col-xs-4 text-right">
                                    <label for="Email">Select Customer Type:</label>
                                </div>
                                <div class="col-xs-4">
                                    <label style="margin-right: 5px">
                                        {!! Form::radio('customer_type', 'Suppliers', true, array('class'=>'icheck customer_type','id'=>'supplier')) !!} Supplier</label>
                                    <label style="margin-right: 5px">
                                        {!! Form::radio('customer_type', 'Buyers', '', array('class'=>'icheck customer_type','id'=>'buyer', 'style'=>'height:13px;')) !!} Buyer</label>
                                    <label style="margin-right: 5px">
                                        {!! Form::radio('customer_type', 'Suppliers', '', array('class'=>'icheck customer_type','id'=>'supplier')) !!} Both</label>
                                </div>
                                <div class="col-xs-4 validation_status">
                                    <i class="fa fa-check-circle hidden_icon validated_true" style="color:green;font-size:19px;margin-top:9px;"></i>
                                    <i class="fa fa-times-circle hidden_icon validated_false" style="color:red;font-size:19px;margin-top:9px;"></i>
                                    <span class="text-danger validation_message"></span>
                                </div>
                            </div>

                            <div class="col-xs-10 col-xs-offset-1 margin-bottom2">
                                <div class="col-xs-4 text-right">
                                    <label for="Email"><span style="color: red">*</span> Company Name:</label>
                                </div>
                                <div class="col-xs-4">
                                    {!! Form::text('company_name','',array('class'=>'form-control','id'=>'company','placeholder'=>'Must be a legally registered company','validation'=>"validated_false")) !!}
                                </div>
                                <div class="col-xs-4 validation_status">
                                    <i class="fa fa-check-circle hidden_icon validated_true" style="color:green;font-size:19px;margin-top:9px;"></i>
                                    <i class="fa fa-times-circle hidden_icon validated_false" style="color:red;font-size:19px;margin-top:9px;"></i>
                                    <span class="text-danger validation_message invalid_company"> Please enter your company name</span>
                                </div>
                            </div>

                            <div class="col-xs-10 col-xs-offset-1 margin-bottom2">
                                <div class="col-xs-4 text-right">
                                    <label for="Email"><span style="color: red">*</span> Phone/Mobile:</label>
                                </div>
                                <div class="col-xs-4">
                                    <div style="padding:0" class="col-md-3">
                                        {!! Form::text('phone_country','',array('class'=>'form-control','id'=>'phone_country','placeholder'=>'country','validation'=>'validated_false')) !!}
                                    </div>
                                    <!-- <div class="col-md-3">
                                        {-!! Form::text('phone_area','',array('class'=>'form-control','id'=>'phone_area','placeholder'=>'area','validation'=>'validated_false')) !!-}
                                    </div> -->
                                    <div class="col-md-9" style="padding:0;padding-left: 15px;">
                                        {!! Form::text('phone_number','',array('class'=>'form-control','id'=>'phone_number','placeholder'=>'phone...','validation'=>'validated_false')) !!}
                                        @if($errors->has('phone_number'))
                                            <p class="text-danger error_from_backend">{{ $errors->first('phone_number') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-4 validation_status">
                                    <i class="fa fa-check-circle hidden_icon validated_true" style="color:green;font-size:19px;margin-top:9px;"></i>
                                    <i class="fa fa-times-circle hidden_icon validated_false" style="color:red;font-size:19px;margin-top:9px;"></i>
                                    <span class="text-danger validation_message"></span>
                                </div>
                            </div>

                            <div class="col-xs-10 col-xs-offset-1 margin-bottom2 business_type_row">
                                <div class="col-xs-4 text-right">
                                    <label for="Email"><span style="color: red">*</span> Business Type:</label>
                                </div>
                                <div class="col-xs-4">
                                    @php
                                    $business_type_data = App\Models\BusinessTypes::get()
                                    @endphp
                                    <select class="form-control" id="btype" name="btype" validation="validated_false">
                                        <option value="0">Select Your Business Type</option>
                                    @foreach($business_type_data as $business_type_singel)
                                        <option value="{{$business_type_singel->id}}">{{$business_type_singel->name}}</option>
                                    @endforeach
                                    </select>
                                   <!--  {-!! Form::select('btype',\App\Model\BdtdcBusinesType::lists('name','id'),'',array('class'=>'form-control','id'=>'btype')) !!-} -->
                                </div>
                                <div class="col-xs-4 validation_status">
                                    <i class="fa fa-check-circle hidden_icon validated_true" style="color:green;font-size:19px;margin-top:9px;"></i>
                                    <i class="fa fa-times-circle hidden_icon validated_false" style="color:red;font-size:19px;margin-top:9px;"></i>
                                    <span style="display: none;" class="text-danger validation_message invalid_btype">Select your business type</span>
                                </div>
                            </div>

                            <div class="col-xs-10 col-xs-offset-1 margin-bottom2 main_product_row">
                                <div class="col-xs-4 text-right">
                                    <label for="Email"><span style="color: red">*</span> Main Product:</label>
                                </div>
                                <div class="col-xs-4">
                                    <div style="padding:0" class="col-md-4">
                                        {!! Form::text('p1','',array('class'=>'form-control main_product_input','id'=>'p1','placeholder'=>'product','validation'=>'validated_false')) !!}
                                    </div>
                                    <div class="col-md-4">
                                        {!! Form::text('p2','',array('class'=>'form-control main_product_input','id'=>'product2','placeholder'=>'product')) !!}
                                    </div>
                                    <div class="col-md-4" style="padding:0;">
                                        {!! Form::text('p3','',array('class'=>'form-control main_product_input','id'=>'p3','placeholder'=>'product')) !!}
                                        @if($errors->has('phone_number'))
                                            <p class="text-danger error_from_backend">{{ $errors->first('phone_number') }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-4 validation_status">
                                    <i class="fa fa-check-circle hidden_icon validated_true" style="color:green;font-size:19px;margin-top:9px;"></i>
                                    <i class="fa fa-times-circle hidden_icon validated_false" style="color:red;font-size:19px;margin-top:9px;"></i>
                                    <span style="display: none;" class="text-danger validation_message invalid-p1">At least one main product required.</span>
                                </div>
                            </div>
                        {!! Form::close() !!}

                    </div>

                    <!--------------TAB CONTENT FOR CONFIRMATION STEP FOUR------------------>
    
                    <div style="padding: 1%;padding-left:37.5%" class="col-xs-8">
                        <button href="" style="width:180px;background:#1A4570" class="btn btn-primary btn-join form_slider_btn disabled_btn">Next</button>
                    </div>
                    <div class="col-xs-3 have_already_ac" style="padding-top: 17px;padding-left: 0px"> Already have an account? <a href="{{ URL::to('login',null ) }}">Sign in</a></div>

                </div>

            </div>
        </div>
    </div><?php //dd($step_location); ?>
@stop
@section('scripts')
<script type="text/javascript" src="{!! asset('assets/frontend/js/jquery.sticky.js' ) !!}"></script>
<script type="text/javascript" src="{!! asset('assets/frontend/js/bubble-text.js' ) !!}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/frontend/js/captcha/jquery.plugin.js' ) }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/frontend/js/captcha/jquery.realperson.js' ) }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/frontend/js/captcha/jquery.realperson.js' ) }}"></script>
{{-- <script type="text/javascript" src="{!! asset('assets/frontend/js/front_custom.js' ) !!}"></script>
 --}}
    <script language="javascript">

    $(document).ready(function(){
        $('.loader').fadeOut('slow');
    });
    
        var nav_tab,check_existing_user,show_prrsonal_info_of_register_member,check_password_length,check_if_number,is_validated_user,next_tab_transformer;
        nav_tab = ['email_registration','personal_information','company_information','confirmation'];
        var cross_brouser_support_animation = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        function validateEmail(sEmail) {
            // var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,8}|[0-9]{1,3})(\]?)$/;
            var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,8}|[0-9]{1,3})(\]?)$/;
            if (filter.test(sEmail)) {
                return true;
            }
            else {
                return false;
            }
        }

        show_prrsonal_info_of_register_member = function(data){
            $('.company_information_area').show().slideDown();
            $('.registered_member_first_name').html(data.first_name);
            $('.registered_member_last_name').html(data.last_name);
            $('.registered_member_email_address').html(data.email);
            $('.registered_member_created_at').html(data.creted);
            $('[name="user_id"]').val(data.id);
        }

        function show_error_icon(a){
            var relative_row = $(a).parent().parent();
                if(!$.trim(a.value).length){
                    $(a).attr('validation','validated_false');
                    relative_row.find('.validated_true').hide(500);
                    relative_row.find('.validated_false').show(500);
                }else{
                    $(a).attr('validation','validated_true');
                    relative_row.find('.validated_false').hide(500);
                    relative_row.find('.validated_true').show(500);
                    $(a).attr('style',"border:1px solid #e5e5e5");
                }
        }

        $(document).ready(function(){
            $('.invalid_firstname').hide();
            $('.invalid_lastname').hide();
            $('.invalid_company').hide();
            $('.invalid_country').hide();

            $('.first_name_val').keyup(function(){
                if( $.trim($('.first_name_val').val()) == ''){
                    $('.invalid_firstname').show(500);
                }
                else{
                    $('.invalid_firstname').hide(500);
                }
                show_error_icon(this);
            });

            $('.last_name_val').keyup(function(){
                if( $.trim($('.last_name_val').val()) == ''){
                    $('.invalid_lastname').show(500);
                }
                else{
                    $('.invalid_lastname').hide(500);
                }
                show_error_icon(this);
            });

            $('#company').keyup(function(){
                if( $('#company').val() == ''){
                    $('.invalid_company').show(500);
                }
                else{
                    $('.invalid_company').hide(500);
                }
                show_error_icon(this);
            });

            $('#country').change(function(){
                if( $('#country').val() == 0){
                    $(this).parent().parent().find('.validated_false').show(500);
                    $(this).parent().parent().find('.validated_true').hide(500);
                    $('.invalid_country').show(500);
                }
                else{
                    $('.invalid_country').hide(500);
                    $(this).parent().parent().find('.validated_false').hide(500);
                    $(this).parent().parent().find('.validated_true').show(500);
                }
                // show_error_icon(this);
            });
            $('#btype').change(function(){
                if( $('#btype').val() == 0){
                    $(this).parent().parent().find('.validated_false').show(500);
                    $(this).parent().parent().find('.validated_true').hide(500);
                    $('.invalid_btype').show(500);
                    $(this).attr('validation','validated_false');
                }
                else{
                    $('.invalid_btype').hide(500);
                    $(this).parent().parent().find('.validated_false').hide(500);
                    $(this).parent().parent().find('.validated_true').show(500);
                    $(this).attr('validation','validated_true');
                }
                // show_error_icon(this);
            });

             $('#p1').keyup(function(){
                if($('#p1').val() == ''){
                    $(this).parent().parent().parent().find('.validated_false').show(500);
                    $(this).parent().parent().parent().find('.validated_true').hide(500);
                    $('.invalid-p1').show(500);
                    $(this).attr('validation','validated_false');
                }
                else{
                    $(this).parent().parent().parent().find('.validated_false').hide(500);
                    $(this).parent().parent().parent().find('.validated_true').show(500);
                    $('.invalid-p1').hide(500);
                    $(this).attr('validation','validated_true');
                }
                // show_error_icon(this);
            });

            $('.main_product_input').keyup(function(){
                var product1 = $('#p1').val();
                var product2 = $('#product2').val();
                var product3 = $('#p3').val();
                var product1_field = $('[name="password"]');
                var relative_row = product1_field.parent().parent();
               
            });

        });

        var contn = $('[name="password"]').parent().parent();

        $(contn).find('.validation_message').html('<span class="vald-info" ><ul><li class="vald1">At least 6 Character and can not be more than 12 Character.</li> <li class="vald1">one special Character as [!@#$%^&*/\()^`.]</li></span>').show(500);


        $(contn).find('.validation_status').hide();


        var passLen = $('input[name="password"]');
        var regExpAlphpNum = "^(?=.*[!@#\$%\^&\*/\\()^`.])";

        $('input[name="password"]').keyup( function() {
          
           var len = passLen.val().length;

           $(contn).find('.validation_status').show(500);

            
            
            if(len >= 6){ 
                
                if(len<12){
                    $(this).attr('validation','validated_true');
                    $('.vald-info > ul > li').eq(0).css('color','green');
                    $('.vald-info > ul > li').eq(0).addClass('vald');
                    $('.vald-info > ul > li').eq(0).removeClass('vald1');
                }else{
                    $('.vald-info > ul > li').eq(0).css('color','red');
                    $('.vald-info > ul > li').eq(0).addClass('vald1');
                    $('.vald-info > ul > li').eq(0).removeClass('vald');
                    $(this).attr('validation','validated_false');
                }
            }else {
                $('.vald-info > ul > li').eq(0).css('color','red');
                $('.vald-info > ul > li').eq(0).addClass('vald1');
                $('.vald-info > ul > li').eq(0).removeClass('vald');
                $(this).attr('validation','validated_false');
            }

            if(!passLen.val().match(regExpAlphpNum)){
                $('.vald-info > ul > li').eq(1).css('color','red');
                $('.vald-info > ul > li').eq(1).addClass('vald1');
                $(this).attr('validation','validated_false');
            }else{
                $('.vald-info > ul > li').eq(1).css('color','green');
                $('.vald-info > ul > li').eq(1).addClass('vald');
                $('.vald-info > ul > li').eq(1).removeClass('vald1');
                $(this).attr('validation','validated_true');
            };
        });


            $(document).on({keyup:function(){
                var relative_row = $(this).parent().parent();
                if($('input[name="password"]').val() != $(this).val()){
                    $(this).attr('validation','validated_false');
                    // relative_row.find('.validated_true').hide(500);
                    // relative_row.find('.validated_false').show(500);
                    relative_row.find('.validation_message').html('<span class="text-danger">Password Not Matched.</span>').show(500);
                }else{
                    $(this).attr('validation','validated_true');
                    // relative_row.find('.validated_false').hide(500);
                    // relative_row.find('.validated_true').show(500);
                    relative_row.find('.validation_message').html('<span class="text-success">Password Matched!</span>').show(500);
                    $(this).attr('style',"border:1px solid #e5e5e5");
                }
                return;
            }},'[name="password_confirmation"]');
         

          
           
        
         $(document).on({keyup:function(){
                var relative_row = $(this).parent().parent();
                var lent = $(this).val().length;
                
                if(lent>=8){
                    // alert(relative_row);
                    relative_row.find('.validated_true').hide(500);
                    relative_row.find('.validated_false').show(500);
                }else{
                     relative_row.find('.validated_true').show(500);
                    relative_row.find('.validated_false').hide(500);
                }
                
            }},'[name="phone_number"]');

        
        check_if_number = function($_this){
  
            
          var relative_row = $_this.parent().parent().parent();
          // alert(relative_row);
          if( isNaN($_this.val()) || $_this.val() == '' ){
            $_this.attr('validation','validated_false');
            relative_row.find('.validated_true').hide(500);
            relative_row.find('.validated_false').show(500);
            if(relative_row.find('#id').attr('id') == 'phone_area'){
                alert ('phone_area');
            }
            relative_row.find('.validation_message').html('<span class="text-danger">Only numbers are allowed!!</span>').show(500);
          }else{
            $_this.attr('validation','validated_true'+" string");
            relative_row.find('.validated_false').hide(500);
            relative_row.find('.validated_true').show(500);
            relative_row.find('.validation_message').html('').show(500);
            $_this.attr('style',"border:1px solid #e5e5e5");
          }
          return;
        }
        
        is_validated_user = function(){
            if($('[name="prev_email"]').val().length>2){
                $('[name="email"]').val($('[name="prev_email"]').val());
                $('#text_email').html($('[name="prev_email"]').val());
                var active_area= $('a[href="#email_registration"]');
                active_area.removeClass('active_proces');
                active_area.find('.active_progress_icon').addClass('inactive_progress_icon').removeClass('active_progress_icon');
                next_tab_transformer();
            }
        }
        
        next_tab_transformer = function(current_active_form){
            $('.tab_list li.active').next().find('a').click();
            var next_active_form = $('.tab_list li.active a').attr('href');
            $('.visible_tab_list a[href="'+current_active_form+'"]').removeClass('active_proces');
            $('.visible_tab_list a[href="'+current_active_form+'"] span.active_progress_icon').removeClass('active_progress_icon').addClass('inactive_progress_icon');
            $('.have_already_ac').hide();
            //console.log($(''current_active_form +".." +next_active_form);
            var animation_class_next = "animated bounceIn";
            $(next_active_form).addClass(animation_class_next).one(cross_brouser_support_animation,function(){
                $(this).removeClass(animation_class_next);
                $('.visible_tab_list a[href="'+next_active_form+'"]').addClass('active_proces');
                $('.visible_tab_list a[href="'+next_active_form+'"] span.inactive_progress_icon').removeClass('inactive_progress_icon').addClass('active_progress_icon');
            })
        }
        

        $('document').ready(function(){
            $('#defaultReal').realperson();
            $('.hidden_icon').hide();
            $('.login_link').hide();
            $('.company_information_area').hide();
            
            
            $('.triger_next').click(function(e){
              e.preventDefault();
              //$('.form_slider_btn').click();
            })
            
            is_validated_user();
            

            $(document).on({'input paste keyup':function(){
                var url,email,relative_row;
                var relative_row = $(this).parent().parent();
                email = $(this).val();
                // console.log(email+'email here');
                if(validateEmail(email)){

                    $('#captcha_area').show();
                    $('#hiddeninput').hide();
                    $('.disabled_btn').show();

                    $('[name="prev_email"]').prev().html('<i class="fa fa-check-circle" style="font-size:16px;color:green;"></i><span style=" font-weight: bold;color: green;">Email valid</span>');
                    $(this).attr('validation','validated_true');
                    relative_row.find('.validated_false').hide(500);
                    relative_row.find('.validated_true').show(500);
                    relative_row.find('.validation_message').html('').show(500);
                    $(this).attr('style',"border:1px solid #e5e5e5");
                    url = $('[name="base_url"]').val()+"/check_existing_user/"+email;

                    $.get(url,function(r){
                        if(typeof r.id !== typeof undefined){
                            $('.form_slider_btn').hide();
                            $('.login_link').show();
                        }else{
                            $('.form_slider_btn').show();
                            $('.login_link').hide();
                        }
                    });
                    check_validation();

                }else{
                    $(this).attr('validation','validated_false');
                    relative_row.find('.validated_true').hide(500);
                    relative_row.find('.validated_false').show(500);
                    relative_row.find('.validation_message').html('<span class="text-danger" style="color:red;font-weight:bold;font-size:13px">Please enter a valid email address.</span>').show(500);
                    $('[name="prev_email"]').prev().html('<i class="fa fa-spinner fa-pulse" style="font-size:33px"></i><span style="    font-weight: bold;color: red;">Please enter a valid email address ...</span>');

                    $('#captcha_area').hide();
                    $('#hiddeninput').show();
                    $('.disabled_btn').hide();
                    check_validation();
                }
            }},'[name="prev_email"]');

            // *****************CHECK CAPTCHA ENTRHY IS CORRECT OR NOT************************** /
            $(document).on({submit:function(e){
              var message;
              e.preventDefault();
              $.post('jquery.realperson.php',$(this).serialize(),function(data){
               
                if(parseInt(data) ==1){
                  message = "Capcha Is matched thankyou !!!";
                }else{

                  message = "Captcha could not match Sorry!!!";

                }
                $('.response_status').text(message);

              });


            }}, '#myForm');
            
        })
        
        function check_validation(){
            var defaultReal = $('#defaultReal').attr('validated_check');
            var email = $('input[name="prev_email"]').val();
            
            var emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,8}|[0-9]{1,3})(\]?)$/;
            var valid = emailReg.test(email);
            var checksss = $('input[name="terms"]:checked').val();
            if(valid == true && checksss == 'on' && defaultReal =='validated') {
                $('.disabled_btn').removeAttr('disabled');
                $('input[name="prev_email"]').attr('ca_varifyed','true');
            }
            else{
                $('.disabled_btn').attr('disabled','disabled');
                $('input[name="prev_email"]').attr('ca_varifyed','false');
            }
        }

        $(document).on({'submit':function(e){
          e.preventDefault();
          var _this = $(this);
          $.post(_this.attr('action'),_this.serialize(),function(r){
                if(parseInt(r) == 1){
                    $('#defaultReal').attr('validated_check','validated');
                    $('#captcha_invalid').hide();
                    $('#captcha_valid').show();
                    check_validation();
                }else{
                    $('#defaultReal').attr('validated_check','');
                    $('#captcha_invalid').show();
                    $('#captcha_valid').hide();
                    check_validation();
                }
          });
        }}, '.captcha_form');

        $('#defaultReal').on('keyup',function(){
            $('.captcha_form').submit();
        });


            $('#captcha_area').hide();

            $('input[name="terms"]').click(function(){
                check_validation();
            });
            $('#defaultReal').keyup(function(){
                check_validation();
            });
          
            $(document).on({keyup:function(){
              check_if_number($(this))
            }},'[name="phone_country"]');
            $(document).on({keyup:function(){
              check_if_number($(this))
            }},'[name="phone_area"]');
             $(document).on({keyup:function(){
              check_if_number($(this))
            }},'[name="phone_number"]');
             $(document).on({keyup:function(){
              check_if_number($(this))
            }},'[name="terms"]');

            $(document).on({click:function(e){
                e.preventDefault();
                
                var current_active_form = $('.tab_list li.active a').attr('href');
                
                if(current_active_form == "#email_registration"){
                    var email = $(current_active_form+' [name="prev_email"]').val();
                    

                    var defaultReal = $('#defaultReal').attr('validated_check');
                    // var emailReg = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{8,}))$/);
                    var emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,8}|[0-9]{1,3})(\]?)$/;
                    var valid = emailReg.test(email);
                    var checksss = $('input[name="terms"]:checked').val();
                    if(valid == true && checksss == 'on' && defaultReal =='validated') {
                        $('[name="prev_email"]').prev().html('<i class="fa fa-spinner fa-pulse" style="font-size:33px"></i><span style="    font-weight: bold;color: #666;">Please Wait ...</span>');
                        $('.disabled_btn').removeAttr('disabled');
                    }
                    else{
                        $('.disabled_btn').attr('disabled','disabled');
                        $('[name="prev_email"]').prev().html('<i class="fa fa-spinner fa-pulse" style="font-size:33px"></i><span style="    font-weight: bold;color: red;">Please enter a valid email address ...</span>');
                    }


                    var varifyed = $(current_active_form+' [name="prev_email"]').attr('ca_varifyed');
                    if(varifyed == "true"){
                        $.get(window.location.origin+'/registration/email/'+email,function(r){
                            // alert (r);
                            //var email = $('[name="email"]').val(email);
                            if(parseInt(r) ==1){
                                $('[name="prev_email"]').prev().html("\
                                    <h3 class='confirm-msg' style='line-height:20px;font-weight:300'>A confirmation Email has been  sent to your\
                                    <br>\
                                     mailbox <span style='color: #19446F;font-weight:600'>"+email+"</span></h3>\
                                    <br>\
                                    <p class='check-msg'>Please sign into your Email and click on the verification link within 24 hours to complete your registration.</p>\
                                    <br>\
                                     <div class='col-md-12 padding_0' style='background-color:#fff; padding-bottom:5%;'>\
                                         <div class='col-sm-12' style='margin-left:-15px;'>\
                                         <div id='spam-msg' onMouseOver='show_sidebar()'>I have not received the Email</div>\
                                                    <ul id='spam-msg-list' onMouseOver='show_sidebar()' onMouseOut='hide_sidebar()'>\
                                                                <li style='padding-bottom:8px'>Please check your spam folder <br>If you have not received the Email</li>\
                                                                <li style='padding-bottom:8px'><span class='mouse-click' style='cursor:pointer;'>Click here to resend Email</span></li>\
                                                                <li style='padding-bottom:8px'>Have not received ? <br><a href='{{ URL::to('join',null )}}'>Try using another Email address</a></li>\
                                                        </ul>\
                                                </div>\
                                        </div>\
                                ");
                                $('[name="prev_email"]').blur();
                                $('[name="prev_email"]').parent().next().hide();
                                $('[name="prev_email"],.reg_aditional_text').hide();
                                $('.form_slider_btn').hide();
                                $('.captcha_form').hide();
                                $('#email_label').hide();
                                $('.have_already_ac').hide();
                            }else{
                                alert (r);
                                $('[name="prev_email"]').prev().html("<span style='color:red;font-weight:bold;font-size:11px'>A verification email could not sent to this email...</span>");
                                $('[name="prev_email"]').blur();
                                $('.captcha_form').show();
                                $('#email_label').show();
                                $('.have_already_ac').show();
                            }
                            
                        })

                        return false;
                    }else{
                        $('[name="email"]').val(email);
                        $('#text_email').html(email);
                    }
                    
                }
                $(current_active_form+' input[validation="validated_true"]').attr('style',"border:1px solid #e5e5e5");
                // if($(current_active_form+' input[validation="validated_false"]').length>0){
                if($(current_active_form+' [validation="validated_false"]').length>0){
                    // $(current_active_form+' input[validation="validated_false"]').attr('style',"border:1px solid red");
                    $(current_active_form+' [validation="validated_true"]').attr('style',"border:1px solid #e5e5e5");
                    $(current_active_form+' [validation="validated_false"]').attr('style',"border:1px solid red");
                }else{

                    if(current_active_form == '#personal_information'){
                        $('.have_already_ac').hide();
                        var $_form,url;
                        $_form = $('.user_registration_form');
                        url = $_form.attr('action');
                        // alert ($_form.serialize());
                        $.post(url,$_form.serialize(),function(r){
                            if(r[0] == 2){
                                alert (r[1]);
                            }else{
                                show_prrsonal_info_of_register_member(r);
                                var animation_class = 'animated zoomOut';
                                $(current_active_form).addClass(animation_class).one(cross_brouser_support_animation, function(){
                                    $(this).removeClass(animation_class);
                                    next_tab_transformer(current_active_form);
                                });
                            }
                                
                        });
                    }

                    if(current_active_form == '#company_information'){
                        $('.company_information_area').show().slideUp();
                        var $_form,url;
                        $_form = $('.user_company_form');
                        url = $_form.attr('action');
                        $.post(url,$_form.serialize(),function(r){
                            if(r[0] == 2){
                                alert (r[1]);
                            }else{
                                var url = $('[name="base_url"]').val()+"/gratings";
                                $( "#home_b" ).load(url,function(){
                                    $('.gratings_user_name').html(r);
                                });
                            }
                        })
                        $('.have_already_ac').hide();
                    }

                    
                }
            }},'.form_slider_btn');

            $(document).on({change:function(){
                var cid = $(this).val();
                var ccode = $('#country option[value='+cid+']').attr('data-ccode');
                var country_code = $('#country option[value='+cid+']').attr('data-cpcode');
                if(cid == 0){
                    $('#iso_code').attr('src',window.location.origin+'assets/frontend/images/no-image.jpg');
                    $('#phone_country').val(0);
                    $('#phone_country').attr('validation','validated_false');
                    $(this).attr('validation','validated_false');
                    
                }else{
                    var iso_code_2 = ccode.toLowerCase();
                    $('#iso_code').attr('src',window.location.origin+'/assets/frontend/images/flags/'+iso_code_2+'.png');
                    $('#phone_country').val(country_code);
                    $('#phone_country').attr('validation','validated_true');
                    $(this).attr('validation','validated_true');
                }
                
            }},'#country');

            $(document).on({
                keyup: function() {
                    var country_id;
                    var iso_code_2;
                    var country_code;
                    $(this).autocomplete({
                        source: window.location.origin + "/country_suggesion/" + $(this).val(),
                        select: function(event, ui) {
                            country_id = ui.item.id;
                            iso_code_2 = ui.item.iso_code_2;
                            country_code = ui.item.country_code;
                            $(this).prev().val(country_id);
                            iso_code_2 = iso_code_2.toLowerCase();
                            $('#iso_code').attr('src',window.location.origin+'/assets/frontend/images/flags/'+iso_code_2+'.png');
                            $('#phone_country').val(country_code);
                        },
                        html: true,
                        open: function(event, ui) {
                            $('.ui-autocomplete').css('z-index', '9999');
                        }
                    });
                }
            }, 'input[name="country_suggession"]');

            

        if($('[name="step_location"]').val() == '#company_information'){
            var step_data = {
                first_name:'{{$user->first_name ?? ""}}',
                last_name : '{{$user->last_name ?? ""}}',
                email : '{{$user->email ?? ""}}',
                creted : '{{$user->created_at ?? ""}}',
                id : '{{$user->id ?? ""}}'
            };

            is_validated_user();
            show_prrsonal_info_of_register_member(step_data);
        }else{

        }



        function show_sidebar()
        {
        document.getElementById('spam-msg-list').style.display="block";
        }

        function hide_sidebar()
        {
        document.getElementById('spam-msg-list').style.display="none";
        }
        $(document).ready(function(){
            $('.send_mail_again').on('click','.mouse-click',function(){
                var email = $('input[name="prev_email"]').val();
                $.get(window.location.origin+'/registration/email/'+email,function(r){
                                //var email = $('[name="email"]').val(email);
                                if(parseInt(r) ==1){
                                    $('.mouse-click').html('Email has been sent to your box successfully');
                                }else{
                                    $('.mouse-click').html('resend email failed');
                                }
                                
                            });
                });


        });
        
    </script>

@stop