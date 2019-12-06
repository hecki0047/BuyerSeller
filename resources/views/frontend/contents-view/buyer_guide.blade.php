@extends('frontend.layouts.master-register')
@section('page_css')
<link property='stylesheet' rel="stylesheet" type="text/css" href="{{ URL::asset('css/customer-service/for-new-user.css',is_secured()) }}" media="screen" data-name="skins">
@endsection
      @section('content')
      <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('FooterPage/pages/Help_Center',19,is_secured())}}" class="top-path-li-a"><span itemprop="name">Help Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('user/guide',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Buyer Guide</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
 </div>

<div class="container-fluid" style=" padding: 0;  padding-bottom:25px;"> 
      <div class="col-sm-12 padding_0">
            <div class="user-guide-banner">
                  <h2 class="slogan" style="padding-top: 154px;">Trade on BuyerSeller.Asia</h2>
                   <img itemprop="image"  class="dere goto2"  src="{!! asset('assets/fontend/bdtdc-images/TB1s1BOKVXXXXaLXXXXXXXXXXXX-48-48.svg',is_secured()) !!}" alt="BuyerSeller" />
                  
            </div>
      </div>
</div> 
<div class="container">
            <div class="row" style="background-color:#fff!important;">
            <div class="col-sm-12">
                  <div class="col-sm-4">
                        <a itemprop="url" href="#trade_section_1" class="link-heading" style="border-bottom: 3px solid rgba(25, 68, 111, 0.79);">
                        <img itemprop="image" style="    width: 12%;" src="{!! asset('assets/gold/discover-min.png',is_secured()) !!}" alt="discover" />
                        Discover Products & Suppliers</a>
                  </div>
                  <div class="col-sm-4">
                        <a itemprop="url" href="#trade_section_2"  class="link-heading" style="color:#999;"> <img itemprop="image" style="    width: 10%;  margin-right: 4px;" src="{!! asset('assets/gold/buyer-2-min.png',is_secured()) !!}" alt="buyer" />Manage Orders online</a>
                  </div>
                  <div class="col-sm-4">
                        <a itemprop="url" href="#trade_section_3"  class="link-heading" style="color:#999;"><img itemprop="image" style="width: 10%;" src="{!! asset('assets/gold/byuer-guide-min.png',is_secured()) !!}" alt="buyer guide" /> Get Full Order Protection</a>
                  </div>
            </div>
            <div class="col-sm-12">
                        <div class="col-sm-4">
                              
                        </div>
                        <div class="col-sm-4" id="trade_section_1">
                                    <h3 class="discover">Discover Products & Suppliers</h3>
                              
                        </div>
                        <div class="col-sm-4">
                              
                        </div>
                        <div class="col-sm-12" style="padding-bottom: 3%;">
                                    <h3 class="find-title"><span>3 ways to find</span></h3>
                        </div>
            </div>
            
                  
            <div class="col-sm-12">
                        <div class="guide-slider">
                              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                           <!--    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                              <span id="left-bar" ><img itemprop="image" style="width:108px; height:108px; " src="{!! asset('assets/fontend/bdtdc-images/left-bar.png',is_secured()) !!}" alt="bdtdc"></span>
                              <span class="sr-only">Previous</span></a>
               <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
               <span id="right-bar" ><img itemprop="image" style="width:108px; height:108px; " src="{!! asset('assets/fontend/bdtdc-images/right-bar.png',is_secured()) !!}" alt="right bar"></span>
               </a> -->
                              <div class="carousel-inner" role="listbox" style="background-color: #fff;">
                                                       <div class="item active" style="background-color: #fff;">
                                                            <div class="img-box">
                                                                  <img itemprop="image"  class="slide-images-big" style="height: 400px;"  src="{!! asset('assets/helpcenter/bdtdc-big-img-user.jpg',is_secured()) !!}" alt="BuyerSeller" />
                                                            </div>
                                                      </div>
                                                      <div class="item" style="background-color: #fff;">
                                                                  <div class="img-box">
                                                <img itemprop="image"  class="slide-images-big"   style="height: 400px;"   src="{!! asset('assets/helpcenter/bdtdc-big-img-user2.jpg',is_secured()) !!}" alt="BuyerSeller" />
                                                            </div>
                                                      </div>
                                                      <div class="item" style="background-color: #fff;">
                                                            <div class="img-box">
                                                            <img itemprop="image"  class="slide-images-big"  style="height: 400px;"   src="{!! asset('assets/helpcenter/bdtdc-big-img-user3.jpg',is_secured()) !!}" alt="" />
                                                            </div>
                                                      </div> 
                              </div>
                              </div>
                        </div>
            </div>
           
            <div class="col-sm-12">
                  <h3 class="find-title"><span>Enhance Search by</span></h3>
            </div>
            <div class="col-sm-12">
                  <div class="col-sm-6">
                        <p class="payment" >CONTRAST</p>
                        <p class="dispute">
                             Finding the best deal among hundreds of products and suppliers is just a click away.
                              Buyers have the ease to compare among them and get hold of the right product from
                              the right supplier. A click on ‘compare’ located on the search results enables comparing.
                        </p>
                        <img itemprop="image" style="height:260px;width:100%;padding-top:20px;" src="{!! asset('assets/helpcenter/bdtdc-big-img-user7.jpg') !!}" alt="" />

                  </div>
                  <div class="col-sm-6">
                        <p class="payment" >Suppliers’ identity</p>
                        <p class="dispute">A suppliers’ identity can be recognized by the badges they hold. These safeguards the
