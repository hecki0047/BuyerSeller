@extends('frontend.layouts.header_dynamic')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bangladesh-business-style.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')

<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" style=" padding-bottom: 8px;">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">About Buyer Seller</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                         
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">BuyerSeller Global Partnerships</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    
  </div>
	
<div class="row padding_0" style="padding-bottom: 3%; background-color: #fff;">
			<div class="col-lg-3" style="padding:0;padding-right: 10px; padding-top: 15px">
			<div class="bd-title" style="background-color: #255E98; color: #fff;"><h3 class="arrow-down">Small Business Resources</h3></div>
					
					@include('frontend/contents-view/small-business-menu')
					
					<div style="border:1px solid #255E98; width: 100%; display: block;">
						
					</div>
				
			</div>
	<div class="col-lg-9" style="padding:0;padding-top: 15px; background-color: #fff;">
	
        			
        			<div class="col-sm-12 padding_0">
        				
        					<div class="dtadbase-heading">
        							<h3 class="database-h3">Global Partnership of Buyer Seller</h3>
        						
        				
        				</div>
        				

						<div class="col-sm-7 padding_0" style="padding-bottom: 15px;">
											<h5  class="globalpartner-p">Federation of Bangladesh Business Associations Worldwide</h5>
											<p class="advisory-p" style="font-size: 13px; padding-top: 20px;">
Shaped in 2015, with the solid backing of Buyer Seller, the Federation of Bangladesh Business Associations Worldwide (the "Federation") is a global business affiliation that is set up outside Bangladesh. These affiliations were begun by foreign dealers, purchasers and experts who wish to keep up close business joins with Bangladesh. At present, there are 11,000 individual members presenting 40 business associations in 29 nations and areas. Buyer Seller serves as the Secretariat of the Federation and arranges the yearly Bangladesh Forum which gives a stage to affiliated individuals to assemble in Bangladesh consistently to talk about issues of regular interest.
</p>
<h5 class="globalpartner-p">Bilateral Committees</h5>
<p class="advisory-p" style="font-size: 13px; padding-top: 20px;">
	To promote trade and financial ties amongst Bangladesh and its major trading partners at the most senior level, the BDTDC serves as the Secretariat of six bilateral boards of trustees, including the United States, Japan, Europe, Taiwan, France, and Korea. Yearly or biennial whole gatherings are held to encourage data exchange, to advance exchange and economic cooperation, and, as and when required, to make representations to the right governments
</p>		
							
									
						</div>
						<div class="col-sm-5">
						<div>
							<img itemprop="image"  class="advisory-img" src="{!! asset('assets/fontend/bdtdc-images/Global-partner.jpg') !!}" alt="Global partner">
						</div>
							
							
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