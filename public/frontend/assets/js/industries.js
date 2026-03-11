// Industries Page JavaScript
$(document).ready(function () {
  // Animate industry cards on scroll
  $('.industry-card').each(function (i) {
    $(this).css('animation-delay', (i * 0.1) + 's');
  });

  // Counter animation for stats
  $('.stat-card h3').each(function () {
    var $this = $(this);
    var countTo = $this.text().replace('+', '');

    if ($.isNumeric(countTo)) {
      $({ countNum: 0 }).animate({
        countNum: countTo
      }, {
        duration: 2000,
        easing: 'swing',
        step: function () {
          $this.text(Math.floor(this.countNum) + '+');
        },
        complete: function () {
          $this.text(countTo + '+');
        }
      });
    }
  });

  // Smooth scroll for internal links
  $('.industry-link').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top - 100
    }, 800);
  });

  // Hover effect for industry cards
  $('.industry-card').hover(
    function () {
      $(this).find('.industry-icon').css({
        'transform': 'rotate(360deg)',
        'transition': 'transform 0.6s ease'
      });
    },
    function () {
      $(this).find('.industry-icon').css({
        'transform': 'rotate(0deg)',
        'transition': 'transform 0.6s ease'
      });
    }
  );
});