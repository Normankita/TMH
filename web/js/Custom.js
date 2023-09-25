$(document).ready(function() {
    $('.placeholder-toggle').on('focus', function() {
      $(this).removeAttr('placeholder');
    }).on('blur', function() {
      $(this).attr('placeholder', 'Name');
    });
  });