// Inicialización del infinite scroller
document.addEventListener('DOMContentLoaded', function() {
    const scrollers = document.querySelectorAll('.scroller');

    // Configurar cada scroller
    scrollers.forEach(scroller => {
        // Solo animar si el usuario no prefiere movimiento reducido
        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            scroller.setAttribute('data-animated', 'true');
        }

        // Duplicar contenido para loop suave
        const scrollerInner = scroller.querySelector('.scroller__inner');
        const scrollerContent = Array.from(scrollerInner.children);

        // Duplicar todos los elementos para crear el loop infinito
        scrollerContent.forEach(item => {
            const duplicatedItem = item.cloneNode(true);
            scrollerInner.appendChild(duplicatedItem);
        });
    });
});

// Optimización de rendimiento - pausar cuando no está visible
const observerOptions = {
    root: null,
    rootMargin: '50px',
    threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        const scroller = entry.target;
        const scrollerInner = scroller.querySelector('.scroller__inner');

        if (entry.isIntersecting) {
            // Reanudar animación cuando está visible
            scrollerInner.style.animationPlayState = 'running';
        } else {
            // Pausar animación cuando no está visible
            scrollerInner.style.animationPlayState = 'paused';
        }
    });
}, observerOptions);

// Observar todos los scrollers para optimizar rendimiento
document.querySelectorAll('.scroller').forEach(scroller => {
    observer.observe(scroller);
});

// /*~~~~~~~~~~~~~~~ SCROLL REVEAL ANIMATION ~~~~~~~~~~~~~~~*/
// const scrollers = document.querySelectorAll(".scroller");
//
// if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
//     // console.log("El usuario prefiere reducir el movimiento.");
//     addAnimation();
// }
//
// function addAnimation() {
//     // console.log("ok");
//     scrollers.forEach((scroller) => {
//         scroller.setAttribute("data-animated", true);
//
//         const scrollerInner = scroller.querySelector(".scroller__inner");
//         // const scrollerContent = scrollerInner.children;
//         const scrollerContent = Array.from(scrollerInner.children);
//
//
//         // const duplicatedItem = null;
//         scrollerContent.forEach((item) => {
//             const duplicatedItem = item.cloneNode(true);
//             duplicatedItem.setAttribute("aria-hidden", true);
//             scrollerInner.appendChild(duplicatedItem);
//         });
//     });
// }
