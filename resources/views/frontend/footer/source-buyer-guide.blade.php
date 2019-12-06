@extends('fontend.master_dynamic')
	 @section('page_css')
    <link property='stylesheet' href="{!! asset('css/guide-bdsource.css',is_secured()) !!}" rel="stylesheet">    
    @endsection
	@section('content')
	</div>
	<div class="container">
		<div class="col-sm-12 col-md-12 col-lg-12" style="padding: 0">
                    <ul class="top-path" style="padding-bottom:15px;" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="url" href="#" class="top-path-li-a">Bdsource<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
	</div>
	<div class="container-fluid padding_0" id="bd-backg">
		<div style="background: #ddd; padding-top: 28px; padding-bottom: 50px; text-align:center;">

			<div class="container">
					 <video class="bdsource-gd" poster="{!! asset('assets/fontend/images/poster1.png') !!}" controls>
						  
						 <source src="{!! asset('assets/fontend/images/BDSource.mp4')!!}" type="video/mp4">
						 <source src="{!! asset('assets/fontend/images/BDSource.webm')!!}" type="video/webm">
						  
					</video>
				 
			</div>
		</div>
	<div style="background:#fff; width:100%;">
			<div class="container" >
					<div class="row padding_0">
						<div style="text-align: center;position: relative;padding-bottom: 15px;">
							<h2 style="padding-top: 60px;font-weight: bold;font-size: 48px;color: #333;">How to use BdSource</h2>
						</div>
					</div>
				<div class="row padding_0">
					<div class="col-sm-12" style="text-align: center;width: 100%;padding: 15px 0;z-index:20;position: static;left: auto;top: auto;display: block;bottom: auto; padding-bottom: 30px;">
								<div class="col-sm-4">
									<div style="font-size: 17px;color: #425166;"><span style="padding-right:15px;"><img   src="{!! asset('assets/fontend/images/step-1.png') !!}" alt="step1" /></span>Submit detailed Buying Request</div>
								</div>
								<div class="col-sm-4">
										<div style="font-size: 17px;color: #425166;"><span style="padding-right:15px;"><img   src="{!! asset('assets/fontend/images/step-2.png') !!}" alt="step2" /></span>Check for quotations</div>
								</div>
								<div class="col-sm-4">
										<div style="font-size: 17px;color: #425166;"> <span style="padding-right:15px;"><img  src="{!! asset('assets/fontend/images/step-3.png') !!}" alt="step3" /></span>Build your deal online</div>
								</div>
						</div>
					</div>
			</div>
	</div>
	<div class="container">
			<div class="row padding_0">
					<div class="col-sm-5 col-md-5">
							<div class="text-content" style="width: 460px; opacity: 1;left: 191.5px">
							<div class="main-ttt" style="font-size: 35px;">Submit a detailed </div>
							<div class="buy-req">Buying Request</div>
							<div class="buy-rq-des">
                			A Buying Request tells suppliers your exact sourcing requirements. It should include information like your material preferences and size requirements.
              				</div>
              		<div><div  class="btn btn-primary join" style="border-radius: 5px !important; padding: 12px 19px;"><a href="{!! URL::to('get-quotations') !!}" style="color:#fff!important;">Request for Quotation</a></div></div>
              			</div>
					</div>
					<div class="col-sm-7 col-md-7 padding_0">
						<img class="burer-quet img-responsive" src="{!! asset('assets/fontend/images/buyer-quet.jpg') !!}" alt="buyer quet">
					</div>
			</div>
			<div class="row padding_0">
					<div class="col-sm-7 col-md-7 padding_0">
						<img class="burer-quet img-responsive" style="float:left;" src="{!! asset('assets/fontend/images/check-quation.jpg') !!}" alt="check quation">
					</div>
					<div class="col-sm-5 col-md-5">
							<div class="text-content" style="width: 460px; opacity: 1;left: 191.5px">
							<div class="main-ttt" style="font-size: 35px;">Check for quotations</div>
							<!-- <div class="buy-req"></div> -->
							<div class="buy-rq-des">
                			You will be sent a notification email each time you receive a new quotation. Please check your email inbox regularly.
              				</div>
              				<div><div  class="btn btn-primary join" style="border-radius: 5px !important; padding: 12px 19px;"><a href="{!! URL::to('Mybuying-Request') !!}" style="color:#fff!important;">Trade Center</a></div></div>
              			</div>
              				
              			</div>
					</div>
			<div class="row padding_0">
					<div class="col-sm-5 col-md-5">
							<div class="text-content" style="width: 460px; opacity: 1;left: 191.5px">
							<div class="main-ttt" style="font-size: 35px;">Build your deal online </div>
							
							<div class="buy-rq-des">
                			 Use our comparison tool to check the quotation details and the background of different suppliers. Alter finding the right supplier, contact them online or place a sample order directly.

              				</div>
              				<div><div class="btn btn-primary join" style="border-radius: 5px !important; padding: 12px 19px;"><a href="{{URL::to('get-quotations')}}" style="color:#fff!important;">Get Start</a></div></div>
              				
              			</div>
					</div>
					<div class="col-sm-7 col-md-7 padding_0">
						<img class="burer-quet img-responsive" src="{!! asset('assets/fontend/images/buyer-quet.jpg') !!}" alt="buyer-quet">
					</div>
			</div>
	</div>
</div>
<div class="container">
@stop