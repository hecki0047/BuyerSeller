@php
use App\Models\InqueryMessage;
use App\Models\InqueryDocs;
use Carbon\Carbon;
@endphp
@if($product)
<form action="{{ URL::to('post_conversation',null,is_secured()) }}" method="post" class="form conversation_form">
   {!! csrf_field() !!}
   <div class="col-sm-12 padding_0">
      <p style="font-size:15px;font-weight:bold;color:#666" class="pull-left">Product</p>
      @if($product->product_owner_id != Sentinel::getUser()->id)
      <a href="{{URL::to('mysource/online-order/new',mt_rand(100000000, 999999999).'0'.mt_rand(100000000, 999999999),is_secured())}}?r=true&s={{mt_rand(100000000, 999999999).$product->product_owner_id.mt_rand(100000000, 999999999)}}" class="btn btn-sm btn-warning pull-right">Start Order</a>
      @endif
      <div class="container_of_inquery_action_btn">
         @if($user_id == $product->sender)
         <a class="pull-right text-danger inquery_action" href="#" ca_inquery_id="{{ $product->id }}" style="margin-top:.5%;margin-right:2%" ca_action="single_trush"><i class="fa fa-trash"></i> Trash</a>
         @else
         <a class="pull-right text-danger inquery_action" href="#" ca_inquery_id="{{ $product->id }}" style="margin-top:.5%;margin-right:2%" ca_action="single_spam"><i class="fa fa-thumbs-down"></i> Spam</a>
         <a class="pull-right text-danger inquery_action" href="#" ca_inquery_id="{{ $product->id }}" style="margin-top:.5%;margin-right:2%" ca_action="single_flag"><i class="fa fa-flag-checkered"></i> Flag</a>
         @endif
      </div>

   </div>
   <table class="table" style="background:#F0F0F0">
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
            <input type="hidden" name="product_owner_id" value="{{ $product->product_owner_id }}">
            <input type="hidden" name="inquery_id" value="{{ $product->id }}">
            <input type="hidden" name="product_id" value="{{ $product->product_id }}">
            <td><a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', ' ',$product->name).'='.mt_rand(100000000, 999999999).$product->product_id,null,is_secured()) }}" target="_blank" style="border:1px solid #ddd;padding:0%" class="col-xs-2 padding_0">
                  @if($product->images)
                  <img src="{{ URL::to($product->images,null,is_secured()) }}" alt="{{ substr($product->name, 0, 30) }}" class="img-responsive" style="height:52px;width:100%">
                  @else
                  <img src="{{ URL::asset('uploads/no-image.jpg',is_secured()) }}" alt="no image" class="img-responsive" style="height:52px;width:100%">
                  @endif
               </a><a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', ' ',$product->name).'='.mt_rand(100000000, 999999999).$product->product_id,null,is_secured()) }}" target="_blank" class="col-xs-9 btn-link">{{ $product->name }}</a></td>
            @php
            $previous_qp_data = InqueryMessage::where('inquery_id',$product->id)
            ->where('product_id',$product->product_id)
            ->where('product_owner_id',$product->product_owner_id)
            ->orderBy('id','desc')
            ->first();
            $attached_docs = InqueryDocs::where('inquery_id',$product->id)->get();
            @endphp
            <td><input type="text" name="quantity" class="form-control quantity quantity_count quantity_count1" value="@if($previous_qp_data){{$previous_qp_data->quantity}}@else {{ $product->quantity }}@endif"></td>
            <td>{{$product->unit}}</td>
            <td><input type="text" name="unit_price" class="form-control unit_price unit_count unit_count1" placeholder="Asking Unit Price" value="@if($previous_qp_data) {{ $previous_qp_data->unit_price }} @else @endif"></td>
            <td style="min-width: 120px;"><input type="text" name="total" class="form-control total total_count total_count1" readonly></td>
         </tr>
         <tr>
            <td colspan="4">
               @if($person_who_wrote  = ($user_id == $product->sender)) <span style='color:#666;font-weight:bold'>You</span>"
               @else <span style='color:red;font-weight:bold'>Supplier</span>
               @endif
               @if($user_id == $product->sender) <span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold;    margin-right: 10px;">You wrote </span>
               @else
               <span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold;    margin-right:10px;">{{$product->s_first_name}} {{$product->s_last_name}} wrote </span>
               @endif
               <span class="badge pull-right">at {{ $product->created_at }}</span>
               <div class="prev_msg">{!! $product->message !!}</div>
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

   @php $_id = 1 @endphp
   @foreach($prev_quotation as $pq)
   <table class="table show_prev_quotation_tbl" class="collapsed" style="background:#F0F0F0;height:50px">
      <thead style="border:1px solid #ddd!important" data-toggle="collapse" data-messID="{{ $pq->id }}" data-target="#demo{{ $_id }}" class="quotation_tbl_header @if($pq->is_view == 0 && $pq->sender != Sentinel::getUser()->id) view_changer @endif">
         <tr>
            <td>@if($pq->bdtdcInqueryMessageSender)
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
                     <span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold;margin-right: 10px;">You Wrote:</span> {{ substr($pq->messages,'0','15') }}
                  @else
                     <span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold;margin-right: 10px;">{{ $pq->bdtdcInqueryMessageSender->first_name }} {{ $pq->bdtdcInqueryMessageSender->last_name }} Wrote: </span>{{ substr($pq->messages,'0','15') }}
                  @endif
               </div>
            </td>
            <td></td>
            <td></td>
            <td><span class="toggle_quotation_text">at @php
                  $DeferenceInDays = Carbon::parse(Carbon::now())->diffInDays($pq->created_at);
                  @endphp
                  {{ $DeferenceInDays }} days ago
               </span>
            </td>
            <td style="padding:0%" class="text-right"> <i class="fa fa-arrow-circle-down btn btn-xs" style="font-size: 19px;margin-top:1%;@if($pq->is_view == 0 && $pq->sender != Sentinel::getUser()->id) color: green; @endif"></i>
            </td>
         </tr>
      </thead>
      <tbody style="border:1px solid #dce2e6!important" id="demo{{$_id}}" class="collapse">
         <tr style="font-size:13px">
            <td><a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', ' ',$product->name).'='.mt_rand(100000000, 999999999).$product->product_id,is_secured()) }}" target="_blank" style="border:1px solid #ddd;padding:0%" class="col-xs-2 padding_0">
                  @if($product->images)
                  <img src="{{ URL::to($product->images,is_secured()) }}" alt="{{ substr($product->name, 0, 30) }}" class="img-responsive" style="height:52px;width:100%">
                  @else
                  <img src="{{ URL::asset('uploads/no-image.jpg',is_secured()) }}" alt="no image" class="img-responsive" style="height:52px;width:100%">
                  @endif
                  <!-- <img src="{-{ URL::asset('uploads/'.$product->image.'',is_secured()) }-}" alt="" class="img-responsive" style="height:52px;width:100%"> -->
               </a><a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', ' ',$product->name).'='.mt_rand(100000000, 999999999).$product->product_id,is_secured()) }}" target="_blank" class="col-xs-9 btn-link">{{ $product->name }}</a></td>
            <td><input type="text" name="" value="{{ $pq->quantity }}" class="form-control quantity_count quantity_count{{$_id+1}}" /></td>
            <td>{{ $product->unit }}</td>
            <td><input type="text" name="" class="form-control unit_count unit_count{{$_id+1}}" placeholder="Asking Unit Price" value="{{ $pq->unit_price }}"></td>
            <td><input type="text" name="" class="form-control total_count total_count{{$_id+1}}" value="{{ $pq->total }}" readonly></td>

         </tr>
         <tr>
            <td><a href="{{URL::to('mysource/online-order/inq',mt_rand(100000000, 999999999).$pq->id.mt_rand(100000000, 999999999),is_secured())}}?r=true&s={{mt_rand(100000000, 999999999).$product->product_owner_id.mt_rand(100000000, 999999999)}}" class="btn btn-sm btn-warning pull-right">Start Order</a></td>
         </tr>
         <tr>
            <td colspan="5">
               @if($person_who_wrote  = ($user_id == $product->sender))
                  <span style='color:#666;font-weight:bold'>You</span>
               @else
               <span style='color:red;font-weight:bold'>Supplier</span>
               @endif
               @if($user_id == $pq->sender)
                  <span class="badge" style="background: #F1F1F1;color: #666;font-weight: bold;margin-right: 10px;">You wrote </span>
               @else
                  <span class="badge" style="background: #F1F1F1;color: darkred;font-weight: bold;margin-right: 10px;">Supplier wrote </span>
               @endif
               <span class="badge pull-right">at {{ $pq->created_at }}</span>
               <div class="prev_msg">{!! $pq->messages !!}</div>
            </td>
         </tr>

      </tbody>
   </table>
   @php $_id++ @endphp
   @endforeach

   <div class="col-sm-12 padding_0">
      <textarea name="messages" id="" cols="30" rows="2" placeholder="New message" class="form-control"></textarea>
      <input type="submit" value="Send" class="btn btn-sm btn-primary submit_single_msg" />
   </div>
</form>
@else
<h2 class="text-danger text-muted">Product not available</h2>
@endif