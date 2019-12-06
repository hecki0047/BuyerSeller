@extends('fontend.master-dashboard')
@section('page_css')
    <link property='stylesheet' href="{!! asset('css/dashboard.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/why-bdtdc.css',is_secured()) !!}" rel="stylesheet">

  @endsection
@section('content')
<div class="container">
<div class="row padding_0;" style="background:#fff; margin-top:20px;border-top: 1px solid #d1dbe8;">
		<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
					<div class="col-sm-2 col-md-2 col-lg-2 padding_0">
						@include('fontend.layouts.dashboard-aside')
					
					</div>
					<div class="col-sm-10 col-md-10">
								<div class="page-wrapper">
											<h1 class="h1-guide" id="guide">Edit your product group :</h1>
											<div class="dpl-board-notice" id="groupInfo" style="display: block;">
												Total Groups: <span class="alert-a" id="groupCount">{{$count}}</span>,

											    <div id="dataChangeNotice">Your recent changes will be shown in your Company Website within 24 hours. ( We just display online products here.  )</div>
											</div>
											
								
									  		 <div class="Group-pro-ad-edit">
									   
								    		<div id="manage-1">
								    			
												<form action="{{ URL::to('product/manage_product_group_update',$edit_group->id,is_secured()) }}" method="post" enctype="multipart/form-data">
												{!! csrf_field() !!}
												<div class="" id="">
													
													<div class="table-responsive">
													<table class="table table-striped table-bordered table-hover" id="sample_1">
													<thead>
														<tr class="" style="border:1px solid #DDD;">
															<th class="">Image</th>
															<th class="">Show Image</th>
															<th class="">Name</th>
															<th>Sort</th>
															<th>Active</th>
															<th class="">Edit</th>
														</tr>
													</thead>
														
														<tr class="">
															<td class="">
																@if(trim($edit_group->image) != '')
																<img style="height:100px;width:100px;" src="{{ URL::to('public/banner-images',$edit_group->image) }}" alt="" />
																@else
																<img style="height:100px;width:100px;" src="{{ URL::to('public/assets/default-image_450.jpg') }}" alt="" />
																@endif
																<p>Change image: <input type='file' name='image' style="border:1px solid #DDD;"></p>
															</td>
															<td style="text-align: center;">
																<label><input type="checkbox" name="show_image" {{$edit_group->show_banner==1?'checked':''}}></label>
															</td>
															<td class="">
																<input type="text" name="name" value="{{$edit_group->name}}" style="border: 1px solid #DDD;height: 43px;width: 234px;padding-left: 2%;font-size: 19px;" required>
															</td>
															<td class="">
																<input type="number" name="sort" style="border: 1px solid #DDD;height: 43px;width: 50px;padding-left: 2%;font-size: 19px;text-align: center;" value="{{$edit_group->sort}}" required>
															</td>
															<td style="text-align: center;">
																<label><input type="checkbox" name="active_group"  {{$edit_group->active==1?'checked':''}}></label>
															</td>
															<td class="" >
																<input type="submit" value="Update" class="btn btn-primary">
															
															</td>
														</tr>
														
													</table>
													</div>
												</div>
												</form>

									    			</div>
									    			
								    		
									    			
							    	</div>
								</div>
					</div>
		</div>

</div>
@stop
 @section('scripts')
        <script type="text/javascript">
        function add_group() {
		   document.getElementById('add-pro').style.display = "block";
		}
		function hide_in_field(){
		   document.getElementById('add-pro').style.display = "none";
		}
		function change_group(){
		   document.getElementById('select_group_select_group_instance').style.display = "block";
		}
		function close_group(){
		   document.getElementById('select_group_select_group_instance').style.display = "none";
		}
		$(document).ready(function(){
		      $("#Manage-pro").click(function(e){
		      	e.preventDefault();
		      	$("#manage-1").hide();
		        $("#manage-2").show();
		    });
		      $("#manage-grp").click(function(e){
		      	e.preventDefault();
		      	 $("#manage-1").show();
		        $("#manage-2").hide();
		    });
		});

		$(document).ready(function() {
    var max_fields      = 20;
    var wrapper         = $(".input_fields_wrap"); 
    var add_button      = $(".add_field_button"); 
    
    var x = 1; 
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++; 
            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); 
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ 
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
		
// 		function manage_product(){
// 		    document.getElementById('manage-2').style.display = "block";
// 		}
		// function manage_group(){
		// 	document.getElementById('manage-2').style.display = "none";
		//    document.getElementById('manage-1').style.display = "block";

		// }
		
 </script>
					
   @stop