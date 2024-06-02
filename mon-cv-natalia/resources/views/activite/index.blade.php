@extends('base')
@section('titre', 'activite')

@section('content')
    <h1>Activite</h1>
    <!-- <a href="/*{/*{/*route('biographie.create')*/}}">Afficher un biographie</a> -->
    @foreach ($activite as $act)
        <p>{{ $act->description }}</p>
        <p>{{ $act->titre }}</p>
    @endforeach
@endsection