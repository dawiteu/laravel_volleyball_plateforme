<?php

namespace App\Http\Controllers;

use App\Http\Requests\JoueurRequest;
use App\Models\Equipe;
use App\Models\Genre;
use App\Models\Joueur;
use App\Models\Role;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jrs = Joueur::all();
        return view('admin.pages.jrs.index', compact('jrs')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $roles = Role::all(); 
        $eqs = Equipe::all(); 

        return view('admin.pages.jrs.create', compact('genres','roles', 'eqs')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JoueurRequest $request)
    {
        $joueur = new Joueur(); 

        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->numero = $request->numero;
        $joueur->pays = $request->pays;
        $joueur->genre_id = $request->genre;
        $joueur->role_id = $request->role;

        //if($request->equipe_id != 0){
            $joueur->equipe_id = $request->equipe; // equipe
        //}else{
        //    $joueur->equipe_id = 0; 
        //}

        $joueur->save(); 
        return redirect()->route('joueur.index')->with('success','joueur enrigistreeeee'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function show(Joueur $joueur)
    {
        return view('admin.pages.jrs.show', compact('joueur')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit(Joueur $joueur)
    {
        return view('admin.pages.jrs.edit', compact('joueur')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        $joueur->delete();
        return redirect()->route('joueurs.index');
    }
}
