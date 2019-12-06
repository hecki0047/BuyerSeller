@extends('frontend.layouts.about-us-topbar')
  @section('page_css')
    <link property='stylesheet' href="{!! asset('css/about-page.css',is_secured()) !!}" rel="stylesheet">
    @endsection
	@section('content')
</div>
<section>
	<div class="desktop">
		@include('frontend.about-us-header-home')
	</div>
	<div class="mobil-phone">

	@include('frontend.about-us-top-m-menu')
	</div>
</section>
<section class="abt-top-bg-slide">
	<div class="container">
	<div class="abtus-container">
	<div id="content-slider">
    	<div id="abt-slider">
        	<div id="mask-abt">
            <ul style="padding: 0;">
           	<li id="abt-first" class="firstanimation">
            <a href="#">
            	<h1 class="abut-headline-bt">SUSTAINABLE MANUFACTURING - CONNECT GLOBALLY</h1>
            </a>  
            </li>
            <li id="abt-second" class="secondanimation">
            <a href="#">
            <h1 class="abut-headline-bt">ENVIRONMENT FRIENDLY MANUFACTURING</h1>
            </a>    
            </li>
            
            <li id="abt-third" class="thirdanimation">
            <a href="#">
            <h1 class="abut-headline-bt" style="padding-left: 26px;">EMPOWERING ENTREPRENEURS - ENHANCING BUSINESSES</h1>
            </a>
           
            </li>
                        
            <li id="abt-fourth" class="fourthanimation">
            <a href="#">
            <h1 class="abut-headline-bt">Complete online Business platform</h1>
            </a>
          
            </li>
                        
            <li id="abt-fifth" class="fifthanimation">
            <a href="#">
             <h1 class="abut-headline-bt">Over 3,500+ happy suppliers and counting</h1>
            </a>
           
            </li>
            </ul>
            </div>
            <div class="progress-bar"></div>
        </div>
    </div>
  </div>
  </div>
</section>
<section style="background:#FFFFFF;">
<div class="container padding_0" style="background:#FFFFFF;">
  <div class="row padding_0 abt-top">
  		    <div class="col-md-12 col-sm-12 padding_0">
  				<div class="sut-pp">
  					<h1 class="abt-h1">SUSTAINABLE MANUFACTURING - CONNECT GLOBALLY</h1>
  				</div>
  				<p class="sut-pp">Explore Sustainable Manufacturing, and connect worldwide. Reach out to sustainable global business opportunities to expand to new markets for Bangladesh SME’s.<br>BuyerSeller.Asia is the pivotal eco-friendly business-to-business platform and a dominant leader of trade among South Asian countries and the world.</p>
  				<div style="max-width: 800px; margin: 0 auto;">
  				 <h1 class="wt-h">WHAT WE DO</h1>
  				<ul class="feature-list my-ftch">
  					<li><a href="{!!URL::to('BuyerChannel/pages/sustainable_manufacturing',7,is_secured())!!}">
  					Promoting Sustainable Manufacturing</a></li>
  					<li><a href="{!!URL::to('tradeshow',null,is_secured())!!}">Conferences and Expositions</a></li>
  					<li><a href="{!!URL::to('promoting/bangladesh',null,is_secured())!!}">Supporting Bangladesh Services</a></li>
  					<li><a href="{!!URL::to('promoting/bangladesh/product')!!}">Supporting Bangladesh Products</a></li>
  					<li><a href="{!!URL::to('business/matching',null,is_secured())!!}">Matching Businesses </a></li>
  					<li><a href="{!!URL::to('marketing/bangladesh',null,is_secured())!!}">Representing Bangladesh Brands to the World  </a></li>
  					<li><a href="{!!URL::to('global/partnership',null,is_secured())!!}">Buyer Seller Global Partnerships </a></li>
  				</ul>
  		</div>
  		</div>
 </div>
