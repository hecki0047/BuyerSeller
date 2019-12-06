@extends('frontend.layouts.master-register')
@section('page_css')
<link property='stylesheet' rel="stylesheet" type="text/css" href="{{ URL::asset('assets/frontend/css/success.css',is_secured()) }}" media="screen" data-name="skins">
@endsection
	@section('content')
	<div class="row"  style="background-color:#fff;margin-top:2%;padding-bottom: 2%;
    margin-bottom: 1.4%;">
	    <div class="col-md-12 no-padding">
	            <div class="sucess-header bg-success" style="padding-bottom:104px;">
	            <div style="float: left">
	                <h3 class="cong-h3"><img class="suc-img" src="{!! asset('assets/fontend/product-images/success.1.png',is_secured()) !!}" alt="sucess">Congratulations! </h3>
	                <h4 class="cong-h4" style="margin-left:43px;"> Your submission is complete.</h4>

	                <h4 class="cong-h4" style="margin-left:34px;"><a class="btn" href="{{ URL::to('get-quotations',null,is_secured())}}">Post More Requests >></a></h4>
	                </div>
	                <div style="float: right;">
	                	<h4 class="cong-h4" style="margin-left:0px;padding-left: 0px"><a style="" class="btn" href="{{ URL::to('/',null,is_secured())}}">Back to Home Page >></a></h4>
	                </div>



               
	            </div>
	    </div>
	        <div class="col-md-12 no-padding" style="margin-top:5%;">
	            
	                <div class="col-md-8" style="padding-right:0;">
	                        
	                        <div class="trade-head" style="padding-top:3%;">
	                      <h1 class="td-h1"><i class="fa fa-check-square-o" style="font-size:22px;padding:-3px;padding-right:1px;"></i> Buyer Protection</h1> 
                              <h3 class="td-h3" style="padding-bottom:0px;"><i class="fa fa-check-square-o" style="font-size:22px;padding:-3px;padding-right:4px;"></i>
Enabling businesses to trade with confidence.</h3>
                              <h3 class="td-h3"><i class="fa fa-check-square-o" style="font-size:18px;padding:-3px;padding-right:9px;"></i>
Order quality and on-time shipment safeguards</h3>
                              <h3 class="td-h3"><i class="fa fa-check-square-o" style="font-size:18px;padding:-3px;padding-right:9px;"></i>
100% payment refund up to Buyer Protection Amount</h3>
                              <div class="" style="margin-left:32px;">
                                  <a class="learn" href="{{ URL::to('BuyerChannel/pages/trade_assurance',5,is_secured())}}"> <label for="" style="font-size:16px;color:#8C3A05;cursor:pointer;">Learn More</label></a>
                              </div>
	                        </div>
	                        <div class="home-page">
	                        @if (Sentinel::check())
            <?php
              $role = App\Models\Role_user::where('user_id',Sentinel::getUser()->id)->first();
              $dashboard_route = ($role->role_id ==3) ? "company/dashboard" : 'buyer/dashbord';
            ?>
        @endif
	                        		<h3><a href="{{ URL::to($dashboard_route,null,is_secured())}}">Dashboard View >></a></h3>
	                        </div>
	                </div>
	                <div class="col-md-4" style="padding-left:0;">
	                   <div class="suces-img" style="padding: 78px;">
	                           <img style="width:48%;" class="suces-img-img" src="{!! asset('assets/gold/Buyer-protect.jpg',is_secured()) !!}" alt="success">
	                       
	                   </div>
	                </div>
	        </div>
	</div>
@stop