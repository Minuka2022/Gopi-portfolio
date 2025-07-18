<!doctype html>
<html lang="en">


<!-- Mirrored from tanshcreative.com/copr-st-preview/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2024 14:26:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Gopi Muthumaran</title>
    <meta name="author" content="tansh">
    <meta name="description" content="HTMLTemplate">
    <meta name="keywords" content="portfolio, personal">

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('assets/images/icons/favicon.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/images/icons/cropped-favicon-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/icons/cropped-favicon-180x180.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/icons/cropped-favicon-270x270.png') }}" />

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/counter.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-hero.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mobile-fixes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/client-testimonial.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about-section.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/counter-styles.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <!-- Core JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="{{ asset('assets/js/logo-carousel.js') }}"></script>
    
    <!-- Fix for missing scripts -->
    <script>
        // Create empty objects to prevent errors from missing scripts
        window.SlickNav = window.SlickNav || {};
        
        // Handle jQuery plugin errors
        jQuery.fn.extend({
            slickNav: function() { return this; },
            wow: function() { return this; }
        });
        
        // Error handling for missing elements
        function safeQuerySelector(selector) {
            try {
                return document.querySelector(selector);
            } catch (e) {
                console.warn('Error selecting element:', selector, e);
                return null;
            }
        }
    </script>

    <!-- Custom CSS for Gallery Section -->
    <style>
        /* Hamburger Menu Styles */
        .dtr-hamburger-lines,
        .dtr-hamburger-lines:before,
        .dtr-hamburger-lines:after {
            background-color: #ffffff !important;
        }
        /* Gallery hover effects */
        .dtr-portfolio-item__wrapper:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.25);
        }

        .dtr-portfolio-item__wrapper:hover .dtr-portfolio-item__img img {
            transform: scale(1.05);
        }

        .dtr-portfolio-item__wrapper:hover .dtr-portfolio-item__overlay {
            opacity: 1;
        }

        .dtr-portfolio-item__wrapper:hover .dtr-portfolio-item__content {
            transform: translateY(0);
        }

        .view-btn:hover {
            background: linear-gradient(135deg, #1a4b8b, #3a7bd5);
            color: white;
            transition: all 0.3s ease;
        }

        /* Button animation */
        .btn-animation {
            position: relative;
            overflow: hidden;
        }

        .btn-animation:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn-animation:hover:after {
            width: 300%;
            height: 300%;
        }
        
        /* Mobile Menu Styles */
        @media (max-width: 767px) {
            .mobile-menu-toggle {
                display: block !important;
            }
            
            .main-navigation .horizontal-nav {
                display: none;
            }
            
            .mobile-header {
                background-color: #002244;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 1000;
            }
            
            /* Hamburger active state */
            #dtr-resp-menu-button.is-active .dtr-hamburger-lines {
                background-color: transparent;
            }
            
            .mobile-nav-container {
                position: fixed;
                top: 60px;
                left: 0;
                width: 100%;
                background-color: #002244;
                z-index: 1000;
                box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                max-height: calc(100vh - 60px);
                overflow-y: auto;
            }
            
            #dtr-resp-menu-button.is-active .dtr-hamburger-lines:before {
                transform: rotate(45deg);
                top: 0;
            }
            
            #dtr-resp-menu-button.is-active .dtr-hamburger-lines:after {
                transform: rotate(-45deg);
                top: 0;
            }
            
            /* Mobile menu positioning and visibility */
            .mobile-nav-container {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: #002244;
                z-index: 999;
                padding: 20px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            }
            
            .mobile-nav-list {
                list-style: none;
                padding: 0;
                margin: 0;
            }
            
            .mobile-nav-list li a {
                display: block;
                padding: 15px 20px;
                color: #ffffff;
                text-decoration: none;
                border-bottom: 1px solid rgba(255,255,255,0.1);
                font-weight: 500;
                transition: all 0.3s ease;
            }
            
            .mobile-nav-list li:last-child a {
                border-bottom: none;
            }
            
            .mobile-nav-list li a:hover {
                color: #ff6b6b;
                background-color: rgba(255,255,255,0.05);
            }
        }
    </style>
</head>


<body>
    <div id="dtr-wrapper" class="clearfix">

        <!-- preloader starts -->

        <!-- preloader ends -->

        <!-- Small Devices Header starts
============================================= -->
        <div id="dtr-responsive-header" class="mobile-header">
            <div class="container" style="background-color: #002b54; padding: 15px; display: flex; justify-content: space-between; align-items: center;">
                <!-- logo -->
                <a class="dtr-resp-logo" href="{{ route('frontend-Home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="88" height="25"></a>
                <!-- menu button -->
                <button id="dtr-resp-menu-button" class="dtr-hamburger" type="button" aria-label="Menu Button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
            </div>
            
            <!-- Direct Mobile Menu (No SlickNav) -->
            <div class="mobile-nav-container" style="display: none;">
                <div class="container">
                    <ul class="mobile-nav-list">
                        <li><a href="{{ route('frontend-Home') }}#home">Home</a></li>
                        <li><a href="#aboutme">About</a></li>
                        <li><a href="#acheivment">Achievements</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#client">Clients</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#Events">Events</a></li>
                        <li><a href="{{ route('frontend-article') }}">Articles</a></li>
                        <li><a href="#Contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Small Devices Header ends
============================================= -->

        <!-- header starts
============================================= -->
        @include('partials.header')
    </div>
        <!-- header ends
