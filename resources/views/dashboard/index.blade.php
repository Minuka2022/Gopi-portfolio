@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Articles Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Articles</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['articles'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Events Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Events</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['events'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Testimonials</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['testimonials'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-quote-left fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trusted Logos Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Trusted Logos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['trusted_logos'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-building fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Latest Articles -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Latest Articles</h6>
                    <a href="{{ route('Dashboard-Article') }}" class="btn btn-sm btn-primary">View All</a>
                </div>
                <div class="card-body">
                    @if($latestArticles->count() > 0)
                        <div class="list-group">
                            @foreach($latestArticles as $article)
                                <a href="{{ route('Dashboard-article-edit', $article->id) }}" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">{{ $article->title }}</h6>
                                        <small>{{ $article->created_at->diffForHumans() }}</small>
                                    </div>
                                    <p class="mb-1">{{ Str::limit(strip_tags($article->content), 100) }}</p>
                                </a>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted">No articles found.</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- Latest Events -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success">Upcoming Events</h6>
                    <a href="{{ route('Dashboard-Event') }}" class="btn btn-sm btn-success">View All</a>
                </div>
                <div class="card-body">
                    @if($latestEvents->count() > 0)
                        <div class="list-group">
                            @foreach($latestEvents as $event)
                                <a href="{{ route('Dashboard-Event-edit', $event->id) }}" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">{{ $event->title }}</h6>
                                        <small>{{ $event->event_date->format('M d, Y') }}</small>
                                    </div>
                                    <p class="mb-1">{{ Str::limit(strip_tags($event->description), 100) }}</p>
                                </a>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted">No upcoming events.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-info">Recent Testimonials</h6>
                    <a href="{{ route('Dashboard-Testimonials') }}" class="btn btn-sm btn-info">View All</a>
                </div>
                <div class="card-body">
                    @if($latestTestimonials->count() > 0)
                        <div class="row">
                            @foreach($latestTestimonials as $testimonial)
                                <div class="col-md-4 mb-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <p class="card-text">"{{ Str::limit($testimonial->testimonial_text, 150) }}"</p>
                                            <div class="d-flex align-items-center">
                                                @if($testimonial->client_image)
                                                    <img src="{{ asset($testimonial->client_image) }}" alt="{{ $testimonial->client_name }}" class="rounded-circle me-3" width="50" height="50">
                                                @endif
                                                <div>
                                                    <h6 class="mb-0">{{ $testimonial->client_name }}</h6>
                                                    <small class="text-muted">{{ $testimonial->client_position }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted">No testimonials found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
