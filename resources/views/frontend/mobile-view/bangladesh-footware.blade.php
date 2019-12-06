@extends('mobile-view.layout.master_m')
@section('content')
<section>
   <div class="container">
      <div class="row">
         <div class="col-md-12 padding_0" style="padding-bottom: 1%">
            <ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
               <li style="float: left;padding-top: 4px;" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> Home &nbsp;</a></li>
               <li style="float: left;margin-top: 4px;" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="" style="color: #000"> <i class="fa fa-angle-right"></i>@if(isset($page_name))
                  {{ $page_name }}
                  @else
                  {{ $country->name}}
                  @endif
                  Products </a> <i class="fa fa-angle-right"></i>
               </li>
            </ul>
         </div>
      </div>
      <div class="row" style="background-color:#fff;">
         <div class="header-images" style="margin-top: 0; min-height: 140px;">
            @if(isset($bg_images))
            <img title="" style="width: 100%; height: 140px;" src="{!! asset('assets/'.$bg_images,is_secured()) !!}" alt="{{$page_name ?? ''}}" />
            @else
            <img title="" style="width: 100%;" src="{!! asset('assets/country-images/'.$country->country_image_one->image,is_secured()) !!}" alt="{{$country->country_image_one->image}}" />
            @endif
         </div>
      </div>
   </div>
</section>
<section>
   <div class="row">
      <!--  epnd-off -->
      @if ($product_categorys) 
      <div class="category-tab">
         <div class="tab-content" itemscope itemtype="http://data-vocabulary.org/Product">
            @foreach ($product_categorys as $category)
            @if(count([$category])>0)
            <div class="active in" id="tab-{{ $category->id }}" style="overflow: hidden">
               <div class="cat-name" style="background-color: #fff;margin-top: 15px;width: 100%;">
                  <h2 style=" padding:0;padding-left:20px;font-size:20px; margin: 10px auto"><span itemprop="name">{{ $category->name ?? ''}}</span></h2>
               </div>
               <!--<h4><?php //echo $category['name']; ?></h4>-->
               @if($category->parent_cat_pro)
               <div style="padding-top:10px; padding-left: 10px;" class="total-row">
                  <?php $stop_loop = 0; ?>
                  @foreach ($category->parent_cat_pro as $data)
                  <?php if($stop_loop <= 9){
                     ?>
                  <div class="cate-product-view padding_0" style="padding-top:7px; padding-left: 5px;padding-right: 5px;" itemscope itemtype="http://schema.org/Product">
                     <a  itemprop="url" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$data->category_product_name->name).'=232942253'.$data['product_id'],null,is_secured()) }}" class="slidebox-item-list" style="box-shadow: none;width: 100%;">
                        @if($data->pro_images_new)
                        <img itemprop="image" title="{{ $data->category_product_name->name ?? '' }}" style="height:220px;width:220px; margin: 0 auto; display: block; border:0 none;" class="img-thumbnail" src="{{ asset((isset($data->pro_images_new)) ? $data->pro_images_new->image : 'no_image.jpg',is_secured()) }}" alt="{{ $data->category_product_name->name ?? '' }}" />
                        @endif
                        <div class="p-border" style="border:0 none; text-align: center;">
                           <div class="brand-year title-cat-pppp" style="height: auto; padding-bottom: 5px; padding-top: 12px;">
                              <span itemprop="name" style="display: block; line-height: 18px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><?php echo  $data->category_product_name->name, 0, 22;?></span>
                           </div>
                           <p class="brand-favorable"   style="text-align:center;padding-left:10px;padding-bottom:0; height: 30px !important;">
                              <span style="font-size: 14px;" class="doller-product-price">US $ 
                              <?php if($data->cat_pro_price){ echo $data->cat_pro_price->product_FOB; }?> </span><?php echo $data->bdtdcProduct->ProductUnit->name; ?>
                           </p>
                           <p class="brand-favorable" style="height: 40px;text-align:center; padding-left: 10px;">
                              MOQ: <span style="color:#333; overflow: hidden;">{{ $data->cat_pro_price->product_MOQ ?? ''}} {{ $data->bdtdcProduct->ProductUnit->name ?? '' }}</span> 
                           </p>
                        </div>
                     </a>
                  </div>
                  <?php
                     }else{
                         break;
                     }
                     $stop_loop++;
                     ?>
                  @endforeach  
               </div>
               @endif
            </div>
            @else
            @endif    
            @endforeach
         </div>
      </div>
      @endif
   </div>
