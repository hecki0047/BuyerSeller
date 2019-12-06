@extends('fontend.template.layout_dynamic')
@section('content')
<!---------COMPANY INTRODUCTION TITLE WITH BORDER BOTTOM-------------->
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
               <h4 style="font-weight:bold;font-size:16px;">Trade Market</h4>
               <div style="height:350px;border:1px solid #E8E8E8;background-image: url({{ URL::asset('assets/images/background-big.png') }});" class="col-md-12 smallworld_map">
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 col-xs-12 padding_0">
                  <div class="table-responsive">
                     <table style="border-left:1px solid #E8E8E8;border-top:1px solid #E8E8E8;padding:1%;border-bottom:1px solid #E8E8E8" class="table capability_table">
                        <thead>
                           <tr style="background:#F5F5F5">
                              <td>Main Market</td>
                              <td>Total Revenue ( % )</td>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach($market_destribution as $v)
                           <tr>
                              @if($v->form_value)
                                 <td style="color:#666">{{ $v->form_value->value }}</td>
                              @endif
                              <td>{{ $v->distribution_value }}%</td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div style="border-bottom:1px solid #E8E8E8;margin-bottom:2%" class="row">
               <div class="col-md-12 col-xs-12 padding_0">
                  <div class="table-responsive">
                     <h4 style="font-weight:bold;font-size:15px;line-height:0px">Business Terms</h4>
                     <table class="table company_information_table">
                        <tbody>
                           <tr>
                              <td style="color:#666">Total Annual Sales Volume:</td>
                              <td>{{ ($trade_data) ? $trade_data->BdtdcFormValue->value : "" }}</td>
                           </tr>
                           <tr>
                              <td style="color:#666">Export Percentage:</td>
                              <td>{{ ($trade_data) ? $trade_data->form_export_percentage->value : "" }}</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div style="border-bottom:1px solid #E8E8E8;margin-bottom:2%" class="row">
               <div class="col-md-12 col-xs-12 padding_0">
                  <div class="table-responsive">
                     <h4 style="font-weight:bold;font-size:15px;line-height:0px">Trade Ability</h4>
                     <table class="table company_information_table">
                        <tbody>
                           <tr>
                              <td style="width:31%;color:#666">Language Spoken</td>
                              <td>
                                 @foreach($language as $l) 
                                 {{ $l->language->name }},
                                 @endforeach
                              </td>
                           </tr>
                           <tr>
                              @if($trade_data)
                                 @if($trade_data->emp_trade_dept)
                                    <td style="color:#666">No. of Employees in Trade Department:</td>
                                    <td>{{ ($trade_data) ? $trade_data->emp_trade_dept->value : "" }}</td>
                                 @endif
                              @endif
                           </tr>
                           <tr>
                              <td style="color:#666">Average Lead Time:</td>
                              <td>{{ ($trade_data) ? $trade_data->avarage_lead_time : "" }} (day's)</td>
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
if(nav_url_array[3] == 'trade-capacity'){
    $('.color_changer>ul li:nth-child(3)').css('background','white');
    $('.color_changer>ul li:nth-child(3) span').css('color','black');

    $('ul.overview li:nth-child(2)').css('padding','5px');
    $('ul.overview li:nth-child(2)').css('background-color','#2e6da4');
    $('ul.overview li:nth-child(2)').css('padding-left','15px');
    $('ul.overview li:nth-child(2)').css('border-radius','5px');
    $('ul.overview li:nth-child(2) a').css('color','#ffffff');
}
</script>
@stop