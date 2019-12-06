@extends('frontend.layouts.header_dynamic')
@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/frontend/css/special-page.css',is_secured()) !!}" rel="stylesheet">
   <link property='stylesheet' href="{!! asset('assets/frontend/css/bangladesh-business-style.css',is_secured()) !!}" rel="stylesheet">
   <link  rel="stylesheet" property='stylesheet' href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

  @endsection
	@section('content')
	
	<div class="row" style="margin-top: 20px;">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
     <div class="bdpro-hovereffect">
       <img class="img-responsive" src="{{asset('assets/fontend/images/low-price-chinajpg.jpg')}}" alt="low price chinajpg">
            <div class="bdpro-overlay">
                <h2>Low price chinajpg</h2>
				<p>
					<a href="#">Low price chinajpg</a>
				</p>
				<button type="button" class="btn btn-primary" style="border-radius: 4px !important;">Shop Now</button>
            </div>
    </div>
</div>
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
     <div class="bdpro-hovereffect">
       <img class="img-responsive" src="{{asset('assets/fontend/images/Original-Huawei-.jpg')}}" alt="Original HuaWei Honor">
            <div class="bdpro-overlay">
                <h2>Original HuaWei Honor</h2>
				<p>
					<a href="#">Original HuaWei Honor</a>
				</p>
				<button type="button" class="btn btn-primary" style="border-radius: 4px !important;">Shop Now</button>
            </div>
    </div>
</div>
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
     <div class="bdpro-hovereffect">
        <img class="img-responsive" src="{{asset('assets/fontend/images/Original-HOMTOM-HT17.jpg')}}" alt="Original HOMTOM HT17">
            <div class="bdpro-overlay">
                <h2>Original HOMTOM HT17</h2>
				<p>
					<a href="#">Original HOMTOM HT17</a>
				</p>
				<button type="button" class="btn btn-primary" style="border-radius: 4px !important;">Shop Now</button>
            </div>
    </div>
</div>
<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
     <div class="bdpro-hovereffect">
        <img class="img-responsive" src="{{asset('assets/fontend/images/Original-Huawei-.jpg')}}" alt="Original Huawei">
            <div class="bdpro-overlay">
                <h2>Original Huawei</h2>
				<p>
					<a href="#">Original Huawei</a>
				</p>
				<button type="button" class="btn btn-primary" style="border-radius: 4px !important;">Shop Now</button>
            </div>
    </div>
</div>
</div>
	@stop
@section('scripts')
@stop