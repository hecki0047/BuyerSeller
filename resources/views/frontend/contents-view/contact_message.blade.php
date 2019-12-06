@extends('frontend.layouts.header_dynamic')
@section('content')
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name" style="color:#333">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="{{URL::to('contact_message_form')}}" class="top-path-li-a"><span itemprop="name" style="color:#333">Contact Us</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
<div class="row" style="margin-bottom:4%;background-color:#fff !important;padding-bottom:20px;">
	
	<div class="col-sm-12">
		<div class="col-sm-1"></div>
			<!-- <form action="{!! URL::to('contact/message/form_success')!!}" method="post" class="contact_message_form" enctype="multipart/form-data"> -->
			{!!Form::open(['route'=>'contact_message_form_success'])!!}
			{!! csrf_field() !!}
				@if (count($errors) > 0)
				    <div class="alert alert-danger" style="margin-top:10px;">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
				<div class="col-sm-8" style="margin-top:4%;margin-bottom:2%;">
					<div class="col-sm-12" style="margin-top:20px;">
						<p style="font-size: 170%;padding-left: 14.4%; font-weight: 400;">We welcome your questions, comments, or feedback</p>
					</div>
					<div class="col-sm-12" style="margin-bottom: 15px;">
				        <div class="col-sm-3">
				            <p style="color: #000;font-size:12px;font-weight:700;padding-top:33px;margin-left:-53%;padding-top:17%">
				                <span style="color:#F00;padding-left: 28%;">*</span>Name:
				            </p>
				        </div>
				        <div class="col-sm-5" style="margin-left: -88px;padding-top: 11px;padding-bottom:20px;">
				            <input type="text" class="form-control productview name" style="border-radius: 5px !important;height: 40px;width: 255%;padding:10px;" aria-label="..."  placeholder="Name" name="name">
				        	       
				        </div>
				    </div>
				
					<div class="col-sm-12" style="margin-top: -3%;">
				        <div class="col-sm-3">
				            <p style="color: #000;font-size:12px;font-weight:700;padding-top:33px;margin-left:-53%;padding-top:17%">
				                <span style="color:#F00;padding-left: 28%;">*</span>Email:
				            </p>
				        </div>
				         <div class="col-sm-5" style="margin-left: -88px;padding-top: 11px;padding-bottom:20px;">
				            <input type="text" class="form-control productview name" style="border-radius: 5px !important;height: 40px;width: 255%;padding:10px;" aria-label="..."  placeholder="Email" name="email">
				        	       
				        </div>
				    </div>

				    <div class="col-sm-12">

				    	<div class="col-sm-3">
				            <p style="color: #000;font-size:12px;font-weight:700;padding-top:33px;margin-left:-61%;padding-top:18px;">
				                <span style="color:#F00;padding-left: 28%;">*</span>Subject:
				            </p>
				        </div>
				    	<div class="col-sm-5" style="margin-top: -2%;">
				    		<div class="form-group" style="margin-left: -33%;width: 255%;">
								<select class="form-control productview subject" name="subject" style="border-radius: 5px !important;height: 41px;">
								    <option>--Choose--</option>
								    <option>Question</option>
								    <option>Business proposal</option>
								    <option>Advertising</option>
								    <option>Complaint</option>
								</select>
							</div>
				    	</div>
				    </div>

					<div class="col-sm-12" style="margin-top: -1.5%;">
					    <div class="col-sm-3">
					        <p style="color: #000;font-size:12px;font-weight:700;padding-top:29px;margin-left: -368%;">
					            <span style="color:#F00;padding-left:74%;">*</span>Message:
					        </p>
					    </div>
					    <div class="col-sm-9 " style="padding-top:20px;">
					        <textarea class="productview message" name="message" style="border-radius: 5px !important;width: 135%;height: 205px;margin-left:-17% ;margin-top: -1px;background-color: #fff !important;" placeholder="Message"></textarea>
					    </div>
					    
					</div>
					<div class="col-sm-12" style="padding-top: 3%;padding-left: 17%;padding-bottom: 43px;">
						<button type="submit" class="btn btn-primary join" style="border-radius:5px !important;text-align:center;border: 1px solid #DAE2ED;color: #fff! important;font-size: 18px;">
							Submit
						</button>
				    </div>
				</div>
				{!!Form::close()!!}
			<!-- </form> -->
		<div class="col-sm-2"></div>
	</div>
</div>

<div  class="row item_sha" style="margin-bottom:2%;">
		<div style="margin:0 auto; text-align:center;">
			<h2 class="text-center">Showcase function is awesome!</h2>
		</div>
		<div class="row cont_margin">
			<div id="footer-shadow" class="col-md-6">
				<div class="col-md-12">
					<q>BuyerSeller is the next big thing in the B2B industry for Bangladesh. It's simple, easy, very interactive, I could go on, but I want to be brief. We are new member, and began marketing with BuyerSeller. Well in 6 days I had 85 views, 7 inquiries and three bookings.  Keep up the good work!</q>
				</div>
			
					<div class="col-md-6">
					<div style="padding-top: 8%;">
						<h4 style="font-size: 16px; color: #000; font-weight: 600;">S M Shahab Uddin</h4>
						<p style="margin: 0;">General Manager at Best Western Plus Heritage</p>
							<p>Cox Bazar</p>
					</div>
						
					</div>
					<div class="col-md-6">
						<img itemprop="image" class="img-responsive img-circle" style="padding-bottom:10px;" src="{!! asset('assets/fontend/bdtdc-images/S-M-Shahab-Uddin.png',is_secured()) !!}" alt="S M Shahab Uddin" />
						
					</div>
				
			</div>
			<div class="col-md-6">
				<img itemprop="image" class="img-responsive header_img_fix" src="{!! asset('assets/fontend/img/TB1v.D.jpg',is_secured()) !!}" alt="showcase" />
			</div>
		</div>
	</div>
@stop

@section('scripts')


@stop 