@extends('base')

@section('title')
    Info – Minecraft Manager
@endsection

@section('navbar')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('items') }}">Items</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('info') }}">Info</a>
    </li>
@endsection

@section('content')
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Info</h1>
        <p class="lead text-muted">Minecraft Manager – a lightweight Laravel web app to browse and search Minecraft items.</p>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <h2 class="h4 fw-semibold">🛠️ Technologies Used</h2>
            <ul class="list-group">
                <li class="list-group-item">Laravel (Backend)</li>
                <li class="list-group-item">Bootstrap 5 (Frontend Styling)</li>
                <li class="list-group-item">MySQL (Database)</li>
                <li class="list-group-item">HTML5 / Blade (Templates)</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h2 class="h4 fw-semibold">📁 Features</h2>
            <ul class="list-group">
                <li class="list-group-item">Search for Minecraft items by name or ID</li>
                <li class="list-group-item">View items in a clean, card-based layout</li>
                <li class="list-group-item">Simple and responsive UI</li>
                <li class="list-group-item">Fun Doge icons as item placeholders 🐶</li>
            </ul>
        </div>
    </div>

    <div class="mb-5">
        <h2 class="h4 fw-semibold">👨‍💻 About This Project</h2>
        <p>This project was created as a personal learning exercise and portfolio piece to showcase fullstack development skills. The focus was on simplicity, clarity, and usability – with a playful twist (Doge images!) to make it more enjoyable.</p>
        <p>Though minimal in scope, this project demonstrates backend data handling, frontend rendering, and the MVC architecture within the Laravel framework.</p>
    </div>
@endsection