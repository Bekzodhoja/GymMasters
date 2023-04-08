<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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

    public function bloge()
    {
        $blogt=Blog::all();

        return view('pages.bloge',compact('blogt'));
    }

    public function classes()
    {
        return view('pages.classes');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function detail(Blog $blog)
    {
        
        return view('pages.detail',compact('blog'));
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
