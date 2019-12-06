@extends('frontend.layouts.header_dynamic')
@section('page_css')
<link property='stylesheet' href="{!! asset('assets/frontend/css/recommended-suppliers.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/frontend/css/online-market-place.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/frontend/css/stikynav.css',is_secured()) !!}" rel="stylesheet">
@endsection
	@section('content')

    <br>
    <div class="row">
        <div class="col-md-12 padding_0" style="padding-bottom: 1%">
            <ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li style="float: left;padding-top: 4px;" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> Home &nbsp;</a></li>
            <li style="float: left;margin-top: 4px;" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="#" style="color: #000"> <i class="fa fa-angle-right"></i>@if(isset($page_name))
                                                                                  {{ $page_name }}
                                                                                 @else
                                                                                 {{ $country->name}}

                                                                                 @endif
                                                                                  Products <!-- <img src="{{ asset('assets/global/img/flags/'.$country->country_image_one->slug) }}"  alt="{{$country->name}}" /> --></a> <i class="fa fa-angle-right"></i></li></ul>
        </div>
    </div>
    <div class="row" style="background-color:#fff;">
            <div class="header-images" style="margin-top: 0; margin-bottom: 20px;">
            @if(isset($bg_images))
                 <img title="" style="width: 100%;" src="{!! asset('assets/'.$bg_images,is_secured()) !!}" alt="{{$page_name }}" />
            @else
                <img title="" style="width: 100%;" src="{!! asset('assets/country-images/'.$country->country_image_one->image,is_secured()) !!}" alt="{{$country->country_image_one->image}}" />
            @endif
            </div>
    </div>
    <div class="row">

        <!--  epnd-off -->
    
             @if ($product_categorys) 
                                 
            <div class="category-tab">   
            <div id="sticky-anchor"></div>

            <div id="sticky" itemscope itemtype="http://data-vocabulary.org/Product" style="max-width: 1170px">
                <div  class="ppp-nav" style="overflow: hidden; transition: all .3s ease">
                    
                    
                        @foreach ($product_categorys as $product_category)
                         <span style="width: 233.25px;height: 44px; background-color:#DCE3E9;border: 1px solid white" class="td-cont" >
                        
                            <a style="padding-top: 11px" class="td-cont-a" rel="category" itemprop="url" href="#tab-{{ $product_category->id }}">
                              <span style="margin-left:5%; padding-left:2px;"><span itemprop="name">{{ $product_category->name }}</span></span>
                            </a><br>

                        </span>   
                      
                    
                        @endforeach
                            
                </div>
                </div>
                
                
                     
                        <div class="tab-content" itemscope itemtype="http://data-vocabulary.org/Product">
                           @foreach ($product_categorys as $category)
                           @if($category)                           
                            <div class="active in" id="tab-{{ $category->id }}" style="overflow: hidden">
                                <div class="cat-name" style="background-color: #fff;margin-top: 15px;width: 100%;">
                                    <h2 style=" padding:0;padding-left:1.6%;font-size:20px; margin: 10px auto"><span itemprop="name">{{ $category->name }}</span></h2>
                                </div>
                                @if($category->parent_cat_pro)             
                                         <div style="padding-top:10px;" class="total-row">  
                                         @php 
                                         $stop_loop = 0
                                         @endphp                                        
                                            @foreach ($category->parent_cat_pro as $data)
                                                @if($stop_loop <= 9)
                      
                                        <div class="cate-product-view padding_0" style="padding-top:7px; padding-left: 5px;padding-right: 5px;" itemscope itemtype="http://schema.org/Product">
                                            <a  itemprop="url" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$data->category_product_name->name).'=232942253'.$data['product_id'],null,is_secured()) }}" class="slidebox-item-list" style="box-shadow: none;width: 100%;">                                          
                                              @if($data->pro_images_new)              
                                                  <img itemprop="image" title="{{ $data->category_product_name->name  }}" style="height:260px;width:100%" class="img-thumbnail" src="{{ URL::to((isset($data->pro_images_new)) ? ''.$data->pro_images_new->image : 'no_image.jpg',null,is_secured()) }}" alt="{{ $data->category_product_name->name  }}" />
                                              @endif                                               
                                                <div class="p-border">
                                                <div class="brand-year title-cat-pppp" style="height: auto; padding-bottom: 5px; padding-top: 12px;">
                                                   
                                                     <span itemprop="name" style="display: block; line-height: 18px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><?php echo  $data->category_product_name->name, 0, 22;?></span>
                                                </div>
                                                <p class="brand-favorable"  style="text-align:left;padding-left:10px;padding-bottom:0; height: 30px !important;">
                                                    <span style="font-size: 14px;" class="doller-product-price">US $ 

                                                    @if($data->cat_pro_price)
                                                     {{ $data->cat_pro_price->product_FOB}}
                                                     @endif 
                                                   </span>
                                                   {{ $data->bdtdcProduct->ProductUnit->name}}
                                                </p>
                                                <p class="brand-favorable" style="height: 40px;text-align:left; padding-left: 10px;">
                                                    MOQ: <span style="color:#333; overflow: hidden;">@if($data->cat_pro_price)
                                                      {{ $data->cat_pro_price->product_MOQ }} {{ $data->bdtdcProduct->ProductUnit->name  }}
                                                    @else

                                                      @endif
                                                    </span> 

                                                </p>
                                                </div>
                                            </a> 
                                            </div> 
                                            @else
                                            @php
                                                    break
                                            @endphp
                                                @endif
                                                @php
                                                $stop_loop++
                                                @endphp
                                          
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
        <br>
	
