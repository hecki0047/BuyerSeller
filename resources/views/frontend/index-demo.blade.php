@extends('fontend.about-us-topbar')
	@section('content')

 <section>
 	<div class="container-fluid">
 		<div class="row padding_0">
 			<div class="col-md-6 padding_0">
 				<div style="padding: 0; margin: 0; display: block;">

            			<div class="img-box-gallery" style="width:100%">
                            <style type="text/css">
                            .my-indicators li.active {
                               /* border-left: 2px solid #fff;*/

                                                             }
                                                                    .carousel.fade {
                                          opacity: 1;
                                        }
                                        .carousel.fade .item {
                                          transition: opacity ease-out .7s;
                                          left: 0;
                                          opacity: 0; /* hide all slides */
                                          top: 0;
                                          position: absolute;
                                          width: 100%;
                                          display: block;
                                        }
                                        .carousel.fade .item:first-child {
                                          top: auto;
                                          opacity: 1; /* show first slide */
                                          position: relative;
                                        }
                                        .carousel.fade .item.active {
                                          opacity: 1;
                                         
                                        }
                     </style>
                         <div id="my_carousel" class="carousel fade" data-ride="carousel">
                                  
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img  style="height: 400px;" src="{!! asset('resources/assets/fontend/bdtdc-images/feature_2_builder.jpg',is_secured()) !!}" alt="">
                                    </div>
                                    <div class="item">
                                        <img  style="height: 400px;" src="{!! asset('resources/assets/fontend/bdtdc-images/feature_2_html.jpg',is_secured()) !!}" alt="">
                                    </div>
                                    <div class="item">
                                       <img  style="height: 400px;" src="{!! asset('resources/assets/fontend/bdtdc-images/feature_2_gallery.jpg',is_secured()) !!}" alt="">
                                    </div>
                                </div>
                            
                            </div> 
            			</div>
        						

        		</div>
 			</div>
 			<div class="col-md-6 padding_0">
 				<div style="padding:80px 50px;">
	  				<div style="padding-top: 8rem;">
	  					<h1 class="abt-h1" style="padding-left: 26px;font-size: 35px;">All-in-one Online Marketing<br> Platform to Grow Your Business</h1>
	  				</div>
	  				<ul class="feature-list">
	  					<li><a href="#">
	  					<h3>Email Marketing</h3><p>Create and deliver compelling emails that look great on any device.</p></a></li>
	  					<li><a href="#"><h3>Webinars</h3><p>Increase conversion rates with a complete webinar marketing solution.</p></a></li>
	  					<li><a href="#"><h3>Webinars</h3><p>Increase conversion rates with a complete webinar marketing solution.</p></a></li>
	  					<li><a href="#"><h3>Webinars</h3><p>Increase conversion rates with a complete webinar marketing solution.</p></a></li>
	  				</ul>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>
 <section>
 	<div class="container-fluid">
 		<div class="row padding_0">
 			<div class="col-md-6 padding_0">
 				<div style="padding:0px 50px;">
	  				<div style="padding-top: 8rem;">
	  					<h1 class="abt-h1" style="padding-left: 26px;font-size: 35px;">All-in-one Online Marketing<br> Platform to Grow Your Business</h1>
	  				</div>
	  				<ul class="feature-list">
	  					<li><a href="#">
	  					<h3>Email Marketing</h3><p>Create and deliver compelling emails that look great on any device.</p></a></li>
	  					<li><a href="#"><h3>Webinars</h3><p>Increase conversion rates with a complete webinar marketing solution.</p></a></li>
	  					<li><a href="#"><h3>Webinars</h3><p>Increase conversion rates with a complete webinar marketing solution.</p></a></li>
	  					<li><a href="#"><h3>Webinars</h3><p>Increase conversion rates with a complete webinar marketing solution.</p></a></li>
	  				</ul>
 				</div>
 			</div>
 			<div class="col-md-6 padding_0">
 				<div style="padding: 0; margin: 0; display: block;">

            			<div class="img-box-gallery" style="width:100%;margin-top:0;">
                            <style type="text/css">
                            .my-indicators li.active {
                               /* border-left: 2px solid #fff;*/

                                                             }
                                                                    .carousel.fade {
                                          opacity: 1;
                                        }
                                        .carousel.fade .item {
                                          transition: opacity ease-out .7s;
                                          left: 0;
                                          opacity: 0; /* hide all slides */
                                          top: 0;
                                          position: absolute;
                                          width: 100%;
                                          display: block;
                                        }
                                        .carousel.fade .item:first-child {
                                          top: auto;
                                          opacity: 1; /* show first slide */
                                          position: relative;
                                        }
                                        .carousel.fade .item.active {
                                          opacity: 1;
                                         
                                        }
                     </style>
                         <div id="my_carousel" class="carousel fade" data-ride="carousel">
                                  
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img  style="height: 400px;" src="{!! asset('resources/assets/fontend/bdtdc-images/feature_2_builder.jpg',is_secured()) !!}" alt="">
                                    </div>
                                    <div class="item">
                                        <img  style="height: 400px;" src="{!! asset('resources/assets/fontend/bdtdc-images/feature_2_html.jpg',is_secured()) !!}" alt="">
                                    </div>
                                    <div class="item">
                                       <img  style="height: 400px;" src="{!! asset('resources/assets/fontend/bdtdc-images/feature_2_gallery.jpg',is_secured()) !!}" alt="">
                                    </div>
                                </div>
                            
                            </div> 
            			</div>
        						

        		</div>
 			</div>
 		</div>
 	</div>
 </section>

@stop
@section('scripts')
<script type="text/javascript">
	 Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });
</script>