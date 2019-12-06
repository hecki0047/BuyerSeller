@extends('frontend.layouts.header_dynamic')

    @section('page_css')
    <link property='stylesheet' href="{!! asset('assets/frontend/css/verified-suppliers.css',is_secured()) !!}" rel="stylesheet">
    @endsection
@section('content')
<div style="clear:both"></div>
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;">
                        <li class="top-path-li"><a href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"><a href="{{URL::to('FooterPage/pages/Help_Center',19),is_secured()}}" class="top-path-li-a">Help Center<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"><a href="{{URL::to('security-list',null,is_secured())}}" class="top-path-li-a">Safety & Security<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"><a href="{{URL::to('BuyerChannel/pages/accredited_suppliers',16),is_secured()}}" class="top-path-li-a">Verification Services<i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    
  </div>
<!-- <div class="row" style="background-color:#fff!important;margin-top:38px;margin-bottom:10px;">
    <div class="col-sm-12" style="padding-top:20px;">
        <div class="col-sm-2">
            <a href="#" style="margin-left: -14px;color: #06c;font-size: 14px; padding-left: 15px;">Help Center > </a>
            
        </div>
        <div class="col-sm-2">
            <a href="#" style="margin-left: -63%;color: #06c;font-size: 14px; padding-left: 15px"> Safety & Security > </a>
            
        </div>
        <div class="col-sm-2 padding_0">
            <a href="#" style="padding-left:0%;margin-left: -70%;color: #06c;font-size: 14px;padding-left: 15px"> Verification Services</a>
        </div>
        
    </div> -->
  <div class="row padding_0" style="background-color:#fff!important;margin-bottom:25px;">
    <div class="col-sm-12">
        <div class="col-sm-3">
        <ul class="nav nav-pills nav-stacked" style=" margin-top: 35px;">
          <!-- <li style="font-size: 16px;font-weight: bold;height: 20px;margin: 7px 0;">Account Security</li> -->

          <!-- <li ><a style="color: #747474;font-size: 14px; padding: 5px 15px;" href="#">Spoof email</a></li> -->
          <!-- <li><a style="color: #747474;font-size: 14px; padding: 5px 15px;" href="#">Account protection</a></li> -->

          <li style="font-size: 16px;font-weight: bold;height: 20px;margin: 7px 0;">Supplier Selection</li>

          <li  class="active"><a style="color: #747474;font-size: 14px; padding: 5px 15px;" href="#">Supplier verification</a></li>
          <!-- <li><a style="color: #747474;font-size: 14px; padding: 5px 15px;" href="#">Minimize Sourcing Risk</a></li> -->

          <li style="font-size: 16px;font-weight: bold;height: 20px;margin: 7px 0;">Payment Safety</li>

          <li><a href="{{ URL::to('FooterPage/pages/Secure_Payment',37) }}" style="color: #747474;font-size: 14px; padding: 5px 15px;">More Payment Methods</a></li>

          <li style="font-size: 16px;font-weight: bold;height: 20px;margin: 7px 0;">Quality Assurance</li>

          <li><a href="{{ URL::to('BuyerChannel/pages/inspection_service',19,is_secured()) }}" style="color: #747474;font-size: 14px; padding: 5px 15px;">Inspection service</a></li>

          <li style="font-size: 16px;font-weight: bold;height: 20px;margin: 7px 0;">Fraud & Dispute</li>

          <li><a href="{{ URL::to('ServiceChannel/pages/submit_a_dispute',39) }}" style="color: #747474;font-size: 14px; padding: 5px 15px;">Fraud & Dispute Rules</a></li>
        </ul>
            <!-- <div class="col-sm-12 padding_0" style="margin-top:15%;">
                <p style="font-size: 18px;font-weight: bold;height: 20px;margin-bottom: 14%;">Account Security</p>
                <p><a href="#" style="color: #747474;font-size: 14px;">Spoof email</a></p>
                <p><a href="#" style="color: #747474;font-size: 14px;">Account protection</a></p>
            </div>
            <div class="col-sm-12 padding_0" style="margin-top:15%;">
                <p style="font-size: 18px;font-weight: bold;height: 20px;margin-bottom: 14%;">Supplier Selection</p>
                <p><a href="#" style="color: #06c;font-size: 14px;">Supplier verification</a></p>
                <p><a href="#" style="color: #06c;font-size: 14px;">Minimize Sourcing Risk</a></p>
               
            </div>
            <div class="col-sm-12 padding_0" style="margin-top:15%;">
                <p style="font-size: 18px;font-weight: bold;height: 20px;margin-bottom: 14%;">Payment Safety</p>
                <p><a href="{{ URL::to('FooterPage/pages/Secure_Payment',37) }}" style="color: #747474;font-size: 14px;">More Payment Methods</a></p>
            </div>
            <div class="col-sm-12 padding_0" style="margin-top:15%;">
                <p style="font-size: 18px;font-weight: bold;height: 20px;margin-bottom: 14%;">Quality Assurance</p>
                <p><a href="{{ URL::to('FooterPage/pages/Inspection_Service',39) }}" style="color: #747474;font-size: 14px;">Inspection service</a></p>
            </div>
            <div class="col-sm-12 padding_0" style="margin-top:15%;">
                <p style="font-size: 18px;font-weight: bold;height: 20px;margin-bottom: 14%;">Fraud & Dispute</p>
                <p><a href="{{ URL::to('ServiceChannel/pages/submit_a_dispute',39) }}" style="color: #747474;font-size: 14px;">Fraud & Dispute Rules</a></p> 
            </div> -->
        </div>
        <div class="col-sm-9">
            <div class="col-sm-12" style="margin-top:5%;">
                <p style="height: 22px;line-height: 22px;font-size: 22px;color: #333;margin-bottom: 20px;padding-left:0px;margin-left: -2%;">
                   BuyerSeller Supplier Verification Services
                </p>
            </div>
            <div class="col-sm-12" style="border: 1px solid #e6e6e6;margin-top:20px;margin-bottom:20px;">
                <p style="color: #666666;font-size: 14px;line-height: 18px;margin-bottom: 0;padding-top:20px;padding-bottom:20px;line-height:25px;">
                   The confirmation of dealers on BuyerSeller serves to shield purchasers by guaranteeing that venders

