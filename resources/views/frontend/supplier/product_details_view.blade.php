@extends('fontend.master_dynamic')
@section('page_css')
<link property='stylesheet' href="{!! asset('css/single-product-details.css',is_secured()) !!}" rel="stylesheet">
<style type="text/css">
   @media only screen and (max-device-width: 1200px){
   .etalage{
   width:306px !important;
   }
   .etalage_thumb_image{
   width:300px !important;
   }                             
   }
</style>
@endsection
@section('extra_stylesheet')
@endsection
@section('content')
<div class="row" style="padding-top:1%;padding-bottom:0%">
   <input type="hidden" class="meta_keyword_manual" value="{{$products->product_name->meta_keyword}}">
   <div class="col-md-12 padding_0" style="padding-bottom: 1%">
      <ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
         <li style="float: left" itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <a itemprop="url" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> 
            <span itemprop="name">Home </span><i class="fa fa-angle-right"></i>
            </a>
            <meta itemprop="position" content="1" />
         </li>
         <li style="float: left"  itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <a itemprop="url" href="{{ URL::to($parent_id->slug,$parent_id->id,is_secured()) }}" style="color: #000"> 
            <span itemprop="name">{{ $parent_id->name }} &nbsp;
            </span> </a>
            <meta itemprop="position" content="2" />
         </li>
         <li style="float: left" itemprop="itemListElement" itemscope
            itemtype="http://schema.org/ListItem">
            <a itemprop="url" href="{{URL::to(strtolower(preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','-',($products->bdtdcProductToCategory->bdtdcCategory?$products->bdtdcProductToCategory->bdtdcCategory->name:'not available')))).'-products/0',$products->bdtdcProductToCategory->category_id,is_secured()) }}" style="color: #000"> <i class="fa fa-angle-right"></i> <span itemprop="name">{{ $products->bdtdcProductToCategory->bdtdcCategory?$products->bdtdcProductToCategory->bdtdcCategory->name:'not available' }}</span> <i class="fa fa-angle-right"></i>
            </a>
            <meta itemprop="position" content="3" />
         </li>
      </ul>
   </div>
