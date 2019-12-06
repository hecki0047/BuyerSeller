@extends('frontend.layouts.about-us-topbar')
@section('page_css')
{{-- <link property='stylesheet' href="{!! asset('assets/frontend/css/dashboard.css',is_secured()) !!}" rel="stylesheet"> --}}
<link property='stylesheet' href="{!! asset('assets/frontend/css/spectrum.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/frontend/css/why-bdtdc.css',is_secured()) !!}" rel="stylesheet">

@endsection
@section('own_styles')
<style type="text/css">
   .top-path-li {
      list-style: none;
      display: inline-block;
      padding-right: 10px;
      margin: 0;
   }

   .top-path-li,
   .top-path-li-a {
      color: #333;
      font-size: 13px;
      overflow: hidden;
   }
</style>

@endsection
@section('content')
@php
use App\Models\Products;
use App\Models\SupplierInquery;
use App\Models\InqueryMessage;
use App\Models\JoinQuotation;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
$all_inq_data = SupplierInquery::where('product_owner_id',Sentinel::getUser()->id)
							->where('sender','!=',Sentinel::getUser()->id)
							->where('is_RFQ',0)
							->where('spam',0)
							->get();
@endphp
</div>
{!! Form::token() !!}
<br>
<div id="ajax_status" style="position: fixed;left: 40%;top: 40%;" class="hide_this_loading text-center">
   <img src="{{ URL::asset('assets/frontend/images/uploads/ajax_loading.gif',is_secured()) }}" class="img-responsive" alt="">
