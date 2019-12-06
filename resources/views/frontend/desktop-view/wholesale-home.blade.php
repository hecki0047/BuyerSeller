@extends('frontend.layouts.master-register')
	@section('page_css')
    <link property='stylesheet' href="{!! asset('css/buy-on/wholesale.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/online-market-place.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('css/mega-menu.css',is_secured()) !!}" rel="stylesheet">
    @endsection

@section('content')
     <br>
      @include('frontend.layouts.sidebar_wholesale')

<div class="row selet-menu">
				<div>
						<h1 style="text-align: left;color: #333;font-size: 24px;margin-bottom: 25px;padding-left: 15px;">Wholesale products</h1>
				</div>
	                <div class="category-tab">
						
							<ul class="nav nav-tab nav-pills trade-show-ul " style="background:none;border-bottom: 1px solid #dae2ed;" itemscope itemtype="http://schema.org/SiteNavigationElement">
								<li style="padding-top: 11px;font-size: 15px;font-weight: 600;">Selected Brand</li>
								<li class="" style="margin-left: 2.5%;">  <a itemprop="url"  class="padding_0" href="#forbuyer" data-toggle="tab">Hot Brands</a></li>
								<li>  <a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#apparel" data-toggle="tab">Apparel</a></li>
								<li>  <a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#electronic" data-toggle="tab">Electronics</a></li>
								<li>  <a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#sport" data-toggle="tab">Machinery & Hardware</a></li>
								<li>  <a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#jewelry" data-toggle="tab">Jewelry & Watches</a></li>
								<!-- <li>  <a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#forsupplier" data-toggle="tab">Lights & Lighting</a></li>
								<li>  <a itemprop="url"  style="font-size: 13px;" class="padding_0" href="#forsupplier" data-toggle="tab">Automotive</a></li> -->
								   
							</ul>
					</div>
					
	<div class="tab-content">
		<div class="tab-pane fade in active" id="forbuyer" >
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 padding_0">


				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" itemscope itemtype="http://schema.org/Product">
				  <a itemprop="url"  href="{{URL::to('Home/template_',968)}}" class="slidebox-item">
					<img itemprop="image"    style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/girl-fashion.jpg',is_secured()) !!}" alt="girl-fashion" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1LTC_LpXXXXbRapXXXXXXXXXX-240-120.png',is_secured()) !!}" alt="Shein logo"/>
					</div>
					<div class="brand-year">
						Since Year 2010
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>				
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;">
				  <a itemprop="url"  href="{{URL::to('Home/template_',1001)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/sports-dress.png',is_secured()) !!}" alt="sports dress" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1KF_EKXXXXXc6XVXXXXXXXXXX-240-120.png',is_secured()) !!}" alt="FOS JOAS logo" />
					</div>
					<div class="brand-year">
						Since Year 2010
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;">
				  <a itemprop="url"  href="{{URL::to('Home/template_',151)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/digital-watch.jpg',is_secured()) !!}" alt="digital watch" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1h2_FKXXXXXc.XFXXVPCB_VXX-240-120.png',is_secured()) !!}" alt="winait logo"/>
					</div>
					<div class="brand-year">
						Since Year 2010
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',974)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/dimond-metal.jpg',is_secured()) !!}" alt="dimond metal" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB19hHiLpXXXXXDXpXXfPaB_VXX-240-120.jpg',is_secured()) !!}" alt="Allen coco logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',928)}}" class="slidebox-item" >
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/images/supper-light.jpg',is_secured()) !!}"  alt="supper light" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/images/TB1Y0YhKFXXXXauXXXXVPCB_VXX-240-120.png',is_secured()) !!}" alt="SNU logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
			</div>
   		</div>
   		<div class="tab-pane fade" id="apparel" >
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 padding_0">
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;">
				  <a itemprop="url"  href="{{URL::to('Home/template_',884)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/girl-fashion.jpg',is_secured()) !!}" alt="girl-fashion" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1LTC_LpXXXXbRapXXXXXXXXXX-240-120.png',is_secured()) !!}" alt="SheIn logo" />
					</div>
					<div class="brand-year">
						Since Year 2010
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>				
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',920)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/dress-model.jpg',is_secured()) !!}" alt="dress model" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1gRNRLFXXXXb5XpXXXXXXXXXX-240-120.png',is_secured()) !!}" alt="petti girl logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',11)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/baby-dress.jpg',is_secured()) !!}" alt="baby dress" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1gcWUKFXXXXa3XVXXXXXXXXXX-240-120.jpg',is_secured()) !!}" alt="VasRa logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',812)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/long-tri-shirt.jpg',is_secured()) !!}"  alt="long tri shirt" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1H9DULpXXXXcqXVXXXXXXXXXX-240-120.jpg',is_secured()) !!}" alt="QianXiu logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',7)}}" class="slidebox-item" >
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/summer-dress.jpg',is_secured()) !!}"  alt="summer-dress" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1utHMKXXXXXXDXVXXXXXXXXXX-240-120.png',is_secured()) !!}" alt="Zhuiman logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
			</div>

   		</div>
   		<div class="tab-pane fade" id="sport" >
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 padding_0">
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;">
				  <a itemprop="url"  href="{{URL::to('Home/template_',151)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/sports-dress.png',is_secured()) !!}" alt="winait" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1KF_EKXXXXXc6XVXXXXXXXXXX-240-120.png',is_secured()) !!}" alt="winait logo"/>
					</div>
					<div class="brand-year">
						Since Year 2010
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',984)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/sports-raceling.png',is_secured()) !!}" alt="sports raceling"/>
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1vOTFKXXXXXcaXVXXXXXXXXXX-240-120.png',is_secured()) !!}" alt="costlo logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',51)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/wheel-machine.jpg',is_secured()) !!}" alt="wheel machine" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1h2_FKXXXXXc.XFXXVPCB_VXX-240-120.png',is_secured()) !!}" alt="3D logo "/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',54)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/bi-cycle.jpeg',is_secured()) !!}" alt="bi cycle" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB19hHiLpXXXXXDXpXXfPaB_VXX-240-120.jpg',is_secured()) !!}" alt="BRG logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',40)}}" class="slidebox-item" >
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/cycle-wheel.jpg',is_secured()) !!}" alt="cycle-wheel" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1oMFaKVXXXXavXXXXVPCB_VXX-240-120.png',is_secured()) !!}"  alt="BUstyle logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				
				
			
			</div>

   		</div>
   		<div class="tab-pane fade" id="electronic" >
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 padding_0">
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;">
				  <a itemprop="url"  href="{{URL::to('Home/template_',677)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/digital-watch.jpg',is_secured()) !!}" alt="digital-watch" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1h2_FKXXXXXc.XFXXVPCB_VXX-240-120.png',is_secured()) !!}" alt="FOS JOAS logo"/>
					</div>
					<div class="brand-year">
						Since Year 2010
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',135)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/color-lighting.jpg',is_secured()) !!}" alt="color-lighting" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1oMFaKVXXXXavXXXXVPCB_VXX-240-120.png',is_secured()) !!}" alt="CHIC logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',137)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/smart-phone.jpg',is_secured()) !!}" alt="smart-phone" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1XQuDLpXXXXbEXFXXXXXXXXXX-240-120.png',is_secured()) !!}" alt="Winait logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',67)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/branding-watch.jpg',is_secured()) !!}"  alt="branding watch" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1vDhjKFXXXXc9XFXXfPaB_VXX-240-120.jpg',is_secured()) !!}" alt="Allen COCO logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',896)}}" class="slidebox-item" >
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/i-phone.jpg',is_secured()) !!}" alt="i-phone" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1w3COLpXXXXXxXpXXXXXXXXXX-240-120.png',is_secured()) !!}" alt="COSTELO logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				
				
			
			</div>

   		</div>
   		<div class="tab-pane fade" id="jewelry" >
			<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 padding_0">
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;">
				  <a itemprop="url"  href="{{URL::to('Home/template_',974)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/dimond-ring.jpeg',is_secured()) !!}" alt="dimond-ring" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1IPizKFXXXXXRXVXXfPaB_VXX-240-120.jpg',is_secured()) !!}" alt="Mimeng logo"/>
					</div>
					<div class="brand-year">
						Since Year 2010
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',974)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/gorgious-ornamante.jpg',is_secured()) !!}" alt="Western Rain" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1V35hKXXXXXbNXVXXb9RYIXXX-250-120.jpg',is_secured()) !!}" alt="Western Rain logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',974)}}" class="slidebox-item">
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/neoglory.jpg',is_secured()) !!}" alt="neoglory" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1C3T7KXXXXXb5XXXXVPCB_VXX-240-120.png',is_secured()) !!}" alt="NEOGLORY logo" />
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
				</a>	
				</div>
				<div class="sel-bnd-im-dv" style="  padding-right: 0%;" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',974)}}" class="slidebox-item">
						<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/Allen-COCO-fashion-Jewelry.jpg',is_secured()) !!}" alt="Allen COCO fashion Jewelry" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB19hHiLpXXXXXDXpXXfPaB_VXX-240-120.jpg',is_secured()) !!}" alt="Allen COCO logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
					</a>	
				</div>
				<div class="sel-bnd-im-dv" >
				  <a itemprop="url"  href="{{URL::to('Home/template_',974)}}" class="slidebox-item" >
					<img itemprop="image"   style="height:260px;width:100%" class="  " src="{!! asset('assets/slider/dimond-loket.jpg',is_secured()) !!}" alt="dimond loket" />
					<div class="brand-logo">
						<img itemprop="image"   src="{!! asset('assets/slider/TB1utHMKXXXXXXDXVXXXXXXXXXX-240-120.png',is_secured()) !!}" alt="Zhudiman logo"/>
					</div>
					<div class="brand-year">
						Since Year
					</div>
					<p itemprop="name"  class="brand-favorable">
						Sincerity and quality
					</p>
					</a>	
				</div>
				
				
			
			</div>

   		</div>
	</div>
