<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Pub; 

class MoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pubs=Pub::all();
        return view('Publication',compact('pubs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

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
        $post =User::findorfail($id);
        $post->Prénom =$request->Prénom;
        $post->nom =$request->nom;
        $post->Encadrant =$request->Encadrant;
        $post->Cne =$request->Cne;
        $post->Cin =$request->Cin;
        $post->tél =$request->tél;
        $post->save();
        return redirect()->route('pub.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        
    }
}
