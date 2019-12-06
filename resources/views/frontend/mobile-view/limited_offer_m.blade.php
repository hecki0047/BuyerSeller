<?php
use App\Models\LimitedTimeOffer;
?>
@extends('frontend.mobile-view.master_m')
	@section('content')
	<div class="row padding_0">
			<div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
                    <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block; padding-left: 0;">
                    <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
                    </a>
    </div>
    <div class="col-sm-12 padding_0">
       <button class="btn btn-default" onclick="window.history.back();" style="width:100%;text-align:center;color: #666;padding:10px;font-size: 20px;padding-top:17px;"><i class="fa fa-reply-all" style="font-size: 30px;" aria-hidden="true"></i></button>
    </div>
    </div>

    <div class="row padding_0" style="background: #fff;">
        <div class="cat-pr-list" id="one">All Category <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></div>
        <div class="col-xs-12 padding_0" id="two" style="display:none;">
            @if($parent_cat_data)
            @if(count($parent_cat_data) > 0)
                @foreach($parent_cat_data as $parent_cat)
                @if($parent_cat->bdtdc_parent_Category)
                <div class="sb_pd_list"><a href="{{URL::to('outdoor',$parent_cat->sub_category),is_secured()}}" class="pp-list-an"> {{$parent_cat->bdtdc_parent_Category->name}}</a></div>
                @endif
                @endforeach
            @endif
            @endif
    	</div>

        <div id="append_div">
        @if($all_subcategory)
        @if(count($all_subcategory) > 0)
        @foreach($all_subcategory as $sub_cat)
            @if($sub_cat->bdtdcCategory)
            <div>
                <div style="width: 100%;">
                    <a class="title-wrapper" href="">
                    <span class="category-word">{{$sub_cat->bdtdcCategory->name}} </span>
                    <span class="see-all"><a href="{{URL::to('product-of-month'),is_secured()}}"> <dt style="float: right;">See All</dt></a></span>
                    </a>
                </div>
                <div class="col-xs-12 img-scroll-list padding_0" style="margin-top: 15px; background: #fff;">
                    <ul class="img-list" style="width: 1200px; clear: both;">
                    <?php
                    $Limited_time_data = LimitedTimeOffer::with('product_name','bdtdcproductimage','bdtdcproductimages','bdtdcCategory','pro_parent_cat')->where('sub_category',$sub_cat->sub_category)->get();
                    ?>
                    @if($Limited_time_data)
                    @if(count($Limited_time_data) > 0)
                        <?php $product_counter = 1;
                        foreach($Limited_time_data as $product){
                        if($product->product_name){
                        if($product_counter >6){break;}
                        ?>
                        <li class="product-limit">
                            <a class="img-wrapper-limit" href="">
                            @if($product->bdtdcproductimage)
                                <img title="{{$product->product_name->name}}" class="lazy-load-img img-responsive" src="{!! URL::to('uploads',$product->bdtdcproductimage->image,is_secured()) !!}">
                            @elseif($product->bdtdcproductimages)
                                <img title="{{$product->product_name->name}}" class="lazy-load-img img-responsive" src="{!! URL::to('bdtdc-product-image',trim($product->pro_parent_cat->name).'/'.trim($sub_cat->bdtdcCategory->name).'/'.$product->bdtdcproductimages->image,is_secured()) !!}">
                            @else
                                <img title="{{$product->product_name->name}}" class="lazy-load-img img-responsive" src="{!! asset('uploads/no-image.jpg',is_secured()) !!}">
                            @endif
                            </a>
                        </li>
                        <?php
                        $product_counter++;
                        }
                        }
                        ?>
                    @endif
                    @endif
                    </ul>
                </div>
            </div>
            @endif
        @endforeach
        @endif
        @endif
        {!!$all_subcategory->render()!!}
        </div>
    	
    </div>
    <div class="row padding_0" style="margin-left:0; margin-right:0; width:100%; background: #fff;">
            @foreach($parent_cat_data as $lim_data)
                <div class="prodt-limit" style=" ">
                    <div class="limit-title">
                            <a itemprop="url" target="_blank" href="{{URL::to('outdoor',$lim_data->sub_category,is_secured())}}">{{$lim_data->bdtdc_parent_Category->name or ''}}</a>
                   </div>
                     <div class="limit-offf" > 
                        <div style="height: 150px; overflow: hidden;">                   
                       @foreach ($lim_data->bdtdc_parent_Category->parent_cat as $cat)
                            {{ $cat->name }}
                                <!--  <a itemprop="url" target="_blank" href="{{URL::to('outdoor',$cat->id,is_secured())}}">{{ $cat->name }}</a> -->
                        @endforeach
                              </div>
                                           
                                <div style="">
                                <a itemprop="url"  href="{{URL::to('outdoor',$lim_data->sub_category,is_secured())}}" class="ui2-button ui2-button-default ui2-button-normal ui2-button-small" style="border-radius: 3px !important; margin-left: 0;">View More</a>
                                </div>
                       </div>
                       <div class="limit-offf-img">
                        <a itemprop="url" target="_blank" class="util-valign-ctn" data-xpjax="page=search" href="{{URL::to('outdoor',$lim_data->sub_category,is_secured())}}" data-domdot="id:26152,ext:'n=1|type=pic'">
                          <img itemprop="image" class="img-responsive" style="width: 100%;padding-left: 10px; height: 196px;"  src="{{ URL::to('uploads',$lim_data->bdtdc_parent_Category->single_image,is_secured()) }}" alt="$lim_data->bdtdc_parent_Category->single_image"> </a>
                         </div> 
                     
                </div>
            
                @endforeach 
        </div>
	 
				


@stop
@section('scripts')

<script type="text/javascript">

		var a = document.getElementById('one');
      var b = document.getElementById('two');

		a.addEventListener('click',showhide);

		function showhide () {
		    if (b.style.display == 'none') {
		    b.style.display = 'block';
		    }
		    else {
		        b.style.display = 'none';
		    }}
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
$(document).ready(function(){
    // $('ul.pagination').css('padding-right','15px !important');
});
</script>
@stop 