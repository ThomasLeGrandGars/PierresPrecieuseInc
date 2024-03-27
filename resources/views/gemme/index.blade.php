@extends('interface.index')
@section('contenu')
<div class="interface">
    <section class="liste">
        <h2>Listes des pierres précieuses et semi-précieuses</h2>
        <ul>
        @foreach($gemmes as $gemme)
            <a href="{{action('GemmeController@show', $gemme)}}" class="element"><li>{{$gemme->nom}}</li></a>
        @endforeach
        </ul>
    </section>
</div>
@endsection