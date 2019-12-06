@extends('frontend.layouts.header_dynamic')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bangladesh-business-style.css',is_secured()) !!}" rel="stylesheet">
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bdtdc-sme-center-style.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')

	<div class="row">
		<div class="col-sm-12 padding_0" style="padding-top:5px;">
			<div class="col-sm-1">
				<p><a href="http://www.bdtdc.com/executive" style="color:#000; padding-left: 10px;">Home</a><span style="color: #C30;font-size: 11px;">></span></p>
			</div>
			<div class="col-sm-2">
				<p style="margin-left: -47px;"><a href="#" style="color:#000;font-size: 11px; padding-left: 12px;">About Buyer Seller</a><span style="color: #C30;">></span></p>
			</div>
			<div class="col-sm-1">
				<p style="margin-left: -142px;"><a href="#" style="color:#000;font-size: 11px;">Careers</a><span style="color: #C30;">></span></p>
			</div>
			<div class="col-sm-3">
				<p style="margin-left: -174px;"><a href="#" style="color:#000;font-size: 11px;">Executive Trainee Scheme</a></p>
			</div>

		</div>
		<div class="col-sm-12">
			<p style="color: #999;font-size:11px; padding-left: 9px;">BuyerSeller.Asia is the global marketing arm for Canada-based manufacturers, traders and service providers.</p>
		</div>
		<div class="col-sm-12">
				<img class="img-responsive" src="{!!asset('assets/images/WOMAN.png',is_secured())!!}">
		</div>
		<diV class="col-sm-12 padding_0" style="padding-top:20px; background-color: #fff; padding-bottom: 3%;">
			<div class="col-sm-2">
				<p style="background:#BBB;font-size:18px;padding-left: 9px;color:#fff!important;font-weight: bold;">Job Title</p>
				<div class="list-group">
				 <a href="{{ URL::to('web-developer/laravel') }}"> <button type="button" class="list-group-item" style="font-size: 100%;color: #000;font-weight:bold;">Web Developer (php laravel & Angular JS)</button></a>
				  <a href="{{ URL::to('marketing/executive')}}"><button type="button" class="list-group-item" style="font-size: 100%;color: #000;font-weight:bold;">Marketing Executive</button></a>
				 <a href=""> <button type="button" class="list-group-item" style="font-size: 100%;color: #fff;font-weight:bold; background: #337ab7; border-radius: 5px !important;" >Content Writer</button></a>
				 
				</div>
				<a href="{{ URL::to('about-us',is_secured())}}"><p style="background:#BBB;font-size:18px;padding-left: 7px;color:#fff!important;font-weight: bold;">About Bdtdc</p></a>
				<a href="{{ URL::to('about-us',is_secured())}}"><p style="background:#BBB;font-size:18px;padding-left: 7px;color:#fff!important;font-weight: bold;margin-top: -8px;">Contact Us</p></a>
			</div>
			<div class="col-sm-7">
				<p class="portal-content-p">BuyerSeller.Asia is an online global portal that is providing a platform to buy and sell the products and services offered by the Bangladeshi and South Asian providers with a reliable background.<br>

</p>			<p class="portal-content-p">Our Dhaka office, Dhaka is looking for a smart and motivated <span style="color:#000; font-size: 14px; font-weight: 900;">“Content Writer”</span> to collaborate closely with clients and members of our team to develop and implement public relations strate-gies.</p>
				<h3 class="content-h3">Job Description / Responsibility</h3>
				<p class="portal-content-p"><span style="color:#000; font-size: 15px; font-weight: 900;">Qualified applicants</span> should have a degree in a discipline related to public relations, journalism or communications. Candidates must be self-starters with a passion for PR, superb written and oral communication skills, enjoy working in a collaborative environment and exhibit sound judg-ment, attention to detail and the ability to prioritize assignments and meet deadlines. <br>Applicants should be current on social and digital media as it relates to public relations programs. The ideal candidate will have experience in dealing with B2B products and services such alibaba.com.  </p>
				
				<h4 class="content-h4-a">Responsibilities</h4>
				<p class="portal-content-p">
				include but will not be limited to: Manage the communication strategy across a wide range of exceptional writing and editing skills, detail oriented, and reliable. <br>
Manage the Marketing & PR planning process, including key messaging strategies, marketing and pitch calendars, budgeting, and partnership marketing. 
Write press releases, bylined articles, newsletters, brochures and website content.<br> 
Cultivate relationships with journalists/bloggers and pitch media, secure placements, manage media requests for clients. <br>
Develop client reports, conduct client related research, arrange and attend meetings, events and conference calls. Developing, executing and managing social media accounts. <br>
Creating status reports and memos for internal and external use. <br>
Drafting creative and strategic media pitches. Develop, verify and maintain up-to-date media lists, tracking documents and clip books. 
Implement integrated digital and social media programs. 
Support new business proposal writing and research. <br>
Anticipating, analyzing and interpreting public opinion, attitudes and issues that might impact, for good or ill, the operations and plans of the organization.  


				</p>
				<h4 class="content-h4-a">Qualifications: </h4>
				<p class="portal-content-p">
					Excellent communication skills, both written and verbal, and strong presentation skills. Strong understanding of social media and robust intellectual curiosity.<br>
Enthusiasm, flexibility and a willingness to go above and beyond. Ability to engage and work well with various internal and external stakeholders. <br>
A clear understanding of AP Style. Familiarity with video production a plus. B.A./Masters (Eng-lish) in communications, public relations or journalism.  


				</p>
				<h4 class="content-h4-a">Special Instruction : </h4>

					<p class="portal-content-p">
					Interested candidates with the required qualifications please send your complete updated resume with a cover letter to jobs@BuyerSeller.Asia. Interview invitations will be send to your e-mail address. So, if you apply for this position, you have to must check your e-mail regularly.

					</p>
					<p><span style="font-size: 13px; font-weight: 800; padding-right: 5px;">BuyerSeller.Asia</span> is an equal opportunity employer and encourages to apply people with disabilities</p>



			</div>
			<div class="col-sm-3" style="padding-bottom:40%;">
				<!--  <img style="width:100%;" max-height="340" src="http://www.bdtdc.com/assets/fontend/bdtdc-images/ullsize_distr.png" alt="bangladesh means business"> -->
			</div>
		</div>

	</div>
	<br>

@stop