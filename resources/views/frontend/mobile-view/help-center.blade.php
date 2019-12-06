@extends('mobile-view.layout.master_m')
	@section('content')
	<div class="row paddin_0" style="background: #fff; margin-bottom: 28px; padding-bottom: 3%;">
			<div class="header-wrap-mess"><p class="cat-pr-list">All Buying Request</p></div>
			<div class="col-xs-12" style="padding-bottom: 30px; border-bottom: 1px solid #ddd;">
					<div class="type-box">
							<div class="type-tag cur">
								<p class="body1">Report Bugs</p>
							</div>	
					</div>
					<div class="type-box">
							<div class="type-tag cur">
								<p class="body1">Improve Features</p>
							</div>
					</div>
					<div class="type-box">
							<div class="type-tag cur">
								<p class="body1">Interface/Usability</p>
							</div>
					</div>
					<div class="type-box">
							<div class="type-tag cur">
								<p class="body1">Other</p>
							</div>
					</div>
			</div>
			<div class="col-xs-12">
						<div style="border-bottom: 1px solid #ddd; position: relative;">
							<textarea cols="30" rows="10" style="background: #fff; width: 100%; color: #333;text-align: left; max-height: 100%" placeholder="Please describe your issues or suggestions in detail.">
										
							</textarea>
							<div id="comment-watcher">
							<p id="comment-watcher-tip">20 Characters at least</p>
							<p id="comment-watcher-num" style="position: absolute;right: 10px;">0/255</p>
						   </div>
						</div>
						<div style="padding: 12px 0;">
							<form action="" method="post" style="height: 402px;">
								  <div class="form-group">
									<input type='file' />
								</div>
								
                              <div class="form-group">
							    <input style="border:0 none; border-bottom: 1px solid #ddd;" type="email" class="form-control" id="email" value="mislam629@gmail.com">
							  </div>
							  <button type="button" class="btn btn-primary" style="width: 100%; border-radius: 5px !important; position: absolute;bottom: 10px;">Submit</button>
							</form>
						</div>


			</div>
	</div>
@stop
@section('scripts')
<script type="text/javascript">
	$("input").change(function(e) {

    for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
        
        var file = e.originalEvent.srcElement.files[i];
        
        var img = document.createElement("img");
        var reader = new FileReader();
        reader.onloadend = function() {
             img.src = reader.result;
        }
        reader.readAsDataURL(file);
        $("input").after(img);
    }
});
</script>
@stop