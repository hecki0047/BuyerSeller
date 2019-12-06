@extends('frontend.layouts.header_dynamic')

	@section('content')
	<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="{{URL::to('FooterPage/pages/Help_Center',19,is_secured())}}" class="top-path-li-a"><span itemprop="name">Help Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a   itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Safety & Security</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
	<div class="row" style="margin-bottom: 15px">
		<div class="col-sm-12" style="border: 1px solid #DDD;margin-top:10px;">
			<div class="col-sm-8" style="border-right:1px solid #DDD;padding-top:20px;">
				<div class="col-sm-12">
					<p class="trading"  style="padding-bottom:10px; padding-left: 15px;">Trading Safety</p>
					<div class="col-sm-6" style="border-right:1px solid #DDD;">
						<img itemprop="image" style="height:221px;width:260px;" src="{!! asset('assets/buyer-security/paysafe.jpg') !!}" alt="paysafe" />
						<p class="payment">Payment Safety</p>
					</div>
					<div class="col-sm-6">
						<img itemprop="image" style="height:221px;width:260px;" src="{!! asset('assets/buyer-security/supplier-selection.jpg') !!}" alt="supplier selection" />
						<p class="payment">Supplier Selection</p>
					</div>
				</div>

			</div>
			<div class="col-sm-4" style="padding-top:20px;">
				<p class="trading" style=" padding-left: 15px;" >Dispute & Fraud</p>
				<ul class="col-sm-12" style="padding-top:20px;">
					
					@if($parent_cat_name)
					             @foreach($parent_cat_name as $data)
									<li class="policy-list">
										<a href="{{URL::to('faq-detail',$data->id,is_secured())}}" class="dispute" style="color: #666;font-size:14px;">{{ $data->name }}</a>
									</li>
								@endforeach
					           @endif
				</ul>
			</div>
		</div>
		<div class="col-sm-12" style="border: 1px solid #DDD;margin-top:30px;">
			<div class="col-sm-8" style="border-right:1px solid #DDD;padding-top:20px;">
				<div class="col-sm-12">
					<p class="trading"  style="padding-bottom:10px; padding-left: 15px;">Account Security</p>
					<div class="col-sm-6" style="border-right:1px solid #DDD;">
						<img itemprop="image" style="height:221px;width:260px;" src="{!! asset('assets/buyer-security/phishing-emails.jpg') !!}" alt="phishing emails" />
						<p class="payment">Phising Emails</p>
					</div>
					<div class="col-sm-6">
						<img itemprop="image" style="height:221px;width:260px;" src="{!! asset('assets/buyer-security/account-reactivation.jpg') !!}" alt="account reactivation" />
						<p class="payment">Account Reactivation</p>
					</div>
				</div>

			</div>
			<div class="col-sm-4" style="padding-top:20px; ">
				<p class="trading" style=" padding-left: 15px;" >Account Protection</p>
				<ul class="col-sm-12" style="padding-top:20px;">
				@if($parent_cat_nmm)
					             @foreach($parent_cat_nmm as $data)
									<li class="policy-list">
										<a href="{{URL::to('faq-detail',$data->id,is_secured())}}" class="dispute" style="color: #666;font-size:14px;">{{ $data->name }}</a>
									</li>
					@endforeach
					     @endif
					
				</ul>
			</div>
		</div>
		<!-- <div class="col-sm-12" style="border: 1px solid #DDD;margin-top:30px;">
			<p class="trading"  style="padding-top:10px;padding-bottom:10px;">Recommended Videos</p>
			<div class="col-sm-4" style="padding-bottom:30px;">
				<div class="col-sm-12">
					<div class="col-sm-6">
						<img itemprop="image" style="height:152px;width:125px;" src="{!! asset('assets/buyer-security/avoid-phishing.jpg') !!}" alt="avoid phishing" />
					</div>
					<div class="col-sm-6 padding_0">
						<p>How to avoid phishing</p>
						<p><a itemprop="url"  href="#" class="dispute1" >See the ways to keep your account away from phishing emails in this video.</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4" style="padding-bottom:30px;">
				<div class="col-sm-12">
					<div class="col-sm-6">
						<img itemprop="image" style="height:152px;width:125px;" src="{!! asset('assets/buyer-security/Inspection-Service.jpg') !!}" alt="Inspection Service" />
					</div>
					<div class="col-sm-6">
						<p>Inspection Service</p>
						<p><a itemprop="url"  href="#" class="dispute1" >
							Learn how bdtdc.com inspection service assures the quality of your product with this tutorial.
						</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4" style="padding-bottom:30px;">
				<div class="col-sm-12">
					<div class="col-sm-6">
						<img itemprop="image" style="height:152px;width:125px;" src="{!! asset('assets/gold/Buyer-protect.jpg') !!}" alt="bdtdc Buyer Protection" />
					</div>
					<div class="col-sm-6">
						<p>Buyer Protection</p>
						<p><a itemprop="url"  href="#" class="dispute1" >
							Our buyer Protection  service provides 100% order safety. Watch this video to find out how we do so.
						</a></p>
					</div>
				</div>
			</div>
		</div> -->
	</div>
@stop