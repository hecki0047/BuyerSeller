@include('fontend.layouts.topbar')
<div  class="row topbar_sha" style="padding-top: 1.5%;box-shadow:none">
<div class="col-md-12 padding_0">
	<div class="col-xs-12 col-sm-2 bdtdc-logo" itemscope itemtype="http://schema.org/Organization" style="margin-top: 0px;">
		<a style="margin-left: 0; background-image: none " rel="home" itemprop="url" title="Manufacturers-Suppliers"  href="{{ URL::to('/',null,is_secured())}}">
			<img alt="logo" style="margin-top:-5px;width: 140px;height: 45px;" itemprop="logo" class="loggg" src="{{ asset('assets/logo.png') }}" />
		</a>
		<div>
			<a style="width: 140px;
    height: 30px;padding: 2px 0 0;font-size: 11px" rel="home" itemprop="url" title="Manufacturers-Suppliers" class="bd-trade" href="{{ URL::to('/',null,is_secured())}}" id="bang-trade" style="line-height: 14px;font-size: 11px; word-spacing: 0px;margin-top:0px;padding-top:0px"></a>
		</div>

	</div>

	<div class="col-xs-12 col-sm-10 padding_0">

		<div itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction" style="" class="col-xs-12 padding_0">
			<div class="col-xs-9" style="padding-right:0px; padding-bottom:10px;">
				  <div class="col-lg-12" style="padding:0px">
			<form  class="form form-horizontal" itemprop="target"  action="{!!URL::to('search-product',null,is_secured())!!}" method="post">
				<input itemprop="url" type="hidden" name="_token" value="{{ csrf_token() }}">
				
				    <div class="input-group input-group-lg" style="border:2px solid #19446F;border-radius: 0px !important;">
				      <span class="input-group-btn hide_dropdown" style="width: 130px;">
				        <select  class="form-control all_search_options inp-ch" name="search">

						  <option value="products">Products</option>

						  <option value="suppliers">Suppliers</option>

						  <option value="news">Quote</option>

						</select>
				      </span>
				      <input itemprop="query-input"  name="key" class="form-control search_key inp-value" type="text" placeholder="What are you looking for..." required="required" />
				       <span class="input-group-btn" style="/*width:13%;*/">
				        <input itemprop="query-input" type="submit" style="background:#19446F;border-radius: 0px !important;min-width: 102%; font-size: 14px; width: 200px;" class="btn btn-primary btn-lg pull-left all_search" value="Search" />
				      </span>
				    </div>
				</form>
				</div>
				</div>
	<div class="col-xs-3 padding_0" style="margin-top: 3px;min-width: 200px;">
		
		<div class="col-xs-12 col-md-12 col-sm-12"  style="padding:0.1%;border-radius: 5px !important;">

			<a itemprop="url" title="get quote" href="{{URL::to('get-quotations',null,is_secured())}}"><span style=""><img itemprop="image" style="padding-left: 7%;padding-right: 5px;margin-top: -5px;height: 52px" class="img-responsive" src="{!! asset('resources/assets/gold/Get-Quotation-home.png',is_secured()) !!}"  alt="Get Quotation home" /></span></a>

					</div>
				</div>
		</div>
</div>
</div>
<div class="col-md-12 padding_0" style="padding-top: 1%">
		<div class="col-sm-2 col-md-2" style="padding-left: 0px">
			
		    	@include('fontend.layouts.all-category-list')
		 </div>
<div class="col-md-10 col-sm-10 col-xs-10 padding_0">
		<div style="position:relative; float:left;margin-left: "><span style="font-size:1em;font-weight:600;">Hot Products:</span></div>
			<ul class="list-inline" itemscope itemtype="http://schema.org/SiteNavigationElement">

				@foreach($toplink as $link)
				<li itemscope itemtype="http://data-vocabulary.org/Product"><a style="padding-right: 0; "  rel="category" itemprop="url" href="{{URL::to(strtolower(preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','-',$link->name))).'-products/0',$link->id,is_secured()) }}"><span style="font-size: 10px !important;" itemprop="name">{{ $link->name}}</span></a></li>
				@endforeach
			</ul>

		</div>

	</div>
	</div>
</div>
</section>
 <div class="container">
 