</section>
@stop	

@section('scripts')

<script type="text/javascript">
   (function() {

      $('.product-image-wrapper-next').css('margin-bottom', '0');

      $(window).load(function() {
         $('a[href="#forbuyer"]').click()
      })
      var section = $('[name="section"]').val();
      (section != "") ? $('.nav-tabs li a[href="#' + section + '"]').click(): false;

   });

   $('.carousel').carousel({
      interval: 5000 //changes the speed
   })

   function sticky_relocate() {
      var window_top = $(window).scrollTop();
      var div_top = $('#sticky-anchor').offset().top;
      if (window_top > div_top) {
         $('#sticky').addClass('stick');
      } else {
         $('#sticky').removeClass('stick');
      }
   }

   $(function() {
      $(window).scroll(sticky_relocate);
      sticky_relocate();
   });


   $(document).ready(function() {
      var navHeight = $('#sticky').outerHeight();
      $('#sticky').wrap('<div class="nv-wrp"></div>');
      $('.nv-wrp').outerHeight(navHeight);



      var lastId,
         topMenu = $("#sticky"),
         topMenuHeight = topMenu.outerHeight() + 30,
         // All list items
         menuItems = topMenu.find("a"),
         // Anchors corresponding to menu items
         scrollItems = menuItems.map(function() {
            var item = $($(this).attr("href"));
            if (item.length) {
               return item;
            }
         });

      // Bind click handler to menu items
      // so we can get a fancy scroll animation
      menuItems.click(function(e) {
         var href = $(this).attr("href"),
            offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
         $('html, body').stop().animate({
            scrollTop: offsetTop
         }, 300);
         e.preventDefault();
      });

      // Bind to scroll
      $(window).scroll(function() {
         // Get container scroll position
         var fromTop = $(this).scrollTop() + topMenuHeight;

         // Get id of current scroll item
         var cur = scrollItems.map(function() {
            if ($(this).offset().top < fromTop)
               return this;
         });
         // Get the id of the current element
         cur = cur[cur.length - 1];
         var id = cur && cur.length ? cur[0].id : "";

         if (lastId !== id) {
            lastId = id;
            // Set/remove active class
            menuItems
               .parent().removeClass("spy-on")
               .end().filter("[href='#" + id + "']").parent().addClass("spy-on");
         }
      });

      /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

      var tdCon = $('.td-cont');


      var tdCon_a = $(tdCon[9]).find('a');

      $(tdCon_a).css('display', 'none');
      $(tdCon[9]).append("<p class='tdcon-more'>View more >></p>");
      $('.ppp-nav').append("<span style='width: 233.25px;height: 44px; background-color:#DCE3E9;border: 1px solid white' class='td-cont'><br><p class='tdcon-more'>View less <<</p></span>");

      var pppflag = false;
      console.log('script ok');
      $('.tdcon-more').click(function() {

         if (!pppflag) {
            $(tdCon_a).css('display', 'block');
            $('.tdcon-more').first().css('display', 'none');
            $('.ppp-nav').addClass('epnd-off');
            var navHeight = $('#sticky').outerHeight();
            $('.nv-wrp').outerHeight(navHeight);
            pppflag = true;
         } else {
            $(tdCon_a).css('display', 'none');
            $('.tdcon-more').first().css('display', 'block');
            $('.ppp-nav').removeClass('epnd-off');
            var navHeight = $('#sticky').outerHeight();
            $('.nv-wrp').outerHeight(navHeight);
            pppflag = false;
         };



      });




   });
</script>
@stop