</div>
</section>
<section class="envitnt-bg">
<div class="container padding_0">
   <div class="row padding_0 abt-top ">
 		<div class="col-md-12 col-sm-12 padding_0" style="padding-bottom: 40px;">
 		  <div>
 				<div class="sut-pp">
 				 <h1 class="abt-h1">ENVIRONMENT-FRIENDLY MANUFACTURING</h1>
 				 <img style="width: 200px; margin-top: 30px;" src="{!! asset('assets/fontend/images/think-asia-bangladeshg.jpg',is_secured()) !!}"  alt="think asia bangladeshg">
 				</div>
 				<div style="max-width: 800px; margin: 0 auto;">
 				 <ul class="feature-list">
  					<li><a style="color: #fff !important;" href="{!!URL::to('sustainable/business-case',null,is_secured())!!}">
  					Eco-minded Business Practices </a></li>
  					<li><a style="color: #fff !important;" href="{!!URL::to('how-to/business-bangladesh',null,is_secured())!!}">How to Do Businesses in Bangladesh </a></li>
  					<li><a style="color: #fff !important;" href="{!!URL::to('promoting/bangladesh',null,is_secured())!!}">Bangladesh's Services  </a></li>
  					<li><a style="color: #fff !important;" href="{!!URL::to('bangladesh/advantage',null,is_secured())!!}">Bangladesh's Advantages  </a></li>
  				</ul>
 				</div>
 			</div>
 		</div>
 </div>
</div>
</section>
<section style="background:#FFFFFF;">
<div class="container padding_0" style="background:#FFFFFF;">
  <div class="row padding_0 abt-top">
  			<div class="col-sm-12 col-md-12 col-xs-12">
  				<div class="sut-pp">
                           <div class="h2-head-title" style="font-size: 23px; color:#333; margin-bottom: 30px;">OUR MISSION</div>
                           	    <p class="sut-pp"><br>The BuyerSeller.Asia is a leading, eco-minded B2B marketplace and a primary facilitator of trade within Greater Bangladesh and South Asia. Our aim is to explore new markets and create global business opportunities for Bangladesh SMEs.
                           	    <br/><br>The core business facilitates trade between Bangladesh, South Asia and the rest of the world using technologies such as online marketplaces, both printed and digital magazines, sourcing research reports, private sourcing events, and trade shows.
                           	    <br/><br>Our services direct buyers to locate the latest products from reliable suppliers & manufacturers on Buyer Seller. It is the leading b2b platform connecting Bangladeshi suppliers & manufacturers to global retailers, for those who pay attention to corporate social responsibility and the brands that patronizes by taking care of the planet.
                           	    <br/><br>Buyer Seller mission is to create opportunities for companies to bring Bangladesh's products to the rest of the world. We focus on promoting trade in goods and services, while connecting the world’s small and medium-sized enterprises (SMEs) through Buyer Seller online business platform.
                           	 <br/>
  								<a     href="#" style="color: #fff;">Buyer Seller Service Pledge</a></p>
                          </div>

  			</div>
  			<div class="col-sm-12 col-md-12 col-xs-12">
  				<div style="max-width: 800px; margin: 0 auto;">
	  				<div>
	  					<h1 class="abt-h1">EMPOWERING ENTREPRENEURS - ENHANCING BUSINESSES</h1>
	  				</div>
	  				<ul class="feature-list my-ftch">
	  					<li><a href="{!!URL::to('research',null,is_secured())!!}">Buyer Seller Research
	  					</a></li>
	  					<li><a href="{!!URL::to('start/programe',null,is_secured())!!}">Startup Program </a></li>
	  					<li><a href="{!!URL::to('world-sme/expo',null,is_secured())!!}">World SME Expo </a></li>
	  					<li><a href="{!!URL::to('entrepreneur/day',null,is_secured())!!}">Entrepreneur Day </a></li>
	  					<li><a href="{!!URL::to('portal/support-program',null,is_secured())!!}">SME/Start-up Portal</a></li>
	  					<li><a href="{!!URL::to('sme-center',null,is_secured())!!}">Buyer Seller SME Center</a></li>
	  					<li><a href="{!!URL::to('business/advisory',null,is_secured())!!}">Business Advisory </a></li>
	  				<li><a href="{!!URL::to('tradeshow',null,is_secured())!!}">Seminars & Workshop </a></li>
	  					<li><a href="{!!URL::to('database-listing',null,is_secured())!!}">Buyer Seller Databank Listings </a></li>
	  				</ul>
 				</div>
  			</div>
  </div>
 </div>
 </section>
 <section class="council-bg">
