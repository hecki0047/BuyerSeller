@extends('fontend.master_dynamic')
      @section('page_css')
    <link property='stylesheet' href="{!! asset('css/customer-service/for-new-user.css',is_secured()) !!}" rel="stylesheet">
    @endsection
      @section('content')
      <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url"  href="{{URL::to('FooterPage/pages/Help_Center',19,is_secured())}}" class="top-path-li-a">Help Center<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url"  href="{{URL::to('user/guide',null,is_secured())}}" class="top-path-li-a">Buyer Guide<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
</div>

 <div class="container-fluid" style="padding-bottom:25px;"> 
            <div class="user-guide-banner">
                  <h2 class="slogan">How to Trade <br><em>on BuyerSeller.Asia</em></h2>
                   <img itemprop="image"   class="dere goto2"  src="{!! asset('assets/fontend/bdtdc-images/TB1s1BOKVXXXXaLXXXXXXXXXXXX-48-48.svg',is_secured()) !!}" alt="" />
                  
</div>
<div class="container">
            <div class="row" style="background-color:#fff!important; padding-bottom:3%; margin-bottom:22px; border-bottom: 1px solid rgba(0,0,0,.1);">
            <div class="col-sm-12">
                  <div class="col-sm-4">
                        <a itemprop="url" href="#trade_section_1" class="link-heading" style="border-bottom: 3px solid rgba(25, 68, 111, 0.79);"><img itemprop="image" style="width: 15%;" src="{!! asset('assets/gold/discover-min.png') !!}"  alt="discover product" />Discover Products & Suppliers</a>
                  </div>
                  <div class="col-sm-4">
                        <a itemprop="url" href="#trade_section_2"  class="link-heading" style="color:#999;"><img itemprop="image" style="width: 15%;" src="{!! asset('assets/gold/buyer-2-min.png') !!}" alt="Orders online" />Manage Orders online</a>
                  </div>
                  <div class="col-sm-4">
                        <a itemprop="url" href="#trade_section_3"  class="link-heading" style="color:#999;"><img itemprop="image" style="width: 15%;" src="{!! asset('assets/gold/byuer-guide-min.png') !!}" alt="Order Protection" />Get Full Order Protection</a>
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
                             <!--  <a itemprop="url" class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                              <span id="left-bar" ><img itemprop="image" width="108" height="108" src="{!! asset('assets/fontend/bdtdc-images/left-bar.png',is_secured()) !!}" alt=""></span> 
                              <span class="sr-only">Previous</span></a>
               <a itemprop="url" class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
               <span id="right-bar" ><img itemprop="image" width="108" height="108" src="{!! asset('assets/fontend/bdtdc-images/right-bar.png',is_secured()) !!}" alt=""></span>
               </a> -->
                              <div class="carousel-inner" role="listbox" style="background-color: #fff;">
                                                       <div class="item active" style="background-color: #fff;">
                                                            <div class="img-box">
                                                                  <img itemprop="image"  class="slide-images-big" style="height: 400px;"  src="{!! asset('assets/helpcenter/bdtdc-big-img-user.jpg',is_secured()) !!}" alt="textiles equipment" />
                                                            </div>
                                                      </div>
                                                      <div class="item" style="background-color: #fff;">
                                                                  <div class="img-box">
                                                            <img itemprop="image"  class="slide-images-big"   style="height: 400px;"   src="{!! asset('assets/helpcenter/bdtdc-big-img-user2.jpg',is_secured()) !!}" alt="agricultural products" />
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
                        <p class="payment">Comparing</p>
                        <p class="dispute">
                              Compare across different products & suppliers to get the best deal. Click ‘Compare’ on the 
                              search results page to start comparing!
                        </p>
                        <img itemprop="image" style="height:200px;width:100%;padding-top:20px;" src="{!! asset('assets/helpcenter/bdtdc-big-img-user7.jpg') !!}" alt="comparison" />

                  </div>
                  <div class="col-sm-6">
                        <p class="payment">Identity Badges</p>
                        <p class="dispute">Look out for badges that tells you the supplier’s identity!</p>
                              <div class="col-sm-12" style="margin-top: 29px;">
                                    <div title="A&V Check" class="col-sm-6">
                                         <p><a itemprop="url" href="{{URL::to('SupplierChannel/pages/verified_supplier',32,is_secured())}}" style="color: #999;font-size:16px;">
                                         <img itemprop="image" style="height:55px;width:42px;" src="{!! asset('assets/gold/A&V-Check.jpg') !!}" alt="" />
                                         A&V Check</a></p> 
                                    </div>
                                    <div title="Onsite Check" class="col-sm-6">
                                          <p><a itemprop="url" href="{{URL::to('SupplierChannel/pages/verified_supplier',32,is_secured())}}" style="color: #999;font-size:16px;">
                                          <img itemprop="image" style="height:55px;width:42px;" src="{!! asset('assets/gold/Overseas-Stock-icon.jpg') !!}" alt="Overseas Stock icon" />
                                          Onsite Check</a></p> 
                                    </div>
                              </div>
                              <div class="col-sm-12">
                                    <div title="Assessed Supplier" class="col-sm-6">
                                          <p><a itemprop="url" href="{{URL::to('SupplierChannel/pages/verified_supplier',32,is_secured())}}" style="color: #999;font-size:16px;">
                                          <img itemprop="image" style="height:55px;width:42px;" src="{!! asset('assets/helpcenter/verified-supplier.png') !!}" alt="" /> 
                                          Assessed Supplier</a></p>  
                                    </div>
                                    <div title="Gold Supplier" class="col-sm-6">
                                          <p><a itemprop="url" href="{{URL::to('SupplierChannel/pages/suppliers_memebership',23,is_secured())}}" style="color: #999;font-size:16px;">
                                          <img itemprop="image" style="height:55px;width:42px;" src="{!! asset('assets/helpcenter/Gold-membership.png') !!}" alt="" />
                                          Gold Supplier</a></p>
                                    </div>
                              </div>
                  </div>
            </div>
            <div class="col-sm-12" style="padding-top:40px;" id="trade_section_2">
                  <p style="text-align:center;font-size: 28px;line-height: 1;color: #333;font-weight: normal;padding-bottom:30px;">
                        Manage Orders Online with Trade Center
                  </p>
                  <p style="text-align:center;font-size: 14px;color: #999;">Trade Center allows you to manage the entire order process, get real-time updates,</p>
                  <p style="text-align:center;font-size: 14px;color: #999;margin-top:-13px;padding-bottom:20px;">as well as track the payment & shipping status of your orders.</p>
                  <div class="col-sm-12 text-center" >
                      <a style="color: white !important" itemprop="url" href="{{URL::to('default/message')}}" class="btn btn-join">Enter Trade Center</a>
                  </div>
                  

            </div>
            <div class="col-sm-12" style="padding-top:30px;padding-bottom:40px;">
                  <div class="img-center">
                        <img itemprop="image" style="height:485px;width:70%;" src="{!! asset('assets/helpcenter/bdtdc-big-img-user6.jpg') !!}" alt="sales process" />
                  </div>
            </div>
            <div class="col-sm-12" style="padding-bottom: 3%;">
                  <h3 class="find-title"><span>How it works?</span></h3>
            </div>
            <div class="col-sm-12" style="padding-bottom:6%;">
                  <div class="img-center">
                        <img itemprop="image" style="height:75px;width:50%;" src="{!! asset('assets/buyer-security/working-process.png') !!}" alt="working process" />
                   </div>
            </div>
            <div class="col-sm-12" id="trade_section_3">
                  <p style="text-align:center;font-size: 28px;line-height: 1;color: #333;font-weight: normal;padding-bottom:30px;padding-top:30px;">
                        Get Full Order Protection
                  </p>
                  <div class="col-sm-6" style="padding-top:20px;">
                        <p style="font-size: 22px;color: #333;font-weight: bold;">
                              <img title="Buyer Protection" itemprop="image" style="height:42px;width:8%;" src="{!! asset('assets/gold/Buyer-protection-home.png') !!}" alt="" />
                           Buyer Protection</p>
                        <p style="padding-left: 9%;font-size: 16px;color: #666;">Sourcing with a new supplier?</p>
                        <p style="padding-left: 9%;font-size: 16px;color: #666;margin-top: -10px;">Use Buyer Protection to protect your orders.</p>
                        <p style="padding-left: 9%;font-size: 26px;color: #FF6A00;font-weight: bold;">A FREE Payment Protection Service</p>
                        <p style="padding-left: 9%;padding-top:20px;font-size: 12px;color: #999;line-height: 1.3;font-weight:bold;"><i class="fa fa-check" style="color:green;"></i>100% Product quality protection</p>
                        <p style="padding-left: 9%;font-size: 12px;color: #999;line-height: 1.3;font-weight:bold;"><i class="fa fa-check" style="color:green;"></i>100% On-time shipment protection</p>
                        <p style="padding-left: 9%;font-size: 12px;color: #999;line-height: 1.3;font-weight:bold;"><i class="fa fa-check" style="color:green;"></i> 100% Payment protection</p>
                        <p style="padding-left: 9%;padding-top:30px;font-size: 12px;color: #999;line-height: 1.3;font-weight:bold;">To get full protection:</p>
                        <p style="padding-left: 9%;">1.<span style="font-size:13px;font-weight:bold;">CONFIRM</span> your order online with a <img itemprop="image" style="height:20px;width:5%;" src="{!! asset('assets/gold/Buyer-protection-home.png') !!}" alt="" />supplier.</p>
                        <p style="padding-left: 9%;">2.<span style="font-size:13px;font-weight:bold;">PAY</span> to the supplier’s <img itemprop="image" style="height:20px;width:11%;" src="{!! asset('assets/gold/10.png') !!}" alt="" /> account designated by BuyerSeller.Asia</p>
                        <div class="col-sm-12" style="padding-bottom:30px;padding-top:20px;width: 130%">
                              <div class="col-sm-6" style="padding-left:7%;">
                                    <a style="color: white !important" itemprop="url" href="{{ URL::to('order-protect') }}" class="btn btn-join">Order With Buyer Protection</a>
                              </div>
                              
                        </div>
                        
                  </div>
                  <div class="col-sm-6" style="padding-top:20px;">
                        <img itemprop="image" style="height:242px;width:80%;" src="{!! asset('assets/buyer-security/order-protection.jpg') !!}" alt="" />
                  </div>
            </div>
            <div class="col-sm-12" style="margin-top:30px;">
                  <div class="col-sm-6">
                        <div class="col-sm-12">
                              <div class="col-sm-2">
                                    <img title="Inspection Service" itemprop="image" style="height:60px;width:60PX;" src="{!! asset('assets/buyer-security/inspect.png') !!}" alt="" />
                              </div>
                              <div class="col-sm-10" style="padding-left: 30px;">
                                    <p style="margin-bottom: 16px;font-size: 18px;color: #333;font-weight: bold;">
                                          Inspection Service
                                    </p>
                                    <p style="font-size: 12px;color: #666;">BuyerSeller<a itemprop="url" href="{{URL::to('BuyerChannel/pages/inspection_service',19)}}" style="color: #1686CC;"> Inspection Service</a> assures product quality.</p>
                                    <p style="font-size: 12px;color: #666;">
                                          The inspector will visit the factory or port, photograph the products  & validate the certificate to ensure that the goods being produced and shipped reach quality standards.
                                    </p>
                              </div>
                        </div>
                  </div>
                  <div class="col-sm-6">
                        <div class="col-sm-12">
                              <div class="col-sm-2">
                                    <img title="e-Credit Line" itemprop="image" style="height:60px;width:60PX;" src="{!! asset('assets/buyer-security/Payment_card.png') !!}" alt="" />
                              </div>
                              <div class="col-sm-10" style="padding-left: 30px;">
                                    <p style="margin-bottom: 16px;font-size: 18px;color: #333;font-weight: bold;">
                                          e-Credit Line
                                    </p>
                                    <p style="font-size: 12px;color: #666;">For powerful trade financing, think e-Credit Line.</p>
                                    <p style="font-size: 12px;color: #666;">
                                          e-Credit Line  is designed to finance purchases on BuyerSeller.Asia from Bangladesh 
                                          suppliers. You can obtain financial loans as long as the amount is over US $5,000
                                           and if credit is available.
                                    </p>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col-sm-12" style="margin-top:30px;">
                  <div class="col-sm-6">
                        <div class="col-sm-12">
                              <div class="col-sm-2" style="padding-left: 30px;">
                                    <img title="Logistics Service" itemprop="image" style="height:60px;width:60PX;" src="{!! asset('assets/buyer-security/logistic.png') !!}" alt="" />
                              </div>
                              <div class="col-sm-10" style="padding-left: 30px;">
                                    <p style="margin-bottom: 16px;font-size: 18px;color: #333;font-weight: bold;">
                                          Logistics Service
                                    </p>
                                    
                                    <p style="font-size: 12px;color: #666;">
                                         Ensure that your products get delivered to you. We offer transparent & competitive prices,
                                          online shipment tracking, guaranteed service delivery.
                                    </p>
                              </div>
                        </div>
                  </div>
                  <div class="col-sm-6">
                        <div class="col-sm-12">
                              <div class="col-sm-2">
                                    <img title="Business Identity Service" itemprop="image" style="height:60px;width:60PX" src="{!! asset('assets/buyer-security/business-card.png') !!}" alt="" />
                              </div>
                              <div class="col-sm-10" style="padding-left: 30px;">
                                    <p style="margin-bottom: 16px;font-size: 18px;color: #333;font-weight: bold;">
                                         Business Identity Service
                                    </p>
                                    <p style="font-size: 12px;color: #666;">
                                         Get verified and build trust with suppliers via BuyerSeller Business Identity Service. 
                                         Displaying your verification status would increase response rate from suppliers.
                                    </p>
                              </div>
                        </div>
                  </div>
            </div> 

            <div class="col-sm-12" style="padding-top:30px;padding-bottom:90px;">
                  <div class="col-sm-6" >
                        <div style="float:right;">
                               <a itemprop="url" href="{{URL::to('/',null,is_secured())}}"> <span class="btn btn-join" style="padding-left:98px;padding-right:98px; font-size: 18px;font-weight: bold;">Start now</span>
                       </a>
                        </div>
                      
                  </div>
                  <div class="col-sm-6">
                           <div class="btn-jn">
                              <a itemprop="url" href="{{URL::to('join'),is_secured()}}">
                                    <span  class="btn btn-default" id="b1">Join Free</span>
                                    </a>
                              </div>
                              </div>
            
</div>

</div>
</div>
<div class="container">
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
