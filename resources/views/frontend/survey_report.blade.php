@extends('fontend.master2')
	@section('content')
		<div class="row" style="margin-top:2%;">
			<div class="col-sm-12 hero_wrap" style="height: 650px;">
				<p class="survey">Bdtdc.<span style="font-size:25px;">com</span></p>
				<p class="survey1">Survey: Contact Supplier on Bdtdc.com (Feb. 2016)</p>
				
				<p class="survey2">Thank you and welcome to the survey! </p>
				<button type="button" class="btn-btn-primary survey3 s">Start now</button>

			</div>
			<div class="col-sm-12 su" style="margin-top:3%;background-color:#fff !important;">
				<div class="col-sm-12" style="margin-top: 5%;">
					<div class="col-sm-1">
						<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
							1
						</p></span>
					</div>
					<div class="col-sm-11">
						<p style="font-size: 22px;">Have you selected "Contact Supplier" after searching for products or suppliers on Bdtdc.com?
						<span style="color:#666;">(Choose only one answer)</span></p>
						<img style="height:295PX;width:90%;margin-top: 3%;" src="{!! asset('assets/survey/survey.png') !!}" alt="" />
					</div>
				</div>
				<div class="col-sm-12 yes" style="margin-top:3%;">
					<div class="col-sm-1"></div>
					<div class="col-sm-5 survey4">
						<input type="radio" id="radio" name="survey" value="1"> Yes
					</div>
					  
				</div>
				<div class="col-sm-12 no" style="margin-top:3%;">
				    <div class="col-sm-1"></div>
					<div class="col-sm-5 survey4" style="margin-top: -1%;">
						<input type="radio" id="radio" name="survey" value="0"> No
					</div>
				</div>
				<div class="col-sm-12 y1">
					<div class="col-sm-12" style="margin-top: 5%;">
						<div class="col-sm-1">
							<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
								2
							</p></span>
						</div>
						<div class="col-sm-11">
							<p style="font-size: 22px;">After selecting "Contact Supplier", was the below form displayed?
							<span style="color:#666;">(Choose only one answer)</span></p>
							<img style="height:276PX;width:58%;margin-top: 3%;" src="{!! asset('assets/survey/survey1.png') !!}" alt="" />
						</div>
					</div>
					<div class="col-sm-12 yes1" style="margin-top:3%;">
						<div class="col-sm-1"></div>
						<div class="col-sm-5 survey4">
							<input type="radio" name="y" value="1"> Yes
						</div>
						  
					</div>
					<div class="col-sm-12 no1" style="margin-top:3%;">
						   <div class="col-sm-1"></div>
						<div class="col-sm-5 survey4" style="margin-top: -1%;">
							<input type="radio" name="y" value="0"> No
						</div>
					</div>
			    </div>
			    <div class="col-sm-12 n1">
					<div class="col-sm-12" style="margin-top: 5%;">
						<div class="col-sm-1">
							<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
								2
							</p></span>
						</div>
						<div class="col-sm-11">
							<p style="font-size: 22px;">Please specify how you contacted the supplier:
							<div class="col-sm-7" style="border:1px solid #DDD;margin-top:2%;">
								<input class="survey7" type="text" placeholder="Enter your answer and reason here"/>
							</div>
						</div>
					</div>
			    </div>
			    <div class="col-sm-12 y2 y1">
					<div class="col-sm-12" style="margin-top: 5%;">
						<div class="col-sm-1">
							<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
								3
							</p></span>
						</div>
						<div class="col-sm-11">
							<p style="font-size: 22px;">Did you complete this form to contact a supplier?
							<span style="color:#666;">(Choose only one answer)</span></p>
						</div>
					</div>
					<div class="col-sm-12 yes2" style="margin-top:3%;">
						<div class="col-sm-1"></div>
						<div class="col-sm-5 survey4">
							<input type="radio" name="cd" value="1"> Yes
						</div>
						  
					</div>
					<div class="col-sm-12 no2" style="margin-top:3%;">
						   <div class="col-sm-1"></div>
						<div class="col-sm-5 survey4" style="margin-top: -1%;">
							<input type="radio" name="cd" value="0"> No
						</div>
					</div>
				</div>
				<div class="col-sm-12 n1 n2">
					<div class="col-sm-12" style="margin-top: 5%;">
						<div class="col-sm-1">
							<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
								3
							</p></span>
						</div>
						<div class="col-sm-11">
							<p style="font-size: 22px;">Any suggestion you may share with us about helping you contact supplier on Bdtdc.com
							<div class="col-sm-7" style="border:1px solid #DDD;margin-top:2%;">
								<input class="survey7" type="text" placeholder="Share your suggestion with us"/>
							</div>
						</div>
					</div>
			    </div>
			    <div class="col-sm-12 y1 n1 n2">
					<div class="col-sm-12" style="margin-top: 5%;">
						<div class="col-sm-1">
							<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
								4
							</p></span>
						</div>
						<div class="col-sm-11">
							<p style="font-size: 22px;">
								Please feel free to leave your email address or telephone number if you don’t mind being contacted as followup to this survey:)
							</p>
		                    <div class="col-sm-12" style="">
		                    	<div class="col-sm-5" style="margin-left: -3%;margin-top: 3%;">
		                    		<input type="text" class="survey5" style="border:1px solid #DDD;" name="email" placeholder="Enter your email address or telephone number here"/>	
		                    	</div>
		                    </div>
						</div>
					</div>
				</div>
			    <div class="col-sm-12 y3">
					<div class="col-sm-12" style="margin-top: 5%;">
						<div class="col-sm-1">
							<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
								4
							</p></span>
						</div>
						<div class="col-sm-11">
							<p style="font-size: 22px;">After you complete the necessary information in this form, could you always submit it successfully?
							<span style="color:#666;">(Choose only one answer)</span></p>
							<img style="height:276PX;width:58%;margin-top: 3%;" src="{!! asset('assets/survey/survey1.png') !!}" alt="" />
						</div>
					</div>
					<div class="col-sm-12" style="margin-top:3%;">
						<div class="col-sm-1"></div>
						<div class="col-sm-5 survey4">
							<input type="radio" name="yes" value="1"> Yes
						</div>
						  
					</div>
					<div class="col-sm-12" style="margin-top:3%;">
						   <div class="col-sm-1"></div>
						<div class="col-sm-5 survey4" style="margin-top: -1%;">
							<input type="radio" name="yes" value="0"> No
						</div>
					</div>
				</div>
				<div class="col-sm-12 n3">
					<div class="col-sm-12" style="margin-top: 5%;">
						<div class="col-sm-1">
							<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
								4
							</p></span>
						</div>
						<div class="col-sm-11 n4">
							<p style="font-size: 22px;"> What was the main reason that you did not fill in the "Contact Supplier" form?
							<span style="color:#666;">(Choose only one answer)</span></p>
							<img style="height:276PX;width:58%;margin-top: 3%;" src="{!! asset('assets/survey/survey1.png') !!}" alt="" />
						</div>
					</div>
					<div class="col-sm-12 n4" style="margin-top:3%;">
						<div class="col-sm-1"></div>
						<div class="col-sm-5 survey4">
							<input type="radio" name="choice" value="2"> I didn't understand how to fill in the form
						</div>
						  
					</div>
					<div class="col-sm-12 n6" style="margin-top:3%;">
						<div class="col-sm-1"></div>
						<div class="col-sm-5 survey4">
							<input type="radio" name="choice" value="3"> The form was not what i expected
						</div>
						  
					</div>
					<div class="col-sm-12 n8" style="margin-top:3%;">
						<div class="col-sm-1"></div>
						<div class="col-sm-5 survey4">
							<input type="radio" name="choice" value="4"> I decided to choose another product or supplier
						</div>
						  
					</div>
					<div class="col-sm-12 n10" style="margin-top:3%;">
						<div class="col-sm-1"></div>
						<div class="col-sm-5 survey4">
							<input type="radio" name="choice" value="5"> Other
						</div>
						  
					</div>
				</div>
				<div class="col-sm-12 y2">
					<div class="col-sm-12" style="margin-top: 5%;">
						<div class="col-sm-1">
							<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
								4
							</p></span>
						</div>
						<div class="col-sm-11">
							<p style="font-size: 22px;">Any suggestion you may share with us about helping you contact supplier on Bdtdc.com
							<div class="col-sm-7" style="border:1px solid #DDD;margin-top:2%;">
								<input class="survey7" type="text" placeholder="Share your suggestion with us"/>
							</div>
						</div>
					</div>
			    </div>
				<div class="col-sm-12 y3 n3 n5 n9 n11 y1">
					<div class="col-sm-12" style="margin-top: 5%;">
						<div class="col-sm-1">
							<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
								5
							</p></span>
						</div>
						<div class="col-sm-11">
							<p style="font-size: 22px;">Any suggestion you may share with us about helping you contact supplier on Bdtdc.com.</p>
		                    <div class="col-sm-12">
		                    	<div class="col-sm-5" style="margin-left: -3%;margin-top: 3%;">
		                    		<textarea style="border:1px solid #DDD;background-color: rgb(255, 255, 255);height: 190px;width: 160%;" value="Share your suggestion with us">
		                    		</textarea>
		                    	</div>
		                    </div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 n7">
					<div class="col-sm-12" style="margin-top: 5%;">
						<div class="col-sm-1">
							<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
								5
							</p></span>
						</div>
						<div class="col-sm-11">
							<p style="font-size: 22px;">What's your preferred form or content when you click on "Contact Supplier"?</p>
		                    <div class="col-sm-12">
		                    	<div class="col-sm-5" style="margin-left: -3%;margin-top: 3%;">
		                    		<textarea style="border:1px solid #DDD;background-color: rgb(255, 255, 255);height: 190px;width: 160%;" value="Enter Your answer here">
		                    		</textarea>
		                    	</div>
		                    </div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 y2">
					<div class="col-sm-12" style="margin-top: 5%;">
						<div class="col-sm-1">
							<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
								5
							</p></span>
						</div>
						<div class="col-sm-11">
							<p style="font-size: 22px;">
								Please feel free to leave your email address or telephone number if you don’t mind being contacted as followup to this survey:)
							</p>
		                    <div class="col-sm-12" style="">
		                    	<div class="col-sm-5" style="margin-left: -3%;margin-top: 3%;">
		                    		<input type="text" class="survey5" style="border:1px solid #DDD;" name="email" placeholder="Enter your email address or telephone number here"/>	
		                    	</div>
		                    </div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 n7">
					<div class="col-sm-12" style="margin-top: 5%;">
						<div class="col-sm-1">
							<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
								6
							</p></span>
						</div>
						<div class="col-sm-11">
							<p style="font-size: 22px;">Any suggestion you may share with us about helping you contact supplier on Bdtdc.com.</p>
		                    <div class="col-sm-12">
		                    	<div class="col-sm-6" style="margin-left: -3%;margin-top: 3%;">
		                    		<textarea style="border:1px solid #DDD;background-color: rgb(255, 255, 255);height: 190px;width: 160%;" value="Share your suggestion with us">
		                    		</textarea>
		                    	</div>
		                    </div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 y3 n3 n5 n9 n11 y1">
					<div class="col-sm-12" style="margin-top: 5%;">
						<div class="col-sm-1">
							<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
								6
							</p></span>
						</div>
						<div class="col-sm-11">
							<p style="font-size: 22px;">
								Please feel free to leave your email address or telephone number if you don’t mind being contacted as followup to this survey:)
							</p>
		                    <div class="col-sm-12" style="">
		                    	<div class="col-sm-5" style="margin-left: -3%;margin-top: 3%;">
		                    		<input type="text" class="survey5" style="border:1px solid #DDD;" name="email" placeholder="Enter your email address or telephone number here"/>	
		                    	</div>
		                    </div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 n7">
					<div class="col-sm-12" style="margin-top: 5%;">
						<div class="col-sm-1">
							<span class="badge survey6"><p style="font-size: 27px;padding-top: 10%;">
								7
							</p></span>
						</div>
						<div class="col-sm-11">
							<p style="font-size: 22px;">
								Please feel free to leave your email address or telephone number if you don’t mind being contacted as followup to this survey:)
							</p>
		                    <div class="col-sm-12" style="">
		                    	<div class="col-sm-5" style="margin-left: -3%;margin-top: 3%;">
		                    		<input type="text" class="survey5" style="border:1px solid #DDD;" name="email" placeholder="Enter your email address or telephone number here"/>	
		                    	</div>
		                    </div>
						</div>
					</div>
				</div>
				<div class="col-sm-12" style="margin-top:5%;margin-bottom:5%;">
					<div class="col-sm-1"></div>
					<div class="col-sm-11" style="padding-left: 1.6%;">
						<button type="submit" class="btn-btn-default survey8">Submit</button>
					</div>
				</div>
			</div>
		</div>							
		
	@stop

