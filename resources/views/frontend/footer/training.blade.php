@extends('fontend.master_dynamic')
    @section('page_css')
      <link property='stylesheet' href="{!! asset('css/for-suppliers/training-center.css',is_secured()) !!}" rel="stylesheet">
      {{-- <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/learning-center.css',is_secured()) !!}" rel="stylesheet"> --}}
    @endsection
@section('content')
<div class="row" style="margin-bottom: 8px">

      <ul class="top-path" style="padding-bottom: 8px;">
                        <li class="top-path-li"><a itemprop="url" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"><a itemprop="url" href="{{URL::to('ServiceChannel/pages/for_buyer',35,is_secured())}}" class="top-path-li-a">Help Center <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"><a itemprop="url" href="{{URL::to('SupplierChannel/pages/training_center',34),is_secured()}}" class="top-path-li-a">Training<i class="fa fa-angle-right top-path-icon"></i></a></li>
                       
          </ul>
</div>
<div class="row" style="background-color: #fff; margin-top: 1px; padding-top: 5px;">
       <ul class="nav nav-tabs" aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
          <li class=""><a itemprop="url" href="{!! URL::to('SupplierChannel/pages/seller_channel',40,is_secured()) !!}">Home</a></li>
          <li><a itemprop="url" href="{!!URL::to('SupplierChannel/pages/suppliers_memebership',30,is_secured())!!}">Seller Memberships</a></li>
          <li class="active"><a itemprop="url" style="" href="{!! URL::to('SupplierChannel/pages/training_center',32,is_secured()) !!}">Training</a></li>
          <li><a itemprop="url" href="{!! URL::to('FooterPage/pages/Learning_Center',32,is_secured()) !!}">Learning Center</a></li>
          <li><a itemprop="url" href="{!! URL::to('success/stories',null,is_secured()) !!}">Success Stories</a></li>
       </ul>
</div>

<div class="row" style="background-color: #fff;">
      <div class="col-md-12 padding_0">
          
          <div class="training-center-banner">
                 <div class="banner-content-training">DEVELOP</div>
                 <div class="banner-content-training" style="padding-top: 0;">MULI-LANGUAGE MARKERS!</div>
                 <div class="banner-content-training" style="padding-top: 0;">
                      <div style="width: 100%; font-size: 20px; color: #fff; line-height: 32px; padding-right: 15px; margin: 0; text-align: left;">
                           <span><i class="fa fa-circle" aria-hidden="true"></i></span>  Millions of sincere buyers daily
                      </div>
                      <div style="width: 100%; font-size: 20px; color: #fff; line-height: 32px; padding-right: 15px; margin: 0; text-align: left;">
                        <span><i class="fa fa-circle" aria-hidden="true"></i></span> Higher listing ranking
                      </div>
                     <a href="@if (Sentinel::check())
                    {{ URL::to('dashboard','product',is_secured()) }}
        @else
        {{URL::to('join',null,is_secured())}}
        @endif" style="background:#19446F;border-radius: 5px !important; margin-top: 25px;" class="btn btn-primary btn-lg pull-left" value="">Post Now</a>
                     
                 </div>
          </div>
         
          
             
      
     </div>
</div>
<div class="row type-row" style="border-bottom:0 none;background-color: #fff;">
      <div class="sort-title">
            <span class="type-title">Training Type :</span>
            <ul class="select-title">
                  <li style="width:85px;"><input type="radio" name="all" checked><label  style="padding:3px; font-size:12px; font-weight:900 bold;">ALL</label></li>
                   <li style="width:217px;"><input type="radio" name="all"><label  style="padding:3px; font-weight:900 bold;">Live Online Training</label></li>
                    <li style="width:237px;"><input type="radio" name="all"><label  style="padding:3px; font-weight:900 bold;">Video Tutorials</label></li>
            </ul>
      </div>
</div>
<div class="row type-row" style="background-color: #fff;">
      <div class="sort-title">
            <span class="type-title" style="margin-left:55px;">Topic Type :</span>
            <ul class="select-title">
                  <li style="width:85px;"><input type="radio" name="all" checked><label  style="padding:5px; font-size:12px; font-weight:900 bold;">ALL</label></li>
                   <li style="width:217px;"><input type="radio" name="all"><label  style="padding:3px; font-weight:900 bold;">Quick Start your Business</label></li>
                    <li style="width:237px;"><input type="radio" name="all"><label style="padding:3px; font-weight:900 bold;">Access More Buyers</label></li>
                    <li style="width:237px;"><input type="radio" name="all"><label  style="padding:3px; font-weight:900 bold;">Advance your business</label></li>
            </ul>
      </div>
      
</div>
<div class="row time-row" style="background-color: #fff;">
      <div class="row col-sm-6"></div>
       <div class="row col-sm-6">
             <label  style="font-size:14px; color:#000; font-weight:bold;">To show your local time, please select:</label>
             <select name="country" style="margin:5px; width: auto; height:30px; padding: 5px; border:1px solid #000; background-color: #fff;">
                             <option>Bangladesh</option>
                    </select>
                  
       </div>
      
</div>
<div class="row" style=" padding-top:30px; border-bottom:1px solid #ccc;background-color: #fff;">
      <div class="col-md-2 col-xs-4">
            <div class="program-image">
            <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/training-img1.jpg',is_secured()) !!}" alt="traing1">
            </div>
      </div>
       <div class="col-md-5">
             <div class="program-content">
                    <p style="font-size:15px; float:left;"><a itemprop="url" target="_blank" href="{{URL::to('Buyer/Training'),is_secured()}}" >Understand International Buyers</a></p>
                    <ol>
                          <li>The importance of sourcing channels to buyers</li>
                          <li>Why online trading platform is the most important</li>
                           <li>Top 7 factors that buyers care about</li>
                        
                    </ol>
                    <p style="margin-left:17px; padding:0; float:left;">Tutor: Jojo</p>
                   
             </div>
            
       </div>
       <div class="col-md-3">
             <div class="train-des">
                   <p>Training Type: Video Tutorials<img itemprop="image" style="height:14px;width:17px; padding:0px; margin-left:5px;" src="{!! asset('assets/fontend/bdtdc-images/movie.jpg',is_secured()) !!}" alt="movie"></p>
                <div  class="btn btn-warning videoclick"  data-video_id="qz0Zm7kVur4" style="background-color: #255E98; border-color: #255E98; border-radius:3px ! important; ">Play<span><i class="fa fa-play" style="font-size: 14px;color: #fff; padding-left: 6px;"></i></span></div>
                    
             </div>
       </div>
        <div class="col-md-2"></div>
</div>

<div class="row"  style="border-bottom:1px solid #ccc;background-color: #fff;">
      <div class="col-md-2 col-xs-4">
            <div class="program-image">
            <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/training-img2.jpg',is_secured()) !!}" alt="traing1">
            </div>
      </div>
       <div class="col-md-5">
             <div class="program-content">
                    <p style="font-size:15px; float:left;"><a itemprop="url" href="{{URL::to('online/Buy_selleing'),is_secured()}}" target="_blank" >Why Buy & Sell Online</a></p>
                    <ol>
                          <li>Why Choose Online Channel</li>
                          <li>Tips for Suppliers</li>
                           <li>Tips for Buyers</li>
                    </ol>
                    <p style="margin-left:59px; padding:0; float:left;">Tutor: Jojo</p>
             </div>
            
       </div>
       <div class="col-md-3 col-xs-4">
             <div class="train-des">
                   <p>Training Type: Video Tutorials<img itemprop="image" style="height:14px;width:17px; padding:0px; margin-left:5px;" src="{!! asset('assets/fontend/bdtdc-images/movie.jpg',is_secured()) !!}" alt="movie"></p>
                <div  class="btn btn-warning videoclick" data-video_id="5PQOFZzOBqY"   style="background-color: #255E98; border-color: #255E98; border-radius:3px ! important;">Play<span><i class="fa fa-play" style="font-size: 14px;color: #fff; padding-left: 6px;"></i></span></div>
                    
             </div>
       </div>
        <div class="col-md-2"></div>
</div>
<div class="row" style="border-bottom:1px solid #ccc;background-color: #fff;">
      <div class="col-md-2 col-xs-4">
            <div class="program-image">
            <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/training-img3.jpg',is_secured()) !!}" alt="traing1">
            </div>
      </div>
       <div class="col-md-5">
             <div class="program-content">
                    <p style="font-size:15px; float:left;"><a itemprop="url"  href="{{URL::to('supplemental/service'),is_secured()}}" target="_blank">Setting Company Profile</a></p>
                    <ol>
                          <li> Importance of Completing Company Profile</li>
                          <li>How to Manage Company Profile</li>
                           <li>Notices and Tips.</li>
                        
                    </ol>
                    <p style="margin-left:17px; padding:0; float:left;">Tutor: Jackie </p>
                   
             </div>
            
       </div>
       <div class="col-md-3 col-xs-4">
             <div class="train-des">
                   <p>Training Type: Video Tutorials<img itemprop="image" style="height:14px;width:17px; padding:0px; margin-left:5px;" src="{!! asset('assets/fontend/bdtdc-images/movie.jpg',is_secured()) !!}" alt="movie"></p>
                <div class="btn btn-primary videoclick" data-video_id="07vvx5-eJXw" style="background-color: #255E98; border-color: #255E98;border-radius:3px ! important;">Play<span><i class="fa fa-play" style="font-size: 14px;color: #fff; padding-left: 6px;"></i></span></div>
                    
             </div>
       </div>
        <div class="col-md-2"></div>
</div>
<div class="row" style="background-color: #fff; padding-bottom: 5%; margin-bottom: 10px; border-bottom: 1px solid rgba(0,0,0,.1);">
      <div class="col-md-2 col-xs-4">
            <div class="program-image">
            <img itemprop="image" src="{!! asset('assets/fontend/bdtdc-images/training-img4.jpg',is_secured()) !!}" alt="traing1">
            </div>
      </div>
       <div class="col-md-5">
             <div class="program-content">
                    <p style="font-size:15px; float:left;"><a itemprop="url" href="{{URL::to('improve/product-ranking'),is_secured()}}" target="_blank">Improve Product Search Ranking</a></p>
                    <ol>
                          <li>How to post a high quality product?</li>
                          <li>A step-by-step guide shows you how to upload a product onto BuyerSeller.Asia</li>
                          <li> How to get higher ranking for your products</li>
                           
                        
                    </ol>
                    <p style="margin-left:17px; padding:0; float:left;">Tutor: Clare </p>
                   
             </div>
            
       </div>
       <div class="col-md-3 col-xs-4">
             <div class="train-des">
                   <p>Training Type: Video Tutorials<img itemprop="image" style="height:14px;width:17px; padding:0px; margin-left:5px;" src="{!! asset('assets/fontend/bdtdc-images/movie.jpg',is_secured()) !!}" alt="movie"></p>
                <div  class="btn btn-warning videoclick" data-video_id="SP-UANM_moo"   style="background-color: #255E98; border-color: #255E98;border-radius:3px ! important;">Play<span><i class="fa fa-play" style="font-size: 14px;color: #fff; padding-left: 6px;"></i></span></div>
                    
             </div>
       </div>
        <div class="col-md-2"></div>
</div>

<div id="video-gallery" style="display: none;">
  <iframe style="width:100%; height:315px;" src="https://www.youtube.com/embed/qz0Zm7kVur4" ></iframe>
 <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/SP-UANM_moo" frameborder="0" allowfullscreen></iframe> -->
</div>

<br>
@stop
@section('scripts')
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="{{URL::asset('assets/fontend/js/animatedModal.min.js',is_secured())}}"></script>
<script type="text/javascript">
     $(function() {
    $( "#video-gallery" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( ".videoclick" ).click(function() {
      var myvideo=$(this).attr('data-video_id');
      var videolink="https://www.youtube.com/embed/";
      $('#video-gallery iframe').attr("src",videolink+myvideo);
      $( "#video-gallery" ).dialog( "open" );
    });
  });
</script>
@stop