<div class="container padding_0">
   <div class="row padding_0 abt-top ">
   		<div class="col-sm-12 col-md-12" style="background: #fff; opacity: .9;">
   		<div  class="sut-pp">
 			<h2>Complete Online Business platform</h2>
 			<p>Enhance your business: Connect with the Buyer Seller!</p>
 		</div>
 		</div>
 	<div class="col-sm-12 col-md-12" style="background: #fff; padding-bottom: 30px; opacity: .9;">
 		<div  style="max-width: 800px; margin: 0 auto;">
                           <div class="h2-head-title" style="font-size: 23px;">THE COUNCIL</div>
                           	    <p class="head-ppp">We are governed by a 7-slot Council of Bangladesh's business leaders, Senior Business Executives and University professors from USA and Canada. It plans and supervises Buyer Seller global operations, services and promotional activities.</p>
                           	    <p class="head-ppp">Mr. Kazi Ahmed, a Canadian citizen born in Bangladesh is the first Buyer Seller Chairman since the Council's establishment in 2015. He assumed the Chairmanship of the Buyer Seller on 1 February 2015. The Managing Director, Mr. Richard Schaffer, who heads the Executive branch, is responsible for Buyer Seller worldwide operations.</p>
                           	    <p class="head-ppp">The Council is made up of the following members:</p>

                      <table style="width: 100%;">
					      <tbody>
					          <tr style="border-bottom: 1px solid #333 !important; height: 60px;">
					             <td><a data-toggle="modal" data-target="#myModal_kazi" href="#" class="overview" style="float: left;color: #333; font-weight: normal;">Kazi Ahmed</a></td>
					              <td><a data-toggle="modal" data-target="#myModal_kazi"  href="#" style="color: #333; text-decoration: none; cursor: pointer;">Chairman</a></td>
					           </tr>
					          <tr style="border-bottom: 1px solid #333; height: 60px;border-bottom: 1px solid #333 !important;">
					                  <td><a href="" class="overview" style="float: left;color: #333 !important; font-weight: normal;">Richard Schaffer</a></td>
					                    <td style="color: #333; text-decoration: none; cursor: pointer;">Managing Director</td>
					                   </tr>
					                  <tr style="border-bottom: 1px solid #333; height: 60px;border-bottom: 1px solid #333 !important;">
					                        <td><a href="" class="overview"  style="float: left;color: #333 !important; font-weight: normal;">Lou Ferries</a> </td>
					                         <td style="color: #333; text-decoration: none; cursor: pointer;">Executive Director</td>
					                    </tr>
					             </tbody>
           				     </table>
                         </div>
 	</div>
  </div>
  </div>
  </section>
  <section style="background: #fff;">
  	<div class="container padding_0">
       <div class="row padding_0 abt-top">	
       			<div class="col-md-12 col-sm-12" style="padding: 0 5rem 0 0;">
 								<div class="promo-bt">
 									<h2 style="text-align: center;">The Management</h2>
 								</div>
 								<div class="jcarousel_mng">
 								  <div class="corporate-mng-box">
 								  	<div  data-toggle="modal" data-target="#myModal_kazi">
 									<img style="height: 164px; width: 164px; margin-top: 10px;" class="img-circle" src="{!! asset('assets/fontend/aboutus-images/kazi-ahammed.png',is_secured()) !!}" alt="kazi ahammed">
 									<div class="degint-ttle">
 									<span class="mang-name"> Kazi Ahmed </span>
 									<span class="mng-title">Chairman</span>
 									</div>
 								</div>
 
 								</div>
 								<div class="richrd">
	 								 <div class="mang-cor">
	 									<img class="img-circle" style="height: 164px; width: 164px;" src="{!! asset('assets/fontend/aboutus-images/reshard.png',is_secured()) !!}" alt="reshard">
	 									<div class="degint-ttle">
		 									<span class="mang-name">  Richard Schaffer</span>
		 									<span class="mng-title">Managing Director</span>
		 									</div>
	 								</div>
	 								<div class="mang-cor" style="margin-top: 10px;">
	 									<img class="img-circle" src="{!! asset('assets/fontend/aboutus-images/Ferries.jpg',is_secured()) !!}" alt="Ferries">
	 									<div class="degint-ttle">
			 									<span class="mang-name"> Lou Ferries</span>
			 									<span class="mng-title">Executive Director</span>
			 									</div>
	 								</div>
 								</div>
 							</div>
 						</div>
       </div>
       </div>
  </section>
 <section class="corporate-bg">
	<div class="container">
		<div class="row padding_0 abt-top">
	        <div class="header-content">
 						<h2>Corporate Structure</h2>
 			</div>
 		</div>
 	<div class="row abr-margin">
 	<div style="text-align: center; margin: 0 auto;">
 				
 		<div class="link-circle"><span class="frame"><a href="{!! URL::to('tradeshow',null,is_secured()) !!}" class="corporate-title-"> Exhibitions</a></span>
 		</div>
 	<div class="link-circle"><span class="frame"><a href="{!! URL::to('',null,is_secured()) !!}" class="corporate-title-">Bangladesh & International Relations</a></span>
 	</div>
 		<div class="link-circle"><span class="frame"><a href="{!! URL::to('promoting/bangladesh',null,is_secured()) !!}" class="corporate-title-">Product Promotion</a></span>
 		</div>
 		<div class="link-circle"><span class="frame"><a href="{!! URL::to('',null,is_secured()) !!}" class="corporate-title-">Publications and E-Commerce</a></span>
 		</div>
 	</div>
 	</div>
 <div class="row abr-margin">
 	<div style="text-align: center; margin: 0 auto;">
 		<div class="link-circle"><span class="frame"><a href="{!! URL::to('promoting/bangladesh',null,is_secured()) !!}" class="corporate-title-">Service Promotion</a></span></div>
 		<div class="link-circle"><span class="frame"><a href="{!! URL::to('',null,is_secured()) !!}" class="corporate-title-">Communication and Public Affairs</a></span></div>
 		<div class="link-circle"><span class="frame"><a href="{!! URL::to('marketing/bangladesh',null,is_secured()) !!}" class="corporate-title-">Marketing and Customer Service</a></span></div>
 		<div class="link-circle"><span class="frame"><a href="{!! URL::to('research',null,is_secured()) !!}" class="corporate-title-">Research</a></span></div>
 	</div>
	</div>
	</div>
