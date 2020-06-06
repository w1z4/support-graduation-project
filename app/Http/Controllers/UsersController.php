<?php

namespace App\Http\Controllers;

use App\User;
use App\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.list', ['users' => Users::all()->sortBy('id')]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function edit(User $user)
    {
        return view('users.form', compact('user'));
    }
}
