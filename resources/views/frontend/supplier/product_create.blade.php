
@extends('frontend.layouts.about-us-topbar')

@section('page_css')
<link property='stylesheet' href="{!! asset('assets/frontend/css/dashboard.css',is_secured()) !!}" rel="stylesheet">
{{-- <link property='stylesheet' href="{!! asset('assets/frontend/css/spectrum.css',is_secured()) !!}" rel="stylesheet">
 --}}
<link property='stylesheet' href="{!! asset('assets/frontend/css/why-bdtdc.css',is_secured()) !!}" rel="stylesheet">

@endsection
@section('content')
<div id="ajax_status" class="hide_this text-center">
   <img src="{{ URL::asset('assets/frontend/images/uploads/ajax_loading.gif',is_secured()) }}" class="img-responsive" alt="">
</div>

<div class="container">
   <!-- ---LOADING ANIMATION TRIGERED TO THIS LOADER CLASS;----- -->
   <div style="background-size: 35px 35px;" class="loader"></div>
   <div class="row" style="    padding-top: 12px;">
      <div class="col-sm-10 padding_0">
         <div class="col-md-12 padding_0" style="padding-bottom: 1%">
            <ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
               <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                  <a itemprop="url" href="{{ URL::to('company/dashboard') }}" style="color: #333;font-weight: normal;font-size: 15px;" itemprop="item">
                     <span itemprop="name">Dashboard </span><i class="fa fa-angle-right"></i>
                  </a>
                  <meta itemprop="position" content="1" />
               </li>
               <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                  <a itemprop="url" href="{{ URL::to('dashboard/product') }}" style="color: #333;font-weight: normal;font-size: 15px;">
                     <span itemprop="name">Manage Products &nbsp;
                     </span> </a>
                  <meta itemprop="position" content="2" />
               </li>

               <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                  <a itemprop="url" href="{{URL::to('supplier/product_create')}}" style="color: #000;font-size: 15px;"> <i class="fa fa-angle-right"></i> <span itemprop="name"><b>Add new product </b></span> <i class="fa fa-angle-right"></i>
                  </a>
                  <meta itemprop="position" content="3" />
               </li>
            </ul>
         </div>
      </div>
      <div class="col-sm-2 padding_0 text-right" style="">
         <a href="{{URL::to('dashboard/product')}}" class="goBack"><span>Go Back</span></a>
      </div>

   </div>
   @if(count($errors) > 0)
   <div class="alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
         <li>{!! $error !!}</li>
         @endforeach
      </ul>
   </div>
   @endif

   <ul class="text-danger backend_error" style="border: 1px solid #ddd;display: none;padding: 10px 20px;">

   </ul>
   <!-- END PAGE HEADER-->
   <!-- BEGIN PAGE CONTENT-->
   <div class="row" style="">
      <div class="col-md-2">
         @include('frontend.layouts.dashboard-aside')
      </div>
      <div style="padding-bottom:2%;padding: 1% 2% 5% 2%;background: #fff;z-index: 0;margin: 0px" class="col-md-8 box">
         <?php
        $user_id = \Sentinel::getUser()->id;
        $company = App\Models\Companies::where('user_id',$user_id)->first();
        $wholesale=$company->wholesale;
        //print_r($wholesale);
    ?>

         {!! Form::open(array('url' => 'supplier/product_create', 'method' => 'post', 'enctype'=>'multipart/form-data', 'accept-charset'=>'UTF-8', 'class'=>'form-horizontal form-row-seperated product_info_form')) !!}

         <!-- <ul class="nav nav-tabs product_create_tab" role="tablist">
				<li class="active"><a data-toggle="tab" href="#product_details_tab_content">Product Details</a></li>
				<li><a data-toggle="tab" href="#product_image_tab_content">Product Image</a></li>
			</ul> -->

         <div class="">
            <!-------------PRODUCT-DETAILS-TAB-CONTENT;------------------>
            <div id="product_details_tab_content" class="">
               <h4 class="text-center" style="margin-bottom: 23px;">Product Insert Form</h4>
               <div class="row margin_top1">
                  <div style="text-align:right;padding-right:0px" class="col-md-2">
                     <span>Product Name:</span>
                  </div>
                  <div class="col-md-4">
                     <input type="hidden" name="base_url" value="{{ URL::to('/',null,is_secured()) }}">
                     <input style="height:27px;padding-bottom:1%;font-size:12px" type="text" name="product_name" validation="validated_false" class="form-control validate" placeholder="Product Name" value="{{ old('product_name') }}" min="3" max="1000" minlength="3" maxlength="1000" required>
                     <p class="empty_error hidden_icon" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please enter a Product Name</p>
                  </div>
                  <div class="col-xs-3 validation_status">
                     <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
                     <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
                     <span class="text-danger validation_message"></span>
                  </div>
               </div>
               @if($wholesale==1)

               <div class="row margin_top1">
                  <div style="text-align:right;padding-right:0px" class="col-md-2">
                     <span>Wholesale product:</span>
                  </div>
                  <div class="col-md-10">
                     <label><input type="checkbox" name="is_wholesale_product" class="" value="true">Make wholesale product</label><br>
                     <label><input type="checkbox" name="is_limited_time_offer" class="" value="true">Make Limited time offer for this product</label>
                  </div>
               </div>
               <div class="row margin_top1 limited_offer_div" style="display: none;">
                  <div style="text-align:right;padding-right:0px" class="col-md-2">
                     <label for="">Limited time offer: </label>
                  </div>
                  <div class="col-md-7">
                     <table class="table">
                        <tr>
                           <td>Percentage: </td>
                           <td>
                              <div class="input-group" style="width:150px;">
                                 <input validation="validated_false" class="form-control check_number" style="height:27px;padding-bottom:1%;font-size:12px;width:150px;" type="text" value="{{ old('percentage') }}" name="percentage" aria-describedby="percentage-addon">
                                 <span class="input-group-addon" style="color:black;" id="percentage-addon">%</span>
                              </div>
                           </td>
                           <!-- <td>
				      							<div class="col-xs-3 validation_status">
						                            <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
						                            <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
						                            <span class="text-danger validation_message"></span>
					                        	</div>
				                        	</td> -->
                        </tr>
                        <tr>
                           <td>From: </td>
                           <td><input class="form-control span2" id="dpd1" style="height:27px;padding-bottom:1%;font-size:12px;width:150px;" type="text" name="offer_from" placeholder="yyyy-mm-dd" value="{{ old('offer_from') }}"></td>
                           <td>To: </td>
                           <td><input class="form-control span2" id="dpd2" style="height:27px;padding-bottom:1%;font-size:12px;width:150px;" type="text" name="offer_to" placeholder="yyyy-mm-dd" value="{{ old('offer_to') }}"></td>
                           <!-- <td>
				      							<div class="col-xs-3 validation_status">
						                            <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
						                            <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
						                            <span class="text-danger validation_message"></span>
					                        	</div>
				                        	</td> -->

                        </tr>
                     </table>
                  </div>
               </div>
               @endif
               <div class="row margin_top1">
                  <div style="text-align:right;padding-right:0px;padding-top: 13px;" class="col-md-2">
                     <span>Parent Category:</span>
                  </div>
                  <div class="col-md-10">
                     <table class="table" style="margin-bottom: 0;">
                        <tbody>
                           <tr>

                              <td style="padding-left: 0">

                                 <select name="parent_category" class="form-control" style="height:29px;padding-bottom:0%;padding-top:0px;font-size:12px" required>
                                    <option value="0">--- Please Select Category ---</option>
                                    @foreach(\App\Models\Categories::where('parent_id',0)->get() as $v)
                                    <option value="{{ $v->id }}">{{ trim($v->name) }}</option>
                                    @endforeach
                                 </select>
                                 <p class="empty_error hidden_icon parent_cat_error" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please Select Parent Category</p>
                              </td>
                              <td style="text-align: right;">Sub-category: </td>
                              <td>
                                 <select name="sub_category" class="form-control" style="height:29px;padding-bottom:0%;padding-top:0px;font-size:12px" required>
                                    <option value="0">--- Select a sub category ---</option>
                                 </select>
                                 <p class="empty_error hidden_icon sub_cat_error" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please Select Sub-Category</p>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <span class="help-block">select only one category </span>
                  </div>
               </div>
               <div class="row margin_top1">
                  <div style="text-align:right;padding-right:0px" class="col-md-2">
                     <label for="">Meta Keyword:</label>
                  </div>
                  <div class="col-md-4">
                     <textarea class="form-control maxlength-handler validate" validation="validated_false" name="product_meta_keywords" min="2" max="200" minlength="2" maxlength="200" required>{{old('product_meta_keywords')}}</textarea>
                     <p class="empty_error hidden_icon" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please type some Meta Keyword</p>
                  </div>
                  <div class="col-xs-3 validation_status">
                     <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
                     <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
                     <span class="text-danger validation_message"></span>
                  </div>
               </div>
               <div class="row margin_top1">
                  <div style="text-align:right;padding-right:0px" class="col-md-2">
                     <label for="">Tag:</label>
                  </div>
                  <div class="col-md-4">
                     <textarea class="form-control maxlength-handler validate" validation="validated_false" name="product_meta_tag" min="2" max="200" minlength="2" maxlength="200" required>{{old('product_meta_tag')}}</textarea>
                     <p class="empty_error hidden_icon" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please type Meta Tags Separated by comma (,)</p>
                  </div>
                  <div class="col-xs-3 validation_status">
                     <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
                     <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
                     <span class="text-danger validation_message"></span>
                  </div>
               </div>
               <div id="product_image_tab_content" class="row margin_top1">
                  <div style="text-align:right;padding-right:0px" class="col-md-2">
                     <label for="">Choose Product Image:</label>
                  </div>
                  <div class="col-md-10" style="margin-top: 8px;">
                     <div class="image_container">
                        <input type="file" name="product_images[]" class="p_add_img img_1">
                     </div>
                     <span class="text-muted">(Max: 2MB, only jpg or png files are allowed. Maximum six images are allowed. Recommanded WxH 1000x1000 pixel)</span>
                     <p class="image_required_error hidden_icon" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please insert at least one product image</p>
                     <p class="image_attachment_error hidden_icon" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> <span>Please fix image error</span></p>
                     <div class="col-xs-12 img_preview" style="margin-top:1%;padding:1%">
                        <!----PREVIEW IMAGE HANDELED BY JAVASCRIPT--------- -->

                     </div>
                  </div>
               </div>
               <div class="row margin_top1">
                  <div style="text-align:right;padding-right:0px" class="col-md-2">
                     <label for=""><span class="model_hs">Model/HS</span>: </label>
                  </div>
                  <div class="col-md-4">
                     <input style="height:27px;padding-bottom:1%;font-size:12px" type="text" name="product_model" validation="validated_false" class="form-control validate" min="2" max="200" minlength="2" maxlength="200" required value="{{old('product_model')}}">
                     <p class="empty_error hidden_icon" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please type product <span class="model_hs">model/HS</span> number</p>
                  </div>
                  <div class="col-xs-3 validation_status">
                     <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
                     <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
                     <span class="text-danger validation_message"></span>
                  </div>
               </div>
               <div class="row margin_top1">
                  <div style="text-align:right;padding-right:0px" class="col-md-2">
                     <label for="">Brand Name: </label>
                  </div>
                  <div class="col-md-4">
                     <input style="height:27px;padding-bottom:1%;font-size:12px" type="text" name="brand_name" validation="validated_false" class="form-control validate" min="2" max="200" minlength="2" maxlength="200" required value="{{old('brand_name')}}">
                     <p class="empty_error hidden_icon" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please type brand name</p>
                  </div>
                  <div class="col-xs-3 validation_status">
                     <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
                     <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
                     <span class="text-danger validation_message"></span>
                  </div>
               </div>
               <div class="row margin_top1">
                  <div style="text-align:right;padding-right:0px" class="col-md-2">
                     <label for="">Place of Origin: </label>
                  </div>
                  <div class="col-md-4">
                     <select name="country" class="form-control validate validate_place_origin" style="height:29px;padding-bottom:1%;padding-top:0px;font-size:12px;" validation="validated_false">
                        <option value="0">--- Select Place of Origin ---</option>
                        @foreach(\App\Models\Country::get() as $bc)
                        <option value="{{ $bc->id }}" <?php if(old('country') == $bc->id){echo 'selected';} ?>>{{ trim($bc->name) }}</option>
                        @endforeach
                     </select>
                     <p class="place_origin_error hidden_icon" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please Select product place of origin</p>
                     <!--
			      			!! Form::select('country',\App\Model\BdtdcCountry::lists('name','id'), '18',array('class'=>'form-control','style'=>'height:29px;padding-bottom:1%;padding-top:0px;font-size:12px')) !! -->
                  </div>
                  <div class="col-xs-3 validation_status">
                     <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
                     <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
                     <span class="text-danger validation_message"></span>
                  </div>
               </div>
               <div class="row attribute_area margin_top1">
                  <div style="text-align:right;padding-right:0px;margin-top:1.5%" class="col-md-2">
                     <label for="">Attributes: </label>
                  </div>
                  <div class="col-md-8" style="padding-top: 1%;">
                     <table class="table">
                        <tbody class="copied_template">
                           <tr>
                              <td>Name:</td>
                              <td><input style="height: 27px; padding-bottom: 5%; font-size: 12px; margin-left: -70px; width: 255px; padding-left: 55px;" type="text" name="product_att_name[]" class="form-control" min="1" max="200" minlength="1" maxlength="200"></td>
                              <td>Value:</td>
                              <td><input style="height: 27px; padding-bottom: 5%; font-size: 12px; margin-left: -70px; width: 215px; padding-left: 55px;" type="text" name="product_att_value[]" class="form-control" min="2" max="200" minlength="2" maxlength="200"></td>
                              <td> <button class="btn btn-primary btn-xs add_more_attribute_btn"><i class="fa fa-plus" style="padding:2px;"></i></button> </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="row attribute_area margin_top1">
                  <div style="text-align:right;padding-right:0px;margin-top:0" class="col-md-2">
                     <label for="">Trade Details: </label>
                  </div>
                  <div class="col-md-7">
                     <label style="margin-left:5px;"><input style="top:2px" type="radio" name="base" value="based_quantity" checked /> Based on Quantity</label>
                     &nbsp;&nbsp;<label><input style="top:2px" type="radio" name="base" value="based_FOB" /> FOB</label>
                     <table class="table quantity_base">
                        <tbody>
                           <tr>
                              <td style="width:18%">Unit Type: </td>
                              <td>
                                 <select style="height:28px;padding-bottom:1%;font-size:12px;padding-top:0%;width:100px;" class="form-control" name="unit_type" id="">
                                    @foreach($units as $u)
                                    <option value="{!! $u->id !!}" <?php if(old('unit_type') == $u->id){echo "selected";} ?>>{!! $u->name !!}</option>
                                    @endforeach
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td>MOQ: <span></span></td>
                              <td><input style="height:27px;padding-bottom:1%;font-size:12px" type="text" name="product_MOQ[]" class="form-control" min="1" max="999999999" minlength="1" maxlength="999999999"></td>
                              <td>FOB Price: </td>
                              <td>
                                 <input style="height:27px;padding-bottom:1%;font-size:12px;width:100px" type="text" name="product_FOB_from[]" class="form-control check_number" placeholder="From" min="0" max="999999999" minlength="0" maxlength="999999999">
                              </td>
                              <td style="text-align:center;">-</td>
                              <td>
                                 <input style="height:27px;padding-bottom:1%;font-size:12px;width:100px;" type="text" name="product_FOB_to[]" class="form-control check_number" placeholder="To" min="0" max="999999999" minlength="0" maxlength="999999999">
                              </td>
                              <td><i class="fa fa-plus btn btn-xs btn-primary add_price_btn"></i></td>
                              <!-- <td>
			      							<div class="col-xs-3 validation_status">
					                            <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
					                            <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
					                            <span class="text-danger validation_message"></span>
				                        	</div>
				                        </td> -->
                           </tr>
                        </tbody>
                     </table>
                     <table class="table FOB_base" style="display: none;">
                        <tbody>
                           <tr>
                              <td>Currency: </td>
                              <td>
                                 <select name="currencies" value="{{old('currencies')}}">
                                    <option value="">Select currency</option>
                                    <option value="USD">America (United States) Dollars – USD</option>
                                    <option value="AFN">Afghanistan Afghanis – AFN</option>
                                    <option value="ALL">Albania Leke – ALL</option>
                                    <option value="DZD">Algeria Dinars – DZD</option>
                                    <option value="ARS">Argentina Pesos – ARS</option>
                                    <option value="AUD">Australia Dollars – AUD</option>
                                    <option value="ATS">Austria Schillings – ATS</option>
                                    <option value="BSD">Bahamas Dollars – BSD</option>
                                    <option value="BHD">Bahrain Dinars – BHD</option>
                                    <option value="BDT">Bangladesh Taka – BDT</option>
                                    <option value="BBD">Barbados Dollars – BBD</option>
                                    <option value="BEF">Belgium Francs – BEF</option>
                                    <option value="BMD">Bermuda Dollars – BMD</option>
                                    <option value="BRL">Brazil Reais – BRL</option>
                                    <option value="BGN">Bulgaria Leva – BGN</option>
                                    <option value="CAD">Canada Dollars – CAD</option>
                                    <option value="XOF">CFA BCEAO Francs – XOF</option>
                                    <option value="XAF">CFA BEAC Francs – XAF</option>
                                    <option value="CLP">Chile Pesos – CLP</option>
                                    <option value="CNY">China Yuan Renminbi – CNY</option>
                                    <option value="RMB - CNY">RMB (China Yuan Renminbi) – CNY</option>
                                    <option value="COP">Colombia Pesos – COP</option>
                                    <option value="XPF">CFP Francs – XPF</option>
                                    <option value="CRC">Costa Rica Colones – CRC</option>
                                    <option value="HRK">Croatia Kuna – HRK</option>
                                    <option value="CYP">Cyprus Pounds – CYP</option>
                                    <option value="CZK">Czech Republic Koruny – CZK</option>
                                    <option value="DKK">Denmark Kroner – DKK</option>
                                    <option value="DEM">Deutsche (Germany) Marks – DEM</option>
                                    <option value="DOP">Dominican Republic Pesos – DOP</option>
                                    <option value="NLG">Dutch (Netherlands) Guilders – NLG</option>
                                    <option value="XCD">Eastern Caribbean Dollars – XCD</option>
                                    <option value="EGP">Egypt Pounds – EGP</option>
                                    <option value="EEK">Estonia Krooni – EEK</option>
                                    <option value="EUR">Euro – EUR</option>
                                    <option value="FJD">Fiji Dollars – FJD</option>
                                    <option value="FIM">Finland Markkaa – FIM</option>
                                    <option value="FRF*">France Francs – FRF*</option>
                                    <option value="DEM">Germany Deutsche Marks – DEM</option>
                                    <option value="XAU">Gold Ounces – XAU</option>
                                    <option value="GRD">Greece Drachmae – GRD</option>
                                    <option value="GTQ">Guatemalan Quetzal – GTQ</option>
                                    <option value="NLG">Holland (Netherlands) Guilders – NLG</option>
                                    <option value="HKD">Hong Kong Dollars – HKD</option>
                                    <option value="HUF">Hungary Forint – HUF</option>
                                    <option value="ISK">Iceland Kronur – ISK</option>
                                    <option value="XDR">IMF Special Drawing Right – XDR</option>
                                    <option value="INR">India Rupees – INR</option>
                                    <option value="IDR">Indonesia Rupiahs – IDR</option>
                                    <option value="IRR">Iran Rials – IRR</option>
                                    <option value="IQD">Iraq Dinars – IQD</option>
                                    <option value="IEP*">Ireland Pounds – IEP*</option>
                                    <option value="ILS">Israel New Shekels – ILS</option>
                                    <option value="ITL*">Italy Lire – ITL*</option>
                                    <option value="JMD">Jamaica Dollars – JMD</option>
                                    <option value="JPY">Japan Yen – JPY</option>
                                    <option value="JOD">Jordan Dinars – JOD</option>
                                    <option value="KES">Kenya Shillings – KES</option>
                                    <option value="KRW">Korea (South) Won – KRW</option>
                                    <option value="KWD">Kuwait Dinars – KWD</option>
                                    <option value="LBP">Lebanon Pounds – LBP</option>
                                    <option value="LUF">Luxembourg Francs – LUF</option>
                                    <option value="MYR">Malaysia Ringgits – MYR</option>
                                    <option value="MTL">Malta Liri – MTL</option>
                                    <option value="MUR">Mauritius Rupees – MUR</option>
                                    <option value="MXN">Mexico Pesos – MXN</option>
                                    <option value="MAD">Morocco Dirhams – MAD</option>
                                    <option value="NLG">Netherlands Guilders – NLG</option>
                                    <option value="NZD">New Zealand Dollars – NZD</option>
                                    <option value="NOK">Norway Kroner – NOK</option>
                                    <option value="OMR">Oman Rials – OMR</option>
                                    <option value="PKR">Pakistan Rupees – PKR</option>
                                    <option value="XPD">Palladium Ounces – XPD</option>
                                    <option value="PEN">Peru Nuevos Soles – PEN</option>
                                    <option value="PHP">Philippines Pesos – PHP</option>
                                    <option value="XPT">Platinum Ounces – XPT</option>
                                    <option value="PLN">Poland Zlotych – PLN</option>
                                    <option value="PTE">Portugal Escudos – PTE</option>
                                    <option value="QAR">Qatar Riyals – QAR</option>
                                    <option value="RON">Romania New Lei – RON</option>
                                    <option value="ROL">Romania Lei – ROL</option>
                                    <option value="RUB">Russia Rubles – RUB</option>
                                    <option value="SAR">Saudi Arabia Riyals – SAR</option>
                                    <option value="XAG">Silver Ounces – XAG</option>
                                    <option value="SGD">Singapore Dollars – SGD</option>
                                    <option value="SKK">Slovakia Koruny – SKK</option>
                                    <option value="SIT">Slovenia Tolars – SIT</option>
                                    <option value="ZAR">South Africa Rand – ZAR</option>
                                    <option value="KRW">South Korea Won – KRW</option>
                                    <option value="ESP">Spain Pesetas – ESP</option>
                                    <option value="XDR">Special Drawing Rights (IMF) – XDR</option>
                                    <option value="LKR">Sri Lanka Rupees – LKR</option>
                                    <option value="SDD">Sudan Dinars – SDD</option>
                                    <option value="SEK">Sweden Kronor – SEK</option>
                                    <option value="CHF">Switzerland Francs – CHF</option>
                                    <option value="TWD">Taiwan New Dollars – TWD</option>
                                    <option value="THB">Thailand Baht – THB</option>
                                    <option value="TTD">Trinidad and Tobago Dollars – TTD</option>
                                    <option value="TND">Tunisia Dinars – TND</option>
                                    <option value="TRY">Turkey New Lira – TRY</option>
                                    <option value="AED">United Arab Emirates Dirhams – AED</option>
                                    <option value="GBP">United Kingdom Pounds – GBP</option>
                                    <option value="USD">United States Dollars – USD</option>
                                    <option value="VEB">Venezuela Bolivares – VEB</option>
                                    <option value="VND">Vietnam Dong – VND</option>
                                    <option value="ZMK">Zambia Kwacha – ZMK</option>
                                 </select>
                              </td>
                              <td>
                                 <input style="height:27px;padding-bottom:1%;font-size:12px;width:100px;" type="text" name="currency_from" class="form-control check_number" placeholder="Price From" min="0" max="999999999" minlength="0" maxlength="999999999" value="{{old('currency_from')}}">
                              </td>
                              <td style="text-align:center;">-</td>
                              <td>
                                 <input style="height:27px;padding-bottom:1%;font-size:12px;width:100px;" type="text" name="currency_to" class="form-control check_number" placeholder="Price To" min="0" max="999999999" minlength="0" maxlength="999999999" value="{{old('currency_to')}}">
                              </td>
                           </tr>
                           <tr>
                              <td style="width:18%">Per Unit: </td>
                              <td>
                                 <select style="height:28px;padding-bottom:1%;font-size:12px;padding-top:0%;width:100px;" class="form-control" name="unit_type_FOB" id="">
                                    @foreach($units as $u)
                                    <option value="{!! $u->id !!}" <?php if(old('unit_type_FOB') == $u->id){echo "selected";} ?>>{!! $u->name !!}</option>
                                    @endforeach
                                 </select>
                              </td>
                           </tr>

                           <!-- <td>
			      							<div class="col-xs-3 validation_status">
					                            <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
					                            <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
					                            <span class="text-danger validation_message"></span>
				                        	</div>
				                        </td> -->
                           </tr>
                           <tr>
                              <td>MOQ: <span></span></td>
                              <td><input style="height:27px;padding-bottom:1%;font-size:12px;width:150px;" type="text" name="product_MOQ_FOB" class="form-control" min="1" max="999999999" minlength="1" maxlength="999999999" value="{{old('product_MOQ_FOB')}}"></td>
                              <!-- <td>
			      							<div class="col-xs-3 validation_status">
					                            <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
					                            <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
					                            <span class="text-danger validation_message"></span>
				                        	</div>
				                        </td> -->
                           </tr>
                           <tr>
                              <td>Discounted Price: <span></span></td>
                              <td><input style="height:27px;padding-bottom:1%;font-size:12px;width:150px;" type="text" name="discounted_price" class="form-control check_number" min="0" max="999999999" minlength="2" maxlength="999999999" value="{{old('discounted_price')}}"></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="row margin_top1">
                  <div style="text-align:left;padding-right:0px;margin-top: 4px;padding-left: 50px;" class="col-md-12">
                     <label for="">Logistic info: </label>
                  </div>
                  <div class="col-md-9">
                     <!-- <div class="form-control height-auto"> -->
                     <!-- <ul class="list-unstyled">
									<li> -->
                     <table class="table">
                        <tr>
                           <td style="text-align: right;">Processing time: </td>
                           <td><input validation="validated_false" class="form-control validate check_integer" min="0" max="400" minlength="0" maxlength="400" required style="height:27px;padding-bottom:2%;font-size:12px;" type="text" name="processing_time" value="{{old('processing_time')}}" placeholder="Enter in day">

                           </td>
                           <td>
                              <div class=" validation_status">
                                 <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
                                 <!-- <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i> -->
                                 <span class="text-danger validation_message"></span>
                              </div>
                              <p class="empty_error hidden_icon" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please enter processing time or put 0 to ignore</p>
                           </td>
                        </tr>
                        <tr>
                           <td style="text-align: right;">Port: </td>
                           <td><input validation="validated_false" class="form-control validate" style="height:27px;padding-bottom:2%;font-size:12px;" type="text" name="port" min="1" max="200" minlength="1" maxlength="200" required value="{{old('port')}}" placeholder="Type nearest port">

                           </td>
                           <td>
                              <div class=" validation_status">
                                 <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
                                 <!-- <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i> -->
                                 <span class="text-danger validation_message"></span>
                              </div>
                              <p class="empty_error hidden_icon" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please Enter port or put 0 to ignore</p>
                           </td>

                        </tr>
                        <tr>
                           <td style="text-align: right;">Supply ability: </td>
                           <td><input validation="validated_false" class="form-control validate check_integer" min="0" max="999999999" minlength="0" maxlength="999999999" required style="height:27px;padding-bottom:2%;font-size:12px;" type="text" name="supply_ability" value="{{old('supply_ability')}}">

                           </td>
                           <td>/ Month
                              <div class=" validation_status">
                                 <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
                                 <!-- <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i> -->
                                 <span class="text-danger validation_message"></span>
                              </div>
                              <p class="empty_error hidden_icon" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please enter supply ability or put 0 to ignore</p>
                           </td>
                        </tr>
                     </table>

                     <!-- <div class="col-md-8">
				      					<input type="text" name="add_group_name[]" placeholder="Group Name" class="form-control" style="height:30px;font-size:12px;margin-bottom: 1%">
				      					<a href="" class="btn btn-success btn-sm product_group_submit_btn" >Save</a>
					      				</div>
					      				<div class="col-md-2 text-right" style="margin-bottom: 2%">
					      					<a class="btn btn-xs btn-danger group_name_from_remover" href=""><i class="fa fa-remove"></i></a>
					      				</div> -->

                     <!-- </li>
								</ul> -->
                     <!-- </div> -->
                  </div>
               </div>
               <div class="row attribute_area margin_top1">
                  <div style="padding-right:0px;margin-top:2%" class="col-md-12">
                     <label for="">Product Group: <span class="summary">Grouping your products makes it easier for buyers to find them</span></label>
                  </div>
                  <div class="col-md-7 col-sm-7">
                     <table class="table">
                        <tbody>
                           <tr>
                              <td align="right" style="width: 133px">Group Name:</td>
                              <td>
                                 <select style="height:28px;padding-bottom:1%;font-size:12px;padding-top:0%" class="form-control" name="product_groups" id="">
                                    @foreach($product_groups as $u)
                                    <option value="{!! $u->id !!}" <?php if(old('product_groups') == $u->id){echo "selected";} ?>>{!! $u->name !!}</option>
                                    @endforeach
                                 </select>
                                 <p class="product_group_error hidden_icon" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please select a product group (add new if not available)</p>

                              </td>
                              <td>
                                 <span class="group_name_form_opener"> <i style="font-size: 25px;color: #19446F;overflow: unset;" class="btn btn-xs fa fa-plus-square"></i></span>
                              </td>
                           </tr>

                        </tbody>
                     </table>
                  </div>
                  <div class="col-md-5 col-sm-5 add_group_name_form_area" style="border:1px solid #ddd;padding:1%">
                     <div class="col-md-10">
                        <input type="text" name="add_group_name[]" placeholder="Group Name" class="form-control" style="height:30px;font-size:12px;margin-bottom: 1%">
                        <a href="" class="btn btn-success btn-sm product_group_submit_btn">Save</a>
                     </div>
                     <div class="col-md-2 text-right" style="margin-bottom: 2%">
                        <a class="btn btn-xs btn-danger group_name_from_remover" href=""><i class="fa fa-remove"></i></a>
                     </div>
                  </div>
               </div>
               <div class="row margin_top1">
                  <div style="text-align:right;padding-right:0px" class="col-md-2">
                     <label for="">Payments: </label>
                  </div>
                  <div class="col-md-7">
                     <div class="form-control height-auto">
                        <ul class="list-unstyled">
                           <li>
                              <label><input class="" type="checkbox" name="payment[]" value="L/C"> L/C</label>
                              <label><input class="" type="checkbox" name="payment[]" value="Paypal"> Paypal</label>
                              <label><input class="" type="checkbox" name="payment[]" value="D/A"> D/A</label>
                              <label><input class="" type="checkbox" name="payment[]" value="Western Union"> Western Union</label>
                              <label><input class="" type="checkbox" name="payment[]" value="D/P"> D/P</label>
                              <label><input class="" type="checkbox" name="payment[]" value="MoneyGram"> MoneyGram</label>
                              <label><input class="" type="checkbox" name="payment[]" value="Cash"> Cash</label>
                              <label><input class="" type="checkbox" name="payment[]" value="Escrow"> Escrow</label>
                              <label><input class="" type="checkbox" name="payment[]" value="T/T"> T/T</label>
                              <label><input class="" type="checkbox" name="payment[]" value="others"> Others</label>
                              <div id="others_area" style="display:none;border: 1px solid rgb(23, 175, 186);padding: 10px;"><input type="text" name="others_payment" placeholder="Other Payments Method" class="form-control" style="height:30px;font-size:12px;margin-bottom: 1%" min="1" max="200" minlength="1" maxlength="200" value="{{old('others_payment')}}">
                              </div>
                              <!-- <div class="col-md-8">
				      					<input type="text" name="add_group_name[]" placeholder="Group Name" class="form-control" style="height:30px;font-size:12px;margin-bottom: 1%">
				      					<a href="" class="btn btn-success btn-sm product_group_submit_btn" >Save</a>
					      				</div>
					      				<div class="col-md-2 text-right" style="margin-bottom: 2%">
					      					<a class="btn btn-xs btn-danger group_name_from_remover" href=""><i class="fa fa-remove"></i></a>
					      				</div> -->

                           </li>
                        </ul>
                     </div>
                     <span class="help-block">
                        select one or more options </span>
                  </div>
               </div>
               <div class="row margin_top1">
                  <div style="text-align:right;padding-right:0px" class="col-md-2">
                     <label for="packages_delivery">Packages And Delivery: </label>
                  </div>
                  <div class="col-md-7">
                     <textarea class="form-control maxlength-handler validate" validation="validated_false" name="packages_delivery" min="2" max="1000" minlength="2" maxlength="1000" required>{{old('packages_delivery')}}</textarea>
                     <p class="empty_error hidden_icon" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please give product packages and delivery information</p>
                  </div>
                  <div class="col-xs-3 validation_status">
                     <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
                     <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
                     <span class="text-danger validation_message"></span>
                  </div>
               </div>
               <div class="row margin_top1" style="margin-top: 30px;">
                  <div style="text-align:right;padding-right:0px;margin-top:3%" class="col-md-2">
                     <label for="">Product Details: </label>
                  </div>
                  <div class="col-md-10">
                     <textarea id="editor" class="form-control product_desc" validation="validated_false" name="product_description" min="2" max="9999999" minlength="2" maxlength="9999999" required>{{old('product_description')}}</textarea>
                     <p class="empty_error hidden_icon" style="margin-top: 5px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please type some product details</p>
                  </div>
                  <!-- <div class="col-md-1 ">
			      			                        
			      			                	</div> -->
               </div>

               <div class="row margin_top1" style="margin-top: 30px;">
                  <div style="text-align:right;padding-right:0px;margin-top:3%" class="col-md-2">
                     <label for=""> </label>
                  </div>
                  <div class="col-md-10">
                     <div style=""><label><input type="checkbox" name="terms_condition" value="terms" checked> I accept with the <a target="_blank" href="{{ URL::to('product_listing_policy',null,is_secured()) }}">terms and conditions.</a>
                           <p class="term_condition_error hidden_icon" style="margin-top: 4px;padding: 2px 4px;font-size: 12px;color: #333;border: 1px solid #ffd4d2;background-color: #ffefee;"><i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i> Please accept the terms and conditions.</p>
                     </div>
                  </div>

               </div>

            </div>


         </div>
         <br>
         <br>
         <div class="col-xs-12 bg-info" style="padding:1%;text-align: center;">
            <input type="submit" class="btn btn-primary btn-lg btn-join product_create_submit_btn" value="Save">
            <a class="btn btn-primary btn-lg btn-join" href="{!! URL::to('dashboard/product') !!}">Cancel</a>
         </div>

         {!! Form::close() !!}
      </div>

      <div class="col-md-2">

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
                  @foreach($pages as $page)
                  @if($page->prefix == 'BuyerChannel' )


                  <li class="navigation-menu-list-li" style="padding: 5px;"><a itemprop="url" href="{{ URL::to($page->prefix.'/pages/'.$page->sort_name,$page->id,is_secured())}}" class="navigation-menu-list-li-a">{{ $page->name }}</a></li>

                  @endif
                  @endforeach


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
                  @foreach($pages as $page)
                  @if($page->prefix == 'SupplierChannel' )
                  <li class="navigation-menu-list-li" style="    padding: 5px;"><a itemprop="url" href="{{ URL::to($page->prefix.'/pages/'.$page->sort_name,$page->id,is_secured())}}" class="navigation-menu-list-li-a">{{ $page->name }}</a></li>
                  @endif
                  @endforeach

               </ul>

            </div>
         </div>
      </div>
   </div>
   <br>
   <br>
