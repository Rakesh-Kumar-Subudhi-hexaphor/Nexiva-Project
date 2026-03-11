// Blog Page JavaScript
$(document).ready(function () {
  // Blog Filter Functionality
  $('.filter-btn').on('click', function () {
    $('.filter-btn').removeClass('active');
    $(this).addClass('active');

    const filterValue = $(this).data('filter');

    if (filterValue === 'all') {
      $('.blog-card').fadeIn(300);
    } else {
      $('.blog-card').each(function () {
        const categories = $(this).data('category').split(' ');
        if (categories.includes(filterValue)) {
          $(this).fadeIn(300);
        } else {
          $(this).fadeOut(300);
        }
      });
    }
  });

  // Blog Card Hover Animation
  $('.blog-card').on('mouseenter', function () {
    $(this).addClass('hover-active');
  }).on('mouseleave', function () {
    $(this).removeClass('hover-active');
  });

  // Initialize WOW.js for animations
  if (typeof WOW !== 'undefined') {
    new WOW().init();
  }

  // Smooth scroll for anchor links
  $('a[href^="#"]').on('click', function (e) {
    if (this.hash !== "") {
      e.preventDefault();
      const hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top - 80
      }, 800);
    }
  });

  // Newsletter Form Submission
  $('.newsletter-form form').on('submit', function (e) {
    e.preventDefault();
    const email = $(this).find('input[type="email"]').val();

    if (email && validateEmail(email)) {
      // Add loading state
      const submitBtn = $(this).find('button');
      const originalText = submitBtn.html();
      submitBtn.html('<i class="fa-solid fa-spinner fa-spin"></i> Subscribing...');

      // Simulate API call
      setTimeout(() => {
        submitBtn.html('<i class="fa-solid fa-check"></i> Subscribed!');
        $(this).find('input[type="email"]').val('');

        // Reset button after 2 seconds
        setTimeout(() => {
          submitBtn.html(originalText);
        }, 2000);

        // Show success message
        showNotification('Successfully subscribed to newsletter!', 'success');
      }, 1500);
    } else {
      showNotification('Please enter a valid email address.', 'error');
    }
  });

  // Email validation function
  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }

  // Notification function
  function showNotification(message, type) {
    const notification = $('<div class="notification"></div>');
    notification.html(`
          <div class="notification-content notification-${type}">
              <i class="fa-solid fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
              <span>${message}</span>
          </div>
      `);

    $('body').append(notification);
    notification.css({
      position: 'fixed',
      top: '20px',
      right: '20px',
      zIndex: '9999',
      animation: 'slideInRight 0.3s ease'
    });

    setTimeout(() => {
      notification.animate({ right: '-100%' }, 300, function () {
        $(this).remove();
      });
    }, 3000);
  }

  // Add notification styles
  $('<style>').html(`
      .notification-content {
          padding: 15px 20px;
          border-radius: 8px;
          background: white;
          box-shadow: 0 5px 15px rgba(0,0,0,0.1);
          display: flex;
          align-items: center;
          gap: 10px;
          min-width: 300px;
      }
      .notification-success {
          border-left: 4px solid #28a745;
      }
      .notification-error {
          border-left: 4px solid #dc3545;
      }
      .notification-content i {
          font-size: 20px;
      }
      .notification-success i {
          color: #28a745;
      }
      .notification-error i {
          color: #dc3545;
      }
      @keyframes slideInRight {
          from { right: -100%; }
          to { right: 20px; }
      }
  `).appendTo('head');

  // Blog Search Functionality
  $('#blog-search-form').on('submit', function (e) {
    e.preventDefault();
    const searchTerm = $(this).find('input[type="text"]').val().toLowerCase();

    if (searchTerm) {
      $('.blog-card').each(function () {
        const title = $(this).find('.blog-title').text().toLowerCase();
        const excerpt = $(this).find('.blog-excerpt').text().toLowerCase();
        const tags = $(this).find('.blog-tags span').map(function () {
          return $(this).text().toLowerCase();
        }).get();

        if (title.includes(searchTerm) || excerpt.includes(searchTerm) ||
          tags.some(tag => tag.includes(searchTerm))) {
          $(this).fadeIn(300);
        } else {
          $(this).fadeOut(300);
        }
      });
    }
  });
});






// 


