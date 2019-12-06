@extends('frontend.layouts.master-register')
@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/media-room-style.css',is_secured()) !!}" rel="stylesheet">
    @endsection
  @section('content')
  <div class="row">
  			<div class="col-sm-12 col-md-12 col-lg-12">
  					<ul class="top-path" itemscope itemtype="http://schema.org/BreadcrumbList">
		              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
		              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('FooterPage/pages/Rules_center',22,is_secured())}}" class="top-path-li-a"><span itemprop="name">Rules Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
		              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('user/agreement'),is_secured()}}" class="top-path-li-a"><span itemprop="name">User Agreement</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
		              
		            </ul>
  			</div>
  	
  </div>
@include('fontend.footerpage.rules_sidebar')

		<div class="col-sm-9 padding_0" style="padding-left:6%;padding-top:20px;">
				<!-- <div class="col-sm-12 padding_0">
	            <div class="col-xs-10 col-md-10 padding_0">
					<i class="fa fa-search" style="font-size: 20px; color: #999; position: absolute;top:40%; left: 20px;">
					</i><input style="height:44px;border-radius: 5px!important; padding-left: 10%;" name="key" 
					class="form-control" type="text" placeholder="What are you looking for. . ." required="required">
				</div>
	               <div class="col-md-2 col-sm-2 col-xs-2 padding_0">
					<input type="submit" style="background:#19446F;border-radius:0 5px 5px 0 !important; position: absolute;top: 0px;" class="btn btn-primary btn-lg pull-left" value="Search">
					</div>
	            </div> -->
				<div class="coil-sm-12 col-lg-12 col-md-12">
							<h1 class="agreement-title" style="font-size: 24px;padding-left: 0">Free Membership Agreement</h1>
							<p class="agreement-list" style="padding-left: 0;  color: #579de3; padding-bottom: 5%;"><strong>It would be ideal if you READ THESE TERMS AND CONDITIONS CAREFULLY! It would be ideal if you PAY ATTENTION TO PROVISIONS THAT EXCLUDE OR LIMIT LIABILITY AND TERMS OF GOVERNING LAW AND JURISDICTION, WHICH MAY APPEAR IN CAPITAL LETTERS.</strong> </p>
							<h4 class="agreement-title"><span class="serial-span">1.</span> ACKNOWLEDGEMENT OF TERMS</h4>
							<p class="agreement-list"><span class="sub-list-span">1.1</span> <strong>WELCOME TO <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> FREE SERVICE</strong> (the "Administration"). The accompanying puts forward the terms and states of the <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> Free Membership Agreement (this "Understanding") between you ("Member") and an <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> organization ("<a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>") under which <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> offers you access to the Service through the sites distinguished by the uniform asset locator <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color: #06C;">  www.BuyerSeller.Asia</a> and the (the "Locales"). In the event that you are from  Bangladesh, your agreement is with Hangzhou BuyerSeller Advertising Co., Ltd. In the event that you are from Bangladesh, your agreement is with <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> Bangladesh Limited. On the off chance that you dwell outside territory Bangladesh, your agreement is with <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> Bangladesh E-Commerce Private Limited, Company Reg. No. 2016590392. As a few or part of the Services (as characterized in the <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> Terms of Use, as characterized beneath) might be bolstered and gave by members of <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>, <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> might designate a portion of the Services to its associates, especially <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> (Europe) Limited joined in the United Kingdom, who you concur might receipt you as far as it matters for them of the Services. Utilization of the Service shows that you acknowledge the terms and conditions put forward beneath. In the event that you don't acknowledge the majority of the terms and conditions, kindly don't utilize the Service. <strong>BY COMPLETING THE REGISTRATION PROCESS AND CLICKING THE "I AGREE" BUTTON, YOU ARE INDICATING YOUR CONSENT TO BE BOUND BY THIS AGREEMENT, THE SITE'S TERMS OF USE AGREEMENT, PRODUCT LISTING POLICY AND PRIVACY POLICY, WHICH ARE INCORPORATED HEREIN BY REFERENCE (COLLECTIVELY REFERRED TO AS THE "TERMS OF USE").</strong> The <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> Free Membership Agreement won't produce results unless and until you have enacted your Account. Terms not characterized in this Agreement might bear the same importance as that contained in the Terms of Use. </p>
							<p class="agreement-list"><span class="sub-list-span">1.2</span><a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> might alter this Agreement whenever by posting the revised and restated Agreement on the Site. The corrected and restated Agreement might be taking effect right now after posting. Posting by <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> of the altered and restated Agreement and your proceeded with utilization of the Service should be esteemed to bean acknowledgment of the revised terms. </p>
							<h4 class="agreement-title"><span class="serial-span">2.</span> THE SERVICE</h4>
							<p class="agreement-list"><span class="sub-list-span">2.1</span> The Service will be offered for nothing out of pocket for an unspecified time period unless ended as per the terms of this Agreement. </p>
