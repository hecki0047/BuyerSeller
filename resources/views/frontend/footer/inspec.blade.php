	@extends('fontend.master_dynamic')
    @section('page_css')
    <link property='stylesheet' href="{!! asset('css/for-buyers/inspection-services.css',is_secured()) !!}" rel="stylesheet">
    @endsection	
	@section('content')
	<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('FooterPage/pages/Help_Center',19,is_secured())}}" class="top-path-li-a"><span itemprop="name">Help Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('FooterPage/pages/Inspection_Service',39,is_secured())}}" class="top-path-li-a"><span itemprop="name">Payment Inspection Service</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
		<div class="row header_cont_color">
			<img itemprop="image" class="img-responsive header_img_fix" src="{!! asset('assets/gold/trusted-trade.jpg',is_secured()) !!}" alt="trusted trade" />
		</div>
		<br><br>
		<div  class="row font_awesome_manual_size margin_top item_sha">
			<div class="col-sm-4 col-md-4">
				<div class="col-sm-2 col-xs-2 col-md-2">
					<div><img style="padding-top: 22px; float: right;" src="{{asset('assets/gold/Verified-Inspectors.png')}}" alt="Verified Inspectors"> </div>
				</div>
				<div class=" col-xs-10 col-sm-10 col-md-10">
					<h3>Verified Inspectors </h3>
					<p>BuyerSeller.Asia will check every inspector&#39;s capacities to assert their capacities and validness. </p>
				</div>
			</div>
			<div class="col-sm-4 col-md-4">
				<div class="col-sm-2 col-xs-2 col-md-2">
					<div><img style="padding-top: 22px; float: right;" src="{{asset('assets/gold/Secure-Payment.png')}}" alt="Verified Inspectors"> </div>
				</div>
				<div class="col-sm-10 col-xs-10 col-md-10">
					<h3>Secure Payment</h3>
					<p>BuyerSeller payment methods (Discover, Master &amp; Visa Card, American Payment and Online

Banking) guarantees that your portion is held securely and released to the controller when you

insist tasteful receipt of the survey report </p>
				</div>
			</div>
			<div class="col-sm-4 col-md-4">
				<div class="col-sm-2 col-xs-2 col-md-2">
					<div><img style="padding-top: 22px; float: right;" src="{{asset('assets/gold/Moderate-organization.png')}}" alt="Verified Inspectors"> </div>
				</div>
				<div class="col-sm-10 col-xs-10 col-md-10">
					<h3>Moderate organization</h3>
					<p> 
We offer a wide esteemed range from different sorts of observance to satisfy the specific survey

necessities of different buyers.
</p>
				</div>
			</div>
			<div  class="row col-sm-12 margin_top border_bottom padding_bottom" style="padding-top:20px;padding-bottom:30px;">
				<div class="col-sm-5"></div>
				<div class="col-sm-2">
				</div>
				<div class="co-sm-5"></div>
				
					
			</div>
		</div>
		
		<div class="row margin_top padding_bottom" style="background-color: #fff;">
			<div class="col-sm-9 col-md-9">
				<p style="height: 16px;padding-top:25px;padding-bottom:25px;font-size: 16px;line-height: 16px;font-weight: 700;color: #333;">What is BuyerSeller.Asia&#39;s Inspection Service? </p>
				<p class="ins-p">With BuyerSeller.Asia&#39;s Inspection Service, you can orchestrate profits by outcast master

administrators and investigation organization particularly on the Internet at

<a itemprop="url" href="{{ URL::to('/',null,is_secured()) }}">BuyerSeller.Asia.</a> The assessor will visit the gathering and/or working ports anywhere

in Bangladesh and generate reports comprising pictures to guarantee that the stocks being

produced and dispatched accomplish quality standards.</p>
				<p style="color: #666;position: relative;font-weight: bold;line-height: 18px;padding-top:20px;">
					Types of inspections generally offered:
				</p>
				<p style="color: #666;position: relative;line-height: 18px;float: none;clear: both;width: 100%;">
					1. Primary production investigation; 2. During production investigation; 3. Final

