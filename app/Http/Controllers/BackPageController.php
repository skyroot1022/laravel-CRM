<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackPageController extends Controller
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

    public function main()
    {
        return view('backpage.main');
    }

    public function minor()
    {
        return view('backpage.minor');
    }
}
