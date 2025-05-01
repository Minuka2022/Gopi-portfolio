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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/counter.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS for Gallery Section -->
    <style>
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
            background-color: #228B22;
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
    </style>
</head>


<body>
    <div id="dtr-wrapper" class="clearfix">

        <!-- preloader starts -->

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
    </div>
        <!-- header ends
================================================== -->

        <!-- ===== main content area starts ===== -->
        <div id="dtr-main-content">

            <!--===== hero section starts =====-->
            <section class="dtr-section hero-section bg-color-secondary-light" style="background-color: #003366">
                <div class="container">
                    <div class="row">

                        <!-- First column starts -->
                        <div class="col-12 col-md-6">
                            <div class="hero-wheel-wrap">

                                <!-- Heading -->
                                <h1 style="color: white">Welcome</h1>
                            </div>
                            <!-- Spacer -->
                            <span class="spacer spacer-20"></span>

                            <!-- Hero content starts -->
                            <div class="hero-text-shrink">
                                <h6 class="text-color-secondary" style="color: #eeeeee">
                                    Success is about empowering others, delivering excellence, and leaving a meaningful impact that inspires trust, growth, and lasting connections in every endeavor.
                                </h6>
                                <span class="spacer spacer-20"></span>
                                <span class="spacer spacer-5"></span>

                                <!-- Social icons start -->
                                <div class="dtr-social-widget text-left">
                                    <ul class="dtr-social">
                                        <li><a class="dtr-whatsapp" href="#" title="Whatsapp" target="_blank" rel="nofollow" aria-label="Whatsapp"></a></li>
                                        <li><a class="dtr-behance" href="#" title="Behance" target="_blank" rel="nofollow" aria-label="Behance"></a></li>
                                        <li><a class="dtr-dribbble" href="#" title="Dribbble" target="_blank" rel="nofollow" aria-label="Dribbble"></a></li>
                                    </ul>
                                </div>
                                <!-- Social icons end -->

                            </div>
                            <!-- Hero content ends -->

                        </div>
                        <!-- First column ends -->

                        <!-- Second column starts -->
                        <div class="image-section"> <!-- Removed Bootstrap column class -->
                            <div class="dtr-about">
                                <figure class="dtr-about__img">
                                    <img src="assets/images/about-img1.jpg" alt="about image">
                                </figure>
                                <div class="slider-controls">
                                    <button class="slider-prev" aria-label="Previous Image">&lt;</button>
                                    <button class="slider-next" aria-label="Next Image">&gt;</button>
                                </div>
                            </div>
                        </div>
                        <!-- Second column ends -->

                    </div>
                </div>
            </section>
            <style>
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
           <section id="aboutme" class="dtr-section" style="padding:30px">
                <div class="container" style="margin-top:20px; margin-bottom:20px">
                    <div class="row">

                        <!--== column 1 starts ==-->
                        <div class="col-12 col-md-6" >

                            <!-- about starts -->
                            <div class="dtr-about2">
                                <div class="dtr-about2__img">
                                    <figure><img src="assets/images/about-img2.jpg" alt="about-img2"></figure>

                                </div>
                                <p style="font-weight: bold; color:#0c0c0c">Consultant</p>
                            </div>
                            <!-- about ends -->

                        </div>
                        <!--== column 1 ends ==-->

                        <!--== column 2 starts ==-->
                        <div class="col-12 col-md-6 intro-dec">
                            <h2 style="color: #0c0c0c;" class="intro-title">
                                <div class="desk-intro">
                                    <span class="line1">Hi There ,<span>I am</span> </span><br>
                                    <span class="line1"> Gopi Muthumaran</span><br>
                                </div>
                                <div class="mobile-intro">
                                    <span class="line1">Hi There ,</span><br>
                                    <span class="line1">I am Gopi</span><br>
                                    <span class="line1">Muthumaran</span>
                                </div>

                            <span class="spacer spacer-20"></span>
                            <h6 style="color: #131313">
                                With a passion for leadership and strategic growth, I’ve dedicated my career to empowering individuals and organizations. My work spans corporate training, consultancy, and education, fostering meaningful change and lasting impact.
                            </h6>
                            <span class="spacer spacer-20"></span>
                            <p style="color: #1e1e1e">
                                As a seasoned professional with over two decades of experience, I specialize in driving excellence through strategic management, innovative training, and impactful consultancy. Whether mentoring future leaders or crafting transformative solutions, my focus remains on creating value, inspiring progress, and leaving a legacy of trust and collaboration in every endeavor.
                            </p>
                            <p style="color: #1e1e1e">
                                I combine expertise in leadership, training, and strategy to empower growth, inspire innovation, and make a difference in every interaction.
                            </p>
                            <span class="spacer spacer-10"></span>
                            <!-- button -->
                            <a class="dtr-btn" href="#" role="button" style="background-color: #228B22;">
                                <span class="dtr-btn__text">Contact</span>
                            </a>
                        </div>

                        <!--== column 2 ends ==-->

                    </div>
                </div>
            </section>

               <!--===== counter section starts =====-->
               <section class="dtr-section counter-section">
                <div class="container">
                    <div class="row">
                        <!-- Intro text -->
                        <div class="col-12 text-center mb-5">
                            <div class="dtr-intro__divider"></div>
                            <h5 class="dtr-counter__info-text">
                                Dedicated to empowering organizations with strategic insights, innovative training, and impactful leadership solutions for over two decades.
                            </h5>
                        </div>

                        <!-- Counter items - Desktop and Mobile -->
                        <div class="col-12 d-flex justify-content-around align-items-center text-center flex-wrap">
                            <!-- Experience -->
                            <div class="dtr-counter mb-4">
                                <div class="counter-icon-wrapper">
                                    <span class="counter-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </span>
                                </div>
                                <div class="counter-number-wrapper">
                                    <span class="dtr-counter__number counting-number" data-from="1" data-to="20" data-speed="1600">20</span>
                                </div>
                                <div class="counter-label-wrapper">
                                    <h6 class="dtr-counter__heading">
                                        Years Leadership & Consultancy
                                    </h6>
                                </div>
                            </div>

                            <!-- Professionals -->
                            <div class="dtr-counter mb-4">
                                <div class="counter-icon-wrapper">
                                    <span class="counter-icon">
                                        <i class="fas fa-users"></i>
                                    </span>
                                </div>
                                <div class="counter-number-wrapper">
                                    <span class="dtr-counter__number counting-number" data-from="1" data-to="1000" data-speed="1600">1000</span>
                                </div>
                                <div class="counter-label-wrapper">
                                    <h6 class="dtr-counter__heading">
                                        Professionals Trained
                                    </h6>
                                </div>
                            </div>

                            <!-- Projects -->
                            <div class="dtr-counter mb-4">
                                <div class="counter-icon-wrapper">
                                    <span class="counter-icon">
                                        <i class="fas fa-project-diagram"></i>
                                    </span>
                                </div>
                                <div class="counter-number-wrapper">
                                    <span class="dtr-counter__number counting-number" data-from="1" data-to="50" data-speed="1600">50</span>
                                </div>
                                <div class="counter-label-wrapper">
                                    <h6 class="dtr-counter__heading">
                                        Projects Completed
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .counter-section {
                        background-color: #002244;
                        padding: 80px 0;
                        color: white;
                    }

                    .dtr-counter__info-text {
                        color: #ffffff;
                        font-size: 1.2rem;
                        max-width: 800px;
                        margin: 0 auto;
                        line-height: 1.8;
                    }

                    .dtr-intro__divider {
                        width: 80px;
                        height: 3px;
                        background-color: #228B22;
                        margin: 0 auto 20px;
                    }

                    .dtr-counter {
                        position: relative;
                        padding: 20px;
                        width: 280px;
                        transition: transform 0.3s ease;
                    }

                    .dtr-counter:hover {
                        transform: translateY(-5px);
                    }

                    .counter-icon-wrapper {
                        margin-bottom: 15px;
                    }

                    .counter-icon {
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        width: 70px;
                        height: 70px;
                        background-color: rgba(76, 175, 80, 0.2);
                        border-radius: 50%;
                        margin-bottom: 15px;
                    }

                    .counter-icon i {
                        font-size: 28px;
                        color: #4CAF50;
                    }

                    .counter-number-wrapper {
                        margin-bottom: 10px;
                    }

                    .dtr-counter__number {
                        font-size: 3.5rem;
                        font-weight: 700;
                        color: white;
                        display: block;
                    }

                    .counter-label-wrapper {
                        position: relative;
                        background: transparent;
                    }

                    .dtr-counter__heading {
                        font-size: 1.1rem;
                        font-weight: 500;
                        color: #e0e0e0;
                        position: relative;
                        padding-bottom: 10px;
                        background: transparent;
                        display: inline-block;
                        width: auto;
                        transform: none;
                    }

                    .dtr-counter__heading:after {
                        content: '';
                        position: absolute;
                        bottom: 0;
                        left: 50%;
                        transform: translateX(-50%);
                        width: 40px;
                        height: 2px;
                        background-color: #4CAF50;
                    }

                    @media (max-width: 768px) {
                        .dtr-counter {
                            width: 100%;
                            max-width: 280px;
                            margin: 0 auto 20px;
                        }
                    }
                </style>
            </section>
            <!--===== counter section ends =====-->


            <!--===== resume section starts =====-->
            <section class="dtr-section padding-y-100 " id="acheivment">
                <div class="container">
                    <div class="row">

                        <!--== intro starts ==-->
                        <div class="col-12">
                            <div class="dtr-intro width-50-center-align">
                                <h2 class="dtr-intro__heading">Achievements & Certifications</h2>
                                <div class="dtr-intro__divider mx-auto"></div>
                                <p><b>Showcasing a journey of professional success, learning, and leadership</b></p>
                            </div>
                        </div>
                        <!--== intro ends ==-->

                        <!-- spacer -->
                        <span class="spacer spacer-30"></span>

                        <!--== column 1 starts ==-->
                        <div class="col-12 col-md-6">

                            <!-- box 1 starts -->
                            <div class="padding-50 text-color-white wow animate__fadeIn mobile-bg-1">
                                <h5>Work Experience</h5>

                                <!-- timeline item starts -->
                                <div class="dtr-timeline">
                                    <span class="dtr-timeline__heading timeline-year">2022 - Present</span>
                                    <h6 class="dtr-timeline__heading">Managing Director</h6>
                                    <div class="dtr-timeline__content">Ignite Learning & Consultancy Pvt. Ltd<br>Sri Lanka</div>
                                </div>
                                <!-- timeline item ends -->

                                <span class="spacer spacer-30"></span>

                                <!-- timeline item starts -->
                                <div class="dtr-timeline">
                                    <span class="dtr-timeline__heading timeline-year">2017 – 2022</span>
                                    <h6 class="dtr-timeline__heading">Consultant</h6>
                                    <div class="dtr-timeline__content">Alcor Management Consultancy Pvt. Ltd<br>
                                        Maldives</div>
                                </div>
                                <!-- timeline item ends -->

                                <span class="spacer spacer-30"></span>

                                <!-- timeline item starts -->
                                <div class="dtr-timeline">
                                    <span class="dtr-timeline__heading timeline-year">2010 – 2017</span>
                                    <h6 class="dtr-timeline__heading">Chief Operating Officer</h6>
                                    <div class="dtr-timeline__content">Focus Education Centre<br>
                                        Maldives</div>
                                </div>
                                <span class="spacer spacer-30"></span>

                                <div class="dtr-timeline">
                                    <span class="dtr-timeline__heading timeline-year">2005 – 2010</span>
                                    <h6 class="dtr-timeline__heading">Various Roles in Sales & Customer Support</h6>
                                    <div class="dtr-timeline__content">Sri Lanka<br></div>
                                </div>
                                <!-- timeline item ends -->

                            </div>
                            <!-- box 1 ends -->

                            <!-- spacer -->
                            <span class="spacer spacer-30"></span>

                            <!-- box 2 starts -->
                            <div class="padding-50 mobile-bg-2">
                                <h5>Key Abilities</h5>

                                <!-- inner row - for feature columns starts -->
                                <div class="dtr-timeline">
                                    <h6 class="dtr-timeline__heading ability-heading">Leadership and Strategic Planning</h6>
                                    <div class="dtr-timeline__content">Proven track record of delivering transformative results in corporate training and development.<br></div>
                                </div>
                                <!-- timeline item ends -->

                                <span class="spacer spacer-20"></span>

                                <!-- timeline item starts -->
                                <div class="dtr-timeline">
                                    <h6 class="dtr-timeline__heading ability-heading">Multicultural Expertise</h6>
                                    <div class="dtr-timeline__content">Over 20 years of experience across Sri Lanka, Maldives, and India in diverse industries<br></div>
                                </div>
                                <!-- timeline item ends -->

                                <span class="spacer spacer-20"></span>

                                <!-- timeline item starts -->
                                <div class="dtr-timeline">
                                    <h6 class="dtr-timeline__heading ability-heading">Client-Centric Approach</h6>
                                    <div class="dtr-timeline__content">Delivered solutions to prestigious clients such as Virtusa, Maldivian Airlines, and Bank of Maldives.<br>
                                        </div>
                                </div>
                                <!-- inner row - for feature columns ends -->

                            </div>
                            <!-- box 2 ends -->

                        </div>
                        <!--== column 1 ends ==-->

                        <!--== column 2 starts ==-->
                        <div class="col-12 col-md-6 small-device-top-space" >

                            <!-- box 1 starts -->
                            <div class="padding-50 text-color-white wow animate__fadeIn mobile-bg-3" data-wow-delay=".4s">
                                <h5>Academic Achievement</h5>

                                <!-- timeline item starts -->
                                <div class="dtr-timeline">
                                    <h6 class="dtr-timeline__heading ability-heading">Master of Business Administration (MBA)</h6>
                                    <div class="dtr-timeline__content">Open University of Malaysia.<br>
                                        Graduated with Distinction and College Book Award for academic excellence.</div>
                                </div>
                                <!-- timeline item ends -->

                                <span class="spacer spacer-30"></span>

                                <!-- timeline item starts -->
                                <div class="dtr-timeline">
                                    <h6 class="dtr-timeline__heading ability-heading">Professional Diploma in Marketing</h6>
                                    <div class="dtr-timeline__content">Chartered Institute of Marketing (CIM), UK.<br>
                                        Enhanced expertise in strategic marketing and business development.</div>
                                </div>
                                <!-- timeline item ends -->

                                <span class="spacer spacer-30"></span>

                                <!-- timeline item starts -->
                                <div class="dtr-timeline">
                                    <h6 class="dtr-timeline__heading ability-heading">Professional Certifications</h6>
                                    <div class="dtr-timeline__content">Certified Trainer from Door South Asia and Certified Drama-Based Facilitator.<br>
                                        </div>
                                </div>

                            </div>
                            <!-- box 1 ends -->

                            <!-- spacer -->
                            <span class="spacer spacer-30"></span>

                            <!-- box 2 starts -->
                            <div class="padding-50 text-color-white wow animate__fadeIn mobile-bg-4" data-wow-delay=".4s">
                                <h5>Technical Skills</h5>

                                <!-- timeline item starts -->
                                <div class="dtr-timeline">
                                    <h6 class="dtr-timeline__heading ability-heading">Corporate Training Development</h6>
                                    <div class="dtr-timeline__content">Expert in developing training programs on leadership, management, and strategic thinking.
                                        <br></div>
                                </div>
                                <!-- timeline item ends -->

                                <span class="spacer spacer-30"></span>

                                <!-- timeline item starts -->
                                <div class="dtr-timeline">
                                    <h6 class="dtr-timeline__heading ability-heading">Content Development</h6>
                                    <div class="dtr-timeline__content">Experienced in creating impactful training modules and consultancy frameworks.<br></div>
                                </div>
                                <!-- timeline item ends -->

                                <span class="spacer spacer-30"></span>

                                <!-- timeline item starts -->
                                <div class="dtr-timeline">
                                    <h6 class="dtr-timeline__heading ability-heading">Technical Knowledge</h6>
                                    <div class="dtr-timeline__content">Advanced understanding of IT infrastructure and business solutions.<br>
                                        </div>
                                </div>

                                <span class="spacer spacer-20"></span>

                                <div class="dtr-timeline">
                                    <h6 class="dtr-timeline__heading ability-heading">Soft Skills Training</h6>
                                    <div class="dtr-timeline__content">Skilled in delivering people skills, ethics, and supervisory workshops.<br>
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
                        background-color: #f8f9fa;
                    }

                    /* Intro Section */
                    #acheivment .dtr-intro__heading {
                        color: #002244;
                        margin-bottom: 15px;
                    }

                    #acheivment .dtr-intro__divider {
                        width: 80px;
                        height: 3px;
                        background-color: #228B22;
                        margin-bottom: 20px;
                    }

                    #acheivment .dtr-intro p {
                        color: #555;
                        font-size: 1.1rem;
                    }

                    /* Box Styles */
                    #acheivment .mobile-bg-1,
                    #acheivment .mobile-bg-4 {
                        background-color: #002244;
                        border-radius: 8px;
                        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                    }

                    #acheivment .mobile-bg-2,
                    #acheivment .mobile-bg-3 {
                        background-color: #1a5276;
                        border-radius: 8px;
                        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                    }

                    /* Heading Styles */
                    #acheivment h5 {
                        color: #fff;
                        font-size: 1.5rem;
                        border-bottom: 2px solid #228B22;
                        padding-bottom: 10px;
                        margin-bottom: 20px;
                    }

                    #acheivment .timeline-year {
                        color: #4CAF50;
                    }

                    #acheivment .dtr-timeline__heading {
                        color: #fff;
                        font-size: 1.2rem;
                    }

                    #acheivment .ability-heading {
                        color: #4CAF50;
                        font-size: 1.2rem;
                    }

                    #acheivment .dtr-timeline__content {
                        color: #e0e0e0;
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
                </style>
            </section>

               <!--===== client section starts =====-->
               <section class="dtr-section padding-y-100 client-section" id="client">
                <div class="container">

                    <!--== intro starts ==-->
                    <div class="row">
                        <div class="col-12">
                            <div class="dtr-intro width-50-center-align">
                                <h2 class="dtr-intro__heading">My Clients</h2>
                                <div class="dtr-intro__divider mx-auto"></div>
                                <p><b>Proud to have collaborated with renowned organizations, delivering tailored solutions that drive success and lasting partnerships.</b></p>
                            </div>
                        </div>
                    </div>
                    <!--== intro ends ==-->

                    <!-- spacer -->
                    <span class="spacer spacer-30"></span>

                    <div class="row g-0">

                        <!--== column 1 starts ==-->
                        <div class="col-12 col-md-3">

                            <!-- client box starts -->
                            <div class="dtr-client-box client-box-navy">
                                <div class="dtr-client-box__content">
                                    <img src="assets/images/client-1.png" alt="client-1">
                                </div>
                            </div>
                            <!-- client box ends -->

                            <!-- client box starts -->
                            <div class="dtr-client-box client-box-blue">
                                <div class="dtr-client-box__content">
                                    <img src="assets/images/client-5.png" alt="client-5">
                                </div>
                            </div>
                            <!-- client box ends -->

                        </div>
                        <!--== column 1 ends ==-->

                        <!--== column 2 starts ==-->
                        <div class="col-12 col-md-3">

                            <!-- client box starts -->
                            <div class="dtr-client-box client-box-blue">
                                <div class="dtr-client-box__content">
                                    <img src="assets/images/client-2.png" alt="client-2">
                                </div>
                            </div>
                            <!-- client box ends -->

                            <!-- client box starts -->
                            <div class="dtr-client-box client-box-navy">
                                <div class="dtr-client-box__content">
                                    <img src="assets/images/client-4.png" alt="client-4">
                                </div>
                            </div>
                            <!-- client box ends -->

                        </div>
                        <!--== column 2 ends ==-->

                        <!--== column 3 starts ==-->
                        <div class="col-12 col-md-3">

                            <!-- client box starts -->
                            <div class="dtr-client-box client-box-navy">
                                <div class="dtr-client-box__content">
                                    <img src="assets/images/client-6.png" alt="client-6">
                                </div>
                            </div>
                            <!-- client box ends -->

                            <!-- client box starts -->
                            <div class="dtr-client-box client-box-blue">
                                <div class="dtr-client-box__content">
                                    <img src="assets/images/client-3.png" alt="client-3">
                                </div>
                            </div>
                            <!-- client box ends -->

                        </div>
                        <!--== column 3 ends ==-->

                        <!--== column 4 starts ==-->
                        <div class="col-12 col-md-3">

                            <!-- client box starts -->
                            <div class="dtr-client-box client-box-blue">
                                <div class="dtr-client-box__content">
                                    <img src="assets/images/client-7.png" alt="client-7">
                                </div>
                            </div>
                            <!-- client box ends -->

                            <!-- client box starts -->
                            <div class="dtr-client-box client-box-navy">
                                <div class="dtr-client-box__content">
                                    <img src="assets/images/client-8.png" alt="client-8">
                                </div>
                            </div>
                            <!-- client box ends -->

                        </div>
                        <!--== column 4 ends ==-->

                    </div>
                </div>
                <style>
                    /* Client Section Styles */
                    .client-section {
                        background-color: #f8f9fa;
                        position: relative;
                        overflow: hidden;
                    }

                    .client-section:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: linear-gradient(135deg, rgba(0,50,102,0.03) 0%, rgba(78,116,155,0.03) 100%);
                        z-index: 0;
                    }

                    .client-section .container {
                        position: relative;
                        z-index: 1;
                    }

                    .client-section .dtr-intro__heading {
                        color: #002244;
                        margin-bottom: 15px;
                    }

                    .client-section .dtr-intro__divider {
                        width: 80px;
                        height: 3px;
                        background-color: #228B22;
                        margin-bottom: 20px;
                    }

                    .client-section p {
                        color: #555;
                        font-size: 1.1rem;
                    }

                    .dtr-client-box {
                        position: relative;
                        overflow: hidden;
                        transition: all 0.3s ease;
                        margin: 0;
                        border: 1px solid rgba(0,0,0,0.05);
                    }

                    .client-box-navy {
                        background-color: #002244;
                    }

                    .client-box-blue {
                        background-color: #4E749B;
                    }

                    .dtr-client-box:hover {
                        transform: translateY(-5px);
                        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
                        z-index: 2;
                    }

                    .dtr-client-box:after {
                        content: '';
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        width: 100%;
                        height: 3px;
                        background-color: #228B22;
                        transform: scaleX(0);
                        transition: transform 0.3s ease;
                    }

                    .dtr-client-box:hover:after {
                        transform: scaleX(1);
                    }

                    .dtr-client-box__content {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        padding: 40px 20px;
                        height: 150px;
                    }

                    .dtr-client-box__content img {
                        max-width: 80%;
                        max-height: 80%;
                        filter: brightness(0) invert(1);
                        opacity: 0.8;
                        transition: all 0.3s ease;
                    }

                    .dtr-client-box:hover .dtr-client-box__content img {
                        opacity: 1;
                        transform: scale(1.05);
                    }

                    @media (max-width: 768px) {
                        .dtr-client-box__content {
                            height: 120px;
                            padding: 25px 15px;
                        }

                        .client-section .dtr-intro__heading {
                            font-size: 2rem;
                        }

                        .client-section p {
                            font-size: 1rem;
                        }
                    }
                </style>
            </section>
            <!--===== client section ends =====-->


            <!--===== works section starts =====-->
            <section id="Gallery" class="dtr-section gallery-section">

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
                <div class="container">
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
                        background-color: #003366;
                        padding: 80px 0;
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
                        background-color: #228B22;
                        margin: 0 auto 25px;
                    }

                    .gallery-btn {
                        background-color: #228B22;
                        border: none;
                        padding: 12px 25px;
                        border-radius: 4px;
                        transition: all 0.3s ease;
                        display: inline-block;
                        margin-top: 15px;
                    }

                    .gallery-btn:hover {
                        background-color: #1a6b1a;
                        transform: translateY(-3px);
                        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                    }

                    .gallery-grid {
                        display: grid;
                        grid-template-columns: repeat(4, 1fr);
                        gap: 20px;
                        max-width: 1200px;
                        margin: 0 auto;
                    }

                    .gallery-item {
                        position: relative;
                        overflow: hidden;
                        border-radius: 8px;
                        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
                    }

                    .gallery-item-wrapper {
                        position: relative;
                        width: 100%;
                        height: 0;
                        padding-bottom: 75%; /* Square aspect ratio */
                        overflow: hidden;
                    }

                    .gallery-item-img {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                    }

                    .gallery-item-img img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        transition: transform 0.5s ease;
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
                        background-color: #228B22;
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

                <!-- Lightbox JavaScript -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
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
            <!--===== works section ends =====-->


            <!--===== testimonial section starts =====-->
            <section id="Testimonials" class="dtr-section bg-color-secondary-light padding-y-100" style="background-color: white">
                <div class="container">
                    <div class="row">

                        <!--== intro starts ==-->
                        <div class="col-12" style="color: black;">
                            <div class="dtr-intro width-50-center-align">
                                <h2 class="dtr-intro__heading">What People Say</h2>
                            </div>
                        </div>
                        <!--== intro ends ==-->

                        <!-- spacer -->
                        <span class="spacer spacer-10"></span>

                        <!--== column starts ==-->
                        <div class="col-12">

                            <!--== slider starts ==-->
                            <div class="swiper dtr-swiper swiper-container dtr-testimonial-carousel dtr-slider-has-arrows clearfix">
                                <div class="swiper-wrapper">

                                    <!--== slide 1 starts ==-->
                                    <div class="swiper-slide">
                                        <div class="dtr-testimonial"><img class="dtr-testimonial__client-img" src="assets/images/testm-user3-100x100.jpg" alt="Mark Robison">
                                            <div class="dtr-testimonial__content">
                                                <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            </div>
                                            <div class="dtr-testimonial__client-info"><span class="dtr-testimonial__icon"></span>
                                                <h5 class="dtr-testimonial__client-name" style="color: black;">Mark Robison</h5>
                                                <p class="dtr-testimonial__client-job" style="color: black;">Founder@ACME Inc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== slide 1 ends ==-->

                                    <!--== slide 2 starts ==-->
                                    <div class="swiper-slide">
                                        <div class="dtr-testimonial"><img class="dtr-testimonial__client-img" src="assets/images/testm-user1-100x100.jpg" alt="Thomas Luze">
                                            <div class="dtr-testimonial__content">
                                                <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            </div>
                                            <div class="dtr-testimonial__client-info"><span class="dtr-testimonial__icon"></span>
                                                <h5 class="dtr-testimonial__client-name" style="color: black;">Thomas Luze</h5>
                                                <p class="dtr-testimonial__client-job" style="color: black;">CTO, MUW Studio</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== slide 2 ends ==-->

                                    <!--== slide 3 starts ==-->
                                    <div class="swiper-slide">
                                        <div class="dtr-testimonial"><img class="dtr-testimonial__client-img" src="assets/images/testm-user2-100x100.jpg" alt="Andrea De Santis">
                                            <div class="dtr-testimonial__content">
                                                <p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                            </div>
                                            <div class="dtr-testimonial__client-info"><span class="dtr-testimonial__icon"></span>
                                                <h5 class="dtr-testimonial__client-name" style="color: black;">Andrea De Santis</h5>
                                                <p class="dtr-testimonial__client-job" style="color: black;">Owner, Foundant Factory</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== slide 3 ends ==-->

                                </div>
                                <div class="swiper-button-next dtr-swiper-button dtr-testimonial__next" role="button" aria-label="Next slide"></div>
                                <div class="swiper-button-prev dtr-swiper-button dtr-testimonial__prev" role="button" aria-label="Previous slide"></div>
                            </div>
                            <!--== slider ends ==-->

                        </div>
                        <!--== column ends ==-->

                    </div>
                </div>
            </section>
            <!--===== testimonial section ends =====-->

            <!--===== pricing section starts =====-->
<!--            <section id="pricing" class="dtr-section padding-y-100">-->
<!--                <div class="container">-->
<!--                    <div class="row">-->

<!--                        &lt;!&ndash;== intro starts ==&ndash;&gt;-->
<!--                        <div class="col-12">-->
<!--                            <div class="dtr-intro width-50-center-align">-->
<!--                                <h2 class="dtr-intro__heading">Plans & Pricing</h2>-->
<!--                                <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        &lt;!&ndash;== intro ends ==&ndash;&gt;-->

<!--                        &lt;!&ndash; spacer &ndash;&gt;-->
<!--                        <span class="spacer spacer-10"></span>-->

<!--                        &lt;!&ndash;== column 1 starts ==&ndash;&gt;-->
<!--                        <div class="col-12 col-md-4">-->

<!--                            &lt;!&ndash; pricing table starts &ndash;&gt;-->
<!--                            <div class="dtr-pricing dtr-pricing&#45;&#45;animation wow animate__fadeIn">-->
<!--                                <div class="dtr-pricing__tagline">Most Affordable</div>-->
<!--                                <div class="dtr-pricing__icon-wrapper">-->
<!--                                    <span class="dtr-pricing__icon">-->
<!--                                        <i aria-hidden="true" class="icon-baby-carriage-solid"></i>-->
<!--                                    </span>-->
<!--                                </div>-->
<!--                                <h3 class="dtr-pricing__heading">Weekly</h3>-->
<!--                                <div class="dtr-pricing__description">-->
<!--                                    <ul>-->
<!--                                        <li>3 Revisions Per Project</li>-->
<!--                                        <li>Limited Customization</li>-->
<!--                                        <li>Limited Updates</li>-->
<!--                                        <li>24/7 Support</li>-->
<!--                                        <li>SEO &amp; Marketing Tips</li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                                <p class="dtr-pricing__price"><span class="dtr-pricing__currency">$</span>99</p>-->
<!--                                <a href="#" class="dtr-btn dtr-pricing__btn" role="button"><span class="dtr-btn__text">Get Started Now</span></a>-->
<!--                            </div>-->
<!--                            &lt;!&ndash; pricing table ends &ndash;&gt;-->

<!--                        </div>-->
<!--                        &lt;!&ndash;== column 1 ends ==&ndash;&gt;-->

<!--                        &lt;!&ndash;== column 2 starts ==&ndash;&gt;-->
<!--                        <div class="col-12 col-md-4 small-device-top-space">-->

<!--                            &lt;!&ndash; pricing table starts &ndash;&gt;-->
<!--                            <div class="dtr-pricing dtr-pricing&#45;&#45;animation dtr-pricing&#45;&#45;clr-scheme3 wow animate__fadeIn" data-wow-delay=".3s">-->
<!--                                <div class="dtr-pricing__tagline">Value for Money</div>-->
<!--                                <div class="dtr-pricing__icon-wrapper">-->
<!--                                    <span class="dtr-pricing__icon">-->
<!--                                        <i aria-hidden="true" class="icon-shuttle-space-solid"></i>-->
<!--                                    </span>-->
<!--                                </div>-->
<!--                                <h3 class="dtr-pricing__heading">Projectwise</h3>-->
<!--                                <div class="dtr-pricing__description">-->
<!--                                    <ul>-->
<!--                                        <li>Unlimited Revisions</li>-->
<!--                                        <li>Complete Customization</li>-->
<!--                                        <li>Unlimited updates</li>-->
<!--                                        <li>24/7 Priority Support</li>-->
<!--                                        <li>Full SEO Optimization</li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                                <p class="dtr-pricing__price"><span class="dtr-pricing__currency">$</span>399</p>-->
<!--                                <a href="#" class="dtr-btn dtr-pricing__btn" role="button"><span class="dtr-btn__text">Get Started Now</span></a>-->
<!--                            </div>-->
<!--                            &lt;!&ndash; pricing table ends &ndash;&gt;-->

