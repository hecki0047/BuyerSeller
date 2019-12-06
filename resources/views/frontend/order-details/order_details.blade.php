@extends('fontend.master-dashboard')
@section('page_css')
<link property='stylesheet' href="{!! asset('css/dashboard.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/why-bdtdc.css',is_secured()) !!}" rel="stylesheet">
<link rel="stylesheet" property='stylesheet' href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<style>
   .c-progress-steps {
      margin: 0;
      list-style-type: none;
      font-family: Lato;
   }

   .c-progress-steps li {
      position: relative;
      font-size: 14px;
      color: #7f8c8d;
      padding: 2px 0 2px 23px;
   }

   .c-progress-steps li a {
      color: inherit;
   }

   .c-progress-steps li.done {
      color: #2ecc71;
   }

   .c-progress-steps li.done:before {
      color: #2ecc71;
      content: "\f058";
   }

   .c-progress-steps li.current {
      color: #3498db;
      font-weight: bold;
   }

   .c-progress-steps li.current:before {
      color: #3498db;
      content: "\f192";
   }

   .c-progress-steps li:before {
      position: absolute;
      left: 0;
      font: normal normal normal 14px/1 FontAwesome;
      font-size: 22px;
      background-color: #fff;
      content: "\f10c";
   }

   @media all and (max-width: 600px) {
      .c-progress-steps li:before {
         top: calc(50% - 8px);
         font-size: 16px;
      }
   }

   @media all and (min-width: 600px) {
      .c-progress-steps {
         display: table;
         list-style-type: none;
         margin: 20px auto;
         padding: 0;
         table-layout: fixed;
         width: 100%;
      }

      .c-progress-steps li {
         display: table-cell;
         text-align: center;
         padding: 0;
         padding-bottom: 10px;
         white-space: nowrap;
         position: relative;
         border-left-width: 0;
         border-bottom-width: 4px;
         border-bottom-style: solid;
         border-bottom-color: #7f8c8d;
      }

      .c-progress-steps li.done {
         border-bottom-color: #2ecc71;
      }

      .c-progress-steps li.current {
         color: #3498db;
         font-size: 16px;
         line-height: 14px;
         border-bottom-color: #3498db;
      }

      .c-progress-steps li.current:before {
         color: #3498db;
         content: "\f192";
      }

      .c-progress-steps li:before {
         bottom: -14px;
         left: 50%;
         margin-left: -9px;
      }
   }
</style>
@endsection
@section('content')
<div id="ajax_status" class="hide_this text-center">
   <img itemprop="image" src="{{ URL::asset('uploads/ajax_loading.gif',is_secured()) }}" class="img-responsive" alt="">
</div>

