@extends('frontend.layouts.master-register')
    @section('page_css')
    <link property='stylesheet' href="{!! asset('css/for-buyers/trade-answers.css',is_secured()) !!}" rel="stylesheet">
    @endsection
	@section('content')
	<div class="row" style="margin-bottom: 8px">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a" ><span itemprop="name">Home</span> <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('help-center',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Help Center</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
      <li class="top-path-li" itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a itemprop="item" href="#" class="top-path-li-a"><span itemprop="name">Trade Answers</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                    </ul>
            </div>
    
  </div>
<div class="row" style="padding-top:2%; padding-bottom:3%;  background:#fff;">
    <div class="col-sm-3">
        <h4 class="left-h4">Trade Answers  </h4>
    </div>
    <div class="col-sm-6">
        <div class="data-search">
            <form  class="">
                <input type="hidden" name="answer">
                <div class="form-group">
                   <input type="text" class="form-control trade_answers_search" id="keyword" placeholder="Input keyword here">
                </div>
            </form>
        </div>
        <div class="data-search-button">
            <button class="btn btn-warning trade_search" type="submit" style="background-color: #255E98;margin-left: -8%;padding: 9px 14px;">     Search
            </button>
        </div>
    </div>
    <div class="col-sm-3" style="display:inline block;">
        <div>
            <div style="float:left; padding-left:0;padding-right:10px;color:#000;font-weight:bold;font-size:14px;margin-top:3%;">
                Or
            </div>

            <div class="ask" style="">
                <button type="button" style="border: 1px solid #DDD;height: 30px;font-weight: 700;margin-left: -6%;padding-bottom: 28px;padding-top: 3px;font-size: 16px;box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);background-color: #fff;color: #666;"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                Ask a question</button>            
            </div>
        </div>
    </div>
</div>
<div class="row" style="background:#fff;">
    <div class="col-md-8">
        <div class="trade-left">
            <img itemprop="image" style="width:250px;height:200px;" class="trade-left-img" src="{!! asset('assets/fontend/bdtdc-images/trtade-answer.jpg',is_secured()) !!}" alt="trade answer">
            <div>
              <h3 style="font-size:2.5em; color:#666; font-weight:600;line-height:35px;">Find the Best Response to ALL Your Queries</h3>
               <p style="font-size: 24px; padding-top: 8px;color: #666;font-weight: bold;">Invite a Professional to Assist!</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="trade-right" style="padding: 0 31px 10px;border: 1px solid #ccc;">
            <h3 class="trade-right-h3" style="padding: 10px 0; line-height: 0.7;"><a itemprop="url" class="trade-right-h3-a" href="{{ URL::to('SupplierChannel/pages/suppliers_memebership','23',is_secured())}}">Why should one select a Gold Membership Package?</a></h3>
            <p class="trade-right-p">Only Gold Members will get the benefit of being promoted and represented in more than 100 targeted events, exhibitions, trade shows, seminars, workshops and forums each year.</p>
            <!-- <h3 class="trade-right-h3"><a itemprop="url" class="trade-right-h3-a" href="#">Question about american apparel em</a></h3>
            <h3 class="trade-right-h3"><a itemprop="url" class="trade-right-h3-a" href="#">How did trade influence societies in</a></h3> -->
        </div>
    </div>
</div>