<!--                        </div>-->
<!--                        &lt;!&ndash;== column 2 ends ==&ndash;&gt;-->

<!--                        &lt;!&ndash;== column 3 starts ==&ndash;&gt;-->
<!--                        <div class="col-12 col-md-4 small-device-top-space">-->

<!--                            &lt;!&ndash; pricing table starts &ndash;&gt;-->
<!--                            <div class="dtr-pricing dtr-pricing&#45;&#45;animation dtr-pricing&#45;&#45;clr-scheme2 wow animate__fadeIn" data-wow-delay="0.6s">-->
<!--                                <div class="dtr-pricing__tagline">Most Affordable</div>-->
<!--                                <div class="dtr-pricing__icon-wrapper">-->
<!--                                    <span class="dtr-pricing__icon">-->
<!--                                        <i aria-hidden="true" class="icon-truck-monster-solid"></i>-->
<!--                                    </span>-->
<!--                                </div>-->
<!--                                <h3 class="dtr-pricing__heading">Monthly</h3>-->
<!--                                <div class="dtr-pricing__description">-->
<!--                                    <ul>-->
<!--                                        <li>6 Revisions Per Project</li>-->
<!--                                        <li>Moderate Customization</li>-->
<!--                                        <li>Limited Updates</li>-->
<!--                                        <li>24/7 Support</li>-->
<!--                                        <li>SEO &amp; Marketing Tips</li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                                <p class="dtr-pricing__price"><span class="dtr-pricing__currency">$</span>199</p>-->
<!--                                <a href="#" class="dtr-btn dtr-pricing__btn" role="button"><span class="dtr-btn__text">Get Started Now</span></a>-->
<!--                            </div>-->
<!--                            &lt;!&ndash; pricing table ends &ndash;&gt;-->

