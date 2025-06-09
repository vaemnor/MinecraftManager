@extends('base')

@section('title')
    {{ $item->name }} – Minecraft Manager
@endsection

@section('navbar')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('items') }}">Items</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('info') }}">Info</a>
    </li>
@endsection

@section('content')
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">{{ $item->name }}</h1>
    </div>

    <div class="d-flex justify-content-center">
        <div class="text-center border rounded p-4 shadow-sm bg-light" style="max-width: 300px; width: 100%;">
            <img src="{{ asset('images/doge.jpg') }}" class="img-fluid rounded mb-3" alt="{{ $item->name }}" style="height: 128px;">
            
            <div class="mb-2">
                <span class="fw-semibold text-muted">ID:</span> {{ $item->minecraft_id }}
            </div>
            <div>
                <span class="fw-semibold text-muted">Type:</span> {{ $item->minecraft_type }}
            </div>
        </div>
    </div>
@endsection
