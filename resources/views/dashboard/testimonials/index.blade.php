@extends('layouts.app')

@section('title', 'Manage Testimonials')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Manage Testimonials</h4>
                    <a href="{{ route('Dashboard-Create-Testimonial') }}" class="btn btn-primary float-right">
                        <i class="fas fa-plus"></i> Add New Testimonial
                    </a>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Client Name</th>
                                    <th>Position</th>
                                    <th>Company</th>
                                    <th>Image</th>
                                    <th>Order</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $testimonial->id }}</td>
                                        <td>{{ $testimonial->client_name }}</td>
                                        <td>{{ $testimonial->client_position }}</td>
                                        <td>{{ $testimonial->client_company }}</td>
                                        <td>
                                            @if($testimonial->client_image)
                                                <img src="{{ asset($testimonial->client_image) }}" alt="{{ $testimonial->client_name }}" width="50">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>{{ $testimonial->display_order }}</td>
                                        <td>
                                            <span class="badge {{ $testimonial->is_active ? 'badge-success' : 'badge-danger' }}">
                                                {{ $testimonial->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('Dashboard-Edit-Testimonial', $testimonial->id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('Dashboard-Delete-Testimonial', $testimonial->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this testimonial?')">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No testimonials found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
