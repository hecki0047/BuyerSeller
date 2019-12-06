@extends('fontend.master_dynamic')
@section('content')
<div class="row padding_0">
   <div class="col-sm-12 col-md-12 col-lg-12">
      <ul class="top-path" style="padding-bottom: 8px;">
         <li class="top-path-li"><a href="http://www.bditdc.com" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
         <li class="top-path-li"><a href="http://www.bditdc.com/FooterPage/pages/Help_Center/19" class="top-path-li-a">BuyerSeller<i class="fa fa-angle-right top-path-icon"></i></a></li>
         <li class="top-path-li"><a href="http://www.bditdc.com/BuyerChannel/pages/trade_assurance/5" class="top-path-li-a">Buyer contact<i class="fa fa-angle-right top-path-icon"></i></a></li>

      </ul>
   </div>
   <div class="col-sm-12 col-md-12 col-lg-12 padding_0">
      <div class="bao-step">
         <div class="ui2-step">
            <ul class="ui2-step-5">
               <li class="ui2-step-curr">
                  <span>Start Order</span>
               </li>
               <li class="ui2-step-undone">
                  <span>Confirm Order</span>
               </li>
               <li class="ui2-step-undone">
                  <span>Payment</span>
               </li>
               <li class="ui2-step-undone">
                  <span>Shipment</span>
               </li>
               <li class="ui2-step-undone last">
                  <span>Confirm Receipt</span>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div class="col-sm-12 col-md-12 padding_0">
      <div class="info-block info-seller">
         <h3 class="info-block-title">Supplier’s Information</h3>
         <div class="info-block-extra">
            <i class="ui2-icon ui2-icon-remind"></i>

         </div>
         <div class="info-block-body">
            <div class="info-table info-table-narrow">
               <div class="info-row">
                  <div class="info-cell info-cell-title">Company Name:</div>
                  <div class="info-cell info-cell-text info-cell-w50p">Guangzhou City BFE Trading Co., Ltd.</div>
                  <div class="info-cell info-cell-title">Tel:</div>
                  <div class="info-cell info-cell-text info-cell-w50p">+86&nbsp;&nbsp;020&nbsp;&nbsp;13544470451</div>
               </div>
               <div class="info-row">
                  <div class="info-cell info-cell-title">Country/Region:</div>
                  <div class="info-cell info-cell-text info-cell-w50p">China (Mainland)&nbsp;&nbsp;Guangdong&nbsp;&nbsp;Guangzhou</div>
                  <div class="info-cell info-cell-title">Mobile:</div>
                  <div class="info-cell info-cell-text info-cell-w50p"></div>
               </div>
               <div class="info-row">
                  <div class="info-cell info-cell-title">Email:</div>
                  <div class="info-cell info-cell-text info-cell-w50p">bfecorpalisale@163.com</div>
                  <div class="info-cell info-cell-title"></div>
                  <div class="info-cell info-cell-text info-cell-w50p"></div>
               </div>
            </div>
         </div>
      </div>

   </div>
   <div class="col-sm-12 col-md-12 col-lg-12 padding_0">
      <h3 class="info-block-title">product Details</h3>
      <div class="col-sm-12 col-md-12 info-block-body" style="background: #fff; padding: 15px 0;width: 928px; border:1px solid #e5e5e5;">
         <div id="create-product-list" style="padding: 0;">
            <div class="create-product">
               <div class="create-pro-1">
                  <div class="create-pro-2">
                     <span class="create-pro-3">NO. 1</span>
                  </div>
                  <div class="delete-pro-1">
                     <span class="delete-confirm-btt"><a href="#">Delete</a></span>
                  </div>
               </div>
               <div class="info-product-item-body">

                  <div class="info-product-item-left">
                     <img class="info-product-item-img" src="{!! asset('assets/fontend/bdtdc-images/product-chair-1.jpg',is_secured()) !!}" alt="chair">
                     <div class="info-product-item-name">
                        <a href="#">
                           Convenient Clothes Hanger Metal Tube Simply Constructed Space Saving
                        </a>
                     </div>
                  </div>
                  <div class="info-product-item-right">
                     <table class="info-table">
                        <tbody>
                           <tr>
                              <td class="info-cell info-cell-title"><span class="ui2-form-required">* </span>Unit Price: </td>
                              <td class="info-cell info-cell-title">US $<input type="text" value="19.9" name="price" class="input-td-text"></td>
                              <td class="info-cell info-cell-title"><span class="ui2-form-required">* </span> Quantity:</td>
                              <td class="info-cell info-cell-title"><input type="text" value="2" name="price" class="input-td-text"></td>
                           </tr>
                           <tr>
                              <td class="info-cell info-cell-title"><span class="ui2-form-required">* </span>Unit: </td>
                              <td class="info-cell info-cell-title">
                                 <div class="input-option" onclick="toggle_visibility('unit-p')">
                                    Prices(s)
                                    <div class="ui2-price">
                                       <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>

                                 </div>
                                 <div class="input-option" id="unit-p">
                                    <ul class="option-choice">
                                       <li style="padding-left: 0;width: 110px; overflow: hidden; border:1px solid #e5e5e5;"><input type="text" name="unit" value=""></li>
                                       <li>Prices</li>
                                       <li>Sets</li>
                                       <li>package</li>
                                       <li>Prices</li>
                                       <li>Sets</li>
                                       <li>package</li>
                                       <li>Prices</li>
                                       <li>Sets</li>
                                       <li>package</li>
                                       <li>Prices</li>
                                       <li>Sets</li>
                                       <li>package</li>

                                    </ul>
                                 </div>

                              </td>

                              <td class="info-cell info-cell-title"><span class="ui2-form-required">* </span>Amount</td>
                              <td class="info-cell info-cell-title">US $ 39.80</td>
                           </tr>
                           <tr>
                              <td class="info-cell info-cell-title"><span class="ui2-form-required">* </span>Product Description: </td>
                              <td class="info-cell info-cell-title"><input type="text" maxlength="1500" value="" name="descrip" style="width: 200%;"></td>

                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div> <!-- end product -->
            </div>
            <!-- ends parents div -->
         </div>
         <div class="click-add" style="width:80%;">
            <button bd-click="" class="ui2-button" type="button" style="margin-top: 20px; background: #255E98; color: #fff; border-radius: 4px !important;">
               Add Product from Minisite
            </button>
            <button id="new-product" onClick="addRect();" class="ui2-button" type="button" style="margin-top: 20px; background: #ffffff; color: #666; border-radius: 4px !important;">
               Add New Product
            </button>
            <button bd-click="" class="ui2-button" type="button" style="margin-top: 20px; background: #ffffff; color: #255E98; border-radius: 4px !important; border: 0 none;">
               Upload Attachment
            </button>
         </div>
      </div>
      <!-- product addd end -->


   </div>
   <div class="col-sm-12 col-md-12 col-lg-12 padding_0">
      <h3 class="info-block-title">Payment Details</h3>
      <div class="col-sm-12 col-md-12 info-block-body" style="background: #fff; padding: 15px 0;width: 928px; border:1px solid #e5e5e5;">
         <div class="col-sm-6 col-md-6 padding_0" style="background: #fff; width: 50%;">
            <table class="table">
               <tbody>
                  <tr>
                     <td style="text-align: right; width: 50%">*Initial Payment:US $ </td>
                     <td style="text-align: right; width: 50%">39.80</td>
                  </tr>
                  <tr>
                     <td style="text-align: right;width: 50%">Balance Payment: US $ </td>
                     <td style="text-align: right;width: 50%">00.00</td>
                  </tr>
                  <tr>
                     <td style="text-align: right;width: 50%">Total Order Amount: <span class="info-highlight">US $</span> </td>
                     <td style="text-align: right;width: 50%"><span class="info-highlight">39.80</span></td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="col-sm-6 col-md-6 padding_0" style="background: #fff; width:50%;">

         </div>
      </div>
   </div>
   <div class="col-sm-12 col-md-12 col-lg-12 padding_0">
      <h3 class="info-block-title">Shipping Address</h3>
      <div class="col-sm-12 col-md-12 info-block-body" style="background: #fff; padding: 15px 0;width: 928px; border:1px solid #e5e5e5;">
         <div class="col-sm-8 col-md-8 padding_0" style="background: #fff; width: 66%;">
            <div class="ship-address">
               <i class="fa fa-circle-o-notch" aria-hidden="true" style="color: #9BD2F5; display: block; padding-right: 12px; float: left; margin-top: 3px;"></i>
               The address shown below is valid only if the shipping method is express
            </div>
            <div>
               <div class="click-add">
                  <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">
                     <button bd-click="" class="ui2-button" type="button">
                        Add a New Address
                     </button>
                  </a>
               </div>

            </div>
         </div>
         <div class="col-sm-4 col-md-4 padding_0" style="background: #fff; width:34%;">

         </div>
      </div>
   </div>
   <div class="col-sm-12 col-md-12 col-lg-12 padding_0">
      <h3 class="info-block-title">Additional remarks</h3>
      <div class="col-sm-12 col-md-12 info-block-body" style="background: #fff; padding: 15px 0;width: 928px; border:1px solid #e5e5e5;">
         <div class="info-control">
            <form role="form" style="padding: 4px 8px;">
               <div class="form-group">
                  <textarea maxlength="2000" bd-validator-item="" class="info-remark-ta" style="margin-top: 0px; margin-bottom: 0px; height: 104px;"></textarea>
               </div>
            </form>
         </div>
         <div class="info-remark-tip-limit">
            Word limit: 2,000
         </div>
      </div>
   </div>
   <div class="col-sm-12 col-md-12">
      <div class="action-block">
         <button id="submit-form" class="ui2-button ui2-button-default ui2-button-primary ui2-button-large" type="button" style=" border-radius: 3px !important; height: 36px;">
            Submit
         </button>
      </div>
   </div>
