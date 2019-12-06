@extends('frontend.layouts.home-page.dashboard-home')
	@section('dashboard_content')
@if (Sentinel::check())
	@include('frontend.layouts.home-page.header-dashboard')
@else
	@include('frontend.layouts.home-page.header-home')
@endif
	@yield('content')
@stop