<p class="agreement-list"><span class="sub-list-span">2.2</span> The Service will have the accompanying center elements (which might be added to or altered, or suspended for booked or unscheduled upkeep purposes, every now and then at the sole circumspection of <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> and informed to you) ("Free Member Benefits"): </p>

<div style="width: 80%; margin-left: 2%;padding-right: 4%;">
<div style="display: block;border:1px solid #333;">
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								a)
			 
					    </div>
					 <div class="list-right">
						  Company Profile - permits every Member to show and alter fundamental data about its business, for example, year and spot of foundation, assessed yearly deals, number of workers, and items and administrations offered, and so on. 
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								b)
			 
					    </div>
					 <div class="list-right">
						  	Products - permits every Member to show and alter portrayals, details and pictures of no less than 5 items. 
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 0 none; display: inline-block; block;">
						<div  class="list-left">
								c)
			 
					    </div>
					 <div class="list-right">
						  	Unlimited Buyer Trade Lead Posting - permits every Member to post on the Site for open presentation offers to purchase items and administrations from different clients of the Site. 
					 </div>
			</div>
		</div>
	</div>
<p class="agreement-list"><span class="sub-list-span">2.3</span> <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> might suspend or end all or part of the above Free Member Benefits whenever in its sole caution. <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> maintains whatever authority is needed to charge for the Service or any element or usefulness of the Service whenever in its sole circumspection. </p>
<p class="agreement-list"><span class="sub-list-span">2.4</span> Benefits, elements and capacities accessible to a Member might change for various nations and areas. No guarantee or representation is given that a specific element or capacity or the same sort and degree of elements and capacities will be accessible. </p>
<p class="agreement-list"><span class="sub-list-span">2.5</span> The accessibility of any value-based components and capacities on the Site to any Member might be restrictive on confirmation of Member's character and/or its assigned financial balance by <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> and/or its endorsed autonomous outsiders.</p> 
<p class="agreement-list"><span class="sub-list-span">2.6</span> <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> might issue a Member ID and Password (the last should be picked by the Member amid enlistment) to every Member to get to the Service through such Member's Account. Every Member should be exclusively in charge of keeping up the privacy of its Member ID and Password and for all exercises that happen under the Member ID and Password. An arrangement of Member ID and Password is one of a kind to a solitary Account and no Member might share, allocate or allow the utilization of its Account, Member ID or Password to someone else outside of the Member's business substance. Every Member recognizes that offering of its Account to different persons, or permitting various clients outside of its business substance to utilize its Account (by and large, "numerous utilization"), might bring about unsalvageable mischief to <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> and every Member should repay <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> against any misfortune or harms (counting however not restricted to loss of benefits) endured by <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> as a consequence of such various utilization of an Account. Every Member therefore attempts to advise <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> quickly of any unapproved utilization of its Account, Member ID or Password or some other rupture of security. Every Member thusly concurs that <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> might not be at risk for any misfortune or harms emerging from the Member's inability to consent to this passage. </p>
<p class="agreement-list"><span class="sub-list-span">2.7</span> <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> maintains whatever authority is needed to change, redesign, alter, constrain or suspend the Service or any of its related functionalities or applications whenever incidentally or for all time without earlier notice. <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> further maintains whatever authority is needed to present new elements, functionalities, applications or conditions to the Service or to future forms of the Service. Every single new element, functionalities, applications, conditions, adjustments, overhauls and modifications might be represented by this Agreement, unless generally expressed by <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>. </p>
<p class="agreement-list"><span class="sub-list-span">2.8</span> Each Member recognizes that failure to utilize the Service entirely or mostly for reasons unknown might effectly affect its business. Every Member therefore concurs that in no occasion might <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> be at risk to the Member or any outsiders for any powerlessness to utilize the Service (whether because of disturbance, changes to or end of the Service or something else), any postponements, mistakes, blunders or exclusions concerning any interchanges or transmission or conveyance of all or any part thereof, or any harm (immediate, circuitous, important or something else) emerging from the utilization of or failure to utilize the Service. </p>
<p class="agreement-list"><span class="sub-list-span">2.9</span> If your IP address originates from the territory Bangladesh when you effectively finish the enrollment with <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> Free Membership, you will be allowed an Bdtd pay Username notwithstanding your Member ID. In the event that your enlistment was finished before March 18, 2013 or the email address you utilized for your enrollment has as of now been enlisted with other BuyerSeller Sites (as characterized beneath), you won't be conceded the BuyerSeller pay Username. You are permitted to utilize the BuyerSeller pay Username to login to the sites <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">www.BuyerSeller.Asia</a>. You thus speak to and consent to approve <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> to give all the data connected with your Member ID to the BuyerSeller Sites with the end goal of encouraging your simple and quick access to the BuyerSeller Sites. Your obligations as to the BuyerSeller Username should apply to the same terms and conditions regarding the Member ID as endorsed under this Agreement. <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> saves the privilege, without earlier notice and at its sole prudence, to suspend, confine or deny access to or utilization of your BuyerSeller Username and administrations gave by <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> and BuyerSeller Sites in the event that you: </p>