<div class="container">
   <div class="row" style="padding-top: 1%;padding-bottom: 0.5%">
      <div class="col-lg-12 col-md-12 padding_0">
         <ul style="margin-left: -2%;float: left;">
            <li style="float: left">
               <a itemprop="url" href="{{ URL::to($dashboard_route,null,is_secured())}}" style="color: #000">
                  My Dashboard
               </a> <i class="fa fa-angle-right"></i>
            </li>
            <li style="float: left">
               <a itemprop="url" href="#" style="color: #000">
                  <strong> Order Details</strong>
               </a> <i class="fa fa-angle-right"></i>
            </li>
         </ul>
         <ul style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
            <button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
         </ul>
      </div>
   </div>

   <div id="item_sha" class="row" style="background-color: #eceef2">
      <!-- LOADING ANIMATION WHILE PAGE IS IS LOADING -->
      <div class="col-sm-2 padding-right">
         @include('fontend.layouts.dashboard-aside')

      </div>

      <div class="col-md-10">
         <div class="col-md-12">
            @if($order)

            <ol class="c-progress-steps">
               <li class="c-progress-steps__step  done">Place order</li>
               @if($order->status==1)
               <li class="c-progress-steps__step  done">Seller Confirm</li>
               @if($order->payment_status==0)
               <li class="c-progress-steps__step current">Payment</li>
               @else
               <li class="c-progress-steps__step done">Payment</li>
               @if($order->shipping_status==0)
               <li class="c-progress-steps__step current">Shipment</li>
               @endif
               @endif
               @if($order->shipping_status==1)
               <li class="c-progress-steps__step done">Shipment</li>
               @else
               @endif
               <li class="c-progress-steps__step">Success</li>

               @elseif($order->status==2)
               <li class="c-progress-steps__step done">Seller Confirm</li>
               <li class="c-progress-steps__step done">Payment</li>
               <li class="c-progress-steps__step done">Shipment</li>
               <li class="c-progress-steps__step done">Success</li>
               @else
               <li class="c-progress-steps__step current">Seller Confirm</li>
               <li class="c-progress-steps__step">Payment</li>
               <li class="c-progress-steps__step">Shipment</li>
               <li class="c-progress-steps__step">Success</li>
               @endif

               @endif
            </ol>
         </div>
         @if (Session::has('order_confirm'))
         <div class="alert alert-success text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <p>{{ Session::get('order_confirm') }}</p>
         </div>
         @endif
         @if (Session::has('order_postpone'))
         <div class="alert alert-success text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <p>{{ Session::get('order_postpone') }}</p>
         </div>
         @endif
         @if (Session::has('order_active'))
         <div class="alert alert-success text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <p>{{ Session::get('order_active') }}</p>
         </div>
         @endif
         <div class="col-sm-12 padding_0" style="padding: 17px 0;">
            <div class="col-sm-4 padding_0">
               <h1 class="padding_0" style="color: #646262; font-size: 20px;margin:0;">Order Details</h1>
            </div>
            <div class="col-sm-8 padding_0 text-right">
               @if($order)
               @if($order->sender == Sentinel::getUser()->id)
               @if($order->payment_status==0)
               <a href="{{URL::to('order-edit',$order->id,is_secured())}}" class="btn btn-warning">Edit Order</a>
               <a href="{{URL::to('order-delete',$order->id,is_secured())}}" class="btn btn-danger delete-order">Delete</a>
               @elseif($order->payment_status==1)
               @if($order->shipping_status==1)
               @if($order->status==2)

               @else
               <a href="{{URL::to('confirm-order-received',$order->id,is_secured())}}" class="btn btn-warning">Confirm order received</a>
               @endif
               @else
               Waiting for order shipping
               @endif
               @endif
               @endif
               @if($order->product_owner_id == Sentinel::getUser()->id)
               @if($order->status==1)

               @elseif($order->status==0)
               <a href="{{URL::to('order-confirm',$order->id,is_secured())}}" class="btn btn-success">Confirm Order</a>
               <a href="{{URL::to('order-active',$order->id,is_secured())}}" class="btn btn-warning">Active Order</a>
               @endif
               @if($order->status==1)
               @if($order->payment_status==0)
               <a href="{{URL::to('order-postpone',$order->id,is_secured())}}" class="btn btn-warning">Postpone Order</a>
               @elseif($order->payment_status==1)
               @if($order->shipping_status==1)
               Waiting for buyer confirmation
               @else
               <a href="{{URL::to('order-drop-ship',$order->id,is_secured())}}" class="btn btn-warning">Drop for shipping</a>
               @endif
               @endif
               @else

               @endif
               @endif
               @endif
            </div>


         </div>
         @if($order)
         <div class="col-sm-12 col-md-12 padding_0 head-query" style="margin-right: 0px; margin-left: 0px;margin-top: 0;">
            <div class="col-sm-12 col-md-12 col-lg-12 padding_0" style="padding:15px;">
               <div class="col-sm-12 col-md-12 col-lg-12 padding_0">
                  <div class="col-sm-12 col-md-7 col-lg-7 padding_0">
                     <p style="color: #999;">Order ID : {{ $order->id }}</p>
                     @if(trim($order->orderInquiry) != '')
                     @if(trim($order->orderInquiry->inquery_title) != '')
                     <p style="color: #999;">Ordered On : <a target="_blank" href="{{URL::to('product-sourcing/view',$order->inquery_id,is_secured())}}">{{ $order->orderInquiry->inquery_title }}</a></p>
                     @else
                     @if($order->orderInquiry->inq_products_description)
                     <p style="color: #999;">Order On : <a target="_blank" href="{{URL::to('product-sourcing/view',$order->inquery_id,is_secured())}}">{{ $order->orderInquiry->inq_products_description->name }}</a></p>
                     @else
                     <p style="color: #999;">Order On : <a target="_blank" href="{{URL::to('product-sourcing/view',$order->inquery_id,is_secured())}}">Ordered Product Not available</a></p>
                     @endif
                     @endif


                     @else
                     @endif
                     <p style="color: #999;">Shipping Method : {{ $order->shipping_method=='express'?'Express':($order->shipping_method=='sea-freight'?'Sea Freight':'Air Cargo') }}</p>
                     <p style="color: #999;">Trade terms : {{ $order->payment_terms }}</p>

                     <p style="color: #999;">Ordered on : {{ $order->created_at }}</p>
                     <p style="color: #999;">Shipment Date : {{ $order->shipment_date_type=='specific-day'?$order->shipment_date:$order->shipment_days_after.' day(s) after supplier receives the initial payment' }}</p>
                     <p style="color: #999;">Coverage type : {{ $order->coverage_type=='post-shipment'?'Post-delivery coverage':'Pre-shipment coverage' }}</p>
                     @if($order->bdtdcInqueryMessageSender)
                     @php
                     $ordered_full_name = $order->bdtdcInqueryMessageSender->first_name.' '.$order->bdtdcInqueryMessageSender->last_name;
                     @endphp
                     @else
                     @php
                     $ordered_full_name = "not available";
                     @endphp
                     @endif
                     @php
                     $ordered_comp_name = 'Not Available';
                     @endphp
                     @if($order->sender_company)
                     @if($order->sender_company->name_string)
                     @php
                     $ordered_comp_name = $order->sender_company->name_string->name;
                     @endphp
                     @endif
                     @endif

                     <p style="color: #999;">Ordered By : {{ $ordered_full_name }} (<a style="font-weight:600;" target="_blank" href="{{ URL::to('Home/'.$ordered_comp_name,$order->sender_company->id,is_secured()) }}">{{ $ordered_comp_name }}</a>)</p>
                     @if($order->product_owner_user)
                     @php
                     $owner_full_name = $order->product_owner_user->first_name.' '.$order->product_owner_user->last_name;
                     @endphp
                     @else
                     @php
                     $owner_full_name = "not available";
                     @endphp
                     @endif
                     @php
                     $owner_comp_name = 'Not Available';
                     @endphp
                     @if($order->product_owner_company)
                     @if($order->product_owner_company->name_string)
                     @php
                     $owner_comp_name = $order->product_owner_company->name_string->name;
                     @endphp
                     @endif
                     @endif

                     <p style="color: #999;">Product Owner : {{ $owner_full_name }} (<a style="font-weight:600;" target="_blank" href="{{ URL::to('Home/'.$owner_comp_name,$order->product_owner_company->id,is_secured()) }}">{{ $owner_comp_name }}</a>)</p>
                     @if(trim($order->messages)!='')
                     <h4 style="margin-top: 20px;">Additional Remark:</h4>
                     <p class="text-justify" style="color: #999;">{{$order->messages}}</p>
                     @endif
                  </div>
                  <div class="col-sm-12 col-md-5 col-lg-5 padding_0">
                     <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                           <thead>
                              <tr>
                                 <th colspan="2" class="text-center">Charge/Price</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php $total_price = 0; ?>
                              <thead>
                                 <tr>
                                    <th colspan="2">Products Price</th>
                                 </tr>
                              </thead>
                              <?php $product_price_count = 1; $num_count = 1; ?>
                              @if($order->bdtdcOrderDetails)
                              @if(count($order->bdtdcOrderDetails)>0)
                              @foreach($order->bdtdcOrderDetails as $p_order_details)
                              <tr>
                                 <td><b>{{$num_count}}.
                                       @if($p_order_details->orderProductDetails)
                                       {{ $p_order_details->orderProductDetails->name }}
                                       @else
                                       {{$p_order_details->product_name}}
                                       @endif
                                    </b>
                                    <br>
                                    Quantity Required : {{$p_order_details->quantity}} {{$p_order_details->orderProductUnit?$p_order_details->orderProductUnit->name:'Pieces'}}
                                    <br>
                                    Unit Price : {{$p_order_details->unit_price}} USD
                                 </td>
                                 <td>{{$p_order_details->quantity*$p_order_details->unit_price}} USD</td>
                                 <?php $total_price += ($p_order_details->quantity*$p_order_details->unit_price); ?>
                              </tr>
                              <?php $product_price_count++; $num_count++; ?>
                              @endforeach
                              @else
                              <tr>
                                 <td>Not Available</td>
                                 <td></td>
                              </tr>
                              @endif
                              @else
                              <tr>
                                 <td>Not Available</td>
                                 <td></td>
                              </tr>
                              @endif
                              <thead>
                                 <tr>
                                    <th colspan="2">Other charges</th>
                                 </tr>
                              </thead>
                              <tr>
                                 <td>Shipping Fee</td>
                                 <td>{{ $order->shipping_fee }} USD</td>
                                 @php
                                 $total_price += $order->shipping_fee
                                 @endphp
                              </tr>
                              <tr>
                                 <td>Insurance Charge</td>
                                 <td>{{ $order->insurance_charge }} USD</td>
                                 @php
                                 $total_price += $order->insurance_charge
                                 @endphp
                              </tr>
                              <tr style="border-bottom: 1px solid #999 !important;">
                                 <td>Initial payment</td>
                                 <td>{{ $order->initial_payment }} USD</td>
                                 @if($order->paymentHistory)
                                 @if($order->paymentHistory->pay_type=='initial')
                                 @php
                                 $total_price -= $order->initial_payment;
                                 @endphp
                                 @endif
                                 @else
                                 @endif
                              </tr>
                              @php
                                 $total_price = round($total_price);
                              @endphp
                              <thead>
                                 <tr>
                                    <th>Total Price:</th>
                                    <th>{{ $total_price }} USD</th>
                                 </tr>
                              </thead>
                              <thead>
                                 <tr>
                                    @if($order)
	                                    @if($order->sender == Sentinel::getUser()->id)
		                                    @if($order->status==1)
			                                    @if($order->payment_status < 2)
				                                    @if($order->paymentHistory)
					                                    @if($order->paymentHistory->pay_type=='initial')
					                                    <th>Make Full Payment :</th>
					                                    <th><a class="btn btn-success make_full_payment">Make Payment</a></th>
					                                    @elseif($order->paymentHistory->pay_type=='full')
					                                    @else
					                                    <th>Make Initial Payment :</th>
					                                    <th><a class="btn btn-success make_initial_payment">Make Payment</a></th>
					                                    @endif
				                                    @else
				                                    <th>Make Initial Payment :</th>
				                                    <th><a class="btn btn-success make_initial_payment">Make Payment</a></th>
				                                    @endif
			                                    @endif
		                                    @elseif($order->status==2)
		                                    Order Completed
		                                    @else
		                                    <th>Make Payment :</th>
		                                    <th>
		                                       <p style="width: 100%">Waiting for seller confirmation</p>
		                                    </th>
		                                    @endif

	                                    @else
	                                    <th>Total Due :</th>
	                                    <th>
	                                       @if($order->paymentHistory)
	                                       @if($order->paymentHistory->pay_type=='full')
	                                       0
	                                       @else
	                                       {{ $total_price }}
	                                       @endif
	                                       @else
	                                       {{ $total_price }}
	                                       @endif
	                                    </th>
	                                    @endif
                                    @endif
                                 </tr>

                              </thead>
                           </tbody>
                        </table>
                     </div>
                     <div class="col-md-12 make-pay" style="display: none">
                        <div class="col-sm-12" style="background-color:#EFF4FA;">
                           <p style="color:#264176;font-weight:700;margin-bottom:10px;">Select Payment Method</p>
                        </div>
                        <div class="col-sm-12">

                           <div class="col-sm-3">
                              <label><input type="radio" id="PayPal" name="payment_method" value="PayPal">
                                 <img style="height:30px;width:46%;" src="{!! asset('assets/gold/10.png',is_secured()) !!}" alt="" /></label></div>
                           <div class="col-sm-3">
                              <label><input type="radio" id="VISA" name="payment_method" value="VISA">
                                 <img style="height:30px;width:46%;" src="{!! asset('assets/gold/11.png',is_secured()) !!}" alt="" /></label></div>
                           <div class="col-sm-3">
                              <label><input type="radio" id="MasterCard" name="payment_method" value="MasterCard">
                                 <img style="height:30px;width:46%;" src="{!! asset('assets/gold/13.png',is_secured()) !!}" alt="" /></label></div>
                           <div class="col-sm-3">
                              <label><input type="radio" id="AMERICANEXPRESS" name="payment_method" value="AMERICANEXPRESS">
                                 <img style="height:30px;width:46%;" src="{!! asset('assets/gold/14.png',is_secured()) !!}" alt="" /></label>
                           </div>
                        </div>

                        <div class="col-md-12 st-pay" style="display: none">
                           <form role="form" action="{{ route('order.payment.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                              @csrf
                              <div class="panel-body">

                                 @if (Session::has('success'))
                                 <div class="alert alert-success text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <p>{{ Session::get('success') }}</p>
                                 </div>
                                 @endif
                                 <input style="height: 27px;" type="hidden" class="form-control membership_fee" id="exampleInputAmount" name="amount" value="{{ $order->initial_payment }}">
                                 <input style="height: 27px;" type="hidden" class="form-control" id="mduration" name="order_id" value="{{ $order->id}}">
                                 <input style="height: 27px;" type="hidden" class="form-control" id="mduration" name="pay_type" value="initial">

                                 <div class='form-row row'>
                                    <div class='col-xs-12 form-group required'>
                                       <label class='control-label'>Name on Card</label> <input class='form-control' size='4' type='text'>
                                    </div>
                                 </div>

                                 <div class='form-row row'>
                                    <div class='col-xs-12 form-group card required'>
                                       <label class='control-label'>Card Number</label> <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                    </div>
                                 </div>

                                 <div class='form-row row'>
                                    <div class='col-xs-12 col-md-4 form-group cvc required'>
                                       <label class='control-label'>CVC</label> <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                       <label class='control-label'>Exp. Month</label> <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                       <label class='control-label'>Exp. Year</label> <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                    </div>
                                 </div>

                                 <div class='form-row row'>
                                    <div class='col-md-12 error form-group hide'>
                                       <div class='alert-danger alert'>Please correct the errors and try
                                          again.</div>
                                    </div>
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-primary" style=" margin-left: 2.5%;font-weight:700;border-color: #BAC6D9 #7A8699 #7A8699 #BAC6D9;">
                                 Confirm checkout
                              </button>
                           {!!Form::close()!!}
                        </div>

                        <div class="col-sm-12 payout" style="display: none;padding-top: 30px;padding-bottom: 100px">
                           <section class="pay-area">
                              <div>
                                 @if (session('error') || session('success'))
                                 <p class="{{ session('error') ? 'error':'success' }}">
                                    {{ session('error') ?? session('success') }}
                                 </p>
                                 @endif
                                 <form method="POST" action="{{ route('pay-order-payment') }}">
                                    @csrf
                                    <div class="m-2">
                                       <input style="height: 27px;" type="hidden" class="form-control membership_fee" id="exampleInputAmount" name="amount" value="{{ $order->initial_payment }}">
                                       <input style="height: 27px;" type="hidden" class="form-control" id="mduration2" name="membership_duration" value="1">
                                       <input type='hidden' name='cancel_return' value='{{ URL::current() }}'>
                                       <input type='hidden' name='return' value='{{ URL::current() }}'>

                                       @if ($errors->has('amount'))
                                       <span class="error"> {{ $errors->first('amount') }} </span>
                                       @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 2.5%;font-weight:700;border-color: #BAC6D9 #7A8699 #7A8699 #BAC6D9;">
                                       Checkout with paypal
                                    </button>
                                 </form>
                              </div>
                           </section>
                           {{-- <button type="button" class="btn btn-default submit_info" style="margin-left: 38%;font-weight:700;color:#033B63;border-color: #BAC6D9 #7A8699 #7A8699 #BAC6D9;">
                    				Continue
                				</button> --}}
                        </div>
                     </div>
                     <div class="col-md-12 make-full-pay" style="display: none">
                        <div class="col-sm-12" style="background-color:#EFF4FA;">
                           <p style="color:#264176;font-weight:700;margin-bottom:10px;">Select Payment Method</p>
                        </div>
                        <div class="col-sm-12">

                           <div class="col-sm-3">
                              <label><input type="radio" id="PayPalf" name="full_payment_method" value="PayPal">
                                 <img style="height:30px;width:46%;" src="{!! asset('assets/gold/10.png',is_secured()) !!}" alt="" /></label></div>
                           <div class="col-sm-3">
                              <label><input type="radio" id="VISAf" name="full_payment_method" value="VISA">
                                 <img style="height:30px;width:46%;" src="{!! asset('assets/gold/11.png',is_secured()) !!}" alt="" /></label></div>
                           <div class="col-sm-3">
                              <label><input type="radio" id="MasterCardf" name="full_payment_method" value="MasterCard">
                                 <img style="height:30px;width:46%;" src="{!! asset('assets/gold/13.png',is_secured()) !!}" alt="" /></label></div>
                           <div class="col-sm-3">
                              <label><input type="radio" id="AMERICANEXPRESSf" name="full_payment_method" value="AMERICANEXPRESS">
                                 <img style="height:30px;width:46%;" src="{!! asset('assets/gold/14.png',is_secured()) !!}" alt="" />
                              </label>
                           </div>
                        </div>

                        <div class="col-md-12 st-full-pay" style="display: none">
                           <form role="form" action="{{ route('order.payment.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                              @csrf
                              <div class="panel-body">
                                 @if (Session::has('success'))
                                 <div class="alert alert-success text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <p>{{ Session::get('success') }}</p>
                                 </div>
                                 @endif
                                 <input style="height: 27px;" type="hidden" class="form-control membership_fee" id="exampleInputAmount" name="amount" value="{{ $total_price }}">
                                 <input style="height: 27px;" type="hidden" class="form-control" id="mduration" name="order_id" value="{{ $order->id}}">
                                 <input style="height: 27px;" type="hidden" class="form-control" id="mduration" name="pay_type" value="full">

                                 <div class='form-row row'>
                                    <div class='col-xs-12 form-group required'>
                                       <label class='control-label'>Name on Card</label> <input class='form-control' size='4' type='text'>
                                    </div>
                                 </div>

                                 <div class='form-row row'>
                                    <div class='col-xs-12 form-group card required'>
                                       <label class='control-label'>Card Number</label> <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                    </div>
                                 </div>

                                 <div class='form-row row'>
                                    <div class='col-xs-12 col-md-4 form-group cvc required'>
                                       <label class='control-label'>CVC</label> <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                       <label class='control-label'>Exp. Month</label> <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration required'>
                                       <label class='control-label'>Exp. Year</label> <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                    </div>
                                 </div>

                                 <div class='form-row row'>
                                    <div class='col-md-12 error form-group hide'>
                                       <div class='alert-danger alert'>Please correct the errors and try
                                          again.</div>
                                    </div>
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-primary" style=" margin-left: 2.5%;font-weight:700;border-color: #BAC6D9 #7A8699 #7A8699 #BAC6D9;">
                                 Confirm Payment
                              </button>
                           {!!Form::close()!!}
                        </div>

                        <div class="col-sm-12 full-payout" style="display: none;padding-top: 30px;padding-bottom: 100px">
                           <section class="pay-area">
                              <div>
                                 @if (session('error') || session('success'))
                                 <p class="{{ session('error') ? 'error':'success' }}">
                                    {{ session('error') ?? session('success') }}
                                 </p>
                                 @endif
                                 <form method="POST" action="{{ route('pay-order-payment') }}">
                                    @csrf
                                    <div class="m-2">
                                       <input style="height: 27px;" type="hidden" class="form-control membership_fee" id="exampleInputAmount" name="amount" value="{{ $total_price }}">
                                       <input style="height: 27px;" type="hidden" class="form-control" id="mduration2" name="membership_duration" value="1">
                                       <input style="height: 27px;" type="hidden" class="form-control" id="mduration2" name="membership_duration" value="1">
                                       <input type='hidden' name='cancel_return' value='{{ URL::current() }}'>
                                       <input type='hidden' name='return' value='{{ URL::current() }}'>

                                       @if ($errors->has('amount'))
                                       <span class="error"> {{ $errors->first('amount') }} </span>
                                       @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 2.5%;font-weight:700;border-color: #BAC6D9 #7A8699 #7A8699 #BAC6D9;">
                                       Pay with paypal
                                    </button>
                                 </form>
                              </div>
                           </section>
                           {{-- <button type="button" class="btn btn-default submit_info" style="margin-left: 38%;font-weight:700;color:#033B63;border-color: #BAC6D9 #7A8699 #7A8699 #BAC6D9;">
                    				Continue
                				</button> --}}
                        </div>
                     </div>
                  </div>
               </div>
               <h4 style="margin-top: 20px;">Ordered Products Description:</h4>

               <?php $product_count = 1; ?>
               @if($order->bdtdcOrderDetails)
               @if(count($order->bdtdcOrderDetails)>0)
               @foreach($order->bdtdcOrderDetails as $p_order_details)
               <div class="col-sm-12" style="border-top: 1px solid #c8d2e0;padding-top: 15px;">
                  <div class="col-sm-1">
                     {{$product_count}}.
                  </div>
                  <div class="col-sm-3">
                     <img class="img thumbnail" style="height:100px;width:100px;" src="{!! asset($p_order_details->product_image) !!}" alt="" />
                  </div>
                  <div class="col-sm-4">
                     @if($p_order_details->orderProductDetails)
                     <h1 style="font-size: 18px; font-weight: 300; text-transform: uppercase; color: #545c58; margin: 0 0px 10px;"><a style="color: #333;font-size: 14px;font-weight: 400;" title="{{$p_order_details->orderProductDetails->name}}" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', '-',$p_order_details->orderProductDetails->name).'='.mt_rand(100000000, 999999999).$p_order_details->orderProductDetails->product_id,is_secured()) }}">{{$p_order_details->orderProductDetails->name}}</a></h1>
                     @else
                     <h1 style="color: #333;font-size: 14px;font-weight: 400; text-transform: uppercase; margin: 0 0px 10px;">{{$p_order_details->product_name}}</h1>
                     @endif
                     <p style="color: #999;">Quantity Required : {{$p_order_details->quantity}} {{$p_order_details->orderProductUnit?$p_order_details->orderProductUnit->name:'Pieces'}}</p>
                     <p style="color: #999;">Unit Price : {{$p_order_details->unit_price}} USD</p>
                     <p style="color: #999;">Total Price : {{$p_order_details->quantity*$p_order_details->unit_price}} USD</p>
                  </div>
                  <div class="col-sm-4">
                     <p style="color: #999;">{{$p_order_details->product_details}}</p>
                  </div>
               </div>
               @php
               $product_count++
               @endphp
               @endforeach
               @endif
               @endif
            </div>
         </div>

         @else
         @if(session()->has('order_deleted'))
         <div class="col-sm-12 col-md-12 padding_0 head-query text-center text-success" style="padding: 40px;margin-right: 0px; margin-left: 0px">
            <b>{{session()->get('order_deleted')}}</b><br>
            <button style="margin-top: 10px;" onclick="window.close();">Close</button>
         </div>
         @else
         <div class="col-sm-12 col-md-12 padding_0 head-query text-center" style="padding: 40px;margin-right: 0px; margin-left: 0px">
            No order found!
         </div>
         @endif
         @endif
      </div>
   </div>
   <!-- </div> -->
