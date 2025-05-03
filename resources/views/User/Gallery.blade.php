<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Gallery</title>
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

    <style>
        .portfolio-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 items per row */
            gap: 10px; /* Space between grid items */
            background-color: white;
            padding: 10px;
        }

        .dtr-portfolio-item {
            width: 100%;
            height: 230px; /* Fixed height for each item */
            overflow: hidden;
            position: relative;
        }

        .dtr-portfolio-item__img img {
            width: 420px; /* Fixed width for the images */
            height: 260px; /* Fixed height for the images */
            object-fit: cover; /* Ensures the image fits without distortion */
        }

        .dtr-portfolio-item__link {
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>

    <style>
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

</head>


<body>
    <div id="dtr-wrapper" class="clearfix">

        <!-- Small Devices Header starts
============================================= -->
        <div id="dtr-responsive-header">
            <div class="container">
                <!-- logo -->
                <a class="dtr-resp-logo" href="index.html"><img src="assets/images/logo.png" alt="logo" width="88" height="25"></a>
                <!-- menu button -->
                <button id="dtr-resp-menu-button" class="dtr-hamburger" type="button" aria-label="Menu Button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
            </div>
            <div class="dtr-responsive-header-menu"></div>
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
            <section id="works" class="dtr-section padding-top-100 bg-color-secondary-light" style="background-color: #003366;">

                <!--== intro starts ==-->
                <div class="container" style="background-color: #003366;">
                    <div class="dtr-intro--spaced-col" style="background-color: #003366;">
                        <h2 class="dtr-intro__heading" style="color: white;">Gallery</h2>
                        <p><a class="dtr-btn" href="{{ route('frontend-Home') }}" role="button" style="background-color: #228B22;"><span class="dtr-btn__text">Back to Home</span></a></p>
                    </div>
                </div>
                <!--== intro ends ==-->

                <!-- spacer -->
                <span class="spacer spacer-50"></span>

                <!--== portfolio nav starts ==-->

                <span class="spacer spacer-20"></span>

                <!--== portfolio starts ==-->
                <div class="portfolio-container">
                    @foreach($images as $image)
                    <div class="dtr-portfolio-item">
                        <a class="dtr-portfolio-item__link" href="{{ asset('storage/' . $image->photo) }}" aria-label="{{ $image->name }}">
                            <div class="dtr-portfolio-item__img">
                                <img src="{{ asset('storage/' . $image->photo) }}" alt="{{ $image->name }}">
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>

                <!-- Lightbox Modal -->
                <div class="lightbox-modal" id="lightboxModal">
                    <span class="lightbox-close">&times;</span>
                    <img class="lightbox-content" id="lightboxImage">
                    <a class="lightbox-prev">&#10094;</a>
                    <a class="lightbox-next">&#10095;</a>
                </div>

                <!--== portfolio ends ==-->

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
<script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/menu.js') }}"></script>
<script src="{{ asset('assets/js/slicknav.js') }}"></script>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all gallery items
            const galleryItems = document.querySelectorAll('.dtr-portfolio-item__link');
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
                    src: imgSrc
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

</body>

</html>
