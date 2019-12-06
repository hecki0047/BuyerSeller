@extends('mobile-view.layout.master_m')
	@section('content')
<section>
<div class="container">
    <div class="slider-choise m-{{ $bg_image ?? ''}}">
                            <div class="container">
                                <div class="row">
                                </div>
                            </div>
                                
                                
                        
        </div>
    </div>
</section>
<section>
<div class="container">
    <div class="row"> 
        <div style="max-height: 200px;background-color: #1686cc;display: block;padding-bottom: 5%;">
            <div class="row ">
                <div class="col-sm-12 col-md-12" style="padding: 0 30px;">
                    <h1 style="margin-top: 2.5%;margin-left: 14px;text-align: center;font-size: 15px; margin-bottom: 0; line-height: 22px;" class="country-trade-title">Effective sourcing from {{ $page_name ?? 'selected'}} suppliers.</h1>
                </div> 
            </div>
            <div class="row get-q" style="padding-left: 0%;margin-top: 4%;">
                <a itemprop="url" style="width: 220px; display: block;margin: 0 auto;" href="{{ URL::to('get-quotations') }}" target="_blank" class="btn btn-primary btn-join" style="height:47px;border-radius:5px;">Get Quotations Now</a>
            </div>
    </div>
                    
</div>
</div>
</section>
<section>
<div class="container">
    <div class="row">
        <div class="col-md-12 padding_0" style="padding-bottom: 1%;padding-left: 2%">
            <ul style="margin-left: -2%" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li style="float: left;" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="{{ URL::to('/',null,is_secured()) }}" style="color: #000"> Home &nbsp;</a></li>
            <li style="float: left" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="url" href="" style="color: #000"> <i class="fa fa-angle-right"></i> {{ $page_name }} products <i class="fa fa-angle-right"></i></a></li></ul>
        </div>
    </div>
