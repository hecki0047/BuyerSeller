@extends('frontend.layouts.header_dynamic')
	@section('content')
</div>
</div>
<!-- <img src="{!! ImageManager::getImagePath(public_path().'/bdtdc-product-image/slider/banner_03.png', 229, 229, 'crop') !!}"  /> -->
<section style="background-color: #D9C0A2;">
			
			
			<div class="banner-consumer">
			<div class="container">
		<!-- <div id="flashNews" style="position: absolute;bottom: 0;">
		    <div class="news">
		    		<div class="flg-box flg-m flg-icon"></div>
		    		<div class="flg-text">T*****n just placed an order for US $2**,**0</div>
		    </div>
		    <div class="news">
		    		<div class="flg-box flg-m flg-icon"></div>
		    		<div class="flg-text">T*****n just placed an order for US $2**,**0</div>
		    </div>
		     <div class="news">
		    		<div class="flg-box flg-m flg-icon"></div>
		    		<div class="flg-text">T*****n just placed an order for US $2**,**0</div>
		    </div>
		     <div class="news">
		    		<div class="flg-box flg-m flg-icon"></div>
		    		<div class="flg-text">T*****n just placed an order for US $2**,**0</div>
		    </div>
		     <div class="news">
		    		<div class="flg-box flg-m flg-icon"></div>
		    		<div class="flg-text">T*****n just placed an order for US $2**,**0</div>
		    </div>
		     <div class="news">
		    		<div class="flg-box flg-m flg-icon"></div>
		    		<div class="flg-text">T*****n just placed an order for US $2**,**0</div>
		    </div>
		     <div class="news">
		    		<div class="flg-box flg-m flg-icon"></div>
		    		<div class="flg-text">T*****n just placed an order for US $2**,**0</div>
		    </div>
		</div> -->
			</div>
		</div>

</section>  
<section style="background-color: #D9C0A2; position: relative;" >

<div class="container">
<div class="col-sm-12 padding_0">
<nav class="navbar navbar-inverse" id="consumer-nav-bar"  style="border:0 none; border-radius:0 !important; margin-bottom: 0;background: #846958;">

  <div class="" style="">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>   
      </button>
    </div>
    <div class="epandble" style=" ">
    <p class="expnd-btn"><i class="fa fa-angle-double-down" aria-hidden="true"></i></p>
      <div class="collapse navbar-collapse" id="myNavbar" style="padding-right: 0">
        <ul class="nav navbar-nav consumer-menu">

          @if($cats)
                     
                                           
		@foreach($cats as $data)
            
          <li><a href="#target_cat{{$data->cat_id}}">{{ $data->category_name->name or ''}}</a></li>



          @endforeach
          @endif
          
        </ul>
      </div>
    </div>
  </div>
</nav>    
  
</div>

