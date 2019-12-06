@extends('frontend.layouts.master-register')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bangladesh-business-style.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')
	 <div class="row" style="margin-bottom: 8px">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a" ><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">About BuyerSeller</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
      <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">How to Do Businesses in Bangladesh
</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    
  </div>
	
<div class="row padding_0" style="padding-bottom: 5%; background-color: #fff;">
			<div class="col-lg-3" style="padding:0;padding-right: 10px; padding-top: 15px">
			<div class="bd-title" style="background-color: #255E98; color: #fff;"><h3 style="font-size: 18px" class="arrow-down">Small Business Resources</h3></div>
					
					@include('frontend/contents-view/small-business-menu')
					
					<div style="border:1px solid #255E98; width: 100%; display: block;">
						
					</div>	
			</div>
	<div class="col-lg-9" style="padding:0;padding-top: 15px; background-color: #fff;">
	
        			
        			<div class="col-sm-12 padding_0">
        				<div style="padding: 20px 0;">
        					<h3 class="portal-h3">How To Do Business in Bangladesh</h3>
        				</div>
        				

						<div class="col-sm-8 padding_0" style="padding-bottom: 15px;">
											
											<p class="advisory-p" style="font-size: 13px;">
The Bangladesh Government made some recent amendments for the business sector to enable entrepreneur to set up business in Bangladesh. The entrepreneurs and investors are free to establish limited and unlimited companies within the territorial borders of the country. The limited company category would focus on the public / private limited companies and companies limited by guarantees. If you have all the required documents with you and understand the procedure for setting up business the journey becomes smooth for you. </p>	

<p class="advisory-p" style="font-size: 13px;">The companies are registered under the Companies Act 1994 and have to abide by the rules stated therein. If in any case, the entrepreneurs or the investors need some guidance regarding the procedures, the same can be fetched from the accounting and law firms within the country offering special support to start up businesses. 
	

</p>	



								
							
							
												
									
						</div>
						<div class="col-sm-4">
							<img  class="advisory-img" style="height: 275px;" src="{{ asset('assets/fontend/bdtdc-images/historical-monuments.jpg')}}" alt="historical monuments">
							
						</div>				
						
				
			</div>
			<div class="col-sm-12 padding_0">
					<p class="advisory-p" style="font-size: 13px;">The country invites the investors from the country and outside to invest in the business in Bangladesh. The investments can be made to any company category, such as 100% joint venture (both FII and FDI), Self financed local business, Public-private partnership. </p>
					<p class="advisory-p" style="font-size: 13px;">
						The economic and legislature situations of Bangladesh favors the international investors to set up business in Bangladesh. The entire process is a nine step procedure which usually takes up to 15-20 days with all documents in place. 
					</p>
					
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