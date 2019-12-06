@extends('frontend.layouts.master-register')
@section('page_css')
<link property='stylesheet' href="{!! asset('css/main-category.css',is_secured()) !!}" rel="stylesheet">
@endsection
@section('content')
<br>
<div class="container">
<div class="row">
   <div class="col-md-12 padding_0" style="">
      <ul style="float:left;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
         <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"  href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> Home &nbsp;</a></li>
         @if($country_name==null)
         <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"  href="" style="color: #000"> <i class="fa fa-angle-right"></i> <strong>{{ ucfirst($country_name.' '.preg_replace('/[^A-Za-z0-9\., -]/',' ',$header->name)) }}</strong> <i class="fa fa-angle-right"></i>
            </a>
         </li>
         @else
         <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"  href="{{ URL::to('selected-suppliers/'.$country_name.'-products',$country_id,is_secured())}}" style="color: #000"> <i class="fa fa-angle-right"></i> <strong>{{ ucfirst($country_name.' '.preg_replace('/[^A-Za-z0-9\., -]/',' ','products')) }}</strong> <i class="fa fa-angle-right"></i>
            </a>
         </li>
         <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"  href="#" style="color: #000"> <strong>{{ ucfirst($country_name.' '.preg_replace('/[^A-Za-z0-9\., -]/',' ',$header->name)) }}</strong> <i class="fa fa-angle-right"></i>
            </a>
         </li>
         @endif
      </ul>
      <div style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
         <button class="goBack" onclick="goBack()"><span>Go Back</span></button>
      </div>
   </div>
</div>
<div class="row" style="padding-top:2%; padding-bottom:2%; background: #fff;">
   <div  class="col-sm-3 col-md-3">
      <div class="mobo-categories hr-gap no-padding">
         @if($header)
         <h3><a itemprop="url"   href="#"><i class="fa fa-list-ul"></i><span itemprop="name" style="font-size:15px;color: #255E98;">  {{ ucfirst($country_name .' '.preg_replace('/[^A-Za-z0-9\., -]/',' ',$header->name)) }}</span></a></h3>
         <ul  itemscope itemtype="http://data-vocabulary.org/Product"  class="pull-left bazar-list" style="">
            @foreach($header->sub_cat as $data)
            <li>
               @if($country_name==null)
               <a itemprop="url"   rel="category"  style="padding: 5px 0px 5px;" href="{{URL::to(strtolower(preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','-',$data['slug']))).'/0'.$country_id,$data['id'],null,is_secured()) }}"><span itemprop="name" style="font-size:13px; color:#666;padding:0px;text-align: left;">  
               @else            
               <a itemprop="url"   rel="category"  style="padding: 5px 0px 5px;" href="{{URL::to(strtolower($country_name.'-'.preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','-',$data['slug']))).'/'.$country_id,$data['id'],null,is_secured()) }}"><span itemprop="name" style="font-size:13px; color:#666;padding:0px;text-align: left;">
               @endif
               {{ ucfirst($data[ 'name']) }}
               </span> </a>
               <!--  <span style="padding: 5px 15px 5px 0;" class="pull-right"><i class="fa fa-angle-right"></i></span> -->
            </li>
            @endforeach
            <li class="more" style="padding-left: 1.3%;;padding-right: 8%;padding-top: 0%;font-weight: 600;">
               <a itemprop="url"   rel="category"  class="more" href="{{URL::to('Marketplace',null,is_secured()) }}">
               All Categories
               </a>
               <!--  <span class="pull-right"><i class="fa fa-angle-right"></i></span> -->
            </li>
         </ul>
         @endif        
      </div>
   </div>
   <div class="col-sm-3 col-md-3 hidden-sm hidden-xs" style="padding:0;">
      <div class="ss-con" style="padding:0;position: relative; overflow: hidden;">
         <img title="{{ $title }}" itemprop="image" style="min-height:565px;width:100%;padding-left:0;padding: 0;" src="{{ URL::to('uploads',$header->cat_name->single_image,is_secured()) }}" alt="{{ $title }}" />
         <div class="btdc-main-name"> {{ preg_replace('/[^A-Za-z0-9\., -]/',' ',$header->name)}}</div>
      </div>
   </div>
   <div class="col-md-6 col-sm-9 col-xs-9" style="padding:0; border-bottom: 1px solid #ddd; border-top: 1px solid #dae2ed;padding: 0;">
      <div class="row" style="padding:0;margin: 0; margin-bottom: -1px;margin-right: -1px;">
         <div  class="col-sm-12 col-md-12 visit-product" style="height: auto; background-color:#fff; border-top: none;padding: 0; width: 100%;">
            @php 
            $stop_loop = 0
            @endphp
            @if($most_views)
            @foreach($most_views as $data) 
            @if($stop_loop <= 5)
            <!-- <div class="m-category-cluster"> -->
            <div class="main-c-x{{ $data->slug}} padding_0">
               <div class="mcx-w">
                  <div class="mctitle">
                     <a itemprop="url" target="_blank" href="{{URL::to(strtolower(preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','-',$data->cat_name->slug))).'/0',$data->category_id,is_secured()) }}">{{ $data->cat_name->name }}</a>
                  </div>
                  <div class="mclink{{ $data->slug}}">
                     @php
                     $tags =explode(',',$data->cat_name->category_name->tag);
                     @endphp
                     <ul style="padding-left: 5px">
                        @foreach($tags as $tag)
                        <li style="padding-left: 9px;"><a href="{{ URL::to(strtolower(preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','-',$tag))).'/search?t=products',null,is_secured())}}">{{ $tag }}</a></li>
                        @endforeach
                     </ul>
                     <a itemprop="url"  href="{{URL::to(strtolower(preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','-',$data->cat_name->slug))).'/0',$data->category_id,is_secured()) }}" class="ui2-button ui2-button-default ui2-button-normal ui2-button-small limit-more" style="border-radius: 3px !important;">View more</a>
                  </div>
                  <div class="mc-img">
                     <a itemprop="url" target="_blank" class="util-valign-ctn" data-xpjax="page=search" href="" data-domdot="id:26152,ext:'n=1|type=pic'">
                     <img itemprop="image" title="{{ $data->cat_name->name}}"  class="util-valign-inner" src="{{asset('assets/most-view-categories-images/'.$data->image )}}" alt="{{ $data->cat_name->name }}"> 
                     </a>
                  </div>
               </div>
            </div>
            @else
            @php
            break;
            @endphp
            @endif
            @php
            $stop_loop++;
            @endphp
            @endforeach
            @endif     
         </div>
      </div>
   </div>
