@extends('fontend.master_dynamic')
@section('content')

<?php
date_default_timezone_set('Asia/Dhaka');
use Carbon\Carbon;
function ago($time)
{
   $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
   $lengths = array("60","60","24","7","4.35","12","10");

   $now = time();

       $difference     = $now - $time;
       $tense         = "ago";

   for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
       $difference /= $lengths[$j];
   }

   $difference = round($difference);

   if($difference != 1) {
       $periods[$j].= "s"; 
   }

   return "$difference $periods[$j] ago";
}
?>

<div class="row" style="margin-top:2%;">
	<div class="col-md-12 padding_0" style="padding-bottom: 1%">
            <ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li style="float: left" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem">
                    <a itemprop="url" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> 
                        <span itemprop="name">Home </span><i class="fa fa-angle-right"></i>
                    </a>
                    <meta itemprop="position" content="1" />
                </li> 
               

                <li style="float: left" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem">
                    <a itemprop="url" href="#" style="color: #000">
                     <span itemprop="name">Trade Answers</span> <i class="fa fa-angle-right"></i>
                    </a>
                     <meta itemprop="position" content="3" />
                </li>
            </ul>
        </div>
    </div>
    <div class="row item_sha">
	<div class="col-sm-12" style="margin-top:2%;">
		<div class="col-sm-3">
			<p style="font-size:22px;">Trade Answers</p>
		</div>
		<!-- <div class="col-sm-4">
			<input class="input" type="text" name="key" placeholder="input keywords here" style="border: 1px solid #DDD;padding-left: 10px;">
		</div>
		<div class="col-sm-1">
			<button type="button" style="border: 1px solid #DDD;height: 30px;margin-left: -32%;background-color: #FF9917;color:#fff;">Search</button>
		</div> -->
		<div class="col-sm-4">
            <input type="hidden" name="answer">
            <div class="form-group">
               <input type="text" class="form-control trade_answers_search" id="keyword" placeholder="Input keyword here">
            </div>
        </div>
        <div class="col-sm-1">
            <button class="btn btn-warning trade_search" type="submit" style="background-color: #255E98;padding: 9px 14px;">Search</button>
        </div>

		<div class="col-sm-1">or</div>
		<div class="col-sm-2">
			<button type="button" style="border: 1px solid #DDD;height: 30px;font-weight: 700;margin-left: -6%;padding-bottom: 28px;padding-top: 3px;font-size: 16px;box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);background-color: #fff;color: #666;"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
				Ask a question
			</button>
		</div>

		<!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        <div class="modal-body">
		        	<ul class="nav nav-tabs">
					    <li class="active" style="background-color: #F5F5F5;"><a data-toggle="tab" href="#trade">Ask Everybody</a></li>
					    <li style="background-color: #F5F5F5;"><a data-toggle="tab" href="#trade1">Ask Expert</a></li>
				  	</ul>
				  	<div class="tab-content">

				  		
					    <div id="trade" class="tab-pane fade in active">
					    	{!!Form::open(['route'=>'trade.answers'])!!}
					      	<input type="text" name="brif" placeholder="Enter a brief question" style="border: 1px solid #DDD;width: 100%;height: 38px;padding-left: 10px;margin-bottom: 20px;">

					     	<textarea id="my-editor1" name="descriptions" style="margin-top: 5%;height: 155px;background-color: #fff;border: 1px solid #DDD;margin-bottom: 20px;" placeholder="Enter your details here"></textarea>

					     	<input type='file' name='image' style="border:1px solid #DDD;width: 100%;">


					    	
					    	<div class="col-sm-12" style="margin-top:5%;">
                  <p>Choose question category</p>
                      <div class="col-sm-6">
                        <select  style="background-color: #fff;border: 1px solid #DDD;" class="parent_category" name="parent_category">
                            <option value="0">Select main category</option>
                            <option value="1">About buyerseller</option>
                            <option value="2">Trade</option>
                            <option value="3">Countries and Region</option>
                            <option value="4">Industry</option>
                            <option value="5">Guide</option>
                        </select> 
                        
                      </div>
                      <div class="col-sm-6">
                            <div id="about_bdtdc" class="select_sub-category" value="1">
                                <select  style="background-color: #fff;border: 1px solid #DDD;"  name="sub_category1" value="6">
                                    <option value="6">About buyerseller</option>
                                </select>
                            </div>
                            <div id="trade_category" class="select_sub-category" value="2">
                                <select  style="background-color: #fff;border: 1px solid #DDD;"  name="sub_category2" value="7">
                                    
                                    <option value="7">Finding Suppliers</option>
                                    <option value="8">Buyer & Supplier</option>
                                    <option value="9">Communication</option>
                                    <option value="10">Documentation</option>   
                                </select>  
                            </div>
                            <div id="country_category" class="select_sub-category" value="3">

                                <select  style="background-color: #fff;border: 1px solid #DDD;"  name="sub_category3" value="8">
                                    <option value="11">North America</option>
                                    <option value="12">South America</option>
                                    <option value="13">Europe </option>
                                    <option value="14">Asia</option>   
                                </select> 
                            </div>
                            <div id="industry_category" class="select_sub-category" value="4">
                                <select  style="background-color: #fff;border: 1px solid #DDD;"  name="sub_category4" value="9">
                                    <option value="15">Agriculture & Food</option>
                                    <option value="16">Apparel, Textiles & Auto & Transport</option>
                                    <option value="17">Electrical Equipment & Telecoms</option>   
                                </select> 
                            </div>
                            <div id="guide_category" class="select_sub-category" value="5">
                                <select  style="background-color: #fff;border: 1px solid #DDD;"  name="sub_category5" value="10">
                                        <!-- <option value="0">Select sub-category</option>  -->
                                        <option value="18">Guide</option>   
                                  </select> 
                            </div>
                       
                      </div>
                    </div>

					    	<div class="col-sm-12" style="margin-top:2%;">
					    		<div class="col-sm-6">
					    			<select  style="background-color: #fff;border: 1px solid #DDD;"  name="coin">
									  <option value="">1</option>
									  <option value="">10</option>
									  <option value="">50</option>
									  <option value="">100</option>
									</select>
					    		</div>
					    		<div class="col-sm-6">
					    			<a href="#" style="margin-left: 20px;color: #06C;">How to get more tokens</a>
					    		</div>
					    	</div>
					    	<div class="col-sm-12" style="margin-top:5%;margin-bottom:3%;">
					    		<center>
					    			<button type="submit" class="btn btn-default" style="font-size:20px;">Post Question</button>
					    		</center>
					    	</div>
					    	 {!!Form::close()!!}
					    </div>
					   

					    <div id="trade1" class="tab-pane fade">
					      <input type="text" placeholder="Enter a brief question" style="border: 1px solid #DDD;width: 100%;height: 38px;padding-left: 10px;margin-bottom: 20px;">
					      <textarea id="my-editor2" style="margin-top: 5%;height: 155px;background-color: #fff;border: 1px solid #DDD;margin-bottom: 20px;" placeholder="Enter your details here">Enter your details here</textarea>

					      <input type="text" placeholder="Where are your goods shipped from(country/region)" style="margin-top:2%;border: 1px solid #DDD;width: 100%;height: 38px;padding-left: 10px;margin-bottom: 20px;">

					      <input type="text" placeholder="Where are your goods shipped to(country/region)" style="margin-top:2%;border: 1px solid #DDD;width: 100%;height: 38px;padding-left: 10px;margin-bottom: 20px;">

					      <input type="text" placeholder="Product name" style="margin-top:2%;border: 1px solid #DDD;width: 100%;height: 38px;padding-left: 10px;margin-bottom: 20px;">

					      <input type="text" placeholder="Quantity" style="margin-top:2%;border: 1px solid #DDD;width: 100%;height: 38px;padding-left: 10px;margin-bottom: 20px;">

					    	<div class="col-sm-12" style="margin-top:5%;">
					    		<div class="col-sm-6">
					    			<select  style="background-color: #fff;border: 1px solid #DDD;">
									  <option value="">Choose question category</option>
									  <option value="">About buyerseller</option>
									  <option value="">Trade</option>
									  <option value="">Countries and Region</option>
									  <option>Industry</option>
									  <option>Guide</option>
									</select> 
					    		</div>
					    		<div class="col-sm-6">
					    			<select style="background-color: #fff;border: 1px solid #DDD;">
									  <option value="">Choose question category</option>
									  <option value="">About buyerseller</option>
									  <option value="">Trade</option>
									  <option value="">Countries and Region</option>
									  <option>Industry</option>
									  <option>Guide</option>
									</select>
					    		</div>
					    	</div>
					    	<div class="col-sm-12" style="margin-top:2%;">
					    		<div class="col-sm-6">
					    			<select style="background-color: #fff;border: 1px solid #DDD;">
									  <option value="">1</option>
									  <option value="">10</option>
									  <option value="">50</option>
									  <option value="">100</option>
									</select>
					    		</div>
					    		<div class="col-sm-6">
					    			<a href="#" style="margin-left: 20px;color: #06C;">How to get more tokens</a>
					    		</div>
					    	</div>
					    	<div class="col-sm-12" style="margin-top:5%;margin-bottom:3%;">
					    		<center>
					    		<button type="submit" class="btn btn-default" style="font-size:20px;">Post Question</button>
					    		</center>
					    	</div>
					    </div>

					</div>
		        </div>
		        <div class="modal-footer">
		          
		        </div>
		      </div>
			  <!-- Modal content-->
		      
		    </div>
		  </div>
		  <!-- Modal -->


		<div class="col-sm-1">
			
		</div>
	</div>
	<div class="col-sm-12"  style="margin-top:2%;">
		<div class="col-sm-1">
						@if($trade->user)
                             <img itemprop="image" style="width:100%;padding-top:5%" src="{{ asset('uploads/'.$trade->user->profile_picture) }}" alt="" />
                                @else
                                <img itemprop="image" style="width:100%;padding-top:5%" src="{!! asset('assets/default-avatar.png',is_secured()) !!}" alt="" />
                             @endif
                              
		</div>
		<div class="col-sm-2" style="margin-top:4px ;">

				@if($trade->user)
				<h5><strong> {{$trade->user->first_name}} {{$trade->user->last_name}}</strong></h5>
				<p>asked <span style="color: #999;">@php 
                                                               
                                                                $DeferenceInDays = Carbon::parse($trade->created_at)->diffForHumans(Carbon::now());
                                                                @endphp 
                                                                {{ $DeferenceInDays }}</span></p>

				@endif
		</div>
		<div class="col-sm-1" style="margin-left: -8%;">
			<!-- <p style="background-color: #FFE0CC;padding-left: 9px;">Level 1</p> -->
		</div>
		<div class="col-sm-2">
			<!-- <p>asked <span style="color: #999;">2 days ago</span></p> -->
		</div>
	</div>
	<div class="col-sm-12" style="margin-top:2%;">
		<div class="col-sm-9">
				<div class="col-sm-12">
					<div class="col-md-1"></div>
					<div class="col-md-11"><p style="text-align:justify;font-size: 22px;margin-left: -2%;">
						@if($trade)
						{{$trade->brif}}
						@endif
					</p>
				</div>
				</div>
				
				<div class="col-sm-12" style="padding-bottom: 20px;">
					<div class="col-md-1"></div>
					<div class="col-md-11"><p>
						@if($trade)
						{{$trade->descriptions}}
						@endif
					</p>
				</div>
				</div>
				<div class="col-sm-12" style="margin-left: -1%;">
					<div class="col-md-12">
	    	<div class="view-label" style="padding: 8px; float: left;    background: #f9f9f9;
    box-shadow: 3px 3px 3px rgba(0,0,0,.1);
    position: relative;
    z-index: 10;width: 100%">View 
	    	@if(count($trade1)>=1)
				<strong><?php echo count($trade1); ?></strong> 
	    	@else
				<strong>0</strong>
	    	@endif
				Answer(s) below
			</div>
					</div>
					<div class="col-md-12" style="margin-top: 10px">
					@if($trade1)
						@foreach($trade1 as $data)
						<div class="col-md-12 ">
						<div class="col-md-1">
						@if($data->user)
                             <img itemprop="image" style="width:100%;padding-top:5%" src="{{ asset('uploads/'.$data->user->profile_picture) }}" alt="" />
                                @else
                                <img itemprop="image" style="width:100%;padding-top:5%" src="{!! asset('assets/default-avatar.png',is_secured()) !!}" alt="" />
                             @endif

						</div>
					<div class="col-md-3" > <h5><strong>{{ $data->user->first_name ?? '' }}</strong> </h5> <span style="color: #999;">@php 
                                                               
                                                                $DeferenceInDays = Carbon::parse($data->created_at)->diffForHumans(Carbon::now());
                                                                @endphp 
                                                                {{ $DeferenceInDays }}</span>
                    </div>
                </div>
						<div class="col-md-12 tarde-ans ">
							<div class="col-md-1"></div>
							<div class="col-md-11">
							<p> {!! $data->answer ?? ''!!} </p>
						</div>
							</div>
						@endforeach
					@endif
				</div>
				
				</div>
				<div class="col-sm-12" style="margin-left: -3%;margin-top:2%;">
					@if (Session::has('msg_succ'))
                        <div id="successMessage" class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('msg_succ') }}</p>
                        </div>
                    @endif
				
				</div>

				{!!Form::open(['route'=>'trade.answers.success'])!!}
				<div class="col-sm-12" style="margin-top:2%;">
					@if(count($errors)>0)
		             <div class="alerty alert-danger">
		              <ul>
		                @foreach($errors->all() as $error)
		                <li>{{$error}}</li>
		                @endforeach
		              </ul>
		             </div>
		             @endif
				</div>
				<div class="col-sm-12" style="margin-top:2%;margin-left: -1%;background-color: #EDF4F9;">  
					<div class="col-sm-2">
						<i class="fa fa-user" style="color: #999;padding-top: 41%;font-size: 64px;"></i>
					</div>
					
					<div class="col-sm-10" style="margin-left: -6%;margin-top: 3%;margin-bottom: 2%;width: 89%;">
						<h4><strong> Add a public comment</strong> </h4>
					 	<textarea id="my-editor" name="answer"></textarea>
					 	<input type="hidden" name="question_id" value="{{$trade->id ?? ''}}">

					 	<button type="submit" style="margin-top:2%;height: 32px;font-size: 17px;background-color: #255E98;border: rgb(232, 123, 14);color: rgb(255, 255, 255);">Answer</button>
					</div>
					
				</div>
				<div class="col-sm-12" style="margin-top:5%;">
					<!-- <p style="border-bottom:2px solid #1996E6;margin-left:-3%;padding-bottom: 1%;font-size: 15px;font-weight: 700;">Other Answers</p> -->
				</div>
				
				{!!Form::close()!!}
			
		</div>
		
		
		<div class="col-sm-3">
			<div class="col-sm-12" style="margin-top:2%;">
				<p style="font-size:16px;font-weight:700;border-bottom: 2px solid #1996E6;">Related Questions</p>
				<!-- <p style="padding-top:2%;"><a href="#" style="color: #06C;">comprar figuras grandes de poliresina</a></p>
				<p style="padding-top:2%;"><a href="#" style="color: #06C;">IS THIS COMPANY DOING FLAUD AND TAKE PEOPLE BUYER MONEY?I NEED HJELP FROM bdtdc</a></p>
				<p style="padding-top:2%;"><a href="#" style="color: #06C;">How can i remove my credit card info form bdexpress?</a></p>
				<p style="padding-top:2%;"><a href="#" style="color: #06C;">China Post air mail web Site</a></p>
				<p style="padding-top:2%;"><a href="#" style="color: #06C;">fob</a></p> -->
			</div>
			<div class="col-sm-12" style="margin-top:2%;">
				<img style="height:129px;width:100;" src="{!! asset('assets/trade_answers.jpg')!!}" alt="" />
			</div>
		</div>
	</div>
	
