@extends('frontend.layouts.master-register')
    @section('page_css')
      <link property='stylesheet' href="{!! asset('css/for-suppliers/list-exhibit-sell.css',is_secured()) !!}" rel="stylesheet">
    @endsection
    @section('content')
    <div class="row" style="margin-bottom: 8px">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a" ><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('ServiceChannel/pages/for_buyer',35,is_secured())}}" class="top-path-li-a"><span itemprop="name">Help Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
      <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">List, Exhibit & sell</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    </div>
    <div class="row padding_0" style="background:#ffffff; margin-bottom:28px;border-bottom: 1px solid rgba(0,0,0,.1);">
            <div class="col-sm-12 padding_0" style="/*background:#91431E;*/">
                    <!--  <img itemprop="image" style="width:100%; max-height:400px; margin-top: 36px;" src="{!!asset('assets/fontend/img/Exhibition-Image-for-Home.jpg',is_secured())!!}" alt="Exhibition Image for Home" /> -->
                    <img itemprop="image" style="width:100%; max-height:400px; " src="{!!asset('assets/country-images/global-marketplace.png',is_secured())!!}" alt="Exhibition Image for Home" />
            </div>
            <div class="col-sm-12 padding_0" style=" /*background:#F5B041;background: #B03A2E; */ background:#249BD8;padding-bottom:20px;">
                            <div class="col-sm-4 ">
                                         <h3 class="market-title-h1" >Supplier Services</h3>
                                            <ul class="market-ul">
                                                <li class="market-ul-li">
                                                     <a itemprop="url" href="{{URL::to('SupplierChannel/pages/list_exhibit_sell',23,is_secured())}}">List, Exhibit and sell</a>
                                                </li>
                                                <li class="market-ul-li">
                                                    <a itemprop="url" href="{{URL::to('SupplierChannel/pages/marketing_website',24,is_secured())}}">Marketing Website</a>
                                                </li>
                                                <li class="market-ul-li">
                                                    <a itemprop="url" href="{{URL::to('SupplierChannel/pages/suppliers_memebership',30,is_secured())}}">Suppliers Membership</a>
                                                </li>
                                                <li class="market-ul-li">
                                                    <a itemprop="url" href="{{URL::to('SupplierChannel/pages/verified_supplier',32,is_secured())}}">Verified Supplier</a>
                                                </li>
                                                <li class="market-ul-li">
                                                    <a itemprop="url" href="{{URL::to('SupplierChannel/pages/learning_center',33,is_secured())}}">Learning Center</a>
                                                </li>
                                                <li class="market-ul-li">
                                                    <a itemprop="url" href="{{URL::to('SupplierChannel/pages/training_center',34,is_secured())}}">Training Center</a>
                                                </li>
                                            </ul>     
                            </div>
                            <div class="col-sm-8 ">
                                        <h3 class="market-title-h1"> Access to Buyers</h3>
                                    <div class="col-sm-12  padding_0">
                                        <div class="col-sm-6 padding_0">
                                                 <ul class="market-ul">
                                               <li class="market-ul-li">
                                                     <a itemprop="url" href="{{URL::to('BuyerChannel/pages/why_bdtdc',6,is_secured())}}">Why BuyerSeller</a>
                                                </li>
                                                <li class="market-ul-li">
                                                    <a itemprop="url" href="{{URL::to('BuyerChannel/pages/sustainable_manufacturing',7,is_secured())}}">Sustainable Manufacturing</a>
                                                </li>
                                                <li class="market-ul-li">
                                                    <a itemprop="url" href="{{URL::to('BuyerChannel/pages/meet_suppliers',13,is_secured())}}"> Meet Suppliers</a>
                                                </li>
                                               
                                                <li class="market-ul-li">
                                                    <a itemprop="url" href="{{URL::to('BuyerChannel/pages/accredited_suppliers',16,is_secured())}}">Accredited Suppliers</a>
                                                </li>
                                                <li class="market-ul-li">
                                                    <a itemprop="url" href="{{URL::to('BuyerChannel/pages/business_identity',17,is_secured())}}">Business Identity</a>
                                                </li>
                                                
                                               </ul>
                                 </div>
                            <div class="col-sm-6 padding_0">
                                 <ul class="market-ul">
                                        
                                            <li class="market-ul-li">
                                                <a itemprop="url" href="{{URL::to('BuyerChannel/pages/inspection_service',19,is_secured())}}">Inspection Service</a>
                                            </li>
                                          
                                            <li class="market-ul-li">
                                                <a itemprop="url" href="{{URL::to('BuyerChannel/pages/trade_answers',22,is_secured())}}">Trade Answers</a>
                                             </li>
                                    </ul>
                            </div>
                        </div>
            </div>
            </div>

            <div class="col-sm-12 padding_0" style="margin-top:28px;border: 1px solid #dcdcdc; */">
                    <div class="col-sm-3 padding_0 ">
                                <div class="video-area">
                                        <p class="video-des">Suppliers talk about how BuyerSeller has helped their businesses grow.</p>
                                        <label  class="video-name">Cliff Knitwear Co.,Ltd</label>
                                         <label  class="video-name">Zhuhai Satow Electronic Co.Ltd</label>
                                        <div class="video-img">
                                            <iframe class="video-img-vimg" onclick="changeSize()" src="https://www.youtube.com/embed/fMNKtrdTW6o"></iframe>
                                        </div>
                                         <label  class="video-name">Kennede Electronics MRG. Co.Ltd</label>
                                        <div class="video-img">
                                            <iframe class="video-img-vimg" onclick="changeSize()" src="https://www.youtube.com/embed/yPI7P7zai0o" ></iframe>
                                        </div>
                                        <label  class="video-name">Kitsen Metal & plastic Products Co.Ltd</label>
                                        <div class="video-img">
                                            <iframe class="video-img-vimg" onclick="changeSize()" src="https://www.youtube.com/embed/gdaqfQnw2Hg" ></iframe>
                                        </div>
                                </div>
                    </div>
                    <div class="col-sm-9 padding_0 ">
                            <div class="col-md-12" style="border-left: 1px solid rgba(0,0,0,.1);">
                                   <h3 class="sell-heading" style="padding: 10px 0;">Millions of qualified buyers are waiting for your products. Sell them

