<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Create Event</title>
      <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
      <meta name="csrf-token" content="{{ csrf_token() }}">

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

      <!-- Custom Styles for Image Preview -->
      <style>
        .card-body {
            padding: 20px;
            background: white;
        }

        .add-images-section {
            background: #f6f5f5;
            padding: 15px;
            border-radius: 4px;
        }

        .image-preview {
            width: 110px;
            height: 110px;
            background: #dee2e6;
            position: relative;
            border-radius: 4px;
            transition: opacity 0.3s ease;
            opacity: 1;
            overflow: hidden;
        }

        .image-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .remove-btn {
            position: absolute;
            top: -1px;
            right: -1px;
            background: rgb(103, 103, 103);
            color: white;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 16px;
            z-index: 1;
        }

        .remove-btn:hover {
            background: rgba(0, 0, 0, 0.7);
        }

        .gap-2 { gap: 0.5rem !important; }
        .gap-3 { gap: 1rem !important; }
        .gap-4 { gap: 1.5rem !important; }

        /* Added styles for the file input */
        .image-input {
            display: none;
        }
      </style>
   </head>
   <body>
      <div class="wrapper">
         <!-- Sidebar -->
         <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
               <div class="logo-header" data-background-color="dark">
                  <a href="{{route('Dashboard-Article')}}" class="logo">
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
               <!-- Header content remains the same -->
               <div class="main-header-logo">
                  <div class="logo-header" data-background-color="dark">
                     <a href="{{route('Dashboard-Article')}}" class="logo">
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
                     <h3 class="fw-bold mb-3">Create Event</h3>
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
                           <a href="#">Create Event</a>
                        </li>
                     </ul>
                  </div>

                  <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <!-- Moved the Publish button inside the form -->
                                <button class="btn btn-primary btn-round ms-auto" >
                                    <i class="fa"></i>
                                    Publish
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <form id="eventForm" method="POST" enctype="multipart/form-data" action="{{ route('event.store') }}">
                                @csrf <!-- Add this if you're using Laravel -->
                                @method('post')

                                <!-- Corrected button to submit the form -->
                                <button type="submit">
                                    Send
                                </button>

                                <!-- Image Section -->
                                <div class="add-images-section mb-4">
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="d-flex align-items-center">
                                            <button type="button" class="btn btn-primary btn-round" data-bs-toggle="modal" data-bs-target="#addImageModal">
                                                <i class="fa"></i>
                                                Add Images
                                            </button>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="addImageModal" tabindex="-1" aria-labelledby="addImageModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="addImageModalLabel">Choose Images</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label for="imageInput" class="form-label">Select Images</label>
                                                            <input type="file" class="form-control" id="imageInput" accept="image/*" multiple>
                                                            <div id="fileError" class="text-danger mt-2" style="display: none;">Please select a valid image file (jpg, png, gif).</div>
                                                        </div>
                                                        <button type="button" class="btn btn-primary" id="uploadImagesButton">Upload</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Image Previews -->
                                    <div class="d-flex flex-wrap gap-4" id="imagePreviewContainer"></div>

                                    <!-- Hidden Input to Store Uploaded Image Paths -->
                                    <input type="hidden" name="images" id="imagePaths">
                                </div>

                                <!-- Title -->
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>

                                <!-- Description -->
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description" rows="4" required></textarea>
                                </div>

                                <!-- Paragraph -->
                                <div class="mb-3">
                                    <label class="form-label">Main Content</label>
                                    <textarea class="form-control" name="content" rows="10" required></textarea>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>

                <script>
                    const imageInput = document.getElementById('imageInput');
                    const uploadImagesButton = document.getElementById('uploadImagesButton');
                    const imagePreviewContainer = document.getElementById('imagePreviewContainer');
                    const imagePathsInput = document.getElementById('imagePaths');
                    const publishButton = document.getElementById('publishButton');

                    let uploadedImages = [];

                    // Handle Image Uploads
                    uploadImagesButton.addEventListener('click', async () => {
                        const files = imageInput.files;
                        if (!files.length) {
                            alert('Please select images to upload.');
                            return;
                        }

                        const formData = new FormData();
                        for (let i = 0; i < files.length; i++) {
                            formData.append('images[]', files[i]);
                        }

                        try {
                            const response = await fetch('/dashboard/upload-images', {
                                method: 'POST',
                                body: formData,
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                }
                            });
                            const result = await response.json();
                            if (response.ok) {
                                console.log('Uploaded image paths:', result.paths);
                                uploadedImages.push(...result.paths);
                                updateImagePreviews();
                                imagePathsInput.value = JSON.stringify(uploadedImages);
                                alert('Images uploaded successfully!');
                                $('#addImageModal').modal('hide');
                            } else {
                                alert(result.message || 'Failed to upload images.');
                            }
                        }catch (error) {
                            // If there's a network or unexpected error
                            console.error(error);
                            alert(`Unexpected Error: ${error.message}`);
                        }
                    });

                    // Update Image Previews
                    function updateImagePreviews() {
                        imagePreviewContainer.innerHTML = '';

                        uploadedImages.forEach(path => {
                            // Ensure the path includes 'EventImage' folder for your specific setup
                            const imageUrl = `/storage/EventImage/${path}`;  // Adjusted for your folder structure

                            const preview = document.createElement('div');
                            preview.className = 'image-preview';
                            preview.innerHTML = `
                                <img src="${imageUrl}" alt="Event image">
                                <span class="remove-btn" onclick="removeImage('${path}')">×</span>
                            `;
                            imagePreviewContainer.appendChild(preview);
                            console.log(imageUrl);  // Log the full image URL
                        });
                    }


                    // Remove Image
                    function removeImage(path) {
                        uploadedImages = uploadedImages.filter(image => image !== path);
                        updateImagePreviews();
                        imagePathsInput.value = JSON.stringify(uploadedImages);
                    }

                    // Handle Publish
                    publishButton.addEventListener('click', () => {
                        const form = document.getElementById('eventForm');
                        form.submit();
                    });
                </script>


               </div>
            </div>
         </div>
      </div>

      <!-- Modal content remains the same -->

      <!-- Core JS Files -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="{{ asset('assets-dash/js/core/jquery-3.7.1.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/core/popper.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/core/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/plugin/datatables/datatables.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/kaiadmin.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/setting-demo2.js') }}"></script>

      <!-- Image Preview Removal Script -->
      <script>
         // Wait for the document to be fully loaded
         document.addEventListener('DOMContentLoaded', function() {
             // Get all remove buttons
             const removeButtons = document.querySelectorAll('.remove-btn');

             // Add click event listener to each remove button
             removeButtons.forEach(button => {
                 button.addEventListener('click', function(e) {
                     // Prevent event bubbling
                     e.stopPropagation();

                     // Get the parent image preview element
                     const imagePreview = this.closest('.image-preview');

                     // Add a fade-out animation
                     imagePreview.style.opacity = '0';

                     // Remove the element after animation completes
                     setTimeout(() => {
                         imagePreview.remove();
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
