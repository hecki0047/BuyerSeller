@extends('fontend.master-dashboard')
@section('page_css')
<link property='stylesheet' href="{!! asset('assets/frontend/css/dashboard.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/frontend/css/seller_channel.css',is_secured()) !!}" rel="stylesheet">
<link  rel="stylesheet" property='stylesheet' href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
@endsection
@section('content')
<div class="container">
<style type="text/css">
   .remove_img{
   position:absolute;
   right: -4px;
   top: 4px;
   cursor: pointer;
   }
   .remove_img:hover{
   color:red;
   }
   .dlt-itm:hover{
   color:red;
   }
   .alert-danger{
   color: #a94442;
   }
</style>
<div style="background-size: 35px 35px;" class="loader"></div>
@php 
$dashboard_route = 'company/dashboard'
@endphp
@if (Sentinel::check())
	@php
	$role = App\Models\Role_user::where('user_id',Sentinel::getUser()->id)->first();
	$dashboard_route = ($role->role_id ==3) ? "company/dashboard" : (($role->role_id ==2) ? 'admin/dashboard' : 'buyer/dashbord');
	@endphp
@endif
<div class="row" style="padding-top: 1%;padding-bottom: 0.5%">
   <div class="col-lg-12 col-md-12 padding_0">
      <ul  style="margin-left: -2%;float: left;">
         <li style="float: left">
            <a itemprop="url" href="{{ URL::to($dashboard_route,null,is_secured())}}" style="color: #000">
            My Dashboard
            </a> <i class="fa fa-angle-right"></i> 
         </li>
         <li style="float: left">
            <a itemprop="url" href="" style="color: #000">
            <strong> Quotations</strong>
            </a> <i class="fa fa-angle-right"></i>
         </li>
         <li style="float: left">
            <a itemprop="url" href="" style="color: #000">
            <strong> Order Place</strong>
            </a> <i class="fa fa-angle-right"></i>
         </li>
      </ul>
      <ul style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
         <button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
      </ul>
   </div>