</div>
{!! csrf_field() !!}
<div class="row" style="background-color:#fafafa; margin-top:2%">
   <div class="col-sm-12" style="border-top:0 none;">
      <div style="" itemscope itemtype="http://schema.org/BreadcrumbList">
         <h1 class="" style="font-size: 18px;color:#000">Popular Products of {{ $header->name ?? '' }}  </h1>
      </div>
   </div>
   <div class="col-md-12" style="padding:0;">
      @foreach($products as $p)
      @if($p->bdtdcProduct)
      <div class="col-sm-2 padding_0 " style="">
         <div class="product-container" style="">
            <div class="con-pro-img"> 
               @if($p->bdtdcProduct)
               <a itemprop="url"   title="{{ $p->pro_to_cat_name->name ?? ''}}" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/','-',$p->bdtdcProduct->product_name->name).'='.mt_rand(100000000, 999999999).$p->product_id,null,is_secured()) }}">
               @endif
               @if($p->pro_images_new)
               <img itemprop="image" style="padding: 0;" class="product-bd-img-bdtdc img-reponsive" src="
                  {{ asset(''.$p->pro_images_new->image) }}
                  " alt="{{ $p->bdtdcProduct->product_name->name ?? '' }}">      
               @else
               <img itemprop="image" style="padding: 0;" class="product-bd-img-bdtdc img-reponsive" src="{{ URL::to('uploads/no_image.jpg',null,is_secured()) }}" alt="{{ $p->bdtdcProduct->product_name->name ?? '' }}">
               @endif
               </a> 
            </div>
            <div>
               <a itemprop="url"   target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/','-',$p->bdtdcProduct->product_name->name).'=232942253'.$p->product_id,null,is_secured()) }}">
                  <div class="cat-item-title"> {{ $p->bdtdcProduct->product_name->name }} </div>
               </a>
            </div>
            <div class="dollar-price" style="text-align: center;"><span class="dollar">
               @if($p->cat_pro_price)
               US $ {{ $p->cat_pro_price->product_FOB }}
               @else
               @endif
               </span> /
               @if($p->bdtdcProduct->product_unit)
               {{ $p->bdtdcProduct->product_unit->name }}
               @endif
            </div>
            <div class="item-views" style="text-align: center;"><span class="online-view">
               @php 
               $rand=rand(20,50)
               @endphp
               {{ $rand }}+ 
               </span>views 
            </div>
            <div class="offer-action">
               <a itemprop="url" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/','-',$p->bdtdcProduct->product_name->name).'='.mt_rand(100000000, 999999999).$p->product_id,null,is_secured()) }}" class="offer-action-btn contact_supplier" data-product_id="{{ $p->product_id }}" data-supplier_id="{{ $p->supp_pro_company?$p->supp_pro_company->user_id:0 }}"> Contact Supplier</a>
            </div>
         </div>
      </div>
      @endif     
      @endforeach           
   </div>
   <div style="text-align: center">{!! $products->render() !!}</div>
