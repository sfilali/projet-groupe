@extends('layouts.index')
@section('content')
    <div class="container">
        <h1 class="text-center">Créer un Utilistaeur</h1>
        <form action="/users" method="post">
            @csrf
            <div class="form-group">
                <label  for="">Nom</label>
                <input name="name" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>e-mail</label>
                <input name="email" type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input name="password" type="password" class="form-control" >
            </div>
            <button type="submit" class="btn btn-success">Créer</button>
        </form>
    </div>

@endsection