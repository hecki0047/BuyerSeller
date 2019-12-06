@extends('frontend.layouts.about-us-topbar')

@section('own_styles')
<style type="text/css">
	.buying-line2{
		padding-left: 0;
	    padding-top: 10%;
	    padding-bottom: 5%;
	}
	.add-c{
		border: 0 none; width: 110px;position: relative;
	}
	.add-p .fa{padding:0;}
	.add-p {
	    width: 110px;
	    display: block;
	    padding-left: 0;
	    text-align: center;
	    border: 1px solid #ddd;
	    border-radius: 10px !important;
	}
	span.add-details-list {
	    display: none;
	    position: absolute;
	    top: 10px;
	    border-radius: 10px !important;
	    width: 100%;
	    left: 0px;
	    z-index: 999;
	    border: 1px solid #ddd;
	    background: #fff;
	    transition: all .3s ease;
	}
	span.add-details-list ul li a{
		display: block;
		padding: 3px 0;
		padding-left: 15px; 

	}
	.add-c:hover span.add-details-list{
		display: block !important;
		top: 0 !important;
		transition: all .3s ease;
	}
	span.add-details-list ul li a:hover{
		background: #ddd;
	}
</style>
@endsection
@section('content')
<div class="container">
	<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;">
                        <li class="top-path-li"><a href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"><a href="{{URL::to('company/dashboard')}}" class="top-path-li-a"> Dashboard <i class="fa fa-angle-right top-path-icon"></i></a></li>

                         <li class="top-path-li"><a href="" class="top-path-li-a"> Sample manage <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                        
                    </ul>
            </div>
    
  </div>
	<div class="row" id="row" style="margin-top:2%;background-color: #fff" >

		<input type="hidden" id="selected_status" name="selected_status" value="{{$current_status}}">
		<input type="hidden" id="selected_view" name="selected_view" value="{{$unread}}">
		<input type="hidden" name="search_val" value="{{$search_str}}">
		<input type="hidden" name="date_val" value="{{$search_date}}">

		<div class="col-sm-12 padding_0">
			<div class="col-sm-2 padding_0">
					@include('frontend.layouts.dashboard-aside')


			</div>

			

			<div class="col-sm-10">
				
				<div class="col-sm-12 padding_0">
					<div class="col-sm-6 padding_0">
						<h2 class="" style="color: #000; padding-bottom: 2%; font-size: 2em;line-height: 1;margin-top: .75em;">Buyer request list for product</h2>
					</div>
					<div class="col-sm-6 padding_0 text-right">
						<h2><a href="{{ URL::to('get-qutations') }}"   style="font-size: 14px; font-weight: bold; color: #000; text-decoration: underline;">Post a buying request</a></h2>
					</div>
						
				</div>

				<div class="col-sm-12 padding_0" style="padding-top: 15px; padding-bottom: 15px;">
						<?php
						// App\Model\BdtdcSupplierQuery::where('status',0)->update(['status'=>1]);
						/*
					    Status list
					    ------------
					        1 = Pending
					        2 = Approved
					        3 = Rejected
					        4 = Completed
					        5 = Closed
					    */
					    $all_status = 0;
						$unread_quote = 0;
						$pending = 0;
						$approved = 0;
						$rejected = 0;
						$completed = 0;
						$closed = 0;
						if (count($list) > 0) {
							$all_status = count($list);
							foreach ($list as $inq_all) {
								if($inq_all->all_quote_messages){
									if(count($inq_all->all_quote_messages) > 0){
										foreach ($inq_all->all_quote_messages as $inq_mess) {
											if($inq_mess->sender != Sentinel::getUser()->id && $inq_mess->is_view == 0){
												$unread_quote++;
											}	
										}
									}
								}
								if($inq_all->status == 0){
									// $eid = $inq_all->id;
									App\Models\SupplierQuery::where('id',$inq_all->id)->update(['status'=>1]);
								}
								if($inq_all->status == 1){
									$pending++;
								}else if($inq_all->status == 2){
									$approved++;
								}else if($inq_all->status == 3){
									$rejected++;
								}else if($inq_all->status == 4){
									$completed++;
								}else if($inq_all->status == 5){
									$closed++;
								}
							}
						}
						// dd($list);
						?>
						<div class="col-sm-8 padding_0">

						     <input name="search_all_inq" class="" type="text" style="height: 30px; border-color: #ddd; text-align: center; border:0 none; border:1px solid #ddd; border-right:none;" placeholder="Search" value="{{$search_str}}"><span class="all_inq_search_btn" style="border:1px solid #ddd; padding: 6px;cursor: pointer;"><i class="fa fa-search" aria-hidden="true" style="color: #728398;padding: 3px;"></i></span>
							<select id="rfq-manage-select" class="buyer-rq-select" style="height: 30px;border-color: #ddd;border-radius: 4px !important;text-align: center;border: 1px solid #ddd;margin-left: 1%;">
						          <option value="0" selected="&quot;selected&quot;">All Status {{$all_status>0?'('.$all_status.')':''}}</option>
						          <option value="1">Pending {{$pending>0?'('.$pending.')':''}}</option>
						          <option value="2">Approved {{$approved>0?'('.$approved.')':''}}</option>
						          <option value="3">Rejected {{$rejected>0?'('.$rejected.')':''}}</option>
						          <option value="4">Completed {{$completed>0?'('.$completed.')':''}}</option>
						          <option value="5">Closed {{$closed>0?'('.$closed.')':''}}</option>
        					</select>

        					<div style="display:inline-block;margin-left: 1%;" class="dropdown">
							    <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 13px;" type="button" id="menu3" data-toggle="dropdown">Date
							    <span class="caret"></span></button>
							    <ul style="min-width: 140px;" class="dropdown-menu" role="menu" aria-labelledby="menu3">
							      <li role="presentation"><a class="all_inq_date" data-date_target="0" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">All</a></li>
							      <li role="presentation"><a class="all_inq_date" data-date_target="3" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">3 days ago</a></li>
							      <li role="presentation"><a class="all_inq_date" data-date_target="7" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">7 days ago</a></li>
							      <li role="presentation"><a class="all_inq_date" data-date_target="30" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">30 days ago</a></li>
							    </ul>
							</div>
							<label class="" style="margin-left: 1%;"><input type="checkbox" id="show-unread-btn" <?php if($unread == 'true'){echo 'checked';}else{echo '';} ?>> Unread quotes {{$unread_quote>0?'('.$unread_quote.')':''}}</label>
						</div>
						<div class="col-sm-4 padding_0">
							@if(isset($list))
							<div class="ui-pagination ui-pagination-pager util-clearfix rfq-manage-list-pagination">
								            
								              <a title="previous" href="{{$list->previousPageUrl()}}"><span class="ui-pagination-prev ui-pagination-disabled" style=" background-position: -44px 3px;cursor:pointer;">previous</span></a>
								            
								            
								              <a title="next" href="{{$list->nextPageUrl()}}"><span class="ui-pagination-next ui-pagination-disabled" style=" background-position:-27px 3px;cursor:pointer;">next</span></a>
								            
								            <label class="ui-label">
								            	@if($list->lastPage() > 0)
								                {{$list->currentPage()}}
								                @else
													{{$list->lastPage()}}
								                @endif
								                 of {{$list->lastPage()}} Page
								            </label>
							</div>
							@endif
							
						</div>
				</div>

				@if($list == null)
				@if($list)
			        @if(count($list) > 0)
			        @foreach($list as $inqMess)
					
					<div class="col-sm-12 col-md-12 padding_0 head-query" style="margin-right: 0px; margin-left: 0px">

                    <div class="col-sm-12 col-md-12 padding_0 head-query-top">
                                <div class="col-sm-4 padding_0">
										<?php
										$unread_quote_single = 0;
										if($inqMess->all_quote_messages){
											if(count($inqMess->all_quote_messages)>0){
												foreach ($inqMess->all_quote_messages as $sing_msg) {
													if($sing_msg->sender != Sentinel::getUser()->id && $sing_msg->is_view == 0){
														$unread_quote_single++;
													}
												}
											}
										}
										?>
                                        <span style="display: block;float: left;padding: 5px 10px;">
                                            <!-- <i style="cursor:pointer;" class="fa fa-flag inq_flag_hover " ca_inquery_id="{-{$inq_value->id}-}" ca_action="join_flag" ca_reverse_from="flag" aria-hidden="true"></i> -->
                                            <i class="fa fa-envelope" title="{{$unread_quote_single}} unread message" aria-hidden="true" style="color: #4ad44a; font-size: 17px; top: 1px; position: relative;padding-right: 0px;"></i> {{$unread_quote_single>0?'('.$unread_quote_single.')':''}}
                                            <input class="star" type="checkbox" title="bookmark page" style="margin-right: 5px">
										</span>
                                        <div title="Inquiry ID" style="display: block;float: left; padding: 9px 5px;">{{$inqMess->inquery_id}}</div>
                                        <div title="Date" style="display: block;float: left; padding: 9px 15px;">{{ date('Y-m-d', strtotime($inqMess->updated_at)) }}</div>
                                </div>
                                <div title="" class="col-sm-3" style="    padding: 9px 0px;">
                                    
                                </div>
                                <div title="Sender's Company" class="col-sm-3" style="padding: 9px 0px;">
                                    @if($inqMess->bdtdcInqueryMessageUser)
									@if($inqMess->bdtdcInqueryMessageUser->companies)
										@if($inqMess->bdtdcInqueryMessageUser->companies->name_string)
										<a   title="Sent To: {{$inqMess->bdtdcInqueryMessageUser->first_name}} {{$inqMess->bdtdcInqueryMessageUser->last_name}}" href="{{URL::to('contact/'.$inqMess->bdtdcInqueryMessageUser->companies->name_string->name,$inqMess->bdtdcInqueryMessageUser->companies->id,is_secured())}}">Sent To: {{$inqMess->bdtdcInqueryMessageUser->first_name}} {{$inqMess->bdtdcInqueryMessageUser->last_name}}</a>
										@else
										<a   title="Sent To: {{$inqMess->bdtdcInqueryMessageUser->first_name}} {{$inqMess->bdtdcInqueryMessageUser->last_name}}" href="{{URL::to('contact/'.'Company-Description',$inqMess->bdtdcInqueryMessageUser->companies->id,is_secured())}}">Sent To: {{$inqMess->bdtdcInqueryMessageUser->first_name}} {{$inqMess->bdtdcInqueryMessageUser->last_name}}</a>
										@endif
									@endif
									@else
										Sent To: {{$inqMess->bdtdcInqueryMessageUser->first_name}} {{$inqMess->bdtdcInqueryMessageUser->last_name}}
									@endif
                                </div>
                                <div class="col-sm-2 padding_0" style="padding: 9px 0px;">
                                    @if($inqMess->bdtdcInqueryMessageUser)
									@if($inqMess->bdtdcInqueryMessageUser->companies)
										@if($inqMess->bdtdcInqueryMessageUser->companies->name_string)
										<a   title="{{$inqMess->bdtdcInqueryMessageUser->companies->name_string->name}}" href="{{URL::to('Home/'.$inqMess->bdtdcInqueryMessageUser->companies->name_string->name,$inqMess->bdtdcInqueryMessageUser->companies->id,is_secured())}}">{{substr($inqMess->bdtdcInqueryMessageUser->companies->name_string->name,0,30)}}</a>
										@else
										<a   title="Name not available" href="{{URL::to('Home/Name not available',$inqMess->bdtdcInqueryMessageUser->companies->id,is_secured())}}">Name not available</a>
										@endif
									@endif
									@else
										Company Not available
									@endif 
                                </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 padding_0">
                                <div class="col-sm-4">
                                    <div style="padding: 25px 0px;">
										<?php
										$inq_title = 'Not available';
										if($inqMess->bdtdcInquery){
											if($inqMess->bdtdcInquery->inquery_title != ''){
												$inq_title = $inqMess->bdtdcInquery->inquery_title;
											}else{
												if($inqMess->bdtdcInquery->inq_products_description){
													$inq_title = $inqMess->bdtdcInquery->inq_products_description->name;
												}
											}
										}
										?>
                                                    
                                        <a href="{{URL::to('product-sourcing/view',$inqMess->inquery_id,is_secured())}}"  class="rfq-detail-title" title="Quotation for : {{$inq_title}}" >{{substr($inq_title,0,50)}}</a>
                            </div>
                                    
                                </div>
                                <div class="col-sm-3 padding_0" style="padding-top: 4.6%;">
                                                    <!-- <div class="rat">30</div>
                                                    <div class="rat">Sets</div>
                                                    <div class="rat">US $</div> -->
                                </div>
                               
                                <div class="col-sm-3 padding_0" style="padding-top: 4.6%;">
                                            <div class="aui2-grid-quo-status-col">
                                                <span><?php
                                                	if($unread_quote_single>0){
                                                		echo '('.$unread_quote_single.') New';
                                                	}else{
                                                		if($inqMess->status == 1){
                                                			echo 'Pending';
                                                		}else if($inqMess->status == 2){
                                                			echo 'Approved';
                                                		}else if($inqMess->status == 3){
                                                			echo 'Rejected';
                                                		}else if($inqMess->status == 4){
                                                			echo 'Completed';
                                                		}else if($inqMess->status == 5){
                                                			echo 'Closed';
                                                		}
                                                	}
                                                ?></span>
                                            </div>
                                </div>
                                <div class="col-sm-2 padding_0" style="padding-top: 4.6%;">
                                        <div>
                                            <a href="{{ URL::to('quotation/quote',$inqMess->id,is_secured()) }}" class="pp-detail ui2-button-primary" style="padding: 6px 7px;color: #fff !important;"> View Details</a>
                                        </div>
                                </div>
                    </div>
                
                </div>

				
				@endforeach
				@else
				<div class="col-sm-12 col-md-12 padding_0 head-query text-center" style="padding: 40px;margin-right: 0px; margin-left: 0px">

					No entry found!

				</div>
				@endif
				@else
				<div class="col-sm-12 col-md-12 padding_0 head-query text-center" style="padding: 40px;margin-right: 0px; margin-left: 0px">

					No entry found!

				</div>
				@endif
				@endif

				



				<div class="col-sm-12">
					
					<p style="font-size: 20px;margin-left: -2%;">Buyer request list for product</p>
					

					@foreach($list as $l)
					<div class="col-sm-12" style="border:1px solid #999; margin-bottom: 12px;margin-top:2%">
							<div class="col-sm-12">
								<div class="col-sm-9">
									<a href="{{URL::to('list/view/requested/sample/buyer',$l->id,is_secured())}}"  class="rfq-detail-title" title=""  >
										@if($l->request_product)
											{{$l->request_product->product_name}}
										@endif
									</a>
								</div>
								<div class="col-sm-3 padding_0">
									<div class="detail-advanced">
												<div class="">
														
														<ul style="display: block;padding: 0; margin: 0; line-height: 30px;font-size: 13px; color: #666; float: right; padding-top: 11px; position: absolute;top: 4%; left: 23%;">
															<!-- Updated:{{$l->created_at}}</li> -->
															<li class="ul-time-li">Arrival Time:</li>
															<li class="ul-time-li">{{ date('Y-m-d', strtotime($l->Expected_Date_of_Arriva))}}</li>
															
													
												</ul>
												</div>
												
									</div>
									
								</div>
							</div>
							<div class="col-sm-12">
							
								<div class="col-sm-6">
											<span><i class="fa fa-circle" aria-hidden="true" style="color: #a0a0a0; position: absolute; top: -6px; left: -15px;"></i></span>
											<div style="border:1px solid #a0a0a0;"></div>
											<div class="line">
													<p>Buying Request</p>
													<div>Status: <span>Approved</span></div>
													<div style="border: 0 none; width: 110px;">
														<a href="#"  class="add-p">Add Details</a> 
														<span class="add-details-list" style="display: none;">
															<ul style="padding: 0; padding-left: 15px; padding-top: 5px; line-height: 15px;">
																<li><a href="#">Post Again</a></li>
																<li><a href="#">Close</a></li>
															</ul>
														</span>
													</div>
											</div>
									
								</div>
								<div class="col-sm-6">
										<span><i class="fa fa-circle" aria-hidden="true" style="color: #ff751a; position: absolute; top: -6px; left: -7px;"></i></span>
										<div style="border:1px dotted #a0a0a0;"></div>
										<span><i class="fa fa-circle" aria-hidden="true" style="color: #ff751a; position: absolute; top: -6px; right: -15px;"></i></span>
										<div class="line" style="padding-left: 0; margin-left: -15%;">
													<p>Requests</p>
													<ul style="padding: 0; line-height: 25px;">
														<li><a></a></li>
													    <li><a></a></li>
													</ul>
													
													
										</div>
										<div style="float: right;position: absolute; top: 14%; right: 0; font-size: 16px;">
											<a href="">{{$l->buyer_company->name_string->name}}</a>
										</div>
									
								</div>
							</div>

					</div>
					@endforeach

				</div>

				<div class="col-sm-12">
					<div class="col-sm-8">
						
					</div>
					<div class="col-sm-4 padding_0">
							@if(isset($list))
							<div class="ui-pagination ui-pagination-pager util-clearfix rfq-manage-list-pagination">
								            
								              <a title="previous" href="{{$list->previousPageUrl()}}"><span class="ui-pagination-prev ui-pagination-disabled" style=" background-position: -44px 3px;cursor:pointer;">previous</span></a>
								            
								            
								              <a title="next" href="{{$list->nextPageUrl()}}"><span class="ui-pagination-next ui-pagination-disabled" style=" background-position:-27px 3px;cursor:pointer;">next</span></a>
								            
								            <label class="ui-label">
								            	@if($list->lastPage() > 0)
								                {{$list->currentPage()}}
								                @else
													{{$list->lastPage()}}
								                @endif
								                 of {{$list->lastPage()}} Page
								            </label>
							</div>
							@endif
							
						</div>
				</div>
				
				
		    </div>

	</div> 
</div>

	@stop

