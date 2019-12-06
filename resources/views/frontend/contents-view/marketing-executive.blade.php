@extends('fontend.master3')

	@section('content')
	<div class="row padding_0" style="background-color: #fff;">
		<div class="col-sm-12 padding_0" style="padding-top:5px;">
			<div class="col-sm-1">
				<p><a href="" style="color:#000; padding-left: 10px;">Home</a><span style="color: #C30;font-size: 11px;">></span></p>
			</div>
			<div class="col-sm-2">
				<p style="margin-left: -47px;"><a href="#" style="color:#000;font-size: 11px; padding-left: 12px;">About BuyerSeller</a><span style="color: #C30;">></span></p>
			</div>
			<div class="col-sm-1">
				<p style="margin-left: -142px;"><a href="#" style="color:#000;font-size: 11px;">Careers</a><span style="color: #C30;">></span></p>
			</div>
			<div class="col-sm-3">
				<p style="margin-left: -174px;"><a href="#" style="color:#000;font-size: 11px;">Executive Trainee Scheme</a></p>
			</div>

		</div>
		<div class="col-sm-12 padding_0">
			<p style="color: #999;font-size:11px; padding-left: 9px;"> BuyerSeller is the global marketing arm for Canada-based manufacturers, traders and service providers.</p>
		</div>
		<div class="col-sm-12 padding_0">
				<img class="img-responsive" src="{!!asset('resources/assets/images/WOMAN.png',is_secured())!!}">
		</div>
		<diV class="col-sm-12 padding_0" style="padding-top:20px; background-color: #fff; padding-bottom: 3%;">
			<div class="col-sm-2">
				<p style="background:#BBB;font-size:18px;padding-left: 7px;color:#fff!important;font-weight: bold;">Job Title</p>
				<div class="list-group">
				 <a href="{{ URL::to('web-developer/laravel') }}"> <button type="button" class="list-group-item" style="font-size: 100%;color: #000;font-weight:bold;">Web Developer (php laravel & Angular JS)</button></a>
				  <a href="{{ URL::to('marketing/executive')}}"><button type="button" class="list-group-item" style="font-size: 100%;color: #fff;font-weight:bold; background: #337ab7; border-radius: 5px !important;" >Marketing Executive</button></a>
				 <a href="{{ URL::to('content/writer') }}"> <button type="button" class="list-group-item" style="font-size: 100%;color: #000;font-weight:bold;">Content Writer</button></a>
				 
				</div>
				<a href="{{URL::to('about-us',is_secured())}}"><p style="background:#BBB;font-size:18px;padding-left: 7px;color:#fff!important;font-weight: bold;">About BuyerSeller</p></a>
				<a href="{{URL::to('about-us',is_secured())}}"><p style="background:#BBB;font-size:18px;padding-left: 7px;color:#fff!important;font-weight: bold;margin-top: -8px;">Contact Us</p></a>
			</div>
			<div class="col-sm-7">
				<h3 class="content-h3">Job Description / Responsibility</h3>
				
				<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Develop key strategic relationships with midsize-to-large businesses, investors and - manufacturers to extend sales opportunities and increase revenue.
				</p>
				<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Management of the existing manufacturers networks in your territory with a focus on growing sales in the marketplace</p>
				<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Create and promote solutions and services to secure new opportunities maximizing revenue and profitability
				</p>
				<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Participate in sales calls, conduct sales meetings and educate manufacturers to support the business
				</p>
				<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Prospect, manage and close new business opportunities within your given territory
				</p>
				<p class="portal-content-p">
					<i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Continually monitor key competitors within your assigned territory. Collect, analyze and report information pertaining to any changes in competitor’s activities that will impact the company's position in the territory.

				</p>
				<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Suggest possible actions to mitigate the impact and improve the company's position in the marketplace.
				</p>
				<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Build customer relationships with prospective customers.
				</p>
				
				<h4 class="content-h4-a">Job Nature</h4>
				<p class="portal-content-p">Full-time</p>
				
				<h4 class="content-h4-a">Educational Requirements</h4>
				<p class="portal-content-p">BBA & MBA or IT graduate from foreign university/reputed local university
				Must have good command on English (IELTS will be an advantage)
					</p>
					<h4 class="content-h4-a">Experience Requirements</h4>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>1 to 2 year(s)</p>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>The applicants should have experience in the following area(s):
					Sales, Marketing, Public Relation, Customer Support/Client Service, International/Export Marketing, Corporate Marketing, Tele Marketing</p>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>The applicants should have experience in the following business area(s):</p>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>E-commerce, Web Media/Blog</p>
					<h4 class="content-h4-a"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Job Requirements</h4>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Age 24 to 30 year(s)
					Very strong command in English, both speaking and writing
					Good knowledge on B2B website such as (bdtdc.com, Alibaba, made in China, India Mart) is a must.</p>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Females are highly encouraged to apply.</p>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Have to travel to visit corporate clients on regular basis.</p>
					<p class="portal-content-p">Have to be innovative and come up with new ideas to increase revenue</p>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Expertise in prospecting: new business development and strategic planning</p>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Strategic thinker and sees opportunity through client business viewpoint</p>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Self-starter and driven for results</p>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Female are encouraged to apply.</p>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>The applicants should have experience in the following area(s):</p>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Advertising & promotion, brand planning/development, business development, Online marketing, corporate marketing, international import/export, marketing, sales, trading/wholesale/indenting, Social media marketing</p>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>The applicants should have experience in the following business area(s):
					E-commerce, consulting firms, trading companies, export/import companies, MNC.</p>
					</p>
					<h4 class="content-h4-a">Job Location</h4>
					<p class="portal-content-p">Mirpur DOHS, Dhaka</p>
					<h4 class="content-h4-a">Salary Range</h4>
					<p class="portal-content-p">Negotiable</p>
					<h4 class="content-h4-a">Other Benefits</h4>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Base salary + commission + bonuses</p>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>No cap on commissions</p>
					<p class="portal-content-p"><i class="fa fa-arrow-right" aria-hidden="true" style="font-size: 12px; color:#333;margin-left: 3px;"></i>Unlimited growth - we are growing and want you to come with us!</p>
			</div>
			<div class="col-sm-3" style="padding-bottom:40%;">
				<!--  <img style="width:100%;" max-height="340" src="http://www.bdtdc.com/resources/assets/fontend/bdtdc-images/ullsize_distr.png" alt="bangladesh means business"> -->
			</div>
		</div>

@stop