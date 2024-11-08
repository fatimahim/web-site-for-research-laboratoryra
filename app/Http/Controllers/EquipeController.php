<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{  
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        //
        $equipes=Equipe::all();
        return view('Equipe',compact('equipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('espacepersonelle.ajouterequipe');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom'=>'required',
            'achro'=>'required',
            'chef'=>'required',
            'domaine'=>'required',
            'specialite'=>'required',
          
        ]);
        $file_extension=$request->photo->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path='images/profs';
        $request->photo->move($path,$file_name);
    
        $equipe =new Equipe();
        $equipe->nom =$request->nom;
        $equipe->achro =$request->achro;
        $equipe->chef =$request->chef;
        $equipe->domaine =$request->domaine;
        $equipe->specialite =$request->specialite;
        $equipe->other =$request->other;
        $equipe->photo = $file_name;
       
        $equipe->save();
        return redirect()->back();
       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $equipe=Equipe::findorFail($id);
        return view('Equipedetail',compact('equipe'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // 
        $equipe=Equipe::findorFail($id);
        return view('espacepersonelle.modifierequipe',compact('equipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $equipe=Equipe::findorFail($id);
        if($request->photo != NULL){
            $file_extension=$request->photo->getClientOriginalExtension();
            $file_name=time().'.'.$file_extension;
            $path='images/profs';
            $request->photo->move($path,$file_name);
            $equipe->photo =$file_name;
        }
            
        $equipe->nom =$request->nom;
        $equipe->achro =$request->achro;
        $equipe->chef =$request->chef;
        $equipe->domaine =$request->domaine;
        $equipe->specialite =$request->specialite;
        $equipe->other =$request->other;
        $equipe->save();
        return redirect()->back();
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Equipe:: destroy($id);
      return redirect()->back();
    }
}
