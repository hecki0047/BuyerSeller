@extends('fontend.master-dashboard')
@section('page_css')
<link property='stylesheet' href="{!! asset('css/help.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('css/dashboard.css',is_secured()) !!}" rel="stylesheet">

@endsection
@section('content')
<div class="container">
	<div class="row padding_0">
		
		<div class="col-sm-12" style="margin-top: 2%;">
			<div class="col-sm-2 col-md-2 col-lg-2 padding_0">
			@include('fontend.layouts.account-sideber')
			</div>
			<div class="col-sm-10 col-md-10 d-white" >
			<div class="col-sm-12">
			<p style="padding-top: 2%;font-size: 21px;font-family: arial;border-bottom: 1px solid #DDD;padding-left: 8px;padding-bottom: 0.5%;"><a href="{{URL::to('upload-photo')}}" style="color: #333;">Upload My Photo</a></p>

			<p style="border: 2px solid #9AD2F5;color: #333;font-size: 12px;font-weight: 700;line-height: 50px;"><i class="fa fa-info-circle" aria-hidden="true" style="padding-left: 10px;color: #9AD2F5;"></i>Your Photo will be displayed within 24 hours.</p>
		</div>
			<div class="col-sm-8" style="border:1px dotted #DDD;height: 176px;">
				<div class="col-sm-12">
					<div class="col-sm-4" id="profile_image" style="margin-top: 3.5%;">
					</div>
					<div class="col-sm-8">
						<p style="padding-top: 9%;margin-left: -14%;color: #666;font-size: 14px;font-family: arial;">Click the button or drag the image onto the dotted box to upload </p>
						<p style="margin-left: -14%;color: #999;font-size: 14px;font-family: arial;">Upload JPG format, sized no larger than 3MB </p>
					</div>

				</div>
			</div>
			<div class="col-sm-4" style="border:1px dotted #DDD;height: 409px;width: 30.5%;margin-left: 32px;">

				<p style="margin-top: -4%;font-size: 14px;font-weight: 700;">Uploading Rules</p>
				<img style="height: 140px;width: 263px;padding-left: 60px;padding-top: 8%;" src="{!! asset('assets/images.jpg') !!}" alt="" />
				<p style="text-align:right;padding-top: 7%;"><a href="{{URL::to('sample-photo')}}">sample</a></p>
				<div class="col-sm-12 padding_0">
					<ul>
					  <li style="font-size: 13px;padding-bottom: 4%;color: #333;font-family:arial;    list-style: outside;">Please upload a photo that matches the gender, age and status details in your personal profile.</li>
					  <li style="font-size: 13px;padding-bottom: 4%;color: #333;font-family:arial;    list-style: outside;">Use a photo that is appropriate for a business setting. Group photos are not allowed.</li>
					  <li style="font-size: 13px;color: #333;font-family:arial;    list-style: outside;">Photos violating the rules stated in the Terms of User will be removed without notice.</li>
					</ul>
					
				</div>
			</div>
		</div>

		</div>

	</div>
@stop
@section('scripts')
<script type="text/javascript">


</script>

@stop