now for FREE</h3>
        <p class="sell-cont-p" style="text-align:justify;">Your products are contemporary, innovative to the marketplace and are several times better than those produced by your competitors. They are as well priced low and great to use. But to become the leading supplier, you need to have the right means and way to induce them ahead of the

perfect patrons.</p>
        <div class="post-pay">
            <div class="post-btnnn">
                <label><a itemprop="url" href=" @if (Sentinel::check())
                    {{ URL::to('dashboard','product',is_secured()) }}
        @else
        {{URL::to('join',null,is_secured())}}
        @endif" style="color:#fff !important;">Post your products for FREE</a></label>
            </div>
            <div class="post-btnnn">
                
                 <label>
                   <a itemprop="url" href="{{URL::to('SupplierChannel/pages/verified_supplier',32,is_secured())}}" style="color:#fff !important;">
                        Pay to be verified supplier</a>
                    </label>
               
                
            </div>
            
        </div>
        <h3 class="sell-heading" style="padding-bottom:10px;">Grow your business with BuyerSeller.Asia.</h3>
        <p class="sell-cont-p" style="text-align:justify;">At <a itemprop="url" href="http://www.BuyerSeller.asia/" target="_blank"> BuyerSeller.Asia</a>, marketing and promoting your company along with its products to our large emptor group is absolutely free of cost. Manufacturers from around the world utilize services provided by BuyerSeller to showcase their merchandise and find their target buyers easily. Check out what few of them got to say concerning our valuable buyers.</p>
        
        <div class="sell-dess">
            <div class="cont-area">
                    <p class="sell-cont-p" style="padding-right:10px;text-align:justify;">“Becoming a member of BuyerSeller is worth it. It is the largest b2b platform in Bangladesh that made us developing a position in the world market. One of the great features of BuyerSeller.Asia is the seminars they hold, due to which we get a chance to meet buyers and learn a lot many things.”-- </p>
            <div class="designation">
                    <label  class="dd-h4">-- Sk Kutubuddin, Proprietor,</label>
                    <label  class="dd-h4"> Dhaka Trading Corporation</label>
                    
            </div>
                
            </div>
        
            <div class="cont-area">
                    <p class="sell-cont-p" style="padding-right:10px;text-align:justify;">“BuyerSeller helped us get exposed to the international market which ensures that we do not need to be necessarily present there physically. As a result, professional buyers can now reach us easily and quickly. We receive orders through e-mail, which helped us save time. We got our first international buyers enquiry by BuyerSeller.Asia.”-- </p>
            <div class="designation">
                    <label  class="dd-h4">Mr. Gazi Raffan, Head of Sourcing, QUINTOS</label>
                    
            </div>
                
            </div>
            <div class="cont-area">
                    <p class="sell-cont-p" style="padding-right:10px;text-align:justify;">“At the beginning, it was very tough for me to promote my business. Buyers didn’t know my name, and I didn’t know how to export. Then BuyerSeller came into existence. With its and the Almighty’s help, it wouldn’t have been possible for me to establish a fruitful relationship with buyers. Thanks to BuyerSeller” </p>
            <div class="designation">
                    <label  class="dd-h4">Mr. K.M. Ahmed Shaheen, CEO</label>
                    <label  class="dd-h4">Tower Trade International</label>
                    
            </div>
                
            </div>
            <div class="cont-area">
                    <p class="sell-cont-p" style="padding-right:10px;text-align:justify;">“BuyerSeller has a huge network. With its latest update on market trends, we managed many

