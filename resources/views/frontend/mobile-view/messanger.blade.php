@extends('mobile-view.layout.master_m')
	@section('content')
	<div class="row" style="background: #fff; margin-bottom: 28px; padding-bottom: 3%;">
			 <div class="header-wrap-mess"><p class="cat-pr-list">Messanger</p></div>
			 <div id="atm-title">
			   <p style="font-size: 16px; line-height: 20px;">Recent</p>
			 </div>
			 <div id="atm-list">
			 		<div class="atm-item">
			 			<div class="atm-item-img ">
			 				<img class="text-img-mess" src="{!! asset('assets/images/wobu.jpg',is_secured()) !!}">
			 			</div>
			 		    <div class="item-txt-msg">
			 		    		<p style="font-size: 15px; line-height: 20px; padding-top: 18px;">Hi Shofique Shahariar</p>
			 		    </div>
			 		</div>
			 </div>
			 <div id="atm-list">
			 		<div class="atm-item">
			 			<div class="atm-item-img ">
			 				<img class="text-img-mess" src="{!! asset('assets/images/shofique.shahariar.jpg',is_secured()) !!}">
			 			</div>
			 		    <div class="item-txt-msg">
			 		    		<p style="font-size: 15px; line-height: 20px; padding-top: 18px;">Hi Angelina Juli</p>
			 		    </div>
			 		</div>
			 </div>
			 <div id="atm-list">
			 		<div class="atm-item">
			 			<div class="atm-item-img ">
			 				<img class="text-img-mess" src="{!! asset('assets/images/wobu.jpg',is_secured()) !!}">
			 			</div>
			 		    <div class="item-txt-msg">
			 		    		<p style="font-size: 15px; line-height: 20px; padding-top: 18px;">I am ok,How about you ?</p>
			 		    </div>
			 		</div>
			 </div>
			 <div id="atm-list">
			 		<div class="atm-item">
			 			<div class="atm-item-img ">
			 				<img class="text-img-mess" src="{!! asset('assets/images/shofique.shahariar.jpg',is_secured()) !!}">
			 			</div>
			 		    <div class="item-txt-msg">
			 		    		<p style="font-size: 15px; line-height: 20px; padding-top: 18px;">I'm also all right.</p>
			 		    </div>
			 		</div>
			 </div>
			 <div id="atm-title">
			   <p style="font-size: 16px; line-height: 20px; text-align: center;">See More</p>
			 </div>
			 <div>
			 		<div>
			 			<img src="{!!asset('assets/images/message-not-found.png',is_secured())!!}">
			 		</div>
			 </div>
	</div>
@stop