buyers by ensuring that the suppliers found on BuyerSeller are legally registered members.Although these badges guarantee their identity, however, they don’t confirm the genuineness of any goods displayed by the seller.</p>
                              <div class="col-sm-12" style="margin-top: 29px;">
                                    <div class="col-sm-6">
                                         <p><a itemprop="url" title="A&V Check" href="{{ URL::to('BuyerChannel/pages/accredited_suppliers',16,is_secured()) }}" style="color: #999;font-size:16px;">
                                         <img itemprop="image" style="height:55px;width:55px;" src="{!! asset('assets/gold/A&V-Check.jpg') !!}" alt="A&V Check" />
                                         A&V Check</a></p> 
                                    </div>
                                    <div class="col-sm-6">
                                          <p><a itemprop="url" title="Onlsite Check" href="{{ URL::to('BuyerChannel/pages/accredited_suppliers',16,is_secured()) }}" style="color: #999;font-size:16px;">
                                          <img itemprop="image" style="height:55px;width:55px;" src="{!! asset('assets/helpcenter/Hand-Shake-Icon.png') !!}" alt="Hand Shake Icon" />
                                          Onsite Check</a></p> 
                                    </div>
                              </div>
                              <div class="col-sm-12">
                                    <div class="col-sm-6">
                                          <p><a itemprop="url" title="Assessed Supplier" href="{{ URL::to('BuyerChannel/pages/accredited_suppliers',16,is_secured()) }}" style="color: #999;font-size:16px;">
                                          <img itemprop="image" style="height:55px;width:55px;" src="{!! asset('assets/gold/assecedv.jpg') !!}" alt="assecedv" /> 
                                          Assessed Supplier</a></p>  
                                    </div>
                                    <div class="col-sm-6">
                                          <p><a itemprop="url"  href="{{ URL::to('Bdtdc/Gold-supplier',null,is_secured())}}" title="Gold Suppliers:pre-qualified suppliers" style="color: #999;font-size:16px;">
                                          <img itemprop="image" style="height:55px;width:55px;" src="{!! asset('assets/gold/Gold-membership.jpg') !!}" alt="Gold-membership" />
                                          Gold Supplier</a></p>
                                    </div>
                              </div>
                  </div>
            </div>
            <div class="col-sm-12" style="padding-top:40px;" id="trade_section_2">
                  <p style="text-align:center;font-size: 28px;line-height: 1;color: #333;font-weight: normal;padding-bottom:30px;">
                        Administer orders with online trade center
                  </p>
                  <p style="text-align:center;font-size: 14px;color: #999; padding-right: 15%; padding-left: 15%;">Supervise the complete order process, keep track of the progress and shipping status as well as get the real-time and latest updates with our online trade center.</p>
                  <div class="col-sm-6" style="padding-left: 30%;">
                  </div>
                  <div class="col-sm-6" style="padding-top: 5px;">
                  </div>

            </div>
            <div class="col-sm-12" style="padding-top:30px;padding-bottom:40px;">
                  <div style="margin: 0 auto; text-align: center;">
                        <img itemprop="image" style="height:485px;width:70%;" src="{!! asset('assets/helpcenter/bdtdc-big-img-user6.jpg') !!}" alt="trade" />
                  </div>
            </div>
            <div class="col-sm-12" style="padding-bottom: 3%;">
                  <h3 class="find-title"><span>How it works?</span></h3>
            </div>
            <div class="col-sm-12" style="padding-bottom:6%;">
                  <div style="margin:0 auto; text-align: center;">
                        <img itemprop="image" style="height:75px;width:50%;" src="{!! asset('assets/buyer-security/t6.png') !!}" alt="" />
                 </div>
            </div>
            <div class="col-sm-12" id="trade_section_3">
                  <p style="text-align:center;font-size: 28px;line-height: 1;color: #333;font-weight: normal;padding-bottom:30px;padding-top:30px;">
                       Attain maximum Order Protection
                  </p>
                  <div class="col-sm-6" style="padding-top:20px;">
                        <p style="font-size: 22px;color: #333;font-weight: bold;">
                              <img itemprop="image" style="height:42px;width:8%;" src="{!! asset('assets/gold/Buyer-protection-home.png') !!}" alt="" />
                           Buyer Protection</p>
                        <p style="padding-left: 9%;font-size: 16px;color: #666;">Our Trade Assurance ensures buyers to source reliably with new supplier and order without any hesitation.</p>
                        <p style="padding-left: 9%;font-size: 26px;color: #FF6A00;font-weight: bold;">Enjoy full security on product payment for free</p>
                        <p style="padding-left: 9%;padding-top:20px;font-size: 12px;color: #999;line-height: 1.3;font-weight:bold;"><i class="fa fa-check" style="color:green;"></i>100% Payment protection</p>
                        <p style="padding-left: 9%;font-size: 12px;color: #999;line-height: 1.3;font-weight:bold;"><i class="fa fa-check" style="color:green;"></i>100% Product quality protection</p>
                        <p style="padding-left: 9%;font-size: 12px;color: #999;line-height: 1.3;font-weight:bold;"><i class="fa fa-check" style="color:green;"></i>100% On-time shipment protection</p>
                        <p style="padding-left: 9%;padding-top:30px;font-size: 12px;color: #999;line-height: 1.3;font-weight:bold;">To earn complete protection:</p>
                        <p style="padding-left: 9%;">1.<span style="font-size:13px;font-weight:bold;">CONFIRM</span> your order online with a <img itemprop="image" style="height:20px;width:5%;" src="{!! asset('assets/gold/Buyer-protection-home.png') !!}" alt="" />supplier.</p>
                    
                        <div class="col-sm-12" style="padding-bottom:30px;padding-top:20px;">
                              <div class="col-sm-6" style="padding-left:7%;">
                                    <a itemprop="url" style="color: #fff !important" href="{{ URL::to('order-protect',null,is_secured())}}" class="btn btn-join">Order With Buyer Protection</a>
                              </div>
                              <!-- <div class="col-sm-6" style="padding-left: 19%;padding-top: 8px;">
                                    <a itemprop="url" href="#" style="color: #1686CC;font-weight: bold;">Learn More ></a>
                              </div> -->
                        </div>
                        
                  </div>
                  <div class="col-sm-6" style="padding-top:20px;">
                        <img itemprop="image" style="height: 310px;width: 92%;" src="{!! asset('assets/gold/t7-min.jpg') !!}" alt="" />
                  </div>
            </div>
            <div class="col-sm-12" style="margin-top:30px;">
                  <div class="col-sm-6">
                        <div class="col-sm-12">
                              <div class="col-sm-2">
                                    <img itemprop="image" style="height:60px;width:79%;" src="{!! asset('assets/buyer-security/t10.png') !!}" alt="" />
                              </div>
                              <div class="col-sm-10">
                                    <p style="margin-bottom: 16px;font-size: 18px;color: #333;font-weight: bold;">
                                          Inspection Service
                                    </p>
                                    <p style="font-size: 12px;color: #666;">BuyerSeller<a href="{{ URL::to('BuyerChannel/pages/inspection_service',19,is_secured())}}" style="color: #1686CC;"> Inspection Service</a> ensures product ideality as pre-shipment quality is checked.</p>
                                    <p style="font-size: 12px;color: #666;">
                                         We have a special inspection team who will drop in to the port or factory, observe and photograph the goods and hold an assessment to make sure that the products being manufactured, displayed and shipped meet the quality standards.
                                    </p>
                              </div>
                        </div>
                  </div>
                  
            </div>
            <div class="col-sm-12" style="margin-top:30px;">
                  <div class="col-sm-6">
                        <div class="col-sm-12">
                              <div class="col-sm-2">
                                    <img itemprop="image" style="height: 74px;width: 100%;" src="{!! asset('assets/helpcenter/images/payment-inspection-logistics.jpg') !!}" alt="" />
                              </div>
                              <div class="col-sm-10">
                                    <p style="margin-bottom: 16px;font-size: 18px;color: #333;font-weight: bold;">
                                          Logistics Service
                                    </p>
                                    
                                    <p style="font-size: 12px;color: #666;">
                                        Track your product delivery progress with our <a href="{{ URL::to('BuyerChannel/pages/logistic_service',18,is_secured())}}" style="color:#1686CC;"> online shipment </a>tracking as our delivery service is guaranteed and reliable. Our offers are reasonably priced besides being crystal clear.
                                    </p>
                              </div>
                        </div>
                  </div>
                  <div class="col-sm-6">
                        <div class="col-sm-12">
                              <div class="col-sm-2">
                                    <img itemprop="image" style="height:60px;width:79%;" src="{!! asset('assets/buyer-security/t13.png') !!}" alt="" />
                              </div>
                              <div class="col-sm-10">
                                    <p style="margin-bottom: 16px;font-size: 18px;color: #333;font-weight: bold;">
                                        BuyerSeller identity service
                                    </p>
                                    <p style="font-size: 12px;color: #666;">
                                         BuyerSeller <a itemprop="url" href="{{ URL::to('BuyerChannel/pages/business_identity',17,is_secured())}}" style="color: #1686CC;">business identity</a> service verifies the status of a buyer which helps suppliers build trust. This triples the response rate from your interested seller allowing you to build a long term business relationship.  
                                    </p>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col-sm-12" style="padding-top:30px;padding-bottom:90px;">
                  <div class="col-sm-6" style="padding-left:20%;">
                       <a itemprop="url" href="{{URL::to('/',null,is_secured())}}"> <div  class="btn btn-join" style="padding-left:98px;padding-right:98px; font-size: 18px;font-weight: bold;">Start now</div>
                       </a>
                  </div>
                  <div class="col-sm-6" style="padding-left:41px;">
                  <a itemprop="url" href="{{URL::to('join',null,is_secured())}}">
                        <div  class="btn btn-default" id="b1">Join Free</div>
                        </a>
                  </div>

</div>
</div>



@stop

@section('scripts')
<script type="text/javascript">
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>

@stop