</div>
<div style="padding-top:2%; padding-bottom: 5%; margin-bottom: 28px;" class="row" id="home_b" itemscope itemtype="http://schema.org/Product">
   <div class="col-sm-12 col-md-12 padding-right" style="">
      <div class="product-details" style="margin-bottom:0;">
         <!--product-details-->
         <div class="col-sm-5 col-md-4 col-lg-4 col-xs-12">
            <ul id="etalage">
               <li>
                  <a itemprop="url" href="#">
                  @if($products->product_image_new)
                  <img itemprop="image"  class="etalage_thumb_image" src="{{ URL::to(''.$products->product_image_new->image,null,is_secured())}}" alt="{{$products->product_name->name  }}" />
                  <img itemprop="image"  class="etalage_source_image" src="{{ URL::to(''.$products->product_image_new->image,null,is_secured())}}" alt="{{$products->product_name->name  }}" />
                  @else
                  not found
                  @endif
                  </a>
               </li>
               @if($products->proimages_new && count($products->proimages_new) > 0)
               @foreach($products->proimages_new as $image)
               <li>
                  <img itemprop="image"  class="etalage_thumb_image" src="{{ URL::to(''.$image->image,null,is_secured()) }}" alt="{{$products->product_name->name  }}" />
                  <img itemprop="image"  class="etalage_source_image" src="{{ URL::to(''.$image->image,null,is_secured()) }}" alt="{{$products->product_name->name  }}" />
               </li>
               @endforeach
               @endif
            </ul>
         </div>
         <div style="float: left;"  class="col-sm-4 col-md-5 col-lg-5 pro-detl col-xs-12 ">
            <div class="product-information">
               <!--/product-information-->
               <h1 style="font-size: 20px; margin-top: 0;" itemprop="name">{{$products->product_name->name }}</h1>
               @if($products->product_prices && $products->product_prices->product_FOB && trim($products->product_prices->product_FOB) != '' && trim($products->product_prices->product_FOB) != '0' && $products->product_prices->product_FOB != null && trim($products->product_prices->product_FOB) != 'NA' && trim($products->product_prices->product_FOB) != 'N/A' && trim($products->product_prices->product_FOB) != '-')
               @if(trim($products->product_prices->product_FOB) != '' && trim($products->product_prices->product_FOB) != '0' && $products->product_prices->product_FOB != null )
               <div style="margin-bottom: 4px;margin-top: 18px;color:#696763;" class="summary" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
                  FOB Price :
                  <div style="margin-top: -25px;margin-bottom:0px;padding-left:0px;" itemprop="priceCurrency" content="USD"><span class="pro_details_pad"><span style="margin-bottom:0px;padding-left: 91px"> US $</span>
                     @if($products->product_prices != null) 
                     @if($products->product_prices->product_FOB != null)
                     {{ $products->product_prices->product_FOB}}
                     @else
                     @endif
                     @endif / {{ $products->ProductUnit->name }}</span>
                  </div>
               </div>
               @endif
               @if($products->product_prices)
               @if(trim($products->product_prices->product_MOQ) != '' && trim($products->product_prices->product_MOQ) != '0'&& $products->product_prices->product_MOQ != null)
               <div   class="summary">Min.Order Quantity: <span itemprop="orderQuantity" style="padding-left:26px" class="pro_details_pad" >    {{ $products->product_prices->product_MOQ }} {{ $products->ProductUnit->name }}</span></div>
               @endif
               @endif
               @else       
               <div style="margin-bottom: 4px;margin-top: 18px;color:#696763;" class="summary" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
                  FOB Price :        
                  <div style="margin-bottom:0px;padding-left:0px;" itemprop="priceCurrency" content="USD"><span class="pro_details_pad"><a style="margin-left: 18px;" href="#" data-product_id="{{ $products->id}}" data-supplier_id="{{ $products->supplier_product->supplier_id }}" class="contact_supplier">Get Price</a></span></div>
               </div>
               @endif
               @if($products->logistic_info)
               @if(trim($products->logistic_info->supply_ability) != '' && trim($products->logistic_info->supply_ability) != '0' && $products->logistic_info->supply_ability != null)
               <div  itemscope itemtype="http://schema.org/OrderItem" class="summary">Supply Ability: <span itemprop="orderQuantity" class="pro_details_pad" style="padding-left: 57px;" >{{ $products->logistic_info->supply_ability }}  {{ $products->ProductUnit->name  }} Per month</span></div>
               @endif
               @if(trim($products->logistic_info->port) != '' && trim($products->logistic_info->port) != '0' && $products->logistic_info->port != null)
               <div itemscope itemtype="https://schema.org/DeliveryMethod" class="summary"><span itemprop="name" style="margin-bottom: 0px;margin-top: 0px;">Port:</span><span style="padding-left:120px" class="pro_details_pad">{{ $products->logistic_info->port  }}</span></div>
               @endif
               @endif
               @if(trim($products->payment_method) != '' && trim($products->payment_method) != '0' && $products->payment_method != null)
               <div itemscope itemtype="http://schema.org/PaymentMethod" class="summary"><span style="margin-bottom: 0px;margin-top: 0px;" itemprop="name">Payment Terms:</span><span style="padding-left: 52px;" class="pro_details_pad" >{{ preg_replace('/[.,]/', ', ',$products->payment_method) }}</span></div>
               @endif
               <div itemscope itemtype="http://schema.org/PaymentMethod" class="summary"><span style="margin-bottom: 0px;margin-top: 0px;" itemprop="name"> Lead Time:</span><span style="padding-left: 82px;" class="pro_details_pad" > <strong>
                  @if($products->logistic_info)
                     {{ $products->logistic_info->processing_time ?? ''}} 
                  @endif
               </strong> days</span></div>
               <div itemscope itemtype="http://schema.org/PaymentMethod" class="summary"><span style="margin-bottom: 0px;margin-top: 0px;" itemprop="name"> Small Order:</span><span style="padding-left: 72px;" class="pro_details_pad" >  Ask Supplier </span></div>
               <ul style="padding:4% 0px 0%;display: inline-block;">
                  <li style="float:left;width:42%">
                     <div data-product_id="{{ $products->id  }}" data-supplier_id="{{ $products->supplier_product->supplier_id  }}" class="btn btn-primary btn-join contact_supplier"><i class="fa fa-envelope-o"> </i> Contact Supplier</div>
                  </li>
                  <li style="float:left;width:42%; margin-left: 15px;">
                     <a href="{{URL::to('mysource/online-order/new',mt_rand(100000000, 999999999).'0'.mt_rand(100000000, 999999999),is_secured())}}?r=true&s={{mt_rand(100000000, 999999999).$products->supplier_product->supplier_id.mt_rand(100000000, 999999999)}}&product_id={{$products->id}}"><div class="btn btn-primary btn-join"><i class="fa fa-shopping-cart"></i> Buy Now </div></a>
                  </li>
                  @php
                  $user_active = false
                  @endphp
                  @if($products->bdtdcProductToCategory)
                  @if($products->bdtdcProductToCategory->supp_pro_company)
                  @if($products->bdtdcProductToCategory->supp_pro_company->users)
                  @if($products->bdtdcProductToCategory->supp_pro_company->users->vacation_mode == 1)
                  @php
                  $user_active = true
                  @endphp
                  @endif
                  @endif
                  @endif
                  @endif
                  @php
                  $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                  $buy_title = 'Buy '.$products->product_name->name.' '.($products->bdtdcProductToCategory->bdtdcCategory?$products->bdtdcProductToCategory->bdtdcCategory->name:"").' on buyerseller.asia';
                  @endphp
                  <li style="float:left; padding-top: 9px;padding-left: 0px">
                     Share to: 
                     <a style="display: inline-block; padding-left: 7px;" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{$actual_link}}" ><i class="fa fa-facebook"></i></a>
                     <a href="https://twitter.com/intent/tweet?source={{$actual_link}}&text={{$buy_title}}:{{$actual_link}}" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a>
                     <a href="https://plus.google.com/share?url={{$actual_link}}" target="_blank" title="Share on Google+"><i class="fa fa-google-plus"></i></a>
                     <a href="http://pinterest.com/pin/create/button/?url={{$actual_link}}&media={{ URL::to(($products->product_image_new?$products->product_image_new->image:'uploads/no_image.jpg'),null,is_secured())}}&description={{$buy_title}}" target="_blank" title="Pin it"><i class="fa fa-pinterest"></i></a>
                     <!-- &media={PAGEIMAGEURL}&description={PAGEDESCRIPTION}" -->
                  </li>
               </ul>
               @if($user_active)
               <div style="margin: 0px; margin-left:10px;">
                  <h4 class="heading"><a href="javascript:$zopim.livechat.window.show();" onclick=""  style="padding-left:10px; font-size: 14px;color: green;" class="chat_single"><i class="fa fa-comment fa-3x"></i>Chat with me</a></h4>
               </div>
               @else
               <div style="margin: 0px; margin-left:10px;">
                  <h4 class="heading"><a itemprop="url" style="padding-left:10px; font-size: 14px" data-product_id="{{ $products->id  }}" data-supplier_id="{{ $products->supplier_product->supplier_id }}" class="contact_supplier" href=""><i class="fa fa-envelope fa-3x"></i>Message me</a></h4>
               </div>
               @endif
               <div style="margin-right: 28px;">
                  @if(Sentinel::getUser())
                  @if(Sentinel::inRole('admins'))
                  <a target="_blank" href="{{URL::to('admin/make-me-login-redirect/'.$products->supplier_product->supplier_id.'?redirect=supplier/product_edit/'.$products->id)}}" class="btn btn-warning">Edit</a> <button data-product_id="{{$products->id}}" target="_blank" class="btn btn-danger delete_product">Delete</button>
                  @endif
                  @endif
               </div>
               <div class="m-trade-assurance f-icon new-trade-assurance" style="margin-right: 28px;">
                  <h4 class="heading">
                     <span>
                     <img itemprop="image" style="    height: 25px;
                        width: 26px;" src="{{ asset('bdtdc-product-image/home-page/Buyer-protection-home.png') }}" alt="Buyer protection">
                     <a style="font-size: 14px" href="{{URL::to('BuyerChannel/pages/trade_assurance/5')}}"> Buyer Protection:
                     </a>
                     </span>
                  </h4>
                  <div class="list">
                     <ul style="padding-left: 0; line-height: 30px;">
                        <li style="font-size: 12px">
                           <img itemprop="image"  style="height:30px; border-radius: 50px !important;padding-right: 5px" src="{{ asset('assets/aboutus/img/connecting_people.png',is_secured()) }}" alt=" Buyer Protection" />Product Quality Protection
                        </li>
                        <li style="font-size: 12px"> 
                           <img itemprop="image"  style="height:30px; border-radius: 50px !important;padding-right: 5px" src="{{ asset('assets/aboutus/img/connecting_people.png',is_secured()) }}" alt=" Buyer Protection"/>On-time Shipment Protection
                        </li>
                        <li style="font-size: 12px">    
                           <img itemprop="image"  style="height:30px; border-radius: 50px !important;padding-right: 5px" src="{{ asset('assets/aboutus/img/connecting_people.png',is_secured()) }}" alt=" Buyer Protection" />Payment Protection
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!--/product-information-->
         </div>
         <div style="float: left;" class="col-sm-3 col-md-3 col-lg-3 col-xs-12 very-pro  ">
            <div id="left_sh" itemprop="manufacturer" itemscope itemtype="http://schema.org/Organization">
               <div style="" class="col-xs-12 padding_0">
                  <div class="col-sm-10 padding_0">
                     <p class="heading_sup">
                        @if($products->bdtdcProductToCategory)
                        @if($products->bdtdcProductToCategory->supp_pro_company_name)
                        <span > Supplier's E-store: <br>
                        <a itemprop="url" target="_blank" href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$products->bdtdcProductToCategory->supp_pro_company_name->name).'/'.$products->bdtdcProductToCategory->company_id) }}">
                        {{ $products->bdtdcProductToCategory->supp_pro_company_name->name }}
                        </a> 
                        </span>                                                                                 
                        @else
                        <a itemprop="url" target="_blank" href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-','name not available').'/'.$products->bdtdcProductToCategory->company_id) }}">
                        <span itemprop="owns"> Supplier's E-store:   
                        name not available                                                                                     
                        </span>
                        </a> 
                        @endif
                        @else
                        @endif
                     </p>
                     <p itemprop="foundingLocation" class="summary">
                        @if($products->bdtdcProductToCategory)
                        @if($products->bdtdcProductToCategory->cat_country)
                        {{ $products->bdtdcProductToCategory->cat_country->name}}
                        @else
                        no data
                        @endif
                        @else
                        no data
                        @endif
                        |@if($products->supplier_product)
                        @if($products->supplier_product->suppliers)
                        @if($products->supplier_product->suppliers->business_types)
                        {{$products->supplier_product->suppliers->business_types->name}}
                        @endif
                        @endif
                        @endif
                     </p>
                     <p itemprop="foundingLocation" class="summary" style="border-top: 1px solid #ddd;
                        padding-top: 5px;">
                        @if($products->bdtdcProductToCategory)
                        @if($products->bdtdcProductToCategory->supp_pro_company_name)
                        <span >
                        <a itemprop="url" target="_blank" href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$products->bdtdcProductToCategory->supp_pro_company_name->name).'/'.$products->bdtdcProductToCategory->company_id) }}">
                        Visit E-store
                        </a> 
                        </span>
                        @else
                        <a itemprop="url" target="_blank" href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-','name not available').'/'.$products->bdtdcProductToCategory->company_id) }}">
                        <span itemprop="owns"> Supplier's E-store:   
                        name not available
                        </span>
                        </a> 
                        @endif
                        @else
                        @endif
                        |<a  itemprop="url" target="_blank" href="@if($products->bdtdcProductToCategory)
                           @if($products->bdtdcProductToCategory->supp_pro_company_name)
                           {{ URL::to('contact/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$products->bdtdcProductToCategory->supp_pro_company_name->name),$products->bdtdcProductToCategory->company_id,is_secured()) }}
                           @else
                           {{ URL::to('contact/'.preg_replace('/[^A-Za-z0-9\-]/', '-','name not available'),$products->bdtdcProductToCategory->company_id,is_secured()) }}
                           @endif
                           @endif
                           "> Contact Details</a>
                     </p>
                     <br>
                     <div  class="summary">
                        Membership Type: Free<br>
                     </div>
                     <div  class="summary">
                        Buyer Assurance: NA<br>
                     </div>
                     <div  class="summary">
                        Verified Information: <span> <a target="_blank" href="@if($products->bdtdcProductToCategory)
                           @if($products->bdtdcProductToCategory->supp_pro_company_name)
                           {{ URL::to('industrial-certification/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$products->bdtdcProductToCategory->supp_pro_company_name->name),$products->bdtdcProductToCategory->company_id,is_secured()) }}
                           @else
                           {{ URL::to('industrial-certification/'.preg_replace('/[^A-Za-z0-9\-]/', '-','name not available'),$products->bdtdcProductToCategory->company_id,is_secured()) }}
                           @endif
                           @endif"> View Details</a></span><br>
                     </div>
                     <div  itemscope itemtype="http://schema.org/Rating" class="summary">
                        <span itemprop="ratingValue">Avg Response Time: NA<br>
                        </span>
                     </div>
                  </div>
                  <div class="col-sm-2" >
                  </div>
                  <div class="col-sm-9 padding_0">
                     <h5 class="heading">
                        <a itemprop="url" href="{{ URL::to('BuyerChannel/pages/trade_assurance',5,is_secured()) }}" target="_blank">
                        <img itemprop="image" style="    height: 29px;
                           width: 28px;" src="{{ asset('bdtdc-product-image/home-page/Buyer-protection-home.png') }}" alt="Buyer protection">
                        Buyer Protection
                        </a>
                     </h5>
                  </div>
               </div>
               <div class="col-xs-12 padding_0" >
               </div>
            </div>
         </div>
      </div>
      <!--/product-details-->
   </div>
   <div class="col-md-12 col-sm-12" style="padding-left: 0px" data-spy="scroll" data-target="#navbar-example1">
      <div class="col-md-9 col-sm-9" style="padding-left: 0px">
         <!-- product details start -->
         <div class="col-sm-12 hmm" style="padding:0; position: relative">
            <div id="sticky-anchor"></div>
            <div id="sticky" class="category-tab shop-details-tab" style="padding: 0;margin-bottom: 20px;">
               <!--category-tab-->
               <ul class="nav nav-tabs details_tab product-dtl-navbar" style="margin: 0;width: 100%;">
                  <li style="padding-bottom: 0;border: none;border-bottom: 0 none ;" ><a style="border-radius: 0 !important;"  href="#details" data-toggle="tab">Product Details</a></li>
                  <li style="padding-bottom: 0;border: none;border-bottom: 0 none;"><a style="border-radius: 0  !important;" href="#companyprofile" data-toggle="tab">Company Profile</a></li>
                  <li style="font-size: 13px;float: right;border: none;max-width: 320px;background: none;padding-bottom: 0;border-bottom: 0 none; margin-right: 0;" ><a style="background: none!important; font-size: 12px !important;font-size: 11px !important; max-width: 275px;" href="{{ URL::to('ServiceChannel/pages/submit_a_dispute/39') }}"  ><i class="fa fa-bug" aria-hidden="true" ></i>Report Any Suspicious Activity</a></li>
               </ul>
            </div>
            <div id="sticky-anchor2" class="tab-content">
               <div class="tab-pane fade" id="details">
                  <div class="sticky2 pill1" style="padding: 0;margin-bottom: 20px;padding-left: 15px;">
                     <ul id="navbar-example1" class="nav nav-pills " style="  border-bottom: 1px solid #ddd;margin-bottom: 0px; width: 820px; background: #fff">
                        <li style="padding-bottom: 0 !important;"><a  href="#pdetails">Product Description</a></li>
                        <li style="padding-bottom: 0 !important;"><a href="#pimages">Product Images</a></li>
                        <li style="padding-bottom: 0 !important;"><a href="#pcer">
                           Certifications
                           </a>
                        </li>
                        <li style="padding-bottom: 0 !important;"><a href="#pfaq">FAQ
                           </a>
                        </li>
                        <li style="padding-bottom: 0 !important;"><a href="#pservice">Packages & Delivery</a></li>
                        <li style="padding-bottom: 0 !important;"><a href="#pcontact">Contact
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div id="pdetails" class="col-sm-12" style="padding-left: 25px;">
                     <div class="col-sm-4" style="padding: 10px 0;">
                        <div class="col-sm-12" style="padding:0;">
                           <div class="col-sm-5" style="padding:0;"><span class="summary">Place of Origin: </span></div>
                           <div class="col-sm-7" style="padding:0;">
                              <div class="ellipsis " title="{{$products->supplier_product->sup_companies->country->name }}">
                                 {{$products->supplier_product->sup_companies->country->name }}
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4" style="padding: 10px 0;">
                        <div class="col-sm-12" style="padding:0;">
                           <div class="col-sm-5" style="padding:0;"><span class="summary">Brand Name: </span></div>
                           <div class="col-sm-7" style="padding:0;">
                              <div  class="ellipsis " title="{{$products->brandname }}">{{$products->brandname }}
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4" style="padding: 10px 0;">
                        <div class="col-sm-12" style="padding:0;">
                           <div class="col-sm-5" style="padding:0;"><span class="summary">Model Number: </span></div>
                           <div class="col-sm-7" style="padding:0;">
                              <div  class="ellipsis " title="{{ $products->model }}">
                                 {{ $products->model }}
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-4" style="padding: 10px 0;">
                        <div class="col-sm-12" style="padding:0;">
                           <div class="col-sm-5" style="padding:0;"><span class="summary">MOQ: </span></div>
                           <div class="col-sm-7" style="padding:0;">
                              <div  class="ellipsis " title="">
                                 @if($products->product_prices)
                                 {{ $products->product_prices->product_MOQ }} {{ $products->ProductUnit->name }}
                                 @endif
                              </div>
                           </div>
                        </div>
                     </div>
                     @php 
                     $attr_exits = []; 
                     @endphp
                     @if($products)
                     @if($products->product_attribute && count($products->product_attribute)>0)
                     @foreach($products->product_attribute as $single_attr)
                     @if($single_attr->bdtdcAttribute)
                     @if(trim($single_attr->bdtdcAttribute->name)!= '' && trim($single_attr->bdtdcAttribute->value)!= '')
                     @if(!in_array($single_attr->bdtdcAttribute->name,$attr_exits))
                     <div class="col-sm-4" style="padding: 10px 0;">
                        <div class="col-sm-12" style="padding:0;">
                           <div class="col-sm-5" style="padding:0;"><span class="summary">{{$single_attr->bdtdcAttribute->name}}: </span></div>
                           <div class="col-sm-7" style="padding:0;"><span style="padding: 0px;" class="">{{$single_attr->bdtdcAttribute->value}}</span></div>
                        </div>
                     </div>
                     @php 
                     array_push($attr_exits, $single_attr->bdtdcAttribute->name) 
                     @endphp
                     @endif
                     @endif
                     @endif
                     @endforeach
                     @endif
                     @endif
                  </div>
                  <div class="col-sm-12">
                     <hr>
                     <div style="padding:12px;width:100%; overflow: hidden;" class="box">
                        <div style="overflow: hidden;">
                           <div style="padding: 8px 0; border-bottom: 1px solid #63b8ff;margin-bottom: 0;"><span class="pro-dt-view-info">Details</span>  
                           </div>
                           <?php echo html_entity_decode($products->product_name->description, ENT_QUOTES); ?>
                        </div>
                        <div id="pimages" style="padding-top: 0px; float: none; clear: none; margin-bottom: 20px">
                           <div style="padding: 8px 0; border-bottom: 1px solid #63b8ff;margin-bottom: 0;"><span class="pro-dt-view-info">Product Pictures</span>  
                           </div>
                           <div>
                              @if(count($products->proimages_new) > 0)
                              @foreach($products->proimages_new as $image)
                              <div  style="max-width: 800px; margin: 0 auto;">
                                 <img itemprop="image"  style="width:70%; padding: 10px 0;" src="{{ URL::to(''.$image->image,null,is_secured()) }}" alt=" Buyer Protection"/>
                              </div>
                              @endforeach
                              @endif
                           </div>
                        </div>
                        <div id="pcer">
                           <div style="padding: 8px 0; border-bottom: 1px solid #63b8ff;margin-top: 0px;margin-bottom:0;padding-top: 0;"><span class="pro-dt-view-info">Certifications</span>  
                           </div>
                           <div >
                              @if($products->bdtdcProductToCategory)
                              @if($products->bdtdcProductToCategory->supplier_main_certificates)
                              @if(count($products->bdtdcProductToCategory->supplier_main_certificates) > 0)
                              @foreach($products->bdtdcProductToCategory->supplier_main_certificates as $c_image)
                              <div class="">
                                 <img itemprop="image"  style="width:70%" src="{{ URL::to('uploads',$c_image->image,is_secured()) }}" alt="{{ $products->product_name }}" />
                              </div>
                              @endforeach
                              @endif
                              @endif
                              @if($products->bdtdcProductToCategory->supplier_honor_certificates)
                              @if(count($products->bdtdcProductToCategory->supplier_honor_certificates) > 0)
                              @foreach($products->bdtdcProductToCategory->supplier_honor_certificates as $h_image)
                              <div class="">
                                 <img itemprop="image"  style="width:70%" src="{{ URL::to('uploads',$h_image->image,is_secured()) }}" alt="{{$products->product_name}}"/>
                              </div>
                              @endforeach
                              @endif
                              @endif
                              @if($products->bdtdcProductToCategory->supplier_patents)
                              @if(count($products->bdtdcProductToCategory->supplier_patents) > 0)
                              @foreach($products->bdtdcProductToCategory->supplier_patents as $p_image)
                              <div class="">
                                 <img itemprop="image"  style="width:70%" src="{{ URL::to('uploads',$p_image->image,is_secured()) }}" alt="{{$products->product_name}}"/>
                              </div>
                              @endforeach
                              @endif
                              @endif
                              @if($products->bdtdcProductToCategory->supplier_trademarks)
                              @if(count($products->bdtdcProductToCategory->supplier_trademarks) > 0)
                              @foreach($products->bdtdcProductToCategory->supplier_trademarks as $t_image)
                              <div class="">
                                 <img itemprop="image"  style="width:70%" src="{{ URL::to('uploads',$t_image->image,is_secured()) }}" alt="{{$products->product_name}}" />
                              </div>
                              @endforeach
                              @endif
                              @endif
                              @endif
                           </div>
                        </div>
                        <div id="pfaq">
                           <div style="padding: 8px 0; border-bottom: 1px solid #63b8ff;;margin-top: 15px;margin-bottom: 2%"><span class="pro-dt-view-info">FAQ</span>  
                           </div>
                           <div >
                              @if($products->supplier_product)
                              @if($products->supplier_product->sup_companies)     
                              @if($products->supplier_product->sup_companies->name_string)        
                              {!! $products->supplier_product->sup_companies->name_string->faq !!}
                              @endif      
                              @endif      
                              @endif
                           </div>
                        </div>
                        <div id="pservice">
                           <div style="padding: 8px 0; border-bottom: 1px solid #63b8ff; margin-top: 15px;margin-bottom: 2%"><span class="pro-dt-view-info">Packages & Delivery</span>  
                           </div>
                           <div >
                              <div>{!! $products->delivery !!} </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="companyprofile" >
                  <div class="sticky2 pill2" style="padding: 0;margin-bottom: 20px;padding-left: 15px;">
                     <ul class="nav nav-pills " style=" border-bottom: 1px solid #ddd;margin-bottom: 0px; width: 820px; background: white">
                        <li style="padding-bottom: 0 !important;" ><a  href="#pbasic">Basic Information
                           </a>
                        </li>
                        <li style="padding-bottom: 0 !important;"><a href="#pprod">Production Capacity
                           </a>
                        </li>
                        <li style="padding-bottom: 0 !important;"><a href="#pcapa">
                           Trade Capacity
                           </a>
                        </li>
                        <li style="padding-bottom: 0 !important;"><a href="#pcontact">Contact
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-sm-12" style="">
                     <!-- <div class="ls-icon ls-company">  -->
                     <div id="pbasic" class="box box-first" style="padding: 12px;float: none;margin: 0; margin-bottom: 2%; ">
                        <div style="padding: 8px 0; border-bottom: 1px solid #ddd;margin-bottom: 5%;"><span style="background-color: #ddd; color: #333; font-weight: bold; padding: 9px 10px; line-height: 12px;">Basic Information</span>  
                        </div>
                        @if($products->supplier_product)
                        @if($products->supplier_product->sup_companies)
                        @if($products->supplier_product->sup_companies->name_string)
                        {{$products->supplier_product->sup_companies->name_string->description }}
                        <a itemprop="url" class="dot-app-cp" data-dot="d_type=view_more" rel="nofollow" href="{{ URL::to(preg_replace('/[^A-Za-z0-9\-]/', '-',$products->supplier_product->sup_companies->name_string->name).'/company-overview/'.$products->supplier_product->sup_companies->id) }}">View detail</a>
                        @endif
                        @endif
                        @endif
                        <br>
                        <br>
                        <div class="view-swv" itemprop="manufacturer" itemscope itemtype="http://schema.org/Organization">
                           @if($products->supplier_product)
                           @if($products->supplier_product->sup_companies)
                           @if($products->supplier_product->sup_companies->name_string)
                           <a itemprop="url" target="_blank" href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$products->supplier_product->sup_companies->name_string->name).'/'.$products->supplier_product->sup_companies->id) }}">
                           Verified Supplier-{{$products->supplier_product->sup_companies->name_string->name }}
                           </a> 
                           @endif
                           @endif
                           @endif
                        </div>
                        <!-- <h3 class="title" style="padding-left: 25px;"> Basic Information </h3> -->
                        <table itemprop="manufacturer" itemscope itemtype="http://schema.org/Organization" class="table" style="margin-bottom: 0;">
                           <tbody>
                              <tr>
                                 <td class="trust">    </td>
                                 <td class="summary">Business Type:</td>
                                 <td itemprop="areaServed">@if($products->supplier_product)
                                    @if($products->supplier_product->suppliers)
                                    @if($products->supplier_product->suppliers->business_types)
                                    {{$products->supplier_product->suppliers->business_types->name}}
                                    @endif
                                    @endif
                                    @endif
                                    &nbsp;
                                 </td>
                              </tr>
                              <tr>
                                 <td class="trust">    </td>
                                 <td class="summary">Main Products:</td>
                                 <td itemprop="hasOfferCatalog">
                                    @if($products->supplier_product)
                                    @if($products->supplier_product->sup_main_products)
                                    {{ $products->supplier_product->sup_main_products->product_name_1 }},
                                    {{ $products->supplier_product->sup_main_products->product_name_2 }},
                                    {{ $products->supplier_product->sup_main_products->product_name_3 }}
                                    @endif
                                    @endif
                                    &nbsp;
                                 </td>
                              </tr>
                              <tr>
                                 <td class="trust"></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div id="pcapa" style="margin:0px;padding-top: 12px" class="col-sm-12 box">
                        <div style="padding: 8px 0; border-bottom: 1px solid #ddd;margin-bottom: 5%;"><span style="background-color: #ddd; color: #333; font-weight: bold; padding: 9px 10px; line-height: 12px;">Trade market</span>  
                        </div>
                        <div style="margin-left:-15px;">
                           <table itemprop="manufacturer" itemscope itemtype="http://schema.org/Organization" class="table" style="margin-bottom: 0;">
                              <tbody>
                                 <tr>
                                    <td class="trust"></td>
                                    <td class="summary">Main Markets:</td>
                                    @if($products->bdtdcProductToCategory)
                                    @if($products->bdtdcProductToCategory->bdtdc_main_market)
                                    <td itemprop="areaServed">@foreach($products->bdtdcProductToCategory->bdtdc_main_market as $data)
                                       {{ $data->company_main_market?$data->company_main_market->name:'' }}<br>  
                                       @endforeach
                                    </td>
                                    @endif
                                    @endif
                                 </tr>
                                 <tr>
                                    <td class="trust">    </td>
                                    <td class="summary">Total Annual Sales Volume:</td>
                                    <td itemprop="hasPOS">
                                       @if($products->bdtdcProductToCategory)
                                       {{$products->bdtdcProductToCategory?($products->bdtdcProductToCategory->tradeinfo?($products->bdtdcProductToCategory->tradeinfo->BdtdcFormValue?$products->bdtdcProductToCategory->tradeinfo->BdtdcFormValue->value:''):''):''}} &nbsp;
                                       @endif
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="trust"></td>
                                    <td class="summary">Export Percentage:</td>
                                    <td itemprop="hasPOS">{{$products->bdtdcProductToCategory?($products->bdtdcProductToCategory->tradeinfo?($products->bdtdcProductToCategory->tradeinfo->form_export_percentage?$products->bdtdcProductToCategory->tradeinfo->form_export_percentage->value:''):''):''}} &nbsp;</td>
                                 </tr>
                                 <tr>
                                    <td class="trust"></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="table-responsive" style="padding-left: 15px;">
                           <table style="border-left:1px solid #E8E8E8;border-top:1px solid #E8E8E8;padding:1%;border-bottom:1px solid #E8E8E8" class="table capability_table">
                              <thead>
                                 <tr style="background:#F5F5F5">
                                    <td>Main Market</td>
                                    <td>Total Revenue ( % )</td>
                                 </tr>
                              </thead>
                              <tbody>
                                 @if($products->bdtdcProductToCategory)
                                 @if($products->bdtdcProductToCategory->bdtdc_main_market)
                                 @foreach($products->bdtdcProductToCategory->bdtdc_main_market as $data)
                                 <tr>
                                    <td style="color:#666">{{ $data->company_main_market?$data->company_main_market->name:'' }}</td>
                                    <td>{{ $data->distribution_value }}%</td>
                                 </tr>
                                 @endforeach
                                 @endif
                                 @endif
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div id="pprod" style="" class="col-sm-12">
                     <div class="box" style="float: none; margin: 0; margin-top: 2%; padding: 12px;">
                        <div style="padding: 8px 0; border-bottom: 1px solid #ddd;"><span style="background-color: #ddd; color: #333; font-weight: bold; padding: 9px 10px; line-height: 12px;">Trade Information</span>  
                        </div>
                        <table itemprop="manufacturer" itemscope itemtype="http://schema.org/Organization" class="table" style="margin-bottom: 0;">
                           <tbody>
                              <tr>
                                 <td class="trust">    </td>
                                 <td class="summary">Factory Size (Sq.meters):</td>
                                 <td itemprop="potentialAction">{{$products->bdtdcProductToCategory?($products->bdtdcProductToCategory->factoryinfo?($products->bdtdcProductToCategory->factoryinfo->form_factory_size?$products->bdtdcProductToCategory->factoryinfo->form_factory_size->value:''):''):''}} &nbsp;</td>
                              </tr>
                              <tr>
                                 <td class="trust">    </td>
                                 <td class="summary">Factory Location:</td>
                                 <td itemprop="address">{{$products->bdtdcProductToCategory?($products->bdtdcProductToCategory->factoryinfo?$products->bdtdcProductToCategory->factoryinfo->factory_location:''):''}}</td>
                              </tr>
                              <tr>
                                 <td class="trust">    </td>
                                 <td class="summary">No. of Production Lines:</td>
                                 <td itemprop="potentialAction">{{$products->bdtdcProductToCategory?($products->bdtdcProductToCategory->factoryinfo?$products->bdtdcProductToCategory->factoryinfo->no_of_production_line:''):''}} &nbsp;</td>
                              </tr>
                              <tr>
                                 <td class="trust">    </td>
                                 <td class="summary">Number of R&amp;D Staff:</td>
                                 <td itemprop="employee">{{$products->bdtdcProductToCategory?($products->bdtdcProductToCategory->factoryinfo?($products->bdtdcProductToCategory->factoryinfo->form_rd_staf?$products->bdtdcProductToCategory->factoryinfo->form_rd_staf->value:''):''):''}} &nbsp;</td>
                              </tr>
                              <tr>
                                 <td class="trust">    </td>
                                 <td class="summary">Number of QC Staff:</td>
                                 <td itemprop="employee">{{$products->bdtdcProductToCategory?($products->bdtdcProductToCategory->factoryinfo?($products->bdtdcProductToCategory->factoryinfo->form_qc_staff?$products->bdtdcProductToCategory->factoryinfo->form_qc_staff->value:''):''):''}} &nbsp;</td>
                              </tr>
                              <tr>
                                 <td class="trust">    </td>
                                 <td class="summary">Contract Manufacturing:</td>
                                 <td itemprop="url">
                                    @if($products->bdtdcProductToCategory)
                                    @if($products->bdtdcProductToCategory->factoryinfo)
                                    @php 
                                    $contact_manufacturing_array = explode(',', $products->bdtdcProductToCategory->factoryinfo->contact_manufacturing)
                                    @endphp
                                    @foreach($contact_manufacturing_array as $single_contact)
                                    @if(trim($single_contact) == 1)
                                    OEM Service Offere &nbsp;
                                    @endif
                                    @if(trim($single_contact) == 2)
                                    Design Service Offer &nbsp;
                                    @endif
                                    @if(trim($single_contact) == 3)
                                    Buyer Service Offer &nbsp;
                                    @endif
                                    @endforeach
                                    @endif
                                    @endif
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="box" style="padding:15px;margin-right: 0; margin-top: 2%">
                        <h3 class="title" >Supplier Assessment Report</h3>
                        <table class="table report">
                           <tbody>
                              <tr>
                                 <td itemprop="additionalProperty"  class="caption">Supplier Assessment Reports are detailed on-line reports about the
                                    supplier's capabilities. It helps you get all the information you need to trade confidently
                                    with suppliers.
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <!-- <div id="animatedModal" style="border-top: 2px solid #DDD;">
                  <div class="close-animatedModal text-center">
                  
                      <a itemprop="url" class="btn btn-primary btn-md close_portfolio_model" href=""><i class="fa fa-times fa-3x"></i>
                      </a>
                  
                  </div>
                  
                  <div class="container">
                  
                      <div class="row">
                  
                          <div style="padding:2%" class="modal-content col-xs-10 col-xs-offset-1">    
                  
                              -DATA WILL BE LOADED VIA AJAX- 
                  
                          </div>
                  
                      </div>
                  </div>
                  
                  </div> -->
            </div>
         </div>
         <div id="pcontact" class="col-sm-12" style="margin-bottom:30px; padding: 0px">
            <form action="{!! URL::to('product_details') !!}" method="post" class="products_details_form" enctype="multipart/form-data">
               {!! csrf_field() !!}
               <div class="row" style="margin-bottom:28px; padding: 0px 30px">
                  <div class="col-sm-12 col-md-12" style="border:1px solid #255E98;">
                     <input type="hidden" name="product_owner_id" value="@if($products->supplier_product)
                        @if($products->supplier_product->users)
                        {{$products->supplier_product->users->id}}
                        @endif
                        @endif
                        ">
                     <input type="hidden" value="{{$products->id}}" name="product_id" >
                     @if (count($errors) > 0)
                     <div class="alert alert-danger" style="margin-top:10px;">
                        <ul>
                           @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                     </div>
                     @endif
                     <div class="col-sm-12 padding_0">
                        <p style="font-size: 16px;line-height: 16px;font-weight: 700;color: #333;height: 16px;padding-top:20px;">
                           Send your message to this supplier
                        </p>
                     </div>
                     <div class="col-sm-12 col-md-12 col-xs-12 padding_0">
                        <div class="col-sm-2 col-md-2 col-xs-2">
                           <p style="color: #000;font-size:14px;font-weight:700;padding-top:33px;padding-left:32px;padding-top:35px;">
                              <span style="color:#F00;padding-left: 22%;">*</span>To:
                           </p>
                        </div>
                        <div class="col-sm-10 col-md-10 col-xs-10 sup-name" style="margin-left: 0;">
                           @if($products->supplier_product)
                           @if($products->supplier_product->users)
                           {{$products->supplier_product->users->first_name}} {{$products->supplier_product->users->last_name}}
                           @endif
                           @endif
                           <!-- <input type="text" class="form-control productview to_email" aria-label="..." name="first_name" placeholder="Email" , 'required'> -->
                           <p class="validation_status"></p>
                        </div>
                     </div>
                     <div class="col-sm-12  padding_0">
                        <div class="col-sm-2">
                           <p style="color: #000;font-size:14px;font-weight:700;padding-top:25px;">
                              <span style="color:#F00;">*</span>Message:
                           </p>
                        </div>
                        <div class="col-sm-10 col-md-7" style="padding-top:20px;">
                           <textarea class="productview user_message msg-box" rows="4" style="background-color: rgb(255, 255, 255) !important; font-size: 14px; padding: 10px; width:100%;" name="message" placeholder="Enter your inquiry details such as product name, color, size, MOQ, FOB, etc.">{!! old('message') !!}</textarea>
                           <p style="font-size:10px;">Your message must be between 20-8000 characters. Remaining (<span class="remaining">8000</span>)</p>
                           <p class="validation_status"></p>
                        </div>
                     </div>
                     <div class="col-sm-12  padding_0">
                        <div class="col-sm-2" style="    padding: 0px;">
                           <p style="font-size:14px;font-weight:700;color: #000;font-size:12px;padding-left: 18px;padding-top:29px">
                              <span style="color:#F00;">* </span>Quantity:
                           </p>
                        </div>
                        <div class="col-sm-3" style="font-size: 10px;">
                           <input type="number" class="form-control productview qty_int" aria-label="..." name="quantity" placeholder="Enter a number" value="{!! old('quantity') !!}">
                           <p class="validation_status"></p>
                        </div>
                        <div class="col-sm-4" style="margin-left:-14px;font-size: 10px;">
                           <select name="unit_id" style="margin-top: 21px;font-size: 14px; color: #b3b3b3; text-transform: capitalize;background-color:#fff!important;border: 1px solid #DDD;" class="form-control productview" data-value="{!! old('unit_id') !!}">
                              @foreach($units as $unit)
                              <option value="{{$unit->id }}" >{{$unit->name}}</option>
                              @endforeach   
                           </select>
                           <p class="validation_status"></p>
                        </div>
                     </div>
                     <div class="col-sm-12  padding_0" style="margin-top:20px;margin-bottom:3%;">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                           <p><input type="checkbox" name="check" value="check" style="">
                              Recommend matching suppliers if this supplier doesn’t contact me within 24 hours.
                           </p>
                           <p><input type="checkbox" name="check" value="check" style="">
                              I agree to share my Business Card to the supplier.
                           </p>
                           <br>
                           <button type="submit" class="btn btn-primary join" style="margin-top: 25px;padding-top: 5px;padding-bottom: 5px;font-size: 22px;border-radius: 5px !important;">Send</button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <!-- product details end -->
      </div>
      <div class="col-md-3 col-sm-3">
         <!-- More Products from this Supplier start -->
         <div style="border:1px solid #ddd;border-radius: 5px !important;">
            <h4 class="heading text-center" style="margin:0;padding:10px;background-color:;color:#000;border-radius: 5px 5px 0 0; font-size: 14px; height: 40px; line-height: 20px; background: #eeeeee;">More products from this Supplier</h4>
            @if($products->bdtdcProductToCategory)
            @if($products->bdtdcProductToCategory->suppliers_other_products)
            @if(count($products->bdtdcProductToCategory->suppliers_other_products)>0)
            @foreach($products->bdtdcProductToCategory->suppliers_other_products as $single_sp)
            <div style="border-top:1px solid #ddd;">
               <a itemprop="url" style="text-align: justify;text-justify: inter-word;" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$single_sp->category_product_name->name).'='.mt_rand(100000000, 999999999).$single_sp->product_id,null,is_secured()) }}">
                  @if($single_sp->pro_images_new)
                  <div class="text-center" style="padding: 10px;">
                     <img style="width:100%;" class="img-responsive" itemprop="image" src="{{ URL::to(''.$single_sp->pro_images_new->image,null,is_secured()) }}" alt=""/>
                  </div>
                  @else
                  <div class="text-center" style="padding: 10px;">
                     <img style="width:100%;" class="img-responsive" itemprop="image" src="{{ URL::to('uploads/no_image.jpg',null,is_secured()) }}" alt=""/>
                  </div>
                  @endif
                  <p class="text-center" title="{{$single_sp->category_product_name?$single_sp->category_product_name->name:''}}" style="font-size:14px;color:#333333;padding:10px;">{{ substr($single_sp->category_product_name?$single_sp->category_product_name->name:'', 0, 50) }}</p>
                  @if($single_sp->cat_pro_price)
                  @if(trim($single_sp->cat_pro_price->product_FOB) != '' && trim($single_sp->cat_pro_price->product_FOB) != '0' && $single_sp->cat_pro_price->product_FOB != null && trim($single_sp->cat_pro_price->product_FOB) != '-' && trim($single_sp->cat_pro_price->product_FOB) != 'NA' && trim($single_sp->cat_pro_price->product_FOB) != 'N/A')
                  <p class="text-center" style="font-size:14px;padding:10px;padding-top:0;">FOB {{trim($single_sp->cat_pro_price->currency)!=''?$single_sp->cat_pro_price->currency:'USD'}} {{$single_sp->cat_pro_price->product_FOB}} / {{$single_sp->bdtdcProduct?($single_sp->bdtdcProduct->ProductUnit?$single_sp->bdtdcProduct->ProductUnit->name:'pieces'):'pieces'}}</p>
                  @endif
                  @endif
               </a>
            </div>
            @endforeach
            @endif
            @endif
            @endif
         </div>
         <!-- More Products from this Supplier end -->
      </div>
   </div>
