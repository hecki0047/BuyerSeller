<?php      
  use App\Models\CompanyImage;                                                                     
  $customer=App\Models\Companies::with('customers','supplier_info','name_string','company_image')->where('id',Route::current()->parameters()['profile_id'])->first();
?>
 <?php 
  $nav_menus=\App\Models\PagesPrefix::where('prefix','Templete')->get();
  $product_groups=DB::table('supplier_product_groups')->where('company_id',Route::current()->parameters()['profile_id'])->get();
  //print_r(Route::current()->parameters());
?>
<section>
<div class="container padding_0">
<div class="row " style="background: #fff; padding-top: 20px;">
<div class="col-xs-12 padding_0">
	<div class="col-xs-3">
      <a href="{{URL::to('/')}}">
			<img style="width:90px;" src="{!! asset('assets/logo.png') !!}" alt="buyer Seller">
      </a>
	</div>
	<div class="col-xs-7 padding_0">
<form class="form" method="post" action="{{ URL::to('search-product',null,is_secured()) }}">
	{!! csrf_field() !!}
	<div class="input-group">
		<input id="search_about" type="text" class="form-control" style="height: 34px;" placeholder="Search product"  name="key">
		<span class="input-group-btn search_from_template">
			<button class="btn btn-primary" type="button"><i class="fa fa-search-plus"></i></button>
		</span>
	</div>
</form>
	</div>
	<div class="col-xs-2 padding_0" style="padding-bottom: 10px;">
      <div id="user-pro" style="margin-bottom: 12px; margin-top:-3px;">
			<img style="width: 40px; margin-left:8px; float: right;margin-right: :30%;" src="{!! asset('assets/mobile-images/index.png',is_secured()) !!}" alt="buyer Seller">
    </div>
	</div>
</div>
<div class="col-xs-12">
  <div class="collapse navbar-collapse m-nevbar" id="user-login-bdtdc" style="padding-right: 0; position: absolute;z-index: 99999; background: #fff; width: 100%; left: 0; border-bottom: 1px solid #ddd;">
      <div class="user-login-m">
          <div class="unregister" style="position: relative;">
                  <div class="avatar">
                        <div><a itemprop="url" href="" class="avatar-span"></a></div>                        
                  </div>
                  <div style="position: absolute;bottom: 18px;left: 15px;display: block;overflow: hidden;">
                         @if (Sentinel::check())
                        <a itemprop="url" class="sng btn btn-info btn-lg" href="{{URL::to('/logout')}}" style=" background: 0 none; color: #fff !important;">Logout</a>
                    @else
                       <span class="sng btn btn-info btn-lg si_active" style=" background: 0 none; color: #fff !important;"> Sign In</span> <span class="sng" style="width: 20px; float: left; color:#fff;">|</span>
                       <span class="sng btn btn-info btn-lg jn_active" style="background: 0 none;color: #fff !important;">Join Free</span>
                        
                     @endif
                </div>
          </div>
      </div>
    <ul class="nav navbar-nav" style="padding-left: 20px;">
        <li class=""><a itemprop="url" href="{{ URL::to('/',null,is_secured())}}" style="font-size: 16px; color:#666;"><span style="padding-right: 13px;"><i class="fa fa-home" aria-hidden="true" style="font-size: 22px;color:#666;"></i></span>Home<span class="sr-only">(current)</span></a></li>
       <li><a itemprop="url" href="{{URL::to('default/chat/default',null,is_secured())}}" style="font-size: 16px; color:#666;"><span style="padding-right: 12px;"><i class="fa fa-comment" aria-hidden="true" style="font-size: 22px;color:#666;"></i></span> Messanger</a></li>
       <li><a itemprop="url" href="{{URL::to('default/message',null,is_secured())}}" style="font-size: 16px; color:#666;"><span style="padding-right: 13px;"><i class="fa fa-envelope" aria-hidden="true" style="font-size: 22px;color:#666;"></i></span>Inquiries
       </a></li>
       <li><a itemprop="url" href="{{URL::to('Mybuying-Request',null,is_secured())}}" style="font-size: 16px; color:#666;"><span style="padding-right: 12px;"><i class="fa fa-leaf" aria-hidden="true" style="font-size: 22px;color:#666;"></i></span> Buying Request</a></li>
       <li><a itemprop="url" href="{{URL::to('get-quotations',null,is_secured())}}" style="font-size: 16px; color:#666;"><span style="padding-right: 12px;"><i class="fa fa-bolt" aria-hidden="true" style="font-size: 22px;color:#666;"></i></span> Quick Quotation</a></li>
       <li><a itemprop="url" href="{{URL::to('my-favorite',null,is_secured())}}" style="font-size: 16px; color:#666;"><span style="padding-right: 12px;"><i class="fa fa-star" aria-hidden="true" style="font-size: 22px;color:#666;"></i></span> My Favorites</a></li>
      <li><a itemprop="url" href="http://support.bdtdc.com/" style="font-size: 16px; color:#666;"><span style="padding-right: 12px;"><i class="fa fa-comment" aria-hidden="true" style="font-size: 22px;color:#666;"></i></span> Feedback</a></li>
     </ul> 
    </div>
    </div>
  </div>
