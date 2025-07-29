@extends('layouts.admin')

@section('title', 'Edit Section')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Edit Section</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.sections.update', $section) }}" method="POST" id="section-form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{--<input type="hidden" name="section_key" id="section_key" value="{{ $section->section_key }}">--}}
            {{--<input type="hidden" name="page_name" id="page_name" value="{{ $section->page_name }}">
            <div class="mb-3">
                <label for="page_id" class="form-label">Page</label>
                <select name="page_id" id="page_id" class="form-select" required>
                    <option value="">Select Page</option>
                    @foreach($pages as $page)
                        <option value="{{ $page->id }}" data-name="{{ strtolower($page->name) }}" {{ (old('page_id', $section->page_id) == $page->id) ? 'selected' : '' }}>{{ $page->name }}</option>
                    @endforeach
                </select>
            </div>--}}
            {{--<div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <textarea class="ckeditor form-control @error('title') is-invalid @enderror" name="title"
                          id="title" rows="4" required>{{ old('title', $section->title) }}</textarea>

                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>--}}

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input class="form-control @error('title') is-invalid @enderror" name="title"
                       required value="{{ old('title', $section->title) }}">

                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <textarea class="ckeditor form-control @error('text') is-invalid @enderror" name="text"
                          id="text" rows="4">{{ old('text', $section->text) }}</textarea>

                @error('text')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{--<div class="mb-3">
                <label for="button" class="form-label">Button</label>
                <textarea class="ckeditor form-control @error('button') is-invalid @enderror" name="button"
                          id="button" rows="4">{{ old('button', $section->button) }}</textarea>

                @error('button')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>--}}

            <div class="mb-3">
                <label for="title" class="form-label">Button</label>
                <input class="form-control @error('button') is-invalid @enderror" name="button"
                       value="{{ old('button', $section->button) }}">

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
                <input type="number" name="order" id="order" class="form-control" value="{{ old('order', $section->order) }}" required min="1">
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('admin.get.sections.by.page', $section->page_id) }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        /*['title', 'text', 'button'].forEach(function (fieldId) {
            var el = document.getElementById(fieldId);
            if (el) {
                ClassicEditor
                    .create(el, {})
                    .then(editor => {
                        if (editor.sourceElement.labels.length > 0) {
                            editor.sourceElement.labels[0].addEventListener('click', e => editor.editing.view.focus());
                        }
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        });*/

        /*document.querySelectorAll('.ckeditor').forEach((textarea) => {
            CKEDITOR.replace(textarea.name, {
                height: 300,
                filebrowserUploadUrl: '{{ route('admin.ckeditor.upload') }}?_token={{ csrf_token() }}',
                filebrowserUploadMethod: 'form'
            });
        });*/

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

        // document.addEventListener('DOMContentLoaded', function () {
        //     const orderInput = document.getElementById('order');
        //     const sectionKeyInput = document.getElementById('section_key');
        //
        //     /*const pageSelect = document.getElementById('page_id');
        //     const pageNameInput = document.getElementById('page_name');*/
        //
        //     function updateSectionKey() {
        //         sectionKeyInput.value = 'section_' + (orderInput.value || 1);
        //     }
        //
        //     /*function updatePageName() {
        //         const selected = pageSelect.options[pageSelect.selectedIndex];
        //         pageNameInput.value = selected.dataset.name || '';
        //     }*/
        //     orderInput.addEventListener('input', updateSectionKey);
        //     /*pageSelect.addEventListener('change', updatePageName);*/
        //     // Initial set
        //     updateSectionKey();
        //     /*updatePageName();*/
        // });
    </script>
@endpush
