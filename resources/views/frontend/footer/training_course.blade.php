@extends('fontend.master_dynamic')
@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/media-room-style.css',is_secured()) !!}" rel="stylesheet">
    @endsection
@section('content')
	<div class="row" style="padding-bottom: 10px">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="top-path" itemscope itemtype="http://schema.org/BreadcrumbList">
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li"><a itemprop="url" href="{{URL::to('help-center',null,is_secured())}}" class="top-path-li-a">Help Center <i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li"><a itemprop="url"  href="{{URL::to('SupplierChannel/pages/learning_center',33),is_secured()}}" class="top-path-li-a">Learning Center<i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Training courses for supplier</span></a></li>
              
            </ul>
        </div>
    
  </div>
   <div class="row padding_0" style="background-color: #fff; padding-bottom: 5%; margin-bottom: 20px;">
      <div class="col-sm-12 col-md-12 col-lg-12">
           
             @include('fontend.footerpage.learning-sidebar')
            <div class="col-sm-9">
                    <h3 class="training-pp" style="font-size: 20px; color: #000; font-weight: bold; padding-top: 3%;">Training courses for supplier </h3>
                    <p class="training-pp">We offer training courses for suppliers who are interested in finding new opportunities with regulated buyers such as central government, local government, rail, nuclear, emergency services, housing associations, NHS and utilities in the UK. To suit the needs of the individual or organization, our training offering now includes both eLearning and classroom-based training courses to support especially SME’s with growth opportunities.</p>
                    <h4 class="traing-h4">ELearning</h4>
                    <p class="training-pp">We know that people are busy, and that it's often easier to complete tasks online and with more flexibility. That’s why we are making our expert knowledge available via online modules to suppliers to help suppliers better understood what buyers want to see during the tendering process.</p>
                    <p class="training-pp">Why buy bdtdc e-Learning?</p>
                    <p class="training-pp">✓ Flexible learning, online whenever suits you</p>
                    <p class="training-pp">✓ Fast, interactive and fun learning</p>
                    <p class="training-pp">✓ Same expert EU procurement knowledge you’d gain from classroom training</p>
                    <p class="training-pp">What modules we cover:</p>
                    <p class="training-pp">Why is there Regulated Procurement for suppliers? </p>
                    <p class="training-pp">Where can I find opportunities?</P>
                    <h4>Classroom training</h4>
                    <p class="training-pp">For those who prefer to learn in a classroom setting with a Bdtdc trainer and other participants, we offer a 1-day program that will lay out the regulated landscape and assist you in navigating the minefield of public procurement. You’ll hear from our experts who have a deep understanding of the practical implications of the EU procurement rules and regulations having worked closely with Public Sector and Utilities for many years.</p>
                    <h4 class="traing-h4">Why book?</h4>
                    <p class="training-pp">✓ Learn how to find new business opportunities with regulated organizations</p>
                  <p class="training-pp">✓ Understand regulated procurement, including the EU procurement directives</P>
                  <p class="training-pp">✓ Gain a ‘must-have toolkit’ with necessary knowledge to compete for regulated procurement contracts</p>
                 <h4 class="traing-h4">What the course covers:</h4> 
                 <p class="training-pp"> What is public procurement and how does it differ from working in the private sector?</p>
                 <p class="training-pp"> Where do the rules come from and which organizations have to follow them?</p>
                  <p class="training-pp">Thresholds: why you need to be aware of what you are bidding for</p>
                  <p class="training-pp">Above threshold contract: Is this your market as a supplier?</p>
                 <p class="training-pp"> What if my contracts are only low value?</p>
                  <p class="training-pp">Why are some contracts not advertised at all?</p>
                  <p class="training-pp">Where can I find opportunities?</p>
                  <p class="training-pp">How do I navigate advertising websites?</p>
                  <p class="training-pp">Understand key notices</p>
                  <p class="training-pp">What is a qualification system and how do I join?</p>
                  <p class="training-pp">What is a Framework or Dynamic Purchasing System and what does this mean for me?</p>
                  <p class="training-pp">Procurement procedures and what I am expected to provide</p>
                  <p class="training-pp">How will my bid be evaluated?</p>
                  <p class="training-pp">What feedback do I get for a tender that is above the relevant threshold?</p>
                  <p class="training-pp">What do all the acronyms and processes mean?</p>

           </div>
      </div>
    </div>

@stop