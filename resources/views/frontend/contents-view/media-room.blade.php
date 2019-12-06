@extends('frontend.layouts.master-register')
	@section('page_css')
    <link property='stylesheet' href="{!! asset('css/about-us/media-room.css',is_secured()) !!}" rel="stylesheet">
    @endsection
	@section('content')
    <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">About BuyerSeller</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Media Room</span></a></li>
                        
                    </ul>
            </div>
    
  </div>
<div class="row padding_0" style="background-color: #fff;">
	@include('frontend.contents-view.about-media-menu')
	<div class="col-sm-7" style="margin-top: 15px;">

			<div  id="myCarousel" class="carousel slide" data-ride="carousel">

						<ol class="carousel-indicators" style="position:absolute; bottom:30%;">
			                <li  data-target="#myCarousel" data-slide-to="0" class="active" style="border-radius: 10px !important; border:0 none;"></li>
			                <li data-target="#myCarousel" data-slide-to="1" style="border-radius: 10px !important; border:0 none;"></li>
			                <li data-target="#myCarousel" data-slide-to="2" style="border-radius: 10px !important; border:0 none;"></li>
			                <li data-target="#myCarousel" data-slide-to="3" style="border-radius: 10px !important; border:0 none;"></li>
			                <li data-target="#myCarousel" data-slide-to="4" style="border-radius: 10px !important; border:0 none;"></li>
			                <li data-target="#myCarousel" data-slide-to="5" style="border-radius: 10px !important; border:0 none;"></li>
			                <li data-target="#myCarousel" data-slide-to="6" style="border-radius: 10px !important; border:0 none;"></li>
			                
			            </ol>

						

					<div class="carousel-inner" role="listbox">
						<div class="item active" style="padding-bottom: 20px;">


								<div class="col-sm-12" style="padding-bottom: 25px; background-color: #fff; padding-top: 15px;">
									
									<img itemprop="image"  style="height:300px; width:100%;"  src="{!! asset('assets/fontend/images/bdtdc-youtube.jpg') !!}" class="girl img-responsive" alt="BuyerSeller tv news">

									

								</div>
								<div class="img-cont-p" style="height:450px;">
										<p style="color: #333;font-size: 12px !important; text-align: left; line-height: 22px; padding-left: 10px; min-height: 100px;">BuyerSeller.Asia, the country’s first online wholesale marketplace has commenced its journey. Here, manufacturers, suppliers, exporters and entrepreneurs can display their products directly to the global market which will eventually reduce their dependency on the brokerage houses or agencies....<a itemprop="url"  href="{!! URL::to('tv-news',is_secured()) !!}" target="_blank">
											More
									</a>
									</p>
										
								</div>

							</div>
							<div class="item" style="padding-bottom: 20px;">
								<div class="col-sm-12" style="padding-bottom: 25px; background-color: #fff; padding-top: 15px;">
									<img itemprop="image"  style="height:300px; width:100%;"  src="{!! asset('assets/fontend/images/9-TV-youtube-.jpg') !!}" class="girl img-responsive" alt="Think Bangladesh layout">
								</div>
								<div class="img-cont-p" style="height:450px;">
										<p style="color: #333;font-size: 12px; text-align: left; line-height: 22px; padding-left: 10px; min-height: 100px;">For providing all the necessary information and services for exporting the products that are being manufactured and importing the raw materials needed, a new business organization named BuyerSeller.Asia, ..... <a itemprop="url"  href="{!! URL::to('media-news',null,is_secured()) !!}" target="_blank">
											More
									</a>
								</p>				
								</div>

							</div>
							<div class="item" style="padding-bottom: 20px;">


								<div class="col-sm-12" style="padding-bottom: 25px; background-color: #fff; padding-top: 15px;">
									
									<img itemprop="image"  style="height:300px; width:100%;"  src="{!! asset('assets/daily.jpg') !!}" class="girl img-responsive" alt="BuyerSeller at dailystar">

									

								</div>
								<div class="img-cont-p" style="height:450px;">
										<p style="color: #333;font-size: 12px; text-align: left; line-height: 22px; padding-left: 10px; min-height: 100px;">“ A start-up company is ready to take off, eyeing to rake in business well over $300 million for Bangladeshi manufacturers within a year.Talking with The Daily Star, the global businessman has expected his business-to-business service ...<a itemprop="url"  href="http://www.thedailystar.net/business/new-b2b-service-the-block-1302046" target="_blank">
											More
									</a>
									</p>
										
								</div>

							</div>

						<div class="item" style="padding-bottom: 20px;">

								<div class="col-sm-12" style="padding-bottom: 25px; background-color: #fff; padding-top: 15px;">

									<img itemprop="image"  style="height:300px; width:100%;"  src="{!! asset('assets/fontend/bdtdc-images/Think-bdtdc_layout.jpg') !!}" class="girl img-responsive" alt="Think Bangladesh layout">

								</div>
								<div class="img-cont-p" style="height:450px;">
										<p style="color: #333;font-size: 12px; text-align: left; line-height: 22px; padding-left: 10px; min-height: 100px;">Bangladesh Exports Set to Boom as BuyerSeller drums up Greener Trade To foster Sustainability The BuyerSeller.Asia intervention Initiative.Investment of over $300 million into the Bangladesh trading scene and immediate employment of 200 high tech IT graduates to stimulate growth and business competition..... <a itemprop="url"  href="{!! URL::to('prease-release/the-daily-star',null,is_secured()) !!}" target="_blank">
											More
									</a>
								</p>				
								</div>

							</div>

							<div class="item" style="padding-bottom: 20px;" >


								<div class="col-sm-12" style="padding-bottom: 25px; background-color: #fff; padding-top: 15px;">

									<img itemprop="image"  style="height:300px; width:100%;"  src="{!! asset('assets/fontend/bdtdc-images/exhibition.jpg') !!}" class="girl img-responsive" alt="exhibition">

								</div>
								<div class="img-cont-p" style="height:450px;">
										<p style="color: #333;font-size: 12px; text-align: left; line-height: 22px; padding-left: 10px;min-height: 100px;">
										BuyerSeller Fights Pollution & Poverty To Create A Better Future For Bangladesh<br>
										Website Educates, Promotes And Supports Manufacturers That Follow UN Guidelines For A More Sustainable Future<br>
										Founded in 2015 by Kazi Ahmed, the BuyerSeller.Asia is a B2B website dedicated to reducing disease and environmental degradation by ...<a itemprop="url"  href="{!! URL::to('prease-release/proverty-&-pollution',null,is_secured()) !!}" target="_blank">
												More
									</a>  
									</p>
									
								</div>

							</div> 

							

							<div class="item " style="padding-bottom: 20px;">


								<div class="col-sm-12" style=" background-color: #fff; padding-top: 15px;">
									<img itemprop="image"  style="height:300px; width:100%;"   src="{!! asset('assets/fontend/bdtdc-images/rainbow-drawing.jpg') !!}" alt="rainbow drawing">
									<p style="font-size: 13px; color: #000; margin-top: 20px; font-weight: bold;">Kazi Ahmed showing the magic of RainbowBrush at The Daily Star Centre.</p>


								</div>
								<div class="img-cont-p" style="height:450px;">
										<p style="color: #333;font-size: 12px; text-align: left; line-height: 22px; padding-left: 10px; min-height: 100px;">“I see skies of blue and clouds of white/ the bright blessed day, the dark sacred night/ and I think to myself what a wonderful world.”<br>

