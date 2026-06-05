AOS.init();

// Add jQuery code here
$(document).ready(function () {
  $(window).scroll(function () {
    // Check if the second column content is completely scrolled
    var windowHeight = $(window).height();
    var documentHeight = $(document).height();
    var scrollTop = $(window).scrollTop();
    var footerOffset = documentHeight - windowHeight;

    if (scrollTop >= footerOffset) {
      $('.sticky-column').removeClass('position-sticky');
    } else {
      $('.sticky-column').addClass('position-sticky');
    }
  });
});

// Add jQuery code here
$(document).ready(function () {
  $(window).scroll(function () {
    // Check if the second column content is completely scrolled
    var windowHeight = $(window).height();
    var documentHeight = $(document).height();
    var scrollTop = $(window).scrollTop();
    var footerOffset = documentHeight - windowHeight;

    if (scrollTop >= footerOffset) {
      $('.sticky-column-title').removeClass('position-sticky-title');
    } else {
      $('.sticky-column-title').addClass('position-sticky-title');
    }
  });
});

// Get all card elements
const cards = document.querySelectorAll('.myCard');

// Function to handle scroll events
function handleScroll() {
  // Iterate through all cards
  cards.forEach((card) => {
    // Check if the card is at the bottom of the screen
    if (isCardAtBottom(card)) {
      // Apply scaling if the card is at the bottom
      card.classList.add('scaled-card');
    } else {
      // Remove scaling if the card is not at the bottom
      card.classList.remove('scaled-card');
    }
  });
}

// Function to check if the card is at the bottom of the screen
function isCardAtBottom(card) {
  const cardRect = card.getBoundingClientRect();
  const windowHeight = window.innerHeight;
  return cardRect.bottom >= windowHeight;
}

// Attach the handleScroll function to the scroll event
window.addEventListener('scroll', handleScroll);

// Initial check for the card positions on page load
handleScroll();

// Wait for the document to be ready
