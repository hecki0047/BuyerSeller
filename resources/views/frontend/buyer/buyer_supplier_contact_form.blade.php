@extends('frontend.layouts.header_dynamic')
@section('page_css')
<link property='stylesheet' href="{!! asset('assets/frontend/css/jquery-te-1.4.0.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/frontend/css/jquery-ui.css',is_secured()) !!}" rel="stylesheet">
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


<div class="row" style="    margin-top: 10px;">
   <div class="col-md-12 padding_0" style="">
      <ul style="float:left;margin-left: -2%" itemscope="" itemtype="http://schema.org/BreadcrumbList">
         <!-- <li style="float: left" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="http://apps.bditdc.com" style="color: #000"> Home &nbsp;</a></li>
              <li style="float: left" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="" style="color: #000"> <i class="fa fa-angle-right"></i> <strong> Apparel   Textile</strong> <i class="fa fa-angle-right"></i>
        </a>
      </li> -->


      </ul>
      <ul style="float:right;margin-left: -2%" itemscope="" itemtype="http://schema.org/BreadcrumbList">
         <button class="goBack" onclick="goBack()"><span>Go Back</span></button>
      </ul>
   </div>
</div>


<div class="alert alert-danger show_alert" style="display:none;margin-top:15px;">ksdjfkdfai</div>
<div class="row query_box" style="padding:0;padding: 0 2%;border:1px solid #ddd;">
   <div class="buy-supplier-cont-masg" style="margin: 0 -2%;">
      @if(isset($products))
      <?php
        $supp_name = 'Not Available';
        $comp_name = 'Not Available';
        if($products->supplier_product){
            if($products->supplier_product->users){
                $supp_name = $products->supplier_product->users->first_name.' '.$products->supplier_product->users->last_name;
            }
            if($products->supplier_product->sup_companies){
                if($products->supplier_product->sup_companies->name_string){
                    $comp_name = $products->supplier_product->sup_companies->name_string->name;
                }
            }
        }
        ?>
      <p class="" style="font-weight:bold;font-size:14px;color:#666;padding:1%;padding-left:2%;text-align:center;"> <i class="fa fa-user-md"></i> <?php echo $supp_name; ?> | <a href="<?php echo URL::to('Home'); ?>/{{ $comp_name }}/{{ $products->supplier_product->sup_companies->id }}"><?php echo $comp_name; ?></a></p>
      @else
      <p class="well text-center" style="font-weight:bold;font-size:14px;color:#666;padding:1%;padding-left:2.5%;"> <i class="fa fa-user-md"></i> {{ (isset($user)) ? $user->first_name . " " . $user->last_name : "" }} </p>
      @endif
   </div>
   <div class="">

   </div>
   <form action="" class="form query_form" method="post" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <input type="hidden" name="product_id" value="{{ (isset($products)) ? $products->id : ''}}">
      <input type="hidden" name="supplier_id" value="{{ $supplier_id }}">
      <div class="" style="width:100%; border-bottom:1px solid #ddd;">

         @if(isset($products))
         <div class="" style="padding-left:0;">
            <table style="border:1px solid #A5A5A5" class="table">

               <tr>
                  <td>Product Information</td>
                  <td>Quantity</td>
                  <td>Unit</td>
               </tr>
               <tr>
                  <td style="width:50%;">
                     <a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ', $products->product_name->name).'='.mt_rand(100000000, 999999999).$products->id,null,is_secured()) }}"  >
                        @if($products->product_image_new)
                        <img style="width:70px;height:75px" src="{{ URL::to(''.$products->product_image_new->image,null,is_secured()) }}" alt="" class="img-thumbnail">
                        @else
                        <img style="width:70px;height:75px" src="{{ URL::to('uploads/no-image.jpg','',is_secured()) }}" alt="" class="img-thumbnail">
                        @endif
                        <span class="btn btn-link" style="color:#666; height:65px;font-size:14px; line height:22px;padding:1%;padding-top:3%;">{{ substr($products->product_name->name,0,37) }}...</span></a>
                  </td>
                  <td style="width:15%;"><input type="text" style="height:30px; width:100%;" name="quantity" value="1" class="form-control"></td>
                  <td style="width:15%;">

                     <select name="unit_id" style="height:30px; width:100%; background-color:#fff; border:1px solid #ddd;">
                        @foreach($BdtdcProductUnit as $productunit)
                        <option value="{{ $productunit->id }}" <?php if($productunit->id == $products->unit_type_id){echo 'selected';}else{} ?>>{{ $productunit->name }}</option>
                        @endforeach
                     </select>
               </tr>

            </table>
         </div>
         @else
         <p>Type a product name to get a product list of this supplier </p>
         <input type="text" name="product_name" class="form-control" placeholder="Product Name" style="width:30%" />
         <input type="hidden" name="unit_id" value="">
         <input type="hidden" name="quantity" value="">
         <p style="margin-bottom:.5%;margin-top:2%">Selected Product List </p>
         <table class="table product_list" style="">
            <thead style="background:#ECECEC">
               <tr class="text-center text-muted">
                  <td style="width:40%" class="text-left">Product Name</td>
                  <td style="width:13%">Product Image</td>
                  <td>Unit Price</td>
                  <td>Remove</td>
               </tr>
            </thead>
            <tbody class="text-center">

            </tbody>
         </table>
         @endif
      </div>
      <div style="margin-bottom: 2%;border-bottom:1px solid #ddd;" class="">
         <h4>Message</h4>
         <p class="msag-top" stytle="padding-right:10px;"><img src="{!! asset('assets/fontend/bdtdc-images/poly-face.png',is_secured()) !!}" alt="" /> Tips on getting accurate quotes from suppliers. Please include the following in your inquiry : Order quantity; Special requests if any</p>

      </div>
      <div class="" style="margin-bottom: 2%;border-bottom:1px solid #ddd;">
         <textarea class="form-control message" name="message" rows="10" cols="10"></textarea>
      </div>
      <!-- <div>
         <div class="">
            <p class="enter-msg">Please enter your message</p>
            <div id="upload" class="">
               <div>
                  <a class="btn btn-xs text-success upfile"><i class="fa fa-plus" style="padding-right:5px;font-size:12px; font-weight:normal;"></i>Upload product image</a>
                  <input type="file" class="file_up" id="attachment_1" name="attachment_1" style="display:none" value="{{ Input::old('attachment_1') }}" />
                  <span class="file_name" style="color:#333;font-size:15px;">None</span>
               </div>
               <img style="width:173px;margin:10px;margin-left:24px;" class="attachment_1" src="#" alt="your image" />
               <div>
                  <a class="btn btn-xs text-success upfile"><i class="fa fa-plus" style="padding-right:5px;font-size:12px; font-weight:normal;"></i>Upload product image</a>
                  <input type="file" class="file_up" id="attachment_2" name="attachment_2" style="display:none" value="{{ Input::old('attachment_2') }}" />
                  <span class="file_name" style="color:#333;font-size:15px;">None</span>
               </div>
               <img style="width:173px;margin:10px;margin-left:24px;" class="attachment_2" src="#" alt="your image" />
               <div>
                  <a class="btn btn-xs text-success upfile"><i class="fa fa-plus" style="padding-right:5px;font-size:12px; font-weight:normal;"></i>Upload product image</a>
                  <input type="file" class="file_up" id="attachment_3" name="attachment_3" style="display:none" value="{{ Input::old('attachment_3') }}" />
                  <span class="file_name" style="color:#333;font-size:15px;">None</span>
               </div>
               <img style="width:173px;margin:10px;margin-left:24px;" class="attachment_3" src="#" alt="your image" />
            </div>
         </div>
      </div> -->

      <div class="row" style=" padding-right: 100px ">
         <div class="col-sm-12 pp-quet">
            <label class="form-level" for="details">Attachment (You can select multiple image)</label>
         </div>
         <div class="col-sm-12" style="padding-bottom:30px">
            <input class="btn btn-primary" type="file" id="files" name="attachments[]" multiple><br/>

            <div id="selectedFiles"></div>
         </div>
      </div>

      <div class="">
         <p style="padding-top:4%;width:100%;"><label><span><input type="checkbox"></span> Recommend matching suppliers if this supplier doesn’t contact me on Message Center within 24 hours.</label></p>
         <p style="padding-bottom:4%;width:100%;"><label><span><input type="checkbox" value="ag" name="agreementSupplier"></span> I agree to share my Business Card to the supplier.</label></p>
      </div>
      <div class="">
         <input type="submit" value="Send" class="btn btn-primary btn-lg query_form_submit_btn" style="border-radius:4px !important; margin-bottom:15px;">
      </div>
   </form>