This is how the protagonist in Louis Armstrong’s iconic song sees the world around. With references to green trees, red roses, blue skies, white clouds, friends shaking hands and babies growing up,..<a itemprop="url"  href="{!! URL::to('Kazi-Ahamed/marchant-of-rainbows',null,is_secured()) !!}" target="_blank">
											More
									</a>
								</p>
														
								</div>

							</div>

							<div class="item" style="padding-bottom: 20px;">


								<div class="col-sm-12" style="padding-bottom: 25px; background-color: #fff; padding-top: 15px;">
									
									<img itemprop="image"  style="height:300px; width:100%;"  src="{!! asset('assets/fontend/bdtdc-images/rainbow-hong-kong-Exhibition.jpg') !!}" class="girl img-responsive" alt="rainbow hong-kong Exhibition">

									

								</div>
								<div class="img-cont-p" style="height: 450px;">
										<p style="color: #333;font-size: 12px; text-align: left; line-height: 22px; padding-left: 10px; min-height: 100px;">“ I feel like I had to swim the entire Pacific Ocean to bring this innovation to reality,” says Kazi Ahmed, inventor of Rainbow Brush. Each Rainbowbrush is a watercolor marker designed for  children’s art activities. The marker’s nib is wider than its plastic body, and soft enough to produce the effect of a paintbrush, Children can attach two or more Rainbowbrush markers side by side so the nibs touch and use them together...<a itemprop="url"  href="{!! URL::to('A-TALE-OF-PATENTS-AND-PERSISTENCE',null,is_secured()) !!}" target="_blank">
											More
									</a>
									</p>
										
								</div>

							</div>  
							
							
						</div>

						

					</div>
					<!-- end slider -->	
				
		
	</div>
	<div class="col-sm-3 col-md-3" style="padding-left: 0">
                <div   style="text-align: center;">
                <div class="hgroup-pp">
                        <h3 class="inn-hgroup-h3" style="color:#666; font-size: 2em;">BuyerSeller.Asia is the brand you can trust</h3>
                        <p class="pppp" style="font-size: 1.1em;">Since its beginning, hundreds of suppliers have put their full trust on us for their trade.</p>
                        <p class="pppp" style="font-size: 1.1em;"> See what our members have to say.</p>
                    </div>
                </div>
           
       </div> 
  </div>