</div>
<!-- ---LOADING ANIMATION TRIGERED TO THIS LOADER CLASS;----- -->
<div class="loader"></div>
<div class="container">
   <div class="row" style="margin-bottom: 8px">
      <div class="col-sm-12 col-md-12 col-lg-12">
         <ul class="top-path" style="padding-bottom: 8px;padding-top: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
            <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('company/dashboard',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Dashboard</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
            <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="#" class="top-path-li-a"><span itemprop="name">Messages & Contacts</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
         </ul>
      </div>
   </div>
</div>

<div class="container">
   <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xs-3 padding_0">
         <div style="padding-right:0px;padding-left: 10px;padding-bottom: 10px;background: white;" class="col-sm-2 col-lg-2 col-md-2 ol-xs-6">
            <ul style="padding: 0; display: block; text-align: left;margin: 0; line-height: 30px; padding-left: 0px; padding-top: 3px;">
               <li style="padding-left: 18px"><a style="padding-left: 3px;" class="inbox-dashboard" href="{{URL::to('company/dashboard',null,is_secured())}}" class=""><span><i style="font-size: 21px;" class="fa fa-home" aria-hidden="true"></i> </span><span style="margin-left: -2px;">My BuyerSeller</span></a></li>
               <li style="    padding-top: 23px;"><a style="font-size: 14px" class="inbox-list"><span><i class="fa fa-angle-down" aria-hidden="true" style="color: #728398; font-size: 14px;"></i></span>My Services</a>
                  <ul style="padding-left: 5px" class="draft tabs-menu-mkn">
                     <li class="class_for_remove" style="padding-left: 15px;"><span style="padding-right: 8px;"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color: #728398; font-size: 15px;"></i></span><a href="#draft_order" class="indiv-sub-list">Draft Order</a></li>
                     <li class="class_for_remove" style="padding-left: 15px;"><span style="padding-right: 8px;"><i class="fa fa-heart-o" aria-hidden="true" style="color: #666; font-size: 15px;"></i></span><a href="#recomendations" class="indiv-sub-list">Recommendation</a></li>
                  </ul>
               </li>
               <li><a style="font-size: 14px" class="inbox-list2"><span><i class="fa fa-angle-down" aria-hidden="true" style="color: #728398; font-size: 14px;"></i></span><span>Inquiries</span></a>
                  <ul style="padding-left: 5px" class="spam-trash tabs-menu-mkn">
                     <li class="current-mkn class_for_remove" style="padding-left: 15px;"><span style="padding-right: 8px;"><i class="fa fa-keyboard-o" aria-hidden="true" style="color: #728398; font-size: 15px;"></i></span><a href="#all_inquiry"><span class="indiv-sub-list all_inquiry">All Inquiries</span> <span id="unread_inq"></span></a></li>
                     <li class="class_for_remove" style="padding-left: 15px;"><span style="padding-right: 8px;"><i class="fa fa-flag-o" aria-hidden="true" style="color: #728398; font-size: 15px;"></i></span><a href="#flagged"><span class="indiv-sub-list flagged">Flagged</span> <span id="unread_flag"></span></a></li>
                     <li class="class_for_remove" style="padding-left: 15px;"><span style="padding-right: 8px;"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color: #728398; font-size: 15px;"></i></span><a href="#spam"><span class="indiv-sub-list show_spam">Spam</span> <span id="unread_spam"></span></a></li>
                     <li class="class_for_remove" style="padding-left: 15px;"><span style="padding-right: 8px;"><i class="fa fa-paper-plane" aria-hidden="true" style="color: #728398; font-size: 15px;"></i></span><a href="#sent" class="indiv-sub-list show_sent">Sent</a></li>
                     <li class="class_for_remove" style="padding-left: 15px;"><span style="padding-right: 8px;"><i class="fa fa-trash" aria-hidden="true" style="color: #728398; font-size: 15px;"></i></span><a href="#trash" class="indiv-sub-list show_trash">Trash</a></li>
                  </ul>

               </li>
               <li><a style="font-size: 14px" class="inbox-list3"><span><i class="fa fa-angle-down" aria-hidden="true" style="color: #728398; font-size: 14px;"></i></span></a><a style="font-size: 14px" href="" class="add_field_button"><span style="    color: #333;text-decoration: none;padding-bottom: 20px;font-weight: 700;">Create New Lebel</span><i title="Create New" class="fa fa-pencil-square-o" aria-hidden="true" style="color: #728398; font-size: 15px;    padding-left: 7px;"></i></span></a>
                  <ul style="padding-left: 5px" class="folder tabs-menu-mkn">
                     <span>
                        <div class="input_fields_wrap"></div>
                     </span>
                     <li class="class_for_remove" data-remove="0" style="padding-left: 15px;display: flex"><a href="#ungroup" class="indiv-sub-list folder_message">Ungroup</a></li>
                     @if($bdtdc_custom_folder)
                     @foreach($bdtdc_custom_folder as $folder_name)
                     <li class="class_for_remove action_li drp-cat" style="padding-left: 15px;display: flex;" data-remove="{{$folder_name->id}}"><a style="flex:1" href="#ungroup" class="indiv-sub-list current_folder folder_message">{{$folder_name->name}}</a>
                        <i class="fa fa-caret-square-o-down pull-right drp-cat-i" aria-hidden="true">
                           <div class="drp-con-i">
                              <i title="Delete" class="fa fa-trash pull-right folder_action folder_show" aria-hidden="true" data-remove="{{$folder_name->id}}" data-action="delete" style="margin-top: 2px;"></i>
                              <i title="Edit" class="fa fa-pencil-square-o pull-right folder_action folder_show" aria-hidden="true" data-remove="{{$folder_name->id}}" data-action="edit" style="margin-top: 3px;"></i>
                           </div>
                        </i>
                     </li>
                     @endforeach
                     @endif
                  </ul>
               </li>

               <li><a style="font-size: 14px" class="inbox-list4"><span><i class="fa fa-angle-down" aria-hidden="true" style="color: #728398; font-size: 14px;"></i></span><span>Orders</span></a>
                  <ul style="padding-left: 5px" class="order-bd tabs-menu-mkn">
                     <li class="class_for_remove" style="padding-left: 15px;"><span style="padding-right: 8px;"><i class="fa fa-usd" aria-hidden="true" style="color: #728398; font-size: 15px;"></i></span><a href="#all_orders"><span class="indiv-sub-list show_order">All orders</span> <span id="unread_orders"></span></a></li>
                  </ul>
               </li>
            </ul>

            <input type="hidden" name="inq_main_menu" value="All Inquiries">
            <input type="hidden" name="inq_sub_menu" value="All">
            <input type="hidden" name="unread_message_val" value="
								@if($inq_sub_menu == 'New Inquiries') true @else false @endif ">
            <input type="hidden" name="search_val" value="">
            <input type="hidden" name="page_no_val" value="1">
            <input type="hidden" name="date_val" value="newToOldC">
            <input type="hidden" name="flag_val" value="false">
            <input type="hidden" name="spam_val" value="false">
            <input type="hidden" name="trash_val" value="false">
            <input type="hidden" name="group_val" value="0">

         </div>
         <div class="col-sm-10 col-lg-10 col-md-10 col-xs-24" style="padding-right: 0px">
            <div class="tab-mkn">
               <div id="draft_order" class="tab-content-mkn">
                  <p>
                     <h3 class="text-center">No draft order created yet</h3>
                  </p>
               </div>
               <div id="recomendations" class="tab-content-mkn">
                  <p>
                     <h3 class="text-center">No data found</h3>
                  </p>

               </div>
               <div id="all_inquiry" class="tab-content-mkn" style="padding: 0px">
                  <div style="clear: both;"></div>

                  <div style="clear: both;"></div>
                  <div class="col-sm-12 col-md-12 padding_0">
                     <div class="col-sm-12 col-md-12 padding_0" style="">
                        <ul class="nav nav-tabs" style="">
                           <li class="@if($inq_sub_menu == '') active @endif "><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">All Inquiries</a></li>
                           <li class=" @if($inq_sub_menu == 'New Inquiries') active @endif "><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">New Inquiries</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Awaiting Your Confirmation</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Awaiting Partner Confirmation</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Affirmed Orders</a></li>
                        </ul>

                     </div>
                  </div>
                  <div class="tab-content">

                     <div class="col-sm-12 col-md-12 padding_0 tab-pane fade in active" id="home">
                        <div class=" col-sm-12 col-md-12 padding_0 head-query-top" style="border-bottom: 0 none;padding-left: 0px;padding-right: 0px;">
                           <div class="col-sm-12" style="padding-top: 5px;padding-left: 0px;padding-right: 0px">
                              <div>
                                 <div style="display: inline-block; background: white; height: 30px; border: 1px solid #ddd; padding: 1px 11px; border-radius: 3px !important; margin-right: 5px"><input type="checkbox" class="inq_select_all"></div>

                                 <button type="button" class="btn btn-default btn-xs refresh_data" style="width: 45px; height:30px; margin-right: 5px; border-radius: 3px !important;"><span><i class="fa fa-refresh" aria-hidden="true" style="font-size: 18px; font-weight: normal;color: #999;margin-right: 0px;padding: 5px"></i></span></button>
                                 <div style="display:inline-block;margin-left: 0%;" class="dropdown">
                                    <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 15px;padding-top: 4px" type="button" id="menu3" data-toggle="dropdown">Date
                                       <span class="caret"></span></button>
                                    <ul style="min-width: 140px;" class="dropdown-menu" role="menu" aria-labelledby="menu3">
                                       <li role="presentation"><a class="all_inq_date" data-date_format="newToOldU" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">new to old by update time</a></li>
                                       <li role="presentation"><a class="all_inq_date" data-date_format="oldToNewU" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">old to new by update time</a></li>
                                       <li role="presentation"><a class="all_inq_date" data-date_format="newToOldC" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">new to old by created time</a></li>
                                       <li role="presentation"><a class="all_inq_date" data-date_format="oldToNewC" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">old to new by created time</a></li>
                                    </ul>
                                 </div>
                                 <div style="display:inline-block; margin-right: 5px" class="dropdown">
                                    <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 13px;" type="button" id="menu1" data-toggle="dropdown">Move to
                                       <span class="caret"></span></button>
                                    <ul style="min-width: 140px;" class="dropdown-menu add_to_main" role="menu" aria-labelledby="menu1">
                                       <li role="presentation" data-remove="0"><a class="add_to" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">Ungroup</a></li>
                                       @if($bdtdc_custom_folder)
                                       @foreach($bdtdc_custom_folder as $folder_name)
                                       <li role="presentation" data-remove="{{$folder_name->id}}"><a class="add_to" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">{{$folder_name->name}}</a></li>
                                       @endforeach
                                       @endif
                                    </ul>
                                 </div>
                                 <button type="button" class="btn btn-default btn-xs all_inquery_action" style="width: 115px; height:30px; border-radius: 3px !important; margin-right: 5px" targeted="spam">Report spam</button>
                                 <div style="display:inline-block; margin-right: 5px" class="dropdown">
                                    <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 13px; margin-right: 7px" type="button" id="menu2" data-toggle="dropdown">More
                                       <span class="caret"></span></button>
                                    <ul style="min-width: 140px;" class="dropdown-menu" role="menu" aria-labelledby="menu2">
                                       <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="all_inquery_action" targeted="flag">Set flag</a></li>
                                       <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="mark_read">Mark as Read</a></li>
                                       <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="mark_unread">Mark as Unread</a></li>
                                       <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="add_contact">Add Contacts</a></li>
                                       <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="translate">Translate</a></li>
                                    </ul>
                                 </div>
                                 <label><input type="checkbox" name="all_unread_inq" @if($inq_sub_menu=='New Inquiries' ) checked @endif> Unread message</label>

                                 <button title="Next" class="pull-right all_inq_next_page" type="button" class="btn btn-default" style="height: 30px; border-color: #ddd; margin: 0;   margin-left: 9px;    margin-top: 5px;"><i style="padding: 5px" class="fa fa-angle-right" aria-hidden="true"></i></button>
                                 <button title="Previous" class="pull-right all_inq_prev_page" type="button" class="btn btn-default" style="height: 30px; border-color: #ddd;  margin: 0;    margin-left: 9px;    margin-top: 5px;"><i style="padding: 5px" class="fa fa-angle-left" aria-hidden="true"></i></button>

                                 <span class="pull-right all_inq_search_btn" style="height: 30px; width: 35px; border:1px solid #ddd; padding: 5px 10px;cursor: pointer;    margin-top: 5px;"><i class="fa fa-search" aria-hidden="true" style="color: #728398;"></i></span>
                                 <input name="search_all_sender_inq" class="pull-right" type="text" style="height: 30px; border-color: #ddd;text-align: center; border:0 none; border:1px solid #ddd;margin-top: 5px;padding: 0px;" placeholder="Search Sender">
                                 <label class="pull-right" for="usr" style="padding-right: 5px;padding-top: 11px">Results </label>

                              </div>
                              <div style="clear: both;"></div>


                           </div>
                        </div>

                        <div class="replace_area">
                           @if(count($inquery) > 0)
                           @foreach($inquery as $inq_value)
                           @if($inq_value->is_join_quotation == 1)
                           @php
                           $inq_id_array = explode(',', $inq_value->product_id)
                           @endphp
                           <div class="col-sm-12 col-md-12 padding_0 head-query" style="margin-right: 0px; margin-left: 0px">
                              <div class="col-sm-12 col-md-12 padding_0 head-query-top">
                                 <div class="col-sm-4 padding_0">
                                    <span style="display: block;float: left;padding: 5px 10px;">
                                       <span class="lf-dots">
                                          <i style="font-size: 15px; position: relative; top: 1.5px; color: #1f5d9d;" class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          <ul style="min-width: 140px;" class="lf-d-inner">
                                             <li>
                                                <a class="" href="#">Move to <i class="fa fa-angle-right pull-right"></i></a>
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
                                             <li><a class="" href="#">Report Spam</a></li>
                                          </ul>
                                       </span>
                                       <input type="checkbox" inquery_id_data="{{$inq_value->id}}" data_quotation_type="join" class="inq_select_single mail_check" name="dtata" style="margin-right: 5px">
                                       <input class="star 
												@if($inq_value->flag == 1)
												reverse_action_inquery
												@else
												inquery_action
												@endif" type="checkbox" title="bookmark page" ca_inquery_id="{{$inq_value->id}}" ca_action="join_flag" ca_reverse_from="flag" style="margin-right: 5px" @if($inq_value->flag == 1)
                                       checked
                                       @endif>
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
                                       <i class="fa fa-envelope" title="{{$inq_total_count}} unread message" aria-hidden="true" style="color: #4ad44a; font-size: 17px; top: 1px; position: relative;padding-right: 0px;"></i>
                                       (@if($inq_total_count > 0)
                                       {{ $inq_total_count }}
                                       @endif)
                                       @endif
                                    </span>
                                    <div title="Inquiry ID" style="display: block;float: left; padding: 9px 5px;">{{$inq_value->id}}</div>
                                    <div title="Date" style="display: block;float: left; padding: 9px 15px;">{{date('d/m/Y',strtotime($inq_value->created_at))}}</div>
                                 </div>
                                 <div title="" class="col-sm-3" title="Sender" style="    padding: 9px 0px;">
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
                                    <span title="Sender: {{$full_name}}" style="padding-left: 20px;margin-left: 20px; padding-top: 9px;">
                                       {{$full_name}}</span>
                                 </div>
                                 @php
                                 $sender_comp_name = 'Not Available';
                                 @endphp
                                 @if($inq_value->sender_company)
                                 @if($inq_value->sender_company->name_string)
                                 @php
                                 $sender_comp_name = $inq_value->sender_company->name_string->name;
                                 @endphp
                                 @endif
                                 @endif

                                 <div title="Sender's Company" class="col-sm-3" style="padding: 9px 0px;">
                                    <a style="font-weight:600;" target="_blank" href="{{ URL::to('Home/'.$sender_comp_name,$inq_value->sender_company->id,is_secured()) }}">{{ $sender_comp_name }}</a>
                                 </div>
                                 <div class="col-sm-2 padding_0" style="padding-left: 20px;">
                                    <div title="Sender Country" style="display:block; float: left;">
                                       <i title="Sender From {{ $inq_value->sender_company->location_of_reg_string->name}}" style="    margin-right: 7px;float: right; margin-top: 7px;" class="ui2-flag ui2-flag-
											@if($inq_value->sender_company->location_of_reg_string)
										{{ strtolower($inq_value->sender_company->location_of_reg_string->iso_code_2)}}
										@endif
										 u-inline-block flag-country"></i>
                                    </div>
                                    <div style="display: inline-block;">
                                       <a href="{{URL::to('Gold-supplier',null,is_secured())}}" target="_blank">
                                          <img title="Gold Suppliers:pre-qualified suppliers" style="width: 35px; height: 35px; " src=" {{ asset('bdtdc-product-image/home-page/Gold-membership.png') }}"></a>
                                    </div>
                                    <div style="display: inline-block;">
                                       <a href="{{URL::to('BuyerChannel/pages/trade_assurance',5,is_secured())}}" target="_blank">
                                          <img title="Buyer Protection: Ensures on-time shipment and pre-shipment product quality" style="margin-top: 2px; width: 35px; height: 35px;" itemprop="image" src="{!! asset('assets/images/Buyer-protection-home.png') !!}" alt="Buyer protection"></a>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12 col-md-12 col-lg-12 padding_0">
                                 <div class="col-sm-4">
                                    <div style="padding: 25px 0px;">

                                       @foreach($inq_id_array as $inq_id)
                                       @php
                                       $join_inquiry_product = BdtdcProduct::where('id',trim($inq_id))->first();
                                       @endphp

                                       @if($join_inquiry_product->product_name)
                                       <a style="color: #333;font-size: 14px;font-weight: 400;margin-left: 7px;" title="{{$join_inquiry_product->product_name->name}}" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$join_inquiry_product->product_name->name).'='.mt_rand(100000000, 999999999).$join_inquiry_product->id,null,is_secured()) }}">{{substr($join_inquiry_product->product_name->name,0,35)}}..</a>
                                       @else
                                       <a style="color: #333;font-size: 14px;font-weight: 400;margin-left: 7px;" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-','product name not available').'='.mt_rand(100000000, 999999999).$join_inquiry_product->id,null,is_secured()) }}">product name not available</a>
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
                                       <a href="#" data-inquery_id="{{$inq_value->id}}" ca_quotation_type="join" data-toggle="modal" data-target="#chat_modal" class="pp-detail go_to_conversation ui2-button-primary" style="padding: 6px 7px;color: #fff !important;"> View details</a>
                                    </div>
                                 </div>
                              </div>

                           </div>
                           @else
                           <div class="col-sm-12 col-md-12 padding_0 head-query" style="margin-right: 0px; margin-left: 0px">

                              <div class=" col-sm-12 col-md-12 padding_0 head-query-top">
                                 <div class="col-sm-4 padding_0">

                                    <span style="display: block;float: left;padding: 5px 10px;">
                                       <span class="lf-dots">
                                          <i style="font-size: 15px; position: relative; top: 1.5px; color: #1f5d9d;" class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          <ul style="min-width: 140px;" class="lf-d-inner">
                                             <li>
                                                <a class="" href="#">Move to <i class="fa fa-angle-right pull-right"></i></a>
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
                                             <li><a class="" href="#">Report Spam</a></li>
                                          </ul>
                                       </span>
                                       <input type="checkbox" inquery_id_data="{{$inq_value->id}}" data_quotation_type="single" class="inq_select_single mail_check" name="dtata" style="margin-right: 5px">
                                       <input class="star 
												@if($inq_value->flag == 1)
												reverse_action_inquery
												@else
												inquery_action
												@endif
												" type="checkbox" title="bookmark page" ca_inquery_id="{{$inq_value->id}}" ca_action="single_flag" ca_reverse_from="flag" style="margin-right: 5px" @if($inq_value->flag == 1)
                                       checked
                                       @endif>
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
                                       <i class="fa fa-envelope" title="{{$inq_total_count}} unread message" aria-hidden="true" style="color: #4ad44a; font-size: 17px; top: 1px; position: relative;padding-right: 0px;"></i>
                                       (@if($inq_total_count > 0)
                                       {{ $inq_total_count }}
                                       @endif)

                                       @endif
                                    </span>

                                    <div title="Inqueiry ID" style="display: block;float: left; padding: 9px 5px;">{{$inq_value->id}}</div>
                                    <div title="Date" style="display: block;float: left; padding: 9px;">{{date('d/m/Y',strtotime($inq_value->created_at))}}</div>
                                 </div>
                                 <div title="Sender" class="col-sm-3" style="padding: 9px 0px;">
                                    <i class="icon-p manpower-pro-icon" style="margin-top: -6px;"></i>
                                    @if($inq_value->inq_sender_user)
                                    @php
                                    $full_name = $inq_value->inq_sender_user->first_name.' '.$inq_value->inq_sender_user->last_name;
                                    @endphp
                                    @else
                                    @php
                                    $full_name = "not available";
                                    @endphp
                                    @endif
                                    <span title=" Sender : {{$full_name}}" style="padding-left: 20px; padding-top: 9px; margin-left: 20px;">
                                       {{$full_name,0,15}}</span>
                                 </div>
                                 @php
                                 $sender_comp_name = 'Not Available';
                                 @endphp
                                 @if($inq_value->sender_company)
                                 @if($inq_value->sender_company->name_string)
                                 @php
                                 $sender_comp_name = $inq_value->sender_company->name_string->name;
                                 @endphp
                                 @endif
                                 @endif

                                 <div title="Sender's Company" class="col-sm-3 padding_0" style="padding: 9px 0px;">
                                    <a style="font-weight:600;" target="_blank" href="{{ URL::to('Home/'.$sender_comp_name,($inq_value->sender_company?$inq_value->sender_company->id:0),is_secured()) }}">{{$sender_comp_name}}</a>
                                 </div>
                                 <div class="col-sm-2 padding_0" style="padding-left: 20px;">
                                    <div title="Sender Country" style="display:block; float: left;">
                                       <i title="Sender From {{ $inq_value->sender_company?$inq_value->sender_company->location_of_reg_string->name:'Not Available'}}" style="    margin-right: 7px;float: right; margin-top: 7px;" class="ui2-flag ui2-flag-
											@if($inq_value->sender_company)
											@if($inq_value->sender_company->location_of_reg_string)
											{{ strtolower($inq_value->sender_company->location_of_reg_string->iso_code_2)}}
											@endif
											@else
											@endif u-inline-block flag-country"></i>
                                    </div>
                                    <div style="display: inline-block;">
                                       <a href="{{URL::to('Gold-supplier',null,is_secured())}}" target="_blank">
                                          <img title="Gold Suppliers:pre-qualified suppliers" style="width: 35px; height: 35px; " src=" {{ asset('bdtdc-product-image/home-page/Gold-membership.png') }}"></a>
                                    </div>
                                    <div style="display: inline-block;">
                                       <a href="{{URL::to('BuyerChannel/pages/trade_assurance',5,is_secured())}}" target="_blank">
                                          <img title="Buyer Protection: Ensures on-time shipment and pre-shipment product quality" style="margin-top: 2px; width: 35px; height: 35px;" itemprop="image" src="{!! asset('assets/images/Buyer-protection-home.png') !!}" alt="Buyer protection"></a>
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
                                       @else
                                       <a style="color: #333;font-size: 14px;font-weight: 400;margin-left: 7px;flex:1" target="_blank" href="#">{{ $inq_value->title ?? '' }}
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
                                       <a href="#" data-inquery_id="{{$inq_value->id}}" ca_quotation_type="single" data-toggle="modal" data-target="#chat_modal" class="pp-detail go_to_conversation ui2-button-primary" style="padding: 6px 7px;color: #fff !important;"> View details</a>
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


                        </div>

                        <div class="text-right" style="font-size: 13px;font-weight: bold;margin-bottom: 11px;">page <span style="color: #1686cc;" class="current_page_inq">1</span> &nbsp; &nbsp;
                           Go to Page <input class="check_integer" style="width:40px;text-align:center;" type="text" name="custom_page"> <button class="custom_page_post">GO</button>

                        </div>
                     </div>

                  </div>
               </div>



               <div id="tab-mkn-4" class="tab-content-mkn">
                  <p>Proin sollicitudin tincidunt quam, in egestas dui tincidunt non. Maecenas tempus condimentum mi, sed convallis tortor iaculis eu. Cras dui dui, tempor quis tempor vitae, ullamcorper in justo. Integer et lorem diam. Quisque consequat lectus eget urna molestie pharetra. Cras risus lectus, lobortis sit amet imperdiet sit amet, eleifend a erat. Suspendisse vel luctus lectus. Sed ac arcu nisi, sit amet ornare tellus. Pellentesque nec augue a nibh pharetra scelerisque quis sit amet felis. Nullam at enim at lacus pretium iaculis sit amet vel nunc. Praesent sapien felis, tincidunt vitae blandit ut, mattis at diam. Suspendisse ac sapien eget eros venenatis tempor quis id odio. Donec lacus leo, tincidunt eget molestie at, pharetra cursus odio. </p>
               </div>
               <div id="flagged" class="tab-content-mkn" style="padding: 0">



                  <div style="clear: both;"></div>


                  <div class="col-sm-12 col-md-12 padding_0">

                     <div class="col-sm-12 col-md-12 padding_0">
                        <ul class="nav nav-tabs">
                           <li class="active"><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">All Inquiries</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">New Inquiries</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Awaiting Your Confirmation</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Awaiting Partner Confirmation</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Affirmed Orders</a></li>
                        </ul>

                     </div>



                  </div>
                  <div class="tab-content">

                     <div class="col-sm-12 col-md-12 padding_0 tab-pane fade in active" id="home">
                        <div class=" col-sm-12 col-md-12 padding_0 head-query-top" style="border-bottom: 0 none;padding: 0">

                           <div class="col-sm-12" style="padding-top: 5px;padding-left: 0px;padding-right: 0px">
                              <div>

                                 <div style="display: inline-block; background: white; height: 30px; border: 1px solid #ddd; padding: 1px 11px; border-radius: 3px !important;margin-right: 5px"><input type="checkbox" class="inq_select_all"></div>

                                 <button type="button" class="btn btn-default btn-xs refresh_data" style="width: 45px; height:30px; margin-right: 5px; border-radius: 3px !important;"><span><i class="fa fa-refresh" aria-hidden="true" style="font-size: 18px; font-weight: normal;color: #999;margin-right: 0px;padding: 5px"></i></span></button>

                                 <div style="display:inline-block;margin-left: 0%;" class="dropdown">
                                    <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 15px;padding-top: 4px;margin-right: 5px;" type="button" id="menu5" data-toggle="dropdown">Date
                                       <span class="caret"></span></button>
                                    <ul style="min-width: 140px;" class="dropdown-menu" role="menu" aria-labelledby="menu5">
                                       <li role="presentation"><a class="all_inq_date" data-date_format="newToOldU" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">new to old by update time</a></li>
                                       <li role="presentation"><a class="all_inq_date" data-date_format="oldToNewU" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">old to new by update time</a></li>
                                       <li role="presentation"><a class="all_inq_date" data-date_format="newToOldC" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">new to old by created time</a></li>
                                       <li role="presentation"><a class="all_inq_date" data-date_format="oldToNewC" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">old to new by created time</a></li>
                                    </ul>
                                 </div>


                                 <button type="button" class="btn btn-default btn-xs all_inquery_action" style="width: 115px; height:30px; border-radius: 3px !important;margin-right: 5px;" targeted="spam">Report spam</button>
                                 <div style="display:inline-block;margin-right: 5px;" class="dropdown">
                                    <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 13px;" type="button" id="menu4" data-toggle="dropdown">More
                                       <span class="caret"></span></button>
                                    <ul style="min-width: 140px;" class="dropdown-menu" role="menu" aria-labelledby="menu4">
                                       <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="all_inquery_action" targeted="notflag">Not flag</a></li>
                                       <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="mark_read">Mark as Read</a></li>
                                       <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="mark_unread">Mark as Unread</a></li>
                                       <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="add_contact">Add Contacts</a></li>
                                       <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="translate">Translate</a></li>
                                    </ul>
                                 </div>

                                 <label><input type="checkbox" name="all_unread_inq"> Unread message</label>

                                 <button title="Next" class="pull-right all_inq_next_page" type="button" style="height: 30px; border-color: #ddd; margin: 0;   margin-left: 9px;    margin-top: 5px;"><i style="padding: 5px" class="fa fa-angle-right" aria-hidden="true"></i></button>
                                 <button title="Previous" class="pull-right all_inq_prev_page" type="button" style="height: 30px; border-color: #ddd;  margin: 0;    margin-left: 9px;    margin-top: 5px;"><i style="padding: 5px" class="fa fa-angle-left" aria-hidden="true"></i></button>

                                 <span class="pull-right all_inq_search_btn" style="height: 30px; width: 25px; border:1px solid #ddd; padding: 5px;cursor: pointer;    margin-top: 5px;"><i class="fa fa-search" aria-hidden="true" style="color: #728398;"></i></span>

                                 <input name="search_all_sender_inq" class="pull-right" type="text" style="height: 30px; border-color: #ddd;text-align: center; border:0 none; border:1px solid #ddd;margin-top: 5px;padding: 0px;" placeholder="Search Sender">
                                 <label class="pull-right" for="usr" style="padding-right: 5px;padding-top: 11px">Results </label>

                              </div>
                              <div style="clear: both;"></div>
                           </div>
                        </div>

                        <div class="replace_area">
                           <div class="col-sm-12 col-md-12 padding_0 head-query text-center" style="padding: 40px;margin-right: 0px; margin-left: 0px">

                              No order found!

                           </div>


                        </div>

                        <div class="text-right" style="font-size: 13px;font-weight: bold;margin-bottom: 11px;">page <span style="color: #1686cc;" class="current_page_inq">1</span> &nbsp; &nbsp;
                           Go to Page <input class="check_integer" style="width:40px;text-align:center;" type="text" name="custom_page"> <button class="custom_page_post">GO</button>

                        </div>
                     </div>

                  </div>


               </div>
               <div id="spam" class="tab-content-mkn" style="padding: 0">


                  <div style="clear: both;"></div>

                  <div style="clear: both;"></div>
                  <div class="col-sm-12 col-md-12 padding_0">

                     <div class="col-sm-12 col-md-12 padding_0" style="">
                        <ul class="nav nav-tabs" style="">
                           <li class="active"><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">All Inquiries</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">New Inquiries</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Awaiting Your Confirmation</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Awaiting Partner Confirmation</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Affirmed Orders</a></li>
                        </ul>

                     </div>



                  </div>
                  <div class="tab-content">

                     <div class="col-sm-12 col-md-12 padding_0 tab-pane fade in active" id="home">
                        <div class=" col-sm-12 col-md-12 padding_0 head-query-top" style="border-bottom: 0 none;">
                           <div>

                              <div style="display: inline-block; background: white; height: 30px; border: 1px solid #ddd; padding: 1px 11px; border-radius: 3px !important;margin-right: 5px"><input type="checkbox" class="inq_select_all"></div>

                              <button type="button" class="btn btn-default btn-xs refresh_data" style="width: 45px; height:30px; margin-right: 5px; border-radius: 3px !important;"><span><i class="fa fa-refresh" aria-hidden="true" style="font-size: 18px; font-weight: normal;color: #999;margin-right: 0px;padding: 5px"></i></span></button>

                              <div style="display:inline-block;margin-left: 0%;" class="dropdown">
                                 <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 15px;padding-top: 4px;margin-right: 5px;" type="button" id="menu5" data-toggle="dropdown">Date
                                    <span class="caret"></span></button>
                                 <ul style="min-width: 140px;" class="dropdown-menu" role="menu" aria-labelledby="menu5">
                                    <li role="presentation"><a class="all_inq_date" data-date_format="newToOldU" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">new to old by update time</a></li>
                                    <li role="presentation"><a class="all_inq_date" data-date_format="oldToNewU" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">old to new by update time</a></li>
                                    <li role="presentation"><a class="all_inq_date" data-date_format="newToOldC" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">new to old by created time</a></li>
                                    <li role="presentation"><a class="all_inq_date" data-date_format="oldToNewC" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">old to new by created time</a></li>
                                 </ul>
                              </div>


                              <button type="button" class="btn btn-default btn-xs all_inquery_action" style="width: 115px; height:30px; border-radius: 3px !important;margin-right: 5px;" targeted="nospam">Not spam</button>
                              <div style="display:inline-block;margin-right: 5px;" class="dropdown">
                                 <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 13px;" type="button" id="menu4" data-toggle="dropdown">More
                                    <span class="caret"></span></button>
                                 <ul style="min-width: 140px;" class="dropdown-menu" role="menu" aria-labelledby="menu4">
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="all_inquery_action" targeted="notflag">Not flag</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="mark_read">Mark as Read</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="mark_unread">Mark as Unread</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="add_contact">Add Contacts</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="translate">Translate</a></li>
                                 </ul>
                              </div>

                              <label><input type="checkbox" name="all_unread_inq"> Unread message</label>

                              <button title="Next" class="pull-right all_inq_next_page" type="button" style="height: 30px; border-color: #ddd; margin: 0;   margin-left: 9px;    margin-top: 5px;"><i style="padding: 5px" class="fa fa-angle-right" aria-hidden="true"></i></button>
                              <button title="Previous" class="pull-right all_inq_prev_page" type="button" style="height: 30px; border-color: #ddd;  margin: 0;    margin-left: 9px;    margin-top: 5px;"><i style="padding: 5px" class="fa fa-angle-left" aria-hidden="true"></i></button>

                              <span class="pull-right all_inq_search_btn" style="height: 30px; width: 25px; border:1px solid #ddd; padding: 5px;cursor: pointer;    margin-top: 5px;"><i class="fa fa-search" aria-hidden="true" style="color: #728398;"></i></span>

                              <input name="search_all_sender_inq" class="pull-right" type="text" style="height: 30px; border-color: #ddd;text-align: center; border:0 none; border:1px solid #ddd;margin-top: 5px;padding: 0px;" placeholder="Search Sender">
                              <label class="pull-right" for="usr" style="padding-right: 5px;padding-top: 11px">Results </label>

                           </div>
                        </div>

                        <div class="replace_area">
                           <div class="col-sm-12 col-md-12 padding_0 head-query text-center" style="padding: 40px;margin-right: 0px; margin-left: 0px">
                              No order found!
                           </div>
                        </div>

                        <div class="text-right" style="font-size: 13px;font-weight: bold;margin-bottom: 11px;">page <span style="color: #1686cc;" class="current_page_inq">1</span> &nbsp; &nbsp;
                           Go to Page <input class="check_integer" style="width:40px;text-align:center;" type="text" name="custom_page"> <button class="custom_page_post">GO</button>

                        </div>
                     </div>
                  </div>
               </div>
               <div id="trash" class="tab-content-mkn" style="padding: 0">
                  <div style="clear: both;"></div>
                  <div style="clear: both;"></div>
                  <div class="col-sm-12 col-md-12 padding_0">
                     <div class="col-sm-12 col-md-12 padding_0" style="">
                        <ul class="nav nav-tabs" style="">
                           <li class="active"><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">All Inquiries</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">New Inquiries</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Awaiting Your Confirmation</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Awaiting Partner Confirmation</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Affirmed Orders</a></li>
                        </ul>

                     </div>
                  </div>
                  <div class="tab-content">
                     <div class="col-sm-12 col-md-12 padding_0 tab-pane fade in active" id="home">
                        <div class=" col-sm-12 col-md-12 padding_0 head-query-top" style="border-bottom: 0 none;">
                           <div>

                              <div style="display: inline-block; background: white; height: 30px; border: 1px solid #ddd; padding: 1px 11px; border-radius: 3px !important;margin-right: 5px"><input type="checkbox" class="inq_select_all"></div>

                              <button type="button" class="btn btn-default btn-xs refresh_data" style="width: 45px; height:30px; margin-right: 5px; border-radius: 3px !important;"><span><i class="fa fa-refresh" aria-hidden="true" style="font-size: 18px; font-weight: normal;color: #999;margin-right: 0px;padding: 5px"></i></span></button>

                              <div style="display:inline-block;margin-left: 0%;" class="dropdown">
                                 <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 15px;padding-top: 4px;margin-right: 5px;" type="button" id="menu5" data-toggle="dropdown">Date
                                    <span class="caret"></span></button>
                                 <ul style="min-width: 140px;" class="dropdown-menu" role="menu" aria-labelledby="menu5">
                                    <li role="presentation"><a class="all_inq_date" data-date_format="newToOldU" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">new to old by update time</a></li>
                                    <li role="presentation"><a class="all_inq_date" data-date_format="oldToNewU" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">old to new by update time</a></li>
                                    <li role="presentation"><a class="all_inq_date" data-date_format="newToOldC" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">new to old by created time</a></li>
                                    <li role="presentation"><a class="all_inq_date" data-date_format="oldToNewC" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">old to new by created time</a></li>
                                 </ul>
                              </div>


                              <button type="button" class="btn btn-default btn-xs all_inquery_action" style="width: 115px; height:30px; border-radius: 3px !important;margin-right: 5px;" targeted="spam">Report spam</button>
                              <div style="display:inline-block;margin-right: 5px;" class="dropdown">
                                 <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 13px;" type="button" id="menu4" data-toggle="dropdown">More
                                    <span class="caret"></span></button>
                                 <ul style="min-width: 140px;" class="dropdown-menu" role="menu" aria-labelledby="menu4">
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="all_inquery_action" targeted="notflag">Not flag</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="mark_read">Mark as Read</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="mark_unread">Mark as Unread</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="add_contact">Add Contacts</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="translate">Translate</a></li>
                                 </ul>
                              </div>

                              <label><input type="checkbox" name="all_unread_inq"> Unread message</label>

                              <button title="Next" class="pull-right all_inq_next_page" type="button" style="height: 30px; border-color: #ddd; margin: 0;   margin-left: 9px;    margin-top: 5px;"><i style="padding: 5px" class="fa fa-angle-right" aria-hidden="true"></i></button>
                              <button title="Previous" class="pull-right all_inq_prev_page" type="button" style="height: 30px; border-color: #ddd;  margin: 0;    margin-left: 9px;    margin-top: 5px;"><i style="padding: 5px" class="fa fa-angle-left" aria-hidden="true"></i></button>

                              <span class="pull-right all_inq_search_btn" style="height: 30px; width: 25px; border:1px solid #ddd; padding: 5px;cursor: pointer;    margin-top: 5px;"><i class="fa fa-search" aria-hidden="true" style="color: #728398;"></i></span>

                              <input name="search_all_sender_inq" class="pull-right" type="text" style="height: 30px; border-color: #ddd;text-align: center; border:0 none; border:1px solid #ddd;margin-top: 5px;padding: 0px;" placeholder="Search Sender">
                              <label class="pull-right" for="usr" style="padding-right: 5px;padding-top: 11px">Results </label>

                           </div>
                        </div>
                        <div class="replace_area">

                           <div class="col-sm-12 col-md-12 padding_0 head-query text-center" style="padding: 40px;margin-right: 0px; margin-left: 0px">
                              No order found!
                           </div>
                        </div>

                        <div class="text-right" style="font-size: 13px;font-weight: bold;margin-bottom: 11px;">page <span style="color: #1686cc;" class="current_page_inq">1</span> &nbsp; &nbsp;
                           Go to Page <input class="check_integer" style="width:40px;text-align:center;" type="text" name="custom_page"> <button class="custom_page_post">GO</button>

                        </div>
                     </div>
                  </div>
               </div>
               <div id="ungroup" class="tab-content-mkn" style="padding: 0">

                  <div style="clear: both;"></div>
                  <div class="col-sm-12 col-md-12 padding_0">

                     <div class="col-sm-12 col-md-12 padding_0" style="">
                        <ul class="nav nav-tabs" style="">
                           <li class="active"><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">All Inquiries</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">New Inquiries</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Awaiting Your Confirmation</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Awaiting Partner Confirmation</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Affirmed Orders</a></li>
                        </ul>

                     </div>
                  </div>
                  <div class="tab-content">

                     <div class="col-sm-12 col-md-12 padding_0 tab-pane fade in active" id="home">
                        <div class=" col-sm-12 col-md-12 padding_0 head-query-top" style="border-bottom: 0 none;padding: 0;">
                           <div>

                              <div style="display: inline-block; background: white; height: 30px; border: 1px solid #ddd; padding: 1px 11px; border-radius: 3px !important;margin-right: 5px"><input type="checkbox" class="inq_select_all"></div>

                              <button type="button" class="btn btn-default btn-xs refresh_data" style="width: 45px; height:30px; margin-right: 5px; border-radius: 3px !important;"><span><i class="fa fa-refresh" aria-hidden="true" style="font-size: 18px; font-weight: normal;color: #999;margin-right: 0px;padding: 5px"></i></span></button>

                              <div style="display:inline-block;margin-left: 0%;" class="dropdown">
                                 <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 15px;padding-top: 4px;margin-right: 5px;" type="button" id="menu5" data-toggle="dropdown">Date
                                    <span class="caret"></span></button>
                                 <ul style="min-width: 140px;" class="dropdown-menu" role="menu" aria-labelledby="menu5">
                                    <li role="presentation"><a class="all_inq_date" data-date_format="newToOldU" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">new to old by update time</a></li>
                                    <li role="presentation"><a class="all_inq_date" data-date_format="oldToNewU" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">old to new by update time</a></li>
                                    <li role="presentation"><a class="all_inq_date" data-date_format="newToOldC" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">new to old by created time</a></li>
                                    <li role="presentation"><a class="all_inq_date" data-date_format="oldToNewC" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">old to new by created time</a></li>
                                 </ul>
                              </div>

                              <div style="display:inline-block;" class="dropdown">
                                 <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 13px; margin-right: 5px" type="button" id="menu1" data-toggle="dropdown">Add to
                                    <span class="caret"></span></button>
                                 <ul style="min-width: 140px;" class="dropdown-menu add_to_main" role="menu" aria-labelledby="menu1">
                                    <li role="presentation" data-remove="0"><a class="add_to" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">Ungroup</a></li>
                                    @if($bdtdc_custom_folder)
                                    @foreach($bdtdc_custom_folder as $folder_name)
                                    <li role="presentation" data-remove="{{$folder_name->id}}"><a class="add_to" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">{{$folder_name->name}}</a></li>
                                    @endforeach
                                    @endif
                                 </ul>
                              </div>
                              <button type="button" class="btn btn-default btn-xs all_inquery_action" style="width: 115px; height:30px; border-radius: 3px !important;margin-right: 5px;" targeted="spam">Report spam</button>
                              <div style="display:inline-block;margin-right: 5px;" class="dropdown">
                                 <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 13px;" type="button" id="menu4" data-toggle="dropdown">More
                                    <span class="caret"></span></button>
                                 <ul style="min-width: 140px;" class="dropdown-menu" role="menu" aria-labelledby="menu4">
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="all_inquery_action" targeted="notflag">Not flag</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="mark_read">Mark as Read</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="mark_unread">Mark as Unread</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="add_contact">Add Contacts</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="translate">Translate</a></li>
                                 </ul>
                              </div>

                              <label><input type="checkbox" name="all_unread_inq"> Unread message</label>

                              <button title="Next" class="pull-right all_inq_next_page" type="button" style="height: 30px; border-color: #ddd; margin: 0;   margin-left: 9px;    margin-top: 5px;"><i style="padding: 5px" class="fa fa-angle-right" aria-hidden="true"></i></button>
                              <button title="Previous" class="pull-right all_inq_prev_page" type="button" style="height: 30px; border-color: #ddd;  margin: 0;    margin-left: 9px;    margin-top: 5px;"><i style="padding: 5px" class="fa fa-angle-left" aria-hidden="true"></i></button>

                              <span class="pull-right all_inq_search_btn" style="height: 30px; width: 25px; border:1px solid #ddd; padding: 5px;cursor: pointer;    margin-top: 5px;"><i class="fa fa-search" aria-hidden="true" style="color: #728398;"></i></span>

                              <input name="search_all_sender_inq" class="pull-right" type="text" style="height: 30px; border-color: #ddd;text-align: center; border:0 none; border:1px solid #ddd;margin-top: 5px;padding: 0px;" placeholder="Search Sender">
                              <label class="pull-right" for="usr" style="padding-right: 5px;padding-top: 11px">Results </label>

                           </div>
                        </div>

                        <div class="replace_area">
                           <div class="col-sm-12 col-md-12 padding_0 head-query text-center" style="padding: 40px;margin-right: 0px; margin-left: 0px">
                              No order found!
                           </div>
                        </div>

                        <div class="text-right" style="font-size: 13px;font-weight: bold;margin-bottom: 11px;">page <span style="color: #1686cc;" class="current_page_inq">1</span> &nbsp; &nbsp;
                           Go to Page <input class="check_integer" style="width:40px;text-align:center;" type="text" name="custom_page"> <button class="custom_page_post">GO</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="test" class="tab-content-mkn">
                  <p>test</p>
               </div>
               <div id="sent" class="tab-content-mkn" style="padding: 0">
                  <div style="clear: both;"></div>
                  <div class="col-sm-12 col-md-12 padding_0">

                     <div class="col-sm-12 col-md-12 padding_0" style="">
                        <ul class="nav nav-tabs" style="">
                           <li class="active"><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">All Inquiries</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">New Inquiries</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Awaiting Your Confirmation</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Awaiting Partner Confirmation</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Affirmed Orders</a></li>
                        </ul>

                     </div>

                  </div>
                  <div class="tab-content">

                     <div class="col-sm-12 col-md-12 padding_0 tab-pane fade in active" id="home">
                        <div class=" col-sm-12 col-md-12 padding_0 head-query-top" style="border-bottom: 0 none; padding: 0">
                           <div>

                              <div style="display: inline-block; background: white; height: 30px; border: 1px solid #ddd; padding: 1px 11px; border-radius: 3px !important;margin-right: 5px"><input type="checkbox" class="inq_select_all"></div>

                              <button type="button" class="btn btn-default btn-xs all_inquery_action" style="width: 115px; height:30px; border-radius: 3px !important; margin-right: 5px" targeted="trush">Trash</button>
                              <div style="display:inline-block; margin-right: 5px" class="dropdown">
                                 <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 13px;" type="button" id="menu10" data-toggle="dropdown">More
                                    <span class="caret"></span></button>
                                 <ul style="min-width: 140px;" class="dropdown-menu" role="menu" aria-labelledby="menu10">
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="mark_read">Mark as Read</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="mark_unread">Mark as Unread</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="add_contact">Add Contacts</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="translate">Translate</a></li>
                                 </ul>
                              </div>

                              <label><input type="checkbox" name="all_unread_inq"> Unread message</label>

                              <button title="Next" class="pull-right all_inq_next_page" type="button" style="height: 30px; border-color: #ddd; margin: 0;   margin-left: 9px;    margin-top: 5px;"><i style="padding: 5px" class="fa fa-angle-right" aria-hidden="true"></i></button>
                              <button title="Previous" class="pull-right all_inq_prev_page" type="button" style="height: 30px; border-color: #ddd;  margin: 0;    margin-left: 9px;    margin-top: 5px;"><i style="padding: 5px" class="fa fa-angle-left" aria-hidden="true"></i></button>

                              <span class="pull-right all_inq_search_btn" style="height: 30px; width: 25px; border:1px solid #ddd; padding: 5px;cursor: pointer;    margin-top: 5px;"><i class="fa fa-search" aria-hidden="true" style="color: #728398;"></i></span>

                              <input name="search_all_sender_inq" class="pull-right" type="text" style="height: 30px; border-color: #ddd;text-align: center; border:0 none; border:1px solid #ddd;margin-top: 5px;padding: 0px;" placeholder="Search Sender">
                              <label class="pull-right" for="usr" style="padding-right: 5px;padding-top: 11px">Results </label>

                           </div>
                        </div>
                        <div class="replace_area">

                           <div class="col-sm-12 col-md-12 padding_0 head-query text-center" style="padding: 40px;margin-right: 0px; margin-left: 0px">
                              No order found!
                           </div>
                        </div>

                        <div class="text-right" style="font-size: 13px;font-weight: bold;margin-bottom: 11px;">page <span style="color: #1686cc;" class="current_page_inq">1</span> &nbsp; &nbsp;
                           Go to Page <input class="check_integer" style="width:40px;text-align:center;" type="text" name="custom_page"> <button class="custom_page_post">GO</button>
                        </div>
                     </div>
                  </div>

               </div>
               <div id="all_orders" class="tab-content-mkn" style="padding: 0">

                  <div style="clear: both;"></div>
                  <div class="col-sm-12 col-md-12 padding_0">

                     <div class="col-sm-12 col-md-12 padding_0" style="">
                        <ul class="nav nav-tabs" style="">
                           <li class="active"><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">All Inquiries</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">New Inquiries</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Awaiting Your Confirmation</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Awaiting Partner Confirmation</a></li>
                           <li><a class="all_inq_sub_menu_class" data-toggle="tab" href="#home">Affirmed Orders</a></li>
                        </ul>

                     </div>

                  </div>
                  <div class="tab-content">

                     <div class="col-sm-12 col-md-12 padding_0 tab-pane fade in active" id="home">
                        <div class=" col-sm-12 col-md-12 padding_0 head-query-top" style="border-bottom: 0 none; padding: 0">
                           <div>

                              <div style="display: inline-block; background: white; height: 30px; border: 1px solid #ddd; padding: 1px 11px; border-radius: 3px !important;margin-right: 5px"><input type="checkbox" class="inq_select_all"></div>

                              <button type="button" class="btn btn-default btn-xs all_inquery_action" style="width: 115px; height:30px; border-radius: 3px !important; margin-right: 5px" targeted="trush">Trash</button>
                              <div style="display:inline-block; margin-right: 5px" class="dropdown">
                                 <button class="btn btn-default btn-md dropdown-toggle" style="border-radius: 3px !important;height:30px;font-size: 13px;" type="button" id="menu10" data-toggle="dropdown">More
                                    <span class="caret"></span></button>
                                 <ul style="min-width: 140px;" class="dropdown-menu" role="menu" aria-labelledby="menu10">
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="mark_read">Mark as Read</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="mark_unread">Mark as Unread</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="add_contact">Add Contacts</a></li>
                                    <li role="presentation"><a style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#" class="mark_action" data-target_action="translate">Translate</a></li>
                                 </ul>
                              </div>

                              <label><input type="checkbox" name="all_unread_inq"> Unread message</label>

                              <button title="Next" class="pull-right all_inq_next_page" type="button" style="height: 30px; border-color: #ddd; margin: 0;   margin-left: 9px;    margin-top: 5px;"><i style="padding: 5px" class="fa fa-angle-right" aria-hidden="true"></i></button>
                              <button title="Previous" class="pull-right all_inq_prev_page" type="button" style="height: 30px; border-color: #ddd;  margin: 0;    margin-left: 9px;    margin-top: 5px;"><i style="padding: 5px" class="fa fa-angle-left" aria-hidden="true"></i></button>

                              <span class="pull-right all_inq_search_btn" style="height: 30px; width: 25px; border:1px solid #ddd; padding: 5px;cursor: pointer;    margin-top: 5px;"><i class="fa fa-search" aria-hidden="true" style="color: #728398;"></i></span>

                              <input name="search_all_sender_inq" class="pull-right" type="text" style="height: 30px; border-color: #ddd;text-align: center; border:0 none; border:1px solid #ddd;margin-top: 5px;padding: 0px;" placeholder="Search Sender">
                              <label class="pull-right" for="usr" style="padding-right: 5px;padding-top: 11px">Results </label>

                           </div>
                        </div>
                        <div class="replace_area">

                           <div class="col-sm-12 col-md-12 padding_0 head-query text-center" style="padding: 40px;margin-right: 0px; margin-left: 0px">
                              No order found!
                           </div>

                        </div>

                        <div class="text-right" style="font-size: 13px;font-weight: bold;margin-bottom: 11px;">page <span style="color: #1686cc;" class="current_page_inq">1</span> &nbsp; &nbsp;
                           Go to Page <input class="check_integer" style="width:40px;text-align:center;" type="text" name="custom_page"> <button class="custom_page_post">GO</button>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <div id="chat_modal" class="modal fade" role="dialog">
               <div style="width:60%" class="modal-dialog ">
                  <!-- Modal content-->
                  <div style="" class="modal-content row">
                     <div class="modal-header col-xs-12 text-center">
                        <a href="" class="btn btn-sm btn-danger pull-right" data-dismiss="modal"> <i class="fa fa-times "></i> </a>
                     </div>
                     <div class="modal-body col-xs-12 inquery_message">

                     </div>
                     <div class="modal-footer col-xs-12">
                        <input type="submit" value="Close" data-dismiss="modal" class="btn btn-md btn-primary btn-danger">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <br><br>
