@extends('frontend.layouts.master-register')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bangladesh-business-style.css',is_secured()) !!}" rel="stylesheet">
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bdtdc-sme-center-style.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" style=" padding-bottom: 8px;">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">About BuyerSeller</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                         
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Business Advisory</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    
  </div>
	
<div class="row padding_0" style="padding-bottom: 5%; background-color: #fff;">
			<div class="col-lg-3" style="padding:0;padding-right: 10px; padding-top: 15px">
			<div class="bd-title" style="background-color: #255E98; color: #fff;"><h3 class="arrow-down" style="font-size:18px; color:#fff;">Small Business Resources</h3></div>
					
					@include('contents-view/small-business-menu')
					
					<div style="border:1px solid #255E98; width: 100%; display: block;">
						
					</div>
					<div>	
					</div>
				
			</div>
	<div class="col-lg-9" style="padding:0;padding-top: 15px; background-color: #fff;">
	
        			
        			<div class="col-sm-12 padding_0">
        				<div style="padding: 20px 0;">
        					<h3 class="portal-h3">BuyerSeller Business Advisory Services</h3>
        				</div>
        				

						<div class="col-sm-8 padding_0" style="padding-bottom: 15px;">
											
											<p class="advisory-p" style="padding-top: 4%;">
We offer FREE business advisory service to help Bangladesh SMEs overcome their business challenges and get the latest market intelligence. Our one-on-one business consultative offerings – Bangladesh Business Advisory Service and SME Advisory Service – offer professional and practical information related to doing business worldwide, in particular on the mainland. Information here includes areas such as marketing strategies, government regulations, customs, intellectual property rights and taxation. - See more at: http://BuyerSeller.Asia</p>		



								
							
							
												
									
						</div>
						<div class="col-sm-4">
							<img  itemprop="image" class="advisory-img" src="{!! asset('assets/fontend/bdtdc-images/advisory.jpg') !!}" alt="">
							
						</div>				
						
				
			</div>
			<div class="col-sm-12 padding_0">
			<h3 class="portal-h3" style="font-size: 13px;">Bangladesh Business Advisory Service</h3>
							<div>
								
							</div>
			<p class="advisory-p" style="padding-top: 4%;">
								The Bangladesh market, exhibiting a strong growth in the last ten years, is a vast market with over 1.2 billion consumers. With the implementation of Closer Economic Partnership Arrangement (CEPA), there will be more business opportunities for Hong Kong SMEs in this market. The Bangladesh Business Advisory Service is organised and provided by BuyerSeller Bangladesh Business Advisory Unit, with support from the Bangladesh Ministry of Commerce, Shanghai Municipal Commission of Commerce and Department of Commerce of Guangdong Province as well as a number of Chinese enterprises and professional service providers in Hong Kong, offers the Bangladesh Business Advisory Service.
							</p>
				<table class="table table-hover">
							    <thead>
							      <tr>
							        <th class="title_black_lightOrangeBackground" style="border-right: 1px solid #fff !important;">List of Advisors</th>
							        <th class="title_black_lightOrangeBackground">Service Area</th>
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>BuyerSeller Bangladesh Business Advisory Unit</td>
							        <td>Marketing Strategy for the Bangladesh</td>
							      </tr>
							      <tr>
							        <td>Bangladesh Ministry of Commerce</td>
							        <td>Investment Environment and Trade Issues in Bangladesh</td>
							      </tr>
							      <tr>
							        <td>Shanghai Municipal Commission of Commerce</td>
							        <td>Shanghai Investment Environment and Trade Issues</td>
							      </tr>
							      <tr>
							        <td>Department of Commerce of Guangdong Province</td>
							        <td>Guangdong Investment Environment and Trade Issues</td>
							      </tr>
							      <tr>
							        <td>Department of Commerce of Shandong Province</td>
							        <td>Shandong Investment Environment and Trade Issues</td>
							      </tr>
							      <tr>
							        <td>Hebei Provincial Bureau of Investment Promotion</td>
							        <td>Hebei Investment Environment and Trade Issues</td>
							      </tr>
							      <tr>
							        <td>The Law Society of Bangladesh</td>
							        <td>Bangladesh Legal Issues</td>
							      </tr>
							    </tbody>
							  </table>		
			</div>
			<div class="col-sm-12 padding_0">
			<h3 class="portal-h3" style="font-size: 13px;">SME Advisory Service</h3>
							<div>
							
							</div>
			<p class="advisory-p" style="padding-top: 4%;">
								BuyerSeller SME Advisory Service provides one-to-one free business advisory service to Bangladesh SMEs and new start-up businesses with the support of asia professional institutions. The service aims to help SMEs to overcome their business challenges in Bangladesh market. Service area include export credit management and approaches of financing, business law, operation of letter of credit, intellectual property right (IPR) protection and up-to-date information for new business start-up.
							</p>
				<table class="table table-hover">
							    <thead>
							      <tr>
							        <th class="title_black_lightOrangeBackground" style="border-right: 1px solid #fff !important;">List of Advisors</th>
							        <th class="title_black_lightOrangeBackground">Service Area</th>
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>The Law Society of Bangladesh</td>
							        <td>Bangladesh business law</td>
							      </tr>
							      
							      <tr>
							        <td>IPMS Consultants Limited</td>
							        <td>Intellectual Property Right (IPR) protection</td>
							      </tr>
							      <tr>
							        <td>Conpak CPA Limited</td>
							        <td>Bangladesh tax issues</td>
							      </tr>
							      
							    </tbody>
							  </table>		
			</div>
			<div class="col-sm-12 padding_0">
			<h3 class="portal-h3" style="font-size: 13px;">SME Advisory Service</h3>
							<div>
							
							</div>
			<p class="advisory-p" style="padding-top: 4%;">
								We introduce a FREE Intellectual Property (IP) Advisory Service to provide SMEs basic guidance on IP business and IP-related marketing strategies such as licensing and franchising. Our IP advisory team will help you start your IP business, overcome possible challenges and acquire the latest market intelligence. The meeting will last for around 1 hour. 
							</p>
							<div>
								<ul>
									<li class="ip-list">• IP protection and registration</li>
									<li class="ip-list">• IP transaction</li>
									<li class="ip-list">• IP management</li>
									<li class="ip-list">• Legal advice on IP business</li>
									<li class="ip-list">• Licensing marketing</li>
									<li class="ip-list">• Franchising marketing</li>
								</ul>
							</div>
							<p><strong>Venue<br></strong><a class="normalURL2" href="#" target="_blank">BuyerSeller SME Centre</a><br>Ground Level, Bangladesh Convention &amp; Exhibition Centre, 1 Expo Drive, Bangladesh<br>Enquiry: </p>
							<p><span style="color:#b22222;">Remarks:</span></p>
							<ol><li><span style="color:#b22222;">The service is conducted in face-to-face format at the BuyerSeller SME Centre from Monday to Friday. </span></li><li><span style="color:#b22222;">BuyerSeller reserves the right to make final decision on the following issues: </span><br>&nbsp;&nbsp;&nbsp; • <span style="color:#b22222;">Whether or not to accept your / your company’s application; and </span><br>&nbsp;&nbsp;&nbsp; • <span style="color:#b22222;">All arrangements relating to the meeting with the Advisor. </span></li></ol>
	<div id="extended-readings"> 
								
<h4>Extended Readings</h4>
<ul>
		<li>
			<a itemprop="url" href="{{ URL::to('BuyerChannel/pages/logistic_service',18,is_secured()) }}"><span style="color: #000; font-size: 12px; line-height: 26px;"> • Bangladesh Logistics Services</span> </a>
				
		</li>
		<li>
			<a itemprop="url" href="#"><span style="color: #000; font-size: 12px; line-height: 26px;"> • Trade Regulations</span> </a>
				
		</li>
		<li>
			<a itemprop="url" href="#"><span style="color: #000; font-size: 12px; line-height: 26px;"> • Business Tools</span> </a>
				
		</li>
		<li>
			<a href="#"><span style="color: #000; font-size: 12px; line-height: 26px;"> • Setting Up Business in Bangladesh</span> </a>
				
		</li>
		<li>
			<a itemprop="url" href="#"><span style="color: #000; font-size: 12px; line-height: 26px;"> • Free online search for interior design service providers on BuyerSeller.Asia.</span> </a>
				
		</li>
			
</ul>
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