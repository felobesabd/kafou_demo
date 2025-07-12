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

                <form action="{{ route('admin.update.key', $key->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="value" class="form-label">Value *</label>
                        <textarea class="form-control" id="value" name="value" rows="6"
                                  placeholder="Enter the value for this key..." required>{{ old('value', $key->value) }}</textarea>
                    </div>

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
@endsection
