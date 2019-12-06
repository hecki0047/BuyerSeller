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
								<li class=""><a itemprop="url" itemprop="url"  style="font-size: 13px;" class="padding_0" href="{!! URL::to('services',null,is_secured()) !!}" data-toggle="tab" aria-expanded="false" target="_blank">Service Highlight</a></li>
								
								
								   
							</ul>
		</div>
	
</div>
<div class="row padding_0" style="background-color: #fff;">
	<div class="col-sm-2">
		<div class="side-bdtdc-menu">
				<ul style="padding-left: 0;">
					<li><a itemprop="url"   href="{{URL::to('tradeshow',null,is_secured())}}" class="frIco event" target="_blank"><p>Events</p></a></li>
					<li><a itemprop="url"   href="{{URL::to('prease-release/the-daily-star'),is_secured()}}" class="frIco press"><p>Press Release</p></a></li>
					
					<!-- <li style="height: 50px;"><a itemprop="url"    href="{{URL::to('bangladesh/business'),is_secured()}}" class="frIco bangla"><p>Bangladesh Means Business</p></a></li> -->
					<li><a itemprop="url"    href="https://www.youtube.com/c/Bdtdc" class="frIco video-i"><p>Video</p></a></li>
					
					<li><a itemprop="url"    href="https://www.facebook.com/bdtdc/" target="_blank" class="frIco sosial-con"><p>Social Media</p></a></li>
					
					<li><a itemprop="url"    href="{{URL::to('contact')}}" target="_blank" class="frIco contac-con"><p>Contact Us</p></a></li>
				</ul>
		</div>
		<div class="promo-img">
		  	
		  
		</div>
		<div class="sideSocial">
            <ul style="padding: 0; display: block; overflow: hidden;">
                <li><a itemprop="url" href="#" class="frIco icoSF" target="_blank"></a></li>
                <li><a itemprop="url" href="#" class="frIco icoST" target="_blank"></a></li>
                <li><a itemprop="url" href="#" class="frIco icoSG" target="_blank"></a></li>
                <li><a itemprop="url" href="#" class="frIco icoSY" target="_blank"></a></li>
                <li><a itemprop="url" href="#" class="frIco icoSL" target="_blank"></a></li>
                <li><a itemprop="url" href="#" class="frIco icoSS st_sharethis_custom"></a></li>
                <li><a itemprop="url" href="#" class="frIco icoSR" target="_blank"></a></li>
            </ul>
        </div>
		
	</div>
	<div class="col-sm-7" style="margin-top: 15px;">
				<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
						<img itemprop="image" style="height:250px;width:100%; width:100%;"  src="{!! asset('assets/fontend/imgsss/Poverty-Banner-1.jpg') !!}" class="girl img-responsive" alt="">
				</div>
			<div class="col-sm-12 col-md-12 col-lg-12 padding_0">

								
							<p class="nation-h3" style="padding-top: 4%;">BuyerSeller Fights Pollution & Poverty To Create A Better Future For Bangladesh</p>
							<p class="nation-h3">Website Educates, Promotes And Supports Manufacturers That Follow UN Guidelines For A More Sustainable Future</p>
							<p class="portal-content-p">
									<span style="color:#000; font-weight: bold;">DHAKA, April 12, 2016 –</span> Founded in 2015 by Kazi Ahmed, the <span style="color:#000; font-weight: bold;">BuyerSeller.Asia</span> is a B2B website dedicated to reducing disease and environmental degradation by empowering eco-minded SMEs, giving them the tools needed to connect with and compete against the global marketplace.  Last year alone they organized over 100 promotional events to help local products reach international clients, including outreach programs, networking opportunities, product exhibitions and commercial delegations, with the website recently announcing a new and extensive list of trade-shows for 2016.
							</p>
							<p class="portal-content-p">The <span style="color:#000; font-weight: bold;">BuyerSeller</span> was launched after Kazi Ahmed, a native of Bangladesh who studied abroad in Canada and the United States, returned home following a thirty year absence.  Upon his arrival in Dhaka, he witnessed the disastrous effects of industrial under-regulation on the city's air, water and food supply.  “It breaks my heart to see millions of people dying from these...living hell factories,” said Ahmed in a personal interview.  “The factories are killing the environment...contaminating the rivers, lakes and air with dangerous chemicals due to a lack of regulation.”  According to the <span style="color:#000; font-weight: bold;">World Bank's Air Quality Management Project (AQMP)</span>, airborne toxins in Dhaka cause an estimated 15,000 premature deaths each year along with several million cases of pulmonary and respiratory illnesses.</p>
			<p class="portal-content-p">
				In an effort to combat this national health crisis, Ahmed created the <span style="color:#000; font-weight: bold;">BuyerSeller</span> to support, educate and empower businesses which follow the <span style="color:#000; font-weight: bold;">United Nations</span> environmental guidelines, helping them achieve more sustainable policies and lowering the volume of harmful pollutants.  “There are many wonderful manufacturers in Bangladesh who produce world class products,” said Ahmed during the same interview.  “But a lack of knowledge and access to overseas buyers means they struggle to survive.”  However, through workshops, seminars and forums, the <span style="color:#000; font-weight: bold;">BuyerSeller</span> helps thousands of local manufacturers connect with global consumers, while also providing entrepreneurs the tools and knowledge required to grow.
			</p>
			<p class="portal-content-p">
				On related news, the company is proud to announce the creation of 200 highly paid, full-time jobs at its corporate headquarters in Dhaka.  With yearly revenues expected to add an estimated $300 million to Bangladesh's economy, the <span style="color:#000; font-weight: bold;">BuyerSeller</span> hopes to strengthen both the nation's economy and ecology.  
			</p>
			<p class="portal-content-p">
				The company website has also added new exhibitions and trade-shows for the year 2016.  With a broad range of categories including furniture, textiles, electronics and pharmaceuticals, the <span style="color:#000; font-weight: bold;">BuyerSeller</span> is once again hoping to put local green businesses on an international stage.  For more information on expos, conferences or seminars, please visit the following website: 
			</p>
			<p class="portal-content-p" style="float: initial; clear: both;">
				
			</p>
			<p class="portal-content-p" style="float: initial;clear: both;">
				Media Links:<br><br>
				<button type="button" class="btn btn-primary btn-md" style="border-radius:3px !important;"><a href="https://www.facebook.com/bdtdc/" target="_blank" style="color:#fff;">BuyerSeller Facebook</a></button>
				<button type="button" class="btn btn-primary btn-md" style="border-radius:3px !important;"><a href="https://twitter.com/bdtdc" target="_blank" style="color:#fff;">BuyerSeller Twitter</a></button>
				<button type="button" class="btn btn-primary btn-md" style="border-radius:3px !important;"><a href="http://www.BuyerSeller.asia/" target="_blank" style="color:#fff;">BuyerSeller Website</a></button>
				<button type="button" class="btn btn-primary btn-md" style="border-radius:3px !important;    margin-top: 4px;"><a href="{{ URL::to('about-us')}}" target="_blank" style="color:#fff;">About BuyerSeller</a></button>

				<br>
				<br>

				Contact Information:<br>
				Phone:  880-170-888-4440<br>
				Email:  info@BuyerSeller.Asia

			</p>
			
		</div>
				
@include('frontend.contents-view.media-room-top-stories')
<!-- end slider -->	
		
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