<header id="dtr-header-global" class="fixed-top dtr-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Logo Area -->
            <div class="col-md-3">
                <div class="header-logo">
                    <a class="logo-default" href="{{ route('frontend-Home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="88" height="25"></a>
                    <a class="logo-alt" href="{{ route('frontend-Home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" width="88" height="25"></a>
                </div>
            </div>
            
            <!-- Navigation Area -->
            <div class="col-md-9">
                <nav class="main-navigation">
                    <ul class="horizontal-nav">
                        <li class="menu-item"><a href="{{ route('frontend-Home') }}#home" class="nav-link">Home</a></li>
                        <li class="menu-item"><a href="{{ route('frontend-Home') }}#aboutme" class="nav-link">About</a></li>
                        <li class="menu-item"><a href="{{ route('frontend-Home') }}#acheivment" class="nav-link">Achievements</a></li>
                        <li class="menu-item"><a href="{{ route('frontend-gallery') }}" class="nav-link">Gallery</a></li>
                        <li class="menu-item"><a href="{{ route('frontend-Home') }}#client" class="nav-link">Clients</a></li>
                        <li class="menu-item"><a href="{{ route('frontend-Home') }}#testimonials" class="nav-link">Testimonials</a></li>
                        <li class="menu-item"><a href="{{ route('frontend-event') }}" class="nav-link">Events</a></li>
                        <li class="menu-item"><a href="{{ route('frontend-article') }}" class="nav-link">Articles</a></li>
                        <li class="menu-item contact-btn"><a href="{{ route('frontend-Home') }}#Contact" class="nav-link">Contact</a></li>
                    </ul>
                </nav>
                
                <!-- Mobile Menu Button (only visible on small screens) -->
                <div class="mobile-menu-toggle d-md-none">
                    <button id="dtr-menu-button" class="dtr-hamburger" type="button" aria-label="Menu Button">
                        <span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu (hidden by default, shown when hamburger is clicked) -->
    <div class="mobile-menu">
        <div class="container">
            <ul class="mobile-nav">
                <li class="menu-item"><a href="{{ route('frontend-Home') }}#home" class="nav-link">Home</a></li>
                <li class="menu-item"><a href="{{ route('frontend-Home') }}#aboutme" class="nav-link">About</a></li>
                <li class="menu-item"><a href="{{ route('frontend-Home') }}#acheivment" class="nav-link">Achievements</a></li>
                <li class="menu-item"><a href="{{ route('frontend-gallery') }}" class="nav-link">Gallery</a></li>
                <li class="menu-item"><a href="{{ route('frontend-Home') }}#client" class="nav-link">Clients</a></li>
                <li class="menu-item"><a href="{{ route('frontend-Home') }}#testimonials" class="nav-link">Testimonials</a></li>
                <li class="menu-item"><a href="{{ route('frontend-event') }}" class="nav-link">Events</a></li>
                <li class="menu-item"><a href="{{ route('frontend-article') }}" class="nav-link">Articles</a></li>
                <li class="menu-item"><a href="{{ route('frontend-Home') }}#Contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</header>
