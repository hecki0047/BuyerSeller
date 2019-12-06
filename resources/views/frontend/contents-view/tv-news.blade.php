@extends('frontend.layouts.master-register')
@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/media-room-style.css',is_secured()) !!}" rel="stylesheet">
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/product-wholesale.css',is_secured()) !!}" rel="stylesheet">
@endsection
	@section('content')


<div class="row padding_0">
		<div class="col-sm-12" style="padding: 0; min-height: 60px; padding-top: 15px;">
				<ul class="nav nav-tab nav-pills trade-show-ul" style="background:none;border-bottom: 1px solid #dae2ed; margin-left: 0;" aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
								<li style="padding-top: 11px;font-size: 15px;font-weight: 600;"><i class="fa fa-home home-icon industy" style="vertical-align: inherit;"></i></li>
								<li class="" style="margin-left: 10px;"><a itemprop="url"  class="padding_0" href="{{URL::to('selected/supplier-products'),is_secured()}}" target="_blank" data-toggle="tab" aria-expanded="false" style="background-color: #f5f5f5;color: #5b9bd1;">Quality Suppliers</a></li>
								<li class=""><a itemprop="url"  style="font-size: 13px;" class="padding_0" href="{{URL::to('tradeshow'),is_secured()}}" data-toggle="tab" aria-expanded="false">BuyerSeller Events</a></li>
							<li class=""><a itemprop="url"   style="font-size: 13px;" class="padding_0" href="{!! URL::to('research',null,is_secured()) !!}" target="_blank">BuyerSeller Research</a></li>
								<li class=""><a itemprop="url"  style="font-size: 13px;" class="padding_0" href="{!! URL::to('services',null,is_secured()) !!}" data-toggle="tab" aria-expanded="false" target="_blank">Service Highlight</a></li>
								
								
								   
							</ul>
		</div>
	
</div>
<div class="row padding_0" style="background-color: #fff;">
	<div class="col-sm-2">
		<div class="side-bdtdc-menu">
				<ul style="padding-left: 0;">
					<li><a itemprop="url"  href="{{URL::to('tradeshow'),is_secured()}}" class="frIco event" target="_blank"><p>Events</p></a></li>
					<li><a itemprop="url"  href="{{URL::to('prease-release/the-daily-star'),is_secured()}}" class="frIco press"><p>Press Release</p></a></li>
					<!-- <li><a itemprop="url"  href="#" class="frIco procost"><p>Podcast</p></a></li> -->
					<li style="height: 50px;"><a itemprop="url"  href="{{URL::to('bangladesh/business'),is_secured()}}" class="frIco bangla"><p>Bangladesh Means Business</p></a></li>
					<li><a itemprop="url"  href="https://www.youtube.com/c/Bdtdc" class="frIco video-i"><p>Video</p></a></li>
					<li><a itemprop="url"  href="https://www.facebook.com/bdtdc/" target="_blank" class="frIco sosial-con"><p>Social Media</p></a></li>
					<!-- <li style="height: 50px;"><a itemprop="url"  href="#" class="frIco meida-res"><p>Media Photos and Registration</p></a></li> -->
					<li><a itemprop="url"  href="{{URL::to('contact')}}" target="_blank" class="frIco contac-con"><p>Contact Us</p></a></li>
				</ul>
		</div>
		
	</div>
	<div class="col-sm-7" style="margin-top: 15px;">
				<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
						<iframe width="100%" height="315" src="https://www.youtube.com/embed/v9Is3OtBArI" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 padding_0" style="padding: 30px 0;line-height: 25px;font-size: 14px;font-weight: 400;color: #666;text-align: left;width: 100%;">
						<p>
							BuyerSeller.Asia, the country’s first online wholesale marketplace has commenced its journey. Here, manufacturers, suppliers, exporters and entrepreneurs can display their products directly to the global market which will eventually reduce their dependency on the brokerage houses or agencies.<p>
<p>Jack Ma, the founder of the online marketplace Alibaba, has already captured the markets of Europe, America and other developed countries and was thinking of capturing the Bangladeshi market as well but the BuyerSeller.Asia commenced its journey in Bangladesh just in time by offering its B2B service.</p>
<p>The C.E.O. of the company, Kazi Ahmed expresses that their main target is to establish a direct connection between manufacturers and buyers. The production sectors in Bangladesh that are to be considered highly within the platform are – apparel and leather products, software, handicrafts and other manufactured products which will help to enhance the business in Bangladesh.</p>
<p>“Our target is to promote the products which are made in Bangladesh to the global market while establishing a connection between buyers and suppliers,” states Kazi. “We carry out more than 100 seminars, conferences and other diverse expos where we act as an unofficial representative of Bangladesh.”</p>
<p>The ICT minister of Bangladesh has already declared to provide all the facilities required to boost the e-commerce sector in the country.</p>
<p>“Majority of the people in our country discusses within themselves stating that countries like China has Alibaba, India has Flipkart and the world is at their fingertips while we don’t possess anything like that,” states the ICT Minister. “If the number of Internet users does not increase by a considerable amount, we can’t expect to get hold of new e-commerce users.”</p>
<p>The business organization is keeping an eagle eye on shoveling in business well above 30 crore taka at the global market by the end of 2017.
						</p>
				</div>
			@include('frontend.contents-view.media-room-top-stories')
			
		
	</div>
	<div class="col-sm-3">
		
	</div>
	
</div>
<br>

	@stop
@section('scripts')
<script type="text/javascript">
		 

</script>
@stop