@extends('frontend.layouts.master-register')
	@section('page_css')
    <link property='stylesheet' href="{!! asset('css/about-us/entrepreneur-day.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('css/about-us/about-page.css',is_secured()) !!}" rel="stylesheet">
    @endsection
	@section('content')
	</div>
	@include('Aboutus.bdtdc-about-us-header')

<div class="container">
<div class="row">
		<div class="col-md-10 padding_0" style="padding-bottom: 1%;margin-top: 1%;">
			<ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"><span itemprop="name">Home &nbsp;</span> </a></li><li style="float: left"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" style="color: #000"> <i class="fa fa-angle-right"></i><span itemprop="name">About Us </span> <i class="fa fa-angle-right"></i></a></li>
			<li style="float: left"><a itemprop="item" href="#" style="color: #000"><span itemprop="name">Golbal Leadership</span> <i class="fa fa-angle-right"></i></a></li></ul>
		</div>
	</div>
<div  class="row item_sha" style="padding-bottom: 5%; margin-bottom: 38px;" >
		<div style="text-align:center;">
			<h2 class="text-center" style="padding-bottom: 2%;">A Global Leader in Entrepreneurship</h2>
		</div>
		<div class="row">
			<div id="footer-shadow" class="col-md-6">
			
					<div class="col-md-12" style="text-align: center;">
					
							
						<div class="col-md-7" style=" padding-right: 0px"><img itemprop="image" class="img-responsive" src="{!! asset('assets/fontend/bdtdc-images/kazi_ahamed.jpg') !!}" alt="Kazi Ahamed" />
							</div>
							<div class="col-md-5" style="padding-left: 0px; padding-top: 10%;">
							<h2 style="color: #255E98; margin-bottom: 2px;">Kazi Ahmed</h2>
<p style="font-size: 16px;font-weight: 600;">center for<br> entrepreneurial<br> leadership</p>
							</div>
					</div>
					
				
			</div>
			<div class="col-md-6">
			<img itemprop="image" style="border-radius: 2% !important;margin-left: 15%; margin-top: 10%; padding-bottom:10px; text-align: center;" class="img-responsive img-circle" src="{!! asset('assets/fontend/img/kazi.jpg',is_secured()) !!}" alt="Kazi Ahamed" />
			</div>
		</div>
</div>
	<div  class="row item_sha" style="padding-bottom: 5%; margin-bottom: 25px;">
		<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
					
				</div>
				<div class="col-sm-9 col-md-9 col-lg-9 col-xs-24">
						<h3 class="global-leader-h1">BuyerSeller.Asia, Entrepreneurship Internship Programs.</h3>
						<p class="global-p">
						An internship program that connects students with Bangladesh and Global Entrepreneurs.
						</p>
						<p class="global-p">
						Students and employers alike benefit from the Entrepreneurship Internship Program at buyerseller.asia Entrepreneurship Center. It is our mission to connect students with internship opportunities that will further develop their skill set and professional competencies while providing companies talented interns. The internship provides students the opportunity to build a relationship with an experienced professional who will not only transfer advice, knowledge, and insight, but provide guidance and support as they build their professional career. As a business in Dhaka, Bangladesh, you will be provided two interns annually that will assist in the advancement of an entrepreneurially driven projects.
						</p>
						<p class="global-p">
						BuyerSeller.Asia internship program offers three unique internship opportunities for students placing them in three distinctly different business environments. Students can gain experience in the corporate, startup or the non-profit business setting engaging in an internship opportunity that is entrepreneurial in spirit. For employers, students have assisted in the development of short and long-term strategy, competitive marketplace due diligence, financial analysis and much more. Strategic projects range from operations, finance, and management to business development, research and marketing. For interested companies, please review the program offering that best suits your company.
						</p>
						<div>
						<ul class="global-ul" style="width: 100%;display: block;padding: 0;">
							<li class="global-list">Startup Entrepreneurship Internship Program</li>
						    <li class="global-list">Corporate Entrepreneurship Internship Program</li>
						    <li class="global-list">BuyerSeller Social Entrepreneurship Internship Program</li>
						</ul>
						</div>
						<p class="global-p">
						If you are a student looking to gain experience submit your resume today!
						</p>
						<p class="global-p">
						Internships through the BuyerSeller.Asia are paid and professionally monitored. Please review the different internship programs available. If you have any questions, please contact Rejaul Karim at buyerseller.asia.
						</p>
						<!-- <div style="display: block;width: 100%; position: relative; padding-bottom: 2%;">
								<a itemprop="url" href="{-{URL::to('contact_message_form'),is_secured()}-}"><span class="btn btn-primary" style="width: 115px; height: 45px; text-align: center;position: absolute;right: 0; border-radius: 5px !important;">Feedback</span></a>
						</div> -->
				</div>
			
		</div>
	
	</div>
	@stop