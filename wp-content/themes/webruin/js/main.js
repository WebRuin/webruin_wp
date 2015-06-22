jQuery(document).ready(function($){
  // Top Nav BTN
  $(".fa-bars").click (function() {
    $(".top-menu-drop-down").toggleClass("open");
  });
  $(function(){
    $('.nav-link').each(function() {
      if ($(this).prop('href') == window.location.href) {
        $(this).addClass('current');
      }
    });
  });
  // Top Nav button END

  // Temparary Disabling Gold Package button
//  $('#gold-package').click(function (e) {
//    e.preventDefault();
//  });
  // Temparary Disabling button Package  END
});
