@extends('frontend.layouts.header_dynamic')

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
			<li style="float: left"><a itemprop="item" href="#" style="color: #000"> <span itemprop="name">Company Overview</span> <i class="fa fa-angle-right"></i></a></li></ul>
		</div>
	</div>
		<div class="row padding_0" style="background: #fff; margin-bottom: 20px; padding-bottom: 0%;">
				<div class="col-sm-12 col-md-12 padding_0" style="padding-top: 90px;">
					<div class="col-sm-7 col-md-7">
							<h1 id="overview-h1">COMPANY OVERVIEW</h1>
					</div>
					<div class="col-sm-5 col-md-5">
						
					</div>
				</div>
				<div class="col-sm-12 col-md-12 padding_0">
						<div class="col-sm-8 col-md-8">
							<div>
									<img itemprop="image" style="width:100%;" src="{!! asset('assets/fontend/bdtdc-images/overview_map.png') !!}" class="img-responsive" alt="overview map">
								</div>
						</div>
						<div class="col-sm-4 col-md-4">
								<h3 class="overview-h3">THE MISSION OF BuyerSeller- ACHIEVE SUCCESS EFFORTLESSLY EVERYWHERE</h3>
								<p class="overview-p">
									BuyerSeller has managed an ecosystem where everyone can join hands and work together for a better and greener world. We provide a platform which enables our participants to communicate and trade trustfully and easily. Ours is a mobile and online marketplace for wholesale business and retail including cloud computing, which is ahead of all.
								</p>
						</div>
				</div>
				<div class="col-sm-12 col-md-12">
							<div class="col-sm-7">
								<div>
									<h3 id="overview-h2">VISION</h3>
									<p class="overview-p">In the fast-changing world of commerce, we envision to bring a new definition to business in a way that remains attached with everyone planning for a long-term successful existence. Our main focus is to boom in this sector as long as trade prevails. </p>
								</div>
								
								<div class="text3">
									<h3 class="orangeHeading">Stay connected</h3>
									<p class="overview-p">BuyerSeller.Asia promises our ecosystem participants a smooth and principled interaction, be it social or commercial, where they can discuss and improve businesses. It enables the users to interact with confidence and determination.</p>
								</div>
								<div class="text3">
									<h3 class="orangeHeading">Grow with us</h3>
									<p class="overview-p">BuyerSeller is a complete databank to its customers. With its fundamental infrastructure for technology and commerce, BuyerSeller allows development of businesses and acts as the base, where values are shared amid their ecosystem builders. </p>
								</div>
								<div class="text3">
									<h3 class="orangeHeading">Modify living</h3>
									<p class="overview-p">To become the fundamental need of our members in their everyday lives, we are determined to provide every amenity to them. This will simplify their trade life only with BuyerSeller as we keep upgrading continuously to satisfy our customers.</p>
								</div>
								<div class="text3">
									<h3 class="orangeHeading">Enduring</h3>
									<p class="overview-p">We place our self to the top of the world in the field of B2B business and even after centuries, we shall remain as a brand and role model to the human race. Our systems, cultures and organization are built to last forever, and forever means until trade becomes extinct.</p>
									
								</div>
								
							</div>
							<div class="col-sm-5 col-md-5">
									<img itemprop="image" style="margin-top: 20px; width:100%;"  src="{!! asset('assets/fontend/bdtdc-images/overview_city.jpg') !!}" class="img-responsive" alt="overview city">
							</div>
				</div>
			
		</div>
	<div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 28px;border-bottom: 1px solid #ddd;">
						<div class="col-sm-7 col-md-7">
						     <div id="text7" style="width:100%;">
							<p id="overview-p" style="text-transform: none;">BuyerSeller was founded in 2015 by Kazi Ahmed, a Canadian, born in Bangladesh. He is an entrepreneur and Loves business.  He discovered that Bangladesh is lagging behind despite the rich resources and manpower only due to the unavailability of tools and capacities. Therefore, out of his Love for his country, he started BuyerSeller with the hope that it will allow all the SMEs of Bangladesh and other South Asian countries to expose their rich industries both domestically and internationally. With the help of technology and innovation, it is possible to create a positive and long-lasting impression to the world. </p>

						  </div>
						</div>
						<div class="col-sm-5 col-md-5">
							<img itemprop="image" style=" width:100%;"  src="{!! asset('assets/fontend/bdtdc-images/overview_photo2.jpg') !!}" class="img-responsive" alt="Rainbrush">
						</div>
	</div>
@stop
