@extends('fontend.master_dynamic')
@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/media-room-style.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/learning-center.css',is_secured()) !!}" rel="stylesheet">
    @endsection
	@section('content')
	<div class="row" style="padding-bottom: 8px">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null, is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('ServiceChannel/pages/for_buyer',35, is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Help Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('SupplierChannel/pages/learning_center', 33, is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Learning Center </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="#" class="top-path-li-a"> <span itemprop="name" style="color: #333;">How to Join BuyerSeller </i></a></li>
                        
                    </ul>
            </div>
    
  </div>
	<div class="row padding_0" style="background:#ffffff; margin-bottom:28px;padding-bottom:5%;border-bottom: 1px solid rgba(0,0,0,.1); ">
	<h1 style="padding-left: 15px; text-align:center;">How can I join BuyerSeller.Asia
</h1>
		<div class="col-sm-12 col-md-12 col-lg" style="padding: 15px;">
		
					
		    <div class="col-sm-8 col-md-8 padding_0">
		  				
						<img class="user-join-learn img-responsive" src="{!! asset('assets/fontend/images/join-user.jpg',is_secured()) !!}">
			</div>
			<div class="col-sm-4 col-md-4 padding_0">
					<div class="guide-cont"><span class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span>To get connected with BuyerSeller.Asia as a FREE member, kindly please follow the following steps:
					   Click on “Join Free”;
                   </div>
                   <div class="col-sm-12 col-md-12 padding_0">
                      <div class="col-sm-4 padding_0">
		                    <div class="learn-image">
		                     <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/user-join-bdtdc.jpg',is_secured()) !!}" alt="">
		                    </div>
		                </div>
				         <div class="col-sm-8">
				            <p class="p-learn" style="text-align:left;"><a itemprop="url"  href="{{URL::to('how-to-join-bdtdc'),is_secured()}}" target="_blank">How to join BuyerSeller</a><br></p>
				           <p class="cont-right-learn">Product information quality is one of the factors influencing product ranking. Making high quality products can help you get more exposure from potential buyers.</p>
				            <h4 class="p-video-second"><a itemprop="url"  href="#">video | Text>></a></h4>
					</div>
                   </div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg" style="padding: 15px;background: #eaeaea;">
		  <div class="col-sm-8 col-md-8 padding_0">
						<img class="user-join-learn img-responsive" src="{!! asset('assets/fontend/images/join-required.jpg',is_secured()) !!}">
					</div>
			<div class="col-sm-4 col-md-4">
						<div class="guide-cont">
								<span class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span> Input your e-mail address in the “Email” field since it is unique and can be searched with ease. Verify by entering the Captcha in the “Verification Code” field. Click “Next” to go forward.
						</div>
							<div class="col-sm-12 col-md-12 padding_0">
		                      <div class="col-sm-4 padding_0">
				                    <div class="learn-image">
				                     <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/learn-image4.jpg',is_secured()) !!}" alt="">
				                    </div>
				                </div>
				         	<div class="col-sm-8">
				            	<p class="p-learn" style="text-align:left;"><a itemprop="url"  href="{{URL::to('buying-request')}}">Selling Opportunities with Buying Requests </a><br></p>
					           <p class="cont-right-learn">Make use of the Buying Requests to look for buyers and their sourcing needs and get in touch with buyers directly. </p>
					            <h4 class="p-video-second"><a itemprop="url"  href="#">video | Text>></a></h4>
					</div>
                   </div>
						
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg" style="padding: 15px;">
		  <div class="col-sm-8 col-md-8 padding_0">
						<img class="user-join-learn img-responsive" src="{!! asset('assets/fontend/images/join-get-message.jpg',is_secured()) !!}">
					</div>
			<div class="col-sm-4 col-md-4">
						<div class="guide-cont">
								<span class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span>Please sign into your mailbox to assure the registration e-mail is posted to your mailbox. This is done to verify your e-mail address by either clicking the button or the link as you complete your account registration. If you have NOT found the registration e-mail, kindly please follow the following steps:

						</div>
						<div class="col-sm-12 col-md-12 padding_0">
                      <div class="col-sm-4 padding_0">
		                    <div class="learn-image">
		                     <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/learn-image2.jpg',is_secured()) !!}" alt="">
		                    </div>
		                </div>
				         <div class="col-sm-8">
				            <p class="p-learn" style="text-align:left;"><a itemprop="url"  href="{{URL::to('Company/profile'),is_secured()}}" target="_blank">Create a Company Profile on BuyerSeller.Asia</a><br>
           			 our Company Profile tells potential customers your business type, products/services you offer, and other background information. </p>
           				 <h4 class="p-video-second"><a itemprop="url"  href="#">video | Text>></a></h4>
					</div>
                   </div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg" style="padding: 15px;background: #eaeaea;">
		  <div class="col-sm-8 col-md-8 padding_0">
						<img class="user-join-learn img-responsive" src="{!! asset('assets/fontend/images/join-user-security.jpg',is_secured()) !!}">
					</div>
			<div class="col-sm-4 col-md-4">
						<div class="guide-cont">
							<span class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span>Put up your details and click on “Next” to go to the next step of entering your Company Information.

						</div>
						<div class="col-sm-12 col-md-12 padding_0">
                      <div class="col-sm-4 padding_0">
		                    <div class="learn-image">
		                     <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/learn-image3.jpg',is_secured()) !!}" alt="">
		                    </div>
		                </div>
				         <div class="col-sm-8">
				             <p class="p-learn" style="text-align:left;"><a itemprop="url"  href="{{URL::to('Quality/posting-for-grab'),is_secured()}}" target="_blank">High Quality Posting</a><br></p>
          					 <p class="cont-right-learn">Product information quality is one of the factors influencing product ranking. Making high quality products can help you get more exposure from potential buyers.</p>
            <h4 class="p-video-second"><a itemprop="url"  href="#">video | Text>></a></h4>
					</div>
                   </div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg" style="padding: 15px;">
		  <div class="col-sm-8 col-md-8 padding_0">
						<img class="user-join-learn img-responsive" src="{!! asset('assets/fontend/images/join-user-company-info.jpg',is_secured()) !!}">
					</div>
			<div class="col-sm-4 col-md-4">
						<div class="guide-cont">
								<span class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span>Put up your details and Click on “Next” to go forward. In the “Select Customer Type” field, you are able to select registering your account as a Supplier, a Buyer or both. Besides, if you do not own a business, you are able to fill up the “Company Name” field with your name.

						</div>
						<div class="col-sm-12 col-md-12 padding_0">
                      <div class="col-sm-4 padding_0">
		                    <div class="learn-image">
		                   <img itemprop="image" src="{!! asset('assets/fontend/images/how-to-buy-product-bdtdc.jpg',is_secured()) !!}" alt="">
		                    </div>
		                </div>
				         <div class="col-sm-8">
				             <p class="p-learn"><a itemprop="url"  href="{{URL::to('how-to-buy-from-bdtdc'),is_secured()}}" target="_blank">How to buy product from BuyerSeller <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/l-new.gif',is_secured()) !!}" alt=""></a><br>
            				What are Multi-language sites</p>
            				<h4 class="p-video"><a itemprop="url"  href="#">video >></a></h4>
					</div>
                   </div>
			</div>
		</div>
		<div class="col-sm-12 col-md-12 col-lg" style="padding: 15px;background: #eaeaea;">
		  <div class="col-sm-8 col-md-8 padding_0">
						<img class="user-join-learn img-responsive" src="{!! asset('assets/fontend/images/join-user-success.jpg',is_secured()) !!}">
					</div>
			<div class="col-sm-4 col-md-4">
						<div class="guide-cont">
								<span class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span>As soon as your registration is finished, log into your account and set out enjoying the mixed bag of business possibilities offered by BuyerSeller.Asia!

						</div>
						<div class="col-sm-12 col-md-12 padding_0">
                      <div class="col-sm-4 padding_0">
		                    <div class="learn-image">
		                     <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/learn-image7.jpg',is_secured()) !!}" alt="">
		                    </div>
		                </div>
				         <div class="col-sm-8">
				            <p class="p-learn" style="text-align:left;"><a itemprop="url"  href="{{URL::to('Buyer/Training'),is_secured()}}" target="_blank">Understanding the Buyers </a></p>
          			      <p class="cont-right-learn">Keep up with the buyers' purchase behaviors and expectations so that you can maximize your business opportunities.  </p>
           				 <h4 class="p-video-second"><a itemprop="url"  href="#">video | Text>></a></h4>
					</div>
                   </div>
			</div>
		</div>
	</div>
@stop