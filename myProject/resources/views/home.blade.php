@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="jumbotron text-center py-5 bg-light">
        <h1 class="display-4">Welcome to My Laravel App!</h1>
        <p class="lead">This is a simple homepage built with Laravel.</p>
    </div>

    <!-- Features Section -->
    <div class="row text-center my-5">
        <div class="col-md-4">
            <h4>Fast</h4>
            <p>Optimized performance with Laravel framework.</p>
        </div>
        <div class="col-md-4">
            <h4>Secure</h4>
            <p>Modern authentication and password hashing.</p>
        </div>
        <div class="col-md-4">
            <h4>Responsive</h4>
            <p>Built with Bootstrap for mobile-first design.</p>
        </div>
    </div>
@endsection
