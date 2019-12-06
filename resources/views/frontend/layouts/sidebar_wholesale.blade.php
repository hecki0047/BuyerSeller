<div style="clear:both;"></div>
<div id="topbar_sha" style="padding-left:1.2%; padding-bottom: 25px;"  class="row">
        <div class="col-sm-3 col-xs-12 mobo-categories hr-gap no-padding">

            <h3 style="font-size: 16px" id="cat-tle"><i class="fa fa-list-ul" style="font-size: 18px; color:#666;"></i> CATEGORIES</h3>
            <div id="whole-sl-cat-lst">
             @if ($product_categorys) 
           @foreach ($product_categorys as $category)
            <ul    class="pull-left bazar-list" itemscope itemtype="http://data-vocabulary.org/Product">
                <li class="" data-id="market-<?php echo $category['parent_id']; ?>">
                    <a href="#" rel="category" itemprop="url">
                        <span itemprop="name" style="color:#666;display: inline-block;padding: 0px 15px 0px 0;text-align: right; font-size:12px;"> {{ $category->pro_parent_cat->name  }}</span>  </a>
                    <span class="pull-right"><i class="fa fa-angle-right"></i></span>
                </li>
            </ul>
            @if ($category->pro_parent)
            
            <div style="padding-top:0px" class="col-lg-offset-12 col-md-offset-12 col-sm-offset-12 cacostos util-clearfix" id="market-<?php echo $category['parent_id']; ?>">
                <ul class="cacostos-list" itemscope itemtype="http://data-vocabulary.org/Product">
                    <li>
                       
                   <span itemprop="name" style="color:#666;font-weight:700;line-height:20px;margin-bottom:10px"> {{ $category->pro_parent_cat->name  }} </span>
                        <div style="margin-top:10px" class="ditio-cacostos">

                           
                            @foreach ($category->pro_parent as $cat)
                            
                              @if($cat->column==1)
	                              <a itemprop="url" href="{{URL::to('wholesale/category/product',$cat['id'],is_secured()) }}">
	                                   <span itemprop="name" style="color:#666;">{{ $cat->name }}</span>
	                              </a>
                              @endif

                            @endforeach


                        </div>
                    </li>
                </ul>
                 <ul class="cacostos-list" style="margin-top:30px">
                    <li>
                        <a href="#" class="prothom-cacostos"></a>
                        <div class="ditio-cacostos" itemscope itemtype="http://data-vocabulary.org/Product">
                           
                             @foreach ($category->pro_parent as $cat)
                              @if($cat->column==2)
                              <a rel="category" itemprop="url" href="{{URL::to('wholesale/category/product',$cat['id'],is_secured()) }}">
                                  <span itemprop="name" style="color:#666;">{{ $cat->name }}</span>
                              </a>
                              @endif
                          
                            @endforeach
                            
                        </div>

                    </li>
                </ul>
            </div>
            @endif


            @endforeach

            @endif
            <div class="pull-left" style="padding-left: 1.3%;;padding-right: 8%;padding-top: 6%;font-weight: 600; width: 99%;margin: 1px;height: 30px;">

                

                    <a href="{{ URL::to('online-marketplace',null,is_secured()) }}">

                       All Categories </a>

                    <span class="pull-right"><i class="fa fa-angle-right"></i></span>
            </div>

        </div>
       </div> 

  <div class="col-xs-12 col-sm-9 padding_0 wholesale-slider" style="padding-top: 1px;">

			<section id="slider"><!--slider-->

				<div class="col-sm-12 col-xs-12" style="margin-bottom:4%">

					<div id="slider-carousel" class="carousel slide" data-ride="carousel">

						<ol class="carousel-indicators" style="bottom: -12px;" >

							<li data-target="#slider-carousel" data-slide-to="0" class="active" style="border-radius:10px !important; border:0 none;"></li>

							<li data-target="#slider-carousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;"></li>

							<li data-target="#slider-carousel" data-slide-to="2" style="border-radius:10px !important; border:0 none;"></li>
							<li data-target="#slider-carousel" data-slide-to="3" style="border-radius:10px !important; border:0 none;"></li>
              <li data-target="#slider-carousel" data-slide-to="4" style="border-radius:10px !important; border:0 none;"></li>
						</ol>
						<div class="carousel-inner" itemscope itemtype="http://schema.org/ImageObject">

							<div class="item active">

								<div class="col-sm-12 padding_0" style="margin-left:0px;">
									<img  itemprop="contentUrl"  style="height:320px;width: 100%; overflow: hidden;" src="{{asset('assets/gold/automotive-electronics.jpg',is_secured())}}" class="girl img-responsive" alt="automotive electronics" />
								</div>

							</div>

							<div class="item">

								<div class="col-sm-12 padding_0" style="margin-left:0px;">
									<img itemprop="contentUrl"  style="height:320px;width: 100%; overflow: hidden;" src="{{asset('assets/gold/jewelry-watches.jpg',is_secured())}}" class="girl img-responsive" alt="jewelry watches" />

								</div>

							</div>
              <div class="item">

                <div class="col-sm-12 padding_0" style="margin-left:0px;">
                  <img itemprop="contentUrl"  style="height:320px;width: 100%; overflow: hidden;" src="{{asset('assets/gold/product-exibit.jpg',is_secured())}}" class="girl img-responsive" alt="jewelry watches" />

                </div>

              </div>
							<div class="item">

								<div class="col-sm-12 padding_0" style="margin-left:0px;">
									<img  style="height:320px;width: 100%; overflow: hidden;" src="{{asset('assets/gold/lighting-products.jpg',is_secured())}}" class="girl img-responsive" alt="lighting products" />

									<!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->

								</div>

							</div>

							<div class="item">

								<div class="col-sm-12 padding_0" style="margin-left:0px;">
									<img  style="height:320px;width: 100%; overflow: hidden;" src="{{asset('assets/gold/warehousing-services.jpg',is_secured())}}" class="girl img-responsive" alt="warehousing services" />

								</div>

							</div>
						</div>

					</div>
				</div>
	</section><!--/slider--> 
</div>
</div>



