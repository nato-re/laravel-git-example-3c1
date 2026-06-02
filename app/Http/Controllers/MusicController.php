<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMusicRequest;
use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musics = Music::all();
        return view("musics.index", [
            "musics"=> $musics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("musics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMusicRequest $request)
    {
        // Validação Inline
        // $validated = $request->validate([
        //     'name' => 'string|max:255|required',
        //     'album' => 'string|max:255|required',
        //     'duration' => 'integer|max:1000|min:0|required',
        //     'artist' => 'string|max:255|required',
        // ]);
        Music::create($request->validated());
        return redirect()->route('musics.index')->with("success","Música criada com sucesso");
    }

    /**
     * Display the specified resource.
     */
    public function show(Music $music)
    {
        return view("musics.show", compact("music"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $music = Music::findOrFail($id);
        return view("musics.edit", compact("music"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMusicRequest $request, Music $music)
    {
        $music->update($request->validated());
        return redirect()->route('musics.index')->with("success","Música $music->name atualizada");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Music $music)
    {
        $music->delete();
        return redirect()->route('musics.index')->with("success","Música $music->name deletada");

    }
}
