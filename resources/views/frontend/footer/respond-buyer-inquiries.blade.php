@extends('fontend.master_dynamic')
@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/media-room-style.css',is_secured()) !!}" rel="stylesheet">
    @endsection
@section('content')
<div class="row" style="padding-bottom: 10px">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="top-path" itemscope itemtype="http://schema.org/BreadcrumbList">
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li"><a itemprop="url" href="{{URL::to('ServiceChannel/pages/for_buyer',35,is_secured())}}" class="top-path-li-a">Help Center <i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li"><a itemprop="url"  href="{{URL::to('SupplierChannel/pages/learning_center',33),is_secured()}}" class="top-path-li-a">Learning Center<i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">How to Respond to Buyer Inquiries</span></a></li>
              
            </ul>
        </div>
    
  </div>

  
   @include('fontend.footerpage.learning-sidebar')
            <div class="col-sm-9">
                        <h3 class="training-pp" style="font-size: 20px; color: #000; font-weight: bold; padding-top: 3%;">How to Respond to Buyer Inquiries</h3>
              
                      <p class="training-pp">Communication Performance shows buyers two facets of your online operation:</p>
                       <h4 class="traing-h4">1. Response Rate</h4>
                      <p class="training-pp">The Response Rate measures your ability of prompt response to buyers over the past 30 days. It calculates how many buyers received a response from you within 3 days after sending you an inquiry in Messages & Contacts; and how many buyers received a prompt response from you within 1 hour after sending you a message through Trade Manager.</p>
                       <h4 class="traing-h4">2. Response Effectiveness</h4>
                     <p class="training-pp"> Response Effectiveness measures how many buyers showed further interest in communicating with you after you make quotation or response to their initial inquiry. A “High” value indicates that your Response Effectiveness is higher than the industry average on BuyerSeller.Asia. The data is helpful to reflect buyers’ satisfaction with your response</p>
                       <h4 class="traing-h4">Buyers care about it</h4>
                      <p class="training-pp">72.3% of BuyerSeller.Asia buyers surveyed said they cared about whether or not they received responses from suppliers after sending inquiries. 98.3% of these buyers said they would be satisfied if they received a response within 3 days.</p>
                       <h4 class="traing-h4">Get the attention of buyers</h4>
                      <p class="training-pp">If your Response Rate is good (higher than the current average of 40%) or if your Response Effectiveness is shown “High”, you are in our top 10% suppliers. Use this as your advantage by Displaying your Communication Performance! (And of course, remember to keep up your performance.)
                      If your Communication Performance is below average, you may consider our tips below to improve the data before displaying them.</p>
                       <h4 class="traing-h4">Improving your Communication Performance</h4>
                       <h4 class="traing-h4">Reply the inquiries through Messages & Contacts on Bdtdc.com</h4>
                      <p class="training-pp">Currently only your online communication can be counted. Replying the inquiries on BuyerSeller.Asia helps accumulate the data of your response rate and response effectiveness.</p>
                      <h4 class="traing-h4"> Work on your Response Rate</h4>
                      <p class="training-pp">For the messages received through Trade Manager, you are suggested to give a reply to buyers instantly. Please note that auto reply set in Trade Manager is not counted as a reply in the Response Rate. If you are busy for the moment, you may first give a quick reply and get back to the buyer with more details later. </p>

                      <p class="training-pp">As for the inquiries you received in Messages & Contacts, basically, the inquiries could be classified into four different types. You are suggested to deal with them with different approaches, according to the guidance below.</p>

                       <h4 class="traing-h4">Improve Your Communication Performance</h4>
                      <p class="training-pp">For specific and detailed inquiries, you need to respond fast and provide a good quotation. Speed is important to ensure that the buyer checks your response before they’ve had a chance to communicate with other suppliers and made the decision. Providing a good quotation means providing a response that is appropriate and effective to the buyer’s inquiry, while displaying a level of professionalism superior to your competitors.
                      You may refer to the example quotation below, which contain the detail description of your product, such as price, payment terms, features, quality guarantee, delivery time and packing.</p>

                      <p class="training-pp">For unclear inquiries, try asking for more details in a clear and friendly manner. You may work out a few templates that you can re-use to respond to this type of inquiry efficiently. Make your reply professional and attractive to your customers.</p>
                      <p class="training-pp">For irrelevant inquiries, you are suggested to use our “Reject Inquiry” function in your Message Center to reject the inquiry to the buyer and submit your reasons accordingly. Rejected inquiries will not be counted in the calculation of your Response Rate.</p>

                      <p class="training-pp">For spam, you are suggested to click “Report Spam” in your Message Center to report them as spam. Spammed inquiries will not be counted in your Response Rate either. Meanwhile, you could add the sender in the Block List so that messages from that buyer will not bother you anymore.</p>



                          


                    

           </div>
      </div>
    </div>

@stop