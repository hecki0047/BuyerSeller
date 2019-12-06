@extends('fontend.master3')
	@section('content')
	<div class="row" style="background-color: #fff!important;margin-top:3%;margin-bottom:1%;">
	    <div class="col-sm-=12">
	    	<div class="col-sm-3">
	    		<i class="fa fa-check-circle succ" style="padding-top: 55%;font-size: 181px !important;padding-left: 36%;">
	    		</i>
	    	</div>
	    	<div class="col-sm-9" style="margin-bottom:20px;margin-left: 0px;margin-top:30px;margin-bottom:30px;padding-bottom:8%;padding-top:10px;">
	                
	    			<p class="submit-succ" style="margin-left: -35px;font-size: 35px;"><span>Quoataion is received successfully<span></p> 
	                 <p class="submit-succ" style="padding-top: 3px;padding-left: 30%;"></p>
	                 <a href="{{URL::to('/',null,is_secured())}}" class="btn btn-primary" style="font-size: 24px;border-radius: 5px !important;margin-top: 2%;padding-left: 13px;margin-left: -1%;">Go To Home Page</a>
	    	</div>
	        
	    </div>
	</div>
	 
	@stop