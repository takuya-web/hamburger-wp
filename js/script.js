jQuery(function() {
  jQuery(".p-header__menu-button").click(function() {
    jQuery(".c-sidebar").show("slide" , {direction: "right"} , 200);
    jQuery(".p-fade-layer").css("visibility","visible");

    jQuery(function() {
      jQuery(".c-close__button").click(function() {
        jQuery(".c-sidebar").hide("slide" , {direction: "right"} , 200);
        jQuery(".p-fade-layer").css("visibility","hidden");
      });
    });
  });
});