are legitimately registered organizations. Examinations of the organizations are done by both

BuyerSeller and/or independent verifying bodies. BuyerSeller does not confirm the realness of any

products recorded available to be purchased by buyers (counting without confinement to &quot;Gold

Suppliers&quot; or &quot;Evaluated Suppliers&quot;) or the power of merchants to offer any recorded products

available for sale. BuyerSeller does not and can&#39;t promise the realness or validity of any of the products

recorded that is available to be sold by merchants.
                </p>
            </div>
            <div class="col-sm-12" style="margin-top:5%;">
                <p style="height: 22px;line-height: 22px;font-size: 22px;color: #333;margin-bottom: 20px;padding-left:0px;margin-left: -2%;">
                    Verification Types
                </p>
            </div>
            <div class="col-sm-12" style="border: 1px solid #e6e6e6;">
                <p style="font-size: 18px;line-height: 18px;position: relative;padding-left: 20px;padding-top:20px;">
                    <img style="height:45px;width:7%;" src="{!!asset('assets/gold/A&V-Check.png',is_secured()) !!}" alt="Check" />
                    A&V Check
                </p>
                <p style="font: inherit;color: #666666;font-size: 12px;line-height: 18px;margin-bottom: 0;padding top:30px;padding-left:20px;padding-bottom:20px;line-height:25px;">
                   Gold Suppliers who have passed confirmation and undergone examination by BuyerSeller and

also a third-party verification company are verified as A&amp;V Checked suppliers. All legitimate

business licenses and contact persons are confirmed for the individuals who have been A&amp;V

Checked.
                </p>
            </div>
            <div class="col-sm-12" style="border: 1px solid #e6e6e6;border-top:none;">
                <p style="font-size: 18px;line-height: 18px;position: relative;padding-left: 20px;padding-top:20px;">
                    <img style="    height: 45px;width: 7%;" src="{!!asset('assets/helpcenter/Hand-Shake-Icon.png',is_secured())!!}" alt="Onsite Check" />
                    Onsite Check
                </p>
                <p style="font: inherit;color: #666666;font-size: 12px;line-height: 18px;margin-bottom: 0;padding top:30px;padding-left:20px;padding-bottom:20px;line-height:25px;">
                    Onsite Check is a confirmation procedure for Gold Suppliers. The supplier&#39;s organization&#39;s sites

are checked by BuyerSeller&#39;s staff to guarantee onsite operations subside there. The suppliers&#39;

lawful status and other associated data are then affirmed by a third-party verification agency.  
                </p>
                <!-- <p style="padding-bottom:20px;">
                    <a href="#" style="color: #1686cc;font: inherit;padding-left:20px;">Learn more></a>
                </p> -->
                
            </div>
            <div class="col-sm-12" style="border: 1px solid #e6e6e6;border-top:none;margin-bottom:5%;">
                <p style="font-size: 18px;line-height: 18px;position: relative;padding-left: 20px;padding-top:20px;">
                    <img style=" height: 42px;width: 6%;" src="{!!asset('assets/gold/assecedv.jpg',is_secured())!!}" alt="Assessed Supplier" />
                   Assessed Supplier
                </p>
                <p style="font: inherit;color: #666666;font-size: 12px;line-height: 18px;margin-bottom: 0;padding top:30px;padding-left:20px;padding-bottom:20px;line-height:25px;">
                    Assessed Supplier is a BuyerSeller administration furnishing you with completely autonomous

