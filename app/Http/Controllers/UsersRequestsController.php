<?php

namespace App\Http\Controllers;

use App\UsersRequest;
use App\RequestsPriorities;
use App\RequestsStatuses;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UsersRequestsController extends Controller
{
    public function index()
    {
        return view('requests.list', ['requests' => UsersRequest::all()]);
    }

    public function create()
    {
        $users = User::all();
        $requestsPriorities = RequestsPriorities::all();
        $requestStatuses = RequestsStatuses::all();
        return view('requests.create', compact('users', 'requestsPriorities', 'requestStatuses'));
    }

    public function show($requestId)
    {
        $request = UsersRequest::find($requestId);
        return view('requests.show', compact('request'));
    }

    /**
     * @param \App\UsersRequest $usersRequest
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(UsersRequest $usersRequest)
    {
        $users = User::all();
        $requestsPriorities = RequestsPriorities::all();
        $requestStatuses = RequestsStatuses::all();
        return view('requests.form', compact('usersRequest', 'users', 'requestsPriorities', 'requestStatuses'));
    }

    public function store(Request $request)
    {
        $requestData = $request->validate([
            'id_responsible' => 'nullable|numeric',
            'id_status'      => 'nullable|numeric',
            'id_priority'    => 'required|numeric',
            'description'    => 'required|string',
            'title'          => 'required|string',
        ]);
        $requestData['id_creator'] = \Auth::user()->id;
        $requests = UsersRequest::create($requestData);
        return redirect()->route('usersRequests.index');
    }

    public function update(UsersRequest $usersRequest, Request $request)
    {
        $requestData = $request->validate([
            'id_responsible' => 'nullable|numeric',
            'id_status'      => 'nullable|numeric',
            'id_priority'    => 'required|numeric',
            'description'    => 'required|string',
            'title'          => 'required|string',
            'closed_at'      => 'nullable|date',
        ]);
        $usersRequest->update($requestData);
        return redirect()->route('usersRequests.index');
    }

    public function close(UsersRequest $usersRequest)
    {
        $usersRequestData['closed_at'] = Carbon::now()->toAtomString();
        $usersRequest->update($usersRequestData);
        return redirect()->back();
    }
}
