<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Gopi Muthumaran - Articles</title>
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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/counter.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-hero.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mobile-fixes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/client-testimonial.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about-section.css') }}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>


<body>
    <div id="dtr-wrapper" class="clearfix">

        <!-- Small Devices Header starts
============================================= -->
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
        <!-- Small Devices Header ends
============================================= -->

        <!-- header starts
============================================= -->
@include('partials.header')
    </div>
        <!-- header ends
================================================== -->

            <!--===== works section starts =====-->
    <section id="blog" class="dtr-section bg-color-secondary-light padding-y-100" style="background-color:white;">
        <div class="container">
            <div class="row">

                <!-- spacer -->
                <span class="spacer spacer-50"></span>

                <div class="col-12" style="color: white;" >
                    <!-- Main Page Title -->
                    <div class="page-title-container">
                        <h1 class="page-title">Articles</h1>
                        <a href="{{ route('frontend-Home') }}" class="back-to-home-btn">BACK TO HOME</a>
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
                            <h2>News & Media</h2>
                        </div>
                    </div>

                    <style>
                        /* Mobile Navigation Styles */
                        @media (max-width: 767px) {
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
                            
                            /* Hamburger button styles */
                            .dtr-hamburger {
                                cursor: pointer;
                                padding: 10px;
                                display: inline-block;
                                z-index: 9999;
                                position: relative;
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
                            .dtr-hamburger.is-active .dtr-hamburger-lines {
                                background-color: transparent;
                            }
                            
                            .dtr-hamburger.is-active .dtr-hamburger-lines:before {
                                transform: rotate(45deg);
                                top: 0;
                            }
                            
                            .dtr-hamburger.is-active .dtr-hamburger-lines:after {
                                transform: rotate(-45deg);
                                bottom: 0;
                            }
                        }
                        
                        /* Page Title Styling */
                        .page-title-container {
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            margin-bottom: 30px;
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
                        
                        .back-to-home-btn {
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
                        
                        .back-to-home-btn:hover {
                            background-color: #218838;
                        }
                        
                        /* Section Title Styling */
                        .section-title-container {
                            display: flex;
                            align-items: center;
                            margin-bottom: 40px;
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
                        }

                        /* Modern Article Grid Styling */
                        .article-section-title {
                            font-size: 36px;
                            font-weight: 700;
                            color: #1a237e;
                            margin-bottom: 40px;
                            text-align: center;
                        }
                        
                        .articles-container {
                            max-width: 1200px;
                            margin: 0 auto;
                            padding: 0 15px;
                        }
                        
                        .articles-grid {
                            display: grid;
                            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                            gap: 30px;
                            margin-bottom: 60px;
                        }
                        
                        /* Modern Card Styling */
                        .article-card {
                            background: #fff;
                            border-radius: 8px;
                            overflow: hidden;
                            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
                            transition: transform 0.3s ease, box-shadow 0.3s ease;
                            position: relative;
                            display: flex;
                            flex-direction: column;
                            height: 100%;
                        }
                        
                        .article-card:hover {
                            transform: translateY(-5px);
                            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
                        }
                        
                        /* Image Container */
                        .article-image-container {
                            position: relative;
                            height: 220px;
                            overflow: hidden;
                        }
                        
                        .article-image {
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                            transition: transform 0.5s ease;
                        }
                        
                        .article-card:hover .article-image {
                            transform: scale(1.05);
                        }
                        
                        /* Content Area */
                        .article-content {
                            padding: 20px 25px;
                            flex-grow: 1;
                            display: flex;
                            flex-direction: column;
                        }
                        
                        .article-meta {
                            display: flex;
                            align-items: center;
                            margin-bottom: 12px;
                            font-size: 14px;
                            color: #666;
                        }
                        
                        .article-date {
                            margin-right: 15px;
                            display: flex;
                            align-items: center;
                        }
                        
                        .article-date i, .article-author i {
                            margin-right: 5px;
                            font-size: 14px;
                        }
                        
                        .article-title {
                            font-size: 20px;
                            font-weight: 600;
                            line-height: 1.3;
                            margin-bottom: 12px;
                            color: #333;
                        }
                        
                        .article-title a {
                            color: #333;
                            text-decoration: none;
                            transition: color 0.2s ease;
                        }
                        
                        .article-title a:hover {
                            color: #1a237e;
                        }
                        
                        .article-excerpt {
                            font-size: 15px;
                            line-height: 1.6;
                            color: #666;
                            margin-bottom: 20px;
                            flex-grow: 1;
                        }
                        
                        .article-read-more {
                            text-align: right;
                            margin-top: auto;
                        }
                        
                        .article-read-more a {
                            display: inline-flex;
                            align-items: center;
                            color: #1a237e;
                            font-weight: 600;
                            font-size: 15px;
                            text-decoration: none;
                            transition: color 0.2s ease;
                        }
                        
                        .article-read-more a i {
                            margin-left: 5px;
                            transition: transform 0.2s ease;
                        }
                        
                        .article-read-more a:hover {
                            color: #3949ab;
                        }
                        
                        .article-read-more a:hover i {
                            transform: translateX(3px);
                        }
                        
                        /* Overlay Read More Button */
                        .overlay-read-more {
                            position: absolute;
                            left: 0;
                            bottom: 0;
                            margin: 0;
                            padding: 0;
                        }
                        
                        .overlay-read-more a {
                            background: rgba(26,35,126,0.85);
                            color: #fff;
                            padding: 8px 18px;
                            border-radius: 0 8px 0 0;
                            font-weight: 600;
                            font-size: 15px;
                            text-decoration: none;
                            display: inline-block;
                            transition: background-color 0.2s ease;
                        }
                        
                        .overlay-read-more a:hover {
                            background: rgba(26,35,126,1);
                        }
                        
                        /* Responsive Design */
                        @media (max-width: 992px) {
                            .articles-grid {
                                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                            }
                        }
                        
                        @media (max-width: 768px) {
                            .articles-grid {
                                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                            }
                            
                            .article-section-title {
                                font-size: 30px;
                            }
                        }
                        
                        @media (max-width: 576px) {
                            .articles-grid {
                                grid-template-columns: 1fr;
                            }
                        }
                    </style>

                        <div class="articles-container">
                            <div class="articles-grid">
                                @foreach ($articles as $article)
                                <div class="article-card">
                                    <!-- Article Image -->
                                    <div class="article-image-container">
                                        <a href="{{ route('article.show', ['slug' => Str::slug($article->title) . '-' . $article->id]) }}">
                                            <img class="article-image" src="{{ asset('storage/' . ($article->images->first()->image ?? 'default.jpg')) }}" alt="{{ $article->title }}">
                                        </a>
                                        <div class="overlay-read-more">
                                            <a href="{{ route('article.show', ['slug' => Str::slug($article->title) . '-' . $article->id]) }}">Read More</a>
                                        </div>
                                    </div>

                                    <!-- Article Content -->
                                    <div class="article-content">
                                        <div class="article-meta">
                                            <span class="article-date">
                                                <i class="far fa-calendar-alt"></i> {{ $article->created_at->format('F d, Y') }}
                                            </span>
                                            <span class="article-author">
                                                <i class="far fa-user"></i> Gopi
                                            </span>
                                        </div>

                                        <h3 class="article-title">
                                            <a href="{{ route('article.show', ['slug' => Str::slug($article->title) . '-' . $article->id]) }}">{{ $article->title }}</a>
                                        </h3>

                                        <div class="article-excerpt">
                                            {{ Str::limit($article->description, 100) }}
                                        </div>

                                        <div class="article-read-more">
                                            <a href="{{ route('article.show', ['slug' => Str::slug($article->title) . '-' . $article->id]) }}">
                                                View Article <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    <!-- swiper slider ends -->

                </div>
                <!--== single column ends ==-->

            </div>
        </div>
    </section>
            <!--===== works section ends =====-->

            <!--===== contact section starts =====-->
            @include('partials.footer')
            <!--===== contact section ends =====-->

        </div>
        <!-- ===== main content area ends ===== -->


        <!--== scroll to top ==-->
        <a id="take-to-top" href="#" class="active" aria-label="Scroll To Top"></a>
    </div>
    <!-- #dtr-wrapper ends -->

    <!-- JS Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/custom-header.js') }}"></script>
<script src="{{ asset('assets/js/custom-hero.js') }}"></script>
<script src="{{ asset('assets/js/client-testimonial.js') }}"></script>

<!-- Mobile Menu Script -->
<script>
    $(document).ready(function() {
        // Mobile menu toggle
        $('#dtr-resp-menu-button').on('click', function(e) {
            e.preventDefault();
            $('.mobile-nav-container').toggle();
            $(this).toggleClass('is-active');
        });

        // Close mobile menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('#dtr-resp-menu-button, .mobile-nav-container').length) {
                $('.mobile-nav-container').hide();
                $('#dtr-resp-menu-button').removeClass('is-active');
            }
        });

        // Hide mobile menu on window resize (if needed)
        $(window).on('resize', function() {
            if ($(window).width() > 767) {
                $('.mobile-nav-container').hide();
                $('#dtr-resp-menu-button').removeClass('is-active');
            }
        });
    });
</script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/forms.js') }}"></script>
    <script src="{{ asset('assets/js/animate.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

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

</body>

</html>