and third-party verification confirmation of your potential suppliers. We commission a few

agencies in view of their worldwide notoriety and demonstrated believability to test the cases

made by suppliers. For purchasers, this implies intuition and trust are constructed just in light of

solid proof. Evaluated Supplier incorporates Assessment Reports Verified Videos and Verified

Main Products.
                </p>
                <!-- <p style="padding-bottom:20px;">
                    <a href="#" style="color: #1686cc;font: inherit;padding-left:20px;">Learn more></a>
                </p> -->
            </div>
            <div class="col-sm-12 padding_0" style="margin-bottom:20px;">
                <p style="height: 22px;line-height: 22px;font-size: 22px;color: #333;margin-bottom: 20px">
                   Main Features of Each Verification Service
                </p>
            </div>
            <div class="col-sm-12 padding_0">
                <table class="table table-bordered" style="padding-left:40px;">
                                  <tr>
                                      <th class="col-sm-4" style=" height:10%;border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                          <p style="color:#FAFAFA;font-size: 18px;padding-left:20px;color: #333;">Verification Services</p>
                                      </th>
                                      <th class="col-sm-4" style=" height:10%;border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                          <p style="color:#FAFAFA;font-size: 18px;padding-left:20px;color: #333;">Inspection and verifying bodies</p>
                                      </th>
                                      <th class="col-sm-4" style=" height:10%;border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                          <p style="color:#FAFAFA;font-size: 18px;padding-left:20px;color: #333;">Required/Optional</p>
                                      </th>
                                  </tr>
                                  <tr>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                        <p style="font-size: 18px;line-height: 18px;position: relative;padding-left: 9%;padding-top:20px;">
                                            <img style="    height: 42px;width: 20%;" src="{!!asset('assets/gold/A&V-Check.png',is_secured())!!}" alt="A&V Check" />
                                            A&V Check
                                        </p>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:18px;padding-left:18px;">
                                       <p style="color: #666666;font-size: 14px;line-height: 18px;margin-bottom: 0;">
                                           Third-party verification agency
                                       </p>
                                    </td> 
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:17px;padding-left:20px;">
                                        <p style="color: #666666;font-size: 14px;line-height: 18px;margin-bottom: 0;">
                                           Mandatory for all Global Gold Suppliers
                                       </p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:25px;padding-left:1%;">
                                       <p style="font-size: 18px;line-height: 18px;position: relative;padding-left: 20px;padding-top:20px;">
                                            <img style="height: 45px;width: 20%;" src="{!!asset('assets/helpcenter/Hand-Shake-Icon.png',is_secured())!!}" alt="" />
                                            Onsite Check
                                       </p>
                                                </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:21px;padding-left:21px;">
                                        <p style="color: #666666;font-size: 14px;line-height: 18px;margin-bottom: 0;">
                                          Third-party verification agency &amp; BuyerSeller personnel
                                       </p>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:19px;padding-left:20px;">
                                      <p style="color: #666666;font-size: 14px;line-height: 18px;margin-bottom: 0;line-height:25px;">
                                           Mandatory for all Gold Suppliers in Bangladesh and Indian Gold Suppliers
                                       </p>
                                    </td>
                                  </tr>
                                   <tr>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:25px;padding-left:1%;">
                                        <p style="font-size: 18px;line-height: 18px;position: relative;padding-left: 20px;padding-top:20px;">
                                            <img style="height: 42px;width:17%;" src="{!!asset('assets/gold/assecedv.jpg',is_secured())!!}" alt="Onsite Check" />
                                            Assessed Supplier
                                        </p>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:21px;padding-left:21px;">
                                       <p style="color: #666666;font-size: 14px;line-height: 18px;margin-bottom: 0;line-height:25px;">
                                         A third-party agency, such as TÜV Rheinland or Bureau Veritas holds the inspection and verification process.
                                       </p>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:19px;padding-left:20px;">
                                       <p style="color: #666666;font-size: 14px;line-height: 18px;margin-bottom: 0;line-height:25px;">
                                          Optional for all Gold Suppliers in Bangladesh and Indian Gold Suppliers
                                       </p>
                                    </td>
                                  </tr>
                            </table>
            </div>
            <div class="col-sm-12 padding_0" style="margin-bottom:20px;">
                <p style="color: #666666;font-size: 12px;line-height: 18px;margin-bottom: 0;line-height:25px;">
                   To be eligible as a Gold Supplier, suppliers on BuyerSeller must go through and pass the onsite check and A&amp;V check. The logo for Gold supplier will be displayed on the company profile of every gold supplier member and appears like this: <img src="{!!asset('assets/gold/gold-member-profile.jpg',is_secured())!!}" alt="Assessed Supplier"> <b>Gold supplier.</b>
                </p>
                <!-- <p>
                    <a href="#" style="color: #1686cc;">Learn more></a>
                </p> -->
            </div>


