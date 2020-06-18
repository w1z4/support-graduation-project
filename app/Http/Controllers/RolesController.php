<?php

namespace App\Http\Controllers;

use App\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        return view('roles.list', ['roles' => Role::all()->sortBy('id')]);
    }

    public function create()
    {
        return view('roles.create');
    }

    public function edit(Role $role)
    {
        return view('roles.form', compact('role'));
    }

    public function store(Request $request)
    {
        $roleData = $request->validate([
            'title' => 'required|max:15',
        ]);
        $role = Role::create($roleData);
        return redirect()->route('roles.index');
    }

    public function update(Role $role, Request $request)
    {
        $roleData = $request->validate([
            'title' => 'required|max:15',
        ]);
        $role->update($roleData);
        return redirect()->route('roles.index');
    }

    public function destroy(Role $role){
        $role->delete();
        return redirect()->route('roles.index');
    }
}
