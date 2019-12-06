@extends('mobile-view.layout.master_m')
	@section('content')

	<div class="row" style="background-color: #fff!important;margin-bottom:1%;">
		 <div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
                    <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block;">
                    <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
                    </a>
    </div>
	    <div class="col-sm-=12">
	    	<div class="col-sm-3">
	    		<i class="fa fa-check-circle succ" style="padding-top: 20%;font-size: 181px !important;padding-left: 36%;">
	    		</i>
	    	</div>
	    	<div class="col-sm-9" style="margin-bottom:20px;margin-left: 0px;margin-top:30px;margin-bottom:30px;padding-bottom:8%;padding-top:10px;">
	                
	    			<p class="submit-succ" style="margin-left: -33px;font-size: 28px;"><span>Quoataion is received successfully<span></p> 
	                 <p class="submit-succ" style="padding-top: 3px;padding-left: 30%;"></p>
	                 <a href="{{URL::to('/',null,is_secured())}}" class="btn btn-primary" style="font-size: 24px;border-radius: 5px !important;margin-top: 2%;padding-left: 13px;margin-left: -1%;">Go To Home Page</a>
	    	</div>
	        
	    </div>
	</div>
	 
	@stop