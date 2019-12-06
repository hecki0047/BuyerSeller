@extends('fontend.master-dashboard')
@section('page_css')
<link property='stylesheet' href="{!! asset('css/dashboard.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/dashboard/css/spectrum.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/why-bdtdc.css',is_secured()) !!}" rel="stylesheet">

@endsection
@section('content')
<div id="ajax_status" class="hide_this text-center">
   <img itemprop="image" src="{{ URL::asset('public/uploads/ajax_loading.gif',is_secured()) }}" class="img-responsive" alt="">
</div>

<div class="container">
   <div id="item_sha" class="row" style="margin-top: 2%;background-color: #eceef2">
      <!-- -------LOADING ANIMATION WHILE PAGE IS IS LOADING--------- -->
      <div class="col-sm-2 padding-right">
         @include('fontend.layouts.dashboard-aside')
      </div>
      <div class="col-sm-8 ">
         <h1 style="font-size: 24px; margin: 20px 0;">Get verified</h1>
         <div class="box" style="width: 100%;background-color:#fff; margin-bottom: 30px;padding: 20px 0;">
            <div class="col-sm-4" style="border-right: 1px solid #ddd">
               <div class="title" style="padding: 0px;font-size: 18px">
                  Bangladesh Products
               </div>
               <div style=" padding-top: 10px; padding-bottom: 10px;  line-height: 20px;" class="summary">
                  Selected products of Top Suppliers
                  Get your desired Product and Suppliers from Bangladesh now.
               </div>
            </div>
            <div class="col-md-8">
               <div class="input-group">
                  <input class="form-control" type="text" style="margin-bottom: 10px" name="" placeholder="Write here...">
                  <img id='blah' style="display: none; height: 100px" src="">
                  <span class="btn btn-default btn-file" style="margin-bottom: 10px; display: block; width: 136px">
                     Browse Image<input id="imgInp" type="file">
                  </span>
                  <input class="btn btn-primary" style="margin-left: 0" type="submit" name="">
               </div>
            </div>
         </div>

         <div class="box" style="width: 100%;background-color:#fff; margin-bottom: 30px;padding: 20px 0;">
            <div class="col-sm-4" style="border-right: 1px solid #ddd">
               <div class="title" style="padding: 0px;font-size: 18px">
                  Bangladesh Products
               </div>
               <div style=" padding-top: 10px; padding-bottom: 10px;  line-height: 20px;" class="summary">
                  Selected products of Top Suppliers
                  Get your desired Product and Suppliers from Bangladesh now.
               </div>
            </div>
            <div class="col-md-8">
               <div class="input-group">
                  <input class="form-control" type="text" style="margin-bottom: 10px" name="" placeholder="Write here...">
                  <img id='blah' style="display: none; height: 100px" src="">
                  <span class="btn btn-default btn-file" style="margin-bottom: 10px; display: block; width: 136px">
                     Browse Image<input id="imgInp" type="file">
                  </span>
                  <input class="btn btn-primary" style="margin-left: 0" type="submit" name="">
               </div>
            </div>
         </div>

         <div class="box" style="width: 100%;background-color:#fff; margin-bottom: 30px;padding: 20px 0;">
            <div class="col-sm-4" style="border-right: 1px solid #ddd">
               <div class="title" style="padding: 0px;font-size: 18px">
                  Bangladesh Products
               </div>
               <div style=" padding-top: 10px; padding-bottom: 10px;  line-height: 20px;" class="summary">
                  Selected products of Top Suppliers
                  Get your desired Product and Suppliers from Bangladesh now.
               </div>
            </div>

            <div class="col-md-8">
               <div class="input-group">
                  <input class="form-control" type="text" style="margin-bottom: 10px" name="" placeholder="Write here...">
                  <img id='blah' style="display: none; height: 100px" src="">
                  <span class="btn btn-default btn-file" style="margin-bottom: 10px; display: block; width: 136px;    text-transform: capitalize;">
                     Browse Image<input id="imgInp" type="file">
                  </span>
                  <input class="btn btn-primary" style="margin-left: 0" type="submit" name="">
               </div>
            </div>
         </div>
         <div class="box" style="width: 100%;background-color:#fff; margin-bottom: 30px;padding: 20px 0;">
            <div class="col-sm-4" style="border-right: 1px solid #ddd">
               <div class="title" style="padding: 0px;font-size: 18px">
                  Bangladesh Products
               </div>
               <div style=" padding-top: 10px; padding-bottom: 10px;  line-height: 20px;" class="summary">
                  Selected products of Top Suppliers
                  Get your desired Product and Suppliers from Bangladesh now.
               </div>
            </div>
            <div class="col-md-8">
               <div class="input-group">
                  <input class="form-control" type="text" style="margin-bottom: 10px" name="" placeholder="Write here...">
                  <img id='blah' style="display: none; height: 100px" src="">
                  <span class="btn btn-default btn-file" style="margin-bottom: 10px; display: block; width: 136px">
                     Browse Image<input id="imgInp" type="file">
                  </span>
                  <input class="btn btn-primary" style="margin-left: 0" type="submit" name="">
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-2 padding_0">
         <div style="z-index: 0;margin: 0px; background-color: #fff; width: 100%" class="box">
            <div style="padding-left:4px;width:100%;padding-top:2px;padding-bottom:30px">
               <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.62)">
                  <h4 style="text-align: left;padding-left: 15px">Tips & Helps</h4>
               </div>
               <ul style="    padding-left: 10px;" class="">
                  <!-- <li class="navigation-menu-list-li"><a itemprop="url"  href="{{ URL::to('account-settings',null,is_secured()) }}" class="navigation-menu-list-li-a">Account Settings</a></li> -->
                  <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.62)">
                     <h4 style="text-align: left;padding-left: 5px">For Buyer</h4>
                  </div>
                  <li class="navigation-menu-list-li" style="padding: 5px;"><a itemprop="url" href="{{ URL::to('ServiceChannel/pages/for_buyer',35,is_secured())}}" class="navigation-menu-list-li-a">Help Center for Buyers</a></li>
                  <li class="navigation-menu-list-li" style="padding: 5px;"><a itemprop="url" href="{{ URL::to('/pages/',is_secured())}}" class="navigation-menu-list-li-a"></a></li>
               </ul>
            </div>
         </div>
         <div style="width: 100%;z-index: 9;margin: 0px;background-color: #fff;margin-top: 5%" class="box">
            <div style="padding-left:4px;width:100%;padding-top:2px;padding-bottom:30px">
               <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.62)">
                  <h4 style="text-align: left;padding-left: 15px">For Supplier</h4>
               </div>
               <ul style="    padding-left: 10px;" class="">
                  <!-- <li class="navigation-menu-list-li"><a itemprop="url"  href="{{ URL::to('account-settings',null,is_secured()) }}" class="navigation-menu-list-li-a">Account Settings</a></li> -->
                  <li class="navigation-menu-list-li" style="padding: 5px;"><a itemprop="url" href="{{ URL::to('ServiceChannel/pages/for_buyer',35,is_secured())}}" class="navigation-menu-list-li-a">Help Center for Suppliers</a></li>
               </ul>
            </div>
         </div>
      </div>
      @stop
@section('scripts')
@include('frontend.layouts.dashboard_aside_scripts')

<script type="text/javascript">
	function readURL(input) {

	   if (input.files && input.files[0]) {
	      var reader = new FileReader();

	      reader.onload = function(e) {
	         $('#blah').css('display', 'block');
	         $('#blah').attr('src', e.target.result);
	      }

	      reader.readAsDataURL(input.files[0]);
	   }
	}

	$("#imgInp").change(function() {
	   readURL(this);
	});
</script>

@stop