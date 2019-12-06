@extends('frontend.layouts.header_dynamic')
@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/media-room-style.css',is_secured()) !!}" rel="stylesheet">
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/product-wholesale.css',is_secured()) !!}" rel="stylesheet">
@endsection
	@section('content')

 <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('about-us'),is_secured()}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">About BuyerSeller</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('media/room'),is_secured()}}"" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Media Room</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                         <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Press Release</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
<!-- <div class="row padding_0">
		<div class="col-sm-12" style="padding: 0; min-height: 60px; padding-top: 15px;">
				<ul class="nav nav-tab nav-pills trade-show-ul" style="background:none;border-bottom: 1px solid #dae2ed; margin-left: 0;" aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
								<li style="padding-top: 11px;font-size: 15px;font-weight: 600;"><i class="fa fa-home home-icon industy" style="vertical-align: inherit;"></i></li>
								<li class="" style="margin-left: 10px;"><a itemprop="url"  class="padding_0" href="{{URL::to('selected/supplier-products'),is_secured()}}" target="_blank" data-toggle="tab" aria-expanded="false" style="background-color: #f5f5f5;color: #5b9bd1;">Quality Suppliers</a></li>
								<li class=""><a itemprop="url"  style="font-size: 13px;" class="padding_0" href="{{URL::to('tradeshow'),is_secured()}}" data-toggle="tab" aria-expanded="false">BDTDC Events</a></li>
							<li class=""><a itemprop="url"   style="font-size: 13px;" class="padding_0" href="{!! URL::to('research',is_secured()) !!}" target="_blank">BDTDC Research</a></li>
								<li class=""><a itemprop="url"  style="font-size: 13px;" class="padding_0" href="{!! URL::to('bdtdc/service',is_secured()) !!}" data-toggle="tab" aria-expanded="false" target="_blank">Service Highlight</a></li>
								
								
								   
							</ul>
		</div>
	
</div> -->
<div class="row padding_0" style="background-color: #fff;">
	@include('frontend.contents-view.about-media-menu')

	<div class="col-sm-7" style="margin-top: 15px;">
				<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
						<img itemprop="image" style="height:300px; width:100%; " src="{!! asset('assets/fontend/bdtdc-images/Think-bdtdc_layout.jpg') !!}" class="girl img-responsive" alt="Think Bangladesh_layout">
				</div>
			<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
							<span ><img itemprop="image" style="margin-top:20px; padding-bottom:10px;" src="{!! asset('assets/fontend/bdtdc-images/daily-star-logo.png') !!}" alt="daily-star-logo"></span>
					
								<h3 class="content-h3" style="color:#333;
								padding-top: 0;font-weight: bold; ">NEWS Press Release</h3>
								<p class="portal-content-p" style="font-size: 16px; padding-top: 15px;">
								Date: April 12, 2016<br>
								Contact:<br>
								Kazi Ahmed<br>
								BuyerSeller.Asia<br>
								House 818, Road 12, Avenue 06, Mirpur DOHS, Dhaka 1216<br>
								Phone: +8801708-884440<br>
								E-mail: info@buyerseller.asia<br>
								www.buyerseller.asia
							</p>
							<p class="nation-h3">Bangladesh Exports Set to Boom as BuyerSeller drums up Greener Trade To