<!--                        </div>-->
<!--                        &lt;!&ndash;== column 3 ends ==&ndash;&gt;-->

<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->
            <!--===== pricing section ends =====-->
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

            <!--===== blog section starts =====-->
            <section id="Events" class="dtr-section events-section">
                <div class="container">
                    <!-- Section Header -->
                    <div class="events-header">
                        <div class="events-title-wrapper">
                            <h2 class="events-title">Events</h2>
                            <div class="events-divider"></div>
                        </div>
                        <a class="dtr-btn events-btn" href="{{route('frontend-event')}}" role="button">
                            <span class="dtr-btn__text">View More</span>
                        </a>
                    </div>

                    <!-- Events Slider -->
                    <div class="events-slider-container">
                        <div class="swiper dtr-swiper swiper-container dtr-recentposts-carousel">
                            <div class="swiper-wrapper">
                                @foreach ($events as $event)
                                    <div class="swiper-slide event-card">
                                        <!-- Event Image -->
                                        <div class="event-image-container">
                                            <a href="single-post.html">
                                                <img src="{{ asset('storage/' . ($event->eventImages->first()->image ?? 'default.jpg')) }}" alt="{{ $event->title }}">
                                                <div class="event-date-badge">
                                                    <span class="event-day">{{ $event->created_at->format('d') }}</span>
                                                    <span class="event-month">{{ $event->created_at->format('M') }}</span>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Event Content -->
                                        <div class="event-content">
                                            <h4 class="event-title">
                                                <a href="single-post.html">{{ $event->title }}</a>
                                            </h4>

                                            <div class="event-meta">
                                                <span class="event-author">
                                                    <i class="fas fa-user"></i> Author Name
                                                </span>
                                                <span class="event-location">
                                                    <i class="fas fa-map-marker-alt"></i> Event Location
                                                </span>
                                            </div>

                                            <div class="event-description">
                                                {{ \Illuminate\Support\Str::limit($event->description, 120) }}
                                            </div>

                                            <a href="{{ route('events.show', ['slug' => Str::slug($event->title) . '-' . $event->id]) }}" class="event-read-more">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Add navigation arrows -->
                            <div class="swiper-button-next events-nav-next"></div>
                            <div class="swiper-button-prev events-nav-prev"></div>
                        </div>
                    </div>
                </div>
                <style>
                    /* Events Section Styles */
                    .events-section {
                        background-color: #003366;
                        padding: 80px 0;
                        position: relative;
                    }

                    .events-section::before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: linear-gradient(135deg, rgba(0,34,68,0.95) 0%, rgba(0,50,102,0.95) 100%);
                        z-index: 0;
                    }

                    .events-section .container {
                        position: relative;
                        z-index: 1;
                    }

                    .events-header {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        margin-bottom: 40px;
                    }

                    .events-title {
                        color: white;
                        font-size: 2.5rem;
                        margin-bottom: 15px;
                    }

                    .events-divider {
                        width: 80px;
                        height: 3px;
                        background-color: #228B22;
                        margin-bottom: 10px;
                    }

                    .events-btn {
                        background-color: #228B22;
                        border: none;
                        padding: 12px 25px;
                        border-radius: 4px;
                        transition: all 0.3s ease;
                    }

                    .events-btn:hover {
                        background-color: #1a6b1a;
                        transform: translateY(-3px);
                        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                    }

                    .events-slider-container {
                        position: relative;
                        padding: 0 60px;
                    }

                    .event-card {
                        background-color: white;
                        border-radius: 8px;
                        overflow: hidden;
                        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
                        transition: all 0.3s ease;
                        height: 100%;
                        margin: 0 10px;
                    }

                    .event-card:hover {
                        transform: translateY(-10px);
                        box-shadow: 0 15px 30px rgba(0,0,0,0.25);
                    }

                    .event-image-container {
                        position: relative;
                        height: 220px;
                        overflow: hidden;
                    }

                    .event-image-container img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        transition: transform 0.5s ease;
                    }

                    .event-card:hover .event-image-container img {
                        transform: scale(1.1);
                    }

                    .event-date-badge {
                        position: absolute;
                        top: 15px;
                        right: 15px;
                        background-color: #228B22;
                        color: white;
                        padding: 10px;
                        border-radius: 4px;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        min-width: 60px;
                        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
                    }

                    .event-day {
                        font-size: 1.5rem;
                        font-weight: 700;
                        line-height: 1;
                    }

                    .event-month {
                        font-size: 0.9rem;
                        text-transform: uppercase;
                    }

                    .event-content {
                        padding: 25px;
                        color: #333;
                    }

                    .event-title {
                        font-size: 1.3rem;
                        margin-bottom: 15px;
                        font-weight: 600;
                    }

                    .event-title a {
                        color: #002244;
                        text-decoration: none;
                        transition: color 0.3s ease;
                    }

                    .event-title a:hover {
                        color: #228B22;
                    }

                    .event-meta {
                        display: flex;
                        gap: 15px;
                        margin-bottom: 15px;
                        font-size: 0.9rem;
                        color: #666;
                    }

                    .event-meta i {
                        color: #228B22;
                        margin-right: 5px;
                    }

                    .event-description {
                        margin-bottom: 20px;
                        color: #555;
                        line-height: 1.6;
                    }

                    .event-read-more {
                        display: inline-block;
                        color: #228B22;
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
                        background-color: #228B22;
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
                        background-color: #1a6b1a;
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
            <section id="Articles" class="dtr-section articles-section">
                <div class="container">
                    <!-- Section Header -->
                    <div class="articles-header">
                        <div class="articles-title-wrapper">
                            <h2 class="articles-title">Recent Articles</h2>
                            <div class="articles-divider"></div>
                        </div>
                        <a class="dtr-btn articles-btn" href="{{route('frontend-article')}}" role="button">
                            <span class="dtr-btn__text">View More</span>
                        </a>
                    </div>

                    <!-- Articles Slider -->
                    <div class="articles-slider-container">
                        <div class="swiper dtr-swiper swiper-container dtr-recentposts-carousel">
                            <div class="swiper-wrapper">
                                @foreach ($articles as $article)
                                    <div class="swiper-slide article-card">
                                        <!-- Article Image -->
                                        <div class="article-image-container">
                                            <a href="{{ route('article.show', ['slug' => Str::slug($article->title) . '-' . $article->id]) }}">
                                                <img src="{{ asset('storage/' . ($article->images->first()->image ?? 'default.jpg')) }}" alt="{{ $article->title }}">
                                                <div class="article-category">
                                                    <span>{{ $article->category->name ?? 'Uncategorized' }}</span>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- Article Content -->
                                        <div class="article-content">
                                            <div class="article-meta">
                                                <span class="article-date">
                                                    <i class="far fa-calendar-alt"></i> {{ $article->created_at->format('M d, Y') }}
                                                </span>
                                                <span class="article-author">
                                                    <i class="far fa-user"></i> Author Name
                                                </span>
                                            </div>

                                            <h4 class="article-title">
                                                <a href="{{ route('article.show', ['slug' => Str::slug($article->title) . '-' . $article->id]) }}">{{ $article->title }}</a>
                                            </h4>

                                            <div class="article-description">
                                                {{ \Illuminate\Support\Str::limit($article->description, 120) }}
                                            </div>

                                            <a href="{{ route('article.show', ['slug' => Str::slug($article->title) . '-' . $article->id]) }}" class="article-read-more">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Add navigation arrows -->
                            <div class="swiper-button-next articles-nav-next"></div>
                            <div class="swiper-button-prev articles-nav-prev"></div>
                        </div>
                    </div>
                </div>
                <style>
                    /* Articles Section Styles */
                    .articles-section {
                        background-color: #f8f9fa;
                        padding: 80px 0;
                        position: relative;
                    }

                    .articles-section::before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: linear-gradient(135deg, rgba(248,249,250,0.95) 0%, rgba(255,255,255,0.95) 100%);
                        z-index: 0;
                    }

                    .articles-section .container {
                        position: relative;
                        z-index: 1;
                    }

                    .articles-header {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        margin-bottom: 40px;
                    }

                    .articles-title {
                        color: #002244;
                        font-size: 2.5rem;
                        margin-bottom: 15px;
                    }

                    .articles-divider {
                        width: 80px;
                        height: 3px;
                        background-color: #228B22;
                        margin-bottom: 10px;
                    }

                    .articles-btn {
                        background-color: #228B22;
                        border: none;
                        padding: 12px 25px;
                        border-radius: 4px;
                        transition: all 0.3s ease;
                    }

                    .articles-btn:hover {
                        background-color: #1a6b1a;
                        transform: translateY(-3px);
                        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
                    }

                    .articles-slider-container {
                        position: relative;
                        padding: 0 60px;
                    }

                    .article-card {
                        background-color: white;
                        border-radius: 8px;
                        overflow: hidden;
                        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
                        transition: all 0.3s ease;
                        height: 100%;
                        margin: 0 10px;
                        border: 1px solid rgba(0,0,0,0.05);
                    }

                    .article-card:hover {
                        transform: translateY(-10px);
                        box-shadow: 0 15px 30px rgba(0,0,0,0.12);
                    }

                    .article-image-container {
                        position: relative;
                        height: 220px;
                        overflow: hidden;
                    }

                    .article-image-container img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        transition: transform 0.5s ease;
                    }

                    .article-card:hover .article-image-container img {
                        transform: scale(1.1);
                    }

                    .article-category {
                        position: absolute;
                        top: 15px;
                        left: 15px;
                        background-color: #228B22;
                        color: white;
                        padding: 5px 12px;
                        border-radius: 20px;
                        font-size: 0.8rem;
                        font-weight: 600;
                        text-transform: uppercase;
                        letter-spacing: 0.5px;
                        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                    }

                    .article-content {
                        padding: 25px;
                        color: #333;
                    }

                    .article-meta {
                        display: flex;
                        gap: 15px;
                        margin-bottom: 15px;
                        font-size: 0.9rem;
                        color: #666;
                    }

                    .article-meta i {
                        color: #228B22;
                        margin-right: 5px;
                    }

                    .article-title {
                        font-size: 1.3rem;
                        margin-bottom: 15px;
                        font-weight: 600;
                        line-height: 1.4;
                    }

                    .article-title a {
                        color: #002244;
                        text-decoration: none;
                        transition: color 0.3s ease;
                    }

                    .article-title a:hover {
                        color: #228B22;
                    }

                    .article-description {
                        margin-bottom: 20px;
                        color: #555;
                        line-height: 1.6;
                    }

                    .article-read-more {
                        display: inline-block;
                        color: #228B22;
                        font-weight: 600;
                        text-decoration: none;
                        transition: all 0.3s ease;
                    }

                    .article-read-more i {
                        margin-left: 5px;
                        transition: transform 0.3s ease;
                    }

                    .article-read-more:hover {
                        color: #002244;
                    }

                    .article-read-more:hover i {
                        transform: translateX(5px);
                    }

                    .articles-nav-next,
                    .articles-nav-prev {
                        color: white;
                        background-color: #228B22;
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        transition: all 0.3s ease;
                        position: absolute;
                        top: 50%;
                        transform: translateY(-50%);
                    }

                    .articles-nav-next {
                        right: 10px;
                    }

                    .articles-nav-prev {
                        left: 10px;
                    }

                    .articles-nav-next:hover,
                    .articles-nav-prev:hover {
                        background-color: #1a6b1a;
                        transform: translateY(-50%) scale(1.1);
                    }

                    @media (max-width: 768px) {
                        .articles-header {
                            flex-direction: column;
                            text-align: center;
                        }

                        .articles-title-wrapper {
                            margin-bottom: 20px;
                        }

                        .articles-divider {
                            margin: 0 auto 10px;
                        }

                        .article-image-container {
                            height: 180px;
                        }
                    }
                </style>
            </section>
            <!--===== blog section ends =====-->

            <!--===== contact section starts =====-->
            <section id="Contact" class="dtr-section bg-color-secondary-light padding-y-100" style="background-color: #003366;">
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


                        <!--== column 2 ends ==-->

                        @include('partials.footer')

                    </div>
                </div>
            </section>
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

        <!-- ===== main content area ends ===== -->

        <!-- footer section starts
