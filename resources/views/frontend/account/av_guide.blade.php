@extends('fontend.master3')
	@section('content')
			<div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 2%;margin-top:2%;">
						<div class="col-sm-12 col-lg-12 padding_0">
									<div class="col-sm-2 col-lg-2 padding_0">
												<ul class="list-rec-li" id="recive-ul" style="">
													<li class="tit-ul">Company Profile
													@if(Sentinel::getUser() && Sentinel::getUser()->active==1)
                                                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                            @else
                                                <a href="#"><i class="fa fa-circle"></i> Offline</a>
                                            @endif
														<ul class="list-rec-li"  id="recive-ul">
															<li class="rec-sub-li"><a href="{{URL::to('dashboard/company_site')}}" style="color: #666">Manage Company Profile</a></li>
															<li class="rec-sub-li"><a href="{{URL::to('dashboard/company_site#additional_info')}}" style="color: #666">Trade Performance</a></li>
														</ul>
													</li>
													<li class="tit-ul"><a href="{{URL::to('dashboard/company_site#template_setting')}}">Site Design</a></li>
													<li class="tit-ul"> Membership Status</li>
													<li class="tit-ul"> Manage Verification
														<ul class="list-rec-li" id="recive-ul">
															<li class="rec-sub-li"><a href="{{URL::to('manage-verification-insert')}}" style="color: #666">Gold Supplier A & V Status</a></li>
														</ul>
													</li>
												</ul>
									</div>

									
									<div class="col-sm-10 col-lg-10">
										<div class="col-sm-12">
											<p style="border-bottom:1px dotted #DDD;text-align:center;font-size: 23px;padding-bottom:10px;font-weight: 700;padding-top: 1%;">How to fill this form for quicker approval</p>
											<p style="padding-top:20px;font: 1.5em/180% Roboto,Helvetica,Tahoma,Arial,sans-serif;">Important guidelines</p>
											<p>1. Please enter the exact same information as your registration with your local government office. </p>
											<p style="margin-top: -1%;">2. Ensure you keep/remember this information and also share the same with Authorized Representative of your company for quicker verification.</p>
											<p style="margin-top: -1%;margin-bottom:2%;">3. If you don't have a registered company or business, please do not submit the application and contact your bdtdc sales agent for guidance.</p>
										</div>

										<div class="col-sm-12">
											<p style="font: 1.5em/180% Roboto,Helvetica,Tahoma,Arial,sans-serif;">Guidelines for filling the information:</p>
											<table style="width:100%;" class="table table-bordered">

										  <tr style="background: #EDF0FF none repeat scroll 0% 0%;">
										    <th style="border:1px solid rgba(0,0,0,.1)!important;padding-left:5px;font-size: 16px;"></th>
										    <th style="border:1px solid rgba(0,0,0,.1)!important;padding-left:5px;font-size: 16px;">Field</th>
										    <th style="border:1px solid rgba(0,0,0,.1)!important;padding-left:5px;font-size: 16px;">How to fill</th>
										  </tr>
										  <tr>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">1</td>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">Registered Company Name</td>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">The company name you enter in this field should be consistent with the one on your certificate of incorporation, business registration certificate or other relevant documents issued by your local or national company registry or equivalent agency. </td>

										  </tr>
										  <tr>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">2</td>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">Registered Company Address</td>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">Please enter the company address shown on your business registration certificate or relevant documents. If there is a discrepancy with the official records, you will be required to provide supporting documentation.</td>

										  </tr>
										  <tr>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">3</td>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">Company Telephone Number</td>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">The telephone number should be a landline number registered under the company’s name. You might be required to provide a copy of the latest phone bill as proof of ownership.
										Note that the verification company may contact you through this phone number within 2-3 business days. Please make sure the representative and/or you are available and have all the supporting documents ready for the A&V Check. </td>

										  </tr>
										  <tr>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">4</td>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">Name of Authorized Representative</td>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">Please provide the representative’s full name and make sure he/she is aware of the verification.</td>

										  </tr>
										  <tr>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">5</td>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">Representative’s Job Title</td>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">Please enter the latest job title of the representative. Note that the representative might be required to provide a proof of employment and evidence proving that he/she was authorized to represent the company.</td>

										  </tr>
										  <tr>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">6</td>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">Contact Email Address</td>
										    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:5px;font-size:16px;">We will contact you via email if we have any questions. Please make sure your email address is accurate and up-to-date.</td>

										  </tr>
										</table>
										</div>
									

									</div>
						

			</div>

			
			
		</div>
@stop
@section('scripts')
<script type="text/javascript">
	
	document.getElementById('recive-ul').style.cssText ='padding:0; display:block; width:100%;padding-top:10px;height: 600px; background: #E8EDF4; padding-left:15px;';

		$(".tit-ul").css({
	    width: "100%",
	    color:"#000",
	    "font-size":"13px",
	    "padding-bottom":"10px",
	    "font-weight":"bold",
	    "display":"block",

		});
		$(".rec-sub-li").css({
			width:"100%",
			"padding-top":"7px",
			"line-height":"24px",
			"font-size":"11px",
			color:"#666;",
		});
	

</script>

@stop