foster Sustainability</p>
							<p class="nation-h3">BuyerSeller.Asia intervention Initiative.</p>
							<p class="nation-h3">Investment of over $300 million into the Bangladesh trading scene and
							immediate employment of 200 high tech IT graduates to stimulate growth
							and business competition.</p>
							<p class="portal-content-p">
									Bangladesh is a victim of a rather negative reputation: the country is seen as being
								extremely poor, under-developed, subject to devastating natural disasters and socio-
								political instability.
							</p>
							<p class="portal-content-p">However, the country has the advantage of being located in a strategic geographical
							position between South and South-East Asia. In addition, its domestic consumption
							potential and the wealth of its natural (young population ages 15-35, which is 53
							million of the total population) resources make the country a good candidate for investment
							manufacturing hub. Despite these advantages, the country ranks 173rd
							out of 189th according to the <span style="color:#000; font-weight: bold;">World Bank's 2015 Doing Business</span> ranking.</p>
			<p class="portal-content-p">
				Environmental degradation in Bangladesh is pervasive. Air pollution in the urban areas
				are a constant reminder of the prevailing health catastrophe. Young children
				are mostly exposed to cadmium through inhalation of smoke and contaminated
				soils and dust from industrial emissions and sewage sludge. In fact, environmental
				scientists believe that the high lead in the environment from gasoline, paints, ceramics,
				batteries, etc. are factors in the increased risk of polluted air. The UN revealed
				that blood lead levels were very high and at toxic levels in children presenting
				with psycho motor delay and behavioral problems, indicating lead poisoning.
			</p>
			<p class="portal-content-p">
				An estimated 15,000 premature deaths, as well as several million cases of pulmonary,
				respiratory and neurological illness are attributed to poor air quality in
				Dhaka, according to the Air Quality Management Project (AQMP), funded by the
				government and the World Bank.
			</p>
			<p class="portal-content-p">
				The rivers of Bangladesh are the worst hit of pollution, especially the rivers which
				stands in the neighborhood of the Dhaka city is being polluted tremendously. It is
				clear that rapid and unplanned urbanization and industrialization, brick field development,
				dyeing factories, tanneries are grabbing up the river. The slum dwellers
				use unhygienic latrines, wash clothes; take bath even cows and goats bathe in the
				river. Untreated wastes are thrown into the river as most of the manufacturing industries
				have no Effluent Treatment Plan(ETP).
			</p>
			<p class="portal-content-p">
				<span style="color:#000; font-weight: bold;">The BuyerSeller.Asia,</span> under its vigorous and
				charismatic chairman, Kazi Ahmed, Eco-friendly B2B practitioner, Bangladeshi born
				Canadian and inventor of the world renowned brand <span style="color:#000; font-weight: bold;">RainbowBrush®</span> with over
				20 years of solid growth in the Craft and Toys industry is fervently commuted to
				fostering a better future for his homeland through respect for the healthy lives of its
				citizenry.
			</p>
			<p class="portal-content-p">
				His successful marketing of the world's greatest children educational product in
				over 27 countries worldwide with offices in Miami, Hong Kong and Vancouver to top
				brand retailers like Wal-mart, Target, K-mart, Sears, Costco, Toys R Us, Carrefour
				has propelled the initiative to salvage the disheveled and seemingly decrepit conditions
				of his home country workforce from squalor, disease and abject poverty emanating
				from poor environmental degradation and treacherous exploitation from adverse
				middlemen depriving them from deriving maximum benefits from their production
				processes.
			</p>
			<p class="portal-content-p">
				It is imperative to compel these industries and government to enact and execute
				laws that encourage the protection of the environment at all times. BuyerSeller is at the
				forefront of ensuring the preservation, prevention and mitigation of the environment
				and strongly believes that the world will be a better place for all inhabitants if
				we all become vigilant.
			</p>
			<p class="portal-content-p">
				The BuyerSeller serves as a platform to creating a One-Stop-Shop for investors
				(Bangladesh manufacturers and suppliers) to participate fully in the production,
				manufacturing and transaction process and ensure compliance with strict environmental
				standards in the factors of production; thereby protecting the earth as well
				as eliminating the greed and cumbersome activities of those who exploit the common
				citizens of Bangladesh.
			</p>
			<p class="portal-content-p">
				BuyerSeller is geared towards achieving higher living standards, full employment and
				sustainable development in Bangladesh through the creation of exportation of
				goods and services worth over <span style="color:#000; font-weight: bold;">$300 million </span>into the mainstream economy within a
				year as well as immediate employment of <span style="color:#000; font-weight: bold;">200 highest paid employments</span> who
				will be mostly stationed in Dhaka. Open economies tend to grow faster and more
				steadily than closed economies and economic growth is an important factor in job creation. Profitable companies tend to hire more workers than those posting a loss.
				Trade can also be a catalyst for greater efficiency and productivity. We have access
				to a wider range of high-quality, affordable inputs, technology and know-how that
				could not be obtained in a closed economy. Access to technology and quality inputs
				can boost innovation and creativity in the Bangladeshi workplace. Moreover, competition
				in the marketplace can be a powerful stimulus to companies seeking new
				ways of making things better and more cheaply.
			</p>
			<p class="portal-content-p">
			The people (factory owners and manufacturers) are hereby offered a leeway to attaining
			real wealth creators and owners by direct involvement with the exportation
			and sale of their goods as well as guaranteed access to Foreign Direct Investments
			(FDI) by sticking to the Millennium Development Goals (MDG) agenda which applies
			to all countries, promotes peaceful and inclusive societies, creates better jobs and
			tackles the environmental challenges of our time—particularly climate change.
			</p>
			<p class="portal-content-p">
			The BuyerSeller is committed to propelling, promoting and pursuing an environmentally
			friendly situation through education and empowerment of all to entrench the dictates
			of the UN goals for sustainable development and in the production of goods
			for international consumption. That indeed is the point of departure from old endangering
			habits to new and enduring sustainability for Bangladesh. Kazi Ahmed's
			long lasting wish is to bring the highest profitable orders from USA, Canada and EU
			to Bangladesh manufactures that hitherto benefited mostly China and Vietnam. It
			is hoped that with these intervention policies, Bangladesh will become more competitive,
			and perhaps gain comparative advantages in the production of garments,
			shoes, frozen shrimps, software, leather, tea and jute products.
			</p>
			<p class="portal-content-p">
				The future of the Bangladeshi people will ultimately be dependent on the
				<span style="color:#000; font-weight: bold;">Made-in-Bangladesh</span> factory owners and suppliers who will be in tandem with the
				production and exportation of their goods in total compliance and adherence to the
				new Green Environmental Sustainability (GES) initiative; thereby ensuring the survival
				of sea life, smog-free atmosphere and indeed a glorious and expanding future
				for this and the unborn generation.
			</p>
			<p class="portal-content-p">
				The onerous task of making Bangladesh a better place than we met it is the greatest
				gift to posterity. Prosperity will only beckon to all those who realize and believe
				in their individual and collective abilities as one indivisible nation to thrive , survive
				and provide for their families, now and in the future.
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