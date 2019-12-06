@extends('frontend.layouts.master-register') @section('content')

<div style="clear:both"></div>
<div class="row">
    <div class="col-md-12 padding_0" style="padding-top: 10px">
        <ul style="float:left;margin-left: -2%" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <li style="float: left" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" style="color: #000"> Home &nbsp;</a></li>
            <li style="float: left" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="" style="color: #000"> <i class="fa fa-angle-right"></i> <strong> Help Center</strong> <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
        <ul style="float:right;margin-left: -2%" itemscope="" itemtype="http://schema.org/BreadcrumbList">
            <div style="float:right;margin-left: -2%" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <button class="goBack" onclick="goBack()" style="padding: 0;"><span>Go Back</span></button>
            </div>
        </ul>
    </div>
</div>

<div id="item_sha" class="row" style="padding-top: 25px; margin-bottom:10px;margin-top:2%;">

    <div class="col-md-4 col-sm-12">
        <div class="left-sidebar">
            <h2 style="padding-right:114px; text-align: left;">FAQ  Section</h2>
            <div class="panel-group category-products" id="accordian">
                <div class="panel panel-default">
                    @if($parent_cat_name)
                    <?php $active_i=1; ?>
                        @foreach($parent_cat_name as $data)

                        <div class="parent_category_id  <?php if($active_i==1){echo 'category-active';} ?>" data-parent="{{$data->id}}" style="border: 1px solid #dae2ed;border-left: none;border-right: none;position: relative;padding-left: 4%;border-bottom: none;font-size: 16px !important;font: inherit;">
                            <a target="_blank" href="" style="color: #333;line-height: 47px;">{{$data->name}}</a>
                        </div>
                        <?php $active_i++; ?>
                            @endforeach @endif

                </div>
            </div>
        </div>
        <!--/brands_products-->
    </div>

    <div class="col-md-8 col-sm-12">


        <div class="">
            <div class="col-md-9 col-sm-9 col-xs-8">
                <input name="category_name" style="height:50px;width: 110%; margin-left: -6%;" type="text" class="form-control category_name" aria-describedby="basic-addon2">
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4" style="padding-left: 0px;">
                <button type="submit" class="btn btn-default search_category" style="background:#255E98;color:#fff; border-radius: 0 3px 3px 0 !important; height:50px;width: 116%;"><i class="fa fa-search-plus"></i>Search Help</button>
            </div>

            <div class="col-md-12 col-sm-12 col-xm-12" style="padding-left: 0px; padding-top: 15px;">
                <a onclick="goBack()"><i class="fa fa-arrow-left" aria-hidden="true"></i>Go Back</a>
            </div>
        </div>

        <br>

        <div id="replace_area" style="padding-bottom:  5%; padding-left: 1%;">
            
            @if($parent_cat) 
                @if(count($parent_cat)>0) 
                    @foreach($parent_cat as $data)
                    <li style="line-height: 48px;">
                        <a href="{{URL::to('faq-detail',$data->id)}}" style="color: #666;font-size: 14px;">
                            {{$data->name}}
                        </a>
                    </li>
                    @endforeach
                @endif 
            @endif
        </div>

    </div>

</div>
<br> 

@stop 

@section('scripts')
<script type="text/javascript">
    /*parent category*/
    $(document).on({
        click: function(e) {
            e.preventDefault();
            var _this = $(this);
            var base_url = '{{URL::to("/")}}';

            $('.parent_category_id').removeClass('category-active');
            $(this).addClass('category-active');

            var parent_category_id = $(this).attr('data-parent');

            var url = base_url + '/faq-category-search?parent_category_id=' + parent_category_id;
            //      $.get(url,{},function(result){
            //  $('#replace_area').html(result);
            // });
            window.location.href = url;

        }
    }, '.parent_category_id');

    /*parent category*/

    /*category search*/
    $(document).on({
        click: function(e) {
            e.preventDefault();
            var base_url = '{{URL::to("/")}}';

            var category_search = $('.category_name').val();
            $('input[name="category_name"]').val(category_search);
            var category_name = $('input[name="category_name"]').val();
            // alert(category_name);
            var url = base_url + '/category-search?category_name=' + category_name;

            $.get(url, {}, function(result) {
                $('#replace_area').html(result);
            });

        }
    }, '.search_category');
    /*category search*/
    function goBack() {
        window.history.back();
    }
</script>
@stop