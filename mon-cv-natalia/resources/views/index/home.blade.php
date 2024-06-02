@extends('base')
@section('title', 'Mon CV')
@if(session('success'))
    <div style="background-color: greenyellow">{{session('success')}}</div>  
@endif
@section('content')
<h1>Ma Biographie</h1>
    @foreach($mabio as $bio)
        <a href="{{route('monbio.edit', $bio->id)}}">Modifier</a>
        {{$bio->description}}
    @endforeach
 <h1>Competences</h1>
 <a href="{{route('competence.create')}}">Ajouter une compétence</a>
 <ul>
    @foreach($competences as $competence)
    <li> 
        <a href="{{route('competence.edit', $competence->id)}}">Modifier</a>
        <a href="{{route('competence.delete', $competence->id)}}">Supprimer</a>
        <p><b>{{$competence->nom}}:</b> </p>
        <p>{{$competence->description}}</p>
    </li>
    @endforeach
 </ul>
 <h1>Experiences</h1>
 <a href="{{route('experience.create')}}">Ajouter une experience</a>
 <ul>
    @foreach($experiences as $experience)
    <li>
        <a href="{{route('experience.edit', $experience->id)}}">Modifier</a>
        <a href="{{route('experience.delete', $experience->id)}}">Supprimer</a>
        <p><b>Experience: </b> {{$experience->nom}}</p>
        <p><b>Etablissement: </b>{{$experience->etablissement}}</p>
        <p><b>Ville: </b>{{$experience->lieu}}</p>
        <p><b>Date de début: </b>{{date('d-m-Y', strtotime($experience->debut));}}</p>
        <p><b>Date de fin: </b>{{date('d-m-Y', strtotime($experience->fin));}}</p> 
        <p><b>Description: </b>{{$experience->description}}</p>
    </li>
    @endforeach
 </ul>
 <h1>Formations</h1>
 <a href="{{route('formation.create')}}">Ajouter une formation</a>
 <ul>
    @foreach($formations as $formation)
    <li>  
        <a href="{{route('formation.edit', $formation->id)}}">Modifier</a>
        <a href="{{route('formation.delete', $formation->id)}}">Supprimer</a>
        <p><b>Formation: </b> {{$formation->nom}}</p>
        <p><b>Etablissement: </b>{{$formation->etablissement}}</p>
        <p><b>Ville: </b>{{$formation->lieu}}</p>
        <p><b>Date de début: </b>{{date('d-m-Y', strtotime($formation->debut));}}</p>
        <p><b>Date de fin: </b>{{date('d-m-Y', strtotime($formation->fin));}}</p> 
        <p><b>Description: </b>{{$formation->description}}</p>
    </li>
    @endforeach
 </ul>
@endsection