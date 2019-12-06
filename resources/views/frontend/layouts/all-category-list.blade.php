<div class="category-bdt" style="height:auto;padding:5px;width:146px;float:left;text-align:left;border:1px solid transparent">
<a itemprop="url" href="{{ URL::to('online-marketplace',null) }}" class="top-categy" style="text-align:left;font-size:14px"><i class="fa fa-list-ul" style=""></i> Categories</a>
<div class="row padding_0 show-ct-list" style="display:none;border-top:none">
<p style="float:right;width:154px;margin:0;border-top:1px solid #ddd;margin-top:-1px"></p>
<div class="mobo-categories">
@if ($categorys)
@foreach ($categorys as $category)
<div style="width:100%;float:left">
<ul class="bazar-top-list">
<li>
<span class="{{ $category['image']}}"></span><a itemprop="url" rel="category" href="{{ URL::to($category['slug'],$category['id']) }}">
<span style="padding:0;font-size:13px" itemprop="name">{{ $category['name']}}</span> </a>
<span><i class="fa fa-angle-right"></i></span>
@if ($category->sub_cat)
<div class="row child-ct-list">
<h3 class="catgory-head-tle" style="padding-left:30px;text-align:left">{{ $category['name'] }}</h3>
<ul style="padding-top:15px">
@foreach (array_slice($category->sub_cat->toArray(),0,40) as $category_children)
<li>
<a href="{{ URL::to(strtolower(preg_replace('/[^A-Za-z0-9\.-]/','-',preg_replace('/[^A-Za-z0-9\. -]/','',$category_children['slug']))).'/0',$category_children['id']) }}">
{{ $category_children[ 'name']}}
</a>
</li>
@endforeach
</ul>
<div style="max-width:235px;float:left;display:block;padding-top:30px">
</div>
</div>
@endif
</li>
</ul>
</div>
@endforeach
@endif
</div>
<div style="padding-left:20px;padding-bottom:30px"><a href="{{URL::to('online-marketplace')}}" style="font-size:15px;color:#000;font-weight:600;line-height:40px;float:left">All Categories</a></div>
</div>
</div>