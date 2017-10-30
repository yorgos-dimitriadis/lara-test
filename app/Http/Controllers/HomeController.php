<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Lang;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$txt = Lang::get('home');

        return view('home'); // view('home', ['txt' => $txt]) 
    }
}
