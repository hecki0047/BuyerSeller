@extends('fontend.master-dashboard')
 @section('page_css')
    <link property='stylesheet' href="{!! asset('assets/frontend/css/dashboard.css',is_secured()) !!}" rel="stylesheet">
{{--     <link property='stylesheet' href="{!! asset('assets/frontend/css/spectrum.css',is_secured()) !!}" rel="stylesheet">
 --}}    <link property='stylesheet' href="{!! asset('assets/frontend/css/why-bdtdc.css',is_secured()) !!}" rel="stylesheet">

  @endsection
@section('content')
<div id="ajax_status" class="hide_this text-center">
    <img itemprop="image" src="{{ URL::asset('assets/frontend/images/uploads/ajax_loading.gif',is_secured()) }}" class="img-responsive" alt="" >
</div>

<div class="container">
        @if (Sentinel::check())
            <?php
              $role = App\Models\Role_user::where('user_id',Sentinel::getUser()->id)->first();
              $dashboard_route = ($role->role_id ==3) ? "company/dashboard" : 'buyer/dashbord';
            ?>
        @endif

<div class="row" style="padding-top: 1%;padding-bottom: 0.5%">
        <div class="col-lg-12 col-md-12 padding_0">
            <ul  style="margin-left: -2%;float: left;"><li style="float: left">
            <a itemprop="url" href="{{ URL::to($dashboard_route,null,is_secured())}}" style="color: #000">
            My Dashboard
            </a> <i class="fa fa-angle-right"></i> </li>
            <li style="float: left">
            <a itemprop="url" href="" style="color: #000">
               <strong> Order List</strong>
            </a> <i class="fa fa-angle-right"></i></li>
            </ul>
            <ul style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
        <button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
      </ul>
        </div>
    </div>


<div id="item_sha" class="row" style="background-color: #eceef2">
    <!-- LOADING ANIMATION WHILE PAGE IS IS LOADING -->

<div class="col-sm-2 padding-right">
@include('frontend.layouts.dashboard-aside')

</div>



<div class="col-md-10">

<div>
	<h1 style="color: #646262; font-size: 20px; line-height: 35px; margin: 17px 0;">All orders <!-- <a style="border-radius: 4px !important;" class="btn btn-default pull-right">Draft Buyer Protection Order</a> --></h1>

</div>

<!-- <div style="margin-top: 15px; display: flex;border: 1px solid #ddd; padding: 15px">
    <p style="padding-right: 15px">Important</p>
    <div style="flex: 1">
        <ul class="orde-ul">
            <li><a href="">Unprocessed Orders (1)</a></li>
            <li><a href="">Waiting for order confirmation (0)</a></li>
            <li><a href="">Waiting for payment (1)</a></li>
            <li><a href="">Waiting for delivery confirmation (0)</a></li>
            <li><a href="">Order cancel requested (0)</a></li>
        </ul>
    </div>
</div> -->
	
