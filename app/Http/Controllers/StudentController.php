<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('admin.student.index');
    }
    public function create()
    {
        return view('admin.student.create');
    }
}
