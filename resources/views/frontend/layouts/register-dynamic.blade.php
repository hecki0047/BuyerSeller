<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=utf-8>
<meta name=googlebot content="index, follow">
<meta name=robots content=index,follow />
<meta name=_token content="{!! csrf_token() !!}"/>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel=icon type=image/png href="{!! asset('/assets/frontend/images/favicon/favicon-32x32.png') !!}" sizes=32x32 />
<link rel=icon type=image/png href="{!! asset('/assets/frontend/images/favicon/favicon-16x16.png') !!}" sizes=16x16 />
<link rel=icon type=image/png href="{!! asset('/assets/frontend/images/favicon/favicon-8x8.png') !!}" sizes=16x16 />
<?php
            $canonical_dynamic = 'http'.(isset($_SERVER['HTTPS']) ? 's' : '').'://'."{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
          ?>
<link rel=canonical href="{{ $canonical_dynamic ?? ''}}"/>
<link rel=alternate href=http://buyerseller.asia hreflang=en-us>
<title>
Buyer Seller | Buyerseller.asia
 </title>
<meta name=keywords content="{{ 'Bangladesh B2B Marketplace,Bangladesh B2B online marketplace, B2B online marketplace in Bangladesh, B2B platform in Bangladesh, Bangladesh B2B online platform, B2B Suppliers in Bangladesh, Global b2b marketplace, B2B online marketplace, B2B online platform, b2b ecommerce platform'}}" />
@if(isset($title))
<meta name=title content="{{ ucwords($title)}}" />
@else
<meta name=title content />
@endif
<meta name=keywords content="{{ 'Bangladesh B2B Marketplace,Bangladesh B2B online marketplace, B2B online marketplace in Bangladesh, B2B platform in Bangladesh, Bangladesh B2B online platform, B2B Suppliers in Bangladesh, Global b2b marketplace, B2B online marketplace, B2B online platform, b2b ecommerce platform'}}" />
<meta name=description content="{{ 'Find out the best Manufacturers, Suppliers, Exporters, Wholesalers & Products on BDTDC, the largest b2b marketplace in South Asia'}}"/>
<meta property=og:title content="{{ $title ?? 'Bangladesh B2B marketplace for Suppliers, Manufacturers & Exporters'}}"/>
<meta name=csrf-token content="{{ csrf_token() }}">
@if(isset($share))
<meta property=og:description content="{{ ''}}" />
@if(isset($image))
<meta property=og:image content="{{ URL::to($image->image,null) }}" />
@else
<meta property=og:image content="{{ URL::to('assets/frontend/images/uploads/no_image.jpg',null) }}" />
@endif
<meta property=og:type content="product"/>
<meta property=og:url content="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$products->product_name->name).'='.mt_rand(100000000, 999999999).$products->id) }}" />
<meta property=og:site_name content="Buyerseller - Bangladesh Trade Development Council" />
@endif
<meta name=Subject content="{{ 'b2b marketplace, B2B portal, Online marketplace, b2b online marketplace, Bangladesh B2B marketplace, B2B online Marketplace in Bangladesh'}}" />
<meta name=page-topic content="{{  'Find out the best Manufacturers, Suppliers, Exporters, Wholesalers Products on Buyerseller, the largest b2b marketplace in South Asia.'}}" />
<meta name=copyright content="Copyright © Bangladesh Trade Development Council" />
<meta name=owner content="Bangladesh Trade Development Council. (Buyerseller)" />
<meta name=author content="Name: Kazi Ahmed, Mobile: +8801751681223, Address: Baitush Shafqah, House: 818, Road: 12, Avinue: 06, Mirpur DOHS, Dhaka 1216, Bangladesh, E-mail: info@bdtdc.com, Website: http://www.bdtdc.com" />
<meta content=https://plus.google.com/+Bdtdc name=author>
@include('frontend.layouts.stylesheet')
@yield('page_css')
@yield('extra_stylesheet')
<!--[if lt IE 9]>
<script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script>
<script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script>
<![endif]-->
<script id=ze-snippet src="https://static.zdassets.com/ekr/snippet.js?key=04eea66d-9366-4e25-bd14-150d9e210252"></script>
</head>
<body itemscope itemtype=http://schema.org/WebPage>
<meta itemprop=accessibilityControl content=fullKeyboardControl>
<meta itemprop=accessibilityControl content=fullMouseControl>
<meta itemprop=accessibilityHazard content=noFlashing>
<meta itemprop=accessibilityHazard content=noMotionSimulation>
<meta itemprop=accessibilityHazard content=noSound>
<meta itemprop=accessibilityAPI content=ARIA>
<a href=https://plus.google.com/104450985808854201025 rel=publisher></a>
<div class=clearfix>
</div>
<div class=container>
@if(Sentinel::check())
<input type=hidden id=user_id value="{{Sentinel::getUser()->id}}">
@else
<input type=hidden id=user_id value=-2>
@endif
@yield('dashboard_content')
@include('frontend.layouts.footer')
</div>
<!--[if lt IE 9]>
<script src=../../assets/global/plugins/respond.min.js></script>
<script src=../../assets/global/plugins/excanvas.min.js></script>
<![endif]-->
@include('frontend.layouts.scripts')
@include('frontend.layouts.scripts-notifications')
@yield('extra_scripts')
<script type=text/javascript>$(document).ready(function(){$(document).on({click:function(f){f.preventDefault();var a=location.origin;var c=$('select[name="search"].all_search_options').val();var b=$('input[name="key"].search_key').val();if(b==""){var d="";alert("You must enter keyword");return false}else{var d=b.split(" ").join("-");var d=d.split("/").join("-")}window.location.href=a+"/"+d+"/search?t="+c}},'input[value="Search"].all_search')});</script>
</body>
</html>