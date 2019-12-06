@extends('frontend.layouts.master-login')
@section('page_css')
<link property='stylesheet' href="{!! asset('assets/frontend/css/signin.css') !!}" rel="stylesheet">
@endsection
@section('title', 'Login')
@section('page_content_title','Login')

@section('content')

<div class="container" >
<div class="row" style="background: #fff!important;margin-top: .5%;" >
    <div class="col-md-12 box" style="margin: 0px;padding-bottom: 4%">
        <div id="log_img" class="col-md-7" style="padding: 58px 52px 20px">
            <img itemprop="image" class="img-responsive"  src="{{ asset('assets/frontend/images/login.jpg')}}" alt="login">
        </div>
            <div  style="margin-top:5%;padding-bottom: 5.2%;" id="shodow" class="col-md-4 padding_0" >
                {!! Form::open(['route' => 'login.store']) !!}
               @csrf
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
                        {!! Form::email('email', null, ['placeholder' => 'Email','type'=>'email', 'class' => 'form-control productview', 'required' => 'required'])!!}
                    </div>

                    <!-- Password field -->
                    <div style="" class="form-group">
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
                        <div class="col-md-8"> <a itemprop="url" href="{{ URL::to('forgot_password',null)}}" id="forget-password">
        Forgot password? </a> </div>
                     <div class="col-md-4"><a itemprop="url" href="{{ URL::to('join')}}"><b>Join Free</b></a></div>
                    </div>
                    <!-- <div class="shad"></div>
                    <div style="float:left"><h5>Sign in with: </h5></div> -->
                        <div style="padding-left: 4%;" class="social-icons pull-left">
                            <ul class="nav navbar-nav">
                            

                                <!-- <li><a href="https://www.facebook.com/bdtdc/" target="_blank"><i class="fa fa-facebook-square" style="font-size: 25px;"></i></a></li>
                                <li><a href="https://twitter.com/bdtdc" target="_blank"><i class="fa fa-twitter-square" style="font-size: 25px;"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/kazi-ahmed-10834457?trk=hp-identity-photo" target="_blank"><i class="fa fa-linkedin-square" style="font-size: 25px;"></i></a></li> -->
                            </ul>

                        </div>
                        </div>
                {!! Form::close() !!}

            </div>
        </div>
        
        </div>
        <br>
   

@endsection
@section('scripts')


   
@stop