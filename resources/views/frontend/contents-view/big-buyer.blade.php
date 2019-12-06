@extends('frontend.layouts.master-register')
  @section('page_css')
  <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/trade-assurance.css',is_secured()) !!}" rel="stylesheet">
  @endsection
@section('content')
</div>
<div class="container">
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('Bdtdc/source'),is_secured()}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Bd Source</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('entrepreneur/day'),is_secured()}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Buyers’ Testimonials </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
</div>
<div class="container-fluid padding_0" style="background-color: #fff;">  
              <div class="bnr">
              <div class="container padding_0">
                  <div class="row padding_0">
                    <div class="bnrT">
                          <span class="bblogo">
                            <img itemprop="image" style="height:45.2px;width:53px;"  src="{!! asset('assets/fontend/bdtdc-images/big-buyer-logo.png',is_secured()) !!}" alt="big buyer logo">
                          </span>
                          <h1 class="bnrT-h1">Buyer Program</h1>
                          <br>

                        <span class="single-point">Specific point sourcing answer for giant business firms </span>
                        <div style="clear: both;"></div>

                    </div>
                    <div class="post-circle">
                     <div class="usp" style="border-radius: 180px !important;"><span style="float: left; text-align: center; padding-left: 0; font-size: 17px;">Submit your order requirement</span></div>
                      <div class="usp" style="border-radius: 180px !important;"><span style="float: left; text-align: center; padding-left: 0;font-size: 17px;">Requirement bounced to proper supplier</span></div>
                       <div class="usp" style="border-radius: 180px !important;"><span style="float: left; text-align: center; padding-left: 0;font-size: 17px;">Obtain multiple competitive quotations</span></div>
                    </div>
                    <div style="clear: both;"></div>
                    <div id="bBtn"  onclick="openOnClickBLForm();"><div class="bBtn"><a itemprop="url" href="{{URL::to('get-quotations'),is_secured()}}" style="color:#333; text-decoration: none;"> Receive orders now</a></div></div>
              </div>
              </div>
             </div>
            <div class="vtm">
                <div class="abt">
                        <p class="hdd1">Businesses with massive demand call for special attention. Buyer program offers

the best degree of service they deserve, besides a never-ending record of relied

suppliers. </p>
                       <div style="clear: both;"></div>
                            <div class="apply_ind">
                                   <div class="bhdd">
                                    <strong class="hdd"><span class="tick"></span>Buyer Exclusive</strong><br>
                                    <ul style=" list-style-type: disc !important;">
                                      <li><i class="fa fa-circle" aria-hidden="true" style="font-size: 10px; color: #333; padding-right: 10px;"></i>Committed support line</li>
                                        <li><i class="fa fa-circle" aria-hidden="true" style="font-size: 10px; color: #333;padding-right: 10px;"></i>Purchasing order page</li>
                                        <li><i class="fa fa-circle" aria-hidden="true" style="font-size: 10px; color: #333;padding-right: 10px;"></i>Buyer’s status icon</li>
                                    </ul>
                                    </div>
                            </div>
                            <div class="apply_ind">
                              <div class="bhdd">
                                <strong class="hdd"><span class="tick"></span>Benefits</strong><br>
                                <ul style=" list-style-type: disc !important;">
                                    <li><i class="fa fa-circle" aria-hidden="true" style="font-size: 10px; color: #333;padding-right: 10px;"></i>trouble free purchasing solution</li>
                                    <li><i class="fa fa-circle" aria-hidden="true" style="font-size: 10px; color: #333;padding-right: 10px;"></i> Receive aggressive quotations</li>
                                    <li><i class="fa fa-circle" aria-hidden="true" style="font-size: 10px; color: #333;padding-right: 10px;"></i>Minimize purchasing budget</li>
                                </ul>
                                </div>
                            </div>
                        <div class="cntTxt">
                            To enjoy the benefits of Buyer program, mail us your requirements at

