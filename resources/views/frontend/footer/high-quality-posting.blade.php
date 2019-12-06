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
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">High Quality Posting</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
              
            </ul>
        </div>
    
  </div>
   <div class="row padding_0" style="background-color: #fff; padding-bottom: 5%; margin-bottom: 20px;">
     <!--  <div>
        <img itemprop="image"  style="height:100px;"   src="{!! asset('resources/assets/fontend/imgsss/bdtdc-b2b-logo.png') !!}" alt="rainbow drawing">
      </div> -->
      <div class="col-sm-12 col-md-12 col-lg-12">
              
           @include('fontend.footerpage.learning-sidebar')
            <div class="col-sm-9">
                        <h3 class="training-pp" style="font-size: 20px; color: #000; font-weight: bold; padding-top: 3%;">High quality posting to get audience </h3>
                       

                          <p class="training-pp">Why recognizing your target group matters</p>
                          <p class="training-pp">If you can identify who they are, you will find ways to get in touch with them

(the web journals they read, the websites they visit, the stuff they look in

Google and so on)</p>
                          <p class="training-pp">How they portray their offered services, you can copy the word on your site

to coordinate with the discussion in their mind (essential!)</p>
                          <p class="training-pp">How they pick and think about items in your category, you know how to

structure and organize content on your web</p>
                          <p class="training-pp">What they need, your value can state that precisely and the entire site can

be 98% important to them</p>
                          <p class="training-pp">What they couldn&#39;t care less about, you can remove and cut it from the site</p>
                          <p class="training-pp">How their life has changed with your service, you know ways to

communicate and ear benefits</p>


                    

           </div>
      </div>
    </div>

@stop