<div style="width: 80%; margin-left: 2%;padding-right: 4%;">
<div style="display: block;border:1px solid #333;">
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								a)
			 
					    </div>
					 <div class="list-right">
						 utilization the administrations gave by <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>, the Sites and the BuyerSeller Sites to swindle any individual or substance; 
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								b)
			 
					    </div>
					 <div class="list-right">
						  	participate in any unlawful exercises including without restriction those which would constitute the encroachment of protected innovation rights, a common obligation or a criminal offense;
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 0 none; display: inline-block; block;">
						<div  class="list-left">
								c)
			 
					    </div>
					 <div class="list-right">
						  	take part in any exercises that would some way or another make any risk for <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>, the Sites or the BuyerSeller Sites.
					 </div>
			</div>
		</div>
	</div>
<h4 class="agreement-title"><span class="serial-span">3.</span> MEMBER RESPONSIBILITIES</h4>
<p class="agreement-list"><span class="sub-list-span">3.1 </span>Each Member thus speaks to, warrants and consents to (a) give genuine, precise, present and finish data about itself and its business references as might be required by <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> and (b) keep up and instantly correct all data to keep it genuine, exact, present and finish. Every Member thusly gives an unavoidable, ceaseless, worldwide and sovereignty free, sub-licensable (through different levels) permit to <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> to show and utilize all data gave by such Member as per the reasons put forward in this Agreement and to practice the copyright, attention, and database rights you have in such material or data, in any media now known or not at present known. </p>
<p class="agreement-list"><span class="sub-list-span">3.2 </span>Each Member therefore speaks to, warrants and concurs that the utilization by such Member of the Service and the Site might not: </p>


<div style="width: 80%; margin-left: 2%;padding-right: 4%;">
<div style="display: block;border:1px solid #333;">
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								a)
			 
					    </div>
					 <div class="list-right">
						Contains false data or make deceitful offers of things or include the deal or endeavored offer of fake or stolen things or things whose deals and/or showcasing is disallowed by material law, or generally advance other unlawful exercises; 
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								b)
			 
					    </div>
					 <div class="list-right">
						  		Be part of a plan to cheat different Members or different clients of the Site or for whatever other unlawful reason;
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								c)
			 
					    </div>
					 <div class="list-right">
						  Infringe or generally abet or empower the encroachment or infringement of any outsider's copyright, patent, trademarks, prized formula or other restrictive right or privileges of exposure and security or other authentic rights; 
					 </div>
			</div>
			<div style="width: 100%; border-bottom:1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								d)
			 
					    </div>
					 <div class="list-right">
						 Impersonate any individual or substance, distort yourself or your association with any individual or element; 
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								e)
			 
					    </div>
					 <div class="list-right">
						Violate any pertinent law, statute, mandate or regulation (counting without restriction those overseeing trade control, purchaser security, out of line rivalry, hostile to segregation or false publicizing); 
					 </div>
			</div>
			<div style="width: 100%; border-bottom:1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								f)
			 
					    </div>
					 <div class="list-right">
						Contains data that is defamatory, slanderous, unlawfully undermining or unlawfully bothering;
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								g)
			 
					    </div>
					 <div class="list-right">
						Contains data that is profane or contain or gather any erotica or sex-related marketing or some other substance or generally advances sexually express materials or is generally hurtful to minors;
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								h)
			 
					    </div>
					 <div class="list-right">
					 Promote separation taking into account race, sex, religion, nationality, incapacity, sexual introduction or age; 
					 		 </div>
			  </div>
			  <div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								i)
			 
					    </div>
					 <div class="list-right">
					 			Contains any material that constitutes unapproved publicizing or provocation (counting, however not restricted to spamming), attacks anybody's security or empowers direct that would constitute a criminal offense, offer ascent to common obligation, or generally disregard any law or regulation; 
					 		 </div>
			  </div>
			  <div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								j)
			 
					    </div>
					 <div class="list-right">
					 Involve endeavors to duplicate, recreate, adventure or confiscate <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>'s different restrictive indexes, databases and postings;
					 		 </div>
			  </div>
			  <div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								k)
			 
					    </div>
					 <div class="list-right">
					 Involve any PC infections or other dangerous gadgets and codes that have the impact of harming, meddling with, catching or confiscating any product or equipment framework, information or individual data; and
					 		 </div>
			  </div>
			  <div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								l)
			 
					    </div>
					 <div class="list-right">
					 		Involve any plan to undermine the trustworthiness of the PC frameworks or systems utilized by <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> and/or any client of the Service and no Member should endeavor to increase unapproved access to such PC frameworks or systems; 
					 		 </div>
			  </div>
			  <div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								m)
			 
					    </div>
					 <div class="list-right">
					 	Link specifically or by implication to or incorporate portrayals of products or administrations or different materials that damage any law or regulation or are restricted under this Agreement or the Terms of Use; or
					 		 </div>
			  </div>
			  <div style="width: 100%; border-bottom: 0 none; display: inline-block; block;">
						<div  class="list-left">
								n)
			 
					    </div>
					 <div class="list-right">
					 				Otherwise make any risk for <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> or its partners. 
					 		 </div>
			  </div>
		</div>
	</div>


