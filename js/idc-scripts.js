jQuery(document).ready(function( $ ) {

/// SEARCH EXIT UI ////

   //change out X-out color based on screen size
   var x_path = $("#search-x").attr("src");
   var x_white_path = x_path.slice(0,-4) + '-white.svg';

   if($(window).width() < 1100) {
         $("#search-x").attr("src", x_white_path);
   } else {
         $("#search-x").attr("src", x_path);
   }

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

   $("input.search-field").focusout(function(){
      $("#search-x").addClass("search-hide");
   });



//// Jquery Image Duotone ////
   var $slideImage = '#home-slider .slick-image-slide img';


   $($slideImage).duotone({gradientMap: '#FF3250, #FFFFFF'});
   $($slideImage).attr("srcset",'');

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
      $('.research-caption').toggleClass('expand');
      $('.research-caption-text').fadeToggle(500, false);
      $('.research-caption-link').fadeToggle(500, false);
   });


   /**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens and enables tab
 * support for dropdown menus.
 */
( function( $ ) {
   var container, button, menu, links, subMenus;

   container = document.getElementById( 'site-navigation' );
   if ( ! container ) {
      return;
   }

   button = container.getElementsByTagName( 'button' )[0];
   if ( 'undefined' === typeof button ) {
      return;
   }

   menu = container.getElementsByTagName( 'ul' )[0];

   // Hide menu toggle button if menu is empty and return early.
   if ( 'undefined' === typeof menu ) {
      button.style.display = 'none';
      return;
   }

   menu.setAttribute( 'aria-expanded', 'false' );
   if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
      menu.className += ' nav-menu';
   }

   button.onclick = function() {
      if ( -1 !== container.className.indexOf( 'toggled' ) ) {
         container.className = container.className.replace( ' toggled', '' );
         button.setAttribute( 'aria-expanded', 'false' );
         menu.setAttribute( 'aria-expanded', 'false' );
      } else {
         container.className += ' toggled';
         button.setAttribute( 'aria-expanded', 'true' );
         menu.setAttribute( 'aria-expanded', 'true' );
      }
   };

   // Get all the link elements within the menu.
   links    = menu.getElementsByTagName( 'a' );
   subMenus = menu.getElementsByTagName( 'ul' );

   // Set menu items with submenus to aria-haspopup="true".
   for ( var i = 0, len = subMenus.length; i < len; i++ ) {
      subMenus[i].parentNode.setAttribute( 'aria-haspopup', 'true' );
   }

   // Each time a menu link is focused or blurred, toggle focus.
   for ( i = 0, len = links.length; i < len; i++ ) {
      links[i].addEventListener( 'focus', toggleFocus, true );
      links[i].addEventListener( 'blur', toggleFocus, true );
   }

   /**
    * Sets or removes .focus class on an element.
    */
   function toggleFocus() {
      var self = this;

      // Move up through the ancestors of the current link until we hit .nav-menu.
      while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

         // On li elements toggle the class .focus.
         if ( 'li' === self.tagName.toLowerCase() ) {
            if ( -1 !== self.className.indexOf( 'focus' ) ) {
               self.className = self.className.replace( ' focus', '' );
            } else {
               self.className += ' focus';
            }
         }

         self = self.parentElement;
      }
   }

   function initMainNavigation( container ) {
      // Add dropdown toggle that display child menu items.
      container.find( '.menu-item-has-children > a, .page_item_has_children > a' ).after( '<button class="dropdown-toggle" aria-expanded="false">' + screenReaderText.expand + '</button>' );

      container.find( '.dropdown-toggle' ).click( function( e ) {
         var _this = $( this );
         e.preventDefault();
         _this.toggleClass( 'toggle-on' );
         _this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );
         _this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
         _this.html( _this.html() === screenReaderText.expand ? screenReaderText.collapse : screenReaderText.expand );
      } );
   }
   initMainNavigation( $( '.main-navigation' ) );

   // Re-initialize the main navigation when it is updated, persisting any existing submenu expanded states.
   $( document ).on( 'customize-preview-menu-refreshed', function( e, params ) {
      if ( 'primary' === params.wpNavMenuArgs.theme_location ) {
         initMainNavigation( params.newContainer );

         // Re-sync expanded states from oldContainer.
         params.oldContainer.find( '.dropdown-toggle.toggle-on' ).each(function() {
            var containerId = $( this ).parent().prop( 'id' );
            $( params.newContainer ).find( '#' + containerId + ' > .dropdown-toggle' ).triggerHandler( 'click' );
         });
      }
   });

   // Hide/show toggle button on scroll

   /*var position, direction, previous;

   $(window).scroll(function(){
      if( $(this).scrollTop() >= position ){
         direction = 'down';
         if(direction !== previous){
            $('.menu-toggle').addClass('hide');

            previous = direction;
         }
      } else {
         direction = 'up';
         if(direction !== previous){
            $('.menu-toggle').removeClass('hide');

            previous = direction;
         }
      }
      position = $(this).scrollTop();
   });*/

   // Wrap centered images in a new figure element
   $( 'img.aligncenter' ).wrap( '<figure class="centered-image"></figure>');

} )( jQuery );



});


