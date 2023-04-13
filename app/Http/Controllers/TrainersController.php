<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\StoretrainRequest;
use Illuminate\Support\Facades\Storage;

class TrainersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Trainer $trainers)
    {
        $trainers=Trainer::all();
        return view('admin.team.index',compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        if($request->hasFile('photo')){
            $name=$request->file('photo')->getClientOriginalName();
            $path=$request->file('photo')->storeAs('train-photo',$name);

        }
       Trainer::create([
        'name'=>$request->name,
        'type'=>$request->type,
        'link'=>$request->link,
        'phone'=>$request->phone,
        'photo'=>$path ?? null,
       ]);
                return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Trainer $trainers)
    {
        $trainers=Trainer::all();
        return view('pages.team',compact('trainers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trainer $train)
    {
        Trainer::find($train->id);
        return view('admin.team.edit',compact('train'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTeamRequest $request, Trainer $trainer)
    {
        if($request->hasFile('photo'))
        {
            if(isset($trainer->photo))
            {
                Storage::delete($trainer->photo);
            }
            $name=$request->file('photo')->getClientOriginalName();
            $path=$request->file('photo')->storeAs('train->photo',$name);
        }

      $trainer->update([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'type'=>$request->type,
        'link'=>$request->link,
        'photo'=>$path ?? $trainer->photo,
      ]);
      return redirect()->route('train.index',['train'=>$trainer->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $train = Trainer::find($id);

        $train->delete();

        return redirect()->route('train.index');
    }
}
