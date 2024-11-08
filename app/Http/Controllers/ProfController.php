<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doc;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        //
        $users=User::all();
        $docs=Doc::all();
        return view('espacepersonelle.prof',compact('docs','users'));
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
        $post->nom =$request->nom;
        $post->Prénom =$request->Prénom;
        $post->email =$request->email;
        $post->Grade =$request->Grade;
        $post->tél =$request->tél;
        $post->Equipe =$request->Equipe;
        $post->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
