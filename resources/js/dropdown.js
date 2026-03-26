const dropdownElement = document.getElementById("dropdown-js");
const menuElement = document.getElementById("menu-js");
const closeElement = document.getElementById("close-js");

dropdownElement.addEventListener("click", () => {
    menuElement.classList.toggle("hidden");
    closeElement.classList.toggle("hidden");
});

closeElement.addEventListener("click", () => {
    menuElement.classList.add("hidden");
    closeElement.classList.add("hidden");
});
