
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
		              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('terms_use',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Terms of use</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
              
           			 </ul>
  			</div>
  	
  </div>
@include('fontend.footerpage.rules_sidebar')



	      <div class="col-sm-9 padding_0" style="padding-left:6%;">         
	            <div class="col-sm-12" style="margin-top:20px;padding-bottom:2%;padding-left:12px;"> 			
	      			<h1 style="padding-top: 3%;font-size: 20px;font-weight: bold;text-align:center;">
	      				Term Of Use
	      			</h1>  
				</div>
				<div class="col-sm-12" style="margin-top:2%;">
					<p><h3 style="font-size: 14px;padding-right:20%;color: #666;">READ THESE TERMS AND CONDITIONS CAREFULLY! </h3></p>
					<p style="padding-top:20px;">Welcome to <a href="{{URL::to('/')}}" style="font-size: 14px;padding-right:20%;color: #06C;">www.BuyerSeller.Asia!</a></p>
					<p style="font-size: 14px;padding-right:20%;padding-top:20px;">
						These Terms of Use depict the terms and conditions relevant to your entrance and utilization of the sites
						 at <a itemprop="url" href="{{URL::to('/')}}" style="font-size: 14px;color: #06C;">www.BuyerSeller.Asia</a>. This record is a lawfully obligatory comply 
						 between you as the user(s) of the Sites (alluded to as "you", "your" or "Client" hereinafter) and the 
						 <a itemprop="url" href="{{URL::to('/')}}" style="font-size: 14px;color: #06C;">BuyerSeller.Asia</a> substance recorded in statement 2.1 underneath (alluded to as "we", "our" or "BuyerSeller.Asia" 
						 hereinafter). 
					</p>
				</div>
				<div class="col-sm-12" style="margin-top:2%;">
					<p><h3 style="font-size: 14px;padding-right:20%;color: #06C;">1. Application and Acceptance of the Terms</h3></p>
					<p style="font-size: 14px;padding-right:20%;">1.1 Your utilization of the Sites and BuyerSeller.Asia's administrations, programming and items (all things considered the as the "Administrations" hereinafter) is liable to the terms and conditions contained in this archive and also the Privacy Policy , the Product Listing Policy and whatever other guidelines and arrangements of the Sites that BuyerSeller.Asia might distribute every once in a while. This report and such different standards and arrangements of the Sites are by and large alluded to underneath as the "Terms". By getting to the Sites or utilizing the Services, you consent to acknowledge and be bound by the Terms. Kindly don't utilize the Services or the Sites on the off chance that you don't acknowledge the majority of the Terms. </p>
					<p style="font-size: 14px;padding-right:20%;">1.2 You may not utilize the Services and may not acknowledge the Terms if (a) you are not of lawful age to frame a coupling contract with BuyerSeller.Asia, or (b) you are not allowed to get any Services under the laws of Bangladesh or different nations/locales including the nation/district in which you are inhabitant or from which you utilize the Services. </p>
					<p style="font-size: 14px;padding-right:20%;">1.3 You recognize and concur that BuyerSeller.Asia might change any Terms whenever by posting the applicable corrected and restated Terms on the Sites. By keeping on utilizing the Services or the Sites, you concur that the changed Terms will apply to you. </p>
					<p style="font-size: 14px;padding-right:20%;">1.4 If BuyerSeller.Asia has posted or given an interpretation of the English dialect adaptation of the Terms, you concur that the interpretation is accommodated comfortably just and that the English dialect form will administer your employments of the Services or the Sites. </p>
					<p style="font-size: 14px;padding-right:20%;">1.5 You might be required to go into a different comply, whether online or disconnected from the net, with <a href="{{URL::to('/')}}" style="font-size: 14px;color: #06C;">BuyerSeller.Asia</a> or our offshoot for any Service ("Additional Agreements"). In the event that there is any contention or irregularity between the Terms and an Additional Agreement, the Additional Agreement might overshadow the Terms just in connection to that Service concerned. </p>
					<p style="font-size: 14px;padding-right:20%;">1.6 The Terms may not generally be changed aside from in composing by an approved officer of BuyerSeller.Asia. </p>
				</div>
				<div class="col-sm-12" style="margin-top:2%;">
					<p><h3 style="font-size: 14px;padding-right:20%;color: #06C;">2. Procurement of Services</h3></p>
					<p style="font-size: 14px;padding-right:20%;">2.1 The BuyerSeller.Asia contracting element that you are contracting with is BuyerSeller.Asia Bangladesh Limited on the off chance that you are an enrolled individual from the Sites and enlisted or inhabitant in Bangladesh or Dhaka. On the off chance that you enlisted in a purview outside Bangladesh, Dhaka and territory Bangladesh, you are contracting with <a itemprop="url" href="{{URL::to('/')}}" style="color: #06C;">BuyerSeller.Asia</a> Bangladesh E-Commerce Private Limited(consolidated in Bangladesh with Company Reg. No. 2016590392). On the off chance that you enlisted in or are an inhabitant of terrain Bangladesh, you are contracting with Hangzhou BuyerSeller.Asiaertising Co., Ltd. As a few or part of the Services might be upheld and gave by members of BuyerSeller.Asia, BuyerSeller.Asia might designate a percentage of the Services to its offshoots, especially BuyerSeller.Asia (Europe) Limited joined in the United Kingdom, who you concur might receipt you as far as it matters for them of the Services. </p>
					<p style="font-size: 14px;padding-right:20%;">2.2 You should register as a part on the Sites keeping in mind the end goal to get to and utilize a few Services. Further, BuyerSeller.Asia holds the privilege, without former notification, to confine access to or utilization of specific Services (or any components inside of the Services) to paying Users or subject to different conditions that <a itemprop="url"  href="{{URL::to('/')}}" style="color: #06C;">BuyerSeller.Asia</a> might force in our caution. </p>
					<p style="font-size: 14px;padding-right:20%;">2.3 Services (or any components inside of the Services) might fluctuate for the various districts and nations. No guarantee or representation is given that a specific Service or highlight or capacity thereof, or the same sort and degree of the Service or elements and capacities thereof will be accessible for Users. <a itemprop="url" href="{{URL::to('/')}}" style="color: #06C;">BuyerSeller.Asia</a> might in our sole prudence restrict, deny or make a diverse level of access to and utilization of any Services (or any elements inside of the Services) as for various Users. </p>
					<p style="font-size: 14px;padding-right:20%;">2.4 <a itemprop="url" href="{{URL::to('/')}}" style="color: #06C;" target="_blank">BuyerSeller.Asia</a> might dispatch, change, update, force conditions to, suspend, or stop any Services (or any elements inside of the Services) without earlier notice aside from that if there should be an occurrence of an expense based Service, such changes won't significantly unfavorably influence the paying Users in getting a charge out of that Service. </p>
					<p style="font-size: 14px;padding-right:20%;">2.5 Some Services might be given by <a href="{{URL::to('/')}}" style="color: #06C;">
						BuyerSeller.Asia</a>'s offshoots in the interest of <a itemprop="url" href="{{URL::to('/')}}" style="color: #06C;">BuyerSeller.Asia</a>. </p>
				</div>
				<div class="col-sm-12" style="margin-top:2%;">
					<p><h3 style="font-size: 14px;padding-right:20%;color: #06C;">3. Clients Generally</h3></p>
					<p style="font-size: 14px;padding-right:20%;">3.1 As a state of your entrance to and utilization of the Sites or Services, you concur that you will agree to every relevant law and regulations when utilizing the Sites or Services.</p>
					<p style="font-size: 14px;padding-right:20%;">3.2 You consent to utilize the Sites or Services exclusively for your own private and inside purposes. You concur that (a) you won't duplicate, recreate, download, re-distribute, offer, appropriate or exchange any Services or any data, content, pictures, illustrations, video cuts, sound, registries, records, databases or postings, and so forth accessible on or through the Sites (the "Webpage Content"), and (b) you won't duplicate, repeat, download, arrange or generally utilize any Site Content for the reasons of working a business that contends with BuyerSeller.Asia, or generally financially misusing the Site Content. Deliberate recovery of Site Content from the Sites to make or accumulate, specifically or in a roundabout way, a gathering, arrangement, database or catalog (whether through robots, arachnids, programmed gadgets or manual procedures) without composed authorization from BuyerSeller.Asia is restricted. Utilization of any substance or materials on the Sites for any reason not explicitly allowed in the Terms is denied. </p>
					<p style="font-size: 14px;padding-right:20%;">3.3 You should read BuyerSeller.Asia's Privacy Policy which administers the insurance and utilization of individual data about Users in the ownership of BuyerSeller.Asia and our associates. You acknowledge the terms of the Privacy Policy and consent to the utilization of the individual data about you as per the Privacy Policy. </p>
					<p style="font-size: 14px;padding-right:20%;">3.4 BuyerSeller.Asia might permit Users to access to substance, items or administrations offered by outsiders through hyperlinks (as word connection, pennants, channels or something else), API or generally to such outsiders' sites. You are advised to peruse such sites' terms and conditions and/or protection arrangements before utilizing the Sites. You recognize that BuyerSeller.Asia has no influence over such outsiders' sites, does not screen such sites, and might not be capable or at risk to anybody for such sites, or any substance, items or administrations made accessible on such sites. </p>
					<p style="font-size: 14px;padding-right:20%;">3.5 You concur not to embrace any activity to undermine the honesty of the PC frameworks or systems of BuyerSeller.Asia and/or whatever other User nor to increase unapproved access to such PC frameworks or systems. </p>
					<p style="font-size: 14px;padding-right:20%;">3.6 You concur not to attempt any activity which might undermine the trustworthiness of BuyerSeller.Asia's input framework, for example, leaving positive criticism for yourself utilizing auxiliary Member IDs or through outsiders or by leaving unconfirmed negative input for another User. </p>
					<p style="font-size: 14px;padding-right:20%;">3.7 By posting or showing any data, substance or material ("User Content") on the Sites or giving any User Content to BuyerSeller.Asia or our representative(s), you concede an unalterable, interminable, around the world, eminence free, and sub-licensable (through different levels) permit to BuyerSeller.Asia to show, transmit, disperse, imitate, distribute, copy, adjust, change, decipher, make subsidiary works, and generally utilize any or the greater part of the User Content in any structure, media, or innovation now known or not as of now known in any way and for any reason which might be advantageous to the operation of the Sites, the procurement of any Services and/or the matter of the User. You affirm and warrant to BuyerSeller.Asia that you have every one of the rights, force and power important to allow the above permit. </p>
				</div>
				
				<div class="col-sm-12" style="margin-top:2%;">
					<p><h3 style="font-size: 14px;padding-right:20%;color: #06C;">4. Part Accounts</h3></p>
					<p style="font-size: 14px;padding-right:20%;">4.1 User must be enlisted on the Sites to get to or utilize a few Services (an enrolled User is likewise alluded to as a "Part" underneath). But with BuyerSeller.Asia's endorsement, one User might just enroll one part account on the Sites. BuyerSeller.Asia might wipe out or end a User's part account if BuyerSeller.Asia has motivations to suspect that the User has simultaneously enlisted or controlled two or more part records. Further, BuyerSeller.Asia might reject User's application for enrollment for any reason. </p>
					<p style="font-size: 14px;padding-right:20%;">4.2 Upon enlistment on the Sites, BuyerSeller.Asia should relegate a record and issue a part ID and secret key (the last might be picked by an enrolled User amid enrollment) to each enrolled User. A record might have an online email account with restricted storage room for the Member to send or get messages. </p>
					<p style="font-size: 14px;padding-right:20%;">4.3 An arrangement of Member ID and secret key is remarkable to a solitary record. Every Member should be exclusively in charge of keeping up the privacy and security of your Member ID and secret word and for all exercises that happen under your record. No Member might share, dole out, or allow the utilization of your Member record, ID or secret key by someone else outside of the Member's own particular business element. Part consents to tell BuyerSeller.Asia instantly in the event that you get to be mindful of any unapproved utilization of your watchword or your record or whatever other break of security of your record. </p>
					<p style="font-size: 14px;padding-right:20%;">4.4 Member concurs that all exercises that happen under your record (counting without confinement, posting any organization or item data, clicking to acknowledge any Additional Agreements or tenets, subscribing to or making any installment for any administrations, sending messages utilizing the email record or sending SMS) will be regarded to have been approved by the Member. </p>
					<p style="font-size: 14px;padding-right:20%;">4.5 Part recognizes that offering of your record to different persons, or permitting numerous clients outside of your business substance to utilize your record (by and large, "various use"), might bring about unsalvageable mischief to BuyerSeller.Asia or different Users of the Sites. Part should repay BuyerSeller.Asia, our partners, executives, workers, specialists and delegates against any misfortune or harms (counting yet not constrained to loss of benefits) endured as a consequence of the different utilization of your record. Part additionally concurs that in the event of the different utilization of your record or Member's inability to keep up the security of your record, BuyerSeller.Asia might not be at risk for any misfortune or harms emerging from such a rupture and should have the privilege to suspend or end Member's record without obligation to Member.</p>
				</div>
				<div class="col-sm-12" style="margin-top:2%;">
					<p><h3 style="font-size: 14px;padding-right:20%;color: #06C;">5. Part's Responsibilities </h3></p>
					<p style="font-size: 14px;padding-right:20%;">5.1 Each Member speaks to, warrants and concurs that (a) you have full power and power to acknowledge the Terms, to concede the permit and approval and to perform the commitments hereunder; (b) you utilize the Sites and Services for business purposes just; and (c) the location you give when enlisting is the chief spot of business of your business substance. For purposes of this procurement, a branch or contact office won't be viewed as a different element and your main spot of business will be esteemed to be that of your head office. </p>
					<p style="font-size: 14px;padding-right:20%;">5.2 Members will be required to give data or material about your substance, business or items/administrations as a major aspect of the enrollment process on the Sites or your utilization of any Service or the part account. Every Member speaks to, warrants and concurs that (a) such data and material whether submitted amid the enlistment process or from there on all through the continuation of the utilization of the Sites or Service is genuine, precise, present and finish, and (b) you will keep up and quickly change all data and material to keep it genuine, exact, present and finish. </p>
					<p style="font-size: 14px;padding-right:20%;">5.3 Upon turning into a Member, you agree to the consideration of the contact data about you in our Buyer Database and approve BuyerSeller.Asia and our offshoots to impart the contact data to different Users or generally utilize your own data as per the Privacy Policy. </p>
					<p style="font-size: 14px;padding-right:20%;">5.4 Each Member speaks to, warrants and concurs that (a) you should be exclusively in charge of acquiring all fundamental outsider licenses and consents with respect to any User Content that you submit, post or show; (b) any User Content that you submit, post or show does not encroach or abuse any of the copyright, patent, trademark, exchange name, competitive advantages or some other individual or restrictive privileges of any outsider ("Third Party Rights"); and (c) you have the privilege and power to offer, exchange, circulate or fare or offer to offer, exchange, appropriate or send out the items or administrations portrayed in the User Content and such deal, exchange, conveyance or fare or offer does not damage any Third Party Rights. </p>
					<p style="font-size: 14px;padding-right:20%;">5.5 Each Member further speaks to, warrants and concurs that the User Content that you submit, post or show should: </p>
					
					<p style="font-size: 14px;padding-right:20%;padding-left:14px;">•	Be genuine, precise, complete and legitimate; </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px;">•	Not be false, deceptive or tricky; </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px;">•	Don’t contain data that is defamatory, slanderous, debilitating or bothering, foul, frightful, hostile, sexually express or destructive to minors; </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px;">•	Don’t contain data that is prejudicial or advances segregation in view of race, sex, religion, nationality, incapacity, sexual introduction or age; </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px;">•	Abuse the Product Listing Policy, different Terms or any pertinent Additional Agreements </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px;">•	Don’t disregard any appropriate laws and regulations (counting without constraint those overseeing trade control, customer insurance, out of line rivalry, or false publicizing) or advance any exercises which might damage any material laws and regulations; </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px;">•	Don’t contain any connection straightforwardly or in a roundabout way to whatever other sites which incorporates any substance that might abuse the Terms. </p>


					<p style="font-size: 14px;padding-right:20%;">5.6 Each Member further speaks to, warrants and concurs that you should: </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px">•	Carry on your exercises on the Sites in consistence with any appropriate laws and regulations; </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px">•	Lead your business exchanges with different clients of the Sites in compliance with common decency; </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px">•	Carry on your exercises as per the Terms and any relevant Additional Agreements;</p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px">•	Don’t utilize the Services or Sites to cheat any individual or element (counting without restriction offer of stolen things, utilization of stolen credit/platinum cards); </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px">•	Don’t mimic any individual or element, distort yourself or your connection with any individual or substance;  participate in spamming or phishing; </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px">•	Don’t participate in some other unlawful exercises (counting without restriction those which would constitute a criminal offense, offer ascent to common obligation, and so on) or empower or abet any unlawful exercises; </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px">•	Don’t include endeavors to duplicate, repeat, adventure or seize BuyerSeller.Asia's different restrictive registries, databases and postings; </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px">•	Don’t include any PC infections or other ruinous gadgets and codes that have the impact of harming, meddling with, capturing or seizing any product or equipment framework, information or individual data; </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px">•	Don’t include any plan to undermine the respectability of the information, frameworks or systems utilized by BuyerSeller.Asia and/or any client of the Sites or increase unapproved access to such information, frameworks or systems; </p>
					<p style="font-size: 14px;padding-right:20%;padding-left:14px">•	Don’t take part in any exercises that would somehow or another make any risk for BuyerSeller.Asia or our associates. </p>
					
					<p style="font-size: 14px;padding-right:20%;">5.7 Member may not utilize the Services and part record to participate in exercises which are indistinguishable or like BuyerSeller.Asia's e-trade commercial center business. </p>
					<p style="font-size: 14px;padding-right:20%;">5.8 If Member gives a business arbitrator, Member speaks to, warrants and co

</p></div>
</div></div>

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
				    "margin" :"0",
				    "text-align":"left"
			});
        });
</script>
@stop