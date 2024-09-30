import './bootstrap';
import 'flowbite';
import Swal from 'sweetalert2';

window.addEventListener('show-swal', function(event) 
{
  Swal.fire({
      title: event.detail.title,
      text: event.detail.text,
      icon: event.detail.icon,
      timer: 2000,
      timerProgressBar: true,
      showConfirmButton: false
  });
});

window.addEventListener('open-link-tab', function(event) 
{
  window.open(event.detail.url, '_blank')
});


document.addEventListener('DOMContentLoaded', function () {
  const carouselElement = document.getElementById('indicators-carousel');
  let startX = 0;
  let endX = 0;

  // Detect when the user starts touching the screen
  carouselElement.addEventListener('touchstart', function (e) {
    startX = e.touches[0].clientX;
  });

  // Detect when the user moves their finger
  carouselElement.addEventListener('touchmove', function (e) {
    endX = e.touches[0].clientX;
  });

  // Detect when the user lifts their finger
  carouselElement.addEventListener('touchend', function () {
    const diffX = startX - endX;

    // If swipe is significant, navigate the carousel
    if (Math.abs(diffX) > 50) {
      if (diffX > 0) {
        // Swipe left, show the next slide
        document.querySelector('[data-carousel-next]').click();
      } else {
        // Swipe right, show the previous slide
        document.querySelector('[data-carousel-prev]').click();
      }
    }
  });
});