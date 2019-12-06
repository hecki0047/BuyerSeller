@extends('mobile-view.layout.master_m')
    @section('content')
 <section>
 <div class="container">
<div class="row padding_0" style="background: #fff;">
	<div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:10px;">
		<div id="srch_product_pp">

            <div style="display: block; clear: both; position: relative;overflow: hidden;font-weight: normal;" itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction">
		        <div class="col-md-12 col-sm-12" style="padding:0px">
			       <form  class="form form-horizontal" itemprop="target"  action="{!!URL::to('search/product-mobile',null,is_secured())!!}" method="get">
						
							<div class="col-xs-12" style="margin-bottom: 10px;">
								<!-- <input itemprop="query-input" style="height:46px;border-radius: 0px!important;min-width: 100px;" name="search" class="form-control all_search_options" type="text" value="products" required="required" /> -->
						       <select style="height:46px;width:100%;" class="form-control all_search_options" name="search">
								  <option value="products">Products</option>
								  <option value="suppliers">Suppliers</option> 
							   </select>
						     
							</div>
							<div class="col-xs-12" style="margin-bottom: 10px;">
								 <input itemprop="query-input" style="height:46px;border-radius: 0px!important;min-width: 100px;" name="key" class="form-control search_product_key" type="text" placeholder="What are you looking for..." required="required" />

							</div>
							<div class="col-xs-12" style="margin-bottom: 10px;">
				        		<input itemprop="query-input" type="submit" style="background:#19446F;border-radius: 0px !important;min-width: 100%;" class="btn btn-primary btn-lg pull-left all_search_product" value="Search" />
				    
							</div>
					   
					</form>
				</div>
			</div>
		
		</div>
	</div> 
</div>
</div>
</section>
<section>
<div class="container">
<div class="row padding_0">
		
                @if($all_category)
                    @foreach($all_category as $data)
    			    <div class="sb_pd_list">
                        <a href="{{URL::to('sub-category/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$data->name).'/'.$data->id)}}" class="pp-list-an">
                            {{$data->name}}
                        </a>
                    </div>
                    @endforeach
                @endif
	
   

					
	<div class="tab-content">
	</div> 
</div>
</div>
</section>

@stop
@section('scripts')
<script type="text/javascript">

 $(document).on({click:function(e){
    e.preventDefault();

    var base_url='{{URL::to("/")}}';
    // alert(base_url);
    var name_search= $('.search_product_key').val();
    // alert(name_search);

    var url=base_url+'/search/product-mobile?name_search='+name_search;
    window.location.href=url;
   }},'.all_search_product');
</script>
@stop