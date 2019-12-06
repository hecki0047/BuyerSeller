@extends('frontend.layouts.master-register')
	@section('page_css')
    <link property='stylesheet' href="{!! asset('css/for-buyers/sustainable-manufacturing.css',is_secured()) !!}" rel="stylesheet">
    <style type="text/css">
    	.mid-list-circle {
    padding: 20px 0 8px 7%;
    margin-top: -7.5%;
    </style>
  	@endsection
	@section('content')
	<div style="clear: both;"></div>
	<br>
	<div class="row">
		<div class="col-md-12 padding_0" style="padding-bottom: 1%">
			<ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> Home &nbsp;</a></li>
			<li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="" style="color: #000"> <i class="fa fa-angle-right"></i> Sustainable Manufacturing <i class="fa fa-angle-right"></i></a></li></ul>
		</div>
	</div>
	<div class="row sus-wrapper" style="border-bottom: 1px solid #999;margin-top:25px;">
		<div class="col-md-3 col-xs-6">
				<div class="coll">
						<div class="sidebar">
							<img class="sidebar-img" src="{!! asset('assets/helpcenter/company-logo-.jpg',is_secured()) !!}" alt="green peace">
						</div>
						<div class="mm">
						<div class="contact">
							<a href="{{ URL::to('contact') }}">
									<p class="contact-p">Question ? Comments?<br> we want to your feedback !</p>
									<h3 class="contact-h3">Contacts</h3>
							</a>
						
						</div>
						<div class="cont-mess">
								<i class="fa fa-envelope-o" style="margin-top:70%;font-size:30px; margin-left:22%; color:#fff;font-weight:bolder; text-align:center;"></i>
						</div>
					</div>
						<div class="sus-business">
							<a href="http://bdtdc.com/sustainable/business-case">
								<p class="sus-busi-p" style="padding-top: 6%;">Business Case for
						 		 <br style="margin-left:10%;">	Sustainable Manufacturing<br>
							Presentation</p>
							</a>
						</div>
						<div class="sidebar" style="margin-top: 20px;">
							<a  target="_blank" href="http://www.un.org/sustainabledevelopment/sustainable-consumption-production/">
							<img class="sidebar-img" style="height:100px;" src="{!! asset('assets/fontend/bdtdc-images/fullsize_distr.png',is_secured()) !!}" alt="trade answer">
							</a>
						</div>
				</div>
		</div>

		<div class="col-md-9 col-xs-6">
				<div class="col-sm-12">
						<h1 class="middle-cont-h1">We Promote Sustainable Manufacturing</h1>
						<p style="padding-left: 0px;    text-align: justify;" class="cont-p">BuyerSeller.Asia believes that a nation can only prosper if the corporations and businesses within that nation are working for the future. BuyerSeller is committed to supporting, promoting, and encouraging manufacturers who are strictly adhering to the guidelines set forth by the United Nations for manufacturing. </p>

						<p style="padding-left: 0px;    text-align: justify;" class="cont-p">
						The concept of Corporate Sustainability is not new. In fact, Corporate Sustainability has long been in practice to help corporations with business longevity. The new United Nations guidelines take that concept along with new, greener ways of doing business to lessen the environmental harm done during by corporate manufacturing.
						</p>
						<p style="padding-left: 0px;    text-align: justify;" class="cont-p">

						The basis of corporate sustainability is the values that a business or industry operates on. A dedication to the future well being of a business or industry is connected to how willing it is to adopt the principles of protecting the environment, defending human rights and labor, and fighting against corruption within the business.
						</p>
						<p style="padding-left: 0px;    text-align: justify;" class="cont-p">
						The BuyerSeller firmly believes in supporting new and existing corporations and manufacturers that are doing business not only to lessen the environmental footprint of their industry, but whom are also following human rights and labor guidelines set forth by the United Nation. BuyerSeller believes that by following these guidelines, we are building a stronger nation and a better future.
						</p>
						<p style="padding-left: 0px;    text-align: justify;" class="cont-p">
						Corporate sustainability is not limited to just to the environment, but also caters to human rights, labor, and anti-corruption. A sustainable business is one that respects and implements practices and procedures that protect the environment and it's employees and labor force. A sustainable business is one that also recognizes and believes in adhering to anti-corruption laws, and takes steps to avoid corruption in and out of business.
						</p>
				</div>
			</div>
		</div>
				<div class="col-sm-12 col-xs-12">
						<div class="col-sm-7">
								<div class="sus-left">
								<p class="cont-p1" style="border-bottom:0 none;">A business that wishes to have the support of the BuyerSeller should comply with the guidelines set out by the UN's Global Guide to Corporate Sustainability, including:</p>
								<div class="mid-pro-list">
									<i class="fa fa-circle" style="font-size: 10px; color: #000;"></i><div class="mid-list-circle">Adapt and implement a preventative approach to face environmental related challenges.</div>
									<i class="fa fa-circle" style="font-size: 10px; color: #000;"></i><div class="mid-list-circle">Introduce plans to accept responsibility toward the environment and nature</div>
									<i class="fa fa-circle" style="font-size: 10px; color: #000;"></i><div class="mid-list-circle">Emphasize the development and support the use of more environmentally friendly technologies in their business.</div>
									<i class="fa fa-circle" style="font-size: 10px; color: #000;"></i><div class="mid-list-circle">Support and practice human rights as well as protect the human rights of workers within the business or industry.</div>
									<i class="fa fa-circle" style="font-size: 10px; color: #000;"></i><div class="mid-list-circle">Ensure that no one within the business, including the employees, are abusing human rights</div>
									<i class="fa fa-circle" style="font-size: 10px; color: #000;"></i><div class="mid-list-circle">Maintain the freedom of the association and the right to collective bargaining.</div>
									<i class="fa fa-circle" style="font-size: 10px; color: #000;"></i><div class="mid-list-circle">Must not practice any form of discrimination in regards to occupation and employment</div>
									<i class="fa fa-circle" style="font-size: 10px; color: #000;"></i><div class="mid-list-circle">Must not participate in any form of forced or compulsory labor</div>
									<i class="fa fa-circle" style="font-size: 10px; color: #000;"></i><div class="mid-list-circle">Must not support or use any form of child labor</div>
									<i class="fa fa-circle" style="font-size: 10px; color: #000;"></i><div class="mid-list-circle">Should not support, endorse, encourage, or participate in any type of corruption, including bribery and/or extortion</div>

								</div>
							</div>
						</div>
						<div class="col-sm-5" style="padding:0;">
								
							<div class="sus-right" style="background-color:#fece4d;margin-top: 5%; width: 100%;">
									<div style="font-size: 1.3em;font-weight: bold;padding:5px;line-height: 25px;clear:both;padding-left: 35px;">BuyerSeller highly promotes-</div> 
									 <div style="font-size: 1.3em;font-weight: bold;padding:5px;line-height: 25px;clear:both;padding-left: 35px">The sustainable businesses.</div>
									<div style="font-size: 1.3em;font-weight: bold;padding: 5px;line-height: 25px;clear:both;padding-left: 35px">A sustainable business would:</div>
									<div>
									<ul class="list-item" style="padding-bottom: 5%;">
										
										<li style="list-style:square outside;font-size: 14px;">Carry out business in accordance with principles</li>
										<li style="list-style:square outside;font-size: 14px;">Strengthens society</li>
										<li style="list-style:square outside;font-size: 14px;">Be committed to leadership</li>
										<li style="list-style:square outside;font-size: 14px;">Regularly report its success to the public and government</li>
										<li style="list-style:square outside;font-size: 14px;padding: 0%; padding-bottom:10%;padding-left: 8px;">Take action at local level to combat environmental issues</li>
									</ul>
									</div>
							</div>
						</div>
				</div>
				
			
	<div class="row padding_0" style="background-color: #fff;padding-top: 3%;">
			<div class="col-md-12 col-sm-12 col-lg-12">
				<div class="col-sm-12">
					<div class="middle-cont">
						
						<div class="sus-bottom">
								<p class="cont-p1" style="padding-bottom:5%; border-bottom:0 none;text-align: justify">As mentioned in the Corporate Sustainability Report by the UN, “Corporate sustainability begins with righteous approach and value system to do business which requires the business organizations to meet the minimum standards of human rights, anti-corruption and labor environment.
								</p>
						</div>
				</div>
				</div>
		</div>
	</div>
<div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 20px; border-bottom: 1px solid #ddd;">

	<div class="col-sm-3 col-xs-8" style="text-align: center;">
					<a target="_blank" href="http://www.ccacoalition.org/en">
					<img   class="sus-img-inst" src="{!!asset('assets/helpcenter/company-logo-vr-1.png',is_secured())!!}" alt="trade answer">
					<p style="font-size: 12px; text-align:center; width: 100%;">The Climate and Clean Air Coalition</p>
					</a>

						
	</div>
<div class="col-sm-3 col-xs-8" style="text-align: center;">
	<a target="_blank" href="http://web.unep.org/climatechange/cop21/">
			<img   class="sus-img-inst" src="{!!asset('assets/helpcenter/company-logo-vr-11.jpg',is_secured())!!}" alt="trade answer">
	<p style="text-align:center;">COP21/CMP11</p>
						</a>
	</div>
	<div class="col-sm-3 col-xs-8" style="text-align: center;">
			<a target="_blank" href="http://www.unep.org/greeneconomy/">
			<img  class="sus-img-inst" src="{!!asset('assets/helpcenter/company-logo-vr-2.jpg',is_secured())!!}" alt="trade answer">
			<p style="text-align:center;">Green Economy</p>
		</a>
	</div>
<div class="col-sm-3 col-xs-8" style="text-align: center;">
		<a target="_blank" href="https://www.ctc-n.org/">
			<img  class="sus-img-inst" src="{!!asset('assets/helpcenter/company-logo-vr-3.png',is_secured())!!}" alt="trade answer">
		<p style="text-align:center;">CTCN</p>
		</a>
</div>
<div class="col-sm-3 col-xs-8" style="text-align: center;">
	<a target="_blank" href="http://uneplive.unep.org/">
		<img  class="sus-img-inst" src="{!!asset('assets/helpcenter/company-logo-vr-4.png',is_secured())!!}" alt="trade answer">
						<p style="font-size: 12px; text-align:center;width: 100%;">UNEP Live</p>
		</a>
</div>
<div class="col-sm-3 col-xs-8" style="text-align: center;">
		<a target="_blank" href="http://www.unep.org/post2015/">
						<img  class="sus-img-inst" src="{!!asset('assets/helpcenter/company-logo-vr-3.png',is_secured())!!}" alt="trade answer">
						<p style="font-size: 12px; text-align:center; width: 100%;">2030 Agenda for Sustainable Development</p>
		</a>
</div>
<div class="col-sm-3 col-xs-8" style="text-align: center;">
	<a target="_blank" href="http://uneplive.unep.org/">
				<img  class="sus-img-inst"  src="{!!asset('assets/helpcenter/company-logo-vr-4.png',is_secured())!!}" alt="trade answer">
			<p style="text-align:center;">UNEP Live</p>
			</a>
</div>
<div class="col-sm-3 col-xs-8" style="text-align: center;">
		<a target="_blank" href="http://www.unep.org/geo/">
		<img   class="sus-img-inst" src="{!!asset('assets/helpcenter/company-logo-vr-4.png',is_secured())!!}" alt="trade answer">
		<p style="text-align:center;;">Think Eat Save</p>
	</a>
</div>
				
</div>
	
	@stop