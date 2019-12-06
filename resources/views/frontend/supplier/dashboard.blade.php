@extends('frontend.layouts.about-us-topbar')

@section('page_css')
<link property='stylesheet' href="{!! asset('assets/frontend/css/dashboard.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/frontend/css/spectrum.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/frontend/css/why-bdtdc.css',is_secured()) !!}" rel="stylesheet">
<link  rel="stylesheet" property='stylesheet' href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
@endsection
@section('content')
<div id="ajax_status" class="hide_this text-center">
   <img itemprop="image" src="{{ URL::asset('uploads/ajax_loading.gif',is_secured()) }}" class="img-responsive" alt="" >
</div>
<div class="container">
<div id="item_sha" class="row" style="margin-top: 2%;background-color: #eceef2">
   <!-- -------LOADING ANIMATION WHILE PAGE IS IS LOADING--------- -->
   <div class="col-sm-2 padding-right">
      @include('frontend.layouts.dashboard-aside')
   </div>
   <div class="col-sm-8 padding-right">
      <div class="category-tab">
         <!--category-tab-->
         <div class="col-sm-12">
            @if(Session::has('update_msg'))
            <p class="text-danger">{{ Session::get('update_msg') }}</p>
            @endif
            @if(Session::has('profile_update_msg'))
            <p class="text-danger">{{ Session::get('profile_update_msg') }}</p>
            @endif
            @if(Session::has('success'))
            <p class="text-success">{{ Session::get('success') }}</p>
            @endif
            @if(Session::has('error'))
            <p class="text-danger">{{ Session::get('error') }}</p>
            @endif
            @if(Session::has('supplier_product_mag'))
            <p class="text-danger">{{ Session::get('supplier_product_mag') }}</p>
            @endif
            @if(Session::has('up_msg'))
            <div id="successMessage" class="alert alert-success text-center">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
               <p>{{ Session::get('up_msg') }}</p>
            </div>
            @endif
            @php    
            $user_id = \Sentinel::getUser()->id;
            $company = App\Models\Companies::where('user_id',$user_id)->first();
            @endphp
            <ul class="nav nav-tabs">
               <li class="" style="border-right: 1px solid rgba(0,0,0,.1);"><a itemprop="url"  href="#home" data-toggle="tab">Home</a></li>
               <li style="border-right: 1px solid rgba(0,0,0,.1);" class="call_to_company_info_form" data-page="company_info_form_page"><a itemprop="url"  href="#company_site" data-toggle="tab">Company & Site</a></li>
               <li style="border-right: 1px solid rgba(0,0,0,.1);"><a itemprop="url"  href="{{ URL::to('default','message',is_secured()) }}">Messages</a></li>
               <li style="border-right: 1px solid rgba(0,0,0,.1);"><a itemprop="url"  href="#account" data-toggle="tab">Account</a></li>
               @if (Sentinel::check())
               @php
               $role = App\Models\Role_user::where('user_id',Sentinel::getUser()->id)->first();
               @endphp
               @if($role->role_id ==4)
               <li style="border-right: 1px solid rgba(0,0,0,.1);"><a itemprop="url" target="_blank"  href="{{ URL::to('buyer/guide-bdsource')}}" >Buyer Guide</a></li>
               @else
               <li style="border-right: 1px solid rgba(0,0,0,.1);"><a itemprop="url"  href="#template_setting" data-toggle="tab" class="template_setting">Template-Setting</a></li>
               <li style="border-right: 1px solid rgba(0,0,0,.1);"><a itemprop="url"  href="#product" data-toggle="tab" class="product_tab">Manage Products</a></li>
               @endif
               @endif
            </ul>
         </div>
         <div class="tab-content">
            <input type="hidden" name="section1" value="{{ ($section) ? $section:'' }}">
            <!-- ---COMPANY HOME;-- -->
            <div class="tab-pane fade" id="home">
               <div class="col-sm-12 col-md-12 col-lg-12">
                  <div style="margin-bottom:3%;" class="col-sm-12 col-md-12 col-lg-12 padding_0" >
                     <div class="box" style="width: 100%;background-color:#fff; margin-bottom: 30px;z-index: inherit;">
                        <div align="center" style="" class="col-sm-6">
                           <div align="center" style="" class="col-sm-12">
                              <div style="padding-top:10px;" align="left" class="col-sm-6 padding_0">
                                 <div class="tooltip-content" style="display:none;">
                                    <p style="margin: 0; padding-left:20px; font-weight: 600; ">Verify helps you -</p>
                                    <p style="margin: 0;line-height:20px; font-size: 12px;"><span><img  style="padding-bottom: 0px;" src="{{asset('assets/frontend/images/Right-icon.png')}}"> </span>Build Trust with 100 thousands+ Suppliers</p>
                                    <p style="margin: 0;line-height:20px; font-size: 12px;"><span><img style="padding-bottom: 0px;" src="{{asset('assets/fontend/bdtdc-images/Right-icon.png')}}"> </span>Get Personalized Experience on BuyerSeller</p>
                                 </div>
                                 <?php
                                    $fff=' "<i class="fa fa-check"></i>" Verified Buyers Inquiries, Direct Contact with Buyers, Dedicated Service Agent';
                                    ?>
                                 <a  itemprop="url" itemprop="url"  href="{{ URL::to('SupplierChannel/pages/verified_supplier',32,is_secured())}}" title="Verified supplier assessed by a world-leading inspection company (i.e SGS, Bureau Veritas). Click logo to learn more" class="gs"><img style="width: 32px;" class="" itemprop="image" style="border: none"  src="{{ asset('bdtdc-product-image/home-page/verified-supplier.png') }}">
                                 <span class="unveri" style="color: red"> Unverified</span> </a> 
                              </div>
                              <div style="padding-top:10px;" align="left" class="col-sm-6">
                                 <div class="tooltip-upg" style="display: none;">
                                    <p style="margin: 0;line-height:20px; font-size: 12px;"><span><img style="padding-bottom: 0px;" src="{{asset('assets/fontend/bdtdc-images/Right-icon.png')}}"> </span>Obtain comprehensive buyers profiles</p>
                                    <p style="margin: 0;line-height:20px; font-size: 12px;"><span><img style="padding-bottom: 0px;" src="{{asset('assets/fontend/bdtdc-images/Right-icon.png')}}"> </span>Stand out from the crowd</p>
                                    <p style="margin: 0;line-height:20px;font-size: 12px;"><span><img style="padding-bottom: 0px;" src="{{asset('assets/fontend/bdtdc-images/Right-icon.png')}}"> </span>Meet Buyers face-to-face</p>
                                 </div>
                                 <a  itemprop="url" itemprop="url" title="Gold Suppliers: pre-qualified suppliers" href="{{ URL::to('SupplierChannel/pages/suppliers_memebership',23) }}#upgp"  class="gs"><img style="width: 32px;" class="" itemprop="image" style="border: none" src="{{ asset('bdtdc-product-image/home-page/Gold-membership.png') }}" alt="Gold membership for Bdtdc"><span class="upgde"> Upgrade</span><span itemprop="name" style="display:none;">verified-supplier</span></a>
                              </div>
                              <div style="border-top:1px solid rgba(0,0,0,.1);border-bottom:1px solid rgba(0,0,0,.1);margin-top: 5px;" class="col-sm-10 padding_0">
                                 <div style="padding-top:10px;padding-bottom:10px" class="col-sm-5 padding_0">
                                    @if (Sentinel::check())
                                    @if(Sentinel::getUser()->profile_picture)
                                    <img itemprop="image" style="width:100%;padding-top:5%" src="{{ URL::to('uploads',Sentinel::getUser()->profile_picture,is_secured()) }}" alt="" />
                                    @else
                                    <img itemprop="image" style="width:100%;padding-top:5%" src="{!! asset('assets/default-avatar.png',is_secured()) !!}" alt="" />
                                    @endif
                                    @else
                                    <img itemprop="image" style="width:100%;padding-top:5%" src="{!! asset('assets/default-avatar.png',is_secured()) !!}" alt="" />
                                    @endif
                                 </div>
                                 <div style="padding-top: 15px; padding-bottom: 10px; background-color: transparent; padding-right: 0;" align="left" class="col-sm-7">
                                    <ul style="margin:0">
                                       <li>
                                          @if (Sentinel::check())
                                          <p>{{ Sentinel::getUser()->first_name }} {{ Sentinel::getUser()->last_name }}</p>
                                          @endif 
                                       </li>
                                       @if($role->role_id ==3)
                                       <li style="padding-bottom: 5%">
                                          <a itemprop="url"  target="_blank" href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$company->name_string->name),$company->id,is_secured()) }}">Visit e-store</a>
                                       </li>
                                       <li>
                                          <a itemprop="url"  target="_blank" href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$company->name_string->name),$company->id,is_secured()) }}">
                                          @if($company->supplier_info)
                                          @if($company->supplier_info->membership_pakacge_id)
                                          {{ $company->supplier_info->supp_pro_packname->name}} Member {{ $company->supplier_info->membership_year}} Years
                                          @endif
                                          @else
                                          Free member
                                          @endif
                                          </a>
                                       </li>
                                       @endif
                                    </ul>
                                 </div>
                                 <div>
                                 </div>
                              </div>
                              <div style="padding-bottom:20px;padding-top:5px" class="col-sm-10 padding_0">
                                 <div align="left">
                                    <p class="summary" style="margin:0px">Last Signed In:</p>
                                    @if (Sentinel::check())
                                    <p class="" style="margin:0px">{{ Sentinel::getUser()->last_login }}</p>
                                    @endif
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6" id="J-mh-notice-board-box" style="padding: 0px;">
                           <div class="col-md-12" style="padding: 0px; ">
                              <div style="font-size: 20px;text-align: center;padding: 2%;border-bottom: 1px solid rgb(206, 206, 206);">Notice Board</div>
                              <div class="col-md-12" style="padding-left: 0px;">
                               
                              </div>
                           </div>
                        </div>
                     </div>
                     @php
                     $notifications = getNotification();
                     $all_notifications = $notifications['all_notifications'];
                     $inquiry_notifications = $notifications['inquiry_notifications'];
                     $quote_notifications = $notifications['quote_notifications'];
                     $order_notifications = $notifications['order_notifications'];
                     @endphp
                     <div style="border:1px solid rgba(0,0,0,.2);margin-bottom:3% ; background-color: #fff; padding: 15px" class="col-sm-12 padding_0">
                        <p style="padding: 5px 15px;" class="title_home">To do list</p>
                        <div id="caro1" class="carousel slide" data-ride="carousel" data-interval="false" style="height: 110px; overflow: hidden;">
                           <div class="carousel-inner">
                              <div class="todolist item active">
                                 <div class="todo">
                                    <a href="{{URL::to('order-list?t='.($role?($role->role_id == 4?'sender':'product_owner_id'):'sender'),null,is_secured())}}">
                                       <div style="color: #333333;" class="todoicon pusher_notification_3">
                                          <span class="total_new_order_wb" style="font-size: 20px;"><i data-count="{{$order_notifications}}" class="glyphicon notification-icon"></i></span>
                                          <span><img  src="{{asset('assets/gold/New-Order.png')}}" alt="new order"> </span>
                                       </div>
                                       <p>New Orders<br>&nbsp;</p>
                                    </a>
                                 </div>
                                 <!-- <div class="todo">
                                    <a href="{{URL::to('Mybuying-Request?unread=true',null,is_secured())}}">
                                       <div style="color: #333333;" class="todoicon">
                                          <span class="latest_buying_request_wb" style="font-size: 20px;">0</span>
                                          <span><img  src="{{asset('assets/gold/latest-buying-request-icon.png')}}" alt="new order"> </span>
                                       </div>
                                       <p>Latest Buying Requests</p>
                                    </a>
                                 </div> -->
                                 <div class="todo">
                                    <a href="{{URL::to('Mybuying-Request?status=3',null,is_secured())}}">
                                       <div style="color: #333333;" class="todoicon">
                                          <span class="rejected_buying_request_wb" style="font-size: 20px;"><i data-count="{{$rejected_buying_request}}" class="glyphicon notification-icon"></i></span>
                                          <span><img  src="{{asset('assets/gold/Rejected-Buying-Request.png')}}" alt="new order"> </span>
                                       </div>
                                       <p>Rejected Buying Requests</p>
                                    </a>
                                 </div>
                                 <div class="todo">
                                    <a href="{{URL::to('default/message',null,is_secured())}}">
                                       <div style="color: #333333;" class="todoicon pusher_notification_1">
                                          <span class="total_new_inquiry_wb" style="font-size: 20px;"><i data-count="{{$inquiry_notifications}}" class="glyphicon notification-icon"></i></span>
                                          <span><img  src="{{asset('assets/gold/Unread-Message.png')}}" alt="new order"> </span>
                                       </div>
                                       <p>Unread Messages<br>&nbsp;</p>
                                    </a>
                                 </div>
                                 <div class="todo">
                                    <a href="{{URL::to('Mybuying-Request?unread=true',null,is_secured())}}">
                                       <div style="color: #333333;" class="todoicon pusher_notification_2">
                                          <span class="total_new_quote_wb" tyle="font-size: 20px;"><i data-count="{{$quote_notifications}}" class="glyphicon notification-icon"></i></span>
                                          <span><img  src="{{asset('assets/gold/Qutation-Received.png')}}" alt="new order"> </span>
                                       </div>
                                       <p>Quotation Received</p>
                                    </a>
                                 </div>
                              </div>
                              <!-- <div class="todolist item">
                                 
                              </div> -->
                           </div>
                        </div>
                        <a class="left carousel-control" href="#caro1" data-slide="prev" style="width: 15px; margin-left: 10px;">
                        <i  style="margin-top: 100px; font-size: 30px;" class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#caro1" data-slide="next" style="width: 15px; margin-right: 10px;">
                        <i style="margin-top: 100px; font-size: 30px;"  class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                        </a>
                     </div>
                     <div  style="border:1px solid rgba(0,0,0,.2);margin-bottom:3% ; background-color: #fff; padding: 15px" class="col-sm-12 padding_0">
                        @include('frontend.layouts.quotation-form-dashboard')
                     </div>
                  </div>
               </div>
            </div>
            <!-- ----COMPANY AND SITE;--- -->
            <div class="tab-pane fade" id="company_site" >
               <div class="portlet-body">
                  <div class="tab-content">
                     <!-- COMPANY INFO TAB WILL BE LOADED VIA AJAX FROM  COMPANY INFO FORM -->
                     <div class="col-xs-12 text-center">
                        <i style="font-size:100px;margin-top:5%;margin-bottom:5%" class="fa fa-spinner fa-pulse text-primary"></i>
                     </div>
                  </div>
               </div>
            </div>
            <!-- ----PROFILE INFORMATION;--- -->
            <div class="tab-pane fade" id="account">
               <div class="col-md-12">
                  <div class="portlet light">
                     <div class="portlet-title tabbable-line">
                        <div class="caption caption-md">
                           <i class="icon-globe theme-font hide"></i>
                           <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                           <div class="portlet-body">
                              <div class="tab-content">
                                 <!-- PERSONAL INFO TAB -->
                                 <div class="comtainer">
                                    <div class="row">
                                       <form name="supplier_profile_info" action="{!! URL::to('company/post_supplier_personal_info',null,is_secured()) !!}" method="post" class="form" enctype="multipart/form-data">
                                          {!! csrf_field() !!}
                                          <div class="col-xs-12">
                                             <!-- Nav tabs -->
                                             <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active"><a itemprop="url"  href="#personal_info" role="tab" data-toggle="tab">Contact Information</a></li>
                                                <li role="presentation"><a itemprop="url"  href="#change_avatar" role="tab" data-toggle="tab">Avatar</a></li>
                                                <li role="presentation"><a itemprop="url"  href="#password_reset" role="tab" data-toggle="tab">Password Reset</a></li>
                                             </ul>
                                          </div>
                                          <div class="col-xs-12">
                                             <!-- Tab panes -->
                                             <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="personal_info">
                                                   <div style="margin-bottom:1% ;margin-top:1%" class="col-xs-12">
                                                      <div class="col-xs-3 padding_0 text-right">
                                                         <label class="text-muted" style="font-size:12px;font-weight:bold">First Name</label>
                                                      </div>
                                                      <?php //dd($supplier); ?>
                                                      <div class="col-xs-6">
                                                         <input style="height:27px;padding-bottom:1%;font-size:12px" type="text" class="form-control" name="first_name" value="{{ $supplier->first_name ?? '' }}" placeholder="">
                                                      </div>
                                                   </div>
                                                   <div style="margin-bottom:1% ;margin-top:1%" class="col-xs-12">
                                                      <div class="col-xs-3 padding_0 text-right">
                                                         <label class="text-muted" style="font-size:12px;font-weight:bold">Last Name</label>
                                                      </div>
                                                      <div class="col-xs-6">
                                                         <input style="height:27px;padding-bottom:1%;font-size:12px" type="text" class="form-control" name="last_name" value="{{ $supplier->last_name ?? '' }}" placeholder="">
                                                      </div>
                                                   </div>
                                                   <div style="margin-bottom:1% ;margin-top:1%" class="col-xs-12">
                                                      <div class="col-xs-3 padding_0 text-right">
                                                         <label class="text-muted" style="font-size:12px;font-weight:bold">E-mail</label>
                                                      </div>
                                                      <div class="col-xs-6">
                                                         <input style="height:27px;padding-bottom:1%;font-size:12px" type="text" class="form-control" name="email" value="{{ $supplier->email ?? '' }}" placeholder="" readonly>
                                                      </div>
                                                   </div>
                                                   <div style="margin-bottom:1% ;margin-top:1%" class="col-xs-12">
                                                      <div class="col-xs-3 padding_0 text-right">
                                                         <label class="text-muted" style="font-size:12px;font-weight:bold">Job Depertment</label>
                                                      </div>
                                                      <?php //echo "<pre>"; print_r($supplier); echo "</pre>"; ?>
                                                      <div class="col-xs-6">
                                                         <input style="height:27px;padding-bottom:1%;font-size:12px" type="text" class="form-control" name="department" value="{{ $supplier->department ?? '' }}" placeholder="">
                                                      </div>
                                                   </div>
                                                   <div style="margin-bottom:1% ;margin-top:1%" class="col-xs-12">
                                                      <div class="col-xs-3 padding_0 text-right">
                                                         <label class="text-muted" style="font-size:12px;font-weight:bold">Job Position</label>
                                                      </div>
                                                      <div class="col-xs-6">
                                                         <input style="height:27px;padding-bottom:1%;font-size:12px" type="text" class="form-control" name="position" value="{{ $supplier->job_title ?? '' }}" placeholder="">
                                                      </div>
                                                   </div>
                                                   <div style="margin-bottom:1% ;margin-top:1%" class="col-xs-12">
                                                      <div class="col-xs-4">
                                                      </div>
                                                      <div class="col-xs-6">
                                                         <i data-target_navigation="#change_avatar" class="fa fa-arrow-circle-right fa-2x btn btn-primary btn-lg pull-right next_to_additional_info navigation_link" style="margin-top:1%"></i>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="change_avatar">
                                                   <div class="">
                                                      <h4 class="text-warning">Profile Picture</h4>
                                                   </div>
                                                   <div style="margin-bottom: 15px;">
                                                      <div class="row">
                                                         <div class="col-xs-12">
                                                            <input type="file" name="profile_picture" class="" style="">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-xs-12">
                                                         @if($supplier && $supplier->profile_picture)
                                                         <img itemprop="image" style="width:180px;height:180px" src="{{URL::to('uploads', $supplier->profile_picture ,is_secured())}}" alt="" class="img-thumbnail">
                                                         @else
                                                         <img itemprop="image" style="width:180px;height:180px" src="{{URL::to('uploads/no-image.jpg',null,is_secured())}}" alt="" class="img-thumbnail">
                                                         @endif
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-xs-10">
                                                         <input style="margin-top:1%;" type="submit" name="supplier_profile_info" class="btn btn-primary btn-join pull-right" value="Submit">
                                                         <i data-target_navigation="#personal_info" class="fa fa-arrow-circle-left fa-2x btn btn-primary btn-lg pull-right back_to_basic_info navigation_link" style="margin-right:2%;margin-top:1%"></i>
                                                      </div>
                                                   </div>
                                                </div>
                                       </form>
                                       <div role="tabpanel" class="tab-pane" id="password_reset">
                                       <form action="{{URL::to('user/password-reset')}}" method="post">
                                       {!! csrf_field() !!}
                                       <div class="">
                                       <h4 class="text-warning">Password Reset</h4>
                                       </div>
                                       @if (count($errors) > 0)
                                       <div class="alert alert-danger" style="margin-top:10px;">
                                       <ul>
                                       @foreach ($errors->all() as $error)
                                       <li>{{ $error }}</li>
                                       @endforeach
                                       </ul>
                                       </div>
                                       @endif
                                       <div style="margin-bottom:1% ;margin-top:1%" class="col-xs-12">
                                       <div class="col-xs-3 padding_0 text-right">
                                       <label class="text-muted" style="font-size:12px;font-weight:bold">Current Password</label>
                                       </div>
                                       <div class="col-xs-6">
                                       <input style="height:27px;padding-bottom:1%;font-size:12px" type="password" class="form-control" name="old_password" placeholder="Current Password" required>
                                       </div>
                                       </div>
                                       <div style="margin-bottom:1% ;margin-top:1%" class="col-xs-12">
                                       <div class="col-xs-3 padding_0 text-right">
                                       <label class="text-muted" style="font-size:12px;font-weight:bold">New Password</label>
                                       </div>
                                       <div class="col-xs-6">
                                       <input style="height:27px;padding-bottom:1%;font-size:12px" type="password" class="form-control" name="password" placeholder="New Password" required>
                                       </div>
                                       </div>
                                       <div style="margin-bottom:1% ;margin-top:1%" class="col-xs-12">
                                       <div class="col-xs-3 padding_0 text-right">
                                       <label class="text-muted" style="font-size:12px;font-weight:bold"> Confirm New Password</label>
                                       </div>
                                       <div class="col-xs-6">
                                       <input style="height:27px;padding-bottom:1%;font-size:12px" type="password" class="form-control" name="password_confirmation" placeholder="Confirm New Password" required>
                                       </div>
                                       </div>
                                       <div style="margin-bottom:1% ;margin-top:1%" class="col-xs-12">
                                       <input type="submit" class="btn btn-success password_change" value="Password Change" style="margin-left: 35%;" />
                                       </div>
                                       </form>
                                       </div>
                                       </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--Template Setting Area -->
            <div class="tab-pane fade" id="template_setting">
               <div class="portlet-body">
                  <div class="tab-content">
                     <!-- COMPANY INFO TAB -->
                     <div class="row product_list_row">
                        <div class="se-pre-con text-center">
                           <i class="fa fa-spinner fa-pulse btn btn-lg btn-primary"></i> Please wait...
                        </div>
                        <?php 
                           //print_r($template_setting_data);
                            ?>
                        <div style="padding-left:3%;padding-right:3%" class="col-xs-12">
                           <!-- <a itemprop="url"  href="" class="btn btn-primary btn-md pull-left">Product List</a> -->
                           <!-- <a itemprop="url"  href="#animatedModal" class="btn btn-primary btn-md pull-right add_product">Add Product</a> -->
                           <div class="flash-message">
                              @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                              @if(Session::has('alert-' . $msg))
                              <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a itemprop="url"  href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                              @endif
                              @endforeach
                           </div>
                           <!-- <a itemprop="url"  href="" class="btn btn-primary btn-md pull-left">Product List</a> -->
                           <a itemprop="url"  href="
                              @if(isset($supplier->name))
                              {{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$supplier->name),$company->id,is_secured())}}
                              @else
                              {{ URL::to('Home/company',$company->id,is_secured())}}
                              @endif" target="_blanck" class="btn btn-primary btn-md pull-right" style="border-radius: 5px !important;">Template Preview</a>
                           <button type="button" class="btn btn-primary add_section_modal" style="border-radius: 5px !important;" data-toggle="modal" data-target="#template_setting_modal">Add Section</button>
                           <div class="table-responsive">
                              <table style="margin-top:30px" class="table ">
                                 <thead>
                                    <tr class="" style="background-color:#E4EAF1; font-weight:bold">
                                       <td>Section</td>
                                       <td>Show Title & Logo</td>
                                       <td>Background Image</td>
                                       <td>Background Color</td>
                                       <td>Font Color</td>
                                       <td>Show Background Image</td>
                                       <td>Show Background Color</td>
                                       <td>Height</td>
                                       <td>Width</td>
                                       <td>Action</td>
                                    </tr>
                                 </thead>
                                 <tbody id="template_setting_bodye">
                                    @foreach($template_setting_data as $tsd)
                                    <tr class="text-muted" style="border-bottom:1px solid #ddd!important">
                                       <td class="text-left section_td" section_td_id="{{ $tsd->section_id }}">{{ $tsd->section_name }}</td>
                                       <td class="section_title_logo_td">
                                          @if($tsd->title_logo == 1)
                                          Show Both"
                                          @elseif($tsd->title_logo == 2)
                                          Title Only
                                          @elseif($tsd->title_logo == 3)
                                          Logo Only
                                          @else
                                          Hide All
                                          @endif
                                       </td>
                                       <td class="section_image_td">
                                          @if($tsd->section_id == 4)
                                          @if($tsd->back_image)
                                          <img itemprop="image" src="{{ URL::to('banner-images',$tsd->back_image,is_secured()) }}" width="51" height="38" title="First Slider Image">
                                          @endif
                                          @else
                                          @if($tsd->back_image)
                                          <img itemprop="image" src="{{ URL::to('uploads',$tsd->back_image,is_secured()) }}" width="51" height="38">
                                          @endif
                                          @endif
                                       </td>
                                       <td class="section_back_color_td">
                                          @if($tsd->section_id == 4)
                                          @if($tsd->back_color)
                                          <img itemprop="image" src="{{ URL::to('banner-images',$tsd->back_color,is_secured()) }}" width="51" height="38" title="Second Slider Image">
                                          @endif
                                          @else
                                          {{ $tsd->back_color }}
                                          @endif
                                       </td>
                                       <td class="section_font_color_td">
                                          @if($tsd->section_id == 4)
                                          @if($tsd->font_color)
                                          <img itemprop="image" src="{{ URL::to('banner-images',$tsd->font_color,is_secured()) }}" width="51" height="38" title="Third Slider Image">
                                          @endif
                                          @else
                                          {{ $tsd->font_color }}
                                          @endif
                                       </td>
                                       <td class="section_is_show_image_td"><?php if($tsd->is_show_image == 0){echo "Hide";}else{echo "Show";} ?></td>
                                       <td class="section_is_show_color_td"><?php if($tsd->is_show_color == 0){echo "Hide";}else{echo "Show";} ?></td>
                                       <td class="section_height_td">{{ $tsd->height }}</td>
                                       <td class="section_width_td">{{ $tsd->width }}</td>
                                       <td>
                                          <a itemprop="url"  href="" class="btn btn-primary btn-xs section_update" data-toggle="modal" data-target="#template_setting_modal" sid="{{ $tsd->id }}"><i class="fa fa-pencil-square-o"></i></a>
                                          <a itemprop="url"  href="{{ URL::to('supplier/section_delete',$tsd->id,is_secured()) }}" class="btn btn-danger btn-xs section_delete"  onclick="return confirm('Are you sure?')"><i class="fa fa-times"></i></a>
                                       </td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <!-- <hr> -->
                  </div>
               </div>
            </div>
            <!--PRODUCT AREA;-->
            @if($role->role_id ==3)
            <div class="tab-pane fade" id="product" >
               <div class="portlet-body">
                  <div class="tab-content">
                     <!-- COMPANY INFO TAB -->
                     @if(session()->has('product_add_success'))
                     <div class="col-md-12 flash-message">
                        <p class="alert alert-success">{{session()->get('product_add_success')}} <a  href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                     </div>
                     @endif
                     @if(session()->has('product_edit_success'))
                     <div class="col-md-12 flash-message">
                        <p class="alert alert-success">{{session()->get('product_edit_success')}} <a  href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                     </div>
                     @endif
                     <div class="row product_list_row">
                        <div class="se-pre-con text-center">
                           <i class="fa fa-spinner fa-pulse btn btn-lg btn-primary"></i> Please wait...
                        </div>
                        <div style="padding-left:3%;padding-right:3%" class="col-xs-12">
                           <button class="btn btn-default btn-md pull-left delete_selected" style="border-radius: 5px !important;">Delete Selected Products</button>
                           <a itemprop="url"  href="{!! URL::to('supplier/product_create') !!}" class="btn btn-primary btn-md pull-right" style="border-radius: 5px !important;">Add New Product</a>
                           <table style="margin-top:5%;background: #fff;" class="table ">
                              <thead>
                                 <tr class="" style="background-color:#E4EAF1; font-weight:bold">
                                    <td><label style="font-weight:bold;padding: 0px; margin-top: -5px;" title="Select all products"><input type="checkbox" id="select_all_products" name="select_all_products"> Product Name</label></td>
                                    <td>Model</td>
                                    <td>Brand Name</td>
                                    <td>Category Name</td>
                                    <td>Live Status</td>
                                    <td>Action</td>
                                 </tr>
                              </thead>
                              <tbody>
                                 @if($supplier_product)
                                 @foreach($supplier_product as $sp)
                                 <tr class="text-muted" style="border-bottom:1px solid #ddd!important">
                                    @if($sp->pro_to_cat_name)
                                    <td class="text-left"><input type="checkbox" data-product_id ="{{ $sp->product_id }}" class="selected_product" name="selected_product"> <a title="{{$sp->pro_to_cat_name->name}}" itemprop="url" class="text-muted" target="_blank" href="{!! URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$sp->pro_to_cat_name->name).'='.mt_rand(100000000, 999999999).$sp->product_id) !!}">{{ substr($sp->pro_to_cat_name->name,0,30) }}</a></td>
                                    @else
                                    <td class="text-left"><input type="checkbox" data-product_id ="{{ $sp->product_id }}" class="selected_product" name="selected_product"> <a itemprop="url" class="text-muted" target="_blank" href="{!! URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-','name not available').'='.mt_rand(100000000, 999999999).$sp->product_id) !!}">name not available</a></td>
                                    @endif
                                    @if($sp->bdtdcProduct)
                                    <td>{{ $sp->bdtdcProduct->model }}</td>
                                    <td>{{ $sp->bdtdcProduct->brandname }}</td>
                                    @else
                                    <td>not available</td>
                                    <td>not available</td>
                                    @endif
                                    @if($sp->BdtdcCategoryDescription)
                                    <td>{{ $sp->BdtdcCategoryDescription->name }}</td>
                                    @else
                                    <td>not available</td>
                                    @endif
                                    <td>@if($sp->bdtdcProduct)
                                       @if($sp->bdtdcProduct->is_active == 0)
                                       <i title="Make Publish" class="fa fa-lock fa-lg btn btn-danger btn-xs live_status" data-product_status ="{{ $sp->bdtdcProduct->is_active }}" data-product_id ="{{ $sp->product_id }}"></i>
                                       @elseif($sp->bdtdcProduct->is_active == 1)
                                       <i title="Make Unpublish" class="fa fa-unlock fa-lg btn btn-success btn-xs live_status" data-product_status ="{{ $sp->bdtdcProduct->is_active }}" data-product_id ="{{ $sp->product_id }}"></i>
                                       @endif
                                       @else
                                       <i title="Make Publish" class="fa fa-lock fa-lg btn btn-danger btn-xs"></i>
                                       @endif
                                    </td>
                                    <td>
                                       <a title="Edit product"  itemprop="url"  href="{{ URL::to('supplier/product_edit',$sp->product_id,is_secured()) }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                                       <!-- <a itemprop="url"  href="#animatedModal" data-url ="{{ URL::to('supplier/product_edit',$sp->id,is_secured()) }}" class="btn btn-primary btn-xs product_edit"><i class="fa fa-pencil-square-o"></i></a> -->
                                       <a title="Delete product"  itemprop="url" data-product_id ="{{ $sp->product_id }}" class="btn btn-danger btn-xs delete_product"><i class="fa fa-times"></i></a>
                                    </td>
                                 </tr>
                                 @endforeach
                                 @endif
                              </tbody>
                           </table>
                           {!! $supplier_product->render() !!}
                        </div>
                     </div>
                     <hr>
                  </div>
               </div>
            </div>
            @else
            @endif
         </div>
      </div>
   </div>
   <div class="col-md-2 padding_0">
      <div  style="z-index: 0;margin: 0px; background-color: #fff; width: 100%" class="box">
         <div style="padding-left:4px;width:100%;padding-top:2px;padding-bottom:30px">
            <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.62)">
               <h4 style="text-align: left;padding-left: 15px">Tips & Helps</h4>
            </div>
            <ul style="    padding-left: 10px;" class="">
               <!-- <li class="navigation-menu-list-li"><a itemprop="url"  href="{{ URL::to('account-settings',null,is_secured()) }}" class="navigation-menu-list-li-a">Account Settings</a></li> -->
               <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.62)">
                  <h4 style="text-align: left;padding-left: 5px">For Buyer</h4>
               </div>
               <li class="navigation-menu-list-li" style="padding: 5px;" ><a itemprop="url" href="{{ URL::to('ServiceChannel/pages/for_buyer',35,is_secured())}}" class="navigation-menu-list-li-a">Help Center for Buyers</a></li>
               @foreach($pages as $page) 
               @if($page->prefix == 'BuyerChannel' )
               <li class="navigation-menu-list-li" style="padding: 5px;" ><a itemprop="url" href="{{ URL::to($page->prefix.'/pages/'.$page->sort_name,$page->id,is_secured())}}" class="navigation-menu-list-li-a">{{ $page->name }}</a></li>
               @endif 
               @endforeach
            </ul>
         </div>
      </div>
      <div  style="width: 100%;z-index: 9;margin: 0px;background-color: #fff;margin-top: 5%" class="box">
         <div style="padding-left:4px;width:100%;padding-top:2px;padding-bottom:30px">
            <div style="border-bottom: 1px solid rgba(204, 204, 204, 0.62)">
               <h4 style="text-align: left;padding-left: 15px">For Supplier</h4>
            </div>
            <ul style="    padding-left: 10px;" class="">
               <!-- <li class="navigation-menu-list-li"><a itemprop="url"  href="{-{ URL::to('account-settings',null,is_secured()) }-}" class="navigation-menu-list-li-a">Account Settings</a></li> -->
               <li class="navigation-menu-list-li" style="padding: 5px;" ><a itemprop="url" href="{{ URL::to('ServiceChannel/pages/for_buyer',35,is_secured())}}" class="navigation-menu-list-li-a">Help Center for Suppliers</a></li>
               @foreach($pages as $page) 
               @if($page->prefix == 'SupplierChannel' )
               <li class="navigation-menu-list-li" style="    padding: 5px;"><a itemprop="url" href="{{ URL::to($page->prefix.'/pages/'.$page->sort_name,$page->id,is_secured())}}" class="navigation-menu-list-li-a">{{ $page->name }}</a></li>
               @endif 
               @endforeach
            </ul>
         </div>
      </div>
   </div>
   <br>
   <!--ANIMATED MODEL BOX THAT WILL BE CONTEINED PORTFOLIO IMAGE DYNAMICALY-->
   <div id="animatedModal">
      <div class="close-animatedModal text-center">
         <a itemprop="url"  class="btn btn-primary btn-md close_portfolio_model pull-right" href=""><i class="fa fa-times fa-3x"></i></a>
      </div>
      <div class="container">
         <div class="row">
            <div class="modal-content col-xs-10 col-xs-offset-1">
               <!-- --DATA WILL BE LOADED VIA AJAX-->
            </div>
         </div>
      </div>
   </div>
   <!---BOOTSTRAP MODAL;-->
   <!-- Modal -->
   <div id="chat_modal" class="modal fade" role="dialog">
      <div style="width:60%" class="modal-dialog ">
         <!-- Modal content-->
         <div style="" class="modal-content row">
            <div class="modal-header col-xs-12 text-center">
               <a itemprop="url"  href="" class="btn btn-sm btn-danger pull-right" data-dismiss="modal"> <i class="fa fa-times "></i> </a>
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
<!-- Template Setting Modal start-->
<div id="template_setting_modal" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button style="position: relative;" type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="text-align: center;">Section <span id="create_update">Create</span> Form</h4>
            <form method="POST" action="{!! URL::to('supplier/section_create') !!}" accept-charset="UTF-8" id="section_form" role="form" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <input type="hidden" class="" name="prev_back_image" id="prev_back_image" value="">
            <input type="hidden" class="" name="prev_first_slider_image" id="prev_first_slider_image" value="">
            <input type="hidden" class="" name="prev_second_slider_image" id="prev_second_slider_image" value="">
            <input type="hidden" class="" name="prev_third_slider_image" id="prev_third_slider_image" value="">
         </div>
         <div class="modal-body">
            <div class="form-group">
               <label for="section">Section Area:</label>
               <select name="section" id="section">
                  @foreach ($template_setting_section as $tsss)
                  <option value="{!! $tsss->id !!}">{!! $tsss->section_name !!}</option>
                  @endforeach
               </select>
               <!-- <input type="text" class="form-control" name="section" id="section"> -->
            </div>
            <div id="slider_img_area" style="display:none;">
               <div class="form-group" id="">
                  <div class="row">
                     <div class="col-md-6">
                        <label for="first_slider_image">Select First Slider Image</label>
                        <input type="file" class="slider_img" name="first_slider_image" id="first_slider_image">
                     </div>
                     <div class="col-md-6 text-center">
                        <label for="first_slider_image">Image Preview:</label>
                        <img itemprop="image" class="first_slider_image" width="100" height="100" src="http://placehold.it/100x100" alt="your image" />
                     </div>
                  </div>
               </div>
               <div class="form-group" id="">
                  <div class="row">
                     <div class="col-md-6">
                        <label for="second_slider_image">Select Second Slider Image</label>
                        <input type="file" class="slider_img" name="second_slider_image" id="second_slider_image">
                     </div>
                     <div class="col-md-6 text-center">
                        <label for="second_slider_image">Image Preview:</label>
                        <img itemprop="image" class="second_slider_image" width="100" height="100" src="http://placehold.it/100x100" alt="your image" />
                     </div>
                  </div>
               </div>
               <div class="form-group" id="">
                  <div class="row">
                     <div class="col-md-6">
                        <label for="third_slider_image">Select Third Slider Image</label>
                        <input type="file" class="slider_img" name="third_slider_image" id="third_slider_image">
                     </div>
                     <div class="col-md-6 text-center">
                        <label for="third_slider_image">Image Preview:</label>
                        <img itemprop="image" class="third_slider_image" width="100" height="100" src="http://placehold.it/100x100" alt="your image" />
                     </div>
                  </div>
               </div>
            </div>
            <div id="others_area">
               <div class="form-group" id="logo_title" style="padding-bottom: 20px">
                  <label>Show Company title & logo:</label> 
                   <select name="title_viewer" class="form-control">
                     <option value="1" selected>Show</option>
                     <option  value="0" >Hide</option> 
                  </select>
               </div>

               <div class="form-group" id="background_img_area">
                  <div class="row">
                     <div class="col-md-6">
                        <label for="back_image">Background Image:</label>
                        <input type="file" class="" name="back_image" id="back_image">
                     </div>
                     <div class="col-md-6 text-center">
                        <label for="back_image">Image Preview:</label>
                        <img itemprop="image" id="image_upload_preview" width="100" height="100" src="http://placehold.it/100x100" alt="your image" />
                     </div>
                  </div>
               </div>
               <div class="form-group" id="show_back_image">
                  <label>Show Background Image:</label> 
                  <select name="back_image_viewer" class="form-control">
                     <option value="1" selected>Show</option>
                     <option value="0">Hide</option>
                  </select>
                  <!-- <label>Show <input type="radio" value="1" name="back_image_viewer" checked></label>
                     <label>Hide <input type="radio" value="0" name="back_image_viewer"></label> -->
               </div>
               <div class="form-group">
                  <label for="back_color">Background Color:</label>
                  <input class="form-control color" name="back_color" id="back_color">
                  <!-- <input class="form-control color" value="#cecece" name="back_color" id="back_color"> -->
               </div>
               <div class="form-group">
                  <label for="back_color">Font Color:</label>
                  <input class="form-control color" name="font_color" id="font_color">
               </div>
               <div class="form-group">
                  <label>Show Background Color:</label> 
                  <select name="background_color_viewer" class="form-control">
                     <option value="1" selected>Show</option>
                     <option value="0">Hide</option>
                  </select>
                  <!-- <label>Show <input type="radio" value="1" name="background_color_viewer" checked></label>
                     <label>Hide <input type="radio" value="0" name="background_color_viewer"></label> -->
               </div>
               <div class="form-group">
                  <label for="height">Height:</label>
                  <input type="text" class="form-control" name="height" id="height">
               </div>
               <div class="form-group">
                  <label for="width">Width:</label>
                  <input type="text" class="form-control" name="width" id="width">
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" style="position: relative;" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="reset" style="position: relative;" class="btn btn-warning section_form_reset">Reset</button>
            <button type="submit" style="position: relative;" id="section_submit" class="btn btn-primary">Submit</button>
            {!! Form::close() !!}
         </div>
      </div>
   </div>
