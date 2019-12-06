@extends('frontend.layouts.about-us-topbar')

@section('own_styles')
<style>
	.hide_details{
		display:none;
	}
</style>
@stop
@section('content')
<div class="container">
 @if (Sentinel::check())
            <?php
              $role = App\Models\Role_user::where('user_id',Sentinel::getUser()->id)->first();
              $dashboard_route = ($role->role_id ==3) ? "company/dashboard" : 'buyer/dashbord';
            ?>
        @endif

<div class="row" style="padding-top: 1%;padding-bottom: 0.5%">
        <div class="col-lg-12 col-md-12 padding_0">
            <ul  style="margin-left: -2%;float: left;"><li style="float: left">
            <a itemprop="url" href="{{ URL::to($dashboard_route,null,is_secured())}}" style="color: #000">
            My Dashboard
            </a> <i class="fa fa-angle-right"></i> </li>
             <li style="float: left">
            <a itemprop="url" href="{{ URL::to('list/view/requested/sample/buyer',is_secured())}}" style="color: #000">
               <strong> Manage Sample Request</strong>
            </a> <i class="fa fa-angle-right"></i></li>
            <li style="float: left">
            <a itemprop="url" href="" style="color: #000">
               <strong> Details</strong>
            </a> <i class="fa fa-angle-right"></i></li>
            </ul>
            <ul style="float:right;margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
        <button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
      </ul>
        </div>
    </div>

<div class="row" style="margin-bottom:2%;">
<div class="col-xs-12 col-sm-2 col-lg-2 padding_0" style="">						
		@include('fontend.layouts.dashboard-aside')
							
	</div>
	<div class="col-md-10" style="padding-right: 0px">
<!-- 
	<div class="" id="">
		<p style="color: #06C;"><i class="fa fa-angle-double-left" aria-hidden="true"></i><a href="{-{ URL::to('Mybuying-Request',is_secured()) }-}" style="color: #06C;"> back to buying request</a></p>
	

	</div> -->
	
	<div class="item_sha" style="margin-bottom:2%;">
		<div class="row" style="margin: 0;    padding: 1%;">
				<div class="col-sm-2">
					<p style="font-size: 14px;color: #919191;margin-bottom: 0">Enquiry for:</p>
				</div>
				<div class="col-sm-12">
					
					<h1 class="qf-opt" title="" style="font-size: 20px; font-weight: 300; text-transform: ; color: #545c58;margin: 0 0px 10px;">
						<a href="">Inquiry Title</a> <span class="qf-show"><i class="fa fa-angle-down"></i><span>View More</span></span>
					</h1>
					

					<div class="inq_details hide_details" class="col-sm-12" style="margin-bottom:2%;padding: 0;">
						<div class="col-sm-3" style="margin-left: -1%;">
							<img style="height:229px;width:237px;" src="" alt="" />
						</div>
						<div class="col-sm-9">

							<p style="color: #999;">Quantity Required: 4 pcs </p>
							
							<p style="color: #999;">Required Supplier Location: Bangladesh</p>
							
							<p style="color: #999;">Preferred Unit Price: 232442</p>
							
							<p style="color: #999;">Expire After: 45/54/45</p>
							<!-- <p style="color: #999;">Shipping Terms:</p> -->
							<p style="color: #999;">Destination Port: port</p>
							
							<p style="color: #999;">Payment Terms: terms</p>
							

							<p style="font-size: 13px;color: #999;">Status : <b>Pending</b></p>
						</div>
					</div>
				</div>
				

				
				
		</div>
	</div>
	<div class="item_sha" style="padding-top: 0">
		<div class="row">
		
			<div class="col-sm-12" style="">
					
				

				<?php $show_mess_count = 1; ?>
				
				<div class="col-sm-12 padding_0  " style="margin-bottom:2%;">
				<div class="col-sm-12" style="border: 1px solid #FFE2B0;">
					<div class="col-sm-6" style="">
						<p style="margin-top: 10px">
						<a href="" type="button" class="btn btn-primary" style="margin-right: 5px">Edit</a>
						<a href="" type="button" class="btn btn-default" style="margin-right: 5px">Post Again</a>
						<a href="" type="button" class="btn btn-default" style="margin-right: 5px">Close</a>
						
					</div>
					<div class="col-sm-6" style="border-left: 1px dashed #FFE2B0;">
					</div>
				</div>
				
				<div class="col-sm-12" style="border: 1px solid #ffe2b0;">
					<div class="col-sm-12" style="margin-top:2%;">
							<p style="font-size: 13px;color:#333;">The supplier's response to your requirements:</p>
							<p style="font-size: 13px;color:#333;">messages......... </p>
					</div>
					<div class="col-sm-12">
						<p id="m_q">Product Name</p>
						<p style="font-size: 12px;color: #666;border-bottom: 1px dashed #E7E7E7;padding-bottom:10px;">Model Number: 786234</p>
					
						<div class="col-sm-12" style="margin-top:2%;margin-left: -3.5%;margin-bottom:2%;">
							<div class="col-sm-3" style="border-right: 1px dashed #E7E7E7;">
								<p>Shipping terms : </p>
							</div>
							<div class="col-sm-3" style="border-right: 1px dashed #E7E7E7;">
								
								<p>Port : Chittagong</p>
							</div>
							<div class="col-sm-3" style="border-right: 1px dashed #E7E7E7;">
								<p>Payment Terms: USD</p>
							</div>
							
						</div>
						<p style="">Quotation Valid Till: --/--/--</p>
						<div class="col-sm-12" style="border-top: 1px dashed #E7E7E7;margin-top:1%;">
							<div class="col-sm-6">
								quantity
								<p id="m_q1">s4234
								 </p>
							</div>
							<div class="col-sm-6">
								 	Unit Price:
								 	<p id="m_q1">FOB USD</p>
							</div>

						</div>
						<div class="col-sm-12" style="margin-top:2%;padding-bottom:20px;">
							<div class="col-sm-4">
								<a href="">
								<img class="thumbnail" style="height:232px;width:206px;" src="
								
								" alt="" /></a>
							</div>
							<div class="col-sm-8">
								<p>sample message</p>
								<?php $docs_found = 1; ?>
								
								
							</div>
						</div>
					</div>
				</div>



				
						<div class="col-sm-12" style="margin-top: 30px">
							<div class="col-sm-8">
								<p><span style="font-size: 14px;font-weight: bold;">dfgdg</span> --/--/--</p>
								<div style="border: 1px solid #5683A0;border-radius: 5px !important;background-color: #f0f8ff;padding:10px;">
									<p>message</p>
									
									
								</div>
							</div>
							<div class="col-sm-4"></div>
						</div>
				
					
				


				<div class="col-sm-12">
					
					<h1 style="font-size: 20px;font-weight: 400;color: #545c58;">Type your message here</h1>
					<input type="hidden" name="product_owner_id" value="">
					<div class="form-group">
					    <textarea class="form-control editors" id="message" name="message"></textarea>
					    
					</div>
					
					<button type="submit" class="btn btn-primary">Send</button>

				
					<br>
				</div>
				</div>
				
				

			</div>
		
		
		</div>
	</div>


