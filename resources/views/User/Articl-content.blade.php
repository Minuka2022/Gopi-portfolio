<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Article - {{ $article->title }}</title>
    <meta name="author" content="Gopi Muthumaran">
    <meta name="description" content="Article details">
    <meta name="keywords" content="portfolio, personal, article">

   <!-- FAVICON -->
    <link rel="icon" href="{{ secure_asset('assets/images/icons/favicon.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ secure_asset('assets/images/icons/cropped-favicon-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ secure_asset('assets/images/icons/cropped-favicon-180x180.png') }}" />
    <meta name="msapplication-TileImage" content="{{ secure_asset('assets/images/icons/cropped-favicon-270x270.png') }}" />

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ secure_asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/fonts/iconfont.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/counter.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/custom-header.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/custom-hero.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/mobile-fixes.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/client-testimonial.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/about-section.css') }}">

    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Swiper.js Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    
    <!-- SlickNav CSS for Mobile Menu -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css">
    
    <!-- Additional Mobile Menu Styles -->
    <style>
        /* Ensure mobile menu is visible when toggled */
        @media (max-width: 767px) {
            .mobile-menu-toggle {
                display: block !important;
            }
            
            .main-navigation .horizontal-nav {
                display: none;
            }
            
            /* Hamburger active state */
            #dtr-menu-button.is-active .dtr-hamburger-lines {
                background-color: transparent;
            }
            
            #dtr-menu-button.is-active .dtr-hamburger-lines:before {
                transform: rotate(45deg);
                top: 0;
            }
            
            #dtr-menu-button.is-active .dtr-hamburger-lines:after {
                transform: rotate(-45deg);
                top: 0;
            }
            
            /* Mobile menu positioning and visibility */
            .mobile-menu {
                display: none;
                position: absolute;
                top: 75px;
                left: 0;
                width: 100%;
                background-color: #002b54;
                padding: 10px 0;
                z-index: 1000;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            }
            
            /* SlickNav specific styles */
            .slicknav_menu {
                display: block;
                background: transparent;
                padding: 0;
                position: relative;
            }
            
            .slicknav_btn {
                margin: 0;
                text-decoration: none;
                background-color: transparent;
                float: right;
                position: relative;
                z-index: 9999;
            }
            
            /* Style the hamburger icon */
            .dtr-hamburger {
                cursor: pointer;
                padding: 10px;
                display: inline-block;
            }
            
            .dtr-hamburger.is-active .dtr-hamburger-lines {
                background-color: transparent;
            }
            
            .dtr-hamburger-lines {
                display: block;
                width: 25px;
                height: 3px;
                background-color: #fff;
                position: relative;
                transition: all 0.3s ease;
            }
            
            .dtr-hamburger-lines:before,
            .dtr-hamburger-lines:after {
                content: '';
                display: block;
                width: 100%;
                height: 3px;
                background-color: #fff;
                position: absolute;
                left: 0;
                transition: all 0.3s ease;
            }
            
            .dtr-hamburger-lines:before {
                top: -8px;
            }
            
            .dtr-hamburger-lines:after {
                bottom: -8px;
            }
            
            /* Active state for hamburger */
            .dtr-hamburger.is-active .dtr-hamburger-lines:before {
                transform: rotate(45deg);
                top: 0;
            }
            
            .dtr-hamburger.is-active .dtr-hamburger-lines:after {
                transform: rotate(-45deg);
                bottom: 0;
            }
            
            .slicknav_nav {
                background-color: #002b54;
                margin: 0;
                padding: 10px 0;
                font-size: 16px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                z-index: 9999;
                width: 100%;
                position: absolute;
                left: 0;
                top: 100%;
                display: none; /* Hidden by default, shown when active */
            }
            
            .slicknav_nav.slicknav_hidden {
                display: none;
            }
            
            .slicknav_nav.slicknav_open {
                display: block;
            }
            
            .slicknav_nav a {
                color: white;
                padding: 10px 20px;
                text-decoration: none;
                display: block;
            }
            
            .slicknav_nav a:hover {
                background-color: rgba(255, 255, 255, 0.1);
                color: #ff6b6b;
            }
            
            /* Hide the original menu in mobile view */
            .d-none {
                display: none !important;
            }
            
            /* Make sure the SlickNav menu is visible when toggled */
            .slicknav_open .slicknav_nav {
                display: block !important;
            }
        }
        
        @media (max-width: 991px) {
            /* Mobile menu styles */
            .dtr-hamburger {
                cursor: pointer;
                padding: 10px;
                display: inline-block;
                z-index: 9999;
                position: relative;
            }
            
            .dtr-hamburger.is-active .dtr-hamburger-lines {
                background-color: transparent;
            }
            
            .dtr-hamburger-lines {
                display: block;
                width: 25px;
                height: 3px;
                background-color: #fff;
                position: relative;
                transition: all 0.3s ease;
            }
            
            .dtr-hamburger-lines:before,
            .dtr-hamburger-lines:after {
                content: '';
                display: block;
                width: 100%;
                height: 3px;
                background-color: #fff;
                position: absolute;
                left: 0;
                transition: all 0.3s ease;
            }
            
            .dtr-hamburger-lines:before {
                top: -8px;
            }
            
            .dtr-hamburger-lines:after {
                bottom: -8px;
            }
            
            /* Active state for hamburger */
            .dtr-hamburger.is-active .dtr-hamburger-lines:before {
                transform: rotate(45deg);
                top: 0;
            }
            
            .dtr-hamburger.is-active .dtr-hamburger-lines:after {
                transform: rotate(-45deg);
                bottom: 0;
            }
            
            /* Mobile navigation container */
            .mobile-nav-container {
                background-color: #002b54;
                position: absolute;
                width: 100%;
                left: 0;
                top: 100%;
                z-index: 9998;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            }
            
            .mobile-nav-list {
                list-style: none;
                padding: 0;
                margin: 0;
            }
            
            .mobile-nav-list li {
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }
            
            .mobile-nav-list li:last-child {
                border-bottom: none;
            }
            
            .mobile-nav-list a {
                color: white;
                padding: 15px 20px;
                display: block;
                text-decoration: none;
                font-size: 16px;
                transition: all 0.3s ease;
            }
            
            .mobile-nav-list a:hover {
                background-color: rgba(255, 255, 255, 0.1);
                color: #ff6b6b;
            }
            
            /* Hide the original menu in mobile view */
            .d-none {
                display: none !important;
            }
        }
    </style>
    
    <style>
        /* Page Title Styling */
        .page-title-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .page-title {
            font-size: 32px;
            font-weight: 700;
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        .back-to-articles-btn {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            border-radius: 4px;
            transition: background-color 0.2s ease;
        }
        
        .back-to-articles-btn:hover {
            background-color: #218838;
            color: white;
            text-decoration: none;
        }
        
        /* Article Meta Info */
        .article-meta {
            margin-bottom: 30px;
            color: #666;
            font-size: 16px;
        }
        
        .article-date {
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        
        /* Section Title Styling */
        .section-title-container {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            position: relative;
        }
        
        .pattern-left {
            margin-right: 15px;
        }
        
        .section-title h2 {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        /* Article Gallery Styling */
        .article-gallery {
            margin-bottom: 40px;
            width: 100%;
            max-width: 100%;
            position: relative;
        }
        
        .carousel-container {
            margin-bottom: 30px;
            overflow: hidden;
        }
        
        .swiper {
            width: 100%;
        }
        
        .swiper-slide img {
            width: 100%;
            height: auto;
            object-fit: cover;
            display: block;
        }
        
        .gallery-image {
            aspect-ratio: 16/9;
            object-fit: cover;
        }
        
        .featured-image {
            margin-bottom: 30px;
            overflow: hidden;
        }
        
        .featured-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        /* Article Content Styling */
        .article-content {
            color: #333;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 60px;
        }
        
        .article-content p {
            margin-bottom: 20px;
        }
        
        /* Fix for Swiper Navigation */
        .swiper-button-next,
        .swiper-button-prev {
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 18px;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .page-title-container {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .page-title {
                font-size: 28px;
            }
            
            .pattern-left {
                display: none;
            }
            
            .section-title h2 {
                font-size: 20px;
            }
            
            .article-detail-section {
                padding-top: 100px;
            }
        }
    </style>
</head>

<body>
    <div id="dtr-wrapper" class="clearfix">
        <!-- Small Devices Header starts -->
        <div id="dtr-responsive-header" class="mobile-header">
            <div class="container">
                <!-- logo -->
                <a class="dtr-resp-logo" href="{{ route('frontend-Home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="88" height="25"></a>
                <!-- menu button -->
                <button id="dtr-resp-menu-button" class="dtr-hamburger" type="button" aria-label="Menu Button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
            </div>
            
            <!-- Direct Mobile Menu (No SlickNav) -->
            <div class="mobile-nav-container" style="display: none;">
                <ul class="mobile-nav-list">
                    <li><a href="{{ route('frontend-Home') }}#home">Home</a></li>
                    <li><a href="{{ route('frontend-Home') }}#aboutme">About</a></li>
                    <li><a href="{{ route('frontend-Home') }}#acheivment">Achievements</a></li>
                    <li><a href="{{ route('frontend-gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('frontend-Home') }}#client">Clients</a></li>
                    <li><a href="{{ route('frontend-Home') }}#testimonials">Testimonials</a></li>
                    <li><a href="{{ route('frontend-event') }}">Events</a></li>
                    <li><a href="{{ route('frontend-article') }}">Articles</a></li>
                    <li><a href="{{ route('frontend-Home') }}#Contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <!-- Small Devices Header ends -->

        <!-- Header starts -->
        @include('partials.header')
        <!-- Header ends -->

        <!-- Page content starts -->
        <section class="article-detail-section" style="background-color:white; padding-top: 120px;">
            <div class="container">
                <!-- Main Page Title -->
                <div class="page-title-container">
                    <h1 class="page-title">{{ $article->title }}</h1>
                    <a href="{{ route('frontend-article') }}" class="back-to-articles-btn">BACK TO ARTICLES</a>
                </div>
                
                <!-- Article Meta Info -->
                <div class="article-meta">
                    <span class="article-date"><i class="fas fa-calendar-alt"></i> {{ $article->created_at->format('F d, Y') }}</span>
                </div>
                
                <!-- Section Title with SVG Pattern -->
                <div class="section-title-container">
                    <div class="pattern-left">
                        <svg width="30" height="100" viewBox="0 0 30 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="5" cy="5" r="3" fill="#FF8A00"/>
                            <circle cx="5" cy="15" r="3" fill="#FF8A00"/>
                            <circle cx="5" cy="25" r="3" fill="#FF8A00"/>
                            <circle cx="5" cy="35" r="3" fill="#FF8A00"/>
                            <circle cx="5" cy="45" r="3" fill="#FF8A00"/>
                            <circle cx="5" cy="55" r="3" fill="#FF8A00"/>
                            <circle cx="5" cy="65" r="3" fill="#FF8A00"/>
                            <circle cx="5" cy="75" r="3" fill="#FF8A00"/>
                            <circle cx="5" cy="85" r="3" fill="#FF8A00"/>
                            <circle cx="5" cy="95" r="3" fill="#FF8A00"/>
                            <circle cx="15" cy="5" r="3" fill="#FF8A00"/>
                            <circle cx="15" cy="15" r="3" fill="#FF8A00"/>
                            <circle cx="15" cy="25" r="3" fill="#FF8A00"/>
                            <circle cx="15" cy="35" r="3" fill="#FF8A00"/>
                            <circle cx="15" cy="45" r="3" fill="#FF8A00"/>
                            <circle cx="15" cy="55" r="3" fill="#FF8A00"/>
                            <circle cx="15" cy="65" r="3" fill="#FF8A00"/>
                            <circle cx="15" cy="75" r="3" fill="#FF8A00"/>
                            <circle cx="15" cy="85" r="3" fill="#FF8A00"/>
                            <circle cx="15" cy="95" r="3" fill="#FF8A00"/>
                            <circle cx="25" cy="5" r="3" fill="#FF8A00"/>
                            <circle cx="25" cy="15" r="3" fill="#FF8A00"/>
                            <circle cx="25" cy="25" r="3" fill="#FF8A00"/>
                            <circle cx="25" cy="35" r="3" fill="#FF8A00"/>
                            <circle cx="25" cy="45" r="3" fill="#FF8A00"/>
                            <circle cx="25" cy="55" r="3" fill="#FF8A00"/>
                            <circle cx="25" cy="65" r="3" fill="#FF8A00"/>
                            <circle cx="25" cy="75" r="3" fill="#FF8A00"/>
                            <circle cx="25" cy="85" r="3" fill="#FF8A00"/>
                            <circle cx="25" cy="95" r="3" fill="#FF8A00"/>
                        </svg>
                    </div>
                    <div class="section-title">
                        <h2>Article Details</h2>
                    </div>
                </div>
                
                <!-- Article Image Gallery -->
                <div class="article-gallery">
                    @if($article->images->isNotEmpty())
                    <div class="carousel-container">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @foreach ($article->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $image->image) }}" alt="Article Image" class="gallery-image">
                                </div>
                                @endforeach
                            </div>
                            <!-- Navigation -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    @elseif($article->featured_image)
                    <div class="featured-image">
                        <img src="{{ asset('storage/' . $article->featured_image) }}" alt="Featured Image">
                    </div>
                    @endif
                </div>
                
                <!-- Article Content -->
                <div class="article-content">
                    {!! implode('</p><p>', array_map('trim', explode("\n\n", $article->content))) !!}
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        @include('partials.footer')
        
        <!-- Scroll to top -->
        <a id="take-to-top" href="#" class="active" aria-label="Scroll To Top"></a>
    </div>
    <!-- #dtr-wrapper ends -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- jQuery Validation Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    
    <!-- WOW JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    
    <!-- SlickNav JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js"></script>
    
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/animate.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Simple toggle for mobile menu
            $('#dtr-resp-menu-button').on('click', function(e) {
                e.preventDefault();
                
                // Toggle menu visibility and button active state
                $('.mobile-nav-container').toggle();
                $(this).toggleClass('is-active');
            });
            
            // Mobile menu toggle for the standard header
            $('#dtr-menu-button').on('click', function(e) {
                e.preventDefault();
                $('.mobile-menu').slideToggle(300);
                $(this).toggleClass('is-active');
            });
            
            // Close mobile menu when clicking outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('#dtr-menu-button, .mobile-menu, #dtr-resp-menu-button, .mobile-nav-container').length) {
                    $('.mobile-menu').slideUp(300);
                    $('.mobile-nav-container').hide();
                    $('#dtr-menu-button, #dtr-resp-menu-button').removeClass('is-active');
                }
            });
            
            // Ensure mobile menu is visible on small screens
            $(window).on('resize', function() {
                if ($(window).width() > 767) {
                    $('.mobile-menu').hide();
                    $('.mobile-nav-container').hide();
                    $('#dtr-menu-button, #dtr-resp-menu-button').removeClass('is-active');
                }
            });
        });
    </script>
    
    <!-- Swiper.js Script -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".mySwiper", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: 1,
            spaceBetween: 20,
        });
    </script>
</body>
</html>
