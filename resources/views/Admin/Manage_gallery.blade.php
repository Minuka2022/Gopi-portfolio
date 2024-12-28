<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Manage Gallery</title>
      <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />

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
      <link rel="stylesheet" href="./assets-dash/css/demo.css" />

      <!-- Custom Styles for Gallery Layout -->
      <style>
        /* Base layout styles */
        .card-body {
            padding: 20px;
            background: white;
        }

        /* Gallery grid layout */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            padding: 20px;
        }

        /* Individual gallery tile styling */
        .gallery-tile {
            aspect-ratio: 1;
            background: #e9ecef;
            border-radius: 4px;
            overflow: hidden;
            position: relative;
            transition: opacity 0.3s ease;
        }

        /* Add button tile styling */
        .add-tile {
            background: #e9ecef;
            cursor: pointer;
        }

        .add-image-btn {
            width: 100%;
            height: 100%;
            border: none;
            background: none;
            cursor: pointer;
            padding: 0;
            transition: background-color 0.3s ease;
        }

        .add-image-btn:hover {
            background: #dee2e6;
        }

        .add-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: #6c757d;
        }

        .add-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        /* Image container and image styling */
        .image-container {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Remove button styling */
        .remove-btn {
            position: absolute;
            top: 8px;
            right: 8px;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .remove-btn:hover {
            background: rgba(0, 0, 0, 0.7);
        }
      </style>
   </head>
   <body>
      <div class="wrapper">
         <!-- Sidebar -->
         <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
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
            </div>
            @include('partials.sidebar')
         </div>

         <div class="main-panel">
            <div class="main-header">
               <div class="main-header-logo">
                  <div class="logo-header" data-background-color="dark">
                     <a href="{{route('dashboard-home')}}" class="logo">
                        <img src="./assets-dash/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
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
               </div>

               <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                  <div class="container-fluid">
                     <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                        <li class="nav-item topbar-user dropdown hidden-caret">
                           <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                              <div class="avatar-sm">
                                 <img src="assets-dash/img/profile.jpg" alt="..." class="avatar-img rounded-circle" />
                              </div>
                              <span class="profile-username">
                                 <span class="op-7">Hi,</span>
                                 <span class="fw-bold">Minuka</span>
                              </span>
                           </a>
                           <ul class="dropdown-menu dropdown-user animated fadeIn">
                              <!-- Dropdown content remains the same -->
                           </ul>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>

            <div class="container">
               <div class="page-inner">
                  <div class="page-header">
                     <h3 class="fw-bold mb-3">Manage Gallery</h3>
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
                           <a href="#">Gallery</a>
                        </li>
                     </ul>
                  </div>

                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                           <!-- Gallery Grid Layout -->
                           <div class="gallery-grid">
                              <!-- Add Image Tile -->
                              <div class="gallery-tile add-tile">
                                <button type="button" class="add-image-btn" data-bs-toggle="modal" data-bs-target="#addImageModal">
                                    <div class="add-content">
                                        <span class="add-icon">+</span>
                                        <span>Add Image</span>
                                    </div>
                                </button>
                              </div>
                              <div class="modal fade" id="addImageModal" tabindex="-1" aria-labelledby="addImageModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addImageModalLabel">Choose an Image</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="imageForm">
                                                <div class="mb-3">
                                                    <label for="imageInput" class="form-label">Select Image</label>
                                                    <input type="file" class="form-control" id="imageInput" accept="image/*" required>
                                                    <div id="fileError" class="text-danger mt-2" style="display: none;">Please select a valid image file (jpg, png, gif).</div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Upload</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                              <!-- Demo Image Tiles - First Row -->
                              <div class="gallery-tile">
                                 <div class="image-container">
                                    <img src="/assets/images/post-img9-600x600.jpg" alt="">
                                    <span class="remove-btn">×</span>
                                 </div>
                              </div>
                              <div class="gallery-tile">
                                 <div class="image-container">
                                    <img src="/assets/images/post-img9-600x600.jpg" alt="Gallery image">
                                    <span class="remove-btn">×</span>
                                 </div>
                              </div>
                              <div class="gallery-tile">
                                 <div class="image-container">
                                    <img src="https://via.placeholder.com/300" alt="Gallery image">
                                    <span class="remove-btn">×</span>
                                 </div>
                              </div>

                              <!-- Second Row -->
                              <div class="gallery-tile">
                                 <div class="image-container">
                                    <img src="https://via.placeholder.com/300" alt="Gallery image">
                                    <span class="remove-btn">×</span>
                                 </div>
                              </div>
                              <div class="gallery-tile">
                                 <div class="image-container">
                                    <img src="https://via.placeholder.com/300" alt="Gallery image">
                                    <span class="remove-btn">×</span>
                                 </div>
                              </div>
                              <div class="gallery-tile">
                                 <div class="image-container">
                                    <img src="https://via.placeholder.com/300" alt="Gallery image">
                                    <span class="remove-btn">×</span>
                                 </div>
                              </div>
                              <div class="gallery-tile">
                                 <div class="image-container">
                                    <img src="https://via.placeholder.com/300" alt="Gallery image">
                                    <span class="remove-btn">×</span>
                                 </div>
                              </div>

                              <!-- Third Row -->
                              <div class="gallery-tile">
                                 <div class="image-container">
                                    <img src="https://via.placeholder.com/300" alt="Gallery image">
                                    <span class="remove-btn">×</span>
                                 </div>
                              </div>
                              <div class="gallery-tile">
                                 <div class="image-container">
                                    <img src="https://via.placeholder.com/300" alt="Gallery image">
                                    <span class="remove-btn">×</span>
                                 </div>
                              </div>
                              <div class="gallery-tile">
                                 <div class="image-container">
                                    <img src="https://via.placeholder.com/300" alt="Gallery image">
                                    <span class="remove-btn">×</span>
                                 </div>
                              </div>
                              <div class="gallery-tile">
                                 <div class="image-container">
                                    <img src="https://via.placeholder.com/300" alt="Gallery image">
                                    <span class="remove-btn">×</span>
                                 </div>
                              </div>
                              <!-- Forth Row -->

                              <div class="gallery-tile">
                                <div class="image-container">
                                   <img src="https://via.placeholder.com/300" alt="Gallery image">
                                   <span class="remove-btn">×</span>
                                </div>
                             </div>
                             <div class="gallery-tile">
                                <div class="image-container">
                                   <img src="https://via.placeholder.com/300" alt="Gallery image">
                                   <span class="remove-btn">×</span>
                                </div>
                             </div>
                             <div class="gallery-tile">
                                <div class="image-container">
                                   <img src="https://via.placeholder.com/300" alt="Gallery image">
                                   <span class="remove-btn">×</span>
                                </div>
                             </div>
                             <div class="gallery-tile">
                                <div class="image-container">
                                   <img src="https://via.placeholder.com/300" alt="Gallery image">
                                   <span class="remove-btn">×</span>
                                </div>
                             </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Core JS Files -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="{{ asset('assets-dash/js/core/jquery-3.7.1.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/core/popper.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/core/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/plugin/datatables/datatables.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/kaiadmin.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/setting-demo2.js') }}"></script>

      <!-- Image Removal Script -->
      <script>
         document.addEventListener('DOMContentLoaded', function() {
             // Get all remove buttons in the gallery
             const removeButtons = document.querySelectorAll('.remove-btn');

             // Add click event listener to each remove button
             removeButtons.forEach(button => {
                 button.addEventListener('click', function(e) {
                     // Prevent event bubbling
                     e.stopPropagation();

                     // Get the parent gallery tile element
                     const galleryTile = this.closest('.gallery-tile');

                     // Add fade-out animation
                     galleryTile.style.opacity = '0';

                     // Remove the element after animation completes
                     setTimeout(() => {
                         galleryTile.remove();
                     }, 300);
                 });
             });
         });

         document.getElementById('imageForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent default form submission

            const fileInput = document.getElementById('imageInput');
            const fileError = document.getElementById('fileError');
            const file = fileInput.files[0];

            // Check if a file is selected and its type
            if (file && file.type.match('image.*')) {
                alert('Image uploaded successfully!');
                fileError.style.display = 'none';
                // You can handle the file upload logic here
            } else {
                fileError.style.display = 'block';
            }
        });
      </script>
   </body>
</html>