<div class="row" style="background: #fff;">
 <div class="line">TV NEWS</div>
  <div class="resource sell-email successful-left successful-half">
                       <div class="middle">
                            <h4 class="resource-h4">BuyerSeller on <strong>71 TV</strong> </h4>
                             <a href="https://www.youtube.com/watch?v=v9Is3OtBArI" target="_blank" style="border-radius: 5px !important;" class="cmbtn tertiary white">View video</a>
                         </div>
                    </div>
                    <div class="resource agency-platform successful-half successful-right">
                         <div class="middle">
                             <h4 class="resource-h4">BuyerSeller on <strong>Channel 9</strong></h4>
                              <a href="https://www.youtube.com/watch?v=tfvdG8vDW1w" target="_blank" style="border-radius: 5px !important;" class="cmbtn tertiary white">View video</a>
                         </div>
                    </div>
                    <div class="line">Media news -<span style="color: #8e959c;">that build your trust</span></div> 
                    <div class="resource successful-left full why-email">
                                 <div class="middle">
                                        <h4 class="resource-h4">New B2B service on the block</h4>
                                        <p style="color: #fff;"> The Daily Star</p>
                                        <a href="http://www.thedailystar.net/business/new-b2b-service-the-block-1302046" style="border-radius: 5px !important;" class="cmbtn tertiary white">more details</a>
                                </div>
                    </div>
                    <div style="clear: both;"></div> 
                            <div class="resource understand-email successful-left successful-half">
                                <div class="middle">
                                        <h4 class="resource-h4"> NEWS Press Release</h4>
                                        <a href="{{ URL::to('prease-release/the-daily-star') }}" style="border-radius: 5px !important;" class="cmbtn tertiary white">more details</a>
                                </div>
                    </div>
                    <div class="resource getting-stat successful-half successful-right">
                                 <div class="middle">
                                        <h4 class="resource-h4">BuyerSeller Fights Pollution & Poverty 
on BuyerSeller.Asia</h4>
                                        <a href="{{ URL::to('prease-release/proverty-&-pollution')}}" style="border-radius: 5px !important;" class="cmbtn tertiary white">more details</a>
                                </div>
                    </div> 
</div>
	
<br>

	@stop
@section('scripts')
<script type="text/javascript">
		 

</script>
@stop