</section>
<section>
  <div class="container padding_0">
		<div class=" row padding_0 abt-top">
		<div class="col-sm-12 col-md-12 ">
			<div class="header-content" style="padding: 20px 0px; max-width: 800px; margin: 0 auto;">
	 						<h2 style="color:#333;">Career Openings</h2>
	 		</div>
 		</div>
 		<div class="col-sm-12 col-md-12">
	     <div id="container" style="max-width: 800px; margin: 0 auto;">
					  <ul class="showcase">
					    <li class="thumb1"> <a href="{!! URL::to('web-developer/laravel',null,is_secured()) !!}"><img src="{!! asset('assets/fontend/aboutus-images/laravel-developer.jpg',is_secured()) !!}" width="500" height="374" alt="web3canvas">
					      <div class="sh-hov">
                  <h3>Andriod Developers<i>+</i></h3>
                <p>Are you enthusiastic about Android, gadgets and constructing great products? If so, we want to hear from you! This might just be your dream job!</p>
                </div>
					      </a> 
              </li>
					    <li class="thumb2"> <a href="{!! URL::to('executive',null,is_secured()) !!}"    ><img src="{!! asset('assets/fontend/aboutus-images/business-handshake.png',is_secured()) !!}" width="500" height="374" alt="web3canvas">
                <div class="sh-hov">
                  <h3>Marketing Executive<i>+</i></h3>
                    <p>Make this your ideal job as you build-up and deal with activities and materials to support sales, as well as utilize marketing automation tools and strategies.</p>
                    
                </div>
                </a>
					       </li>
					    <li class="thumb3"> <a href="{!! URL::to('content/writer',null,is_secured()) !!}"><img src="{!! asset('assets/fontend/aboutus-images/content-writing-service.jpg',is_secured()) !!}" width="500" height="374" alt="web3canvas">
                <div class="sh-hov">
                  <h3>Content Writer<i>+</i></h3>
                  <p>Grab this exciting opportunity to create engaging, targeted ghostwritten content on behalf of Buyer Seller clients across all mediums and channels.</p>
                </div>
					      
					      </a> 
                </li>
					  </ul>
					</div>
			</div>
		</div>
	</div>
