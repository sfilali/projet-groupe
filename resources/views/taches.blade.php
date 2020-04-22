@extends('layouts.index')

@section('content')
    
    <div class="container">
        <h1 class="text-center">Tâches</h1>
        <div class="row m-0 border-bottom ">
            <div class="col-3">Nom de la tâche</div>
            <div class="col-5">Description</div>
            <div class="col-2">Projets ID</div>
        </div>
        @foreach ($taches as $tache)
            <div class="row m-0">
                <div class="col-3">
                    <div class="p-2">{{$tache->name}}</div>
                </div>
                <div class="col-5">
                    <div class="p-2">{{$tache->description}}</div>
                </div>
                <div class="col-2">
                    <div class="p-2">{{$tache->projets_id}}</div>
                </div>
                <div class="col-2">
                    <div class="p-2">
                        <form action="taches/{{id}}/edit">
                            @csrf
                            <button type="submit" class="btn btn-info">Edit</button>
                        </form>
                        <form action="taches/{{id}}">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <a href="/taches/create" class="btn btn-success">Créer une Tâche</a>

    </div>
@endsection