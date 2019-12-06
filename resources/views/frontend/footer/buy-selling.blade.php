@extends('frontend.layouts.master-register')
@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/media-room-style.css',is_secured()) !!}" rel="stylesheet">
    @endsection
@section('content')
<div class="row" style="padding-bottom: 13px">
  			<div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="top-path" itemscope itemtype="http://schema.org/BreadcrumbList">
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('ServiceChannel/pages/for_buyer',35,is_secured())}}" class="top-path-li-a"><span itemprop="name">Help Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('SupplierChannel/pages/training_center',34),is_secured()}}" class="top-path-li-a"><span itemprop="name">Training Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('online/Buy_selleing'),is_secured()}}" class="top-path-li-a"><span itemprop="name">Why Buy and sell Online</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
              
            </ul>
        </div>
  	
  </div>
  <div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 20px;">
			<div class="col-sm-12 col-md-12">
					<div class="col-sm-3 col-md-3 col-lg-3">
								<ul class="col-sm-12" style="padding-left:15px; padding-top: 25px;">
					                <li class="policy-list" style="">
					                  <a  itemprop="url" href="{{URL::to('Buyer/Training'),is_secured()}}" class="policy-list-a">Understand International Buyers</a>
					                </li>
					                <li class="policy-list" style="">
					                  <a  itemprop="url" href="{{URL::to('online/Buy_selleing'),is_secured()}}" target="_blank" class="policy-list-a">Why Buy & Sell Online</a>
					                </li>
					                <li class="policy-list"  style="">
					                  <a itemprop="url" href="{{ URL::to('supplemental/service') }}" target="_blank" class="policy-list-a">
					                  Setting Company Profile</a>
					                </li>
					                 <li class="policy-list"  style="">
					                  <a  itemprop="url" href="{{ URL::to('buying-request')}}" target="_blank" class="policy-list-a">
					                  Improve Product Search Ranking</a>
					                </li>
			
					                </ul>
					</div>
					<div class="col-sm-9 col-md-9 col-lg-9">
							<h3 class="training-pp" style="font-size: 20px; color: #000; font-weight: bold; padding-top: 3%;">Why Buy and sell Online </h3>
							<p class="training-pp">There are many good reasons for selling your products or services online. Most clearly, selling online increases your market reach and creates opportunities to increase your overall sales revenues. This page explores the opportunities and challenges of selling online. There are numerous motivations for adopting online sales ranging from increasing market reach, adding new products, competitive advantage and more.
							</p>
							<h3 class="training-pp" style="font-size: 20px; color: #000; font-weight: bold; padding-top: 3%;">The BIG reason</h3>
							<p class="training-pp">
								The world of research, review, sharing, buying is increasingly moving online. Allowing for online sales captures this market shift. Studies have demonstrated a much higher rate of return on companies investment in online search-based marketing over traditional “outbound” marketing and sales because the customers are already converted, they want the product they just need to decide who to buy it from and will spend the time to research the best options online. If your company is not online you will miss this entire market share and opportunity to optimize marketing, sales and business operations.
							</p>
							<p class="training-pp">
								In addition to accessing a global marketplace, your website enabled for online sales can take orders and process purchases 24/7 365 days per year from virtually anywhere in the world.
							</p>
							<h3 class="training-pp" style="font-size: 20px; color: #000; font-weight: bold; padding-top: 3%;">What are the top 5 motivations for adopting online sales?</h3>
								<h4 class="traing-h4">Improve market reach</h4>
							<P class="training-pp"><span style="color: #000;font-weight: 900;">Beyond borders:</span> Selling online allows vendors to reach customers outside of their town, state, even country which increases the population of possible customers. </P> 

