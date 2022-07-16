@extends('layouts.admin_app')

@section('admin_title')
    {{ config('app_name', 'Create Class - School MS') }}
@endsection
@section('content')
@section('sub_nav')
    <a href="{{ route('index_class') }}" class="nav-link">Class</a>
@endsection

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">Create New Class</li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a class="bg-primary text-white pl-2 pr-2" href="{{ route('index_class') }}">All
                            Class</a>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card ml-5 mr-5">
        <div class="card-header">
            <h3 class="card-title">Create New Class for School</h3>
        </div>
        <!-- /.card-header -->
        <div class="container">

            <form action="/storeclass" method="POST">
                @csrf
                <!-- Text input-->
                <div class="form-group">
                    <label for="name" class="col-md-12 control-label">Class Name</label>
                    <input name="name" placeholder="Name" class="form-control" id="name" type="text">
                </div>

                <!-- Button -->
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </form>
        </div>
    </div><!-- /.container -->
</div>
</div>
@endsection
