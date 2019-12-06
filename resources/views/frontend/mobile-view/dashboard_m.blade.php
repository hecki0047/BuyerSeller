<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="language" content="english"> 
    <meta name="_token" content="{!! csrf_token() !!}"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="icon" type="image/png" href="{!! asset('favicon-32x32.png') !!}" sizes="32x32" />
          <link rel="icon" type="image/png" href="{!! asset('favicon-16x16.png') !!}" sizes="16x16" />
          <link rel="icon" type="image/png" href="{!! asset('favicon-8x8.png') !!}" sizes="16x16" />
          <?php
            $canonical_dynamic = 'http'.(isset($_SERVER['HTTPS']) ? 's' : '').'://'."{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
          ?>
          <link rel="canonical" href=""/>
          <link rel="alternate" href="" hreflang="en-us">
          <title>{{ 'Largest Bangladesh B2B marketplace for Suppliers, Manufacturers & Exporters | Buyerseller.asia'}}</title>
            <meta name="google-site-verification" content="vZytfNlYPQtyu9c7o1Wky_4_N4YSSpeFwfQn5BKLAyY" />
<meta name="title" content="{{  'Largest Bangladesh B2B marketplace for Suppliers, Manufacturers & Exporters | Buyerseller.asia'}}" />
<meta name="keywords" content="{{'Bangladesh B2B Marketplace,Bangladesh B2B online marketplace, B2B online marketplace in Bangladesh, B2B platform in Bangladesh, Bangladesh B2B online platform, B2B Suppliers in Bangladesh, Global b2b marketplace, B2B online marketplace, B2B online platform, b2b ecommerce platform'}}" />

<meta name="description" content="{{ 'Find out the best Manufacturers, Suppliers, Exporters, Wholesalers & Products on Buyerseller.asia, the largest b2b marketplace in South Asia'}}"/>

<meta property="og:title" content="{{  'Largest Bangladesh B2B marketplace for Suppliers, Manufacturers & Exporters'}}"/>
<meta name="Subject" content="{{  'b2b marketplace, B2B portal, Online marketplace, b2b online marketplace, Bangladesh B2B marketplace, B2B online Marketplace in Bangladesh'}}" />
<meta name="page-topic" content="{{  'Find out the best Manufacturers, Suppliers, Exporters, Wholesalers Products on Buyerseller.asia, the largest b2b marketplace in South Asia.'}}" />
<meta name="copyright" content="Copyright © Bangladesh Trade Development Council" />
<meta name="owner" content="Bangladesh Trade Development Council. (Buyerseller.asia)" />
<meta name="author" content="Name: Kazi Ahmed, Mobile: +8801751681223, Address: Baitush Shafqah, House: 818, Road: 12, Avinue: 06, Mirpur DOHS, Dhaka 1216, Bangladesh, E-mail: info@bdtdc.com, Website: http://www.bdtdc.com" />
<!-- <meta content='Bangladesh Trade Development Council' href='https://plus.google.com/+Bdtdc/posts' name='author'/> -->
<meta content="https://plus.google.com/+Bdtdc" name="author">

          @include('mobile-view.layout.stylesheet')
          <!-- Start of buyerseller Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=04eea66d-9366-4e25-bd14-150d9e210252"> </script>
<!-- End of buyerseller Zendesk Widget script --> 

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
@include('mobile-view.layout.topbar_m')
  @yield('dashboard_content')
  
  @include('mobile-view.layout.footer_m')

 <!--  <div data-target-id="default" class="chat_div" style="position:fixed;right:0px;bottom:50%;cursor:pointer;">
  <i style="font-size: 25px;" class="fa fa-comments" aria-hidden="true"></i>
  </div> -->
  @include('frontend.mobile-view.scripts')
  @yield('topbar_m_script')
    <script type="text/javascript">       
      $(document).ready(function(){
        $(document).on({click:function(e){        
          e.preventDefault();       
          var search_options = $('select[name="search"].all_search_options').val();       
          var search_key = $('input[name="key"].search_key').val();       
          window.location.href = window.location.origin+'/search-product/search=='+search_options+'+..+key=='+search_key+'+..+country==0+..+buyer_protection==false+..+gold_supplier==false+..+assessed_supplier==false+..+filter_by_main_market==0+..+filter_by_total_revanue==0+..+filter_by_employe==0';       
        }},'input[value="Search"].all_search');    
      });

      $('.jn_active').click(function(){
        $('#myModal2').modal('show');
        $('.jn_make_active').click();
      });

      $('.si_active').click(function(){
        $('#myModal2').modal('show');
        $('.si_make_active').click();
      });

    </script>
    </body>
</html>