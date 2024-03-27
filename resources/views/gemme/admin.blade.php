@extends('interface.admin')
@section('contenu')
<nav>
    <ul id="ariane">
        <li style="font-size:2rem">Accueil</li>
    </ul>
</nav>
<div class="interface">
    <section class="liste">
        <h2>Listes des pierres précieuses et semi-précieuses</h2>
        <a href="{{action('GemmeController@create')}}" style="font-size:2rem">Ajouter une gemme</a>
        <ul>
        @foreach($gemmes as $gemme)
            <a href="{{action('GemmeController@adminInfo', $gemme)}}" class="element"><li>{{$gemme->nom}}</li></a>
            <section style="position:relative; left:4em; bottom:0.5em;">
                <a href="{{action('GemmeController@edit', $gemme)}}">Modifier</a>|<a href="{{action('GemmeController@destroy', $gemme)}}" onclick="return confirm('Voulez-vous vraiment supprimer cette gemme?')">Supprimer</a>
            </section>
        @endforeach
        </ul>
    </section>
</div>
@endsection