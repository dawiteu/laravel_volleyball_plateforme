@extends('layouts.index')

@section('content')
    @include('admin.partials.nav')
    
    <h1> EDIT BLADE Equipe </h1> 
    <form action={{route('equipe.update', $equipe->id)}} method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-3">
                <label for="name">Nom:</label>
            </div>
            <div class="col-9">
                <input type="text" name="name" value="{{ $equipe->nom }}" /> 
                @error('name')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
            </div>
    
            <div class="col-3">
                <label for="ville">Ville:</label>
            </div>
            <div class="col-9">
                <input type="text" name="ville" value="{{$equipe->ville}}"/>
                @error('ville')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="col-3">
                <label for="pays">Pays:</label>
            </div>
            <div class="col-9">
                <input type="text" name="pays" value="{{ $equipe->pays}}"/>
                @error('pays')
                <span class="text-danger">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
            </div>
            <div class="col-3">
                <label for="maxj">Max joueurs (6)</label>
            </div>
            <div class="col-9">
                <input type="number" name="maxj" value="{{ $equipe->max }}" min="0" max="6" />
                @error('maxj')
                    <span class="text-danger">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
    
            <div class="col-3"><label for="continent">Continent:</label></div>
            <div class="col-9">
                <select name="continent">
                    @foreach ($continents as $cont)
                        <option value="{{$cont->id}}" {{ $cont->id == $equipe->continent_id ? 'selected' : '' }}>{{$cont->nom}}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="col-12 text-center">
                <button class="btn btn-success" type="reset"><< Reset</button>
                <button class="btn btn-warning" type="submit"> Submit >> </button>
            </div>
        </div>
    
        </form>
@endsection