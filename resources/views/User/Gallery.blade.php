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
                <div class="dtr-filter-nav-wrapper">
                    <ul class="dtr-filter-nav clearfix">
                        <li><a class="dtr-filter-all active" data-filter="*" href="#" style="color: white;">All</a></li>
                        <li><a data-filter=".branding" href="#" style="color: white;">Branding</a></li>
                        <li><a data-filter=".creative" href="#" style="color: white;">Creative</a></li>
                        <li><a data-filter=".marketing" href="#" style="color: white;">Marketing</a></li>
                        <li><a data-filter=".web" href="#" style="color: white;">Web</a></li>
                    </ul>
                </div>
                <span class="spacer spacer-20"></span>

                <!--== portfolio starts ==-->
                <div class="portfolio-container">
                    @foreach($images as $image)
                    <div class="dtr-portfolio-item">
                        <a class="dtr-portfolio-item__link" target="_self" aria-label="{{ $image->name }}">
                            <div class="dtr-portfolio-item__img">
                                <img src="{{ asset('storage/' . $image->photo) }}" alt="{{ $image->name }}">
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>




                <!--== portfolio ends ==-->

            </section>
            <!--===== works section ends =====-->

            <!--===== contact section starts =====-->
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
                        <div class="col-12 col-md-6 small-device-top-space">
                            <div class="dtr-contact-box padding-50 bg-color-white">


                                <!-- form starts -->
                                <form id="contactform" method="post" action="https://tanshcreative.com/copr-st-preview/php/contact-form.php">
                                    <fieldset>
                                        <p class="dtr-form-field">
                                            <label style="color: black;">Your Name*</label>
                                            <input name="name" class="required" type="text" placeholder="John Doe" style="background-color: #d0d0d1;">
                                        </p>
                                        <p class="dtr-form-field">
                                            <label style="color: black;">Email Address*</label>
                                            <input name="email" class="required email" type="text" placeholder="hello@example.com" style="background-color: #d0d0d1;">
                                        </p>
                                        <p class="dtr-form-field">
                                            <label style="color: black;">Subject</label>
                                            <input name="subject" type="text" placeholder="Subject" style="background-color: #d0d0d1;">
                                        </p>
                                        <p class="dtr-form-field">
                                            <label style="color: black;">Message*</label>
                                            <textarea rows="4" name="message" class="required" placeholder="Message in brief..." style="background-color: #d0d0d1;"></textarea>
                                        </p>
                                        <p class="antispam" style="color: black;">Leave this empty: <br />
                                            <input name="url" />
                                        </p>
                                        <p>
                                            <button type="submit" style="background-color: #228B22;">Send Message</button>
                                        </p>
                                        <div id="contactresult"></div>
                                    </fieldset>
                                </form>
                                <!-- form ends -->

                            </div>
                        </div>
                        <!--== column 2 ends ==-->

                    </div>
                </div>
            </section>
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

</body>

</html>
