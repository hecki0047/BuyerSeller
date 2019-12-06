@extends('frontend.layouts.master-register')
@section('page_css')
  <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bangladesh-business-style.css',is_secured()) !!}" rel="stylesheet">
  @endsection
@section('content')
 <div class="row" style="margin-bottom: 8px">
        <div class="col-sm-12 col-md-12 col-lg-12">
      <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a" ><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('SupplierChannel/pages/learning_center',33,is_secured())}}" class="top-path-li-a"><span itemprop="name">Learning Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
      <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="#" class="top-path-li-a"><span itemprop="name">Success Stories</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
          </ul>
       </div>
  </div>
<div class="row" style="background-color: #fff; margin-top: 1px; padding-top: 5px;">
       <ul class="nav nav-tabs" aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
          <li class=""><a itemprop="url"  href="{!! URL::to('SupplierChannel/pages/seller_channel',40,is_secured()) !!}">Home</a></li>
          <li><a itemprop="url"  href="{!!URL::to('SupplierChannel/pages/suppliers_memebership/30')!!}">Seller Memberships</a></li>
          <li><a itemprop="url"   href="{!! URL::to('SupplierChannel/pages/training_center',32,is_secured()) !!}">Training</a></li>
          <li><a itemprop="url"  href="{!! URL::to('FooterPage/pages/Learning_Center',32,is_secured()) !!}">Learning Center</a></li>
          <li class="active"><a itemprop="url"  style="" href="{!! URL::to('success/stories',null,is_secured()) !!}">Success Stories</a></li>
       </ul>
</div>
<div class="row padding_0" style="background-color: #fff;">
 
          <div class="col-md-3 col-xs-6" style="padding: 0;">
          <a href="{{URL::to('Home/Green-Field',1559,is_secured())}}" target="_blank">
           <img itemprop="image" class="succ-man"  src="{!! asset('assets/fontend/bdtdc-images/hero1.jpg',is_secured()) !!}" alt="traing1">
           </a>
            <div class="sss-stories">
             <h2 style="font-size: 14px;font-weight: normal;overflow: hidden;width: 100%; margin: 0; color: #fff;">Md Forhad Ahmmed Russel</h2>
              <h5 style="margin: 5px 0;">CEO of Green Field</h5>
                <span>BuyerSeller.asia is the latest trend of B2B platform in Bangladesh providing support for the import and export side of my business.</span>
            </div>
          </div> 
       
        <div class="col-md-3 col-xs-6"  style="padding: 0;">
        <a href="{{URL::to('Home/Raid-International',1379,is_secured())}}" target="_blank">
           <img itemprop="image" class="succ-man"  src="{!! asset('assets/fontend/bdtdc-images/hero2.jpg',is_secured()) !!}" alt="traing1"></a>
              <div class="sss-stories">
              <h2 style="font-size: 14px;font-weight: normal;overflow: hidden;width: 100%; margin: 0;color: #fff;">MIR MD. ALIMUZZAMAN</h2>
              <h5 style="margin: 5px 0;">CEO Raid International</h5>
                <span>BuyerSeller.asia is an outstanding brand in online trading giving our clients the trust to buy and the chance to sell our products globally on this platform.</span>
            </div>
          </div> 
        <div class="col-md-3 col-xs-6"  style="padding: 0;">
        <a href="{{URL::to('Home/Supplyhouse',1461,is_secured())}}" target="_blank">
            <img itemprop="image" class="succ-man"  src="{!! asset('assets/fontend/bdtdc-images/hero3.jpg',is_secured()) !!}" alt="traing1"></a>
              <div class="sss-stories">
              <h2 style="font-size: 14px;font-weight: normal;overflow: hidden;width: 100%; margin: 0;color: #fff;">Mr. Mahfuz Haque</h2>
              <h5 style="margin: 5px 0;">CEO OF SUPPLY HOUSE</h5>
                <span>Our standing on BuyerSeller.asia increased by having this Trade Assurance certificate. We now get higher exposure within the platform.</span>
            </div>
     </div>
     <div class="col-md-3 col-xs-6"  style="padding: 0;">
           <img itemprop="image" class="succ-man"  src="{!! asset('assets/fontend/bdtdc-images/hero4.jpg',is_secured()) !!}" alt="traing1">
              <div class="sss-stories">
               <h2 style="font-size: 14px;font-weight: normal;overflow: hidden;width: 100%; margin: 0;">Shakil Ahmed</h2>
                <h5 style="margin: 5px 0;">Business owner</h5>
                <span>I have access to such an extensive variety of international buyers that provides beneficial costs on items that I can sell in mass.</span>
            </div>
     </div>

      
