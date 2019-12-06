<?php if(count($chat_messages) > 0){
                foreach($chat_messages as $message){
                  if($message->sender_id == $user_id) { ?>
                    <div class="direct-chat-msg right" data-cid="{{$message->id}}">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-right"><?php if($message->chat_sender_user){
                          echo $message->chat_sender_user->first_name.' '.$message->chat_sender_user->last_name;
                        }else{
                          echo "name not available";
                        } ?></span>
                        <span class="direct-chat-timestamp pull-left"><?php echo date("d-m-Y g:i a", strtotime($message->created_at)); ?></span>
                      </div>
                      <img class="direct-chat-img" src="<?php
                        if($message->chat_sender_user){
                          $role = App\Models\Role_user::where('user_id',$message->chat_sender_user->id)->first();
                          if($role->role_id ==2){
                            echo URL::to('assets/logo.png');
                          }else{
                            if(trim($message->chat_sender_user->profile_picture) == ''){
                              echo URL::to('uploads/no_image.jpg');
                            }else{
                              echo URL::to('uploads',$message->chat_sender_user->profile_picture);
                            }
                          }
                          }else{
                            echo URL::to('uploads/no_image.jpg');
                          }
                      ?>" alt="message user image">
                      <div class="direct-chat-text" style="text-align: right;">
                        <?php echo $message->message; ?>
                      </div>
                      @if(trim($message->attachment) != '')
                      <div class="direct-chat-text" style="text-align: right;">
                        <?php echo URL::to('attachment',$message->attachment); ?>
                      </div>
                      @endif
                    </div>
                  <?php } else{ ?>
                    <div class="direct-chat-msg" data-cid="{{$message->id}}">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left"><?php if($message->chat_sender_user){
                          echo $message->chat_sender_user->first_name.' '.$message->chat_sender_user->last_name;
                        }else{
                          echo "name not available";
                        } ?></span>
                        <span class="direct-chat-timestamp pull-right"><?php echo date("d-m-Y g:i a", strtotime($message->created_at)); ?></span>
                      </div>
                      <img class="direct-chat-img" src="<?php
                        if($message->chat_sender_user){
                          $role = App\Models\Role_user::where('user_id',$message->chat_sender_user->id)->first();
                          if($role->role_id ==2){
                            echo URL::to('assets/frontend/images/logo.png');
                          }else{
                            if(trim($message->chat_sender_user->profile_picture) == ''){
                              echo URL::to('assets/frontend/images/uploads/no_image.jpg');
                            }else{
                              echo URL::to('uploads',$message->chat_sender_user->profile_picture);
                            }
                          }
                          }else{
                            echo URL::to('assets/frontend/images/uploads/no_image.jpg');
                          }
                      ?>" alt="message user image">
                      <div class="direct-chat-text">
                        <?php echo $message->message; ?>
                      </div>
                      @if(trim($message->attachment) != '')
                      <div class="direct-chat-text">
                        <?php echo URL::to('attachment',$message->attachment); ?>
                      </div>
                      @endif
                    </div>
                  <?php }
                  }
              }else{ ?> 
                    <!-- Message. Default to the left -->
                    <div style="height:280px;">
                    	<p class="bg-primary" style="padding: 5px 10px;border: 1px solid #d2d6de;    border-radius: 5px;">Your message starts here. Please write your message bellow...</p>
                    </div>
                    <!-- /.direct-chat-msg -->

                    <?php } ?>