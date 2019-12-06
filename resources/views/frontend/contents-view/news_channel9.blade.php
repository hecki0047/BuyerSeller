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
								<li class="" style="margin-left: 10px;"><a itemprop="url" itemprop="url"  class="padding_0" href="{{URL::to('selected/supplier-products',null,is_secured())}}" target="_blank" data-toggle="tab" aria-expanded="false" style="background-color: #f5f5f5;color: #5b9bd1;">Quality Suppliers</a></li>
								<li class=""><a itemprop="url" itemprop="url"  style="font-size: 13px;" class="padding_0" href="{{URL::to('tradeshow',null,is_secured())}}" data-toggle="tab" aria-expanded="false">BuyerSeller Events</a></li>
							<li class=""><a itemprop="url" itemprop="url"   style="font-size: 13px;" class="padding_0" href="{!! URL::to('research',null,is_secured()) !!}" target="_blank">BuyerSeller Research</a></li>
								<li class=""><a itemprop="url" itemprop="url"  style="font-size: 13px;" class="padding_0" href="{!! URL::to('services',null,is_secured()) !!}"  target="_blank">Service Highlight</a></li>
								
								
								   
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
						<iframe width="100%" height="315" src="https://www.youtube.com/embed/tfvdG8vDW1w" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 padding_0" style="padding: 30px 0;line-height: 25px;font-size: 14px;font-weight: 400;color: #666;text-align: left;width: 100%;">
						<p>
							For providing all the necessary information and services for exporting the products that are being manufactured and importing the raw materials needed, a new business organization named <strong>BuyerSeller.Asia</strong>, has started its business operation in Bangladesh. The company is expected to play an important role in spreading the local market globally<p>
<p>BuyerSeller.Asia, in short, BuyerSeller.Asia, has already started providing service of online wholesale marketplace and their main goal is to spread the local market globally. Primarily, the organization is carrying out online promotion of the products that are being manufactured locally to the international market and provides all the facilities for those who wants to import raw materials from outside the country.
</p>
<p>“Our main objectives are to highlight and promote the product and services of our country to global buyers and establish a connection between the buyers and the suppliers,” states Kazi Ahmed, the C.E.O. of the company.
</p>
<p>BuyerSeller believes that by creating a connection between buyers and suppliers, it will help to spread our local market globally.
</p>
<p>“Whenever you think about Asia, think Bangladesh,” says Kazi. 
</p>
<p>Nevertheless, BuyerSeller is focusing more on the quality products that are being manufactured in Bangladesh in order to gain acceptance at the international market as with that, it will eventually result in new buyers becoming created for these products.
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