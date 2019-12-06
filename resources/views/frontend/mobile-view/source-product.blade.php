@extends('mobile-view.layout.master_m')
  @section('content')
  <div class="row padding_0">
    <div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
                    <a itemprop="url" href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block; padding-left: 0;">
                    <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
                    </a>
         </div>
         <div class="cat-pr-list">BdSource</div>
     </div>

<div class="row padding_0" style="background: #fff;">
    		<div class="col-xs-12 padding_0" style="margin-top: 12px;" itemscope itemtype="http://schema.org/Product">
    				<a itemprop="url" href="{{URL::to('product-details/ladies-chiffon-blouse-designs-2013-=1639128431250'),is_secured()}}">
    					<div class="cat_pro_list">
    						<img itemprop="image" class="cat_pro_list_img img-responsive" src="{!! asset('resources/assets/images/nav_img1.jpg',is_secured()) !!}">
    					</div>
    					<div class="cat_pro_list_des">
    						<div style="width: 100%; display: block;position: relative;">
                                  <div class="det_list" style="font-size: 13px; line-height: 20px; padding-bottom: 10px; font-weight: normal; color: #666; padding-top: 0px;">
       
                                 	 CYG-horsehair braid crinoline tubular trim crin 
       								</div>
       								<div class="det_list">
       										US $0.1-0.6
       								</div>
       								<div class="det_list">
       										MOQ: 50 Pieces
       								</div>
       						</div>
       								<div style="display: block;width: 100%; margin:0; padding: 0; clear: both; padding-top: 10px;">
       									<div>
       										<div class="pro_sur"><img style="height:18px;width:18px; float: left;" src="{!! asset('resources/assets/images/Buyer-protection-home.png',is_secured()) !!}">
       										</div>
       										<div class="pro_sur_gld"><img style="height:18px;width:18px; float: left;" src="{!! asset('resources/assets/helpcenter/Gold-membership.png',is_secured()) !!}">
       										 <span style="float: left;font-weight: bold;font-size: 11px;margin-left: 4px;">
       											2 YR
       										 </span>
       										</div>
       										
       										<div class="pro_sur_cnt"><img style="height:16px;width:24px; float: left;" src="{!! asset('resources/assets/global/img/flags/bd.png',is_secured()) !!}">
       										<span style="float:left;font-weight: bold;font-size: 11px; margin-left: 4px;">BD</span>
       										</div>

       									</div>
       								</div>
       							<div style="clear: both;float: left; padding-top: 10px;">
		       							<a itemprop="url" href="#" data-product_id="3969" data-supplier_id="1063" class="btn btn-primary btn-sm contact_supplier"><i class="fa fa-envelope-o"></i>Contact Supplier</a>
		       						</div>
       						</div>
       						</a>
    					</div>
    </div>
  @stop
@section('scripts')
<script type="text/javascript">
  
</script>
@stop