@php
use App\Models\InqueryMessage;
$_id_prefix = 1;
use App\Models\InqueryDocs;
@endphp
<div class="col-xs-12" style="padding-bottom:.5%;background:#666;margin-bottom:.5%">
   <div class="container_of_inquery_action_btn">
      @if($user_id == $join_quotation->sender)
      <a class="pull-right inquery_action" href="#" ca_inquery_id="{{ $join_quotation->id }}" style="margin-top:.5%;margin-right:2%;color:#ddd" ca_action="join_trush"><i class="fa fa-trash"></i> Trash</a>
      @else
      <a class="pull-right inquery_action" href="#" ca_inquery_id="{{ $join_quotation->id }}" style="margin-top:.5%;margin-right:2%;color:#ddd" ca_action="join_spam"><i class="fa fa-thumbs-down"></i> Spam </a>
      <a class="pull-right inquery_action" href="#" ca_inquery_id="{{ $join_quotation->id }}" style="margin-top:.5%;margin-right:2%;color:#ddd" ca_action="join_flag"><i class="fa fa-flag-checkered"></i> Flag</a>
      @endif
   </div>
</div>
@foreach($all_join_quotation as $ajq)
@if($ajq)
<div class="col-xs-12 padding_0" style="margin-bottom:1%;border:1px solid #ddd;padding:2%;padding-left:0%;padding-right:0%">
   <div class="col-sm-12 padding_0 do_collaps" ca_target_id="#main_quoted_product{{ $_id_prefix }}">
      <div class="col-xs-2">
         @if($ajq->images)
         <img src="{{ URL::to($ajq->images,null,is_secured()) }}" alt="{{ substr($ajq->name, 0, 30) }}" class="img-responsive" style="height:60px;" />
         @else
         <img src="{{ URL::asset('uploads/no-image.jpg',null,is_secured()) }}" alt="no image" class="img-responsive" style="height:60px;" />
         @endif
      </div>
      <div class="col-xs-8">
         <p style="font-size:15px;font-weight:bold;color:#666;margin-top:3%" class="btn-link">{{ $ajq->name }} </p>
      </div>
      <div class="col-xs-2">
         <a href="#" class="btn btn-sm btn-warning pull-right" style="margin-top:12%">Start Order <i class="fa fa-chevron-down btn btn-sm"></i></a>
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
                  <input type="hidden" name="product_owner_id" value="{{ $join_quotation->product_owner_id }}">
                  <input type="hidden" name="inquery_id" value="{{ $join_quotation->id }}">
                  <input type="hidden" name="product_id" value="{{ $ajq->product_id }}">
                  <td><a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', ' ',$ajq->name).'='.mt_rand(100000000, 999999999).$ajq->product_id,null,is_secured()) }}" target="_blank" style="border:1px solid #ddd;padding:0%" class="col-xs-2 padding_0">
                        @if($ajq->images)
                        <img src="{{ URL::to($ajq->images,null,is_secured()) }}" alt="{{ substr($ajq->name, 0, 30) }}" class="img-responsive" style="height:52px;width:100%">
                        @else
                        <img src="{{ URL::asset('uploads/no-image.jpg',is_secured()) }}" alt="no image" class="img-responsive" style="height:52px;width:100%">
                        @endif

                     </a><a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', ' ',$ajq->name).'='.mt_rand(100000000, 999999999).$ajq->product_id,null,is_secured()) }}" target="_blank" class="col-xs-9 btn-link">{{ $ajq->name }}</a></td>
                  @php
                  $previous_qp_data = BdtdcInqueryMessage::where('inquery_id',$join_quotation->id)
                  ->where('product_id',$ajq->product_id)
                  ->where('product_owner_id',$join_quotation->product_owner_id)
                  ->orderBy('id','desc')
                  ->first();
                  $attached_docs = bdtdcInqueryDocs::where('inquery_id',$join_quotation->id)->get();
                  @endphp
                  <td><input type="text" name="quantity" class="form-control quantity quantity_count quantity_count1" value="
                                @if($previous_qp_data)
                                {{ $previous_qp_data->quantity}} 
                                @else
                                {{ $ajq->quantity}} 
                                @endif"></td>
                  <td>{{ $ajq->unit }}</td>
                  <td><input type="text" name="unit_price" class="form-control unit_price unit_count unit_count1" placeholder="Asking Unit Price" value="
                                @if($previous_qp_data)
                                {{ $previous_qp_data->unit_price}}
                                @else
                                @endif
                                "></td>
                  <td><input type="text" name="total" class="form-control total total_count total_count1" readonly></td>
               </tr>
               <tr>
                  <td colspan="4">
                     @if($user_id == $join_quotation->sender)
                     <span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold;margin-right: 10px;">You wrote </span>
                     @else
                     <span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold;margin-right: 10px;">Supplier wrote </span>
                     @endif
                     <span class="badge pull-right">at {{ $join_quotation->created_at }}</span>
                     <div class="prev_msg">{!! $join_quotation->message !!}</div>
                     @if($attached_docs)
                     @if(count($attached_docs) > 0)
                     <div>
                        <p style="font-size:15px;font-weight:bold;color:#666">Attached Documents</p>
                        @foreach($attached_docs as $ad)
                        <a target="_blank" href="{{ URL::asset('buying-request-docs/'.$ad->docs.'',is_secured()) }}"><img width="150" height="150" src="{{ URL::asset('buying-request-docs/'.$ad->docs.'',is_secured()) }}" alt=""></a>
                        @endforeach
                     </div>
                     @endif
                     @endif
                  </td>
               </tr>
            </tbody>
         </table>

         @php
         $_id = 1;
         $prev_quotation = BdtdcInqueryMessage::where('inquery_id',$join_quotation->id)->where('product_id',$ajq->product_id)->get();
         @endphp
         @foreach($prev_quotation as $pq)
         <table class="table show_prev_quotation_tbl" class="collapsed" style="background:#F0F0F0;height:50px">
            <thead style="border:1px solid #ddd!important" data-toggle="collapse" data-target="#demo{{ $_id_prefix.$_id }}" data-messID="{{ $pq->id }}" class="quotation_tbl_header 
                            @if($pq->is_view == 0 && $pq->sender != Sentinel::getUser()->id)
                            view_changer
                            @endif 
                            ">
               <tr>
                  <td style="width:40%">
                     @if($pq->bdtdcInqueryMessageSender)
                     @if($pq->bdtdcInqueryMessageSender->Role_user)
                     @if($pq->bdtdcInqueryMessageSender->Role_user->role_id == 2)
                     <img src="{{URL::to('favicon-16x16.png')}}" alt="bdtdc logo">
                     @else
                     <i class="fa fa-user-plus pull-left" style="margin-top: 1%"></i>
                     @endif
                     @else
                     <i class="fa fa-user-plus pull-left" style="margin-top: 1%"></i>
                     @endif
                     @else
                     <i class="fa fa-user-plus pull-left" style="margin-top: 1%"></i>
                     @endif
                     <div class="toggle_quotation_text">
                        @if($user_id == $pq->sender)
                        <span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold;margin-right: 10px;">Send:</span> {{ substr($pq->messages,'0','15') }}...
                        @else
                        <span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold;margin-right: 10px;">Received: </span>{{ substr($pq->messages,'0','15') }}...
                        @endif
                     </div>
                  </td>
                  <td></td>
                  <td></td>
                  <td><span class="toggle_quotation_text">at {{ $pq->created_at }}</span></td>
                  <td style="padding:0%" class="text-right"> <i class="fa fa-arrow-circle-down btn btn-xs" style="font-size: 19px;margin-top:1%;
                                @if($pq->is_view == 0 && $pq->sender != Sentinel::getUser()->id)
                                color: green;
                                @endif
                                "></i> </td>
               </tr>
            </thead>
            <tbody style="border:1px solid #dce2e6!important" id="demo{{$_id_prefix.$_id}}" class="collapse">
               <tr style="font-size:13px">
                  <td><a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', ' ',$ajq->name).'='.mt_rand(100000000, 999999999).$ajq->product_id,null,is_secured()) }}" target="_blank" style="border:1px solid #ddd;padding:0%" class="col-xs-2 padding_0">

                        @if($ajq->images)
                        <img src="{{ URL::to($ajq->images,null,is_secured()) }}" alt="{{ substr($ajq->name, 0, 30) }}" class="img-responsive" style="height:52px;width:100%">
                        @else
                        <img src="{{ URL::asset('uploads/no-image.jpg',is_secured()) }}" alt="no image" class="img-responsive" style="height:52px;width:100%">
                        @endif

                     </a><a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', ' ',$ajq->name).'='.mt_rand(100000000, 999999999).$ajq->product_id,null,is_secured()) }}" target="_blank" class="col-xs-9 btn-link">{{ $ajq->name }}</a></td>
                  <td><input type="text" name="" value="{{ $pq->quantity }}" class="form-control quantity_count quantity_count{{$_id+1}}" /></td>
                  <td>{{ $pq->unit }}</td>
                  <td><input type="text" name="" class="form-control unit_count unit_count{{$_id+1}}" placeholder="Asking Unit Price" value="{{ $pq->unit_price }}"></td>
                  <td><input type="text" name="" class="form-control total_count total_count{{$_id+1}}" value="{{ $pq->total }}" readonly></td>
               </tr>
               <tr>
                  <td colspan="5">


                     @if($user_id == $pq->sender)
                     <span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold;margin-right: 10px;">You wrote </span>
                     @else
                     <span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold;margin-right: 10px;">Supplier wrote </span>
                     @endif

                     <span class="badge pull-right">at {{ $pq->created_at }}</span>
                     <div class="prev_msg">
                        {!! $pq->messages !!}
                     </div>
                  </td>
               </tr>
            </tbody>
         </table>
         @php
         $_id++
         @endphp
         @endforeach

         <div class="col-sm-12 padding_0">
            <textarea name="messages" id="" cols="30" rows="2" placeholder="New message" class="form-control"></textarea>
            <input type="submit" formClass="main_quoted_product{{ $_id_prefix }}" value="Send" class="btn btn-sm btn-primary this_product_quotation_btn" />
         </div>
      </form>
   </div>
</div>
@php
$_id_prefix++
@endphp

@else
<h2 class="text-danger text-muted">Product not available</h2>
@endif
@endforeach