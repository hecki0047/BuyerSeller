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
											<p style="padding: 5px;border-bottom: 2px solid #1996E6;font-weight: 700;color: #333;line-height: 16px;font-size: 16px;padding-top: 17px;">Thank you for choosing Bdtdc!</p>
											<p style="font-size: 14px;">To activate your bdtdc paid membership, you will need to complete our Authentication & Verification (A&V) Process. A&V is a critical component of the bdtdc paid membership, as it checks your company's business registration and verifies your authorized company representative's identity.
											</p>
											<p style="font-size: 14px;font-weight:700;">
												Please submit your A&V application now using the exact same information that you used to register with your local government office:
											</p>

											<p><a href="{{URL::to('av-guide')}}" style="float:right;color: #039;font-size: 14px;padding-bottom:15px;">How to fill out this form</a></p>
										</div>
										<form action="{{ URL::to('manage-verification-insert',$manage->id)}}" method="post" enctype="multipart/form-data">
										{!! csrf_field() !!}
										<input type="hidden"  name="company_id">
										<div class="col-sm-12 col-md-12">

											<!-- <p style="width: 100%; border-bottom: 2px solid #255E98; font-size: 16px; color:#000; padding-top: 10px; padding-bottom: 15px; font-weight: bold;">Manage Verification</p> -->

												<table style="border:2px solid #EBF3FF !important; width: 100%; height:450px; max-height: 500px; padding-bottom: 20px;">
														<tbody>
															<tr >
																<td style="width: 40%; min-height: 30px; background-color: #EBF3FF;"><p style="padding-left: 27px;padding-top: 5px;">Personal Information</p></td>
																<td style="width: 40%; min-height: 30px; background-color: #EBF3FF;"></td>
															</tr>
															<tr class="appli-table">
																<td  class="appli-td">Name of Authorized Representative</td>
																<td class="appli-td1">
																	<input type="text" name="first_name" value="{{$manage->first_name}}" style="width: 200px;border:1px solid #DDD;padding-left:10px;">
																	<input type="text" name="last_name" value="{{$manage->last_name}}" style="width: 200px;border:1px solid #DDD;padding-left:10px;"></td>
															</tr>
															<tr>
																<td class="appli-td">Representative’s Job Title</td>
																<td class="appli-td1"><input type="text" name="department" value="{{$manage->department}}" style="width: 270px;border:1px solid #DDD;padding-left:10px;"></td>
															</tr>
															<tr>
																<td class="appli-td"><p>Contact Email Address</p></td>
																<td class="appli-td1"><input type="text" name="email" value="{{$manage->email}}" style="width: 270px;border:1px solid #DDD;padding-left:10px;margin-bottom:2%;">
																</td>
															</tr>
															<tr >
																<td style="width: 40%; min-height: 30px; background-color: #EBF3FF;"><p style="padding-left: 27px;padding-top: 5px;">Company Information</p></td>
																<td style="width: 40%; min-height: 30px; background-color: #EBF3FF;"></td>
															</tr>
															<tr>
																<td class="appli-td">Registered Company Name</td>
																<td class="appli-td1">
																	<input type="text" name="company_name" value="{{$manage->companies->name_string->name}}" style="width: 270px;border:1px solid #DDD;padding-left:10px;">
																	</td>
															</tr>
															<tr>
																<td class="appli-td">Registered Company Address</td>
																<td class="appli-td1">
																	<input type="text" name="city" value="{{$manage->companies->city}}" style="width: 200px;border:1px solid #DDD;padding-left:10px;">
																	<input type="text" name="region" value="{{$manage->companies->region}}" style="width: 200px;border:1px solid #DDD;padding-left:10px;">
																	</td>
															</tr>
															<tr>
																<td class="appli-td">Company Telephone Number</td>
																<td class="appli-td1">
																	<input type="text" name="telephone" value="{{$manage->customers->telephone}}" style="width: 270px;border:1px solid #DDD;padding-left:10px;">
																	</td>
															</tr>
															<tr>
																<td class="appli-td">Business Registration Certificate Number</td>
																<td class="appli-td1">
																	<input type="text" name="certificate" value="A144" style="border:1px solid #DDD;padding-left:10px;width: 270px;">
																	</td>
															</tr>
															<tr>
																<td class="appli-td">Company Website</td>
																<td class="appli-td1">
																	<input type="text" name="company_website" value="{{$manage->companies->company_website}}" style="width: 270px;border:1px solid #DDD;padding-left:10px;">
																</td>
															</tr>
															<tr >
																<td>
																	<input type="submit" value="Update" class="btn-join" style="margin-left: 101%;margin-top:13%;margin-bottom: 8%;color:#fff">
																</td>
															</tr>
														</tbody>
												</table>

										</div>
										</form>
										
										<div class="col-sm-12" style="margin-top:2%;">
													<p style="padding: 5px;border-bottom: 2px solid #1996E6;font-weight: 700;color: #333;line-height: 16px;font-size: 16px;">Terms and Conditions</p>
										</div>
										<div class="col-sm-12">
											<p style="font-size: 14px;">- All information provided in this form is true, accurate and complete.</p>
											<p style="font-size: 14px;">- The Company identified in this form is a legally registered corporation validly existing at its place of incorporation and can conduct the businesses herein contemplated in relation to bdtdc.com.</p>
											<p style="font-size: 14px;">- I am duly authorized to represent the Company to conduct business on bdtdc.com.</p>
											<p style="font-size: 14px;">- I agree that a non-refundable US $80 (United States Dollars Eighty) fee will be charged to the Company if the initial A&V herein returns negative results, and a second A&V is required by COMPANY, and we agree to immediately pay such fee upon demand.</p>
											<p style="font-size: 14px;">- The completion of this form by me and conduct of the Services by bdtdc.com does not guarantee positive A&V results or successful membership application.</p>
											<p  style="font-size: 14px;">- I have read and understood, and agree to, the bdtdc.com Personal Information Collection Statement below.</p>
											<p style="font-size: 14px;">
												<textarea style="height: 150px;background-color: #fff;border: 1px solid #333;">bdtdc.com Personal Information Collection Statement
