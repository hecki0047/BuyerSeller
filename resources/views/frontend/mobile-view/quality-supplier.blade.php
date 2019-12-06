@extends('mobile-view.layout.master_m')
    @section('content')
  <section>
  <div class="container">
   <div class="row padding_0">
			<div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
                    <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block; padding-left: 0;">
                    <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
                    </a>
         </div>
      <div class="col-sm-12 padding_0">
       <button class="btn btn-default" onclick="window.history.back();" style="width:100%;text-align:center;color: #666;padding:10px;font-size: 20px;padding-top:17px;"><i class="fa fa-reply-all" style="font-size: 30px;" aria-hidden="true"></i></button>
      </div>
     </div>
    	<div class="row padding_0" style="margin-top: 50px; background: #fff;padding-bottom: 3%; margin-bottom: 28px;">
			<ul class="tab">
			  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Featured</a></li>
			  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paris')">Selected</a></li>
			</ul>

			<div id="London" class="tabcontent" style="width: 100%;padding: 0 8px;">
                @if($quality_supplier)
                @foreach($quality_supplier as $qs)
                @if($qs)
			  	<p style="font-size: 12px; color:#F66603; clear: both;padding-top:2%; ">
			  	 	 Over {{$qs->membership_year}} YR of Online Trading Experience
			  	 </p>
                 @if($qs->name_string)
            <div>
                <a itemprop="url" target="_blank" href="{{ URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$qs->name_string->name).'/'.$qs->company->id) }}" style="color: #FF7519;">
			  	<div class="det_list" id="p-name-des" style="font-size: 17px;font-weight: 700;">
                    {{$qs->name_string->name}}
                    <!-- {{$qs->name_string->description}} -->
       			</div>
                </a>
            </div>
                @endif
       			<div style="display: block;width: 100%; margin:0; padding: 0; clear: both; padding-top: 10px; clear: both;">
       					<div>
       					<div class="pro_sur" style="width: 30px;">
       					    <img style="height:18px;width:18px; float: left;" src="{!! asset('assets/images/Buyer-protection-home.png',is_secured()) !!}">
       					 </div>
       					<div class="pro_sur_gld" style="width: 70px;">

       						<img style="height:18px;width:18px; float: left;" src="{!! asset('assets/helpcenter/Gold-membership.png',is_secured()) !!}">
       						<span style="float: left;font-weight: bold;font-size: 11px;margin-left: 4px;">
								{{$qs->membership_year}} YR
       						</span>
       					</div>
       					<a href="{{URL::to('selected-suppliers/'.$qs->company->country->name,$qs->company->country->id)}}">				
       					<div class="pro_sur_cnt" style="width: 70px;">
       					     <img style="height:16px;width:24px; float: left;" src="{{ asset('assets/global/img/flags/'.strtolower($qs->company->country->iso_code_2).'.png',is_secured())}}" alt="{{ $qs->company->country->name }}" >
       						<span style="float:left;font-weight: bold;font-size: 11px; margin-left: 4px;">
       							{{$qs->company->country->iso_code_2}}
       						</span>
       					</div>
                </a>

       				</div>
       			</div>
          
       			<div id="p-name-des" style="width: 100%; clear: both;">
       				<span>Business Type：</span>
       				<span style="color: #000;">{{$qs->business_supplier->business_types->name}}</span>
       			</div>
                
       			<div id="p-name-des" style="width: 100%; clear: both;">
       				<span>Year Established：</span>
       				<span style="color: #000;">{{$qs->company->year_of_reg}}</span>
       			</div>



      <?php $loopss = 0; ?>

      @if($qs->product_category)
      @foreach($qs->product_category as $p)
      <?php 

          if($loopss <= 3){
            ?> 
        
       			<div class=" col-xs-3 padding_0" style="border-bottom: 1px solid #ddd;">
               
                <a target="_blank" class="" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $p->pro_to_cat_name->name).'='.mt_rand(100000000, 999999999).$p->product_id) }}">		
                    @if($p->pro_images_new)
                      <img class="supp-pro-img" style="width: 80px; height: 90px;" title="{{ $p->pro_to_cat_name->name or '' }}" class="img-thumbnail" src="{{ URL::to((isset($p->pro_images_new)) ? $p->pro_images_new->image : 'no_image.jpg') }}" alt="{{ $p->pro_parent_cat->name ?? '' }}" />
                    @else
                      <img class="supp-pro-img" style="width: 80px;height: 90px;" src="{{ asset('uploads/no_image.jpg')}}" alt="" class="img-responsive" alt="{{ $p->pro_parent_cat->name ?? '' }}">
                    @endif
                </a>
	</div>
       <?php
          }else{
            break;
          }
          $loopss++;

        ?>
      @endforeach
      @endif
    
      <?php
            for ($img_loop=0; $img_loop < 3-$loopss; $img_loop++) { ?>

                <div class="col-xs-7  padding_0">
                    <div class="product-image-wrapper">
                    <a target="_blank" class="" href="#" style="display: block;">
                        <div class="single-products">
                            <div class="productinfo text-center">
                            <img title="" style="width:20%;height:120px;margin-left:0" src="{{ asset('uploads/no_image.jpg',is_secured())}}" alt="" class="img-responsive" alt="">
                                <a target="_blank" class="pro_name" href="#" style="display: block; font-size: 12px;line-height: 13px;margin-top:0%"></a>
                            </div>

                        </div>
                        </a>
                    </div>          
                </div>

        <?php } ?>


                @endif
                @endforeach
            @endif
            
         {!! $quality_supplier->render() !!}   
			</div>


	<div id="Paris" class="tabcontent">
      
@if($selected_supplier)
    @foreach($selected_supplier as $sp)
	<div style="padding-top:1%;margin-bottom:1%; width: 100%; display: block; clear: both;">

        <div class="cat_pro_list_m" style="width: 40%;float: left; display: block;">
            @if($sp->parent_id && $sp->country_id)
    			<a href="{{URL::to('country/product/name/'.preg_replace('/[^A-Za-z0-9\.-]/', '-',$sp->parent_id).'/'.$sp->country_id)}}">
                @if($sp->pro_parent_cat)
                    <img class="cat_pro_list_m_img img-responsive" style="max-width:100%;"  src="{{ URL::to('uploads',$sp->pro_parent_cat->single_image) }}" alt="" />
                @endif
    			</a>
            @endif
            
        </div> 
		<div class="cat_pro_list_m_des" style="width: 60%; float: left;">
			<div style=" display: block;position: relative;padding-left: 13px;">
                <div class="det_list" style="font-size: 13px; line-height: 20px; padding-bottom: 10px; font-weight: normal; color: #666; padding-top: 0px;">
            	</div>
                @if($sp->cat_country)
					<p><i style="font-size: 20px; color:#000;" class="fa fa-map-marker" aria-hidden="true"></i>
                    {{$sp->cat_country->name}}</p>
                @endif

                @if($sp->pro_parent_cat)
					<p>{{$sp->pro_parent_cat->name}}</p>
                @endif
				

			</div>
		</div>
  </div>
    @endforeach
@endif

		</div>    
  </div>
  </div>
  </section>
@stop
@section('scripts')
<script type="text/javascript">
	function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
@stop
