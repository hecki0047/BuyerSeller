<div id="replace_area">
   @if($main_product_search)
   @if(count($main_product_search)>0)
   <div class="col-sm-12 col-lg-12 col-md-12" style=" background-color: #fafafa; border-right: 1px solid #ddd; padding: 0; border-bottom: 1px solid #ddd; ">
      @foreach($main_product_search as $data)
      <div class="col-sm-3 col-md-3 col-lg-3 col-xs-6" style="border:1px solid #ddd; border-right:0 none; border-bottom:0 none;">
         <div class="product-box sup-head-col" onMouseOver="show_getquation_bar()" onMouseOut="hide_getquation_bar()" style="width: 100%; border: 0 none;background-color: #fff;" itemscope itemtype="http://schema.org/Product">
            <div class="cat-product-img-box">
               @if($data->proimages_new)
               <a itemprop="url" target="_blank" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$data->name).'='.mt_rand(100000000, 999999999).$data->product_id,null,is_secured()) }}"><img src="{{ URL::to($data->product_image_new->image,null,is_secured())}}" title="{{$data->name}}" itemprop="image" style="height: 225px;max-height: 220px;" class="product-fassion-img" alt="{{$data->name}}"></a>
               @endif
            </div>
            <a itemprop="url" target="_blank" href="">
               <div class="cat-item-title" itemprop="name">{{$data->name}}</div>
            </a>
            <div class="dollar-price" style="text-align: center;"><span class="dollar">US $FOB</span> / Product unit</div>

            <a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$data->name).'='.mt_rand(100000000, 999999999).$data->product_id,null,is_secured()) }}">
               <div id="btn-quet">
                  <div class="ui2-button-primary">View Details</div>
               </div>
            </a>
         </div>
      </div>
      @endforeach
   </div>
   @else
   <div class="col-sm-12 col-lg-12 col-md-12" style=" background-color: #fafafa; border-right: 1px solid #ddd; padding: 0; border-bottom: 1px solid #ddd; ">
      <p style="color:#f30000;padding-left:1%;padding-top:1%;">There is no recommended product for you purpose of this product.</p>
   </div>
   @endif
   @endif
</div>