<div class="row" id="home_b" style="margin-bottom:28px;border-bottom: 1px solid rgba(0,0,0,.1);padding-bottom:2%;">
    <div class="col-md-2 col-xs-6" style="padding-left:0;margin-left:0; padding-top:3%;">
        <ul class="left-ul" style="margin-top:7%;">
           <li class="left-ul-li"><a itemprop="url" class="left-ul-li-a" href="{{ URL::to('about-us',is_secured())}}">About BuyerSeller.Asia</a></li>
           <!-- <li class="left-ul-li"><a itemprop="url" class="left-ul-li-a" href="#">About bdtdc.com</a></li> -->
        </ul>
            <div style="cursor:pointer;">
                <h4 id="td-ans-menu1" data-qid="1" class="head-h4" style="padding-left: 5%;">Trade</h4>
                <ul class="menu-list-ul">
                   <li class="menu-list-li"><a itemprop="url" href="#" class="finding" data-parentid="1" data-categoryid="6" >Finding Suppliers</a></li>
                   <li class="menu-list-li"><a itemprop="url" href="#" class="finding" data-parentid="1" data-categoryid="7">Finding Buyers</a></li>
                   <li class="menu-list-li"><a itemprop="url" href="#" class="finding" data-parentid="1" data-categoryid="8">Buyer & Supplier </a></li>
                   <li class="menu-list-li"><a itemprop="url" href="#" class="finding" data-parentid="1" data-categoryid="9">Communication</a></li>
                   <li class="menu-list-li"><a itemprop="url" href="#" class="finding" data-parentid="1" data-categoryid="10">Documentation</a></li>
                </ul>
            </div>
            <div style="cursor:pointer;">
                <h4 class="head-h4" id="td-ans-menu2" data-quid="2" style="padding-left: 5%;">Countries & Regions</h4>
                <ul class="menu-list-ul">
                   <li class="menu-list-li sc"><a itemprop="url" href="#" class="finding" data-parentid="2" data-categoryid="11">North America</a></li>
                   <li class="menu-list-li"><a itemprop="url" href="#" class="finding" data-parentid="2" data-categoryid="12">South America</a></li>
                   <li class="menu-list-li"><a itemprop="url" href="#" class="finding" data-parentid="2" data-categoryid="13">Europe </a></li>
                   <li class="menu-list-li"><a itemprop="url" href="#" class="finding" data-parentid="2" data-categoryid="14">Asia</a></li>
                   
               </ul>
            </div>
            <div style="cursor:pointer;">
                <h4 class="head-h4" id="td-ans-menu3" data-queid="3" style="padding-left: 5%;">Industry</h4>
                <ul class="menu-list-ul">
                   <li class="menu-list-li"><a itemprop="url" href="#" class="finding" data-parentid="3" data-categoryid="15">Agriculture & Food</a></li>
                   <li class="menu-list-li"><a itemprop="url" href="#" class="finding" data-parentid="3" data-categoryid="16">Apparel, Textiles & </a></li>
                   <li class="menu-list-li"><a itemprop="url" href="#" class="finding" data-parentid="3" data-categoryid="17">Auto & Transport</a></li>
                   <li class="menu-list-li"><a itemprop="url" href="#" class="finding" data-parentid="3" data-categoryid="18">Electrical Equipment & </a></li>
                   <li class="menu-list-li"><a itemprop="url" href="#" class="finding" data-parentid="3" data-categoryid="19">Telecoms</a></li>
                   
                </ul>
            </div>
            <!-- <div id="td-ans-menu4">
                <h4 class="head-h4"><a itemprop="url" href="#" class="finding" data-parentid="4" data-categoryid="20" style="color: #19446F;">Guide</a></h4>
            </div> -->
    </div>
   
    <div class="col-md-8 col-xs-12" id="trade_details" style="padding-top:4%;">
        <div class="replace_area">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Latest</a></li>
                <li><a data-toggle="tab" href="#menu1">Answered</a></li>
                <li><a data-toggle="tab" href="#menu2">Unanswered</a></li>
            </ul>
            <div class="tab-content" style="margin-top:1%;">
                <div id="home" class="tab-pane fade in active">
                    <!-- <div class="fst">
                        <p class="fst-p"><span><i class="fa fa-lightbulb-o"></i>
                        </span>Answer the question within 30 mins, you will get double points  x2!</p>
                    </div> -->

            @if(count($errors)>0)
                <div class="alerty alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(count($trade)>0)
            <?php $i=1; ?>
            @foreach($trade as $t)
            @if($t->brif)
            <div class="td-ans-cont">
                
                <h4 class="td-ans-cont-h4">
                    <a itemprop="url" href="{{URL::to('trade/answers',$t->id)}}">
                        @if($t->brif)
                            <span>{{$i}}. {{$t->brif}}</span>
                        @endif
                    </a> 
                </h4>
                <p class="td-ans-cont-p">
                    @if($t->descriptions)
                        {{$t->descriptions}}
                    @endif
                    <br> Asked by <a itemprop="url" href="#">
                    @if($t->user)
                        {{$t->user->first_name}} {{$t->user->last_name}} 
                    @endif
                    </a> 
                    <!-- in 
                 <a itemprop="url" href="#">Other Trade Processes</a> -->

                </p>
            </div>
            <?php $i++; ?>
            @endif
            @endforeach

            @else

            <div>
                <center>
                <h4 style="padding-top: 8%;">Sorry! There are no related results.</h4>
                <p>You can post a question or try another search.</p>
                </center>
            </div>

            @endif
       
            {!!$trade->render()!!}
                </div>
                <div id="menu1" class="tab-pane fade">
                     <!--            <div class="fst">
              <p class="fst-p"><span><i class="fa fa-lightbulb-o"></i>
              </span>Answer the question within 30 mins, you will get double points  x2!</p>
              </div> -->

             @if(count($errors)>0)
             <div class="alerty alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul>
             </div>
             @endif
            <?php $i=1; ?>
             @foreach($trade as $t)
             @if(isset($t->trade_answer))
               
                     @if($t->brif)
                     <div class="td-ans-cont">
                        
                         <h4 class="td-ans-cont-h4"><a itemprop="url" href="{{URL::to('trade/answers',$t->id,is_secured())}}">
                       
                         @if($t->brif)
                            <span>{{$i}}. {{$t->brif}}</span>
                          @endif
                        </a> </h4>
                         <p class="td-ans-cont-p">
                          @if($t->descriptions)
                            {{$t->descriptions}}
                          @endif
                          <br> Asked by <a itemprop="url" href="#">
                          @if($t->user)
                           {{$t->user->first_name}} {{$t->user->last_name}} 
                          @endif
                         </a>
                          <!-- in <a itemprop="url" href="#">Other Trade Processes</a> -->
                         
                          <!-- 9 hours ago -->

                         </p>
                         <!-- <br><p class="p-answer" style="margin-left: -53%;margin-top: 1%;padding-left: 6.5%;"><a itemprop="url" href="#"><i class="fa fa-commenting"></i>
                          Answers 0 </a></p> -->
                     </div>
                    <?php $i++; ?>
                     @endif
               
             @endif
             @endforeach

       
             {!!$trade->render()!!}
                </div>
                <div id="menu2" class="tab-pane fade">
                        <!--         <div class="fst">
              <p class="fst-p"><span><i class="fa fa-lightbulb-o"></i>
              </span>Answer the question within 30 mins, you will get double points  x2!</p>
              </div> -->

             @if(count($errors)>0)
             <div class="alerty alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul>
             </div>
             @endif
            <?php $i=1; ?>
             @foreach($trade as $t)
              @if(!isset($t->trade_answer))
             @if($t->brif)
             <div class="td-ans-cont">
                
                 <h4 class="td-ans-cont-h4"><a itemprop="url" href="{{URL::to('trade/answers',$t->id,is_secured())}}">
               
                 @if($t->brif)
                    <span>{{$i}}. {{$t->brif}}</span>
                  @endif
                </a> </h4>
                 <p class="td-ans-cont-p">
                  @if($t->descriptions)
                    {{$t->descriptions}}
                  @endif
                  <br> Asked by <a itemprop="url" href="#">
                  @if($t->user)
                   {{$t->user->first_name}} {{$t->user->last_name}} 
                  @endif
                 </a> 
                 <!-- in <a itemprop="url" href="#">Other Trade Processes</a> -->
                 
                  <!-- 9 hours ago -->

                 </p>
                 <!-- <br><p class="p-answer" style="margin-left: -53%;margin-top: 1%;padding-left: 6.5%;"><a itemprop="url" href="#"><i class="fa fa-commenting"></i>
                  Answers 0 </a></p> -->
             </div>
            <?php $i++; ?>
             @endif
             
             @endif
             @endforeach

       
             {!!$trade->render()!!}
                </div>
            </div>
     </div>
     </div>

   
      <div class="col-md-2 col-xs-6" style="padding-top:4%;">
          <!-- <div classs="tit">Questions Answered</div>
         <div class="ans-no">
              <ul>
                  <li>0,</li>
                   <li>0,</li>
                    <li>6,</li>
                     <li>9,</li>
                     <li>6,</li>
                     <li>7,</li>
                     <li>6,</li>
              </ul>
        </div> -->
          <div class="ans-btun">
           <!--  <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#questions">Questi</a></li>
                <li><a data-toggle="tab" href="#answers">Answer</a></li>
            </ul> -->
            <div class="tab-content">
                <div id="questions" class="tab-pane fade in active">
                  <!--   @foreach($trade as $t)
                        <div class="ans-btun">
                            @if($t->user)
                                <a itemprop="url" href="#"> <img itemprop="image" src="{{ URL::to('uploads',$t->user->profile_picture,is_secured()) }}" alt=""></a>
                                <p class="answer-cont"><a itemprop="url" href="#">
                                {{$t->user->first_name}} {{$t->user->last_name}} 
                                </a></p>
                            @endif
                  
                         </div>
                    @endforeach -->
                </div>
                <div id="answers" class="tab-pane fade">
                    @foreach($trade as $t)
                        <div class="ans-btun">
                            @if($t->user)
                                <a itemprop="url" href="#"> <img itemprop="image" src="{{ URL::to('uploads',$t->user->profile_picture,is_secured()) }}" alt=""></a>
                                <p class="answer-cont"><a itemprop="url" href="#">
                                {{$t->user->first_name}} {{$t->user->last_name}} 
                                </a></p>
                            @endif
                  
                         </div>
                    @endforeach
                </div>
            </div>
                <!-- <button type="button" class="btn btn-default" style="width:44%; font-size:100%; text-align:center;">Answers</button>
                <button type="button" class="btn btn-default" style="width:47%; font-size:100%;">Question</button> -->
             
          </div>

         
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
                  <li class="active" style="background-color: #F5F5F5;"><a itemprop="url" data-toggle="tab" href="#trade">Ask Everybody</a></li>
                  
              </ul>
            <div class="tab-content">

              
              <div id="trade" class="tab-pane fade in active">
               
               <form action="{{URL::to('trade/answers',null,is_secured())}}" method="post">
                {!! csrf_field() !!}
                  <input type="text" name="brif" placeholder="Enter a brief question" style="border: 1px solid #DDD;width: 100%;height: 38px;padding-left: 10px;" required>
                <p style="font-size:10px;color: #999;"><span style="color: #F60;">200</span> charecers left</p>
                <textarea name="descriptions" style="margin-top: 5%;height: 155px;background-color: #fff;border: 1px solid #DDD;" placeholder="Enter your details here" required></textarea>

                <input type='file' name='image' style="border:1px solid #DDD;width: 100%;" required>

                <p style="font-size:10px;color: #999;"><span style="color: #F60;">2000</span> charecers left</p>
                
                <div class="col-sm-12" style="margin-top:5%;">
                  <p>Choose question category</p>
                      <div class="col-sm-6" style="padding: 0px">
                        <select  style="background-color: #fff;border: 1px solid #DDD;" class="parent_category" name="parent_category">
                           
                            <option value="0">Select Category</option>
                            <option value="1">About BuyerSeller.com</option>
                            <option value="2">Trade</option>
                            <option value="3">Countries and Region</option>
                            <option value="4">Industry</option>
                            <option value="5">Guide</option>
                        </select> 
                        
                      </div>
                      <div class="col-sm-6" style="padding: 0px">
                            <div id="about_bdtdc" class="select_sub-category" data-value="1">
                                <select  style="background-color: #fff;border: 1px solid #DDD;"  name="sub_category1" >
                                        <option>Select sub-category</option> 
                                        <option value="6">About BuyerSeller.com</option>
                                  </select>
                            </div>
                            <div id="trade_category" class="select_sub-category" data-value="2">
                                <select  style="background-color: #fff;border: 1px solid #DDD;"  name="sub_category2" >
                                   
                                    <option value="7">Finding Suppliers</option>
                                    <option value="8">Buyer & Supplier</option>
                                    <option value="9">Communication</option>
                                    <option value="10">Documentation</option>   
                                </select>  
                            </div>
                            <div id="country_category" class="select_sub-category" data-value="3">

                                <select  style="background-color: #fff;border: 1px solid #DDD;"  name="sub_category3" >
                                   
                                    <option value="11">North America</option>
                                    <option value="12">South America</option>
                                    <option value="13">Europe </option>
                                    <option value="14">Asia</option>   
                                </select> 
                            </div>
                            <div id="industry_category" class="select_sub-category" data-value="4">
                                <select  style="background-color: #fff;border: 1px solid #DDD;"  name="sub_category4" >
                                 
                                    <option value="15">Agriculture & Food</option>
                                    <option value="16">Apparel, Textiles</option>
                                    <option value="17">Auto & Transport</option>
                                    <option value="18">Electrical Equipment</option>   
                                    <option value="19">Telecoms</option>   
                                </select> 
                            </div>
                            <!-- <div id="guide_category" class="select_sub-category" value="5">
                                <select  style="background-color: #fff;border: 1px solid #DDD;"  name="sub_category5">
                                   
                                </select> 
                            </div> -->
                       
                      </div>
                    </div>

                <div class="col-sm-12" style="margin-top:2%;">
               <!--    <div class="col-sm-6">
                    <select  style="background-color: #fff;border: 1px solid #DDD;"  name="coin" required>
                    <option value="">1</option>
                    <option value="">10</option>
                    <option value="">50</option>
                    <option value="">100</option>
                  </select>
                  </div>
                  <div class="col-sm-6">
                    <a itemprop="url" href="#" style="margin-left: 20px;color: #06C;">How to get more tokens</a>
                  </div> -->
                </div>
                <div class="col-sm-12" style="margin-top:5%;margin-bottom:3%;">
                  <div>
                    <button type="submit" class="btn btn-default" style="font-size:20px;">Post Question</button>
                  </div>
                </div>
                  </form>
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


