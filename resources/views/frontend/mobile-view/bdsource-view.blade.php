@extends('mobile-view.layout.master_m')
    @section('content')
  <section>
  <div class="container">
    <div class="row padding_0" style="background: #fff;">
    <div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
                    <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block;">
                    <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
                    </a>
    </div>
   
    <div class="col-xs-12 padding_0"  id="one" style="margin-top: 12px;">
    	<div class="cat_pro_list" style="width: 100%; height: auto;">
        <div style="padding-top:3%;">     
         <div style="padding:0;">
                <ul id="etalage">

                            <li>

                                <a itemprop="url" href="optionallink.html">
                                @if($quotations->inq_products_images)
                                    <img itemprop="image" class="etalage_thumb_image" src="{{ URL::to($quotations->inq_products_images->image,null,is_secured()) }}" alt="{{$quotations->inq_products_images->image}}" />

                                    <img itemprop="image" class="etalage_source_image" src="{{ URL::to($quotations->inq_products_images->image,null,is_secured()) }}" alt="{{$quotations->inq_products_images->image}}"/>
                                @elseif($quotations->inq_docs_one)
                                    <img itemprop="image" class="etalage_thumb_image" src="{{ URL::to('buying-request-docs',$quotations->inq_docs_one->docs,is_secured()) }}" alt="{{$quotations->inq_products_images->image}}"/>

                                    <img itemprop="image" class="etalage_source_image" src="{{ URL::to('buying-request-docs',$quotations->inq_docs_one->docs,is_secured()) }}" alt="{{$quotations->inq_products_images->image}}"/>
                                @endif
                                </a>

                            </li>

                            @if(count($quotations->inq_products_images_all) > 0)
                                @foreach($quotations->inq_products_images_all as $image)
                                <li>
                                    <img itemprop="image" class="etalage_thumb_image" src="{{ URL::to($image->image,null,is_secured()) }}" alt="{{$image->image ?? ''}}"/>

                                    <img itemprop="image" class="etalage_source_image" src="{{ URL::to($image->image,null,is_secured()) }}" alt="{{$image->image ?? ''}}"/>
                                </li>
                                @endforeach
                            @endif
                            @if(count($quotations->inq_docs) > 0)
                                @foreach($quotations->inq_docs as $image)
                                <li>
                                    <img itemprop="image" class="etalage_thumb_image" src="{{ URL::to('buying-request-docs',$image->docs,is_secured()) }}" alt="{{ $image->docs ?? '' }}" />

                                    <img itemprop="image" class="etalage_source_image" src="{{ URL::to('buying-request-docs',$image->docs,is_secured()) }}" alt="{{ $image->docs ?? '' }}" />
                                </li>
                                @endforeach
                            @endif

                        </ul>

         </div>
     </div>
    </div>
  </div>
  <div class="col-xs-12">
    					<div class="cat_pro_list_des_sv" style="width: 100%;">
    						<div style="width: 100%; display: block;position: relative;">
                                  <div class="det_list">
       
                                 	 <div class="src-pro-nm">
                                    @if ($quotations->inq_products_description)
                                      {{ $quotations->inq_products_description->name }}
                                      @else
                                      {{ $quotations->inquery_title }}
                                    @endif
          </div>
       </div>
						<div class="det_list" style="color:#333;">
       										FOB  <span style="color:#255E98; font-size: 14px;">
                          <?php if($quotations->p_price){if(trim($quotations->p_price->currency) != ''){echo $quotations->p_price->currency;}else{echo "USD";}}else{echo "USD";} ?> @if ($quotations->p_price)
                            {{ $quotations->p_price->product_FOB }}
                            @else
                                FOB not available
                            @endif
                            </span> / 
                            @if($quotations->inq_unit_id)
                                {{ $quotations->inq_unit_id->name }}
                            @else
                                Pieces
                            @endif
						</div>
						<div class="det_list">
								<div class="srce-view"> Suppliers can give quotations</div>
								<div class="srce-view">{{ $quotations_no }} Quotes have been received for this product</div>
						</div>
                        {!! csrf_field() !!}
				        </div>
   						<div style="display: block;width: 100%; margin:0; padding: 0; clear: both; padding-top: 10px;">
						    <a itemprop="url" href="{{ URL::route('postQuote.form',$quotations->id) }}" data-product_id="3969" data-supplier_id="1063" class="btn btn-primary btn-sm filter_by_quote" style="font-size: 12px;padding: 4px 10px; border-radius: 3px !important; background: #255E98; float: left; margin-bottom: 10px;margin-right: 10px;">Send Quote</a>
   							<a itemprop="url" href="{{ URL::route('postBuyRequest.form',$quotations->id) }}" data-product_id="3969" data-supplier_id="1063" class="btn btn-primary btn-sm filter_by_quote" style="font-size: 12px;padding: 4px 10px; border-radius: 3px !important; background: #255E98; margin-left: 0;">Add to Buying Request</a>
   						</div>
       				</div>
       						
    		</div>
    </div>
  </div>
  </section>
@stop
@section('scripts')
<script type="text/javascript">
  
    var a = document.getElementById('one');
      var b = document.getElementById('two');

    a.addEventListener('click',showhide);

    function showhide () {
        if (b.style.display == 'none') {
        b.style.display = 'block';
        }
        else {
            b.style.display = 'none';
        }}



 jQuery(document).ready(function($){

            

                            $('#etalage').etalage({

                                thumb_image_width: 300,

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

    

$(function(){
          
        $('.catTarget').click(function(e){
            e.preventDefault();
            $(".replace_area").html('<div style="text-align:center;margin-top:50px;margin-bottom:50px;"><img itemprop="image" src="'+window.location.origin+'/resources/assets/images/circle_preloader.gif" alt="Loading..." /></div>');
            var catid = $(this).attr('data-catid');
            var href = window.location.href;
            var inq_id = href.substr(href.lastIndexOf('/') + 1);
            $.ajax({
                    type: "GET",
                    url: "{{ URL::to('product-sourcing/view',null,is_secured()) }}"+"/"+inq_id+"/"+catid,
                    // data: "type="+this.value+"&option=eRoutine",
                    // data: "category_id="+$(this).attr('data-catid'),
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

    });

$(document).ready(function(){
    $('[data-catid="all"]').click();
});
</script>
@stop