 
@if (Sentinel::check())
            <?php
              $role = App\Models\Role_user::where('user_id',Sentinel::getUser()->id)->first();
               $dashboard_route = ($role->role_id ==3) ? "company/dashboard" : 'buyer/dashbord';
            ?>
  @endif
 <div class="col-sm-12 col-md-12 col-lg-12" style="padding: 0px;">
            
           
            <div id="navigation-menu-manager" style="border:1px solid rgba(0,0,0,.2);z-index: 9;margin: 0px" >
                <div style="border-bottom:1px solid rgba(0,0,0,.2);padding-top: 20px;" >
                  <p class="navigation-normal-title"  style="font-size:14px;font-weight:bold;color: #fff"><a style="font-size:14px;font-weight:bold;color: #fff !important" href="{{ URL::to($dashboard_route,null,is_secured())}}"><i style="" class="fa fa-home" aria-hidden="true"></i> My Dashboard </a></p> 
                </div> 
                <div style="padding-left:4px;width:100%;padding-top:10px;padding-bottom:30px">
                <ul class="navigation-menu-list">
                       <li class="navigation-menu-list-li"><a target="_blank" itemprop="url"  href="{{ URL::to('default','message',is_secured()) }}" class="navigation-menu-list-li-a">Messages & Contacts</a></li>

                       <li class="navigation-menu-list-li" title=""><a target="_blank" class="navigation-menu-list-li-a" itemprop="url" href="{{ URL::to('default/message?inq_sub_menu=New Inquiries',null,is_secured()) }}">New Inquiry 
              @if (Sentinel::check())
              <span title="" class="total_new_inquiry"></span>
              @endif
            </a></li>
            <li class="navigation-menu-list-li" title="" style=""><a class="navigation-menu-list-li-a da1" itemprop="url" href="{{ URL::to('Mybuying-Request?status=0&unread=true&search=&d=0',null,is_secured()) }}">New Quotations 
              @if (Sentinel::check())
              <span title="" class="total_new_quote"></span>
              @endif
            </a></li>
            @if($role->role_id ==3)
            <li class="navigation-menu-list-li" title=""><a class="navigation-menu-list-li-a da2" itemprop="url" href="{{ URL::to('order-list',null,is_secured()) }}">Affirmed Orders 
              @if (Sentinel::check())
              <span title="" class="total_new_order"></span>
              @endif
            </a></li>
            @else
            <li class="navigation-menu-list-li" title=""><a class="navigation-menu-list-li-a da16" itemprop="url" href="{{ URL::to('send-order-list',null,is_secured()) }}">Send Orders List
                        @if (Sentinel::check())
                        <span title="" class="total_new_order"></span>
                        @endif
                      </a></li>
            @endif
            <li class="navigation-menu-list-li"><a itemprop="url"  href="{{ URL::to('favorite-product',null,is_secured()) }}" class="navigation-menu-list-li-a da3">Favorite Products</a></li>
            <li class="navigation-menu-list-li"><a itemprop="url"  href="{{ URL::to('favorite-supplier',null,is_secured()) }}" class="navigation-menu-list-li-a da4">Favorite Suppliers</a></li>
            <li class="navigation-menu-list-li"><a itemprop="url"  href="{{ URL::to('payment-history',null,is_secured()) }}" class="navigation-menu-list-li-a da18">Payment History</a></li>

                        <div style="margin-top: 10%;color: #fff" class="navigation-normal-title">For Buyer</div>
                       <li class="navigation-menu-list-li"><a itemprop="url"  href="{{ URL::to('get-quotations',null,is_secured()) }}" class="navigation-menu-list-li-a da5">Post Buying Requests</a></li>
                       <li class="navigation-menu-list-li"><a itemprop="url"  href="{{ URL::to('Mybuying-Request',null,is_secured()) }}" class="navigation-menu-list-li-a da6">Manage Buying Requests</a></li>
                       <li class="navigation-menu-list-li" title=""><a class="navigation-menu-list-li-a da16" itemprop="url" href="{{ URL::to('send-order-list',null,is_secured()) }}">Send Orders List
                        @if (Sentinel::check())
                        <span title="" class="total_new_order"></span>
                        @endif
                      </a></li>
                       <!-- <li class="navigation-menu-list-li"><a target="_blank" itemprop="url"  href="{-{ URL::to('list/view/requested/sample/buyer',is_secured()) }-}" class="navigation-menu-list-li-a">Manage Sample Requests</a></li> -->
                       <!-- <li class="navigation-menu-list-li"><a itemprop="url"  href="{-{ URL::to('Trade/alert',is_secured()) }-}" class="navigation-menu-list-li-a">Trade Alert</a></li> -->
                       <li class="navigation-menu-list-li"><a itemprop="url"  href="{{ URL::to('my-supplier',null,is_secured()) }}" class="navigation-menu-list-li-a da7">My Suppliers</a></li>
                       @if($role->role_id ==3)
                       <div style="margin-top: 10%;color: #fff" class="navigation-normal-title">For Supplier</div>
                       <li class="navigation-menu-list-li"><a itemprop="url"  href="{!! URL::to('supplier/product_create',null,is_secured()) !!}" class="navigation-menu-list-li-a da8">Add Products</a></li>
                        <li class="navigation-menu-list-li" title=""><a class="navigation-menu-list-li-a da15" itemprop="url" href="{{ URL::to('order-list',null,is_secured()) }}">Orders List
                        @if (Sentinel::check())
                        <span title="" class="total_new_order"></span>
                        @endif
                      </a></li>
                       <li class="navigation-menu-list-li"><a itemprop="url"  href="{{ URL::to('dashboard','product',null,is_secured()) }}" class="navigation-menu-list-li-a da9">Manage Products</a></li>
                       <li class="navigation-menu-list-li"><a itemprop="url"  href="{{ URL::to('dashboard','company_site',is_secured()) }}" class="navigation-menu-list-li-a da10">Company & Site</a></li>
                       <li class="navigation-menu-list-li"><a itemprop="url"  href="{{ URL::to('quotation/management',null,is_secured()) }}" class="navigation-menu-list-li-a da11">Quotes Management</a></li>
                       <!-- <li class="navigation-menu-list-li"><a itemprop="url"  href="{-{ URL::to('list/view/requested/sample',is_secured()) }-}" class="navigation-menu-list-li-a">Manage Sample Requests</a></li> -->
                    
                        <li class="navigation-menu-list-li"><a itemprop="url"  href="{{ URL::to('my-buyer',null,is_secured()) }}" class="navigation-menu-list-li-a da12">My Buyers</a></li>
                        <!-- <li class="navigation-menu-list-li"><a itemprop="url"  href="{-{ URL::to('extra-inquery',is_secured()) }-}" class="navigation-menu-list-li-a">Extra Inquiries</a></li> -->
                        <li class="navigation-menu-list-li"><a itemprop="url"  href="{{ URL::to('product/manage_product_group',null,is_secured()) }}" class="navigation-menu-list-li-a da13">Manage Product Groups</a></li>
                        
                        @endif
                
                </ul>
                       
                </div>
            </div>
        </div>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

        
