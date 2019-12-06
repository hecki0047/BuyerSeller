<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="language" content="english"> 
    <meta name='robots' content='noindex,follow' />
    <meta name="_token" content="{!! csrf_token() !!}"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="icon" type="image/png" href="{!! asset('/assets/frontend/images/favicon/favicon-32x32.png') !!}" sizes="32x32" />
          <link rel="icon" type="image/png" href="{!! asset('/assets/frontend/images/favicon/favicon-16x16.png') !!}" sizes="16x16" />
          <link rel="icon" type="image/png" href="{!! asset('/assets/frontend/images/favicon/favicon-8x8.png') !!}" sizes="16x16" />
          <?php
            $canonical_dynamic = 'http'.(isset($_SERVER['HTTPS']) ? 's' : '').'://'."{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
          ?>
          <link rel="canonical" href=""/>
          <link rel="alternate" href="" hreflang="en-us">
          <title>@if(isset($title))
          {{ ucwords($title) }}
                  @else
                  BuyerSeller
                  @endif</title>
          <meta name="google-site-verification" content="vZytfNlYPQtyu9c7o1Wky_4_N4YSSpeFwfQn5BKLAyY" />
          <meta name="google-site-verification" content="DtFuBIQ0elAm4XGkO65gE26i1FlheVBWnixTsRzC8gA" />


<meta name="keywords" content="{{ $keyword ?? 'Bangladesh B2B Marketplace,Bangladesh B2B online marketplace, B2B online marketplace in Bangladesh, B2B platform in Bangladesh, Bangladesh B2B online platform, B2B Suppliers in Bangladesh, Global b2b marketplace, B2B online marketplace, B2B online platform, b2b ecommerce platform'}}" />

<meta name="description" content="{{ $description ?? 'Find out the best Manufacturers, Suppliers, Exporters, Wholesalers & Products on BuyerSeller, the largest b2b marketplace in South Asia'}}"/>

<meta property="og:title" content="{{ $title ?? 'Bangladesh B2B marketplace for Suppliers, Manufacturers & Exporters'}}"/>
<meta name="Subject" content="{{ $keyword ?? 'b2b marketplace, B2B portal, Online marketplace, b2b online marketplace, Bangladesh B2B marketplace, B2B online Marketplace in Bangladesh'}}" />
<meta name="page-topic" content="{{ $description ?? 'Find out the best Manufacturers, Suppliers, Exporters, Wholesalers Products on BuyerSeller, the largest b2b marketplace in South Asia.'}}" />
<meta name="copyright" content="Copyright © Bangladesh Trade Development Council" />
<meta name="owner" content="Bangladesh Trade Development Council. (BuyerSeller)" />
<meta name="author" content="Name: Kazi Ahmed, Mobile: +8801751681223, Address: Baitush Shafqah, House: 818, Road: 12, Avinue: 06, Mirpur DOHS, Dhaka 1216, Bangladesh, E-mail: info@buyerseller.asia, Website: http://www.buyerseller.asia" />
<!-- <meta content='Bangladesh Trade Development Council' href='https://plus.google.com/+Bdtdc/posts' name='author'/> -->
<meta content="https://plus.google.com/+Bdtdc" name="author">
<!-- Facebook Pixel Code -->

<!-- <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=404691023196565&ev=PageView&noscript=1"
/></noscript> -->


<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<!-- <link href="https://plus.google.com/+Bdtdc" rel="author"/> -->
<!-- <meta name="distribution" content="Global" />
<meta name="coverage" content="Worldwide" />
<meta name = "Server" content = "New" />
<meta name="reply-to" content=" info@bdtdc.com" />
<meta name="classification" content="Bangladesh garments, exporters, suppliers, Wholesalers, garments exporters, clothing suppliers, bangladesh clothing, Bangladesh Suppliers, Bangladeshi Suppliers, Trade in Bangladesh" /> -->



          @include('frontend.layouts.stylesheet-home')
          @yield('page_css')
          @yield('own_styles')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>  
<body itemscope itemtype="http://schema.org/WebPage">
 <meta itemprop="accessibilityControl" content="fullKeyboardControl">
 <meta itemprop="accessibilityControl" content="fullMouseControl">
 <meta itemprop="accessibilityHazard" content="noFlashing">
 <meta itemprop="accessibilityHazard" content="noMotionSimulation">
 <meta itemprop="accessibilityHazard" content="noSound">
 <meta itemprop="accessibilityAPI" content="ARIA">
 <a href="https://plus.google.com/104450985808854201025" rel="publisher"></a>
