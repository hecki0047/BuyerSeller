@extends('fontend.master_dynamic')
@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/media-room-style.css',is_secured()) !!}" rel="stylesheet">
    @endsection
  @section('content')
  <div class="row" style="padding-bottom: 8px">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/', is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('ServiceChannel/pages/for_buyer',35, is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Help Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('SupplierChannel/pages/learning_center', 33, is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Learning Center </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"> <span itemprop="name" style="color: #333;">How to buy products from BuyerSeller </i></a></li>
                        
                    </ul>
            </div>
    
  </div>
  <div class="row padding_0" style="background:#ffffff; margin-bottom:28px;padding-bottom:5%;border-bottom: 1px solid rgba(0,0,0,.1);">
  	<div class="col-sm-12 col-md-12 padding_0">
       <div class="col-sm-1">  
      </div>
  			<div class="col-sm-10">
  			<h3 style="padding-left: 15px;">How to buy products from BuyerSeller</h3>
  				<p style="line-height: 22px;font-size: 14px;text-align: left; padding-left: 15px;padding-bottom: 30px;padding-top: 35px;">BuyerSeller.Asia is an online Global B2B marketplace planned specifically like a merchandising platform towards small-scale businesses. The marketplace has a huge number of <strong>registered users and is providing business opportunities to a good number of countries</strong>, providing businesses to trade wares and servicing to others both globally and locally. This article will lead you through the steps of buying products on BuyerSeller.Asia.
</p>
  			</div>
        <div class="col-sm-1">  
      </div>
  	</div>
  	<div class="col-sm-12 col-md-12">
      <div class="col-sm-1">
        
      </div>
  		<div class="col-sm-10">
  			<img itemprop="image" class="img-responsive" style="max-height:650px;" src="{!! asset('assets/fontend/images/user-signin.jpg',is_secured()) !!}" alt="global shipping services" />
  		</div>
      <div class="col-sm-1">
        
      </div>
  		
  </div>
  <div class="col-sm-12 col-md-12" style="margin-top:28px;">
  			<div class="col-sm-8">
  				<img itemprop="image" class="user-buy-product-learn img-responsive" src="{!! asset('assets/fontend/images/user-sign-form.jpg',is_secured()) !!}" alt="global shipping services" />
  			</div>
  			<div class="col-sm-4">
  					<div class="guide-cont"><span class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span>Visit the BuyerSeller.Asia ⦁	Sign In page and sign in utilizing the e-mail address and password linked with your account.
					</div>
					<div class="guide-cont" style="padding-top:0;"><span  class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span>
							If you do NOT own an account yet, kindly please visit the BuyerSeller’s ⦁	Sign In page and stick to the onscreen commands to make one.

					</div>
  			</div>
  </div>
 
  <div class="col-sm-12 col-md-12" style="margin-top:28px;">
  			<div class="col-sm-8">
  				<img itemprop="image" class="user-buy-product-learn img-responsive" src="{!! asset('assets/fontend/images/user-product-search.jpg',is_secured()) !!}" alt="global shipping services" />
  			</div>
  			<div class="col-sm-4">
  					<div class="guide-cont"><span class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span>Try to Search for a product. There are numerous ways of looking for products, a considerable amount of which that might fit your demands more proper than others.

					</div>
					<div class="guide-cont" style="padding-top:0;"><span  class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span>
							You are able to search for products applying keywords via inserting words or phrases within the products search bar from the ⦁	BuyerSeller homepage. Just choose the “Products” tab, insert your search term within the search bar, and choose your country by utilizing the drop-down menu and finish off by clicking the “Search” button.


					</div>
					<div class="guide-cont" style="padding-top:0;"><span  class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span>
							Products are able to be looked up by utilizing the categories on the left position of the homepage. Hover over a category and click on a sub-category to begin browsing the products.



					</div>
  			</div>
  </div>
  <div class="col-sm-12 col-md-12" style="margin-top:28px;">
  			<div class="col-sm-8">
  				<img itemprop="image" class="user-buy-product-learn img-responsive" src="{!! asset('assets/fontend/images/user-contact-supplier.jpg',is_secured()) !!}" alt="global shipping services" />
  			</div>
  			<div class="col-sm-4 col-md-4">
  					<div class="guide-cont">
  					<span class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span>
  						Get a product from your search results followed by clicking the “Contact Supplier” button in order to proceed on the operation.

  					</div>
  			</div>
  	</div>
  	<div class="col-sm-12 col-md-12" style="margin-top:28px;">
  			<div class="col-sm-8">
  				<img itemprop="image" class="user-buy-product-learn img-responsive" src="{!! asset('assets/fontend/images/user-send-request.jpg',is_secured()) !!}" alt="global shipping services" />
  			</div>
  			<div class="col-sm-4 col-md-4">
  					<div class="guide-cont">
  					<span class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span>
  						Complete the message form by inserting your message to the Supplier. Such message is obliged to be made up out of questions whatsoever you may have regarding the products apart from your buying request.


  					</div>
  			</div>
  	</div>
  	<div class="col-sm-12 col-md-12" style="margin-top:28px;">
  			<div class="col-sm-8">
  				<img itemprop="image" class="user-buy-product-learn img-responsive" src="{!! asset('assets/fontend/images/user-message-duration.jpg',is_secured()) !!}" alt="global shipping services" />
  			</div>
  			<div class="col-sm-4 col-md-4">
  					<div class="guide-cont">
  					<span class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span>
  						Tick the checkboxes received under the message.



  					</div>
  			</div>
  	</div>
  	<div class="col-sm-12 col-md-12" style="margin-top:28px;">
  			<div class="col-sm-8">
  				<img itemprop="image" class="user-buy-product-learn img-responsive" src="{!! asset('assets/fontend/images/user-send-query.jpg',is_secured()) !!}" alt="global shipping services" />
  			</div>
  			<div class="col-sm-4 col-md-4">
  					<div class="guide-cont">
  					<span class="fa fa-circle" aria-hidden="true" style="font-size:13px; color:#666;"></span>
  						<strong>Click on the “Send” button as soon as you have ended the accomplished operation of sending your message to the vendor. Whatever replies received would be found on your “All Inquiries” section.</strong>  Note: It would be your duty to go forward with the trade via negotiating with the provider/vendor.



  					</div>
  			</div>
  	</div>
 </div>
 @stop