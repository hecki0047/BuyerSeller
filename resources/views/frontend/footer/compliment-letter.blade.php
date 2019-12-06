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
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">How to write a complaint letter</span></a></li>
              
            </ul>
        </div>
    
  </div>
  
   @include('fontend.footerpage.learning-sidebar')
            <div class="col-sm-9">
                        <h3 class="training-pp" style="font-size: 20px; color: #000; font-weight: bold; padding-top: 3%;">How to write a complaint letter </h3>
                   
                        <P>Writing a letter of complaint can be tricky, but the most important thing to remember is to be direct and tasteful. No one will take your complaint seriously if you are ranting and raving. Take a look at this example complaint letter for ideas on how you should approach writing a letter of complaint.</P>
                        <h4 class="traing-h4">Example complaint letter:</h4>

            <div class="application">56 Disgruntled Streets
            <p class="training-pp" style="padding-top: 5px;">Somewhere Unhappy</p>
            <p class="training-pp" style="padding-top: 5px;">I AM MAD</p>

            <p class="training-pp" style="padding-top: 5px;">Customer Service Manager</p>
            <p class="training-pp" style="padding-top: 5px;">That Awful Company</p>
            <p class="training-pp" style="padding-top: 5px;">Somewhere Awful</p>
            <p class="training-pp"  style="padding-top: 5px;">UR BAD</p>
            <p class="training-pp" style="padding-top: 5px;">June 15, 2008</p>
            <p class="training-pp" style="padding-top: 5px;">Dear Sir/Madam,</p>
            <p class="training-pp">I am writing today to complain of the poor service I received from your company on June 12, 2008. I was visited by a representative of That Awful Company, Mr. Madman, at my home on that day.</p>

            <p class="training-pp">Mr. Madman was one hour late for his appointment and offered nothing by way of apology when he arrived at noon. Your representative did not remove his muddy shoes upon entering my house, and consequently left a trail of dirt in the hallway. Mr. Madman then proceeded to present a range of products to me that I had specifically told his assistant by telephone I was not interested in. I repeatedly tried to ask your representative about the products that were of interest to me, but he refused to deal with my questions. We ended our meeting after 25 minutes without either of us having accomplished anything.</p>

          <p class="training-pp">I am most annoyed that I wasted a morning (and half a day's vacation) waiting for Mr. Madman to show up. My impression of That Awful Company has been tarnished, and I am now concerned about how my existing business is being managed by your firm. Furthermore, Mr. Madman's inability to remove his muddy shoes has meant that I have had to engage the services, and incur the expense, of a professional carpet cleaner.</p>

          <p class="training-pp">I trust this is not the way That Awful Company wishes to conduct business with valued customers—I have been with you since the company was founded and have never encountered such treatment before. I would welcome the opportunity to discuss matters further and to learn of how you propose to prevent a similar situation from recurring. I look forward to hearing from you.</p>

        Yours faithfully,</div>



                          


                    

           </div>
      </div>
    </div>

@stop