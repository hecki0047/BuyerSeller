<h3 style="margin-top:2%;font-weight:bold;font-size: 22px;padding-left:4%" class="page-title">
   Wholesale Product Create <small>create &amp; edit wholesale product</small>
</h3>

<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
   <div style="padding-bottom:2%;padding: 1% 5% 5% 5%;" class="col-md-12">

      {!! Form::open(array('url' => 'supplier/wholesale_product_create', 'method' => 'post', 'enctype'=>'multipart/form-data', 'accept-charset'=>'UTF-8', 'class'=>'form-horizontal form-row-seperated product_info_form')) !!}
      <!-- <form action="{{ URL::to('supplier/wholesale_product_create',null,is_secured()) }}" method="post" enctype="multipart/form-data" accept-charset="UTF-8" class="form-horizontal  form-row-seperated product_info_form"> -->


      <ul class="nav nav-tabs product_create_tab" role="tablist">
         <li class="active"><a data-toggle="tab" href="#product_details_tab_content">Product Details</a></li>
         <li><a data-toggle="tab" href="#product_image_tab_content">Product Image</a></li>
      </ul>

      <div class="tab-content">
         <!-------------PRODUCT-DETAILS-TAB-CONTENT;------------------>
         <div id="product_details_tab_content" class="tab-pane fade in active">
            <h4>Product-details</h4>
            <div class="row margin_top1">
               <div style="text-align:right;padding-right:0px" class="col-md-2">
                  <span>Product Name:</span>
               </div>
               <div class="col-md-4">
                  <input style="height:27px;padding-bottom:1%;font-size:12px" type="text" name="product_name[]" validation="validated_false" class="form-control validate" placeholder="Product Name">
               </div>
               <div class="col-xs-3 validation_status">
                  <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
                  <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
                  <span class="text-danger validation_message"></span>
               </div>
            </div>
            <div class="row margin_top1">
               <div style="text-align:right;padding-right:0px" class="col-md-2">
                  <span>Category:</span>
               </div>
               <div class="col-md-7">
                  <table class="table">
                     <tbody>
                        <tr>
                           <td><b>Parent: </b></td>
                           <td>

                              <select name="parent_category[]" class="form-control" style="height:29px;padding-bottom:0%;padding-top:0px;font-size:12px">
                                 <option value="0">----Please Select----</option>
                                 @foreach(\App\Models\Categories::where('parent_id',0)->get() as $v)
                                 <option value="{{ $v->id }}">{{ $v->name }}</option>
                                 @endforeach
                              </select>
                           </td>
                           <td><b>Sub: </b></td>
                           <td>
                              <select name="sub_category[]" class="form-control">
                                 <option value="0">Seleet a sub category</option>
                              </select>
                           </td>
                        </tr>
                     </tbody>
                  </table>
                  <span class="help-block">select only one category </span>
               </div>
            </div>
            <div class="row margin_top1">
               <div style="text-align:right;padding-right:0px" class="col-md-3">
                  <label for="">Meta Keyword:</label>
               </div>
               <div class="col-md-4">
                  <textarea class="form-control maxlength-handler validate" validation="validated_false" name="product_meta_keywords[]" maxlength="255"></textarea>
               </div>
               <div class="col-xs-3 validation_status">
                  <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
                  <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
                  <span class="text-danger validation_message"></span>
               </div>
            </div>
            <div class="row margin_top1">
               <div style="text-align:right;padding-right:0px" class="col-md-2">
                  <label for="">Model: </label>
               </div>
               <div class="col-md-4">
                  <input style="height:27px;padding-bottom:1%;font-size:12px" type="text" name="product_model[]" validation="validated_false" class="form-control validate" placeholder="Model">
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
                  <input style="height:27px;padding-bottom:1%;font-size:12px" type="text" name="brand_name[]" validation="validated_false" class="form-control validate">
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
                  {!! Form::select('country[]',\App\Models\Country::lists('name','id'), '',array('class'=>'form-control validate','validation'=>'validated_false','style'=>'height:29px;padding-bottom:1%;padding-top:0px;font-size:12px')) !!}
               </div>
               <div class="col-xs-3 validation_status">
                  <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
                  <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
                  <span class="text-danger validation_message"></span>
               </div>
            </div>
            <div class="row attribute_area margin_top1">
               <div style="text-align:right;padding-right:0px;margin-top:2%" class="col-md-2">
                  <label for="">Attributes: </label>
               </div>
               <div class="col-md-8" style="padding-top: 1%;">
                  <table class="table">
                     <tbody class="copied_template">
                        <tr>
                           <td>Name:</td>
                           <td><input style="height:27px;padding-bottom:1%;font-size:12px" type="text" name="product_att_name[]" class="form-control"></td>
                           <td>Value:</td>
                           <td><input style="height:27px;padding-bottom:1%;font-size:12px" type="text" name="product_att_value[]" class="form-control"></td>
                           <td> <button class="btn btn-primary btn-xs add_more_attribute_btn"><i class="fa fa-plus"></i></button> </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="row attribute_area margin_top1">
               <div style="text-align:right;padding-right:0px;margin-top:2%" class="col-md-2">
                  <label for="">Trade Details: </label>
               </div>
               <div class="col-md-7">
                  <table class="table">
                     <tbody>
                        <tr>
                           <td style="width:18%">Unit Type: </td>
                           <td>
                              <select style="height:28px;padding-bottom:1%;font-size:12px;padding-top:0%;width: 100px;" class="form-control" name="unit_type[]" id="sel1">
                                 @foreach($units as $u)
                                 <option value={!! $u->id !!}>{!! $u->name !!}</option>
                                 @endforeach
                              </select>
                           </td>
                        </tr>
                        <tr>
                           <td>MOQ: <span></span></td>
                           <td><input style="height:27px;padding-bottom:1%;font-size:12px;width: 100px;" type="text" name="product_MOQ[]" validation="validated_false" class="form-control validate"></td>
                           <!-- <td><div class="col-xs-3 validation_status">
				                            <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
				                            <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
				                            <span class="text-danger validation_message"></span>
				                        </div></td> -->

                           <td>Wholesale Price: </td>
                           <td>
                              <input style="height:27px;padding-bottom:1%;font-size:12px;width: 100px;" type="text" name="product_FOB[]" validation="validated_false" class="form-control validate">
                           </td>
                           <!-- <td>
			      							<div class="col-xs-3 validation_status">
					                            <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
					                            <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
					                            <span class="text-danger validation_message"></span>
				                        	</div>
				                        </td> -->
                           <td>Discounted Price: </td>
                           <td>
                              <input style="height:27px;padding-bottom:1%;font-size:12px;width: 100px;" type="text" name="discounted_Price[]" validation="validated_false" class="form-control validate">
                           </td>
                           <td><i class="fa fa-plus btn btn-xs btn-primary add_price_btn_discount"></i></td>
                           <td>
                              <div class="col-xs-3 validation_status">
                                 <i class="fa fa-check-square btn btn-sm btn-success hidden_icon validated_true"></i>
                                 <i class="fa fa-exclamation-triangle btn btn-sm btn-danger hidden_icon validated_false"></i>
                                 <span class="text-danger validation_message"></span>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="row attribute_area margin_top1">
               <div style="padding-right:0px;margin-top:2%" class="col-md-12">
                  <label for="">Product Group: <span class="summary">Grouping your products makes it easier for buyers to find them</span></label>
               </div>
               <div class="col-md-7">
                  <table class="table">
                     <tbody>
                        <tr>
                           <td align="right">Group Name:</td>
                           <td>
                              <select style="height:28px;padding-bottom:1%;font-size:12px;padding-top:0%" class="form-control" name="product_groups[]" id="sel1">
                                 @foreach($product_groups as $u)
                                 <option value="{!! $u->id !!}">{!! $u->name !!}</option>
                                 @endforeach
                              </select>

                           </td>
                           <td>
                              <span class="group_name_form_opener"> <i style="font-size: 25px;color: #19446F;" class="btn btn-xs fa fa-plus-square"></i></span>
                           </td>
                        </tr>

                     </tbody>
                  </table>
               </div>
               <div class="col-md-5 add_group_name_form_area" style="border:1px solid #ddd;padding:1%">
                  <div class="col-md-10">
                     <input type="text" name="add_group_name[]" placeholder="Group Name" class="form-control" style="height:30px;font-size:12px;margin-bottom: 1%">
                     <a href="" class="btn btn-success btn-sm product_group_submit_btn">Save</a>
                  </div>
                  <div class="col-md-2 text-right" style="margin-bottom: 2%">
                     <a class="btn btn-xs btn-danger group_name_from_remover" href=""><i class="fa fa-remove"></i></a>
                  </div>
                  </form>
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
                           <label><input class="" type="checkbox" name="payment[]" value="Bkash">Bkash</label>
                           <label><input class="" type="checkbox" name="payment[]" value="Paypal">Paypal</label>
                           <label><input class="" type="checkbox" name="payment[]" value="DBBL">DBBL</label>
                           <label><input class="" type="checkbox" name="payment[]" value="Western Union">Western Union</label>
                        </li>
                     </ul>
                  </div>
                  <span class="help-block">
                     select one or more options </span>
               </div>
            </div>
            <div class="row margin_top1">
               <div style="text-align:right;padding-right:0px;margin-top:3%" class="col-md-2">
                  <label for="">Product Details: </label>
               </div>
               <div class="col-md-7">
                  <textarea class="form-control product_desc" name="product_description[]"></textarea>
               </div>
            </div>

         </div>

         <!-------------PRODUCT-IMAGE-TAB-CONTENT;------------------>
         <div id="product_image_tab_content" class="tab-pane fade">
            <h4>Product Image</h4>
            <input style="height:27px;padding-bottom:3.8%;padding-top:.5% ; font-size:12px;width:86px" type="file" name="image" class="btn btn-danger btn-xs p_create_img" id="p_img">
            <div class="loading">

            </div>
            <div class="hidden_img_name_field">

            </div>
            <div class="col-xs-12 img_preview" style="border:1px solid #ddd;margin-top:1%;padding:1%">
               <!----PREVIEW IMAGE HANDELED BY JAVASCRIPT--------- -->

            </div>
         </div>
      </div>
      <div class="col-xs-12 bg-info text-center" style="padding:1%;margin-bottom:2%;margin-top:4%">
         <input type="submit" class="btn btn-primary btn-lg btn-join product_create_submit_btn" value="Save">
      </div>

      {!! Form::close() !!}
   </div>
</div>

<script type="text/javascript">
	(function(){
	
		$('.hidden_icon').hide();
		$('.add_group_name_form_area').hide();
		$('.product_desc').jqte();
		// settings of status
		var jqteStatus = true;
		$(".status").click(function(){
			jqteStatus = jqteStatus ? false : true;
			$('.jqte-test').jqte({"status" : jqteStatus})
		});
		
	})()
</script>