<p class="training-pp"><span style="color: #000;font-weight: 900;">After hour’s shoppers:</span> This group is commonly forgotten. If your company’s current hours are 9 a.m.-5 p.m. you may be missing out on customers in your region who cannot easily shop during regular business hours. Counting on customers to wait until they can make it into your store vs. buying online when it is convenient is not safe bet.
<span style="color: #000;font-weight: 900;">Vendors/partners/agents</span> that demand online interfaces: if your company wants to break into more channels many buyers and agents now want access to an online portal as it saves them time and provides better customer service. 
					</p>
					<h4 class="traing-h4">Increase product diversity</h4>
					<p class="training-pp"><span style="color: #000;font-weight: 900;">Add new products:</span>. selling online can include taking some or all of current stock and selling it online. However, you may also choose to add new products that are optimized for online sales.</p>
<p><span style="color: #000;font-weight: 900;">Why?</span> These products may have a better ROI  for online sales, and they may be a good up sell for current product inventory.</p>
					<h4 class="traing-h4">Competition</h4>
					<p class="training-pp">Danger of status quo: If other companies are sharing product availability, making bookings, and closing product sales online they are capturing customers that could be yours. If you are not online you are not competing with this growing sales channel.</p>

<p class="training-pp">Niche away: Competing with big box stores online can be a pricing challenge. Focusing on niches or specialty items where your company can stand apart adds value and increases your competitive advantage.</p>
<h4 class="traing-h4">Customer service</h4>
<p class="training-pp">Give customers what they want when they want it: Make sure they have the information they need and the ability to buy online. Customers are shopping at all hours, both from their computer and increasingly on mobile devices. They want to know about product details and your website and online store can serve them when your main store is closed (regular hours), staff is busy, etc.  Online forms can capture customer information based on the customer input which save your administration time and allows customers to share the level of information they need to gain an optimal experience. </p>

<p class="training-pp">Data: by tracking what customers have ordered before, viewed, liked, etc. your online sales system (or in store staff using a connected CRM) can offer more customized sales experience and/or up-sell additional products.</p>
<h4>Save time/money</h4> 
<p class="training-pp">Save administration time and re invest it: Allowing customers to buy online saves time. Take a tourism product as an example: without online sales clients have to call about availability, requirements, prices, etc. Just offering availability online can save companies a lot of time if, for example the average call for availability can last 5-10 minutes and occur hundreds of times. More importantly the customer may choose to skip a company that does not offer this level of information online and move onto the next company in the search results.</p> 

<p class="training-pp">Real time data tracking: Can save expensive inventory stocking, conservative underselling to avoid overbooking, customer trends for stock optimization and more.</p>
<p class="training-pp">Online sales can also improve your company profit margin by saving time and money. Creating a spreadsheet per the example below can help your company decide on where the best return for investment will be found in adopting online sales. For example this company would save $1200.00 a year on receipt generation alone as receipts are sent automatically. </p>
<h3 class="training-pp" style="font-size: 20px; color: #000; font-weight: bold; padding-top: 3%;">Supporting trends</h3>
<p class="training-pp">•	Shoppers today are spending more time reading reviews before making purchasing decisions. 64 percent take ten minutes or more (as compared to 50 percent in 2007) and 33 percent take one half hour or more (as compared to 18 percent in 2007).</p>
<p class="training-pp">•	Consumers today are also reading more customer reviews in order to be confident in judging a product. 39 percent read eight or more reviews (as compared with 22 percent in 2007) and 12 percent read 16 or more reviews (as compared with 5 percent in 2007).</p>
<p class="training-pp">•	The top factors that degrade trust in product reviews are not enough reviews (50 percent of respondents say this degrades trust), doubt that they are written by real customers (39 percent) and no or limited availability of negative reviews (38 percent)</p>
<p class="training-pp">•	Following poor product content (72 percent), lack of customer reviews (49 percent) was ranked as the number one reason a consumer would leave a site when conducting product research.</p>
<h3 class="training-pp" style="font-size: 20px; color: #000; font-weight: bold; padding-top: 3%;">Social Shopping Study</h3>
<p class="training-pp">
	•	The majority (57 percent) of shoppers begin their online research with a search engine</p>
<p class="training-pp">•	The top three places consumers named for finding information online when researching products were retailer sites (65 percent), brand sites (58 percent) and Amazon.com (33 percent)

</p>



						
					</div>
			</div>
	</div>

 @stop