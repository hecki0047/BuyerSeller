@extends('fontend.master_dynamic')
@section('page_css')
<link property='stylesheet' rel="stylesheet" type="text/css" href="{{ URL::asset('assets/fontend/css/pricing.css',is_secured()) }}" media="screen" data-name="skins">
<style type="text/css">
    
</style>
@endsection
@section('content')
<div style="clear:both"></div>
    <div class="row" style="padding-top:2%;padding-bottom:0%">
        <div class="col-md-12 padding_0" style="padding-bottom: 1%">
            <ul style="margin-left: -2%">
                <li style="float: left">
                    <a href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> 
                        Home <i class="fa fa-angle-right"></i>
                    </a>
                </li> 
                <li style="float: left">
                    <a href="{{ URL::to('SupplierChannel/pages/suppliers_memebership',30,is_secured()) }}" style="color: #000">Suppliers Membership &nbsp;
                    </a>
                </li>
                <li style="float: left">
                    <a href="#" style="color: #000"> <i class="fa fa-angle-right"></i> User Upgrade <i class="fa fa-angle-right"></i>
                    </a>
                </li>
                </ul>
        </div>
    </div>
<div class="row">
    <p style="background-color:#19446F;color: rgb(255, 255, 255) ! important; font-size: 15px; padding-top: 10px;padding-bottom:10px;margin-right: 456px;padding-left: 10px;">
        Apply for Gold Supplier Membership & Extra Inquiries Package
    </p>

    <div class="category-tab">
        
            <ul style="background:none;border-bottom: 1px solid #dae2ed;" class="nav nav-tab nav-pills trade-show-ul ">
                <li class="active"><a data-toggle="tab" style="margin-left: 38px;" href="#forbuyer" class="padding_0 apply" aria-expanded="true">
                    <span class="badge" style="background-color:#19446F;">1</span> Apply
                </a></li>
                <li><a data-toggle="tab" href="#" class="padding_0 make_payment_tab" style="font-size: 13px;">
                    <span class="badge" style="background-color:#19446F;">2</span> Make Payment</a></li>
                <li><a data-toggle="tab" href="#" class="padding_0 complete" style="font-size: 13px;">
                    <span class="badge" style="background-color:#19446F;">3</span> Complete</a></li>
            </ul>
    </div>                  
    <div class="tab-content">
        <input type="hidden" value="" name="section">
        <div id="forbuyer" class="tab-pane fade active in">
            <div class="col-sm-12 padding_0">
                
               
                <div class="col-sm-12">
                    <div class="col-sm-9">
                        @if (Session::has('up_msg'))
                        <div id="successMessage" class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('up_msg') }}</p>
                        </div>
                        @endif
                    <div class="alert alert-danger error_message" style="display: none;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>you must agree with the Package Service Agreement.</strong>
                    </div>

                    <p style="padding-left: 15px;font-weight:700%;font-size:12px;">Gold Suppliers receive 22X more inquiries, </p>
                    <p style="padding-left: 15px;font-weight:700%;font-size:12px;">Extra Inquiries Package delivers up to 30% more inquiries.</p>

                    <div class="col-sm-12">
                     <p style="font-weight:700%;font-size:12px;font-weight: bold;">
                         Boost your online business with buyerseller.asia's Gold Supplier Membership and Extra Inquiries Packages.
                     </p><br>
                    </div>
                    <div class="col-sm-12" style="margin-bottom:5%;">
                        <div style="font-size: 10px;color: #000;font-weight:700;">
                            <b style="font-size: 15px;">Membership Options : </b><br><br>
                                @php 
                                $s_price = ''; 
                                $m_dur   ='';

                                @endphp
                                @foreach($suppliers as $supplier)
                                @if($supplier->id !=4)
                                <label><input type="radio" name="supplier_package_name" s_price="{{ $supplier->price ?? ''}}" value="{{$supplier->id}}" <?php if($supplier->id == $form_id){echo "checked";}else{echo "";} ?>> US${{ $supplier->price ?? ''}} = 1 year {{$supplier->descriptions->name}}(US ${{ $supplier->price ?? ''}}) </label><br>

                                @if($supplier->id == $form_id)
                                @php
                                $s_price = $supplier->price
                                @endphp
                                @else
                                @endif

                                @else
                                      &nbsp;  
                                @endif
                                @endforeach
                        </div>
                    </div>
                    <div class="col-sm-12" style="margin-bottom:5%;">
                        <b style="font-size: 15px;">Membership Duration : </b> 
                        <select name="membership_duration"  style="width:100px;">
                            <option value="1" selected>1 Year</option>
                            <option value="32">3 month</option>
                            <option value="62">6 month</option>
                            <option value="2">2 Year</option>
                            <option value="3">3 Year</option>
                            <option value="4">4 Year</option>
                            <option value="5">5 Year</option>
                        </select>                       
                        <b style="font-size: 15px;">Membership Payment : </b> 
                        <div class="form-group" style="width:200px;display: inline-block;margin: 0;height: 19px;">
                            <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                            <div class="input-group">
                              <div class="input-group-addon" style="height: 27px;font-size: 12px;background-color: #EEEEEE !important;color: #000;">US $</div>
                              <input style="height: 27px;" type="text" class="form-control membership_fee" id="exampleInputAmount" name="amount" value="{!! $s_price !!}" readonly>
                            </div>
                        </div>

                    </div>
        <div class="row">
            <div class="col-sm-12 padding_0" style="background-color: #fff; border-top: 2px solid #e5e5e5;border-bottom: 1px solid #e5e5e5;margin-bottom: -2.2%;">
                        <div class="col-sm-2">
                                
                        </div>
                        <div class="col-sm-8">
                            <div class="col-sm-12" style="padding-left: 3%">
                                <span class="mermbership-title" style="border-left:1px solid #e5e5e5; border-right: 1px solid #e5e5e5; width: 101%;font-size:14px;padding-top: 6px;">Gold Supplier Membership</span>
                            </div>
                                
                        </div>
                        <div class="col-sm-2">
                            <span class="mermbership-title" style="padding-top: 6%;font-size:14px;padding-top: 6px;">FREE Member</span>
                        </div>
            </div>
            <div class="pricetable pricingtable55">
                <div class="pricetable-inner">
                    <div class="pricetable-column labeling" style="width:20%">
                        <div class="pricetable-column-wall" >
                            <ul class="features">
                                <li style="font-size: 10px">Priority Ranking</li>
                                <li style="font-size: 10px">Product Posting</li>
                                <li style="font-size: 10px">Product Showcases</li>
                                <li style="font-size: 10px">Ability to quote Buying Requests</li>
                                <li style="font-size: 10px">Verified Icon</li>
                                <li style="font-size: 10px">Customized Website</li>
                                <li style="font-size: 10px">Personalized Customer Service</li>
                                <li style="font-size: 10px">Image Disk</li>
                            </ul>
                        </div>
                      </div>
                     <?php $i = 1;?>
                     @foreach($supplier_memberships as $supplier_membership)
                     <?php $class_mem = 'mem'.$i; ?>
                      
                    <div class="pricetable-column highlight" style="width:20%">
                      <div class="pricetable-column-wall" style="border-top:1px solid #ddd;">
                        <div class="pricetable-header">
                          <div class="pricetable-fld-name" style="background-color: #fff !important; color: #666 !important; border:1px solid #e5e5e5; border-top: 0 none; border-right: 0 none;font-size:12px !important;">
                          @if($i == 4)
                          &nbsp;
                          @else
                          {{$supplier_membership->descriptions->name}}
                          @endif
                          </div>
                        </div>
                        <ul class="features">
                            <li><span>Bandwidth</span>
                                @if($supplier_membership->id==1)
                                {{$supplier_membership->id}}st
                                @elseif($supplier_membership->id==2)
                                {{$supplier_membership->id}}nd
                                @elseif($supplier_membership->id==3)
                                {{$supplier_membership->id}}rd
                                @else
                                {{$supplier_membership->id}}th
                                @endif
                            </li>
                            <li class="hasToolTip">
                                <span>Database Size</span>
                                @if($supplier_membership->product_quantity==0)
                                unlimited
                                @else
                                {{$supplier_membership->product_quantity}}
                                @endif
                                <!-- <small style="width:100%;height:170%; font-size:100%; padding:1% 5% 10% 3%; float:left; border-radius:10px !important;"><p style="font-size:100%;padding-right:2%;margin-top:3%; padding-left: 2%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras libero lacus, elementum nec elementum et, rhoncus at neque. </p></small> -->
                            </li>
                            <li><span>Disk Capacity</span>
                                @if($supplier_membership->Product_Showcases==0)
                                <i class="fa fa-times" aria-hidden="true"></i>
                                @else
                                {{$supplier_membership->Product_Showcases}}
                                @endif
                            </li>
                            <li><span>CPU Speed</span>@if($supplier_membership->Ability_to_quote_Buying_Requests==0)
                                <i class="fa fa-times" aria-hidden="true"></i>
                                @else
                                Y
                                @endif
                                </li>
                            <li><span>Memory</span>@if($supplier_membership->Verified_Icon==0)
                                <i class="fa fa-times" aria-hidden="true"></i>
                                @else
                                Y
                                @endif</li>
                            <li><span>SSL</span>@if($supplier_membership->Customized_Website==0)
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                @else
                                    Y
                                @endif</li>
                            <li><span>cPanel</span>@if($supplier_membership->Personalized_Customer_Service==0)
                                 <i class="fa fa-times" aria-hidden="true"></i>
                                @else
                                    Y
                                @endif
                                </li>
                            <li><span>PHP</span>
                                @if($supplier_membership->Photo_Bank_Size==0)
                                    150MB
                                @else
                                    {{ $supplier_membership->Photo_Bank_Size ?? '' }} GB
                                @endif
                            </li>
                          <!--   <li><span>Linux OS</span>&nbsp;<div class='yn_basic ni'></div></li> -->
                        </ul>
                        <div class="ribbon">HOT</div>
                        </div>
                    </div>
                    
            <?php $i++; ?>
                @endforeach
                    
                    
                    <div class="pricetable-clear"></div>
                </div>
            </div>
        </div>
