@extends('fontend.master3')
@section('content')
<div class="row">
   <div class="col-sm-12 col-md-12 col-lg-12">
      <ul class="top-path" style="padding-bottom: 8px;">
         <li class="top-path-li"><a href="{{ URL::to('/') }}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
         <li class="top-path-li"><a href="{{ URL::to('goldsupplier') }}" class="top-path-li-a">Gold Supplier<i class="fa fa-angle-right top-path-icon"></i></a></li>

      </ul>
   </div>

</div>
<div class="row padding_0">
   <div class="col-sm-12 col-md-12 padding_0">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" style="border-radius:10px !important; border:0 none;" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" style="border-radius:10px !important; border:0 none;" class="active"></li>

         </ol>
         <div class="carousel-inner" role="listbox">
            <div class="item">
               <img style="height:350px;max-height:350px;width:100%;margin-left: -1px;" src="{!!asset('assets/fontend/bdtdc-images/g-s_banner1.jpg',is_secured())!!}" alt="Gold supplier">
               <div class="carousel-caption" style="width: 24%;left: 44%;padding: 10px 18px;top: 8.2%;right: 0 !important;bottom: inherit;zoom: 1; margin-left: 38%;">


               </div>
            </div>


            <div class="item">
               <img style="height:350px;max-height:350px;width:100%;margin-left: -1px;" src="{!!asset('assets/fontend/bdtdc-images/g-s_banner3.jpg',is_secured())!!}" alt="Gold supplier">
               <div class="carousel-caption" style="width: 24%;left: 44%;padding: 10px 18px;top: 8.2%;right: 0 !important;bottom: inherit;zoom: 1;margin-left: 38%;">


               </div>
            </div>

            <div class="item active">
               <img style="height:350px;max-height:350px;width:100%;margin-left: -1px;" src="{!!asset('assets/fontend/bdtdc-images/gold-supp-banner3.jpg',is_secured())!!}" alt="Gold supplier">
               <div class="carousel-caption" style="width: 24%;left: 44%;padding: 10px 18px;top: 8.2%;right: 0 !important;bottom: inherit;zoom: 1;margin-left: 38%;">


               </div>
            </div>

         </div>
         <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			               <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
         <span class="sr-only">Previous</span>

         <!-- <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			                <!--  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
         <span class="sr-only">Next</span>

      </div>
   </div>
</div>
</div>


<div class="container-fluid" id="menu-bar-fix">
   <nav class="navbar navbar-inverse navbar-fixed-top" id="gold-top-nav" style="border-bottom:0 none;">
      <div>
         <div class="collapse navbar-collapse" id="myNavbar" style="width:100%;background:#E1E1E1;">
            <div class="container">
               <ul class="nav navbar-nav">
                  <!--  <li class="top-nav-inner-li"><a href="#gold-1" class="top-nav-inner-h1-a"></a></li> -->
                  <li class="top-nav-inner-li"><a href="#gold-1"><span><img height="30" width="30" src="{!!asset('assets/fontend/bdtdc-images/gold_supplier20120817.jpg',is_secured())!!}" alt="Gold supplier">Gold Supplier</span></a></li>
                  <li class="top-nav-inner-li"><a href="#gold-2">How it works</a></li>
                  <li class="top-nav-inner-li"><a href="#gold-3">Success Stories</a></li>
                  <li class="top-nav-inner-li"><a href="#gold-4">Partners</a></li>
                  <li class="top-nav-inner-li"><a href="#gold-5">Support</a></li>
               </ul>
            </div>
         </div>
      </div>
   </nav>
</div>

