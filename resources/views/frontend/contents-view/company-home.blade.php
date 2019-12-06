@extends('frontend.layouts.header_dynamic')
	@section('content')
</div>
<div>
	<img itemprop="image" class="img-responsive" style="width:100%;" src="{!! asset('resources/assets/fontend/images/bdtdc-b2b.PNG') !!}" alt="company banner">
</div>
<div class="container-fluid padding_0">
<div class="categoryBannerContent">
  <div id="categoryBanner">
    <div class="company-banner mensBanner" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 4; opacity: 0; width: 1583px; height: 585px;">
      <div class="container">
      <div class="bannerContent">
        <h1>Mens collections</h1>
        <p> FASHION &amp; TRENDSNEWS &amp; EVENTSSHOW ALL</p>
        </div>
      </div>
    </div>
    
    <div class="company-banner womensBanner" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 4; opacity: 0; width: 1583px; height: 585px;">
      <div class="container">
      <div class="bannerContent">
        <h1>Womens collections</h1>
        <p> FASHION &amp; TRENDSNEWS &amp; EVENTSSHOW ALL</p>
        </div>
      </div>
    </div>
    
    <div class="company-banner kidsBanner" style="position: absolute; top: 0px; left: 0px; display: block; z-index: 5; opacity: 1; width: 1583px; height: 585px;">
      <div class="container">
      <div class="bannerContent">
        <h1>Kids collections</h1>
        <p> FASHION &amp; TRENDSNEWS &amp; EVENTSSHOW ALL</p>
        </div>
      </div>
    </div>
    
    <div class="company-banner othersBanner" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 4; opacity: 0; width: 1583px; height: 585px;">
      <div class="container">
      <div class="bannerContent">
        <h1>Kids collections</h1>
        <p> FASHION &amp; TRENDSNEWS &amp; EVENTSSHOW ALL</p>
        </div>
      </div>
    </div>
    
  </div>
  <div class="container">
    <ul id="bannerPagination" class="list-inline text-center">
      <li class=""><a href="#">
        <span>Mens collections</span></a></li>
      <li class=""><a href="#">
        <span>Womens collections</span></a></li>
      <li class="activeSlide"><a href="#">
        <span>Kids collections</span></a></li>
      <li class=""><a href="#">
        <span>Kids collections</span></a></li>
    </ul>
  </div>
</div> 
</div>
<div class="container">
@stop
@section('scripts')
<script type="text/javascript">
	// $("#categoryBanner > div:gt(0)").hide();

	// setInterval(function() { 
	//   $('#categoryBanner > div:first')
	//     .fadeOut(1000)
	//     .next()
	//     .fadeIn(1000)
	//     .end()
	//     .appendTo('#categoryBanner');
	// },  5000);
	$(function() {
    $('#categoryBanner').cycle({
        fx:     'fade',
        speed:  'slow',
        timeout: 5000,
        pager:  '#bannerPagination',
        pagerAnchorBuilder: function(idx, slide) {
            // return sel string for existing anchor
            return '#bannerPagination li:eq(' + (idx) + ') a';
        }
    });
});

	
</script>
@stop