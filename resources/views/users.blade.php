@extends('layouts.index')

@section('content')
    <div class="container">
        <h1 class="text-center">User</h1>
        <div class="d-flex justify-content-center m-3">
            <a href="/users/create" class="btn btn-success">Créer un utilisateur</a>
        </div>
        <div class="row m-0 border-bottom">
            <div class="col-2">ID</div>
            <div class="col-3">Nom</div>
            <div class="col-5">e-mail</div>
            <div class="col-2 text-center">Actions</div>
        </div>
        @foreach ($users as $user)
            <div class="row mt-1">
                <div class="col-2">
                    <div class="p-2">{{$user->id}}</div>
                </div>
                <div class="col-3">
                    <div class="p-2">{{$user->name}}</div>
                </div>
                <div class="col-5">
                    <div class="p-2">{{$user->email}}</div>
                </div>
                
                <div class="col-2 d-flex justify-content-around">
                    <form action="users/{{$user->id}}/edit ">
                        @csrf
                        <button type="submit" class="btn btn-info">Edit</button>
                    </form>
                    <form action="users/{{$user->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection