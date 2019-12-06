@extends('mobile-view.layout.master_m')
	@section('content')
	<div class="row padding_0">
			<div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
                    <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block; padding-left: 0;">
                    <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
                    </a>
         </div>
           <div class="col-xs-12 padding_0">
         				 <div class="cat-pr-list" id="one">Product This Month</div>
            </div>
            <div class="col-xs-12 padding_0">
            			<div class="product-list-limit">
            						<div class="product-column-2">
            							<a href="">
            								<div class="product-img-limit">
            										<img class="product-img_img" src="{!! asset('resources/assets/fontend/images/low-price-chinajpg.jpg',is_secured()) !!}">
            								</div>
            							</a>
            								<div class="txt-content-limit">
            									<a class="title-wrapper-limt" href="">
            									latest child clothes set fashion kids clothing set baby girls 3 pieces cotton outfit wholesale girls clothes set for fall

													<span class="ripple-effect" style="width: 313.5px; height: 313.5px; top: -142px; left: -1px;"></span>
            									</a>
            									<div class="product-moq">
            										 MOQ:<span>20 Sets</span>
                                                     
            									</div>
            									<div class="product-price-limt">
            										<span>US $5.5 - 6.5</span>/ Set 
            									</div>
            								</div>
            						</div>
            						<div class="product-column-2">
            						    <a href="">
            									<div class="product-img-limit">
            									      <img class="product-img_img" src="{!! asset('resources/assets/fontend/images/low-price-chinajpg.jpg',is_secured()) !!}">
            								    </div>
            								</a>
            								    <div class="txt-content-limit">
            								    <a class="title-wrapper-limt" href="">
            									  latest child clothes set fashion kids clothing set baby girls 3 pieces cotton outfit wholesale girls clothes set for fall
            									  <span class="ripple-effect" style="width: 313.5px; height: 313.5px; top: -142px; left: -1px;"></span>
            									</a>
            									<div class="product-moq">
            										 MOQ:<span>20 Sets</span>
                                                     
            									</div>
            									<div class="product-price-limt">
            										<span>US $5.5 - 6.5</span>/ Set 
            									</div>
            								</div>
            							
            						</div>
            			</div>
            </div>
     </div>
        
 @stop