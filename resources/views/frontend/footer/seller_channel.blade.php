@extends('fontend.master_dynamic')
@section('page_css')
  <link property='stylesheet' href="{!! asset('css/sell-on/seller-channel.css',is_secured()) !!}" rel="stylesheet">
  @endsection
@section('content')
<div class="row" style="margin-bottom: 8px">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a" ><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
      <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="#" class="top-path-li-a"><span itemprop="name">Seller Channel</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    </div>

<div class="row" style="padding:0;background: white">
       <ul class="nav nav-tabs" aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" style="">
          <li class="active"><a itemprop="url" href="{!! URL::to('SupplierChannel/pages/seller_channel',40,is_secured()) !!}">Home</a></li>
          <li><a itemprop="url" href="{!!URL::to('SupplierChannel/pages/suppliers_memebership/30')!!}">Seller Memberships</a></li>
          <li><a itemprop="url" href="{!! URL::to('SupplierChannel/pages/training_center',34,is_secured()) !!}">Training</a></li>
          <li><a itemprop="url" href="{!! URL::to('SupplierChannel/pages/learning_center',33,is_secured()) !!}">Learning Center</a></li>
          <li><a itemprop="url" href="{!! URL::to('success/stories',is_secured()) !!}">Success Stories</a></li>

       </ul>
</div>
</div>
<div class="container-fluid padding_0">
<div  style="background-color: #fff;">
       <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active" style="border-radius: 10px !important; border:0 none;"></li>
                <li data-target="#carousel" data-slide-to="1" style="border-radius: 10px !important; border:0 none;"></li>
                <li data-target="#carousel" data-slide-to="2" style="border-radius: 10px !important; border:0 none;"></li>
               
                
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner" itemscope itemtype="http://schema.org/ImageObject">
                
                <div class="item active">
                <img src="{!! asset('assets/fontend/images/Membership-package.jpg',is_secured()) !!}" itemprop="contentUrl" alt="Membership package" style="width:100%;height:400px;">
                <div class="container">
                    <div class="row">
                          <div class="carousel-caption cont-slider-caption">
                        <h4 class="busi-title-th" style="color: #000 !important; padding-left:8px;" itemprop="name">Want to reply directly to buyers inquiries?</h4>

                        <h3  class="business-them" style="color: #000 !important;">Buy Gold supplier membership package today!</h3>
                        <p class="list-theme" style="font-size:14px;"><i class="fa fa-circle" aria-hidden="true" style="color:#000; font-size:8px;"></i>Only Gold suppliers have access to buyer inquiries</p>
                        <p class="list-theme" style="font-size:14px;"><i class="fa fa-circle" aria-hidden="true" style="color:#000; font-size:8px;"></i>It’s just worth the cost</p>
                       
                    </div> 
                    </div>
                  </div> 
                </div>
               <div class="item">
                <img src="{!! asset('assets/fontend/images/Exclusive-package.jpg',is_secured()) !!}" itemprop="contentUrl" alt="Exclusive package" style="width:100%; height:400px;">
                   <div class="carousel-caption cont-slider-caption">
                   <div class="container">
                      <div class="row">
                  <h4 class="busi-title-th" style="color: #000 !important; padding-left:8px;" itemprop="name">An exclusive package</h4>

                  <h3  class="business-them" style="color: #000 !important;">Get more inquiries with our extra inquiries package</h3>
                    <p class="list-theme" style="font-size:14px;"><i class="fa fa-circle" aria-hidden="true" style="color:#000; font-size:8px;"></i>Low cost</p>
                    <p class="list-theme" style="font-size:14px;"><i class="fa fa-circle" aria-hidden="true" style="color:#000; font-size:8px;"></i>Extra inquiries</p>
                    <p class="list-theme" style="font-size:14px;"><i class="fa fa-circle" aria-hidden="true" style="color:#000; font-size:8px;"></i>Higher exposure</p>
                 
                </div> 
                </div> 
                </div>
                </div>
                 <div class="item">
                <img src="{!! asset('assets/fontend/images/product-sourcing.jpg',is_secured()) !!}" itemprop="contentUrl" alt="product sourcing" style="width:100%; height:400px;">
                <div class="container">
                <div class="row">
                 <div class="carousel-caption cont-slider-caption" style="left:50%; top:22%;">
                  <h4 class="busi-title-th" style="color: #000 !important; padding-left:8px; font-size:20px;" itemprop="name">Get thousands of RFQs everyday</h4>
                  <h3  class="business-them" style="color: #666 !important;">Huge pool of sourcing needs for your company</h3>
                </div> 
                </div> 
                </div>
                </div> 
            </div>
           
</div>

