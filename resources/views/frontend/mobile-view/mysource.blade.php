@extends('mobile-view.layout.master_m')
	@section('content')
<section>
<div class="container">

<div id="ajax_status" style="position: fixed;left: 40%;top: 40%;" class="text-center">
   <img src="{{ URL::asset('uploads/ajax_loading.gif',is_secured()) }}" class="img-responsive" alt="" >
</div>
<div class="row" style="margin-top:2%;margin-bottom:2%;">
	<div class="col-sm-12" id="item_sha">
		<p style="color: #06C;"><a href="{{ URL::to('Mybuying-Request',is_secured()) }}" style="color: #06C;"><< back to buying request</a></p>
		<?php
		$inquiry_title = 'Not available';
		$image_url = 'uploads/no_image.jpg';
		if($quotations->inq_products_description){
			$inquiry_title = $quotations->inq_products_description->name;
		}else if($quotations->inquery_title){
			$inquiry_title = $quotations->inquery_title;
			
		}
		if($quotations->inq_products_images){
			$image_url = $quotations->inq_products_images->image;
		}else if($quotations->inq_docs_one){
			$image_url = 'buying-request-docs/'.$quotations->inq_docs_one->docs;
		}
		?>
		<p style="font-size: 18px;font-weight: 700;white-space: nowrap;">
			{{ substr($inquiry_title, 0, 100) }}...
		</p>

	</div>
	<div class="col-sm-12" id="item_sha" style="margin-top:2%;margin-bottom:2%;">
		<div class="col-sm-2">
			<p style="font-size: 17px;margin-left:-3%;"><a href="{{ URL::to('Mybuying-Request',is_secured()) }}" style="color: #333;">Buying Request</a></p>
		</div>
		<div class="col-sm-2">
			<p style="font-size: 17px;margin-left:-3%;"><a href="{{ URL::to('mysource_quotations/inq',$quotations->id,is_secured()) }}" style="color: #333;"> Quotations</a></p>
		</div>

	</div>
	<div class="col-sm-12" id="item_sha" style="margin-bottom:2%;padding-bottom:2%;">
		<p style="font-weight: 700;font-size: 18px;color: #333;padding-left: -3%;">Status : <?php
														if($quotations->status == 0){
															echo "Pending";
														}else if($quotations->status == 1){
															echo "Approved";
														}else if($quotations->status == 2){
															echo "Rejected";
														}else if($quotations->status == 3){
															echo "Completed";
														}else if($quotations->status == 4){
															echo "Closed";
														}
													?></p>
		
		<!-- <div class="col-sm-2">
			<a href="{{URL::to('mysource/add-details',$quotations->id,is_secured())}}" type="button" class="btn btn-default btn-md" style="border: 1px solid #E87B0E;background-color:#FF9917;border-radius: 5px !important;margin-left:-3%">Add Details</a>
		</div> -->
		@if($quotations->status != 0)
		<div class="col-sm-2" style="margin-top:1%;margin-left: -3%;">
			<button id="post_again" type="button" class="btn btn-default btn-md" data-inqid="{{$quotations->id}}" style="border-radius: 5px !important;">Post Again</button>
		</div>
		@endif
		@if($quotations->status != 4)
		<div class="col-sm-2" style="margin-left: -3%;margin-top:1%;">
			<button id="query_close" type="button" class="btn btn-default btn-md" data-inqid="{{$quotations->id}}" style="border-radius: 5px !important;">Close</button>
		</div>
		@endif
	</div>
	<div class="col-sm-12" style="margin-bottom:2%;">
		<p style="color: #333;font-size: 14px;font-weight: bold;">{{ $inquiry_title }}</p>

	</div>
	<div class="col-sm-12" style="margin-bottom:2%;">
		<div class="col-sm-3" style="margin-left: -3%;">
			<img style="height:229px;width:237px;" src="{!! asset($image_url) !!}" alt="" />
		</div>
		<div class="col-sm-9" style="padding-top:1%;">
			<p style="color: #999;margin-left:-3%;">Quantity Required: {{ $quotations->quantity }} <?php if($quotations->inq_unit_id){echo $quotations->inq_unit_id->name; } ?></p>
			@if($quotations->product_country)
			<p style="color: #999;margin-left:-3%;">Required Supplier Location: <?php if($quotations->product_country){echo $quotations->product_country->name;} ?></p>
			@endif
			@if($quotations->pre_unit_price != 0)
			<p style="color: #999;">Preferred Unit Price: <?php if(trim($quotations->currency == '')){echo "USD";}else{ echo $quotations->currency;} ?> {{ $quotations->pre_unit_price }} / {{ $quotations->quantity }} <?php if($quotations->inq_unit_id){echo $quotations->inq_unit_id->name; } ?></p>
			@endif
			<p style="color: #999;margin-left:-3%;">Expire After: {{ date('Y-m-d h:i:s a', strtotime($quotations->created_at . ' +15 day')) }}</p>
			<!-- <p style="color: #999;">Shipping Terms:</p> -->

			<p style="color: #999;margin-left:-3%;">Destination Port: {{ $port }}</p>
			@if(trim($quotations->payment_terms != ''))
			<p style="color: #999;margin-left:-3%;">Payment Terms: {{ $quotations->payment_terms }}</p>
			@endif
		</div>
	</div>
	<div class="col-sm-12">
		<p style="font-size:11px;font-weight:bold;">Product Detailed Specification: </p>
		<p>{{ $quotations->message }}</p>
		<!-- <p style="font-size:11px;font-weight:bold;">Dear Sir/Madam, </p>
		<p style="font-size:11px;font-weight:bold;">Im looking for Universal Portable Tablet Handheld Case & Stand with 360 degree rotation with the following specifications: </p>
		<p style="padding-top:20px;color: #999;font-size: 11px;font-weight:bold;">Installation:</p>
		<p style="color: #999;font-size: 11px;font-weight:bold;">Adjustable Length: </p>
		<p style="color: #999;font-size: 11px;font-weight:bold;">Material:</p> -->
	</div>
	<div class="col-sm-12" style="margin-top:2%;">
		<p style="font-size: 11px;font-weight:bold;">Attached files:</p>
		@if($quotations->inq_docs)
			@foreach($quotations->inq_docs as $docs)
			<div class="col-sm-1">
				<img style="height:80px;width:82px;margin-left:-3%;" src="{!! asset('buying-request-docs/'.$docs->docs) !!}" alt="{{ $inquiry_title }}" />
			</div>
			@endforeach
		@endif
		<!-- <div class="col-sm-1">
			<img style="height:80px;width:82px;" src="{!! asset('resources/assets/helpcenter/trade/1.jpg') !!}" alt="" />
		</div>
		<div class="col-sm-1">
			<img style="height:80px;width:82px;" src="{!! asset('resources/assets/helpcenter/trade/2.jpg') !!}" alt="" />
		</div>
		<div class="col-sm-1">
			<img style="height:80px;width:82px;" src="{!! asset('resources/assets/helpcenter/trade/3.jpg') !!}" alt="" />
		</div>
		<div class="col-sm-1">
			<img style="height:80px;width:82px;" src="{!! asset('resources/assets/helpcenter/trade/4.jpg') !!}" alt="" />
		</div> -->

	</div>
	<div class="col-sm-12 col-md-12" style="margin-top:6%;border-top: 1px solid #DDD;">
		<p style="padding-top:3%;color: #333;font-size: 15px;font-weight: bold;">Today's Most Popular Products</p>
		<div class="col-sm-3 col-md-3" id="item_sha" style="height:230px;width:100%">
			<img style="height:174px;width:100%" src="{!! asset('resources/assets/helpcenter/trade/5.jpg') !!}" alt="" />
		</div>
		<div class="col-sm-3 col-md-3" id="item_sha" style="height:230px;">
			<img style="height:174px;width:100%" src="{!! asset('resources/assets/helpcenter/trade/6.jpg') !!}" alt="" />
		</div>
		<div class="col-sm-3 col-md-3" id="item_sha" style="height:230px;">
			<img style="height:174px;width:100%" src="{!! asset('resources/assets/helpcenter/trade/7.jpg') !!}" alt="" />
		</div>
		<div class="col-sm-3 col-md-3" id="item_sha" style="height:230px;">
			<img style="height:174px;width:100%" src="{!! asset('resources/assets/helpcenter/trade/8.jpg') !!}" alt="" />
		</div>

	</div>
