<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    public function index()
    {
        $statuses = Status::where('user_id', Auth::user()->id)->get();
        return view('timeline', compact('statuses'));
    }
}
