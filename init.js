// Homepage init — runs after jQuery, AOS and Owl Carousel (all deferred, in order).

// Highlight target elements as they enter the viewport.
// Throttled with requestAnimationFrame + a passive listener to avoid forced reflow / long tasks.
jQuery(function ($) {
  var targets = $('[target]');
  if (targets.length) {
    var ticking = false;

    function inViewport(el) {
      var r = el.getBoundingClientRect();
      var vh = window.innerHeight || document.documentElement.clientHeight;
      var vw = window.innerWidth || document.documentElement.clientWidth;
      return r.top >= 0 && r.left >= 0 && r.bottom <= vh && r.right <= vw;
    }

    function update() {
      ticking = false;
      // Read all layout first, then write — prevents layout thrashing.
      var states = [];
      targets.each(function () {
        states.push(inViewport(this));
      });
      targets.each(function (i) {
        var id = this.getAttribute('target');
        var node = document.getElementById(id);
        if (node) {
          node.style.backgroundColor = states[i] ? 'crimson' : '';
          node.style.color = states[i] ? 'white' : '';
        }
      });
    }

    window.addEventListener('scroll', function () {
      if (!ticking) {
        ticking = true;
        window.requestAnimationFrame(update);
      }
    }, { passive: true });
    update();
  }
});

// Owl Carousels (static init — no scroll-linked triggering, which caused forced reflow/jank).
jQuery(function ($) {
  var navText = [
    '<button type="button" class="owl-prev bg-danger text-white rounded-pill" aria-label="Previous slide"><i class="fas fa-chevron-left" aria-hidden="true"></i></button>',
    '<button type="button" class="owl-next bg-danger text-white rounded-pill" aria-label="Next slide"><i class="fas fa-chevron-right" aria-hidden="true"></i></button>'
  ];

  $(".owl-carousel.owl-carousel-1").owlCarousel({ items: 3, margin: 10, loop: true, nav: true, navText: navText,
    responsive: { 0: { items: 1 }, 768: { items: 2 }, 769: { items: 3 } } });

  $(".owl-carousel.owl-carousel-2").owlCarousel({ items: 3, margin: 10, loop: true, nav: true, navText: navText,
    responsive: { 0: { items: 1 }, 768: { items: 2 }, 769: { items: 3 } } });

  $(".owl-carousel.owl-carousel-3").owlCarousel({ items: 4, margin: 10, loop: true, nav: true, navText: navText,
    responsive: { 0: { items: 1 }, 768: { items: 2 }, 769: { items: 4 } } });
});
