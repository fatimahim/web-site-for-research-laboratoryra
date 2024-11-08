<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
class ValideController extends Controller
{
    //
    public function valide($id)
    {
        $event=Event::findorFail($id);
        $event->is_activated=1;
        $event->save();
        DB::table('notifications')->where('data->eventid',$id)->update([
            'data->is_activated'=>1
        ]);
        return back()->with('message', "Validée.");
 
    }
    public function doct()
    {
        $users=User::all(); 
        return view('doctorant',compact('users'));

    }
}

