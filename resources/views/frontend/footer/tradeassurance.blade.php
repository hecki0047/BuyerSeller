@extends('fontend.master_dynamic')
	@section('content')
	<div class="row" style="background-color: #fff;">
		<img itemprop="image" src="{!! asset('assets/helpcenter/trade/content_img.png',is_secured()) !!}" class="img-responsive" alt="Content-image" style="margin:0 auto; width:100%;"/>
	</div>
<div class="row"  style="padding-bottom:1%;background-color: #fff;">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6 trade-head">
	<h1 class="trade-head-h1">What is Trade Assurance? </h1>
      <p class="conttext">Product quality not up to the standards agreed with your supplier?</p>
<p class="conttext" style="margin-left:100px;">Products not shipped on time?</p>
<p  class="conttext" style="margin-left:40px;">Paid for your order but didn’t receive the products?</p>
    </div>
    <div class="col-sm-3">
    </div>
	</div>
	<div class="row"  style="padding-bottom:5%;background-color: #fff;">
		<div class="col-sm-12-offset-4">
			<p class="text-center" style="font-size:14px;">With Trade Assurance, your trading problems are solved. If your products are not shipped on time or the product quality does not meet the standards set in <br>your contract, BuyerSeller.Asia will refund the covered amount of your payment. Trade Assurance is a free service provided by BuyerSeller.Asia. </p>
		</div>
	</div>
	<div class="row" style="padding-bottom:5%; background-color: #fff;">
				<div class="col-md-3">
				</div>
	
						<div class="input-group col-md-6 query" style="float:left;">
                                <input type="text" class="  search-query form-control search" style="padding:10px 25%;" placeholder="Search"/>
					
								
					</div>
					<div class="col-md-3 search-row" style="padding-left:0;">
					
			<div  class="btn btn-warning search-butn" style="height: 50px; padding-bottom: 0; margin-top: 12.5%;"><i class="fa fa-search" style="font-size: 24px; color: #fff; position: absolute; left: 5px;
			top: 60%;"></i><label  style="position: absolute; top: 0; left: 12%; top:46%;">Search</label></div>
					
					</div>
                 
	</div>
<div style="border-bottom:1px solid #ccc; width:100%;"></div>
<div class="row" style="background-color: #fff;">
		<h1 class="trade-head-cont-h1">Why choose Trade Assurance?</h1>
</div>

	<div class="row" style="padding-bottom:50px; background-color: #fff;">
	 <div class="col-xs-6 col-md-4">
		<img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/trade-as-img.jpg',is_secured()) !!}" class="img-responsive" alt="buisness image" style="height:130px; width:350px; padding-left:-10px;">
	 </div>
  <div class="col-xs-12 col-sm-6 col-md-8"><h3 class="trade-head-cont-h3">Know your suppliers</h3>
  <p style="padding-left:30px;">You can view each participating suppliers’ transaction history, including the number of transactions and turnover, as well as their buyer reviews. </p>
  </div>
  
 
</div>
<div class="row" style="padding-bottom:5%;background-color: #fff;">
  <div class="col-xs-12 col-md-8"><h3 style="font-weight:bolder; font-size:18px; padding-bottom:15px;">Get full protection</h3>
  <p>BuyerSeller.Asia will refund the covered amount of your payment in the event of the following:</p>
  <p class="trade-font">-Your products are not shipped on-time as set in the contract</p>
  <p  class="trade-font">-The quality of your products is not up to standards as per the contract with your supplier</p>
  </div>
  <div class="col-xs-6 col-md-4">
  <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/cartoon.jpg',is_secured()) !!}" class="img-responsive" alt="buisness image" style="height:130px; width:350px; float:right;">
  </div>
</div>
<div class="row" style="padding-bottom:3%;background-color: #fff;">
	 <div class="col-xs-6 col-md-4">
		<img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/trade-as-img2.jpg',is_secured()) !!}" class="img-responsive" alt="buisness image" style="height:130px; width:350px; padding-left:-10px;">
	 </div>
  <div class="col-xs-12 col-sm-6 col-md-8"><h3 class="trade-title-rivew">Review and influence your suppliers</h3>
  <p style="padding-left:30px;">You can view each participating suppliers’ transaction history, including the number of transactions and turnover, as well as their buyer reviews. </p>
  </div>
  
 
</div>
<div class="row" style="background-color: #fff;">
<h1 class="trade-head-cont-h1" style="padding-top:0%; padding-bottom:2%;">How to use Trade Assurance?</h1>
</div>
<div class="row trade-border" style="border-bottom:0 none;">
		<div class="col-md-3 single-menu">
			<a itemprop="url" href="#">Start your order</a>
		</div>
		<div class="col-md-8">
			<div class="con-title">
				<h4 class="order-h4">Find your order</h4>
			</div>
			
		</div>
</div>
<div class="row trade-border" style="padding-bottom:5%; margin-top:0;padding-top:0; border-top:0 none; background-color: #fff;"> 
<div class="col-xs-6 col-md-3">
	
	<ul class="nav nav-pills nav-stacked menubar">
	   <li class="active"><a itemprop="url" href="#" style="border-radius: 5px !important;" >Confirming your order</a> </li>
	   <li><a itemprop="url" href="#">Paying for your order</a></li>
	   <li><a itemprop="url" href="#">Confirm receipt</a></li>
	   <li><a itemprop="url" href="#" style="border-bottom:1px solid #ccc;">Opening a dispute</a></li>
	</ul>
