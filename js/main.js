
   // Define interval for slider and set pause on hover false.
    $('#myCarousel').carousel({
    interval: 3000,
    pause: "false"
});

$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});

$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });


    } // End if
  });
})


   $('.navbar-collapse').on('click', function () {
       $('.navbar-collapse').collapse('hide');
       $a = $($(this).attr('href'));
       $('html,body').animate({ scrollTop: $a.offset().top - 50}, 500);
       return false;
   });

