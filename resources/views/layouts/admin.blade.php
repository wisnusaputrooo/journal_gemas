<!-- resources/views/layouts/admin.blade.php -->
@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('navigation')
    @include('partials.navigation', ['role' => 'admin'])
@endsection

@section('page-title', 'Admin Dashboard')
@section('breadcrumb', 'Admin Dashboard')

@section('content')
    <h1>Welcome to Admin Dashboard</h1>
    @yield('admin-content')
@endsection
