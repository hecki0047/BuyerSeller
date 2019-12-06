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
						<div class="col-xs-12 col-sm-3 col-lg-3 padding_0" style="padding-top: 2%;">
							
							@include('fontend.layouts.dashboard-sidebar')
							
							
						</div>
						<div class="col-sm-9 col-lg-9">
						<div class="col-sm-12">
							<h2 class="" style="color: #000; padding-bottom: 2%; font-size: 2em;line-height: 1;margin-top: .75em;">My Extra Inquery</h2>
							
						</div>
						
								<a href="{{ URL::to('get_qutations') }}" target="_blank" style="float: right;font-size: 14px; font-weight: bold; color: #000; text-decoration: underline;margin-right: 20px; position: absolute;right: 0; top: 2%;">Post a buying request</a>
						
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
							          <option value="" selected="&quot;selected&quot;">All Status 6</option>
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
					
			</div>
			

				
		</div>  	
  </div>
 @stop
 @section('scripts')
@include('frontend.layouts.dashboard_aside_scripts')
<script type="text/javascript">
	$(document).on({
			mouseover:function(){
				$(this).parent().children('span.add-details-list').css('display','block');
			}
		},'.add-p');
		$(document).on({
			mouseleave:function(){
				$('span.add-details-list').css('display','none');
			}
		},'.add-p');
		$(document).on({
			mouseover:function(){
				$(this).css('display','block');
			}
		},'.add-details-list');
		$(document).on({
			mouseleave:function(){
				$('span.add-details-list').css('display','none');
			}
		},'.add-details-list');
</script>
@stop 