@extends('layouts.index')

@section('content')
    
<h2 class="text-center pt-5">User Edit</h2>
<div  class="d-flex justify-content-center m-5">

	<div  class="w-100 border bg-light p-5">
        <form  action="/users/{{$user->id}}"  method="POST" >
            @csrf
            @method('put')

                <div  class="form-group">
                    <label  for="">Projet Name</label>
                    <input  type="text" value={{$user->name}} class="form-control"  name="name"  id=""    placeholder="Name">
                </div>
            
            
                <div  class="form-group mb-4">
                    <label  for="">email</label>
                    <input  type="email" class="form-control" value={{$user->email}} name="email"  id=""  placeholder="Email">
                </div>

                <div  class="form-group mb-4">
                    <label  for="">password</label>
                    <input  type="text" class="form-control" value={{$user->password}} name="password"  id=""  placeholder="Password">
                </div>

                <div class="d-flex justify-content-center">
                    <button  class="btn btn-success" type="submit">Upload</button>
                </div>
        </form>
        
	</div>
</div>
@endsection