================================================== -->

        <!-- ===== main content area starts ===== -->
        <div id="dtr-main-content">

            <!--===== hero section starts =====-->
            <section class="dtr-section hero-section" id="home">
                <div class="hero-overlay"></div>
                <div class="container">
                    <div class="row align-items-center">

                        <!-- First column starts -->
                        <div class="col-12 col-md-6">
                            <div class="hero-content">
                                <!-- Heading -->
                                <h1 class="hero-title" style="position: relative; display: inline-block; margin-bottom: 20px;">
                                    Welcome
                                    <!-- <span style="position: absolute; bottom: -5px; left: 0; width: 100%; height: 3px; background: linear-gradient(90deg, #1a4b8b, #3a7bd5); border-radius: 3px;"></span> -->
                                </h1>
                                
                                <!-- Hero content starts -->
                                <div class="hero-text">
                                    <div style="margin: 30px 0; padding: 0 20px 0 0;">
                                        <p class="hero-description" style="text-align: left; max-width: 800px; margin: 0; line-height: 1.8; color: white; font-weight: 400; font-size: 1.1em;">
                                            Success is about empowering others, delivering excellence, and leaving a meaningful impact that inspires trust, growth, and lasting connections in every endeavor.
                                        </p>
                                    </div>
                                    
                                    <!-- Luxury SVG sign start -->
                                    <div class="hero-signature" style="margin-bottom: 18px;">
                                        <!-- Placeholder luxury SVG sign (replace with owner signature/logo later) -->
                                        <svg width="56" height="32" viewBox="0 0 56 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 30 Q16 2, 28 16 Q40 30, 54 2" stroke="#3a7bd5" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                            <circle cx="28" cy="16" r="2.5" fill="#1a4b8b"/>
                                        </svg>
                                    </div>
                                    <!-- Luxury SVG sign end -->
                                    <!-- Social icons start -->
                                    <div class="hero-social">
                                        <ul class="social-icons" style="display: flex; gap: 18px; padding: 0; margin: 0; list-style: none;">
                                            <li><a class="dtr-linkedin" href="https://www.linkedin.com/" title="LinkedIn" target="_blank" rel="nofollow" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a class="dtr-instagram" href="https://www.instagram.com/" title="Instagram" target="_blank" rel="nofollow" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                            <li><a class="dtr-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank" rel="nofollow" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Social icons end -->
                                </div>
                                <!-- Hero content ends -->
                            </div>
                        </div>
                        <!-- First column ends -->

                        <!-- Second column starts -->
                        <div class="col-12 col-md-6">
                            <div class="hero-image-carousel">
                                <div class="carousel-container">
                                    <div class="carousel-slide active">
                                        <img src="{{ asset('assets/images/GOPIIMAGES/ggopi1.JPG') }}" alt="Gopi Muthumaran" class="img-fluid">
                                    </div>
                                    <div class="carousel-slide">
                                        <img src="{{ asset('assets/images/GOPIIMAGES/ggopi1.JPG') }}" alt="Gopi Muthumaran" class="img-fluid">
                                    </div>
                                    <div class="carousel-slide">
                                        <img src="{{ asset('assets/images/GOPIIMAGES/ggopi1.JPG') }}" alt="Gopi Muthumaran" class="img-fluid">
                                    </div>
                                </div>
                                <div class="carousel-indicators">
                                    <span class="indicator active" data-slide="0"></span>
                                    <span class="indicator" data-slide="1"></span>
                                    <span class="indicator" data-slide="2"></span>
                                </div>
                            </div>
                        </div>
                        <!-- Second column ends -->

                    </div>
                </div>
            </section>



            <!-- About Section -->
            <section class="about-section" id="aboutme">
                <div class="container">
                    <div class="row align-items-center about-row d-flex">
                        <div class="col-lg-6">
                            <div class="about-content">
                                <h2>Hello, I'm Gopi Muthumaran</h2>
                                <p class="lead">Global Trainer & Motivational Speaker</p>
                                <div class="about-text">
                                    <p>As a passionate trainer and motivational speaker, I bring over 15 years of experience in corporate training and leadership development. My unique approach combines entertainment with education, creating memorable and impactful learning experiences for my clients.</p>
                                    
                                    <p>I've had the privilege of working with Fortune 500 companies across Asia, Europe, and North America, bringing a global perspective to all my training sessions. My expertise spans leadership development, team building, communication skills, and personal growth strategies.</p>
                                    
                                    <p>My training philosophy centers on practical application and real-world relevance. I believe that learning should be engaging, interactive, and immediately applicable to participants' professional lives and organizational goals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-image">
                                <img src="{{ asset('assets/images/GOPIIMAGES/Gopi2.jpg') }}" alt="Gopi Muthumaran" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Client Logo Carousel Section -->
            <section class="client-logo-section" id="client">
                <div class="container">
                    <h2>Trusted By</h2>
                    <div class="logo-track">
                        @php
                            $logoCount = count($trustedLogos);
                        @endphp
                        
                        <!-- Different display based on number of logos -->
                        @if($logoCount == 0)
                            <!-- No logos to display -->
                            <div class="no-logos">No trusted partners yet</div>
                        @elseif($logoCount == 1)
                            <!-- Single logo - static display -->
                            <div class="logo-carousel static-carousel">
                                <div class="logo-slide">
                                    <a href="{{ $trustedLogos[0]->website_url }}" target="_blank" rel="noopener noreferrer">
                                        <img src="{{ asset($trustedLogos[0]->logo_image) }}" alt="{{ $trustedLogos[0]->company_name }}">
                                    </a>
                                </div>
                            </div>
                        @else
                            <!-- Multiple logos - animated carousel -->
                            <div class="logo-carousel animate-carousel" style="--logo-count: {{ $logoCount }}">
                                <!-- Original logos -->
                                @foreach($trustedLogos as $logo)
                                    <div class="logo-slide">
                                        <a href="{{ $logo->website_url }}" target="_blank" rel="noopener noreferrer">
                                            <img src="{{ asset($logo->logo_image) }}" alt="{{ $logo->company_name }}">
                                        </a>
                                    </div>
                                @endforeach
                                
                                <!-- Clone logos for infinite loop effect -->
                                @foreach($trustedLogos as $logo)
                                    <div class="logo-slide clone">
                                        <a href="{{ $logo->website_url }}" target="_blank" rel="noopener noreferrer">
                                            <img src="{{ asset($logo->logo_image) }}" alt="{{ $logo->company_name }}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </section>

            <!-- Testimonial Section -->
            <section class="testimonial-section" id="testimonials">
                <div class="container">
                    <h2>What People Say</h2>
                    <div class="testimonial-container">
                        <div class="testimonial-slider">
                            @forelse($testimonials as $key => $testimonial)
                                <div class="testimonial-slide {{ $key === 0 ? 'active' : '' }}">
                                    <div class="testimonial-content">
                                        {{ $testimonial->testimonial_text }}
                                    </div>
                                    <div class="testimonial-author">
                                        @if($testimonial->client_image)
                                            <img src="{{ asset($testimonial->client_image) }}" alt="{{ $testimonial->client_name }}" class="company-logo">
                                        @endif

                                        <div class="author-info">
                                            <div class="author-name">{{ $testimonial->client_name }}</div>
                                            <div class="author-title">{{ $testimonial->client_position }}</div>
                                            @if($testimonial->client_company)
                                                <div class="author-company">{{ $testimonial->client_company }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <!-- Default testimonials if no database entries -->
                                <!-- Testimonial 1 -->
                               
                                
                                <!-- Testimonial 2 -->
                               
                                
                                <!-- Testimonial 3 -->
                               
                            @endforelse
                            
                            <!-- Navigation Controls -->
                            <div class="testimonial-nav">
                                <button id="testimonial-prev" aria-label="Previous testimonial">
                                    <i class="fas fa-arrow-left"></i>
                                </button>
                                <button id="testimonial-next" aria-label="Next testimonial">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                            
                            <!-- Indicators -->
                            <div class="testimonial-indicators">
                                @php
                                    $count = count($testimonials) > 0 ? count($testimonials) : 3;
                                @endphp
                                @for($i = 0; $i < $count; $i++)
                                    <span class="testimonial-indicator {{ $i === 0 ? 'active' : '' }}" data-slide="{{ $i }}"></span>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <style>
                /* Mobile styles for hero section */
                @media (max-width: 991px) {
                    .hero-section {
                        text-align: center;
                    }
                    
                    .hero-content {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        margin-bottom: 30px;
                    }
                    
                    .hero-text {
                        max-width: 100%;
                    }
                    
                    .hero-social {
                        justify-content: center;
                        margin-top: 20px;
                    }
                    
                    .hero-social .social-icons {
                        justify-content: center;
                    }
                    
                    .hero-signature {
                        margin: 15px auto;
                    }
                    
                    .hero-image-carousel {
                        margin-top: 30px;
                    }
                }
                
                @media (min-width: 992px) {
                    .hero-section {
                        display: flex; /* Flexbox for the entire section */
                        align-items: center;
                        justify-content: space-between;
                    }

                    .hero-section .col-md-6:first-child {
                        flex: 1; /* Ensure the left section takes its natural width */
                        z-index: 1; /* Keeps the text above the image if they overlap */
                    }

                    .image-section {
                        flex: 1; /* Ensure the right section also takes its natural width */
                        display: flex;
                        justify-content: flex-end; /* Align the image to the right */
                        align-items: center;
                    }

                    .dtr-about {
                        width: 100%; /* Allow the container to expand fully */
                        max-width: 850px; /* Limit the maximum width of the image section */
                        height: 430px; /* Keep the height fixed */
                        position: relative;
                        overflow: hidden;
                    }

                    .dtr-about__img img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover; /* Ensure the image fills the container */
                    }

                    .slider-controls {
                        position: absolute;
                        bottom: 20px;
                        right: 20px;
                        display: flex;
                        gap: 10px;
                        z-index: 2; /* Ensure controls are visible above the image */
                    }

                    .slider-controls button {
                        background-color: #800000; /* Dark red for the buttons */
                        color: white;
                        border: none;
                        padding: 5px 10px;
                        cursor: pointer;
                    }

                    .slider-controls button:hover {
                        background-color: #b30000; /* Lighter red on hover */
                    }
                }


            </style>


             <script>
                 document.addEventListener("DOMContentLoaded", function () {
                     const images = ["assets/images/about-img1.jpg", "assets/images/about-img2.jpg", "assets/images/about-img3.jpg"];
                     const imageElement = document.querySelector(".dtr-about__img img");
                     let currentIndex = 0;

                     document.querySelector(".slider-prev").addEventListener("click", function () {
                         currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
                         imageElement.src = images[currentIndex];
                     });

                     document.querySelector(".slider-next").addEventListener("click", function () {
                         currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
                         imageElement.src = images[currentIndex];
                     });
                 });

             </script>

            <!--===== hero section ends =====-->


    
            <!--===== counter section ends =====-->


            <!--===== resume section starts =====-->
            <section class="dtr-section padding-y-100 " id="acheivment">
                <div class="container">
                    <div class="row">

                        <!--== intro starts ==-->
                        <div class="col-12">
                            <div class="dtr-intro width-50-center-align">
                                <h2 class="dtr-intro__heading" style="font-size: 2.5rem;">Achievements & Certifications</h2>
                                <div class="dtr-intro__divider mx-auto"></div>
                                <p class="mt-3"><b>Showcasing a journey of professional success, learning, and leadership</b></p>
                            </div>
                        </div>
                        <!--== intro ends ==-->

                        <!-- spacer -->
                        <span class="spacer spacer-30"></span>

                        <!--== column 1 starts ==-->
                        <div class="col-12 col-md-6">

                            <!-- box 1 starts -->
                            <div class="padding-50 wow animate__fadeIn mobile-bg-1">
                                <h5>Work Experience</h5>
                                
                                <div class="linkedin-timeline">
                                    <!-- timeline item starts -->
                                    <div class="timeline-item">
                                        <div class="timeline-icon">
                                            <i class="fas fa-briefcase"></i>
                                        </div>
                                        <div class="timeline-content">
                                            <span class="timeline-year">2022 - PRESENT</span>
                                            <h6 class="timeline-position">Managing Director</h6>
                                            <div class="timeline-company">Ignite Learning & Consultancy Pvt. Ltd</div>
                                            <div class="timeline-location"><i class="fas fa-map-marker-alt"></i> Sri Lanka</div>
                                        </div>
                                    </div>
                                    <!-- timeline item ends -->
                                    
                                    <!-- timeline item starts -->
                                    <div class="timeline-item">
                                        <div class="timeline-icon">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                        <div class="timeline-content">
                                            <span class="timeline-year">2017 – 2022</span>
                                            <h6 class="timeline-position">Consultant</h6>
                                            <div class="timeline-company">Alcor Management Consultancy Pvt. Ltd</div>
                                            <div class="timeline-location"><i class="fas fa-map-marker-alt"></i> Maldives</div>
                                        </div>
                                    </div>
                                    <!-- timeline item ends -->
                                    
                                    <!-- timeline item starts -->
                                    <div class="timeline-item">
                                        <div class="timeline-icon">
                                            <i class="fas fa-user-cog"></i>
                                        </div>
                                        <div class="timeline-content">
                                            <span class="timeline-year">2010 – 2017</span>
                                            <h6 class="timeline-position">Chief Operating Officer</h6>
                                            <div class="timeline-company">Focus Education Centre</div>
                                            <div class="timeline-location"><i class="fas fa-map-marker-alt"></i> Maldives</div>
                                        </div>
                                    </div>
                                    <!-- timeline item ends -->
                                    
                                    <!-- timeline item starts -->
                                    <div class="timeline-item">
                                        <div class="timeline-icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="timeline-content">
                                            <span class="timeline-year">2005 – 2010</span>
                                            <h6 class="timeline-position">Various Roles in Sales & Customer Support</h6>
                                            <div class="timeline-location"><i class="fas fa-map-marker-alt"></i> Sri Lanka</div>
                                        </div>
                                    </div>
                                    <!-- timeline item ends -->
                                </div>
                                <!-- timeline item ends -->

                            </div>
                            <!-- box 1 ends -->

                            <!-- spacer -->
                            <span class="spacer spacer-30"></span>

                            <!-- box 2 starts -->
                            <div class="padding-50 mobile-bg-2">
                                <h5>Key Abilities</h5>

                                <div class="ability-cards">
                                    <!-- ability card 1 -->
                                    <div class="ability-card">
                                        <div class="ability-icon">
                                            <i class="fas fa-chess-king"></i>
                                        </div>
                                        <div class="ability-content">
                                            <h6 class="ability-heading">Leadership and Strategic Planning</h6>
                                            <p>Proven track record of delivering transformative results in corporate training and development.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- ability card 2 -->
                                    <div class="ability-card">
                                        <div class="ability-icon">
                                            <i class="fas fa-globe-asia"></i>
                                        </div>
                                        <div class="ability-content">
                                            <h6 class="ability-heading">Multicultural Expertise</h6>
                                            <p>Over 20 years of experience across Sri Lanka, Maldives, and India in diverse industries.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- ability card 3 -->
                                    <div class="ability-card">
                                        <div class="ability-icon">
                                            <i class="fas fa-handshake"></i>
                                        </div>
                                        <div class="ability-content">
                                            <h6 class="ability-heading">Client-Centric Approach</h6>
                                            <p>Delivered solutions to prestigious clients such as Virtusa, Maldivian Airlines, and Bank of Maldives.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- ability cards end -->

                            </div>
                            <!-- box 2 ends -->

                        </div>
                        <!--== column 1 ends ==-->

                        <!--== column 2 starts ==-->
                        <div class="col-12 col-md-6 small-device-top-space" >

                            <!-- box 1 starts -->
                            <div class="padding-50 wow animate__fadeIn mobile-bg-3" data-wow-delay=".4s">
                                <h5>Academic Achievement</h5>

                                <div class="academic-cards">
                                    <!-- academic card 1 -->
                                    <div class="academic-card">
                                        <div class="academic-icon">
                                            <i class="fas fa-graduation-cap"></i>
                                        </div>
                                        <div class="academic-content">
                                            <h6 class="academic-heading">Master of Business Administration (MBA)</h6>
                                            <div class="academic-institution">Open University of Malaysia</div>
                                            <p>Graduated with Distinction and College Book Award for academic excellence.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- academic card 2 -->
                                    <div class="academic-card">
                                        <div class="academic-icon">
                                            <i class="fas fa-award"></i>
                                        </div>
                                        <div class="academic-content">
                                            <h6 class="academic-heading">Professional Diploma in Marketing</h6>
                                            <div class="academic-institution">Chartered Institute of Marketing (CIM), UK</div>
                                            <p>Enhanced expertise in strategic marketing and business development.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- academic card 3 -->
                                    <div class="academic-card">
                                        <div class="academic-icon">
                                            <i class="fas fa-certificate"></i>
                                        </div>
                                        <div class="academic-content">
                                            <h6 class="academic-heading">Professional Certifications</h6>
                                            <p>Certified Trainer from Door South Asia and Certified Drama-Based Facilitator.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- box 1 ends -->

                            <!-- spacer -->
                            <span class="spacer spacer-30"></span>

                            <!-- box 2 starts -->
                            <div class="padding-50 wow animate__fadeIn mobile-bg-4" data-wow-delay=".4s">
                                <h5>Technical Skills</h5>

                                <div class="skills-cards">
                                    <!-- skill card 1 -->
                                    <div class="skill-card">
                                        <div class="skill-icon">
                                            <i class="fas fa-chalkboard-teacher"></i>
                                        </div>
                                        <div class="skill-content">
                                            <h6 class="skill-heading">Corporate Training Development</h6>
                                            <p>Expert in developing training programs on leadership, management, and strategic thinking.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- skill card 2 -->
                                    <div class="skill-card">
                                        <div class="skill-icon">
                                            <i class="fas fa-pencil-alt"></i>
                                        </div>
                                        <div class="skill-content">
                                            <h6 class="skill-heading">Content Development</h6>
                                            <p>Experienced in creating impactful training modules and consultancy frameworks.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- skill card 3 -->
                                    <div class="skill-card">
                                        <div class="skill-icon">
                                            <i class="fas fa-laptop-code"></i>
                                        </div>
                                        <div class="skill-content">
                                            <h6 class="skill-heading">Technical Knowledge</h6>
                                            <p>Advanced understanding of IT infrastructure and business solutions.</p>
                                        </div>
                                    </div>
                                    
                                    <!-- skill card 4 -->
                                    <div class="skill-card">
                                        <div class="skill-icon">
                                            <i class="fas fa-users-cog"></i>
                                        </div>
                                        <div class="skill-content">
                                            <h6 class="skill-heading">Soft Skills Training</h6>
                                            <p>Skilled in delivering people skills, ethics, and supervisory workshops.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- box 2 ends -->
                            <span class="spacer spacer-20"></span>

                            <!-- timeline item starts -->


                        </div>

                    </div>
                </div>
                <style>
                    /* Achievement Section Styles */
                    #acheivment {
                        background-color: #f9f9f9;
                        padding: 70px 0;
                    }

                    /* Intro Section */
                    #acheivment .dtr-intro__heading {
                        color: #333;
                        margin-bottom: 15px;
                        font-weight: 600;
                    }

                    #acheivment .dtr-intro__divider {
                        width: 80px;
                        height: 3px;
                        background-color: #28a745;
                        margin-bottom: 20px;
                    }

                    #acheivment .dtr-intro p {
                        color: #555;
                        font-size: 1.1rem;
                    }

                    /* Box Styles */
                    #acheivment .mobile-bg-1,
                    #acheivment .mobile-bg-2,
                    #acheivment .mobile-bg-3,
                    #acheivment .mobile-bg-4 {
                        background-color: #fff;
                        border-radius: 8px;
                        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
                        border-top: 2px solid #28a745;
                        transition: transform 0.3s ease, box-shadow 0.3s ease;
                        padding: 30px;
                    }
                    
                    #acheivment .mobile-bg-1:hover,
                    #acheivment .mobile-bg-2:hover,
                    #acheivment .mobile-bg-3:hover,
                    #acheivment .mobile-bg-4:hover {
                        transform: translateY(-3px);
                        box-shadow: 0 6px 20px rgba(0,0,0,0.08);
                    }

                    /* Heading Styles */
                    #acheivment h5 {
                        color: #333;
                        font-size: 1.5rem;
                        margin-bottom: 25px;
                        font-weight: 600;
                        position: relative;
                        display: inline-block;
                    }
                    
                    #acheivment h5:after {
                        content: '';
                        position: absolute;
                        bottom: -8px;
                        left: 0;
                        width: 40px;
                        height: 2px;
                        background-color: #28a745;
                    }

                    #acheivment .timeline-year {
                        color: #28a745;
                        font-weight: 500;
                        font-size: 0.85rem;
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        margin-bottom: 5px;
                        display: block;
                    }

                    #acheivment .dtr-timeline__heading {
                        color: #333;
                        font-size: 1.1rem;
                        margin-top: 0;
                        margin-bottom: 8px;
                        font-weight: 600;
                    }

                    #acheivment .ability-heading {
                        color: #333;
                        font-size: 1.1rem;
                        font-weight: 600;
                        margin-bottom: 8px;
                    }

                    #acheivment .dtr-timeline__content {
                        color: #666;
                        line-height: 1.6;
                        font-size: 0.95rem;
                    }
                    
                    /* Company/Institution name styling */
                    #acheivment .dtr-timeline__content strong,
                    #acheivment .dtr-timeline__content b {
                        color: #555;
                    }
                    
                    /* Responsive adjustments */
                    @media (max-width: 768px) {
                        #acheivment .padding-50 {
                            padding: 25px;
                        }
                        
                        #acheivment h5 {
                            font-size: 1.3rem;
                        }
                    }
                    
                    /* LinkedIn-style Timeline */
                    .linkedin-timeline {
                        position: relative;
                        padding-left: 10px;
                    }
                    
                    .linkedin-timeline:before {
                        content: '';
                        position: absolute;
                        top: 10px;
                        bottom: 10px;
                        left: 20px;
                        width: 2px;
                        background-color: #28a745;
                    }
                    
                    .timeline-item {
                        position: relative;
                        padding-left: 45px;
                        margin-bottom: 30px;
                    }
                    
                    .timeline-item:last-child {
                        margin-bottom: 0;
                    }
                    
                    .timeline-icon {
                        position: absolute;
                        left: 0;
                        top: 5px;
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        background-color: white;
                        border: 2px solid #28a745;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        z-index: 2;
                    }
                    
                    .timeline-icon i {
                        color: #28a745;
                        font-size: 16px;
                    }
                    
                    .timeline-content {
                        padding-bottom: 5px;
                    }
                    
                    .timeline-year {
                        color: #28a745;
                        font-weight: 600;
                        font-size: 0.85rem;
                        text-transform: uppercase;
                        letter-spacing: 1px;
                        display: block;
                        margin-bottom: 5px;
                    }
                    
                    .timeline-position {
                        color: #333;
                        font-size: 1.1rem;
                        margin-top: 0;
                        margin-bottom: 5px;
                        font-weight: 600;
                    }
                    
                    .timeline-company {
                        color: #555;
                        margin-bottom: 5px;
                        font-weight: 500;
                    }
                    
                    .timeline-location {
                        color: #777;
                        font-size: 0.9rem;
                    }
                    
                    .timeline-location i {
                        margin-right: 5px;
                        font-size: 0.8rem;
                    }
                </style>
                <style>
                    /* Mobile Responsive Styles for About Section */
                    @media (max-width: 768px) {
                        .intro-title {
                            font-size: 2.2rem;
                            line-height: 1.2;
                        }

                        .line1 {
                            font-size: 2rem;
                        }

                        .desk-intro {
                            display: none;
                        }

                        .mobile-intro {
                            display: block;
                        }

                        h6, p {
                            font-size: 0.95rem;
                            line-height: 1.6;
                        }

                        .dtr-about2__img {
                            margin-bottom: 15px;
                        }

                        .dtr-about2__img img {
                            max-width: 80%;
                            margin: 0 auto;
                            display: block;
                        }

                        .dtr-about2 p {
                            text-align: center;
                            margin-top: 10px;
                        }

                        .intro-dec {
                            text-align: center;
                            margin-top: 20px;
                        }
                    }

                    /* Desktop Styles */
                    @media (min-width: 769px) {
                        .mobile-intro {
                            display: none;
                        }

                        .desk-intro {
                            display: block;
                        }
                    }
                    
                    /* Card Styles for Abilities, Academic, and Skills */
                    .ability-cards, .academic-cards, .skills-cards {
                        display: flex;
                        flex-direction: column;
                        gap: 20px;
                    }
                    
                    .ability-card, .academic-card, .skill-card {
                        display: flex;
                        background-color: white;
                        border-radius: 8px;
                        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
                        padding: 15px;
                        transition: transform 0.3s ease, box-shadow 0.3s ease;
                    }
                    
                    .ability-card:hover, .academic-card:hover, .skill-card:hover {
                        transform: translateY(-5px);
                        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                    }
                    
                    .ability-icon, .academic-icon, .skill-icon {
                        width: 50px;
                        height: 50px;
                        min-width: 50px;
                        border-radius: 50%;
                        background-color: #28a745;
                        color: white;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin-right: 15px;
                    }
                    
                    .ability-icon i, .academic-icon i, .skill-icon i {
                        font-size: 20px;
                    }
                    
                    .ability-content, .academic-content, .skill-content {
                        flex: 1;
                    }
                    
                    .ability-heading, .academic-heading, .skill-heading {
                        color: #333;
                        font-size: 1.1rem;
                        margin-top: 0;
                        margin-bottom: 5px;
                        font-weight: 600;
                    }
                    
                    .academic-institution {
                        color: #555;
                        font-weight: 500;
                        margin-bottom: 5px;
                        font-size: 0.9rem;
                    }
                    
                    .ability-content p, .academic-content p, .skill-content p {
                        color: #666;
                        margin-bottom: 0;
                        font-size: 0.9rem;
                        line-height: 1.5;
                    }
                    
                    @media (max-width: 767px) {
                        .ability-card, .academic-card, .skill-card {
                            flex-direction: column;
                        }
                        
                        .ability-icon, .academic-icon, .skill-icon {
                            margin-right: 0;
                            margin-bottom: 10px;
                        }
                    }
                </style>
            </section>

               <!--===== client section starts =====-->
              
            <!--===== client section ends =====-->


            <!--===== works section starts =====-->
            <section id="gallery" class="dtr-section gallery-section" style="background-color: #002244;">

                <!--== intro starts ==-->
                <div class="container">
                    <div class="gallery-header">
                        <h2 class="gallery-title">Gallery</h2>
                        <div class="gallery-divider"></div>
                        <p><a class="dtr-btn gallery-btn" href="{{ route('frontend-gallery') }}" role="button"><span class="dtr-btn__text">View Gallery</span></a></p>
                    </div>
                </div>
                <!--== intro ends ==-->

                <!-- spacer -->
                <span class="spacer spacer-30"></span>

                <!--== portfolio starts ==-->
                <div class="container-fluid px-0">
                    <div class="gallery-grid">
                        @foreach($images as $image)
                        <!-- gallery item starts -->
                        <div class="gallery-item">
                            <div class="gallery-item-wrapper">
                                <a class="gallery-item-link" href="{{ asset('storage/' . $image->photo) }}" data-lightbox="homepage-gallery" aria-label="{{ $image->name }}">
                                    <div class="gallery-item-img">
                                        <img src="{{ asset('storage/' . $image->photo) }}" alt="{{ $image->name }}">
                                    </div>
                                    <div class="gallery-item-overlay">
                                        <div class="gallery-item-icon">
                                            <i class="fas fa-search-plus"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- gallery item ends -->
                        @endforeach
                    </div>
                </div>
                <!--== portfolio ends ==-->

                <!-- Lightbox Modal -->
                <div class="lightbox-modal" id="lightboxModal">
                    <span class="lightbox-close">&times;</span>
                    <img class="lightbox-content" id="lightboxImage">
                    <a class="lightbox-prev">&#10094;</a>
                    <a class="lightbox-next">&#10095;</a>
                </div>

                <style>
                    /* Gallery Section Styles */
                    .gallery-section {
                        background-color: #002244;
                        background: linear-gradient(to right, #001a33, #002244, #001a33);
                        padding: 80px 0 0 0;
                        position: relative;
                    }

                    .gallery-header {
                        text-align: center;
                        margin-bottom: 40px;
                    }

                    .gallery-title {
                        color: white;
                        font-size: 2.5rem;
                        margin-bottom: 15px;
                    }

                    .gallery-divider {
                        width: 80px;
                        height: 3px;
                        background: linear-gradient(135deg, #1a4b8b, #3a7bd5);
                        margin: 0 auto 25px;
                    }

                    .gallery-btn {
                        background: linear-gradient(135deg, #1a4b8b, #3a7bd5);
                        border: none;
                        padding: 12px 25px;
                        border-radius: 4px;
                        transition: all 0.3s ease;
                        display: inline-block;
                        margin-top: 15px;
                    }

                    .gallery-btn:hover {
                        background: linear-gradient(135deg, #0d3b7a, #2868c0);
                        transform: translateY(-3px);
                        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                    }

                    .gallery-grid {
                        display: flex;
                        flex-wrap: wrap;
                        width: 100%;
                        margin: 0;
                        padding: 0;
                        background-color: white;
                    }
                    
                    @media (max-width: 768px) {
                        .gallery-grid {
                            grid-template-columns: repeat(2, 1fr);
                            gap: 0;
                        }
                    }
                    
                    @media (max-width: 480px) {
                        .gallery-grid {
                            grid-template-columns: 1fr;
                            gap: 0;
                        }
                    }

                    .gallery-item {
                        position: relative;
                        overflow: hidden;
                        border-radius: 0;
                        transition: transform 0.3s ease;
                        width: 33.333%;
                        padding: 0;
                        margin: 0;
                        box-sizing: border-box;
                    }
                    
                    @media (max-width: 992px) {
                        .gallery-item {
                            width: 50%;
                        }
                    }
                    
                    @media (max-width: 480px) {
                        .gallery-item {
                            width: 100%;
                        }
                    }
                    
                    .gallery-item:hover {
                        transform: scale(0.98);
                    }

                    .gallery-item-wrapper {
                        position: relative;
                        width: 100%;
                        height: 0;
                        padding-bottom: 66.67%; /* 2:3 aspect ratio */
                        overflow: hidden;
                    }

                    .gallery-item-img {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        padding: 0;
                        background-color: white;
                        line-height: 0;
                    }

                    .gallery-item-img img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        transition: transform 0.5s ease;
                        display: block;
                        margin: 0;
                        padding: 0;
                    }

                    .gallery-item-overlay {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0, 34, 68, 0.7);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        opacity: 0;
                        transition: opacity 0.3s ease;
                    }

                    .gallery-item-icon {
                        width: 50px;
                        height: 50px;
                        background: linear-gradient(135deg, #1a4b8b, #3a7bd5);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        color: white;
                        font-size: 20px;
                        transform: scale(0);
                        transition: transform 0.3s ease;
                    }

                    .gallery-item:hover .gallery-item-overlay {
                        opacity: 1;
                    }

                    .gallery-item:hover .gallery-item-icon {
                        transform: scale(1);
                    }

                    .gallery-item:hover .gallery-item-img img {
                        transform: scale(1.1);
                    }

                    @media (max-width: 1200px) {
                        .gallery-grid {
                            grid-template-columns: repeat(3, 1fr);
                        }
                    }

                    @media (max-width: 992px) {
                        .gallery-grid {
                            grid-template-columns: repeat(2, 1fr);
                        }
                    }

                    @media (max-width: 768px) {
                        .gallery-title {
                            font-size: 2rem;
                        }

                        .gallery-section {
                            padding: 60px 0;
                        }
                    }

                    @media (max-width: 480px) {
                        .gallery-grid {
                            grid-template-columns: 1fr;
                        }
                    }

                    /* Lightbox Styles */
                    .lightbox-modal {
                        display: none;
                        position: fixed;
                        z-index: 9999;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        overflow: hidden;
                        background-color: rgba(0, 0, 0, 0.9);
                        padding: 50px;
                    }

                    .lightbox-content {
                        margin: auto;
                        display: block;
                        max-width: 90%;
                        max-height: 80vh;
                        object-fit: contain;
                    }

                    .lightbox-close {
                        position: absolute;
                        top: 15px;
                        right: 35px;
                        color: #f1f1f1;
                        font-size: 40px;
                        font-weight: bold;
                        transition: 0.3s;
                        cursor: pointer;
                    }

                    .lightbox-close:hover,
                    .lightbox-close:focus {
                        color: #bbb;
                        text-decoration: none;
                        cursor: pointer;
                    }

                    .lightbox-prev,
                    .lightbox-next {
                        cursor: pointer;
                        position: absolute;
                        top: 50%;
                        width: auto;
                        padding: 16px;
                        margin-top: -50px;
                        color: white;
                        font-weight: bold;
                        font-size: 30px;
                        transition: 0.6s ease;
                        border-radius: 0 3px 3px 0;
                        user-select: none;
                        -webkit-user-select: none;
                    }

                    .lightbox-next {
                        right: 0;
                        border-radius: 3px 0 0 3px;
                    }

                    .lightbox-prev {
                        left: 0;
                    }

                    .lightbox-prev:hover,
                    .lightbox-next:hover {
                        background-color: rgba(0, 0, 0, 0.8);
                    }
                </style>

                <!-- Masonry Layout and Lightbox JavaScript -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Get all gallery items and images
                        const allItems = document.querySelectorAll('.gallery-item');
                        const allImages = document.querySelectorAll('.gallery-item-img img');
                        
                        // Make sure images load without gaps
                        allImages.forEach(img => {
                            if (img.complete) {
                                img.style.opacity = '1';
                            } else {
                                img.style.opacity = '0';
                                img.addEventListener('load', () => {
                                    img.style.opacity = '1';
                                });
                            }
                        });

                        // Get all gallery items
                        const galleryItems = document.querySelectorAll('.gallery-item-link');
                        const lightboxModal = document.getElementById('lightboxModal');
                        const lightboxImage = document.getElementById('lightboxImage');
                        const lightboxClose = document.querySelector('.lightbox-close');
                        const lightboxNext = document.querySelector('.lightbox-next');
                        const lightboxPrev = document.querySelector('.lightbox-prev');

                        let currentIndex = 0;
                        const images = [];

                        // Collect all image data
                        galleryItems.forEach((item, index) => {
                            const imgSrc = item.getAttribute('href');

                            images.push({
                                src: imgSrc,
                            });

                            // Add click event to open lightbox
                            item.addEventListener('click', function(e) {
                                e.preventDefault();
                                openLightbox(index);
                            });
                        });

                        // Open lightbox function
                        function openLightbox(index) {
                            currentIndex = index;
                            updateLightboxContent();
                            lightboxModal.style.display = 'block';

                            // Prevent scrolling when lightbox is open
                            document.body.style.overflow = 'hidden';
                        }

                        // Update lightbox content
                        function updateLightboxContent() {
                            lightboxImage.src = images[currentIndex].src;
                        }

                        // Close lightbox
                        lightboxClose.addEventListener('click', function() {
                            lightboxModal.style.display = 'none';
                            document.body.style.overflow = 'auto';
                        });

                        // Next image
                        lightboxNext.addEventListener('click', function() {
                            currentIndex = (currentIndex + 1) % images.length;
                            updateLightboxContent();
                        });

                        // Previous image
                        lightboxPrev.addEventListener('click', function() {
                            currentIndex = (currentIndex - 1 + images.length) % images.length;
                            updateLightboxContent();
                        });

                        // Close on click outside image
                        lightboxModal.addEventListener('click', function(e) {
                            if (e.target === lightboxModal) {
                                lightboxModal.style.display = 'none';
                                document.body.style.overflow = 'auto';
                            }
                        });

                        // Keyboard navigation
                        document.addEventListener('keydown', function(e) {
                            if (lightboxModal.style.display === 'block') {
                                if (e.key === 'ArrowRight') {
                                    // Next image
                                    currentIndex = (currentIndex + 1) % images.length;
                                    updateLightboxContent();
                                } else if (e.key === 'ArrowLeft') {
                                    // Previous image
                                    currentIndex = (currentIndex - 1 + images.length) % images.length;
                                    updateLightboxContent();
                                } else if (e.key === 'Escape') {
                                    // Close lightbox
                                    lightboxModal.style.display = 'none';
                                    document.body.style.overflow = 'auto';
                                }
                            }
                        });
                    });
                </script>
            </section>


           
            <style>
               .dtr-post-block__img-wrapper {
                    width: 100%;
                    height: 200px; /* Adjust height as needed */
                    overflow: hidden;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background-color: #f0f0f0; /* Neutral background for better image appearance */
                }

                .dtr-post-block__img-wrapper img {
                    width: auto;
                    height: 100%; /* Ensures the image fits while maintaining its aspect ratio */
                    object-fit: contain; /* Shows the entire image without cropping */
                }



               */


            </style>

            <!--===== Public Programmes section starts =====-->
            <section id="Events" class="dtr-section programmes-section">
                <div class="container">
                    <!-- Section Header -->
                    <div class="programmes-header">
                        <h2 class="programmes-title">Public Programmes</h2>
                        <div class="programmes-divider"></div>
                    </div>

                    <!-- Programmes Grid -->
                    <div class="programmes-grid">
                        @foreach ($events as $event)
                            <div class="programme-card">
                                <!-- Programme Image -->
                                <div class="programme-image-container">
                                    <a href="{{ route('events.show', ['slug' => Str::slug($event->title) . '-' . $event->id]) }}">
                                        <img src="{{ asset('storage/' . ($event->eventImages->first()->image ?? 'default.jpg')) }}" alt="{{ $event->title }}">
                                    </a>
                                </div>

                                <!-- Programme Title Overlay -->
                                <div class="programme-title-overlay">
                                    <h4 class="programme-title">
                                        <a href="{{ route('events.show', ['slug' => Str::slug($event->title) . '-' . $event->id]) }}">{{ $event->title }}</a>
                                    </h4>
                                    <p class="programme-description">{{ \Illuminate\Support\Str::limit($event->description, 60) }}</p>
                                </div>
                                <!-- Arrow Icon -->
                                <div class="programme-arrow">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <!-- View More Button -->
                    <div class="programmes-footer">
                        <a class="dtr-btn programmes-btn" href="{{route('frontend-event')}}" role="button">
                            <span class="dtr-btn__text">VIEW MORE EVENTS</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <style>
                    /* Public Programmes Section Styles */
                    .programmes-section {
                        background-color: #ffffff;
                        padding: 80px 0;
                        position: relative;
                    }
                    
                    .programmes-section::before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-image: url('data:image/svg+xml;utf8,<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 5 L6 5 L6 6 L5 6 Z" fill="%23f0a500" /></svg>');
                        background-size: 40px 40px;
                        opacity: 0.1;
                        z-index: 0;
                    }

                    .programmes-section .container {
                        position: relative;
                        z-index: 1;
                    }

                    .programmes-header {
                        text-align: center;
                        margin-bottom: 50px;
                    }

                    .programmes-title {
                        color: #333;
                        font-size: 2.5rem;
                        margin-bottom: 15px;
                        font-weight: 600;
                    }

                    .programmes-divider {
                        width: 80px;
                        height: 3px;
                        background: linear-gradient(135deg, #1a4b8b, #3a7bd5);
                        margin: 0 auto;
                    }

                    .programmes-grid {
                        display: grid;
                        grid-template-columns: repeat(3, 1fr);
                        gap: 20px;
                        margin-bottom: 40px;
                        padding: 0 15px;
                    }

                    @media (max-width: 1200px) {
                        .programmes-grid {
                            grid-template-columns: repeat(2, 1fr);
                        }
                    }

                    @media (max-width: 768px) {
                        .programmes-grid {
                            grid-template-columns: repeat(2, 1fr);
                        }
                    }

                    @media (max-width: 480px) {
                        .programmes-grid {
                            grid-template-columns: 1fr;
                        }
                    }

                    .programme-card {
                        background-color: white;
                        border-radius: 0;
                        overflow: hidden;
                        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
                        transition: all 0.3s ease;
                        position: relative;
                    }

                    .programme-card:hover {
                        transform: translateY(-5px);
                        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
                    }
                    
                    .programme-card:hover .programme-arrow {
                        opacity: 1;
                        transform: translateY(0);
                    }
                    
                    .programme-arrow {
                        position: absolute;
                        bottom: 15px;
                        right: 15px;
                        width: 36px;
                        height: 36px;
                        background: linear-gradient(135deg, #1a4b8b, #3a7bd5);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        color: white;
                        opacity: 0;
                        transform: translateY(10px);
                        transition: all 0.3s ease;
                        z-index: 2;
                    }
                    
                    .programme-arrow i {
                        font-size: 14px;
                    }

                    .programme-image-container {
                        position: relative;
                        height: 0;
                        padding-bottom: 85%; /* Even bigger aspect ratio */
                        overflow: hidden;
                    }

                    .programme-image-container img {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        transition: transform 0.5s ease;
                    }

                    .programme-card:hover .programme-image-container img {
                        transform: scale(1.05);
                    }

                    .programme-title-overlay {
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        width: 100%;
                        background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.6) 50%, rgba(0,0,0,0) 100%);
                        padding: 50px 15px 15px;
                        text-align: left;
                    }

                    .programme-title {
                        font-size: 1.1rem;
                        margin: 0 0 5px;
                        font-weight: 500;
                        line-height: 1.4;
                    }
                    
                    .programme-description {
                        font-size: 0.85rem;
                        margin: 0;
                        color: rgba(255,255,255,0.8);
                        line-height: 1.3;
                    }

                    .programme-title a {
                        color: white;
                        text-decoration: none;
                        transition: color 0.3s ease;
                    }

                    .programme-title a:hover {
                        color: #228B22;
                    }
                    
                    .programmes-footer {
                        text-align: center;
                        margin-top: 30px;
                    }

                    .programmes-btn {
                        background: linear-gradient(135deg, #1a4b8b, #3a7bd5);
                        border: none;
                        padding: 12px 25px;
                        border-radius: 4px;
                        transition: all 0.3s ease;
                        display: inline-flex;
                        align-items: center;
                        gap: 10px;
                        font-weight: 500;
                    }

                    .programmes-btn:hover {
                        background: linear-gradient(135deg, #0d3b7a, #2868c0);
                        transform: translateY(-3px);
                        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                    }
                    
                    .programmes-btn i {
                        font-size: 0.9rem;
                    }
                        font-weight: 600;
                        text-decoration: none;
                        transition: all 0.3s ease;
                    }

                    .event-read-more i {
                        margin-left: 5px;
                        transition: transform 0.3s ease;
                    }

                    .event-read-more:hover {
                        color: #002244;
                    }

                    .event-read-more:hover i {
                        transform: translateX(5px);
                    }

                    .events-nav-next,
                    .events-nav-prev {
                        color: white;
                        background: linear-gradient(135deg, #1a4b8b, #3a7bd5);
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        transition: all 0.3s ease;
                        position: absolute;
                        top: 50%;
                        transform: translateY(-50%);
                    }

                    .events-nav-next {
                        right: 10px;
                    }

                    .events-nav-prev {
                        left: 10px;
                    }

                    .events-nav-next:hover,
                    .events-nav-prev:hover {
                        background: linear-gradient(135deg, #0d3b7a, #2868c0);
                        transform: translateY(-50%) scale(1.1);
                    }

                    @media (max-width: 768px) {
                        .events-header {
                            flex-direction: column;
                            text-align: center;
                        }

                        .events-title-wrapper {
                            margin-bottom: 20px;
                        }

                        .events-divider {
                            margin: 0 auto 10px;
                        }

                        .event-image-container {
                            height: 180px;
                        }
                    }
                </style>
            </section>
            <!--===== blog section ends =====-->
            <!-- Articles section commented out as requested -->
            <!--
         
            -->

            <!--===== contact section starts =====-->
            <section id="Contact" class="dtr-section contact-section">
                <div class="container">
                    <!-- Section Header -->
                    <div class="contact-header">
                        <h2 class="contact-title">Contact Us</h2>
                        <div class="contact-divider"></div>
                        <p class="contact-subtitle">Get in touch with us for any inquiries or collaborations</p>
                    </div>

                    <!-- Contact Form and Info -->
                    <div class="row">
                        <!-- Contact Form -->
                        <div class="col-lg-7 mb-5 mb-lg-0">
                            <div class="contact-form-container">
                                <form id="contactForm" action="#" method="POST" class="contact-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="name">Your Name</label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="email">Your Email</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject" name="subject" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                    </div>
                                    <button type="submit" class="dtr-btn contact-submit-btn">
                                        <span>Send Message</span>
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                        <!-- Contact Info -->
                        <div class="col-lg-5">
                            <div class="contact-info-container">
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h4>Our Location</h4>
                                        <p>NO.11-A-4, Colombo Stock Exchange<br>Colombo 07, Sri Lanka</p>
                                    </div>
                                </div>
                                
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h4>Call Us</h4>
                                        <p>+94 77 123 4567<br>+94 777 362 826</p>
                                    </div>
                                </div>
                                
                                <div class="contact-info-item">
                                    <div class="contact-info-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-info-content">
                                        <h4>Email Us</h4>
                                        <p>info@minuka@spcom-1.com<br>email@spcom-1.com</p>
                                    </div>
                                </div>
                                
                                <div class="contact-social-links">
                                    <a href="#" class="contact-social-link"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="contact-social-link"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="contact-social-link"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="contact-social-link"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <style>
                    /* Contact Section Styles */
                    .contact-section {
                        background-color: #f9f9f9;
                        padding: 80px 0;
                        position: relative;
                        overflow: hidden;
                    }
                    
                    .contact-section:before {
                        content: '';
                        position: absolute;
                        top: -100px;
                        left: -100px;
                        width: 300px;
                        height: 300px;
                        border-radius: 50%;
                        background: linear-gradient(135deg, rgba(26,75,139,0.05) 0%, rgba(58,123,213,0.1) 100%);
                        z-index: 0;
                    }
                    
                    .contact-header {
                        text-align: center;
                        margin-bottom: 50px;
                    }
                    
                    .contact-title {
                        color: #333;
                        font-size: 2.5rem;
                        margin-bottom: 15px;
                        font-weight: 600;
                    }
                    
                    .contact-divider {
                        width: 80px;
                        height: 3px;
                        background: linear-gradient(135deg, #1a4b8b, #3a7bd5);
                        margin: 0 auto 15px;
                    }
                    
                    .contact-subtitle {
                        color: #666;
                        font-size: 1.1rem;
                        max-width: 600px;
                        margin: 0 auto;
                    }
                    
                    .contact-form-container {
                        background-color: white;
                        padding: 30px;
                        border-radius: 5px;
                        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
                        border-top: 3px solid #3a7bd5;
                    }
                    
                    .contact-form .form-group {
                        margin-bottom: 20px;
                    }
                    
                    .contact-form label {
                        font-weight: 500;
                        color: #444;
                        margin-bottom: 5px;
                    }
                    
                    .contact-form .form-control {
                        border: 1px solid #ddd;
                        border-radius: 4px;
                        padding: 10px 15px;
                        height: auto;
                        transition: all 0.3s ease;
                    }
                    
                    .contact-form .form-control:focus {
                        border-color: #3a7bd5;
                        box-shadow: 0 0 0 0.2rem rgba(58,123,213,0.15);
                    }
                    
                    .contact-submit-btn {
                        background: linear-gradient(135deg, #1a4b8b, #3a7bd5);
                        border: none;
                        padding: 12px 25px;
                        border-radius: 4px;
                        color: white;
                        font-weight: 500;
                        display: inline-flex;
                        align-items: center;
                        gap: 10px;
                        transition: all 0.3s ease;
                    }
                    
                    .contact-submit-btn:hover {
                        background: linear-gradient(135deg, #0d3b7a, #2868c0);
                        transform: translateY(-3px);
                        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                    }
                    
                    .contact-info-container {
                        height: 100%;
                        background: linear-gradient(135deg, #1a4b8b, #3a7bd5);
                        padding: 30px;
                        border-radius: 5px;
                        color: white;
                        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                        position: relative;
                        overflow: hidden;
                    }
                    
                    .contact-info-container:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        right: 0;
                        width: 150px;
                        height: 150px;
                        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M54.627 0l.83.828-1.415 1.415L51.8 0h2.827zM5.373 0l-.83.828L5.96 2.243 8.2 0H5.374zM48.97 0l3.657 3.657-1.414 1.414L46.143 0h2.828zM11.03 0L7.372 3.657 8.787 5.07 13.857 0H11.03zm32.284 0L49.8 6.485 48.384 7.9l-7.9-7.9h2.83zm-24.596 0l-5.485 5.486 1.414 1.414 7.9-7.9h-2.83zm16.97 0l-7.071 7.07-1.414-1.414L33.284 0h2.83zM30 0L20.344 9.656l1.414 1.414L30 2.828 38.242 11.07l1.415-1.414L30 0zm-2.828 0l-9.9 9.9 1.415 1.414L25.9 4.1 27.314 5.515 17.414 15.415l1.414 1.414L30 5.657l11.172 11.172 1.414-1.414L27.314 0h-.142zm-5.656 0L7.372 14.143l1.414 1.414L22.93 0h-1.414zM38.5 0L26.686 11.814l1.415 1.414 12.228-12.228h-1.83zm2.83 0l-14.143 14.142 1.414 1.414L42.686 0h-1.357zm-8.486 0L16.686 16.143l1.414 1.414L40.243 0h-7.4zM42.687 0L28.544 14.142l1.414 1.414L44.1 0h-1.414zm-24.6 0L3.543 14.143l1.414 1.414L20.1 0h-2.014zM0 0l28.544 28.544 1.414-1.414L0 2.828V0zm0 5.657l25.716 25.717 1.414-1.414L0 8.485v-2.83zm0 5.657l22.887 22.887 1.414-1.414L0 14.142v-2.83zm0 5.657L20.03 34.03l1.414-1.414L0 19.8v-2.83zm0 5.657l17.2 17.2 1.415-1.414L0 25.456v-2.83zm0 5.657l14.37 14.37 1.415-1.414L0 31.113v-2.83zm0 5.657l11.544 11.543 1.414-1.414L0 36.77v-2.83zm0 5.657l8.715 8.715 1.414-1.415L0 42.425v-2.83zm0 5.657l5.886 5.886 1.414-1.414L0 48.082v-2.83zm0 5.657l3.057 3.057 1.414-1.414L0 53.74v-2.83zM0 59.56l.143.143 1.414-1.414L0 56.43v3.13zm5.657 0l.828.83 1.414-1.415-1.414-1.414-1.414 1.414.586.586zM11.314 0L0 11.314v2.83L13.143 0h-1.83zm5.657 0L0 16.97v2.83L19.8 0h-2.83zm5.657 0L0 22.627v2.83L25.456 0h-2.83zm5.657 0L0 28.284v2.83L31.113 0h-2.83zm5.657 0L0 33.94v2.83L36.77 0h-2.83zm5.657 0L0 39.6v2.83L42.426 0h-2.83zm5.657 0L0 45.254v2.83L48.082 0h-2.83zm5.657 0L0 50.91v2.83L53.74 0h-2.83zm5.657 0L0 56.568v2.873L59.397 0h-2.83z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
                        opacity: 0.5;
                    }
                    
                    .contact-info-item {
                        display: flex;
                        margin-bottom: 25px;
                    }
                    
                    .contact-info-icon {
                        font-size: 1.5rem;
                        margin-right: 15px;
                        color: rgba(255,255,255,0.9);
                    }
                    
                    .contact-info-content h4 {
                        font-size: 1.1rem;
                        margin-bottom: 5px;
                        font-weight: 600;
                    }
                    
                    .contact-info-content p {
                        margin: 0;
                        font-size: 0.95rem;
                        color: rgba(255,255,255,0.8);
                        line-height: 1.6;
                    }
                    
                    .contact-social-links {
                        display: flex;
                        gap: 10px;
                        margin-top: 30px;
                    }
                    
                    .contact-social-link {
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        width: 36px;
                        height: 36px;
                        background-color: rgba(255,255,255,0.2);
                        border-radius: 50%;
                        color: white;
                        transition: all 0.3s ease;
                    }
                    
                    .contact-social-link:hover {
                        background-color: white;
                        color: #228B22;
                        transform: translateY(-3px);
                    }
                    
                    @media (max-width: 991px) {
                        .contact-info-container {
                            margin-top: 30px;
                        }
                    }
                </style>
            </section>
            
            <!-- Footer Section -->
            @include('partials.footer')
            <!--===== contact section ends =====-->

        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Get the URL parameter
                const urlParams = new URLSearchParams(window.location.search);
                const section = urlParams.get('section');

                // Scroll to the section if it exists
                if (section) {
                    const targetElement = document.getElementById(section);
                    if (targetElement) {
                        targetElement.scrollIntoView({ behavior: "smooth" });
                    }
                }
            });
        </script>

        <!--== scroll to top ==-->
        <a id="take-to-top" href="#" style="background-color: #002b54;" class="active" aria-label="Scroll To Top"></a>
    </div>
    <!-- #dtr-wrapper ends -->

    <!-- JS Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/counter.js') }}"></script>
    <script src="{{ asset('assets/js/testimonials.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('assets/js/custom-header.js') }}"></script>
    <script src="{{ asset('assets/js/custom-hero.js') }}"></script>
    <script src="{{ asset('assets/js/client-testimonial.js') }}"></script>

    <!-- JS Files for portfolio -->
    <script src="{{ asset('assets/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script>
        $(window).on('load', function () {
            $('.dtr-portfolio-grid').imagesLoaded(function () {
                $('.dtr-portfolio-grid').isotope({
                    itemSelector: '.dtr-portfolio-item',
                    masonry: {},
                    layoutMode: 'fitRows',
                });
            });
            $('.dtr-filter-nav a').on('click', function () {
                $('.dtr-filter-nav a').removeClass('active');
                $(this).addClass('active');
                var selector = $(this).attr('data-filter');
                $('.dtr-portfolio-grid').isotope({
                    filter: selector
                });
                return false;
            });
        });
    </script>

    <script>
        // Smooth scroll for anchor links with offset for fixed header
        document.addEventListener('DOMContentLoaded', function () {
            const header = document.querySelector('#dtr-header-global');
            const headerHeight = header ? header.offsetHeight : 0;
            const navLinks = document.querySelectorAll('a.nav-link[href^="#"]');
            
            if (navLinks && navLinks.length > 0) {
                navLinks.forEach(link => {
                    link.addEventListener('click', function (e) {
                        const targetId = this.getAttribute('href').slice(1);
                        const target = document.getElementById(targetId);
                        if (target) {
                            e.preventDefault();
                            const y = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                            window.scrollTo({ top: y, behavior: 'smooth' });
                            // Optionally close mobile menu
                            const mobileMenu = document.querySelector('.mobile-menu');
                            if (mobileMenu) mobileMenu.classList.remove('active');
                            $('.mobile-nav-container').slideUp(300);
                        }
                    });
                });
            }
    </script>
    
    <!-- Mobile Menu Fix -->
    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Counter Animation
        function animateCounters() {
            const counters = document.querySelectorAll('.counter');
            const duration = 2000; // Animation duration in ms
            const frameDuration = 1000 / 60; // 60fps
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const start = 0;
                const totalFrames = Math.round(duration / frameDuration);
                let frame = 0;
                
                const animate = () => {
                    frame++;
                    const progress = frame / totalFrames;
                    const current = Math.round(easeOutQuart(progress) * target);
                    
                    counter.textContent = current;
                    
                    if (frame < totalFrames) {
                        requestAnimationFrame(animate);
                    } else {
                        // Add + to 1000+ counter
                        if (counter.getAttribute('data-target') === '1000') {
                            counter.textContent = current + '+';
                        }
                    }
                };
                
                // Start animation
                requestAnimationFrame(animate);
            });
            
            // Easing function for smooth animation
            function easeOutQuart(t) {
                return 1 - Math.pow(1 - t, 4);
            }
        }

        // Run counter when scrolled to section
        let counted = false;
        function checkCounter() {
            const counterSection = document.querySelector('.about-stats');
            if (counterSection && !counted) {
                const counterPosition = counterSection.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.5;
                
                if (counterPosition < screenPosition) {
                    // Small delay to ensure AOS has triggered
                    setTimeout(animateCounters, 300);
                    counted = true;
                }
            }
        }

        $(document).ready(function() {
            // Check counter on scroll
            window.addEventListener('scroll', checkCounter);
            // Initial check in case section is already in view
            checkCounter();
            // Simple toggle for mobile menu
            $('#dtr-resp-menu-button').on('click', function(e) {
                e.preventDefault();
                
                // Toggle menu visibility and button active state
                $('.mobile-nav-container').slideToggle(300);
                $(this).toggleClass('is-active');
            });
            
            // Close mobile menu when clicking on a menu item
            $('.mobile-nav-list li a').on('click', function() {
                $('.mobile-nav-container').slideUp(300);
                $('#dtr-resp-menu-button').removeClass('is-active');
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
                    $('.mobile-nav-container').slideUp(300);
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
            
            // Fix jQuery compatibility issues with other scripts
            jQuery.easing = jQuery.easing || {};
            jQuery.easing.jswing = jQuery.easing.jswing || function(x) { return x; };
            
            // Handle null element errors
            const safeAddEventListener = function(selector, event, handler) {
                const element = document.querySelector(selector);
                if (element) {
                    element.addEventListener(event, handler);
                }
            };
            
            // Fix for forms.js error
            if (typeof e !== 'function') {
                window.e = function() { return true; };
            }
            
            // Fix for missing image errors
            document.querySelectorAll('img').forEach(img => {
                img.onerror = function() {
                    // Replace with a transparent placeholder
                    this.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=';
                    this.onerror = null; // Prevent infinite loop
                };
            });
            
            // Add padding to body to account for fixed header
            document.body.style.paddingTop = '60px';
        });
    </script>

</body>
</html>
