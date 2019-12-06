@extends('fontend.master4')
@section('content')
    <div class="row padding_0" style="background-color:#fff;">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-9">
                  <h3 class="confirm-msg">A confirmation email has been  sent to your mailbox <span style="color: #19446F;">info@buyerseller.asia</span></h3>  
                  <p class="check-msg">Please sign into your email and click on the verification link within 24 hours to complete your registration.</p>
            </div>
    </div>
    <div class="row padding_0" style="background-color:#fff; padding-bottom:5%;">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-9">
                    
                    <div class="col-sm-6" style="margin-left:-15px;">
                    <div id="spam-msg" onMouseOver="show_sidebar()">
                        I have not received the email
                        </div>
                        
                            <ul id="spam-msg-list"  onMouseOver="show_sidebar()" onMouseOut="hide_sidebar()" >
                                    <li>Please check your spam folder <br>If you have not received the email</li>
                                    <li><a href="#"><span class="mouse-click">click here to resend email</span></a></li>
                                    <li style="padding-top:20px;">Have not recieved ? <a href="#">Try using another email address</a></li>
                            </ul>
                    </div>
            </div>
    </div>


@stop
@section('scripts')
<script type="text/javascript">
function show_sidebar()
{
document.getElementById('spam-msg-list').style.display="block";
}

function hide_sidebar()
{
document.getElementById('spam-msg-list').style.display="none";
}


</script>

@stop