</div>
<br>
<br>
@stop
@section('scripts')
<option value="0">Hide</option>
</select> -->
<select name="title_viewer">
   <option value="1" selected>Show Both</option>
   <option value="2">Title Only</option>
   <option value="3">Logo Only</option>
   <option value="4">Hide All</option>
</select>



<script type = "text/javascript" src = "{!! asset('assets/fontend/js/responsiveslides.min.js',is_secured()) !!}" > </script>
<script type = "text/javascript" src = "{!! asset('assets/dashboard/js/front_custom.js',is_secured()) !!}" > </script>
<script type = "text/javascript" src = "{!! asset('assets/dashboard/js/spectrum.js',is_secured()) !!}"> </script> 
<script type = "text/javascript" src = "{!! asset('assets/dashboard/js/jquery.simplePagination.js',is_secured()) !!}"> </script>
   <!-- <script type="text/javascript" src="{!! asset('assets/fontend/js/jquery-ui-timepicker-addon.js',is_secured()) !!}"></script> -->
<script src = "{{URL::asset('assets/fontend/js/animatedModal.min.js',is_secured())}}" > </script>
<script src = "{{ URL::asset('assets/fontend/js/sweetalert.min.js',is_secured()) }}" > </script> 
<script src = "{{asset('assets/global/plugins/ckeditor/ckeditor.js')}}" > </script>
<script src = "//code.jquery.com/ui/1.11.4/jquery-ui.js" > </script>


