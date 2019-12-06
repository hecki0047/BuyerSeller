@extends('mobile-view.layout.master_m')
	@section('content')

	<div style="clear:both"></div>
<section>
   <div class="container">
  <div class="row padding_0" style="background-color:#fff!important;margin-bottom:25px;">
    <div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
      <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block;">
        <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
      </a>
    </div>
    
    <div class="col-xs-12 padding_0">
      <button class="btn btn-default" onclick="window.history.back();" style="width:100%;text-align:center;color: #666;padding:10px;font-size: 20px;padding-top:17px;"><i class="fa fa-reply-all" style="font-size: 30px;" aria-hidden="true"></i></button>
    </div>
    <div class="col-xs-12">
        <ul class="nav nav-pills nav-stacked" style=" margin-top: 35px;">
          <li style="font-size: 16px;font-weight: bold;height: 20px;margin: 7px 0;">Account Security</li>

          <li ><a style="color: #747474;font-size: 14px; padding: 5px 15px;" href="#">Spoof email</a></li>
          <li><a style="color: #747474;font-size: 14px; padding: 5px 15px;" href="#">Account protection</a></li>

          <li style="font-size: 16px;font-weight: bold;height: 20px;margin: 7px 0;">Supplier Selection</li>

          <li><a style="color: #747474;font-size: 14px; padding: 5px 15px;" href="#">Supplier verification</a></li>
          <li><a style="color: #747474;font-size: 14px; padding: 5px 15px;" href="#">Minimize Sourcing Risk</a></li>

          <li style="font-size: 16px;font-weight: bold;height: 20px;margin: 7px 0;">Payment Safety</li>

          <li><a href="{{ URL::to('FooterPage/pages/Secure_Payment',37) }}" style="color: #747474;font-size: 14px; padding: 5px 15px;">More Payment Methods</a></li>

          <li style="font-size: 16px;font-weight: bold;height: 20px;margin: 7px 0;">Quality Assurance</li>

          <li><a href="{{ URL::to('FooterPage/pages/Inspection_Service',39) }}" style="color: #747474;font-size: 14px; padding: 5px 15px;">Inspection service</a></li>

          <li style="font-size: 16px;font-weight: bold;height: 20px;margin: 7px 0;">Fraud & Dispute</li>

          <li><a href="{{ URL::to('ServiceChannel/pages/submit_a_dispute',39) }}" style="color: #747474;font-size: 14px; padding: 5px 15px;">Fraud & Dispute Rules</a></li>
        </ul>
           
        </div>

            <div class="col-xs-12" style="margin-top:5%;">
                <p style="height: 22px;line-height: 22px;font-size: 22px;color: #333;margin-bottom: 20px;padding-left:0px;margin-left: -2%;">
                   Bdtdc.com&#39;s Supplier Verification Services
                </p>
            </div>
      <div class="col-xs-12" style="border: 1px solid #e6e6e6;margin-top:20px;margin-bottom:20px;">
                <p style="color: #666666;font-size: 14px;line-height: 18px;margin-bottom: 0;padding-top:20px;padding-bottom:20px;line-height:25px;">
                   The confirmation of dealers on bdtdc.com serves to shield purchasers by guaranteeing that venders

are legitimately registered organizations. Examinations of the organizations are done by both

bdtdc.com and/or independent verifying bodies. bdtdc does not confirm the realness of any

products recorded available to be purchased by buyers (counting without confinement to &quot;Gold

Suppliers&quot; or &quot;Evaluated Suppliers&quot;) or the power of merchants to offer any recorded products

available for sale. BDTDC does not and can&#39;t promise the realness or validity of any of the products

recorded that is available to be sold by merchants.
                </p>
       </div>
      <div class="col-xs-12" style="margin-top:5%;">
        <p style="height: 22px;line-height: 22px;font-size: 22px;color: #333;margin-bottom: 20px;padding-left:0px;margin-left: -2%;">
                    Verification Types
          </p>
    </div>
            <div class="col-xs-12" style="border: 1px solid #e6e6e6;">
                <p style="font-size: 18px;line-height: 18px;position: relative;padding-left: 20px;padding-top:20px;">
                    <img style="height:45px;width:7%;" src="{!!asset('assets/gold/A&V-Check.png',is_secured()) !!}" alt="Check" />
                    A&V Check
                </p>
                <p style="font: inherit;color: #666666;font-size: 12px;line-height: 18px;margin-bottom: 0;padding top:30px;padding-left:20px;padding-bottom:20px;line-height:25px;">
                   Gold Suppliers who have passed confirmation and undergone examination by bdtdc.com and

also a third-party verification company are verified as A&amp;V Checked suppliers. All legitimate

business licenses and contact persons are confirmed for the individuals who have been A&amp;V

