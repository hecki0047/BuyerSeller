<?php
use App\Models\ChatMessages;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>BuyerSeller Chat Room</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link href="{!! asset('assets/frontend/css/bootstrap.min.css',is_secured()) !!}" media="all" rel="stylesheet" type="text/css" />
  <!-- Font Awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link href="{!! asset('assets/frontend/css/AdminLTE.min.css',is_secured()) !!}" media="all" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!-- <link rel="stylesheet" href="https://almsaeedstudio.com/themes/AdminLTE/dist/css/skins/_all-skins.min.css"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div class="box box-primary direct-chat direct-chat-primary">
            <div class="box-header with-border">
              <h3 class="box-title">BuyerSeller Chat</h3>

              <div class="box-tools pull-right">
                <span title="" class="badge bg-light-blue" data-original-title="3 New Messages"></span>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool show_chat_pane" title="Contacts" data-widget="chat-pane-toggle">
                  <i class="fa fa-comments"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
                  <input type="hidden" name="uid" value="{{ $uid }}">
                  <input type="hidden" name="utype" value="{{ $utype }}">
                  <input type="hidden" name="chatid" value="{{ $chatid }}">
            </div>
            <!-- /.box-header -->
            <div class="box-body">



              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages chat_message_replace_area" style="min-height:300px;max-height:100%;">
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
                          if(trim($message->chat_sender_user->profile_picture) == ''){
                              echo URL::to('assets/frontend/images/uuploads/no_image.jpg');
                            }else{
                              echo URL::to('assets/frontend/images/uuploads',$message->chat_sender_user->profile_picture);
                            }
                          }else{
                            echo URL::to('assets/frontend/images/uploads/no_image.jpg');
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
                    <div class="direct-chat-msg"  data-cid="{{$message->id}}">
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
                          if(trim($message->chat_sender_user->profile_picture) == ''){
                              echo URL::to('assets/frontend/images/uuploads/no_image.jpg');
                            }else{
                              echo URL::to('assets/frontend/images/uuploads',$message->chat_sender_user->profile_picture);
                            }
                          }else{
                            echo URL::to('assets/frontend/images/uuploads/no_image.jpg');
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
                    <div class="direct-chat-msg right" style="height:300px;">
                      <p class="direct-chat-text">Your message starts here. Please Select contact first and write your message bellow...</p>
                    </div>
                    <!-- /.direct-chat-msg -->

                    <?php } ?>

                  </div>
              <!--/.direct-chat-messages-->



              <!-- Contacts are loaded here -->
              <div class="direct-chat-contacts" style="height:100%;">
                <ul class="contacts-list contact_replace_area">
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
                                    if(trim($chat->chat_receiver_user->profile_picture) == ''){
                                      echo URL::to('uploads/no_image.jpg');
                                    }else{
                                      echo URL::to('uploads',$chat->chat_receiver_user->profile_picture);
                                    }
                                  }else{
                                    echo URL::to('uploads/no_image.jpg');
                                  }
                                }else{
                                  if($chat->chat_sender_user){
                                    if(trim($chat->chat_sender_user->profile_picture) == ''){
                                      echo URL::to('uploads/no_image.jpg');
                                    }else{
                                      echo URL::to('uploads',$chat->chat_sender_user->profile_picture);
                                    }
                                  }else{
                                    echo URL::to('uploads/no_image.jpg');
                                  }
                                }
                                ?>" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                <?php
                                if($chat->sender_id == $user_id){
                                  if($chat->chat_receiver_user){
                                    echo $chat->chat_receiver_user->first_name.' '.$chat->chat_receiver_user->last_name;
                                  }else{
                                    echo "name not available";
                                  }
                                }else{
                                  if($chat->chat_sender_user){
                                    echo $chat->chat_sender_user->first_name.' '.$chat->chat_sender_user->last_name;
                                  }else{
                                    echo "name not available";
                                  }
                                }
                                ?>
                                  
                                <?php
                                $last_chat = BdtdcChatMessages::where('chat_id',$chat->id)->orderBy('id','desc')->first();
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
                    </ul>
                <!-- /.contatcts-list -->
              </div>
              <!-- /.direct-chat-pane -->



            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              {!! Form::open(array('url' => 'default/chat','method' => 'post')) !!}
                <div class="input-group">
                  <input type="text" maxlength="2000" name="message" placeholder="Type Message ..." class="form-control type_message">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-flat post_message">Send</button>
                      </span>
                </div>
              {!! Form::close() !!}
            </div>
            <!-- /.box-footer-->
          </div>

