<?php
use App\Models\Product;
use App\Models\SupplierInquery;
use App\Models\JoinQuotation;
use App\Models\InqueryMessage;
?>
@if(count($inquery) > 0)
@foreach($inquery as $inq_value)
	@if($inq_value->is_join_quotation == 1)
	@php
	$inq_id_array = explode(',', $inq_value->product_id);
	@endphp
		<div class="col-sm-12 col-md-12 padding_0 head-query" style="margin-right: 0px; margin-left: 0px">

						<div class="col-sm-12 col-md-12 padding_0 head-query-top">
									<div class="col-sm-4 padding_0">

											<span style="display: block;float: left;padding: 5px 10px;">
											<span class="lf-dots">
													<i style="font-size: 15px; position: relative; top: 1.5px; color: #1f5d9d;" class="fa fa-ellipsis-v" aria-hidden="true"></i>
														<ul style="min-width: 140px;" class="lf-d-inner" >
      														<li >
      															<a class=""  href="#">Move to <i class="fa fa-angle-right pull-right"></i></a>
      															<ul class="lf-drop">
      																<li role="presentation" data-remove="0"><a class="add_to" style="" role="menuitem" tabindex="-1" href="#">Ungroup</a></li>
														      	@if($bdtdc_custom_folder)
																	@foreach($bdtdc_custom_folder as $folder_name)
																		<li role="presentation" data-remove="{{$folder_name->id}}"><a class="add_to" style="" role="menuitem" tabindex="-1" href="#">{{$folder_name->name}}</a></li>
																	@endforeach
																@endif
      															</ul>
      														</li>
      														<li><a href="#" class="all_inquery_action" targeted="flag">Set flag</a></li>
														      <li><a href="#" class="mark_action" data-target_action="mark_read">Mark as Read</a></li>
														      <li><a href="#" class="mark_action" data-target_action="mark_unread">Mark as Unread</a></li>
														      <li><a href="#" class="mark_action" data-target_action="add_contact">Add Contacts</a></li>
															<li ><a class=""  href="#">Report Spam</a></li>
					    								</ul>
												</span>
												<input type="checkbox" inquery_id_data="{{$inq_value->id}}" data_quotation_type="join" class="inq_select_single mail_check" name="dtata" style="margin-right: 3px">
												<input class="star <?php if($inq_value->flag == 1){echo "reverse_action_inquery";}else{echo "inquery_action";} ?>" type="checkbox" title="bookmark page" ca_inquery_id="{{$inq_value->id}}" ca_action="join_flag" ca_reverse_from="flag" style="margin-right: 3px" <?php if($inq_value->flag == 1){echo "checked";}?>>

								@php
									$inq_total_count = 0
								@endphp
									@if($inq_value->views == 0)
									@php
										$inq_total_count++
									@endphp
									@endif
								
								@foreach($inq_id_array as $inq_id)
								@php
									$inq_mess_count = BdtdcInqueryMessage::where('inquery_id',$inq_value->id)
													->where('product_id',$inq_id)
													->where('sender','!=',Sentinel::getUser()->id)
													->where('is_view',0)
													->get();
									$inq_total_count += count($inq_mess_count);
								@endphp
								@endforeach
								@if($inq_total_count > 0)
									<i class="fa fa-envelope" title="{{$inq_total_count}} unread message" aria-hidden="true" style="color: #4ad44a; font-size: 17px; top: 1px; position: relative;"></i>(<?php if($inq_total_count > 0){
									echo $inq_total_count;
								} ?>)
								@endif
											</span>
											<div style="display: block;float: left; padding: 9px 25px;padding-right: 0px">Inquiry ID:</div>
											<div style="display: block;float: left; padding: 9px 5px;">{{$inq_value->id}}</div>
											<div style="display: block;float: left; padding: 9px 15px;">{{date('d/m/Y',strtotime($inq_value->created_at))}}</div>
									</div>
									<div class="col-sm-3" style="    padding: 9px 0px;">
										<i class="icon-p manpower-pro-icon" style="margin-top: -6px;"></i>
										@if($inq_value->inq_sender_user)
										@php
											$full_name = $inq_value->inq_sender_user->first_name.' '.$inq_value->inq_sender_user->last_name;
										@endphp
										@else
										@php
											$full_name = "not available"
										@endphp
										@endif
										<span title="{{$full_name}}" style="padding-left: 20px;margin-left: 20px; padding-top: 9px;">
										{{$full_name}}</span>
									</div>
									@php
										$sender_comp_name = 'Not Available';
									@endphp
										@if($inq_value->sender_company){
											@if($inq_value->sender_company->name_string)
												@php
													$sender_comp_name = $inq_value->sender_company->name_string->name;
												@endphp
											@endif
										@endif
									<div title="{{ $sender_comp_name }}" class="col-sm-3" style="padding: 9px 0px;">
										<a style="font-weight:600;" target="_blank" href="{{ URL::to('Home/'.$sender_comp_name,$inq_value->sender_company->id,is_secured()) }}">{{ $sender_comp_name }}</a>
									</div>
									<div class="col-sm-2 padding_0" style="padding-left: 20px;">
										<div style="display:block; float: left;">
										<i style="    margin-right: 7px;float: right; margin-top: 7px;" class="ui2-flag ui2-flag-
										@if($inq_value->sender_company->location_of_reg_string)
											{{ strtolower($inq_value->sender_company->location_of_reg_string->iso_code_2)}}
											@endif u-inline-block flag-country"></i>
										</div>
										<div style="display: inline-block;">
                                       		<img title="gold" style="width: 35px; height: 35px; " src=" {{ asset('bdtdc-product-image/home-page/Gold-membership.png') }}">
                                     	</div>
                                     	<div style="display: inline-block;">
                                     			<img style="margin-top: 2px; width: 35px; height: 35px;" itemprop="image"  src="{!! asset('assets/images/Buyer-protection-home.png') !!}" alt="Buyer protection">
                                     	</div> 
									</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
									<div class="col-sm-4">
										<div style="padding: 25px 0px;">

										@foreach($inq_id_array as $inq_id)
											@php 
											$join_inquiry_product = BdtdcProduct::where('id',trim($inq_id))->first()
											@endphp
					
											@if($join_inquiry_product->product_name)
												<a style="color: #333;font-size: 14px;font-weight: 400;margin-left: 7px;" title="{{$join_inquiry_product->product_name->name}}" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$join_inquiry_product->product_name->name).'='.mt_rand(100000000, 999999999).$join_inquiry_product->id,is_secured()) }}">{{substr($join_inquiry_product->product_name->name,0,35)}}..</a>
											@else
												<a style="color: #333;font-size: 14px;font-weight: 400;margin-left: 7px;" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-','product name not available').'='.mt_rand(100000000, 999999999).$join_inquiry_product->id,is_secured()) }}">product name not available</a>
											@endif
											<br>
										@endforeach
										</div>
										
									</div>
									<div class="col-sm-3 padding_0" style="padding-top: 4.6%;">
														<!-- <div class="rat">30</div>
														<div class="rat">Sets</div>
														<div class="rat">US $</div> -->
									</div>
									<div class="col-sm-1 padding_0" style="padding-top: 4.6%;">
												<div class="aui2-grid-quo-status-col" style="color: #FF751A">
														<!-- <span style="color: #FF751A;">US $</span> -->
												</div>
									</div>
									<div class="col-sm-2 padding_0" style="padding-top: 4.6%;">
												<div class="aui2-grid-quo-status-col">
													@if($inq_value->views == 1)
														<span>Ongoing</span>
													@else
														<span>New Inquiry</span>
													@endif
												</div>
									</div>
									<div class="col-sm-2" style="padding-top: 4.6%;">
											<div>
												<a  href="#" data-inquery_id="{{$inq_value->id}}" ca_quotation_type="join" data-toggle="modal" data-target="#chat_modal" class="pp-detail go_to_conversation ui2-button-primary" style="padding: 6px 7px;color: #fff !important;"> View details</a>
											</div>
									</div>
						</div>
					
					</div>
					@else
					<div class="col-sm-12 col-md-12 padding_0 head-query" style="margin-right: 0px; margin-left: 0px">

						<div class=" col-sm-12 col-md-12 padding_0 head-query-top">
									<div class="col-sm-4 padding_0">

											<span style="display: block;float: left;padding: 5px 10px;">
												<input type="checkbox" inquery_id_data="{{$inq_value->id}}" data_quotation_type="single" class="inq_select_single mail_check" name="dtata" style="margin-right: 5px">
												
												<input class="star @if($inq_value->flag == 1)
												reverse_action_inquery
												@else
												inquery_action
												@endif
												" type="checkbox" title="bookmark page" ca_inquery_id="{{$inq_value->id}}" ca_action="single_flag" ca_reverse_from="flag" style="margin-right: 5px" 
												@if($inq_value->flag == 1)
												checked
												@endif
												>
								@php
									$inq_total_count = 0;
								@endphp
									@if($inq_value->views == 0)
									@php
										$inq_total_count++
									@endphp
									@endif
									@php
									$inq_mess_count = BdtdcInqueryMessage::where('inquery_id',$inq_value->id)
													->where('product_id',$inq_value->product_id)
													->where('sender','!=',Sentinel::getUser()->id)
													->where('is_view',0)
													->get();
									$inq_total_count += count($inq_mess_count);
								
									@endphp
								@if($inq_total_count > 0)
									<i class="fa fa-envelope" title="{{$inq_total_count}} unread message" aria-hidden="true" style="color: #4ad44a; font-size: 17px; top: 1px; position: relative;"></i>(@if($inq_total_count > 0)
									{{ $inq_total_count }}
								@endif)

								@endif
											</span>

											<div style="display: block;float: left; padding: 9px;padding-right: 0px">Inquiry ID:</div>
											<div style="display: block;float: left; padding: 9px 5px;">{{$inq_value->id}}</div>
											<div style="display: block;float: left; padding: 9px;">{{date('d/m/Y',strtotime($inq_value->created_at))}}</div>
									</div>
									<div class="col-sm-3" style="padding: 9px 0px;">
										<i class="icon-p manpower-pro-icon" style="margin-top: -6px;"></i>
										@if($inq_value->inq_sender_user)
											@php
											$full_name = $inq_value->inq_sender_user->first_name.' '.$inq_value->inq_sender_user->last_name;
											@endphp
										@else
										@php
											$full_name = "not available"
										@endphp
										@endif
										<span title="{{$full_name}}" style="padding-left: 20px; padding-top: 9px; margin-left: 20px;">
										{{$full_name,0,15}}</span>
									</div>
									@php
										$sender_comp_name = 'Not Available'
									@endphp
										@if($inq_value->sender_company)
											@if($inq_value->sender_company->name_string)
											@php
												$sender_comp_name = $inq_value->sender_company->name_string->name
											@endphp
											@endif
										@endif
									<div title="{{ $sender_comp_name }}" class="col-sm-3 padding_0" style="padding: 9px 0px;">
											<a style="font-weight:600;" target="_blank" href="{{ URL::to('Home/'.$sender_comp_name,($inq_value->sender_company?$inq_value->sender_company->id:0),is_secured()) }}">{{$sender_comp_name}}</a>
									</div>
										<div class="col-sm-2 padding_0" style="padding-left: 20px;">
										<div title="Sender Country" style="display:block; float: left;">
										<i title="Sender From {{ $inq_value->sender_company?$inq_value->sender_company->location_of_reg_string->name:''}}" style="    margin-right: 7px;float: right; margin-top: 7px;" class="ui2-flag ui2-flag-
											@if($inq_value->sender_company)
												@if($inq_value->sender_company->location_of_reg_string)
												{{strtolower($inq_value->sender_company->location_of_reg_string->iso_code_2)}}
												@else
												@endif
												@endif u-inline-block flag-country"></i>
										</div>
										<div style="display: inline-block;">
										<a href="{{URL::to('Gold-supplier',null,is_secured())}}" target="_blank">
                                       		<img title="Gold Suppliers:pre-qualified suppliers" style="width: 35px; height: 35px; " src=" {{ asset('bdtdc-product-image/home-page/Gold-membership.png') }}"></a>
                                     	</div>
                                     	<div style="display: inline-block;">
                                     	<a href="{{URL::to('BuyerChannel/pages/trade_assurance',5,is_secured())}}" target="_blank">
                                     			<img title="Buyer Protection: Ensures on-time shipment and pre-shipment product quality" style="margin-top: 2px; width: 35px; height: 35px;" itemprop="image"  src="{!! asset('assets/images/Buyer-protection-home.png') !!}" alt="Buyer protection"></a>
                                     	</div> 
									</div>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
									<div class="col-sm-4">
											<div style="padding: 25px 0px;">
											@if($inq_value->bdtdc_product)
											@if($inq_value->bdtdc_product->product_image_new)
												<img itemprop="image" title="{{ $inq_value->bdtdc_product->product_name->name }}" class="unit-img-wrap" src="{!! asset($inq_value->bdtdc_product->product_image_new->image,is_secured()) !!}" alt="{{ substr($inq_value->bdtdc_product->product_name->name, 0, 50) }}">
											@else
												<img itemprop="image" title="Product name not available" class="unit-img-wrap" src="{!! asset('uploads/no-image.jpg',is_secured()) !!}" alt="Product name not available">
											@endif
												@if($inq_value->bdtdc_product->product_name)
													<a style="color: #333;font-size: 14px;font-weight: 400;margin-left: 7px;flex:1" title="{{$inq_value->bdtdc_product->product_name->name}}" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$inq_value->bdtdc_product->product_name->name).'='.mt_rand(100000000, 999999999).$inq_value->product_id,null,is_secured()) }}">{{substr($inq_value->bdtdc_product->product_name->name,0,25)}}</a>
												@else
													<a style="color: #333;font-size: 14px;font-weight: 400;margin-left: 7px;flex:1" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-','product name not available').'='.mt_rand(100000000, 999999999).$inq_value->product_id,null,is_secured()) }}">product name not available</a>
												@endif
												@endif
											</div>
										
									</div>
									<div class="col-sm-3 padding_0" style="padding-top:4.2%;">
														<div class="rat" style="padding-right: 0px">
														@if($inq_value->quantity == 0 || $inq_value->quantity == '' || $inq_value->quantity == null)
															@if($inq_value->p_price)
																{{$inq_value->p_price->product_MOQ}}
															@else
															0
															@endif
														@else
															{{$inq_value->quantity}}
														@endif
														</div>
														<div class="rat" style="padding-right: 0px">
														@if($inq_value->inq_unit_id)
															{{$inq_value->inq_unit_id->name}}
														@else
														@if($inq_value->bdtdc_product)
															@if($inq_value->bdtdc_product->product_unit)
															{{$inq_value->bdtdc_product->product_unit->name}}
															@else
															Pieces
															@endif
														@else
														Pieces
														@endif
														@endif
														</div>
														
									</div>
									<div class="col-sm-1 padding_0" style="padding-top: 4.6%;">
												<div class="aui2-grid-quo-status-col" style="color: #FF751A">
														<span style="color: #FF751A;">
														@if($inq_value->p_price)
															@if(trim($inq_value->p_price->currency) == '' )
															USD
															@else
															{{$inq_value->p_price->currency}}
															@endif
														@else
														USD
														@endif
														</span>
												</div>
									</div>
									<div class="col-sm-2 padding_0" style="padding-top: 4.6%;">
												<div class="aui2-grid-quo-status-col">
														@if($inq_value->views == 1)
															<span>Ongoing</span>
														@else
															<span>New</span>
														@endif
												</div>
									</div>
									<div class="col-sm-2 col-md-2 col-lg-2" style=" padding-top: 4.6%;">
											<div>
												<a  href="#" data-inquery_id="{{$inq_value->id}}" ca_quotation_type="single" data-toggle="modal" data-target="#chat_modal" class="pp-detail go_to_conversation ui2-button-primary" style="padding: 6px 7px;color: #fff !important;"> View details</a>
											</div>
									</div>
						</div>
					
				</div>
	@endif
	
@endforeach

@else

<div class="col-sm-12 col-md-12 padding_0 head-query text-center" style="padding: 40px;margin-right: 0px; margin-left: 0px">
	
	No entry found!

</div>
@endif