</div>
<div id="light" class="white_content">

   <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'" style="float: right;"><i class="fa fa-times" aria-hidden="true" style="font-size: 16px; color: #666; font-weight: normal;"></i></a>
   <h3 class="ui2-dialog-title" data-role="title">Add A New Address</h3>
   <div style="width: 100%; padding: 20px 25px; overflow:scroll; height:450px;">
      <form class="form-horizontal" name="address_form">
         <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label"><span style="color: #CC1414;">*</span> Contact Name:</label>
            <div class="col-sm-8">
               <input type="text" class="form-control ui2-textfield-single" id="cont_person" name="cont_person" value="">
               <span id="error_1">Contact person name is required</span>
            </div>
         </div>
         <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label"><span style="color: #CC1414;">*</span>Country region:</label>
            <div class="col-sm-8">
               <input type="text" class="form-control ui2-textfield-single" id="count_region" value="">
               <span id="error_2">Country region is required</span>
            </div>
         </div>
         <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label"><span style="color: #CC1414;">*</span> Street Address:</label>
            <div class="col-sm-8">
               <input type="text" class="form-control ui2-textfield-single" id="street" value="">
               <span id="error_3">Street address is required</span>
               <div class="col-sm-12" style="min-height: 50px; margin-top: 10px;">
                  Street Address .P.O . box, company name ,c/o
               </div>

            </div>
            <div class="col-sm-offset-4 col-sm-8">
               <input type="text" class="form-control ui2-textfield-single" id="appartment" value="">
               <span id="error_4">This field is required</span>
               <div class="col-sm-12" style="min-height: 50px; margin-top: 10px;">
                  Apartment ,suite ,unit , building , floor ,etc.
               </div>
            </div>
         </div>
         <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label"><span style="color: #CC1414;">*</span>City</label>
            <div class="col-sm-8">
               <input type="text" class="form-control ui2-textfield-single" id="city" value="">
               <span id="error_5">City name is required</span>
            </div>
         </div>
         <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label"><span style="color: #CC1414;">*</span>State/Province/Country:</label>
            <div class="col-sm-8">
               <input type="text" class="form-control ui2-textfield-single" id="country" value="">
               <span id="error_6">Country name is required</span>
            </div>
         </div>
         <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label"><span style="color: #CC1414;">*</span>Zip/Postal Code:</label>
            <div class="col-sm-8">
               <input type="text" class="form-control ui2-textfield-single" id="zip_code" value="">
               <span id="error_7">Zip code is required</span>
            </div>
         </div>
         <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label"><span style="color: #CC1414;">*</span>Telephone:</label>
            <div class="col-sm-8">
               <div class="col-sm-4">
                  <input type="text" class="form-control ui2-textfield-single" id="tele1" value="">
                  <span id="error_8">First digit</span>
               </div>
               <div class="col-sm-4">
                  <input type="text" class="form-control ui2-textfield-single" id="tele2" value="">
                  <span id="error_9">middle digit</span>
               </div>
               <div class="col-sm-4">
                  <input type="text" class="form-control ui2-textfield-single" id="tele3" value="">
                  <span id="error_10">last digit</span>
               </div>

            </div>
         </div>
         <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label"><span style="color: #CC1414;">*</span>Mobile:</label>
            <div class="col-sm-8">
               <input type="text" class="form-control ui2-textfield-single" id="cell_no" value="">
               <span id="error_11">Mobile no is required</span>
            </div>
         </div>
         <div class="form-group">
            <div class="col-sm-4">
               <input type="button" onclick="my_address()" style="background: #255E98; color: #ffffff; border-radius: 4px !important;" class="form-control" id="ship-address" value="Ship to this address">
            </div>
            <div class="col-sm-2">
               <input type="button" class="form-control" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'" value="cancel">
            </div>
            <div class="col-sm-6">

            </div>
         </div>
      </form>

   </div>
