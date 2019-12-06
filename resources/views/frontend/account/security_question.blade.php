@extends('fontend.master3')

@section('title', 'Password Reset Email')

@section('content')

 <div class="row" style="margin-top:2%;margin-bottom:2%;background-color:#fff !important;">
 	<div class="col-sm-12" style="padding-top: 4%;padding-bottom: 4%;">
 		<div class="col-sm-2"></div>
 		<div class="col-sm-8">
 			<div class="col-sm-12">

                    <div style="width: 600px; height: 20px; display: block;">
                        <div class="veri" style="width: 300px; display: block; float: left; position: relative;">
                            <div class="verify-circle" style=" border-radius: 50% !important; border:0 none; float: left; position: absolute;top: -8px;"><span style="color: #fff; text-align: center; padding-left: 5px;">1</span>
                            </div>
                            <span style="position: absolute; top: 20px; color: #666; padding: 0; margin: 0; color: #FF4400;">Verify</span>
                        </div>
                        <div class="veri" style="width: 300px; display: block; float: left;position: relative;">
                        <div class="verify-circle" style=" border-radius: 50% !important; background-color:#C3C3C1; border:0 none;position: absolute;top: -8px;"><span style="color: #fff; text-align: center; padding-left: 5px;">2</span>
                        </div>
                        <span style="position: absolute; top: 20px;  color: #FF4400; padding: 0; margin: 0;">Set security question</span>
                        </div>
                        <div style="display: block; float: left; position: relative;">
	                        <div class="verify-circle" style=" border-radius: 50% !important; background-color:#C3C3C1;position: absolute;top: -8px; "><span style="color: #fff; text-align: center; padding-left: 5px;">3</span>
	                        </div>
	                        <span style="position: absolute; top: 20px; color: #666; padding: 0; margin: 0;">Done</span>
                        </div>
                   </div>



 			</div>


 		</div>
 		<div class="col-sm-2"></div>
 	</div>
 </div>    
               
                    
  

@endsection

@section('scripts')
<script type="text/javascript">

$(document).on({
   click:function(e){
   e.preventDefault();
   var email = $('input[name="email"]').val();
   var token = $('input[name="_token"]').val();
   $.post(window.location.origin + '/subscript/change-email', {
    'email':email,'_token':token,
    },function(result) {
        if(parseInt(result) == 1){
         alert ("A verification code has been sent to your email . Please Check Your E-mail and use the code to change your e-mail within 15 minutes.");
        }else{
         alert (JSON.stringify(result));
         return false;
        }
                });
      }},'.change');

</script>
@stop