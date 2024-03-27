@extends('interface.show')
@section('contenu')
<nav>
    <ul id="ariane">
        <a href="{{action('GemmeController@indexAdmin')}}"><li style="font-size:2rem">Accueil</li></a>
        <li style="font-size:2rem">{{$gemme->nom}}</li>
    </ul>
</nav>
<div class="interface">    
    <section class="infos">
        <h2>{{$gemme->nom}}</h2>
        <p class="description">
            {{$gemme->description}}
        </p>
        </br>
        <p class="symbolisme">
            {{$gemme->symbolisme}}
        </p>
    </section>
    <section>
        <a href="{{action('GemmeController@edit', $gemme)}}">Modifier</a>|<a href="{{action('GemmeController@destroy', $gemme)}}" onclick="return confirm('Voulez-vous vraiment supprimer cette gemme?')">Supprimer</a>
    </section>
</div>
@endsection