</div>
<div class="row item_sha" >
   <div class="col-md-12 col-sm-12">
      <!-- other suppliers related products start -->
      @if($products->bdtdcProductToCategory)
      @if($products->bdtdcProductToCategory->other_wholesalers_products)
      @if(count($products->bdtdcProductToCategory->other_wholesalers_products) > 0)
      <h4 class="heading" style="margin:0;padding:10px;background-color:;color:#000;">You may also like</h4>
      <div style="padding-top: 30px;" class="recommended_items product_slide_area">
         <!--recommended_items-->
         <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               @php 
               $item_active = 1
               @endphp
               @foreach ($products->bdtdcProductToCategory->other_wholesalers_products->chunk(4) as $chunk)
               <div class="item {{$item_active==1?'active':''}}">
                  @foreach ($chunk as $single_sp)
                  <?php //print_r($single_sp->BdtdcParentCategoryDescription->name); ?>
                  <div class="col-sm-3">
                     <div class="product-image-wrapper"  itemscope itemtype="http://schema.org/Product">
                        <div class="single-products">
                           <a itemprop="url" style="text-align: justify;text-justify: inter-word;" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$single_sp->category_product_name->name).'='.mt_rand(100000000, 999999999).$single_sp->product_id,null,is_secured()) }}">
                              <div class="productinfo text-center">
                                 @if($single_sp->pro_images_new)
                                 <img itemprop="image" title="{{$single_sp->category_product_name?$single_sp->category_product_name->name:''}}" style="width:100%;height:240px;margin-left:0;border: none;box-shadow:none" src="{!! asset(''.$single_sp->pro_images_new->image) !!}" alt="{{ substr($single_sp->category_product_name?$single_sp->category_product_name->name:'', 0, 50) }}" class="img-thumbnail"/>
                                 @else
                                 <img itemprop="image" title="{{$single_sp->category_product_name->name}}" style="width:100%;height:240px;margin-left:0;border: none;box-shadow:none" src="{{ asset('uploads/no_image.jpg') }}" alt="{{ substr($single_sp->category_product_name?$single_sp->category_product_name->name:'', 0, 50) }}" class="img-thumbnail"/>
                                 @endif
                                 <span class="pro_name hot_title" style="text-align: center; height: auto;line-height: 25px; overflow: hidden; font-size: 13px;" itemprop="name">{{ $single_sp->category_product_name?$single_sp->category_product_name->name:'', 0, 30 }}</span>
                                 @if($single_sp->cat_pro_price)
                                 @if(trim($single_sp->cat_pro_price->product_FOB) != '' && trim($single_sp->cat_pro_price->product_FOB) != '0' && $single_sp->cat_pro_price->product_FOB != null && trim($single_sp->cat_pro_price->product_FOB) != '-' && trim($single_sp->cat_pro_price->product_FOB) != 'NA' && trim($single_sp->cat_pro_price->product_FOB) != 'N/A')
                                 <p style="font-size:13px;color:#2192D9">FOB {{trim($single_sp->cat_pro_price->currency)!=''?$single_sp->cat_pro_price->currency:'USD'}} {{$single_sp->cat_pro_price->product_FOB}} / {{$single_sp->bdtdcProduct?($single_sp->bdtdcProduct->ProductUnit?$single_sp->bdtdcProduct->ProductUnit->name:'pieces'):'pieces'}}</p>
                                 @endif
                                 @endif
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
               @php 
               $item_active++
               @endphp
               @endforeach
            </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev" style="left: -9px">
            <i style="background: transparent !important;" class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next" style="right: -9px">
            <i style="background: transparent !important;" class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      @endif
      @endif
      @endif
      <!-- other suppliers related products end -->
   </div>
