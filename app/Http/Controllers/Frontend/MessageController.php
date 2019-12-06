<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\User;
use App\Models\Categories;
use App\Models\Companies;
use App\Models\PageTabs;
use DB;
use Input;
use View;
use Sentinel;
use App\Models\SupplierInquery;
use App\Models\JoinQuotation;
use App\Models\CustomFolder;
use App\Models\InqueryMessage;
use App\Models\Chats;
use App\Models\ChatMessages;
use App\Models\SupplierQuery;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Notification;
use Jenssegers\Agent\Agent;
use Redirect;
use URL;
use Pusher\Pusher;


class MessageController extends Controller
{
    public function send_message_index(){
           return view('send_message');
    }

    public function sendMessage(){
      $request->validate([
          'title' => 'required',
          'content' => 'required'
      ]);
      
      $data['title'] = $request->input('title');
      $data['content'] = $request->input('content');

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

      $pusher->trigger('Notify', 'send-message', $data);

      return redirect()->route('send');
    }


     public function default_message(Request $request)
    {
   	    if(Sentinel::getUser()){
        }else{
            return redirect('login')->withFlashMessage('You must first login or register before accessing this page.');
        }

        //Notification Mark as read
        Notification::where('notification_type', 1)->where('read_at', NULL)->where('receiver_id', Sentinel::getUser()->id)->update(['read_at' => date('Y-m-d H:i:s')]);
        //End Notification


        $data['title']='BuyerSeller-Largest Bangladeshi Suppliers, Manufacturers, Exporters &amp Director';
        $data['keyword']="Find the Latest Reliable Apparel, Textiles &amp; Accessories Manufacturers, Suppliers, Exporters, Importers, Buyers, Wholesalers, Products and Trade Leads from Bangladesh";
        $data['description']="Suggestion: Bangladesh Manufacturers, Exporters, Importers, Products, Trade Leads, Suppliers, Manufacturer, Exporter, Importer, suppliers directory, Bangladeshi Suppliers, Marketplace Bangladesh, business e-commerce, business listings, business website, business marketplace, companies business listings, directory of Bangladeshi companies, exporter importer directory, exporters business directory, online business directory, manufacturers directory";
        $data['inq_sub_menu'] = '';
        if($request->inq_sub_menu){
            $data['inq_sub_menu'] = $request->inq_sub_menu;
        }
        $user_id = Sentinel::getUser()->id;
        $singlePquery = SupplierInquery::query();
        $singlePquery->select('id','product_id','product_owner_id','sender','message','is_join_quotation','flag','spam','trush','views','unit_id','quantity','currency','folder_id','created_at','updated_at')->where('product_id','!=','')->where('product_id','!=','0')->where('product_owner_id',$user_id);
        if($data['inq_sub_menu'] == 'New Inquiries'){
            $singlePquery->where('views',0);
        }
        $data['inquery'] = $singlePquery->where('spam',0)->orderBy('created_at', 'desc')->paginate(10);

        $company=Companies::where('user_id',$user_id)->first();
        if($company){
            $company_id=$company->id;
        }else{
            $company_id = 0;
        }
        
        $data['bdtdc_custom_folder'] = CustomFolder::where('slug','inquiry')
						   				->where('user_id',$user_id)
						   				->where('company_id',$company_id)
        							->get();
        $data['fluid']='true';
        $agent = new Agent();
        $device = $agent->device(); 
        if($agent->isPhone())
        {
          $type = $request->type;
          $Pquery_q = SupplierInquery::query();
          if($type){
            if($request->type == 'folder'){
              $Pquery_q->where('product_id','!=','')->where('product_id','!=','0')->where('product_owner_id',$user_id)->where('spam',0)->where('folder_id',$request->fid);
            }else{
              if($request->type == 'all-orders' || $request->type == 'trash'){
                $Pquery_q->where('product_id','!=','')->where('product_id','!=','0')->where('product_owner_id','!=','0')->where('sender',$user_id);
                if($request->type == 'trash'){
                  $Pquery_q->where('trush',1);
                }else{
                  $Pquery_q->where('trush',0);
                }
              }else{
                if($request->type == 'new'){
                  $Pquery_q->where('product_id','!=','')->where('product_id','!=','0')->where('product_owner_id',$user_id)->where('spam',0)->where('views',0);
                }else if($request->type == 'flagged'){
                  $Pquery_q->where('product_id','!=','')->where('spam',0)->where('product_id','!=','0')->where('product_owner_id',$user_id)->where('flag',1);
                }else if($request->type == 'spam'){
                  $Pquery_q->where('product_id','!=','')->where('product_id','!=','0')->where('product_owner_id',$user_id)->where('spam',1);
                }else{
                  $Pquery_q->where('product_id','!=','')->where('product_id','!=','0')->where('product_owner_id',$user_id)->where('spam',0);
                }
              }
            }
          }else{
            $Pquery_q->where('product_id','!=','')->where('product_id','!=','0')->where('product_owner_id',$user_id)->where('spam',0);
          }
          $inquery_m = $Pquery_q->where('is_RFQ',0)->orderBy('id', 'desc')->paginate(10);

            return view::make('frontend.mobile-view.inquiries-message',$data,['inquery_m' =>$inquery_m->appends(Input::except('page')),'user_id'=>$user_id,'type'=>$request->type,'folder_name'=>$request->fname]);
        }
        if($agent->isDestop())
        {
          return view('frontend.desktop-view.default-message',$data);
        }

        if($agent->isTab())
        {
           return view('frontend.desktop-view.default-message',$data);
        }
        else{
            return view('frontend.desktop-view.default-message',$data);
        }
        // return view('fontend.BuyerChannel.default-message',$data);
       
   }

