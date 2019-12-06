</div>
<section style="background:#fff;box-shadow:3px 3px 3px rgba(0,0,0,.1);position:relative;z-index:1">
<div class="container">
<div class="row topbar_sha" style="box-shadow:none">
<div class="col-md-12 col-sm-12 col-xs-12 padding_0">
<div class="bdtdc-logo col-md-2 col-sm-2 col-xs-2" itemscope itemtype="http://schema.org/Organization" style="margin-top:5px;float:left">
<a style="margin-left:0;background-image:none;height:auto;display:block;width:100%" rel="home" itemprop="url" title="Manufacturers-Suppliers" href="{{ URL::to('/',null)}}">
<img alt="logo" style="width:100%;height:auto" itemprop="logo" class="loggg" src="{{ asset('assets/logo.png') }}" />
</a>
<div class="col-md-12 padding_0">
@include('frontend.layouts.all-category-list')
</div>
</div>
<div class="col-md-7 col-sm-7 col-xs-7">
<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0">
<div class="navbar-header">
<button type="button" class="navbar-toggle" style="margin-right:5%" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="mainmenu pull-left">
<ul class="nav navbar-nav collapse navbar-collapse pull-right m-nvr-inn" itemscope itemtype="http://schema.org/SiteNavigationElement">
<li><a style="padding-left:0" itemprop="url" href="{{ URL::to('online-marketplace',null)}}">Shop by Category</a></li>
<li class="dropdown" style="z-index:999!important">
<a href="#">For Buyers<i class="fa fa-angle-down"></i></a>
<ul style="float:left" role="menu" class="sub-menu">
<li class="sub-split" style="background-color:#fff;border-top:1px solid #ddd;list-style:none outside none;padding-top:5px;line-height:22px;color:#333;font-weight:700;white-space:nowrap">
Sourcing
</li>
@foreach($pages as $page)
@if($page->prefix == 'BuyerChannel' )
<li><a itemprop="url" href="{{ URL::to($page->prefix.'/pages/'.$page->sort_name,$page->id)}}" class="prefix_url">{{ $page->name }}</a></li>
@endif
@endforeach
</ul>
</li>
<li class="dropdown" style="z-index:999!important">
<a href="#">For Suppliers<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
@foreach($pages as $page)
@if($page->prefix == 'SupplierChannel' )
<li><a itemprop="url" href="{{ URL::to($page->prefix.'/pages/'.$page->sort_name,$page->id)}}" class="prefix_url">{{ $page->name }}</a></li>
@endif
@endforeach
</ul>
</li>
<li class="dropdown s990" style="z-index:999!important">
<a href="#">Customer Service<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
@foreach($pages as $page)
@if($page->prefix == 'ServiceChannel' )
<li><a target="_blank" itemprop="url" href="{{ URL::to($page->slug,null)}}" class="prefix_url">{{ $page->name }}</a></li>
@endif
@endforeach
</ul>
</li>
<li><a style="margin-right:-1%" target="_blank" class="pull-right" href="{{ URL::to('about-us',null, is_secured())}}">About BuyerSeller</a></li>
</ul>
</div>
</div>
@if (Sentinel::check())
<div class="col-md-12 col-xs-12 col-sm-12 padding_0">
<div itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction" style="" class="col-xs-12 padding_0">
<div class="col-xs-9" style="padding-right:0;padding-left:0;padding-bottom:10px">
<div class="col-lg-12" style="padding:0px">
<form class="form form-horizontal" itemprop="target" action="{!!URL::to('search-product',null)!!}" method="post">
<input itemprop="url" type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="input-group input-group-lg" style="border-radius:0!important">
<span class="input-group-btn" style="">
<select style="border:1px solid #255e98;height:43px;padding-left:0" class="form-control all_search_options inp-ch" name="search">
<option value="products">Products <i style="padding:0;margin-right:-5px" class="fa fa-angle-down"></i></option>
<option value="suppliers">Suppliers</option>
<option value="news">Quote</option>
</select>
</span>
<input style="border:1px solid #255e98;border-left:0 none;height:43px;padding:10px 3px" itemprop="query-input" name="key" class="form-control search_key inp-value" type="text" placeholder="What are you looking for..." required="required" />
<span class="input-group-btn" style="/*width:13%;*/">
<input itemprop="query-input" type="submit" style="background:#19446f;border-radius:0!important;min-width:100%;font-size:14px;width:70px;height:43px;padding:10px 3px" class="btn btn-primary btn-lg pull-left all_search" value="Search" />
</span>
</div>
</form>
</div>
</div>
<div class="col-xs-3 padding_0" style="margin-top:3px">
<div class="col-xs-12 col-md-12 col-sm-12" style="padding:.1%;border-radius:5px!important">
<a itemprop="url" title="get quote" href="{{URL::to('get-quotations',null)}}"><span style=""><img itemprop="image" style="padding-left:7%;padding-right:5px;margin-top:-8px;height:52px" class="img-responsive" src="{!! asset('assets/gold/Get-Quotation-dash.png') !!}" alt="Get Quotation home" /></span></a>
</div>
</div>
</div>
</div>
@else
<h3 style="padding:2%">My Dashbord</h3>
@endif
</div>
<div class="col-md-3 col-sm-3 col-xs-3 padding_0" style="float:right;padding:0">
<div aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="mainmenu pull-right padding_0">
<ul style="float:right;text-align:right;margin:0" class="nav navbar-nav collapse navbar-collapse padding_0" itemscope itemtype="http://schema.org/SiteNavigationElement">
<li class="dropdown s990" style="z-index:999!important">
<a href="#">Help Center<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu submenu2" itemscope itemtype="http://schema.org/SiteNavigationElement">
@foreach($pages as $page)
@if($page->prefix == 'ServiceChannel' )
<li><a target="_blank" itemprop="url" href="{{ URL::to($page->slug,null)}}" class="prefix_url">{{ $page->name }}</a></li>
@endif
@endforeach
<li><a class="btn" target="_blank" href="https://buyerseller.zendesk.com/hc/en-us"> Contact for any query </a> </li>
</ul>
</li>
<li class="p-call" style="z-index:999!important;padding-right:0"><a href="tel:+8801708884440"> <i class="fa fa-phone" aria-hidden="true"></i> +880 17088 84440</a></li>
@if (Sentinel::check())
@else
@endif
@if (Sentinel::check())
<?php
                        $role = App\Models\Role_user::where('user_id',Sentinel::getUser()->id)->first();
                        
                        $dashboard_route = ($role->role_id ==3) ? "company/dashboard" : 'buyer/dashbord';
                        
                        ?>
