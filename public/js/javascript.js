$(document).ready(function(){
    $(window).bind('scroll', function() {
      var distance = 300;
      if ($(window).scrollTop() > distance) {
        header.style.backgroundColor = '#002E5B';
      }
      else {
        header.style.backgroundColor = 'transparent';
      }
      if ($(window).scrollTop() > 700) {
          $('body').addClass('scrolled');
      } else {
          $('body').removeClass('scrolled');
      }
    });
    
});