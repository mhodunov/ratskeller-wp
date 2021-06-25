const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  direction: 'vertical',
  loop: true,
  allowTouchMove: false,

  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-next',
  },
});

AOS.init();