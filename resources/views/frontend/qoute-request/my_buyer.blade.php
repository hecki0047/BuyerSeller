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

<div class="row" style="padding-top: 1%;padding-bottom: 0.5%">
        <div class="col-lg-12 col-md-12 padding_0">
            <ul  style="margin-left: -2%;float: left;"><li style="float: left">
            <a itemprop="url" href="{{ URL::to($dashboard_route,null,is_secured())}}" style="color: #000">
            My Dashboard
            </a> <i class="fa fa-angle-right"></i> </li>
            <li style="float: left">
            <a itemprop="url" href="" style="color: #000">
               <strong> My Buyers</strong>
            </a> <i class="fa fa-angle-right"></i></li>
           
            </ul>
            <ul style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
        <button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
      </ul>
        </div>
    </div>
	<div class="row" id="row" style="margin-bottom: 2%;background-color: #eceef2" >
		<div class="col-sm-12 padding_0">
			<div class="col-sm-2 padding_0">
					@include('frontend.layouts.dashboard-aside')


			</div>

			

			<div class="col-sm-10" style="padding-right: 0px">
				
				<div class="col-sm-12 padding_0" style="margin:10px 0;">
					<div class="col-sm-6 padding_0" style="font-size: 20px;">My Buyers</div>
					<div class="col-sm-6 padding_0 text-right"><a href="{{ URL::to('source') }}">What is BDSource Suppliers?</a></div>
				</div>
				
				@if($bdtdc_inquery_messages)
				@foreach ($bdtdc_inquery_messages as $inq_messages)
				<div class="col-sm-12 message_data" onmouseover="$(this).css('background','rgb(250, 250, 250)');$(this).children().children().children().children('.delete_quote').show();" onmouseout="$(this).css('background','#fff');$(this).children().children().children().children('.delete_quote').hide();" style="padding: 10px;border-bottom: 1px solid #eee;">
					<div class="col-sm-1 padding_0"><a target="_blank" href="{{ URL::to('mysource_quotations/inq',$inq_messages->inquery_id,null,is_secured()) }}"><img src="
						@if($inq_messages->bdtdcInqueryMessageSender)
						{{ URL::to('uploads/'.$inq_messages->bdtdcInqueryMessageSender->profile_picture)}}
						@else
						{{ URL::to('uploads/no-image.jpg')}}
						@endif" style="width:50px;height:50px;"></a></div>
					<div class="col-sm-11 padding_0">
						<div class="col-sm-12 padding_0" style="padding-bottom: 10px;">
							<div class="col-sm-6 padding_0"><a target="_blank" href="{{ URL::to('mysource_quotations/inq',$inq_messages->inquery_id,null,is_secured()) }}" style="color: #06c;font-size: 14px;font-weight: 700;">
							@if($inq_messages->bdtdcInqueryMessageSender)
								{{ $inq_messages->bdtdcInqueryMessageSender->first_name}} {{$inq_messages->bdtdcInqueryMessageSender->last_name}}
							@else
								name not available
							@endif
						</a></div>
							<div class="col-sm-6 padding_0 text-right"><a style="display:none;" class="delete_quote" quote-id="{{ $inq_messages->id }}" href="#"></a></div>
						</div>
						<div class="col-sm-12 padding_0">
							<div class="col-sm-6 padding_0" style="position:relative;">
								<div style="position:absolute;font-size:5px;font-weight:bold;top:12px;left:1px;">2nd<sup>YR</sup></div>
								<img src="{{ URL::to('assets/gold/gold-com-icon.png') }}" style="width:20px;height:20px;">
								<img style="width:24px;height:16px;" src="
								@if($inq_messages->bdtdcInqueryMessageProductCompanySender)
									{{ URL::to('assets/global/img/flags/'.strtolower($inq_messages->bdtdcInqueryMessageProductCompanySender->location_of_reg_string->iso_code_2)).'.png'}}
								@else
									{{ URL::to('uploads/no-image.jpg')}}
								@endif">
								<span title="@if($inq_messages->bdtdcInqueryMessageProductCompanySender)
										@if($inq_messages->bdtdcInqueryMessageProductCompanySender->name_string)
											{{ $inq_messages->bdtdcInqueryMessageProductCompanySender->name_string->name}}
										@else
											Company name not available
										@endif
									@else
										Company not available
									@endif" style="color:#666;">
									@if($inq_messages->bdtdcInqueryMessageProductCompanySender)
										@if($inq_messages->bdtdcInqueryMessageProductCompanySender->name_string)
											{{ substr($inq_messages->bdtdcInqueryMessageProductCompanySender->name_string->name, 0,40)}}...
										@else
										Company name not available
										@endif
									@else
										Company not available
									@endif
								</span>
								<p><span style="color: #999;">Main Products:</span><span style="color:#666;">
								@if($inq_messages->bdtdcInqueryMessageSupplierSender)
									@if($inq_messages->bdtdcInqueryMessageSupplierSender->main_products)
										{{$inq_messages->bdtdcInqueryMessageSupplierSender->main_products->product_name_1}} &nbsp; {{$inq_messages->bdtdcInqueryMessageSupplierSender->main_products->product_name_2}} &nbsp; {{$inq_messages->bdtdcInqueryMessageSupplierSender->main_products->product_name_3}}
									@else
									Unknown
									@endif
								@else
								Unknown
								@endif
							</span></p>
							</div>
							<div class="col-sm-1 padding_0 text-right"><i class="fa fa-commenting-o" aria-hidden="true" style="margin-right: 10px;    font-size: 20px;"></i></div>
							<div class="col-sm-5 padding_0">
								<p><span style="font-size:14px;font-weight: 700;color:#666;">Received Quotation</span> <span style="color:#999;">({{ date('d/m/Y',strtotime($inq_messages->updated_at)) }})</span></p>
								<p><a title="
									@if($inq_messages->bdtdcInqueryMessageProductDescription)
										{{ $inq_messages->bdtdcInqueryMessageProductDescription->name}}
									@else
									Product name not available;
									@endif
								>" target="_blank" href="{{ URL::to('mysource_quotations/inq',$inq_messages->inquery_id,null,is_secured()) }}">Submitted quotation for buying request &quot;
								@if($inq_messages->bdtdcInqueryMessageProductDescription)
									{{ substr($inq_messages->bdtdcInqueryMessageProductDescription->name, 0,70)}}...&quot;
								@else
								Product name not available&quot;
								@endif
							</a></p>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				@endif
				{!! $bdtdc_inquery_messages->render() !!}
				
				
				
		    </div>

	</div> 
</div>

	@stop

@section('scripts')
@include('frontend.layouts.dashboard_aside_scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$('ul.pagination').css('margin-top','15px');
	});
</script>

@stop