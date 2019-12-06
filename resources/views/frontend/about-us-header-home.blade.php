<section>
<div class="container-fluid padding_0" style="padding-right: 0 !important; padding-left: 0 !important;margin-top: 100px;">
          <nav class="navbar navbar-default" style="height: 55px; font-size: 14px; text-align: center; text-transform: uppercase;background: #255E98;width: 100%; display: block !important; margin-bottom: 0 !important; border: 0 none; border-radius: 0 !important; position: relative;">
  <div class="container">
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
      <ul class="nav navbar-nav abtusnav" style="width: 100%;">
        <!-- <li class="active"><a href="#">About Us<span class="sr-only">(current)</span></a></li> -->
        
        <li class="dropdown">
          <a href="#"  class="about-bd about_us head-menu" data-toggle="dropdown" data-menu="aboutus" role="button" aria-haspopup="true" aria-expanded="false" style="" onMouseOver="show_submenu()" onMouseOut="hide_submenu()">ABOUT US<span class="caret"></span></a>
        </li>
        <li class="dropdown" style="padding-left: 7%;">
          <a href="#" class="about-bd about_invest head-menu" data-toggle="dropdown" data-menu="investor" role="button" aria-haspopup="true" aria-expanded="false" style="" onMouseOver="show_submenu()" onMouseOut="hide_submenu()">Investor Relations<span class="caret"></span></a>
        </li>
        <li class="dropdown" style="padding-left: 7%;">
          <a href="#" class="about-bd about_news head-menu" data-toggle="dropdown" data-menu="news" role="button" aria-haspopup="true" aria-expanded="false" style=";" onMouseOver="show_submenu()" onMouseOut="hide_submenu()">News and Resources<span class="caret"></span></a>
        </li>
        <li class="dropdown" style="padding-left: 7%;">
          <a href="#" class="about-bd about_cont head-menu" data-toggle="dropdown" data-menu="contact" role="button" aria-haspopup="true" aria-expanded="false" style="" onMouseOver="show_submenu()" onMouseOut="hide_submenu()">Contact Us<span class="caret"></span></a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  <div id="submenu">
        <div class="container">
              <ul class="about-submenu sub-id"  style="display: none; text-align: left;">
                <li class="submenu-li"><a href="{{URL::to('company-overview',null,is_secured()) }}" class="submenu-li-a">Company Overview</a></li>
                <li class="submenu-li"><a href="{{URL::to('culture/values',null,is_secured()) }}" class="submenu-li-a">Culture and Values</a></li>
                <li class="submenu-li"><a href="{{URL::to('all-business-info',null,is_secured()) }}" class="submenu-li-a">Our Businesses</a></li>
                <li class="submenu-li"><a href="{{URL::to('history/milestone-of-company',null,is_secured()) }}" class="submenu-li-a">History and Milestones</a></li>
                <li class="submenu-li"><a href="{{URL::to('Entrepreneurs/globalleader',null,is_secured()) }}" class="submenu-li-a" target="_blank">Global Leadership</a></li>
                <li class="submenu-li"><a href="{{URL::to('Integrity/Compliance',null,is_secured()) }}" class="submenu-li-a">Integrity and Compliance</a></li>
                 <li class="submenu-li"><a href="{{URL::to('BuyerChannel/pages/sustainable_manufacturing',7) }}" target="_blank" class="submenu-li-a">Sustainability</a></li>
                 <li class="submenu-li"><a href="{{URL::to('FAQs',null,is_secured()) }}" target="_blank" class="submenu-li-a">FAQs</a></li>
            </ul>

          <ul class="invest-submenu sub-id"  style="display: none; text-align: left;">
              <li class="submenu-li"><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a">Investor Relations Home</a></li>
              <li class="submenu-li"><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a">Investor News and Events</a></li>
              <li class="submenu-li"><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a">Annual Meeting</a></li>
              <li class="submenu-li"><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a">Financials and Metrics</a></li>
              <li class="submenu-li"><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a">Quarterly Results</a></li>
              <li class="submenu-li"><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a">SEC Filings</a></li>
             <li class="submenu-li"><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a">Corporate Governances</a></li>
           
          </ul>
          <ul class="news-submenu sub-id"  style="display: none;  text-align: left;">
            <li class="submenu-li"><a href="{{URL::to('media/room') }}" target="_blank" class="submenu-li-a">Press Releases</a></li>
            <li class="submenu-li"><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a">BuyerSeller Defined</a></li>
            <li class="submenu-li"><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a">In the News</a></li>
            <li class="submenu-li"><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a">Videos</a></li>
            <li class="submenu-li"><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a">Media Library</a></li>
            <li class="submenu-li"><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a">Social Media</a></li> 
          </ul>
          <ul class="cont-submenu sub-id"  style="display: none; text-align: left;max-width: 75%">
            <li class="submenu-li" style=""><a href="{{URL::to('office',null,is_secured()) }}" class="submenu-li-a">Our Offices</a></li>
            <li class="submenu-li" style="padding-left:50px "><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a" target="_blank">Investor Relations Contacts</a></li>
            <li class="submenu-li"><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a" target="_blank">Media Relations Contacts</a></li>
            <li class="submenu-li" style="padding-left:50px "><a href="{{URL::to('contact_message_form',null,is_secured()) }}" class="submenu-li-a" target="_blank">Customer Service Contacts</a></li>
             <li class="submenu-li" ><a href="{{URL::to('investor/relation/home',null,is_secured()) }}" class="submenu-li-a" target="_blank">Intellectual Property Protection</a></li>

             <li class="submenu-li" style="padding-left:50px "><a href="{{URL::to('contact',null,is_secured()) }}" class="submenu-li-a" target="_blank">Contact Us</a></li>

          </ul> 
        </div>
       </div> 
</nav>
  
</div>
</section>	
@section('scripts')
<script type="text/javascript">
$(document).ready(function(){

    $(".about-bd").click(function(){

        // $('#submenu').slideToggle(500);
        console.log('hoise');


        //   $("#submenu").slideToggle("1000");
        if($(this).attr('data-menu') == 'aboutus'){

          $(".invest-submenu,.news-submenu,.cont-submenu").css("display", "none");

          $(".about-submenu").slideToggle("1000");
            
        }
        else if($(this).attr('data-menu') == 'investor'){
          $(".about-submenu,.news-submenu,.cont-submenu").css("display", "none");
          $(".invest-submenu").slideToggle("1000");
        }
        else if($(this).attr('data-menu') == 'news'){
          $(".about-submenu,.invest-submenu,.cont-submenu").css("display", "none");
          $(".news-submenu").slideToggle("1000");
        }
        else if($(this).attr('data-menu') == 'contact'){
          $(".about-submenu,.invest-submenu,.news-submenu").css("display", "none");
          $(".cont-submenu").slideToggle("1000");
        }

       
    });
    $(document).click(function(){
      $(".about-submenu,.invest-submenu,.news-submenu,.cont-submenu").slideUp("1000");
    });
});
</script>
@stop