</section>
<section class="corporate-business">
  <div class="container padding_0">
		<div class=" row padding_0 abt-top">
		<div class="col-sm-12 col-md-12 padding_0 " style="background: #fff; opacity: .9;">
			<div style="max-width: 800px; margin: 0 auto;">
				<div class="col-sm-6 col-md-6 padding_0">
			<div>
			<img style="width: 100%;margin: 25px 14px 0px 0px;" src="{!! asset('assets/fontend/aboutus-images/b2b_service.jpg',is_secured()) !!}" alt="b2b service">
			</div>
		</div>
		<div class="col-sm-6 col-md-6">
				<div style="padding-left: 20px;padding-bottom: 15px;">
					<h2 style="color: #000;padding: 0px 15px 10px 0px; font-size: 20px;">New B2B service on the block</h2>
					<p class="nws-cont" style="padding: 0;">Start-up aims to generate $300m in business for Bangladeshi manufacturers within a year</p>
					<p class="ntr">Syed Ashfaqul Haque</p>
					<p>A start-up company is ready to take off, eyeing to rake in business well over $300 million for Bangladeshi manufacturers within a year. 	</p>
					<p>Kazi Ahmed, owner of the world's first patented colour-blending markers for making perfect rainbows without gaps between colours,</p>
					<span><a href="http://www.thedailystar.net/business/new-b2b-service-the-block-1302046"     style="text-decoration: none;cursor: pointer;padding: 5px 10px;"> More details</a></span>
				</div>
		</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-12" style="background: #fff;opacity: .9;">
		<div class="row padding_0" style="max-width: 800px; margin: 0 auto;">
		<div class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
			<img class="buyer-lst-bd" itemprop="image" src="{!! asset('assets/fontend/images/FreeTek-International.png') !!}" alt="FreeTek International">
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
			<img class="buyer-lst-bd" itemprop="image" src="{!! asset('assets/fontend/images/Metro-Goldwyn-Mayer.png')!!}" alt="Metro Goldwyn Mayer">
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
			<img class="buyer-lst-bd" itemprop="image" src="{!! asset('assets/fontend/images/Yinsaviny.png')!!}" alt="Yinsaviny">
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
			<img class="buyer-lst-bd" itemprop="image" src="{!! asset('assets/fontend/images/Guangzhou-Sincere.png')!!}" alt="Guangzhou Sincere">
		</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-12" style="background: #fff;opacity: .9;">
		<div class="row padding_0" style="max-width: 800px; margin: 0 auto;">
	   <div class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
			<img class="buyer-lst-bd" itemprop="image"  src="{!! asset('assets/fontend/images/ORICO-Technology.png',is_secured()) !!}" alt="ORICO Technology">
		</div>
	 <div class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
			<img class="buyer-lst-bd" itemprop="image"  src="{!! asset('assets/fontend/images/Shenzhen-Yoobao-Technology.png',is_secured()) !!}" alt="Shenzhen Yoobao Technology">
		</div>
	<div class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
			<img class="buyer-lst-bd" itemprop="image"  src="{!! asset('assets/fontend/images/Weihai-Noeby-Fishing.png',is_secured()) !!}" alt="Weihai Noeby Fishing">
		</div>
	    <div class="col-sm-3 col-md-3 col-lg-3 col-xs-6">
			<img class="buyer-lst-bd" itemprop="image"  src="{!! asset('assets/fontend/images/Shenzhen-Shenhuo.png',is_secured()) !!}" alt="Shenzhen Shenhuo">
		</div>
	</div>
	</div>
</div>
</div>
</section>
<section style="background:#828687;">
	<div class="container padding_0">
		<div class=" row padding_0 abt-top">
			<div class="col-sm-12 col-md-12 padding_0">
				<div class="col-sm-5 col-md-5 col-lg-5">
						<div class="table-responsive" style="border:0 none !important;">          
						  <table class="table address-td">
						    <tbody class="address-td">
						      <tr>
						        <th>By phone:</th><td>880.170.888.4440</td>
						        </tr>
						        <tr style="-webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;">
						        <th >By email:</th><td>info@buyerseller.asia</td>
						        </tr>
						        <tr>
						        <th valign="top">In person:</th><td>
									House 818, Road 12,
									Avenue 06<br> Mirpur DOHS, Dhaka, Bangladesh <br><br>
									Sat. - Thur. 09:00 am - 6:00 pm<br>
									Closed on Friday and Public Holidays
								</td>
								</tr>

                </tr>
                    <tr>
                    <th valign="top">Chat with us: 24/7</th><td style="vertical-align: top;
