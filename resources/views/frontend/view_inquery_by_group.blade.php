
<?php
use App\Models\InqueryFlag;
use App\Models\InquerySpam;
use App\Models\InqueryTrush;
use App\Models\ProductDescription;
    $user_id = Sentinel::getUser()->id;
?>
<div id="action_area">
    @if($group == 'sent')
        <button class="text-danger all_inquery_action" targeted="trush"><i class="fa fa-trash"></i>&nbsp;Trash</button>
    @endif
    @if($group == 'flag')
        <button class="text-danger all_inquery_action" targeted="notflag"><i class="fa fa-flag-checkered"></i>&nbsp;Not Flag</button>
    @endif
    @if($group == 'spam')
        <button class="text-success all_inquery_action" targeted="notspam"><i class="fa fa-thumbs-down"></i>&nbsp;Not Spam</button>
    @endif
    @if($group == 'trush')
        <button class="text-success all_inquery_action" targeted="nottrush"><i class="fa fa-trash"></i>&nbsp;Not Trash</button>
    @endif
</div>
@if(sizeof($message)>0)
    @foreach($message as $m)
    @if($m->product_id !=0 && $m->product_owner_id !=0 && $m->sender !=0)
        @php
            //$product_name = substr($m->product_name,0,15).'...';
            $ca_quotation_type  = "single";
            $product_name       = "";
            $date_format = strtotime($m->created_at);
        @endphp
            @if($m->is_join_quotation != 0)
                @php
                $ca_quotation_type  = "join";
                $product_name       = "";
                @endphp
                @foreach(explode(',',$m->product_id) as $p_id)
                @php
                    $product_name .= substr(ProductDescription::where('product_id',$p_id)->first(['name'])->name,0,15) . '...';
                @endphp
                @endforeach
            @else
            @php
                ProductDescription::where('product_id',$m->product_id)->first(['name'])->name,0,15) . '...';
                $product_name = substr(ProductDescription::where('product_id',$m->product_id)->first(['name'])['name'],0,15) . '...';
            @endphp
            @endif
            @if($m->sender == $user_id)
                    <div class="media message_block">
                        <div class="media-body">
                            <div class="col-xs-12 col-sm-9">
                                <input type="checkbox" inquery_id_data="{{ $m->id }}" data_quotation_type="{{ $ca_quotation_type }}" class="mail_check"/>
                                <span style="font-size:13px;color:#0087cf"><i class="fa fa-envelope-square message_icon"></i> Inquery Sent about
                                    <a target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', ' ',$product_name).'=232942253'.$m->product_id,null,is_secured()) }}" class="btn-link" style="font-style:italic">{{ $product_name }}</a>
                                    <a href="#" data-inquery_id="{{ $m->id }}" ca_quotation_type="{{ $ca_quotation_type }}" ca_action_performed="{{ $group }}" data-toggle="modal" data-target="#chat_modal" class="btn btn-primary btn-xs go_to_conversation" >View</a>
                                </span>
                                <a target="_blank" href="{{ URL::to('company_profile',$m->product_owner_id,is_secured()) }}" class="pull-right btn-link">To : <i class="fa fa-user-md"></i>&nbsp{{ $m->first_name . '-' . $m->last_name }}</a>
                            </div>
                            <div class="col-xs-12 col-sm-3 text-right">
                                <p class="">At {{ date("g:i A d-m-Y",$date_format) }} <a data-inquery_id= "{{ $m->id }}" ca_quotation_type="{{ $ca_quotation_type }}" ca_action_performed="{{ $group }}" data-toggle="modal" data-target="#chat_modal" class="btn btn-primary btn-xs go_to_conversation">Reply</a></p>
                            </div>
                        </div>
                    </div>
             @else
                    <div class="media message_block">
                        <div class="media-body">
                            <div class="col-xs-12 col-sm-9">
                                <input type="checkbox" inquery_id_data="{{ $m->id }}" data_quotation_type="{{ $ca_quotation_type }}" class="mail_check"/>
                                <span style="font-size:13px;color:red"><i class="fa fa-envelope-square message_icon"></i> Inquery Received About
                                    <a target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', ' ',$product_name).'=232942253'.$m->product_id,null,is_secured()) }}" class="btn-link" style="font-style:italic">{{ $product_name }}</a>
                                    <a href="#" data-inquery_id="{{ $m->id }}" ca_quotation_type="{{ $ca_quotation_type }}" ca_action_performed="{{ $group }}" data-toggle="modal" data-target="#chat_modal" class="btn btn-primary btn-xs go_to_conversation" >View</a>
                                </span>
                                <a target="_blank" href="{{ URL::to('company_profile',$m->product_owner_id,is_secured()) }}" class="pull-right btn-link">From : <i class="fa fa-user-md"></i>&nbsp{{ $m->sender_first_name . '-' . $m->sender_last_name }}</a>
                            </div>
                            <div class="col-xs-12 col-sm-3 text-right">
                                <p class="">At <?php echo date("g:i A d-m-Y",$date_format); ?> <a data-inquery_id= "{{ $m->id }}" data-toggle="modal" data-target="#chat_modal" ca_action_performed="{{ $group }}" ca_quotation_type="{{ $ca_quotation_type }}" class="btn btn-primary btn-xs go_to_conversation">Reply</a></p>
                            </div>
                        </div>
                    </div>
            @endif
    @endif
    @endforeach
    @else
    <h2 class="text-success text-center">No Data Found!!!</h2>
@endif
