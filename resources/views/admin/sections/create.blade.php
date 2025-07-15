@extends('layouts.admin')

@section('title', 'Add Section')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Add Section</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.sections.store') }}" method="POST" id="section-form">
            @csrf
            {{--<input type="hidden" name="section_key" id="section_key" value="section_{{ old('order', 1) }}">--}}
            {{--<input type="hidden" name="page_name" id="page_name" value="">
            <div class="mb-3">
                <label for="page_id" class="form-label">Page</label>
                <select name="page_id" id="page_id" class="form-select" required>
                    <option value="">Select Page</option>
                    @foreach($pages as $page)
                        <option value="{{ $page->id }}" data-name="{{ strtolower($page->name) }}" {{ old('page_id') == $page->id ? 'selected' : '' }}>{{ $page->name }}</option>
                    @endforeach
                </select>
            </div>--}}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <textarea name="text" id="text" class="form-control" rows="4" required>{{ old('text') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="button" class="form-label">Button</label>
                <input type="text" name="button" id="button" class="form-control" value="{{ old('button') }}">
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
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ['title', 'text', 'button'].forEach(function(fieldId) {
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