<br>
    <!--pricing table ends Emam-->

    <div class="col-sm-12" style="">
        <p style="font-size: 13px; text-align: center;">
             See details of our <a href="{{URL::to('terms_use')}}">terms & condition.</a>
        </p>
    </div>
                    <div class="col-sm-12" style="">
                        <div class="text-center"><label><input type="radio" name="agree" value="agree" checked> I agree</label> &nbsp;<label><input type="radio" name="agree"> I disagree</label></div>
                    </div>
                    <div class="col-sm-12" style="margin-top:20px;background-color:#EFF4FA;padding-top: 17px;margin-top:20px;padding-bottom:10px; text-align: center;">
                          <button type="button" class="btn btn-primary btn-join make_payment">continue</button>
                    </div>
                    <div class="col-sm-12" style="margin-top:10px;">
                        <p style="font-size:10px;font-weight:700%;margin-left: -11px;color: #888;">If you have any questions, please contact our Service Centre at <a href="tel:+8801708884440">(880) 170-888-4440</a></p>
                        <p style="font-size:10px;font-weight:700%;margin-left: -11px;color: #888;">or email to <a href="mailto:goldsupplier@buyerseller.asia">goldsupplier@buyerseller.asia</a> for further assistance. </p>
                    </div>
         </div>
    
        
        <div class="col-sm-3">
        </div>
    </div>
           
                 
    </div>
