@extends('layouts.index')

@section('content')
<div class="container">
    <h2 class="text-center">Créer une Tâche</h2>
    <div  class="d-flex justify-content-center m-5">
    
        <div  class="w-100 border bg-light p-5">
            <form  action="/taches"  method="POST" >
                @csrf
                    <div  class="form-group">
                        <label  for="">Tache Name</label>
                        <input  type="text" class="form-control"  name="tache_name" placeholder="Name">
                    </div>
                
                
                    <div  class="form-group mb-4">
                        <label  for="">Description</label>
                        <input  type="text" class="form-control"  name="description"  id=""  aria-describedby="emailHelp"  placeholder="Description">
                    </div>
                
                    <div class="form-group">
                        <label for="">Projets</label>
                        <select name="projets_id" id="projets_id">
                            @foreach ($projets as $projet)
                                <option value="{{$projet->id}}">{{$projet->name}}</option>
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