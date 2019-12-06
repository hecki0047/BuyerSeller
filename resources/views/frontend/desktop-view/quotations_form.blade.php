@extends('frontend.layouts.master-register')
@section('page_css')
<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/source-view.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/helpcenter/etalage.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/fontend/css/select2.min.css',is_secured()) !!}" rel="stylesheet">
<style>
   #selectedFiles img {
      max-width: 100px;
      max-height: 100px;
      float: left;
      margin-bottom:10px;
   }
   .close {
      float:left;
      display:inline-block;
      padding:2px 5px;
      background:#ccc;
   }
   .close:hover {
      float:left;
      display:inline-block;
      padding:2px 5px;
      background:#ccc;
      color:#fff;
   }
</style>
@endsection
@section('content')
<div class="row">
   <div class="col-sm-12 col-md-12 col-lg-12">
      <ul class="top-path" style="padding-bottom: 8px;">
         <li class="top-path-li"><a href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
         <li class="top-path-li"><a href="{{URL::to('get-qutations',null,is_secured())}}" class="top-path-li-a">Get Quotations<i class="fa fa-angle-right top-path-icon"></i></a></li>
      </ul>
   </div>
</div>
<div class="row  padding_0" style=" padding-bottom: ">
   <div class="col-sm-12">
      <div class="col-sm-3" id=" " style="margin-top:7%;">
         @php
            $inquiry_title = 'not available';
            $inquiry_image = URL::to('uploads/no_image.jpg');
         @endphp
         @if($products->inq_products_description)
            @php $inquiry_title = $products->inq_products_description->name; @endphp  
         @elseif($products->inquery_title != '')
            @php $inquiry_title = $products->inquery_title; @endphp
         @endif
         @if($products->inq_products_images)
            @php $inquiry_image = URL::to(''.$products->inq_products_images->image); @endphp
         @elseif($products->inq_docs_one)
            @php $inquiry_image = URL::to('buying-request-docs',$products->inq_docs_one->docs); @endphp
         @endif

         <div class="col-sm-12 productview" class="item_sha" style="padding: 15px;">
            <img style="height:220px;width:100%;" src="{{ $inquiry_image }}" alt="" class="thumbnail" />

            <p class="productview" style="color: #000;font-weight: 600;font-size: 14px;padding: 5px;margin-bottom: 0;margin-top: 15px;"><a title="{{ $inquiry_title }}" style="font-size: 12px;" target="_blank" href="@if ($products->inq_products_description) {{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ',$products->inq_products_description->name).'='.mt_rand(100000000, 999999999).$products->product_id,null,is_secured()) }} @else {{ URL::to('product-sourcing/view',$products->id,is_secured()) }} @endif">{{ substr($inquiry_title, 0, 75) }}...</a></p>
         </div>
      </div>

      {!! Form::open(array('url'=>'quotations_form/success/quote','method'=>'POST', 'files'=>true,'class'=>'myform')) !!}

      @if (count($errors) > 0)
      <div class="alert alert-danger" style="margin-top:10px;">
         <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
      @endif
      <div class="col-sm-9">
         <div class="col-sm-12">
            <!--category-tab-->
            <p class="form-title" style="padding-left:27%;">Complete Your Quotation</p>
         </div>
         <div class="col-sm-12" id="details">
            <!-- <form action="{!!URL::to('get_qutations',null,is_secured())!!}" method="post" class="get_qutations"> -->
            <input type="hidden" name="sender" value="{{$products->sender}}">
            <input type="hidden" name="product_owner_id" value="@if($products->product_owner_id != '0') {{ $products->product_owner_id }} @endif">
            <input type="hidden" name="status" value="">
            <input type="hidden" name="is_quote" value="">
            <input type="hidden" name="inquery_id" value="{{$products->id}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
               <div class="col-sm-12 padding_0">
                  <div align="right" class="col-sm-3 padding_0">
                     <span class="ui2-form-required">*</span>
                     <label class="form-level" for="product">Product Name:</label>
                  </div>
                  <div class="col-sm-6" style="padding-left:21px;">
                     <!-- <input name="supplier_id" value="82" type="hidden"> -->
                     <select name="product_id" id="product_id_dorpdown" style="height: 45px !important; width: 245px !important">
                        <option></option>
                        @if($quote_products)
                        @if(count($quote_products)>0)
                        @foreach($quote_products as $single_qp)
                        @if($single_qp->pro_to_cat_name)
                        <option value="{{$single_qp->product_id}}" title="{{$single_qp->pro_to_cat_name->name}}">{{substr($single_qp->pro_to_cat_name->name,0,30)}}</option>
                        @endif
                        @endforeach
                        @else
                        <option title="">Add related product first</option>
                        @endif

                        @endif
                     </select>

                     <!-- <input type='hidden' name="product_id" value="">
                                <input name="product_name" style="height: 45px;padding-left: 13px;padding-top: 0px;" type="text" class="form-control product productview" placeholder="Key words of products you are looking for" required> -->
                     <p class="validation_status" style="padding-top:45px;font-size:10px;"></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12">
            <div align="right" class="col-sm-3 padding_0">
               <span class="ui2-form-required">*</span>
               <label class="form-level" for="quantity">Quantity:</label>
            </div>
            <div class="col-sm-4">
               <input style="height:45px;margin-top: 0px;" type="text" name="quantity" class="form-control productview" placeholder="Order Quantity" required>
            </div>
            <div class="col-sm-4" style="padding-bottom:30px">
               <select name="unit" style="margin-top: 0px;height: 45px;background-color:#fff!important;border: 1px solid #DDD;" class=" form-control productview">
                  <option value="0" name="">Select Unit</option>
                  @foreach($units as $unit)
                  <option value="{{$unit->id }}" name="">{{$unit->name}}</option>
                  @endforeach
               </select>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-4">
               <input style="height: 45px;" type="text" id="show" name="unit_price" class="form-control" placeholder="preferred unit price">
            </div>
            <div class="col-sm-4" style="padding-bottom:30px">
               <select style="height:45px;" name="currency" class="form-control  " value="">
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
         </div>
         <div class="col-sm-12">
            <br>
            <div align="right" class="col-sm-3 padding_0">
               <span class="ui2-form-required">*</span>
               <label class="form-level" for="">Details:</label>
            </div>
            <div class="col-sm-9" style="padding-bottom:30px">
               <textarea style="height: 100px;" class="form-control" name="messages" placeholder="Enter your product details such as product name, color, size, MOQ, FOB, etc." required></textarea>
               <!-- <div id ="upload" align="left" class="col-md-12" style="background:#cecece;height:61px;font-size:15px;">
                  <a href="#"> <i class="fa fa-paperclip"></i> file attached</a>
                  {!! Form::file('file') !!}
                  <p class="errors">{!!$errors->first('file')!!}</p>
              </div> -->
               <!-- <div class="form-group" id="item_sha">
                  {!! Form::label('File')!!}<br>
                  {!! Form::file('file', ['class' => 'field'])!!}
               </div> -->
            </div>
         </div>
         <div class="col-md-12">
            <div class="col-sm-9 col-md-offset-3 pp-quet">
               <label class="form-level" for="details">Attachment (You can select multiple image)</label>
            </div>
            <div class="col-sm-9 col-md-offset-3" style="padding-bottom:30px">
               <input class="btn btn-primary" type="file" id="files" name="attachments[]" multiple><br/>

               <div id="selectedFiles"></div>
            </div>
         </div>
         <div align="center" style="padding-right: 131px; margin-top: 0%;padding-left: 16%;">
            <label><input type="checkbox" class="agreement" value="agreement" style="">
               I agree to share my Business Card with buyers.
            </label>
         </div>
         <div style="padding-left:11%; padding-top: 3%;" align="center" class="col-sm-8">
            <button type="submit" class="btn btn-primary join" style="border-radius: 5px !important; padding: 12px 19px;">Submit Quotation</button>
         </div>
         <!-- </form>   -->
         <br>
         <br>
      </div>
      {!! Form::close() !!}
   </div>
