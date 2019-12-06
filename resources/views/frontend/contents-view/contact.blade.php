@extends('frontend.layouts.master-register')
    @section('page_css')
    <link property='stylesheet' href="{!! asset('css/contact-us.css',is_secured()) !!}" rel="stylesheet">
    @endsection
@section('content')

<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url"   href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url"   href="{{URL::to('help-center'),is_secured()}}" class="top-path-li-a">Help Center<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url"   href="{{URL::to('contact_message_form')}}" class="top-path-li-a">Contact Us<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
 <div class="row" id="58" style="background-color:#fff !important;padding-top:20px; padding-bottom: 5%; margin-bottom: 28px; border-bottom: 1px solid #ddd;">
        <div class="col-sm-12">
                <div class="col-md-5 col-sm-5 col-lg-5">
                            <div class="cont-us">
                            <h1 style="color: #8F8F91; font-size: 30px;">CONTACT US</h1>
                            <p style="font-size: 14px;color: #8F8F91;">You can reach us by phone or email or in person</p>
                        </div>
                    </div>
                         <div class="col-md-7 col-sm-7 col-lg-7">
                            <img itemprop="image" style="display: block;max-height: 100px; padding-bottom: 2%; width: 130px;"  src="{!! asset('assets/fontend/bdtdc-images/contact-customer-service.png',is_secured()) !!}" alt="contact customer service" />
                         </div>
            
                
                    
        </div>

        <div class="col-sm-12" style="border: 1px solid #e7e7e7;padding-right:20px;margin-bottom:3%;">
                <div class="col-sm-4" style="border-right: 1px solid #e7e7e7;padding-left:0px;">
                    
                    <ul style="display: block;width: 100%; padding: 0; padding-left: 14%;padding-top: 15%">
                        <li style="line-height: 20px; padding: 0;color: #8F8F91;font-weight: bold;font-size: 17px;color:#255E98; padding-bottom: 6%;">Bangladesh :</li>
                        <li  style="line-height: 20px; padding:  0;color: #8F8F91;">BuyerSeller.Asia</li>
                        <li  style="line-height: 20px; padding: 0 0;color: #8F8F91;">House: 818, Floor: 02, Road: 12, Avenue: 06</li>
                        <li  style="line-height: 20px; padding:  0;color: #8F8F91;">Mirpur DOHS, Dhaka 1216</li>
                        <p class="cont-us-p" style="margin-bottom: 0px"><span style="color:#255E98;padding-right: 20px;">By phone:</span>   <span style="color: #8F8F91;">880.170.888.4440</span> </p>
                    <p class="cont-us-p"><span style="color:#255E98; padding-right: 20px;">By email:</span>   <a itemprop="url"   href="mailto:info@buyerseller.asia" target="_top"><span style="color: #8F8F91;">info@buyerseller.asia</span></a> </p>
                        
                    </ul>
               </div>
            <div class="col-sm-4" style="border-right: 1px solid #e7e7e7;padding-left:0px;">
                    <ul style="display: block;width: 100%; padding: 0; padding-left: 15%; padding-top: 15%;">
                        <li style="line-height: 20px; padding: 0;font-weight: bold;font-size: 17px;color:#255E98;padding-bottom: 6%;">USA :</li>
                        
                        <li  style="line-height: 20px; padding:0;color: #8F8F91;">125 Colson Drive</li>
                        <li  style="line-height: 20px; padding: 0; color: #8F8F91;">Cudjoe Key, Florida 33042</li>
                        <li  style="line-height: 20px; padding:0;color: #8F8F91;">Phone: 1.305.684.7893</li>
                        
                    </ul>
            </div>
            <div class="col-sm-4" style="padding-left:0px;">
                    <ul style="display: block;width: 100%; padding: 0; padding-left: 14%;padding-top: 15%;">
                        <li  style="line-height: 20px; padding:0;font-weight: bold;font-size: 17px;color:#255E98;padding-bottom: 6%;">Singapore :</li>

                        <li  style="line-height: 20px; padding:  0;color: #8F8F91;">10 Marina Blvd Marina Bay </li>
                        <li  style="line-height: 20px; padding:  0;color: #8F8F91;">Financial Centre Tower 2 Level 39,</li>
                        <li  style="line-height: 20px; padding: 0;color: #8F8F91;">Singapore 018983</li>
                        <li  style="line-height: 20px; padding: 0;padding-bottom: 9%;color: #8F8F91;"> Phone: +65 6818 6377</li>
                    </ul>
            </div> 
        </div>
