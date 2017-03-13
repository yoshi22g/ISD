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
   var $slideImage = '#home-slider .slick-image-slide img';

   $($slideImage).attr("srcset",'');
   $($slideImage).duotone({gradientMap: '#FF3250, #FFFFFF'});

   $($slideImage).mouseenter(function(e) {
      console.log('mouse enter slide image');
      $($slideImage).duotone('reset');

    });

   $($slideImage).mouseleave(function(e) {
      $($slideImage).duotone('process');
    });

/**** Research Slider Captions ***/

//move the elements to inside slider
   $('.research-caption').appendTo('#research .slick-slider');

//capture all content in an array

//when the slide is active (slick current class applied), show the corresponding content


});
