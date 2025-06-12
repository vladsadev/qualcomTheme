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
navLink.forEach((link) => {
    link.addEventListener("click", () => {
        navMenu.classList.toggle("left-[0]");
    });
});