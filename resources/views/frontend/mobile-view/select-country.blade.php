@extends('mobile-view.layout.master_m')
	@section('content')

	<div class="row padding_0 ">
		<div class="col-xs-12 padding_0 " style="padding-right:0px; padding-bottom:0px; ">
                <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block; padding-left: 0;">
                <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
                </a>
        </div>
    </div>

   

    <div class="row padding_0" style="background: #fff;">
         @if($country)

		<div class="col-xs-12 padding_0">
			<div class="cat-pr-list">All Country</div>

           
            
                     
   <?php $a = 1; ?>
             @foreach($country as $c)
           @if($c)  
    		<ul class="nav nav-tabs" style="padding:0;">
                @if($c->name)
        			<li class="sb_pd_list" style="padding: 0px 15px;">
                        <a type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#country{{ $a }}" class="pp-list-an" style="background: 0 none; color: #999;">       
                            {{$c->name}} 
                        </a>
                    </li>
                @endif
            </ul>
     

    	
        
          
    @if($c->country_region)     
    <div class="col-xs-12 padding_0">
        <div class="modal fade" id="country{{ $a }}" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                     <div class="modal-body">
                        <div class="col-sm-12">    
                        @foreach($c->country_region as $c1)                  
                            <div class="col-md-3  ">
                                <a href="{{URL::to('selected-suppliers/'.$c1->name,$c1->id)}}" style=" color: #999;">
                                    {{$c1->name}}   
                                </a>             
                            </div>
                            @endforeach
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>              
            </div>
        </div>
    </div>
    @endif

@endif
  <?php $a++; ?>
    @endforeach
@endif
    </div>
    </div>
 

  @stop
  @section('scripts')
  <script type="text/javascript">
  		$(document).ready(function(){
         $(".nav-tabs a").click(function(){
        $(this).tab('show');
         });
	   });
  </script>