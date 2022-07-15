@extends('layouts.app')
@section('title')
    {{ config('app_name', 'School MS - Login') }}
@endsection
@section('content')
    <section class="h-60" style="background-color: #eee;">
        <div class="container h-80">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">

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
                            
                                <div class="row g-0 tab-pane fade show active" id="pills-student" role="tabpanel" aria-labelledby="pills-student-tab">
                                    <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                                style="width: 185px;" alt="logo">
                                            <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                                        </div>

                                        <form action="{{ '/login' }}" method="POST" class="form px-4">
                                            @csrf
                                            <div class="form-outline mb-4">
                                                <input type="text" id="name" class="form-control"
                                                    placeholder="name address" name="name" />
                                                <label class="form-label text-white" for="name">Username</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="email" id="email" class="form-control"
                                                    placeholder="email address" name="email" />
                                                <label class="form-label text-white" for="name">Email</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" name="password" id="password" class="form-control" />
                                                <label class="form-label text-white" for="password">Password</label>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <button type="button" class="btn btn-outline-danger">Create new</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>

                                <div class="row g-0 tab-pane fade" id="pills-teacher" role="tabpanel" aria-labelledby="pills-teacher-tab">
                                    <div class="card-body p-md-5 mx-md-4">

                                        <div class="text-center">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                                style="width: 185px;" alt="logo">
                                            <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                                        </div>

                                        <form action="{{ '/login' }}" method="POST" class="form px-4">
                                            @csrf
                                            <div class="form-outline mb-4">
                                                <input type="text" id="name" class="form-control"
                                                    placeholder="name address" name="name" />
                                                <label class="form-label text-white" for="name">Username</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="email" id="email" class="form-control"
                                                    placeholder="email address" name="email" />
                                                <label class="form-label text-white" for="name">Email</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" name="password" id="password" class="form-control" />
                                                <label class="form-label text-white" for="password">Password</label>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <button type="button" class="btn btn-outline-danger">Create new</button>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