<div class="col-md-12 padding_0"> 
    <div class="col-sm-4 padding_0">
        <div class="col-sm-12" style="border-top: 1px solid #e7e7e7;border: 1px solid #e7e7e7;padding-right:20px;padding-bottom:5%;">
            <div class="col-sm-3" style="padding-top:11%;padding-bottom:5%;">
                <img itemprop="image" style="height:50px;width:50px;" src="{!! asset('assets/service/contact-call.png',is_secured()) !!}" alt="contact call" />
            </div>
            <div class="col-sm-9" style="padding-top:15%;padding-bottom:7%;">
                <a itemprop="url" target="_blank"   href="https://buyerseller.zendesk.com/hc/en-us" class="btn btn-default" style="color: #8F8F91;">Contact Us</a>
            </div>
            <div class="col-sm-12" style="padding-top:10px;">
            <p style="color: #8F8F91;">If you have any issues regarding BuyerSeller.Asia or services, contact us here.</p>
            <p  style="color: #8F8F91;">Service : 24 hours/7 days in a week .</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4 padding_0">
            <div class="col-sm-12" style="border: 1px solid #e7e7e7;padding-top:9%;padding-bottom:4%; border-left: 0 none;">
            <div class="col-sm-2">
                <img itemprop="image" style="height:50px;width:50px;" src="{!! asset('assets/service/submit-dispute.png',is_secured()) !!}" alt="submit dispute" />
            </div>
            <div class="col-sm-10" style="padding-bottom:6%;">
                <a itemprop="url"   href="{{URL::to('ServiceChannel/pages/submit_a_dispute/39')}}" class="btn btn-default" style="margin-top: 5%; margin-left: 10%;color: #8F8F91;" >Submit a Dispute</a>
                
            </div>
            <div class="col-sm-10" style="padding-left:0px;padding-top:32px;">
                <p style="padding-left:15px;color: #8F8F91;">If you have any complaint, or want to report doubtful behavior, please click here.</p>
            </div>
            
        </div>
    </div>
    <div class="col-sm-4 padding_0">
            <div class="col-sm-12" style="border: 1px solid #e7e7e7;padding-top:9%;padding-bottom:4%; border-left: 0 none;">
            <div class="col-sm-2">
                <img itemprop="image" style="height:50px;width:50px;" src="{!! asset('assets/service/live-chat.png',is_secured()) !!}" alt="live chat" />
            </div>
            <div class="col-sm-10" style="padding-bottom:6%;">
                <a href="javascript:$zopim.livechat.window.show();" class="btn btn-default chat_single" data-target-id="2{{mt_rand(100000000, 999999999)}}" style="margin-top: 5%; margin-left: 10%;color: #8F8F91;" >Live chat</a>
                
            </div>
            <div class="col-sm-10" style="padding-left:0px;padding-top:32px;">
                <p style="padding-left:15px;color: #8F8F91;">For any help, chat with our customer service assistants for free. Click on the "Live Chat" option to chat now!</p>
            </div>
            
        </div>
    </div>
    </div>
</div>


@stop
@section('scripts')
{{-- <script type="text/javascript">
$(document).ready(function(){
    $(document).on({click:function(e){
      e.preventDefault();
      var target_id = $.trim($(this).attr('data-target-id'));
      if(parseInt(target_id) == 0){
        alert ('Unkonwn error occured.');
      }else{
        window.open("{!!URL::to('default/chat/"+target_id+"')!!}", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=450,width=500,height=500");
      }
    }},'.chat_single');
});
</script> --}}
<script type="text/javascript">
    $zopim(function() {
$zopim.livechat.hideAll();
});
</script>
@stop