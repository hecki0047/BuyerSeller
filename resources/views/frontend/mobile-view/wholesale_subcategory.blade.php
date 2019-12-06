@extends('mobile-view.layout.master_m')
    @section('content')
<section>
<div class="container">
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
        			    <div class="sb_pd_list" style="padding-left: 25px;">
                            <a href="{{URL::to('wholesale-subcategory-product-view/'.$data->id),is_secured()}}" class="pp-list-an">    
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