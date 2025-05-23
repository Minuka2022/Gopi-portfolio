<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Dash</title>
        <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Fonts and icons -->
        <script src="{{ asset('assets-dash/js/plugin/webfont/webfont.min.js') }}"></script>
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
                    urls: ["{{ asset('assets-dash/css/fonts.min.css') }}"],
                },
                active: function () {
                    sessionStorage.fonts = true;
                },
            });
        </script>

        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets-dash/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets-dash/css/plugins.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets-dash/css/kaiadmin.min.css') }}" />

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="{{ asset('assets-dash/css/demo.css') }}" />
    </head>

   <body>

    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Event Added!',
            text: "{{ session('success') }}",
            timer: 2000
        });
    </script>
    @endif

    @if (session('updated'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Event Updated!',
            text: "{{ session('success') }}",
            timer: 2000
        });
    </script>
    @endif

    @if (session('deleted'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Event Deleted!',
            text: "{{ session('success') }}",
            timer: 2000
        });
    </script>
    @endif



    @if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "{{ session('error') }}",
            timer: 2000
        });
    </script>
    @endif
      <div class="wrapper">
         <!-- Sidebar -->
         @include('partials.sidebar')
         <!-- End Sidebar -->
         <div class="main-panel">
            <div class="main-header">
               <div class="main-header-logo">
                  <!-- Logo Header -->
                  <div class="logo-header" data-background-color="dark">
                     <a href="{{route('Dashboard-Article')}}" class="logo">
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

               <!-- End Navbar -->
            </div>
            <div class="container">
               <div class="page-inner">
                  <div class="page-header">
                     <h3 class="fw-bold mb-3">Manage Event</h3>
                     <ul class="breadcrumbs mb-3">
                        <li class="nav-home">
                           <a href="{{route('Dashboard-Article')}}">
                           <i class="icon-home"></i>
                           </a>
                        </li>
                        <li class="separator">
                           <i class="icon-arrow-right"></i>
                        </li>
                        <li class="nav-item">
                           <a href="#">Manage Event</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <div class="d-flex align-items-center">

                              <button
                                 class="btn btn-primary btn-round ms-auto"
                                  onclick="window.location.href='{{ route('Dashboard-Create-Event') }}'"
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
                                       <th>No</th>
                                       <th>Name</th>
                                       <th>Created On</th>
                                       <th>Updated On</th>
                                       <th style="width: 10%">Action</th>
                                    </tr>
                                 </thead>
                                 @foreach ($events as $index => $event)


                                 <tbody id="subjectTableBody">
                                    <!-- Table rows will be dynamically generated here -->
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{$event->title}}</td>
                                    <td>{{ $event->created_at->format('d M Y, h:i A') }}</td>
                                    <td>{{ $event->updated_at->format('d M Y, h:i A') }}</td>
                                    <td>
                                       <div class="form-button-action">
                                          <button type="button" class="btn btn-link btn-primary btn-lg btn-edit-subject" data-bs-toggle="tooltip" title="Edit Task" onclick="location.href='{{ route('Dashbaord-Edit-Event', $event->id) }}'">
                                          <i class="fa fa-edit" style="pointer-events: none;"></i>
                                          </button>
                                          <!-- Hidden input field to store subject ID -->

                                          <form id="delete-event-form-{{$event->id}}" action="{{ route('Dashboard-delete-Event', ['id' => $event->id]) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('POST') <!-- Remove this if you don't need to simulate DELETE method -->
                                        </form>

                                        <button type="button" class="btn btn-link btn-danger delete-event-btn" data-id="{{ $event->id }}" data-bs-toggle="tooltip" title="Remove">
                                            <i class="fa fa-times" style="pointer-events: none;"></i>
                                        </button>

                                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                        <script>
                                            document.querySelectorAll('.delete-event-btn').forEach(button => {
                                                button.addEventListener('click', function() {
                                                    const eventId = this.getAttribute('data-id');

                                                    Swal.fire({
                                                        title: 'Are you sure?',
                                                        text: "You won't be able to revert this action!",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Yes, delete it!',
                                                        cancelButtonText: 'Cancel'
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            // Submit the corresponding form using POST method
                                                            document.getElementById(`delete-event-form-${eventId}`).submit();
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                       </div>
                                    </td>
                                 </tbody>
                                 @endforeach
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
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
