@extends('frontend.layouts.header_dynamic')
	@section('page_css')
	<link property='stylesheet' href="{!! asset('assets/frontend/css/bdsource-home-page.css',is_secured()) !!}" rel="stylesheet">
	@endsection
	@section('content')
	<div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a" itemprop="item"><span itemprop="name" style="color:#666;">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
          <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  href="{{URL::to('Bdsource-home-page',null,is_secured())}}" class="top-path-li-a" itemprop="item"><span itemprop="name" style="color:#666;">BdSource for buyer </span></a></li>
                     
                        
                    </ul>
        </div>
    
    </div>
</div>
  <div class="container-fluid padding_0">
  		<div class="slider-popular-bd">
  							<div class="container">
  								<div class="row">
  									<div class="col-sm-12 col-md-12">
  											<div class="ppp-title">
  											<h1 class="limt-off">Smarter Ways to Source</h1>
  										</div>
  									</div>
  								<div class="col-sm-12 col-md-12" style="padding: 0px">
  									<div class="search-query">
 
  												<!--  <div class="file-ex">
  													<i class="fa fa-file-text-o" style="padding-right: 20px; font-size: 36px;float: left;margin-top: 5px;"></i>Instant Quote
  												</div>  -->
  												<!-- <div class="file-ex file-ex2" style="background-color: #255E98;">
  													<a itemprop="url" style="color: #fff !important" href="{{ URL::to('trading-agent') }}"> Marketing Agents</a>
  												</div>  -->
  												<div style="float: right;padding-top: 2%;padding-right: 1%;">
  										<a itemprop="url"      style="color: #fff!important;font-size: 22px; float:right;" href="{{ URL::to('source')}}"><i style="font-size:30px;color: #fff;" class="fa fa-info-circle" aria-hidden="true"></i>
 What is bdsource <i class="fa fa-question-circle-o" aria-hidden="true"></i> </a>
  									</div>

  									</div>

  									
  									</div>
  									<div class="col-sm-12 col-md-12" style="background: #fff;padding-top: 25px">
  										
  										<div  class="col-sm-12 padding_0" style="padding-bottom: 25px;">
  										  <div class="key-cat" style="padding-top: 0;">
										    <form class="form" action="{{ URL::to('search_product') }}" method="post">
										<div style="padding-left: 0;position: relative;" class="col-sm-3 col-md-2 col-xs-6 sb-by-cat" onMouseOver="show_cate_product('sourcing-list','block')" onMouseOut="hide_cate_product('sourcing-list','none')">	
												<input type="hidden" name="_token" value="r36v0zIYPSEqGbuTXzI3LMW0XsiNnJGOuzLC5PWm">
										
										
										<div  style="height:44px;border-radius: 5px!important;cursor:pointer; text-align:left;" class="form-control category-show view_more" data-name="search-cat">
											<p style="margin:0; font-size: 20px"><i class="fa fa-list" style=" color: #999;font-size: 23px; top: 2px; position: relative;"></i> Category</p>	
												
										</div> 
										<div style="width: 900px" class="col-sm-9 col-lg-8 col-md-8 padding_0 show_elements" id="sourcing-list">
											
												<ul id="cat-list">
													@if ($categorys)					
														@foreach($categorys as $c)
															@if($c->inq_products_category)
											        		<li class="cat-list-product-li" style="color:black;padding-left: 22px;" itemscope itemtype="http://data-vocabulary.org/Product">
											        			<a rel="category" itemprop="url" href="{{URL::to('Sourcing/Requests/info',$c->inq_products_category->bdtdcCategory->id)}}">
											        			<span itemprop="name">{{ $c->inq_products_category->bdtdcCategory->name }}</span>
											        		</a>
											        		</li>
											        		@else
							        						@endif
													 	@endforeach
													@endif
												</ul>
											
										</div>
									</div>
									 
							<div class="col-sm-9 col-md-8 padding_0">
								 <div  style="width:80%; float:left;">
										<input style="height:44px;border-radius: 5px!important; border-top-right-radius: 0 !important;border-bottom-right-radius: 0 !important;" name="quote_key" class="form-control" type="text" placeholder="Enter English Keyword to Search . . ." required="required">
								 </div>
								<div style="width:20%; float:left;">
								   <input name="quote_search" type="submit" style="background:#19446F;border-radius: 5px !important;border-top-left-radius: 0 !important;border-bottom-left-radius: 0 !important;" class="btn btn-primary btn-lg pull-left" value="Search">
								</div>
							</div>

							<div class="col-sm-12 col-md-2 col-xs-12 padding_0 sb-by" style="margin-top: 0;">
								
								
								<div class="" style="border-radius: 5px !important;">
								<a itemprop="url" href="{{ URL::to('get-quotations') }}">
									<div class="btn btn-primary" style="padding-top: 12px;border-radius: 5px !important;padding-bottom: 12px; text-align:center; margin-top: 0;">Submit Buying Request</div>
								</a>
								</div>
							</div>
							</form>
						
					</div>
								<div class="col-sm-12 col-lg-12 col-md-12 padding_0">
										<div class="col-sm-9 col-lg-9 col-md-9 padding_0" style="background: #fff;">
													<div id="product-category">
															
														
													</div>
												
											</div>
													<div class="col-sm-3 col-lg-3 col-md-3">
														
													</div>
										</div>

  									</div>
  									</div>
  								
  								</div>
  							</div>
  								
  								
  						
  		</div>
					
