<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Copr - HTML Template</title>
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
</head>

<body>
    <div id="dtr-wrapper" class="clearfix dtr-singlepost">

        <!-- preloader starts -->
        <div class="dtr-preloader">
            <div class="dtr-preloader-inner">
                <div class="dtr-loader">Loading...</div>
            </div>
        </div>
        <!-- preloader ends -->

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
        <!-- header ends
================================================== -->

        <!-- page title section starts
================================================== -->
<div class="dtr-page-title" style="background-color: #003366; color: white; padding: 50px 0;">
    <div class="container" style="padding:40px">
        <div class="dtr-post-block__category" style="background-color: #228B22; color: white; padding: 5px 10px; border-radius: 5px;">
            <a class="dtr-category-link" href="#" >Article</a>
        </div>
        <h1 class="dtr-page-title__heading" style="margin: 20px 0; font-size: 2.5rem; font-weight: bold;">{{ $article->title }}</h1>
        <div class="dtr-post-block__meta" style="font-size: 1rem; font-weight: 300;">
            <span class="dtr-meta-item" style="margin-right: 10px;">{{ $article->created_at->format('F d, Y') }}</span>
            <span class="dtr-meta-item">Gopi Muthumaran</span>
        </div>
    </div>
</div>

<!-- main content area starts -->
<div id="dtr-main-content" class="padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="dtr-single-post__wrapper">

            <!-- Carousel Section -->
            @if($article->images->isNotEmpty())
            <div class="carousel-container">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($article->images as $image)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $image->image) }}" alt="Article Image" class="fixed-size">
                        </div>
                        @endforeach
                    </div>
                    <!-- Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            @endif

            <style>
                br {
                    display: block;
                    margin-bottom: 10px; /* Adjust the value as needed */
                }
            </style>

            <!-- Content -->
            <div style="color:rgb(14, 14, 14)">
                {!! $article->content !!}
            </div>
        </div>

        <!-- Swiper.js Styles -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

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

        <!-- Custom Styles -->
        <style>
            .carousel-container {
                margin-bottom: 30px;
                text-align: center;
            }

            .swiper {
                width: 100%;
                max-width: 800px;
                margin: auto;
            }

            .swiper-slide img {
                width: 100%;
                height: auto;
                border-radius: 10px;
            }

            .swiper-button-next,
            .swiper-button-prev {
                color: #333;
            }

            @media (max-width: 768px) {
                .swiper {
                    max-width: 100%;
                }
            }
        </style>
    </div>
</div>

        <!-- ===== main content area ends ===== -->
        <section id="contact" class="dtr-section bg-color-secondary-light padding-y-100" style="background-color: #003366;">
            <div class="container" style="color: white;">
                <div class="row">

                    <!--== column 1 starts ==-->
                    <div class="col-12 col-md-6">

                        <h2>Contact Me</h2>
                        <span class="spacer spacer-50"></span>

                        <!-- feature starts -->
                        <div class="dtr-feature dtr-feature--style-default dtr-feature--text-left dtr-feature--icon-align-left dtr-feature--size-small">
                            <div class="dtr-feature__icon">
                                <i class="icon-phone-volume-solid" aria-hidden="true"></i>
                            </div>
                            <div class="dtr-feature__content">
                                <p class="dtr-feature__subtext">Just wanna say hello! Give me a call</p>
                                <h6 class="dtr-feature__heading">+ 12 345 678 90</h6>
                            </div>
                        </div>
                        <!-- feature ends -->

                        <span class="spacer spacer-50"></span>

                        <!-- feature starts -->
                        <div class="dtr-feature dtr-feature--style-default dtr-feature--icon-vert-align-top dtr-feature--text-left dtr-feature--icon-align-left dtr-feature--size-small">
                            <div class="dtr-feature__icon">
                                <i class="icon-envelope-circle-check-solid" aria-hidden="true"></i>
                            </div>
                            <div class="dtr-feature__content">
                                <p class="dtr-feature__subtext">For collaboration, mail me</p>
                                <h6 class="dtr-feature__heading">hello@example.com</h6>
                            </div>
                        </div>
                        <!-- feature ends -->

                        <span class="spacer spacer-50"></span>

                        <!-- feature starts -->
                        <div class="dtr-feature dtr-feature--style-default dtr-feature--icon-vert-align-top dtr-feature--text-left dtr-feature--icon-align-left dtr-feature--size-small">
                            <div class="dtr-feature__icon">
                                <i class="icon-location-arrow-solid" aria-hidden="true"></i>
                            </div>
                            <div class="dtr-feature__content">
                                <p class="dtr-feature__subtext">Walk-in to meet me</p>
                                <h6 class="dtr-feature__heading">Borough 47, Aveton Gifford,
                                    Devon, UK, EX4 1QU</h6>
                            </div>
                        </div>
                        <!-- feature ends -->

                    </div>
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
               @include('partials.footer')
                    <!--== column 2 ends ==-->

                </div>
            </div>
        </section>
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

</body>


<!-- Mirrored from tanshcreative.com/copr-st-preview/single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2024 14:26:42 GMT -->
</html>
