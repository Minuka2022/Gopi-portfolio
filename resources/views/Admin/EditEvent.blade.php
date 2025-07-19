<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <title>Create Event</title>
   <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- Fonts and icons -->
   <script src="{{ secure_asset('assets-dash/js/plugin/webfont/webfont.min.js') }}"></script>
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
            urls: ["{{ secure_asset('assets-dash/css/fonts.min.css') }}"],
         },
         active: function () {
            sessionStorage.fonts = true;
         },
      });
   </script>

   <!-- CSS Files -->
   <link rel="stylesheet" href="{{ secure_asset('assets-dash/css/bootstrap.min.css') }}" />
   <link rel="stylesheet" href="{{ secure_asset('assets-dash/css/plugins.min.css') }}" />
   <link rel="stylesheet" href="{{ secure_asset('assets-dash/css/kaiadmin.min.css') }}" />

   <!-- Custom Styles -->
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
      }

      .remove-btn {
         position: absolute;
         top: -1px;
         right: -1px;
         background: rgb(116, 115, 115);
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

      .gap-3 {
         gap: 1rem !important;
      }
   </style>
</head>

   <body>
      <div class="wrapper">
         <!-- Sidebar -->
         <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
               <a href="{{route('Dashboard-Event')}}" class="logo">
                  <p class="navbar-brand" style="color:white;">Gopi</p>
               </a>
            </div>
            @include('partials.sidebar')
         </div>

         <div class="main-panel">
            <div class="container">
               <div class="page-inner">
                  <div class="page-header">
                     <h3 class="fw-bold mb-3">Create Event</h3>
                     <ul class="breadcrumbs mb-3">
                        <li class="nav-home">
                           <a href="{{route('Dashboard-Event')}}">
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
                        <div class="card-body">
                            <form id="eventForm" action="{{route('Dashboard-update-Event' , ['id' => $event->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="add-images-section mb-4">
                                    <div class="d-flex flex-wrap gap-3">
                                        <button type="button" class="btn btn-primary" id="addImageButton">
                                            <i class="fa fa-plus"></i> Add Images
                                        </button>
                                        <input type="file" name="new_images[]" id="imageInput" class="d-none" multiple>
                                        <!-- Preview for newly added images -->
                                        <div id="imagePreview" class="d-flex gap-2 mt-3"></div>
                                        <input type="hidden" name="deleted_images" id="deletedImages" value="">
                                        <!-- Display already uploaded images -->
                                        @foreach ($event->eventImages ?? [] as $image)
                                        <div class="position-relative existing-image" id="image-{{ $image->id }}">
                                            <img src="{{ asset('storage/' . $image->image) }}" alt="Image Preview" class="img-fluid image-preview" style="max-width: 100px; max-height: 100px;">
                                            <button type="button" class="btn btn-danger btn-sm delete-image-btn"
                                                    data-id="{{ $image->id }}" style="position: absolute; top: 0; right: 0;">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </div>
                                    @endforeach

                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Event Title</label>
                                    <input type="text" name="title" value="{{$event->title}}" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Event Description</label>
                                    <textarea name="description" class="form-control" rows="4" required>{{$event->description}}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Event Content</label>
                                    <textarea name="content" class="form-control" rows="10" required>{{$event->content}}</textarea>
                                </div>

                                <input type="hidden" name="uploaded_images" id="uploadedImages">
                                <input type="hidden" name="deleted_images" id="deletedImages">

                                <button type="submit" class="btn btn-primary">Update Event</button>
                            </form>

                            <script>
                               // Trigger the file input when the "addImageButton" is clicked
                            document.getElementById('addImageButton').addEventListener('click', function() {
                                document.getElementById('imageInput').click();
                            });

                            // Handle new image additions
                            document.getElementById('imageInput').addEventListener('change', function(event) {
                                const files = event.target.files;
                                const previewContainer = document.getElementById('imagePreview');

                                Array.from(files).forEach(file => {
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        const imageDiv = document.createElement('div');
                                        imageDiv.classList.add('position-relative', 'new-image-preview');

                                        // Create image preview with delete button
                                        imageDiv.innerHTML = `
                                            <img src="${e.target.result}" class="img-fluid image-preview" style="max-width: 100px; max-height: 100px;" />
                                            <button type="button" class="btn btn-danger btn-sm delete-image-btn" style="position: absolute; top: 0; right: 0;">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        `;

                                        previewContainer.appendChild(imageDiv);

                                        // Add delete functionality for new images
                                        imageDiv.querySelector('.delete-image-btn').addEventListener('click', function() {
                                            imageDiv.remove(); // Remove from DOM
                                        });
                                    };
                                    reader.readAsDataURL(file);
                                });
                            });

                            // Handle existing image deletion
                           // Handle existing image deletion
                            document.querySelectorAll('.existing-image .delete-image-btn').forEach(button => {
                                button.addEventListener('click', function() {
                                    const imageId = this.getAttribute('data-id');
                                    const imageElement = document.getElementById('image-' + imageId);

                                    // Send immediate delete request to the server
                                    fetch(`/dashboard/event-image/${imageId}`, {
                                        method: 'DELETE',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                        },
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.success) {
                                            // Remove the image element from the DOM
                                            if (imageElement) {
                                                imageElement.remove();
                                            }
                                        } else {
                                            console.error('Server Error:', data.message);
                                            alert('Server Error: ' + data.message);
                                        }
                                    })
                                    .catch(error => {
                                        console.error('Full Error:', error);
                                        alert('Error Details: ' + error.message);
                                    });
                                });
                            });
                        </script>



                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- JS Scripts -->
      <script src="{{ asset('assets-dash/js/core/jquery-3.7.1.min.js') }}"></script>
      <script src="{{ asset('assets-dash/js/core/bootstrap.min.js') }}"></script>
   </body>
</html>
