@extends('frontend.layouts.master-register')
    @section('page_css')
    <link property='stylesheet' href="{!! asset('css/for-buyers/meet-suppliers.css',is_secured()) !!}" rel="stylesheet">
    @endsection
@section('content')
	<div style="clear:both"></div>
    <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{URL::to('BuyerChannel/pages/meet_suppliers',13,is_secured())}}" class="top-path-li-a">Meet Suppliers<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
	<div class ="row" style="background:#fff;">
    <div class="col-md-12 padding_0">
	    <img itemprop="image" style="width:100%; max-height:400px;" class="img-responsive header_img_fix" src="{!!asset('assets/fontend/bdtdc-images/sourcing-specialist.jpg',is_secured())!!}" alt="sourcing specialis" />
        </div>
       
	   
	</div>
	<div style="clear:both"></div>
	<br><br>
	<div class="row">
	    <table class="table table-bordered">
              <tr style="border-bottom:1px solid black;background:#fff;">
                <td class="col-md-4 col-sm-4 col-lg-4 col-xs-12" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:30px;">
                    <h5 style="padding-bottom:5%;padding-top:5%; text-align:center;"><b>One-stop VIP buyer service</b></h5>
                    <p style="font-size:100%; text-align:center;min-height: 72px;">Be endowed with one-stop sourcing service comprising  factory visit, sourcing assistance, face-to-face meeting and so on when you are in Bangladesh.</p>
                    <div style="text-align:center;margin-left:auto; margin-right:auto;">
                        <div    class="btn btn-default" style="border-radius: 5px !important; text-align:center;"><a itemprop="url" href="{{URL::to('VIP-buyer/One-stop-service'),is_secured()}}" target="_blank">Learn More</a></div>
                    </div>
                </td>
                <td class="col-sm-4 col-md-4 col-lg-4 col-xs-12" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:30px;">
                    <h5 style="padding-bottom:5%;padding-top:5%;text-align:center;"><b>BuyerSeller Sourcing Event</b></h5>
                    <p style="font-size:100%; text-align:center;min-height: 72px;">Meet coordinated and pre-qualified suppliers assistance, arrange personal get together, visit factories etc. through the exchange fairs held by BuyerSeller.</p>
                    <div style="text-align:center;margin-left:auto; margin-right:auto;">
                    
                    <div    class="btn btn-default" style="text-align:center;border-radius: 5px !important;"> <a itemprop="url" href="{{URL::to('sourceing-event',null,is_secured())}}" target="_blank">Learn More</a></div>
                   
                    </div>
                </td> 
                <td class="col-md-4 col-md-4 col-lg-4 col-xs-12" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:30px;">
                    <h5 style="padding-bottom:5%;padding-top:5%;text-align:center;"><b>Dhaka Sourcing Season</b></h5>
                    <p style="font-size:100%; text-align:center;min-height: 72px;">Meet with the exact targeted suppliers and discover larger and wider business opportunities during the Dhaka fairs that take place in Dhaka, Bangladesh.</p>
                    <div style="text-align:center;margin-left:auto; margin-right:auto;">
                     
                    <div    class="btn btn-default" style="text-align:center; border-radius: 5px !important;"><a itemprop="url" href="{{URL::to('sourceing-season',null,is_secured())}}" target="_blank">Learn More</a></div>
                   
                    </div>
                </td>
              </tr>
        </table>
                            
	</div>
	<br>
	<div class="row" style="background-color: #ffffff;padding: 2%; margin-bottom: 3%;">
	    <div class="col-sm-12" style="padding-left:4px;">
	       <h5><b>Ways in which it work ?</b></h5>  
	    </div>
	   
	    <table class="table table-bordered" style="background:white;">
            <tr style="border-top:2px solid rgba(0,0,0,.2)!important;  border:1px solid rgba(0,0,0,.1)!important;">
                <td class="col-sm-3" style="background:white;">
                    <div class="col-sm-10">
                        <p style="padding-left:0px;padding-top:10px;margin: 0">
                            Register with BuyerSeller to submit request
                        </p> 
                    </div>
                    <div class="col-sm-2">
                         <img itemprop="image" style="height:1%;" src="{!!asset('assets/helpcenter/images/bg-line.png',is_secured())!!}" alt="contact us" />
                    </div>
                </td>
                <td class="col-sm-3" style="background:white;">
                    <div class="col-sm-10">
                    <p style="padding-left:0px;padding-top:10px;margin: 0">
                       Suppliers are sourced according to the requestWe
                    </p>
                    </div> 
                    <div class="col-sm-2">
                        <img itemprop="image" style="height:1%;"  src="{!!asset('assets/helpcenter/images/bg-line.png',is_secured())!!}" alt="contact us" />
                   </div>
               </td> 
                <td class="col-sm-3" style="background:white;">
                    <div class="col-sm-10">
                    <p style="padding-left:0px;padding-top:10px;margin: 0">
                        We find the best supplier match for you
                    </p>
                    </div>
                     <div class="col-sm-2">
                        <img itemprop="image" style="height:1%;"  src="{!!asset('assets/helpcenter/images/bg-line.png',is_secured())!!}" alt="contact us" />
                     </div>            
                                    </td>
                <td class="col-sm-3" style="background:white;">
                    
                        <p style="padding-left:0px;margin: 0">Face-to- Face approach with Pre-matched Suppliers</p>
                  
                    <!--<div class="col-sm-4">
                        <img itemprop="image" style="height:.1%;" class="img-responsive header_img_fix" src="{!! asset('assets/helpcenter/images/bg-line.png',is_secured()) !!}" alt="" />
                    </div>-->
                </td>
            </tr>
        </table>
        <br>
       <!--  <div style="text-align:center;margin-left:auto; margin-right:auto">
            <div    class="btn btn-primary"   style="padding-top:10px;border-radius: 5px !important; text-align:center;"><a itemprop="url" style="color:#fff;" href="{{URL::to('Bdtdc/apply-sourceing-meeting'),is_secured()}}">Apply to meet suppliers</a></div>
        </div> -->
	    <br><br>
	</div>
	<div class="row" style="background-color: #ffffff;padding: 2%;">
	    <div class="col-sm-12" style="padding: 0 0 0 5px;margin: 0 0 30px;font-size: 18px;line-height: 40px;color: #222;font-weight: bold;
