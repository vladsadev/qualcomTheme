/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/modules/Search.js":
/*!*******************************!*\
  !*** ./src/modules/Search.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

class Search {
  //
  constructor() {
    this.openButton = jquery__WEBPACK_IMPORTED_MODULE_0___default()(".js-search-trigger");
    this.closeButton = jquery__WEBPACK_IMPORTED_MODULE_0___default()("#search-overlay__close");
    console.log(this.closeButton);
    this.searchOverlay = jquery__WEBPACK_IMPORTED_MODULE_0___default()(".search-overlay");
    this.events(); //events listener
  }

  //### Events listenner ###
  events() {
    this.openButton.on("click", this.openOverlay.bind(this));
    this.closeButton.on('click', this.closeOverlay.bind(this));
  }

  // ### Methods handlers
  openOverlay() {
    this.searchOverlay.addClass("search-overlay--active");
  }
  closeOverlay() {
    // console.log("ok I'll do")
    this.searchOverlay.removeClass("search-overlay--active");
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Search);

/***/ }),

/***/ "./src/modules/mobileMenu.js":
/*!***********************************!*\
  !*** ./src/modules/mobileMenu.js ***!
  \***********************************/
/***/ (() => {

/*~~~~~~~~~~~~~~~ TOGGLE BUTTON ~~~~~~~~~~~~~~~*/
const navMenu = document.getElementById("nav-menu");
const navLink = document.querySelectorAll(".nav-link");
const hamburgerIcon = document.getElementById("hamburger-icon");
const closeIcon = document.getElementById("close-icon");
hamburgerIcon.addEventListener("click", () => {
  console.log(navMenu.classList.toggle("left-[0]"));
  console.log(navMenu.classList);
});
closeIcon.addEventListener("click", () => {
  navMenu.classList.toggle("left-[0]");
  console.log(navMenu.classList);
});
navLink.forEach(link => {
  link.addEventListener("click", () => {
    navMenu.classList.toggle("left-[0]");
  });
});

/***/ }),

/***/ "./src/modules/scrollAnimation.js":
/*!****************************************!*\
  !*** ./src/modules/scrollAnimation.js ***!
  \****************************************/
/***/ (() => {

/*~~~~~~~~~~~~~~~ SCROLL REVEAL ANIMATION ~~~~~~~~~~~~~~~*/
const scrollers = document.querySelectorAll(".scroller");
if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
  // console.log("El usuario prefiere reducir el movimiento.");
  addAnimation();
}
function addAnimation() {
  // console.log("ok");
  scrollers.forEach(scroller => {
    scroller.setAttribute("data-animated", true);
    const scrollerInner = scroller.querySelector(".scroller__inner");
    // const scrollerContent = scrollerInner.children;
    const scrollerContent = Array.from(scrollerInner.children);

    // console.log(scrollerContent);

    // const duplicatedItem = null;
    scrollerContent.forEach(item => {
      const duplicatedItem = item.cloneNode(true);
      duplicatedItem.setAttribute("aria-hidden", true);
      scrollerInner.appendChild(duplicatedItem);
    });
  });
}

/***/ }),

/***/ "./src/modules/swiper.js":
/*!*******************************!*\
  !*** ./src/modules/swiper.js ***!
  \*******************************/
/***/ (() => {

// SWIPER
const swiper = new Swiper(".swiper", {
  // Optional parameters
  loop: true,
  speed: 1000,
  spaceBetween: 30,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  grapCursor: true,
  breakpoints: {
    640: {
      slidesPerView: 1
    },
    768: {
      slidesPerView: 2
    }
    // 1024: {
    //   slidesPerView: 3,
    // },
  }
});
document.addEventListener("DOMContentLoaded", function () {
  // Primera instancia de Swiper con desplazamiento continuo
  var swiper1 = new Swiper(".mySwiper1", {
    slidesPerView: "auto",
    // Para mostrar múltiples slides a la vez
    spaceBetween: 10,
    // Espaciado entre slides
    loop: true,
    // Ciclo infinito
    freeMode: true,
    // Movimiento sin restricciones
    speed: 3000,
    // Velocidad de desplazamiento
    autoplay: {
      delay: 0,
      // Sin pausas
      disableOnInteraction: false // No se detiene al interactuar
    }
  });

  // Segunda instancia de Swiper con desplazamiento continuo
  var swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: "auto",
    centeredSlides: false,
    spaceBetween: 0,
    loop: true,
    freeMode: true,
    speed: 5000,
    // Puedes variar la velocidad entre sliders
    autoplay: {
      delay: 0,
      disableOnInteraction: false
    }
  });
});
/*~~~~~~~~~~~~~~~ SHOW SCROLL UP ~~~~~~~~~~~~~~~*/

/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/***/ ((module) => {

"use strict";
module.exports = window["jQuery"];

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be in strict mode.
(() => {
"use strict";
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_mobileMenu__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/mobileMenu */ "./src/modules/mobileMenu.js");
/* harmony import */ var _modules_mobileMenu__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_modules_mobileMenu__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _modules_swiper__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/swiper */ "./src/modules/swiper.js");
/* harmony import */ var _modules_swiper__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_modules_swiper__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _modules_scrollAnimation__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/scrollAnimation */ "./src/modules/scrollAnimation.js");
/* harmony import */ var _modules_scrollAnimation__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_modules_scrollAnimation__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _modules_Search__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/Search */ "./src/modules/Search.js");




// Classes


//Instancias
const search = new _modules_Search__WEBPACK_IMPORTED_MODULE_3__["default"]();

// const searchIcon = document.getElementById('search-icon-trigger')
// const searcOverlay = document.getElementById('search-overlay')
// console.log(searcOverlay)
// searchIcon.addEventListener('click',()=>{
//
//     searcOverlay.classList.toggle('search-overlay--active')
//     document.body.classList.toggle('overflow-hidden')
// })
})();

/******/ })()
;
//# sourceMappingURL=index.js.map