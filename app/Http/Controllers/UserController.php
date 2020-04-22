<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view("users", compact('users'));
    }


    public function create()
    {
        $users = User::all();
        return view('users.create', compact('users'));
    }


    public function store(Request $request)
    {
        $user = new User();
        $user->name=request('name');
        $user->email=request('email');
        $user->password=request('password');

        $user->save();

        return redirect()->route('users.index');
    }

 
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view("users.edit", compact('id'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $id->delete();
        return redirect()->back();
    }
}
