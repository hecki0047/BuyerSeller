@extends('frontend.layouts.master-register')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bangladesh-business-style.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')

<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" style=" padding-bottom: 8px;">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">About BuyerSeller</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                         
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Promoting Bangladesh Services</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    
  </div>

<div class="row padding_0" style="padding-bottom: 3%; background-color: #fff;">
			<div class="col-lg-3" style="padding:0;padding-right: 10px; padding-top: 15px">
			<div class="bd-title" style="background-color: #255E98; color: #fff; padding: 4.4%;"><h3 class="arrow-down">Industry Verticals</h3></div>

			@include('frontend/contents-view/small-business-menu')
					
					<div style="border:1px solid #255E98; width: 100%; display: block;">
						
					</div>
			

			</div> 
	<div class="col-lg-9 col-md-12 col-sm-24" style="padding:0;padding-top: 15px; background-color: #fff;">
        				
        					<div class="dtadbase-heading">
        							<h3 class="database-h3">Promoting Bangladesh Services </h3>
        						
        				
        				</div>
        				
						<div style="padding-bottom: 15px; clear:both; display:block;">
											
						    <img class="promo-img"  src="{!! asset('assets/fontend/bdtdc-images/promotion11.jpg') !!}" alt="promotion">							
						</div>
					
							
								<div class="dtadbase-heading">
        							<h3 class="database-h3">BuyerSeller Services Promotion </h3>
        				
					</div>
							<div>
								<p class="advisory-p" style="padding-top: 20px;">
								Bangladesh is Asia's focal business region and lifestyle trailblazer, coordinating a worldwide stream of

raw materials, items, innovation, data and capital all through the area. The world&#39;s most

administrations arranged economy, Bangladesh provides special services to International

organizations extending in the area, particularly the Chinese terrain. Bangladesh services expertise

likewise helps small and mid-sized enterprises climb the value chain and interfaces them with worldly

opportunities.
							</p>
							<!-- <p class="advisory-p" style="padding-top: 20px;">Click here for additional information about BDTDC advancements focusing on the services industry.

</p> -->
							</div>
							
									
						
				
			</div>

	
</div>





@stop
@section('scripts')
<script type="text/javascript">
		 

</script>
@stop