<?php

namespace App\Http\Controllers;

use App\RequestsPriorities;

class RequestsPrioritiesController extends Controller
{
    public function index()
    {
        return view('requestsPriorities.list', ['requestsPriorities' => RequestsPriorities::all()]);
    }
}
