<?php
	use App\Models\Country;
	use App\Models\Users;
	function get_market_distribution($zone_id){
		$string =[];
		$market = DB::table('bdtdc_company_main_markets as main_market')
			->join('bdtdc_form_values as fv','fv.id','=','main_market.main_market_zone')
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
@extends('frontend.layouts.master-register')

@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/frontend/css/search-supplier.css',is_secured()) !!}" rel="stylesheet">
  @endsection
	@section('content')
	<br><br>
		@include('frontend.layouts.search_result_aside')
<div class="col-sm-9 col-md-10 col-xs-12 padding_0">
	<div id="item_sha" class="col-sm-12 col-md-12 col-xs-12 padding-right" style="padding-bottom: 0.5%">
		<form action="{{ URL::to('others_filter',null,is_secured()) }}" class="form others_filter_form" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="searched_on" value="{{ $searched_on }}">
			<input type="hidden" name="search_str" value="{{ $search_str }}">
			<input type="hidden" name="countery" class="others_filter_select" value="{{ $country_id }}">
			<input type="hidden" name="buyer_protection_input" value="{{ $buyer_protection }}">
			<input type="hidden" name="gold_supplier_input" value="{{ $gold_supplier }}">
			<input type="hidden" name="assessed_supplier_input" value="{{ $assessed_supplier }}">
			<input type="hidden" name="filter_by_main_market" value="{{ $filter_by_main_market }}">
			<input type="hidden" name="filter_by_total_revanue" value="{{ $filter_by_total_revanue }}">
			<input type="hidden" name="filter_by_employe" value="{{ $filter_by_employe }}">
			<input type="hidden" name="business_type" value="{{ $business_type }}">
			<div class="col-sm-4 col-md-4 col-xs-12">
				<div style="font-size:12px;line-height: 32px;padding-right:4%" align="right" class="col-sm-6 col-md-6 col-xs-12 title_home padding_0">Supplier Location: </div>
				<div style="margin-bottom:2%" class="col-sm-6 col-md-6 col-xs-12 padding_0 ">
					<input type="hidden" name="countery" value="0">
					<div style="background-color: #fff;border: 1px solid #dae2ed;    display: inline-block;height: 24px;    line-height: 22px;padding: 0 0 0 5px;    width: 192px;    vertical-align: middle;color: #333;margin-top: 4px;" class="country_tab">
					    <span class="replace_name"><?php if($country_id != 0){foreach ($bdtdc_country_list as $value) {
					    	if($country_id == $value->id){
					    		echo $value->name. " Selected";
					    	}
					    }}else{ echo "All Countries &amp; Regions";} ?></span>
					    <i style="padding-right:5px;" class="fa fa-angle-down fa_down_show" aria-hidden="true"></i>
					    <i style="padding-left:5px;padding-right:5px;display:none;" class="fa fa-angle-up fa_up_show" aria-hidden="true"></i>

					</div>
					<div class="container country_tab_show" style="display: none;">
					<div style="position:absolute;border: 1px solid #dae2ed;box-shadow: 2px 2px 3px rgba(0,0,0,.13);background-color: #fff;top: 27px;left: -120px;padding: 10px;overflow: auto;height: 250px;width: 450%;z-index: 1;" class="">
					  <div style="border-bottom: 1px dotted #dae2ed;    padding-bottom: 10px;">
					  	<div class="replace_name" style="background: #7d8ca1;color: #fff;font-size: 12px;    line-height: 26px;width: 162px;padding-left: 7px;    border-radius: 5px !important;"><?php if($country_id != 0){foreach ($bdtdc_country_list as $value) {
					    	if($country_id == $value->id){
					    		echo $value->name. " Selected";
					    	}
					    }}else{ echo "All Countries &amp; Regions";} ?></div>
					  </div>

					  <!-- <div style="padding-top: 10px;padding-bottom: 10px;position: relative;">
					    <input style="box-sizing: border-box;border: 1px solid #dae2ed;color: #333;box-shadow: inset 0 1px 2px rgba(0,0,0,.1);height: 28px;    padding-left: 24px;" class="" type="text" placeholder="Type to find a country">
					    <i style="position: absolute;left: 7px;    top: 17px;color: #999;" class="fa fa-search" aria-hidden="true"></i>
					    
					  </div> -->
					  <select style="box-sizing: border-box;border: 1px solid #dae2ed;color: #333;box-shadow: inset 0 1px 2px rgba(0,0,0,.1);height: 29px;font-size: 12px;width: 29%;padding-left: 24px;margin-top: 10px;margin-bottom: 10px;" class="form-control others_filter_select" name="country_id_data">
							<option value="0">Select Country</option>
							<?php
								foreach($bdtdc_country_list as $bdtdc_country_list_data){
									if($country_id == $bdtdc_country_list_data->id){
										echo '<option value="'.$bdtdc_country_list_data->id.'" selected>'.$bdtdc_country_list_data->name.'</option>';
									}else{
									echo '<option value="'.$bdtdc_country_list_data->id.'">'.$bdtdc_country_list_data->name.'</option>';
									}
								}
							?>
						</select>
						  <ul class="nav nav-tabs">
						    <li class="active"><a data-toggle="tab" href="#all-con">All Countries</a></li>
						    <?php
								foreach ($country_data as $Countries_data) {
									echo '<li><a data-toggle="tab" href="#'.explode(' ', $Countries_data->name)[0].'">'.$Countries_data->name.'</a></li>';
									/*$region = $Countries->name;
									$counter = 0;
									foreach($Countries->country_region as $p){
										$counter = count($p->contry_products);
										if($counter > 0){
										echo '<li><a data-toggle="tab" href="#'.explode(' ', $region)[0].'">'.$region.'</a></li>';
										break;
										}
									}*/
								}
							?>
						  </ul>

						  <div class="tab-content">
						    <div id="all-con" class="tab-pane fade in active">
						      <div class="col-md-3 padding_0">
						      	<label class="country_select" style="cursor:pointer;" countryid="0"> All</label>
						      </div>
						      <?php
								foreach ($country_data as $Countries_data) {
										foreach($Countries_data->country_region as $p){
											echo '<div class="col-md-3 padding_0"><label class="country_select" style="cursor:pointer;" countryid="'.$p->id.'">'.$p->name.'</label></div>';
										}
									}
								?>
						    </div>
						    <?php
							foreach ($country_data as $Countries_data) {
								echo '<div id="'.explode(' ', $Countries_data->name)[0].'" class="tab-pane fade">';
								foreach($Countries_data->country_region as $p){
									echo '<div class="col-md-3 padding_0"><label class="country_select" style="cursor:pointer;" countryid="'.$p->id.'">'.$p->name.'</label></div>';
								}
								echo "</div>";
							}
							?>
						  </div>
					</div>
					</div>
					<!-- <select name="countery" class="form-control padding_0 others_filter_select">
						<option value="0">-Please Select-</option>
						@foreach($country as $c)
							<option value="{{ $c->id }}">{{ $c->name }}</option>
						@endforeach
					</select> -->
				</div>
			</div>
			<div class="col-sm-8 col-md-8 col-xs-12" style="padding-top:0px;text-align: right;">
				<label style="font-size:12px" class="ui2-checkbox-customize-label">
					<span class="ui2-checkbox-customize-txt">Supplier Types: </span>
				</label>
				<label style="font-size:12px" class="ui2-checkbox-customize-label">
					<input name="trade_assurence" type="checkbox" class="ui2-checkbox-customize-val others_filter_form_input" value="0" <?php if($buyer_protection == 'true'){echo 'checked';} ?>>
					<span class="ui2-checkbox-customize-txt"><img style="height:25px;width:25px;" src="{!! asset('assets/gold/Buyer-protection-home.png',is_secured()) !!}">Buyer Protection</span>
				</label>
				<label style="font-size:12px" class="ui2-checkbox-customize-label">
					<input name="gold_supplier" type="checkbox" class="ui2-checkbox-customize-val others_filter_form_input" value="0" <?php if($gold_supplier == 'true'){echo 'checked';} ?>>
					<span class="ui2-checkbox-customize-txt"><img style="height:25px;width:25px;" src="{!! asset('assets/helpcenter/Gold-membership.png',is_secured()) !!}">Gold Supplier</span>
				</label>
				<!-- </a> -->
				<label style="font-size:12px" class="ui2-checkbox-customize-label">
					<input name="assessed_supplier" type="checkbox" class="ui2-checkbox-customize-val others_filter_form_input" value="0" <?php if($assessed_supplier == 'true'){echo 'checked';} ?>>
					<span class="ui2-checkbox-customize-txt"><img style="height:25px;width:25px;" src="{!! asset('assets/helpcenter/verified-supplier.png',is_secured()) !!}">Assessed Supplier</span>
				</label>
			</div>
		</form>
	</div>
	<br>
		<div id="pro_view" class="col-sm-12 col-md-12 col-xs-12 padding-right" data-spm="57">
			<div class="col-sm-4 col-md-4">
				<div class="view-label" style="padding: 8px;text-align:center !important;">View @if(isset($suppliers))
					<strong><?php echo count($suppliers); ?></strong> @else
					<strong>0</strong> @endif Supplier(s) below
				</div>
			</div>
			<div class="col-sm-4 col-md-4">
				<div class="view-label" style="padding: 8px; text-align:center !important;">Total @if(isset($suppliers))
					<strong>{{$suppliers->total()}}</strong> @else
					<strong>0</strong> @endif Result(s) found
				</div>
			</div>
			<div class="col-sm-4 col-md-4">
				<div class="view-label" style="padding: 8px; text-align:center !important;">Page No @if(isset($suppliers))
					<strong>{{$suppliers->currentPage()}}</strong> @if($suppliers->lastPage() >0 )
					of <strong>{{$suppliers->lastPage()}}</strong> 
					@endif | 
					<a href="{{$suppliers->previousPageUrl()}}">prev</a> | 
					<a href="{{$suppliers->nextPageUrl()}}">next</a>
					@else
					<strong>0</strong>
					@endif
				</div>
			</div>
		</div>
	<br>
	<div id="" class="col-sm-12 col-md-12 col-xs-12 padding-right" style="padding-top:2%;" >
	<input type="hidden" name="base_url" value="{{ URL::to('/',null,is_secured()) }}">
	
	<!---LOADING ANIMATION TRIGERED TO THIS LOADER CLASS;- -->
	<div class="loader"></div>
	
	<div class="features_items row" style=" margin: 0px ">
		<!--THIS DATA AREA WILL BE OVERWRIDE WHEN FILTER SEARCH IS TRIGERED;-->
		<?php
		// echo "<pre>";
			// echo $suppliers[1]->company_id."<br>";
			// echo $suppliers[1]->BdtdcCompany->users->first_name."<br>";
			// echo $suppliers[1]->name."<br>";
			// echo $suppliers[1]->BdtdcCompany->user_id."<br>";
			// echo $suppliers[1]->BdtdcCompany->location_of_reg_string->name."<br>";
			// // print_r($suppliers[1]->BdtdcCompany->name_string->company_product)."<br>";
			// echo $suppliers[1]->BdtdcCompany->name_string->company_product[0]->pro_to_cat_name->name."<br>";
			// echo $suppliers[1]->BdtdcCompany->name_string->company_product[0]->product_id."<br>";
			// // echo $suppliers[1]->BdtdcCompany->name_string->company_product[0]->pro_images->image."<br>";
			// // dd($suppliers[1]->BdtdcCompany->name_string->company_product[0]->pro_images);
			// echo $suppliers[1]->BdtdcCompany->name_string->company_product[0]->pro_images_new->image."<br>";
			// echo $suppliers[1]->BdtdcCompany->name_string->company_product[0]->bdtdcCategory->name."<br>";
			// echo $suppliers[1]->BdtdcCompany->name_string->company_product[0]->pro_parent_cat->name."<br>";
			// echo $suppliers[0]->BdtdcCompany->tradeinfo->BdtdcFormValue->value."<br>";
			// print_r($suppliers[0]->BdtdcCompany->tradeinfo)."<br>";
			// print_r(DB::table('bdtdc_form_keywords')->get());
			// echo $suppliers[1]->name."<br>";
			// dd($suppliers);
		// echo "</pre>";
		?>
		@if($suppliers)
		@foreach($suppliers as $s)
		<div class="list_product col-xs-12" style=" border-bottom: 1px solid #ddd; margin-bottom: 1% ">
			<div class="col-sm-12 padding_0" >
			  <div  class="col-sm-9 padding_0">

			   @if($s->supplier_info)
                   			@if($s->supplier_info->payment)
                   				<img style="height: 25px;width: 25px;float:left;" src="{{ asset('assets/gold/Gold-membership.jpg',is_secured())}}" />
                                          
                             @else
                             <img style="height: 25px;width: 25px; float:left;" src="{{ asset('assets/gold/bdtdc-free.jpg',is_secured())}}" />
                             @endif
                                        

						@else
					<img style="height: 25px;width: 25px;float:left;" src="{{ asset('assets/gold/bdtdc-free.jpg',is_secured())}}" />

						@endif
			  
			  
			  	<p class="comp_title">
					@if($s->name_string)
			  		<a target="_blank" href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$s->name_string->name),$s->id,is_secured()) }}"><?php if($s->users){echo $s->users->first_name;}else{echo "name not available";} ?> - <?php if($s->name_string){echo $s->name_string->name;}else{echo "name not available";} ?></a>
			  		@else
					<a target="_blank" href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-','not available'),$s->id,is_secured()) }}"><?php if($s->users){echo $s->users->first_name;}else{echo "name not available";} ?> - <?php if($s->name_string){echo $s->name_string->name;}else{echo "name not available";} ?></a>
			  		@endif
			  	</p>
			  </div>
			  <div class="col-sm-3">
			  	<div class="padding_0">
			  		<ul class="nav nav-pills nav-justified padding_0">
			  			<li class="padding_0"><a style="float: left;padding:0;" href=""><i class="fa fa-plus-square"></i>Favorites</a></li>
			  			<!-- <li class="padding_0"><a style="float: left;padding:0;" href=""><i class="fa fa-plus-square"></i>Compare</a></li> -->
			  		</ul>
			  	</div>
			  </div>
			  <div class="col-xs-12 col-md-12 col-sm-12 padding_0">
			  	<div style="padding-bottom:10px; padding-left:15px;" class="col-xs-6 col-md-4 col-sm-4 padding_0">
			  	@if($s->name_string)
			  		<a href="{{ URL::to('contact/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$s->name_string->name),$s->id,is_secured()) }}" ca_id="{{ $s->user_id }}">
			  			<i class="fa fa-arrow-circle-right"></i>Contact details
			  		</a>
			  	@else
					<a href="{{ URL::to('contact/'.preg_replace('/[^A-Za-z0-9\-]/', '-','not available'),$s->id,is_secured()) }}" ca_id="{{ $s->user_id }}">
			  			<i class="fa fa-arrow-circle-right"></i>Contact details
			  		</a>
			  	@endif
			  	</div>
			  </div>
			</div>
			<?php $stop_loop = 0; ?>
			@if($s->company_description)
			@if($s->company_description->company_product)
			@foreach($s->company_description->company_product as $p)
				<?php 

					if($stop_loop <= 2){
						?> 
						<div class="col-xs-7 col-md-2 col-sm-4 padding_0">
							<div class="product-image-wrapper">
							<a target="_blank" class="" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $p->pro_to_cat_name->name).'='.mt_rand(100000000, 999999999).$p->product_id,null,is_secured()) }}" style="display: block;">
								<div class="single-products">

									<div class="productinfo text-center">
									@if($p->pro_images_new)
									<img title="{{ $p->pro_to_cat_name->name ?? '' }}" style="height:150px;width:250px" class="img-thumbnail" src="{{ URL::to((isset($p->pro_images_new)) ? ''.$p->pro_images_new->image : 'no_image.jpg',null,is_secured()) }}" alt="{{ $p->pro_parent_cat->name ?? '' }}" />
									@elseif($p->pro_images)
									<img title="{{ $p->pro_parent_cat->name ?? '' }}" style="width:250px;height:120px;margin-left:0" src="{{ asset('uploads/'.$p->pro_images->image.'',is_secured())}}" alt="" class="img-responsive" alt="{{ $p->pro_parent_cat->name ?? '' }}">
									@else
									<img title="{{ $p->pro_parent_cat->name ?? '' }}" style="width:250px;height:120px;margin-left:0" src="{{ asset('uploads/no_image.jpg',is_secured())}}" alt="" class="img-responsive" alt="{{ $p->pro_parent_cat->name ?? '' }}">
									@endif

										<a target="_blank" class="pro_name" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $p->pro_to_cat_name->name).'='.mt_rand(100000000, 999999999).$p->product_id,null,is_secured()) }}" style="display: block; font-size: 12px;line-height: 13px;margin-top:0%">{{ substr($p->pro_to_cat_name->name,0,25) }}...</a>
									</div>

								</div>
								</a>
							</div>			
						</div>
						<?php
					}else{
						break;
					}
					$stop_loop++;
					// echo $stop_loop;

				?>
			@endforeach
			@endif
			@endif

			<?php
				for ($img_loop=0; $img_loop < 3-$stop_loop; $img_loop++) { ?>

						<div class="col-xs-7 col-md-2 col-sm-4 padding_0">
							<div class="product-image-wrapper">
							<a target="_blank" class="" href="#" style="display: block;">
								<div class="single-products">
									<div class="productinfo text-center">
									<img title="" style="width:100%;height:120px;margin-left:0" src="{{ asset('uploads/no_image.jpg',is_secured())}}" alt="" class="img-responsive" alt="">
										<a target="_blank" class="pro_name" href="#" style="display: block; font-size: 12px;line-height: 13px;margin-top:0%"></a>
									</div>

								</div>
								</a>
							</div>			
						</div>

			<?php } ?>
			
			<div class="col-xs-7 col-md-6 col-sm-12 padding_0">
				<div id="left_sh" style="padding-left: 15px;" style="" class="col-xs-12 padding_0">
					<div class="col-sm-12 col-md-12 padding_0">
						<p class="summary"><span style="margin-right:10px;">Main Product: </span>
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
						</p>
						<p class="summary">Country/Region:
							<a style="padding-left:12px" class="country_click_search" href="<?php if($s->location_of_reg_string){echo $s->location_of_reg_string->id;}else{} ?>" target="_blank"><?php if($s->location_of_reg_string){echo $s->location_of_reg_string->name;}else{echo "not available";} ?></a>
						</p>
						<p class="summary">Total Revenue:
							<a class="margin_supp revenue_click_search" href="<?php if($s->tradeinfo){if($s->tradeinfo->BdtdcFormValue){echo $s->tradeinfo->BdtdcFormValue->id;}else{echo '0';}}else{echo '0';} ?>"><?php if($s->tradeinfo){if($s->tradeinfo->BdtdcFormValue){echo $s->tradeinfo->BdtdcFormValue->value;}else{echo "None";}}else{echo "None";} ?></a>
						</p>
						<p class="summary">Top 3 Markets:
							<span class="margin_supp"><a  href="#" target="_blank">{{ get_market_distribution($s->id) }}</a></span>
						</p>
					</div>
				</div>
			</div>
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
		@endforeach
		{!! $suppliers->render() !!}
		@endif
	</div>
	
	<br>
	<br>
	<!--/recommended_items-->
	
	
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
		        var url = window.location.origin+'/search-product/search=='+search+'+..+key=='+key+'+..+country=='+country+'+..+buyer_protection=='+buyer_protection+'+..+gold_supplier=='+gold_supplier+'+..+assessed_supplier=='+assessed_supplier+'+..+filter_by_main_market=='+filter_by_main_market+'+..+filter_by_total_revanue=='+filter_by_total_revanue+'+..+filter_by_employe=='+filter_by_employe+'?business_type='+business_type;
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