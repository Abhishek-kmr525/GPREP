(function (Drupal, once) {
  "use strict";

  Drupal.behaviors.gprepHeroSlider = {
    attach: function (context) {
      once('gprep-hero-slider', '.gprep-hero-slider', context).forEach(function (slider) {
        var slides = Array.from(slider.querySelectorAll('.gprep-hero-slide'));
        var dots = Array.from(slider.querySelectorAll('.owl-dot'));
        var prev = slider.querySelector('.owl-prev');
        var next = slider.querySelector('.owl-next');
        var autoplayDelay = parseInt(slider.getAttribute('data-autoplay-delay') || '5000', 10);
        var activeIndex = slides.findIndex(function (slide) {
          return slide.classList.contains('is-active');
        });
        var timer = null;

        if (!slides.length) {
          return;
        }

        if (activeIndex < 0) {
          activeIndex = 0;
        }

        function render(index) {
          activeIndex = (index + slides.length) % slides.length;

          slides.forEach(function (slide, slideIndex) {
            slide.classList.toggle('is-active', slideIndex === activeIndex);
          });

          dots.forEach(function (dot, dotIndex) {
            dot.classList.toggle('active', dotIndex === activeIndex);
          });
        }

        function stopAutoplay() {
          if (timer) {
            window.clearInterval(timer);
            timer = null;
          }
        }

        function startAutoplay() {
          if (slides.length < 2) {
            return;
          }
          stopAutoplay();
          timer = window.setInterval(function () {
            render(activeIndex + 1);
          }, autoplayDelay);
        }

        if (prev) {
          prev.addEventListener('click', function () {
            render(activeIndex - 1);
            startAutoplay();
          });
        }

        if (next) {
          next.addEventListener('click', function () {
            render(activeIndex + 1);
            startAutoplay();
          });
        }

        dots.forEach(function (dot) {
          dot.addEventListener('click', function () {
            var index = parseInt(dot.getAttribute('data-slide-to') || '0', 10);
            render(index);
            startAutoplay();
          });
        });

        slider.addEventListener('mouseenter', stopAutoplay);
        slider.addEventListener('mouseleave', startAutoplay);

        render(activeIndex);
        startAutoplay();
      });
    }
  };
})(Drupal, once);
