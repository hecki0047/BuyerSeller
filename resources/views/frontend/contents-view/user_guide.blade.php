@extends('fontend.master3')
@section('content')
<div class="row" data-spy="scroll" data-target="#myScrollspy" data-offset="20">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked mymenu user-guide-fix">
        <li class="active"><a href="#section-user-gd1" style="border-radius:5px !important;"><labe style="margin-left:10px;">Intro</label></a></li>
        <li><a href="#section-user-gd2"><labe style="margin-left:10px;">Find and Negotiate</label></a></li>
         <li><a href="#section-user-gd3"><labe style="margin-left:10px;">Contract and Protection</label></a></li>
        <li><a href="#section-user-gd4"><labe style="margin-left:10px;">Payment</label></a></li>
         <li><a href="#section-user-gd5"><labe style="margin-left:10px;">Shipment</label></a></li>
      </ul>
    </nav>
    <div class="col-sm-9 user-giude-nav-div wordp">
      <div id="section-user-gd1">    
        <h1 class="user-gd-head">Trade Assurance User Guide</h1>
        <p>Trade Assurance is a free service by BuyerSeller.com designed to create trust in trade. We provide a set of protections to give you assurance that suppliers will honor key terms of your contract.*</p>

      <p style="padding-bottom:3%;">With Trade Assurance, you’ll enjoy:</p>
          <div class="cont-left">
               <p><img src="{!! asset('assets/fontend/bdtdc-images/user-gd-img1.jpg',is_secured()) !!}"><h4 class="des-p-h4">On-time shipment protection</h4></p>
               <P style="line-height:180%;padding:2px 0;">If the supplier fails to ship by the date set in your contract, you’re protected. BuyerSeller.com will provide you with a refund.</p>
          </div>
          <div class="cont-mid">
               <p><img src="{!! asset('assets/fontend/bdtdc-images/user-gd-img2.jpg',is_secured()) !!}"><h4 class="des-p-h4">On-time shipment protection</h4></p>
               
              <p style="line-height:180%;padding:2px 0"> Select either pre-shipment or post-delivery coverage – BuyerSeller.com will refund you if the product quality or quantity does not meet the terms set in your contract.</p>
          </div>
           <div class="cont-right">
               <p><img src="{!! asset('assets/fontend/bdtdc-images/user-gd-img3.jpg',is_secured()) !!}"><h4 <div class="des-pp-h4">On-time shipment protection</h4></p>
               <p style="line-height:180%;">If the supplier fails to ship by the date set in your contract, you’re protected. BuyerSeller.com will provide you with a refund.</p>
          </div>
          <div>
                <p class="p-bottom">* Please see the <a href="">Terms & Conditions</a> of the Trade Assurance service.</p>
          </div>
      </div>
      <br>
      <div id="section-user-gd2"> 
        <h1 class="user-gd-head">Find and Negotiate</h1>
        <p class="user-cont-p">When searching for products, look for the supplier’s Trade Assurance  and Trade Assurance Limit. In order to help you make an informed decision, you can also view the supplier’s number of transactions and turnover.</p>

<p>Once you have selected a supplier, you should negotiate the key terms for your order. Agree on your initial payment and covered amount.</p>
      <p class="user-cont-p">1). On-time shipment protection: Determine the shipping date. It can be set as a specific date, or set as a certain number of days after the initial payment is received.</p>
      <p class="p-bottom">2). Product quality protection: Choose either the pre-shipment or post-delivery product quality protection. You must ask the supplier to offer this safeguard. You should establish detailed product quality requirements to be included in your contract.</p>
      </div>        
      <div id="section-user-gd3">         
        <h1 class="user-gd-head">Contract and Protection</h1>
        <p class="user-cont-p">1. Ask your supplier to draft a contract for you. </p>
        <p class="user-cont-p">2. Click ‘Start Order’ and complete the order form. Your supplier will then draft a contract for you to confirm.</p>
        <p class="user-cont-p">You can check the status of your order and confirm, modify or cancel your contract in the Transactions & Logistics section of My BuyerSeller.</p>
        <p class="user-cont-p">Please pay attention to the detailed terms of your contract and make sure all the protections you agreed upon with the supplier are included.</p>
        <p class="user-cont-p">Once you confirm the contract, your order status will change to ‘Waiting for buyer payment’.</p>
       <p class="user-cont-p">If you selected the pre-shipment quality protection, please have your goods inspected before shipment. You are only covered for product quality issues before the goods are shipped.</p>
      <p class="user-cont-p">If you selected the post-delivery product quality protection, please check your product quality within seven days of clearing customs.</p>
      <p class="p-bottom">If the supplier does not meet the requirements in your contract for on-time shipment or product quality, you can open a dispute. If the supplier is found to be at fault, BuyerSeller.com will refund your covered amount.</p>
      </div>
      <div id="section-user-gd4">         
        <h1 class="user-gd-head">Payment</h1>
        <p  class="user-cont-p">In order to complete your payment for a Trade Assurance order, simply follow these steps:</p>
        <p  class="user-cont-p">1) After confirming your contract, find your order in the Transactions & Logistics section of My BuyerSeller.</p>
        <p  class="user-cont-p">2) Click ‘Check Order Details’ to view the supplier’s bank account information. Please note that the bank account information for Trade Assurance suppliers was updated on July 31, 2015.</p>
        <p  class="user-cont-p">3) Please send your initial payment to this bank account via the T/T payment method. Only payments sent to the bank account designated by BuyerSeller.com will be protected by Trade Assurance. We suggest you use USD.</p>
        <p  class="user-cont-p">4) BuyerSeller.com will match the payment to your order and transfer the payment directly to your supplier. BuyerSeller.com will not hold the payment.</p>
        <p  class="user-cont-p">5) Once your payment is processed, your order status will change to ‘Waiting for supplier to ship order’.</p>
        <p class="p-bottom">If the amount received for your initial payment is less than the amount agreed in your contract, your order status will change to ‘Insufficient payment’. This may be because bank charges were deducted from your payment. Please contact the supplier and ask them to confirm your payment. If the amount received is significantly less than the amount agreed in your contract (more than 5% or more than US $100), please complete your payment.</p>
      </div>      
      <div id="section-user-gd5">         
        <h1 class="user-gd-head">Shipment</h1>
        <p  class="user-cont-p">Once your payment is processed, your order status will change to ‘Waiting for supplier to ship order’. Please pay attention to the shipping date.</p>
        <p  class="user-cont-p">If you chose the pre-shipment product quality protection, please check the product quality before shipment.</p>
        <p  class="user-cont-p">If you selected the post-delivery product quality protection, please check your product quality within seven days of clearing customs.</p>
        <p  class="user-cont-p">You can open a dispute if the product quality does not meet the standards set in your contract.</p>
        <p  class="user-cont-p">Note: If the quantity of products shipped for your order is different from the quantity agreed in your contract but you would still like to continue the order, simply click’ Confirm Shipment’.</p>
        <p style=" padding-bottom:25%;"><img style=" width:100%;height:100% ;" src="{!! asset('assets/fontend/bdtdc-images/user-gd-ship-img.png',is_secured()) !!}"></p>
       
      </div>
    </div>
  </div>
@stop
@section('scripts')
<script>
    
</script>
@stop