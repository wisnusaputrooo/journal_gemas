<!-- resources/views/layouts/student.blade.php -->
@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('navigation')
    @include('partials.navigation', ['role' => 'student'])
@endsection

@section('page-title', 'Student Dashboard')
@section('breadcrumb', 'Student Dashboard')

@section('content')
    <h1>Welcome to Student Dashboard</h1>
    @yield('student-content')
@endsection