" >
    <ul class="social-bdtdc" style="padding: 0;">

                  <li>
                    <a  href="skype:live:info_945293?chat"    ><i class="fa fa-skype" aria-hidden="true" style="font-size: 40px; color:#fff;    margin-top: 15px;"></i></a>
                  </li>
                  
                
                  
     </ul>

<br>
                 
                </td>
                </tr>
								
						        
						    </tbody>
						  </table>
						 </div>
				</div>
				<div class="col-sm-4 col-md-4">
						<div class="table-responsive" style="border:0 none !important;">          
						  <table class="table address-td">
						    <tbody class="address-td">
						    <tr>
						         <th>USA:</th><td>
						        	
						        	125 Colson drive<br>
									Summerland Key, Florida<br>
									33042, USA<br>
                  Ph: 1.305.684.7893
						        </td>
						        </tr>
							<tr>
						        <th>CANADA:</th>
							        <td>
							        PO Box 32107<br>
									Westgate PO, Maple Ridge<br>
									BC, V2X 0G9
									</td>
								</tr>
								<tr>
							        <th>SINGAPORE:</th>
                      <td>10 Marina Blvd Marina Bay <br>Financial Centre Tower 2 Level 39,<br> Singapore 018983
                  </td>
						      </tr>
						       </tbody>
						  </table>
				</div>
				</div>
				<div class="col-sm-3 col-md-3 col-lg-3 padding_0">
					<div>
				        <h5 style="padding: 20px 0; font-size: 20px; color:#fff;padding-left: 10px; clear: both; width: 100%;">Follow Us</h5>
				        <ul class="social-bdtdc" style="padding: 0;">

				          <li>
				            <a  href="https://www.youtube.com/c/Bdtdc"    ><i class="fa fa-youtube" aria-hidden="true" style="font-size: 40px; color:#fff;"></i></a>
				          </li>
				          <li><a href="https://www.facebook.com/bdtdc/"    ><i class="fa fa-facebook-official" aria-hidden="true" style="font-size: 40px; color:#fff;"></i></a></li>
				          <li><a  href="https://plus.google.com/+Bdtdc"     ><i class="fa fa-google-plus" aria-hidden="true" style="font-size: 40px; color:#fff;"></i></a></li>
				          <li><a  href="https://www.linkedin.com/company/bdtdc"    ><i class="fa fa-linkedin" aria-hidden="true" style="font-size: 40px; color:#fff;"></i></a></li>
				          <li><a  href="https://twitter.com/bdtdc"    ><i class="fa fa-twitter" aria-hidden="true" style="font-size: 40px; color:#fff;"></i></a></li>
				          
				        </ul>
				        <div class="logoShow">
				          <img style="width: 265px;padding: 10px;" class="carOrg" src="{!! asset('images/logo-white.png',is_secured()) !!}" alt="Buyer Seller"> 
				        </div>
				      </div>
				</div>
			</div>

		</div>
	</div>
</section>
<div class="modal fade" id="myModal_kazi" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         	<div class="row">
         			<div class="col-sm-4 col-xs-5">
         				<img src="{!! asset('assets/fontend/aboutus-images/kazi-ahammed.png',is_secured()) !!}" alt="kazi-ahammed">
         			</div>
         			<div class="col--sm-8 col-xs-7">
         					<div class="scrollbar-abt">
                                   <p class="designation-p"> Born in Bangladesh, Kazi Ahmed speaks Bengali and English.</p>
                            </div>
                      </div>
<div class="col-sm-12 col-md-12 col-xs-12">
<p class="designation-p">His life story is summed in his own words: "I usually don't believe in luck. I believe luck will be on my side only if I continue to work harder." Born into a poor family with many siblings, his parents could barely afford the basic necessities of life, including  food, clothing, shelter and school fees. Living from hand-to-mouth, he learned stoic fortitude early in life by engaging in numerous child labour activities as well as embarking to teaching other students to earn stipends which enabled him beat the cycle of poverty. Deep memories of his mother's toils in the rice fields and his father's meager earnings from various factories in order to eke out a living for the household still send chills down his spines, and servers as a constant reminder of his very humble background.</p>