   public function inquiry_details($id){
      if(Sentinel::getUser()){
        }else{
            return Redirect::to('ServiceLogin?continue='.URL::to($_SERVER['SCRIPT_URL']))->withFlashMessage('You must first login before accessing this page.');
        }

      $inquiries = SupplierInquery::where('id',$id)->first();
      $prev_quotation_single = InqueryMessage::where('inquery_id',$id)->get();
      $all_join_quotation = [];
      if($inquiries->is_join_quotation == 1){
        $arr_of_p_id =  explode(',',$inquiries->product_id);
              for($i=0,$len=sizeof($arr_of_p_id);$i<$len;$i++){
                $all_join_quotation[$i] = DB::table('product_description as pd')
                                                    ->join('product_image as pi','pi.product_id','=','pd.product_id','left')
                                                    ->join('product_images as pin','pin.product_id','=','pd.product_id','left')
                                                    ->join('product_to_category as ptc','ptc.product_id','=','pd.product_id','left')
                                                    ->join('category_description as cd','cd.category_id','=','ptc.category_id','left')
                                                    ->join('category_description as pcd','pcd.category_id','=','ptc.parent_id','left')
                                                    ->join('product as p','p.id','=','pd.product_id','left')
                                                    ->join('bdtdc_product_unit as pu','pu.id','=','p.unit_type_id','left')
                                                    ->where('pd.product_id',$arr_of_p_id[$i])
                                                    ->groupby('pi.product_id')
                                                    ->first(['pd.product_id','pd.name','pi.image as image','pin.image as images','pu.name as unit','cd.name as sub_cat','pcd.name as parent_cat']);
                $all_join_quotation[$i]->quantity = $inquiries->quantity;
            }
          }

          $inquery_view_update = [
              'views' => 1,
          ];

          $user_id = Sentinel::getUser()->id;
          if($inquiries){
              if($inquiries->views == '1'){}else{
                  if($inquiries->product_owner_id == $user_id){
                      SupplierInquery::where('id', $id)->update($inquery_view_update);
                  }
              }
          }

      return view::make('frontend.mobile-view.inquiry_details',compact('inquiries','prev_quotation_single','all_join_quotation'));
   }

