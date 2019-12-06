@extends('fontend.template.layout_dynamic')

@section('content')

      <div class="container">
            <div style="margin-top:1%" class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10 padding_0" style="background-color: #fff;padding: 1%">
                        <div class="col-md-3 padding_left_0">
                              @include('fontend.template.company_nav')
                        </div>
                        <div class="col-md-9">
                              <div style="border-bottom:1px solid #32AFD4;margin-bottom:2%" class="row">
                                    @include('fontend.template.company_title_tab')
                              </div>

                              <div style="border-bottom:1px solid #E8E8E8;margin-bottom:2%" class="row">
                                    <div class="col-md-12 col-xs-12 padding_0">
                                          <div class="table-responsive">
                                                <h4 style="font-weight:bold;font-size:15px;line-height:0px">Research & Development</h4>
                                                <p>There is/are {{ ($r_d) ? $r_d->r_d : "" }} R&D Engineer(s) in the company.</p>
                                          </div>
                                    </div>
                              </div>
                              @include('fontend.template.contact_supplier_form')
                        </div>    
                  </div>
                  <div class="col-md-1"></div>
            </div>  
      </div>
      
@stop
@section('scripts')
<script type="text/javascript">

var nav_url = window.location.href;
var nav_url_array = nav_url.split("/");
if(nav_url_array[3] == 'rd-capacity'){
    $('.color_changer>ul li:nth-child(3)').css('background','white');
    $('.color_changer>ul li:nth-child(3) span').css('color','black');

    $('ul.overview li:nth-child(4)').css('padding','5px');
    $('ul.overview li:nth-child(4)').css('background-color','#2e6da4');
    $('ul.overview li:nth-child(4)').css('padding-left','15px');
    $('ul.overview li:nth-child(4)').css('border-radius','5px');
    $('ul.overview li:nth-child(4) a').css('color','#ffffff');
}
</script>
@stop