<p class="agreement-list"><span class="sub-list-span">3.3 </span>Each Member speaks to, warrants and concurs that with respect to data about or posted in the interest of any business official, it has gotten every single important assent, endorsements and waivers from its business accomplices and partners to </p>

<div style="width: 80%; margin-left: 2%;padding-right: 4%;">
<div style="display: block;border:1px solid #333;">
			  <div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								a)
			 
					    </div>
					 <div class="list-right">
					 			go about in that capacity Member's business arbitrator;
					  </div>
			  </div>
			  <div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								b)
			 
					    </div>
					 <div class="list-right">
					 to post and distribute their contact points of interest and data, reference letters and remarks for their benefit; and <
					  </div>
			  </div>
			  <div style="width: 100%; border-bottom: 0 none; display: inline-block; block;">
						<div  class="list-left">
								c)
			 
					    </div>
					 <div class="list-right">
					 that outsiders might contact such business refs to bolster cases or articulations made about the Member. Every Member further warrants that all reference letters and remarks are genuine and precise and thusly waives all prerequisites for such Member's agree to be acquired before outsiders might contact the business arbitrators. 
					  </div>
			  </div>
</div>
</div>
<p class="agreement-list"><span class="sub-list-span">3.4</span> Member might not make any move which might undermine the trustworthiness of <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>'s input framework, for example, leaving positive criticism for himself utilizing optional Member IDs or through outsiders or by leaving unverified negative criticism for another Member. </p>
<p class="agreement-list"><span class="sub-list-span">3.5</span> Each Member recognizes and concurs that <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> should not be required to effectively screen nor practice any publication control at all over the substance of any message or other material or data made, acquired or open through the Service. <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> does not underwrite, confirm or generally affirm the substance of any remarks or other material or data made by any Member. Every Member is exclusively in charge of the substance of their interchanges and might be considered legitimately subject or responsible for the substance of their remarks or other material or data. </p>
<p class="agreement-list"><span class="sub-list-span">3.6</span> Each Member speaks to, warrants and concurs that it hosts got all important third get-together licenses and authorizations and might be exclusively in charge of guaranteeing that any material or data it posts on the Site or gives to <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> or approves <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> to show does not disregard the copyright, patent, trademark, prized formulas or whatever other individual or restrictive privileges of any outsider or is posted with the consent of the owner(s) of such rights. Every Member further speaks to, warrants and concurs that it has the privilege and power to offer, circulate or offer to offer or convey the items depicted in the material or data it posts on the Site or gives to <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> or approves <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> to show. </p>
<p class="agreement-list"><span class="sub-list-span">3.7</span> If any Member ruptures the representations, guarantees and pledges of sections 3.1, 3.2, 3.3, 3.4, 3.5 or 3.6 above, or if <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> has sensible grounds to trust that such Member is in break of such representations, guarantees and agreements, or if upon grumbling or claim from some other Member or outsider, <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> has sensible grounds to trust that such Member has unyieldingly or physically neglected to perform its agreement with such outsider including without constraint where the Member has neglected to convey any things requested by such outsider after receipt of the price tag, or where the Member has conveyed the things that tangibly neglect to meet the terms and portrayals laid out in its agreement with such outsider, or if <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> has sensible grounds to trust that such Member has utilized a stolen charge card or other false or misdirecting data in any online exchange, <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> has the privilege to suspend or end the Service and all Free Member Benefits as for such Member with no remuneration, and limit or reject all present or future utilization of the Service or whatever other administrations that might be given by <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>. Further, <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> saves the privilege in it sole caution to place confinements on the quantity of item postings that a Member can post on the Site for such length of time as <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> might consider fitting, and to evacuate any material it sensibly trusts that is unlawful, could subject <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> to risk, abuses this Agreement or the Terms of Use or is generally discovered improper as <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> would see it. <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> claims all authority to participate completely with administrative powers, private agents and/or harmed outsiders in the examination of any suspected criminal or common wrongdoing. Further, <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> might uncover the Member's character and contact data, if asked for by a legislature or law authorization body, a harmed outsider, or as a consequence of a subpoena or other legitimate activity, and <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> should not be at risk for harms or results thereof and Member concurs not to bring any activity or case against <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> for such divulgence. Regarding any of the prior, <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> might suspend or end the Account of any Member as <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> considers proper in its sole attentiveness.</p>
<p class="agreement-list"><span class="sub-list-span">3.8</span> Each Member consents to reimburse <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>, its workers, operators and delegates and to hold them safe, from any misfortunes, cases and liabilities (counting legitimate expenses on a full repayment premise) which might emerge from its entries, posting of materials or cancellation thereof, from such Member's utilization of the Service or from such Member's break of this Agreement or the Terms of Use. Every Member further concurs that <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> is not capable, and should have no obligation to it or any other person for any material posted by such Member or outsiders, including deceitful, untrue, deluding, erroneous, defamatory, hostile or unlawful material and that the danger of harm from such material rests totally with every Member. <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> holds the privilege; at its own cost, to expect the selective barrier and control of any matter generally subject to reimbursement by the Member, in which occasion the Member should coordinate with <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> in declaring any accessible protections.</p>
<h4 class="agreement-title"><span class="serial-span">4.</span>EXHANGES BETWEEN BUYERS AND SUPPLIERS </h4> 
<p class="agreement-list"><span class="sub-list-span">4.1</span> Through the Sites, <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> gives an electronic stage for trading data and finishing up deal and buy exchanges of items and administrations online in the middle of purchasers and suppliers. <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> maintains all authority to restrict certain elements and elements of the stage to recommended Members. In spite of the procurement of the stage through the Site, <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> does not speak to the vender or the purchaser in particular exchanges regardless of whether such exchanges are made on or by means of the Site. <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> does not control and is not obligated to or in charge of the quality, wellbeing, legitimateness or accessibility of the items or administrations offered available to be purchased on the Site or the capacity of the suppliers to finish a deal or the capacity of purchasers to finish a buy. </p>
<p class="agreement-list"><span class="sub-list-span">4.2</span> Members are thusly made mindful that there might be dangers of managing individuals acting under false falsifications. <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> utilizes a few strategies to confirm the exactness of the data our clients give us when they enlist on the Sites. In any case, since client check on the Internet is troublesome, <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> can't and does not affirm every free part's indicated character appeared on the Sites and can just utilize sensible endeavors to confirm the individual personality of the agent of a dealer in territory Bangladesh opening a storefront on www.<a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> as indicated by the relevant laws in terrain Bangladesh. We urge you to utilize the different devices accessible on the Site, and additionally sound judgment, to assess with whom you are managing. </p>
<p class="agreement-list"><span class="sub-list-span">4.3 </span>Each Member recognizes that it is completely expecting the dangers of procurement and deal exchanges when utilizing the Site to lead exchanges. Such dangers might incorporate, yet not constrained to, mis-representation of items and administrations, deceitful plans, unacceptable quality, inability to meet determinations, faulty items, postpone or default in conveyance or installment, cost mis-figurings, rupture of guarantee, break of agreement and transportation mishaps ("Transaction Risks"). Every Member concurs that <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> should not be subject or in charge of any harms, liabilities, costs, hurts, impediments, business interruptions or uses of any sort that might emerge an aftereffect of or regarding any Transaction Risks. </p>
<p class="agreement-list"><span class="sub-list-span">4.4</span> Members are exclusively in charge of the greater part of the terms and states of the exchanges led on, through or as an aftereffect of utilization of the Site, including, without restriction, terms in regards to installment, returns, guarantees, shipping, protection, expenses, charges, title, licenses, fines, grants, taking care of, transportation and capacity. </p>
<p class="agreement-list"><span class="sub-list-span">4.5</span> Member consents to give all data and materials as might be sensibly required by <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> regarding its exchanges made by means of the value-based stage on the Site. <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> has the privilege to suspend or end any Member's Account if the Member neglects to give the required data and materials. </p>
<p class="agreement-list"><span class="sub-list-span">4.6</span> if any Member hosts a question with any get-together to an exchange, such Member consents to discharge and repay <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> (and our operators, subsidiaries, executives, officers and workers) from all cases, requests, activities, procedures, costs, costs and harms (counting without restriction any real, unique, coincidental or important harms) emerging out of or regarding such exchange.</p>
<h4 class="agreement-title"><span class="serial-span">5.</span> USE OF DISCUSSION BOARDS ON THE SITE </h4>
<p class="agreement-list"><span class="sub-list-span">5.1</span> <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> gives its Members utilization of exchange sheets on the Site for nothing out of pocket to advance and energize open, legit and deferential correspondence between the greater part of our Members. The discourse sheets on the Site should not be utilized as an advertising stage by Members and Members might not present any data relating on exchange drives, advancement of their items or their organization profile. </p>
<p class="agreement-list"><span class="sub-list-span">5.2 </span>Each Member recognizes that all information, content, programming, music, sound, photos, design, video, messages or different materials ("content"), whether openly posted or secretly transmitted through an exchange board on the Site, are the sole obligation of such Member from whom the substance started. This implies the posting Member, and not <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>, is totally in charge of all substance that is transferred or posted through our discourse sheets on the Site. <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> does not control the substance posted by means of dialog sheets and subsequently does not ensure the precision, honesty or nature of such substance. </p>
<p class="agreement-list"><span class="sub-list-span">5.3 </span> <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> maintains whatever authority is needed to erase or alter any postings in its sole circumspection without earlier notice. <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> might screen posting exercises of any Member who is in break of this Agreement and might confine their capacity to post messages on the exchange sheets on the Site. By no means will <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> be at risk in any capacity for any substance, including (without restriction) any blunders or exclusions in any substance, or for any misfortune or harm of any sort acquired as a consequence of the utilization of the discourse sheets by such Member. Every Member consents to assess and bear all dangers connected with the utilization of any substance including any dependence on its exactness or culmination. Every Member comprehends that by utilizing the <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> dialog sheets on the Site, such Member might be presented to substance that is hostile, revolting or frightful. </p>
<p class="agreement-list"><span class="sub-list-span">5.4</span> Without partiality to every Member's obligations under Clause 3 of this Agreement, every Member concurs not to utilize the talk sheets on the Site to: </p>