   public function get_message_data($value){
   	if(Sentinel::getUser()){
        }else{
            return redirect('login')->withFlashMessage('Please sign in first.');
        }

   		$inq_main_menu 		= 'All Inquiries';
   		$inq_sub_menu 		= 'All';
   		$unread_message_val = false;
   		$search_val 		= '';
   		$page_no_val 		= 1;
   		$date_val 			= 'newToOldC';
   		$flag_val 			= false;
   		$spam_val 			= false;
   		$trash_val 			= false;
   		$group_val 			= 0;

   		$search_array = explode('+..+', $value);
	    $inq_main_menu = explode('==',$search_array[0])[1];
	    $inq_sub_menu = explode('==',$search_array[1])[1];
	    $unread_message_val = explode('==',$search_array[2])[1];
	    $search_val = explode('==',$search_array[3])[1];
	    $page_no_val = explode('==',$search_array[4])[1];
	    $date_val = explode('==',$search_array[5])[1];
	    $flag_val = explode('==',$search_array[6])[1];
	    $spam_val = explode('==',$search_array[7])[1];
	    $trash_val = explode('==',$search_array[8])[1];
	    $group_val = explode('==',$search_array[9])[1];

	    $perpage_inq = 10;
   		$offset_inq = ($perpage_inq*$page_no_val) - $perpage_inq;

   		 $user_id = Sentinel::getUser()->id;
        $data['inq_main_menu'] = $inq_main_menu;
        $data['bdtdc_custom_folder'] = CustomFolder::where('slug','inquiry')->where('user_id',$user_id)->get();

        $singlePquery = SupplierInquery::query();
        $orderQuery = Order::query();
        // dd($data['product_order']);
        $singlePquery->with(['inq_products_description']);
        if($inq_main_menu == 'All orders'){
         }else if($inq_main_menu == 'Sent' || $inq_main_menu == 'Trash'){
        	$singlePquery->where('product_owner_id','!=','0')->where('sender',$user_id);
        }else{
        	$singlePquery->where('product_owner_id',$user_id);
        }

        if($search_val != ''){
          if($inq_main_menu == 'All orders'){
            // return 'order';
          }else if($inq_main_menu == 'Sent' || $inq_main_menu == 'Trash'){
        		$singlePquery->WhereHas('product_owner_user', function($offerQuery) use ($search_val){
	                $offerQuery->where(function($subQuery) use ($search_val)
			            {   
		                    $subQuery->where('first_name', 'LIKE', '%'.$search_val.'%');
		                    $subQuery->orWhere('last_name', 'LIKE', '%'.$search_val.'%');
			            });
	            });
	        }else{
	        	$singlePquery->WhereHas('inq_sender_user', function($offerQuery) use ($search_val){
	                $offerQuery->where(function($subQuery) use ($search_val)
			            {   
		                    $subQuery->where('first_name', 'LIKE', '%'.$search_val.'%');
		                    $subQuery->orWhere('last_name', 'LIKE', '%'.$search_val.'%');
			            });
	            });
	        }
        }

        if($inq_main_menu == 'All Inquiries'){
        	$singlePquery->where('spam',0);
        }
        if($inq_main_menu == 'Sent'){
        	$singlePquery->where('trush',0);
        }
        if($inq_main_menu == 'All orders'){
          // $singlePquery->where('trush',0);
        }
        if($inq_sub_menu == 'New Inquiries'){
          $perpage_inq = 5;
          $offset_inq = ($perpage_inq*$page_no_val) - $perpage_inq;
        }
        if($inq_sub_menu == 'Awaiting Your Confirmation'){
        	$singlePquery->where('progress',1);
        }
        if($inq_sub_menu == 'Awaiting Partner Confirmation'){
        	$singlePquery->where('progress',2);
        }
        if($inq_sub_menu == 'Affirmed Orders'){
        	$singlePquery->where('progress',3);
        }
        if($unread_message_val == 'true'){
        	$singlePquery->where('views',0);
        }
        if($flag_val == 'true'){
        	$singlePquery->where('flag',1);
        }
        if($spam_val == 'true'){
        	$singlePquery->where('spam',1);
        }
        if($trash_val == 'true'){
        	$singlePquery->where('trush',1);
        }
        if($group_val == '0'){
        	// $singlePquery->where('folder_id',0);
        }else{
        	$singlePquery->where('folder_id',$group_val);
        }
        
        if($date_val == 'newToOldU'){
        	if($page_no_val == 1){
	        	$data['inquery'] = $singlePquery->orderBy('updated_at', 'desc')->take($perpage_inq)->get();
	        }else{
	        	$data['inquery'] = $singlePquery->orderBy('updated_at', 'desc')->offset($offset_inq)->take($perpage_inq)->get();
	        }
        }else if($date_val == 'oldToNewU'){
        	if($page_no_val == 1){
	        	$data['inquery'] = $singlePquery->orderBy('updated_at', 'asc')->take($perpage_inq)->get();
	        }else{
	        	$data['inquery'] = $singlePquery->orderBy('updated_at', 'asc')->offset($offset_inq)->take($perpage_inq)->get();
	        }
        }else if($date_val == 'newToOldC'){
        	if($page_no_val == 1){
	        	$data['inquery'] = $singlePquery->orderBy('created_at', 'desc')->take($perpage_inq)->get();
	        }else{
	        	$data['inquery'] = $singlePquery->orderBy('created_at', 'desc')->offset($offset_inq)->take($perpage_inq)->get();
	        }
        }else{
        	if($page_no_val == 1){
	        	$data['inquery'] = $singlePquery->orderBy('created_at', 'asc')->take($perpage_inq)->get();
	        }else{
	        	$data['inquery'] = $singlePquery->orderBy('created_at', 'asc')->offset($offset_inq)->take($perpage_inq)->get();
	        }
        }

        if($inq_main_menu == 'All orders'){
          $data['product_orders'] = $orderQuery->where('sender',$user_id)->orderBy('id','desc')->offset($offset_inq)->take($perpage_inq)->get();
          return view('frontend.chats.loaded-order-data',$data);
        }
        // dd($data['inquery']);
        return view('frontend.chats.default-loaded-message',$data);
   }

