<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showblog(Request $request)
    {
        if ($request->session()->has('login') && $request->session()->get('login')) {

            return view('blogs.showblog');
        }

    }
}
