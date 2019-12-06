@extends('fontend.master-dashboard')
@section('page_css')
<link property='stylesheet' href="{!! asset('css/dashboard.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/help.css',is_secured()) !!}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
	<div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 2%;margin-top:2%;">
		<div class="col-sm-2 col-md-2 col-lg-2 padding_0">
			@include('fontend.layouts.account-sideber')
			</div>
			<div class="col-sm-10 col-md-10 d-white" >
		<div class="col-sm-12 col-lg-12 padding_0">
			<p style="padding-top: 15px;padding-left:16px;font-size: 12px;"><a href="{{URL::to('account-settings')}}" style="color: #039;">Account settings </a> <i class="fa fa-chevron-right" aria-hidden="true" style="font-size: 7px;"></i>My profile</p>
		</div>
		<div class="col-sm-12">
			<div class="col-sm-4" style="border:1px solid #DDD;height:200px;">
				<div class="col-sm-12 padding_0" style="margin-top: 5%;border-bottom: 1px dotted rgb(221, 221, 221);">
					<div class="col-sm-3">
						@if($profile)
							@if($profile->profile_picture)
								<img style="height:74px;width:122%;border-radius: 30px !important;" src="{{ URL::to('uploads',$profile->profile_picture,is_secured()) }}" alt="" />
							@else
								<img style="height:68px;width:62px;padding-top: 11%;border-radius: 35px !important;" src="{!! asset('assets/default-avatar.png',is_secured()) !!}" alt="" />
							@endif
						@else
							<img style="height:68px;width:62px;padding-top: 11%;border-radius: 35px !important;" src="{!! asset('assets/default-avatar.png',is_secured()) !!}" alt="" />
						@endif
						<!-- <i class="fa fa-user" aria-hidden="true" style="padding-top: 47%;font-size: 4pc;"></i> -->
					</div>
					<div class="col-sm-9">
						<p style="font-size: 18px;font-weight: bold;font-family: arial;">{{$profile->first_name}} {{$profile->last_name}}</p>
						<p style="font-size: 12px;font-family: arial;">{{$profile->companies->name_string->name}}</p>
						<p style="color: #666;line-height: 5;"><span style="font-size: 12px;">Email : </span> <span style="font-size: 12px;">{{$profile->email}}</span></p>
					</div>
				</div>
				<div class="col-sm-12 padding_0" style="margin-top: 3%;">
				@if($profile)
					@if($profile->companies)
						@if($profile->companies->country)
				<p> <img title="{{$profile->companies->country->name}}"  itemprop="image" style="height:20px;width:32px;" src="{{ asset('assets/global/img/flags/'.strtolower($profile->companies->country->iso_code_2).'.png',is_secured())}}" alt="{{$profile->companies->country->iso_code_2}}">
						@endif
					@endif
				@endif

					@if($profile)
						@if($profile->companies)
							@if($profile->companies->country)
								{{$profile->companies->country->name}}
							@endif
						@endif
					@endif
					<i style="border: 1px solid #DDD;font-size: 11px;padding-left: 3px;padding-right: 3px;color: #999;border-radius: 5px !important;">Other</span></i>
				</p>
				</div>
			</div>
		</div>
		<div class="col-sm-12" style="margin-top:1%;">
			<p><a href="{{URL::to('edit-my-profile')}}" style="color: #039;">Edit Business Card >></a></p>
			<p style="background-color: #EFF4F8;padding-top: 5px;padding-bottom: 5px;padding-left: 10px;font-size: 13px;font-weight: 700;">Key information <span style="font-weight: 400;font-size: 12px;color: #666;font-family: arial;"> (This information will be used to create your Business Card)</span></p>
		</div>
		@if($profile)
		<div class="col-sm-12" style="margin-top:2%;">
			<div class="col-sm-2"></div>
			<div class="col-sm-6">
				<table>
					<tr style="font-size: 12px;font-family: arial;color: #666;margin:5px !important;">
						<td class="text-right"><span>Name : </span></td>
						<td><span style="color: #000;">&nbsp; {{$profile->first_name}} {{$profile->last_name}}</span></td>
					</tr>
					<tr style="font-size: 12px;font-family: arial;color: #666;margin:5px !important;">
						<td class="text-right"><span>Gender : </span></td>
						<td><span style="color: #000;">&nbsp; {{$profile->gender}}</span></td>
					</tr>
					<tr style="font-size: 12px;font-family: arial;color: #666;margin:5px !important;">
						<td class="text-right"><span>Job Title : </span></td>
						<td><span style="color: #000;">&nbsp; {{$profile->department}}</span></td>
					</tr>
					<tr style="font-size: 12px;font-family: arial;color: #666;margin:5px !important;">
						<td class="text-right"><span>Email : </span></td>
						<td><span style="color: #000;">&nbsp; {{$profile->email}}</span></td>
					</tr>
					@if($profile->companies)
					@if($profile->companies->city)
					<tr style="font-size: 12px;font-family: arial;color: #666;margin:5px !important;">
						<td class="text-right"><span>Contact Address : </span></td>
						<td><span style="color: #000;">&nbsp; {{$profile->companies->city ?? ''}}, {{$profile->companies->region ?? ''}}, {{$profile->companies->country->name}}</span></td>
					</tr>
					@endif
					@endif

					@if($profile->companies)
					@if($profile->companies->zip_code)
					<tr style="font-size: 12px;font-family: arial;color: #666;margin:5px !important;">
						<td class="text-right"><span>Zip Code : </span></td>
						<td><span style="color: #000;">&nbsp; {{$profile->companies->zip_code}}</span></td>
					</tr>
					@endif
					@endif

					@if($profile->customers)
					<tr style="font-size: 12px;font-family: arial;color: #666;margin:5px !important;">
						<td class="text-right"><span>Tel : </span></td>
						<td><span style="color: #000;">&nbsp; {{$profile->customers->telephone}}</span></td>
					</tr>
					<tr style="font-size: 12px;font-family: arial;color: #666;margin:5px !important;">
						<td class="text-right"><span>Fax : </span></td>
						<td><span style="color: #000;">&nbsp; {{$profile->customers->fax}}</span></td>
					</tr>
					@endif

					@if($profile->companies)
					@if($profile->companies->name_string)
					<tr style="font-size: 12px;font-family: arial;color: #666;margin:5px !important;">
						<td class="text-right"><span>Company Name : </span></td>
						<td><span style="color: #000;">&nbsp; {{$profile->companies->name_string->name}}</span></td>
					</tr>
					@endif
					@endif

					@if($profile->suppliers)
					@if($profile->suppliers->business_types)
					<tr style="font-size: 12px;font-family: arial;color: #666;margin:5px !important;">
						<td class="text-right"><span>Business Type : </span></td>
						<td><span style="color: #000;">&nbsp; {{$profile->suppliers->business_types->name}}</span></td>
					</tr>
					@endif
					@endif

					@if($profile->companies)
					@if($profile->companies->company_website)
					<tr style="font-size: 12px;font-family: arial;color: #666;margin:5px !important;">
						<td class="text-right"><span>Website : </span></td>
						<td><span style="color: #000;">&nbsp; {{$profile->companies->company_website}}</span></td>
					</tr>
					@endif
					@endif
				</table>

			</div>
			<div class="col-sm-4"></div>

		</div>
		@endif
		<div class="col-sm-12" style="margin-top:2%;">
			<p style="background-color: #EFF4F8;padding-top: 5px;padding-bottom: 5px;padding-left: 10px;font-size: 13px;font-weight: 700;">
				More Information 
				<span style="font-weight: 400;font-size: 12px;color: #666;font-family: arial;">  (A complete profile will allow buyerseller.asia to provide you with better overall service.)</span></p>

			<p style="padding-top: 1%;padding-left: 15px;color: #333;font-size: 13px;font-weight: 700;font-family: arial;">Sourcing Information</p>

			<p style="padding-left: 11.5%;font-size: 12px;font-family: arial;color: #666;">Industry we are in : <span></span>	</p>
			<p style="padding-left: 11.2%;font-size: 12px;font-family: arial;color: #666;">Product we source  : <span></span>	</p>
			<p style="padding-left: 9.3%;font-size: 12px;font-family: arial;color: #666;">Purchasing Frequency : <span></span>	</p>
			<p style="padding-left: 8%;font-size: 12px;font-family: arial;color: #666;">Annual Purchase Volume : <span></span>	</p>
			<p style="padding-left: 7%;font-size: 12px;font-family: arial;color: #666;">Preferred Supplier Location : <span></span>	</p>
			<p style="padding-left: 9%;font-size: 12px;font-family: arial;color: #666;">Preferred Supplier Type : <span></span>	</p>

			<p style="padding-top: 1%;padding-left: 15px;color: #333;font-size: 13px;font-weight: 700;font-family: arial;">Company  Information</p>
			<p style="padding-left: 9.3%;font-size: 12px;font-family: arial;color: #666;">Purchasing Frequency : <span></span>	</p>
			<p style="padding-left: 11.3%;font-size: 12px;font-family: arial;color: #666;">Company Address : <span></span>	</p>
			<p style="padding-left: 15.8%;font-size: 12px;font-family: arial;color: #666;">Zip Code : <span></span>	</p>
			<p style="padding-left: 9.8%;font-size: 12px;font-family: arial;color: #666;">Company Introduction : <span></span>	</p>
			<p style="padding-left: 13%;font-size: 12px;font-family: arial;color: #666;">Company Logo : <span>
				<img style="height:105px;width:112px;border:1px solid #DDD;" src="{!! asset('assets/no_photo.gif',is_secured()) !!}" alt="" />
			</span>	</p>
			<p style="padding-left: 11.5%;font-size: 12px;font-family: arial;color: #666;">Company License : <span></span>	</p>	

		</div>
		<div class="col-sm-12" style="margin-top:2%;">
			<!-- <input type="submit" value="Edit My Profile" class="btn-join" style="color:#fff;margin-left: 40%;"> -->
			 <a href="{{URL::to('edit-my-profile')}}" class="btn btn-primary" style="color:#fff;margin-left: 47%;">Edit My Profile</a>
		</div>
	</div>
</div>
@stop
@section('scripts')
<script type="text/javascript">


</script>

@stop