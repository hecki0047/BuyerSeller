@extends('fontend.master_dynamic')
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
 <div class="row padding_0" style="background-color: #fff;">
 			<div class="col-sm-12 col-md-12 col-lg-12">
 						<div class="col-sm-3">
 							<ul class="col-sm-12" style="padding-left:15px; padding-top: 25px;">
					                <li class="policy-list" >
					                  <a itemprop="url" href="{{URL::to('Buyer/Training'),is_secured()}}" class="policy-list-a">Understand International Buyers</a>
					                </li>
					                <li class="policy-list" >
					                  <a itemprop="url"  href="{{URL::to('online/Buy_selleing'),is_secured()}}"  class="policy-list-a">Why Buy & Sell Online</a>
					                </li>
					                <li class="policy-list"  >
					                  <a href="{{URL::to('supplemental/service'),is_secured()}}"  class="policy-list-a" target="_blank">
					                  Setting Company Profile</a>
					                </li>
					                 <li class="policy-list"  >
					                  <a itemprop="url" href="{{URL::to('improve/product-ranking'),is_secured()}}"  class="policy-list-a">
					                  Improve Product Search Ranking</a>
					                </li>
			
					                </ul>
 						</div>
 						<div class="col-sm-9">
 									<h3 class="training-pp" style="font-size: 20px; color: #000; font-weight: bold; padding-top: 3%;">How to improve product search ranking </h3>
 									<h4 class="traing-h4">1. Don’t Rely Only on Pay per Click (But Also Don't forget it)</h4>
 									<p  class="training-pp">While many ecommerce sites fall back on a pay per click (PPC) strategy to create visibility for their store, the truth is that PPC costs continue to go up and once you stop paying for placement, your online presence disappears.
 									</p>
<p  class="training-pp">Also, some customers have an inherent distrust of sponsored links, banners, and other online ads. Ecommerce stores cannot solely rely on a PPC strategy and need to also implement organic SEO practices to help with their online visibility.</p>
<p class="training-pp">That said, recent Google research shows that when some web sites stopped using AdWords, 89% of the paid clicks did not shift over to organic, SEO clicks. So make sure you do use pay per click in addition to SEO.</p>
<h4 class="traing-h4">2. Avoid Duplicate Content</h4>
<p class="training-pp">Duplicate content is the enemy for search engines. However, since many ecommerce stores have a large amount of duplicate content as a result of product descriptions and lists, ecommerce sites tend to get penalized by search engines. Therefore, online store owners need to assess their website and look for ways to reduce the amount of redundant and duplicate content that is present on their website. </p>
<h4 class="traing-h4">3. Have a Content Strategy</h4>
<p class="training-pp">Consistently adding unique and high quality content on a regular basis to your ecommerce site will not only add additional value for users, it will also help with your search engine ranking. Consider using your and add content that's related to the products and services that you sell.</p>
<h4 class="traing-h4">4. Don’t use the Manufacturer Product Descriptions</h4>
<p class="training-pp">Building your product database can be a time consuming process, and in an attempt to save time, many online store owners simply copy and paste the manufacturer’s product descriptions onto their website. This is an SEO no-no! Always re-write every single product description to ensure that it is unique and search engine friendly. Remember to use several words that people are most likely to search for.</p>
<h4 class="traing-h4">5. Optimize Product Images</h4>
<p class="training-pp">Image search has become a very popular function that internet users are increasingly using to find products online. Therefore, ecommerce websites need to add related keywords into the ALT tags of every image on </p>
<p>their website. For optimal effect, make sure that every keyword used for an image is directly relevant and avoid stuffing keywords into the alt tags.</p>
<h4 class="traing-h4">6. Have Unique Meta Descriptions for Every Webpage</h4>
<p class="training-pp">When it comes to onsite optimization, many ecommerce stores think that it's enough to use the same meta descriptions for each page. However, this is another SEO faux-pas! The meta description should be written for humans with the goal of helping your store get clicked once it shows up in search engines.</p>
<h4 class="traing-h4">7. Include Product Reviews</h4>
<p class="training-pp">Since unique content is extremely important when it comes to SEO, having a field for users to add their product reviews is a great passive way to generate unique content for your ecommerce store.</p>
<h4 class="traing-h4">8. Link to your Products from the Home Page</h4>
<p class="training-pp">A common error made by many ecommerce sites is burying their product pages deep within their link structure. This will not only make it more difficult for users to find products, it will also impact the product pages Page Rank score, making those pages less likely to appear high in search. </p>
<h4 class="traing-h4">9. Optimize the Anchor Text</h4>
<p class="training-pp">Adding keywords to the internal links on your website will help to enhance your stores visibility in search engines. Rather than using the typical “click here” link, link from text that includes the keywords the page you are linking to is trying to rank for. Also, consider adding keyword rich links within the product descriptions to link to other similar products on your website.</p>
<h4 class="traing-h4">10. Organize your Online Store for SEO</h4>
<p class="training-pp">The way that you structure your store will impact its visibility. Consider structuring your ecommerce store so that it includes a number of landing pages. These pages can be specific to a brand or product type. Doing this gives you the opportunity to optimize for multiple pages and keyword groups, which will increase your site's visibility in search.    
</p>

 								
 						</div>
 				
 			</div>
 		
 </div>
@stop