<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipeRequest;
use App\Models\Continent;
use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function index(){
        $eqs = Equipe::all(); 
        $sansequipe = Joueur::all()->where('equipe_id', 1); 
        return view('admin.pages.eqs.index', compact('eqs', 'sansequipe')); 
    }


    public function create()
    {
        $continents = Continent::all(); 
        return view('admin.pages.eqs.create', compact('continents'));
    }

    public function store(EquipeRequest $request)
    {
        $neq = new Equipe(); // Nouvelle Equipe

        $neq->nom          = $request->name; 
        $neq->ville        = $request->ville; 
        $neq->pays         = $request->pays; 
        $neq->max          = $request->maxj; 
        $neq->continent_id = $request->continent; 

        $neq->save(); 

        return redirect()->route('equipe.index')->with('success','Equipe enrigistreeeee'); 
    }

    public function show(Equipe $equipe)
    {
        return view('admin.pages.eqs.show', compact('equipe')); 
    }
    

    public function edit(Equipe $equipe)
    {
        $continents = Continent::all(); 
        return view('admin.pages.eqs.edit', compact('equipe','continents')); 
    }

    public function update(EquipeRequest $request, Equipe $equipe)
    {
        $equipe->nom = $request->name; 
        $equipe->ville = $request->ville; 
        $equipe->pays = $request->pays; 
        $equipe->max = $request->maxj; 
        $equipe->continent_id = $request->continent; 

        $equipe->save(); 
        return redirect()->route('equipe.index')->with('success', ' equipe Modifiée.');
    }


    public function destroy(Equipe $equipe)
    {
        $equipe->delete();  // 
        return redirect()->route('equipe.index')->with('success', ' equipe supprimée.');
    }

}