<div class="col-sm-12 col-md-12"  id="consumer-goods" style="margin-bottom: 20px; background: #fff;">
	<h1 style="color: #1a4570; font-weight: 600; font-size: 27px; text-align: center; margin: 40px 0px;"> Selected products for Bangladesh clothing</h1>
	@if($cats)
		@foreach($cats as $data)
    <div class="row" id="target_cat{{$data->cat_id}}">
     <div class="col-sm-12 col-md-12" style="background: lightgray; margin-bottom: 25px">
    			<h2 class="title-product-sect" style="background-color: transparent;">{{ $data->category_name->name or ''}}</h2>
     </div>
   <div class="col-sm-12 col-md-12">
		
		@foreach($data->per_cat_product as $pro)
	<div class="col-sm-3 col-md-3 cl-s-3">
		<div class="product-container box">
		<!-- <div class="offer-pro">
			<div><?php  //$rand=rand(20,50); echo $rand;?>%</div>
			<div>OFF</div> 
		</div> -->
		@if($pro->pro_name_string)
		<a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$pro->pro_name_string->name).'=232942253'.$pro->product_id,is_secured()) }}">
			@else
			<a href="">
			@endif
		<div class="con-pro-img" style="overflow: hidden; width: 236px; margin: 0 auto;">
				@if($pro->select_product_images)
            <img itemprop="image" title="{{ $pro->pro_name_string->name or '' }}" style="visibility: visible; border: none" class="img-thumbnail product-bd-img" src="{{ URL::to((isset($pro->select_product_images)) ? $pro->select_product_images->image : 'no_image.jpg',is_secured()) }}" alt="{{ $pro->pro_name_string->name or '' }}" />

		

            
            @else
            <img itemprop="image" style="visibility: visible;" title="No image" class="img-responsive  product-bd-img" src="{{ URL::to('uploads/no_image.jpg',is_secured()) }}" alt="bdtdc" />
            @endif
		</div>
		</a>
		<div>
			@if($pro->pro_name_string)
				<a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$pro->pro_name_string->name).'=232942253'.$pro->product_id,is_secured()) }}">
					@else
					<a href="">
					@endif
					<h3 style="font-weight: 600; text-align: center;width: 100%" class="single-line">{{ $pro->pro_name_string->name or '' }}</h3>
				</a>
			</div>

			

			<div style="text-align: center;">
				<img src="{{asset('resources/assets/country-images/buyers_prefer.png')}}">
				<span>
					<i class="fa fa-weixin"></i><a data-product_id="{{ $pro->product_id or '' }}" class="contact_supplier" data-supplier_id="
							@if($pro->copmany)

								@if($pro->copmany)
									{{ $pro->copmany->user_id.mt_rand(100000000, 999999999) }}
								@else
									0
								@endif
							@else
							0
							@endif
							" itemprop="url" href="#">Contact for prices</a>

				</span>

				<div class="offer-o-price" style="height: auto;text-align: center;">
					US ${{ $pro->cat_pro_price->FOB or ''}}
					<div class="offer-stock" style="display: inline-block;">
							<span><?php  $rand=rand(1000,5000); echo $rand;?></span> Pieces sold
					</div>
				</div>
				

			</div>
			

			<div class="offer-action">
				<a data-product_id="{{ $pro->product_id or '' }}" class="offer-action-btn contact_supplier" data-supplier_id="
							@if($pro->copmany)

								@if($pro->copmany)
									{{ $pro->copmany->user_id.mt_rand(100000000, 999999999) }}
								@else
									0
								@endif
							@else
							0
							@endif
							" itemprop="url" href="#">Contact for buy</a>	
			</div>

			<div class="prod-annex">
				<h3 style="font-weight: 600; text-align: center;width: 100%;padding: 5px" class="single-line">{{ $pro->pro_name_string->tag or '' }}</h3>
			</div>
		</div>
	</div>
	@endforeach



</div>
</div>
	@endforeach
	@endif


<div class="row" id="top-supplier">
	<div class="col-sm-12 col-md-12">
				<div class="title-product-sect">Bangladesh clothing manufacturar </div>
	</div>
