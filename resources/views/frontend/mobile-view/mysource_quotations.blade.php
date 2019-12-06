@extends('mobile-view.layout.master_m')
	@section('content')
<div class="container" style="margin-top:2%;margin-bottom:2%;">

	<div class="row item_sha" id="">
		<p style="color: #06C;padding-left:2%;padding-top:1%;"><<<a href="{{ URL::to('Mybuying-Request',is_secured()) }}" style="color: #06C;"> back to buying request</a></p>
		@if($supplier_inquiry)
		<p title="{{$supplier_inquiry->inquery_title}}" style="padding-left:2%;font-size: 18px;font-weight: 700;white-space: nowrap;">
			{{ substr($supplier_inquiry->inquery_title, 0, 100) }}...
		</p>
		@else
		<p title="product name not available" style="font-size: 18px;font-weight: 700;white-space: nowrap;">Inquiry title not available</p>
		@endif

	</div>
	<div class="row item_sha" style="margin-top:2%;margin-bottom:2%;">
	
				<div class="col-sm-2">
					<p style="font-size: 17px;padding-left:2%;"><a href="{{ URL::to('Mybuying-Request',is_secured()) }}" style="color: #333;">Buying Request</a></p>
				</div>
				<div class="col-sm-2">
					<p style="font-size: 17px;padding-left:2%;"><a href="{{ URL::to('mysource_quotations/inq',$supplier_inquiry->id,is_secured()) }}" style="color: #333;"> Quotations</a></p>
				</div>
	
	
	</div>
	<div class="" style="">
		<p style="color: #999;padding-left:1%;"> <input type="checkbox" name="un" value=un"">Unread quotes
		<input type="checkbox" name="m" value="m" style="color: #999;padding-left:2%;">Unread messages </p>
	</div>
	<div class="row item_sha">
		<div class="">
		@if($bdtdc_inquery_messages)
			@if(count($bdtdc_inquery_messages) > 0)
			<div class="col-sm-3" style="padding-right: 0;">
			  <ul class="inq_message_list" style="padding:5px;">
			  <?php $fontend_show = 1; ?>
			  @foreach($bdtdc_inquery_messages as $inqMess)
			    <li class="quotation_line" show_quotation="show_me{!! $fontend_show !!}" style="">
				    <div class="row" title="{!! $inqMess->bdtdcInqueryMessageUser['first_name'] !!}" style="cursor: pointer">
				    	<!-- <div class="col-sm-2" style="">
				    		<img style="height:30px;" src="{!! asset('resources/assets/helpcenter/su_year.png',is_secured())!!}"><br>
				    		<input type="checkbox">
				    	</div> -->
				    	<div class="col-sm-3" style="">
				    		<img style="width:90%;border-radius: 50% !important;" src="
							@if($inqMess->bdtdcInqueryMessageProductImageNew)
							{{URL::to($inqMess->bdtdcInqueryMessageProductImageNew->image) }}
							@elseif($inqMess->bdtdcInqueryMessageDocsOne)
							{!! asset('buying-request-docs',is_secured())!!}/{{ $inqMess->bdtdcInqueryMessageDocsOne->docs }}
							@else
							{!! asset('uploads',is_secured())!!}/no_image.jpg
							@endif
							">
				    	</div>
				    	<div class="col-sm-7 show_target" style="">
				    		<div class="frontend_show" style="display:<?php if($fontend_show == 1){echo 'none';}else{echo '';} ?>">
				    			<p style="margin: 0 0 0.1em;font-size: 12px;"><b>{!! $inqMess->bdtdcInqueryMessageUser['first_name'] !!}</b></p>
					    		<p style="margin: 0 0 0.1em;font-size: 12px;">Order on bdtdc.com</p>
					    		<p style="margin: 0 0 0.1em;font-size: 12px;">Unit Price: {!! $inqMess->unit_price !!} / <?php if(trim($inqMess->bdtdcInqueryMessageProduct->product_prices['currency'] == '')){echo "USD";}else{ echo $inqMess->bdtdcInqueryMessageProduct->product_prices['currency'];} ?></p>
					    		<p style="margin: 0 0 0.1em;font-size: 12px;">quantity: {!! $inqMess->quantity !!} {!! $inqMess->bdtdcInqueryMessageProduct->ProductUnit['name'] !!}</p>
				    		</div>
				    		<div class="backend_show" style="position: relative; display:<?php if($fontend_show == 1){echo '';}else{echo 'none';} ?>;">
				    			<p style="margin: 0 0 0.1em;font-size: 12px;"><b>{!! $inqMess->bdtdcInqueryMessageUser['first_name'] !!}</b></p>
					    		<p style="margin: 0 0 0.1em;font-size: 12px;">
					    		<a href="" data-product_id="{!! $inqMess->product_id !!}" data-supplier_id="{!! $inqMess->product_owner_id !!}" class="btn btn-primary contact_supplier" style="font-size:12px;padding:6px;border-radius:5px !important;"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
					    		</p>
					    		<p style="margin: 0 0 0.1em;font-size: 12px;">Or Contact by <a class="tooltip_action">Email/Phone</a></p>
					    		<div class="toolTip" style="background-color: #ffffff;border: 1px solid #73a7f0;padding:5px;width: 200px;margin-left: 32px;position:absolute;border-radius: 4px;-moz-border-radius: 4px;-webkit-border-radius: 4px;box-shadow: 0px 0px 8px -1px black;-moz-box-shadow: 0px 0px 8px -1px black;-webkit-box-shadow: 0px 0px 8px -1px black;margin-top: 12px;z-index: 3;display:none;cursor: auto;">
									<p style="overflow:auto;"><span>email:</span>{!! $inqMess->bdtdcInqueryMessageUser['email'] !!}</p>
									<!-- <p><span>tel:</span>81291308</p>
									<p><span>fax:</span>81011472</p>
									<p><span>mobile:</span>86-15521229350</p> -->
									<div class="tailShadow" style="background-color: transparent;width: 4px;height: 4px;position: absolute;top: -6px;left: 35px;z-index: -10;box-shadow: 0px 0px 8px 1px black;-moz-box-shadow: 0px 0px 8px 1px black;-webkit-box-shadow: 0px 0px 8px 1px black;"></div>
									<div class="tail1" style="width: 0px;height: 0px;border: 10px solid;border-color: transparent transparent #73a7f0 transparent;position:absolute;top: -20px;left: 27px;"></div>
									<div class="tail2" style="width: 0px;height: 0px;border: 10px solid;border-color: transparent transparent #ffffff transparent;position:absolute;left: 27px;top: -18px;"></div>
								</div>

				    		</div>
				    	</div>
				    </div>
			    </li>
			    <?php $fontend_show++; ?>
			    @endforeach
			  </ul>
			</div>
			<div class="col-sm-9">


				<!-- <div class="col-sm-12" style="background-color:#FEFBEE;border: 1px solid #FFE2B0;">
					<div class="col-sm-6" style="">
						<p style="padding-top:7px;">In contact</p>
						<p><button type="button" class="btn btn-warning">start order</button><a href="#" style="padding-left: 10%;color: #06C;">Request a sample</a></p>
					</div>
					<div class="col-sm-6" style="border-left: 1px dashed #FFE2B0;">
						<p style="padding-top:7px;color:#333;">Rate this Quotation</p>
						<p style="font_size:16px;">
							<i class="fa fa-star" aria-hidden="true" style="color:#FFE2B0;font-size:27px;"></i>
							<i class="fa fa-star" aria-hidden="true" style="color:#FFE2B0;font-size:27px;"></i>
							<i class="fa fa-star" aria-hidden="true" style="color:#FFE2B0;font-size:27px;"></i>
							<i class="fa fa-star" aria-hidden="true" style="color:#FFE2B0;font-size:27px;"></i>
							<i class="fa fa-star" aria-hidden="true" style="color:#FFE2B0;font-size:27px;"></i>
						</p>

					</div>
				</div> -->
				<div class="col-sm-12" style="margin-top:2%;">
						<p style="font-size: 13px;color:#333;">The supplier's response to your requirements:</p>
						<p style="font-size: 13px;color:#333;">"Further details are required. I will attempt to provide product matches with complete details for your reference." </p>
				</div>
				<?php
				// foreach ($bdtdc_inquery_messages as $inqMess) {
				// 	echo "<pre>";
				// 	echo $inqMess->id."<br>";
				// 	echo $inqMess->product_id."<br>";
				// 	echo $inqMess->quantity."<br>";
				// 	echo $inqMess->unit_price."<br>";
				// 	echo $inqMess->bdtdcInqueryMessageProduct->product_name->name."<br>";
				// 	echo $inqMess->bdtdcInqueryMessageProduct->ProductUnit['name']."<br>";
				// 	echo $inqMess->bdtdcInqueryMessageProduct->product_prices['currency']."<br>";
				// 	echo $inqMess->bdtdcInqueryMessageProduct->model."<br>";
				// 	echo $inqMess->bdtdcInqueryMessageProduct->payment_method."<br>";
				// 	echo $inqMess->bdtdcInqueryMessageLogisticInfo['port']."<br>";
				// 	echo $inqMess->bdtdcInqueryMessageProductImage->image."<br>";
				// 	echo $inqMess->bdtdcInqueryMessageUser['email']."<br>";
				// 	echo $inqMess->bdtdcInqueryMessageUser['first_name']."<br>";
				// 	echo $inqMess->bdtdcInqueryMessageUser['last_name']."<br>";
				// 	echo $inqMess->updated_at."<br>";
				// 	echo "</pre>";
				// }
				?>
				<?php $show_mess_count = 1; ?>
				@foreach ($bdtdc_inquery_messages as $inqMess)
				<div class="col-sm-12 hide_all show_me{!! $show_mess_count !!}" style="margin-top:2%;margin-bottom:2%;border: 1px solid #E6E6E6;<?php if($show_mess_count == 1){echo '';}else{echo 'display:none';} ?>">
					<p id="m_q">{{ $inqMess->bdtdcInqueryMessageProduct->product_name->name }}</p>
					<p style="font-size: 12px;color: #666;border-bottom: 1px dashed #E7E7E7;padding-bottom:10px;">Model Number: {{ $inqMess->bdtdcInqueryMessageProduct->model }}</p>
				
					<div class="col-sm-12" style="margin-top:2%;margin-left: -3.5%;margin-bottom:2%;">
						<div class="col-sm-3" style="border-right: 1px dashed #E7E7E7;">
							<p>Shipping terms : </p>
						</div>
						<div class="col-sm-3" style="border-right: 1px dashed #E7E7E7;">
							<?php
							$port = '';
							if(isset($inqMess->bdtdcInqueryMessageLogisticInfo['port'])){
								$port = $inqMess->bdtdcInqueryMessageLogisticInfo['port'];
							}
							?>
							<p>Port : {{ $port }}</p>
						</div>
						<div class="col-sm-3" style="border-right: 1px dashed #E7E7E7;">
							<p>Payment Terms: {{ $inqMess->bdtdcInqueryMessageProduct->payment_method }}</p>
						</div>
						
					</div>
					<p style="">Quotation Valid Till: {{ date('Y-m-d', strtotime($inqMess->updated_at . ' +15 day')) }}</p>
					<div class="col-sm-12" style="border-top: 1px dashed #E7E7E7;margin-top:1%;">
						<div class="col-sm-6">
							quantity
							<p id="m_q1">{{ $inqMess->quantity }} 
							@if($inqMess->bdtdcInqueryMessageProduct->ProductUnit)
							{{ $inqMess->bdtdcInqueryMessageProduct->ProductUnit['name'] }}
							@endif
							 </p>
						</div>
						<div class="col-sm-6">
							 	Unit Price:
							 	<p id="m_q1">FOB <?php if(trim($inqMess->bdtdcInqueryMessageProduct->product_prices['currency'] == '')){echo "USD";}else{ echo $inqMess->bdtdcInqueryMessageProduct->product_prices['currency'];} ?> {{ $inqMess->unit_price }}/ {{ $inqMess->bdtdcInqueryMessageProduct->ProductUnit['name'] }}</p>
						</div>

					</div>
					<div class="col-sm-12" style="margin-top:2%;padding-bottom:20px;">
						<div class="col-sm-4">
							<img style="height:232px;width:206px;margin-left:-8%;" src="@if($inqMess->bdtdcInqueryMessageProductImageNew)
							{{URL::to($inqMess->bdtdcInqueryMessageProductImageNew->image) }}
							@elseif($inqMess->bdtdcInqueryMessageDocsOne)
							{!! asset('buying-request-docs',is_secured())!!}/{{ $inqMess->bdtdcInqueryMessageDocsOne->docs }}
							@else
							{!! asset('uploads/no_image.jpg',is_secured()) !!}
							@endif
							" alt="" />
						</div>
						<div class="col-sm-8">
							<p style="font-size: 11px;">{{ $inqMess->messages }}</p>
						</div>
					</div>
				</div>
				<?php $show_mess_count++; ?>
				@endforeach
				

			</div>
		
			@else
			<div style="margin:0 auto;"><h1 style="text-align:center;color:forestgreen;">Requested quotation not available!!!</h1><p style="text-align:center;"><a style="text-decoration:none;" href="{{ URL::to('Mybuying-Request',is_secured()) }}"> << back to buying request</a></p><br></div>
			@endif
		@else
			<div style="margin:0 auto;"><h1 style="text-align:center;color:forestgreen;">Requested quotation not available!!!</h1><p style="text-align:center;"><a style="text-decoration:none;" href="{{ URL::to('Mybuying-Request',is_secured()) }}"> << back to buying request</a></p><br></div>
		@endif
		</div>
	</div>


</div>

@stop

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on({click:function(){
			$('.frontend_show').show();
			$('.backend_show').hide();
			$('.hide_all').hide();
			$(this).children().children('.show_target').children('.frontend_show').hide();
			$(this).children().children('.show_target').children('.backend_show').show();
			var catch_class = $(this).attr('show_quotation');
			$('.'+catch_class).show(300);
		}},'.quotation_line');
		$(document).on({mouseover:function(){
			$(this).parent().parent().children('.toolTip').show();
		}},'.tooltip_action');
		$(document).on({mouseout:function(){
			$(this).parent().parent().children('.toolTip').hide();
		}},'.tooltip_action');
		$(document).on({mouseover:function(){
			$(this).show();
		}},'.toolTip');
		$(document).on({mouseout:function(){
			$(this).hide();
		}},'.toolTip');

		$(document).on({

    		click: function(e) {
    			e.preventDefault();
    			var base_url = window.location.origin;
    			var supplier_id = $(this).data('supplier_id');
    			var product_id = $(this).data('product_id');
    			var url = base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
                window.location.href = url;
    		}

    	}, '.contact_supplier');

	});
</script>
@stop