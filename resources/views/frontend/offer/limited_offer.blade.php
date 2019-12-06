@extends('fontend.master_dynamic')
	@section('content')
	<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="http://bdtdc.com" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="http://bdtdc.com/limited/offers" class="top-path-li-a"><span itemprop="name">Limited Time Offer</span></a></li>
                        
                    </ul>
            </div>
  </div>
 </div>
  <div class="container-fluid padding_0">
  		<div class="slider-popular" style="margin-bottom:5px;">
  							<div class="container">
  								<div class="row">
  									<div class="col-sm-12 col-md-12">
  											<div class="ppp-title">
  											<h1 style="color:#ff6600;text-align: center;width: 100%; display: block; margin-top: 2%;">Limited Time Offer</h1>

  											<div class="col-sm-12" style="text-align:center;">

												
													<div id="clockdiv">
													<input type="hidden" name="updated_days" value="15">
													<input type="hidden" name="updated_hours" value="24">
													<input type="hidden" name="updated_minutes" value="60">
													<input type="hidden" name="updated_seconds" value="60">
													  <div style="margin-right: 10px;padding-right: 10px;background-color:#fff !important;border-radius: 5px !important;color:#CC1414;border: 2px solid #cc1414;">
													    <span class="days" style="padding-left: 10px;padding-top: 5px;padding-bottom: 5px;"></span>d
													   
													  </div>:
													  <div style="margin-right: 10px;padding-right: 10px;background-color:#fff !important;border-radius: 5px !important;color:#CC1414;border: 2px solid #cc1414;">
													    <span class="hours" style="padding-left: 10px;padding-top: 5px;padding-bottom: 5px;"></span>h
													   
													  </div>:
													  <div style="margin-right: 10px;padding-right: 10px;background-color:#fff !important;border-radius: 5px !important;color:#CC1414;border: 2px solid #cc1414;">
													    <span class="minutes" style="padding-left: 10px;padding-top: 5px;padding-bottom: 5px;"></span>m
													   
													  </div>:
													  <div style="margin-right: 10px;padding-right: 10px;background-color:#fff !important;border-radius: 5px !important;color:#CC1414;border: 2px solid #cc1414;">
													    <span class="seconds" style="padding-left: 10px;padding-top: 5px;padding-bottom: 5px;"></span>s
													    
													  </div>
													</div>


											</div>


  										</div>
  									</div>
  								<div class="col-sm-12 col-md-12">
  									<div class="search-query">
 
  												 <div class="file-ex">
  													<i class="fa fa-file-text-o" style="padding-right: 20px; font-size: 36px;float: left;"></i>Attractive prices
  												</div> 
  												<div class="file-ex file-ex2" style="background-color: #255E98;">
  													 Great selection
  												</div> 
  									</div>
  									</div>
  									<div class="col-xs-12">
  												<div class="key-cat">
  															<div style="margin-left: 25px;" class="row ">
  																		<div class="col-xs-2 padding_0" onMouseOver='category_show()'><i class="fa fa-list" style="font-size: 30px; color: #999;position: absolute; padding-top: 9%; margin-left: 10%;"></i>
																			<button id="category-show" style="height:44px;border-radius: 5px!important;padding-left: 20%;" class="form-control category-show" name="search">
																					Category
																			</button> 
																		</div>
																	<form class="form" action="http://www.bdtdc.com/search_product" method="post">
																	<input type="hidden" name="_token" value="r36v0zIYPSEqGbuTXzI3LMW0XsiNnJGOuzLC5PWm">

																		 
																		<div class="col-xs-6 padding_0">
																			<input style="height:44px;border-radius: 5px!important;" name="key" class="form-control" type="text" placeholder="Enter English Keyword to Search . . ." required="required">
																		</div>
																		<div class="col-xs-4 padding_0">
																			<div class="padding_0">
																			<input type="submit" style="background:#19446F;padding-bottom: 11px;" class="btn btn-primary btn-lg pull-left" value="Search">
																			</div>
																			
																		<!-- 	<div class="col-md-7 col-sm-7 col-xs-7" style="border-radius: 5px !important;">
																				
																			</div> -->
																		</div></form>
																	
																<!-- </div> -->
																<div id="product-category" class="col-xs-8" style="top: 43px;">
																	<ul class="cat-list-product" onMouseOver='category_show()' onMouseOut='hide_category()'>
																	sample text
																		@if($category_data)
																			@foreach($category_data as $category)
																        <li class="cat-list-product-li"><a itemprop="url" target="_blank" href="{{URL::to('limited/offers',$category->bdtdcCategory->id,is_secured())}}">{{$category->bdtdcCategory->name}}</a></li>
																		 	@endforeach
																		@endif
																	</ul>
																</div>
												</div>
							</div>
  								
					</div>
				</div>
					
  								
  						
  		</div>
					
