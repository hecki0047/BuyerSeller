@extends('fontend.master3')
	@section('content')
		<div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 2%;margin-top:2%;border:1px solid #DDD;">
			<div class="col-sm-12 col-lg-12 padding_0" style="">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<div class="col-sm-12" style="padding-top:5%;">
						<div class="col-sm-4">
							<p style="font-weight: 700;color: #999;font-size: 12px;border-bottom:1px solid #DDD;padding-bottom:10px;font-family: arial;">Personal Information</p>
							<p style="width: auto;font-weight: 400;font-size: 12px;line-height: 18px;font-family: arial;font-family: arial;font-family: arial;font-family: arial;font-family: arial;"><a id="demo1" href="{{URL::to('my-profile')}}"style="color: #333;">My Profile</a></p>
							<p style="width: auto;font-weight: 400;font-size: 12px;line-height: 18px;font-family: arial;font-family: arial;font-family: arial;font-family: arial;"><a id="demo2"  href="{{URL::to('member-profile')}}"style="color: #333;">Member Profile</a></p>
							<p style="width: auto;font-weight: 400;font-size: 12px;line-height: 18px;font-family: arial;font-family: arial;font-family: arial;"><a id="demo3"  href="{{URL::to('upload-photo')}}"style="color: #333;">Upload My Photo</a></p>
							<p style="width: auto;font-weight: 400;font-size: 12px;line-height: 18px;font-family: arial;font-family: arial;"><a id="demo4"  href="{{URL::to('privacy-setting')}}"style="color: #333;">Privacy Setting</a></p>
							<p style="width: auto;font-weight: 400;font-size: 12px;line-height: 18px;font-family: arial;"><a id="demo5"  href="{{URL::to('email-services')}}"style="color: #333;">Email Services</a></p>
						</div>
						<div class="col-sm-4">
							<p style="font-weight: 700;color: #999;font-size: 12px;border-bottom:1px solid #DDD;padding-bottom:10px;font-family: arial;">Account Security </p>
							<p style="width: auto;font-weight: 400;font-size: 12px;line-height: 18px;font-family: arial;"><a id="demo6"  href="{{URL::to('subscript/change-email')}}"style="color: #333;">Change Email Address</a></p>
							<p style="width: auto;font-weight: 400;font-size: 12px;line-height: 18px;font-family: arial;"><a id="demo7"  href="{{URL::to('forgot_password')}}"style="color: #333;">Change Password</a></p>
							<!-- <p style="width: auto;font-weight: 400;font-size: 12px;line-height: 18px;font-family: arial;font-family: arial;"><a id="demo8" href="{{URL::to('security-questions')}}"style="color: #333;">Set Security Question</a></p> -->
							<p style="width: auto;font-weight: 400;font-size: 12px;line-height: 18px;font-family: arial;"><a  id="demo9"href="{{URL::to('manage-verification-phones')}}"style="color: #333;">Manage Verification Phones</a></p>
						</div>
						<div class="col-sm-4">
							<p style="font-weight: 700;color: #999;font-size: 12px;border-bottom:1px solid #DDD;padding-bottom:10px;font-family: arial;">Payment Account</p>
                            <p style="width: auto;font-weight: 400;font-size: 12px;line-height: 18px;font-family: arial;"><a id="demo11" href="{{URL::to('payment-history')}}" style="color: #333;">Payment History</a></p>
							<!-- <p style="width: auto;font-weight: 400;font-size: 12px;line-height: 18px;font-family: arial;"><a id="demo10" href="{{URL::to('bank-account')}}" style="color: #333;">Bank Account</a></p> -->
                            
						</div>
					</div>
				</div>
				<div class="col-sm-2"></div>			

			</div>

		
		
		</div>
@stop
@section('scripts')
<script type="text/javascript">

$(document).ready(function(){
    $("#demo1").mouseover(function(){
        $("#demo1").css("color", "red");
    });
    $("#demo1").mouseout(function(){
        $("#demo1").css("color", "black");
    }); 
});
$(document).ready(function(){
    $("#demo2").mouseover(function(){
        $("#demo2").css("color", "red");
    });
    $("#demo2").mouseout(function(){
        $("#demo2").css("color", "black");
    }); 
});
$(document).ready(function(){
    $("#demo3").mouseover(function(){
        $("#demo3").css("color", "red");
    });
    $("#demo3").mouseout(function(){
        $("#demo3").css("color", "black");
    }); 
});
$(document).ready(function(){
    $("#demo4").mouseover(function(){
        $("#demo4").css("color", "red");
    });
    $("#demo4").mouseout(function(){
        $("#demo4").css("color", "black");
    }); 
});
$(document).ready(function(){
    $("#demo5").mouseover(function(){
        $("#demo5").css("color", "red");
    });
    $("#demo5").mouseout(function(){
        $("#demo5").css("color", "black");
    }); 
});
$(document).ready(function(){
    $("#demo6").mouseover(function(){
        $("#demo6").css("color", "red");
    });
    $("#demo6").mouseout(function(){
        $("#demo6").css("color", "black");
    }); 
});
$(document).ready(function(){
    $("#demo7").mouseover(function(){
        $("#demo7").css("color", "red");
    });
    $("#demo7").mouseout(function(){
        $("#demo7").css("color", "black");
    }); 
});
$(document).ready(function(){
    $("#demo8").mouseover(function(){
        $("#demo8").css("color", "red");
    });
    $("#demo8").mouseout(function(){
        $("#demo8").css("color", "black");
    }); 
});
$(document).ready(function(){
    $("#demo9").mouseover(function(){
        $("#demo9").css("color", "red");
    });
    $("#demo9").mouseout(function(){
        $("#demo9").css("color", "black");
    }); 
});
$(document).ready(function(){
    $("#demo10").mouseover(function(){
        $("#demo10").css("color", "red");
    });
    $("#demo10").mouseout(function(){
        $("#demo10").css("color", "black");
    }); 
});
$(document).ready(function(){
    $("#demo11").mouseover(function(){
        $("#demo11").css("color", "red");
    });
    $("#demo11").mouseout(function(){
        $("#demo11").css("color", "black");
    }); 
});
</script>

@stop