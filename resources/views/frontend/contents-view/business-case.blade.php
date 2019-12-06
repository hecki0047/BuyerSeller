@extends('frontend.layouts.master-register')
	@section('page_css')
    <link property='stylesheet' href="{!! asset('css/for-buyers/sustainable-manufacturing.css',is_secured()) !!}" rel="stylesheet">
  	@endsection
	@section('content')	
	<br>
	<div class="row">
		<div class="col-md-12 padding_0" style="padding-bottom: 1%">
			<ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url"  href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> Home &nbsp;</a></li>
			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url"  href="" style="color: #000"> <i class="fa fa-angle-right"></i> Sustainable Manufacturing <i class="fa fa-angle-right"></i></a></li>
			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url"  href="" style="color: #000">  Sustainable Business Case <i class="fa fa-angle-right"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="row sus-wrapper" style="border-bottom: 1px solid #999;">
		<div class="col-md-3">
				<div class="coll">
						<div class="sidebar">
							<img itemprop="image" class="sidebar-img" src="{!! asset('assets/helpcenter/company-logo-.jpg',is_secured()) !!}" alt="trade answer">
						</div>
						<div class="mm" style="border-bottom:10%;">
						<div class="contact">
							<a itemprop="url"  href="#">
									<p class="contact-p">Question ? Comments?<br> we want to your facedback !</p>
									<h3 class="contact-h3">Contacts</h3>
							</a>
						
						</div>
						<div class="cont-mess">
								<i class="fa fa-envelope-o" style="margin-top:70%;font-size:30px; margin-left:22%; color:#fff;font-weight:bolder; text-align:center;"></i>
						</div>
					</div>
						
						<div class="sidebar" style="margin-top: 20px;">
							<a itemprop="url"  href="http://www.un.org/sustainabledevelopment/sustainable-consumption-production/">
							<img itemprop="image" class="sidebar-img" style=" height: 100px;" src="{!! asset('assets/fontend/bdtdc-images/fullsize_distr.png',is_secured()) !!}" alt="trade answer">
							</a>
						</div>
				</div>
		</div>
		<div class="col-md-9">
				<div class="middle-cont">
						<h1 class="middle-cont-h1">Business Case for Sustainable Manufacturing</h1>
						<p class="cont-p">A growing number of companies are treating “sustainability” as an important objective in their strategy and operations to increase growth and global competitiveness. This trend has reached well beyond the small niche of those who traditionally positioned themselves as “green,” and now includes many prominent businesses across many different industry sectors. In many cases, these efforts are having significant results.</p>
						<p class="cont-p1" style="border-bottom:0 none;">Sustainable manufacturing helps companies to save money, enhance competitiveness, and reduce environmental, health, and safety impacts. According to a recent survey, two-thirds of nearly 3,000 company officials surveyed responded that “sustainability was critically important to being competitive in today’s marketplace."[ 1 ] In addition, as an indication of company sustainability initiatives and stakeholder interest, 93 of the S&P 100 companies reported sustainability information on their websites in 2008.[ 2 ]</p>
						<div class="cont-list-tb">
							<div class="sus-left">
								<p class="cont-p1" style="border-bottom:0 none; width: 100%; display: block;">There a number of reasons why companies are pursuing sustainability:</p>
								<ul class="mid-list">
									<li style=" list-style:square inside !important;">Increase operational efficiency by reducing costs and waste</li>
									<li>Respond to or reach new customers and increase competitive advantage</li>
									<li>Protect and strengthen brand and reputation and build public trust</li>
									<li>Build long-term business viability and success</li>
									<li>Respond to regulatory constraints and opportunities</li>
								</ul>
								<p class="cont-p1" style="border-bottom:0 none;">To learn more about the business case for sustainable manufacturing, view the Department of Commerce’s detailed presentation on the Business Case for Sustainable Manufacturing. This presentation describes the benefits of sustainable manufacturing as well as some of the challenges, and provides numerous examples.</p>
							</div>
							<div class="sus-right" style="background-color:lightgreen;color:#ffffff;">
									<h3 class="sus-right-h3">KEY BENEFITS FROM<br /> SUSTAINABLE MANUFACTURING</h3>
									<ul class="list-item">
										<li style="list-style:square inside; color: #ffffff">Lower Resource and Production Costs</li>
										<li style="list-style:square inside; color: #ffffff">Lower Regulatory Compliance Costs</li>
										<li style="list-style:square inside; color: #ffffff">Improved Sales and Brand Recognition</li>
										<li style="list-style:square inside; color: #ffffff">Greater Access to Financing and Capital</li>
										<li style="list-style:square inside; padding-bottom:10%; color: #ffffff">Easier Employee Hiring and Retention</li>
									</ul>
							</div>
							
						</div>
						<div class="sus-bottom">
							<ul class="mid-list">
									<li>Address sustainability in a coordinated, integrated, and formal manner, rather than in an ad hoc, unconnected, and informal manner</li>
									<li>Focus on increased competitiveness and revenues rather than primarily focusing on cost-cutting, risk reduction, and improved efficiency</li>
									<li>Use innovation, scenario planning, and strategic analysis to go beyond compliance</li>
									<li>Integrate sustainability across business functions</li>
									<li>Focus more on the longer-term</li>
									<li>Work collaboratively with external stakeholders</li>
								</ul>
								<p class="cont-p1" style="padding-bottom:5%; border-bottom:0 none;">To learn more about the business case for sustainable manufacturing, view the Department of Commerce’s detailed presentation on the Business Case for Sustainable Manufacturing. This presentation describes the benefits of sustainable manufacturing as well as some of the challenges, and provides numerous examples.</p>
						</div>
				</div>
			
		</div>
		
	</div>
	<div class="row padding_0" style="background-color: #fff;padding-top: 3%; padding-bottom: 3%;">
			<div class="col-md-8 col-sm-8 col-lg-8">
				<div class="col-sm-12">
					<div class="col-sm-2">
					<a itemprop="url"  target="_blank" href="http://www.ccacoalition.org/en">
					<img itemprop="image" style="width: 100%;"  class="sus-img" src="{!! asset('assets/fontend/bdtdc-images/comany-provide-logo12.png',is_secured()) !!}" alt="trade answer">
					<p style="font-size: 12px; text-align: left; width: 100%;">The Climate and Clean Air Coalition</p>
					</a>

						
					</div>
					<div class="col-sm-2">
					<a itemprop="url"  target="_blank" href="http://web.unep.org/climatechange/cop21/">
						<img itemprop="image" style="width: 100%;"  class="sus-img" src="{!! asset('assets/fontend/bdtdc-images/comany-provide-logo2.png',is_secured()) !!}" alt="trade answer">
						<p>COP21/CMP11</p>
						</a>
					</div>
					<div class="col-sm-2">
					<a itemprop="url"  target="_blank" href="https://www.ctc-n.org/">
						<img itemprop="image" style="width: 100%;" class="sus-img" src="{!! asset('assets/fontend/bdtdc-images/comany-provide-logo21.jpg',is_secured()) !!}" alt="trade answer">
						<p style="text-align: center">CTCN</p>
						</a>
					</div>
					<div class="col-sm-2">
					<a itemprop="url"  target="_blank" href="http://www.unep.org/geo/">
						<img itemprop="image" style="width: 100%" class="sus-img" src="{!! asset('assets/fontend/bdtdc-images/geo_logo.png',is_secured()) !!}" alt="trade answer">
						<p style="text-align: center">GEO</p>
						</a>
					</div>
					<div class="col-sm-2">
					<a itemprop="url"  target="_blank" href="http://www.unep.org/greeneconomy/">
						<img itemprop="image" style="width: 100%" class="sus-img" src="{!! asset('assets/fontend/bdtdc-images/comany-provide-logo3.jpg',is_secured()) !!}" alt="trade answer">
						<p style="font-size: 12px; text-align: center; width: 100%;">Green Economy</p>
						</a>
					</div>
					<div class="col-sm-2">
					<a itemprop="url"  target="_blank" href="http://www.unep.org/post2015/">
						<img itemprop="image" style="width: 100%" class="sus-img" src="{!! asset('assets/fontend/bdtdc-images/comany-provide-logo11.jpg',is_secured()) !!}" alt="trade answer">
						<p style="font-size: 12px; text-align: center; width: 100%;">2030 Agenda for Sustainable Development</p>
						</a>
					</div>
				</div>
				
			</div>
			<div class="col-md-4 col-sm-4 col-lg-4">
					<div class="col-sm-6">
					<a itemprop="url"  target="_blank" href="http://uneplive.unep.org/">
						<img itemprop="image" style="width: 100%;" class="sus-img"  src="{!! asset('assets/fontend/bdtdc-images/comany-provide-logo.jpg',is_secured()) !!}" alt="trade answer">
						<p style="text-align: center">UNEP Live</p>
					</a>
					</div>
					<div class="col-sm-6">
					<a itemprop="url"  target="_blank" href="http://thinkeatsave.org/">
						<img itemprop="image" style="width: 100%"  class="sus-img" src="{!! asset('assets/fontend/bdtdc-images/comany-provide-logo4.jpg',is_secured()) !!}" alt="trade answer">
						<p style="text-align: center">Think Eat Save</p>
						</a>
					</div>
			</div>
	</div>
	
	@stop