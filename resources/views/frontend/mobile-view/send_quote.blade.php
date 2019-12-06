@extends('mobile-view.layout.master_m')
    @section('content')
    <section>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="top-path" style="padding-bottom: 8px;">
                <li class="top-path-li"><a href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                <li class="top-path-li"><a href="{{URL::to('get_qutations'),is_secured()}}" class="top-path-li-a">Get Quotations<i class="fa fa-angle-right top-path-icon"></i></a></li>       
            </ul>
        </div>    
    </div>
    <div class="row">
        <p class="form-title" style="padding-left:22%; padding-bottom: 20px; p">Complete Your Quotation</p>
    </div>
</div>
</section>
<section>
<div class="container">
    <div class="row " style=" padding-bottom: ">
        <div class="col-sm-12">
            <div class="col-sm-3" id=" " style="margin-top:20px;">
            <?php
            $inquiry_title = 'not available';
            $inquiry_image = URL::to('uploads/no_image.jpg');
            if($products->inq_products_description){
                $inquiry_title = $products->inq_products_description->name;
            }else if($products->inquery_title){
                $inquiry_title = $products->inquery_title;
            }
            if($products->inq_products_images){
                $inquiry_image = URL::to($products->inq_products_images->image);
            }else if($products->inq_docs_one){
                $inquiry_image = URL::to('buying-request-docs',$products->inq_docs_one->docs);
            }
            ?>
                <div class="col-sm-12 productview" id="item_sha">
                    <img style="height:220px;width:220px;" src="{{ $inquiry_image }}" alt="" />

                    <p class="productview" style="color: #000;font-weight: 600;font-size: 14px;padding: 5px;"><a title="{{ $inquiry_title }}" style="font-size: 12px;" target="_blank" href="<?php if ($products->inq_products_description) {
                    ?> {{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ',$products->inq_products_description->name).'='.mt_rand(100000000, 999999999).$products->product_id,is_secured()) }}
                    <?php }else{
                        ?> {{ URL::to('product-sourcing/view',$products->id,is_secured()) }}
                        <?php } ?>" ><?php echo substr($inquiry_title, 0, 75); ?>...</a></p>

                
                    
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

            <div class="col-sm-9" >


                
            
                <div class="col-sm-12" id="details" >
                    
                    <input type="hidden" name="sender" value="{{$products->sender}}">
                    <input type="hidden" name="product_owner_id" value="<?php if($products->product_owner_id != '0'){echo $products->product_owner_id;} ?>">
                    <input type="hidden" name="status" value="">
                    <input type="hidden" name="is_quote" value="">
                    <input type="hidden" name="inquery_id" value="{{$products->id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="col-sm-12 padding_0">
                            <div align="" class="col-sm-3">
                                <span class="ui2-form-required">*</span>
                                <label class="form-level" for="product">Product Name:</label>
                            </div>
                            <div class="col-sm-6 padding_0" style="">
                                
                                <input type='hidden' name="product_id" value="">
                                <input name="product_name" style="height: 45px;padding-left: 13px;padding-top: 0px;" type="text" class="form-control product productview" placeholder="Key words of products you are looking for" required>
                                <p class="validation_status" style="padding-top:45px;font-size:10px;"></p>
                            </div>


                        </div>  
                        
                    </div>
                                
                </div>


                <div class="col-sm-12 padding_0">
                    <div align="" class="col-sm-3" style="">
                         <span class="ui2-form-required">*</span>
                         <label class="form-level" for="quantity">Quantity:</label>
                    </div>
                    <div class="col-sm-3 padding_0">
                    <input style="height:45px;margin-top: 10px;" type="text" name="quantity" class="form-control productview" placeholder="Estimated Order Quantity" required>
                    
                    </div>
                                    
                    <div class="col-sm-3 padding_0" style=""> 
                    
                    <select name="unit" style="margin-top: 10px;height: 45px;background-color:#fff!important;border: 1px solid #DDD;" class=" form-control productview">
                        @foreach($units as $unit)
                            <option value="{{$unit->id }}" name="">{{$unit->name}}</option>
                        @endforeach    
                    </select>
                    </div>
                    <div class="col-sm-3 padding_0">
                        
                         <input style="margin-top: 10px;height: 45px;" type="text" id="show" name="unit_price" class="form-control" placeholder="preferred unit price">
                    </div>

                </div>                
                <div class="col-sm-12 padding_0">

                          <div align="" class="col-sm-3">
                          <span class="ui2-form-required">*</span> 
                          <label class="form-level" for="">Details:</label>
                          </div>
                          <div class="col-sm-9 padding_0" style="padding-bottom:20px" > 
                                <textarea  style="height: 100px;" class="form-control" name="messages" placeholder="Dear Sir/Madam,I'm looking for products with the following specifications:" required></textarea> 

                                <div class="form-group" id="item_sha" style="padding-left: 15px; padding-bottom: 20px;">
                                    {!! Form::label('File')!!}<br>
                                    {!! Form::file('file', ['class' => 'field'])!!}
                                </div>


                           </div>
                </div>   

                    
                                  
               <div>
                  <label style="padding-left: 15px;"><input type="checkbox" class="agreement" value="agreement" style="" checked>
                  I agree to share my <a href="#">Business Card</a> with buyers.
                  </label>
                </div>
                            
                                        
                <div  style="padding-top: 20px;" align="left" class="col-sm-8">
                     <button type="submit" class="btn btn-primary join" style="border-radius: 5px !important; padding: 12px 19px;">Submit Quotation</button>
                </div>
                
                <!-- </form>   -->  

                <br>
                <br>
                        
           </div>
           {!! Form::close() !!}
                
            </div>


            </div>
        </div>
    </section>
@stop


@section('scripts')
<script type="text/javascript">

    jQuery(document).ready(function($){

            

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



                    });

    

</script>

 <script>

$(function(){
          

        $("#filter_by_quote").change(function(){ 
            window.alert("sometext");
            var value=$("#quote").val();
            console.log(value);
            var url = window.location.href.split('/');
            var cat_id = url[url.length-1]
            $('[name="cat_id"]').val(cat_id)
            $("#product_view").show();
            $("#pro_v").hide();
            var _token = $("input[name='_token']").val();
            get_cat_filtered_product_list();
            if(value=="examRoutine"){
                $("#eRoutine").show();
                $.ajax({
                    type: "POST",
                    url: "{{ URL::to('category/products',null,is_secured()) }}",
                    // data: "type="+this.value+"&option=eRoutine",
                    data: "type="+this.value+"&option=eRoutine&_token="+_token,
                    success:function(result){
                    $("#eRoutine").html(result);
                    $("#eRoutine").focus();
                    }
                })

            }
            else{ 
                $("#eRoutine").hide();
            }
           
        });

        $('.catTarget').click(function(e){
            e.preventDefault();
            $(".replace_area").html('<div style="text-align:center;margin-top:50px;margin-bottom:50px;"><img src="http://www.bdtdc.com/resources/assets/images/circle_preloader.gif" alt="Loading..." /></div>');
            var catid = $(this).attr('catid');
            var href = window.location.href;
            var inq_id = href.substr(href.lastIndexOf('/') + 1);
            $.ajax({
                    type: "GET",
                    url: "{{ URL::to('product-sourcing/view',null,is_secured()) }}"+"/"+inq_id+"/"+catid,
                    // data: "type="+this.value+"&option=eRoutine",
                    // data: "category_id="+$(this).attr('catid'),
                    success:function(result){
                        // alert (result);
                    if(result == ''){
                        $(".replace_area").html('<p style="font-size:25px;color:green;">No Product to show...</p>');
                    }else{
                        $(".replace_area").html(result);
                    }
                    }
                })
        });

        $('[catid="all"]').click();

        $(document).on({
            keyup: function() {
                var template = "";
                $(this).autocomplete({
                    source: window.location.origin + "/product_suggesion/" + $(this).val()+"/{{ $user_id }}",
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
            click: function(e){
                e.preventDefault(); 
                var product_id = $('[name="product_id"]').val();
                if(product_id == '' || product_id == null){
                    alert('Please select a product from populated drop down list');
                    $('[name="product_name"]').focus();
                }else{

                    $('.myform').submit();
                }
        }},'[type="submit"]');


   

    });



 //finding product




</script>
@stop

