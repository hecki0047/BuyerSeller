@extends('frontend.layouts.master-register')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bangladesh-business-style.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')

<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">About BDTDC</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('media/room',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Media Room</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Bangladesh Means Business</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    
  </div>


<div class="row padding_0">
		<div class="col-sm-12 padding_0" style="padding-top: 8px;">
	        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" style="border-radius:10px !important; border:0 none;"  class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;" ></li>
                <li data-target="#myCarousel" data-slide-to="2" style="border-radius:10px !important; border:0 none;"></li>
                <li data-target="#myCarousel" data-slide-to="3" style="border-radius:10px !important; border:0 none;" ></li>
             </ol>
	         <div class="carousel-inner" role="listbox">
                <div class="item active" style="padding:0 !important; margin:0 !important;">
                 <img itemprop="image" style="width:100%;margin-left: -1px;" src="{{asset('assets/fontend/images/Apparel-&-Textile-Fair.jpg')}}" alt="Bangladesh dimond fair">
				         <div class="carousel-caption" style="width: 44%;padding: 10px 18px;top: 8.2%;right: 0 !important;bottom: inherit;zoom: 1; margin-left: 38%;">
				          <h1 style="color: #fff;text-align: center;padding: 5px 0;background: rgba(58,53,50,0.8); font-weight: bold; font-size: 36px !important;">BDTDC Bangladesh International Diamond, Gem & Pearl Show</h1>
				        
				        </div>
                </div>

            
              <div class="item" style="padding:0 !important; margin:0 !important;">
                  <img itemprop="image" style="width:100%;margin-left: -1px;" src="{{ asset('assets/fontend/images/Footware-Trade-Show.jpg')}}" alt="Bangladesh apperal fair">
                   <div class="carousel-caption" style="width: 44%;padding: 10px 18px;top: 8.2%;right: 0 !important;bottom: inherit;zoom: 1;margin-left: 38%;">
				          <h1 style="color: #fff;text-align: center;padding: 5px 0;background: rgba(58,53,50,0.8); font-weight: bold; font-size: 36px !important;">BDTDC Bangladesh International Jewellery Show</h1>
				          
				        </div>
                </div>
            
                <div class="item" style="padding:0 !important; margin:0 !important;">
                  <img itemprop="image" style="width:100%;margin-left: -1px;" src="{{asset('assets/fontend/images/Jute-and-Handicraft.jpg')}}" alt="Bangladesh lighting fair">
                   <div class="carousel-caption" style="width: 44%;padding: 10px 18px;top: 8.2%;right: 0 !important;bottom: inherit;zoom: 1;margin-left: 38%;">
				          <h1 style="color: #fff;text-align: center;padding: 5px 0;background: rgba(58,53,50,0.8); font-weight: bold; font-size: 36px !important;">BDTDC Bangladesh International Lighting Fair (Spring Edition)</h1>
				         
				        </div>
                </div>
            
                <div class="item" style="padding:0 !important; margin:0 !important;">
                  <img itemprop="image" style="width:100%;margin-left: -1px;" src="{{asset('assets/fontend/images/Leather-Fair.jpg')}}" alt="Bangladesh electrical fair">
                   <div class="carousel-caption" style="width: 44%;padding: 10px 18px;top: 8.2%;right: 0 !important;bottom: inherit;zoom: 1;margin-left: 38%;">
				          <h1 style="color: #fff;text-align: center;padding: 5px 0;background: rgba(58,53,50,0.8); font-weight: bold;font-size: 36px !important;">BDTDC Bangladesh Electronics Fair (Spring Edition)</h1>
				        </div>
                </div> 
            </div>
    
                <span class="sr-only">Previous</span>
            
     
                <span class="sr-only">Next</span>
            
            </div>
        </div>
	
