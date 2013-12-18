var Links = (function() {
  var pub = {};

  var running = false;

  pub.setup = function() {
    $(".links li").mouseenter(function() {
      if (running) return;
      running = true;
      $(this).animate({width: "+=20px"}, 500, "swing",
        function() {
          $(this).animate({width: "-=20px"}, 500, "swing", 
            function() {
              running = false;
            });
        });
    });

    $(".links li").mouseleave(function() {
    });
  };

  return pub;
})();

$(document).ready(function() {
  //Links.setup();
});
