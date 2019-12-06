@extends('frontend.layouts.master-register')
@section('content')

<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" style=" padding-bottom: 8px;">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null, is_secured())}}" class="top-path-li-a"><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('ServiceChannel/pages/for_buyer',35, is_secured())}}" class="top-path-li-a"><span itemprop="name">Help Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('SupplierChannel/pages/learning_center',33, is_secured())}}" class="top-path-li-a"><span itemprop="name">Learning Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">Country Search</span></a></li>
                    </ul>
            </div>
    
  </div>


<div class="row padding_0" style="background:#ffffff; border-bottom:1px solid rgba(0,0,0,.1)">
	
	<div class="col-sm-12" id="country_region">
		<p id="c1">Welcome to <a itemprop="url" href="#" style="color:#666;">BuyerSeller.Asia</a>'s Country Channel</p>
		<p style="color:#000066;padding-left:18px;font-size:46px;font-weight:bold;">Trade with Suppliers Worldwide</p>
	</div>
	<div class="col-sm-12" style="margin-top:20px;margin-bottom:20px;">
		  <ul class="nav nav-tabs" itemscope itemtype="http://schema.org/SiteNavigationElement">
		    <li class="active"><a data-toggle="tab" href="#home" itemprop="url" style="">All regions</a></li>
		    <?php $menu_number = 1; ?>
		    @foreach($country as $data)
		    <li><a data-toggle="tab" itemprop="url" href="#menu{{ $menu_number }}">{{ $data->name }}</a></li>
		    <?php $menu_number++; ?>
		    @endforeach
		  </ul>

		  <div class="tab-content">
		    <div id="home" class="tab-pane fade in active">
		    @if($country)
			@foreach($country as $data)
		    <div class="col-sm-12" style="margin-top:6%;">
	    		<div class="col-sm-3" style="padding-top:3%;">
	    			<img itemprop="image" style="height:175px;width:201px;" src="{!! asset('assets/buyer-security/Asia.jpg') !!}" alt="" />
	    		</div>
	    		
	    		<div class="col-sm-9">
	    		
	    		 <p id="c2">{{ $data->name }}</p>
			      <!-- @foreach($data->country_region as $c)
			      <p>{{$c->name}}</p>
			      @endforeach -->
			      <?php 
			      $country_region_array = $data->country_region;
			      
					$j=1;
					for ($i=0; $i < count($country_region_array); $i++) 
					{
						$div_var = $i%2;
						if($div_var == 0){
							echo '<div class="col-sm-12" style="margin-top:6%;">';
					}
					?>

					<div class="col-sm-6" style="margin-left:-30px;">
					@if($country_region_array[$i]->name)
						@if($section=="Find-Suppliers")
					<a itemprop="url" href="{{ URL::to('selected-suppliers/'.$country_region_array[$i]->name,$country_region_array[$i]->id,is_secured())}}">
						@elseif($section=="source")
						<a itemprop="url" href="{{ URL::to('selected-suppliers/'.$country_region_array[$i]->name,$country_region_array[$i]->id,is_secured())}}">

						@endif
		      			<div class="col-sm-12">
		      				<div class="col-sm-2">
		      					<a itemprop="url" href="{{ URL::to('selected-suppliers/'.$country_region_array[$i]->name,$country_region_array[$i]->id,is_secured())}}">
		      					  <img itemprop="image" style="height:29px;width:46px;" src="{{asset('assets/global/img/flags/'.strtolower ($country_region_array[$i]->iso_code_2).'.png')}}"  alt="{{$country_region_array[$i]->name}}" />
		      					</a>
		      				</div>
		      				<div class="col-sm-10">
		      					<?php echo $country_region_array[$i]->name; ?>
		      					<ul style="font-size: 11px; padding:0;">
		      					    <li style="float:left;"><a itemprop="url" href="#" style="color: #999;">Industry Hubs :</a> </li>
		      						<li style="float:left;"><a itemprop="url" href="#">Saree ,</a></li> 
		      						<li style="float:left;"><a itemprop="url" href="#">Neckware</a></li>
		      						<li style="float:left;"><a itemprop="url" href="#">Textiles</a></li>
		      					</ul>
		      				</div>
		      			</div> 
		      		@endif
		      		
		      		</div>

		      		<?php
					// echo $country_region_array[$i]->name."<br>";
					$div_var = $j%2;
					if($div_var == 0 || $i == count($country_region_array)-1){
						echo "</div>";
					}
					$j++;
					}
			       ?>
					      	      	
			    		</div>
			    	</div>
			    	@endforeach
			    	@endif
			    	
		    </div>
		    <div id="menu1" class="tab-pane fade in">
		    	@if($country)
		    	@foreach($country as $data)
		    	@if($data->name == 'Asia')

		    		<div class="col-sm-12" style="margin-top:6%;">
	    		<div class="col-sm-3" style="padding-top:3%;">
	    			<img itemprop="image" style="height:175px;width:201px;" src="{!! asset('assets/buyer-security/Asia.jpg') !!}" alt="Asia" />
	    		</div>
	    		
	    		<div class="col-sm-9">
	    		
	    		 <p id="c2">{{ $data->name }}</p>
			      <!-- @foreach($data->country_region as $c)
			      <p>{{$c->name}}</p>
			      @endforeach -->
			      <?php 
			      $country_region_array = $data->country_region;
			      
					$j=1;
					for ($i=0; $i < count($country_region_array); $i++) 
					{
						$div_var = $i%2;
						if($div_var == 0){
							echo '<div class="col-sm-12" style="margin-top:6%;">';
					}
					?>

					<div class="col-sm-6" style="margin-left:-30px;">
					@if($country_region_array[$i]->name)
					
		      			<div class="col-sm-12">
		      				<div class="col-sm-2">
		      				<a itemprop="url" href="{{ URL::to('selected-suppliers/'.$country_region_array[$i]->name,$country_region_array[$i]->id,is_secured())}}">
		      				<img itemprop="image" style="height:29px;width:46px;" src="{!! asset('assets/global/img/flags/'.strtolower ($country_region_array[$i]->iso_code_2).'.png')!!}" alt="" />
		      					</a>
		      				</div>
		      				<div class="col-sm-10">
		      					<?php echo $country_region_array[$i]->name; ?>
		      					<ul style="font-size: 11px; padding:0;">
		      					    <li style="float:left;"><a itemprop="url" href="#" style="color: #999;">Industry Hubs :</a> </li>
		      						<li style="float:left;"><a itemprop="url" href="#">Saree ,</a></li> 
		      						<li style="float:left;"><a itemprop="url" href="#">Neckware</a></li>
		      						<li style="float:left;"><a itemprop="url" href="#">Textiles</a></li>
		      					</ul>
		      				</div>
		      			</div> 
		      		
		      		@endif
		      		</div>

		      		<?php
					// echo $country_region_array[$i]->name."<br>";
					$div_var = $j%2;
					if($div_var == 0 || $i == count($country_region_array)-1){
						echo "</div>";
					}
					$j++;
					}
			       ?>
					      	      	
			    		</div>
		    	</div>



		    	@endif
		    
	    	@endforeach
	    	@endif
		    </div>
		    <div id="menu2" class="tab-pane fade in">
		    	
		    	@foreach($country as $data)
		    	@if($data->name == 'Americas')

		    		<div class="col-sm-12" style="margin-top:6%;">
	    		<div class="col-sm-3" style="padding-top:3%;">
	    			<img itemprop="image" style="height:175px;width:201px;" src="{!! asset('assets/buyer-security/Americas.png') !!}" alt="" />
	    		</div>
	    		
	    		<div class="col-sm-9">
	    		
	    		 <p id="c2">{{ $data->name }}</p>
			      <!-- @foreach($data->country_region as $c)
			      <p>{{$c->name}}</p>
			      @endforeach -->
			      <?php 
			      $country_region_array = $data->country_region;
			      
					$j=1;
					for ($i=0; $i < count($country_region_array); $i++) 
					{
						$div_var = $i%2;
						if($div_var == 0){
							echo '<div class="col-sm-12" style="margin-top:6%;">';
					}
					?>

					<div class="col-sm-6" style="margin-left:-30px;">
					
		      			<div class="col-sm-12">
		      				<div class="col-sm-2">
		      					<a itemprop="url" href="{{ URL::to('selected-suppliers/'.$country_region_array[$i]->name,$country_region_array[$i]->id,is_secured())}}">
		      					<img itemprop="image" style="height:29px;width:46px;" src="{!! asset('assets/global/img/flags/'.strtolower ($country_region_array[$i]->iso_code_2).'.png') !!}" alt="" />
		      					</a>
		      				</div>
		      				<div class="col-sm-10">
		      					@if($country_region_array[$i]->name)
		      						<?php echo $country_region_array[$i]->name; ?>
		      					@endif
		      					<ul style="font-size: 11px; padding:0;">
		      					    <li style="float:left;"><a itemprop="url" href="#" style="color: #999;">Industry Hubs :</a> </li>
		      						<li style="float:left;"><a itemprop="url" href="#">Saree ,</a></li> 
		      						<li style="float:left;"><a itemprop="url" href="#">Neckware</a></li>
		      						<li style="float:left;"><a itemprop="url" href="#">Textiles</a></li>
		      					</ul>
		      				</div>
		      			</div> 
		      		</div>

		      		<?php
					// echo $country_region_array[$i]->name."<br>";
					$div_var = $j%2;
					if($div_var == 0 || $i == count($country_region_array)-1){
						echo "</div>";
					}
					$j++;
					}
			       ?>
					      	      	
			    		</div>
		    	</div>



		    	@endif
		    
			    	@endforeach
		    </div>
		    <div id="menu3" class="tab-pane fade in">
		    	

		    	@foreach($country as $data)
		    	@if($data->name == 'Middle East')

		    		<div class="col-sm-12" style="margin-top:6%;">
	    		<div class="col-sm-3" style="padding-top:3%;">
	    			<img itemprop="image" style="height:175px;width:201px;" src="{!! asset('assets/buyer-security/Middle East.png') !!}" alt="" />
	    		</div>
	    		
	    		<div class="col-sm-9">
	    		
	    		 <p id="c2">{{ $data->name }}</p>
			      <!-- @foreach($data->country_region as $c)
			      <p>{{$c->name}}</p>
			      @endforeach -->
			      <?php 
			      $country_region_array = $data->country_region;
			      
					$j=1;
					for ($i=0; $i < count($country_region_array); $i++) 
					{
						$div_var = $i%2;
						if($div_var == 0){
							echo '<div class="col-sm-12" style="margin-top:6%;">';
					}
					?>

					<div class="col-sm-6" style="margin-left:-30px;">
					
		      			<div class="col-sm-12">
		      				<div class="col-sm-2">
		      					<a itemprop="url"  href="{{ URL::to('selected-suppliers/'.$country_region_array[$i]->name,$country_region_array[$i]->id,is_secured())}}">
		      					<img itemprop="image" style="height:29px;width:46px;" src="{!! asset('assets/global/img/flags/'.strtolower ($country_region_array[$i]->iso_code_2).'.png') !!}" alt="" />
		      					</a>
		      				</div>
		      				<div class="col-sm-10">
		      					<?php echo $country_region_array[$i]->name; ?>
		      						<ul style="font-size: 11px; padding:0;">
		      					    <li style="float:left;"><a itemprop="url" href="#" style="color: #999;">Industry Hubs :</a> </li>
		      						<li style="float:left;"><a itemprop="url" href="#">Saree ,</a></li> 
		      						<li style="float:left;"><a itemprop="url" href="#">Neckware</a></li>
		      						<li style="float:left;"><a itemprop="url" href="#">Textiles</a></li>
		      					</ul>
		      				</div>
		      			</div> 
		      		
		      		</div>

		      		<?php
					// echo $country_region_array[$i]->name."<br>";
					$div_var = $j%2;
					if($div_var == 0 || $i == count($country_region_array)-1){
						echo "</div>";
					}
					$j++;
					}
			       ?>
					      	      	
			    		</div>
		    	</div>



		    	@endif
		    
			    	@endforeach
		    </div>
		    <div id="menu4" class="tab-pane fade in">
		    	

		    	@foreach($country as $data)
		    	@if($data->name == 'Africa')

		    		<div class="col-sm-12" style="margin-top:6%;">
	    		<div class="col-sm-3" style="padding-top:3%;">
	    			<img itemprop="image" style="height:175px;width:201px;" src="{!! asset('assets/buyer-security/Africa.png') !!}" alt="" />
	    		</div>
	    		
	    		<div class="col-sm-9">
	    		
	    		 <p id="c2">{{ $data->name }}</p>
			      <!-- @foreach($data->country_region as $c)
			      <p>{{$c->name}}</p>
			      @endforeach -->
			      <?php 
			      $country_region_array = $data->country_region;
			      
					$j=1;
					for ($i=0; $i < count($country_region_array); $i++) 
					{
						$div_var = $i%2;
						if($div_var == 0){
							echo '<div class="col-sm-12" style="margin-top:6%;">';
					}
					?>

					<div class="col-sm-6" style="margin-left:-30px;">
						
		      			<div class="col-sm-12">
		      				<div class="col-sm-2">
		      				<a itemprop="url" href="{{ URL::to('selected-suppliers/'.$country_region_array[$i]->name,$country_region_array[$i]->id,is_secured())}}">
		      					<img itemprop="image" style="height:29px;width:46px;" src="{!! asset('assets/global/img/flags/'.strtolower ($country_region_array[$i]->iso_code_2).'.png')  !!}" alt="" />
		      					</a>
		      				</div>
		      				<div class="col-sm-10">
		      					<?php echo $country_region_array[$i]->name; ?>
		      					<ul style="font-size: 11px; padding:0;">
		      					    <li style="float:left;"><a itemprop="url" href="#" style="color: #999;">Industry Hubs :</a> </li>
		      						<li style="float:left;"><a itemprop="url" href="#">Saree ,</a></li> 
		      						<li style="float:left;"><a itemprop="url" href="#">Neckware</a></li>
		      						<li style="float:left;"><a itemprop="url" href="#">Textiles</a></li>
		      					</ul>
		      				</div>
		      			</div>
		      		</div>

		      		<?php
					// echo $country_region_array[$i]->name."<br>";
					$div_var = $j%2;
					if($div_var == 0 || $i == count($country_region_array)-1){
						echo "</div>";
					}
					$j++;
					}
			       ?>
					      	      	
			    		</div>
		    	</div>



		    	@endif
		    
			    	@endforeach
		    </div>
		    <div id="menu5" class="tab-pane fade in">
		    	

		    	@foreach($country as $data)
		    	@if($data->name == 'Europe')

		   <div class="col-sm-12" style="margin-top:6%;">
	    		<div class="col-sm-3" style="padding-top:3%;">
	    			<img itemprop="image" style="height:175px;width:201px;" src="{!! asset('assets/buyer-security/Euorope.png') !!}" alt="" />
	    		</div>
	    		
	    		<div class="col-sm-9">
	    		
	    		 <p id="c2">{{ $data->name }}</p>
			      <!-- @foreach($data->country_region as $c)
			      <p>{{$c->name}}</p>
			      @endforeach -->
			      <?php 
			      $country_region_array = $data->country_region;
			      
					$j=1;
					for ($i=0; $i < count($country_region_array); $i++) 
					{
						$div_var = $i%2;
						if($div_var == 0){
							echo '<div class="col-sm-12" style="margin-top:6%;">';
					}
					?>

					<div class="col-sm-6" style="margin-left:-30px;">
						
		      			<div class="col-sm-12">

		      				<div class="col-sm-2">
		      					<a itemprop="url" href="{{ URL::to('selected-suppliers/'.$country_region_array[$i]->name,$country_region_array[$i]->id,is_secured())}}">
		      					<img itemprop="image" style="height:29px;width:46px;" src="{!! asset('assets/global/img/flags/'.strtolower ($country_region_array[$i]->iso_code_2).'.png' )!!}" alt="" />
		      					</a>
		      					
		      				</div>
		      				<div class="col-sm-10">
		      					
		      					<?php echo 
		      					
		      					$country_region_array[$i]->name; 
		      					
		      					?>
		      				
		      					<ul style="font-size: 11px; padding:0;">
		      					    <li style="float:left;"><a itemprop="url" href="#" style="color: #999;">Industry Hubs :</a> </li>
		      						<li style="float:left;"><a itemprop="url" href="#">Saree ,</a></li> 
		      						<li style="float:left;"><a itemprop="url" href="#">Neckware</a></li>
		      						<li style="float:left;"><a itemprop="url" href="#">Textiles</a></li>
		      					</ul>
		      				</div>
		      			</div> 
		      		</div>

		      		<?php
					// echo $country_region_array[$i]->name."<br>";
					$div_var = $j%2;
					if($div_var == 0 || $i == count($country_region_array)-1){
						echo "</div>";
					}
					$j++;
					}
			       ?>
					      	      	
			    		</div>
		    	</div>



		    	@endif
		    
			    	@endforeach
		    </div>
		</div>
		    
		   
		    
		    
		  </div>

	</div>


 @stop