<!-- Login modal -->
<div class="container">
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content" style="box-shadow: 2px 5px 8px rgba(0,0,0,.25);">
         <form name="form" class="login_form" method="POST" action="http://bditdc.com/sessions">
        {{ csrf_field() }}
          <div class="modal-header" style="padding-top: 5px; padding-bottom: 0;">
              <button type="button" class="close" data-dismiss="modal" style="padding-left: 25px;">&times;</button>
              <h4 class="modal-title-bd">Sign in or Join Free now</h4>
              <ul class="nav nav-tabs" style="border-bottom: 0 none; margin-bottom: 1px;">
              <li class="sign-active"><a itemprop="url"  href="#sign-in" style="background-color: #fff !important; color: #666;" data-toggle="tab">Sign in to Bdtdc.com</a></li>
              <li><a itemprop="url"  href="{{ URL::to('join',null,is_secured()) }}" target="_blank">Join Bdtdc.com</a></li>
          </ul>
              <div id="login_error" style="padding-top:6px;display:none;"><h6 class="modal-title-bd text-center text-danger"><b>Invalid credentials provided</b></h6></div>
              <div id="email_error" style="padding-top:6px;display:none;"><h6 class="modal-title-bd text-center text-danger"><b>Invalid Email Address</b></h6></div>
          </div>
        <div class="tab-content">
         <div class="tab-pane fade in active" id="sign-in" >
          <div class="modal-body" id="sign_form-bdtdc">
                <div class="form-group">
                  <label style="font-size: 13px; color: #666;">Account:</label>
                  <input placeholder="Email" class="form-control text-flm" required="required" name="email" type="email" autofocus="">
                </div>
                <div class="form-group">
                  <label  style="font-size: 13px; color: #666;">Password:</label>
                  <label style="font-size: 13px; color: #666; float: right;">Forgot Password?</label>
                  <input placeholder="Password" class="form-control text-flm" required="required" name="password" type="password">
                </div>
          </div>
          <div class="modal-footer" style="border: 0 none; text-align: center; padding-bottom: 40px;">
             <!--  <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button> -->
             
             <button type="submit" class="btn-lg btn btn-success login_submit" style="width: 310px; border-radius: 3px !important; height: 30px; padding: 4px 16px; font-size: 14px;">Submit</button>  
          </div>
        </div>
       </div>
        </form>
      </div>
    </div>
  </div>
  </div>

