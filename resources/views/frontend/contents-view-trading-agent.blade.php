@extends('fontend.master3')
	@section('content')
		</div>
	<div class="container-fluid padding_0" style="background-color: #D8F3FB;">
	<div class="container">
		<div id="baner-img">
			<img style="width: 100%; height: 250px;"   src="{!! asset('assets/fontend/bdtdc-images/Trading-agent.jpg',is_secured()) !!}" alt="" />
		</div>
				
	</div>
	
			
</div>
<div class="body-container" style="">
	<div class="header-nav">
	    <div class="nav-wrap">
	        <div class="nav-container">
                <a href="#" class="item-menu my-active">Trading Agent</a>
	           <!--  <a href="" class="item-menu">Successful Transactions</a> -->
               <!--  <div class="help util-right">
	                <a href="#" target="_blank" class="ui2-button ui2-button-link link-secondary">
	                Know More about Trading Agent
	                    <i class="fa fa-angle-right" aria-hidden="true" style="width: 0;"></i>
	                </a>
	            </div> -->
        	</div>
	    </div>
	</div>

	<div>
		<div id="banner_toggle" class="banner-toggle" style="right: 3%" onclick="banner_img_toggle()">
  			Click<br>
		</div>
	</div>
</div>
<div class="container">

<div class="row padding_0" style="background-color: #fff; box-shadow: 0 1px 2px 2px #e5e5e5;margin-top:2%;">
		
	
	<div class="col-sm-12 col-md-12 col-lg-12">
		  	<div class="form-group" style="padding: 20px;width: 70%;">
		    <label for="zone">I’m looking for Trading agent by:</label>

			    <a href="javascript:unhide('p_product')">
				<p style="border: 1px solid #C6CAD1;height:30px;font-size: 14px;color: #666;line-height: 28px;padding: 0px 10px;">Please select a category<span><i style="padding-top: 7px;" class="fa fa-caret-down pull-right" aria-hidden="true"></i></span>
				</p></a>
				<div class="category_shown hidden"  id="p_product" style="">
					<p style="border-bottom:1px solid #AAA;">Please select category（Maximum 3）</p>
					<div class="col-sm-12 col-md-12" style="padding:30px 0 25px 20px;">
					 <div class="col-sm-2 checkbox" style="padding-top:0; margin-top:0">
					  <label style="margin-top: 0; padding-top: 2px; font-size: 12px;"><input type="checkbox" value="">Agriculture</label>
					 </div>
					 <div class="col-sm-2 checkbox" style="padding-top:0; margin-top:0;">
					  <label style="margin-top: 0; padding-top: 2px; font-size: 12px;"><input type="checkbox" value="">Apparel</label>
					 </div>
					 <div class="col-sm-4 checkbox" style="padding-top:0; margin-top:0 ">
					  <label style="margin-top: 0; padding-top: 3px; font-size: 12px;"><input type="checkbox" value="">Automobiles & Motorcycles</label>
					 </div>
					 <div class="col-sm-4 checkbox" style="padding-top:0; margin-top:0 ">
					  <label style="margin-top: 0; padding-top: 3px; font-size: 12px;"><input type="checkbox" value="">Beauty &Personal Care</label>
					 </div>

					</div>
					<a href="{{URL::to('/')}}" class="btn btn-primary">Confirm</a>
				</div>
				
			</div>


		    <div class="" id="filter-more-trigger" onclick="box_visibility('more-info-box');" style="display: block; float: right;position: static;">
	  			<p>More filter</p>
		 	 </div>
		  		  
  </div>
 <div class="col-sm-12 col-md-12 col-lg-12"  style="padding-bottom: 10px; padding-left: 20px;">
 		<div id="more-info-box" style="display: none;overflow: hidden;">
 			<div class="col-sm-5 padding_0">
			 		<div class="form-group" style="padding: 20px;padding-bottom: 0; margin-bottom: 0; padding-top: 0; width: 100%;overflow: hidden;">
					  	<div style="width: 115px; float: left;">
					  		 <label for="market">Export Market:</label>
					  	</div>
					   	<div style="display: block;float: left; margin-top: 2px;">
					   		<select style="background-color:#fff !important;height: 30px;">
					   			<option value="">Please select market</option>
								<option value="" style="margin-top: 6%;">Asia</option>
								<option value="" style="margin-top: 6%;">Europe</option>
								<option value="" style="margin-top: 6%;">South America</option>
								<option value="" style="margin-top: 6%;">North America</option>
								<option value="" style="margin-top: 6%;">Pacific</option>
								<option value="" style="margin-top: 6%;">Middle East</option>
								<option value="" style="margin-top: 6%;margin-bottom:5%;">Africa</option>
							</select> 
