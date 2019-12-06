@extends('frontend.layouts.master-register')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('css/about-page.css',is_secured()) !!}" rel="stylesheet">
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bdtdc-sme-center-style.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')
</div>
	@include('Aboutus.bdtdc-about-us-header')

<div class="container">
<div class="row">
		<div class="col-md-10 padding_0" style="padding-bottom: 1%;margin-top: 1%;">
			<ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"><span itemprop="name">Home &nbsp;</span> </a></li><li style="float: left"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" style="color: #000"> <i class="fa fa-angle-right"></i><span itemprop="name">About Us </span> <i class="fa fa-angle-right"></i></a></li>
			<li style="float: left"><a itemprop="item" href="#" style="color: #000"><span itemprop="name">Our Office </span> <i class="fa fa-angle-right"></i></a></li></ul>
		</div>
	</div>
<div class="row padding_0" style="background:#fff;">
		<div class="col-sm-12 col-md-12 padding_0">
					<div class="col-sm-7 col-md-7">
							<h1 id="overview-h1" style="margin-bottom: 0;">Let's meet over coffee</h1>
					</div>
					<div class="col-sm-5 col-md-5">
						
					</div>
				</div>
		<div class="col-sm-12" style="padding-left: 15px;font-size: 15px;font-weight: 400;padding-bottom: 15px;padding-top: 15px;">We are pleased to welcome you to our office “city in a garden,” the Marina Bay Financial Center in Singapore. We look forward to meeting you as a new partner and working with you in developing and maintaining your buying/selling needs from South Asia.</div>
</div>
<div class="row padding_0" style="background:#fff; border-bottom: 1px solid rgba(0,0,0,.1); padding-bottom:5%; margin-bottom:2%;">

	<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
		<div class="col-md-12">
			<img  itemprop="image" style="width:100%; max-height:550px;" src="{!! asset('assets/aboutus/office1.png') !!}" class="img-responsive" alt=" office">
		</div>
		<!-- <div class="col-md-4">
		<img  itemprop="image" style="width:100%; max-height:550px;" src="{!! asset('assets/aboutus/office-2.png') !!}" class="img-responsive" alt=" office">
			</div> -->
		<!-- <div class="text-address">
				<h2 class="company-h2" style="margin-top:16%;color:#fff; margin-bottom:0;">BuyerSeller Group Offices in the world</h2>
			<div class="">
						<div class="block">
                			<div class="hr" style="color:#fff;">
                    	<h3 class="block-h3" style="padding-left: 0; font-size: 18px; color: #fff; display: block;margin-bottom:0;">Bangladesh BuyerSeller Office :</h3>
                    	<p class="block-p" style="color:#fff;">House: 818, Road: 12<br>Avenue: 06 Mirpur DOHS, Dhaka 1216<br>Sat. - Thur. 09:00 am - 6:00 pm<br>Bangladesh<br>Closed on Friday and Public Holidays<br>Email:info@buyerseller.asia<br>Phone: 880.1708884440</p>
                	</div>
           		 </div>
			</div>
		</div>	 -->		
				
	</div>
	<div class="col-sm-12 col-md-12 col-lg-12">
			<h2 class="company-h2">BuyerSeller.Asia Offices in the world</h2>
			<div class="col-sm-4 col-md-4 col-lg-4 padding_0">
						<div class="block">
                			<div class="hr">
                    	<h3 class="block-h3" style="padding-left: 0; font-size: 18px; color: #333333; display: block;">Bangladesh Office :</h3>
                    	<p class="block-p">House: 818, Road: 12, Avenue: 06<br> Mirpur DOHS,<br> Dhaka 1216, Bangladesh<br><br>Email:info@buyerseller.asia<br>Phone: 880.170.888.4440<br>Closed on Friday and Public Holidays</p>
                	</div>
           		 </div>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="block">
                			<div class="hr">
                    	<h3 class="block-h3" style="padding-left: 0; font-size: 18px; color: #333333; display: block;">Singapore Office:</h3>
                    	<p class="block-p">10 Marina Blvd Marina Bay<br> 
Financial Centre Tower 2 Level 39,<br>
Singapore 018983</p>
                	</div>
           		 </div>
			</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="block">
                			<div class="hr">
                    	<h3 class="block-h3" style="padding-left: 0; font-size: 18px; color: #333333; display: block;">USA Office :</h3>
                    	<p class="block-p">125 Colson Drive<br>Cudjoe Key, Florida 33042<br>U.S.A<br>Ph: 1.305.684.7893</p>
                	</div>
           		 </div>
			</div>
			
	</div>
	
</div>

	@stop
@section('scripts')
<script type="text/javascript">
		 

</script>
@stop