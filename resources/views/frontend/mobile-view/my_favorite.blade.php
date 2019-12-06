<?php 
use App\Models\ProductImageNew;
?>
@extends('mobile-view.layout.master_m')
    @section('content')
<section>
<div class="container">
    <div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 28px;">
        <div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
            <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block;">
            <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
            </a>
        </div>
        
    </div>


<div class="row padding_0" style="margin-top:2%;margin-bottom:2%;">
    
@if($favorite_product)
@foreach($favorite_product as $f)
@if($f->bdtdc_product)
    @foreach($f->bdtdc_product as $fd)
    <div class="col-xs-12 padding_0" style="margin-bottom:2%;background: #fff;">
            <a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$fd->product_name->name).'='.mt_rand(100000000, 999999999).$fd->id,null,is_secured()) }}">
                <div class="cat_pro_list">
                    <?php
                        $pro_img_new = ProductImageNew::where('product_id',$f->data)->first();
                    ?>

                   
                @if($fd->product_image_new)
                <img class="cat_pro_list_img img-responsive" src="{{ URL::to((isset($fd->product_image_new->image)) ? $fd->product_image_new->image : 'no_image.jpg',null,is_secured()) }}" alt="" />
                @else
                <img class="cat_pro_list_img img-responsive" src="{{ URL::to('uploads/no-image.jpg',null,is_secured()) }}" alt="" />
                @endif
        </div>
        <div class="cat_pro_list_des">
            <div style="width: 100%; display: block;position: relative;">
                <div class="det_list" style="font-size: 13px; line-height: 20px; padding-bottom: 10px; font-weight: normal; color: #666; padding-top: 15px; height: 60px; overflow: hidden;">

                    {{$fd->product_name->name}}

                </div>
                   
                @if($fd->product_prices)
                    <div class="det_list">
                        <p> US $ {{$fd->product_prices->product_FOB}}</p>
                    </div>
                    <div class="det_list">
                        <p> MOQ: {{$fd->product_prices->product_MOQ}} {{$fd->product_unit->name}}</p>
                    </div>
                @endif
                    
            </div>
        <div style="display: block;width: 100%; margin:0; padding: 0; clear: both; padding-top: 10px;">
                <div>
                    <div class="pro_sur" style="width: 30px;"><img style="height:18px;width:18px; float: left;" src="{!! asset('assets/frontend/images/Buyer-protection-home.png',is_secured()) !!}">
                    </div>
                    <div class="pro_sur_gld" style="width: 40px;">
                        @if($fd->supplier_product)
                            @if($fd->supplier_product->supplier_membership)
                                @if($fd->supplier_product->supplier_membership->membership_year)
                                    <span>
                                        <img style="height:25px;width:20px;" src="{!! asset('assets/frontend/images/helpcenter/Gold-membership.png',is_secured()) !!}" alt="" />
                                        <span style="color: #000;font-size:12px;margin-left:-3%;">
                                            {{ $fd->supplier_product->supplier_membership->membership_year ?? ''}}
                                        </span>
                                        <span style="color: #000;font-size:12px;"> YR</span>
                                    </span>
                                @endif
                            @endif
                        @endif

                    </div>
                    
                    <div class="pro_sur_cnt">
                        <div>
                            @if($fd->product_country)
                                <img style="height:16px;width:24px; float: left;" src="{{ asset('assets/frontend/images/flags/'.strtolower($fd->product_country->iso_code_2).'.png',is_secured())}}" alt="{{ $fd->product_country->name }}" >
                            @else
                           @endif
                        </div>

                    <span style="float:left;font-weight: bold;font-size: 11px; margin-left: 4px;">
                        @if($fd->product_country)
                            @if($fd->product_country->name)
                            <p class="custom_click_search" style="padding-left:10px;" data-id-type="country">
                            {{ $fd->product_country->name }}
                            </p>
                            @else
                            Country not available
                            @endif
                        @else
                            Country not available
                        @endif
                    </span>


                    </div>

                </div>
            </div>
            <div style="clear: both;float: left; padding-top: 10px;">
                <div data-product_id="{{ $fd->id ?? '' }}" data-supplier_id="{{ $fd->supplier_product->supplier_id ?? '' }}" class="btn btn-primary  contact_supplier" style="padding:0 6px;"><i class="fa fa-envelope-o"></i>Contact Supplier</div>              
            </div>
        </div>
</a>
    </div>
     @endforeach
     @endif
    @endforeach
     @endif
    <div class="col-sm-12" style="margin-bottom:2%;background-color:#fff !important;padding-top: 2%;">    
    </div>   
</div>
</div>
</section>
@stop
@section('scripts')
<script type="text/javascript">
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