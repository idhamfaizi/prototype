var swiper = new Swiper(".mySwiper", {
    speed: 1000,
    parallax: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    // autoplay: false,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: false,
  });