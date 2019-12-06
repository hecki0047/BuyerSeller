<?php
use App\Models\ChatMessages;
?>

@foreach($chat_list as $chat)
                      <li>
                        <a class="chat_contact_select" href="#" data-chatid="{{$chat->id}}" <?php
                                if($chat->sender_id == $user_id){
                                  if($chat->chat_receiver_user){
                                    echo 'data-uid="'.$chat->receiver_id.'" data-type="receiver"';
                                  }else{
                                    echo 'data-uid="0" data-type="receiver"';
                                  }
                                }else{
                                  if($chat->chat_sender_user){
                                    echo 'data-uid="'.$chat->sender_id.'" data-type="sender"';
                                  }else{
                                    echo 'data-uid="0" data-type="sender"';
                                  }
                                }
                                ?>>
                          <img class="contacts-list-img" src="<?php
                                if($chat->sender_id == $user_id){
                                  if($chat->chat_receiver_user){
                                    $role = App\Models\Role_user::where('user_id',$chat->chat_receiver_user->id)->first();
                                    if($role->role_id ==2){
                                      echo URL::to('assets/frontend/images/logo.png');
                                    }else{
                                      if(trim($chat->chat_receiver_user->profile_picture) == ''){
                                        echo URL::to('assets/frontend/images/uploads/no_image.jpg');
                                      }else{
                                        echo URL::to('uploads',$chat->chat_receiver_user->profile_picture);
                                      }
                                    } 
                                  }else{
                                    echo URL::to('uploads/no_image.jpg');
                                  }
                                }else{
                                  if($chat->chat_sender_user){
                                    $role = App\Models\Role_user::where('user_id',$chat->chat_sender_user->id)->first();
                                    if($role->role_id ==2){
                                      echo URL::to('assets/logo.png');
                                    }else{
                                      if(trim($chat->chat_sender_user->profile_picture) == ''){
                                        echo URL::to('assets/frontend/images/uploads/no_image.jpg');
                                      }else{
                                        echo URL::to('uploads',$chat->chat_sender_user->profile_picture);
                                      }
                                    }
                                  }else{
                                    echo URL::to('assets/frontend/images/uploads/no_image.jpg');
                                  }
                                }
                                ?>" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                <?php
                                $user_sender = 1;
                                    
                                  
                                
                                if($chat->sender_id == $user_id){
                                  if($chat->chat_receiver_user){
                                    echo $chat->chat_receiver_user->first_name.' '.$chat->chat_receiver_user->last_name;
                                    if (Sentinel::check()){
                                      $role = App\Models\Role_user::where('user_id',$chat->chat_receiver_user->id)->first();
                                      if($role->role_id ==2){
                                        echo ' ('.$chat->chat_receiver_user->email.')';
                                      }
                                    }
                                  }else{
                                    echo "name not available";
                                  }
                                }else{
                                	$user_sender = 2;
                                  if($chat->chat_sender_user){
                                    echo $chat->chat_sender_user->first_name.' '.$chat->chat_sender_user->last_name;
                                    if (Sentinel::check()){
                                      $role = App\Models\Role_user::where('user_id',$chat->chat_sender_user->id)->first();
                                      if($role->role_id ==2){
                                        echo ' ('.$chat->chat_sender_user->email.')';
                                      }
                                    }
                                  }else{
                                    echo "name not available";
                                  }
                                }
                                ?>
                                  
                                <?php
                                $last_chat = ChatMessages::where('chat_id',$chat->id)->orderBy('id','desc')->first();
                                	$receiver_id_data = isset($last_chat->receiver_id)?$last_chat->sender_id:0;
                                	// $sender_view_data = isset($last_chat->sender_view)?$last_chat->sender_view:2;
                                	$receiver_view_data = isset($last_chat->receiver_view)?$last_chat->receiver_view:2;
                                ?>

                                <?php
                                if($receiver_id_data == $user_id){
                                	
                                }else{
                                	if($receiver_view_data == 0){ ?>
                                		<small> <i class="fa fa-circle" style="color:red;font-size:8px;margin-left:5px;" aria-hidden="true"></i></small>
                                	<?php }else{

                                	}
                                }
                                ?>

                                  <small class="contacts-list-date pull-right"><?php
                                  if(isset($last_chat->created_at)){
                                    echo date("d-m-Y g:i a", strtotime($last_chat->created_at));
                                  }else{
                                    echo date("d-m-Y g:i a", strtotime($chat->created_at));
                                  }
                                  ?></small>
                                </span>
                                
                            <span class="contacts-list-msg">
                            @if($last_chat)
                              {{$last_chat->message}}
                            @endif
                            </span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                      @endforeach