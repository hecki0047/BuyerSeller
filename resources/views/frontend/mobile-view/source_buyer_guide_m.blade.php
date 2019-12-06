@extends('mobile-view.layout.master_m')
	@section('content')
<section>
	<div class="container" >
	<div class="row">
	<div id="bd-backg">
		<div style="background: #ddd; padding-top: 10px; padding-bottom: 20px; text-align:center;">
					 <video style="width: 250px;" class="bdsource-gd_m"  controls>
						  
						 <source src="{!! asset('assets/fontend/images/BDSource.mp4',is_secured()) !!}" type="video/mp4">
						 <source src="{!! asset('assets/fontend/images/BDSource.webm',is_secured()) !!}" type="video/webm">
						  
					</video>
				 
			</div>
		</div>
</div>
</div>
</section>
<section>
	<div class="container" style="background:#fff; width:100%;">
					<div class="row">
						<div style="text-align: center;position: relative;">
							<h2 style="padding-top: 10px;font-weight: bold;font-size:16px;color: #333;margin-bottom: 10px;">How to use BdSource</h2>
						</div>
					</div>
				<div class="row">
					<div class="col-sm-12" style="text-align:left;width: 100%;padding: 15px 0;z-index:20;position: static;left: auto;top: auto;display: block;bottom: auto;">
							<ul>
								<li style="font-size: 13px;color: #425166;">
									<span style="padding-right:5px;"><img style=""   src="{!! asset('assets/fontend/images/step-1.png',is_secured()) !!}" alt="step1" /></span>Submit detailed Buying Request..
								</li>
								<li style="font-size: 13px;color: #425166;">
									<span style="padding-right:5px;"><img  src="{!! asset('assets/fontend/images/step-2.png',is_secured()) !!}" alt="step2" /></span>Check for quotations.......	
								</li>
								<li style="font-size: 13px;color: #425166;">
										 <span style="padding-right:5px;"><img  src="{!! asset('assets/fontend/images/step-3.png',is_secured()) !!}" alt="step3" /></span>Build your deal online.....
								</li>
							</ul>
						</div>
					</div>
			<div class="row">
					<div class="col-xs-12" style="padding-left: 40px;">
							<div class="text-content" style="width: 100%; opacity: 1;">
							<div class="main-ttt" style="font-size: 18px; color: #333; padding-top: 20px;">Submit a detailed </div>
							<div class="buy-req"  style="font-size: 18px; color: #333;">Buying Request</div>
							<div class="buy-rq-des" style="font-size: 12px; width: 100%; color: #333;">
                			A Buying Request tells suppliers your exact sourcing requirements. It should include information like your material preferences and size requirements.
              				</div>
              		<div><button type="submit" class="btn btn-primary join" style="border-radius: 5px !important; padding: 12px 19px;"><a href="{!! URL::to('get-quotations',is_secured()) !!}" style="color:#fff;">Submit Quotation</a></button></div>
              			</div>
					</div>
					<div class="col-xs-12">
						<img style="width: 100%;" class="burer-quet_m img-responsive" src="{!! asset('assets/gold/get-queation.jpg',is_secured()) !!}">
					</div>
			</div> 
			<div class="row">
					<div class="col-xs-12">
						<img style="width: 100%;"  class="burer-quet_m img-responsive" style="float:left;" src="{!! asset('assets/gold/dashboad.jpg',is_secured()) !!}">
					</div>
					<div class="col-xs-12">
						<div class="text-content" style="opacity: 1;">
							<p style="font-size: 20px; color: #333;">Check for quotations</p>
						<!-- 	<p style="font-size: 18px;color: #333;"></p> -->
							<p style="font-size: 13px;color: #333;">
                			You will be sent a notification email each time you receive a new quotation. Please check your email inbox regularly.
              				</p>
              			</div>	
              		</div>
			</div>
			<div class="row">
					<div class="col-xs-12">
							<div class="text-content" style="opacity: 1;">
						<div class="main-ttt" style="font-size: 18px; color:#333;">Build your deal online </div>
							
							<div class="buy-rq-des" style="font-size: 13px;color:#666;">
                			 Use our comparison tool to check the quotation details and the background of different suppliers. Alter finding the right supplier, contact them online or place a sample order directly.

              				</div>
              				
              				
              			</div>
					</div>
					<div class="col-xs-12">
						<img style="width: 100%;"  class="burer-quet img-responsive" src="{!! asset('assets/gold/get-queation.jpg',is_secured()) !!}">
					</div>
			</div>
</div>
</section>
@stop