@extends('frontend.layouts.master-register')
  @section('page_css')
    <link property='stylesheet' href="{!! asset('css/footer-bottom/supplier-products.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('css/mega-menu.css',is_secured()) !!}" rel="stylesheet">    
    @endsection
	@section('content')
<br>
  <div class="row" style="margin-bottom: 10px">
    <div class="col-md-12 padding_0" style="padding-bottom: 0%">
      <ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
      <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> Home &nbsp;</a></li>
      <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="#" style="color: #000"> <i class="fa fa-angle-right"></i> Hot Products <i class="fa fa-angle-right"></i></a></li></ul>
    </div>
  </div>
</div>

<div style="background: white;">
<div class="container">
      <div class="row" style="position: relative;">
      <div  class="col-sm-3 mobo-categories hr-gap all-cate-pro" style="padding-left: 0px;padding-bottom: 9px; position: absolute; top: 0; left: 15px; background: rgba(255, 255, 255, 0.64); z-index: 1;">
            <h3 style="padding-top: 12px"><a itemprop="url" style="height: 8px;" href="{{ URL::to('online-marketplace',null,is_secured())}}"><i class="fa fa-list-ul"></i> CATEGORIES</a></h3>
            @if ($cat_products) 
           @foreach ($cat_products as $category)
            <ul  class="pull-left bazar-list" itemscope itemtype="http://data-vocabulary.org/Product">
                <li  data-id="market-{{ $category['parent_id']}}" style="border-color: transparent;">
                    @if($category->pro_parent_cat)
                        @if($category->pro_parent_cat->name)
                    <a style="color: black" itemprop="url"  rel="category" href="{{ URL::to(strtolower(preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','-',$category->pro_parent_cat->name))).'-product/0',$category['parent_id'],is_secured()) }}" >
                        {{ $category->pro_parent_cat->name  }} </a>
                    <span style="padding:0;" class="pull-right"><i class="fa fa-angle-right"></i></span>
                        @endif
                    @endif
                </li>
            </ul>
          
          @if ($category->pro_parent)
            
            <div style="padding-top:0px; margin-top: -38px;margin-left: 88%;" class="col-lg-offset-12 col-md-offset-12 col-sm-offset-12 cacostos util-clearfix" id="market-{{ $category['parent_id']}}">
                <ul class="cacostos-list" itemscope itemtype="http://data-vocabulary.org/Product">
                    <li>
                        <div class="prothom-cacostos">
                    {{ $category->pro_parent_cat->name  }}</div>
                        <div style="margin-top:10px" class="ditio-cacostos">

                           
                            @foreach ($category->pro_parent as $cat)
                              @if($cat->column==1)
                              <a itemprop="url" rel="category" href="{{URL::to(strtolower(preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','-',$cat->slug))).'-product/18',$cat['id'],is_secured()) }}">
                                  <span itemprop="name">{{ $cat->name }}</span>
                              </a>
                              @endif
                          
                            @endforeach

                          </div>
                    </li>
                </ul>
                 <ul class="cacostos-list" style="margin-top:30px" itemscope itemtype="http://data-vocabulary.org/Product">
                    <li>
                        <a itemprop="url" href="#" class="prothom-cacostos"></a>
                        <div class="ditio-cacostos">
                            @php 
                            $stop_loop = 0
                            @endphp
                             @foreach ($category->pro_parent as $cat)
                              @if($cat->column==2)
                                @if($stop_loop <= 15)
                              <a itemprop="url" rel="category" href="{{URL::to(strtolower(preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','-',$cat->slug))).'-product/18',$cat['id'],is_secured()) }}">
                                 <span itemprop="name"> {{ $cat->name }}</span>
                              </a>
                              @else
                              @php
                              break
                              @endphp
                             @endif
                            @php 
                            $stop_loop++
                            @endphp
                              @endif
                          
                            @endforeach
                            
                        </div>

                    </li>
                </ul>
            </div>

            @endif

            @endforeach

            @endif
            <div id="bazar-list" class="pull-left" style="padding-left: 1.3%;;padding-right: 8%;font-weight: 600;">
                <a itemprop="url" href="{{ URL::to('online-marketplace',null,is_secured()) }}">
                   All Categories </a>
                <span class="pull-right"><i style="margin-left: 5px" class="fa fa-angle-right"></i></span>
            </div>
            </div>

              <div class="col-sm-12" style="">

               <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active" style="border-radius:10px !important; border:0 none;"></li>
                    <li data-target="#myCarousel" data-slide-to="1" style="border-radius:10px !important; border:0 none;"></li>
                    <li data-target="#myCarousel" data-slide-to="2" style="border-radius:10px !important; border:0 none;"></li>
                    <li data-target="#myCarousel" data-slide-to="3" style="border-radius:10px !important; border:0 none;"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  

                 
                  <div class="carousel-inner" role="listbox">


                    <div class="item active">
                      <img itemprop="image" style=" float: none;height:400px;" src="{!! asset('assets/country-images/supplier-evaluation.jpg',is_secured()) !!}" alt="supplier evaluation">
                      <div class="carousel-caption">
                      <a itemprop="url" href="#" target="_blank">
                        </a>
                       
                      </div>
                    </div> 
                  
                    <div class="item">
                      <img itemprop="image" style=" float: none;height:400px;" src="{!! asset('assets/country-images/Selected-Suppliers-1170x400.jpg',is_secured()) !!}" alt="Selected suppliers">
                      <div class="carousel-caption">
                      <a itemprop="url" href="#" target="_blank">
                      
                        </a>
                       
                      </div>
                    </div>  
                    <div class="item">
                      <img itemprop="image" style="float: none;height:400px;    width: 100%;" src="{!! asset('assets/country-images/Sellected-Suppliers.jpg',is_secured()) !!}" alt="trade assurance">
                      <div class="carousel-caption">
                      <a itemprop="url" href="#" target="_blank">
                       </a>
                     
                    </div> 
                
                  </div>
                  <div class="item">
                      <img itemprop="image" style="float: none;height:400px;    width: 100%;" src="{!! asset('assets/country-images/bangladesh-leather.png',is_secured()) !!}" alt="trade assurance">
                      <div class="carousel-caption">
                      <a itemprop="url" href="#" target="_blank">
                       </a>
                     
                    </div> 
                
                  </div>  
              </div>

                  
              </div>

              </div>

        </div>
      </div>
     </div>


    <div style="min-height: 250px;background-color: #1686cc;display: block;">
        <div class="container">
            <div class="row padding_0" >
                <div class="col-sm-12 col-md-12 padding_0">
                    <h2 style="margin-top: 6%;margin-left: 14px;text-align: center" class="country-trade-title">Effective sourcing from Selected Supplier.</h2>
                </div>
              
            </div>
            <div class="row get-q">
               <button class="btn btn-primary btn-join">
                <a itemprop="url" href="{{ URL::to('get-quotations',null,is_secured())}}" target="_blank"   style="height:47px;border-radius:5px;font-size:18px;color:#fff!important;padding-top: 4px; ">Get Quotations Now</a>
                </button>
            </div>
          
        </div>
    </div>

