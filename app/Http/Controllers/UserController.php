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


    public function edit(User $user)
    {
        return view("users.edit", compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $user-> name = $request-> name;
        $user-> email = $request-> email;
        $user-> password = $request-> password;
        $user->save();
        return redirect()->route('users.index');
    }


    public function destroy(User $user)
    {

        $user->delete();
        return redirect()->back();
    }
}
