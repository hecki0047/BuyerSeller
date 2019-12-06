@extends('frontend.layouts.master-register')
	@section('page_css')
    <link property='stylesheet' href="{!! asset('css/for-suppliers/suppliers-memebership.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/source-view.css',is_secured()) !!}" rel="stylesheet">
    @endsection
	@section('content')
    <div class="row"  style="margin-bottom: 8px">
        <div class="col-md-12 padding_0">
               <ul class="" style="margin-left: -2%;float: left;padding-top: 1.5%;" itemscope itemtype="http://schema.org/BreadcrumbList">>
                        <li class="top-path-li" style="float: left;" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> Home &nbsp;</a></li>
                         <li class="top-path-li" style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="" style="color: #000"> <i class="fa fa-angle-right"></i> Supplier Membership</a></li>
                       
                       
          </ul>
          <div style="float:right;margin-left: -2%;padding-top: 1%;" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <button class="goBack" onclick="goBack()"><span>Go Back</span></button>
      </div>
        </div>
    </div>
		<div class="row padding_0" style="background-color: #fff; margin-top: 1px; padding-top: 5px;">
				 <img itemprop="image"   class="img-responsive header_img_fix" src="{!! asset('assets/helpcenter/images/member-solutions.jpg',is_secured()) !!}" alt="member solutions" />
		</div>
<div class="row padding_0" style="background: #fff; ">
		<div class="col-md-12 padding_0" style="min-height: 90px;">
				<div class="col-sm-3 col-xs-2 padding_0 mg-tp">	
				</div>
				<div class="col-sm-6 col-xs-8 padding_0">
				<h2 class="text-center chose-tit">Choose a BuyerSeller.Asia Gold Membership Package</h2>
				</div>
				<div class="col-sm-3 col-xs-2 padding_0  mg-tp"></div>
		</div>
