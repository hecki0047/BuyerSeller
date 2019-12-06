@extends('frontend.mobile-view.master_m')
	@section('content')
<?php
    use App\Models\InqueryMessage;
    $_id_prefix = 1;
?>
<section>
<div class="container">
<div class="row" style="background: #fff; margin-bottom: 28px;">
		<button class="btn btn-default" onclick="window.history.back();" style="width:100%;text-align:center;color: #666;padding:10px;font-size: 20px;padding-top:17px;"><i class="fa fa-reply-all" style="font-size: 30px;" aria-hidden="true"></i></button>

	@if($inquiries)
		<?php
			$product_name = 'Not Available';
			if($inquiries->inq_products_description){
				if($inquiries->is_join_quotation == 0){
					$product_name = $inquiries->inq_products_description->name;
				}else{
					$product_name = $inquiries->inquery_title;
				}
			}
			$porduct_image = URL::asset('assets/frontend/images/uploads/no-image.jpg',is_secured());
			if($inquiries->inq_products_images){
				$porduct_image = URL::to('assets/frontend/images/' . $inquiries->inq_products_images->image);
			}else if($inquiries->inq_docs_one){
				$porduct_image = URL::to('assets/frontend/images/buying-request-docs',$inquiries->inq_docs_one->docs);
			}
		?>
	@if($inquiries->is_join_quotation == 0)
			<form action="{{ URL::to('post_conversation',null,is_secured()) }}" method="post" class="form conversation_form">
			{!! csrf_field() !!}
			    <div class="col-xs-12" style="padding-bottom:.5%;background:#666;margin-bottom:.5%">
				    <div class="container_of_inquery_action_btn text-center" style="padding: 5px;">
					    <a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ',$product_name).'='.mt_rand(100000000, 999999999).$inquiries->product_id,null,is_secured()) }}" target="_blank" style="font-size: 20px;color: #fff;"><b>{{$product_name}}</b></a>
				    </div>
				</div>
			    <table class="table" style="background:#F0F0F0">
			        <thead style="border:1px solid #ddd!important">
			            <tr class="text-muted" style="font-weight:bold">
			                <td style="font-size: 12px;">Product Information</td>
			                <td style="font-size: 12px;">Quantity</td>
			                <td style="font-size: 12px;">Unit</td>
			                <td style="font-size: 12px;">Unit Price (Asking)</td>
			                <td style="font-size: 12px;">Total</td>
			            </tr>
			        </thead>
			        <tbody style="border:1px solid #dce2e6!important">
			            <tr style="font-size:13px">
			                <input type="hidden" name="product_owner_id" value="{{ $inquiries->product_owner_id }}">
			                <input type="hidden" name="inquery_id" value="{{ $inquiries->id }}">
			                <input type="hidden" name="product_id" value="{{ $inquiries->product_id }}">
			                <td><a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ',$product_name).'='.mt_rand(100000000, 999999999).$inquiries->product_id,null,is_secured()) }}" target="_blank" style="border:1px solid #ddd;padding:0%" class=" padding_0">
			                <img src="{{ $porduct_image }}" alt="{{$product_name}}" class="img-responsive" style="width:70px;height: 70px;">
			                </a><a style="font-size: 12px;" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ',$product_name).'='.mt_rand(100000000, 999999999).$inquiries->product_id,null,is_secured()) }}" target="_blank" class="btn-link">{{ $product_name }}</a></td>
			                <?php
			                $previous_qp_data = BdtdcInqueryMessage::where('inquery_id',$inquiries->id)
			                                ->where('product_id',$inquiries->product_id)
			                                ->where('product_owner_id',$inquiries->product_owner_id)
			                                ->orderBy('id','desc')
			                                ->first();
			                ?>
			                <td style="font-size: 12px;"><input type="text" name="quantity" class="form-control quantity" value="<?php if($previous_qp_data){echo $previous_qp_data->quantity;}else{echo $inquiries->quantity;} ?>"></td>
			                <td style="font-size: 12px;">{{ $inquiries->unit }}</td>
			                <td style="font-size: 12px;"><input type="text" name="unit_price" class="form-control unit_price" placeholder="Asking Unit Price" value="<?php if($previous_qp_data){echo $previous_qp_data->unit_price;}else{echo '';} ?>"></td>
			                <td style="font-size: 12px;"><input type="text" name="total" class="form-control total" readonly></td>
			            </tr>
			            <tr>
			                <td colspan="4" style="font-size: 12px;">
			                    <?php
			                        $person_who_wrote  = (Sentinel::getUser()->id == $inquiries->sender) ? "<span style='color:#666;font-weight:bold'>You</span>" : "<span style='color:red;font-weight:bold'>Supplier</span>";
			                        if(Sentinel::getUser()->id == $inquiries->sender){
			                            ?><span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold">You wrote </span><?php
			                        }else{
			                        ?><span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold">{{$inquiries->inq_sender_user->first_name.' '.$inquiries->inq_sender_user->last_name}} wrote </span><?php
			                        }
			                    ?>
			                    <span class="badge pull-right">at {{ $inquiries->created_at }}</span><div class="prev_msg">{!! $inquiries->message !!}</div>
			                </td>
			            </tr>
			        </tbody>
			    </table>

			    <?php $_id = 1 ?>
			    @foreach($prev_quotation_single as $pq)
			        <table class="table show_prev_quotation_tbl" class="collapsed" style="background:#F0F0F0;height:50px">
			            <thead style="border:1px solid #ddd!important" data-toggle="collapse" data-messID="{{ $pq->id }}" data-target="#demo{{ $_id }}" class="quotation_tbl_header <?php if($pq->is_view == 0 && $pq->sender != Sentinel::getUser()->id){echo 'view_changer';} ?>">
			                <tr>
			                    <td>
			                        <i class="fa fa-user-plus pull-left" style="margin-top: 1%"></i>
			                        <div class="toggle_quotation_text">
			                            <?php
			                                if(Sentinel::getUser()->id == $pq->sender){
			                                    ?><span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold ">Send: </span> {{ substr($pq->messages,'0','15') }}... <?php
			                                }else{
			                                    ?><span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold">Received: </span>{{ substr($pq->messages,'0','15') }}...<?php
			                                }
			                            ?>
			                        </div>
			                    </td>
			                    <td></td>
			                    <td></td>
			                    <td><span class="toggle_quotation_text">at {{ $pq->created_at }}</span></td>
			                    <td style="padding:0%"class="text-right"> <i class="fa fa-arrow-circle-down btn btn-xs" style="font-size: 19px;margin-top:1%;<?php if($pq->is_view == 0 && $pq->sender != Sentinel::getUser()->id){echo 'color: green;';} ?>"></i> </td>
			                </tr>
			            </thead>
			            <tbody style="border:1px solid #dce2e6!important" id="demo{{$_id}}" class="collapse">
			                <tr style="font-size:13px">
			                    <td><a style="font-size: 12px;" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ',$product_name).'='.mt_rand(100000000, 999999999).$inquiries->product_id,is_secured()) }}" target="_blank" style="border:1px solid #ddd;padding:0%" class=" padding_0"><img src="{{ $porduct_image }}" alt="" class="img-responsive" style="height:52px;width:100%"></a><a style="font-size: 12px;" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ',$product_name).'='.mt_rand(100000000, 999999999).$inquiries->product_id,null,is_secured()) }}" target="_blank" class="col-xs-9 btn-link">{{ $product_name }}</a></td>
			                    <td><input style="font-size: 12px;" type="text" name="" value="{{ $pq->quantity }}" class="form-control"/></td>
			                    <td>{{ $inquiries->unit }}</td>
			                    <td><input style="font-size: 12px;" type="text" name="" class="form-control" placeholder="Asking Unit Price" value="{{ $pq->unit_price }}"></td>
			                    <td><input style="font-size: 12px;" type="text" name="" class="form-control" value="{{ $pq->total }}" readonly></td>
			                </tr>
			                <tr>
			                    <td colspan="5" style="font-size: 12px;">
			                        <?php
			                            $person_who_wrote  = (Sentinel::getUser()->id == $inquiries->sender) ? "<span style='color:#666;font-weight:bold'>You</span>" : "<span style='color:red;font-weight:bold'>Supplier</span>";
			                            if(Sentinel::getUser()->id == $pq->sender){
			                                ?><span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold">You wrote </span><?php
			                            }else{
			                                ?><span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold">{{$pq->bdtdcInqueryMessageSender->first_name}} {{$pq->bdtdcInqueryMessageSender->first_name}} wrote </span><?php
			                            }
			                        ?>
			                        <span class="badge pull-right">at {{ $pq->created_at }}</span><div class="prev_msg">{!! $pq->messages !!}</div>
			                    </td>
			                </tr>

			            </tbody>
			        </table>
			        <?php $_id++ ?>
			    @endforeach

			    <div class="col-sm-12" style="padding-bottom: 20px; padding-left: 10px;">
			        <textarea name="messages" style="margin-bottom: 20px;" id="" cols="30" rows="2" placeholder="New message" class="form-control"></textarea>
			        <input type="submit" style="width: 85px; border-radius: 5px !important;" value="Send" class="btn btn-sm btn-primary submit_single_msg"/>
			    </div>
			</form>
	@else
			<div class="col-xs-12" style="padding-bottom:.5%;background:#666;margin-bottom:.5%">
			    <div class="container_of_inquery_action_btn text-center" style="padding: 5px;">
			    	@foreach($all_join_quotation as $ajq)
				    	<a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ',$ajq->name).'='.mt_rand(100000000, 999999999).$ajq->product_id,null,is_secured()) }}" target="_blank" style="font-size: 20px;"><b>{{$ajq->name}}</b></a><br>
				    @endforeach
			    </div>
			</div>
			@foreach($all_join_quotation as $ajq)
			    @if($ajq)
			    <div class="col-xs-12 padding_0" style="margin-bottom:1%;border:1px solid #ddd;padding:2%;padding-left:0%;padding-right:0%" >
			        <div class="col-sm-12 padding_0 do_collaps" ca_target_id="#main_quoted_product{{ $_id_prefix }}">
			            <div class="col-xs-2">
			                @if($ajq->images)
			                <img src="{{ URL::to('bdtdc-product-image/'.trim($ajq->parent_cat).'/'.trim($ajq->sub_cat),$ajq->images,is_secured()) }}" alt="{{ $ajq->name }}" class="img-responsive" style="height:60px;" />
			                @elseif($ajq->image)
			                <img src="{{ URL::asset('uploads/'.$ajq->image.'',is_secured()) }}" alt="{{ $ajq->name }}" class="img-responsive" style="height:60px;" />
			                @else
			                <img src="{{ URL::asset('uploads/no-image.jpg',is_secured()) }}" alt="no image" class="img-responsive" style="height:60px;" />
			                @endif
			            </div>
			            <div class="col-xs-8">
			                <p style="font-size:15px;font-weight:bold;color:#666;margin-top:3%" class="btn-link">{{ $ajq->name }} </p>
			            </div>
			            <div class="col-xs-2">
			                <a href="#" class="btn btn-sm btn-warning pull-right" style="margin-top:12%">Modify & Submit <i class="fa fa-chevron-down btn btn-sm"></i></a>
			            </div>
			        </div>
			        <div class="hide_this" id="main_quoted_product{{ $_id_prefix }}">
			            <form action="{{ URL::to('post_conversation',null,is_secured()) }}" method="post" class="form main_quoted_product{{ $_id_prefix }}" id="">
			            {!! csrf_field() !!}
			                <table class="table" style="background:#F0F0F0;margin-top:8%">
			                    <thead style="border:1px solid #ddd!important">
			                        <tr class="text-muted" style="font-weight:bold">
			                            <td>Product Information</td>
			                            <td>Quantity</td>
			                            <td>Unit</td>
			                            <td>Unit Price (Asking)</td>
			                            <td>Total</td>
			                        </tr>
			                    </thead>
			                    <tbody style="border:1px solid #dce2e6!important">
			                        <tr style="font-size:13px">
			                            <input type="hidden" name="product_owner_id" value="{{ $inquiries->product_owner_id }}">
			                            <input type="hidden" name="inquery_id" value="{{ $inquiries->id }}">
			                            <input type="hidden" name="product_id" value="{{ $ajq->product_id }}">
			                            <td><a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ',$ajq->name).'='.mt_rand(100000000, 999999999).$ajq->product_id,null,is_secured()) }}" target="_blank" style="border:1px solid #ddd;padding:0%" class="col-xs-2 padding_0">
			                            @if($ajq->images)
			                            <img src="{{ URL::to('bdtdc-product-image/'.trim($ajq->parent_cat).'/'.trim($ajq->sub_cat),$ajq->images,is_secured()) }}" alt="{{ $ajq->name }}" class="img-responsive" style="height:52px;width:100%">
			                            @elseif($ajq->image)
			                            <img src="{{ URL::asset('uploads/'.$ajq->image.'',is_secured()) }}" alt="{{ $ajq->name }}" class="img-responsive" style="height:52px;width:100%">
			                            @else
			                            <img src="{{ URL::asset('uploads/no-image.jpg',is_secured()) }}" alt="no image" class="img-responsive" style="height:52px;width:100%">
			                            @endif

			                            </a><a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ',$ajq->name).'='.mt_rand(100000000, 999999999).$ajq->product_id,null,is_secured()) }}" target="_blank" class="col-xs-9 btn-link">{{ $ajq->name }}</a></td>
			                            <?php
			                            $previous_qp_data = BdtdcInqueryMessage::where('inquery_id',$inquiries->id)
			                                ->where('product_id',$ajq->product_id)
			                                ->where('product_owner_id',$inquiries->product_owner_id)
			                                ->orderBy('id','desc')
			                                ->first();
			                            ?>
			                            <td><input type="text" name="quantity" class="form-control quantity" value="<?php if($previous_qp_data){echo $previous_qp_data->quantity;}else{echo $ajq->quantity;} ?>"></td>
			                            <td>{{ $ajq->unit }}</td>
			                            <td><input type="text" name="unit_price" class="form-control unit_price" placeholder="Asking Unit Price" value="<?php if($previous_qp_data){echo $previous_qp_data->unit_price;}else{echo '';} ?>"></td>
			                            <td><input type="text" name="total" class="form-control total" readonly></td>
			                        </tr>
			                        <tr>
			                            <td colspan="4">
			                                <?php
			                                //$person_who_wrote  = (Sentinel::getUser()->id == $product->sender) ? "<span style='color:#666;font-weight:bold'>You</span>" : "<span style='color:red;font-weight:bold'>Supplier</span>";
			                                if(Sentinel::getUser()->id == $inquiries->sender){
			                                ?><span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold">You wrote </span><?php
			                                }else{
			                                ?><span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold">Supplier wrote </span><?php
			                                }
			                                ?>
			                                <span class="badge pull-right">at {{ $inquiries->created_at }}</span><div class="prev_msg">{!! $inquiries->message !!}</div>
			                            </td>
			                        </tr>
			                    </tbody>
			                </table>

			                <?php
			                    $_id = 1;
			                    $prev_quotation = InqueryMessage::where('inquery_id',$inquiries->id)->where('product_id',$ajq->product_id)->get();
			                ?>
			                @foreach($prev_quotation as $pq)
			                    <table class="table show_prev_quotation_tbl" class="collapsed"  style="background:#F0F0F0;height:50px">
			                        <thead style="border:1px solid #ddd!important" data-toggle="collapse" data-target="#demo{{ $_id_prefix.$_id }}" data-messID="{{ $pq->id }}" class="quotation_tbl_header <?php if($pq->is_view == 0 && $pq->sender != Sentinel::getUser()->id){echo 'view_changer';} ?>">
			                            <tr>
			                                <td style="width:40%">
			                                    <i class="fa fa-user-plus pull-left" style="margin-top: 1%"></i>
			                                    <div class="toggle_quotation_text">
			                                        <?php
			                                            if(Sentinel::getUser()->id == $pq->sender){
			                                                ?><span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold">Send:</span> {{ substr($pq->messages,'0','15') }}... <?php
			                                            }else{
			                                                ?><span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold">Received:  </span>{{ substr($pq->messages,'0','15') }}...<?php
			                                            }
			                                        ?>
			                                    </div>
			                                </td>
			                                <td></td>
			                                <td></td>
			                                <td><span class="toggle_quotation_text">at {{ $pq->created_at }}</span></td>
			                                <td style="padding:0%"class="text-right"> <i class="fa fa-arrow-circle-down btn btn-xs" style="font-size: 19px;margin-top:1%;<?php if($pq->is_view == 0 && $pq->sender != Sentinel::getUser()->id){echo 'color: green;';} ?>"></i> </td>
			                            </tr>
			                        </thead>
			                        <tbody style="border:1px solid #dce2e6!important" id="demo{{$_id_prefix.$_id}}" class="collapse">
			                            <tr style="font-size:13px">
			                                <td><a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ',$ajq->name).'='.mt_rand(100000000, 999999999).$ajq->product_id,null,is_secured()) }}" target="_blank" style="border:1px solid #ddd;padding:0%" class="col-xs-2 padding_0">

			                                @if($ajq->images)
			                                <img src="{{ URL::to('bdtdc-product-image/'.trim($ajq->parent_cat).'/'.trim($ajq->sub_cat),$ajq->images,is_secured()) }}" alt="{{ $ajq->name }}" class="img-responsive" style="height:52px;width:100%">
			                                @elseif($ajq->image)
			                                <img src="{{ URL::asset('uploads/'.$ajq->image.'',null,is_secured()) }}" alt="{{ $ajq->name }}" class="img-responsive" style="height:52px;width:100%">
			                                @else
			                                <img src="{{ URL::asset('uploads/no-image.jpg',null,is_secured()) }}" alt="no image" class="img-responsive" style="height:52px;width:100%">
			                                @endif

			                                </a><a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\. -]/', ' ',$ajq->name).'='.mt_rand(100000000, 999999999).$ajq->product_id,null,is_secured()) }}" target="_blank" class="col-xs-9 btn-link">{{ $ajq->name }}</a></td>
			                                <td><input type="text" name="" value="{{ $pq->quantity }}" class="form-control"/></td>
			                                <td>{{ $pq->unit }}</td>
			                                <td><input type="text" name="" class="form-control" placeholder="Asking Unit Price" value="{{ $pq->unit_price }}"></td>
			                                <td><input type="text" name="" class="form-control" value="{{ $pq->total }}" readonly></td>
			                            </tr>
			                            <tr>
			                                <td colspan="5">
			                                    <?php

			                                    if(Sentinel::getUser()->id == $pq->sender){
			                                        ?><span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold">You wrote </span><?php
			                                    }else{
			                                        ?><span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold">Supplier wrote </span><?php
			                                    }
			                                    ?>
			                                    <span class="badge pull-right">at {{ $pq->created_at }}</span><div class="prev_msg">{!! $pq->messages !!}</div>
			                                </td>
			                            </tr>
			                        </tbody>
			                    </table>
			                    <?php $_id++ ?>
			                @endforeach

			                <div class="col-sm-12" style="padding-left: 30px;">
			                	<div style="margin-bottom: 20px; display: block; clear: both;">
			                    <textarea name="messages" id="" cols="30" rows="2" placeholder="New message" class="form-control" style="margin-bottom: 15px;"></textarea>
			                    </div>
			                    <div style="display: block;clear: both; padding-top: 20px;">
			                      <input type="submit"  formClass="main_quoted_product{{ $_id_prefix }}" value="Send" class="btn btn-sm btn-primary this_product_quotation_btn"/>
			                    </div>
			                </div>
			            </form>
			        </div>
			    </div>
			<?php $_id_prefix++ ?>
			@else
				<h2 class="text-danger text-muted">Not available</h2>
			@endif
			@endforeach
	@endif
	@else
		<h2 class="text-danger text-muted">Not available</h2>
	@endif	  
			 
