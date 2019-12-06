@extends('fontend.template.layout_dynamic')
@section('own_styles')
@stop
@section('content')
   <div class="container">
      @if(!empty($template_setting_data))

         @foreach($template_setting_data as $ts_datanavfslider)
            @if($ts_datanavfslider->template_section)
               @if($ts_datanavfslider->template_section->slug == "homebanner")
                  <div class="row">
                     <div class="col-md-1 hidden_collum"></div>
                     <div class="col-md-10 padding_0">
                        @include('fontend.template.home_slide')
                     </div>
                     <div class="col-md-1 hidden_collum"></div>
                  </div>
               @endif
            @endif
         @endforeach
      @endif

      @if(empty($template_setting_data))
         @foreach($template_setting_data as $ts_datanavfslider)
            @if($ts_datanavfslider->pro_sections == 1)
               <div class="row">
                  <div class="col-md-1 hidden_collum"></div>
                  <div class="col-md-10 padding_0">
                     @include('fontend.template.home_section')
                  </div>
                  <div class="col-md-1 hidden_collum"></div>
               </div>
            @endif
         @endforeach
      @endif
   </div>
   <!-- -WHOLE SALE PRODUCT DESCRIPTION -->
   <!---BANNER TITLE WITH BORDER BOTTOM-->
   <!--CATEGORIE TITLE WITH BORDER BOTTOM-->
   <div class="container">
      <div style="margin-top:0%" class="row">
         <div class="col-md-1"></div>
         <div class="col-md-10 padding_0" style="">
            <h4 style="font-weight:bold;width:100%;border-bottom:1px solid #666;padding-bottom:1%; color:
               @if(empty($template_setting_data)) rgb(240, 38, 22);
               @else
                  @foreach($template_setting_data as $ts_databgcol)
                     @if($ts_databgcol->template_section)
                        @if($ts_databgcol->template_section->slug == 'Templatebackground')
                           {{$ts_databgcol->font_color}}
                           @php break @endphp
                        @endif
                     @endif
                  @endforeach
               @endif
               ">Latest Product Of This Supplier
            </h4>
         </div>
         <div class="col-md-1"></div>
      </div>  
   </div>
   <!---CATEGORIE WISE PRODUCT LIST-->
   <div class="container">
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-10 padding_0" style="background:white;padding-top:0%;padding-bottom:0%">
         <!-- product coursel -->
         <div style="border-left:1px solid rgba(0,0,0,.1);padding-top: 30px;" class="recommended_items product_slide_area">
            <!--recommended_items-->      
            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  @php $wp_count = 0; $breaker_count = 1;$wp_counter = 0; $active_count = 1; @endphp
                  @foreach ($products_list as $wp_products)
                     @if($wp_products->pro_to_cat_name)
                        @php $wp_counter++; @endphp
                     @endif
                  @endforeach
                  @if($products_list)
                     @foreach($products_list as $pro)
                        @if($pro->pro_to_cat_name)
                           @if($active_count == 1)
                              @if(($wp_count % 4) == 0) <div class="item active"> @php $breaker_count = 2; @endphp @endif
                           @else
                              @if(($wp_count % 4) == 0) <div class="item"> @php $breaker_count = 2; @endphp @endif
                           @endif

                           <div class="col-sm-3 col-xs-6">
                              <div class="product-image-wrapper mkn_edit_wrapper"  itemscope itemtype="http://schema.org/Product">
                                 <div class="single-products">
                                    @if($pro->pro_to_cat_name)
                                    <a title="{{ $pro->pro_to_cat_name->name ?? '' }}" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $pro->pro_to_cat_name->name).'='.mt_rand(100000000, 999999999).$pro->product_id,null,is_secured()) }}">
                                    @else
                                    <a title="" target="_blank" href="{{ URL::to('product-details/'.'='.mt_rand(100000000, 999999999).$pro->product_id,null,is_secured()) }}">
                                    @endif
                                    <div class="productinfo text-center">
                                       @if($pro->pro_images_new)
                                       <img src="{{ URL::to((isset($pro->pro_images_new))?''.$pro->pro_images_new->image : 'no_image.jpg',null,is_secured()) }}" class="img-responsive wholesale_pro_img" alt="{{ $pro->pro_to_cat_name->name ?? '' }}" />
                                       @else
                                       <img src="{{ URL::to('uploads/no_image.jpg',null,is_secured()) }}" class="img-responsive wholesale_pro_img" alt="{{ $pro->pro_to_cat_name->name ?? '' }}" />
                                       @endif
                                       @if($pro->pro_to_cat_name)
                                       <p class="product_title">{{ substr($pro->pro_to_cat_name->name, 0, 24) }}</p>
                                       @else
                                       <p class="product_title">need to add product name</p>
                                       @endif
                                    </div>
                                 </a>
                              </div>
                              @if(Sentinel::getUser())
                                 @if(Sentinel::inRole('admins'))
                                    @if($pro->supp_company)
                                    <div class="mkn_edit_wrapper_single">
                                       <a target="_blank" href="{{URL::to('admin/make-me-login-redirect/'.$pro->supp_company->user_id.'?redirect=supplier/product_edit/'.$pro->product_id)}}" class="btn btn-warning">Edit</a> <button data-product_id="{{$pro->product_id}}" target="_blank" class="btn btn-danger delete_product">Delete</button>
                                    </div>
                                    @endif
                                 @endif
                              @endif
                           </div>
                        </div>

                        @if(($wp_count % 4) == 3) </div> @php $breaker_count = 1;$active_count++; @endphp @endif
                        @if(($wp_count == $wp_counter-1) && $breaker_count == 2) </div> @endif
                        @php $wp_count++;$active_count++; @endphp
                     @endif
                  @endforeach
               @endif
               </div>
               <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
               </a>
               <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                  <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <div class="col-md-1"></div>
   </div>
