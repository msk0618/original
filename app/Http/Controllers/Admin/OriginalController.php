<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OriginalController extends Controller
{
    
    public function add()
    {
        return view('admin.original.create');
    }

    public function create()
    {
        return redirect('admin/original/create');
    }

    public function edit()
    {
        return view('admin.original.edit');
    }

    public function update()
    {
        return redirect('admin/original/edit');
    }
        

}
