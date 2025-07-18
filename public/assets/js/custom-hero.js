document.addEventListener('DOMContentLoaded', function() {
    // Hero section carousel functionality
    const slides = document.querySelectorAll('.carousel-slide');
    const indicators = document.querySelectorAll('.indicator');
    let currentSlide = 0;
    let slideInterval;

    // Check if hero slider exists on the page
    if (slides.length === 0) return;

    // Function to show a specific slide
    function showSlide(index) {
        // Ensure we have valid slides and indicators
        if (!slides.length || !indicators.length) return;
        
        // Make sure index is within bounds
        if (index < 0 || index >= slides.length) {
            index = 0;
        }

        // Hide all slides
        slides.forEach(slide => {
            if (slide && slide.classList) {
                slide.classList.remove('active');
            }
        });
        
        // Remove active class from all indicators
        indicators.forEach(indicator => {
            if (indicator && indicator.classList) {
                indicator.classList.remove('active');
            }
        });
        
        // Show the selected slide and activate its indicator
        if (slides[index] && slides[index].classList) {
            slides[index].classList.add('active');
        }
        
        if (indicators[index] && indicators[index].classList) {
            indicators[index].classList.add('active');
        }
        
        // Update current slide index
        currentSlide = index;
    }
    
    // Function to show the next slide
    function nextSlide() {
        let next = currentSlide + 1;
        if (next >= slides.length) {
            next = 0;
        }
        showSlide(next);
    }
    
    // Start automatic slideshow
    function startSlideshow() {
        if (slides.length > 1) { // Only start slideshow if there's more than one slide
            clearInterval(slideInterval); // Clear any existing interval
            slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
        }
    }
    
    // Initialize the first slide
    if (slides.length > 0) {
        showSlide(0);
        startSlideshow();
    }
    
    // Stop slideshow on hover
    const carouselContainer = document.querySelector('.carousel-container');
    if (carouselContainer) {
        carouselContainer.addEventListener('mouseenter', function() {
            if (slideInterval) {
                clearInterval(slideInterval);
            }
        });
        
        carouselContainer.addEventListener('mouseleave', function() {
            if (slides.length > 1) { // Only restart if there's more than one slide
                startSlideshow();
            }
        });
    }
    
    // Add click event listeners to indicators
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', function() {
            showSlide(index);
            clearInterval(slideInterval);
            startSlideshow();
        });
    });
    
    // Start the slideshow
    startSlideshow();
});
