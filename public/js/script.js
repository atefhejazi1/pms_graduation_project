let navbar = document.querySelector(".navbar");

window.onscroll = function () {
    if (window.scrollY > 150) {
        navbar.classList.add("fixed-top");
        navbar.style.backgroundColor = "#3b3ab9";

    } else {
        navbar.classList.remove("fixed-top");
        navbar.style.backgroundColor = "#2d2c97";
    }
};
