@extends('layouts.app')

@section('title', 'Registrasi')
@section('page-title', 'Registrasi')
@section('breadcrumb', 'Registrasi')

@section('content')
<h1>Registrasi</h1>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <select class="form-control" id="role" name="role" required>
            <option value="teacher">Teacher</option>
            <option value="student">Student</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection
