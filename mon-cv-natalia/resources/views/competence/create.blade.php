@extends('base')

@section('title', 'Ajouter competence')

@section('content')
 <h1>Ajouter une competence</h1>
<form action="" method="post">
    @csrf
    <div>
        <span>Nom</span>
        <input type="text" name="nom">
        @error('nom')
            {{$message}}
        @enderror
    </div>
    <div>
        <span>Description</span>
        <input type="text" name="description">
        @error('description')
            {{$message}}
        @enderror
    </div>
    <div>
        <button>ajouter</button>
    </div>
</form>
<a href="{{route('home')}}">Accueil</a>
@endsection