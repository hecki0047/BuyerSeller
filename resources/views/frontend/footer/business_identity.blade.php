@extends('frontend.layouts.master-register')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('css/trade-services/business-identity.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')
	<div>
	<div class="row" style="padding-top: 1%;">
        <div class="col-lg-12 col-md-12 padding_0">
            <ul  style="margin-left: -2%;float: left;">
            <li style="float: left">
              <a itemprop="url" href="{{ URL::to('/',null,is_secured())}}" style="color: #000">
              Home
              </a> <i class="fa fa-angle-right"></i> 
            </li>
            <li style="float: left">
              <a itemprop="url" href="{{ URL::to('/ServiceChannel/pages/for_buyer',35,is_secured())}}" style="color: #000">
              Help Center
              </a> <i class="fa fa-angle-right"></i> 
            </li>
            
            <li style="float: left">
            <a itemprop="url" href="#" style="color: #000">
               <strong> Business Identity</strong>
            </a> <i class="fa fa-angle-right"></i></li>
            </ul>
            <ul style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
       
      </ul>
       <button class="goBack" onclick="goBack()" style="padding: 0; float: right;"><span>Go Back</span></button>
        </div>
    </div>
		<div class="row header_cont_color" style="">
			<img itemprop="image" class="img-responsive header_img_fix" src="{!! asset('assets/helpcenter/business-finder.jpg',is_secured()) !!}" alt="business finder" />
		</div>
		<div class="row post_sec item_sha">
			<div class="col-md-4 col-sm-4 border section_padding">
				<h3 class="post_sec-h3">Highlight your verification status</h3>
				<p class="post_sec-p">Effortless identification implies suppliers are 63% more inclined to contact purchasers

with a confirmed Business Identity.</p>
			</div>
			<div class="col-md-4 col-sm-4 border section_padding">
				<h3 class="post_sec-h3">Promotional events</h3>
				<p class="post_sec-p">BuyerSeller.Asia partners hold joint promotional events that are available especially for verified

buyers. </p>
			</div>
			<div class="col-md-4 col-sm-4 section_padding last_padding">
				<h3 class="post_sec-h3">Quicker responses from verified supplier </h3>
				<p class="post_sec-p">Get noticed rapidly by suppliers. Higher possibility of obtaining quicker and better

