<!doctype html>
<html lang="en">


<!-- Mirrored from tanshcreative.com/copr-st-preview/single-post.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2024 14:26:42 GMT -->

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
                            <img src="{{ asset('storage/' . $image->image) }}" alt="Event Image"  class="fixed-size" >
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
                {!! implode('</div><p>', array_map('trim', explode("\n\n", $article->content))) !!}
                </div>




            <!-- Post Navigation -->
            {{-- <nav class="dtr-single-post-nav">
                @if($previousEvent)
                <div class="dtr-single-nav__prev">
                    <a href="{{ route('events.show', ['slug' => Str::slug($previousEvent->title) . '-' . $previousEvent->id]) }}" rel="prev">
                        <p class="dtr-single-nav__prev-arrow">Previous Post</p>
                        <h4 class="dtr-single-nav__prev-title">{{ $previousEvent->title }}</h4>
                    </a>
                </div>
                @endif
                @if($nextEvent)
                <div class="dtr-single-nav__next">
                    <a href="{{ route('events.show', ['slug' => Str::slug($nextEvent->title) . '-' . $nextEvent->id]) }}" rel="next">
                        <p class="dtr-single-nav__next-arrow">Next Post</p>
                        <h4 class="dtr-single-nav__next-title">{{ $nextEvent->title }}</h4>
                    </a>
                </div>
                @endif --}}
            </nav>
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

        <!-- footer section starts
================================================== -->
        <footer id="dtr-footer-section">
            <div class="container">

                <!--== row 1 starts ==-->
                <div class="row">

                    <!--== column 1 starts ==-->
                    <div class="col-12 col-md-6">
                        <div class="dtr-footer-col-shrink">
                            <a href="index.html"><img src="assets/images/logo.png" alt="logo" width="88" height="25"></a>
                            <span class="spacer spacer-20"></span>
                            <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form.</p>
                        </div>
                    </div>
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
                    <div class="col-12 col-md-3 small-device-top-space">
                        <div class="dtr-footer-contact">
                            <p><a href="#">hello@example.com</a></p>
                            <p>12 345 678 90</p>
                            <p>Borough 47, Aveton Gifford,<br>Devon, UK, EX4 1QU</p>
                        </div>
                    </div>
                    <!--== column 2 ends ==-->

                    <!--== column 3 starts ==-->
                    <div class="col-12 col-md-3 small-device-top-space text-right">
                        <div class="dtr-footer-contact">
                            <p>Have a project in mind?</p>
                        </div>
                        <p class="dtr-footer-btn">
                            <a class="dtr-btn dtr-btn-contrast" href="#contact" role="button">
                                <span class="dtr-btn__text">Contact Me</span>
                            </a>
                        </p>
                    </div>
                    <!--== column 3 ends ==-->

                </div>
                <!--== row 1 ends ==-->

                <!--== row 2 starts ==-->
                <div class="dtr-copyright">
                    <div class="row">

                        <!--== column 1 starts ==-->
                        <div class="col-12 col-md-6">
                            <div class="text-left">
                                <ul class="dtr-social">
                                    <li><a class="dtr-facebook" href="#" title="Facebook" target="_blank" rel="nofollow" aria-label="Facebook"></a></li>
                                    <li><a class="dtr-twitter" href="#" title="Twitter" target="_blank" rel="nofollow" aria-label="Twitter"></a></li>
                                    <li><a class="dtr-instagram" href="#" title="Instagram" target="_blank" rel="nofollow" aria-label="Instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--== column 1 ends ==-->

                        <!--== column 2 starts ==-->
                        <div class="col-12 col-md-6 dtr-copyright-col-2">
                            <p>2024 © Copr. Theme by Tansh</p>
                        </div>
                        <!--== column 2 ends ==-->

                    </div>
                </div>
                <!--== row 2 ends ==-->

            </div>
        </footer>
        <!-- footer section ends
================================================== -->
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
