@extends('frontend.mobile-view.master_m')
	@section('content')
	<?php
	use App\Models\InqueryMessage;
	?>
<section>
<div class="container">
	<div class="row" style="background: #fff; margin-bottom: 28px;">


		  <div class="dropdown" style="margin-bottom: 28px;">
		    <button class="btn btn-default dropdown-toggle" type="button" id="inq_menu" data-toggle="dropdown" style="width:100%;text-align:left;color: #666;padding:10px;font-size: 20px;"><?php if($type == 'folder'){
		    		echo $folder_name;
		    	}else if($type == 'new'){
		    		echo 'New Inquiries';
		    	}else if($type == 'flagged'){
		    		echo 'Flagged';
		    	}else if($type == 'spam'){
		    		echo 'Spam';
		    	}else if($type == 'all-orders'){
		    		echo 'All Orders';
		    	}else if($type == 'trash'){
		    		echo 'Trash';
		    	}else{
		    		echo 'All Inquiries';
		    	} ?>
		    <span class="caret"></span></button>
		    <ul class="dropdown-menu" role="menu" aria-labelledby="inq_menu" style="width:100%;">
		      <li role="presentation"><a class="type_action" data-typeT="all-inq" role="menuitem" tabindex="-1" href="#">All Inquiries</a></li>
		      <li role="presentation"><a class="type_action" data-typeT="new" role="menuitem" tabindex="-1" href="#">New</a></li>
		      <li role="presentation"><a class="type_action" data-typeT="flagged" role="menuitem" tabindex="-1" href="#">Flagged</a></li>
		      <li role="presentation"><a class="type_action" data-typeT="spam" role="menuitem" tabindex="-1" href="#">Spam</a></li>
		      @if($bdtdc_custom_folder)
		      @foreach($bdtdc_custom_folder as $folder_name)
		      <li role="presentation"><a class="type_action" data-typeT="folder" role="menuitem" tabindex="-1" href="#" data-folderID="{{$folder_name->id}}" data-folderName="{{$folder_name->name}}">{{$folder_name->name}}</a></li>
		      @endforeach
		      @endif
		      <li role="presentation"><a class="type_action" data-typeT="all-orders" role="menuitem" tabindex="-1" href="#">All Orders</a></li>
		      <li role="presentation"><a class="type_action" data-typeT="trash" role="menuitem" tabindex="-1" href="#">Trash</a></li>
		    </ul>
		  </div>

			@if($inquery_m)
			@if(count($inquery_m) > 0)
			@foreach($inquery_m as $inq_value)
			<div id="atm-list" style="border:0 none;">
			 		<div class="atm-item">
			 		<a href="{{URL::to('inquiry/details',$inq_value->id),is_secured()}}">
			 			 <div class="atm-item-img" style="padding-top: 0;">
			 				<div class="avatar" style="text-transform: uppercase;">
			 					<?php
									if($inq_value->inq_sender_user){
										$full_name = trim($inq_value->inq_sender_user->first_name).' '.trim($inq_value->inq_sender_user->last_name);
									}else{
										$full_name = "not available";
									}
									if($inq_value->is_join_quotation == 1){
										$inq_name_title = $inq_value->inquery_title;
									}else{
										if($inq_value->bdtdc_product){
											if($inq_value->bdtdc_product->product_name){
												$inq_name_title = $inq_value->bdtdc_product->product_name->name;
											}else{
												$inq_name_title = 'not available';
											}
										}else{
											$inq_name_title = 'not available';
										}
									}
								?>

			 					<?php
			 					if($inq_value->product_owner_id == Sentinel::getUser()->id){
									$inq_total_count = 0;
									if($inq_value->views == 0){
										$inq_total_count++;
									}
									$inq_id_array = explode(',', $inq_value->product_id);
								?>
								@foreach($inq_id_array as $inq_id)
								<?php
									$inq_mess_count = InqueryMessage::where('inquery_id',$inq_value->id)
													->where('product_id',$inq_id)
													->where('sender','!=',Sentinel::getUser()->id)
													->where('is_view',0)
													->get();
									$inq_total_count += count($inq_mess_count);
								?>
								@endforeach
								<?php
								}else{
									$inq_total_count = 0;
									$inq_id_array = explode(',', $inq_value->product_id);
									foreach($inq_id_array as $inq_id){
										$inq_mess_count = InqueryMessage::where('inquery_id',$inq_value->id)
														->where('product_id',$inq_id)
														->where('sender',Sentinel::getUser()->id)
														->where('is_view',0)
														->get();
										$inq_total_count += count($inq_mess_count);
									}
								}
								?>
			 						<div><span class="avatar-span" style="background: #ebebeb url({!! asset('assets/images/user-man.png') !!}) repeat scroll center center / cover ;">{{substr($full_name, 0, 1)}}<?php if($inq_total_count > 0){echo '<i class="fa fa-circle" title="{{$inq_total_count}} unread message" aria-hidden="true" style="position: absolute;color:green; font-size: 12px; top:0;"></i>';}else{} ?></span> </div>
			 				</div>
			 			 </div>
			 		</a>
			 		<a href="{{URL::to('inquiry/details',$inq_value->id),is_secured()}}" style="color:#333;">
			 		    <div class="item-txt-msg">
			 		    		<p style="font-size: 14px; padding-top: 12px;">{{$full_name}}</p>
			 		    		<p class="rqp-buy">{{$inq_name_title}}</p>
			 		    </div>
			 		</a>
			 		</div>
			</div>
			@endforeach
			@endif
			@endif
			<br>
			<div style="padding:10px; margin-bottom: 15px;">
				<div class="text-left" style="display:inline-block;width:80px; float: left; text-align: center;"><a class="btn btn-default" href="{{$inquery_m->previousPageUrl()}}" style="width:100%;padding:10px;font-size:14px;"><b>Previous</b></a></div>
				<div class="text-center" style="display:inline-block;width:38.5%;font-size:20px;"><b><span style="color:#ff7e29"><?php if($inquery_m->lastPage() == 0){echo 0;}else{echo $inquery_m->currentPage();} ?></span>/{{$inquery_m->lastPage()}}</b></div>
				<div class="text-right" style="display:inline-block;width:80px; float: right; text-align: center;"><a class="btn btn-default" href="{{$inquery_m->nextPageUrl()}}" style="width:100%;padding:10px;font-size:14px;"><b>Next</b></a></div>
			</div>
			 
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

</script>
@stop