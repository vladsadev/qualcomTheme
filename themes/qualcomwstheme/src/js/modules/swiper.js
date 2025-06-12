// SWIPER
const swiper = new Swiper(".swiper", {
    // Optional parameters
    loop: true,
    speed: 1000,
    spaceBetween: 30,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    grapCursor: true,
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        // 1024: {
        //   slidesPerView: 3,
        // },
    },
});

document.addEventListener("DOMContentLoaded", function () {
    // Primera instancia de Swiper con desplazamiento continuo
    var swiper1 = new Swiper(".mySwiper1", {
        slidesPerView: "auto", // Para mostrar múltiples slides a la vez
        spaceBetween: 10, // Espaciado entre slides
        loop: true, // Ciclo infinito
        freeMode: true, // Movimiento sin restricciones
        speed: 3000, // Velocidad de desplazamiento
        autoplay: {
            delay: 0, // Sin pausas
            disableOnInteraction: false, // No se detiene al interactuar
        },
    });

    // Segunda instancia de Swiper con desplazamiento continuo
    var swiper2 = new Swiper(".mySwiper2", {
        slidesPerView: "auto",
        centeredSlides:false,
        spaceBetween: 0,
        loop: true,
        freeMode: true,
        speed: 5000, // Puedes variar la velocidad entre sliders
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
    });
});
/*~~~~~~~~~~~~~~~ SHOW SCROLL UP ~~~~~~~~~~~~~~~*/