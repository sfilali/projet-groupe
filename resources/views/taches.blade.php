@extends('layouts.index')

@section('content')
    
    <div class="container">
        <h1 class="text-center">Tâches</h1>
        <div class="row m-0 border-bottom ">
            <div class="col-4">Nom de la tâche</div>
            <div class="col-6">Description</div>
            <div class="col-2">Projets ID</div>
        </div>
        @foreach ($taches as $tache)
            <div class="row m-0">
                <div class="col-4">
                    <div class="p-2">{{$tache->name}}</div>
                </div>
                <div class="col-6">
                    <div class="p-2">{{$tache->description}}</div>
                </div>
                <div class="col-2">
                    <div class="p-2">{{$tache->projets_id}}</div>
                </div>
            </div>
        @endforeach
        <a href="/taches/create" class="btn btn-success">Créer une Tâche</a>
    </div>
@endsection