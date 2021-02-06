<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function about()
    {
        return view('user.about');
    }

    public function product()
    {
        return view('user.product');
    }
}