</div>
<div class="row" style="background-color: #fff; border: none;">
        <div class="col-sm-8" style="padding: 0; margin: 0;">
        <div style="padding: 0; margin: 0; position: relative;">
           <ul class="nav nav-tabs">
            <li id="gold-supplier-stories" class="type-nav-item current active" style="padding-bottom: 0"><a itemprop="url" data-toggle="tab" href="#gold-supplier" aria-expanded="true" style="border: 1px solid transparent">Gold Supplier Stories</a></li>
             <!--  <li id="buyer-stories" class="type-nav-item current" style="padding-bottom: 0"><a itemprop="url" data-toggle="tab" href="#gold-buyer" aria-expanded="false"  style="border: 1px solid transparent">Buyer Stories</a></li> -->
            </ul>
          </div>
        </div>
      
      <div class="col-sm-4 padding_0">
                  <div class="suc-stro" style="border-bottom: 1px solid #ddd;">
                      <p class="succ-video">Success Stories video</p>
                  </div>
      </div>
      
</div>
<div class="row padding_0" style="background-color: #fff; padding-bottom: 8%;">
    <!-- <div class="col-md-2 col-xs-3">
         
          <div style="width:171px; float:left;">
            <ul class="gold-supplier-country-box" style="padding-left: 0; padding-right: 0;">
            
              <li class="Armenia">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/am.gif" alt="Armenia">
                <a itemprop="url"  href="javascript:filterType(1,'Armenia');">Armenia</a>
                </li>
                            <li class="Australia">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/au.gif" alt="Australia">
                <a itemprop="url"  href="javascript:filterType(1,'Australia');">Australia</a>
                </li>        
                 <li class="bangladesh">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/bd.gif" alt="Bangladesh">
                <a itemprop="url"  href="javascript:filterType(1,'Bangladesh');">Bangladesh</a>
                </li>
                <li class="china">
                <img itemprop="image"     src="//is.alicdn.com/simg/single/flag/cn.gif" alt="China">
                <a itemprop="url"  href="javascript:filterType(1,'China');">China</a>
                </li>   
        <li class="Egypt">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/eg.gif" alt="Egypt">
                <a itemprop="url"  href="javascript:filterType(1,'Egypt');">Egypt</a>
                </li>   
                                            <li class="Greece">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/gr.gif" alt="Greece">
                <a itemprop="url"  href="javascript:filterType(1,'Greece');">Greece</a>
                </li>
                <li class="hong">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/hk.gif" alt="Hong Kong">
                <a itemprop="url"  href="javascript:filterType(1,'Hong Kong');">Hong Kong</a>
                </li>
                
                <li class="india">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/in.gif" alt="India">
                <a itemprop="url"  href="javascript:filterType(1,'India');">India</a>
                </li> 
                                            <li class="Indonesia">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/id.gif" alt="Indonesia">
                <a itemprop="url"  href="javascript:filterType(1,'Indonesia');">Indonesia</a>
                </li>
                                            <li class="Iran">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/ir.gif" alt="Iran">
                <a itemprop="url"  href="javascript:filterType(1,'Iran');">Iran</a>
                </li>
                                            <li class="Ireland">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/ie.gif" alt="Ireland">
                <a itemprop="url"  href="javascript:filterType(1,'Ireland');">Ireland</a>
                </li>

                <li class="israel">
                    <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/il.gif" alt="Israel">
                    <a itemprop="url"  href="javascript:filterType(1,'Israel');">Israel</a>
                </li> 
                                <li class="italy">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/it.gif" alt="Italy">
                    <a itemprop="url"  href="javascript:filterType(1,'Italy');">Italy</a>
                </li>
                <li class="japan">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/ja.gif" alt="Japan">
                <a itemprop="url"  href="javascript:filterType(1,'Japan');">Japan</a>
                </li>   
                
                            <li class="Lebanon">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/lb.gif" alt="Lebanon">
                <a itemprop="url"  href="javascript:filterType(1,'Lebanon');">Lebanon</a>
                </li>   
                <li class="malaysia">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/my.gif" alt="Malaysia">
                <a itemprop="url"  href="javascript:filterType(1,'Malaysia');">Malaysia</a>
                </li>
                                            <li class="Mauritius">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/mu.gif" alt="Mauritius">
                <a itemprop="url"  href="javascript:filterType(1,'Mauritius');">Mauritius</a>
                </li>
                                            <li class="Nepal">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/np.gif" alt="Nepal">
                <a itemprop="url"  href="javascript:filterType(1,'Nepal');">Nepal</a>
                </li>
                                          <li class="Netherlands">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/nl.gif" alt="Netherlands">
                <a itemprop="url"  href="javascript:filterType(1,'Netherlands');">Netherlands</a>
                </li>
                <li class="pakistan">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/pk.gif" alt="Pakistan">
                <a itemprop="url"  href="javascript:filterType(1,'Pakistan');">Pakistan</a>
                </li>
                                        <li class="Paraguay">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/py.gif" alt="Paraguay">
                <a itemprop="url"  href="javascript:filterType(1,'Paraguay');">Paraguay</a>
                </li>
                                            <li class="Poland">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/pl.gif" alt="Poland">
                <a itemprop="url"  href="javascript:filterType(1,'Poland');">Poland</a>
                </li>
                <li class="south">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/kr.gif" alt="South Korea">
                <a itemprop="url"  href="javascript:filterType(1,'South Korea');">South Korea</a>
                </li>
                <li class="Spain">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/es.gif" alt="Spain">
                <a itemprop="url"  href="javascript:filterType(1,'Spain');">Spain</a>
                </li>
                <li class="taiwan">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/tw.gif" alt="Taiwan">
                <a itemprop="url"  href="javascript:filterType(1,'Taiwan');">Taiwan</a>
                </li>
                <li class="thailand">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/th.gif" alt="Thailand">
                <a itemprop="url"  href="javascript:filterType(1,'Thailand');">Thailand</a>
                </li>
        <li class="turkey">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/tu.gif" alt="Turkey">
                <a itemprop="url"  href="javascript:filterType(1,'Turkey');">Turkey</a>
                </li>
        <li class="UAE">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/ae.gif" alt="UAE">
                <a itemprop="url"  href="javascript:filterType(1,'UAE');">UAE</a>
                </li>
                <li class="United Kingdom">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/uk.gif" alt="United Kingdom">
                <a itemprop="url"  href="javascript:filterType(1,'United Kingdom');" style="font-size: 12px;">United Kingdom</a>
                </li>
                <li class="united">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/us.gif" alt="United States">
                <a itemprop="url"  href="javascript:filterType(1,'United States');" >United States</a>
                </li>
                <li class="vietnam">
                <img itemprop="image"     src="//is.alicdn.com/images/common/country/s/vn.gif" alt="Vietnam<">
                <a itemprop="url"  href="javascript:filterType(1,'Vietnam');">Vietnam</a>
                </li>

            </ul>
            <div class="nav-swicth" style="padding:5px 0 0 0; float:left;">
                <a itemprop="url"  href="javascript:void(0);" style="color:#0063D1" id="nav1">Filter by Industry<img itemprop="image" src="//is.alicdn.com/images/cms/upload/cms/success_story/arrow.jpg" style="margin-left: 4px;vertical-align: middle;" alt="arrow"></a></div>
        </div>
      
    </div> -->
     <div class="tab-content">
    <div class="col-md-12 col-sm-12 tab-pane fade in active" id="gold-supplier"> 
      <div class="col-sm-12 col-md-12">
            <div class="col-md-1">
            <img itemprop="image" class="stroris-man" src="{!! asset('assets/fontend/bdtdc-images/shamol.jpg',is_secured()) !!}" alt="traing1">
      </div>
       <div class="col-md-8">
                    <p ><span  style="float:left; font-size: 12px; text-align: justify; color: #333; margin-top: 15px; padding: 0; padding-left: 20px;" href="">
                   “We initially joined BuyerSeller.asia as a free member but just got few inquiries a month,” stated Mr. Shamal. “I understood that buyers from all around the globe were more happy doing business with Suppliers of Gold Membership as they have been verified by a third-party security service provider as real and genuine suppliers. That is the reason behind upgrading to Gold Membership.”

