

@extends('frontend.layouts.register-dynamic')
	@section('dashboard_content')
		@if(isset($fluid))
		</div>
		<div class="container-fluid" style="background-color: #fff;">
		<div class="container">
		@include('frontend.layouts.header_dynamic')
		</div>
		</div>
		<div class="container">
		@else
		@include('frontend.layouts.header_dynamic')
		@endif
			
        @yield('content')
       	@stop






