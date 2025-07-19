<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Gallery - Gopi Muthumaran</title>
    <meta name="author" content="Gopi Muthumaran">
    <meta name="description" content="Portfolio Gallery">
    <meta name="keywords" content="portfolio, personal, gallery">

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
            color: white;
            text-decoration: none;
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
        
        /* Gallery Styling */
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 60px;
        }
        
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            cursor: pointer;
            aspect-ratio: 1/1;
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        
        /* Lightbox Styling */
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
            background-color: rgba(0, 0, 0, 0.5);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
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
            
            .gallery-section {
                padding-top: 100px;
            }
            
            .gallery-container {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
                gap: 10px;
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
        <section class="gallery-section" style="background-color:white; padding-top: 120px;">
            <div class="container">
                <!-- Main Page Title -->
                <div class="page-title-container">
                    <h1 class="page-title">Gallery</h1>
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
                        <h2>Photo Collection</h2>
                    </div>
                </div>
                
                <!-- Gallery Grid -->
                <div class="gallery-container">
                    @foreach($images as $image)
                    <div class="gallery-item" data-src="{{ asset('storage/' . $image->photo) }}">
                        <img src="{{ asset('storage/' . $image->photo) }}" alt="{{ $image->name }}">
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        
        <!-- Lightbox Modal -->
        <div class="lightbox-modal" id="lightboxModal">
            <span class="lightbox-close">&times;</span>
            <img class="lightbox-content" id="lightboxImage">
            <a class="lightbox-prev">&#10094;</a>
            <a class="lightbox-next">&#10095;</a>
        </div>
        
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
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all gallery items
            const galleryItems = document.querySelectorAll('.gallery-item');
            const lightboxModal = document.getElementById('lightboxModal');
            const lightboxImage = document.getElementById('lightboxImage');
            const lightboxClose = document.querySelector('.lightbox-close');
            const lightboxNext = document.querySelector('.lightbox-next');
            const lightboxPrev = document.querySelector('.lightbox-prev');

            let currentIndex = 0;
            const images = [];

            // Collect all image data
            galleryItems.forEach((item, index) => {
                const imgSrc = item.getAttribute('data-src');
                images.push({
                    src: imgSrc,
                    index: index
                });

                // Add click event to open lightbox
                item.addEventListener('click', function() {
                    currentIndex = index;
                    openLightbox(imgSrc);
                });
            });

            // Open lightbox function
            function openLightbox(src) {
                lightboxModal.style.display = 'block';
                lightboxImage.src = src;
            }

            // Close lightbox
            lightboxClose.addEventListener('click', function() {
                lightboxModal.style.display = 'none';
            });

            // Next image
            lightboxNext.addEventListener('click', function() {
                currentIndex = (currentIndex + 1) % images.length;
                lightboxImage.src = images[currentIndex].src;
            });

            // Previous image
            lightboxPrev.addEventListener('click', function() {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                lightboxImage.src = images[currentIndex].src;
            });

            // Close on click outside
            lightboxModal.addEventListener('click', function(e) {
                if (e.target === lightboxModal) {
                    lightboxModal.style.display = 'none';
                }
            });

            // Keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (lightboxModal.style.display === 'block') {
                    if (e.key === 'Escape') {
                        lightboxModal.style.display = 'none';
                    } else if (e.key === 'ArrowRight') {
                        currentIndex = (currentIndex + 1) % images.length;
                        lightboxImage.src = images[currentIndex].src;
                    } else if (e.key === 'ArrowLeft') {
                        currentIndex = (currentIndex - 1 + images.length) % images.length;
                        lightboxImage.src = images[currentIndex].src;
                    }
                }
            });
        });
    </script>
</body>
</html>