</div>
</div>
</section>
@stop

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){
	$('#ajax_status').hide();
});

function ajax_success_message(str){
	$('#ajax_status').html(str);
	$('#ajax_status').show();
    /*$('#ajax_status').show().html(str).fadeOut(1500,function(){
        $('#ajax_status').addClass('hide_this_loading');
        $('#ajax_status').html('<img src="'+window.location.origin+'/uploads/ajax_loading.gif" class="img-responsive" alt="" >');
    });*/
}

$(document).on({click:function(e){
        	e.preventDefault();
        	var inqID = $(this).attr('data-inqID');
        	var post_url = '{{URL::to("all-action/post_again")}}';
        	$.post(post_url,{
        		'_token':'{{csrf_token()}}',
        		'inqID': inqID,
        	},function(result){
        		if(parseInt(result) == 1){
        			ajax_success_message("<p style='font-size:20px;color:#ffffff;margin-top:5px;'><b>Action Performed!!!</b></p>");
        			var url = window.location.href;
        			window.location.href = url;
        		}else{
        			alert ("error");
        		}
        	});
        }},'#post_again');

        $(document).on({click:function(e){
        	e.preventDefault();
        	var inqID = $(this).attr('data-inqID');
        	var post_url = '{{URL::to("all-action/query_close")}}';
        	$.post(post_url,{
        		'_token':'{{csrf_token()}}',
        		'inqID': inqID,
        	},function(result){
        		if(parseInt(result) == 1){
        			ajax_success_message("<p style='font-size:20px;color:#ffffff;margin-top:5px;'><b>Action Performed!!!</b></p>");
        			var url = window.location.href;
        			window.location.href = url;
        		}else{
        			alert ("error");
        		}
        	});
        }},'#query_close');

</script>
@stop