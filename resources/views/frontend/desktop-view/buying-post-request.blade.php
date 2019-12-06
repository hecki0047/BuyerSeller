@extends('fontend.master3')
@section('content')
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                    <ul class="top-path" style="padding-bottom: 8px;">
                        <li class="top-path-li"><a href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a">Home <i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li"><a href="{{URL::to('BuyerChannel/pages/meet_suppliers',13),is_secured()}}" class="top-path-li-a">BuyerChannel<i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                        
                    </ul>
            </div>
    
  </div>
  <div class="row padding_0" style="background: #fff; padding-bottom: 5%;">
			<div class="col-sm-12 col-lg-12 padding_0">
						<div class="col-xs-12 col-sm-2 col-lg-2 padding_0" style="padding-top: 2%;">
							<a href="#"><button type="button" class="btn btn-primary active center-block" style="border-radius: 5px !important; padding-top: 9px;">
								Post Buying Request</button>
							</a>
							<div class="quots">
								Quotes from 15785 suppliers
								1 Minutes to your first quote
							</div>
							<div class="quots" style="padding-left: 5%; padding-top: 10%;">
								<i class="fa fa-list" style="font-size: 30px; color: #999;position: absolute; padding-top: 9%; margin-left: 6%;"></i>
								<button id="category-show" style="height:44px;border-radius: 5px!important;padding-left: 20%; background-color: #3B495C; color: #fff;" class="form-control category-show" name="search">
																					Buying Requests
																			</button>
							</div>
							<div class="quots" style="background-color: #E8EDF4; padding-left: 0;min-height: 650px;">
										<ul class="buying-ul" >
											<li class="buying-ul-li"><a href="#">Buying Requests</a></li>
											<li class="buying-ul-li" style="background-color: #fff; border-left: 3px solid #f60;"><a href="#" style="color: #f60;">Manage Buying Requests</a></li>
											<li class="buying-ul-li"><a href="#">Manage Sample Requests</a></li>
											<li class="buying-ul-li" style="height: 45px;"><a href="#" style="color: #000; font-weight: bold; font-size: 14px;">BdSource Suppliers</a></li>
											<li class="buying-ul-li"><a href="#">My Suppliers</a></li>
											<li class="buying-ul-li"><a href="#">Recommended Suppliers</a></li>
											<li class="buying-ul-li" style="height: 45px;"><a href="#" style="color: #000; font-weight: bold; font-size: 14px;">For Purchasing Agent</a></li>
											<li class="buying-ul-li"><a href="#">Sourcing Request Sent</a></li>

										</ul>
								
							</div>
							
							
						</div>
						<div class="col-sm-10 col-lg-10">
						<div class="col-sm-12">
							<h2 class="" style="color: #000; padding-bottom: 2%; font-size: 2em;line-height: 1;margin-top: .75em;">My Buying Requests</h2>
						</div>
						
								<a href="#" target="_blank" style="float: right;font-size: 14px; font-weight: bold; color: #000; text-decoration: underline;margin-right: 20px; position: absolute;right: 0; top: 2%;">How to use BdSource ›</a>
						
					<div class="col-sm-12 padding_0">	
							<div class="skin-default" data-name="banner-full" data-skin="default" data-guid="1417155979913" id="guid-1417155979913" data-version="18" data-type="3">
							<div class="module" data-spm="a2724t">

							<div class="banner-full" style="background: ;">
									<a target="_blank" href="#" title="">
									<div class="banner-full-inner buyer-rq-banner"></div>
								</a>
						</div>
						</div>
						</div>
					</div>
				<div class="col-sm-12" style="padding-top: 15px; padding-bottom: 15px;">
							<div class="col-sm-2 padding_0">
							<select id="rfq-manage-select" class="buyer-rq-select" style="display:block;">
							          <option value="" selected="&quot;selected&quot;">All Statuses 6</option>
							          <option value="">Approved 3</option>
							          <option value="">Pending 0</option>
							          <option value="">Rejected 1</option>
							          <option value="">Completed 0</option>
							          <option value="">Closed 2</option>
        					</select>
							</div>
							<div class="col-sm-4 padding_0">
										<label class="" style="padding-left: 25%; padding-top: 5px;display: block;overflow: hidden; float: left;"><input type="checkbox" id="show-unread-btn"> Unread quotes 1</label>
							</div>
							<div class="col-sm-6 padding_0">
											<div class="ui-pagination ui-pagination-pager util-clearfix rfq-manage-list-pagination">
									            
									              <span class="ui-pagination-prev ui-pagination-disabled" style=" background-position: -44px 3px;">previous</span>
									            
									            
									              <span class="ui-pagination-next ui-pagination-disabled" style=" background-position:-27px 3px;">next</span>
									            
									            <label class="ui-label">
									                1 of 1 Page
									            </label>
									        </div>
								
							</div>
					</div>
					<div class="col-sm-12" style="border:1px solid #999; margin-bottom: 12px;">
							<div class="col-sm-12">
								<div class="col-sm-9">
									<a href=""  class="rfq-detail-title" title="" target="_blank">Universal Portable Tablet Handheld Case Stand with </a>
								</div>
								<div class="col-sm-3 padding_0">
											<div class="detail-advanced">
														<div class="brq-pp-img">
																<img  style="width: 38px; height: 38px; border:1px solid #999;" src="{!! asset('assets/fontend/bdtdc-images/HTB1U.jpg_50x50.jpg',is_secured())!!}" all="">
																<ul style="display: block;padding: 0; margin: 0; line-height: 30px;font-size: 13px; color: #666; float: right; padding-top: 11px; position: absolute;top: 4%; left: 23%;">
																	<li class="ul-time-li">Last Updated: 2016-04-1</li>
																	<li class="ul-time-li">Expired Time: 2016-05-11</li>
															
														</ul>
														</div>
														
											</div>
									
								</div>
							</div>
							<div class="col-sm-12">
							
								<div class="col-sm-6">
											<span><i class="fa fa-circle" aria-hidden="true" style="color: #a0a0a0; position: absolute; top: -6px; left: -15px;"></i></span>
											<div style="border:1px solid #a0a0a0;"></div>
											<div class="line">
													<p>Buying Request</p>
													<div>Status: <span>Approved</span></div>
													<div style="border: 0 none; width: 110px;">
													<a href="#"  class="add-p" id="add-details" onMouseOver='details_show()' onMouseOut='hide_details()'>Add Details</a> 
														<span  id="add-details-list"   onMouseOver='details_show()' onMouseOut='hide_details()'>
															<ul style="padding: 0; padding-left: 15px; padding-top: 5px; line-height: 15px;">
																<li><a href="#">Post Again</a></li>
																<li><a href="#">Close</a></li>
															</ul>
														</span>
													</div>
											</div>
									
								</div>
								<div class="col-sm-6">
										<span><i class="fa fa-circle" aria-hidden="true" style="color: #ff751a; position: absolute; top: -6px; left: -7px;"></i></span>
										<div style="border:1px dotted #a0a0a0;"></div>
										<span><i class="fa fa-circle" aria-hidden="true" style="color: #ff751a; position: absolute; top: -6px; right: -15px;"></i></span>
										<div class="line" style="padding-left: 0; margin-left: -15%;">
													<p>Quotations</p>
													<ul style="padding: 0; line-height: 25px;">
														<li><a href="">Quotations 5</a></li>
													    <li><a href="">Messages 0</a></li>
													</ul>
													
													

										</div>
										<div style="float: right;position: absolute; top: 14%; right: 0; font-size: 16px;">
											Samples & Orders
										</div>
									
								</div>
							</div>

					</div>
					<div class="col-sm-12" style="border:1px solid #999; margin-bottom: 12px;">
							<div class="col-sm-12">
								<div class="col-sm-9">
									<a href=""  class="rfq-detail-title" title="" target="_blank">Quick Dry Feature and Women Gender Factory wholesale...</a>
								</div>
								<div class="col-sm-3 padding_0">
											<div class="detail-advanced">
														<div class="brq-pp-img">
																<img  style="width: 38px; height: 38px; border:1px solid #999;" src="{!! asset('assets/fontend/bdtdc-images/HTB1U.jpg_50x50.jpg',is_secured())!!}" all="">
																<ul style="display: block;padding: 0; margin: 0; line-height: 30px;font-size: 13px; color: #666; float: right; padding-top: 11px; position: absolute;top: 4%; left: 23%;">
																	<li class="ul-time-li">Last Updated:<span>2016-04-1</span> </li>
																	<li class="ul-time-li">Expired Time: <span>2016-05-11</span></li>
															
														</ul>
														</div>
														
											</div>
									
								</div>
							</div>
							<div class="col-sm-12">
							
								<div class="col-sm-6">
											<span><i class="fa fa-circle" aria-hidden="true" style="color: #a0a0a0; position: absolute; top: -6px; left: -15px;"></i></span>
											<div style="border:1px solid #a0a0a0;"></div>
											<div class="line">
													<p>Buying Request</p>
													<div>Status: <span>Approved</span></div>
													<div style="border:0 none; width: 110px;">
													<a href=""  class="add-p">Add Details</a> 
														<span style="display: none;">
															<ul style="padding: 0; padding-left: 15px; padding-top: 5px; line-height: 15px;">
																<li><a href="#">Post Again</a></li>
																<li><a href="#">Close</a></li>
															</ul>
														</span>
													</div>
											</div>
									
								</div>
								<div class="col-sm-6">
										<span><i class="fa fa-circle" aria-hidden="true" style="color: #ff751a; position: absolute; top: -6px; left: -7px;"></i></span>
										<div style="border:1px dotted #a0a0a0;"></div>
										<span><i class="fa fa-circle" aria-hidden="true" style="color: #ff751a; position: absolute; top: -6px; right: -15px;"></i></span>
										<div class="line" style="padding-left: 0; margin-left: -15%;">
													<p>Quotations</p>
													<ul style="padding: 0; line-height: 25px;">
														<li><a href="">Quotations 5</a></li>
													    <li><a href="">Messages 0</a></li>
													</ul>
													
													

										</div>
										<div style="float: right;position: absolute; top: 14%; right: 0; font-size: 16px;">
											Samples & Orders
										</div>
									
								</div>
							</div>

					</div>
					<div class="col-sm-12" style="border:1px solid #999; margin-bottom: 12px;">
							<div class="col-sm-12">
								<div class="col-sm-9">
									<a href=""  class="rfq-detail-title" title="" target="_blank">Casual Style and Anti-Wrinkle,Plus Size,Eco-Friendly Featu... </a>
								</div>
								<div class="col-sm-3 padding_0">
											<div class="detail-advanced">
														<div class="brq-pp-img">
																<img  style="width: 38px; height: 38px; border:1px solid #999;" src="{!! asset('assets/fontend/bdtdc-images/HTB1U.jpg_50x50.jpg',is_secured())!!}" all="">
																<ul style="display: block;padding: 0; margin: 0; line-height: 30px;font-size: 13px; color: #666; float: right; padding-top: 11px; position: absolute;top: 4%; left: 23%;">
																	<li class="ul-time-li">Last Updated:<span>2016-04-1</span> </li>
																	<li class="ul-time-li">Expired Time: <span>2016-05-11</span></li>
															
														</ul>
														</div>
														
											</div>
									
								</div>
							</div>
							<div class="col-sm-12">
							
								<div class="col-sm-6">
											<span><i class="fa fa-circle" aria-hidden="true" style="color: #a0a0a0; position: absolute; top: -6px; left: -15px;"></i></span>
											<div style="border:1px solid #a0a0a0;"></div>
											<div class="line">
													<p>Buying Request</p>
													<div>Status: <span>Approved</span></div>
													<div style="border:0 none; width: 110px;">
													<a href=""  class="add-p">Add Details</a> 
														<span style="display: none;">
															<ul style="padding: 0; padding-left: 15px; padding-top: 5px; line-height: 15px;">
																<li><a href="#">Post Again</a></li>
																<li><a href="#">Close</a></li>
															</ul>
														</span>
													</div>
											</div>
									
								</div>
								<div class="col-sm-6">
										<span><i class="fa fa-circle" aria-hidden="true" style="color: #ff751a; position: absolute; top: -6px; left: -7px;"></i></span>
										<div style="border:1px dotted #a0a0a0;"></div>
										<span><i class="fa fa-circle" aria-hidden="true" style="color: #ff751a; position: absolute; top: -6px; right: -15px;"></i></span>
										<div class="line" style="padding-left: 0; margin-left: -15%;">
													<p>Quotations</p>
													<ul style="padding: 0; line-height: 25px;">
														<li><a href="">Quotations 5</a></li>
													    <li><a href="">Messages 0</a></li>
													</ul>
													
													

										</div>
										<div style="float: right;position: absolute; top: 14%; right: 0; font-size: 16px;">
											Samples & Orders
										</div>
									
								</div>
							</div>

					</div>
					<div class="col-sm-12" style="border:1px solid #999; margin-bottom: 12px;">
							<div class="col-sm-12">
								<div class="col-sm-9">
									<a href=""  class="rfq-detail-title" title="" target="_blank">Quick Dry Feature and Women Gender Factory wholesale... </a>
								</div>
								<div class="col-sm-3 padding_0">
											<div class="detail-advanced">
														<div class="brq-pp-img">
																<img  style="width: 38px; height: 38px; border:1px solid #999;" src="{!! asset('assets/fontend/bdtdc-images/HTB1U.jpg_50x50.jpg',is_secured())!!}" all="">
																<ul style="display: block;padding: 0; margin: 0; line-height: 30px;font-size: 13px; color: #666; float: right; padding-top: 11px; position: absolute;top: 4%; left: 23%;">
																	<li class="ul-time-li">Last Updated:<span>2016-04-1</span> </li>
																	<li class="ul-time-li">Expired Time: <span>2016-05-11</span></li>
															
														</ul>
														</div>
														
											</div>
									
								</div>
							</div>
							<div class="col-sm-12">
							
								<div class="col-sm-6">
											<span><i class="fa fa-circle" aria-hidden="true" style="color: #a0a0a0; position: absolute; top: -6px; left: -15px;"></i></span>
											<div style="border:1px solid #a0a0a0;"></div>
											<div class="line">
													<p>Buying Request</p>
													<div>Status: <span>Approved</span></div>
													<div style="border:0 none; width: 110px;">
													<a href=""  class="add-p">Add Details</a> 
														<span style="display: none;">
															<ul style="padding: 0; padding-left: 15px; padding-top: 5px; line-height: 15px;">
																<li><a href="#">Post Again</a></li>
																<li><a href="#">Close</a></li>
															</ul>
														</span>
													</div>
											</div>
									
								</div>
								<div class="col-sm-6">
										<span><i class="fa fa-circle" aria-hidden="true" style="color: #ff751a; position: absolute; top: -6px; left: -7px;"></i></span>
										<div style="border:1px dotted #a0a0a0;"></div>
										<span><i class="fa fa-circle" aria-hidden="true" style="color: #ff751a; position: absolute; top: -6px; right: -15px;"></i></span>
										<div class="line" style="padding-left: 0; margin-left: -15%;">
													<p>Quotations</p>
													<ul style="padding: 0; line-height: 25px;">
														<li><a href="">Quotations 5</a></li>
													    <li><a href="">Messages 0</a></li>
													</ul>
													
													

										</div>
										<div style="float: right;position: absolute; top: 14%; right: 0; font-size: 16px;">
											Samples & Orders
										</div>
									
								</div>
							</div>

					</div>
					<div class="col-sm-12" style="border:1px solid #999; margin-bottom: 12px;">
							<div class="col-sm-12">
								<div class="col-sm-9">
									<a href=""  class="rfq-detail-title" title="" target="_blank">8XL Outdoor Jackets Add fertilizer increasede men... </a>
								</div>
								<div class="col-sm-3 padding_0">
											<div class="detail-advanced">
														<div class="brq-pp-img">
																<img  style="width: 38px; height: 38px; border:1px solid #999;" src="{!! asset('assets/fontend/bdtdc-images/HTB1U.jpg_50x50.jpg',is_secured())!!}" all="">
																<ul style="display: block;padding: 0; margin: 0; line-height: 30px;font-size: 13px; color: #666; float: right; padding-top: 11px; position: absolute;top: 4%; left: 23%;">
																	<li class="ul-time-li">Last Updated:<span>2016-04-1</span> </li>
																	<li class="ul-time-li">Expired Time: <span>2016-05-11</span></li>
															
														</ul>
														</div>
														
											</div>
									
								</div>
							</div>
							<div class="col-sm-12">
							
								<div class="col-sm-6">
											<span><i class="fa fa-circle" aria-hidden="true" style="color: #a0a0a0; position: absolute; top: -6px; left: -15px;"></i></span>
											<div style="border:1px solid #a0a0a0;"></div>
											<div class="line">
													<p>Buying Request</p>
													<div>Status: <span>Approved</span></div>
													<div style="border:0 none; width: 110px;">
													<a href=""  class="add-p">Add Details</a> 
														<span style="display: none;">
															<ul style="padding: 0; padding-left: 15px; padding-top: 5px; line-height: 15px;">
																<li><a href="#">Post Again</a></li>
																<li><a href="#">Close</a></li>
															</ul>
														</span>
													</div>
											</div>
									
								</div>
								<div class="col-sm-6">
										<span><i class="fa fa-circle" aria-hidden="true" style="color: #ff751a; position: absolute; top: -6px; left: -7px;"></i></span>
										<div style="border:1px dotted #a0a0a0;"></div>
										<span><i class="fa fa-circle" aria-hidden="true" style="color: #ff751a; position: absolute; top: -6px; right: -15px;"></i></span>
										<div class="line" style="padding-left: 0; margin-left: -15%;">
													<p>Quotations</p>
													<ul style="padding: 0; line-height: 25px;">
														<li><a href="">Quotations 5</a></li>
													    <li><a href="">Messages 0</a></li>
													</ul>
													
													

										</div>
										<div style="float: right;position: absolute; top: 14%; right: 0; font-size: 16px;">
											Samples & Orders
										</div>
									
								</div>
							</div>

					</div>
					<div class="col-sm-12" style="border:1px solid #999; margin-bottom: 12px;">
							<div class="col-sm-12">
								<div class="col-sm-9">
									<a href=""  class="rfq-detail-title" title="" target="_blank">8XL Outdoor Jackets Add fertilizer increasede men , </a>
								</div>
								<div class="col-sm-3 padding_0">
											<div class="detail-advanced">
														<div class="brq-pp-img">
																<img  style="width: 38px; height: 38px; border:1px solid #999;" src="{!! asset('assets/fontend/bdtdc-images/HTB1U.jpg_50x50.jpg',is_secured())!!}" all="">
																<ul style="display: block;padding: 0; margin: 0; line-height: 30px;font-size: 13px; color: #666; float: right; padding-top: 11px; position: absolute;top: 4%; left: 23%;">
																	<li class="ul-time-li">Last Updated:<span>2016-04-1</span> </li>
																	<li class="ul-time-li">Expired Time: <span>2016-05-11</span></li>
															
														</ul>
														</div>
														
											</div>
									
								</div>
							</div>
							<div class="col-sm-12">
							
								<div class="col-sm-6">
											<span><i class="fa fa-circle" aria-hidden="true" style="color: #a0a0a0; position: absolute; top: -6px; left: -15px;"></i></span>
											<div style="border:1px solid #a0a0a0;"></div>
											<div class="line">
													<p>Buying Request</p>
													<div>Status: <span>Approved</span></div>
													<div style="border:0 none; width: 110px;">
													<a href=""  class="add-p">Add Details</a> 
														<span style="display: none;">
															<ul style="padding: 0; padding-left: 15px; padding-top: 5px; line-height: 15px;">
																<li><a href="#">Post Again</a></li>
																<li><a href="#">Close</a></li>
															</ul>
														</span>
													</div>
											</div>
									
								</div>
								<div class="col-sm-6">
										<span><i class="fa fa-circle" aria-hidden="true" style="color: #ff751a; position: absolute; top: -6px; left: -7px;"></i></span>
										<div style="border:1px dotted #a0a0a0;"></div>
										<span><i class="fa fa-circle" aria-hidden="true" style="color: #ff751a; position: absolute; top: -6px; right: -15px;"></i></span>
										<div class="line" style="padding-left: 0; margin-left: -15%;">
													<p>Quotations</p>
													<ul style="padding: 0; line-height: 25px;">
														<li><a href="">Quotations 5</a></li>
													    <li><a href="">Messages 0</a></li>
													</ul>
													
													

										</div>
										<div style="float: right;position: absolute; top: 14%; right: 0; font-size: 16px;">
											Samples & Orders
										</div>
									
								</div>
							</div>

					</div>

					<!-- product here display   -->
					<div class="col-sm-12">
								<div class="ui-pagination ui-pagination-pager util-clearfix rfq-manage-list-pagination">
									            
									              <span class="ui-pagination-prev ui-pagination-disabled" style=" background-position: -44px 3px;">previous</span>
									            
									            
									              <span class="ui-pagination-next ui-pagination-disabled" style=" background-position:-27px 3px;">next</span>
									            
									            <label class="ui-label">
									                1 of 1 Page
									            </label>
									        </div>
						
					</div>	
				<div class="col-sm-12">
					<div class="col-sm-3 padding_0">

							<div class="product-box" style="width: 100%;">
			                       <div class="cat-product-img-box">
			                              <a target="_blank" href="http://www.bdtdc.com/product_details/2928"><img style="height: 225px;max-height: 220px;" class="product-fassion-img" src="http://www.bdtdc.com/uploads/product_photo_hdbtBndER1.jpg" alt="fashion-dress"></a>
			                       </div>
			                       <a target="_blank" href="http://www.bdtdc.com/product_details/2928">
			                             <div class="cat-item-title">Ladies Evening Dress - Night Dress </div>

			                       </a>
			                       <div class="dollar-price"><span class="dollar">US $2.8 - 3</span> / pieces</div>
			                       <div class="item-views"><span class="online-view">1000+ </span>views 
			                        
			                       </div>
			                      
			                       <div style="padding-left: 10px;padding-bottom: 1%" class="product-view-extend">
			                            <a data-product_id="2928" data-supplier_id="1002" class="btn btn-primary btn-join contact_supplier"><i class="fa fa-envelope-o"></i> Contact Supplier</a>
			                       </div>                      
			                </div>
						
					</div>
					<div class="col-sm-3 padding_0">
						<div class="product-box" style="width: 100%;">
                       <div class="cat-product-img-box">
                              <a target="_blank" href="http://www.bdtdc.com/product_details/2927"><img style="height: 225px;max-height: 220px;" class="product-fassion-img" src="http://www.bdtdc.com/uploads/product_photo_Rxh9MKezOL.jpg" alt="fashion-dress"></a>
                       </div>
                       <a target="_blank" href="http://www.bdtdc.com/product_details/2927">
                             <div class="cat-item-title">DRESS FOR LADIES DRESSES </div>

                       </a>
                       <div class="dollar-price"><span class="dollar">US $NA</span> / pieces</div>
                       <div class="item-views"><span class="online-view">1000+ </span>views 
                        
                       </div>
                      
                       <div style="padding-left: 10px;padding-bottom: 1%" class="product-view-extend">
                            <a data-product_id="2927" data-supplier_id="1002" class="btn btn-primary btn-join contact_supplier"><i class="fa fa-envelope-o"></i> Contact Supplier</a>
                       </div>                      
                		</div>
					</div>
					<div class="col-sm-3 padding_0">
								<div class="product-box" style="width: 100%;">
			                       <div class="cat-product-img-box">
			                              <a target="_blank" href="http://www.bdtdc.com/product_details/2925"><img style="height: 225px;max-height: 220px;" class="product-fassion-img" src="http://www.bdtdc.com/uploads/product_photo_SK6ZSxnnVN.jpg" alt="fashion-dress"></a>
			                       </div>
			                       <a target="_blank" href="http://www.bdtdc.com/product_details/2925">
			                             <div class="cat-item-title">Ladies Fitnesswear Set </div>

			                       </a>
			                       <div class="dollar-price"><span class="dollar">US $2.5 - 2.6</span> / pieces</div>
			                       <div class="item-views"><span class="online-view">1000+ </span>views 
			                        
			                       </div>
			                      
			                       <div style="padding-left: 10px;padding-bottom: 1%" class="product-view-extend">
			                            <a data-product_id="2925" data-supplier_id="1002" class="btn btn-primary btn-join contact_supplier"><i class="fa fa-envelope-o"></i> Contact Supplier</a>
			                       </div>                      
			                			</div>
					</div>
					<div class="col-sm-3 padding_0">
									<div class="product-box" style="width: 100%;border-right: solid 1px #dae2ed;">
                       <div class="cat-product-img-box">
                              <a target="_blank" href="http://www.bdtdc.com/product_details/2924"><img style="height: 225px;max-height: 220px;" class="product-fassion-img" src="http://www.bdtdc.com/uploads/product_photo_PXEhPw0cLc.jpg" alt="fashion-dress"></a>
                       </div>
                       <a target="_blank" href="http://www.bdtdc.com/product_details/2924">
                             <div class="cat-item-title">Skirt - Ladies Skirt </div>

                       </a>
                       <div class="dollar-price"><span class="dollar">US $2.25 - 2.5 </span> / pieces</div>
                       <div class="item-views"><span class="online-view">1000+ </span>views 
                        
                       </div>
                      
                       <div style="padding-left: 10px;padding-bottom: 1%" class="product-view-extend">
                            <a data-product_id="2924" data-supplier_id="1002" class="btn btn-primary btn-join contact_supplier"><i class="fa fa-envelope-o"></i> Contact Supplier</a>
                       </div>                      
                   </div>
						
					</div>
					
				</div>	
			</div>
			

				
		</div>  	
  </div>
 @stop
 @section('scripts')

<script type="text/javascript">

		 function details_show()
       {
       document.getElementById('add-details-list').style.display="block";
 				// var cols = document.getElementsByClassName(add-details-list);
 				// cols.style.display = block;
        }

        function hide_details()
        {
         document.getElementById('add-details-list').style.display="none";
     //     var cols = document.getElementsByClassName(add-details-list);
 				// cols.style.display = none;
       }
</script>
@stop 