<a itemprop="url" href="mailto:bigbuyer@buyerseller.asia">buyerprogram@BuyerSeller.Asia</a></div>
                        </div>
              
            </div>
        </div>
      <div class="container-fluid padding_0">
            <div class="container padding_0">
                <div class="barand-slider">
                    <div style="display: block;" id="content_1"> 
                            <div id="bigByr">
                                  <div class="bg-hdd">Upholding the beliefs of most popular global brands</div>
                                  <div class="shd">The best of</div>
                                  <div class="logo-brand">
                                        <ul class="ch-grid">
                                              <li>
                                                  <a itemprop="url" href="#">
                                                      <div class="ch-item">
                                                            <div class="ch-info">
                                                                  <div class="ch-info-front bglogo">

                                                                      <div class="flip-container" data-ontouchstart="this.classList.toggle('hover');">
                                                                            <div class="flipper">
                                                                              <div class="front">
                                                                               <img itemprop="image" class="com-logo-brand"  src="{!! asset('assets/fontend/images/FreeTek-International.png',is_secured()) !!}" alt="FreeTek International">
                                                                              </div>
                                                                              <div class="back">
                                                                                  <p>FreeTek International Co., Ltd.</p>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a itemprop="url" href="#">
                                                      <div class="ch-item">
                                                            <div class="ch-info">
                                                                  <div class="ch-info-front bglogo">
                                                                      <div class="flip-container" data-ontouchstart="this.classList.toggle('hover');">
                                                                            <div class="flipper">
                                                                              <div class="front">
                                                                               <img itemprop="image" class="com-logo-brand"  src="{!! asset('assets/fontend/images/Metro-Goldwyn-Mayer.png',is_secured()) !!}" alt="Metro-Goldwyn-Mayer">
                                                                              </div>
                                                                              <div class="back">
                                                                                  <p>Metro-Goldwyn-Mayer</p>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                  </div>
                                                                 
                                                            </div>
                                                      </div>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a itemprop="url" href="#">
                                                      <div class="ch-item">
                                                            <div class="ch-info">
                                                                  <div class="ch-info-front bglogo">
                                                                      <div class="flip-container" data-ontouchstart="this.classList.toggle('hover');">
                                                                            <div class="flipper">
                                                                              <div class="front">
                                                                               <img itemprop="image" class="com-logo-brand"  src="{!! asset('assets/fontend/images/Yinsaviny.png',is_secured()) !!}" alt="Yinsaviny">
                                                                              </div>
                                                                              <div class="back">
                                                                                  <p>Yinsaviny</p>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                  </div>
                                                                 
                                                            </div>
                                                      </div>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a itemprop="url" href="#">
                                                      <div class="ch-item">
                                                            <div class="ch-info">
                                                                  <div class="ch-info-front bglogo">
                                                                      <div class="flip-container" data-ontouchstart="this.classList.toggle('hover');">
                                                                            <div class="flipper">
                                                                              <div class="front">
                                                                               <img itemprop="image" class="com-logo-brand"  src="{!! asset('assets/fontend/images/Guangzhou-Sincere.png',is_secured()) !!}" alt="Guangzhou Sincere">
                                                                              </div>
                                                                              <div class="back">
                                                                                  <p>Guangzhou Sincere Auto Parts Co., Ltd.</p>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a itemprop="url" href="#">
                                                      <div class="ch-item">
                                                            <div class="ch-info">
                                                                  <div class="ch-info-front bglogo">
                                                                     <div class="flip-container" data-ontouchstart="this.classList.toggle('hover');">
                                                                            <div class="flipper">
                                                                              <div class="front">
                                                                               <img itemprop="image" class="com-logo-brand"  src="{!! asset('assets/fontend/images/Guangzhou-Sincere.png',is_secured()) !!}" alt="">
                                                                              </div>
                                                                              <div class="back">
                                                                                  <p>ORICO Technology Co., Ltd.</p>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                  </div>
                                                                 
                                                            </div>
                                                      </div>
                                                  </a>
                                              </li>
                                               <li>
                                                  <a itemprop="url" href="#">
                                                      <div class="ch-item">
                                                            <div class="ch-info">
                                                                  <div class="ch-info-front bglogo">
                                                                      <div class="flip-container" data-ontouchstart="this.classList.toggle('hover');">
                                                                            <div class="flipper">
                                                                              <div class="front">
                                                                               <img itemprop="image" class="com-logo-brand"  src="{!! asset('assets/fontend/images/Shenzhen-Yoobao-Technology.png',is_secured()) !!}" alt="Shenzhen-Yoobao-Technology">
                                                                              </div>
                                                                              <div class="back">
                                                                                  <p>Shenzhen Yoobao Technology Co., Ltd.</p>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                  </div>
                                                                
                                                            </div>
                                                      </div>
                                                  </a>
                                              </li>
                                               <li>
                                                  <a itemprop="url" href="#">
                                                      <div class="ch-item">
                                                            <div class="ch-info">
                                                                  <div class="ch-info-front bglogo">
                                                                       <div class="flip-container" data-ontouchstart="this.classList.toggle('hover');">
                                                                            <div class="flipper">
                                                                              <div class="front">
                                                                               <img itemprop="image" class="com-logo-brand"  src="{!! asset('assets/fontend/images/Weihai-Noeby-Fishing.png',is_secured()) !!}" alt="Weihai Noeby Fishing">
                                                                              </div>
                                                                              <div class="back">
                                                                                  <p>Weihai Noeby Fishing Tackle Co., Ltd.</p>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                  </div>
                                                                 
                                                            </div>
                                                      </div>
                                                  </a>
                                              </li>
                                               <li>
                                                  <a itemprop="url" href="#">
                                                      <div class="ch-item">
                                                            <div class="ch-info">
                                                                  <div class="ch-info-front bglogo">
                                                                      <div class="flip-container" data-ontouchstart="this.classList.toggle('hover');">
                                                                            <div class="flipper">
                                                                              <div class="front">
                                                                               <img itemprop="image" class="com-logo-brand"  src="{!! asset('assets/fontend/images/Shanghai-Beifu.png',is_secured()) !!}" alt="Shanghai Beifu">
                                                                              </div>
                                                                              <div class="back">
                                                                                  <p>Shanghai Beifu Group Co., Ltd.</p>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                  </div>
                                                                  
                                                            </div>
                                                      </div>
                                                  </a>
                                              </li>
                                               <li>
                                                  <a itemprop="url" href="#">
                                                      <div class="ch-item">
                                                            <div class="ch-info">
                                                                  <div class="ch-info-front bglogo">
                                                                     <div class="flip-container" data-ontouchstart="this.classList.toggle('hover');">
                                                                            <div class="flipper">
                                                                              <div class="front">
                                                                               <img itemprop="image" class="com-logo-brand"  src="{!! asset('assets/fontend/images/Shenzhen-Shenhuo.png',is_secured()) !!}" alt="Shenzhen Shenhuo">
                                                                              </div>
                                                                              <div class="back">
                                                                                  <p>Shenzhen Shenhuo Optoelectronic Equipment Co., Ltd.</p>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                  </a>
                                              </li>
                                               <li>
                                                  <a itemprop="url" href="#">
                                                      <div class="ch-item">
                                                            <div class="ch-info">
                                                                  <div class="ch-info-front bglogo">
                                                                       <div class="flip-container" data-ontouchstart="this.classList.toggle('hover');">
                                                                            <div class="flipper">
                                                                              <div class="front">
                                                                               <img itemprop="image" class="com-logo-brand"  src="{!! asset('assets/fontend/images/SHENZHEN-RELEE-ELECTRONICS.png',is_secured()) !!}" alt="">
                                                                              </div>
                                                                              <div class="back">
                                                                               
                                                                                  <p>SHENZHEN RELEE ELECTRONICS & TECHNOLOGY CO., LTD.</p>
                                                                              </div>
                                                                            </div>
                                                                        </div>
                                                                  </div>
                                                              
                                                            </div>
                                                      </div>
                                                  </a>
                                              </li>
                                        </ul>
                                  </div>
                            </div>
                    </div>
                  
                </div>
            </div>
        </div>
      <div class="container-fluid padding_0" style="background-color: #fff;">
          <div class="container padding_0">
                <div id="tst-ti">
                      <div class="tst-hd ">Few words from our buyers about us</div>
                      <div class="slider_121">
                              <ul>
                                  <li><div class="tstTx" style=" border-radius: 3px !important;">
                                    <p><span class="ticn"></span>“Outstanding service and swift response made my work my easier. Good

