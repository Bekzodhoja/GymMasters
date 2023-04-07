<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs=Blog::all();
        return view('pages.bloge', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        if($request->hasFile('photo')){
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('blog-photos',$name);
        }
       

       $blogs= Blog::create([
            'title'=> $request->title,
            'content'=> $request->content,
            'description'=> $request->description,
            'photo'=> $path ?? null,
           
        ]);


        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $blogt=Blog::find($blog->id);
        return view('pages.detail',compact('blog'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
