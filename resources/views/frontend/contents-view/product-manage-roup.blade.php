@extends('fontend.master3')
@section('content')

<div class="row padding_0;" style="background:#fff; margin-top:20px;border-top: 1px solid #d1dbe8;">
		<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
					<div class="col-sm-2 col-md-2 col-lg-2 padding_0">
								<div class="manager-wrap">
										<div class="navigation-menu-manager-gg">
											<div class="m-t-wrap">
												<span class=""><i class="fa fa-file-text-o" aria-hidden="true" style="font-size:20px; padding-right:15px;"></i>Products</span>
											</div>
											
										</div>
									
								</div>
								<div class="n-menu-left-box">
											<ul class="n-menu-left-list">
													<li>
                                    					<div class="group-title-mm" data-id="my_products"> My Products</div>
                                					</li>
                                					<li><a href="#"> Display a new product</li>
                                					<li><a href="#">Smart Product Posting</li>
                                					<li><a href="#">All Products</li>
                                					<li><a href="#">Manage Photo Bank</li>
                                					<li><a href="#">Manage Smart Editing Navigations Templates</li>
                                					<li><a href="#">Group & Sort Products</li>
                                					<li><a href="#">Trash</li>
                                					<li><a href="#"> Listing Optimization Tools</li>
                                					<li><a href="#"> Listing Optimization Tools</li>
                                					<li><a href="#">Product Listings</li>
                                					<li><a href="#">Search Tool for Product Ranking</li>
											</ul>
								</div>
					</div>
					<div class="col-sm-10 col-md-10">
								<div class="page-wrapper">
											<h1 class="h1-guide" id="guide">Manage and Sort Groups</h1>
											<div class="dpl-board-notice" id="groupInfo" style="display: block;">
												Total Groups: <span class="alert-a" id="groupCount">0</span>,
												Grouped Product(s): <span class="alert-a" id="groupProductCount">0</span>,
												Ungrouped Product(s): <span class="alert-a" id="ungroupProductCount">2</span>
											    <div id="dataChangeNotice">Your recent changes will be shown in your Company Website within 24 hours. ( We just display online products here.  )</div>
											</div>
											<div class="short-demo">
												
											</div>
										
											<!-- <div id="#manag-2">
											<div class="productGuideInner">
													<h4 id="productGuideTitle">Two ways of sorting products, have a try!</h4>
													
													<div id="productGuideContent">
													<div id="productGuideImageWrapper">
													<div id="#productGuideImage">
													<img src="{!! asset('assets/fontend/bdtdc-images/product_sort_guide.jpg',is_secured()) !!}" id="productGuideImage" alt="">
													</div>
													<div id="productGuideIKnowWrapper"><a href="#iknow" id="productGuideIKnow">OK</a></div>
												</div>
												
											</div>
										</div>
										</div> -->
									
									
											<ul class="group-sort-gg">
											    <!-- <li class="active"><a data-toggle="tab" href="#home">Home</a></li> -->
											    <li id="manage-grp">Manage and Sort Group</li>
											    <li id="Manage-pro">Manage and Sort Products</li>
									  		</ul>
									  		 <div class="Group-pro-ad-edit">
									   
									    		<div id="manage-1">
						    						<div class="listBatch"><div class="nonselect">
						    						<!-- <form action="{{URL::to('product/manage_product_group')}}" method="post">
													{!! csrf_field() !!} -->
													<input type="text" name="name" placeholder="name">
														<input type="submit" value="Add Group">
													<!-- </form> -->
																<input id="btnRenameGroup" type="submit" class="dpl-btn-gray-smaller dpl-font-black" value="Rename">
																<input id="btnSaveGroupOrder" type="submit" class="dpl-btn-gray-smaller dpl-font-black" value="Save">
																<input id="btnSaveSetting" type="submit" class="dpl-btn-gray-smaller dpl-font-black" value="Sort Product Settings">
															</div>
															</div>
															<div id="tableGroup" class="dpl-table AE-datatable">
																<div class="AE-datatable-head">
																  <table cellpadding="0" cellspacing="0" border="0" width="100%">
																		<tbody>
																			<tr>
																				<th id="tableGroup_head_groupName" class="col-group-name dpl-th-left" width="350">Group Name(Number of Products)
																				</th>
																				<th id="" class="col-add-sub-group" width="100">Add Sub-Group</th>
																				<th id="" class="col-delete-group" width="50">Delete</th>
																				<th id="" class="col-manage-group" width="110">Manage Products</th>
																				<th id="" class="col-order-group dpl-th-right" width="88">Sort
																				<img src="{!! asset('assets/fontend/bdtdc-images/minisite_question.gif',is_secured()) !!}" >
																				</th>
																				</tr>
																				</tbody>
																			</table>
																	</div>

																	<div class="AE-datatable-list level-1" id="add-pro" style="display: none;">
																		<table cellpadding="0" cellspacing="0" border="0">
																			<tbody>
																				<tr>
																				<td id="" class="" width="220">
																				<input maxlength="50" id="" name="groupName" type="text">
																				</td>
																				<td id="" class="" width="100"><div class="AE-edittable-button">
																				   <input type="submit" value="OK"><input type="submit" onclick="hide_in_field()" value="Cancel">
																				</div></td>
																				
																				</tr>
																				</tbody>
																				</table>
																				
																	</div>
															</div>
															<!-- <div class="listBatch listBatch-reverse">
																<div class="nonselect">
																	<input id="" type="button" class="dpl-btn-gray-smaller dpl-font-black" onclick="add_group()" value="Add Group">
																	<input id="" type="button" class="dpl-btn-gray-smaller dpl-font-black" value="Rename">
																	<input id="" type="button" class="dpl-btn-gray-smaller dpl-font-black" value="Save">
																	<input id="" type="button" class="dpl-btn-gray-smaller dpl-font-black" value="Sort Product Settings">
																</div>
															</div> -->
									    			</div>
									    			
									    			<div id="manage-2" style="display:none;">
														<div class="listBatch" id="productTabTopListBatch"><div class="nonselect">
														<input id="btnAddProduct" type="button" class="dpl-btn-gray-smaller dpl-font-black" value="Add Products" style="display: none;">
														<input id="btnSwitchGroup" type="button" class="dpl-btn-gray-smaller dpl-font-black" value="Change Group">
														<input id="btnSaveProductOrder" type="button" class="dpl-btn-gray-smaller dpl-font-black" value="Save">
														<div id="currentGroup">
															<label>Current Group: </label>
															<span class="matrix-fake-select" id="selectCurrentGroup" title="All Groups">
																<span>All Groups</span>
															</span>
																</div>
															</div>
														</div>
														<table class="table table-striped">
														    <thead>
														      <tr>
														        <th><input type="checkbox" name=""></th>
														        <th>No</th>
														        <th>Photo</th>
														        <th>Product Name and Model Number</th>
														        <th>Sort</th>
														      </tr>
														    </thead>
														    <tbody>
														      <tr>
														        <td width="35"><input type="checkbox" name=""></td>
														        <td width="120">
														        <div style="line-height:60px;">
														        	<div class="row-order-number" style="cursor: pointer; display: block;">1</div>
														        		<div class="row-order-editor" style="display:none;"><input type="text" style="width:40px; height:20px; ">
														        		<input style="height:20px; " type="button" value="OK" style="margin:0;padding:0;">
														        		</div>
														        		</div>
														        	</td>
														        <td width="80">
														        	<img src="{!! asset('assets/fontend/bdtdc-images/Tshart.jpg_100x100.jpg',is_secured()) !!}" width="64" height="64">
														        </td>
														        
														        <td id="tableProduct_0_3" class="col-product-name AE-datatable-row-0 AE-datatable-col-3" width="380"><a href="/product/product_detail.htm?id=50024431900" title="Tshart">Tshart</a><br><br><span class="matrix-group-level" title="ungrouped">Group: ungrouped</span>
														        </td>
														        <td id="tableProduct_0_4" class="col-order-product AE-datatable-row-0 AE-datatable-col-4" width="135"><input id="btn-sort-tableProduct-0" type="button" value="Sort Product" class="dpl-btn-gray-smaller dpl-font-black"></td>
														        
														      </tr>
														      <tr>
														        <td width="35"><input type="checkbox" name=""></td>
														        <td width="120">
														        <div style="line-height:60px;">
														        	<div class="row-order-number" style="cursor: pointer; display: block;">2</div>
														        		<div class="row-order-editor" style="display:none;"><input type="text" style="width:40px; height:20px; ">
														        		<input style="height:20px; " type="button" value="OK" style="margin:0;padding:0;">
														        		</div>
														        		</div>
														        	</td>
														        <td width="80">
														        	<img src="{!! asset('assets/fontend/bdtdc-images/efun.jpg_100x100.jpg',is_secured()) !!}" width="64" height="64">
														        </td>
														        
														        <td id="tableProduct_0_3" class="col-product-name AE-datatable-row-0 AE-datatable-col-3" width="380"><a href="/product/product_detail.htm?id=50024431900" title="Tshart">efun</a><br><br><span class="matrix-group-level" title="ungrouped">Group: ungrouped</span>
														        </td>
														        <td id="tableProduct_0_4" class="col-order-product AE-datatable-row-0 AE-datatable-col-4" width="135"><input id="btn-sort-tableProduct-0" type="button" value="Sort Product" class="dpl-btn-gray-smaller dpl-font-black"></td>
														        
														      </tr>
														    </tbody>
														  </table>
														  <div class="listBatch listBatch-reverse">
													<div class="nonselect">
										    			<input id="btnAddProductR" type="button" class="dpl-btn-gray-smaller dpl-font-black" value="Add Products" style="display: none;">
										    			<input id="btnSwitchGroupR" type="button" class="dpl-btn-gray-smaller dpl-font-black" onclick="change_group()" value="Change Group">
										    			<input id="btnSaveProductOrderR" type="button" class="dpl-btn-gray-smaller dpl-font-black" value="Save">

														<div class="dpl-pagenav" style="float: right; margin: 0pt 10px 0pt 0pt; *margin-top:-20px;">
										                    <a href="javascript:void(0)" id="pageSize10" data-spm-anchor-id="0.0.0.0" class="bp-current">10</a>
										                    <a href="javascript:void(0)" id="pageSize30" data-spm-anchor-id="0.0.0.0">30</a>
										                    <a href="javascript:void(0)" id="pageSize50">50</a>
															<input type="hidden" id="pageSize" value="10">
										                </div>

													</div>
												</div>
												<div id="select_group_select_group_instance" style="position: absolute; display: none; z-index: 997; height: auto; width: 330px; left: 438px; top: 410px; background:#fff; border:1px solid #999;" class="sg-wrapper">
												    <div style="padding: 0px 8px; border-bottom-width: 1px; border-bottom-style: dotted; border-bottom-color: rgb(198, 215, 233); cursor: default;">
													
													  <button class="add_field_button" style="float:right;">Add Group</button> 
													
													<div style="padding: 4px 0px; cursor: default;">All Groups</div></div>
													<div class="input_fields_wrap">
													    
													    <div><input type="text" name="mytext[]"></div>
													</div>
													<div style="overflow-x: auto; overflow-y: scroll; height: 200px;"><ul class="sg-list-wrapper" style="margin: 0px; padding: 0px; width: 260px;"></ul>
													<div class="ungrouped-wrapper sg-group-selected" style="background:#4E92BF; padding:6px 6px;"><a class="ungroup" href="javascript:;" data-spm-anchor-id="0.0.0.0" style="color:#fff;">Ungrouped</a></div></div>
													<div style="text-align: center; padding: 5px 0px;"><input type="button" value="Yes" class="dpl-btn" style="margin-right: 5px; cursor: pointer;"><input type="button" onclick="close_group()" value="No" class="dpl-btn-gray" style="margin-left: 5px; cursor: pointer;">
													</div>
												</div>
											<div class="productGuideInner">
													<h4 id="productGuideTitle">Two ways of sorting products, have a try!</h4>
													
													<div id="productGuideContent">
													<div id="productGuideImageWrapper">
													<div id="#productGuideImage">
													<img src="{!! asset('assets/fontend/bdtdc-images/product_sort_guide.jpg',is_secured()) !!}" id="productGuideImage" alt="">
													</div>
													<div id="productGuideIKnowWrapper"><a href="#iknow" id="productGuideIKnow">OK</a></div>
												</div>
												
													</div>
												</div>
									    	</div>
									    			
									    	</div>
								</div>
					</div>
		</div>
