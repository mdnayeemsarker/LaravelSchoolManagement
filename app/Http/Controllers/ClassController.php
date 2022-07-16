<?php

namespace App\Http\Controllers;

use App\Models\AllClass;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClassController extends Controller
{
    public function index()
    {
        return view('admin.class.index', [
            'classes' => AllClass::get()
            // 'groups' => Group::latest()->get()
        ]);
    }
    
    public function create()
    {
        return view('admin.class.create');
    }

    public function store(Request $request)
    {

        $fromFields = $request->validate([
            'name' => 'required',
        ]);
        
        $fromFields['slug'] = Str::of($request->name)->slug('-');

        // dd($fromFields);
    
        AllClass::create($fromFields);

        return redirect(route('index_class'))->with('message', 'Listing Created Successfully');

    }
}
