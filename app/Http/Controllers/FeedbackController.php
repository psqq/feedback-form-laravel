<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function form()
    {
        return view('home');
    }

    public function list()
    {
        return view('home');
    }
}
