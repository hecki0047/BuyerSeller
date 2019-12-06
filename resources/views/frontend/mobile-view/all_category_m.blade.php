@extends('mobile-view.layout.master_m')
	@section('content')	
<section>
	<div class="container">
<div class="row" id="navbar">
	
             <?php if ($categorys) { ?> 
            					 
			<div class="category-tab" style="background-color:#fff;">	
			<!-- <div class="cat-head" style="padding-top: 2%;">
     				 <div class="up" style="padding-bottom:10px; padding-left:2%;">
            		<a href="{{ URL::to('/') }}">Home</a><div style="margin-left:47px; color:#000; font-weight:700 bold;"> > All Categories</div>
     			 </div>
			</div> -->
			<div class="cat-title">
				<h3 class="cg-title" style="margin-left:20px; margin-top: 10px;"> Products by Category</h3>
			</div>
				

					 <div class="col-md-12">
						<div class="tab-content">
							<?php $spy_target_id = 1; ?>
							<?php foreach ($categorys as $category) { ?>
							
							<div class="tab-pane fade active in" id="tab-<?php echo $category['category_id']; ?>" >
								<div class="cat-name own_target_spy_<?php echo $spy_target_id; ?>">
									<div class="icon">
									<i class="icon-pp <?php echo $category['icon']; ?>"></i>	
									</div><a itemprop="url" href="{{ URL::to($category['slug'],$category['category_id'],is_secured()) }}"><h3 style="margin-left:30px; padding:0;padding-left:2.4%;font-size:20px;"><?php echo $category['name']; ?></h3></a>
								</div>
								<!--<h4><?php //echo $category['name']; ?></h4>-->
								<?php if ($category['category_childrens']) { ?>
                					<?php foreach (array_chunk($category['category_childrens'], ceil(count($category['category_childrens']))) as $category_childrens) { ?>
						
						  <div  class="total-row all-categy">	
								<ul class="sub-content">
										<?php foreach ($category_childrens as $category_children) { ?>
										<li class="sub-cont-li">
										<a itemprop="url" style="font-size:12px" class="sub-cont-li-a" href="{{URL::to('category/product',$category_children['category_id'],is_secured())}}">
											<?php echo $category_children['child_name'];?>
										</a>
											
										<?php } ?>
								 	</li>
								   </ul>
								</div>		
								<?php } ?>
								<?php } ?>
							
							</div>
							<?php $spy_target_id++; ?>
							<?php } ?>
						</div>
						</div>
							</div>
								<?php } ?>
		
		</div>
</div>
</section>
	@stop
	@section('scripts')
		<script type="text/javascript">
			// document.getElementsByTagName("body")[0].setAttribute("data-spy", "scroll");
			// document.getElementsByTagName("body")[0].setAttribute("data-spy", "scroll");
			$('#nav').affix({
			      offset: {
			        top: $('#nav').offset().top
			      }
			});
			// $(document).on({scroll:function(){
			// 	alert (5);
			// 	$('[data-spy="scroll"]').each(function () {
			// 	  var $spy = $(this).scrollspy('refresh')
			// 	})
			// }},'body');
			
			$(document).on({click:function(){
                if($(this).val() == "app"){
                    $('.business_type_row,.main_product_row').hide();
                }
                else{
                    $('.business_type_row,.main_product_row').show();
                }
            }},'.customer_type');
            
            
            function isScrolledIntoView(elem)
			{
			    var $elem = $(elem);
			    var $window = $(window);

			    var docViewTop = $window.scrollTop();
			    var docViewBottom = docViewTop + $window.height();

			    var elemTop = $elem.offset().top;
			    var elemBottom = elemTop + $elem.height();
			    // var elemBottom = elemTop + $elem.height()+270;

			    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
			}
		</script>
	@stop