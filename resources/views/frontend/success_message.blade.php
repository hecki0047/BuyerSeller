@extends('fontend.master3')
@section('content')
<div style="clear:both"></div>
	<br>
<div class="row" style="background-color: #fff!important;">
    <div class="col-sm-=12">
    	<div class="col-sm-2"></div>
    	<div class="col-sm-8" id="item_sha" style="margin-bottom:20px;margin-left: 0px;margin-top:30px;margin-bottom:30px;padding-bottom:20px;padding-top:10px;">
                <p style="color:green;font-size:25px;margin-bottom: -36px;"></p>
                @if(session()->has('quotation_limit_alert'))
                <div style="margin-bottom: 15px;margin-top: 15px;"><div class="alert-box warning"><i style="color:#ce801f;" class="fa fa-exclamation-triangle" aria-hidden="true"></i><span style="font-weight: bold;">Warning: </span>{{session()->get('quotation_limit_alert')}}</div></div>
                @else
    			<p class="submit-succ" style="margin-left: -35px;margin-bottom: 15px;"><i class="fa fa-check-square succ" style="padding-top: 13px;"></i><span>Your message has been successfully sent<span>
    			 <span class="header_first_name"></span><span class="header_last_name"></span></p>
                @endif
                <p style="padding-top: 10px;"><a href="{{URL::to($_SERVER['HTTP_REFERER'])}}" class="btn btn-primary">Go back</a></p> 
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