@extends('base')

@section('title', "Modification Biographie")

@section('content')
 <h1>Modification de Biographie</h1>
<form action="" method="post">
    @csrf
    @method('PATCH')
    <div>
        <span>Description</span>
        <input type="text" name="description" value="{{old('description', $monBio->description)}}">
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