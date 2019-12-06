<?php
use App\Models\ProductImage;
use App\Models\ProductImageNew;
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
?>
@extends('frontend.mobile-view.master_m')
    @section('content')
<section>
<div class="container">
<div class="row padding_0" style="background: #fff;">
	<div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:10px;">
		<div id="srch_product_pp">

            <div style="display: block; clear: both; position: relative;overflow: hidden;font-weight: normal;" itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
		       <div class="col-md-12 col-sm-12" style="padding:0px">
			       <form  class="form form-horizontal" itemprop="target"  action="{!!URL::to('search/product-mobile',null,is_secured())!!}" method="get">
						
							<div class="col-xs-12">
							
						       <select style="height:46px;width:100%;" class="form-control all_search_options" name="search">
								  <option value="products">Products</option>
								   <option value="suppliers">Suppliers</option> 
							   </select>
						     
							</div>
							<div class="col-xs-12">
								 <input itemprop="query-input" style="height:46px;border-radius: 0px!important;min-width: 100px;" name="key" class="form-control search_product_key" type="text" placeholder="What are you looking for..." required="required" />

							</div>
							<div class="col-xs-12">
				        		<input itemprop="query-input" type="submit" style="background:#19446F;border-radius: 0px !important;min-width: 100%;" class="btn btn-primary btn-lg pull-left all_search_product" value="Search" />
				    
							</div>
					   
					</form>
				</div>
			</div>
		
		</div>
	</div> 
</div>
</div>
</section>

@if($products)
@if(count([$products])>0)
@foreach($products as $product)
<section>
<div class="container">
<div class="row padding_0" style="background: #fff;margin-bottom:2%;">

	<div style="width: 100%;" class="list_product col-xs-12">
		<div class="col-xs-4 col-md-2 col-sm-4 padding_0">
			<?php
				$pro_img = ProductImage::where('product_id',$product->id)->first();
				$pro_img_new = ProductImageNew::where('product_id',$product->id)->first();
			?>
			@if(count([$pro_img_new]) == 0)
			<img style="height:150px;width:100%" class="img-thumbnail" src="{{ URL::to('uploads/no_image.jpg',null,is_secured()) }}" alt="" />
			@else
			<img style="height:150px;width:100%" class="img-thumbnail" src="{{ URL::to((isset($pro_img_new->image)) ? $pro_img_new->image : 'no_image.jpg',null,is_secured()) }}" alt="" />
			@endif

			<!-- <img style="height:150px;width:100%" class="img-thumbnail" src="" alt="" /> -->
		</div>
		<div class="col-xs-8 col-md-8 col-sm-8">
			
			<div class="col-xs-12 padding_0">
				<div class="col-sm-6 col-xs-12 padding_0">
					<p><a style="font-size:12px" target="_blank" href="@if($product->product_name)
							{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$product->product_name->name).'='.mt_rand(100000000, 999999999).$product->id,null,is_secured()) }}
							@else
							{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-','no name').'='.mt_rand(100000000, 999999999).$product->id,null,is_secured()) }}
							@endif">{{ $product->product_name->name ?? '' }}</a></p>
					<!-- <p style="margin:0 0 0px;display:block;" class="summary_pro">Retro  BOHO Women Floral summer beach...</p>
					<p>
						<a class="custom_click_search" data-id-type="category" href="">
					
						</a>
					</p> -->
					<!-- <p>US$6.00-11.00/Piece</p> -->
					<p>
						@if($product->product_prices)
							@if(trim($product->product_prices->product_FOB) != '' && trim($product->product_prices->product_FOB) != '0' && $product->product_prices->product_FOB != null)
								<p>
									<strong>	US $</strong>@if($product->product_prices)
									{{ $product->product_prices->product_FOB }}
									@endif
									/@if($product->ProductUnit)
									{{ $product->ProductUnit->name }}
									@endif
								</p>
							@endif
							@endif
					</p>

					<p>
					<span>
						 <img style="height:25px;width:20px;" src="{!! asset('assets/gold/Buyer-protection-home.png',is_secured()) !!}" alt="" />
						
					</span>
					
					@if($product->bdtdcProductToCategory)
						@if($product->bdtdcProductToCategory->supplier_info)
							@if($product->bdtdcProductToCategory->supplier_info->membership_year)
								<span>
									<img style="height:25px;width:20px;" src="{!! asset('assets/helpcenter/Gold-membership.png',is_secured()) !!}" alt="" />
									<span style="color: #000;font-size:12px;margin-left:-3%;">
										{{ $product->bdtdcProductToCategory->supplier_info->membership_year ?? ''}}
									</span>
			                        <span style="color: #000;font-size:12px;">YR</span>

								</span>
							@endif
						@endif
					@endif


					@if($product->bdtdcProductToCategory)
					@if($product->bdtdcProductToCategory->supp_pro_company)
								@if($product->bdtdcProductToCategory->supp_pro_company->location_of_reg_string)
					<span>
					
						<img itemprop="image" style="width: 20px;height: 12px;" src="{{ asset('assets/frontend/images/flags/'.strtolower($product->bdtdcProductToCategory->supp_pro_company->location_of_reg_string->iso_code_2).'.png',is_secured())}}" alt="{{ $product->bdtdcProductToCategory->supp_pro_company->location_of_reg_string->name ?? ''}}" />
					</span>
					@endif
					@endif
					@endif
					<span>
						@if($product->bdtdcProductToCategory)
							@if($product->bdtdcProductToCategory->supp_pro_company)
								@if($product->bdtdcProductToCategory->supp_pro_company->location_of_reg_string)
									<span class="custom_click_search" data-id-type="country">
									{{ $product->bdtdcProductToCategory->supp_pro_company->location_of_reg_string->name ?? '' }}
								</span>
								@else
									Country not available
								@endif
							@else
								Country not available
							@endif
						@endif
					</span>
					</p>
					@if($product->supplier_product)
					<p>
						<div data-product_id="{{ $product->id ?? '' }}" data-supplier_id="{{ $product->supplier_product->supplier_id ?? '' }}" class="btn btn-primary btn-join contact_supplier" style="padding:0 6px;"><i class="fa fa-envelope-o"></i>Contact Supplier</div>
					</p>
					@else
					@endif

				</div>
				
			</div>

		</div>

	</div>
			

</div>
</div>
</section>

@endforeach
{!! $products->render() !!}
@else

Your product is not matching with ours.
@endif
@endif
<div style="clear: both;"></div>
@stop
@section('scripts')
<script type="text/javascript">
  
/*search product from mobile*/
 $(document).on({click:function(e){
    e.preventDefault();

    var base_url='{{URL::to("/")}}';
    // alert(base_url);
    var name_search= $('.search_product_key').val();
    // alert(name_search);

    var url=base_url+'/search/product-mobile?name_search='+name_search;
    window.location.href=url;
   }},'.all_search_product');
/*search product from mobile*/
     // Contact Supplier

      $(document).on({

                    click: function(e) {

                        e.preventDefault();

                        $('.modal-content').html('<span class="btn btn-block btn-lg"><i class="fa fa-spinner fa-pulse loading_icon text-primary"></i></span>');

                        var base_url = window.location.origin;//$('[name="base_url"]').val();

                        var supplier_id = $(this).data('supplier_id');

                        var product_id = $(this).data('product_id');

                        var url = base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
                        window.location.href = url;

                       

                    }

                }, '.contact_supplier');

</script>
@stop