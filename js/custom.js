const topHeaderMenu = document.querySelector("#top-menu");
const topNavMenu = document.querySelector(".top-nav-menu");
const bottomHeaderMenu = document.querySelector("#bottom-menu2");
const bottomNavMenu = document.querySelector(".bottom-header-menu");

topHeaderMenu.addEventListener("click", () => {
    topNavMenu.classList.toggle("show");
});

bottomHeaderMenu.addEventListener("click", () => {
    bottomNavMenu.classList.toggle("show");
});