@extends('layouts.admin_app')

@section('admin_title')
    {{ config('app_name', 'Dashboard - School MS') }}
@endsection

@section('content')
    <!-- Main Container -->
    @include('admin.partial._main_content')
@endsection
