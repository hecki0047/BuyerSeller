@php
use App\Models\ProductImageNew;
@endphp
@extends('frontend.layouts.about-us-topbar')

@section('page_css')
<link property='stylesheet' href="{!! asset('assets/frontend/css/dashboard.css',is_secured()) !!}" rel="stylesheet">
{{-- <link property='stylesheet' href="{!! asset('assets/frontend/css/spectrum.css',is_secured()) !!}" rel="stylesheet">
 --}}
<link property='stylesheet' href="{!! asset('assets/fontend/css/why-bdtdc.css',is_secured()) !!}" rel="stylesheet">

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
                  <strong> Favorite Supplier</strong>
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
            <h1 style="margin-top: 0; margin-bottom: 10px; padding: 10px 0;font-size: 15px;font-weight: bold;">Favorite Suppliers</h1>
            <div class=" " style="">
               @if($favorite_supplier)
               @foreach($favorite_supplier as $data)
               @if($data->bdtdc_company)
               @foreach($data->bdtdc_company as $su)
               <div class="col-xs-12  padding_0 favo" style="background: #fff; margin-bottom: 10px; position: relative;">
                  <div class="col-sm-2 " style="padding-left: 0">
                     <a href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$su->name_string->name).'/'.$su->id) }}">
                        @if($su->name_string)
                        @if($su->name_string->company_logo)
                        <img class="cat_pro_list_img img-responsive" style="margin: 0 auto; max-height: 100px" src="{!! asset('uploads',$su->name_string->company_logo,is_secured()) !!}" alt="{{$su->name_string->name}}" />
                        @else
                        <img class="cat_pro_list_img img-responsive" style="margin: 0 auto; max-height: 100px" src="{!! asset('assets/frontend/images/uploads/no_image.jpg',is_secured()) !!}" alt="" />
                        @endif
                        @else
                        <img class="cat_pro_list_img img-responsive" style="margin: 0 auto; max-height: 100px" src="{!! asset('assets/frontend/images/uploads/no_image.jpg',is_secured()) !!}" alt="" />
                        @endif

                  </div>
                  <div class="col-sm-10">
                     <div style="width: 100%; display: block;position: relative;">
                        <h1 class="det_list" style="font-size: 22px; font-weight: normal; color: #666; margin-top: 5px; margin-bottom: 0">
                           @if($su->name_string)
                           {{$su->name_string->name}}
                           @endif
                        </h1>
                     </div>
                     </a>
                     <div style="display: block;width: 100%; margin:0; padding: 0; clear: both; padding-top: 10px;">
                        <div>
                           <div class="pro_sur"><img style="height:18px;width:18px; float: left; margin-right: 5px" src="{!! asset('assets/frontend/images/Buyer-protection-home.png',is_secured()) !!}">
                           </div>

                           <div class="pro_sur_gld">
                              @if($su->supplier_info)
                              @if($su->supplier_info->membership_year)
                              <span style="margin-right: 5px">
                                 <img style="height:25px;width:20px;margin-top: -.4%;" src="{!! asset('assets/helpcenter/Gold-membership.png',is_secured()) !!}" alt="" />
                                 <span style="color: #000;font-size:12px;margin-left:1%;margin-top: -.4%;">
                                    {{ $su->supplier_info->membership_year or ''}}
                                 </span>
                                 <span style="color: #000;font-size:12px;"> YR</span>
                              </span>
                              @endif
                              @endif

                           </div>
                           @if($su->country)
                           <div class="pro_sur_cnt">
                              <img style="height:16px;width:24px; float: left; margin-right: 5px" src="{{ asset('assets/frontend/images/flags/'.strtolower($su->country->iso_code_2).'.png',is_secured())}}" alt="{{ $su->country->name }}">
                              <span style="float:left;font-weight: bold;font-size: 11px; margin-left: 4px;">
                                 <P class="custom_click_search" data-id-type="country">
                                    {{$su->country->name}}
                                 </P>
                              </span>
                           </div>
                           @else
                           country not available
                           @endif
                        </div>
                     </div>
                     <div style="clear: both;float: left; padding: 10px 0;">
                        <a class="btn btn-primary" style="border-radius: 4px !important;padding: 5px 10px" href="{{ URL::to('contact/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$su->name_string->name).'/'.$su->id) }}">
                           <i class="fa fa-envelope-o"></i>Contact Supplier
                        </a>
                     </div>
                  </div>
                  <div class="remote-favo" title="Remove from favorite" data-supplier_id="{{$su->id ?? ''}}">
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
      var fav_id = $(this).attr('data-supplier_id');
      var _this = $(this);
      $.post(window.location.origin + '/remove-favorite-supplier', {
         '_token': '{{csrf_token()}}',
         'fav_id': fav_id,

      }, function(result) {
         if (parseInt(result) == 1) {
            _this.parent().remove();
         }
      });

   })
</script>
@stop