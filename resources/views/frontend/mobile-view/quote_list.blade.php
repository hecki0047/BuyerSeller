@extends('mobile-view.layout.master_m')
    @section('content')
<section>
<div class="container">
<div class="row">
		<div class="col-md-10 padding_0" style="padding-bottom: 1%">
			<ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ URL::to('/',is_secured()) }}" style="color: #000"><span itemprop="name">Home &nbsp;</span> </a></li><li style="float: left"><a itemprop="item" href="" style="color: #000"> <i class="fa fa-angle-right"></i><span itemprop="name"> Buying Requests </span> <i class="fa fa-angle-right"></i></a></li></ul>
		</div>
		<div class="col-md-2" style="padding: 0px;margin-top:-10%;">
			<ul style="margin-left: 2%"><li style="float: right;"><a itemprop="url" href="{{ URL::to('Sourcing/Requests/info/buyer',is_secured()) }}" style="color: #000"> I am Buyer &nbsp;</a>
			</li>
			</ul>
		</div>
	</div>
<div class="row" style="padding-top:0px; background-color: #fff;">
    <img  itemprop="image" class="img-responsive header_img_fix" style="height:150px;" src="{!! asset('assets/service/invoice-management.jpg',is_secured()) !!}" alt="invoice management" />

</div>
</div>
</section>
<section>
<div class="container">
<div class="row" style="margin-bottom:10%;">  
    <div class="col-xs-12 padding_0">            
		<div class="product-list-limit">         
			@if(count($quotations) > 0)
			@foreach($quotations as $quotation)
			<?php
			$inq_product_name = '';
			$inq_product_img = URL::to('uploads/no_image.jpg');
			if($quotation->inq_products_description){
				$inq_product_name = trim($quotation->inq_products_description->name);
			}else {
				if($quotation->inquery_title){
					$inq_product_name = trim($quotation->inquery_title);
				}
			}
			if($quotation->inq_products_images){
				$inq_product_img = URL::to($quotation->inq_products_images->image);
			}else if($quotation->inq_docs_one){
				$inq_product_img = URL::to('buying-request-docs',$quotation->inq_docs_one->docs);
			}
			?>	
			@if($inq_product_name != '')
					<div class="product-column-2">
						<a itemprop="url" title="{{ $inq_product_name }}" href="{{ URL::to('product-sourcing/view',$quotation->id,is_secured()) }}" class="slidebox-item-list" style="box-shadow: none;">
							<div class="product-img-limit">
									<img title="{{ $inq_product_name }}" alt="{{ $inq_product_name }}" itemprop="image" style="height:182px;width:182px;margin-left:10px;margin-right:10px;" class="img-responsive" src="{{ $inq_product_img }}" />
							</div>
						</a>
							<div class="txt-content-limit">
                        
								    <a class="title-wrapper-limt" href="{{ URL::to('product-sourcing/view',$quotation->id,is_secured()) }}" style="margin-top:30%;">
								    	{{ substr($inq_product_name, 0, 40) }}
									    
										<span class="ripple-effect" style="width: 313.5px; height: 313.5px; top: -142px; left: -1px;">
										</span>
									</a>
                    
								<div class="product-moq">
									 MOQ:<span>{{ $quotation->quantity }} 
									 	<?php
											if($quotation->inq_unit_id){
												echo $quotation->inq_unit_id->name;
											}else{
												echo "pieces";
											}
										?></span>
                                     
								</div>
								<div class="product-price-limt">
									<span>US $<?php if($quotation->p_price){
			echo $quotation->p_price->product_FOB;
		}else{
			echo 'N/A';
		}?> </span>/ <?php
			if($quotation->inq_unit_id){
				echo $quotation->inq_unit_id->name;
			}else{
				echo "pieces";
			}
		?> 
								</div>
                                <a  itemprop="url" href="{{ URL::to('product-sourcing/view',$quotation->id,is_secured()) }}"
target="_blank">
								<div id="quetion-btn">
               		                <div class="ui2-button-primary_m">Get Instant Quotes</div>
                                </div>
                                </a>
							</div>
					</div>
					@endif
                @endforeach
            @endif
		</div>
                
    </div>
</div>
</div>
</section>
@stop

