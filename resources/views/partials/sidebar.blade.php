

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
            <li class="nav-item active">
              <a href="{{route('Dashboard-Article')}}" class="" aria-expanded="false">
                <i class="fas fa-home"></i>
                <p>Manage Article</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('Dashboard-Event')}}">
                <i class="fas fa-layer-group"></i>
                <p>Manage Event</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('Dashboard-Gallery')}}">
                <i class="fas fa-layer-group"></i>
                <p>Manage Gallery</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="Manage-Users.php">
                <i class="fas fa-users"></i>
                <p>Logout</p>
              </a>
            </li>


          </ul>
        </div>
      </div>
 </div>







