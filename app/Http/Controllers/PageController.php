<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('profiles.index',['user' => $user,]);
    }
}