</div>



<div class="container">
   <div class="modal fade" id="loginModal" role="dialog">
      <div class="modal-dialog">
         <div class="modal-content" style="box-shadow: 2px 5px 8px rgba(0,0,0,.25);">
            <form role="form" class="login_form" method="POST" action="{{ URL::route('sessions.store')}}">
               {{ csrf_field() }}
               <div class="modal-header" style="padding-top: 5px; padding-bottom: 0;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title-bd">Sign in or Join Free now</h4>
                  <ul class="nav nav-tabs" style="border-bottom: 0 none; margin-bottom: 1px;">
                     <li class="sign-active"><a href="#sign-in" style="background-color: #fff !important; color: #666;" data-toggle="tab">Sign in to Buyerseller.asia</a></li>
                     <li><a href="{{ URL::to('join',null,is_secured()) }}"  >Join Buyerseller.asia</a></li>
                  </ul>
                  <div id="login_error" style="padding-top:6px;display:none;">
                     <h6 class="modal-title-bd text-center text-danger"><b>Invalid credentials provided</b></h6>
                  </div>
                  <div id="email_error" style="padding-top:6px;display:none;">
                     <h6 class="modal-title-bd text-center text-danger"><b>Invalid Email Address</b></h6>
                  </div>
               </div>
               <div class="tab-content">
                  <div class="tab-pane fade in active" id="sign-in">
                     <div class="modal-body" id="sign_form-bdtdc">
                        <div class="form-group">
                           <label for="email" style="font-size: 13px; color: #666;">Account:</label>
                           <input placeholder="Email" class="form-control text-flm" required="required" name="email" type="email" autofocus="">
                        </div>
                        <div class="form-group">
                           <label for="pwd" style="font-size: 13px; color: #666;">Password:</label>
                           <label style="font-size: 13px; color: #666; float: right;">Forgot Password?</label>
                           <input placeholder="Password" class="form-control text-flm" required="required" name="password" type="password">
                        </div>
                     </div>
                     <div class="modal-footer" style="border: 0 none; text-align: center; padding-bottom: 40px;">
                        <!--  <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button> -->

                        <button type="submit" class="btn-lg btn btn-success login_submit" style="width: 310px; border-radius: 3px !important; height: 30px; padding: 4px 16px; font-size: 14px;">Submit</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<br>
