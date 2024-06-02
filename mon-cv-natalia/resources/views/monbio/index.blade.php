@extends('base')
@section('title', 'Mon CV')

@section('content')
    <h1>Biographie</h1>
    <!-- <a href="/*{/*{/*route('biographie.create')*/}}">Afficher un biographie</a> -->
    @foreach ($biographie as $bio)
        <p>{{ $bio->description }}</p>
    @endforeach
@endsection