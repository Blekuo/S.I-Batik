<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Webpack;

class GuestController extends Controller
{
    public function index()
    {
        $icon = Webpack::where('name', 'webicon')->first();
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('welcome', compact('icon'));
    }
}
