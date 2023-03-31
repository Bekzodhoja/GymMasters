<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index()
    {
        return view('pages.index');
    }

 
    public function about()
    {
        return view('pages.about');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function classes()
    {
        return view('pages.classes');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function detail()
    {
        return view('pages.detail');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function testimoniol()
    {
        return view('pages.testimoniol');
    }

   
}
