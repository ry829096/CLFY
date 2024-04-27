
document.addEventListener('DOMContentLoaded', function() {
    // Your JavaScript code here

document.querySelector('.menu-toggle').addEventListener('click', function(event) {
    console.log('Menu toggled');
    event.stopPropagation(); // Prevents the event from bubbling up to the window
    document.querySelector('.sidebar-card').classList.toggle('show');
});

// Close the sidebar card when clicking outside of it
window.addEventListener('click', function(event) {
    if (!event.target.closest('.sidebar-card') && !event.target.closest('.menu-toggle')) {
        console.log('Clicked outside sidebar card');
        document.querySelector('.sidebar-card').classList.remove('show');
    }
});
});

// banner part 
document.addEventListener('DOMContentLoaded', function() {
    let currentIndex = 0;
    const slides = document.querySelectorAll('.banner-img');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.transform = `translateX(${(i - index) * 100}%)`;
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        showSlide(currentIndex);
    }

    setInterval(nextSlide, 3000); // Change slide every 3 seconds (adjust as needed)
});
document.addEventListener("DOMContentLoaded", function() {
    const accordionHeaders = document.querySelectorAll('.accordion-header');

    accordionHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const content = this.nextElementSibling;
            content.classList.toggle('show'); // Toggle visibility of content
        });
    });
});