@section('scripts')
<script type="text/javascript">
	$('input[name="key"]').val($('input[name="search_key"]').val());
	function search_data(){
		var categoryid = $('input[name="categoryid"]').val();
        var country = $('input[name="country"]').val();
        var key = $('input[name="search_key"]').val();
        var order = $('input[name="order"]').val();
        var url = window.location.origin+'/Sourcing/Requests/info/category=='+categoryid+'+..+country=='+country+'+..+key=='+key+'+..+order=='+order;
        window.location.href = url;
	}

	$(document).on({
		change:function(e){
			e.preventDefault();
			$(".replace_area").html('<div style="text-align:center;margin-top:50px;margin-bottom:50px;"><img src="http://www.bdtdc.com/assets/images/circle_preloader.gif" alt="Loading..." /></div>');
			$('input[name="country"]').val($(this).val());
			search_data();

			/*var href = window.location.href;
            var cat_id = $('#active_category_id').val();
            var base_url = window.location.origin;
            var url = base_url+'/Sourcing/Requests_search/'+cat_id+'/'+$(this).val();
            // alert (url);
            $.get(url,{},function(result){
            	// alert (result);
            	if(result == ''){
                        $(".replace_area").html('<p style="font-size:25px;color:green;margin-left: 43px;margin-top: 14px;">No Product to show...</p>');
                    }else{
                        $(".replace_area").html(result);
                    }
            });*/
		}
	},'[name="countery"]');

	$(document).on({
		click:function(e){
			e.preventDefault();
			$(".replace_area").html('<div style="text-align:center;margin-top:50px;margin-bottom:50px;"><img src="http://www.bdtdc.com/assets/images/circle_preloader.gif" alt="Loading..." /></div>');
			var cat_id = $(this).attr('data-catid');
			$('input[name="categoryid"]').val(cat_id);
			search_data();

			/*$('.cat_menu').parent().css('background-color','');
			$('.cat_menu').parent().css('padding-left','');
			$('.cat_menu').parent().css('border-radius','');
			$('.cat_menu').css('color','#666');
			$(this).parent().css('background-color','#1A4570');
			$(this).parent().css('padding-left','14px');
			$(this).parent().css('border-radius','11px !important');
			$(this).css('color','white');
			var cat_id = $(this).attr('catid');
			$('#active_category_id').val(cat_id);
			var country_id = $('[name="countery"]').val();
            var base_url = window.location.origin;
            var url = base_url+'/Sourcing/Requests_search/'+cat_id+'/'+country_id;
            // alert (url);
            $.get(url,{},function(result){
            	if(result == ''){
                        $(".replace_area").html('<p style="font-size:25px;color:green;margin-left: 43px;margin-top: 14px;">No Product to show...</p>');
                    }else{
                        $(".replace_area").html(result);
                    }
            });*/
		}
	},'.cat_menu');
	$('.order_submit').click(function(e){
		e.preventDefault();
		$(".replace_area").html('<div style="text-align:center;margin-top:50px;margin-bottom:50px;"><img src="http://www.bdtdc.com/assets/images/circle_preloader.gif" alt="Loading..." /></div>');
		$('input[name="order"]').val($('input[name="p-price"]').val());
		search_data();
	});
	$('input[name="p-price"]').keyup(function(event){
	    if(event.keyCode == 13){
	        $('.order_submit').click();
	    }
	});
	$('[name="search"]').val('news');
	var cid = $('input[name="categoryid"]').val();
	$('[data-catid="'+cid+'"]').parent().css('background-color','#1A4570');
	$('[data-catid="'+cid+'"]').parent().css('padding-left','14px');
	$('[data-catid="'+cid+'"]').parent().css('border-radius','11px !important');
	$('[data-catid="'+cid+'"]').css('color','white');

	$('ul.pagination').css('margin-top','10px');
	$('ul.pagination').css('margin-right','25px');

	$(document).on({
		mouseover:function(e){
			$('.get_quote_link').hide();
			$(this).children().children('.get_quote_link').show();
		}
	},'.product-hover');
	$(document).on({
		mouseout:function(e){
			$('.get_quote_link').hide();
		}
	},'.product-hover');

</script>

@stop