<div style="width: 80%;margin-left: 2%;padding-right: 4%;">
<div style="display: block;border:1px solid #333;">
			  <div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								a)
			 
					    </div>
					 <div class="list-right">
					 	Upload, post or email any substance that is unlawful, hurtful, debilitating, damaging, annoying, convoluted, defamatory, disgusting, foul, derogatory, intrusive of another's protection, derisive, or racially, ethnically or generally offensive;
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; ">
						<div  class="list-left">
								b)
			 
					    </div>
					 <div class="list-right">
					 		Harm minors in any capacity;
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								c)
			 
					    </div>
					 <div class="list-right">
					 Impersonate any individual or element, erroneously state or generally distort your alliance with a man or substance or mask the birthplace of any substance;
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								d)
			 
					    </div>
					 <div class="list-right">
					 "stalk" or generally pester another;
					
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								e)
			 
					    </div>
					 <div class="list-right">
					  Collect or store individual information about different clients; 
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								f)
			 
					    </div>
					 <div class="list-right">
					 	Upload, post or email any substance that you don't have a privilege to transmit under any law or under contractual or guardian connections;
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								g)
			 
					    </div>
					 <div class="list-right">
					 Upload, post or email any substance that encroaches any licensed innovation rights or other honest to goodness privileges of any gathering; 
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								h)
			 
					    </div>
					 <div class="list-right">
					 Upload, post or email any spontaneous or unapproved publicizing, special materials, "garbage mail", "spam", "junk letters", or some other type of requesting;
					 </div>
			</div>

			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								i)
			 
					    </div>
					 <div class="list-right">
					 Upload, post or email any substance that contains PC infections or some other PC code, records or projects intended to interfere with, pulverize or point of confinement the usefulness of any PC programming, equipment or information transfers hardware; 
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								j)
			 
					    </div>
					 <div class="list-right">
					 	Upload, post or email any substance that contains a grievance with respect to <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>'s administrations or alludes to such a grumbling on the Site or to whatever other Members; any such objection must be coordinated to the client administration email on the Site; or
					 </div>
			</div>
			<div style="width: 100%; border-bottom: 0 none; display: inline-block; block;">
						<div  class="list-left">
								k)
			 
					    </div>
					 <div class="list-right">
					 		Violate any relevant national or inner laws or regulations.
					 </div>
			</div>
			</div>
			

		</div>
	</div>	

