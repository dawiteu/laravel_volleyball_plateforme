@extends('layouts.nav')

@section('navcontent')
    <li class="nav-item active">
        <a class="nav-link" href={{route('admin.home')}}>Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navequipes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Equipes</a>
        <div class="dropdown-menu" aria-labelledby="navequipes">
            <a class="dropdown-item" href={{route('equipe.index')}}>All équipes</a>
            <a class="dropdown-item" href={{route('equipe.create')}}>Ajouter équipe</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navjoeurs" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Joueurs</a>
        <div class="dropdown-menu" aria-labelledby="navjoeurs">
            <a class="dropdown-item" href={{route('joueur.index')}}>All Joueurs</a>
            <a class="dropdown-item" href={{route('joueur.create')}}>Ajouter joueur</a>
        </div>
    </li>
    <li class="nav-item ml-auto">
        <a class="nav-link" href={{route('client.home')}}>Home (client)</a>
    </li>   
@endsection
