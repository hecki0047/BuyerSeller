@extends('frontend.layouts.header_dynamic')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bangladesh-business-style.css',is_secured()) !!}" rel="stylesheet">
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bdtdc-sme-center-style.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')


<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" style=" padding-bottom: 8px;">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">About BDTDC</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                         
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Databank Listings</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    
  </div>
	
<div class="row padding_0" style="padding-bottom: 5%; background-color: #fff; padding-bottom: 5%;">
			<div class="col-lg-3" style="padding:0;padding-right: 10px; padding-top: 15px">
			<div class="bd-title" style="background-color: #255E98; color: #fff;"><h3 class="arrow-down" style="font-size:18px; color:#fff;">Small Business Resources</h3></div>
					
				@include('frontend.contents-view/small-business-menu')
					
					<div style="border:1px solid #255E98; width: 100%; display: block;">
						
					</div>
				
			</div>
	<div class="col-lg-9" style="padding:0;padding-top: 15px; background-color: #fff;">
	
        			
        			<div class="col-sm-12 padding_0">
        				
        					<div class="dtadbase-heading">
        							<h3 class="database-h3">Register With Databank:</h3>
        						
        				
        				</div>
        				

						<div class="col-sm-7 padding_0" style="padding-bottom: 15px;">
											
											<p class="advisory-p" style="font-size: 13px; padding-top: 20px;">
On the Council’s Company Databank, the registration can be done without payment. The data you put up will give us the capability to offer you with a broad scope of our servicing, considering the business concern corresponding help and updates upon the most recent publicities & actions that links you up with possibilities within Bangladesh and the world.</p>
<p class="advisory-p" style="font-size: 13px; padding-top: 20px;">
	In order to register online, kindly please select the position of your nation. Whenever you opt to register through fax or through post, kindly please download the reserved registration form. Kindly please fill out the particulars and give back the form to us.
</p>		
	

								
							
							
												
									
						</div>
						<div class="col-sm-5">
						<div>
							<img itemprop="image" class="advisory-img" src="assets/fontend/bdtdc-images/global-partner.jpg" alt="global-partner"> 

						</div>
						<div>
							
						</div>
							
							
						</div>				
						
				
			</div>

	
</div>
</div>


<br>
<br>

@stop
@section('scripts')
<script type="text/javascript">
		 

</script>
@stop