<p class="agreement-list"><span class="sub-list-span">5.5</span> Each Member recognizes that <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> does not pre-screen content but rather that <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> should have the privilege (however not the commitment) in its sole prudence to move, adjust or uproot any substance that is posted or transferred on the examination sheets on the Site. </p>
<p class="agreement-list"><span class="sub-list-span">5.6</span> Each Member stipends to <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> an unending, around the world, sovereignty free unalterable, non-select permit (counting the privilege to sub-permit through various levels) to utilize, duplicate, adjust, adjust, distribute, decipher, make subsidiary works from, disperse, perform and show any substance (in entire or part) such Member transferred, presented or supplied on <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> for posting on the Sites and/or to fuse such substance in different works in any structure, media or innovation now known or created. </p>
<p class="agreement-list"><span class="sub-list-span">5.7</span> Each Member should repay and hold <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> and its auxiliaries, associates, workers, officers, operators or accomplices safe from and against any immediate or aberrant misfortune or harm (counting important misfortune and loss of benefits, goodwill or business opportunities) emerging from any outsider case in connection to any substance such Member transferred, posted or messaged on or through the exchange sheets on the Site, such Member's utilization of the dialog sheets on the Site, or such Member's rupture of the procurements set out in Clause 5.4. </p>
<p class="agreement-list"><span class="sub-list-span">5.8</span> On being made mindful of any such breaks, <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> might boycott, erase or forbid any substance that identifies with those ruptures or that <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> in its sole tact consider to be unsafe to general society or the privileges of <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> or any of its offshoots, licensors, accomplices or Members. </p>
<p class="agreement-list"><span class="sub-list-span">5.9</span> <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> maintains all authority to make whatever move it regards important to keep a Member's break of Clause 5.4 including the accompanying: </p>


