
@extends('frontend.layouts.master-register')
@section('content')
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <ul class="top-path" style="padding-bottom: 8px;">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('BuyerChannel/pages/meet_suppliers',13,is_secured())}}" class="top-path-li-a"><span itemprop="name">Meet Suppliers</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Dhaka Sourceing Season</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
  </div>
  <div class="container-fluid padding_0">
  	<img itemprop="image"  style="width: 100%; display: block;" src="{!! asset('assets/fontend/bdtdc-images/source-season-banner.jpg',is_secured()) !!}" alt="source season banner" />
  </div>
 <div class="container">
<div class="row padding_0" style="margin-bottom: 20px;padding-bottom: 5%; background-color: #fff;">
	<div class="col-sm-12 col-md-12 col-lg-12 padding_0" style="background: #fff;">
			<div class="col-sm-7 col-md-7 col-lg-7">

				<div class="hd" style="border-bottom: 0 none; padding-top: 6%; padding-bottom:0;">What is Dhaka Sourcing Season?</div>
					<div class="season-p">
						Dhaka Sourcing Season is a tailored match making event during Dhaka Fair in Bangladesh, it's a series of business activities, highlighted by our refined and accurate matching service. During this sourcing season, BuyerSeller.Asia aims to create an unique occasion, for premium buyers to meet competent pre-matched, quality suppliers. Held successfully for several times, our Dhaka Sourcing Season received high praise by buyers and suppliers. This year, we will continue in presenting to you a memorable purchasing feast.
					</div>
					<div style="padding: 5% 0; margin:0 auto;">
                		<a itemprop="url" href="{{URL::to('apply-sourceing-meeting',null,is_secured())}}"> <div class="btn btn-primary"  style="padding-top:10px;border-radius: 5px !important; text-align:center;">Apply to meet suppliers</div></a>
              		 </div>
			</div>
			<div class="col-sm-5 col-md-5 col-lg-5">
						<div style="display: block;padding-top: 14%; padding-left: 20px;">
							<iframe  style="width: 100%; height: 230px" src="https://www.youtube.com/embed/n-beA3gmRsM"></iframe>
						</div>
			</div>
	</div>
		<div class="col-sm-12 col-md-12 col-lg-12" style="background: #fff;">
				<div class="review-slide-h3" style="border: 0 none; border-bottom: 3px solid #999;">
						Review Dhaka Sourcing Season
				</div>
				<div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-color: #fff;">
              <!-- Indicators -->
            
	         <div class="carousel-inner" role="listbox">
	         	<div class="item active">
                 			<div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 7px;">
	                 					<div class="col-sm-3 col-md-3 col-lg-3">
	                 						 <img itemprop="image"  class="souc-img-list" src="{!! asset('assets/fontend/bdtdc-images/sourceing-in-Bangladesh-1.jpg',is_secured()) !!}" alt="sourceing in Bangladesh" />
	                 						 <span class="visit-link">
	                 						 	<a itemprop="url"  href="#" style="text-decoration: none;color: #255E98;">
	                 						 		Source from Bangladesh, Visit BuyerSeller.Asia
	                 						 	</a>
	                 						 </span>
	                 					</div>
	                 					<div class="col-sm-3 col-md-3 col-lg-3">
	                 							 <img itemprop="image"  class="souc-img-list" src="{!! asset('assets/fontend/bdtdc-images/sourceing-in-Bangladesh-2.jpg',is_secured()) !!}" alt="sourceing in Bangladesh" />
	                 							  <span class="visit-link">
	                 						 	<a itemprop="url"  href="#" style="text-decoration: none;color: #255E98;">
	                 						 		Source from Bangladesh, Visit BuyerSeller.Asia
	                 						 	</a>
	                 						 </span>
	                 					</div>
	                 					<div class="col-sm-3 col-md-3 col-lg-3">
	                 						 <img itemprop="image"  class="souc-img-list" src="{!! asset('assets/fontend/bdtdc-images/sourceing-in-Bangladesh-3.jpg',is_secured()) !!}" alt="sourceing in Bangladesh" />
	                 						  <span class="visit-link">
	                 						 	<a itemprop="url"  href="#" style="text-decoration: none;color: #255E98;">
	                 						 		Source from Bangladesh, Visit BuyerSeller.Asia
	                 						 	</a>
	                 						 </span>
	                 					</div>
	                 					<div class="col-sm-3 col-md-3 col-lg-3">
	                 						 <img itemprop="image"  class="souc-img-list" src="{!! asset('assets/fontend/bdtdc-images/sourceing-in-Bangladesh-4.jpg',is_secured()) !!}" alt="sourceing in Bangladesh" />
	                 						  <span class="visit-link">
	                 						 	<a itemprop="url"  href="#" style="text-decoration: none;color: #255E98;">
	                 						 		Source from Bangladesh, Visit BuyerSeller.Asia
	                 						 	</a>
	                 						 </span>
	                 					</div>
	                 				 
	                 			</div>	
                </div> 
          		    <div class="item">
              			<div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 7px;">
	                 					<div class="col-sm-3 col-md-3 col-lg-3">
	                 						 <img itemprop="image"  class="souc-img-list" src="{!! asset('assets/fontend/bdtdc-images/sourceing-in-Bangladesh-5.jpg',is_secured()) !!}" alt="sourceing in Bangladesh" />
	                 						 <span class="visit-link">
	                 						 	<a itemprop="url" href="#" style="text-decoration: none;color: #255E98;">
	                 						 		Source from Bangladesh, Visit BuyerSeller.Asia
	                 						 	</a>
	                 						 </span>
	                 					</div>
	                 					<div class="col-sm-3 col-md-3 col-lg-3">
	                 							 <img itemprop="image"  class="souc-img-list" src="{!! asset('assets/fontend/bdtdc-images/sourceing-in-Bangladesh-6.jpg',is_secured()) !!}" alt="sourceing in Bangladesh" />
	                 							  <span class="visit-link">
	                 						 	<a itemprop="url" href="#" style="text-decoration: none;color: #255E98;">
	                 						 		Source from Bangladesh, Visit BuyerSeller.Asia
	                 						 	</a>
	                 						 </span>
	                 					</div>
	                 					<div class="col-sm-3 col-md-3 col-lg-3">
	                 						 <img itemprop="image"  class="souc-img-list" src="{!! asset('assets/fontend/bdtdc-images/sourceing-in-Bangladesh-7.jpg',is_secured()) !!}" alt="sourceing in Bangladesh" />
	                 						  <span class="visit-link">
	                 						 	<a itemprop="url" href="#" style="text-decoration: none;color: #255E98;">
	                 						 		Source from Bangladesh, Visit BuyerSeller.Asia
	                 						 	</a>
	                 						 </span>
	                 					</div>
	                 					<div class="col-sm-3 col-md-3 col-lg-3">
	                 						 <img itemprop="image"  class="souc-img-list" src="{!! asset('assets/fontend/bdtdc-images/sourceing-in-Bangladesh-8.jpg',is_secured()) !!}" alt="sourceing in Bangladesh" />
	                 						  <span class="visit-link">
	                 						 	<a itemprop="url" href="#" style="text-decoration: none;color: #255E98;">
	                 						 		Source from Bangladesh, Visit BuyerSeller.Asia
	                 						 	</a>
	                 						 </span>
	                 					</div>
	                 				
	                 			</div>	
                  
                </div>
            
                 
            
          
            </div>
            <ol class="carousel-indicators" style="margin-top:2%;">
                <li data-target="#myCarousel" data-slide-to="0" style="border-radius:10px !important; border:0 none;" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;"></li>
                
               
             </ol> 
            <!--  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="width: 0%; background-color: #fff;">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
                <span class="sr-only">Previous</span>
            
        	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="width: 0%; background-color: #fff;">
                 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> 
                <span class="sr-only">Next</span> -->
            
            </div>
				
		</div>
 </div>


@stop