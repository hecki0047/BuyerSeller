@extends('mobile-view.layout.master_m')
@section('content')
<style type="text/css">
  .remove_img{
    position:absolute;
    right: -4px;
    top: 4px;
    cursor: pointer;
  }
  .remove_img:hover{
    color:red;
  }
  .dlt-itm:hover{
    color:red;
  }
  .alert-danger{
    color: #a94442;
  }
  .em-in{
   
    float: left; 
    display: block;
    overflow: hidden;
     padding: 0;
     margin: 0;
}
</style>
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
 <section>
    <div class="container">
    <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
            <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('ServiceChannel/pages/for_new_user',38,is_secured())}}" class="top-path-li-a"><span itemprop="name">For Buyers</span><i class="fa fa-angle-right top-path-icon"></i></a></li> 
             <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Order With Buyer Protection</span><i class="fa fa-angle-right top-path-icon"></i></a></li>  
        </ul>
    </div>    
</div>
<div class="row padding_0" style="background-color: #fff; padding-bottom: 5%; margin-bottom: 20px;">
	<!-- <div class="col-sm-12 col-md-12">
    <div class="ui2-step bao-step">
        <ul class="ui2-step-5">
                 <li class="ui2-step-curr">
             <span> Place Order</span><i class="" aria-hidden="true" style="color: #255E98;font-size: 36px;position: absolute;top: 11px; left: 19%;"></i>
                 </li>
                <li class="ui2-step-undone">
            <span>Supplier Confirmation </span>
            
            </li>
            <li class="ui2-step-undone">
            <span>Payment</span>
            </li>
            <li class="ui2-step-undone">
               <span>Shipment</span>
            </li>
            <li class="ui2-step-undone last">
            <span>Confirm and Review</span>
            </li>
        </ul>
    </div>  
  </div> -->
	<div class="col-sm-12 col-md-12">
				<div class="trade-buy-box" style="width: 100%; padding-left:30px;">
							<h3 class="td-hed"><img itemprop="image"  style="height:30px;" src="{!! asset('assets/gold/Buyer-protect.jpg',is_secured()) !!}" alt="buyer protect"> Buyer Protection - Get Full Protection for Your Order. <span style="font-size: 13px;padding-left:4%;font-weight: normal;cursor: pointer;"><a href="{{URL::to('BuyerChannel/pages/trade_assurance',5)}}">Learn More  ></a></span> <i class="fa fa-times" aria-hidden="true" id="trade-close" style=" font-size: 24px !important;font-weight: normal;color: #CCC;float: right;display: block; cursor: pointer;line-height: 24px;"></i></h3>
							<ul style="padding:0; padding-left: 20px;">
								<li class="potection-list">
											<span class="buyer-notice-sort" style=" border-radius: 12px !important; left: 30px; ">
												1
											</span> 
							
										<p class="bdr-leangth" style="width: 100%; font-size: 16px; float: left;text-align:left; padding-left: 6%; color: #000;"><i class="fa fa-file-text-o" aria-hidden="true" style="font-size: 26px; color: #666;"></i><span style="padding-left: 10px;">Complete this form</span></p>
									<p style="width: 100%; font-size: 13px; float: left;text-align:left; padding-left: 6%;">Complete the form below to start order first, and then confirm your order online with Buyer Protection.</p>
								</li>
								<li class="potection-list">
										<span class="buyer-notice-sort" style=" border-radius: 12px !important; left: 30px;  ">
												2
											</span> 
								
									<p style="width: 100%; font-size: 14px; float: left;text-align:left; padding-left: 6%; color: #000;"><i class="fa fa-usd" aria-hidden="true"  style="font-size: 26px; color: #666;"></i><span style="padding-left: 10px;">Make a payment</span></p>
									<p style="width: 100%; font-size: 13px; float: left;text-align:left; padding-left: 6%;">Pay to the supplier’s Citybank account designated by Bdtdc.com with credit card or bank transfer.</p>
								</li>
								<li class="potection-list">
										<span class="buyer-notice-sort" style=" border-radius: 12px !important; left: 30px;  ">
												3
											</span> 
								
									<p style="width: 100%; font-size: 16px; float: left;text-align:left; padding-left: 6%; color: #000;"><img itemprop="image"  class="" style="height: 26px; width: 26px; float: left;" src="{!! asset('assets/gold/get_protection.png') !!}" alt="get protection"><span style="padding-left: 10px;">Get full protection</span></p>
									<p style="width: 100%; font-size: 13px; float: left;text-align:left; padding-left: 6%;">If there is any issue about the on-time shipment or product quality, Bdtdc.com will refund the covered amount of your payment .</p>
								</li>
								<li>
								<p style="margin-top: 4%;"><a href="{{URL::to('BuyerChannel/pages/trade_assurance',5)}}" style="padding-left: 16px; color: #1686CC; padding-left: 5%; padding-top: 10px;">Buyer Protection ></a></p>
								</li>
							</ul>
				</div>

	</div>    
		<div class="col-sm-12 col-md-12" style="margin-bottom: 30px; padding-bottom: 30px;">
  				<p class="td-em-head" style="padding-left: 30px;">Please enter your supplier’s email address</p>
  			</div>  
  			<div class="col-sm-12 col-md-12">
  		
				
				<div class="member-email-box" style="width: 100%; margin-top: 0; height:180px;">
					<div class="email-box" style="width: 100% !important; padding-top: 30px; padding-left: 30px; height: 160px;"> 
						<div class="form-group"  id="" style="width: 100%;">
							<div class="col-xs-12">
							<label style="display: block; float: left; margin-right: 10px;">
							<span style="color: red; font-size: 14px;">*</span>
							Supplier Email:
							</label>
							</div>
							<div class="col-xs-12">													 
							    <input type="email" name="supplier_email" class="form-control error_control" style="height: 30px;" id="email_check">
                                <p class="email_error show_error text-danger">Please enter the Supplier Email.</p>
                                <p class="email_check text-danger">Please enter a valid Email address.</p>
                                <p class="backend_email_check text-danger" style="display:none;">Supplier not found. Please try another suppliers email.</p>
							</div>
						</div>
						<div class="col-xs-12" style="margin-top: 20px;">
						<div style="width: 100px; float: left;">
				          <button class="btn btn-default btn-sm" style="margin-top:4%; float: left;" type="button" id="submit_email">Submit</button> 
				         </div>
				          <div style="width: 100px; margin-left: 30px; float: left;">
							 <a class="btn btn-default btn-sm" style="margin-top:4%;display:none;" href="{{URL::to('order-protect')}}" id="change_email">Change</a>
						</div>
				       </div>
						
					</div>
					
				</div>
				
			
		  
  			</div>
        <div class="col-sm-12 col-md-12">
        <div class="member-email-box replace_area" style="min-height: 130px; width: 100%;">
          <p style="margin-top: 40px;" class="drag-p">No Supplier Selected</p>
        </div>
        </div>
    	<!-- <div id="succ-msg-box">
        <h4 style="font-size: 13px; color:green;padding: 20px 5px;">Your Record submit is processing successfully</h4>
      </div> -->
  </div>
