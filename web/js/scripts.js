$(document).ready(function() {
     $('button[type="submit"]').prop('disabled', true);
     $('input[type="text"]').keyup(function() {
        if($(':input[name="first-name"]').val() != '' && $(':input[name="last-name"]').val() != '' && $(':input[name="address"]').val() != '' && $(':input[name="phone-number"]').val() != '') {
           $('button[type="submit"]').prop('disabled', false);
        }
     });
     $('button[type="submit"]').mouseover(function() {
       if($(':input[name="first-name"]').val() === '' || $(':input[name="last-name"]').val() === '' || $(':input[name="address"]').val() === '' || $(':input[name="phone-number"]').val() === '') {
          $('button[type="submit"]').prop('disabled', true);
       }
     })
 });
