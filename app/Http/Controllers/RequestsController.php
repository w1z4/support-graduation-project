<?php

namespace App\Http\Controllers;

use App\Requests;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function index()
    {
        return view('requests.list', ['requests' => Requests::all()]);
    }

    public function create()
    {
        return view('requests.create');
    }

    public function show($requestId)
    {
        $request=Requests::find($requestId);
        return view('requests.show',compact(['request']));
    }
}
