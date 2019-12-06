@extends('frontend.layouts.master-register')
@section('content')
<div class="row">
   <div class="col-sm-12 col-md-12 col-lg-12">
      <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
         <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
         <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('BuyerChannel/pages/meet_suppliers',13,is_secured())}}" class="top-path-li-a"><span itemprop="name">Meet Suppliers</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
         <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">BuyerSeller Sourceing event</span><i class="fa fa-angle-right top-path-icon"></i></a></li>

      </ul>
   </div>

</div>
<div class="row padding_0" style="margin-bottom: 20px;padding-bottom: 5%; background-color: #fff;">
   <div class="col-sm-12 col-md-12 col-lg-12 padding_0" style="padding-top: 10px">
      <!--  <img  style="width: 100%;" src="{!! asset('assets/fontend/bdtdc-images/product-cat.png',is_secured()) !!}" alt="" /> -->
      <div class="col-sm-2 col-xs-4"><img style="width: 100%;height:150px;border-radius:50% !important;" src="{!! asset('assets/fontend/imgsss/cat-knitwear.jpg',is_secured()) !!}" alt="cat knitwear" />
         <p style="font-size: 14px;color: #333;font-weight: bold;text-align:center;">Knitwear</p>
      </div>
      <div class="col-sm-2 col-xs-4">
         <img itemprop="image" style="width: 100%;height:150px; border-radius:50% !important;" src="{!! asset('assets/fontend/imgsss/cat-fabrics.jpg',is_secured()) !!}" alt="cat fabrics" />
         <p style="font-size: 14px;color: #333;font-weight: bold;text-align:center;">Cat fabrics</p>
      </div>
      <div class="col-sm-2 col-xs-4">
         <img itemprop="image" style="width: 100%;height:150px;border-radius:50% !important;" src="{!! asset('assets/fontend/imgsss/cat-childrens.jpg',is_secured()) !!}" alt="cat childrens" />
         <p style="font-size: 14px;color: #333;font-weight: bold;text-align:center;">Childrens Wears</p>
      </div>
      <div class="col-sm-2 col-xs-4">
         <img itemprop="image" style="width: 100%; height:150px;border-radius:50% !important; " src="{!! asset('assets/fontend/imgsss/cat-textiles.jpg',is_secured()) !!}" alt="cat textiles" />
         <p style="font-size: 14px;color: #333;font-weight: bold;text-align:center;">Textiles</p>
      </div>
      <div class="col-sm-2 col-xs-4">
         <img itemprop="image" style="width: 100%;height:150px;border-radius:50% !important;" src="{!! asset('assets/fontend/imgsss/cat-trimmings.jpg',is_secured()) !!}" alt="cat trimmings" />
         <p style="font-size: 14px;color: #333;font-weight: bold;text-align:center;">Trimmings and<br> Accories</p>
      </div>
      <div class="col-sm-2 col-xs-4">
         <img itemprop="image" style="width: 100%;height:150px;border-radius:50% !important;" src="{!! asset('assets/fontend/imgsss/cat-man-womens.jpg',is_secured()) !!}" alt="cat man womens" />
         <p style="font-size: 14px;color: #333;font-weight: bold;text-align:center;">Man Womens</p>
      </div>
   </div>
   <div class="col-sm-12 col-md-12 col-lg-12 padding_0" style="background: #f6f6f6; border-bottom: 1px solid #ebebeb; clear:both;">
      <div class="col-sm-3 col-md-3 col-lg-3">
         <span class="source-icon-pic"></span>
         <p style="text-align: center;font-size: 14px; width: 100%;color: #333;">REGISTERING</p>
         <span class="source-text-span">Buyers fulfill registration to present their sourcing requests</span>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3" style="border-left: 1px solid #ebebeb;">
         <span class="source-icon-pic" style="background-position: 0 -40px;"></span>
         <p style="text-align: center;font-size: 14px; width: 100%;color: #333;">SOURCING</p>
         <span class="source-text-span">Suppliers are sourced in accordant with buyers’ requests</span>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3" style="border-left: 1px solid #ebebeb;">
         <span class="source-icon-pic" style="background-position: 0 -80px;"></span>
         <p style="text-align: center;font-size: 14px; width: 100%;color: #333;">MATCHING</p>
         <span class="source-text-span">Buyers are matched with the best quality suppliers</span>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3" style="border-left: 1px solid #ebebeb;">
         <span class="source-icon-pic" style="background-position: 0 -120px;"></span>
         <p style="text-align: center;font-size: 14px; width: 100%;color: #333;">MEETING</p>
         <span class="source-text-span">Buyers get together with pre-matched quality suppliers face-to-face</span>
      </div>
   </div>
   <div class="col-sm-12 col-md-12 col-lg-12 padding_0" style="background: #fff;">
      <div style="padding: 5% 0; margin:0 auto; text-align:center;">
         <div class="btn btn-primary" style="padding-top:10px;border-radius: 5px !important; text-align:center;"><a href="{{URL::to('apply-sourceing-meeting',null,is_secured())}}" style="text-decoration:none; color:#fff;">Apply to meet suppliers</a></div>
      </div>
   </div>
   <div class="col-sm-12 col-md-12 col-lg-12 padding_0" style="background: #fff;">
      <div class="col-sm-6 col-md-6 col-lg-6">

         <div class="hd">What is our Global Sourcing Event Service?</div>
         <ul style="padding: 0; display: block;width: 98%;">
            <li class="list-soiurce">BuyerSeller.Asia directs a face-to-face communication chance to make the international business deals smooth among overseas and Bangladeshi businesses.</li>
            <li class="list-soiurce">Nowadays, business executives travel everywhere throughout the globewith the objective of searchingtheproper business partners.</li>
            <li class="list-soiurce">Within such event, business executives are able to meet with suppliers that are pre-qualified and matched, investigate a greater degree of business possibilities and broaden their business circles.</li>
            <!-- <li class="list-soiurce">For more support, please contact our <a href="">buyer service specialist.</a></li> -->
         </ul>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-6">
         <div class="hd">What is our Global Sourcing Event Service?</div>
         <ul style="padding: 0;display: block;width: 100%;">
            <li class="list-soiurce">Meetingsuppliers that are pre-qualified and matched.</li>
            <li class="list-soiurce">Expanding your business circles.</li>
            <li class="list-soiurce">Saving both, Time and energy while having an effective sourcing experience.</li>
            <li class="list-soiurce">Witnessing and experiencing an effective fair andpleasurable journey respectively.</li>
         </ul>

      </div>
   </div>
   <div class="col-sm-12 col-md-12 col-lg-12" style="background: #fff;">
      <div class="review-slide-h3">
         Review Global Sourcing Event Service
      </div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" style="border:1px solid #e6e6e6; background-color: #fff;">
         <!-- Indicators -->
         <ol class="carousel-indicators" style="display: none;">
            <li data-target="#myCarousel" data-slide-to="0" style="border-radius:10px !important; border:0 none;" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;"></li>
            <li data-target="#myCarousel" data-slide-to="2" style="border-radius:10px !important; border:0 none;"></li>

         </ol>
         <div class="carousel-inner" role="listbox">
            <div class="item active">
               <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 7px;">
                  <div class="col-sm-3 col-md-3 col-lg-3">
                     <img itemprop="image" class="souc-img-list" src="{!! asset('assets/fontend/imgsss/source-Bag.jpg',is_secured()) !!}" alt="bd source" />
                     <span class="visit-link">
                        <a href="#" style="text-decoration: none;color: #255E98;">
                           Source from Bangladesh, Visit BuyerSeller.Asia at The
                        </a>
                     </span>
                  </div>
                  <div class="col-sm-3 col-md-3 col-lg-3">
                     <img itemprop="image" class="souc-img-list" src="{!! asset('assets/fontend/imgsss/source-Bicycle.jpg',is_secured()) !!}" alt="bd source" />
                     <span class="visit-link">
                        <a href="#" style="text-decoration: none;color: #255E98;">
                           Source from Bangladesh, Visit BuyerSeller.Asia at The
                        </a>
                     </span>
                  </div>
                  <div class="col-sm-3 col-md-3 col-lg-3">
                     <img itemprop="image" class="souc-img-list" src="{!! asset('assets/fontend/imgsss/source-Clothes.jpg',is_secured()) !!}" alt="bd source" />
                     <span class="visit-link">
                        <a href="#" style="text-decoration: none;color: #255E98;">
                           Source from Bangladesh, Visit BuyerSeller.Asia at The
                        </a>
                     </span>
                  </div>
                  <div class="col-sm-3 col-md-3 col-lg-3">
                     <img itemprop="image" class="souc-img-list" src="{!! asset('assets/fontend/imgsss/source-Cotton.jpg',is_secured()) !!}" alt="bd source" />
                     <span class="visit-link">
                        <a href="#" style="text-decoration: none;color: #255E98;">
                           Source from Bangladesh, Visit BuyerSeller.Asia at The
                        </a>
                     </span>
                  </div>

               </div>
            </div>



            <div class="item">
               <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 7px;">
                  <div class="col-sm-3 col-md-3 col-lg-3">
                     <img itemprop="image" class="souc-img-list" src="{!! asset('assets/fontend/imgsss/source-It.jpg',is_secured()) !!}" alt="bd source" />
                     <span class="visit-link">
                        <a href="#" style="text-decoration: none;color: #255E98;">
                           Source from Bangladesh, Visit BuyerSeller.Asia at The
                        </a>
                     </span>
                  </div>
                  <div class="col-sm-3 col-md-3 col-lg-3">
                     <img itemprop="image" class="souc-img-list" src="{!! asset('assets/fontend/imgsss/source-Jints.jpg',is_secured()) !!}" alt="bd source" />
                     <span class="visit-link">
                        <a href="#" style="text-decoration: none;color: #255E98;">
                           Source from Bangladesh, Visit BuyerSeller.Asia at The
                        </a>
                     </span>
                  </div>
                  <div class="col-sm-3 col-md-3 col-lg-3">
                     <img itemprop="image" class="souc-img-list" src="{!! asset('assets/fontend/imgsss/source-Jute.jpg',is_secured()) !!}" alt="bd source" />
                     <span class="visit-link">
                        <a href="#" style="text-decoration: none;color: #255E98;">
                           Source from Bangladesh, Visit BuyerSeller.Asia at The
                        </a>
                     </span>
                  </div>
                  <div class="col-sm-3 col-md-3 col-lg-3">
                     <img itemprop="image" class="souc-img-list" src="{!! asset('assets/fontend/imgsss/source-Knit-or-crochet-fabric.jpg',is_secured()) !!}" alt="bd source" />
                     <span class="visit-link">
                        <a href="#" style="text-decoration: none;color: #255E98;">
                           Source from Bangladesh, Visit BuyerSeller.Asia at The
                        </a>
                     </span>
                  </div>

               </div>

            </div>

            <div class="item">
               <div class="col-sm-12 col-md-12 col-lg-12" style="padding-top: 7px;">
                  <div class="col-sm-3 col-md-3 col-lg-3">
                     <img itemprop="image" class="souc-img-list" src="{!! asset('assets/fontend/imgsss/source-Leather.jpg',is_secured()) !!}" alt="apperal Bangla" />
                     <span class="visit-link">
                        <a href="#" style="text-decoration: none;color: #255E98;">
                           Source from Bangladesh, Visit BuyerSeller.Asia at The
                        </a>
                     </span>
                  </div>
                  <div class="col-sm-3 col-md-3 col-lg-3">
                     <img itemprop="image" class="souc-img-list" src="{!! asset('assets/fontend/imgsss/source-Shoe.jpg',is_secured()) !!}" alt="leather" />
                     <span class="visit-link">
                        <a href="#" style="text-decoration: none;color: #255E98;">
                           Source from Bangladesh, Visit BuyerSeller.Asia at The
                        </a>
                     </span>
                  </div>
                  <div class="col-sm-3 col-md-3 col-lg-3">
                     <img itemprop="image" class="souc-img-list" src="{!! asset('assets/fontend/imgsss/source-Womens-T-shirt.jpg',is_secured()) !!}" alt="fibre" />
                     <span class="visit-link">
                        <a href="#" style="text-decoration: none;color: #255E98;">
                           Source from Bangladesh, Visit BuyerSeller.Asia at The
                        </a>
                     </span>
                  </div>
                  <div class="col-sm-3 col-md-3 col-lg-3">
                     <img itemprop="image" class="souc-img-list" src="{!! asset('assets/fontend/imgsss/textile.jpg',is_secured()) !!}" alt="textile" />
                     <span class="visit-link">
                        <a href="#" style="text-decoration: none;color: #255E98;">
                           Source from Bangladesh, Visit BuyerSeller.Asia at The
                        </a>
                     </span>
                  </div>

               </div>

            </div>


         </div>

      </div>

   </div>
</div>


@stop