</div>
<div class="row" style="margin-bottom:2%;">
   <div class="col-sm-2 padding_0" >
      @include('fontend.layouts.dashboard-aside')
   </div>
   <div class="col-sm-10" style="padding-right: 0px">
      @php
      $inquiry_title = 'Not available';
      $image_url = 'assets/frontend/images/uploads/no_image.jpg';
      @endphp
      @if($supplier_inquiry)
	      @if($supplier_inquiry->inq_products_description)
		      @php
		      $inquiry_title = $supplier_inquiry->inq_products_description->name;
		      @endphp
		      @if($supplier_inquiry->inq_products_images)
			      @php
			      $image_url = assets/frontend/images/$supplier_inquiry->inq_products_images->image;
			      @endphp
			   @elseif($supplier_inquiry->inq_docs_one)
			      @php
			      $image_url = 'assets/frontend/images/buying-request-docs/'.$supplier_inquiry->inq_docs_one->docs;
			      @endphp
		      @endif
		      @if($supplier_inquiry->inquery_title != '')
		      	$inquiry_title = $supplier_inquiry->inquery_title;
		      @endif
	      @endif
      @endif
      <div class="item_sha" style="margin-bottom:2%;">
         <div class="row" style="margin: 0">
            @if(count($errors) > 0)
            <div class="col-sm-12">
               <div class="alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{!! $error !!}</li>
                     @endforeach
                  </ul>
               </div>
            </div>
            @endif
            <div class="col-sm-12">
               <p style="font-size: 14px;color: #919191;margin-bottom: 0">
                  @if(substr($quote_id, 9, -9) == 0)
                  	Order Type:
                  @else
                  	Enquiry for:
                  @endif
               </p>
            </div>
            <div class="col-sm-12">
               @if($supplier_inquiry)
               <h1 title="{{$supplier_inquiry->inquery_title}}" style="font-size: 20px; font-weight: 300; color: #545c58;margin: 0 "><a href="{{URL::to('product-sourcing/view',$supplier_inquiry->id,is_secured())}}">{{ $supplier_inquiry->inquery_title, 0, 100 }}</a>
               </h1>
               <div class="show_elements" style="display: none; padding: 10px 0">
                  <div class="col-sm-12">
                     <div class="col-sm-3" style="margin-left: -1%;">
                        <img style="height:229px;width:237px;" src="{!! asset($image_url) !!}" alt="" />
                     </div>
                     <div class="col-sm-9">
                        <p style="color: #999;">Quantity Required: {{ $supplier_inquiry->quantity }} 
                           @if($supplier_inquiry->inq_unit_id)
                           {{ $supplier_inquiry->inq_unit_id->name}}
                           @endif
                        </p>
                        @if($supplier_inquiry->product_country)
                        <p style="color: #999;">Required Supplier Location: 
                           @if($supplier_inquiry->product_country)
                           {{ $supplier_inquiry->product_country->name}}
                           @endif
                        </p>
                        @endif
                        @if($supplier_inquiry->pre_unit_price != 0)
                        <p style="color: #999;">Preferred Unit Price: 
                           @if(trim($supplier_inquiry->currency == ''))
                           USD
                           @else
                           {{ $supplier_inquiry->currency }}
                           @endif 
                           {{ $supplier_inquiry->pre_unit_price }} / 
                           @if($supplier_inquiry->inq_unit_id)
                           {{ $supplier_inquiry->inq_unit_id->name}}
                           @endif
                        </p>
                        @endif
                        <p style="color: #999;">Expire After: {{ date('Y-m-d h:i:s a', strtotime($supplier_inquiry->created_at . ' +15 day')) }}</p>
                        <!-- <p style="color: #999;">Shipping Terms:</p> -->
                        <p style="color: #999;">Destination Port: {{ $supplier_inquiry->destination_port }}</p>
                        @if(trim($supplier_inquiry->payment_terms != ''))
                        <p style="color: #999;">Payment Terms: {{ $supplier_inquiry->payment_terms }}</p>
                        @endif
                        <p style="font-size: 13px;color: #999;">Status : <b>
                           @if($supplier_inquiry->status == 0)
                           Pending
                           @elseif($supplier_inquiry->status == 1)
                           Approved
                           @elseif($supplier_inquiry->status == 2)
                           Rejected
                           @elseif($supplier_inquiry->status == 3)
                           Completed
                           @elseif($supplier_inquiry->status == 4)
                           Closed
                           @endif
                           </b>
                        </p>
                     </div>
                  </div>
               </div>
               <p class="" style="text-align:right;font-size: 12px;"><i class="fa fa-angle-down"></i><span class="view_less" style="cursor:pointer;">View More</span></p>
               @else
               <p title="product name not available" style="font-size: 18px; font-weight: 300; text-transform: uppercase; color: #545c58;">New Order</p>
               <p style="font-size: 14px;color: #919191;margin-bottom: 0">Order To:</p>
               <p style="font-size: 18px; font-weight: 300; color: #545c58;">{{$company->users?$company->users->first_name:''}} {{$company->users?$company->users->last_name:''}} (<a itemprop="url" target="_blank" href="{{ URL::to('Home/'.str_slug(($company->name_string?$company->name_string->name:'Company not available'),'-').'/'.$company->id) }}">{{$company->name_string?$company->name_string->name:'Company not available'}}</a>)</p>
               @endif
            </div>
         </div>
      </div>
      <form method="POST" action="{{URL::to('mysource/post-online-order',$quote_id,is_secured())}}?s={{mt_rand(100000000, 999999999).$company->user_id.mt_rand(100000000, 999999999)}}" enctype="multipart/form-data"  class="form-inline">
         {{csrf_field()}}
         <div class="item_sha">
            <div class="row">
               <div class="col-sm-12" style="padding-right: 15px;">
                  <div style=" overflow: hidden; padding: 15px;">
                     <div class="con-process" style="padding-top: 10px;overflow: hidden;">
                        <div class="por-process por-active">
                           <span>1</span>
                           <p>Start Order</p>
                           <div class="por-process-bar"></div>
                        </div>
                        <div class="por-process">
                           <span>2</span>
                           <p>Seller Confirm</p>
                           <div class="por-process-bar"></div>
                        </div>
                        <div class="por-process">
                           <span>3</span>
                           <p>Payment</p>
                           <div class="por-process-bar"></div>
                        </div>
                        <div class="por-process">
                           <span>4</span>
                           <p>Shipment</p>
                           <div class="por-process-bar"></div>
                        </div>
                        <div class="por-process">
                           <span>5</span>
                           <p>Success</p>
                           <div class="por-process-bar"></div>
                        </div>
                     </div>
                     <div class="con-ask">
                        <div class="place-order-intro">For a Buyer Protection order, place your order online below or ask your supplier to draft an order for you.
                           <br>
                           <br>
                           <a href="{{URL::to('BuyerChannel/pages/trade_assurance/5',null,is_secured())}}">What is Buyer Protection?</a>
                        </div>
                        <br>
                        <br>
                        <p class="pull-left" style="display: inline-block;margin:0;padding-left: 30px">
                           <label class="">
                           <input type="radio" name="place_order_type" value="online" checked="checked">
                           <span class="next-radio-label">Place order online</span>
                           </label>
                        </p>
                        <p class="pull-right" style="display: inline-block;margin:0;line-height: 37px;padding-right: 30px"><a href="#">How to create Order</a></p>
                     </div>
                     <div class="con-desc">
                        <h3 style="margin-top: 0; margin-bottom: 15px; font-size: 18px;">Product Details</h3>
                        <div class="con-prod">
                           <div class="show-prod">
                              <!-- Selected Product -->
                              @if(isset($selected_product))
                              <div class="con-pp">
                                 <hr>
                                 <div class="con-p-info" style="max-width: 790px; margin: auto; margin-bottom: 5px;">
                                    <input type="hidden" name="selected_products[]" value="{{$selected_product->id}}" required>
                                    <span class="index" style="margin-right: 5px"></span>
                                    <div style="height: 100px;width: 100px;text-align: center;border: 1px solid #ddd;"><img class="thunbnail" width="100" height="100" @if($selected_product->product_image_new) src="{{ URL::to(''.$selected_product->product_image_new->image,null,is_secured())}}" alt="{{$selected_product->product_name->name }}" @endif style=""><input style="display:none;" type="file" name="product_image[]" class="image_p"></div>
                                    <textarea name="product_name[]" style="flex: 1;padding: 5px; margin: 0 5px; border: 1px solid #ddd; max-width: 558px" placeholder="Product Name..." required>{{$selected_product->product_name->name}}</textarea>
                                    <i class="fa fa-trash-o dlt-itm" data-pid="" style="cursor: pointer" aria-hidden="true"></i>
                                 </div>

                                 <div style="width: 790px; margin: auto;">
                                    <div class="form-group quantity_area" style="margin-bottom: 5px; ">
                                       <label for=""><span style="color:red">*</span>Quantity:</label>
                                       <input type="number" name="product_quantity[]" class="form-control check_integer" max="99999999" min="1" id="" value="0" required>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 5px; position: relative; left: 6px;">
                                       <label for=""><span style="color:red">*</span>Unit:</label>
                                       <select name="product_unit[]" class="form-control" style="width: 207px;" required>
                                          @foreach ($units as $unit)
                                          <option value="{{$unit->id}}">{{$unit->name}}</option>
                                          @endforeach
                                       </select>
                                    </div>
                                    <div class="form-group unit_price_area" style="width: 562px;text-align: left;margin-bottom: 5px">
                                       <label for=""><span style="color:red">*</span>Unit Price:</label>
                                       <input type="text" name="product_unit_price[]" class="form-control check_number" min="0" max="9999999999" id="" value="0" required>
                                       <span>Product Price: US $ <span class="product_nprice">0</span></span>
                                    </div>
                                    <textarea name="product_details[]" style="margin-top:5px;padding: 7px;width: 552px; background: white; border: 1px solid #ddd; resize: both;" placeholder="Fill in any product details to make it as clear as possible for suppliers to understand your requirements." rows="2" type="text" height="100%"></textarea>
                                 </div>
                              </div>
                              @else
                              <div style=" border: 1px solid #ddd;" class="none">
                                 <p style="line-height: 100px; color:gray" class="text-center">None Selected</p>
                              </div>
                              @endif
                              <!-- Selected Product -->

                           </div>
                           <div style="">
                              <br>
                              <a style="margin-left: 32%" class="btn btn-default cona-btn" data-toggle="modal" data-target="#selectProduct">Add a listed product</a>
                              <a style="border-radius: 5px !important;" class="btn btn-default addnewp">Add a new product</a>
                              <p style="text-align: center; margin-top: 10px;">Product Price US <span style="font-size: 16px; font-weight: bold; color: #df6649;">$ <span class="product_price">0</span></span> </p>
                              <br>
                           </div>
                        </div>
                     </div>
                     <div class="con-desc">
                        <h3 style="margin-top: 0; margin-bottom: 15px; font-size: 18px;">Shipping <span style="font-size: 12px; color:#b0b0b0" class="pull-right">Unsupported Regions?</span></h3>
                        <div class="form-group" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for=""><span style="color:red">*</span>Shipping Address:</label>
                           <textarea id="shipping_address" style="flex: 1" class="form-control" readonly></textarea>
                           <input type="hidden" name="shipping_address_id" id="shipping_address_id">
                        </div>
                        <div class="form-group" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                        	<label style="width: 135px; text-align: right;margin-right: 10px" for=""></label>
                           <a data-toggle="modal" data-target="#chooseShippingAddressModal">Choose existing one</a>&nbsp;&nbsp;&nbsp;&nbsp;
                           <a data-toggle="modal" data-target="#shippingAddressModal">Add Shipping Address</a>
                        </div>
                        <div class="form-group" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for=""><span style="color:red">*</span>Shipping Method:</label>
                           <select class="form-control" name="shipping_method" style="flex: 1" required>
                              <option value="express">Express</option>
                              <option value="sea-freight">Sea Freight</option>
                              <option value="air-cargo">Air Cargo</option>
                           </select>
                        </div>
                        <div class="form-group" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for="">Trade terms:</label>
                           <select class="form-control" name="payment_terms" style="flex: 1" required>
                              <option value="FOB">FOB</option>
                              <option value="EXW">EXW</option>
                              <option value="FAS">FAS</option>
                              <option value="FCA">FCA</option>
                              <option value="CFR">CFR</option>
                              <option value="CPT">CPT</option>
                              <option value="CIF">CIF</option>
                              <option value="CIP">CIP</option>
                              <option value="DES">DES</option>
                              <option value="DAF">DAF</option>
                              <option value="DEQ">DEQ</option>
                              <option value="DDP">DDP</option>
                              <option value="DDU">DDU</option>
                           </select>
                        </div>
                        <div class="form-group" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for="">Shipping Fee:</label>
                           <input type="text" name="shipping_fee" class="form-control check_number" id="" min="0" max="9999999999" style="flex: 1" value="0" required>
                        </div>
                        <div class="form-group" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for="">Insurance Charge:</label>
                           <input type="text" name="insurance_charge" class="form-control check_number" min="0" max="9999999999" style="flex: 1" value="0" required>
                        </div>
                        <div class="form-group" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for="">Shipment Date:</label>
                           <label><input type="radio" name="shipment_date_type" class="" value="specific-day" checked=""> Ship on specific day</label>
                        </div>
                        <div class="form-group specific_date_area" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for=""></label>
                           <input type="text" name="shipment_date" class="form-control" placeholder="yyyy/mm/dd">
                        </div>
                        <div class="form-group" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for=""></label>
                           <label><input type="radio" name="shipment_date_type" class="" value="after-supplier"> Ship after supplier receives the initial payment</label>
                        </div>
                        <div class="form-group after_payment_area" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;display:none;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for=""></label>
                           <label><input type="number" name="shipment_days_after" style="width: 225px;" max="365" min="1" class="form-control check_integer"> &nbsp;day(s) after supplier </label>
                        </div>
                     </div>
                     <div class="con-desc">
                        <h3 style="margin-top: 0; margin-bottom: 15px; font-size: 18px;">Payment Details <span style="font-size: 12px; color:#b0b0b0" class="pull-right">Payment Methods and Processing Fee?</span></h3>
                        <div class="form-group" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for="">Initial payment:</label>
                           <p style="margin:0;padding: 0;padding-top: 10px;">
                           <div class="input-group">
                              <span class="input-group-addon">$</span>
                              <input type="number" class="form-control check_integer" style="z-index: 1;" aria-label="Amount (to the nearest dollar)" max="9999999999" min="0" name="initial_payment" value="0" required>
                           </div>
                           </p>
                        </div>
                        <div class="form-group" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for="">Balance payment:</label>
                           <p style="margin:0;padding: 0;padding-top: 10px;">US $ <span class="total_price_after">0</span></p>
                        </div>
                        <div class="form-group" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for="">Payment methods:</label>
                           <p src="" style="height: 48px;flex: 1; background: url('https://cdn.dribbble.com/users/59312/screenshots/1078898/paymentcardicons.png') 0;"></p>
                        </div>
                        <div class="form-group" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for=""></label>
                           <a src="#" style="flex: 1">Learn more about funds arrival time and processing fee</a>
                        </div>
                     </div>
                     <div class="con-desc" style="border: 1px solid lightblue">
                        <h3 style="margin-top: 0; margin-bottom: 15px; font-size: 18px;">Trade Assurance <span style="font-size: 12px; color:#b0b0b0" class="pull-right">Quality Dispute and Shipping Delay Coverage?</span></h3>
                        <div class="form-group" style="width: 562px;text-align: left;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for="email"><span style="color:red">*</span>Coverage type:</label>
                           <input type="radio" name="coverage_type" value="post-shipment" class="form-control" id="" style=" margin-top: -3px; margin-right: 5px;" checked> Post-delivery coverage
                        </div>
                        <div class="form-group" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for=""></label>
                           <ul style="flex: 1">
                              <li style="list-style-type: disc!important;">You will be protected for your <span style="color: #333;">actual total payment</span></li>
                              <li style="list-style-type: disc!important;">If the quality of the goods does not match the standards set in your contract, you will be eligible for a refund <span style="color: #333;">within 15 days of clearing customs</span><span>.</span></li>
                           </ul>
                        </div>
                        <div class="form-group" style="width: 562px;text-align: left;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for="email"><span style="color:red"></span></label>
                           <input type="radio" name="coverage_type" class="form-control" id="" value="pre-shipment" style=" margin-top: -3px; margin-right: 5px;z-index: 1;">Pre-shipment coverage (Order amount must > US $1000)
                        </div>
                        <div class="form-group" style="width: 562px;text-align: left;display: flex;margin: auto; margin-top: 5px;">
                           <label style="width: 135px; text-align: right;margin-right: 10px" for=""></label>
                           <ul style="flex: 1">
                              <li style="list-style-type: disc!important;">You will be protected for your <span style="color: #333;">actual total payment</span></li>
                              <li style="list-style-type: disc!important;">If the quality of the goods does not match the standards set in your contract, you will be eligible for a refund <span style="color: #333;">within 15 days of clearing customs</span><span>.</span></li>
                           </ul>
                        </div>
                     </div>
                     <div class="con-desc" style="border: 1px solid transparent">
                        <h3 style="margin-top: 0; margin-bottom: 15px; font-size: 18px;">Additional Remark </h3>
                        <textarea name="remark" style="margin-top:5px;width: 100%; background: white; border: 1px solid #ddd; resize: both;" placeholder="Fill in any product details to make it as clear as possible for suppliers to understand your requirements." rows="6" type="text" height="100%"></textarea>
                        <div class="form-group" style="text-align: left;margin: auto; margin-top: 5px;">
                           <input type="checkbox" class="" name="agreement" id="" style=" margin-top: -3px; margin-right: 5px;" checked>I have read and agree to abide by <a href="">the Trade Assurance terms</a>.
                        </div>
                        <p style="margin-top: 15px" class="text-right">Total Product Amount: US $ <span class="product_price">0</span></p>
                        <p class="text-right">Shipping Fee & Insurance Fee: US $ <span class="si_price">0</span></p>
                        <p class="text-right">------------------------------------------</p>
                        <p class="text-right">Total Order Amount: <span style="font-weight: 600; color: brown;">US $ <span class="total_price">0</span></span></p>
                        <button type="submit" class="btn btn-default pull-right cona-btn">Submit</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<div class="modal fade" id="selectProduct" role="dialog">
   <div class="modal-dialog" style="width:800px; top: 40px; height: auto;">
      <div class="modal-content">
         <div class="select-dialog-header">
            <div class="modal-header" style="border-bottom: 0 none;">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <div class="nxt-row">
                  <div class="nxt-cl">
                     <div class="next-search-normal next-search">
                        <div class="next-search-lft">
                           <div style="width: 300px; float: left;">
                              <span placeholder="Please entry products"  value="" class="nxt-slect">
                                 <div class="next-select-inner-wrapper">
                                    <div class="next-select-inner">
                                       <input style="border:0 none; text-align: left;float: left;padding-left: 10px; width: 100%;" id="myInput" onkeyup="myFunction()" tabindex="0" value="" placeholder="Please entry products" >
                                    </div>
                                 </div>
                              </span>
                           </div>
                        </div>
                        <div class="nxt-srch-rht"><button type="button" class="srch-btn next-search-next-btn"><i class="fa fa-search" aria-hidden="true" style="    margin: 0 4px 0 0;color: #666"></i>Search</button></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-body">
            <style>
               .nav-pills>li {
               float: none;
               text-align: left;
               }
            </style>
            <div class="row nxt-row">
               <div class="col-sm-12">
                  <div class="col-md-3" style="padding: 0px">
                     <ul class="nav nav-pills">
                        <li class="active"><a class="search_class" data-toggle="pill" href="#all" data-sid="all"><i id="click_advance" class="fa fa-angle-down" aria-hidden="true" style="display:inline;padding-left: 5px;padding-right: 7px;"></i> All</a></li>
                        @php $menu_no = 1 @endphp
                        @if($supplier_product_groups)
                        @if(count($supplier_product_groups)>0)
                        @foreach($supplier_product_groups as $spg)
                        <li class="list-sb-cat"><a class="search_class" title="{{$spg->name}}" style="padding-left: 40px;" data-toggle="pill" href="#menu{{$menu_no}}" data-sid="menu{{$menu_no}}">{{substr($spg->name,0,15)}}</a></li>
                        @php $menu_no++ @endphp
                        @endforeach
                        @endif
                        @endif
                     </ul>
                  </div>
                  <div class="col-md-9" style="max-height: 400px;overflow: scroll;">
                     <div class="tab-content">
                        <div id="all" class="tab-pane fade in active">
                           <div class="product-select-body">
                              <ul id="myUL" class="product-rw">
                                 @if($supplier_products)
                                 @if(count($supplier_products)>0)
                                 @foreach($supplier_products as $sps)
                                 <li title="{{$sps->product_name?$sps->product_name->name:'not available'}}" data-pid="{{$sps->id}}">
                                    <img class="slect-img" src="{{asset($sps->product_image_new?$sps->product_image_new->image:'uploads/no_image.jpg')}}" alt="{{$sps->product_name?$sps->product_name->name:'not available'}}">
                                    <div class="product-product-name">
                                       <span style="font-size: 11px;"><a target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',($sps->product_name?$sps->product_name->name:'not available')).'='.mt_rand(100000000, 999999999).$sps->id,is_secured()) }}">{{$sps->product_name?$sps->product_name->name:'not available'}}</a></span>
                                    </div>
                                 </li>
                                 @endforeach
                                 @endif
                                 @endif				
                              </ul>
                           </div>
                        </div>
                        @php $menu_no = 1 @endphp
                        @if($supplier_product_groups)
                        @if(count($supplier_product_groups)>0)
                        @foreach($supplier_product_groups as $spg)
                        <div id="menu{{$menu_no}}" class="tab-pane fade">
                           <div class="product-select-body">
                              <ul id="" class="product-rw">
                                 @if($spg->BdtdcSupplierProductGroupsProducts)
                                 @if(count($spg->BdtdcSupplierProductGroupsProducts)>0)
                                 @foreach($spg->BdtdcSupplierProductGroupsProducts as $sgp)
                                 <li title="{{$sgp->product_name?$sgp->product_name->name:'not available'}}" data-pid="{{$sgp->id}}">
                                    <img class="slect-img" src="{{asset($sgp->product_image_new?$sgp->product_image_new->image:'uploads/no_image.jpg')}}" alt="{{$sgp->product_name?$sgp->product_name->name:'not available'}}">
                                    <div class="product-product-name">
                                       <span style="font-size: 11px;"><a target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',($sgp->product_name?$sgp->product_name->name:'not available')).'='.mt_rand(100000000, 999999999).$sgp->id,is_secured()) }}">{{$sgp->product_name?$sgp->product_name->name:'not available'}}</a></span>
                                    </div>
                                 </li>
                                 @endforeach
                                 @endif
                                 @endif				
                              </ul>
                           </div>
                        </div>
                        @php $menu_no++ @endphp
                        @endforeach
                        @endif
                        @endif
                     </div>
                  </div>
               </div>
            </div>
            <div class=" next-dialog-footer">
               <div style="margin-top: 12px;">
                  <div style="flex: 1 1 auto; display:block;padding: 0 4px; width: auto; text-align:right;">
                     <button type="button" class="next-btn next-btn-primary next-btn-medium make_confirm">Confirm</button><button type="button" class="next-btn next-btn-normal next-btn-medium" data-dismiss="modal">Cancel</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Shipping Address -->