<div class="row" style="margin-top: 20px;">

    <div class="col-sm-12 padding_0">
    @foreach($products as $p)
    <?php
                    $pname = 'not available';
                    if($p->pro_to_cat_name){
                        $pname = $p->pro_to_cat_name->name ?? 'Unknown';
                    }
                ?>
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6" style="padding: 7.5px">
     <div class="bdpro-hovereffect">
            <a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $pname).'='.mt_rand(100000000, 999999999).$p->product_id) }}"> 
                @if($p->pro_images_new)
                    <img itemprop="image"  title="{{ $pname }}" style="width:232px;height: 232px;margin: 0 auto;" class="img-thumbnail pro-imges" src="{!! asset($p->pro_images_new->image) !!}" alt="{{ $pname }}" />
                  
                @else
                <img itemprop="image" title="{{ $pname }}" style="width:232px;height: 232px;margin: 0 auto;" class="img-thumbnail pro-imges" src="{!! asset('uploads/no-image.jpg') !!}" alt="{{ $pname }}" />
                @endif
            <div class="bdpro-overlay" style="padding: 5px">
            <a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $pname).'='.mt_rand(100000000, 999999999).$p->product_id) }}"> 
                <h2>{{ substr($p->pro_to_cat_name->name,0,50) }}</h2>
                </a>
				<p style="padding: 0px">
					<a style="color: white!important" href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $pname).'='.mt_rand(100000000, 999999999).$p->product_id) }}"> <?php
                            if ($p->bdtdcProduct) {
                                if ($p->bdtdcProduct->product_prices) {
                                    if($p->bdtdcProduct->product_prices->product_FOB){
                                        if($p->bdtdcProduct->product_prices->product_FOB=='N/A')
                                        {
                                            echo "ask current price";
                                        }
                                        else{
                                    echo "<strong>  US $</strong>".$p->bdtdcProduct->product_prices->product_FOB;
                                    }
                                    }

                                }else{echo "Price not available";}
                            }else{echo "product not available";}
                         /*if($p->bdtdcProduct->product_prices != null){
                                if($p->bdtdcProduct->product_prices->product_FOB != null){
                                    echo $p->bdtdcProduct->product_prices->product_FOB;
                                }else{}
                            }else{}*/ ?>/<?php
                            if ($p->bdtdcProduct) {
                                if ($p->bdtdcProduct->ProductUnit) {
                                    echo $p->bdtdcProduct->ProductUnit->name;
                                }else{echo "pieces";}
                            }else{echo "price not available";}
                             /*if($p->bdtdcProduct->ProductUnit != null){
                                    echo $p->bdtdcProduct->ProductUnit->name;
                                }else{echo "pieces"; }*/ ?>
                           
                            <span style="width:100%; text-align: center"><?php 
                            if ($p->bdtdcProduct) {
                                if ($p->bdtdcProduct->product_prices) {
                                    echo $p->bdtdcProduct->product_prices->product_MOQ;
                                }else{echo "none";}
                            }else{echo "product not available";}
                            /*if($p->bdtdcProduct->product_prices != null){
                                if($p->bdtdcProduct->product_prices->product_MOQ != null){
                                    echo $p->bdtdcProduct->product_prices->product_MOQ;
                                }else{}
                            }else{}*/ ?>(Min. Order)</span></a>
				</p>
				<a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $pname).'='.mt_rand(100000000, 999999999).$p->product_id) }}" type="button" class="btn btn-primary" style="border-radius: 4px !important;padding: 5%;">Source Now</a>
            </div>
            </a>
            </div>
            <div class="sp-l-t-j" style="padding: 5%;background-color: #fff">
            <div class="fea-info-tit" style="padding: 1%;    height: auto;font-size: 12px;margin: 0px;padding-top: 4%;">
            <a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $pname).'='.mt_rand(100000000, 999999999).$p->product_id) }}"> 
            <h4 style="font-size: 16px;margin: 0px;white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">
                {{$pname}}
            </h4>
        </a>
            <div class="fea-info-tit" style="line-height: 20px;    height: auto;font-size: 11px;opacity: .7">
                <?php 
                             ?>
                             <?php
                             if ($p->supp_pro_company) {
                                echo '<a itemprop="url" target="_blank" href="'.URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$p->supp_pro_company_name->name)).'/'.$p->company_id.'">';
                             }else{echo "company not available";}
                             ?>
                              
                                    
                                    <?php
                                    if ($p->supp_pro_company_name) {
                                        echo substr($p->supp_pro_company_name->name,0,20);
                                     }else{echo "company not available";}
                                    
                                    ?>
                                    </a>
            </div>
                   <?php
                            if ($p->bdtdcProduct) {
                                if ($p->bdtdcProduct->product_prices) {
                                    if($p->bdtdcProduct->product_prices->product_FOB){
                                        if($p->bdtdcProduct->product_prices->product_FOB=='N/A')
                                        {
                                            echo "ask current price";
                                        }
                                        else{
                                    echo "<strong>  US $</strong>".$p->bdtdcProduct->product_prices->product_FOB;
                                    }
                                    }

                                }else{echo "Price not available";}
                            }else{echo "product not available";}
                         ?>/<?php
                            if ($p->bdtdcProduct) {
                                if ($p->bdtdcProduct->ProductUnit) {
                                    echo $p->bdtdcProduct->ProductUnit->name;
                                }else{echo "pieces";}
                            }else{echo "price not available";}
                             ?>
                           
                            <p style="width:100%; text-align: center;margin: 0px;line-height: 21px;"><?php 
                            if ($p->bdtdcProduct) {
                                if ($p->bdtdcProduct->product_prices) {
                                    echo $p->bdtdcProduct->product_prices->product_MOQ;
                                }else{echo "none";}
                            }else{echo "product not available";}
                             ?>(Min. Order)</p>
                </div>
             <div class="fea-info-tit" style="padding: 2%;    height: auto;">
                   <a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $pname).'='.mt_rand(100000000, 999999999).$p->product_id) }}" type="button" class="btn btn-primary" style="border-radius: 4px !important;padding: 6px 10px; background: #255E98;"><h2 class="summery"><span itemprop="name" style="color: #fbf4f4;font-size: 14px;"> Contact Supplier</span></h2>
                   </a>
                </div>
            
                
                
            </div>



            </div>
        @endforeach

        {!! $products->render() !!}
        </div>
        </div>