Mr. Shamal states that they are currently doing extraordinary business because of BuyerSeller.asia. "We get a great deal of inquiries from all around the globe, comprising the USA, Canada, Australia etc.," he stated. "A number of these inquiries have been changed into genuine orders, and a numerous of them are currently under negotiation. BuyerSeller is truly the key to our success!” </span></p>
                  
                   
        </div>
          <div class="col-md-3">
             <div class="desh">
                    <p>Mr. Shoraf Uddin Shamal, CEO</p>
                    <p><span style="padding-right: 12px;">Bangladesh</span><img itemprop="image"  src="{!! asset('assets/fontend/bdtdc-images/flag-Bangladesh.gif',is_secured()) !!}" alt="traing1"></p>
                    <p>Industry: Garments</p>
              </div> 
          </div>

      </div>
  <div class="col-sm-12 col-md-12">
              <div class="col-md-1 col-sm-1">
            <img itemprop="image" class="stroris-man" src="{!! asset('assets/fontend/bdtdc-images/Virendra.jpg',is_secured()) !!}" alt="traing1">
      </div>
       <div class="col-md-8 col-sm-8">
                    <p ><span  style="float:left; font-size: 12px; text-align: justify; color: #333; margin-top: 15px; padding: 0; padding-left: 20px; " href="">
                      This organization is registered and it began doing business in 2014.

