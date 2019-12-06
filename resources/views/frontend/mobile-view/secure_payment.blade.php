@extends('mobile-view.layout.master_m')
	@section('content')
<section>
<div class="container">
<div class="row">
    <div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
    	<a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block;">
    	<div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
    	</a>
	</div>
    
    <div class="col-sm-12 padding_0">
      <button class="btn btn-default" onclick="window.history.back();" style="width:100%;text-align:center;color: #666;padding:10px;font-size: 20px;padding-top:17px;"><i class="fa fa-reply-all" style="font-size: 30px;" aria-hidden="true"></i></button>
    </div>   
</div>
<div id="secure_2" class="row" style="background-color:#fff!important; position: relative;">
    
           <div style="position: absolute;bottom: 30px;left: 29%;">
             <a href="{{URL::to('wholesale')}}" class="secur-pt">Buy Wholesale ></a>
          </div>
</div>
<div class="row" style="background-color:#333333;height:50px;">
      <p style="color:#E8F1FA;padding-left:9%;padding-top:9px;font-size: 16px;line-height: 30px;">
            On 22 Jan. 2015, Escrow Service changed its name to BuyerSeller.Asia Secure Payment. The service remains the same.</p>
</div>
<div class="row" style="background-color:#E8F1FA;">
      <div class="col-sm-4" style="padding-top:20px;padding-bottom:20px;">
            <div class="col-sm-12">
                  <div class="col-sm-3">
                        <img itemprop="image" style="height:1%;" src="{!! asset('assets/helpcenter/images/l.png',is_secured()) !!}" alt="Bdtdc" />
                  </div>
                  <div class="col-sm-9">
                        <p style="font-weight: 400;font-size: 1.5em;color: #333;">
                              Secure Payments
                        </p>
                        <p style="font-size: 100%;color: rgb(102, 102, 102)!important;">
                             Payment is discharged once you affirm order delivery
                        </p>
                  </div>
            </div>
      </div>
      <div class="col-sm-4" style="padding-top:20px;padding-bottom:20px;">
            <div class="col-sm-12">
                  <div class="col-sm-3">
                        <img itemprop="image" style="height:1%;" src="{!! asset('assets/helpcenter/images/k.png',is_secured()) !!}" alt="Bdtdc" />
                  </div>
                  <div class="col-sm-9">
                        <p style="font-weight: 400;font-size: 1.5em;color: #333;">
                             Fast and simple transactions
                        </p>
                        <p style="font-size: 100%;color: rgb(102, 102, 102)!important;">
                             Complete online requesting, payment and delivery management for express transporting
                        </p>
                  </div>
            </div>
      </div>
      <div class="col-sm-4" style="padding-top:20px;padding-bottom:20px;">
            <div class="col-sm-12">
                  <div class="col-sm-3">
                        <img itemprop="image" style="height:1%;" src="{!! asset('assets/helpcenter/images/m.png',is_secured()) !!}" alt="Bdtdc" />
                  </div>
                  <div class="col-sm-9">
                        <p style="font-weight: 400;font-size: 1.5em;color: #333;">
                             Various payment methods
                        </p>
                        <p style="font-size: 100%;color: rgb(102, 102, 102)!important;">
                             Bolster credit card payment and bank exchanges (T/T), without unveiling your details.
                        </p>
                  </div>
            </div>
      </div>
</div>
<div class="row" style="background-color:#fff!important;margin-top:30px;margin-bottom:30px;">
      <div class="col-sm-8" style="border: 1px solid rgb(221, 221, 221);padding: 20px 10px 20px 30px;vertical-align: top;">
            <p style="font-size: 2em;font-weight: 400;line-height: 1;">             
                  What is Bdtdc.com&#39;s Secure Payment service?
            </p>
            <p style="color: #333;font: inherit;font-size: 12px;line-height: 1.5em;">
                  bdtdc.com Secure Payment plans to give a sheltered payment service to all gatherings occupied

with global exchange. By collaborating with a free online payment platform (Bdpay), bdtdc.com