</div>
<div class="row">		
			<div class="pricetable pricingtable55" id="upgp">
				<div class="pricetable-inner" style="border-top: 1px solid #ddd;">
					<div class="pricetable-column labeling" style="width:20%; background:none; border:0 none; margin: 0 !important;">
						   <div class="pricetable-column-wall" style="border-right: 1px solid #ddd;">
							<div class="labelTitle" style="background:#ffffff; padding-top: 0;border-top: 1px solid #ddd; padding-bottom: 0 !important; height: 50px; padding-top: 8px; color: #333; margin-bottom: 2px; border-bottom: 1px solid #ddd;"><span>Main Features</span></div>
							<ul class="features">
							<li class="priorty" style="border-bottom: 0 none !important;">Priority Ranking
 											<div class="member-list-right">
 												<h3 class="meb-cates-h3">Priority Ranking</h3>
 												<p class="meb-cates-p">Products from Gold Suppliers will have a better chance of appearing at the top of a buyer's search results.</p>
 												<p class="meb-cates-p">90% of buyers will view the first 3 search results pages only.</p>
 												 <img itemprop="image"   style="width: 558px; margin-top: 20px;" src="{!!asset('assets/fontend/bdtdc-images/priority-and-severity.jpg',is_secured())!!}" alt="priority and severity">

 									</div>
 								</li>

							<li class="priorty" style="border-bottom: 0 none !important;">Exclusive Representation
 											<div class="member-list-right">
 												<h3 class="meb-cates-h3">Get yourself represented exclusively</h3>
 												<p class="meb-cates-p">Gold Suppliers will receive the unique opportunity of having their products showcased in more than 20 tradeshows globally as we represent them exclusively while we meet and speak with Buyers on behalf of them. In addition, we will organize more than 100 targeted events, such as SME - focused exhibitions, seminars, workshops and forums each year in order to act as an unofficial ambassador of Bangladesh.</p>
 												

 									</div>
 								</li>

								<li class="pro-post" style="border-bottom: 0 none !important;">Product Posting
											<div class="member-list-right-b" style="top: -40px;">
 												<h3 class="meb-cates-h3">Product Posting</h3>
 												<p class="meb-cates-p">1. Both the quality and quantity of your product postings strongly influence a buyer's intent to purchase.</p>
 												
 										<img itemprop="image"   style="width: 558px; margin-top: 20px;" src="{!!asset('assets/fontend/bdtdc-images/product-advertising.jpg',is_secured())!!}" alt="product advertising">

 									</div>
									
								</li>
								<li class="pro-show" style="border-bottom: 0 none !important;">Product Showcases
										<div class="member-list-right-c" style="top: -80px;">
 												<h3 class="meb-cates-h3">Product Showcase</h3>
 												<p class="meb-cates-p">Product Showcase is a ranking function that highlights your products within both your customized website and in a buyer's search results.</p>
 												<p class="meb-cates-p">Product Showcase - It's good for business to get over 100 times more buyer clicks.</p>
 					 <img itemprop="image"   style="width: 558px; margin-top: 20px;" src="{!! asset('assets/fontend/bdtdc-images/product-display.jpg',is_secured())!!}" alt="product display">

 									</div>
								</li>
								<li class="buy-req" style="border-bottom: 0 none !important;">Ability to quote Buying Requests
										<div class="member-list-right-d" style="top: -120px;">
 												<h3 class="meb-cates-h3">Ability to quote Buying Requests</h3>
 												<p class="meb-cates-p" itemprop="description">Gold Suppliers can contact buyers immediately when a new Buying Request is posted. Gold Suppliers also have exclusive access to buyers' contact information.</p>
 												<p class="meb-cates-p">Over 20,000 new Buying Requests are posted on BuyerSeller.Asia everyday.</p>
 												<img itemprop="image"   style="width: 558px; margin-top: 20px;" src="{!! asset('assets/fontend/bdtdc-images/request-for-quotation.jpg',is_secured())!!}" alt=" request for quotation">

 									</div>
										
								</li>
								<li class="ver-icon" style="border-bottom: 0 none !important;">Verified Icon
										<div class="member-list-right-e" style="top: -160px;">
 												<h3 class="meb-cates-h3">Verified Icon</h3>
 												<p class="meb-cates-p" itemprop="description">All Gold Supplier Members must complete an Authentication & Verification process conducted by a third-party provider. This helps you gain immediate trust and recognition as a legitimate and serious trading partner.</p>
 												<p class="meb-cates-p">Over 85% of buyers prefer to do business with Gold Suppliers only.</p>
 												 <img itemprop="image"   style="width: 558px; margin-top: 20px;" src="{!! asset('assets/fontend/bdtdc-images/verify-your-account.jpg',is_secured()) !!}" alt="verify your account
