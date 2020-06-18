<?php

namespace App\Http\Controllers;

use App\UsersRequest;

class HomeController extends Controller
{
    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Вывод главной страницы
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',  ['requests' => UsersRequest::all()]);
    }
}
