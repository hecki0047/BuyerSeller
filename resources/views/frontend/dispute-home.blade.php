@extends('frontend.layouts.master-register')
  @section('page_css')
    <link property='stylesheet' href="{!! asset('css/customer-service/help-center.css',is_secured()) !!}" rel="stylesheet">
    @endsection
@section('content')
<div style="clear:both"></div>
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <ul class="top-path" style="padding-bottom: 8px;">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a" > <span itemprop="name">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="{{URL::to('FooterPage/pages/Help_Center',19),is_secured()}}" class="top-path-li-a"> <span itemprop="name">Help Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a   itemprop="item" href="{{URL::to('ServiceChannel/pages/submit_a_dispute',39),is_secured()}}" class="top-path-li-a"> <span itemprop="name">Submit a Dispute</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
<!-- <div id="item_sha" class="row">
      <p style="padding-left:10px;">  Since February 2nd, for any complaints occurred on Bdtdcexpress please <a itemprop="url"  href="{{URL::to('submit_report')}}"> click here</a>  to submit. 
      </p>      
</div> -->
<br>
<div id="item_sha" class="row" style="padding:20px 0;">

     
        <div id="footer-shadow" class="col-md-4">
              <h3 style="color: #255E98;">Trade Disputes
</h3>
              <h4 style="line-height: 25px;font-size: 12px"><b>Submit a report for Image Copyright Infringement
</b></h4>
              <p style="line-height: 22px;min-height: 88px">If you have any complaints related to any intellectual property infringement, such as copyright images, please submit a complaint to Buyer Seller by clicking the following link: </p>
              <br>
              <a itemprop="url"  href="{{URL::to('submit_report',null,is_secured())}}" class="btn btn-primary" style="border-radius: 4px !important;">Report</a>
        
        </div>
        <div id="footer-shadow" class="col-md-4">
            <h3 style="color: #255E98;">Product Information Violation</h3>
            <h4 style="line-height: 25px;font-size: 12px"><b>Counterfeit Products
 </b></h4>
            <p style="line-height: 22px;min-height: 88px">If you own a product’s Intellectual Property (IP), and find that its IP has been stolen, then please submit a complaint to Buyer Seller by clicking the following link: </p>
            <br>
            <a itemprop="url"  href="{{URL::to('submit_report',null,is_secured())}}" class="btn btn-primary" style="border-radius: 4px !important;">Report</a>
              
        </div>
        <div class="col-md-4">
           <h3 style="color: #255E98;">Other</h3>
            <h4 style="line-height: 25px;font-size: 12px"><b>Fake Published Information
 </b></h4>
            <p style="line-height: 22px;min-height: 88px">If you find that a company or product has a fake published information, or it doesn’t match with that informed to you, please submit a dispute on the following link:
 </p>
            <br>
            <a itemprop="url"  href="{{URL::to('submit_report',null,is_secured())}}" class="btn btn-primary" style="border-radius: 4px !important;">Report</a>
        </div>
     
</div>


<br>


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