</div>
<!--BANNER TITLE WITH BORDER BOTTOM-->
<!---MAIN CATEGORIE TITLE WITH BORDER BOTTOM-->
<div class="container">
   <div style="margin-top:1%" class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10 padding_0">
         <h4 style="font-weight:bold;width:100%;border-bottom:1px solid #666;padding-bottom:1%;color:
         @if(empty($template_setting_data)) #1A4570;
         @else
            @foreach($template_setting_data as $ts_databgcol)
               @if($ts_databgcol->slug == 'Templatebackground')
                  {{$ts_databgcol->font_color}}
                  @php break; @endphp
               @endif
            @endforeach
         @endif
         ">Main Category</h4>
      </div>
      <div class="col-md-1"></div>
   </div>
</div>
<!---CATEGORIE WISE PRODUCT LIST-->
<div class="container">
   @php $pro_count = 1; @endphp
   @foreach($supplier_product_group_ar as $main_category_products)
      @if($main_category_products->active != 0)
         @if(count($main_category_products->BdtdcSupplierProductGroupsProducts) > 0)
            <div class="row">
               <div class="col-md-10 col-md-offset-1 category_product_holder" style=" border:1px solid #DDDDDD;background: #FFFFFF">
                  <p style="font-weight:bold;margin-top: 2%;line-height: 0px;margin-left:1%;color:#0087CF"><a style="color:inherit;" href="{{ URL::to('profile/template_'.'/'.$main_category_products->company_id.'/'.$main_category_products->name) }}"><i class="fa fa-list"></i>&nbsp; {!! $pro_count !!}. {{ $main_category_products->name }}</a></p>
                  <div class="row" style="padding: 0px 15px;padding-bottom:10px;">
                     @if($main_category_products->show_banner == 1 &&$main_category_products->image != null && $main_category_products->image != '')
                        <div class="col-md-8 col-sm-8 col-xs-12 padding_0 text-center">
                           <div style="text-align: center;">
                              <img class="img-responsive" style="width:649px;height:343px;margin-top:4px;" src="{{ URL::to('banner-images',$main_category_products->image,is_secured()) }}">
                           </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12" style="padding-right: 0;">
                           <div class="row cat_prod_holder">
                              @php $main_products_counter = 1; @endphp
                              @foreach($main_category_products->BdtdcSupplierProductGroupsProducts as $ProductGroupsProducts)
                                 @if($main_category_products->BdtdcSupplierProductGroupsProducts)
                                    @php $ProductGroupsProductsName = $ProductGroupsProducts->product_name?$ProductGroupsProducts->product_name->name:''; @endphp
                                    @if($main_products_counter > 4)
                                       @php break; @endphp
                                    @endif
                                    <div style="margin-top:1%;margin-bottom: 2%;" class="col-md-6 padding_0 text-center ban-pro-hover mkn_edit_wrapper">
                                       <div class="">
                                          <a title="{!! $ProductGroupsProductsName !!}" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $ProductGroupsProductsName).'='.mt_rand(100000000, 999999999).$ProductGroupsProducts->id,null,is_secured()) }}">
                                             <div style="text-align: center;">
                                                @if($ProductGroupsProducts->product_image_new)
                                                <img src="{{ URL::to((isset($ProductGroupsProducts->product_image_new['image']))?''.$ProductGroupsProducts->product_image_new['image']: 'no_image.jpg',null,is_secured()) }}" style="width:127px;border:1px solid #DDDDDD;height:130px;" alt="{{ $ProductGroupsProductsName ?? '' }}" class="img-responsive">
                                                @else
                                                <img src="{{ URL::to('uploads/no_image.jpg',null,is_secured()) }}" style="width:127px;border:1px solid #DDDDDD;height:130px;" alt="{{ $ProductGroupsProductsName ?? '' }}" class="img-responsive">
                                                @endif
                                             </div>
                                             <div class="col-xs-12">
                                                <p style="width:96%;margin-left:4%">{{ substr($ProductGroupsProductsName, 0, 17) }}..</p>
                                             </div>
                                          </a>
                                       </div>
                                       @if(Sentinel::getUser())
                                          @if(Sentinel::inRole('admins'))
                                             @if($ProductGroupsProducts->bdtdcProductToCategory)
                                                @if($ProductGroupsProducts->bdtdcProductToCategory->supp_company)
                                                <div class="mkn_edit_wrapper_single">
                                                   <a target="_blank" href="{{URL::to('admin/make-me-login-redirect/'.$ProductGroupsProducts->bdtdcProductToCategory->supp_company->user_id.'?redirect=supplier/product_edit/'.$ProductGroupsProducts->id)}}" class="btn btn-warning">Edit</a> <button data-product_id="{{$ProductGroupsProducts->id}}" target="_blank" class="btn btn-danger delete_product">Delete</button>
                                                </div>
                                                @endif
                                             @endif
                                          @endif
                                       @endif
                                    </div>
                                    @php $main_products_counter++; @endphp
                                 @endif
                              @endforeach
                           </div>
                        </div>
                        @else
                        @if(count($main_category_products->BdtdcSupplierProductGroupsProducts) > 0)
                        <div class="row cat_prod_holder">
                           @foreach($main_category_products->BdtdcSupplierProductGroupsProducts as $ProductGroupsProducts)
                           <div style="margin-top:1%;margin-bottom: 2%;" class="col-xs-6 col-sm-6 col-md-3 padding_0 text-center ban-pro-hover mkn_edit_wrapper">
                              @php
                                 $pro_name = 'Not Available';
                              @endphp
                              @if($ProductGroupsProducts->product_name)
                                 @php $pro_name = $ProductGroupsProducts->product_name->name; @endphp
                              @endif
                              <div class="">
                                 <a title="{!! $pro_name !!}" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $pro_name).'='.mt_rand(100000000, 999999999).$ProductGroupsProducts->id,null,is_secured()) }}">
                                    <div>
                                       @if($ProductGroupsProducts->product_image_new)
                                       <img src="{{ URL::to((isset($ProductGroupsProducts->product_image_new['image']))?''.$ProductGroupsProducts->product_image_new['image']: 'no_image.jpg',null,is_secured()) }}" style="width:90%;border:1px solid #DDDDDD;height:220px" alt="{{ $pro_name ?? '' }}" class="img-responsive">
                                       @else
                                       <img src="{{ URL::to('uploads/no_image.jpg',null,is_secured()) }}" style="width:90%;border:1px solid #DDDDDD;height:220px" alt="{{ $pro_name ?? '' }}" class="img-responsive">
                                       @endif
                                    </div>
                                    <div class="col-xs-12" style="padding-top: 5px">
                                       <p style="width:96%;margin-left:4%">{{ substr($pro_name, 0, 20) }}...</p>
                                    </div>
                                 </a>
                              </div>
                              @if(Sentinel::getUser())
                                 @if(Sentinel::inRole('admins'))
                                    @if($ProductGroupsProducts->bdtdcProductToCategory)
                                       @if($ProductGroupsProducts->bdtdcProductToCategory->supp_company)
                                       <div class="mkn_edit_wrapper_single">
                                          <a target="_blank" href="{{URL::to('admin/make-me-login-redirect/'.$ProductGroupsProducts->bdtdcProductToCategory->supp_company->user_id.'?redirect=supplier/product_edit/'.$ProductGroupsProducts->id)}}" class="btn btn-warning">Edit</a> <button data-product_id="{{$ProductGroupsProducts->id}}" target="_blank" class="btn btn-danger delete_product">Delete</button>
                                       </div>
                                       @endif
                                    @endif
                                 @endif
                              @endif
                           </div>
                           @endforeach
                        </div>
                        @endif
                     @endif
                  </div>
               </div>
            </div>
            @php $pro_count++;@endphp
         @endif
      @endif
   @endforeach