</div>
</section>
<section>
<div class="container">
<div class="col-md-12 padding_0">
   
    <a class="more" itemprop="url" href="#" style="padding-left: 25px; margin-top: 10px; margin-bottom: 10px; display: block;"><i class="fa fa-list-ul"></i> Premium Rated Products</a>
    

     @foreach($primium as $p)
            <?php
                    $pname = 'not available';
                    if($p->pro_to_cat_name){
                        $pname = $p->pro_to_cat_name->name ?? 'Unknown';
                    }
                ?>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 25px 0;background: white; margin-bottom: 2px">
       <div class="bdpro-hovereffect2">
           <a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $pname).'='.mt_rand(100000000, 999999999).$p->product_id) }}">
       
                @if($p->pro_images_new)
                    <img itemprop="image"  title="{{ $pname }}" style="width:232px;height: 232px;min-height: 232px;padding: 0; margin: 0 auto;" class="img-thumbnail pro-imges" src="{!! asset($p->pro_images_new->image) !!}" alt="{{ $pname }}" />
                   
                @else
                <img itemprop="image" title="{{ $pname }}" style="width:232px;height: 232px;min-height: 232px;padding: 0;margin: 0 auto;" class="img-thumbnail pro-imges" src="{!! asset('uploads/no-image.jpg') !!}" alt="{{ $pname }}" />
                @endif

               </a>
        </div>
        <div style="padding: 5%;background-color: #fff">
         <div class="fea-info-tit" style="padding: 1%;    height: auto;font-size: 12px;margin: 0px;padding-top: 4%;">
            
            <h4 style="font-size: 16px;margin: 0px">
            <a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $pname).'='.mt_rand(100000000, 999999999).$p->product_id) }}">
                {{ substr($pname,0,18) }}..
            </a>
            </h4>
          
            <div class="fea-info-tit" style="line-height: 20px;    height: auto;font-size: 11px;opacity: .7">
                <?php 
                             ?>
                             <?php
                             if ($p->supp_pro_company) {
                                echo '<a itemprop="url" target="_blank" href="'.URL::to('Home/'.preg_replace('/[^A-Za-z0-9\-]/', '-',$p->supp_pro_company_name->name)).'/'.$p->company_id.'">';
                             }else{echo "company not available";}
                             ?>
                              
                                    
                                    <?php
                                    if ($p->supp_pro_company_name) {
                                        echo substr($p->supp_pro_company_name->name,0,20);
                                     }else{echo "company not available";}
                                    /*if($p->bdtdcProduct->supplier_product->sup_companies->name_string->name != null){
                                        echo $p->bdtdcProduct->supplier_product->sup_companies->name_string->name;
                                    }else{
                                        echo "no data";
                                    }*/
                                    ?>
                    </a>
            </div>
                   <?php
                            if ($p->bdtdcProduct) {
                                if ($p->bdtdcProduct->product_prices) {
                                    if($p->bdtdcProduct->product_prices->product_FOB){
                                        if($p->bdtdcProduct->product_prices->product_FOB=='N/A')
                                        {
                                            echo "ask current price";
                                        }
                                        else{
                                    echo "<strong>  US $</strong>".$p->bdtdcProduct->product_prices->product_FOB;
                                    }
                                    }

                                }else{echo "Price not available";}
                            }else{echo "product not available";}
                         /*if($p->bdtdcProduct->product_prices != null){
                                if($p->bdtdcProduct->product_prices->product_FOB != null){
                                    echo $p->bdtdcProduct->product_prices->product_FOB;
                                }else{}
                            }else{}*/ ?>/<?php
                            if ($p->bdtdcProduct) {
                                if ($p->bdtdcProduct->ProductUnit) {
                                    echo $p->bdtdcProduct->ProductUnit->name;
                                }else{echo "pieces";}
                            }else{echo "price not available";}
                             /*if($p->bdtdcProduct->ProductUnit != null){
                                    echo $p->bdtdcProduct->ProductUnit->name;
                                }else{echo "pieces"; }*/ ?>
                           
                            <p style="width:100%; text-align: center;margin: 0px;line-height: 21px;"><?php 
                            if ($p->bdtdcProduct) {
                                if ($p->bdtdcProduct->product_prices) {
                                    echo $p->bdtdcProduct->product_prices->product_MOQ;
                                }else{echo "none";}
                            }else{echo "product not available";}
                            /*if($p->bdtdcProduct->product_prices != null){
                                if($p->bdtdcProduct->product_prices->product_MOQ != null){
                                    echo $p->bdtdcProduct->product_prices->product_MOQ;
                                }else{}
                            }else{}*/ ?>(Min. Order)</p>
                </div>
             <div class="fea-info-tit" style="padding: 2%;    height: auto;">
                   <a href="{{ URL::to('product-details/'.preg_replace('/[^A-Za-z0-9\.-]/', '-', $pname).'='.mt_rand(100000000, 999999999).$p->product_id) }}" type="button" class="btn btn-primary" style="border-radius: 4px !important;padding: 6px 10px;"><h2 class="summery"><span itemprop="name" style="color: #fbf4f4;font-size: 14px;"> Contact Supplier</span></h2>
                   </a>
                </div>
            </div>
            </div>
        @endforeach
</div>
</div>

