@extends('frontend.layouts.master-register')
@section('page_css')
<link property='stylesheet' href="{!! asset('css/trade-services/bd-source.css',is_secured()) !!}" rel="stylesheet">
@endsection
@section('content')

<div class="row">
   <div class="col-sm-12 col-md-12 col-lg-12">
      <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
         <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
         <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('source',null,is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Bd Source</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
      </ul>
   </div>
</div>

<div class="row padding_0" style="background-color: #fff;">
   <div class="col-sm-12 padding_0">
      <img itemprop="image" class="bd-source-banner img-responsive" src="{!! asset('assets/fontend/bdtdc-images/bdsourc.jpg') !!}" alt="bdtdc source">
      <a href="{{URL::to('get-quotations',null,is_secured())}}" target="_blank" class="btn btn-lg btn-info" style="border-radius: 5px !important;font-size: 130%;font-weight: bold;position: absolute;top: 72%;left: 8.7%;width: 138px; height: 42px;background: transparent !important;">
      </a>
   </div>
</div>
<div class="row padding_0" style="background-color: #fff; display:block !important;">
   <div class="col-sm-12" style="padding-bottom: 20px; padding-top: 30px">

      <h1 class="faster">Faster, Better, Easier</h1>
      <p class="bdsorce-p">
         Modify your buying requirement or get what you catch sight of on the web by utilizing our bd source tool, copying and pasting the product page link or filling the buying request form.
      </p>
      <p class="bdsorce-p">Now sit back and relax with some espresso as our Suppliers will return back to you</p>
   </div>
   <div class="col-xs-12">
      <div class="slide-bg-img">
         <div class="slide-img-show">
            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" style="overflow: hidden; height: 319px;">
               <ol class="carousel-indicators">
                  <li data-target="#carousel" data-slide-to="0" class="active" style="border-radius: 12px !important;"></li>
                  <li data-target="#carousel" data-slide-to="1" style="border-radius: 12px !important;"></li>
                  <li data-target="#carousel" data-slide-to="2" style="border-radius: 12px !important;"></li>
               </ol>

               <div class="carousel-inner">
                  <div class="active item">
                     <img itemprop="image" class="slid-img img-responsive" style="" src="{!! asset('assets/fontend/images/camera-suppliers.jpg') !!}" alt="camera suppliers">
                  </div>
                  <div class="item">
                     <img itemprop="image" class="slid-img img-responsive" src="{!! asset('assets/fontend/images/wholesale-handbags.jpg') !!}" alt="wholesale handbags">
                  </div>
                  <div class="item">
                     <img itemprop="image" class="slid-img img-responsive" src="{!! asset('assets/fontend/images/wholesale-clothing-for-men.jpg') !!}" alt="wholesale clothing for men">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="row padding_0" style="background-color: #fff;">
   <div class="col-sm-12">
      <div style="text-align: center;margin:  0 auto;">
         <div class="quation" style="padding-bottom: 7%;">
            <!-- <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/quation.jpg') !!}"> -->
            <h1 class="bds-head">Earn quotations on request</h1>
            <p class="bds-head20"> Single click, numerous quotes</p>
            <p class="bds-head20">Find the most down-bottom prices on the web</p>
         </div>
         <div style="text-align: center;margin:  0 auto;">
            <div class="">
               <!-- <img itemprop="image" class="img-responsive" style="width: 100%" src="{!! asset('assets/fontend/bdtdc-images/purchase-order-form.jpg') !!}" alt="purchase order form"> -->
            </div>
         </div>
      </div>
   </div>
   <div class="col-sm-12">
      <div style="text-align: center;margin:  0 auto;">
         <div class="fingertips" style="padding-bottom: 7%; margin-top: 3%;">
            <!-- <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/service.jpg') !!}"> -->
            <h1 class="bds-head">Service on the tip of your finger</h1>
            <p class="bds-head20">Proficient buying agent service promptly available</p>
            <p class="bds-head20"> 24/7 private assistance</p>
            <p class="bds-head20"> Click on agents affluent skills and solid supplier base</p>
         </div>
      </div>
   </div>
   <div class="col-sm-12">
      <div class="row" style="padding-bottom: 25px">
         <div class="col-sm-6 padding_0 bds-intro">
            <div class="left-animate-bds text-center" style="display: block;">
               <img itemprop="image" style="height:500px; margin: 0 auto" class="img-responsive" src="{!! asset('assets/fontend/bdtdc-images/img-frame.png') !!}" alt="image frame">
               <div class="slider-box-source-bd">
                  <div id="carousel-bd" class="carousel slide carousel-fade" data-ride="carousel" style="height: 100%">
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-bd" data-slide-to="0" class="active" style="border-radius: 12px !important;"></li>
                        <li data-target="#carousel-bd" data-slide-to="1" style="border-radius: 12px !important;"></li>
                        <li data-target="#carousel-bd" data-slide-to="2" style="border-radius: 12px !important;"></li>
                     </ol>
                     <!-- Carousel items -->
                     <div class="carousel-inner">
                        <div class="active item">
                           <img itemprop="image" class="img-responsive" style="height: 380px;  width:100%;" src="{!! asset('assets/fontend/images/ladies-inner-wear.jpg') !!}" alt="ladies inner wear">
                        </div>
                        <div class="item">
                           <img itemprop="image" class="img-responsive" style="height: 380px;  width:100%;" src="{!! asset('assets/fontend/images/vase-of-flowers.jpg') !!}" alt="vase of flowers">
                        </div>
                        <div class="item">
                           <img itemprop="image" class="img-responsive" style="height: 380px; width:100%;" src="{!! asset('assets/fontend/images/skinny-jeans-for-women.jpg') !!}" alt="skinny jeans for women">
                        </div>
                     </div>


                  </div>

               </div>
            </div>
         </div>


         <div class="col-sm-6  bds-intro">
            <div class="right-animate-bd text-center" style="height: auto;">

               <img itemprop="image" style="max-height: 500px; display: inline-block;" class="img-responsive" src="{!! asset('assets/fontend/images/selector.jpg',is_secured()) !!}" alt="global customer support">
            </div>
         </div>
      </div>
   </div>
   <div class="col-sm-12  padding_0" style="background: #F2F2F2;border-bottom: 1px solid #eee;">

      <div class="row button-list-bd">
         <div class="col-sm-4">
            <div class="sour-item-bd">
               <img itemprop="image" class="mg-bd" src="{!! asset('assets/fontend/bdtdc-images/start-search.png') !!}" alt="start search">
               <div class="slider-href">
                  <a itemprop="url" href="{{URL::to('Bdsource-home-page')}}">Start to Source</a>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="sour-item-bd">
               <img itemprop="image" class="mg-bd" src="{!! asset('assets/fontend/bdtdc-images/buyer-testimonials.png') !!}" alt="buyer testimonials">
               <div class="slider-href">
                  <a itemprop="url" href="{{URL::to('bigbuyer')}}">Buyers Testimonials </a>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="sour-item-bd">
               <img itemprop="image" class="mg-bd" src="{!! asset('assets/fontend/bdtdc-images/find-help.png') !!}" alt="find help">
               <div class="slider-href">
                  <a itemprop="url" href="{{URL::to('help-center')}}">Get Help </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@stop
@section('scripts')
<script type="text/javascript">
	$('.carousel').carousel();
</script>
@stop