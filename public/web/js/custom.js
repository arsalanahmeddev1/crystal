console.log(123);

// mobile menu
let navs = document.querySelector('.primary-nav');
let menuIcon = document.querySelectorAll('.menu-toggle');
console.log(navs, menuIcon);
menuIcon.forEach(function (e) {
  e.addEventListener('click', function () {
    navs.classList.toggle('active');
  });
});

