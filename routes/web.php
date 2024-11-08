<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\PubController;
use App\Http\Controllers\EspaceController;
use App\Http\Controllers\ChefequipeController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\MoreController;
use App\Http\Controllers\ActivationController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\DocController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\ValideController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use App\Models\Event;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $users=User::all(); 
    $events=Event::all(); 
    return view('fronend',compact('users','events'));
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All doctorant Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:doctorant'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:cheflabo'])->group(function () {
  
    Route::get('/cheflabo/home', [HomeController::class, 'cheflaboHome'])->name('cheflabo.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:chefEquipe'])->group(function () {
  
    Route::get('/chefEquipe/home', [HomeController::class, 'chefEquipeHome'])->name('chefEquipe.home');
});
//Prof

Route::middleware(['auth', 'user-access:Prof'])->group(function () {
  
    Route::get('/Prof/home', [HomeController::class, 'ProfHome'])->name('Prof.home');
});
 
//adjoint
Route::middleware(['auth', 'user-access:adjoint'])->group(function () {
  
    Route::get('/adjoint/home', [HomeController::class, 'adjointHome'])->name('adjoint.home');
});
Route::get('registerprof',[RegisterController::class,'showRegistrationForm1'])->name('registerprof');
Route::get('register',[RegisterController::class,'showRegistrationForm2'])->name('register');
Route::get('login',[LoginController::class,'logiin'])->name('login');
Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

 
Route::get('/inscriptionprof',[InscriptionController::class,'create']);
Route::post('/inscriptionprof/insert',[InscriptionController::class,'insert']);
Route::get('/inscriptionprof',[InscriptionController::class,'create']);
Route::resource('espace',EspaceController::class);
Route::get('/chefequipe',[ChefequipeController::class,'create']);
Route::resource('projet',ProjetController::class);
Route::resource('equipe',EquipeController::class);
Route::resource('pub',PubController::class);
Route::resource('more',MoreController::class);
Route::resource('profile',ProfileController::class);
Route::resource('budget',BudgetController::class);
Route::post('/activate',[ActivationController::class,'activate'])->name('activation');
Route::get('/code',[ActivationController::class,'index'])->name('code');
Route::get('/envoyer/{id}',[ActivationController::class,'envoyer'])->name('envoyer');
Route::get('/valide/{id}',[ValideController::class,'valide'])->name('valide');
Route::resource('prof',ProfController::class);
Route::resource('doc',DocController::class);
//doctorant
Route::get('/membres', [ValideController::class,'doct'])->name('doct');
////Evenement
Route::get('/Evenement',[InscriptionController::class,'event']);
 
//Evenementdetail
Route::get('/Evenementdetail', function () {
    return view('Evenementdetail');
});
Route::get('/Evenementdetail',[InscriptionController::class,'eventdetail']);


Route::get('/Projetinterface',[ProjetController::class,'index'])->name('projet.index');
Route::get('/ajoutevent', function () {
    return view('livewire.home');
});