</div>

<div class="container padding_0">

		
		
			<!-- <div class="row padding_0" style="margin-left:0; margin-right:0; width:100%;"> -->
			@foreach($parent_cat_data as $lim_data)
		    <div class="m-category-cluster">
				<div class="limit-expanded padding_0">
					<div class="limit-wrap">
							<div class="limit-title">
								<a itemprop="url" target="_blank" href="{{URL::to('outdoor',$lim_data->sub_category,is_secured())}}">{{$lim_data->bdtdc_parent_Category->name or ''}}</a>
							</div>
							<div class="limited-box">
										<div class="limit-links">
					                        <div class="limit-tags">
					                            @foreach ($lim_data->bdtdc_parent_Category->parent_cat as $cat)
					                            	<a itemprop="url" target="_blank" href="{{URL::to('outdoor',$cat->id,is_secured())}}">{{ $cat->name }}</a>
									            @endforeach
					                        </div>
					                    </div>
										<div class="limit-img">
											<a itemprop="url" target="_blank" class="util-valign-ctn" data-xpjax="page=search" href="{{URL::to('outdoor',$lim_data->sub_category,is_secured())}}" data-domdot="id:26152,ext:'n=1|type=pic'">
                        						<img itemprop="image"  class="util-valign-inner" src="{{ URL::to('uploads',$lim_data->bdtdc_parent_Category->single_image,is_secured()) }}" alt="$lim_data->bdtdc_parent_Category->single_image"> 
                        					</a>
										</div>
										
					                    <a itemprop="url"  href="#" class="ui2-button ui2-button-default ui2-button-normal ui2-button-small limit-more" style="border-radius: 3px !important;">View more</a>
							</div>
					</div>
				</div>
				</div>
			
				@endforeach	
		<!-- </div> -->
		
	
