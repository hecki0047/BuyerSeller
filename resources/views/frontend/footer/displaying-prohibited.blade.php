@extends('fontend.master_dynamic')
@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/media-room-style.css',is_secured()) !!}" rel="stylesheet">
    @endsection
  @section('content')
  <div class="row">
  			<div class="col-sm-12 col-md-12 col-lg-12">
  					<ul class="top-path" itemscope itemtype="http://schema.org/BreadcrumbList">
		              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
		              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('bdtdc_policies_rules'),is_secured()}}" class="top-path-li-a"><span itemprop="name">Rules Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
		              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('displaying-prohibited'),is_secured()}}" class="top-path-li-a"><span itemprop="name">Enforcement Actions for Displaying Prohibited</span></a></li>
		              
		            </ul>
  					
  			</div>
  	
  </div>
@include('fontend.footerpage.rules_sidebar')


	      <div class="col-sm-9 padding_0" style="padding-left:6%;">
	           	<div class="col-sm-12 padding_0">
	            	<div style="display: block; width: 100%; padding-top: 20px;">		            <div class="col-xs-10 col-md-10 padding_0">

						<i class="fa fa-search" style="font-size: 20px; color: #999; position: absolute;top:40%; left: 20px;">
						</i><input style="height:44px;border-radius: 5px!important; padding-left: 10%;" name="key" 
						class="form-control" type="text" placeholder="What are you looking for. . ." required="required">
					</div>
		               <div class="col-md-2 col-sm-2 col-xs-2 padding_0">
						<input type="submit" style="background:#19446F;border-radius:0 5px 5px 0 !important; position: absolute;top: 0px;" class="btn btn-primary btn-lg pull-left" value="Search">
						</div>
					</div>

	            </div>
	            <div class="col-sm-12 padding_0">
	            	<div>
	                  <h3 class="supplement-head-dis" style="padding-top: 0; margin-top:8%; margin-bottom: 5%;">Authorization Actions for Displaying Prohibited and Controlled Items  </h3>
	                  
	                  <p class="supp-p">BuyerSeller.Asia regards everybody's protected innovation rights and expects clients of our site to respect the same. So as to keep up and secure BuyerSeller.Asia as a dependable stage in the e-business industry, authorization activities, for example, issuing genuine cautioning, constraining get to right, delisting every single online thing, ending Membership, and so forth will be taken against gatherings who show things which are disregarding our strategies, including item posting related arrangements. </p>
	                  <p style="width: 100%; padding-right: 35px; line-height: 24px; font-size: 13px; padding-bottom: 15px;">For Members who show precluded or controlled things, implementation moves will be made against them as take after: </p>
	                  </div>   		
	              
	                <div>
	                  		<h3 class="supplement-head-dis">1) Firearms, Police Equipment, Offensive Weapons and Offensive Materials  </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>Guns, weapons, military arms and substantial weapons 
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Serious encroachment Issue of 48 punishment focuses and quick record conclusion  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>Guns, weapons, military arms and overwhelming weapon-related parts or accessories 
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">c.</span>Copy guns (eg. Compressed air firearms, beginning guns, BB weapons, paintball weapons), gun embellishments, spears and lance guns
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">d.</span>Directed weapons that can quickly debilitate or cause genuine physical mischief to others (eg. paralyze guns)	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">e.</span>Blades, twirly doos, darts, rockets and whatever other managed thing that can be utilized to bring about genuine physical damage to others
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">f.</span>Religiously or racially hostile items or data (e.g. Nazi memorabilia)
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">f.</span>Religiously or racially hostile items or data (e.g. Nazi memorabilia)
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">g.</span>Police garbs, police badge and police vehicles	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">h.</span>Limited police gear (appropriate to PRC-based individuals only)	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 0.5 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">i.</span>Confined crossbows	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 0.5 punishment focuses per encroachment </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">2) Illicit Drugs, Precursors and Drug Paraphernalia   </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>Opiates, sedatives, psychotropic medications, normal medications, engineered medications, and List 1 antecedent chemicals	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Serious encroachment Issue of 48 punishment focuses and quick record conclusion </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>List 2 forerunner chemicals and steroids 
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">c.</span>List 3 forerunner chemicals	
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment    </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">d.</span>Drug gear (eg. bongs, ice pipes)
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">e.</span>Materials helpful for sneaking, putting away, trafficking, transporting and producing illegal medications (eg. maryjane develop lights)	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 1 punishment point for each encroachment    </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">f.</span>Distributions and other media giving data identified with the creation of unlawful drugs	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 1 punishment point for every encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">3) Flammable, Explosive and Hazardous Chemicals   </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>Explosives
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Serious encroachment Issue of 48 punishment focuses and quick record conclusion  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>Unstable and combustible chemicals
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">c.</span>Poisonous chemicals
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment    </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">d.</span>Radioactive substances	
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment    </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">e.</span>Noxious chemicals
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">f.</span>Asbestos and items containing asbestos	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 1 punishment point for every encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">g.</span>Ozone exhausting substances	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 1 punishment point for each encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">h.</span>Confined detonators
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 0.5 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">h.</span>Limited firecrackers and sparklers (material to PRC-based individuals only)
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 0.5 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">4) Information Detrimental to National Security  </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>Distributions and other media containing state mysteries or data unfavorable to national security or open order
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Serious encroachment Issue of 48 punishment focuses and prompt record conclusion   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>Data in backing of terrorist associations or racial discrimination
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">5) Obscene or Adult Materials   </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>Vulgar distributions and media, grown-up administrations, and records and welcome codes for grown-up websites
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Serious encroachment Issue of 48 punishment focuses and quick record conclusion   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>Tyke erotica and related products
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Serious encroachment Issue of 48 punishment focuses and prompt record conclusion    </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">c.</span>Pictures portraying unequivocal bareness and express disgusting materials
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">d.</span>Sadomasochism products
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 0.5 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">e.</span>Utilized underwear
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 0.5 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">f.</span>Data containing indecent or foul language	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 0.5 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">6) Products Related to Personal Safety and Privacy    </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>Character records (eg. driving licenses, international IDs, visas)
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Serious encroachment Issue of 48 punishment focuses and quick record conclusion   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>Bank cards Serious infringement
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Serious encroachment Issue of 48 punishment focuses and quick record conclusion    </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">c.</span>Programming and gadgets for pestering or robbery of private or secret information
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">d.</span>Gadgets utilized for purposes, for example, unlawful picture recording, sound recording and proof collection
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">e.</span>Programming, devices, aides and items, helpful for record secret key robbery or cracking
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment    </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">f.</span>Individual data, restrictive business information, and administrations that encroach on individual security (e.g. individual telephone finding, telephone list checking and financial balance checking services)	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">f.</span>Bank card replicators
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">7) Medicines and Medical Devices     </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>Professionally prescribed drugs
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>Restorative directing and medicinal services
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">c.</span>Orally controlled sexual upgrade supplements
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">d.</span>Harmful home grown medicines
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">e.</span>Confined over-the-counter drugs
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 0.5 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">f.</span>Limited restorative devices
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 0.5 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">g.</span>Limited orally directed weight reduction supplements (appropriate to PRC-based individuals only)
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 0.5 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">8) Illegal Services and Non-Transferable Items      </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>Receipts, training endorsements, military decorations and other non-transferable documents
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>Budgetary administrations, money related counseling, legitimate counseling, speculation administrations, protection administrations, bank administrations and whatever other administrations including illicit fundraising
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">c.</span>Lottery tickets
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">d.</span>Obligation gathering administrations and online networking "fan" benefits and limited visa administrations 
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 0.5 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>

	                  			
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">9) Human Parts, Human Remains and Protected Flora and Fauna    </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>Human bodies, body parts and remains
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Serious encroachment Issue of 48 punishment focuses and quick record conclusion    </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>Ensured creatures and body parts of secured creatures (eg. creature species ensured by CITES)	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">c.</span>Feline and puppy meat and hide, shark blades, bear bile and related products
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">d.</span>Ensured verdure and by-items (eg. plant species secured by CITES)	
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 1 punishment point for each encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			
	                  			
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">10) Software, Tools and Devised Used for Illegal Purposes  </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>Signal jammers
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment    </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>Vehicle robbery tools
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">c.</span>Programming for false or other unlawful practices
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">d.</span>Betting devices (eg. opening machines)
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">e.</span>Circumvention gadgets (eg. satellite and digital TV descramblers and related software)
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">f.</span>Items for going around activity controls (eg. tag covers)	
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 1 punishment point for each encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">g.</span>Exam tricking tools
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 1 punishment point for each encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			
	                  			
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">11) Tobacco Products and Liquids for Use in Electronic Cigarettes   </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>Tobacco (eg. channel tobacco, tobacco leaf)	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>Cigarettes, stogies and other tobacco products
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment    </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">c.</span>Fluids for use in electronic cigarettes
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 6 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">d.</span>Cigarette materials (relevant to PRC-based individuals only)
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 1 punishment point for each encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			
	                  			
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">12) Products Subject to Governmental Control   </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>Fake money, modified coin and gear used to create such items	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Serious encroachment Issue of 48 punishment focuses and prompt record conclusion </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>Coin as of now in circulation
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">c.</span>Valuable metals (eg. gold, silver, platinum)
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">d.</span>Cigarette materials (relevant to PRC-based individuals only)
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 1 punishment point for each encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			
	                  			
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">13) Others   </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>Items reviewed by the producer or the powers or items banned by the legislature because of value problems	
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>Items containing restricted substances (eg. wellness supplements containing DMAA)
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 2 punishment focuses per encroachment    </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">c.</span>Restricted varying media items (eg. Television arrangement, movies)
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 1 punishment point for each encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">d.</span>Confined varying media items (appropriate to PRC-based individuals only)
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>Issue of 0.5 punishment focuses per encroachment  </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			
	                  			
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">Enforcement activities  </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>Punishment focuses aggregately        
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>Incurred Enforcement actions       
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">c.</span>Remarks        
	           
	                  				<ul class="ul-des-under">
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>6 points, Issuance of extreme warning, Email notice   </li>
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>12 points,  Blocking of indexed lists and scaled down site for 7 days, Email warning and programmed implementation of punishment by framework   </li>
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>24 points, Blocking of indexed lists and scaled down site for 14 days, Email warning and programmed implementation of punishment by framework </li>
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>36 points, Blocking of indexed lists and scaled down site for 21 days, Email warning and programmed implementation of punishment by framework   </li>
	                  					<li><span style="font-size: 12px; font-weight: bold; color: #000;">• </span>48 points, Termination of membership,Not relevant   </li>
	                  				
	                  				</ul>
	                  			</li>
	                  			
	                  			
	                  			
	                  		</ul>
	                  </div>

	                  <div>
	                  		<h3 class="supplement-head-dis">Note:   </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">a.</span>a.	In the event of to a great degree genuine rebelliousness, BuyerSeller.Asia has the privilege to instantly end the understanding singularly and close the record without discounting administration charges for the remaining period, furthermore, has the privilege to report the same on BuyerSeller.Asia and/or other media, force related punishments and/or changeless refusal of collaboration and other required activities. 
	       
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">b.</span>b.	Where the total punishment purposes of a client achieve 24 focuses or above, BuyerSeller.Asia has the privilege to deny or limit such client's support in different advancements and promoting exercises on BuyerSeller.Asia or to utilize the items/administrations. 
	           
	                  				
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">c.</span>Points are in total figured on a yearly premise, which implies that all punishment focuses are on record for a 365-day period, aside from where the requirement activity of shutting the record has been forced. 
	                  				
	                  			</li>
	                  			
	                  			
	                  			
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">Comment:   </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">1) </span>A most extreme of 12 punishment focuses will be issued on a solitary day, aside from when 48 focuses are issued. 
	           
	                  				
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">2)</span>In genuine cases, 48 punishment focuses will be issued, with consequent record end. 
	           
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">3)</span>These rules don't list every single denied item and are interested in upgrading at BuyerSeller's circle 
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">4)</span>All punishment focuses might be on record for a 365-day period. 
	                  				<br>Upon the date of this declaration sent, please delist all (claimed and/or suspicious) Prohibited and/or Controlled things from our site under your profile. Beginning February 2011, any Prohibited and Controlled things found will lead us to take suitable implementation activities, including yet not constrained to get to confinement and Membership end. 
	                  				
	                  			</li>
	                  			
	                  			
	                  			
	                  		</ul>
	                  </div>
	                  <div>
	                  		<h3 class="supplement-head-dis">We thank you for your kind consideration </h3>
	                  		<ul class="ul-des">
	                  			<li>
	                  				<span class="ul-des-li-span">1.</span>Denied things: all things banned by the laws of Hong Kong and the People's Republic of China, and under worldwide laws, together with any things banned as per BuyerSeller.Asia's strategies.<br>
	                  				<a href="">（http://www.buyerseller.asia/help/safety_security/policies_rules/product_listing/003.html</a> 
	           
	                  				
	                  			</li>
	                  			<li>
	                  				<span class="ul-des-li-span">2.</span>Brand Authorization – any marked items can be produced or offered available to be purchased just if approvals are given by the applicable brand proprietors. <br>
	                  				Against individuals who keep on posting item postings disregarding any of our approaches, (for example, Product Listing Policy concerning denied and controlled things, and so on.) or the individuals who when over and over affirmed with protected innovation encroachment cases can't discredit those cases, BuyerSeller.Asia holds the privilege, at its own tact, to prohibit or refuse any of them to take an interest in Customized Sourcing on www.BuyerSeller.Asia.
	           
	                  			</li>
	                  			
	                  			
	                  			
	                  		</ul>
	                  </div>
	                  
	                  
	                
	            </div>
	            
	      
	</div>
</div>

   @stop