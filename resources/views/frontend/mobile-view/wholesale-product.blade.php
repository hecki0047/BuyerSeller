@extends('mobile-view.layout.master_m')
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
<div class="row padding_0" style="background: #fff;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" style="bottom: -10px;">
            <li data-target="#myCarousel" data-slide-to="0" class="active" style="border-radius:10px !important; border:0 none;"></li>
            <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;"></li>
            <li data-target="#myCarousel" data-slide-to="2" style="border-radius:10px !important; border:0 none;"></li>
              <li data-target="#myCarousel" data-slide-to="3" style="border-radius:10px !important; border:0 none;"></li>
                <li data-target="#myCarousel" data-slide-to="4" style="border-radius:10px !important; border:0 none;"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img style=" width: 100%;" src="{!! asset('assets/fontend/bdtdc-images/automotive-electronics.jpg',is_secured()) !!}" alt="Bangladesh">
            </div>

            <div class="item">
                <img style="width: 100%;" src="{!! asset('assets/fontend/bdtdc-images/jewelry-watches.jpg',is_secured()) !!}" alt="Bangladesh">
            </div>
    
            <div class="item">
                <img style="width: 100%;" src="{!! asset('assets/fontend/bdtdc-images/lighting-products.jpg',is_secured()) !!}" alt="Bangladesh">
            </div>
            <div class="item">
                <img style="width: 100%;" src="{!! asset('assets/fontend/bdtdc-images/product-exibit.jpg',is_secured()) !!}" alt="Bangladesh">
            </div>
            <div class="item">
                <img style="width: 100%;" src="{!! asset('assets/fontend/bdtdc-images/warehousing-services.jpg',is_secured()) !!}" alt="Bangladesh">
            </div>
        </div>
    </div>
</div>
</div>
</section>
<section>
    <div class="container">

<div class="row padding_0" style="background: #fff;">  
    <div class="col-xs-12 padding_0">
 				<div class="cat-pr-list" id="one">Wholesale Category <span><!-- <i class="fa fa-angle-down" aria-hidden="true"></i> --></span></div>
    </div>
       @if ($product_categorys)

            @foreach ($product_categorys as $product_category)
            
    
           <div class="col-xs-12 padding_0" style="padding-bottom: 5px;margin-top:30px; ">
              <ul style="padding-left: 10px;">
        <li style="padding-left: 0%" class="sale-cat-heading-tit"> <i style="width: 2.85em;top: 7px;" class="icon-p {{ $product_category->pro_parent_cat->image ?? '' }}"></i>
        <a href="{{URL::to('wholesale-subcategory/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$product_category->pro_parent_cat->name).'/'.$product_category->pro_parent_cat->id)}}">
            {{ $product_category->pro_parent_cat->name ?? '' }}
        </a>
        <span>  <i class="fa fa-angle-right"></i></span></li>  
      </ul>
      </div>

    <div class="col-xs-12 padding_0" style="padding-bottom:15px; border-left: 1px solid #ddd; border-top:1px solid #ddd;">
		<div class="product-list-limit">
@if ($product_category) 
         @if ($product_category->selected_suppliers) 
         <?php $stop_loop = 0; ?>
        
            @foreach ($product_category->selected_suppliers as $data) 
            <?php 
                    if($stop_loop <= 3){
                        ?>
					<div  class="mixed-product-list mixed-cell col-xs-6" style="  float: left; border-right: 1px solid #ddd;border-bottom: 1px solid #ddd; padding: 0; width: 50%; float: left; max-height: 280px;">
                        @if($data->pro_name_string)
						<a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$data->pro_name_string->name).'=232942253'.$data->product_id,null,is_secured()) }}">
                        <div style="width: 140px; position: relative;display: block;margin: 0 auto;">
							<div class="teletext">
                                @if($data->select_product_images)
                                    <img itemprop="image"   class="main-image" style="max-width: 136px; max-height: 136px; margin-top: 15px;" src="{{ URL::to((isset($data->select_product_images)) ? $data->select_product_images->image : 'no_image.jpg') }}" alt="{{$data->pro_name_string->name ?? ''}}"/>
                                @else
                                    <img itemprop="image"   style="" class="product-img_img img-responsive" src="{{ URL::to('uploads/no_image.jpg') }}" alt="{{$data->pro_name_string->name ?? ''}}" />
                                @endif	
							</div>
                            <div class="txt-content-limit" style="min-width: 136px; padding: 0; text-align: center;">
                            <div class="product-moq-whol">
                                @if($data->cat_pro_price)
                                <div style="line-height: 28px; padding-left: 15px;">MOQ: <span>{{ $data->cat_pro_price->product_MOQ ?? ''}} {{ $data->BdtdcSelectedSupplier_products->ProductUnit->name ?? '' }}</span></div>
                                @endif
                            </div>
                            @if($data->pro_name_string)
                           
                                @if($data->pro_name_string)
                                <span style="font-size: 12px; text-align: center; height: 38px; text-transform:lowercase;">
                                    {{ substr($data->pro_name_string->name, 0, 20) }}..
                                @else
                                    Unknown Product
                                </span>
                                @endif

                                <!-- <span class="ripple-effect" style="width: 313.5px; height: 313.5px; top: -142px; left: -1px;">
                                </span> -->
                           
                            @endif
                                
                            @if($data->BdtdcSelectedSupplier_products)
                            <div class="product-price-limt">
                                <span>US $<?php echo $data->cat_pro_price->product_FOB; ?> {{ $data->BdtdcSelectedSupplier_products->ProductUnit->name ?? '' }}</span>/ Set 
                            </div>
                            @endif
                        </div>
                    </div>
						</a>
                        @endif
						
					</div>
                                            <?php
                    }else{
                        break;
                    }
                    $stop_loop++;
                ?>
                    @endforeach

  @endif
       
    @endif

		</div>
    </div>

    @endforeach
    {!! $product_categorys->render() !!}

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
 </script>

  <script type="text/javascript">
  (function(){

    $('.product-image-wrapper-next').css('margin-bottom','0');
      
    $(window).load(function(){
      $('a[href="#forbuyer"]').click()  
    })
        var section = $('[name="section"]').val();
        (section !="") ? $('.nav-tabs li a[href="#'+section+'"]').click() : false;
          
  }
  );
</script>
@stop