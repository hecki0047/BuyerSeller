<script type="text/javascript">
  var nav_url = window.location.href;
  var nav_url_array1 = nav_url.split("/");
  var nav_url_array = nav_url_array1[3].split("?");
  // var decoded_url = decodeURIComponent(nav_url);
    function goBack() {
    window.history.back();
}

  // console.log($('.navigation-menu-list-li'));

  if(nav_url_array[0] == 'Mybuying-Request'){
    $('.da6').addClass('lfact');
  }
  if(nav_url_array[0] == 'my-supplier'){
    $('.da7').addClass('lfact');
  }
  if(nav_url_array[0] == 'my-buyer'){
    $('.da12').addClass('lfact');
  }
  // if(nav_url_array[0] == 'extra-inquery'){
  //   $('.navigation-menu-list-li').eq(21).find("a").addClass('lfact');
  // }
  if(nav_url_array[0] == 'order-list'){
    $('.da2').addClass('lfact');
  }
  if(nav_url_array[0] == 'order-list'){
    $('.da15').addClass('lfact');
  }
  if(nav_url_array[0] == 'send-order-list'){
    $('.da16').addClass('lfact');
  }
   if(nav_url_array[0] == 'favorite-product'){
    $('.da3').addClass('lfact');
  }
  if(nav_url_array[0] == 'favorite-supplier'){
    $('.da4').addClass('lfact');
  }
  if(nav_url_array[0] == 'payment-history'){
    $('.da18').addClass('lfact');
  }
  // if(nav_url_array1[3] == 'list' && nav_url_array1[4] == 'view' && nav_url_array1[5] == 'requested' && nav_url_array1[6] == 'sample'){
  //   $('.navigation-menu-list-li').eq(13).find('a').addClass('lfact');
  // }
  if(nav_url_array1[3] == 'dashboard' && nav_url_array1[4] == 'product'){
    $('.da9').addClass('lfact');
  }
  if(nav_url_array1[3] == 'bdtdc' && nav_url_array1[4] == 'trade-alert'){
    $('.da14').addClass('lfact');
  }
  if(nav_url_array1[3] == 'dashboard' && nav_url_array1[4] == 'company_site'){
    $('.da10').addClass('lfact');
  }if(nav_url_array1[3] == 'quotation' && nav_url_array1[4] == 'management'){
    $('.da11').addClass('lfact');
  }if(nav_url_array1[3] == 'product' && nav_url_array1[4] == 'manage_product_group'){
    $('.da13').addClass('lfact');
  }
  // if(nav_url_array1[3] == 'mysource_quotations' && nav_url_array1[4] == 'inq'){
  //   $('.navigation-menu-list-li').eq(13).find('a').addClass('lfact');
  // }
  
  // if(nav_url_array1[3] == 'mysource' && nav_url_array1[4] == 'inq'){
  //   $('.navigation-menu-list-li').eq(11).find('a').addClass('lfact');
  // }
  if(nav_url_array1[3] == 'supplier' && nav_url_array1[4] == 'product_create'){
    $('.da8').addClass('lfact');
  }

</script>