We possess 5 years’ of experience within the jewelry business and possess an experienced 10-man squad.

I am getting 100% exportation business via BuyerSeller.asia, I registered my organization 2 years back and on a month to month basis, we get 4 to 5 orders.

I began from an exceptionally scratch level. BuyerSeller has granted me the chance to exhibit my jewelry to third world. I am 100% exporter and my firm is renowned all through the world for Silver Jewelry as a result of BuyerSeller.asia

My first priority is offering the best to best service and products with well-timed deliverance to my foreign customers. Me & My squad have offered such a great amount of time for operating on this platform BuyerSeller.asia. Frankly speaking, I got the outcomes.</span></p>
                  
                   
        </div>
          <div class="col-md-3 col-sm-3">
              <div class="desh">
                    <p>Virendra Singh Shekhawat</p>
                    <p><span style="padding-right: 12px;">Bangladesh</span><img itemprop="image"  src="{!! asset('assets/fontend/bdtdc-images/flag-Bangladesh.gif',is_secured()) !!}" alt="traing1"></p>
                    <p>Industry: Garments</p>
              </div> 
          </div>
      
      </div>
</div>
<div class="col-sm-12 col-md-12tab-pane fade" id="gold-buyer">
       <div class="col-sm-12 col-md-12">
              <div class="col-md-1 col-sm-1">
            <img itemprop="image" class="stroris-man" src="{!! asset('assets/fontend/bdtdc-images/stories-man2.jpg',is_secured()) !!}" alt="traing1">
      </div>
       <div class="col-md-8 col-sm-8">
                    <p ><a itemprop="url"  style="float:left; font-size: 12px; text-align: justify; color: #333; margin-top: 15px; padding: 0; padding-left: 20px; " href="">
                      “An E-commerce platform as a pool of business opportunities that improved the health of hundreds of customers”<br>
                      Health products by Sindhiya Enterprise that are unknown to many have gained worldwide acceptance by customers once they upgraded to Gold Supplier Membership… [Details]</a></p>
                  
                   
        </div>
          <div class="col-md-3 col-sm-3">
              <div class="desh">
                    <p>Sindhiya</p>
                    <p><span style="padding-right: 12px;">Bangladesh</span><img itemprop="image"  src="{!! asset('assets/fontend/bdtdc-images/flag-Bangladesh.gif',is_secured()) !!}" alt="traing1"></p>
                    <p>Industry: Health&Medical</p>
              </div> 
          </div>
      
      </div>
</div> 

</div>
</div>
  


<br>
@stop
  @section('scripts')
   <script type="text/javascript">
            $(document).ready(function(){
              $(".nav-tabs a").click(function(){
                  $(this).tab('show');
              });
          });
            
            </script>
  @stop