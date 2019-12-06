@extends('frontend.layouts.master-register')
@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/whole-sale-category-product.css',is_secured()) !!}" rel="stylesheet">
@endsection
	@section('content')
	<br>
<div class="row">
		<div class="col-md-12 padding_0" style="padding-bottom: 1%">
			<ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"><span  itemprop="name"> Home </span><i class="fa fa-angle-right"></i></a></li>

			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ URL::to('wholesale',null,is_secured()) }}" style="color: #000"><span  itemprop="name"> Wholesale </span></a></li>

			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> <span  itemprop="name">{{ $categorys->pro_parent_cat->name ?? ''}} &nbsp;</span></a></li>
			<li style="float: left"><a href="{{URL::to('wholesale/category/product',$categorys['id'],is_secured()) }}" style="color: #000"> <i class="fa fa-angle-right"></i> {{ $categorys->name ?? '' }} <i class="fa fa-angle-right"></i></a></li></ul>
		</div>
	</div>


	<div  class="row item_sha" style="padding-top:2%;padding-bottom: 5%;">
				<div style="padding-right:0px" class="col-sm-2 col-md-3">
					<div class="sh-cat" id="ct-btn" style="width: 70px; padding-bottom: 10px;">
						<span style="font-size: 14px; font-weight: bold; color: #333;">Category</span>
					</div>
				<div class="sb-ct-lst">
					       <div  class="hr-gap no-padding">
			<?php if ($categorys) { ?>
       
            <h3 style="padding-left:0; margin-top: 0;"><a itemprop="url" href="#" style="font-size: 12px;"><i class="fa fa-list-ul"></i>  <?php echo $categorys[ 'name']; ?></a></h3>
            
            	
               
                       
            <ul id="bazar-list" class="pull-left" style="padding:0;">
            	
            @foreach($categorys->cat_parent_cat as $data)
                
                <li class="sale-title-menu-li">               	
                     <a itemprop="url" href="{{URL::to('wholesale/category/product',$data['id'],is_secured()) }}" style="color:#666;padding: 10px" >
                                <?php echo $data[ 'name']; ?>
                            </a>
                   
                 </span>
                </li>
                @endforeach
               <li class="more" style="padding-left: 1.3%;;padding-right: 8%;padding-top: 6%;font-weight: 600;">
                	
                	
                     <a itemprop="url" class="more" href="{{URL::to('Marketplace',null,is_secured()) }}">
                                All Categories
                            </a>
                   
                  
                </li>                              
            </ul>
       
            <?php } ?>
            

        </div>
        </div>

	</div>

     
      <div  class="col-sm-10 col-md-9  item_sha padding-right td-bd prodt-lst-show">
            <div class="col-sm-12 col-md-12" style="padding-bottom:2px;padding-left: 0px;    padding-right: 0px;">
            	<input type="hidden" name="categoryid" value="{{ $categoryid }}">
				<input type="hidden" name="countery" value="{{ $countryid }}">
				<input type="hidden" name="buyer_protection_input_data" value="{{ $buyer_protection }}">
				<input type="hidden" name="gold_supplier_input" value="{{ $gold_supplier }}">
				<input type="hidden" name="assessed_supplier_input" value="{{ $assessed_supplier }}">

               <div style="font-size:12px;padding-top: 6px;padding-left: 10px; float: left;" class="col-sm-2 col-md-2  title_home padding_0">
            	Supplier Location:
            	</div>
				<div class="col-sm-10 col-md-10  padding_0 ">
				 <div class="col-md-3 padding_0">
					<div style="background-color:#fff;border: 1px solid #dae2ed;cursor: pointer;    display: inline-block;height: 22px;    line-height: 22px;padding: 0 0 0 5px;    width: 182px;    vertical-align: middle;color: #333;margin-top: 8px;" class="country_tab">
					    <span style="display: inline-block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; max-width: 153px;" class="replace_name"><?php if($countryid != 0){foreach ($bdtdc_country_list as $value) {
					    	if($countryid == $value->id){
					    		echo $value->name. " Selected";
					    	}
					    }}else{ echo "All Countries &amp; Regions";} ?></span>
					    <i style="padding-left:0px;position: relative;top:-5px" class="fa fa-angle-down fa_down_show" aria-hidden="true"></i>
					    <i style="padding-left:0px;display:none;position: relative;top:-5px" class="fa fa-angle-up fa_up_show" aria-hidden="true"></i>

					</div>
					<div class="container country_tab_show" style="display: none;">
					<div style="position:absolute;border: 1px solid #dae2ed;box-shadow: 2px 2px 3px rgba(0,0,0,.13);background-color: #fff;top: 29px;left: -120px;padding: 10px;overflow: auto;height: 250px;width: 325%;z-index: 1;" class="">
					  <div style="border-bottom: 1px dotted #dae2ed;    padding-bottom: 10px;">
					  	<div class="replace_name" style="cursor: pointer; background: #7d8ca1; color: #fff; font-size: 12px; line-height: 26px; display: inline-block; padding: 0 7px; border-radius: 5px !important;"><?php if($countryid != 0){foreach ($bdtdc_country_list as $value) {
					    	if($countryid == $value->id){
					    		echo $value->name. " Selected";
					    	}
					    }}else{ echo "All Countries &amp; Regions";} ?></div>
					  </div>
					  <select style="box-sizing: border-box;border: 1px solid #dae2ed;color: #333;box-shadow: inset 0 1px 2px rgba(0,0,0,.1);height: 29px;font-size: 12px;width: 29%;padding-left: 24px;margin-top: 10px;margin-bottom: 10px;" class="form-control filter_by_cat_pro_input" name="country_id_data">
							<option value="0">Select Country</option>
							<?php
								foreach($bdtdc_country_list as $bdtdc_country_list_data){
									if($countryid == $bdtdc_country_list_data->id){
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
								foreach ($country as $Countries) {
									echo '<li><a data-toggle="tab" href="#'.explode(' ', $Countries->name)[0].'">'.$Countries->name.'</a></li>';

								}
							?>
						  </ul>

						  <div class="tab-content">
						    <div id="all-con" class="tab-pane fade in active">
						      <div class="col-md-3 padding_0">
						      	<label class="country_select" style="cursor:pointer;"> All</label>
						      </div>
						      <?php
								foreach ($country as $Countries) {
										foreach($Countries->country_region as $p){
											echo '<div class="col-md-3 padding_0"><span class="country_select" style="cursor:pointer;" data-countryid="'.$p->id.'">'.$p->name.'</span></div>';
										}
									}
								?>
						    </div>
						    <?php
							foreach ($country as $Countries) {
								echo '<div id="'.explode(' ', $Countries->name)[0].'" class="tab-pane fade">';
								foreach($Countries->country_region as $p){
									echo '<div class="col-md-3 padding_0"><span class="country_select" style="cursor:pointer;" data-countryid="'.$p->id.'">'.$p->name.'</span></div>';
								}
								echo "</div>";
							}
							?>
						  </div>
					   </div>
					</div>
				</div>
				<div class="col-md-9 col-xs-12 padding_0">
				<label style="font-size:12px; float: none;" class="ui2-checkbox-customize-label">
					<span style="padding-left:5px; float: none;line-height: 24px; margin-left: 8px" class="ui2-checkbox-customize-txt sptp">Supplier Types: </span>
				</label>
				<label title="Buyer Protection: Ensures on-time shipment and pre-shipment product quality" style="font-size:12px;float: none;" class="ui2-checkbox-customize-label">
					<input type="checkbox" class="ui2-checkbox-customize-val cat_filter_check_box" name="buyer_protection" value="false" <?php if($buyer_protection == 'true'){echo 'checked';} ?>>
					<span class="ui2-checkbox-customize-txt"><img style="height:24px;width:24px;" src="{!! asset('assets/gold/Buyer-protection-home.png',is_secured()) !!}" alt="Buyer protection home">Buyer Protection</span>
				</label>
				<label title="Gold Suppliers:pre-qualified suppliers typr" style="font-size:12px;float: none;" class="ui2-checkbox-customize-label">
					<input type="checkbox" class="ui2-checkbox-customize-val cat_filter_check_box" name="gold_supplier" value="false" <?php if($gold_supplier == 'true'){echo 'checked';} ?>>
					<span class="ui2-checkbox-customize-txt"><img style="height:24px;width:24px;" src="{!! asset('assets/gold/gold-com-icon.png',is_secured()) !!}" alt="Gold membership">Gold Supplier</span>
				</label>
				<label title="Assessed Supplier: Supplier assessed by a world-leading inspection company (i.e SGS, Bureau Veritas)." style="font-size:12px;float: none;" class="ui2-checkbox-customize-label">
					<input type="checkbox" class="ui2-checkbox-customize-val cat_filter_check_box" name="assessed_supplier" value="false" <?php if($assessed_supplier == 'true'){echo 'checked';} ?>>
					<span class="ui2-checkbox-customize-txt"><img style="height:24px;width:24px;" src="{!! asset('assets/helpcenter/verified-supplier.png',is_secured()) !!}" alt="verified supplier">Assessed Supplier</span>
				</label>
				</div>

				</div>
            	
        </div>
            	
         
		 <div id="pro_view" class="col-sm-8 col-md-12 col-xs-12 padding-right" data-spm="57">
    	    <div class="col-sm-4 col-md-4 padding_0 padding-right">
	    	    <div class="view-label" style="padding: 8px; float: left;">View  @if(count($products)>=1)
				<strong><?php echo count($products); ?></strong> 
	    	@else
				<strong>0</strong>
	    	@endif
							Product(s) below
				</div>
		    </div>
		    <div class="col-sm-4 col-md-4">
				<div class="view-label text-center" style="padding: 8px;">Total @if(isset($products))
					<strong>{{$products->total()}}</strong> @else
					<strong>0</strong> @endif Result(s) found
				</div>
			</div>
			<div class="col-sm-4 col-md-4">
				<div class="view-label text-right" style="padding: 8px; float: left;">Page No @if(isset($products))
					<strong>{{$products->currentPage()}}</strong> @if($products->lastPage() >0 )
					of <strong>{{$products->lastPage()}}</strong> 
					@endif | 
					<a href="{{$products->previousPageUrl()}}">prev</a> | 
					<a href="{{$products->nextPageUrl()}}">next</a>
					@else
					<strong>0</strong>
					@endif
				</div>
			</div>
        </div> 
                            <br>
                  
      <div class="col-sm-12 col-md-12  padding-right" data-spm="57">

			<div class="col-sm-12 padding_0 " >
			@if($products)
			
			@foreach($products as $product)
				<div class="col-sm-3 col-xs-6 padding_0 product-hover" style="margin-top:10px; margin-left:0px;" itemscope itemtype="http://schema.org/Product">
				<a itemprop="url" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/','-',$product->category_product_name->name).'='.mt_rand(100000000, 999999999).$product->product_id,null,is_secured()) }}" class="slidebox-item-list" style="display: block;">

				@if($product->pro_images_new)
				<img itemprop="image" title="{{ $product->category_product_name->name ?? ''}}" style="height:220px;width:220px;border: 0 none;" class="img-thumbnail" src="{{ URL::to((isset($product->pro_images_new)) ? ''.$product->pro_images_new->image : 'no_image.jpg',null,is_secured()) }}" alt="{{ $product->pro_to_cat_name->name ?? '' }}" />
				@else
				<img itemprop="image" title="{{ $product->category_product_name->name ?? ''}}" style="height:220px;width:220px;border: 0 none;" class="img-thumbnail" src="{{ URL::to('uploads/no_image.jpg',null,is_secured()) }}" alt="{{ $product->pro_to_cat_name->name ?? '' }}" />
				@endif
					
					<div class="product-head-cont">
					<div class="brand-year" style="padding-left:10px;padding-right:10px;padding-top: 18px;height:58px; overflow: hidden;">
							<span  class="brand-year16" itemprop="name">
							{{ substr($product->category_product_name->name, 0, 40) }}...
					</span>
					</div>
					<?php
					if ($product->cat_pro_price) {
					 	if($product->cat_pro_price->product_FOB != null & $product->cat_pro_price->product_FOB != '0' && $product->cat_pro_price->product_FOB != ''){ ?>

					<p class="brand-favorable" style="text-align:left;padding-left:10px;padding-bottom:3; height:32px;">
						<span class="doller-product-price">$<?php
						if ($product->cat_pro_price) {
						 	echo $product->cat_pro_price->product_FOB;
						 }else{
						 	echo "Not available";
						 } ?> </span> / <?php
						if ($product->BdtdcProduct) {
							if ($product->BdtdcProduct->product_unit) {
								echo $product->BdtdcProduct->product_unit->name;
							}else{
								echo "U not available";
							}
						 }else{
						 	echo "P Not available";
						 } ?>
					</p>

					 <?php	}
					 } ?>
					
					<?php if ($product->cat_pro_price) {
					 	if($product->cat_pro_price->product_MOQ != null & $product->cat_pro_price->product_MOQ != '0' && $product->cat_pro_price->product_MOQ != ''){ ?>

					<p class="brand-favorable" style="text-align:left;margin-left:10px; padding-top:0; padding-bottom:0;">
						MOQ: <span style="color:#333;"><?php
						if ($product->cat_pro_price) {
						 	echo $product->cat_pro_price->product_MOQ;
						 }else{
						 	echo "Not available";
						 } ?> <?php
						if ($product->BdtdcProduct) {
							if ($product->BdtdcProduct->product_unit) {
								echo $product->BdtdcProduct->product_unit->name;
							}else{
								echo "U not available";
							}
						 }else{
						 	echo "P Not available";
						 } ?></span> 
					</p>

					<?php	}
					 } ?>

				</div>
				</a>	
				</div>

			@endforeach
			{!! $products->render() !!}
			@endif				

			</div>

   		</div>
	</div>
</div>
<br>
@stop

@section('scripts')
	<script type="text/javascript">
			$(document).ready(function(){
			    $("#ct-btn").click(function(){
			        $(".sb-ct-lst").toggle();
			    });
			});
		function search_data(){
	        var categoryid = $('input[name="categoryid"]').val();
	        var country = $('input[name="countery"]').val();
	        var buyer_protection = $('input[name="buyer_protection_input_data"]').val();
	        var gold_supplier = $('input[name="gold_supplier_input"]').val();
	        var assessed_supplier = $('input[name="assessed_supplier_input"]').val();
	        var url = window.location.origin+'/wholesale/category/product/category=='+categoryid+'+..+country=='+country+'+..+buyer_protection=='+buyer_protection+'+..+gold_supplier=='+gold_supplier+'+..+assessed_supplier=='+assessed_supplier;
	        window.location.href = url;
		}

		$(document).on({change:function(){
        	$('input[name="countery"]').val($(this).val());
        	$('.fa_down_show').show();
			$('.fa_up_show').hide();
			$('.country_tab_show').hide();
        	search_data();
        }},'.filter_by_cat_pro_input');

		$(document).on({click:function(){
        	var countryid = $(this).attr('data-countryid');
        	$('[name="countery"]').val(countryid);
    		$('.fa_down_show').show();
			$('.fa_up_show').hide();
			$('.country_tab_show').hide();
			search_data();
        }},'.country_select');

        /* ******** Country search ********** */
		$(document).on({click:function(){
			$('.fa_down_show').toggle();
			$('.fa_up_show').toggle();
			$('.country_tab_show').toggle();
		}}, '.country_tab');

		$(document).on({
				click: function(e) {
				e.preventDefault();
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

		$('ul.pagination').css('margin-top','15px');
		$('ul.pagination').css('margin-right','25px');



	</script>
@stop