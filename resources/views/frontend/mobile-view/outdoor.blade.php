@extends('mobile-view.layout.master_m')
	@section('content')

</div>

@if($outdoors)
           @foreach($outdoors->pro_sub_cat as $cat_name)
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

<div class="container padding_0" id="sp{{ $cat_name->bdtdcCategory->id }}" style="margin-bottom:3%;">
				<div class="col-sm-12 col-md-12 col-lg-12 padding_0" style="background-color:#fff !important;margin-top:4%;">
							<div class=""><div class="tb-module module-baby">
		                 <div   style="position:relative;top:-70px;">

						</div>
						    <h2 class="title" style="font-size: 25px;padding-top:0%;">{{ $cat_name->bdtdcCategory->name }}</h2>
						</div>
						</div>
				</div>
			<div class="col-sm-12 col-md-12 padding_0" style="margin-top:-10%;">

					@foreach($cat_name->pro_cat_pro as $pro)
						<div class="col-sm-12 col-md-12 col-lg-12 padding_0" style="">
									<div class="product-item util-left  " data-role="product-item" data-id="60376866355" style="width: 320px;padding-top: 6%;">
							           
							               <div style="z-index: 999999; margin-left: 15px;" class="item-market profit f-sp-flag-profit">
                    							<div class="item-market-value">{{ $pro->profit_percentage or ''}}%</div>
                							</div>
							            
							    		<div class="product-img" data-domdot="">
							    			@if($pro->bdtdcproductimages)
							    			<img class="product-bd-img" style="visibility: visible;" src="{{ URL::to($pro->bdtdcproductimages->image,is_secured()) }}" alt="" />
							    			@endif
							    				<!-- <img class="product-bd-img " src="{!! asset('resources/assets/fontend/bdtdc-images/product-chair-1.jpg',is_secured()) !!}" style="visibility: visible;"> -->
							    			
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
							    		<a data-product_id="{{ $pro->product_id or '' }}" data-supplier_id="{{ $pro->company_id or '' }}" href="" class="product-button contact_supplier" style="border-radius: 3px !important;">
							    		  Shop Now
							    		</a>
							    		
               
            </div>
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
		
		/*Contact Supplier*/

                $(document).on({

                    click: function(e) {

                        e.preventDefault();

                        $('.modal-content').html('<span class="btn btn-block btn-lg"><i class="fa fa-spinner fa-pulse loading_icon text-primary"></i></span>');

                        var base_url = window.location.origin;//$('[name="base_url"]').val();

                        var supplier_id = $(this).data('supplier_id');

                        var product_id = $(this).data('product_id');

                        var url = base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
                        window.location.href = url;

                        //$('.modal-content').html(" ");

                        /*$.get(url, function(r) {

                            $('.modal-content').html(r)

                        })*/

                    }

                }, '.contact_supplier');

		/*Contact Supplier*/
</script>
					
   @stop