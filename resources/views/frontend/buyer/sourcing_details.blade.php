@extends('frontend.layouts.header_dynamic')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/frontend/css/product-sourcing-details.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')
	<br>
	 <div class="row">
    <div class="col-md-12 padding_0" style="padding-bottom: 0%">
      <ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> Home &nbsp;</a></li>
      <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="" style="color: #000"> <i class="fa fa-angle-right"></i> Sourcing inquiry <i class="fa fa-angle-right"></i></a></li></ul>
    </div>
  </div>
		<div class="row" style="margin-top:2%;">
			<div class="col-sm-12" style="background-color:#fff !important;">
				<div class="col-xs-12" style="padding-top: 2%; padding-bottom: 2%;">
				<div class="col-xs-2" onMouseOver="show_cate_product('sourcing-list','block')" onMouseOut="hide_cate_product('sourcing-list','none')">
					<i class="fa fa-list" style="font-size: 30px; color: #999;position: absolute; padding-top: 9%; margin-left: 10%;"></i>
					<button  style="height:44px;border-radius: 5px!important;padding-left: 20%;cursor:pointer;" class="form-control category-show view_more" name="search">
							Category
					</button> 
					<div style="width: 415%;padding-top: 15px;padding-bottom: 18px;" class="col-sm-8 col-lg-8 col-md-8 padding_0 show_elements" id="sourcing-list">
						
						<ul id="cat-list">
							@if ($categories)					
								@foreach($categories as $c)
										@if($c->inq_products_category)
							        		<li class="cat-list-product-li" style="color:black;padding-left: 22px;">
							        			
							        			<a itemprop="url" href="{{URL::to('product-sourcing/details', $c->inq_products_category->bdtdcCategory->id)}}">
							        			{{ $c->inq_products_category->bdtdcCategory->name }}
							        			
							        			</a>
							        		</li>
							        	@else
							        	@endif
								@endforeach
							@endif
						</ul>
						
					</div>
				</div>
					<div class="col-xs-7" style="margin-left: -1%;">
						<input style="height:44px;border-radius: 5px!important;" name="name" class="form-control" type="text" placeholder="Type a keyword to search RFQs..." required="required" value="{{ $skey }}">
					</div>
					<div class="col-xs-1" style="margin-left: -3%;">	
						<!-- <input type="hidden" name="id">	 -->		
						<button type="button" style="background:#19446F;border-radius: 5px !important;" class="btn btn-primary btn-lg pull-left inquiry_search" value="Search">Search</button>				
					</div>
				<div class="col-xs-1" style="padding-left: 70px;">				
					<input type="button"  class="btn btn-default btn-lg pull-left" value="My Searches" style="font-size:14px;color: #1686CC;margin-top: 2%;border-radius:5px !important;">				
				</div>
							
				</div>
				
			</div>
			@if (count($errors) > 0)
			<div class="col-sm-12 error-msg-box" style="margin-top:2%;background-color:#fff !important;padding-top:2%;padding-bottom:2%;">
				<div class="" style="background-color: #FAE7E7;border-radius: 3px !important;padding: 20px 64px 20px 20px;width: 60%;    margin: 0 auto;">
                    <h4><i style="    font-size: 32px;    padding-right: 10px;font-weight: 400;color: #C9181F;" class="fa fa-ban" aria-hidden="true"></i>Please upgrade to a gold membership for this service</h4>
                    <p style="text-align:center;"><a style="    border-radius: 3px !important;" target="_blank" class="btn btn-success" href="{{URL::to('SupplierChannel/pages/suppliers_memebership',23,is_secured())}}">Upgrade now</a></p>
                </div>
			</div>
            @endif

            
            
			
			<div class="col-sm-12" style="margin-top:2%;border:1px solid #DDD;background-color:#fff !important;">

				<!-- search option start  -->
            	<input type="hidden" name="skey" value="{{ $skey }}">
            	<input type="hidden" name="categoryid" value="{{ $categoryid }}">
				<input type="hidden" name="country" value="{{ $countryid }}">
				<input type="hidden" name="rfq" value="{{ $rfq }}">
				<input type="hidden" name="posted" value="{{ $posted }}">
				<input type="hidden" name="quantity_form" value="{{ $quantity_form }}">
				<input type="hidden" name="quantity_to" value="{{ $quantity_to }}">

				<div class="col-sm-2" style="background-color:#E9EEF5;height: 47px;padding-top: 10px;margin-left: -1.3%;">
					<p style="font-size: 17px;">Date Posted</p>
				</div>
				<div class="col-sm-10">
					<p style="padding-top: 2%;font-size: 13px;" id="post_id">
						<a href="" posted="0">All</a>
						<span style="display:inline-block;width:24px;"></span>
						<a href="" posted="12-h">Last 12 Hours</a>
						<span style="display:inline-block;width:24px;"></span>
						<a href="" posted="24-h">Last 24 Hours</a>
						<span style="display:inline-block;width:24px;"></span>
						<a href="" posted="3-d">Last 3 Days</a>
						<span style="display:inline-block;width:24px;"></span>
						<a href="" posted="7-d">Last 7 Days</a>
						<span style="display:inline-block;width:24px;"></span>
						<a href="" posted="7-da">7 Days Ago</a>
					</p>
				</div>
			</div>
			
			<div class="col-sm-12" style="border:1px solid #DDD;margin-top:2%;background-color:#fff !important;">

				

				<div class="col-sm-2" style="height: 50px;padding-top: 10px;margin-left: -1.3%;border-right:1px solid #DDD;">
					<p style="font-size: 17px;">All Languages</p>
				</div>
				<div class="col-sm-2 location_class" onmouseover="color_changer_hover('buyer_location_text')" onmouseout="color_changer_default('buyer_location_text')" style="border-right:1px solid #DDD;height: 50px;padding-top: 10px;cursor:pointer;">
					<p class="buyer_location_text" style="font-size: 17px;">Buyer's Location</p>
					<div class="container country_tab_show" style="display: none;cursor:default;">
					<div style="position:absolute;border: 1px solid #dae2ed;box-shadow: 2px 2px 3px rgba(0,0,0,.13);background-color: #fff;top: 50px;left: -1px;padding: 10px;overflow: auto;height: 250px;width: 325%;z-index: 1;" class="">
					  <div style="border-bottom: 1px dotted #dae2ed;    padding-bottom: 10px;">
					  	<div class="replace_name" style="cursor: pointer;background: #7d8ca1;color: #fff;font-size: 12px;    line-height: 26px;width: 162px;padding-left: 7px;    border-radius: 5px !important;">
					  		@if($countryid != 0)
					  		@foreach ($bdtdc_country_list as $value) 
					    		@if($countryid == $value->id)
					    		{{ $value->name. " Selected" }}
					    		@endif
					    	@endforeach
					    	@else
					    	All Countries &amp; Regions
					    	@endif
					    		
					    </div>
					  </div>
					  <select style="box-sizing: border-box;border: 1px solid #dae2ed;color: #333;box-shadow: inset 0 1px 2px rgba(0,0,0,.1);height: 29px;font-size: 12px;width: 29%;padding-left: 24px;margin-top: 10px;margin-bottom: 10px;" class="form-control filter_by_cat_pro_input" name="country_id_data">
							<option value="0">Select Country</option>
							@foreach($bdtdc_country_list as $bdtdc_country_list_data)
									@if($countryid == $bdtdc_country_list_data->id)
									<option value="{{ $bdtdc_country_list_data->id}}" selected>{{ $bdtdc_country_list_data->name}}
									</option>
									@else
									<option value="{{ $bdtdc_country_list_data->id}}">{{ $bdtdc_country_list_data->name}}
									</option>
									@endif
							@endforeach
						</select>
						  <ul class="nav nav-tabs">
						    <li class="active"><a data-toggle="tab" href="#all-con">All Countries</a></li>
						    @foreach ($country as $Countries) 
									<li><a data-toggle="tab" href="#{{ explode(' ',$Countries->name)[0] }}">
										{{$Countries->name}}
										</a>
									</li>

							@endforeach
							
						  </ul>

						  <div class="tab-content">
						    <div id="all-con" class="tab-pane fade in active">
						      <div class="col-md-3 padding_0">
						      	<label class="country_select" style="cursor:pointer;" countryid="0"> All</label>
						      </div>
						    @foreach ($country as $Countries) 
										@foreach($Countries->country_region as $p)
											<div class="col-md-3 padding_0">
												<label class="country_select" style="cursor:pointer;" countryid="{{ $p->id}}">{{ $p->name}}
												</label>
											</div>
										@endforeach
							@endforeach
						    </div>
						    @foreach ($country as $Countries) 
								<div id="{{ explode(' ', $Countries->name)[0]}}" class="tab-pane fade">';
								@foreach($Countries->country_region as $p)
									<div class="col-md-3 padding_0"><label class="country_select" style="cursor:pointer;" countryid="{{ $p->id}}">{{ $p->name}}</label>
									</div>
								@endforeach
								</div>
							@endforeach
						  </div>
					</div>
					</div>
				</div>
  
				<div class="col-sm-2" style="padding-top: 10px;">
					<p style="font-size: 17px;">Quantity Required</p>
				</div>
				<div class="col-sm-1" style="padding-top:1%;">
					<input type="text" name="quantity-from" class="text-center check_integer"  style="width:55%;height:30px;" placeholder="from" value="{{ $quantity_form }}"> - 
				</div>
				<div class="col-sm-1" style="padding-top:1%;margin-left: -4%;">
					<input type="text" name="quantity-to" class="text-center check_integer"  style="width:55%;height:30px;" placeholder="to" value="{{ $quantity_to }}">
				</div>
				<div class="col-sm-1" style="padding-top:1%;margin-left: -4%;border-right:1px solid #DDD;">
					<input type="button" name="quantity_submit" class="pull-left"  style="width:55%;height:30px;border-radius:5px !important;" value="OK">
				</div>
				<div class="col-sm-3">
					<!-- <label><input type="checkbox" class="check_box_filter" name="volume" value=""> Volume</label> -->
					<label style="padding-left:5px;"><input type="checkbox" class="check_box_filter" name="open_rfq" value="" @if($rfq == 'true')
						checked
						@endif
						> Open RFQs</label>
					<!-- <label style="padding-left:5px;"><input type="checkbox" class="check_box_filter" name="photos" value=""> Photos</label>	 -->
				</div>
			</div>
			<div class="col-sm-12" style="border:1px solid #DDD;margin-top:2%;padding-top:1%;background-color:#fff !important;">
				<div class="col-sm-2">
					<p style="color: #FF7519;font-size:14px;">Best Match <i class="fa fa-arrow-down" aria-hidden="true"></i></p>
				</div>
				<div class="col-sm-2" style="">
					<p><a href="" style="color: #666;font-size:14px;"  id="demo1" onmouseover="mouseOver()" onmouseout="mouseOut()">Most Recently <i class="fa fa-arrow-down" aria-hidden="true"></i></a></p>
				</div>
				<!-- <div class="col-sm-2"></div>
				<div class="col-sm-1"></div> -->
				<div class="col-sm-3" style="color: #666;white-space: nowrap;">
					<p style="font-size: 14px;"><span style="color: #333;font-weight:bold;">{{ $source->total() }}</span> Buying Requests found</p>
				</div>
				<div class="col-sm-5" style="">
					<!-- <p> -->
					{!! $source->render() !!}
						<!-- <i class="fa fa-chevron-left" aria-hidden="true"></i>
						<span style="padding-left: 12px;">1</span>
						<span style="padding-left: 12px;">/</span>
						<span style="padding-left: 12px;">12</span>
						<i class="fa fa-chevron-right" aria-hidden="true" style="padding-left: 12px;"></i> -->
					<!-- </p> -->
				</div>
			</div>
			@foreach($source as $s)
			
			<div class="col-sm-12 source" style="border:1px solid #DAE2ED;border-top:none;background-color:#fff !important;">
				<div class="col-sm-7" style="border-right:1px dotted #DDD;padding-top:1%;padding-bottom:1%;">
					
						<p class="rfq"  style="font-size: 16px;font-weight: 700;color:#1686CC;">
							<a href="{{URL::to('product-sourcing/view',$s->id)}}" style="color:#1686CC;">
							@if($s->bdtdc_product)
							{{substr($s->bdtdc_product->product_name->name,0,60)}}
						@else
							{{substr($s->inquery_title,0,60)}}
						@endif
						
					</a>

						 details</a></p>
					<p style="padding-top:2%;color: #666;font-size: 14px;line-height: 18px;">  
						{!! $s->message !!}
							<span style="color: #666;font-weight: 700;">
					@if($s->bdtdc_product)
							{{substr($s->bdtdc_product->product_name->name,0,60)}}
						@else
							{{substr($s->inquery_title,0,60)}}
						@endif
						</span>,I would like</p>
					<p style="padding-top:2%;color: #999;font-size: 12px;">
						Date Posted:
						@if($s->updated_at)
						{{ date('Y-m-d', strtotime($s->updated_at))}}
						@endif
						<i>(Pacific Standard Time)</i>
					</p>
				</div>
				<div class="col-sm-3"style="border-right:1px dotted #DDD;padding-top:2%;padding-bottom:1%;">
					<p style="font-size:12px;color:#999;">Quantity Required</p>
					<p style="border-bottom:1px dotted #DDD;color: #666;padding-bottom:10px;margin-top:-4%;font-size: 17px;">
						{{$s->quantity}} {{$s->inq_unit_id->name}}
					</p>
					<p style="padding-top:2%;color: #666;font-size: 14px;line-height: 1.28571;">
					@if($s->sender_company->country)
						<img style="height:16px;width:22px;" src="{{ asset('assets/global/img/flags/'.strtolower($s->sender_company->country->iso_code_2).'.png',is_secured())}}">
						 {{$s->sender_company->country->name ?? ''}}
						 @endif
					</p>
				</div>
				<div class="col-sm-2" style="padding-top:1%;padding-bottom:1%;margin-top: 2%;">
					<a target="_blank" href="{{ URL::to('supplier/quote') }}/{{ $s->id }}" class="btn btn-default" style="color:#fff !important;background:rgb(25, 68, 111) none repeat scroll 0% 0%;border-color:#FF7519;border-radius:5px !important;">Quote Now</a>
					<p style="margin-top: 10px;color: #666;font-size: 14px;line-height: 1.28571;">Quotes Left:<span style="color: #FF7519;font-weight: 700;font-size: 13px;">
						@php 
						$rand_key = rand(10,50)
						@endphp
					     {{ $rand_key}}</span></p>
					<p style="font-size: 12px;color: #999;">Available with Quoting Privileges</p>
				</div>
				
			</div>
			@endforeach
			<div class="col-sm-12" style="margin-top:2%;">
				<div class="col-sm-2"></div>
				<div class="col-sm-6"></div>
				<div class="col-sm-2">
					<p style="padding-left: 53%;">Go to page</p>
				</div>
				<div class="col-sm-1">
					<input type="text" name="page-no" style="height: 29px;width: 37px;border:1px solid #fff !important;border-radius:5px !important;text-align:center;">
				</div>
				<div class="col-sm-1" style="margin-left: -4%;">
					<input type="submit" id="go-to-page" value="Go" style="font-size: 15px;height: 29px;width: 37px;padding-left: 8px;border:1px solid #fff !important;border-radius:5px !important;">
				</div>
				
			</div>
			
			

		</div>							
		
	@stop