<div class="modal fade" id="shippingAddressModal" role="dialog">
   <div class="modal-dialog" style="width:800px; top: 40px; height: auto;">
      <div class="modal-content">
         <div class="select-dialog-header">
            <div class="modal-header" style="border-bottom: 0 none; padding: 0px;">
         		<h3 style="text-align: center; margin: 0px;">Shipping Address<span class="text-right">
               <button type="button" class="close" data-dismiss="modal">&times;</button></span></h3>
            </div>
         </div>
         <div class="modal-body">
         	<input type="hidden" class="form_data" name="_token" value="{{ csrf_token() }}"> 
            <div class="row nxt-row">
               <div class="col-md-12">
               	<div class="col-md-3" style="padding: 0px;">
               		<label for="">Contact Name</label>
               	</div>
               	<div class="col-md-9 form-group">
               		<input type="text" class="form-control form_data" name="contact_name">
               	</div>
               </div>
               <div class="col-md-12">
               	<div class="col-md-3" style="padding: 0px;">
               		<label for="">Address 1</label>
               	</div>
               	<div class="col-md-9 form-group">
               		<textarea type="text" class="form-control form_data" rows="1" name="address1"></textarea>
               	</div>
               </div>
               <div class="col-md-12">
               	<div class="col-md-3" style="padding: 0px;">
               		<label for="">Address 2</label>
               	</div>
               	<div class="col-md-9 form-group">
               		<textarea type="text" class="form-control form_data" rows="1" name="address2"></textarea>
               	</div>
               </div>
               <div class="col-md-12">
               	<div class="col-md-3" style="padding: 0px;">
               		<label for="">Country</label>
               	</div>
               	<div class="col-md-9 form-group">
               		<select class="form-control form_data" name="country">
               			<option value="">Please Select</option>
               			@foreach($countries as $rowdata)
               			<option value="{{$rowdata->id}}">{{$rowdata->name}}</option>
               			@endforeach
               		</select>
               	</div>
               </div>
               <div class="col-md-12">
               	<div class="col-md-3" style="padding: 0px;">
               		<label for="">State</label>
               	</div>
               	<div class="col-md-9 form-group">
               		<input type="text" class="form-control form_data" name="state">
               	</div>
               </div>
               <div class="col-md-12">
               	<div class="col-md-3" style="padding: 0px;">
               		<label for="">City</label>
               	</div>
               	<div class="col-md-9 form-group">
               		<input type="text" class="form-control form_data" name="city">
               	</div>
               </div>
               <div class="col-md-12">
               	<div class="col-md-3" style="padding: 0px;">
               		<label for="">Postal Code</label>
               	</div>
               	<div class="col-md-9 form-group">
               		<input type="text" class="form-control form_data" name="postal_code">
               	</div>
               </div>
               <div class="col-md-12">
               	<div class="col-md-3" style="padding: 0px;">
               		<label for="">Phone</label>
               	</div>
               	<div class="col-md-9 form-group">
               		<input type="text" class="form-control form_data" name="phone">
               	</div>
               </div>
               <div class="col-md-12">
               	<div class="col-md-3" style="padding: 0px;">
               		<label for="">Gross Weight</label>
               	</div>
               	<div class="col-md-9 form-group">
               		<input type="text" class="form-control form_data" name="gross_weight">
               	</div>
               </div>
               <div class="col-md-12">
               	<div class="col-md-3" style="padding: 0px;">
               		<label for="">Gross Volume</label>
               	</div>
               	<div class="col-md-9 form-group">
               		<input type="text" class="form-control form_data" name="gross_volume">
               	</div>
               </div>
            </div>
            <div class="next-dialog-footer">
               <div style="margin-top: 12px;">
                  <div style="flex: 1 1 auto; display:block;padding: 0 4px; width: auto; text-align:right;">
                     <button type="button" class="next-btn next-btn-primary next-btn-medium shipping_address_save">Save</button><button type="button" class="next-btn next-btn-normal next-btn-medium" data-dismiss="modal">Cancel</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Shipping Address -->

