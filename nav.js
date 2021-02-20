const menuIcon = document.querySelector('.dashicons-menu-alt3');
const navMenu = document.querySelector('.navbar ul');
const navLinks = document.querySelectorAll('.navbar a');

allEventListners();

function allEventListners() {
  menuIcon.addEventListener('click', togglerClick);
}

function togglerClick() {
  menuIcon.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
}

function navLinkClick() {
  if(navMenu.classList.contains('open')) {
    navToggler.click();
  }
}