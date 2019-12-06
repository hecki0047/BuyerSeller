@extends('mobile-view.layout.master-profile-m')
  @section('content')
@include('mobile-view.country-product.template-header')
<?php 
      $product_groups=DB::table('bdtdc_supplier_product_groups')->where('company_id',Route::current()->parameters()['profile_id'])->get();
       $profile_id=Route::current()->parameters()['profile_id'];
      //print_r(Route::current()->parameters());
?>
<div class="row padding_0" style="background: #fff;">
  <div id="comp_product">
        <div class="col-xs-8 padding_0">
            <div style="padding-left:2%; margin-top: 6px;">
             
            <form class="form" method="get" action="{{ URL::to('template-profile/product-search',Route::current()->parameters()['profile_id'],null,is_secured()) }}">
                <div class="input-group">
                  <input id="product_search_m" type="text" class="form-control product_key" style="height: 34px;" placeholder="Search products on Ministe"  name="key">
                  <span class="input-group-btn search_from_template">
                    <button class="btn btn-primary template_product" type="submit" data-profile-id="{{Route::current()->parameters()['profile_id']}}"><i class="fa fa-search-plus"></i></button>
                  </span>
                </div>
            </form>
            </div>
        </div>
        <div class="col-xs-4" style=" margin-top: -7px;">
        <nav class="navbar navbar-inverse" style="background: #fff; border:0 none; padding-top: 5px;float: left;">
                <div class="navbar-header">
                  <button type="button " class="navbar-toggle btn-primary" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background: #3379B5; border:0 none;" id="nv-mnu-lst">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                  </button>
                </div>
            </nav>
        </div>
  </div>
 </div>
 <div class="row padding_0" style="background:#fff;">
 <div class="collapse navbar-collapse " style="background: #fff;" id="cat-lst-pro-bd">
      <ul class="nav navbar-nav cate-com-pro">
        <li class="cate-com-pro-li active" style="padding-left: 30px;">All Category</li>
         @foreach($product_groups as $product_group)
                        <li class="cate-com-pro-li active"><a style="color: #000;" href="{{ URL::to('profile/template_'.'/'.$profile_id .'/'. $product_group->name) }}">{{ $product_group->name }}</a></li>
                       
                  @endforeach
       
      </ul>
  </div>
  </div>
<div class="row padding_0" style="background: #fff; margin-bottom: 20px;border-bottom: 1px solid #ddd;">
@if($products_list)         
            @foreach($products_list as $data)
        <div class="product-list-m-view">
                @if($data->pro_to_cat_name)
                   <a title="{{ $data->pro_to_cat_name->name ?? '' }}" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $data->pro_to_cat_name->name).'='.mt_rand(100000000, 999999999).$data->product_id) }}">
                @else
                    <a title="" target="_blank" href="{{ URL::to('product-details/'.'='.mt_rand(100000000, 999999999).$data->product_id) }}">
                    </a>
                @endif
                <div class="wrap-img">
           
                    @if($data->pro_images_new)
                        <span class="wrap-img-span"><img class="wrap-img-img"   src="{{ URL::to((isset($data->pro_images_new)) ? $data->pro_images_new->image : 'no_image.jpg') }}" alt="{{ $data->pro_to_cat_name->name ?? '' }}"></span>
                    @else
                        <img src="{{ URL::to('uploads/no_image.jpg') }}" class="wrap-img-img" alt="{{ $data->pro_to_cat_name->name ?? '' }}" />
                    @endif
                </div>

             <div class="rap-text">
                        <h4 class="rap-text-h4">{{ substr($data->pro_to_cat_name->name, 0, 59) }}</h4>
                 @if($data->bdtdcProduct)
              <ul class="params" style="padding: 0;"> 
                        @if($data->bdtdcProduct->product_prices && $data->bdtdcProduct->ProductUnit)     
                  <li class="param">
                        <label class="param-label">Min. Order:</label>
                             <span class="param-span">{{$data->bdtdcProduct->product_prices->product_MOQ}} {{ $data->bdtdcProduct->ProductUnit->name ?? '' }}</span>
                        </li>
                        @else
                        @endif
                    <li class="param">
                            <label>FOB Price:</label>
                            <span>US $ {{$data->bdtdcProduct->product_FOB}} /{{ $data->bdtdcProduct->ProductUnit->name ?? '' }}</span>
                        </li>
                  </ul>
                   @endif
             </div>
             </a>
        </div>
        @endforeach
    @endif
</div>
@stop
@section('scripts')
<script type="text/javascript">
     $(document).ready(function(){
        $('#nv-mnu-lst').click(function(){
              $('#cat-lst-pro-bd').toggle('slow');
        });
      }); 

    /*product template search*/
   /* $(document).on({click:function(e){
    e.preventDefault();

    var base_url='{{URL::to("/")}}';
    alert(base_url);
    var name_search= $('.product_key').val();
    alert(name_search);
    var profile_id= $(this).attr('data-profile-id');
    alert(profile_id);

    var url=base_url+'/template-profile/product-search?name_search='+name_search+'&profile_id='+profile_id;
    window.location.href=url;
   }},'.template_product');*/
    /*product template search*/
</script>
@stop