<!-- Choose Shipping Address -->
<div class="modal fade" id="chooseShippingAddressModal" role="dialog">
   <div class="modal-dialog" style="width:800px; top: 40px; height: auto;">
      <div class="modal-content">
         <div class="select-dialog-header">
            <div class="modal-header" style="border-bottom: 0 none; padding: 0px;">
         		<h3 style="text-align: center; margin: 0px;">Shipping Address<span class="text-right">
               <button type="button" class="close" data-dismiss="modal">&times;</button></span></h3>
            </div>
         </div>
         <div class="modal-body">
      		@foreach($order_shipping_address as $rowdata)
   			<div class="row">
   				<div class="col-md-12">
	         		<div class="col-md-3">
							<a href="javascript:;" class="btn btn-info pull-right shipping_address_item" data-shipping-address-id="{{$rowdata->id}}" data-shipping-address="{{$rowdata->address1}},{{$rowdata->address2}},{{$rowdata->city}},{{$rowdata->state}},{{$rowdata->country_info->name}}"> Select</a>
	         		</div>
	         		<div class="col-md-9" style="margin-bottom: 5px; border-bottom: 1px solid black; padding: 6px 0px 7px 0px;">
	         			<p>{{$rowdata->address1}},{{$rowdata->address2}},{{$rowdata->city}},{{$rowdata->state}},{{$rowdata->country_info->name}}</p>
	         		</div>
	         	</div>
   			</div>
				@endforeach
            <div class="next-dialog-footer">
               <div style="margin-top: 12px;">
                  <div style="flex: 1 1 auto; display:block;padding: 0 4px; width: auto; text-align:right;">
                     <button type="button" class="next-btn next-btn-normal next-btn-medium" data-dismiss="modal">Cancel</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Choose Shipping Address -->
