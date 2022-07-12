@extends('layouts.admin_app')

@section('admin_title')
    {{ config('app_name', 'Dashboard - School MS') }}
@endsection

@section('content')
    <!-- Preloader -->
    @include('admin.partial._preloader')
    <!-- Navbar -->
    @include('admin.partial._navbar')
    <!-- Main Sidebar Container -->
    @include('admin.partial._main_sidebar')
    <!-- Main Container -->
    @include('admin.partial._main_content')
    {{-- footer --}}
    @include('admin.partial._footer')
@endsection
