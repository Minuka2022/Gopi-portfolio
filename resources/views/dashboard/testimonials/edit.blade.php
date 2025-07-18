@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Testimonial</h4>
                    <a href="{{ route('Dashboard-Testimonials') }}" class="btn btn-secondary float-right">
                        <i class="fas fa-arrow-left"></i> Back to Testimonials
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

                    <form action="{{ route('Dashboard-Update-Testimonial', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="client_name">Client Name <span class="text-danger">*</span></label>
                                    <input type="text" name="client_name" id="client_name" class="form-control" value="{{ old('client_name', $testimonial->client_name) }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="client_position">Position</label>
                                    <input type="text" name="client_position" id="client_position" class="form-control" value="{{ old('client_position', $testimonial->client_position) }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="client_company">Company</label>
                                    <input type="text" name="client_company" id="client_company" class="form-control" value="{{ old('client_company', $testimonial->client_company) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="display_order">Display Order</label>
                                    <input type="number" name="display_order" id="display_order" class="form-control" value="{{ old('display_order', $testimonial->display_order) }}">
                                    <small class="text-muted">Lower numbers will be displayed first</small>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="testimonial_text">Testimonial Text <span class="text-danger">*</span></label>
                            <textarea name="testimonial_text" id="testimonial_text" rows="5" class="form-control" required>{{ old('testimonial_text', $testimonial->testimonial_text) }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="client_image">Client Image</label>
                                    @if($testimonial->client_image)
                                        <div class="mb-2">
                                            <img src="{{ asset($testimonial->client_image) }}" alt="{{ $testimonial->client_name }}" width="100" class="img-thumbnail">
                                        </div>
                                    @endif
                                    <input type="file" name="client_image" id="client_image" class="form-control-file">
                                    <small class="text-muted">Leave empty to keep the current image. Recommended size: 150x150 pixels</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="custom-control custom-switch mt-4">
                                        <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" {{ $testimonial->is_active ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="is_active">Active</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Testimonial
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
