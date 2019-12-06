@extends('frontend.layouts.master-register')
@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/buyer-bdtdc.css',is_secured()) !!}" rel="stylesheet">
@endsection
	@section('content')
	<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li"  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('BuyerChannel/pages/meet_suppliers',13,is_secured())}}" class="top-path-li-a"><span itemprop="name">Meet Suppliers</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                         <li class="top-path-li"  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('apply-sourceing-meeting',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Apply for Sourceing Meeting</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
  <div class="row padding_0" style="background: #fff;">
  				<div class="col-sm-12 col-md-12 col-lg-12">
  						<h3 class="appp-h1">Apply to Meet Suppliers</h3>
  						<p style="width: 100%; padding-top: 10px; font-size: 14px;padding-left: 6px;">Already a member of BuyerSeller.asia? Sign In Now to save time on filling in your contact information below.</p>
  						<div class="col-sm-6 col-md-6 col-xs-12">
  								<ul style="padding: 0; display: block;">
  									<li class="note-list">Note:</li>
  									<li class="note-list"> 1) Please write in English</li>
  									<li class="note-list">2) <em style="color: #f00;">*</em> Indicates required fields</li>
  								</ul>
  						</div>
  					
  				</div>
  </div>
  <div class="row padding_0">
  	{!!Form::open(['route'=>'apply_sourcing_meeting_store'])!!}
  	@if (count($errors) > 0)
				    <div class="alert alert-danger" style="margin-top:10px;">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
  		<div class="col-md-12 col-lg-12" style="border: 1px solid #ddd; border-bottom: 0 none;">
  					<h4 style="font-size: 15px;width: 100%;float: left;padding-bottom: 8px;">Meeting Arrangements</h4>
  		</div>
  		<div class="col-sm-12 col-md-12 col-lg-12 padding_0" style="background-color: #fff; border:1px solid #ddd; margin-bottom: 20px; padding-bottom: 5%;">
  			<form role="form" autocomplete="off">
			    <div class="form-group">
			     <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 2%;">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     					<label for="" name="" id="" class="fom-level"><i style="color:rgb(255, 0, 0)"><em style="color: #f00;">*</em></i> Sourcing Meeting Type</label>
			     			</div>
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     					 <select name="sourcing_meeting_type" id="" class="form-control">
			     					 		<option>Online sourceing meeting</option>
			     					 </select>
			     			</div>
			     			<div class="col-sm-6 col-md-6">
			     				
			     			</div>
			     </div>
			     
			    </div>
			    <!-- <div class="form-group">
			    	<div class="col-sm-12 col-md-12 col-lg-12">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			      				<label for="pwd" class="fom-level"><em style="color: #f00;">*</em>  Offline Sourcing Meeting Type</label>
			      			</div>
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     		 			<div class="checkbox" style="margin-top: 5px;">
									  	<p><input style="margin-left: 0;margin-right: 7px;" type="checkbox" value="" name="sourcing_type" value="">VIP Buyer One-Stop Service</p>
									</div>		
			     			 </div>
			     			 <div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     		 			<div class="checkbox" style="margin-top: 7px;">
									  	<input style="margin-left: 0;margin-right: 7px;" type="checkbox" value="" name="sourcing_type" value="">Canton Sourcing Season
									</div>		
			     			 </div>
			     			 <div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     		 			<div class="checkbox" style="margin-top: 7px;">
									 	<input style="margin-left: 0;margin-right: 7px;" type="checkbox" value="" name="sourcing_type" value="">Global Sourcing Event 
									</div>		
			     			 </div>
			     			 
			     		 </div>
			    </div> -->
			    <input type="hidden" name="sourcing_type" value="1">
			    <div class="form-group">
			     <div class="col-sm-12 col-md-12 col-lg-12">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding" style="text-align: right;">
			     					<label for="pwd" class="fom-level" style="font-size: 12px;">The date you start business trip to</label>
			     			</div>
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     					 <input type="date" name="start_date" id="id="datepicker"" class="form-control">
			     			</div>
			     			<div class="col-sm-6 col-md-6">
			     				
			     			</div>
			     </div>
			     
			    </div>
			    <div class="col-sm-12 col-md-12 col-lg-12 padding_0" style="border-bottom: 1px solid #ddd; border-top: 1px solid #ddd; background-color: #F5F5F5;">
			    		<h4 style="font-size: 15px;width: 100%;float: left;padding-bottom: 8px; padding-left: 15px;">Company Profile</h4>
			    </div>
			    <div class="form-group">
			     <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 4%;">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     					<label for="pwd" id="" class="fom-level"> <em style="color: #f00;">*</em> Company Name</label>
			     			</div>
			     			<div class="col-sm-4 col-md-4 col-lg-4 col-padding">
			     					 <input type="text" name="name" value="{{$suppliers->name_string->name ?? ''}}" id="" class="form-control">
			     			</div>
			     			<div class="col-sm-5 col-md-5 col-lg-5">
			     				
			     			</div>
			     </div>
			     
			    </div>
			    <div class="form-group">
			     <div class="col-sm-12 col-md-12 col-lg-12">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     					<label for="pwd" id="" class="fom-level"> <em style="color: #f00;">*</em> Contact Person</label>
			     			</div>
			     			<div class="col-sm-4 col-md-4 col-lg-4 col-padding">
			     					 <input type="text" name="contact_person" value="{{$suppliers->users->first_name ?? ''}} {{$suppliers->users->last_name ?? ''}}"  id="" class="form-control">
			     			</div>
			     			<div class="col-sm-5 col-md-5 col-lg-5">
			     				
			     			</div>
			     </div>
			     
			    </div>
			    <div class="form-group">
			     <div class="col-sm-12 col-md-12 col-lg-12">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     					<label for="pwd" id="" class="fom-level"> <em style="color: #f00;">*</em> Office Email</label>
			     			</div>
			     			<div class="col-sm-4 col-md-4 col-lg-4 col-padding">
			     					 <input type="email" name="email" id="" value="{{$suppliers->users->email ?? ''}}" class="form-control">
			     			</div>
			     			<div class="col-sm-5 col-md-5 col-lg-5">
			     				
			     			</div>
			     </div>
			     
			    </div>
			    <div class="form-group">
			     <div class="col-sm-12 col-md-12 col-lg-12">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     					<label for="pwd" id="" class="fom-level"> <em style="color: #f00;">*</em>  Address</label>
			     			</div>
			     			<div class="col-sm-4 col-md-4 col-lg-4 col-padding">
			     					 <input type="text" name="address" id="" class="form-control">
			     			</div>
			     			<div class="col-sm-5 col-md-5 col-lg-5">
			     				
			     			</div>
			     </div>
			     
			    </div>
			    <div class="form-group">
			     <div class="col-sm-12 col-md-12 col-lg-12">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     					<label for="" name="name"  id="" class="fom-level"><em style="color: #f00;">*</em>  Country/Region</label>
			     			</div>
			     			<div class="col-sm-2" style="margin-left: -30px;font-size: 10px;padding-left: 4%;">
			     				<!-- <p>{{$suppliers->country->name ?? ''}}</p> -->
                             <input type="text" class="form-control" aria-label="..." name="name" value="{{$suppliers->country->name ?? ''}}">
                         	</div>
			     			<!-- <div class="col-sm-4 col-md-4 col-lg-4 col-padding">
		     					 <select name="country" id="" class="form-control">
		     					 		<option>{{$suppliers->country->name ?? ''}}</option>
		     					 		
		     					 </select>
			     			</div> -->
			     			<div class="col-sm-5 col-md-5 col-lg-5">
			     				
			     			</div>
			     </div>
			     
			    </div>
			    <div class="form-group">
			     <div class="col-sm-12 col-md-12 col-lg-12">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     					<label for="" name="telephone" id="" class="fom-level"><em style="color: #f00;">*</em>  Tel</label>
			     			</div>

			     			<div class="col-sm-4 col-md-4 col-lg-4 col-padding">
			     					<ul style="padding: 0;">
			     		
			     						<input type="tel" id="" name="telephone" value=""  class="form-control" placeholder="Number"  style="width: 100%;list-style-type: none; display: inline-block;">
			     					</ul>
			     					 
			     			</div>
			     			<div class="col-sm-5 col-md-5 col-md-5">
			     				
			     			</div>
			     </div>
			     
			    </div>
			    <div class="form-group">
			    	<div class="col-sm-12 col-md-12 col-lg-12">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			      				<label for="pwd" class="fom-level"><em style="color: #f00;">*</em>   Business Type </label>
			      			</div>
			     			<div class="col-sm-9 col-md-9 col-lg-9 col-padding" style="">
			     		 			<div class="checkbox">
			     		 				<ul style="padding: 0; display: block; width:100%; padding-right: 10px;">
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_type" id="" class="" value="">Manufacturer </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_type" id="" class="" value="">Trading Company  </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_type" id="" class="" value="">Service Provider  </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_type" id="" class="" value="">Association/Organization  </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_type" id="" class="" value="">Retailer </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_type" id="" class="" value="">Trade Agent  </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_type" id="" class="" value="">Buying Office  </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_type" id="" class="" value="">Wholesaler  </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_type" id="" class="" value="">Government Institution  </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_type" id="" class="" value="">Individual User   </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_type" id="" class="sw-other" value="">Other  </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input type="tex" name="business_type" id="" class="swo" value="" style="display: none;left: -150px; position: absolute; top: -5px;" placeholder="Specify Other Type"></li>
			     		 					

			     		 				</ul>
									  	
									</div>		
			     			 </div>
			     		
			     			 
			     		 </div>
			    </div>
			    <div class="col-sm-12 col-md-12 col-lg-12 padding_0" style="border-bottom: 1px solid #ddd; border-top: 1px solid #ddd; background-color: #F5F5F5;">
			    		<h4 style="font-size: 15px;width: 100%;float: left;padding-bottom: 8px;padding-left: 15px;">Preference to Suppliers and Products </h4>
			    </div>
			   <div class="form-group">
			     <div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 4%;">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     					<label for="pwd" id="" class="fom-level"> <em style="color: #f00;">*</em> Product Name </label>
			     			</div>
			     			<div class="col-sm-4 col-md-4 col-lg-4 col-padding">
			     					 <input type="text" name="product_name" id="" class="form-control">
			     			</div>
			     			<div class="col-sm-5 col-md-5 col-lg-5">
			     				
			     			</div>
			     </div>
			     
			    </div>
			    <div class="form-group">
			     <div class="col-sm-12 col-md-12 col-lg-12">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     					<label for="pwd" id="" class="fom-level"> <em style="color: #f00;">*</em> Specifications  </label>
			     			</div>
			     			<div class="col-sm-4 col-md-4 col-lg-4 col-padding">
			     					 <input type="text" name="specifications" id="" class="form-control">
			     			</div>
			     			<div class="col-sm-5 col-md-5 col-lg-5">
			     				
			     			</div>
			     </div>
			     
			    </div>
			    <div class="form-group">
			     <div class="col-sm-12 col-md-12 col-lg-12">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     					<label for="pwd" id="" class="fom-level"> <em style="color: #f00;">*</em> Annual Purchase Volume  </label>
			     			</div>
			     			<div class="col-sm-4 col-md-4 col-lg-4 col-padding">
			     					 <input type="text" name="annual_purchase_volume" id="" class="form-control">
			     			</div>
			     			<div class="col-sm-5 col-md-5 col-lg-5">
			     				
			     			</div>
			     </div>
			     
			    </div>
			    <div class="form-group">
			     <div class="col-sm-12 col-md-12 col-lg-12">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     					<label for="pwd" id="" class="fom-level"> <em style="color: #f00;">*</em> Target Price Range  </label>
			     			</div>
			     			<div class="col-sm-4 col-md-4 col-lg-4 col-padding">
			     					 <ul style="padding: 0;">
			     						<input type="text" id="" name="price" class="form-control" style="width: 30%;list-style-type: none; display: inline-block;">
			     						<input type="text" id="" name="price" class="form-control" style="width: 30%;list-style-type: none; display: inline-block;">
			     						<select name="" id="" class="form-control" style="width: 30%;list-style-type: none; display: inline-block;">
			     					 		<option>USD</option>
			     					 		<option>EUR</option>
			     					 		<option>RMB</option>
			     					 </select>

			     					</ul>
			     			</div>
			     			<div class="col-sm-5 col-md-5 col-lg-5">
			     				
			     			</div>
			     </div>
			     
			    </div>

			   <div class="form-group">
			    	<div class="col-sm-12 col-md-12 col-lg-12">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			      				<label for="pwd" class="fom-level"><em style="color: #f00;">*</em>   Business Type </label>
			      			</div>
			     			<div class="col-sm-9 col-md-9 col-lg-9 col-padding" style="">
			     		 			<div class="checkbox">
			     		 				<ul style="padding: 0; display: block; width:100%; padding-right: 10px;">
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_types" id="" class="" value="">Manufacturer </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_types" id="" class="" value="">Trade  </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_types" id="" class="" value="">Service  </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_types" id="" class="" value="">Organization  </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_types" id="" class="" value="">Retailer </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_types" id="" class="" value="">Agent  </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_types" id="" class="" value="">Sourcing Office   </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_types" id="" class="" value="">Wholesaler  </li>
			     		 					<li class="business-type-list" style="overflow: visible;position: relative;"><input style="margin-right: 6px; margin-left: 0" type="checkbox" name="business_types" id="" class="sw-other2" value="">Other  

			     		 					<input type="tex" name="business_type" id="" class="swo2" value="" style="display: none;left: 60px; position: absolute; margin-right: 6px; margin-left: 0;" placeholder="Specify Other Type">
			     		 					</li>
			     		 					

			     		 				</ul>
									  	
									</div>		
			     			 </div>
			     		
			     			 
			     		 </div>
			    </div>
			     <div class="form-group">
			     <div class="col-sm-12 col-md-12 col-lg-12">
			     			<div class="col-sm-3 col-md-3 col-lg-3 col-padding">
			     					 
			     			</div>
			     			<div class="col-sm-6 col-md-6 col-lg-6 col-padding">
			     			<h4 style="font-size: 15px;width: 100%;float: left;padding-bottom: 10px;">Please confirm the above information are correct and updated.</h4>
			     			<input type="submit" name="" id="" class="btn btn-primary" value="Submit" style="border-radius: 5px !important;width: 100px;height: 40px;font-size: 18px; color: #fff;display: block; float: left; text-align: center;">
			     			</div>
			     			<div class="col-sm-3 col-md-3 col-lg-3">
			     				
			     			</div>
			     </div>
			     
			    </div>
			 </form>
  		</div>
  		{!!Form::close()!!}
  	
  </div>

@stop
@section('scripts')
<script type="text/javascript">
		$(function() {
    	$( "#datepicker" ).datepicker();
  		});

  		
$(".sw-other").change(function() {
    if(this.checked) {
        $('.swo').css('display', 'inline-block');
    }else{
    	$('.swo').css('display', 'none');
    }
});

$(".sw-other2").change(function() {
    if(this.checked) {
        $('.swo2').css('display', 'inline-block');
    }else{
    	$('.swo2').css('display', 'none');
    }
});
</script>
@stop