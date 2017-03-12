jQuery(document).ready(function() {
   //when search is clicked, show the X button
   jQuery("input.search-field").focus(function(){
      jQuery("#search-x").removeClass("search-hide");
      console.log('clicked search');
   });
   //when the X is clicked, hide both the X button and reset the focus of text area
   jQuery("#search-x").click(function() {
      jQuery("input[type='search']").blur();
      jQuery(this).addClass("search-hide");
   });
});
