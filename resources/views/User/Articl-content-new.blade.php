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
    
    <!-- Swiper.js Styles -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
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
            width: 100vw;
            position: relative;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
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

    <!-- JS Files -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/menu.js') }}"></script>
    <script src="{{ asset('assets/js/slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/animate.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    
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