</div>
<br><br>
<div class="container">
   @stop
   @section('scripts')

<script type="text/javascript" src="{!! asset('assets/dashboard/js/front_custom.js',is_secured()) !!}"></script>
 <!-- <script type="text/javascript" src="{!! asset('assets/fontend/js/jquery-ui-timepicker-addon.js',is_secured()) !!}"></script> -->




<script type="text/javascript">
	function refresh_unread_message(){
		var url = window.location.origin+'/default/get-total-new-inq';
		$.get(url,{

		},function(r){
			if(parseInt(r.login) == 1){
				if(parseInt(r.all) > 0){
					$('#unread_inq').html('('+r.all+')');
				}else{
					$('#unread_inq').html('');
				}
				if(parseInt(r.flag) > 0){
					$('#unread_flag').html('('+r.flag+')');
				}else{
					$('#unread_flag').html('');
				}
				if(parseInt(r.spam) > 0){
					$('#unread_spam').html('('+r.spam+')');
				}else{
					$('#unread_spam').html('');
				}
				if(parseInt(r.order) > 0){
					$('#unread_orders').html('('+r.order+')');
				}else{
					$('#unread_orders').html('');
				}
			}else{
				alert ('Please Login');
			}
			
		});
	}
	refresh_unread_message();
	setInterval(function(){ refresh_unread_message(); }, 100000);

 $(document).ready(function() {
 	var f1 = false;
 	var f2 = false;
 	var f3 = false;
 	var f4 = false;

 	$('.loader').fadeOut('slow');
    $(document).on({click:function(){
    	$('.draft').toggle('slow');
    	// 
    	if(!f1){
    		$(this).find('.fa-angle-down').removeClass('fa-angle-down').addClass('fa-angle-right');
    		f1= true;
    	}else{
    		$(this).find('.fa-angle-right').removeClass('fa-angle-right').addClass('fa-angle-down');
    		f1 = false;
    	}

    }},'.inbox-list');
     $(document).on({click:function(){
    	$('.spam-trash').toggle('slow');
    	if(!f2){
    		$(this).find('.fa-angle-down').removeClass('fa-angle-down').addClass('fa-angle-right');
    		f2= true;
    	}else{
    		$(this).find('.fa-angle-right').removeClass('fa-angle-right').addClass('fa-angle-down');
    		f2 = false;
    	}
    }},'.inbox-list2');
      $(document).on({click:function(e){
      	e.stopPropagation();
    	$('.folder').toggle('slow');
    	if(!f3){
    		$(this).find('.fa-angle-down').removeClass('fa-angle-down').addClass('fa-angle-right');
    		f3= true;
    	}else{
    		$(this).find('.fa-angle-right').removeClass('fa-angle-right').addClass('fa-angle-down');
    		f3 = false;
    	}
    }},'.inbox-list3');
      $(document).on({click:function(){
    	$('.order-bd').toggle('slow');
    	if(!f4){
    		$(this).find('.fa-angle-down').removeClass('fa-angle-down').addClass('fa-angle-right');
    		f4= true;
    	}else{
    		$(this).find('.fa-angle-right').removeClass('fa-angle-right').addClass('fa-angle-down');
    		f4 = false;
    	}
    }},'.inbox-list4');
   // $(document).on({mouseover:function(){
   //  	$('.indiv-sub-list').css("color", "#ff751a");
   //  }},'.spam-trash li,.draft li,folder li,.order-bd li'); 
}); 

