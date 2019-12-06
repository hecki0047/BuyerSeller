<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>BDTDC Chat Room</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link href="{!! asset('assets/fontend/bootstrap.min.css',is_secured()) !!}" media="all" rel="stylesheet" type="text/css" />
  <!-- Font Awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
<body>
<div class="container">
<button style="position:absolute;top:45%;left:30%;" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#loginModal">Please Sign In First</button>
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
		          <div id="login_error" style="padding-top:6px;display:none;"><h6 class="modal-title-bd text-center text-danger"><b>Please provide your credentials correctly</b></h6></div>
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
<script type="text/javascript" src="{!! asset('assets/fontend/jquery.min.js',is_secured()) !!}"></script>
<!-- Bootstrap 3.3.6 -->
<script type="text/javascript" src="{!! asset('assets/fontend/bootstrap.min.js',is_secured()) !!}"></script>
<script type="text/javascript">
$(document).ready(function(){
	function isValidateEmail(email)
    {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

	$('#loginModal').modal('show');
	$('#login_error').show();

	$(document).on({
        click: function(e) {
            e.preventDefault();
            base_url = window.location.origin;
            var login_url = base_url + '/sessions';
            var email_data = $('[name="email"]').val();
            var password_valid = true;
            if(isValidateEmail(email_data)){
            	$('#login_error').hide();
                $('#email_error').hide();
                $.ajax({
					  method: "POST",
					  url: login_url,
					  data: $('.login_form').serialize(),
					})
					.done(function(msg) {
						window.location.reload();
					})
					.fail(function() {
					    $('#login_error').show();
					});
            }else{
                $('#email_error').show();
            }
        }
    }, '.login_submit');

});
</script>
</body>
</html>