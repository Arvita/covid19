<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Contracts\Auth\Guard,
    App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Guard $auth)
    {
        return view('Backend.dashboard',['m_dashboard' => 'active open',
        'user' => $auth->user()]);
    }
    public function show_404()
    {
        return view('errors.404');
    }
}