<div class="clearfix">
</div>
 
<!-- BEGIN CONTAINER -->

<section style="background: #fff;box-shadow: 3px 3px 3px rgba(0,0,0,.1);position: relative; z-index: 1;">
@if(isset($homepage))
<div class="container">
@else
<div class="container">
@endif


<div class="row topbar_sha" style="padding-bottom:25px;box-shadow:none;">
  <div class="col-xs-12 col-sm-12 col-md-12 padding_0" >
<div class="col-sm-3" itemscope itemtype="http://schema.org/Organization" style="margin-top: 5px;  float: left;">
    <a style="margin-left: 0; background-image: none; height: auto; display: block;width: 100%; " rel="home" itemprop="url" title="Manufacturers-Suppliers"  href="{{ URL::to('/',null)}}">
      <img alt="logo" style=" width: 91%; height: auto" itemprop="logo" class="loggg" src="{{ asset('assets/frontend/images/logo.png') }}" />
     
    </a>
    <!-- <div class="main-name-hold">
      <a  rel="home" itemprop="url" title="Manufacturers-Suppliers" class="bd-trade" href="{{ URL::to('/',null)}}" ></a>
    </div> -->
  </div>



<div class=" col-sm-9 col-md-9" style="float: right;" itemscope itemtype="http://schema.org/SiteNavigationElement" >
<div class="col-md-9">
  
</div>
  <div class="col-sm-3 padding_0">
    <div aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="mainmenu pull-right padding_0">
      <ul class="nav navbar-nav collapse navbar-collapse padding_0" itemscope itemtype="http://schema.org/SiteNavigationElement">
        @if (Sentinel::check())
     <li class="navigation-menu-list-li"><a itemprop="url" href="{{ URL::to('ServiceChannel/pages/for_buyer/35',null) }}">Help Center</a> </li> 
        @else
        <li style=""><a itemprop="url" href="{{ URL::to('login',null) }}" class="" data-toggle="">Sign In</a></li>
        <li style="margin-left: 0%;padding: 0px;border-left: 1px solid #cecece;height: 12px;top: 8px;"></li>
        <li style=" margin-left: 0%;"><a itemprop="url" href="{{ URL::to('join',null) }}" class="join_btn">Join Free</a></li>
        
        @endif

        @if (Sentinel::check())
            <?php
              $role = App\Models\Role_user::where('user_id',Sentinel::getUser()->id)->first();
              $dashboard_route = ($role->role_id ==3) ? "company/dashboard" : 'buyer/dashbord';
            ?>
        @endif
        @if (Sentinel::check())
        <li class="dropdown" style="z-index: 999 !important;"><a itemprop="url" href="#">My Account 
        @if (Sentinel::check())
        <span id="total_notification" title=""></span>
        @endif
        <i class="fa fa-angle-down"></i></a> 
          <ul role="menu" class="sub-menu submenu2" style="background-color: #fff" itemscope itemtype="http://schema.org/SiteNavigationElement">

          @if (Sentinel::check())
            <li><a itemprop="url" href="{{ URL::to($dashboard_route,null)}}">Dashboard</a></li>
          @endif

            <li title=""><a itemprop="url" href="{{ URL::to('default','message') }}">New Inquiry 
              @if (Sentinel::check())
              <span title="" class="" style="background-color: #3379b5;border-radius: 50% !important;padding: 2px 4px;color: #ffffff;text-align: center;"></span>
              @endif
            </a></li>
            <li title="" style="margin-bottom: 10px"><a itemprop="url" href="{{ URL::to('Mybuying-Request',null) }}">New Quote 
              @if (Sentinel::check())
              <span title="" id=""></span>
              @endif
            </a></li>
            
            <li class="sub-split" style=" background-color: #fff;   border-top: 1px solid #ddd;
    list-style: none outside none;padding-top: 5px;line-height: 22px;color: #333;font-weight: 700;white-space: nowrap;box-shadow: none">
                For Buyer</li>
              <li><a itemprop="url" href="{{ URL::to('get-quotations')}}" target="_blank" class="" style="">Get Quotations Now</a>
              </li>
               <li class="navigation-menu-list-li"><a itemprop="url" href="{{ URL::to('Mybuying-Request',null) }}" class="navigation-menu-list-li-a">Manage Buying Requests</a></li>
               <li style="margin-bottom: 10px" class="navigation-menu-list-li"><a itemprop="url" href="{{ URL::to('list/view/requested/sample',null) }}" class="navigation-menu-list-li-a">Manage Sample Requests</a></li>
               <li class="sub-split" style="background-color: #fff;   border-top: 1px solid #ddd;
               list-style: none outside none;padding-top: 5px;line-height: 22px;color: #333;font-weight: 700;white-space: nowrap;box-shadow: none">For Supplier</li>
               <li class="navigation-menu-list-li"><a itemprop="url" target="_blank" href="{{ URL::to('dashboard','product') }}" class="navigation-menu-list-li-a">Display New Products</a></li>
               <li class="navigation-menu-list-li"><a itemprop="url" target="_blank" href="{{ URL::to('dashboard','company_site') }}" class="navigation-menu-list-li-a">Company & Site</a></li>
               <li class="navigation-menu-list-li"><a itemprop="url" target="_blank" href="{{ URL::to('quotation/management',null) }}" class="navigation-menu-list-li-a">Quotes Management</a></li>
               @endif
              @if (Sentinel::check())
             <li class="navigation-menu-list-li"><a style="font-size: 14px;color: #000 !important;font-weight: 600;letter-spacing: .5px;" class="btn" href="{{ URL::to('logout',null) }}"> Logout </a> </li>
              @endif

          </ul>
        </li>
       
      </ul>
    </div>
  </div>
