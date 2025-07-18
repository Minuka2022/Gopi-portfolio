// Custom Header JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle functionality for main header
    const menuButton = document.getElementById('dtr-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            mobileMenu.classList.toggle('active');
            menuButton.classList.toggle('active');
            
            // Force repaint to ensure the menu appears
            mobileMenu.style.display = 'none';
            mobileMenu.offsetHeight; // Trigger reflow
            mobileMenu.style.display = mobileMenu.classList.contains('active') ? 'block' : 'none';
        });
    }
    
    // Mobile menu toggle functionality for responsive header
    const respMenuButton = document.getElementById('dtr-resp-menu-button');
    const respHeaderMenu = document.querySelector('.dtr-responsive-header-menu');
    
    if (respMenuButton && respHeaderMenu) {
        respMenuButton.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Clone the mobile menu content if empty
            if (!respHeaderMenu.querySelector('.mobile-nav')) {
                const mobileNavContent = document.querySelector('.mobile-nav');
                if (mobileNavContent) {
                    const clonedNav = mobileNavContent.cloneNode(true);
                    respHeaderMenu.appendChild(clonedNav);
                    
                    // Only add close button if it doesn't exist already
                    if (!respHeaderMenu.querySelector('.mobile-menu-close')) {
                        const closeButton = document.createElement('button');
                        closeButton.className = 'mobile-menu-close';
                        closeButton.innerHTML = '×';
                        closeButton.setAttribute('aria-label', 'Close menu');
                        respHeaderMenu.appendChild(closeButton);
                        
                        // Add click event to close button
                        closeButton.addEventListener('click', function() {
                            respHeaderMenu.classList.remove('active');
                            respMenuButton.classList.remove('active');
                            respHeaderMenu.style.opacity = '0';
                            document.body.style.overflow = ''; // Re-enable scrolling
                            setTimeout(() => {
                                respHeaderMenu.style.display = 'none';
                            }, 300);
                        });
                    }
                    
                    // Add click events to all menu items and set animation delay
                    const menuItems = respHeaderMenu.querySelectorAll('.mobile-nav .menu-item');
                    menuItems.forEach(function(item, index) {
                        // Set animation delay based on index
                        item.style.setProperty('--item-index', index + 1);
                        
                        // Add click event to links
                        const link = item.querySelector('a');
                        if (link) {
                            link.addEventListener('click', function() {
                                respHeaderMenu.classList.remove('active');
                                respMenuButton.classList.remove('active');
                                respHeaderMenu.style.display = 'none';
                            });
                        }
                    });
                }
            }
            
            respHeaderMenu.classList.toggle('active');
            respMenuButton.classList.toggle('active');
            
            // Toggle display with smooth animation and prevent background scrolling
            if (respHeaderMenu.classList.contains('active')) {
                respHeaderMenu.style.display = 'block';
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
                setTimeout(() => {
                    respHeaderMenu.style.opacity = '1';
                }, 10);
            } else {
                respHeaderMenu.style.opacity = '0';
                document.body.style.overflow = ''; // Re-enable scrolling
                setTimeout(() => {
                    respHeaderMenu.style.display = 'none';
                }, 300);
            }
        });
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('#dtr-menu-button') && 
            !event.target.closest('.mobile-menu') && 
            mobileMenu && mobileMenu.classList.contains('active')) {
            mobileMenu.classList.remove('active');
            menuButton.classList.remove('active');
        }
    });
    
    // Add click handlers to mobile menu items to close menu when clicked
    const mobileNavItems = document.querySelectorAll('.mobile-nav .menu-item a');
    mobileNavItems.forEach(function(item) {
        item.addEventListener('click', function() {
            if (mobileMenu && mobileMenu.classList.contains('active')) {
                mobileMenu.classList.remove('active');
                menuButton.classList.remove('active');
            }
        });
    });
    
    // Add active class to current menu item based on URL
    const currentPath = window.location.pathname;
    const menuItems = document.querySelectorAll('.horizontal-nav .menu-item a, .mobile-nav .menu-item a');
    
    menuItems.forEach(function(item) {
        const href = item.getAttribute('href');
        if (href && (href === currentPath || currentPath.includes(href))) {
            item.parentElement.classList.add('active');
        }
    });
    
    // Handle scroll event for fixed header styling
    const header = document.getElementById('dtr-header-global');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.classList.add('header-fixed');
            } else {
                header.classList.remove('header-fixed');
            }
        });
    }
});
