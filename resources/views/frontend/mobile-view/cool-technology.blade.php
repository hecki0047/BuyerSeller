@extends('mobile-view.layout.master_m')
	@section('content')
	 <div class="row padding_0" style="background: #fff;">
        <div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
            <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block;">
            <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
            </a>
        </div>
    </div>
<div class="row padding_0">
		<div class="header-wrap-mess"><p class="cat-pr-list">US Warehouses</p></div>		
</div>
<div class="row padding_0" style="background: #fff;">
	 <div class="col-xs-12" style="border-bottom: 1px solid #ddd;">
	  <ul class="nav nav-tabs ware-pro">
		    <li class="active"><a data-toggle="tab" href="#cool">Cool Technology</a></li>
		    <li><a data-toggle="tab" href="#smart">Smart Home</a></li>
		    <li><a data-toggle="tab" href="#eco">Eco-Friendly</a></li>
	   </ul>
	 </div>
</div>
<div class="row padding_0">
	  		<div class="tab-content">
				    <div id="cool" class="tab-pane fade in active">
				    	<div class="col-xs-12 padding_0">
						<div>
								<img class="img-responsive" src="{!!asset('assets/images/cool-technology.jpg',is_secured())!!}">
							</div>
						</div>
				    	<div class="col-xs-12 padding_0">
            			<div class="product-list-limit">
            			<div class=" product-column-1">
            			 <a href="">
            				<div class="product-img-limit">
            				<img class="img-responsive product-img_img" src="{!! asset('assets/images/cool-tech-1.jpg',is_secured()) !!}">
            				</div>
            			</a>
            		    <div class="txt-content-limit">
                            <div class="product-title-cool-te">
            			     <a class="" href="">
            			      Amazon hot selling portable wireless levitating bluetooth speaker with LED light MIC 

            			      </a>
            			    </div>						
            			        <div class="product-price-limt">
            					<span>US $5.5 - 6.5</span>/ Set 
									</div>
						</div>
						</div>
    				<div class="product-column-1">
    					<a href="#">
	    					<div class="product-img-limit">
	    					<img class="img-responsive product-img_img" src="{!! asset('assets/images/cool-tech-2.jpg',is_secured()) !!}">
	    					</div>
	            		</a>
	    				
    				
    				   <div class="txt-content-limit">
                            <div class="product-title-cool-te">
            			     <a class="" href="#">
            			      new Wireless Earphone Bluetooth S530 4.0 Stereo Earbud For iPhone 5 6 6s 6plus For Sony For LG Earphones Earpiece mini headphone

            			      </a>
            			    </div>						
            			      <div class="product-price-limt">
            					<span>US $5.5 - 6.5</span>/ Set 
							</div>
						</div>
    							
    				</div>
            	</div>
               </div>
             </div>
            <div id="smart" class="tab-pane fade">
            		  <div class="col-xs-12 padding_0">
						 <div>
								<img class="img-responsive" src="{!!asset('assets/images/smart-home.jpg',is_secured())!!}">
							</div>
						</div>
						<div class="col-xs-12 padding_0">
            			<div class="product-list-limit">
            			<div class=" product-column-1">
            			 <a href="">
            				<div class="product-img-limit">
            				<img class="img-responsive product-img_img" src="{!! asset('assets/images/smart-home1.jpg',is_secured()) !!}">
            				</div>
            			</a>
            		    <div class="txt-content-limit">
                            <div class="product-title-cool-te">
            			     <a class="" href="">
            			      13in table stand cosmetic makeup interactive mirror / magic mirror

            			      </a>
            			    </div>						
            			        <div class="product-price-limt">
            					<span>US $5.5 - 6.5</span>/ Set 
									</div>
						</div>
						</div>
    				<div class="product-column-1">
    					<a href="#">
	    					<div class="product-img-limit">
	    					<img class="img-responsive product-img_img" src="{!! asset('assets/images/smart-home2.jpg',is_secured()) !!}">
	    					</div>
	            		</a>
	    				
    				
    				   <div class="txt-content-limit">
                            <div class="product-title-cool-te">
            			     <a class="" href="#">
            			      Outdoor remote control smart home home decoration items roller blinds

            			      </a>
            			    </div>						
            			      <div class="product-price-limt">
            					<span>US $5.5 - 6.5</span>/ Set 
							</div>
						</div>
    							
    				</div>
            	</div>
               </div>
			</div>
		  <div id="eco" class="tab-pane fade">
		  		<div class="col-xs-12 padding_0">
						 <div>
								<img class="img-responsive" src="{!!asset('assets/images/echo-frindly.jpg',is_secured())!!}">
							</div>
						<div class="col-xs-12 padding_0">
            			<div class="product-list-limit">
            			<div class=" product-column-1">
            			 <a href="">
            				<div class="product-img-limit">
            				<img class="img-responsive product-img_img" src="{!! asset('assets/images/echo-friend1.jpg',is_secured()) !!}">
            				</div>
            			</a>
            		    <div class="txt-content-limit">
                            <div class="product-title-cool-te">
            			     <a class="" href="">
            			      maple wood material smart balance electric skateboard electric scooters cheap 450cc dirt bike

            			      </a>
            			    </div>						
            			        <div class="product-price-limt">
            					<span>US $5.5 - 6.5</span>/ Set 
									</div>
						</div>
						</div>
    				<div class="product-column-1">
    					<a href="#">
	    					<div class="product-img-limit">
	    					<img class="img-responsive product-img_img" src="{!! asset('assets/images/echo-friend2.jpg',is_secured()) !!}">
	    					</div>
	            		</a>
	    				
    				
    				   <div class="txt-content-limit">
                            <div class="product-title-cool-te">
            			     <a class="" href="#">
            			      biggest capacity laptop 50000mah power bank

            			      </a>
            			    </div>						
            			      <div class="product-price-limt">
            					<span>US $5.5 - 6.5</span>/ Set 
							</div>
						</div>
    							
    				</div>
            	</div>
               </div>
				</div>
		 </div>
		</div>
	  </div>
@stop