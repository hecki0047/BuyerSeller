@extends('frontend.layouts.master-register')
	@section('content')
			</div>
<div class="container">
	 <div class="row">
	            <div class="col-sm-12 col-md-12 col-lg-12">
	                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
	                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
	                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('ServiceChannel/pages/for_buyer',35,is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Help Center </span><i class="fa fa-angle-right top-path-icon"></i></a></li>

	                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Connect Supplier </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
	                        
	                    </ul>
	            </div>
	    
	  </div>
  </div>



			<div class="container-fluid padding_0">
					<div class="buyer-supplier-banner">
						
					</div>

			</div>
			<div class="container-fluid padding_0">
				<nav class="navbar navbar-inverse " style="top:0; border: 0 none; border-bottom:1px solid #999; ">
					 
					    <div>
					      <div class="collapse navbar-collapse" id="myNavbar" style="background: #fff;">
					      	<div class="container">
					      		<ul class="nav navbar-nav" style="width: 100%;">
					               <li style="width: 50%; float: left;" class="supp_active"><a href="#supplier" style="color: #333; font-size: 22px;"><img height="24" style="padding-right: 20px;"  src="{!! asset('assets/fontend/bdtdc-images/search-mirror.png',is_secured()) !!}" alt="search mirror">Finding a Supplier</a></li>
					              <li style="width: 50%; float: left;"><a href="#contact" style="color: #333;font-size: 22px;"><img height="24" style="padding-right: 20px;"  src="{!! asset('assets/fontend/bdtdc-images/search-mirror.png',is_secured()) !!}" alt="search mirror">Contacting a Supplier</a></li>
					         
					        </ul>
					      	</div>
					        
					      </div>
					    </div>
					 
					</nav>
			</div>
	<div class="container-fluid padding_0" style="background-color: #fff;">
		<div class="container padding_0" id="supplier">
			<div class="row padding_0">
					<div class="col-sm-12 col-md-12 padding_0">
						<div class="find-supp">
						   <div style="padding: 30px 30px;">Finding the Right Supplier</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 padding_0">
						<div class="find-supp">
						   <div style="padding: 15px 30px; font-size: 14px;">You can filter the type of supplier on the search results page.</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 padding_0">
						<img style="width: 100%; padding: 25px 0; margin: 0 auto; border:0 none; max-height: 350px;" src="{!! asset('assets/fontend/bdtdc-images/submit-request.jpg',is_secured()) !!}" alt="submit request">
					</div>
					<div class="col-sm-12 col-md-12 padding_0">
								<div class="col-sm-4 col-md-4">
										<div class="supplier-iii">
											<div class="bb-protect">
												<img title="Buyer Protection" style="width: 65px; height: 65px;" src="{!!asset('assets/fontend/bdtdc-images/Buyer-protection-home.png') !!}" alt="verified supplier">
											</div>
											<div class="ui3-title">
												Buyer Protection
											</div>
											<div class="supp-descpt">
												 Buyers can pay safely for their orders with the Buyer Protection Service by BuyerSeller.Asia and place

orders directly.
											</div>
										</div>
								</div>

								<div class="col-sm-4 col-md-4">
								<div class="supplier-iii">
											<div class="bb-protect">
											<img title="Gold Supplier" style="width: 65px; height: 65px;" src="{!! asset('assets/fontend/bdtdc-images/gold_supplier20120802.jpg',is_secured()) !!}" alt="Buyer protection home">
												
											</div>
											<div class="ui3-title">
												Gold Supplier
											</div>
											<div class="supp-descpt">
												 Gold Suppliers have gone through onsite check and A&amp;V check which guarantee their identities

as a legally registered business on BuyerSeller.Asia.
											</div>
											</div>
								</div>
								<div class="col-sm-4 col-md-4">
										<div class="supplier-iii">
											<div class="bb-protect">
												<img title="Assessed Supplier" style="width: 65px; height: 65px;" src="{!!asset('assets/gold/Assessed-Supplier.png') !!}" alt="assecedv">
											</div>
											<div class="ui3-title">
												Assessed Supplier
											</div>
											<div class="supp-descpt">
												 Gold Suppliers are inspected onsite by an impartial third party and assigned as Assessed Suppliers. 
											</div>
										</div>
								</div>
					</div>
		</div>
		</div>
	</div>
	<div class="container-fluid padding_0">
		<div class="container padding_0" id="contact">
				<div class="row">
					<div class="col-sm-12 col-md-12 padding_0">
						<div class="find-supp">
						   <div style="padding: 30px 30px;">Contacting the Right Supplier
</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 padding_0">
						<div class="find-supp">
						   <div style="padding: 15px 30px; font-size: 14px;">There are three methods to contact a supplier.</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 padding_0">
								<img style="width: 100%; padding: 25px 0; margin: 0 auto; border:0 none; max-height: 350px;" src="{!! asset('assets/fontend/bdtdc-images/leatrher-laugage.jpg',is_secured()) !!}" alt="leatrher laugage">
								<img style="width: 100%; padding: 25px 0; margin: 0 auto; border:0 none; max-height: 190px;" src="{!! asset('assets/fontend/bdtdc-images/by-sequence.jpg',is_secured()) !!}" alt="by sequence">
					</div>
			</div>
			</div>
			</div>
	<div class="container-fluid padding_0" style="background-color: #fff;">
		<div class="container padding_0">
				<!-- <div class="row">
					<div class="col-sm-12 col-md-12">

							<div class="tb-module common-img-text" style="background:#fff; padding: 10px 5px;">
   									<h3 class="sorcce-h3" style="font-size: 26px;">FAQs</h3>
								</div>
						</div>	
							<div class="col-sm-12 col-md-12" data-name="common-faq" style="background:#fff; padding-left: 3%;">
								
								    <div class="source-wrapper">
								    	<div class="col-sm-6 col-md-6">
								        	<ul class="faq-lst">
								        		<li><a target="_blank" href="#" class="source-a">How do I buy on BuyerSeller.Asia?</a></li>
								        		<li> <a target="_blank" href="#" class="source-a">What is BdSource?</a></li>
								        	<li> <a target="_blank" href="#" class="source-a">Can I make purchases of a single item on BuyerSeller.Asia?</a></li>
								        	<li>  <a target="_blank" href="#" class="source-a">What are the services I can expect from Purchasing Agents?</a></li>
								        </ul>
								                       
								    </div>
								      <div class="col-sm-6 col-md-6">
								      <ul class="faq-lst">
								           <li><a target="_blank" href="#" class="source-a">How to start using the Purchasing Agent?</a></li>
								        	<li> <a target="_blank" href="#" class="source-a">What is BdSource?</a></li>
								        	<li> <a target="_blank" href="#" class="source-a">What is My Favorites?</a></li>
								        
								        </ul>       
								   </div>
					</div>
			</div>						
	</div> -->
	</div>
	</div>
	<div class="container-fluid padding_0" style="background-color: #fff; margin-bottom: 15px;">
		<div class="container padding_0">
				<div class="row"  style="width: 100%; padding-bottom: 25px; margin-bottom: 10px; border-bottom: 1px solid #e5e5e5;">
							<div class="tb-module common-img-text" style="background:#fff; padding: 10px 5px;">
	   				<h3 class="sorcce-h3" style="font-size: 26px;">Success Stories</h3>
					</div>	
					<div class="" style="background:#fff;">
	   				<div class="col-sm-4 col-md-4 col-lg-4" style="border-right: 1px solid #ddd;">

	   					<img class="sourc-img" src="{!! asset('assets/fontend/bdtdc-images/hero1.jpg') !!}" alt="contact-byuer">
	   					<h2 style="font-size: 20px;font-weight: normal;overflow: hidden;width: 100%;">Bd-Md-Forhad Ahmmed Russel</h2>
	   					<h5><a href="{{URL::to('Home/Green-Field',1559,is_secured())}}" target="_blank"> CEO of Green Field</a> </h5>
	   					<p class="source-p">BuyerSeller.Asia is the latest trend of B2B platform in Bangladesh providing support for the import and export side of my business.</p>
	   				</div>
	   				<div class="col-sm-4 col-md-4 col-lg-4" style="border-right: 1px solid #ddd;">
	   					<img class="sourc-img" src="{!! asset('assets/fontend/bdtdc-images/hero2.jpg') !!}" alt="contact-gold-member">
	   					<h2 style="font-size: 20px;font-weight: normal;overflow: hidden;width: 100%;"> MIR MD. ALIMUZZAMAN</h2>
	   					<h5><a href="{{URL::to('Home/Raid-International',1379,is_secured())}}" target="_blank"> CEO Raid International</a></h5>
	   					<p class="source-p">BuyerSeller.Asia is an outstanding brand in online trading giving our clients the trust to buy and the chance to sell our products globally on this platform.</p>
	   				</div>
	   				<div class="col-sm-4 col-md-4 col-lg-4" style="border-right: 0 none;">
	   					<img class="sourc-img" src="{!! asset('assets/fontend/bdtdc-images/hero3.jpg') !!}" alt="contact-gold-member">
	   					<h2 style="font-size: 20px;font-weight: normal;overflow: hidden;width: 100%;">Mr. Mahfuz Haque</h2>
	   					<h5><a href="{{URL::to('Home/Supplyhouse',1461,is_secured())}}" target="_blank">CEO OF SUPPLY HOUSE</a></h5>
	   					<p class="source-p">Our standing on BuyerSeller.Asia increased by having this Trade Assurance certificate. We now get higher exposure within the platform. </p>
	   				</div>
					</div>
					</div>
						
			</div>
		</div>
	<div class="container">

	@stop
 @section('scripts')
 <script type="text/javascript">
 			$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
 </script>
 @stop