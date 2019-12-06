
<script type="text/javascript" src="{{url('/assets/frontend/js/bd.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/frontend/js/main.js')}}"></script>
  <script>
  

  if (navigator.userAgent.toLowerCase().indexOf("firefox") > -1) {
    $('input[type="checkbox"]').css('visibility', 'visible');
}

    

  function goBack() {
    window.history.back();
}
  $(".category-bdt").hover( function() {
    $(".show-ct-list").css('display', 'block');
      $(".bazar-top-list li").hover( function(){
      $(this).children(".child-ct-list").css('display', 'block');
    },
      function(){
      $(this).children(".child-ct-list").css('display', 'none');
   });
  }, function() {
      $(".show-ct-list").css('display', 'none');
  });

    // You can also use "$(window).load(function() {"

  

  </script>

  <!-- Include js plugin -->

  <script type="text/javascript">

    $(document).ready(function() {

       $(".sup").show();

       $(".buy").hide();

       $(".both").hide();



       $("#buyr").click(function() {

       $(".buy").show();

       $(".sup").hide();

       $(".both").hide();

      });

      

       $("#supli").click(function() {

       $(".buy").hide();

       $(".both").hide();

       $(".sup").show();

       });

       

       $("#both").click(function() {

       $(".buy").hide();

       $(".sup").hide();

       $(".both").show();

       });

     });

  </script>

 

    

     <script>

    // $(window).load(function(){

    //   $(".logo_search_area").sticky({ topSpacing: 0 });

    // });

     </script>



<script type="text/javascript">

    $(".bazar-list li").on("mouseover click",function(t){if(!$(this).hasClass("all")){if($(this).hasClass("current")){$(this).attr("class","");

    var a=$(this).attr("data-id");

    $("#"+a).hide()}

    else{$(this).attr("class","current");

    var a=$(this).attr("data-id");

    $("#"+a).show()}

    }}),$(".bazar-list li").on("mouseout",function(){if(!$(this).hasClass("all")){$(this).attr("class","");var t=$(this).attr("data-id");$("#"+t).hide()}}),$(".cacostos").on("mouseover",function(){var t=$(this).attr("id");$('.bazar-list li[data-id="'+t+'"]').attr("class","current"),$(this).show()}),$(".cacostos").on("mouseout",function(){var t=$(this).attr("id");$('.bazar-list li[data-id="'+t+'"]').attr("class",""),$(this).hide()});

    </script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script type="text/javascript">
//   $(document).ready(function(){
//     $('[data-toggle="tooltip"]').tooltip();   
// });
</script>


    @section('scripts')

    {{--custom js goes here--}}

    @show