random investigation; 4. Container loading inspection; 5. Factory audit.
				</p>
				
			
		
			<div>
				
				<p style="height: 16px;padding-top:25px;padding-bottom:25px;font-size: 16px;line-height: 16px;font-weight: 700;color: #333;padding-left: 15px;">
				How To Use 
				</p>
				
				<div class="col-sm-12" style="padding-top:30px;background-color: transparent;border-top: none;padding-bottom:20px;">
					
						<div class="col-sm-1 col-xs-6 squence-ss">
						
							<i class="fa fa-user-plus" style="color: #5D778D;font-size:35px;width:20px;opacity:0.8;"></i>
							<p style="font-size:10px;">
							Buyer requests inspection
							</p>	
						</div>
						<div class="col-sm-1 col-xs-6 squence-ss">
						
							<i class="fa fa-arrow-right" style="color: #5D778D;font-size:35px;width:20px;padding-top:10px;opacity:0.5;"></i>
						
						</div>
						<div class="col-sm-1 col-xs-6 squence-ss">
							
							<i class="fa fa-usd" style="color: #5D778D;font-size:35px;width:20px;opacity:0.8;"></i>
							<p style="font-size:10px;">
							Buyer pays Escrow
							</p>
						</div>
						<div class="col-sm-1 col-xs-6 squence-ss">
							<i class="fa fa-arrow-right" style="color: #5D778D;font-size:35px;width:20px;padding-top:10px;opacity:0.5;"></i>
						</div>
						<div class="col-sm-2 col-xs-6 squence-ss">
							
							<i class="fa fa-file-archive-o" style="color: #5D778D;font-size:35px;width:20px;opacity:0.8;"></i>
							<p style="font-size:10px;">
							Report by inspector uploaded
							</p>
						</div>
						<div class="col-sm-1 col-xs-6 squence-ss">
						
							<i class="fa fa-arrow-right" style="color: #5D778D;font-size:35px;width:20px;padding-top:10px;opacity:0.5;"></i>
						
						</div>
						<div class="col-sm-2 col-xs-6 squence-ss">
							
							<i class="fa fa-file" style="color: #5D778D;font-size:35px;width:20px;opacity:0.8;"></i>
							<p style="font-size:10px;">
							Buyer affirms report
							</p>
						</div>
						<div class="col-sm-1 col-xs-6 squence-ss">
						
							<i class="fa fa-arrow-right" style="color: #5D778D;font-size:35px;width:20px;padding-top:10px;opacity:0.5;"></i>
						
						</div>
						<div class="col-sm-2 col-xs-6 squence-ss">
							
							<i class="fa fa-usd" style="color: #5D778D;font-size:35px;width:20px;opacity:0.8;"></i>
							<p style="font-size:10px;">
							Payment to inspector
							</p>
						</div>
						
				</div>
			</div>
	</div>
			<div class="col-sm-3 col-md-3" style="border: 1px solid #DDD;padding-bottom:20px; border-top: 0 none;">
				<p style="height: 16px;padding-top:25px;padding-bottom:25px;font-size: 16px;line-height: 16px;font-weight: 700;color: #333;">
					FAQ
				</p>
				 @if($parent_cat_name)
          @foreach($parent_cat_name as $data)
               <p><a itemprop="url" href="{{URL::to('faq-detail',$data->id)}}" style="text-decoration: none;color: #333;font-size: 14px;">{{ $data->name }}</a></p>
          @endforeach
          @endif
				
			</div>
		</div>
		<div class="row" style="margin-top:28px; background-color: #fff; margin-bottom: 28px; padding-top: 30px;">
			<p style="margin-bottom:10px;height: 16px;padding-left:15px;font-size: 16px;line-height: 16px;font-weight: 700;color: #333; margin-bottom: 20px;">Inspection Information</p>
			<div class="col-sm-12" style="background-color:#fff; padding-bottom: 28px;">
					
					 <table class="table table-bordered" style="border: 1px solid #ddd !important">
						    <thead>
						      <tr style="border-bottom: 1px solid #ddd !important;">
						        <th>Company</th>
						        <th>Name</th>
						        <th>Service</th>
						        <th>Corporate Address</th>
						        <th>Contact No.</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr style="border-bottom: 1px solid #ddd !important;">
						        <td><img style="max-width: 200px;" src="{{asset('assets/fontend/imgsss/inspect.png')}}" alt="inspection"></td>
						        <td>The Inspection Company</td>
						        <td>Inspections Audit and others</td>
						        <td>Regus UTC Building , Level - 19,8,<br>
						         Pantha Path, Kawran Bazar,<br> Dhaka- 1215, Bangladesh </td>
						        <td>Tel.:+88 0961 1886 7645</td>
						      </tr>
						       <tr style="border-bottom: 1px solid #ddd !important;">
						        <td><img style="max-width: 200px;" src="{{asset('assets/fontend/imgsss/intertek.png')}}" alt="inspection"></td>
						        <td>Intertek Bangladesh  Dhaka</td>
						        <td>Inspections Assurance Testing Certification</td>
						        <td>Phoenix Tower, 2nd & 3rd Floor<br>
									407, Tejgoan Industrial Area<br>
									Dhaka 1208
									Bangladesh
 								</td>
						        <td>Dhaka<br>
									T: +880 9666776669
									F: +880 29125866
								</td>
						      </tr>
						       <tr style="border-bottom: 1px solid #ddd !important;">
						        <td><img style="max-width: 200px;" src="{{asset('assets/fontend/imgsss/modern-testing.png')}}" alt="inspection"></td>
						        <td>MTS – Modern Testing Services</td>
						        <td>Factory Compliance Audits,Inspections and Others </td>
						        <td>280, East Naroshingpur,<br> Ashulia, Savar,<br> Dhaka 1346, Bangladesh
 								</td>
						        <td>+880 2-8817628
								</td>
						      </tr>
						       <tr style="border-bottom: 1px solid #ddd !important;">
						        <td><img style="max-width: 200px; max-height: 130px;" src="{{asset('assets/fontend/imgsss/south-asia.jpg')}}" alt="inspection"></td>
						        <td>TÜV SÜD Bangladesh Pvt. Ltd.</td>
						        <td>Inspections Assurance Testing Certification</td>
						        <td>Level 7 & 8, Update Tower,<br>
						         01 Shahajalal Ave, Dhaka 1230,<br>
						          Bangladesh
 								</td>
						        <td>+880 1709-661646
								</td>
						      </tr>
						       <tr style="border-bottom: 1px solid #ddd !important;">
						        <td><img style="max-width: 200px;" src="{{asset('assets/fontend/imgsss/baruea.png')}}" alt="inspection"></td>
						        <td>Bureau Veritas</td>
						        <td>Inspections & Audit and Others</td>
						        <td>Haque Chamber, Level-6,<br>
						           89/2 West Panthopath, 
						          <br> Dhaka 1205, Bangladesh
 								</td>
						        <td>Cer & ITD:+ 88 02 8836765;<br>
						          Marine: + 88 031 2525403
								</td>
						      </tr>
						    </tbody>
						  </table>
			</div>	
	    </div>
	   <!--  <div class="row" style="background-color: #fff;border-bottom: 1px solid rgba(0,0,0,.1); margin-bottom:28px;">
	    	<div  class="row col-sm-12 margin_top border_bottom padding_bottom" style="padding-top:30px;padding-bottom:5%;">
				<div  class="btn btn-primary active center-block" style="border-radius: 5px !important; padding-top: 9px; width:200px;">
					<p style="padding-top: 6px;">Find More Inspectors</p></div>
			</div>
	    </div> -->
  @stop