</div>
<div class="row padding_0">
   <div class="col-sm-12 col-md-12 padding_0">
      <h2 style="margin-top: 3%;text-align: center;color: #000;font-size: 14px" class="country-trade-title">Effective sourcing from selected {{ preg_replace('/[^A-Za-z0-9\., -]/',' ',$header->name) }} Supplier.</h2>
   </div>
</div>
<div class="row get-q" style="padding-bottom: 2%">
   <a itemprop="url" href="{{ URL::to('get-quotations')}}" target="_blank" class="btn btn-primary btn-join" style="height:47px;border-radius:5px;font-size:18px;color:#fff!important;padding-top: 4px; ">Get Quotations Now</a>
</div>
<div class="row padding_0" style="padding-bottom: 2%;text-align: center;font-size: 14px">
   Do you want to show<strong> {{preg_replace('/[^A-Za-z0-9\., -]/',' ', $header->name) }}</strong> or other products of your own company?        <a itemprop="url" href="{{ URL::to('dashboard/product',null,is_secured())}}" target="_blank" class="" style="height:47px;border-radius:5px;font-size:14px;color:#000!important;padding-top: 4px; background-color: "><strong>Display your Products FREE now!</strong></a>
</div>
<div class="row" style="background-color: #ffffff;padding: 2%;margin-bottom: 2%">
   <div class="col-sm-12" style="padding: 0 0 0 5px;margin: 0 0 30px;font-size: 18px;line-height: 40px;color: #222;font-weight: bold;
      border-bottom: 2px solid #999;">
      <h5 style="font-size: 16px"><b>Determined channel for genuine Suppliers</b></h5>
   </div>
   <hr>
   <div class="col-sm-12 col-md-12 col-lg-12" >
      <p class="inline-block" style="display: inline-block; font-size: 14px; width: 94%; font-weight: normal; padding: 0; margin: 0; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;" >BuyerSeller.Asia partners with the world's most well-known retailers and buyers to brands over broad areas of consumers products such as  
         @if(isset($cat_name_array))
         <strong>{{ $keyword }}  </strong>
         @else
         @endif
      </p>
      <div class="pull-right more more2" style="cursor: pointer;"><span class="lbl">More </span><i class="fa fa-caret-right"></i></div>
   </div>
   <div class="col-sm-12 col-md-12 col-lg-12">
      <table style="width:100%;" class="mt20 logo-table">
         <tbody class="supp-tbody">
            <tr class="supp-row">
               <td style="width:25%;" class="brandTb-td"> 
                  <img title="Each year Kmart supports hundreds of Bangladesh frozen food suppliers and agriculture companies and wholesale food suppliers" itemprop="image" class="" style="max-height: 125px; max-width: 85%;" src="{!! asset('assets/fontend/bdtdc-images/kmart-tyre-and-auto-service-logo.jpg') !!}" alt="Kmart tyre and auto service logo">
               </td>
               <td style="width:25%;" class="brandTb-td"> 
                  <img title="Each year Tesco supports hundreds of Bangladesh frozen food suppliers and agriculture companies and wholesale food suppliers" itemprop="image" class="" style="max-height: 125px; max-width: 85%;" src="{!! asset('assets/fontend/bdtdc-images/tesco.jpg') !!}" alt="Tesco logo">
               </td>
               <td style="width:25%;" class="brandTb-td"> 
                  <img title="Each year Sears supports hundreds of Bangladesh frozen food suppliers and agriculture companies and wholesale food suppliers" itemprop="image" class="" style="max-height: 125px; max-width: 85%;" src="{!! asset('assets/fontend/bdtdc-images/sears.jpg') !!}" alt="Sears logo">
               </td>
               <td style="width:25%;" class="brandTb-td">
                  <img title="Each year Target supports hundreds of Bangladesh frozen food suppliers and agriculture companies and wholesale food suppliers" itemprop="image" style=" max-height: 125px; width: 85%;" src="{!! asset('assets/fontend/bdtdc-images/target.png') !!}" alt="Target logo">
               </td>
            </tr>
            <tr class="supp-row">
               <td style="width:25%;" class="brandTb-td">
                  <img title="Each year TJX supports hundreds of Bangladesh frozen food suppliers and agriculture companies and wholesale food suppliers" itemprop="image" class="" style="max-height: 125px; max-width: 85%;" src="{!! asset('assets/fontend/bdtdc-images/logo_tjx_companies.gif') !!}" alt="The TJX companies logo">
               </td>
               <td style="width:25%;" class="brandTb-td">
                  <img title="Each year Zara supports hundreds of Bangladesh frozen food suppliers and agriculture companies and wholesale food suppliers" itemprop="image" style=" max-height: 125px; max-width: 85%;" src="{!! asset('assets/fontend/bdtdc-images/zara_logo.jpg') !!}" alt="Zara logo">
               </td>
               <td style="width:25%;" class="brandTb-td">
                  <img title="Each year Walmart supports hundreds of Bangladesh frozen food suppliers and agriculture companies and wholesale food suppliers" itemprop="image" class="" style="max-height: 125px; max-width: 85%;" src="{!! asset('assets/fontend/bdtdc-images/com-logo-picture27.jpg') !!}" alt="Walmart logo">
               </td>
               <td style="width:25%;" class="brandTb-td">
                  <img title="Each year Carrefour supports hundreds of Bangladesh frozen food suppliers and agriculture companies and wholesale food suppliers" itemprop="image" class="" style="max-height: 125px; max-width: 85%;" src="{!! asset('assets/fontend/bdtdc-images/com-logo-picture21.jpg') !!}" alt="Carrefour logo">
               </td>
            </tr>
         </tbody>
      </table>
   </div>
