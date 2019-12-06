
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
                    <a itemprop="url" href="{{URL::to('trade/answers',$t->id,is_secured())}}">
                        @if($t->brif)
                            <p>{{$i}}. {{$t->brif}}</p>
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
                                <div class="fst">
              <p class="fst-p"><span><i class="fa fa-lightbulb-o"></i>
              </span>Answer the question within 30 mins, you will get double points  x2!</p>
              </div>

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
                            <p>{{$i}}. {{$t->brif}}</p>
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
                         </a> in <a itemprop="url" href="#">Other Trade Processes</a>
                         
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
                                <div class="fst">
              <p class="fst-p"><span><i class="fa fa-lightbulb-o"></i>
              </span>Answer the question within 30 mins, you will get double points  x2!</p>
              </div>

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
                    <p>{{$i}}. {{$t->brif}}</p>
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
                 </a> in <a itemprop="url" href="#">Other Trade Processes</a>
                 
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

     

