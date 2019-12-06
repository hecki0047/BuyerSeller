<?php
  $supplier=App\Models\Companies::with('customers','users')->where('id',Route::current()->parameters()['profile_id'])->first();
          //print_r($customer->location_of_reg);
        use App\Models\Users;
    ?>
<div class="row" style="position: fixed;bottom: 0;width: 100%;background-color:#fff !important;">
<div class="col-xs-12 padding_0" style="">
            <div class="col-xs-6">
            	<div class="cht-now">
                 <a href="{{URL::to('default/chat/default')}}" style="font-size: 20px;color: #255E98;padding:0 6px;"><span><i class="fa fa-commenting-o" style="font-size: 15px; color:#255E98;" aria-hidden="true"></i></span>Chat Now</a>
                 </div>                         
            </div>
          <div class="col-xs-6">
            <div style="text-align: center; margin-bottom: 20px;" data-product_id="#" data-supplier_id="{{ $supplier->users->id }}" class="btn btn-primary btn-join contact_supplier" style="padding:0 6px;"><i class="fa fa-envelope-o"></i>Contact Supplier</div> 
        </div>
</div>
</div>
@section('scripts')
<script type="text/javascript">
// contact supplier
                

                $(document).on({

                    click: function(e) {

                        e.preventDefault();

                        $('.modal-content').html('<span class="btn btn-block btn-lg"><i class="fa fa-spinner fa-pulse loading_icon text-primary"></i></span>');

                        var base_url = window.location.origin;//$('[name="base_url"]').val();

                        var supplier_id = $(this).data('supplier_id');

                        var product_id = $(this).data('product_id');

                        var url = base_url + "/byer/contact_supplier/" + supplier_id + "/" + product_id;
                        window.location.href = url;

                        //$('.modal-content').html(" ");

                        /*$.get(url, function(r) {

                            $('.modal-content').html(r)

                        })*/

                    }

                }, '.contact_supplier');
</script>



@stop