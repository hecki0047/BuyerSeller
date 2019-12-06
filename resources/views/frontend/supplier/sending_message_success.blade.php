@extends('fontend.master3')
@section('content')
<div class="row" style="background-color: #fff!important;margin-top:3%;margin-bottom:1%;">
   <div class="col-sm-=12">
      <div class="col-sm-3">
         @if(session()->has('quotation_limit_alert'))
         <i class="fa fa-times text-danger" style="padding-top: 55%;font-size: 181px !important;padding-left: 0%;"></i>
         @else
         <i class="fa fa-check-circle succ" style="padding-top: 55%;font-size: 181px !important;padding-left: 0%;"></i>
         @endif
      </div>
      <div class="col-sm-9" style="margin-bottom:20px;margin-left: 0px;margin-top:30px;margin-bottom:30px;padding-bottom:8%;padding-top:10px;">
         @if(session()->has('quotation_limit_alert'))
         <div style="margin-bottom: 15px;margin-top: 15px;">
            <div class="alert-box warning"><i style="color:#ce801f;" class="fa fa-exclamation-triangle" aria-hidden="true"></i><span style="font-weight: bold;">Warning: </span>{{session()->get('quotation_limit_alert')}}</div>
         </div>
         @else
         <p class="submit-succ" style="margin-left: 0px;font-size: 35px;"><span>	
            Your message is received successfully<span>
         </p>
         <p class="submit-succ" style="padding-top: 3px;padding-left: 30%;"></p>
         @endif
         <a href="{{URL::to($_SERVER['HTTP_REFERER'])}}" class="btn btn-primary" style="font-size: 24px;border-radius: 5px !important;margin-top: 2%;padding-left: 13px;margin-left: -1%;">Go back</a>
      </div>
   </div>
</div>
@stop