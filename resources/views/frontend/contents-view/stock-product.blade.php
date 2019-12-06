@extends('frontend.layouts.master-register')
@section('content')
</div>

<div class="container-fluid padding_0">
			<div class="stock-banner">
				
			</div>
</div>
 <nav  id="nav_bar" class=" cates util-clearfix navbar" style="border-radius: 0px;">
  <div class="container-fluid">
    <div class="container">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        @if($outdoors)
           @foreach($outdoors->pro_sub_cat as $cat_name)
          	<li class="cate-item util-left"><a href="#sp{{ $cat_name->bdtdcCategory->id }}">{{ $cat_name->bdtdcCategory->name }}</a></li>
        
           @endforeach
         @endif
        </ul>
      </div>
    </div>
  </div>
</nav>  

@if($outdoors)
           @foreach($outdoors->pro_sub_cat as $cat_name)

<div class="container padding_0" id="sp{{ $cat_name->bdtdcCategory->id }}">
				<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
							<div class="module"><div class="tb-module sc-whosale-1111-title module-baby">
		                 <div   style="position:relative;top:-70px;">

						</div>
						    <h2 class="title">{{ $cat_name->bdtdcCategory->name }}</h2>
						</div>
						</div>
				</div>
			<div class="col-sm-12 col-md-12 padding_0 product-col-4">

					@foreach($cat_name->pro_cat_pro as $pro)
						<div class="col-sm-3 col-md-3 col-lg-3 padding_0">
									<div class="product-item util-left  " data-role="product-item" data-id="60376866355">
							           
							               <div style="z-index: 1; margin-left: 15px;" class="item-market profit f-sp-flag-profit">
                                							<div class="item-market-value">{{ $pro->profit_percentage or ''}}%</div>
                            							</div>
							            
							    		<div class="product-img" data-domdot="">
							    				<img class="product-bd-img " src="{!! asset('assets/fontend/bdtdc-images/product-chair-1.jpg',is_secured()) !!}" style="visibility: visible;">
							    			
							    		</div>
							    		<div>
							    			 <h3 class="product-name-stock">{{ $pro->product_name->name or ''}}</h3>
							    		</div>
							               
							            <div class="sellingpoints">
							                <p class="product-points ellipsis" style="color: ;">
							                    MOQ:1 Piece
							                </p>
							                <p class="product-points  ellipsis" style="color: Green;"> 
							                </p>
							            
							            </div>
							    		<p class="product-price-st">US $44.43</p>
							    		<a href="" class="product-button" style="border-radius: 3px !important;">
							    		  Shop Now
							    		</a>
							    	</div>
						</div>
					@endforeach

						
					
			</div>
	</div>

@endforeach
@endif


	
<div class="container">
	
@stop
 @section('scripts')
        <script type="text/javascript">
        			$(document).ready(function() {
					  $(window).scroll(function () {
					      console.log($(window).scrollTop())
					    if ($(window).scrollTop() > 400) {
					      $('#nav_bar').addClass('navbar-fixed-top');
					    }
					    if ($(window).scrollTop() < 401) {
					      $('#nav_bar').removeClass('navbar-fixed-top');
					    }
					  });
					});

        			$(document).ready(function(){

                $('body').scrollspy({target: ".navbar", offset: 50});   

  				$("#myNavbar a").on('click', function(event) {
   				 if (this.hash !== "") {
      				event.preventDefault();
      				var hash = this.hash;
      				$('html, body').animate({
       				 scrollTop: $(hash).offset().top
      				}, 800, function(){
      		  window.location.hash = hash;
		      });
		    }  
		  });
		});
		// $(document).ready(function(){
		//     $(".cate-item a").hover(function(){
		//         $(this).css("background-color", "#b1563b");
		//         }, function(){
		//         $(this).css("background-color", "#000");
		//     });
		// });	
</script>
					
   @stop