$(document).ready(function() {
    var max_folder      = 10; //maximum folder allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        var current_folder_no = $('.current_folder').length; //initlal folder count
        if(current_folder_no < max_folder){
        $(wrapper).append('<div class="my_folder"><input type="text" name="mytext[]" style="width:145px; margin-top:5px;margin-bottom:5px; height:25px;"/><i style="color:#728398;cursor:pointer;padding:3px" class="fa fa-check create_folder" aria-hidden="true"></i><a style="color:#728398;padding:3px" href="#" class="remove_field"><i class="fa fa-times" aria-hidden="true" class="remove"></i></a></div>'); //add folder
    	}else{
    		alert ('Maximum folder limit exceeded.');
    	}
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove();
    });

    $(document).on({click:function(e){
		e.preventDefault();
		var folder_name = $.trim($(this).parent('.my_folder').children('[name="mytext[]"]').val());
		var target = $(this).parent('div');
		if(folder_name == ''){

		}else{
			var current_folder_no = $('.current_folder').length; //initlal folder count
        	if(current_folder_no < max_folder){
        		var url = window.location.origin+'/default/manage-folder';
        		var token = $('input[name="_token"]').val();
        		$.post(url,{
        			'_token':token,
        			'name':folder_name,
        			'id':'0',
        			'action':'create',
        		},function(folder_id){
        			if(isNaN(parseInt(folder_id))){
        				alert ('Unknown error occured.');
        			}else{
        				var append_folder = '<li class="class_for_remove action_li drp-cat" style="padding-left: 15px;display:flex" data-remove="'+folder_id+'"><a style="flex:1" href="#ungroup" class="indiv-sub-list current_folder folder_message">'+folder_name+'</a> \
												<i class="fa fa-caret-square-o-down pull-right drp-cat-i" aria-hidden="true"> <div class="drp-con-i"> <i class="fa fa-trash pull-right folder_action folder_show" aria-hidden="true" data-remove="'+folder_id+'" data-action="delete" style="margin-top: 2px;"></i> <i class="fa fa-pencil-square-o pull-right folder_action folder_show" aria-hidden="true" data-remove="'+folder_id+'" data-action="edit" style="margin-top: 3px;"></i> </div> </i>\
												</li>';
						var append_addto = '<li role="presentation" data-remove="'+folder_id+'"><a class="add_to" style="padding:2px 14px;" role="menuitem" tabindex="-1" href="#">'+folder_name+'</a></li>';
						
						target.remove();
			    		$('.folder').append(append_folder);
			    		$('.add_to_main').append(append_addto);
        			}
        		});
        		
        	}else{
        		alert ('Maximum folder limit exceeded.');
        	}
		}
	}}, '.create_folder');

 //    $(document).on({click:function(e){
	// 	e.preventDefault();
	// 	$('.folder_action').toggleClass('folder_show');
	// }}, '.edit_folder_name');

    var prev_folder = '';
    var prev_id = '';

	$(document).on({click:function(e){
		e.preventDefault();
		var action = $(this).attr('data-action');
		var action_id = $(this).attr('data-remove');
		var url = window.location.origin+'/default/manage-folder';
        var token = $('input[name="_token"]').val();
		if(action == 'delete'){
			if(confirm('Are You Sure to delete this Label ???')){
			$.post(url,{
    			'_token':token,
    			'name':'unknown',
    			'id':action_id,
    			'action':'delete',
    		},function(result){
    			if(parseInt(result) == 1){
    				$('li[data-remove="'+action_id+'"]').remove();
    			}else{
    				alert ('Unknown error occured.');
    			}
    		});
			}
		}else{
			prev_folder = $(this).parent().parent().parent().children('a').text();
			console.log('sfsf',prev_folder);
			prev_id = action_id;
			var edit_template = '<div class="rename_my_folder"><input type="text" name="renamemytext[]" value="'+prev_folder+'" style="width: 140px; margin-top: -7px; margin-bottom: 5px; height: 30px; padding: 5px; margin-left: -150px; font-size: 14px; font-weight: bold;margin-right:16px"><i style="color:#fff;cursor:pointer;" class="fa fa-check rename_folder" aria-hidden="true"></i><i class="fa fa-times cancel_rename" style="color:#fff;cursor:pointer;margin-left: 5px;" aria-hidden="true"></i></div>';
			$(this).parent().html(edit_template);
		}
	}}, '.folder_action');

	$(document).on({click:function(e){
		var append_folder = '<a href="#ungroup" style="flex:1" class="indiv-sub-list current_folder">'+prev_folder+'</a> \
												<i class="fa fa-caret-square-o-down pull-right drp-cat-i" aria-hidden="true"> <div class="drp-con-i"> <i class="fa fa-trash pull-right folder_action folder_show" aria-hidden="true" data-remove="'+prev_id+'" data-action="delete" style="margin-top: 2px;"></i> <i class="fa fa-pencil-square-o pull-right folder_action folder_show" aria-hidden="true" data-remove="'+prev_id+'" data-action="edit" style="margin-top: 3px;"></i> </div> </i>';
		$(this).parent().parent().parent().parent().html(append_folder);
	}}, '.cancel_rename');

	$(document).on({click:function(e){
		var rename_name = $(this).parent().children('[name="renamemytext[]"]').val();
		var target = $(this).parent().parent().parent().parent();
		console.log(target);
		var url = window.location.origin+'/default/manage-folder';
        var token = $('input[name="_token"]').val();
        $.post(url,{
			'_token':token,
			'name':rename_name,
			'id':prev_id,
			'action':'update',
		},function(result){
// <i class="fa fa-caret-square-o-down pull-right drp-cat-i" aria-hidden="true"> <div class="drp-con-i"> <i class="fa fa-trash pull-right folder_action folder_show" aria-hidden="true" data-remove="'+prev_id+'" data-action="delete" style="margin-top: 2px;"></i> <i class="fa fa-pencil-square-o pull-right folder_action folder_show" aria-hidden="true" data-remove="'+prev_id+'" data-action="edit" style="margin-top: 3px;"></i> </div> </i>
			// alert (result);
			if(parseInt(result) == 1){
				var append_folder = '<a href="#ungroup" style="flex:1" class="indiv-sub-list current_folder">'+rename_name+'</a> \
												<i class="fa fa-caret-square-o-down pull-right drp-cat-i" aria-hidden="true"> <div class="drp-con-i"> <i class="fa fa-trash pull-right folder_action folder_show" aria-hidden="true" data-remove="'+prev_id+'" data-action="delete" style="margin-top: 2px;"></i> <i class="fa fa-pencil-square-o pull-right folder_action folder_show" aria-hidden="true" data-remove="'+prev_id+'" data-action="edit" style="margin-top: 3px;"></i> </div> </i>';
				target.html(append_folder);
				$('li[data-remove="'+prev_id+'"] a.add_to').text(rename_name);
			}else{
				alert ('Unknown error occured.');
			}
		});
	}}, '.rename_folder');

	$(document).on({keypress:function(e){
		var key = e.which;
		 if(key == 13)  // the enter key code
		  {
		  	$(this).parent().children('.create_folder').click();
		    return false;  
		  }
	}}, '[name="mytext[]"]');

	$(document).on({keypress:function(e){
		var key = e.which;
		 if(key == 13)  // the enter key code
		  {
		  	$(this).parent().children('.rename_folder').click();
		    return false;
		  }
	}}, '[name="renamemytext[]"]');

});

