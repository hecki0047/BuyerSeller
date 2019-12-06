@php
use App\Models\ProductImageNew;
@endphp
@extends('frontend.layouts.about-us-topbar')

@section('page_css')
<link property='stylesheet' href="{!! asset('assets/frontend/css/dashboard.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/frontend/css/why-bdtdc.css',is_secured()) !!}" rel="stylesheet">

@endsection
@section('content')

<div class="container">
   @if (Sentinel::check())
   @php
   $role = App\Models\Role_user::where('user_id',Sentinel::getUser()->id)->first();
   $dashboard_route = ($role->role_id ==3) ? "company/dashboard" : 'buyer/dashbord';
   @endphp
   @endif

   <div class="row" style="padding-bottom: 0.5%">

   </div>

   <div class="row" style="padding-top: 1%;padding-bottom: 0.5%">
      <div class="col-lg-12 col-md-12 padding_0">
         <ul style="margin-left: -2%;float: left;">
            <li style="float: left">
               <a itemprop="url" href="{{ URL::to($dashboard_route,null,is_secured())}}" style="color: #000">
                  My Dashboard
               </a> <i class="fa fa-angle-right"></i>
            </li>
            <li style="float: left">
               <a itemprop="url" href="" style="color: #000">
                  <strong> Favorite Product</strong>
               </a> <i class="fa fa-angle-right"></i>
            </li>
         </ul>
         <ul style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
            <button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
         </ul>
      </div>
   </div>
   <div class="row" id="row" style="margin-bottom: 2%;background-color: #eceef2">
      <div class="col-sm-12 padding_0">
         <div class="col-sm-2 padding_0">
            @include('frontend.layouts.dashboard-aside')
         </div>
         <div class="col-sm-10" style="padding-right: 0px">
            <h1 style="margin-top: 0; margin-bottom: 10px; padding: 10px 0">Favorite Products</h1>
            <div class=" " style="">
               @if($favorite_product)
               @foreach($favorite_product as $f)
               @if($f->bdtdc_product)
               @foreach($f->bdtdc_product as $fd)
               <div class="col-xs-12  padding_0 favo" style="background: #fff; margin-bottom: 10px; position: relative;">
                  <div class="col-sm-2 " style="padding-left: 0">
                     @php
                     $pro_img_new = ProductImageNew::where('product_id',$f->data)->first();
                     @endphp
                     @if($fd->product_name)
                     <a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$fd->product_name->name).'='.mt_rand(100000000, 999999999).$fd->id) }}">
                        @else
                        @endif
                        @if($fd->product_image_new)
                        <img class="cat_pro_list_img img-responsive" style="margin: 0 auto; max-height: 100px" src="{!! asset((isset($fd->product_image_new->image)) ? $fd->product_image_new->image : 'no_image.jpg',is_secured()) !!}" alt="" />
                        @else
                        <img class="cat_pro_list_img img-responsive" style="margin: 0 auto; max-height: 100px" src="{!! asset('uploads/no-image.jpg',is_secured()) !!}" alt="" />
                        @endif
                  </div>
                  <div class="col-sm-10">
                     <div style="width: 100%; display: block;position: relative;">
                        <h1 class="det_list" style="font-size: 22px; font-weight: normal; color: #666; margin-top: 5px; margin-bottom: 0">
                           @if($fd->product_name)
                           {{$fd->product_name->name}}
                           @endif
                        </h1>
                        </a>
                        @if($fd->product_prices)
                        <!--  <div class="det_list">
                        <p> US $ {{$fd->product_prices->product_FOB}}</p>
                    </div>
                    <div class="det_list">
                        <p> MOQ: {{$fd->product_prices->product_MOQ}} {{$fd->product_unit->name}}</p>
                    </div> -->
                        @endif
                     </div>
                     <div style="display: block;width: 100%; margin:0; padding: 0; clear: both; padding-top: 10px;">
                        <div>
                           <div class="pro_sur"><img style="height:18px;width:18px; float: left; margin-right: 5px" src="{!! asset('assets/frontend/images/Buyer-protection-home.png',is_secured()) !!}">
                           </div>
                           <div class="pro_sur_gld">
                              @if($fd->supplier_product)
                              @if($fd->supplier_product->supplier_membership)
                              @if($fd->supplier_product->supplier_membership->membership_year)
                              <span style="margin-right: 5px">
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
                              @if($fd->product_country)
                              <img style="height:16px;width:24px; float: left; margin-right: 5px" src="{{ asset('assets/frontend/images/flags/'.strtolower($fd->product_country->iso_code_2).'.png',is_secured())}}" alt="{{ $fd->product_country->name }}">
                              @else
                              @endif
                              <span style="float:left;font-weight: bold;font-size: 11px; margin-left: 4px;">
                                 @if($fd->product_country)
                                 @if($fd->product_country->name)
                                 <P class="custom_click_search" data-id-type="country">
                                    {{ $fd->product_country->name }}
                                 </P>
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
                     <div style="clear: both;float: left; padding: 10px 0;">
                        <a data-product_id="{{ $fd->id ?? '' }}" data-supplier_id="{{ $fd->supplier_product->supplier_id ?? '' }}" class="btn btn-primary  contact_supplier" style="border-radius: 4px !important;padding: 5px 10px"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
                     </div>
                  </div>
                  <div class="remote-favo" title="Remove from favorite" data-product_id="{{ $fd->id ?? '' }}">
                     <i class="fa fa-trash" aria-hidden="true"></i>
                  </div>
               </div>
               @endforeach
               @endif
               @endforeach
               @endif
            </div>
         </div>
      </div>
   </div>
   @stop

@section('scripts')
@include('frontend.layouts.dashboard_aside_scripts')
<script type="text/javascript">
   $(document).ready(function() {
      $('ul.pagination').css('margin-top', '15px');
   });

   $(document).on('click', '.remote-favo', function() {
      var fav_id = $(this).attr('data-product_id');
      var _this = $(this);
      $.post(window.location.origin + '/remove-favorite', {
         '_token': '{{csrf_token()}}',
         'fav_id': fav_id,

      }, function(result) {
         if (parseInt(result) == 1) {
            _this.parent().remove();
         }
      });

   })

   /*contact supplier*/
   $(document).on({

      click: function(e) {

         e.preventDefault();

         $('.modal-content').html('<span class="btn btn-block btn-lg"><i class="fa fa-spinner fa-pulse loading_icon text-primary"></i></span>');

         var base_url = window.location.origin; //$('[name="base_url"]').val();

         var supplier_id = $(this).data('supplier_id');

         var product_id = $(this).data('product_id');

         var url = base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
         window.location.href = url;

         //$('.modal-content').html(" ");

         /*$.get(url, function(r) {

             $('.modal-content').html(r)

         })*/

      }

   }, '.contact_supplier');

   /*contact supplier*/
</script>
@stop