<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class ChefequipeController extends Controller
{
    //
    public function create (){ 
         $events=Event::all();
        return view('espacepersonelle.chefequipe',compact('events'));
    }
}