</script>
<script type="text/javascript">
$(document).ready(function() {
    $(document).on({click:function(e){
		e.preventDefault();
		$('.class_for_remove').removeClass("current-mkn");
        $(this).parent().addClass("current-mkn");
        var tab_mkn = $(this).attr("href");
        $(".tab-content-mkn").not(tab_mkn).css("display", "none");
        $(tab_mkn).fadeIn();
	}}, '.tabs-menu-mkn a');
});

function ajax_success_message(str){
    $('#ajax_status').show().html(str).fadeOut(1500,function(){
        $('#ajax_status').addClass('hide_this_loading');
        $('#ajax_status').html('<img src="'+window.location.origin+'/uploads/ajax_loading.gif" class="img-responsive" alt="" >');
    });
}

function get_all_inquiry(){
	$('#ajax_status').css('display','block');
	$('#ajax_status').removeClass('hide_this_loading');
	$('.replace_area').html('<h2 style="padding:10px;">Loading...</h2>');
	var inq_main_menu = $('[name="inq_main_menu"]').val();
	var inq_sub_menu = $('[name="inq_sub_menu"]').val();
	var unread_message_val = $('[name="unread_message_val"]').val();
	var search_val = $('[name="search_val"]').val();
	var page_no_val = $('[name="page_no_val"]').val();
	var date_val = $('[name="date_val"]').val();
	var flag_val = $('[name="flag_val"]').val();
	var spam_val = $('[name="spam_val"]').val();
	var trash_val = $('[name="trash_val"]').val();
	var group_val = $('[name="group_val"]').val();
	var all_inq_url = window.location.origin+'/get-message-data/inq_main_menu=='+inq_main_menu+'+..+inq_sub_menu=='+inq_sub_menu+'+..+unread_message_val=='+unread_message_val+'+..+search_val=='+search_val+'+..+page_no_val=='+page_no_val+'+..+date_val=='+date_val+'+..+flag_val=='+flag_val+'+..+spam_val=='+spam_val+'+..+trash_val=='+trash_val+'+..+group_val=='+group_val;
	$.get(all_inq_url, function(data){
		$( ".replace_area" ).html( data );
		// alert(JSON.stringify(data));
		$('#ajax_status').addClass('hide_this_loading');
	});
}

