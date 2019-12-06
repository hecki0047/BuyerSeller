@extends('frontend.layouts.master-profile-m')
@section('content')
@include('frontend.layouts.template-header')
@php
   $customer=App\Models\Companies::with('customers','users')->where('id',Route::current()->parameters()['profile_id'])->first();
   use App\Models\Users;
@endphp
<div class="row padding_0" style="background: #fff;">
   <div style="padding: 26px 20px 125px 80px; position: relative;">
      <div class="contact-picture">
         <img class="contact-picture-photo img-circle" src="
            @if($contact_data->pro_pic)
            {{ URL::to('uploads',$contact_data->pro_pic,is_secured()) }}
            @else
            {{ URL::to('uploads/no_image.jpg') }}
            @endif
            " alt="contact person">
         <!-- <img class="contact-picture-photo img-circle" src="{!! asset('resources/assets/mobile-images/contact-person.jpg') !!}" alt="contact person"> -->
      </div>
      <div class="contact-brief">
         <dt class="person-nm">{{$customer->users->first_name}} {{$customer->users->last_name}}</dt>
         @if($contact_data->department)
         <dt class="dpt-nm">Department:</dt>
         <dd class="dpt-posi">{{ (($contact_data) ? $contact_data->department : $not_available) }}</dd>
         @endif
         @if($contact_data->job_title)
         <dt class="dpt-nm">Job Title:</dt>
         <dd class="dpt-posi">{{ (($contact_data) ? $contact_data->job_title : $not_available) }}</dd>
         @endif
      </div>
   </div>
</div>
<div class="row padding_0" style="background: #fff;border-bottom: 1px solid #ddd; padding-bottom: 40px; margin-bottom: 20px;">
   <div class="col-xs-12 padding_0" style="padding-bottom: 20px;">
      <div class="col-xs-4 padding_0">
         <div class="comp-charct">
            <div class="comp-charct-char">
               <dt class="comp-charct-char-dt">Telephone:</dt>
            </div>
            <div class="comp-charct-char">
               <dt class="comp-charct-char-dt">Mobile Phone:</dt>
            </div>
            @if($contact_data->fax)
            <div class="comp-charct-char">
               <dt class="comp-charct-char-dt">Fax:</dt>
            </div>
            @endif
            <div class="comp-charct-char">
               <dt class="comp-charct-char-dt">Address:</dt>
            </div>
            <div class="comp-charct-char">
               <dt class="comp-charct-char-dt">Zip:</dt>
            </div>
            <div class="comp-charct-char">
               <dt class="comp-charct-char-dt">Country/Region:</dt>
            </div>
            <div class="comp-charct-char">
               <dt class="comp-charct-char-dt">City:</dt>
            </div>
         </div>
      </div>
      <div class="col-xs-8">
         <div class="comp-charct">
            @php $not_available = "Not Available"; @endphp
            <div class="comp-charct-char">
               <dd class="comp-charct-dd">
                  {{ (($contact_data) ? $contact_data->telephone : $not_available) }}
               </dd>
            </div>
            <div class="comp-charct-char">
               <dd class="comp-charct-dd">
                  {{ (($contact_data) ? $contact_data->telephone : $not_available) }}
               </dd>
            </div>
            @if($contact_data->fax)
            <div class="comp-charct-char">
               <dd class="comp-charct-dd">
                  {{ (($contact_data) ? $contact_data->fax : $not_available) }}
               </dd>
            </div>
            @endif
            <div class="comp-charct-char">
               <dd class="comp-charct-dd">
                  {{ (($contact_data) ? $contact_data->region : $not_available) }}.Tel: {{ (($contact_data) ? $contact_data->telephone : $not_available) }},  {{(($contact_data) ? $contact_data->city : $not_available) }}
               </dd>
            </div>
            <div class="comp-charct-char">
               <dd class="comp-charct-dd">
                  {{ (($contact_data) ? $contact_data->zip: $not_available) }}
               </dd>
            </div>
            <div class="comp-charct-char">
               <dd class="comp-charct-dd">{{ (($contact_data) ? $contact_data->region : $not_available) }}</dd>
            </div>
            <div class="comp-charct-char">
               <dd class="comp-charct-dd">{{ (($contact_data) ? $contact_data->city : $not_available) }}</dd>
            </div>
         </div>
      </div>
   </div>
</div>
@include('frontend.layouts.chat-supplier')
@stop
@section('scripts')
@stop