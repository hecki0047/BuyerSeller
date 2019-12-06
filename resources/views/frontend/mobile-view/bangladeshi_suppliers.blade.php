<?php
	use App\Models\Country;
	use App\Models\Users;
	function get_market_distribution($zone_id){
		$string =[];
		$market = DB::table('company_main_markets as main_market')
			->join('form_values as fv','fv.id','=','main_market.main_market_zone')
			->where('company_id',$zone_id)
			->get(['fv.value as market_zone','distribution_value']);
		$f = 0;
		foreach($market as $m){
			$string[$f] = ' ' . $m->market_zone . ' '. $m->distribution_value.'% ';
			$f++;
		}
		return implode(',',$string);
	}
	$country = Country::get();
?>
@extends('frontend.mobile-view.master_m')
@section('content')
<section>
	<div class="container">
<div class="row padding_0">
	<div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
        <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block; padding-left: 0;">
            <div id="search-inner" style="position: relative;">
                <i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products
            </div>
        </a>
    </div>
    <div class="col-sm-12 padding_0">
       <button class="btn btn-default" onclick="window.history.back();" style="width:100%;text-align:center;color: #666;padding:10px;font-size: 20px;padding-top:17px;"><i class="fa fa-reply-all" style="font-size: 30px;" aria-hidden="true"></i></button>
    </div>
</div>	
<div class="row padding_0">
<div class="col-sm-9 col-md-10 col-xs-12 padding_0">


	<div id="" class="col-sm-12 col-md-12 col-xs-12 padding-right" style="padding-top:2%;" >
	<input type="hidden" name="base_url" value="{{ URL::to('/',null,is_secured()) }}">
	
	<!---LOADING ANIMATION TRIGERED TO THIS LOADER CLASS;- -->
	<div class="loader"></div>


</div>
</div>
</div>
</div>
</section>
<section>
<div class="container">
<div class="features_items row" style=" margin: 0px ">
		<!--THIS DATA AREA WILL BE OVERWRIDE WHEN FILTER SEARCH IS TRIGERED;-->
		<?php

		?>
		@if($suppliers)
		@foreach($suppliers as $s)

