@extends('mobile-view.layout.master_m')
@section('content')
<section>
   <div class="container">
      <div class="row" style="background: #fff;">
         <div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:5px; ">
            <a itemprop="url" href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block;">
               <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
            </a>
         </div>
      </div>
      <div class="row" style="background: #fff;">
         <ul class="rslides" itemscope itemtype="http://schema.org/ImageObject" >
            <li> <a  href="{{ URL::to('bangladesh-footwear') }}"><img  src="{{asset('assets/mobile-images/Slide-1.jpg')}}" itemprop="contentUrl" alt="Bangladesh leather"></a></li>
            <li><a  href="{{ URL::to('bangladesh-jute-products') }}"><img  src="{{asset('assets/mobile-images/Slide-2.jpg')}}" itemprop="contentUrl" alt="jute product"></a></li>
            <li><a  href="{{ URL::to('bangladesh-frozen-foods') }}"><img  src="{{asset('assets/mobile-images/Slide-3.jpg')}}" itemprop="contentUrl" alt="fish food"></a></li>
            <li><a  href="{{ URL::to('bangladesh-garments') }}"><img  src="{{asset('assets/mobile-images/Slide-4.jpg')}}" itemprop="contentUrl" alt="fashion"></a></li>
         </ul>
      </div>
      <div class="row" style="margin-top:20px;background: #fff; border-bottom: 1px solid #ddd;border-top: 1px solid #ddd;">
         <div style="width: 100%;">
            <div class="hm-sing-pro" style="border-right: 1px solid #ddd;">
               <a itemprop="url" href="{{URL::to('product-category',null,is_secured())}}">
                  <div>   
                     <img class="img-responsive " style="width: 100%;padding: 0 6px;padding: 0 5px; padding-top: 5px;" src="{!! asset('assets/fontend/img/allcat.jpg',is_secured()) !!}" alt="bdtdc-product">
                  </div>
               </a>
            </div>
            <div class="hm-sing-pro" style="border-right: 1px solid #ddd;">
               <a itemprop="url" href="{{URL::to('BuyerChannel/pages/trade_assurance',5),is_secured()}}">
                  <div>   
                     <img class="img-responsive " style="width: 100%;padding: 0 6px;padding: 0 5px; padding-top: 5px;" src="{!! asset('assets/mobile-images/buyer-protection.jpg',is_secured()) !!}" alt="bdtdc-product">
                  </div>
               </a>
            </div>
            <div class="hm-sing-pro" style="border-right: 1px solid #ddd;">
               <a itemprop="url" href="{{URL::to('get-quotations'),is_secured()}}">
                  <div>   
                     <img class="img-responsive " style="width: 100%;padding: 0 6px;padding: 0 5px; padding-top: 5px;" src="{!! asset('assets/mobile-images/get-quotation.jpg',is_secured()) !!}" alt="bdtdc-product">
                  </div>
               </a>
            </div>
            <div class="hm-sing-pro" style="border-right: 1px solid #ddd;">
               <a itemprop="url" href="{{URL::to('services',null,is_secured())}}">
                  <div>   
                     <img class="img-responsive " style="width: 100%;padding: 0 6px;padding: 0 5px; padding-top: 5px;" src="{!! asset('assets/mobile-images/bdtdc-service.jpg',is_secured()) !!}" alt="bdtdc-product">
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="row" style="background: #fff; margin-top: 20px; ">
         <div class="mst-pp padding_0" style="border-right: 1px solid #ddd; padding-bottom: 5%;">
            <a itemprop="url" href="{{URL::to('selected/supplier-products'),is_secured()}}">
               <h3 class="m-hm-hed h-ft-size">Most Popular Products</h3>
               <h3 class="m-hm-hed hs-ft-size">Most Inquire here</h3>
               <img class=" img-responsive" style="margin:0 auto;"  src="{{asset('assets/mobile-images/most-popular.jpg')}}" alt="bdtdc-product">
            </a>
         </div>
         <div class="mst-pp padding_0" style=" padding-bottom: 5%;">
            <!--  <a itemprop="url" href="{{URL::to('limited/offers'),is_secured()}}"> -->
            <a itemprop="url" href="{{URL::to('Bdsource-home-page'),is_secured()}}">
               <h3 class="m-hm-hed h-ft-size">Bdsource For Buyer</h3>
               <h3 class="m-hm-hed hs-ft-size">New From Expos</h3>
               <div style="position: relative;">
                  <img class="img-responsive" style="margin:0 auto;"  src="{{asset('assets/mobile-images/Bd-source-for-buyer.jpg')}}" alt="bdtdc-product">
               </div>
            </a>
         </div>
      </div>
      <div class="row" style="background: #fff;border-top: 1px solid #ddd; border-bottom: 1px solid #ddd;">
         <div class="col-xs-4" style="border-right: 1px solid #ddd;">
            <a itemprop="url" href="{{URL::to('selected-suppliers/bangladesh-products/18'),is_secured()}}">
               <h2 class="m-hm-hed h-ft-size" style="/* height: 50px; */" >Bangladesh Products</h2>
               <img class=" img-responsive" style="margin: 0 auto;"   src="{{asset('assets/mobile-images/bangladesh-product.jpg')}}" alt="bdtdc-product">
            </a>
         </div>
         <div class="col-xs-4" style="border-right: 1px solid #ddd;">
            <a itemprop="url" href="{{URL::to('wholesale'),is_secured()}}">
               <h2 class="m-hm-hed h-ft-size" style="/*height: 50px;*/">Wholesaler</h2>
               <img class=" img-responsive" style="margin: 0 auto;"   src="{{asset('assets/mobile-images/jute-product.jpg')}}" alt="bdtdc-product">
            </a>
         </div>
         <div class="col-xs-4">
            <a itemprop="url" href="{{URL::to('bangladesh-suppliers'),is_secured()}}">
               <h2 class="m-hm-hed h-ft-size" style="/*height: 50px;*/">Bangladesh Suppliers</h2>
               <img class=" img-responsive" style="margin: 0 auto;"  src="{{asset('assets/mobile-images/bangladesh-supplier.jpg')}}" alt="bdtdc-product">
            </a>
         </div>
      </div>
      <div class="row" style="background: #fff; margin-top: 10px;">
         <div class="qulit-sup" style="width: 46%; display: block;float: left; position: relative;margin-left:3%;">
            <a itemprop="url" href="{{URL::to('quality-suppliers'),is_secured()}}">
               <img  class="img-responsive " style="width: 100%;padding-right: 5px;" src="{!! asset('assets/mobile-images/Quality-Buyer.jpg',is_secured()) !!}" alt="Quality supplier">
               <div class="qulty-sup">
                  <div class="qulty-sup-div">Quality Suppliers</div>
               </div>
            </a>
         </div>
         <div class="qulit-sup" style="width: 46%; display: block;float: left;position: relative;">
            <a itemprop="url" href="{{URL::to('bangladesh-garments'),is_secured()}}">
               <img class="img-responsive " style="width: 100%;padding-left: 5px;" src="{!! asset('assets/mobile-images/bd-garments.jpg',is_secured()) !!}" alt="Bangladesh Garments">
               <div class="qulty-sup">
                  <div class="qulty-sup-div">Bangladesh Garments</div>
               </div>
            </a>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="row">
         <div style="padding-top: 30px;background-color:#fff !important;" class="recommended_items product_slide_area">
            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner row padding_0">
                  @php
                     $wp_count = 0;
                     $breaker_count = 1;
                     $wp_counter = 0;
                  @endphp
                  @foreach ($products as $wp_products) 
                     @if($wp_products->bdtdcProduct)
                        @php $wp_counter++; @endphp
                     @endif
                  @endforeach
                  @if($parent_categorys)
                     @foreach($parent_categorys as $wp_products)
                        @if($wp_products)
                        
                        @if(($wp_count % 1) == 0)
                           <div class="item">
                              @php $breaker_count = 1; @endphp
                        @endif
                        <div class="col-sm-12" style="background-color:#fff !important;">
                           <div class="product-image-wrapper"  itemscope itemtype="http://schema.org/Product" style="height: 224px;margin-left:3%;">
                              <p style="margin-left:2%;padding-top:1%;">{{ $wp_products->name }}</p>
                              <div class="product-image-wrapper media_wrapper" style="background-color:#fff !important;">
                                 @php $stop_loop = 0; @endphp
                                 @foreach ($wp_products->parent_cat as $sub)
                                    @if($sub->sub_cat_pro)
                                       @if($sub->sub_cat_pro->pro_images_new || $sub->sub_cat_pro->pro_images)
                                          @if($sub->column==2)
                                             @if($stop_loop <= 2)
                                             <div class="col-xs-4 col-sm-4" style="background-color:#fff;min-height:107px;">
                                                <a itemprop="url" href="{{URL::to('subcategory-product-view',$sub->id)}}">
                                                   <div class="hhh" style="">
                                                      <div class="mmm-title">
                                                         <div class="mp-a-tt">
                                                            <p style="font-size:12px;display:block;text-align:left;">{{ $sub->name }}</p>
                                                         </div>
                                                      </div>
                                                      @if($sub->sub_cat_pro)                     
                                                      <div class="m-p-img" style="padding: 0; margin: 0;">
                                                         @if($sub->sub_cat_pro->pro_images_new)
                                                         <img itemprop="image" class="img-responsive" src="{{ asset($sub->sub_cat_pro->pro_images_new->image) }}" alt="{{$sub->name}}" />
                                                         @else
                                                         <img itemprop="image" class="img-responsive "  src="{{ asset('uploads/no-image.jpg') }}" alt="{{$sub->name}}" />
                                                         @endif
                                                      </div>
                                                      @endif  
                                                      <div class="m-p-view">
                                                         <div class="m-p-view-h3" style="padding-left: 5%;">
                                                            <div style="font-size:16px; font-weight:400; padding-bottom:0%;"></div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </a>
                                             </div>
                                             @else
                                                @php break; $stop_loop++; @endphp
                                             @endif
                                          @endif
                                       @endif
                                    @endif
                                 @endforeach
                              </div>
                           </div>
                        </div>
                        @if(($wp_count % 1) == 0) </div> @php $breaker_count = 1; @endphp @endif
                        @if(($wp_count == $wp_counter-1) && $breaker_count == 1) </div> @endif
                        @php $wp_count++; @endphp
                        @endif
                     @endforeach
                  @endif
               </div>
               <a style="left: 22px; top:35%;" class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a style="right: 14px;top:35%;" class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container">
      <div class="row padding_0" style="background: #fff; margin-top:15px; margin-bottom:28px;">
         <h3 class="recommend-mixed-h3"  style="padding-left: 15px;">You May Like</h3>
         <div class="product_view">
            <div class="img-box-h" style="left: 10px;">
               <div class="cat-pro-link">
                  <button type="button" style="border-radius: 3px !important;" class="btn btn-default"><a itemprop="url" href="{{URL::to('subcategory-product-view/15'),is_secured()}}" style="color: #666;text-decoration: none; text-align: center;"> Mens Clothing</a></button>
               </div>
               <div class="cat-pro-link">
                  <button type="button" class="btn btn-default" style="border-radius: 3px !important;"><a itemprop="url" href="{{URL::to('subcategory-product-view/245'),is_secured()}}" style="color: #666;text-decoration: none; text-align: center;">Girl's Clothing</a></button>
               </div>
               <div class="cat-pro-link">
                  <button type="button" class="btn btn-default" style="border-radius: 3px !important;"><a itemprop="url" href="{{URL::to('subcategory-product-view/213'),is_secured()}}" style="color: #666;text-decoration: none; text-align: center;"> LED Lighting</a></button>
               </div>
               <div class="cat-pro-link">
                  <button type="button" class="btn btn-default" style="border-radius: 3px !important;"><a itemprop="url" href="{{URL::to('sub-category/Footwear---Accessories/4'),is_secured()}}" style="color: #666;text-decoration: none; text-align: center;">Footwear</a></button>
               </div>
            </div>
         </div>
         @foreach($most_view as $mv)
            @if($mv)
               @if($mv->bdtdcMostViewCategory)
               <div class="product_view" style="padding-bottom: 35px;">
                  <a itemprop="url" style="text-align: justify;text-justify: inter-word;"  href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$mv->bdtdcMostViewCategory->name).'='.mt_rand(100000000, 999999999).$mv->product_id,null,is_secured()) }}">
                     <div class="img-box-h">
                        @if($mv)
                           @if($mv->proimage_new)
                              <img itemprop="image" style="margin:0 auto;" class="cat_pro_list_img img-responsive" src="{{ asset($mv->proimage_new->image) }}" alt="@if($mv->bdtdcMostViewCategory){{$mv->bdtdcMostViewCategory->name}} @else bdtdc product image @endif" />
                           @else
                              <img itemprop="image" style="margin:0 auto;" class="original-image img-responsive "  src="{{ asset('uploads/no-image.jpg') }}" alt="@if($mv->bdtdcMostViewCategory){{$mv->bdtdcMostViewCategory->name}} @else bdtdc product image @endif" />
                           @endif
                        @endif
                     </div>
                     <div class="pro-details" style="text-align: center;">
                        <div class="pro-title" style="">
                           @if($mv)
                              @if($mv->bdtdcMostViewCategory)
                                 {{substr($mv->bdtdcMostViewCategory->name, 0, 50)}}
                              @endif
                           @else
                              <p>No product or category here</p>
                           @endif
                        </div>
                        @if($mv)
                           @if($mv->most_product)
                              @if($mv->most_product->product_prices)
                              <div class=" price-pro">
                                 US $ {{$mv->most_product->product_prices->product_FOB}}
                              </div>
                              <div class="moq" style="overflow: hidden;">
                                 MOQ: {{substr($mv->most_product->product_prices->product_MOQ, 0, 20)}} {{$mv->most_product->product_unit->name}}
                              </div>
                              @endif
                           @endif
                        @endif
                        <span class="kind" style="background-color: #255E98; color:#fff; font-size: 13px; padding: 0 3px; width:80px; margin: 0 auto;padding: 2px 6px;    width: 110px;    height: 25px;margin: 0 auto; "> View More</span>
                     </div>
                  </a>
               </div>
               @endif
            @endif
         @endforeach
      </div>
   </div>