@section('scripts')

<script type="text/javascript">

	$(document).ready(function () {
		 $(".su").hide();
		$(".s").click(function () {
		$(".su").show();
		});
		});

	/*$(document).ready(function () {
		$(".y1").hide();
		$(".yes").click(function () {
		$(".y1").show();
		});
		});*/

	$(document).ready(function(){
    $(".yes").click(function(){
        $(".y1").toggle();
    });
	});

	$(document).ready(function(){
    $(".no").click(function(){
        $(".n1").toggle();
    });
	});

	// $(document).ready(function () {
	// 	$(".n1").hide();
	// 	$(".no").click(function () {
	// 	$(".n1").show();
	// 	});
	// 	});

	$(document).ready(function () {
		$(".y2").hide();
		$(".yes1").click(function () {
		$(".y2").show();
		});
		});

	$(document).ready(function () {
		$(".n2").hide();
		$(".no1").click(function () {
		$(".n2").show();
		});
		});
	$(document).ready(function () {
		$(".y3").hide();
		$(".yes2").click(function () {
		$(".y3").show();
		});
		});

	$(document).ready(function () {
		$(".n3").hide();
		$(".no2").click(function () {
		$(".n3").show();
		});
		});

	$(document).ready(function () {
		$(".n5").hide();
		$(".n4").click(function () {
		$(".n5").show();
		});
		});
	$(document).ready(function () {
		$(".n7").hide();
		$(".n6").click(function () {
		$(".n7").show();
		});
		});
	$(document).ready(function () {
		$(".n9").hide();
		$(".n8").click(function () {
		$(".n9").show();
		});
		});
	$(document).ready(function () {
		$(".n11").hide();
		$(".n10").click(function () {
		$(".n11").show();
		});
		});





	//check one single button
	// $(function() {
	// 	$( "#radio" ).buttonset();
	// });

</script>
@stop 