</div>
  </div>
  </div>
</div>
  </div>
</section>
  @yield('content')
  
 <div class="row padding_0" style="border-top: 1px solid rgba(0,0,0,0.1);padding-top: 2.5%;margin-top: 1.0%">
  <div class="col-sm-2 col-md-2">
  </div>
  <div class="col-md-8 col-sm-8" style="width: 860px;">
      <div class="col-sm-12 col-md-12">
         <div class="col-md-5" style="max-width: 300px; padding: 0" >Free App
       <img style="width:93px;height:30px;opacity:1; margin-left: 10px;" src="{!!asset('assets/frontend/images/Google-Play-button.png')!!}"  alt="goole play" />
       <img style="width:103px;height:30px;opacity:1" src="{!!asset('assets/frontend/images/apple-app.png')!!}" alt="apple apps" />
      </div>
        <div class="col-md-2 padding_0 foot-don" style="width: 200px; padding-left: 15px;">Download Manager <img style="width:32px;height:32px;opacity:1;" src="{!!asset('assets/frontend/images/download-icon.png')!!}" alt="download butoon"/>
      </div>
    <div class="col-md-5" style="padding-left: 5px;padding-right:0px; max-width:300px; float: right;">
            
      <div class="foot-res foot-flw" style="">Follow Us on</div>
      <div itemscope itemtype="http://schema.org/ProfessionalService" class="col-sm-8 footer-media" style="padding: 0; padding-top: 3px;">
       <a rel="external" itemprop="url"  style="line-height: 3;" href="https://www.facebook.com/bdtdc/" target="_blank"> <i style="font-size: 32px; padding-right: 7px !important;" class="fa fa-facebook-square" ></i></a>
         <a rel="external" itemprop="url" style="line-height: 3;" href="https://twitter.com/bdtdc" target="_blank"><i style="font-size: 32px; padding-right: 7px !important;" class="fa fa-twitter-square" ></i></a>
        <a rel="external" itemprop="url" style="line-height: 3;" href="https://www.youtube.com/c/Bdtdc" target="_blank"><i style="font-size: 32px; padding-right: 7px !important;" class="fa fa-youtube-square" ></i></a>
        <a rel="external" itemprop="url" style="line-height: 3;" href="https://plus.google.com/+Bdtdc" target="_blank"><i style="font-size: 32px; padding-right: 7px !important;" class="fa fa-google-plus-square"></i></a>
        <a rel="external" itemprop="url" style="line-height: 3;" href="https://www.linkedin.com/company/bdtdc" target="_blank"><i style="font-size: 32px;padding-right: 7px !important;" class="fa fa-linkedin-square" ></i></a>
      </div>

    </div>

    </div>

    </div>
    <div class="col-sm-2 col-md-2">
  </div>
    </div>

   <!-- <div class="col-md-3 padding_0 foot-don" style="">
       <form action="{!! URL::to('subscript/confirm-email') !!}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <div class="input-group subsc">
          <input name="email"  type="email" class="form-control" placeholder="Give your E-mail" aria-describedby="basic-addon2" required>
          <span class="input-group-addon" id="basic-addon2" style="padding:0px"><button style="border:0 none; background:#255E98; height: 34px;">Subscribe</button> </span> 
       </div>
      </form> 
    </div> -->
     

