@extends('mobile-view.layout.master_m')
    @section('content')
    <section>
    <div class="container">
    <div class="row">
      <div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
                    <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block;">
                    <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
                    </a>
    </div>
    <div class="col-sm-12 padding_0">
       <button class="btn btn-default" onclick="window.history.back();" style="width:100%;text-align:center;color: #666;padding:10px;font-size: 20px;padding-top:17px;"><i class="fa fa-reply-all" style="font-size: 30px;" aria-hidden="true"></i></button>
    </div>
    </div>
    
<div class="row" style="background: #fff;padding: 30px 0; padding-left: 5%; margin-bottom: 28px;" >
	<div class="col-xs-12">
			    <p class="p-name-m_dt">Product Name :<span class="pp-dt-1st_s">{{$products->product_name->name}}</span></p>
				<p class="p-name-m_dt">Brand Name:<span class="pp-dt-1st_s">{{$products->brandname}}</span></p>
				<p class="p-name-m_dt">Model Number<span class="pp-dt-1st_s">{{$products->model}}</span></p>
				<p class="p-name-m_dt">Product Type:  <span class="pp-dt-1st_s">{{$products->product_type_id}}</span></p>
				<p class="p-name-m_dt">MOQ:	<span class="pp-dt-1st_s">{{ $products->product_prices->product_MOQ or ''}} {{$products->ProductUnit->name}}</span></p>
				<p class="p-name-m_dt">Place of Origin: <span class="pp-dt-1st_s">{{$products->product_country->name}}</span></p>
	</div>
	<div class="col-xs-12">
			@if(count($products->proimages_new) > 0)
          @if($products->bdtdcProductToCategory)
            @if($products->bdtdcProductToCategory->pro_parent_cat && $products->bdtdcProductToCategory->bdtdcCategory)
              @foreach($products->proimages_new as $image)
                <div class="item active" style="padding:0; margin: 0;order:0 none; margin-top: 15px;">
                   <img itemprop="image"  style="width:100%" src="{{ URL::to($image->image,is_secured()) }}" />
                </div>
              @endforeach
            @endif
          @endif
      @elseif(count($products->proimages) > 0)
          @foreach($products->proimages as $image)
              <div class="">
                 <img itemprop="image"  style="width:100%;margin-top: 15px;" src="{{ URL::to($image->image,is_secured()) }}" />
              </div>
          @endforeach
      @endif	
  </div>

  <div class="col-xs-12"> 
 			<div style="border:1px solid rgba(0,0,0,0.1);padding:2%;width:100%" class="box">
          <article class="article">   
            <?php echo html_entity_decode($products->product_name->description, ENT_QUOTES); ?>                        
          </article>                                     
      </div>                                                            
 	</div>
</div>
</div>
</section>
@stop