<?php

namespace App\Http\Controllers;

class FrontPageController extends Controller
{

    public function index()
    {
        return view('frontpage.index');
    }

    public function aboutus()
    {
        return view('frontpage.aboutus');
    }

    public function services()
    {
        return view('frontpage.services');
    }

    public function contactus()
    {
        return view('frontpage.contactus');
    }

    public function newsroom()
    {
        return view('frontpage.newsroom');
    }

}
