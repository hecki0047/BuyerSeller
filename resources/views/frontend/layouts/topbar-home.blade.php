</div>
<section style="background:#fff;box-shadow:3px 3px 3px rgba(0,0,0,.1);position:relative;z-index:10">
<div class="container" style="">
<div class="row topbar_sha" style="padding-bottom:0;box-shadow:none">
<div class="col-xs-12 col-sm-12 col-md-12 padding_0">
<div class="col-sm-3" itemscope itemtype="http://schema.org/Organization" style="margin-top:5px;float:left">
<a style="margin-left:0;background-image:none;height:auto;display:block;width:100%" rel="home" itemprop="url" title="Manufacturers-Suppliers" href="{{ URL::to('/',null  )}}">
<img alt="logo" style="width:91%;height:auto" itemprop="logo" class="loggg" src="{{ asset('assets/frontend/images/logo.png') }}" />
</a>
</div>
<div class="col-sm-9 col-md-9 padding_0" style="float:right" itemscope itemtype="http://schema.org/SiteNavigationElement">
<div class="row padding_0" style="margin:0">
<div class="col-sm-9" style="padding:0">
<div class="navbar-header">
<button type="button" class="navbar-toggle" style="margin-right:5%" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="mainmenu pull-left">
<ul class="nav navbar-nav collapse navbar-collapse pull-right" itemscope itemtype="http://schema.org/SiteNavigationElement">
<li><a target="_blank" style="padding-left:0" itemprop="url" href="{{ URL::to('online-marketplace',null  )}}">Shop by Category</a></li>
<li class="dropdown" style="z-index:999!important"><a href="#">For Buyers<i class="fa fa-angle-down"></i></a>
<ul style="float:left;margin-bottom:0" role="menu" class="sub-menu">
<li class="sub-split" style="background-color:#fff;border-top:1px solid #ddd;list-style:none outside none;padding-top:5px;line-height:22px;color:#333;font-weight:700;white-space:nowrap">
Sourcing
</li>
@foreach($pages as $page)
@if($page->prefix == 'BuyerChannel' )
<li><a itemprop="url" href="{{ URL::to($page->prefix.'/'.$page->sort_name,$page->id)}}" class="prefix_url">{{ $page->name }}</a></li>
@endif
@endforeach
</ul>
</li>
<li class="dropdown" style="z-index:999!important"><a href="#">For Suppliers<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
@foreach($pages as $page)
@if($page->prefix == 'SupplierChannel' )
<li><a itemprop="url" href="{{url($page->prefix.'/'.$page->sort_name,$page->id)}}" class="prefix_url">{{ $page->name }}</a></li>
@endif
@endforeach
</ul>
</li>
<li class="dropdown" style="z-index:999!important"><a href="#">Customer Service<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu" itemscope itemtype="http://schema.org/SiteNavigationElement">
@foreach($pages as $page)
@if($page->prefix == 'ServiceChannel' )
<li><a itemprop="url" href="{{ URL::to($page->slug,null  )}}" class="prefix_url">{{ $page->name }}</a></li>
@endif
@endforeach
</ul>
</li>
<li><a style="margin-right:-1%" target="_blank" class="pull-right" href="{{ URL::to('about-us', null  )}}">About BuyerSeller</a></li>
</ul>
</div>
</div>
<div class="col-sm-3 padding_0">
<div aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="mainmenu pull-right padding_0">
<ul class="nav navbar-nav collapse navbar-collapse padding_0" itemscope itemtype="http://schema.org/SiteNavigationElement">
@if (Sentinel::check())
<li class="dropdown s990" style="z-index:999!important"><a href="#">Help Center<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu submenu2" itemscope itemtype="http://schema.org/SiteNavigationElement">
@foreach($pages as $page)
@if($page->prefix == 'ServiceChannel' )
<li><a target="_blank" itemprop="url" href="{{ URL::to($page->slug,null  )}}" class="prefix_url">{{ $page->name }}</a></li>
@endif
@endforeach
<li><a class="btn" target="_blank" href="https://www.zendesk.com/contact/"> Contact for any query </a> </li>
</ul>
</li>
@else
<li style=""><a itemprop="url" href="{{ URL::to('login',null  ) }}" class="" data-toggle="">Sign In</a></li>
<li style="margin-left:0;padding:0;border-left:1px solid #cecece;height:12px;top:8px"></li>
<li style="margin-left:0"><a target="_blank" itemprop="url" href="{{ URL::to('join',null  ) }}" class="join_btn">Join Free</a></li>
@endif
@if (Sentinel::check())
@php
$role = App\Models\Role_user::where('user_id',Sentinel::getUser()->id)->first();
if($role){
$dashboard_route = ($role->role_id ==3) ? "company/dashboard" : 'buyer/dashbord';
}
@endphp
@endif
@if (Sentinel::check())
<?php $notifications = getNotification(); ?>
<?php $all_notifications = $notifications['all_notifications']; ?>
<?php $inquiry_notifications = $notifications['inquiry_notifications']; ?>
<?php $quote_notifications = $notifications['quote_notifications']; ?>
<?php $order_notifications = $notifications['order_notifications']; ?>
<li class="dropdown" style="z-index:999!important"><a itemprop="url" href="#" style="padding:5px 0">My Account
<span id="all_notification" style="margin-left:5px"><i data-count="{{$all_notifications}}" class="glyphicon notification-icon"></i></span>
<i class="fa fa-angle-down"></i></a>
<ul role="menu" class="sub-menu submenu2" style="background-color:#fff" itemscope itemtype="http://schema.org/SiteNavigationElement">
@if (Sentinel::check())
<li><a target="_blank" itemprop="url" href="{{ URL::to($dashboard_route,null  )}}">Dashboard</a></li>
@endif
<li title="" class="pusher_notification_1"><a target="_blank" itemprop="url" href="{{ URL::to('default','message'  ) }}">New Inquiry <span style="margin-left:5px"><i data-count="{{$inquiry_notifications}}" class="glyphicon notification-icon"></i></span>
</a></li>
<li title="" class="pusher_notification_2" style="margin-bottom:10px"><a target="_blank" itemprop="url" href="{{ URL::to('Mybuying-Request',null  ) }}">New Quote <span style="margin-left:5px"><i data-count="{{$quote_notifications}}" class="glyphicon notification-icon"></i></span>
</a></li>
<li style="margin-left:0" class="pusher_notification_3"><a itemprop="url" href="{{ URL::to('order-list',null  ) }}" class="join_btn"><i class="fa fa-users" aria-hidden="true"></i> Order <span style="margin-left:5px"><i data-count="{{$order_notifications}}" class="glyphicon notification-icon"></i></span>
</a></li>
<li class="sub-split" style="background-color:#fff;border-top:1px solid #ddd;list-style:none outside none;padding-top:5px;line-height:22px;color:#333;font-weight:700;white-space:nowrap;box-shadow:none">
For Buyer</li>
<li><a target="_blank" itemprop="url" href="{{ URL::to('get-quotations',null  )}}" target="_blank" class="" style="">Get Quotations Now</a>
</li>
<li class="navigation-menu-list-li"><a target="_blank" itemprop="url" href="{{ URL::to('Mybuying-Request',null  ) }}" class="navigation-menu-list-li-a">Manage Buying Requests</a></li>
<li class="sub-split" style="background-color:#fff;border-top:1px solid #ddd;list-style:none outside none;padding-top:5px;line-height:22px;color:#333;font-weight:700;white-space:nowrap;box-shadow:none">For Supplier</li>
<li class="navigation-menu-list-li"><a target="_blank" itemprop="url" target="_blank" href="{{ URL::to('dashboard','product'  ) }}" class="navigation-menu-list-li-a">Display New Products</a></li>
<li class="navigation-menu-list-li"><a target="_blank" itemprop="url" target="_blank" href="{{ URL::to('dashboard','company_site'  ) }}" class="navigation-menu-list-li-a">Company & Site</a></li>
<li class="navigation-menu-list-li"><a target="_blank" itemprop="url" target="_blank" href="{{ URL::to('quotation/management',null  ) }}" class="navigation-menu-list-li-a">Quotes Management</a></li>
@endif
@if (Sentinel::check())
<li class="navigation-menu-list-li"><a style="font-size:14px;color:#000!important;font-weight:600;letter-spacing:.5px" class="btn" href="{{ URL::to('logout',null  ) }}"> Logout </a> </li>
@endif
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="row mn-rit padding_0" style="margin:0" itemscope itemtype="http://schema.org/SiteNavigationElement">
<div class="col-xs-9 padding_0" style="padding-right:0;padding-bottom:0">
<div class="" style="padding:0px">
<form class="form form-horizontal" itemprop="target" action="{!!URL::to('search-product',null  )!!}" method="post">
<input itemprop="url" type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="input-group input-group-lg serch-inpt" style="overflow:hidden;border:0 none">
<span class="input-group-btn" style="width:130px;border:0;border:1px solid #255e98;border-right:0">
<select class="form-control all_search_options pro-sel" name="search" style="border:0 none">
<option value="products">Products</option>
<option value="suppliers">Suppliers</option>
<option value="news">Quote</option>
</select>
</span>
@if(isset($header))
<input itemprop="query-input" name="key" class="form-control search_key" style="font-size:12px!important;border:1px solid #255E98!important" type="text" placeholder="{{ $header->name ?? '' }}" required="required" required />
@else
<input itemprop="query-input" name="key" class="form-control search_key" style="font-size:12px!important;border:1px solid #255E98!important" type="text" placeholder="What are you looking for..." required="required" required />
@endif
<span class="input-group-btn" style="font-size:14px;color:#fff">
<input itemprop="query-input" type="submit" style="background:#19446f;border-radius:0!important;min-width:102%;font-size:14px;margin-left:-2px!important" class="btn btn-primary btn-lg pull-left all_search" value="Search" />Search
</span>
</div>
</form>
</div>
</div>
<div class="col-xs-3 padding_0" style="">
<div class="" style="height:50px">
<a target="_blank" itemprop="url" title="get quote" href="{{URL::to('get-quotations',null  )}}"><span style=""><img itemprop="image" style="max-width:100%;height:46px" class="pull-right" src="{!! asset('assets/frontend/images/Get-Quotation-home.png') !!}" alt="Get Quotation home" /></span></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>