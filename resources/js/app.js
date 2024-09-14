import './bootstrap';
import 'flowbite';

// JavaScript to apply padding when scrolling via anchor link
// document.querySelectorAll('nav a').forEach(anchor => {
//   anchor.addEventListener('click', function (e) {
//     e.preventDefault(); // Prevent default anchor behavior
//     const targetId = this.getAttribute('href').substring(1); // Get target section ID
//     const targetSection = document.getElementById(targetId); // Get the target section element

//     // Apply padding-top dynamically
//     targetSection.classList.add('pt-20');
    
//     // Smooth scroll to the section
//     targetSection.scrollIntoView({ behavior: 'smooth' });

//     // Optionally, remove the padding after a timeout (delay based on scroll time)
//     // setTimeout(() => {
//     //   targetSection.classList.remove('pt-20');
//     // }, 1000); // Adjust timeout based on expected scroll duration
//   });
// });