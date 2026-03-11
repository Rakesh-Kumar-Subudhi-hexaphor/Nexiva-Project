// Enhanced Smooth Animations for Blog Pages
$(document).ready(function () {

  // Initialize Page Transition
  function initPageTransition() {
    $('main').addClass('page-transition');

    // Add loading animation
    const loadingAnimation = `
        
      `;
    $('body').append(loadingAnimation);

    // Remove loading animation after content loads
    $(window).on('load', function () {
      setTimeout(() => {
        $('.loading-animation').remove();
      }, 500);
    });
  }

  // Scroll Animations
  function initScrollAnimations() {
    // Scroll to top button
    const scrollButton = $('<div class="scroll-indicator"><i class="fa-solid fa-chevron-up"></i></div>');
    $('body').append(scrollButton);

    // Show/hide scroll button
    $(window).on('scroll', function () {
      if ($(this).scrollTop() > 300) {
        scrollButton.addClass('visible');
      } else {
        scrollButton.removeClass('visible');
      }

      // Trigger scroll animations
      triggerScrollAnimations();
    });

    // Scroll to top
    scrollButton.on('click', function () {
      $('html, body').animate({
        scrollTop: 0
      }, 800, 'easeInOutQuart');
      return false;
    });

    // Smooth scroll for anchor links
    $('a[href^="#"]').on('click', function (e) {
      if (this.hash !== "") {
        e.preventDefault();
        const hash = this.hash;

        $('html, body').animate({
          scrollTop: $(hash).offset().top - 80
        }, 1000, 'easeInOutQuart');

        // Add hash to URL
        if (history.pushState) {
          history.pushState(null, null, hash);
        } else {
          location.hash = hash;
        }
      }
    });
  }

  // Parallax Effect
  function initParallax() {
    if (!isMobile()) {
      $(window).on('scroll', function () {
        const scrolled = $(window).scrollTop();

        // Parallax for featured images
        $('.parallax-image').each(function () {
          const speed = $(this).data('speed') || 0.5;
          const yPos = -(scrolled * speed);
          $(this).css('transform', `translateY(${yPos}px)`);
        });

        // Parallax for blog cards
        $('.blog-card').each(function (index) {
          const cardScrolled = $(window).scrollTop();
          const cardOffset = $(this).offset().top;
          const yPos = (cardScrolled - cardOffset) * 0.1;
          $(this).css('transform', `translateY(${yPos}px)`);
        });
      });
    }
  }

  // Magnetic Button Effect
  function initMagneticButtons() {
    $('.magnetic-btn').each(function () {
      const btn = $(this);
      const btnWidth = btn.outerWidth();
      const btnHeight = btn.outerHeight();

      btn.on('mousemove', function (e) {
        const x = e.pageX - (btn.offset().left + btnWidth / 2);
        const y = e.pageY - (btn.offset().top + btnHeight / 2);

        const distance = Math.sqrt(x * x + y * y);
        const maxDistance = 50;

        if (distance < maxDistance) {
          const moveX = (x / maxDistance) * 10;
          const moveY = (y / maxDistance) * 10;

          btn.css({
            transform: `translate(${moveX}px, ${moveY}px)`
          });
        }
      });

      btn.on('mouseleave', function () {
        btn.css({
          transform: 'translate(0, 0)'
        });
      });
    });
  }

  // Lazy Loading Images with Animation
  function initLazyLoading() {
    const lazyImages = $('img.lazy-image');

    if ('IntersectionObserver' in window) {
      const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const img = entry.target;
            img.src = img.dataset.src;
            img.classList.add('loaded');
            imageObserver.unobserve(img);
          }
        });
      });

      lazyImages.each(function () {
        imageObserver.observe(this);
      });
    } else {
      // Fallback for older browsers
      lazyImages.each(function () {
        $(this).attr('src', $(this).data('src')).addClass('loaded');
      });
    }
  }

  // Animated Counter
  function initAnimatedCounters() {
    $('.counter').each(function () {
      const $this = $(this);
      const countTo = $this.attr('data-count');

      $({ countNum: $this.text() }).animate({
        countNum: countTo
      }, {
        duration: 2000,
        easing: 'swing',
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
        }
      });
    });
  }

  // Typing Animation
  function initTypingAnimation() {
    $('.typing-effect').each(function () {
      const text = $(this).text();
      $(this).html('');

      let i = 0;
      const typing = setInterval(() => {
        if (i < text.length) {
          $(this).append(text.charAt(i));
          i++;
        } else {
          clearInterval(typing);
          $(this).css('border-right', 'none');
        }
      }, 100);
    });
  }

  // Staggered Animations
  function initStaggeredAnimations() {
    $('.animate-stagger').each(function (index) {
      $(this).css('animation-delay', `${index * 0.1}s`);
    });
  }

  // Hover 3D Effect
  function init3DHover() {
    $('.blog-card').on('mousemove', function (e) {
      const card = $(this);
      const cardWidth = card.width();
      const cardHeight = card.height();
      const centerX = card.offset().left + cardWidth / 2;
      const centerY = card.offset().top + cardHeight / 2;
      const mouseX = e.pageX - centerX;
      const mouseY = e.pageY - centerY;

      const rotateY = (mouseX / cardWidth) * 10;
      const rotateX = -(mouseY / cardHeight) * 10;

      card.css({
        transform: `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`
      });
    });

    $('.blog-card').on('mouseleave', function () {
      $(this).css({
        transform: 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)'
      });
    });
  }

  // Animated Gradient Background
  function initAnimatedGradients() {
    $('.animated-gradient').each(function () {
      const gradient = $(this);
      let angle = 0;

      setInterval(() => {
        angle = (angle + 1) % 360;
        gradient.css('background', `linear-gradient(${angle}deg, #0066cc, #0099ff, #0066cc)`);
      }, 50);
    });
  }

  // Scroll Trigger Animations
  function triggerScrollAnimations() {
    $('.animate-on-scroll').each(function () {
      const element = $(this);
      const elementTop = element.offset().top;
      const elementBottom = elementTop + element.height();
      const viewportTop = $(window).scrollTop();
      const viewportBottom = viewportTop + $(window).height();

      if (elementBottom > viewportTop && elementTop < viewportBottom) {
        element.addClass('animated');
      }
    });
  }

  // Enhanced Filter Animation
  function initEnhancedFilter() {
    $('.filter-btn').on('click', function () {
      const $this = $(this);
      const filterValue = $this.data('filter');

      // Animate button
      $this.css({
        transform: 'scale(0.95)'
      }).delay(150).queue(function (next) {
        $(this).css({
          transform: 'scale(1)'
        });
        next();
      });

      // Filter animation
      if (filterValue === 'all') {
        $('.blog-card').each(function (index) {
          $(this).delay(index * 100).queue(function (next) {
            $(this).fadeIn(300).addClass('zoom-in');
            next();
          });
        });
      } else {
        $('.blog-card').each(function (index) {
          const categories = $(this).data('category').split(' ');

          if (categories.includes(filterValue)) {
            $(this).delay(index * 100).queue(function (next) {
              $(this).fadeIn(300).addClass('zoom-in');
              next();
            });
          } else {
            $(this).fadeOut(300);
          }
        });
      }
    });
  }

  // Enhanced Comment Form Animation
  function initEnhancedCommentForm() {
    $('#comment-form').on('submit', function (e) {
      e.preventDefault();

      // Add submission animation
      const form = $(this);
      form.css({
        transform: 'scale(0.98)',
        opacity: '0.8'
      });

      setTimeout(() => {
        form.css({
          transform: 'scale(1)',
          opacity: '1'
        });
      }, 300);
    });
  }

  // Animated Progress Bar
  function initAnimatedProgressBar() {
    const progressBar = $('<div class="reading-progress"></div>');
    $('body').append(progressBar);

    $(window).on('scroll', function () {
      const winHeight = $(window).height();
      const docHeight = $(document).height();
      const winScroll = $(window).scrollTop();
      const scrollPercent = (winScroll / (docHeight - winHeight)) * 100;

      progressBar.css('width', scrollPercent + '%');
    });
  }

  // Enhanced Image Gallery Animation
  function initEnhancedGallery() {
    $('.blog-gallery img').on('click', function () {
      const src = $(this).attr('src');
      const alt = $(this).attr('alt');

      // Create modal
      const modal = `
              <div class="gallery-modal">
                  <div class="modal-content">
                      <span class="close-modal">&times;</span>
                      <img src="${src}" alt="${alt}">
                  </div>
              </div>
          `;

      $('body').append(modal);

      // Animate modal in
      setTimeout(() => {
        $('.gallery-modal').addClass('active');
      }, 10);

      // Close modal
      $('.close-modal').on('click', function () {
        $('.gallery-modal').removeClass('active');
        setTimeout(() => {
          $('.gallery-modal').remove();
        }, 300);
      });

      // Close on background click
      $('.gallery-modal').on('click', function (e) {
        if (e.target === this) {
          $('.gallery-modal').removeClass('active');
          setTimeout(() => {
            $('.gallery-modal').remove();
          }, 300);
        }
      });
    });
  }

  // Add CSS for modal
  $('<style>').html(`
      .gallery-modal {
          position: fixed;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background: rgba(0, 0, 0, 0.9);
          display: flex;
          align-items: center;
          justify-content: center;
          z-index: 10000;
          opacity: 0;
          visibility: hidden;
          transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      }
      
      .gallery-modal.active {
          opacity: 1;
          visibility: visible;
      }
      
      .modal-content {
          position: relative;
          max-width: 90%;
          max-height: 90%;
          animation: zoomIn 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      }
      
      .modal-content img {
          width: 100%;
          height: auto;
          border-radius: 10px;
      }
      
      .close-modal {
          position: absolute;
          top: -40px;
          right: 0;
          color: white;
          font-size: 30px;
          cursor: pointer;
          transition: all 0.3s ease;
      }
      
      .close-modal:hover {
          color: #0066cc;
          transform: scale(1.2);
      }
  `).appendTo('head');

  // Smooth Hover for Categories
  function initSmoothCategoryHover() {
    $('.categories-list a').on('mouseenter', function () {
      $(this).css({
        transform: 'translateX(10px)',
        boxShadow: '0 10px 20px rgba(0, 102, 204, 0.2)'
      });
    }).on('mouseleave', function () {
      $(this).css({
        transform: 'translateX(0)',
        boxShadow: 'none'
      });
    });
  }

  // Animated Text Highlights
  function initTextHighlights() {
    $('h2, h3').each(function () {
      const words = $(this).text().split(' ');
      $(this).html('');

      words.forEach((word, index) => {
        const span = $('<span></span>')
          .text(word + ' ')
          .css('opacity', '0')
          .css('transform', 'translateY(20px)');

        $(this).append(span);

        setTimeout(() => {
          span.css({
            opacity: '1',
            transform: 'translateY(0)',
            transition: `all 0.5s cubic-bezier(0.4, 0, 0.2, 1) ${index * 0.1}s`
          });
        }, 100);
      });
    });
  }

  // Enhanced Social Share Animation
  function initEnhancedSocialShare() {
    $('.social-icon').on('mouseenter', function () {
      $(this).css({
        transform: 'translateY(-10px) rotate(360deg)',
        boxShadow: '0 15px 30px rgba(0, 102, 204, 0.3)'
      });
    }).on('mouseleave', function () {
      $(this).css({
        transform: 'translateY(0) rotate(0)',
        boxShadow: 'none'
      });
    });
  }

  // Mobile Detection
  function isMobile() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
  }

  // Initialize all animations
  function initAllAnimations() {
    initPageTransition();
    initScrollAnimations();
    initParallax();
    initMagneticButtons();
    initLazyLoading();
    initAnimatedCounters();
    initTypingAnimation();
    initStaggeredAnimations();
    init3DHover();
    initAnimatedGradients();
    initEnhancedFilter();
    initEnhancedCommentForm();
    initAnimatedProgressBar();
    initEnhancedGallery();
    initSmoothCategoryHover();
    initTextHighlights();
    initEnhancedSocialShare();

    // Initial scroll trigger
    triggerScrollAnimations();

    // Initialize WOW.js if available
    if (typeof WOW !== 'undefined') {
      new WOW({
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 100,
        mobile: true,
        live: true,
        scrollContainer: null
      }).init();
    }

    // Add custom easing
    $.easing.easeInOutQuart = function (x, t, b, c, d) {
      if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
      return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
    };
  }

  // Initialize when document is ready
  initAllAnimations();

  // Reinitialize on window resize
  let resizeTimer;
  $(window).on('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      triggerScrollAnimations();
    }, 250);
  });

  // Add CSS Animation for Stats
  $('<style>').html(`
      @keyframes countUp {
          from {
              transform: scale(0.5);
              opacity: 0;
          }
          to {
              transform: scale(1);
              opacity: 1;
          }
      }
      
      .stat-item.animated .stat-number {
          animation: countUp 0.8s cubic-bezier(0.4, 0, 0.2, 1);
      }
      
      /* Custom cursor for interactive elements */
      .blog-card,
      .btn,
      .social-icon,
      .tag,
      .filter-btn {
          cursor: pointer;
          transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      }
      
      /* Selection color */
      ::selection {
          background: rgba(0, 102, 204, 0.3);
          color: white;
      }
      
      /* Focus styles */
      :focus {
          outline: 2px solid #0066cc;
          outline-offset: 2px;
      }
      
      /* Smooth color transitions */
      * {
          transition: background-color 0.3s ease, border-color 0.3s ease;
      }
  `).appendTo('head');
});