<p class="designation-p">In 1986, by sheer dint of fate, he traveled to the Kingdom of Saudi Arabia where he began training and working as a telephone operator, which was short-lived. Determined to pursue his golden fleece, he took up the job of gardening for sustenance and livelihood. This singular act propelled his innate and inexhaustible creative mind as he collected myriads of tools, equipment and machines from junk-fields. His extraordinary ideas blossomed to the innovation of an oven that saves over 40% in energy in cooking. This was to become the springboard to his future, as he became a household name in Saudi media, which promoted his distinct skills.</p>
<p class="designation-p">It was no wonder that in the winter of 1989, Kazi was invited by the National Research Council of Canada, the premier technological research body, to come and demonstrate this new invention in Canada. His arrival in Vancouver, British Columbia did not yield the jolting results that accompanied the initial euphoria and instead he ended up as a street entertainer in Vancouver; toiling to tantalize his audience while making ends meet.</p>
<p class="designation-p">
  Ahmed Kazi's indomitable spirit and zeal engineered his creativity and he turned his artistic flair for colours into very enterprising prospects; he started painting in rainbow colours and dreamed of harnessing a future for young children who could articulate their dreams through brilliant painting with extraordinary ease through an invention, manufacturing and publishing of the world's first patented color blend RainbowBrush® markers and books series.
</p>
<p class="designation-p">
RainbowBrush® with proprietorship of 7 patented products worldwide, with incredible rainbow effects has successfully reached the world in over 25 countries, and became a trusted and sought-after brand of hands-on educational arts and crafts product lines for children, both at home and school. It is noteworthy that these products were top on the selling shelves at the Toys-R-Us in Hong Kong and China with Li &amp; Fung, Walmart, airport kiosks, shopping malls  and other major department stores. These novelty products are very popular with children on account of their distinctive features of enabling users to paint using different colours in one stroke at the same time.
</p>
<p class="designation-p">
  http://www.youtube.com/watch?v=mtmkHh9Vnlo<br>
http://www.youtube.com/watch?v=w-FUq05wWaw and<br>
http://www.youtube.com/watch?v=RtzoazKZ4Bc<br>

</p>
<p class="designation-p">
Ahmed Kazi is a dogged defender of the environment, believing that the earth is like a fragile egg that has to be treated with the utmost care, passion, and love, and that by so doing we make it a better place for all and those yet unborn. This desire has engaged his intervention through the establishment of the Buyer Seller which is at the forefront of ensuring the preservation of the environment and prevention and mitigation of harmful practices, and strongly believes that the world will be a better place for all inhabitants if we are all vigilant. Serving as a platform to creating a one-stop shop for investors (Bangladesh manufacturers and suppliers) to participate fully in the production, manufacturing and transaction process and ensure compliance with strict environmental standards in the factors of production.
</p>
<p class="designation-p">
  Ahmed Kazi is committed to propelling, promoting and pursuing an environmentally friendly agenda through the education and empowerment of all to entrench the UN's goals for sustainable development and the production of goods for international consumption. That, indeed, is the point of departure from old, endangering habits to new and enduring sustainable practices for Bangladesh. His long lasting wish is to bring highly profitable orders from USA, Canada and Europe to Bangladesh manufacturers who are willing to comply with and participate in environmentally friendly practices, that hitherto benefitted mostly China and Vietnam. It is hoped that with these intervention policies, Bangladesh will become more competitive, and perhaps gain comparative advantages in the production of garments, shoes, frozen shrimp, computer hardware and software, leather, tea and jute products.
</p>
<p class="designation-p">
Kazi Ahmed has three children with his ex-wife and makes South Florida, USA, and British Columbia, Canada his homes.
</p>
                        </div>
         			</div>
         	</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
@stop
@section('scripts')
<script type="text/javascript">


	 // Carousel Auto-Cycle
  // $(document).ready(function() {
  //   $('.carousel').carousel({
  //     interval: 6000
  //   })
  // });
  // $(document).ready(function() {

  //           $('div').hover(
				
  //              function () {
  //                 $(this).css({"background-color":"red"});
  //              }, 
				
  //              function () {
  //                 $(this).css({"background-color":"blue"});
  //              }
  //           );
				
  //        });
	 $('#myModal_kazi').on('hide.bs.modal', function(e) {
		$(this).removeData('bs.modal');
	});

</script>
@stop