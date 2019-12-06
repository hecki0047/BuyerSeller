@extends('mobile-view.layout.master_m')
	@section('content')
<section>
<div class="container">
	<div class="row paddin_0" style="background: #fff; margin-bottom: 28px; padding-bottom: 3%;">
		
			 <div class="header-wrap-mess"><p class="cat-pr-list">All Buying Request</p></div>
			 @if($bdtdc_supllier_inqueries)
			        @if(count($bdtdc_supllier_inqueries) > 0)
			        @foreach($bdtdc_supllier_inqueries as $inquery)
			<?php
				$product_name_title = 'No title found';
				$product_image_url = 'uploads/no_image.jpg';
				if($inquery->queryproduct){
					$product_name_title = $inquery->queryproduct->name;
				}else if($inquery->inquery_title){
					$product_name_title = $inquery->inquery_title;
				}
				if($inquery->BdtdcSupplierQueryProductImages){
					if($inquery->bdtdcProductToCategory){
						$product_image_url = 'bdtdc-product-image/'.trim($inquery->bdtdcProductToCategory->pro_parent_cat->name).'/'.trim($inquery->bdtdcProductToCategory->bdtdcCategory->name).'/'.$inquery->BdtdcSupplierQueryProductImages->image;
					}
				}else if($inquery->BdtdcSupplierQueryProductImage){
					$product_image_url = 'uploads/'.$inquery->BdtdcSupplierQueryProductImage->image;
				}else if($inquery->BdtdcSupplierQueryProductDocs){
					$product_image_url = 'buying-request-docs/'.$inquery->BdtdcSupplierQueryProductDocs->docs;
				}
			?>
			 <div id="atm-list">
			 		<div class="rfq-list-item">
			 			<div style="float: left;display: block;">
			 				<span><i class="fa fa-circle" aria-hidden="true" style="position: absolute;color:#FF6600; font-size: 12px; top:10px;"></i></span>
			 			</div>
			 		    <div class="item-txt-msg">
			 		    	<p class="rqp-buy-al"> 
			 		    		<a href="{{ URL::to('mysource/inq',$inquery->id,is_secured()) }}"  class="rqp-buy-al" title="{{ $product_name_title }}" target="_blank">
			 		    			{{$product_name_title}}
			 		    		</a>
			 		    		</p>
			 		    		<?php
									$total_quote = 0;
									$total_unread_quote = 0;
									if($inquery->BdtdcInqueryMessage){
										if(count($inquery->BdtdcInqueryMessage) > 0){
											foreach ($inquery->BdtdcInqueryMessage as $inq_messa) {
												$total_quote++;
												if($inq_messa->is_view == 0){
													$total_unread_quote++;
												}
											}
										}
									}
								?>
			 		    	<p class="rqp-buy"><a href="{{ URL::to('mysource_quotations/inq',$inquery->id,is_secured()) }}" target="_blank" class="rqp-buy"> Closed - {{$total_quote}} Quotes received</a> </p>
			 		    </div>
			 		</div>
			 </div>

			@endforeach
			@else
			<p>No quotation to show</p>
			@endif
			@else
			<p>No quotation to show</p>
			@endif
	</div>
</div>
</section>
@stop