The information collected from you by bdtdc.com Hong Kong Limited and/or bdtdc.com Singapore E-Commerce Private Limited (together "bdtdc.com") in connection with this A&V Service (the "Service") will be used for the purposes of organizing, operating, administrating and promoting the Services and the management of any subsequent membership of the Company on any of the bdtdc.com platforms. You, as data owner, shall disclose the information to bdtdc.com, otherwise bdtdc.com may not be able to provide the Services to you. If you or the Company you represent have subscribed for any type of memberships of the bdtdc.com International Website (URL: http://www.bdtdc.com), any information collected from you will also be used and disclosed in accordance with the terms and conditions of any and all of your membership agreements or service agreements you entered into with bdtdc.com or its affiliates as well as any and all rules, terms and conditions, and policies adopted by held by bdtdc.com. The bdtdc.com Privacy Policy may be viewed at: http://rule.bdtdc.com/rule/detail/2034.htm. If you wish to access or correct your information held by bdtdc.com, please contact your bdtdc Sales agent or bdtdc Service Team at Service@service.bdtdc.com.Furthermore, the information you provided to us in this form may be transferred to third party service providers engaged by bdtdc.com or its affiliates for the purpose of conducting the Service. Please indicate your consent for such transfer by checking the box below. If we do not receive your consent for such transfer, we will not be able to process the Service for you and your application for membership cannot be proceeded with.
												</textarea>
											</p>
											<p style="font-size: 14px;">-I, the Authorized Representative for myself and on behalf of the Company named above, agree to the transfer of personal data collected in this form to third party service providers engaged by bdtdc.com or its affiliates for the purpose of conducting the Service.</p>
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