Checked.
                </p>
            </div>
            <div class="col-xs-12" style="border: 1px solid #e6e6e6;border-top:none;">
                <p style="font-size: 18px;line-height: 18px;position: relative;padding-left: 20px;padding-top:20px;">
                    <img style="    height: 45px;width: 7%;" src="{!!asset('assets/helpcenter/Hand-Shake-Icon.png',is_secured())!!}" alt="Onsite Check" />
                    Onsite Check
                </p>
                <p style="font: inherit;color: #666666;font-size: 12px;line-height: 18px;margin-bottom: 0;padding top:30px;padding-left:20px;padding-bottom:20px;line-height:25px;">
                    Onsite Check is a confirmation procedure for Gold Suppliers. The supplier&#39;s organization&#39;s sites

are checked by bdtdc.com&#39;s staff to guarantee onsite operations subside there. The suppliers&#39;

lawful status and other associated data are then affirmed by a third-party verification agency.  
                </p>
                <!-- <p style="padding-bottom:20px;">
                    <a href="#" style="color: #1686cc;font: inherit;padding-left:20px;">Learn more></a>
                </p> -->
                
            </div>
            <div class="col-xs-12" style="border: 1px solid #e6e6e6;border-top:none;margin-bottom:5%;">
                <p style="font-size: 18px;line-height: 18px;position: relative;padding-left: 20px;padding-top:20px;">
                    <img style=" height: 42px;width: 6%;" src="{!!asset('assets/gold/assecedv.jpg',is_secured())!!}" alt="Assessed Supplier" />
                   Assessed Supplier
                </p>
                <p style="font: inherit;color: #666666;font-size: 12px;line-height: 18px;margin-bottom: 0;padding top:30px;padding-left:20px;padding-bottom:20px;line-height:25px;">
                    Assessed Supplier is a bdtdc.com administration furnishing you with completely autonomous

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
          <div class="col-xs-12" padding_0" style="margin-bottom:20px;">
                <p style="height: 22px;line-height: 22px;font-size: 22px;color: #333;margin-bottom: 20px">
                   Main Features of Each Verification Service
                </p>
            </div>
            <div class="col-xs-12" padding_0">
                <table class="table table-bordered">
                                  <tr>
                                      <th  style=" height:10%;border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                          <p style="color:#FAFAFA;font-size: 14px;color: #333; text-align: center;">Verification Services</p>
                                      </th>
                                      <th  style=" height:10%;border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                          <p style="color:#FAFAFA;font-size: 14px;text-align: center;color: #333;">Inspection and verifying bodies</p>
                                      </th>
                                      <th  style=" height:10%;border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                          <p style="color:#FAFAFA;font-size: 14px;text-align: center;color: #333;">Required/Optional</p>
                                      </th>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;">
                                        <p style="font-size: 18px;line-height: 18px;position: relative;padding-left: 10px;padding-top:20px;">
                                            <img style="    height: 42px;width: 20%;" src="{!!asset('assets/gold/A&V-Check.png',is_secured())!!}" alt="A&V Check" />
                                            A&V Check
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:18px;">
                                       <p style="color: #666666;font-size: 14px;line-height: 18px;margin-bottom: 0;">
                                           Third-party verification agency
                                       </p>
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:17px;">
                                        <p style="color: #666666;font-size: 14px;line-height: 18px;margin-bottom: 0;">
                                           Mandatory for all Global Gold Suppliers
                                       </p>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:25px;padding-left:1%;">
                                       <p style="font-size: 18px;line-height: 18px;position: relative;padding-top:20px;">
                                            <img style="height: 45px;width: 20%;" src="{!!asset('assets/helpcenter/Hand-Shake-Icon.png',is_secured())!!}" alt="" />
                                            Onsite Check
                                       </p>
                                                </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:21px;">
                                        <p style="color: #666666;font-size: 14px;line-height: 18px;margin-bottom: 0;">
                                          Third-party verification agency &amp; bdtdc.com personnel
                                       </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:19px;">
                                      <p style="color: #666666;font-size: 14px;line-height: 18px;margin-bottom: 0;line-height:25px;">
                                           Mandatory for all Gold Suppliers in Bangladesh and Indian Gold Suppliers
                                       </p>
                                    </td>
                                  </tr>
                                   <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:25px;">
                                        <p style="font-size: 18px;line-height: 18px;position: relative;padding-left: 10px;padding-top:20px;">
                                            <img style="height: 42px;width:17%;" src="{!!asset('assets/gold/assecedv.jpg',is_secured())!!}" alt="Onsite Check" />
                                            Assessed Supplier
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:21px;">
                                       <p style="color: #666666;font-size: 14px;line-height: 18px;margin-bottom: 0;line-height:25px;">
                                         A third-party agency, such as TÜV Rheinland or Bureau Veritas holds the inspection and verification process.
                                       </p>
                                    </td>
                                    <td class="col-xs-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:19px;">
                                       <p style="color: #666666;font-size: 14px;line-height: 18px;margin-bottom: 0;line-height:25px;">
                                          Optional for all Gold Suppliers in Bangladesh and Indian Gold Suppliers
                                       </p>
                                    </td>
                                  </tr>
                            </table>
            </div>
            <div class="col-xs-12 padding_0" style="margin-bottom:20px;">
                <p style="color: #666666;font-size: 12px;line-height: 18px;margin-bottom: 0;line-height:25px;">
                   To be eligible as a Gold Supplier, suppliers on bdtdc.com must go through and pass the onsite check and A&amp;V check. The logo for Gold supplier will be displayed on the company profile of every gold supplier member and appears like this: <img src="{!!asset('assets/gold/New-Icons-2.jpg',is_secured())!!}" alt="Assessed Supplier"> <b>Gold supplier.</b>
                </p>
                <!-- <p>
                    <a href="#" style="color: #1686cc;">Learn more></a>
                </p> -->
            </div>
            <div class="col-xs-12 padding_0" style="margin-bottom:20px;">
                <p style="height: 22px;line-height: 22px;font-size: 22px;color: #333;margin-bottom: 20px">
                    What Supplier Information is Verified?
                </p>
            </div>
            <div class="col-xs-12 padding_0">
                <table class="table table-bordered" >
                                  <tr>
                                      <th style=" height:10%;border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                          <p style="color:#FAFAFA;font-size: 14px;padding-left:10px;color: #333;">Verified information </p>
                                      </th>
                                      <th  style=" height:10%;border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                          <p style="font-size: 14px;line-height: 18px;position: relative;padding-left: 10px;padding-top:20px;">
                                            <img style="height: 35px;width: 35%;" src="{!!asset('assets/gold/A&V-Check.png',is_secured())!!}" alt="A&V Check" />
                                            A&V Check
                                          </p>
                                      </th>
                                      <th style=" height:10%;border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                          <p style="font-size: 14px;line-height: 18px;position: relative;padding-left: 10px;padding-top:20px;">
                                            <img style="height: 35px;width: 35%;" src="{!!asset('assets/helpcenter/Hand-Shake-Icon.png',is_secured())!!}" alt="Onsite Check" />
                                            Onsite Check
                                          </p>
                                      </th>
                                      <th  style=" height:10%;border:1px solid rgba(0,0,0,.1)!important;padding-bottom:9px;padding-left:0px;">
                                          <p style="font-size: 14px;line-height: 18px;position: relative;padding-left:10px;padding-top:20px;">
                                            <img style="height: 32px;width: 25%;" src="{!!asset('assets/gold/assecedv.jpg',is_secured())!!}" alt="Assessed Supplier" />
                                            Assessed Supplier
                                          </p>
                                      </th>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 15px;font-size:9px;font-weight:700;float: none !important;margin:0px;">
                                        Business licens
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="height:40px;border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                      <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                        Contact information
                                      </p>
                                    </td>
                                    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-left:21px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                      <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                   <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:12px;float: none !important;font-size:9px;font-weight:700;margin:0px;">
                                        Business type (e.g. trading company, manufacturer or both)
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:21px;">
                                       
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                       <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;float: none !important;font-size:9px;font-weight:700;margin:0px;">
                                        Company/Factory location
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                        Ownership status of the premises 
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                        Photos of supplier's operations  
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                         <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                        Certifications from subsidiaries, partners, and contractors  
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;float: none !important;font-size:9px;font-weight:700;margin:0px;">
                                        Main product lines/services   
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                       Certification   
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                       Human resources   
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                       Production/Export capacity   
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                       International trade capabilities   
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                       Production process management   
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                         <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                         R&D abilities    
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                         Company development/expansion plans     
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                         <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                         Production flow     
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                         Verified Main Products      
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding:0px;">
                                        <p style="padding: 5px 13px;font-size:9px;font-weight:700;margin:0px;float: none !important;">
                                         Verified Videos       
                                        </p>
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:18px;">
                                       
                                    </td> 
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        
                                    </td>
                                    <td  style="border:1px solid rgba(0,0,0,.1)!important;padding-left:20px;">
                                        <i class="fa fa-check" style="padding-left: 31%;font-size: 20px;color: rgb(76, 158, 217);"></i>
                                    </td>
                                  </tr>
                            </table>
            </div>
          <!--   <div class="col-sm-12 padding_0" style="margin-top:20px;margin-bottom:8%;">
                <p style="font-weight: bold;color: #333;font-size:20px;">More Information On :</p>
                <ul style="">
                    <li><a href="#" style="color: #1686cc;font-size: 14px;">How to get Assessed Suppliers?</a></li>
                    <li><a href="#" style="color: #1686cc;font-size: 14px;">Can all Gold Suppliers be trusted? </a></li>
                    <li><a href="#" style="color: #1686cc;font-size: 14px;">How to detect Onsite checked suppliers? </a></li>
                    <li><a href="#" style="color: #1686cc;font-size: 14px;">How do I find out if a supplier is trustworthy? </a></li>
                    
                </ul>
            </div> -->
            
        </div>
    </div>
</div>
</div>
</section>
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