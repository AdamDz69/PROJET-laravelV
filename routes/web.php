<?php

use App\GoatsController;
use Illuminate\Support\Facades\Route;
use App\Models\Goat;

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


Route::get('/goats', function(){
    $goats = Goat::all();
    return view('goats.index',compact('goats'));
});
        
Route::get('/goats/create', function() {
    return view('goats.create');
});

//Show : afficher 1 seul goat
Route::get('/goats/{id}', function($id) {
    $goat = Goat::find($id);
    return view('goats.show',compact('goat'));
});

Route::get('/goats/{id}/edit', function($id) {
    $goat = Goat::find($id);
    return view('goats.edit', compact('goat'));
});

Route::patch('/goats/{id}', function($id) {
    //valider les données
    request()->validate([
        'price' =>'required',
        'name'=>'required',
        'birthday'=>'required',
        'color'=>'required',
    ]);
    
    dd('Validation OK');
    $goat = Goat::find($id);
    $goat->name = request()->name;
    $goat->price = request()->price;
    $goat->sex = request()->sex;
    $goat->birthday = request()->birthday;
    $goat->color = request()->color;
    $goat->save();
    return redirect('/goats/' . $goat->id);
});

