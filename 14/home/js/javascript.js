
window.addEventListener('load',sizeSwiper);
window.addEventListener('resize',sizeSwiper);
function sizeSwiper()
{
  if(screen.width <= 480)
  {
    var swiper = new Swiper('.swiper', {
      // Optional parameters
      slidesPerView: 1,
          autoplay: {
          delay: 4000,
        },
      direction: 'horizontal',
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
  }
  else if(screen.width <= 1024)
  {
    var swiper = new Swiper('.swiper', {
      // Optional parameters
      slidesPerView: 3,
          autoplay: {
          delay: 4000,
        },
      direction: 'horizontal',
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
  }

  else if(screen.width < 1280)
  {
    var swiper = new Swiper('.swiper', {
      // Optional parameters
      slidesPerView: 4,
          autoplay: {
          delay: 4000,
        },
      direction: 'horizontal',
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
  }

  if(screen.width >= 1280)
  {
    var swiper = new Swiper('.swiper', {
      // Optional parameters
      slidesPerView: 5,
          autoplay: {
          delay: 4000,
        },
      direction: 'horizontal',
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },
    });
  }

}
