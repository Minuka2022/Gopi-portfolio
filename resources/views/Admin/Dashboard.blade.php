<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Dash</title>
      <meta
         content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
         name="viewport"
         />
      <!-- Fonts and icons -->
      <script src="./assets-dash/js/plugin/webfont/webfont.min.js"></script>
      <script>
         WebFont.load({
           google: { families: ["Public Sans:300,400,500,600,700"] },
           custom: {
             families: [
               "Font Awesome 5 Solid",
               "Font Awesome 5 Regular",
               "Font Awesome 5 Brands",
               "simple-line-icons",
             ],
             urls: ["./assets-dash/css/fonts.min.css"],
           },
           active: function () {
             sessionStorage.fonts = true;
           },
         });
      </script>
      <!-- CSS Files -->
      <link rel="stylesheet" href="./assets-dash/css/bootstrap.min.css" />
      <link rel="stylesheet" href="./assets-dash/css/plugins.min.css" />
      <link rel="stylesheet" href="./assets-dash/css/kaiadmin.min.css" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link rel="stylesheet" href="./assets-dash/css/demo.css" />
   </head>
   <body>
      <div class="wrapper">
         <!-- Sidebar -->
         <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
               <!-- Logo Header -->
               <div class="logo-header" data-background-color="dark">
                  <a href="{{route('dashboard-home')}}" class="logo">

                     <p class="navbar-brand" style="color:white;">Gopi</p>
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
            @include('partials.sidebar')
         </div>
         <!-- End Sidebar -->
         <div class="main-panel">
            <div class="main-header">
               <div class="main-header-logo">
                  <!-- Logo Header -->
                  <div class="logo-header" data-background-color="dark">
                     <a href="{{route('dashboard-home')}}" class="logo">
                     <img
                        src="./assets-dash/img/kaiadmin/logo_light.svg"
                        alt="navbar brand"
                        class="navbar-brand"
                        height="20"
                        />
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
               <!-- Navbar Header -->
               <nav
                  class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
                  >
                  <div class="container-fluid">
                     <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                        <li class="nav-item topbar-user dropdown hidden-caret">
                           <a
                              class="dropdown-toggle profile-pic"
                              data-bs-toggle="dropdown"
                              href="#"
                              aria-expanded="false"
                              >
                              <div class="avatar-sm">
                                 <img
                                    src="assets-dash/img/profile.jpg"
                                    alt="..."
                                    class="avatar-img rounded-circle"
                                    />
                              </div>
                              <span class="profile-username">
                              <span class="op-7">Hi,</span>
                              <span class="fw-bold">Minuka</span>
                              </span>
                           </a>
                           </a>
                           <ul class="dropdown-menu dropdown-user animated fadeIn">
                              <div class="dropdown-user-scroll scrollbar-outer">
                                 <li>
                                    <div class="user-box">
                                       <div class="avatar-lg">
                                          <imgd
                                             src="assets-dash/img/profile.jpg"
                                             alt="image profile"
                                             class="avatar-img rounded"
                                             />
                                       </div>
                                       <div class="u-text">
                                          <h4>Hizrian</h4>
                                          <p class="text-muted">hello@example.com</p>
                                          <a
                                             href="/forms/Profile.php"
                                             class="btn btn-xs btn-secondary btn-sm"
                                             >View Profile</a
                                             >
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php">Logout</a>
                                 </li>
                              </div>
                           </ul>
                        </li>
                     </ul>
                  </div>
               </nav>
               <!-- End Navbar -->
            </div>
            <div class="container">
               <div class="page-inner">
                  <div class="page-header">
                     <h3 class="fw-bold mb-3">Subjects</h3>
                     <ul class="breadcrumbs mb-3">
                        <li class="nav-home">
                           <a href="{{route('dashboard-home')}}">
                           <i class="icon-home"></i>
                           </a>
                        </li>
                        <li class="separator">
                           <i class="icon-arrow-right"></i>
                        </li>
                        <li class="nav-item">
                           <a href="#">Manage Subjects</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <div class="d-flex align-items-center">
                              <h4 class="card-title">Manage Subjects</h4>
                              <button
                                 class="btn btn-primary btn-round ms-auto"
                                 data-bs-toggle="modal"
                                 data-bs-target="#addRowModal"
                                 >
                              <i class="fa fa-plus"></i>
                              Add Event
                              </button>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table id="multi-filter-select" class="display table table-striped table-hover">
                                 <thead>
                                    <tr>
                                       <th>Grade</th>
                                       <th>Subject</th>
                                       <th>Papers</th>
                                       <th style="width: 10%">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody id="subjectTableBody">
                                    <!-- Table rows will be dynamically generated here -->
                                    <td>${subject.grade}</td>
                                    <td>${subject.subject}</td>
                                    <td>${subject.papers}</td>
                                    <td>
                                       <div class="form-button-action">
                                          <button type="button" class="btn btn-link btn-primary btn-lg btn-edit-subject" data-bs-toggle="tooltip" title="Edit Task">
                                          <i class="fa fa-edit" style="pointer-events: none;"></i>
                                          </button>
                                          <!-- Hidden input field to store subject ID -->
                                          <input type="hidden" class="subject-id" value="${subject.id}">
                                          <button type="button" class="btn btn-link btn-danger btn-remove-subject" data-bs-toggle="tooltip" title="Remove">
                                          <i class="fa fa-times" style="pointer-events: none;"></i>
                                          </button>
                                       </div>
                                    </td>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Custom template | don't include it in your project! -->
      <!-- Modal -->
      <div class="modal fade" id="addRowModal" tabindex="-1" aria-labelledby="addRowModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="addRowModalLabel">Add Subject</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form id="addSubjectForm">
                     <div class="mb-3">
                        <label for="gradeSelect" class="form-label">Grade</label>
                        <select class="form-select" id="gradeSelect" name="grade_id" required>
                           <!-- Options will be populated dynamically using JavaScript -->
                        </select>
                     </div>
                     <div class="mb-3">
                        <label for="subjectName" class="form-label">Subject Name</label>
                        <input type="text" class="form-control" id="subjectName" name="subject_name" required>
                     </div>
                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-primary" id="addSubjectBtn">Add</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Edit Subject Modal -->
      <div class="modal fade" id="editSubjectModal" tabindex="-1" aria-labelledby="editSubjectModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="editSubjectModalLabel">Edit Subject</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form id="editSubjectForm">
                     <input type="hidden" id="editSubjectId">
                     <div class="mb-3">
                        <label for="editSubjectName" class="form-label">Subject Name</label>
                        <input type="text" class="form-control" id="editSubjectName" required>
                     </div>
                     <button type="submit" class="btn btn-primary">Save changes</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="custom-toggle">
         <i class="icon-settings"></i>
      </div>
      </div>
      <!-- End Custom template -->
      </div>
      <!--   Core JS Files   -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="{{ asset('assets-dash/js/core/jquery-3.7.1.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/core/popper.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/core/bootstrap.min.js') }}"></script>
      <!-- jQuery Scrollbar -->
      <script src="{{ asset('assets-dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
      <!-- Datatables -->
      <script src="{{ asset('assets-dash/js/plugin/datatables/datatables.min.js') }}"></script>
      <!-- Kaiadmin JS -->
      <script src="{{ asset('assets-dash/js/kaiadmin.min.js') }}"></script>
      <!-- Kaiadmin DEMO methods, don't include it in your project! -->
      <script src="{{ asset('assets-dash/js/setting-demo2.js') }}"></script>
      <script>
      </body>
      </html>