</div>
</section>
<section>
<div class="container padding_0">
<div class="row" style="background: #fff;">
		<div class="templ-hed-bg">
			<div class="teplt-hd">
					<div class="hd-bg-img"></div>
					<a href="#">
						@if($customer)
						@if($customer->company_image)
					 <div class="comp-temp-logo">
						<img style="width: 48px; height: 48px;" src="{{ URL::to('uploads',$customer->company_image->image,is_secured()) }}" alt="company logo">
					 </div>
					 @endif					 
					</a>
			
					<div class="comany-nm-ttle" style="position: absolute;top:-6px; margin-top: 0;">
							<h4 class="nm-tle" style="font-size: 14px;">{{$customer->name_string->name}}</h4> 
							<h5 class="cty"><!-- [ Hong Kong ] --></h5>	
							@if($customer->supplier_info)
                      @else
                        @endif
                      @if($customer->supplier_info)
						<div>
							<ul style="padding: 0; width: 100%; float: left;">
								<li class="icon-com-img"><img class="icon-com-img-wdt" src="{!! asset('assets/mobile-images/Gold-membership.png') !!}" alt="Gold member"></li>
								<li class="icon-com-img">{{ $customer->supplier_info->membership_year ?? '1'}} YR</li>
								<li class="icon-com-img"><img class="icon-com-img-wdt" src="{!! asset('assets/mobile-images/Hand-Shake-Icon.png') !!}" alt="verified"></li>
								<li class="icon-com-img">
									<a href="{{ URL::to('BuyerChannel/pages/trade_assurance',5)}}" target="_blank"><img class="icon-com-img-wdt" src="{!! asset('assets/mobile-images/Buyer-protection-home.png') !!}" alt="trade assurance"></a></li>
							</ul>
						</div>	
						 @else

                      @endif	
					</div>
					@endif
				
			</div>
		</div>
</div>
<div class="row padding_0" style="background: #fff;">
	<div>
	    <ul class="nav nav-tabs company-temp">
		    <li class="company-temp-li"><a class="company-temp-li-a" href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$customer->name_string->name),Route::current()->parameters()['profile_id'],is_secured()) }}">Home</a></li>
		    <li class="company-temp-li"><a class="company-temp-li-a" href="{{URL::to('product-template',Route::current()->parameters()['profile_id'])}}">Products</a></li>
		    <li class="company-temp-li"><a class="company-temp-li-a" href="{{ URL::to(preg_replace('/[^A-Za-z0-9\-]/', '-',$customer->name_string->name).'/company-overview',Route::current()->parameters()['profile_id'],is_secured()) }}">Profile</a></li>
		    <li class="company-temp-li"><a class="company-temp-li-a" href="{{ URL::to('contact/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$customer->name_string->name),Route::current()->parameters()['profile_id'],is_secured()) }}">Contact</a></li>
		</ul>
	</div>
