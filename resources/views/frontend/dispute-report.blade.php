@extends('frontend.layouts.master-register')

@section('content')
<div style="clear:both"></div>
<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <ul class="top-path" style="padding-bottom: 8px;">
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a" > <span itemprop="name">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"> <span itemprop="name">Customer Service</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a  itemprop="item" href="{{URL::to('ServiceChannel/pages/submit_a_dispute','39',is_secured())}}" class="top-path-li-a"> <span itemprop="name">Submit a Dispute</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a   itemprop="item" href="{{URL::to('submit_report',null,is_secured())}}" class="top-path-li-a"> <span itemprop="name">Report</span><i class="fa fa-angle-right top-path-icon"></i></a></li>
                        
                    </ul>
            </div>
    
  </div>
      <br>
<div class="row" id="home_b" style="padding-top: 2%;padding-bottom: 2%;">
  @if (count($errors) > 0)
            <div class="alert alert-danger" style="margin-top:10px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissable" style="margin-left:15%;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> {{session()->get('success')}}
            </div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissable" style="margin-left:15%;">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> {{session()->get('error')}}
            </div>
            @endif
      {!!Form::open(['route'=>'submit.report.store'])!!}
            <div class="col-sm-12">                  
                      <div class="radio" style="padding-left:15%;font: Roboto,Helvetica,Tahoma,Arial,sans-serif;">
                        <label><input type="radio" value="Illicit Drugs and Related Products  Illicit Drugs" name="reason"> 	
                        <b>Illicit Drugs and Related Products  Illicit Drugs</b>; Drug Precursors; Other Controlled Substances; Products used for Manufacturing, Concealing or Using these Substances, etc. </label>
                      </div>
                      
                      <div class="radio" style="padding-left:15%;font: Roboto,Helvetica,Tahoma,Arial,sans-serif;">
                       <label><input type="radio" value="Prescription Drugs; Sexual Enhancement Foods and Supplements; Hormones, etc." name="reason"> 
                       <b>Prescription Drugs; Sexual Enhancement Foods and Supplements; Hormones, etc.  </b>
                       </label>
                      </div>
                      <div class="radio" style="padding-left:15%;font: Roboto,Helvetica,Tahoma,Arial,sans-serif;">
                        <label><input type="radio" value="Dangerous and Toxic Substances" name="reason"> 	
                        <b> Dangerous and Toxic Substances   </b></label>
                      </div> 
                      
                       <div class="radio" style="padding-left:15%;font: Roboto,Helvetica,Tahoma,Arial,sans-serif;">
                        <label><input type="radio" value="Firearms, Weapons and Prohibited Police Products " name="reason"> 	
                 	
                <b>Firearms, Weapons and Prohibited Police Products   </b> </label>
                      </div>
                      <div class="radio" style="padding-left:15%;font:Roboto,Helvetica,Tahoma,Arial,sans-serif;">
                        <label><input type="radio" value="Prohibited Plants, Animals and Related Products " name="reason"> 	
                 	
                <b>Prohibited Plants, Animals and Related Products  </b>Plants and animals covered by national laws or regulations or listed under CITES; other plant and animal products prohibited by buyerseller.asia, etc.  </label>
                      </div>
                      <div class="radio" style="padding-left:15%;font:Roboto,Helvetica,Tahoma,Arial,sans-serif;">
                        <label><input type="radio" value="Adult Products and Services, Pornographic Images" name="reason" > 	
                        <b>Adult Products and Services, Pornographic Images </b> </label>
                      </div> 
                      <div class="radio" style="padding-left:15%;font: Roboto,Helvetica,Tahoma,Arial,sans-serif;">
                        <label><input type="radio" value=" Restricted Products" name="reason" > 
                        <b> Restricted Products </b> Licensed products requiring sales approvals, operational certificates or authorizations to be eligible for listing. For example, fireworks, prescription medicine, weight loss medicine, etc. 
                 	    </label>
                      </div> 
                       <div class="radio" style="padding-left:15%;font:  Roboto,Helvetica,Tahoma,Arial,sans-serif;">
                        <label><input type="radio" value="Other Prohibited Products" name="reason" selected="selected" > 
                        <b>Other Prohibited Products</b>
                 	    </label>
                      </div> 
            </div>
      <div class="col-sm-12" style="margin-bottom:10px;"> 
      <div class="col-sm-2" style="padding-left:8%;padding-right:0px;">
         {!!Form::label('product url :',null,['class'=>'asd'])!!}
      </div>
      <div class="col-sm-10" style="padding-right:15%;padding-left:0%;">
         {!!Form::text('url',null,['class'=>'form-control'])!!}   
      </div>  
      </div>
          
          <br>
      <div class="col-sm-12" style="margin-bottom:10px;">
          <div class="col-sm-2" style="padding-left:8%;padding-right:0px;">  
          {!!Form::label('Description :')!!}
          </div>
          <div class="col-sm-10" style="padding-right:15%;padding-left:0%;">
          {!!Form::textarea('description',null,['class'=>'form-control'])!!}
          </div>
      </div>
      <div class="col-sm-12" style="padding-left:17.5%;">
          <p>Please enter English only, not support special characters and full-width character(s). character(s) remaining:4000</p>
      </div>   
      <div class="col-sm-12">
         <div class="col-sm-2" style="padding-left:4%;padding-right:0%;">
         {!!Form::label('Upload Evidence :')!!}
         </div>
         <div class="col-sm-10" style="padding-left:0%;padding-right:15%"></div>
          {!!Form::file('file',null,['class'=>'form-control'])!!}
       
          </div>
      </div>
