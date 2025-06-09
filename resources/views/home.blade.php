@extends('base')

@section('title')
    Home – Minecraft Manager
@endsection

@section('navbar')
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('home') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('items') }}">Items</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('info') }}">Info</a>
    </li>
@endsection

@section('content')
    <!-- Hero Section -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Home</h1>
        <p class="lead">Search and explore Minecraft items by name or ID. Fast, simple, and fun.</p>
        <a href="{{ route('items') }}" class="btn btn-primary btn-lg mt-3">Start Browsing!</a>
    </div>

    <!-- Features Section -->
    <div class="row text-center mb-5">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Comprehensive Item List</h5>
                    <p class="card-text">Browse a complete list of Minecraft items using official names and item IDs.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Powerful Search</h5>
                    <p class="card-text">Instantly find items by typing partial names or Minecraft IDs using optimized search queries.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Clean & Fast Interface</h5>
                    <p class="card-text">Responsive UI built with Bootstrap 5 for a smooth browsing experience on any device.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Items Section -->
    <h2 class="text-center mb-4">Featured Items</h2>
    <div class="row justify-content-center mb-5">
        @foreach ($featuredItems as $item)
            <div class="col-md-2 col-6 mb-4">
                <a href="{{ route('item', $item->item_id) }}" class="text-decoration-none">
                    <div class="text-center border rounded p-3 shadow-sm bg-light h-100 item-card">
                        <img src="{{ asset('images/doge.jpg') }}" alt="{{ $item->name }}" class="img-fluid rounded mb-2" style="height: 64px;">
                        <p class="mb-0 fw-bold text-dark">{{ $item->name }}</p>
                        <p class="text-muted small mb-0">ID: {{ $item->minecraft_id }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
