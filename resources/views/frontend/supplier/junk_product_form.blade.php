@extends('fontend.master3')
	@section('content')
<div class="container">
	<div class="row">
	<h2>Manage Junk Product</h2>
	  {!! Form::open(array('url' => 'foo/bar','class'=>'form-inline','role'=>'form')) !!}
	  <!-- <form class="form-inline" role="form"> -->
		  <div class="form-group">
		    <label for="product_id">Product Id:</label>
		    <input type="number" class="form-control check_integer" id="product_id">
		  </div>
		  <button type="submit" class="btn btn-default delete_product">Delete</button> 
		  <span id="product_id_delete_result"><img style="width: 20px; display: none;" src="{!! URL::to('uploads/page-loader.gif') !!}"></span>
	  <!-- </form> -->
	  {!! Form::close() !!}
	  <br>
	  <div><button type="button" class="btn btn-default delete_junk_product">Delete all junk products</button> 
	  <span id="junk_products_delete_result"><img style="width: 20px;display: none;" src="{!! URL::to('uploads/page-loader.gif') !!}"></span></div>
	  <br>
	  <div><button type="button" class="btn btn-default delete_all_images">Delete all junk images</button> <span id="junk_images_delete_result"><img style="width: 20px;display: none;" src="{!! URL::to('uploads/page-loader.gif') !!}"></span></div>
	  <br>
	  <h2>Manage Company/User</h2>
	  {!! Form::open(array('url' => 'foo/bar','class'=>'form-inline','role'=>'form')) !!}
		  <div class="form-group">
		    <label for="company_id">Company Id:</label>
		    <input type="number" class="form-control check_integer" id="company_id">
		  </div>
		  <button type="submit" class="btn btn-default delete_company">Delete</button> 
		  <span id="company_id_delete_result"><img style="width: 20px; display: none;" src="{!! URL::to('uploads/page-loader.gif') !!}"></span>
	  {!! Form::close() !!}
	  <br>
	  {!! Form::open(array('url' => 'foo/bar','class'=>'form-inline','role'=>'form')) !!}
		  <div class="form-group">
		    <label for="user_id">User Id:</label>
		    <input type="number" class="form-control check_integer" id="user_id">
		  </div>
		  <button type="submit" class="btn btn-default delete_user">Delete</button> 
		  <span id="user_id_delete_result"><img style="width: 20px; display: none;" src="{!! URL::to('uploads/page-loader.gif') !!}"></span>
	  {!! Form::close() !!}
	</div>
</div>
@stop
@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){

		$(document).on({keyup:function(event){
	    	// Allow: backspace, delete, tab, escape, and enter
	        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
	                // Allow: Ctrl+V
	                (event.ctrlKey == true && (event.which == '118' || event.which == '86')) ||  
	                // Allow: Ctrl+c
	                (event.ctrlKey == true && (event.which == '99' || event.which == '67')) || 
	                // Allow: Ctrl+A
	            (event.keyCode == 65 && event.ctrlKey === true) || 
	             // Allow: home, end, left, right
	            (event.keyCode >= 35 && event.keyCode <= 39)) {
	                 // let it happen, don't do anything
	                 return;
	        }
	    	var o=$(this);
  			o.val(o.val().replace(/[^\d]/g,""));
  			if (o.val().length > o.maxLength){
		      o.val(o.value.slice(0, o.maxLength))
  			}
	    }},'.check_integer');

		$(document).on({
			click:function(e){
			e.preventDefault();
			var product_id = $.trim($('#product_id').val());
			var base_url = window.location.origin;
			if(product_id == ''){
				alert ('Product id field is required');
			}else{
				if(isNaN(product_id)){
					alert ("Product id should be a number");
				}else{
					$('#product_id_delete_result img').show();
					$.post(base_url+ '/x_product/' + product_id,{'_token':'{{csrf_token()}}'}, function(r) {
						if(r == 'deleted'){
							$('#product_id_delete_result img').hide();
							alert ('Product deleted successfully');
						}else{
							alert (JSON.stringify(r));
						}
                    });
				}
			}
			
		}},'.delete_product');

		$(document).on({
			click:function(e){
			e.preventDefault();
			var _token = $('input[name="_token"]').val();
			$('#junk_products_delete_result img').show();
			$.get(window.location.origin + '/delete-junk-products', function(r) {
				if(parseInt(r) == 1){
					$('#junk_products_delete_result img').hide();
					alert ("All junk products deleted");
				}else{
					alert (JSON.stringify(r));
					$('#junk_products_delete_result img').hide();
				}
            });
		}},'.delete_junk_product');

		$(document).on({
			click:function(e){
			e.preventDefault();
			var data = 'all';
			$('#junk_images_delete_result img').show();
            $.get(window.location.origin + '/delete-junk-images', function(r) {
				if(parseInt(r) == 1){
					$('#junk_images_delete_result img').hide();
					alert ("All junk images deleted");
				}else{
					alert (JSON.stringify(r));
					$('#junk_images_delete_result img').hide();
				}
            });
		}},'.delete_all_images');

		$(document).on({
			click:function(e){
			e.preventDefault();
			var company_id = $.trim($('#company_id').val());
			var base_url = window.location.origin;
			if(company_id == ''){
				alert ('Company ID field is required');
			}else{
				if(isNaN(company_id)){
					alert ("Company ID should be a number");
				}else{
					$('#company_id_delete_result img').show();
					$.get(base_url+ '/delete-junk-company/manage-zone/'+company_id+'+..+company', function(r) {
						alert (JSON.stringify(r));
						$('#company_id_delete_result img').hide();
                    });
				}
			}
			
		}},'.delete_company');

		$(document).on({
			click:function(e){
			e.preventDefault();
			var user_id = $.trim($('#user_id').val());
			var base_url = window.location.origin;
			if(user_id == ''){
				alert ('User ID field is required');
			}else{
				if(isNaN(user_id)){
					alert ("User ID should be a number");
				}else{
					$('#user_id_delete_result img').show();
					$.get(base_url+ '/delete-junk-company/manage-zone/'+user_id+'+..+user', function(r) {
						alert (JSON.stringify(r));
						$('#user_id_delete_result img').hide();
                    });
				}
			}
			
		}},'.delete_user');
	});
</script>
@stop