<div class="col-sm-12 col-md-12">

	@if($suppliers)
	@foreach($suppliers as $data)
 <div class="col-sm-4 col-md-4 cl-s-3">
 		<div class="suppli-info">
 			<div class="comp-name">
			<img style="width: 60px;height: 54px;" src="{{asset('resources/assets/country-images/custom-production.png')}}">
			<span>Shenzhen Letine Technology Co., Ltd.</span>
		</div>
		<div class="com-data-info">
			<h3>Main Categories: <span>Radio Control Toys</span></h3>
		</div>
		<div class="com-data-info">
			<h3>Company Type : <span>Manufacturer</span></h3>
		</div>
		<div class="com-data-info">
			<h3>Average Response Time : <span>0.6h</span></h3>
		</div>
 		</div>
		<div class="product-container" style="padding: 0;height: 320px;">
		<div class="col-sm-12 col-md-12 padding_0">
		<div class="col-sm-6 col-md-6 divider-pro">
		<div class="cun-suppli-pro">
				<img src="{{asset('resources/assets/country-images/light-lighting.jpg')}}">
		</div>
		<div class="order-pro-prc">
				<span class="price-pp" title="US $20.00">US $20.00</span>
			</div>
		<div>
				<a href="">
					<h3 class="single-line">For iPhone 7 Tempered Glass Screen Pro</h3>
				</a>
			</div>
			
			<div class="offer-stock">
						<div>MOQ:<span class="value-tm">480 Pieces</span></div>
			</div>
			<div class="offer-action">
					<a href="#" class="offer-action-btn">Buy Now</a>	
			</div>
		</div>
		<div class="col-sm-6 col-md-6 divider-pro">
			<div class="cun-suppli-pro">
					<img src="{{asset('resources/assets/country-images/light-lighting.jpg')}}">
			</div>
			<div class="order-pro-prc">
				<span class="price-pp" title="US $20.00">US $20.00</span>
			</div>
		  <div>
				<a href="">
					<h3 class="single-line">For iPhone 7 Tempered Glass Screen Pro</h3>
				</a>
			</div>
			<div class="offer-stock">
						<div>MOQ:<span class="value-tm">480 Pieces</span></div>
			</div>
			<div class="offer-action">
					<a href="#" class="offer-action-btn">Buy Now</a>	
			</div>
		</div>
	</div>
	</div>
</div>
@endforeach
@endif




	
</div>
</div>
</div>
</div>
</section>
<div class="container">
@stop
@section('scripts')
<script type="text/javascript">



/////////////////////////////////////////////////////////////////////
		var navHeight = $('#consumer-nav-bar').outerHeight();
		var navHeight2 = $('#consumer-nav-bar').offset().top;
        $('#consumer-nav-bar').wrap('<div class="nv-wrpr"></div>');
        $('.nv-wrpr').outerHeight(navHeight);
         var navWd = $('.nv-wrpr').width();
         $('#consumer-nav-bar').width(navWd);

        $('#consumer-nav-bar').affix({
		      offset: {
		        top: navHeight2
		      }
		});	

		var lilen = $('#myNavbar ul li');
        var cont = 0;

        for(var i = 0; i<lilen.length; i++){
        	cont += $(lilen[i]).width();
        	setButton();
        };

        function setButton(){
        	if(cont > navWd - 30){
        		$('.expnd-btn').css('right', '0');
        		$("#myNavbar").css('padding-right','30px')
        		console.log('condition ok');
        	}
        };

        var epandble = false;
        $('.expnd-btn').click(function(){
        	if(!epandble){
        		$('.epandble').addClass('epan-true');
        		$('.expnd-btn > .fa').css('transform','rotate(180deg)');
        		var navHeight = $('#consumer-nav-bar').outerHeight();
				$('.nv-wrpr').outerHeight(navHeight);
        		epandble = true;
        	}else{
        		$('.epandble').removeClass('epan-true');
        		$('.expnd-btn > i').css('transform','rotate(0deg)');
        		var navHeight = $('#consumer-nav-bar').outerHeight();
				$('.nv-wrpr').outerHeight(navHeight);
        		epandble = false;
        	}
        	
        })

        $( window ).resize(function() {
        	var navWd = $('.nv-wrpr').width();
         	$('#consumer-nav-bar').width(navWd);
         	renderIt()
		});

        function renderIt(){
        	if ( $(window).width() < 768) {
			    $('.expnd-btn').css('display', 'none');
			    $("#myNavbar").css('padding-right','0')
			    $('.epandble').addClass('epan-true');
			}
        };

		$(document).ready(function() {
			
		});
        
                    
