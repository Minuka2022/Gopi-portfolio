@extends('layouts.app')

@section('title', 'Manage Trusted Logos')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Manage Trusted Logos</h4>
                    <a href="{{ route('Dashboard-Create-TrustedLogo') }}" class="btn btn-primary float-right">
                        <i class="fas fa-plus"></i> Add New Logo
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
                                    <th>Company Name</th>
                                    <th>Logo</th>
                                    <th>Website URL</th>
                                    <th>Order</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($trustedLogos as $logo)
                                    <tr>
                                        <td>{{ $logo->id }}</td>
                                        <td>{{ $logo->company_name }}</td>
                                        <td>
                                            <img src="{{ asset($logo->logo_image) }}" alt="{{ $logo->company_name }}" width="100">
                                        </td>
                                        <td>
                                            @if($logo->website_url)
                                                <a href="{{ $logo->website_url }}" target="_blank">{{ $logo->website_url }}</a>
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $logo->display_order }}</td>
                                        <td>
                                            <span class="badge {{ $logo->is_active ? 'badge-success' : 'badge-danger' }}">
                                                {{ $logo->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('Dashboard-Edit-TrustedLogo', $logo->id) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('Dashboard-Delete-TrustedLogo', $logo->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this logo?')">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No trusted logos found</td>
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