border-bottom: 2px solid #999;">
	    <h5><b>Buyer's Choice</b></h5>
	    </div>
	      <hr>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h2 class="supplier-h2">Determined channel for genuine purchasers</h2>
            <p style="font-size: 18px; text-align: left;font-weight: normal; padding:0; margin: 0;">We work with the world&#39;s most famous retailers and brands over broad areas of classified

products such as Design Adornments, Clothing, Endowments, Home Products, Software,

Hardware, Computer, auto parts, Accessories and Footwear, LED, Luggage, Leather Products,

Home Furniture and Decoration, Bags and Cases, Fresh Flowers items and Frozen Seafood.</p>
	   </div>
       <div class="col-sm-12 col-md-12 col-lg-12">
            <table style="width:100%;" class="mt20 logo-table">
                    <tbody class="supp-tbody">
                            <tr class="supp-row">
                                <td style="width:25%;" class="brandTb-td"> 
                                <img itemprop="image"  class=""  style="max-height: 125px; max-width: 85%;"  src="{!!asset('assets/fontend/bdtdc-images/kmart-tyre-and-auto-service-logo.jpg',is_secured())!!}" alt="Kmart tyre and auto service logo" />
                                </td>
                                <td style="width:25%;" class="brandTb-td"> 
                                        <img itemprop="image"  class=""  style="max-height: 125px; max-width: 85%;" src="{!!asset('assets/fontend/bdtdc-images/tesco.jpg',is_secured())!!}" alt="Tesco logo" />
                                </td>
                                <td style="width:25%;" class="brandTb-td"> 
                                        <img itemprop="image"  class=""  style="max-height: 125px; max-width: 85%;"  src="{!!asset('assets/fontend/bdtdc-images/sears.jpg',is_secured())!!}" alt="Sears logo" />
                                </td>
                                <td style="width:25%;" class="brandTb-td">
                                    
                                    <img itemprop="image"   style=" max-height: 125px; width: 85%;"  src="{!!asset('assets/fontend/bdtdc-images/target.png',is_secured())!!}" alt="Target logo" />
                                </td>
                            </tr>
                             <tr class="supp-row">
                                <td style="width:25%;" class="brandTb-td">
                                    <img itemprop="image"  class="" style="max-height: 125px; max-width: 85%;"  src="{!!asset('assets/fontend/bdtdc-images/logo_tjx_companies.gif',is_secured())!!}" alt="The TJX companies logo" />
                                </td>
                                <td style="width:25%;" class="brandTb-td">
                                    <img itemprop="image"   style=" max-height: 125px; max-width: 85%;"  src="{!!asset('assets/fontend/bdtdc-images/zara_logo.jpg',is_secured())!!}" alt="Zara logo" />
                                </td>
                                <td style="width:25%;" class="brandTb-td">
                                    <img itemprop="image"  class="" style="max-height: 125px; max-width: 85%;" src="{!!asset('assets/fontend/bdtdc-images/com-logo-picture27.jpg',is_secured())!!}" alt="Walmart logo" />
                                </td>
                                <td style="width:25%;" class="brandTb-td">
                                    <img itemprop="image"  class="" style="max-height: 125px; max-width: 85%;"  src="{!!asset('assets/fontend/bdtdc-images/com-logo-picture21.jpg',is_secured())!!}" alt="Carrefour logo" />
                                </td>
                            </tr>
                    </tbody>
            </table>
           
       </div>
    </div>
	  <br>
<div class="row" style="background-color: #ffffff; padding: 3%; margin-top: 1%; border-bottom: 1px solid rgba(0,0,0,.1);">
	   <div class="col-sm-12" style="padding: 0 0 0 5px;margin: 0 0 30px;font-size: 18px;line-height: 40px;color: #222;font-weight: bold;
border-bottom: 2px solid #999;">
	      <h5><b>Review Previous Meetings</b></h5>
	    </div>
	      <hr>
	      <div class="col-sm-3 col-xs-6">
<img itemprop="image" style="height:150px;width:100%;" class="img-responsive header_img_fix" src="{!!asset('assets/fontend/bdtdc-images/Dubai-Convention.jpg',is_secured())!!}" alt="Dubai Convention" />
	      </div>
	      <div class="col-sm-3 col-xs-6">
	          <img itemprop="image" style="height:150px;width:100%;" class="img-responsive header_img_fix" src="{!! asset('assets/fontend/bdtdc-images/Tokyo_Convention.jpg',is_secured()) !!}" alt="Tokyo Convention" />
	      </div>
	      <div class="col-sm-3 col-xs-6">
	          <img itemprop="image" style="height:150px;width:100%;" class="img-responsive header_img_fix" src="{!! asset('assets/fontend/bdtdc-images/NY-Javits-Center.jpg',is_secured()) !!}" alt="NY Javits Center" />
	      </div>
	      <div class="col-sm-3 col-xs-6">
	          <img itemprop="image" style="height:150px;width:100%;" class="img-responsive header_img_fix" src="{!! asset('assets/fontend/bdtdc-images/Messe_Frankfurt.jpg',is_secured()) !!}" alt="Messe Frankfurt" />
	      </div>
	  </div>
	<br><br>
	    

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