</div>
</div>

@stop

@section('scripts')
<!-- <script src="{{asset('resources/assets/global/plugins/ckeditor/ckeditor.js')}}"></script> -->
@include('frontend.layouts.dashboard_aside_scripts')
<script type="text/javascript">
	
	$(document).ready(function(){

		setTimeout(function(){ $('.alert').hide(500) }, 5000);

		$('[show_quotation="{{$selected}}"]').css('background-color', 'aliceblue');

		$('.frontend_show').css('display','block');
		$('.backend_show').css('display','none');
		$('.hide_all').css('display','none');
		$('.quotation_line').css('background-color', 'white');
		$('[show_quotation="{{$selected}}"]').css('background-color', 'aliceblue');
		$('[show_quotation="{{$selected}}"]').children().children('.show_target').children('.frontend_show').css('display','none');
		$('[show_quotation="{{$selected}}"]').children().children('.show_target').children('.backend_show').css('display','block');
		var catch_class = $('[show_quotation="{{$selected}}"]').attr('show_quotation');
		$('.'+catch_class).css('display','block');

		$(document).on({click:function(){
			var target = $(this).attr('show_quotation');
			var url = window.location.origin+'/mysource_quotations/inq/'+''+'?s='+target;
			window.location = url;
		}},'.quotation_line');


		$(document).on({mouseover:function(){
			$(this).parent().parent().children('.toolTip').css('display','block');
		}},'.tooltip_action');
		$(document).on({mouseout:function(){
			$(this).parent().parent().children('.toolTip').css('display','none');
		}},'.tooltip_action');
		// $(document).on({mouseover:function(){
		// 	$(this).show();
		// }},'.toolTip');
		// $(document).on({mouseout:function(){
		// 	$(this).hide();
		// }},'.toolTip');

		$(document).on({

    		click: function(e) {
    			e.preventDefault();
    			var base_url = window.location.origin;
    			var supplier_id = $(this).data('supplier_id');
    			var product_id = $(this).data('product_id');
    			var url = base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
                window.location.href = url;
    		}

    	}, '.contact_supplier');

	    /*CKEDITOR.replace('message',
	    {
	        extraPlugins: 'uploadimage,image2',
			height: 300,

			// Upload images to a CKFinder connector (note that the response type is set to JSON).
			uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

			// Configure your file manager integration. This example uses CKFinder 3 for PHP.
			filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
			filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

			// The following options are not necessary and are used here for presentation purposes only.
			// They configure the Styles drop-down list and widgets to use classes.

			stylesSet: [
				{ name: 'Narrow image', type: 'widget', widget: 'image', attributes: { 'class': 'image-narrow' } },
				{ name: 'Wide image', type: 'widget', widget: 'image', attributes: { 'class': 'image-wide' } }
			],

			// Load the default contents.css file plus customizations for this sample.
			contentsCss: [ CKEDITOR.basePath + 'contents.css', 'assets/css/widgetstyles.css' ],

			// Configure the Enhanced Image plugin to use classes instead of styles and to disable the
			// resizer (because image size is controlled by widget styles or the image takes maximum
			// 100% of the editor width).
			image2_alignClasses: [ 'image-align-left', 'image-align-center', 'image-align-right' ],
			image2_disableResizer: true



	    });

	    $('.editors').each(function(){
	    	alert($(this).attr('id'));
		    CKEDITOR.replace( $(this).attr('id') );
		});*/

		$('.editors').jqte();
	    // settings of status
	    var jqteStatus = true;
	    $(".status").click(function(){
		    jqteStatus = jqteStatus ? false : true;
		    $('.jqte-test').jqte({"status" : jqteStatus})
	    });

	    var i = false;

	    $('.qf-show').click(function(){
	    	$(this).parent().toggleClass('qf-opt');
	    	$('.inq_details').toggleClass('hide_details');
	    	if(i){
	    		$(this).find('.fa').removeClass('fa-angle-up');	
	    		$(this).find('.fa').addClass('fa-angle-down');	
	    		$(this).find('span').text('view more');	
	    		i=false;

	    	}else{
	    		$(this).find('.fa').removeClass('fa-angle-down');	
	    		$(this).find('.fa').addClass('fa-angle-up');	
	    		$(this).find('span').text('view less');	
	    		i=true;
	    	}
	    	
	    });

	});
</script>
@stop