</div>
<!--- UNCATEGORIZED PRODUCT -->
@if(isset($inactive_product_list))
   @if(count($inactive_product_list)>0)
   <div class="container">
      <div style="margin-top:1%" class="row">
         <div class="col-md-1"></div>
         <div class="col-md-10 padding_0">
            <h4 style="font-weight:bold;width:100%;border-bottom:1px solid #666;padding-bottom:1%;color:
               @if(empty($template_setting_data))
                  rgb(248, 248, 248)
               @else
                  @foreach($template_setting_data as $ts_databgcol)
                     @if($ts_databgcol->slug == 'Templatebackground')
                        {{$ts_databgcol->font_color}}
                        @php break; @endphp
                     @endif
                  @endforeach
               @endif
               ">Uncategorized Products
            </h4>
         </div>
         <div class="col-md-1"></div>
      </div>
   </div>
   <!--- UNCATEGORIZED PRODUCT LIST -->
   <div class="container">
      <div class="row">
         <div class="col-md-10 col-md-offset-1 category_product_holder" style=" border:1px solid #DDDDDD;background: #FFFFFF">
            <div class="row" style="padding: 0px 15px;padding-bottom:10px;">
               <div class="row cat_prod_holder">
                  @if(count($inactive_product_list)>0)
                     @foreach($inactive_product_list as $ProductGroupsProducts)
                        @if(isset($ProductGroupsProducts->product_id))
                        <div style="margin-top:1%" class="col-xs-6 col-sm-6 col-md-3 padding_0 text-center ban-pro-hover mkn_edit_wrapper">
                           @php $pro_name = 'Not Available'; @endphp
                           @if(isset($ProductGroupsProducts->name))
                              @if(trim($ProductGroupsProducts->name) != '')
                                 @php $pro_name = $ProductGroupsProducts->name; @endphp
                              @endif
                           @endif
                           <div class="">
                              <a title="{!! $pro_name !!}" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $pro_name).'='.mt_rand(100000000, 999999999).$ProductGroupsProducts->product_id,null,is_secured()) }}">
                                 <div>
                                    @if($ProductGroupsProducts->product_image_new)
                                    <img src="{{ URL::to((isset($ProductGroupsProducts->product_image_new['image']))?''.$ProductGroupsProducts->product_image_new['image'] : 'no_image.jpg',null,is_secured()) }}" style="width:80%;border:1px solid #DDDDDD;height:150px" alt="{{ $pro_name ?? '' }}" class="img-responsive">
                                    @else
                                    <img src="{{ URL::to('uploads/no_image.jpg',null,is_secured()) }}" style="width:80%;border:1px solid #DDDDDD;height:150px" alt="{{ $pro_name ?? '' }}" class="img-responsive">
                                    @endif
                                 </div>
                                 <div class="col-xs-12">
                                    <p style="width:96%;margin-left:4%">{{ substr($pro_name, 0, 20) }}...</p>
                                 </div>
                              </a>
                           </div>
                           @if(Sentinel::getUser())
                              @if(Sentinel::inRole('admins'))
                                 @if($ProductGroupsProducts->product_name_category)
                                    @if($ProductGroupsProducts->product_name_category->supp_company)
                                    <div class="mkn_edit_wrapper_single">
                                       <a target="_blank" href="{{URL::to('admin/make-me-login-redirect/'.$ProductGroupsProducts->product_name_category->supp_company->user_id.'?redirect=supplier/product_edit/'.$ProductGroupsProducts->product_id)}}" class="btn btn-warning">Edit</a> <button data-product_id="{{$ProductGroupsProducts->product_id}}" target="_blank" class="btn btn-danger delete_product">Delete</button>
                                    </div>
                                    @endif
                                 @endif
                              @endif
                           @endif
                        </div>
                        @endif
                     @endforeach
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>
   @endif
