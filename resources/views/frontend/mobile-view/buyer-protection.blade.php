@extends('mobile-view.layout.master_m')
	@section('content')
<section>
<div class="container">
	<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom:8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url"  href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url"  href="{{URL::to('help-center',null,is_secured())}}" class="top-path-li-a">Help Center<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url"  href="{{URL::to('BuyerChannel/pages/trade_assurance',5),is_secured()}}" class="top-path-li-a">Buyer Protection<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
	<div class="row">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators" style="bottom: -10px;">
                <li data-target="#myCarousel" data-slide-to="0" style="border-radius:10px !important; border:0 none;" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;" ></li>
                <li data-target="#myCarousel" data-slide-to="2" style="border-radius:10px !important; border:0 none;" ></li>
                
             </ol>
	         <div class="carousel-inner" role="listbox">
                <div class="item active">
                 <img itemprop="image" style="width:100%;margin-left: -1px;" src="{!!asset('assets/fontend/bdtdc-images/buyer-protection.jpg',is_secured())!!}" alt="buyer protection">
                </div>
              <div class="item">
               <img itemprop="image" style="width:100%;margin-left: -1px;" src="{!!asset('assets/fontend/bdtdc-images/Dispatching-systems.jpg',is_secured())!!}" alt="buyer protection">
                
               </div>
            
                <div class="item">
                  <img itemprop="image" style="width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/on-time-delivery.jpg',is_secured()) !!}" alt="on time delivery">
                </div>
            
            </div>
            
         </div>
</div>
</div>
</section>
<section>
<div class="container">
<div class="row padding_0" style="background-color: #fff; margin-bottom: 28px; padding-bottom: 28px;border-bottom:1px solid rgba(0,0,0,.1)">
	<div class="col-sm-12 col-md-12 col-lg-12" style=" border-bottom: 1px solid #ccc;">
		<h4 class="glbao-h4" style="font-size: 14px; padding: 0;">Ways to trade on Bdtdc.com</h4>
	</div>
	<div class="col-sm-12 col-md-12 col-lg-12">
	<ul class="step-ul" style="padding-top: 4%; padding-bottom: 4%;">
				 		<li class="step-ul-li-bdtp">
				 			<div  style="width: 100%; display: block;">
				 				<img class="img-responsive" itemprop="image"  src="{!! asset('assets/fontend/bdtdc-images/Buyer-Places-Order.jpg',is_secured()) !!}" alt="buyer places order">
				 			</div>
				 			
				 		</li>
					 		<li class="step-ul-li-bdtp">
					 		
					 			<div  style="width: 100%; display: block;">
					 				<img itemprop="image" class="img-responsive"  src="{!! asset('assets/fontend/bdtdc-images/Buyer-pays-to-Bdtdc.jpg',is_secured()) !!}" alt="buyer pays to bdtdc">
					 			</div>
					 			
					 		</li>
					 		<li class="step-ul-li-bdtp">
					 			
					 			<div  style="width: 100%; display: block;">
					 				<img itemprop="image" class="img-responsive"  src="{!! asset('assets/fontend/bdtdc-images/Bdtdc-Pays-to-Manufacturer.jpg',is_secured()) !!}" alt="manufacturer fulfill order">
					 			</div>
					 			
					 		</li>
					 		<li class="step-ul-li-bdtp">
					 			
					 			<div style="width: 100%; display: block;">
					 				<img itemprop="image" class="img-responsive"  src="{!! asset('assets/fontend/bdtdc-images/Buyer-Receives-Order.jpg',is_secured()) !!}" alt="buyer receives order">
					 			</div>
					 		
					 		</li>
					 		<li class="step-ul-li-bdtp">
					 			
					 			<div style="width: 100%; display: block;padding: 0;margin: 0;">
					 				<img itemprop="image" class="img-responsive"  src="{!! asset('assets/fontend/bdtdc-images/Manufacturer-Fulfill-Order.jpg',is_secured()) !!}" alt="Bdtdc Pays to Manufacturer">
					 			</div>
					 			

					 </li>
			</ul>
					
		</div>
	<div>
		<div class="col-sm-12 col-md-12 col-lg-12">
					 <p class="payment"><img itemprop="image" style="margin: 0;"  src="{!! asset('assets/fontend/bdtdc-images/buyer-affirms-order.png',is_secured()) !!}" alt="confirms order"><span style="background: #EFF6FE;padding: 5px 10px;  line-height:20px; margin-left: 10px; font-size: 14px;">Buyerseller.asia holds payment until buyer affirms order</span></p>
					</div>
		</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					
					<div class="col-sm-10 col-md-11 col-lg-11">
					<p class="how-trade-p">Buyers who wish to trade with Buyer Seller suppliers can directly submit order requests on

buyerseller.asia. Buyers can pay safely right after they place an order with our highly secured

payment method such as PayPal. Information such as buyer’s payment or bank account

information will be kept confidential and shall not be provided to suppliers. Buyerseller.asia will

hold the payment until buyer confirms receipt online. Purchasers can track the most recent

request status online without any hassle while suppliers are completing with their orders

received.</p>
		</div>
