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
    <section id="blog" class="dtr-section bg-color-secondary-light padding-y-100" style="background-color:white;">
        <div class="container">
            <div class="row">

                <!--== intro starts ==-->
                <div class="col-12">
                    <div class="dtr-intro--spaced-col">
                        <h2 class="dtr-intro__heading" style="color:black;">Articles</h2>
                        <p><a class="dtr-btn" href="{{route('frontend-Home')}}" role="button" style="background-color: #228B22;"><span class="dtr-btn__text">Back to Home</span></a></p>
                    </div>
                </div>
                <!--== intro ends ==-->

                <!-- spacer -->
                <span class="spacer spacer-50"></span>

                <div class="col-12" style="color: white;  " >

                    <style>

                        .dtr-recentposts-grid {
                            margin-bottom: 40px; /* Space at the bottom of the grid */
                        }

                        .dtr-post-wrapper {
                            display: grid; /* Use grid layout */
                            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Responsive columns */
                            gap: 16px; /* Add space between cards */
                            margin: 16px; /* Outer margin for the wrapper */
                        }

                        /* Card Styling */
                            .dtr-post-block {
                                display: flex;
                                flex-direction: column;
                                justify-content: space-between; /* Space between content */
                                background-color: #fff;
                                border: 1px solid #ddd;
                                padding: 0;
                                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                                overflow: hidden;
                                border-radius: 8px; /* Add slight rounding */
                            }

                        /* Image Section */
                        .dtr-post-block__img-wrapper {
                            overflow: hidden; /* Hide overflow in case of irregular image sizes */
                            width: 100%;
                            height: 180px; /* Set a fixed height for the image section */
                        }

                        .dtr-post-block__img-wrapper img {
                            width: 100%; /* Ensure the image takes the full width of the container */
                            height: 100%; /* Match the height of the container */
                            object-fit: cover; /* Ensure the image covers the area without distortion */
                        }

                        /* Event Content Styling */
                        /* Content Styling */
                        .dtr-post-block__content {
                            flex-grow: 1; /* Allow content to expand */
                            padding: 15px;
                            color: black;
                            display: flex;
                            flex-direction: column;
                        }
                        .dtr-post-block img {
                            width: 100%; /* Make images responsive */
                            height: auto; /* Maintain aspect ratio */
                            display: block;
                            object-fit: cover; /* Ensure images fit nicely */
                        }


                        .dtr-post-block__meta a {
                            color: black; /* Meta links color */
                            text-decoration: none; /* Remove underline */
                            margin-right: 10px; /* Space between the meta items */
                        }



                        /* Title Styling */
                        .dtr-post-block__title {
                            font-size: 18px; /* Title font size */
                            margin: 10px 0; /* Space around the title */
                        }

                        .dtr-post-block__title a {
                            color: black; /* Title link color */
                            text-decoration: none; /* Remove underline */
                        }

                        /* Excerpt Styling */
                        .dtr-post-block__excerpt {
                            font-size: 14px; /* Excerpt font size */
                            line-height: 1.5; /* Improve line spacing */
                            color: #666; /* Lighter text color for the excerpt */
                        }

                        /* Read More Button */
                        .dtr-post-block__read-more {
                            margin-top: auto; /* Push button to the bottom */
                            padding: 10px 15px; /* Padding around the button */
                            text-align: left;
                        }


                        .dtr-post-block__read-more a {
                            display: inline-block;
                            padding: 8px 16px;
                            background-color: #28a745;
                            color: #fff;
                            font-size: 14px;
                            text-decoration: none;
                            border-radius: 4px;
                            font-weight: bold;
                        }


                        .dtr-post-block__read-more a:hover {
                            background-color: #218838;
                        }

                        /* Responsive Design */
                        @media (max-width: 768px) {
                            .dtr-post-wrapper {
                                grid-template-columns: 1fr; /* Single column on smaller screens */
                            }

                            .dtr-post-block {
                                margin: 0 auto; /* Center cards on mobile */
                            }
                        }


                    </style>

                        <div class="dtr-recentposts-grid" style="margin-bottom: 40px;">
                            <div class="swiper-wrapper" style="color: black; display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
                                @foreach ($articles  as $article)
                                <div class="dtr-post-block" style="color: black">
                                    <!-- Event Image -->
                                    <div class="dtr-post-block__img-wrapper">
                                        <a href="single-post.html">
                                            <img src="{{ asset('storage/' . ($article->images->first()->image ?? 'default.jpg')) }}" alt="Event Image">
                                        </a>
                                    </div>

                                    <!-- Event Content -->
                                    <div class="dtr-post-block__content" style="color: black;">
                                        <div class="dtr-post-block__meta" style="color: black;">
                                            <!-- Event Date -->
                                            <a class="dtr-meta-item" href="#" style="color: black;">{{ $article->created_at->format('F d, Y') }}</a>
                                            <!-- Hardcoded Author -->
                                            <a class="dtr-meta-item" href="#" style="color: black;">Gopi</a>
                                        </div>

                                        <!-- Event Title -->
                                        <h5 class="dtr-post-block__title">
                                            <a href="single-post.html" rel="bookmark" style="color: black;">{{ $article->title }}</a>
                                        </h5>

                                        <!-- Event Description -->
                                        <div class="dtr-post-block__excerpt" style="color: black;">
                                            {{ $article->description }}
                                        </div>
                                        <div class="dtr-post-block__read-more">
                                            <a href="#">Read More</a>
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
