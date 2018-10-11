$(document).ready( function() {
  $('.iOverlay').hide();
    $('.grid').masonry({
      itemSelector: '.grid-item',
      columnWidth: 300,
      gutter: 50,
      isFitWidth: true
    });


    $( "#item1" )
    .mouseenter(function() {
      $(this).find(".iOverlay").show();
    })
    .mouseleave(function() {
      $(this).find(".iOverlay").hide();
    });

    $( "#item2" )
    .mouseenter(function() {
      $(this).find(".iOverlay").show();
    })
    .mouseleave(function() {
      $(this).find(".iOverlay").hide();
    });

    $( "#item3" )
    .mouseenter(function() {
      $(this).find(".iOverlay").show();
    })
    .mouseleave(function() {
      $(this).find(".iOverlay").hide();
    });

    $( "#item4" )
    .mouseenter(function() {
      $(this).find(".iOverlay").show();
    })
    .mouseleave(function() {
      $(this).find(".iOverlay").hide();
    });

    $( "#item5" )
    .mouseenter(function() {
      $(this).find(".iOverlay").show();
    })
    .mouseleave(function() {
      $(this).find(".iOverlay").hide();
    });

  });
