@extends('frontend.layouts.about-us-topbar')

@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/frontend/css/dashboard.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('assets/frontend/css/buyer-bdtdc.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('assets/frontend/css/why-bdtdc.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('assets/frontend/etalage.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('assets/frontend/css/jquery-te-1.4.0.css',is_secured()) !!}" rel="stylesheet">
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
            <a itemprop="url" href="{{ URL::to('quotation/management',null,is_secured())}}" style="color: #000">
               <strong> Quote Management</strong>
            </a> <i class="fa fa-angle-right"></i></li>
            <li style="float: left">
            <a itemprop="url" href="" style="color: #000">
               <strong> Quotation details</strong>
            </a> <i class="fa fa-angle-right"></i></li>
            </ul>
            <ul style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
        <button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
      </ul>
        </div>
    </div>
<div class="row" style="margin-bottom:2%;">
<div class="col-sm-2 padding-right">
@include('frontend.layouts.dashboard-aside')
</div>
<div class="col-sm-10 box" style=" background-color: #fff;margin:0px;z-index: 0">
	<div class="col-sm-12" id="item_sha">	
		<p style="font-size: 18px;font-weight: 700;white-space: nowrap;padding:10px;margin: 0;">
		            @if ($quotes->bdtdcInquery->inq_products_description)
		            Inquiry for: <a href="{{URL::to('product-sourcing/view',$quotes->inquery_id,is_secured())}}">{{ $quotes->bdtdcInquery->inq_products_description->name }}</a>
		            @else
		            Inquiry for:  <a href="{{URL::to('product-sourcing/view',$quotes->inquery_id,is_secured())}}">{{ $quotes->bdtdcInquery->inquery_title }}</a>
		            @endif	            
		<span class="moreless pull-right" style="display: inline-block;font-size: 14px;color: #0099e3;cursor: pointer;"><span>More </span><i class="fa fa-caret-down" aria-hidden="true"></i><i style="display:none;" class="fa fa-caret-up" aria-hidden="true"></i></span>
		</p>
		@if(session()->has('success'))
					<div class="col-sm-12 alert alert-success" style="margin-top:10px;">
	                    {{session()->get('success')}}
	                </div>
				@endif
				@if(session()->has('error'))
					<div class="col-sm-12 alert alert-danger" style="margin-top:10px;">
	                    {{session()->get('error')}}
	                </div>
				@endif
				@if (count($errors) > 0)
	                <div class="col-sm-12 alert alert-danger" style="margin-top:10px;">
	                    <ul>
	                        @foreach ($errors->all() as $error)
	                            <li>{{ $error }}</li>
	                        @endforeach
	                    </ul>
	                </div>
	            @endif
		<div class="row show_details" style="display:none;background-color:#fff; padding-bottom:0;margin-bottom:1%;">
            <div class="col-md-12 col-sm-12 col-lg-12" style="padding-top:3%;">
               
             <div class="col-md-5 col-sm-6 col-lg-5 col-xs-6">
                <ul id="etalage">
                            <li>
                                <a itemprop="url" href="optionallink.html">
                                @if($quotes->bdtdcInquery->inq_docs_one)
                                    <img itemprop="image" class="etalage_thumb_image" src="{{ URL::to('buying-request-docs',$quotes->bdtdcInquery->inq_docs_one->docs,null,is_secured()) }}" alt="$quotes->bdtdcInquery->inq_products_images->image"/>
                                    <img itemprop="image" class="etalage_source_image" src="{{ URL::to('buying-request-docs',$quotes->bdtdcInquery->inq_docs_one->docs,null,is_secured()) }}" alt="$quotes->bdtdcInquery->inq_products_images->image"/>
                                @elseif($quotes->bdtdcInquery->inq_products_images)
                                    <img itemprop="image" class="etalage_thumb_image" src="{{ URL::to(''.$quotes->bdtdcInquery->inq_products_images->image,is_secured()) }}" alt="$quotes->bdtdcInquery->inq_products_images->image" />
                                    <img itemprop="image" class="etalage_source_image" src="{{ URL::to(''.$quotes->bdtdcInquery->inq_products_images->image,null,is_secured()) }}" alt="$quotes->bdtdcInquery->inq_products_images->image"/>
                                @endif
                               </a>
                            </li>
							@if(count([$quotes->bdtdcInquery->inq_docs]) > 0)
                                @foreach($quotes->bdtdcInquery->inq_docs as $image)
                                <li>
                                    <img itemprop="image" class="etalage_thumb_image" src="{{ URL::to('buying-request-docs',$image->docs,null,is_secured()) }}" alt="{{ $image->docs ?? '' }}" />

                                    <img itemprop="image" class="etalage_source_image" src="{{ URL::to('buying-request-docs',$image->docs,null,is_secured()) }}" alt="{{ $image->docs ?? '' }}" />
                                </li>
                                @endforeach
                            @endif
                            @if(count([$quotes->bdtdcInquery->inq_products_images_all]) > 0)
                                @foreach($quotes->bdtdcInquery->inq_products_images_all as $image)
                                <li>
                                    <img itemprop="image" class="etalage_thumb_image" src="{{ URL::to($image->image,null,is_secured()) }}" alt="$image->docs ?? ''"/>

                                    <img itemprop="image" class="etalage_source_image" src="{{ URL::to($image->image,null,is_secured()) }}" alt="$image->docs ?? ''"/>
                                </li>
                                @endforeach
                            @endif
                        </ul>
		         </div>
		         <div class="col-md-7 col-sm-6 col-lg-7 col-xs-12 padding_0">
		            <p style="padding:0px;display: inherit;width:100%; " class="p-name-heading">
		            @if ($quotes->bdtdcInquery->inq_products_description)
		            {{ $quotes->bdtdcInquery->inq_products_description->name }}
		            @else
		            {{ $quotes->bdtdcInquery->inquery_title }}
		            @endif
		            </p>
					<p style="padding-top: 10px;">{{$quotes->messages}}</p>
		            <p class="title-price" style="float: none;padding:0;">FOB <span style="font-size: 16px;font-weight: 600;color: #2192D9;">
		            @if(count([$quotes->bdtdcInquery->product_id])>0)
		                {{ $quotes->bdtdcInquery->pre_unit_price ?? '' }}
		                {{ $quotes->bdtdcInquery->currency ?? ''}} / {{ $quotes->bdtdcInquery->inq_unit_id->name ?? '' }}
		            @else
		                @if($quotes->bdtdcInquery->p_price)
		                	@if(trim($quotes->bdtdcInquery->p_price->currency) != '')
		                	{{ $quotes->bdtdcInquery->p_price->currency}}
		                		@else
		                		USD
		                		@endif
			            @else
			            USD
			            @endif 
		            @if ($quotes->bdtdcInquery->p_price)
		            {{ $quotes->bdtdcInquery->p_price->product_FOB }}
		            @else
		            FOB not available
		            @endif
		            </span> / @if($quotes->bdtdcInquery->inq_unit_id)
		            {{ $quotes->bdtdcInquery->inq_unit_id->name }}
		            @else
		            Pieces
		            @endif
		            @endif

		            </p>
		            
		            @php
		                $attr_count = count($quotes->bdtdcInquery->bdtdc_product_attribute);
		                $repeat_array = [];		              
		           	@endphp
		            <div class="com-md-12 padding_0">
		            @if($quotes->bdtdcInquery->bdtdc_product_attribute)
		                @if(count($quotes->bdtdcInquery->bdtdc_product_attribute) > 0)
		                <div class="col-md-6">
		                        <ul class="attribute-list">
		                        <?php for($i=0; $i < $attr_count; $i++,$i++){
		                            if($quotes->bdtdcInquery->bdtdc_product_attribute[$i]->bdtdcAttribute){ ?>
		                                <?php if (array_key_exists($quotes->bdtdcInquery->bdtdc_product_attribute[$i]->bdtdcAttribute->name,$repeat_array))
		                                  {}else{ ?>
		                            <li><span style="color:#999;height:40px;">{{ $quotes->bdtdcInquery->bdtdc_product_attribute[$i]->bdtdcAttribute->name }}</span> {{ $quotes->bdtdcInquery->bdtdc_product_attribute[$i]->bdtdcAttribute->value }}</li>
		                        <?php $repeat_array[$quotes->bdtdcInquery->bdtdc_product_attribute[$i]->bdtdcAttribute->name] = $quotes->bdtdcInquery->bdtdc_product_attribute[$i]->bdtdcAttribute->value; } }} ?>
		                        </ul>
		                </div>
		                <div class="col-md-6">
		                    <ul class="attribute-list" style="padding-left:5%;">
		                    <?php for($i=1; $i < $attr_count; $i++,$i++){
		                        if($quotes->bdtdcInquery->bdtdc_product_attribute[$i]->bdtdcAttribute){ ?>
		                            <?php if (array_key_exists($quotes->bdtdcInquery->bdtdc_product_attribute[$i]->bdtdcAttribute->name,$repeat_array))
		                                  {}else{ ?>
		                        <li><span style="color:#999;">{{ $quotes->bdtdcInquery->bdtdc_product_attribute[$i]->bdtdcAttribute->name }}</span> {{ $quotes->bdtdcInquery->bdtdc_product_attribute[$i]->bdtdcAttribute->value }}</li>
		                    <?php $repeat_array[$quotes->bdtdcInquery->bdtdc_product_attribute[$i]->bdtdcAttribute->name] = $quotes->bdtdcInquery->bdtdc_product_attribute[$i]->bdtdcAttribute->value; } }} ?>
		                    </ul>
		                </div>
		                @endif
		            @endif
		                
		            </div>
		            <div class="com-md-12 col-sm-12 padding_0">
		            
		            @if($quotes->bdtdcInquery->sender_company)
		                @if($quotes->bdtdcInquery->sender_company->country)
		                    <p class="ppp-des" style="padding:0;">
		                    Requesting form <img title="{{$quotes->bdtdcInquery->sender_company->country->name}}" itemprop="image" style="height:18px;width:25px;" src="{{ asset('assets/global/img/flags/'.strtolower($quotes->bdtdcInquery->sender_company->country->iso_code_2).'.png',is_secured()) }}" alt="$quotes->bdtdcInquery->sender_company->country->name">
		                    </p>
		                @endif
		            @endif

		            {!! csrf_field() !!}
		            <div style="width: 100%;">
		               
		                <div class="snt-qry" style="float: none;padding:0;margin: 0px;margin-top: 10px;">               
		                    <a itemprop="url" target="_blank" href="{{ URL::route('postQuote.form',$quotes->bdtdcInquery->id) }}" id="" class="btn btn-primary btn-join filter_by_quote" style="width: 50px; font-size: 14px;padding: 0;">Send Quote</a>
		                </div>
		                 <div class="add-bq" style="float: none;padding:0;margin: 0px;margin-top: 10px;">
		                    <a itemprop="url" target="_blank" href="{{ URL::route('postBuyRequest.form',$quotes->bdtdcInquery->id) }}" id="" class="btn btn-primary btn-join filter_by_quote" style=" font-size: 14px;padding: 0 10px;">Add to Buying Request</a>
		                </div>
		            </div>		            
		            </div>
		         </div>       		        
		       </div> 
		</div>
	</div>	
	<div class="col-sm-12" style="margin-bottom:2%;margin-top: 15px;padding-left: 0;">
		<div class="col-sm-3" style="padding-left: 0;">
			<img style="height:229px;width:237px;" src="
			@if($quotes->bdtdcInqueryMessageProductImageNew)
			{{ URL::to(''.$quotes->bdtdcInqueryMessageProductImageNew->image,is_secured())}}
			@else
			{{ URL::to('uploads/no_image.jpg','',is_secured()) }}
			@endif" alt="" />
		</div>
		<div class="col-sm-9">
			<h4 style="margin-top: 0;">Quotation Details: </h4>
			<p style="color: #999;">Required Supplier Location: @if($quotes->bdtdcInqueryMessageProductCompany)
				{{ $quotes->bdtdcInqueryMessageProductCompany->location_of_reg_string->name }}
			@else
			Location Not Available
			@endif 
			</p>
			<p style="color: #999;">Quantity Required: {{ $quotes->quantity }}</p>
			<p style="color: #999;">Preferred Unit Price: {{$quotes->unit_price}} {{$quotes->currency}}</p>
			<p style="font-size:11px;font-weight:bold;">Product Detailed Specification: </p>
			<p>{{ $quotes->messages }}</p>
		</div>
	</div>
	<div class="col-sm-12" style="margin-top:2%;">
		<?php $docs_found = 1; ?>
		@if(count($quotes->bdtdcInqueryMessageDocs)>0)
		@foreach($quotes->bdtdcInqueryMessageDocs as $quoteDoc)
		@if($docs_found == 1)
		<p style="font-size: 11px;font-weight:bold;">Attached files:</p>
		@endif
		<div class="col-sm-1">
			<img style="height:80px;width:82px;" src="{!! asset('quotation/'.$quoteDoc->docs) !!}" alt="" />
		</div>
		<?php $docs_found++; ?>
		@endforeach
		@endif
	</div>
	@if($quotes->all_quote_messages)
	@if(count($quotes->all_quote_messages)>0)
	@foreach($quotes->all_quote_messages as $inqMess)
		@if($inqMess->sender == Sentinel::getUser()->id)
				<div class="col-sm-12" style="margin-top: 30px">
					<div class="col-sm-8">
						<p><span style="font-size: 14px;font-weight: bold;">{{ $inqMess->bdtdcInqueryMessageSender->first_name }} {{ $inqMess->bdtdcInqueryMessageSender->last_name }}</span> {{ $inqMess->created_at }}</p>
						<div style="border: 1px solid #5683A0;border-radius: 5px !important;background-color: #f0f8ff;padding:10px;">
							<p>{!! $inqMess->messages !!}</p>
							<?php $docs_found = 1; ?>
							@if($inqMess->bdtdcInqueryMessageDocs)
							@if(count($inqMess->bdtdcInqueryMessageDocs)>0)
							
							@foreach($inqMess->bdtdcInqueryMessageDocs as $inq_docs_single)
								@if($inq_docs_single->docs != '')
								@if(file_exists('quotation/'.$inq_docs_single->docs))
								@if($docs_found == 1)
								<h5 style="margin-top: 20px;">Attached files</h5>
								@endif
								<a target="_blank" href="../../quotation/{{$inq_docs_single->docs}}"><img style="height:100px;width:100px;" src="../../quotation/{{$inq_docs_single->docs}}" alt="inquiry docs" /></a>
								<?php $docs_found++; ?>
								@endif
								@endif
							@endforeach
							@endif
							@endif
						</div>
					</div>
					<div class="col-sm-4"></div>
				</div>
		@else
				<div class="col-sm-12" style="margin-top: 30px">
					<div class="col-sm-4"></div>
					<div class="col-sm-8">
						<p class="text-right"><span style="font-size: 14px;font-weight: bold;">{{ $inqMess->bdtdcInqueryMessageSender->first_name }} {{ $inqMess->bdtdcInqueryMessageSender->last_name }}</span> {{ $inqMess->created_at }}</p>
						<div style="border: 1px solid #5683A0;border-radius: 5px !important;background-color: #f0f8ff;padding:10px;">
							<p>{!! $inqMess->messages !!}</p>
							<?php $docs_found = 1; ?>
							@if($inqMess->bdtdcInqueryMessageDocs)
							@if(count($inqMess->bdtdcInqueryMessageDocs)>0)
							
							@foreach($inqMess->bdtdcInqueryMessageDocs as $inq_docs_single)
								@if($inq_docs_single->docs != '')
								@if(file_exists('quotation/'.$inq_docs_single->docs))
								@if($docs_found == 1)
								<h5 style="margin-top: 20px;">Attached files</h5>
								@endif
								<a target="_blank" href="../../quotation/{{$inq_docs_single->docs}}"><img style="height:100px;width:100px;" src="../../quotation/{{$inq_docs_single->docs}}" alt="inquiry docs" /></a>
								<?php $docs_found++; ?>
								@endif
								@endif
							@endforeach
							@endif
							@endif
						</div>
					</div>
				</div>
		@endif
	@endforeach
	@endif
	@endif
	<div class="col-sm-12">
					{!! Form::open(array('url'=>'quotations_form/submit-message/'.$quotes->id,'method'=>'POST', 'files'=>true,'class'=>'myform')) !!}
					<h1 style="font-size: 20px;font-weight: 400;color: #545c58;">Type your message here</h1>
					<input type="hidden" name="product_owner_id" value="{{$quotes->product_owner_id}}">
					<div class="form-group">
					    <textarea class="form-control editors" id="message" name="message">{{old('message')}}</textarea>
					    @if($errors->has('message'))
					    <p class="alert alert-danger">{{$errors->first('message')}}</p>
					    @endif
					</div>
					<div class="form-group">
					    {!! Form::label('file')!!}
                    	{!! Form::file('file', ['class' => 'field'])!!}
                    	@if($errors->has('file'))
                    	<p class="alert alert-danger">{{$errors->first('file')}}</p>
                    	@endif
					</div>
					<button type="submit" class="btn btn-primary">Send</button>

					{!! Form::close() !!}
					<br>
				</div>

	<div class="col-sm-12" style="margin-top:6%;#border-top: 1px solid #DDD;">
		<!-- <p style="padding-top:3%;color: #333;font-size: 15px;font-weight: bold;">Today's Most Popular Products</p> -->

<section>

 <div class="container-fluid" style="padding: 0;margin: 0;">
<div  class="row item_sha" style="padding-bottom: 1%">
	<div class="col-sm-12">
		<p style="float: left;font-size: 19px" class="title text-left padding_0"  itemprop="name"><a style="color: #333;" href="{{ URL::to('selected/supplier-products') }}"> Today's Most Popular Products</a></p>

		<p style="float:right; ">
			<a itemprop="url" href="{{ URL::to('selected/supplier-products') }}">View more
		</a></p>
	</div>
<div class="col-sm-12 padding_0">

				<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1250px; height: 310px; overflow: hidden; visibility: hidden;">
		        <!-- Loading Screen -->
		        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
		            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
		            <div style="position:absolute;display:block;background:url(asset('assets/slider/loading.gif')) no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
		        </div>
		        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1250px; height: 310px; overflow: hidden;">
		        @if($product_homes)
		        	@foreach($product_homes as $pro)
		        	

		        	@if($pro->bdtdcProduct)

    <div style="display: none;">
	<div class="box" style="box-shadow: none;margin-bottom: 0px;">
	    <div class="product-image-wrapper media_wrapper" style="width:233px;height: 310px;border: none">
	    <?php $p_name = "Product Name Not Available"; ?>
		@if($pro->bdtdcProduct)
			@if($pro->bdtdcProduct->product_name)
			@php 
			$p_name = $pro->bdtdcProduct->product_name->name
			@endphp
			@endif
		@endif
			<div class="single-products">
			
			<a itemprop="url" style="text-align: justify;text-justify: inter-word;" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$p_name).'='.mt_rand(100000000, 999999999).$pro->product_id) }}">
			
				<div class="productinfo text-center"  itemscope itemtype="http://schema.org/Product">
				@if($pro->bdtdcProduct->product_image_new)
					<img itemprop="image" title="{{ $p_name }}" style="width:100%;height:233px;border: none;box-shadow:none" src="{{ asset(''.$pro->bdtdcProduct->product_image_new->image) }}" alt="{{ substr($p_name, 0, 50) }}" class="img-thumbnail  media_image_res">
					
				@else
					<img itemprop="image" title="{{ $p_name }}" style="width:100%;height:233px;border: none;box-shadow:none" src="{{ asset('uploads/no_image.jpg') }}" alt="{{ $p_name }}" class="img-thumbnail  media_image_res">
				@endif
						
					<div class="hot_title" style="height: 40px;    padding: 5px;">
						
						<div style="text-align: center;text-justify: inter-word;">
							<span class="text-center" itemprop="name">{{ substr($p_name, 0, 30) }}</span>
						
						</div>					
						</div>
						@if($pro->bdtdcProduct)
						@if($pro->bdtdcProduct->product_prices)
						@if(trim($pro->bdtdcProduct->product_prices->product_FOB) != '' && trim($pro->bdtdcProduct->product_prices->product_FOB) != '0' && $pro->bdtdcProduct->product_prices->product_FOB != null && trim($pro->bdtdcProduct->product_prices->product_FOB) != '-' && trim($pro->bdtdcProduct->product_prices->product_FOB) != 'NA' && trim($pro->bdtdcProduct->product_prices->product_FOB) != 'N/A')
						<p style="text-align:  ;font-size:14px;color:#2192D9">
							@if($pro->bdtdcProduct->product_prices)
								@if(trim($pro->bdtdcProduct->product_prices->currency) != '')
								{{ $pro->bdtdcProduct->product_prices->currency}} 
								@else
								US
								@endif
							@else
							US
							@endif
					 $ @if($pro->bdtdcProduct->product_prices)
					 	{{ $pro->bdtdcProduct->product_prices->product_FOB}} 
					 	@else
					 	Price Not Available
					 	@endif / @if($pro->bdtdcProduct->ProductUnit)
					 	{{ $pro->bdtdcProduct->ProductUnit->name}} 
					 	@else
					 	pieces
					 	@endif
					 </p>
						@endif
						@endif
						@endif
					</div>
				</a>
			</div>
		</div>
	</div>
	</div>

