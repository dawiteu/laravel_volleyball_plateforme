@extends('layouts.index')

@section('content')
    @include('admin.partials.nav')
    
    <h1 class="my-5"> Create BLADE Joueur </h1> 

    <form action="{{route('joueur.store')}}" method="POST">
    @csrf

    
    <div class="row">
        <div class="col-2"><label for="nom">Nom:</label></div>
        <div class="col-10"> 
            <input type="text" name="nom" value="{{old('nom')}}" />
            @error('nom')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>

        <div class="col-2"><label for="prenom">Prénom:</label></div>
        <div class="col-10">
            <input type="text" name="prenom" value="{{old('prenom')}}"/>
            @error('prenom')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>

        <div class="col-2"><label for="age">Année de naissance:</label></div>
        <div class="col-10">
            <select name="age">
                @for ($i = date('Y'); $i >= (date('Y')-120); $i--)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            @error('age')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        </div>

        <div class="col-2"><label for="numero">Numero</label></div>
        <div class="col-10">
            <select name="numero">
                @for ($i = 1; $i < 11; $i++)
                    <option value="{{$i}}" {{ $i == old('numero') ? 'selected' : ''}}> {{$i}} </option> 
                @endfor
            </select>
            @error('numero')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        </div>

        <div class="col-2"><label for="pays">Pays:</label></div>
        <div class="col-10"><input type="text" name="pays" value="{{old('pays')}}"/>
            @error('pays')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
        @enderror
    </div>

        <div class="col-2"><label for="genre">Genre:</label></div>
        <div class="col-10">
            <select name="genre">
                @foreach ($genres as $genre)
                    <option value="{{$genre->id}}" {{ $i == old('genre') ? 'selected' : ''}}>{{$genre->type}} </option>
                @endforeach
            </select>
            @error('genre')
            <span class="text-danger">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        </div>

        <div class="col-2"><label for="role">Role:</label></div>
        <div class="col-10">
            <select name="role">
                @foreach ($roles as $role)
                    <option value="{{$role->id}}" {{ $i == old('role') ? 'selected' : ''}}>{{$role->nom}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-3"><label for="equipe">Equipe? (non obligatoire)</label></div>
        <div class="col-9">
            <select name="equipe">
                @foreach ($eqs as $eq)
                    <option value="{{$eq->id}}" {{ $i == old('equipe') ? 'selected' : ''}}> {{$eq->nom}} </option>
                @endforeach
                        {{-- <option value="0">--pas d'equipe--</option> --}} 
                        {{-- temporairement indisponible psq marche pas // relation avec la db --}}
            </select>
        </div>

        <div class="col-12">
            <button class="btn btn-success" type="submit">Ajouter</button>
        </div>

    </div>

</form>
@endsection