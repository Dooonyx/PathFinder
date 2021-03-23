"use strict";

$(document).ready(function () {
  $('.nav-link').on("click", function (event) {
    // Prevent browser default behavior
    event.preventDefault();

    // Get href value (target id <> anchor)
    var target = $(this).attr("href");

    // Get the top position of the target container
    var scrollValue = $(target).offset().top;

    // Scroll to this position
    $('html, body').animate({
      scrollTop: scrollValue
    }, 500);
  });

  $("#pseudo").on("change", function () {
    var pseudo = $("#pseudo").val();
    console.log(pseudo);
  });


  var length = $('.all > *').length;
  var num;
  for (var i = 1; i <= length; i++) {
    if ($('#prod' + i).css('display') == ('flex')) {
      num = i;
    }
  }
  var endFade = true;
  $('.fa-angle-left').click(function () {
    if (endFade === true) {
      endFade = false;
      $('#prod' + num).fadeOut(300, function () {
        if (num - 1 === 0) {
          num = length;
        } else {
          num = num - 1;
        }
        $('#prod' + num).fadeIn(300, function () {
          endFade = true;
        });
      });
    }
  });
  $('.fa-angle-right').click(function () {
    if (endFade === true) {
      endFade = false;
      $('#prod' + num).fadeOut(300, function () {
        if (num + 1 > length) {
          num = 1;
        } else {
          num = num + 1;
        }
        $('#prod' + num).fadeIn(300, function () {
          endFade = true;
        });
      });
    }
  });
  
  $(window).on("scroll", function() {
    var navbar = $('.navbar');

    $(".navbar").each(function() {

      var positionTop = navbar.offset().top;
      var positionBottom = $('.projet').offset().top - 270;


      if (positionTop > positionBottom) {
        navbar.addClass("fullSize");
      } else {
        navbar.removeClass("fullSize");
      }
    });
  });

})