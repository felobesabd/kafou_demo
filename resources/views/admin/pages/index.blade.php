@extends('layouts.admin')

@section('title', 'All Pages')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h5 class="mb-0">All Pages ({{ $pages->total() ?? 0 }})</h5>
            </div>
        </div>
    </div>

    <div class="card-body">
        @if($pages->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                        <tr>
                            <td>
                                <div class="fw-bold">{{ $page->name }}</div>
                            </td>
                            <td class="text-end">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.contents.pages', $page->id) }}"
                                       class="btn btn-sm btn-outline-primary" title="Content">
                                        {{--<i class="fas fa-eye"></i>--}}
                                        All Keys
                                    </a>
                                </div>

                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.get.sections.by.page', $page->id) }}"
                                       class="btn btn-sm btn-outline-primary" title="Content">
                                        All Sections
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $pages->links('pagination::bootstrap-5') }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-users fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No pages found</h5>
            </div>
        @endif
    </div>
</div>
@endsection
