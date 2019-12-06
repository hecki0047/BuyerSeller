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
                         
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Promoting Bangladesh Products</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    
  </div>


	
<div class="row padding_0" style="padding-bottom: 3%; background-color: #fff;">
			<div class="col-lg-3" style="padding:0;padding-right: 10px; padding-top: 15px">
			<div class="bd-title" style="background-color: #255E98; color: #fff; padding: 4.4%;"><h3 class="arrow-down">Industry Verticals</h3></div>
					
					<div class="filter-body">
							<ul id="format-filterlist" class="filter-list">

						
								<li class="" id="Conference-Forum"><span class="hover">+</span>Setting Up Business in Bangladesh </li>
								<li class=" filter-specified" id="Seminar-Workshop"><span class="hover">x</span>SME Finance </li>
								<li class="" id="Trade-Mission"><span class="hover">+</span>Import / Export Procedures of Bangladesh </li>
								<!-- <li class="" id="Hong-Kong-Pavilion"><span class="hover">+</span>Trade Regulations </li> -->
								<li class="" id="Others-1"><span class="hover">+</span>Support and Consultation Centre for SMEs (SUCCESS)</li>
								<li class="" id="Others-2"><span class="hover">+</span>BuyerSeller SME Centre </li>
								<li class="" id="Others-3"><span class="hover">+</span>BuyerSeller SME Start-up Programme </li>	
								<li class="" id="Others-4"><span class="hover">+</span>Business Advisory </li>	
								<li class="" id="Others-5"><span class="hover">+</span>Business Tools </li>
								<li class="" id="Exhibition"><span class="hover">+</span>Accounting, Management Consultancy & Corporate Services</li>
								<li class=""><span class="hover">+</span>Finance Services</li>
								<li class="" ><span class="hover">+</span>Franchising & Licensing</li>	
								<li class="" ><span class="hover">+</span>Information & Communications Technology</li>
								<li class="" ><span class="hover">+</span>Infrastructure & Real Estate</li>
								<li class="" ><span class="hover">+</span>Legal Services</li>	
								<li class="" ><span class="hover">+</span>Logistics & Maritime Services </li>	
								<li class="" ><span class="hover">+</span>Medical Services</li>
								<li class="" ><span class="hover">+</span>Technology</li>	
								<li class="" ><span class="hover">+</span>Testing & Certification</li>	
								<li class="" ><span class="hover">+</span>Tourism</li>		

							</ul>
				
					</div>

			</div>
	<div class="col-lg-9 col-md-12 col-sm-24" style="padding:0;padding-top: 15px; background-color: #fff;">
        				
        					<div class="dtadbase-heading">
        							<h3 class="database-h3">Promoting Bangladesh and Business Services </h3>
        						
        				
        				</div>
        				
						<div style="padding-bottom: 15px; clear:both; display:block;">
											
						    <img class="promo-img"  src="{!! asset('assets/fontend/bdtdc-images/promotion11.jpg',is_secured()) !!}" alt="promotion">							
						</div>
					
							
								<!-- <div class="dtadbase-heading">
        							<h3 class="database-h3">BDTDC Product Promotion </h3>
        				
					</div> -->
							<div>
								<p class="advisory-p" style="padding-top: 20px;">
								BuyerSeller.Asia promotes Bangladeshi products and services of SMEs in the global market by providing entrepreneurs the right set of tools and inventories to succeed. BuyerSeller is not only limited to outreach global market and establish trust between buyers and sellers; it also undertakes initiatives to help entrepreneurs of Bangladesh establish new business and walk through the right path to make their mark in both local and international market.
 
							</p>
							<p class="advisory-p" style="padding-top: 20px;">
							Advancing export of Bangladesh products has been a key capacity of BuyerSeller since its foundation. Every year, we arrange more than 100 product-related promotional activities focusing on both developed and developing markets. Promotional activities include incorporated business bundles, business assignments, solo presentations, in-store advancements and showcase shows. Through our activities every year, a huge number of SMEs in Bangladesh can convey their items to the doorsteps of worldwide buyers and set up helpful contacts. 
							</p>
							<p class="advisory-p" style="padding-top: 20px;">
								Focusing on foreign developing markets; our contribution concentrates basically on finding ways and building images, with a perspective to recognizing brand new opportunities for SMEs in Bangladesh and building awareness as a prime supplier of qualitative and competitive priced products. In established markets, we develop efforts to separate higher-esteemed Bangladeshi stock by highlighting quality, smart outlines, and adherence to stringent Eco-friendly and maintain safe standards. Likewise, we are collaborating with different International markets to promote two-sided trade amongst Bangladesh and other countries of the world.

							</p>
							<p class="advisory-p" style="padding-top: 20px;">
								Bangladesh is the focal business region and lifestyle trailblazer of Asia, coordinating a worldwide stream of raw materials, items, innovation, data and capital all through the area. The world's most administrations arranged economy, Bangladesh, provides special services to International organizations extending in the area, particularly the Chinese terrain. Likewise, expertise of Bangladesh services offered helps small and mid-sized enterprises climb the value chain and interfaces them with worldly opportunities.

							</p>
							</div>
							
									
						
				
			</div>

	
</div>





@stop
@section('scripts')
<script type="text/javascript">
		 

</script>
@stop