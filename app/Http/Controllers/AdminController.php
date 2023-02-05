<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class AdminController extends Controller
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
    public function index()
    {
        return view('admin');
    }
    public function to_home (Request $request) {
//         $prepath = Route::parameters();
//         //$path = $prepath('http://localhost:8000');
// dd($prepath);
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();

        return new RedirectResponse("http://localhost:8000"); 
    }
}
