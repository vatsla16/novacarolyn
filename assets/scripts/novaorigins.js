const hamburger = document.querySelector(".hamburger");
const hamburgerOpen = document.querySelector(".open-menu");
const hamburgerClose = document.querySelector(".close-menu");
const menu = document.querySelector(".header-mobile .menu");
const menuItem = document.querySelectorAll(".header-mobile .menu-item");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    menu.classList.toggle("active");
})

menuItem.forEach(n => n.addEventListener("click", () => {
    hamburger.classList.add("active");
    menu.classList.remove("active");
}));
