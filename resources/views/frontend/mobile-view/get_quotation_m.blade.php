@extends('mobile-view.layout.master_m')
 @section('extra_stylesheet')
<style>
.alert-box {
    color:#555;
    border-radius:10px;
    font-family:Tahoma,Geneva,Arial,sans-serif;font-size:11px;
    #padding:10px 10px 10px 36px;
    padding:10px;
    display: inline-block;
    #margin:10px;
}
.alert-box span {
    font-weight:bold;
    text-transform:uppercase;
}
.warning {
    #background:#fff8c4 url('http://www.cssportal.com/images/warning.png') no-repeat 10px 50%;
    border:1px solid #f2c779;
}
</style>
 @endsection
	@section('content')
<section>
<div class="container">
	<div class="row">
            <div class="col-xs-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a itemprop="url" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color:#333;">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a itemprop="url" href="{{URL::to('get_qutations'),is_secured()}}" class="top-path-li-a"> <span itemprop="name" style="color:#333;">Get Quotations </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
    
                        
                    </ul>
            </div>
    
  </div>
	<div class="row" >			
			<div class="" id="details" >
				<form action="{!!URL::to('get_quotations',null,is_secured())!!}" method="post" class="get_qutations" enctype="multipart/form-data">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
		                              	<div class="col-xs-12">
		                            @if (count($errors) > 0)
									    <div class="alert alert-danger" style="float: left;text-align: left;">
									        <ul>
									            @foreach ($errors->all() as $error)
									                <li style="text-align: left;">{!! $error !!}</li>
									            @endforeach
									        </ul>
									    </div>
									@endif
									<?php
									if (session()->has('quotation_limit_alert')) {
									    echo '<div style="padding-left: 5px;margin-bottom: 10px;"><div class="alert-box warning"><i style="color:#ce801f;" class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>Warning: </span>'.session()->get('quotation_limit_alert').'.</div></div>';
									}
									?>
								</div>
								<div class="col-xs-12">
									<p class="formtitlecc" itemprop="name" style="padding: 0; text-align: center;">Complete Your Buying Request</p> 
								</div>

								            <div class="col-xs-12">
											    <div align="left" class="pp-quet" style="padding-left: 2px;">
											    <span class="ui2-form-required">*</span>
                                                    <label class="form-level {{$errors->has('product_name')?'to-err':''}}" for="product">Product Name:</label>
                                                    </div>
                                             </div>
                                               <div class="col-xs-12">
                                                    <input style="height: 45px; text-align: left;padding-left: 15px;"   name="product_name"  type="text" class="form-control product productview query-input {{$errors->has('product_name')?'to-err2':''}}" placeholder="Key words of products you are looking for" required value="{{ Input::old('product_name') }}">
                                                    <p class="validation_status" style="padding-top:45px;font-size:10px;"></p>
                                                 </div>
                                                
                                                <div class="col-xs-12">
                                                   <div align="left" class="pp-quet" style="padding-left: 2px;">
                                                         <span class="ui2-form-required">*</span>
                                                    <label class="form-level {{$errors->has('quantity')?'to-err':''}}" for="quantity">Quantity:</label>
                                                    </div>
                                                 </div>
                                                 <div class="col-xs-12">
                                                    <input name="quantity" style="height: 45px; text-align: left;padding-left: 15px; padding-top: 10px;" type="text" class="form-control quantity productview check_integer {{$errors->has('quantity')?'to-err2':''}}" placeholder="Estimated Order Quantity" required value="{{ Input::old('quantity') }}">
                                                    <p class="validation_status" style="font-size:10px;"></p>
                                                 </div>
                                                    
                                                  <div class="col-xs-12" style="padding-bottom:15px"> 
                                                        
                                                        <select name="unit" style="margin-top: 0px;height: 45px;background-color:#fff!important;border: 1px solid #DDD;" class=" form-control productview  {{$errors->has('unit')?'to-err2':''}}" value="{{ Input::old('unit') }}">
                                                        	<option value="0" >Select Unit</option>
						                                    @foreach($units as $unit)
						                                        <option value="{{$unit->id }}" >{{$unit->name}}</option>
						                                    @endforeach    
						                                </select>
                                                    </div>
                                                  
                                               
               
                                                <div class="col-xs-12">
                                                      <div align="left" class="pp-quet" style="padding-left: 2px;">
                                                      <span class="ui2-form-required">*</span> 
                                                      <label class="form-level  {{$errors->has('details')?'to-err':''}}" for="details">Details:</label>
                                                      </div>
                                                 </div>
                                                   <div class="col-xs-12" style="padding-bottom:30px" > 
                                                    <textarea style="height: 100px;" class="form-control  {{$errors->has('details')?'to-err2':''}}" name="details" placeholder="Dear Sir/Madam, I'm looking for products with the following specifications:" ><?php if(Input::old('details') == null || Input::old('details') == ''){echo "";}else{ echo Input::old('details');} ?></textarea>
                                                    <div id ="upload" align="left" class="col-md-12" style="background:#cecece;padding: 10px;font-size:15px;">
                                                    	<div>
	                                                    	 <a itemprop="url" class="upfile  {{$errors->has('attachment_1')?'to-err':''}}""> <i class="fa fa-paperclip"></i> Upload attachments</a>
	                                                    	<input type="file" class="file_up "  name="attachment_1" style="display:none" value="{{ Input::old('attachment_1') }}"/> 
	                                                    	<span class="file_name" style="color:#333;font-size:15px;">None</span>
                                                    	</div>
                                                      <img style="width:173px;margin:10px;margin-left:24px;" class="attachment_1" src="#" alt="your image" />
                                                    	<div>
	                                                    	 <a itemprop="url" class="upfile"> <i class="fa fa-paperclip"></i> Upload attachments</a>
	                                                    	<input   type="file" class="file_up"  name="attachment_2" style="display:none" value="{{ Input::old('attachment_2') }}"/> 
	                                                    	<span class="file_name" style="color:#333;font-size:15px;">None</span>
                                                    	</div>
                                                      <img style="width:173px;margin:10px;margin-left:24px;" class="attachment_2" src="#" alt="your image" />
                                                    	<div>
	                                                    	 <a itemprop="url" class="upfile"> <i class="fa fa-paperclip"></i> Upload attachments</a>
	                                                    	<input  type="file" class="file_up"  name="attachment_3" style="display:none" value="{{ Input::old('attachment_3') }}"/> 
	                                                    	<span class="file_name" style="color:#333;font-size:15px;">None</span>
                                                    	</div>
                                                      <img style="width:173px;margin:10px;margin-left:24px;" class="attachment_3" src="#" alt="your image" />
                                                    </div>
                                                  
                                                    </div>  
                                               
                                               
                                             
                                                   <div class="col-xs-12">
                                                   	<div style="padding-left:0px;" class=col-xs-9>
                                                   		<h5><b>Other Requirements</b><br>	Include unit price, payment terms, etc.</h5>
                                                    </div>
                                                   	<div class="col-xs-3" style="padding-top: 10px;" >
                                                   		 <a style="float: right; padding-right: 20px;" itemprop="url" id="show" onclick="toggle_visibility('showe',this);">Hide <i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                                   	</div>
                                                   </div>
                                                   <div id="showe"  style="margin-top: 15px;"> 
                                                   	<div class="col-xs-12">		
                                                   	<select style="height: 45px; text-align: left;padding-left: 15px;" name="fob" class="form-control {{$errors->has('fob')?'to-err2':''}}" value="{{ Input::old('fob') }}">
													  <option selected value="FOB">FOB</option>
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
                                                   	<div class="col-xs-12" style="margin-top: 15px;">
                                                   		
                                                   		 <input style="height:45px;" type="text" name="unit_price" class="form-control check_number  {{$errors->has('unit_price')?'to-err2':''}}" placeholder="preferred unit price" value="{{ Input::old('unit_price') }}">
                                                   	</div>
                                                  	<div class="col-xs-12" style="margin-top: 15px;">
                                                   		
                                           		   <select style="height:45px;" name="currency" class="form-control  {{$errors->has('currency')?'to-err2':''}}" value="{{ Input::old('currency') }}">
		 												<option value="0">Select currency</option>
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
                                                   	</div>
                                                  
                                                    <div class="col-xs-12" style="margin-top:15px;">
                                                   		
                                                   			<input style="height:45px;" type="text" name="port" class="form-control {{$errors->has('port')?'to-err2':''}}" placeholder="Destination Port" value="{{ Input::old('port') }}">
                                                   	
                                                   	</div>
                                                   	<div class="col-xs-12" style="margin-top: 15px;">
                                                   			<select style="height:45px;" name="payment_terms" class="form-control  {{$errors->has('payment_terms')?'to-err2':''}}"" value="{{ Input::old('payment_terms') }}">
																<option value="0">Payment terms</option>
																<option value="T/T">T/T</option>
																<option value="L/C">L/C</option>
																<option value="Paypal">Paypal</option>
																<option value="Western Union">Western Union</option>
																<option value="MoneyGram">MoneyGram</option>
															</select>
                                                   		</div>
                               
                                                       <div class="col-xs-12" style="margin-top:15px;">
                                                   			<input style="height:45px;" type="text" name="expire_date" class="form-control expire_date {{$errors->has('expire_date')?'to-err2':''}}" placeholder="Valid till (yyyy/mm/dd)" value="{{ Input::old('expire_date') }}">
                                                   		</div>
                                                </div>  		
                                          <div class="col-xs-12" style="margin-top:15px; ">     
                                           <div align="left" class="checkbox" style="padding-left: 20px;">
										  <label style="padding: 2px;"><input type="checkbox" class="agreement" name="agreement" checked value="{{ Input::old('agreement') }}">
										  I accept to share my  Business Card with the quoted suppliers.
										  </label>
									    </div>
									    </div>	
									   <div class="col-xs-12" style="margin-top:15px; ">    
									   <div  align="left" class="checkbox" style="padding-left: 20px;" >
										  <label style="padding: 2px;"><input type="checkbox" class="rules" name="rules" checked value="{{ Input::old('rules') }}">
										  I have read, understood and agreed to obey the Buying Request Posting Rules</a>.
										  </label>
									     </div>
                                       </div> 
                                       <div class="col-xs-12" style="margin-top:15px;">             
                                                <div  style="padding-left:30px; padding-top: 2%; padding-bottom:5%;" align="center" class="col-sm-8">
                                                     <button  type="submit" class="btn btn-primary join" style="border-radius: 5px !important; padding: 12px 19px;">Submit Buying Request</button>
                                                </div>
                                          </div>
                                   </form>  
                                </div>
                             </div>
                          </div>
                    </section>  						