@stop
@section('scripts')
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
@include('frontend.layouts.dashboard_aside_scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
	$(function() {
	   var $form = $(".require-validation");
	   $('form.require-validation').bind('submit', function(e) {
	      var $form = $(".require-validation"),
	         inputSelector = ['input[type=email]', 'input[type=password]',
	            'input[type=text]', 'input[type=file]',
	            'textarea'
	         ].join(', '),
	         $inputs = $form.find('.required').find(inputSelector),
	         $errorMessage = $form.find('div.error'),
	         valid = true;
	      $errorMessage.addClass('hide');

	      $('.has-error').removeClass('has-error');
	      $inputs.each(function(i, el) {
	         var $input = $(el);
	         if ($input.val() === '') {
	            $input.parent().addClass('has-error');
	            $errorMessage.removeClass('hide');
	            e.preventDefault();
	         }
	      });

	      if (!$form.data('cc-on-file')) {
	         e.preventDefault();
	         Stripe.setPublishableKey($form.data('stripe-publishable-key'));
	         Stripe.createToken({
	            number: $('.card-number').val(),
	            cvc: $('.card-cvc').val(),
	            exp_month: $('.card-expiry-month').val(),
	            exp_year: $('.card-expiry-year').val()
	         }, stripeResponseHandler);
	      }

	   });

	   function stripeResponseHandler(status, response) {
	      if (response.error) {
	         $('.error')
	            .removeClass('hide')
	            .find('.alert')
	            .text(response.error.message);
	      } else {
	         // token contains id, last4, and card type
	         var token = response['id'];
	         // insert the token into the form so it gets submitted to the server
	         $form.find('input[type=text]').empty();
	         $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
	         $form.get(0).submit();
	      }
	   }

	});

	$('.delete-order').on({
	   click: function(e) {
	      e.preventDefault();
	      if (confirm('Are You Sure!!!')) {
	         window.location.href = $(this).attr('href');
	      }
	   }
	});

	$(document).on({
	   click: function(e) {
	      $(".make-pay").show();
	   }
	}, '.make_initial_payment');
	$(document).on({
	   click: function(e) {
	      $(".make-full-pay").show();
	   }
	}, '.make_full_payment');
	$(function() {
	   $("input[name='payment_method']").click(function() {
	      if ($("#PayPal").is(":checked")) {
	         // alert('s');
	         $(".st-pay").hide();
	         $(".submit_info").hide();
	         $(".payout").show();

	      } else if ($("#AMERICANEXPRESS").is(":checked")) {
	         // alert('s');
	         $(".st-pay").show();
	      } else if ($("#VISA").is(":checked")) {
	         // alert('s');
	         $(".st-pay").show();
	         $(".require-validation").show();
	         $(".payment_form").hide();
	         $(".payout").hide();
	      } else if ($("#MasterCard").is(":checked")) {
	         // alert('s');
	         $(".st-pay").show();
	      } else {
	         $(".st-pay").hide();
	      }
	   });
	});
	$(function() {
	   $("input[name='full_payment_method']").click(function() {
	      // alert(232);
	      if ($("#PayPalf").is(":checked")) {
	         // alert('s');
	         $(".st-full-pay").hide();
	         $(".submit_info").hide();
	         $(".full-payout").show();

	      } else if ($("#AMERICANEXPRESSf").is(":checked")) {
	         // alert('s');
	         $(".st-full-pay").show();
	      } else if ($("#VISAf").is(":checked")) {
	         // alert('s');
	         $(".st-full-pay").show();
	         $(".require-validation").show();
	         $(".payment_form").hide();
	         $(".full-payout").hide();
	      } else if ($("#MasterCardf").is(":checked")) {
	         // alert('s');
	         $(".st-full-pay").show();
	      } else {
	         $(".st-full-pay").hide();
	      }
	   });
	});
</script>
@stop