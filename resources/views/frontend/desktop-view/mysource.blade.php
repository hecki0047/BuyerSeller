@extends('frontend.layouts.about-us-topbar')
@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/frontend/css/dashboard.css',is_secured()) !!}" rel="stylesheet">
     <link property='stylesheet' href="{!! asset('assets/frontend/css/buyer-bdtdc.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('assets/frontend/css/why-bdtdc.css',is_secured()) !!}" rel="stylesheet">
  @endsection
@section('content')
<div class="container">
<div id="ajax_status" style="position: fixed;left: 40%;top: 40%;" class="text-center">
    <img src="{{ URL::asset('assets/frontend/images/uploads/ajax_loading.gif',is_secured()) }}" class="img-responsive" alt="" >
</div>

<div class="row" style="padding-top: 1%;padding-bottom: 0.5%">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <ul style="margin-left:-2% ;float: left;">
                  @if (Sentinel::check())
            <?php
              $role = App\Models\Role_user::where('user_id',Sentinel::getUser()->id)->first();
              $dashboard_route = ($role->role_id ==3) ? "company/dashboard" : 'buyer/dashbord';
            ?>
        @endif
                    <li style="float: left"><a href="{{ URL::to($dashboard_route,null,is_secured())}}" class="top-path-li-a">My Dashboard <i class="fa fa-angle-right top-path-icon"></i></a></li>
                    <li style="float: left"><a href="{{ URL::to('Mybuying-Request',is_secured()) }}" class="top-path-li-a"><strong> My Buying Request </strong><i class="fa fa-angle-right top-path-icon"></i></a></li>
                    <li style="float: left"><a href="" class="top-path-li-a"><strong>Buying Request Details </strong><i class="fa fa-angle-right top-path-icon"></i></a></li>
                </ul>
                 <ul style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
        <button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
      </ul>



            </div>
    
  </div>
<div class="row" style="margin-bottom:2%;">
	<div class="col-xs-12 col-sm-2 col-lg-2 padding_0" style="">						
		@include('frontend.layouts.dashboard-aside')
							
	</div>
	<div class="col-md-10 ">

	<div class="col-sm-12" id="">
		
		@php
		$inquiry_title = 'Not available';
		$image_url = 'assets/frontend/images/uploads/no_image.jpg';
		@endphp
		@if($quotations->inq_products_description)
		@php
			$inquiry_title = $quotations->inq_products_description->name;
		@endphp
			
		@endif
		@if($quotations->inq_products_images)
		@php
			$image_url = 'assets/frontend/images/' .$quotations->inq_products_images->image;
		@endphp
		@elseif($quotations->inq_docs_one)
		@php
			$image_url = 'assets/frontend/images/buying-request-docs/'.$quotations->inq_docs_one->docs;
		@endphp
		@endif
		@if($quotations->inquery_title != '')
		@php
			$inquiry_title = $quotations->inquery_title;
		@endphp
		@endif

	</div>
	@if(session()->has('success'))
	<div class="col-sm-12" style="padding:0">
		<div class="alert alert-success">{{session()->get('success')}}</div>
	</div>
	@endif
	@if(session()->has('error'))
	<div class="col-sm-12" style="padding:0">
		<div class="alert alert-danger">{{session()->get('error')}}</div>
	</div>
	@endif