   public function get_total_new_inq($value = 10){
      if(Sentinel::getUser()){
        }else{
            $unread_data_array = [
                              'login'=>0,
                          ];

            return $unread_data_array;
        }
      $user_id = Sentinel::getUser()->id;
      $total_unread_all_inq = 0;
      $total_unread_flag = 0;
      $total_unread_spam = 0;
      $total_my_unread_inquiry_quote = 0;
      $new_inq_quote = 0;
      $latest_buying_request = 0;
      $rejected_buying_request = 0;
      $new_quote = 0;
      $new_order = 0;
      $new_chat = 0;
      // dd(BdtdcSupplierInquery::orderBy('id','desc')->take(10)->get());
      $all_new_inq_data = SupplierInquery::where('product_id','!=','0')
                          ->where('product_id','!=','')
                          ->where('product_owner_id',$user_id)
                          ->where('sender','!=','0')
                          ->where('is_RFQ',0)
                          ->get();
      if(count($all_new_inq_data) > 0){
        foreach ($all_new_inq_data as $inq_data_value) {
          if($inq_data_value->views == 0){
            $total_unread_all_inq++;
          }
          if($inq_data_value->flag == 1){
            if($inq_data_value->views == 0){
              $total_unread_flag++;
            }
            $inq_p_id_array = explode(',', $inq_data_value->product_id);
            if(count($inq_p_id_array) > 0){
              foreach ($inq_p_id_array as $inq_p_id) {
                $inq_n_mess_data = InqueryMessage::where('inquery_id',$inq_data_value->id)
                                  ->where('product_id',$inq_p_id)
                                  ->where('sender','!=',$user_id)
                                  ->where('is_view','0')
                                  ->where('is_quote',0)
                                  ->where('is_msg',0)
                                  ->where('quote_id',0)
                                  ->get();
                $total_unread_flag += count($inq_n_mess_data);
              }
            }
          }
          if($inq_data_value->spam == 1){
            if($inq_data_value->views == 0){
              $total_unread_spam++;
            }
            $inq_p_id_array = explode(',', $inq_data_value->product_id);
            if(count($inq_p_id_array) > 0){
              foreach ($inq_p_id_array as $inq_p_id) {
                $inq_n_mess_data = InqueryMessage::where('inquery_id',$inq_data_value->id)
                                  ->where('product_id',$inq_p_id)
                                  ->where('sender','!=',$user_id)
                                  ->where('is_view','0')
                                  ->where('is_quote',0)
                                  ->where('is_msg',0)
                                  ->where('quote_id',0)
                                  ->get();
                $total_unread_spam += count($inq_n_mess_data);
              }
            }
          }
          $inq_p_id_array = explode(',', $inq_data_value->product_id);
          if(count($inq_p_id_array) > 0){
            foreach ($inq_p_id_array as $inq_p_id) {
              $inq_n_mess_data = InqueryMessage::where('inquery_id',$inq_data_value->id)
                                ->where('product_id',$inq_p_id)
                                ->where('sender','!=',$user_id)
                                ->where('is_quote',0)
                                ->where('is_msg',0)
                                ->where('quote_id',0)
                                ->where('is_view','0')
                                ->get();
              $total_unread_all_inq += count($inq_n_mess_data);
            }
          }
        }
      }

      $all_new_inquiry_quote_data = SupplierInquery::where('product_id','!=','0')
                          ->where('product_owner_id','!=','0')
                          ->where('sender',$user_id)
                          ->where('is_RFQ',1)
                          ->get();
      if(count($all_new_inquiry_quote_data) > 0){
        foreach ($all_new_inquiry_quote_data as $new_inquiry_quote_data_single) {
          // if($new_inquiry_quote_data_single->views == 0){
          //   $total_my_unread_inquiry_quote++;
          // }
          $order_p_id_array = explode(',', $new_inquiry_quote_data_single->product_id);
          if(count($order_p_id_array) > 0){
            foreach ($order_p_id_array as $order_p_id) {
              $order_n_mess_data = InqueryMessage::where('inquery_id',$new_inquiry_quote_data_single->id)
                                ->where('product_id',$order_p_id)
                                ->where('product_owner_id',$user_id)
                                ->where('is_quote',0)
                                ->where('is_msg',0)
                                ->where('quote_id',0)
                                ->where('is_view','0')
                                ->get();
              $total_my_unread_inquiry_quote += count($order_n_mess_data);
            }
          }
        }
      }

      //new inquiry-quotation and quotation calculation
      $bdtdc_supllier_inqueries_all=SupplierQuery::with(['BdtdcInqueryMessage'])->where('sender',$user_id)->where('is_RFQ',1)->orderBy('id','desc')->get();
      if (count($bdtdc_supllier_inqueries_all) > 0) {
        foreach ($bdtdc_supllier_inqueries_all as $inq_all) {
          /*if($inq_all->views == 0){
            $new_inq_quote++;
          }*/
          if($inq_all->status == 2){
            $rejected_buying_request++;
          }
          if($inq_all->BdtdcInqueryMessage){
            if(count($inq_all->BdtdcInqueryMessage) > 0){
              foreach ($inq_all->BdtdcInqueryMessage as $inq_mess) {
                if($inq_mess->sender != $user_id && $inq_mess->is_view == 0){
                  $new_quote++;
                }
              }
            }
          }
        }
      }

      //new chat area
      $chat_list = Chats::with('chat_messages')->where('sender_id',$user_id)->orWhere('receiver_id',$user_id)->get();
      if($chat_list){
        if(count($chat_list) > 0){
          foreach ($chat_list as $list) {
            if($list->chat_messages){
              if(count($list->chat_messages) > 0){
                foreach ($list->chat_messages as $cmsg) {
                  if($cmsg->receiver_id == $user_id){
                    if($cmsg->receiver_view == 0){
                      $new_chat++;
                    }
                  }
                }
              }
            }
          }
        }
      }

      //order notification
      $new_order_found = Order::where('product_owner_id',$user_id)->where('is_view',0)->count();
      $new_order += $new_order_found;

      $latest_buying_request = $new_quote;

      $unread_data_array = [
                              'login'=>1,
                              'all'=>$total_unread_all_inq,
                              'flag'=>$total_unread_flag,
                              'spam'=>$total_unread_spam,
                              'my_inquiry_new_quote'=>$total_my_unread_inquiry_quote,
                              'new_inq_quote'=>$new_inq_quote,
                              'latest_buying_request'=>$latest_buying_request,
                              'rejected_buying_request'=>$rejected_buying_request,
                              'new_quote'=>$new_quote,
                              'new_order'=>$new_order,
                              'new_chat'=>$new_chat,
                          ];

      return $unread_data_array;

   }

