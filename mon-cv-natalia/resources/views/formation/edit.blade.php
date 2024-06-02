@extends('base')

@section('title', 'Modifier experience')

@section('content')
 <h1>Modifier une experience</h1>
<form action="" method="post">
    @method('PATCH')
    @csrf
    <div>
        <span>Nom</span>
        <input type="text" name="nom" value="{{old('nom', $formation->nom)}}">
        @error('nom')
            {{$message}}
        @enderror
    </div>
    <div>
        <span>Etablissement</span>
        <input type="text" name="etablissement" value="{{old('etablissement', $formation->etablissement)}}">
        @error('etablissement')
            {{$message}}
        @enderror
    </div>
    <div>
        <span>Lieu</span>
        <input type="text" name="lieu" value="{{old('lieu', $formation->lieu)}}">
        @error('lieu')
            {{$message}}
        @enderror
    </div>
    <div>
        <span>Debut</span>
        <input type="date" name="debut" value="{{old('debut', $formation->debut)}}">
        @error('debut')
            {{$message}}
        @enderror
    </div>
    <div>
        <span>Fin</span>
        <input type="date" name="fin" value="{{old('fin', $formation->fin)}}">
        @error('fin')
            {{$message}}
        @enderror
    </div>
    <div>
        <span>Description</span>
        <input type="text" name="description"value="{{old('description', $formation->description)}}">
        @error('description')
            {{$message}}
        @enderror
    </div>
    <div>
        <button>Modifier</button>
    </div>
</form>
<a href="{{route('home')}}">Accueil</a>
@endsection