@endif
<!---COMPANY INTRODUCTION TITLE WITH BORDER BOTTOM-->
<div class="container">
   <div style="margin-top:1%" class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10 padding_0" style="background-color: #fff;padding: 1%">
         <h4 style="font-weight:bold;width:100%;border-bottom:1px solid #666;padding-bottom:1%;color:#1A4570;">Company Introduction</h4>
      </div>
      <div class="col-md-1"></div>
   </div>
</div>
<!---COMPANY INTRODUCTION DESCRIPTION-->
<div class="container">
   <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10 padding_0" style="background-color: #fff;padding: 1%">
         <div class="col-md-3 col-xs-6 padding_0">
            @if($company_images)
            <img src="{{ URL::to('uploads',$company_images->image,is_secured()) }}" style="width:80%" alt="" class="img-thumbnail">
            @else
            <img src="{{ URL::to('uploads','company_logo_pLCIz2kPL3.jpg',is_secured()) }}" style="width:80%" alt="" class="img-thumbnail">
            @endif
         </div>
         <div class="col-md-6 col-xs-12 padding_0">
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <tr>
                        <td style="border-top:none;padding-top:0%">Verification Type</td>
                        <td style="border-top:none;padding-top:0%!important;font-size:17px;line-height:0px"><i class="fa fa-calendar-check-o text-primary"></i>&nbsp;<a href="{{URL::to('BuyerChannel/pages/accredited_suppliers',16,is_secured())}}" class="btn-link text-primary">Onsite Check</a></td>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td style="border-top:none"><i style="font-weight: bold" class="fa fa-check text-primary"></i>&nbsp; Year Established:</td>
                        <td style="border-top:none">
                           {{  $company_info->year_of_reg ?? '' }}
                        </td>
                     </tr>
                     <tr>
                        <td style="border-top:none"><i style="font-weight: bold" class="fa fa-check text-primary"></i>&nbsp; Location:</td>
                        <td style="border-top:none"> {{ ($company_info) ? $company_info->location_of_reg_string->name : "" }}</td>
                     </tr>
                     <tr>
                        <td style="border-top:none"><i style="font-weight: bold" class="fa fa-check text-primary"></i>&nbsp; Business Type:</td>
                        <td style="border-top:none"> {{ ($company_info) ? $company_info->customers->suppliers->business_types->name :"" }} </td>
                     </tr>
                     <tr>
                     @if($company_info->tradeinfo)
                        <td style="border-top:none"><i style="font-weight: bold" class="fa fa-check text-primary"></i>&nbsp; Total Annual Sales Volume:</td>
                        <td style="border-top:none">{{ ($company_info->tradeinfo->BdtdcFormValue) ? $company_info->tradeinfo->BdtdcFormValue->value : "" }}</td>
                     @endif
                     </tr>
                     <tr>
                        <td style="border-top:none"><i style="font-weight: bold" class="fa fa-check text-primary"></i>&nbsp; Main Products:</td>
                        <td style="border-top:none">
                           @if($main_products)
                              @if(count($main_products)>0)
                                 @foreach($main_products as $data)
                                    {{ $data->product_name_1 ?? '' }}
                                 @endforeach
                              @endif
                           @endif
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
         <div class="col-md-3 col-xs-12 padding_top1 padding_bottom2 padding_0" style="background:#F5F5F5;background:#E4E4E4;padding-top:1%;padding-bottom:1%" >
            <div class="col-xs-12">
               <p><i class="fa fa-user-md"></i> <span class="header_user_name"> </span></p>
            </div>
            @php $user_active = false; @endphp
            @if($user_active_data)
               @if($user_active_data->vacation_mode == 1)
                  @php $user_active = true; @endphp
               @endif
            @endif
            <div style="border-top: 2px solid #fff" class="col-xs-12">
               <p>
                  @if($user_active)
                  <a class="chat_single" href="javascript:void(0)" onclick="javascript:window.open('/default/chat/{{ ($company_info?$company_info->customers->suppliers->id:0).mt_rand(100000000, 999999999) }}', 'CompanyGraph', 'ttoolbar=no,top=100,left=450,width=500,height=500,scrollbars=1')" data-target-id="{{ ($company_info?$company_info->customers->suppliers->id:0).mt_rand(100000000, 999999999) }}"><i class="fa fa-weixin" style="color: green;"></i> Leave a message</a>
                  @else
                  <a href="#" data-product_id="#" data-supplier_id="{{ $company_info?$company_info->customers->suppliers->id:0 }}" class="contact_supplier"><i class="fa fa-weixin"></i> Leave a message</a>
                  @endif
               </p>
            </div>
            <div class="col-xs-12" style="margin-top:5%">
               <a href="#" data-product_id="#" data-supplier_id="{{ $company_info?$company_info->customers->suppliers->id:0 }}" class="btn btn-block btn-primary contact_supplier"><i class="fa fa-envelope-o"></i> Contact Supplier</a>
            </div>
         </div>
      </div>
      <div class="col-md-1"></div>
   </div>
</div>

@stop
@section('scripts')
<script type="text/javascript">

   var nav_url = window.location.href;
   var nav_url_array = nav_url.split("/");
   if(nav_url_array[3] == 'Home'){
      $('.data-color_changer>ul li:nth-child(1)').css('background','white');
      $('.data-color_changer>ul li:nth-child(1) a').css('color','black');
   }



   $(document).on({
      click: function(e) {
         e.preventDefault();
         if(confirm('Are you sure?')){
            var _this = $(this);
            var product_id = $(this).data('product_id');
            $.post(window.location.origin + '/x_product/' + product_id,{'_token':'{{csrf_token()}}'},function(r) {
               if(r == 'deleted'){
                  _this.parent().parent().remove();
                  var relode_url = window.location.href;
                  window.location.href = relode_url;
               }else if(parseInt(r) == 'login'){
                  alert ('Please Login First.');
               }else{
                  alert ('Query failed. Please Login first.');
               }
            });
         }
      }
   }, '.delete_product');
</script>
@stop