<div class="col-xs-12 padding_0" style="background: #fff;margin-bottom:2%;">

	<div style="width: 100%;" class="list_product col-xs-12">
		<div class="col-xs-4 col-md-2 col-sm-4 padding_0">
			
			<!-- @if($s->company_image)
				<img style="height:70%;width:100%;" src="{{ URL::to('uploads',$s->company_description->company_logo,is_secured()) }}" alt="" />
			@endif -->

			@if($s->company_image)
              	<img src="{{ URL::to('uploads',$s->company_image->image) }}" style="height:70%;width:100%;" alt="" class="img-thumbnail">
            @else
              	<img src="{{ URL::to('uploads','company_logo_pLCIz2kPL3.jpg') }}" style="width:80%" alt="" class="img-thumbnail">
            @endif


		</div>
		<div class="col-xs-8 col-md-8 col-sm-8">
			
			<div class="col-xs-12 padding_0">
				<div class="col-sm-6 col-xs-12 padding_0">
					<p>
						@if($s->name_string)
						<a style="font-size:12px" target="_blank" href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$s->name_string->name),$s->id,is_secured()) }}">
						<?php if($s->users){echo $s->users->first_name;}else{echo "name not available";} ?> - <?php if($s->name_string){echo $s->name_string->name;}else{echo "name not available";} ?>
						</a>
						@endif
					</p>


					<p class="summary">Country/Region:
						@if($s->location_of_reg_string)
							

							<span>
								<a style="padding-left:12px" class="country_click_search" href="<?php if($s->location_of_reg_string){echo $s->location_of_reg_string->id;}else{} ?>" target="_blank"><?php if($s->location_of_reg_string){echo $s->location_of_reg_string->name;}else{echo "not available";} ?></a>
							</span>
							<span>
								<img style="height:16px;width:24px;" src="{{ asset('resources/assets/global/img/flags/'.strtolower($s->location_of_reg_string->iso_code_2).'.png',is_secured())}}" alt="{{ $s->location_of_reg_string->name }}" >
							</span>
						
					
						
						
						@endif
					</p>
					<p class="summary">Main product:
							<span style="padding-left:25px" class="country_click_search">
								@if($s->main_products)
							@if(trim($s->main_products->product_name_1) != '')
							<a href="#" class="main_product_search" data-main-product-text="{{$s->main_products->product_name_1}}" target="_blank">
								<i class="fa fa-product-hunt"></i> {{$s->main_products->product_name_1}}
							</a>
							@endif
							@if(trim($s->main_products->product_name_2) != '')
							<a href="#" class="main_product_search" data-main-product-text="{{$s->main_products->product_name_2}}" target="_blank">
								<i class="fa fa-product-hunt"></i> {{$s->main_products->product_name_2}}
							</a>
							@endif
							@if(trim($s->main_products->product_name_3) != '')
							<a href="#" class="main_product_search" data-main-product-text="{{$s->main_products->product_name_3}}" target="_blank">
								<i class="fa fa-product-hunt"></i> {{$s->main_products->product_name_3}}
							</a>
							@endif
						@endif

							</span>
					</p>
					<p class="summary">Total Revenue: 
						<span>
							<a class="margin_supp revenue_click_search" href="<?php if($s->tradeinfo){if($s->tradeinfo->BdtdcFormValue){echo $s->tradeinfo->BdtdcFormValue->id;}else{echo '0';}}else{echo '0';} ?>"><?php if($s->tradeinfo){if($s->tradeinfo->BdtdcFormValue){echo $s->tradeinfo->BdtdcFormValue->value;}else{echo "None";}}else{echo "None";} ?></a>
						</span>
					</p>
					<p class="summary">Top 3 Markets: 
						<span>
							<a  href="#" target="_blank">{{ get_market_distribution($s->id) }}</a>
						</span>
					</p>
					<div class="col-sm-12 padding_0">
				<div style="float:right" class="col-sm-4 padding_0">
					<ul style="float:left" class="list-inline">
						<li><a href="#" data-product_id="#" data-supplier_id="{{ $s->user_id }}" class="btn btn-primary btn-sm contact_supplier"><i class="fa fa-envelope-o"></i>Contact Supplier</a></li>
						<?php
							if($s->user_id != null && $s->user_id != '0'){
								$user_active_data = User::where('id',$s->user_id)->first();
								if($user_active_data){
									$user_active = $user_active_data->active;
								}else{
									$user_active = 0;
								}
							}else{
								$user_active = 0;
							}
						?>
						<li>
						@if($user_active == '1')
							<i class="fa fa-weixin" style="color: green;"></i><a class="chat_single" data-target-id="{{ $s->user_id.mt_rand(100000000, 999999999) }}" href="">Talk to me</a>
						@else
							<i class="fa fa-weixin"></i><a class="contact_supplier" data-product_id="#" data-supplier_id="{{ $s->user_id }}" href="#">Talk to me</a>
						@endif
						</li>
					</ul>
				</div>
			</div>

				</div>
				
			</div>


		</div>

	</div>
			
</div>
</div>
</div>
</section>
@endforeach
{!! $suppliers->render() !!}
@endif








</div>


	<!--/recommended_items-->
	
	
	</div>
	</div>
</div>
</div> <!-- search_result_aside.php div close -->
	<div id="animatedModal">
		<div class="close-animatedModal text-center">
			<a class="btn btn-primary btn-md close_portfolio_model" href=""><i class="fa fa-times fa-3x"></i></a>
		</div>
		<div class="container">
			<div class="row">
				<div style="padding:2%" class="modal-content col-xs-10 col-xs-offset-1">
					
					<!---DATA WILL BE LOADED VIA AJAX-->
				</div>
			</div>
	
		</div>
	</div>
	<br>
@stop
@section('scripts')