<div class="col-sm-12" style="padding-bottom: 20px">
		<!-- <a href="{-{URL::to('mysource/add-details',$quotations->id,is_secured())}-}" type="button" class="btn btn-default btn-md" style="border: 1px solid #E87B0E;background-color:#FF9917;border-radius: 5px !important;font-size: 13px; padding: 3px 7px;">Add Details</a> -->
		@if($quotations->status != 0)
			<button id="post_again" type="button" class="btn btn-default btn-md" data-inqid="{{$quotations->id}}" style="border-radius: 5px !important;font-size: 13px; padding: 3px 7px;">Post Again</button>
		@endif
		@if($quotations->status != 4)
			<button id="query_close" type="button" class="btn btn-default btn-md" data-inqid="{{$quotations->id}}" style="border-radius: 5px !important;font-size: 13px; padding: 3px 7px;">Close</button>
		@endif
			<a href="{{URL::to('mysource/edit-add',$quotations->id,is_secured())}}" type="button" class="btn btn-default btn-md" style="border-radius: 5px !important;font-size: 13px; padding: 3px 7px;">Edit</a>
	</div>

	<div class="col-sm-12" id="item_sha" style="margin-top:5px;margin-bottom:8%;padding: 15px">
		<div class="col-sm-6">

		</div>
		<div class="col-sm-6">
			
		</div>

	<!-- </div>
	
	<div class="col-sm-12" id="item_sha" style="margin-bottom:2%;padding-bottom:2%;"> -->
		
		
			
	
	<!-- <div class="col-sm-12" style="margin-bottom:2%;">
		<p style="color: #333;font-size: 14px;font-weight: bold;">{{ $inquiry_title }}</p>

	</div> -->

	<div class="col-sm-12" style="margin-bottom:2%;">

		<div class="col-sm-3" style="margin-left: -1%;">
			<img style="height:229px;width:237px;" src="{!! asset($image_url) !!}" alt="" />
		</div>
		<div class="col-sm-9">
			<h1 style="font-size: 18px; font-weight: 300; text-transform: uppercase; color: #545c58; margin: 0 0px 10px;">
			{{ $inquiry_title, 0, 100 }}
			</h1>

			<p style="color: #999;">Quantity Required: {{ $quotations->quantity }} 
				@if($quotations->inq_unit_id)
				{{ $quotations->inq_unit_id->name}}
				@endif
			</p>
			@if($quotations->product_country)
			<p style="color: #999;">Required Supplier Location: 
				@if($quotations->product_country)
				{{ $quotations->product_country->name}}
				@endif
			</p>
			@endif
			@if($quotations->pre_unit_price != 0)
			<p style="color: #999;">Preferred Unit Price: 
				@if(trim($quotations->currency == ''))
				USD
				@else
				{{ $quotations->currency}}
				@endif {{ $quotations->pre_unit_price }} / 
				@if($quotations->inq_unit_id)
				{{$quotations->inq_unit_id->name}}
				@endif
			</p>
			@endif
			<p style="color: #999;">Expire After: {{ date('Y-m-d h:i:s a', strtotime($quotations->created_at . ' +15 day')) }}</p>
			<!-- <p style="color: #999;">Shipping Terms:</p> -->
			<p style="color: #999;">Destination Port: {{ $quotations->destination_port }}</p>
			@if(trim($quotations->payment_terms != ''))
			<p style="color: #999;">Payment Terms: {{ $quotations->payment_terms }}</p>
			@endif

			<!-- <p style="font-size: 13px;color: #999;"><a href="{-{ URL::to('Mybuying-Request',is_secured()) }-}" style="color: #999;">Buying Request</a></p> -->
			<!-- <p style="font-size: 13px;color: #999;"><a href="{-{ URL::to('mysource_quotations/inq',$quotations->id,is_secured()) }-}" style="color: #999;"> Quotations</a></p> -->
			<p style="font-size: 13px;color: #999;">Status : <b>
														@if($quotations->status == 1)
															Pending
														@elseif($quotations->status == 2)
															Approved
														@elseif($quotations->status == 3)
															Rejected
														@elseif($quotations->status == 4)
															Completed
														@elseif($quotations->status == 5)
															Closed
														@endif
														</b></p>
		</div>
		
	</div>
	<div class="col-sm-12">
		<div class="col-sm-3"></div>
		<div class="col-sm-9 padding_0">
			<p style="font-size:11px;font-weight:bold;">Product Detailed Specification: </p>
		<p>{{ $quotations->message }}</p>
		</div>
		
		<!-- <p style="font-size:11px;font-weight:bold;">Dear Sir/Madam, </p>
		<p style="font-size:11px;font-weight:bold;">Im looking for Universal Portable Tablet Handheld Case & Stand with 360 degree rotation with the following specifications: </p>
		<p style="padding-top:20px;color: #999;font-size: 11px;font-weight:bold;">Installation:</p>
		<p style="color: #999;font-size: 11px;font-weight:bold;">Adjustable Length: </p>
		<p style="color: #999;font-size: 11px;font-weight:bold;">Material:</p> -->
	</div>
	<div class="col-sm-12" style="margin-top:2%;">
	<div class="col-sm-3"></div>
		<div class="col-sm-9 padding_0">
			<p style="font-size: 11px;font-weight:bold;">Attached files:</p>
		@if($quotations->inq_docs)
			@foreach($quotations->inq_docs as $docs)
			
				<img style="height:80px;width:82px; margin-right: 3px" src="{!! asset('buying-request-docs/'.$docs->docs) !!}" alt="{{ $inquiry_title }}" />
			
			@endforeach
		@endif
		</div>
		
		

	</div>
	
	</div>
	<div class="col-sm-12" style="#border-top: 1px solid #DDD; padding: 0">


