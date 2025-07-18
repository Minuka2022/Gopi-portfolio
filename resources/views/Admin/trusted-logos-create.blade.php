<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Add Trusted Logo</title>
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
                        src="../assets-dash/img/kaiadmin/logo_light.svg"
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
                     <h3 class="fw-bold mb-3">Add New Trusted Logo</h3>
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
                           <a href="{{route('Dashboard-TrustedLogos')}}">Manage Trusted Logos</a>
                        </li>
                        <li class="separator">
                           <i class="icon-arrow-right"></i>
                        </li>
                        <li class="nav-item">
                           <a href="#">Add Trusted Logo</a>
                        </li>
                     </ul>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <div class="card-title">Trusted Logo Information</div>
                           </div>
                           <div class="card-body">
                              <form action="{{ route('Dashboard-Store-TrustedLogo') }}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="company_name">Company Name <span class="text-danger">*</span></label>
                                          <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" name="company_name" value="{{ old('company_name') }}" required>
                                          @error('company_name')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                          @enderror
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="display_order">Display Order</label>
                                          <input type="number" class="form-control @error('display_order') is-invalid @enderror" id="display_order" name="display_order" value="{{ old('display_order', 0) }}">
                                          @error('display_order')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                          @enderror
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="website_url">Website URL</label>
                                          <input type="url" class="form-control @error('website_url') is-invalid @enderror" id="website_url" name="website_url" value="{{ old('website_url') }}" placeholder="https://example.com">
                                          @error('website_url')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                          @enderror
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label for="is_active">Status</label>
                                          <select class="form-control @error('is_active') is-invalid @enderror" id="is_active" name="is_active">
                                             <option value="1" {{ old('is_active') == '1' ? 'selected' : '' }}>Active</option>
                                             <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
                                          </select>
                                          @error('is_active')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                          @enderror
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="logo_image">Logo Image <span class="text-danger">*</span></label>
                                          <input type="file" class="form-control @error('logo_image') is-invalid @enderror" id="logo_image" name="logo_image" required>
                                          @error('logo_image')
                                             <div class="invalid-feedback">{{ $message }}</div>
                                          @enderror
                                          <small class="form-text text-muted">Recommended size: 200x80px. Transparent PNG preferred.</small>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row mt-4">
                                    <div class="col-md-12">
                                       <button type="submit" class="btn btn-primary">Save Trusted Logo</button>
                                       <a href="{{ route('Dashboard-TrustedLogos') }}" class="btn btn-danger">Cancel</a>
                                    </div>
                                 </div>
                              </form>
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
      <script src="{{ asset('assets-dash/js/core/jquery-3.7.1.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/core/popper.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/core/bootstrap.min.js') }}"></script>
      <!-- jQuery Scrollbar -->
      <script src="{{ asset('assets-dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
      <!-- Kaiadmin JS -->
      <script src="{{ asset('assets-dash/js/kaiadmin.min.js') }}"></script>
      <!-- Kaiadmin DEMO methods, don't include it in your project! -->
      <script src="{{ asset('assets-dash/js/setting-demo2.js') }}"></script>
   </body>
</html>
