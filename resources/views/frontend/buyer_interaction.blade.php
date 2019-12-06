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
                                                <h4 style="font-weight:bold;font-size:15px;line-height:0px">Bdtdc Member History</h4>
                                                <table class="table company_information_table">
                                                      <tbody>
                                                           <tr>
                                                                 <td style="width:31%;color:#666">Year Joined (on Bdtdc):</td>
                                                                 <td>{{ ($data) ? $data->created_at : "" }}</td>
                                                           </tr>
                                                            <tr>
                                                                 <td style="width:31%;color:#666">Year established:</td>
                                                                 <td>{{ ($data) ? $data->year_of_reg : "" }}</td>
                                                           </tr>
                                                           <tr>
                                                                 <td style="color:#666">Business Type:</td>
                                                                 <td>{{ (($data) ? $data->business_type : "") }}</td>
                                                           </tr>
                                                           <tr>
                                                                 <td style="color:#666">No. of Production Lines</td>
                                                                 <td>{{ (($data) ? $data->no_of_production_line : "") }}</td>
                                                           </tr>
                                                           <tr>
                                                                 <td style="color:#666">Annual Output Value:</td>
                                                                 <td>{{ (($data) ? $data->anual_value : "") }} </td>
                                                           </tr>
                                                      </tbody>
                                                      
                                                </table>
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
if(nav_url_array[3] == 'buyer-interaction'){
    $('.color_changer>ul li:nth-child(3)').css('background','white');
    $('.color_changer>ul li:nth-child(3) span').css('color','black');

    $('ul.performance li:nth-child(2)').css('padding','5px');
    $('ul.performance li:nth-child(2)').css('background-color','#2e6da4');
    $('ul.performance li:nth-child(2)').css('padding-left','15px');
    $('ul.performance li:nth-child(2)').css('border-radius','5px');
    $('ul.performance li:nth-child(2) a').css('color','#ffffff');
}
</script>
@stop