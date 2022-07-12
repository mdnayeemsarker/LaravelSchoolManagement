@extends('layouts.app')
@section('title')
    {{ config('app_name', 'School MS - Login') }}
@endsection
@section('content')
    <!-- Pills navs -->

    <div class="d-flex justify-content-center align-items-center m-5">
        <div class="card bg-info m-2">
        </div>
        <div class="card bg-info m-2 p-4">
            <ul class="nav nav-pills bg-danger mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center"> <a class="nav-link active btl" id="pills-student-tab" data-toggle="pill"
                        href="#pills-student" role="tab" aria-controls="pills-student" aria-selected="true">Student
                        Login</a>
                </li>
                <li class="nav-item text-center"> <a class="nav-link btr" id="pills-teacher-tab" data-toggle="pill"
                        href="#pills-teacher" role="tab" aria-controls="pills-teacher" aria-selected="false">Teacher
                        Login</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-student" role="tabpanel"
                    aria-labelledby="pills-student-tab">
                    <p class="text-danger bg-warning p-2">Only Student Login Cradential are working here.</p>
                    <form action="" method="POST" class="form px-4">
                        <input type="text" name="" class="form-control" placeholder="Email">
                        <input type="password" name="" class="form-control" placeholder="Password">
                        <button type="submit" class="btn btn-dark btn-block">Login</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-teacher" role="tabpanel" aria-labelledby="pills-teacher-tab">
                    <p class="text-danger bg-warning p-2">Only Teacher Login Cradential are working here.</p>
                    <form action="" method="POST" class="form px-4">
                        <input type="text" name="" class="form-control" placeholder="Email">
                        <input type="password" name="" class="form-control" placeholder="Password">
                        <button type="submit" class="btn btn-dark btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="card bg-info m-2">
        </div>
    </div>
    <!-- Pills content -->
@endsection
