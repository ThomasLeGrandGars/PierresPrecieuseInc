@extends('interface.show')
@section('contenu')
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
</div>
@endsection