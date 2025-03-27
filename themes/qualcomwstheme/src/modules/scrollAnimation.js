/*~~~~~~~~~~~~~~~ SCROLL REVEAL ANIMATION ~~~~~~~~~~~~~~~*/
const scrollers = document.querySelectorAll(".scroller");

if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    // console.log("El usuario prefiere reducir el movimiento.");
    addAnimation();
}

function addAnimation() {
    // console.log("ok");
    scrollers.forEach((scroller) => {
        scroller.setAttribute("data-animated", true);

        const scrollerInner = scroller.querySelector(".scroller__inner");
        // const scrollerContent = scrollerInner.children;
        const scrollerContent = Array.from(scrollerInner.children);

        // console.log(scrollerContent);

        // const duplicatedItem = null;
        scrollerContent.forEach((item) => {
            const duplicatedItem = item.cloneNode(true);
            duplicatedItem.setAttribute("aria-hidden", true);
            scrollerInner.appendChild(duplicatedItem);
        });
    });
}
