$(document).on('click', 'a', function(event){
  $('html, body').animate({
    scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 500);
});



// ===== Scroll to Top ====
$(window).scroll(function() {
  if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
    $('#return-to-top').fadeIn(200);    // Fade in the arrow
  } else {
    $('#return-to-top').fadeOut(200);   // Else fade out the arrow
  }
});
$('#return-to-top').click(function() {      // When arrow is clicked
  $('body,html').animate({
    scrollTop : 0                       // Scroll to top of body
  }, 500);
});


var menu = $(".menu");

menu.addClass('fa-bars');

menu.on('click', function(){
  if (menu.hasClass('fa-bars')) {
    menu.removeClass('fa-bars').addClass('fa-times');
    $('nav').show();
  } else {
    menu.removeClass('fa-times').addClass('fa-bars');
    $('nav').hide();
  }
});
