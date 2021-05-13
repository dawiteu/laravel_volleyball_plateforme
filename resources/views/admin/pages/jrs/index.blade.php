@extends('layouts.index')

@section('content')
    @include('admin.partials.nav')
    
    <h1> Liste des Joueurs : </h1> 

    @if (count($jrs) > 0)
        <table class="table table-striped text-center">
                    <tr class="text-success font-weight-bold">
                        <td> # // id  </td>
                        <td> Genre </td>
                        <td> Nom</td> 
                        <td> Prénom </td> 
                        <td> Numéro </td>
                        <td> Pays </td>
                        <td>Rôle: </td> 
                        <td> Equipe? </td>
                        <td>Action</td>
                    </tr>
        @foreach ($jrs as $js)
                    <tr>
                        <td>{{ $loop->iteration }} // ({{ $js->id }})</td>
                        <td>{{ $js->genre->type }} </td>
                        <td>{{ $js->nom }} </td>
                        <td>{{ $js->prenom }} </td>
                        <td>{{ $js->numero }} </td>
                        <td>{{ $js->pays }} </td>
                        <td>{{ $js->role->nom }} </td>
                        <td>{{ $js->equipe_id != 0 ? $js->equipe->nom : "pas d'équipe" }} </td>
                        <td>
                            <a href="{{route('joueur.edit', $js->id)}}" class="btn btn-warning">M</a>

                            <form action="{{route('joueur.destroy', $js->id)}}" class="d-inline" method="POST">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger" type="submit" OnClick="javascript:confirm('tu es sûr à 100 %?');">X</button>
                            </form>
                    </tr>
        @endforeach
    @else
        <p>Pas de joueurs..</p>
    @endif

@endsection