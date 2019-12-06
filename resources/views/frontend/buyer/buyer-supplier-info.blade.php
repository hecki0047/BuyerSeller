@extends('frontend.layouts.header_dynamic')
@section('content')

<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" style=" padding-bottom: 8px;">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null, is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('ServiceChannel/pages/for_buyer','35', is_secured())}}" class="top-path-li-a"><span itemprop="name">Help Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Contact Supplier</span></a></li>
                    </ul>
            </div>
    
  </div>



	<div style="clear:both"></div>

<div class="row">
	<div class="col-sm-12 padding_0" style="background-color:#fff !important;">
		<ul class="nav nav-tabs" aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
		    <!-- <li><a itemprop="url" data-toggle="tab" href="#home" style="font-size: 17px;">How to Select Suppliers</a></li> -->
		    <!-- <li><a itemprop="url" data-toggle="tab" href="#menu1" style="font-size: 17px;">How to Contact Suppliers</a></li>
		    <li><a itemprop="url" data-toggle="tab" href="#menu2" style="font-size: 17px;">Inquiry Cart</a></li> -->
		</ul>
	</div>

	<div class="tab-content">
	    <div id="home" class="tab-pane fade in active">
	      <div class="col-sm-12" style="border:1px solid #DAE2ED;border-top:none;padding-top:10px;background-color:#fff !important;padding-bottom: 15px; margin-bottom: 20px">
	      	
	      	<div class="col-sm-3">
	      		<div class="framr-border">
	      			<h3 class="book-list-li-h3">How to Select Suppliers</h3>
	      			<img itemprop="image" style="height: 146px;width: 144px; margin-left: 2px; padding-top: 32px;" src="{!! asset('assets/fontend/bdtdc-images/supplier115.jpg') !!}" alt="" />
	      		</div>
	      		
	      	</div>
	      	<div class="col-sm-9" style="border-left: 2px solid #DAE2ED;">
	      		<p style="padding-top:20px;padding-bottom:20px;border-bottom: 2px solid #DAE2ED;text-align:center;font-size: 27px;">How to Select Suppliers</p>
	      		<div class="col-sm-12" style="border: 1px solid #DAE2ED;padding-bottom:20px;padding-top:20px;">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
		            <ol class="carousel-indicators">
		                <li data-target="#myCarousel" data-slide-to="0" style="border-radius:10px !important; border:0 none;" class="active"></li>
		                <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;" class=""></li>
		                <li data-target="#myCarousel" data-slide-to="2" style="border-radius:10px !important; border:0 none;" class=""></li>
		                <li data-target="#myCarousel" data-slide-to="3" style="border-radius:10px !important; border:0 none;" class=""></li>
		                <li data-target="#myCarousel" data-slide-to="4" style="border-radius:10px !important; border:0 none;" class=""></li>
		                <li data-target="#myCarousel" data-slide-to="5" style="border-radius:10px !important; border:0 none;" class=""></li>
		                
		                
		             </ol>
			         <div class="carousel-inner" role="listbox">
		                <div class="item active">
		                 	<img itemprop="image" style="height:480px;max-height:480px;width:100%;margin-left: -1px;" src="{!! asset('assets/suppliers/1.jpg') !!}" alt="bangladesh means business">
						       
		                </div>

		            
		              <div class="item">
		                 <!--  <img itemprop="image" style="height:480px;max-height:480px;width:100%;margin-left: -1px;" src="{!! asset('assets/suppliers/2.jpg') !!}" alt="bangladesh means business"> -->
		                 <div>
		                 <div class="col-sm-12">
		                 				<div class="col-sm-6">
		                 					<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/fontend/bdtdc-images/gold_supplier20120802.jpg') !!}" alt="Gold Suppliers">
		                 					<h3 style="font-size:18px;margin-top:8%;">Gold Suppliers</h3>
		                 				</div>
		                 				<div class="col-sm-6">
		                 					<img itemprop="image" style="height:80px;width:80px;margin-left: -1px;float:left;" src="{!! asset('assets/fontend/bdtdc-images/verified-supplier.png') !!}" alt="Assessed Suppliers">
		                 					<h3 style="font-size:18px;margin-top:8%;">Assessed Suppliers</h3>
		                 				</div>
		                 </div>
		                 <div class="col-sm-12">
		                 				<div class="col-sm-3">
		                 					
		                 				</div>
		                 				<div class="col-sm-6">
		                 					<img itemprop="image" style="height:80px;width:80px;margin-left: -1px;float:left;" src="{!! asset('assets/fontend/bdtdc-images/Buyer-protection-home.png') !!}" alt="Buyer Protection">
		                 					<h3 style="font-size:18px;margin-top:8%;">Buyer Protection</h3>
		                 				</div>
		                 				<div class="col-sm-3">
		                 					
		                 				</div>
		                 </div>
		                 <div class="col-sm-12" style="padding-bottom:100px;">
		                 				<div class="col-sm-6">
		                 				<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/gold/A&V-Check.png') !!}" alt="A&V Check">
		                 					<h3 style="font-size:18px;margin-top:8%;">A&V Check</h3>
		                 				</div>
		                 				<div class="col-sm-6">
		                 					<img itemprop="image" style="height:80px;width:80px;margin-left: -1px;float:left;" src="{!! asset('assets/helpcenter/Hand-Shake-Icon.png') !!}" alt="Hand Shake Icon">
		                 					<h3 style="font-size:18px; margin-top:8%;">Onsite Check</h3>
		                 				</div>
		                 </div>
		                 </div>
		                </div>
		                 <div class="item">
		                	<div>
		                  		<div class="col-sm-12" style="padding-bottom:100px;">
		                  				<div style="width:80%; display:block; padding-left:40px;">
		                  						<div style="width:100%; padding-bottom:40px;">
		                  							<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/fontend/bdtdc-images/verified-supplier.png') !!}" alt="Hand Shake Icon">
		                  							<h3 style="font-size:18px;padding-top: 5%; margin-left: 17%;">Assessed Suppliers</h3>
		                  						</div>
		                  						<div style="clear:both;display:block;">
		                  							<p style="font-size:14px; font-weight:normal; float:left; text-align:left; margin-top:30px;">Assessed Supplier is a BuyerSeller.Asia administration furnishing you with completely autonomous and third-party verification confirmation of your potential suppliers. We commission a few agencies in view of their worldwide notoriety and demonstrated believability to test the cases made by suppliers. For purchasers, this implies intuition and trust are constructed just in light of solid proof. Evaluated Supplier incorporates Assessment Reports Verified Videos and Verified Main Products.</p>
		                  						</div>
		                  							
		                  				</div>
		                  		</div>
		                  		</div>
		                </div>
		                 <div class="item">
		                 		<div>
		                  		<div class="col-sm-12" style="padding-bottom:100px;">
		                  				<div style="width:80%; display:block; padding-left:40px;">
		                  						<div style="width:100%; padding-bottom:40px;">
		                  							<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/gold/A&V-Check.png') !!}" alt="A&V Check">
		                  							<h3 style="font-size:18px;padding-top: 5%; margin-left: 17%;">A&V Check</h3>
		                  						</div>
		                  						<div style="clear:both;display:block;">
		                  							<p style="font-size:14px; font-weight:normal; float:left; text-align:left; margin-top:30px;">Onsite Check is a confirmation procedure for Gold Suppliers. The supplier's organization's sites are checked by BuyerSeller.Asia staff to guarantee onsite operations subside there. The suppliers' lawful status and other associated data are then affirmed by a third-party verification agency.</p>
		                  						</div>
		                  							
		                  				</div>
		                  		</div>
		                  		</div>
		                </div>
		                 <div class="item">
		                 		<div>
		                  		<div class="col-sm-12" style="padding-bottom:100px;">
		                  				<div style="width:80%; display:block; padding-left:40px;">
		                  						<div style="width:100%; padding-bottom:40px;">
		                  							<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/helpcenter/Hand-Shake-Icon.png') !!}" alt="A&V Check">
		                  							<h3 style="font-size:18px;padding-top: 5%; margin-left: 17%;">Onsite Check</h3>
		                  						</div>
		                  						<div style="clear:both;display:block;">
		                  							<p style="font-size:14px; font-weight:normal; float:left; text-align:left; margin-top:30px;">Onsite Check is a confirmation procedure for Gold Suppliers. The supplier's organization's sites are checked by BuyerSeller.Asia staff to guarantee onsite operations subside there. The suppliers' lawful status and other associated data are then affirmed by a third-party verification agency.</p>
		                  						</div>
		                  							
		                  				</div>
		                  		</div>
		                  		</div>
		                </div>
		                 <div class="item">
		                  <img itemprop="image" style="height:480px;max-height:480px;width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/verify-your-account.jpg') !!}" alt="veryfiy account">
		                </div>
		            
		            </div>
            
            
            </div>
				</div>
				<!-- <div class="col-sm-12" style="margin-top:20px;margin-bottom:20px;background: #F5F7FA none repeat scroll 0% 0%;padding-bottom:2%;">
					<div class="col-sm-6" style="padding-top:2%;">
						<p style="margin-bottom: -1px; font-weight: bold;">You may also like</p>
						<div class="col-sm-12" style="padding-left:4%;">
							<p><span style="font-size:11px;color: #666;">How do I know if a supplier is reliable?</span></p>
							<p><span style="font-size:11px;color: #666;">Are all suppliers verified on BuyerSeller.Asia?</span></p>
						</div>
						
					</div>
					<div class="col-sm-6">
						<div class="col-sm-12" style="padding-left:1%;padding-top: 8%;">
							<p><span style="font-size:11px;color: #666;">What are the signs of the scammers?</span></p>
						</div>
					</div>

	      	</div> -->
	      </div>
	      
	    </div>
	   </div>
	    <div id="menu1" class="tab-pane fade">
	      <div class="col-sm-12" style="border:1px solid #DAE2ED;border-top:none;padding-top:10px;background-color:#fff !important;">
	      	
	      	<div class="col-sm-3">
	      		<img itemprop="image" style="height: 200px;width: 55%;" src="{!! asset('assets/suppliers/9.jpg') !!}" alt="" />
	      	</div>
	      		<div class="col-sm-9" style="border-left: 2px solid #DAE2ED;">
	      		<p style="padding-top:20px;padding-bottom:20px;border-bottom: 2px solid #DAE2ED;text-align:center;font-size: 27px;">How to Select Suppliers</p>
	      		<div class="col-sm-12" style="border: 1px solid #DAE2ED;padding-bottom:20px;padding-top:20px;">
				<div id="myCarousel_1" class="carousel slide" data-ride="carousel">
		            <ol class="carousel-indicators">
		                <li data-target="#myCarousel" data-slide-to="0" style="border-radius:10px !important; border:0 none;" class="active"></li>
		                <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;" class=""></li>
		                <li data-target="#myCarousel" data-slide-to="2" style="border-radius:10px !important; border:0 none;" class=""></li>
		                <li data-target="#myCarousel" data-slide-to="3" style="border-radius:10px !important; border:0 none;" class=""></li>
		                <li data-target="#myCarousel" data-slide-to="4" style="border-radius:10px !important; border:0 none;" class=""></li>
		                <li data-target="#myCarousel" data-slide-to="5" style="border-radius:10px !important; border:0 none;" class=""></li>
		                
		                
		             </ol>
			         <div class="carousel-inner" role="listbox">
		                <div class="item active">
		                 	<img itemprop="image" style="height:480px;max-height:480px;width:100%;margin-left: -1px;" src="{!! asset('assets/suppliers/1.jpg') !!}" alt="bangladesh means business">
						       
		                </div>

		            
		              <div class="item">
		                 <!--  <img itemprop="image" style="height:480px;max-height:480px;width:100%;margin-left: -1px;" src="{!! asset('assets/suppliers/2.jpg') !!}" alt="bangladesh means business"> -->
		                 <div>
		                 <div class="col-sm-12">
		                 				<div class="col-sm-6">
		                 					<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/fontend/bdtdc-images/gold_supplier20120802.jpg') !!}" alt="Gold Suppliers">
		                 					<h3 style="font-size:18px;">Gold Suppliers</h3>
		                 				</div>
		                 				<div class="col-sm-6">
		                 					<img itemprop="image" style="height:80px;width:80px;margin-left: -1px;float:left;" src="{!! asset('assets/fontend/bdtdc-images/verified-supplier.png') !!}" alt="Assessed Suppliers">
		                 					<h3 style="font-size:18px;margin-top:8%;">Assessed Suppliers</h3>
		                 				</div>
		                 </div>
		                 <div class="col-sm-12">
		                 				<div class="col-sm-3">
		                 					
		                 				</div>
		                 				<div class="col-sm-6">
		                 					<img itemprop="image" style="height:80px;width:80px;margin-left: -1px;float:left;" src="{!! asset('assets/fontend/bdtdc-images/Buyer-protection-home.png') !!}" alt="Buyer Protection">
		                 					<h3 style="font-size:18px;margin-top:8%;">Buyer Protection</h3>
		                 				</div>
		                 				<div class="col-sm-3">
		                 					
		                 				</div>
		                 </div>
		                 <div class="col-sm-12" style="padding-bottom:100px;">
		                 				<div class="col-sm-6">
		                 					<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/gold/A&V-Check.png') !!}" alt="A&V Check">
		                 					<h3 style="font-size:18px;margin-top:8%;">A&V Check</h3>
		                 				</div>
		                 				<div class="col-sm-6">
		                 					<img itemprop="image" style="height:80px;width:80px;margin-left: -1px;float:left;" src="{!! asset('assets/helpcenter/Hand-Shake-Icon.png') !!}" alt="Hand Shake Icon">
		                 					<h3 style="font-size:18px; margin-top:8%;">Onsite Check</h3>
		                 				</div>
		                 </div>
		                 </div>
		                </div>
		                 <div class="item">
		                	<div>
		                  		<div class="col-sm-12" style="padding-bottom:100px;">
		                  				<div style="width:80%; display:block; padding-left:40px;">
		                  						<div style="width:100%; padding-bottom:40px;">
		                  							<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/fontend/bdtdc-images/verified-supplier.png') !!}" alt="Hand Shake Icon">
		                  							<h3 style="font-size:18px;">Assessed Suppliers</h3>
		                  						</div>
		                  						<div style="clear:both;display:block;">
		                  							<p style="font-size:14px; font-weight:normal; float:left; text-align:left; margin-top:30px;">Assessed Supplier is a BuyerSeller.Asia administration furnishing you with completely autonomous and third-party verification confirmation of your potential suppliers. We commission a few agencies in view of their worldwide notoriety and demonstrated believability to test the cases made by suppliers. For purchasers, this implies intuition and trust are constructed just in light of solid proof. Evaluated Supplier incorporates Assessment Reports Verified Videos and Verified Main Products.</p>
		                  						</div>
		                  							
		                  				</div>
		                  		</div>
		                  		</div>
		                </div>
		                 <div class="item">
		                 		<div>
		                  		<div class="col-sm-12" style="padding-bottom:100px;">
		                  				<div style="width:80%; display:block; padding-left:40px;">
		                  						<div style="width:100%; padding-bottom:40px;">
		                  							<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/gold/A&V-Check.png') !!}" alt="A&V Check">
		                  							<h3 style="font-size:18px;">A&V Check</h3>
		                  						</div>
		                  						<div style="clear:both;display:block;">
		                  							<p style="font-size:14px; font-weight:normal; float:left; text-align:left; margin-top:30px;">Onsite Check is a confirmation procedure for Gold Suppliers. The supplier's organization's sites are checked by BuyerSeller.Asia's staff to guarantee onsite operations subside there. The suppliers' lawful status and other associated data are then affirmed by a third-party verification agency.</p>
		                  						</div>
		                  							
		                  				</div>
		                  		</div>
		                  		</div>
		                </div>
		                 <div class="item">
		                 		<div>
		                  		<div class="col-sm-12" style="padding-bottom:100px;">
		                  				<div style="width:80%; display:block; padding-left:40px;">
		                  						<div style="width:100%; padding-bottom:40px;">
		                  							<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/helpcenter/Hand-Shake-Icon.png') !!}" alt="A&V Check">
		                  							<h3 style="font-size:18px;">Onsite Check</h3>
		                  						</div>
		                  						<div style="clear:both;display:block;">
		                  							<p style="font-size:14px; font-weight:normal; float:left; text-align:left; margin-top:30px;">Onsite Check is a confirmation procedure for Gold Suppliers. The supplier's organization's sites are checked by BuyerSeller.Asia's staff to guarantee onsite operations subside there. The suppliers' lawful status and other associated data are then affirmed by a third-party verification agency.</p>
		                  						</div>
		                  							
		                  				</div>
		                  		</div>
		                  		</div>
		                </div>
		                 <div class="item">
		                  <img itemprop="image" style="height:480px;max-height:480px;width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/verify-your-account.jpg') !!}" alt="veryfiy account">
		                </div>
		            
		            </div>
            
            
            </div>
				</div>
			<!-- 	<div class="col-sm-12" style="margin-top:20px;margin-bottom:20px;background: #F5F7FA none repeat scroll 0% 0%;padding-bottom:2%;">
					<div class="col-sm-6" style="padding-top:2%;">
						<p style="margin-bottom: -1px; font-weight: bold;">You may also like</p>
						<div class="col-sm-12" style="padding-left:4%;">
							<p><span style="font-size:11px;color: #666;">How do I know if a supplier is reliable?</span></p>
							<p><span style="font-size:11px;color: #666;">Are all suppliers verified on BuyerSeller.Asia?</span></p>
						</div>
						
					</div>
					<div class="col-sm-6">
						<div class="col-sm-12" style="padding-left:1%;padding-top: 8%;">
							<p><span style="font-size:11px;color: #666;">What are the signs of the scammers?</span></p>
						</div>
					</div>

	      	</div> -->
	      </div>
	      </div>

	    </div>
	    <div id="menu2" class="tab-pane fade">
	      <div class="col-sm-12" style="border:1px solid #DAE2ED;border-top:none;padding-top:10px;background-color:#fff !important;">
	      	
	      	<div class="col-sm-3">
	      		<img itemprop="image" style="height: 200px;width: 55%;" src="{!! asset('assets/suppliers/9.jpg') !!}" alt="" />
	      	</div>
	      		<div class="col-sm-9" style="border-left: 2px solid #DAE2ED;">
	      		<p style="padding-top:20px;padding-bottom:20px;border-bottom: 2px solid #DAE2ED;text-align:center;font-size: 27px;">How to Select Suppliers</p>
	      		<div class="col-sm-12" style="border: 1px solid #DAE2ED;padding-bottom:20px;padding-top:20px;">
				<div id="myCarousel_2" class="carousel slide" data-ride="carousel">
		            <ol class="carousel-indicators">
		                <li data-target="#myCarousel" data-slide-to="0" style="border-radius:10px !important; border:0 none;" class="active"></li>
		                <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;" class=""></li>
		                <li data-target="#myCarousel" data-slide-to="2" style="border-radius:10px !important; border:0 none;" class=""></li>
		                <li data-target="#myCarousel" data-slide-to="3" style="border-radius:10px !important; border:0 none;" class=""></li>
		                <li data-target="#myCarousel" data-slide-to="4" style="border-radius:10px !important; border:0 none;" class=""></li>
		                <li data-target="#myCarousel" data-slide-to="5" style="border-radius:10px !important; border:0 none;" class=""></li>
		                
		                
		             </ol>
			         <div class="carousel-inner" role="listbox">
		                <div class="item active">
		                 	<img itemprop="image" style="height:480px;max-height:480px;width:100%;margin-left: -1px;" src="{!! asset('assets/suppliers/1.jpg') !!}" alt="bangladesh means business">
						       
		                </div>

		            
		              <div class="item">
		                 <!--  <img itemprop="image" style="height:480px;max-height:480px;width:100%;margin-left: -1px;" src="{!! asset('assets/suppliers/2.jpg') !!}" alt="bangladesh means business"> -->
		                 <div>
		                 <div class="col-sm-12">
		                 				<div class="col-sm-6">
		                 					<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/fontend/bdtdc-images/gold_supplier20120802.jpg') !!}" alt="Gold Suppliers">
		                 					<h3 style="font-size:18px;">Gold Suppliers</h3>
		                 				</div>
		                 				<div class="col-sm-6">
		                 					<img itemprop="image" style="height:80px;width:80px;margin-left: -1px;float:left;" src="{!! asset('assets/fontend/bdtdc-images/verified-supplier.png') !!}" alt="Assessed Suppliers">
		                 					<h3 style="font-size:18px;margin-top:8%;">Assessed Suppliers</h3>
		                 				</div>
		                 </div>
		                 <div class="col-sm-12">
		                 				<div class="col-sm-3">
		                 					
		                 				</div>
		                 				<div class="col-sm-6">
		                 					<img itemprop="image" style="height:80px;width:80px;margin-left: -1px;float:left;" src="{!! asset('assets/fontend/bdtdc-images/Buyer-protection-home.png') !!}" alt="Buyer Protection">
		                 					<h3 style="font-size:18px;margin-top:8%;">Buyer Protection</h3>
		                 				</div>
		                 				<div class="col-sm-3">
		                 					
		                 				</div>
		                 </div>
		                 <div class="col-sm-12" style="padding-bottom:100px;">
		                 				<div class="col-sm-6">
		                 					<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/gold/A&V-Check.png') !!}" alt="A&V Check">
		                 					<h3 style="font-size:18px;margin-top:8%;">A&V Check</h3>
		                 				</div>
		                 				<div class="col-sm-6">
		                 					<img itemprop="image" style="height:80px;width:80px;margin-left: -1px;float:left;" src="{!! asset('assets/helpcenter/Hand-Shake-Icon.png') !!}" alt="Hand Shake Icon">
		                 					<h3 style="font-size:18px; margin-top:8%;">Onsite Check</h3>
		                 				</div>
		                 </div>
		                 </div>
		                </div>
		                 <div class="item">
		                	<div>
		                  		<div class="col-sm-12" style="padding-bottom:100px;">
		                  				<div style="width:80%; display:block; padding-left:40px;">
		                  						<div style="width:100%; padding-bottom:40px;">
		                  							<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/fontend/bdtdc-images/verified-supplier.png') !!}" alt="Hand Shake Icon">
		                  							<h3 style="font-size:18px;">Assessed Suppliers</h3>
		                  						</div>
		                  						<div style="clear:both;display:block;">
		                  							<p style="font-size:14px; font-weight:normal; float:left; text-align:left; margin-top:30px;">Assessed Supplier is a BuyerSeller.Asia administration furnishing you with completely autonomous and third-party verification confirmation of your potential suppliers. We commission a few agencies in view of their worldwide notoriety and demonstrated believability to test the cases made by suppliers. For purchasers, this implies intuition and trust are constructed just in light of solid proof. Evaluated Supplier incorporates Assessment Reports Verified Videos and Verified Main Products.</p>
		                  						</div>
		                  							
		                  				</div>
		                  		</div>
		                  		</div>
		                </div>
		                 <div class="item">
		                 		<div>
		                  		<div class="col-sm-12" style="padding-bottom:100px;">
		                  				<div style="width:80%; display:block; padding-left:40px;">
		                  						<div style="width:100%; padding-bottom:40px;">
		                  							<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/gold/A&V-Check.png') !!}" alt="A&V Check">
		                  							<h3 style="font-size:18px;">A&V Check</h3>
		                  						</div>
		                  						<div style="clear:both;display:block;">
		                  							<p style="font-size:14px; font-weight:normal; float:left; text-align:left; margin-top:30px;">Onsite Check is a confirmation procedure for Gold Suppliers. The supplier's organization's sites are checked by BuyerSeller.Asia's staff to guarantee onsite operations subside there. The suppliers' lawful status and other associated data are then affirmed by a third-party verification agency.</p>
		                  						</div>
		                  							
		                  				</div>
		                  		</div>
		                  		</div>
		                </div>
		                 <div class="item">
		                 		<div>
		                  		<div class="col-sm-12" style="padding-bottom:100px;">
		                  				<div style="width:80%; display:block; padding-left:40px;">
		                  						<div style="width:100%; padding-bottom:40px;">
		                  							<img itemprop="image" style="height:80px;width:80px;margin-left: -1px; float:left;" src="{!! asset('assets/helpcenter/Hand-Shake-Icon.png') !!}" alt="A&V Check">
		                  							<h3 style="font-size:18px;">Onsite Check</h3>
		                  						</div>
		                  						<div style="clear:both;display:block;">
		                  							<p style="font-size:14px; font-weight:normal; float:left; text-align:left; margin-top:30px;">Onsite Check is a confirmation procedure for Gold Suppliers. The supplier's organization's sites are checked by BuyerSeller.Asia's staff to guarantee onsite operations subside there. The suppliers' lawful status and other associated data are then affirmed by a third-party verification agency.</p>
		                  						</div>
		                  							
		                  				</div>
		                  		</div>
		                  		</div>
		                </div>
		                 <div class="item">
		                  <img itemprop="image" style="height:480px;max-height:480px;width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/verify-your-account.jpg') !!}" alt="veryfiy account">
		                </div>
		            
		            </div>
            
            
            </div>
				</div>
				<!-- <div class="col-sm-12" style="margin-top:20px;margin-bottom:20px;background: #F5F7FA none repeat scroll 0% 0%;padding-bottom:2%;">
					<div class="col-sm-6" style="padding-top:2%;">
						<p style="margin-bottom: -1px; font-weight: bold;">You may also like</p>
						<div class="col-sm-12" style="padding-left:4%;">
							<p><span style="font-size:11px;color: #666;">How do I know if a supplier is reliable?</span></p>
							<p><span style="font-size:11px;color: #666;">Are all suppliers verified on BuyerSeller.Asia?</span></p>
						</div>
						
					</div>
					<div class="col-sm-6">
						<div class="col-sm-12" style="padding-left:1%;padding-top: 8%;">
							<p><span style="font-size:11px;color: #666;">What are the signs of the scammers?</span></p>
						</div>
					</div>

	      	</div> -->
	      </div>
	      </div>
	    </div>
	</div>


	
