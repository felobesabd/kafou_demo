@extends('layouts.admin')

@section('title', 'All Sections')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h5 class="mb-0">
                    {{ $sections->count() > 0 ? ucwords($sections[0]->page_name) : ''}}
                    - All Sections ({{ $sections->total() ?? 0 }})
                </h5>
            </div>
            <div class="col-md-6 text-end">
                @if($sections->isNotEmpty() && in_array($sections->first()->page_name, ['anesthesia', 'surgery', 'lab solutions', 'respiratory', 'nursing_icu', 'sleep_disorders', 'why kafou']))
                    <a href="{{ route('admin.sections.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Section
                    </a>
                @endif

                {{--<a href="{{ route('admin.sections.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add Section
                </a>--}}
            </div>
        </div>
    </div>
    {{--<div class="card-body">
        @if($sections->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>text</th>
                            <th>Button</th>
                            <th>Order</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sections as $section)
                        <tr>
                            <td>{{ $section->id }}</td>
                            <td>{!! $section->title !!}</td>
                            <td>{!! Str::limit(strip_tags($section->text), 50, '...') !!}</td>
                            <td>{!! $section->button !!}</td>
                            <td>{{ $section->order }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.sections.edit', $section) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                --}}{{--<form action="{{ route('admin.sections.destroy', $section) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this section?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>--}}{{--
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $sections->links('pagination::bootstrap-5') }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-th-list fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No sections found</h5>
            </div>
        @endif
    </div>--}}

    <div class="card-body">
        @if($sections->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Page Name</th>
                        <th>Image</th>
                        <th>Video</th>
                        <th>Section</th>
                        <th>Order</th>
                        <th class="text-end">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sections as $index => $section)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <div class="fw-bold">
                                    {{ ucwords($section->page_name) }}
                                </div>
                            </td>
                            <td>
                                @if($section->is_image)
                                    <img src="{{ asset($section->is_image) }}" width="150">
                                @else
                                    <span class="text-muted">No image</span>
                                @endif
                            </td>
                            <td>
                                @if($section->is_video)
                                    <video width="150" controls>
                                        <source src="{{ asset($section->is_video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @else
                                    <span class="text-muted">No video</span>
                                @endif
                            </td>
                            <td>
                                <div class="fw-bold">
                                    {{ ucwords(str_replace('_', ' ', $section->section_key)) }}
                                </div>
                            </td>
                            <td>{{ $section->order }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.sections.edit', $section) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                @if($sections->isNotEmpty() && in_array($sections->first()->page_name, ['anesthesia', 'surgery', 'lab solutions', 'respiratory', 'nursing_icu', 'sleep_disorders', 'why kafou']))
                                <form action="{{ route('admin.sections.destroy', $section) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this section?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                @endif

                                {{--<form action="{{ route('admin.sections.destroy', $section) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this section?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $sections->links('pagination::bootstrap-5') }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-th-list fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No sections found</h5>
            </div>
        @endif
    </div>
</div>
@endsection
