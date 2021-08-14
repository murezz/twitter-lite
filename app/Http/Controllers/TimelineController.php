<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimelineController extends Controller
{
    public function index()
    {

        $statuses = Auth::user()->timeline();
        return view('timeline', compact('statuses'));
    }
}
