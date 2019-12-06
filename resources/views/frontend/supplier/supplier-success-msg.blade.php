@extends('fontend.master_dynamic')
@section('page_css')
	<link property='stylesheet' href="{!! asset('assets\fontend\bdtdccss\buyer-request-style.css',is_secured()) !!}" rel="stylesheet">
@endsection
@section('content')
<div class="row">

			<div class="col-sm-=12">
    	<div class="col-sm-2"></div>
    	<div class="col-sm-8" id="item_sha" style="margin-bottom:20px;margin-left: 0px;margin-top:30px;margin-bottom:30px;padding-bottom:20px;padding-top:10px;">
                <p style="color:green;font-size:25px;margin-bottom: -36px;">Hi</p>	
    			<p class="submit-succ" style="margin-left: -35px;"><i class="fa fa-check-square succ" style="padding-top: 13px;"></i><span>An Inquery has been successfully sent<span></p> 
                 <p class="submit-succ" style="padding-top: 3px;padding-left: 30%;"></p>	
                 <p style="padding-top: 10px;padding-left:74%;font-weight: bold;"><a href="{{URL::to('/',null,is_secured())}}">Back To Home</a></p> 
    	</div>
        <div class="col-sm-2"></div>
    </div>
    <div class="col-sm-12 padding_0" style="margin-top:20px;margin-bottom:26px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 padding_0" id="item_sha" style="padding-bottom:20px;">
        <p style="padding-left:10px;font-size: 19px;">Go to dashboard or home page</p>
        <div class="col-sm-4">
        	<a href="{{URL::to('BuyerChannel/pages/meet_suppliers',13,is_secured())}}" class="btn btn-primary" style="font-size: 18px;border-radius: 5px !important;">Back to page</a>
        </div>
        <div class="col-sm-4" style="padding-left: 4%;">
        	<a href="{{URL::to('/',null,is_secured())}}" class="btn btn-primary" style="font-size: 18px;border-radius: 5px !important;">Home Page</a></div>
        </div>
        <div class="col-sm-2"></div>
    </div>
           
  </div>
  @stop
 @section('scripts')
 <script type="text/javascript">
		 


</script>
@stop `