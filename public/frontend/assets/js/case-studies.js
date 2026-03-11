// Case Studies Page JavaScript
$(document).ready(function () {
  // Filter functionality
  $('.filter-btn').on('click', function () {
    // Remove active class from all buttons
    $('.filter-btn').removeClass('active');

    // Add active class to clicked button
    $(this).addClass('active');

    var filterValue = $(this).data('filter');

    // Show all items if "all" is selected
    if (filterValue === 'all') {
      $('.case-item').fadeIn(400);
    } else {
      // Hide all items
      $('.case-item').hide();

      // Show items with matching category
      $('.case-item[data-category="' + filterValue + '"]').fadeIn(400);
    }
  });

  // Load more functionality
  $('.load-more-btn').on('click', function () {
    var $btn = $(this);
    var $container = $('.case-studies-container');

    // Show loading state
    $btn.html('<i class="fas fa-spinner fa-spin"></i> Loading...');
    $btn.prop('disabled', true);

    // Simulate API call delay
    setTimeout(function () {
      // Add more case studies (in real scenario, this would come from API)
      var moreStudies = `
              <div class="col-xl-4 col-md-6 case-item" data-category="healthcare">
                  <div class="case-study-card">
                      <div class="case-study-image">
                          <img src="assets/img/case/healthcare-case-2.jpg" alt="Healthcare Analytics">
                          <div class="case-study-category healthcare">Healthcare</div>
                      </div>
                      <div class="case-study-content">
                          <div class="case-study-meta">
                              <span><i class="fa-regular fa-calendar"></i> 3 Months</span>
                              <span><i class="fa-regular fa-dollar-sign"></i> $120K</span>
                          </div>
                          <h3>Patient Analytics Dashboard</h3>
                          <p>Developed a real-time analytics dashboard for hospital administrators to track patient flow, resource utilization, and operational metrics.</p>
                          
                          <div class="case-study-results">
                              <div class="result-item">
                                  <h4>35%</h4>
                                  <span>Resource Optimization</span>
                              </div>
                              <div class="result-item">
                                  <h4>50%</h4>
                                  <span>Report Time Saved</span>
                              </div>
                          </div>
                          
                          <div class="case-study-tech">
                              <span>React.js</span>
                              <span>D3.js</span>
                              <span>Python</span>
                              <span>PostgreSQL</span>
                          </div>
                          
                          <a href="case-study-details.html" class="case-study-link">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
          `;

      // Append new studies
      $container.append(moreStudies);

      // Reset button
      $btn.html('Load More Case Studies <i class="fa-sharp fa-solid fa-chevron-down"></i>');
      $btn.prop('disabled', false);

      // Scroll to newly added items
      $('html, body').animate({
        scrollTop: $btn.offset().top - 100
      }, 800);

      // Reinitialize animations
      $('.case-study-card').addClass('wow fadeInUp');

    }, 1500);
  });

  // Hover effect for case study cards
  $('.case-study-card').hover(
    function () {
      $(this).find('.case-study-link').css('gap', '12px');
    },
    function () {
      $(this).find('.case-study-link').css('gap', '8px');
    }
  );

  // Animate cards on scroll
  $('.case-study-card').each(function (i) {
    $(this).css('animation-delay', (i * 0.1) + 's');
  });

  // Smooth scroll for links
  $('.case-study-link').on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top - 100
    }, 800);
  });
});