</div>
</section>
<section>
<div class="container">
  <div class="row" style="padding-bottom: 2%;text-align: center; width: 180px; margin: 0 auto; display: block;">
                <a itemprop="url" href="{{ URL::to('get-quotations')}}" target="_blank" class="btn btn-primary btn-join" style="height:47px;border-radius:5px;font-size:16px;color:#fff!important;padding-top: 4px;margin-top: 9%;">Get Quotations Now</a>
    </div>

 <div class="row" style="padding-bottom: 2%;text-align: center;font-size: 14px; padding-left: 20px;a">
         Do you want to show<strong> {{ $page_name ?? '' }}</strong> or other products of your own company?        <a itemprop="url" href="http://apps.bditdc.com/get-quotations" target="_blank" class="" style="height:47px;border-radius:5px;font-size:14px;color:#000!important;padding-top: 4px; background-color: "><strong>Display your Products FREE now!</strong></a>
    </div>

  <div class="row" style="background-color: #ffffff;padding: 2%;margin-bottom: 2%">
      <div class="col-sm-12" style="padding: 0 0 0 5px;margin: 0 0 30px;font-size: 18px;line-height: 40px;color: #222;font-weight: bold;
border-bottom: 2px solid #999;">
      <h5 style="font-size: 16px; padding-left: 20px;"><b>Determined channel for genuine Suppliers</b></h5>
      </div>
        <hr>
    <div class="col-sm-12 col-md-12 col-lg-12">
    <p style="font-size: 14px; text-align: left;font-weight: normal; padding:0; margin: 0;opacity: .7">BDTDC.com works with the world's most renowned brands and creates the golden opportunity for you to have the most  profitable deal in<strong> {{ $page_name ?? '' }}</strong> Products Sector.
    </p>
</div>
</div>
</div>
</section>
	@stop
@section('scripts')

    <script type="text/javascript">
            $(document).ready(function(){
                $("#ct-btn").click(function(){
                    $(".sb-ct-lst").toggle();
                });
            });
        function search_data(){
            var categoryid = $('input[name="categoryid"]').val();
            var country = $('input[name="countery"]').val();
            var buyer_protection = $('input[name="buyer_protection_input_data"]').val();
            var gold_supplier = $('input[name="gold_supplier_input"]').val();
            var assessed_supplier = $('input[name="assessed_supplier_input"]').val();
            var url = window.location.origin+'/wholesale/category/product/category=='+categoryid+'+..+country=='+country+'+..+buyer_protection=='+buyer_protection+'+..+gold_supplier=='+gold_supplier+'+..+assessed_supplier=='+assessed_supplier;
            window.location.href = url;
        }

        $(document).on({change:function(){
            $('input[name="countery"]').val($(this).val());
            $('.fa_down_show').show();
            $('.fa_up_show').hide();
            $('.country_tab_show').hide();
            search_data();
        }},'.filter_by_cat_pro_input');

        $(document).on({click:function(){
            var countryid = $(this).attr('countryid');
            $('[name="countery"]').val(countryid);
            $('.fa_down_show').show();
            $('.fa_up_show').hide();
            $('.country_tab_show').hide();
            search_data();
        }},'.country_select');

        /* ******** Country search ********** */
        $(document).on({click:function(){
            $('.fa_down_show').toggle();
            $('.fa_up_show').toggle();
            $('.country_tab_show').toggle();
        }}, '.country_tab');

        $(document).on({
                click: function(e) {
                e.preventDefault();
                $('.fa_down_show').show();
                $('.fa_up_show').hide();
                $('.country_tab_show').hide();
                var selected = $(this).val();
                var selected_name = $(this).attr('name');
                if(selected_name == 'buyer_protection'){
                    if ($('input[name="buyer_protection"]').is(':checked')) {
                        $('input[name="buyer_protection_input_data"]').val('true');
                    }else{
                        $('input[name="buyer_protection_input_data"]').val('false');
                    }
                }else if(selected_name == 'gold_supplier'){
                    if ($('input[name="gold_supplier"]').is(':checked')) {
                        $('input[name="gold_supplier_input"]').val('true');
                    }else{
                        $('input[name="gold_supplier_input"]').val('false');
                    }
                }else if(selected_name == 'assessed_supplier'){
                    if ($('input[name="assessed_supplier"]').is(':checked')) {
                        $('input[name="assessed_supplier_input"]').val('true');
                    }else{
                        $('input[name="assessed_supplier_input"]').val('false');
                    }
                }
                search_data();
            }
        }, '.cat_filter_check_box');

        $('ul.pagination').css('margin-top','15px');
        $('ul.pagination').css('margin-right','25px');

    </script>

    <script type="text/javascript">
        
        $(document).ready(function()
{
    $('img').bind('contextmenu', function(e){
        return false;
    }); 
});
    </script>

@stop