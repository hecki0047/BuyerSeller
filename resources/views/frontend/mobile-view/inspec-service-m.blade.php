@extends('mobile-view.layout.master_m')
@section('content')
<section>
<div class="container">
	<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('FooterPage/pages/Inspection_Service',39),is_secured()}}" class="top-path-li-a"><span itemprop="name">Payment Inspection Service</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
  </div>
<div class="row">
		<div class="col-sm-12">
		<div class="header_cont_color">
			<img itemprop="image" class="img-responsive header_img_fix" src="{!! asset('resources/assets/gold/trusted-trade.jpg',is_secured()) !!}" alt="trusted trade" />
		</div>
		</div>
		<div  class="col-sm-12">
			<div class="font_awesome_manual_size margin_top item_sha">
			<div class="col-sm-4 col-md-4 padding_0">
				<div class="col-sm-2 col-xs-2 col-md-2">
					<div><img style="padding-top: 22px; float: right;" src="{{asset('resources/assets/gold/Verified-Inspectors.png')}}" alt="Verified Inspectors"> </div>
				</div>
				<div class=" col-xs-10 col-sm-10 col-md-10">
					<h3>Verified Inspectors </h3>
					<p>Bdtdc.com will check every inspector&#39;s capacities to assert their capacities and validness. </p>
				</div>
			</div>
			<div class="col-sm-4 col-md-4  padding_0">
				<div class="col-sm-2 col-xs-2 col-md-2">
					<div><img style="padding-top: 22px; float: right;" src="{{asset('resources/assets/gold/Secure-Payment.png')}}" alt="Verified Inspectors"> </div>
				</div>
				<div class="col-sm-10 col-xs-10 col-md-10">
					<h3>Secure Payment</h3>
					<p>BDTDC payment methods (Discover, Master &amp; Visa Card, American Payment and Online

Banking) guarantees that your portion is held securely and released to the controller when you

insist tasteful receipt of the survey report </p>
				</div>
			</div>
			<div class="col-sm-4 col-md-4  padding_0">
				<div class="col-sm-2 col-xs-2 col-md-2">
					<div><img style="padding-top: 22px; float: right;" src="{{asset('resources/assets/gold/Moderate-organization.png')}}" alt="Verified Inspectors"> </div>
				</div>
				<div class="col-sm-10 col-xs-10 col-md-10">
					<h3>Moderate organization</h3>
					<p> 
We offer a wide esteemed range from different sorts of observance to satisfy the specific survey
necessities of different buyers.</p>
				</div>
			</div>
	</div>
</div>
</div>
<div  class="row  margin_top " style="padding-top:20px;padding-bottom:30px;">
				<div class="border_bottom padding_bottom">
				<div class="col-sm-5"></div>
				<div class="col-sm-2">
					<!-- <a itemprop="url" href="{{URL::to('BuyerChannel/pages/inspection_service',20,is_secured())}}" class="btn btn-primary active center-block" style="font-size: 18px;border-radius: 5px !important;padding: 0 10px; padding-top: 10px;padding-bottom: 10px; width: 175px;">	 -->
					<!-- Find Inspectors</a> -->
				</div>
				<div class="co-sm-5"></div>
				
					
			</div>
		</div>
<div class="row " style="background-color: #fff;">
				<div class="margin_top padding_bottom">
			<div class="col-sm-9 col-md-9">
				<p style="height: 16px;padding-top:25px;padding-bottom:25px;font-size: 16px;line-height: 16px;font-weight: 700;color: #333;">What is Bdtdc.com&#39;s Inspection Service? </p>
				<p class="ins-p">With Bdtdc.com&#39;s Inspection Service, you can orchestrate profits by outcast master

administrators and investigation organization particularly on the Internet at

<a itemprop="url" href="http://www.bdtdc.com/BuyerChannel/pages/inspection_service/19">Bdtdc.com.</a> The assessor will visit the gathering and/or working ports anywhere

in Bangladesh and generate reports comprising pictures to guarantee that the stocks being

produced and dispatched accomplish quality standards.</p>
				<p style="color: #666;position: relative;font-weight: bold;line-height: 18px;padding-top:20px;">
					Types of inspections generally offered:
				</p>
				<p style="color: #666;position: relative;line-height: 18px;float: none;clear: both;width: 100%;">
					1. Primary production investigation; 2. During production investigation; 3. Final

random investigation; 4. Container loading inspection; 5. Factory audit.
				</p>
				
			</div>
			<div class="col-sm-3 col-md-3" style="border: 1px solid #DDD;border-top: none;padding-bottom:20px;">
				<p style="height: 16px;padding-top:25px;padding-bottom:25px;font-size: 16px;line-height: 16px;font-weight: 700;color: #333;">
					Notice
				</p>
				<p>Learn about Factory Audits, join the competition and win!</p>
				<p>Time Limits for Inspection Transactions</p>
				<p>bdtdc.com Inspection Transactions Dispute Rules</p>
			</div>
		</div>
	</div>
