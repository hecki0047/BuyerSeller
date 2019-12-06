<nav class="navbar navbar-default navbar-fixed-top about-hdr" style="height: 100px;">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" style="padding: 0;" href="{{ URL::to('/',null,is_secured())}}">
    <a style="margin-left: 0; background-image: none; height: auto; display: block;width: 100%; " rel="home" itemprop="url" title="Manufacturers-Suppliers"  href="{{ URL::to('/',null,is_secured())}}">
      <img alt="logo" style="  width: 200px;   height: auto;margin-top: 18px;" itemprop="logo" class="loggg" src="{{ asset('assets/frontend/images/logo.png') }}" />
     
    </a>
    <!-- <div class="main-name-hold">
      <a  rel="home" itemprop="url" title="Manufacturers-Suppliers" class="bd-trade" href="{{ URL::to('/',null,is_secured())}}" ></a>
    </div> -->
				<!-- <div><a href="{{ URL::to('/',null,is_secured())}}" id="back-home" onMouseOut="hide_home()">Back to Homepage</a></div> -->

          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" style="padding-top: 20px; background: #fff;">
          <ul class="nav navbar-nav navbar-right abt-top-menu">
            <li class="active"><a href="{!!URL::to('about-us',null,is_secured())!!}">About BuyerSeller</a></li>
            <li><a href="{!!URL::to('media/room',null,is_secured())!!}">Media Room</a></li>
            <li><a href="{!!URL::to('FooterPage/pages/Contact_Us',20,is_secured())!!}">Contact BuyerSeller</a></li>
            <li><a href="{!!URL::to('join',null,is_secured())!!}">Register Now</a></li>
            
              @if (Sentinel::check())
          <li>
          <div aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="mainmenu pull-right padding_0">
         <ul class="nav navbar-nav collapse navbar-collapse padding_0" itemscope itemtype="http://schema.org/SiteNavigationElement">
        @if (Sentinel::check())
         <li><a style="padding: 15px;" itemprop="url" href="{{ URL::to('ServiceChannel/pages/for_buyer/35',null,is_secured()) }}">Help Center</a> </li> 
        @else
        <li style=""><a itemprop="url" href="{{ URL::to('login',null,is_secured()) }}" class="" data-toggle="">Sign In</a></li>
        <li style="margin-left: 0%;padding: 0px;border-left: 1px solid #cecece;height: 12px;top: 8px;"></li>
        <li style=" margin-left: 0%;"><a itemprop="url" href="{{ URL::to('join',null,is_secured()) }}" class="join_btn">Join Free</a></li>
        
        @endif

        @if (Sentinel::check())
            <?php
              $role = App\Models\Role_user::where('user_id',Sentinel::getUser()->id)->first();
              $dashboard_route = ($role->role_id ==3) ? "company/dashboard" : 'buyer/dashbord';
            ?>
        @endif
        @if (Sentinel::check())
     
        <li class="dropdown" style="z-index: 999 !important;"><a  style="padding: 15px;" itemprop="url" href="#">My BuyerSeller 
        @if (Sentinel::check())
        <span id="total_notification" title=""></span>
        @endif
        <i class="fa fa-angle-down"></i></a> 
          <ul role="menu" class="sub-menu submenu2" style="background-color: #fff" itemscope itemtype="http://schema.org/SiteNavigationElement">
             @if (Sentinel::check())
            
            <li class="dropdown" style="z-index: 999 !important;">
        Welcome back<br> {{ Sentinel::getUser()->first_name }} 
            @endif
          @if (Sentinel::check())
            <li><a itemprop="url" href="{{ URL::to($dashboard_route,null,is_secured())}}">Dashboard</a></li>
          @endif

            <li title=""><a itemprop="url" href="{{ URL::to('default','message',is_secured()) }}">New Inquiry 
              
            </a></li>
            <li title="" style="margin-bottom: 10px"><a itemprop="url" href="{{ URL::to('Mybuying-Request',null,is_secured()) }}">New Quote 
             
            </a></li>
              <li style=" margin-left: 0%;"><a itemprop="url" href="{{ URL::to('order-list',null,is_secured()) }}" class="join_btn"><i class="fa fa-users" aria-hidden="true"></i> Order 
       </a></li>
            
            <li class="sub-split" style=" background-color: #fff;   border-top: 1px solid #ddd;
    list-style: none outside none;padding-top: 5px;line-height: 22px;color: #333;font-weight: 700;white-space: nowrap;box-shadow: none">
                For Buyer</li>
              <li><a itemprop="url" href="{{ URL::to('get-quotations',null,is_secured())}}" target="_blank" class="" style="">Get Quotations Now</a>
              </li>
               <li class="navigation-menu-list-li"><a itemprop="url" href="{{ URL::to('Mybuying-Request',null,is_secured()) }}" class="navigation-menu-list-li-a">Manage Buying Requests</a></li>
               <li style="margin-bottom: 10px" class="navigation-menu-list-li"><a itemprop="url" href="{{ URL::to('list/view/requested/sample',null,is_secured()) }}" class="navigation-menu-list-li-a">Manage Sample Requests</a></li>
               <li class="sub-split" style="background-color: #fff;   border-top: 1px solid #ddd;
               list-style: none outside none;padding-top: 5px;line-height: 22px;color: #333;font-weight: 700;white-space: nowrap;box-shadow: none">For Supplier</li>
               <li class="navigation-menu-list-li"><a itemprop="url" target="_blank" href="{{ URL::to('dashboard','product',null,is_secured()) }}" class="navigation-menu-list-li-a">Display New Products</a></li>
               <li class="navigation-menu-list-li"><a itemprop="url" target="_blank" href="{{ URL::to('dashboard','company_site',is_secured()) }}" class="navigation-menu-list-li-a">Company & Site</a></li>
               <li class="navigation-menu-list-li"><a itemprop="url" target="_blank" href="{{ URL::to('quotation/management',null,is_secured()) }}" class="navigation-menu-list-li-a">Quotes Management</a></li>
               @endif
              @if (Sentinel::check())
             <li class="navigation-menu-list-li"><a style="font-size: 14px;color: #000 !important;font-weight: 600;letter-spacing: .5px;" class="btn" href="{{ URL::to('logout',null,is_secured()) }}"> Logout </a> </li>
              @endif

          </ul>
        </li>
       
      </ul>
    </div>
    </li>
            @else
            <li style=""><a itemprop="url" href="{{ URL::to('login',null,is_secured()) }}" class="" data-toggle="">Sign In</a></li>
              @endif
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