   public function mark_action(Request $request){
   		if(Sentinel::getUser()){
        }else{
            return redirect('login')->withFlashMessage('Please sign in first.');
        }

   	    $inq_data = explode('::', $request->selected);
		$inq_id_array = explode('_',substr($inq_data[0], 0,-1));
		$inq_type_array = explode('_',substr($inq_data[1], 0,-1));
		$array_loop = count($inq_id_array);

   		if($request->mark_action == 'mark_read'){
   			for ($i=0; $i < $array_loop; $i++){
   				if($inq_type_array[$i] == 'single'){
   					$query = SupplierInquery::where('id',$inq_id_array[$i])->first();
   					if($query->views == '0'){
   						SupplierInquery::where('id',$inq_id_array[$i])->update(['views'=>'1']);
   					}else{}
   				}else{
   					$query = SupplierInquery::where('id',$inq_id_array[$i])->first();
            if($query->views == '0'){
              SupplierInquery::where('id',$inq_id_array[$i])->update(['views'=>'1']);
            }else{}
   				}
   			}
   		}
   		if($request->mark_action == 'mark_unread'){
   			for ($i=0; $i < $array_loop; $i++){
   				if($inq_type_array[$i] == 'single'){
   					$query = SupplierInquery::where('id',$inq_id_array[$i])->first();
   					if($query->views == '1'){
   						SupplierInquery::where('id',$inq_id_array[$i])->update(['views'=>'0']);
   					}else{}
   				}else{
   					$query = SupplierInquery::where('id',$inq_id_array[$i])->first();
            if($query->views == '1'){
              SupplierInquery::where('id',$inq_id_array[$i])->update(['views'=>'0']);
            }else{}
   				}
   			}
   		}
   		if($request->mark_action == 'add_contact'){

   		}
   		if($request->mark_action == 'translate'){

   		}
   		return '1';
   }

   public function manage_folder(Request $r){
   		if(Sentinel::getUser()){
        }else{
            return redirect('login')->withFlashMessage('Please sign in first.');
        }

        $user_id = Sentinel::getUser()->id;
        $company=Company::where('user_id',$user_id)->first();
        $company_id=$company->id;
   		$name = $r->name;
   		$id = $r->id;
   		$action = $r->action;
   		if($action == 'create'){
   			$folder_id = CustomFolder::insertGetId(['name'=>$name,'slug'=>'inquiry','user_id'=>$user_id,'company_id'=>$company_id]);
   			return $folder_id;
   		}else if($action == 'update'){
   			$result = CustomFolder::where('id',$id)
   				->where('slug','inquiry')
   				->where('user_id',$user_id)
   				->where('company_id',$company_id)
   				->update(['name'=>$name]);
   			if($result){
   				return 1;
   			}else{
   				return 0;
   			}
   		}else if($action == 'delete'){
   			$result = CustomFolder::where('id',$id)
   				->where('slug','inquiry')
   				->where('user_id',$user_id)
   				->where('company_id',$company_id)
   				->delete();
   				SupplierInquery::where('folder_id',$id)->update(['folder_id' => 0]);
   				// BdtdcJoinQuotation::where('folder_id',$id)->update(['folder_id' => 0]);
   			if($result){
   				return 1;
   			}else{
   				return 0;
   			}
   		}else if($action == 'addto'){
   			$selected = $r->selected;
   			$selected_array = explode("::",$selected);
   			$inquiry_id_string = substr($selected_array[0], 0,-1);
   			$type_string = substr($selected_array[1], 0,-1);
   			$type_array = explode('_', $type_string);
   			$inquiry_id_array = explode('_', $inquiry_id_string);
	        $array_loop = count($inquiry_id_array);
	        for($i=0;$i<$array_loop;$i++){
	        	if($type_array[$i] == 'single'){
	        		$result = SupplierInquery::where('id',$inquiry_id_array[$i])->update(['folder_id' => $id]);
	        	}else{
	        		$result = SupplierInquery::where('id',$inquiry_id_array[$i])->update(['folder_id' => $id]);
	        	}
	        }
	        return 1;
   		}
   }

