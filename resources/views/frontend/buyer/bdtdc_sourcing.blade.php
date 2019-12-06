@extends('frontend.layouts.header_dynamic')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/frontend/css/bdsource-for-suppliers.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')
	<br>
	 <div class="row">
    <div class="col-md-12 padding_0" style="padding-bottom: 0%">
      <ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> Home &nbsp;</a></li>
      <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="#" style="color: #000"> <i class="fa fa-angle-right"></i> Bdsourcing for Supplier <i class="fa fa-angle-right"></i></a></li></ul>
    </div>
  </div>
<div class="row" style="margin-top:2%;  margin-bottom:28px;border-bottom: 1px solid rgba(0,0,0,.1);">
			<div class="col-sm-12 col-md-12 padding_0"  id="sourcing-list1">
				<div class="col-sm-12" style="padding-top: 9%;padding-left: 8%;">
						  <div class="col-sm-12 col-xs-12 padding_0">
						       <div  style="color: #333; font-size: 26px;font-weight: 400; padding: 20px 20px; text-align:center;">Start business here</div>
						       </div>
						  <div class="col-sm-12 col-md-12 col-xs-12">
							   <div class="" onMouseOver="show_cate_product('sourcing-list','block')" onMouseOut="hide_cate_product('sourcing-list','none')" style="width: 150px;float: left;">	
									<input type="hidden" name="_token" value="r36v0zIYPSEqGbuTXzI3LMW0XsiNnJGOuzLC5PWm">
										
										
										<form style="height:44px;cursor:pointer; text-align:left; padding-top: 13px; border-right: 0 none;" class="form-control category-show view_more" name="search">
											<div style="float:left; position: relative;">
												<i class="fa fa-list" style="font-size: 23px; color: #999;padding-top: 9%;"></i>
												<span style="position: absolute; top: 0; left: 30px;">Category</span>
											</div>

												
										</form> 
										<div style="padding-top: 15px;padding-bottom: 18px;" class="col-sm-12 col-lg-12 col-md-12 padding_0 show_elements" id="sourcing-list">
							
								<ul id="cat-list">
									@if ($categorys)					
										@foreach($categorys as $c)
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
						<!-- <i class="fa fa-list" style="font-size: 30px; color: #999;position: absolute; padding-top: 9%; margin-left: 10%;"></i>
						<button  style="height:44px;border-radius: 5px!important;padding-left: 20%;cursor:pointer;" class="form-control category-show view_more" name="search">
								Category
						</button>  -->
						
					<div class="" style="">
						<div style="float:left; width:65%;"><!-- search option start  -->
		            	<input type="hidden" name="skey" value="">
		            	<input type="hidden" name="categoryid" value="0">
						<input type="hidden" name="country" value="0">
						<input type="hidden" name="rfq" value="false">
						<input type="hidden" name="posted" value="0">
						<input type="hidden" name="quantity_form" value="0">
						<input type="hidden" name="quantity_to" value="0">
						<input style="height:44px;" name="name" class="form-control" type="text" placeholder="Type a keyword to search RFQs..." required="required">
						</div>
						<div  style="float:left;">	
						<!-- <input type="hidden" name="id">	 -->		
						<button type="button" style="background:#19446F;border-radius: 5px !important;border-top-left-radius: 0 !important;
    border-bottom-left-radius: 0 !important;" class="btn btn-primary btn-lg pull-left inquiry_search" value="Search">Search</button>				
					    </div>
					</div>
					
					<!-- <div class="col-sm-2 col-md-2" style="padding-left: 29px;">				
						<input type="button"  class="btn btn-default btn-lg pull-left" value="My Searches" style="font-size:14px;color: #1686CC;margin-top: 2%;border-radius:5px !important;">				
					</div> -->
							
				</div>
			

			</div>
		</div>
			<div class="col-sm-12" style="margin-top:3%;">
				<p style="font-size:18px;font-weight: 400;z-index:1;">Latest RFQs</p>
			</div>
			@foreach($source as $s)
				<div class="col-sm-12 source" style="margin-bottom:1%;margin-top:1%; min-height: 145px;background-color: rgb(255, 255, 255) !important;">
					<div class="col-sm-10 col-md-10">
						<div class="col-sm-12 co-md-12">
				  <a itemprop="url" href="{{ URL::to('product-sourcing/view',$s->id )}}">
					<p style="padding-top: 2%;font-size:18px;font-weight:400;color: #1686CC;">
						@if($s->bdtdc_product)
							@if(isset($s->bdtdc_product->product_name))
							{{substr($s->bdtdc_product->product_name->name,0,60)}}
							@else
							@endif
						@else
							{{substr($s->inquery_title,0,60)}}
						@endif
					</p>
				
					<div class="col-sm-2 col-xs-6 padding_0" style="">
						
						@if($s->inq_products_images)
						<img   itemprop="image" style="height: 52px;width: 79px;" src="{{ URL::to(''.$s->inq_products_images->image,null,is_secured())}}" alt="">

						@elseif($s->inq_docs_one)
							<img   itemprop="image" style="height: 52px;width: 79px;" src="{{ URL::to('buying-request-docs',(isset($s->inq_docs_one->docs))?$s->inq_docs_one->docs:'no-image.jpg',null,is_secured()) }}" alt="">
						@else
						<img   itemprop="image" style="height: 52px;width: 79px;" src="{{ URL::to('uploads/no-image.jpg',is_secured()) }}" alt="">
						@endif
					</div>
					
					</a>
					<div class="col-sm-4 col-xs-12 padding_0">
					
							
							<div style="float:left;">
							@if($s->sender_company)
								@if($s->sender_company->country)
									<div>
									  <img  itemprop="image" style="height:20px;width:32px; float:left;" src="{{ asset('assets/global/img/flags/'.strtolower($s->sender_company->country->iso_code_2).'.png',is_secured())}}" 
									   alt="{{$s->sender_company->country->name ?? 'bangladesh'}}">
									    <div style="float:left; padding-left:8%;">
										@if($s->bdtdc_product)
											{{$s->bdtdc_product->brandname ?? ''}}
										@endif
										</div>
									</div>
									
								@endif
								@endif
								<div style="float:left;">
								
								
								<p style="color: #999;font: inherit;  padding-top:7%;">
									{{date('Y-m-d', strtotime($s->updated_at)) }}
								
								</p>
								
							</div>
							</div>
							</div>
							<div class="col-sm-3">
									<div style="">
								    <p style="color: #999;font-size:14px;">Requesting</p>
							      </div>
							       <div style="">
								  <p>
									<span style="color: #1DC11D;font-weight: 700;font-size: 17px;">
										{{$s->quantity }}
									</span>
									<span style="color: #333;font-size: 18px;">
										@if($s->inq_unit_id)
										{{$s->inq_unit_id->name }}
										@else
										@endif
									</span>
								   </p>
							  </div>
							</div>
						<div class="col-sm-3 col-md-3" style="">
								<div style="padding-top:1%;padding-bottom:1%;">
					          <a   href="{{ URL::to('product-sourcing/view',$s->id )}}" class="btn btn-default" style="color:#fff !important;background:rgb(25, 68, 111) none repeat scroll 0% 0%;border:0 none;border-radius:5px !important;">Quote Now</a>
					          <p style="margin-top: 10px;color: #666;font-size: 14px;line-height: 1.28571;">Quotes Left:<span style="color: #FF7519;font-weight: 700;font-size: 13px;"><?php  $rand=rand(10,20); echo $rand;?></span></p>
				           </div>
						</div>
					
					    </div>
					</div>
				</div>
			@endforeach

			{!! $source->render() !!}

			<div class="col-sm-12 source" style="margin-top:2%;background-color:#fff !important;">
				<p style="padding-top: 4%;font-size: 27px;color: #999; text-align:center;">How does BuyerSeller work? <a itemprop="url" href="{{ URL::to('source')}}" style="font-size: 15px;">Learn More</a></p>
				<div class="col-sm-12" style="margin-top: 2%;margin-bottom: 2%;text-align: center;">
					<img  itemprop="image" style="" src="{!! asset('assets/buyer-security/sourcing_buyer.png',is_secured()) !!}" alt="sourcing buyer" />
				</div>
			</div>
		</div>							
		
	@stop

@section('scripts')

<script type="text/javascript">

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



function show_cate_product(id,block) {
document.getElementById(id).style.display = block;
}
function hide_cate_product(id,none){

  document.getElementById(id).style.display= none;
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

$(document).on({click:function(e){
	e.preventDefault();
	$('input[name="skey"]').val($('input[name="name"]').val());
	// $('.country_tab_show').hide();
	search_data();
}},'.inquiry_search');

$('input[name="name"]').keyup(function(event){
	event.preventDefault();
    if(event.keyCode == 13){
        $(".inquiry_search").click();
    }
});



/* $(document).on({
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
        }, '[name="name"]');


        $(document).on({
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



</script>
@stop 
