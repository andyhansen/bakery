<? include "header.inc.php"; ?>
<link rel="stylesheet" type="text/css" href="css/gallery.css">
<!--<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">-->
<div id="main">
  <div id="gallery">
<?php
if ($handle = opendir("images/gallery/")) {
  /* This is the correct way to loop over the directory. */
  while (false !== ($entry = readdir($handle))) {
    if (!is_dir($entry)) {
      #echo "<div class='gallery-item'><span class='img-helper'></span><img src='images/gallery/$entry' alt='Poo' width='155'></div>";
      echo "<img src='images/gallery/$entry' alt='Poo' width='155'>";
    }
  }
  closedir($handle);
}
?>
  </div>
</div>
<script src="js/jquery.slides.min.js"></script>
<script>
$(function(){
    $("#gallery").slidesjs({
        width: 940,
        height: 528,
        navigation: {
          active: false
        },
        play: {
            active: false,
              // [boolean] Generate the play and stop buttons.
              // You cannot use your own buttons. Sorry.
            effect: "slide",
              // [string] Can be either "slide" or "fade".
            interval: 5000,
              // [number] Time spent on each slide in milliseconds.
            auto: true,
              // [boolean] Start playing the slideshow on load.
            swap: true,
              // [boolean] show/hide stop and play buttons
            pauseOnHover: true,
              // [boolean] pause a playing slideshow on hover
            restartDelay: 2500
              // [number] restart delay on inactive slideshow
        },
        complete: function (number) {
          console.log("test");
          console.log($("#gallery").text());
        }
      });
    });
</script>
<? include "footer.inc.php"; ?>
