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
        <header id="dtr-header-global" class="fixed-top dtr-header" >

            <!-- == header content starts == -->
            <div class="dtr-header-global-content">

                <!-- header left starts -->
                <div class="dtr-header-left">
                    <!-- logo -->
                    <a class="logo-default" href="index.html"><img src="assets/images/logo.png" alt="logo" width="88" height="25"></a>
                    <!-- logo on scroll -->
                    <a class="logo-alt" href="index.html"><img src="assets/images/logo.png" alt="logo" width="88" height="25"></a>
                </div>
                <!-- header left ends -->

                <!-- header right starts -->
                <div class="dtr-header-right">
                    <button id="dtr-menu-button" class="dtr-hamburger" type="button" aria-label="Menu Button"><span class="dtr-hamburger-lines-wrapper" ><span class="dtr-hamburger-lines"></span></span></button>
                </div>
                <!-- header right ends -->

            </div>
            <!-- == header content ends == -->

            <!-- == sidemenu section starts == -->
            <a href="#" class="dtr-navigation-trigger" >Menu<span></span></a>
            <a href="#" class="dtr-navigation-close-trigger" aria-label="Menu Close Button"></a>
            <div class="dtr-sidemenu-scroll"></div>
            <div class="dtr-sidemenu-wrapper">

                <!-- menu links starts -->
                <ul class="dtr-nav dtr-main-nav dtr-vertical-nav">
                    <li class="menu-item menu-item-has-children"> <a class="nav-link" href="#" >Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html" class="nav-link" style="color: black;">Home v1</a></li>
                            <li><a href="home-2.html" class="nav-link" style="color: black;">Home v2</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="#services" class="nav-link" style="color: black;">Services</a></li>
                    <li class="menu-item"><a href="#works" class="nav-link" style="color: black;">Works</a></li>
                    <li class="menu-item"><a href="#about" class="nav-link" style="color: black;">About Me</a></li>
                    <li class="menu-item"><a href="#testimonial" class="nav-link" style="color: black;">Testimonials</a></li>
                    <li class="menu-item"><a href="#pricing" class="nav-link" style="color: black;">Plans &#038; Pricing</a></li>
                    <li class="menu-item"><a href="#blog" class="nav-link" style="color: black;">Blog</a></li>
                    <li class="menu-item"><a href="#contact" class="nav-link" style="color: black;">Contact Me</a></li>
                </ul>
            </div>
        </header>
    </div>
        <!-- header ends