</div>
<br><br>
<!-- sidebar -->
<div class="area"></div>
<nav class="main-menu">
   <ul>
      <li>
         <a data-product_id="{{ $products->id  }}" data-supplier_id="{{ $products->supplier_product->supplier_id  }}" class="contact_supplier">
         <i class="fa fa-envelope-o fa-2x"></i>
         <span class="nav-text">
         Contact Supplier
         </span>
         </a>
      </li>
      <li class="has-subnav">
         <a  href="javascript:$zopim.livechat.window.show();" >
         <i class="fa fa-comments fa-2x"></i>
         <span class="nav-text">
         Chat Now
         </span>
         </a>
      </li>
      <li class="has-subnav">
         <a href="{{ URL::to('default','message',is_secured()) }}">
         <i class="fa fa-envelope-open fa-2x"></i>
         <span class="nav-text">
         Message Center
         </span>
         </a>
      </li>
      <li class="has-subnav">
         <a href="{{ URL::to('get-quotations',null,is_secured())}}">
         <i class="fa fa-calendar-times-o fa-2x"></i>
         <span class="nav-text">
         Save Time
         </span>
         </a>
      </li>
      <li>
         <a href="{{ URL::to('contact',null,is_secured())}}">
         <i class="fa fa-address-card fa-2x"></i>
         <span class="nav-text">
         Contact us
         </span>
         </a>
      </li>
   </ul>