</div> 
</div>
<div class="container">   
<div class="row seller-uptitle" style="background-color: #fff;">
      <div class="col-md-4"><h3>Training</h3></div>
      <div class="col-md-4"><h3>Learning Center</h3></div>
      <div class="col-md-4"><h3>Seller Memberships</h3></div>
      
</div>
<div class="row" style="background-color: #fff; padding-bottom: 5%;">
      <div class="col-md-4">
            <p class="sell-words">Online Training gives you the key operational steps & skills to develop your international trade business.<a itemprop="url" href="{!! URL::to('SupplierChannel/pages/training_center',34,is_secured()) !!}"> Learn more</a></p>
            
            
            <p class="sell-words" style="font-size:14px; color:#060606;">Upcoming Training Events:</p>
            <br>
          <!--   <div class="sell-words" style="padding-left: 30px;">
              <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/dective-icon.jpg',is_secured()) !!}" alt="dective-icon" style="width:50px;height:50px; clear:both; display:block;" >
                  <br><label class="title10">APR</label>
                  <br>
                   
                  <p class="sell-words-join">
                        <a itemprop="url" href="{{URL::to('/')}}" style="font-size:12px;">
How to Attract More Buyers On bdtdc.com</a><br>
                        Tutor: Serena & Maomao<br>
                       <a itemprop="url" href="{{URL::to('join')}}"> Join now </a>
                </p>
               
            </div> -->
            <div class="sell-words" style="padding-left: 30px;display: flex;">
              <div style=" width: 60px;">
                          <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/dective-icon.jpg',is_secured()) !!}" alt="dective-icon" style="width: 50px;clear:both;">
                              <button class="btn " style=" padding: 1px 12px; font-size: 13px">APR</button>
              </div>
                  
                  <p style="padding: 0;">
                        <a itemprop="url" href="{{URL::to('/')}}" style="font-size:12px;">How to Attract More Buyers On BuyerSeller.Asia</a><br>
                        Tutor: Serena &amp; Maomao<br>
                       <a itemprop="url" href="{{URL::to('join')}}"> Join now </a>
                </p>
               
            </div>
              
            
      </div>
      <div class="col-md-4">
            <p class="sell-words">Learning center for you to grab quick tips and guidance to help you gain good business on BuyerSeller.Asia.<a itemprop="url" href="{!! URL::to('SupplierChannel/pages/learning_center',33,is_secured()) !!}"> Learn more</a> </p>
            <p class="sell-words " style="font-size:14px; color:#060606;">Hot Video Tutorials:</p>
            <br>
          
            <div class="sell-words" style="padding-left: 30px;display: flex;">
              <div style=" width: 60px;">
                          <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/Icon_6.png',is_secured()) !!}" alt="Icon_6" style="width: 50px;clear:both;">
                              <button class="btn " style=" padding: 1px 4px;font-size: 13px;">VIDEO</button>
              </div>
                  
                  <p style="padding: 0;">
                        <a itemprop="url" href="{{URL::to('/')}}" style="font-size:12px;">Search & Get in Touch with Buyers</a><br>
                        Tutor: Serena & Maomao<br>
                       <a itemprop="url" href="{{URL::to('join')}}"> Join now </a>
                </p>
               
            </div>
             
      </div>
      <div class="col-md-4">
            <div class="sell-words-g">
             <div class="col-xs-12" style="padding-top: 10px;padding-bottom: 15px;"> 
                <div class="col-xs-3" style="padding-right: 0;"> 
                  <img itemprop="image" src="{!! asset('assets/helpcenter/Gold-membership.png',is_secured()) !!}" style="width:44px;display:block; float: left;" alt="gold Member">
                </div>
                <div class="col-xs-9" style="padding-top: 12px; padding-left: 0;">
                  <a itemprop="url" class="sell-word-a" style="margin-left: 0;" href="{{URL::to('SupplierChannel/pages/suppliers_memebership',23)}}" >Gold Supplier Membership</a>
                </div>
              </div>      
            </div>
            <div class="sell-words">
              <p class="sell-words-gold" style="padding-left: 40px;">Maximize your company's exposure and<br> business opportunities</p>
               <p class="sell-words-gold-rank" style="width: 100%;display: block;overflow: hidden;"> -Top-tier ranking</p>
               <p class="sell-words-gold-rank" style="width: 100%;display: block;overflow: hidden;"> -Unlimited products display</p>
               <p class="sell-words-gold-rank" style="width: 100%;display: block;overflow: hidden;"> -Exclusive access to buyers</p>
               <p class="sell-words-gold-rank" style="width: 100%;display: block;overflow: hidden;"><a itemprop="url" href="{{URL::to('Bdtdc/Gold-supplier')}}">Learn more </a>about seller memberships</p>
             </div>
           </div>
      </div>

<br>
@stop
@section('scripts')
<script>
      $('.carousel').carousel();
</script>

@stop