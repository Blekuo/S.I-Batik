<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Webpack;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware([\App\Http\Middleware\Authenticated::class,\App\Http\Middleware\SuperUser::class]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $icon = Webpack::where('name', 'webicon')->first();
        session()->flash('status','Login Success!');
        return view('home', compact('icon'));
    }
}
