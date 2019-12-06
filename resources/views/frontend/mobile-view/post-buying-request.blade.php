@extends('mobile-view.layout.master_m')
    @section('content')
<section>
<div class="container">
<div class="row">
    <div class="col-xs-12 padding_0" style="padding-right:0px; padding-bottom:0px; ">
        <a href="{{URL::to('product/name')}}" style="text-decoration: none;cursor: context-menu;color: #666; display: block;">
        <div id="search-inner" style="position: relative;"><i class="fa fa-search" aria-hidden="true" style="font-size: 20px;"></i>Search Products</div>
        </a>
    </div>
</div>    
 <div class="row" style="background: #fff; padding-left: 15px; padding-bottom: 3%; margin-bottom: 20px; border-bottom: 1px solid #ddd;">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
</div>
</section>
<section>
<div class="container">
<div class="row" style="padding:0px 20px 25px 30px;">
<form action="{{ URL::to('postBuyRequest',null,is_secured()) }}" class="form-horizontal"  enctype="multipart/form-data" method="post">
<div class="col-xs-12">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="pid" value="{{ $id }}">
    <?php
        $Inquiry_name = 'not available';
        $inquiry_image = URL::to('uploads/no_image.jpg');
        if($quotations->inq_products_description){
            $Inquiry_name = $quotations->inq_products_description->name;
        }else if($quotations->inquery_title){
            $Inquiry_name = $quotations->inquery_title;
            
        }
        if($quotations->inq_products_images){
          $inquiry_image = URL::to($quotations->inq_products_images->image);
        }else if($quotations->inq_docs_one){
          $inquiry_image = URL::to('buying-request-docs',$quotations->inq_docs_one->docs);
        }
        ?>
        </div>

  <div class="col-xs-12" style="margin-top: 25px;">
    <div class="form-group">
      <label class="control-label " for="product-name">Product name</label>
      <div>
        <input type="text" class="form-control" id="product-name" name="product_name" value="{{ $Inquiry_name }}" required="required">
      </div>
    </div>
  </div>
<div class="col-xs-12" style="margin-top: 25px;">
    <div class="form-group">
       <div class="col-xs-4 padding_0">  
      <label class="control-label col-xs-4 padding_0" for="pwd">Quantity</label>
    </div>
        <div class="col-xs-4">          
        <input name="quantity" data-ng-model="yourName" value="{{ $quotations->quantity }}" style="width:80%;" required="required" style="text-align: center; height: 35px !important;">
      </div> 
      <div class="col-xs-4" style="padding-right: 15px;">          
       <select name="unit" style="background: #fff; border:1px solid #ddd;text-align: center; height: 35px;">
            @foreach($units as $unit)
                <option value="{{ $unit->id }}" <?php if($quotations->unit_id == $unit->id){echo 'selected';} ?>>
                    {{ $unit->name }}
                </option>
            @endforeach
        </select> 
      </div>
    </div>
</div>
<div class="col-xs-12" style="margin-top: 25px;">
    <div class="form-group">
      <label class="control-label" for="product-name">Product Specifications:</label>
  </div>
</div>
  <div class="col-xs-12 padding_0">
      <div class="">
            <textarea  name="details" style="background: #fff; border: 1px solid #ddd; height: 150px; width: 100%; font-size: 12px; text-align: left;" rows="5" id="comment" required="required">Dear Sir/Madam,I'm looking for products with the following specifications:</textarea>
      </div>
    </div>

  <div class="col-xs-12" style="margin-top: 25px;">
      <div class="form-group">
         <div class="" style="padding: 15px 0px;">
            <img style="max-width: 136px; max-height: 136px;"   src="{{ $inquiry_image }}" alt=""/>
        </div>
        <div class="">
              <input style="width: 100%; display: block;padding: 10px 0; margin: 0;" title="Attachment 1 is required" type="file" name="attachment_1">
              <span>Upload product sample</span>
              <input style="width: 100%; display: block;padding: 10px 0; margin: 0;" type="file" name="attachment_2">
              <span>Upload product sample</span>
              <input style="width: 100%; display: block;padding: 10px 0; margin: 0;" type="file" name="attachment_3">
              <span>Upload product sample</span>        
        </div>
    </div>
  </div>
  <div class="col-xs-12" style="margin-top: 25px;">
    <div class="form-group">
        <div class="">
         <p style="float: left; font-size:14px; font-weight:normal; padding-top:10px; clear: both;"><input type="checkbox" checked required> I agree to share my <span style="color: #23527C;">Business Card</span> with quoted suppliers.</p>
          <div class="ppp-des" style="font-size:14px; font-weight:600;margin-left: 0;padding-left: 0;">
            <span style="color: #1DC11D;line-height:18px;padding-left:0;">{{ count($suppliers)}}</span> Suppliers can give quotations</div>
            <div style="float:left;width:50%;margin-top: 20px;">
                <button type="submit" class="btn btn-primary btn-jn-sb" style="">
                    Submit Buying Request
                </button>
            </div>
           
        </div>
      </div>
  </div>
    </form>
 </div>
</div>
</section>
   @stop
  