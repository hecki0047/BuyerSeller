@extends('frontend.layouts.master-register')
@section('content')

	<div style="clear:both"></div>
    
			<div id="item_sha" class="row" style="padding-top: 25px; margin-bottom:10px;margin-top:2%;">
	                	 

                 <div class="col-sm-4">
                    <div class="left-sidebar">
                        <h2 style="padding-right:114px;text-align: left;">FAQ Section</h2>
                        <div class="panel-group category-products" id="accordian">
                           
                            <div class="panel panel-default">
                                @if($parent_cat_name)
                                <?php $active_i=1; ?>
                                @foreach($parent_cat_name as $data)
                              
                                    <div  class="parent_category_id  <?php if($active_i==1){echo 'category-active';} ?>" data-parent="{{$data->id}}" style="border: 1px solid #dae2ed;border-left: none;border-right: none;position: relative;padding-left: 4%;border-bottom: none;font-size: 16px !important;font: inherit;">
                                        <a target="_blank" href="" style="color: #333;line-height: 47px;">{{$data->name}}</a>
                                    </div>
                                <?php $active_i++; ?>
                                @endforeach
                                @endif
                               
                            </div>

                        </div>


                    </div>
                    <!--/brands_products-->


                </div>
                <div class="col-sm-8 padding-right" style="padding-left: 4%;padding-right: 4%;padding-bottom: 2%;">

                    <div class="form-group col-sm-12">
                        <div class="col-sm-9"> 
                            <input name="category_name" style="height:50px;width: 110%;margin-left: -6%;" type="text" class="form-control category_name" aria-describedby="basic-addon2">
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-default search_category" style="background:#255E98;color:#fff; border-radius: 0 3px 3px 0 !important;height:50px;width: 116%;"><i class="fa fa-search-plus"></i>Search Help</button>
                        </div>
                    </div>
                        
                        <br>
                        

                        <div id="replace_area" style="padding-bottom: 3%;">
                           

                        	@if($faq_detail)
                            	<h3 style="font-size: 22px;font-weight: 700;margin-bottom: 12px;margin-top: 17px;">
                            		{{$faq_detail->name}}
                            	</h3>
                            	@if($faq_detail->bdtdc_content_desc)
                            	   <p style="font-size: 16px">{!! $faq_detail->bdtdc_content_desc->description !!}</p>
                            	@endif
                        	@endif
                        </div>
                        <div>
                             <a onclick="goBack()"><i class="fa fa-arrow-left" aria-hidden="true"></i>Go Back</a>
                        </div>
                        <div>


                        </div>
                        
                </div>

    
</div>

<br>

@stop
@section('scripts')
    <script type="text/javascript">
        /*parent category*/
    $(document).on({click:function(e){
    e.preventDefault();
    var _this =$(this);
    var base_url='{{URL::to("/")}}';

    $('.parent_category_id').removeClass('category-active');
    $(this).addClass('category-active');

    var parent_category_id = $(this).attr('data-parent');

    var url=base_url+'/faq-category-search?parent_category_id='+parent_category_id;
 //     $.get(url,{},function(result){
    //  $('#replace_area').html(result);
    // });
    window.location.href=url;

    }},'.parent_category_id');

   
    $(document).on({click:function(e){
        e.preventDefault();
        var base_url='{{URL::to("/")}}';

        var category_search= $('.category_name').val();
        $('input[name="category_name"]').val(category_search);
        var category_name = $('input[name="category_name"]').val();
        // alert(category_name);
        var url=base_url+'/category-search?category_name='+category_name;
            
        $.get(url,{},function(result){
            $('#replace_area').html(result);
        });

    }},'.search_category');
    /*category search*/

    function goBack() {
     window.history.go(-1);
}
                
    </script>
@stop