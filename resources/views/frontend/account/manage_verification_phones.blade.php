@extends('fontend.master3')

@section('title', 'Password Reset Email')

@section('content')

 <div class="row" style="margin-top:2%;margin-bottom:2%;background-color:#fff !important;">
 	<div class="col-sm-12 padding_0" style="padding-top: 4%;padding-bottom: 4%;">
 		<div class="col-sm-1"></div>
 		<div class="col-sm-10">
 			<div class="col-sm-12 padding_0">
 				<p style="font-size: 14px;font-weight: 700;font-family: arial;color: #6C6C6C;">You are trying to verify your account b**************w Bind mobile number, please choose how you would like to verify your account:</p>
 				<div class="col-sm-12 padding_0" style="border:1px solid #DDD;padding-top: 2%;padding-bottom: 2%;margin-top: 2%;">
 					<div class="col-sm-1">
 						<img style="height:39px;width:47px;" src="{!! asset('assets/email.png') !!}" alt="" />
 					</div>
 					<div class="col-sm-9">
 						<p style="font-weight: 700;font-size: 16px;color: #6C6C6C;">By Email Verification </p>
 						<p style="font: 12px/1.5 "Microsoft YaHei",tahoma,arial,"Hiragino Sans GB","宋体",sans-serif;color: #888;">If your email is still in use, please choose this way.</p>
 					</div>
 					<div class="col-sm-2">
 						<input type="submit" value="Verify" class="btn-join" style="color:#fff;margin-left: -43%;margin-top: 12%;">
 					</div>
 				</div>
				<div class="col-sm-12 padding_0" style="border:1px solid #DDD;padding-top: 2.5%;padding-bottom: 2.5%;margin-top: 2%;">
 					<div class="col-sm-1">
 						<img style="height:46px;width:53px;" src="{!! asset('assets/customer.png') !!}" alt="" />
 					</div>
 					<div class="col-sm-9">
 						<p style="font-weight: 700;font-size: 16px;color: #6C6C6C;padding-top: 2%;">Customer Service </p>
 					</div>
 					<div class="col-sm-2">
 						<input type="submit" value="Apply" class="btn-join" style="color:#fff;margin-left: -43%;margin-top: 12%;">
 					</div>
 				</div>
 			</div>


 		</div>
 		<div class="col-sm-1"></div>
 	</div>
 </div>    
               
                    
  

@endsection

@section('scripts')
<script type="text/javascript">


</script>
@stop