</div>
<br>
@stop
@section('scripts')

<script type="text/javascript">
   $(function() {

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

      $ui.find('.sb_dropdown').find('label[for="all"]').prev().bind('click', function() {
         $(this).parent().siblings().find(':checkbox').attr('checked', this.checked).attr('disabled', this.checked);
      });

      $(document).on({
         click: function(e) {
            e.preventDefault();
            $('.modal-content').html('<span class="btn btn-block btn-lg"><i class="fa fa-spinner fa-pulse loading_icon text-primary"></i></span>');
            var base_url = window.location.origin;
            var supplier_id = $(this).data('supplier_id');
            var product_id = $(this).data('product_id');
            var url = base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;

            window.location.href = url;
         }
      }, '.contact_supplier');

   });

   //---------------------------------------//

   $(document).ready(function() {

      var limit_items = $(".main-c-x1");

      $(limit_items[0]).addClass("main-esx");
      $(limit_items[0]).find('.mclink1').css('display', 'block');
      $(".main-c-x1").hover(function() {
         for (var i = 0; i < limit_items.length; i++) {
            $(limit_items[i]).removeClass('main-esx');
            // $(".main-c-x").removeClass('main-esx');
         }
         // $('.mclink').removeClass('mclink-sw');
         $('.mclink1').css('display', 'none');
         // $(this).find('.mclink').addClass('mclink-sw');
         $(this).find('.mclink1').css('display', 'block');
         $(this).addClass("main-esx");
      });
      var limit_items2 = $(".main-c-x2");
      $(limit_items2[0]).find('.mclink2').css('display', 'block');
      $(limit_items2[0]).addClass("main-esx");
      $(".main-c-x2").hover(function() {
         for (var i = 0; i < limit_items.length; i++) {
            $(limit_items2[i]).removeClass('main-esx');
            // $(".main-c-x").removeClass('main-esx');
         }
         $('.mclink2').css('display', 'none');
         $(this).find('.mclink2').css('display', 'block');
         $(this).addClass("main-esx");
      });
      var limit_items3 = $(".main-c-x3");
      $(limit_items3[0]).find('.mclink3').css('display', 'block');

      $(limit_items3[0]).addClass("main-esx");
      $(".main-c-x3").hover(function() {
         for (var i = 0; i < limit_items.length; i++) {
            $(limit_items3[i]).removeClass('main-esx');
            // $(".main-c-x").removeClass('main-esx');
         }
         $('.mclink3').css('display', 'none');
         $(this).find('.mclink3').css('display', 'block');
         $(this).addClass("main-esx");
      });

   });



   //---------------------------------------//

   var lbl = false;

   $(document).on('click', '.more2', function() {
      if (lbl) {
         $('.lbl').text('Less ');
         $(this).parent().find('p').css('white-space', 'normal');
         $(this).parent().find('p').css('display', 'block');
         lbl = false;
      } else {
         $('.lbl').text('More ');
         $(this).parent().find('p').css('white-space', 'nowrap');
         $(this).parent().find('p').css('display', 'inline-block');
         lbl = true;
      }


   })
</script>


@stop