@section('scripts')

<script type="text/javascript">

	$('input[name="page-no"]').keyup(function(event){
		event.preventDefault();
	    if(event.keyCode == 13){
	        $("#go-to-page").click();
	    }
	});

	$('input[name="name"]').keyup(function(event){
		event.preventDefault();
	    if(event.keyCode == 13){
	        $(".inquiry_search").click();
	    }
	});

	/*$(document).ready(function(){
	    $(".view_more").click(function(){
	        $(".show_elements").toggle();
	    });
	});*/
		// $(document).ready(function(){
		//     $("#hide").click(function(){
		//         $("p").hide();
		//     });
		//     $("#show").click(function(){
		//         $("p").show();
		//     });
		// });

		// $(document).ready(function () {
		//     $(document).on('mouseenter', '.category-show', function () {
		//         $(this).find(".product-category").show();
	 //    }).on('mouseleave', '#category-show', function () {
		//          $(this).find(".product-category").hide();
	 //    });
		//  });

	function color_changer_hover(target){
		$('.'+target).css('color','#3175af');
		$('.country_tab_show').toggle();
	}

	function color_changer_default(target){
		$('.'+target).css('color','#333333');
		$('.country_tab_show').toggle();
	}

	function search_data(){
		
        var skey = $('input[name="skey"]').val();
        var categoryid = $('input[name="categoryid"]').val();
        var country = $('input[name="country"]').val();
        var rfq = $('input[name="rfq"]').val();
        var posted = $('input[name="posted"]').val();
        var quantity_form = $('input[name="quantity_form"]').val();
        var quantity_to = $('input[name="quantity_to"]').val();
        var url = window.location.origin+'/product-sourcing/details/skey=='+skey+'+..+category=='+categoryid+'+..+country=='+country+'+..+rfq=='+rfq+'+..+posted=='+posted+'+..+quantity_form=='+quantity_form+'+..+quantity_to=='+quantity_to;
        window.location.href = url;
	}

	$('#go-to-page').click(function(e){
		e.preventDefault();
		var page_no = $('input[name="page-no"]').val();
		var base_url = window.location.href;
		if(base_url.includes("?page")){
			var url_array = base_url.split("?page");
			window.location.href = url_array[0]+"?page="+page_no;
		}else{
			window.location.href = base_url+"?page="+page_no;
		}
		
	});

	$(document).on({change:function(){
    	$('input[name="country"]').val($(this).val());
		// $('.country_tab_show').hide();
    	search_data();
    }},'.filter_by_cat_pro_input');

	$(document).on({click:function(){
    	var countryid = $(this).attr('countryid');
    	$('[name="country"]').val(countryid);
		// $('.country_tab_show').hide();
		search_data();
    }},'.country_select');