<div class="container">

@if ($cat_products) 

    @foreach ($cat_products as $pro_category)

		<div class="row" id="cat{{$pro_category->pro_parent_cat->id}}"  style="background-color: #f6f7fb; margin-top:20px;margin-bottom: 2%;padding-bottom: 3%; border-left:1px solid #ddd;border-bottom:1px solid #ddd;border-right:1px solid #ddd;">
<div class="col-md-3 col-sm-3" style="padding:0; width:20%;">
	<div class="cate-details" style="background-color: #fff3fc;">
		<div id="cat{{ $pro_category->pro_parent_cat->id }}" class="cat{{$pro_category->pro_parent_cat->id}} cate-d-title"  style="border:none ;">
			{{ $pro_category->pro_parent_cat->name  }}
		</div>
		<ul class="cate-ul-list" itemscope itemtype="http://data-vocabulary.org/Product">
    		@if ($pro_category->most_view_category)
    		    @foreach ($pro_category->most_view_category as $cat)				
    				<li class="cat-li choice-cat">
                        <a itemprop="url" rel="category" href="{{URL::to(strtolower(preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','-',$cat->cat_name->slug))).'-product/18',$cat['category_id'],is_secured()) }}">
                            {{ $cat->cat_name->name }}
                        </a>
                    </li>
    		    @endforeach
            @endif								
				
		</ul>

	</div>