</div>
</section>
 @stop
 @section('scripts')
<script type="text/javascript">

$('.show_error').hide();
$('.checkbox_error').hide();
$('.email_check').hide();

$(document).ready(function(){
    $("#trade-close").click(function(){
        $(".trade-buy-box").hide();
    });
});

$(document).on({'keyup blur paste':function(){
  $('.backend_email_check').hide();
  if($.trim($(this).val()) == ''){
    $(this).parent().children('.show_error').show();
  }else{
    $(this).parent().children('.show_error').hide();
  }
}},'.error_control');

$(document).on({click:function(e){
    if ($('.checkbox_check').prop('checked') == true){
        $('.checkbox_error').hide();
    }else{
        $('.checkbox_check').focus();
        $('.checkbox_error').show();
    }
}},'.checkbox_check');

$(document).on({keyup:function(event){
    // Allow: backspace, delete, tab, escape, and enter
      if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
              // Allow: Ctrl+V
              (event.ctrlKey == true && (event.which == '118' || event.which == '86')) ||  
              // Allow: Ctrl+c
              (event.ctrlKey == true && (event.which == '99' || event.which == '67')) || 
              // Allow: Ctrl+A
          (event.keyCode == 65 && event.ctrlKey === true) || 
           // Allow: home, end, left, right
          (event.keyCode >= 35 && event.keyCode <= 39)) {
               // let it happen, don't do anything
               return;
      }

  var currentEl = $(this);
  var value = $(currentEl).val();

  // remove letters...
  value = value.replace(/[^0-9.-]/g, "");

  var hasDecPlace = value.match(/\./);

  // separate integer from decimal places:
  var pieces = value.split('.');
  var integer = pieces[0].replace('-', '');
  var decPlaces = ""
  if (pieces.length > 1)
  {
    pieces.shift();
    decPlaces = pieces.join('').replace('-', '');
  }

  // handle numbers greater than 12.00... :
  if (parseInt(integer) > 100000 || parseInt(integer) === 100000 && parseInt(decPlaces) > 0)
  {
    integer = "100000";
    decPlaces = getZeroedDecPlaces(decPlaces);
    alert("number must be between 0.00 and 100000.00");
  } // ...and less than 0:
  else if (parseInt(integer) < 0)
  {
    integer = "0";
    decPlaces = getZeroedDecPlaces(decPlaces);
    alert("number must be between 0.00 and 100000.00");
  }

  // handle more than two decimal places:
  if (decPlaces.length > 2)
  {
    decPlaces = decPlaces.substr(0, 2);
    alert("number cannot have more than two decimal places");
  }

  var newVal = hasDecPlace ? integer + '.' + decPlaces : integer;

  $(currentEl).val(newVal);
}},'.check_number');

