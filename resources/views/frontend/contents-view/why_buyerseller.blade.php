@extends('frontend.layouts.master-register')
  @section('page_css')
    <link property='stylesheet' href="{!! asset('css/for-buyers/why-buerseller.css',is_secured()) !!}" rel="stylesheet">
  @endsection
@section('content')

<br>
  <div class="row">
    <div class="col-md-12 padding_0" style="padding-bottom: 1%;padding-left: 1%;">
      <ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> Home &nbsp;</a></li>
      <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{ URL::to('ServiceChannel/pages/for_buyer',35)}}" style="color: #000"> <i class="fa fa-angle-right"></i> Help Center </a></li>
      <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="#" style="color: #000"> <i class="fa fa-angle-right"></i> Why BuyerSeller <i class="fa fa-angle-right"></i></a></li></ul>
    </div>
  </div>
<div class="row" data-offset="20" style="">
   <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
    <nav  id="myScrollspy">
      <ul class="nav nav-pills nav-stacked user-guide-fix-why">
        <li class="active mymenu-why-li-l"><a itemprop="url" href="#section-why-bdtdc1" class="mymenu-why-li-ap" style="border-radius:5px !important; font-size:170%;"><div style="margin-left:10px;">Start</div></a></li>
     <li>
     
       <a itemprop="url" href="#section-why-bdtdc2"  class="mymenu-why-li-l" style="border-radius:5px !important;"><div style="margin-left:10px;  font-size:170%; color:#000;">Find</div></a>
          <div class="why-bdtdc-submenu">
                <ul>
                  <li  class="why-bdtdc-submenu-ul-li-bdt"><a itemprop="url"  class="why-bdtdc-submenu-ul-li-bdt-aa" href="#find-section1" style="border-radius:5px !important;">Find Products & Suppliers</a></li>
                  <li  class="why-bdtdc-submenu-ul-li-bdt"><a itemprop="url" class="why-bdtdc-submenu-ul-li-bdt-aa" href="#find-section2" style="border-radius:5px !important;">Let Suppliers Find You</a></li>
                  <li  class="why-bdtdc-submenu-ul-li-bdt"><a itemprop="url" class="why-bdtdc-submenu-ul-li-bdt-aa" href="#find-section3" style="border-radius:5px !important;">Wholesale</a></li>
             </ul>
           </div>
     </li>
          
         <li class="mymenu-why-li-l"><a itemprop="url"  class="mymenu-why-li-ap" href="#section-why-bdtdc3"><div style="margin-left:10px;  font-size:160%;">Inspection</div></a></li>
        <li class="mymenu-why-li-l"><a itemprop="url"  class="mymenu-why-li-ap" href="#section-why-bdtdc4"><div style="margin-left:10px;  font-size:160%;">BuyerSeller Logistics</div></a></li>
         <li class="mymenu-why-li-l"><a itemprop="url"  class="mymenu-why-li-ap" href="#section-why-bdtdc5" style="border-radius:5px !important;  font-size:160%;"><div style="margin-left:10px;">Payment & Finance</div></a></li>
      </ul>
    </nav>
    </div> 
    <div class="col-sm-9 col-md-9 col-lg-9 prodt-lst-show" >
      <div class="col-md-12 col-md-12 col-lg-12 padding_0" style="margin-left: 2%;/* background-color: rgb(255, 255, 255); */border-radius: 5px!important;margin-bottom: 5%;padding-bottom: 11%; ">
      <div class="user-giude-nav-div-why wordp-why">
      <div id="section-why-bdtdc1" style="margin-bottom: 2%;padding-top: 0px;">    
          <div style="width:100%; padding-bottom:10%;font-size: 30px;color: #255E98;" class="col-xs-12"><i class="qbg-icon qbg-icon-step1"></i>BuyerSeller <p class="user-gd-head-why" style="font-size: 22px;" >How It Functions </p></div>
      

        <div class="cont-left-why" style="margin-top: -10%;">
          <p  class="hp">Beginning with worldwide sourcing has never been simpler. </p>
         
        <p  class="hp">BuyerSeller gives the administrations and bolster your requirement for each progression of the excursion. With apparatuses to recognize business accomplices you can believe, you can unwind and get on with working together. </p> 
         <p  class="hp"> Be that as it may, how would you take full advantage of BuyerSeller? </p>
         </div>
          <div class="cont-mid-why">
            <img itemprop="image"  style="min-height:215px;" src="{!! asset('assets/gold/website-function.jpg',is_secured()) !!}" alt="website function">
          </div>
        </div>
        </div>
      </div>

       <div class="col-md-12 padding_0 col-md-12 col-lg-12" style="margin-left: 2%;/* background-color: rgb(255, 255, 255); */border-radius: 5px!important;margin-bottom: 5%;padding-bottom: 11%; ">
         <div id="section-why-bdtdc2"> 
        
              <h1 class="user-gd-head-why" style="padding-bottom:5%;font-size: 22px;"><i class="qbg-icon qbg-icon-find"></i>Search</h1>
              <div class="hp"><p  class="hp">You have 2 approaches to get what you need at BuyerSeller - discover it yourself or let them discover you. </p>
                  <p  class="hp">Indeed, even with a huge number of items, it's easy to begin. </p>
                 
            </div>
        
        
            <div>
                <div class="find-section-list1">
                <h3 id="find-section1" class="find-h3" style="font-size: 18px;">1. Find Products and Suppliers </h3>
                    <br>  <h4 style="padding:12% 0;">Look </h4>
                  <div class="hp"><p  class="hp">Our search bar gives you a chance to search for items, purchasers or suppliers. </p>
              <p class="hp">Simply enter an item you'd like to stock, a part you could source all the more productively, a zone you're keen on or a supplier name</p>
                  <h4 style="padding:5% 0;">Search Categories </h4>
                  <p  class="hp">Need motivation or thoughts? Search our classifications for something that gets your attention...</p>
                  </div>
              </div>
              <div class="find-section-list11">
                   <img itemprop="image"  src="{!! asset('assets/gold/product-search.jpg',is_secured()) !!}" alt="product search">
              </div>
            </div>
            
             <div>
               <div class="find-section-list1">
                  <h3 id="find-section2" class="find-h3" style="font-size: 18px;">2. Let Suppliers Find You </h3>
                      <p class="hp">For a decision of citations from suppliers who can convey, the most ideal way is BuyerSeller administration. </p>
                      <p class="hp">Post a 1-minute Buying Request to let them know what you require. They'll set up the points of interest of what they offer. BuyerSeller will choose the best-coordinating citations and give you instruments to think about or request tests. <br><br>
                      You'll be in a solid position to open arrangements.</p>
                      <p><a itemprop="url" href="{{URL::to('get_qutations'),is_secured()}}" target="_blank" class="btn btn-primary btn-join pull-left">Get Quotations Now</a></p>
                      </div>
                <div class="find-section-list11">
                   <img itemprop="image"  src="{!! asset('assets/gold/Let-suppliers-find-you.jpg',is_secured()) !!}" alt="Choice BuyerSeller">
              </div>
            </div>
             <div>
                    <div class="find-section-list1">
                  <h3 id="find-section3" class="find-h3" style="font-size: 18px;">3.Wholesale</h3>
                      <p class="hp">You'll discover secure online exchanges, moment costs and 3-day dispatch at Wholesale. </p>
                      <p class="hp">An upheaval in internet sourcing, Wholesale is the world's greatest online wholesale stage.<br><br>
                      Installment on Wholesale is ensured by BuyerSeller Secure Payment Service. </p>
                      </div>
                <div class="find-section-list11">
                   <img itemprop="image"  src="{!! asset('assets/fontend/bdtdc-images/wholesale-and-distribution.jpg',is_secured()) !!}" alt="wholesale and distribution">
              </div>
            </div>
            <div id="find-section4">
                    <div class="find-section-list1">
                  <h4>• Contacting Suppliers </h4>
                      <p class="hp">When you see something that intrigues you, it's an ideal opportunity to begin the discussion. Utilizing our instruments is the most effortless approach to spare your correspondence history on BuyerSeller. </p>
                      <h4>Stay Safe</h4>
                      <p class="hp">Pay special mind to identifications that distinguish checked suppliers. These show diverse levels of check: BuyerSeller or autonomous organizations have performed reported investigations of these organizations. <br><br>
                     You can likewise pick Gold Suppliers, including by their number of years exchanging on Bdtdc. </p>
                      <p><a itemprop="url" href="{{URL::to('wholesale'),is_secured()}}" target="_blank" class="btn btn-primary btn-join pull-left">Wholesale</a></p>
                      </div>
                <div class="find-section-list11">
                   <img itemprop="image"  src="{!! asset('assets/gold/wholesale-vendors.jpg',is_secured()) !!}" alt="wholesale vendors">
              </div>
            </div>
        </div>
        </div>

        <div class="col-md-12 padding_0 col-md-12 col-lg-12 col-xs-24" style="margin-left: 2%;/* background-color: rgb(255, 255, 255); */border-radius: 5px!important;margin-bottom: 5%;padding-bottom: 11%; ">
      <div id="section-why-bdtdc3">         
                   <h1 class="user-gd-head-why" style="padding-bottom:5%;font-size: 22px;">Inspection</h1>
      
        <div class="cont-left-why"><p  class="hp">Worldwide sourcing is made conceivable by dependable review administrations. </p>
