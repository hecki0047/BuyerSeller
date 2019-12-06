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
         <div style="border-bottom:1px solid #32AFD4;" class="row">
            @include('fontend.template.company_title_tab')
         </div>
         <div style="border-bottom:1px solid #E8E8E8;padding-bottom:10%" class="row">
            <div class="col-md-12 col-xs-12 padding_0" style="    border-bottom: 1px solid #ddd;margin-bottom: 30px; padding-bottom: 10px;">
               <h3 class="onck-h3">Onsite Check</h3>
               <div class="veryfi-logo">
                  <a href="#"><img src="{{asset('bdtdc-product-image/home-page/Verified-Suppliers-hand.png')}}" alt="verified"></a>
               </div>
               <div class="vryfi-info">
                  <p> <strong> What is Verified Suppliers:</strong></p>
                  <p>
                     The Verified Suppliers on BuyerSeller.asia has had a comprehensive check to safeguard buyers by ensuring suppliers are genuine and onsite operations exist.
                  <ul>
                  <li>
                     1.  Provided valid business documents by the local government officials.
                  </li>
                  <li>
                     2.  Certified by professional specialist either by SGS or Bureay Veritas or by BuyerSeller.com
                  </li>
                  <li>
                     3.  Provided with an audit report
                  </li>
                  <li>
                     4.  Management and Product information
                  </li>
                  <li>
                     5.  Working and office photos
                  </li>
                  </p>
               </div>
               <span class="pull-right more" style="cursor: pointer;" ><a href="{{ URL::to('BuyerChannel/pages/accredited_suppliers',16,is_secured())}}"> Read More &nbsp;<i class="fa fa-caret-right"></i></a></span>
            </div>
            @if($certificate_image)
            @foreach($certificate_image as $c)
            <div class="col-md-12 col-sm-12 col-xs-12 padding_0">
               <div class="mag">
                  <h2 class="certificate-title">Certification Image</h2>
                  <img data-toggle="magnify" src="{{URL::to('uploads',$c->image,is_secured())}}" alt="">
               </div>
            </div>
            @endforeach
            @endif  
            @if($trademarks_image) 
            @foreach($trademarks_image as $t)
            <div class="col-md-12 col-sm-12 col-xs-12 padding_0">
               <div class="mag">
                  <h2 class="certificate-title">Trademark Certificate</h2>
                  <img data-toggle="magnify" src="{{URL::to('uploads',$t->image,is_secured())}}" alt="">
               </div>
            </div>
            @endforeach
            @endif
            @if($patent_image)
            @foreach($patent_image as $p)
            <div class="col-md-12 col-sm-12 col-xs-12 padding_0">
               <div class="mag">
                  <h2 class="certificate-title">Patent Certificate</h2>
                  <img data-toggle="magnify" src="{{URL::to('uploads',$p->image,is_secured())}}" alt="">
               </div>
            </div>
            @endforeach
            @endif
            @if($honor_image)
            @foreach($honor_image as $h)
            <div class="col-md-12 col-sm-12 col-xs-12 padding_0">
               <div class="mag">
                  <h2 class="certificate-title">Honor Certificate</h2>
                  <img data-toggle="magnify" src="{{URL::to('uploads',$h->image,is_secured())}}" alt="">
               </div>
            </div>
            @endforeach
            @endif
         </div>
         @include('fontend.template.contact_supplier_form')
      </div>
      <div class="col-md-1"></div>
   </div>
</div>
      
@stop
@section('scripts')
<script type="text/javascript">
  
!function ($) {

    "use strict"; // jshint ;_;


    /* MAGNIFY PUBLIC CLASS DEFINITION
     * =============================== */

    var Magnify = function (element, options) {
        this.init('magnify', element, options)
    }

    Magnify.prototype = {

        constructor: Magnify

        , init: function (type, element, options) {
            var event = 'mousemove'
                , eventOut = 'mouseleave';

            this.type = type
            this.$element = $(element)
            this.options = this.getOptions(options)
            this.nativeWidth = 0
            this.nativeHeight = 0

            this.$element.wrap('<div class="magnify" \>');
            this.$element.parent('.magnify').append('<div class="magnify-large" \>');
            this.$element.siblings(".magnify-large").css("background","url('" + this.$element.attr("src") + "') no-repeat");

            this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
            this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
        }

        , getOptions: function (options) {
            options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

            if (options.delay && typeof options.delay == 'number') {
                options.delay = {
                    show: options.delay
                    , hide: options.delay
                }
            }

            return options
        }

        , check: function (e) {
            var container = $(e.currentTarget);
            var self = container.children('img');
            var mag = container.children(".magnify-large");

            // Get the native dimensions of the image
            if(!this.nativeWidth && !this.nativeHeight) {
                var image = new Image();
                image.src = self.attr("src");

                this.nativeWidth = image.width;
                this.nativeHeight = image.height;

            } else {

                var magnifyOffset = container.offset();
                var mx = e.pageX - magnifyOffset.left;
                var my = e.pageY - magnifyOffset.top;

                if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
                    mag.fadeIn(100);
                } else {
                    mag.fadeOut(100);
                }

                if(mag.is(":visible"))
                {
                    var rx = Math.round(mx/container.width()*this.nativeWidth - mag.width()/2)*-1;
                    var ry = Math.round(my/container.height()*this.nativeHeight - mag.height()/2)*-1;
                    var bgp = rx + "px " + ry + "px";

                    var px = mx - mag.width()/2;
                    var py = my - mag.height()/2;

                    mag.css({left: px, top: py, backgroundPosition: bgp});
                }
            }

        }
    }


    /* MAGNIFY PLUGIN DEFINITION
     * ========================= */

    $.fn.magnify = function ( option ) {
        return this.each(function () {
            var $this = $(this)
                , data = $this.data('magnify')
                , options = typeof option == 'object' && option
            if (!data) $this.data('tooltip', (data = new Magnify(this, options)))
            if (typeof option == 'string') data[option]()
        })
    }

    $.fn.magnify.Constructor = Magnify

    $.fn.magnify.defaults = {
        delay: 0
    }


    /* MAGNIFY DATA-API
     * ================ */

    $(window).on('load', function () {
        $('[data-toggle="magnify"]').each(function () {
            var $mag = $(this);
            $mag.magnify()
        })
    })

} ( window.jQuery );
var nav_url = window.location.href;
var nav_url_array = nav_url.split("/");
if(nav_url_array[3] == 'industrial-certification'){
    $('.color_changer>ul li:nth-child(3)').css('background','white');
    $('.color_changer>ul li:nth-child(3) span').css('color','black');
}
</script>
 @stop