
	<div id="details" class="col-sm-12 col-md-12 col-xs-12 padding-right" data-spm="57">
    	    <div class="col-sm-4 col-md-4">
	    	<div class="view-label" style="padding: 8px;">View 
	    	@if(count($products)>=1)
	    				<strong>
	        		        <?php echo count($products); ?>
	    			    </strong> 
	    	@else
	    				<strong>
	        		        0
	    			    </strong>
	    	@endif
							Product(s) below
						</div>
		</div>
			       
		              
         
				
				
    </div>



	<div id="" class="col-sm-12 col-md-12 col-xs-12 padding-right" data-spm="57">
	<input type="hidden" name="base_url" value="{{ URL::to('/',null,is_secured()) }}">
	
	<div id="pro_v" style="padding-top: 2%;" id="" class="features_items row">
		<!--features_items-->
		@foreach($products as $product)
		<div id="list_product" class="col-xs-12">
			<div class="col-xs-7 col-md-2 col-sm-4 padding_0">
				
				<img style="height:150px;width:100%" class="img-thumbnail" src="{{ URL::to('uploads',$product->images,null,is_secured()) }}" alt="" />
			</div>
			<div class="col-xs-6 col-md-6 col-sm-8">
				<div class="col-xs-12 padding_0">
					<p><a style="font-size:18px" target="_blank" href="{{ URL::to('product_details',$product->id,is_secured()) }}">{{ $product->product_name }}</a></p>
					<div class="col-md-6 col-xs-12 padding_0">
						<p>
						<strong>	US $</strong>{{ $product->product_FOB ?? '' }}/{{ $product->unit_name ?? '' }}
						</p>
					</div>
					<div class="col-md-6 col-xs-12 padding_0">
						<p>
							<span>{{ $product->product_MOQ ?? '' }} {{ $product->unit_name ?? '' }}</span>(Min. Order)
						</p>
					</div>
	
				</div>
				
				<div class="col-xs-12 padding_0">
					<div class="col-sm-6 col-xs-12 padding_0">
						<p style="margin:0 0 0px;display:block;width:83%" class="summary_pro">Product Type:</p>
						<p>{{ $product->cattegory_name }}</p>
					</div>
					<div class="col-sm-6 col-xs-12 padding_0">
						<ul class="padding_0">
							<li class="summary_pro">Supply Type:<span>OEM Service</span></li>
							<li class="summary_pro">Place of Origin:<span>CN;FUJ</span></li>
							<li class="summary_pro">Brand Name:<span>OEM</span></li>
						</ul>
					</div>00000000000000
				</div>
	
			</div>
			<div class="col-xs-5 col-md-4 col-sm-12 padding_0">

						<div id="left_sh" style="padding-left: 15px;"  class="col-xs-12 padding_0">
												<div class="col-sm-10 padding_0">
													<p class="heading_sup">
												<a target="_blank" href="{{ URL::to('profile/template_',$product->company_id,is_secured()) }}">
														{{ $product->company_name }}
												</a>	
												</p>
												<p class="summary">{{ $product->country_name}} |
													<a href="{{ URL::to('FooterPage/pages/Trade_Assurance',36,is_secured()) }}" target="_blank">
													<i class="fa fa-pie-chart"></i>
													Trade Assurance
													</a>
												</p>
												<p class="summary">
												Experiance :<br>
												Established {{  date('Y', strtotime($product->establish_date)) }} , 10 years OEM
												</p>
												
											
												</div>
												<div style="padding:0px" class="col-sm-2">
													<img style="height:50px;" src="{{ asset('resources/assets/helpcenter/su_year.png',is_secured()) }}" />
												</div>
											
												
				
										
										</div>
									
				</div>
			<div class="col-sm-12 padding_0">
				<div class="col-sm-5 choose padding_0">
					<ul class="nav nav-pills nav-justified padding_0">
						<li><a style="float: left;" href="{{ URL::to('login') }}"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
						<li><a style="float: left;" href="{{ URL::to('login') }}"><i class="fa fa-plus-square"></i>Add to compare</a></li>
					</ul>
				</div>

				<div style="float:right;padding-right:1%" class="col-sm-5 padding_0">
					<ul style="float:right" class="list-inline">
						<li><a href="#animatedModal" data-product_id="{{ $product->id }}" data-supplier_id="{{ $product->supplier_id }}" class="btn btn-primary btn-sm contact_supplier"><i class="fa fa-envelope-o"></i>Contact Supplier</a></li>
						<li><i class="fa fa-weixin"></i><a href="{{ URL::to('login') }}">Talk to me</a></li>
					</ul>
				</div>
			</div>
			
		</div>
		@endforeach
	</div>
	
		
	</div>
	
	<!-- <div class="recommended_items">
		
		<h2 class="title text-center">Popular Related Products</h2>
	
		<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item">
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="{{ asset('resources/assets/dashboard/images/home/recommend1.jpg') }}" alt="">
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
								</div>
	
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="{{ asset('resources/assets/dashboard/images/home/recommend2.jpg') }}" alt="">
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
								</div>
	
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="{{ asset('resources/assets/dashboard/images/home/recommend3.jpg') }}" alt="">
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
								</div>
	
							</div>
						</div>
					</div>
				</div>
				<div class="item active">
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="{{ asset('resources/assets/dashboard/images/home/recommend1.jpg') }}" alt="">
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
								</div>
	
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="{{ asset('resources/assets/dashboard/images/home/recommend2.jpg') }}" alt="">
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
								</div>
	
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="{{ asset('resources/assets/dashboard/images/home/recommend3.jpg') }}" alt="">
									<h2>$56</h2>
									<p>Easy Polo Black Edition</p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
								</div>
	
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
	</div> -->
	<!--/recommended_items-->
	

<script type="text/javascript">
	(function(){

		$('.contact_supplier').animatedModal({
    		color: "rgba(102, 102, 100, .9)",
    		animatedIn: "lightSpeedIn",
    	});

	})()
</script>
	