@stop

@section('scripts')
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="{{URL::asset('assets/fontend/js/animatedModal.min.js',is_secured())}}"></script>
<script src="{{ URL::asset('assets/fontend/js/sweetalert.min.js',is_secured()) }}"></script>
<script src="{{ URL::asset('assets/fontend/js/jquery-te-1.4.0.min.js',is_secured()) }}" charset="utf-8"></script>
<script type="text/javascript">
	$(document).on({
	   click: function(e) {
	      e.preventDefault();
	      var _token_data, _this = $(this);
	      var _token_data = $('input[name="_token"]').val();

	      form_data = $('#shippingAddressModal .form_data').serialize() + '&_token=' + _token_data;
	      url = window.location.origin + '/company/post_shipping_address';
	      $.post(url, form_data, function(r) {
	         obj = $.parseJSON(r);
	         // console.log(obj);
	         if(obj.status){
	            // alert(obj.message);
	            $('#shippingAddressModal').modal('toggle');
	            $("#shipping_address").val(obj.shipping_address);
	            $("#shipping_address_id").val(obj.shipping_address_id);
	         }else{
	            var errorText='';
               var i;
               for (i = 0; i < obj.error.length; i++) { 
                  errorText += obj.error[i] + ",";
               }
               alert(errorText);
	         }
	      });

	   }
	}, '.shipping_address_save');

	$(document).on({
	   click: function(e) {
	      e.preventDefault();
	      var _this = $(this), shipping_address_id, shipping_address;

	      shipping_address_id = _this.data('shipping-address-id');
	      shipping_address = _this.data('shipping-address');

	      $("#shipping_address").val(shipping_address);
	      $("#shipping_address_id").val(shipping_address_id);

	      $('#chooseShippingAddressModal').modal('toggle');
	   }
	}, '.shipping_address_item');


