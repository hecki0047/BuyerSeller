@include('frontend.layouts.topbar-home')
<div class="container">
<div class="row topbar_sha" style="box-shadow:none;margin-bottom:10px;padding:0">
<div class="col-md-2 col-sm-2 col-xs-2 padding_0" style="padding-top:">
@include('frontend.layouts.all-category-list')
</div>
<div class="mn-rit col-md-8 col-sm-8 col-xs-8 col-md-offset-1 col-sm-offset-1 col-xs-offset-1" style="float:left;padding-left:0">
@if(isset($toplink))
<div style="position:relative;float:left;min-width:120px;padding:5px 0;margin-left:-2px"><span style="font-size:1em;font-weight:600">Hot Products:</span>
</div>
<ul class="list-inline" itemscope itemtype="http://schema.org/SiteNavigationElement" style="padding:5px 0;margin:0">
@foreach($toplink as $link)
<li itemscope itemtype="http://data-vocabulary.org/Product"><a rel="category" itemprop="url" href="{{URL::to(strtolower(preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','-',$link->name))).'-products/0',$link->id) }}"><span itemprop="name">{{ $link->name}}</span></a></li>
@endforeach
</ul>
@else
@endif
</div>
</div>
</div>
</section>