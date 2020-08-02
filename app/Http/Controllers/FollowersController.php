<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowersController extends Controller
{
    public function store (\App\User $user) {
        return auth()->user()->following()->toggle($user->profile);
    }
}
