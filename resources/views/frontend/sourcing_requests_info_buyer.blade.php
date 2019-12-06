@extends('fontend.master_dynamic')

@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/whole-sale-category-product.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/m-category.css',is_secured()) !!}" rel="stylesheet">
    
    @endsection
@section('content')
<div class="row" style="background-color: #fff; margin-top: 38px;margin-bottom:3%; ">
<div class="col-sm-12" style="margin-top:20px;">
    <div class="col-sm-6">
       <p><a href="{{ URL::to('/',null,is_secured())}} ">Home </a> <i class="fa fa-angle-double-right"></i> Easy Sourcing</p>
        
    </div>
    <div class="col-sm-6">
        <a href="{{URL::to('Sourcing/Requests/info',null,is_secured())}}" style="float:right;color: #246bb3;font-size: 14px;font: 12px/1.5 Arial,sans-serif;font-weight: bold;">
        I am Supplier</a>
    </div>
</div>
<div class="col-sm-12" id="buyer">
    <div class="col-sm-12">
        <p id="easy">Easy Sourcing</p>
        <p id="more">More Convenient, More Efficient</p>
        <p id="extra1">1 request, multiple quotes</p>
        <p id="extra2">Verified suppliers matching</p>
        <P id="extra3">Quotes comparison and sample request</P>
    </div>
    <div class="col-sm-12" style="margin-top:5.5%;">
        <div class="col-sm-5">
            <p id="want">Want to get quotations?</p>
        </div>
        <div class="col-sm-7">
            <a href="{{ URL::to('get-quotations',null,is_secured())}}" target="_blank" type="button" class="btn btn-danger" style="height:47px;border-radius:5px!important;font-size:18px;color:#fff!important;margin-top: 0.4%;">Post Sourcing Request Now</a>
        </div>
    </div>
    
</div>
<div class="col-sm-12" style="margin-top:20px;border-bottom: 2px solid #ccc;">
    <p id="buyer1">What is Easy Sourcing ?</p>
</div>
<div class="col-sm-12 padding_0" style="margin-top:20px;">
    <p id="buyer2">Easy Sourcing is an online sourcing service for buyers to post sourcing requests and get quotations from verified 
    suppliers. It is the most time and cost saving sourcing tool for both buyers and suppliers.</p>
</div>
<div class="col-sm-12" style="margin-top:20px;border-bottom: 2px solid #ccc;">
    <p id="buyer1">How does Easy Sourcing Work?</p>
</div>

<div class="col-sm-12" id="source" style="background-color:#fff!important;padding-left:20px;">
       <div class="col-sm-3">
           <p style="padding-left: 20%;padding-top: 20px;">Buyer Submits</p><p style="padding-left: 20%;padding-bottom: 0px;"> Sourcing Request</p>
       </div>
       <div class="col-sm-3">
           <p style="padding-left: 31px; padding-top: 9%;">BuyerSeller.Asia </p><p style="padding-left: 31px;">Matches Suppliers</p>
       </div>
       <div class="col-sm-3">
           <p style="padding-left: 15%; padding-top: 9%;">Suppliers</p><p style="padding-left:15%;">Provide Quotations</p>
       </div>
       <div class="col-sm-3">
           <p style="padding-left: 11%;padding-top: 9%;">Buyer Receives Quotes </p><p style="padding-left: 11%;">and Contacts Suppliers</p>
       </div>
</div>



    <div class="col-sm-12" style="margin-top:3%;padding-bottom: 2%">
        <div class="category-tab"><!--category-tab-->
            
                <ul class="nav nav-tab nav-pills trade-show-ul " style="background:none;border-bottom: 1px solid #dae2ed;">
                    <li style="padding-top: 11px;font-size: 15px;font-weight: 600;">Selected Brand</li>
                    <li class="active" style="margin-left: 9.5%;"><a class="padding_0 catTarget" catid="all" href="#forbuyer" data-toggle="tab" aria-expanded="true">Hot Brands</a></li>
                    <?php
                    $categorys=array();
                    $chunked_cat_array = array_chunk($categorys, 5);
                    ?>
                    @if(isset($chunked_cat_array[0]))
                    @foreach($chunked_cat_array[0] as $cat)
                    <li><a style="font-size: 13px;" class="padding_0 catTarget" catid="{{ $cat->cat_id }}" 
                    href="#forbuyer" data-toggle="tab" aria-expanded="false">{{ $cat->cat_name}}</a></li>
                    @endforeach
                    @endif
                </ul>
        </div>
        
        <div class="tab-content">
            <input type="hidden" name="section" value="">
            <div class="tab-pane fade active in" id="forbuyer">
                <div class="col-sm-12 padding_0 replace_area">
                    <div style="text-align:center;margin-top:50px;margin-bottom:50px;">
                        <img src="{!! asset('assets/images/circle_preloader.gif')!!}" alt="Loading..." />
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="col-sm-12" style="margin-top:20px;border-bottom: 2px solid #ccc;">
        <p id="buyer1">Buyer's Feedback</p>
    </div>
    <div class="col-sm-12" style="padding-top:20px;">
        <div class="col-sm-6">
            <p id="p1">Easy Sourcing helps me trade easily!</p>
            <p id="p2">As a new member to BuyerSeller.asia, I posted my first request on Easy Sourcing one month ago.
            Fortunately, I received the first quality quotation from supplier clothing Solution., Ltd.
            within 2 months after submission! Finally I ordered Textile products from the supplier. 
            In the past I had to spend several days to find a satisfied supplier. Now, I only need a few hours!</p>
            
        </div>
        <div class="col-sm-6">
            <p id="p1">I have found several qualified suppliers through Easy Sourcing!</p>
            <p id="p2">I have been a premium buyer with BuyerSeller.asia for 1 year. Since the first time posting sourcing
            request on Easy Sourcing, I have found several reliable suppliers, it's convenient for me to receive rapid 
            quotations and compare the suppliers. Easy Sourcing has provided tremendous value to me. Now it's my favorite
            way to find Bangladeshi suppliers.</p>
        </div>
    </div>
</div>

@stop

@section('scripts')
<script type="text/javascript">

$(function(){
 

        $('.catTarget').click(function(e){
            e.preventDefault();
            $(".replace_area").html('<div style="text-align:center;margin-top:50px;margin-bottom:50px;"><img src="{!! asset('assets/images/circle_preloader.gif')!!}" alt="Loading..." /></div>');
            var catid = $(this).attr('catid');
            var href = window.location.href;
            var inq_id = href.substr(href.lastIndexOf('/') + 1);
            $.ajax({
                    type: "GET",
                    url: "{{ URL::to('product-sourcing/view',null,is_secured()) }}"+"/"+inq_id+"/"+catid,
                    success:function(result){
                        // alert (result);
                    if(result == ''){
                        $(".replace_area").html('<p style="font-size:25px;color:green;">No Product to show...</p>');
                    }else{
                        $(".replace_area").html(result);
                    }
                    }
                })
        });

        $('[catid="all"]').click();



   

    });
</script>
@stop