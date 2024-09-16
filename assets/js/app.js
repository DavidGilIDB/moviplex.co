var swiper = new Swiper(".hero-slider", {
  slidesPerView: 4,
  spaceBetween: 10,
  pagination: {
  el: ".swiper-pagination",
  clickable: true,
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 15
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 15
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 15
    }
  }
  
});

var swiper = new Swiper(".movies-slider", {
  slidesPerView: 5,
  spaceBetween: 10,
  pagination: {
  el: ".swiper-pagination",
  clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 15
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 15
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 2,
      spaceBetween: 15
    }
  }
  
  });