</div>
	<div class="container">
			<div class="row padding_0" style="background: #fff;">
					
				<div class="col-sm-12 col-md-12">
								
				</div>
			</div>
			<div class="row padding_0">
				<div class="group-title" style="color: #255E98;">
                    Great Deals in the Most Popular Categories : 
                </div>
			</div>
			<div class="row padding_0" style="background: #fff;margin-bottom: 10px;margin-bottom: 28px;">
				<div class="col-sm-12 col-lg-12 col-md-12 limit-offer-pro-dt">

				@foreach($quotations as $quotation)

					<div class="col-sm-3 col-md-3 col-lg-3" style="border:1px solid #ddd; border-left: 0 none;border-top: 0 none;">
						<div class="product-box" style="width: 100%; border: 0 none;">
		                       <div class="cat-product-img-box">
		                              <a itemprop="url" target="_blank" href="{{URL::to('outdoor',$quotation->category_id,is_secured())}}"><img itemprop="image"  style="height: 225px;max-height: 220px;" class="product-fassion-img" src="{{ URL::to('uploads',$quotation->image,is_secured()) }}" alt="fashion-dress"></a>
		                       </div>
		                       <a itemprop="url" target="_blank" href="{{URL::to('outdoor',$quotation->category_id,is_secured())}}">
		                             <div class="cat-item-title">{{$quotation->product_name }}...</div>

		                       </a>


		                       <div class="col-sm-12 padding_0">
					                    <span style="color: #999;font-size: 16px;line-height:30px;color:black;margin-left: -1%;color: #999;">
					                        Up to
					                    </span>
					               
					                    <span style="font-size: 18px;line-height: 45px;color:#19446F;margin-left: -100%;padding-top: 3px;">
					                        <span class="dollar">{{$quotation->profit_percentage}}%</span>
					                    </span>
					         
					            </div>

		                       <div class="dollar-price"><span class="dollar"></span></div>
		                       <div class="item-views" style="margin-bottom:5%;">
		                       	<p style="font-size: 17px;color: #333;text-align: center;padding-bottom:0px;">
						                {{$quotation->category_name}}
						            </p> 
		                        
		                       </div>
		                      
		                       <div style="padding-left: 55px;padding-top: 12px;padding-bottom: 12px;" class="product-view-extend">
		                       		
		                              <a itemprop="url" target="_blank" href="{{URL::to('outdoor',$quotation->category_id,is_secured())}}" class="btn btn-primary join"><i class="fa fa-envelope-o"></i> View Details </a>
		                       </div>                      
		                </div>
						
					</div>

				@endforeach
		
		</div>
	</div>
			


@stop
@section('scripts')

<script type="text/javascript">


function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

function updateClock() {
var t = getTimeRemaining(endtime);

daysSpan.innerHTML = t.days;
hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

if (t.total <= 0) {
  clearInterval(timeinterval);
}
}

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var updated_days = $('[name="updated_days"]').val();
var updated_hours = $('[name="updated_hours"]').val();
var updated_minutes = $('[name="updated_minutes"]').val();
var updated_seconds = $('[name="updated_seconds"]').val();

var deadline = new Date(Date.parse(new Date()) + updated_days * updated_hours * updated_minutes * updated_seconds * 1000);
// alert (deadline.getTime());
//alert (deadline);
initializeClock('clockdiv', deadline);
/*$.get('http://bdtdc.com/limited/offers/get_category',{
	date:deadline.toUTCString(),
},function(result){
alert (result);
});*/


function category_show()
{
document.getElementById('product-category').style.display="block";
}

function hide_category()
{
 document.getElementById('product-category').style.display="none";
}
$(document).click(function(){
	hide_category();
});
$(document).ready(function(){

	var limit_items=$(".limit-expanded");

	$(limit_items[0]).addClass("limit-ex");
    $(".limit-expanded").hover(function(){
        for(var i=0; i<limit_items.length; i++){
        	$(limit_items[i]).removeClass('limit-ex');
        }
        $(this).addClass("limit-ex");
    });
    
});



// $(document).ready(function(){
//     $(".limit-expanded").hover(function(){
//         $(".limit-expanded").css("width", "25%");
//         $(".limit-img").css("margin-right", "48%");
//         $(".limit-links").css("padding-left", "22%");
//     });
// });
// $(".limit-expanded").mouseover(function(){
//   $("#limit").removeClass("limit-expanded-offer").addClass("limit-expanded")
//   $("#limit-offer").removeClass("limit-expanded").addClass("limit-expanded-offer")
// })
// $(document).ready(function(){
//     $(".limit-expanded").mouseover(function(){
//         $(".limit-expanded-offer").css("width", "100px");
//     });
//     $(".limit-expanded").mouseout(function(){
//         $(".limit-expanded-offer").css("width", "40%;");
//     });
// });

// $(document).ready(function(){
// 		    $("ul.m-category-cluster li").hover(function(){
// 		    	$(".limit-expanded-offer" ).replaceWith( $( ".limit-expanded" ) );
// 		       $(this ).replaceWith( $( ".limit-expanded-offer" ) );
// 		    });
		   
// 		});

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

</script>
@stop 