@extends('fontend.master-dashboard')
@section('page_css')
<link property='stylesheet' rel="stylesheet" type="text/css" href="{{ URL::asset('assets/fontend/box.css',is_secured()) }}" media="screen" data-name="skins">
<link property='stylesheet' rel="stylesheet" type="text/css" href="{{ URL::asset('assets/fontend/bdtdccss/learning-center.css',is_secured()) }}" media="screen" data-name="skins">
<link property='stylesheet' rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" media="screen" data-name="skins">

<style type="text/css">
    
</style>
@endsection
	@section('content')
	<div class="container">
		<div class="row" style="    padding-top: 12px;">
	<div class="col-sm-10 padding_0">
				<div class="col-md-12 padding_0" style="">
			            <ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
			                <li style="float: left" itemprop="itemListElement" itemscope
			      itemtype="http://schema.org/ListItem">
			                    <a itemprop="url" href="{{ URL::to('company/dashboard') }}" style="color: #333;font-weight: normal;font-size: 15px;"  itemprop="item"> 
			                         <span itemprop="name">Dashboard </span><i class="fa fa-angle-right"></i>
			                    </a>
			                    <meta itemprop="position" content="1" />
			                </li> 
			                <li style="float: left"  itemprop="itemListElement" itemscope
			                itemtype="http://schema.org/ListItem">
			                    <a itemprop="url" href="{{ URL::to('payment-history') }}" style="color: #333;font-weight: normal;font-size: 15px;"> 
			                        <span itemprop="name">Payment History &nbsp;
			                    </span> </a>
			                    <meta itemprop="position" content="2" />
			                </li>
			            </ul>
			        </div>
	</div>
	<div class="col-sm-2 padding_0 text-right" style="">
		<a href="{{ URL::to('company/dashboard') }}" class="goBack"><span>Go Back</span></a>
	</div>
		
</div>
		<div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 2%;margin-top:1%;">

		<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
				<div class="col-sm-2 col-md-2 col-lg-2 padding_0">
@include('fontend.layouts.dashboard-aside')
			</div>
			<div class="col-sm-10 col-md-10">			
				<h1 class="title">Payment history</h1>
				<div class="col-sm-12 padding_0" style="border-bottom:none;margin-top:2%;margin-bottom:2%">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Invoice ID
						</th>
                <th>Invoice Type</th>
                <th>Status</th>
                <th>Transaction_id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	@if(count($supplier_info)>0)
					@foreach($supplier_info as $data)
					<tr>
						<td>{{$data->invoice_number}}</td>
						<td>
							{{$data->payment_type}}
						</td>
						<td>
							@if($data->membership)
								@if($data->membership->payment==1)
								Paid for {{ $data->membership->start_date }} to {{ $data->membership->end_date }}
								@else
								Due for for {{ $data->membership->start_date }} to {{ $data->membership->end_date }}
								@endif
							@elseif($data->order_invoice)
								{{ $data->order_invoice->pay_type }} payment
							@endif
						</td>
						<td>
							{{$data->Transaction_id}}
						</td>
						<td>
							@if($data->membership)
							<a href="{{ URL::to('membership/invoice',$data->membership->id)}}"> <i class="fa fa-eye" aria-hidden="true" style="font-size: 20px"></i> </a>
							@elseif($data->order_invoice)
							<a href="{{ URL::to('order/invoice',$data->order_invoice->id)}}"> <i class="fa fa-eye" aria-hidden="true" style="font-size: 20px"></i> </a>
							@endif
							<p></p>
							
						</td>						
						<!-- <div class="col-sm-2" style="border-right:1px solid #DDD;height: 62px;text-align:center;">
							<a href=""  class="btn btn-primary" style="margin-top: 6.5%;border-radius: 5px !important;">View</a>
						</div> -->
					</tr>
					@endforeach					
				@endif           
        </tbody>
    </table>					
				</div>
			</div>
		</div>
	</div>
@stop
@section('scripts')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

@stop