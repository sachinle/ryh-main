// once: animate a single time and stay visible (don't re-hide on scroll-up)
// offset 0 + top-bottom anchor: reveal as soon as the element enters the viewport
AOS.init({ once: true, duration: 500, offset: 0, anchorPlacement: 'top-bottom' });

// Single passive, rAF-throttled scroll handler for the sticky columns and card scaling.
// Reads are batched before writes to avoid forced reflow / layout thrashing.
(function () {
  var stickyCols = document.querySelectorAll('.sticky-column');
  var stickyTitles = document.querySelectorAll('.sticky-column-title');
  var cards = document.querySelectorAll('.myCard');
  var ticking = false;

  function onScroll() {
    ticking = false;
    var vh = window.innerHeight;

    // --- reads ---
    var atBottom = (window.scrollY + vh) >= (document.documentElement.scrollHeight - 1);
    var cardBottoms = [];
    for (var i = 0; i < cards.length; i++) {
      cardBottoms.push(cards[i].getBoundingClientRect().bottom);
    }

    // --- writes ---
    for (var c = 0; c < stickyCols.length; c++) {
      stickyCols[c].classList.toggle('position-sticky', !atBottom);
    }
    for (var t = 0; t < stickyTitles.length; t++) {
      stickyTitles[t].classList.toggle('position-sticky-title', !atBottom);
    }
    for (var k = 0; k < cards.length; k++) {
      cards[k].classList.toggle('scaled-card', cardBottoms[k] >= vh);
    }
  }

  window.addEventListener('scroll', function () {
    if (!ticking) {
      ticking = true;
      window.requestAnimationFrame(onScroll);
    }
  }, { passive: true });

  window.addEventListener('load', onScroll);
  onScroll();
})();
