@extends('fontend.master_dynamic')
	@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/media-room-style.css',is_secured()) !!}" rel="stylesheet">
    @endsection
  @section('content')
  <div class="row">
  			<div class="col-sm-12 col-md-12 col-lg-12">
  					<ul class="top-path" itemscope itemtype="http://schema.org/BreadcrumbList">
		              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
		              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="{{URL::to('bdtdc_policies_rules'),is_secured()}}" class="top-path-li-a"><span itemprop="name">Rules Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
		              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="{{URL::to('product_listing_policy'),is_secured()}}" class="top-path-li-a"><span itemprop="name">Product Listing Policy</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
		              
		            </ul>
  			</div>
  	
  </div>
@include('fontend.footerpage.rules_sidebar')


	      <div class="col-sm-9 padding_0" style="padding-left:6%;">    
	      <!--    <div class="col-sm-12 padding_0">
	           <div style="display: block; width: 100%; padding-top: 20px;">		      
	            <div class="col-xs-10 col-md-10 padding_0">

						<i class="fa fa-search" style="font-size: 20px; color: #999; position: absolute;top:40%; left: 20px;">
						</i>
						<input style="height:44px;border-radius: 5px!important; padding-left: 10%;" name="key" 
						class="form-control" type="text" placeholder="What are you looking for. . ." required="required">
					</div>
		               <div class="col-md-2 col-sm-2 col-xs-2 padding_0">
						<input type="submit" style="background:#19446F;border-radius:0 5px 5px 0 !important; position: absolute;top: 0px;" class="btn btn-primary btn-lg pull-left" value="Search">
						</div>
					</div>

	            </div> -->
	            
	            <div class="col-sm-12" style="margin-top:20px;padding-bottom:2%;padding-left:0px;">
	      			<!-- <p style="padding-top: 2%;"><a itemprop="url" href="#" style="color:#06C;font-size: 13px;font-weight: bold;"> Back to list</a></p> -->
	      			<p style="padding-top: 3%;font-size: 20px;font-weight: bold;text-align:center;">
	      				Product Listing Policy 
	      			</p>  
				</div>
				<div class="col-sm-12 collapse navbar-collapse"  id="myNavbar">
					<ol>
					  <li><a itemprop="url" href="#pro_list_policy1"  class="poli-descpt" >General Prohibitions</a></li>
					  <li><a itemprop="url" href="#pro_list_policy2"  class="poli-descpt" >Artifacts</a> </li>
					  <li><a itemprop="url" href="#pro_list_policy3"  class="poli-descpt" >Currency and Stamps</a></li>
					  <li><a itemprop="url" href="#pro_list_policy4"  class="poli-descpt" >Crude Oil</a></li>
					  <li><a itemprop="url" href="#pro_list_policy5"  class="poli-descpt" >Contracts and Tickets</a></li>
					  <li><a itemprop="url" href="#pro_list_policy6"   class="poli-descpt" >Credit Cards</a></li>
					  <li><a itemprop="url" href="#pro_list_policy7"  class="poli-descpt" >Drugs & Associated Paraphernalia</a></li>
					  <li><a itemprop="url" href="#pro_list_policy8"  class="poli-descpt" >Ethnically or Racially Offensive Material</a></li>
					  <li><a itemprop="url" href="#pro_list_policy9"  class="poli-descpt" >Event Ticket Resale Policy</a> </li>
					  <li><a itemprop="url" href="#pro_list_policy10"  class="poli-descpt" >Faces, Names and Signatures</a></li>
					  <li><a itemprop="url" href="#pro_list_policy11"  class="poli-descpt" >Financial Services</a></li>
					  <li><a itemprop="url" href="#pro_list_policy12"  class="poli-descpt" >Firearms, Ammunition, Weapons, Explosives</a></li>
					  <li><a itemprop="url" href="#pro_list_policy13"  class="poli-descpt" >Foods</a></li>
					  <li><a itemprop="url" href="#pro_list_policy14"  class="poli-descpt" >Tobacco Products</a></li>
					  <li><a itemprop="url" href="#pro_list_policy15"  class="poli-descpt" >Gold, Silver and Other Precious Metals</a></li>
					  <li><a itemprop="url" href="#pro_list_policy16"  class="poli-descpt" >Government-Issued IDs, Licenses and Uniforms</a></li>
					  <li><a itemprop="url" href="#pro_list_policy17"  class="poli-descpt" >Hazardous Materials</a></li>
					  <li><a itemprop="url" href="#pro_list_policy18"  class="poli-descpt" >Human Parts and Remains</a></li>
					  <li><a itemprop="url" href="#pro_list_policy19"  class="poli-descpt" >Invoices</a></li>
					  <li><a itemprop="url" href="#pro_list_policy20"  class="poli-descpt" >Job Postings</a></li>
					  <li><a itemprop="url" href="#pro_list_policy21"  class="poli-descpt" >Mailing Lists and Personal Information</a></li>
					  <li><a itemprop="url" href="#pro_list_policy22"  class="poli-descpt" >Medical and Healthcare Service</a></li>
					  <li><a itemprop="url" href="#pro_list_policy23"  class="poli-descpt" >Non-business Information</a></li>
					  <li><a itemprop="url" href="#pro_list_policy24"  class="poli-descpt" >Non-transferable Items</a></li>
					  <li><a itemprop="url" href="#pro_list_policy25"  class="poli-descpt" >Police-Related Items</a></li>
					  <li><a itemprop="url" href="#pro_list_policy26"  class="poli-descpt" >Pornographic Materials and Adult Products</a></li>
					  <li><a itemprop="url" href="#pro_list_policy27"  class="poli-descpt" >Posting an Advertisement for the Sole Purpose of Collecting User Information or Raising
					   Money</a></li>
					  <li><a itemprop="url" href="#pro_list_policy28"  class="poli-descpt" >Prescription Drugs and Devices</a></li>
					  <li><a itemprop="url" href="#pro_list_policy29"  class="poli-descpt" >Real Estate</a></li>
					  <li><a itemprop="url" href="#pro_list_policy30"  class="poli-descpt" >Refurbished Products</a></li>
					  <li><a itemprop="url" href="#pro_list_policy31"  class="poli-descpt" >Replica and Counterfeit Items</a></li>
					  <li><a itemprop="url" href="#pro_list_policy32"  class="poli-descpt" >Circumvention Devices and Hacking Equipment</a></li>
					  <li><a itemprop="url" href="#pro_list_policy33"  class="poli-descpt" >Software</a></li>
					  <li><a itemprop="url" href="#pro_list_policy34"  class="poli-descpt" >Spy Equipment</a></li>
					  <li><a itemprop="url" href="#pro_list_policy35"  class="poli-descpt" >Stocks and Other Securities</a></li>
					  <li><a itemprop="url" href="#pro_list_policy36" style="">Stolen Property</a></li>
					  <li><a itemprop="url" href="#pro_list_policy37"  class="poli-descpt" >Textile Quota</a></li>
					  <li><a itemprop="url" href="#pro_list_policy38"  class="poli-descpt" >Transit Related Items</a></li>
					  <li><a itemprop="url" href="#pro_list_policy39"  class="poli-descpt" >Unauthorized Copies of Intellectual Property</a></li>
					  <li><a itemprop="url" href="#pro_list_policy40"  class="poli-descpt" >Used Clothing and Cosmetics</a></li>
					  <li><a itemprop="url" href="#pro_list_policy41"  class="poli-descpt" >Veterinary Products and Drugs for Animals</a></li>
					  <li><a itemprop="url" href="#pro_list_policy42"  class="poli-descpt" >Wildlife and Animal Products</a></li>
					  <li><a itemprop="url" href="#pro_list_policy43"  class="poli-descpt" >Sanctioned and Prohibited Items</a></li>
					</ol>

				</div>
				<div class="col-sm-12" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">Top</a></p>
				</div>
				<div class="col-sm-12" id="pro_list_policy1" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">1. GENERAL PROHIBITIONS: </a></p>
					<p  class="poli-descpt" >1.1 You may not post or offer anything that is limited or disallowed by a government, state or nearby law in any nation or ward. It would be ideal if you know that the www. BuyerSeller.Asia site capacities as a worldwide commercial center, along these lines the offering or posting of things might be precluded on account of laws outside of the purview where you dwell. Beneath, we have recorded a few classes of denied or limited things. In any case, this rundown is not thorough; you, as the vender, are in charge of guaranteeing that you are not posting a thing that is precluded by law in any purview. </p>
					<p  class="poli-descpt" >1.2.  BuyerSeller.Asia has decided to additionally deny the posting of different classifications of things which may not be confined or restricted by law but rather are in any case disputable including: </p>
					<p  class="poli-descpt" >(a) Items that empower unlawful exercises; </p> 
					<p  class="poli-descpt" >(b) Items that are racially, religiously or ethnically harsh, or that advance scorn, roughness, racial or religious bigotry; </p>
					<p  class="poli-descpt" >(c) Giveaways, lotteries, pools, or challenges; </p>
					<p  class="poli-descpt" >(d) Stocks, bonds, venture intrigues, and different securities; </p>
					<p  class="poli-descpt" >(e) Pornographic materials or things that are sexual in nature; </p>
					<p  class="poli-descpt" >(f) Items that don't offer an item or administration available to be purchased, for example, ads exclusively with the end goal of gathering client data. </p>
					<p  class="poli-descpt" >1.3.  BuyerSeller.Asia, in its sole and elite watchfulness, maintains all authority to force extra limitations and denials. </p>
				</div>
				<div class="col-sm-12" id="pro_list_policy2" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">2. Artifacts</a></p>
					<p  class="poli-descpt" >2.1 Artifacts, social relics, authentic grave markers, and related things are ensured under the laws of the PRC, the United States, and different wards and may not be posted or sold through the Site. </p>
					<p  class="poli-descpt" >2.2 The exchange of social relics (counting individual gathering relics), gold, silver, different valuable metals, uncommon creatures and their items from the PRC to outside (non-PRC) gatherings is entirely disallowed under PRC law and is in like manner restricted on the Site. </p>
				</div>
				<div class="col-sm-12" id="pro_list_policy3" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">3. Currency And Stamps </a></p>
					<p  class="poli-descpt" >3.1 BuyerSeller.Asia entirely denies the deal and buy of cash, coins, monetary certificates, securities, cash orders, money in computerized or any impalpable structure (e.g. crypto-coin) and different securities, and in addition the hardware used to deliver such things. </p>
					<p  class="poli-descpt" >3.2 Counterfeits of the distinguished articles in 3.1, legitimate tenders and stamps are entirely precluded. </p>
					<p  class="poli-descpt" >3.3 Reproductions or imitations of mint pieces as collectible things must be obviously set apart with "Duplicate", "Proliferation" or "Copy" and consent to all important neighborhood laws. </p>
				</div>
				<div class="col-sm-12" id="pro_list_policy4" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">4. Crude Oil</a></p>
					<p  class="poli-descpt" >4.1 The posting or offer of unrefined petroleum by merchants and purchasers situated in Bangladesh is precluded on the Site. </p>
					<p  class="poli-descpt" >4.2 The posting or offer of petroleum, petroleum items and petrochemical items beginning in the Islamic Republic of Iran is entirely illegal on the Site. </p>
				</div>
				
				<div class="col-sm-12" id="pro_list_policy5" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">5. Contracts And Tickets </a></p>
					<p  class="poli-descpt" >5.1 You are in charge of guaranteeing that your exchange is legitimate and not infringing upon any contractual commitment. Before posting a thing on the Site, you ought to painstakingly read any agreements that you have gone into that may constrain your entitlement to offer your thing on the Site. A few things, for example, carrier tickets, have terms imprinted on the thing that might confine your capacity to offer that thing. In different cases, for example, when you are circulating an organization's items, you might have marked a different contract limiting your capacity to showcase the item. </p>
					<p  class="poli-descpt" >5.2  BuyerSeller.Asia does not look for things that might raise these sorts of issues, nor would it be able to audit duplicates of private contracts, or arbitrate or take sides in private contract debate. In any case, we need you to know that posting things infringing upon your contractual commitments could put you at danger with outsiders.  BuyerSeller.Asia hence encourages that you not list anything until you have audited any important contracts or assentions, and are certain you can lawfully offer it on the Site.</p>
					<p  class="poli-descpt" >5.3 If you have any inquiries in regards to your rights under an agreement or assention, we firmly suggest that you contact the organization with whom you went into the agreement and/or counsel with a lawyer. </p>
				</div>
				<div class="col-sm-12" id="pro_list_policy6" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">6. Credit Cards</a></p>
					<p  class="poli-descpt" >6.1 Credit or platinum cards can't legitimately be exchanged starting with one individual, then onto the next, and in this way such things may not be recorded on the Site. </p>
					
				</div>
				<div class="col-sm-12" id="pro_list_policy7" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">7. Drugs and Associated Paraphernalia</a></p>
					<p  class="poli-descpt" >7.1 The posting or offer of opiates, steroids, poppy seeds, poppy seed items or other controlled substances (counting all medications recorded in Schedules I, II, III, IV or V of the Uniform Controlled Substances Act, 21 U.S.C. 801 et seq.) is entirely taboo on the Site. </p>
					<p  class="poli-descpt" >7.2 The posting or offer of medication stuff, including all things that are essentially proposed or intended for use in assembling, disguising, or utilizing a controlled substance is entirely prohibited on the Site. Such things incorporate, yet are not restricted to those things utilized for the ingestion of unlawful substances, including pipes, for example, water funnels, carburetor channels, chamber funnels, ice channels, bongs, and so on. </p>
				</div>
				<div class="col-sm-12" id="pro_list_policy8" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">8. Ethnically or Racially Offensive Material</a></p>
					<p  class="poli-descpt" >8.1 Postings that are ethnically or racially hostile are disallowed on the Site. Merchants and buyers must guarantee that any wording utilized depicts fitting affectability to the individuals who may read it in their postings, and when they are putting forth or buying possibly hostile things or administrations. </p>
					<p  class="poli-descpt" >8.2 Occasionally, if the materials are of authentic quality or vital to the thing, (for example, a book title), individuals might utilize hostile words and expressions in the subject and depiction of a posting.  BuyerSeller.Asia urges all individuals to regard others as they themselves might want to be dealt with. </p>
					<p  class="poli-descpt" >8.3  BuyerSeller.Asia for the most part precludes such materials advancing Nazism, the KKK, and so on. </p>
				</div>
				<div class="col-sm-12" id="pro_list_policy9" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">9. Event Ticket Resale Policy</a></p>
					<p  class="poli-descpt" >9.1  BuyerSeller.Asia permits the posting of tickets to execution, donning and stimulation occasions to the degree allowed by law. In any case, as a ticket merchant, you are in charge of guaranteeing that your specific exchange does not abuse any appropriate law or the terms on the ticket itself. </p>
					
				</div>
				<div class="col-sm-12" id="pro_list_policy10" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">10. Faces, Names and Signatures </a></p>
					<p  class="poli-descpt" >10.1 Items containing the resemblance, picture, name, or mark of someone else are disallowed, unless the items were made or approved by the individual whose similarity, picture, name or mark has been utilized. </p>
					
				</div>
				<div class="col-sm-12" id="pro_list_policy11" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">11. Financial Services </a></p>
					<p  class="poli-descpt" >11.1  BuyerSeller.Asia precludes postings that offer monetary administrations, including cash exchanges, issuing bank ensures and letters of credit, advances, raising support and financing for individual speculation purposes, and so on. </p>
					
				</div>
				<div class="col-sm-12" id="pro_list_policy12" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">12. Firearms, Ammunition, Weapons, Explosives </a></p>
					<p  class="poli-descpt" >12.1 The posting of, offering available to be purchased, or offering to buy of any arms, ammo, military arms, weapons (counting dangerous weapons), and/or any related parts or adornments is entirely precluded. Such movement can bring about your record being delisted. </p>
					<p  class="poli-descpt" >12.2  BuyerSeller.Asia does not allow the posting, offering available to be purchased, or offering of procurement of compressed air firearms, BB weapons, paintball weapons, immobilizers, spears, lance weapons, or whatever other weapons that might release a shot containing any gas, chemicals, or dangerous substances. Reproduction, "resemble the other alike", and impersonation results of the above things in specific situations will be allowed just upon the express endorsement of  BuyerSeller.Asia. </p>
					<p  class="poli-descpt" >12.3 Any overhauling, guideline, handling, or help of delivering any natural, concoction, or atomic weapons, or whatever other Weapons of Mass Destruction (WMD) or its known related operators is entirely disallowed by global law and is as needs be denied on the Site. Any infringement of this strategy will bring about the notice of government powers by  BuyerSeller.Asia and your record being delisted. </p>
					<p  class="poli-descpt" >12.4 Knives and other cutting instruments will much of the time be allowed to be recorded. Switchblade blades, gravity knives, knuckledusters (bladed or not), bladed handled gadgets, and camouflaged blades are not allowed to be recorded.  BuyerSeller.Asia keeps up circumspection over what things are fitting and might bring about the evacuation of a posting that it considers as a weapon. </p>
				</div>
				<div class="col-sm-12" id="pro_list_policy13" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">13. Foods </a></p>
					<p  class="poli-descpt" >13.1 The posting or offering of sexual improvement and related foods or supplements is denied on the Site. </p>
					
				</div>
				<div class="col-sm-12" id="pro_list_policy14" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">14. Tobacco Products</a></p>
					<p  class="poli-descpt" >14.1 The posting of tobacco items, including yet not restricted to stogies, cigarettes, cigarette tobacco, channel tobacco, hookah tobacco, biting tobacco and tobacco leaf is taboo on the Site. </p>
					<p  class="poli-descpt" >14.2 The posting of nicotine and fluids for use in electronic cigarettes is prohibited on the Site. </p>
				</div>
				<div class="col-sm-12" id="pro_list_policy15" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">15. Gold, Silver and Other Precious Metals </a></p>
					<p  class="poli-descpt" > BuyerSeller.Asia does not allow postings that offer the deal or purchasing of gold, silver and different valuable metals (excluding gems). </p>
				
				</div>
				<div class="col-sm-12" id="pro_list_policy16" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">16. Government-Issued IDs, Licenses and Uniforms </a></p>
					<p  class="poli-descpt" >16.1 The accompanying things may not be recorded on the Site: </p>
					<p style="padding-left: 14px;font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-top:10px;">(a) Items that claim to be, or seem like, authority officially sanctioned recognizable proof archives or licenses, for example, conception authentications, drivers licenses, visas or travel papers. Besides, finished applications for such archives containing individual data may not be recorded. </p>
					<p  class="poli-descpt" >(b) Fake distinguishing proof cards or any things that are intended for the production of such cards. </p>
					<p  class="poli-descpt" >(c) Articles of apparel or distinguishing proof that claim to be, or seem like, authority government garbs. </p>
					<p  class="poli-descpt" >(d) Military adornments, decorations and recompenses, notwithstanding the things with generously comparative outlines. </p>
				</div>
				<div class="col-sm-12" id="pro_list_policy17" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">17. Hazardous Materials </a></p>
					<p  class="poli-descpt" >17.1 The posting, offering available to be purchased, or offering for buy of perilous or unsafe materials, (for example, the classes of risky products as characterized under the International Maritime Dangerous Goods Code) is prohibited on the Site. </p>
					<p  class="poli-descpt" >17.2 The posting of any items containing unsafe substances (e.g. toys containing lead paint) are illegal on the Site. </p>
					<p  class="poli-descpt" >17.3 Automotive airbags are explicitly taboo on the site because of containing touchy materials. </p>
					<p  class="poli-descpt" >17.4 Asbestos materials and/or items containing asbestos are restricted. </p>
				</div>
				<div class="col-sm-12" id="pro_list_policy18" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">18. Human Parts and Remains </a></p>
					<p  class="poli-descpt" >18.1  BuyerSeller.Asia restricts the posting of any people, the human body, or any human body part. Cases of such restricted things incorporate, yet are not constrained to: organs, bone, blood, sperm, and eggs. </p>
					<p  class="poli-descpt" >18.2 Skulls and skeletons that are utilized for therapeutic or instructive purposes might be recorded on the Site. </p>
					<p  class="poli-descpt" >18.3 Items made of human hair, for example, wigs for business uses, are allowed.</p>
				</div>
				<div class="col-sm-12" id="pro_list_policy19" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">19. Invoices </a></p>
					<p  class="poli-descpt" >19.1 The posting or offering of any type of receipts or revenue (counting clear, pre-filled, or esteem included receipts or receipts), is entirely precluded on the Site. </p>
					
				</div>
				<div class="col-sm-12" id="pro_list_policy20" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">20. Job Postings </a></p>
					<p  class="poli-descpt" >20.1 Job postings from which a plant/organization/foundation might straightforwardly select workers are restricted on the Site. </p>
					
				</div>
				<div class="col-sm-12" id="pro_list_policy21" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">21. Mailing Lists and Personal Information </a></p>
					<p  class="poli-descpt" >21.1 The posting or offer of mass email or mailing records that contain by and by identifiable data, including names, addresses, telephone numbers, fax numbers and email locations, is entirely restricted. Likewise restricted are programming or different instruments which are composed or used to send spontaneous business email  </p>
					
				</div>
				<div class="col-sm-12" id="pro_list_policy22" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">22. Medical and Healthcare Service</a></p>
					<p  class="poli-descpt" >22.1 BuyerSeller.Asia forbids postings that offer restorative or social insurance administrations, including administrations for medicinal treatment, recovery, immunization, healthcheck, mental directing, dietetics, plastic surgery, rub, and so forth. </p>
					
				</div>
				<div class="col-sm-12" id="pro_list_policy23" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">23. Non-business Information </a></p>
					<p  class="poli-descpt" >23.1 BuyerSeller.Asia is an online business to business data stage; individual and non-business data is precluded. </p>
					
				</div>
				<div class="col-sm-12" id="pro_list_policy24" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">24. Non-transferable Items </a></p>
					<p  class="poli-descpt" >24.1 Non-transferable things may not be posted or sold through the Site. Numerous things, including lottery tickets, aircraft tickets and some occasion tickets may not be exchanged or exchanged. </p>
					
				</div>
				<div class="col-sm-12" id="pro_list_policy25" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">25. Police-Related Items </a></p>
					<p  class="poli-descpt" >25.1 The posting of law implementation identifications or authority law requirement hardware from any open power, including identifications issued by the administration of any nation, is entirely precluded. </p>
					<p  class="poli-descpt" >25.2 There are some constrained police things that might be recorded on our site, if they watch any prominent rules: </p>
					<p style="padding-left: 14px;font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-top:10px;">(a) Authorized general trinket things, for example, caps, mugs, pins, pens, catches, sleeve fasteners, T-shirts, cash cuts that don't take after identifications, and paperweights that don't contain identifications. </p>
					<p  class="poli-descpt" >(b) Badges that are plainly not certified or official (e.g. toy identifications). </p>
					<p  class="poli-descpt" >(c) Historical identifications that don't take after present day law implementation identifications, gave that the thing depiction unmistakably expresses that the identification is a recorded piece no less than 75 years of age or issued by an association which no more exists. </p>
					<p style="padding-left: 14px;font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-top:10px;">25.3 Police garbs might be posted given that they are out of date and not the slightest bit takes after current issue police outfits. This must be plainly expressed inside of the posting portrayal. </p>
				</div>
				<div class="col-sm-12" id="pro_list_policy26" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">26. Pornographic Materials and Adult Products </a></p>
					<p  class="poli-descpt" >26.1 The posting or offer of obscene materials is entirely denied, as it damages laws in numerous nations. While obscenity is hard to characterize and benchmarks differ from country to country,  BuyerSeller.Asia will for the most part take after rules acknowledged in Hong Kong and the PRC. </p>
					<p  class="poli-descpt" >26.2  BuyerSeller.Asia entirely denies things portraying abuse of minors, brutishness, assault sex, inbreeding or sex with realistic brutality or debasement. </p>
					<p  class="poli-descpt" >26.3 In figuring out if postings or data ought to be expelled from the site, we consider the general substance of the posting, including photographs, pictorials, and content. </p>
					<p  class="poli-descpt" >26.4  BuyerSeller.Asia does not allow the offer of SM. Curiosity sexually express things, including different sorts of toys, collectibles, or nourishment things fit as a fiddle of genitalia and principally proposed for grown-up purchasers are allowed in the proper class. </p>
				</div>
				<div class="col-sm-12" id="pro_list_policy27" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">27. Posting an Advertisement for the Sole Purpose of Collecting User Information or Raising Money </a></p>
					<p  class="poli-descpt" >27.1  BuyerSeller.Asia is the perfect site for business to business exchanges. Trustworthiness and high moral gauges is the thing that we speak to. Postings on this site ought to plainly speak to the thing being sold. In the event that your goal is else, we ask that you search out different sites to bear on the business action you look to perform. </p>
					
				</div>

				<div class="col-sm-12" id="pro_list_policy28" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">28. Prescription Drugs and Devices </a></p>
					<p  class="poli-descpt" >28.1 BuyerSeller.Asia does not allow the posting of physician endorsed drugs. On the off chance that you are questionable in the matter of whether your thing is allowed, please contact  BuyerSeller.Asia before posting. </p>
					<p  class="poli-descpt" >28.1 BuyerSeller.Asia does not allow the posting of physician endorsed drugs. On the off chance that you are questionable in the matter of whether your thing is allowed, please contact  BuyerSeller.Asia before posting. </p>
					<p  class="poli-descpt" >28.1 BuyerSeller.Asia does not allow the posting of physician endorsed drugs. On the off chance that you are questionable in the matter of whether your thing is allowed, please contact  BuyerSeller.Asia before posting. </p>
					<p  class="poli-descpt" >28.4  BuyerSeller.Asia additionally does not allow the posting of unapproved medicinal gadgets. </p>
				</div>
				

				<div class="col-sm-12" id="pro_list_policy29" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">29.Real Estate</a></p>
					<p  class="poli-descpt" >29.1 A land presenting permits purchasers to contact the merchant to get more data and express enthusiasm about the property recorded. Before you present a posting is relating at a bargain or buying land, you should guarantee that you have consented to every single relevant law and regulations </p>
				
				</div>
				

				<div class="col-sm-12" id="pro_list_policy30" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">30. Refurbished Products</a></p>
					<p  class="poli-descpt" >30.1 The deal and buying of revamped cellular telephones, portable PCs and PCs is disallowed on the Site. </p>
					
				</div>
				

				<div class="col-sm-12" id="pro_list_policy31" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">31. Replica and Counterfeit Items</a></p>
					<p  class="poli-descpt" >31.1 Listing of fakes, non-authorized copies, or unapproved things, for example, a fake originator piece of clothing, watches, purses, shades, or different embellishments, is entirely disallowed on the Site. </p>
					<p  class="poli-descpt" >31.2 If the items sold bear the name or logo of an organization, yet did not begin from or were not embraced by that organization, such items are disallowed from the Site. </p>
					<p  class="poli-descpt" >31.3 Postings of extravagance brand items are allowed if an endorsement of approval has been issued by the extravagance brand proprietor. </p>
					<p  class="poli-descpt" >31.4 Postings offering to offer or buy reproductions, fakes or other unapproved things should be liable to evacuation by  BuyerSeller.Asia. Rehashed postings of fake or unapproved things might bring about the quick suspension of your participation. </p>
					<p style="padding-left: 14px;font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-top:10px;">31.4 Postings offering to offer or buy reproductions, fakes or other unapproved things should be liable to evacuation by  BuyerSeller.Asia. Rehashed postings of fake or unapproved things might bring about the quick suspension of your participation. </p>
				</div>
				

				<div class="col-sm-12" id="pro_list_policy32" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">32. Circumvention Devices and Hacking Equipment </a></p>
					<p  class="poli-descpt" >32.1 Descramblers or different things that can be utilized to increase unapproved access to TV programming, (for example, satellite and digital TV), web access, phone, information or other insured, limited, or premium administrations are restricted. Expressing the thing is for instructive or test purposes won't legitimize an item that is generally unseemly. A few samples of things which are not allowed incorporate brilliant cards and card developers, descramblers, DSS emulators and hacking programgs. </p>
					<p  class="poli-descpt" >32.2 Similarly, data "on the most proficient method to" descramble or access link or satellite TV programming or different administrations without approval or installment is denied.  BuyerSeller.Asia's approach is to restrict any consolation of this sort of action. </p>
					<p  class="poli-descpt" >32.3 Devices intended to deliberately piece, stick or meddle with approved radio interchanges, for example, cell and individual correspondence administrations, police radar, worldwide situating frameworks (GPS) and remote systems administration administrations (Wi-Fi) are disallowed. </p>
				</div>
				

				<div class="col-sm-12" id="pro_list_policy33" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">33. Software </a></p>
					<p  class="poli-descpt" >33.1 Academic Software </p>
					<p style="padding-left: 14px;font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-top:10px;">(a) Academic programming is programming sold at marked down costs to understudies, instructors, and representatives of licensed learning organizations. </p>
					<p  class="poli-descpt" >(b) On the Site, kindly don't list any scholastic programming unless you are so approved. Postings disregarding  BuyerSeller.Asia's scholarly programming strategy might be erased before production. </p>
					<p  class="poli-descpt" >(c) For postings of scholastic programming for the benefit of an approved instructive affiliate or an instructive establishment, such licensure must be expressed obviously in the postings, including offering leads, Products and organizations. A testament of approval issued by the approved instructive affiliate (or the instructive establishment) additionally should be given to  BuyerSeller.Asia. </p>
					<p style="padding-left: 14px;font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-top:10px;">33.2 OEM Software </p>
					<p style="padding-left: 14px;font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-top:10px;">(a) Do not list "OEM" or "packaged" duplicates of programming on the Site unless you are offering it with PC equipment. Unique Equipment Manufacturer (OEM), or packaged programming, is programming that is acquired as a feature of the buy of another PC. OEM programming licenses as a rule preclude the buyer from exchanging the product without the PC or, at times, with no PC equipment. </p>

				</div>
				

				<div class="col-sm-12" id="pro_list_policy34" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">34. Spy Equipment </a></p>
					<p  class="poli-descpt" >34.1 The posting or offer of spy hardware is not allowed on the Site. </p>
					<p  class="poli-descpt" >34.2 The posting of gadgets utilized for the capture attempt of wire, oral, and electronic interchanges is precluded. </p>
					<p  class="poli-descpt" >34.3 Hidden photographic gadgets are allowed, unless used to encourage the surreptitious review or recording of people for sexual purposes. </p>
				</div>
				

				<div class="col-sm-12" id="pro_list_policy35" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">35. Stocks and Other Securities </a></p>
					<p  class="poli-descpt" >35.1  BuyerSeller.Asia does not allow the posting or offer of stocks, bonds, credit, speculation intrigues, or different securities. </p>
					
				</div>
				

				<div class="col-sm-12" id="pro_list_policy36" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">36. Stolen Property </a></p>
					<p  class="poli-descpt" >36.1 The posting or offer of stolen property is entirely illegal on the Site, and disregards universal law. Stolen property incorporates things taken from private people, and in addition property taken without approval from organizations or governments. </p>
					<p  class="poli-descpt" >36.2  BuyerSeller.Asia bolsters and coordinates with law implementation endeavors, including the recuperation of stolen property and the arraignment of capable people. In the event that you are worried that the pictures and/or content in your thing depiction have been utilized by another Site client without your approval, or that your licensed innovation rights have been disregarded by such client, please contact our administration group at www. BuyerSeller.Asia.</p>
				</div>
				

				<div class="col-sm-12" id="pro_list_policy37" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">37. Textile Quota</a></p>
					<p  class="poli-descpt" >37.1 The offering available to be purchased or buy of material share is disallowed on the Site </p>
					
				</div>
				

				<div class="col-sm-12" id="pro_list_policy38" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">38. Transit Related Items </a></p>
					<p  class="poli-descpt" >38.1 The accompanying things identified with the business aircraft and open transportation, commercial ventures may not be recorded on the Site: </p>
					<p style="padding-left: 14px;font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-top:10px;">(a) Any vestment or distinguishing proof identified by transportation businesses, including yet not constrained to, business carrier pilot's outfits, flight orderly's garbs, airplane terminal administration work force regalia, regalia identified with railroad commercial ventures, and garbs of security faculty of open transport commercial enterprises. Vintage garments identified with business aircrafts or other open transport might be recorded on the Site gave that the thing depiction obviously expresses that the thing is no less than 10 years of age, is no more being used by the carrier or other open transport power and does not look like any present uniform. </p>
					<p  class="poli-descpt" >(b) Manuals or different materials identified with mass business open transportation, including security manuals distributed by business aircrafts or substances working trams, prepares or transports. Such things might just be recorded if the portrayal plainly expresses that the material is out of date and no more being used by the carrier or other travel power. </p>
					<p  class="poli-descpt" >(c) Any official, inside, or non-open archives. </p>
				</div>
				

				<div class="col-sm-12" id="pro_list_policy39" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">39. Unauthorized Copies of Intellectual Property </a></p>
					<p  class="poli-descpt" >39.1 The posting or offer of unapproved (pilfered, copied, reinforcement, contraband, and so forth.) duplicates of programming projects, computer games, music collections, films, TV projects, photos or other ensured works is prohibited on the Site. </p>
					
				</div>
				

				<div class="col-sm-12" id="pro_list_policy40" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">40. Used Clothing and Cosmetics </a></p>
					<p  class="poli-descpt" >40.1 Used underpants may not be recorded or sold on the Site. Other utilized garments might be recorded, inasmuch as the attire has been altogether cleaned. Postings that contain improper or unessential portrayals will be evacuated. </p>
					<p  class="poli-descpt" >40.2 The posting or offer of utilizing beauty care products is denied on the Site. </p>
				</div>
				

				<div class="col-sm-12" id="pro_list_policy41" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">41. Veterinary Products and Drugs for Animals </a></p>
					<p  class="poli-descpt" >41.1 Prescription veterinary items and medications may not be recorded on the Site. </p>
					
				</div>
				

				<div class="col-sm-12" id="pro_list_policy42" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">42. Wildlife and Animal Products</a></p>
					<p  class="poli-descpt" >42.1 The posting or offer of any creature (containing any creature parts which might incorporate pelts, skins, inward organs, teeth, hooks, shells, bones, tusks, ivory and different parts) secured by the Convention on International Trade in Endangered Species of Wild Fauna and Flora (CITES) or some other nearby law or regulation is entirely prohibited on the Site. </p>
					<p  class="poli-descpt" >42.2 The posting or offer of items made with any part of and/or containing any fixing got from sharks or marine vertebrates is restricted on the Site. </p>
					<p  class="poli-descpt" >42.3 The posting or offer of items produced using felines or puppies, including pelts, skins, hide, meat, is restricted on the Site. </p>
					<p  class="poli-descpt" >42.4 The posting or offer of poultry, domesticated animals and pets for business intentions is allowed on the Site. </p>
				</div>
				
				<div class="col-sm-12" id="pro_list_policy43" style="margin-top:2%;">
					<p><a itemprop="url" href="#" style="font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-left: 14px;color: #06C;">43. Sanctioned and Prohibited Items</a></p>
					<p  class="poli-descpt" >43.1 Products disallowed by laws, regulations, endorses and exchange confinements in any applicable nation or ward worldwide are entirely illegal on the Site. </p>
					<p style="padding-left: 14px;font-size: 14px;padding-right:20%;line-height: 24px;word-spacing: 1.7px;letter-spacing: normal;padding-top:10px;">NOTICE: This rundown ought not be viewed as thorough in nature and should be redesigned on a ceaseless premise. In the event that you are uncertain about the item you wish to list with the Site as to its fittingness or lawfulness, please contact our client administrations division at http://www. BuyerSeller.Asia/contact-us.</p>
				</div>		

		</div>		
</div>

   @stop