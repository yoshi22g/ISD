jQuery(document).ready(function( $ ) {

/// SEARCH EXIT UI ////

   //when search is clicked, show the X button
   $("input.search-field").focus(function(){
      $("#search-x").removeClass("search-hide");
      console.log('clicked search');
   });
   //when the X is clicked, hide both the X button and reset the focus of text area
   $("#search-x").click(function() {
      $("input[type='search']").blur();
      $(this).addClass("search-hide");
   });



//// Jquery Image Duotone ////
   var $slideImage = '.slick-image-slide img';

   $($slideImage).duotone({
      gradientMap: '#FF3250, #FFFFFF'
   });

   $($slideImage).mouseenter(function(e) {
      $(this).duotone('reset');
    });

   $($slideImage).mouseleave(function(e) {
      $(this).duotone({gradientMap:'#FF3250, #FFFFFF'}).duotone('process');
    });



});
