@extends('fontend.master2')
	@section('content')
	<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;">
                        <li class="top-path-li"><a href="http://bdtdc.com" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"><a href="http://bdtdc.com/FooterPage/pages/Help_Center/19" class="top-path-li-a">Help Center<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"><a href="http://bdtdc.com/BuyerChannel/pages/trade_assurance/5" class="top-path-li-a">Buyer Protection<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
 </div>
  <div class="container-fluid padding_0">
  		<div class="slider-popular">
  							<div class="container">
  								<div class="row">
  									<div class="col-sm-12 col-md-12">
  											<div class="ppp-title">
  											<h1 style="color: #fff; text-align: center;width: 100%; display: block; margin-top: 2%;">Smarter Ways to Source</h1>
  										</div>
  									</div>
  								<div class="col-sm-12 col-md-12">
  									<div class="search-query">
 
  												 <div class="file-ex">
  													<i class="fa fa-file-text-o" style="padding-right: 20px; font-size: 36px;float: left;"></i>Instant Quote
  												</div> 
  												<div class="file-ex file-ex2" style="background-color: #255E98;">
  													Purchasing Agents
  												</div> 
  									</div>
  									</div>
  									<div class="col-sm-12 col-md-12">
  												<div class="key-cat">
  															<div style="" class="col-xs-12 padding_0">
																	<form class="form" action="http://www.bdtdc.com/search_product" method="post">
																	<input type="hidden" name="_token" value="r36v0zIYPSEqGbuTXzI3LMW0XsiNnJGOuzLC5PWm">
																		<div class="col-xs-2 padding_0" onMouseOver='category_show()'><i class="fa fa-list" style="font-size: 30px; color: #999;position: absolute; padding-top: 9%; margin-left: 10%;"></i>
																			<button id="category-show" style="height:44px;border-radius: 5px!important;padding-left: 20%;" class="form-control category-show" name="search">
																					Category
																			</button> 
																		</div> 
																		<div class="col-xs-6 padding_0">
																			<input style="height:44px;border-radius: 5px!important;" name="key" class="form-control" type="text" placeholder="Enter English Keyword to Search . . ." required="required">
																		</div>
																		<div class="col-xs-4 padding_0">
																			<div class="col-md-5 col-sm-5 col-xs-5 padding_0">
																			<input type="submit" style="background:#19446F;border-radius: 5px !important;" class="btn btn-primary btn-lg pull-left" value="Search">
																			</div>
																			
																			<div class="col-md-7 col-sm-7 col-xs-7" style="border-radius: 5px !important;">
																			<a href="http://www.bdtdc.com/get_qutations"><span>
																				<button type="button" class="btn btn-primary" text-align="center" style="padding-top:10px;border-radius: 5px !important;">Submit Buying Request</button>
																			</span></a>
																			</div>
																		</div></form>
																	
																</div>
								<div class="col-sm-12 col-lg-12 col-md-12 padding_0">
											<div class="col-sm-9 col-lg-9 col-md-9 padding_0" style="background: #fff;" >
													<div id="product-category">
															<ul class="cat-list-product" onMouseOver='category_show()' onMouseOut='hide_category()'>
																<?php if ($categorys) { ?>
																	<?php foreach ($categorys as $category) { ?>
													        <li class="cat-list-product-li"><a href="{{ URL::to($category['name'],$category['category_id'],is_secured()) }}"  class="cat-list-product-li-a" target="_blank"> <?php echo $category[ 'name']; ?></a></li>
															 <?php } ?>
															  <?php } ?>

																<!-- <li class="cat-list-product-li" ><a href="#" class="cat-list-product-li-a">Automobiles & Motorcycles</a></li>
																<li class="cat-list-product-li"><a href="#" class="cat-list-product-li-a">Food & Beverage</a></li>
																<li class="cat-list-product-li"><a href="#" class="cat-list-product-li-a">Furniture</a></li>
																<li class="cat-list-product-li"><a href="#" class="cat-list-product-li-a">Health & Medical</a></li>
																<li class="cat-list-product-li"><a href="#" class="cat-list-product-li-a">Consumer Electronics</a></li>
																<li class="cat-list-product-li"><a href="#" class="cat-list-product-li-a">Consumer Electronics</a></li>
																<li class="cat-list-product-li"><a href="#" class="cat-list-product-li-a">Consumer Electronics</a></li>
																<li class="cat-list-product-li"><a href="#" class="cat-list-product-li-a">Consumer Electronics</a></li> -->
															</ul>
														
													</div>
												
											</div>
													<div class="col-sm-3 col-lg-3 col-md-3">
														
													</div>
										</div>

  									</div>
  									</div>
  								
  								</div>
  							</div>
  								
  								
  						
  		</div>
					
