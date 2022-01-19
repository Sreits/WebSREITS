const navbar = document.querySelector("#navbar");

window.addEventListener("scroll", function () {
  const currentWindow = window.scrollY;

  if (currentWindow > 0) {
    navbar.classList.add("navbar-scrolled");
  }
  if (currentWindow == 0) {
    navbar.classList.remove("navbar-scrolled");
  }
});
