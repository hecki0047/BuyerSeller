@php
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
@endphp
@foreach($suppliers as $s)
<div id="list_product" class="col-xs-12">
	<div class="col-sm-12 padding_0">
	  <div class="col-sm-1 padding_0">
	  	<img src="{{ asset('assets/helpcenter/gs_icon.png',is_secured())}}" />
	  </div>
	  <div class="col-sm-8 padding_0">
	  	<p class="comp_title">
	  		<a target="_blank" href="{{ URL::to('profile/template_',$s['company_id'],is_secured()) }}">{{ $s['name'] }} - {{ $s['company_name'] }}</a>
	  	</p>
	  </div>
	  <div class="col-sm-3">
	  	<div class="padding_0">
	  		<ul class="nav nav-pills nav-justified padding_0">
	  			<li class="padding_0"><a style="float: right;padding:0;" href=""><i class="fa fa-plus-square"></i>Favorites</a></li>
	  			<li class="padding_0"><a style="float: right;padding:0;" href=""><i class="fa fa-plus-square"></i>Compare</a></li>
	  		</ul>
	  	</div>
	  </div>
	  <div class="col-xs-12 col-md-12 col-sm-12 padding_0">
	  	<div style="padding-bottom:10px" class="col-xs-3 col-md-3 col-sm-4 padding_0">
	  		<a href="#" ca_id="{{ $s['id'] }}">
	  			<i class="fa fa-arrow-circle-right"></i>Contact details
	  		</a>
	  	</div>
	  </div>
	</div>
	@php $stop_loop = 0;
		$dynamic_img_area = count($s['product']);
	@endphp
	@foreach($s['product'] as $p)
		<div class="col-xs-7 col-md-2 col-sm-4 padding_0">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						@php $img = ($p['product_image'] == "") ? "no_image.jpg" : $p['product_image']; @endphp
						@if($p['product_images'])
						<img style="width:100%;height:120px;margin-left:0" src="{{ URL::to('bdtdc-product-image/'.trim($p['parent_name']).'/'.trim($p['cattegory_name']),(isset($p['product_images'])) ? $p['product_images'] : 'no_image.jpg',is_secured()) }}" alt="" class="img-responsive">
						@elseif($p['product_image'])
						<img style="width:100%;height:120px;margin-left:0" src="{{ URL::to('uploads',(isset($p['product_image'])) ? $p['product_image'] : 'no_image.jpg',is_secured()) }}" alt="" class="img-responsive">
						@else
						<img style="width:100%;height:120px;margin-left:0" src="{{ asset('uploads/no_image.jpg',is_secured())}}" alt="" class="img-responsive">
						@endif
						<a class="pro_name" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ',$p['product_name']).'='.mt_rand(100000000, 999999999).$p['product_id'],is_secured()) }}" style="display: block; font-size: 12px;line-height: 13px;margin-top:0%">{{ substr($p['product_name'],0,25) }}...</a>
					</div>
				</div>
			</div>			
		</div>
	@endforeach
	@for ($img_loop=0; $img_loop < 3-$dynamic_img_area; $img_loop++)
		<div class="col-xs-7 col-md-2 col-sm-4 padding_0">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img style="width:100%;height:120px;margin-left:0" src="{{ asset('uploads/no_image.jpg',is_secured())}}" alt="" class="img-responsive">
						<a class="pro_name" target="_blank" href="#" style="display: block; font-size: 12px;line-height: 13px;margin-top:0%"></a>
					</div>
				</div>
			</div>			
		</div>
	@endfor
	
	
	<div class="col-xs-7 col-md-6 col-sm-12 padding_0">
		<div id="left_sh" style="padding-left: 15px;" style="" class="col-xs-12 padding_0">
			<div class="col-sm-12 col-md-12 padding_0">
				<p class="summary">Main Product:
					<a style="padding-left:28px" class="margin_supp" href="#" target="_blank">
						<i class="fa fa-product-hunt"></i> Men Tshirt
					</a>,
					<a href="#" target="_blank">
						<i class="fa fa-product-hunt"></i> Girl's tshirt
					</a>
				</p>
				<p class="summary">Country/Region:
					<a style="padding-left:12px" href="#" target="_blank">{{ $s['country'] }}</a>
				</p>
				<p class="summary">Total Revenue:
					<a class="margin_supp" href="#" target="_blank">{{ $s['revanue'] }}</a>
				</p>
				<p class="summary">Top 3 Markets:
					<span class="margin_supp"><a  href="#" target="_blank">{{ get_market_distribution($s['company_id']) }}</a></span>
				</p>
			</div>
		</div>
	</div>
	<div class="col-sm-12 padding_0">
		<div style="float:right" class="col-sm-4 padding_0">
			<ul style="float:left" class="list-inline">
				<li><a href="" data-product_id="#" data-supplier_id="{{ $s['id'] }}" class="btn btn-primary btn-sm contact_supplier"><i class="fa fa-envelope-o"></i>Contact Supplier</a></li>
				<li><i class="fa fa-weixin"></i><a href="#">Talk to me</a></li>
			</ul>
		</div>
	</div>
</div>
@endforeach
<script type="text/javascript">
	(function(){
		// $('.contact_supplier').animatedModal({
		// 	color: "rgba(102, 102, 100, .9)",
		// 	animatedIn: "lightSpeedIn",
		// });
	})()
</script>