<!-- jQuery 2.2.3 -->
<script type="text/javascript" src="{!! asset('assets/frontend/js/jquery.min.js',is_secured()) !!}"></script>
<!-- Bootstrap 3.3.6 -->
<script type="text/javascript" src="{!! asset('assets/frontend/js/bootstrap.min.js',is_secured()) !!}"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="{!! asset('assets/frontend/js/app.min.js',is_secured()) !!}"></script>
<!-- <script src="https://almsaeedstudio.com/themes/AdminLTE/dist/js/app.min.js"></script> -->
<script type="text/javascript">
	$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on({
        click: function(e) {
            e.preventDefault();
            base_url = window.location.origin;
            var login_url = base_url + '/sessions';
            var query_url = base_url + '/user/upgrade/'+form_id;
            var email_data = $('[name="email"]').val();
            var password_valid = true;
            if(isValidateEmail(email_data)){
                $('#email_error').hide();
                $.post(login_url, $('.login_form').serialize(), function(result) {
                  window.location.href = query_url;
                /*$.post(query_url, $('.testform').serialize(), function(r) {
                    if(parseInt(r) == 1){window.location.href = base_url+'/success';}
                    if(parseInt(r) == 0) { $('#login_error').show();}
                    if(parseInt(r) !=1 && parseInt(r) !=0){ alert("Fail!!, Query Could Not Sent");}
                });*/
            });
            }else{
                $('#email_error').show();
            }
        }
    }, '.login_submit');

    function get_chat_data(chatid){
      $('.chat_message_replace_area').html('<div style="text-align: center;margin-top: 100px;"><img src="'+window.location.origin+'/assets/frontend/images/chat-loader.gif"></div>');
      var token = $('[name="_token"]').val();
      var url = window.location.origin+'/default/get-chat-data';
      $.post(url,{
        '_token':token,
        'chatid':chatid,
      },function(result){
        if(parseInt(result) == 0){
          alert ('Please Log in first.');
          window.location.href = window.location.origin+'/login';
        }else if($.trim(result) == ''){
          $('.chat_message_replace_area').html('<p>No message to show</p>');
        }else{
          $('.chat_message_replace_area').html(result);
          $('.chat_message_replace_area').animate({scrollTop: 1000000},'slow');
        }
      });
    }

    function get_chat_data_one(chatid){
      var token = $('[name="_token"]').val();
      var url = window.location.origin+'/default/get-chat-data';
      $.post(url,{
        '_token':token,
        'chatid':chatid,
      },function(result){
        if(parseInt(result) == 0){
          alert ('Please Log in first.');
          window.location.href = window.location.origin+'/login';
        }else if($.trim(result) == ''){
          $('.chat_message_replace_area').html('<p>No message to show</p>');
        }else{
          $('.chat_message_replace_area').html(result);
        }
      });
    }

    function get_contact_data(){
      var token = $('[name="_token"]').val();
      var url = window.location.origin+'/default/get-contact-data';
      $.post(url,{
        '_token':token,
      },function(result){
        if(parseInt(result) == 0){
          alert ('Please Log in first.');
          window.location.href = window.location.origin+'/login';
        }else if($.trim(result) == ''){
          $('.contact_replace_area').html('<p>No contact to show</p>');
        }else{
          $('.contact_replace_area').html(result);
        }
      });
    }
    // get_contact_data();
    $(document).on({click:function(e){
      get_contact_data();
    }},'.show_chat_pane');

    var click_type = "<?php echo $click_type; ?>";
    if(click_type == 'default'){
      $('.show_chat_pane').click();
    }else{}

    /*$(document).on({keyup:function(){
      var details = $(this).val();
      var string_test = ['website','www','http','https','link','url','e-mail','email','mail','phone','mobile','skype','facebook','imo','whatsapp','twitter','id','payment','LinkedIn','call','contact','viber','fb','pay'];
      var validated = true;
      if(validated == true){
            var found_str = '';
            string_test.forEach(function(entry) {
            var patt = new RegExp(entry,"i");
            var res = patt.test(details);
            if(res){
              found_str += entry+', ';
              validated = false;
            }
        });

        if(validated == true){
          var email_patt = /\S+@\S+\.\S+/;
            var mail_check_result = details.match(email_patt);
            if(mail_check_result){
              alert ('You should not share your email address '+mail_check_result+'. This is prohibited by authority.');
            }else{
              var website_patt = /\S[^0-9]+\.\S[^0-9]+/;
              var website_result = details.match(website_patt);
              if(website_result){
                alert ('Your '+website_result+' is suspicious. Please use sapce after . sign');
              }else{
                var at_res = (/@/).test(details);
                if(at_res){
                  alert ('Your @ is suspicious. Please remove this character. Sharing email, social link or account, url, website and phone number is prohibited by authority.');
                }else{
                  var details_ph = 'test '+details;
                  var plus_res = details.match(/\++\d+/); //for +99999
                  var plus_res_s = details_ph.match(/\++\s+\d+/); //for + 99999
                  var doublez_res = details_ph.match(/[^0-9.]00+\d+/); //for 0099999
                  var sz_res = details_ph.match(/[^0-9.]0+\d+/); //for 099999
                  var doublez_res_s = details_ph.match(/[^0-9.]00+\s+\d+/); //for 00 99999
                  var sz_res_s = details.match(/[^0-9.]0+\s+\d+/); //for 0 99999
                  // var plus_res = details.match(/\b\+/);
                  if(plus_res){
                    alert ('Your '+plus_res+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                  }else if(plus_res_s){
                    alert ('Your '+plus_res_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                  }else if(doublez_res){
                    alert ('Your '+doublez_res+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                  }else if(doublez_res_s){
                    alert ('Your '+doublez_res_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                  }else if(sz_res){
                    alert ('Your '+sz_res+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                  }else if(sz_res_s){
                    alert ('Your '+sz_res_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                  }else{
                    var min_six = details.match(/\d{6,}/);
                    var min_six_s = details.match(/\d+\S[^0-9.]+\d+/);
                    var min_two_ad = details.match(/\.\d{3,}/);
                    if(min_six){
                      alert ('Your '+min_six+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                    }else if(min_six_s){
                      alert ('Your '+min_six_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                    }else if(min_two_ad){
                      alert ('Your '+min_two_ad+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                    }else{

                    }
                  }
                }
              }
            }
        }else{
          alert (found_str+ 'has been found on your details. Sharing email, social link or account, url, website and phone number is prohibited by authority.');
        }
      }

    }},'.type_message');*/

    $(document).on({click:function(e){
      e.preventDefault();
      var message = $.trim($('[name="message"]').val());
      var uid = $('[name="uid"]').val();
      var utype = $('[name="utype"]').val();
      var chatid = $('[name="chatid"]').val();
      var token = $('[name="_token"]').val();
      var url = window.location.origin+'/default/chat';
      if(parseInt(uid) == 0 || parseInt(chatid) == 0 || utype == ''){
        alert ('Please select a contact from your contact list');
      }else{
        if(message == ''){
          alert ('Type messages what you want to send.');
        }else{
          var details = message;
          $.post(url,{
            '_token':token,
            'uid':uid,
            'utype':utype,
            'message':message,
            'chatid':chatid,
          },function(result){
            if(parseInt(result) == 0){
              alert ('Please Log in first.');
              window.location.href = window.location.origin+'/login';
            }else if(parseInt(result.id) > 0){
              $('[name="message"]').val('');
              $('[name="message"]').focus();
              // get_chat_data_one(chatid);
              // get_contact_data();
            }else{
              alert (JSON.stringify(result));
            }
            
          });

          /*var string_test = ['website','www','http','https','link','url','e-mail','email','mail','phone','mobile','skype','facebook','imo','whatsapp','twitter','id','payment','LinkedIn','call','contact','viber','fb','pay'];
          var validated = true;
          if(validated == true){
                var found_str = '';
                string_test.forEach(function(entry) {
                var patt = new RegExp(entry,"i");
                var res = patt.test(details);
                if(res){
                  found_str += entry+', ';
                  validated = false;
                }
            });

            if(validated == true){
              var email_patt = /\S+@\S+\.\S+/;
                var mail_check_result = details.match(email_patt);
                if(mail_check_result){
                  alert ('You should not share your email address '+mail_check_result+'. This is prohibited by authority.');
                }else{
                  var website_patt = /\S[^0-9]+\.\S[^0-9]+/;
                  var website_result = details.match(website_patt);
                  if(website_result){
                    alert ('Your '+website_result+' is suspicious. Please use sapce after . sign');
                  }else{
                    var at_res = (/@/).test(details);
                    if(at_res){
                      alert ('Your @ is suspicious. Please remove this character. Sharing email, social link or account, url, website and phone number is prohibited by authority.');
                    }else{
                      var details_ph = 'test '+details;
                      var plus_res = details.match(/\++\d+/); //for +99999
                      var plus_res_s = details_ph.match(/\++\s+\d+/); //for + 99999
                      var doublez_res = details_ph.match(/[^0-9.]00+\d+/); //for 0099999
                      var sz_res = details_ph.match(/[^0-9.]0+\d+/); //for 099999
                      var doublez_res_s = details_ph.match(/[^0-9.]00+\s+\d+/); //for 00 99999
                      var sz_res_s = details.match(/[^0-9.]0+\s+\d+/); //for 0 99999
                      // var plus_res = details.match(/\b\+/);
                      if(plus_res){
                        alert ('Your '+plus_res+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                      }else if(plus_res_s){
                        alert ('Your '+plus_res_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                      }else if(doublez_res){
                        alert ('Your '+doublez_res+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                      }else if(doublez_res_s){
                        alert ('Your '+doublez_res_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                      }else if(sz_res){
                        alert ('Your '+sz_res+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                      }else if(sz_res_s){
                        alert ('Your '+sz_res_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                      }else{
                        var min_six = details.match(/\d{6,}/);
                        var min_six_s = details.match(/\d+\S[^0-9.]+\d+/);
                        var min_two_ad = details.match(/\.\d{3,}/);
                        if(min_six){
                          alert ('Your '+min_six+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                        }else if(min_six_s){
                          alert ('Your '+min_six_s+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                        }else if(min_two_ad){
                          alert ('Your '+min_two_ad+' is suspicious. Sharing phone number, social link or account, url, website and email is prohibited by authority.');
                        }else{
                          $.post(url,{
                            '_token':token,
                            'uid':uid,
                            'utype':utype,
                            'message':message,
                            'chatid':chatid,
                          },function(result){
                            if(parseInt(result) == 0){
                              alert ('Please Log in first.');
                              window.location.href = window.location.origin+'/login';
                            }else if(parseInt(result.id) > 0){
                              $('[name="message"]').val('');
                              $('[name="message"]').focus();
                              // get_chat_data_one(chatid);
                              // get_contact_data();
                            }else{
                              alert (JSON.stringify(result));
                            }
                            
                          });
                        }
                      }
                    }
                  }
                }
            }else{
              alert (found_str+ 'has been found on your details. Sharing email, social link or account, url, website and phone number is prohibited by authority.');
            }
          }*/
          
        }
      }
    }},'.post_message');

    function liveChat(){
      var prev_chatid = $('[name="chatid"]').val();
      var uid = $('[name="uid"]').val();
      $.ajax({
        url:'{{url("default/ajax-chat-data")}}',
        type:'post',
        data:{_token:'{{csrf_token()}}',chatid:prev_chatid,sid:uid},
        success:function(data)
        {
          if(parseInt(data) == 0){
            alert ('Please Log in first.');
            window.location.href = window.location.origin+'/login';
          }else{
            var crr_chatid = $('[name="chatid"]').val();
            if(prev_chatid == crr_chatid){
              $('.chat_message_replace_area').append(data);
              $('.chat_message_replace_area').animate({scrollTop: 10000000},'fast');
              get_contact_data();
              setTimeout(liveChat, 1000);
            }else{
              // document.execCommand("Stop");
              setTimeout(liveChat, 1000);
            }
            
          }
          
        },
        error:function()
        {
          // setTimeout(liveChat, 5000);
        }
      });
    }

    if(parseInt($('[name="chatid"]').val()) > 0){
      liveChat();
    }

    $(document).on({click:function(e){
      e.preventDefault();
      try {
          window.stop();
      } catch (exception) {
          window.document.execCommand('Stop');
      }
      // window.stop();
      // document.execCommand("Stop");
      var chatid = $(this).attr('data-chatid');
      var uid = $(this).attr('data-uid');
      var utype = $(this).attr('data-type');
      $('[name="uid"]').val(uid);
      $('[name="utype"]').val(utype);
      $('[name="chatid"]').val(chatid);
      $('[name="message"]').val('');
      $('.show_chat_pane').click();
      $('[name="message"]').focus();
      get_chat_data(chatid);
      liveChat();
    }},'.chat_contact_select');

    // var scrollChatId = $('.chat_message_replace_area div.direct-chat-msg:first-child').attr('data-cid');

    $('.chat_message_replace_area').on('DOMMouseScroll mousewheel',function(event){
      if( event.originalEvent.detail > 0 || event.originalEvent.wheelDelta < 0 ) { //alternative options for wheelData: wheelDeltaX & wheelDeltaY
        //scroll down
        // console.log('Down');
      }else{
        //scroll up
        console.log('Up');
        st = $(this).scrollTop();
        if(parseInt(st) == 0){
          // $('.chat_message_replace_area').off('mousewheel');
          // $('.chat_message_replace_area').off('DOMMouseScroll');
          var firstchatid = $('.chat_message_replace_area div.direct-chat-msg:first-child').attr('data-cid');
          // scrollChatId = $('.chat_message_replace_area div.direct-chat-msg:first-child').attr('data-cid');
          var chatid = $('[name="chatid"]').val();
          var token = $('[name="_token"]').val();
          var url = window.location.origin+'/default/get-scrolled-chat';
          var uid = $('[name="uid"]').val();
          // if(scrollChatId == null || uid == 0){}else{
          if(firstchatid == null || uid == 0){}else{
            /*$(document).queue("myQueueName", function(){
             $.post(url,{
              '_token':token,
              'uid':uid,
              'chatid':chatid,
              'firstchatid':firstchatid,
            },function(result){
              if(parseInt(result) == 0){
                alert ('Please Log in first.');
                window.location.href = window.location.origin+'/login';
              }else if(parseInt(result) == 1){
                alert ('No more message to show');
              }else{
                $('.chat_message_replace_area').prepend(result);
                $(document).dequeue("myQueueName");
              }
            });
           });*/
            $.post(url,{
              '_token':token,
              'uid':uid,
              'chatid':chatid,
              'firstchatid':firstchatid,
              // 'firstchatid':scrollChatId,
            },function(result){
              if(parseInt(result) == 0){
                alert ('Please Log in first.');
                window.location.href = window.location.origin+'/login';
              }else if(parseInt(result) == 1){
                // alert ('No more message to show');
                $('.chat_message_replace_area').prepend('<p>No more message to show</p>');
              }else{
                $('.chat_message_replace_area').prepend(result);
                $('.chat_message_replace_area').animate({
                    scrollTop: $('[data-cid="'+firstchatid+'"]').offset().top
                }, 0);
                /*$('.chat_message_replace_area').animate({
                    scrollTop: $('[data-cid="'+scrollChatId+'"]').offset().top
                }, 0);*/
                // $('.chat_message_replace_area').on('mousewheel');
                // $('.chat_message_replace_area').on('DOMMouseScroll');
                // $('.chat_message_replace_area').off('mousewheel', true);
                // $('.chat_message_replace_area').off('DOMMouseScroll', true);
              }
            });
          }
        }
      }
      //prevent page fom scrolling
      // return false;
    });

    /*$('.chat_message_replace_area').bind('mousewheel', function(event) {
        st = $(this).scrollTop();
        console.log(st);
    });*/
    // liveChat();
    
    /*setInterval(function(){
      var uid = $('[name="uid"]').val();
      var utype = $('[name="utype"]').val();
      var chatid = $('[name="chatid"]').val();
      if(parseInt(uid) == 0 || parseInt(chatid) == 0 || utype == ''){}else{
        get_chat_data_one(chatid);
        get_contact_data();
      }
    }, 2000);*/
		
	});
</script>
</body>
</html>