@include('frontend.layouts.dashboard_aside_scripts')



<script type = "text/javascript">

   setTimeout(function() {
      $('#successMessage').fadeOut('fast');
   }, 3000);

   $(".unveri").on({
      mouseover: function() {
         $(".tooltip-content").stop().show();
      },

      mouseout: function() {
         $(".tooltip-content").stop().hide();
      }
   })
   $(".upgde").on({
      mouseover: function() {
         $(".tooltip-upg").stop().show();
      },

      mouseout: function() {
         $(".tooltip-upg").stop().hide();
      }
   })


   $('[data-toggle="popover"]').popover({
      placement: "auto",
      trigger: "hover"

   })


   /************** Dynamic Simple pagination start *************/


   /**************** Dynamic Simple pagination end *************/

   function ajax_success_message(str) {
      $('#ajax_status').html(str).fadeOut(1500, function() {
         $('#ajax_status').addClass('hide_this');
      });
   }

   (function() {
      $(".se-pre-con").hide();
      $('[href="#home"]').click();
      var section = $('[name="section1"]').val();
      (section != "") ? $('.nav-tabs li a[href="#' + section + '"]').click(): false;
      /********DISPLAY AJAX STATUS BAR IN CENTER POSSITION***************/
      var win_height, win_width, ajax_status, ajax_status_height, ajax_status_width;
      win_height = $(window).innerHeight();
      win_width = $(window).innerWidth();
      ajax_status = $('#ajax_status');
      ajax_status_height = ajax_status.height();
      ajax_status_width = ajax_status.width();
      ajax_status.css('left', (win_width / 2 - ajax_status_width / 2)).css('top', $(window).scrollTop() + (win_height / 2 - ajax_status_height / 2));

      /*****************RELODE THE WHOLE DOCUMENT WHEN ANIMATE MODAL WINDOW IS CLOSED *********************************/
      $(document).on({
         click: function(e) {
            e.preventDefault();
            window.location.assign(window.location.href);
            $(".se-pre-con").fadeIn("slow");
         }
      }, '.close_portfolio_model,.close-animatedModal');

      $('.product_edit').animatedModal({
         color: "rgba(102, 102, 102,.92)",
         animatedIn: "lightSpeedIn"
      });
      $('.add_product').animatedModal({
         color: "rgba(102, 102, 102,.92)",
         animatedIn: "lightSpeedIn"
      });
      $('.add_wholesale_product').animatedModal({
         color: "rgba(102, 102, 102,.92)",
         animatedIn: "lightSpeedIn"
      });

      $(document).on({
         click: function(e) {
            e.preventDefault();
            var url = "{{ URL::to('supplier/product_create',null,is_secured()) }}";
            $('.modal-content').html("");
            $.get(url, function(r) {
               $('.modal-content').html(r);
            })
         }
      }, '.add_product');

      $(document).on({
         click: function(e) {
            e.preventDefault();
            var url = "{{ URL::to('supplier/wholesale_product_create',null,is_secured()) }}";
            $('.modal-content').html("");
            $.get(url, function(r) {
               $('.modal-content').html(r);
            })
         }
      }, '.add_wholesale_product');

      $(document).on({
         click: function(e) {
            e.preventDefault();
            var target_area = $(this).data('target_navigation');
            $('a[href="' + target_area + '"]').click();
         }
      }, '.navigation_link');

      $(document).on({
         click: function(e) {
            e.preventDefault();
            var template = '<div class="more_product_row_area"><label class="text-primary" for="Product Name">Product Name :</label>\
                                           <input type="text" name="product_name[]" placeholder="Product Name" class="form-control">\
                                           <a itemprop="url"  class="btn btn-sm btn-success add_more_product_btn" href=""><i class="fa fa-plus-square"></i></a>\
                                           <a itemprop="url"  class="btn btn-sm btn-danger remove_product_row_btn" href=""><i class="fa fa-minus-square"></i></a></div>';
            $(this).closest('.form-inline').append(template);
         }
      }, '.add_more_product_btn');

      $(document).on({
         click: function(e) {
            e.preventDefault();
            $(this).closest('.more_product_row_area').remove();
         }
      }, '.remove_product_row_btn');




      $(document).on({
         click: function(e) {
            e.preventDefault();
            var url = $(this).data('url');
            $('.modal-content').html("");
            $.get(url, function(r) {
               supplier_edit_product_content(r);
            })

         }
      }, '.product_edit');

      // $(document).on({click:function(e){
      //     e.preventDefault();
      //     var url,inquery_id,product_name,user_name,template,thread,action_preformed,inquery,inquery_id,reverse_action;
      //     action_preformed = $(this).attr('ca_action_performed');
      //     url = $('[name="base_url"]').val()+"/conversation/"+$(this).data('inquery_id')+'/'+$(this).attr('ca_quotation_type');
      //     $.get(url).done(function(r){
      //         $('.inquery_message').html(r);
      //         inquery = $('.inquery_action:first');
      //         inquery_id = inquery.attr('ca_inquery_id');
      //         reverse_action = inquery.attr('ca_action');
      //         if(typeof action_preformed != "undefined" && action_preformed !="all_inquery" && action_preformed != "sent"){
      //             switch(action_preformed){
      //                 case "flag":
      //                     $('.container_of_inquery_action_btn').html('<a itemprop="url"  class="pull-right text-danger reverse_action_inquery" href="#" ca_inquery_id="'+inquery_id+'" style="margin-top:.5%;margin-right:2%" ca_action="'+reverse_action+'" ca_reverse_from="'+action_preformed+'"><i class="fa fa-flag-checkered"></i> Not Flag</a>');
      //                     break;
      //                 case "spam":
      //                     $('.container_of_inquery_action_btn').html('<a itemprop="url"  class="pull-right text-danger reverse_action_inquery" href="#" ca_inquery_id="'+inquery_id+'" style="margin-top:.5%;margin-right:2%" ca_action="'+reverse_action+'" ca_reverse_from="'+action_preformed+'"><i class="fa fa-flag-checkered"></i> Not Spam</a>');
      //                     break;
      //                 case "trush":
      //                     $('.container_of_inquery_action_btn').html('<a itemprop="url"  class="pull-right text-danger reverse_action_inquery" href="#" ca_inquery_id="'+inquery_id+'" style="margin-top:.5%;margin-right:2%" ca_action="'+reverse_action+'" ca_reverse_from="'+action_preformed+'"><i class="fa fa-flag-checkered"></i> Not Trash</a>');
      //                     break;
      //             }


      //         }
      //     });
      // }},'.go_to_conversation');


      /************************DASHBOARD TAB CONTENT SECTION;******************************************/
      $('.in_visible').hide();
      $(document).on({
         click: function(e) {
            var url = window.location.origin + "/get_tab_content_form/" + $(this).data('page');
            var target_area = $('.call_to_company_info_form a').attr('href');
            $(target_area + ' .tab-content').load(url);
         }
      }, '.call_to_company_info_form');

      $(document).on({
         click: function(e) {
            e.preventDefault();
            if (confirm('Are you sure?')) {
               var _this = $(this);
               var product_id = $(this).data('product_id');
               $.post(window.location.origin + '/x_product/' + product_id, {
                  '_token': '{{csrf_token()}}'
               }, function(r) {
                  if (r == 'deleted') {
                     _this.parent().parent().remove();
                  } else if (parseInt(r) == 'login') {
                     alert('Please Login First.');
                  } else {
                     alert('Query failed. Please Login first.');
                  }
               });
            }
         }
      }, '.delete_product');

      $(document).on({
         click: function(e) {
            e.preventDefault();
            document.location.assign(window.location.origin + '/dashboard/product');
            //$('.product_list_row').hide();
            $(".se-pre-con").fadeIn("slow");

         }
      }, '.product_tab');

      $(document).on({
         click: function(e) {
            e.preventDefault();
            document.location.assign(window.location.origin + '/dashboard/template_setting');
            //$('.product_list_row').hide();
            $(".se-pre-con").fadeIn("slow");

         }
      }, '.template_setting');

      /************************************SCRIPT FOR PRODUCT PAGE*****************************************************/




      /*************PRODUCT UPDATE FORM SUBMIT*************/
      $(document).on({
         click: function(e) {
            e.preventDefault();
            var cross_brouser_support_animation = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            var current_active_form = $('#animatedModal .product_create_tab li.active a').attr('href');
            var _this = $(this);
            $(current_active_form + ' .validate[validation="validated_true"]').attr('style', "border:1px solid #e5e5e5");
            if ($('#animatedModal ' + current_active_form + ' .validate[validation="validated_false"]').length > 0) {
               $('#animatedModal ' + current_active_form + ' .validate[validation="validated_false"]').attr('style', "border:1px solid red");
               //console.log($('#animatedModal '+current_active_form+' .validate[validation="validated_false"]'));
            } else {
               var animation_class = 'animated zoomOut';
               var submission_checker = $('#animatedModal .product_create_tab li.active a').attr('href');
               $(current_active_form).addClass(animation_class).one(cross_brouser_support_animation, function() {
                  $(this).removeClass(animation_class);
                  $('#animatedModal .product_create_tab li.active').next().find('a').click();
                  var next_active_form = $('#animatedModal .product_create_tab li.active a').attr('href');
                  var animation_class_next = "animated bounceIn";
                  $(next_active_form).addClass(animation_class_next).one(cross_brouser_support_animation, function() {
                     $(this).removeClass(animation_class_next);
                  })
               });
               if (submission_checker == "#product_image_tab_content") {
                  var form = $('.product_info_form');
                  var base_url = window.location.origin;
                  var template;
                  if ($('[name="terms_condition"]').prop('checked') == true) {
                     $.post(form.attr('action'), form.serialize(), function(r) {
                        if (r.success != 'Updated') {
                           alert(r);
                        } else {
                           $(this).removeClass('product_update_submit_btn');
                           swal({
                              title: "Product Updated",
                              timer: 2000,
                              showConfirmButton: false,
                              imageUrl: "https://cdn2.iconfinder.com/data/icons/toolbar-signs-4/512/success_ok_check_yes_accept-512.png",
                              showCancelButton: true
                           });
                           _this.addClass('product_update_submit_btn');
                           $('.close-animatedModal').click();
                        }

                        /*template = '<tr class="text-center">\
                                            <td>'+r.product_name+'</td>\
                                            <td>'+r.model+'</td>\
                                            <td>'+r.brandname+'</td>\
                                            <td>'+r.category+'</td>\
                                            <td>\
                                                <i class="fa fa-lock fa-lg btn btn-danger"></i>\
                                            </td>\
                                            <td>\
                                                <a itemprop="url"  class="btn btn-primary product_edit" data-url="'+base_url+'/supplier/product_edit/'+r.product_id+'" href="#animatedModal"><i class="fa fa-pencil-square-o"></i></a>\
                                                <a itemprop="url"  class="btn btn-danger delete_product" data-product_id="'+r.product_id+'" href=""><i class="fa fa-times"></i></a>\
                                            </td>\
                                        </tr>';*/

                        // $('.close-animatedModal').click();
                        // $('#product table tbody').append(template);
                     });
                     // $('.product_info_form').submit();
                     /*$.post('http://bdtdc.com/supplier/product_update/2997', $('.product_info_form').serialize());*/
                  } else {
                     alert("You must accept the terms and conditions.");
                  }

               }
            }
         }
      }, '.product_update_submit_btn');

      /*************ADD WHOLESALE PRICE && DISCOUNT *************/
      $(document).on({
         click: function(e) {
            template = '<tr>\
                                           <input type="hidden" name="product_price_id[]" value="0">\
                                           <td>MOQ: <span></span></td>\
                                           <td>\
                                               <input style="height:27px;padding-bottom:1%;font-size:12px" type="text" name="product_MOQ[]" validation="validated_false" value="" class="form-control validate">\
                                           </td>\
                                            <td>Wholesale Price: </td>\
                                            <td>\
                                               <input style="height:27px;padding-bottom:1%;font-size:12px;width: 100px;" type="text" name="product_FOB[]" validation="validated_false" class="form-control validate">\
                                           </td>\
                                           <td>Discounted Price: </td>\
                                           <td>\
                                               <input style="height:27px;padding-bottom:1%;font-size:12px;width: 100px;" type="text" name="discounted_Price[]" validation="validated_false" class="form-control validate">\
                                           </td>\
                                           <td><i class="fa fa-plus btn btn-xs btn-primary add_price_btn_discount"></i> <i class="fa fa-minus btn btn-xs btn-danger remove_attributes"></i></td>\
                                       </tr>';
            $(this).closest('tbody').append(template);

         }
      }, '.add_price_btn_discount');

      /****** SUBMIT QUOTATION FORM*******/
      $(document).on({
         submit: function(e) {
            e.preventDefault();
            var url, form_data;
            $('#ajax_status').removeClass('hide_this');
            url = $(this).attr('action');
            $.post(url, $(this).serialize(), function(r) {
               if (r == 1) {
                  ajax_success_message("<h4 style='color:#fff;font-weight: bold;margin-top:5%'>Action Performed!!!<h4>");
               } else {
                  ajax_success_message("<h4 style='color:#fff;font-weight: bold;margin-top:5%'>Action Could Not Perform!!!<h4>");
               }
               $('.modal-header a').click();
            })
         }
      }, '.conversation_form');

      /************MULTIPLICATION OF TOTAL AND UNIT PRICE;*********************/
      $(document).on({
         keyup: function(e) {
            var quantity, unit_price, total;
            quantity = $('.conversation_form .quantity').val();
            unit_price = $('.conversation_form .unit_price').val();
            $('.conversation_form .total').val(quantity * unit_price)
         }
      }, '.conversation_form .quantity, .conversation_form .unit_price');

      /************HIDE AND SHOW FOR QUOTATION TEXT IN QUOTATION TABLE*******************************/
      $(document).on({
         click: function() {
            var _this_header = $(this);
            var _this_quotation_text = _this_header.find('.toggle_quotation_text');
            if (_this_header.hasClass('clicked')) {
               _this_quotation_text.show();
               _this_header.removeClass('clicked');
               _this_header.find('.fa').removeClass('fa-arrow-circle-up').addClass('fa-arrow-circle-down')
            } else {
               _this_quotation_text.hide();
               _this_header.addClass('clicked');
               _this_header.find('.fa').removeClass('fa-arrow-circle-down').addClass('fa-arrow-circle-up')
            }
         }
      }, '.quotation_tbl_header');

      /************HIDE AND SHOW FOR MULTIPLE-PRODUCT-QUOTATION TEXT IN QUOTATION TABLE*******************************/
      $(document).on({
         click: function() {
            var target_id = $(this).attr('ca_target_id');
            var _this = $(this);
            if (_this.hasClass('clicked')) {
               _this.removeClass('clicked');
               $(target_id).slideUp(300);
            } else {
               _this.addClass('clicked');
               $(target_id).slideDown(300);
            }
         }
      }, '.do_collaps');

      /************SUBMIT MULTIPLE QUOTED PRODUCT DESCRIPTION*******************************/
      $(document).on({
         click: function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            var url = form.attr('action');
            if ($.trim($('[name="quantity"]').val()) == '') {
               $('[name="quantity"]').focus();
               $('[name="quantity"]').css('box-shadow', '0px 0px 3px 1px red');
            } else if ($.trim($('[name="unit_price"]').val()) == '') {
               $('[name="quantity"]').css('box-shadow', '');
               $('[name="unit_price"]').focus();
               $('[name="unit_price"]').css('box-shadow', '0px 0px 3px 1px red');
            } else {
               $('[name="quantity"]').css('box-shadow', '');
               $('[name="unit_price"]').css('box-shadow', '');
               $('#ajax_status').removeClass('hide_this');
               $.post(url, form.serialize(), function(r) {
                  if (r == 1) {
                     ajax_success_message("<h4 style='color:#fff;font-weight: bold;margin-top:5%'>Action Performed!!!<h4>");
                  } else {
                     ajax_success_message("<h4 style='color:#fff;font-weight: bold;margin-top:5%'>Action Could Not Perform!!!<h4>");
                  }
                  $('.modal-header a').click();
               })
            }

         }
      }, '.this_product_quotation_btn');

      /************MULTIPLICATION OF QUANTITY && UNIT PRICE*******************************/
      $(document).on({
         keyup: function(e) {
            var quantity, unit_price, total, target_area;
            target_id = $(this).closest('tr');
            quantity = target_id.find('.quantity').val();
            unit_price = target_id.find('.unit_price').val();
            target_id.find('.total').val(quantity * unit_price)
         }
      }, '.quantity,.unit_price');
      /************VIEW INQUERY BY THEIR GROUP LIKE SPAM, TRASH, FLAG,*******************************/
      $(document).on({
         click: function(e) {
            e.preventDefault();
            $('.message_show_area').html('<i class="fa fa-spinner fa-spin text-center" style="font-size:77px;margin-left:47%;color:#0085CB;margin-top: 2%"></i>');
            var group, url, r;
            group = $(this).attr('ca_group_name');
            if (group == "all_inquery") {
               window.location.assign($('[name="base_url"]').val() + '/dashboard/message');
            } else {
               $.ajax({
                  url: $('[name="base_url"]').val() + '/get_inquires_by_filter/' + group,
                  type: 'get',
                  success: function(r) {
                     $('.message_show_area').html(r);
                     updateItems();
                  }
               })
            }
         }
      }, '.inquery_group');

      /********TAKE ACTION TO AN INQUERY************************/
      $(document).on({
         click: function(e) {
            e.preventDefault();
            $('#ajax_status').removeClass('hide_this');
            var action, inquery_id;
            action = $(this).attr('ca_action');
            inquery_id = $(this).attr('ca_inquery_id');
            $.ajax({
               url: $('[name="base_url"]').val() + "/inquery_action/" + action + "/" + inquery_id,
               success: function(r) {
                  ajax_success_message("<h4 style='color:#fff;font-weight: bold;margin-top:5%'>Action Performed!!!<h4>");
                  $('.modal-header a').click();
                  $('a[ca_quotation_type="' + action.split('_')[0] + '"][data-inquery_id="' + inquery_id + '"]').closest('.message_block').hide(500);
               }
            })
         }
      }, '.inquery_action');

      /*************REVERSE ACTION ON AN INQUERY;*******************/
      $(document).on({
         click: function(e) {
            e.preventDefault();
            var ca_inquery_id, ca_action, url, action_from;
            $('#ajax_status').removeClass('hide_this');
            ca_inquery_id = $(this).attr('ca_inquery_id');
            ca_action = $(this).attr('ca_action');
            action_from = $(this).attr('ca_reverse_from');
            url = $('[name="base_url"]').val() + "/reverse-action-on-inquery/" + ca_action + '_' + ca_inquery_id + '_' + action_from;
            $.ajax({
               url: url,
               type: 'get',
               success: function(r) {
                  if (r == 1) {
                     ajax_success_message("<h4 style='color:#fff;font-weight: bold;margin-top:5%'>Action Performed!!!<h4>");
                     $('.modal-header a').click();
                     $('a[ca_action_performed="' + action_from + '"][ca_quotation_type="' + ca_action.split('_')[0] + '"][data-inquery_id="' + ca_inquery_id + '"]').closest('.message_block').hide(500);
                  }
               }
            })

         }
      }, '.reverse_action_inquery');

      $(document).on({
         click: function() {
            var cross_brouser_support_animation = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            var elem = $(this).parent().next().next();
            elem.toggleClass('hide_this').addClass('animated fadeInDown').one(cross_brouser_support_animation, function() {
               $(this).removeClass('animated fadeInDown');
            })

         }
      }, '.edit_banner_btn');

      $(document).on({
         click: function() {
            var cross_brouser_support_animation = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            var elem = $(this).closest('.edit_bannar_section');
            elem.addClass('animated fadeOutUp').one(cross_brouser_support_animation, function() {
               $(this).addClass('hide_this').removeClass('animated fadeOutUp');
            })

         }
      }, '.close_update_section');


   })()




   $(document).ready(function() {
      //alert (window.location.origin);
      //$('#image_upload_preview').hide();
      var base_url = window.location.origin;
      // function get_section_data(){
      //     $.get(base_url+'/supplier/get_section_data','{\
      //         section:"section"\
      //     }',function(result){
      //         $('#template_setting_body').html(result);
      //     });
      // }
      // get_section_data();
      /*$('#section').change(function(){
          var section_detector = $(this).val();
          if(section_detector  == 2){
              $('#logo_title').hide();
              $('#background_img_area').hide();
              $('#show_back_image').hide();
          }else if(section_detector  == 3){
              $('#logo_title').hide();
              $('#background_img_area').show();
              $('#show_back_image').show();
          }else{
              $('#logo_title').show();
              $('#background_img_area').show();
              $('#show_back_image').show();
          }
      });*/

      $('#section').change(function() {
         var section_detector = $(this).val();
         if (section_detector == 4) {
            $('#slider_img_area').show();
            $('#others_area').hide();
         } else {
            $('#slider_img_area').hide();
            $('#others_area').show();
         }
      });

      $('.add_section_modal').click(function() {
         $('#create_update').text("Create");
         $('.section_form_reset').click();
         $('#image_upload_preview').attr('src', 'http://placehold.it/100x100');
         $('#section_submit').html('Submit');
         $('#section_form').attr('action', base_url + '/supplier/section_create');
      });

      $('#section_submit').click(function(e) {
         e.preventDefault();
         var validation = true;
         var action_submit = $('#section_submit').html();
         var section = $.trim($('#section').val());
         // var back_image = $('#back_image').val();
         // var back_color = $.trim($('#back_color').val());
         var height = $.trim($('#height').val());
         var width = $.trim($('#width').val());
         // alert (action_submit);
         // if(action_submit == 'Submit'){
         //     if(section == '' || height == '' || width == ''){
         //     alert ('Section, Height & Width are Required');
         //     validation = false;
         //     }
         // }

         if (isNaN(height)) {
            alert("Height should be an integer");
            validation = false;
         }
         if (isNaN(width)) {
            alert("Width should be an integer");
            validation = false;
         }
         if (parseFloat(height) > 1000 || parseFloat(width) > 1000) {
            alert("Height and Width should be less than or equal to 1000");
            validation = false;
         }
         // if(action_submit == 'Update'){
         //     if(section == '' || height == '' || width == ''){
         //     alert ('Section, Height & Width are Required');
         //     validation = false;
         //     }
         // }

         if (validation == true) {
            $('#section_form').submit();
            /*$.post(base_url+'/supplier/section_create',form.serialize(),function(data){
                alert (data);
                get_section_data();
            });*/
         }

      });

      $('.section_update').click(function() {
         var section_update_id = $(this).attr('sid');
         $('#create_update').text("Update");
         $('#section_form').attr('action', base_url + '/supplier/section_update/' + section_update_id);
         $('.section_form_reset').click();
         $('#section_submit').html('Update');
         var section = $.trim($(this).parent().parent().children('.section_td').attr('section_td_id'));
         var back_image = $.trim($(this).parent().parent().children('.section_image_td').children().attr('src'));
         if (parseInt(section) == 4) {
            var back_color = $.trim($(this).parent().parent().children('.section_back_color_td').children().attr('src'));
            var font_color = $.trim($(this).parent().parent().children('.section_font_color_td').children().attr('src'));
            $('#slider_img_area').show();
            $('#others_area').hide();
         } else {
            var back_color = $.trim($(this).parent().parent().children('.section_back_color_td').text());
            var font_color = $.trim($(this).parent().parent().children('.section_font_color_td').text());
            $('#slider_img_area').hide();
            $('#others_area').show();
         }
         var height = $(this).parent().parent().children('.section_height_td').text();
         var width = $(this).parent().parent().children('.section_width_td').text();
         var title_logo = $(this).parent().parent().children('.section_title_logo_td').text();
         var is_show_image = $(this).parent().parent().children('.section_is_show_image_td').text();
         var is_show_color = $(this).parent().parent().children('.section_is_show_color_td').text();
         $('#section').val(section);
         $('#image_upload_preview').attr('src', back_image);
         $('.first_slider_image').attr('src', back_image);
         $('.second_slider_image').attr('src', back_color);
         $('.third_slider_image').attr('src', font_color);
         $('#prev_back_image').val(back_image);
         $('#prev_first_slider_image').val(back_image);
         $('#prev_second_slider_image').val(back_color);
         $('#prev_third_slider_image').val(font_color);
         $('#back_color').attr('value', back_color);
         $('#font_color').attr('value', font_color);
         if (title_logo == "Show Both") {
            $('[name="title_viewer"]').val(1);
         } else if (title_logo == "Title Only") {
            $('[name="title_viewer"]').val(2);
         } else if (title_logo == "Logo Only") {
            $('[name="title_viewer"]').val(3);
         } else {
            $('[name="title_viewer"]').val(4);
         }
         if (is_show_image == "Show") {
            $('[name="back_image_viewer"]').val(1);
         } else {
            $('[name="back_image_viewer"]').val(0);
         }
         if (is_show_color == "Show") {
            $('[name="background_color_viewer"]').val(1);
         } else {
            $('[name="background_color_viewer"]').val(0);
         }
         $('#height').val(height);
         $('#width').val(width);
      });


      function readURL(input) {
         if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
               $('#image_upload_preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
         }
      }

      $("#back_image").change(function() {
         $('#image_upload_preview').show();
         readURL(this);
      });

      function readFirstURL(input) {
         if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
               $('.first_slider_image').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
         }
      }

      $("#first_slider_image").change(function() {
         readFirstURL(this);
      });

      function readSecondURL(input) {
         if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
               $('.second_slider_image').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
         }
      }

      $("#second_slider_image").change(function() {
         readSecondURL(this);
      });

      function readThirdURL(input) {
         if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
               $('.third_slider_image').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
         }
      }

      $("#third_slider_image").change(function() {
         readThirdURL(this);
      });


      //color picker
      $(".color").spectrum({
         color: "#E4E4E4",
         showInput: true,
         className: "full-spectrum",
         showInitial: true,
         showPalette: true,
         showSelectionPalette: true,
         maxSelectionSize: 10,
         preferredFormat: "hex",
         localStorageKey: "spectrum.demo",
         move: function(color) {

         },
         show: function() {

         },
         beforeShow: function() {

         },
         hide: function() {

         },
         change: function() {

         },
         palette: [
            ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
               "rgb(204, 204, 204)", "rgb(217, 217, 217)", "rgb(255, 255, 255)"
            ],
            ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
               "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"
            ],
            ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)",
               "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)",
               "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)",
               "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)",
               "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)",
               "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
               "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
               "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
               "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)",
               "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"
            ]
         ]
      });



      // if($('.flash-message').css('display') == 'block')
      // {
      //     $('.template_setting').click();
      // }

      if ($.trim($('.flash-message').html()) != '') {
         $('.template_setting').click();
      }

      // setTimeout(fade_out, 5000);

      function fade_out() {
         $(".flash-message").fadeOut().empty();
      }

      $('.message_nav_ul li').click(function() {
         var menu_data_array = $(this).children('a').html().split("&nbsp;");
         message_nav_inactive($('.message_nav_ul li'));
         message_nav_active($(this));
      });

      function message_nav_active(targeted_nav) {
         targeted_nav.css('background-color', '#2098D1');
         targeted_nav.children('a').css('padding-top', '5px');
         targeted_nav.children('a').css('padding-left', '5px');
         targeted_nav.children('a').css('color', 'white');
      }

      function message_nav_inactive(targeted_nav) {
         targeted_nav.css('background-color', '');
         targeted_nav.children('a').css('padding-top', '');
         targeted_nav.children('a').css('padding-left', '');
         targeted_nav.children('a').css('color', '');
      }

      $('.mail_check').click(function() {
         // var count = $(".mail_check:checked").length;
         // if(count > 0){
         //     $('#action_area').show(500);
         // }else{
         //     $('#action_area').hide(500);
         // }
      });

      function check_checked() {
         var selected = '';
         var action = '';
         $('.mail_check:checked').each(function() {
            selected += $(this).attr('inquery_id_data') + '_';
            action += $(this).attr('data_quotation_type') + '_';
         });
         if (selected == '' || selected == null) {
            alert("Select at least a message");
            return false;
         } else {
            return selected + '::' + action;
         }
      }
      $(document).on({
         click: function() {
            var base_url = window.location.origin;
            var target_action = $(this).attr('targeted');
            var selected = check_checked();
            if (selected) {
               var res = selected.split("::");
               var action_id = res[0].slice(0, -1);
               var action_target = res[1].split("_");
               if (target_action == 'trush') {
                  var ac_tar = action_target.join("_trush::");
                  ac_tar = ac_tar.slice(0, -2);
                  var target_url = base_url + '/inquery_action/' + ac_tar + '/' + action_id;
               } else if (target_action == 'flag') {
                  var ac_tar = action_target.join("_flag::");
                  ac_tar = ac_tar.slice(0, -2);
                  var target_url = base_url + '/inquery_action/' + ac_tar + '/' + action_id;
               } else if (target_action == 'spam') {
                  var ac_tar = action_target.join("_spam::");
                  ac_tar = ac_tar.slice(0, -2);
                  var target_url = base_url + '/inquery_action/' + ac_tar + '/' + action_id;
               } else if (target_action == 'nottrush') {
                  var action_id_array = action_id.split("_");
                  var action_loop = action_id_array.length;
                  var reverse_action_str = '';
                  for (var ai = 0; ai < action_loop; ai++) {
                     reverse_action_str += action_target[ai] + '_trush_' + action_id_array[ai] + '_trush::';
                  }
                  ac_tar = reverse_action_str;
                  ac_tar = ac_tar.slice(0, -2);
                  var target_url = base_url + '/reverse-action-on-inquery/' + ac_tar;
               } else if (target_action == 'notflag') {
                  var action_id_array = action_id.split("_");
                  var action_loop = action_id_array.length;
                  var reverse_action_str = '';
                  for (var ai = 0; ai < action_loop; ai++) {
                     reverse_action_str += action_target[ai] + '_spam_' + action_id_array[ai] + '_flag::';
                  }
                  ac_tar = reverse_action_str;
                  ac_tar = ac_tar.slice(0, -2);
                  var target_url = base_url + '/reverse-action-on-inquery/' + ac_tar;
               } else if (target_action == 'notspam') {
                  var action_id_array = action_id.split("_");
                  var action_loop = action_id_array.length;
                  var reverse_action_str = '';
                  for (var ai = 0; ai < action_loop; ai++) {
                     reverse_action_str += action_target[ai] + '_spam_' + action_id_array[ai] + '_spam::';
                  }
                  ac_tar = reverse_action_str;
                  ac_tar = ac_tar.slice(0, -2);
                  var target_url = base_url + '/reverse-action-on-inquery/' + ac_tar;
               }

               // alert (target_url);

               $.ajax({
                  url: target_url,
                  success: function(r) {
                     // alert (r);
                     ajax_success_message("<h4 style='color:#fff;font-weight: bold;margin-top:5%'>Action Performed!!!<h4>");
                     var action_id_array_del = action_id.split("_");
                     var action_loop_del = action_id_array_del.length;
                     for (var di = 0; di < action_loop_del; di++) {
                        $('a[data-inquery_id="' + action_id_array_del[di] + '"]').closest('.message_block').hide(500);
                     }
                     if (target_action == 'trush') {
                        $('[ca_group_name="sent"]').click();
                     } else if (target_action == 'flag' || target_action == 'spam') {
                        $('[ca_group_name="all_inquery"]').click();
                     } else if (target_action == 'nottrush') {
                        $('[ca_group_name="trush"]').click();
                     } else if (target_action == 'notflag') {
                        $('[ca_group_name="flag"]').click();
                     } else if (target_action == 'notspam') {
                        $('[ca_group_name="spam"]').click();
                     }
                  }
               });

            }
         }
      }, '.all_inquery_action');

      $(document).on({
         keydown: function(e) {
            // Allow: backspace, delete, tab, escape, enter and . (110,190)
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
               // Allow: Ctrl+A
               (e.keyCode == 65 && e.ctrlKey === true) ||
               // Allow: Ctrl+C
               (e.keyCode == 67 && e.ctrlKey === true) ||
               // Allow: Ctrl+X
               (e.keyCode == 88 && e.ctrlKey === true) ||
               // Allow: home, end, left, right
               (e.keyCode >= 35 && e.keyCode <= 39)) {
               // let it happen, don't do anything
               return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
               e.preventDefault();
            }
         }
      }, '[name="quantity"]');
      $(document).on({
         keydown: function(e) {
            // Allow: backspace, delete, tab, escape, enter and . (110,190)
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
               // Allow: Ctrl+A
               (e.keyCode == 65 && e.ctrlKey === true) ||
               // Allow: Ctrl+C
               (e.keyCode == 67 && e.ctrlKey === true) ||
               // Allow: Ctrl+X
               (e.keyCode == 88 && e.ctrlKey === true) ||
               // Allow: home, end, left, right
               (e.keyCode >= 35 && e.keyCode <= 39)) {
               // let it happen, don't do anything
               return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
               e.preventDefault();
            }

         }
      }, '[name="unit_price"]');
      $(document).on({
         keyup: function(e) {
            var val = $('[name="unit_price"]').val();
            if (isNaN(val)) {
               val = val.replace(/[^0-9\.]/g, '');
               if (val.split('.').length > 2)
                  val = val.replace(/\.+$/, "");
            }
            $('[name="unit_price"]').val(val);
         }
      }, '[name="unit_price"]');

      $(document).on({
         click: function(e) {
            e.preventDefault();
            if ($.trim($('[name="quantity"]').val()) == '') {
               $('[name="quantity"]').focus();
               $('[name="quantity"]').css('box-shadow', '0px 0px 3px 1px red');
            } else if ($.trim($('[name="unit_price"]').val()) == '') {
               $('[name="quantity"]').css('box-shadow', '');
               $('[name="unit_price"]').focus();
               $('[name="unit_price"]').css('box-shadow', '0px 0px 3px 1px red');
            } else {
               $('[name="quantity"]').css('box-shadow', '');
               $('[name="unit_price"]').css('box-shadow', '');
               $('.conversation_form').submit();
            }
         }
      }, '.submit_single_msg');


   });

   $(document).ready(function() {
      var section = $('[name="section1"]').val();
      if (section == 'company_site') {
         (section != "") ? $('.nav-tabs li a[href="#' + section + '"]').click(): false;
      } else {}
   });

   /* Select all checkbox for bulk actions */
   $('#select_all_products').click(function(event) {
      if (this.checked) {
         // Iterate each checkbox
         $('.selected_product').each(function() {
            this.checked = true;
         });
      } else {
         $('.selected_product').each(function() {
            this.checked = false;
         });
      }
   });

   $(document).on({
      click: function(e) {
         if (this.checked) {
            // Iterate each checkbox
            this.checked = true;
            if ($('.selected_product').length == $('.selected_product:checked').length) {
               document.getElementById("select_all_products").checked = true;
            }
         } else {
            this.checked = false;
            document.getElementById("select_all_products").checked = false;
         }
      }
   }, '.selected_product');

   $('.delete_selected').click(function(event) {
      if ($('.selected_product:checked').length < 1) {
         alert("Select at least a product");
      } else {
         // var confirm_text = prompt("You are going to delete all selected products. If you are sure, Please type CONFIRM", "");
         // if(confirm('You are going to delete all selected products. Are you sure?')){
         // if(confirm_text == 'CONFIRM'){
         if (confirm('You are going to delete all selected products. Are you sure?')) {
            $('.selected_product:checked').each(function() {
               var _this = $(this);
               var product_id = $(this).data('product_id');
               $.post(window.location.origin + '/x_product/' + product_id, {
                  '_token': '{{csrf_token()}}'
               }, function(r) {
                  if (r == 'deleted') {
                     _this.parent().parent().remove();
                     document.getElementById("select_all_products").checked = false;
                  } else {
                     alert('Product having id ' + _this.data("product_id") + ' was unable to delete.');
                  }
               });
            });

         } else {
            // alert ('cancel');
         }
      }
   });

   $(document).on({
      click: function(e) {
         e.preventDefault();
         var _this = $(this);
         var product_id = $.trim(_this.data('product_id'));
         var product_status = $.trim(_this.attr('data-product_status'));
         if (parseInt(product_status) == 1) {
            $.get(window.location.origin + '/change_live_status/' + 'make_lock/' + product_id, function(r) {
               if (r == 1) {
                  _this.toggleClass('fa-lock');
                  _this.toggleClass('fa-unlock');
                  _this.toggleClass('btn-danger');
                  _this.toggleClass('btn-success');
                  _this.attr('data-product_status', 0);
                  _this.attr('title', 'Make Publish');
               } else {
                  // alert ('Unknown error occured');
               }
            });
         } else {
            $.get(window.location.origin + '/change_live_status/' + 'make_unlock/' + product_id, function(r) {
               if (r == 1) {
                  _this.toggleClass('fa-lock');
                  _this.toggleClass('fa-unlock');
                  _this.toggleClass('btn-danger');
                  _this.toggleClass('btn-success');
                  _this.attr('data-product_status', 1);
                  _this.attr('title', 'Make Unpublish');
               } else {
                  //alert ('Unknown error occured');
               }
            });
         }
      }
   }, '.live_status');


   //-----------------------------------------------------//

   $(document).ready(function() {
      $('.dash-inp').focus(function() {
         $('.dash-focus').css('display', 'block');
         // $('.dash-focus').css('position','relative');
         $('.dash-frm').css('border', '1px solid #ddd');
      });

      var make_focus = '{{count($errors) > 0?1:0}}';
      if (make_focus == 1) {
         $('.dash-inp').focus();
      }

      $('.dash-frm').click(function(event) {
         event.stopPropagation();
      });
      $(document).click(function() {
         $('.dash-focus').css('display', 'none');
         // $('.dash-focus').css('position','relative');
         $('.dash-frm').css('border', '1px solid transparent');
      });
   });

   //-----------------------------------------------------//
</script>



@stop