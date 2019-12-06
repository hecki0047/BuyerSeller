@extends('fontend.master-home') @section('page_css')
<link property='stylesheet' href="{!! asset('css/home-page.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/fontend/device-width-css/home-page-style.css',is_secured()) !!}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('css/media-query.css')}}">
@endsection @section('content') @include('fontend.layouts.home-slider') @include('fontend.layouts.sidebar-home')
<br>
<br>
<section>
<div class="container">
<div class="row item_sha" style="padding-bottom:10px">
<div class="col-sm-3 col-md-3 col-lg-3" style="padding-left:8px">
<div id="bd-product" class="col-xs-12 col-fixed-m-12 padding_0" style="padding-top:6px">
<a target="_blank" itemprop="url" href="{{ URL::to('selected-suppliers/bangladesh-products',18,is_secured())}}">
<div class="title" style="padding-left:8px">
Bangladesh Products
</div>
</a>
<div style="padding-left:10px;padding-top:15px;padding-bottom:10px;padding-right:5px;line-height:20px" class="hidden-sm summary">
Selected products of Top Suppliers Get your desired Product and Suppliers from Bangladesh now.
</div>
<div style="padding-left:10px;margin-bottom:15%" class="summary">
<a target="_blank" itemprop="url" itemprop="url" title="Gold Suppliers: pre-qualified suppliers" href="{{ URL::to('Gold-supplier',null,is_secured())}}" class="gs"><img class="lazyload" itemprop="image" style="border:none" data-original="{{ asset('bdtdc-product-image/home-page/Gold-membership.png') }}" alt="Gold membership for Buyer Seller"><span itemprop="name" style="display:none">verified-supplier</span></a>
<a target="_blank" itemprop="url" itemprop="url" href="{{ URL::to('SupplierChannel/pages/verified_supplier',32,is_secured())}}" title="Verified supplier assessed by a world-leading inspection company (i.e SGS, Bureau Veritas). Click logo to learn more" class="gs"><img class="lazyload" itemprop="image" style="border:none" data-original="{{ asset('bdtdc-product-image/home-page/verified-supplier.png') }}"></a>
<a target="_blank" itemprop="url" title="Buyer Protection: Ensures on-time shipment and pre-shipment product quality" href="{{ URL::to('BuyerChannel/pages/trade_assurance',5,is_secured())}}" class="gs"><img class="lazyload" itemprop="image" style="border:none" data-original="{{ asset('bdtdc-product-image/home-page/Buyer-protection-home.png') }}"><span itemprop="name" style="display:none">verified-supplier</span></a>
<a target="_blank" itemprop="url" itemprop="url" href="{{ URL::to('selected-suppliers/bangladesh-products',18,is_secured())}}" title="Selected Suppliers: Bangladeshi selected suppliers" class="gs hidden-sm"><img class="lazyload" itemprop="image" style="margin-bottom:8px;border:none" data-original="{{ asset('bdtdc-product-image/home-page/butterfly-bd.jpg') }}"><span itemprop="name" style="display:none">verified-supplier</span></a>
</div>
<a target="_blank" itemprop="url" class="more hidden-xs hidden-s" href="{{ URL::to('selected-suppliers/Bangladesh',18,is_secured())}}" rel="nofollow">Learn More <span class="action-sign">&nbsp;›</span></a>
</div>
</div>
<div class="col-sm-9 col-md-9 col-lg-9 padding_0" style="border-left:1px solid rgba(0,0,0,.1)">
<div id="jssor_2" style="position:relative;margin:0 auto;top:0;left:0;width:1080px;height:270px;overflow:hidden;visibility:hidden">
<div data-u="loading" style="position:absolute;top:0;left:0">
<div style="filter:alpha(opacity=70);opacity:.7;position:absolute;display:block;top:0;left:0;width:100%;height:100%"></div>
<div style="position:absolute;display:block;background:url('assets/slider/loading.gif') no-repeat center center;top:0;left:0;width:100%;height:100%"></div>
</div>
<div data-u="slides" style="cursor:default;position:relative;top:0;left:0;width:1080px;height:270px;overflow:hidden">
@if($product_bangladesh) @foreach($product_bangladesh as $product) @if($product->bdtdcProduct)
<div style="display:none" class="product-image-wrapper" itemscope itemtype="http://schema.org/Product">
<?php $p_name = "Product Name Not Available"; ?>
@if($product->bdtdcProduct) @if($product->bdtdcProduct->product_name)
<?php $p_name = $product->bdtdcProduct->product_name->name; ?>
@endif @endif
<a target="_blank" itemprop="url" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$p_name).'='.mt_rand(100000000, 999999999).$product->product_id,null,is_secured()) }}">
<div class="productinfo text-center">
@if($product->images != '' && is_file('bdtdc-product-image/home-page/'.$product->images))
<img style="border:0;box-shadow:none;height:229px" itemprop="image" data-u="image" height="229" title="{{ $p_name }}" class="lazyload" data-original="{{ asset('bdtdc-product-image/home-page/'.$product->images) }}" alt="{{ $p_name }}"> @else @if($product->bdtdcProduct) @if($product->bdtdcProduct->product_image_new)
<img style="border:0;box-shadow:none;height:229px" class="img-thumbnail lazyload" itemprop="image" data-u="image" height="229" title="{{ $p_name }}" data-original="{!! asset(''.$product->bdtdcProduct->product_image_new->image) !!}" alt="{{ substr($p_name, 0, 50) }}"> @else
<img style="border:0;box-shadow:none;height:229px" itemprop="image" data-u="image" height="229" title="{{ $p_name }}" class="lazyload" data-original="{{ URL::to('uploads/no-image.jpg',null,is_secured()) }}" alt="{{ $p_name }}"> @endif @else
<img style="border:0;box-shadow:none;height:229px" itemprop="image" data-u="image" height="229" title="{{ $p_name }}" class="lazyload" data-original="{{ URL::to('uploads/no-image.jpg',null,is_secured()) }}" alt="{{ $p_name }}"> @endif @endif
<div class="hot_title">
<span itemprop="name">{{ substr($p_name, 0, 30) }}</span>
</div>
</div>
</a>
</div>
@endif @endforeach @endif
</div>
<span data-u="arrowleft" class="recommended-item-control" style="top:50px;left:8px;width:35px;height:55px;cursor:pointer" data-autocenter="4"><i class="fa fa-angle-left" style="background:transparent!important"></i></span>
<span data-u="arrowright" class="recommended-item-control" style="top:50px;right:8px;width:35px;height:55px;cursor:pointer" data-autocenter="4"><i class="fa fa-angle-right" style="background:transparent!important"></i></span>
</div>
</div>
</div>
<div style="background:#fafafa;padding-bottom:20px;padding-top:20px;border-top:0" class="row item_sha">
<div class="col-sm-2">
<p style="margin:0" class="title_home padding_0">Find by Region</p>
</div>
<div class="col-sm-8 region-container util-clearfix">
<ul class="util-clearfix padding_0" itemscope itemtype="http://schema.org/SiteNavigationElement">
@foreach($country as $data)
<li>
<a target="_blank" itemprop="url" rel="nofollow" href=" {{ URL::to('selected-suppliers/'.$data->name,$data->id,null,is_secured())}}" data-image-src="">
<img itemprop="image" style="width:42px;height:26px" class="lazyload" data-original="{{ asset('assets/global/img/flags/'.strtolower($data->iso_code_2).'.png',null,is_secured())}}" alt="{{ $data->name }}" /> {{ $data->name }}
</a>
</li>
@endforeach
</ul>
</div>
<div class="col-sm-2 action-container">
<a target="_blank" itemprop="url" rel="nofollow" class="action_home" href="{{ URL::to('country/region') }}">More Regions <span class="action-sign">&nbsp;›</span></a>
</div>
</div>
</div>
</section>
<br>
<br>
<section>
<div class="container">
<div class="row item_sha" style="padding-bottom:1%">
<div class="col-sm-12">
<h2 style="float:left;font-size:21px" class="title text-left padding_0" itemprop="name"><a style="color:#000" href="{{ URL::to('selected/supplier-products') }}"> Hot Products</a></h2>
<p style="float:right">
<a target="_blank" itemprop="url" href="{{ URL::to('selected/supplier-products') }}">View more
</a></p>
</div>
<div class="col-sm-12 padding_0">
<div id="jssor_1" style="position:relative;margin:0 auto;top:0;left:0;width:1250px;height:310px;overflow:hidden;visibility:hidden">
<div data-u="loading" style="position:absolute;top:0;left:0">
<div style="filter:alpha(opacity=70);opacity:.7;position:absolute;display:block;top:0;left:0;width:100%;height:100%"></div>
<div style="position:absolute;display:block;background:url('assets/slider/loading.gif') no-repeat center center;top:0;left:0;width:100%;height:100%"></div>
</div>
<div data-u="slides" style="cursor:default;position:relative;top:0;left:0;width:1250px;height:310px;overflow:hidden">
@if($product_homes) @foreach($product_homes as $pro) @if($pro->bdtdcProduct)
<div style="display:none">
<div class="box" style="box-shadow:none;margin-bottom:0">
<div class="product-image-wrapper media_wrapper" style="width:233px;height:310px;border:none">
@php $p_name = "Product Name Not Available" @endphp @if($pro->bdtdcProduct) @if($pro->bdtdcProduct->product_name) @php $p_name = $pro->bdtdcProduct->product_name->name @endphp @endif @endif
<div class="single-products">
<a itemprop="url" style="text-align:justify;text-justify:inter-word" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$p_name).'='.mt_rand(100000000, 999999999).$pro->product_id,null,is_secured()) }}">
<div class="productinfo text-center" itemscope itemtype="http://schema.org/Product">
@if($pro->images != '' && is_file('bdtdc-product-image/home-page/'.$pro->images))
<img itemprop="image" title="{{ $p_name }}" style="width:100%;height:233px;border:0;box-shadow:none" src="{{ asset('bdtdc-product-image/home-page/'.$pro->images) }}" alt="{{ $p_name }}" class="img-thumbnail media_image_res"> @else @if($pro->bdtdcProduct) @if($pro->bdtdcProduct->product_image_new)
<img itemprop="image" title="{{ $p_name }}" style="width:100%;height:233px;border:0;box-shadow:none" class="lazyload" data-original="{{ asset(''.$pro->bdtdcProduct->product_image_new->image) }}" alt="{{ substr($p_name, 0, 50) }}" class="img-thumbnail  media_image_res"> @else
<img itemprop="image" title="{{ $p_name }}" style="width:100%;height:233px;border:0;box-shadow:none" class="lazyload" data-original="{{ asset('uploads/no_image.jpg') }}" alt="{{ $p_name }}" class="img-thumbnail  media_image_res"> @endif @else
<img itemprop="image" title="{{ $p_name }}" style="width:100%;height:233px;border:0;box-shadow:none" class="lazyload" data-original="{{ asset('uploads/no_image.jpg') }}" alt="{{ $p_name }}" class="img-thumbnail  media_image_res"> @endif @endif
<div class="hot_title" style="height:40px;padding:5px">
<div style="text-align:center;text-justify:inter-word">
<span class="text-center" itemprop="name">{{ substr($p_name, 0, 30) }}</span>
</div>
</div>
@if($pro->bdtdcProduct) @if($pro->bdtdcProduct->product_prices) @if(trim($pro->bdtdcProduct->product_prices->product_FOB) != '' && trim($pro->bdtdcProduct->product_prices->product_FOB) != '0' && $pro->bdtdcProduct->product_prices->product_FOB != null && trim($pro->bdtdcProduct->product_prices->product_FOB) != '-' && trim($pro->bdtdcProduct->product_prices->product_FOB) != 'NA' && trim($pro->bdtdcProduct->product_prices->product_FOB) != 'N/A')
<p style="text-align:;font-size:14px;color:#2192D9">
@if($pro->bdtdcProduct->product_prices) @if(trim($pro->bdtdcProduct->product_prices->currency) != '') {{ $pro->bdtdcProduct->product_prices->currency ?? '' }} @else US @endif @else US @endif $ @if($pro->bdtdcProduct->product_prices) {{ $pro->bdtdcProduct->product_prices->product_FOB}} @else Price Not Available @endif / @if($pro->bdtdcProduct->ProductUnit) {{ $pro->bdtdcProduct->ProductUnit->name}} @else pieces @endif
</p>
@endif @endif @endif
</div>
</a>
</div>
</div>
</div>
</div>
@endif @endforeach @endif
</div>
<span data-u="arrowleft" class="recommended-item-control" style="top:50px;left:8px;width:35px;height:55px;cursor:pointer" data-autocenter="4"><i class="fa fa-angle-left" style="position:absolute;left:0;background:transparent!important"></i></span>
<span data-u="arrowright" class="recommended-item-control" style="top:50px;right:8px;width:35px;height:55px;cursor:pointer" data-autocenter="4"><i class="fa fa-angle-right" style="position:absolute;right:0;background:transparent!important"></i></span>
</div>
</div>
</div>
</div>
</section>
<br>
<br>
<div style="clear:both"></div>
<section>
<div class="container">
<div class="row item_sha">
<div class="col-md-3 col-sm-3 padding_0">
<div class="col-xs-12 col-fixed-m-12 padding_0" style="padding:5%">
<div class="m-ws inner-offset-xs-6" data-spm="1998823020">
<div class="m-ws-header">
<div class="m-ws-header-top">
<a itemprop="url" title="BuyerSeller Source:easy sourcing for buyer and suppllier" href="{{ URL::to('buyer/guide-bdsource') }}" target="_blank" class="act">
<img itemprop="image" style="height:44px;width:44px" class="lazyload" data-original="{{ asset('assets/bdsource/BD-Source.png') }}" alt="bdsource"> <span class="title" style="position:relative;top:4px">BdSource
</span>
</a>
<p class="hidden-md hidden-sm" style="padding-left:60px">One Request, Multiple Quotes.</p>
</div>
</div>
<div class="m-ws-title hidden-md hidden-sm" style="padding-top:2%;padding-left:2%">
<div style="padding-left:0;padding-top:8px;padding-bottom:5%" class="summary">
Request from buyers -
<br> send your quotation now to get orders
</div>
</div>
<div class="m-ws-industry-list">
<div class="m-ws-industry-item" data-color="#F78F25">
<a itemprop="url" href="{{ URL::to('product-sourcing')}}" target="_blank" class="util-clearfix">
<div class="extra-bgforsupplier" style="margin-right:10px"></div>
<div class="m-ws-industry-item-name">BdSource for supplier</div>
</a>
</div>
<div class="m-ws-industry-item" data-color="#ff6680">
<a itemprop="url" href="{{ URL::to('Bdsource-home-page') }}" target="_blank" class="util-clearfix">
<div class="extra-bgforbuyer" style="margin-right:10px"></div>
<div class="m-ws-industry-item-name">BdSource for buyer</div>
</a>
</div>
</div>
<div style="padding-top:7%" class="m-ws-action">
<a target="_blank" itemprop="url" class="more hidden-xs hidden-s" href="{{ URL::to('source',null,is_secured()) }}" rel="nofollow">Learn More <span class="action-sign">&nbsp;›</span></a>
</div>
</div>
</div>
</div>
<div style="border-left:1px solid rgba(0,0,0,.1);padding-top:0" class="col-md-9 col-sm-9 padding_0">
<div class="col-sm-12 padding_0" style="padding-top:-10px">
<div id="jssor_3" style="position:relative;margin:0 auto;top:0;left:0;width:1080px;height:340px;overflow:hidden;visibility:hidden">
<div data-u="loading" style="position:absolute;top:0;left:0">
<div style="filter:alpha(opacity=70);opacity:.7;position:absolute;display:block;top:0;left:0;width:100%;height:100%"></div>
<div style="position:absolute;display:block;background:url('assets/slider/loading.gif') no-repeat center center;top:0;left:0;width:100%;height:100%"></div>
</div>
<div data-u="slides" style="cursor:default;position:relative;top:0;left:0;width:1080px;height:340px;overflow:hidden">
@foreach($source as $s)
<div style="display:none">
<div class="" style="text-align:center;margin-left:auto;margin-right:auto">
<a target="_blank" href="{{ URL::to('product-sourcing/view',$s->id )}}">
<div class="product-image-wrapper" style="height:340px">
<div class="single-products">
<div class="productinfo text-center" itemscope itemtype="http://schema.org/Product">
@php $p_name = "Product Name Not Available" @endphp @if($s->bdtdc_product) @if($s->bdtdc_product->product_name) @php $p_name = $s->bdtdc_product->product_name->name @endphp @endif @elseif(trim($s->inquery_title) != '') @php $p_name = $s->inquery_title @endphp @endif @if($s->home_inquiry && $s->home_inquiry->images != '' && $s->home_inquiry->show == 1 && file_exists('bdtdc-product-image/home-page/'.$s->home_inquiry->images))
<img itemprop="image" title="{{ $p_name }}" style="width:100%;height:229px;border:0;box-shadow:none" alt="{{ $p_name }}" class="img-thumbnail lazyload" data-original="{{ asset('bdtdc-product-image/home-page/'.$s->home_inquiry->images) }}"> @else @if($s->inq_products_images)
<img itemprop="image" title="{{ $p_name }}" style="width:100%;height:229px;border:0;box-shadow:none" class="img-thumbnail lazyload" data-original="{{ asset(''.$s->inq_products_images->image, 229, 229, 'crop') }}" alt="{{ $p_name }}"> @elseif($s->inq_docs_one)
<img itemprop="image" title="{{ $p_name }}" style="width:100%;height:229px;border:0;box-shadow:none" alt="{{ $p_name }}" class="img-thumbnail lazyload" data-original="{{ asset('buying-request-docs/'.$s->inq_docs_one->docs) }}"> @else
<img itemprop="image" title="{{ $p_name }}" style="width:100%;height:229px;border:0;box-shadow:none" alt="{{ $p_name }}" class="img-thumbnail lazyload" data-original="{{ asset('uploads/no_image.jpg') }}"> @endif @endif
<p>
<span itemprop="name">{{substr($p_name,0,30)}}</span>
</p>
<div class="col-md-12" style="text-align:center">
<div class="col-sm-3" style="">
@if($s->sender_company) @if($s->sender_company->country)
<img title="{{ $s->sender_company->country->name }}" itemprop="image" style="height:18px;width:25px" class="lazyload" data-original="{{ asset('assets/global/img/flags/'.strtolower($s->sender_company->country->iso_code_2).'.png') }}" alt="{{ $s->sender_company->country->name }}"> @else
<img itemprop="image" style="height:18px;width:25px" class="lazyload" data-original="{{ asset('uploads/no-image.jpg') }}" alt="image"> @endif @else
<img itemprop="image" style="height:18px;width:25px" class="lazyload" data-original="{{ asset('uploads/no-image.jpg') }}" alt="image"> @endif
</div>
<div class="col-sm-9 padding_0">
<p style="text-align:left">
<span style="color:#1dc11d;font-weight:700;font-size:14px">
@if($s->quantity>999)
{{$s->quantity}}
@else
1000
@endif
</span>
<span style="color:#333;font-size:15px">
@if($s->inq_unit_id)
{{$s->inq_unit_id->name}}
@else
pieces
@endif
</span>
</p>
</div>
</div>
</div>
</div>
</div>
</a>
</div>
</div>
@endforeach
</div>
<span data-u="arrowleft" class="recommended-item-control" style="top:50px;left:8px;width:35px;height:55px;cursor:pointer" data-autocenter="4"><i class="fa fa-angle-left" style="background:transparent!important"></i></span>
<span data-u="arrowright" class="recommended-item-control" style="top:50px;right:8px;width:35px;height:55px;cursor:pointer" data-autocenter="4"><i class="fa fa-angle-right" style="background:transparent!important"></i></span>
</div>
</div>
</div>
</div>
</div>
</section>
<br>
<br>
<div style="clear:both"></div>
<section>
<div class="container">
<div class="row item_sha">
<div class="col-md-3 col-sm-3 padding_0">
<div class="col-xs-12 col-fixed-m-12 padding_0" style="padding:5%">
<div class="m-ws inner-offset-xs-6" data-spm="1998823020">
<div class="m-ws-header">
<div class="m-ws-header-top">
<a itemprop="url" title="BuyerSeller wholesaler:qualified suppliers" href="{{ URL::to('wholesale',null,is_secured()) }}" target="_blank" class="act">
<img itemprop="image" title="BuyerSeller wholesaler: qualified suppliers" alt="BuyerSeller wholesaler-qualified suppliers" style="height:32px;width:32px;margin-bottom:9px" class="lazyload" data-original="{{ asset('bdtdc-product-image/home-page/wholesale-home.png') }}"> <span class="title">Wholesaler</span>
</a>
</div>
</div>
<div class="m-ws-title" style="padding-top:2%;padding-left:2%">
<div style="padding-left:12px;padding-top:8px;padding-bottom:5%" class="summary">
Global Brands Converge Here
</div>
</div>
<div class="m-ws-industry-list">
<div class="m-ws-industry-item" data-color="#ff6680">
</div>
</div>
<div class="m-ws-action" style="padding-top:7%;0">
<a target="_blank" itemprop="url" class="more hidden-xs hidden-s" href="{{ URL::to('wholesale-user-guide',null,is_secured()) }}" rel="nofollow">Learn More <span class="action-sign">&nbsp;›</span></a>
</div>
</div>
</div>
</div>
<div style="border-left:1px solid rgba(0,0,0,.1);padding-top:30px" class="recommended_items product_slide_area col-sm-9">
<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
@php $wp_count = 0; $breaker_count = 1; $wp_counter = 0 @endphp @foreach ($products as $wp_products) @if ($wp_products->bdtdcProduct) @php $wp_counter++ @endphp @endif @endforeach @if($products) @foreach($products as $wp_products) @if($wp_products->bdtdcProduct)
<?php if(($wp_count % 4) == 0){echo '<div class="item">';$breaker_count = 2;}else{} ?>
<div class="col-sm-3">
<div class="product-image-wrapper" itemscope itemtype="http://schema.org/Product">
<?php $p_name = "Product Name Not Available"; ?>
@if($wp_products->bdtdcProduct) @if($wp_products->bdtdcProduct->product_name) @php $p_name = $wp_products->bdtdcProduct->product_name->name @endphp @endif @endif
<div class="single-products">
<a target="_blank" style="text-align:justify" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$p_name).'='.mt_rand(100000000, 999999999).$wp_products->product_id,null,is_secured()) }}">
<div class="productinfo text-center">
@if($wp_products->images != '' && is_file('bdtdc-product-image/home-page/'.$wp_products->images))
<img itemprop="image" title="{{ $p_name }}" style="width:100%;min-height:220px;margin-left:0;border:0;box-shadow:none" class="lazyload" data-original="{{ asset('bdtdc-product-image/home-page/'.$wp_products->images) }}" alt="{{ substr($p_name, 0, 50) }}" class="img-thumbnail"> @else @if($wp_products->bdtdcProduct) @if($wp_products->bdtdcProduct->product_image_new)
<img itemprop="image" title="{{ $p_name }}" style="width:100%;min-height:220px;margin-left:0;border:0;box-shadow:none" class="lazyload" data-original="{{ asset(''.$wp_products->bdtdcProduct->product_image_new->image) }}" alt="{{ substr($p_name, 0, 50) }}" class="img-thumbnail"> @else
<img itemprop="image" title="{{ $p_name }}" style="width:100%;min-height:220px;margin-left:0;border:0;box-shadow:none" class="lazyload" data-original="{{ asset('uploads/no_image.jpg') }}" alt="{{ substr($p_name, 0, 50) }}" class="img-thumbnail "> @endif @else
<img itemprop="image" title="{{ $p_name }}" style="width:100%;min-height:220px;margin-left:0;border:0;box-shadow:none" class="lazyload" data-original="{{ asset('uploads/no_image.jpg') }}" alt="{{ substr($p_name, 0, 50) }}" class="img-thumbnail "> @endif @endif
<span class="pro_name" style="text-align:center;height:auto" itemprop="name">
{{ substr($p_name, 0, 22) }}..</span> @if($wp_products->bdtdcProduct) @if($wp_products->bdtdcProduct->product_prices) @if(trim($wp_products->bdtdcProduct->product_prices->product_FOB) != '' && trim($wp_products->bdtdcProduct->product_prices->product_FOB) != '0' && $wp_products->bdtdcProduct->product_prices->product_FOB != null && trim($wp_products->bdtdcProduct->product_prices->product_FOB) != '-' && trim($wp_products->bdtdcProduct->product_prices->product_FOB) != 'NA' && trim($wp_products->bdtdcProduct->product_prices->product_FOB) != 'N/A')
<p style="font-size:13px;color:#2192D9">
@if($wp_products->bdtdcProduct->product_prices) @if(trim($wp_products->bdtdcProduct->product_prices->currency) != '') {{ $wp_products->bdtdcProduct->product_prices->currency}} @else US @endif @else US @endif $ @if($wp_products->bdtdcProduct->product_prices) {{ $wp_products->bdtdcProduct->product_prices->product_FOB}} @else Price Not Available @endif / @if($wp_products->bdtdcProduct->ProductUnit) {{ $wp_products->bdtdcProduct->ProductUnit->name}} @else pieces @endif
</p>
@endif @endif @endif
</div>
</a>
</div>
</div>
</div>
@if(($wp_count % 4) == 3)
</div>
@php $breaker_count = 1 @endphp @endif @if(($wp_count == $wp_counter-1) && $breaker_count == 2)
</div>
@endif @php $wp_count++ @endphp @endif @endforeach @endif
</div>
<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
<i class="fa fa-angle-left" style="background:transparent!important"></i>
</a>
<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
<i class="fa fa-angle-right" style="background:transparent!important"></i>
</a>
</div>
</div>
</div>
<br>
<br>
<div style="clear:both"></div>
<div class="row item_sha">
<div class="col-md-3 col-sm-3 padding_0">
<div class="col-xs-12 col-fixed-m-12 padding_0" style="padding-left:10px">
<a target="_blank" href="{{ URL::to('verified/suppliers/info',null,is_secured()) }}">
<div class="title">
Verified Suppliers
</div>
</a>
<div style="padding-left:12px;padding-top:8px;padding-bottom:5%" class="summary">
Worried about Suppliers? Find Selected & Verified Suppliers from around the world.
</div>
<div style="padding-left:10px;margin-bottom:15%" class="summary">
<a target="_blank" itemprop="url" href="{{ URL::to('Gold-supplier',null,is_secured())}}" title="Gold Suppliers:pre-qualified suppliers" class="gs"><img itemprop="image" style="height:44px;width:44px" class="lazyload" data-original="{{ asset('bdtdc-product-image/home-page/Gold-membership.png') }}" alt="Gold membership"><span itemprop="name" style="display:none">Gold membership</span></a>
<a target="_blank" itemprop="url" title="Verified supplier assessed by a world-leading inspection company (i.e SGS, Bureau Veritas). Click logo to learn more" href="{{ URL::to('SupplierChannel/pages/verified_supplier',32,is_secured())}}" title="Verified supplier assessed by a world-leading inspection company (i.e SGS, Bureau Veritas). Click logo to learn more" class="gs hidden-sm"><img itemprop="image" style="height:44px;width:44px" class="lazyload" data-original="{{ asset('bdtdc-product-image/home-page/verified-supplier.png') }}" alt="verified-supplier"><span itemprop="name" style="display:none">verified-supplier</span></a>
<a target="_blank" itemprop="url" title="Buyer Protection: Ensures on-time shipment and pre-shipment product quality" href="{{ URL::to('BuyerChannel/pages/trade_assurance',5,is_secured())}}" class="gs"><img itemprop="image" style="height:44px;width:44px" class="lazyload" data-original="{{ asset('bdtdc-product-image/home-page/Buyer-protection-home.png') }}" alt="Buyer protection"><span itemprop="name" style="display:none">verified-supplier</span></a>
<a itemprop="url" title="The supplier's company premises has been checked by Bdtdc.com staff to ensure onsite operations exist there" href="{{ URL::to('SupplierChannel/pages/verified_supplier',32,is_secured())}}" class="gs"><img itemprop="image" style="height:44px;width:44px" class="lazyload" data-original="{{ asset('bdtdc-product-image/home-page/Verified Suppliers-hand.png')}}" alt="Hand Shake Icon"><span itemprop="name" style="display:none">verified-supplier</span></a>
</div>
<a target="_blank" class="more hidden-xs hidden-s" href="{{ URL::to('verified/suppliers/info',null,is_secured()) }}" rel="nofollow">Learn More <span class="action-sign">&nbsp;›</span></a>
</div>
</div>
<div class="col-md-9 col-sm-9" style="padding-top:15px;border-left:1px solid rgba(0,0,0,.1)" style="">
<div class="col-sm-4 col-md-3" style="text-align:center;margin-left:auto;margin-right:auto">
<a target="_blank" href="{{ URL::to('recommended-suppliers/products/bangladesh='.mt_rand(100000000, 999999999).'18',null,is_secured())}}">
<span class="count" style="color:#ff6a00;font-size:20px;height:31px">150+ </span>
<span class="supplier-type">Verified Suppliers</span>
<div style="padding-bottom:15px" style="text-align:center;margin-left:auto; margin-right:auto" class="summary hidden-xs hidden-s">
from Bangladesh <span> <img class="flg-circle lazyload" itemprop="image" data-original="{{ asset('assets/country-images/bd.png') }}" /></span>
</div>
<div class="product-image-wrapper coun-wrp">
<div class="single-products">
<div class="productinfo text-center">
<img itemprop="image" style="width:100%;height:100%;border:0;box-shadow:none" class="lazyload" data-original="{!! asset('bdtdc-product-image/home-page/Export_2.jpg') !!}" alt="" class="img-thumbnail ">
</div>
</div>
</div>
</a>
</div>
<div style="text-align:center;margin-left:auto;margin-right:auto" class="col-sm-4 col-md-3">
<a target="_blank" href="{{ URL::to('recommended-suppliers/products/india='.mt_rand(100000000, 999999999).'99',null,is_secured())}}">
<span class="count" style="color:#ff6a00;font-size:20px;height:31px">50+ </span>
<span class="supplier-type">Verified Suppliers</span>
<div style="padding-bottom:15px" style="text-align:center;margin-left:auto; margin-right:auto" class="summary hidden-xs hidden-s">
from India <span> <img class="flg-circle lazyload" itemprop="image" data-original="{{ asset('assets/global/img/flags/in.png') }}" /></span>
</div>
<div class="product-image-wrapper coun-wrp">
<div class="single-products">
<div class="productinfo text-center">
<img itemprop="image" style="width:100%;height:100%;border:0;box-shadow:none" data-original="{{ asset('bdtdc-product-image/home-page/export_3.jpg') }}" alt="" class="img-thumbnail lazyload">
</div>
</div>
</div>
</a>
</div>
<div style="text-align:center;margin-left:auto;margin-right:auto" class="col-sm-4 col-md-3">
<a target="_blank" href="{{ URL::to('recommended-suppliers/products/china='.mt_rand(100000000, 999999999).'44',null,is_secured())}}">
<span class="count" style="color:#ff6a00;font-size:20px;height:31px">45+ </span>
<span class="supplier-type">Verified Suppliers</span>
<div style="padding-bottom:15px" style="text-align:center;margin-left:auto; margin-right:auto" class="summary hidden-xs hidden-s">
from China <span> <img class="flg-circle lazyload" itemprop="image" data-original="{{ asset('assets/global/img/flags/cn.png') }}" /></span>
</div>
<div class="product-image-wrapper coun-wrp">
<div class="single-products">
<div class="productinfo text-center">
<img itemprop="image" style="width:100%;height:100%;border:0;box-shadow:none" class="lazyload" data-original="{{ asset('bdtdc-product-image/home-page/TB12goXLpXXXXckXpXXXXXXXXXX-226-260.jpg') }}" alt="" class="img-thumbnail ">
</div>
</div>
</div>
</a>
</div>
<div style="text-align:center;margin-left:auto;margin-right:auto" class="hidden-sm col-md-3">
<a target="_blank" href="{{ URL::to('recommended-suppliers/products/japan='.mt_rand(100000000, 999999999).'107',null,is_secured())}}">
<span class="count" style="color:#ff6a00;font-size:20px;height:31px">30+ </span>
<span class="supplier-type" style="height:31px">Verified Suppliers</span>
<div style="padding-bottom:15px" style="text-align:center;margin-left:auto; margin-right:auto" class="summary hidden-xs hidden-s">
from Japan <span> <img itemprop="image" class="flg-circle lazyload" data-original="{{ asset('assets/country-images/jn.png') }}" /></span>
</div>
<div class="product-image-wrapper coun-wrp">
<div class="single-products">
<div class="productinfo text-center">
<img itemprop="image" style="width:100%;height:100%;border:0;box-shadow:none" class="lazyload" data-original="{{ asset('bdtdc-product-image/home-page/TB1lY06LpXXXXXyXVXXXXXXXXXX-225-260.jpg') }}" alt="" class="img-thumbnail ">
</div>
</div>
</div>
</a>
</div>
</div>
</div>
<div style="background:#fafafa;padding-bottom:20px;padding-top:20px;border-top:0;padding-left:2px" class="row item_sha hidden-sm">
<div class="col-sm-2">
<p style="margin:0" class="title_home r-s-f padding_0" style="padding-left: 8px;">Source by Region</p>
</div>
<div class="col-sm-8 region-container util-clearfix">
<ul class="util-clearfix padding_0" itemscope itemtype="http://schema.org/SiteNavigationElement">
@foreach($country as $data)
<li>
<a target="_blank" itemprop="url" rel="nofollow" href="{{ URL::to('recommended-suppliers/products/'.$data->name.'='.mt_rand(100000000, 999999999).$data->id,null,is_secured())}}" datadata--src="{{ asset('assets/global/img/us.png',is_secured())}}" style="background-image:url()"><img itemprop="image" style="width:42px;height:26px" class="lazyload" data-original="{{ asset('assets/global/img/flags/'.strtolower($data->iso_code_2).'.png',is_secured())}}" alt="{{ $data->name }}" alt="{{ $data->name }}" /> {{ $data->name }}</a>
</li>
@endforeach
</ul>
</div>
<div class="col-sm-2 action-container">
<a target="_blank" itemprop="url" rel="nofollow" class="action_home" href="{{URL::to('country/region',null,is_secured())}}">More Regions <span class="action-sign">&nbsp;›</span></a>
</div>
</div>
</div>
</section>
<br>
<br>
<div style="clear:both"></div>
<br>
<div style="clear:both"></div>
<br>
<section>
<div class="container">
<div class="row padding_0">
<div>
<div style="float:left;display:block;font-size:20px;font-weight:normal;font-family:verdana;padding-top:20px;color:#000;text-align:center;padding-bottom:10px;width:100%">What BuyerSeller can do for you?</div>
<div style="float:left;display:block;font-size:14px;font-weight:normal;font-family:verdana;padding-top:0;color:#000;text-align:center;padding-bottom:20px;width:100%">
Connecting Suppliers to the Global Buyers
</div>
</div>
</div>
<div class="row item_sha" style="padding-bottom:10px">
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding_0">
<div style="width:100%">
<div style="padding-left:20px;padding-top:15px;float:left;display:block;margin:0;overflow:hidden;width:80px">
<img class="lazyload" data-original="{{asset('bdtdc-product-image/home-page/Buyer-protection-home.png')}}">
</div>
<div><h1 class="b-match">Matchmaking of Globally Certified Buyers & Verified Suppliers</h1>
</div>
</div>
<div style="float:left;display:block;font-family:verdana;padding-top:20px;color:#333;width:100%">
<div style="padding:0;margin:0">
<div class="buy-pto">
<span><i class="fa fa-check" style="color:#88cc8c;font-size:16px" aria-hidden="true"></i></span>Promoting your manufactured products in diverse global expos.
</div>
<div class="buy-pto">
<span><i class="fa fa-check" style="color:#88cc8c;font-size:16px" aria-hidden="true"></i></span>Get a list of latest RFQs from genuine buyers.
</div>
<div class="buy-pto" style="margin-bottom:20px">
<span><i class="fa fa-check" style="color:#88cc8c;font-size:16px" aria-hidden="true"></i></span>Source new business inquiries globally.
</div>
</div>
</div>
<div class="" style="width:100%">
<div style="padding-left:20px;padding-top:15px;float:left;display:block;margin:0;overflow:hidden;width:80px">
<img class="lazyload" data-original="{{asset('bdtdc-product-image/home-page/Buyer-protection-home.png')}}">
</div>
<div class="b-match">Complete Protection can be ensured by:
</div>
</div>
<div style="float:left;display:block;font-family:verdana;padding-top:20px;color:#333;width:100%">
<div style="padding:0;margin:0">
<div style="padding:0;margin:0">
<div style="float:left;padding-left:55px;width:5%">
<img class="lazyload" data-original="{!! asset('assets/images/sprite.png') !!}" alt="">
</div>
<div style="float:left;width:80%;margin-top:0">
<div class="buy-pto buy-pto-height" style="margin-left:-10px" style="visibility: visible;">
Offering you Buyer Protection Service as you order.
</div>
<div class="buy-pto buy-pto-height" style="margin-left:-10px" style="visibility: visible;">
Presenting a secured payment system.
</div>
</div>
</div>
<div style="clear:both;width:100%;float:left;margin-left:40px;padding-bottom:15px">
<a itemprop="url" href="{{URL::to('order-protect',null,is_secured())}}" class="btn btn-primary" target="_blank">Order with Buyer Protection </a>
<br>
<a target="_blank" style="padding-left:10px;line-height:40px" href="{{URL::to('BuyerChannel/pages/trade_assurance',5,is_secured())}}"> Learn more <span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding_0" style="border-left:1px solid rgba(0,0,0,.1);border:0 none">
<div data-toggle="modal" data-target="#myModal">
<img style="width:100%;display:block;float:left;margin:0;padding:0;cursor:pointer" class="img-responsive play_video" src="{{ asset('assets/images/youtube-1.jpg') }}" alt="bdtdc news" />
</div>
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close close_video" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body video_content">
<video style="width:100%;min-height:240px" autoplay="true">
<source class="video_url" src="" type="video/ogg">
</video>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default close_video" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<br>
<br>
<div style="clear:both"></div>
<div class="container">
@stop @section('scripts')
<script type="text/javascript">/*<![CDATA[*/(function(){if(typeof NodeList.prototype.forEach==="function"){return false}NodeList.prototype.forEach=Array.prototype.forEach})();$(".top-slidr").hover(function(){$(".next-slide").fadeIn("fast")},function(){$(".next-slide").fadeOut("fast")});$(document).ready(function(){$(".carousel").carousel({interval:6000})});var news=$(".news");current=0;news.hide();Rotator();function Rotator(){$(news[current]).fadeIn(2500).delay(2500).fadeOut("slow");$(news[current]).queue(function(){current=current<news.length-1?current+1:0;Rotator();$(this).dequeue()})}(function(){$(".product_slide_area .item:eq(0)").addClass("active");if($(".parent .chield").length>1){}setInterval(function(){$(".parent .chield:first").slideUp(200,function(){$(this).appendTo($(".parent")).slideDown()})},2000)})();$(".play_video").click(function(){$(".video_content").html("<video style='width: 100%; min-height: 240px;'' autoplay='true'><source src='{!! asset('assets/images/Ekattor-TV-broadcasts-Bdtdccom-the-first-B2B-platform-in-Bangladesh - 10Youtube.com.webm') !!}' type='video/ogg'></video>")});$(".close_video").click(function(){$(".video_content").html("")});/*]]>*/</script>
<script type='text/javascript' src='{!! asset('assets/slider/jquery.flexslider-min.js ',is_secured()) !!}'></script>
<script type='text/javascript' src='{!! asset('assets/slider/jquery.elastislide.js ',is_secured()) !!}'></script>
<script type='text/javascript' src='{!! asset('assets/slider/vanilla-slider.js ',is_secured()) !!}'></script>
<script type='text/javascript' src='{!! asset('assets/slider/jssor.slider.mini.js ',is_secured()) !!}'></script>
<script type="text/javascript" src="{!! asset('assets/fontend/js/jquery.bxslider.min.js',is_secured()) !!}"></script>
<script src="{{URL::asset('assets/fontend/js/animatedModal.min.js',is_secured())}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
<script>$("img.lazyload").lazyload();$(".slidervip").bxSlider({mode:"vertical",auto:true,responsive:true,minSlides:2,slideHeight:100,moveSlides:1,controls:false,touchEnabled:true,oneToOneTouch:true,pager:false,ticker:false,tickerHover:true,autoHover:true,adaptiveHeight:true,slideMargin:2});var jssor_1_options={$AutoPlay:false,$AutoPlaySteps:5,$SlideDuration:300,$SlideWidth:233,$SlideSpacing:20,$Cols:5,$ArrowNavigatorOptions:{$Class:$JssorArrowNavigator$,$Steps:5},$BulletNavigatorOptions:{$Class:$JssorBulletNavigator$,$SpacingX:1,$SpacingY:1}};var jssor_2_options={$AutoPlay:false,$AutoPlaySteps:4,$SlideDuration:160,$SlideWidth:259,$SlideSpacing:12,$Cols:4,$ArrowNavigatorOptions:{$Class:$JssorArrowNavigator$,$Steps:4},$BulletNavigatorOptions:{$Class:$JssorBulletNavigator$,$SpacingX:1,$SpacingY:1}};var jssor_3_options={$AutoPlay:false,$AutoPlaySteps:4,$SlideDuration:160,$SlideWidth:259,$SlideSpacing:12,$Cols:4,$ArrowNavigatorOptions:{$Class:$JssorArrowNavigator$,$Steps:4},$BulletNavigatorOptions:{$Class:$JssorBulletNavigator$,$SpacingX:1,$SpacingY:1}};var jssor_1_slider=new $JssorSlider$("jssor_1",jssor_1_options);var jssor_2_slider=new $JssorSlider$("jssor_2",jssor_2_options);var jssor_3_slider=new $JssorSlider$("jssor_3",jssor_3_options);function ScaleSlider1(){var a=jssor_1_slider.$Elmt.parentNode.clientWidth;if(a){a=Math.min(a,1250);jssor_1_slider.$ScaleWidth(a)}else{window.setTimeout(ScaleSlider1,50)}}ScaleSlider1();$(window).bind("load",ScaleSlider1);$(window).bind("resize",ScaleSlider1);$(window).bind("orientationchange",ScaleSlider1);function ScaleSlider2(){var a=jssor_2_slider.$Elmt.parentNode.clientWidth;if(a){a=Math.min(a,1080);jssor_2_slider.$ScaleWidth(a)}else{window.setTimeout(ScaleSlider2,50)}}ScaleSlider2();$(window).bind("load",ScaleSlider2);$(window).bind("resize",ScaleSlider2);$(window).bind("orientationchange",ScaleSlider2);function ScaleSlider3(){var a=jssor_3_slider.$Elmt.parentNode.clientWidth;if(a){a=Math.min(a,1080);jssor_3_slider.$ScaleWidth(a)}else{window.setTimeout(ScaleSlider3,50)}}ScaleSlider3();$(window).bind("load",ScaleSlider3);$(window).bind("resize",ScaleSlider3);$(window).bind("orientationchange",ScaleSlider3);$(document).on({focus:function(){$(".hide_dropdown").hide(800)}},".search_key");$(document).on({blur:function(){$(".hide_dropdown").show(800)}},".search_key");$(document).ready(function(){$(".bazar-list").hover(function(){var a=$(".mobo-categories.hr-gap").outerHeight();console.log(a);$(".cacostos").css("min-height",a)})});</script>
@stop