<div style="width: 80%; margin-left: 2%;padding-right: 4%;">
<div style="display: block;border:1px solid #333;">
			  <div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								a)
			 
					    </div>
					 <div class="list-right">
					 	Issue a notice letter to the applicable Member (where the ruptures are considered by <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> to be minor); or
					 </div>
					</div>
					<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								b)
			 
					    </div>
					 <div class="list-right">
					 	Ban the applicable Member from exchange sheets on the Site (where the breaks are considered by <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> to be major). 
					 </div>
					</div>
					<div style="width: 100%; border-bottom:  0 none; display: inline-block; block;">
						<div  class="list-left">
								c)
			 
					    </div>
					 <div class="list-right">
					 	Issue a notice letter to the applicable Member (where the ruptures are considered by <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> to be minor); or
					 </div>
					</div>
			</div>
	</div>


<p class="agreement-list">All occurrences will be logged and <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>'s choice might be last in every such case. </p>
<p class="agreement-list" style="padding-left: 22px;"><span class="sub-list-span">5.10</span> All data and/or other substance posted on the Site by the <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> administration group or by Members or outsider accomplices is supplied for data purposes just and should not under any circumstances be interpreted as legitimate and/or business counsel or a lawful assessment. Individuals are urged to look for free proficient guidance in such circumstances. </p>

	<h4 class="agreement-title"><span class="serial-span">6.</span> CONFINEMENT OF LIABILITY</h4>
	<p class="agreement-list"><span class="sub-list-span">6.1</span> <strong>TO THE MAXIMUM EXTENT PERMITTED BY LAW, THE SERVICE IS PROVIDED ON AN "AS Seems to be" AND "AS AVAILABLE" BASIS, AND <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> HEREBY EXPRESSLY DISCLAIMS ANY AND ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO ANY WARRANTIES OF CONDITION, QUALITY, DURABILITY, PERFORMANCE, ACCURACY, RELIABILITY, MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE OR NON-INFRINGEMENT. Every single SUCH Warrantie, REPRESENTATIONS, CONDITIONS, UNDERTAKINGS AND TERMS ARE HEREBY EXCLUDED.</strong> </p>
<p class="agreement-list"><span class="sub-list-span">6.2 </span><strong>TO THE MAXIMUM EXTENT PERMITTED BY LAW, <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> MAKES NO REPRESENTATIONS OR WARRANTIES ABOUT THE VALIDITY, ACCURACY, RELIABILITY, QUALITY, STABILITY, COMPLETENESS OR CURRENTNESS OF ANY INFORMATION PROVIDED ON OR THROUGH THE SITE.</strong> </p>
<p class="agreement-list"><span class="sub-list-span">1.1</span>6.3 Any material downloaded or generally got using the Service is done at every Member's sole circumspection and hazard and every Member is exclusively in charge of any harm to its PC framework or loss of information that outcomes from the download of any such material. No guidance or data, whether oral or composed, acquired by any Member from <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> or through or from the Service should make any guarantee not explicitly expressed in this Agreement. </p>
<p class="agreement-list"><span class="sub-list-span">6.4</span> The Site might make accessible to User administrations or items gave by free outsiders. No guarantee or representation is made with respect to such administrations or items. In no occasion might <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> and its partners be held obligated for any such administrations or items. </p>
<p class="agreement-list"><span class="sub-list-span">6.5</span> Under no circumstances should <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> be held at risk for a deferral or disappointment or interruption of the Service coming about straightforwardly or by implication from demonstrations of nature, strengths or causes past its sensible control, including without constraint, Internet disappointments, PC, information transfers or some other gear disappointments, electrical force disappointments, strikes, work debate, riots, uprisings, common unsettling influences, deficiencies of work or materials, fires, surge, storms, blasts, Acts of God, war, legislative activities, requests of local or remote courts or tribunals or non-execution of outsiders.</p> 
<p class="agreement-list"><span class="sub-list-span">6.6</span> <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> should not be obligated for any uncommon, immediate, aberrant, corrective, accidental or significant harms or any harms at all (counting however not restricted to harms for loss of benefits or reserve funds, business interference, loss of data), whether in contract, carelessness, tort or generally or some other harms coming about because of any of the accompanying: </p>

<div style="width: 80%; margin-left: 2%;padding-right: 4%;">
<div style="display: block;border:1px solid #333;">
			  <div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								a)
			 
					    </div>
					 <div class="list-right">
					 The use or the failure to utilize the Service; 
				</div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								b)
			 
					    </div>
					 <div class="list-right">
					Any imperfection in products, tests, information, data or administrations acquired or got from a Member or an outsider administration supplier through the Site;
				</div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								c)
			 
					    </div>
					 <div class="list-right">
					 Unauthorized access by outsiders to information or private data of any Member;  
				</div>
			</div>
			<div style="width: 100%; border-bottom: 1px solid #333; display: inline-block; block;">
						<div  class="list-left">
								d)
			 
					    </div>
					 <div class="list-right">
					Statements or behavior of any client of the Site; or 
				</div>
			</div>
			<div style="width: 100%; border-bottom: 0 none; display: inline-block; block;">
						<div  class="list-left">
								c)
			 
					    </div>
					 <div class="list-right">
					Any other matter identifying with the Service however emerging, including carelessness. 
				</div>
			</div>
			</div>
		</div>