</div>
<br>
<div class="row" style="margin-top:3%;padding-bottom: 2%">
   <div class="category-tab">
      <!--category-tab-->
      <ul class="nav nav-tab nav-pills trade-show-ul " style="background:none;border-bottom: 1px solid #dae2ed;">
         <li style="padding-top: 11px;font-size: 15px;font-weight: 600;">Selected RFQ</li>
         <li class="active" style="margin-left: 9.5%;"><a class="padding_0 catTarget" catid="all" href="#forbuyer" data-toggle="tab" aria-expanded="true">TOP RFQ</a></li>
         @php
            $categorys=array();
            $chunked_cat_array = array_chunk($categorys, 5);
         @endphp
         @if(isset($chunked_cat_array[0]))
         @foreach($chunked_cat_array[0] as $cat)
         <li><a style="font-size: 13px;" class="padding_0 catTarget" catid="{{ $cat->cat_id }}" href="#forbuyer" data-toggle="tab" aria-expanded="false">{{ $cat->cat_name}}</a></li>
         @endforeach
         @endif
      </ul>
   </div>

   <div class="tab-content">
      <input type="hidden" name="section" value="">
      <div class="tab-pane fade active in" id="forbuyer">
         <div class="col-sm-12 padding_0 replace_area">
            <div style="text-align:center;margin-top:50px;margin-bottom:50px;">
               <img src="{!! asset('assets/images/circle_preloader.gif')!!}" alt="Loading..." />
            </div>
         </div>
      </div>
   </div>
</div>
@stop

