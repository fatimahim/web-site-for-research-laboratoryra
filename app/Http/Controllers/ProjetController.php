<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjetController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $projets=Projet::all();
        return view('Projet',compact('projets'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('espacepersonelle.ajouterprojet');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      /*  Projet::create(
        $request->all()

    ); 
    $input= $request->all();
    $arrayTostring=implode(',',$request->input('profs'));
    $Input['profs']=$arrayTostring;*/

    
        $request->validate([
            'nom'=>'required',
            'interv'=>'required',
            'profs'=>'required',
            'annee'=>'required',
        ]);
        $projet =new Projet();
        $projet->nom =$request->nom;
        $projet->interv =$request->interv;
        $projet->annee =$request->annee;
        $projet->profs =json_encode($request->profs);
        $projet->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        //
        
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    { 
        //
        $projet=Projet::findorFail($id);
        return view('espacepersonelle.modifierprojet',compact('projet'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $post =Projet::findorfail($id);
        $post->nom =$request->nom;
        $post->annee =$request->annee;
        $post->profs =$request->profs;
        $post->interv =$request->interv;
        $post->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
      Projet:: destroy($id);
      return redirect()->back();
    }
}
