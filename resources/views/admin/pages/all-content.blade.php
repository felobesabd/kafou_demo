@extends('layouts.admin')

@section('title', 'All Page Content')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h5 class="mb-0">All Page Content Keys & Values</h5>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('admin.all.pages') }}" class="btn btn-sm btn-outline-secondary">
                    <i class="fas fa-arrow-left me-1"></i>
                    Back to Pages
                </a>
            </div>
        </div>
    </div>

    <div class="card-body">
        @php
            use App\Helpers\PageContentHelper;
            $allContent = PageContentHelper::getAllKeysAndValues();
        @endphp

        @if(count($allContent) > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Page</th>
                            <th>Key</th>
                            <th>Value</th>
                            <th>Type</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allContent as $content)
                        <tr>
                            <td>
                                <span class="badge bg-info">{{ $content['page_name'] }}</span>
                            </td>
                            <td>
                                <div class="fw-bold">{{ $content['key'] }}</div>
                                <small class="text-muted">ID: {{ $content['id'] }}</small>
                            </td>
                            <td>
                                @if($content['is_image'])
                                    <span class="badge bg-success">Image</span>
                                    <div class="mt-1">
                                        <img src="{{ asset($content['value']) }}" alt="{{ $content['key'] }}" 
                                             style="max-width: 100px; max-height: 60px; object-fit: cover;">
                                    </div>
                                @elseif($content['is_video'])
                                    <span class="badge bg-warning">Video</span>
                                    <div class="mt-1 text-truncate" style="max-width: 200px;">
                                        {{ $content['value'] }}
                                    </div>
                                @else
                                    <div class="text-truncate" style="max-width: 300px;" title="{{ $content['value'] }}">
                                        {{ Str::limit($content['value'], 100) }}
                                    </div>
                                @endif
                            </td>
                            <td>
                                @if($content['is_image'])
                                    <span class="badge bg-success">Image</span>
                                @elseif($content['is_video'])
                                    <span class="badge bg-warning">Video</span>
                                @else
                                    <span class="badge bg-secondary">Text</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.edit.key', $content['id']) }}"
                                   class="btn btn-sm btn-outline-warning" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Social Media Links Summary -->
            <div class="mt-4">
                <h6 class="text-muted mb-3">Social Media Links Summary</h6>
                @php
                    $socialLinks = PageContentHelper::getSocialMediaLinks();
                @endphp
                <div class="row">
                    @foreach($socialLinks as $platform => $link)
                    <div class="col-md-4 mb-2">
                        <div class="d-flex align-items-center">
                            <i class="fab fa-{{ $platform }} me-2" style="width: 20px;"></i>
                            <span class="fw-bold text-capitalize">{{ $platform }}:</span>
                            <span class="ms-2 text-truncate" title="{{ $link }}">
                                {{ $link === '#' ? 'Not Set' : Str::limit($link, 30) }}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Contact Information Summary -->
            <div class="mt-4">
                <h6 class="text-muted mb-3">Contact Information Summary</h6>
                @php
                    $contactInfo = PageContentHelper::getSocialMediaLinks();
                @endphp
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt me-2" style="width: 20px;"></i>
                            <span class="fw-bold">Address:</span>
                            <span class="ms-2 text-truncate" title="{{ $contactInfo['address'] }}">
                                {{ $contactInfo['address'] ?: 'Not Set' }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-phone me-2" style="width: 20px;"></i>
                            <span class="fw-bold">Phone:</span>
                            <span class="ms-2">{{ $contactInfo['phone'] ?: 'Not Set' }}</span>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-envelope me-2" style="width: 20px;"></i>
                            <span class="fw-bold">Email:</span>
                            <span class="ms-2">{{ $contactInfo['email'] ?: 'Not Set' }}</span>
                        </div>
                    </div>
                </div>
            </div>

        @else
            <div class="text-center py-5">
                <i class="fas fa-database fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No page content found</h5>
                <p class="text-muted">Start by adding content to your pages.</p>
            </div>
        @endif
    </div>
</div>
@endsection 