</section>
@stop
@section('scripts')
<script type="text/javascript">
   function show_cate_product(id, block) {
      document.getElementById(id).style.display = block;
   }

   function hide_cate_product(id, none) {
      document.getElementById(id).style.display = none;
   }
   $(function() {
      $(".rslides").responsiveSlides();
   });

   $(".rslides").responsiveSlides({
      auto: true, // Boolean: Animate automatically, true or false
      speed: 500, // Integer: Speed of the transition, in milliseconds
      timeout: 4000, // Integer: Time between slide transitions, in milliseconds
      pager: false, // Boolean: Show pager, true or false
      nav: false, // Boolean: Show navigation, true or false
      random: false, // Boolean: Randomize the order of the slides, true or false
      pause: false, // Boolean: Pause on hover, true or false
      pauseControls: true, // Boolean: Pause when hovering controls, true or false
      //prevText: "Previous",   // String: Text for the "previous" button
      //nextText: "Next",       // String: Text for the "next" button
      maxwidth: "", // Integer: Max-width of the slideshow, in pixels
      navContainer: "", // Selector: Where controls should be appended to, default is after the 'ul'
      manualControls: "", // Selector: Declare custom pager navigation
      namespace: "rslides", // String: Change the default namespace used
      before: function() {}, // Function: Before callback
      after: function() {} // Function: After callback
   });

   //**Mobile search option***//
   $(document).ready(function() {
      $(document).on({
         click: function(e) {
            e.preventDefault();
            var options = $('select[name="search"].all_search').val();
            var key = $('input[name="key"].key').val();
            window.location.href = window.location.origin + '/search-product/search==' + options + '+..+key==' + key + '+..+country==0+..+buyer_protection==false+..+gold_supplier==false+..+assessed_supplier==false+..+filter_by_main_market==0+..+filter_by_total_revanue==0+..+filter_by_employe==0';
         }
      }, 'input[value="Search"].search');
   });

   (function() {
      $('.product_slide_area .item:eq(0)').addClass('active');
      if ($('.parent .chield').length > 1) {

      }
      setInterval(function() {
         $(".parent .chield:first").slideUp(200, function() {
            $(this).appendTo($(".parent")).slideDown();
         });
      }, 2000);


   })()

   $('.play_video').click(function() {
      $('.video_content').html("<video style='width: 100%; min-height: 240px;'' autoplay='true'><source src='{!! asset('assets/images/Ekattor-TV-broadcasts-Bdtdccom-the-first-B2B-platform-in-Bangladesh - 10Youtube.com.webm') !!}' type='video/ogg'></video>");
   });
   $('.close_video').click(function() {
      $('.video_content').html("");
   });
