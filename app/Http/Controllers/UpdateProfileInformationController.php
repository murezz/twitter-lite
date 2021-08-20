<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateProfileInformationController extends Controller
{
    public function edit()
    {
        return view('users.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['string', 'min:3', 'max:191', 'required'],
            'email' => ['email', 'string', 'min:3', 'max:191', 'required'],
            'username' => ['required', 'alpha_num', 'unique:users,username,' . auth()->id()],
        ]);

        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
        ]);

        return back()->with('message', 'your profile has been update');
    }
}