================================================== -->
        <!-- <footer id="dtr-footer-section">
            <div class="container"> -->

                <!--== row 1 starts ==-->
                <!-- <div class="row"> -->

                    <!--== column 1 starts ==-->
                    <!-- <div class="col-12 col-md-6">
                        <div class="dtr-footer-col-shrink">
                            <a href="index.html"><img src="assets/images/logo.png" alt="logo" width="88" height="25"></a>
                            <span class="spacer spacer-20"></span>
                            <p>There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form.</p>
                        </div>
                    </div> -->
                    <!--== column 1 ends ==-->

                    <!--== column 2 starts ==-->
                    <!-- <div class="col-12 col-md-3 small-device-top-space">
                        <div class="dtr-footer-contact">
                            <p><a href="#">hello@example.com</a></p>
                            <p>12 345 678 90</p>
                            <p>Borough 47, Aveton Gifford,<br>Devon, UK, EX4 1QU</p>
                        </div>
                    </div> -->
                    <!--== column 2 ends ==-->

                    <!--== column 3 starts ==-->
                    <!-- <div class="col-12 col-md-3 text-right">
                        <div class="dtr-footer-contact small-device-top-space">
                            <p>Have a project in mind?</p>
                        </div>
                        <p class="dtr-footer-btn">
                            <a class="dtr-btn dtr-btn-contrast" href="#contact" role="button">
                                <span class="dtr-btn__text">Contact Me</span>
                            </a>
                        </p>
                    </div> -->
                    <!--== column 3 ends ==-->

                </div>
                <!--== row 1 ends ==-->

                <!--== row 2 starts ==-->
                <!-- <div class="dtr-copyright">
                    <div class="row"> -->

                        <!--== column 1 starts ==-->
                        <!-- <div class="col-12 col-md-6">
                            <div class="text-left">
                                <ul class="dtr-social">
                                    <li><a class="dtr-facebook" href="#" title="Facebook" target="_blank" rel="nofollow" aria-label="Facebook"></a></li>
                                    <li><a class="dtr-twitter" href="#" title="Twitter" target="_blank" rel="nofollow" aria-label="Twitter"></a></li>
                                    <li><a class="dtr-instagram" href="#" title="Instagram" target="_blank" rel="nofollow" aria-label="Instagram"></a></li>
                                </ul>
                            </div>
                        </div> -->
                        <!--== column 1 ends ==-->

                        <!--== column 2 starts ==-->
                        <!-- <div class="col-12 col-md-6 dtr-copyright-col-2">
                            <p>2024 &copy; Copr. Theme by Tansh</p>
                        </div> -->
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


<!-- Mirrored from tanshcreative.com/copr-st-preview/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Oct 2024 14:26:34 GMT -->
</html>