</div>	
<div class="col-xs-12 col-md-9" style="border:1px solid #ccc;"> 
	<!-- start slider -->
	<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active" style="border-radius: 10px !important; border: 0 none;"></li>
                <li data-target="#carousel" data-slide-to="1" style="border-radius: 10px !important; border: 0 none;"></li>
                <li data-target="#carousel" data-slide-to="2" style="border-radius: 10px !important; border: 0 none;"></li>
                <li data-target="#carousel" data-slide-to="3" style="border-radius: 10px !important; border: 0 none;"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item"><img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/trade-as-sld1.jpg',is_secured()) !!}" alt="seller1" style="width:100%; min-height:400px;"></div>
                <div class="item"><img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/trade-as-sld2.jpg',is_secured()) !!}" alt="seller2" style="width:100%; min-height:400px;"></div>
                <div class="item"><img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/trade-as-sld3.jpg',is_secured()) !!}" alt="seller3" style="width:100%; min-height:400px;"></div>
                 <div class="item"><img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/trade-as-sld4.jpg',is_secured()) !!}" alt="seller3" style="width:100%; min-height:400px;"></div>
            </div>
            <!-- Carousel nav -->
            <!--<a itemprop="url" class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>-->
            <!--<a itemprop="url" class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>-->
</div>
		
	
	<!-- End slider -->

</div> 

</div>
	<div class="row" style="padding-bottom:5%; background-color: #fff;">
		<h1 class="trade-title-cust-h1">Customer Reviews</h1>
			<div class="col-md-4">
				<img itemprop="image" style="width:100px; height:100px; " src="{!! asset('assets/helpcenter/trade/pic1.jpg',is_secured()) !!}" class="image-responsive img-circle" alt="customer visit" style="float:left;">
				<p class="info">Alina Rouch  US<br>
Operations Manager at Special Nutrients Inc.
			</p>
			<p class="word">"I now make it a point to check that my supplier supports Trade Assurance. I feel like it’s an extra level of security for my overseas transaction at no additional cost to us. I find it very helpful - like a security banquet - and would absolutely recommend it." </p>
			</div>
			<div class="col-md-4">
			<img itemprop="image" style="width:100px; height:100px; " src="{!! asset('assets/helpcenter/trade/pic2.jpg',is_secured()) !!}" class="image-responsive img-circle" alt="customer visit" style="float:left;">
			<p class="info">Charlie McGlynn  US <br>
Founder of Raw Mobility</p> 
<p class="word">"Why did I decide to use Trade Assurance? It just feels so much safer knowing that my order will be covered, knowing that I have an option, a backup plan, if for whatever reason things go south. With Trade Assurance, I feel much more secure." </p>
</div>
			<div class="col-md-4">
				<img itemprop="image" style="width:100px; height:100px; " src="{!! asset('assets/helpcenter/trade/pic3.jpg',is_secured()) !!}" class="image-responsive img-circle" alt="customer visit" style="float:left;">
				<p class="info">Madison Knight  US <br>
Founder of Supreme Tech</p>
<p class="word">"Using Trade Assurance worked pretty well. I especially Appreciate the added protection, which is nice to have when Just getting to know a new business,and I liked the idea of Having extra insurance in case something went wrong." </p>

  </div>
</div>
<div style="border-bottom:1px solid #ccc; width:100%;"></div>
<div class="row" style="padding-bottom:5%;padding-top:5%;background-color: #fff;">
		<h1 style="margin-left:45%">FAQ</h1>
</div>
<div class="row " style="padding-bottom:5%;background-color: #fff;">
	<div class="col-md-6">
		<ol class="trade">
			<li><a itemprop="url" href="#">How do I complete the Trade Assurance order form?</a></li>
			<li><a itemprop="url" href="#">How can I confirm whether an order covered by Trade Assurance?</a></li>
			<li><a itemprop="url" href="#">What is quality inspection standard for Trade Assurance?</a></li>
		</ol>
	</div>
	<div class="col-md-6">
			<ol class="trade">
				<li><a itemprop="url" href="#">When will I receive the products for my Trade Assurance order?</a></li>
				<li><a itemprop="url" href="#">How do I make the initial payment for my Trade Assurance order?</a></li>
				<li><a itemprop="url" href="#">Does the Trade Assurance service charge fees?</a></li>
			</ol>
	</div>
</div>
<div style="border-bottom:1px solid #ccc; width:100%;"></div>
<div class="row" style="padding-bottom:5%;padding-top:5%;background-color: #fff;">
	<div>
	<h3 style="margin-left:32%; font-size:120%;">How do I use Trade Assurance to protect my online orders?</h3>
	
	<h1><a itemprop="url" href="{{ URL::to('user/guide',null,is_secured())}}"  class="active" style="margin-left:40%; font-size:75%;padding:10px; border:1px solid #333; border-radius: 5px !important;">View User Guide</a></h1>
	</div>
</div>
<br>
@stop