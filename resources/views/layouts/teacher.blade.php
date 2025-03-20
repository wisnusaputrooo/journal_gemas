<!-- resources/views/layouts/teacher.blade.php -->
@extends('layouts.app')

@section('title', 'Teacher Dashboard')

@section('navigation')
    @include('partials.navigation', ['role' => 'teacher'])
@endsection

@section('page-title', 'Teacher Dashboard')
@section('breadcrumb', 'Teacher Dashboard')

@section('content')
    <h1>Welcome to Teacher Dashboard</h1>
    @yield('teacher-content')
@endsection