@endif
@endforeach
@endif

</div>
		  
		        <span data-u="arrowleft" class="recommended-item-control" style="top:50px;left:8px;width:35px;height:55px;cursor:pointer;" data-autocenter="4"><i class="fa fa-angle-left" style="position: absolute;left: 0; background: transparent !important"></i></span>
		        <span data-u="arrowright" class="recommended-item-control" style="top:50px;right:8px;width:35px;height:55px;cursor:pointer;" data-autocenter="4"><i class="fa fa-angle-right" style="position: absolute;right: 0; background: transparent !important"></i></span>
		    </div>   
</div>
  </div>
</div>
</section>
	</div>
</div>
</div>
@stop
@section('scripts')
<script type='text/javascript' src='{!! asset('assets/slider/jssor.slider.mini.js',is_secured()) !!}'></script>
<script type="text/javascript" src="{!! asset('assets/helpcenter/jquery.etalage.min.js',is_secured()) !!}"></script>
<script src="{{ URL::asset('assets/fontend/js/jquery-te-1.4.0.min.js',is_secured()) }}" charset="utf-8"></script>
<script>
$(document).ready(function(){
	$(document).on({click:function(){
		if($('.moreless span').text() == 'More '){
			$('.show_details, .fa-caret-up').show();
			$('.fa-caret-down').hide();
			$('.moreless span').text('Less ');
		}else{
			$('.show_details, .fa-caret-up').hide();
			$('.fa-caret-down').show();
			$('.moreless span').text('More ');
		}
		
	}},'.moreless');

	$('.editors').jqte();
	    // settings of status
	    var jqteStatus = true;
	    $(".status").click(function(){
		    jqteStatus = jqteStatus ? false : true;
		    $('.jqte-test').jqte({"status" : jqteStatus})
	    });

});
	 $('#etalage').etalage({

            thumb_image_width: 350,

            thumb_image_height: 350,

            

            show_hint: true,

            click_callback: function(image_anchor, instance_id){

                alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');

            }

        });

        // This is for the dropdown list example:

        $('.dropdownlist').change(function(){

            etalage_show($(this).find('option:selected').attr('class') );

        });

        var jssor_1_options = {
	      $AutoPlay: false,
	      $AutoPlaySteps: 5,
	      $SlideDuration: 300,
	      $SlideWidth: 233,
	      $SlideSpacing: 20,
	      $Cols: 5,
	      $ArrowNavigatorOptions: {
	        $Class: $JssorArrowNavigator$,
	        $Steps: 5
	      },
	      $BulletNavigatorOptions: {
	        $Class: $JssorBulletNavigator$,
	        $SpacingX: 1,
	        $SpacingY: 1
	      }
	    };

	    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

	    function ScaleSlider1() {
	        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
	        if (refSize) {
	            refSize = Math.min(refSize, 1250);
	            jssor_1_slider.$ScaleWidth(refSize);
	        }
	        else {
	            window.setTimeout(ScaleSlider1, 50);
	        }
	    }
	    ScaleSlider1();
	    $(window).bind("load", ScaleSlider1);
	    $(window).bind("resize", ScaleSlider1);
	    $(window).bind("orientationchange", ScaleSlider1);

</script>
@stop