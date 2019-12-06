@extends('frontend.layouts.master-register')
@section('content')
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;"  itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('buyerHome',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Buyer Channel</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('BuyerChannel/pages/industry_analysis',14,is_secured())}}" class="top-path-li-a"><span itemprop="name">Industry Analysis Reports</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    
  </div>


<div class="row" id="home_b">
    <div class="col-sm-9 padding_0 prodt-lst-show">
        <div class="col-sm-12" style="margin-bottom: 10px;margin-top:0px;border: 1px solid #ccc;">
            <div class="col-sm-3 inn-dut">
                Industry
            </div>
            <div class="col-sm-3" style="padding-top:20px;padding-bottom:15px;">
                <ul>
                    <li>
                        <a itemprop="url" href="#">Agriculture and  Food</a>
                    </li>
                    <li>
                        <a itemprop="url" href="#">Auto Parts</a>
                    </li>
                    <li>
                        <a itemprop="url" href="#">Computer Products</a>
                    </li>
                </ul>
            </div> 
            <div class="col-sm-3" style="padding-top:20px;padding-bottom:15px;">
                <ul>
                    <li>
                        <a itemprop="url" href="#">Apparel & Accessories</a>
                    </li>
                    <li>
                        <a itemprop="url" href="#">Bags, Cases & Boxes</a>
                    </li>
                    <li>
                        <a itemprop="url" href="#">Construction</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3" style="padding-top:20px;padding-botto0m:15px;">
                <ul>
                   <li>
                       <a itemprop="url" href="#">Arts & Crafts</a>
                   </li>
                   <li>
                       <a itemprop="url" href="#">Chemicals</a>
                   </li>
                   <li>
                       <a itemprop="url" href="#">Consumer Electronics</a>
                   </li>
                   
                </ul>
            </div>
        </div>
        <div class="col-sm-12 padding_0" style="padding: 0 0 10px 0;margin-top: 10px;margin-bottom: 10px;border-bottom: 1px dotted #ccc;">
            <div class="col-sm-6">
                <p>198 results for "Industry Analysis Reports</p>
            </div>
            <div class="col-sm-6" style="padding-left:41%;">
                <div class="input-group">
                  <div class="input-group-btn">
                    <!-- Button and dropdown menu -->
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Latest<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a itemprop="url" href="#">Latest</a></li>
                      <li><a itemprop="url" href="#">Hottest</a></li>
                      <li><a itemprop="url" href="#">Recommended</a></li>
                    </ul>
                  </div>
                  
                </div>
            </div>
        </div>
        <div class="col-sm-12 padding_0" style="border-bottom: 1px dotted #ccc;">
            <div class="col-sm-2 col-xs-6" style="padding-top:10px;padding-bottom:20px;">
                <img itemprop="image"  style="height:82%;width:80%; margin-left:16px;" src="{!!asset('assets/service/report-medicine-analysis.jpg',is_secured())!!}" alt="industry analysis" />
            </div>
            <div class="col-sm-10 col-xs-12" style="padding-left:0px;">
                <div class="col-sm-12" style="padding-left:45px;">
                    <p style="font-size: 14px;font-weight: 700;color: #333;">
                        2015-2018 Medicine Industry Analysis Report
                    </p>
                    <p>september11,2015</p>
                    <p style="color: #666;font-family: Arial, Helvetica, sans-serif;font: 12px/1.5 Arial, sans-serif;">
                        Based on the export data from January to December 2016, bdtdc's export of medicine was mainly from
                   Dhaka, Chittagong, Gazipur, Khulna. These four regions accounted for 26.2%, 16%, 11.7% and 11% of
                    the total export value respectively.</p>
                </div>
                <div class="col-sm-12 padding_0">
                    <div class="col-sm-8 col-xs-6">
                        <p style="padding-top:10px;font-family: Arial, Helvetica, sans-serif;font: 12px/1.5 Arial, sans-serif; padding-left:40px;">
                            Industry(<a itemprop="url" href="#">Health & Medicine</a>)
                        </p>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <p>
                                 <i class="fa fa-eye" style="color: #666;"></i>(8183)
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p>
                                 <i class="fa fa-download" style="color: #666;padding-left:18px;"></i>(58)
                                </p>
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-sm-12" style="border-bottom: 1px dotted #ccc;">
            <div class="col-sm-2 col-xs-6">
                <img itemprop="image"  style="height:82%;width:97%;" src="{!!asset('assets/service/report-toys.jpg',is_secured())!!}" alt="industry analysis" />
            </div>
            <div class="col-sm-10 col-xs-12">
                <div class="col-sm-12">
                    <p>2015-2018 Medicine Industry Analysis Report</p>
                    <p>september11,2015</p>
                    <p style="color: #666;font-family: Arial, Helvetica, sans-serif;font: 12px/1.5 Arial, sans-serif;">
                        Based on the export data from January to December 2016, bdtdc's export of medicine was mainly from
                   Dhaka, Chittagong, Gazipur, Khulna. These four regions accounted for 26.2%, 16%, 11.7% and 11% of
                    the total export value respectively.</p>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-8 col-xs-6">
                        <p>Industry(<a itemprop="url" href="#">Health & Medicine</a>)</p>
                    </div>
                    <div class="col-sm-4 col-xs-6"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-12" style="border-bottom: 1px dotted #ccc;">
            <div class="col-sm-2 col-xs-6">
                <img itemprop="image"  style="height:82%;width:97%;" src="{!!asset('assets/service/report-electronice.jpg',is_secured())!!}" alt="industry analysis" />
            </div>
            <div class="col-sm-10 col-xs-12">
                <div class="col-sm-12">
                    <p>2015-2018 Medicine Industry Analysis Report</p>
                    <p>september11,2015</p>
                   <p style="color: #666;font-family: Arial, Helvetica, sans-serif;font: 12px/1.5 Arial, sans-serif;">
                        Based on the export data from January to December 2016, bdtdc's export of medicine was mainly from
                   Dhaka, Chittagong, Gazipur, Khulna. These four regions accounted for 26.2%, 16%, 11.7% and 11% of
                    the total export value respectively.</p>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-8 col-xs-6">
                        <p>Industry(<a itemprop="url" href="#">Health & Medicine</a>)</p>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <p>
                                 <i class="fa fa-eye" style="color: #666;"></i>(8183)
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p>
                                 <i class="fa fa-download" style="color: #666;padding-left:18px;"></i>(58)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12" style="border-bottom: 1px dotted #ccc;">
            <div class="col-sm-2 col-xs-6">
                <img itemprop="image"  style="height:82%;width:97%;" src="{!!asset('assets/service/report-apparel.jpg',is_secured())!!}" alt="industry analysis" />
            </div>
            <div class="col-sm-10 col-xs-12">
                <div class="col-sm-12">
                    <p>2015-2018 Medicine Industry Analysis Report</p>
                    <p>september11,2015</p>
                    <p style="color: #666;font-family: Arial, Helvetica, sans-serif;font: 12px/1.5 Arial, sans-serif;">
                        Based on the export data from January to December 2016, bdtdc's export of medicine was mainly from
                   Dhaka, Chittagong, Gazipur, Khulna. These four regions accounted for 26.2%, 16%, 11.7% and 11% of
                    the total export value respectively.</p>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-8 col-xs-6">
                        <p>Industry(<a itemprop="url" href="#">Health & Medicine</a>)</p>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <p>
                                 <i class="fa fa-eye" style="color: #666;"></i>(8183)
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p>
                                 <i class="fa fa-download" style="color: #666;padding-left:18px;"></i>(58)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12" style="border-bottom: 1px dotted #ccc;">
            <div class="col-sm-2 col-xs-6">
                <img itemprop="image"  style="height:82%;width:97%;" src="{!!asset('assets/service/report-bd-export.jpg',is_secured())!!}" alt="industry analysis" />
            </div>
            <div class="col-sm-10 col-xs-12">
                <div class="col-sm-12">
                    <p>2015-2018 Medicine Industry Analysis Report</p>
                    <p>september11,2015</p>
                    <p style="color: #666;font-family: Arial, Helvetica, sans-serif;font: 12px/1.5 Arial, sans-serif;">
                        Based on the export data from January to December 2016, bdtdc's export of medicine was mainly from
                   Dhaka, Chittagong, Gazipur, Khulna. These four regions accounted for 26.2%, 16%, 11.7% and 11% of
                    the total export value respectively.</p>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-8 col-xs-6">
                        <p>Industry(<a itemprop="url" href="#">Health & Medicine</a>)</p>
                    </div>
                    <div class="col-sm-4 col-xs-6"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-12" style="border-bottom: 1px dotted #ccc;">
            <div class="col-sm-2 col-xs-6">
                <img itemprop="image"  style="height:82%;width:97%;" src="{!!asset('assets/service/report-leather.jpg',is_secured())!!}" alt="industry analysis" />
            </div>
            <div class="col-sm-10 col-xs-12">
                <div class="col-sm-12">
                    <p>2015-2018 Medicine Industry Analysis Report</p>
                    <p>september11,2016</p>
                    <p style="color: #666;font-family: Arial, Helvetica, sans-serif;font: 12px/1.5 Arial, sans-serif;">
                        Based on the export data from January to December 2016, bdtdc's export of medicine was mainly from
                   Dhaka, Chittagong, Gazipur, Khulna. These four regions accounted for 26.2%, 16%, 11.7% and 11% of
                    the total export value respectively.</p>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-8 col-xs-6">
                        <p>Industry(<a itemprop="url" href="#">Health & Medicine</a>)</p>
                    </div>
                    <div class="col-sm-4 col-xs-6"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-12" style="border-bottom: 1px dotted #ccc;">
            <div class="col-sm-2 col-xs-6">
                <img itemprop="image"  style="height:82%;width:97%;" src="{!!asset('assets/service/report-candal.jpg',is_secured())!!}" alt="industry analysis" />
            </div>
            <div class="col-sm-10 col-xs-12">
                <div class="col-sm-12">
                    <p>2015-2018 Medicine Industry Analysis Report</p>
                    <p>september11,2016</p>
                   <p style="color: #666;font-family: Arial, Helvetica, sans-serif;font: 12px/1.5 Arial, sans-serif;">
                        Based on the export data from January to December 2016, bdtdc's export of medicine was mainly from
                   Dhaka, Chittagong, Gazipur, Khulna. These four regions accounted for 26.2%, 16%, 11.7% and 11% of
                    the total export value respectively.</p>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-8 col-xs-6">
                        <p>Industry(<a itemprop="url" href="#">Health & Medicine</a>)</p>
                    </div>
                    <div class="col-sm-4 col-xs-6"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-12" style="border-bottom: 1px dotted #ccc;">
            <div class="col-sm-2 col-xs-6">
                <img itemprop="image"  style="height:82%;width:97%;" src="{!!asset('assets/service/report-Chemical.jpg',is_secured())!!}" alt="industry analysis" />
            </div>
            <div class="col-sm-10 col-xs-12">
                <div class="col-sm-12">
                    <p>2014-2018 Medicine Industry Analysis Report</p>
                    <p>september11,2015</p>
                    <p style="color: #666;font-family: Arial, Helvetica, sans-serif;font: 12px/1.5 Arial, sans-serif;">
                        Based on the export data from January to December 2016, bdtdc's export of medicine was mainly from
                   Dhaka, Chittagong, Gazipur, Khulna. These four regions accounted for 26.2%, 16%, 11.7% and 11% of
                    the total export value respectively.</p>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-8 col-xs-6">
                        <p>Industry(<a itemprop="url" href="#">Health & Medicine</a>)</p>
                    </div>
                    <div class="col-sm-4 col-xs-6"></div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-sm-3 prodt-lst-show">
        <div class="col-sm-12 padding_0" style="border: 1px solid #d6d6d6;">
            <div class="col-sm-12 padding_0" style="position: relative;z-index: 1;line-height: 1.2;border-bottom: 1px solid #d6d6d6;">
                <p style="font-size:18px;font-weight: normal;color: #e64545;padding-left:10px;padding-top:10px;padding-bottom:10px;">
                    Special Recommendation
                </p>
            </div>
            <div class="col-sm-12" style="padding-top:10px;">
                <div class="col-sm-4 col-xs-6 " style="padding-left:0px;">
                     <img itemprop="image"  style="height:82%;width:130%;" src="{!!asset('assets/service/Hitachi.jpg',is_secured())!!}" alt="industry analysis" />
                </div>
                <div class="col-sm-8 col-xs-12 prodt-lst-show">
                    <p>
                        <a itemprop="url" href="#" style="color: #333;font-family: Arial, Helvetica, sans-serif;font: 12px/1.5 Arial, sans-serif;">
                            2016 Construction Machinery Industry</a>                    
                    </p>
                    <p style="padding-top:10px;font: 12px/1.5 Arial, sans-serif;font-family: Arial, Helvetica, sans-serif;color: #888;">
                        From Jan. to Dec. 2016, data from Made-in-Bangladesh shows the Hoisting Machinery interest rating is the
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-xs-6 padding_0" style="margin-top:20px;margin-bottom:20px;padding-left:0px;padding-right:0px;">
                <img itemprop="image"  style="height:82%;width:100%;" src="{!!asset('assets/service/guide11.jpg',is_secured())!!}" alt="industry analysis" />
            </div>
            <div class="col-sm-12 padding_0 prodt-lst-show" style="border-bottom: 1px solid #d6d6d6;padding-top:20px;">
                <div class="col-sm-6">
                    <p style="font-size: 18px;padding: 6px 0;font-weight: normal;color: #e64545;">Bangladesh</p>
                </div>
                <div class="col-sm-6" style="margin-top:10px;">
                    <a itemprop="url" href="#" style="padding: 6px 77px;color: #0066cc;font: 12px/1.5 Arial, sans-serif;font-family: Arial, Helvetica, sans-serif;">More</a>
                </div>
            </div>
            <div class="col-sm-12 padding_0 prodt-lst-show">
                <div class="col-sm-4 col-xs-6" style="padding-top:10px;">
                    <img itemprop="image"  style="height:82%;width:122%;" src="{!!asset('assets/service/guide12.jpg',is_secured())!!}" alt="industry analysis" />
                </div>
                <div class="col-sm-8 col-xs-12">
                    <p><a itemprop="url" href="#" style="color: #333;word-wrap: break-word;font-family: Arial, Helvetica, sans-serif;font: 12px/1.5 Arial, sans-serif;">
                        Skyworth Aims to Sell 200,000 OLED TVs in 2016</a></p>
                </div>
            </div>
            <div class="col-sm-12 padding_0 prodt-lst-show">
                <ul class="nav nav-tabs">
                  <li><a itemprop="url" href="#" style="font-size:10px;">Economy</a></li>
                  <li><a itemprop="url" href="#" style="font-size:10px;">Industry</a></li>
                  <li><a itemprop="url" href="#" style="font-size:10px;">Cultur</a></li>
                </ul>
                
            </div>
            <div class="col-sm-12 padding_0 prodt-lst-show" style="padding-top:20px;padding-bottom:20px;padding-left:34px;">
                <div>
                    <a itemprop="url" href="#" style="font-size:10px;color: #333;">
                        Bangladesh's Maritime Economy Expands by 8 Pct Annually
                    </a>
                </div>
                <div>
                    <a itemprop="url" href="#" style="font-size:10px;color: #333;">
                       Bangladesh Trims Q3 Current Account Surplus
                    </a>
                </div>
                <div>
                    <a itemprop="url" href="#" style="font-size:10px;color: #333;">
                        Deutsche Bank Sells 20% Hua Xia Stake
                    </a>
                </div>
            </div>
           
            <div class="col-sm-12 padding_0 prodt-lst-show">
                <p>About IAR</p>
                <p style="padding-top:10px;font: 12px/1.5 Arial, sans-serif;font-family: Arial, Helvetica, sans-serif;">
                    Industry Analysis Reports(IAR) was officially launched by BuyerSeller.Asia, which covers Chinese Exporting 
                    Analysis and Global Importing Overview</p>
            </div>
             <div class="col-sm-12 prodt-lst-show" style="padding-top:10px;padding-bottom:20px;">
                    <img itemprop="image"  style="height:82%;width:100%;" src="{!! asset('assets/service/guide14.jpg',is_secured()) !!}" alt="" />
            </div>
            <ol class="col-sm-12 prodt-lst-show" style="padding-top:20px;padding-bottom:20px;padding-left:34px;">
                <li style="font: 12px/1.5 Arial, sans-serif;font-family: Arial, Helvetica, sans-serif;">
                    Track Product Updating
                </li>
                <li style="font: 12px/1.5 Arial, sans-serif;font-family: Arial, Helvetica, sans-serif;">
                    Authoritative Data
                </li>
                <li style="font: 12px/1.5 Arial, sans-serif;font-family: Arial, Helvetica, sans-serif;">
                    Precise Analysis
                </ol>
            </div>
            <div class="col-sm-12 prodt-lst-show" style="padding-top:20px;padding-bottom:20px;">
                <p>Contact Us</p>
                <a itemprop="url" href="#">Email:support@buyerseller.asia</a>
            </div>
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