function show_cate_product(id,block) {
document.getElementById(id).style.display = block;
}
function hide_cate_product(id,none){

  document.getElementById(id).style.display= none;
}


$(document).on({click:function(e){
		e.preventDefault();
    	$('input[name="skey"]').val($('input[name="name"]').val());
		// $('.country_tab_show').hide();
    	search_data();
    }},'.inquiry_search');

$(document).on({keyup:function(event){
	// Allow: backspace, delete, tab, escape, and enter
    if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
            // Allow: Ctrl+V
            (event.ctrlKey == true && (event.which == '118' || event.which == '86')) ||  
            // Allow: Ctrl+c
            (event.ctrlKey == true && (event.which == '99' || event.which == '67')) || 
            // Allow: Ctrl+A
        (event.keyCode == 65 && event.ctrlKey === true) || 
         // Allow: home, end, left, right
        (event.keyCode >= 35 && event.keyCode <= 39)) {
             // let it happen, don't do anything
             return;
    }
	var o=$(this);
		o.val(o.val().replace(/[^\d]/g,""));
		if (o.val().length > o.maxLength){
      o.val(o.value.slice(0, o.maxLength))
		}
}},'.check_integer');

$('input[name="quantity_submit"]').click(function(e){
	e.preventDefault();
	var quantity_from = $('input[name="quantity-from"]').val();
	var quantity_to = $('input[name="quantity-to"]').val();
	if(quantity_from != '' && quantity_to != ''){
		$('input[name="quantity_form"]').val($('input[name="quantity-from"]').val());
		$('input[name="quantity_to"]').val($('input[name="quantity-to"]').val());
		search_data();
	}else{
		alert ('Fill all quantity field first!');
	}
});

