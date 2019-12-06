@extends('frontend.layouts.master-register')
@section('content')
  <div class="row" style="padding-bottom: 10px">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="top-path" itemscope itemtype="http://schema.org/BreadcrumbList">
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li"><a itemprop="url" href="{{URL::to('ServiceChannel/pages/for_buyer',35,is_secured())}}" class="top-path-li-a">Help Center <i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li"><a itemprop="url"  href="{{URL::to('SupplierChannel/pages/learning_center',33),is_secured()}}" class="top-path-li-a">Learning Center<i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Business Trends</span></a></li>
              
            </ul>
        </div>
    
  </div>

  
  @include('fontend.footerpage.learning-sidebar')
            <div class="col-sm-9">
                        <h3 class="training-pp" style="font-size: 20px; color: #000; font-weight: bold; padding-top: 3%;">Business trend in Bangladesh </h3>
                        <h4 class="traing-h4">Business Climate:</h4>
              <p class="training-pp">Over the last few years, the strong steady GDP of 5% in Bangladesh has been a result of the economic building blocks laid by the relatively freeier business climate such as market-oriented economic policies, a dynamic garments sector and substantial inflow of remittances. A series of events in the economic development of Bangladesh has turned the country into a "catalyst platform" for business innovation in the world. The flourishing non-profits have had to face fierce competition among themselves for donations that has led to hybrid models of sustenance and resulted in famous innovations in micro-credit, social entrepreneurship and corporate social responsibility.</p>

                       
                <p class="training-pp">GDP (2009)  $ 242.2 billion</p>
                 <p class="training-pp"> Growth Rate 5%</p>
                 <p class="training-pp">Inflation 6%</p>
                 <p class="training-pp">Major Industries  Jute products, cotton textiles, processed foods, rice, wheat, tea, steel, fertilizer, sugarcane, potatoes, beef, poultry</p>
                 <p class="training-pp">Oil Production  Around 6,500 bbl/day</p>
                 <p class="training-pp">Natural Gas Production  Around 17.5 billion cu m</p>
                 <p class="training-pp">Labor Force 72.5 million</p>
                 <h4 class="traing-h4">Strengths:</h4>
              <P class="training-pp">The people in Bangladesh have been recycling from the beginning of time by finding infinite uses for every single thing they consume, due to scarcity. This skill as a nation is invaluable as the world learns to adapt to simple scalable processes of recycling to save the earth. Effective evacuation and deployment of emergency operations during crises have by default turned Bangladesh into a great global training ground for others to learn how to do the same for their countries. It has also allowed them to understand the intensity of the effects of climate change as the country copes with it head on. At the end of the day, "constraints have led to innovation" and it has earned Bangladesh its badge of resilience and extreme creativity.</P>
              <p class="training-pp">Major industries are jute products, cotton textiles, processed foods, steel, fertilizer, rice, tea, wheat, sugarcane, potatoes, beef, milk & poultry. Around 19% of the GDP is value added by agriculture. The country has large reserves of natural gas and limited reserves of coal and oil.</p>
              <h4 class="traing-h4">Economic Outlook:</h4>
          <p class="training-pp">In 2005, Goldman Sachs declared the country as one of the Next 11 in established emerging economies in the world because of its steady economic growth. Since the crash of the global economy the relative isolation of the Bangladeshi economic structure has put the country at the forefront of prospective nations as a dynamic emerging market in Asia.</p>
      <p class="training-pp">Bangladesh has a GDP of around US$242.2 billion (at PPP) with an annual growth rate of around 5%. Bangladesh has also made major strides to meet the food needs of its increasing population, through increased domestic production. Currently, the country is one of the top producers in the world of rice, jute and tea.</p>



                          


                    

           </div>
      </div>
    </div>

@stop