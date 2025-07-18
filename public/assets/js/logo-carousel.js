/**
 * Logo Carousel Enhancement Script
 * This script ensures the trusted logos carousel animation is smooth and seamless
 */
document.addEventListener('DOMContentLoaded', function() {
    // Get the carousel element
    const carousel = document.querySelector('.logo-carousel.animate-carousel');
    
    if (carousel) {
        // Get all logo slides (original ones only, not clones)
        const originalSlides = Array.from(carousel.querySelectorAll('.logo-slide:not(.clone)'));
        const logoCount = originalSlides.length;
        
        if (logoCount > 1) {
            // Set the CSS variable for the animation
            carousel.style.setProperty('--logo-count', logoCount);
            
            // Calculate the total width of all original logos
            const slideWidth = 200; // Width of each slide in pixels (from CSS)
            const totalWidth = slideWidth * logoCount;
            
            // Set the animation duration based on the number of logos
            // More logos = slightly longer animation for smooth effect
            const baseDuration = 15; // Base duration in seconds
            const durationPerLogo = 5; // Additional seconds per logo
            const animationDuration = baseDuration + (logoCount * durationPerLogo);
            
            // Apply the calculated animation duration
            carousel.style.animationDuration = `${animationDuration}s`;
            
            // Ensure the carousel has enough width for the animation
            carousel.style.width = `${totalWidth * 2}px`; // Double width to accommodate clones
            
            console.log(`Logo carousel initialized with ${logoCount} logos, ${animationDuration}s animation duration`);
        } else {
            console.log('Not enough logos for animation');
        }
    }
});
