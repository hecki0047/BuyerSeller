@extends('frontend.layouts.header_dynamic')@section('page_css')
<link property='stylesheet' href="{!! asset('css/about-us/entrepreneur-day.css',is_secured()) !!}" rel="stylesheet"> @endsection @section('content')
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
        <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{{ URL::to('/',null,is_secured())}}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Home </span><i class="fa fa-angle-right top-path-icon"></i></a>
            </li>
            <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{{ URL::to('about-us,null',is_secured()) }}" class="top-path-li-a"> <span itemprop="name" style="color: #333;">About BuyerSeller</span><i class="fa fa-angle-right top-path-icon"></i></a>
            </li>
            <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="" class="top-path-li-a"> <span itemprop="name" style="color: #333;">Entrepreneur Day </span><i class="fa fa-angle-right top-path-icon"></i></a>
            </li>

        </ul>
    </div>

</div>
<div class="row padding_0" style="padding-bottom: 3%; background-color: #fff;">

    <div class="col-lg-12" style="padding:0;padding-top: 15px">
        <div class="col-sm-12 padding_0" style="padding-top: 0;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" style="border-radius:10px !important; border:0 none;" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;"></li>
                    <li data-target="#myCarousel" data-slide-to="2" style="border-radius:10px !important; border:0 none;"></li>
                    <li data-target="#myCarousel" data-slide-to="3" style="border-radius:10px !important; border:0 none;"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img itemprop="image" style="height:350px;max-height:350px;width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/bdtdc-e1.jpg') !!}" alt="bangladesh means business">                        
                        @include('frontend.contents-view.partials._slide-title')
                    </div>

                    <div class="item">
                        <img itemprop="image" style="height:350px;max-height:350px;width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/bdtdc-e2.jpg') !!}" alt="bangladesh means business">
                        @include('frontend.contents-view.partials._slide-title')
                    </div>

                    <div class="item">
                        <img itemprop="image" style="height:350px;max-height:350px;width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/bdtdc-e3.jpg') !!}" alt="bangladesh means business">
                        @include('frontend.contents-view.partials._slide-title')
                    </div>

                    <div class="item">
                        <img itemprop="image" style="height:350px;max-height:350px;width:100%;margin-left: -1px;" src="{!! asset('assets/fontend/bdtdc-images/bdtdc-e4.jpg') !!}" alt="bangladesh means business">
                        @include('frontend.contents-view.partials._slide-title')
                    </div>
                </div>
                <span class="sr-only">Previous</span>

                <span class="sr-only">Next</span>

            </div>
        </div>

        <div class="col-sm-12 padding_0">
            <div style="padding: 20px 0;">

            </div>

        </div>

        <div class="col-sm-12 padding_0" style="border-bottom: dotted #ddd; padding-bottom: 15px;">
            <div class="col-sm-2" style="padding: 0;">

                <img itemprop="image" style="cursor: default;" class="bd-busi-img" src="{!! asset('assets/fontend/bdtdc-images/bdtdc-enterpreneurship.jpg') !!}" alt="">

            </div>
            <div class="col-sm-8">

                <h3 class="bdtdc-tit" style="padding-top: 15px; font-size: 13px; color: #000;">Start-ups youth entrepreneurship in Bangladesh</h3>

                <p style="text-align:left;padding-right: 5%; font-size: 110%;">
                    We celebrate National day, Valentines, and fools in April – isn’t it time we celebrate the innovators who actually make all of this other fun stuff possible?
                    <br>
                    <br>
                    <strong>BuyerSeller Entrepreneurs’ Day</strong>
                    <br>
                    <br> BuyerSeller Entrepreneurs’ Day. The purpose of the BuyerSeller Entrepreneurs’ Day is to create awareness for entrepreneurship, innovation and leadership throughout the world and Bangladesh. With BuyerSeller Entrepreneurs’ Day is the perfect day to celebrate the people who starts a business alone and is the day of founders, students, staff and faculty members, managers, producers, industrialists, innovators, administrators, designers and producers.
                    <br>
                    <br> Entrepreneurship has its importance in corporate sector as well as social sector. No doubt, entrepreneurship is profit generating but yet responsible to give back to the society, and develop civic sense and character building characteristics
                    <br>
                    <br> BuyerSeller invites everyone to organize happenings around the world to promote BuyerSeller Entrepreneurs’ Day. BuyerSeller Entrepreneurs’ Day is a great opportunity to push philanthropic, social and ethical business practices via conferences, awards and initiatives.</p>

            </div>
            <div class="col-sm-2">

            </div>

        </div>

        <div class="col-sm-12 padding_0" style=" padding-bottom: 15px;border-bottom: dotted #ddd;">
            <div class="col-sm-2" style="padding: 0;">
                <a itemprop="url" href="{{ URL::to('Entrepreneurs/globalleader',null,is_secured())}}">
                    <img itemprop="image" style="width: 90%;min-height: 115px;padding-top: 4px;padding-left: 15px; margin-bottom: 10px; max-width: 300px;max-height: 130px;" class="bd-busi-img" src="{!! asset('assets/fontend/bdtdc-images/kazi_ahamed.jpg') !!}" alt="">
                    <h4 class="kazi-ah">Kazi Ahmed center for entrepreneurial leadership</h4>
                </a>
            </div>
            <div class="col-sm-8">

                <h3 class="bdtdc-tit" style="padding-top: 15px; font-size: 110%; color: #000; display: block;float: left;">A Global Leader in Entrepreneurship</h3>
                <p style="text-align:left;">BuyerSeller.Asia (<a itemprop="url" href="{{URL::to('/',null,is_secured())}}">buyerseller.asia</a>), Entrepreneurship Internship Programs. An internship program that connects students with Bangladesh and Global Entrepreneurs.
                </p>
                <p>
                    Students and employers alike benefit from the Entrepreneurship Internship Program at buyerseller.asia Entrepreneurship Center. It is our mission to connect students with internship opportunities that will further develop their skill set and professional....
                </p>
                <p style="color:#5b9bd1;"> <a itemprop="url" style="color:#5b9bd1;" href="{{ URL::to('Entrepreneurs/globalleader',null,is_secured())}}">Learn more..</a></p>

            </div>
            <div class="col-sm-2">

            </div>

        </div>
    </div>
</div>
<br> @stop @section('scripts')
<script type="text/javascript">
</script>
@stop