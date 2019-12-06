@extends('mobile-view.layout.master_m')
      @section('content')
<section>
<div class="container">
      <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 padding_0">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url"  href="{{URL::to('user/guide'),is_secured()}}" class="top-path-li-a">Buyer Guide<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
           
<div class="row" style="background-color:#fff!important; padding-bottom:3%; margin-bottom:22px; border-bottom: 1px solid rgba(0,0,0,.1);">
            <div class="col-sm-12 padding_0">
                  <div class="col-sm-4">
                        <a itemprop="url" href="#trade_section_1" class="link-heading" style="border-bottom: 3px solid rgba(25, 68, 111, 0.79); font-size: 16px;"><img itemprop="image" style="width:45px; height: 45px;" src="{!! asset('assets/gold/Diccover.png') !!}"  alt="discover product" />Discover Products & Suppliers</a>
                  </div>
                  <div class="col-sm-4">
                        <a itemprop="url" href="#trade_section_2"  class="link-heading" style="color:#999;font-size: 16px;"><img itemprop="image" style="width:45px; height: 45px;"  src="{!! asset('assets/gold/Full-Protection.png') !!}" alt="Orders online" />Manage Orders online</a>
                  </div>
                  <div class="col-sm-4">
                        <a itemprop="url" href="#trade_section_3"  class="link-heading" style="color:#999;font-size: 16px;"><img itemprop="image" style="width:45px; height: 45px;"  src="{!! asset('assets/gold/Manage-order.png') !!}" alt="Order Protection" />Get Full Order Protection</a>
                  </div>
            </div>
            <div class="col-sm-12 padding_0">
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
            
                  
            <div class="col-sm-12 padding_0">
                        <div class="guide-slider">
                              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <a itemprop="url" class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            
               <a itemprop="url" class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
               </a>
                              <div class="carousel-inner" role="listbox" style="background-color: #fff;">
                                                       <div class="item active" style="background-color: #fff;">
                                                            <div class="img-box" style="max-height:250px;">
                                                                  <img itemprop="image"  class="slide-images-big" style=""  src="{!! asset('assets/gold/agreculture-product.png',is_secured()) !!}" alt="textiles equipment" />
                                                            </div>
                                                      </div>
                                                      <div class="item" style="background-color: #fff;">
                                                      <div class="img-box" style="max-height: 250px;">
                                                            <img itemprop="image"  class="slide-images-big"   style=""   src="{!! asset('assets/gold/agriculture-pro.png',is_secured()) !!}" alt="agricultural products" />
                                                            </div>
                                                      </div>
                                                    
                              </div>
                              </div>
             </div>
            </div>
            <div class="col-sm-12 padding_0">
                  <h3 class="find-title"><span>Enhance Search by</span></h3>
            </div>
            <div class="col-sm-12 padding_0">
                  <div class="col-sm-6">
                        <p class="payment">Comparing</p>
                        <p class="dispute">
                              Compare across different products & suppliers to get the best deal. Click ‘Compare’ on the 
                              search results page to start comparing!
                        </p>
                        <img itemprop="image" style="width:100%;padding-top:20px;" src="{!! asset('assets/fontend/bdtdc-images/comparison.jpg') !!}" alt="comparison" />

                  </div>
                  <div class="col-sm-6">
                        <p class="payment">Identity Badges</p>
                        <p class="dispute">Look out for badges that tells you the supplier’s identity!</p>
                              <div class="col-sm-12 padding_0" style="margin-top: 29px;">
                                    <div class="col-sm-6 padding_0">
                                         <p><span style="color: #999;font-size:16px;">
                                         <img itemprop="image" style="height:45px;width:45px;" src="{!! asset('assets/gold/A&V-Check.jpg') !!}" alt="" />
                                         A&V Check</span></p> 
                                    </div>
                                    <div class="col-sm-6 padding_0">
                                          <p><span  style="color: #999;font-size:16px;">
                                          <img itemprop="image" style="height:45px;width:45px;" src="{!! asset('assets/gold/Overseas-Stock-icon.jpg') !!}" alt="Overseas Stock icon" />
                                          Onsite Check</span></p> 
                                    </div>
                              </div>
                              <div class="col-sm-12 padding_0">
                                    <div class="col-sm-6 padding_0">
                                          <p><span  style="color: #999;font-size:16px;">
                                          <img itemprop="image" style="height:45px;width:45px;" src="{!! asset('assets/helpcenter/verified-supplier.png') !!}" alt="" /> 
                                          Assessed Supplier</span></p>  
                                    </div>
                                    <div class="col-sm-6 padding_0">
                                          <p><span  style="height:45px;width:45px;">
                                          <img itemprop="image" style="height:45px;width:45px;" src="{!! asset('assets/helpcenter/Gold-membership.png') !!}" alt="" />
                                          Gold Supplier<span></p>
                                    </div>
                              </div>
                  </div>
            </div>
            <div class="col-sm-12 padding_0" style="padding-top:15px;" id="trade_section_2">
                  <p style="text-align:center;font-size: 16px;line-height: 18px;color: #333;font-weight: normal;padding-bottom:10px;">
                        Manage Orders Online with Trade Center
                  </p>
                  <p style="text-align:center;font-size: 13px;color: #999;">Trade Center allows you to manage the entire order process, get real-time updates,</p>
                  <p style="text-align:center;font-size: 13px;color: #999;margin-top:-13px;padding-bottom:20px;">as well as track the payment & shipping status of your orders.</p>
                

            </div>
            <div class="col-sm-12 padding_0" style="padding-top:30px;padding-bottom:40px;">
                  <div class="img-center">
                        <img itemprop="image" style="width:70%;" src="{!! asset('assets/gold/sales-process.jpg') !!}" alt="sales process" />
                  </div>
            </div>
            <div class="col-sm-12 padding_0" style="padding-bottom: 3%;">
                  <h3 class="find-title"><span>How it works?</span></h3>
            </div>
            <div class="col-sm-12" style="padding-bottom:6%;">
                  <div class="img-center">
                        <img itemprop="image" style="height:75px;width:50%;" src="{!! asset('assets/buyer-security/working-process.png') !!}" alt="working process" />
                   </div>
            </div>
            <div class="col-sm-12 padding_0" id="trade_section_3">
                  <p style="text-align:center;font-size: 20px;line-height: 1;color: #333;font-weight: normal;padding-bottom:30px;padding-top:30px;">
                        Get Full Order Protection
                  </p>
                  <div class="col-sm-6" style="padding-top:20px;">
                        <p style="font-size: 16px;color: #333;font-weight: bold;">
                              <img itemprop="image" style="height:42px;width:8%;" src="{!! asset('assets/gold/Buyer-protection-home.png') !!}" alt="" />
                           Buyer Protection</p>
                        <p style="padding-left: 9%;font-size: 13px;color: #666;">Sourcing with a new supplier?</p>
                        <p style="padding-left: 9%;font-size: 13px;color: #666;margin-top: -10px;">Use Buyer Protection to protect your orders.</p>
                        <p style="padding-left: 9%;font-size: 16px;color: #FF6A00;font-weight: bold;">A FREE Payment Protection Service</p>
                        <p style="padding-left: 9%;padding-top:20px;font-size: 12px;color: #999;line-height: 1.3;font-weight:bold;"><i class="fa fa-check" style="color:green;"></i>100% Product quality protection</p>
                        <p style="padding-left: 9%;font-size: 12px;color: #999;line-height: 1.3;font-weight:bold;"><i class="fa fa-check" style="color:green;"></i>100% On-time shipment protection</p>
                        <p style="padding-left: 9%;font-size: 12px;color: #999;line-height: 1.3;font-weight:bold;"><i class="fa fa-check" style="color:green;"></i> 100% Payment protection</p>
                        <p style="padding-left: 9%;padding-top:30px;font-size: 12px;color: #999;line-height: 1.3;font-weight:bold;">To get full protection:</p>
                        <p style="padding-left: 9%;">1.<span style="font-size:13px;font-weight:bold;">CONFIRM</span> your order online with a <img itemprop="image" style="height:20px;width:5%;" src="{!! asset('assets/gold/Buyer-protection-home.png') !!}" alt="" />supplier.</p>
                        <p style="padding-left: 9%;">2.<span style="font-size:13px;font-weight:bold;">PAY</span> to the supplier’s <img itemprop="image" style="height:20px;width:11%;" src="{!! asset('assets/gold/10.png') !!}" alt="" /> account designated by bdtdc.com</p>
                        <div class="col-sm-12" style="padding-bottom:30px;padding-top:20px;">
                              <div class="col-sm-12 padding_0">
                                    <a itemprop="url" href="{{ URL::to('biz-bdtdc/order-protect') }}" class="btn btn-join" style="width: 200px; font-size: 10px;">Order With Buyer Protection</a>
                              </div>
                            
                        </div>
                        
                  </div>
                  <div class="col-sm-6" style="padding-top:20px; padding-left: 30px;">
                        <img itemprop="image" style="height:260px; width: 260px;" src="{!! asset('assets/buyer-security/order-protection.jpg') !!}" alt="" />
                  </div>
            </div>
            <div class="col-sm-12" style="margin-top:30px;">
                        <div class="col-xs-12">
                              <div class="col-xs-3  padding_0">
                                    <img itemprop="image" style="height:60px;width:60PX;" src="{!! asset('assets/buyer-security/inspect.png') !!}" alt="" />
                              </div>
                              <div class="col-xs-9  padding_0">
                                    <p style="font-size: 18px;color: #333;font-weight: bold; padding-top: 15px;">
                                          Inspection Service
                                    </p>
                              </div>
                        </div>
                        <div class="col-xs-12" style="padding-left: 30px;">
                                    <p style="font-size: 12px;color: #666;">Bdtdc Inspection Service assures product quality.</p>
                                    <p style="font-size: 12px;color: #666;">
                                          The inspector will visit the factory or port, photograph the products & validate the 
                                          certificate to ensure that the goods being produced and shipped reach quality
                                           standards.
                                    </p>
                              </div>
            </div>
            
           <div class="col-sm-12" style="margin-top:30px;">
                        <div class="col-xs-12">
                              <div class=" col-xs-3 padding_0">
                                    <img itemprop="image" style="height:60px;width:60PX;" src="{!! asset('assets/buyer-security/Payment_card.png') !!}" alt="" />
                              </div>
                              <div class="col-xs-9 padding_0">
                                    <p style="font-size: 18px;color: #333;font-weight: bold;padding-top: 15px;">
                                          e-Credit Line
                                    </p>
                              </div>
                        </div>
                        <div class="col-xs-12" style="padding-left: 30px;">
                                    <p style="font-size: 12px;color: #666;">For powerful trade financing, think e-Credit Line.</p>
                                    <p style="font-size: 12px;color: #666;">
                                          e-Credit Line  is designed to finance purchases on bdtdc.com from Bangladesh 
                                          suppliers. You can obtain financial loans as long as the amount is over US $5,000
                                           and if credit is available.
                                    </p>
                              </div>
            </div>
                  
            <div class="col-sm-12" style="margin-top:30px;">
                        <div class="col-xs-12">
                              <div class=" col-xs-3 padding_0">
                              <img itemprop="image" style="height:60px;width:60PX;" src="{!! asset('assets/buyer-security/logistic.png') !!}" alt="" />
                              </div>
                              <div class="col-xs-9 padding_0">
                                    <p style="font-size: 18px;color: #333;font-weight: bold;padding-top: 15px;">
                                          Logistics Service
                                    </p>
                        </div>  
                        <div class="col-xs-12">
                                    <p style="font-size: 12px;color: #666;">
                                         Ensure that your products get delivered to you. We offer transparent & competitive prices,
                                         online shipment tracking, guaranteed service delivery.
                                    </p>
                              </div>
                        </div>
                  </div>
                  <div class="col-sm-12" style="margin-top:30px; ">
                        <div class="col-xs-12">
                              <div class=" col-xs-3">
                                    <img itemprop="image" style="height:60px;width:60PX" src="{!! asset('assets/buyer-security/business-card.png') !!}" alt="" />
                              </div>
                              <div class="col-xs-9">
                                    <p style="font-size: 18px;color: #333;font-weight: bold;padding-top: 15px;">
                                         Business Identity Service
                                    </p>
                              </div>
                        </div>
                        <div class="col-xs-12" style="padding-left: 30px;">
                                    <p style="font-size: 12px;color: #666;">
                                         Get verified and build trust with suppliers via Bdtdc 
                                         Business Identity Service. 
                                         Displaying your verification status would increase response rate from suppliers.
                                    </p>
                              </div>
                        </div>

            <div class="col-sm-12 col-xs-12" style="padding-top:30px;padding-bottom:90px;">
                  <div class="col-sm-6 col-xs-6" style="padding-left: 30px;" >
                        <div style="float:left; margin-bottom: 15px;">
                               <a itemprop="url" href="{{URL::to('/',null,is_secured())}}" style="width: 120px; margin: 0 auto;"> <span class="btn btn-join" style="font-size: 18px;font-weight: bold;">Start now</span>
                       </a>
                        </div>
                      
                  </div>
                  <div class="col-sm-6 col-xs-6" style="padding-left: 30px;">
                                <div style="float:left; margin-bottom: 15px;background-color: #fff;">
                               <a itemprop="url" href="{{URL::to('join'),is_secured()}}" style="width: 120px; margin: 0 auto;background-color: #fff;"> <span class="btn btn-join" style="font-size: 18px;font-weight: bold; color: #666;background-color: #fff; border:1px solid #ddd;">Join Free</span>
                       </a>
                        </div>
                         <!--   <div class="btn-jn" style="margin-bottom: 15px;">
                              <a itemprop="url" href="{{URL::to('join'),is_secured()}}" style="width: 120px; margin: 0 auto;" >
                                    <span  class="btn btn-default" id="b1" style="width: 120px; margin: 0 auto;">Join Free</span>
                                    </a>
                              </div> -->
                              </div>
            
</div>

</div>
</div>
</section>

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
