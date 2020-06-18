<?php

namespace App\Http\Controllers;

use App\RequestsPriority;
use Illuminate\Http\Request;

class RequestsPrioritiesController extends Controller
{
    public function index()
    {
        return view('requestsPriorities.list', ['requestsPriorities' => RequestsPriority::all()]);
    }

    public function create()
    {
        return view('requestsPriorities.create');
    }

    public function edit(RequestsPriority $requestsPriority)
    {
        return view('requestsPriorities.form', compact('requestsPriority'));
    }

    public function store(Request $request)
    {
        $roleData = $request->validate([
            'title' => 'required|max:20',
        ]);
        RequestsPriority::create($roleData);
        return redirect()->route('requestsPriorities.index');
    }

    public function update(RequestsPriority $requestsPriority, Request $request)
    {
        $requestPriorityData = $request->validate([
            'title' => 'required|max:20',
        ]);
        $requestsPriority->update($requestPriorityData);
        return redirect()->route('requestsPriorities.index');
    }

    public function destroy(RequestsPriority $requestsPriority)
    {
        $requestsPriority->delete();
        return redirect()->route('requestsPriorities.index');
    }
}
