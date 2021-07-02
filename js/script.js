$(function() {
  $(".p-header__menu-button").click(function() {
    $(".c-sidebar").show("slide" , {direction: "right"} , 200);
    $(".p-fade-layer").css("visibility","visible");

    $(function() {
      $(".c-close__button").click(function() {
        $(".c-sidebar").hide("slide" , {direction: "right"} , 200);
        $(".p-fade-layer").css("visibility","hidden");
      });
    });
  });
});