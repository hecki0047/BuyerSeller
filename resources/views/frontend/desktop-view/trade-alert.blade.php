@extends('frontend.master3')
@section('content')
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;">
                        <li class="top-path-li"><a href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"><a href="{{URL::to('BuyerChannel/pages/meet_suppliers',13),is_secured()}}" class="top-path-li-a">BuyerChannel<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                        
                    </ul>
            </div>
    
  </div>
  <div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 20px;">
			<div class="col-sm-12 col-lg-12 padding_0">
						<div class="col-xs-12 col-sm-2 col-lg-2 padding_0">
							<div class="quots" style="padding-left: 0;">
								<i class="fa fa-list" style="font-size: 30px; color: #e5e5e5;position: absolute; padding-top: 9%; margin-left: 6%;"></i>
								<button id="category-show" style="height:44px;padding-left: 20%; background-color: #3B495C; color: #fff;" class="form-control category-show" name="search">
										Trade Alert
								</button>
							</div>
							<div class="quots" style="background-color: #E8EDF4; padding-left: 0;min-height: 650px;">
										
										<ul class="buying-ul" >
											<li class="buying-ul-li"><a href="">Trade Alert</a></li>
											<li class="buying-ul-li" style="background-color: #fff; border-left: 3px solid #f60;"><a href="" style="color: #f60;">Trade Alert</a></li>
											

										</ul>
							</div>
							
							
						</div>
						<div class="col-sm-10 col-md-10">
								<div class="col-sm-12 col-md-12 padding_0" style="padding-top: 3%;">
										<div class="col-sm-7 col-md-7 padding_0">
											<a href=""  class="list-page-title-tips" title="" target="_blank"><span style="font-size: 18px; line-height: 21px; font-weight: bolder;color: #000;">Trade Alert</span> Update with latest product and industry knowledge</a>
										</div>
										<div class="col-sm-5 col-md-5">
														<div class="col-sm-12">
																<div class="col-sm-6">
																	<span style="display: block;overflow: hidden;white-space: nowrap; float: right;"><a href="{{URL::to('subscript/change-email')}}" style="font-size: 14px;">Change my email</a></span>
																</div>
																<div class="col-sm-6">
																	<span style="display: block;overflow: hidden;white-space: nowrap; float: right;"><a href="{{URL::to('subscript/change-email')}}" style="font-size: 14px;">Edit my subscription</a></span>   
																</div>
														</div>
										</div>
								
												
								</div>
								<div class="col-sm-12 col-md-12" style="padding-top: 3%;">
									<a href="{{URL::to('Trade/alert',242),is_secured()}}" style="float: left;"><button type="button" class="btn btn-primary active center-block" style="border-radius: 5px !important; padding-top: 5px; background-color: #fff; color: #666; border:1px solid #999; height: 33px; ">
								Apparel Design Services</button>
							</a>
								</div>

			<div class="col-sm-12"  style="padding-top: 15px;">
	                <div class="category-tab"><!--category-tab-->
						
							<ul class="nav nav-tab nav-pills trade-show-ul " style="background:none;border-bottom: 1px solid #dae2ed;">
								<li class="active"><a class="padding_0" href="#forbuyer" data-toggle="tab" aria-expanded="true">New Products</a></li>
								<li class=""><a style="font-size: 13px;" class="padding_0" href="#apparel" data-toggle="tab" aria-expanded="false">Hot Products</a></li>
								   
							</ul>
					</div>
					
	<div class="tab-content">
		<input type="hidden" name="section" value="">
		<div class="tab-pane fade active in" id="apparel">


			<div class="col-sm-8 col-md-12 col-xs-12 padding-right" data-spm="57">

			<div class="col-sm-12 padding_0 replace_area" >

			@if(count($products) > 0)	
			@foreach($products as $p)
			<div class="col-sm-3 padding_0 product-hover" style="padding-top:10px; padding-left:10px;border: 1px solid #F0F0F0;background: #FFF none repeat scroll 0% 0%;">
				<div style="margin:0 auto; width:98%;position:relative;" itemscope itemtype="http://schema.org/Product">
				@if($p->pro_to_cat_name)
				<a itemprop="url"  target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $p->pro_to_cat_name->name).'='.mt_rand(100000000, 999999999).$p->product_id,is_secured()) }}">
				@else
				<a itemprop="url" target="_blank" href="{{ URL::to('product-details/Need to add=232942253'.$p->product_id,is_secured()) }}">
				Need to add
				@endif

				@if($p->pro_images)
				<img itemprop="image"  title="{{ $p->pro_to_cat_name->name or '' }}" style="height:182px;width:182px" class="img-thumbnail" src="{{ URL::to('uploads',(isset($p->pro_images)) ? $p->pro_images->image : 'no_image.jpg',is_secured()) }}" alt="{{ $p->pro_to_cat_name->name or '' }}" />
				@elseif($p->pro_images_new)
				<img itemprop="image"  title="{{ $p->pro_to_cat_name->name or '' }}" style="height:182px;width:182px" class="img-thumbnail" src="{{ URL::to('bdtdc-product-image/'.trim($parent_cats->name).'/'.trim($category_id->name),(isset($p->pro_images_new)) ? $p->pro_images_new->image : 'no_image.jpg',is_secured()) }}" alt="{{ $p->pro_to_cat_name->name or '' }}" />
				@endif


					<div class="quotation-head-cont">


						<p class="brand-favorable" style="text-align:left;padding-top:20px; height:32px;color:black;">
						<span class="doller-quotation-price" style="color: #255E98;">
							{{substr($p->pro_to_cat_name->name,0,30)}}
						</span>
						</p>


					<div class="brand-year" style="padding-left:10px;padding-right:10px;padding-top: 18px;height:58px;">
							
							<p style="color: #255E98;"><span style="color:black"></span>
						<?php
							if ($p->bdtdcProduct) {
								if ($p->bdtdcProduct->product_prices) {
									if($p->bdtdcProduct->product_prices->product_FOB){
										if($p->bdtdcProduct->product_prices->product_FOB=='N/A')
										{
											echo "ask current price";
										}
										else{
									echo "<strong>	US $</strong>".$p->bdtdcProduct->product_prices->product_FOB;
									}
									}

								}else{echo "Price not available";}
							}else{echo "product not available";}
						  ?>
						  <?php
							if ($p->bdtdcProduct) {
								if ($p->bdtdcProduct->ProductUnit) {
									echo $p->bdtdcProduct->ProductUnit->name;
								}else{echo "pieces";}
							}else{echo "price not available";}
							 ?>
						</p>
					
					</div>
					</div>
					<div class="padding_0 " style="text-align:center;margin-bottom:1%;padding-top: 10px;padding-bottom:10px;background: #fff;width: 100%;;box-shadow: 2px 4px 6px #aaa;"><a itemprop="url" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $p->pro_to_cat_name->name).'='.mt_rand(100000000, 999999999).$p->product_id,is_secured()) }}" target="_blank" style="width: 80%;    font-size: 14px;padding: 0;" class="btn btn-primary btn-join">Contact Supplier</a></div>	
				</div>
				</a>
				
			</div>

			@endforeach
			@else
			<p style="font-size:25px;color:green;margin-left: 43px;margin-top: 14px;">No Product to show...</p>
			@endif

		</div>
		
			{!! $products->render() !!}

	</div>

				

	</div>

