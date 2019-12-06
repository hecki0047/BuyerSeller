
                        

                        <div id="replace_area" style="padding-bottom: 3%;padding-right: 1%;">

                           <a onclick="goBack()"><i class="fa fa-arrow-left" aria-hidden="true"></i>Go Back</a>
                                @if($parent_cat)
                                @if(count($parent_cat)>0)
                                    
                                    @foreach($parent_cat as $data)
                                        <li style="line-height: 48px;">
                                            <a href="{{URL::to('faq-detail',$data->id)}}" style="color: #666;font-size: 14px;">
                                                {{$data->name}}
                                            </a>
                                        </li>
                                    @endforeach
                                @else
                                    <P>There is no matching search result<p>
                                @endif

                                @endif
                        </div>
                        

