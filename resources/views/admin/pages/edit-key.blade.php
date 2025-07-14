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
                            <div class="form-text">You can upload multiple images. Existing images will remain unless you re-upload.</div>
                            @error('images')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        @if(count($images))
                        <div class="mb-3">
                            <label class="form-label">Current Images:</label>
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($images as $img)
                                    <img src="{{ asset('storage/' . $img) }}" style="max-width: 120px; max-height: 80px; border-radius: 8px;">
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <div id="image-preview" class="mt-2" style="display: none;"></div>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#value'), {})
            .then(editor => {
                if (editor.sourceElement.labels.length > 0) {
                    editor.sourceElement.labels[0].addEventListener('click', e => editor.editing.view.focus());
                }
            })
            .catch(error => {
                console.error(error);
            });

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
    </script>
@endpush
@endsection
