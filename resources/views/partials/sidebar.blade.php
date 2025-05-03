<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
       <!-- Logo Header -->
       <div class="logo-header" data-background-color="dark">
          <a href="{{route('Dashboard-Article')}}" class="logo">

             <p class="navbar-brand" style="color:white;">Gopi Dashboard</p>
          </a>

          <div class="nav-toggle">
             <button class="btn btn-toggle toggle-sidebar">
             <i class="gg-menu-right"></i>
             </button>
             <button class="btn btn-toggle sidenav-toggler">
             <i class="gg-menu-left"></i>
             </button>
          </div>
          <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
          </button>
       </div>
       <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <ul class="nav nav-secondary">
            <li class="nav-item {{ request()->routeIs('Dashboard-Article') ? 'active' : '' }}">
              <a href="{{route('Dashboard-Article')}}" class="" aria-expanded="false">
                <i class="fas fa-layer-group"></i>
                <p>Manage Article</p>
              </a>
            </li>

            <li class="nav-item {{ request()->routeIs('Dashboard-Event') ? 'active' : '' }}">
              <a href="{{route('Dashboard-Event')}}">
                <i class="fas fa-layer-group"></i>
                <p>Manage Event</p>
              </a>
            </li>

            <li class="nav-item {{ request()->routeIs('Dashboard-Gallery') ? 'active' : '' }}">
              <a href="{{route('Dashboard-Gallery')}}">
                <i class="fas fa-layer-group"></i>
                <p>Manage Gallery</p>
              </a>
            </li>

            <li class="nav-item {{ request()->routeIs('logout') ? 'active' : '' }}">
                <a href="{{ route('logout') }}">
                    <i class="fas fa-users"></i>
                    <p>Logout</p>
                </a>
            </li>
          </ul>
        </div>
      </div>
 </div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all sidebar nav items
    const navItems = document.querySelectorAll('.sidebar-content .nav-item');

    // Add click event listener to each nav item
    navItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remove active class from all items
            navItems.forEach(navItem => {
                navItem.classList.remove('active');
            });

            // Add active class to clicked item
            this.classList.add('active');
        });
    });
});
</script>