</nav>
<!-- end -->
@endsection

@section('scripts')

<script src="{{URL::asset('assets/fontend/js/animatedModal.min.js',is_secured())}}"></script>
<script type="text/javascript" src="{!! asset('assets/custom.js',is_secured()) !!}"></script>
<script type="text/javascript" src="{!! asset('assets/helpcenter/jquery.etalage.min.js',is_secured()) !!}"></script>
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5bfb9e56a608de0011d2137c&product=social-ab' async='async'></script>
<script type="text/javascript">
   $('#sticky').wrap('<div class="st-wrap"></div>');
   $('.sticky2').wrap('<div class="st-wrap2"></div>');
   var st1 = $('#sticky').outerHeight();
   // var st2 = $('.sticky2').outerHeight();
   $('.st-wrap').outerHeight(st1);
   $('.st-wrap2').outerHeight(46);
   var a = $('.st-wrap').outerWidth()
   console.log(a);
   $('#sticky').width(a - 30);

   function sticky_relocate() {
      var window_top = $(window).scrollTop();
      var div_top = $('#sticky-anchor').offset().top;
      var div_top2 = $('#sticky-anchor2').offset().top;
      if (window_top > div_top) {
         $('#sticky').addClass('stick');
         $('.sticky2').addClass('stick');
      } else {
         $('#sticky').removeClass('stick');
         $('.sticky2').removeClass('stick');
      }
      // if (window_top > div_top2) {
      //     $('.sticky2').addClass('stick');
      // } else {
      //     $('.sticky2').removeClass('stick');
      // }
   }

   $(function() {
      $(window).scroll(sticky_relocate);
      sticky_relocate();
   });

   $(".sticky2 li a").click(function(e) {
      e.preventDefault();
      // console.log($(this).attr('href'));
      $('html, body').animate({
         scrollTop: ($($(this).attr('href')).offset().top - 95)
      }, 500);
   });

   $('textarea').keyup(function(e) {
      var tval = $('textarea').val(),
         tlength = tval.length,
         set = 8000,
         remain = parseInt(set - tlength);
      $('.remaining').text(remain);
      if (remain <= 0 && e.which !== 0 && e.charCode !== 0) {
         $('textarea').val((tval).substring(0, tlength - 1))
      }
   })

   //-----------------------------------------------------//

   /*$(document).ready(function(){

       var CurUrl = window.location.href ;
       var curTitle = document.title;

       $('.s-facebook').click(function(){
           $(this).attr('href', 'https://www.facebook.com/sharer/sharer.php?u=' + CurUrl + '&t=' + curTitle);
       });
   });*/




   //-----------------------------------------------------//


   $(function() {

      /**

      * the element

      */

      var $ui = $('#ui_element');



      /**

      * on focus and on click display the dropdown, 

      * and change the arrow image

      */

      $ui.find('.sb_input').bind('focus click', function() {

         $ui.find('.sb_down')

            .addClass('sb_up')

            .removeClass('sb_down')

            .andSelf()

            .find('.sb_dropdown')

            .show();

      });



      /**

      * on mouse leave hide the dropdown, 

      * and change the arrow image

      */

      $ui.bind('mouseleave', function() {

         $ui.find('.sb_up')

            .addClass('sb_down')

            .removeClass('sb_up')

            .andSelf()

            .find('.sb_dropdown')

            .hide();

      });



      /**

      * selecting all checkboxes

      */

      $ui.find('.sb_dropdown').find('label[for="all"]').prev().bind('click', function() {

         $(this).parent().siblings().find(':checkbox').attr('checked', this.checked).attr('disabled', this.checked);

      });

   });


   function empty_field_checker(obj) {
      if (obj.val() == "") {
         obj.css('border', '1px solid red')
         obj.parent().find('.validation_status').text('This field can not be empty')
         return false;
      } else {
         obj.css('border', '1px solid #e5e5e5')
         obj.parent().find('.validation_status').text('')
      }
   }



   $(function() {

      $('.contact_supplier').animatedModal({

         color: "rgba(102, 102, 100, .9)",

         animatedIn: "lightSpeedIn",

      });

      var $ui = $('#ui_element');

      $ui.find('.sb_input').bind('focus click', function() {

         $ui.find('.sb_down')

            .addClass('sb_up')

            .removeClass('sb_down')

            .andSelf()

            .find('.sb_dropdown')

            .show();

      });

      $ui.bind('mouseleave', function() {

         $ui.find('.sb_up')

            .addClass('sb_down')

            .removeClass('sb_up')

            .andSelf()

            .find('.sb_dropdown')

            .hide();

      });

      /**

       * selecting all checkboxes

       */

      $ui.find('.sb_dropdown').find('label[for="all"]').prev().bind('click', function() {

         $(this).parent().siblings().find(':checkbox').attr('checked', this.checked).attr('disabled', this.checked);

      });



      $(document).on({

         click: function(e) {

            e.preventDefault();

            $('.modal-content').html('<span class="btn btn-block btn-lg"><i class="fa fa-spinner fa-pulse loading_icon text-primary"></i></span>');

            var base_url = window.location.origin; //$('[name="base_url"]').val();

            var supplier_id = $(this).data('supplier_id');

            var product_id = $(this).data('product_id');

            var url = base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
            window.location.href = url;

            //$('.modal-content').html(" ");

            /*$.get(url, function(r) {

                $('.modal-content').html(r)

            })*/

         }

      }, '.contact_supplier');



      $(document).on({

         click: function(e) {

            e.preventDefault();

            var url = $('[name="base_url"]').val() + '/buyer/contact_supplier';

            swal({

                  title: "Are you sure?",

                  text: "You are going to confirm adding your product !",

                  type: "warning",

                  showCancelButton: true,

                  confirmButtonColor: "#DD6B55",

                  timer: 6000,

                  confirmButtonText: "Yes!",

                  cancelButtonText: "No, Stay hare!",

                  closeOnConfirm: false,

                  closeOnCancel: false,

                  showLoaderOnConfirm: true

               },

               function(isConfirm) {

                  if (isConfirm) {



                     $.post(url, $('.query_form').serialize(), function(r) {

                        (parseInt(r) == 1) ? swal("Thank You!!", "Query has been sent successfully!!!", "success"): false;

                        (parseInt(r) == 0) ? swal({
                           title: "<h2 class='text-danger'>Please Login<h2>",
                           text: "<p class='text-primary'>Login first to send the query</p>",
                           html: true,
                           type: 'error'
                        }): false;

                        (parseInt(r) != 1 && parseInt(r) != 0) ? swal("Fail!!", "Query Could Not Sent", "error"): false;

                     })

                  } else {

                     swal("Cancelled", "Sending request is canceled :)", "error");

                  }

               });

         }

      }, '.query_form_submit_btn');
      /***javascript validation ***/

      $('.join').on('click', function(e) {
         e.preventDefault();
         /* var to_value = $('.productview').val();*/
         var user_message = $('.user_message').val();
         var qty_int = $('.qty_int').val();
         var qty_str = $('.qty_str').val();

         /*empty_field_checker($('.productview'));*/
         empty_field_checker($('.user_message'));
         empty_field_checker($('.qty_int'));
         empty_field_checker($('.qty_str'));
         var validated_input = $('.productview');
         var validated = false;
         for (i = 0, len = validated_input.length; i < len; i++) {
            if ($('.productview:eq(' + i + ')').val() == "") {
               validated = false;
               break
            } else {
               validated = true;
            }
         }
         if (validated == true) {

            $('.products_details_form').submit();
         }

      })

   });

   jQuery(document).ready(function($) {

      var meta_keyword_manual = $('.meta_keyword_manual').val();
      $('[name="keywords"]').attr('content', meta_keyword_manual);



      $('#etalage').etalage({

         thumb_image_width: 350,

         thumb_image_height: 350,



         show_hint: true,

         click_callback: function(image_anchor, instance_id) {

            // alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');

         }

      });

      // This is for the dropdown list example:

      $('.dropdownlist').change(function() {

         etalage_show($(this).find('option:selected').attr('class'));

      });

   });

   $(document).ready(function() {
      $('img').bind('contextmenu', function(e) {
         return false;
      });
   });
</script>
@stop