<div class="row ">
      
      <div class="col-md-12 button_padding text-center">
        <a itemprop="url" href="{{URL::to('SupplierChannel/pages/suppliers_memebership','23', is_secured())}}" class="btn btn-primary center-block btn-join">Verify</a>
      </div>
      
    </div>


            <div class="col-sm-12 padding_0" style="margin-bottom:20px;">
                <p style="height: 22px;line-height: 22px;font-size: 22px;color: #333;margin-bottom: 20px">
                    What Supplier Information is Verified?
                </p>
            </div>
            <div class="col-sm-12 padding_0">
                <table class="table table-bordered" style="padding-left:40px;">
                                  <tr>
                                      <th class="col-sm-5" style=" height:10%;border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                          <p style="color:#FAFAFA;font-size: 18px;padding-left:20px;color: #333;">Verified information </p>
                                      </th>
                                      <th class="col-sm-2" style=" height:10%;border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                          <p style="font-size: 18px;line-height: 18px;position: relative;padding-left: 27%;padding-top:20px;">
                                            <img style="height: 35px;width: 35%;" src="{!!asset('assets/gold/A&V-Check.png',is_secured())!!}" alt="A&V Check" />
                                            A&V Check
                                          </p>
                                      </th>
                                      <th class="col-sm-2" style=" height:10%;border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                          <p style="font-size: 18px;line-height: 18px;position: relative;padding-left: 22%;padding-top:20px;">
                                            <img style="height: 35px;width: 35%;" src="{!!asset('assets/helpcenter/Hand-Shake-Icon.png',is_secured())!!}" alt="Onsite Check" />
                                            Onsite Check
                                          </p>
                                      </th>
                                      <th class="col-sm-3" style=" height:10%;border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                          <p style="font-size: 18px;line-height: 18px;position: relative;padding-left: 22%;padding-top:20px;">
                                            <img style="height: 32px;width: 25%;" src="{!!asset('assets/gold/assecedv.jpg',is_secured())!!}" alt="Assessed Supplier" />
                                            Assessed Supplier
                                          </p>
                                      </th>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 15px;font-size:9px;font-weight:700;float: none !important;margin:0px;">
                                        Business licens
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="height:40px;border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                      <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                        Contact information
                                      </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:21px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                      <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                   <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:12px;float: none !important;font-size:9px;font-weight:700;margin:0px;">
                                        Business type (e.g. trading company, manufacturer or both)
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:21px;">
                                       
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                       <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;float: none !important;font-size:9px;font-weight:700;margin:0px;">
                                        Company/Factory location
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                        Ownership status of the premises 
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                        Photos of supplier's operations  
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                         <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                        Certifications from subsidiaries, partners, and contractors  
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;float: none !important;font-size:9px;font-weight:700;margin:0px;">
                                        Main product lines/services   
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                       Certification   
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                       Human resource   
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                       Production/Export capacity   
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                       International trade capabilities   
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                       Production process management   
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                         <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                         R&D abilities    
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                         Company development/expansion plans     
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                         <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                         Production flow     
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                         Verified Main Products      
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-5" style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                         Verified Videos       
                                        </p>
                                    </td>
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td class="col-md-2" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td class="col-md-3" style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                            </table>
            </div>
          <!--   <div class="col-sm-12 padding_0" style="margin-top:20px;margin-bottom:8%;">
                <p style="font-weight: bold;color: #333;font-size:20px;">More Information On :</p>
                <ul style="padding-left:30%;">
                    <li><a href="#" style="color: #1686cc;font-size: 14px;">How to get Assessed Suppliers?</a></li>
                    <li><a href="#" style="color: #1686cc;font-size: 14px;">Can all Gold Suppliers be trusted? </a></li>
                    <li><a href="#" style="color: #1686cc;font-size: 14px;">How to detect Onsite checked suppliers? </a></li>
                    <li><a href="#" style="color: #1686cc;font-size: 14px;">How do I find out if a supplier is trustworthy? </a></li>
                    
                </ul>
            </div> -->
            
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
                    var $ui= $('#ui_element');

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