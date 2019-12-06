@extends('mobile-view.layout.master_m')
	@section('content')
	<div class="row padding_0">
			<div class="header-wrap-mess"><p class="cat-pr-list">US Warehouses</p></div>
			<div class="col-xs-12 padding_0">
				<div>
					<img class="img-responsive" src="{!!asset('assets/images/warehouse.jpg',is_secured())!!}">
				</div>
			</div>
	</div>
	<div class="row padding_0">
				<div class="col-xs-12">
				  <ul class="nav nav-tabs ware-pro">
				    <li class="active"><a data-toggle="tab" href="#Apparel_ware">Apparel</a></li>
				    <li><a data-toggle="tab" href="#Electronics_ware">Consumer Electronics</a></li>
				    <li><a data-toggle="tab" href="#Jewelry_ware">Jewelry&watches</a></li>
				    <li><a data-toggle="tab" href="#Furniture_ware">Furniture</a></li>
				    <li><a data-toggle="tab" href="#garden_ware">Home&garden</a></li>
				  </ul>

				  <div class="tab-content">
				    <div id="Apparel_ware" class="tab-pane fade in active">
				     <div>
				      	 <a href="{{URL::to('product-details/ladies-chiffon-blouse-designs-2013-=1639128431250'),is_secured()}}">
    						<div class="cat_pro_list-wahehouse">
    								<img class="cat_pro_list_img img-responsive" src="{!! asset('assets/images/product_photo_xrOn4IPB7e.jpg',is_secured()) !!}">
    							</div>
             				 </a>
    					<div class="cat_pro_list_des">
    						<div style="width: 100%; display: block;position: relative;">
                                  <div class="det_list wp-title">
       
                                 	 CYG-horsehair braid crinoline tubular trim crin 
       								</div>
       								<div class="det_list">
       										US $0.1-0.6
       								</div>
       								<div class="det_list">
       										MOQ: 50 Pieces
       								</div>
       						</div>
				      	</div>
				      </div>
				    </div>
				    <div id="Electronics_ware" class="tab-pane fade">
				      <div>
				      	 <a href="{{URL::to('product-details/ladies-chiffon-blouse-designs-2013-=1639128431250'),is_secured()}}">
    						<div class="cat_pro_list-wahehouse">
    								<img class="cat_pro_list_img img-responsive" src="{!! asset('assets/images/product_photo_xFyP75Kz7m.jpg',is_secured()) !!}">
    							</div>
             				 </a>
    					<div class="cat_pro_list_des">
    						<div style="width: 100%; display: block;position: relative;">
                                  <div class="det_list wp-title">
       
                                 	 CYG-horsehair braid crinoline tubular trim crin 
       								</div>
       								<div class="det_list">
       										US $0.1-0.6
       								</div>
       								<div class="det_list">
       										MOQ: 50 Pieces
       								</div>
       						</div>
				      	</div>
				      </div>
				    </div>
				    <div id="Jewelry_ware" class="tab-pane fade">
				      <div>
				      	 <a href="{{URL::to('product-details/ladies-chiffon-blouse-designs-2013-=1639128431250'),is_secured()}}">
    						<div class="cat_pro_list-wahehouse">
    								<img class="cat_pro_list_img img-responsive" src="{!! asset('assets/images/product_photo_xrOn4IPB7e.jpg',is_secured()) !!}">
    							</div>
             				 </a>
    					<div class="cat_pro_list_des">
    						<div style="width: 100%; display: block;position: relative;">
                                  <div class="det_list wp-title">
       
                                 	 CYG-horsehair braid crinoline tubular trim crin 
       								</div>
       								<div class="det_list">
       										US $0.1-0.6
       								</div>
       								<div class="det_list">
       										MOQ: 50 Pieces
       								</div>
       						</div>
				      	</div>
				      </div>
				    </div>
				    <div id="Furniture_ware" class="tab-pane fade">
				     <div>
				      	 <a href="{{URL::to('product-details/ladies-chiffon-blouse-designs-2013-=1639128431250'),is_secured()}}">
    						<div class="cat_pro_list-wahehouse">
    								<img class="cat_pro_list_img img-responsive" src="{!! asset('assets/images/product_photo_xFyP75Kz7m.jpg',is_secured()) !!}">
    							</div>
             				 </a>
    					<div class="cat_pro_list_des">
    						<div style="width: 100%; display: block;position: relative;">
                                  <div class="det_list wp-title">
       
                                 	 CYG-horsehair braid crinoline tubular trim crin 
       								</div>
       								<div class="det_list">
       										US $0.1-0.6
       								</div>
       								<div class="det_list">
       										MOQ: 50 Pieces
       								</div>
       						</div>
				      	</div>
				      </div>
				    </div>
				    <div id="garden_ware" class="tab-pane fade">
				      <div>
				      	 <a href="{{URL::to('product-details/ladies-chiffon-blouse-designs-2013-=1639128431250'),is_secured()}}">
    						<div class="cat_pro_list-wahehouse">
    								<img class="cat_pro_list_img img-responsive" src="{!! asset('assets/images/product_photo_xmW2h7k4tS.jpg',is_secured()) !!}">
    							</div>
             				 </a>
    					<div class="cat_pro_list_des">
    						<div style="width: 100%; display: block;position: relative;">
                                  <div class="det_list wp-title">
       
                                 	 CYG-horsehair braid crinoline tubular trim crin 
       								</div>
       								<div class="det_list">
       										US $0.1-0.6
       								</div>
       								<div class="det_list">
       										MOQ: 50 Pieces
       								</div>
       						</div>
				      	</div>
				      </div>
				    </div>
				  </div>
				</div>

	</div>
@stop