<!-- <input type="" class="form-control" placeholder="" id="" style="height: 40px; line-height: 40px; float: left;"><div class="select" style="left: 74%; top: 0;"><span style="display: block;position: relative;"><i class="fa fa-chevron-down" aria-hidden="true" style="position: absolute;font-size: 18px; color: #666; left: 15px; top: 10px;"></i></span></div> -->
					   	</div>
					    
					  </div>
 			</div>
 			<div class="col-sm-7">
 							<div class="form-group" style="padding: 20px; padding-top: 0;padding-bottom: 0; margin-bottom: 0; width: 100%; overflow: hidden;">
					  	<div style="width: 140px; float: left;">
					  		 <label for="market">Agent’s Language:</label>
					  	</div>
					   	<div style="display: block;float: left;">
				   		 <!-- <div class="dropdown">
						    <p class="btn btn-default dropdown-toggle" type="" data-toggle="dropdown" style="width: 100%;text-align: left;height: 30px;margin-top: 2px">Please select language
						    <span class="caret"></span></p>
						    <div class="dropdown-menu">  
							    <p style="border-bottom:1px dotted #DDD;padding-top: 3%;padding-left: 3%;padding-bottom: 3%;">
							    	Max 3</p>
							    <div class="col-sm-12" style="margin-top:3%;margin-bottom:5%;padding-bottom:5%;border:1px dotted #333;">
							    	<div class="col-sm-6">
							    		<input type="checkbox" name="" value="">English<br>
										<input type="checkbox" name="" value="">Korean<br>
										<input type="checkbox" name="" value="">German<br>
										<input type="checkbox" name="" value="">Spanish<br>
										<input type="checkbox" name="" value="">Indian<br>
							    	</div>
							    	<div class="col-sm-6">
							    		<input type="checkbox" name="" value="">French<br>
										<input type="checkbox" name="" value="">Arabic<br>
										<input type="checkbox" name="" value="">Russian<br>
										<input type="checkbox" name="" value="">Portuguese<br>
										<input type="checkbox" name="" value="">Italian<br>

							    	</div>
							    </div>
				            
							
						    </div>
						  </div> -->
						  <select style="background-color:#fff !important;height: 30px;">
					   			<option value="">Please select language</option>
								<option value="" style="margin-top: 6%;">English</option>
								<option value="" style="margin-top: 6%;">Korean</option>
								<option value="" style="margin-top: 6%;">German</option>
								<option value="" style="margin-top: 6%;">Spanish</option>
								<option value="" style="margin-top: 6%;">Indian</option>
								<option value="" style="margin-top: 6%;">French</option>
								<option value="" style="margin-top: 6%;">Arabic</option>
								<option value="" style="margin-top: 6%;">Russian</option>
								<option value="" style="margin-top: 6%;">Portuguese</option>
								<option value="" style="margin-top: 6%;margin-bottom:5%;">Italian</option>
							</select> 

					   	</div>
					   	
					    
					  </div>
 				
 			</div>
		  </div>	
</div>

</form>
</div>
<div class="row padding_0" style="border-bottom: 1px solid #EFF2F7;">
<div class="col-sm-12 col-md-12" style="padding: 0; min-height: 30px; padding-top: 15px;padding-left: 15px;">
			<div class="sort-by">
				<span style="float: left;font-size: 14px;color: #000;font-family: Arial;line-height: 1.28571;">Sort by:</span>
				<ul style="padding: 0; display: block; float: left;">
				<li style="float: left; padding-left: 10px;"><a href="#" style="color: #666; font-size: 13px; color: #EB650C;">All</a></li>
				<li style="float: left; padding-left: 10px;"><a href="#" style="font-size: 14px;color: #000;font-family: Arial;line-height: 1.28571;">Responsiveness</a></li>
				<li style="float: left; padding-left: 10px;"><a href="#" style="font-size: 14px;color: #000;font-family: Arial;line-height: 1.28571;">Response time</a></li>
				
				</ul>
			</div> 
		<div style="float: right; display: block;vertical-align: baseline;overflow: hidden; color: #666; font-size: 13px; cursor: pointer;"> 
		<!-- <a href="#" style="color: #666; font-size: 13px;"><span style="color: #5BBD56; font-weight: 700;">145</span> Trading agent(s) can provide you service</a> -->
			
		</div>
			