</div>

@stop

@section('scripts')
 <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
 <script type="text/javascript">

	 tinymce.init({ selector:'textarea#my-editor' });
	 tinymce.init({ selector:'textarea#my-editor1' });
	 tinymce.init({ selector:'textarea#my-editor2' });


	 $(document).ready(function()
	{
	    $("#comm").click(function()
	    {
	        $("#com").toggle();
	    });
	});

//*******select category and select_sub-category*********//
$('.select_sub-category').hide();
$('#about_bdtdc').show();
$(document).on({change:function(p){
    p.preventDefault();
    var id= $('.parent_category').val();
    // var id1=$('.select_sub-category').val();
    //alert(id);
    $('.select_sub-category').hide();
    $('.select_sub-category[value="'+id+'"]').show();
    
  }},'.parent_category');



/*trade answers search*/
$(document).on({click:function(e){
    e.preventDefault();
    var base_url='{{URL::to("/")}}';
    // alert(base_url);
    var answer_search= $('.trade_answers_search').val();
    // alert(answer_search);
    // $('input[name="answer"]').val(answer_search);

    var url=base_url+'/trade/answers-search?answer_search='+answer_search;
    // alert(url);
    window.location.href=url;
   }},'.trade_search');

/*trade answers search*/

</script>

@stop