</div>
@stop


@section('scripts')
 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
 <script type="text/javascript">

   tinymce.init({ selector:'textarea#my-editor' });


   $(document).ready(function()
  {
      $("#comm").click(function()
      {
          $("#com").toggle();
      });
  });

/***** click sub-category*****/

  //finding suppliers
      $(document).on({click:function(e)
    {
      e.preventDefault();
      // $('.replace_area').html('');
      var parent_id=$(this).attr('data-parentid');
      var category_id=$(this).attr('data-categoryid');
      var value = $("data-categoryid").val();
      var category_url="{!! URL::to('pages/category_submit/category_id') !!}";
      var token = $('input[name="_token"]').val();

      $.post(category_url,{
            '_token':token,
            'parent_id':parent_id,
            'category_id':category_id,
          },function(result){
           $( ".replace_area" ).html(result);
            // // $(".sc").html(category);
            //  $('#ajax_status');

          });
    }},'.finding');




//*******select category and select_sub-category*********//
$('.select_sub-category').hide();
$('#about_bdtdc').show();

$(document).on({change:function(p){
    p.preventDefault();
    var id= $('.parent_category').val();
    // var id1=$('.select_sub-category').val();
    //alert(id);
    $('.select_sub-category').hide();
    $('.select_sub-category[data-value="'+id+'"]').show();
    
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