function check_checked(){
    var selected = '';
    var action = '';
    $('.mail_check:checked').each(function(){
        selected += $(this).attr('inquery_id_data')+'_';
        action += $(this).attr('data_quotation_type')+'_';
    });
    if(selected == '' || selected == null){
        alert ("Select at least an inquiry");
        return false;
    }else{
        return selected+'::'+action;
    }
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

$(document).on({click:function(e){
	e.preventDefault();
	$('[name="inq_main_menu"]').val($(this).text());
	// $('[name="inq_sub_menu"]').val('All');
}}, '.indiv-sub-list');

$(document).on({click:function(e){
	e.preventDefault();
	$('[name="inq_sub_menu"]').val($(this).text());
	$('.replace_area').html('<h2 style="padding:10px;">Loading...</h2>');
	get_all_inquiry();
}}, '.all_inq_sub_menu_class');

$(document).on({click:function(e){
	if ($('input[name="all_unread_inq"]').is(':checked')) {
		$('[name="unread_message_val"]').val('true');
	}else{
		$('[name="unread_message_val"]').val('false');
	}
	get_all_inquiry();
}}, '[name="all_unread_inq"]');

$(document).on({click:function(e){
	e.preventDefault();
	var search_text =  $(this).parent().children('[name="search_all_sender_inq"]').val();
	$('[name="search_val"]').val(search_text);
	get_all_inquiry();
}},'.all_inq_search_btn');

var current_page = 1;

$(document).on({click:function(e){
	e.preventDefault();
	current_page++;
	$('[name="page_no_val"]').val(current_page);
	get_all_inquiry();
	$('.current_page_inq').html(current_page);
}},'.all_inq_next_page');

$(document).on({click:function(e){
	e.preventDefault();
	if(current_page > 1){
		current_page--;
	}else{
		current_page = 1;
	}
	$('[name="page_no_val"]').val(current_page);
	get_all_inquiry();
	$('.current_page_inq').html(current_page);
}},'.all_inq_prev_page');

$(document).on({click:function(e){
	e.preventDefault();
	var current_page = $(this).parent().children('[name="custom_page"]').val();
	if(parseInt(current_page) > 0){
		window.scrollTo(500, 0);
		$('[name="page_no_val"]').val(current_page);
		$('[name="custom_page"]').val('');
		get_all_inquiry();
		$('.current_page_inq').html(current_page);
	}else{}
}},'.custom_page_post');

$('[name="custom_page"]').keypress(function (e) {
 var key = e.which;
 if(key == 13)  // the enter key code
  {
  	$(this).parent().children('.custom_page_post').click();
    return false;  
  }
});

$(document).on({click:function(e){
	e.preventDefault();
	$('[name="date_val"]').val($(this).attr('data-date_format'));
	get_all_inquiry();
}},'.all_inq_date');

$(document).on({click:function(e){
	e.preventDefault();
	var target = $(this);
	var addto_id = target.parent().attr('data-remove');
	var url = window.location.origin+'/default/manage-folder';
    var token = $('input[name="_token"]').val();
    var selected = check_checked();
    if(selected){
    	$.post(url,{
			'_token':token,
			'name':'unknown',
			'id':addto_id,
			'action':'addto',
			'selected':selected,
			},function(result){
				if(parseInt(result) == 1){
					get_all_inquiry();
				}else{
					alert ('Unknown error occured.');
				}
		});
    }
	/*$('[name="date_val"]').val($(this).attr('data-date_format'));
	get_all_inquiry();*/
}},'.add_to');

$(document).on({click:function(e){
	if ($('input[name="all_inq_flag"]').is(':checked')) {
		$('[name="flag_val"]').val('true');
	}else{
		$('[name="flag_val"]').val('false');
	}
	get_all_inquiry();
}}, '[name="all_inq_flag"]');

// $(document).on({click:function(e){
// 	alert (5);
// }}, '.inq_flag_hover');


$(document).on({click:function(e){
    e.preventDefault();
    var url,inquery_id,product_name,user_name,template,thread,action_preformed,inquery,reverse_action;
    action_preformed = $(this).attr('ca_action_performed');
    url = window.location.origin+"/conversation/"+$(this).data('inquery_id')+'/'+$(this).attr('ca_quotation_type');
    $.get(url).done(function(r){
        $('.inquery_message').html(r);

        for (var i = 1 ; i < $(".quantity_count").length+1; i++) {
        	// var qt = $(".quantity_count").eq(i).val();
        	// var ut = $(".unit_count").eq(i).val();
        	var qt = $(".quantity_count"+i).val();
        	var ut = $(".unit_count"+i).val();
        	$(".total_count"+i).val( parseInt(qt) *  parseInt(ut));
        	// $(".total_count").eq(i).val( parseInt(qt) *  parseInt(ut));
        }

        $(document).on({keyup:function(){
        	var a1 = $(this).val();
        	var a2 = $(this).parent().parent().find('.unit_count').val();
        	$(this).parent().parent().find('.total_count').val(a1*a2);
        }},'.quantity_count');
        $(document).on({keyup:function(){
        	var a1 = $(this).val();
        	var a2 = $(this).parent().parent().find('.quantity_count').val();
        	$(this).parent().parent().find('.total_count').val(a1*a2);
        }},'.unit_count');
       
      
		

        refresh_unread_message();
        inquery = $('.inquery_action:first');
        inquery_id = inquery.attr('ca_inquery_id');
        reverse_action = inquery.attr('ca_action');
        if(typeof action_preformed != "undefined" && action_preformed !="all_inquery" && action_preformed != "sent"){
            switch(action_preformed){
                case "flag":
                    $('.container_of_inquery_action_btn').html('<a class="pull-right text-danger reverse_action_inquery" href="#" ca_inquery_id="'+inquery_id+'" style="margin-top:.5%;margin-right:2%" ca_action="'+reverse_action+'" ca_reverse_from="'+action_preformed+'"><i class="fa fa-flag-checkered"></i> Not Flag</a>');
                    break;
                case "spam":
                    $('.container_of_inquery_action_btn').html('<a class="pull-right text-danger reverse_action_inquery" href="#" ca_inquery_id="'+inquery_id+'" style="margin-top:.5%;margin-right:2%" ca_action="'+reverse_action+'" ca_reverse_from="'+action_preformed+'"><i class="fa fa-flag-checkered"></i> Not Spam</a>');
                    break;
                case "trush":
                    $('.container_of_inquery_action_btn').html('<a class="pull-right text-danger reverse_action_inquery" href="#" ca_inquery_id="'+inquery_id+'" style="margin-top:.5%;margin-right:2%" ca_action="'+reverse_action+'" ca_reverse_from="'+action_preformed+'"><i class="fa fa-flag-checkered"></i> Not Trash</a>');
                    break;
            }


        }
    });
}},'.go_to_conversation');


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

/*************Change view for inquiry message**************/
$(document).on({click:function(e){
	var messID = $(this).attr('data-messID');
	var url = window.location.origin;
	$.get(url+'/conversation/change-inq-view',{
		'messID':messID,
	},function(r){
		// alert (r);
	});
	refresh_unread_message();
}},'.view_changer');

/********TAKE ACTION TO AN INQUERY************************/
$(document).on({click:function(e){
    e.preventDefault();
    $('#ajax_status').removeClass('hide_this_loading');
    var action,inquery_id;
    action = $(this).attr('ca_action');
    if(action == "single_flag" || action == "join_flag"){
    	$(this).toggleClass('inquery_action');
    	$(this).toggleClass('reverse_action_inquery');
    	$(this).toggleClass('inq_flag_default');
    	$(this).toggleClass('inq_flag_active');
    }
    inquery_id = $(this).attr('ca_inquery_id');
    $.ajax({
        url:window.location.origin+"/inquery_action/"+action+"/"+inquery_id,
        success:function(r){
            ajax_success_message("<h4 style='color:#fff;font-weight: bold;margin-top:5%'>Action Performed!!!<h4>");
            $('.modal-header a').click();
            get_all_inquiry();
            // $('a[ca_quotation_type="'+action.split('_')[0]+'"][data-inquery_id="'+inquery_id+'"]').closest('.message_block').hide(500);
        }
    })
}}, '.inquery_action');

/*************REVERSE ACTION ON AN INQUERY;*******************/
$(document).on({click:function(e){
    e.preventDefault();
    var ca_inquery_id,ca_action,url,action_from;
    $('#ajax_status').removeClass('hide_this_loading');
    ca_inquery_id = $(this).attr('ca_inquery_id');
    ca_action = $(this).attr('ca_action');
    if(ca_action == "single_flag" || ca_action == "join_flag"){
    	$(this).toggleClass('inquery_action');
    	$(this).toggleClass('reverse_action_inquery');
    	$(this).toggleClass('inq_flag_default');
    	$(this).toggleClass('inq_flag_active');
    }
    action_from = $(this).attr('ca_reverse_from');
    url = window.location.origin+"/reverse-action-on-inquery/"+ca_action+'_'+ca_inquery_id+'_'+action_from;
    $.ajax({
        url:url,
        type:'get',
        success:function(r){
            if(r==1){
                ajax_success_message("<h4 style='color:#fff;font-weight: bold;margin-top:5%'>Action Performed!!!<h4>");
                $('.modal-header a').click();
                get_all_inquiry();
                // $('a[ca_action_performed="'+action_from+'"][ca_quotation_type="'+ca_action.split('_')[0]+'"][data-inquery_id="'+ca_inquery_id+'"]').closest('.message_block').hide(500);
            }
        }
    })

}}, '.reverse_action_inquery');

/* Select all checkbox for bulk actions */
$('.inq_select_all').click(function(event){
  if(this.checked) {
      // Iterate each checkbox
      $('.inq_select_single').each(function() {
          this.checked = true;
          $(this).parent().parent().parent().parent().addClass('checkbox_select');
      });
  }
  else {
    $('.inq_select_single').each(function() {
          this.checked = false;
          $(this).parent().parent().parent().parent().removeClass('checkbox_select');
      });
  }
});

$(document).on({click:function(e){
	if(this.checked) {
      // Iterate each checkbox
          this.checked = true;
          $(this).parent().parent().parent().parent().addClass('checkbox_select');
  }
  else {
          this.checked = false;
          $(this).parent().parent().parent().parent().removeClass('checkbox_select');
  }
}},'.inq_select_single');

$(document).on({click:function(e){
	get_all_inquiry();
}},'.refresh_data');

$(document).on({click:function(e){
	e.preventDefault();
	var mark_action = $(this).attr('data-target_action');
	var selected = check_checked();
	url = window.location.origin+'/default/mark-action';
	if(selected){
		$('#ajax_status').css('display','block');
		$('#ajax_status').removeClass('hide_this_loading');
		$.get(url,{
		mark_action:mark_action,
		selected:selected,
		},function(result){
			if(result == '1'){
				get_all_inquiry();
			}else{
				alert ("Undefined error occured.");
				get_all_inquiry();
			}
		});
	}
}},'.mark_action');

$('[name="search_all_sender_inq"]').keypress(function (e) {
 var key = e.which;
 if(key == 13)  // the enter key code
  {
  	$(this).parent().children('.all_inq_search_btn').click();
    // $('.all_inq_search_btn').click();
    return false;  
  }
});

$(document).on({click:function(e){
	e.preventDefault();
    var base_url = window.location.origin;
    var target_action = $(this).attr('targeted');
    var selected = check_checked();
    if(selected){
        var res = selected.split("::");
        var action_id = res[0].slice(0, -1);
        var action_target = res[1].split("_");
        if(target_action == 'trush'){
            var ac_tar = action_target.join("_trush::");
            ac_tar = ac_tar.slice(0, -2);
            var target_url = base_url+'/inquery_action/'+ac_tar+'/'+action_id;
        }
        else if(target_action == 'flag'){
            var ac_tar = action_target.join("_flag::");
            ac_tar = ac_tar.slice(0, -2);
            var target_url = base_url+'/inquery_action/'+ac_tar+'/'+action_id;
        }
        else if(target_action == 'spam'){
            var ac_tar = action_target.join("_spam::");
            ac_tar = ac_tar.slice(0, -2);
            var target_url = base_url+'/inquery_action/'+ac_tar+'/'+action_id;
        }
        else if(target_action == 'nottrush'){
            var action_id_array = action_id.split("_");
            var action_loop = action_id_array.length;
            var reverse_action_str = '';
            for(var ai = 0;ai<action_loop;ai++){
                reverse_action_str += action_target[ai]+'_trush_'+action_id_array[ai]+'_trush::';
            }
            ac_tar = reverse_action_str;
            ac_tar = ac_tar.slice(0, -2);
            var target_url = base_url+'/reverse-action-on-inquery/'+ac_tar;
        }
        else if(target_action == 'notflag'){
            var action_id_array = action_id.split("_");
            var action_loop = action_id_array.length;
            var reverse_action_str = '';
            for(var ai = 0;ai<action_loop;ai++){
                reverse_action_str += action_target[ai]+'_spam_'+action_id_array[ai]+'_flag::';
            }
            ac_tar = reverse_action_str;
            ac_tar = ac_tar.slice(0, -2);
            var target_url = base_url+'/reverse-action-on-inquery/'+ac_tar;
        }
        else if(target_action == 'notspam'){
            var action_id_array = action_id.split("_");
            var action_loop = action_id_array.length;
            var reverse_action_str = '';
            for(var ai = 0;ai<action_loop;ai++){
                reverse_action_str += action_target[ai]+'_spam_'+action_id_array[ai]+'_spam::';
            }
            ac_tar = reverse_action_str;
            ac_tar = ac_tar.slice(0, -2);
            var target_url = base_url+'/reverse-action-on-inquery/'+ac_tar;
        }

        // alert (target_url);

        $.ajax({
            url:target_url,
            success:function(r){
                // alert (r);
                ajax_success_message("<h4 style='color:#fff;font-weight: bold;margin-top:5%'>Action Performed!!!<h4>");
                var action_id_array_del = action_id.split("_");
                var action_loop_del = action_id_array_del.length;
                if(target_action == 'flag'){
                    for(var di = 0;di<action_loop_del;di++){
	                    $('a[data-inquery_id="'+action_id_array_del[di]+'"]').closest('.head-query').children('.head-query-top').children('.col-sm-6').children('span').children('.inq_flag_hover').removeClass('inquery_action');
	                    $('a[data-inquery_id="'+action_id_array_del[di]+'"]').closest('.head-query').children('.head-query-top').children('.col-sm-6').children('span').children('.inq_flag_hover').addClass('reverse_action_inquery');
	                    $('a[data-inquery_id="'+action_id_array_del[di]+'"]').closest('.head-query').children('.head-query-top').children('.col-sm-6').children('span').children('.inq_flag_hover').removeClass('inq_flag_default');
	                    $('a[data-inquery_id="'+action_id_array_del[di]+'"]').closest('.head-query').children('.head-query-top').children('.col-sm-6').children('span').children('.inq_flag_hover').addClass('inq_flag_active');
	                }
                }
                if(target_action == 'spam' || target_action == 'notflag' || target_action == 'notspam' || target_action == 'trush' || target_action == 'nottrush'){
                    for(var di = 0;di<action_loop_del;di++){
	                    $('a[data-inquery_id="'+action_id_array_del[di]+'"]').closest('.head-query').hide(500);
	                }
                }
                get_all_inquiry();
            }
        });

    }
}}, '.all_inquery_action');

/****** SUBMIT QUOTATION FORM*******/
$(document).on({submit:function(e){
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
}}, '.conversation_form');

$(document).on({click:function(e){
    e.preventDefault();
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
        $('.conversation_form').submit();
    }
}},'.submit_single_msg');




