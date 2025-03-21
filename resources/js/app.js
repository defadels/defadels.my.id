/* Template Name: Natio - Bootstrap 5 Personal Landing Template
   Author: Zoyothemes
   Email: zoyothemes@gmail.com
   Version: 1.0.0
   Website: https://zoyothemes.com
   File Description: Main Css file of the template
*/

// window.addEventListener('load',   fn , false )
import 'bootstrap/dist/js/bootstrap.min.js'
import Gumshoe from 'gumshoejs';

//Menu
function windowScroll() {
  const navbar = document.getElementById("navbar");
  if (
    document.body.scrollTop >= 50 ||
    document.documentElement.scrollTop >= 50
  ) {
    navbar.classList.add("nav-sticky");
  } else {
    navbar.classList.remove("nav-sticky");
  }
}
window.addEventListener("scroll", (ev) => {
  ev.preventDefault();
  windowScroll();
});

// Navbar Active Class
var spy = new Gumshoe('#navbar-navlist a', {
  // Active classes
  // navClass: 'active', // applied to the nav list item
  // contentClass: 'active', // applied to the content
  offset: 80
});

// Type JS
var type_list = document.querySelector('#typed_list');

if (type_list) {
  var aboutsocial = new Typed('#typed', {
    stringsElement: '#typed_list',
    typeSpeed: 170,
    backSpeed: 30,
    cursorChar: '|',
    loop: true
  });
};

// Back To Top
window.onscroll = function () {
  scrollFunction();
};

var backToTop = document.getElementById("back-to-top");

function scrollFunction() {
  if (backToTop != null) {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
      backToTop.style.display = "block";
    } else {
      backToTop.style.display = "none";
    }
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

if (backToTop) {
  backToTop.addEventListener('click', topFunction)
}