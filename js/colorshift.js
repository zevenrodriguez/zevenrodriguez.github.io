$(document).ready( function() {


    $('.grid-item').each(function () {
      var color = "#";
      for (k = 0; k < 3; k++) {
         color += ("0" + (Math.random()*256|0).toString(16)).substr(-2);
      }

       $(this).css("color", color);
   });


    $('.tSection').each(function () {
      var color = "#";
      for (k = 0; k < 3; k++) {
         color += ("0" + (Math.random()*256|0).toString(16)).substr(-2);
      }

       $(this).css("color", color);
   });

   $('.rSection').each(function () {
     var color = "#";
     for (k = 0; k < 3; k++) {
        color += ("0" + (Math.random()*256|0).toString(16)).substr(-2);
     }

      $(this).css("color", color);
  });

  });