$(document).on({click:function(e){
    e.preventDefault();
    var text_mess = $.trim($(this).parent().children('textarea').val());
    var form_class = $(this).attr('formclass');
    var url = $('.'+form_class).attr('action');
    if(text_mess == ''){
    	alert ('Please write your message first');
    }else{
    	$.post(url,$('.'+form_class).serialize(),function(r){
	    	$('.modal-header a').click();
	        if(r==1){
	            ajax_success_message("<h4 style='color:#fff;font-weight: bold;margin-top:5%'>Action Performed!!!<h4>");
	        }else{
	            ajax_success_message("<h4 style='color:#fff;font-weight: bold;margin-top:5%'>Action Could Not Perform!!!<h4>");
	        }
	    });
    }
    
}},'.this_product_quotation_btn');

/* all Inquiry area */
$(document).on({click:function(e){
	e.preventDefault();
	// $('[name="unread_message_val"]').val('false');
	$('[name="search_val"]').val('');
	$('[name="page_no_val"]').val('1');
	$('[name="date_val"]').val('newToOldC');
	$('[name="flag_val"]').val('false');
	$('[name="spam_val"]').val('false');
	$('[name="trash_val"]').val('false');
	$('[name="group_val"]').val('0');
	get_all_inquiry();
}},'.all_inquiry');

