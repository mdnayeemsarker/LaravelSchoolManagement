@extends('layouts.admin_app')

@section('admin_title')
    {{ config('app_name', 'All Group - School MS') }}
@endsection
@section('content')
@section('sub_nav')
    <a href="{{ route('index_group') }}" class="nav-link">Group</a>
@endsection

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">All Groups</li>
                    </ol>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a class="bg-primary text-white pl-2 pr-2" href="{{ route('create_group') }}">Create New
                            Groups</a>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">All Groups for this school</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($groups as $group)
                        <tr>
                            <td>{{ $group->id }}</td>
                            <td>{{ $group->name }}</td>
                            <td>{{ $group->slug }}</td>
                            <td class="block">
                                <a class="inline" href="#" role="button">
                                    <span class="bg-primary p-2">Edit</span>
                                </a>
                                <a class="inline" href="#" role="button">
                                    <span class="bg-warning p-2">Delete</span>
                                </a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
                <tfoot>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
</div>
@endsection
