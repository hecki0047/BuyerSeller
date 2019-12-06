<div  class="row item_sha" style="padding-bottom:5px;padding-top: 0">
	 <div class="col-sm-3 col-md-2 col-xs-12" style="padding-top: 10px">
	     <div class="col-sm-12 col-xs-12 mobo-categories hr-gap no-padding" style="height:100%;">
	         <h3><a href="#"><i class="fa fa-list-ul"></i> Main Market</a></h3>
	         <form action="{{ URL::to('filter_by_main_market',null,is_secured()) }}" method="post" id="search_by_main_market_form" class="text-muted">
	         <input type="hidden" name="_token" value="{{ csrf_token() }}">
	         	<input type="hidden" name="searched_on" value="{{ $searched_on }}">
				<input type="hidden" name="search_str" value="{{ $search_str }}">
    	         @foreach($main_market_status as $m)
    	            <p class="p-inp" style="margin-bottom: 0px;font-size:11px">
    	            	<label style="margin-bottom: 0px; font-size: 11px; cursor: pointer;">
    	            		<input style="position: relative; top: 3px; cursor: pointer;" type="checkbox" name="filter_by_main_market[]" value="{{ $m->main_market_zone_id }}">&nbsp;<span>{{ trim($m->market_name) }}</span>
    	            	</label>
    	            </p>  
    	         @endforeach
    	         <div class="button_holder col-md-12 col-xs-12" style="display: block;padding-top: 10%;padding-bottom: 5%;padding-left: 0;">
    	             <input type="submit" value="Search" class="btn btn-xs btn-primary search_by_main_market_btn" style="margin-top: 2%;padding-bottom:1%">
    	             <a href="" class="btn btn-xs btn-danger cancel_search" style="margin-top: 2%">Cancel</a>
    	         </div>
	         </form>
	         <div class="col-md-12" style="padding-left: 0px">
	             <h4 style="margin-bottom:3%;margin-top:6%">Total Revenue</h4>
	             
    	         	<p style="margin-bottom:5px;font-size:11px"><a data-ca_revanue_id="0" href="{{ URL::to('filter_by_total_revanue',$searched_on.'_0',is_secured()) }}" class="text-muted filter_by_total_revanue_btn">All</a></p>
    	         @foreach($revanue as $r)
    	             <p style="margin-bottom:5px;font-size:11px"><a data-ca_revanue_id="{{ $r->revanue_id }}" href="{{ URL::to('filter_by_total_revanue',$searched_on.'_'.$r->revanue_id,is_secured()) }}" class="text-muted filter_by_total_revanue_btn">{{ trim($r->revanue_name) }} </a></p>
    	         @endforeach
    	         <h4 style="margin-bottom:3%;margin-top:6%">No Of Employe</h4>
    	         <p style="margin-bottom:5px;font-size:11px"><a data-total_employe_id="0" href="{{ URL::to('filter_by_employe',$searched_on.'_0',is_secured()) }}" class="text-muted filter_by_total_employe_btn">All </a></p>
    	         @foreach($total_employe as $e)
    	             <p style="margin-bottom:5px;font-size:11px"><a data-total_employe_id="{{$e->total_employe_id}}" href="{{ URL::to('filter_by_employe',$searched_on.'_'.$e->total_employe_id,is_secured()) }}" class="text-muted filter_by_total_employe_btn">{{ trim($e->total_employe) }}</a></p>
    	         @endforeach
	         </div>
	         
	     </div>
	     <br>
	     <br>
	     <br>
	     <div class="shipping text-center">
	       
	         <img src="{!! asset('assets/dashboard/images/home/shipping.jpg') !!}" alt="">
	     </div>
	    
	 
	</div>