</div>
<section  style="background: #3B7092">
	<div class="container">
			<div class="row padding_0">
				<div class="group-title" style="background:#fff;text-transform: none; margin-bottom: 0;margin-top: 0;">
                    Recommmended items with ready instant quotes:
                </div>
			</div>
			<div class="row padding_0" style="background: #fff;margin-bottom: 10px;padding-bottom: 5%">
				<div class="col-sm-12 col-lg-12 col-md-12" style=" background-color: #fafafa; border-right: 1px solid #ddd; padding: 0; border-bottom: 1px solid #ddd; ">
				@if($quotations)
				@foreach($quotations as $quotation)
				@if($quotation->inq_products_images)

					<div class="col-sm-3 col-md-3 col-lg-3 col-xs-6" style="border:1px solid #ddd; border-right:0 none; border-bottom:0 none;">
						<div class="product-box sup-head-col" onMouseOver="show_getquation_bar()" onMouseOut="hide_getquation_bar()" style="width: 100%; border: 0 none;background-color: #fff;" itemscope itemtype="http://schema.org/Product">
		                       <div class="cat-product-img-box">
		                              <a itemprop="url"      href="{{ URL::to('product-sourcing/view',$quotation->id,is_secured()) }}"><img title="{{$quotation->inq_products_description->name ?? ''}}" itemprop="image"  style="height: 225px;max-height: 220px;" class="product-fassion-img" src="{{ URL::to(''.$quotation->inq_products_images->image) }}" alt="{{$quotation->inq_products_description->name ?? ''}}"></a>
		                       </div>
		                       <a itemprop="url"      href="{{ URL::to('product-sourcing/view',$quotation->id,is_secured()) }}">
		                        @if($quotation->inq_products_description)
		                             <div class="cat-item-title" itemprop="name" >{{ substr($quotation->inq_products_description->name, 0, 40) }}</div>
		                        @else
	                            @endif

		                       </a>
		                       <div class="dollar-price" style="text-align: center;"><span class="dollar">US ${{ $quotation->p_price->product_FOB }}</span> @if($quotation->inq_unit_id) 
		                       	/{{ $quotation->inq_unit_id->name }}
		                       @else
		                   		@endif
		               </div>
		                       <div class="item-views" style="text-align: center;"><span class="online-view"><?php $rand=rand(500,3); echo $rand; ?>+ </span>views 
		                        
		                       </div>
		                      <a href="{{ URL::to('product-sourcing/view',$quotation->id,is_secured()) }}">
		                       <div class="btn-quet">
		                       		<div class="ui2-button-primary">Get Instant Quotes</div>
		                       </div>  
		                       </a>                  
		                </div>
						
					</div>
					@endif

				@endforeach


				@endif
		
		</div>
		{!! $quotations->render() !!}
	</div>
</div>
</section>			
<br>
<div class="container">
@stop
@section('scripts')

<script type="text/javascript">


	$(document).ready(function(){
		var flg = false;
		    $(".sb-by-cat").hover(function(){
		    	if(!flg){
		    		$("#sourcing-list").css("display", "block");
		    		flg=true;
		    	}else{
		    		$("#sourcing-list").css("display", "none");
		    		flg=false;
		    	}
		        
		    });
		    
		});
	$('[name="quote_search"]').click(function(e){
		e.preventDefault();
		var key = $('input[name="quote_key"]').val();
		var url = window.location.origin+'/Sourcing/Requests/info/category==0+..+country==0+..+key=='+key+'+..+order==0';
        window.location.href = url;
	});

	$('input[name="quote_key"]').keyup(function(event){
	    if(event.keyCode == 13){
	        $('[name="quote_search"]').click();
	    }
	});

</script>
@stop 