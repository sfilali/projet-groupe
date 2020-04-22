@extends('layouts.index')

@section('content')

<div class="container">
    <h2 class="text-center">Créer un Projet</h2>
    <div  class="d-flex justify-content-center m-5">
    
        <div  class="w-100 border bg-light p-5">
            <form  action="/projets"  method="POST" >
                @csrf
                    <div  class="form-group">
                        <label  for="">Projet Name</label>
                        <input  type="text" class="form-control"  name="projet_name"  id=""  aria-describedby="emailHelp"  placeholder="Name">
                    </div>
                
                
                    <div  class="form-group mb-4">
                        <label  for="">Description</label>
                        <input  type="text" class="form-control"  name="description"  id=""  aria-describedby="emailHelp"  placeholder="Description">
                    </div>
                
                    <div class="form-group">
                        <label for="">Users</label>
                        <select name="users_id" id="users_id">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <div class="d-flex justify-content-center">
                        <button  class="btn btn-success" type="submit">Envoyer</button>
                    </div>
            </form>
            
        </div>
    </div>
</div>


@endsection