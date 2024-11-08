<?php

namespace App\Http\Controllers;

use App\Models\Pub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pubs=Pub::all();
        return view('espacepersonelle.doctorant',compact('pubs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('espacepersonelle.ajouterpub');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 
        $post =new Pub();
        $post->titre =$request->titre;
        $post->anne =$request->anne;
        $post->auteur1 =$request->auteur1;
        $post->auteur2 =$request->auteur2;
        $post->journal =$request->journal;
        $post->nom =Auth::user()->nom;
        $post->prenom =Auth::user()->Prénom;
        $post->image =Auth::user()->image;
        $post->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Pub $pub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pub=Pub::findorFail($id);
        return view('espacepersonelle.modifierpub',compact('pub'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post =Pub::findorfail($id);
        $post->titre =$request->titre;
        $post->anne =$request->anne;
        $post->auteur1 =$request->auteur1;
        $post->auteur2 =$request->auteur2;
        $post->journal =$request->journal;
        $post->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Pub:: destroy($id);
        return redirect()->back();
    }
  
}
