@extends('layouts.index')

@section('content')
    @include('admin.partials.nav')
    
    <h1> Create BLADE Equipe </h1> 

    <form action={{route('equipe.store')}} method="POST">
    @csrf
    <div class="row">
        <div class="col-3">
            <label for="name">Nom:</label>
        </div>
        <div class="col-9">
            <input type="text" name="name" value="{{old('name')}}" /> 
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
            <input type="text" name="ville" value="{{old('ville')}}"/>
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
            <input type="text" name="pays" value="{{old('pays')}}"/>
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
            <input type="number" name="maxj" value="6" min="0" max="6" />
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
                    <option value="{{$cont->id}}">{{$cont->nom}}</option>
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