<div class="row" id="home_b" style="padding-top: 2%;padding-bottom: 2%;">
            <div class="col-sm-12"> 
                <p style="padding-left:8%;">Your Email :<span> {{$user->email}}</span></p>
                 <p style="padding-left:8%;">Your Phone : <span> {{$user->customers?$user->customers->telephone:''}}</span></p>
                  <!-- <p style="padding-left:15.5%;font-size:11px;"> 	
                        Please note that your contact information is very important. If the information above is not up-to-date, <a href="#">click here</a>.</p> -->
                        <div class="checkbox" style="padding-left:17%;">
                         
                        <p ><input type="checkbox" value="Adult Products and Services, Pornographic Images" name="reason" >
                         Upon submitting this complaint, I agree to:<a href="{{URL::to('Policies_Rules',null, is_secured())}}">Agreement on Use of Complaint Center</a></p>
                        
                      </div>
                        
           <div class="col-sm-12" style="margin-bottom:30px;">
                 <button type="submit" class="btn btn-primary btn-join" style="margin-left:14.5%;">Submit</button>
           </div>
            
          
</div>
</div>

 {!!Form::close()!!}
<br>
@stop
@section('scripts')
<script type="text/javascript">
    $(function() {
        /**
         * the element
         */
        var $ui 		= $('#ui_element');

        /**
         * on focus and on click display the dropdown,
         * and change the arrow image
         */
        $ui.find('.sb_input').bind('focus click',function(){
            $ui.find('.sb_down')
                    .addClass('sb_up')
                    .removeClass('sb_down')
                    .andSelf()
                    .find('.sb_dropdown')
                    .show();
        });

        /**
         * on mouse leave hide the dropdown,
         * and change the arrow imagek
         */
        $ui.bind('mouseleave',function(){
            $ui.find('.sb_up')
                    .addClass('sb_down')
                    .removeClass('sb_up')
                    .andSelf()
                    .find('.sb_dropdown')
                    .hide();
        });

        /**
         * selecting all checkboxes
         */
        $ui.find('.sb_dropdown').find('label[for="all"]').prev().bind('click',function(){
            $(this).parent().siblings().find(':checkbox').attr('checked',this.checked).attr('disabled',this.checked);
        });
    });
</script>
@stop