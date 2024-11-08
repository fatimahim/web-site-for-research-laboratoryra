<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use Illuminate\Http\Request;

class DocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('espacepersonelle.ajouterdoc');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $post =new Doc();
        $post->nom =$request->nom;
        $post->prenom =$request->prenom;
        $post->email =$request->email;
        $post->Cne =$request->Cne;
        $post->cin =$request->cin;
        $post->tele =$request->tele;
        $post->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Doc $doc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $doc=Doc::findorFail($id);
        return view('espacepersonelle.modifierdoc',compact('doc'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    { 
        //

        $post =Doc::findorfail($id);
        $post->nom =$request->nom;
        $post->prenom =$request->prenom;
        $post->email =$request->email;
        $post->cne =$request->cne;
        $post->cin =$request->cin;
        $post->tele =$request->tele;
        
        $post->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Doc:: destroy($id);
        return redirect()->back();
    }
}
