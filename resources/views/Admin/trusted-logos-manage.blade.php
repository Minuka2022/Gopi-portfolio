<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Manage Trusted Logos</title>
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
            title: 'Success!',
            text: "{{ session('success') }}",
            timer: 2000
        });
    </script>
    @endif

    @if (session('updated'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Logo Updated!',
            text: "{{ session('updated') }}",
            timer: 2000
        });
    </script>
    @endif

    @if (session('deleted'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Logo Deleted!',
            text: "{{ session('deleted') }}",
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
                     <h3 class="fw-bold mb-3">Manage Trusted Logos</h3>
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
                           <a href="#">Manage Trusted Logos</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header">
                           <div class="d-flex align-items-center">
                              <button
                                 class="btn btn-primary btn-round ms-auto"
                                 onclick="window.location.href='{{ route('Dashboard-Create-TrustedLogo') }}'"
                                 >
                              <i class="fa fa-plus"></i>
                              Add Trusted Logo
                              </button>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table id="multi-filter-select" class="display table table-striped table-hover">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Company Name</th>
                                       <th>Logo</th>
                                       <th>Order</th>
                                       <th>Status</th>
                                       <th style="width: 10%">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @forelse($trustedLogos as $logo)
                                    <tr>
                                       <td>{{ $logo->id }}</td>
                                       <td>{{ $logo->company_name }}</td>
                                       <td>
                                          @if($logo->logo_image)
                                             <img src="{{ asset($logo->logo_image) }}" alt="{{ $logo->company_name }}" height="40">
                                          @else
                                             No Image
                                          @endif
                                       </td>
                                       <td>{{ $logo->display_order }}</td>
                                       <td>
                                          <span class="badge {{ $logo->is_active ? 'badge-success' : 'badge-danger' }}">
                                             {{ $logo->is_active ? 'Active' : 'Inactive' }}
                                          </span>
                                       </td>
                                       <td>
                                          <div class="form-button-action">
                                             <button type="button" class="btn btn-link btn-primary btn-lg" data-bs-toggle="tooltip" title="Edit" onclick="location.href='{{ route('Dashboard-Edit-TrustedLogo', $logo->id) }}'">
                                                <i class="fa fa-edit" style="pointer-events: none;"></i>
                                             </button>

                                             <form id="delete-logo-form-{{$logo->id}}" action="{{ route('Dashboard-Delete-TrustedLogo', ['id' => $logo->id]) }}" method="POST" style="display: none;">
                                                @csrf
                                             </form>

                                             <button type="button" class="btn btn-link btn-danger delete-logo-btn" data-id="{{ $logo->id }}" data-bs-toggle="tooltip" title="Remove">
                                                <i class="fa fa-times" style="pointer-events: none;"></i>
                                             </button>
                                          </div>
                                       </td>
                                    </tr>
                                    @empty
                                    <tr>
                                       <td colspan="6" class="text-center">No trusted logos found</td>
                                    </tr>
                                    @endforelse
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
      
      <div class="custom-toggle">
         <i class="icon-settings"></i>
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
         // Delete confirmation for logos
         document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-logo-btn');
            
            deleteButtons.forEach(button => {
               button.addEventListener('click', function() {
                  const logoId = this.getAttribute('data-id');
                  
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
                        document.getElementById(`delete-logo-form-${logoId}`).submit();
                     }
                  });
               });
            });
            
            // Initialize DataTable
            $('#multi-filter-select').DataTable({
               "pageLength": 10,
               "language": {
                  "paginate": {
                     "previous": "<i class='fas fa-angle-left'></i>",
                     "next": "<i class='fas fa-angle-right'></i>"
                  }
               }
            });
         });
      </script>
   </body>
</html>
