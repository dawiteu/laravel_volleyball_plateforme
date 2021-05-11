@extends('layouts.nav')

@section('navcontent')
    <li class="nav-item active">
        <a class="nav-link" href={{route('admin.home')}}>Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Equipes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Joueurs</a>
    </li>
    <li class="nav-item ml-auto">
        <a class="nav-link" href={{route('client.home')}}>Home (client)</a>
    </li>   
@endsection
