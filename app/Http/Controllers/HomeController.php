<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Lprof;
use App\Models\Projet;
use App\Models\Pub;
use App\Models\Doc;
use App\Models\User;
use App\Models\Event;
use App\Models\Equipe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */ 
    public function __construct()
    {
        $this->middleware(['auth', 'check.condition']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $pubs=Pub::all();
        return view('espacepersonelle.doctorant',compact('pubs'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cheflaboHome(): View
    { 
        $events=Event::all(); 
        $profs=Lprof::all();
        $users=User::all(); 
        $projets=Projet::all();
        $equipes=Equipe::all();
        return view('espacepersonelle.cheflabo',compact('profs','users','projets','equipes','events'));
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function chefEquipeHome(): View
    {
        $events=Event::all(); 
        return view('espacepersonelle.chefequipe',compact('events'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ProfHome(): View
    {
        $users=User::all(); 
        $docs=Doc::all();
        return view('espacepersonelle.prof',compact('users','docs'));
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adjointHome(): View
    {
        $events=Event::all(); 
        $profs=Lprof::all();
        $users=User::all(); 
        $projets=Projet::all();
        $equipes=Equipe::all();
        return view('adjointHome',compact('profs','users','projets','equipes','events'));
    }
}

    


