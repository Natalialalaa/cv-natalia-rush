@extends('base')

@section('title', "Modification Competence")

@section('content')
 <h1>Modification de Competence</h1>
<form action="" method="post">
    @csrf
    @method('PATCH')
    <div>
        <span>Nom</span>
        <input type="text" name="nom" value="{{old('nom', $competence->nom)}}">
        @error('nom')
            {{$message}}
        @enderror
    </div>
    <div>
        <span>Description</span>
        <input type="text" name="description" value="{{old('description', $competence->description)}}">
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