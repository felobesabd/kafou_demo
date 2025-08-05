@extends('layouts.admin')

@section('title', 'Edit Key')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h5 class="mb-0">Edit Key: {{ $key->key }}</h5>
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="{{ route('admin.contents.pages', $key->cat_page_id) }}"
                           class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-arrow-left me-1"></i>
                            Back to Keys
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <form action="{{ route('admin.update.key', $key->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @if($key->is_image == 1)
                        @php
                            $images = [];
                            if ($key->value) {
                                $decoded = json_decode($key->value, true);
                                if (is_array($decoded)) {
                                    $images = $decoded;
                                } elseif (is_string($key->value)) {
                                    $images = [$key->value];
                                }
                            }
                        @endphp

                        <div class="mb-3">
                            <label for="images" class="form-label">Upload Images</label>
                            <input type="file" class="form-control @error('images') is-invalid @enderror"
                                   id="images" name="images[]" accept="image/*" multiple>
                            <div class="form-text">You can upload multiple images. Click the × button to remove images before submitting.</div>
                            @error('images')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Existing Images Section -->
                        @if(count($images))
                            <div class="mb-3">
                                <label class="form-label">Current Images:</label>
                                <div class="d-flex flex-wrap gap-3">
                                    @foreach($images as $index => $img)
                                        @php
                                            $imgPath = is_array($img) ? $img['path'] : $img;
                                            $imgDesc = is_array($img) ? ($img['description'] ?? '') : '';
                                        @endphp
                                        <div class="image-item position-relative" style="width: 150px;">
                                            <img src="{{ asset('storage/' . $imgPath) }}" class="img-thumbnail" style="width: 100%; height: 100px; object-fit: cover;">

                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox"
                                                       id="delete_image_{{ $index }}"
                                                       name="delete_images[]"
                                                       value="{{ $imgPath }}">
                                                <label class="form-check-label" for="delete_image_{{ $index }}">
                                                    Delete
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Preview Section for New Images -->
                        <div id="image-preview-container" class="mb-3" style="display: none;">
                            <label class="form-label">New Images to Upload:</label>
                            <div id="image-preview" class="d-flex flex-wrap gap-3"></div>
                        </div>
                    @else
                        <div class="mb-3">
                            <label for="value" class="form-label">Value *</label>
                            <textarea class="form-control" id="value" name="value" rows="6"
                                      placeholder="Enter the value for this key..." required>{{ old('value', $key->value) }}
                            </textarea>
                        </div>
                    @endif

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.contents.pages', $key->cat_page_id) }}"
                           class="btn btn-secondary">
                            <i class="fas fa-times me-1"></i>
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i>
                            Update Key
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    {{--<script>
        // Image preview functionality
        var imagesInput = document.getElementById('images');
        if (imagesInput) {
            imagesInput.addEventListener('change', function (e) {
                const files = e.target.files;
                const previewContainer = document.getElementById('image-preview');
                previewContainer.innerHTML = ''; // Clear previous previews

                if (files.length > 0) {
                    for (let i = 0; i < files.length; i++) {
                        const file = files[i];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                const img = document.createElement('img');
                                img.src = e.target.result;
                                img.style.maxWidth = '150px';
                                img.style.maxHeight = '100px';
                                img.style.borderRadius = '8px';
                                previewContainer.appendChild(img);
                            }
                            reader.readAsDataURL(file);
                        }
                    }
                    previewContainer.style.display = 'block';
                } else {
                    previewContainer.style.display = 'none';
                }
            });
        }
    </script>--}}

    {{--<script>
        // Image preview functionality with description fields
        var imagesInput = document.getElementById('images');
        if (imagesInput) {
            imagesInput.addEventListener('change', function (e) {
                const files = e.target.files;
                const previewContainer = document.getElementById('image-preview');
                previewContainer.innerHTML = ''; // Clear previous previews

                if (files.length > 0) {
                    previewContainer.style.display = 'block';
                    previewContainer.classList.add('d-flex', 'flex-wrap', 'gap-3');

                    for (let i = 0; i < files.length; i++) {
                        const file = files[i];
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                const container = document.createElement('div');
                                container.className = 'image-item';
                                container.style.width = '150px';

                                const img = document.createElement('img');
                                img.src = e.target.result;
                                img.className = 'img-thumbnail';
                                img.style.width = '100%';
                                img.style.height = '100px';
                                img.style.objectFit = 'cover';
                                container.appendChild(img);

                                const fileInput = document.createElement('input');
                                fileInput.type = 'hidden';
                                fileInput.name = 'new_images[' + i + '][file]';
                                // We'll handle the file data in the backend

                                previewContainer.appendChild(container);
                            }
                            reader.readAsDataURL(file);
                        }
                    }
                } else {
                    previewContainer.style.display = 'none';
                }
            });
        }
    </script>--}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const imagesInput = document.getElementById('images');
            const previewContainer = document.getElementById('image-preview');
            const mainPreviewContainer = document.getElementById('image-preview-container');

            if (imagesInput) {
                imagesInput.addEventListener('change', function(e) {
                    previewContainer.innerHTML = ''; // Clear previous previews
                    const files = e.target.files;

                    if (files.length > 0) {
                        mainPreviewContainer.style.display = 'block';

                        Array.from(files).forEach((file, index) => {
                            if (!file.type.match('image.*')) return;

                            const reader = new FileReader();
                            reader.onload = function(e) {
                                const itemContainer = document.createElement('div');
                                itemContainer.className = 'image-item position-relative';
                                itemContainer.style.width = '150px';

                                // Image thumbnail
                                const img = document.createElement('img');
                                img.src = e.target.result;
                                img.className = 'img-thumbnail';
                                img.style.width = '100%';
                                img.style.height = '100px';
                                img.style.objectFit = 'cover';
                                itemContainer.appendChild(img);

                                // Hidden file input (we'll handle this differently)
                                const fileInput = document.createElement('input');
                                fileInput.type = 'hidden';
                                fileInput.name = `new_images[${index}][file_index]`;
                                fileInput.value = index;
                                itemContainer.appendChild(fileInput);

                                // Remove button
                                const removeBtn = document.createElement('button');
                                removeBtn.type = 'button';
                                removeBtn.className = 'btn btn-danger btn-sm position-absolute';
                                removeBtn.style.top = '5px';
                                removeBtn.style.right = '5px';
                                removeBtn.style.fontSize = '20px';
                                removeBtn.style.backgroundColor = '#ff0000b0';
                                removeBtn.style.border = 'none';
                                removeBtn.innerHTML = '&times;';
                                removeBtn.onclick = function() {
                                    removeImagePreview(index);
                                    itemContainer.remove();
                                    if (previewContainer.children.length === 0) {
                                        mainPreviewContainer.style.display = 'none';
                                    }
                                };
                                itemContainer.appendChild(removeBtn);

                                previewContainer.appendChild(itemContainer);
                            };
                            reader.readAsDataURL(file);
                        });
                    } else {
                        mainPreviewContainer.style.display = 'none';
                    }
                });
            }

            // Track removed files
            const removedFiles = new Set();

            function removeImagePreview(index) {
                removedFiles.add(index);
                updateFileInput();
            }

            function updateFileInput() {
                const input = document.getElementById('images');
                if (!input) return;

                const files = Array.from(input.files);
                const newFiles = files.filter((_, index) => !removedFiles.has(index));

                // Create new DataTransfer to update files
                const dataTransfer = new DataTransfer();
                newFiles.forEach(file => dataTransfer.items.add(file));

                // Update the file input
                input.files = dataTransfer.files;
            }
        });
    </script>
@endpush
@endsection
