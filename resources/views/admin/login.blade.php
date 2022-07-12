@extends('layouts.admin_app')
@section('admin_title')
    {{ config('app_name', 'Admin|Login - School MS') }}
@endsection
@section('style')
    <link rel="stylesheet" href="{{ asset('backend.css') }}">
@endsection
@section('content')
    <div class="d-flex justify-content-center align-items-center m-5">

        <div class="card bg-info m-2 p-4">
            <div class="tab-pane fade show" role="tabpanel">

                <form action="{{ '/adminlogin' }}" method="POST" class="form px-4">
                    <div class="bg-warning justify-content-center align-items-center">
                        <p class="text-danger justify-content-center">Admin Panel Login</p>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @csrf
                    <input type="text" name="email" class="form-control" placeholder="Email">

                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <button type="submit" class="btn btn-dark btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
