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
          <link rel="alternate" href="http://www.bdtdc.com" hreflang="en-us">
<title>{{ $title ?? 'Bangladesh Trade | best online marketplace | buyerseller.asia' }} </title>
            <meta name="google-site-verification" content="vZytfNlYPQtyu9c7o1Wky_4_N4YSSpeFwfQn5BKLAyY" />
<meta name="title" content="{{ $title ?? 'Bangladesh Trade | best online marketplace | buyerseller.asia' }}" />
<meta name="keywords" content="{{ $keyword ?? 'Bangladesh B2B Marketplace,Bangladesh B2B online marketplace, B2B online marketplace in Bangladesh, B2B platform in Bangladesh, Bangladesh B2B online platform, B2B Suppliers in Bangladesh, Global b2b marketplace, B2B online marketplace, B2B online platform, b2b ecommerce platform' }}" />

<meta name="description" content="{{ $description ?? 'buyerseller.asia, the best Eco-minded online B2B platform for connecting global buyers with manufacturers, suppliers and exporters within the Bangladesh Trade' }}"/>

<meta property="og:title" content="Largest Bangladesh B2B marketplace for Suppliers, Manufacturers & Exporters"/>
<meta name="Subject" content="b2b marketplace, B2B portal, Online marketplace, b2b online marketplace, Bangladesh B2B marketplace, B2B online Marketplace in Bangladesh" />
<meta name="page-topic" content="Find out the best Manufacturers, Suppliers, Exporters, Wholesalers Products on buyerseller.asia, the largest b2b marketplace in South Asia." />
<meta name="copyright" content="Copyright © Bangladesh Trade Development Council" />
<meta name="owner" content="Bangladesh Trade Development Council. (buyerseller.asia)" />
<meta name="author" content="Name: Kazi Ahmed, Mobile: +8801751681223, Address: House: 27, Road: 02, Sector: 07, Uttara, Dhaka 1230, Bangladesh, E-mail: info@buyerseller.asia, Website: http://www.buyerseller.asia" />
<meta content="https://plus.google.com/+buyerseller.asia" name="author">
  @include('frontend.layouts.stylesheet')
  @yield('page_css')

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
@if(isset($homepage))
<div class="container-fluid padding_0">
@else
<div class="container-fluid padding_0">
@endif
  @yield('dashboard_content')
  
</div>
      <!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
  @include('frontend.layouts.scripts')
    </body>
</html>