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
			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ URL::to('/',is_secured()) }}" style="color: #000"><span itemprop="name">Home &nbsp;</span> </a></li><li style="float: left"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" style="color: #000"> <i class="fa fa-angle-right"></i><span itemprop="name">About Us </span> <i class="fa fa-angle-right"></i></a></li>
			<li style="float: left"><a itemprop="item" href="#" style="color: #000"><span itemprop="name">Culture and Values</span> <i class="fa fa-angle-right"></i></a></li></ul>
		</div>
	</div>
		<div class="row padding_0" style="background: #fff; margin-bottom: 20px; padding-bottom: %;">
				<div class="col-sm-12 col-md-12 padding_0" style="padding-top: 90px;">
					<div class="col-sm-7 col-md-7">
							<h1 id="overview-h1">CULTURE AND VALUES</h1>
					</div>
					<div class="col-sm-5 col-md-5">
						
					</div>
				</div>
				<div class="col-sm-12 col-md-12 padding_0">
						<div class="col-sm-6 col-md-6" >
							<div>
									<img  itemprop="image" style=" max-width: 430px; max-height: 379px;" src="{!! asset('assets/gold/culture-first-min.png') !!}" class="img-responsive" alt="Business Building">
								</div>
						</div>
						<div class="col-sm-6 col-md-6" style="padding-top: 8%;">
								<h3 id="overview-h3">UPHOLDING PETITE BUSINESSES THROUGH BDTDC CULTURE</h3>
								<p class="overview-p">
									Our ecosystem provides a healthful environment which allows all its members including manufacturer, buyer, supplier, exporter and others to prosper in the world full of competition. 
								</p>
								<p  id="overview-p"> </p>
						</div>
				</div>
				<div class="col-sm-12 col-md-12">
							<div class="col-sm-6 col-md-6" style="padding-top: 10%;">
								<div>
									
									<p class="overview-p">We believe that our customers’ success leads to our success since it helps to build a long lasting, fruitful relation throughout. We focus entirely on customers’ satisfaction.</p>

<p class="overview-p">The larger we grow, the stronger we get. Sharing values enhances company community and cultures which enables to stay ahead in the race.</p>
								</div>
								

								
							</div>
							<div class="col-sm-6 col-md-6">
									<img  itemprop="image" style="max-height: 400px;" src="{!! asset('assets/gold/business-value-min.png') !!}" class="img-responsive" alt="business quality">
							</div>
				</div>
				<div class="col-sm-12 col-md-12">
						<div class="col-sm-1">
							
						</div>
						<div class="col-sm-10" style="border-bottom: 1px dotted #000;">
								
						</div>
						<div class="col-sm-1">
							
						</div>
				</div>
				<div class="col-sm-12 col-md-12">
							<div class="titleText">
				            	<h2 id="culture-h2">BuyerSeller Values</h2>
				                <p style="line-height: 22px; font-size: 120%;">We value our customers and keep them ahead of everything. How we compensate and evaluate our people, the way we recruit and operate is very unique and rudimentary. Our values are important to us and include:</p>
            				</div>
				</div>
				<div class="col-sm-12 col-md-12" style="padding-left: 7%; padding-right: 7%; padding-bottom: 4%;">
							<div class="col-sm-4 col-md-4">
									<div class="cultureBox" style="width: 100%;">
						            	<div  class="image"><img itemprop="image" style="height:120px; border-radius:50% !important;" src="{!! asset('assets/fontend/bdtdc-images/customer.jpg') !!}" alt="customer"></div>
						            	<h2 style="font-size: 22px;">Customer First</h2>
						                <p>Our customers’ demand is our core concern. BuyerSeller community of sellers and buyers are distinctly emphasized</p>
						            </div>
							</div>
							<div class="col-sm-4 col-md-4">
										<div class="cultureBox" style="width: 100%;">
							            	<div class="image"><img itemprop="image" style="height:120px; border-radius:50% !important;" src="{!! asset('assets/fontend/bdtdc-images/coporation.jpg') !!}" alt="coporation"></div>
							            	<h2 style="font-size: 22px;">COOPERATION</h2>
							                <p>Everyone is unique in their own way. Be it the way they think, the way they work or something else. Ordinary people can create extraordinary changes when working together in a team.</p>
							            </div>
							</div>
							<div class="col-sm-4 col-md-4">
									<div class="cultureBox" style="width: 100%;">
						            	<div class="image"><img itemprop="image" style="height:120px; width: 140px; border-radius:50% !important;" src="{!! asset('assets/fontend/bdtdc-images/embrace.jpg') !!}" alt="Embrace"></div>
						            	<h2 style="font-size: 22px;">Embrace Change</h2>
						                <p>To lead the competitive market and remain in the race, we must embrace changes and take up challenges faced in the journey. Obstacles has to be faced meanwhile strength and knowledge must be gathered. </p>
						            </div>
							</div>
					
				</div>
				<div class="col-sm-12 col-md-12" style="padding-left: 7%; padding-right: 7%; padding-bottom: 10%;">
							<div class="col-sm-4 col-md-4">
									<div class="cultureBox" style="width: 100%;height: auto;">
						            	<div class="image"><img itemprop="image" style="height:120px; border-radius:50% !important;" src="{!! asset('assets/fontend/bdtdc-images/virture.jpeg') !!}" alt="virture"></div>
						            	<h2 style="font-size: 22px;">VIRTUE</h2>
						                <p>BuyerSeller strongly believes that their teams are committed at their place and retain prominent levels of sincerity and honesty.</p>
						            </div>
							</div>
							<div class="col-sm-4 col-md-4">
										<div class="cultureBox" style="width: 100%;height: auto;">
							            	<div class="image"><img itemprop="image" style="height:120px; border-radius:50% !important;" src="{!! asset('assets/fontend/bdtdc-images/produce.png') !!}" alt="produce"></div>
							            	<h2 style="font-size: 22px;">GUSTO</h2>
							                <p>Our people are expected to carry these in their eyes-Appreciation, relish and appetite. They should be obsessed about the things they admire.</p>
							            </div>
							</div>
							<div class="col-sm-4 col-md-4">
									<div class="cultureBox" style="width: 100%;height: auto;">
						            	<div class="image"><img itemprop="image" style="height:120px; border-radius:50% !important;" src="{!! asset('assets/fontend/bdtdc-images/alligaince.jpg') !!}" alt="alligaince"></div>
						            	<h2 style="font-size: 22px;">ALLEGIANCE</h2>
						                <p>Our people are highly encouraged and fully supported to do what they Love and never give up. Employees are honored richly on the basis of their loyalty, Excellency and perseverance</p>
						            </div>
							</div>
					
				</div>
			
		</div>
@stop
