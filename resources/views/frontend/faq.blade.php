@extends('frontend.layouts.master-register')
    @section('page_css')
    <link property='stylesheet' href="{!! asset('assets/frontend/css/help-center.css',is_secured()) !!}" rel="stylesheet">
    @endsection
@section('content')

<div class="row">
    <div class="col-md-12 padding_0" style="padding-top: 10px">
      <ul style="float:left;margin-left: -2%" itemscope="" itemtype="http://schema.org/BreadcrumbList">
      <li style="float: left" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" style="color: #000"> Home &nbsp;</a></li>
      <li style="float: left" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="" style="color: #000"> <i class="fa fa-angle-right"></i> <strong> Help Center</strong> <i class="fa fa-angle-right"></i>
        </a>
      </li>
      </ul>
      <ul style="float:right;margin-left: -2%" itemscope="" itemtype="http://schema.org/BreadcrumbList">
        <li class="" ><a href="{{URL::to('supplier-helpcenter',null,is_secured())}}">Help Center For Supplier</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container-fluid" style="padding: 0; position: relative;background: #000">
    <img style="width: 100%; opacity: .7" src="{{URL::to('assets/fontend/bdtdc-images/help-how.jpg')}}">
    <div class="form-group " style="position: absolute; top: 50%; left:50%; transform: translate(-50%, -50%); width: 465px">
    <h1 class="text-center" style="color: #fff; margin-bottom: 20px;">How can we help?</h1>
                        <div class="col-sm-9 padding_0"> 
                            <input name="category_name" placeholder="Enter question or keyword. Example: Payment" style="height:50px;width: 110%;margin-left: -6%;" type="text" class="form-control category_name" aria-describedby="basic-addon2">
                        </div>
                        <div class="col-sm-3 padding_0">
                            <button type="submit" class="btn btn-default search_category" style="background:#255E98;color:#fff; border-radius: 0 3px 3px 0 !important;height:50px;width: 122%;"><i class="fa fa-search-plus"></i>Search Help</button>
                        </div>
                    </div>
