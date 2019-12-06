@extends('fontend.master3')
@section('content')
	<div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 2%;margin-top:2%;">
		<div class="col-sm-12 col-lg-12 padding_0">
			<p style="padding-top: 15px;padding-left:16px;font-size: 12px;"><a href="{{URL::to('my-profile')}}" style="color: #039;">Account settings </a> <i class="fa fa-chevron-right" aria-hidden="true" style="font-size: 7px;"></i>My profile</p>
		</div>
		<div class="col-sm-12" style="margin-top:1%;">
			<p style="background-color: #EFF4F8;padding-top: 5px;padding-bottom: 5px;padding-left: 10px;font-size: 13px;font-weight: 700;">Key information <span style="font-weight: 400;font-size: 12px;color: #666;font-family: arial;"> (This information will be used to create your Business Card)</span></p>
		</div>
		
		<div class="" style="margin-top:2%;">
			<div class="col-sm-2"></div>
			<div class="col-sm-6">
				<div class="col-sm-12 padding_0">
					<div class="col-sm-4">
						<p style="padding-left: 16%;font-size: 12px;font-family: arial;color: #666;">Business Pattern</p>
					</div>
					<div class="col-sm-8" style="margin-left: -9%;margin-top: -1%;">
						<div class="col-sm-12 padding_0"  id="represent" style="font-size: 12px;font-family: arial;color: #000;">
							<input type="radio" name="company" value="represent_company" checked="checked"> I represent a company
						</div>
						<div class="col-sm-12 padding_0" id="not_represent" style="font-size: 12px;font-family: arial;color: #000;">
							<input type="radio" name="company" value="not_represent_company"> I do not represent a company
						</div>						
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>

		<div class="col-sm-12">
			<div class="col-sm-6">
				<div class="col-xs-12">
			        @if (session()->has('flash_message'))
			            <p>{{ session()->get('flash_message') }}</p>
			        @endif
				</div>
				 @if(count($errors)>0)
				 <div class="alerty alert-danger">
				  <ul>
				    @foreach($errors->all() as $error)
				    <li>{{$error}}</li>
				    @endforeach
				  </ul>
				</div>
				 @endif

			</div>
			<div class="col-sm-6"></div>
		    
		</div>

		
		<!-- Represent a company section -->
		<form action="{{URL::to('edit-my-profile',$profile->id)}}" method="post" enctype="multipart/form-data"> 
		{!! csrf_field() !!}
		<div class="represent_company">
			<div class="col-sm-12" style="margin-top:2%;">
					
					<div class="col-sm-12 padding_0" style="border:2px dotted #DDD;margin-top:1%;padding:3%;">
						<p style="padding-left: 23.3%;font-size: 12px;font-family: arial;color: #666;">Name : 
							<input type="text" name="first_name" value="{{$profile->first_name}}" style="border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;color: #000;"> <input type="text" name="last_name" value="{{$profile->last_name}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p>
						<p style="padding-left: 22.7%;font-size: 12px;font-family: arial;color: #666;">Gender : 
							<input type="radio" name="gender" value="1" checked="checked"> Male
							<input type="radio" name="gender" value="2"> Female
							<!-- <input type="text" name="gender" value="{{$profile->gender}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p> -->
						<p style="padding-left: 22.3%;font-size: 12px;font-family: arial;color: #666;">Job Title : 
							<input type="text" name="department" value="{{$profile->department}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p>
						<p style="padding-left: 23.7%;font-size: 12px;font-family: arial;color: #666;">Email : <span style="color: #000;">{{$profile->email}}</span></p>
						<p style="padding-left: 18.3%;font-size: 12px;font-family: arial;color: #666;">Contact Address : 
							<input type="text" name="city" value="{{$profile->companies->city}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;">
							<input type="text" name="region" value="{{$profile->companies->region}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;">
							<input type="text" name="name" value="{{$profile->companies->country->name}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p>
						<p style="padding-left: 22%;font-size: 12px;font-family: arial;color: #666;">Zip Code : 
							<input type="text" name="zip_code" value="{{$profile->companies->zip_code}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p>
						<p style="padding-left: 25.3%;font-size: 12px;font-family: arial;color: #666;">Tel : 
							<input type="text" name="telephone" value="{{$profile->customers->telephone}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p>
						<p style="padding-left: 25%;font-size: 12px;font-family: arial;color: #666;">Fax : 
							<input type="text" name="fax" value="{{$profile->customers->fax}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p>
						<p style="padding-left: 18.5%;font-size: 12px;font-family: arial;color: #666;">Company Name : 
							<input type="text" name="name" value="{{$profile->companies->name_string->name}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;width: 47%;"></p>
						<p style="padding-left: 19.4%;font-size: 12px;font-family: arial;color: #666;">Business Type : 
							<input type="text" name="{{$profile->suppliers->business_types->name}}" value="{{$profile->suppliers->business_types->name}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p>
						<p style="padding-left: 22.8%;font-size: 12px;font-family: arial;color: #666;">Website : 
							<input type="text" name="company_website" value="{{$profile->companies->company_website}}" style="border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;color: #000;width: 50%;"></p>

					</div>

			</div>
			<div class="col-sm-12" style="margin-top:2%;">
				<p style="padding-left: 20.5%;font-size: 12px;font-family: arial;color: #666;">Company Name : 
					<span style="color: #000;font-size: 12px;height: 29px;padding-left: 5px;">
						{{$profile->companies->name_string->name}}</span>
				</p>
				<p style="padding-left: 20.5%;font-size: 12px;font-family: arial;color: #666;">Business Type : 
					<span style="color: #000;font-size: 12px;height: 29px;padding-left: 5px;">
						{{$profile->companies->name_string->name}}</span>
				</p>
			</div>
			<div class="col-sm-12" style="margin-top:2%;">
				<p style="background-color: #EFF4F8;padding-top: 5px;padding-bottom: 5px;padding-left: 10px;font-size: 13px;font-weight: 700;">More Information <span style="font-weight: 400;font-size: 12px;color: #666;font-family: arial;">  (A complete profile will allow bdtdc.com to provide you with better overall service.)</span></p>

				<p style="padding-top: 1%;padding-left: 15px;color: #333;font-size: 13px;font-weight: 700;font-family: arial;">Sourcing Information</p>

				<p style="padding-left: 11.5%;font-size: 12px;font-family: arial;color: #666;">Industry we are in : <input type="text" style="border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;">	</p>
				<p style="padding-left: 11.2%;font-size: 12px;font-family: arial;color: #666;">Product we source  : <input type="text" value="product name" style="border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;">	
					<select style="margin-left: 0%;width: 21%;border: 1px solid #AAA;">
					  <option value="1">-select corresponding category-</option>
					</select><br>
					<input type="text" value="product name" style="border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;margin-top: 1%;margin-left: 11.2%;">
					<select style="margin-left: 0%;width: 21%;border: 1px solid #AAA;">
					  <option value="1">-select corresponding category-</option>
					</select><br>
					<input type="text" value="product name" style="border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;margin-top: 1%;margin-left: 11.2%;">
					<select style="margin-left: 0%;width: 21%;border: 1px solid #AAA;">
					  <option value="1">-select corresponding category-</option>
					</select>
					
				</p>
				<p style="padding-left: 9.3%;font-size: 12px;font-family: arial;color: #666;">Purchasing Frequency : 
					<select style="margin-left: 0%;width: 30%;border: 1px solid #AAA;">
					  <option value="1">-Please select one-</option>
					  <option value="1">Less than one month</option>
					  <option value="1">One month</option>
					  <option value="1">One quarter</option>
					  <option value="1">Half a year</option>
					  <option value="1">One year</option>
					  <option value="1">Long than one year</option>
					</select>
				</p>
				<p style="padding-left: 8%;font-size: 12px;font-family: arial;color: #666;">Annual Purchase Volume : 
					<select style="margin-left: 0%;width: 30%;border: 1px solid #AAA;">
					  <option value="1">-Please select one-</option> 
					  <option value="1">Below US$10,000</option>
					  <option value="1">US$10,000-US$100,000</option>
					  <option value="1">US$10,000-US$300,000</option>
					  <option value="1">US$30,000-US$500,000</option>
					  <option value="1">US$50,000-US$1Million</option>
					  <option value="1">US$1Million-US$5Million</option>
					  <option value="1">Above US$5Million</option>
					  
					</select>
				</p>
				<p style="padding-left: 7%;font-size: 12px;font-family: arial;color: #666;">Preferred Supplier Location : 
					
						<select style="margin-left: 0%;width: 30%;border: 1px solid #AAA;">
							<option value="1">-Please select one-</option>
						 @foreach($country as $data)
						  <option name="country_name" value="{{$data->id}}">
		                    {{$data->name}}
		                </option>
		                @endforeach
						</select>
					

					<br>
					<select style="margin-left: 15%;width: 30%;border: 1px solid #AAA;margin-top: 1%;">
					  <option value="1">-Please select one-</option>@foreach($country as $data)
						  <option name="country_name" value="{{$data->id}}">
		                    {{$data->name}}
		                </option>
		                @endforeach</select><br>
					<select style="margin-left: 15%;width: 30%;border: 1px solid #AAA;margin-top: 1%;">
					  <option value="1">-Please select one-</option>@foreach($country as $data)
						  <option name="country_name" value="{{$data->id}}">
		                    {{$data->name}}
		                </option>
		                @endforeach</select>
					</select>
				</p>
				<p style="padding-left: 9%;font-size: 12px;font-family: arial;color: #666;">Preferred Supplier Type :
					<input type="checkbox" name="Manufacturer" value="Manufacturer"><span style="font-size: 12px;color: #000;"> Manufacturer</span></p>
				    <p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name=" Trading" value="Trading"> Trading Company</p>
				    <p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name=" Buying" value="Buying"> Buying Office</p>
					<p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name="Agent" value="Agent"> Agent</p>
				    <p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name="Distributor" value="Distributor"> Distributor/Wholesaler</p>
					<p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name="Government" value="Government"> Government ministry/Bureau/Commission</p>
					<p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name="Association" value="Association"> Association</p>
				    <p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name="Business" value="Business Service"> Business Service (Transportation, finance, travel, Ads, etc)</p>
					<p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name="Other" value="Other"> Other</p>
				</p>
				<p style="padding-top: 2%;padding-left: 2%;color: #333;font-size: 13px;font-weight: 700;font-family: arial;">Personal Commercial Information  <span></span>	</p>
				<p style="padding-left: 10.5%;font-size: 12px;font-family: arial;color: #666;"><span>Business Experience</span>
					<textarea style="height:89px;width:40%;background-color:#fff;border:1px solid #AAA;"></textarea>
				</p>	

			</div>
			<div class="col-sm-12" style="margin-top:2%;">
			<input type="submit" value="Edit My Profile" class="btn-join" style="color:#fff;margin-left: 40%;">
			 <!-- <a href="{{URL::to('edit-my-profile')}}" class="btn btn-primary" style="color:#fff;margin-left: 47%;">Edit My Profile</a> -->
			</div>

		</div>

		</form>
		<!-- Represent a company section -->

		<!-- Not represent a company section -->
		<form action="{{URL::to('edit-my-profile',$profile->id)}}" method="post" enctype="multipart/form-data"> 
		{!! csrf_field() !!}

		<div class="represent_not_company" style="display:none;">
			<div class="col-sm-12" style="margin-top:2%;">

					<div class="col-sm-12 padding_0" style="border:2px dotted #DDD;margin-top:1%;padding:3%;">
						<p style="padding-left: 23.3%;font-size: 12px;font-family: arial;color: #666;">Name : 
							<input type="text" name="first_name" value="{{$profile->first_name}}" style="border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;color: #000;"> <input type="text" name="last_name" value="{{$profile->last_name}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p>
						<p style="padding-left: 22.7%;font-size: 12px;font-family: arial;color: #666;">Gender : 
							<input type="radio" name="gender" value="1" checked="checked"> Male
							<input type="radio" name="gender" value="2"> Female
						<p style="padding-left: 22.3%;font-size: 12px;font-family: arial;color: #666;">Job Title : 
							<input type="text" name="department" value="{{$profile->department}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p>
						<p style="padding-left: 23.7%;font-size: 12px;font-family: arial;color: #666;">Email : <span style="color: #000;">{{$profile->email}}</span></p>
						<p style="padding-left: 18.3%;font-size: 12px;font-family: arial;color: #666;">Contact Address : 
							<input type="text" name="city" value="{{$profile->companies->city}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;">
							<input type="text" name="region" value="{{$profile->companies->region}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;">
							<input type="text" name="name" value="{{$profile->companies->country->name}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p>
						<p style="padding-left: 22%;font-size: 12px;font-family: arial;color: #666;">Zip Code : 
							<input type="text" name="zip_code" value="{{$profile->companies->zip_code}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p>
						<p style="padding-left: 25.3%;font-size: 12px;font-family: arial;color: #666;">Tel : 
							<input type="text" name="telephone" value="{{$profile->customers->telephone}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p>
						<p style="padding-left: 25%;font-size: 12px;font-family: arial;color: #666;">Fax : 
							<input type="text" name="fax" value="{{$profile->customers->fax}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p>
						<p style="padding-left: 18.5%;font-size: 12px;font-family: arial;color: #666;">Company Name : 
							<input type="text" name="name" value="{{$profile->companies->name_string->name}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;width: 50%;"></p>
						<p style="padding-left: 19.4%;font-size: 12px;font-family: arial;color: #666;">Business Type : 
							<input type="text" name="{{$profile->suppliers->business_types->name}}" value="{{$profile->suppliers->business_types->name}}" style="color: #000;border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;"></p>
						<p style="padding-left: 22.8%;font-size: 12px;font-family: arial;color: #666;">Website : 
							<input type="text" name="company_website" value="{{$profile->companies->company_website}}" style="border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;color: #000;width: 47%;"></p>

					</div>
			</div>
			<div class="col-sm-12" style="margin-top:2%;">
				<p style="background-color: #EFF4F8;padding-top: 5px;padding-bottom: 5px;padding-left: 10px;font-size: 13px;font-weight: 700;">More Information <span style="font-weight: 400;font-size: 12px;color: #666;font-family: arial;">  (A complete profile will allow bdtdc.com to provide you with better overall service.)</span></p>

				<p style="padding-top: 1%;padding-left: 15px;color: #333;font-size: 13px;font-weight: 700;font-family: arial;">Sourcing Information</p>

				<p style="padding-left: 11.5%;font-size: 12px;font-family: arial;color: #666;">Industry we are in : <input type="text" style="border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;">	</p>
				<p style="padding-left: 11.2%;font-size: 12px;font-family: arial;color: #666;">Product we source  : <input type="text" value="product name" style="border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;">	
					<select style="margin-left: 0%;width: 21%;border: 1px solid #AAA;">
					  <option value="1">-select corresponding category-</option>
					</select><br>
					<input type="text" value="product name" style="border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;margin-top: 1%;margin-left: 11.2%;">
					<select style="margin-left: 0%;width: 21%;border: 1px solid #AAA;">
					  <option value="1">-select corresponding category-</option>
					</select><br>
					<input type="text" value="product name" style="border: 1px solid #AAA;font-size: 12px;height: 29px;padding-left: 5px;margin-top: 1%;margin-left: 11.2%;">
					<select style="margin-left: 0%;width: 21%;border: 1px solid #AAA;">
					  <option value="1">-select corresponding category-</option>
					</select>
					
				</p>
				<p style="padding-left: 9.3%;font-size: 12px;font-family: arial;color: #666;">Purchasing Frequency : 
					<select style="margin-left: 0%;width: 30%;border: 1px solid #AAA;">
					  <option value="1">-Please select one-</option>
					  <option value="1">Less than one month</option>
					  <option value="1">One month</option>
					  <option value="1">One quarter</option>
					  <option value="1">Half a year</option>
					  <option value="1">One year</option>
					  <option value="1">Long than one year</option>
					</select>
				</p>
				<p style="padding-left: 8%;font-size: 12px;font-family: arial;color: #666;">Annual Purchase Volume : 
					<select style="margin-left: 0%;width: 30%;border: 1px solid #AAA;">
					  <option value="1">-Please select one-</option> 
					  <option value="1">Below US$10,000</option>
					  <option value="1">US$10,000-US$100,000</option>
					  <option value="1">US$10,000-US$300,000</option>
					  <option value="1">US$30,000-US$500,000</option>
					  <option value="1">US$50,000-US$1Million</option>
					  <option value="1">US$1Million-US$5Million</option>
					  <option value="1">Above US$5Million</option>
					  
					</select>
				</p>
				<p style="padding-left: 7%;font-size: 12px;font-family: arial;color: #666;">Preferred Supplier Location : 
					
						<select style="margin-left: 0%;width: 30%;border: 1px solid #AAA;">
							<option value="1">-Please select one-</option>
						 @foreach($country as $data)
						  <option name="country_name" value="{{$data->id}}">
		                    {{$data->name}}
		                </option>
		                @endforeach
						</select>
					

					<br>
					<select style="margin-left: 15%;width: 30%;border: 1px solid #AAA;margin-top: 1%;">
					  <option value="1">-Please select one-</option>@foreach($country as $data)
						  <option name="country_name" value="{{$data->id}}">
		                    {{$data->name}}
		                </option>
		                @endforeach</select><br>
					<select style="margin-left: 15%;width: 30%;border: 1px solid #AAA;margin-top: 1%;">
					  <option value="1">-Please select one-</option>@foreach($country as $data)
						  <option name="country_name" value="{{$data->id}}">
		                    {{$data->name}}
		                </option>
		                @endforeach</select>
					</select>
				</p>
				<p style="padding-left: 9%;font-size: 12px;font-family: arial;color: #666;">Preferred Supplier Type :
					<input type="checkbox" name="Manufacturer" value="Manufacturer"><span style="font-size: 12px;color: #000;"> Manufacturer</span></p>
				    <p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name=" Trading" value="Trading"> Trading Company</p>
				    <p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name=" Buying" value="Buying"> Buying Office</p>
					<p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name="Agent" value="Agent"> Agent</p>
				    <p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name="Distributor" value="Distributor"> Distributor/Wholesaler</p>
					<p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name="Government" value="Government"> Government ministry/Bureau/Commission</p>
					<p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name="Association" value="Association"> Association</p>
				    <p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name="Business" value="Business Service"> Business Service (Transportation, finance, travel, Ads, etc)</p>
					<p style="padding-left: 21%;margin-top: -1%;font-size: 12px;color: #000;font-family: arial;"><input type="checkbox" name="Other" value="Other"> Other</p>
				</p>
				<p style="padding-top: 2%;padding-left: 2%;color: #333;font-size: 13px;font-weight: 700;font-family: arial;">Personal Commercial Information  <span></span>	</p>
				<p style="padding-left: 10.5%;font-size: 12px;font-family: arial;color: #666;"><span>Business Experience</span>
					<textarea style="height:89px;width:40%;background-color:#fff;border:1px solid #AAA;"></textarea>
				</p>	

			</div>
			<div class="col-sm-12" style="margin-top:2%;">
			<input type="submit" value="Edit My Profile" class="btn-join" style="color:#fff;margin-left: 40%;">
			<!--  <a href="{{URL::to('edit-my-profile')}}" class="btn btn-primary" style="color:#fff;margin-left: 47%;">Edit My Profile</a> -->
		</div>

		</div>
		</form>


<!-- Not represent a company section -->

	</div>
@stop
@section('scripts')
<script type="text/javascript">
	$('[name="company"]').click(function(){
			if($(this).val() == 'not_represent_company'){
				$('.represent_company').hide(300);
				$('.represent_not_company').show(500);
			}else{
				$('.represent_company').show(500);
				$('.represent_not_company').hide(300);
			}
		});

</script>

@stop