</div>
				<div class="col-sm-12 col-md-12 col-lg-12"  style=" border-bottom: 1px solid #ccc;">
							<h4 class="glbao-h4" style="padding-left: 25px; font-size: 18px;">Guarantees of Three</h4>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12" style="    border-bottom: 1px solid #ccc;">
						<div class="col-sm-2 col-md-1 col-lg-1">
							<img itemprop="image" class="step-img"  src="{!! asset('assets/fontend/bdtdc-images/Payment.png',is_secured()) !!}" alt="Payment">
						</div>
						<div class="col-sm-10 col1-md-11 col-lg-11">
							<h4 class="glbao-h4" style="border:0 none; padding-left: 14px; padding-bottom: 0;font-size: 18px;">Payment</h4>
							<p class="how-trade-p">To pay for the order safely, buyer can use the buyer seller payment method. The bank account

information and payment will be kept confidential from suppliers.</p>
							
						</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12" style="    border-bottom: 1px solid #ccc;">
						<div class="col-sm-2 col-md-1 col-lg-1">
							<img itemprop="image" class="step-img"  src="{!! asset('assets/fontend/bdtdc-images/Compensate.png',is_secured()) !!}" alt="Compensate">
						</div>
						<div class="col-sm-10 col-md-11 col-lg-11">
							<h4 class="glbao-h4" style="border:0 none; padding-left: 14px; padding-bottom: 0;font-size: 18px;">Compensate on not receiving requested products</h4>
							<p class="how-trade-p">If the supplier fails to deliver the goods on time, buyer has the right to ask for compensation.</p>
							
						</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12" style="    border-bottom: 1px solid #ccc;">
						<div class="col-sm-2 col-md-1 col-lg-1">
							<img itemprop="image" class="step-img" src="{!! asset('assets/fontend/bdtdc-images/Protection-Policy.png',is_secured()) !!}" alt="Protection Policy">
						</div>
						<div class="col-sm-10 col-md-11 col-lg-11">
							<h4 class="glbao-h4" style="border:0 none; padding-left: 14px; padding-bottom: 0;font-size: 18px;">Our Protection Policy</h4>
							<p class="how-trade-p">During the delivery time as promised by the supplier and Logistics Protection Period (90 days by

Air/120 days by Ship), buyer can apply for Full or Partial Refund for different reasons.</p>
							
						</div>
				</div>
<div class="col-sm-12 col-md-12 col-lg-12"  style=" border-bottom: 1px solid #ccc;">
							<h4 class="glbao-h4" style="padding-left: 25px;font-size: 18px;">How to protect buyer?</h4>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="col-sm-4 col-md-4 col-lg-4 padding_0">
				<div class="protect-buyer-list">
					<div class="protect-Buyer-figure">
						<img itemprop="image"  width="90" height="60" src="{!! asset('assets/fontend/bdtdc-images/Quick-delivery.png',is_secured()) !!}" alt="Swift Dispatch">
								</div>
								<p>
									<strong style="font-weight: 700; font-size: 14px; display: block;">Quick Delivery</strong>
												<span class="protect-Buyer-span">
													If suppliers fail to dispatch products within their committed time after the order was placed,

buyer has the right to submit application for Full Refund.
												</span>
												<!-- <cite class="protect-Buyer-cite">
													<a itemprop="url"  href="#">Learn More ►</a>
												</cite> -->
											</p>
											
						</div>
									
					</div>
		<div class="col-sm-4 col-md-4 col-lg-4 padding_0">
			<div class="protect-buyer-list">
				<div class="protect-Buyer-figure">
				<img itemprop="image" width="90" height="60"  src="{!! asset('assets/fontend/bdtdc-images/On-time-Delivery.png',is_secured()) !!}" alt="delivery on time">
						</div>
					<p>
				<strong style="font-weight: 700; font-size: 14px;display: block;">On-time Delivery</strong>
				<span class="protect-Buyer-span">
					Buyer can apply for Full or Partial Refund for different reasons within the delivery period as committed

by the supplier and Logistics Protection Period (90 days by Air/120 days by Ship).
					</span>
				<!-- <cite class="protect-Buyer-cite">
						<a itemprop="url"  href="#">Learn More ►</a>
									</cite> -->
											</p>
									</div>
									
								</div>
		<div class="col-sm-4 col-md-4 col-lg-4 padding_0">
					<div class="protect-buyer-list">
							<div class="protect-Buyer-figure">
								<img itemprop="image" width="90" height="60" src="{!! asset('assets/fontend/bdtdc-images/Double-Check-Protection.png',is_secured()) !!}" alt="Double Check Protection">
							</div>
											<p>
												<strong style="font-weight: 700;font-size: 14px;display: block;">Double-Check Protection</strong>
													<span class="protect-Buyer-span">
														If the products supplied by the supplier doesn’t match the product details or have quality problem after signing for the way bill, the buyer has the right to submit application for Return &amp; Refund before confirming the receipt through online process.
													</span>
													<!-- <cite class="protect-Buyer-cite">
													<a itemprop="url"  href="#">Learn More ►</a>
												</cite> -->
											</p>
					</div>						
		</div>
</div> 
<div class="col-sm-12 col-md-12 col-lg-12">
		<div class="button-line"><a  style="width: 250px; display: block; margin: 0 auto;" itemprop="url"  href="{{URL::to('order-protect',null,is_secured())}}" class="btn btn-primary" target="_blank" style="border-radius: 5px !important;font-size: 10px !important; background-color: #255E98; border-radius: 5px !important; padding: 8px 10px; ">Order with Buyer Protection</a></div>
	</div>
</div>
</div>
</section>
@stop