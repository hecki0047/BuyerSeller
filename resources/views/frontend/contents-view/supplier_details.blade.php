@extends('fontend.master2')
	@section('content')
<div class="row" style="margin-top:2%;">
	
	<div class="col-sm-12 padding_0">
		<div class="col-sm-3">country or region</div>
		
		<div class="col-sm-9" style="">
			@foreach($company as $c)
			<div class="col-sm-12 supplier_details padding_0" style="margin-top:1%;margin-bottom:1%;background-color:#fff !important;">

			{{$c->name_string->name}}
			@if($c)
			@if($c->main_products)
			
				<p>{{$c->main_products->product_name_1}}</p>
				<p>{{$c->main_products->product_name_2}}</p>
				<p>{{$c->main_products->product_name_3}}</p>
			
			@endif
			@endif
			@if($c)
			@if($c->users)
				<p>{{$c->users->first_name}} {{$c->users->last_name}}</p>
			@endif
			@endif
			</div>
			@endforeach


	
		</div>
		

	</div>
	
</div>


@stop
@section('scripts')

<script type="text/javascript">
			
</script>	
@stop