$(document).on({
	click: function(e) {
	e.preventDefault();
	$('.country_tab_show').hide();
	var selected = $(this).val();
	var selected_name = $(this).attr('name');
	/*if(selected_name == 'volume'){
		if ($('input[name="volume"]').is(':checked')) {
			$('input[name="buyer_protection_input_data"]').val('true');
		}else{
			$('input[name="buyer_protection_input_data"]').val('false');
		}
	}else */
	if(selected_name == 'open_rfq'){
		if ($('input[name="open_rfq"]').is(':checked')) {
			$('input[name="rfq"]').val('true');
		}else{
			$('input[name="rfq"]').val('false');
		}
	}
	/*else if(selected_name == 'assessed_supplier'){
		if ($('input[name="assessed_supplier"]').is(':checked')) {
			$('input[name="assessed_supplier_input"]').val('true');
		}else{
			$('input[name="assessed_supplier_input"]').val('false');
		}
	}*/
	search_data();
}}, '.check_box_filter');

$('#post_id a').click(function(e){
	e.preventDefault();
	if($(this).attr('posted') == 0){
		$('input[name="categoryid"]').val(0);
	}
	$('input[name="posted"]').val($(this).attr('posted'));
	search_data();
});




//Product search
 /*$(document).on({
            keyup: function() {
                var template = "";
                $(this).autocomplete({
                    source: window.location.origin + "/product_suggesion/" + $(this).val()+"/all",
                    select: function(event, ui) {
                        $('[name="id"]').val(ui.item.id);
                    },
                    html: true,
                    open: function(event, ui) {
                        $('.ui-autocomplete').css('z-index', '9999');
                    }
                });
            }
        }, '[name="name"]');*/


        /*$(document).on({
            click: function(e){
                e.preventDefault(); 
                var id = $('[name="id"]').val();
                if(id == ''){
                    alert('Please select a product from populated drop down list');
                }else{

                    $('.myform').submit();
                }
                //alert('id');
        }},'[type="submit"]');*/


        //mouseover and mouseout

        /*function mOver() {
		    document.getElementById("demo").style.color = "#FF7519";
		}

		function mOut() {
		    document.getElementById("demo").style.color = "#1686CC";
		}*/

		function mouseOver() {
		    document.getElementById("demo1").style.color = "#FF7519";
		}

		function mouseOut() {
		    document.getElementById("demo1").style.color = "#666";
		}

		$('.pagination').css('margin-bottom','10px');

		



</script>
@stop 
