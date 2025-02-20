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

document.addEventListener("DOMContentLoaded", function () {
  Fancybox.bind("[data-fancybox='gallery']", {
      on: {
          reveal: (fancybox, slide) => {
              // Hide the thumbnail image when Fancybox opens
              let thumbnail = slide.triggerEl.querySelector(".video-thumbnail");
              if (thumbnail) {
                  thumbnail.style.opacity = "0";
                  thumbnail.style.transition = "opacity 0.3s ease-in-out";
              }
          },
          close: () => {
              // Show the thumbnail image when Fancybox closes
              document.querySelectorAll(".video-thumbnail").forEach(thumbnail => {
                  thumbnail.style.opacity = "1";
              });
          }
      }
  });
});