responses. </p>
			</div>
		</div>
		<div  class="row item_sha">
			<div class="col-md-5"></div>
			<div class="col-md-2 button_padding">
				<a itemprop="url" href="{{URL::to('company/dashboard',null,is_secured())}}" class="btn btn-primary center-block btn-join">Verify</a>
			</div>
			<div class="col-md-5"></div>
		</div>

		<div  class="row item_sha" style="padding-bottom:30px;">
			<div class="col-md-3 col-sm-3">
				<div class="row" style="padding-bottom:20px;">
					<div class="col-md-4 col-sm-4">
							<div class="appp">
								
							</div>
					</div>
					<div class="col-md-8 col-sm-8">
					
						<p style="font-size: 16px;margin-bottom: 5px;font-weight: bold;color: #333;padding-top:10px;">Apply</p>
						<p style="font-size: 12px;line-height: 14px;color: #333;">Choose ways to get verified</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6" style="padding-top:20px;">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="row">
							<div class="col-md-4 col-md-4">
								<div class="appp-contact">
									
								</div>
							</div>
							<div class="col-md-8 col-md-8 col-xs-6">
								<p style="font-size: 12px;line-height: 14px;color: #333;">
									Contact verification
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="row">
							<div class="col-md-4 col-md-4">
									<div class="cont-invited"></div>
							</div>
							<div class="col-md-8 col-md-8">
								<p style="font-size: 12px;line-height: 14px;color: #333;">
									Contacts invited
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="row">
							<div class="col-md-4 col-md-4">
								<div class="third-invite"></div>
							</div>
							<div class="col-md-8 col-md-8">
								<p style="font-size: 12px;line-height: 14px;color: #333;">Three contacts verification</p>
							</div>
						</div>
					</div>
				</div>
				<!--start-->
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="row">
							<div class="col-md-4 col-md-4">
								<div class="bdtdc-veri"></div>
							</div>
							<div class="col-md-8 col-md-8">
								<p style="font-size: 12px;line-height: 14px;color: #333;">Get verified by third party</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="row">
							<div class="col-md-4 col-md-4">
								<div class="third-part"></div>
							</div>
							<div class="col-md-8 col-md-8">
								<p style="font-size: 12px;line-height: 14px;color: #333;">Complete application</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="row">
							<div class="col-md-4 col-md-4">
								<div class="party-2"></div>
							</div>
							<div class="col-md-8 col-md-8">
								<p style="font-size: 12px;line-height: 14px;color: #333;">Third party verification</p>
							</div>
						</div>
					</div>
				</div>
				<!--ends-->
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<div class="row" style="padding-top:20px;">
					<div class="col-md-4 col-sm-4">
						<div class="enjoy-bdt"></div>
					</div>
					<div class="col-md-8 col-sm-8">
						<p style="font-size: 16px;margin-bottom: 5px;color: #333;font-weight: bold;">Enjoy the benefits</p>
						<p style="font-size: 12px;line-height: 14px;color: #333;">Business Identity icon displayed</p>
					</div>
				</div>
			</div>
		</div>
	
		
		<div class="row item_sha">
			<div class="col-md-8 col-sm-8 border">
				<div class="row padding-bottom">
					
				
						<div class="col-sm-12" style="padding-top:20px;padding-bottom:20px;">
						<p style="font-size: 18px;color: #333;font-weight: bold; padding-left: 32px;">
							Supplier Feedback
						</p>
						</div>
						<div class="col-sm-12">
							<div class="col-md-2 col-sm-2">
								 <img itemprop="image" style="height:13%;width:120%;" class="img-circle" src="{!! asset('assets/fontend/img/kazi.jpg',is_secured()) !!}" alt="Kazi Ahmed" /> 
							</div>
							<div class="col-sm-4">
								 <p>Name: <span>Kazi Ahmed</span></p>
								<p>Joined BuyerSeller.Asia: <span>2016</span></p>
								<p>Industry: <span>Painting/Toys</span></p> 
							</div>
							<div class="col-md-6 col-sm-6">
								<p>Company:<span>Rainbowbrush LLC.</span></p>
								<p>Company Link:<span><a itemprop="url" href="http://www.rainbowbrush.com/" target="_blank">http://www.rainbowbrush.com</a></span></p> 
							</div>
						</div>
						
					
					
				</div>
				<div class="row padding-bottom">
					<p style="padding-left:50px;padding-right:10px;border-top: solid 1px #e9eef4;padding-top: 25px;font-size: 14px;color: #666;font: inherit;vertical-align: baseline;">
					Business Identity has helped us to save a lot of time when we wanted to get a quicker and 
					accurate response from our buyers. Through Business Identity, we have managed to build better 
					long-term relationships with our buyers.</p>
					
				</div>
			</div>
			<div class="col-md-4 col-sm-4" style="padding-bottom:30px;">
				<h4 style="padding-top:20px;">FAQs:</h4>
				<ul>
				@if($parent_cat_name)
					@foreach($parent_cat_name as $data)
					<li><a itemprop="url" href="{{URL::to('faq-detail',$data->id,is_secured())}}" style="text-decoration: none;color: #333;font-size: 14px;">{{ $data->name }}</a></li>
					@endforeach
					@endif
				</ul>
				<!-- <a itemprop="url" href="{{URL::to('FooterPage/pages/Help_Center',19)}}" style="padding-left:78%;text-decoration: none;color: #1686cc;font-size: 13px;"> -->
				<!-- 	Learn More
				</a> -->
			</div>
		</div>
	
		<div class="row" style="margin-bottom:5%;padding-top:20px;margin-bottom: 0%; padding: 2%;">
				<p>Any questions, <a itemprop="url" href="{{ URL::to('FooterPage/pages/Contact_Us',20,is_secured())}}">please contact us</a></p>
		</div>
	</div>
   @stop