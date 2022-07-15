<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectoryPagesController extends Controller
{
    public function about(){
        return view('page.about');
    }
    public function blog(){
        return view('page.about');
    }
    public function teachers(){
        return view('page.teachers');
    }
    public function contact(){
        return view('page.contact');
    }
    public function admin(){
        return view('admin.dashboard');
    }
}
