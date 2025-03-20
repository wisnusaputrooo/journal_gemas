@extends('layouts.app')

@section('title', 'Login')
@section('page-title', 'Login')
@section('breadcrumb', 'Login')

@section('content')
<h1>Ayo Masuk, Teman!</h1>
<form method="POST" action="{{ route('handleLogin') }}">
    @csrf
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection
