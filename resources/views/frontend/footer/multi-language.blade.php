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
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Multi Language Posting</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
              
            </ul>
        </div>
    
  </div>
   @include('fontend.footerpage.learning-sidebar')
            <div class="col-sm-9">
                        <h3 class="training-pp" style="font-size: 20px; color: #000; font-weight: bold; padding-top: 3%;">Benefits of multi language posting on web </h3>
                         <p class="training-pp"> So many websites continue to have faith in the power of the English language to reach out to all countries and populations. Their belief is mistaken.</p>
                        <p class="training-pp">Even in countries where proficiency in English is widespread, there is a marked preference for content in the mother tongue. As for those where it is not, the audience is not so much alienate</p>

                        <p class="training-pp">What benefits can translating your website bring and what is the true price of entry for reaching markets where other languages are spoken?</p>
                       <p class="training-pp"> Let’s take a look, but first let’s map the terrain.</p>
                      <p class="training-pp">• English is far from the most popular language in the world. It sits in the shadows of Mandarin and Spanish in terms of active users.
                      <p class="training-pp">• 70% of the world doesn’t speak English yet 57% of websites contain only English.</p>
                      <p class="training-pp">• As many as two-thirds of internet users are non-native English speakers, and this percentage share is growing rapidly.
                      <p class="training-pp">• Over half of all Google searches are in languages other than English.</p>
                      <p class="training-pp">• 90% of internet users in the EU claim that, when given a choice of languages, they always choose to visit a website in their own language. Only half are happy using an English language website even where there is no other alternative.</p>

                          


                    

           </div>
      </div>
    </div>

@stop