/////////////////////////////////////////////////////////////////////
  					var lastId,
                    topMenu = $("#myNavbar"),
                    topMenuHeight = topMenu.outerHeight()+10,
                    // All list items
                    menuItems = topMenu.find("a"),
                    // Anchors corresponding to menu items
                    scrollItems = menuItems.map(function(){
                      var item = $($(this).attr("href"));
                      if (item.length) { return item; }
                    });



                // Bind click handler to menu items
                // so we can get a fancy scroll animation
                menuItems.click(function(e){
                	console.log('clicked')
                  var href = $(this).attr("href"),
                      offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight+1;
                  $('html, body').stop().animate({ 
                      scrollTop: offsetTop
                  }, 300);
                  e.preventDefault();
                });

                // Bind to scroll
                $(window).scroll(function(){
                   // Get container scroll position
                   var fromTop = $(this).scrollTop()+topMenuHeight;
                   
                   // Get id of current scroll item
                   var cur = scrollItems.map(function(){
                     if ($(this).offset().top < fromTop)
                       return this;
                   });
                   // Get the id of the current element
                   cur = cur[cur.length-1];
                   var id = cur && cur.length ? cur[0].id : "";
                   
                   if (lastId !== id) {
                       lastId = id;
                       // Set/remove active class
                       menuItems
                         .parent().removeClass("spy-in")
                         .end().filter("[href='#"+id+"']").parent().addClass("spy-in");
                   }                   
                });



// /* highlight the top nav as scrolling occurs */
// $('body').scrollspy({ target: '.consumer-menu' })



// /* smooth scrolling for nav sections */
// $('#myNavbar .navbar-nav li>a').click(function(){
//   var link = $(this).attr('href');
//   var posi = $(link).offset().top + 20;
//   $('body,html').animate({scrollTop:posi},700);
// })


var news = $('.news')
current = 0;
news.hide();
Rotator();
function Rotator() {
    $(news[current]).fadeIn('slow').delay(800).fadeOut('slow');
    $(news[current]).queue(function() {
        current = current < news.length - 1 ? current + 1 : 0;
        Rotator();
        $(this).dequeue();
    });
}
// $(".consumer-menu li a").on('click', function(e){
//     $(".consumer-menu .active").removeClass('active');
//     $(this).parent().addClass('active'); 
//     e.preventDefault();
// });
// jQuery(document).ready(function() {
//     jQuery('.catgy-icon').mouseover(function() {
//         jQuery(this).parent().hide();
//     }).mouseout(function() {
//         jQuery(this).parent().show();
//     });
// });
$('.catgy-icon').mouseenter(function () {
      $(this).find('.c-in-span').fadeIn();
     $(this).css("background","#FF6D00");
}).mouseleave(function () {
    $(this).find('.c-in-span').fadeOut();
     $(this).css("background","0 none");
});

$(document).on({
            		click: function(e) {
            			e.preventDefault();
            			$('.modal-content').html('<span class="btn btn-block btn-lg"><i class="fa fa-spinner fa-pulse loading_icon text-primary"></i></span>');
            			// var base_url = $('[name="base_url"]').val();
            			var base_url = window.location.origin;
            			var supplier_id = $(this).data('supplier_id');
            			var product_id = $(this).data('product_id');
            			var url = base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
            			//$('.modal-content').html(" ");
            			/*$.get(url, function(r) {
            				$('.modal-content').html(r);
            				// $('#animatedModal').modal('show', {backdrop: 'static'});
            			})*/
            			window.location.href = url;
            		}
            	}, '.contact_supplier');

</script>
<script type="text/javascript">
            var maintext = document.getElementById('com_des').innerText;
            maintext = maintext.slice(0, -10);
            var longtext = maintext+'<span class="pull-right more"  style="cursor: pointer;" onclick="moretext();">Less &nbsp;<i class="fa fa-caret-right"></i></span>';
            if(maintext == '' || maintext == null){
                  var shorttext = maintext.substr(0,150)+'<span class="pull-right more"  style="cursor: pointer;" onclick="lesstext();">More &nbsp;<i class="fa fa-caret-right"></i></span>';
            }else{
                  var shorttext = maintext.substr(0,125)+'...'+'<span class="pull-right more"  style="cursor: pointer;" onclick="lesstext();">More &nbsp;<i class="fa fa-caret-right"></i></span>';
            }
            document.getElementById('com_des').innerHTML = shorttext;
            function lesstext(){
                  document.getElementById('com_des').innerHTML = longtext;
            }
            function moretext(){
                  document.getElementById('com_des').innerHTML = shorttext;
            }
      </script>
@stop