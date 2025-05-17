window.addEventListener("scroll", function () {
  const navNavbar = document.getElementById("navbar-nav");
  navNavbar.classList.toggle("sticky-navbar", window.scrollY > 10);
});
