@extends('fontend.master3')
	@section('content')
			<div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 20px;">
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
															<li class="rec-sub-li"><a href="#" style="color: #666">Manage Company Profile</a></li>
															<li class="rec-sub-li"><a href="#" style="color: #666">Trade Performance</a></li>
														</ul>
													</li>
													<li class="tit-ul">Site Design</li>
													<li class="tit-ul"> Membership Status</li>
													<li class="tit-ul"> Manage Verification
														<ul class="list-rec-li" id="recive-ul">
															<li class="rec-sub-li"><a href="#" style="color: #666">Gold Supplier A & V Status</a></li>
														</ul>
													</li>
												</ul>
									</div>
									<div class="col-sm-10 col-lg-10">
										<div class="col-sm-12 col-md-12">
										
									
											<p style="width: 100%; border-bottom: 2px solid #255E98; font-size: 16px; color:#000; padding-top: 10px; padding-bottom: 15px; font-weight: bold;">Manage Verification</p>
												<table style="border:2px solid #EBF3FF !important; width: 100%; height:450px; max-height: 500px; padding-bottom: 20px;">
														<tbody>
															<tr >
																<td style="width: 40%; min-height: 30px; background-color: #EBF3FF;"><p style="padding-left: 27px;padding-top: 5px;">A&V application received as per below:</p></td>
																<td style="width: 40%; min-height: 30px; background-color: #EBF3FF;"></td>
															</tr>
															<tr class="appli-table">
																<td  class="appli-td">Name of Authorized Representative</td>
																<td class="appli-td1">{{$manage->first_name}}{{$manage->last_name}}</td>
															</tr>
															<tr>
																<td class="appli-td">Representative’s Job Title</td>
																<td class="appli-td1">Owner{{$manage->department}}</td>
															</tr>
															<tr>
																<td class="appli-td">Contact Email Address</td>
																<td class="appli-td1">{{$manage->email}}</td>
															</tr>
															<tr>
																<td class="appli-td">Registered Company Name</td>
																<td class="appli-td1">{{$manage->companies->name_string->name}}</td>
															</tr>
															<tr>
																<td class="appli-td">Registered Company Address</td>
																<td class="appli-td1">{{$manage->companies->city}},{{$manage->companies->region}}</td>
															</tr>
															<tr>
																<td class="appli-td">Company Telephone Number</td>
																<td class="appli-td1">{{$manage->customers->telephone}}</td>
															</tr>
															<tr>
																<td class="appli-td">Business Registration Certificate Number</td>
																<td class="appli-td1">A144</td>
															</tr>
															<tr>
																<td class="appli-td">Company Website</td>
																<td class="appli-td1">{{$manage->companies->company_website}}</td>
															</tr>
														</tbody>
												</table>
										</div>
										<form action="{{ URL::to('manage-verification')}}" method="post" enctype="multipart/form-data">
												{!! csrf_field() !!}
												<input type="hidden"  name="company_id">
										<div class="col-sm-12 col-md-12">
											<p style="width: 100%; border-bottom: 3px solid #255E98; font-size: 16px; color:#000; padding-top: 10px; padding-bottom: 15px; font-weight: bold;">To speed up the process, please submit your supporting documents now!</p>
												<div class="col-sm-4 col-md-4">
													<div style="width: 270px; float: left;">
														<h4 style="font-weight: bolder; margin: 10px; display: block;line-height: 12px; font-size: 13px; color: #333;">Business Registration Certificate</h4>
															<ul class="app-list">
																<li>It must be the original government-issued document</li>
																<li>It must contain the company name exactly as submitted in the A&V application</li>
															</ul>
															<!-- <button>Select File</button> -->
															<input type='file' name='certificate_1' style="border:1px solid #DDD;">
													</div>
														
												</div>
												<div class="col-sm-4 col-md-4">
													<div style="width: 270px; float: left;">
														<h4 style="font-weight: bolder; margin: 10px; display: block;line-height: 12px; font-size: 13px; color: #333;">Company Telephone Bill</h4>
														<ul class="app-list">
															<li>Issued within the last 3 months</li>
															<li>Under company/director name</li>
															<li>Listing your company's telephone Number </li> 
														</ul>
														<input type='file' name='certificate_2' style="border:1px solid #DDD;">
														   <!-- <button>Select File</button>  -->      
													</div>
													
												</div>
												<div class="col-sm-4 col-md-4">
												<div style="width: 270px; float: left;">
														<h4 style="font-weight: bolder; margin: 10px; display: block;line-height: 12px; font-size: 13px; color: #333;">Letter of Authorization</h4>
														<ul class="app-list">
															
														<li>Used to verify if applicant is authorized or not</li>	
														<li>For company owners/directors there is no need to provide it</li>
														<li>Download LOA template here</li>	
													</ul>
													<!-- <button>Select File</button> -->
													<input type='file' name='certificate_3' style="border:1px solid #DDD;">
												</div>
											</div>
									</div>
									<div class="col-sm-12 col-md-12">
										<ul class="app-list" style="padding-top: 4%;">
											<li style="color: #333; font-size: 14px;">Max file size for uploads is 5MB. File types accepted: zip, jpg, bmp and png.</li>
											<li style="color: #333; font-size: 14px;">Please note: more documents may be needed during the verification process.</li>
										</ul>
										<input type="submit" value="Submit" class="btn-join" style="margin-left: 40%;">
										<p style="float: right;margin-top:5%;"><a href="#">Learn how to increase your performance as a Gold Supplier</a></p>
									</div>
								</form>
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