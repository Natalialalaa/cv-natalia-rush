@extends('base')

@section('title', 'Ajouter formation')

@section('content')
 <h1>Ajouter une formation</h1>
<form action="" method="post">
    @csrf
    <div>
        <span>Nom</span>
        <input type="text" name="nom" >
        @error('nom')
            {{$message}}
        @enderror
    </div>
    <div>
        <span>Etablissement</span>
        <input type="text" name="etablissement" >
        @error('etablissement')
            {{$message}}
        @enderror
    </div>
    <div>
        <span>Lieu</span>
        <input type="text" name="lieu" >
        @error('lieu')
            {{$message}}
        @enderror
    </div>
    <div>
        <span>Debut</span>
        <input type="date" name="debut" >
        @error('debut')
            {{$message}}
        @enderror
    </div>
    <div>
        <span>Fin</span>
        <input type="date" name="fin" >
        @error('fin')
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