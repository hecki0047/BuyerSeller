@extends('fontend.master_dynamic')
@section('page_css')
<link property='stylesheet' rel="stylesheet" type="text/css" href="{{ URL::asset('assets/fontend/page/success.css',is_secured()) }}" media="screen" data-name="skins">
@endsection
@section('content')
<div style="clear:both"></div>
<div class="row" style="background-color: #fff!important;">
    <div class="col-sm-=12">
    	<div class="col-sm-2"></div>
    	<div class="col-sm-8" id="item_sha" style="margin-bottom:20px;margin-left: 0px;margin-top:30px;margin-bottom:30px;padding-bottom:20px;padding-top:10px;">
                <p style="color:green;font-size:25px;margin-bottom: -36px;">Hi {{$user_name}}</p>	
    			<p class="submit-succ" style="margin-left: -35px;"><i class="fa fa-check-square succ" style="padding-top: 13px;"></i><span>Order payment success<span>
    			 <b>{{ $package->descriptions->name ?? ''}}</b></p> 
                 <p class="submit-succ" style="padding-top: 3px;padding-left: 30%;"></p>	
                 <p style="padding-top: 10px;padding-left:74%;"><a href="{{URL::to('company/dashboard',null,is_secured())}}">Back To Dashboard</a></p> 
    	</div>
        <div class="col-sm-2"></div>
    </div>
    <div class="col-sm-12 padding_0" style="margin-top:20px;margin-bottom:20px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 padding_0" id="item_sha" style="padding-bottom:20px;">
        <p style="padding-left:10px;font-size: 15px;">If you want to check your package go to dashboard or home page</p>
        <div class="col-sm-4"><a href="{{URL::to('payment-history',null,is_secured())}}" class="btn btn-primary">Paymenr History</a></div>
        <div class="col-sm-4"><a href="{{URL::to('/',null,is_secured())}}" class="btn btn-primary">Home Page</a></div>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>


 @stop
        @section('scripts')
            <script type="text/javascript">
                $(function() {
                    /**
                     * the element
                     */
                    var $ui 		= $('#ui_element');

                    /**
                     * on focus and on click display the dropdown,
                     * and change the arrow image
                     */
                    $ui.find('.sb_input').bind('focus click',function(){
                        $ui.find('.sb_down')
                                .addClass('sb_up')
                                .removeClass('sb_down')
                                .andSelf()
                                .find('.sb_dropdown')
                                .show();
                    });

                    /**
                     * on mouse leave hide the dropdown,
                     * and change the arrow imagek
                     */
                    $ui.bind('mouseleave',function(){
                        $ui.find('.sb_up')
                                .addClass('sb_down')
                                .removeClass('sb_up')
                                .andSelf()
                                .find('.sb_dropdown')
                                .hide();
                    });

                    /**
                     * selecting all checkboxes
                     */
                    $ui.find('.sb_dropdown').find('label[for="all"]').prev().bind('click',function(){
                        $(this).parent().siblings().find(':checkbox').attr('checked',this.checked).attr('disabled',this.checked);
                    });
                });
            </script>
@stop