">

 									</div>
										
								</li>
								<li class="custom-pro" style="border-bottom: 0 none !important;">Customized Website
									 <div class="member-list-right-f" style="top: -200px;">
 												<h3 class="meb-cates-h3">Customized Website</h3>
 												<p class="meb-cates-p">Customized website contains:</p>

													<p class="meb-cates-p">* Company photos</p>
													<p class="meb-cates-p">* Company video</p>
													<p class="meb-cates-p">* Company certificates</p>
													<img itemprop="image"   style="width: 558px; margin-top: 20px;" src="{!! asset('assets/fontend/bdtdc-images/website-personalization.png',is_secured()) !!}" alt="website personalization">

 									</div> 
								</li>
								<li class="service-pro" style="border-bottom: 0 none !important;">Personalized Suppliers Service
										<div class="member-list-right-g" style="top: -240px;">
 												<h3 class="meb-cates-h3">Personalized Suppliers Service</h3>
 												    <p class="meb-cates-p">* A&V process priority</p>
													<p class="meb-cates-p">* One-on-one assistance</p>
													<p class="meb-cates-p">* Priority access to promotions</p>
 									</div>
								</li>
								<li class="img-disk" style="border-bottom: 0 none !important;">Image Disk
										 <div class="member-list-right-h" style="top: -280px;">
 												<h3 class="meb-cates-h3">Photo Bank Size</h3>
 												<p class="meb-cates-p">5GB Photo Bank size = 1,500+ product photos (3MB/photo)</p>
											    <p class="meb-cates-p">2GB Photo Bank size = 1,000+ product photos (3MB/photo)</p>
												<p class="meb-cates-p">1GB Photo Bank size = 300+ product photos (3MB/photo)</p>
												<p class="meb-cates-p">150MB Photo Bank size = 50 product photos (3MB/photo)</p>

 									</div> 
								</li>
								<li class="img-disk" style="height: 50px">Apply 
										 
								</li>
							</ul>
							<!-- <div class="pricetable-feature-lbl">Features</div>
						<div class="pricetable-button-container"> <a itemprop="url"  href="-"> <span class="pricetable-gradient"><span class="pricetable-noise">choose</span></span></a></div> --> 
							<!-- <div class="labelTitle" style="background:#ffffff; height:31%; padding-bottom:0; padding-top:0; position:absolute; top:-7px; margin-bottom:-14px;">Main Features</div>  -->
						</div>
					  </div>
					 <?php $i = 1;$con = 0?>
					 @foreach($supplier_memberships as $supplier_membership)
					 <?php $class_mem = 'mem'.$i;  ?>
					  
					<div class="pricetable-column highlight" style="width:20%">
					  <div class="pricetable-column-wall">
					  	
					  	<form action="{{ URL::to('user/upgrade') }}" method="post" class="{{$class_mem}}">
					  		@csrf
						<div class="pricetable-header">
						 <!--  <div class="pricetable-fld-name" style="background-color: #fff !important; color: #666 !important; border:1px solid #e5e5e5; border-top: 0 none; border-right: 0 none; font-size: 11px !important;"> {{$supplier_membership->descriptions->name}}</div> -->
						</div>
						
					
						  @if($supplier_membership->id == 1)
						  		
						  		<img style="max-height: 135px; max-width: 135px;" src="{{asset('assets/fontend/img/superior-membership.png')}}" alt="Gold">
						  	 @endif
						  	@if($supplier_membership->id == 2)
						  		<img style="max-height: 135px; max-width: 135px;" src="{{asset('assets/fontend/img/advance-membership.png')}}" alt="Gold">
						  	 @endif
						  	@if($supplier_membership->id == 3)
						  		<img style="max-height: 135px; max-width: 135px;" src="{{asset('assets/fontend/img/excellent-membership.png')}}" alt="Gold">
						  	 @endif
						  		@if($supplier_membership->id == 4)
						  <!-- 	<div style="max-height: 135px; max-width: 135px;" style="width: 100%;text-align: center; font-size: 16px;font-weight: bold;height: 135px; position: relative;"><span style="position: absolute;left: 20px; top: 50px; color: #000;">Free Membership</span>
						  	</div> -->
						  	<div style="height: 135px;width: 135px; padding-top: 20%; padding-left: 8px; text-align: center;">
						  			<h3 style="padding: 0; margin: 0;">Free Membership</h3>
						  	</div>
						  
						  @endif
						<ul class="features" style="background: #fff; border-right: 1px solid #ddd;">
							<li style="border-top: 1px solid #ddd; padding-top: 10px !important; height: 50px;">
							<div class="pricetable-button-container" style="padding-bottom: 0 !important; padding-top: 0 !important;">							
									<a itemprop="url"  class="" style="background: #eeeeee;box-shadow: none;color: #333 !important;border: 1px solid #ddd; text-shadow: none;" data-toggle="modal" data-target="#superior<?php echo $con++?>"><?php if ($active_user == 0){echo 'View Details';}else{echo 'View Details';} ?></a>
								</div>
							
									 
							</li>
						
							<li><span>Priority</span>
								@if($supplier_membership->id==1)
								{{$supplier_membership->id}}st
								@elseif($supplier_membership->id==2)
								{{$supplier_membership->id}}nd
								@elseif($supplier_membership->id==3)
								{{$supplier_membership->id}}rd
								@else
								{{$supplier_membership->id}}th
								@endif
							</li>
							<li><span>Exclusive Representation</span>
								@if($supplier_membership->id==1)
								Y
								@elseif($supplier_membership->id==2)
								 <i class="fa fa-times" aria-hidden="true" style="color:red;"></i>
								@elseif($supplier_membership->id==3)
								 <i class="fa fa-times" aria-hidden="true" style="color:red;"></i>
								@else
								<i class="fa fa-times" aria-hidden="true" style="color:red;"></i>
								@endif
							</li>
							<li class="hasToolTip">
								<span>Product Listing</span>
								@if($supplier_membership->product_quantity==0)
								unlimited
								@else
								{{$supplier_membership->product_quantity}}
								@endif
								<!-- <small style="width:100%;height:170%; font-size:100%; padding:1% 5% 10% 3%; float:left; border-radius:10px !important;"><p style="font-size:100%;padding-right:2%;margin-top:3%; padding-left: 2%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras libero lacus, elementum nec elementum et, rhoncus at neque. </p></small> -->
							</li>
							<li><span>Product Showcase</span>
								@if($supplier_membership->Product_Showcases==0)
								<i class="fa fa-times" aria-hidden="true" style="color:red;"></i>
								@else
								{{$supplier_membership->Product_Showcases}}
								@endif
							</li>
							<li><span>Buying Request</span>@if($supplier_membership->Ability_to_quote_Buying_Requests==0)
								<i class="fa fa-times" aria-hidden="true" style="color:red;"></i>
								@else
								Y
								@endif
								</li>
							<li><span>Verified icon</span>@if($supplier_membership->Verified_Icon==0)
								<i class="fa fa-times" aria-hidden="true" style="color:red;"></i>
								@else
								Y
								@endif</li>
							<li><span>Customized minisite</span>@if($supplier_membership->Customized_Website==0)
									<i class="fa fa-times" aria-hidden="true" style="color:red;"></i>
								@else
									Y
								@endif</li>
							<li><span>Personal service</span>@if($supplier_membership->Personalized_Customer_Service==0)
								 <i class="fa fa-times" aria-hidden="true" style="color:red;"></i>
								@else
									Y
								@endif
								</li>
							<li><span>Photobank size</span>
								@if($supplier_membership->Photo_Bank_Size==0)
									150MB
								@else
									{{ $supplier_membership->Photo_Bank_Size ?? '' }} GB
								@endif
							</li>
							<li style="padding-top: 10px !important; height: 52px;">
							<div class="pricetable-button-container" style="padding-bottom: 0; padding-top: 0;">
								<input type="hidden" name="form_class" value="{{ $class_mem }}">
							<input type="hidden" name="form_id" value="{{ $supplier_membership->id }}">
							@if($supplier_membership->id == 4)
								@if($active_user == 0)
									<a itemprop="url"  href="{{ URL::to('join',null,is_secured()) }}" style="background: #eeeeee;box-shadow: none;color: #333 !important;border: 1px solid #ddd; text-shadow: none;">Apply Now</a>
									@else
									<p style="padding-bottom: 5px;padding-top: 4px; box-shadow: none;color: #333 !important; text-shadow: none;font-size: 15px">Choose other package</p>
									@endif
								@else
									<a itemprop="url"  class="applay-now" style="background: #eeeeee;box-shadow: none;color: #333 !important;border: 1px solid #ddd; text-shadow: none;"><?php if ($active_user == 0){echo 'Apply Now';}else{echo 'Apply Now';} ?></a>
							
								
							@endif
							</div>
							</li>
							
						</ul>

						<!-- <div class="pricetable-button-container" style="padding-bottom: 13%;">
							
						</div> -->
							</form>
						</div>
					</div>
					
			<?php $i++; ?>
				@endforeach
					
					
					<div class="pricetable-clear"></div>
				</div>
			</div>
		</div>
	<div class="row padding_0" style="background: #fff; margin-top: 15px; margin-bottom: 15px;">

	<div style="width: 100%;">
			<p class="platinum" style="padding-left: 15px; padding-right: 15px; text-align: center; "><q>Only Gold Members will get the benefit of being promoted and represented in more than 100 targeted events, exhibitions, trade shows, seminars, workshops and forums each year.</q></p>
	</div>
	</div>
	<div  class="row item_sha" style="margin-bottom:2%;">
		<div style="text-align:center;margin-left:auto; margin-right:auto;">
			<h2 class="text-center">Members Receive Monthly Inquiries</h2>

		</div>
		<div class="row cont_margin">
			 <div id="footer-shadow" class="col-md-6">
				
					<div style="padding-left: 20px;">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/AfbcL9Ui19Q?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
			</div>
			<div class="col-md-6">
				 <img itemprop="image"   class="img-responsive header_img_fix" src="{!! asset('assets/fontend/img/Chart.jpg',is_secured()) !!}" alt="Chart" />
			</div>
		</div>
	</div>
	<div class="row" style="background-color: #fff; padding-bottom: 3%;margin-bottom: 10px;border-bottom: 1px solid rgba(0,0,0,.1);">
		<p class="mmember-p">To learn more about our Gold Supplier,<a itemprop="url"  href="{{ URL::to('Gold-supplier',null,is_secured()) }}">Click Here</a></p>
		<p class="mmember-p" style="padding-top: 0;">Contact BuyerSeller.Asia staff at <a itemprop="url"  href="mailto:goldsupplier@buyerseller.asia">goldsupplier@BuyerSeller.Asia</a>.</p>
	</div>
	<br>





