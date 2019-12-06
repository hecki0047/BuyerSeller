@extends('frontend.layouts.about-us-topbar')

@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/frontend/css/dashboard.css',is_secured()) !!}" rel="stylesheet">
    {{-- <link property='stylesheet' href="{!! asset('assets/frontend/css/spectrum.css',is_secured()) !!}" rel="stylesheet"> --}}
    <link property='stylesheet' href="{!! asset('assets/frontend/css/why-bdtdc.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('assets/frontend/css/jquery-te-1.4.0.css',is_secured()) !!}" rel="stylesheet">
<link rel="stylesheet" property='stylesheet' href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

  @endsection
	@section('content')
	 <div class="container">
	  @if (Sentinel::check())
            <?php
              $role = App\Models\Role_user::where('user_id',Sentinel::getUser()->id)->first();
              $dashboard_route = ($role->role_id ==3) ? "company/dashboard" : 'buyer/dashbord';
            ?>
        @endif

<div class="row" style="padding-top: 1%;padding-bottom: 0.5%">
        <div class="col-lg-12 col-md-12 padding_0">
            <ul  style="margin-left: -2%;float: left;"><li style="float: left">
            <a itemprop="url" href="{{ URL::to($dashboard_route,null,is_secured())}}" style="color: #000">
            My Dashboard
            </a> <i class="fa fa-angle-right"></i> </li>
             <li style="float: left">
            <a itemprop="url" href="{{ URL::to('Mybuying-Request',null,is_secured())}}" style="color: #000">
               <strong> My Buying Request</strong>
            </a> <i class="fa fa-angle-right"></i></li>
            <li style="float: left">
            <a itemprop="url" href="" style="color: #000">
               <strong> Sample Request</strong>
            </a> <i class="fa fa-angle-right"></i></li>
            </ul>
            <ul style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
        		<button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
      		</ul>
        </div>
    </div>
	<div id="row padding_0" style="">
		<div class="col-sm-12 padding_0">
			<div class="col-sm-2 padding_0">

				@include('frontend.layouts.dashboard-aside')


			</div>

			{!! Form::open(array('url'=>'view/request-sample/success','method'=>'POST' , 'class'=>'myForm')) !!}

			<div class="col-sm-10 " style="padding-left: 0">
				<div class="col-sm-12">
					<div class="col-sm-12" style="background-color: #DCDCDC; padding-top: 10px;">
						<div class="col-sm-6">
							<p style="font-weight: bold;"> View RFQ Details</p>
						</div>
						<div class="col-sm-6">
							<p class="" style="text-align:right;"><i class="fa fa-angle-up"></i><span class="view_less" style="cursor:pointer;">View Less</span></p>							
						</div>
					</div>
					<div class="col-sm-12 show_elements" style="border:1px solid #DDD; padding: 15px">						
						<div class="col-sm-1"></div>
						<div class="col-sm-11">
							<div class="col-sm-12">
								<p style="color: #FF9D0B;font-weight: 700;">Buyer Profile</p>
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Business Type:</p>	
								</div>
								<div class="col-sm-8">
									<p>
									@if($inquery->product_owner_supplier)
										@if($inquery->product_owner_supplier->business_types)
											{{ $inquery->product_owner_supplier->business_types->name }}
										@else
											Supplier type not available
										@endif
									@else
										Supplier not available
									@endif
									</p>
								</div>
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Name:</p>	

								</div>
								<div class="col-sm-8">
									<p>
									@if($inquery->product_owner_user){
										{{ $inquery->product_owner_user->first_name.' '.$inquery->product_owner_user->last_name}}
									@else
										Supplier not available
									@endif
									</p>
								</div>
							</div>

							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<input type="hidden" name="product_owner_id" value="{{$inq_id->product_owner_id}}">
									<input type="hidden" name="unit_id" value="{{$inquery->unit_id}}">
									<input type="hidden" name="sender" value="{{$inquery->sender}}">
									

									<p style="color: #999;">Company Name:</p>	

								</div>
								<div class="col-sm-8">
									<p>
										<p>
										@if($inquery->product_owner_company)
											@if($inquery->product_owner_company->company_description)
												{{ $inquery->product_owner_company->company_description->name}}
											@else
												Product company name not available
											@endif
										@else
											Product owner company not available
										@endif
									</p> 
									</p>
								</div>
							</div>

							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Country/Region:</p>
								</div>
								<div class="col-sm-8">
									<p>
										@if($inquery->bdtdc_product)
											@if($inquery->bdtdc_product->product_country)
											{{	$inquery->bdtdc_product->product_country->name}}
												@else
												Product country not available										
											@endif
										@else
											Inquery product not available
										@endif
									</p>
								</div>
							</div>
							<div class="col-sm-12">
								<p style="color: #FF9D0B;font-weight: 700;">RFQ Details</p>
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Product Photo:</p>	
								</div>
								<div class="col-sm-8">
									<img style="height: 277px;width: 75%;" src="<?php
									if($inquery->bdtdc_product){
										if($inquery->bdtdc_product->product_image_new){
											echo URL::to($inquery->bdtdc_product->product_image_new,null,is_secured());
										}else{
											echo URL::to('uploads/no-image.jpg',null,is_secured());
										}
									}else{
										echo URL::to('uploads/no-image.jpg',null,is_secured());
									}
									?>">
								</div>
							</div>
							<div class="col-sm-12 padding_0" style="margin-top: 6%;">
								<div class="col-sm-4">
									<p style="color: #999;">Product Detailed Specification:</p>	
								</div>
								<div class="col-sm-8">
									<p style="font-size:11px;">{!! $inquery->message !!}</p>
								</div>
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Attached Files:</p>	
								</div>
								<div class="col-sm-8">
									<p></p>
								</div>
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Quantity Required:</p>	
								</div>
								<div class="col-sm-8">
									<p>{{$inquery->quantity}}</p>
								</div>
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Annual Sales Volume:</p>	
								</div>
								<div class="col-sm-8">
									@if($inquery->bdtdc_product)
									<p>{{$inquery->bdtdc_product->supplier_product->sub_companies->tradeinfo->anual_sales_volume ?? ''}}</p>
									@endif
								</div>
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									 <p style="color: #999;">Expire After:</p>	
								</div>
								<div class="col-sm-8">
									<p>{{date('Y-m-d h:i:s a', strtotime($inquery->updated_at . ' +15 day')) }}</p>
								</div>
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Shipping Terms:</p>	
								</div>
								<div class="col-sm-8">
									@if($inquery->bdtdc_product)
									<p>{{$inquery->bdtdc_product->shipping ?? ''}}</p>
									@endif
								</div>
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Destination Port:</p>	
								</div>
								<div class="col-sm-8">
									@if($inquery->bdtdc_product)
									<p>{{$inquery->bdtdc_product->logistic_info->port ?? ''}}</p>
									@endif
								</div>
							</div>
							<div class="col-sm-12 padding_0" style="padding-bottom:2%;">
								<div class="col-sm-4">
									<p style="color: #999;">Payment Terms:</p>	
								</div>
								<div class="col-sm-8">
									@if($inquery->bdtdc_product)
									<p>{{$inquery->bdtdc_product->payment_method ?? ''}}</p>
									@endif
								</div>
							</div>							
						</div>
					</div>


				</div>


				<div class="col-sm-12">
					<div class="col-sm-12" style="background-color: #DCDCDC; padding-top: 10px;margin-top:2%;">
						<div class="col-sm-4">
							<p style="font-weight: bold;"> View Quotation Details</p>
						</div>
						<div class="col-sm-8">
							<p class="" style="text-align:right;"><i class="fa fa-angle-up"></i><span class="view_more" style="cursor:pointer;">View Less</span></p>
						</div>
						
					</div>

					<div class="col-sm-12 hide_elements" style="border:1px solid #DDD; padding: 15px">
						<div class="col-sm-12">

						</div>
						<div class="col-sm-1"></div>
						<div class="col-sm-11">
							<!-- <div class="col-sm-12" style="margin-left: -14%;">
								<p>Quotation Details</p>
							</div> -->
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Price 1	</p>	
								</div>
								<div class="col-sm-8">
									<p>{{$inquery->bdtdc_product->price ?? ''}}</p>
								</div>
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Product Name:</p>	
								</div>
								<div class="col-sm-8">
									<p>{{$inquery->bdtdc_product->product_name->name ?? ''}}</p>
								</div>
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Product photo</p>	
								</div>
								<div class="col-sm-8">
									<img style="height: 277px;width: 75%;" src="<?php
									if($inquery->bdtdc_product){
										if($inquery->bdtdc_product->product_image_new){
											echo URL::to($inquery->bdtdc_product->product_image_new,null,is_secured());
										}else{
											echo URL::to('uploads/no-image.jpg',null,is_secured());
										}
									}else{
										echo URL::to('uploads/no-image.jpg',null,is_secured());
									}
									?>">
								</div>
							</div>
							<div class="col-sm-12 padding_0" style="margin-top: 8%;">
								<div class="col-sm-4">
									<p style="color: #999;">Model Number:</p>	
								</div>
								<div class="col-sm-8">
									<p>{{$inquery->bdtdc_product->model ?? ''}}</p>
								</div>
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Product Details:</p>	
								</div>
								<div class="col-sm-8" style="margin-left: -20%;">
									
								</div>

							</div>
							<div class="col-sm-12  padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Place of Origin:</p>
								</div>
								<div class="col-sm-8"  style="margin-left: -20%;">
									<p>{{$inquery->bdtdc_product->product_country->name ?? ''}}</p>
								</div>
								
							</div>

							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Brand Name:</p>
								</div>
								<div class="col-sm-8" style="margin-left: -20%;">
									{{$inquery->bdtdc_product->brandname ?? ''}}
								</div>
								
							</div>
							<div class="col-sm-12 padding_0">
								@if($inquery->bdtdc_product_attribute)
									@foreach($inquery->bdtdc_product_attribute as $data)
									<div class="col-sm-4">
										<p>{{$data->bdtdcAttribute->name}}</p>
									</div>
									<div class="col-sm-8">
										<p>{{$data->bdtdcAttribute->value}}</p>
									</div>
									@endforeach
								@endif
								
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Unit Price:</p>	
								</div>
								<div class="col-sm-8">
									<p>{{$inquery->bdtdc_product->price ?? ''}}</p>
								</div>
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Quotation Valid Till:</p>	
								</div>
								<div class="col-sm-8">
									<p>{{date('Y-m-d h:i:s a', strtotime($inquery->updated_at . ' +15 day')) }}</p>
								</div>
							</div>
							<div class="col-sm-12 padding_0">
								<p style="color: #FF9D0B;font-weight: 700;padding-left: 2%;">Other Information</p>
							</div>
							<div class="col-sm-12 padding_0">
								<div class="col-sm-4">
									<p style="color: #999;">Message to Buyer:</p>	
								</div>
								<div class="col-sm-8">
									<p style="margin-left: -23%;font-size:11px;">{!! $inquery->message!!}</p>
								</div>
							</div>



						</div>
					</div>
				<div class="col-sm-12" style="margin-top:2%;">
					<p style="font-size: 22px;line-height: 22px;">Sample Request Form</p>
				</div>
				<div class="col-sm-12" style="background-color: #F5F6F5;border:2px solid #FEC;padding-top: 10px;margin-top:2%;font-weight: bold;">
					
						<p style="font-weight: bold;">To recieve guaranteed freight – tell your supplier to use buyerseller.asia logistics service </p>
						<div class="remove_items" style="position:absolute;top:10px;right:10px;cursor:pointer;z-index:99;">X</div>
			
				</div>
				<div class="col-sm-12" style="border: 1px solid #DDD;margin-top:2%;padding: 15px;">
					<p>Product Information</p>
						<div id="view_request" style="margin:0px;padding:0px;">
								<div class="col-sm-12" style="padding-left:20px;padding-right:10px;background-color:#DDD;position:relative;">
									<div class="remove_items" style="position:absolute;top:10px;right:10px;cursor:pointer;z-index:99;">X</div>
									<div class="col-sm-12" style="margin-top:2%;">
										<div class="col-sm-3"><p style="padding-top:10px;padding-left: 14%;">Product Name:</p></div>
										<div class="col-sm-9" style="">
											<input type="text" class="form-control" name="product_name" style="border:1px solid #DDD;background-color:#fff !important;" value="{{$inquery->bdtdc_product->product_name->name ?? ''}}">
										</div>
									</div>

									<div class="col-sm-12" style="margin-top:2%;">
										<div class="col-sm-3"><p style="padding-top:10px;padding-left: 14%;">Product Photo:</p></div>
										
										<div class="col-sm-6">
											<div class="form-group" id="item_sha">
			                                    {!! Form::file('product_image',['id'=>'imgInp'])!!}
			                                </div>
											<!-- <button type="file" class="btn btn-default" style="background-color: #DDD;" name="product_image">Browse</button> -->
											<p style="font-size:10px;color:#666;">Image format: Jpeg, Jpg, or Gif. Size: Max 200k</p> 
											<div class=" prodimg" style="">
												<img  name="product_image" id="imgSw" style="height: 80px;width: 80px;" src="">
												<p>
												<button type="button" id="imgRm" class="btn btn-default" style="background-color: #DDD;margin-left: 0%;margin-top: 2%;width: 80px;">Remove</button>
												</p>
											</div>
											

										</div>
										 
									</div>
									<div class="col-sm-12" style="margin-top:2%;padding-bottom:3%;">

										<div class="col-sm-3">
											<p style="padding-left: 14%;">Product Details:</p>
										</div>
										<div class="col-sm-9">
											<textarea class="form-control" rows="5" name="product_details"></textarea>
											<p style="font-size:10px;"><span style="color: #F60;">1319</span> Characters Remaining </p>
										</div>

									</div>
									<div class="col-sm-12" style="padding-bottom:3%;">
										@if (count($errors) > 0)
							                <div class="alert alert-danger" style="margin-top:10px;">
							                    <ul>
							                        @foreach ($errors->all() as $error)
							                            <li>{{ $error }}</li>
							                        @endforeach
							                    </ul>
							                </div>
							            @endif
										<div class="col-sm-4" style="">
											<p style="">Sample Quantity Required:</p>
										</div>
										<div class="col-sm-4" style="margin-left: -8%;">
											<input type="text" class="form-control quantity productview" name="quantity" style="margin-top: 0%;border:1px solid #DDD;" value="">
											<p class="validation_status"></p>
										</div>
										<div class="col-sm-4">
											<!-- <input type="text" class="form-control" name="" style="border:1px solid #DDD;" value=""> -->
											<select class="form-control productview" name="unit_type" style="margin-top:0%;">
												@foreach($units as $u)
													<option value={!! $u->id !!}>{!! $u->name !!}</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>
							</div>


				</div>
				<div class="col-sm-12 padding_0">
						<div class=" " style="">
							<button type="button" class="btn btn-default add_more" style="background-color: #DDD;border-top:none">
							<i class="fa fa-plus" aria-hidden="true" style="color:#428BCA;font-size: 17px;"></i> Add More Item</button>
							
							<p style="color: #888;font-size: 10px;display: inline-block;">You can still add <span style="color: #F60;" id="count_item">9</span> more products. </p>
						</div>
				</div>
				<div class="col-sm-12" style="border: 1px solid #DDD;margin-top:2%;padding:15px;">
					<p>Shipment Information</p>
					<div class="col-sm-12" style="padding-left:20px;padding-right:10px;background: #ddd">
						<div class="col-sm-12" style="margin-top:2%;">
							<div class="col-sm-3"><p style="padding-top:10px;margin-left: -10%;">Expected Date of Arrival:</p></div>
							<div class="col-sm-9" style="padding-top: 1%;">								
								<p><input type="text" class="form-control date productview" id="datepicker" style="border:1px solid #DDD;width: 80%;margin-top: 0%;" name="date"></p>
								<p class="validation_status"></p>
							</div>
						</div>

						<div class="col-sm-12" style="margin-top:2%;">
							<div class="col-sm-3"><p style="padding-top:10px;padding-left: 30px;">Delivery Address:</p></div>
							<div class="col-sm-9" style="padding-top: 1%;">
								<input type="text"  class="form-control delivery_address productview" name="delivery_address" style="border:1px solid #DDD;width: 80%;margin-top: 0%;"  id="">
								<p class="validation_status"></p>
							</div>
						</div>
						<div class="col-sm-12" style="margin-top:2%;padding-bottom:3%;">
							<input type="checkbox" name="" value="" checked> I would like to use buyerseller.asia logistics service<i class="fa fa-question" aria-hidden="true" style="color:green;"></i>
						</div>
					</div>
				</div>

				<div class="col-sm-12" style="border: 1px solid #DDD;margin-top:2%;margin-bottom:2%;padding:15px;">
					<p>Message to Supplier</p>
					<div class="col-sm-12" style="padding-left:20px;padding-right:10px;background: #ddd;padding-bottom: 10px;">
						<div class="col-sm-12" style="margin-top:2%;">
							<div class="col-sm-3"><p style="margin-left: -10%;padding-left: 73%;">Message:</p></div>
							<div class="col-sm-9" style="padding-top: 1%;">								
								<textarea class="form-control message productview" rows="5" style="margin-top: -1%;width: 80%;height: 100px;" name="message"></textarea>
								<p class="validation_status"></p>
								<p style="font-size:10px;color:#666;"><span style="color: #F60;">2000</span> Characters Remaining</p> 
								<button type="submit" class="btn btn-primary join" style="">Submit</button>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>

		{!! Form::close() !!}
	</div> 
</div>
	@stop


	@section('scripts')
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		  <script>
		  //datepicker
			  $(function() {
			    $( "#datepicker" ).datepicker({
  changeMonth: true,
  changeYear: true,
  dateFormat: "yy-mm-dd"
});
			  });
		   //datepicker

			  //append item
			  // var add_item=1;
			  $('.add_more').click(function(e){
			  	e.preventDefault();
			  	if($('.remove_items').length<=10)
			  	{
			  		var template='<div class="col-sm-12" style="margin-top:2%;padding-left:20px;padding-right:10px;background-color:#DDD;">\
			  					<div class="remove_items" style="position:absolute;top:10px;right:10px;cursor:pointer;z-index:99;">X</div>\
								<div class="col-sm-12" style="margin-top:2%;">\
									<div class="col-sm-3"><p style="padding-top:10px;padding-left: 14%;">Product Name:</p></div>\
									<div class="col-sm-9" style="">\
										<input type="text" class="form-control" name="product_name[]" style="border:1px solid #DDD;background-color:#fff !important;" value="">\
									</div>\
								</div>\
								<div class="col-sm-12" style="margin-top:2%;">\
									<div class="col-sm-3"><p style="padding-top:10px;padding-left: 14%;">Product Photo:</p></div>\
									<div class="col-sm-6">\
										<div class="form-group" id="item_sha">\
			                                    {!! Form::file('product_image')!!}\
		                                </div>\
										<p><button type="button" class="btn btn-default" style="background-color: #DDD;margin-left: 0%;margin-top: 2%;width: 80px;">Remove</button></p>\
										<p style="font-size:10px;color:#666;">Image format: Jpeg, Jpg, or Gif. Size: Max 200k</p>\
									</div>\
								</div>\
								<div class="col-sm-12" style="margin-top:2%;padding-bottom:3%;">\
									<div class="col-sm-3">\
										<p style="padding-left: 14%;">Product Details:</p>\
									</div>\
									<div class="col-sm-9">\
										<textarea class="form-control" rows="5" name="product_details"></textarea>\
										<p style="font-size:10px;"><span style="color: #F60;">1319</span> Characters Remaining </p>\
									</div>\
								</div>\
								<div class="col-sm-12" style="padding-bottom:3%;">\
									<div class="col-sm-4" style="">\
										<p style="">Sample Quantity Required:</p>\
									</div>\
									<div class="col-sm-3" style="margin-left: -8%;">\
										<input type="text" class="form-control" name="quantity" style="border:1px solid #DDD;" value="">\
									</div>\
									<div class="col-sm-4">\
										<select style="" class="form-control" name="unit_type" id="">\
											@foreach($units as $u)\
												<option value={!! $u->id !!}>{!! $u->name !!}</option>\
											@endforeach\
										</select>\
									</div>\
								</div>\
							</div>';


			  		$('#view_request').append(template);
			  		$('#count_item').html(11-parseInt($('.remove_items').length));
/*			  		alert ($('.remove_items').length);*/
			  	}
			  	else
			  	{
			  		alert("You can't add more than 10 items .");
			  	}
			  	

			  });
		//append item

		//remove item

		$(document).ready(function(){
			$(document).on({click:function(){
				$(this).parent().remove();
				$('#count_item').html(11-parseInt($('.remove_items').length));
			}},'.remove_items');
		});

		//remove item

		//hide and show and toggling
		$(document).ready(function(){
			

		    $(".view_less").click(function(){
		        $(".show_elements").toggle();
		        if($(".view_less").html() == 'View Less'){
		        	$(this).parent().children('i').addClass('fa-angle-down');
		        	$(this).parent().children('i').removeClass('fa-angle-up');
		        	$(".view_less").html('View More');
		        }else{
		        	$(".view_less").html('View Less');
		        	$(this).parent().children('i').removeClass('fa-angle-down');
		        	$(this).parent().children('i').addClass('fa-angle-up');
		        }
		    });

		    $(".view_less").click();
		});
		//hide and show

		$(document).ready(function(){
				    $(".view_more").click(function(){
				        $(".hide_elements").toggle();
				        if($(".view_more").html() == 'View Less'){
				        	$(this).parent().children('i').addClass('fa-angle-down');
				        	$(this).parent().children('i').removeClass('fa-angle-up');
				        	$(".view_more").html('View More');
				        }else{
				        	$(".view_more").html('View Less');
				        	$(this).parent().children('i').removeClass('fa-angle-down');
				        	$(this).parent().children('i').addClass('fa-angle-up');
				        }
				    });
				    $(".view_more").click();
				});

		//hide and show

		//filed validation

		function empty_field_checker(obj)
			{
			if(obj.val() == "")
			{
				obj.css('border','1px solid red')
				obj.parent().find('.validation_status').text('Please fill the field')
				return false;
			}
			else
			{
				obj.css('border','1px solid #e5e5e5')
				obj.parent().find('.validation_status').text('') 
			}
			}

			$('.join').on('click',function(e){

							e.preventDefault();
							var quantity =$('.quantity').val();
							var delivery_address = $('.delivery_address').val();
							var date = $('.date').val();
							var message = $('.message').val();

							/*empty_field_checker($('.productview'));*/
							empty_field_checker($('.quantity'));
							empty_field_checker($('.delivery_address'));
							empty_field_checker($('.date'));
							empty_field_checker($('.message'));
							var validated_input = $('.productview');
							var validated = false;
							for(i=0,len=validated_input.length;i<len;i++){
							  if($('.productview:eq('+i+')').val() ==""){
								validated = false;
								break
							  }else{
								validated = true;
							  }
							}
							if(validated == true){

							  $('.myForm').submit();
							}

						})


		//image preview

		function readURL(input) {

		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#imgSw').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
			$('#imgSw').parent().css('display', 'block');
		    readURL(this);
		});
		$('#imgRm').click(function(){
			$('#imgSw').parent().css('display', 'none');
		});

		  </script>
	@stop