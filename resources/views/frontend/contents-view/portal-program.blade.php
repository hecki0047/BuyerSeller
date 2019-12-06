@extends('frontend.layouts.master-register')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bangladesh-business-style.css',is_secured()) !!}" rel="stylesheet">
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bdtdc-sme-center-style.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')


	 <div class="row" style="margin-bottom: 8px">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a" ><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('about-us',is_secured())}}" class="top-path-li-a"><span itemprop="name">About BuyerSeller</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
      <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="#" class="top-path-li-a"><span itemprop="name">SME/ Start-up Portal</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    
  </div>


<!-- <div class="row padding_0" style="background-color: #fff;">
		<div class="col-sm-12" style="padding: 0; min-height: 60px; padding-top: 15px;">
				<ul class="nav nav-tab nav-pills trade-show-ul " style="background:none;border-bottom: 1px solid #dae2ed; margin-left: 0;width: auto;" aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
								<li style="padding-top: 11px;font-size: 15px;font-weight: 600;"><i class="fa fa-home home-icon industy" style="vertical-align: inherit; line-height: 18px"></i></li>
								<li class="" style="margin-left: 10px;"><a itemprop="url"  class="padding_0" href="#forbuyer" data-toggle="tab" aria-expanded="false" style="background-color: #f5f5f5;color: #5b9bd1 !important;">Quality Suppliers by Industry</a></li>
								<li class=""><a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#apparel" data-toggle="tab" aria-expanded="false">BDTDC Events</a></li>
								<li class=""><a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#electronic" data-toggle="tab" aria-expanded="false">BDTDC Research</a></li>
								<li class=""><a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#sport" data-toggle="tab" aria-expanded="false">Service Highlight</a></li>
								
								
								   
							</ul>
		</div>
	
</div> -->
<div class="row padding_0" style="background-color: #fff; padding-bottom: 3%;">
	<div class="col-sm-3 padding_0">
	<div class="bd-title" style="background-color: #255E98; color: #fff;"><h3 class="arrow-down" style="font-size:18px; color:#fff;">Small Business Resources</h3></div>
	@include('frontend/contents-view/small-business-menu')
	<!-- <div class="filter-body" style="background-color: #fff;">
							<ul id="format-filterlist" class="filter-list">
								
								<li class="" ><a itemprop="url" href="{{ URL::to('how-to/business-bangladesh',is_secured()) }}" style="color:#666;">Setting Up Business in Bangladesh</a> </li>
								<li class=" filter-specified" ><a itemprop="url" style="color:#666;" href="{{ URL::to('promoting/bangladesh',is_secured()) }}">SME Finance</a> </li>
								<li class="" ><a itemprop="url" style="color:#666;" href="{{ URL::to('how-to/business-bangladesh',is_secured()) }}">Import / Export Procedures of Bangladesh</a> </li>
								<li class="" ><a itemprop="url" style="color:#666;" href="{{ URL::to('BuyerChannel/pages/trade_intelligence,20',is_secured()) }}">Trade Regulations </a></li>
								<li class="" ><a itemprop="url" style="color:#666;" href="{{ URL::to('how-to/business-bangladesh',is_secured()) }}">Bangladesh Import Tariffs</a></li>	
								<li class="" ><a itemprop="url" style="color:#666;" href="{{ URL::to('tradeshow',is_secured()) }}">Support and Consultation Centre for SMEs (SUCCESS)</a></li>
								<li class="" ><a itemprop="url" style="color:#666;" href="{{ URL::to('bdtdc/sme-center',is_secured()) }}">BDTDC SME Centre </a></li>
								<li class="" ><a itemprop="url" style="color:#666;" href="{{ URL::to('start/programe',is_secured()) }}">BDTDC SME Start-up Programme</a> </li>	
								<li class="" ><a itemprop="url" style="color:#666;" href="{{ URL::to('business/advisory',is_secured()) }}">Business Advisory</a> </li>	
								<li class="" ><a itemprop="url" style="color:#666;" href="{{ URL::to('research',is_secured()) }}">Business Tools </a></li>	

							</ul>
				
					</div> -->
	<!-- <div class="filter-body" style="background-color: #fff;">
							<ul id="format-filterlist" class="filter-list">
								
								<li class="" id="Conference &amp; Forum"><span class="hover">+</span>Market Intelligence </li>
								<li class=" filter-specified" id="Seminar &amp; Workshop"><span class="hover">x</span>Marketing and Promotion </li>
								<li class="" id="Trade Mission"><span class="hover">+</span>Import / Export Procedures of Bangladesh </li>
								<li class="" id="Bangladesh Pavilion"><span class="hover">+</span>Management and Training </li>
								<li class="" id="Others"><span class="hover">+</span>SME News and Events</li>	
								<li class="" id="Others"><span class="hover">+</span>SME Success Stories(SUCCESS)</li>
								<li class="" id="Others"><span class="hover">+</span>BDTDC SME Centre </li>
								<li class="" id="Others"><span class="hover">+</span>BDTDC SME Start-up Programme </li>	
								<li class="" id="Others"><span class="hover">+</span>Business Advisory </li>	
								<li class="" id="Others"><span class="hover">+</span>SME Funding Schemes </li>	

							</ul>
				
					</div> -->
					<div style="border:1px solid #255E98; width: 100%; display: block;">
						
					</div>
	
		
	</div>
	<div class="col-sm-9" style="margin-top: 15px;">
				<div class="col-sm-12">
					<h3 class="portal-h3" style="padding-left: 0; position: relative;">BuyerSeller SME Inauguration Plan</h3>
				</div>
				<div class="col-sm-12 col-md-12">
				<h3 class="road-map" style="padding-top: 2%;">A Guideline to Initiate Your Individual Business</h3>
				<p class="portal-content-p">Starting at the propagation of fresh thoughts to their execution, starting at functional direction to gross revenue publicity – an enterpriser possesses lots of conditions on each stride. The SME inauguration plan provided by the BuyerSeller.Asia supplies encouraged servicing appropriate to these significant levels apiece along your guideline.- See more at:</p>

			</div>
			<div class="col-sm-12 col-md-12">
					 <img itemprop="image" style="width:100%;" src="{!! asset('assets/fontend/bdtdc-images/img_startup_support.jpg') !!}" alt="Bangladesh means business">
				
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12">
					<h3 class="content-h3">1.Planning:
</h3>
<p class="portal-content-p">Thoughts solely aren’t adequate to initiate your individual business. You require a good thought-out program, and effective planning invariably betters chances intended towards an effective commencement. The BuyerSeller aids you become fully organized!
</p>
<h4 class="content-h4-a">Introduction: Enterpriser Workshop</h4>
<p class="portal-content-p">BuyerSeller provides a serialized set of Enterpriser Workshops offering virtual lead to fields like business preparation, SME funding, party arrangement processes, and carrying out businesses online. These cases are entirely ready to hand sources appropriate towards fresh inaugurations.
</p>
<h4 class="content-h4-a">Beneficial to rookies: Enterpriser Day</h4>
<p class="portal-content-p">BuyerSeller Enterpriser Day consists an exhibiting act, instructive conferences and assemblies too like, setting up a meeting and face-to-face consultative servicing taking place. You will receive the data and available sources you require and to trade your individual business program.
</p>
<h4 class="content-h4-a">Inauguration backing: SME Centre</h4>
<p class="portal-content-p">Situated on the ground floor of the Bangladesh Convention and Expo Centre, the BuyerSeller SME Centre is an interactional surrounding providing a huge range of virtual data on behalf of fresh parties. Business newcomers not solely is able to fit with our pro advisor located at the site intended towards costless recommendation, but is able to gather to the point inauguration data too and share thoughts with SME compeers.
<p>
<h3 class="content-h3">2. Execution</h3>
<h4 class="content-h4-a">Functioning manual: SME Direction Workshop</h4>
<p class="portal-content-p">BuyerSeller provides a serialized set of SME Direction Workshops to offer virtual lead along matters like import & export processes, functioning direction, business connections and talks too like practicable source stuffs intended towards anybody initiating a fresh business.
</p>
<h4 class="content-h4-a">Functioning cooperator: Tailor-made Business Correspondence</h4>
<p class="portal-content-p">BuyerSeller invariably makes business possibilities intended towards Bangladeshi parties through setting them up in contact with the abroad and South-Asian mainland business cooperator via the Tailor-made Business Correspondence Facility. The servicing is backed up through a squad of skilful experts who separate out via the herd and to determine liaison who corresponds your business requirements. Register with BuyerSeller and allow us to aid you enlarge your business scope</p>
<h4 class="content-h4-a">Remainlinked: Global SME Exhibition</h4>
<p class="portal-content-p">BuyerSeller Global SME Exhibition is a one-stop program where new businesses and new parties are able to receive up-to-date marketplace data, researching fresh business possibilities and share thoughts. The exhibition offers business resolutions considering fiscal servicing, Information Technology& e-commerce, and merchandised servicing, etc. The exhibition’s “Franchising Hallway” and “EntrepreneurshipDistrict” offers marketplace news as well along franchising business & inauguration data.
</p>


<h3 class="content-h3">3. Business Possibilities:
</h3>
<h4 class="content-h4-a">Shortcut to fresh clients: TransactionBazaars</h4>
<p class="portal-content-p">Showcasing at global transaction bazaars is a channelized mode towards acquiring admittance to global purchasers. Precedence will be handed to the new business parties whenever they apply towards Economic Stalls at the BuyerSeller transaction bazaars within Bangladesh. Predilection is provided as well upon a ware presentation at BuyerSeller.com. Little Orders on open areas or taking part in Bangladesh marquees on significant transaction exhibitions abroad below the cost-efficient Ware Presentation and Classified Exhibiting arrangement.
</p>
<h4 class="content-h4-a">Fresh business Possibilities: Online Publicity
</h4>
<p class="portal-content-p">Fresh parties might put our costless online publicity to test at<a itemprop="url"  href="#" target="_blank"> www.BuyerSeller.com</a> to acquire admittance to above 1.lackh lagrade purchasers globally. Or, you might link up with the BuyerSeller.com topnotch promotional bundle that lets you exhibit ware pictures online to a greater amount and benefit from the precedence recommendation towards purchasers inspecting the BuyerSeller transaction bazaars.
</p>
<h4 class="content-h4-a">Fresh marketplace enlargement</h4>
<p class="portal-content-p">While your business develops, you require to broaden marketplaces. BuyerSeller Marketplace Conferences offer up-to-date marketplace news to aid you trade your enlargement programs. The workshops are virtual, getting across matters like marketplace movement, gross revenue taxation, import rules, dispersion transfers, and brandmark problems.</p>
			</div>
				
				
		
	</div>
	
</div>
<br>

	@stop
@section('scripts')
<script type="text/javascript">
		 

</script>
@stop