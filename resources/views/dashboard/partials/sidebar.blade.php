<!-- Sidebar -->
<nav class="sidebar" id="sidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('Dashboard-Article') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-chart-line"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Items -->
    <div class="sidebar-nav">
        <ul class="nav">
            <!-- Dashboard -->
            <li class="nav-item {{ request()->routeIs('Dashboard-Article') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Dashboard-Article') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Content Management
            </div>

            <!-- Testimonials -->
            <li class="nav-item {{ request()->routeIs('Dashboard-Testimonials') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Dashboard-Testimonials') }}">
                    <i class="fas fa-fw fa-quote-left"></i>
                    <span>Testimonials</span>
                </a>
            </li>

            <!-- Trusted Logos -->
            <li class="nav-item {{ request()->routeIs('Dashboard-TrustedLogos') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Dashboard-TrustedLogos') }}">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Trusted Logos</span>
                </a>
            </li>

            <!-- Articles -->
            <li class="nav-item {{ request()->routeIs('Dashboard-Article') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Dashboard-Article') }}">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Articles</span>
                </a>
            </li>

            <!-- Events -->
            <li class="nav-item {{ request()->routeIs('Dashboard-Event') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Dashboard-Event') }}">
                    <i class="fas fa-fw fa-calendar-alt"></i>
                    <span>Events</span>
                </a>
            </li>

            <!-- Gallery -->
            <li class="nav-item {{ request()->routeIs('Dashboard-Gallery') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Dashboard-Gallery') }}">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Gallery</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Settings -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Settings</span>
                    <i class="fas fa-fw fa-caret-down"></i>
                </a>
                <div id="collapseSettings" class="collapse">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Account Settings:</h6>
                        <a class="collapse-item" href="#">Profile</a>
                        <a class="collapse-item" href="#">Security</a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="collapse-item" href="{{ route('logout') }}" 
                               onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </a>
                        </form>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggle (Topbar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle">
                    <i class="fas fa-angle-left"></i>
                </button>
            </div>
        </ul>
    </div>
</nav>
<!-- End of Sidebar -->
