@extends('frontend.layouts.master-register')
@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/frontend/css/source-view.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('assets/frontend/css/etalage.css',is_secured()) !!}" rel="stylesheet">
  @endsection

@section('content')
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;">
                        <li class="top-path-li"><a itemprop="url" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                         <li class="top-path-li"><a itemprop="url" href="{{URL::to('Bdsource-home-page',null,is_secured())}}" class="top-path-li-a">Buying request <i class="fa fa-angle-right top-path-icon"></i></a></li>

                        @if($quotations->inq_products_description)
                        <li class="top-path-li"><a title="{{$quotations->inq_products_description->name}}" itemprop="url" href="" class="top-path-li-a">{{ substr($quotations->inq_products_description->name,0,30) }} ... <i class="fa fa-angle-right top-path-icon"></i></a></li>
                       @else
                        <li class="top-path-li"><a title="{{$quotations->inquery_title}}" itemprop="url" href="" class="top-path-li-a">{{substr($quotations->inquery_title,0,30)}} ... <i class="fa fa-angle-right top-path-icon"></i></a>
                        </li>
                        @endif
                    </ul>
            </div>
        </div>
        <div class="row" style="background-color:#fff; padding-bottom:0;margin-bottom:1%;">
                <div class="col-md-12 col-sm-12 col-lg-12" style="padding-top:3%;">               
             <div class="col-md-4 col-sm-6 col-lg-4 col-xs-6">
                <ul id="etalage">
                            <li>
                                <a itemprop="url" href="optionallink.html">
                                @if($quotations->inq_docs_one)
                                    <img itemprop="image" class="etalage_thumb_image" src="{{ URL::to('buying-request-docs',$quotations->inq_docs_one->docs) }}" alt="$quotations->inq_products_images->image"/>

                                    <img itemprop="image" class="etalage_source_image" src="{{ URL::to('buying-request-docs',$quotations->inq_docs_one->docs) }}" alt="$quotations->inq_products_images->image"/>
                                @elseif($quotations->inq_products_images)
                                    <img itemprop="image" class="etalage_thumb_image" src="{{ URL::to(''.$quotations->inq_products_images->image) }}" alt="$quotations->inq_products_images->image" />

                                    <img itemprop="image" class="etalage_source_image" src="{{ URL::to(''.$quotations->inq_products_images->image) }}" alt="$quotations->inq_products_images->image"/>

                                @endif
                                </a>

                            </li>
                            @if($quotations->inq_docs)
                                @foreach($quotations->inq_docs as $image)
                                <li>
                                    <img itemprop="image" class="etalage_thumb_image" src="{{ URL::to('buying-request-docs',$image->docs) }}" alt="{{ $image->docs ?? '' }}" />

                                    <img itemprop="image" class="etalage_source_image" src="{{ URL::to('buying-request-docs',$image->docs) }}" alt="{{ $image->docs ?? '' }}" />
                                </li>
                                @endforeach
                            @endif
                            @if($quotations->inq_products_images_all)
                                @foreach($quotations->inq_products_images_all as $image)
                                <li>
                                    <img itemprop="image" class="etalage_thumb_image" src="{{ URL::to(''.$image->image) }}" alt="$image->docs ?? ''"/>

                                    <img itemprop="image" class="etalage_source_image" src="{{ URL::to(''.$image->image) }}" alt="$image->docs ?? ''"/>
                                </li>
                                @endforeach
                            @endif
                        </ul>
         </div>
         <?php //dd($quotations->bdtdc_product_attribute); ?>
         <div class="col-md-8 col-sm-6 col-lg-8 col-xs-12">
            <p style="padding-top:0px" class="p-name-heading">
            @if($quotations->inquery_title != '')
            {{ $quotations->inquery_title }}
            @elseif($quotations->inq_products_description)
                <a title="{{$quotations->inq_products_description->name}}" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', '-',$quotations->inq_products_description->name).'='.mt_rand(100000000, 999999999).$quotations->product_id,is_secured()) }}">{{ $quotations->inq_products_description->name }}</a>
            @else
            {{ $quotations->inquery_title }}
            @endif
            </p>
            <p class="title-price">FOB <span style="font-size: 16px;font-weight: 600;color: #2192D9;">
            @if($quotations->product_id)
                {{ $quotations->pre_unit_price  }}
                {{ $quotations->currency ?? ''}} / @if($quotations->inq_unit_id)
                {{ $quotations->inq_unit_id->name  }}
                @else
                @endif
            @else
                @if($quotations->p_price)
                @if(trim($quotations->p_price->currency) != '')
                {{ $quotations->p_price->currency}}
                @else
                USD
                @endif
            
            @else
            USD
            @endif
            @if ($quotations->p_price)
            {{ $quotations->p_price->product_FOB }}
            @else
            FOB not available
            @endif
            </span> / @if($quotations->inq_unit_id)
            {{ $quotations->inq_unit_id->name }}
            @else
            Pieces
            @endif
            @endif

            </p>
            

            @php
                $attr_count = count($quotations->bdtdc_product_attribute);
                $repeat_array = [];                
            @endphp
            <div class="com-md-12 padding_0">
            @if($quotations->bdtdc_product_attribute)
                @if(count($quotations->bdtdc_product_attribute) > 0)
                <div class="col-md-6">
                        <ul class="attribute-list">
                        @for($i=0; $i < $attr_count; $i++,$i++)
                            @if($quotations->bdtdc_product_attribute[$i]->bdtdcAttribute)
                                @if (array_key_exists($quotations->bdtdc_product_attribute[$i]->bdtdcAttribute->name,$repeat_array))
                                  @else
                                  @endif
                            <li><span style="color:#999;height:40px;">{{ $quotations->bdtdc_product_attribute[$i]->bdtdcAttribute->name }}</span> {{ $quotations->bdtdc_product_attribute[$i]->bdtdcAttribute->value }}</li>
                        @php 
                        $repeat_array[$quotations->bdtdc_product_attribute[$i]->bdtdcAttribute->name] = $quotations->bdtdc_product_attribute[$i]->bdtdcAttribute->value
                        @endphp 
                        @endif
                        @endfor
                        </ul>
                </div>
                <div class="col-md-6">
                    <ul class="attribute-list" style="padding-left:5%;">
                    @for($i=1; $i < $attr_count; $i++,$i++)
                        @if($quotations->bdtdc_product_attribute[$i]->bdtdcAttribute)
                            @if (array_key_exists($quotations->bdtdc_product_attribute[$i]->bdtdcAttribute->name,$repeat_array))
                            @else
                            @endif
                        <li><span style="color:#999;">{{ $quotations->bdtdc_product_attribute[$i]->bdtdcAttribute->name }}</span> {{ $quotations->bdtdc_product_attribute[$i]->bdtdcAttribute->value }}</li>
                    @php 
                    $repeat_array[$quotations->bdtdc_product_attribute[$i]->bdtdcAttribute->name] = $quotations->bdtdc_product_attribute[$i]->bdtdcAttribute->value
                    @endphp
                    @endif
                    @endfor
                    </ul>
                </div>
                @endif
            @endif
                
            </div>
            <div class="com-md-12 col-sm-12 padding_0">
            
            @if($quotations->sender_company)
                @if($quotations->sender_company->country)
                    <p class="ppp-des" style="padding-left: 2.5%;">
                    Requesting form <img title="{{$quotations->sender_company->country->name}}" itemprop="image" style="height:18px;width:25px;" src="{{ asset('assets/global/img/flags/'.strtolower($quotations->sender_company->country->iso_code_2).'.png',is_secured()) }}" alt="{{ $quotations->sender_company->country->name }}">
                    </p>
                @endif
            @endif
            
            @if(Sentinel::check())
                @php
                $current_user_company = null;
                $current_user = Sentinel::getUser();
                @endphp
                @if($current_user)
                @php
                    $current_user_company = \App\Models\Companies::where('user_id',$current_user->id)->first();
                @endphp
                @endif
            @if($current_user_company)
            @if($current_user_company->is_gold)
            <p class="ppp-des" style="padding-left: 2.5%;">Quantity Required : {{$quotations->quantity}} {{$quotations->BdtdcSupplierQueryProductUnit?$quotations->BdtdcSupplierQueryProductUnit->name:'Pieces'}}</p>
            <p class="ppp-des" style="padding-left: 2.5%;">Unit Price : {{$quotations->pre_unit_price}} {{$quotations->currency}}</p>
            <p class="ppp-des" style="padding-left: 2.5%;">Total Price : {{$quotations->quantity*$quotations->pre_unit_price}} {{$quotations->currency}}</p>
            <p class="ppp-des" style="padding-left: 2.5%;">Payment Type : {{$quotations->payment_type}}</p>
            <p class="ppp-des" style="padding-left: 2.5%;">Destination Port : {{$quotations->destination_port}}</p>
            <p class="ppp-des" style="padding-left: 2.5%;">Payment Terms : {{$quotations->payment_terms}}</p>

            @if($quotations->inq_sender_user)
                    @php
                    $ordered_full_name = $quotations->inq_sender_user->first_name.' '.$quotations->inq_sender_user->last_name
                    @endphp
                @else
                    @php
                    $ordered_full_name = "not available"
                    @endphp
                @endif
                    @php
                    $ordered_comp_name = 'Not Available'
                    @endphp
                @if($quotations->sender_company)
                    @if($quotations->sender_company->name_string)
                        @php
                        $ordered_comp_name = $quotations->sender_company->name_string->name
                        @endphp
                    @endif
                @endif
            
            <p class="ppp-des" style="padding-left: 2.5%;">Quoted By : {{ $ordered_full_name }} (<a style="font-weight:600;" target="_blank" href="{{ URL::to('Home/'.$ordered_comp_name,$quotations->sender_company->id,is_secured()) }}">{{ $ordered_comp_name }}</a>)</p>
            <p class="ppp-des" style="padding-left: 2.5%;">
            <b>Quote Details:</b><br>
             {!! $quotations->message !!}</p>
            @endif
            @endif
            @endif


            <p class="ppp-des" style="padding-left: 2.5%;"><span style="color: #1DC11D;line-height:18px;padding-right: 10px;"><b>{{$supplier_count>5?$supplier_count:rand(200,1000)}}</b></span> <span style="color:#000;font-weight:600;">Suppliers can give quotations</span></p>
            <p class="ppp-des" style="padding-left: 2.5%;"><span style="color: #1DC11D;line-height:18px;padding-right: 10px;"><b>{{ $quotations_no>0?$quotations_no:5 }}</b></span> <span style="color:#000;font-weight:600;"> Quotes have been received for this product</span></p>
            {!! csrf_field() !!}
            <div style="width: 100%;">
               
                <div class="snt-qry" style=" width: 100px; float: left;padding-left: 3%;margin-left: 0px">               
                    <a itemprop="url" target="_blank" href="{{ URL::route('postQuote.form',$quotations->id) }}" id="" class="btn btn-primary btn-join filter_by_quote" style="width: 50px; font-size: 14px;padding: 0;">Send Quote</a>
                </div>
                 <div class="add-bq" style="width: 150px; float: left;padding-left: 3%;margin-left: 0px">
                    <a itemprop="url" target="_blank" href="{{ URL::route('postBuyRequest.form',$quotations->id) }}" id="" class="btn btn-primary btn-join filter_by_quote" style=" font-size: 14px;padding: 0 10px;">Add to Buying Request</a>
                </div>
            </div>
            
            </div>


         </div>
    
       
        
       </div> 
</div>

<div class="row" style="margin-top:5%; background: #fff; padding-top: 20px;"">
    <div class="col-sm-12 col-md-12">
    <h3> Selected buying request from top buyers</h3>
    </div>
<div class="col-sm-12 col-md-12" style="padding-bottom: 2%">
<!-- <div class="col-md-12">
<h3>Selected buying request from our top buyers</h3>
    
</div> -->
 <!-- <h3 style="width: 100%;font-size: 20px; padding-bottom: 20px;">Selected Brand</h3> -->

    
    
</div>
</div>

@stop

@section('scripts')

<script type="text/javascript" src="{!! asset('assets/helpcenter/jquery.etalage.min.js',is_secured()) !!}"></script>
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
@stop
