@include('frontend.layouts.topbar-home')

<div class="container">
<div  class="row topbar_sha" style="box-shadow:none">

<div class="col-md-12 padding_0" style="padding-top:">
<div class="col-sm-2 col-md-2 padding_0" style="width: 180px">
			@include('frontend.layouts.all-category-list')
</div>
<div class="col-md-10 col-sm-10 col-xs-10 " style="padding-top: 5px">
		<div style="position:relative; float:left;min-width:120px;"><span style="font-size:1em;font-weight:600;">Hot Products:</span>
		</div>
			<ul style="margin-bottom: 0" class="list-inline" itemscope itemtype="http://schema.org/SiteNavigationElement">

				@foreach($toplink as $link)
				<li itemscope itemtype="http://data-vocabulary.org/Product"><a  rel="category" itemprop="url" href="{{URL::to(strtolower(preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','-',$link->name))).'-products/0',$link->id,is_secured()) }}"><span itemprop="name">{{ $link->name}}</span></a></li>
				@endforeach
			</ul>

		</div>

	</div>
	</div>
</div>
</section>
