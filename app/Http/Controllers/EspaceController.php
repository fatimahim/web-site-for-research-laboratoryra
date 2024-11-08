<?php

namespace App\Http\Controllers;

use App\Models\Lprof;
use App\Models\Projet;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profs=Lprof::all();
        $users=User::all(); 
        $projets=Projet::all();
        return view('espacepersonelle.cheflabo',compact('profs','users','projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('espacepersonelle.ajoutprof');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $post =new Lprof();
        $post->nom =$request->nom;
        $post->prenom =$request->prenom;
        $post->email =$request->email;
        $post->grade =$request->grade;
        $post->tele =$request->tele;
        $post->equipe =$request->equipe;
        $post->save();
        return redirect()->route('cheflabo.home');
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
    public function edit($id)
    {
        $prof=Lprof::findorFail($id);
        return view('espacepersonelle.modifierprof',compact('prof'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $post =Lprof::findorfail($id);
        $post->nom =$request->nom;
        $post->prenom =$request->prenom;
        $post->email =$request->email;
        $post->grade =$request->grade;
        $post->tele =$request->tele;
        $post->equipe =$request->equipe;
        $post->save();
        return redirect()->route('cheflabo.home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
      Lprof:: destroy($id);
        return redirect()->route('cheflabo.home');
    }
}
