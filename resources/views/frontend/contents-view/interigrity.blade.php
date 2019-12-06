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
			<li style="float: left"><a itemprop="item" href="#" style="color: #000"><span itemprop="name">Integrity and Complaince</span> <i class="fa fa-angle-right"></i></a></li></ul>
		</div>
	</div>
	<div class="row" id="integrity" style="background: #fff; padding-bottom: 10%; margin-bottom: 28px; border-bottom: 1px solid #ddd;">
	<h1 class="bdc-title" style="margin-bottom: 26px;margin-left: 30px; padding-right: 30px;">INTEGRITY AND COMPLIANCE</h1>
	<p style="line-height: 22px; margin-bottom: 20px;margin-left: 30px;padding-right: 30px;">BuyerSeller holds the top level standards of business with every person who is our member, be it shareholders, suppliers, business partners, or customers. To do so, we work in accordance with BuyerSeller business conduct group code and all the laws and regulations applicable to us. We place all our customers equally and with great value.</p>
	<p style="line-height: 22px; margin-bottom: 20px;margin-left: 30px;padding-right: 30px;">We require all our team members to conduct any business between outside parties that high light our value of integrity. Any form of unlawful or unethical issue will not be tolerated. Our customers demand is on top and anyone is welcome to contact us for guidance or question about compliance issue or complain any kind of illegal or immoral behavior. Our stakeholders’ concerns are valuable to us and our integrity and compliance office is 24/7 at their service.</p>
	<p style="line-height: 22px; margin-bottom: 20px;margin-left: 30px;padding-right: 30px;">We provide the full freedom to submit any complaint or raise questions regarding anything and the sender is expected to provide his/her name, contact details, and a short description of the complaint or question so that we can reach her or him directly if needed. These information and complaint will be kept confidentially and handled with every effort to set them right, within the applicable law and regulation limits. These inquiries will be maintained in a very cautious manner and investigations shall be carried out.</p>
	<p style="line-height: 22px; margin-bottom: 20px;margin-left: 30px;padding-right: 30px;">BuyerSeller will not bear any vengeance or punishment against anyone given that any information is trustfully provided or if any proceeding or investigation is assisted upon any misbehavior that is illegal or allegedly unethical or if any question arises.</p>
	<div style="line-height: 22px; display: block; margin-bottom: 20px;margin-left: 30px;padding-right: 30px;"><span class="bold">BuyerSeller compliance office and integrity</span><br>Email: <a href="mailto:integrity@buyerseller.asia">integrity@BuyerSeller.Asia</a></div>
	<div class="italic" style="font-style: italic;margin-left:30px;padding-right:30px; display: block;">The email address stated above is applicable to complaints and questions regarding ethical issues connected to BuyerSeller team members. Any enquiries or concerns associated with our services and general business operation should be sent to the right communication channel of the appropriate business unit for instance and quick response. For the relevant contact information of our businesses and affiliated entities, kindly refer to the <a itemprop="url" href="{{ URL::to('FooterPage/pages/Contact_Us/20') }}">Customer Service Contacts</a> page.</div>
</div>
@stop