<script type="text/javascript">
// toggle
$(document).ready(function(){
    $("#show_details").click(function(){
        $("#menu_toggle").toggle();
    });
});
			$(document).on({
				change: function(e) {
					$('[name="searched_on"]').val($(this).val());
				}
			}, '[name="search"]');

			$(document).on({click:function(e){
	          e.preventDefault();
	          var target_id = $(this).attr('data-target-id');
	          window.open("{!!URL::to('default/chat/"+target_id+"')!!}", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=450,width=500,height=500");
	        }},'.chat_single');

			var other_filter_search_func,call_from="";
			
			other_filter_search_func=function(call_from){
				$('.loader').fadeIn('slow');
				var count_checked_box = $('.others_filter_form_input:checked')
				var form = $('.others_filter_form');
				if(call_from == "select_box"){
					$.post(form.attr('action'), form.serialize(), function(r) {
						$('.features_items').html(r);
						$('.loader').fadeOut('slow');
					});
				}else{
					
					$.post(form.attr('action'), form.serialize(), function(r) {
						$('.features_items').html(r);
						$('.loader').fadeOut('slow');
					})
				}
				
			}

			function search_data(){
				var search = $('input[name="searched_on"]').val();
		        var key = $('input[name="search_str"]').val();
		        var country = $('input[name="countery"]').val();
		        var buyer_protection = $('input[name="buyer_protection_input"]').val();
		        var gold_supplier = $('input[name="gold_supplier_input"]').val();
		        var assessed_supplier = $('input[name="assessed_supplier_input"]').val();
		        var filter_by_main_market = $('input[name="filter_by_main_market"]').val();
		        var filter_by_total_revanue = $('input[name="filter_by_total_revanue"]').val();
		        var business_type = $('input[name="business_type"]').val();
		        var filter_by_employe = $('input[name="filter_by_employe"]').val();
		        if(search == 'suppliers'){
		        	var url = window.location.origin+'/bangladesh-suppliers/search=='+search+'+..+key=='+key+'+..+country=='+country+'+..+buyer_protection=='+buyer_protection+'+..+gold_supplier=='+gold_supplier+'+..+assessed_supplier=='+assessed_supplier+'+..+filter_by_main_market=='+filter_by_main_market+'+..+filter_by_total_revanue=='+filter_by_total_revanue+'+..+filter_by_employe=='+filter_by_employe+'?business_type='+business_type;
		        }else{
		        	var url = window.location.origin+'/search-product/search=='+search+'+..+key=='+key+'+..+country=='+country+'+..+buyer_protection=='+buyer_protection+'+..+gold_supplier=='+gold_supplier+'+..+assessed_supplier=='+assessed_supplier+'+..+filter_by_main_market=='+filter_by_main_market+'+..+filter_by_total_revanue=='+filter_by_total_revanue+'+..+filter_by_employe=='+filter_by_employe+'?business_type='+business_type;
		        }
		        window.location.href = url;
			}

            $(function() {
            	$('.button_holder').hide();
            	$(".loader").fadeOut("slow");
            	/*$('.contact_supplier').animatedModal({
            		color: "rgba(102, 102, 100, .9)",
            		animatedIn: "lightSpeedIn",
            	});*/
            	var $ui = $('#ui_element');
            	$ui.find('.sb_input').bind('focus click', function() {
            		$ui.find('.sb_down')
            			.addClass('sb_up')
            			.removeClass('sb_down')
            			.andSelf()
            			.find('.sb_dropdown')
            			.show();
            	});
            	$ui.bind('mouseleave', function() {
            		$ui.find('.sb_up')
            			.addClass('sb_down')
            			.removeClass('sb_up')
            			.andSelf()
            			.find('.sb_dropdown')
            			.hide();
            	});
            	$ui.find('.sb_dropdown').find('label[for="all"]').prev().bind('click', function() {
            		$(this).parent().siblings().find(':checkbox').attr('checked', this.checked).attr('disabled', this.checked);
            	});
            	$('[name="key"]').val($('[name="search_str"]').val());
            	
            	$(document).on({
            		click: function(e) {
            			e.preventDefault();
            			var url,base_url,supplier_id,product_id;
            			$('.modal-content').html('<span class="btn btn-block btn-lg"><i class="fa fa-spinner fa-pulse loading_icon text-primary"></i></span>');
            			base_url = $('[name="base_url"]').val();
            			supplier_id = $(this).data('supplier_id');
            			product_id = $(this).data('product_id');
            			
            			url = (product_id =="#") ? base_url+"/contact_supplier/"+supplier_id : base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
            			// $.get(url, function(r) {
            			// 	$('.modal-content').html(r)
            			// })
            			window.location.replace(url);
            			// window.Location.href = url;
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
            	
            	$(document).on({click:function(e){
				  var count_checked_box = $('input[name="filter_by_main_market[]"]:checked')
				  if(count_checked_box.length>0){
				    $('.button_holder').show(300);
				  }else{
				    $('.button_holder').hide(300);
				    $('input[name="filter_by_main_market"]').val('0');
				    search_data();
				  }
				}},'input[name="filter_by_main_market[]"]');

				$(document).on({click:function(e){
					e.preventDefault();
					$('input[name="filter_by_main_market"]').val('0');
				    $('.button_holder').hide(300);
				    search_data();
				}},'.cancel_search');

				var main_market_val = $('[name="filter_by_main_market"]').val();
		        main_market_val_arr = main_market_val.split(",");
		        if(main_market_val_arr.length>0){
		        	if(main_market_val_arr[0] == '0'){
		        		$('.button_holder').hide(300);
		        	}else{
		        		$('.button_holder').show(300);
		        	}
		        }
		        for(i=0;i<main_market_val_arr.length;i++){
		            $('[name="filter_by_main_market[]"][value="'+main_market_val_arr[i]+'"]').prop('checked', true);
		        }
				
				/****************MAIN MARKET SEARCH;************************/				
				$(document).on({
					click: function(e) {
						e.preventDefault();
						var checkedValues = $('input[name="filter_by_main_market[]"]:checked').map(function() {
						    return this.value;
						}).get();
						$('input[name="filter_by_main_market"]').val(checkedValues);
						search_data();
						/*$('.loader').fadeIn('slow');
						var url = $('#search_by_main_market_form').attr('action');
						$.post(url, $('#search_by_main_market_form').serialize(), function(r,status,xhr) {
							$('.features_items').html(r);
							$('.loader').fadeOut('slow');
						})*/
					}
				}, '.search_by_main_market_btn');
				
				/****************TOTAL REVANUE && NO OF EMPLOYE SEARCH;*********************/		
				/*$(document).on({
					click: function(e) {
						e.preventDefault();
						var search_str
						//id=$(this).attr('ca_id');
						$('.loader').fadeIn('slow');
						var url = $(this).attr('href')+'/'+$('[name="search_str"]').val();
						$.get(url, function(r) {
							$('.features_items').html(r);
							$('.loader').fadeOut('slow');
						})
					}
				}, '.filter_by_total_revanue_btn,.filter_by_total_employe_btn');*/

				$(document).on({
					click: function(e) {
						e.preventDefault();
						var total_revanue_id = $(this).attr('ca_revanue_id');
						$('input[name="filter_by_total_revanue"]').val(total_revanue_id);
						search_data();
					}
				}, '.filter_by_total_revanue_btn');

				$(document).on({
					click: function(e) {
						e.preventDefault();
						var total_employe_id = $(this).attr('total_employe_id');
						$('input[name="filter_by_employe"]').val(total_employe_id);
						search_data();
					}
				}, '.filter_by_total_employe_btn');
				
				/****************OTHERS FILTER SEARCH;************************/	
				$(document).on({
					click: function(e) {
						// other_filter_search_func();
						$('.fa_down_show').show();
						$('.fa_up_show').hide();
						$('.country_tab_show').hide();
						var selected = $(this).val();
						var selected_name = $(this).attr('name');
						if(selected_name == 'trade_assurence'){
							if ($('input[name="trade_assurence"]').is(':checked')) {
								$('input[name="buyer_protection_input"]').val('true');
							}else{
								$('input[name="buyer_protection_input"]').val('false');
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
				}, '.others_filter_form_input');
				$(document).on({
					change: function(e) {
						var current_val = $(this).val();
		        		$('[name="countery"]').val(current_val);
		        		var countryText = $('option[value="'+current_val+'"]').html();
		        		if(countryText == 'Select Country'){
		        			$('.replace_name').html('All Countries &amp; Regions');
		        		}else{
		        			$('.replace_name').html(countryText+' selected');
		        		}
		        		$('.fa_down_show').show();
						$('.fa_up_show').hide();
						$('.country_tab_show').hide();
						// other_filter_search_func("select_box");
						search_data();
					}
				}, '.others_filter_select');

				$(document).on({click:function(){
		        	var countryid = $(this).attr('countryid');
		        	$('[name="countery"]').val(countryid);
		        	var countryText = $(this).html();
		    		if(countryText == ' All'){
		    			$('.replace_name').html('All Countries &amp; Regions');
		    			$('[name="country_id_data"]').val(0);
		    		}else{
		    			$('.replace_name').html(countryText+' selected');
		    			$('[name="country_id_data"]').val(countryid);
		    			// $('option[value="'+countryid+'"]').selected = true;
		    		}
		    		$('.fa_down_show').show();
					$('.fa_up_show').hide();
					$('.country_tab_show').hide();
					// other_filter_search_func("select_box");
					search_data();
		        }},'.country_select');

		        $(document).on({click:function(e){
					e.preventDefault();
					$('input[name="search_str"]').val($(this).attr('data-main-product-text'));
				    search_data();
				}},'.main_product_search');

				$(document).on({click:function(e){
					e.preventDefault();
					$('input[name="countery"]').val($(this).attr('href'));
				    search_data();
				}},'.country_click_search');

				$(document).on({click:function(e){
					e.preventDefault();
					$('input[name="filter_by_total_revanue"]').val($(this).attr('href'));
				    search_data();
				}},'.revenue_click_search');

				/* ******** Country search ********** */
			$(document).on({click:function(){
				$('.fa_down_show').toggle();
				$('.fa_up_show').toggle();
				$('.country_tab_show').toggle();
			}}, '.country_tab');

			$('[name="search"]').val($('[name="searched_on"]').val());
			$('ul.pagination').css('margin-top','10px');
			$('ul.pagination').css('margin-right','25px');

            });
        </script>	


@stop