<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function form()
    {
        return view('feedback.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'company' => 'required',
            'name' => 'required',
            'message' => 'required'
        ]);

        $feedback = array_merge($request->all(), ['user_id' => Auth::user()->id]);
        Feedback::create($feedback);

        return back()->with('success', 'Feedback received!');
    }

    public function list()
    {
        return view('feedback.list', ['feedbacks' => Auth::user()->feedbacks]);
    }
}