@stop
				
@section('scripts')
<script type="text/javascript">
$('.attachment_1').hide();
$('.attachment_2').hide();
$('.attachment_3').hide();
function toggle_visibility(id,target) {
var _this = target;
var e = document.getElementById(id);
e.style.display = ((e.style.display!='none') ? 'none' : 'block');
  if(e.style.display!='none'){
    _this.innerHTML = 'Hide <i class="fa fa-arrow-up" aria-hidden="true"></i>';
  }else{
    _this.innerHTML = 'Show <i class="fa fa-arrow-down" aria-hidden="true"></i>';
  }
}

// toggle_visibility('showe','#show');

$(".upfile").click(function (e) {
	e.preventDefault();
	$(this).parent().children('.file_up').trigger('click');
});
$(document).on('change','.file_up',function(){
	var href = $(this).val().replace(/C:\\fakepath\\/i, '');
	$(this).parent().children('.file_name').html(href);
});
/*function getFileData(myFile){
   var file = myFile.files[0];  
   var filename = file.name;
   $(this).parent().children('.file_name').html(filename);
}*/
//-->
function readURL(input,target_name) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.'+target_name).attr('src', e.target.result);
            $('.'+target_name).show();
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(".file_up").change(function(){
    readURL(this,$(this).attr('name'));
});

