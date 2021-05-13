@extends('layouts.index')

@section('content')
    @include('admin.partials.nav')
    
    <h1 class="my-5"> ALL  Equipes </h1> 
    @if (count($eqs) > 1 ) {{-- + que 1 parce que le groupe 1 cest pas d equipe .. --}} 
        <table class="table table-striped text-center">
            <tr class="text-success font-weight-bold">
                <td> # // id  </td>
                <td>Nom</td> 
                <td>Ville </td> 
                <td> Pays </td>
                <td>Continent </td>
                <td>Max Joueurs: </td> 
                <td>ATT</td><td>CT</td><td>DC</td><td>RP</td>
                <td>Action</td>
            </tr>

            @foreach ($eqs as $eq)
                @if ($eq->id != 1)
                    <tr>
                        <td> {{ $loop->iteration }} // ({{ $eq->id }}) </td>
                        <td> {{ $eq->nom }} </td> 
                        <td> {{ $eq->ville }}</td>
                        <td> {{ $eq->pays }}</td>
                        <td> {{ $eq->continent->nom }}</td>
                        <td> {{ $eq->max }}</td>
                        <td> {{ $eq->ATT }}</td><td> {{ $eq->CT }}</td> <td> {{ $eq->DC }}</td> <td> {{ $eq->RP }}</td>
                        <td>
                            <a href="{{route('equipe.edit', $eq->id) }}" class="btn btn-warning">M</a>

                            <form action={{route('equipe.destroy', $eq->id)}} class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-danger" OnClick="javascript:confirm('sûr à 100 %?');">X</button>    
                            </form>
                    </tr>
                @endif

            @endforeach
            <p class="text-right">Joueurs sans équipe: {{ count($sansequipe) }} <p>
        </table>
    @else
        <h4 class="text-center text-danger mt-5 pt-5">Pas d'équipes pour l'instant.</h4> 
    @endif
    @forelse ($eqs as $eq)
        

            
    @empty
        
    @endforelse
@endsection