</div>
</div>
</section>
@stop


@section('scripts')
<script type="text/javascript">

	$(document).on({click:function(e){
		e.preventDefault();
		var base_url = '{{URL::to("/","",is_secured())}}';
		var type = $(this).attr('data-typet');
		if(type == 'folder'){
			var folder_name = $(this).attr('data-foldername');
			var folder_id = $(this).attr('data-folderid');
			var url = base_url+'/default/message?type=folder&fname='+folder_name+'&fid='+folder_id;
			window.location.href = url;
		}else{
			var url = base_url+'/default/message?type='+type;
			window.location.href = url;
		}
		// var folder_id = $(this).parent().attr('data-remove');
	}}, '.type_action');

	/****** SUBMIT QUOTATION FORM*******/
	/*$(document).on({submit:function(e){
	    e.preventDefault();
	    var url,form_data;
	    $('#ajax_status').removeClass('hide_this');
	    url= $(this).attr('action');
	    $.post(url,$(this).serialize(),function(r){
	    	$('.modal-header a').click();
	        if(r==1){
	            ajax_success_message("<h4 style='color:#fff;font-weight: bold;margin-top:5%'>Action Performed!!!<h4>");
	        }else{
	            ajax_success_message("<h4 style='color:#fff;font-weight: bold;margin-top:5%'>Action Could Not Perform!!!<h4>");
	        }
	    });
	}}, '.conversation_form');*/


	/************HIDE AND SHOW FOR MULTIPLE-PRODUCT-QUOTATION TEXT IN QUOTATION TABLE*******************************/
	$(document).on({click:function(e){
		e.preventDefault();
	    var target_id = $(this).attr('ca_target_id');
	    var _this = $(this);
	    if(_this.hasClass('clicked')){
	        _this.removeClass('clicked');
	        $(target_id).slideUp(300);
	    }else{
	        _this.addClass('clicked');
	        $(target_id).slideDown(300);
	    }
	}},'.do_collaps');

	$(document).on({click:function(e){
	    e.preventDefault();
	    var text_mess = $.trim($(this).parent().children('textarea').val());
	    var form_class = $(this).attr('formclass');
	    var url = $('.'+form_class).attr('action');
	    if(text_mess == ''){
	    	alert ('Please write your message first');
	    	$(this).parent().children('textarea').focus();
	    }else{
	    	$.post(url,$('.'+form_class).serialize(),function(r){
		    	$('.modal-header a').click();
		        if(r==1){
		        	var re_url = window.location.href;
		            window.location.href = re_url;
		        }else{
		            alert(JSON.stringify(r));
		        }
		    });
	    }
	    
	}},'.this_product_quotation_btn');

	$(document).on({click:function(e){
	    e.preventDefault();
	    if($.trim($('[name="messages"]').val()) == ''){
	    	alert ('Please write your message first');
	    	$('[name="messages"]').focus();
	    }else{
	    	if($.trim($('[name="quantity"]').val()) == ''){
		        $('[name="quantity"]').focus();
		        $('[name="quantity"]').css('box-shadow','0px 0px 3px 1px red');
		    }else if($.trim($('[name="unit_price"]').val()) == ''){
		        $('[name="quantity"]').css('box-shadow','');
		        $('[name="unit_price"]').focus();
		        $('[name="unit_price"]').css('box-shadow','0px 0px 3px 1px red');
		    }else{
		        $('[name="quantity"]').css('box-shadow','');
		        $('[name="unit_price"]').css('box-shadow','');
			    var url= '{{ URL::to("post_conversation") }}';
			    $.post(url,$('.conversation_form').serialize(),function(r){
			        if(r==1){
			            var re_url = window.location.href;
		            	window.location.href = re_url;
			        }else{
			            alert(JSON.stringify(r));
			        }
			    });
		    }
	    }
	}},'.submit_single_msg');





</script>
@stop