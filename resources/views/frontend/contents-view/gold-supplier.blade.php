@extends('frontend.layouts.master-register')
  @section('page_css')
    <link property='stylesheet' href="{!! asset('css/gold-supplier.css',is_secured()) !!}" rel="stylesheet">
  @endsection
	@section('content')
	<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Gold Supplier</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                        
                    </ul>
            </div>
    
  </div>
	
  <div class="row">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active" style="border-radius:10px !important; border:0 none;"></li>
                <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;"></li>
               
                
             </ol>
	         <div class="carousel-inner" role="listbox" style="background-color: #dbe6e6;">
              <div class="item active">
                 			 <div class="gold-slide-image1">
                         
                                <div style="float:left; padding-left:6%;">
                                    <img itemprop="image" class="gold-iconnn" src="{!!asset('bdtdc-product-image/home-page/Gold-membership.png') !!}" alt="Gold supplier">
                                     <h1 class="gold-h1-title">Gold Supplier</h1>
                                </div>
                                <div>
                                <div style="clear:both;">
                                   
                                    <p class="golo-tit-pp" style="padding-left:7%;">This is a paid ranking intended for providers upon bdtdc.com who possess a good concern in making business with global purchasers </p>
                                </div>
                                
                                </div>
                            </div> 
                 				
                 			
                </div> 
                 <div class="item">
                  <div class="gold-slide-image2">
                 				<!-- <div class="buyer-ttt"><span  style="position:absolute; left:0; top:24px; color:#FE980F; font-weight:bold; font-size:22px; font-family:verdana;">Above 85% of Purchasers choose to deal with Gold Providers! </span>          
                                </div> -->
                                <div style="float:left; padding-left:6%;">
                                    <img itemprop="image" class="gold-iconnn" src="{!!asset('bdtdc-product-image/home-page/Gold-membership.png') !!}" alt="Gold supplier">
                                     <h1 class="gold-h1-title">Gold Supplier</h1>
                                </div>
                                <div>
                                <div style="clear:both;">
                                   
                                    <p class="golo-tit-pp" style="padding-left:7%;">Above 85% of Purchasers choose to deal with Gold Providers! </p>
                                </div>
                                
                                </div>
                 			</div>
                </div>                 
            </div> 
                <span class="sr-only">Previous</span>
                <span class="sr-only">Next</span>
            
            </div>
      </div>
			<div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 28px; border-bottom: 1px solid #ddd;">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xs-24">
							<h1 class="gold-desc" style="color: #000; font-size: 30px; line-height:40px;">What is Gold Supplier?</h1>
							<p class="gold-desc" style="color: #333; font-size:14px; font-weight:normal">Gold Supplier is a premium membership for suppliers on BuyerSeller. Members are provided with comprehensive ways to promote their products, maximizing product exposure and increasing return-on-investment.</p>
						
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 col-xs-24">
							<h1 class="gold-desc" style="color: #000; font-size: 30px;">How do I become a Gold Supplier?</h1>
							<p class="gold-desc" style="color: #333; font-size:14px; font-weight:normal">Gold Supplier is a paid membership on BuyerSeller. All Gold Suppliers in Bangladesh must pass our Onsite Check while those from other countries and regions must pass our A&V Check. <a itemprop="url" href="{{URL::to('verified/suppliers/info',null,is_secured())}}" target="_blank" style="font-size: 14px; color: color: #06c;">Learn about BuyerSeller’s supplier verification services.</a></p>
							<p class="gold-desc" style="color: #333; font-size:14px; font-weight:normal">Once approved, Gold Supplier members are authorized to display the Gold Supplier icon to demonstrate that their business has been verified by Bdtdc as a legally registered business. The number of years a member has been a Gold Supplier on BuyerSeller is displayed along with the logo and updated every year.
								
							</p>
						<p class="gold-desc" style="color: #333; font-size:14px; font-weight:normal">Are you a supplier?<a itemprop="url" href="{{URL::to('SupplierChannel/pages/suppliers_memebership',23,is_secured())}}" style="font-size: 14px; color: color: #06c;"> Find out more about the benefits of a Gold Supplier Membership here.</a></p>
							<p class="gold-desc" style="color: #999; font-size:14px; font-weight:normal">* BuyerSeller and its affiliates hereby expressly disclaim any warranty, express or implied, and liability whatsoever for any loss howsoever arising from or in   reliance upon any information, action or omission of any of its members on its websites.</p>
							<div class="more-link">
								
							</div>
						
					</div>
				
			</div>
@stop