</div>
<div class="row padding_0" style="background-color: #fff; padding-bottom: 3%;">
			<div class="col-lg-4" style="padding:0;padding-right: 10px; padding-top: 15px">
					<div class="bd-title">
					<h3>FILTERED BY<span class="pull-right print-pdf-dropdown-btn visible-lg pull-left"><PRINT</span></h3>
					</div>
					<div class="bd-event">
						<span style="float: left;font-size: 14px; color: #333; display: block;padding-right: 6px">Event Format:</span>
						<span style="float: left;font-size: 14px; color: #000; display: block;padding-right: 6px;font-weight: bold;">Seminar & Workshop</span>
						<span class="cross">X</span>
						
					</div>
					<div class="bd-event" style="border:0 none; padding-left: 75%;">
					   <span onclick="removeAllHidden();">[ CLEAR ]</span>
						
					</div>

					<div class="bd-title" style="background: #cac7c2; border-bottom: 1px solid #ddd; height: 93px;">
							
							<span style="font-size: 14px; font-weight: bold; padding: 5px 0; padding-left: 13px;">Search</span>
							<input type="text" id="searchword" name="word" class="search-filter-input" maxlength="50" style="width: 100%; height: 34px; padding-right: 10%;">
							<span style="font-size: 14px; font-weight: bold; padding: 5px 0; padding-left: 13px;">Event Format</span>
							
				</div>
					
					<div class="filter-body">
							<ul id="format-filterlist" class="filter-list">
								<li class="" id="Exhibition"><span class="hover">+</span>Exhibition</li>
								<li class="" id="Conference &amp; Forum"><span class="hover">+</span>Conference &amp; Forum</li>
								<li class=" filter-specified" id="Seminar &amp; Workshop"><span class="hover">x</span>Seminar &amp; Workshop</li>
								<li class="" id="Trade Mission"><span class="hover">+</span>Trade Mission</li>
								<li class="" id="Hong Kong Pavilion"><span class="hover">+</span>Hong Kong Pavilion</li>
								<li class="" id="Others"><span class="hover">+</span>Others</li>				
							</ul>
				
					</div>

				<div class="bd-title" style="background: #cac7c2;"><h3 class="arrow-down" style="padding-bottom: 0; margin-bottom: -2%;">Date</h3></div>
				<div class="bd-title" style="background: #cac7c2; border-bottom: 1px solid #ddd; height: 100px;">
							
					<input type="text" id="searchword" name="word" class="search-filter-input" maxlength="50" style="width: 100%; height: 34px; padding-right: 10%;">
							<span id="datepicker" style="font-size: 14px; font-weight: bold; padding: 5px 0; padding-left: 13px;">Location</span>
							<!--<input type="text" class="search-filter-input"/>-->
				</div>
				<div class="filter-body">
							<ul id="format-filterlist" class="filter-list">
								<li class="" id="Exhibition"><span class="hover">+</span>Bangladesh</li>
								<li class="" id="Conference &amp; Forum"><span class="hover">+</span>Outside Bangladesh</li>
												
							</ul>
				
					</div>
					<div class="bd-title"  style="background: #cac7c2;"><h3 class="arrow-down" style="width: 90%; float: left;">Industry</h3><span class="toggle-industry"><img src="http://hkmb.hktdc.com/sites/all/themes/hktdc/img/arrow-dark-down.png">
			</span></div>
			<div class="scroll-wrapper" tabindex="5000" style="overflow-y:scroll;position: relative; outline: none; height: 265px;">
					<ul id="industry-filterlist" class="filter-list" style="transform: translate3d(0px, 0px, 0px);"><li class="searchFilter" id="24595"><span class="hover">+</span>Accounting Services</li><li class="searchFilter" id="24598"><span class="hover">+</span>Advertising Services</li><li class="searchFilter" id="24601"><span class="hover">+</span>Architecture &amp; Planning</li><li class="searchFilter" id="24604"><span class="hover">+</span>Association &amp; Government</li><li class="searchFilter" id="24607"><span class="hover">+</span>Auto Parts</li><li class="searchFilter" id="24610"><span class="hover">+</span>Baby Products</li><li class="searchFilter" id="24613"><span class="hover">+</span>Banking Services</li><li class="searchFilter" id="24616"><span class="hover">+</span>Health &amp; Beauty</li><li class="searchFilter" id="24619"><span class="hover">+</span>Books &amp; Printed Items</li><li class="searchFilter" id="24622"><span class="hover">+</span>Building &amp; Construction</li><li class="searchFilter" id="24625"><span class="hover">+</span>Building Materials</li><li class="searchFilter" id="24628"><span class="hover">+</span>Business Management &amp; Consultancy</li><li class="searchFilter" id="24631"><span class="hover">+</span>Catering Services</li><li class="searchFilter" id="24634"><span class="hover">+</span>Chemicals</li><li class="searchFilter" id="24637"><span class="hover">+</span>Computer &amp; Peripherals</li><li class="searchFilter" id="24640"><span class="hover">+</span>Design Services</li><li class="searchFilter" id="24643"><span class="hover">+</span>Education &amp; Training</li><li class="searchFilter" id="24646"><span class="hover">+</span>Electronics &amp; Electrical Appliances</li><li class="searchFilter" id="24649"><span class="hover">+</span>Engineering</li><li class="searchFilter" id="24652"><span class="hover">+</span>Environmental Protection</li><li class="searchFilter" id="24655"><span class="hover">+</span>Event Organisation</li><li class="searchFilter" id="24658"><span class="hover">+</span>Eyewear</li><li class="searchFilter" id="24661"><span class="hover">+</span>Film &amp; Audio-Visual Production</li><li class="searchFilter" id="24664"><span class="hover">+</span>Finance &amp; Investment</li><li class="searchFilter" id="24667"><span class="hover">+</span>Food &amp; Beverages</li><li class="searchFilter" id="24670"><span class="hover">+</span>Footwear</li><li class="searchFilter" id="24673"><span class="hover">+</span>Furniture &amp; Furnishings</li><li class="searchFilter" id="24676"><span class="hover">+</span>Garments, Textiles &amp; Accessories</li><li class="searchFilter" id="24679"><span class="hover">+</span>Gifts &amp; Premiums</li><li class="searchFilter" id="24682"><span class="hover">+</span>Handbags &amp; Travel Goods</li><li class="searchFilter" id="24685"><span class="hover">+</span>Hardware</li><li class="searchFilter" id="24688"><span class="hover">+</span>Household Products</li><li class="searchFilter" id="24691"><span class="hover">+</span>Information Technology</li><li class="searchFilter" id="24694"><span class="hover">+</span>Interior Design</li><li class="searchFilter" id="24697"><span class="hover">+</span>Jewellery</li><li class="searchFilter" id="24700"><span class="hover">+</span>Legal Services</li><li class="searchFilter" id="24703"><span class="hover">+</span>Licensing</li><li class="searchFilter" id="24706"><span class="hover">+</span>Lighting Products</li><li class="searchFilter" id="24709"><span class="hover">+</span>Logistics &amp; Supply Chain</li><li class="searchFilter" id="24712"><span class="hover">+</span>Machinery</li><li class="searchFilter" id="24715"><span class="hover">+</span>Media</li><li class="searchFilter" id="24718"><span class="hover">+</span>Medical &amp; Healthcare Services</li><li class="searchFilter" id="24721"><span class="hover">+</span>Medical Supplies &amp; Medicine</li><li class="searchFilter" id="24724"><span class="hover">+</span>Packaging</li><li class="searchFilter" id="24727"><span class="hover">+</span>Pet &amp; Pet Supplies</li><li class="searchFilter" id="24730"><span class="hover">+</span>Photographic Equipment</li><li class="searchFilter" id="24733"><span class="hover">+</span>Printing &amp; Publishing</li><li class="searchFilter" id="24736"><span class="hover">+</span>Public Relations</li><li class="searchFilter" id="24739"><span class="hover">+</span>Quality Inspection and Testing</li><li class="searchFilter" id="24742"><span class="hover">+</span>Raw Materials</li><li class="searchFilter" id="24745"><span class="hover">+</span>Specialised Products</li><li class="searchFilter" id="24748"><span class="hover">+</span>Sports Goods</li><li class="searchFilter" id="24751"><span class="hover">+</span>Stationery &amp; Office Equipment</li><li class="searchFilter" id="24754"><span class="hover">+</span>Real Estate Services</li><li class="searchFilter" id="24757"><span class="hover">+</span>Technology</li><li class="searchFilter" id="24760"><span class="hover">+</span>Telecommunications</li><li class="searchFilter" id="24763"><span class="hover">+</span>Tourism &amp; Hospitality</li><li class="searchFilter" id="24766"><span class="hover">+</span>Toys &amp; Games</li><li class="searchFilter" id="24769"><span class="hover">+</span>Watches &amp; Clocks</li></ul><input type="hidden" id="industry" name="format[]" value="Exhibition"><input type="hidden" id="filteradded" name="f" value="t">				<div id="ascrail2000" class="nicescroll-rails" style="width: 4px; z-index: auto; cursor: default; position: absolute; top: 0px; right: 0px; opacity: 1; height: 265px; display: block;"><div style="position: relative; top: 0px; float: right;  height: 46px; border: 0px; border-radius: 5px; background-color: rgb(171, 167, 164); background-clip: padding-box;"></div></div>
					</div>
					<div class="bd-title" style="background: #cac7c2;"><h3 class="arrow-down">ORGANISER</h3></div>
					<div style="width: 100%; display: block; overflow: hidden;">
						 <ul style="padding: 0;">
								<li id="bdtdc" style="width: 50%; background-color:#706965; float: left;  cursor: pointer; "><span class="bdtdc-span">BDTDC</span></li>
							<li class="" id="all" style="width: 50%; background-color:#DFD9D5; float: left; cursor: pointer; "><span class="bdtdc-span">All Organisers</span></li>
						</ul>
			</div>


				
			</div>
			<div class="col-lg-8" style="padding:0;padding-top: 15px">
					<div class="col-sm-12" style="background-color: #312E2C; max-height: 40px;">
								<div class="col-sm-4">
										<h3 style="width: 100%;
										padding: 0; font-size: 16px;color: #F17A22; margin: 0; padding-top: 12px;">WHAT'S ON TODAY</h3>
								</div>
								<div class="col-sm-4">
									<span class="bd-dropdown event">
						<a data-toggle="bd-dropdown" href="">All<span class="pull-right arrow-grey arrow-grey-up" style="margin-top: 4px;"></span></a>
						<ul class="bd-dropdown-menu" role="menu" aria-labelledby="dLabel">
							<li role="presentation"><a class="pie" role="menuitem" tabindex="-1" data-val="u">UPCOMING EVENTS</a></li>
							<li role="presentation"><a class="pie" role="menuitem" tabindex="-1" data-val="p">PAST EVENTS</a></li>
						</ul>
					</span>
								</div>
								<div class="col-sm-4">
									<p style="color: #fff;font-size: 14px; padding-top: 10px;">(0) RECOMMENDED EVENTS</p>
								</div>
						
					</div>
						<div class="col-sm-12 padding_0" style="border-bottom: dotted #ddd; padding-bottom: 15px;" >
								<div class="col-sm-2" style="padding: 0;">
								<a itemprop="url" href="#">
									<img  itemprop="image" class="bd-busi-img" src="{!! asset('assets/fontend/bdtdc-images/dimond.jpg') !!}" alt="dimond">
									</a>
								</div>
								<div class="col-sm-10">
											<p style="font-size: 14px;color: #7c7c7c; padding-top: 20px; width: 100%; font-weight: bold;"> 1 - 5 March 2016</p>
											<h3 class="bdtdc-tit"><a href="#">BDTDC Bangladesh International Diamond, Gem & Pearl Show 2016</a></h3>
											<p style="font-size: 14px;color: #7c7c7c; padding-top: 20px; width: 100%; font-weight: bold;">Location:<span style="padding-left: 15px; font-size: 16px;
											font-weight: 900; font-family: verdana;">Bangladesh</span></p>
											<!-- <div class="cta-wrapper"><a data-label="More Detail" href="#" class="cta-button" target="_blank" style="background-color: #94918E; font-size: 14px; font-weight: 600; padding: 8px 10px;">MORE DETAILS</a></div> -->
									
								</div>
							
						</div>
						<div class="col-sm-12 padding_0" style="border-bottom: dotted #ddd; padding-bottom: 15px;" >
								<div class="col-sm-2" style="padding: 0;">
								<a itemprop="url" href="#">
									<img  itemprop="image" class="bd-busi-img" src="{!! asset('assets/fontend/bdtdc-images/jewelry.jpg') !!}" alt="jewelry">
									</a>
								</div>
								<div class="col-sm-10">
											<p style="font-size: 14px;color: #7c7c7c; padding-top: 20px; width: 100%; font-weight: bold;"> 1 - 5 March 2016</p>
											<h3 class="bdtdc-tit"><a href="#">BDTDC Bangladesh International Jewellery Show</a></h3>
											<p style="font-size: 14px;color: #7c7c7c; padding-top: 20px; width: 100%; font-weight: bold;">Location:<span style="padding-left: 15px; font-size: 16px;
											font-weight: 900; font-family: verdana;">Bangladesh</span></p>
											<!-- <div class="cta-wrapper"><a data-label="More Detail" href="#" class="cta-button" target="_blank" style="background-color: #94918E; font-size: 14px; font-weight: 600; padding: 8px 10px;">MORE DETAILS</a></div> -->
									
								</div>
							
						</div>
						<div class="col-sm-12 padding_0" style="border-bottom: dotted #ddd; padding-bottom: 15px;" >
								<div class="col-sm-2" style="padding: 0;">
								<a itemprop="url" href="#">
									<img  itemprop="image" class="bd-busi-img" src="{!! asset('assets/fontend/bdtdc-images/Home_Housewares.jpg') !!}" alt="Home Housewares">
									</a>
								</div>
								<div class="col-sm-10">
											<p style="font-size: 14px;color: #7c7c7c; padding-top: 20px; width: 100%; font-weight: bold;"> 1 - 5 March 2016</p>
											<h3 class="bdtdc-tit"><a href="#">International Home and Housewares Show, Chicago, USA</a></h3>
											<p style="font-size: 14px;color: #7c7c7c; padding-top: 20px; width: 100%; font-weight: bold;">Location:<span style="padding-left: 15px; font-size: 16px;
											font-weight: 900; font-family: verdana;">USA</span></p>
											<!-- <div class="cta-wrapper"><a data-label="More Detail" href="#" class="cta-button" target="_blank" style="background-color: #94918E; font-size: 14px; font-weight: 600; padding: 8px 10px;">MORE DETAILS</a></div> -->
									
								</div>
							
						</div>
						<div class="col-sm-12 padding_0" style="border-bottom: dotted #ddd; padding-bottom: 15px;" >
								<div class="col-sm-2" style="padding: 0;">
								<a itemprop="url" href="#">
									<img  itemprop="image" class="bd-busi-img" src="{!! asset('assets/fontend/bdtdc-images/pc-hardware.jpg') !!}" alt="pc hardware">
									</a>
								</div>
								<div class="col-sm-10">
											<p style="font-size: 14px;color: #7c7c7c; padding-top: 20px; width: 100%; font-weight: bold;"> 1 - 5 March 2016</p>
											<h3 class="bdtdc-tit"><a href="#">International Hardware Fair, Cologne</a></h3>
											<p style="font-size: 14px;color: #7c7c7c; padding-top: 20px; width: 100%; font-weight: bold;">Location:<span style="padding-left: 15px; font-size: 16px;
											font-weight: 900; font-family: verdana;">Germany</span></p>
											<!-- <div class="cta-wrapper"><a data-label="More Detail" href="#" class="cta-button" target="_blank" style="background-color: #94918E; font-size: 14px; font-weight: 600; padding: 8px 10px;">MORE DETAILS</a></div> -->
									
								</div>
							
						</div>
						<div class="col-sm-12 padding_0" style="border-bottom: dotted #ddd; padding-bottom: 15px;" >
								<div class="col-sm-2" style="padding: 0;">
								<a itemprop="url" href="#">
									<img  itemprop="image" class="bd-busi-img" src="{!! asset('assets/fontend/bdtdc-images/china-beauty.png') !!}" alt="chinabeauty">
									</a>
								</div>
								<div class="col-sm-10">
											<p style="font-size: 14px;color: #7c7c7c; padding-top: 20px; width: 100%; font-weight: bold;"> 1 - 5 March 2016</p>
											<h3 class="bdtdc-tit"><a href="#">China International Beauty Expo</a></h3>
											<p style="font-size: 14px;color: #7c7c7c; padding-top: 20px; width: 100%; font-weight: bold;">Location:<span style="padding-left: 15px; font-size: 16px;
											font-weight: 900; font-family: verdana;">Chaina</span></p>
											<!-- <div class="cta-wrapper"><a data-label="More Detail" href="#" class="cta-button" target="_blank" style="background-color: #94918E; font-size: 14px; font-weight: 600; padding: 8px 10px;">MORE DETAILS</a></div> -->
									
								</div>
							
						</div>
						<div class="col-sm-12 padding_0" style="border-bottom: dotted #ddd; padding-bottom: 15px;" >
								<div class="col-sm-2" style="padding: 0;">
								<a itemprop="url" href="#">
									<img  itemprop="image" class="bd-busi-img" src="{!! asset('assets/fontend/bdtdc-images/light-building.jpg') !!}" alt="light building">
									</a>
								</div>
								<div class="col-sm-10">
											<p style="font-size: 14px;color: #7c7c7c; padding-top: 20px; width: 100%; font-weight: bold;"> 1 - 5 March 2016</p>
											<h3 class="bdtdc-tit"><a href="#">Light + Building, Frankfurt, Germany</a></h3>
											<p style="font-size: 14px;color: #7c7c7c; padding-top: 20px; width: 100%; font-weight: bold;">Location:<span style="padding-left: 15px; font-size: 16px;
											font-weight: 900; font-family: verdana;">Germany</span></p>
										<!-- 	<div class="cta-wrapper"><a data-label="More Detail" href="#" class="cta-button" target="_blank" style="background-color: #94918E; font-size: 14px; font-weight: 600; padding: 8px 10px;">MORE DETAILS</a></div> -->
								</div>
						</div>
			</div>	
</div>

<br>


@stop
@section('scripts')
<script type="text/javascript">
		 

</script>
@stop