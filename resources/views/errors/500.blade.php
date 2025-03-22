@extends('layouts.app')

@section('title', 'Server Error')

@section('content')
    <div class="error-section">
        <h1>500</h1>
        <h2>Internal Server Error</h2>
        <p>Sorry, something went wrong on our end.</p>
        <a href="{{ url('/') }}" class="btn btn-primary">Go to Home</a>
    </div>
@endsection
