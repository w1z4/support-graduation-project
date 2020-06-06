<?php

namespace App\Http\Controllers;

use App\RequestsStatuses;
use Illuminate\Http\Request;

class RequestsStatusesController extends Controller
{
    public function index()
    {
        return view('requestsStatuses.list', ['requestsStatuses' => RequestsStatuses::all()]);
    }
}