<p  class="hp">BuyerSeller gives you a chance to pick the investigation organization to visit the processing plant or port, photo the items, analyze the confirmation and the sky is the limit from there. </p>
<p  class="hp">You can review products and organizations at once and spot of your decision. 
</p>
<p><a itemprop="url" href="{{URL::to('BuyerChannel/pages/inspection_service',19,is_secured())}}" target="_blank" class="btn btn-primary btn-join pull-left">Arrange an Inspection </a></p>
</div>
          <div class="cont-mid-why" style="margin-top:15%;">
            <img itemprop="image"  src="{!! asset('assets/gold/inspaction-service.jpg',is_secured()) !!}" alt="inspection services">
          </div>

      </div>
      </div>

      <div class="col-md-12 padding_0 col-md-12 col-lg-12" style="margin-left: 2%;/* background-color: rgb(255, 255, 255); */border-radius: 5px!important;margin-bottom: 5%;padding-bottom: 11%; ">
      <div id="section-why-bdtdc4">         
         <h1 class="user-gd-head-why" style="padding-bottom:5%;font-size: 22px;">BuyerSeller Logistics</h1>
         
            <div class="cont-left-why"><p class="hp">A logistics stage for organizations expansive and little, utilizing the size of BuyerSeller to convey crest season transportation and straightforward costs. </p>
             <p  class="hp">With worldwide pioneers like FedEx, UPS, DHL, TNT, EMS and more as accomplices, we offer last-mile conveyance and a determination of worldwide transportation lines. </p>
            <p class="hp">Whether your merchandise were requested at BuyerSeller or logged off direct from the industrial facility, BuyerSeller Logistics is interested in everybody. </p>
             <!-- <p><a itemprop="url" href="{-{URL::to('BuyerChannel/pages/logistic_service',18)}-}" target="_blank" class="btn btn-primary btn-join pull-left">Get A Logistics Estimate</a></p> -->
             </div>
              <div class="cont-mid-why" style="margin-top:15%;">
                <img itemprop="image"  src="{!! asset('assets/fontend/bdtdc-images/logistics-services.jpg',is_secured()) !!}" alt="logistics services">
              </div>
           
      </div>  
      </div>

      <div class="col-md-12 padding_0 col-md-12 col-lg-12" style="margin-left: 2%;/* background-color: rgb(255, 255, 255); */border-radius: 5px!important;margin-bottom: 5%;padding-bottom: 11%; ">
      <div id="section-why-bdtdc5" style="padding-bottom:5%;">         
                <h1 class="user-gd-head-why" style="padding-bottom:5%;font-size: 22px;">Payment & Finance</h1>
                <div class="cont-left-why element_height"><p class="hp">For protected, secure installment, think Secure Payment.  </p>
              <p  class="hp">For effective exchange financing, think e-Credit Line. </p>
              <p  class="hp">BuyerSeller Secure Payment administration holds your installment until you affirm conveyance and fulfillment. Significant serenity ensured. </p>
            </div>
              <div class="cont-mid-why" style="margin-top:15%;">
                        <img itemprop="image"  src="{!! asset('assets/gold/structured-finance.jpg',is_secured()) !!}" alt="structured finance">
                </div>
    </div>

    </div>
    <div class="col-md-12 padding_0 col-md-12 col-lg-12" style="margin-left: 2%;/* background-color: rgb(255, 255, 255); */border-radius: 5px!important;margin-bottom: 2%;padding-bottom: 11%; ">
      <div id="section-why-bdtdc6" style="padding-top:5%; padding-bottom:15%;">         
        <div class="cont-left-why">
        <p>Take in More About Secure Payment</p>
        <p  class="hp">e-Credit Line presents to US $2,000,000 and 120 days of Open Account exchanges to support your worldwide sourcing obtaining power. </p>
        <p class="hp">Propelled in association with Bank of China and Sinosure, it's an exceedingly successful import/trade administration intended to take your business to the following step. </p>
        <p class="hp">Your Secure Payment exchanges permit you to amass Credit Points, and later you can trade these in an intense monetary range. </p>
         <p class="hp"><a itemprop="url" href="{{URL::to('FooterPage/pages/Secure_Payment',37)}}" target="_blank" class="btn btn-primary btn-join pull-left">Get More Information</a></p>
         <p class="hp">Making Business Easier</p>
        <p class="hp">These administrations all mirror our center mission - to make it less demanding for you to business anyplace.</p>
        </div>

        <div class="cont-mid-why" style="margin-top:15%; padding-bottom:10%;">
                        <img itemprop="image"   src="{!! asset('assets/fontend/bdtdc-images/security-solutions.png',is_secured()) !!}" alt="secure payment">
             </div>
          </div>
  </div>

  </div>
  </div>
@stop
@section('scripts')
<script>
    document.getElementsByTagName("body")[0].setAttribute("data-spy", "scroll");
    document.getElementsByTagName("body")[0].setAttribute("data-target", "#myScrollspy");
    $(window).scroll(function() {
       var element_height = $('.element_height').offset().top; // position of #scroll-to
       var current_position = $(this).scrollTop(); // Get current position
       if(current_position > element_height){
          $('.user-guide-fix-why').css('position','absolute');
       }
       else{
        $('.user-guide-fix-why').css('position','fixed');
       }
    });
</script>
@stop