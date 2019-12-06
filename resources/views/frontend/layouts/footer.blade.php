<div style="clear:both"></div>
<div class="col-md-12 padding_0 foot-don" style="text-align:center;padding-top:15px">
<div class="col-md-12"><p style="text-align:center;padding-left:5px;font-size:15px">Trade Alert - Delivering the latest product trends and industry news straight to your inbox.
</p>
@if (isset($error))
@endif
</div>
<div class="col-md-4 padding_0 foot-don" style="text-align:center">
</div>
<div class="col-md-4 padding_0 foot-don" style="">
<form action="{!!URL::to('subscript/confirm-email')!!}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="input-group subsc">
<input name="email" type="email" class="form-control note" style="height:47px;border:2px solid #ddd;border-right:0 none;font-size:14px" placeholder="Give your E-mail win a prize" aria-describedby="basic-addon2" required>
<span class="btn btn-default input-group-addon" id="basic-addon2" style="padding:0px"><button style="border:0 none;background:#255e98;height:46px;color:#fff;font-size:17px;padding:10px">Subscribe</button> </span>
</div>
<p style="text-align:left;padding-left:5px;font-size:11px">We’ll never share your email address with a third-party.</p>
</form>
</div>
<div class="col-md-4 padding_0 foot-don" style="text-align:center">
</div>
</div>
<div style="clear:both"></div>
<br><br>
<div id="item_sha" class="row padding_0" style="padding-bottom:2%">
<div class="col-md-12 padding_0">
@if($footers)
@foreach($footers as $footer)
<div class="col-md-2 col-sm-4 single-products footer-list">
<ul class="foot-list" style="font-weight:600"><li>{{ $footer->category_name }}</li></ul>
<ul class="foot-list">
@foreach($footer->sub_pages as $data)
<li><a target="_blank" href="{{ URL::to($data->slug)}}"> {{ $data->category_name}}</a></li>
@endforeach
</ul>
</div>
@endforeach
@endif
</div>
</div>
<br>
<div class="row padding_0" style="border-top:1px solid rgba(0,0,0,0.1);padding-top:2.5%;margin-top:1.0%">
<div class="col-sm-2 col-md-2 hidden-sm">
</div>
<div class="col-md-8 col-sm-8 hidden-sm" style="width:860px">
<div class="col-sm-12 col-md-12">
<div class="col-md-5" style="max-width:300px;padding:0">Free App
<img style="width:93px;height:30px;opacity:1;margin-left:10px" src="{!!asset('assets/frontend/images/Google-Play-button.png')!!}" alt="goole play" />
<img style="width:103px;height:30px;opacity:1" src="{!!asset('assets/frontend/images/apple-app.png')!!}" alt="apple apps" />
</div>
<div class="col-md-2 padding_0 foot-don" style="width:200px;padding-left:15px">Download Manager <img style="width:32px;height:32px;opacity:1" src="{!!asset('assets/frontend/images/download-icon.png')!!}" alt="download butoon"/>
</div>
<div class="col-md-5" style="padding-left:5px;padding-right:0;max-width:300px;float:right">
<div class="foot-res foot-flw" style="">Follow Us on</div>
<div itemscope itemtype="http://schema.org/ProfessionalService" class="col-sm-8 footer-media" style="padding:0;padding-top:3px">
<a rel="external" itemprop="url" style="line-height:3" href="https://www.facebook.com/bdtdc/" target="_blank"> <i style="font-size:32px;padding-right:7px!important" class="fa fa-facebook-square"></i></a>
<a rel="external" itemprop="url" style="line-height:3" href="https://twitter.com/bdtdc" target="_blank"><i style="font-size:32px;padding-right:7px!important" class="fa fa-twitter-square"></i></a>
<a rel="external" itemprop="url" style="line-height:3" href="https://www.youtube.com/c/Bdtdc" target="_blank"><i style="font-size:32px;padding-right:7px!important" class="fa fa-youtube-square"></i></a>
<a rel="external" itemprop="url" style="line-height:3" href="https://plus.google.com/+Bdtdc" target="_blank"><i style="font-size:32px;padding-right:7px!important" class="fa fa-google-plus-square"></i></a>
<a rel="external" itemprop="url" style="line-height:3" href="https://www.linkedin.com/company/bdtdc" target="_blank"><i style="font-size:32px;padding-right:7px!important" class="fa fa-linkedin-square"></i></a>
</div>
</div>
</div>
</div>
<div class="col-sm-2 col-md-2 hidden-sm">
</div>
</div>
<div class="row padding_0">
<div class="col-sm-12 col-xs-12 padding_0" style="">
<div class="text-center" style="margin-top:10px;margin-bottom:15px">
<a target="_blank" style="color:#696763;display:inline-block" href="{{URL::to('wholesale')}}">Wholesaler |</a>
<a target="_blank" style="color:#696763;display:inline-block" href="{{URL::to('Bdsource-home-page')}}">BdSource |</a>
<a target="_blank" style="color:#696763;display:inline-block" href="{{URL::to('bangladesh-suppliers')}}">Bangladesh Suppliers |</a>
<a target="_blank" style="color:#696763;display:inline-block" href="{{URL::to('bangladesh-garments')}}">Bangladesh Garments |</a>
<a target="_blank" style="color:#696763;display:inline-block" href="{{URL::to('selected/supplier-products')}}">Selected Suppliers |</a>
<a target="_blank" style="color:#696763;display:inline-block" href="{{URL::to('online-marketplace')}}">Shop by Category |</a>
<a target="_blank" style="color:#696763;display:inline-block;padding:0 5px" href="{{URL::to('sitemap')}}">Sitemap</a>
</div>
<div style="padding-bottom:8%;color:#696763" class="row">
<div style="text-align:center;margin-left:auto;margin-right:auto;margin-bottom:2px">
<a style="color:#696763" href="{{URL::to('contact')}}"> Contact Us |</a>
<a target="_blank" style="color:#696763" href="{{URL::to('product_listing_policy')}}">Product Listing Policy |</a>
<a target="_blank" style="color:#696763" href="{{URL::to('Intellectual')}}"> Intellectual Property Policy and Infringement Claims |</a>
<a target="_blank" style="color:#696763" href="{{URL::to('Policies_Rules')}}">Privacy Policy</a>
<a target="_blank" style="color:#696763" href="{{URL::to('terms_use')}}">Terms of Use</a>
</div>
<div style="text-align:center;margin-left:auto;margin-right:auto"><span style="position:relative" data-toggle="tooltip" data-title="“Copyright© 2015-<?php echo date("Y"); ?> BuyerSeller.Asia. This entire website and it’s content is protected by United States copyright, registered with the Library of Congress, Washington, D.C. and by The Canadian Government, and other intellectual property laws, and may not be reproduced, rewritten, distributed, re-disseminated, transmitted, displayed, published or broadcast, directly or indirectly, in any medium without the prior written permission of BuyerSeller.”">Copyright©</span> 2018-<?php echo date("Y"); ?>, BuyerSeller.Asia. All Rights Reserved.
</div>
</div>
</div>
<script type="text/javascript">function chatOnClick(){$(".zopim").toggle()};</script>