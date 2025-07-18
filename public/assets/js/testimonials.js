document.addEventListener('DOMContentLoaded', function() {
    // Initialize Testimonials Carousel
    initTestimonialsCarousel();
    
    // Initialize Trusted Logos Carousel
    initTrustedLogosCarousel();
});

function initTestimonialsCarousel() {
    const testimonialItems = document.querySelectorAll('.testimonial-item');
    const prevBtn = document.querySelector('.testimonial-prev');
    const nextBtn = document.querySelector('.testimonial-next');
    let currentIndex = 0;
    
    if (!testimonialItems.length) return;
    
    // Show initial testimonials
    updateTestimonialDisplay();
    
    // Previous button click
    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : testimonialItems.length - 1;
            updateTestimonialDisplay();
        });
    }
    
    // Next button click
    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            currentIndex = (currentIndex < testimonialItems.length - 1) ? currentIndex + 1 : 0;
            updateTestimonialDisplay();
        });
    }
    
    // Auto slide
    setInterval(function() {
        currentIndex = (currentIndex < testimonialItems.length - 1) ? currentIndex + 1 : 0;
        updateTestimonialDisplay();
    }, 5000);
    
    function updateTestimonialDisplay() {
        testimonialItems.forEach((item, index) => {
            if (window.innerWidth >= 992) {
                // On desktop, show 3 items
                const visibleIndices = [
                    currentIndex,
                    (currentIndex + 1) % testimonialItems.length,
                    (currentIndex + 2) % testimonialItems.length
                ];
                
                if (visibleIndices.includes(index)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            } else if (window.innerWidth >= 768) {
                // On tablet, show 2 items
                const visibleIndices = [
                    currentIndex,
                    (currentIndex + 1) % testimonialItems.length
                ];
                
                if (visibleIndices.includes(index)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            } else {
                // On mobile, show 1 item
                item.style.display = index === currentIndex ? 'block' : 'none';
            }
        });
    }
    
    // Update display on window resize
    window.addEventListener('resize', updateTestimonialDisplay);
}

function initTrustedLogosCarousel() {
    const logoContainer = document.querySelector('.trusted-logos-container');
    const logoItems = document.querySelectorAll('.trusted-logo-item');
    
    if (!logoContainer || !logoItems.length) return;
    
    // Clone logos for infinite loop
    logoItems.forEach(item => {
        const clone = item.cloneNode(true);
        logoContainer.appendChild(clone);
    });
    
    // Set animation
    logoContainer.style.animation = `scrollLogos ${logoItems.length * 5}s linear infinite`;
    
    // Pause animation on hover
    logoContainer.addEventListener('mouseenter', () => {
        logoContainer.style.animationPlayState = 'paused';
    });
    
    logoContainer.addEventListener('mouseleave', () => {
        logoContainer.style.animationPlayState = 'running';
    });
}
