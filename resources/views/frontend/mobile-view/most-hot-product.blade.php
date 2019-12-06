@extends('mobile-view.layout.master_m')
	@section('content')
<section>
<div class="container">
<div class="row padding_0" style="background: #fff;">
    <div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
                    <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block;">
                    <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
                    </a>
    </div>
    <button class="btn btn-default" onclick="window.history.back();" style="width:100%;text-align:center;color: #666;padding:10px;font-size: 20px;padding-top:17px;"><i class="fa fa-reply-all" style="font-size: 30px;" aria-hidden="true"></i>
    </button>
    <div class="cat-pr-list" id="one">All Category <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></div>

    <div class="col-xs-12 padding_0" id="two" style="display:none">
        @if ($all_cat_products) 
            @foreach ($all_cat_products as $category)
			<div class="sb_pd_list">
                @if($category->pro_parent_cat)
                    <a href="{{URL::to('sub-category/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$category->pro_parent_cat->name).'/'.$category['parent_id'])}}" class="pp-list-an">
                        {{$category->pro_parent_cat->name}}
                    </a>
                @endif
            </div>
            @endforeach
        @endif
	</div>

  @if ($all_cat_product) 
@foreach ($all_cat_product as $pro_category)
 @if ($pro_category->selected_suppliers)         
            @foreach ($pro_category->selected_suppliers as $data) 
  	   <div class="col-xs-12 padding_0" style="margin-top: 12px; padding-bottom: 30px;">
        @if($data->pro_name_string)
            <a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$data->pro_name_string->name).'=232942253'.$data->product_id) }}">
        @endif
  				    <div class="cat_pro_list">

                        @if($data->select_product_images)
                        <img itemprop="image" title="{{ $data->pro_name_string->name or '' }}" style="height:200px;width: 200px;" class="cat_pro_list_img img-responsive"" src="{{ URL::to((isset($data->select_product_images)) ? $data->select_product_images->image : 'no_image.jpg') }}" alt="{{ $data->pro_name_string->name or '' }}" />
                        @else
                        <img itemprop="image" style="height: 200px;width: 200px;" title="No image" class="cat_pro_list_img img-responsive" src="{{ URL::to('uploads/no_image.jpg') }}" alt="bdtdc" />
                        @endif

    				
    				</div>
  				<div class="cat_pro_list_des_m">
  					<div style="width: 100%; display: block;position: relative;">
                        @if($data->pro_name_string)
                        <div class="det_list" style="font-size: 13px; line-height: 20px; padding-bottom: 10px; font-weight: normal; color: #666; padding-top: 15px;">
                            {{ substr($data->pro_name_string->name, 0, 30) }}..
                        </div>
                   
                        @else
                        Unknown Product
                        @endif
                        @if($data->cat_pro_price)  
						<div class="det_list">
								US $<?php echo $data->cat_pro_price->product_FOB; ?> {{ $data->BdtdcSelectedSupplier_products->ProductUnit->name or '' }}
						</div>  
						<div class="det_list">
								MOQ: {{ $data->cat_pro_price->product_MOQ or ''}} {{ $data->BdtdcSelectedSupplier_products->ProductUnit->name or '' }}
						</div>
                        @else
                        @endif
					</div>
   								
				</div>
			</a>
           
           
		</div>
        @endforeach
@endif
@endforeach
@endif
{!! $all_cat_product->render() !!}
</div>
</div>
</section>

	@stop
	@section('scripts')
	<script type="text/javascript">
		var a = document.getElementById('one');
      var b = document.getElementById('two');

		a.addEventListener('click',showhide);

		function showhide () {
		    if (b.style.display == 'none') {
		    b.style.display = 'block';
		    }
		    else {
		        b.style.display = 'none';
		    }}
	</script>
@stop