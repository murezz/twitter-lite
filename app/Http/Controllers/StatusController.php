<?php

namespace App\Http\Controllers;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StatusRequest;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    public function store(StatusRequest $request)
    {

        Auth::user()->statuses()->create([
            'body' => $request->body,
            'identifier' => Str::random(32),
        ]);

        return redirect()->back();
    }
}
