@extends('layouts.admin')

@section('title', 'Page Content')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h5 class="mb-0">All Keys ({{ $contents->total() ?? 0 }})</h5>
            </div>
        </div>
    </div>

    <div class="card-body">
        @if($contents->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Key</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contents as $content)
                        <tr>
                            <td>
                                <div class="fw-bold">{{ ucwords(str_replace('_', ' ', $content->key)) }}</div>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.edit.key', $content->id) }}"
                                   class="btn btn-sm btn-outline-warning" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $contents->links('pagination::bootstrap-5') }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-users fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No Keys found for this page</h5>
            </div>
        @endif
    </div>
</div>
@endsection