</div>
        <div id="makepayment" class="tab-pane fade">
            @if($golds->country)
            @php
                $membership_id = $golds->country->iso_code_2.mt_rand()
            @endphp
            @else
            @php
                $membership_id = 'ABC'.mt_rand()
            @endphp
            @endif
            <div class="col-sm-12" style="margin-top:20px;">
                <input type="hidden" name="membership_id" value="{!! $membership_id !!}">
                <input type="hidden" name="company_id" value="{!! $company_id !!}">
                <input type="hidden" name="payment_method_name" value="">
                <div class="alert alert-danger error_payment" style="display: none;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Please select one payment method.</strong>
                </div>
                 <p style="color: #366A86;">Member ID: {!! $membership_id !!}</p>
                <p style="color: #366A86;">Membership Fee: US $<span class="membership_fee_text">{!! $s_price !!}</span></p>
                <p style="font-weight: 700;font-size: 11px;">
                    It takes just a few minutes to complete the payment process.
                </p>
            </div>
            <div class="col-sm-12" style="background-color:#EFF4FA;">
                <p style="color:#264176;font-weight:700;margin-bottom:10px;">Select Payment Method</p>
            </div>
            <div class="col-sm-12">
                
                <div class="col-sm-3">
                     <label><input type="radio" id="PayPal" name="payment_method" value="PayPal">
                     <img style="height:30px;width:46%;" src="{!! asset('assets/gold/10.png',is_secured()) !!}" alt="" /></label></div>
                <div class="col-sm-3">
                     <label><input type="radio" id="VISA" name="payment_method" value="VISA">
                     <img style="height:30px;width:46%;" src="{!! asset('assets/gold/11.png',is_secured()) !!}" alt="" /></label></div>
                <div class="col-sm-3">
                    <label><input type="radio" id="MasterCard" name="payment_method" value="MasterCard">
                    <img style="height:30px;width:46%;" src="{!! asset('assets/gold/13.png',is_secured()) !!}" alt="" /></label></div>
                <div class="col-sm-3">
                    <label><input type="radio" id="AMERICANEXPRESS" name="payment_method" value="AMERICANEXPRESS">
                    <img style="height:30px;width:46%;" src="{!! asset('assets/gold/14.png',is_secured()) !!}" alt="" /></label></div>
          
            </div>

            <div class="col-md-8 st-pay" style="display: none">
               <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                                                     data-cc-on-file="false"
                                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                                    id="payment-form">
                        @csrf
                <div class="panel-body">
                 
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif  
                    <input style="height: 27px;" type="hidden" class="form-control membership_fee" id="exampleInputAmount" name="amount" value="{!! $s_price !!}">
                    <input style="height: 27px;" type="hidden" class="form-control" id="mduration" name="membership_duration" value="1">
                    <input style="height: 27px;" type="hidden" class="form-control" id="packname" name="supplier_package_name" value="{{ $form_id }}">
                    <input style="height: 27px;" type="hidden" class="form-control" name="membership_id" value="{!! $membership_id !!}">
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'

 
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>
  
                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>
  
                      
                          
                </div>
                 <button type="submit" class="btn btn-default" style=" margin-left: 2.5%;font-weight:700;color:#033B63;border-color: #BAC6D9 #7A8699 #7A8699 #BAC6D9;">
                    Confirm checkout
                </button>
                {!!Form::close()!!}
            </div>
            
            <div class="col-sm-12 payout" style="display: none;padding-top: 30px;padding-bottom: 100px">
                <section class="pay-area">
                  <div>
                   @if (session('error') || session('success'))
                   <p class="{{ session('error') ? 'error':'success' }}">
                    {{ session('error') ?? session('success') }}
                   </p>
                   @endif
                   <form method="POST" action="{{ route('create-payment') }}">
                    @csrf
                    <div class="m-2">
                     <input style="height: 27px;" type="hidden" class="form-control membership_fee" id="exampleInputAmount" name="amount" value="{!! $s_price !!}">
                     <input style="height: 27px;" type="hidden" class="form-control" id="mduration2" name="membership_duration" value="1">
                     <input style="height: 27px;" type="hidden" class="form-control" id="packname2" name="supplier_package_name" value="{{ $form_id }}">
                     <input style="height: 27px;" type="hidden" class="form-control" name="membership_id" value="{!! $membership_id !!}">
                     @if ($errors->has('amount'))
                     <span class="error"> {{ $errors->first('amount') }} </span>
                     @endif
                    </div>
                    <button type="submit" class="btn btn-default" style="margin-left: 2.5%;font-weight:700;color:#033B63;border-color: #BAC6D9 #7A8699 #7A8699 #BAC6D9;">
                    Checkout with paypal
                </button>
                   </form>
                  </div>
                 </section>
            </div> 
            <div class="col-sm-12" style="margin-top:50px;">
                        <p style="font-size:10px;font-weight:700%;margin-left: -11px;color: #888;">If you have any questions, please contact our Service Centre at <a href="tel:+8801708884440">(880) 170-888-4440</a></p>
                        <p style="font-size:10px;font-weight:700%;margin-left: -11px;color: #888;">or email to <a href="mailto:goldsupplier@buyerseller.asia">goldsupplier@buyerseller.asia</a> for further assistance. </p>
                    </div>
                 
        </div>
        <div id="complete" class="tab-pane fade">
        
            <div class="col-sm-12" style="background-color:#437CAF;font-weight: bold;padding-top: 10px;margin-top: 10px;">
                <p style="color:#fff!important;">Upgrade to Gold Supplier Membership</p>
            </div>
            <div class="col-sm-12" style="margin-top:20px;">
                <p style="font: 2em/180% Roboto,Helvetica,Tahoma,Arial,sans-serif;">Pay by <span id="payment_method_name">Wire Transfer (T/T)</span></p>
            </div>
            <div class="col-sm-12" style="background-color:#EFF4FA;margin-top:20px;margin-bottom:20px;">
                <p style="color: #264176;font-size: 14px;font-weight: bold;line-height: 30px;">Step 1. Make your payment US$ <span id="your_payment">{!! $s_price !!}</span> to</p>
            </div>
            <div class="col-sm-12">
                <p style="font-size: 11px;"><b>Account Number for US Dollars </b>   260-647326-178</p>
                <p style="font-size: 11px;"><b>Account Name </b>    Bdtdc  Private Limited</p>
                <p style="font-size: 11px;"><b>Bank Name </b>   The Hongkong and Shanghai Banking Corporation Limited</p>
                <p style="font-size: 11px;"><b>Bank Address </b>   21 Collyer Quay #03-01 HSBC Building Singapore 049320</p>
                <p style="font-size: 11px;"><b>Bank SWIFT Code</b>  HSBCSGSG</p>
            </div>
            <div class="col-sm-12" style="background-color:#EFF4FA;margin-top:20px;margin-bottom:20px;">
                <p style="color: #264176;font-size: 14px;font-weight: bold;line-height: 30px;">
                    and include the following in your wire transfer message to the Beneficiary:
                </p>
            </div>
            <div class="col-sm-12">
                <p style="font-size: 11px;"><b>Your Company Name : </b>{{$golds->name_string->name ?? ''}}</p>
                <p style="font-size: 11px;"><b>BuyerSeller Member ID</b>    {!! $membership_id !!}</p>
                <p style="font-size: 11px;"><b>Transaction Reference Number </b>    pm_en_101506756</p>
            </div>
            <div class="col-sm-12" style="background-color:#EFF4FA;margin-top:20px;margin-bottom:20px;">
                <p style="color: #264176;font-size: 14px;font-weight: bold;line-height: 30px;">
                    Step 2. Send your bank remittance document to our email at goldsupplier@buyerseller.asia for our immediate
                     attention.
                </p>
            </div>
            <div class="col-sm-12">
                <p style="font-size:11px;">Once we receive your payment, Bdtdc will send your company information to a third party credit agency for </p>
                <p style="font-size:11px;">Business Authentication & Verification (3-15 days). </p>
                <p style="font-size:11px;">Your Gold Supplier membership will be immediately activated once the information is authenticated and verified.</p>
                <p style="padding-top:10px;font-size:11px;">Meanwhile, you can post new products or post new selling leads</p>
                <p style="font-size:11px;padding-top:10px;">If you meet any problem concerning the payment, please contact us at </p>
                <p style="font-size:11px;">Email: goldsupplier@buyerseller.asia</p>
                <p style="font-size:11px;">Tel: (88) 0170 888 4440. </p>
                <p style="font-size:11px;padding-top:10px;">Thank you for using <a href="{{ URL::to('/',null,is_secured()) }}" target="_blank"> buyerseller.asia. </a> </p>
                <p style="font-size:11px;padding-top:10px;">Note: This page will be emailed to your email account for your record and future reference.</p>
                <button type="button" class="btn btn-default" onclick="window.print()" style="margin-left: 38%;font-weight:700;margin-top:20px;">
                    Print Page
                </button>
            </div>
                
            
        </div>

        </div>
       
    </div>
	  @stop
        @section('scripts')
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
        <script type="text/javascript">
    $(function() {
    var $form         = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });
  
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            // token contains id, last4, and card type
            var token = response['id'];
            // insert the token into the form so it gets submitted to the server
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
  
});
</script>
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

                    function balance_format(number) {
                        return number.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,");
                    }

                    $(document).on({click:function(e){
                        if ($('[value="agree"]').prop('checked')==true){
                            window.scrollTo(0,0);
                            $('.make_payment_tab').attr('href','#makepayment');
                            $('.make_payment_tab').click();
                            // $('.make_payment').click();
                        }else{
                            $('.make_payment_tab').attr('href','#');
                        }
                    }},'.make_payment');

                    $(document).on({click:function(){
                        var packagename = parseInt($(this).val());
                        var selected_price = parseInt($(this).attr('s_price'));
                        var membership_duration = parseInt($('[name="membership_duration"]').val());
                        var membership_fee = (selected_price*membership_duration);
                        $("#packname").val(packagename);
                        $("#packname2").val(packagename);
                        $('.membership_fee').val(membership_fee);
                        $('.membership_fee_text').html(membership_fee);
                        $('#your_payment').html(balance_format(membership_fee));
                    }},'[name="supplier_package_name"]');
                    
                    $(document).on({change:function(){
                        var membership_duration = parseInt($(this).val());
                        var selected_price = parseInt($('input[name="supplier_package_name"]:checked').attr('s_price'));
                        if(membership_duration==32){
                            var membership_fee =  (selected_price*0.25)+((selected_price/100)*15);
                            var membership_duration = 0.4;
                        }
                        else if(membership_duration==62){
                            var membership_fee = (selected_price*0.5)+((selected_price/100)*15);
                            var membership_duration = 0.5;
                        }
                        else{
                        var membership_fee = (selected_price*membership_duration);
                        alert(membership_duration);
                        }
                        $('.membership_fee').val(membership_fee);
                        $("#mduration").val(membership_duration);
                        $("#mduration2").val(membership_duration);
                        $('.membership_fee_text').html(membership_fee);
                        $('#your_payment').html(balance_format(membership_fee));
                    }},'[name="membership_duration"]');

                    // $(document).ready(function(){
                    //     $('input[type="radio"]').click(function(){
                    //         var demovalue = $(this).val(); 
                    //         $("div.myDiv").hide();
                    //         $("#show"+demovalue).show();
                    //     });
                    // });
                    $(function() {
                       $("input[name='payment_method']").click(function() {
                         if ($("#PayPal").is(":checked")) {
                            // alert('s');
                           $(".st-pay").hide();
                           $(".submit_info").hide();
                           $(".payout").show();
                           
                         } 
                         else if($("#AMERICANEXPRESS").is(":checked")) {
                            // alert('s');
                           $(".st-pay").show();
                         }
                         else if($("#VISA").is(":checked")) {
                            // alert('s');
                           $(".st-pay").show();
                           $(".require-validation").show();
                           $(".payment_form").hide();
                           $(".payout").hide();
                         }
                         else if($("#MasterCard").is(":checked")) {
                            // alert('s');
                           $(".st-pay").show();
                         }
                         else {
                           $(".st-pay").hide();
                         }
                       });
                     });
                    $(document).on({click:function(){
                        if ($('[value="agree"]').prop('checked')==true){
                            // alert ($('.payment_form').serialize());
                            var payment_method = $('[name="payment_method"]:checked').val();
                            var submit_url = window.location.origin+'/user/upgrade_data';
                            var paypal_url = window.location.origin+'/checkout';
                            if(payment_method == null){
                                $('.error_payment').show();
                            }
                            
                        
                            else{
                                $.post(submit_url,$('.payment_form').serialize(),function(result){
                                    if(result == 1){
                                        $('.apply').attr('href','#');
                                        $('.make_payment_tab').attr('href','#');
                                        $('.complete').attr('href','#complete');
                                        $('.complete').click();
                                    }
                                    if(result == 2){
                                        alert ('Validate failed');
                                    }
                                    if(result == 3){
                                        alert ('PayPal');
                                    }
                                    else{
                                        alert ('Package upgrade failed. Please contact with service provider.');
                                    }
                                });
                            }
                        }else{
                            $('.apply').click();
                            window.scrollTo(0,0);
                            $('.error_message').show();
                        }
                    }},'.submit_info');

                    $(document).on({change:function(){
                        $('[name="payment_method_name"]').val($(this).val());
                        $('#payment_method_name').html($(this).val());
                        $('.error_payment').hide();
                    }},'[name="payment_method"]');
                });

            </script>
@stop
	