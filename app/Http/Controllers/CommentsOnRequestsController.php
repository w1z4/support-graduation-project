<?php

namespace App\Http\Controllers;

use App\CommentsOnRequest;
use App\UsersRequest;
use Illuminate\Http\Request;

class CommentsOnRequestsController extends Controller
{

    public function store(UsersRequest $usersRequest, Request $request)
    {
        $commentData = $request->validate([
            'comment' => 'required|string',
        ]);
        $commentData['id_request'] = $usersRequest->id;
        $commentData['id_user'] = \Auth::id();
        CommentsOnRequest::create($commentData);
        return redirect()->back();
    }
}
