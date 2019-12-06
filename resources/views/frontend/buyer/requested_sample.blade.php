@extends('fontend.master-dashboard')
@section('page_css')
    <link property='stylesheet' href="{!! asset('css/dashboard.css',is_secured()) !!}" rel="stylesheet">
     <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/buyer-bdtdc.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/why-bdtdc.css',is_secured()) !!}" rel="stylesheet">
    <link property='stylesheet' rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" media="screen" data-name="skins">
  @endsection
@section('own_styles')
<style type="text/css">
	.buying-line2{
		padding-left: 0;
	    padding-top: 10%;
	    padding-bottom: 5%;
	}
	.add-c{
		border: 0 none; width: 110px;position: relative;
	}
	.add-p .fa{padding:0;}
	.add-p {
	    width: 110px;
	    display: block;
	    padding-left: 0;
	    text-align: center;
	    border: 1px solid #ddd;
	    border-radius: 10px !important;
	}
	span.add-details-list {
	    display: none;
	    position: absolute;
	    top: 10px;
	    border-radius: 10px !important;
	    width: 100%;
	    left: 0px;
	    z-index: 999;
	    border: 1px solid #ddd;
	    background: #fff;
	    transition: all .3s ease;
	}
	span.add-details-list ul li a{
		display: block;
		padding: 3px 0;
		padding-left: 15px; 

	}
	.add-c:hover span.add-details-list{
		display: block !important;
		top: 0 !important;
		transition: all .3s ease;
	}
	span.add-details-list ul li a:hover{
		background: #ddd;
	}
</style>
@endsection
@section('content')
<div class="container">
	<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;">
                        <li class="top-path-li"><a href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"><a href="{{URL::to('company/dashboard')}}" class="top-path-li-a"> Dashboard <i class="fa fa-angle-right top-path-icon"></i></a></li>

                        <li class="top-path-li"><a href="" class="top-path-li-a"> Sample manage <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                        
                    </ul>
            </div>
    
  </div>
	
	<div id="row padding_0" style="margin-top:2%;">
		<div class="col-sm-12 padding_0">
			<div class="col-sm-2 padding_0">
				@include('fontend.layouts.dashboard-aside')


			</div>

			

			<div class="col-sm-10">
				
				
				<div class="col-sm-12">
					
					<p style="font-size: 20px;">Sample request list</p>
					<!-- <div class="col-sm-2" style="">						
						<select name="list" form="">
						  <option value="">All</option>
						</select>
					</div> -->
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>Sample Name</th>
                <th>Ordered By</th>
                <th>Delivery date </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        	@if(count($list)>0)
					@foreach($list as $l)
					<tr>
						<td>
							{{$l->id}}
						</td>
						<td>
							@if($l->request_product)
								{{$l->request_product->product_name}}
							@endif
						</td>
						<td>
							@if($l->buyer_company)
											@if($l->buyer_company->name_string)
											<a href="">{{$l->buyer_company->name_string->name}}</a>
											@else
											<a href="">no buyer company name</a>
											@endif
										@else
											<a href="">no buyer company</a>
										@endif
						</td>
						<td>
							{{ date('Y-m-d', strtotime($l->Expected_Date_of_Arriva))}}
						</td>
						
						<td>
							<a href=""> <i class="fa fa-eye" aria-hidden="true" style="font-size: 20px"></i> </a>
							
							<p></p>
							
						</td>
						<!-- <div class="col-sm-2" style="border-right:1px solid #DDD;height: 62px;text-align:center;">
							<a href=""  class="btn btn-primary" style="margin-top: 6.5%;border-radius: 5px !important;">View</a>
						</div> -->
					</tr>
					@endforeach					
				@endif           
        </tbody>
    </table>

					

				</div>
				
				
		    </div>

	</div> 
</div>

	@stop
	@section('scripts')
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	@include('frontend.layouts.dashboard_aside_scripts')
	<script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable();
	} );
	</script>	
	@stop