</script>


<script type='text/javascript' src='{!! asset('assets/slider/jquery.flexslider-min.js',is_secured()) !!}'></script>

<script type='text/javascript' src='{!! asset('assets/slider/jquery.elastislide.js',is_secured()) !!}'></script>

<script type='text/javascript' src='{!! asset('assets/slider/vanilla-slider.js',is_secured()) !!}'></script>

<script type='text/javascript' src='{!! asset('assets/slider/jssor.slider.mini.js',is_secured()) !!}'></script>

<script>
   $('.slidervip').bxSlider({
      mode: 'vertical',
      auto: true,
      responsive: true,
      minSlides: 2,
      slideHeight: 100,
      moveSlides: 1,
      controls: false,
      touchEnabled: true,
      oneToOneTouch: true,
      pager: false,
      ticker: false,
      tickerHover: true,
      autoHover: true,
      adaptiveHeight: true,
      slideMargin: 10
   });

   /*var slider = new Slider('.slider1', {
         visibles: 5,
         controlNext: '.nexthot',
         controlPrev: '.prevhot',
       justify: true,
       steps: 5,
       });

       var slider2 = new Slider2('.slider2', {
         visibles: 4,
         controlNext: '.next2',
         controlPrev: '.prev2',
       justify: true,
       steps: 4,
       });
     
     var slider3 = new Slider3('.slider3', {
         visibles: 4,
         controlNext: '.next3',
         controlPrev: '.prev3',
       justify: true,
       steps: 4,
       });*/

   var jssor_1_options = {
      $AutoPlay: false,
      $AutoPlaySteps: 5,
      $SlideDuration: 300,
      $SlideWidth: 192,
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

   var jssor_2_options = {
      $AutoPlay: false,
      $AutoPlaySteps: 4,
      $SlideDuration: 160,
      $SlideWidth: 192,
      $SlideSpacing: 12,
      $Cols: 4,
      $ArrowNavigatorOptions: {
         $Class: $JssorArrowNavigator$,
         $Steps: 4
      },
      $BulletNavigatorOptions: {
         $Class: $JssorBulletNavigator$,
         $SpacingX: 1,
         $SpacingY: 1
      }
   };

   var jssor_3_options = {
      $AutoPlay: false,
      $AutoPlaySteps: 4,
      $SlideDuration: 160,
      $SlideWidth: 192,
      $SlideSpacing: 12,
      $Cols: 4,
      $ArrowNavigatorOptions: {
         $Class: $JssorArrowNavigator$,
         $Steps: 4
      },
      $BulletNavigatorOptions: {
         $Class: $JssorBulletNavigator$,
         $SpacingX: 1,
         $SpacingY: 1
      }
   };

   /*var jssor_4_options = {
     $AutoPlay: false,
     $AutoPlaySteps: 4,
     $SlideDuration: 160,
     $SlideWidth: 192,
     $SlideSpacing: 12,
     $Cols: 4,
     $ArrowNavigatorOptions: {
       $Class: $JssorArrowNavigator$,
       $Steps: 4
     },
     $BulletNavigatorOptions: {
       $Class: $JssorBulletNavigator$,
       $SpacingX: 1,
       $SpacingY: 1
     }
   };*/

   var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
   var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);
   var jssor_3_slider = new $JssorSlider$("jssor_3", jssor_3_options);
   // var jssor_4_slider = new $JssorSlider$("jssor_4", jssor_4_options);

   //responsive code begin
   //you can remove responsive code if you don't want the slider scales while window resizing
   function ScaleSlider1() {
      var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
      if (refSize) {
         refSize = Math.min(refSize, 1050);
         jssor_1_slider.$ScaleWidth(refSize);
      } else {
         window.setTimeout(ScaleSlider1, 50);
      }
   }
   ScaleSlider1();
   $(window).bind("load", ScaleSlider1);
   $(window).bind("resize", ScaleSlider1);
   $(window).bind("orientationchange", ScaleSlider1);

   function ScaleSlider2() {
      var refSize = jssor_2_slider.$Elmt.parentNode.clientWidth;
      if (refSize) {
         refSize = Math.min(refSize, 809);
         jssor_2_slider.$ScaleWidth(refSize);
      } else {
         window.setTimeout(ScaleSlider2, 50);
      }
   }
   ScaleSlider2();
   $(window).bind("load", ScaleSlider2);
   $(window).bind("resize", ScaleSlider2);
   $(window).bind("orientationchange", ScaleSlider2);

   function ScaleSlider3() {
      var refSize = jssor_3_slider.$Elmt.parentNode.clientWidth;
      if (refSize) {
         refSize = Math.min(refSize, 809);
         jssor_3_slider.$ScaleWidth(refSize);
      } else {
         window.setTimeout(ScaleSlider3, 50);
      }
   }
   ScaleSlider3();
   $(window).bind("load", ScaleSlider3);
   $(window).bind("resize", ScaleSlider3);
   $(window).bind("orientationchange", ScaleSlider3);

   /*function ScaleSlider4() {
       var refSize = jssor_4_slider.$Elmt.parentNode.clientWidth;
       if (refSize) {
           refSize = Math.min(refSize, 809);
           jssor_4_slider.$ScaleWidth(refSize);
       }
       else {
           window.setTimeout(ScaleSlider4, 50);
       }
   }
   ScaleSlider4();
   $(window).bind("load", ScaleSlider4);
   $(window).bind("resize", ScaleSlider4);
   $(window).bind("orientationchange", ScaleSlider4);*/
   //responsive code end

   $(document).on({
      focus: function() {
         $('.hide_dropdown').hide(500);
      }
   }, '.search_key');

   $(document).on({
      blur: function() {
         $('.hide_dropdown').show(500);
      }
   }, '.search_key');
</script>
@stop