gives payment security to both purchasers and suppliers.
            </p>
      </div>
      <div class="col-sm-4" style="border: 1px solid rgb(221, 221, 221);padding: 20px 10px 20px 30px;vertical-align: top;">
            
             <p style="font-size: 2em;font-weight: 400;line-height: 1;">             
                  Notice
            </p>
            <p style="color: #333;font: inherit;font-size: 12px;line-height: 1.5em;padding-bottom:17px;">
                 On 22 Jan. 2015, Escrow Service changed its name to bdtdc.com Secure Payment.  
            </p>
            
      </div>
      
</div>

<div class="row" style="background-color:#fff!important;margin-top:30px;margin-bottom:30px;">
      <div class="col-sm-9" style="border: 1px solid rgb(221, 221, 221);padding: 20px 10px 20px 30px;vertical-align: top;">
            <p style="font-size: 2em;font-weight: 400;line-height: 1;">             
                  Payment Security and Refund Options
            </p>
            
            <p style="font-size: 1.2em;line-height: 1;font-weight: 400;padding-top:20px;">
                  <span class="badge" style="margin-right:10px;">1</span>Payment Security </p> 
            <p style="font-size: 14px;color: #333;">
                 Your cash is held by Bdpay, a free online payment platform, until you affirm delivery. When you

have affirmed delivery, we will then inform Bdpay to discharge the payment to the supplier. 
            </p>
            <p style="font-size: 1.2em;line-height: 1;font-weight: 400;padding-top:20px;">
                  <span class="badge" style="margin-right:10px;">2</span>Full Refund</p> 
            <p style="font-size: 14px;color: #333;">
                  If the supplier doesn&#39;t dispatch your request on time, or if you don&#39;t get it and it is resolved to be

the deficiency of the supplier, you&#39;ll get your payment back straightforwardly.
            </p>
            <p style="font-size: 1.2em;line-height: 1;font-weight: 400;padding-top:20px;">
                  <span class="badge" style="margin-right:10px;">3</span> Partial Refund and Keeping Products</p> 
            <p style="font-size: 14px;color: #333;">
                If it happens that the items you get are not quite the same as the product prerequisites

agreed in the agreement with the supplier, you may get a halfway discount besides

keeping the products. 
            </p>
      </div>
      <ul class="col-sm-3 col-xs-12" style="border: 1px solid rgb(221, 221, 221);padding: 20px 10px 20px 30px;vertical-align: top;padding-bottom:5%;">
            
             <li style="font-size: 2em;font-weight: 400;line-height: 1;margin-bottom:30px;">             
                  FAQ
            </li>
            
                  @if($parent_cat_name)
          @foreach($parent_cat_name as $data)
          <li><a itemprop="url" href="{{URL::to('faq-detail',$data->id)}}" style="text-decoration: none;color: #333;font-size: 14px;">{{ $data->name }}</a></li>
          @endforeach
          @endif      
      </ul>      
</div>
</div>
</section>
<section>
<section>
<div class="container">
<div class="row" style="background-color:#fff!important;margin-top:30px;margin-bottom:30px;border: 1px solid rgb(221, 221, 221);padding: 20px 10px 20px 30px;vertical-align: top;">
     <div class="col-sm-12">
           <p style="font-size: 2em;font-weight: 400;color: #333;">Resolving Disputes</p>
     </div> 
     <div class="col-sm-12 padding_0">
           <div   class="col-sm-4 footer-shadow padding_0" style="padding-top:20px;">
                 <div class="col-sm-3">
                       <img itemprop="image" style="height:45px; width:52px; " class="img-responsive"   src="{!! asset('assets/fontend/img/cont-supp-icon.png',is_secured()) !!}" alt="cont-supp-icon" />
                 </div>
                 <div class="col-sm-9">
                       <p style="font-size:14px;line-height: 1;font-weight: 400;color: #333;">
                             Contact the supplier
                       </p>
                       <p>
                             If your request hasn&#39;t touched base inside the concurred time period, or is conveyed however isn&#39;t

as described, contact the supplier through email or Trade Manager. Most suppliers will rapidly