<section>
<?php
$product_homes = App\Models\HomeProduct::with('bdtdcProduct')->where('hot_product',1)->orderByRaw('RAND()')->get();
?>
 
<div  class="col-sm-12 item_sha" style="padding-bottom: 1%">
	<div class="col-sm-12">
		<h2 style="float: left;font-size: 19px" class="title text-left padding_0"  itemprop="name"><a style="color: #333;" href="{{ URL::to('selected/supplier-products') }}"> Today's Most Popular Products</a></h2>

		<p style="float:right; ">
			<a itemprop="url" href="{{ URL::to('selected/supplier-products') }}">View more
		</a></p>
	</div>
<div class="col-sm-12 padding_0">

				<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1250px; height: 310px; overflow: hidden; visibility: hidden;">
		        <!-- Loading Screen -->
		        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
		            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
		            <div style="position:absolute;display:block;background:url('assets/slider/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
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
			$p_name = $pro->bdtdcProduct->product_name->name; 
			@endphp
			@endif
		@endif
			<div class="single-products">
			
			<a itemprop="url" style="text-align: justify;text-justify: inter-word;" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$p_name).'='.mt_rand(100000000, 999999999).$pro->product_id,is_secured()) }}">
			
				<div class="productinfo text-center"  itemscope itemtype="http://schema.org/Product">
				@if($pro->bdtdcProduct->product_image_new)
					
					<img itemprop="image" title="{{ $p_name }}" style="width:100%;height:233px;border: none;box-shadow:none" src="../../{{ ImageManager::getImagePath($pro->bdtdcProduct->product_image_new->image, 233, 233, 'crop') }}" alt="{{ substr($p_name, 0, 50) }}" class="img-thumbnail  media_image_res">
				
				@else
					<img itemprop="image" title="{{ $p_name }}" style="width:100%;height:233px;border: none;box-shadow:none" src="../../{{ ImageManager::getImagePath('uploads/no_image.jpg', 233, 233, 'crop') }}" alt="{{ $p_name }}" class="img-thumbnail  media_image_res">
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
						@if($pro->bdtdcProduct->product_prices){
							@if(trim($pro->bdtdcProduct->product_prices->currency) != '')
							{{$pro->bdtdcProduct->product_prices->currency}}
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
					@endif</p>
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
</section>


	</div>
</div>
</div>

@stop

@section('scripts')
@include('frontend.layouts.dashboard_aside_scripts')
<script type='text/javascript' src='{!! asset('assets/slider/jssor.slider.mini.js',is_secured()) !!}'></script>
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