</div>
<div id="fade" class="black_overlay"></div>
@stop
@section('scripts')
<script type="text/javascript">
	function toggle_visibility(id) {
	   var e = document.getElementById(id);
	   if (e.style.display == 'block')
	      e.style.display = 'none';
	   else
	      e.style.display = 'block';
	}

	function addRect() {

	   document.getElementById("create-product-list").innerHTML += '<div class="create-product"><div class="create-pro-1"><div class="create-pro-2"><span class="create-pro-3">NO. 1</span></div><div class="delete-pro-1"><span class="delete-confirm-btt" onclick="removeRect();">Delete</span></div></div> <div class="info-product-item-body"><div class="info-product-item-left"><div class="info-product-item-img">No Photo</div><div class="info-product-item-name"><textarea class="info-product-item-ta"></textarea> </div></div><div class="info-product-item-right"><table class="info-table"><tbody><tr><td class="info-cell info-cell-title"><span class="ui2-form-required">* </span>Unit Price:</td><td class="info-cell info-cell-title">US $<input type="text" value="19.9" name="price" class="input-td-text"></td><td class="info-cell info-cell-title"><span class="ui2-form-required">* </span> Quantity:</td><td class="info-cell info-cell-title"><input type="text" value="2" name="price" class="input-td-text"></td></tr><tr><td class="info-cell info-cell-title"><span class="ui2-form-required">* </span>Unit:	</td><td class="info-cell info-cell-title"><div class="input-option" onclick="toggle_visibility("unit-p")">Prices(s)<div class="ui2-price"><i class="fa fa-angle-down" aria-hidden="true"></i></div></div><div class="input-option" id="unit-p"><ul class="option-choice"><li style="padding-left: 0;width: 110px; overflow: hidden; border:1px solid #e5e5e5;"><input type="text" name="unit" value=""></li><li>Prices</li><li>Sets</li><li>package</li></ul></div></td><td class="info-cell info-cell-title"><span class="ui2-form-required">* </span>Amount</td><td class="info-cell info-cell-title">US $ 39.80</td></tr><tr><td class="info-cell info-cell-title"><span class="ui2-form-required">* </span>Product Description:</td><td class="info-cell info-cell-title"><input type="text" maxlength="1500" value="" name="descrip" style="width: 200%;"></td></tr></tbody></table></div></div></div>';
	}

	function removeRect() {
	   var create_product = document.getElementById("create-product-list");

	   if (create_product.children.length > 0) {
	      create_product.lastChild.remove();

	   }
	}

	// 	$(document).ready(function(){
	//     $("#new-product").click(function(){
	//         $("create-pro-3").each(function(){
	//             alert($(this).index())
	//         });
	//     });
	// });
	// 	$(document).ready(function() {
	// 			$('#cont_person').on('input', function() {
	// 					var input=$(this);
	// 					var is_name=input.val();
	// 					if(is_name){input.removeClass("invalid").addClass("valid");}
	// 					else{input.removeClass("valid").addClass("invalid");}
	// 				});
	// });

	function my_address() {

	   var person_name = document.getElementById('cont_person').value;
	   var region = document.getElementById('count_region').value;
	   var street_add = document.getElementById('street').value;
	   var apart = document.getElementById('appartment').value;
	   var count_city = document.getElementById('city').value;
	   var cntry = document.getElementById('country').value;
	   var zipcod = document.getElementById('zip_code').value;
	   var digit1 = document.getElementById('tele1').value;
	   var digit2 = document.getElementById('tele2').value;
	   var digit3 = document.getElementById('tele3').value;
	   var Mobile_no = document.getElementById('cell_no').value;

	   if (person_name == "") {
	      //alert('Please Enter Contact Name');
	      document.getElementById('cont_person').style.borderColor = "red";
	      document.getElementById('error_1').style.display = "block";
	      return false;
	   } else {
	      document.getElementById('cont_person').style.borderColor = "green";
	      document.getElementById('error_1').style.display = "none";
	   }
	   if (/^[0-9]+$/.test(document.getElementById("cont_person").value)) {
	      //alert("First Name Contains Numbers!");
	      document.getElementById('cont_person').style.borderColor = "red";
	      document.getElementById('error_1').style.display = "block";
	      return false;
	   } else {
	      document.getElementById('cont_person').style.borderColor = "green";
	      document.getElementById('error_1').style.display = "none";
	   }
	   if (region == "") {
	      //alert('Please enter  country region');
	      document.getElementById('count_region').style.borderColor = "red";
	      document.getElementById('error_2').style.display = "block";
	      return false;
	   } else {
	      document.getElementById('count_region').style.borderColor = "green";
	      document.getElementById('error_2').style.display = "none";
	   }
	   if (street_add == "") {
	      //alert('Please Enter street');
	      document.getElementById('street').style.borderColor = "red";
	      document.getElementById('error_3').style.display = "block";
	      return false;
	   } else {
	      document.getElementById('street').style.borderColor = "green";
	      document.getElementById('error_3').style.display = "none";

	   }
	   if (apart == "") {
	      //alert('Please Enter apartment');
	      document.getElementById('appartment').style.borderColor = "red";
	      document.getElementById('error_4').style.display = "block";
	      return false;
	   } else {
	      document.getElementById('appartment').style.borderColor = "green";
	      document.getElementById('error_4').style.display = "none";
	   }
	   if (count_city == "") {
	      //alert('Please Enter city');
	      document.getElementById('city').style.borderColor = "red";
	      document.getElementById('error_5').style.display = "block";
	      return false;
	   } else {
	      document.getElementById('city').style.borderColor = "green";
	      document.getElementById('error_5').style.display = "none";
	   }
	   if (cntry == "") {
	      //alert('Please Enter country');
	      document.getElementById('country').style.borderColor = "red";
	      document.getElementById('error_6').style.display = "block";
	      return false;
	   } else {
	      document.getElementById('country').style.borderColor = "green";
	      document.getElementById('error_6').style.display = "none";
	   }
	   if (zipcod == "") {
	      //alert('Please Enter zipcode');
	      document.getElementById('zip_code').style.borderColor = "red";
	      document.getElementById('error_7').style.display = "block";
	      return false;
	   } else {
	      document.getElementById('zip_code').style.borderColor = "green";
	      document.getElementById('error_7').style.display = "none";
	   }
	   if (digit1 == "") {
	      //alert('Please Enter first');
	      document.getElementById('tele1').style.borderColor = "red";
	      document.getElementById('error_8').style.display = "block";
	      return false;
	   } else {
	      document.getElementById('tele1').style.borderColor = "green";
	      document.getElementById('error_8').style.display = "none";
	   }
	   if (digit2 == "") {
	      //alert('Please Enter middle');
	      document.getElementById('tele2').style.borderColor = "red";
	      document.getElementById('error_9').style.display = "block";
	      return false;
	   } else {
	      document.getElementById('tele2').style.borderColor = "green";
	      document.getElementById('error_9').style.display = "none";
	   }
	   if (digit3 == "") {
	      //alert('Please Enter last');
	      document.getElementById('tele3').style.borderColor = "red";
	      document.getElementById('error_10').style.display = "block";
	      return false;
	   } else {
	      document.getElementById('tele3').style.borderColor = "green";
	      document.getElementById('error_10').style.display = "none";
	   }
	   if (Mobile_no == "") {
	      //alert('Please Enter Mobile No');
	      document.getElementById('cell_no').style.borderColor = "red";
	      document.getElementById('error_11').style.display = "block";
	      return false;
	   } else {
	      document.getElementById('cell_no').style.borderColor = "green";
	      document.getElementById('error_11').style.display = "none";
	   }
	}	
</script>
@stop