<div class="row" style="background-color: #fff;">
			<div class="col-sm-12 col-xs-12">
				<p style="height: 16px;padding-top:25px;padding-bottom:25px;font-size: 16px;line-height: 16px;font-weight: 700;color: #333;padding-left: 15px;">
				How To Use 
				</p>
			</div>
				<div class="col-sm-12 col-xs-12" style="padding-top:30px;background-color: transparent;border-top: none;padding-bottom:20px; padding-left: 30px;">
					
						<li>
							<i class="fa fa-user-plus" style="color: #5D778D;font-size:25px;width:20px;opacity:0.8;"></i>
							<p style="font-size:10px;">
							Buyer requests inspection
							</p>	
						</li>
						<li>
							<i class="fa fa-usd" style="color: #5D778D;font-size:25px;width:20px;opacity:0.8;"></i>
							<p style="font-size:10px;">
							Buyer pays Escrow
							</p>
						</li>
						<li>
							<i class="fa fa-file-archive-o" style="color: #5D778D;font-size:25px;width:20px;opacity:0.8;"></i>
							<p style="font-size:10px;">
							Report by inspector uploaded
							</p>
						</li>
						<li>
							<i class="fa fa-file" style="color: #5D778D;font-size:25px;width:20px;opacity:0.8;"></i>
							<p style="font-size:10px;">
							Buyer affirms report
							</p>
						</li>
						<li>
							<i class="fa fa-usd" style="color: #5D778D;font-size:25px;width:20px;opacity:0.8;"></i>
							<p style="font-size:10px;">
							Payment to inspector
							</p>
						</li>
							
				</div>
			<div class="col-sm-12">
				
			<div style="border: 1px solid #DDD;padding-bottom:20px; padding-left: 20px;">
				<p>FAQ</p>
				<p>How does the Inspection Service work?</p>
				<p>How does payment work for the Inspection Service?</p>
				<p>How do I leave feedback for my inspection order?</p>
				
			</div>
	</div>
			
</div>
<div class="row" style="margin-top:28px; background-color: #fff; margin-bottom: 28px; padding-top: 30px;">
			<p style="margin-bottom:10px;height: 16px;padding-left:15px;font-size: 16px;line-height: 16px;font-weight: 700;color: #333; margin-bottom: 20px;">Inspection Information</p>
			<div class="col-sm-12" style="background-color:#fff; padding-bottom: 28px;">
					
					 <table class="table table-bordered" style="border: 1px solid #ddd !important;">
						    <thead>
						      <tr style="border-bottom: 1px solid #ddd !important;">
						       
						        <th>Name</th>
						        <th>Service</th>
						        <th>Corporate Address</th>
						       
						      </tr>
						    </thead>
						    <tbody>
						      <tr style="border-bottom: 1px solid #ddd !important;">
						       
						        <td>The Inspection Company</td>
						        <td>Inspections Audit and others</td>
						        <td>Regus UTC Building , Level - 19,8,<br>
						         Pantha Path, Kawran Bazar,<br> Dhaka- 1215, Bangladesh.
						         Tel:+88 0961 1886 7645
						         </td>
						       
						      </tr>
						       <tr style="border-bottom: 1px solid #ddd !important;">
						      
						        <td>Intertek Bangladesh  Dhaka</td>
						        <td>Inspections Assurance Testing Certification</td>
						        <td>Phoenix Tower, 2nd & 3rd Floor<br>
									407, Tejgoan Industrial Area<br>
									Dhaka 1208
									Bangladesh,Dhaka<br>
									T: +880 9666776669
									F: +880 29125866
 								</td>
						       
						      </tr>
						       <tr style="border-bottom: 1px solid #ddd !important;">
						       
						        <td>MTS – Modern Testing Services</td>
						        <td>Factory Compliance Audits,Inspections and Others </td>
						        <td>280, East Naroshingpur,<br> Ashulia, Savar,<br> Dhaka 1346, Bangladesh,
						        +880 2-8817628
 								</td>
						      
						      </tr>
						       <tr style="border-bottom: 1px solid #ddd !important;">
						       
						        <td>TÜV SÜD Bangladesh Pvt. Ltd.</td>
						        <td>Inspections Assurance Testing Certification</td>
						        <td>Level 7 & 8, Update Tower,<br>
						         01 Shahajalal Ave, Dhaka 1230,<br>
						          Bangladesh,+880 1709-661646
 								</td>
						      
						      </tr>
						       <tr style="border-bottom: 1px solid #ddd !important;">
						        <td>Bureau Veritas</td>
						        <td>Inspections & Audit and Others</td>
						        <td>Haque Chamber, Level-6,<br>
						           89/2 West Panthopath, 
						          <br> Dhaka 1205, Bangladesh,
						          Cer & ITD:+ 88 02 8836765;<br>
						          Marine: + 88 031 2525403
 								</td>
						        
						      </tr>
						    </tbody>
						  </table>
			</div>	
	    </div>
	  </div>
	 </section>
  @stop