@extends('mobile-view.layout.master_m')
@section('content')
<section>
<div class="container">
	<div class="row"  style="margin-top: 28px;">
	      <div class="col-md-12 col-xs-12 bg-success" style="padding: 0 30px;">
	            
	            <div style="float: left">
	                <h3 class="cong-h3" style="margin-left: 20px;"><img class="suc-img" src="{!! asset('resources/assets/fontend/product-images/success.1.png',is_secured()) !!}" alt="sucess">Congratulations! </h3>
	                <h4 class="cong-h4" style="margin-left:0"> Your submission is complete.</h4>

	                <h4 class="cong-h4" style="margin-left:0;"><a class="btn" href="{{ URL::to('get-quotations',null,is_secured())}}">Post More Requests >></a></h4>
	                </div>
	                <div style="float: left;">
	                	<h4 class="cong-h4" style="margin-left:0px;padding-left: 20px;padding-top:2%;"><a style="" class="btn" href="{{ URL::to('/',null,is_secured())}}">Back to Home Page >></a></h4>
	                </div>               
	          
	    </div> 
	   <div class="col-md-12 col-xs-12">        
                    <div class="trade-head" style="padding-top:3%;">
	                    <h1 class="td-h1" style="font-size: 16px;"><i class="fa fa-check-square-o" style="font-size:14px;padding-right:1px;">
	                    </i> Buyer Protection</h1> 
                        <h3 class="td-h3" style="padding-bottom:0px;font-size:14px;"><i class="fa fa-check-square-o" style="font-size:22px;padding:-3px;padding-right:4px;"></i>
							Enabling businesses to trade with confidence.
						</h3>
                        <h3 class="td-h3" style="font-size:14px;"><i class="fa fa-check-square-o" style="font-size:15px;padding:-3px;padding-right:9px;">
                        </i>Order quality and on-time shipment safeguards</h3>
                        <h3 class="td-h3" style="font-size:14px;"><i class="fa fa-check-square-o" style="font-size:15px;padding:-3px;padding-right:9px;">
                        </i>100% payment refund up to Buyer Protection Amount</h3>
                        <div class="" style="margin-left:0;">
                            <a class="learn" href="{{ URL::to('BuyerChannel/pages/trade_assurance',5,is_secured())}}"> 
                            	<label for="" style="font-size:16px;color:#8C3A05;cursor:pointer;">Learn More</label>
                            </a>
                        </div>
                </div>               
	        </div>
	</div>
</div>
</section>
@stop