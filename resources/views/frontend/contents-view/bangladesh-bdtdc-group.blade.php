@extends('fontend.master3')
	@section('content')
		</div>
		<div class="container-fluid padding_0">
					<nav class="navbar navbar-default" style="height: 68px; font-size: 14px; text-align: center; text-transform: uppercase;background: #255E98;width: 100%; display: block !important;">
  <div class="container" style="padding-top: 10px;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <!--  <a class="navbar-brand" href="#">About Us</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="width: 100%;">
        <!-- <li class="active"><a href="#">About Us<span class="sr-only">(current)</span></a></li> -->
        
        <li class="dropdown head-menu">
          <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff;" onmouseover="changeColor();" onmouseout="backColor();">ABOUT US<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Company Overview</a></li>
            <li><a href="#">Our Businesses</a></li>
            <li><a href="#">History and Milestones</a></li>
            <li><a href="#">Leadership</a></li>
            <li><a href="#">Culture and Values</a></li>
            <li role="separator" class="divider"></li>
            <!-- <li><a href="#">Leadership</a></li> -->
           <!--  <li role="separator" class="divider"></li> -->
            <!-- <li><a href="#">Culture and Values</a></li> -->
          </ul>
        </li>
        <li class="dropdown" style="padding:0 6%;">
          <a href="#" class="dropdown-toggle head-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff;">Investor Relations<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Investor Relations Home</a></li>
            <li><a href="#">Investor News and Events</a></li>
            <li><a href="#">Annual Meeting</a></li>
            <li><a href="#">Financials and Metrics</a></li>
            <li><a href="#">Quarterly Results</a></li>
            <li><a href="#">SEC Filings</a></li>
             <li><a href="#">Corporate Governances</a></li>
            <!-- <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
        <li class="dropdown" style="padding:0 6%;">
          <a href="#" class="dropdown-toggle head-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff;">News and Resources<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Press Releases</a></li>
            <li><a href="#">Bdtdc Defined</a></li>
            <li><a href="#">In the News</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Media Library</a></li>
            <li><a href="#">Social Media</a></li>

            <!-- <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
        <li class="dropdown" style="padding:0 6%;">
          <a href="#" class="dropdown-toggle head-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff;">Contact Us<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Our Offices</a></li>
            <li><a href="#">Investor Relations Contacts</a></li>
            <li><a href="#">Media Relations Contacts</a></li>
            <li><a href="#">Customer Service Contacts</a></li>
            <li><a href="#">Customer Service Contacts</a></li>
            <li><a href="#">Intellectual Property Protection</a></li>

            <!-- <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
		</div>
<div class="container">
	@stop
@section('scripts')
<script type="text/javascript">
					function changeColor(){
						//document.getElementClass('#head-menu').style.backgroundColor= "#FF6600";
					}
					

</script>
@stop