going. Thank you.” <span class="ticn1"></span></p>
                                    </div>

                                        <div class="imgTx">
                                        
                                        <span class="ind-img">
                                          <img itemprop="image" style="width:100px; height:80px; border-radius: 50% !important; "   src="{!! asset('assets/fontend/bdtdc-images/suc-busi.jpg',is_secured()) !!}" alt="">
                                        </span>
                                        <div class="img-cnt">
                                               <strong> Ahmed-Akbar-Sobhan</strong><br>
                                                Bashundhara Group</div>
                                        </div>
                                       
                                        <div style="clear: both;"></div>
                                  </li>
                                  <li>
                                        <div class="tstTx"><p><span class="ticn"></span>“Your job is really appreciating specially due to your quick response and

excellent service. Welcome to the market. Keep it up!”<span class="ticn1"></span></p></div>
                                        <div class="imgTx">
                                        
                                        <span class="ind-img">
                                           <img itemprop="image" style="width:100px; height:80px; border-radius: 50% !important; "  src="{!! asset('assets/fontend/bdtdc-images/succ-busine.jpg',is_secured()) !!}" alt="">
                                        </span>
                                           <div class="img-cnt">
                                               <strong>Anis Ud Dowla</strong><br>
                                                ACI Group </div>
                                        </div>
                                        <div class="shdd clb"></div>
                                  </li>
                            </ul>
                      </div>
                </div>
            </div>
            </div>

<div class="container">
  
@stop
 @section('scripts')
 <script type="text/javascript">
 $(document).ready(function(){
    $(".ch-info-front").hover(function(){
        $(this).css("background-color", "#0098E9");
         $(this).css("background-color", "#0098E9");
        }, function(){
        $(this).css("background-color", "white");
    });
});
 </script>
 @stop