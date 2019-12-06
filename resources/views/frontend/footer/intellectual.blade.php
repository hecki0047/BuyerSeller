@extends('fontend.master_dynamic')
	@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/media-room-style.css',is_secured()) !!}" rel="stylesheet">
    @endsection
  @section('content')
  <div class="row">
  			<div class="col-sm-12 col-md-12 col-lg-12">
  					<ul class="top-path" itemscope itemtype="http://schema.org/BreadcrumbList">
		              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
		              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('FooterPage/pages/Rules_center',22,is_secured())}}" class="top-path-li-a"><span itemprop="name">Rules Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
		              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('Intellectual'),is_secured()}}" class="top-path-li-a"><span itemprop="name">Enforcement Actions for Intellectual</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
		              
		            </ul>
  			</div>
  	
  </div>
@include('fontend.footerpage.rules_sidebar')


	      <div class="col-sm-9 padding_0" style="padding-left:6%;padding-top:20px;">
	            <!-- <div class="col-sm-12 padding_0">
	            <div class="col-xs-10 col-md-10 padding_0">
					<i class="fa fa-search" style="font-size: 20px; color: #999; position: absolute;top:40%; left: 20px;">
					</i><input style="height:44px;/*border-radius: 5px!important; */padding-left: 10%;" name="key" 
					class="form-control" type="text" placeholder="What are you looking for. . ." required="required">
				</div>
	                  <div class="col-md-2 col-sm-2 col-xs-2 padding_0">
					<input type="submit" style="background:#19446F;" class="btn btn-primary btn-lg pull-left" value="Search">
					</div>
	            </div> -->
	            
	            <div class="col-sm-12" style="margin-top:20px;padding-bottom:2%;padding-left:0px;">
	      			<!-- <p style="padding-top: 2%;"><a itemprop="url"  href="{{URL::to('product_listing_policy')}}" style="color:#06C;font-size: 13px;font-weight: bold;">< Back to list</a></p> -->
	      			<p style="padding-top: 3%;font-size: 20px;font-weight: bold;">
	      				Intellectual Property Rights (IPR) Protection Policy
	      			</p>
	      			<p style="font-size: 15px;padding-top: 20px;">(Updated on February 10, 2014)</p>	  
				</div>
				<div class="col-sm-12 padding_0" style="padding-bottom:60px;">
					<p style="font-weight:bold;font-size: 18px;">1. Overview</p>
					<p  class="poli-dst" >
						BuyerSeller.Asia  “<a itemprop="url" href="{{URL::to('/')}}" style="color: #06C;">BuyerSeller.Asia</a>” respects and regards the right of 
						Intellectual Property and vice versa. We categorically guarantee our clients that at
						 <a href="{{URL::to('/')}}" style="color: #06C;">http://www.BuyerSeller.Asia/</a> the Intellectual Property contravention are utterly tackled and addressed 
						 judiciously.  
					</p>
				</div>
	      		<div class="col-sm-12 padding_0" style="padding-bottom:60px;">
					<p style="font-weight:bold;font-size: 18px;">2. Intellectual Property Right (“IPR”) Protection</p>
					<p  class="poli-dst" >
						On our site, fraudulent acts such as the bogus replicas, counterfeits, or any other illegal attempt 
						is verboten and prohibited. If any item is caught as fake or a mockup, we will immediately cancel 
						their membership from our website, as we believe in providing our customers with the highest quality 
						services.   
					</p>
				</div>
				<div class="col-sm-12 padding_0" style="padding-bottom:60px;">
					<p style="font-weight:bold;font-size: 18px;text-align:left;">3. Defilement of Our IPR Policy Will Result in Permanent Removal</p>
					<p style="padding-top: 10px;font-size: 13px;color: #000;">
						- The listing will be removed.
					</p>
					<p style="font-size: 14px;color: #000;">
						- Restrictions will be imposed.
					</p>
					<p style="font-size: 14px;color: #000;">
						- The permanent suspension of account is most likely to occur.
					</p>
					<p style="font-size: 14px;color: #000;">
						- The membership service agreement will be dismissed.
					</p>
					<p style="padding-top: 5%;font-size: 14px;color: #000;text-align:left;padding-right:20%;">
						The actions that are initiated by our company against the infraction and infringement of Intellectual
						Property Rights are specified in the following link:
					</p>
					<p style="padding-top: 5%;font-size: 14px;color: #000;text-align:left;">
						For the details of the implementations and executions click <a itemprop="url" href="{{URL::to('/')}}" style="color: #06C;">
						http://www.BuyerSeller.Asia/</a>
					</p>
					<p style="padding-top: 5%;font-size: 14px;color: #000;text-align:left;padding-right:20%;">
						In any obvious or conspicuous circumstance, the <a itemprop="url" href="{{URL::to('/')}}" style="color: #06C;">BuyerSeller.Asia</a> has the full authority to enforce any 
						penalty at any time, any initiative can be embarked by the intellectual property rights holder 
						including the litigation of any particular case.  
					</p>
				</div>
				<div class="col-sm-12 padding_0" style="padding-bottom:60px;">
					<p style="font-weight:bold;font-size: 18px;">4. Claims of Infringement</p>
					<p  class="poli-dst" >
						Under the forfeit of fabrication and falsification, the claims of intellectual property infringement
						 will be deployed. The intellectual property right holder makes an agreement in which they reach a
						  decision to indemnify and guarantee <a itemprop="url" href="{{URL::to('/')}}" style="color: #06C;">BuyerSeller.Asia</a> free from all claims including judgements which 
						  ascends from any exclusion of product listing, causes of action which is in accordance to the 
						  intellectual property infringement claims.  
					</p>
					<p  class="poli-dst" >
						Furthermore, the BuyerSeller does not cater any intellectual property infringement claim which is 
						conflicting and contradictory, as this is a neutral e-business platform. The <a itemprop="url" href="{{URL::to('/')}}" style="color: #06C;">
						BuyerSeller.Asia</a> decisions 
						and actions which are undertaken, are not going to be based on any endorsement or commendation of 
						claim of intellectual property infringement. The conflicts between the parties, are handled with 
						caution at our b2b website and decisions are taken wisely to resolve the issue of intellectual 
						property infringement. 
					</p>
				</div>
				<div class="col-sm-12 padding_0" style="padding-bottom:60px;">
					<p style="font-weight:bold;font-size: 18px;">5. Online Report System and Its Protection</p>
					<p  class="poli-dst" >
						For the purpose of centralized processing Intellectual property right holders will be required to 
						use the BuyerSeller protection index, so as to claim over any infringement. The BuyerSeller protection facility
						 is provided at our website’s front page, on the top right corner under the ‘Help’ tab.
					</p>
					<p  class="poli-dst" >
						An effective and efficient network is provided at our website so as to file any intellectual property 
						infringement claim by the intellectual property right holder and they may also file a request, if find 
						it necessary, to basically jot down any infringing listings from the BuyerSeller site.
					</p>
					<p  class="poli-dst" >
						The following materials are required by the BuyerSeller, so as to initiate the process of intellectual
						 property infringement claim: 
					</p>
					<ol>
						<li><p style="font-size: 13px;color: #000;padding-right:20%;">The intellectual property possession or ownership evidence.</p></li>
						<li><p style="font-size: 13px;color: #000;padding-right:20%;">The pertinent and relevant infringing listings from the exact hyperlinks on the site.</p></li>
						<li><p style="font-size: 13px;color: #000;padding-right:20%;">The complaining party has to prove an identity and if the complaining party is not an
						 intellectual property right holder, then they also provide the relevant authorization as well.
						</p></li>
					</ol>
					<p  class="poli-dst" >
						For any further question regarding any legal issue or the protection of intellectual property, you 
						may contact us any time, prompt service 24/7 is always available at our website. 
					</p>
					<p  class="poli-dst" >
						At our b2b website, the services are provided promptly and punctually via BuyerSeller protect, where we 
						evaluate the issue of intellectual property infringement claims pragmatically. The members of the
						claim of intellectual property infringement are going to be informed about the claims and the
						information of the intellectual property right holders, including their contact and other details
						will be provided to all the claimers, so as to facilitate them with easy claim-handling and direct 
						conflict resolution. 
					</p>
				</div>
		 </div>
	</div>

   @stop