</div>
<div class="container">
	<div style="clear:both"></div>  
			<div id="item_sha" class="row" style="padding-top: 25px; margin-bottom:10px;margin-top:2%;">
                <div class="col-sm-4">
                    <div class="left-sidebar" style="text-align: left;">
                        <h2 style="padding-left:18px;text-align: left; background-color: none;    margin-bottom: 12px;">Help Section</h2>
                        <div class="panel-group category-products">                          
                            <div class="panel panel-default">
                                <div style="margin-top: 1%;padding-bottom: 0px; padding-top: 0px;border: 1px solid #dae2ed;border-left: none;border-right: none;position: relative;padding-left: 4%;border-bottom: none;font-size: 16px !important;font: inherit;" class="panel-heading">
                                        
                                           <a target="_blank" style="color: #333;line-height: 47px;" href="{{ URL::to('services',null,is_secured())}}"> BuyerSeller Services <span class="pull-right"><i class="fa fa-angle-right"></i></span></a>

                                        
                                </div>
                            @foreach ($link_for_buyers as $link_for_buyer) 
                            <div style="margin-top: 0;padding-bottom: 0px; padding-top: 0px; border: 1px solid #dae2ed;border-left: none;border-right: none;position: relative;padding-left: 4%;border-bottom: none;font-size: 16px !important;font: inherit;" class="panel-heading">
                                        
                                           <a target="_blank" style="color: #333;line-height: 47px;" href="{{ URL::to($link_for_buyer->prefix.'/pages/'.$link_for_buyer->sort_name,$link_for_buyer->id,is_secured())}}"> {{ $link_for_buyer->name }} <span class="pull-right"><i class="fa fa-angle-right"></i></span></a>

                                        
                                </div>
                            @endforeach
                          </div>
                        </div>

                    </div>
                    <div class="left-sidebar" >
                        <h2 style="padding-left:18px;text-align: left;">FAQ Section</h2>
                        <div class="panel-group category-products" id="accordian" style="margin-bottom: 10px">
                           
                            <div class="panel panel-default">
                            	@if($parent_cat_name)
                                <?php $active_i=1; ?>
                            	@foreach($parent_cat_name as $data)
                              
                                    <div  class="parent_category_id  <?php if($active_i==1){echo 'category-active';} ?>" data-parent="{{$data->id}}" style="border: 1px solid #dae2ed;border-left: none;border-right: none;position: relative;padding-left: 4%;border-bottom: none;font-size: 16px !important;font: inherit;">
                                        <a target="_blank" href="" style="color: #333;line-height: 47px;">{{$data->name}} <span class="pull-right"><i class="fa fa-angle-right"></i></span></a>
                                    </div>
                                <?php $active_i++; ?>
                                @endforeach
                                @endif
                               
                            </div>

                        </div>


                    </div>
                    <!--/brands_products-->


                </div>



                <div class="col-sm-8 padding-right" style="padding-left: 4%;">
                    
                        
                        
                        

                        <div id="replace_area" style="padding-bottom: 3%;padding-right: 1%;">

                            <table class="table table-bordered" style="padding-left:40px;">
                                  <tr>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:26px;padding-left:0px;">
                                        <a itemprop="url" target="_blank" href="{{ URL::to('user/guide')}}">
                                            <h4 style="padding-left:20px;font-size:15px;">
                                               <img style="height:64px;width:64px;" src="{!! asset('assets/helpcenter/images/buyers-guide.jpg') !!}" alt="buyers guide" />
                                                Quick Buyer Guide
                                            </h4>
                                        </a>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:18px;padding-left:18px;">
                                        <a itemprop="url" target="_blank" href="{{ URL::to('select/suppliers') }}">
                                            <h4 style="font-size:15px;">
                                                <img style="height:64px;width:64px;" src="{!! asset('assets/helpcenter/images/contact-supplier.jpg') !!}" alt="contact supplier" />
                                                Contact Suppliers
                                            </h4>
                                        </a>
                                    </td> 
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:17px;padding-left:20px;">
                                        <a itemprop="url" target="_blank" href="{{ URL::to('buyer/contactsupplier') }}">
                                            <h4 style="font-size:15px;">
                                                <img style="height:60px;width:50px;" src="{!! asset('assets/gold/supplier-&-buyer-icon.jpg') !!}" alt="supplier buyer " />
                                               Connect Buyers
                                            </h4>
                                        </a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:25px;padding-left:20px;">
                                        <a itemprop="url" target="_blank" href="{{ URL::to('BuyerChannel/pages/inspection_service/19') }}">
                                            <div style="font-size:15px;">
                                                <img style="height:64px;width:64px;float: left;" src="{!! asset('assets/helpcenter/images/payment-inspection-logistics.jpg') !!}" alt="payment inspection logistics" />
                                                <p style="padding-top: 5px">Payment, Inspection & Logistics</p>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:21px;padding-left:21px;">
                                        <a itemprop="url" target="_blank" href="{{ URL::to('join')}}">
                                            <h4 style="padding-left:0px; font-size:15px;">
                                                <img style="height:60px;width:52px;" src="{!! asset('assets/helpcenter/images/Your-account.jpg') !!}" alt="Your account" />
                                                Your Account
                                            </h4>
                                        </a>
                                    </td>
                                    <td class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding-bottom:19px;padding-left:20px;">
                                        <a itemprop="url" target="_blank" href="{{ URL::to('security-list') }}">
                                            <h4 style="font-size:15px;">
                                                <img style="height:64px;width:64px;" src="{!! asset('assets/helpcenter/images/safety-and-security.png') !!}" alt="safety and security" />
                                                Safety & Security
                                            </h4>
                                        </a>
                                    </td>
                                  </tr>
                            </table>
                        </div>

                        <div class="" style="padding-left:0px;padding-bottom:0px;">
                             <h2 style="font-size:22px;font-weight:500;">Key Products &amp; Services</h2>
                        </div>

                        <div style="display: flex;">
                           
                            <div class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding: 10px">
                                        <a itemprop="url" href="{{URL::to('Policies_Rules',null, is_secured())}}">
                                            <div style="float: left; margin-right: 10px; margin-top: 12px; height: 64px; width: 32px;">
                                                <img title="Protect Account" class="img-responsive" src="{!! asset('assets/helpcenter/images/Buyer-Protection_lock.jpg') !!}" alt="Buyer Protection lock">
                                                </div>
                                                 <div style=" float: left; width: 180px;">
                                                    <h4>Protect Account</h4>
                                                    <p style="font-size: 13px">Learn more about phishing</p>
                                                </div>

                                                
                                        </a>
                                    </div>
                                    <div class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding: 10px">
                                    <a itemprop="url" href="{{URL::to('wholesale',null, is_secured()) }}">
                                            <div style="float: left; margin-right: 10px; margin-top: 12px; height: 64px; width: 32px;">
                                                <img title="Wholesale" class="img-responsive" src="{!! asset('assets/helpcenter/images/wholesale.png') !!}" alt="wholesale">
                                                 </div>
                                               <div style="float:left;width: 180px">
                                                    <h4> Wholesale</h4>
                                                    <p style="font-size: 13px">Purchase in small quantities</p>
                                                </div>                                               
                                        </a>
                                    </div> 
                                    <div class="col-md-4" style="border:1px solid rgba(0,0,0,.1)!important;padding: 10px">
                                        <a itemprop="url" href="{{ URL::to('BuyerChannel/pages/trade_assurance/5') }}">
                                            <div style="float: left; margin-right: 10px; margin-top: 12px; height: 64px; width: 32px;">
                                                <img title="Buyer Protection" class="img-responsive" src="{!! asset('assets/gold/Buyer-protect.jpg') !!}" alt="Buyer protect">
                                               </div>
                                                <div style="float:left; width: 180px">
                                                    <h4>Buyer Protection</h4>
                                                    <p style="font-size: 13px">Available for wholesale orders</p>
                                                </div>
                                            
                                               
                                        </a>
                                    </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6" style="padding-left:20px;padding-top:10px;">
                                    <p style="font-size:22px;font-weight:500;">Self-service</p>
                                    
                                        <p>
                                            <a itemprop="url" target="_blank" href="{!! URL::to('ServiceChannel/pages/submit_a_dispute/39') !!}">Submit a complaint</a>
                                           
                                        </p>
                                        
                                        <p>
                                            <a itemprop="url" target="_blank" href="{{ URL::to('forgot_password') }}">Retrieve Password</a>
                                        </p>
                                        <!-- <p>
                                            <a itemprop="url">Unsubscribe from Emails</a>
                                        </p>
                                        <p>
                                            <a itemprop="url">Cancel Membership</a>
                                        </p>
                                        <p>
                                            <a itemprop="url">Change Email Address</a>
                                        </p> -->
                                   
                                </div>
                                <div class="col-sm-6" style="padding-bottom:80px;">
                            <p style="font-size:22px;font-weight:500;padding-top:10px;">More Help</p>
                                 <p>
                                    <a itemprop="url" target="_blank" href="{{ URL::to('BuyerChannel/pages/trade_answers/22')}}">Trade answers</a>
                                  </p>
                                  <p>
                                    <a itemprop="url" target="_blank" href="{{ URL::to('FooterPage/pages/Policies_Rules/22')}}">Policies &amp; rules</a>
                                  </p>
                                  <p>
                                    <a itemprop="url" target="_blank" href="{{ URL::to('get-quotations')}}">Get Quotations</a>
                                  </p>
                                  <p>
                                    <a itemprop="url" target="_blank" href="{{ URL::to('Bdsource-home-page')}}">Bdsource for Buyer</a>
                                  </p>
                                 <!--  <p>
                                    <a itemprop="url" target="_blank" href="http://apps.bditdc.com/BuyerChannel/pages/trade_intelligence/20">Trade Intelligence</a>
                                  </p> -->
                            
                            
                            
                        </div>
                        </div>



                        
                </div>

    
</div>

<br>

@stop
@section('scripts')
    <script type="text/javascript">

    /*parent category*/
    $(document).on({click:function(e){
	e.preventDefault();
	var _this =$(this);
    var base_url='{{URL::to("/")}}';

    $('.parent_category_id').removeClass('category-active');
    $(this).addClass('category-active');

    var parent_category_id = $(this).attr('data-parent');

    var url=base_url+'/faq-category-search?parent_category_id='+parent_category_id;
 //  	$.get(url,{},function(result){
	// 	$('#replace_area').html(result);
	// });
    window.location.href=url;

	}},'.parent_category_id');

    /*parent category*/



 /*category search*/
$(document).on({click:function(e){
        e.preventDefault();
        var base_url='{{URL::to("/")}}';

        var category_search= $('.category_name').val();
        $('input[name="category_name"]').val(category_search);
        var category_name = $('input[name="category_name"]').val();
        // alert(category_name);
        var url=base_url+'/category-search?category_name='+category_name;
            
        $.get(url,{},function(result){
            $('#replace_area').html(result);
        });

    }},'.search_category');
/*category search*/
function goBack() {
    window.history.back();
}
                
    </script>
@stop