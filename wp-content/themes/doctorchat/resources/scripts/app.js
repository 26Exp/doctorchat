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

  if (!tirgger) return;

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
}

function testimonialsSlider() {
  if (!document.querySelector("#testimonials")) return;

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
      1500: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });
}

function doctorsCategories() {
  const tirgger = document.querySelector("#mobile-categories-trigger");

  if (!tirgger) return;

  const menu = document.querySelector("#mobile-categories .mobile-categories");
  const backdrop = document.querySelector(
    "#mobile-categories .mobile-categories-backdrop"
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
}

window.addEventListener("DOMContentLoaded", () => {
  mobileNavigation();
  testimonialsSlider();
  doctorsCategories();
});
