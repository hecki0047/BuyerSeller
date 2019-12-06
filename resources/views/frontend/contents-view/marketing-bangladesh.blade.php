@extends('frontend.layouts.master-register')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bdtdc-sme-center-style.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" style=" padding-bottom: 8px;">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">About BuyerSeller</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                         
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Marketing Bangladesh Brands to the World</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    
  </div>
	<div class="row padding_0" style="background-color: #fff; padding-bottom: 4%; margin-bottom: 2%;">
	
			 <div class="col-sm-12 padding_0">
					<div class="col-sm-8 padding_0">
						<div class="col-sm-12 padding_0">
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
                                    <img itemprop="image" title="flooding in bangladesh" style="height:390px;width:100%;" src="{!! asset('assets/fontend/bdtdc-images/flooding-in-bangladesh.jpg') !!}" alt="flooding in bangladesh" />
                              </div>

                              <div class="item">
                                    <img itemprop="image" title="hills in bangladesh" style="height:390px;width:100%;" src="{!! asset('assets/fontend/bdtdc-images/hills-in-bangladesh.jpg') !!}" alt="hills in bangladesh" />
                              </div>
                                  
                              <div class="item">
                                   <img itemprop="image" title="rainfall bangladesh" style="height:390px;width:100%;" src="{!! asset('assets/fontend/bdtdc-images/rainfall-bangladesh.jpg') !!}" alt="rainfall bangladesh" />
                              </div>

                              <div class="item">
                                   <img itemprop="image" title="sundarban tour" style="height:390px;width:100%;" src="{!! asset('assets/fontend/bdtdc-images/sundarban-tour.jpg') !!}" alt="sundarban tour" />
                              </div>
                              <div class="item">
                                   <img itemprop="image" title="sylhet tea garden" style="height:390px;width:100%;" src="{!! asset('assets/fontend/bdtdc-images/sylhet-tea-garden.jpg') !!}" alt="sylhet tea garden" />
                              </div>
                              <div class="item">
                                   <img itemprop="image" title="bangladesh population" style="height:390px;width:100%;" src="{!! asset('assets/fontend/bdtdc-images/bangladesh-population.jpg') !!}" alt="bangladesh population" />
                              </div>
                              <div class="item">
                                   <img itemprop="image" title="fishing in bangladesh" style="height:390px;width:100%;" src="{!! asset('assets/fontend/bdtdc-images/fishing-in-bangladesh.jpg') !!}" alt="fishing in bangladesh" />
                              </div>
                              <div class="item">
                                   <img itemprop="image" title="mahasthangarh" style="height:390px;width:100%;" src="{!! asset('assets/fontend/bdtdc-images/mahasthangarh.jpg') !!}" alt="mahasthangarh" />
                              </div>
                              <div class="item">
                                   <img itemprop="image" title="water lily pond" style="height:390px;width:100%;" src="{!! asset('assets/fontend/bdtdc-images/water-lily-pond.jpg') !!}" alt="water lily pond" />
                              </div>
                              </div>

                                  <!-- Left and right controls -->
                            <!--   <a itemprop="url"   class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                              </a>
                              <a itemprop="url"   class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span> </a>-->
                              
                              </div>


                        </div>

				<div class="col-sm-12" style="padding-top: 20px; padding-bottom: 20px;">

						<div class="col-sm-3">
						 <img  style="width: 100%; display: block; float: left; border:1px solid #000; padding: 10px;"   src="{!! asset('assets/fontend/bdtdc-images/designerlist_06.jpg') !!}" alt="">
							
						</div>
						<div class="col-sm-9">
							<p class="advisory-p">
								Bangladesh is an evergreen country. From the blue sky to the green land, the golden paddy field, the beauty of Cox’s Bazaar and beyond. The view is overwhelming...
							</p>
							
						</div>



				</div>	
				<div class="col-sm-12" style="margin-bottom: 20px;">
						<div class="col-sm-3">
							 <img itemprop="image" class="img-circle" style=" display: block; overflow: hidden;"  src="{{asset('assets/gold/ACI.jpg')}}" alt="">
							 <span style="font-size: 14px;color: #000; padding: 5px 0;text-align: center;">Pharmaceuticals, Consumer Brands and Agribusiness</span>
						</div>
						<div class="col-sm-3">
							 <img itemprop="image" class="img-circle" style="display: block; overflow: hidden;" src="{{asset('assets/gold/Apex.jpg')}}" alt="">
							 <span style="font-size: 14px;color: #000; padding: 5px 0; text-align: center;">Leather Goods</span>
						</div>
						<div class="col-sm-3">
							 <img itemprop="image" class="img-circle" style="display: block; overflow: hidden; "  src="{{asset('assets/gold/PRAN.jpg')}}" alt="">
							 <span style="font-size: 14px;color: #000; padding: 5px 0; text-align: center;">Food Products</span>
						</div>
						<div class="col-sm-3">
							 <img itemprop="image" class="img-circle" style="display: block; overflow: hidden;"  src="{{asset('assets/gold/ARONG.jpg')}}" alt="">
							 <span style="font-size: 14px;color: #000; padding: 5px 0; text-align: center;"> Handcrafted Products</span>
						</div>
					
				</div>
				<div class="col-sm-12" style="margin-bottom: 20px;">
						<div class="col-sm-3">
							 <img itemprop="image" class="img-circle" style=" display: block; overflow: hidden;"  src="{{asset('assets/gold/BATA.jpg')}}" alt="">
							 <span style="font-size: 14px;color: #000; padding: 5px 0;text-align: center;">Footwear and Fashion Accessories</span>
						</div>
						<div class="col-sm-3">
							 <img itemprop="image" class="img-circle" style=" display: block; overflow: hidden;"  src="{{asset('assets/gold/Unilibir.jpg')}}" alt="">
							 <span style="font-size: 14px;color: #000; padding: 5px 0;text-align: center;">Consumer Goods</span>
						</div>
						<div class="col-sm-3">
							 <img itemprop="image" class="img-circle" style=" display: block; overflow: hidden;"  src="{{asset('assets/gold/Walton.jpg')}}" alt="">
							 <span style="font-size: 14px;color: #000; padding: 5px 0;text-align: center;">Motors, Mobile and Electronic Items</span>
						</div>
				</div>	

									

			</div>
