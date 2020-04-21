@extends('layouts.index')

@section('content')
    <div class="container">
        <h1 class="text-center">User</h1>
        <div class="row m-0 border-bottom">
            <div class="col-2">ID</div>
            <div class="col-4">Nom</div>
            <div class="col-6">e-mail</div>
        </div>
        @foreach ($users as $user)
            <div class="row m-0">
                <div class="col-2">
                    <div class="p-2">{{$user->id}}</div>
                </div>
                <div class="col-4"> {{$user->name}} </div>
                <div class="col-6"> {{$user->email}} </div>
            </div>
        @endforeach
        <a href="/users/create" class="btn btn-success">Créer un utilisateur</a>
    </div>
@endsection