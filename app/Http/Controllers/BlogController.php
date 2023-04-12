<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs=Blog::all();
        return view('pages.bloge');
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
       

            Blog::create([
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
        return view('pages.detail',compact('blog')); 
       }

    /**
     * Show the form for editing the specified resource.    
     */
    public function edit(Blog $blog)
    {
        Blog::find($blog->id);
        return view('admin.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreBlogRequest $request, Blog $blog)
    {
        if($request->hasFile('photo')){
            
            if(isset($blog->photo)){
                Storage::delete($blog->photo);
            }
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('blog-photos',$name);
        }
       

           $blog -> update([
            'title'=> $request->title,
            'content'=> $request->content,
            'description'=> $request->description,
            'photo'=> $path ?? $blog->photo,
           
        ]);

        return redirect()->route('blog.index',['blog'=>$blog->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Blog::find($blog->id);
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