<div class="container">
   <div class="row padding_0">
      <div class="gray-box-content" id="gold-2">
         <div class="col-sm-12 col-md-12 col-lg-12 padding_0 how-it-works">
            <div class="col-sm-3 col-md-3" style="width:20%;">
               <div class="fn-left" style="width:100%;">
                  <img style="width:100%;" src="{!!asset('assets/fontend/bdtdc-images/gold_supplier20120802.jpg',is_secured())!!}" alt="Gold supplier">
               </div>
            </div>
            <div class="col-sm-9 col-md-9">
               <div class="work-text">
                  <h2>How it works</h2>
                  <div class="work-content">
                     <p class="work-content-p">Gold Supplier is BuyerSeller highest and most premium level of membership that helps maximize your
                        company's exposure and business opportunities.</p>
                     <p class="work-content-p">As a Gold Supplier Member, you can generate more inquiries than a free member. Gold Supplier Membership can
                        also benefit your business by providing you with easy-to-use online tools, exclusive training and customer
                        support. Seize this opportunity to meet millions of buyers worldwide.</p>
                  </div>

               </div>

            </div>
         </div>
      </div>
   </div>
   <div class="row padding_0">
      <div class="col-sm-12 col-md-12 gold-list-item">
         <h2 style="padding-left:15px;">Effective Business Tools</h2>
         <div class="col-sm-4 col-md-4" style="height:340px;">
            <h3 class="gray-box-content-h3">Sub-Accounts</h3>
            <div style="height:150px;">
               <img src="{!!asset('assets/fontend/bdtdc-images/sub_accountx.jpg',is_secured())!!}" alt="Gold supplier">
            </div>
            <p class="work-content-p">5 sub-accounts come with each Gold Supplier Membership and can be assigned to different people. This allows
               you to assign different customer inquiries to different people, as well as monitor the performance of each
               sub-account.</p>

         </div>
         <div class="col-sm-4 col-md-4" style="height:340px;">
            <h3 class="gray-box-content-h3">Chat with Buyers

            </h3>
            <div style="height:150px;">
               <img src="{!!asset('assets/fontend/bdtdc-images/chat_with_buyersx.jpg',is_secured())!!}" alt="Gold supplier">
            </div>
            <p class="work-content-p">Get in touch with buyers instantly using TradeManager, BuyerSeller built-in instant messaging tool. Send quotations and responses in real time to close deals faster.</p>
         </div>
         <div class="col-sm-4 col-md-4" style="height:340px;">
            <h3 class="gray-box-content-h3">Buying Requests</h3>
            <div style="height:150px;">
               <img src="{!!asset('assets/fontend/bdtdc-images/buyering_leadsx.jpg',is_secured())!!}" alt="Gold supplier">
            </div>
            <p class="work-content-p">Gold Suppliers can contact buyers immediately when a new buying lead is posted. Gold Suppliers also have exclusive access to buyers' contact information.</p>

         </div>
      </div>
      <div class="col-sm-12 col-md-12 gold-list-item" style="clear:both;">
         <h2 style="padding-left:15px;">Maximum Company Exposure</h2>
         <div class="col-sm-8 col-md-8" style="padding-top:20px;">
            <h3 class="gray-box-content-h3">Top-Tier Priority Listings</h3>
            <p></p>
            <div class="text-main-gg" style="max-width:580px;">
               When buyer search for products on BuyerSeller, the products of Gold Suppliers will have better chances to
               appear at the top of search results. This gives Gold Supplier products maximum exposure and significantly
               increases the likelihood of Gold Supplier receiving a product inquiry from a buyer.
            </div>
         </div>
         <div class="col-sm-4 col-md-4" style="margin-top:-40px; padding-left:48px; display:block; float:left;">
            <img style="width:100%;" src="{!!asset('assets/fontend/bdtdc-images/pic20120810.jpg',is_secured())!!}" alt="Gold supplier">
         </div>
      </div>
      <div class="col-sm-12 col-md-12 gold-list-item">
         <div class="col-sm-4 col-md-4">
            <h3 class="gray-box-content-h3">Tradeshow Promotion</h3>
            <p class="work-content-p">Showcase your company and products in BuyerSeller's sourcing directories, and get targeted exposure in major tradeshow, while saving expensive travel costs.</p>
            <div style="padding-top:20px; width:100%;">
               <img style="width:340px; height:220px;" src="{!!asset('assets/fontend/bdtdc-images/Pages-Dubai-UAE.jpg',is_secured())!!}" alt="Gold supplier">
            </div>

         </div>
         <div class="col-sm-4 col-md-4">
            <h3 class="gray-box-content-h3">Product Showcase</h3>
            <p class="work-content-p">Showcase key products in your online storefront,which creates a powerful,visual impact on the buyer.
               Get about 8 times more buyer clicks from here!</p>
            <div style="padding-top:20px; width:100%;">
               <img style="width:340px; height:200px;" src="{!!asset('assets/fontend/bdtdc-images/shopping-online.png',is_secured())!!}" alt="Gold supplier">
            </div>
         </div>
         <div class="col-sm-4 col-md-4">
            <h3 class="gray-box-content-h3">Real-Time Performance Analysis</h3>
            <p class="work-content-p">Biz Trends gives you real-time reports of your performance.It also gives you suggestions on how to improve your business strategy on BuyerSeller in order to maximize your online exposure and return on investment.</p>
            <div style="padding-top:20px; width:100%;">
               <img style="width:340px; height:180px;" src="{!!asset('assets/fontend/bdtdc-images/online-shopping-vs-brick-mortar.jpg',is_secured())!!}" alt="Gold supplier">
            </div>
         </div>
      </div>
      <div class="col-sm-12 col-md-12 gold-list-item">
         <h2>Exclusive Access to Buyers and Gain their Trust Faster</h2>
         <p class="work-content-p">Be the first to contact buyers with exclusive access to all Buying requests, and buyers' contact details only
            available go Gold Suppliers. Increase buyer confidence with a verified company profile, as over 85% of buyers
            prefer to do business with verified suppliers only. All Gold Supplier Members on BuyerSeller must complete an <a href="//seller.BuyerSeller/memberships/ggs/avprocess.html">Authentication and Verification</a> process by a
            third-party security service provider before qualifying as a Premium Member, this additional security measure
            helps supplier to gain immediate trust as a legitimate and serious trading partner.</p>
         <div style="padding-top:20px;">
            <img style="width:100%;" src="{!!asset('assets/fontend/bdtdc-images/quation236.jpg',is_secured())!!}" alt="Gold supplier">
         </div>

      </div>
      <div class="col-sm-12 col-md-12 gold-list-item">
         <h2 style="padding-left:15px;">Dedicated Customer Care Program</h2>
         <div class="col-sm-8 col-md-8">
            <div style="padding-top:20px;">
               <h3>Customized Sourcing</h3>
               <p>
               </p>
               <div class="text-main-gg">
                  Customized Sourcing is a free service, to help Gold Suppliers and buyers find each other more effectively.
                  Bdtdc Industry Specialists will analyze and filter buyer RFQs, then send high-quality RFQs only to qualified
                  Gold Suppliers, along with a guide on how to draft a quotation.
               </div>


               <p></p>
            </div>
         </div>
         <div class="col-sm-4 col-md-4">
            <div class="img-aside" style="padding-top:0px;padding-left: 30px;">
               <img src="{!!asset('assets/fontend/bdtdc-images/pic20120815.png',is_secured())!!}">
            </div>
            <div class="clearfix"></div>
         </div>

      </div>
      <div class="col-sm-12 col-md-12 gold-list-item">
         <div class="col-sm-4 col-md-4">
            <h3 class="gray-box-content-h3">VIP Service</h3>
            <p class="work-content-p">Dedicated Customer Service Specialist to help help guiding Gold Supplier to use their membership features more efficiently.</p>
            <div style="padding-top:20px; width:100%;">
               <img style="width:340px; height:220px;" src="{!!asset('assets/fontend/bdtdc-images/pic20120816.jpg',is_secured())!!}" alt="Gold supplier">
            </div>

         </div>
         <div class="col-sm-4 col-md-4">
            <h3 class="gray-box-content-h3">Customer Care</h3>
            <p class="work-content-p">Regular detailed tracking reports keep customers updated on their storefront performance, to provide professional suggestions and solutions to help you selling more.</p>

         </div>
         <div class="col-sm-4 col-md-4">
            <h3 class="gray-box-content-h3">Real-Time Performance Analysis</h3>
            <p class="work-content-p">Biz Trends gives you real-time reports of your performance.It also gives you suggestions on how to improve your business strategy on BuyerSeller in order to maximize your online exposure and return on investment.</p>
            <div style="padding-top:20px; width:100%;">
               <img style="width:340px; height:180px;" src="{!!asset('assets/fontend/bdtdc-images/pic20120813.png',is_secured())!!}" alt="Gold supplier">
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid padding_0">

   <div class="gray-box" id="gold-3">
      <div class="container">
         <div class="row padding_0">
            <div class="gray-box-content" id="success-stories">

               <h2>Success Stories</h2>
               <p>BuyerSeller is the proven choice for global e-commerce platform for small business. Customers from all kinds of
                  industries, trust Bdtdc as their online marketplace. </p>
               <p>Read our customer success stories to find out how small businesses around the world benefit from BuyerSeller</p>
               <div class=" col-sm-12 col-md-12 story-list padding_0">
                  <div class="col-sm-6 col-md-6">
                     <div class="story-card">
                        <div class="img-aside">
                           <img src="//img.alicdn.com/tps/i2/TB19OjALpXXXXXtXpXXmLzfGpXX-137-150.jpg">
                        </div>
                        <div class="story-text">
                           <h3> E-commerce opens up the gateway for Quiko to reach the emerging markets in their industry</h3>
                           <p>Mr. Luca Borinato </p>
                           <p>Quiko Italy Sas Di Borinato Luca</p>
                           <p>Italy </p>
                           <p> Gold Supplier member since 2007 </p>
                           <div class="full-story"><a href="//news.BuyerSeller/article/detail/emea-member-success-story-emea-success-story-seller-success-story-italy-success-story-machinery-gold-supplier/100426681-1-e-commerce-opens-up-gateway-quiko.html" target="_blank">Full story</a></div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                     <div class="story-card">
                        <div class="img-aside">
                           <img src="//is.alicdn.com/images/cms/upload/ggs/assets/9/ss14_2.jpg">
                        </div>
                        <div class="story-text">
                           <h3>E-commerce helped a home-base business to grow into a factory with over 200 workers</h3>
                           <p>Mr. Waseem Qaisar</p>
                           <p>Shoo Industries </p>
                           <p>Pakistan</p>
                           <p>Gold Supplier Member since 2005</p>
                           <div class="full-story"><a href="//news.BuyerSeller/article/detail/apac-member/100985974-1-e-commerce-helped-home-base-business-grow.html" target="_blank">Full story</a></div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
               <div class=" col-sm-12 col-md-12 story-list">
                  <div class="col-sm-6 col-md-6">
                     <div class="story-card">
                        <div class="img-aside">
                           <img src="//img.alicdn.com/tps/i1/TB1d1HfLpXXXXc0XVXXmLzfGpXX-137-150.jpg">
                        </div>
                        <div class="story-text">
                           <h3> BuyerSeller is like the key to unlock my company’s hidden potential</h3>
                           <p>Mr. Alvaro Galan</p>
                           <p> Global Asia Systems S. L.</p>
                           <p>Spain</p>
                           <p>Gold Supplier Member since 2013</p>
                           <div class="full-story"><a href="//news.BuyerSeller/article/detail/emea-member-success-story-member-success-story-emea-success-story-seller-success-story-spain-success-story-agriculture-trading-gold-supplier/101005195-1-BuyerSeller-like-key-unlock-my.html" target="_blank">Full story</a></div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                     <div class="story-card">
                        <div class="img-aside">
                           <img src="//is.alicdn.com/images/cms/upload/ggs/assets/9/ss14_4.jpg">
                        </div>
                        <div class="story-text">
                           <h3>We are now a 7-year Gold Supplier member and hoping to grow with the platform as long as we could</h3>
                           <p>Mr. Andre Peters</p>
                           <p>Peters International Trading Association (PITA)</p>
                           <p>Netherlands</p>
                           <p>Gold Supplier Member since 2006</p>
                           <div class="full-story"><a href="//news.BuyerSeller/article/detail/apac-member/100896733-1-we-now-7-year-gold-supplier.html" target="_blank">Full story</a></div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <div class="clearfix"></div>
                  </div>
                  <div class="more-stories">
                     <a href="//news.BuyerSeller/success/SuccessStory.htm" target="_blank">Read more stories</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>




   <div class="gray-box" id="gold-4">
      <div class="container">
         <div class="row padding_0">
            <div class="gray-box-content" id="success-stories">

               <h2>Partners</h2>
               <p>BuyerSeller provides its Partners with superior value,market differenttiation and sustainable revenue opportunities, with marketing and PR support that enable partners to maximize their contributions</p>
               <div class=" col-sm-12 col-md-12 story-list padding_0" style="border:1px solid #dddddd; border-top:0 none; padding:0;">

                  <ul class="partner-gg-region" id="asia-cnt">
                     <!-- <li class="active"><a data-toggle="tab" href="#home">Home</a></li> -->
                     <li class="active"><a data-toggle="tab" href="#india">India</a></li>
                     <li><a data-toggle="tab" href="#thailand">Thailand</a></li>
                     <li><a data-toggle="tab" href="#malaysia">Malaysia</a></li>
                     <li><a data-toggle="tab" href="#turkey">Turkey</a></li>
                     <li><a data-toggle="tab" href="#vietnam">Vietnam</a></li>
                     <li><a data-toggle="tab" href="#menu3">Indonesia</a></li>
                  </ul>

                  <div class="tab-content">

                     <div id="india" class="tab-pane fade in active">
                        <div class="partner-info">
                           <p><img src="//img.alicdn.com/tps/i4/TB1FO9bJVXXXXclXpXXvYJeHXXX-200-35.png"></p>
                           <p style="padding:20px 0;">Redington, commencing its Indian operations in 1993, is today positioned as the
                              largest Supply Chain Solution Provider in emerging markets. As a group, Redington is present in India,
                              Middle East, Africa, Turkey, Srilanka, Bangladesh and CIS countries.<br><br>
                              Redington provides end-to-end supply chain solutions for all categories of Information Technology products
                              (PCs, PC building blocks, networking, software and enterprise solution products) and Consumer and Lifestyle
                              products (Telecom, Digital Lifestyle products, Entertainment products and Digital Printing Machines) to over
                              100 international brands and relationship with major brands have been for years.<br><br>
                              With its corporate office in Chennai, Redington along with its subsidiaries both in India and overseas has
                              90 Sales locations, 110 warehouses and 101 own service centres and 239 partner centers. Globally, a team
                              comprising of over 6,300 highly skilled and committed professionals helps the Company deliver its products
                              and services to every corner of the countries in which it has presence. The team is supported by robust IT
                              &amp; Communication infrastructure connecting all the locations of the company and a state of the art ERP
                              and e-commerce back bone.<br><br>
                              Redington has built its business on very strong ethical and commercial fundamentals which enabled to firmly
                              establish it as the "partner of choice" with most of its vendors and business partners.

                           </p>
                        </div>

                     </div>
                     <div id="thailand" class="tab-pane fade">
                        <div class="partner-info">
                           <p><img src="//img.alicdn.com/tps/i3/TB1IB2VHpXXXXbyXXXXdyPlLpXX-272-43.png"></p>
                           <p style="padding:20px 0;">
                              ReadyPlanet ,founded in 2000 as the first Thailand's Do-it-yourself website provider, is the leading
                              results-oriented online marketing company. ReadyPlanet provides various online marketing and E-Commerce
                              services to more than 16,000 businesses including web presence, online marketing &amp; advertising and
                              digital marketing training.
                              <br><br>
                              Since April 2015, ReadyPlanet becomes the first BuyerSeller's authorized reseller in Thailand.
                           </p>
                           <p>Contact Person: Mr. Burin Kledmanee</p>
                           <p>Company Name : ReadyPlanet Co., Ltd.</p>
                           <p>Tel : +662-016-6789</p>
                           <p>Email: <a href="mailto:burin@readyplanet.com">burin@readyplanet.com</a></p>
                           <p>Website: <a href="http://www.readyplanet.com" target="_blank">http://www.readyplanet.com</a></p>
                           <p>Company Address: 89 AIA Capital Center, 7th Floor, Unit 701 - 705, Ratchadapisek Road, Dindaeng, Bangkok
                              10400</p>
                           <hr style=" border-top:1px solid #cccccc;width:100%;margin:100px 0;">
                        </div>
                     </div>
                     <div id="malaysia" class="tab-pane fade">
                        <div class="partner-info">
                           <p><img src="//img.alicdn.com/tps/i1/TB1B9ddFVXXXXaDXpXXOoHLJpXX-240-52.png"></p>
                           <p style="padding:20px 0;">Panpages Online Sdn Bhd was established in 1989 and has 20 years of vast experience
                              in the publishing industry. The company provides business information and advertising services targeted
                              towards Asia through its two main product offerings: print products including Super Pages, one of Malaysia's
                              leading business directories; and Internet marketing solutions which encompass web design, search engine
                              optimization, e-commerce solutions and email marketing.</p>
                           <p>Contact Person: Ms. Katie</p>
                           <p>Tel: +603 5636 9999 (ext 1184)&nbsp;&nbsp;Fax: +603 5635 0280</p>
                           <p>Mobile: +6018-661 6999</p>
                           <p>Email: <a href="mailto:katie@panpages.com">katie@panpages.com</a></p>
                           <p>Online Query:</p>
                           <p>No.1, Jalan PJS 11/8, Bandar Sunway 46150 Petaling Jaya, Selangor Darul Ehsan, Malaysia </p>
                           <hr style=" border-top:1px solid #cccccc;width:100%;margin:100px 0;">
                        </div>
                     </div>
                     <div id="turkey" class="tab-pane fade">
                        <div class="partner-info">
                           <p><img src="//img.alicdn.com/tps/i2/TB1sjwEKpXXXXalXVXX6N0uKpXX-253-45.jpg"></p>
                           <p style="padding:20px 0;">E-Glober was established in October 2015 to represent BuyerSeller as a channel
                              distributor, targeting incremental increase in foreign trade volume with its strong business relations in
                              Turkish market. With the strong reputation of BuyerSeller brand E-Glober) also focuses on value added
                              services in order to supply end to end solutions to subscribers in BuyerSeller environment enabling them to
                              become truly global.</p>
                           <p>Contact Person: Mr. Orkan Aytulun</p>
                           <p>Tel: +90 212 7096964</p>
                           <p>Company Address: <img src="https://img.alicdn.com/tps/TB1SaCLKpXXXXa5XVXXXXXXXXXX-880-48.png" height="24">
                           </p>

                        </div>
                     </div>
                     <div id="vietnam" class="tab-pane fade">
                        <div class="partner-info">
                           <p><img src="//is.alicdn.com/images/eng/ggs/partners/osb_logo.gif"></p>
                           <p style="padding:20px 0;">OSB Investment and Technology Joint Stock Company, founded in 2007, is Vietnam's
                              leading e-commerce service provider. As the First Authorized Reseller of Bdtdc in Vietnam (since June,
                              2009), we have extensive experience in Internet marketing solutions including web design, search engine
                              optimization, e-commerce solutions and importer search. OSB also operates in the key sectors of e-commerce
                              services and solutions, information technology, as well as satellite and wireless communication.<br>

                              Having rich experience during the partnership with Bdtdc since 2009, we always try our best to help as
                              many Vietnamese exporters as possible to penetrate into global market successfully according to our slogan:
                              “your success is our success”. Not only Gold Suppliers but also other Vietnamese members on BuyerSeller
                              highly appreciate our professional customer care, consultancy and value-added service as well as the
                              immediate and effective support we provide.<br>
                              With the aim to “make the best become better”, we believe to help more and more Vietnamese exporters to
                              expand markets and bring more Vietnam products to the world through BuyerSeller.
                           </p>
                           <p>Contact Person: Mr. Orkan Aytulun</p>
                           <p>Tel: +90 212 7096964</p>
                           <p>Company Address: <img src="https://img.alicdn.com/tps/TB1SaCLKpXXXXa5XVXXXXXXXXXX-880-48.png" height="24">
                           </p>

                        </div>
                     </div>
                  </div>

               </div>


            </div>
         </div>
      </div>
   </div>
</div>
</div>
<div class="container">

@stop
@section('scripts')
<script type="text/javascript">
	var num = 500; //number of pixels before modifying styles

	$(window).bind('scroll', function() {
	   if ($(window).scrollTop() > num) {
	      $('#myNavbar').addClass('ui-menu-fixed');
	   } else {
	      $('#myNavbar').removeClass('ui-menu-fixed');
	   }
	});

	$(document).ready(function() {
	   $('body').scrollspy({
	      target: ".navbar",
	      offset: 50
	   });
	   $("#myNavbar a").on('click', function(event) {
	      if (this.hash !== "") {
	         event.preventDefault();
	         var hash = this.hash;
	         $('html, body').animate({
	            scrollTop: $(hash).offset().top
	         }, 800, function() {
	            window.location.hash = hash;
	         });
	      }
	   });
	});
</script>
@stop