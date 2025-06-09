@extends('base')

@section('title')
    Search – Minecraft Manager
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
        <h1 class="display-4 fw-bold">Search</h1>
        @if (count($results) == 0)
            <p class="lead">Oops! We couldn't find any items matching your search. Try checking the spelling or using different keywords.</p>
        @endif
    </div>

    <div class="row">
        <div class="list-group col">
            @foreach ($results as $item)
                <a href="{{ route('item', $item->item_id) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                    {{ $item->name }}
                    <span class="badge bg-dark">{{ $item->minecraft_id }} (Minecraft ID)</span>
                </a>
            @endforeach
        </div>
    </div>
@endsection
