@extends('frontend.layouts.header_dynamic')
    @section('page_css')
    <link property='stylesheet' href="{!! asset('assets/frontend/css/research.css',is_secured()) !!}" rel="stylesheet">
    @endsection
      @section('content')
      <br>
    <div class="row">
        <div class="col-md-12 padding_0" style="padding-bottom: 1%">
            <ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li style="float: left;" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{ URL::to('about-us',null,is_secured()) }}" style="color: #000"> About us &nbsp;</a></li>
            <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="" style="color: #000"> <i class="fa fa-angle-right"></i> Research <i class="fa fa-angle-right"></i></a></li></ul>
        </div>
    </div>
    <div class="row padding_0">
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                  <!-- Indicators -->
                                  <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active" style="border-radius: 10px  !important; border:0 none;"></li>
                                    <li data-target="#myCarousel" data-slide-to="1" style="border-radius: 10px  !important; border:0 none;"></li>
                                    <li data-target="#myCarousel" data-slide-to="2" style="border-radius: 10px  !important; border:0 none;"></li>
                                    <li data-target="#myCarousel" data-slide-to="3" style="border-radius: 10px  !important; border:0 none;"></li>
                                    <li data-target="#myCarousel" data-slide-to="4" style="border-radius: 10px  !important; border:0 none;"></li>
                                    <li data-target="#myCarousel" data-slide-to="5" style="border-radius: 10px  !important; border:0 none;"></li>
                                    <li data-target="#myCarousel" data-slide-to="6" style="border-radius: 10px  !important; border:0 none;"></li>
                                    <li data-target="#myCarousel" data-slide-to="7" style="border-radius: 10px  !important; border:0 none;"></li>
                                    <li data-target="#myCarousel" data-slide-to="8" style="border-radius: 10px  !important; border:0 none;"></li>
                                    
                                  </ol>


                                  <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                    <img itemprop="image" title="flooding in bangladesh" style="height:390px;width:100%;" src="{!! asset('assets/fontend/img/flooding-in-bangladesh.jpg') !!}" alt="flooding in bangladesh" />
                              </div>

                              <div class="item">
                                    <img itemprop="image" title="hills in bangladesh" style="height:390px;width:100%;" src="{!! asset('assets/fontend/img/hills-in-bangladesh.jpg') !!}" alt="hills in bangladesh" />
                              </div>
                                  
                              <div class="item">
                                   <img itemprop="image" title="rainfall bangladesh" style="height:390px;width:100%;" src="{!! asset('assets/fontend/img/rainfall-bangladesh.jpg') !!}" alt="rainfall bangladesh" />
                              </div>

                              <div class="item">
                                   <img itemprop="image" title="sundarban tour" style="height:390px;width:100%;" src="{!! asset('assets/fontend/img/sundarban-tour.jpg') !!}" alt="sundarban tour" />
                              </div>
                              <div class="item">
                                   <img itemprop="image" title="sylhet tea garden" style="height:390px;width:100%;" src="{!! asset('assets/fontend/img/sylhet-tea-garden.jpg') !!}" alt="sylhet tea garden" />
                              </div>
                              <div class="item">
                                   <img itemprop="image" title="bangladesh population" style="height:390px;width:100%;" src="{!! asset('assets/fontend/img/bangladesh-population.jpg') !!}" alt="bangladesh population" />
                              </div>
                              <div class="item">
                                   <img itemprop="image" title="fishing in bangladesh" style="height:390px;width:100%;" src="{!! asset('assets/fontend/img/fishing-in-bangladesh.jpg') !!}" alt="fishing in bangladesh" />
                              </div>
                              <div class="item">
                                   <img itemprop="image" title="mahasthangarh" style="height:390px;width:100%;" src="{!! asset('assets/fontend/img/mahasthangarh.jpg') !!}" alt="mahasthangarh" />
                              </div>
                              <div class="item">
                                   <img itemprop="image" title="water lily pond" style="height:390px;width:100%;" src="{!! asset('assets/fontend/img/water-lily-pond.jpg') !!}" alt="water lily pond" />
                              </div>
                              </div>             
                 </div>
          </div>

        <div class="row padding_0" style="background-color:#fff! important;margin-top:20px; margin-bottom: 20px;padding-bottom: 3%;">
          <div class="col-md-4">
            <div class="" style="background-color:#F6F6F6;padding:15px;margin-top:15px;">
              <div class=""  style="border-bottom: 1px solid #FFF; background-color:#F6F6F6;">
                      <p><a itemprop="url" href="http://www.thedailystar.net/op-ed/politics/no-turning-back-the-global-fight-against-climate-change-1212556" class="reach-head"  >No turning back in the global fight against climate change</a></p>
                </div>
                <div class="" style="border-bottom: 1px solid #FFF; background-color:#F6F6F6;padding-top: 10px;">
                      <p><a itemprop="url" href="http://www.thedailystar.net/business/germany-upbeat-bangladesh-garment-659857" class="reach-head">Germany upbeat on Bangladesh garment</a></p>
                </div>
                <div class="" style="border-bottom: 1px solid #FFF; background-color:#F6F6F6;">
                      <p><a itemprop="url" href="http://www.thedailystar.net/supplements/25th-anniversary-special-part-2/big-business-ahead-garments-sector-210877"   class="reach-head">Big business ahead for garments sector</a></p>
                </div>
                <div class="" style="border-bottom: 1px solid #FFF; background-color:#F6F6F6;;">
                      <p><a itemprop="url" href="http://www.thedailystar.net/business/eu-eases-rules-shrimp-exports-bangladesh-189103"   class="reach-head">EU eases rules for shrimp exports from Bangladesh</a></p>
                </div>
                
              </div>
          </div>
          <div class="col-md-4">
            <div class="" style="background-color:#F6F6F6;padding:15px;margin-top:15px;">
                <div class="" style="border-bottom: 1px solid #FFF; background-color:#F6F6F6;">
                      <p><a itemprop="url" href="http://archive.thedailystar.net/newDesign/news-details.php?nid=120615"   class="reach-head">Bangladesh IT industry going global</a></p>
                </div>
                <div class="" style="border-bottom: 1px solid #FFF; background-color:#F6F6F6;">
                      <p><a itemprop="url" href="http://www.thedailystar.net/software-industry-bright-future-18736"   class="reach-head">Software industry: Bright future</a></p>
                </div>
                <div class="" style="border-bottom: 1px solid #FFF; background-color:#F6F6F6;">
                      <p><a itemprop="url" href="http://www.thedailystar.net/business/eu-bangladesh-hold-business-talks-dhaka-789622"   class="reach-head">EU, Bangladesh to hold business talks in Dhaka</a></p>
                </div>
                <div class="" style="border-bottom: 1px solid #FFF; background-color:#F6F6F6;">
                      <p><a itemprop="url" href="http://www.thedailystar.net/backpage/eu-sees-bangladesh-full-fledged-economic-partner-81826" class="reach-head">EU sees Bangladesh as full-fledged economic partner</a></p>
                </div>
                <!-- <div class="" style="border-bottom: 1px solid #FFF; background-color:#F6F6F6;">
                      <p><a itemprop="url" href="#"   class="reach-head">Bangladesh’s 13th Five-Year Plan</a></p>
                </div> -->
            </div>
          </div>
          <div class="col-md-4">
            <div class="" style="border:1px solid #E7E7E7;padding-bottom: 15px; margin-bottom: 20px;">

                  <ul class="nav nav-tabs">
                      <li class="active"><a itemprop="url"   data-toggle="tab" href="#home" style="font-size: 13px;">Popular Post</a></li>
                      <li><a itemprop="url"   data-toggle="tab" href="#menu1" style="font-size: 13px;">Most Commented Post</a></li>

                  </ul>

                  <div class="tab-content">
                      <div id="home" class="tab-pane fade in active" style="padding: 0px 15px;">
                       
                              <p><a itemprop="url" href="http://www.thedailystar.net/supplements/25th-anniversary-special-part-2/window-opportunity-the-pharma-industry-210937"   class="reach-anchor-right">1. Window of opportunity for the pharma industry</a></p>
                              <p><a itemprop="url" href="http://www.thedailystar.net/business/square-beximco-get-us-approval-101971"   class="reach-anchor-right">2. Square, Beximco get US approval</a></p>
                              <p><a itemprop="url" href="http://www.thedailystar.net/news-detail-17445"   class="reach-anchor-right">3. Brazil moves to file anti-dumping case against Bangladesh jute yarn </a></p>
                              <p><a itemprop="url" href="http://www.thedailystar.net/round-tables/bangladesh-breaking-through-the-frontier-75924"   class="reach-anchor-right">4. Bangladesh: Breaking through the frontier </a></p>
                              <p><a itemprop="url" href="http://www.thedailystar.net/summit-to-highlight-bangladeshs-success-to-foreign-investors-38986"   class="reach-anchor-right">5. Summit to highlight Bangladesh's success to foreign investors </a></p>

                      </div>
                      <div id="menu1" class="tab-pane fade" style="padding: 0px 15px;">
                              <p><a itemprop="url" href="http://www.bbc.com/news/business-15178289"   class="reach-anchor-right">1. Film Entertainment Industry in Bangladesh</a></p>
                              <p><a itemprop="url" href="http://www.thedailystar.net/backpage/economy-stable-lacks-vibrancy-196648"   class="reach-anchor-right">2. Economic and Trade Information on Bangladesh</a></p>
                              
                              <p><a itemprop="url" href="http://www.businessnewsdaily.com/4686-how-to-start-a-business.html"   class="reach-anchor-right">3. Setting up a Company: Documents and Procedures </a></p>
                              <p><a itemprop="url" href="http://www.kazakhembus.com/content/kazakhstan-partner-us-eurasia"   class="reach-anchor-right">4. Kazakhstan: a Modern Silk Road Partner</a></p>
                      </div>     
                  </div>
            </div>
          </div>
        </div>
      	<div class="row padding_0" style="background-color:#fff! important;margin-top:20px; margin-bottom: 20px;padding-bottom: 3%;">
                
                        <div class="col-sm-8" style="border:1px solid #E7E7E7;border-right:0 none;margin-bottom:20px;">
                              <div class="row" style="padding: 15px;border-bottom:1px solid #E7E7E7;">
                                    <div class="col-sm-4">
                                          <img itemprop="image" style="width:100%;" src="{!! asset('assets/demo/invest.png') !!}" alt="bangladesh garments" />
                                    </div>
                                    <div class="col-sm-8" style="padding-bottom: 25px;">
                                          <div class="" style="padding-bottom: 15px;">
                                                <p>1 March 2016</p>
                                                <p><a itemprop="url"   href="http://www.thedailystar.net/business/export/canada-keen-buy-more-garments-bangladesh-77683"   style="color: #333;font-size: 14px;font-weight: bold;">Canada keen to buy more garments from Bangladesh </a></p>
                                                <p class="reaserch-p">
                                                  Canada said it would take steps to boost garment imports from Bangladesh in an effort to increase bilateral trade.<br>