function getZeroedDecPlaces(decPlaces) {
  if (decPlaces === '') return '';
  else if (decPlaces.length === 1) return '0';
  else if (decPlaces.length >= 2) return '00';
}

function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}

$(document).on({'keyup blur paste':function(){
  $('.backend_email_check').hide();
  if($.trim($(this).val()) != ''){
    if(validateEmail($(this).val())){
      $('.email_check').hide();
    }else{
      $('.email_check').show();
    }
  }else{
    $('.email_check').hide();
  }
}},'#email_check');

$(document).on({click:function(e){
  e.preventDefault();
  $('.backend_email_check').hide();
  var email = $('#email_check').val();
  if($.trim(email) != ''){
    if(validateEmail(email)){
      $('.email_check').hide();
      myFunction(email);
    }else{
      $('.email_check').show();
    }
  }else{
    $('.email_check').show();
  }
}},'#submit_email');

function myFunction(email)
{
  $('.email_check').hide();
  $('.backend_email_check').hide();
  var base_url = "{{URL::to('/')}}";
  var lodar_img = "{{URL::to('uploads/page-loader.gif')}}";
  $('.replace_area').html('<p style="margin-top: 26px;" class="drag-p"><img style="width: 40px;" src="'+lodar_img+'" alt=""></p>');
  $.post(base_url+"/get-supplier/"+email,{
    '_token':'{{csrf_token()}}'
  }, function(result){
      if(result[0] == 0){
        $('.replace_area').html('<p style="margin-top: 40px;" class="drag-p text-danger">Supplier not found. Please try another suppliers email.</p>');
        $('.backend_email_check').text(result[1]);
        $('.backend_email_check').show();
      }else{
        $('.backend_email_check').hide();
        $('#change_email').show();
        $('.replace_area').html(result);
      }
  });
}

document.getElementById("email_check")
    .addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode == 13) {
        document.getElementById("submit_email").click();
    }
});

</script>
@stop 