</div>

</div>

@foreach($users as $data)
<div class="row padding_0 list-item-agent" style="background-color: #fff;margin-bottom:2%;">
	<div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 padding_0">
	<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
		<div  class="col-sm-3 col-md-3 col-lg-3" >
			@if($data->user)
			<a href="#" class="avatar" >
			<img style="height:100%;width:100%;" src="{{ URL::to('uploads',$data->user->profile_picture,is_secured()) }}"/>
			</a>
			@else
			<a href="#" class="avatar" >
				<img src="{!! asset('assets/no_photo.gif') !!}" class="img-responsive">
			</a>
			@endif
			
		</div>
		<div  class="col-sm-9 col-md-9 col-lg-9 agent-intro ">
			@if($data)
				@if($data->user)
					@if($data->user->companies) 
				<p class="basic-intro"><a href="{{URL::to('trading-agent/details/'.strtolower(preg_replace('/[^A-Za-z0-9\.-]/','',preg_replace('/[^A-Za-z0-9\.,&-]/','-',$data->user->companies->name_string->name))),$data->user->companies->id)}}" class="agent-name">{{$data->user->first_name}} {{$data->user->last_name}}</a> @endif
					@if($data->user->companies) 
						@if($data->user->companies->name_string)
							{{$data->user->companies->name_string->name}}
						@endif
					@endif
				@endif
			@endif
				</p>
				<p class="service"><span>Responded to:</span> <b style="color: #EB650C;">354</b> queries</p>
				<p class="service"><span>Response time:</span>  0~8 Hours</p>
		</div>
		
	</div>

	</div>
	<div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 padding_0">
			<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
					<div class="col-sm-8 col-md-8 padding_0">
			            @if($data)
				            @if($data->user)
								<div class="agent-other-info">
									@if($data->user->main_products)
			   							<p class="main-product">
			      						<span class="info-title">Main Products:</span>{{$data->user->main_products->product_name_1}} ,
			     				 		{{$data->user->main_products->product_name_2}} , {{$data->user->main_products->product_name_3}}
			            				</p>
		            				@endif
						            <p class="language" title="English,French">
						              <span class="info-title">Language:</span>
						              English,French
						            </p>

						            @if($data->user->companies)
						            @if($data->user->companies->bdtdc_main_market)
						            
						            <p class="markets" title="Europe,Middle East">
						              <span class="info-title">Main Market:</span>
						              @foreach($data->user->companies->bdtdc_main_market as $market)
						            @if($market->company_main_market)
						              {{$market->company_main_market->name}},
						              @endif
						            @endforeach
						            </p>

						            @endif
						            @endif
					 			</div>
			            	@endif
			            @endif
					</div>
					<div class="col-sm-4 col-md-4 padding_0">
						<div class="buyer-action">
					            <a href="{{URL::to('contact_supplier', $data->user_id)}}" class="btn btn-primary" style="border-radius: 4px !important;">
					                <i class="fa fa-envelope-o" aria-hidden="true" style="padding-right: 5px; font-size: 16px;"></i>Contact Agent
					            </a>
				          </div>
						
					</div>
					
			</div>

	</div>

				
</div>
@endforeach


@stop
@section('scripts')
<script type="text/javascript">
		$(window).load(function(){
			setTimeout(function(){
					$('#baner-img').slideUp('slow') },5000);
		});
  
		function box_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
       {
          e.style.display = 'none';
      	document.getElementById("filter-more-trigger").innerHTML = "More filter";
      	}
       else{
          e.style.display = 'block';
       
     document.getElementById("filter-more-trigger").innerHTML = "Less filter";
  }
    }
    function banner_img_toggle() {
    //    var ban = document.getElementById(my_banner);
    //    if(ban.style.display == 'block')
    //    {
    //       ban.style.display = 'none';
    //   	}
    //    else{
    //       ban.style.display = 'block';
       

  		// }
  		console.log($('#baner-img'));
  		$('#baner-img').slideToggle(500);
    }

    function unhide(divID) {
    var item = document.getElementById(divID);
    if (item) {
    item.className=(item.className=='hidden')?'unhidden':'hidden';
    }}

</script>
@stop