    public function default_chat($id){
        if(Sentinel::getUser()){
        }else{
            return view('frontend.chats.default-login-chat');
        }
    
        $user_id = Sentinel::getUser()->id;
        $data['user_id'] = $user_id;
        Chats::where('sender_id',0)->orWhere('receiver_id',0)->delete();

        $check_user_role = Users::where('id',$user_id)->first();
        if($check_user_role){
            if($check_user_role->Role_user){
                if($check_user_role->Role_user->role_id != 2){
                    $get_admin = Users::where('role','admin')->get();
                    if($get_admin){
                        foreach ($get_admin as $admin_value) {
                            $check_admin_receiver = Chats::where('sender_id',$user_id)->where('receiver_id',$admin_value->id)->first();
                            if($check_admin_receiver){}else{
                                Chats::insert(['sender_id'=>$user_id,'receiver_id'=>$admin_value->id]);
                            }
                        }
                    }
                }
            }
        }
    

        $data['click_type'] = 'default';
        $data['uid'] = 0;
        $data['utype'] = '';
        $data['chatid'] = 0;
        $data['chat_messages'] = [];
        if($id == 'default'){
            $data['click_type'] = 'default';
            $data['chat_list'] = Chats::where('sender_id',$user_id)->orWhere('receiver_id',$user_id)->orderBy('updated_at','desc')->get();
        }else{
            $sid = substr($id, 0, -9);
            $is_user_sender = Chats::where('sender_id',$user_id)->where('receiver_id',$sid)->first();
            $is_user_receiver = Chats::where('sender_id',$sid)->where('receiver_id',$user_id)->first();
            if($is_user_sender){
                $data['chat_list'] = Chats::where('sender_id',$user_id)->orWhere('receiver_id',$user_id)->orderBy('updated_at','desc')->get();
                $data['click_type'] = 'single';
                $target_chat_id = Chats::where('sender_id',$user_id)->where('receiver_id',$sid)->first();
                $data['uid'] = $sid;
                $data['utype'] = 'sender';
                $data['chatid'] = $target_chat_id->id;
                $data['chat_messages'] = BdtdcChatMessages::where('chat_id',$target_chat_id->id)->get();
            }else if($is_user_receiver){
                $data['chat_list'] = Chats::where('sender_id',$user_id)->orWhere('receiver_id',$user_id)->orderBy('updated_at','desc')->get();
                $data['click_type'] = 'single';
                $target_chat_id = Chats::where('sender_id',$sid)->where('receiver_id',$user_id)->first();
                $data['uid'] = $sid;
                $data['utype'] = 'receiver';
                $data['chatid'] = $target_chat_id->id;
                $data['chat_messages'] = BdtdcChatMessages::where('chat_id',$target_chat_id->id)->get();
            }else{
                if($user_id == $sid){
                    $data['chat_list'] = [];
                    echo "Unable to perform this action.";
                }else{
                    $chat_id = Chats::insertGetId(['sender_id'=>$user_id,'receiver_id'=>$sid]);
                    Chats::where('sender_id',0)->orWhere('receiver_id',0)->delete();
                    $data['chat_list'] = Chats::where('sender_id',$user_id)->orWhere('receiver_id',$user_id)->orderBy('updated_at','desc')->get();
                    $data['click_type'] = 'single';
                    $target_chat_id = Chats::where('sender_id',$user_id)->where('receiver_id',$sid)->first();
                    $data['uid'] = $sid;
                    $data['utype'] = 'sender';
                    $data['chatid'] = $chat_id;
                    if($target_chat_id){
                        $data['chat_messages'] = ChatMessages::where('chat_id',$target_chat_id->id)->get();
                    }
                }
            }
        }

        return view('frontend.chats.default-chat',$data);
   }

