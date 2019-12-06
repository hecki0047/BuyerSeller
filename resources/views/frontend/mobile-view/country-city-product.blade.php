@extends('mobile-view.layout.master_m')
    @section('content')

<!-- 
    @if($category_supplier)
        @foreach($category_supplier as $cs)
            @if($cs->supplier_info)
               
                    {{$cs->supplier_info->name_string->name}}
             
            @endif

        @endforeach
    @endif -->
    <div class="row padding_0">

			<div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
                    <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block; padding-left: 0;">
                    <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
                    </a>
         </div>
     </div>
      @if($category_supplier)
        @foreach($category_supplier as $cs)
        @if($cs->supplier_info)
    <div class="row padding_0" style="background: #fff;margin-top:1%;margin-bottom:1%;">
    			<div style="width: 100%;">
			  	<p style="font-size: 12px; color:#F66603; clear: both;padding-top:1%; ">
			  	 	 Over {{$cs->supplier_info->membership_year}}Yrs of Online Trading Experience
			  	 </p>
                  <a itemprop="url" target="_blank" href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$cs->supplier_info->name_string->name).'/'.$cs->company_id) }}" style="color: #FF7519;">
			  	<div class="det_list" id="p-name-des">
                    <p style="font-size: 17px;font-weight: 700;">{{$cs->supplier_info->name_string->name}}</p>
     
       			</div>
            </a>
                
       			<div style="display: block;width: 100%; margin:0; padding: 0; clear: both; padding-top: 10px; clear: both;">
       					<div>
       					<div class="pro_sur" style="width: 30px;">
       					     <img style="height:18px;width:18px; float: left;" src="{!! asset('resources/assets/images/Buyer-protection-home.png',is_secured()) !!}">
       					 </div>
       					<div class="pro_sur_gld" style="width: 70px;">
       						<img style="height:18px;width:18px; float: left;" src="{!! asset('resources/assets/helpcenter/Gold-membership.png',is_secured()) !!}">
       						<span style="float: left;font-weight: bold;font-size: 11px;margin-left: 4px;">
       											{{$cs->supplier_info->membership_year}} YR
       						</span>
       					</div>
       										
       					<a href="{{URL::to('selected-suppliers/'.$cs->cat_country->name,$cs->cat_country->id)}}">             
                            <div class="pro_sur_cnt" style="width: 70px;">
                                 <img style="height:16px;width:24px; float: left;" src="{{ asset('resources/assets/global/img/flags/'.strtolower($cs->cat_country->iso_code_2).'.png',is_secured())}}" alt="{{ $cs->cat_country->name }}" >
                                <span style="float:left;font-weight: bold;font-size: 11px; margin-left: 4px;">
                                    {{$cs->cat_country->iso_code_2}}
                                </span>
                            </div>
                </a>

       				</div>
       			</div>
                @if($cs->supplier_info->business_supplier)
                    @if($cs->supplier_info->business_supplier->business_types)
               			<div id="p-name-des" style="width: 100%; clear: both;">
               				<span>Business Type：</span>
               				<span style="color: #000;">{{$cs->supplier_info->business_supplier->business_types->name}}</span>
               			</div>
                    @endif
                @endif
       			<div id="p-name-des" style="width: 100%; clear: both;">
       				<span>Year Established：</span>
       				<span style="color: #000;">{{$cs->supplier_info->company->year_of_reg}}</span>
       			</div>
                <?php $loop = 0; ?>

      @if($cs->supplier_info)
      @foreach($cs->supplier_info->product_category as $p)
      <?php 

          if($loop <= 3){
            ?> 
        
                <div class="col-sm-3 padding_0" style="border-bottom: 1px solid #ddd;">
               
                <a target="_blank" class="" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $p->pro_to_cat_name->name).'='.mt_rand(100000000, 999999999).$p->product_id,is_secured()) }}">       
                    @if($p->pro_images_new)
                      <img style="height: 150px; width:150px;margin-bottom: 15px;" title="{{ $p->pro_to_cat_name->name or '' }}" class="img-thumbnail" src="{{ URL::to('bdtdc-product-image/'.trim($p->pro_parent_cat->name).'/'.trim($p->bdtdcCategory->name),(isset($p->pro_images_new)) ? $p->pro_images_new->image : 'no_image.jpg',is_secured()) }}" alt="{{ $p->pro_parent_cat->name or '' }}" />

                    @elseif($p->pro_images)
                      <img style="height: 150px; width:150px;margin-bottom: 15px;" title="{{ $p->pro_parent_cat->name or '' }}" src="{{ asset('uploads/'.$p->pro_images->image.'',is_secured())}}" alt="" class="img-responsive" alt="{{ $p->pro_parent_cat->name or '' }}">
                    @else
                      <img style="height: 150px; width:150px;margin-bottom: 15px;" src="{{ asset('uploads/no_image.jpg',is_secured())}}" alt="" class="img-responsive" alt="{{ $p->pro_parent_cat->name or '' }}">
                    @endif
                </a>
    </div>
       <?php
          }else{
            break;
          }
          $loop++;
          // echo $loop;

        ?>
      @endforeach
      @endif
    
      <?php
            for ($img_loop=0; $img_loop < 3-$loop; $img_loop++) { ?>

                <div class="col-xs-7 col-md-2 col-sm-4 padding_0">
                    <div class="product-image-wrapper">
                    <a target="_blank" class="" href="#" style="display: block;">
                        <div class="single-products">
                            <div class="productinfo text-center">
                            <img title="" style="width:100%;height:120px;margin-left:0" src="{{ asset('uploads/no_image.jpg',is_secured())}}" alt="" class="img-responsive" alt="">
                                <a target="_blank" class="pro_name" href="#" style="display: block; font-size: 12px;line-height: 13px;margin-top:0%"></a>
                            </div>

                        </div>
                        </a>
                    </div>          
                </div>

        <?php } ?>
        
       			<!-- <div class="col-sm-12 padding_0" style="border-bottom: 1px solid #ddd;">
       					<div class="col-sm-3">
       							<img  style="height: 150px; width:150px; " src="{!! asset('uploads/product_photo_xmW2h7k4tS.jpg',is_secured()) !!}">
       					</div>
       					<div class="col-sm-3">
       							<img  style="height: 150px; width:150px; " src="{!! asset('uploads/product_photo_xmW2h7k4tS.jpg',is_secured()) !!}">
       					</div>
       					<div class="col-sm-3">
       							<img style="height: 150px; width:150px; " src="{!! asset('uploads/product_photo_xrOn4IPB7e.jpg',is_secured()) !!}">
       					</div>
       					<div class="col-sm-3">
       							<img style="height: 150px; width:150px; " src="{!! asset('uploads/product_photo_YlbXdFragU.jpg',is_secured()) !!}">
       					</div>
       			</div> -->
			</div>

    </div>

    @endif
 @endforeach
  {!! $category_supplier->render() !!}
    @endif

@stop