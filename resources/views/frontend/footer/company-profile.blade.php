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
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('Company/profile'),is_secured()}}" class="top-path-li-a"><span itemprop="name">Company Profile</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
              
            </ul>
        </div>
  	
  </div>
   @include('fontend.footerpage.learning-sidebar')
            <div class="col-sm-9">
                        <h3 class="training-pp" style="font-size: 20px; color: #000; font-weight: bold; padding-top: 3%;">Create company profile at BuyerSeller</h3>
                        <p class="training-pp"><span style="color: #000; font-weight: bold;">Put your basic information first.</span> Readers need to know who they’re looking at before you get into the specifics. It will also demonstrate how organized and efficient you are. Make sure to give the company name, the year established, what your company does, who the principle is, all your contact info, and your website. If there are additional basic details relevant to your business, give them here.</p>
<p class="training-pp"><span style="color: #000; font-weight: bold;">Talk about your company’s ideas.</span> If you have a mission statement, put it here. Otherwise, write out your company vision, guiding ethos, and a little about your history. Telling who you are and what drives you gives your company a human element. It also gives you a chance to do some subtle advertising early on.</p>
<p class="training-pp">This is a place you can afford to be a little vague. Mission statements are legally necessary for some businesses, and may need to be specific. For everyone else, try to state what you do without limiting yourself. You don’t want to scare away potential business that thinks you wouldn’t consider expanding into adjacent industries. But it is easy to overdo vague language.</p>
<p class="training-pp">A bad example: "XYZ Semantics is a company driven by the pursuit of its dreams. We want to bring you with us on this journey. Our dedication to solutions and innovation make us the leading marketing consultants west of the Mississippi."</p>

<p class="training-pp"><span style="color: #000; font-weight: bold;">Find out more specific details.</span> Check with your secretarial or human resource staff to find out up-to-date details in several areas. You may not need to use all these, but having them on hand will make it easier when you sit down to craft the profile. Set up a way to streamline this process in the future, as you will want to update this information in your profile regularly.</p>
<p class="training-pp">• Number of employees</p>
<p class="training-pp">• Turnover. Low turnover can indicate stability, but either way it’s a good statistic to have on-hand.</p>
<p class="training-pp">• List of all business activities. What are all the areas you work in?</p>
<p class="training-pp">• Unique equipment or specialties. If you are the only company that produces, say, a rare machine part, you need to mention that.
<p class="training-pp">• Certifications</p>
<p class="training-pp">• Imports/exports</p>
<p class="training-pp">• Your methodology and/or what software you use.</p>
<p class="training-pp">• Delivery stats. How many units do you ship in a given period?</p>
<p class="training-pp">• Major accounts or clients. This is a way to show prospective clients whether or not you are used to doing business with companies like theirs. It’s also another chance for subtle advertising.</p>
<p class="training-pp">• Study other business profiles. Look first at competitors and other companies in the same type of business. Note the style and tone of the ones that stand out. If you have a business you really look up to, such as a leading national corporation, look at their profile. What do they do that stands out to you? Incorporate this style into your own.</p>
<p class="training-pp">• Keep it short. Most times, you want people to read your profile as potential customers. Make sure they read all the way through by keeping it short and engaging. Show you respect their time and you don’t want to waste it. Short business profiles also indicate that you don’t need a lot of flowery language and decorations to show you are the best. Let the numbers speak for themselves. </p>



                    

           </div>
      </div>
    </div>

@stop