<?php

use App\Models\Notification;
use Pusher\Pusher;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

function getNotification(){
	if(Sentinel::getUser()){
		$receiver_id = Sentinel::getUser()->id;
	  	$data['all_notifications'] = Notification::where('read_at', NULL)->where('receiver_id', $receiver_id)->count();
	  	$data['inquiry_notifications'] = Notification::where('notification_type', 1)->where('read_at', NULL)->where('receiver_id', $receiver_id)->count();
	  	$data['quote_notifications'] = Notification::where('notification_type', 2)->where('read_at', NULL)->where('receiver_id', $receiver_id)->count();
	  	$data['order_notifications'] = Notification::where('notification_type', 3)->where('read_at', NULL)->where('receiver_id', $receiver_id)->count();

	  	return $data;
	}else{
		return 0;
	}
}

function getAdminNotification(){
	if(Sentinel::getUser()){
	  	$data['all_notifications'] = Notification::where('admin_read_at', NULL)->count();
	  	$data['inquiry_notifications'] = Notification::where('notification_type', 1)->where('admin_read_at', NULL)->count();
	  	$data['quote_notifications'] = Notification::where('notification_type', 2)->where('admin_read_at', NULL)->count();
	  	$data['order_notifications'] = Notification::where('notification_type', 3)->where('admin_read_at', NULL)->count();
	  	$data['new_user_notifications'] = Notification::where('notification_type', 4)->where('admin_read_at', NULL)->count();

	  	return $data;
	}else{
		return 0;
	}
}

function sendNotification($notification_type, $title, $sender_id, $receiver_id, $reference_tbl_id){
	//Start live notification
	$data['notification_type'] = $notification_type;
	$data['title'] = $title;
	$data['current_time'] = date('Y-m-d H:i:s');

	$options = array(
	    'cluster' => 'ap2',
	    'encrypted' => true
	);

	$pusher = new Pusher(
	    env('PUSHER_APP_KEY'),
	    env('PUSHER_APP_SECRET'),
	    env('PUSHER_APP_ID'),
	    $options
	);

	$pusher_channel = 'send-message'.$receiver_id;

	$pusher->trigger('Notify', $pusher_channel, $data);

	$pusher_channel = 'send-messageadmin';

	$pusher->trigger('Notify', $pusher_channel, $data);

	$notification = new Notification();
	$notification->notification_type = $notification_type;
	$notification->title = $title;
	$notification->sender_id = $sender_id;
	$notification->receiver_id = $receiver_id;
	$notification->reference_tbl_id = $reference_tbl_id;
	$notification->save();

	//End of live notification
}

function sendAdminNotification($notification_type, $title, $sender_id, $reference_tbl_id){
	//Start live notification
	$data['notification_type'] = $notification_type;
	$data['title'] = $title;
	$data['current_time'] = date('Y-m-d H:i:s');

	$options = array(
	    'cluster' => 'ap2',
	    'encrypted' => true
	);

	$pusher = new Pusher(
	    env('PUSHER_APP_KEY'),
	    env('PUSHER_APP_SECRET'),
	    env('PUSHER_APP_ID'),
	    $options
	);

	$pusher_channel = 'send-messageadmin';

	$pusher->trigger('Notify', $pusher_channel, $data);

	$notification = new Notification();
	$notification->notification_type = $notification_type;
	$notification->title = $title;
	$notification->sender_id = $sender_id;
	$notification->reference_tbl_id = $reference_tbl_id;
	$notification->save();

	//End of live notification
}

?>