<div class="container">
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog" style="width: 720px;">
      <div class="modal-content" style="box-shadow: 2px 5px 8px rgba(0,0,0,.25);">
         <form name="form" class="login_form" method="POST" action="{{ URL::route('sessions.store')}}">
        {{ csrf_field() }}
	        <div class="modal-header" style="padding-top: 5px; padding-bottom: 0;">
		          <button type="button" class="close" data-dismiss="modal" style="padding-left: 25px;">&times;</button>
		          <h4 class="modal-title-bd">Sign in or Join Free now</h4>
		          <ul class="nav nav-tabs" style="border-bottom: 0 none; margin-bottom: 1px;">
					    <li class="sign-active"><a itemprop="url"  href="#sign-in" style="background-color: #fff !important; color: #666;" data-toggle="tab">Sign in to BuyerSeller.Asia</a></li>
					    <li><a itemprop="url"  href="{{ URL::to('join',null,is_secured()) }}" target="_blank">Join BuyerSeller.Asia</a></li>
				  </ul>
		          <div id="login_error" style="padding-top:6px;display:none;"><h6 class="modal-title-bd text-center text-danger"><b>Invalid credentials provided</b></h6></div>
		          <div id="email_error" style="padding-top:6px;display:none;"><h6 class="modal-title-bd text-center text-danger"><b>Invalid Email Address</b></h6></div>
	        </div>
	      <div class="tab-content">
	       <div class="tab-pane fade in active" id="sign-in" >
	        <div class="modal-body" id="sign_form-bdtdc">
	              <div class="form-group">
	                <label style="font-size: 13px; color: #666;">Account:</label>
	                <input placeholder="Email" class="form-control text-flm" required="required" name="email" type="email" autofocus="">
	              </div>
	              <div class="form-group">
	                <label  style="font-size: 13px; color: #666;">Password:</label>
	                <label style="font-size: 13px; color: #666; float: right;">Forgot Password?</label>
	                <input placeholder="Password" class="form-control text-flm" required="required" name="password" type="password">
	              </div>
	        </div>
	        <div class="modal-footer" style="border: 0 none; text-align: center; padding-bottom: 40px;">
		         <!--  <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button> -->
		         
		         <button type="submit" class="btn-lg btn btn-success login_submit" style="width: 310px; border-radius: 3px !important; height: 30px; padding: 4px 16px; font-size: 14px;">Submit</button>  
	        </div>
	      </div>
	     </div>
        </form>
      </div>
    </div>
  </div>
  </div>

