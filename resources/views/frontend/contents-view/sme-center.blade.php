@extends('frontend.layouts.master-register')
@section('page_css')
<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bangladesh-business-style.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/bdtdc-sme-center-style.css',is_secured()) !!}" rel="stylesheet">
@endsection
@section('content')

<div class="row">
   <div class="col-sm-12 col-md-12 col-lg-12" style=" padding-bottom: 8px;">
      <ul class="top-path" style="padding-bottom: 8px;" itemscope="" itemtype="http://schema.org/BreadcrumbList">
         <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
         <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('about-us',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">About BuyerSeller</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
         <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">BuyerSeller SME Center</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
      </ul>
   </div>
</div>

<div class="row padding_0" style="background-color: #fff;">
   <div class="col-lg-3" style="padding:0;padding-right: 10px; padding-top: 15px">
      <div style="background-color: #255E98;">
         <p class="bdtdc-sme-p">General Information</p>
      </div>
      @include('frontend/contents-view/small-business-menu')
      <div style="border:1px solid #255E98; width: 100%; display: block;">
      </div>
   </div>
   <div class="col-lg-9" style="padding:0;padding-top: 15px">
      <div class="col-sm-12 padding_0" style="padding-top: 0;background: #f7f3f0;">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" style="border-radius:10px !important; border:0 none;" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;"></li>
               <li data-target="#myCarousel" data-slide-to="2" style="border-radius:10px !important; border:0 none;"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <div class="item active">
                  <img itemprop="image" style="width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/bdtdc-Training.jpg') !!}" alt="bangladesh means business">
               </div>
               <div class="item">
                  <img itemprop="image" style="width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/confrence-center.jpg') !!}" alt="bangladesh means business">
               </div>
               <div class="item">
                  <img itemprop="image" style="width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/bdtdc-business-cousulting.jpg') !!}" alt="bangladesh means business">
               </div>
            </div>
            <span class="sr-only">Previous</span>
            <span class="sr-only">Next</span>
         </div>
      </div>
      <div class="col-sm-12 padding_0">
         <div style="padding-top: 15px;">
            <img itemprop="image" style="width: 100%; display: block; height: 40px;" src="http://www.bdtdc.com/assets/fontend/bdtdc-images/1285667269526_upcoming_main.jpg" alt="">
         </div>
      </div>
      <div class="col-sm-12 padding_0">
         <table class="table table-striped">
            <thead>
               <tr>
                  <th>Date</th>
                  <th>Topic</th>
               </tr>
            </thead>
            <tbody>
            	@foreach($tradeshows as $tradeshow)
               <tr>
                  <td>{{$tradeshow->date}}</td>
                  <td><a itemprop="url" class="trade-title1-a" href="{{ URL::to('tradeshow/info-details',$tradeshow->tradeshow_id,is_secured())}}">{{$tradeshow->title}}</a></td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
      <div class="col-sm-12 padding_0">
         <div style="padding: 20px 0;">
            <img itemprop="image" style="width: 100%; display: block; height: 40px;" src="{!! asset('assets/fontend/bdtdc-images/1289897437882_WhatNew_main.gif') !!}" alt="sme">
         </div>

      </div>

      <div class="col-sm-12 padding_0" style="border-bottom: dotted #ddd; padding-bottom: 15px;">
         <div class="col-sm-2" style="padding: 0;">
            <a itemprop="url" href="#">
               <img itemprop="image" class="bd-busi-img" src="{!! asset('assets/fontend/bdtdc-images/sme.jpg',is_secured()) !!}" alt="sme">
            </a>
         </div>
         <div class="col-sm-10">

            <h3 class="bdtdc-tit" style="padding-top: 15px; font-size: 17px; color: #999;">Highlight of SME Management Workshop - "Management by Ennea Psychology - Tips & Skills"</h3>
         </div>
      </div>
      <div class="col-sm-12 padding_0" style="border-bottom: dotted #ddd;padding-bottom: 15px;">
         <div class="col-sm-2" style="padding: 0;">
            <a itemprop="url" href="#">
               <img itemprop="image" class="bd-busi-img" src="{!! asset('assets/fontend/bdtdc-images/sme-smeiner.jpg',is_secured()) !!}" alt="">
            </a>
         </div>
         <div class="col-sm-10">
            <h3 class="bdtdc-tit" style="padding-top: 15px; font-size: 17px; color: #999;">
               Helping Bangladesh Companies Grow: The Buyer Seller SME Centre</h3>
            <p style="font-size: 14px;color: #7c7c7c; padding-top: 20px; width: 100%; font-weight: bold;">The newly-renovated Buyer Seller SME Centre is a resource and service facility that provides practical information and free professional advice for business starters and small to medium-sized enterprises (SMEs). This helpful centre also offers comprehensive export-marketing services to businesses.</p>
         </div>
      </div>
      <div class="col-sm-12 padding_0" style=" padding-bottom: 15px;">
         <div class="col-sm-2" style="padding: 0;">
            <a itemprop="url" href="#">
               <img itemprop="image" class="bd-busi-img" src="{!! asset('assets/fontend/bdtdc-images/sme-smeiner-2.jpg',is_secured()) !!}" alt="">
            </a>
         </div>
         <div class="col-sm-10">
            <h3 class="bdtdc-tit" style="padding-top: 15px; font-size: 17px; color: #999; border-bottom: o none;">Buyer Seller SME Centre opens for business</h3>
            <p style="font-size: 14px;color: #7c7c7c; padding-top: 20px; width: 100%; font-weight: bold;">The SME Centre is a centralised resource and interactive service centre for SMEs, and is equipped with up-to-date trade information, electronic databases and business facilities for your use. Welcome to experience for yourself. </p>
         </div>
      </div>
   </div>
</div>
<br>

@stop
@section('scripts')
<script type="text/javascript">
</script>
@stop