<?php
use App\Models\BdtdcProduct;
?>
@if($orders)
    @foreach($orders as $product_order)
    <div class="col-sm-12 col-md-12 padding_0 head-query" style="margin-right: 0px; margin-left: 0px">
        <div class="col-sm-12 col-md-12 padding_0 head-query-top">
            <div class="col-sm-4 padding_0">
                <span style="display: block;float: left;padding: 5px 10px;">
                    
                    <input type="checkbox" inquery_id_data="{{$product_order->id}}" data_quotation_type="join" class="inq_select_single mail_check" name="dtata" style="margin-right: 3px">
                   
                    <input class="star <?php if($product_order->flag == 1){echo "reverse_action_inquery";}else{echo "inquery_action";} ?>" type="checkbox" title="bookmark page" ca_inquery_id="{{$product_order->id}}" ca_action="join_flag" ca_reverse_from="flag" style="margin-right: 3px" <?php if($product_order->flag == 1){echo "checked";}?>>
                        
                        <i class="fa fa-envelope" aria-hidden="true" style="color: #4ad44a; font-size: 17px; top: 1px; position: relative;"></i>
                        
                </span>
                <div style="display: block;float: left; padding: 9px 25px;padding-right: 0px">Inquiry ID:</div>
                <div style="display: block;float: left; padding: 9px 5px;">{{$product_order->id}}</div>
                <div style="display: block;float: left; padding: 9px 15px;">{{date('d/m/Y',strtotime($product_order->created_at))}}</div>
            </div>
            <div class="col-sm-3" style="    padding: 9px 0px;">
                <i class="icon-p manpower-pro-icon" style="margin-top: -6px;"></i>
                @if($product_order->product_owner_user)
                    @php
                    $full_name = $product_order->product_owner_user->first_name.' '.$product_order->product_owner_user->last_name;
                    @endphp
                @else
                @php
                    $full_name = "not available";
                @endphp
                @endif
                <span title="{{$full_name}}" style="padding-left: 20px;margin-left: 20px; padding-top: 9px;">
                {{$full_name}}</span>
            </div>
            @php
                $sender_comp_name = 'Not Available';
            @endphp
                @if($product_order->product_owner_company)
                    @if($product_order->product_owner_company->name_string)
                    @php
                        $sender_comp_name = $product_order->product_owner_company->name_string->name;
                    @endphp
                    @endif
                @endif
            
            <div title="{{ $sender_comp_name }}" class="col-sm-3" style="padding: 9px 0px;">
                <a style="font-weight:600;" target="_blank" href="{{ URL::to('Home/'.$sender_comp_name,$product_order->product_owner_company->id,is_secured()) }}">{{ $sender_comp_name }}</a>
            </div>
            <div class="col-sm-2 padding_0" style="padding-left: 20px;">
                <div style="display:block; float: left;">
                    <i style="    margin-right: 7px;float: right; margin-top: 7px;" class="ui2-flag ui2-flag-
                    @if($product_order->product_owner_company->location_of_reg_string)
                    {{ strtolower($product_order->product_owner_company->location_of_reg_string->iso_code_2)}} 
                    @endif u-inline-block flag-country"></i>
                </div>
                <div style="display: inline-block;">
                    <img title="gold" style="width: 35px; height: 35px; " src=" {{ asset('bdtdc-product-image/home-page/Gold-membership.png') }}">
                </div>
                <div style="display: inline-block;">
                        <img style="margin-top: 2px; width: 35px; height: 35px;" itemprop="image"  src="{!! asset('assets/images/Buyer-protection-home.png') !!}" alt="Buyer protection">
                </div> 
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 padding_0">
            <div class="col-sm-4">
                <div style="padding: 25px 0px;">
                    @foreach($product_order->bdtdcOrderDetails as $p_order_details)
                        <?php $order_product = BdtdcProduct::where('id',$p_order_details->product_id)->first(); ?>
                        @if($order_product)
                            @if($order_product->product_name)
                            <a style="color: #333;font-size: 14px;font-weight: 400;margin-left: 7px;" title="{{$order_product->product_name->name}}" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$order_product->product_name->name).'='.mt_rand(100000000, 999999999).$order_product->id,null,is_secured()) }}">{{substr($order_product->product_name->name,0,35)}}..</a>
                            @else
                            <a style="color: #333;font-size: 14px;font-weight: 400;margin-left: 7px;" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$p_order_details->product_name).'='.mt_rand(100000000, 999999999).$order_product->id,null,is_secured()) }}">{{$p_order_details->product_name}}</a>
                            @endif
                        @else
                        <a style="color: #333;font-size: 14px;font-weight: 400;margin-left: 7px;" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$p_order_details->product_name).'='.mt_rand(100000000, 999999999).$p_order_details->id,null,is_secured()) }}">{{$p_order_details->product_name}}</a>
                        @endif
                        <br>
                    @endforeach
                </div>
            </div>
            <div class="col-sm-3 padding_0" style="padding-top: 4.6%;">
            <!-- <div class="rat">30</div>
                <div class="rat">Sets</div>
                    <div class="rat">US $</div> -->
            </div>
            <div class="col-sm-1 padding_0" style="padding-top: 4.6%;">
                <div class="aui2-grid-quo-status-col" style="color: #FF751A">
                    <!-- <span style="color: #FF751A;">US $</span> -->
                </div>
            </div>
            <div class="col-sm-2 padding_0" style="padding-top: 4.6%;">
                <div class="aui2-grid-quo-status-col">
                    @if($product_order->is_view == 1)
                        <ol class="c-progress-steps">
                            @if($product_order->status==1)
                                @if($product_order->payment_status==0)
                                <li class="c-progress-steps__step current">waitting for Payment</li>
                                @endif
                                @if($product_order->payment_status==1)
                                    @if($product_order->shipping_status==0)
                                    <li class="c-progress-steps__step done">Waiting for Shipment</li>
                                    @elseif($product_order->shipping_status==1)
                                    <li class="c-progress-steps__step done">Shipment</li>
                                    @endif  
                                @endif
                            @elseif($product_order->status==2)
                            <li class="c-progress-steps__step success" style="color: #4ad44a; font-size: 17px; top: 1px; position: relative;">Success</li>
                            @else
                            <li class="c-progress-steps__step current">Watting for Seller Confirmation</li>

                            @endif
                        </ol>
                    @else
                        <span>New Order</span>
                    @endif
                </div>
            </div>
            <div class="col-sm-2" style="padding-top: 2.6%;">
                <div>
                    <a  href="{{URL::to('order-details',$product_order->id,is_secured())}}" target="_blank" class="pp-detail ui2-button-primary" style="padding: 6px 7px;color: #fff !important;"> View details</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
                    
@else

<div class="col-sm-12 col-md-12 padding_0 head-query text-center" style="padding: 40px;margin-right: 0px; margin-left: 0px">
    
    No order found!

</div>
@endif




</div>


</div>
<!-- </div> -->

@stop
@section('scripts')
@include('frontend.layouts.dashboard_aside_scripts')
@stop