@extends('layouts.index')

@section('content')
    <div class="container">
        <h1 class="text-center">Projets</h1>
        <div class="row m-0 border-bottom ">
            <div class="col-3">Nom du projet</div>
            <div class="col-5">Description</div>
            <div class="col-2">Users ID</div>
            <div class="col-2">Actions</div>
        </div>
        @foreach ($projets as $projet)
            <div class="row m-0">
                <div class="col-3">
                    <div class="p-2">{{$projet->name}}</div>
                </div>
                <div class="col-5">
                    <div class="p-2">{{$projet->description}}</div>
                </div>
                <div class="col-2">
                    <div class="p-2">{{$projet->users_id}}</div>
                </div>
                <div class="col-2">
                    <div class="p-2">
                        <form action="projets/{{$projet->id}}/edit">
                            @csrf
                            <button type="submit" class="btn btn-info">Edit</button>
                        </form>
                        <form action="projets/{{$projet->id}}" method="post">
                            @csrf
                             @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <a href="/projets/create" class="btn btn-success">Créer un Projet</a>
    </div>
@endsection