reliable customers and would like to explore more with it.” </p>
            <div class="designation">
                    <label  class="dd-h4">Mizanur Rahman,</label>
                     <label  class="dd-h4">Classic Emporium</label>
            </div>
                
            </div>
                                <div class="cont-area" style="width:100%">
                             <h3 class="sell-heading" style="padding-top:7%;border-bottom:0 none;">Clients looking for new products land on BuyerSeller.Asia for their need. Represent your company to them.</h3>
                             <p class="sell-cont-p" >
                                 BuyerSeller is a huge data bank for major buyers when looking for the right seller. Currently, our huge condominium of buyers name includes world’s top companies: Kmart Australia, Wal-Mart,Target, Carrefour, IKEA, Canadian Tire and others. They enrich the sales for a lot of our suppliers and can also be a treasure for you too.
                                 We provide a cutting edge tool for your business, a huge pool of serious buyers to market your products. It’s a golden opportunity that can’t be missed out!
                             </p>
                        
                    </div>
            <div class="cont-area" style="width:100%">
                     <h3 class="sell-heading" style="padding-top:4%;border-bottom:0 none;">Compliments to our suppliers on behalf of our buyers</h3>
                     <p class="sell-cont-p" >“The services you provide are really worth praising about. Without your presence, it wouldn’t have been possible to find a good supplier to deal with.”</p>
                        <div class="designation">
                                <label  class="dd-h4" style="font-size:14px; font-weight:normal;">Mr Han, Shenzhen Hasee Computer Co., Ltd.</label>
                                
                                
                        </div>
                            
                        </div>
                        <div class="cont-area" style="width:100%">
                                <p class="sell-cont-p" style="padding-right:10px;">“I’ve found a place where I can depend upon and represent my needs. Your website is terrific and you indeed have a huge backup from a lot of manufacturer. I received an excellent service from you and I would like to thank for this.”--</p>
                        <div class="designation">
                                <label  class="dd-h4" style="font-size:14px; font-weight:normal;">Ms Xu, Shenzhen Golden Epoch Digital Technology Co., Ltd.</label>
                                
                        </div>
                            
                        </div>
                         <div class="cont-area" style="width:100%">
                                <p class="sell-cont-p" style="padding-right:10px;">“This website is the leading among other b2b portals. I believe it will reach a great height very soon. You all are doing a great job. We have been sourcing quiet well using BuyerSeller.asia. Many suppliers from BuyerSeller.Asia are now my business partners.”--</p>
                        <div class="designation">
                                <label  class="dd-h4" style="font-size:14px; font-weight:normal;">Mr. Sunil Vasudev Dave,Vasudev Hargovind Overseas</label>
                                
                        </div>
                            
                        </div>
                        <div class="cont-area" style="width:100%">
                                <p class="sell-cont-p" style="padding-right:10px;">“BuyerSeller is very logically designed and is user friendly. One word for BuyerSeller.Asia will be simplified business. We are more confident to find good sellers here, who respond effectively.”--</p>
                        <div class="designation">
                                <label  class="dd-h4" style="font-size:14px; font-weight:normal;">- Mr. Sachin Dhiman, Standard Steel</label>
                                
                        </div>
                            
                        </div>
                        <div class="cont-area" style="width:100%">
                                <p class="sell-cont-p" style="padding-right:10px;">“It’s been a huge help to us as we were able to quote easy and faster to many suppliers for our products. With the help of BuyerSeller buyers’ protection service, it has been possible to quote without any issue and worries. I feel relieved as there are no worries about finding a supplier, or anything concerned with payment. Good luck BuyerSeller."</p>
                        <div class="designation">
                                <label  class="dd-h4" style="font-size:14px; font-weight:normal;">Mr. M. M.Azmat Hossain, Arbab Polypack Ltd.</label>
                                
                        </div>
                            
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@stop