<div class="row padding_0">
    <div class="col-sm-12 col-xs-12 padding_0" style=" padding-left: 45px;">
          <div class="text-center"  style="margin-top: 10px; margin-bottom: 15px;">
               <!--  
                <a target="_blank" style="color:#696763; display: inline-block;padding: 0 5px" href="{{URL::to('limited/offers')}}">Limited Offers</a>
                 -->
                <a target="_blank" style="color:#696763; display: inline-block; " href="{{URL::to('wholesale')}}">Wholesaler |</a>
                <a target="_blank" style="color:#696763; display: inline-block; " href="{{URL::to('Bdsource-home-page')}}">BdSource |</a>
                <a target="_blank" style="color:#696763; display: inline-block; " href="{{URL::to('bangladesh-suppliers')}}">Bangladesh Suppliers |</a>
                <a target="_blank" style="color:#696763; display: inline-block; " href="{{URL::to('bangladesh-garments')}}">Bangladesh Garments |</a>
                <a target="_blank" style="color:#696763; display: inline-block; " href="{{URL::to('selected/supplier-products')}}">Selected Suppliers |</a>
                <a target="_blank" style="color:#696763; display: inline-block; " href="{{URL::to('online-marketplace')}}">Shop by Category |</a>
                <a target="_blank" style="color:#696763; display: inline-block;padding: 0 5px " href="{{URL::to('sitemap')}}">Sitemap</a>
      </div>

      
    <div style="padding-bottom:8%;color: #696763;" class="row">
      <div style="text-align:center;margin-left:auto; margin-right:auto;margin-bottom: 2px"> <!-- <a style="color:#696763" href="{{URL::to('FooterPage/pages/Contact_Us',20)}}"> Contact Us </a> -->
              <a style="color:#696763;" href="{{URL::to('contact')}}"> Contact Us |</a>
              <a target="_blank" style="color:#696763;" href="{{URL::to('product_listing_policy')}}">Product Listing Policy |</a> 
              <a target="_blank" style="color:#696763;" href="{{URL::to('Intellectual')}}"> Intellectual Property Policy and Infringement Claims |</a>
               <a target="_blank" style="color:#696763;" href="{{URL::to('Policies_Rules')}}">Privacy Policy</a> 
               <a target="_blank" style="color:#696763" href="{{URL::to('terms_use')}}">Terms of Use</a>
         </div>
        <div style="text-align:center;margin-left:auto; margin-right:auto;"><span style="position: relative;" data-toggle="tooltip" data-title="“Copyright© 2015-<?php echo date("Y"); ?> BuyerSeller.Asia. This entire website and it’s content is protected by United States copyright, registered with the Library of Congress, Washington, D.C. and by The Canadian Government, and other intellectual property laws, and may not be reproduced, rewritten, distributed, re-disseminated, transmitted, displayed, published or broadcast, directly or indirectly, in any medium without the prior written permission of BuyerSeller.”">Copyright©</span> 2015-<?php echo date("Y"); ?>, BuyerSeller.Asia. All Rights Reserved.
        </div>
    </div>
</div>

</div>
     @if(Sentinel::check())
         <input type="hidden" id="user_id" value="{{Sentinel::getUser()->id}}">
         @else
         <input type="hidden" id="user_id" value="0">
      @endif
      <!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
  @include('frontend.layouts.scripts')
  @include('frontend.layouts.scripts-notifications')
    <script type="text/javascript">       
      $(document).ready(function(){
        $(document).on({click:function(e){        
          e.preventDefault();       
          var search_options = $('select[name="search"].all_search_options').val();
          var search_key = $('input[name="key"].search_key').val();
          // window.location.href = window.location.origin+'/search-product/search=='+search_options+'+..+key=='+search_key+'+..+country==0+..+buyer_protection==false+..+gold_supplier==false+..+assessed_supplier==false+..+filter_by_main_market==0+..+filter_by_total_revanue==0+..+filter_by_employe==0';
          if(search_key == ''){
            var query_str = ' ';
          }else{
            var query_str = search_key.split(' ').join('-');
            var query_str = query_str.split('/').join('-');
          }
          window.location.href = window.location.origin+'/'+query_str+'/search?t='+search_options;
        }},'input[value="Search"].all_search');
        

      });


    </script>
    </body>
</html>