@section('scripts')
<script type="text/javascript" src="{!! asset('assets/helpcenter/jquery.etalage.min.js',is_secured()) !!}"></script>
<script type="text/javascript" src="{!! asset('assets/fontend/js/select2.min.js',is_secured()) !!}"></script>
<script>
   var selDiv = "";
   var storedFiles = [];
   
   $(document).ready(function() {
      $("#files").on("change", handleFileSelect);
      
      selDiv = $("#selectedFiles"); 
      $("#myForm").on("submit", handleForm);
      
      // $("body").on("click", ".selFile", removeFile);
   });
      
   function handleFileSelect(e) {
      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      selDiv.empty();
      filesArr.forEach(function(f) {         

         if(!f.type.match("image.*")) {
            return;
         }
         storedFiles.push(f);

         var reader = new FileReader();
         reader.onload = function (e) {
            var html = "<div style='max-height: 150px; max-width: 150px; float: left; background-color: #fff; margin: 10px;'><img src=\"" + e.target.result + "\" data-file='"+f.name+"' class='selFile'><br clear=\"left\"/></div>";
            selDiv.append(html);
            
         }
         reader.readAsDataURL(f); 
      });
      // <span class='close' onclick='this.parentNode.parentNode.removeChild(this.parentNode); return false;' title='Click to remove'>x</span>
      
   }
      
   function handleForm(e) {
      e.preventDefault();
      var data = new FormData();
      
      for(var i=0, len=storedFiles.length; i<len; i++) {
         data.append('files', storedFiles[i]);  
      }
      
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'handler.cfm', true);
      
      xhr.onload = function(e) {
         if(this.status == 200) {
            console.log(e.currentTarget.responseText);   
            alert(e.currentTarget.responseText + ' items uploaded.');
         }
      }
      
      xhr.send(data);
   }
      
   // function removeFile(e) {
   //    var file = $(this).data("file");
   //    for(var i=0;i<storedFiles.length;i++) {
   //       if(storedFiles[i].name === file) {
   //          storedFiles.splice(i,1);
   //          break;
   //       }
   //    }
   //    $(this).parent().remove();
   // }
   // $("body").on("click", ".selFile", removeFile);
</script>
<script type="text/javascript">
   jQuery(document).ready(function($) {
      $('#etalage').etalage({
         thumb_image_width: 350,
         thumb_image_height: 350,
         show_hint: true,
         click_callback: function(image_anchor, instance_id) {
            alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
         }
      });
      // This is for the dropdown list example:
      $('.dropdownlist').change(function() {
         etalage_show($(this).find('option:selected').attr('class'));
      });
   });

   $(function() {
      $("#product_id_dorpdown").select2({
         placeholder: "Please select your product",
      });
      $("#filter_by_quote").change(function() {
         window.alert("sometext");
         var value = $("#quote").val();
         console.log(value);
         var url = window.location.href.split('/');
         var cat_id = url[url.length - 1]
         $('[name="cat_id"]').val(cat_id)
         $("#product_view").show();
         $("#pro_v").hide();
         var _token = $("input[name='_token']").val();
         get_cat_filtered_product_list();
         if (value == "examRoutine") {
            $("#eRoutine").show();
            $.ajax({
               type: "POST",
               url: "{{ URL::to('category/products',null,is_secured()) }}",
               // data: "type="+this.value+"&option=eRoutine",
               data: "type=" + this.value + "&option=eRoutine&_token=" + _token,
               success: function(result) {
                  $("#eRoutine").html(result);
                  $("#eRoutine").focus();
               }
            })
         } else {
            $("#eRoutine").hide();
         }
      });

      $('.catTarget').click(function(e) {
         e.preventDefault();
         $(".replace_area").html('<div style="text-align:center;margin-top:50px;margin-bottom:50px;"><img src="assets/images/circle_preloader.gif" alt="Loading..." /></div>');
         var catid = $(this).attr('catid');
         var href = window.location.href;
         var inq_id = href.substr(href.lastIndexOf('/') + 1);
         if (catid == '') {
            alert('s');
         } else {
            $.ajax({
               type: "GET",
               url: "{{ URL::to('product-sourcing/view',null,is_secured()) }}" + "/" + inq_id + "/" + catid,
               // data: "type="+this.value+"&option=eRoutine",
               // data: "category_id="+$(this).attr('catid'),
               success: function(result) {
                  // alert (result);
                  if (result == '') {
                     $(".replace_area").html('<p style="font-size:25px;color:green;">No Product to show...</p>');
                  } else {
                     $(".replace_area").html(result);
                  }
               }
            })
         }
      });

      $('[catid="all"]').click();

      $(document).on({
         keyup: function() {
            var template = "";
            $(this).autocomplete({
               source: window.location.origin + "/product_suggesion/" + $(this).val() + "/{{ $user_id }}",
               select: function(event, ui) {
                  $('[name="product_id"]').val(ui.item.id);
               },
               html: true,
               open: function(event, ui) {
                  $('.ui-autocomplete').css('z-index', '9999');
               }
            });
         }
      }, '[name="product_name"]');


      $(document).on({
         click: function(e) {
            e.preventDefault();
            var product_id = $('[name="product_id"]').val();
            if (product_id == '' || product_id == null) {
               alert('Please select a product from populated drop down list');
               $('[name="product_id"]').focus();
            } else {
               $('.myform').submit();
            }
         }
      }, '[type="submit"]');
   });
</script>
@stop

