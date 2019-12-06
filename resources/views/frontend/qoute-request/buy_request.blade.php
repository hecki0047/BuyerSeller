@extends('fontend.master_dynamic')
@section('page_css')
<link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/buyer-request-style.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('assets/fontend/css/select2.min.css',is_secured()) !!}" rel="stylesheet">
<style>
   #selectedFiles img {
      max-width: 100px;
      max-height: 100px;
      float: left;
      margin-bottom:10px;
      border: 1px solid #D2D2D2;
   }
   .close {
      float:left;
      display:inline-block;
      padding:2px 5px;
      background:#ccc;
   }
   .close:hover {
      float:left;
      display:inline-block;
      padding:2px 5px;
      background:#ccc;
      color:#fff;
   }
</style>
@endsection
@section('content')
<div>
   <div>
      <h1 class="byuer-title" style="color: #255E98;">Complete your Buying Request</h1>
   </div>
   <div class="row">
      @if (count($errors) > 0)
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
      @endif
      <form action="{{ URL::to('postBuyRequest',null,is_secured()) }}" class="form others_filter_form" enctype="multipart/form-data" method="post">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <input type="hidden" name="pid" value="{{ $id }}">
         <div class="col-md-12 col-sm-12 padding_0" style="border:1px solid #ddd; background-color:#fff; padding-bottom:5%; margin-bottom:10px;padding-right:5%;">
            @php
				$Inquiry_name = 'not available';
				$inquiry_image = URL::to('uploads/no_image.jpg');
				@endphp
				@if($quotations->inq_products_description)
					@php $Inquiry_name = $quotations->inq_products_description->name; @endphp
				@elseif($quotations->inquery_title)
					@php $Inquiry_name = $quotations->inquery_title; @endphp
				@endif
				@if($quotations->inq_products_images)
					@php $inquiry_image = URL::to($quotations->inq_products_images->image); @endphp
				@elseif($quotations->inq_docs_one)
					@php $inquiry_image = URL::to('buying-request-docs',$quotations->inq_docs_one->docs); @endphp
				@endif
            <div class="row" style="padding-bottom: 20px;">
               <div class="col-md-3 col-sm-3 text-right">
                  <p class="attribute-nam" style="padding-top:30%;"><span style="color:red;">*</span> Product Name:</p>
               </div>
               <div class="col-md-9 col-sm-9">
                  <p style="padding-top:8%;width:100%;">
                     <input class="input-buy-title" type="text" name="product_name" value="{{ $Inquiry_name }}" required="required">
                  </p>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 col-sm-3 text-right">
                  <p class="attribute-nam"> <span style="color:red;">*</span> Quantity:</p>
               </div>
               <div class="col-md-9 col-sm-9">
                  <div class="row">
                     <div class="col-md-5 col-sm-5">
                        <div class="" style="padding-left: 0;">
                           <input class="input-buy-title" name="quantity" data-ng-model="yourName" value="{{ $quotations->quantity }}" style="width:80%;" required="required">
                        </div>
                     </div>
                     <div class="col-md-7 col-sm-7">
                        <div class="" style="padding-left: 0;">
                           <select name="unit" class="input-buy-title" style="width:80%; background-color:#fff;" required="required">
                              @foreach($units as $unit)
                              <option value="{{ $unit->id }}" @if($quotations->unit_id == $unit->id) selected @endif>{{ $unit->name }}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3 col-sm-3 text-right">
                  <p class="attribute-nam"> <span style="color:red;">*</span> Product Specifications:</p>
               </div>
               <div class="col-md-9 col-sm-9">
                  <div class="" style="padding-left: 0;">

                     <textarea name="details" class="form-control input-buy-title" style="margin-top:20px; text-align:left;" rows="5" id="comment" required="required">Dear Sir/Madam,I'm looking for products with the following specifications:</textarea>
                  </div>
                  <!-- <div class="" style="border:1px solid #ddd; width:98%;">
						
	      				
	      					<ul class="fature-atistatic">
	      						<li><a href="#">Fature:Ani-static</a></li>
	      						<li><a href="#">Fature:Breathable</a></li>
	      						<li><a href="#">Fature:Anti-Wrinkle</a></li>
	      						<li><a href="#">Fature:Echo-Friendly</a></li>
	      						<li><a href="#">Fature:Mother of Bride</a></li>
	      						<li><a href="#">Design:Sleeveless</a></li>
	      						<li><a href="#">Fature:Ani-static</a></li>
	      						<li><a href="#">Fature:Ani-static</a></li>
	      					</ul>	
	      				
				</div> -->
						<br>
						<div class="col-md-3 col-sm-3" style="padding-left: 0;">
						   <img style="width:100%; padding:0 3px; border:1px solid #ddd;" src="{{ $inquiry_image }}" alt="" />
						</div>
						<div class="col-md-12 col-sm-12" style="padding-left: 0;">
	                  <label class="form-level" for="details">Attachment (You can select multiple image)</label>
	                  <input class="btn btn-primary" type="file" id="files" name="attachments[]" multiple><br/>

	                  <div id="selectedFiles"></div>
						</div>
						<div class="clearfix"></div>
                  <div class="" style="padding-left:0; margin:0;">
                     <p class="ppp-des" style="font-size:20px; font-weight:600; padding-left: 0;">
                        <span style="color: #1DC11D;line-height:18px;padding-right: 10px; padding-left:0;">{{ count($suppliers)}}</span> Suppliers can give quotations</p>
                     <div style="float:left;width:50%;margin-top: 20px;float:initial;"><button type="submit" class="btn btn-primary btn-join" style="">Submit Buying Request</button></div>
                     <p style="font-size:14px; font-weight:normal; padding-top:10px;"><input type="checkbox" checked required> I agree to share my <span style="color: #23527C;">Business Card</span> with quoted suppliers.</p>
                  </div>
               </div>
            </div>
            <div class="row">
            	
            </div>
         </div>
      </form>
   </div>
