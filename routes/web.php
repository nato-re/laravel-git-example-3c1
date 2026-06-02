<?php

use App\Http\Controllers\MusicController;
use App\Models\Music;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (Request $request) {
    Log::info("Meu dado");
    return "Hello World";
});

Route::get('/home', function (Request $request) {
    return view('home', ['nome' => "renato"]);
});

Route::get("/users", function (Request $request) {
    $users = User::all(); 

    return $users;
});


Route::get("/create-test-music", function (Request $request) {
    Music::create([
        'name' => "Delírios",
        "album" => 'Baile',
        'artista' => 'FBC',
    ]);
});

Route::get("/musics", [MusicController::class, 'index'])->name('musics.index');
Route::get("/musics/create", [MusicController::class, 'create'])->name('musics.create');
Route::post("/musics", [MusicController::class, 'store'])->name('musics.store');
Route::get("/musics/{music}", [MusicController::class, 'show'])->name('musics.show');
Route::delete("/musics/{music}", [MusicController::class, 'destroy'])->name('musics.destroy');
Route::get("/musics/{id}/edit", [MusicController::class, 'edit'])->name('musics.edit');
Route::put("/musics/{music}", [MusicController::class, 'update'])->name('musics.update');