<div class="modal fade" id="superior0" role="dialog">
    <div class="modal-dialog" style="width: 720px;">
    
      <!-- Modal content-->
      <div class="modal-content">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Features For Superior Membership</h4>
        </div>
        <div class="modal-body" style="padding-left: 30px;">
         		<ul class="membr">
         			<li>Products will appear on the top and first page of the buyer’s search.</li>
         			<li>Gold suppliers will receive the unique opportunity of having their products showcased in more than 20 trade shows globally as we represent them exclusively while we meet and speak with Buyers on behalf of them. In addition, we will organize more than 100 targeted events, such as SME - focused exhibitions, seminars, workshops and forums each year in order to act as an unofficial ambassador of Bangladesh. </li>
         			<li>A total of 30 Products images and details of the suppliers will be posted on the site in a profes-sional manner to make it more attractive to the buyers </li>
         			<li>Your products will be highlighted through product showcasing in both your e-store and in a buyer’s search. It will result in over 100 times more clicks from buyers.</li>
         			<li>A supplier can directly quote on the buyers RFQ’s and have exclusive access to buyers' contact information to directly contact buyers through BuyerSeller.Asia. Every day BuyerSeller.Asia receives bulk buying request from buyers.</li>
         			<li>A Premium Member must complete an Authentication & Verification process conducted by a third-party provider and BuyerSeller.Asia. This helps them to gain immediate trust and recognition as a legitimate and serious trading partner. Over 85% of buyers prefer to do business with premium members.</li>
         			<li>A complete business profile of the company will be created to give a buyer all the necessary in-formation to the buyers about a supplier’s company such as business details, companies pho-tos and videos and various certificates achieved by the company. A e-store will be created where the products images and details of the supplier will be displayed which is to be viewed by the buyers. </li>
         			<li>Authentication and verification checks will be done of the suppliers where the authentication check will be the check of the company’s registration, its legal owner or partners and check the tax department to see if the supplier have any tax issues or not. Verification check is the check done on the contact person of the supplier who will be communicating with the buyers through BuyerSeller.Asia </li>
         			<li>One-to-one assistant will be given to the premium suppliers</li>
         			<li>Products of the premium supplier will under promotions every day to reach buyer more quick-ly.</li>
         			<li>5GB Photo Bank size will be allocated for the premium supplier where a supplier can upload 1,500+ product photos (3MB/photo)</li>
         		</ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="superior1" role="dialog">
    <div class="modal-dialog" style="width: 720px;">
    
      <!-- Modal content-->
      <div class="modal-content">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Features For Advance Membership</h4>
        </div>
        <div class="modal-body" style="padding-left: 30px;">
         		<ul class="membr">
         			<li>Products will appear on the second page of the buyer’s search.</li>
         			<li>A total of 20 Products images and details of the suppliers will be posted on the site in a profes-sional manner to make it more attractive to the buyers </li>
         			<li>Your products will be highlighted through product showcasing in both your e-store and in a buyer’s search. It will result in over 100 times more clicks from buyers. </li>
         			<li>A supplier can directly quote on the buyers RFQ’s and have exclusive access to buyers' contact information to directly contact buyers through BuyerSeller.Asia. Every day BuyerSeller.Asia receives bulk buying request from buyers.  </li>
         			<li>A Premium Member must complete an Authentication & Verification process conducted by a third-party provider and BuyerSeller.Asia. This helps them to gain immediate trust and recognition as a legitimate and serious trading partner. Over 85% of buyers prefer to do business with premium members.</li>
         			<li>A complete business profile of the company will be created to give a buyer all the necessary in-formation to the buyers about a supplier’s company such as business details, companies pho-tos and videos and various certificates achieved by the company. A e-store will be created where the products images and details of the supplier will be displayed which is to be viewed by the buyers. </li>
         			<li>Products of the premium supplier will under promotions on regular segment to reach buyer more quickly.</li>
         			<li>2GB Photo Bank size will be allocated for the premium supplier where a supplier can upload 1,000+ product photos (3MB/photo)</li>
         			
         		</ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="superior2" role="dialog">
    <div class="modal-dialog" style="width: 720px;">
    
      <!-- Modal content-->
      <div class="modal-content">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Features For Excellent Membership</h4>
        </div>
        <div class="modal-body" style="padding-left: 30px;">
         		<ul class="membr">
         			<li>Products will appear on the third page of the buyer’s search.</li>
         			<li>A total of 10 Products images and details of the suppliers will be posted on the site in a professional manner to make it more attractive to the buyers  </li>
         			<li>Your products will be highlighted through product showcasing in both your e-store and in a buyer’s search. It will result in over 100 times more clicks from buyers. </li>
         			<li>A supplier can directly quote on the buyers RFQ’s through BuyerSeller.Asia. Every day BuyerSeller.Asia receives bulk buying request from buyers.  </li>
         			<li>A Premium Member must complete an Authentication & Verification process conducted by a third-party provider and BuyerSeller.Asia. This helps them to gain immediate trust and recognition as a legitimate and serious trading partner. Over 85% of buyers prefer to do business with premium members.</li>
         			<li>A complete business profile of the company will be created to give a buyer all the necessary in-formation to the buyers about a supplier’s company such as business details, companies photos and videos and various certificates achieved by the company. A e-store will be created where the products images and details of the supplier will be displayed which is to be viewed by the buyers. </li>
         			<li>Products of the premium supplier will under promotions once every week to reach buyer more quickly.</li>
         			<li>1GB Photo Bank size will be allocated for the premium supplier where a supplier can upload 500 + product photos (3MB/photo)</li>
         			
         		</ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<div class="modal fade" id="superior3" role="dialog">
    <div class="modal-dialog" style="width: 720px;">
    
      <!-- Modal content-->
      <div class="modal-content">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Features For Free Membership</h4>
        </div>
        <div class="modal-body" style="padding-left: 30px;">
         		<ul class="membr">
         			<li>Free Membership is for those Suppliers/Buyers who are still planning to use BuyerSeller to promote his/her business. A Free Member is also a valued member of the BuyerSeller Family with access to certain key features provided by BuyerSeller.  </li>
         			<li>Company Profile – This feature will allow every Member to display the basic information about their business such as, revenue earning, number of employees, products and services offered, etc. The Member will also be able to edit and share information which he/she wants to share only. </li>
         			<li>Products – Members will be able to display and edit descriptions, specifications and images of at least 25 products. </li>
         		</ul>
         		<h3 style="margin-left: -18px;font-weight:600; font-size: 18px;">However, a Free Member CANNOT do the following:</h3>
         		<ul class="membr">
         			<li>Quote to Inquiries</li>
         			<li>Access to buyers' contacts</li>
         			<li>Receive Recommended Inquiries</li>
         			<li>Set Preferred Inquiries</li>
         		</ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
