@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Trusted Logo</h4>
                    <a href="{{ route('Dashboard-TrustedLogos') }}" class="btn btn-secondary float-right">
                        <i class="fas fa-arrow-left"></i> Back to Trusted Logos
                    </a>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('Dashboard-Update-TrustedLogo', $trustedLogo->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company_name">Company Name <span class="text-danger">*</span></label>
                                    <input type="text" name="company_name" id="company_name" class="form-control" value="{{ old('company_name', $trustedLogo->company_name) }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="website_url">Website URL</label>
                                    <input type="url" name="website_url" id="website_url" class="form-control" value="{{ old('website_url', $trustedLogo->website_url) }}" placeholder="https://example.com">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo_image">Logo Image</label>
                                    @if($trustedLogo->logo_image)
                                        <div class="mb-2">
                                            <img src="{{ asset($trustedLogo->logo_image) }}" alt="{{ $trustedLogo->company_name }}" width="200" class="img-thumbnail">
                                        </div>
                                    @endif
                                    <input type="file" name="logo_image" id="logo_image" class="form-control-file">
                                    <small class="text-muted">Leave empty to keep the current image. Recommended size: 200x100 pixels. Transparent PNG preferred.</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="display_order">Display Order</label>
                                    <input type="number" name="display_order" id="display_order" class="form-control" value="{{ old('display_order', $trustedLogo->display_order) }}">
                                    <small class="text-muted">Lower numbers will be displayed first</small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" {{ $trustedLogo->is_active ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Active</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Logo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
