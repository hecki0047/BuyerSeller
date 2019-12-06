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
	$country = BdtdcCountry::get();
?>
@extends('frontend.mobile-view.master_m')
    @section('content')
<div class="row padding_0" style="background: #fff;">
	<div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:10px;">
		<div id="srch_product_pp">

            <div style="display: block; clear: both; position: relative;overflow: hidden;font-weight: normal;" itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
		       <div class="col-md-12 col-sm-12" style="padding:0px">
			        <form  class="form form-horizontal" itemprop="target"  action="{!!URL::to('search-product',null,is_secured())!!}" method="post">
						<input itemprop="url" type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="searched_on" value="{{$searched_on}}">
						<input type="hidden" name="search_str" value="{{$search_str}}">
							<div class="col-sm-3">
							
						        <select style="height:46px;width:100%;" class="form-control all_search_options" name="search">
								  <option value="products" <?php if($searched_on == 'products'){echo 'selected';} ?>>Products</option>
								  <option value="suppliers" <?php if($searched_on == 'suppliers'){echo 'selected';} ?>>Suppliers</option>
								</select>
						     
							</div>
							<div class="col-sm-6">
								 <input itemprop="query-input" style="height:46px;border-radius: 0px!important;min-width: 100px;" name="key" class="form-control search_key" type="text" placeholder="What are you looking for..." required="required" />

							</div>
							<div class="col-sm-3">
				        <input itemprop="query-input" type="submit" style="background:#19446F;border-radius: 0px !important;min-width: 100%;" class="btn btn-primary btn-lg pull-left all_search" value="Search" />
				    
							</div>
					   
					</form>
				</div>
			</div>
		
		</div>
	</div> 
</div>

<div class="features_items row" style=" margin: 0px ">
		<!--THIS DATA AREA WILL BE OVERWRIDE WHEN FILTER SEARCH IS TRIGERED;-->
		<?php

		?>
		@if($suppliers)
		@foreach($suppliers as $s)

<div class="row padding_0" style="background: #fff;margin-bottom:2%;">

	<div style="width: 100%;" class="list_product col-xs-12">
		<div class="col-xs-4 col-md-2 col-sm-4 padding_0">
			
			@if($s->company_description)
			
			<img style="height:70%;width:100%;" src="{{ URL::to('uploads',$s->company_description->company_logo,is_secured()) }}" alt="" />
			
		
			@endif


		</div>
		<div class="col-xs-8 col-md-8 col-sm-8">
			
			<div class="col-xs-12 padding_0">
				<div class="col-sm-6 col-xs-12 padding_0">
					<p>
						<a style="font-size:12px" target="_blank" href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$s->name_string->name),$s->id,is_secured()) }}">
						<?php if($s->users){echo $s->users->first_name;}else{echo "name not available";} ?> - <?php if($s->name_string){echo $s->name_string->name;}else{echo "name not available";} ?>
						</a>
					</p>


					<p class="summary">Country/Region:
							<span><a style="padding-left:12px" class="country_click_search" href="<?php if($s->location_of_reg_string){echo $s->location_of_reg_string->id;}else{} ?>" target="_blank"><?php if($s->location_of_reg_string){echo $s->location_of_reg_string->name;}else{echo "not available";} ?></a></span>
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
@endforeach
{!! $suppliers->render() !!}
@endif








</div>






@stop
@section('scripts')
<script type="text/javascript">
     $(document).ready(function(){       
        $(document).on({click:function(e){        
          e.preventDefault();       
          var search_options = $('select[name="search"].all_search_options').val();       
          var search_key = $('input[name="key"].search_key').val();       
          window.location.href = window.location.origin+'/search-product/search=='+search_options+'+..+key=='+search_key+'+..+country==0+..+buyer_protection==false+..+gold_supplier==false+..+assessed_supplier==false+..+filter_by_main_market==0+..+filter_by_total_revanue==0+..+filter_by_employe==0';       
        }},'input[value="Search"].all_search');       
      });  

     // Contact Supplier

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
            			base_url = "{{URL::to('/')}}";
            			supplier_id = $(this).data('supplier_id');
            			product_id = $(this).data('product_id');
            			
            			url = base_url+"/contact_supplier/" + supplier_id;
            			// $.get(url, function(r) {
            			// 	$('.modal-content').html(r)
            			// })
            			window.location.replace(url);
            			// window.Location.href = url;
            		}
            	}, '.contact_supplier');
            

            	
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

			// $('[name="search"]').val($('[name="searched_on"]').val());
			$('ul.pagination').css('margin-top','10px');
			$('ul.pagination').css('margin-right','25px');

            });

</script>
@stop