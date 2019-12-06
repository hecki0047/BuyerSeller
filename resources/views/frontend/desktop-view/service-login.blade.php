@extends('fontend.master-login')

@section('title', 'Login')
@section('page_content_title','Login')
@section('page_css')
<link property='stylesheet' href="{!! asset('css/signin.css',is_secured()) !!}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
<div class="row" style="background: #fff!important;margin-top: .5%;">
    <div class="col-md-12 box" style="margin: 0px;padding-bottom: 4%">
        <div id="log_img" class="col-md-7">
            <div class="col-md-10">
            <img itemprop="image" class="img-responsive" style="margin-top:9%;padding-left:10%;padding-bottom:0%;" src="{{ asset('assets/service/login.jpg',is_secured())}}">
        </div>
        </div>
            <div  style="margin-top:5%;padding-bottom:5%;"id="shodow" class="col-md-4 padding_0" >
                {!! Form::open(['route' => 'ServiceLoginPost']) !!}
                @csrf
    			<input type="hidden" name="continue" value="{{$return_url}}">
                    @if (session()->has('flash_message'))
                        <div class="alert alert-success">
                            {{ session()->get('flash_message') }}
                        </div>
                    @endif
    
                    @if (session()->has('error_message'))
                        <div class="alert alert-danger">
                            {{ session()->get('error_message') }}
                        </div>
                    @endif

                    <!-- Email field -->
                    <div id="login_field" class="col-md-12">
                    <div class="form-group">
                    <label>Account</label>
                        {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control productview', 'required' => 'required'])!!}
                    </div>

                    <!-- Password field -->
                    <div align="" class="form-group">
                        <label>Password</label>              
                        {!! Form::password('password', ['placeholder' => 'Password','class' => 'form-control productview', 'required' => 'required'])!!}
                    </div>

                    <div class="checkbox">
                        <!-- Remember me field -->
                        <div class="form-group">
                            <label>
                                {!! Form::hidden('remember', 'remember') !!} 
                                @if(isset($return_url))
                                {!! Form::hidden('return_url', $return_url) !!}
                                @endif
                            </label>
                        </div>
                    </div>
                  

                    <!-- Submit field -->
                    <div class="form-group">
                    <!-- <a class="btn btn btn-lg btn-primary btn-block" href="">Sign in</a> -->
                        {!! Form::submit('Sign In', ['class' => 'btn btn btn-lg btn-primary btn-block','style'=>'padding-bottom: 26px;border-radius: 5px!important;']) !!}
                    </div>
                     <div style="padding:10px 0px 5px 2px; text-align:left;">
                        <div class="col-md-8"> <a itemprop="url" href="{{ URL::to('forgot_password',null,is_secured())}}" id="forget-password">
        Forgot password? </a> </div>
                     <div class="col-md-4"><a itemprop="url" href="{{ URL::to('join',null,is_secured())}}"><b>Join Free</b></a></div>
                    </div>
                    <div class="shad"></div>
                    
                        </div>
                {!! Form::close() !!}

            </div>
        </div>       
        </div>
        <br>
@endsection