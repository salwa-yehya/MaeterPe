

  let navigation = document.querySelector('.navigation');
  let menuToggle = document.querySelector('.menuToggle');
  let header = document.querySelector('header');


  menuToggle.onclick = function() {
    header.classList.toggle('open');
  }

// __swiper__

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    grabCursor: true,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });







    /**
   * Preloader
   */
    // let preloader = select('#preloader');
    // if (preloader) {
    //   window.addEventListener('load', () => {
    //     preloader.remove()
    //   });
    // }