</div>

@stop
@section('scripts')
<script>
   var selDiv = "";
   var storedFiles = [];
   
   $(document).ready(function() {
      $("#files").on("change", handleFileSelect);
      
      selDiv = $("#selectedFiles"); 
      $("#myForm").on("submit", handleForm);
      
      // $("body").on("click", ".selFile", removeFile);
   });
      
   function handleFileSelect(e) {
      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      selDiv.empty();
      filesArr.forEach(function(f) {         

         if(!f.type.match("image.*")) {
            return;
         }
         storedFiles.push(f);

         var reader = new FileReader();
         reader.onload = function (e) {
            var html = "<div style='max-height: 150px; max-width: 150px; float: left; background-color: #fff; margin: 10px;'><img src=\"" + e.target.result + "\" data-file='"+f.name+"' class='selFile'><br clear=\"left\"/></div>";
            selDiv.append(html);
            
         }
         reader.readAsDataURL(f); 
      });
      // <span class='close' onclick='this.parentNode.parentNode.removeChild(this.parentNode); return false;' title='Click to remove'>x</span>
      
   }
      
   function handleForm(e) {
      e.preventDefault();
      var data = new FormData();
      
      for(var i=0, len=storedFiles.length; i<len; i++) {
         data.append('files', storedFiles[i]);  
      }
      
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'handler.cfm', true);
      
      xhr.onload = function(e) {
         if(this.status == 200) {
            console.log(e.currentTarget.responseText);   
            alert(e.currentTarget.responseText + ' items uploaded.');
         }
      }
      
      xhr.send(data);
   }
      
   // function removeFile(e) {
   //    var file = $(this).data("file");
   //    for(var i=0;i<storedFiles.length;i++) {
   //       if(storedFiles[i].name === file) {
   //          storedFiles.splice(i,1);
   //          break;
   //       }
   //    }
   //    $(this).parent().remove();
   // }
   // $("body").on("click", ".selFile", removeFile);
</script>
@stop

