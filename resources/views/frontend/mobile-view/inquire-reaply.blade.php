@extends('mobile-view.layout.master_m')
	@section('content')
	<div class="row padding_0">
           <div class="col-xs-12 padding_0">
         				 <div class="cat-pr-list" id="one"><span style="padding-right: 15px;"><i class="fa fa-arrow-left" style="font-size: 20px; font-weight: normal;width: 25px;" aria-hidden="true"></i></span>Inquiry Session</div>
            </div>
    </div>
    <div class="row padding_0">
                <div class="col-sm-12 col-xs-12 padding_0" style="background: #ddd;">
                <p class="pt-title">2016 New Customized Genuine Leather Flip Cover Phone Case for Apple iPhone 7 7 plus Skin</p>
                </div>
    </div>
    <div class="row padding_0" style="background: #fff;">
                <div class="col-xs-12">
                        <div style="text-align: center; padding: 15px 0;">
                            <span style="font-weight: normal;font-size: 13px; color:#666;">2016-12-07</span>
                        </div>
                        
                </div>
    </div>
 <div class="row padding_0" style="background: #fff; padding-bottom: 5%; margin-bottom: 20px; border-bottom: 1px solid #ddd;">
        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading" id="accordion">
                    <span class="glyphicon glyphicon-comment"></span> Chat
                    <div class="btn-group pull-right">
                        <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </div>
            <div class="panel-collapse collapse" id="collapseOne">
                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix"><span class="chat-img-ct pull-left">
                            <img src="{!! asset('assets/images/fff&text=U.png',is_secured()) !!}" alt="User Name" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                </div>
                                <p class="chat-pp">
                                    <span>
                                    <img class="img-responsive" style="max-width: 80px; max-height: 80px; float: left;" src="{!! asset('assets/images/product_photo_xrOn4IPB7e.jpg',is_secured()) !!}">
                                    </span>
                                    2016 New Customized Genuine Leather Flip Cover Phone Case for Apple iPhone 7 7 plus Skin
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img-ct pull-right">
                        <img src="{!! asset('assets/images/fff&text=ME.png',is_secured()) !!}" alt="User Name" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p class="chat-pp">
                                    2016 New Customized Genuine Leather Flip Cover Phone Case for Apple iPhone 7 7 plus Skin
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img-ct pull-left">
                             <img src="{!! asset('assets/images/fff&text=U.png',is_secured()) !!}" alt="User Name" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Jack Sparrow</strong> <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                </div>
                                <p class="chat-pp">
                                    2016 New Customized Genuine Leather Flip Cover Phone Case for Apple iPhone 7 7 plus Skin
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img-ct pull-right">
                            <img src="{!! asset('assets/images/fff&text=ME.png',is_secured()) !!}" alt="User Name" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                </div>
                                <p class="chat-pp">
                                    2016 New Customized Genuine Leather Flip Cover Phone Case for Apple iPhone 7 7 plus Skin
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                Send</button>
                        </span>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@stop