</div>
</div>
</section>
 <script src="{!! asset('assets/fontend/jquery.min.js',is_secured()) !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/fontend/bootstrap.min.js',is_secured()) !!}"></script>
    <!--ANIMATED POP UP SCRIPT-->
    <script src="{{URL::asset('assets/fontend/js/animatedModal.min.js',is_secured())}}"></script>
    <!--SWEET ALERT POP-UP SCRIPT-->
    <script src="{{ URL::asset('assets/fontend/js/sweetalert.min.js',is_secured()) }}"></script>
    <script type="text/javascript" src="{!! asset('assets/ga.js',is_secured()) !!}"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script src="{{ URL::asset('assets/fontend/js/jquery-te-1.4.0.min.js',is_secured()) }}" charset="utf-8"></script>
    <script type="text/javascript" src="{!! asset('assets/fontend/js/slick.min.js',is_secured()) !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/fontend/js/smallworld.min.js',is_secured()) !!}"></script>
    <script type="text/javascript" src="{!! asset('assets/fontend/js/smallworld.jquery.min.js',is_secured()) !!}"></script>

<script type="text/javascript" src="{!! asset('assets/fontend/js/template_custom.js',is_secured()) !!}"></script>
      
    <script type="text/javascript">

        $(document).ready(function(){
          $("#user-pro").click(function(){
              $("#user-login-bdtdc").slideToggle("slow");
          });
      });
        (function(){
            var route_arr,company_id,url;
            route_arr = window.location.href.split('/');
            company_id = $('[name="profile_id"]').val();
            url = window.location.origin + "/template/get_header_info/"+company_id;
            $.get(url, function(r) {
                var img_name = (r.company_header_info == null || r.company_header_info.company_logo == null || r.company_header_info.company_logo == "") ? "no_image.jpg" : r.company_header_info.company_logo;
                $('.header_user_name').html(r.company_header_info.user_name);
                $('.header_company_name').html(r.company_header_info.company_name);
                $('.header_logo_img').attr('src', window.location.origin + '/uploads/' + img_name);
                $('[data-supplier_id]').attr('data-supplier_id',r.company_header_info.user_id);
                $('[data-target-id]').attr('data-target-id',r.company_header_info.user_id+'548569572');
                $('.header_first_name').html(r.company_header_info.user_name);
                $('.header_last_name').html(r.company_header_info.last_name);
            })
        })()

        

        $(document).ready(function(){
            var nav_url = window.location.href;
            var nav_url_array = nav_url.split("/");
            if(nav_url_array[3] == 'Home'){
                $('ul.company-temp li:nth-child(1)').css('background','white');
            }else if(nav_url_array[3] == 'contact'){
              $('ul.company-temp li:nth-child(4)').css('background','white');
            }else if(nav_url_array[4] == 'company-overview'){
              $('ul.company-temp li:nth-child(3)').css('background','white');
            }else{
              $('ul.company-temp li:nth-child(2)').css('background','white');
            }
            

            $(document).on({
                    click: function(e) {
                        e.preventDefault();
                        var url,base_url,supplier_id,product_id;
                        $('.modal-content').html('<span class="btn btn-block btn-lg"><i class="fa fa-spinner fa-pulse loading_icon text-primary"></i></span>');
                        base_url = window.location.origin;
                        supplier_id = $(this).data('supplier_id');
                        product_id = $(this).data('product_id');
                        // alert (product_id);
                        // alert (supplier_id);
                        
                        url = (product_id =="#") ? base_url+"/contact_supplier/"+supplier_id : base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
                        // $.get(url, function(r) {
                        //     $('.modal-content').html(r)
                        // })
                        window.location.href = url;
                    }
                }, '.contact_supplier');

            


        });
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