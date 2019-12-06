<div class="row">
   <div style="border:2px solid #DDDDDD" class="col-md-12 col-xs-12">
      <p style="font-size:18px;font-weight:bold;display:inline-block;margin-top:2%;color:#1A4570">Email to this supplier</p>
      @if (count($errors) > 0)
      <div class="alert alert-danger">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <ul class="list list-check">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
      @endif
      <div class="table-responsive">
         <form action="{!! URL::to('profile/company') !!}" method="post" class="" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <input type="hidden" value="{{$profile_owner_id}}" name="product_owner_id" >
            <table class="table contact_supplier_table">
               <thead>
                  <tr>
                     <td class="text-right">To</td>
                     <td>:</td>
                     <td><span style="color:#1A4570"><span class="header_first_name"></span> <span class="header_last_name"></span></span></td>
                  </tr>
                  <tr class="<?php echo ($errors->has('message')) ? 'has-error' : ''; ?>">
                     <td class="text-right">Message</td>
                     <td>:</td>
                     <td> <textarea name="message" class="form-control" cols="47" rows="6" placeholder="Enter your inquiry details such as product name, color, size, MOQ, FOB, etc.">{{old('message')}}</textarea> </td>
                  </tr>
                  <tr>
                     <td></td>
                     <td></td>
                     <td> <input type="checkbox" > I agree to share my Business Card to the supplier.</td>
                  </tr>
                  <tr>
                     <td></td>
                     <td></td>
                     <td> <input type="submit" value="Send" class="btn btn-md btn-primary"></td>
                  </tr>
               </thead>
            </table>
         </form>
      </div>
   </div>
</div>