    public function post_default_chat(Request $r){
        if(Sentinel::getUser()){
        }else{
            return 0;
        }

        $details = $r->get('message');
        $string_test = ['website','www','http','https','link','url','e-mail','email','mail','phone','mobile','skype','facebook','imo','whatsapp','twitter','id','payment','LinkedIn','call','contact','viber','fb','pay'];
        $validated = true;
        /*if($validated == true){
          $found_str = '';
          foreach($string_test as $entry) {
              $res = preg_match('/'.$entry.'/',$details);
              if($res){
                  $found_str .= $entry.', ';
                  $validated = false;
              }
          }

          if($validated == true){
              $email_patt = '/\S+@\S+\.\S+/';
              $mail_check_result = preg_match($email_patt,$details,$matches);
              if($mail_check_result){
                  $matched_email = '';
                  foreach ($matches as $value) {
                      $matched_email .= $value.', ';
                  }
                  $returned_error_data = 'You should not share your email address '.$matched_email.'This is prohibited by authority.';
                  return $returned_error_data;
              }else{
                  $website_patt = '/\S[^0-9]+\.\S[^0-9]/';
                  $test_text = 'df '.$details;
                  $website_result = preg_match($website_patt,$details,$website_matches);
                  if($website_result){
                      $matched_text = '';
                      foreach ($website_matches as $value) {
                          $matched_text .= $value.' ';
                      }
                      $returned_error_data = 'Your <q>'.$matched_text.'</q> is suspicious. Please use sapce after . (dot) sign.';
                      return $returned_error_data;
                  }else{
                      if(preg_match('/@/',$details)){
                          $returned_error_data = 'Your @ is suspicious. Please remove this character. Sharing email, social link or account, url, website and phone number is prohibited by authority.';
                          return $returned_error_data;
                      }else{
                          $details_ph = 'test '.$details;
                          $plus_res = preg_match('/\++\d+/',$details_ph,$plus_res_matches_data); //for +99999
                          $plus_res_s = preg_match('/\++\s+\d+/',$details_ph,$plus_res_s_matches_data); //for + 99999
                          $doublez_res = preg_match('/[^0-9.]00+\d+/',$details_ph,$doublez_res_matches_data); //for 0099999
                          $sz_res = preg_match('/[^0-9.]0+\d+/',$details_ph,$sz_res_matches_data); //for 099999
                          $doublez_res_s = preg_match('/[^0-9.]00+\s+\d+/',$details_ph,$doublez_res_s_matches_data); //for 00 99999
                          $sz_res_s = preg_match('/[^0-9.]0+\s+\d+/',$details_ph,$sz_res_s_matches_data); //for 0 99999
                          // $plus_res = $details.preg_match(/\b\+/);
                          // dd($plus_res_s_matches_data);
                          if($plus_res){
                              $matched_text = '';
                              foreach ($plus_res_matches_data as $value) {
                                  $matched_text .= $value.' ';
                              }
                              $returned_error_data = 'Your '.$matched_text.' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.';
                              return $returned_error_data;
                          }else if($plus_res_s){
                              $matched_text = '';
                              foreach ($plus_res_s_matches_data as $value) {
                                  $matched_text .= $value.' ';
                              }
                              $returned_error_data = 'Your '.$matched_text.' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.';
                              return $returned_error_data;
                          }else if($doublez_res){
                              $matched_text = '';
                              foreach ($doublez_res_matches_data as $value) {
                                  $matched_text .= $value.' ';
                              }
                              $returned_error_data = 'Your '.$matched_text.' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.';
                              return $returned_error_data;
                          }else if($doublez_res_s){
                              $matched_text = '';
                              foreach ($doublez_res_s_matches_data as $value) {
                                  $matched_text .= $value.' ';
                              }
                              $returned_error_data = 'Your '.$matched_text.' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.';
                              return $returned_error_data;
                          }else if($sz_res){
                              $matched_text = '';
                              foreach ($sz_res_matches_data as $value) {
                                  $matched_text .= $value.' ';
                              }
                              $returned_error_data = 'Your '.$matched_text.' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.';
                              return $returned_error_data;
                          }else if($sz_res_s){
                              $matched_text = '';
                              foreach ($sz_res_s_matches_data as $value) {
                                  $matched_text .= $value.' ';
                              }
                              $returned_error_data = 'Your '.$matched_text.' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.';
                              return $returned_error_data;
                          }else{
                              $min_six = preg_match('/\d{6,}/',$details,$min_six_data);
                              $min_six_s = preg_match('/\d+\S[^0-9.]+\d+/',$details,$min_six_data_s);
                              $min_two_ad = preg_match('/\.\d{3,}/',$details,$min_two_ad_data);
                              if($min_six){
                                  $matched_text = '';
                                  foreach ($min_six_data as $value) {
                                      $matched_text .= $value.' ';
                                  }
                                  $returned_error_data = 'Your '.$matched_text.' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.';
                                  return $returned_error_data;
                              }else if($min_six_s){
                                  $matched_text = '';
                                  foreach ($min_six_data_s as $value) {
                                      $matched_text .= $value.' ';
                                  }
                                  $returned_error_data = 'Your '.$matched_text.' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.';
                                  return $returned_error_data;
                              }else if($min_two_ad){
                                  $matched_text = '';
                                  foreach ($min_two_ad_data as $value) {
                                      $matched_text .= $value.' ';
                                  }
                                  $returned_error_data = 'Your '.$matched_text.' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.';
                                  return $returned_error_data;
                              }else{
                                  // $returned_error_data = 'success';
                                  // return $returned_error_data;
                              }
                              
                          }
                      }
                  }
              }
          }else{
              $returned_error_data = $found_str. 'has been found on your details. Sharing email, social link or account, url, website and phone number is prohibited by authority.';
              return $returned_error_data;
          }
      }*/

        $user_id = Sentinel::getUser()->id;

        $validator = Validator::make($r->all(), [
            'uid' => 'required|integer|max:9999999999999',
            'utype' => 'required|max:10',
            'message' => 'required|max:2000',
            'chatid' => 'required|integer|max:9999999999999',
        ]);

        if($validator->fails()) {
            return $validator->errors()->all();
        }else{
            $insert_array = [
              'chat_id'=> $r->chatid,
              'message'=> $r->message,
              'sender_id'=> $user_id,
              'receiver_id'=> $r->uid,
            ];

            Chats::where('id',$r->chatid)->update([]);
            $insert_result = ChatMessages::insertGetId($insert_array);
            $get_result = ChatMessages::where('id',$insert_result)->with(['chat_sender_user'])->first();
            return $get_result;
        }
    }

