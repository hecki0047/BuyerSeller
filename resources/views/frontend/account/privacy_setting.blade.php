@extends('fontend.master-dashboard')
@section('page_css')
<link property='stylesheet' href="{!! asset('css/dashboard.css',is_secured()) !!}" rel="stylesheet">

@endsection
@section('content')
<div class="container">
<div class="row padding_0;" style="background:#fff; margin-top:20px;border-top: 1px solid #d1dbe8;margin-bottom:20px;">
	<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
		<div class="col-sm-2 col-md-2 col-lg-2 padding_0">
			@include('fontend.layouts.account-sideber')
			</div>
			<div class="col-sm-10 col-md-10">
				<div class="col-sm-12">
					<p><a href="{{URL::to('account-settings')}}" style="color: #1686CC;font-size: 12px;white-space: nowrap;font-family: Microsoft YaHei;">Account Settings ></a><span style="font-size: 12px;white-space: nowrap;font-family: Microsoft YaHei;"> Privacy Settings</span> </p>
					<p style="font-size: 1.5em;border-bottom:2px solid #DAE2ED;font-size: 20px;font-weight: 700;line-height: 50px;"> Privacy Settings </p>
				</div>
				<div class="col-sm-12" style="padding-top:1.5%;">
					<p style="font-weight: 700;color: #666;">Contact Information</p>
					<input type="radio" name="" value="" style="margin-left: .5%;font: inherit;vertical-align: baseline;font-size: 14px;line-height: 21px;"> Only suppliers you've exchanged business cards with can view this.
				</div>
				<div class="col-sm-12" style="padding-top:3%;">
					<p style="font-weight: 700;color: #666;">Sourcing information</p>
					<input type="radio" name="" value="" style="margin-left: .5%;font: inherit;vertical-align: baseline;font-size: 14px;line-height: 21px;"> Share with all users  <br>
					<input type="radio" name="" value="" style="margin-left: .5%;font: inherit;vertical-align: baseline;font-size: 14px;line-height: 21px;"> Share only with verified suppliers <br>
					<input type="radio" name="" value="" style="margin-left: .5%;font: inherit;vertical-align: baseline;font-size: 14px;line-height: 21px;"> Hide
				</div>
				<div class="col-sm-12" style="padding-top:3%;">
					<p style="font-weight: 700;color: #666;">Your contact adds, blocks and spam status</p>
					<input type="radio" name="" value="" style="margin-left: .5%;font: inherit;vertical-align: baseline;font-size: 14px;line-height: 21px;"> Share with all users <br>
					<input type="radio" name="" value="" style="margin-left: .5%;font: inherit;vertical-align: baseline;font-size: 14px;line-height: 21px;"> Share only with verified suppliers <br>
					<input type="radio" name="" value="" style="margin-left: .5%;font: inherit;vertical-align: baseline;font-size: 14px;line-height: 21px;"> Hide 
				</div>
				<div class="col-sm-12" style="padding-top:3%;">
					<p style="font-weight: 700;color: #666;">Basic information</p>
					<input type="radio" name="" value="" style="margin-left: .5%;font: inherit;vertical-align: baseline;font-size: 14px;line-height: 21px;"> Share with all users <br>
					<input type="radio" name="" value="" style="margin-left: .5%;font: inherit;vertical-align: baseline;font-size: 14px;line-height: 21px;"> Share only with verified suppliers <br>
					<input type="radio" name="" value="" style="margin-left: .5%;font: inherit;vertical-align: baseline;font-size: 14px;line-height: 21px;"> Hide <br>
				</div>
				<div class="col-sm-12" style="padding-top:3%;">
					<p style="font-weight: 700;color: #666;">Recently searched keywords and viewed products </p>
					<input type="radio" name="" value=""> Share with all users <br>
					<input type="radio" name="" value=""> Share only with verified suppliers <br>
					<input type="radio" name="" value=""> Hide <br>
				</div>
				<div class="col-sm-12" style="padding-top:3%;">
					<p style="font-weight: 700;color: #666;">Most searched keywords</p>
					<input type="radio" name="" value=""> Share with all users <br>
					<input type="radio" name="" value=""> Share only with verified suppliers <br>
					<input type="radio" name="" value=""> Hide <br>
				</div>
				<div class="col-sm-12" style="padding-top:3%;">
					<p style="font-weight: 700;color: #666;">Most searched keywords</p>
					<input type="radio" name="" value=""> Share with all users <br>
					<input type="radio" name="" value=""> Share only with verified suppliers <br>
					<input type="radio" name="" value=""> Hide <br>
				</div>
				<div class="col-sm-12" style="padding-top:3%;">
					<p style="font-weight: 700;color: #666;">Industries you are interested in </p>
					<input type="radio" name="" value=""> Share with all users <br>
					<input type="radio" name="" value=""> Share only with verified suppliers <br>
					<input type="radio" name="" value=""> Hide <br>
				</div>
				<div class="col-sm-12" style="padding-top:3%;">
					<p style="font-weight: 700;color: #666;">Your Activity on bdtdc.com</p>
					<input type="radio" name="" value=""> Share with all users <br>
					<input type="radio" name="" value=""> Share only with verified suppliers <br>
					<input type="radio" name="" value=""> Hide <br>
				</div>
				<div class="col-sm-12" style="padding-top:3%;">
					<p style="font-weight: 700;color: #666;">Activity details</p>
					<input type="radio" name="" value=""> Share with all users <br>
					<input type="radio" name="" value=""> Share only with verified suppliers <br>
					<input type="radio" name="" value=""> Hide <br>
				</div>
				<div class="col-sm-12" style="padding-top:3%;">
					<p style="font-weight: 700;color: #666;">Most searched keywords</p>
					<input type="radio" name="" value=""> Share with all users <br>
					<input type="radio" name="" value=""> Share only with verified suppliers <br>
					<input type="radio" name="" value=""> Hide <br>
				</div>
				<div class="col-sm-12" style="padding-top:3%;">
					<p style="font-weight: 700;color: #666;">Transaction</p>
					<input type="radio" name="" value=""> Share with all users <br>
					<input type="radio" name="" value=""> Share only with verified suppliers <br>
					<input type="radio" name="" value=""> Hide <br>
				</div>
				<div class="col-sm-12" style="margin-top:7%;margin-bottom:5%;">
					<input type="submit" value="Save" class="btn-join" style="color:#fff;margin-left: 21%;">
				</div>

			</div>
		</div>
	</div>
@stop
 @section('scripts')
    <script type="text/javascript">

		
 	</script>
					
@stop