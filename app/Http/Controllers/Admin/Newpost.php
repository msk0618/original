<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class newpostlController extends Controller
{
    public function index()
    {
        return view('list');
    }
    
}