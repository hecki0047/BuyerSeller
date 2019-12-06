<div style="clear:both"></div>
</div>
<section class="">
<div class="container">
<div id="topbar_sha" style="background-color:rgba(66,139,202,0.08);padding-bottom:.5%" class="row cate-list-pro">
<div class="col-sm-12 seller-uptitle" style="background-color:transparent;padding-left:14%;padding-bottom:1%">
<div class="col-md-4 col-sm-4" style="padding-left:0"><h3 style="border:none"> <img src="{{ asset('assets/frontend/images/2.png') }}" />
Simple
</h3></div>
<div class="col-md-4 col-sm-4" style="padding-left:0"><h3 style="border:none"><img src="{{ asset('assets/frontend/images/1.png') }}" />
Efficient
</h3></div>
<div class="col-md-4 col-sm-4" style="padding-left:4.2%"><h3 style="border:none"> <img src="{{ asset('assets/frontend/images/3.png') }}" />
All-In-One
</h3></div>
</div>
</div>
<div id="topbar_sha" class="row cate-list-pro" style="position:relative;z-index:0">
<div class="col-sm-3 col-xs-12 mobo-categories hr-gap no-padding" style="">
<h3 style="padding-left:15px"><a itemprop="url" href="{{ URL::to('online-marketplace',null)}}"><i class="fa fa-list-ul"></i> CATEGORIES</a></h3>
@if ($categorys)
@foreach ($categorys as $category)
<ul class="pull-left bazar-list" itemscope itemtype="http://schema.org/SiteNavigationElement">
<li style="padding-left:15px;padding-bottom:0" itemscope itemtype="http://data-vocabulary.org/Product" data-id="market-{{ $category['id'] }}">
<a target="_blank" itemprop="url" rel="category" href="{{ URL::to($category['slug'],$category['id']) }}">
<span class="cat-main-cl" itemprop="name">{{ $category['name'] }}</span> </a>
<span class="pull-right"><i class="fa fa-angle-right"></i></span>
</li>
</ul>
@if ($category->sub_cat)
<div style="padding-top:0;margin-left:100%;margin-top:-35px" class="col-lg-offset-12 col-md-offset-12 col-sm-offset-12 cacostos util-clearfix" id="market-{{$category['id']}}">
<ul class="cacostos-list" itemscope itemtype="http://schema.org/SiteNavigationElement">
<li itemscope itemtype="http://data-vocabulary.org/Product">
<a target="_blank" itemprop="url" class="prothom-cacostos" style="font-weight:700;line-height:20px;margin-bottom:10px" href="{{ URL::to($category->slug,$category->id) }}">
<span style="padding:0;font-size:13px" itemprop="name">{{ $category['name']}} </span></a>
<div style="margin-top:10px" class="ditio-cacostos">
@foreach (array_slice($category->sub_cat->toArray(),0,15) as $category_children)
<a target="_blank" itemprop="url" rel="category" href="{{ URL::to(strtolower(preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','',$category_children['slug']))).'/0',$category_children['id']) }}">
<span style="padding:0;font-size:13px" itemprop="name"> {{ $category_children['name'] }}</span>
</a>
@endforeach
</div>
</li>
</ul>
</div>
@endif
@endforeach
@endif
<ul id="bazar-list" class="pull-left" style="padding-left:18px;padding-top:6%;font-weight:600" itemscope itemtype="http://schema.org/SiteNavigationElement">
<li>
<a target="_blank" itemprop="url" href="{{ URL::to('online-marketplace',null) }}">
All Categories </a>
<span class="pull-right"><i class="fa fa-angle-right"></i></span>
</li>
</ul>
</div>
<div class="col-xs-12 col-sm-9 padding_0" style="padding-top:1px;padding-right:6px">
<div class="col-sm-12" style="padding:0">
<div class="col-sm-6 no-gutter" style="padding:0">
<div class="fea-item fea-item-3">
<a class="fea-lk" target="_blank" href="{{ URL::to('bangladesh-rmg')}}">
<div class="fea-bg" style="background:rgba(23,125,213,0.4)">
<div class="fea-info">
<h4 class="fea-info-tit">RMG & Apparel</h4>
<p class="fea-info-desc">Find The Top Sellers</p>
</div>
</div>
<img title="RMG & Apparel" src="{{asset('assets/frontend/images/te-shirt.png')}}" class="fea-img" alt="Bangladesh RMG">
</a>
</div>
</div>
<div class="col-sm-6 no-gutter" style="padding:0">
<div class="fea-item fea-item-4">
<a class="fea-lk" target="_blank" href="{{ URL::to('bangladesh-tea')}}">
<div class="fea-bg">
<div class="fea-info">
<h4 class="fea-info-tit">Tea & Beverage</h4>
<p class="fea-info-desc"> Be With The Best Suppliers</p>
</div>
</div>
<img title="Tea - Beverage" src="{{asset('assets/frontend/images/tee.png')}}" class="fea-img" alt="Bangladesh Tea">
</a>
</div>
</div>
<div class="col-sm-6 no-gutter" style="padding:0">
<div class="fea-item fea-item-5">
<a class="fea-lk" target="_blank" href="{{ URL::to('bangladesh-furniture')}}">
<div class="fea-bg">
<div class="fea-info">
<h4 class="fea-info-tit">Furniture</h4>
<p class="fea-info-desc">Verified Top Suppliers</p>
</div>
</div>
<img title="Furniture" src="{{asset('assets/frontend/images/furniture.png')}}" class="fea-img" alt="bangladesh furniture">
</a>
</div>
</div>
<div class="col-sm-6 no-gutter" style="padding:0">
<div class="fea-item fea-item-6">
<a class="fea-lk" target="_blank" href="{{ URL::to('Bdsource-home-page')}}">
<div class="fea-bg">
<div class="fea-info">
<h4 class="fea-info-tit">Selected Sourcing</h4>
<p class="fea-info-desc">Top Selling Products</p>
</div>
</div>
<img title="Selected Sourcing" alt="Selected Sourcing" src="{{asset('assets/frontend/images/leather-product.png')}}" class="fea-img">
</a>
</div>
</div>
</div>
<div class="col-sm-12 padding_0" style="padding-top:2%">
<div class="col-sm-12 padding_0">
<div class="col-sm-8 padding_0">
<p class="title_home" style="font-size:15px;font-weight:700;color:#333;margin:0"><a itemprop="url" href="{{ URL::to('VIP-buyer/One-stop-service')}}" target="_blank" style="color:#000"> Connecting with VIP Buyers</a></p>
</div>
<div class="col-sm-4 padding_0 text-right">
<a itemprop="url" href="{{ URL::to('Sourcing/Requests/info') }}" target="_blank"> View More</a>
</div>
</div>
<div class="padding_0 col-sm-12">
<div class="slidervip">
@foreach($source as $s)
@php
$inq_title = ''
@endphp
@if($s->bdtdc_product){
@if($s->bdtdc_product->product_name)
@php
$inq_title = trim($s->bdtdc_product->product_name->name)
@endphp
@else
@php
$inq_title = ''
@endphp
@endif
@else
@php
$inq_title = trim($s->inquery_title)
@endphp
@endif
@if($inq_title != '')
<div class="col-sm-12 source slide" style="padding-bottom:1%;background-color:rgba(39,119,164,0.04)!important;min-height:85px">
<div class="col-md-9 col-sm-8 padding_0">
<a target="_blank" itemprop="url" href="{{ URL::to('product-sourcing/view',$s->id )}}">
<p style="padding-top:1%;font-size:12px;font-weight:600;color:#000;padding-left:1%">
{{substr($inq_title,0,60)}}
</p>
</a>
@php
$inq_pro_img_url_exits = URL::to('assets/frontend/images/no-image.jpg')
@endphp
@if($s->inq_products_images)
@if($s->inq_products_category)
@if($s->inq_products_category->pro_parent_cat && $s->inq_products_category->bdtdcCategory)
@php
$inq_pro_img_url_exits = 'assets/frontend/images/products/'.trim($s->inq_products_category->pro_parent_cat->name).'/'.trim($s->inq_products_category->bdtdcCategory->name).'/'.$s->inq_products_images->image;
@endphp
@endif
@endif
@elseif($s->inq_products_image)
@php
$inq_pro_img_url_exits = 'assets/frontend/images/'.$s->inq_products_image->image
@endphp
@elseif($s->inq_docs_one)
@php
$inq_pro_img_url_exits ='assets/frontend/images/buying-request/'.$s->inq_docs_one->docs
@endphp
@endif
<div class="col-sm-2 col-md-2" style="padding-right:0px">
<img itemprop="image" style="height:42px;width:52px" src="{!! asset($inq_pro_img_url_exits)  !!}" alt="
                            {{ $inq_title }}
                        ">
</div>
<div class="col-sm-8 col-md-10">
<div class="col-sm-12 padding_0" style="">
<div class="col-sm-2 padding_0" style="">
From: @if($s->sender_company)
@if($s->sender_company->country)
<img title="{{$s->sender_company->country->name }}" itemprop="image" style="height:20px;width:32px" src="{{ asset('assets/frontend/images/flags/'.strtolower($s->sender_company->country->iso_code_2).'.png')}}" alt="{{ $s->sender_company->country->name }}">
@else
@endif
@else
@endif
</div>
<div class="col-sm-2 hidden-sm" style="">
<p style="">Requesting:</p>
</div>
<div align="left" class="col-sm-5 padding_0" style="padding-left:10px">
<p style="padding-left:10%">
<span class="side-quantity">
@if($s->quantity>999)
{{$s->quantity}}
@else
1000
@endif
</span>
<span style="">
@if($s->inq_unit_id)
{{$s->inq_unit_id->name}}
@endif
</span>
</p>
</div>
</div>
</div>
</div>
<div class="col-md-3 col-sm-4 padding_0" style="border-left:1px solid #ddd;padding:10px 0 0 10px">
<div style="margin-left:25%">
<a target="_blank" href="{{ URL::to('product-sourcing/view',$s->id )}}" class="btn btn-default btnvip" style="color:#fff!important;border-radius:5px!important">Quote Now</a>
<p style="margin-top:6px;color:#666;font-size:12px;line-height:1.28571">Quotes Left:<span style="color:#ff7519;font-weight:700;font-size:13px"><?php echo rand(20,50); ?></span></p>
</div>
</div>
</div>
@endif
@endforeach
</div>
</div>
</div>
</div>
</div>
</div>
</section>