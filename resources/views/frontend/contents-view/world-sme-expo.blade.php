@extends('frontend.layouts.master-register')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bangladesh-business-style.css',is_secured()) !!}" rel="stylesheet">
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bdtdc-sme-center-style.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')
	<div class="row">
		<div class="col-md-10 padding_0" style="padding-bottom: 1%;margin-top: 1%;">
			<ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"><span itemprop="name">Home &nbsp;</span> </a></li><li style="float: left"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" style="color: #000"> <i class="fa fa-angle-right"></i><span itemprop="name">About Us </span> <i class="fa fa-angle-right"></i></a></li>
			<li style="float: left"><a itemprop="item" href="#" style="color: #000"><span itemprop="name">World SME</span> <i class="fa fa-angle-right"></i></a></li></ul>
		</div>
	</div>
<div class="row padding_0" style="background-color: #fff;">
			<div class="col-lg-3" style="padding:0;padding-right: 10px; padding-top: 15px">
			<div class="bd-title" style="background-color: #255E98; color: #fff;"><div class="arrow-down" style="font-size:20px; color:#fff;"><h3 class="arrow-down" style="font-size:20px; color:#fff;">General Information</h3></div></div>
			@include('frontend/contents-view/small-business-menu')
					<div style="border:1px solid #255E98; width: 100%; display: block;">
						
					</div>
				
			</div>
	<div class="col-lg-9" style="padding:0;padding-top: 15px">
			<div class="col-sm-12 padding_0" style="padding-top: 0;">
	        <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" style="border-radius:10px !important; border:0 none;"  class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;" ></li>
                <li data-target="#myCarousel" data-slide-to="2" style="border-radius:10px !important; border:0 none;"></li>
                 <li data-target="#myCarousel" data-slide-to="3" style="border-radius:10px !important; border:0 none;" ></li> 
             </ol>
	         <div class="carousel-inner" role="listbox">
                <div class="item active">
                 <img itemprop="image" style="max-height:350px;width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/bangladesh-business1.jpg') !!}" alt="Bangladesh dimond fair">
				         <div class="carousel-caption" style="width: 44%;padding: 10px 18px;top: 8.2%;right: 0 !important;bottom: inherit;zoom: 1; margin-left: 38%;">
				          <h1 style="color: #fff;text-align: center;padding: 5px 0;background: rgba(58,53,50,0.8); font-weight: bold; font-size: 36px !important;">BuyerSeller.Asia Bangladesh International Diamond, Gem & Pearl Show</h1>
				        
				        </div>
                </div>

            
              <div class="item">
                  <img itemprop="image" style="max-height:350px;width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/bangladesh-business2.jpg',is_secured()) !!}" alt="Bangladesh apperal fair">
                   <div class="carousel-caption" style="width: 44%;padding: 10px 18px;top: 8.2%;right: 0 !important;bottom: inherit;zoom: 1;margin-left: 38%;">
				           <h1 style="color: #fff;text-align: center;padding: 5px 0;background: rgba(58,53,50,0.8); font-weight: bold; font-size: 36px !important;">BuyerSeller.Asia Bangladesh International Apperal Show</h1> 
				          
				        </div>
                </div>
            
                <div class="item">
             <img itemprop="image" style="max-height:350px;width:100%;margin-left: -1px;" 
             src="{!! asset('assets/fontend/bdtdc-images/bangladesh-business_4.jpg',is_secured()) !!}" alt="Bangladesh lighting fair">
                   <div class="carousel-caption" style="width: 44%;padding: 10px 18px;top: 8.2%;right: 0 !important;bottom: inherit;zoom: 1;margin-left: 38%;">
				          <h1 style="color: #fff;text-align: center;padding: 5px 0;background: rgba(58,53,50,0.8); font-weight: bold; font-size: 36px !important;">BuyerSeller.Asia Bangladesh International Lighting Fair (Spring Edition)</h1> 
				         
				        </div>
                </div>
            
                <div class="item">
                  <img itemprop="image" style="max-height:350px;width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/bangladesh-business_3.jpg',is_secured()) !!}" alt="Bangladesh electrical fair">
                   <div class="carousel-caption" style="width: 44%;padding: 10px 18px;top: 8.2%;right: 0 !important;bottom: inherit;zoom: 1;margin-left: 38%;">
				          <h1 style="color: #fff;text-align: center;padding: 5px 0;background: rgba(58,53,50,0.8); font-weight: bold;font-size: 36px !important;">BuyerSeller.Asia Bangladesh Electronics Fair (Spring Edition)</h1> 
				        </div>
                </div>
            </div>
            
                <span class="sr-only">Previous</span>
            
           
                <span class="sr-only">Next</span>
            
            </div>
        </div>			
        			
        			<div class="col-sm-12 padding_0">
        				<div style="padding: 20px 0;">
        					<img itemprop="image" style="width: 100%; display: block; height: 40px;"  src="{!! asset('assets/fontend/bdtdc-images/1289897437882_WhatNew_main.gif') !!}" alt="">
        				</div>
        				
        			</div>

						<div class="col-sm-12 padding_0" style="padding-bottom: 15px;">
								<div class="col-sm-2" style="padding: 0;">
								<a itemprop="url" href="#">
									<img itemprop="image"   class="bd-busi-img" style="width: 108%; height: 107px;" src="{!! asset('assets/fontend/bdtdc-images/bd-finance.jpg') !!}" alt="">
									</a>
								</div>
								<div class="col-sm-10">
											
											<h3 class="bdtdc-tit" style="padding-top: 15px; font-size: 13px; color: #000;">Bangladesh International Franchising Show </h3>
<p>The one-of-its-kind inaugural franchising event - “Bangladesh  International Franchising Show” features a wide range of local and foreign franchise opportunities, consulting and supporting services, where franchisors and prospective franchisees meet to explore win-win business collaboration.</p>


								</div>
											
											
									
						</div>
							
						<div class="col-sm-12 padding_0" style="padding-bottom: 15px;" >
								<div class="col-sm-12" style="padding: 0;">
									<div class="expo">
											<span>Previous Expo Information</span>
									</div>
									<ul class="moreexhibitors">
										<li><a itemprop="url" href="#"><span>Expo Statistics</span></a></li>
										<li><a itemprop="url" href="#"><span>Photo Gallery</span></a></li>
										<li><a itemprop="url" href="#"><span>Seminars and Other Activities</span></a></li>
										
									</ul>
								</div>
							
						</div>
						
						
						
				
			</div>

	
</div>


<br>

@stop
@section('scripts')
<script type="text/javascript">
		 

</script>
@stop