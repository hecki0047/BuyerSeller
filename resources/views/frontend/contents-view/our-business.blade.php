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
			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"><span itemprop="name">Home &nbsp;</span> </a></li>
			<li style="float: left">
			<a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" style="color: #000"> 
			<i class="fa fa-angle-right"></i>
			<span itemprop="name">About Us </span> 
			<i class="fa fa-angle-right"></i></a>
			</li>

			<li style="float: left"><a itemprop="item" href="#" style="color: #000"><span itemprop="name">Our Business</span> <i class="fa fa-angle-right"></i></a></li></ul>
		</div>
	</div>
	<div class="row padding_0" style="margin-bottom: 20px; padding-bottom: 0%;">
				<div class="col-sm-12 col-md-12 padding_0">
					<div class="col-sm-10 col-md-10 " style="padding-top: 30px;">
							<h1 id="overview-h2">OUR BUSINESSES</h1>
							<p id="overview-p">We operate various businesses and also derive support for our ecosystem from the businesses and services of related and affiliated companies. Our major businesses and the businesses of our related companies and affiliates include:</p>
					</div>

				</div>
				<div class="col-sm-12 col-md-12">
							<div class="group-business-list">
								
									 <div class="every-group"  style="margin-left: 12%;">
									 		<a href="http://www.globalsourcingbangladesh.com/" target="_blank">
											<img itemprop="image" style="width:100%;" src="{!! asset('assets/fontend/bdtdc-images/rainbows-badge-2.png') !!}" class="img-responsive" alt="Global sourceing Bangladesh"></a>
									</div>
									<div class="modal business-group2" style="margin: 0 auto; max-width: 650px; height: auto; background-color: #EFEDCB; max-height: 500px; position: absolute;">
									<div id="group-view-modal-dialog_1">
											<!-- <div class="closeBtn">
												
											</div> -->
											<div class="modal-header">
													<button class="close" data-dismiss="modal"><span>&times;</span>
														
													</button>
											</div>
										<div class="modal-body">
											<div class="group-title">
												Taobao Marketplace
											</div>
											<div class="group-subTitle">
												Bangladesh largest online shopping destination
											</div>
											<p style="line-height: 18px; font-size: 13px; margin-bottom: 20px;">
												Launched in May 2003, Rainbows Marketplace is the online shopping destination of choice for U.S.A consumers looking for wide selection, value and convenience. Shoppers choose from a wide range of products and services on Rainbows Marketplace, which features hundreds of millions of product and service listings. Rainbows Marketplace was U.S.A's largest online shopping destination in terms of gross merchandise volume in 2014, according to iResearch. In addition, the Mobile Taobao App was the No. 1 e-commerce app in U.S.A as of the end of March 2015, according to iResearch.
											</p>
										</div>
									</div>
								</div>
									<div class="every-group"  style="margin-left: 7%;">
											<a href="http://www.appsolutelybest.com/" target="_blank">
											<img itemprop="image" style="width:100%" src="{!! asset('assets/fontend/bdtdc-images/rainbows-badge-3.png') !!}" class="img-responsive" alt="Appsolutely best"></a>
									</div>
									<div class="modal business-group3" style="margin: 0 auto; max-width: 650px; height: auto; background-color: #EFEDCB; max-height: 500px; position: absolute;">
									<div id="group-view-modal-dialog_2">
											<!-- <div class="closeBtn">
												
											</div> -->
											<div class="modal-header">
													<button class="close" data-dismiss="modal"><span>&times;</span>
														
													</button>
											</div>
										<div class="modal-body">
											<div class="group-title">
												Taobao Marketplace
											</div>
											<div class="group-subTitle">
												Bangladesh largest online shopping destination
											</div>
											<p style="line-height: 18px; font-size: 13px; margin-bottom: 20px;">
												Launched in May 2003, Rainbows Marketplace is the online shopping destination of choice for U.S.A consumers looking for wide selection, value and convenience. Shoppers choose from a wide range of products and services on Rainbows Marketplace, which features hundreds of millions of product and service listings. Rainbows Marketplace was U.S.A's largest online shopping destination in terms of gross merchandise volume in 2014, according to iResearch. In addition, the Mobile Taobao App was the No. 1 e-commerce app in U.S.A as of the end of March 2015, according to iResearch.
											</p>
										</div>
									</div>
								</div>
									
									
							</div>
				</div>
				<div class="col-sm-12 col-md-12" style="padding-bottom: 5%;">
							<div class="col-sm-4 col-md-4">
								
							</div>
							<div class="col-sm-4 col-md-4">
								<div class="every-group"  style="margin-left: -4%;">
											<a href="http://www.rainbowbrush.com/web/index.htm" target="_blank">
											<img itemprop="image"  style="min-height: 105px; width:100%;" src="{!! asset('assets/fontend/bdtdc-images/rainbows-badge.png') !!}" class="img-responsive" alt="rainbow brush"></a>
									</div>
								<div class="modal business-group" style="margin: 0 auto; width: 650px; height: auto; background-color: #EFEDCB; max-height: 500px; position: absolute;">
									<div id="group-view-modal-dialog_3">
											
											<div class="modal-header">
													<button class="close" data-dismiss="modal"><span>&times;</span>
														
													</button>
											</div>
										<div class="modal-body">
											<div class="group-title">
												Rainbows
											</div>
											<div class="group-subTitle">
												U.S.A largest Rainbows Company
											</div>
											<p style="line-height: 18px; font-size: 13px; margin-bottom: 20px;">
												Launched in May 2003, Rainbows Marketplace is the online shopping destination of choice for U.S.A consumers looking for wide selection, value and convenience. Shoppers choose from a wide range of products and services on Rainbows Marketplace, which features hundreds of millions of product and service listings. Rainbows Marketplace was U.S.A's largest online shopping destination in terms of gross merchandise volume in 2014, according to iResearch. In addition, the Mobile Taobao App was the No. 1 e-commerce app in U.S.A as of the end of March 2015, according to iResearch.
											</p>
										</div>
									</div>
								</div> 
							</div>
							<div class="col-sm-4 col-md-4">
								
							</div>
				</div>
	</div>
@stop
@section('scripts')
 <script type="text/javascript">
	
</script>
@stop 