function indexIn() {
   $(".index").each(function(index) {
      $(this).text(index + 1);
   });
}
var unit_options = '<?php foreach ($units as $unit) {
		echo "<option value=\'".$unit->id."\'>".$unit->name."</option>";
	} ?>';

var selected_products = [];
var max_product = 5;

function getNum($number) {
   var checknumber = parseFloat($number);
   if (isNaN(checknumber)) {
      return 0;
   }
   return checknumber;
}

function update_price() {
   if ($('[name="product_quantity[]"]').length > 0) {
      var total_price = 0;
      var product_price = 0;
      var si_price = 0;
      $('[name="product_quantity[]"]').each(function(index) {
         var quantity = getNum($(this).val());
         var unit_price = getNum($(this).parent().parent().children('.unit_price_area').children('input').val());

         var net_price = quantity * unit_price;
         net_price = net_price.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
         $(this).parent().parent().children('.unit_price_area').children('span').children('span.product_nprice').text(net_price);
         total_price += (quantity * unit_price);
         product_price += (quantity * unit_price);
      });
      var shipping_fee = getNum($('[name="shipping_fee"]').val());
      var insurance_charge = getNum($('[name="insurance_charge"]').val());
      total_price = total_price + shipping_fee + insurance_charge;
      si_price = shipping_fee + insurance_charge;
      var n_total_price = total_price.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,');
      $('.total_price').text(n_total_price);
      var initial_payment = getNum($('[name="initial_payment"]').val());
      var total_price_after = total_price - initial_payment
      $('.total_price_after').text(total_price_after.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
      $('.product_price').text(product_price.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
      $('.si_price').text(si_price.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
   }
}

$(document).ready(function() {
   $('.loader').fadeOut('slow');

   $('[name="shipment_date"]').datepicker({
      dateFormat: "yy/mm/dd",
      minDate: "+0d",
      maxDate: "+365d",
   });

   $(document).on({
      change: function() {
         if ($(this).val() == 'after-supplier') {
            $('.specific_date_area').hide();
            $('.after_payment_area').css('display', 'block');
         } else {
            $('.specific_date_area').show();
            $('.after_payment_area').hide();
         }
      }
   }, '[name="shipment_date_type"]');

   function template_data(p_img, p_name, p_id) {
      var template = '<div class="con-pp"><hr>';

      template += '<div class="con-p-info" style="max-width: 790px; margin: auto; margin-bottom: 5px;">\
  							<input type="hidden" name="selected_products[]" value="' + p_id + '" required>\
							<span class="index" style="margin-right: 5px"></span>\
							<div style="height: 100px;width: 100px;text-align: center;border: 1px solid #ddd;"><img class="thunbnail" width="100" height="100" src="' + p_img + '" style=""><input style="display:none;" type="file" name="product_image[]" class="image_p"></div>\
							<textarea name="product_name[]" style="flex: 1;padding: 5px; margin: 0 5px; border: 1px solid #ddd; max-width: 558px" placeholder="Product Name..." required>' + p_name + '</textarea>\
							<i class="fa fa-trash-o dlt-itm" data-pid="' + p_id + '" style="cursor: pointer" aria-hidden="true"></i>\
						</div>'

      template += '<div style="width: 790px; margin: auto;">\
						  <div class="form-group quantity_area" style="margin-bottom: 5px; ">\
						    <label for=""><span style="color:red">*</span>Quantity:</label>\
						    <input type="number" name="product_quantity[]" class="form-control check_integer" max="99999999" min="1" id="" value="0" required>\
						  </div>\
						  <div class="form-group" style="margin-bottom: 5px; position: relative; left: 6px;">\
						    <label for=""><span style="color:red">*</span>Unit:</label>\
						    <select name="product_unit[]" class="form-control" style="width: 207px;" required>\
							  ' + unit_options + '\
							</select>\
						  </div>\
						  <div class="form-group unit_price_area" style="width: 562px;text-align: left;margin-bottom: 5px">\
						    <label for=""><span style="color:red">*</span>Unit Price:</label>\
						    <input type="text" name="product_unit_price[]" class="form-control check_number" min="0" max="9999999999" id="" value="0" required>\
						    <span>Product Price: US $ <span class="product_nprice">0</span></span>\
						  </div>\
						  <textarea name="product_details[]" style="margin-top:5px;padding: 7px;width: 552px; background: white; border: 1px solid #ddd; resize: both;" placeholder="Fill in any product details to make it as clear as possible for suppliers to understand your requirements." rows="2" type="text" height="100%"></textarea>\
						</div></div>';
      return template;
   }

   $(document).on({
      click: function() {
         var search_target = $(this).attr('data-sid');
         $('.product-rw').attr('id', '');
         $('#' + search_target).children().children().attr('id', 'myUL');
      }
   }, '.search_class');

   $(document).on({
      click: function() {
         var total_selected = $('.active_img').length;
         if (total_selected == null || total_selected == 0 || total_selected == 'undefined') {
            alert('You did not select any product');
         } else {
            if (total_selected >= max_product) {
               alert('Maximum ' + max_product + ' products are allowed');
            } else {
               $(".active_img").each(function(index) {
                  var p_img = $(this).attr('src');
                  var p_name = $(this).parent().attr('title');
                  var p_id = $(this).parent().attr('data-pid');
                  if (selected_products.length >= max_product) {
                     alert("You can not add more than " + max_product + " products");
                  } else {
                     if ($.inArray(p_id, selected_products) > -1) {
                        alert('This product is already selected.');
                     } else {
                        if ($('.con-pp').length >= max_product) {
                           alert('Maximum ' + max_product + ' product(s) are allowed.');

                        } else {
                           var p_template = template_data(p_img, p_name, p_id);
                           $('.none').remove();
                           $('.show-prod').append(p_template);
                           indexIn();
                           selected_products.push(p_id);
                           update_price();
                        }
                     }
                  }
               });
               $('#selectProduct').modal('hide');
            }
         }
      }
   }, '.make_confirm');

   //validate number and integer start
   $(document).on({
      keyup: function(event) {
         // Allow: backspace, delete, tab, escape, and enter
         if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
            // Allow: Ctrl+V
            (event.ctrlKey == true && (event.which == '118' || event.which == '86')) ||
            // Allow: Ctrl+c
            (event.ctrlKey == true && (event.which == '99' || event.which == '67')) ||
            // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) ||
            // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
         }

         var currentEl = $(this);
         var value = $(currentEl).val();

         // remove letters...
         value = value.replace(/[^0-9.-]/g, "");

         var hasDecPlace = value.match(/\./);

         // separate integer from decimal places:
         var pieces = value.split('.');
         var integer = pieces[0].replace('-', '');
         var decPlaces = ""
         if (pieces.length > 1) {
            pieces.shift();
            decPlaces = pieces.join('').replace('-', '');
         }

         // handle numbers greater than 12.00... :
         if (parseInt(integer) > 9999999999 || parseInt(integer) === 9999999999 && parseInt(decPlaces) > 0) {
            integer = "9999999999";
            decPlaces = getZeroedDecPlaces(decPlaces);
            alert("number must be between 0.00 and 9999999999.00");
         } // ...and less than 0:
         else if (parseInt(integer) < 0) {
            integer = "0";
            decPlaces = getZeroedDecPlaces(decPlaces);
            alert("number must be between 0.00 and 9999999999.00");
         }

         // handle more than two decimal places:
         if (decPlaces.length > 2) {
            decPlaces = decPlaces.substr(0, 2);
            alert("number cannot have more than two decimal places");
         }

         var newVal = hasDecPlace ? integer + '.' + decPlaces : integer;

         $(currentEl).val(newVal);
      }
   }, '.check_number');

   function getZeroedDecPlaces(decPlaces) {
      if (decPlaces === '') return '';
      else if (decPlaces.length === 1) return '0';
      else if (decPlaces.length >= 2) return '00';
   }

   $(document).on({
      keyup: function(event) {
         // Allow: backspace, delete, tab, escape, and enter
         if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
            // Allow: Ctrl+V
            (event.ctrlKey == true && (event.which == '118' || event.which == '86')) ||
            // Allow: Ctrl+c
            (event.ctrlKey == true && (event.which == '99' || event.which == '67')) ||
            // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) ||
            // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
         }
         var o = $(this);
         o.val(o.val().replace(/[^\d]/g, ""));
         if (o.val().length > o.maxLength) {
            o.val(o.value.slice(0, o.maxLength))
         }
      }
   }, '.check_integer');
   //validate number and integer end

   $(document).on({
      keyup: function() {
         update_price();
      }
   }, '[name="product_quantity[]"]');

   $(document).on({
      keyup: function() {
         update_price();
      }
   }, '[name="product_unit_price[]"]');

   $(document).on({
      keyup: function() {
         update_price();
      }
   }, '[name="initial_payment"]');

   $(document).on({
      keyup: function() {
         update_price();
      }
   }, '[name="shipping_fee"]');

   $(document).on({
      keyup: function() {
         update_price();
      }
   }, '[name="insurance_charge"]');


   //document ready end.
});

// var objTo = document.getElementById('custom-product-select');


var template = '<div class="con-pp"><hr>';

template += '<div class="con-p-info" style="max-width: 790px; margin: auto; margin-bottom: 5px;">\
  						<input type="hidden" name="selected_products[]" value="0" required>\
							<span class="index" style="margin-right: 5px"></span>\
							<div style="height: 100px;width: 100px;text-align: center;border: 1px solid #ddd;position:relative;"><img src="{{URL::to("assets/gold/plus-Icon.png")}}" class="select_p_image" style="margin-top: 35px;cursor: pointer;"><input style="display:none;" type="file" name="product_image[]" class="image_p" required></div>\
							<textarea name="product_name[]" style="flex: 1;padding: 5px; margin: 0 5px; border: 1px solid #ddd; max-width: 558px" placeholder="Product Name..." required></textarea>\
							<i class="fa fa-trash-o dlt-itm" style="cursor: pointer" aria-hidden="true"></i>\
						</div>'



template += '<div style="width: 790px; margin: auto;">\
						  <div class="form-group quantity_area" style="margin-bottom: 5px; ">\
						    <label for=""><span style="color:red">*</span>Quantity:</label>\
						    <input type="number" name="product_quantity[]" class="form-control check_integer" max="99999999" min="1" id="" value="0" required>\
						  </div>\
						  <div class="form-group" style="margin-bottom: 5px; position: relative; left: 6px;">\
						    <label for=""><span style="color:red">*</span>Unit:</label>\
						    <select name="product_unit[]" class="form-control" style="width: 207px;" required>\
							  ' + unit_options + '\
							</select>\
						  </div>\
						  <div class="form-group unit_price_area" style="width: 562px;text-align: left;margin-bottom: 5px">\
						    <label for=""><span style="color:red">*</span>Unit Price:</label>\
						    <input type="text" name="product_unit_price[]" class="form-control check_number" min="0" max="9999999999" id="" value="0" required>\
						    <span>Product Price: US $ <span class="product_nprice">0</span></span>\
						  </div>\
						  <textarea name="product_details[]" style="margin-top:5px;padding: 7px;width: 552px; background: white; border: 1px solid #ddd; resize: both;" placeholder="Fill in any product details to make it as clear as possible for suppliers to understand your requirements." rows="2" type="text" height="100%"></textarea>\
						</div></div>';




$(".index").each(function(index) {
   $(this).text(index + 1);
});

$(document).on({
   click: function() {
      $(this).parent().children('.image_p').click();
   }
}, '.select_p_image');

//preview image
$(document).on({
   change: function() {

      var size = "",
         type = "",
         src = "",
         reader, img_file;

      if (this.files && this.files[0]) {
         type = this.files[0].type;
         size = this.files[0].size;
         img_file = this.files[0];
         _this = $(this);

         if (type == 'image/jpeg' || type == 'image/png') {
            if (size > 2097152) {
               $(this).val('');
               alert('Maximum file size 2MB.');
            } else {
               reader = new FileReader();
               reader.readAsDataURL(img_file);
               reader.onload = function(e) {
                  src = e.target.result;
                  _this.parent().children('.select_p_image').attr('src', src);
                  _this.parent().children('.select_p_image').attr('width', 100);
                  _this.parent().children('.select_p_image').attr('height', 100);
                  _this.parent().children('.select_p_image').css('margin-top', 0);
                  _this.parent().append('<i class="fa fa-trash remove_img" aria-hidden="true"></i>');
               }
            }
         } else {
            $(this).val('');
            alert('Only jpg or png files are allowed.');
         }
      }

   }
}, '.image_p');

$(document).on({
   click: function() {
      $(this).parent().children('.select_p_image').attr('src', '{{URL::to("assets/gold/plus-Icon.png")}}');
      $(this).parent().children('.select_p_image').attr('width', '');
      $(this).parent().children('.select_p_image').attr('height', '');
      $(this).parent().children('.select_p_image').css('margin-top', '35px');
      $(this).remove();
   }
}, '.remove_img');

$('.addnewp').click(function() {
   // console.log($('.show-prod').find('.none'));
   if ($('.con-pp').length >= max_product) {
      alert('Maximum ' + max_product + ' product(s) are allowed.');
   } else {
      if ($('.show-prod').find('.none')) {
         $('.none').remove();
         $('.show-prod').append(template);
      } else {
         $('.show-prod').append(template);
      }
      indexIn();
      update_price();
   }
});
// $('.dlt-itm').click(function(){
// 	$(this).parent().parent().remove();
// 	console.log('deleted');
// 	indexIn();
// });
$(document).on('click', '.dlt-itm', function() {
   var p_id = $(this).attr('data-pid');
   selected_products.splice(selected_products.indexOf(p_id), 1);
   $(this).parent().parent().remove();
   // console.log('deleted');
   indexIn();
   update_price();
   var i = $('.con-pp');
   if (i.length < 1) {
      $('.show-prod').append('<div style=" border: 1px solid #ddd;" class="none"><p style="line-height: 100px; color:gray" class="text-center">None Selected</p></div>');
   }
});




$("input[type='image']").click(function() {
   $("input[id='my_file']").click();
});

function myFunction() {
   var input, filter, ul, li, span, i;
   input = document.getElementById("myInput");
   filter = input.value.toUpperCase();
   ul = document.getElementById("myUL");
   li = ul.getElementsByTagName("li");
   for (i = 0; i < li.length; i++) {
      span = li[i].getElementsByTagName("span")[0];
      if (span.innerHTML.toUpperCase().indexOf(filter) > -1) {
         li[i].style.display = "";
      } else {
         li[i].style.display = "none";

      }
   }
}


$(document).ready(function() {
   $(".view_less").click(function() {
      $(".show_elements").toggle(500);
      if ($(".view_less").html() == 'View Less') {
         $(this).parent().children('i').addClass('fa-angle-down');
         $(this).parent().children('i').removeClass('fa-angle-up');
         $(".view_less").html('View More');
      } else {
         $(".view_less").html('View Less');
         $(this).parent().children('i').removeClass('fa-angle-down');
         $(this).parent().children('i').addClass('fa-angle-up');
      }
   });
});



$(function() {
   // Handler for .ready() called.
   $(".slect-img").on("click", function() {
      $(this).toggleClass("active_img");
      if ($('.active_img').length > (max_product)) {
         alert('Maximum ' + max_product + ' product(s) are allowed.');
         $(this).toggleClass("active_img");
      }
   });
});

$('#click_advance').click(function() {
   $('.list-sb-cat').toggle();
   $(this).toggleClass("fa-angle-down fa-angle-right");
});


$('.quotation_line').eq(0).css('background-color', 'aliceblue');
$(document).ready(function() {
   $(document).on({
      click: function() {
         console.log('working')
         $('.frontend_show').show();
         $('.backend_show').hide();
         $('.hide_all').hide();
         $('.quotation_line').css('background-color', 'white');
         $(this).css('background-color', 'aliceblue');
         $(this).children().children('.show_target').children('.frontend_show').hide();
         $(this).children().children('.show_target').children('.backend_show').show();
         var catch_class = $(this).attr('show_quotation');
         $('.' + catch_class).show(300);
      }
   }, '.quotation_line');
   $(document).on({
      mouseover: function() {
         $(this).parent().parent().children('.toolTip').show();
      }
   }, '.tooltip_action');
   $(document).on({
      mouseout: function() {
         $(this).parent().parent().children('.toolTip').hide();
      }
   }, '.tooltip_action');
   // $(document).on({mouseover:function(){
   // 	$(this).show();
   // }},'.toolTip');
   // $(document).on({mouseout:function(){
   // 	$(this).hide();
   // }},'.toolTip');

   $(document).on({

      click: function(e) {
         e.preventDefault();
         var base_url = window.location.origin;
         var supplier_id = $(this).data('supplier_id');
         var product_id = $(this).data('product_id');
         var url = base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
         window.location.href = url;
      }

   }, '.contact_supplier');

});
</script>
@stop