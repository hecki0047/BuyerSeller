@extends('mobile-view.layout.master_m')
    @section('content')
<section>
<div class="container">
<div class="row">
    <div class="col-xs-12">
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
        <p class="" style="font-weight:bold;font-size:14px;color:#666;padding:1%;padding-left:2%;text-align:center;" > <i class="fa fa-user-md"></i> <?php echo $supp_name; ?> | <a href="<?php echo URL::to('Home'); ?>/{{ $comp_name }}/{{ $products->supplier_product->sup_companies->id }}"><?php echo $comp_name; ?></a></p>
        @else
        <p class="well text-center" style="font-weight:bold;font-size:14px;color:#666;padding:1%;padding-left:2.5%;" > <i class="fa fa-user-md"></i> {{ (isset($user)) ? $user->first_name . " " . $user->last_name : "" }} </p>
        @endif
    </div>
  </div>
  </div>
  </div>
</section>
<section>
<div class="container">
         <div class="row">
    <form action="" class="form query_form" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}
        <div class="col-xs-12">
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
                    <td>
                        <a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ', $products->product_name->name).'='.mt_rand(100000000, 999999999).$products->id,is_secured()) }}" target="_blank">
                            @if($products->product_image_new)
                            <img style="width:70px;height:75px" src="{{ URL::to($products->product_image_new->image,is_secured())}}" alt="" class="img-thumbnail">
                            @else
                            <img style="width:70px;height:75px" src="{{ URL::to('uploads/no-image.jpg','',is_secured()) }}" alt="" class="img-thumbnail">
                            @endif
                        </a>
                        </td>
                        <td><input type="text" style="height:30px;" name="quantity" value="1" class="form-control">
                        </td>
                        <td>
                            
                            <select name="unit_id" style="height:30px;background-color:#fff; border:1px solid #ddd;" >
                                @foreach($BdtdcProductUnit as $productunit)
                                    <option value="{{ $productunit->id }}" <?php if($productunit->id == $products->unit_type_id){echo 'selected';}else{} ?>>{{ $productunit->name }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
               
            </table>
            </div>
        </div>
    </div>
    @else
    <div class="col-xs-12">
            <p>Type a product name to get a product list of this supplier </p>
            <input type="text" name="product_name" class="form-control" placeholder="Product Name" style="width:30%"/>
            <input type="hidden" name="unit_id" value="">
            <input type="hidden" name="quantity" value="">
            <p style="margin-bottom:.5%;margin-top:2%">Selected Product List </p>
            <table class="table product_list" style="">
                <thead style="background:#ECECEC">
                    <tr class="text-center text-muted">
                        <td  class="text-left">Product Name</td>
                        <td >Product Image</td>
                        <td>Unit Price</td>
                        <td>Remove</td>
                    </tr>
                </thead>
                <tbody class="text-center">
                    
                </tbody>
            </table>
          </div>
            @endif
      
    <div class="col-xs-12">
        <div style="margin-bottom: 2%;border-bottom:1px solid #ddd;" class="">
            <h4>Message</h4>
            <p class="msag-top" stytle="padding-right:10px;"><img   src="{!! asset('resources/assets/fontend/bdtdc-images/poly-face.png',is_secured()) !!}" alt="" /> Tips on getting accurate quotes from suppliers. Please include the following in your inquiry : Order quantity; Special requests if any</p>
           
        </div>
        <div class="" style="margin-bottom: 2%;border-bottom:1px solid #ddd;">
             <textarea class="form-control message" name="message" rows="10" cols="10"></textarea>
        </div>
        <div>
            <div class="">
                <p class="enter-msg">Please enter your message</p>
                <div id ="upload" class="">
                    <div>
                        <a class="btn btn-xs text-success upfile"><i class="fa fa-plus" style="padding-right:5px;font-size:12px; font-weight:normal;"></i>add attachment</a>
                        <input type="file" class="file_up" id="attachment_1" name="attachment_1" style="display:none" value="{{ Input::old('attachment_1') }}"/> 
                        <span class="file_name" style="color:#333;font-size:15px;">None</span>
                    </div>
                    <div>
                        <a class="btn btn-xs text-success upfile"><i class="fa fa-plus" style="padding-right:5px;font-size:12px; font-weight:normal;"></i>add attachment</a>
                        <input type="file" class="file_up" id="attachment_2" name="attachment_2" style="display:none" value="{{ Input::old('attachment_2') }}"/> 
                        <span class="file_name" style="color:#333;font-size:15px;">None</span>
                    </div>
                    <div>
                        <a class="btn btn-xs text-success upfile"><i class="fa fa-plus" style="padding-right:5px;font-size:12px; font-weight:normal;"></i>add attachment</a>
                        <input type="file" class="file_up" id="attachment_3" name="attachment_3" style="display:none" value="{{ Input::old('attachment_3') }}"/> 
                        <span class="file_name" style="color:#333;font-size:15px;">None</span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="col-xs-12">
        <div class="">
            <p style="padding-top:4%;width:100%;"><label><span><input  type="checkbox" checked></span> Recommend matching suppliers if this supplier doesn’t contact me on Message Center within 24 hours.</label></p>
            <p style="padding-bottom:4%;width:100%;"><label><span><input type="checkbox" value="ag" name="agreementSupplier" checked></span> I agree to share my Business Card to the supplier.</label></p>
        </div>
        <div class="">
            <input type="submit" value="Send" class="btn btn-primary btn-lg query_form_submit_btn" style="border-radius:4px !important; margin-bottom:15px;">
        </div>
    </div>
    </form>
</div>
</section>
<section>
<div class="container">
<div class="row">
  <div class="modal fade" id="loginModal" role="dialog" style="max-width: 500px;">
    <div class="modal-dialog">
      <div class="modal-content" style="box-shadow: 2px 5px 8px rgba(0,0,0,.25);">
         <form role="form" class="login_form" method="POST" action="http://bditdc.com/sessions">
        {{ csrf_field() }}
            <div class="modal-header" style="padding-top: 5px; padding-bottom: 0;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title-bd">Sign in or Join Free now</h4>
                  <ul class="nav nav-tabs" style="border-bottom: 0 none; margin-bottom: 1px;">
                        <li class="sign-active"><a href="#sign-in" style="background-color: #fff !important; color: #666;" data-toggle="tab">Sign in to Bdtdc.com</a></li>
                        <li><a href="{{ URL::to('join',null,is_secured()) }}" target="_blank">Join Bdtdc.com</a></li>
                  </ul>
                  <div id="login_error" style="padding-top:6px;display:none;"><h6 class="modal-title-bd text-center text-danger"><b>Invalid credentials provided</b></h6></div>
                  <div id="email_error" style="padding-top:6px;display:none;"><h6 class="modal-title-bd text-center text-danger"><b>Invalid Email Address</b></h6></div>
            </div>
          <div class="tab-content">
           <div class="tab-pane fade in active" id="sign-in" >
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
                <button type="submit" class="btn-lg btn btn-success login_submit" style="width: 310px; border-radius: 3px !important; height: 30px; padding: 4px 16px; font-size: 14px;">Submit</button>  
            </div>
          </div>
         </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</section>
@stop
@section('scripts')
<script type="text/javascript">
    
    (function(){
        $('.message').jqte();
        // settings of status
        var jqteStatus = true;
        $(".status").click(function(){
            jqteStatus = jqteStatus ? false : true;
            $('.jqte-test').jqte({"status" : jqteStatus})
        });

        $(".upfile").click(function (e) {
            e.preventDefault();
            $(this).parent().children('.file_up').trigger('click');
        });
        $(document).on('change','.file_up',function(){
            var href = $(this).val().replace(/C:\\fakepath\\/i, '');
            $(this).parent().children('.file_name').html(href);
        });

        function isValidateEmail(email)
        {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
        
        $(document).on({keyup:function(){
            var multiplication,quantity,unite_price;
            quantity = parseInt($(this).val());
            unite_price = parseInt($('[name="unite_price"]').val());
            if(!isNaN(quantity)){
                multiplication = (quantity * unite_price);
            }else{
                multiplication = "";
            }
            $('[name="total_price"]').val(multiplication)
            $('.sub_price').text(multiplication)
        }}, '[name="quantity"]');

        $(document).on({
            keyup: function() {
                var template = "";
                $(this).autocomplete({
                    source: window.location.origin + "/product_suggesion/" + $(this).val()+"/"+$('[name="supplier_id"]').val(),
                    select: function(event, ui) {
                        if(ui.item.image){
                            template = "<tr>\
                                        <td class='text-left'><input type='hidden' name='selecte_product_id[]' value="+ui.item.id+"><input type='hidden' name='product_title_all[]' value='"+ui.item.value+"'>"+ui.item.value+"</td>\
                                        <td><img class='img-responsive' src='"+window.location.origin+"/uploads/"+ui.item.image+"' style='width:100%;height:65px'/></td>\
                                        <td>"+ui.item.price+"</td>\
                                        <td><a href='#' class='btn btn-xs btn-danger delete_selected_product'><i class='fa fa-times'></i></a></td>\
                                    </tr>";
                        }else{
                            template = "<tr>\
                                        <td class='text-left'><input type='hidden' name='selecte_product_id[]' value="+ui.item.id+"><input type='hidden' name='product_title_all[]' value='"+ui.item.value+"'>"+ui.item.value+"</td>\
                                        <td><img class='img-responsive' src='"+window.location.origin+"/bdtdc-product-image/"+encodeURIComponent($.trim(ui.item.parent_category))+"/"+encodeURIComponent($.trim(ui.item.sub_category))+"/"+ui.item.images+"' style='width:100%;height:65px'/></td>\
                                        <td>"+ui.item.price+"</td>\
                                        <td><a href='#' class='btn btn-xs btn-danger delete_selected_product'><i class='fa fa-times'></i></a></td>\
                                    </tr>";
                        }

                        $('.product_list tbody').append(template);
                        $('[name="product_name"]').attr('value','');
                    },
                    html: true,
                    open: function(event, ui) {
                        $('.ui-autocomplete').css('z-index', '9999');
                    }
                });
            }
        }, '[name="product_name"]');
        $('.product_list tbody').on('click','.delete_selected_product',function(e){
            e.preventDefault();
            $(this).parent().parent().remove();
        });


            $(document).on({
                    submit: function(e) {
                        e.preventDefault();
                        // var input_data = $('[name="selecte_product_id[]"]').val();
                        var selected_product_id = $('input[name="selecte_product_id[]"]').map(function(){
                                       return this.value;
                                   }).get();
                        var product_title_all = $('input[name="product_title_all[]"]').map(function(){
                                       return this.value
                                   }).get();
                        if(selected_product_id == '' || selected_product_id == null){
                            selected_product_id = "none";
                        }
                        var input_data = $.trim($('[name="product_name"]').val());
                        var product_id_data = $.trim($('[name="product_id"]').val());
                        var validation_error = true;
                        var message_data = $.trim($('.jqte_editor').html());

                        if(product_id_data == '' || product_id_data == null){

                            if(input_data == ''|| input_data == 'undefined' || input_data == null){
                                $('[name="product_name"]').css('border-color','red');
                                $('[name="product_name"]').focus();
                                validation_error = false;
                            }else if(message_data == '' || message_data == null){
                                $('[name="product_name"]').css('border-color','');
                                $('.jqte_editor').focus();
                                $('.jqte').css('box-shadow','0 0 10px #F10A0A');
                                validation_error = false;
                            }
                            if(validation_error){
                                $('[name="product_name"]').css('border-color','');
                                var token = $("input[name='_token']").val();
                                var attachment_1 = document.getElementById('attachment_1');
                                var attachment_2 = document.getElementById('attachment_2');
                                var attachment_3 = document.getElementById('attachment_3');
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
                                if(attachment_1.files[0]){
                                    data.append('attachment_1', attachment_1.files[0]);
                                }
                                if(attachment_2.files[0]){
                                    data.append('attachment_2', attachment_2.files[0]);
                                }
                                if(attachment_3.files[0]){
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
                                  success: function(r){
                                    if(parseInt(r) == 1){window.location.href = base_url+'/success'; }
                                    else if(parseInt(r) == 0) { $('#loginModal').modal('show');}
                                    else if(parseInt(r) == 2){ alert("Fail!!, Query Could Not Sent");}
                                    else{
                                        alert(r);
                                    }
                                  }
                                });

                            }
                        }else{
                            var quantity_data = $.trim($('[name="quantity"]').val());
                            if(isNaN(quantity_data)){
                                $('[name="quantity"]').css('border-color','red');
                                $('[name="quantity"]').focus();
                                validation_error = false;
                            }else if(quantity_data == ''){
                                $('[name="quantity"]').css('border-color','red');
                                $('[name="quantity"]').focus();
                                validation_error = false;
                            }else if(message_data == '' || message_data == null){
                                $('[name="quantity"]').css('border-color','');
                                $('.jqte_editor').focus();
                                $('.jqte').css('box-shadow','0 0 10px #F10A0A');
                                validation_error = false;
                            }
                            if(validation_error == true){
                                var token = $("input[name='_token']").val();
                                var attachment_1 = document.getElementById('attachment_1');
                                var attachment_2 = document.getElementById('attachment_2');
                                var attachment_3 = document.getElementById('attachment_3');
                                var selected_product_id = $('input[name="selecte_product_id[]"]').map(function(){
                                       return this.value
                                   }).get();
                                var product_title_all = $('input[name="product_title_all[]"]').map(function(){
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
                                if(attachment_1.files[0]){
                                    data.append('attachment_1', attachment_1.files[0]);
                                }
                                if(attachment_2.files[0]){
                                    data.append('attachment_2', attachment_2.files[0]);
                                }
                                if(attachment_3.files[0]){
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
                                  success: function(r){
                                    if(parseInt(r) == 1){window.location.href = base_url+'/success'; }
                                    else if(parseInt(r) == 0) { $('#loginModal').modal('show');}
                                    else if(parseInt(r) == 2){ alert("Fail!!, Query Could Not Sent");}
                                    else{
                                        alert(r);
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
                        if(isValidateEmail(email_data)){
                            $('#email_error').hide();
                            $.post(login_url, $('.login_form').serialize(), function(result) {
                            if(product_id_data == '' || product_id_data == null){
                                var token = $("input[name='_token']").val();
                                var selecte_product_id = $('input[name="selecte_product_id[]"]').map(function(){
                                       return this.value
                                   }).get();
                                var product_title_all = $('input[name="product_title_all[]"]').map(function(){
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
                                if(attachment_1.files[0]){
                                    data.append('attachment_1', attachment_1.files[0]);
                                }
                                if(attachment_2.files[0]){
                                    data.append('attachment_2', attachment_2.files[0]);
                                }
                                if(attachment_3.files[0]){
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
                                  success: function(r){
                                    if(parseInt(r) == 1){window.location.href = base_url+'/success'; }
                                    else if(parseInt(r) == 0) { $('#loginModal').modal('show');}
                                    else if(parseInt(r) == 2){ alert("Fail!!, Query Could Not Sent");}
                                    else{
                                        alert(r);
                                    }
                                  }
                                });
                            }else{
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
                                if(attachment_1.files[0]){
                                    data.append('attachment_1', attachment_1.files[0]);
                                }
                                if(attachment_2.files[0]){
                                    data.append('attachment_2', attachment_2.files[0]);
                                }
                                if(attachment_3.files[0]){
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
                                  success: function(r){
                                    if(parseInt(r) == 1){window.location.href = base_url+'/success'; }
                                    else if(parseInt(r) == 0) { $('#loginModal').modal('show');}
                                    else if(parseInt(r) == 2){ alert("Fail!!, Query Could Not Sent");}
                                    else{
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
                        }else{
                            $('#email_error').show();
                        }
                        

                        

                    }
                }, '.login_submit');

        
    })()
    
</script>
@stop