</script>
<script type="text/javascript">
		
		/*$("#hide").click(function(){
		 $('showe').hide();
			});*/

			$("#show").click(function(){
			 $('showe').show();
			});


	/*jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 350,
								thumb_image_height: 350,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});*/
	
</script>
<script type="text/javascript">

		//validation checker

		function empty_field_checker(obj){
                if(obj.val() == ""){
                    obj.css('border','1px solid red')
                    obj.parent().find('.validation_status').text('This field can not be empty')
                    return false;
                  }else{
                    obj.css('border','1px solid #e5e5e5')
                    obj.parent().find('.validation_status').text('') 
                  }
            }

            $(function() {

            	$('.expire_date').datepicker({
            		dateFormat: "yy/mm/dd",
            		minDate: "+2d",
            	});
				/**
				* the element
				*/
				var $ui 		= $('#ui_element');
				
				/**
				* on focus and on click display the dropdown, 
				* and change the arrow image
				*/
				$ui.find('.sb_input').bind('focus click',function(){
					$ui.find('.sb_down')
					   .addClass('sb_up')
					   .removeClass('sb_down')
					   .andSelf()
					   .find('.sb_dropdown')
					   .show();
				});
				
				/**
				* on mouse leave hide the dropdown, 
				* and change the arrow image
				*/
				$ui.bind('mouseleave',function(){
					$ui.find('.sb_up')
					   .addClass('sb_down')
					   .removeClass('sb_up')
					   .andSelf()
					   .find('.sb_dropdown')
					   .hide();
				});
				
				/**
				* selecting all checkboxes
				*/
				$ui.find('.sb_dropdown').find('label[for="all"]').prev().bind('click',function(){
					$(this).parent().siblings().find(':checkbox').attr('checked',this.checked).attr('disabled',this.checked);
				});

				/*$(document).on({keyup:function(){
					var details = $('[name="details"]').val();
					var string_test = ['website','www','http','https','link','url','e-mail','email','mail','phone','mobile','skype','facebook','imo','whatsapp','twitter','id','payment','LinkedIn','call','contact','viber','fb','pay'];
					var validated = true;
					if(validated == true){
                    	var found_str = '';
                    	string_test.forEach(function(entry) {
						    var patt = new RegExp(entry,"i");
    						var res = patt.test(details);
    						if(res){
    							found_str += entry+', ';
    							validated = false;
    						}
						});

						if(validated == true){
							var email_patt = /\S+@\S+\.\S+/;
    						var mail_check_result = details.match(email_patt);
    						if(mail_check_result){
    							alert ('You should not share your email address '+mail_check_result+'. This is prohibited by authority.');
    						}else{
    							var website_patt = /\S[^0-9]+\.\S[^0-9]+/;
		    					var website_result = details.match(website_patt);
		    					if(website_result){
		    						alert ('Your '+website_result+' is suspicious. Or please use sapce after . sign');
		    					}else{
		    						var at_res = (/@/).test(details);
		    						if(at_res){
		    							alert ('Your @ is suspicious. Please remove this character. Sharing email, social link or account, url, website and phone number is prohibited by authority.');
		    						}else{
		    							var details_ph = 'test '+details;
		    							var plus_res = details.match(/\++\d+/); //for +99999
		    							var plus_res_s = details_ph.match(/\++\s+\d+/); //for + 99999
		    							var doublez_res = details_ph.match(/[^0-9.]00+\d+/); //for 0099999
		    							var sz_res = details_ph.match(/[^0-9.]0+\d+/); //for 099999
		    							var doublez_res_s = details_ph.match(/[^0-9.]00+\s+\d+/); //for 00 99999
		    							var sz_res_s = details.match(/[^0-9.]0+\s+\d+/); //for 0 99999
		    							// var plus_res = details.match(/\b\+/);
			    						if(plus_res){
			    							alert ('Your '+plus_res+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    						}else if(plus_res_s){
			    							alert ('Your '+plus_res_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    						}else if(doublez_res){
			    							alert ('Your '+doublez_res+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    						}else if(doublez_res_s){
			    							alert ('Your '+doublez_res_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    						}else if(sz_res){
			    							alert ('Your '+sz_res+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    						}else if(sz_res_s){
			    							alert ('Your '+sz_res_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    						}else{
			    							var min_six = details.match(/\d{6,}/);
			    							var min_six_s = details.match(/\d+\S[^0-9.]+\d+/);
			    							var min_two_ad = details.match(/\.\d{3,}/);
			    							if(min_six){
			    								alert ('Your '+min_six+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    							}else if(min_six_s){
			    								alert ('Your '+min_six_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    							}else if(min_two_ad){
						                      alert ('Your '+min_two_ad+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
						                    }else{

			    							}
			    						}
		    						}
		    					}
    						}
						}else{
							alert (found_str+ 'has been found on your details. Sharing email, social link or account, url, website and phone number is prohibited by authority.');
						}
                    }

				}},'[name="details"]');*/

				$('.join').on('click',function(e){

                    e.preventDefault();
                    var agreement = $('.agreement:checked').val();
					          var rules = $('.rules:checked').val();
                    var product =$('.product').val();
                    var quantity = $('.quantity').val();
                    var details = $('[name="details"]').val();
                   	var string_test = ['website','www','http','https','link','url','e-mail','email','mail','phone','mobile','skype','facebook','imo','whatsapp','twitter','id','payment','LinkedIn','call','contact','viber','fb','pay'];

                    empty_field_checker($('.product'));
                    empty_field_checker($('.quantity'));
                    
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
                    if(agreement == null){
                    	$('.agreement').css('outline','1px solid red');
                    	validated = false;
                    }
                    else{
                    	$('.agreement').css('outline','1px solid #e5e5e5');
                    }
                    if(rules == null){
                    	$('.rules').css('outline','1px solid red');
                    	validated = false;
                    }
                    else{
                    	$('.rules').css('outline','1px solid #e5e5e5');
                    }
                    /*if(validated == true){
                    	var found_str = '';
                    	string_test.forEach(function(entry) {
						    // var patt = /entry/i;
						    // var patt = (/entry/i);
						    var patt = new RegExp(entry,"i");
    						var res = patt.test(details);
    						if(res){
    							found_str += entry+', ';
    							validated = false;
    						}
						});

						if(validated == true){
							var email_patt = /\S+@\S+\.\S+/;
    						var mail_check_result = details.match(email_patt);
    						if(mail_check_result){
    							alert ('You should not share your email address '+mail_check_result+'. This is prohibited by authority.');
    						}else{
    							var website_patt = /\S[^0-9]+\.\S[^0-9]+/;
		    					var website_result = details.match(website_patt);
		    					if(website_result){
		    						alert ('Your '+website_result+' is suspicious. Please use sapce after . sign');
		    					}else{
		    						var at_res = (/@/).test(details);
		    						if(at_res){
		    							alert ('Your @ is suspicious. Please remove this character. Sharing email, social link or account, url, website and phone number is prohibited by authority.');
		    						}else{
		    							var details_ph = 'test '+details;
		    							var plus_res = details.match(/\++\d+/); //for +99999
		    							var plus_res_s = details_ph.match(/\++\s+\d+/); //for + 99999
		    							var doublez_res = details_ph.match(/[^0-9.]00+\d+/); //for 0099999
		    							var sz_res = details_ph.match(/[^0-9.]0+\d+/); //for 099999
		    							var doublez_res_s = details_ph.match(/[^0-9.]00+\s+\d+/); //for 00 99999
		    							var sz_res_s = details.match(/[^0-9.]0+\s+\d+/); //for 0 99999
		    							// var plus_res = details.match(/\b\+/);
			    						if(plus_res){
			    							alert ('Your '+plus_res+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    						}else if(plus_res_s){
			    							alert ('Your '+plus_res_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    						}else if(doublez_res){
			    							alert ('Your '+doublez_res+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    						}else if(doublez_res_s){
			    							alert ('Your '+doublez_res_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    						}else if(sz_res){
			    							alert ('Your '+sz_res+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    						}else if(sz_res_s){
			    							alert ('Your '+sz_res_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    						}else{
			    							var min_six = details.match(/\d{6,}/);
			    							var min_six_s = details.match(/\d+\S[^0-9.]+\d+/);
			    							var min_two_ad = details.match(/\.\d{3,}/);
			    							if(min_six){
			    								alert ('Your '+min_six+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    							}else if(min_six_s){
			    								alert ('Your '+min_six_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
			    							}else if(min_two_ad){
						                      alert ('Your '+min_two_ad+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
						                    }else{
			    								// alert ('right');
			    								$('.get_qutations').submit();
			    							}
			    							// var cc = 263;
			    							// var ccc = details.match(/cc+\d+/); //for +99999
			    							// alert (ccc);
			    							// $('.get_qutations').submit();
			    							// alert ('clean');
			    				// 			var found_country = '';
			    				// 			var found_code = '';
			    				// 			Object.keys(country_code).forEach(function(key) {
			    				// 				var ccode = country_code[key]['code'];
											// 	var regexp = new RegExp(ccode);
											// 	var regexp_result = details.replace(regexp, "other");
			    				// 				console.log(regexp_result);
											//     alert (JSON.stringify(entry));
											// });
			    						}
		    						}
		    					}
    						}
						}else{
							alert (found_str+ 'has been found on your details. Sharing email, social link or account, url, website and phone number is prohibited by authority.');
						}
                    }*/
                    $('.get_qutations').submit();
                });

                $('input[name="product_name"]').blur(function(){
                	var product_name_search = $('input[name="product_name"]').val(); 
                	// alert (product_name_search);
                	$.get(window.location.origin+'/get_qutations_search_product',{
                		product_name_search:product_name_search
                	},function(result){
                		$('#supplier_search_count').html(result);
                	});
                });

                $(document).on({keyup:function(event){
	        	// Allow: backspace, delete, tab, escape, and enter
			        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
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
				  if (pieces.length > 1)
				  {
					  pieces.shift();
					  decPlaces = pieces.join('').replace('-', '');
				  }

				  // handle numbers greater than 12.00... :
				  if (parseInt(integer) > 100000 || parseInt(integer) === 100000 && parseInt(decPlaces) > 0)
				  {
					  integer = "100000";
					  decPlaces = getZeroedDecPlaces(decPlaces);
					  alert("number must be between 0.00 and 100000.00");
				  } // ...and less than 0:
				  else if (parseInt(integer) < 0)
				  {
					  integer = "0";
					  decPlaces = getZeroedDecPlaces(decPlaces);
					  alert("number must be between 0.00 and 100000.00");
				  }

				  // handle more than two decimal places:
				  if (decPlaces.length > 2)
				  {
					  decPlaces = decPlaces.substr(0, 2);
					  alert("number cannot have more than two decimal places");
				  }

				  var newVal = hasDecPlace ? integer + '.' + decPlaces : integer;

				  $(currentEl).val(newVal);
		        }},'.check_number');

		  		function getZeroedDecPlaces(decPlaces) {
				  	if (decPlaces === '') return '';
				  	else if (decPlaces.length === 1) return '0';
				  	else if (decPlaces.length >= 2) return '00';
			  	}

			  	$(document).on({keyup:function(event){
	    	// Allow: backspace, delete, tab, escape, and enter
	        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
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
		    	var o=$(this);
	  			o.val(o.val().replace(/[^\d]/g,""));
	  			if (o.val().length > o.maxLength){
			      o.val(o.value.slice(0, o.maxLength))
	  			}
		    }},'.check_integer');

                /*var unit_value = "<?php //echo Input::old('unit'); ?>";
                if(unit_value != null){
                	$('[name="unit"]').val(unit_value);
                }*/
            });

        </script>	
@stop