</div>
	<div class="container">
			<div class="row padding_0" style="background: #fff;">
						<div class="col-lg-12">
								<div class="col-lg-4 col-xs-12 col-sm-4" style="border:1px solid #ddd;border-left: 0 none;">
										<div class="popu-lg-img">
											 <img style=" width: 98%; display: block;height: 310px; margin-top: 10px;"  src="{!! asset('assets/fontend/bdtdc-images/organic-farming.jpg',is_secured()) !!}" alt="" />
											 <div>
											 	<p class="name-ppp">Machinery</p>
											    <p class="count">583147<span class="count-span"> Instant Quotes</span></p>
											 </div>
											 
										</div>
									
								</div>
								<div class="col-lg-4 col-xs-12 col-sm-4" style="border:1px solid #ddd;border-left: 0 none;">
									<div class="popu-lg-img">
										<div class="ppp-product-row">
											<div class="col-sm-12 padding_0">
													<div class="col-sm-6">
														<p class="populer-img-title-list">Automobiles &amp; Motorcycles</p>
														<p class="count">282669<span class="count-span"> Instant Quotes</span></p>
													</div>
													<div class="col-sm-6">
														<div>
					        							<img class="" style="width: 145px; height: 145px"  src="{!! asset('assets/fontend/bdtdc-images/product_photo_AZhDirr4Eb.jpg',is_secured()) !!}">
					        							</div>
													</div>
											</div>
									</div>
									<div class="ppp-product-row">
										<div class="col-sm-12">
												<div class="col-sm-6">
													<p class="populer-img-title-list">Automobiles &amp; Motorcycles</p>
													<p class="count">282669<span class="count-span"> Instant Quotes</span></p>
												</div>
												<div class="col-sm-6">
													<div>
				        							<img class="" style="width: 145px;  height: 145px"  src="{!! asset('assets/fontend/bdtdc-images/product_photo_8ck4we3wWg.jpg',is_secured()) !!}">
				        							</div>
												</div>
										</div>
										</div>
										<div class="ppp-product-row" style="border-bottom: 0 none;">
										<div class="col-sm-12">
												<div class="col-sm-6">
													<p class="populer-img-title-list">Automobiles &amp; Motorcycles</p>
													<p class="count">282669<span class="count-span"> Instant Quotes</span></p>
												</div>
												<div class="col-sm-6">
													<div>
				        							<img class="" style="width: 145px;  height: 145px"  src="{!! asset('assets/fontend/bdtdc-images/product_photo_7.jpg',is_secured()) !!}">
				        							</div>
												</div>
										</div>
										</div>
									
									</div>
										
								</div>
								<div class="col-lg-4 col-xs-12 col-sm-4" style="border:1px solid #ddd;border-left: 0 none;">
										<div class="popu-lg-img">
										<div class="ppp-product-row">
											<div class="col-sm-12 padding_0">
													<div class="col-sm-6">
														<p class="populer-img-title-list">Automobiles &amp; Motorcycles</p>
														<p class="count">282669<span class="count-span"> Instant Quotes</span></p>
													</div>
													<div class="col-sm-6">
														<div>
					        							<img class="" style="width: 145px; height: 145px"  src="{!! asset('assets/fontend/bdtdc-images/product_photo_LsvZ5oxlnY.jpg',is_secured()) !!}">
					        							</div>
													</div>
											</div>
									</div>
									<div class="ppp-product-row">
										<div class="col-sm-12">
												<div class="col-sm-6">
													<p class="populer-img-title-list">Automobiles &amp; Motorcycles</p>
													<p class="count">282669<span class="count-span"> Instant Quotes</span></p>
												</div>
												<div class="col-sm-6">
													<div>
				        							<img class="" style="width: 145px;"  src="{!! asset('assets/fontend/bdtdc-images/product_photo_vfHuUzlG14.jpg',is_secured()) !!}">
				        							</div>
												</div>
										</div>
										</div>
										<div class="ppp-product-row" style="border-bottom: 0 none;">
										<div class="col-sm-12">
												<div class="col-sm-6">
													<p class="populer-img-title-list">Automobiles &amp; Motorcycles</p>
													<p class="count">282669<span class="count-span"> Instant Quotes</span></p>
												</div>
												<div class="col-sm-6">
													<div>
				        							<img class="" style="width: 145px; height: 145px"  src="{!! asset('assets/fontend/bdtdc-images/product_photo_BMYhOZrvq6.jpg',is_secured()) !!}">
				        							</div>
												</div>
										</div>
										</div>
									
									</div>
									
								</div>
									
								</div>
						</div>
					<div class="row padding_0">
						<div class="group-title">
		                    Recommmended items with ready instant quotes:
		                  </div>
					</div>
			<div class="row padding_0" style="background: #fff;margin-bottom: 10px;">
				<div class="col-sm-12 col-lg-12 col-md-12">
								<div class="col-sm-3 col-md-3 col-lg-3" style="border:1px solid #ddd; border-left: 0 none;">
										<div class="product-box" style="width: 100%; border: 0 none;">
						                       <div class="cat-product-img-box">
						                              <a target="_blank" href="http://www.bdtdc.com/product_details/2698"><img style="height: 225px;max-height: 220px;" class="product-fassion-img" src="http://www.bdtdc.com/uploads/product_photo_EhLjxTqQag.jpeg" alt="fashion-dress"></a>
						                       </div>
						                       <a target="_blank" href="http://www.bdtdc.com/product_details/2698">
						                             <div class="cat-item-title">bitter</div>

						                       </a>
						                       <div class="dollar-price"><span class="dollar">US $2</span> / Kilo</div>
						                       <div class="item-views"><span class="online-view">1000+ </span>views 
						                        
						                       </div>
						                      
						                       <div style="padding-left: 10px;padding-bottom: 1%" class="product-view-extend">
						                            <a data-product_id="2698" data-supplier_id="987" class="btn btn-primary btn-join contact_supplier"><i class="fa fa-envelope-o"></i> Contact Supplier</a>
						                       </div>                      
						                </div>
									
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3" style="border:1px solid #ddd; border-left: 0 none;">
											<div class="product-box" style="width: 100%;border: 0 none;">
						                       <div class="cat-product-img-box">
						                              <a target="_blank" href="http://www.bdtdc.com/product_details/2698"><img style="height: 225px;max-height: 220px;" class="product-fassion-img" src="http://www.bdtdc.com/uploads/product_photo_4eHUeKI4ej.jpg" alt="fashion-dress"></a>
						                       </div>
						                       <a target="_blank" href="http://www.bdtdc.com/product_details/2698">
						                             <div class="cat-item-title">bitter</div>

						                       </a>
						                       <div class="dollar-price"><span class="dollar">US $2</span> / Kilo</div>
						                       <div class="item-views"><span class="online-view">1000+ </span>views 
						                        
						                       </div>
						                      
						                       <div style="padding-left: 10px;padding-bottom: 1%" class="product-view-extend">
						                            <a data-product_id="2698" data-supplier_id="987" class="btn btn-primary btn-join contact_supplier"><i class="fa fa-envelope-o"></i> Contact Supplier</a>
						                       </div>                      
						                </div>
									
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3" style="border:1px solid #ddd; border-left: 0 none;">
											<div class="product-box" style="width: 100%;border: 0 none;">
						                       <div class="cat-product-img-box">
						                              <a target="_blank" href="http://www.bdtdc.com/product_details/2698"><img style="height: 225px;max-height: 220px;" class="product-fassion-img" src="http://www.bdtdc.com/uploads/product_photo_XLIZGmeqJ8.jpg" alt="fashion-dress"></a>
						                       </div>
						                       <a target="_blank" href="http://www.bdtdc.com/product_details/2698">
						                             <div class="cat-item-title">bitter</div>

						                       </a>
						                       <div class="dollar-price"><span class="dollar">US $2</span> / Kilo</div>
						                       <div class="item-views"><span class="online-view">1000+ </span>views 
						                        
						                       </div>
						                      
						                       <div style="padding-left: 10px;padding-bottom: 1%" class="product-view-extend">
						                            <a data-product_id="2698" data-supplier_id="987" class="btn btn-primary btn-join contact_supplier"><i class="fa fa-envelope-o"></i> Contact Supplier</a>
						                       </div>                      
						                </div>
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3" style="border:1px solid #ddd; border-left: 0 none;">

											<div class="product-box" style="width: 100%;border: 0 none;">
						                       <div class="cat-product-img-box">
						                              <a target="_blank" href="http://www.bdtdc.com/product_details/2698"><img style="height: 225px;max-height: 220px;" class="product-fassion-img" src="http://www.bdtdc.com/uploads/product_photo_mPExVpXQuk.jpg" alt="fashion-dress"></a>
						                       </div>
						                       <a target="_blank" href="http://www.bdtdc.com/product_details/2698">
						                             <div class="cat-item-title">bitter</div>

						                       </a>
						                       <div class="dollar-price"><span class="dollar">US $2</span> / Kilo</div>
						                       <div class="item-views"><span class="online-view">1000+ </span>views 
						                        
						                       </div>
						                      
						                       <div style="padding-left: 10px;padding-bottom: 1%" class="product-view-extend">
						                            <a data-product_id="2698" data-supplier_id="987" class="btn btn-primary btn-join contact_supplier"><i class="fa fa-envelope-o"></i> Contact Supplier</a>
						                       </div>                      
						                </div>
									
								</div>
					</div>
				</div>
				<div class="row padding_0" style="background: #fff; margin-bottom: 10px;">
				<div class="col-sm-12 col-lg-12 col-md-12">
								<div class="col-sm-3 col-md-3 col-lg-3" style="border:1px solid #ddd; border-left: 0 none;">
										<div class="product-box" style="width: 100%; border: 0 none;">
						                       <div class="cat-product-img-box">
						                              <a target="_blank" href="http://www.bdtdc.com/product_details/2698"><img style="height: 225px;max-height: 220px;" class="product-fassion-img" src="http://www.bdtdc.com/uploads/product_photo_8Ul5dScDed.jpg" alt="fashion-dress"></a>
						                       </div>
						                       <a target="_blank" href="http://www.bdtdc.com/product_details/2698">
						                             <div class="cat-item-title">bitter</div>

						                       </a>
						                       <div class="dollar-price"><span class="dollar">US $2</span> / Kilo</div>
						                       <div class="item-views"><span class="online-view">1000+ </span>views 
						                        
						                       </div>
						                      
						                       <div style="padding-left: 10px;padding-bottom: 1%" class="product-view-extend">
						                            <a data-product_id="2698" data-supplier_id="987" class="btn btn-primary btn-join contact_supplier"><i class="fa fa-envelope-o"></i> Contact Supplier</a>
						                       </div>                      
						                </div>
									
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3" style="border:1px solid #ddd; border-left: 0 none;">
											<div class="product-box" style="width: 100%;border: 0 none;">
						                       <div class="cat-product-img-box">
						                              <a target="_blank" href="http://www.bdtdc.com/product_details/2698"><img style="height: 225px;max-height: 220px;" class="product-fassion-img" src="http://www.bdtdc.com/uploads/product_photo_x9FPyvlPW7.jpg" alt="fashion-dress"></a>
						                       </div>
						                       <a target="_blank" href="http://www.bdtdc.com/product_details/2698">
						                             <div class="cat-item-title">bitter</div>

						                       </a>
						                       <div class="dollar-price"><span class="dollar">US $2</span> / Kilo</div>
						                       <div class="item-views"><span class="online-view">1000+ </span>views 
						                        
						                       </div>
						                      
						                       <div style="padding-left: 10px;padding-bottom: 1%" class="product-view-extend">
						                            <a data-product_id="2698" data-supplier_id="987" class="btn btn-primary btn-join contact_supplier"><i class="fa fa-envelope-o"></i> Contact Supplier</a>
						                       </div>                      
						                </div>
									
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3" style="border:1px solid #ddd; border-left: 0 none;">
											<div class="product-box" style="width: 100%;border: 0 none;">
						                       <div class="cat-product-img-box">
						                              <a target="_blank" href="http://www.bdtdc.com/product_details/2698"><img style="height: 225px;max-height: 220px;" class="product-fassion-img" src="http://www.bdtdc.com/uploads/product_photo_XkuscrKqiE.jpg" alt="fashion-dress"></a>
						                       </div>
						                       <a target="_blank" href="http://www.bdtdc.com/product_details/2698">
						                             <div class="cat-item-title">bitter</div>

						                       </a>
						                       <div class="dollar-price"><span class="dollar">US $2</span> / Kilo</div>
						                       <div class="item-views"><span class="online-view">1000+ </span>views 
						                        
						                       </div>
						                      
						                       <div style="padding-left: 10px;padding-bottom: 1%" class="product-view-extend">
						                            <a data-product_id="2698" data-supplier_id="987" class="btn btn-primary btn-join contact_supplier"><i class="fa fa-envelope-o"></i> Contact Supplier</a>
						                       </div>                      
						                </div>
								</div>
								<div class="col-sm-3 col-md-3 col-lg-3" style="border:1px solid #ddd; border-left: 0 none;">

											<div class="product-box" style="width: 100%;border: 0 none;">
						                       <div class="cat-product-img-box">
						                              <a target="_blank" href="http://www.bdtdc.com/product_details/2698"><img style="height: 225px;max-height: 220px;" class="product-fassion-img" src="http://www.bdtdc.com/uploads/product_photo_cEIZAe5266.jpg" alt="fashion-dress"></a>
						                       </div>
						                       <a target="_blank" href="http://www.bdtdc.com/product_details/2698">
						                             <div class="cat-item-title">bitter</div>

						                       </a>
						                       <div class="dollar-price"><span class="dollar">US $2</span> / Kilo</div>
						                       <div class="item-views"><span class="online-view">1000+ </span>views 
						                        
						                       </div>
						                      
						                       <div style="padding-left: 10px;padding-bottom: 1%" class="product-view-extend">
						                            <a data-product_id="2698" data-supplier_id="987" class="btn btn-primary btn-join contact_supplier"><i class="fa fa-envelope-o"></i> Contact Supplier</a>
						                       </div>                      
						                </div>
									
								</div>
					</div>
				</div>


@stop
@section('scripts')

<script type="text/javascript">

		 function category_show()
       {
        document.getElementById('product-category').style.display="block";
        }

        function hide_category()
        {
         document.getElementById('product-category').style.display="none";
       }



		// $(document).ready(function(){
		//     $("#hide").click(function(){
		//         $("p").hide();
		//     });
		//     $("#show").click(function(){
		//         $("p").show();
		//     });
		// });

		// $(document).ready(function () {
		//     $(document).on('mouseenter', '.category-show', function () {
		//         $(this).find(".product-category").show();
	 //    }).on('mouseleave', '#category-show', function () {
		//          $(this).find(".product-category").hide();
	 //    });
		//  });

</script>
@stop 