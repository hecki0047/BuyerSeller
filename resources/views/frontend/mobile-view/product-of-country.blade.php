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
    
    <div class="col-sm-12 padding_0">
      <button class="btn btn-default" onclick="window.history.back();" style="width:100%;text-align:center;color: #666;padding:10px;font-size: 20px;padding-top:17px;"><i class="fa fa-reply-all" style="font-size: 30px;" aria-hidden="true"></i></button>
    </div>
    <div class="cat-pr-list"  id="one">
        <span style="width: 50%; float: left;font-size: 16px;">All Category<i class="fa fa-angle-down" aria-hidden="true"></i></span><span style="width: 50%; float: left; font-size: 16px;"><a style="color: #333; text-decoration: none;" href="{{URL::to('country/region')}}"> More Region</a></span>
    </div>

        <div class="col-xs-12 padding_0" style="display:none;" id="two">
            @foreach($parent_category as $pc)
            <div class="sb_pd_list">
                <a href="{{URL::to('sub-category/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$pc->name).'/'.$pc->id)}}" class="pp-list-an">
                    {{$pc->name}}
                </a>
            </div>
            @endforeach
        </div>
</div>

<div class="row padding_0" style="background: #fff;margin-bottom:2%;">
    @if ($cat_products) 

            @foreach ($cat_products as $pro_category)

	<div class="col-xs-12 padding_0" style="margin-top: 12px;">
        @if ($pro_category->selected_suppliers) 
        
      @foreach ($pro_category->selected_suppliers as $data) 
      @if($data->pro_name_string)
		<a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$data->pro_name_string->name).'=232942253'.$data->product_id,null,is_secured()) }}">
    	    <div class="cat_pro_list">
                  @if($data->select_product_images)
                    <img itemprop="image" title="{{ $data->pro_name_string->name ?? '' }}" class="cat_pro_list_img img-responsive" src="{{ URL::to((isset($data->select_product_images)) ? $data->select_product_images->image : 'no_image.jpg') }}" alt="{{ $data->pro_name_string->name ?? '' }}" />
                  @else
                    <img itemprop="image" title="No image" class="cat_pro_list_img img-responsive" src="{{ URL::to('uploads/no_image.jpg') }}" alt="bdtdc" />
                  @endif
    		    <!-- <img class="cat_pro_list_img img-responsive" src="{!!asset('assets/images/nav_img1.jpg',is_secured())!!}"> -->
    	    </div>
        </a>
        @endif
	    <div class="cat_pro_list_des" style="float: right;">
    		<div style="width: 100%; display: block;position: relative;">
                  <div class="det_list" style="font-size: 13px; line-height: 20px; padding-bottom: 10px; font-weight: normal; color: #666; padding-top: 0px;">
                     	@if($data->pro_name_string)
                            {{ substr($data->pro_name_string->name, 0, 30) }}..
                        @else
                            Unknown Product
                        @endif
    					</div>
                        @if($data->cat_pro_price)
        					<div class="det_list">
        							US $<?php echo $data->cat_pro_price->product_FOB; ?>/{{ $data->BdtdcSelectedSupplier_products->ProductUnit->name ?? '' }}
        					</div>
        					<div class="det_list">
        							MOQ: {{ $data->cat_pro_price->product_MOQ ?? ''}} {{ $data->BdtdcSelectedSupplier_products->ProductUnit->name ?? '' }}
        					</div>
                        @endif
    		</div>
        
			<div style="display: block;width: 100%; margin:0; padding: 0; clear: both; padding-top: 10px;">
				<div>
					<div class="pro_sur">
                        <img style="height:18px;width:18px; float: left;" src="{!! asset('assets/images/Buyer-protection-home.png',is_secured()) !!}">
					</div>

                        
					<!-- <div class="pro_sur_gld">
                        @if($pro_category->supplier_info)
                            @if($pro_category->supplier_info->membership_year)
                                <img style="height:18px;width:18px; float: left;" src="{!! asset('assets/helpcenter/Gold-membership.png',is_secured()) !!}">
        					    <span style="float: left;font-weight: bold;font-size: 11px;margin-left: 4px;">
        					       {{ $pro_category->supplier_info->membership_year ?? ''}}YR
        					    </span>
                            @endif
                        @endif
					</div> -->
                     

                @if($country)
					<div class="pro_sur_cnt">
                        <img style="height:16px;width:24px;float: left;" src="{{ asset('assets/global/img/flags/'.strtolower($country->iso_code_2).'.png',is_secured())}}" alt="{{ $country->name }}" >

                        <!-- <img style="height:16px;width:24px; float: left;" src="@if($country->country_image_one)
                          {{ asset('assets/global/img/flags/'.$country->country_image_one->slug) }}
                          @else

                          @endif
                          " alt="bdtdc" > -->
					    <span style="float:left;font-weight: bold;font-size: 11px; margin-left: 4px;">
                            {{ $country->name ?? '' }}
                        </span>
					</div>
                @endif

				</div>
			</div>
			<div style="clear: both;float: left; padding-top: 10px;">
				<div data-product_id="{{ $pro_category->product_id ?? '' }}" data-supplier_id="{{ $pro_category->bdtdcProduct->supplier_product->supplier_id ?? '' }}" class="btn btn-primary contact_supplier" style="padding:0 6px;"><i class="fa fa-envelope-o"></i>Contact Supplier</div> 
			</div>
		</div>
         @endforeach
@endif
			
	</div>
    @endforeach
    {!! $cat_products->render() !!}
@endif
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


    // Contact supplier

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