@stop
@section('scripts')
@include('frontend.layouts.dashboard_aside_scripts')
<script src="{{asset('assets/global/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!-- <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script> -->
<script type="text/javascript">
	$(document).ready(function() {
	   $('.loader').fadeOut('slow');
	});

	(function() {
	   function ajax_success_message(str) {
	      $('#ajax_status').html(str).fadeOut(1500, function() {
	         $('#ajax_status').addClass('hide_this');
	      });
	   }

	   /************* CHANGE SUB-CATEGORY *************/
	   $(document).on({
	      change: function() {
	         var id = $(this).val();
	         if (parseInt(id) == 0) {
	            $('.parent_cat_error').show();
	            $('.sub_cat_error').show();
	         } else {
	            $('.parent_cat_error').hide();
	         }
	         var url = $('[name="base_url"]').val() + "/get_sub_category/" + id;
	         var template = "<option value='0'>Select a sub category</option>";
	         $.get(url).done(function(r) {
	            $.each(r, function(i, v) {
	               if (id == 0) {
	                  template += '';
	               } else {
	                  template += "<option value=" + v.id + ">" + $.trim(v.name) + "</option>";
	               }
	            });
	            $('[name="sub_category"]').html(template);
	         })
	      }
	   }, '[name="parent_category"]');

	   $(document).on({
	      change: function() {
	         var id = $(this).val();
	         if (parseInt(id) == 0) {
	            $('.sub_cat_error').show();
	         } else {
	            $('.sub_cat_error').hide();
	            if (id == 500) {
	               $('.model_hs').text('HS');
	            } else {
	               $('.model_hs').text('Model');
	            }
	         }
	      }
	   }, '[name="sub_category"]');
	   /************* CHANGE SUB-CATEGORY END *************/

	   /*************PRODUCT ATTRIBUTES ADD *************/
	   $(document).on({
	      click: function(e) {
	         e.preventDefault();
	         var target_area, data_template, prev_name, prev_value;
	         prev_name = $(this).closest('tr').find('[name="product_att_name[]"]').val();
	         prev_value = $(this).closest('tr').find('[name="product_att_value[]"]').val();
	         data_template = '<tr>\
	                                        <td>Name:</td>\
	                                        <td><input style="height:27px;padding-bottom:1%;font-size:12px" type="text" name="product_att_name[]" class="form-control" min="1" max="200" minlength="1" maxlength="200"></td>\
	                                        <td>Value:</td>\
	                                        <td><input style="height:27px;padding-bottom:1%;font-size:12px" type="text" name="product_att_value[]" class="form-control" min="2" max="200" minlength="2" maxlength="200"></td>\
	                                        <td> <button class="btn btn-danger btn-xs remove_attributes"><i class="fa fa-minus" style="padding:2px;"></i></button> </td>\
	                                    </tr>';
	         (prev_name.length > 0 && prev_value.length > 0) ? $('.copied_template').append(data_template): alert('Please fill attribute name and value first');
	      }
	   }, '.add_more_attribute_btn');
	   /*************PRODUCT ATTRIBUTES ADD end*************/

	   /*************ADD PRICE MOQ && FOB *************/
	   $(document).on({
	      click: function(e) {
	         template = '<tr>\
	                                        <input type="hidden" name="product_price_id[]" value="0">\
	                                        <td>MOQ: <span></span></td>\
	                                        <td>\
	                                            <input style="height:27px;padding-bottom:1%;font-size:12px" type="text" name="product_MOQ[]" value="" class="form-control">\
	                                        </td>\
	                                         <td> FOB Price: </td>\
	                                         <td>\
	                                            <input style="height:27px;padding-bottom:1%;font-size:12px;width:100px;" type="text" name="product_FOB_from[]" placeholder="From" class="form-control check_number">\
	                                        </td>\
	                                        <td style="text-align:center;">-</td>\
	                                        <td>\
	                                            <input style="height:27px;padding-bottom:1%;font-size:12px;width:100px;" type="text" name="product_FOB_to[]" class="form-control check_number" placeholder="To">\
	                                        </td>\
	                                        <td><i class="fa fa-plus btn btn-xs btn-primary add_price_btn"></i> <i class="fa fa-minus btn btn-xs btn-danger remove_attributes"></i></td>\
	                                    </tr>';
	         $(this).closest('tbody').append(template);

	      }
	   }, '.add_price_btn');
	   /*************ADD PRICE MOQ && FOB *************/

	   $(document).on({
	      click: function(e) {
	         e.preventDefault();
	         var deleted_attr_id = $(this).attr('deleted_attr_id');
	         // alert (deleted_attr_id);
	         if (deleted_attr_id != 'undefined') {
	            if ($(this).attr('check_btn') == 'attribute') {
	               $(this).parent().parent().parent().parent().append('<input type="hidden" name="deleted_attr_id[]" value="' + deleted_attr_id + '">');
	            } else if ($(this).attr('check_btn') == 'trade') {
	               $(this).parent().parent().parent().parent().append('<input type="hidden" name="deleted_trade_id[]" value="' + deleted_attr_id + '">');
	            }
	         }
	         $(this).closest('tr').remove();
	      }
	   }, '.remove_attributes');

	   /*************PRODUCT GROUP FORM OPENER*************/
	   $(document).on({
	      click: function() {
	         $('.add_group_name_form_area').show(300)
	      }
	   }, '.group_name_form_opener');

	   /*************PRODUCT GROUP FORM REMOVER*************/
	   $(document).on({
	      click: function(e) {
	         e.preventDefault();
	         $('.add_group_name_form_area').hide(300)
	      }
	   }, '.group_name_from_remover');

	   /*************PRODUCT GROUP FORM SUBMIT*************/
	   $(document).on({
	      click: function(e) {
	         e.preventDefault();
	         var url = window.location.origin + "/add_product_group/" + $("[name='add_group_name[]']:first").val();
	         $('.group_name_from_remover').click();
	         $.get(url, function(r) {
	            $('.table select[name="product_groups"]:first').append("<option value='" + r.id + "'>" + r.name + "</option>");
	         });
	      }
	   }, '.product_group_submit_btn');


	   /*************FORM VALIDATION *************/
	   $(document).on({
	      blur: function() {
	         var relative_row = $(this).parent().parent();
	         if (!$.trim(this.value).length) {
	            $(this).attr('validation', 'validated_false');
	            relative_row.find('.validated_true').hide(500);
	            relative_row.find('.validated_false').show(500);
	            relative_row.find('.empty_error').show(500);
	         } else {
	            $(this).attr('validation', 'validated_true');
	            relative_row.find('.empty_error').hide(500);
	            relative_row.find('.validated_false').hide(500);
	            relative_row.find('.validated_true').show(500);
	            $(this).attr('style', "border:1px solid #e5e5e5");
	         }
	         return;
	      }
	   }, '.validate');

	   $(document).on({
	      blur: function() {
	         var relative_row = $(this).parent().parent();
	         if ($(this).val() == 0) {
	            $(this).attr('validation', 'validated_false');
	            relative_row.find('.validated_true').hide(500);
	            relative_row.find('.validated_false').show(500);
	            relative_row.find('.empty_error').show(500);
	         } else {
	            $(this).attr('validation', 'validated_true');
	            relative_row.find('.empty_error').hide(500);
	            relative_row.find('.validated_false').hide(500);
	            relative_row.find('.validated_true').show(500);
	            $(this).attr('style', "border:1px solid #e5e5e5");
	         }
	         return;
	      }
	   }, '.validate_place_origin');

	   $(document).on({
	      click: function(e) {
	         if ($('[name="terms_condition"]').prop('checked') == true) {
	            $('[name="terms_condition"]').css('box-shadow', '');
	            $('[name="terms_condition"]').parent().css('color', 'inherit');
	            $('.term_condition_error').hide();
	         } else {
	            $('[name="terms_condition"]').focus();
	            $('[name="terms_condition"]').css('box-shadow', '0px 0px 3px 1px red');
	            $('[name="terms_condition"]').parent().css('color', 'red');
	            $('.term_condition_error').show();
	         }
	      }
	   }, '[name="terms_condition"]');

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
	         if (parseInt(integer) > 100000 || parseInt(integer) === 100000 && parseInt(decPlaces) > 0) {
	            integer = "100000";
	            decPlaces = getZeroedDecPlaces(decPlaces);
	            alert("number must be between 0.00 and 100000.00");
	         } // ...and less than 0:
	         else if (parseInt(integer) < 0) {
	            integer = "0";
	            decPlaces = getZeroedDecPlaces(decPlaces);
	            alert("number must be between 0.00 and 100000.00");
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



	   /*************PRODUCT IMAGE UPLOAD *************/

	   var img_id_no = 1;
	   $(document).on({
	      change: function() {

	         var template, size = "",
	            name = "",
	            type = "",
	            src = "",
	            reader, animation, animation_end, img_file;

	         if (this.files && this.files[0]) {

	            name = this.files[0].name;
	            type = this.files[0].type;
	            size = this.files[0].size;
	            img_file = this.files[0];
	            $('.image_attachment_error').hide();

	            if ($('.img_container').length >= 6) {
	               $('.img_' + img_id_no).val('');
	               $('.image_attachment_error span').text('Maximum six product images are allowed. Delete product(s) to add more');
	               $('.image_attachment_error').show();
	            } else if (type == 'image/jpeg' || type == 'image/png') {
	               if (size > 2097152) {
	                  $('.img_' + img_id_no).val('');
	                  $('.image_attachment_error span').text('Maximum file size 2MB.');
	                  $('.image_attachment_error').show();
	               } else {
	                  reader = new FileReader();
	                  animation = "animated flip";
	                  animation_end = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
	                  reader.readAsDataURL(img_file);
	                  reader.onload = function(e) {
	                     src = e.target.result;
	                     template = '<div style="border-right: 1px solid #ddd" class="col-sm-3 img_container">\
			                                    <div class="col-xs-12 text-center" style="margin-bottom: 1%">\
			                                        <i class="fa fa-remove btn btn-xs btn-danger remove_img" data-img_target="img_' + img_id_no + '"></i>\
			                                    </div>\
			                                    <div class="col-xs-12">\
			                                        <img src="' + src + '" alt="" class="img-responsive" style="height:102px;width:100%">\
			                                    </div>\
			                                    <div class="col-xs-12" style="padding-top: 2%">\
			                                        <p class="img_details">Name: <span class="text-muted img_name">' + name + '</span></p>\
			                                        <p class="img_details">Size: <span class="text-muted img_size">' + size + '</span></p>\
			                                        <p class="img_details">Type: <span class="text-muted img_type">' + type + '</span></p>\
			                                    </div>\
			                                </div>';
	                     $('.img_preview').append(template);
	                     $('.image_required_error').hide();
	                     $('.img_' + img_id_no).hide();
	                     img_id_no++;
	                     $('.image_container').append('<input type="file" name="product_images[]" class="p_add_img img_' + img_id_no + '">');
	                  }
	               }
	            } else {
	               $('.img_' + img_id_no).val('');
	               $('.image_attachment_error span').text('Only jpg or png files are allowed.');
	               $('.image_attachment_error').show();
	            }
	         }

	      }
	   }, '.p_add_img');

	   /*************PRODUCT IMAGE REMOVE *************/

	   $(document).on({
	      click: function(e) {
	         var target_img_class = $(this).attr('data-img_target');
	         $('.' + target_img_class).remove();
	         $(this).closest('.img_container').remove();
	      }
	   }, '.remove_img');

	   $(document).on({
	      change: function() {
	         if ($(this).val() == 0) {
	            $(this).attr('validation', 'validated_false');
	            $('.place_origin_error').show();
	         } else {
	            $(this).attr('validation', 'validated_true');
	            $('.place_origin_error').hide();
	         }
	      }
	   }, '[name="country"]');

	   /************* ERROR SHOW HIDE ****************/
	   function hide_error() {
	      $('.backend_error').hide();
	   }

	   /*************PRODUCT FORM SUBMIT*************/
	   $(document).on({
	      click: function(e) {
	         e.preventDefault();
	         var product_name_val = $.trim($('[name="product_name"]').val());
	         var parent_cat_id = $('[name="parent_category"]').val();
	         var sub_cat_id = $('[name="sub_category"]').val();
	         $('.validate[validation="validated_true"]').attr('style', "border:1px solid #e5e5e5");
	         if (product_name_val == '') {
	            $('[name="product_name"]').attr('style', "border:1px solid red");
	            $('[name="product_name"]').focus();
	            $('[name="product_name"]').parent().children('.empty_error').show();
	         } else if (parent_cat_id == 0) {
	            $('[name="parent_category"]').focus();
	            $('.parent_cat_error').show();
	         } else if (sub_cat_id == 0) {
	            $('.parent_cat_error').hide();
	            $('[name="sub_category"]').focus();
	            $('.sub_cat_error').show();
	         } else if ($('.img_container').length == 0) {
	            $('.sub_cat_error').hide();
	            $('.img_1').focus();
	            $('.image_required_error').show();
	         } else if ($('[name="country"]').val() == 0) {
	            $('.image_required_error').hide();
	            $('[name="country"]').focus();
	            $('.place_origin_error').show();
	         } else if ($('[name="product_groups"]').val() == null || $('[name="product_groups"]').val() == 'undefined' || $('[name="product_groups"]').val() == 0) {
	            $('.place_origin_error').hide();
	            $('[name="product_groups"]').focus();
	            $('.product_group_error').show();
	         } else if (CKEDITOR.instances.editor.getData() == '') {
	            $('.product_group_error').hide();
	            $('.cke_wysiwyg_frame').css('border', '1px solid red');
	            $('[name="product_description"]').parent().children('.empty_error').show();
	         } else if ($('.validate[validation="validated_false"]').length > 0) {
	            $('[name="product_description"]').parent().children('.empty_error').hide();
	            $('.cke_wysiwyg_frame').css('border', '1px solid #d1d1d1');
	            $('.validate[validation="validated_false"]').attr('style', "border:1px solid red");
	            $('.validate[validation="validated_false"]').focus();
	         } else if ($('[name="terms_condition"]').prop('checked') == false) {
	            $('[name="terms_condition"]').focus();
	            $('[name="terms_condition"]').parent().css('color', 'red');
	            $('.term_condition_error').show();
	         } else if (parseInt(parent_cat_id) != 0 && parseInt(sub_cat_id) != 0) {
	            $('.term_condition_error').hide();
	            $('[name="terms_condition"]').parent().css('color', 'inherit');
	            if ($('[name="terms_condition"]').prop('checked') == true) {
	               $('.product_info_form').submit();
	            } else {
	               alert("You must accept the terms and conditions.");
	            }
	         } else {
	            $('.backend_error').html('* Please Select a parent category and a sub-category first');
	            window.scrollTo(0, 0);
	            $('.backend_error').show();
	            // setTimeout(hide_error, 9000);
	         }
	      }
	   }, '.product_create_submit_btn');




	   $('.hidden_icon').hide();
	   $('.add_group_name_form_area').hide();

	   CKEDITOR.replace('editor', {
	      extraPlugins: 'uploadimage,image2',
	      height: 300,

	      // Upload images to a CKFinder connector (note that the response type is set to JSON).
	      uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

	      // Configure your file manager integration. This example uses CKFinder 3 for PHP.
	      filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
	      filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
	      filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
	      filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

	      // The following options are not necessary and are used here for presentation purposes only.
	      // They configure the Styles drop-down list and widgets to use classes.

	      stylesSet: [{
	            name: 'Narrow image',
	            type: 'widget',
	            widget: 'image',
	            attributes: {
	               'class': 'image-narrow'
	            }
	         },
	         {
	            name: 'Wide image',
	            type: 'widget',
	            widget: 'image',
	            attributes: {
	               'class': 'image-wide'
	            }
	         }
	      ],

	      // Load the default contents.css file plus customizations for this sample.
	      contentsCss: [CKEDITOR.basePath + 'contents.css', 'assets/css/widgetstyles.css'],

	      // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
	      // resizer (because image size is controlled by widget styles or the image takes maximum
	      // 100% of the editor width).
	      image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
	      image2_disableResizer: true



	   });


	   /*$('.product_desc').jqte();
	   // settings of status
	   var jqteStatus = true;
	   $(".status").click(function(){
	   	jqteStatus = jqteStatus ? false : true;
	   	$('.jqte-test').jqte({"status" : jqteStatus})
	   });*/

	   $('[name="base"]').click(function() {
	      if ($(this).val() == 'based_FOB') {
	         $('.quantity_base').hide(300);
	         $('.FOB_base').show(500);
	         // $('[name="product_MOQ[]"]').removeAttr('validation','validated_false');
	         // $('[name="product_FOB[]"]').removeAttr('validation','validated_false');
	         // $('[name="currency_from[]"]').attr('validation','validated_false');
	         // $('[name="currency_to[]"]').attr('validation','validated_false');
	         // $('[name="product_MOQ_FOB[]"]').attr('validation','validated_false');
	      } else {
	         $('.quantity_base').show(500);
	         $('.FOB_base').hide(300);
	         // $('[name="product_MOQ[]"]').attr('validation','validated_false');
	         // $('[name="product_FOB[]"]').attr('validation','validated_false');
	         // $('[name="currency_from[]"]').removeAttr('validation','validated_false');
	         // $('[name="currency_to[]"]').removeAttr('validation','validated_false');
	         // $('[name="product_MOQ_FOB[]"]').removeAttr('validation','validated_false');
	      }
	   });

	   $('[value="others"]').click(function() {
	      if ($('[value="others"]').is(':checked')) {
	         //if($('[value="others"]').checked){
	         $('#others_area').show(500);
	      } else {
	         $('#others_area').hide(300);
	      }
	   });

	   $('[name="is_limited_time_offer"]').click(function() {
	      if ($('[name="is_limited_time_offer"]').is(':checked')) {
	         //if($('[value="others"]').checked){
	         $('.limited_offer_div').show(500);
	      } else {
	         $('.limited_offer_div').hide(300);
	      }
	   });

	   /************** JQueryUI Datepicker ***************/
	   $("#dpd1").datepicker({
	      altField: "#actualDate",
	      altFormat: '@',
	      dateFormat: "yy-mm-dd",
	      timeFormat: "hh:mm:ss",
	      defaultDate: "+1w",
	      changeMonth: true,
	      changeYear: true,
	      onClose: function(selectedDate) {
	         $("#dpd2").datepicker("option", "minDate", selectedDate);
	      }
	   });
	   $("#dpd2").datepicker({
	      altField: "#actualDate",
	      altFormat: '@',
	      dateFormat: "yy-mm-dd",
	      timeFormat: "hh:mm:ss",
	      defaultDate: "+1w",
	      changeMonth: true,
	      changeYear: true,
	      onClose: function(selectedDate) {
	         $("#dpd1").datepicker("option", "maxDate", selectedDate);
	      }
	   });
	   //    $('#dpd1').datetimepicker({
	   // 	timeFormat: "hh:mm tt"
	   // });
	   // $('#dpd2').datetimepicker({
	   // 	timeFormat: "hh:mm tt"
	   // });




	})()
</script>

@stop

