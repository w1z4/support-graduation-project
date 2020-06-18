<?php

namespace App\Http\Controllers;

use App\Roles;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.list', ['users' => User::all()->sortBy('id')]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function edit(User $user)
    {
        $roles = Roles::all()->sortBy('title');
        return view('users.form', compact('user', 'roles'));
    }

    public function store(Request $request)
    {
        $userData = $request->validate([
            'name'     => 'required|max:255',
            'email'    => 'required',
            'password' => 'required',
        ]);
        $userData['password'] = \Hash::make($userData['password']);
        $user = User::create($userData);
        return redirect()->route('users.edit', $user->id);
    }

    public function update(User $user, Request $request)
    {
        $userData = $request->validate([
            'name'      => 'required|max:255',
            'email'     => 'required',
            'password'  => 'nullable',
            'locked_at' => 'nullable',
        ]);
        if ($request->has('password')) {
            $userData['password'] = \Hash::make($userData['password']);
        }
        if ($request->has('locked_at')&&!$user->locked_at) {
            $userData['locked_at'] = Carbon::now()->toAtomString();
        }
        $user->update($userData);
        return redirect()->route('users.index');
    }

    public function lock(User $user)
    {
        $userData['locked_at'] = Carbon::now()->toAtomString();
        $user->update($userData);
        return redirect()->back();
    }

    public function unlock(User $user)
    {
        $userData['locked_at'] = null;
        $user->update($userData);
        return redirect()->back();
    }

    public function destroy()
    {
    }

    public function permissionsUpdate(User $user, Request $request)
    {
        if ($request->has('roles')) {
            $userData['ids_roles'] = $request->roles;
            $user->update($userData);
        }
        return redirect()->back();
    }
}
