<header id="dtr-header-global" class="fixed-top dtr-header" >

    <!-- == header content starts == -->
    <div class="dtr-header-global-content">

        <!-- header left starts -->
        <div class="dtr-header-left">
            <!-- logo -->
            <a class="logo-default" href="{{ route('frontend-Home') }}"><img src="assets/images/logo.png" alt="logo" width="88" height="25"></a>
            <!-- logo on scroll -->
            <a class="logo-alt" href="{{ route('frontend-Home') }}" ><img src="assets/images/logo.png" alt="logo" width="88" height="25"></a>
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
            <li class="menu-item"><a href="{{ route('frontend-Home') }}#home" class="nav-link" style="color: black;">Home</a></li>
            <li class="menu-item"><a href="{{ route('frontend-Home', ['section' => 'aboutme']) }}" class="nav-link" style="color: black;">About me</a></li>
            <li class="menu-item"><a href="{{ route('frontend-Home', ['section' => 'acheivment']) }}" class="nav-link" style="color: black;">Acheivment</a></li>
            <li class="menu-item"><a href="{{ route('frontend-Home', ['section' => 'client']) }}" class="nav-link" style="color: black;">My Client</a></li>
            <li class="menu-item"><a href="{{ route('frontend-Home', ['section' => 'gallery']) }}" class="nav-link" style="color: black;">Gallery</a></li>
            <li class="menu-item"><a href="{{ route('frontend-Home', ['section' => 'testimonials']) }}" class="nav-link" style="color: black;">Testimonials</a></li>
            <li class="menu-item"><a href="{{ route('frontend-Home', ['section' => 'events']) }}" class="nav-link" style="color: black;">Events</a></li>
            <li class="menu-item"><a href="{{ route('frontend-Home', ['section' => 'articles']) }}" class="nav-link" style="color: black;">Articles</a></li>
            <li class="menu-item"><a href="{{ route('frontend-Home', ['section' => 'contact']) }}" class="nav-link" style="color: black;">Contact</a></li>
        </ul>

    </div>
</header>