</div>
@stop
@section('scripts')
<script type="text/javascript">
$(function() {
    /**
     * the element
     */
    var $ui 		= $('#ui_element');

    /**
     * on focus and on click display the dropdown,
     * and change the arrow image
     */
    $ui.find('.sb_input').bind('focus click',function(){
        $ui.find('.sb_down')
                .addClass('sb_up')
                .removeClass('sb_down')
                .andSelf()
                .find('.sb_dropdown')
                .show();
    });

    /**
     * on mouse leave hide the dropdown,
     * and change the arrow imagek
     */
    $ui.bind('mouseleave',function(){
        $ui.find('.sb_up')
                .addClass('sb_down')
                .removeClass('sb_up')
                .andSelf()
                .find('.sb_dropdown')
                .hide();
    });

    /**
     * selecting all checkboxes
     */
    $ui.find('.sb_dropdown').find('label[for="all"]').prev().bind('click',function(){
        $(this).parent().siblings().find(':checkbox').attr('checked',this.checked).attr('disabled',this.checked);
    });
});

var current_url = window.location.href;
var current_url_array = current_url.split('/');
if($.inArray('for_supplier', current_url_array) == 5){
    $('a[href="#forsupplier"]').click();
    // $('.for_supplier').click();
}
else{
    $('a[href="#forbuyer"]').click();
}

$('a[href="#forsupplier"]').click(function(){
    var base_url = window.location.origin;
    var for_supplier_link = $('div.mainmenu.pull-right ul li ul li a.for_supplier').attr('href');
    var for_supplier_link_param = for_supplier_link.split('/').slice(-1)[0];
    var get_data_url = base_url+'/help_center_supplier_data/suppliers_help_data/'+for_supplier_link_param;
    // alert (get_data_url);
    

});

// 
// alert (for_supplier_link);



</script>
@stop