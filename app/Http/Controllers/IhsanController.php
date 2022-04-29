<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IhsanController extends Controller
{
    public function index()
    {
        return view('IHSAN.index');
    }
    public function index_next()
    {
        return view('IHSAN.index_next');
    }
}
