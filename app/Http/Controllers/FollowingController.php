<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowingController extends Controller
{
    public function following(User $user)
    {
        return view('users.following', [
            'following' => $user->follows,
            'user' => $user,
        ]);
    }

    public function follower(User $user)
    {
        return view('users.following', [
            'following' => $user->followers,
            'user' => $user,
        ]);
    }

    public function store(Request $request, User $user)
    {

        // if (Auth::user()->hasFollow($user)) {
        //     Auth::user()->unfollow($user);
        // } else {
        //     Auth::user()->follow($user);
        // }

        Auth::user()->hasFollow($user) ? Auth::user()->unfollow($user) : Auth::user()->follow($user);

        return back()->with("success", "You are follow the user");
    }
}
