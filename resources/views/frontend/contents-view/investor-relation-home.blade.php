@extends('frontend.layouts.master-register')
@section('page_css')
    <link property='stylesheet' href="{!! asset('css/about-page.css',is_secured()) !!}" rel="stylesheet">
  @endsection
	@section('content')
	</div>
	@include('Aboutus.bdtdc-about-us-header')
<div class="container">
  <div class="row">
		<div class="col-md-10 padding_0" style="padding-bottom: 1%;margin-top: 1%;">
			<ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{ URL::to('/',is_secured()) }}" style="color: #000"><span itemprop="name">Home &nbsp;</span> </a></li><li style="float: left"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" style="color: #000"> <i class="fa fa-angle-right"></i><span itemprop="name">About Us </span> <i class="fa fa-angle-right"></i></a></li>
			<li style="float: left"><a itemprop="item" href="#" style="color: #000"><span itemprop="name">Investor Relation Home</span> <i class="fa fa-angle-right"></i></a></li></ul>
		</div>
	</div>
					<!-- end slider -->	
					<!-- content -->
					@if($title)
					<div class="row padding_0">
	<img width="100%" src="{!! asset('assets/fontend/bdtdc-images/under-construct.png') !!}" class="img-responsive" alt="">
</div>
					@else
<div class="row padding_0">
		<div class="col-sm-12 col-md-12 padding_0" style="padding-top: 90px;">
					<div class="col-sm-7 col-md-7">
							<h1 id="overview-h1" style="margin-bottom: 0;">BuyerSeller NEWS</h1>
					</div>
					<div class="col-sm-5 col-md-5">
						
					</div>
				</div>
</div>
<div class="row padding_0">

	<div class="col-sm-8 col-md-8 col-lg-8 padding_0" style="border-right: 2px dotted #e5e5e5;">

		
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="border-bottom: 2px solid #e5e5e5; padding-bottom: 55px;">
              <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="" style="border-radius:10px !important; border:0 none;"></li>
                <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" style="border-radius:10px !important; border:0 none;" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="3" style="border-radius:10px !important; border:0 none;" class=""></li>
             </ol>
	         <div class="carousel-inner" role="listbox">
                <div class="item">
                 <img style="max-height:350px;width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/banner02.jpg') !!}" alt="">
                </div>
            
                <div class="item">
                  <img style="max-height:350px;width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/logistic-image222.jpg') !!}" alt="">
                </div>
            
                <div class="item active">
                  <img style="max-height:350px;width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/logistic-image444.jpg') !!}" alt="">
                </div>
            
                <div class="item">
                  <img style="max-height:350px;width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/team2.jpg') !!}" alt="">
                </div>
            </div>
                <span class="sr-only">Previous</span>
            
                <span class="sr-only">Next</span>
            
            </div>
				<div class="co-sm-12 col-lg-12 col-md-12 padding_0">
					<h1 class="irTitle">INVESTOR NEWS AND EVENTS</h1>
					<div class="irHighlightBox" style="margin:5px 3px 0px -10px">
			                <h2 class="irHighlightBox-h2">BuyerSeller Group Announces March Quarter 2016 and Full Fiscal Year 2016 Results</h2>
			                <div class="bdc-date">May 5, 2016</div>
			                <div class="bdc-content">
								Conference Call: 7:30 a.m. U.S. Eastern Time<br>
								Details of the conference call are as follows:<br>
			                    <div>Bangladesh: +880.175.168.1223<br>U.S.A: 1.305.684.7893<br>U.K.: <br>Hong Kong: <br><!--Bangladesh: 400 620 8038 or 800 819 0121<br/>-->Conference ID:</div>
			                </div>
			                <div class="tools">
			                    <a href="#">Add to Calendar</a>
			                  
			                    <a href="#" class="ir_tools_ico ico_webcast">Webcast</a>
			                    
			                </div>
			            </div>
			            <div class="listItem">
						    <h2 class="irHighlightBox-h2">BuyerSeller Group and New Zealand Government Form Strategic Alliance to Strengthen Trade with Bangladesh</h2>
						    <div class="bdc-date">April 18, 2016</div>
						    <div class="bdc-content">Dhaka, April 18, 2016 – BuyerSeller Group, the world’s largest online and mobile marketplace, and New Zealand Trade and Enterprise (NZTE), the New Zealand Government’s international business development agency ...</div>
						    <div class="tools"><a href="#" target="_blank">View</a> </div>
						</div>
						 <div class="listItem">
						    <h2 class="irHighlightBox-h2">BuyerSeller Group Will Announce March Quarter 2016 and Full Fiscal Year 2016 Results on May 5, 2016</h2>
						    <div class="bdc-date">April 18, 2016</div>
						    <div class="bdc-content">Chittagong, Bangladesh, April 18, 2016 – Alibaba Group Holding Limited (NYSE: BABA) today announced that it will report its unaudited financial results for the quarter and fiscal year ended March 31, 2016 before the ... ...</div>
						    <div class="tools"><a href="#" target="_blank">View</a> </div>
						</div>
				</div>
		
	</div>
	<div class="col-sm-3 col-md-3 col-lg-3">
			<div class="irSideArea" style="margin-top: 340px;">
        	<div class="irSideBox">
            	<h3 class="irSideArea-h3">Related Information</h3>
                <a href="../ir/releases">Financial Releases</a><br>
                <a href="../news/video">BuyerSeller Videos</a><br>
                <a href="../ir/stock">Stock Information</a>
            </div>
            <div class="irSideBox" style="overflow: hidden; height: 229px;">
         
            </div>
            <div class="irSideBox last">
            	<h3>Tools</h3>
                <!--<a href="#" class="ir_tools_ico ico_ipo">IPO Prospectus</a><br>-->
                <a href="../about/faqs" class="ir_tools_ico ico_faqs irSideArea-a">FAQs</a><br>
                <a href="../ir/emailalerts" class="ir_tools_ico ico_emailalerts irSideArea-a">Email Alerts</a><br>
                <a href="javascript:;" class="printPage ir_tools_ico ico_print irSideArea-a">Print Page</a><br>
                
                <a href="../contact/contacts#slide_ir" class="ir_tools_ico ico_contact irSideArea-a">Contact IR</a>
            </div>            <div class="clearfix"></div>
        </div>
		
	</div>
	<div class="col-sm-1 col-md-1 col-lg-1">
		
	</div>
	
</div>
@endif
<br>

	@stop
@section('scripts')
<script type="text/javascript">
		 

</script>
@stop