@extends('frontend.layouts.master-register')
@section('content')
<div class="row" style="margin-top: 10px">
		<div class="col-lg-12 col-md-12 padding_0">
			<ul style="margin-left: -2%;float: left;"><li style="float: left">
			<a itemprop="url" href="{{URL::to('/',null, is_secured())}}" style="color: #000">
			Home  &nbsp;</a>
			<i class="fa fa-angle-right"></i>
						<a itemprop="url" href="{{URL::to('help-center',null, is_secured())}}" style="color: #000">
			Help Center
			  &nbsp;</a></li><li style="float: left">
						<a itemprop="url" href="#" style="color: #000;font-weight: 700">
						 <i class="fa fa-angle-right"></i>
						 Trade Intelleigence
			 <i class="fa fa-angle-right"></i></a></li></ul>
			<ul style="float:right;margin-left: -2%" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
      </ul>
		</div>
	</div>
	<!-- <div class="row item_sha"  style="">
	      <ul class="nav nav-pills" style="height:7px;" aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
               <li class="footer-shadow"  ><a itemprop="url" href="{{URL::to('ServiceChannel/pages/for_buyer',35, is_secured())}}" style="border-radius:5px !important;">Home</a></li>
               <li class="footer-shadow active"><a itemprop="url" href="{{URL::to('BuyerChannel/pages/trade_intelligence',20),is_secured()}}" style="border-radius:5px !important;">Trade Intelleigence</a></li>
               <li class="footer-shadow"><a itemprop="url" href="{{URL::to('how-to/business-bangladesh'),is_secured()}}" style="border-radius:5px !important;">Think Business</a></li>  -->
               
               <!-- <li id="footer-shadow"><a itemprop="url" href="#" style="border-radius:5px !important;">Site Resources</a></li> -->
            <!--    <li><a itemprop="url" href="{{URL::to('BuyerChannel/pages/trade_answers',22),is_secured()}}" style="border-radius:5px !important;">Trade answers</a></li>
               
            </ul>
	</div> -->
	<div class="row" style="padding-top:20px; background-color: #fff; margin-bottom: 28px;border-bottom: 1px solid rgba(0,0,0,.1);">
	      <div class="col-sm-12">
	            <div class="col-sm-8" style="padding-left:0px;" >
      	            <div class="col-sm-12 padding_0 item_sha"  style="padding-bottom:10px;" >
            	                  <div class="col-sm-7">
            	                         <img itemprop="image" style="height:150px;width:260px;" src="{!! asset('assets/helpcenter/images/baby.jpg',is_secured()) !!}" alt="" />     
            	                  </div>
            	                  <div class="col-sm-5">
            	                        <a itemprop="url" href="#" style="font-size: 18px; color:black;font-weight:500;">
            			            Get Smart About Children’s Product Safety	</a>
            			            <p style="color: #999;font-size:10px;padding-top:5px;">December 2015</p>
            			            <p style="padding-top:5px;color: #999;font-size:12px;">
            			                  Every year, preventable accidents occur due to product-related hazards or
            			                  deficiencies. These are mainly the result of insufficient attention to, 
            			                  or understanding of, children’s product safety rules & guidelines. 
            			                  <a itemprop="url" href="#">View detail</a>
            			            </p>
            	                  </div>
            	                  
      	            </div>
      	            <div class="col-sm-12 padding_0" style="padding-left:0px; background-color: #fff;">
      	                  <h4 style="padding-bottom: 5px;border-bottom: 2px solid #1996E6;margin-bottom: 15px;padding-top:10px;">
      	                        Business Reports
      	                  </h4>
	                </div>
	                  <div class="col-sm-12 padding_0" style="padding-left:0px;padding-bottom:35px; background-color: #fff;">
	                       <div class="col-sm-3">
	                         <img itemprop="image" style="height:180px;width:140px;" src="{!! asset('assets/helpcenter/images/book1.jpg',is_secured()) !!}" alt="" />    
	                         <div style="text-align:bottom;"><a itemprop="url" href="#" style="color:black;">Industry Highlights-First-Aid Kits</a></div>
	                       </div> 
	                        <div class="col-sm-3">
	                             <img itemprop="image" style="height:180px;width:140px;" src="{!! asset('assets/helpcenter/images/book2.jpg',is_secured()) !!}" alt="" />
	                            <div style="text-align:bottom;"><a itemprop="url" href="#" style="color:black;">Doing Business in Canada</a></div>
	                       </div> 
	                        <div class="col-sm-3">
	                             <img itemprop="image" style="height:180px;width:140px;" src="{!! asset('assets/helpcenter/images/book3.jpg',is_secured()) !!}" alt="" />
	                             <div style="text-align:bottom;"><a itemprop="url" href="#" style="color:black;">Keyword Analysis Report-Lingerie</a></div>
	                       </div> 
	                       <div class="col-sm-3">
	                             <img itemprop="image" style="height:180px;width:140px;" src="{!! asset('assets/helpcenter/images/book4.png',is_secured()) !!}" alt="" />
	                             <div style="text-align:bottom;"><a itemprop="url" href="#" style="color:black;">Taste of Israel at Kosherfest</a></div>
	                       </div> 
	                  </div>
	                  <div class="col-sm-12 padding_0" style="background-color: #fff;">
	                        <h4 style="color: #333;padding-bottom: 5px;border-bottom: 2px solid #1996E6;margin-bottom: 15px;">Trade Knowledge</h4>
	                  </div>
	                  <div class="col-sm-12 col-xs-12" style="background-color: #fff; padding:0;">
	                        <ul class="nav nav-pills" style="float: left;cursor: pointer;padding-right: 10px;margin-right: 10px;padding-left:0px;">
                                      <li class="footer-shadow" role="presentation"><a itemprop="url" href="#" style="color: #666;font-size:12px;">Basic Tips</a></li>
                                      <li class="footer-shadow" role="presentation"><a itemprop="url" href="#" style="color: #666;font-size:12px;">Payment</a></li>
                                      <li class="footer-shadow" role="presentation"><a itemprop="url" href="#" style="color: #666;font-size:12px;">Logistics</a></li>
                                      <li class="footer-shadow" role="presentation"><a itemprop="url" href="#" style="color: #666;font-size:12px;">Templates</a></li>
                                      <li role="presentation"><a itemprop="url" href="#" style="color: #666;font-size:12px;">Certification</a></li>
                                      
                              </ul>
							 <!-- <ul class="nav nav-tabs" style="float: left;cursor: pointer;padding-right: 10px;margin-right: 10px;padding-left:0px;">
							    <li class="active"><a itemprop="url" href="#" style="color: #666;font-size:12px;">Basic Tips</a></li></li>
							    <li><a itemprop="url" href="#" style="color: #666;font-size:12px;">Payment</a></li>
							    <li><a itemprop="url" href="#" style="color: #666;font-size:12px;">Logistics</a></li>
							    <li><a itemprop="url" href="#" style="color: #666;font-size:12px;">Templates</a></li>
							    <li><a itemprop="url" href="#" style="color: #666;font-size:12px;">Certification</a></li>
							  </ul> -->
	                  </div>
	                 <div class="col-sm-12 padding_0" style="padding-bottom:20px; background-color: #fff;">
	                 <ul style="padding:0; padding-left:10px;">
	                       <li><a itemprop="url" href="#">Helping the supplier in improving the quality of goods: production monitoring</a></li>
	                       <li><a itemprop="url" href="#">Responsible sourcing in Bangladesh</a></li>
	                       <li><a itemprop="url" href="#">Pre-shipment inspection condition: 100% finished and 80% packed</a></li>
	                       <li><a itemprop="url" href="#">8 tips for exporting to Brazil</a></li>
	                       <li><a itemprop="url" href="#">Tips for Sourcing Success</a></li>
	                 </ul>
	                 </div>
	                  <div class="col-sm-12 padding_0" style="background-color: #fff;">
	                        <h4 style="color: #333;padding-bottom: 5px;border-bottom: 2px solid #1996E6;margin-bottom: 15px;">
	                              Global Trading Policies
	                        </h4>
	                  </div>
	                  <div class="col-sm-12 padding_0" style="padding-bottom:20px; background-color: #fff;">
	                  <ul style="padding:0;padding-left:10px;">
	                       <li>
	                             <a itemprop="url" href="#" style="padding-bottom:20px;">
                                         <img itemprop="image" style="height:15px;width:20px;" src="{!! asset('assets/helpcenter/images/us.png',is_secured()) !!}" alt="" />
                                         U.S. Goods and Services Exports to Canada, Mexico, Bangladesh, Japan and the United Kingdom..
	                             </a>
	                       </li>
	                       <li>
	                             <a itemprop="url" href="#" style="padding-bottom:20px;">
	                                   <img itemprop="image" style="height:15px;width:20px;" src="{!! asset('assets/helpcenter/images/gb.png',is_secured()) !!}" alt="" />
	                                   Time Limit Set For Disposal Of Activities Related To Sez Developers Units By DC Offices
	                             </a>
	                       </li>
	                       <li>
	                             <a itemprop="url" href="#" style="padding-bottom:20px;">
	                                   <img itemprop="image" style="height:15px;width:20px;" src="{!! asset('assets/helpcenter/images/cn.png',is_secured()) !!}" alt="" />
	                                   MOFCOM Announcement No. 52 of 2014 on Renaming of A Korean Enterprise...
	                                   </a>
	                       </li>
	                       <li>
	                             <a itemprop="url" href="#" style="padding-bottom:20px;">
	                                   <img itemprop="image" style="height:15px;width:20px;" src="{!! asset('assets/helpcenter/images/rw.png',is_secured()) !!}" alt="" />
	                                   MP Larry Maguire announces the opening of three new CBSA port...
	                             </a>
	                       </li>
	                       <li>
	                             <a itemprop="url" href="#" style="padding-bottom:20px;">
	                                   <img itemprop="image" style="height:15px;width:20px;" src="{!! asset('assets/helpcenter/images/st.png',is_secured()) !!}" alt="" />
	                                   Reforming and managing marine fisheries for a prosperous fishing industry...
	                             </a>
	                       </li>
	                 </ul>
	                 </div>
	                  <div class="col-sm-12 padding_0" style="background-color: #fff;">
	                        <h4 style="color: #333;padding-bottom: 5px;border-bottom: 2px solid #1996E6;margin-bottom: 15px;">
	                              Trade Case Studies
	                        </h4>
	                  </div>
	                  <div class="col-sm-12 padding_0" style="background-color: #fff;">
	                        <div class="col-sm-3">
	                              <img itemprop="image" style="height:120px;width:110px;" src="{!! asset('assets/helpcenter/images/p1.jpg',is_secured()) !!}" alt="" />
                              </div>
	                        <div class="col-sm-3">
	                              
	                                    <a itemprop="url" href="#">My order is late. Who is to blame? </a>
	                                    <p style="color: #666;line-height: 16px; font-size:12px;padding-top:10px;">
	                                          If you are shipping out of Bangladesh and the B/L is being provided as the goods are about to ship out,
	                                          then 6 weeks does ... 
	                                    </p>
	                              
	                        </div>
	                        <div class="col-sm-3">
	                              <img itemprop="image" style="height:120px;width:110px;" src="{!! asset('assets/helpcenter/images/p2.jpg',is_secured()) !!}" alt="" />
	                        </div>
	                        <div class="col-sm-3">
	                               <a itemprop="url" href="#">An Interesting Example of Bangladesh Quality Scandal</a>
	                                    <p style="color: #666;line-height: 16px; font-size:12px;padding-top:10px;">
	                                           Most street vendors sell beef and lamb meat-on-a-stick at the same price. It’s actually all beef meat. How is the beef taste masked ...

	                                    </p>
	                        </div>
	                  </div>
	                  
	     
	            </div>
	      <div class="col-sm-4" style="padding:0px;">
	            <div class="col-sm-12 item_sha"  style="padding-bottom:20px;margin-bottom:20px;padding-right:20px;margin-left:20px;">
	                  <p style="color: #333;margin-bottom: 14px;padding-left:10px;">
	                        Trade Data & Insights
	                  </p>
	                  <div class="col-sm-4">
	                        <img itemprop="image" style="height:60px;width:80px;padding-left:0px;" src="{!! asset('assets/helpcenter/images/data1.png',is_secured()) !!}" alt="" />
	                  </div>
	                  <div class="col-sm-8">
	                        <p style="color: #333;margin-bottom: 14px;padding-right:10px;margin-left: 14px;">BuyerSeller.com's Data Insights</p>
	                        <p style="color: #999;font-size:10px;padding-right:10px;margin-left: 14px;">Dynamic trade information and industry data</p>
	                  </div>
	            </div>
	            <div class="col-sm-12 item_sha"  style="padding-bottom:40px;margin-bottom:20px;margin-left:20px;">
	                  <a itemprop="url" href="#"><p>A fresh approach to sourcing? </p></a>
	                  <a itemprop="url" href="#"><p>Halloween Imports Arrive Hauntingly Early</p></a>
	                  <a itemprop="url" href="#"><p>The Facts About BuyerSeller Group and IPR</p></a>
	                  <a itemprop="url" href="#"><p>Why The Bangladesh Price is Going Up</p></a>
	                  <a itemprop="url" href="#"><p>Two Views on Doing Business in Today's Bangladesh</p></a>
	                  <a itemprop="url" href="#"><p>New 'Black Money' Standards, Changes to Corporate Income Tax</p></a>
	            </div>
	            <div class="col-sm-12 item_sha"  style="margin-left:20px;" >
		            <header style="padding: 15px;margin-bottom: 0;color: #333;font-weight: 700;">
		            Tools</header>
		            <table class="table table-bordered" style="padding-left:40px;">
	                                  <tr>
	                                    <td class="col-md-6" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:0px;padding-left:0px;">
	                                        <a itemprop="url" href="#">
	                                        	<img itemprop="image" style="height:20px;width:30px;padding-left:20px;" src="{!! asset('assets/helpcenter/images/Quick-buyer-guide.ico',is_secured()) !!}" alt="Quick buyer guide" />
	                                            <h4 style="padding-left:20px;font-size:15px;">
	                                              Currency Converter
	                                            </h4>
	                                        </a>
	                                    </td>
	                                    <td class="col-md-6" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:0px;padding-left:18px;">
	                                        <a itemprop="url" href="#">
	                                        	<img itemprop="image" style="height:20px;width:30px;" src="{!! asset('assets/helpcenter/images/contact-suppliers.png',is_secured()) !!}" alt="contact suppliers" />
	                                            <h4 style="font-size:15px;">
	                                              World Port
	                                            </h4>
	                                        </a>
	                                    </td> 
	                                    
	                                  </tr>
	                                  <tr>
	                                    <td class="col-md-6" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:0px;padding-left:0px;">
	                                        <a itemprop="url" href="#">
	                                        	   <img itemprop="image" style="height:20px;width:30px;padding-left:20px;" src="{!! asset('assets/helpcenter/images/Quick-buyer-guide.ico',is_secured()) !!}" alt="Quick buyer guide" />
	                                            <h4 style="padding-left:20px;font-size:15px;">
	                                              World Clock
	                                            </h4>
	                                        </a>
	                                    </td>
	                                    <td class="col-md-6" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:0px;padding-left:18px;">
	                                        <a itemprop="url" href="#">
	                                        	<img itemprop="image" style="height:20px;width:30px;" src="{!! asset('assets/helpcenter/images/contact-suppliers.png',is_secured()) !!}" alt="contact suppliers" />
	                                            <h4 style="font-size:15px;">
	                                                Express Tracking
	                                            </h4>
	                                        </a>
	                                    </td> 
	                                    
	                                  </tr>
	                                  <tr>
	                                    <td class="col-md-6" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:0px;padding-left:0px;">
	                                        <a itemprop="url" href="#">
	                                        	<img itemprop="image" style="height:20px;width:30px;padding-left:20px;" src="{!! asset('assets/helpcenter/images/Quick-buyer-guide.ico',is_secured()) !!}" alt="Quick buyer guide" />
	                                            <h4 style="padding-left:20px;font-size:15px;">
	                                               Country Codes
	                                            </h4>
	                                        </a>
	                                    </td>
	                                    <td class="col-md-6" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:0px;padding-left:18px;">
	                                        <a itemprop="url" href="#">
	                                        	<img itemprop="image" style="height:20px;width:30px;" src="{!! asset('assets/helpcenter/images/contact-suppliers.png',is_secured()) !!}" alt="contact suppliers" />
	                                            <h4 style="font-size:15px;">
	                                                Online Calender
	                                            </h4>
	                                        </a>
	                                    </td> 
	                                    
	                                  </tr>
	                                  <tr>
	                                    <td class="col-md-6" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:0px;padding-left:20px;">
	                                        <a itemprop="url" href="#">
	                                        	<img itemprop="image" style="height:20px;width:30px;padding-left:20px;" src="{!! asset('assets/helpcenter/images/Payment.png',is_secured()) !!}" alt="" />
	                                            <h4 style="font-size:15px;">
	                                                Unit Converter
	                                            </h4>
	                                        </a>
	                                    </td>
	                                    <td class="col-md-6" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:0px;padding-left:21px;">
	                                        <a itemprop="url" href="#">
	                                        	View more >
	                                        </a>
	                                    </td>
	                                   
	                                   
	                                  </tr>
	                            </table>
	            </div>
	             
             	<div class="col-sm-12 item_sha"  style="padding-bottom:10px;margin-top:20px;margin-left:20px;">
	                  <p style="color: #333;margin-bottom: 17px;">
	                        Recommended Reading
	                  </p>
	                  <div class="col-sm-3">
	                        <img itemprop="image" style="height:60px;width:80px;padding-left:0px;" src="{!! asset('assets/helpcenter/images/data2.jpg',is_secured()) !!}" alt="" />
	                  </div>
	                  <div class="col-sm-8">
	                        <p style="color: #333;margin-bottom: 14px;padding-right:10px;margin-left: 14px;">Latest Bangladesh Customs Statistics</p>
	                        <p style="color: #999;font-size:10px;padding-right:10px;margin-left: 14px;">Tariff Changes, Bangladesh Customs Statistics and Experts Comments</p>
	                  </div>
	            	
	            </div>
	            <div class="col-sm-12" style="margin-left:0px; padding-left:0;">
	            	<img itemprop="image" class="img-responsive" style="height:110px;padding-left:14px;padding-right:27px;" src="{!! asset('assets/helpcenter/images/dsa_bannerforbdtdc.jpg',is_secured()) !!}" alt="" />	
	            </div>
	            
	      </div>
	            
	      </div>
	      
	      <div class="col-sm-12" style="padding-bottom:50px; background-color: #fff;">
                  <h4 style="color: #333;padding-bottom: 5px;border-bottom: 2px solid #1996E6;margin-bottom: 15px;">
                        Featured Partners:
                  </h4>
                  <div class="col-sm-12">
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c1.bmp',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c2.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c3.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c4.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c5.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c6.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c7.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c8.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c9.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c10.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c11.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c12.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c13.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c14.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c15.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c16.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c17.png',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c18.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c19.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c20.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c21.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:40px;width:160px;" src="{!! asset('assets/helpcenter/images/c22.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:60px;width:160px;" src="{!! asset('assets/helpcenter/images/c23.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:60px;width:160px;" src="{!! asset('assets/helpcenter/images/c24.jpg',is_secured()) !!}" alt="" />
                        <img itemprop="image" style="height:60px;width:160px;" src="{!! asset('assets/helpcenter/images/c25.png',is_secured()) !!}" alt="" />
                        
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