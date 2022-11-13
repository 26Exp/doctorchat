import { domReady } from "@roots/sage/client";

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);

function mobileNavigation() {
  const tirgger = document.querySelector("#mobile-menu-tirgger");
  const menu = document.querySelector("#mobile-menu .mobile-navigation");
  const backdrop = document.querySelector(
    "#mobile-menu .mobile-navigation-backdrop"
  );

  tirgger.addEventListener("click", () => {
    menu.classList.toggle("open");
  });

  backdrop.addEventListener("click", () => {
    menu.classList.remove("open");
  });

  document.addEventListener("keyup", (e) => {
    if (e.code === "Escape") {
      menu.classList.remove("open");
    }
  });

  document.addEventListener("scroll", () => {
    menu.classList.remove("open");
  });
}

function testimonialsSlider() {
  new Swiper("#testimonials", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      850: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });
}

window.addEventListener("DOMContentLoaded", () => {
  mobileNavigation();
  testimonialsSlider();
});