<div class="col-sm-4">
	<div class="col-sm-12">
			<div class="col-sm-6" style="border-right: 1px solid #ccc;">
							<ul style="padding: 0; display: block; overflow: hidden;">
								<li><a href="">
									<h3 class="marketing-h3">Design Highlights</h3>
									 <span>
										 <img itemprop="image" class="marketing-img"  src="{{asset('assets/gold/Baby-Cloth.jpg')}}" alt="">
									</span>
									</a>
								</li>
								<li><a href="">
									<h3 class="marketing-h3">Gifts</h3>
									 <span>
										 <img  itemprop="image" class="marketing-img" src="{{asset('assets/gold/child-cloth.jpg')}}" alt="">
									</span>
									</a>
								</li>
								<li><a href="">
									<h3 class="marketing-h3">Eco Products</h3>
									 <span>
										 <img itemprop="image" class="marketing-img"  src="{{asset('assets/gold/mans-cloth.jpg')}}" alt="">
									</span>
									</a>
								</li>
								<li><a href="">
									<h3 class="marketing-h3">Girl's Clothes</h3>
									 <span>
										 <img itemprop="image" class="marketing-img"  src="{{asset('assets/gold/girl-cloth.jpg')}}" alt="">
									</span>
									</a>
								</li>
								<li><a href="">
									<h3 class="marketing-h3">Ladies Bag</h3>
									 <span>
										 <img itemprop="image" class="marketing-img"  src="{{asset('assets/gold/bag.jpg')}}" alt="">
									</span>
									</a>
								</li>
								
							</ul>
						
					</div>
					<div class="col-sm-6">
							<ul style="padding: 0; display: block; overflow: hidden;">
								<li><a href="">
									<h3 class="marketing-h3">Man Shoees</h3>
									<span>
										 <img itemprop="image" class="marketing-img"   src="{{asset('assets/gold/man-shoes.jpg')}}" alt="">
									</span>
									 
									</a>
								</li>
								<li><a href="">
									<h3 class="marketing-h3">Women's Shoees</h3>
									  <span>
										 <img itemprop="image" class="marketing-img"   src="{{asset('assets/gold/girls-shoes.jpg')}}" alt="">
									</span>
									</a>
								</li>
								<li><a href="">
									<h3 class="marketing-h3">Comfortable Furniture</h3>
									 <span>
										 <img itemprop="image" class="marketing-img"   src="{{asset('assets/gold/furniture.jpg')}}" alt="">
									</span>
									</a>
								</li>
								<li><a href="">
									<h3 class="marketing-h3">Health Care Products </h3>
									  <span>
										 <img itemprop="image" class="marketing-img"   src="{{asset('assets/gold/beautyscence.jpg')}}" alt="">
									</span>
									</a>
								</li>
								<li><a href="">
									<h3 class="marketing-h3">Bangladesh fozen foods </h3>
									  <span>
										 <img  itemprop="image" class="marketing-img"  src="{{asset('assets/gold/fozen-food.jpg')}}" alt="">
									</span>
									</a>
								</li>
							</ul>
						
					</div>
			
			</div>
		</div>
	</div>
</div>

@stop
@section('scripts')
<script type="text/javascript">
	var currentIndex = 0,
  items = $('.my-slider div'),
  itemAmt = items.length;

function cycleItems() {
  var item = $('.my-slider div').eq(currentIndex);
  items.hide();
  item.css('display','inline-block');
}

var autoSlide = setInterval(function() {
  currentIndex += 1;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems();
}, 3000);

$('.next-slide').click(function() {
  clearInterval(autoSlide);
  currentIndex += 1;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems();
});

$('.prev-slide').click(function() {
  clearInterval(autoSlide);
  currentIndex -= 1;
  if (currentIndex < 0) {
    currentIndex = itemAmt - 1;
  }
  cycleItems();
});
    
</script>
@stop