@extends('layouts.index')

@section('content')
    
<h2 class="text-center pt-5">Tache Edit</h2>
<div  class="d-flex justify-content-center m-5">

	<div  class="w-100 border bg-light p-5">
        <form  action="/taches/{{$tach->id}}"  method="POST" >
            @csrf
            @method('put')

                <div  class="form-group">
                    <label  for="">Projet Name</label>
                    <input  type="text" value={{$tach->name}} class="form-control"  name="tache_name"  id=""    placeholder="Name">
                </div>
            
            
                <div  class="form-group mb-4">
                    <label  for="">Description</label>
                    <input  type="text" class="form-control" value={{$tach->description}} name="description"  id=""  placeholder="Description">
                </div>
            
                <div class="form-group">
                    <label for="">Projet</label>
                    <select name="projets_id" id="projets_id">
                        @foreach ($projets as $projet)
                            <option value="{{$projet->id}}">{{$projet->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-center">
                    <button  class="btn btn-success" type="submit">Upload</button>
                </div>
        </form>
        
	</div>
</div>
@endsection