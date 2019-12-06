@extends('mobile-view.layout.master_m')
@section('content')

	<div style="clear:both"></div>
<section>
<div class="container">
<div class="row" style="background-color:#fff !important;">
			<div class="col-sm-12 padding_0" style="padding-left:0px;padding-bottom:0px;padding-top:20px;">
                            <p style="font-size:22px;font-weight:500;padding-left:20px;padding-top:10px;padding-bottom: 15px;">
                            	Quick guides to <a href="{{URL::to('/')}}" style="color: #333;">buyerseller.asia</a> services</p></div>
                         <br>
                        <div class="col-sm-12" style="padding-bottom:50px;padding-left:20px;padding-right:20px;">
                           
                            <table class="table table-bordered" style="padding-left:40px;">
                                  <tr>
                                   
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:17px;padding-left:20px;">
                                        <a href="{{URL::to('sourcing-easier')}}">
                                          
                                                <img style="height:60px;width:70px;" src="{!! asset('assets/service/s3.png',is_secured()) !!}" alt="" />
                                              <h4 style="font-size:15px;">
                                                Finding Products 
                                            </h4>
                                        </a>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:0px;">
                                        <a href="{{URL::to('ServiceChannel/pages/for_new_user/38')}}">
                                           
                                               <img style="height:60px;width:70px;padding-left:20px;" src="{!! asset('assets/service/s4.png',is_secured()) !!}" alt="" />
                                                <h4 style="font-size:15px; padding-left: 20px;">
                                                Finding Suppliers
                                            </h4>
                                        </a>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:18px;padding-left:18px;">
                                        <a href="{{ URL::to('buyer/guide-bdsource') }}">
                                          
                                                <img style="height:60px;width:70px;" src="{!! asset('assets/service/s5.png',is_secured()) !!}" alt="" />
                                              <h4 style="font-size:15px;">
                                                BdSource
                                            </h4>
                                        </a>
                                    </td> 
                                  </tr>
                                  <tr>
                                    
                                    
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:17px;padding-left:20px;">
                                        <a href="{{ URL::to('selected/supplier-products') }}">
                                          
                                                <img style="height:60px;width:70px;" src="{!! asset('assets/service/s6.png',is_secured()) !!}" alt="" />
                                              <h4 style="font-size:15px;">
                                                Selected Supplier
                                            </h4>
                                        </a>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:0px;">
                                        <a href="{{URL::to('BuyerChannel/pages/inspection_service/19')}}">
                                           
                                               <img style="height:60px;width:70px;padding-left:20px;" src="{!! asset('assets/service/s7.png',is_secured()) !!}" alt="" />
                                                <h4 style="font-size:15px; padding-left: 20px;">
                                                Inspection & logistics
                                            </h4>
                                        </a>
                                    </td>
                                     <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:18px;padding-left:18px;">
                                        <a href="{{URL::to('FooterPage/pages/Secure_Payment/37')}}">
                                          
                                                <img style="height:60px;width:70px;" src="{!! asset('assets/service/s8.png',is_secured()) !!}" alt="" />
                                              <h4 style="font-size:15px;">
                                                Safety & Security
                                            </h4>
                                        </a>
                                    </td> 
                                  </tr>
                                  <tr>
                                    
                                   
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:17px;padding-left:20px;">
                                        <a href="{{URL::to('BuyerChannel/pages/accredited_suppliers/16')}}">
                                           
                                                <img style="height:60px;width:70px;" src="{!! asset('assets/service/s9.png',is_secured()) !!}" alt="" />
                                             <h4 style="font-size:15px;">
                                                Verified buyer-supplier
                                            </h4>
                                        </a>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:25px;padding-left:20px;">
                                        <a href="{{URL::to('wholesale')}}">
                                           
                                                <img style="height:60px;width:70px;" src="{!! asset('assets/service/s10.png',is_secured()) !!}" alt="" />
                                             <h4 style="font-size:15px; padding-left: 20px;">
                                                Wholesaler
                                            </h4>
                                        </a>
                                    </td>
                                     <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:21px;padding-left:21px;">
                                        <a href="{{URL::to('BuyerChannel/pages/trade_assurance/56')}}">
                                          
                                                <img style="height:60px;width:70px;" src="{!! asset('assets/service/s11.png',is_secured()) !!}" alt="" />
                                              <h4 style="padding-left:0px; font-size:15px;">
                                                Buyer Protection
                                            </h4>
                                        </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    
                                   
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:19px;padding-left:20px;">
                                        <a href="{{URL::to('BuyerChannel/pages/meet_suppliers/13')}}">
                                           
                                            <img style="height:60px;width:70px;" src="{!! asset('assets/service/s12.png',is_secured()) !!}" alt="" />
                                             <h4 style="font-size:15px;">
                                                Matching Buyer-Supplier
                                            </h4>
                                        </a>
                                    </td>
                                  </tr>
                            </table>
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

                var current_url = window.location.href;
                var current_url_array = current_url.split('/');
                if($.inArray('for_supplier', current_url_array) == 5){
                    $('a[href="#forsupplier"]').click();
                    // $('.for_supplier').click();
                }
                else{
                    $('a[href="#forbuyer"]').click();
                }

                $('a[href="#forsupplier"]').click(function(){
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