</div>
<div class="col-md-9 col-sm-9" style="padding-left:15px;padding-right:15px;width: 80%">		
    @if ($pro_category->selected_suppliers)         
			@foreach ($pro_category->selected_suppliers as $data) 
				<div class="col-sm-3 col-xs-6 padding_0  sup-head-col" style="margin-bottom: 1%;height: 360px" itemscope itemtype="http://schema.org/Product">
					<div class="img-hilight  product-hover">
                        @if($data->pro_name_string)
            				<a itemprop="url" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$data->pro_name_string->name).'=232942253'.$data->product_id,null,is_secured()) }}" class="slidebox-item-list" style="box-shadow: none; border:0 none;width: 100%">
                     @else
                   <a itemprop="url" target="_blank" href="#" class="slidebox-item-list" style="box-shadow: none; border:0 none;width: 100%">
                    @endif
            <div>

            @if($data->select_product_images)
            <img itemprop="image" title="{{ $data->pro_name_string->name  }}" style="height:220px;width:100%;" class="img-thumbnail" src="{{ URL::to((isset($data->select_product_images)) ? ''.$data->select_product_images->image : 'no_image.jpg',null,is_secured()) }}" alt="{{ $data->pro_name_string->name  }}" />
            @else
            <img itemprop="image" style="height: 220px;width: 200px;" title="No image" class="img-responsive  col-sup-img" src="{{ URL::to('uploads/no_image.jpg',null,is_secured()) }}" alt="bdtdc" />
            @endif
			    </div>
					<div class="product-head-cont">
					<div class="brand-year" style="padding-left:10px;padding-right:10px;padding-top: 30px;height:70px;">
							<div  class="brand-year16">
                @if($data->pro_name_string)
					<div itemprop="name" class="pp-title" style="overflow: hidden; height: auto; text-overflow: ellipsis; white-space: nowrap;">
                        {{ $data->pro_name_string->name, 0, 30 }}
                    </div>
               @else
               Unknown Product
               @endif
			</div>
		</div>
            @if($data->cat_pro_price)
				<p class="brand-favorable" style="text-align:left;padding-left:10px;padding-bottom:3; height:40px;">
					<span class="doller-product-price" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer" style="font-size: 14px;">
                        <span itemprop="priceCurrency" content="USD">US $</span> <span itemprop="lowPrice">
                            {{ $data->cat_pro_price->product_FOB }}
                        </span> 
                    </span>
                    <span itemprop="name">
                        {{ $data->BdtdcSelectedSupplier_products->ProductUnit->name  }}
                    </span>
				</p>
            @else
                <p class="brand-favorable" style="text-align:left;padding-left:10px;padding-bottom:3; height:40px;">
                    Latest price
                </p>

            @endif

				<div class="brand-favorable" style="text-align:left;margin-left:10px; padding-top:0; padding-bottom:0;">
					MOQ: <span style="color:#333;">
            @if($data->cat_pro_price)
            {{ $data->cat_pro_price->product_MOQ }} {{ $data->BdtdcSelectedSupplier_products->ProductUnit->name  }}
            @else
            @endif
          </span> 
				</div>
			</div>
		</a>
	</div>	
</div>
    @endforeach
@endif
		
</div>
			
</div>
@endforeach
@endif
@stop