resolve any issues.
                       </p>
                 </div>
            </div>
           <div   class="col-sm-4 footer-shadow padding_0" style="padding-top:20px;">
                 <div class="col-sm-3">
                       <img itemprop="image" style="height:45px; width:52px; " class="img-responsive"   src="{!! asset('assets/fontend/img/dispute-icon.jpg',is_secured()) !!}" alt="dispute-icon" />
                 </div>
                 <div class="col-sm-9">
                 <p style="font-size:14px;line-height: 1;font-weight: 400;color: #333;">
                      Open a dispute to get a refund
                 </p>
                 <p>
                      In the event that you were not able determination the issue with the supplier, you can present a

refund request by clicking ‘Open Dispute’ before the application due date. This procedure is

accessible 5 days after the delivery date, and permits you to formally arrange solutions with the

supplier.
                 </p>
                 </div>
           </div>
           <div class="col-sm-4 padding_0" style="padding-top:20px;">
                 <div class="col-sm-3">
                       <img itemprop="image" style="height:45px; width:52px; " class="img-responsive"   src="{!! asset('assets/fontend/img/duspute-service.png',is_secured()) !!}" alt="duspute-service" />
                 </div>
                 <div class="col-sm-9">
                       <p style="font-size:14px;line-height: 1;font-weight: 400;color: #333; line-height:20px;">Heighten the dispute to bdtdc.com&#39;s Customer Service Team
                       </p>
                       <p>
                            If you are not pleased by the supplier&#39;s answer, you can escalate the Dispute to our Customer

Service group. We will intercede amongst you and the supplier to determine the issue.
                       </p>
                 </div>
                 
           </div>
     </div>
</div>

<div class="row" style="background-color:#fff!important;margin-top:30px;margin-bottom:3%;border: 1px solid rgb(221, 221, 221);padding: 20px 10px 20px 30px;vertical-align: top;">
      <div class="col-sm-12">
            <p style="font-size: 1.6em;line-height: 1;font-weight: 400;padding-bottom:10px;padding-top:10px;">
                  Bdtdc.com Secure Payment supports the following payment methods:</p>
      </div>
      <div class="col-sm-12" style="">
            <div class="col-sm-2 paymt-cd">
                  <a itemprop="url" href="#">
                     <p>
                  <img itemprop="image" style="height:80px;width:50px;" src="{!! asset('assets/helpcenter/images/master.jpg',is_secured()) !!}" alt="Bdtdc" />
                  MasterCard</p>    
                  </a>
                 
            </div>
            <div class="col-sm-2 paymt-cd">
                  <a itemprop="url"  href="#">
                     <p>
                        <img itemprop="image" style="height:80px;width:50px;" src="{!! asset('assets/helpcenter/images/maesto.png',is_secured()) !!}" alt="Bdtdc" />
                        Maestro</p>   
                  </a>
                  
            </div>
            <div class="col-sm-2 paymt-cd">
                  <a itemprop="url" href="#">
                       <p>
                        <img itemprop="image" style="height:80px;width:70px;" src="{!! asset('assets/helpcenter/images/visa.jpg',is_secured()) !!}" alt="Bdtdc" />
                        Visa</p>   
                  </a>
                
            </div>
            <div class="col-sm-2 paymt-cd" style="padding-top:30px;">
                
                        <img itemprop="image" style="height:40px;width:120px;" src="{!! asset('assets/helpcenter/images/western.png',is_secured()) !!}" alt="Bdtdc" />
                        
            </div>
            <div class="col-sm-1 paymt-cd" style="padding-top:30px;">
                  
                        <img itemprop="image" style="height:40px;width:80px;" src="{!! asset('assets/helpcenter/images/bank.jpg',is_secured()) !!}" alt="Bdtdc" />
                       
            </div>
            <div class="col-sm-2 paymt-cd" style="padding-top:30px;">
                
                        <img itemprop="image" style="height:40px;width:130px;padding-left:20px;" src="{!! asset('assets/helpcenter/images/web.png',is_secured()) !!}" alt="Bdtdc" />
                        
            </div>
            <div class="col-sm-1 paymt-cd" style="padding-top:30px;">
                  
                        <img itemprop="image" style="height:40px;width:80px;" src="{!! asset('assets/helpcenter/images/qiwi.png',is_secured()) !!}" alt="Bdtdc" />
                       
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