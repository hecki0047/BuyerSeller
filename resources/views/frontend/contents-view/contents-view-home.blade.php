@extends('frontend.layouts.header_dynamic')
@section('content')

    <div style="clear:both"></div>
    <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a" ><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('FooterPage/pages/Help_Center',19,is_secured())}}" class="top-path-li-a"><span itemprop="name">Help Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    
  </div>
            <div  class="row" style="padding-top: 25px; margin-bottom:10px;">
                    <div class="category-tab" style="padding-bottom: 0"><!--category-tab-->
                        
                            <ul class="nav nav-tabs details_tab" style="background:none;border: none; margin: 0">
                                <li style="margin-left: 33.5%;border: none"><a itemprop="url" class="padding_0" href="#forbuyer" data-toggle="tab">Help center for buyers</a></li>
                                <li style="border: none"><a itemprop="url" class="padding_0" href="#supplier" data-toggle="tab">Help center for suppliers</a></li>
                            </ul>
                    </div> 
        </div> 
<div  class="row">                 
 <div class="tab-content">
    <div class="tab-pane fade" id="forbuyer" >

      <div class="category-tab">
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <?php $tab_no = 1; ?>
                @foreach($tab_menus as $tab)
                    @if($tab_no == 1)
                    <li ole="presentation" class="active"><a itemprop="url" href="#<?php echo $tab['id']; ?>" data-toggle="tab">{{ $tab->tab_name }}</a></li>
                    @else
                    <li ole="presentation" class=""><a itemprop="url" href="#<?php echo $tab['id']; ?>" data-toggle="tab">{{ $tab->tab_name }}</a></li>
                    @endif
                    <?php $tab_no++; ?>
                @endforeach
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="50">

                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2 style="padding-right:114px; background-color: none;">Help Section</h2>
                        <div class="panel-group category-products">
                            <?php if ($page_content_categorys) { ?>
                            <?php foreach ($page_content_categorys as $page_content_category) { ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <div data-toggle="collapse" data-parent="#accordian">
                                            <span class="pull-right"><i class="fa fa-angle-right"></i></span>
                                            <a target="_blank" href="{{ URL::to($page_content_category['prefix'].'/pages/'.$page_content_category['sort_name'],$page_content_category['content_id'],is_secured())}}"><?php echo $page_content_category['name']; ?> </a>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <?php } ?>
                            <?php } ?>

                            <div class="panel panel-default">
                            <?php foreach ($link_for_buyers as $link_for_buyer) { ?>

                            <div style="margin-top: 1%;" class="panel-heading">
                                    <div class="panel-title">
                                        <a itemprop="url"  data-toggle="collapse" data-parent="#accordian">
                                            <span class="pull-right"><i class="fa fa-angle-right"></i></span></a>
                                           <a target="_blank" href="{{ URL::to($link_for_buyer->prefix.'/pages/'.$link_for_buyer->sort_name,$link_for_buyer->id,is_secured())}}"> {{ $link_for_buyer->name }}</a>
                                        
                                    </div>
                                </div>
                            <?php } ?>
                          </div>

                        </div>


                    </div>

                </div>
                <div class="col-sm-9 padding-right">

                        <div class="" style="padding-left:0px;padding-bottom:0px;">
                            <p style="font-size:22px;font-weight:500;">BuyerSeller.Asia - How it works?</p></div>
                         <br>
                        <div class="">
                           
                            <table class="table table-bordered" style="padding-left:40px;">
                                <tbody>
                                  <tr>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:0px;">
                                        <a itemprop="url" target="_blank" href="{{ URL::to('user/guide',null,is_secured())}}">
                                            <h4 style="padding-left:20px;font-size:15px;">
                                               <img title="Quick Buyer Guide" style="height:64px;width:64px;" src="{!! asset('assets/helpcenter/images/buyers-guide.jpg',is_secured()) !!}" alt="buyers guide" />
                                                Quick Buyer Guide
                                            </h4>
                                        </a>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:18px;padding-left:18px;">
                                        <a itemprop="url" target="_blank" href="{{ URL::to('select/suppliers',null,is_secured()) }}">
                                            <h4 style="font-size:15px;">
                                                <img title="Contact Suppliers" style="height:64px;width:64px;" src="{!! asset('assets/helpcenter/images/contact-supplier.jpg',is_secured()) !!}" alt="contact supplier" />
                                                Contact Suppliers
                                            </h4>
                                        </a>
                                    </td> 
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:17px;padding-left:20px;">
                                        <a itemprop="url" target="_blank" href="{{ URL::to('buyer/contactsupplier',null,is_secured()) }}">
                                            <h4 style="font-size:15px;">
                                                <img title="Connect Supplier" style="height:60px;width:50px;" src="{!! asset('assets/gold/supplier-&-buyer-icon.jpg',is_secured()) !!}" alt="supplier buyer " />
                                               Connect Supplier
                                            </h4>
                                        </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:25px;padding-left:20px;">
                                        <a itemprop="url" target="_blank" href="{{ URL::to('services',null,is_secured()) }}">
                                            <div style="font-size:15px;">
                                                <img title="Payment, Inspection & Logistics" style="height:64px;width:64px;float: left; margin-right: 15px;" src="{!! asset('assets/helpcenter/bdtdc-service.png',is_secured()) !!}" alt="payment inspection logistics" />
                                                <p style="padding-top: 20px">Service</p>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:21px;padding-left:21px;">
                                        <a itemprop="url" target="_blank" href="{{ URL::to('join')}}">
                                            <h4 style="padding-left:0px; font-size:15px;">
                                                <img title="Your Account" style="height:60px;width:52px;" src="{!! asset('assets/helpcenter/images/Your-account.jpg',is_secured()) !!}" alt="Your account" />
                                                Your Account
                                            </h4>
                                        </a>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:19px;padding-left:20px;">
                                        <a itemprop="url" target="_blank" href="{{ URL::to('security-list') }}">
                                            <h4 style="font-size:15px;">
                                                <img title="Safety & Security" style="height:64px;width:64px;" src="{!! asset('assets/helpcenter/images/safety-and-security.png',is_secured()) !!}" alt="safety and security" />
                                                Safety & Security
                                            </h4>
                                        </a>
                                    </td>
                                  </tr>
                                  </tbody>
                            </table>
                        </div>
                        
                        <br>
                         <div class="" style="padding-left:0px;padding-bottom:0px;">
                             <h2 style="font-size:22px;font-weight:500;">Key Products & Services</h2></div>
                         <br>
                        <div class="">
                           
                            <table class="table table-bordered">
                                <tbody>
                                  <tr>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;">
                                        <a itemprop="url" href="{{URL::to('Policies_Rules',is_secured())}}">
                                            <div style="padding-left:0px; font-size:15px;">
                                                <div style="float:left; margin-right:10px;">
                                                <img title="Protect Account" style="height:64px;width:43px;" src="{!! asset('assets/helpcenter/images/Buyer-Protection_lock.jpg',is_secured()) !!}" alt="Buyer Protection lock" />
                                                </div>
                                                 <div style="float:left;">
                                                    <h4>Protect Account</h4>
                                                    <p style="font-size: 13px">Learn more about phishing</p>
                                                </div>
                                            </div>

                                                
                                        </a>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;">
                                        <a itemprop="url" href="{{ URL::to('wholesale') }}">
                                            <div style="padding-left:0px;font-size:15px;">
                                                <div style="float:left;margin-right:10px;">
                                                <img title="Wholesale" style="height:64px;width:43px;" src="{!! asset('assets/helpcenter/images/wholesale.png',is_secured()) !!}" alt="wholesale" />
                                                 </div>
                                               <div style="float:left;">
                                                    <h4> Wholesale</h4>
                                                    <p style="font-size: 13px">Purchase in small quantities</p>
                                                </div>
                                            </div>
                                                
                                                
                                        </a>
                                    </td> 
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;">
                                        <a itemprop="url" href="{{ URL::to('BuyerChannel/pages/trade_assurance',5) }}">
                                            <div style="padding-left:0px;font-size:15px; margin-left:-6px; padding-right:6px;">
                                                <div style="float:left;margin-right:10px;">
                                                <img title="Buyer Protection" style="height:58px;width:43px;" src="{!! asset('assets/gold/Buyer-protect.jpg',is_secured()) !!}" alt="Buyer protect" />
                                               </div>
                                                <div style="float:left;">
                                                    <h4>Buyer Protection</h4>
                                                    <p style="font-size: 13px">Available for wholesale orders</p>
                                                </div>
                                            </div>
                                               
                                        </a>
                                    </td>
                                  </tr>
                                  </tbody>
                            </table>
                        </div>
                            <div style="clear:both"></div>
    
                        <div class="content_descriptions">
                                
                                <div class="col-md-1"></div>
                                <div class="col-md-4 col-xs-6" style="padding-left:20px;padding-top:10px;">
                                    <p style="font-size:22px;font-weight:500;">Self-service</p>
                                    
                                        <p>
                                            <a itemprop="url" target="_blank" href="{{ URL::to('ServiceChannel/pages/submit_a_dispute',39) }}">Submit a complaint</a>
                                           
                                        </p>
                                        
                                        <p>
                                            <a itemprop="url" target="_blank" href="{{ URL::to('forgot_password') }}">Retrieve Password</a>
                                        </p>
                                </div>
                
                        </div>
                        <div class="col-md-2"></div>
                  
                        <div class="col-sm-4 col-xs-6" style="padding-bottom:80px;">
                            <p style="font-size:22px;font-weight:500;padding-top:10px;">More Help</p>
                                 <p>
                                    <a itemprop="url" target="_blank" href="{{ URL::to('BuyerChannel/pages/trade_answers',22) }}">Trade answers</a>
                                  </p>
                                  <p>
                                    <a itemprop="url" target="_blank" href="{{ URL::to('FooterPage/pages/Policies_Rules',22) }}">Policies & rules</a>
                                  </p>
                                  <p>
                                    <a itemprop="url" target="_blank" href="{{ URL::to('get-quotations') }}">Get Quotations</a>
                                  </p>
                                  <p>
                                    <a itemprop="url" target="_blank" href="{{ URL::to('Bdsource-home-page') }}">Bdsource for Buyer</a>
                                  </p>
                        </div>
                    <br><br>
                </div>
                

            </div>

            <div class="tab-pane fade" id="57">
                <div class="" style="padding-left:0px;padding-bottom:0px;padding-top:20px;">
                            <p style="font-size:22px;font-weight:500;padding-left:20px;padding-top:30px;">Quick guides to BuyerSeller.Asia services</p></div>
                         <br>
                        <div class="col-sm-12" style="padding-bottom:50px;padding-left:20px;padding-right:20px;">
                           
                            <table class="table table-bordered" style="padding-left:40px;">
                                  <tr>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:0px;">
                                        <a href="{{ URL::to('user/guide')}}">
                                            <h4 style="padding-left:20px;font-size:15px;">
                                               <img style="height:60px;width:70px;" src="{!! asset('assets/service/s1.png',is_secured()) !!}" alt="" />
                                                BuyerSeller.Asia Introducton
                                            </h4>
                                        </a>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:18px;padding-left:18px;">
                                        <a href="{{ URL::to('join') }}">
                                            <h4 style="font-size:15px;">
                                                <img style="height:60px;width:70px;" src="{!! asset('assets/service/s2.png',is_secured()) !!}" alt="" />
                                                Account Information
                                            </h4>
                                        </a>
                                    </td> 
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:17px;padding-left:20px;">
                                        <a href="{{ URL::to('/')}}">
                                            <h4 style="font-size:15px;">
                                                <img style="height:60px;width:70px;" src="{!! asset('assets/service/s3.png',is_secured()) !!}" alt="" />
                                                Finding Products
                                            </h4>
                                        </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:0px;">
                                        <a href="{{ URL::to('select/suppliers') }}">
                                            <h4 style="padding-left:20px;font-size:15px;">
                                               <img style="height:60px;width:70px;" src="{!! asset('assets/service/s4.png',is_secured()) !!}" alt="" />
                                                Suppliers
                                            </h4>
                                        </a>
                                    </td>
                                    
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:17px;padding-left:20px;">
                                        <a href="#">
                                            <h4 style="font-size:15px;">
                                                <img style="height:60px;width:70px;" src="{!! asset('assets/service/s6.png',is_secured()) !!}" alt="" />
                                                Payment
                                            </h4>
                                        </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:0px;">
                                        <a href="{{ URL::to('FooterPage/pages/Inspection_Service',39) }}">
                                            <h4 style="padding-left:20px;font-size:15px;">
                                               <img style="height:60px;width:70px;" src="{!! asset('assets/service/s7.png',is_secured()) !!}" alt="" />
                                                Inspection & logistics
                                            </h4>
                                        </a>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:18px;padding-left:18px;">
                                        <a href="{{ URL::to('security-list') }}">
                                            <h4 style="font-size:15px;">
                                                <img style="height:60px;width:70px;" src="{!! asset('assets/service/s8.png',is_secured()) !!}" alt="" />
                                                Safety & Security
                                            </h4>
                                        </a>
                                    </td> 
                                   
                                  </tr>
                                  <tr>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:25px;padding-left:20px;">
                                        <a href="{{ URL::to('wholesale') }}">
                                            <h4 style="font-size:15px;">
                                                <img style="height:60px;width:70px;" src="{!! asset('assets/service/s10.png',is_secured()) !!}" alt="" />
                                                Wholesaler
                                            </h4>
                                        </a>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:21px;padding-left:21px;">
                                        <a href="{{ URL::to('BuyerChannel/pages/trade_assurance',5)}}">
                                            <h4 style="padding-left:0px; font-size:15px;">
                                                 <img style="height:64px;width:50px;" src="{!! asset('assets/gold/Buyer-protect.jpg',is_secured()) !!}" alt="" />
                                                Buyer Protection
                                            </h4>
                                        </a>
                                    </td>
                                  
                                  </tr>
                            </table>
                        </div>
            </div>
            
            

            <div class="tab-pane fade" id="58">

                <div class="col-sm-8">
                    <div class="col-sm-12" style="border: 1px solid #e7e7e7;padding-left:0px;padding-right:20px;margin-bottom:10%;">
                            <div class="col-sm-12" style="padding-left:0px;">
                            <div class="col-sm-6" style="border-right: 1px solid #e7e7e7;padding-top:5%;padding-left:0px;">
                            <div class="col-sm-12">
                                <div class="col-sm-3">
                                    <img style="height:60px;width:60px;" src="{!! asset('assets/service/robot.png',is_secured()) !!}" alt="" />
                                </div>
                                <div class="col-sm-9" style="padding-top:6%;">
                                    <button type="button" class="btn btn-default">Intelligent Robot</button>
                                </div>
                                <div class="col-sm-12" style="padding-top:10px;">
                                    <p>Smart and quick response within 24 hours</p>
                                    <p>Service : 24 hours/7 days in a week</p>
                                </div>
                            </div>
                        </div>
                         <div class="col-sm-6" style="padding-top:5%;">
                            <div class="col-sm-12">
                                <div class="col-sm-3">
                                    <img style="height:60px;width:60px;" src="{!! asset('assets/service/girl.png',is_secured()) !!}" alt="" />
                                </div>
                                <div class="col-sm-9" style="padding-top:6%;">
                                    <button type="button" class="btn btn-default">Live Chat</button>
                                </div>
                                <div class="col-sm-12" style="padding-top:10px;padding-left:0px;">
                                    <p>Sign in, then type your full query in the space provided. Please include
                                    your order number if applicable</p>
                                    <p>Service : 24 hours/7 days in a week</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-12" style="border-top: 1px solid #e7e7e7;padding-top:5%;padding-bottom:5%;">
                        <div class="col-sm-2">
                            <img style="height:60px;width:60px;" src="{!! asset('assets/service/dispute.png',is_secured()) !!}" alt="" />
                        </div>
                        <div class="col-sm-10" style="padding-bottom:6%;">
                            <button type="button" class="btn btn-default">Submit a Dispute</button>
                        </div>
                        <div class="col-sm-10" style="padding-left:0px;paddinng-top:10px;">
                            <p style="padding-left:15px;">If you want to submit a dispute or report suspicious behavior, please <a href="{{ URL::to('ServiceChannel/pages/submit_a_dispute',39) }}"> click here </a></p>
                        </div>
                        
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-12" style="border-top: 1px solid #e7e7e7;border: 1px solid #e7e7e7;padding-left:20px;padding-right:20px;padding-bottom:5%;">
                        <div class="col-sm-3" style="padding-top:5%;padding-bottom:5%;">
                            <img style="height:60px;width:60px;" src="{!! asset('assets/service/contact.png',is_secured()) !!}" alt="" />
                        </div>
                        <div class="col-sm-9" style="padding-top:6%;padding-bottom:5%;">
                            <a href="{{ URL::to('FooterPage/pages/Contact_Us',20)}}"  class="btn btn-default">Contact Us</a>
                        </div>
                        <div class="col-sm-12" style="padding-top:10px;">
                        <p>If you have any issues regarding BuyerSeller, please contact us <a href="{{ URL::to('contact_message_form') }}"> here.</a></p>
                        <p>Service : 24 hours/7 days in a week .</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div> 
    <div class="tab-pane fade" id="supplier" >

    <div class="category-tab">
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                @foreach($tab_menus as $tab)
                    <li class=""><a href="#" data-toggle="tab">{{ $tab->tab_name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="35">

                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2 style="padding-right:114px; background-color: none;">Help Section</h2>
                        <div class="panel-group category-products" id="accordian">
                            <?php if ($page_content_categorys) { ?>
                            <?php foreach ($page_content_categorys as $page_content_category) { ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-parent="#accordian" href="#market-<?php echo $page_content_category['content_id']; ?>">
                                            <span class="pull-right"><i class="fa fa-angle-right"></i>
</span>
                                            <?php echo $page_content_category['name']; ?> 
                                        </a>
                                    </h4>
                                </div>
                               
                            </div>
                            <?php } ?>
                            <?php } ?>

                            <div class="panel panel-default">
                            <?php foreach ($link_for_suppliers as $link_for_buyer) { ?>

                            <div style="margin-top: 1%;" class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-parent="#accordian" target="_blank" href="{{ URL::to($link_for_buyer->prefix.'/pages/'.$link_for_buyer->sort_name,$link_for_buyer->id,is_secured())}}">
                                            <span class="pull-right"><i class="fa fa-angle-right"></i></span>
                                            {{ $link_for_buyer->name }}
                                        </a>
                                    </h4>
                                </div>
                            <?php } ?>
                          </div>

                        </div>


                    </div>
                </div>
                <div class="col-sm-9 padding-right">

                        <div class="" style="padding-left:0px;padding-bottom:0px;">
                            <p style="font-size:22px;font-weight:500"><a href="{{URL::to('BuyerChannel/pages/why_bdtdc','6', is_secured())}}">BuyerSeller.Asia - How it works?</a></p></div>
                         <br>
                        <div class="">
                            <table class="table table-bordered" style="padding-left:40px;">
                                  <?php $i = 0; ?>
                                  <tr>
                                  @foreach ($bdtdc_pages_data as $bdtdc_page_data)
                                    <?php if($i % 3 != 0 || $i == 0){ ?>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                        <a href="{!! URL::to($bdtdc_page_data->prefix.'/help_center/'.$bdtdc_page_data->slug,$bdtdc_page_data->id,is_secured()) !!}">
                                            <h4 style="padding-left:20px;font-size:15px;">
                                               <img style="height:40px;width:50px;" src="{!! asset('assets/helpcenter/images/'.$bdtdc_page_data->image,is_secured()) !!}" alt="" />
                                                {!! $bdtdc_page_data->name !!}
                                            </h4>
                                        </a>
                                    </td>
                                    <?php } else{ ?>
                                    </tr><tr><td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                        <a href="{!! URL::to($bdtdc_page_data->prefix.'/help_center/'.$bdtdc_page_data->slug,$bdtdc_page_data->id,is_secured()) !!}">
                                            <h4 style="padding-left:20px;font-size:15px;">
                                               <img style="height:40px;width:50px;" src="{!! asset('assets/helpcenter/images/'.$bdtdc_page_data->image,is_secured()) !!}" alt="" />
                                                {!! $bdtdc_page_data->name !!}
                                            </h4>
                                        </a>
                                    </td>
                                    <?php } ?>
                                    <?php $i++; ?>
                                  @endforeach
                                  </tr>
                                 
                            </table>
                        </div>
                        
                        <br>
                     
                            <div style="clear:both"></div>
    
                        <div class="content_descriptions">
                            <div class="col-md-7" style="background-color:white;padding-left:13px;padding-top:10px;">
                                    <p style="font-size:22px;font-weight:500;">Self-service</p>
                                   
                                        <ul>
                                        <li>
                                            <a href="{{URL::to('ServiceChannel/pages/submit_a_dispute','39', is_secured())}}">Submit a complaint</a>
                                           
                                        </li>
                                        
                                        <li>
                                            <a href="{{URL::to('forgot_password', is_secured())}}">Retrieve Password</a>
                                        </li>
                                    </ul>  
                                   
                                 
                                </div>
                                <div class="col-md-5" style="padding-left:20px;padding-top:10px;">
                                    <p style="font-size:22px;font-weight:500;">More Help</p>
                                    <ul>
                                        <li>
                                            <a href="{{URL::to('SupplierChannel/pages/suppliers_memebership',23, is_secured())}}">Supplier Memberships</a>
                                        </li>
                                        <li>
                                            <a href="{{URL::to('FooterPage/pages/Learning_Center','32', is_secured())}}">Learning Center</a>
                                        </li>
                                        <li>
                                            <a href="{{URL::to('FooterPage/pages/Training_Center','33', is_secured())}}">Training Center</a>
                                        </li>
                                        <li>
                                            <a href="{{URL::to('SupplierChannel/pages/seller_channel','40', is_secured())}}">Seller Channel</a>
                                        </li>
                                        <li>
                                            <a href="{{URL::to('bdtdc/product-sourcing', is_secured())}}">Bdsource for supplier</a>
                                        </li>
                                        
                                   </ul>
           
                                </div>
                
                        </div>
                        <div style="clear:both"></div>
                        <hr>
                   <br>
  
                </div>
            </div>
        </div>
        </div>
        
    </div>
   </div>
</div>


        @stop
        @section('scripts')
            <script type="text/javascript">
                $(function() {
                    /**
                     * the element
                     */
                    var $ui         = $('#ui_element');

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

                var current_url = window.location.href;
                var current_url_array = current_url.split('/');
                if($.inArray('for_supplier', current_url_array) == 5){
                    $('a[href="#supplier"]').click();
                    // $('.supplier').click();
                }
                else{
                    $('a[href="#forbuyer"]').click();
                }

                $('a[href="#supplier"]').click(function(){
                    var base_url = window.location.origin;
                    var for_supplier_link = $('div.mainmenu.pull-right ul li ul li a.for_supplier').attr('href');
                    var for_supplier_link_param = for_supplier_link.split('/').slice(-1)[0];
                    var get_data_url = base_url+'/help_center_supplier_data/suppliers_help_data/'+for_supplier_link_param;
                    // alert (get_data_url);
                    

                });

                // 
                // alert (for_supplier_link);
                
                
                
            </script>
@stop