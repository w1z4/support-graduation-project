<?php

namespace App\Http\Controllers;

use App\RequestsStatus;
use Illuminate\Http\Request;

class RequestsStatusesController extends Controller
{
    public function index()
    {
        return view('requestsStatuses.list', ['requestsStatuses' => RequestsStatus::all()]);
    }

    public function create()
    {
        return view('requestsStatuses.create');
    }

    public function edit(RequestsStatus $requestsStatus)
    {
        return view('requestsStatuses.form', compact('requestsStatus'));
    }

    public function store(Request $request)
    {
        $roleData = $request->validate([
            'title' => 'required|max:20',
        ]);
        RequestsStatus::create($roleData);
        return redirect()->route('requestsStatuses.index');
    }

    public function update(RequestsStatus $requestsStatus, Request $request)
    {
        $requestStatusData = $request->validate([
            'title' => 'required|max:20',
        ]);
        $requestsStatus->update($requestStatusData);
        return redirect()->route('requestsStatuses.index');
    }

    public function destroy(RequestsStatus $requestsStatus)
    {
        $requestsStatus->delete();
        return redirect()->route('requestsStatuses.index');
    }
}
