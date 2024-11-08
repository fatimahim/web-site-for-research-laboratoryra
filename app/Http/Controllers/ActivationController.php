<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Mail;
class ActivationController extends Controller
{
    public function index()
    {
        $user=User::all();
        return view('auth.activation',compact('user'));
    }
    public function activate(Request $request)
{
    $user = User::where('activation_code', $request->activation_code)->first();

    if (!$user) {
        return back()->with('error', "code d'activation incorrecte.");
    }

    $user->is_activated=true;
    $user->save();

    return redirect()->route('login')
                    ->with('message', 'activation réussit connectez-vous.');
}
public function envoyer(string $id)
    {
        $user=User::findorFail($id);
        Mail::send('espacepersonelle.email.mail', array(
            'name' =>"LibSiv",
            'code' => $user->activation_code,
        ), function($message) use ($user){
            $message->from('chef.laboratoir@gmail.com');
            $message->to($user->email)->subject("code d'activation de votre compte");
        });
        return back()->with('message', "code d'activation envoyé.");;
    }
    
}
