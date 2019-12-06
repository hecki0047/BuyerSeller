@extends('fontend.master_dynamic')
@section('content')

<div class="row" style="margin-top:2%;">
	<div class="col-sm-12 top-navigator" style="padding-top:5px;">
		<div class="col-sm-2" style="font-size: 14px;">Home</div>
		<div class="col-sm-2" style="font-size: 14px;margin-left: -10%;">Trade Intelligence</div>
		<div class="col-sm-2" style="font-size: 14px;margin-left: -2%;">Think Business</div>
		<div class="col-sm-2" style="font-size: 14px;margin-left: -3%;">Discussion Forums</div>
		<div class="col-sm-2" style="font-size: 14px;">Site Resources</div>
		<div class="col-sm-2" style="font-size: 14px;margin-left: -3%;color: #F60;">Trade Answers</div>
	</div>
	<div class="col-sm-12" style="margin-top:2%;">
		<div class="col-sm-3">
			<p style="font-size:22px;">Trade Answers</p>
		</div>
		<div class="col-sm-4">
			<input class="input" type="text" name="key" placeholder="input keywords here" style="border: 1px solid #DDD;padding-left: 10px;">
		</div>
		<div class="col-sm-1">
			<button type="button" style="border: 1px solid #DDD;height: 30px;margin-left: -32%;background-color: #FF9917;color:#fff;">Search</button>
		</div>
		<div class="col-sm-1">or</div>
		<div class="col-sm-2">
			<button type="button" style="border: 1px solid #DDD;height: 30px;font-weight: 700;margin-left: -6%;padding-bottom: 28px;padding-top: 3px;font-size: 16px;box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);background-color: #fff;color: #666;"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
				Ask a question
			</button>
		</div>

		<!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        <div class="modal-body">
		        	<ul class="nav nav-tabs">
					    <li class="active" style="background-color: #F5F5F5;"><a data-toggle="tab" href="#trade">Ask Everybody</a></li>
					    <li style="background-color: #F5F5F5;"><a data-toggle="tab" href="#trade1">Ask Expert</a></li>
				  	</ul>
				  	<div class="tab-content">

				  		
					    <div id="trade" class="tab-pane fade in active">
					    	{!!Form::open(['route'=>'trade.answers'])!!}
					      	<input type="text" name="brif" placeholder="Enter a brief question" style="border: 1px solid #DDD;width: 100%;height: 38px;padding-left: 10px;">
					     	<p style="font-size:10px;color: #999;"><span style="color: #F60;">200</span> charecers left</p>
					     	<textarea name="descriptions" style="margin-top: 5%;height: 155px;background-color: #fff;border: 1px solid #DDD;" placeholder="Enter your details here"></textarea>

					     	<input type='file' name='image' style="border:1px solid #DDD;width: 100%;">

					    	<p style="font-size:10px;color: #999;"><span style="color: #F60;">2000</span> charecers left</p>
					    	<div class="col-sm-12" style="margin-top:5%;">
					    		<p>Choose question category</p>
					    		<div class="col-sm-6">
					    			<select  style="background-color: #fff;border: 1px solid #DDD;">
									  <option value="main">Select main category</option>
									  <option value="">About bdtdc.com</option>
									  <option value="">Trade</option>
									  <option value="">Countries and Region</option>
									  <option>Industry</option>
									  <option>Guide</option>
									</select> 
					    			
					    		</div>
					    		<div class="col-sm-6">
					    			<select  style="background-color: #fff;border: 1px solid #DDD;">
									  <option value="sub" name="sub-categorysub-categorysub-categorysub-category">Select sub-category</option>
									  <option value="" name="sub-category">About bdtdc.com</option>
									  <option value="" name="sub-categorysub-category">Trade</option>
									  <option value="" name="sub-category">Countries and Region</option>
									  <option value="" name="sub-category">Industry</option>
									  <option value="" name="sub-category">Guide</option>
									</select>
					    		</div>
					    	</div>
					    	<div class="col-sm-12" style="margin-top:2%;">
					    		<div class="col-sm-6">
					    			<select  style="background-color: #fff;border: 1px solid #DDD;">
									  <option value="" name="coin">1</option>
									  <option value="" name="coin">10</option>
									  <option value="" name="coin">50</option>
									  <option value="" name="coin">100</option>
									</select>
					    		</div>
					    		<div class="col-sm-6">
					    			<a href="#" style="margin-left: 20px;color: #06C;">How to get more tokens</a>
					    		</div>
					    	</div>
					    	<div class="col-sm-12" style="margin-top:5%;margin-bottom:3%;">
					    		<center>
					    			<button type="submit" class="btn btn-default" style="font-size:20px;">Post Question</button>
					    		</center>
					    	</div>
					    	 {!!Form::close()!!}
					    </div>
					   

					    <div id="trade1" class="tab-pane fade">
					      <input type="text" placeholder="Enter a brief question" style="border: 1px solid #DDD;width: 100%;height: 38px;padding-left: 10px;">
					      <textarea style="margin-top: 5%;height: 155px;background-color: #fff;border: 1px solid #DDD;" placeholder="Enter your details here"></textarea>
					      <p style="font-size:10px;color: #999;"><span style="color: #F60;">2000</span> charecters left</p>
					      <input type="text" placeholder="Where are your goods shipped from(country/region)" style="margin-top:2%;border: 1px solid #DDD;width: 100%;height: 38px;padding-left: 10px;">
					      <p style="font-size:10px;color: #999;"><span style="color: #F60;">2000</span> charecers left</p>
					      <input type="text" placeholder="Where are your goods shipped to(country/region)" style="margin-top:2%;border: 1px solid #DDD;width: 100%;height: 38px;padding-left: 10px;">
					      <p style="font-size:10px;color: #999;"><span style="color: #F60;">2000</span> charecers left</p>
					      <input type="text" placeholder="Product name" style="margin-top:2%;border: 1px solid #DDD;width: 100%;height: 38px;padding-left: 10px;">
					      <p style="font-size:10px;color: #999;"><span style="color: #F60;">2000</span> charecers left</p>
					      <input type="text" placeholder="Quantity" style="margin-top:2%;border: 1px solid #DDD;width: 100%;height: 38px;padding-left: 10px;">
					      <p style="font-size:10px;color: #999;"><span style="color: #F60;">2000</span> charecers left</p>
					    	<div class="col-sm-12" style="margin-top:5%;">
					    		<div class="col-sm-6">
					    			<select  style="background-color: #fff;border: 1px solid #DDD;">
									  <option value="">Choose question category</option>
									  <option value="">About bdtdc.com</option>
									  <option value="">Trade</option>
									  <option value="">Countries and Region</option>
									  <option>Industry</option>
									  <option>Guide</option>
									</select> 
					    		</div>
					    		<div class="col-sm-6">
					    			<select style="background-color: #fff;border: 1px solid #DDD;">
									  <option value="">Choose question category</option>
									  <option value="">About bdtdc.com</option>
									  <option value="">Trade</option>
									  <option value="">Countries and Region</option>
									  <option>Industry</option>
									  <option>Guide</option>
									</select>
					    		</div>
					    	</div>
					    	<div class="col-sm-12" style="margin-top:2%;">
					    		<div class="col-sm-6">
					    			<select style="background-color: #fff;border: 1px solid #DDD;">
									  <option value="">1</option>
									  <option value="">10</option>
									  <option value="">50</option>
									  <option value="">100</option>
									</select>
					    		</div>
					    		<div class="col-sm-6">
					    			<a href="#" style="margin-left: 20px;color: #06C;">How to get more tokens</a>
					    		</div>
					    	</div>
					    	<div class="col-sm-12" style="margin-top:5%;margin-bottom:3%;">
					    		<center>
					    		<button type="submit" class="btn btn-default" style="font-size:20px;">Post Question</button>
					    		</center>
					    	</div>
					    </div>

					</div>
		        </div>
		        <div class="modal-footer">
		          
		        </div>
		      </div>
			  <!-- Modal content-->
		      
		    </div>
		  </div>
		  <!-- Modal -->


		<div class="col-sm-1">
			<a href="#">Sign in</a>
		</div>
	</div>
	<div class="col-sm-12"  style="margin-top:2%;">
		<div class="col-sm-1">
			<i class="fa fa-user" style="font-size:40px;color:#999;"></i>
		</div>
		<div class="col-sm-2" style="margin-left: -4%;">
			<a href="#"> Kutub siddique </a>
		</div>
		<div class="col-sm-1" style="margin-left: -8%;">
			<p style="background-color: #FFE0CC;padding-left: 9px;">Level 1</p>
		</div>
		<div class="col-sm-2">
			<p>asked <span style="color: #999;">2 days ago</span></p>
		</div>
	</div>
	<div class="col-sm-12" style="margin-top:2%;">
		<div class="col-sm-9">
				<div class="col-sm-12">
					<p style="text-align:justify;font-size: 22px;margin-left: -2%;">

						{{$trade->brif ?? ''}}
					</p>
				</div>
				<div class="col-sm-12" style="margin-top:2%;">
					<div class="col-sm-3" style="margin-left: -3%;">
						<p>Question Category:</p>
					</div>
					<div class="col-sm-3" style="margin-left: -7%;">
						<a href="#">{{$trade->parent_category ?? ''}}</a>
					</div>
					<div class="col-sm-2">
						<p style="color:#999;font-size:12px;margin-left: -44%;">views:131</p>
					</div>
				</div>
				<div class="col-sm-12" style="margin-left: -1%;">
					<p>{{$trade->descriptions ?? ''}}</p>
				</div>
			
		</div>
		<div class="col-sm-3">
			<div class="col-sm-12" style="margin-top:2%;">
				<p style="font-size:16px;font-weight:700;border-bottom: 2px solid #1996E6;">Related Questions</p>
				<p style="padding-top:2%;"><a href="#" style="color: #06C;">comprar figuras grandes de poliresina</a></p>
				<p style="padding-top:2%;"><a href="#" style="color: #06C;">IS THIS COMPANY DOING FLAUD AND TAKE PEOPLE BUYER MONEY?I NEED HJELP FROM ALIBAB</a></p>
				<p style="padding-top:2%;"><a href="#" style="color: #06C;">How can i remove my credit card info form bdexpress?</a></p>
				<p style="padding-top:2%;"><a href="#" style="color: #06C;">China Post air mail web Site</a></p>
				<p style="padding-top:2%;"><a href="#" style="color: #06C;">fob</a></p>
			</div>
			<div class="col-sm-12" style="margin-top:2%;">
				<a href="#"><img style="height:129px;width:100;" src="{!! asset('assets/trade_answers.jpg')!!}" alt="" /></a>
			</div>
		</div>
	</div>
	
</div>

@stop

