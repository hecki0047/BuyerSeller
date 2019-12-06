@extends('fontend.master3')
	@section('content')

<div class="header-bottom"><!--header-bottom-->
			
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
		
		</div>








					<div class="category-tab">
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#answer" data-toggle="tab">Answer</a></li>
								<li><a href="#service" data-toggle="tab">Service</a></li>
								<li><a href="#contact" data-toggle="tab">Contact</a></li>
								
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="answer">
								
							<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Help Center</h2>
						<div class="panel-group category-products" id="accordian">
				<?php if ($categorys) { ?>
                     <?php foreach ($categorys as $category) { ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#market-<?php echo $category['category_id']; ?>">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<a href="{{ URL::route('category.product',$category['category_id']) }}"><?php echo $category['name']; ?> </a>
										</a>
									</h4>
								</div>
								<?php if ($category['category_childrens']) { ?>
                         			<?php foreach (array_chunk($category['category_childrens'], ceil(count($category['category_childrens']))) as $category_childrens) { ?>
								<div id="market-<?php echo $category['category_id']; ?>" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
										<?php foreach ($category_childrens as $category_children) { ?>
											<li> <a href="{{URL::route('category.product',$category_children['category_id']) }}"><?php echo $category_children['child_name']; ?></a></li>
										<?php } ?>
										</ul>
									</div>
								</div>
								<?php } ?>
								<?php } ?>

							</div>
							<?php } ?>
								<?php } ?>

						</div>

							
						</div>
						<!--/brands_products-->


					</div>
							<div class="col-sm-9 padding-right">


					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

		

						
					</div><!--features_items-->

				

					<!--/category-tab-->
					<br><br>
					

					<!-- Bootstrap trigger to open modal --> 
 
 

					
				</div>
								
							</div>
							
							<div class="tab-pane fade" id="service">
							
								
								Service
							</div>
							
							<div class="tab-pane fade" id="contact">
								
								
								
								Contact
							</div>
							
							
						</div>
					



@stop
@section('script')
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
				* and change the arrow image
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
        </script>	
@stop