    public function get_chat_data(Request $r){
        if(Sentinel::getUser()){
        }else{
            return 0;
        }

        $user_id = Sentinel::getUser()->id;
        $data['user_id'] = $user_id;
        $data['chat_messages'] = ChatMessages::where('chat_id',$r->chatid)->orderBy('id','desc')->take(30)->get()->reverse();

        $check_user = Chats::where('id',$r->chatid)->first();

        if($check_user->sender_id == $user_id){
            ChatMessages::where('chat_id',$r->chatid)->update(['sender_view'=>1]);
        }

        if($check_user->receiver_id == $user_id){
            ChatMessages::where('chat_id',$r->chatid)->update(['receiver_view'=>1]);
        }

        return view('frontend.chats.get_chat_data',$data);
    }

    public function get_contact_data(Request $r){
        if(Sentinel::getUser()){
        }else{
            return 0;
        }

        $user_id = Sentinel::getUser()->id;
        $data['user_id'] = $user_id;
        $data['chat_list'] = Chats::where('sender_id',$user_id)->orWhere('receiver_id',$user_id)->orderBy('updated_at','desc')->get();
    
        return view('frontend.chats.get_contact_data',$data);
    }

    public function ajax_chat_data(Request $r)
    {
        if(Sentinel::getUser()){
        }else{
            return 0;
        }

        $user_id = Sentinel::getUser()->id;
        $data['user_id'] = $user_id;

        $is_user_sender = Chats::where('sender_id',$user_id)->where('receiver_id',$r->sid)->first();
        $is_user_receiver = Chats::where('sender_id',$r->sid)->where('receiver_id',$user_id)->first();

        ini_set('max_execution_time',7200);

        if($is_user_sender){
            while(ChatMessages::where('chat_id',$r->chatid)->where('sender_view',0)->count() < 1)
            {
                usleep(1000);
            }
            if(ChatMessages::where('chat_id',$r->chatid)->where('sender_view',0)->count() > 0)
            {
                $data['chat_messages'] = ChatMessages::where('chat_id',$r->chatid)->where('sender_view',0)->get();
                ChatMessages::where('chat_id',$r->chatid)->where('sender_view',0)->update(['sender_view'=>1]);
                return view('frontend.chats.get_chat_data',$data);
            }
        }

        if($is_user_receiver){
            while(BdtdcChatMessages::where('chat_id',$r->chatid)->where('receiver_view',0)->count() < 1)
            {
                usleep(1000);
            }
            if(BdtdcChatMessages::where('chat_id',$r->chatid)->where('receiver_view',0)->count() > 0)
            {
                $data['chat_messages'] = BdtdcChatMessages::where('chat_id',$r->chatid)->where('receiver_view',0)->get();
                BdtdcChatMessages::where('chat_id',$r->chatid)->where('receiver_view',0)->update(['receiver_view'=>1]);
                return view('frontend.chats.get_chat_data',$data);
            }
        }

        /*while(BdtdcChatMessages::where('chat_id',$r->chatid)->where('view',0)->count() < 1)
        {
          usleep(1000);
        }
        if(BdtdcChatMessages::where('chat_id',$r->chatid)->where('view',0)->count() > 0)
        {
          if($is_user_sender){
            $data['chat_messages'] = BdtdcChatMessages::where('chat_id',$r->chatid)->where('sender_view',0)->get();
            BdtdcChatMessages::where('chat_id',$r->chatid)->where('sender_view',0)->update(['sender_view'=>1]);
          }else{
            $data['chat_messages'] = BdtdcChatMessages::where('chat_id',$r->chatid)->where('receiver_view',0)->get();
            BdtdcChatMessages::where('chat_id',$r->chatid)->where('receiver_view',0)->update(['receiver_view'=>1]);
          }
          return view('fontend.BuyerChannel.get_chat_data',$data);
        }*/
    }

  public function get_scrolled_chat(Request $r){
    if(Sentinel::getUser()){
    }else{
      return 0;
    }

    $user_id = Sentinel::getUser()->id;
    $data['user_id'] = $user_id;
    $data['chat_messages'] = BdtdcChatMessages::where('chat_id',$r->chatid)->where('id','<',$r->firstchatid)->orderBy('id','desc')->get()->reverse();

    if(count($data['chat_messages']) > 0){
      // dd($data['chat_messages'][0]['id']);
      /*$return_array = ['scrollChatId'=>$data['chat_messages'][0]['id'],
                        'replace_data'=>view('fontend.BuyerChannel.get_chat_data',$data),
                      ];*/
      return view('frontend.chats.get_chat_data',$data);
      // return $return_array;
    }else{
      return 1;
    }

  }
}
