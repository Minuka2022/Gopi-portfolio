<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Create Article</title>
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

         .gap-3 { gap: 1rem !important; }
      </style>
   </head>
   <body>
      <div class="wrapper">
         <!-- Sidebar -->
         <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
               <a href="{{route('Dashboard-Article')}}" class="logo">
                  <p class="navbar-brand" style="color:white;">Gopi</p>
               </a>
            </div>
            @include('partials.sidebar')
         </div>

         <div class="main-panel">
            <div class="container">
               <div class="page-inner">
                  <div class="page-header">
                     <h3 class="fw-bold mb-3">Create Article</h3>
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
                           <a href="#">Create Article</a>
                        </li>
                     </ul>
                  </div>

                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">
                            <form id="articleForm" action="{{ route('Dashboard-Store-Article') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="add-images-section mb-4">
                                    <div class="d-flex flex-wrap gap-3">
                                        <button type="button" class="btn btn-primary" id="addImageButton">
                                            <i class="fa fa-plus"></i> Add Images
                                        </button>
                                        <input type="file" id="imageInput" class="d-none" multiple accept="image/*">
                                        <div class="d-flex flex-wrap gap-3" id="imagePreviewContainer"></div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="4" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Content</label>
                                    <textarea name="content" class="form-control" rows="10" required></textarea>
                                </div>

                                <input type="hidden" name="uploaded_images" id="uploadedImages">

                                <button type="submit" class="btn btn-primary">Publish</button>
                            </form>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    const addImageButton = document.getElementById('addImageButton');
                                    const imageInput = document.getElementById('imageInput');
                                    const imagePreviewContainer = document.getElementById('imagePreviewContainer');
                                    const uploadedImagesField = document.getElementById('uploadedImages');

                                    const uploadedImages = [];

                                    addImageButton.addEventListener('click', () => imageInput.click());

                                    imageInput.addEventListener('change', function () {
                                        Array.from(imageInput.files).forEach(file => {
                                            if (file.type.startsWith('image/')) {
                                                const formData = new FormData();
                                                formData.append('image', file);

                                                // Upload image via AJAX
                                                fetch('{{ route("Dashboard-Upload-Image") }}', {
                                                    method: 'POST',
                                                    headers: {
                                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                                    },
                                                    body: formData
                                                })
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        if (data.success) {
                                                            uploadedImages.push(data.file_path); // Store uploaded image path
                                                            uploadedImagesField.value = JSON.stringify(uploadedImages); // Update hidden field

                                                            const div = document.createElement('div');
                                                            div.classList.add('image-preview');

                                                            div.innerHTML = `
                                                                <img src="${data.file_url}" alt="Image preview">
                                                                <span class="remove-btn" data-path="${data.file_path}">&times;</span>
                                                            `;

                                                            imagePreviewContainer.appendChild(div);

                                                            // Handle image removal
                                                            div.querySelector('.remove-btn').addEventListener('click', function () {
                                                                const path = this.getAttribute('data-path');
                                                                uploadedImages.splice(uploadedImages.indexOf(path), 1);
                                                                uploadedImagesField.value = JSON.stringify(uploadedImages); // Update hidden field
                                                                div.remove();
                                                            });
                                                        } else {
                                                            alert('Failed to upload image. Please try again.');
                                                        }
                                                    })
                                                    .catch(err => {
                                                        console.error(err);
                                                        alert('Error uploading image.');
                                                    });
                                            }
                                        });

                                        imageInput.value = '';
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