</div>
   		
	</div>
	</div>					
		
		</div>
	</div>

	@stop
@section('scripts')
<script type="text/javascript">
	$(document).on({
		change:function(e){
			e.preventDefault();
			$(".replace_area").html('<div style="text-align:center;margin-top:50px;margin-bottom:50px;"><img src="http://www.bdtdc.com/resources/assets/images/circle_preloader.gif" alt="Loading..." /></div>');
			var href = window.location.href;
            var cat_id = $('#active_category_id').val();;
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
            });
		}
	},'[name="countery"]');

	$(document).on({
		click:function(e){
			e.preventDefault();
			$(".replace_area").html('<div style="text-align:center;margin-top:50px;margin-bottom:50px;"><img src="http://www.bdtdc.com/resources/assets/images/circle_preloader.gif" alt="Loading..." /></div>');
			$('.cat_menu').parent().css('background-color','');
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
            });
		}
	},'.cat_menu');









$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
			var get_cat_filtered_product_list;

			get_cat_filtered_product_list = function(){

					$.ajax({
			            type: "get",
			            url: "{{ URL::to('country/products',null,is_secured()) }}",
			            data: $('.filter_by_cat_pro_input').serialize(),
			            success:function(result){
				            $("#product_view").html(result);
				            $("#product_view").focus();
				           
		            	}
		        	})

			}

			$.getJSON(product_view, 
 					function(data) 
    			{
    			 $('#product_view').html(data.view);
    			}
			);
            


            $(function() {
            	
            	
            	/*$('.contact_supplier').animatedModal({
            		color: "rgba(102, 102, 100, .9)",
            		animatedIn: "lightSpeedIn",
            	});*/
            	/**
            	 * the element
            	 */
            	var $ui = $('#ui_element');
            
            	/**
            	 * on focus and on click display the dropdown, 
            	 * and change the arrow image
            	 */
            	$ui.find('.sb_input').bind('focus click', function() {
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
            	$ui.bind('mouseleave', function() {
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
            	$ui.find('.sb_dropdown').find('label[for="all"]').prev().bind('click', function() {
            		$(this).parent().siblings().find(':checkbox').attr('checked', this.checked).attr('disabled', this.checked);
            	});
            
            	$(document).on({
            		click: function(e) {
            			e.preventDefault();
            			$('.modal-content').html('<span class="btn btn-block btn-lg"><i class="fa fa-spinner fa-pulse loading_icon text-primary"></i></span>');
            			// var base_url = $('[name="base_url"]').val();
            			var base_url = window.location.origin;
            			var supplier_id = $(this).data('supplier_id');
            			var product_id = $(this).data('product_id');
            			var url = base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
            			//$('.modal-content').html(" ");
            			/*$.get(url, function(r) {
            				$('.modal-content').html(r);
            				// $('#animatedModal').modal('show', {backdrop: 'static'});
            			})*/
            			window.location.href = url;
            		}
            	}, '.contact_supplier');
            
            	/*$(document).on({
            		click: function(e) {
            			e.preventDefault();
            			var url = $('[name="base_url"]').val() + '/buyer/contact_supplier';
            			swal({
            					title: "Are you sure?",
            					text: "You are going to confirm adding your product !",
            					type: "warning",
            					showCancelButton: true,
            					confirmButtonColor: "#DD6B55",
            					timer: 6000,
            					confirmButtonText: "Yes!",
            					cancelButtonText: "No, Stay hare!",
            					closeOnConfirm: false,
            					closeOnCancel: false,
            					showLoaderOnConfirm: true
            				},
            				function(isConfirm) {
            					if (isConfirm) {
            						
            						$.post(url, $('.query_form').serialize(), function(r) {
            							(parseInt(r) == 1) ? swal("Thank You!!", "Query has been sent successfully!!!", "success"): false;
            							(parseInt(r) == 0) ? swal({title: "<h2 class='text-danger'>Please Login<h2>",text: "<p class='text-primary'>Login first to send the query</p>",html: true,type:'error'}) : false;
            							(parseInt(r) !=1 && parseInt(r) !=0) ? swal("Fail!!", "Query Could Not Sent", "error") : false;
            						})
            					}
            					else {
            						swal("Cancelled", "Sending request is canceled :)", "error");
            					}
            				});
            		}
            	}, '.query_form_submit_btn');*/
            });
        
$(function(){
        $(".link").button({
            icons:{
            secondary:"ui-icon-carat-1-e"
            }
        });
        $(".next, input:submit").button({
            icons:{
            secondary:"ui-icon-circle-arrow-e"
            }
        });

        function search_data(){
	        var categoryid = $('input[name="categoryid"]').val();
	        var country = $('input[name="countery"]').val();
	        var buyer_protection = $('input[name="buyer_protection_input_data"]').val();
	        var gold_supplier = $('input[name="gold_supplier_input"]').val();
	        var assessed_supplier = $('input[name="assessed_supplier_input"]').val();
	        var url = window.location.origin+'/category/product/category=='+categoryid+'+..+country=='+country+'+..+buyer_protection=='+buyer_protection+'+..+gold_supplier=='+gold_supplier+'+..+assessed_supplier=='+assessed_supplier;
	        window.location.href = url;
		}

        $(document).on({change:function(){
        	$('input[name="countery"]').val($(this).val());
        	$('.fa_down_show').show();
			$('.fa_up_show').hide();
			$('.country_tab_show').hide();
        	search_data();
        	/*var value=$("#country").val();
        	var current_val = $(this).val();
        	if(!isNaN(current_val) || current_val == 'all'){
        		$('[name="country_id"]').val(current_val);
        		var countryText = $('option[value="'+current_val+'"]').html();
        		if(countryText == 'Select Country'){
        			$('.replace_name').html('All Countries &amp; Regions');
        		}else{
        			$('.replace_name').html(countryText+' selected');
        		}
        		$('.fa_down_show').show();
				$('.fa_up_show').hide();
				$('.country_tab_show').hide();
        	}
            // console.log(value);
            var url = window.location.href.split('/');
			var cat_id = url[url.length-1];
			$('[name="cat_id"]').val(cat_id);
            $("#product_view").show();
            $("#pro_v").hide();
        	get_cat_filtered_product_list();
	        if(value=="examRoutine"){
	            $("#eRoutine").show();
	            $.ajax({
		            type: "get",
		            url: "{{ URL::to('category/products',null,is_secured()) }}",
		            data: "type="+this.value+"&option=eRoutine",
		            success:function(result){
		            $("#eRoutine").html(result);
		            $("#eRoutine").focus();
		            }
		        })

            }
            else{ 
                $("#eRoutine").hide();
            }*/
        }},'.filter_by_cat_pro_input');

        $(document).on({click:function(){
        	var countryid = $(this).attr('data-countryid');
        	$('[name="countery"]').val(countryid);
        	/*$('[name="country_id"]').val(countryid);
        	get_cat_filtered_product_list();
        	var countryText = $(this).html();
    		if(countryText == ' All'){
    			$('.replace_name').html('All Countries &amp; Regions');
    		}else{
    			$('.replace_name').html(countryText+' selected');
    		}*/
    		$('.fa_down_show').show();
			$('.fa_up_show').hide();
			$('.country_tab_show').hide();
			search_data();
        }},'.country_select');
       
        /*$(".filter_by_cat_pro_input").change(function(){

         	var value=$("#country").val();
         	$('[name="country_id"]').val($(this).val());
            // console.log(value);
            var url = window.location.href.split('/');
			var cat_id = url[url.length-1];
			$('[name="cat_id"]').val(cat_id);
            $("#product_view").show();
            $("#pro_v").hide();
        	get_cat_filtered_product_list();
	        if(value=="examRoutine"){
	            $("#eRoutine").show();
	            $.ajax({
		            type: "get",
		            url: "{{ URL::to('category/products',null,is_secured()) }}",
		            data: "type="+this.value+"&option=eRoutine",
		            success:function(result){
		            $("#eRoutine").html(result);
		            $("#eRoutine").focus();
		            }
		        })

            }
            else{ 
                $("#eRoutine").hide();
            }
           
        });*/

        /* ******** Country search ********** */
			$(document).on({click:function(){
				$('.fa_down_show').toggle();
				$('.fa_up_show').toggle();
				$('.country_tab_show').toggle();
			}}, '.country_tab');

		$(document).on({
				click: function(e) {
				e.preventDefault();
				// other_filter_search_func();
				$('.fa_down_show').show();
				$('.fa_up_show').hide();
				$('.country_tab_show').hide();
				var selected = $(this).val();
				var selected_name = $(this).attr('name');
				if(selected_name == 'buyer_protection'){
					if ($('input[name="buyer_protection"]').is(':checked')) {
						$('input[name="buyer_protection_input_data"]').val('true');
					}else{
						$('input[name="buyer_protection_input_data"]').val('false');
					}
				}else if(selected_name == 'gold_supplier'){
					if ($('input[name="gold_supplier"]').is(':checked')) {
						$('input[name="gold_supplier_input"]').val('true');
					}else{
						$('input[name="gold_supplier_input"]').val('false');
					}
				}else if(selected_name == 'assessed_supplier'){
					if ($('input[name="assessed_supplier"]').is(':checked')) {
						$('input[name="assessed_supplier_input"]').val('true');
					}else{
						$('input[name="assessed_supplier_input"]').val('false');
					}
				}
				search_data();
			}
		}, '.cat_filter_check_box');

		$('ul.pagination').css('margin-top','5px');





   

    });
</script>
@stop 