The North American nation is satisfied with ...
                                                </p><br>
                                                 <a itemprop="url"  href="http://www.thedailystar.net/business/export/canada-keen-buy-more-garments-bangladesh-77683"  ><span class="deatil-b">Details</span></a>
                                          </div>
                                    </div>
                              </div>
                              <div class="row" style="padding: 15px;border-bottom:1px solid #E7E7E7;">
                                    <div class="col-sm-4">
                                          <img itemprop="image" style="width:100%;" src="{!! asset('assets/demo/gmbd.png') !!}" alt="bgarments invest" />
                                    </div>
                                    <div class="col-sm-8" style="padding-bottom: 25px;">
                                          <div class="" style="padding-top:10px; padding-bottom: 15px;">
                                                <p>1 March 2016</p>
                                                
                                                <p><a itemprop="url"   href="http://www.thedailystar.net/canada-plans-to-invest-more-in-bangladesh-64988"   style="color: #333;font-size: 14px;font-weight: bold;">Canada plans to invest more in Bangladesh</a></p>
                                                <p class="reaserch-p">Canada looks to boost its foreign direct investment in Bangladesh to explore opportunities in the steadily growing economy, the Canadian high commissioner in Dhaka said yesterday. ...</p>
                                                  <a itemprop="url" href="http://www.thedailystar.net/canada-plans-to-invest-more-in-bangladesh-64988"  ><span class="deatil-b">Details</span></a>

                                          </div>        

                                    </div>
                              </div>

                    </div>
                      
                    <div class="col-sm-4" style="border:1px solid #E7E7E7;padding: 10px;">
                          
                              



                                    <p style="color: #000;font-size: 16px; font-weight: bold;padding-top:10px;">Technology</p>
                                    <p style="color: #000;font-size: 16px; font-weight: bold;">Technopreneurship in Bangladesh: Recent Innovations and Opportunities</p>
                              <div style="padding-bottom: 10px;">
                                <iframe height="215" style="width:100%;" src="https://www.youtube.com/embed/8ZbMGbg89GQ" allowfullscreen ></iframe>
                              </div>
                                    
                              <div class="" style="border:1px solid #E7E7E7;">
                                         <iframe  height="215" style="width: 100%;" src="https://www.youtube.com/embed/IyBkRx1Vivk"  allowfullscreen ></iframe>
                                </div>
                              
                         </div>
                       </div> 
 @stop
 @section('scripts')
        <script type="text/javascript">
               document.getElementById("city-select").onchange = function() {
                 if (this.selectedIndex!==0) {
                     if (this.value.indexOf('http://') == 0) {
                         window.open(this.value);
                     }
                   else {
                        window.location.href = this.value;
                    }
                 }
            };
            document.getElementById("select-business").onchange = function() {
                 if (this.selectedIndex!==0) {
                     if (this.value.indexOf('http://') == 0) {
                         window.open(this.value);
                     }
                   else {
                        window.location.href = this.value;
                    }
                 }
            };
            document.getElementById("small-business").onchange = function() {
                 if (this.selectedIndex!==0) {
                     if (this.value.indexOf('http://') == 0) {
                         window.open(this.value);
                     }
                   else {
                        window.location.href = this.value;
                    }
                 }
            };
            document.getElementById("country-select").onchange = function() {
                 if (this.selectedIndex!==0) {
                     if (this.value.indexOf('http://') == 0) {
                         window.open(this.value);
                     }
                   else {
                        window.location.href = this.value;
                    }
                 }
            };
        </script>

 @stop