/* flagged area */
$(document).on({click:function(e){
	e.preventDefault();
	// $('[name="unread_message_val"]').val('false');
	$('[name="search_val"]').val('');
	$('[name="page_no_val"]').val('1');
	$('[name="date_val"]').val('newToOldC');
	$('[name="flag_val"]').val('true');
	$('[name="spam_val"]').val('false');
	$('[name="trash_val"]').val('false');
	$('[name="group_val"]').val('0');
	get_all_inquiry();
}},'.flagged');

/* spam area */
$(document).on({click:function(e){
	e.preventDefault();
	// $('[name="unread_message_val"]').val('false');
	$('[name="search_val"]').val('');
	$('[name="page_no_val"]').val('1');
	$('[name="date_val"]').val('newToOldC');
	$('[name="flag_val"]').val('false');
	$('[name="spam_val"]').val('true');
	$('[name="trash_val"]').val('false');
	$('[name="group_val"]').val('0');
	get_all_inquiry();
}},'.show_spam');

/* sent area */
$(document).on({click:function(e){
	e.preventDefault();
	// $('[name="unread_message_val"]').val('false');
	$('[name="search_val"]').val('');
	$('[name="page_no_val"]').val('1');
	$('[name="date_val"]').val('newToOldC');
	$('[name="flag_val"]').val('false');
	$('[name="spam_val"]').val('false');
	$('[name="trash_val"]').val('false');
	$('[name="group_val"]').val('0');
	get_all_inquiry();
}},'.show_sent');


/* trash area */
$(document).on({click:function(e){
	e.preventDefault();
	// $('[name="unread_message_val"]').val('false');
	$('[name="search_val"]').val('');
	$('[name="page_no_val"]').val('1');
	$('[name="date_val"]').val('newToOldC');
	$('[name="flag_val"]').val('false');
	$('[name="spam_val"]').val('false');
	$('[name="trash_val"]').val('true');
	$('[name="group_val"]').val('0');
	get_all_inquiry();
}},'.show_trash');

/* show order */
$(document).on({click:function(e){
	e.preventDefault();
	window.scrollTo(500, 0);
	// $('[name="unread_message_val"]').val('false');
	$('[name="search_val"]').val('');
	$('[name="page_no_val"]').val('1');
	$('[name="date_val"]').val('newToOldC');
	$('[name="flag_val"]').val('false');
	$('[name="spam_val"]').val('false');
	$('[name="trash_val"]').val('false');
	$('[name="group_val"]').val('0');
	get_all_inquiry();
}},'.show_order');

$(document).on({click:function(e){
	e.preventDefault();
	var folder_id = $(this).parent().attr('data-remove');
	// $('[name="unread_message_val"]').val('false');
	$('[name="search_val"]').val('');
	$('[name="page_no_val"]').val('1');
	$('[name="date_val"]').val('newToOldC');
	$('[name="flag_val"]').val('false');
	$('[name="spam_val"]').val('false');
	$('[name="trash_val"]').val('false');
	$('[name="group_val"]').val(folder_id);
	get_all_inquiry();
}}, '.folder_message');

$('.lf-dots').click( function(event){
	event.stopPropagation();
	$('.lf-d-inner').removeClass('display');
	$(this).find('.lf-d-inner').toggleClass('display');
});
$(document).click( function(){
	$('.lf-d-inner').removeClass('display');
});


</script>
@stop