@endif
</ul>
<ul style="float:right;text-align:right;margin:0" class="nav navbar-nav collapse navbar-collapse padding_0" itemscope itemtype="http://schema.org/SiteNavigationElement">
@if (Sentinel::check())
@php
$notifications = getNotification();
$all_notifications = $notifications['all_notifications'];
$inquiry_notifications = $notifications['inquiry_notifications'];
$quote_notifications = $notifications['quote_notifications'];
$order_notifications = $notifications['order_notifications'];
@endphp
<li class="dropdown" style="z-index:999!important">
<a style="text-align:right;padding-right:16px" itemprop="url" href="#">Welcome back<br><span title=""></span> {{ Sentinel::getUser()->first_name }} <span id="all_notification" style="margin-left:5px"><i data-count="{{$all_notifications}}" class="glyphicon notification-icon"></i></span>
<i style="padding:0;margin-right:-5px" class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu submenu2" style="background-color:#fff;top:100%" itemscope itemtype="http://schema.org/SiteNavigationElement">
@if (Sentinel::check())
<li><a itemprop="url" href="{{ URL::to($dashboard_route,null)}}">Dashboard</a></li>
@endif
<li title="" class="pusher_notification_1"><a itemprop="url" href="{{ URL::to('default/message?inq_sub_menu=New Inquiries',null) }}">New Inquiry <span style="margin-left:5px"><i data-count="{{$inquiry_notifications}}" class="glyphicon notification-icon"></i></span>
</a>
</li>
<li title="" class="pusher_notification_2"><a itemprop="url" href="{{ URL::to('Mybuying-Request?status=0&unread=true&search=&d=0',null) }}">New Quote <span style="margin-left:5px"><i data-count="{{$quote_notifications}}" class="glyphicon notification-icon"></i></span>
</a>
</li>
<li style="margin-left:0" class="pusher_notification_3"><a itemprop="url" href="{{ URL::to('order-list',null) }}" class="join_btn"><i class="fa fa-users" aria-hidden="true"></i> Order <span style="margin-left:5px"><i data-count="{{$order_notifications}}" class="glyphicon notification-icon"></i></span>
</a>
</li>
<li class="sub-split" style="background-color:#fff;border-top:1px solid #ddd;list-style:none outside none;padding-top:5px;line-height:22px;color:#333;font-weight:700;white-space:nowrap;box-shadow:none">
For Buyer
</li>
<li><a itemprop="url" href="{{ URL::to('get-quotations')}}" target="_blank" class="" style="">Get Quotations Now</a>
</li>
<li class="navigation-menu-list-li"><a itemprop="url" href="{{ URL::to('Mybuying-Request',null) }}" class="navigation-menu-list-li-a">Manage Buying Requests</a></li>
<li style="margin-bottom:10px" class="navigation-menu-list-li"><a itemprop="url" href="{{ URL::to('list/view/requested/sample',null) }}" class="navigation-menu-list-li-a">Manage Sample Requests</a></li>
@if($role->role_id ==3)
<li class="sub-split" style="background-color:#fff;border-top:1px solid #ddd;list-style:none outside none;padding-top:5px;line-height:22px;color:#333;font-weight:700;white-space:nowrap;box-shadow:none">For Supplier</li>
<li class="navigation-menu-list-li"><a itemprop="url" target="_blank" href="{{ URL::to('dashboard','product') }}" class="navigation-menu-list-li-a">Display New Products</a></li>
<li class="navigation-menu-list-li"><a itemprop="url" target="_blank" href="{{ URL::to('dashboard','company_site') }}" class="navigation-menu-list-li-a">Company & Site</a></li>
<li class="navigation-menu-list-li"><a itemprop="url" target="_blank" href="{{ URL::to('quotation/management',null) }}" class="navigation-menu-list-li-a">Quotes Management</a></li>
@endif
@if (Sentinel::check())
<li style="margin-left:0;padding:0;border-left:1px solid #cecece;height:12px;top:8px"></li>
<li style="background-color:#fff;border-top:1px solid #ddd;list-style:none outside none;padding-top:5px;line-height:22px;color:#333;font-weight:700;white-space:nowrap;box-shadow:none"><a style="background-color:#fff;list-style:none outside none;padding-top:5px;line-height:22px;color:#333;font-weight:700;white-space:nowrap;box-shadow:none" class="btn" href="{{ URL::to('logout',null) }}"> Logout </a> </li>
@endif
@else
<li style=""><a itemprop="url" href="{{ URL::to('login',null) }}" class="" data-toggle="">Sign In</a></li>
<li style="margin-left:0;padding:0;border-left:1px solid #cecece;height:12px;top:8px"></li>
<li style="margin-left:0"><a itemprop="url" href="{{ URL::to('join',null) }}" class="join_btn">Join Free</a></li>
@endif
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>