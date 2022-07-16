<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GroupController extends Controller
{

    public function index()
    {
        return view('admin.gruop.index', [
            'groups' => Group::get()
            // 'groups' => Group::latest()->get()
        ]);
    }
    
    public function create()
    {
        return view('admin.gruop.create');
    }

    public function store(Request $request)
    {

        $fromFields = $request->validate([
            'name' => 'required',
        ]);
        
        $fromFields['slug'] = Str::of($request->name)->slug('-');

        // dd($fromFields['slug']);
    
        Group::create($fromFields);

        return redirect(route('index_group'))->with('message', 'Listing Created Successfully');

        // return back()->with('message', 'Listing Created Successfully');

    }
}
