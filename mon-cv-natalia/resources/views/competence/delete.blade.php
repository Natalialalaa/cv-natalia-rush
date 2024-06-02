@extends('base')

@section('title', 'Supprimer {{$competence->nom}}')

@section('content')
 <h1>Supprimer</h1>
    <h2> Supprimer {{$competence->nom}} ?</h2>
    <form action="" method="POST">
        @csrf
        @method('DELETE')
        <div>
            <button>Supprimer</button>
        </div>
    </form>
    <a href="{{route('home')}}"><button>Annuler</button></a>
@endsection