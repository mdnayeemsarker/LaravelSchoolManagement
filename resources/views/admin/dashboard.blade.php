@extends('layouts.admin_app')

@section('admin_title')
    {{ config('app_name', 'Admin|Dashboard - School MS') }}
@endsection

@section('content')
    <!-- Preloader -->
    @include('admin.partial._preloader')
    @auth
        <!-- Navbar -->
        @include('admin.partial._navbar')
        <!-- Main Sidebar Container -->
        @include('admin.partial._main_sidebar')
        <!-- Main Container -->
        @include('admin.main_content')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        {{-- footer --}}
        @include('admin.partial._footer')
    @else
        <div class="d-flex justify-content-center align-items-center m-5">

            <div class="card bg-info m-2 p-4">
                <div class="tab-pane fade show" role="tabpanel">
                    <div class="bg-warning justify-content-center align-items-center">
                        <p class="text-danger justify-content-center"> Backend Admin Panel</p>
                    </div>
                    <form action="" method="POST" class="form px-4">
                        <input type="text" name="" class="form-control" placeholder="Email">
                        <input type="password" name="" class="form-control" placeholder="Password">
                        <button type="submit" class="btn btn-dark btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    @endauth
@endsection