</div>
      <br>
      
      @if ($product_categorys)

            @foreach ($product_categorys as $product_category)

            
      <div class="row" style="padding-bottom: 5px">
            	<ul class="" style="padding: 0; padding-left: 15px;" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<li style="padding-left: 0%" class="sale-cat-heading-tit"> <i style="width: 2.85em;top: 7px;" class="icon-p {{ $product_category->pro_parent_cat->image  }}"></i>{{ $product_category->pro_parent_cat->name  }}<span>  <i class="fa fa-angle-right"></i></span></li>	
			</ul>
      </div>
	 <div  class="row" style="padding-top: 0px;">
	
		<div class="col-md-2" style="padding-left:0; padding-right:5px;">
					
	 			 <div class="sale-ppp-title" style="border: none;">
	 			 		<ul class="sale-title-menu" style="border: none;" itemscope itemtype="http://data-vocabulary.org/Product">
	 			 		@if ($product_category->most_view_category)
							@foreach ($product_category->most_view_category as $cat)
		 			 			<li class="sale-title-menu-li" rel="sub category" itemprop="url">
			 			 			  <a itemprop="url"  class="sale-title-menu-li-a" href="{{URL::to('wholesale/category/product',$cat->category_id,is_secured()) }}"><span itemprop="name">{{ $cat->cat_name->name }}</span>
			 			 			</a>
		 			 			</li>
		 			 		@endforeach
	 			 		@endif
	 			 		</ul>
	 			 </div>
		</div>

		<div class="col-md-3 padding_0">
		@if($product_category->pro_parent_cat)
		 <img itemprop="image"   style="width: 290px;height: auto;padding-top: 0px" class="    col-sup-img" src="{{ URL::to('assets/wholesale', $product_category->pro_parent_cat->single_image,is_secured()) }}" alt="{{preg_replace('/[^A-Za-z0-9\jpg]/', ' ',$product_category->pro_parent_cat->single_image)}}" />
		 @endif		
		</div>		
		<div class="col-md-7 padding_0" style="padding-left:5px;">							       
		  @if ($product_category->selected_suppliers) 
			@foreach ($product_category->selected_suppliers as $data) 
				<div class="col-sm-3 col-xs-6 padding_0  sup-head-col" style="margin-bottom: 1%;padding-right: 2%;">
				<div class="img-hilight  product-hover">														
		@if($data->pro_name_string)
          @if($data->select_product_images)
          @if($data->pro_name_string)
				  <a itemprop="url"  target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$data->pro_name_string->name).'=232942253'.$data->product_id,null,is_secured()) }}" class="slidebox-item-list" style="box-shadow: none; border:0 none;">
				  @endif
          <img itemprop="image" title="{{ $data->pro_name_string->name }}"   style="" class="    col-sup-img" src="{{ URL::to((isset($data->select_product_images)) ? ''.$data->select_product_images->image : 'no_image.jpg',null,is_secured()) }}" alt="{{$data->pro_name_string->name }}"/>
          @else
          <img itemprop="image" title="{{ $data->pro_name_string->name }}"   style="" class="col-sup-img" src="{{ URL::to('uploads/no_image.jpg',null,is_secured()) }}" alt="{{$data->pro_name_string->name }}" />
          
          @endif
          @endif
			
					<div style="height: 100px;" class="product-head-cont">
					<div class="whole-sal-pro" style="">
              @if($data->pro_name_string)
							 {{ substr($data->pro_name_string->name, 0, 30) }}..
               @else
               Unknown Product
               @endif
					 
					</div>
					<div itemprop="name"  class="brand-favorable" style="text-align:left;padding-left:10px;padding-bottom:3px; height:32px;">
						<span class="doller-product-price">$ 
							@if($data->cat_pro_price)
							{{ $data->cat_pro_price->product_FOB}} /</span>
							<!-- error needs to fix hector -->
							{{ $data->BdtdcSelectedSupplier_products}}
							@else
							</span>
							@endif
					</div>
				</div>
					</a>
				</div>
             
				</div>
			
		@endforeach
  @endif
</div>
</div>
<br>
@endforeach
{!! $product_categorys->render() !!}
@endif
<br>
<br>     
@stop
@section('scripts')
		<script type="text/javascript">
		$(document).ready(function(){
			    $("#cat-tle").click(function(){
			        $("#whole-sl-cat-lst").toggle();
			    });
			});
	(function(){

		$('.product-image-wrapper-next').css('margin-bottom','0');
			
		$(window).load(function(){
			$('a[href="#forbuyer"]').click()	
		})
		    var section = $('[name="section"]').val();
		    (section !="") ? $('.nav-tabs li a[href="#'+section+'"]').click() : false;
			    
	}
	);
</script>
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
@stop