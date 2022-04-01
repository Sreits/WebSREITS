window.addEventListener("scroll", () => {
  const navbar = document.querySelector("#navbar");
  const currentWindow = window.scrollY;

  if (currentWindow > 0) {
    navbar.classList.add("navbar-scrolled");
  }
  if (currentWindow == 0) {
    navbar.classList.remove("navbar-scrolled");
  }
});