<br>

@stop

@section('scripts')
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="{{ URL::asset('assets/fontend/js/jquery-te-1.4.0.min.js',is_secured()) }}" charset="utf-8"></script>
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
   $('.attachment_1').hide();
   $('.attachment_2').hide();
   $('.attachment_3').hide();
   $('.show_alert').hide();

   function readURL(input, target_name) {

      if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function(e) {
            $('.' + target_name).attr('src', e.target.result);
            $('.' + target_name).show();
         }

         reader.readAsDataURL(input.files[0]);
      }
   }

   $(".file_up").change(function() {
      readURL(this, $(this).attr('name'));
   });

   (function() {
      $('.message').jqte();
      // settings of status
      var jqteStatus = true;
      $(".status").click(function() {
         jqteStatus = jqteStatus ? false : true;
         $('.jqte-test').jqte({
            "status": jqteStatus
         })
      });

      $(".upfile").click(function(e) {
         e.preventDefault();
         $(this).parent().children('.file_up').trigger('click');
      });
      $(document).on('change', '.file_up', function() {
         var href = $(this).val().replace(/C:\\fakepath\\/i, '');
         $(this).parent().children('.file_name').html(href);
      });

      function isValidateEmail(email) {
         var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
         return re.test(email);
      }

      $(document).on({
         keyup: function() {
            var multiplication, quantity, unite_price;
            quantity = parseInt($(this).val());
            unite_price = parseInt($('[name="unite_price"]').val());
            if (!isNaN(quantity)) {
               multiplication = (quantity * unite_price);
            } else {
               multiplication = "";
            }
            $('[name="total_price"]').val(multiplication)
            $('.sub_price').text(multiplication)
         }
      }, '[name="quantity"]');

      $(document).on({
         keyup: function() {
            var template = "";
            $(this).autocomplete({
               source: window.location.origin + "/product_suggesion/" + $(this).val() + "/" + $('[name="supplier_id"]').val(),
               select: function(event, ui) {
                  if (ui.item.image) {
                     template = "<tr>\
                                           <td class='text-left'><input type='hidden' name='selecte_product_id[]' value=" + ui.item.id + "><input type='hidden' name='product_title_all[]' value='" + ui.item.value + "'>" + ui.item.value + "</td>\
                                           <td><img class='img-responsive' src='" + window.location.origin + "/uploads/" + ui.item.image + "' style='width:100%;height:65px'/></td>\
                                           <td>" + ui.item.price + "</td>\
                                           <td><a href='#' class='btn btn-xs btn-danger delete_selected_product'><i class='fa fa-times'></i></a></td>\
                                       </tr>";
                  } else {
                     template = "<tr>\
                                           <td class='text-left'><input type='hidden' name='selecte_product_id[]' value=" + ui.item.id + "><input type='hidden' name='product_title_all[]' value='" + ui.item.value + "'>" + ui.item.value + "</td>\
                                           <td><img class='img-responsive' src='" + window.location.origin + "/" + ui.item.images + "' style='width:100%;height:65px'/></td>\
                                           <td>" + ui.item.price + "</td>\
                                           <td><a href='#' class='btn btn-xs btn-danger delete_selected_product'><i class='fa fa-times'></i></a></td>\
                                       </tr>";
                  }

                  $('.product_list tbody').append(template);
                  $('[name="product_name"]').attr('value', '');
               },
               html: true,
               open: function(event, ui) {
                  $('.ui-autocomplete').css('z-index', '9999');
               }
            });
         }
      }, '[name="product_name"]');
      $('.product_list tbody').on('click', '.delete_selected_product', function(e) {
         e.preventDefault();
         $(this).parent().parent().remove();
      });

      //animated modal script
      // $('.contact_supplier').animatedModal({
      //         color: "rgba(102, 102, 100, .9)",
      //         animatedIn: "lightSpeedIn",
      //     });

      /*$(document).on({
              click: function(e) {
                  e.preventDefault();
                  var url,base_url,supplier_id,product_id;
                  $('.modal-content').html('<span class="btn btn-block btn-lg"><i class="fa fa-spinner fa-pulse loading_icon text-primary"></i></span>');
                  base_url = window.location.origin;
                  supplier_id = $(this).data('supplier_id');
                  product_id = $(this).data('product_id');
                  // alert (product_id);
                  // alert (supplier_id);
                  
                  url = (product_id =="#") ? base_url+"/contact_supplier/"+supplier_id : base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
                  $.get(url, function(r) {
                      $('.modal-content').html(r)
                  })
              }
          }, '.contact_supplier');*/

      /*$(document).on({
              click: function(e) {
                  e.preventDefault();
                  base_url = window.location.origin;
                  var url = base_url + '/buyer/contact_supplier';
                  swal({
                          title: "Are you sure?",
                          text: "You are going to confirm adding your product !",
                          type: "warning",
                          showCancelButton: true,
                          confirmButtonColor: "#DD6B55",
                          timer: 6000,
                          confirmButtonText: "Yes!",
                          cancelButtonText: "No, Stay hare!",
                          closeOnConfirm: false,
                          closeOnCancel: false,
                          showLoaderOnConfirm: true
                      },
                      function(isConfirm) {
                          if (isConfirm) {
                              
                              $.post(url, $('.query_form').serialize(), function(r) {
                                  (parseInt(r) == 1) ? swal("Thank You!!", "Query has been sent successfully!!!", "success"): false;
                                  (parseInt(r) == 0) ? swal({title: "<h2 class='text-danger'>Please Login<h2>",text: "<p class='text-primary'>Login first to send the query</p>",html: true,type:'error'}) : false;
                                  (parseInt(r) !=1 && parseInt(r) !=0) ? swal("Fail!!", "Query Could Not Sent", "error") : false;
                              })
                          }
                          else {
                              swal("Cancelled", "Sending request is canceled :)", "error");
                          }
                      });
              }
          }, '.query_form_submit_btn');*/

      $(document).on({
         submit: function(e) {
            e.preventDefault();
            // var input_data = $('[name="selecte_product_id[]"]').val();
            var selected_product_id = $('input[name="selecte_product_id[]"]').map(function() {
               return this.value;
            }).get();
            var product_title_all = $('input[name="product_title_all[]"]').map(function() {
               return this.value
            }).get();
            if (selected_product_id == '' || selected_product_id == null) {
               selected_product_id = "none";
            }
            var input_data = $.trim($('[name="product_name"]').val());
            var product_id_data = $.trim($('[name="product_id"]').val());
            var validation_error = true;
            var message_data = $.trim($('.jqte_editor').html());

            if (product_id_data == '' || product_id_data == null) {

               if (input_data == '' || input_data == 'undefined' || input_data == null) {
                  $('[name="product_name"]').css('border-color', 'red');
                  $('[name="product_name"]').focus();
                  validation_error = false;
               } else if (message_data == '' || message_data == null) {
                  $('[name="product_name"]').css('border-color', '');
                  $('.jqte_editor').focus();
                  $('.jqte').css('box-shadow', '0 0 10px #F10A0A');
                  validation_error = false;
               }
               if (validation_error) {
                  $('[name="product_name"]').css('border-color', '');
                  var token = $("input[name='_token']").val();
                  var files = document.getElementById('files');
                  // var attachment_1 = document.getElementById('attachment_1');
                  // var attachment_2 = document.getElementById('attachment_2');
                  // var attachment_3 = document.getElementById('attachment_3');
                  var data = new FormData();
                  data.append('_token', token);
                  data.append('product_id', $("input[name='product_id']").val());
                  data.append('selected_product_id', selected_product_id);
                  data.append('product_title_all', product_title_all);
                  data.append('inquiry_title', input_data);
                  data.append('supplier_id', $("input[name='supplier_id']").val());
                  // data.append('quantity', $("input[name='quantity']").val());
                  // data.append('unit_id', $("[name='unit_id']").val());
                  data.append('message', $("[name='message']").val());
                  data.append('attachments', $("[name='attachments']").val());
                  // if (attachment_1.files[0]) {
                  //    data.append('attachment_1', attachment_1.files[0]);
                  // }
                  // if (attachment_2.files[0]) {
                  //    data.append('attachment_2', attachment_2.files[0]);
                  // }
                  // if (attachment_3.files[0]) {
                  //    data.append('attachment_3', attachment_3.files[0]);
                  // }
                  base_url = window.location.origin;
                  var url = base_url + '/buyer/contact_supplier';

                  $.ajax({
                     url: url,
                     data: data,
                     processData: false,
                     contentType: false,
                     type: 'POST',
                     success: function(r) {
                        if (parseInt(r) == 1) {
                           window.location.href = base_url + '/success';
                        } else if (parseInt(r) == 0) {
                           $('#loginModal').modal('show');
                        } else if (parseInt(r) == 2) {
                           $('.show_alert').text("Fail!!, Query Could Not Sent");
                           $('.show_alert').show();
                           $(window).scrollTop(0);
                        } else {
                           $('.show_alert').text(r);
                           $('.show_alert').show();
                           $(window).scrollTop(0);
                        }
                     }
                  });

                  /*$.post(url, $('.query_form').serialize(), function(r) {
                                  if(parseInt(r) == 1){window.location.href = base_url+'/success'; }
                                  if(parseInt(r) == 0) { $('#loginModal').modal('show');}
                                  if(parseInt(r) !=1 && parseInt(r) !=0){ alert("Fail!!, Query Could Not Sent");}
                              });*/
               }
            } else {
               var quantity_data = $.trim($('[name="quantity"]').val());
               if (isNaN(quantity_data)) {
                  $('[name="quantity"]').css('border-color', 'red');
                  $('[name="quantity"]').focus();
                  validation_error = false;
               } else if (quantity_data == '') {
                  $('[name="quantity"]').css('border-color', 'red');
                  $('[name="quantity"]').focus();
                  validation_error = false;
               } else if (message_data == '' || message_data == null) {
                  $('[name="quantity"]').css('border-color', '');
                  $('.jqte_editor').focus();
                  $('.jqte').css('box-shadow', '0 0 10px #F10A0A');
                  validation_error = false;
               }
               if (validation_error == true) {
                  var token = $("input[name='_token']").val();
                  // var attachment_1 = document.getElementById('attachment_1');
                  // var attachment_2 = document.getElementById('attachment_2');
                  // var attachment_3 = document.getElementById('attachment_3');
                  var selected_product_id = $('input[name="selecte_product_id[]"]').map(function() {
                     return this.value
                  }).get();
                  var product_title_all = $('input[name="product_title_all[]"]').map(function() {
                     return this.value
                  }).get();
                  var data = new FormData();
                  data.append('_token', token);
                  data.append('selected_product_id', selected_product_id);
                  data.append('product_title_all', product_title_all);
                  data.append('product_id', $("input[name='product_id']").val());
                  data.append('supplier_id', $("input[name='supplier_id']").val());
                  data.append('inquiry_title', input_data);
                  data.append('quantity', $("input[name='quantity']").val());
                  data.append('unit_id', $("[name='unit_id']").val());
                  data.append('message', $("[name='message']").val());
                  data.append('attachments', $("[name='attachments']").val());
                  // if (attachment_1.files[0]) {
                  //    data.append('attachment_1', attachment_1.files[0]);
                  // }
                  // if (attachment_2.files[0]) {
                  //    data.append('attachment_2', attachment_2.files[0]);
                  // }
                  // if (attachment_3.files[0]) {
                  //    data.append('attachment_3', attachment_3.files[0]);
                  // }
                  base_url = window.location.origin;
                  var url = base_url + '/buyer/contact_supplier';

                  $.ajax({
                     url: url,
                     data: data,
                     processData: false,
                     contentType: false,
                     type: 'POST',
                     success: function(r) {
                        if (parseInt(r) == 1) {
                           window.location.href = base_url + '/success';
                        } else if (parseInt(r) == 0) {
                           $('#loginModal').modal('show');
                        } else if (parseInt(r) == 2) {
                           $('.show_alert').text("Fail!!, Query Could Not Sent");
                           $('.show_alert').show();
                           $(window).scrollTop(0);
                        } else {
                           $('.show_alert').text(r);
                           $('.show_alert').show();
                           $(window).scrollTop(0);
                        }
                     }
                  });

                  /*$.post(url, $('.query_form').serialize(), function(r) {
                                  if(parseInt(r) == 1){window.location.href = base_url+'/success'; }
                                  if(parseInt(r) == 0) { $('#loginModal').modal('show');}
                                  if(parseInt(r) !=1 && parseInt(r) !=0){ alert("Fail!!, Query Could Not Sent");}
                              });*/
               }
            }
         }
      }, '.query_form');

      $(document).on({
         click: function(e) {
            e.preventDefault();
            var base_url = window.location.origin;
            var login_url = base_url + '/sessions';
            var query_url = base_url + '/buyer/contact_supplier';
            var email_data = $('[name="email"]').val();
            var product_id_data = $('[name="product_id"]').val();
            if (isValidateEmail(email_data)) {
               $('#email_error').hide();
               $.post(login_url, $('.login_form').serialize(), function(result) {
                  if (product_id_data == '' || product_id_data == null) {
                     var token = $("input[name='_token']").val();
                     var selecte_product_id = $('input[name="selecte_product_id[]"]').map(function() {
                        return this.value
                     }).get();
                     var product_title_all = $('input[name="product_title_all[]"]').map(function() {
                        return this.value
                     }).get();
                     var attachment_1 = document.getElementById('attachment_1');
                     var attachment_2 = document.getElementById('attachment_2');
                     var attachment_3 = document.getElementById('attachment_3');
                     var data = new FormData();
                     data.append('_token', token);
                     data.append('selecte_product_id', selecte_product_id);
                     data.append('product_title_all', product_title_all);
                     data.append('supplier_id', $("input[name='supplier_id']").val());
                     // data.append('quantity', $("input[name='quantity']").val());
                     // data.append('unit_id', $("[name='unit_id']").val());
                     data.append('message', $("[name='message']").val());
                     if (attachment_1.files[0]) {
                        data.append('attachment_1', attachment_1.files[0]);
                     }
                     if (attachment_2.files[0]) {
                        data.append('attachment_2', attachment_2.files[0]);
                     }
                     if (attachment_3.files[0]) {
                        data.append('attachment_3', attachment_3.files[0]);
                     }
                     base_url = window.location.origin;
                     var url = base_url + '/buyer/contact_supplier';

                     $.ajax({
                        url: url,
                        data: data,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        success: function(r) {
                           if (parseInt(r) == 1) {
                              window.location.href = base_url + '/success';
                           } else if (parseInt(r) == 0) {
                              $('#loginModal').modal('show');
                           } else if (parseInt(r) == 2) {
                              alert("Fail!!, Query Could Not Sent");
                           } else {
                              alert(r);
                           }
                        }
                     });
                  } else {
                     var token = $("input[name='_token']").val();
                     var attachment_1 = document.getElementById('attachment_1');
                     var attachment_2 = document.getElementById('attachment_2');
                     var attachment_3 = document.getElementById('attachment_3');
                     var data = new FormData();
                     data.append('_token', token);
                     data.append('product_id', $("input[name='product_id']").val());
                     data.append('supplier_id', $("input[name='supplier_id']").val());
                     data.append('quantity', $("input[name='quantity']").val());
                     data.append('unit_id', $("[name='unit_id']").val());
                     data.append('message', $("[name='message']").val());
                     if (attachment_1.files[0]) {
                        data.append('attachment_1', attachment_1.files[0]);
                     }
                     if (attachment_2.files[0]) {
                        data.append('attachment_2', attachment_2.files[0]);
                     }
                     if (attachment_3.files[0]) {
                        data.append('attachment_3', attachment_3.files[0]);
                     }
                     base_url = window.location.origin;
                     var url = base_url + '/buyer/contact_supplier';

                     $.ajax({
                        url: url,
                        data: data,
                        processData: false,
                        contentType: false,
                        type: 'POST',
                        success: function(r) {
                           if (parseInt(r) == 1) {
                              window.location.href = base_url + '/success';
                           } else if (parseInt(r) == 0) {
                              $('#loginModal').modal('show');
                           } else if (parseInt(r) == 2) {
                              alert("Fail!!, Query Could Not Sent");
                           } else {
                              alert(r);
                           }
                        }
                     });
                  }
                  /*$.post(query_url, $('.query_form').serialize(), function(r) {
                      if(parseInt(r) == 1){window.location.href = base_url+'/success';}
                      if(parseInt(r) == 0) { $('#login_error').show();}
                      if(parseInt(r) !=1 && parseInt(r) !=0){ alert("Fail!!, Query Could Not Sent");}
                  });*/
               });
            } else {
               $('#email_error').show();
            }
         }
      }, '.login_submit');
   })()
</script>
@stop
