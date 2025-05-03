<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Manage Gallery</title>
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
      <link rel="stylesheet" href="{{ asset('assets-dash/css/demo.css') }}" />

      <!-- The original styles remain unchanged -->
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
            <div class="container">
               <div class="page-inner">
                  <div class="page-header">
                     <h3 class="fw-bold mb-3">Manage Gallery</h3>
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

                              <!-- Dynamic Gallery Images -->
                              @foreach($images as $image)
                              <div class="gallery-tile" data-id="{{ $image->id }}">
                                 <div class="image-container">
                                    <img src="{{ asset('storage/' . $image->photo) }}" alt="{{ $image->name }}">
                                    <span class="remove-btn" data-id="{{ $image->id }}">×</span>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Add Image Modal -->
      <div class="modal fade" id="addImageModal" tabindex="-1" aria-labelledby="addImageModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="addImageModalLabel">Upload New Image</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form id="imageUploadForm" enctype="multipart/form-data">
                     @csrf
                     <div class="mb-3">
                        <label for="image" class="form-label">Choose Image(s)</label>
                        <input type="file" class="form-control" id="image" name="images[]" accept="image/*" multiple required>
                        <div id="imageError" class="text-danger mt-2" style="display: none;"></div>
                     </div>
                     <div class="mb-3">
                        <div id="imagePreviewContainer" class="d-flex flex-wrap gap-2"></div>
                     </div>
                     <button type="submit" class="btn btn-primary">Upload Image</button>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <!-- Core JS Files -->
      <script src="{{ asset('assets-dash/js/core/jquery-3.7.1.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/core/popper.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/core/bootstrap.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/plugin/datatables/datatables.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/kaiadmin.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/setting-demo2.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <!-- Custom JavaScript -->
      <script>
         $(document).ready(function() {
             $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });

             // Image preview functionality
             $('#image').on('change', function() {
                 const previewContainer = $('#imagePreviewContainer');
                 previewContainer.empty(); // Clear previous previews

                 if (this.files) {
                     const files = Array.from(this.files);

                     files.forEach((file, index) => {
                         if (!file.type.match('image.*')) {
                             return;
                         }

                         const reader = new FileReader();

                         reader.onload = function(e) {
                             const previewDiv = $('<div>', {
                                 class: 'position-relative',
                                 'data-index': index,
                                 css: {
                                     width: '100px',
                                     height: '100px',
                                     overflow: 'hidden',
                                     borderRadius: '4px'
                                 }
                             });

                             const img = $('<img>', {
                                 src: e.target.result,
                                 css: {
                                     width: '100%',
                                     height: '100%',
                                     objectFit: 'cover'
                                 }
                             });

                             const removeBtn = $('<span>', {
                                 html: '×',
                                 class: 'position-absolute',
                                 css: {
                                     top: '2px',
                                     right: '2px',
                                     backgroundColor: 'rgba(0, 0, 0, 0.5)',
                                     color: 'white',
                                     width: '20px',
                                     height: '20px',
                                     borderRadius: '50%',
                                     display: 'flex',
                                     alignItems: 'center',
                                     justifyContent: 'center',
                                     cursor: 'pointer',
                                     fontSize: '14px'
                                 }
                             });

                             removeBtn.on('click', function() {
                                 // Remove the preview
                                 previewDiv.remove();
                                 
                                 // Create a new FileList without the removed file
                                 removeFileFromInput(index);
                             });

                             previewDiv.append(img, removeBtn);
                             previewContainer.append(previewDiv);
                         };

                         reader.readAsDataURL(file);
                     });
                 }
             });
             
             // Function to remove a file from the input
             function removeFileFromInput(indexToRemove) {
                 const fileInput = document.getElementById('image');
                 const dt = new DataTransfer();
                 
                 // Add all files except the one to remove
                 Array.from(fileInput.files)
                     .filter((_, index) => index !== indexToRemove)
                     .forEach(file => dt.items.add(file));
                 
                 // Update the input files
                 fileInput.files = dt.files;
                 
                 // If all files are removed, clear the input value
                 if (fileInput.files.length === 0) {
                     $('#imagePreviewContainer').empty();
                 } else {
                     // Update data-index attributes on remaining previews
                     $('#imagePreviewContainer div[data-index]').each(function(newIndex) {
                         const currentIndex = parseInt($(this).attr('data-index'));
                         if (currentIndex > indexToRemove) {
                             $(this).attr('data-index', currentIndex - 1);
                         }
                     });
                 }
             }

             // Image Upload Handler
             $('#imageUploadForm').on('submit', function(e) {
                 e.preventDefault();

                 let formData = new FormData(this);

                 $.ajax({
                     type: 'POST',
                     url: "{{ route('Dashboard-Store-Gallery') }}",
                     data: formData,
                     contentType: false,
                     processData: false,
                     success: function(response) {
                         if(response.success) {
                             Swal.fire({
                                 icon: 'success',
                                 title: 'Success',
                                 text: 'Image uploaded successfully!'
                             }).then(() => {
                                 location.reload();
                             });
                         }
                     },
                     error: function(response) {
                         $('#imageError').text(response.responseJSON.message).show();
                     }
                 });
             });

             // Delete Image Handler
             $('.remove-btn').on('click', function() {
                 const imageId = $(this).data('id');
                 const galleryTile = $(this).closest('.gallery-tile');

                 Swal.fire({
                     title: 'Delete Image?',
                     text: "This action cannot be undone!",
                     icon: 'warning',
                     showCancelButton: true,
                     confirmButtonColor: '#d33',
                     cancelButtonColor: '#3085d6',
                     confirmButtonText: 'Yes, delete it!'
                 }).then((result) => {
                     if (result.isConfirmed) {
                         $.ajax({
                             type: 'DELETE',
                             url: "{{ route('Dashboard-Delete-Gallery','') }}/" + imageId,
                             success: function(response) {
                                 if(response.success) {
                                     galleryTile.fadeOut(300, function() {
                                         $(this).remove();
                                     });
                                     Swal.fire(
                                         'Deleted!',
                                         'Image has been deleted.',
                                         'success'
                                     );
                                 }
                             },
                             error: function() {
                                 Swal.fire(
                                     'Error!',
                                     'Failed to delete image.',
                                     'error'
                                 );
                             }
                         });
                     }
                 });
             });
         });
      </script>
   </body>
</html>