================================================== -->
            <!--===== works section starts =====-->
            <section id="works" class="dtr-section padding-top-100 bg-color-secondary-light" style="background-color: #003366;">

                <!--== intro starts ==-->
                <div class="container" style="background-color: #003366;">
                    <div class="dtr-intro--spaced-col" style="background-color: #003366;">
                        <h2 class="dtr-intro__heading" style="color: white;">Gallery</h2>
                        <p><a class="dtr-btn" href="index.html" role="button" style="background-color: #228B22;"><span class="dtr-btn__text">Back to Home</span></a></p>
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
                <div class="dtr-portfolio-grid dtr-portfolio-masonry dtr-portfolio-grid-4col dtr-portfolio-compact" style="background-color: white;">

                    <!-- portfolio item 1 starts -->
                    <div class="dtr-portfolio-item isotope-item creative marketing all">
                        <div class="dtr-portfolio-item__wrapper">
                            <a class="dtr-portfolio-item__link" href="single-portfolio.html" target="_self" aria-label="Art Volunteering"></a>
                            <div class="dtr-portfolio-item__img"><img src="assets/images/item-1-1200x1200.jpg" alt="Art Volunteering"></div>
                            <div class="dtr-portfolio-item__content">
                                <h4 class="dtr-portfolio-item__heading" style="background-color:#003366;">Art Volunteering</h4>
                                <div class="clearfix"></div>
                                <!-- <p class="dtr-portfolio-item__subheading">Art direction / Web</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- portfolio item 1 ends -->

                    <!-- portfolio item 2 starts -->
                    <div class="dtr-portfolio-item isotope-item branding web all">
                        <div class="dtr-portfolio-item__wrapper">
                            <a class="dtr-portfolio-item__link" href="single-portfolio.html" target="_self" aria-label="Monstera Paris"></a>
                            <div class="dtr-portfolio-item__img"><img src="assets/images/item-5-1200x1200.jpg" alt="Monstera Paris"></div>
                            <div class="dtr-portfolio-item__content">
                                <h4 class="dtr-portfolio-item__heading" style="background-color:#003366;">Monstera Paris</h4>
                                <div class="clearfix"></div>
                                <!-- <p class="dtr-portfolio-item__subheading">Web / Branding</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- portfolio item 2 ends -->

                    <!-- portfolio item 3 starts -->
                    <div class="dtr-portfolio-item isotope-item creative web all">
                        <div class="dtr-portfolio-item__wrapper">
                            <a class="dtr-portfolio-item__link" href="single-portfolio.html" target="_self" aria-label="Daria Visual"></a>
                            <div class="dtr-portfolio-item__img"><img src="assets/images/item-6-1200x1200.jpg" alt="Daria Visual"></div>
                            <div class="dtr-portfolio-item__content">
                                <h4 class="dtr-portfolio-item__heading" style="background-color:#003366;">Daria Visual</h4>
                                <div class="clearfix"></div>
                                <!-- <p class="dtr-portfolio-item__subheading">Illustration</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- portfolio item 3 ends -->

                    <!-- portfolio item 4 starts -->
                    <div class="dtr-portfolio-item isotope-item branding creative all">
                        <div class="dtr-portfolio-item__wrapper">
                            <a class="dtr-portfolio-item__link" href="single-portfolio.html" target="_self" aria-label="Annshvets"></a>
                            <div class="dtr-portfolio-item__img"><img src="assets/images/item-2-1200x1200.jpg" alt="Annshvets"></div>
                            <div class="dtr-portfolio-item__content">
                                <h4 class="dtr-portfolio-item__heading" style="background-color:#003366;">Annshvets</h4>
                                <div class="clearfix"></div>
                                <!-- <p class="dtr-portfolio-item__subheading">Illustration</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- portfolio item 4 ends -->

                    <!-- portfolio item 5 starts -->
                    <div class="dtr-portfolio-item isotope-item marketing web all">
                        <div class="dtr-portfolio-item__wrapper">
                            <a class="dtr-portfolio-item__link" href="single-portfolio.html" target="_self" aria-label="Fredi"></a>
                            <div class="dtr-portfolio-item__img"><img src="assets/images/item-4-1200x1200.jpg" alt="Fredi"></div>
                            <div class="dtr-portfolio-item__content">
                                <h4 class="dtr-portfolio-item__heading" style="background-color:#003366;">Fredi</h4>
                                <div class="clearfix"></div>
                                <!-- <p class="dtr-portfolio-item__subheading">Story Telling / Web</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- portfolio item 5 ends -->

                    <!-- portfolio item 6 starts -->
                    <div class="dtr-portfolio-item isotope-item branding creative all">
                        <div class="dtr-portfolio-item__wrapper">
                            <a class="dtr-portfolio-item__link" href="single-portfolio.html" target="_self" aria-label="Onne"></a>
                            <div class="dtr-portfolio-item__img"><img src="assets/images/item-8-1200x1200.jpg" alt="Onne"></div>
                            <div class="dtr-portfolio-item__content">
                                <h4 class="dtr-portfolio-item__heading" style="background-color:#003366;">Onne</h4>
                                <div class="clearfix"></div>
                                <!-- <p class="dtr-portfolio-item__subheading">Art direction / Logo Design</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- portfolio item 6 ends -->

                    <!-- portfolio item 7 starts -->
                    <div class="dtr-portfolio-item isotope-item creative web all">
                        <div class="dtr-portfolio-item__wrapper">
                            <a class="dtr-portfolio-item__link" href="single-portfolio.html" target="_self" aria-label="Sound On"></a>
                            <div class="dtr-portfolio-item__img"><img src="assets/images/item-9-1200x1200.jpg" alt="Sound On"></div>
                            <div class="dtr-portfolio-item__content">
                                <h4 class="dtr-portfolio-item__heading" style="background-color:#003366;">Sound On</h4>
                                <div class="clearfix"></div>
                                <!-- <p class="dtr-portfolio-item__subheading">Creative / Web</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- portfolio item 7 ends -->

                    <!-- portfolio item 8 starts -->
                    <div class="dtr-portfolio-item isotope-item marketing web all">
                        <div class="dtr-portfolio-item__wrapper">
                            <a class="dtr-portfolio-item__link" href="single-portfolio.html" target="_self" aria-label="Pressed Juicery"></a>
                            <div class="dtr-portfolio-item__img"><img src="assets/images/item-3-1200x1200.jpg" alt="Pressed Juicery"></div>
                            <div class="dtr-portfolio-item__content">
                                <h4 class="dtr-portfolio-item__heading" style="background-color: #003366;">Pressed Juicery</h4>
                                <div class="clearfix"></div>
                                <!-- <p class="dtr-portfolio-item__subheading">Story Telling / Web</p> -->
                            </div>
                        </div>
                    </div>
                    <!-- portfolio item 8 ends -->

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
