@extends('frontend.layouts.master-profile-m')
  @section('content')
  <?php
  $customer=App\Model\Companies::with('customers','users')->where('id',Route::current()->parameters()['profile_id'])->first();
          //print_r($customer->location_of_reg);
        use App\Models\Users;
         $profile_id=Route::current()->parameters()['profile_id'];
    ?>
@include('mobile-view.country-product.template-header')
<div class="row" style="background: #fff;">
    <div class="col-xs-12 padding_0" style="padding-bottom: 20px; border-bottom: 1px solid #ddd;">

          <div class="col-xs-4 padding_0">
              <div class="comp-charct">
                  <div class="comp-charct-char"><dt class="comp-charct-char-dt">Business Type:</dt></div>
                  <div class="comp-charct-char"><dt class="comp-charct-char-dt">Year Established:</dt></div>
                  <div class="comp-charct-char"><dt class="comp-charct-char-dt">Main Products:</dt></div>
                  <div class="comp-charct-char"><dt class="comp-charct-char-dt">Main Markets:</dt></div>
              </div>
          </div>
          <div class="col-xs-8">
              <div class="comp-charct">
                  <div class="comp-charct-char"><dd class="comp-charct-dd">{{ ($company_info) ? $company_info->busines_type_id :"" }}</dd></div>
                  <div class="comp-charct-char"><dd class="comp-charct-dd">{{  $company_info->establish_date ?? '' }}</dd></div>
                  <div class="comp-charct-char"><dd class="comp-charct-dd">@foreach($main_products as $data)
                              {{ $data->product_name }}
                        @endforeach</dd></div>
                  <div class="comp-charct-char"><dd class="comp-charct-dd">Domestic Market, North America, Western Europe, Eastern Asia, Oceania</dd></div>
              </div>
          </div>
      </div>
  </div>
<!--   <div class="row padding_0" style="padding-bottom: 40px; background: #fff;">
            <div class="col-xs-12">
                <a href="#">
                <div class="sup-ttyp"><img style="width: 25px;" src="{!! asset('resources/assets/mobile-images/Buyer-protection-home.png',is_secured()) !!}" alt="bdtdc"><span style="margin-left: 12px; color:#666;">Trade Assurance</span></div>
                </a>
                <div class="cont-inf">Order quality and on-time shipment safeguards
                       </div>
                       <div class="cont-inf" style="margin-top: 5px;">
                          Trade Assurance Amount: <span style="color: #F60;">US $56,000</span>
                       </div>
            </div>
</div> -->
<div class="row" style="background: #fff;padding-bottom: 50px; margin-bottom: 20px; border-bottom: 1px solid #ddd;">
            <div class="col-xs-12 padding_0">
              <div class="product-block">
            <div style="float: left;font-size: 24px; color:#666; clear: both;"><h2 class="con-h2">Latest Product Of This Supplier</h2>
            </div>
            <div itemscope itemtype="http://schema.org/Product">
               @if($products_lists)
                <ul class="hot-pr-list" style="float: left; display: block;clear: both;max-width: 767px;">
                   @foreach($products_lists as $pro)
                   
                    <li class="hot-pr-list-li" style="width: 50%;">
                       @if($pro->pro_to_cat_name)
                       <a itemprop="url" class="hot-pr-list-li-a" title="{{ $pro->pro_to_cat_name->name ?? '' }}" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $pro->pro_to_cat_name->name).'='.mt_rand(100000000, 999999999).$pro->product_id) }}">
                        @else
                        <a itemprop="url" class="hot-pr-list-li-a" title="" target="_blank" href="{{ URL::to('product-details/'.'='.mt_rand(100000000, 999999999).$pro->product_id) }}">
                        @endif
                        
                        @if($pro->pro_images_new)
                           
                                    <img itemprop="image" src="{{ URL::to((isset($pro->pro_images_new)) ? $pro->pro_images_new->image : 'no_image.jpg') }}" class="hot-pr-list-li-img" alt="{{ $pro->pro_to_cat_name->name ?? '' }}" />
                             
                        @else
                            <img itemprop="image" src="{{ URL::to('uploads/no_image.jpg') }}" class="hot-pr-list-li-img" alt="{{ $pro->pro_to_cat_name->name ?? '' }}" />
                        @endif
                        @if($pro->pro_to_cat_name)
                    <span class="hot-pr-list-li-span">{{ substr($pro->pro_to_cat_name->name, 0, 24) }}</span>
                    @else
                    <span class="hot-pr-list-li-span">need to add product name</span>
                    </a>
                    @endif

                    </li>
                  
                @endforeach
                  @endif
                </ul>
          
      
       </div>

           @if($customer)
      <div style="margin: 0 auto;"><a itemprop="url" href="{{URL::to('product-template',$customer->id)}}">View All Products
                 <span style="float: right;"><i style="font-size:30px;color:#666; padding-right:30px;" class="fa fa-angle-right" aria-hidden="true"></i></span></a>
          </div>
          @endif  
     </div>
</div>
</div>
<div class="row" style="background: #fff;">
      <div style="padding: 26px 20px 80px 80px; position: relative;">
          <div class="contact-picture">
            <img class="contact-picture-photo img-circle" src="@if($customer->pro_pic){{ URL::to('uploads',$customer->pro_pic) }} @elseif($customer->users) {{ URL::to('uploads',$customer->users->profile_picture) }} @else {{ URL::to('uploads/no_image.jpg') }} @endif" alt="">
          </div>
          <div class="contact-brief">
                 @if($customer)
                    @if($customer->users)
                    <dt class="person-nm">{{$customer->users->first_name}} {{$customer->users->last_name}}</dt>
                    <p>Department:
                    <span>{{$customer->users->department}}</span></p>
                    @endif
                @endif 
          </div>
      </div>
</div>
@include('frontend.layouts.chat-supplier')
@stop
@section('scripts')
<script type="text/javascript">
      $(document).ready(function(){
          $(".nav-tabs a").click(function(){
               $(this).tab('show');
         });
        $('.nav-tabs a').on('shown.bs.tab', function(event){
            var x = $(event.target).text();         // active tab
            var y = $(event.relatedTarget).text();  // previous tab
            $(".act span").text(x);
            $(".prev span").text(y);
        });
    });
</script>
@stop