@stop
@section('scripts')
	<script type="text/javascript">
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
 });

	function isValidateEmail(email)
        {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

       var form_id = '';
    $(document).on({click:function(){
    	base_url = window.location.origin;
        var url = base_url + '/user/upgrade';
        var post_form = $(this).parent().children('input[name="form_class"]').val();
        form_id = $(this).parent().children('input[name="form_id"]').val();
        var query_url = base_url + '/user/upgrade/'+form_id;
        // alert ($('.mem1').serialize());
         //alert (query_url);
        $.post(url, $('.'+post_form).serialize(), function(r) {

            if(parseInt(r) == 1){window.location.href = query_url; }
            if(parseInt(r) == 0) { $('#loginModal').modal('show');}
            if(parseInt(r) !=1 && parseInt(r) !=0){ alert("Fail!!, Query Could Not Sent");}
        });
	}},'.applay-now');


	$(document).on({
        click: function(e) {
            e.preventDefault();
            base_url = window.location.origin;
            var login_url = base_url + '/sessions';
            var query_url = base_url + '/user/upgrade/'+form_id;
            var email_data = $('[name="email"]').val();
            var password_valid = true;
            if(isValidateEmail(email_data)){
                $('#email_error').hide();
                $.post(login_url, $('.login_form').serialize(), function(result) {
                	window.location.href = query_url;
                /*$.post(query_url, $('.testform').serialize(), function(r) {
                    if(parseInt(r) == 1){window.location.href = base_url+'/success';}
                    if(parseInt(r) == 0) { $('#login_error').show();}
                    if(parseInt(r) !=1 && parseInt(r) !=0){ alert("Fail!!, Query Could Not Sent");}
                });*/
            });
            }else{
                $('#email_error').show();
            }
        }
    }, '.login_submit');

   function product_ranking_show(){


   }
   function product_ranking_hide(){

   }


</script>
@stop