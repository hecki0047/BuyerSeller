@extends('mobile-view.layout.master_m')
    @section('content')
  <section>
  <div class="container">
    <div class="row padding_0">
            <div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
                    <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block; padding-left: 0;">
                    <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
                    </a>
    </div>
    <div class="col-sm-12 padding_0">
      <button class="btn btn-default" onclick="window.history.back();" style="width:100%;text-align:center;color: #666;padding:10px;font-size: 20px;padding-top:17px;"><i class="fa fa-reply-all" style="font-size: 30px;" aria-hidden="true"></i></button>
    </div>
    </div>
    <div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 28px;">
       
    	<div class="col-xs-12 padding_0">
            @if($sub_category)
    			<div class="cat-pr-list">   
                    {{$sub_category->name}}       
                </div>
            @endif
            @if($sub_category)
                @if($sub_category->parent_cat)
                    @foreach($sub_category->parent_cat as $data)
        			    <div class="sb_pd_list">
                            <a href="{{URL::to('subcategory-product-view/'.$data->id),is_secured()}}" class="pp-list-an">    
                                {{$data->name}}
                             </a>
                        </div>
                    @endforeach
                @endif
             @endif    			
    	</div>
    </div>
</div>
</section>

@stop