@stop	

@section('scripts')

        <script type="text/javascript">
    (function(){

        $('.product-image-wrapper-next').css('margin-bottom','0');
            
        $(window).load(function(){
            $('a[href="#forbuyer"]').click()    
        })
            var section = $('[name="section"]').val();
            (section !="") ? $('.nav-tabs li a[href="#'+section+'"]').click() : false;
                
    }
    );
</script>
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    <script type="text/javascript">
        function sticky_relocate() {
                var window_top = $(window).scrollTop();
                var div_top = $('#sticky-anchor').offset().top;
                if (window_top > div_top) {
                    $('#sticky').addClass('stick');
                } else {
                    $('#sticky').removeClass('stick');
                }
            }

            $(function () {
                $(window).scroll(sticky_relocate);
                sticky_relocate();
            });


            $( document ).ready(function() {
                var navHeight = $('#sticky').outerHeight();
                $('#sticky').wrap('<div class="nv-wrp"></div>');
                $('.nv-wrp').outerHeight(navHeight);
                

            
                var lastId,
                    topMenu = $("#sticky"),
                    topMenuHeight = topMenu.outerHeight()+30,
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
                  var href = $(this).attr("href"),
                      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
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
                         .parent().removeClass("spy-on")
                         .end().filter("[href='#"+id+"']").parent().addClass("spy-on");
                   }                   
                });

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

            var tdCon = $('.td-cont');


            var tdCon_a = $(tdCon[9]).find('a');

            $(tdCon_a).css('display', 'none');
            $(tdCon[9]).append( "<p class='tdcon-more'>View more >></p>" );
            $('.ppp-nav').append("<span style='width: 233.25px;height: 44px; background-color:#DCE3E9;border: 1px solid white' class='td-cont'><br><p class='tdcon-more'>View less <<</p></span>");

            var pppflag = false;
            console.log('script ok');
            $('.tdcon-more').click(function(){

                if(!pppflag){
                    $(tdCon_a).css('display', 'block');
                    $('.tdcon-more').first().css('display', 'none');
                    $('.ppp-nav').addClass('epnd-off');
                    var navHeight = $('#sticky').outerHeight();
                    $('.nv-wrp').outerHeight(navHeight);
                    pppflag = true;
                }else{
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