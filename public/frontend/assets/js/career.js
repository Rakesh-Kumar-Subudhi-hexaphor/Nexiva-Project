// Careers Page JavaScript
$(document).ready(function () {

  // Initialize WOW.js animations
  if (typeof WOW !== 'undefined') {
    new WOW().init();
  }

  // Job Filter Functionality
  function initJobFilter() {
    const $jobSearch = $('#job-search');
    const $departmentFilter = $('#department-filter');
    const $locationFilter = $('#location-filter');
    const $jobCards = $('.job-card');
    const $noJobsMessage = $('.no-jobs-message');

    function filterJobs() {
      const searchTerm = $jobSearch.val().toLowerCase();
      const department = $departmentFilter.val();
      const location = $locationFilter.val();

      let visibleJobs = 0;

      $jobCards.each(function () {
        const $card = $(this);
        const jobTitle = $card.find('.job-title').text().toLowerCase();
        const jobDepartment = $card.data('department');
        const jobLocation = $card.data('location');

        const matchesSearch = searchTerm === '' || jobTitle.includes(searchTerm);
        const matchesDepartment = department === 'all' || jobDepartment === department;
        const matchesLocation = location === 'all' || jobLocation === location;

        if (matchesSearch && matchesDepartment && matchesLocation) {
          $card.fadeIn(300);
          visibleJobs++;
        } else {
          $card.fadeOut(300);
        }
      });

      // Show/hide no jobs message
      if (visibleJobs === 0) {
        $noJobsMessage.fadeIn(300);
      } else {
        $noJobsMessage.fadeOut(300);
      }
    }

    // Bind filter events
    $jobSearch.on('keyup', filterJobs);
    $departmentFilter.on('change', filterJobs);
    $locationFilter.on('change', filterJobs);

    // Initial filter
    filterJobs();
  }

  // Load More Jobs
  function initLoadMoreJobs() {
    const $loadMoreBtn = $('#load-more-jobs');
    const $hiddenJobs = $('.job-card:hidden');

    // Initially hide some jobs
    $('.job-card:gt(2)').hide();

    $loadMoreBtn.on('click', function () {
      $('.job-card:hidden').slice(0, 3).fadeIn(500);

      // Hide button if no more jobs
      if ($('.job-card:hidden').length === 0) {
        $loadMoreBtn.fadeOut(300);
      }
    });
  }

  // Application Modal
  function initApplicationModal() {
    const $applyBtns = $('.apply-btn');
    const $modal = $('#applicationModal');
    const $modalJobTitle = $('#modal-job-title');

    $applyBtns.on('click', function () {
      const jobTitle = $(this).data('job');
      $modalJobTitle.text(jobTitle);

      // Set hidden field with job title
      $modal.find('input[name="job_title"]').remove();
      $modal.find('form').append(`<input type="hidden" name="job_title" value="${jobTitle}">`);

      // Show modal
      $modal.modal('show');
    });
  }

  // Form Submission
  function initFormSubmission() {
    // Job Application Form
    $('#jobApplicationForm').on('submit', function (e) {
      e.preventDefault();

      const $form = $(this);
      const $submitBtn = $form.find('button[type="submit"]');

      // Validate file size (max 5MB)
      const fileInput = $form.find('input[type="file"]')[0];
      if (fileInput.files.length > 0) {
        const fileSize = fileInput.files[0].size / 1024 / 1024; // in MB
        if (fileSize > 5) {
          showAlert('File size must be less than 5MB', 'error');
          return;
        }
      }

      // Show loading state
      $submitBtn.addClass('loading');

      // Simulate API call
      setTimeout(() => {
        // Reset form
        $form[0].reset();

        // Hide modal
        $('#applicationModal').modal('hide');

        // Reset button
        $submitBtn.removeClass('loading');

        // Show success message
        showAlert('Application submitted successfully! We will contact you soon.', 'success');
      }, 2000);
    });

    // General Application Form
    $('#generalApplicationForm').on('submit', function (e) {
      e.preventDefault();

      const $form = $(this);
      const $submitBtn = $form.find('button[type="submit"]');

      // Validate file size
      const fileInput = $form.find('input[type="file"]')[0];
      if (fileInput.files.length > 0) {
        const fileSize = fileInput.files[0].size / 1024 / 1024;
        if (fileSize > 5) {
          showAlert('File size must be less than 5MB', 'error');
          return;
        }
      }

      // Show loading state
      $submitBtn.addClass('loading');

      // Simulate API call
      setTimeout(() => {
        // Reset form
        $form[0].reset();

        // Hide modal
        $('#generalApplicationModal').modal('hide');

        // Reset button
        $submitBtn.removeClass('loading');

        // Show success message
        showAlert('Your application has been submitted! We\'ll keep you in mind for future opportunities.', 'success');
      }, 2000);
    });
  }

  // Smooth Scrolling
  function initSmoothScrolling() {
    $('a[href^="#"]').on('click', function (e) {
      if (this.hash !== "") {
        e.preventDefault();
        const hash = this.hash;

        $('html, body').animate({
          scrollTop: $(hash).offset().top - 80
        }, 800);
      }
    });
  }

  // File Upload Preview (Optional)
  function initFileUploadPreview() {
    $('input[type="file"]').on('change', function () {
      const fileName = $(this).val().split('\\').pop();
      if (fileName) {
        $(this).next('.file-name').remove();
        $(this).after(`<div class="file-name text-success mt-2"><i class="fa-solid fa-check-circle me-2"></i>${fileName}</div>`);
      }
    });
  }

  // Scroll Animations
  function initScrollAnimations() {
    const $revealElements = $('.reveal');

    function checkScroll() {
      $revealElements.each(function () {
        const elementTop = $(this).offset().top;
        const windowBottom = $(window).scrollTop() + $(window).height();

        if (elementTop < windowBottom - 100) {
          $(this).addClass('active');
        }
      });
    }

    $(window).on('scroll', checkScroll);
    checkScroll(); // Initial check
  }

  // Alert System
  function showAlert(message, type) {
    const alertClass = type === 'success' ? 'alert-success' :
      type === 'error' ? 'alert-error' : 'alert-info';

    const $alert = $(`
          <div class="alert ${alertClass} alert-dismissible fade show" role="alert">
              ${message}
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
      `);

    // Position at top
    $alert.css({
      position: 'fixed',
      top: '20px',
      right: '20px',
      zIndex: '9999',
      minWidth: '300px',
      maxWidth: '500px'
    });

    $('body').append($alert);

    // Auto remove after 5 seconds
    setTimeout(() => {
      $alert.alert('close');
    }, 5000);
  }

  // Initialize Accordion
  function initAccordion() {
    $('.accordion-button').on('click', function () {
      $(this).toggleClass('active');
    });
  }

  // Job Card Hover Effects
  function initJobCardHover() {
    $('.job-card').hover(
      function () {
        $(this).addClass('hover-active');
      },
      function () {
        $(this).removeClass('hover-active');
      }
    );
  }

  // Print Job Description
  function initPrintFunctionality() {
    $('.print-job').on('click', function (e) {
      e.preventDefault();
      window.print();
    });
  }

  // Share Job
  function initShareFunctionality() {
    $('.share-job').on('click', function (e) {
      e.preventDefault();
      const jobTitle = $(this).closest('.job-card').find('.job-title').text();
      const jobUrl = window.location.href;

      if (navigator.share) {
        navigator.share({
          title: jobTitle,
          text: `Check out this job opportunity at Nexiva Technologies: ${jobTitle}`,
          url: jobUrl
        });
      } else {
        // Fallback for browsers that don't support Web Share API
        const shareUrl = `mailto:?subject=${encodeURIComponent(jobTitle)}&body=${encodeURIComponent(`Check out this job opportunity: ${jobUrl}`)}`;
        window.open(shareUrl, '_blank');
      }
    });
  }

  // Initialize all functions
  function initAll() {
    initJobFilter();
    initLoadMoreJobs();
    initApplicationModal();
    initFormSubmission();
    initSmoothScrolling();
    initFileUploadPreview();
    initScrollAnimations();
    initAccordion();
    initJobCardHover();
    initPrintFunctionality();
    initShareFunctionality();

    // Add print button to job cards
    $('.job-card').each(function () {
      const $card = $(this);
      const jobTitle = $card.find('.job-title').text();

      $card.find('.job-action').append(`
              <div class="job-actions mt-3">
                  <button class="btn btn-sm btn-outline-secondary print-job me-2">
                      <i class="fa-solid fa-print"></i> Print
                  </button>
                  <button class="btn btn-sm btn-outline-secondary share-job">
                      <i class="fa-solid fa-share"></i> Share
                  </button>
              </div>
          `);
    });
  }

  // Initialize when document is ready
  initAll();

  // Reinitialize on window resize
  let resizeTimer;
  $(window).on('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      initScrollAnimations();
    }, 250);
  });

  // Add keyboard navigation for job cards
  $(document).on('keydown', function (e) {
    if (e.key === 'Enter') {
      const $focused = $(document.activeElement);
      if ($focused.hasClass('apply-btn')) {
        $focused.click();
      }
    }
  });

  // Add ARIA labels for accessibility
  $('.apply-btn').attr('aria-label', 'Apply for this position');
  $('.accordion-button').attr('aria-expanded', 'false');

  // Update ARIA expanded state on accordion toggle
  $('.accordion-button').on('click', function () {
    const isExpanded = $(this).attr('aria-expanded') === 'true';
    $(this).attr('aria-expanded', !isExpanded);
  });
});