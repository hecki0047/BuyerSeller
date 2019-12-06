@extends('mobile-view.layout.master_m')
	@section('content')
@include('mobile-view.country-product.template-header')
<div class="row padding_0" style="background: #fff;">
    <div class="col-xs-12 padding_0" style="padding-bottom: 20px; border-bottom: 1px solid #ddd;">

      		<div class="col-xs-4 padding_0">
      				<div class="comp-charct">
      						<div class="comp-charct-char"><dt class="comp-charct-char-dt">Business Type:</dt></div>
      						<div class="comp-charct-char"><dt class="comp-charct-char-dt">Year Established:</dt></div>
      						<div class="comp-charct-char"><dt class="comp-charct-char-dt">Main Products:</dt></div>
      						<div class="comp-charct-char"><dt class="comp-charct-char-dt">Main Markets:</dt></div>
      				</div>
      		</div>
      		<div class="col-xs-8">
      				<div class="comp-charct">
      						<div class="comp-charct-char"><dd class="comp-charct-dd">Manufacturer, Trading Company</dd></div>
      						<div class="comp-charct-char"><dd class="comp-charct-dd">2009</dd></div>
      						<div class="comp-charct-char"><dd class="comp-charct-dd">T Shirt,Polo Shirt,Hoody,Cap</dd></div>
      						<div class="comp-charct-char"><dd class="comp-charct-dd">Domestic Market, North America, Western Europe, Eastern Asia, Oceania</dd></div>
      				</div>
      		</div>
      </div>
  </div>
  <div class="row padding_0" style="padding-bottom: 40px; background: #fff;">
      			<div class="col-xs-12">
      					<a href="#">
      					<div class="sup-ttyp"><img style="width: 25px;" src="{!! asset('resources/assets/mobile-images/Buyer-protection-home.png',is_secured()) !!}" alt="bdtdc"><span style="margin-left: 12px; color:#666;">Trade Assurance</span></div>
      					</a>
      					<div class="cont-inf">Order quality and on-time shipment safeguards
                       </div>
                       <div class="cont-inf" style="margin-top: 5px;">
                       		Trade Assurance Amount: <span style="color: #F60;">US $56,000</span>
                       </div>
      			</div>
</div>
<div class="row padding_0" style="background: #fff;padding-bottom: 50px; margin-bottom: 20px; border-bottom: 1px solid #ddd;">
      			<div class="col-xs-12 padding_0">
      				<div class="product-block">
						<div style="width: 100%; float: left;font-size: 24px; color:#666; clear: both;"><h2 class="con-h2">Hot Products</h2>
						</div>
      			    <ul class="hot-pr-list">
      			    		<li class="hot-pr-list-li"><a class="hot-pr-list-li-a" href="#"><img class="hot-pr-list-li-img" src="{!! asset('resources/assets/mobile-images/Hotel-or-Home-Indian.jpg',is_secured()) !!}" alt="bdtdc">
      			    		<span class="hot-pr-list-li-span">Wholesale printed brand t shirt</span></a>
      			    		</li>
      			    		<li class="hot-pr-list-li"><a class="hot-pr-list-li-a" href="#"><img class="hot-pr-list-li-img" src="{!! asset('resources/assets/mobile-images/Wholesale-Authentic-Men.jpg',is_secured()) !!}" alt="bdtdc">
      			    		<span class="hot-pr-list-li-span">Wholesale printed brand t shirt</span></a>
      			    		</li>
      			    		<li class="hot-pr-list-li"><a class="hot-pr-list-li-a" href="#"><img class="hot-pr-list-li-img" src="{!! asset('resources/assets/mobile-images/Wrestling-T-shir.jpg',is_secured()) !!}" alt="bdtdc">
      			    		<span class="hot-pr-list-li-span">Wholesale printed brand t shirt</span></a>
      			    		</li>
      			    		<li class="hot-pr-list-li"><a class="hot-pr-list-li-a" href="#"><img class="hot-pr-list-li-img" src="{!! asset('resources/assets/mobile-images/Wholesale-Authentic-Men.jpg',is_secured()) !!}" alt="bdtdc">
      			    		<span class="hot-pr-list-li-span">Wholesale printed brand t shirt</span></a>
      			    		</li>
      			    		<li class="hot-pr-list-li"><a class="hot-pr-list-li-a" href="#"><img class="hot-pr-list-li-img" src="{!! asset('resources/assets/mobile-images/Wrestling-T-shir.jpg',is_secured()) !!}" alt="bdtdc">
      			    		<span class="hot-pr-list-li-span">Wholesale printed brand t shirt</span></a>
      			    		</li>
      			    		<li class="hot-pr-list-li"><a class="hot-pr-list-li-a" href="#"><img class="hot-pr-list-li-img" src="{!! asset('resources/assets/mobile-images/Wholesale-Authentic-Men.jpg',is_secured()) !!}" alt="bdtdc">
      			    		<span class="hot-pr-list-li-span">Wholesale printed brand t shirt</span></a>
      			    		</li>
      			    </ul>
      			    <div style="margin: 0 auto;"><a href="#" class="view-all-pro-comp">View All Products
						<span style="float: right;"><i style="font-size:30px;color:#666; padding-right:30px;" class="fa fa-angle-right" aria-hidden="true"></i></span></a>
					</div>	
	  	<div class="contact-over-view" style="padding-bottom: 40px;">
  					<h2 class="con-h2">Contact</h2>
  					<div class="col-xs-12">
  						<div class="col-xs-2">
  							<div class="contact-pic">
  						       <img style="width: 56px; height: 56px;" class="img-circle" src="{!! asset('resources/assets/mobile-images/contact-nm.jpg',is_secured()) !!}" alt="bdtdc">
  					      </div>
  					     </div>
  					     <div class="col-xs-10">
  					      <div class="cont-dt">
  							<dt class="name-cont">Mr. Rick Liu	</dt>
  							<dt style="float: left; width: 100px; color: #666; font-size: 16px;">Department</dt>
  							<dt style="float: left; margin-left: 10px;color: #333;">Sales</dt>
  						 </div>
  					   </div>
  						
  					</div>
  				</div>	
       </div>
     </div>
</div>
@stop
@section('scripts')
<script type="text/javascript">
			$(document).ready(function(){
    			$(".nav-tabs a").click(function(){
       				 $(this).tab('show');
   			 });
		    $('.nav-tabs a').on('shown.bs.tab', function(event){
		        var x = $(event.target).text();         // active tab
		        var y = $(event.relatedTarget).text();  // previous tab
		        $(".act span").text(x);
		        $(".prev span").text(y);
		    });
		});
</script>
@stop