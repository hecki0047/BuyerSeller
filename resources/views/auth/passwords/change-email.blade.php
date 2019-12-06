@extends('fontend.master_dynamic')
@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/source-view.css',is_secured()) !!}" rel="stylesheet">
  @endsection

@section('title', 'Password Reset Email')

@section('content')

        <div class="container">
        <div class="row padding_0" style="padding-bottom: 10%;">
           
            <div>
                <div class="panel panel-default" style="border: 0 none; background-color: #F5F5F5; width: 570px; margin: 0 auto;">
                    <div class="panel-body" style="margin-top: 20%;">
                    <div style="width: 570px; height: 20px; display: block;">
                        <div class="veri" style="width: 250px; display: block; float: left; position: relative;">
                            <div class="verify-circle" style=" border-radius: 50% !important;background-color:#C3C3C1; border:0 none; float: left; position: absolute;top: -8px;"><span style="color: #fff; text-align: center; padding-left: 5px;">1</span>
                            </div>
                            <span style="position: absolute; top: 20px; color: #666; padding: 0; margin: 0; color: #666;">Submit</span>
                        </div>
                        <div class="veri" style="width: 250px; display: block; float: left;position: relative;">
                        <div class="verify-circle" style=" border-radius: 50% !important;  border:0 none;position: absolute;top: -8px;"><span style="color: #fff; text-align: center; padding-left: 5px;">2</span>
                        </div>
                        <span style="position: absolute; top: 20px; color: #FF4400; padding: 0; margin: 0;">Verify</span>
                        </div>
                        <div style="display: block; float: left; position: relative;">
                        <div class="verify-circle" style=" border-radius: 50% !important; background-color:#C3C3C1;position: absolute;top: -8px; "><span style="color: #fff; text-align: center; padding-left: 5px;">3</span>
                        </div>
                        <span style="position: absolute; top: 20px; color: #666; padding: 0; margin: 0;">Done</span>
                        </div>
                   </div>
                  <div class="result">
                    {!! Form::open(['url'=>'subscript/change-email','method'=>'POST','id'=>'change_form']) !!}
                        <fieldset style="margin-top: 15%;">

                            @if (session()->has('flash_message'))
                                <div class="alert alert-success">
                                    {{ session()->get('flash_message') }}
                                </div>
                            @endif

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            <p style=" width: 120%; vertical-align: baseline;font-size: 100%;"><span><i class="fa fa-exclamation-circle" aria-hidden="true" style="color: #68B5E2;font-size: 100%;padding-right: 10px;"></i></span>  if Email was not send, please re-submit request. </p>

                            <!-- Email field -->
                           
                            <div style="max-width: 530px; display: block; height: auto;">

                                 <label for="usr" style="width: 155px;float: left;display: inline-block; text-align: right;">Email:</label>
                                <div class="form-group" style="float: left;  padding-left: 15px;">
                                        {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required'])!!}
                                        <!-- <input type="email" name="email" placeholder="email"> -->
                                </div>
                               
                            </div>
                            <div style="max-width: 530px; display: block; height: auto; padding: 20px 5px;">

                                 <label for="usr" style="width: 160px;float: left;display: inline-block; text-align: right;"></label>
                                <div class="form-group" style="float: left;  padding-left: 6px;">
                                        <button type="submit" class="btn btn-default change" style="border: 1px solid #AFAFAF;background-color: #F3F3F3;color: #777;font-size: 12px;font-weight: 700;">Request free verification code</button>
                                </div>
                               
                            </div>
                             {!! Form::close() !!}
                         </div>
                            <div style="clear: both;"></div>
                            {!! Form::open(['url'=>'subscription/mail-change','method'=>'post']) !!}
                            <div style="max-width: 530px; display: block; height: auto; padding: 20px 5px;">

                                <label for="usr" style="width: 160px;float: left;display: inline-block; text-align: right;">Verification code :</label>
                                <div class="form-group" style="float: left;  padding-left: 7px;">
                                           {!! Form::text('token', null, ['placeholder' => 'Enter the verification code', 'class' => 'form-control', 'required' => 'required'])!!}
                                </div>
                               
                            </div>
                            
                            <div style="clear: both;"></div>

                            <!-- Submit field -->
                         <div style="max-width: 530px; display: block; height: auto; padding: 10px 5px;">
                            <div class="form-group" style="padding-left: 32%; padding-top: 2%;">
                                <div style="width: 100px; border-radius: 5px !important; float: left; padding-right: 15px;">
                                     <!-- {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block']) !!} -->
                                     <button type="submit" class="btn btn-primary submit" style="border: 1px solid #AFAFAF;background-color: #F3F3F3;color: #777;font-size: 12px;font-weight: 700;">Submit</button>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                        </fieldset>
                       
                    </div>
                    <div style="max-width: 700px; height: 200px; margin-top: 8%; background-color: #FFFCED; display: block; vertical-align: baseline;padding: 0; margin: 0; clear: both;">
                        <div style="padding: 10px 20px;">
                             <p style="font-size: 14px;color: #646565;font-weight: 700;width: 100%;float: left;line-height: 30px;">Email verification code not received</p>
                            <ul style="padding: 0; display: block;width: 100%; line-height: 24px; font-size: 12px;">
                                <li>1.Network unsteadiness may cause loss of messages, please re-submit request or try again later</li>
                                <li>2. Please verify if your mailbox works or check your spam folder</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">

$(document).on({
   click:function(e){
   e.preventDefault();
   var email = $('input[name="email"]').val();
   var token = $('input[name="_token"]').val();
   $.post(window.location.origin + '/subscript/change-email', {
    'email':email,'_token':token,
});
    // },function(result) {
    //     if(parseInt(result) == 1){
    //      alert ("A verification code has been sent to your email . Please Check Your E-mail and use the code to change your e-mail within 15 minutes.");
    //     }else{
    //      alert (JSON.stringify(result));
    //      return false;
    //     }
    //             });
      }},'.change');

 //    $(document).onClick('#verification_code', '#change_form', function(e)
 // {  
  
 //  $.post('SessionsController@postchangeEmail', $(this).serialize(), function(data)
 //    alert('1');
 //  {
 //   $(".result").html(data);   
 //  });
 //  e.preventDefault();
 //  return false;
  
 // });



//     $(document).ready(function() {
//     $('#change_form').submit(function(event){
//         event.preventDefault();
        
//         $.ajax({
//             type: 'POST',
//             url: 'subscript/change-email',
//             data: $('form#change_form').serialize(),
//             dataType: 'json',
//         })

//         .done(function(data) {
//             console.log(data); 
//         });

//         return false;
// });
// });


</script>
@stop