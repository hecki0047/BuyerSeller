@extends('frontend.layouts.master-register')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('css/about-page.css',is_secured()) !!}" rel="stylesheet">
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bdtdc-sme-center-style.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')
	</div>
	@include('Aboutus.bdtdc-about-us-header')
<div class="container">
<div class="row">
		<div class="col-md-10 padding_0" style="padding-bottom: 1%;margin-top: 1%;">
			<ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"><span itemprop="name">Home &nbsp;</span> </a></li><li style="float: left"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" style="color: #000"> <i class="fa fa-angle-right"></i><span itemprop="name">About Us </span> <i class="fa fa-angle-right"></i></a></li>
			<li style="float: left"><a itemprop="item" href="" style="color: #000"><span itemprop="name">History and Milestones</span> <i class="fa fa-angle-right"></i></a></li></ul>
		</div>
	</div>
{{-- <div class="row">
	<div class="submenu" style="display: block; border-bottom: 0 none;">
			<div class="container">
				<div class="row padding_0">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<img itemprop="image" style="width: 100% !important; max-height: 170px; " src="{!! asset('assets/images/history_year_2017.png') !!}" class="img-responsive" alt="progress year">	
						</div>
					
				</div>
					
			</div>
            
  </div>
  </div> --}}
  <div class="row" id="history">
  	
						<div class="col-sm-12 col-md-12 col-lg-12">
								<div class="hist-title">
									History and Milestones
								</div>
								<div style="padding-left: 10%; padding-right: 10%;">
									<p class="desc-bdt" style="font-size: 16px;">BuyerSeller.Asia was established in 2015 by Kazi Ahmed, a Canadian who is the Inventor, artist, manufacturer and publisher of the world's first patented color blend RainbowBrush®.</p>
<p>BuyerSeller.Asia (<a href="{{URL::to('/')}}">buyerseller.asia.com</a>), the largest e-commerce player in Bangladesh, that connects buyers and seller from all around the world to do trade in an unimpeachable environment. BuyerSeller is often compared to the U.S. online retail giant Amazon or Chinese Alibaba.com.</p>
<p>Moreover, BuyerSeller.Asia is an online global platform that brings buyers from all over the world to trade for products and services offered by Bangladeshi and South Asian suppliers in a  secure and trustworthy environment for the traders to further expand and explore their business through forming new trade ties and partnerships.</p>
<p>We all knew that South Asian region sellers and especially Bangladesh    manufacturers have limited access to consumers in the global market. BuyerSeller.Asia provides an opportunity to these South Asian Region retailers to sell their excellent products to global customers that will surely give them more profit.</p>
								</div>
						</div>
					
	
			<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="timeline">
						<div class="row-circle clearfix">
							<div class="col r">
						    	<div class="textWrapper" style="padding-left: 20%;">
							    	<span class="month">March, 2015<br></span>BuyerSeller.Asia incorporated in Dhaka, Bangladesh
								</div>
							</div>
						</div>
			</div>
			<div class="timeline">
						<div class="row-circle clearfix">
							<div class="col l">
						    	<div class="textWrapper" style="padding-right: 20%;">
							    	<span class="month">June 1, 2016<br></span><a href="{{URL::to('/',null,is_secured())}}">www.BuyerSeller.Asia</a> launches its website
								</div>
							</div>
						</div>
			</div>
			<div class="timeline">
						<div class="row-circle clearfix">
							<div class="col r">
						    	<div class="textWrapper" style="padding-left: 20%;">
							    		<img itemprop="image" style="width: 95% !important; max-height: 240px; " src="{!! asset('assets/fontend/bdtdc-images/overview-photo.jpg') !!}" class="img-responsive" alt="Bdtdc Team">
								</div>
							</div>
						</div>
			</div>
			</div>
		</div>

	
@stop