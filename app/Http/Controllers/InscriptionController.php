<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Event;
///save photo in folder
 
class InscriptionController extends Controller
{
    public function create (){
        return view('inscription.inscriptionprof');
    }
 
    
    public function event (){
        $events=Event::all();
        return view('Evenement',compact('events'));
    }
    public function eventdetail (){
        $events=Event::all();
    return view('Evenementdetail',compact('events'));
    }
    




    public function insert(Request $request){
        $file_extension=$request->image->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path='images/profs';
        $request->image->move($path,$file_name);
        DB::table('iprofs')->insert([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'tele'=>$request->tele,
            'grade'=>$request->grade,
            'equipe'=>$request->equipe,
            'image'=>$file_name,
        ]);
        return response('donné saisie ');
    }
    
}
