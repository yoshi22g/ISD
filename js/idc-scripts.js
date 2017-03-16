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

   var captionContent = function() {

   //see how many slides there are
      var slideNum = $('#research .slick-slide').length;

   //capture all content in a array
      var slideTitle = $('#research .slick-active .slide-title').text();
      var slideContent = $('#research .slick-active .slider-short-content').text();
      var slideLink = $('#research .slick-active .readmore a').attr("href");

   //when the slide is active (slick current class applied), show the corresponding content
      $('.research-caption-title').text(slideTitle);
      $('.research-caption-text').text(slideContent);
      $('.research-caption-link').attr("href", slideLink).text(slideLink);
      console.log(slideTitle + ' ' + slideContent + ' ' + slideLink);
   };

   window.setInterval(function(){
      captionContent();
   }, 1000);

   //change caption header when clicked
   $('#link-arrow').click(function() {
      $(this).toggleClass('closed');
      $('.research-caption-text').fadeToggle(300, false);
      $('.research-caption-link').fadeToggle(300, false);
      });
   });


});
