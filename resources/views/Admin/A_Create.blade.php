<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <title>Create Article</title>
   <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- SweetAlert2 from CDN (safe) -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

      .gap-3 { gap: 1rem !important; }
   </style>
</head>

   <body>

    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Article Created!',
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
                                    <label class="form-label">Description <small>(max 20 words)</small></label>
                                    <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                                    <div id="wordCount" class="text-muted mt-1">0 words</div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Content</label>
                                    <div class="mb-2">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" id="boldButton">
                                            <i class="fa fa-bold"></i> Bold
                                        </button>
                                    </div>
                                    <textarea name="content" id="content" class="form-control" rows="10" required></textarea>
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
                                    const descriptionField = document.getElementById('description');
                                    const wordCountDisplay = document.getElementById('wordCount');
                                    const articleForm = document.getElementById('articleForm');
                                    const boldButton = document.getElementById('boldButton');
                                    const contentField = document.getElementById('content');

                                    const uploadedImages = [];

                                    // Word count functionality for description
                                    descriptionField.addEventListener('input', function(e) {
                                        const text = this.value.trim();
                                        const words = text === '' ? [] : text.split(/\s+/);
                                        const wordCount = words.length;
                                        wordCountDisplay.textContent = wordCount + ' words';

                                        // Add visual feedback
                                        if (wordCount > 20) {
                                            wordCountDisplay.classList.add('text-danger');
                                            wordCountDisplay.classList.remove('text-muted');

                                            // Keep only the first 20 words
                                            this.value = words.slice(0, 20).join(' ');
                                        } else {
                                            wordCountDisplay.classList.remove('text-danger');
                                            wordCountDisplay.classList.add('text-muted');
                                        }
                                    });

                                    // Block all keyboard input when 20 words are reached
                                    descriptionField.addEventListener('keydown', function(e) {
                                        const text = this.value.trim();
                                        const words = text === '' ? [] : text.split(/\s+/);
                                        const wordCount = words.length;
                                        const selection = window.getSelection().toString();

                                        // If at 20 words and no text is selected, block all input except:
                                        // - Backspace, Delete, Arrow keys, Tab, Ctrl combinations
                                        if (wordCount >= 20 && selection === '' &&
                                            !['Backspace', 'Delete', 'ArrowLeft', 'ArrowRight', 'ArrowUp', 'ArrowDown', 'Tab'].includes(e.key) &&
                                            !(e.ctrlKey || e.metaKey)) {
                                            e.preventDefault();
                                        }
                                    });

                                    // Bold button functionality
                                    boldButton.addEventListener('click', function() {
                                        const selection = window.getSelection();
                                        const selectedText = selection.toString();

                                        if (contentField.selectionStart !== undefined) {
                                            const startPos = contentField.selectionStart;
                                            const endPos = contentField.selectionEnd;

                                            if (startPos !== endPos) {
                                                const currentContent = contentField.value;
                                                const boldText = '<strong>' + selectedText + '</strong>';
                                                contentField.value = currentContent.substring(0, startPos) +
                                                                  boldText +
                                                                  currentContent.substring(endPos);
                                            }
                                        }
                                    });

                                    // Form validation
                                    articleForm.addEventListener('submit', function(e) {
                                        const descriptionText = descriptionField.value.trim();
                                        const wordCount = descriptionText === '' ? 0 : descriptionText.split(/\s+/).length;

                                        if (wordCount > 20) {
                                            e.preventDefault();
                                            alert('Description must be 20 words or less.');
                                            return false;
                                        }

                                        // Convert line breaks to HTML paragraphs in the content only
                                        const contentText = contentField.value.trim();
                                        const contentParagraphs = contentText.split(/\n\s*\n/);
                                        const htmlContent = contentParagraphs.map(p => `<p>${p.replace(/\n/g, '<br>')}</p>`).join('');
                                        contentField.value = htmlContent;
                                    });

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

                                                            div.innerHTML =
                                                                '<img src="' + data.file_url + '" alt="Image preview">' +
                                                                '<span class="remove-btn" data-path="' + data.file_path + '">&times;</span>';

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
