<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OriginalController extends Controller
{
    public function index()
    {
        return view('toppage');
    }
    
    public function service()
    {
        return view('service');
    }
    
    public function list()
    {
        return view('list');
    }
    
    public function mypage()
    {
        return view('mypage');
    }
    
    public function newpost()
    {
        return view('newpost');
    }
}