<!-- 

		@foreach($supplier_group as $data)
	@if($data)
	<p>Group Name: {{$data->name}}</p>
	@endif
	@if($data)
@if($data->company_group)
	
	@if($data->company_group->name_string)
	<p>Company Name: {{$data->company_group->name_string->name}}</p>
	@endif
@endif
	@endif


	@if($data)
	@if($data->BdtdcSupplierProductGroups)
<p>product Name: {{$data->BdtdcSupplierProductGroups->product_name->name}}</p>
	@endif

	@endif
	
@endforeach -->

		
			<form action="{{URL::to('product/manage_product_group')}}" method="post">
				<div class="col-sm-12" id="item_sha" style="margin-top:2%;margin-bottom:2%;border:1px solid #DDD;">
			{!! csrf_field() !!}
				<input type="hidden" name="company_id">
				<input type="text" name="name" placeholder="name">
				<input type='file' name='image' style="border:1px solid #DDD;width: 100%;">
				<input type="submit" value="Save Group">
				</div>
			</form>
			
			<div class="col-sm-12">
				<div class="col-sm-4">
					@foreach($group as $g)
					<input type="text" value="{{$g->name}}">
					<a href="{{ URL::to('product/manage_product_group_edit',$g->id,is_secured()) }}" class="btn btn-default">Edit</a>
					<img style="height:70%;width:100%;" src="{{ URL::to('banner-images',$g->image,is_secured()) }}" alt="" />
					@endforeach
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