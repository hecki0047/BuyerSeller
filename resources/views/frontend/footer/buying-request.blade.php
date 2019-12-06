@extends('fontend.master_dynamic')
	@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/media-room-style.css',is_secured()) !!}" rel="stylesheet">
    @endsection
  @section('content')
  <div class="row">
  			<div class="col-sm-12 col-md-12 col-lg-12">
  					<ul class="top-path" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
  						<li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
  						 <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('FooterPage/pages/Rules_center',22,is_secured())}}" class="top-path-li-a"><span itemprop="name">Rules Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
  						<li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="{{URL::to('buying-request'),is_secured()}}" class="top-path-li-a">Buying Request Posting Rules<i class="fa fa-angle-right top-path-icon"></i></a></li>
  					</ul>
  			</div>
  	
  </div>
  
@include('fontend.footerpage.rules_sidebar')
	      
	      <div class="col-sm-9 padding_0" style="padding-left:6%;">
	      		
	          
	           <!-- <div class="col-sm-12 padding_0">
	            	<div style="display: block; width: 100%; padding-top: 20px;">		           
	            	 <div class="col-xs-10 col-md-10 padding_0">

						<i class="fa fa-search" style="font-size: 20px; color: #999; position: absolute;top:40%; left: 20px;">
						</i><input style="height:44px;border-radius: 5px!important; padding-left: 10%;" name="key" 
						class="form-control" type="text" placeholder="What are you looking for. . ." required="required">
					</div>
		               <div class="col-md-2 col-sm-2 col-xs-2 padding_0">
						<input type="submit" style="background:#19446F;border-radius:0 5px 5px 0 !important; position: absolute;top: 0px;" class="btn btn-primary btn-lg pull-left" value="Search">
						</div>
					</div>

	            </div> -->
	            
		<div class="col-sm-12 padding_0">
		<h3 class="supplement-head" style="padding-top: 0; margin-top:8%; margin-bottom: 5%;">The Buying Request Posting Rules</h3>
	<p class="buying-r-p">By utilizing the BuyerSeller administration, you concur that you have perused, comprehended, and consented to be bound by the Terms of Use, Privacy Policy, and Product Listing Policy of BuyerSeller.com and also the accompanying terms as to your Buying Request: </p>
	<p class="buying-r-p"><span style="font-size: 13px; font-weight: bold;color: #000;">1.</span> Your Buying Request ought to be particular and clear. You ought not post any solicitation or data unimportant to the BuyerSeller administration. </p>
	<p class="buying-r-p"><span style="font-size: 13px; font-weight: bold;color: #000;">2.</span> You should not post any materials that are untrue, wrong, unlawful, invalid, or infringing upon the Product Listing Policy of BuyerSeller.com. </p>
	<p class="buying-r-p"><span style="font-size: 13px; font-weight: bold;color: #000;">3.</span> To abstain from creating any perplexity, you ought not post rehashed Buying Requests. </p>
	<p class="buying-r-p"><span style="font-size: 13px; font-weight: bold;color: #000;">4.</span> Framework produced messages will be sent to you to encourage warnings of Buying Requests status and citation redesigns in accordance with your solicitation under the BuyerSeller administration. In the event that you no more wish to get these messages, you might straightforwardly go to your record and counterbalance the administration by shutting your past solicitation. </p>
	<p class="buying-r-p"><span style="font-size: 13px; font-weight: bold;color: #000;">5.</span> You attempt that you should not distribute any data or direct any demonstration at all that encroach the privileges of any outsider, including however not constrained to any protected innovation rights, the privileges of reputation, privileges of identity, privileges of security, and some other privileges of outsiders not particularly recognized in this proviso. </p>
	<p class="buying-r-p"><span style="font-size: 13px; font-weight: bold;color: #000;">6.</span> If you have disregarded any of the terms expressed above, BuyerSeller.com should have the privilege to take any authorization activities sensibly important. Samples of such authorization activities incorporate however, not constrained to erasing your posted Buying Request, limiting your rights to post the Buying Request, issuing notices to you, or ending your participation concurrence with BuyerSeller.com, and so on. </p>
	<p class="buying-r-p"><span style="font-size: 13px; font-weight: bold;color: #000;">7.</span> You might not present any data or materials, specifically amid your utilization of the sound and video accommodation administrations of theBuyerSeller.com versatile application, that is/are unlawful in any important nation or ward and/or are in break of any site rules embraced by BuyerSeller.com. Moreover, you might not present any material that may not be confined or disallowed by law, but rather are in any case questionable, including yet not restricted to: </p>
	<p class="buying-r-p" style="padding-left: 5%;">•	Information that supports illicit exercises; </p>
	<p class="buying-r-p" style="padding-left: 5%;">•	Items that are racially, religiously or ethnically unfavorable, or that advance scorn, viciousness, racial or religious narrow mindedness; </p>
	<p class="buying-r-p" style="padding-left: 5%;">•	Giveaways, lotteries, wagers, or challenges; </p>
	<p class="buying-r-p" style="padding-left: 5%;">•	Stocks, bonds, speculation interest and different securities; and </p>
	<p class="buying-r-p" style="padding-left: 5%;">•	Explicit materials/things that are sexual in nature. </p>
	<p class="buying-r-p" style="padding-left: 5%;">•	BuyerSeller.com claims all authority to match any Request for Quotation ("RFQ") just with citations that are esteemed to be suitable for the RFQ. BuyerSeller.com likewise maintains whatever authority is needed to decline to match any RFQ with citations that don't meet any criteria as regarded suitable and required by BuyerSeller.com in its sole caution. Samples of such citations incorporate, yet are not constrained to, citations for items that don't have a place with the supplier's assigned class of items on BuyerSeller.com, citations that don't relate to the items, citations with missing data, citations for banned and/or confined items, citations that encroach any terms and conditions for the utilization of BuyerSelleror some other site rules received by BuyerSeller.com, and so forth. </p>
	<p class="buying-r-p" style="padding-left: 5%;">•	You recognize and concur that BuyerSeller.com might give your contact data, including however not restricted your contact name, email address, phone, cell telephone and fax, to suppliers for them to get in touch with you for further business opportunities.</p>
	<p class="buying-r-p" style="padding-left: 5%;">•	You recognize and concur that BuyerSeller.com might utilize your participation data, including yet not constrained to your organization profile, profile pictures, exchange history, contact individual data, and so forth., to showcase and advance BuyerSellero and the BuyerSeller International Website (furthermore to bolster and work the different projects and administrations of BuyerSeller offered to individuals now and again).</p>
	<p class="buying-r-p" style="padding-left: 5%;">•	You recognize and concur that Bdtddc.com might utilize your item postings and related data, including yet not restricted to your item pictures, item postings, item details, and so on., to bolster and work different projects, administrations, showcasing activities, and different administrations offered by BuyerSeller to individuals now and again.</p>

			
		</div>
</div>

</div>


@stop