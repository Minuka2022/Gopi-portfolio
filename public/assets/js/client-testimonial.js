// Client Logo Carousel and Testimonial Slider JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Testimonial Slider Functionality
    const testimonialSlides = document.querySelectorAll('.testimonial-slide');
    const testimonialIndicators = document.querySelectorAll('.testimonial-indicator');
    const prevButton = document.getElementById('testimonial-prev');
    const nextButton = document.getElementById('testimonial-next');
    let currentSlide = 0;
    const totalSlides = testimonialSlides.length;
    let slideInterval;
    
    // Exit if no testimonial slides found
    if (totalSlides === 0) return;
    
    // Initialize the first slide and indicator
    function initializeSlider() {
        if (testimonialSlides[0] && testimonialSlides[0].classList) {
            testimonialSlides[0].classList.add('active');
        }
        if (testimonialIndicators[0] && testimonialIndicators[0].classList) {
            testimonialIndicators[0].classList.add('active');
        }
        
        // Only start autoplay if there's more than one slide
        if (totalSlides > 1) {
            startAutoPlay();
        }
    }
    
    // Function to show a specific slide
    function showSlide(index) {
        // Ensure we have valid slides and indicators
        if (!testimonialSlides.length || !testimonialIndicators.length) return;
        
        // Handle index out of bounds
        if (index >= testimonialSlides.length) index = 0;
        if (index < 0) index = testimonialSlides.length - 1;
        
        // Hide all slides
        testimonialSlides.forEach(slide => {
            if (slide && slide.classList) {
                slide.classList.remove('active');
            }
        });
        
        // Update indicators
        testimonialIndicators.forEach(indicator => {
            if (indicator && indicator.classList) {
                indicator.classList.remove('active');
            }
        });
        
        // Show the current slide and update indicator
        if (testimonialSlides[index] && testimonialSlides[index].classList) {
            testimonialSlides[index].classList.add('active');
        }
        
        if (testimonialIndicators[index] && testimonialIndicators[index].classList) {
            testimonialIndicators[index].classList.add('active');
        }
        
        // Update current slide index
        currentSlide = index;
    }
    
    // Auto-play functionality
    function startAutoPlay() {
        stopAutoPlay();
        slideInterval = setInterval(() => {
            showSlide((currentSlide + 1) % totalSlides);
        }, 5000); // Change slide every 5 seconds
    }
    
    function stopAutoPlay() {
        if (slideInterval) {
            clearInterval(slideInterval);
        }
    }
    
    // Pause autoplay when hovering over slides
    const testimonialContainer = document.querySelector('.testimonial-slider');
    if (testimonialContainer) {
        // Pause auto-play on hover
        testimonialContainer.addEventListener('mouseenter', function() {
            stopAutoPlay();
            if (testimonialInterval) {
                clearInterval(testimonialInterval);
            }
        });
        
        // Resume auto-play when mouse leaves
        testimonialContainer.addEventListener('mouseleave', function() {
            startAutoPlay();
            // Also restart the testimonial interval if it was cleared
            if (!testimonialInterval) {
                testimonialInterval = setInterval(function() {
                    let newIndex = currentSlide + 1;
                    if (newIndex >= totalSlides) {
                        newIndex = 0;
                    }
                    showSlide(newIndex);
                }, 8000);
            }
        });
    }
    
    // Event listeners for navigation buttons
    if (prevButton) {
        prevButton.addEventListener('click', function() {
            stopAutoPlay();
            let newIndex = currentSlide - 1;
            showSlide(newIndex);
            startAutoPlay();
        });
    }
    
    if (nextButton) {
        nextButton.addEventListener('click', function() {
            stopAutoPlay();
            let newIndex = currentSlide + 1;
            showSlide(newIndex);
            startAutoPlay();
        });
    }
    
    // Initialize the slider
    initializeSlider();
    
    // Event listeners for indicators
    testimonialIndicators.forEach((indicator, index) => {
        indicator.addEventListener('click', function() {
            showSlide(index);
        });
    });
    
    // Auto-rotate testimonials
    let testimonialInterval = setInterval(function() {
        let newIndex = currentSlide + 1;
        if (newIndex >= totalSlides) {
            newIndex = 0;
        }
        showSlide(newIndex);
    }, 8000);
    
    // Client Logo Carousel Functionality
    const clientLogos = document.querySelectorAll('.client-logo');
    if (clientLogos.length > 0) {
        // Initialize client logos if needed
    }
    
    const logoCarousel = document.querySelector('.logo-carousel');
    if (logoCarousel) {
        const logos = document.querySelectorAll('.logo-slide');
        
        // Clone logos and append to carousel for seamless scrolling
        logos.forEach(logo => {
            const clone = logo.cloneNode(true);
            logoCarousel.appendChild(clone);
        });
    }
});