<p class="agreement-list"><span class="sub-list-span">6.7</span> Notwithstanding any of the prior procurements, the total risk of <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>, its workers, operators, associates, delegates or anybody following up for its benefit regarding every Member for all cases emerging from the utilization of the Service or the Site might be constrained to HK$100. The previous sentence might not block the prerequisite by the Member to demonstrate genuine harms. All cases emerging from the utilization of the Service must be recorded inside either one (1) year from the date the reason for activity emerged or such more period as recommended under any material law representing this Agreement.</p>
<h4 class="agreement-title"><span class="serial-span">7.</span>INTELLECTUAL PROPERTY RIGHTS</h4>
<p class="agreement-list"><span class="sub-list-span">7.1</span> <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> is the sole proprietor or legitimate licensee of the considerable number of rights to the Service. The Service exemplifies prized formulas and licensed innovation rights secured under overall copyright and different laws. All titles, proprietorship and licensed innovation rights in the Service should stay with <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> or its offshoots. All rights not generally guaranteed under this Agreement or by <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> are therefore saved. </p>
<p class="agreement-list"><span class="sub-list-span">7.2</span> <strong>"BuyerSeller", "<a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>"</strong> and related symbols and logos are enrolled trademarks or trademarks or administration signs of BuyerSeller Group Holding Limited,  and related symbols and logos are enlisted trademarks or trademarks or administration characteristics of <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> Limited in different locales and are secured under material copyright, trademark and other exclusive rights laws. The unapproved duplicating, adjustment, use or production of these imprints is entirely precluded. </p>
<h4 class="agreement-title"><span class="serial-span">8.</span> GENERAL </h4>
<p class="agreement-list"><span class="sub-list-span">8.1</span> This Agreement and the Terms of Use constitute the whole assention between the Member and <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> as for and oversees the utilization of the Service, superseding any earlier composed or oral understandings in connection to the same topic thus. </p>
<p class="agreement-list"><span class="sub-list-span">8.2</span> <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> and the Member are self employed entities, and no office, organization, joint endeavor, representative boss or franchiser-franchisee relationship is proposed or made by this Agreement. </p>
<p class="agreement-list"><span class="sub-list-span">8.3</span> If any procurement of this Agreement is held to be invalid or unenforceable, such procurement should be struck and the remaining procurements might be implemented. </p>
<p class="agreement-list"><span class="sub-list-span">8.4</span> Headings are for reference purposes just and not the slightest bit characterize, utmost, understand or portray the extension or degree of such area. </p>
<p class="agreement-list"><span class="sub-list-span">8.5</span> <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>'s inability to authorize any privilege or inability to act as for any rupture by a Member under this Agreement won't waive that privilege nor waive <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>'s entitlement to act with deference with resulting or comparable breaks. </p>

<p class="agreement-list"><span class="sub-list-span">8.6</span> <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> should have the privilege to dole out this Agreement (counting the greater part of its rights, titles, advantages, hobbies, and commitments and obligations in this Agreement) to any individual or element (counting any partners of <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a>). The Member may not appoint, in entire or part, this Agreement to any individual or element. </p>
<p class="agreement-list"><span class="sub-list-span">8.7 </span><strong>THIS AGREEMENT SHALL BE GOVERNED BY THE LAWS OF THE PEOPLE'S REPUBLIC OF Bangladesh ("PRC") IF YOU CONTRACT WITH HANGZHOU BuyerSeller ADVERTISING CO., LTD ACCORDING TO PARAGRAPH 1.1, AND THE PARTIES TO THIS AGREEMENT HEREBY SUBMIT TO THE EXCLUSIVE JURISDICTION OF THE PRC COURTS. On the off chance that YOUR CONTRACT IS WITH <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> Bangladesh LIMITED OR <a itemprop="url" href="{{URL::to('/')}}" target="_blank" style="color:#06c">BuyerSeller.Asia</a> SINGAPORE E-COMMERCE PRIVATE LIMITED, THEN THIS AGREEMENT SHALL BE GOVERNED BY LAWS OF THE Bangladesh SPECIAL ADMINISTRATIVE REGION ("Bangladesh") WITHOUT REGARD TO ITS CONFLICT OF LAW PROVISIONS, AND THE PARTIES TO THIS AGREEMENT HEREBY SUBMIT TO THE EXCLUSIVE JURISDICTION OF THE Bangladesh COURTS.</strong> </p>
<p class="agreement-list"><span class="sub-list-span">8.8</span> If there is any contention between the English rendition and another dialect form of this Agreement, the English adaptation should win.</p>



				</div>
		</div>

   @stop
   @section('scripts')
<script type="text/javascript">
		$(document).ready(function(){
    				$(".col-sm-12 p").css({
				    "font-size":"13px",
				    "line-height":"22px",
				    "padding-bottom":"20px",
				    "word-spacing":"1.3px",
				    "color":"#333",
				    "border":"0 none",
				    "margin" :"0"
			});
        });
</script>
@stop