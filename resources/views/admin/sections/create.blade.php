@extends('layouts.admin')

@section('title', 'Add Section')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Add Section</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.sections.store') }}" method="POST" id="section-form" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="section_key" id="section_key" value="section_{{ old('order', 1) }}">
            <input type="hidden" name="page_name" id="page_name" value="">
            <div class="mb-3">
                <label for="page_id" class="form-label">Page</label>
                <select name="page_id" id="page_id" class="form-select" required>
                    <option value="">Select Page</option>
                    @foreach($pages as $page)
                        <option value="{{ $page->id }}" data-name="{{ strtolower($page->name) }}" {{ old('page_id') == $page->id ? 'selected' : '' }}>{{ $page->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input class="form-control @error('title') is-invalid @enderror" name="title"
                       required value="{{ old('title') }}">

                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <textarea class="ckeditor form-control @error('text') is-invalid @enderror" name="text"
                          id="text" rows="4">{{ old('text') }}</textarea>

                @error('text')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Button</label>
                <input class="form-control @error('button') is-invalid @enderror" name="button"
                       value="{{ old('button') }}">

                @error('button')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="images" class="form-label">Upload Image</label>
                <input type="file" class="form-control @error('is_image') is-invalid @enderror"
                       id="image" name="is_image" accept="image/*">

                @error('is_image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <div id="image-preview" class="mt-2" style="display: none;"></div>
            </div>

            <div class="mb-3">
                <label for="input" class="form-label">Upload Video</label>
                <input type="file" class="form-control @error('is_video') is-invalid @enderror" id="input"
                       name="is_video" accept="video/mp4, video/mov">

                @error('is_video')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <video id="video" width="320" height="240" controls style="display: none;"></video>
            </div>

            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="number" name="order" id="order" class="form-control" value="{{ old('order', 1) }}" required min="1">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ route('admin.sections.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('text', {
            height: 300,
            filebrowserUploadUrl: '{{ route('admin.ckeditor.upload') }}?_token={{ csrf_token() }}',
            filebrowserUploadMethod: 'form'
        });

        document.getElementById("input").addEventListener("change", function() {
            var media = URL.createObjectURL(this.files[0]);
            var video = document.getElementById("video");
            video.src = media;
            video.style.display = "block";
            video.play();
        });

        // Image preview functionality
        document.getElementById('image').addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('preview-img').src = e.target.result;
                    document.getElementById('image-preview').style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                document.getElementById('image-preview').style.display = 'none';
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const orderInput = document.getElementById('order');
            const sectionKeyInput = document.getElementById('section_key');
            const pageSelect = document.getElementById('page_id');
            const pageNameInput = document.getElementById('page_name');

            function getCleanPageName(fullName) {
                // Remove "Divisions - " prefix and trim whitespace
                return fullName.replace(/^divisions\s*-\s*/i, '').trim().toLowerCase();
            }

            function updateSectionKey() {
                const selectedOption = pageSelect.options[pageSelect.selectedIndex];
                const fullPageName = selectedOption.dataset.name || selectedOption.text;
                const cleanName = getCleanPageName(fullPageName);

                sectionKeyInput.value = `${cleanName}_section_${orderInput.value || 1}`;
            }

            function updatePageName() {
                const selectedOption = pageSelect.options[pageSelect.selectedIndex];
                const fullPageName = selectedOption.dataset.name || selectedOption.text;
                pageNameInput.value = getCleanPageName(fullPageName);
                updateSectionKey();
            }

            orderInput.addEventListener('input', updateSectionKey);
            pageSelect.addEventListener('change', updatePageName);

            // Initialize on load
            updatePageName();
        });
    </script>
@endpush
