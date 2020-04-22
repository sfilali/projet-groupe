<?php

namespace App\Http\Controllers;

use App\Projet;
use App\User;
use Illuminate\Http\Request;

class ProjetController extends Controller
{

    public function index()
    {
        $projets = Projet::all();
        return view("projets", compact('projets'));
    }


    public function create()
    {
        $users = User::all();
        return view('projets.create', compact('users'));
    }


    public function store(Request $request)
    {
        $projet = new projet();

        $projet-> name = $request-> projet_name;
        $projet-> description = $request-> description;
        $projet-> users_id = $request-> users_id;

        $projet->save();
        return redirect()->route('projets.index');
    }


    public function show(Projet $projet)
    {
        //
    }

 
    public function edit(Projet $projet)
    {
        return view("projets.edit", compact('projet'));

    }


    public function update(Request $request, Projet $projet)
    {
        //
    }

 
    public function destroy(Projet $projet)
    {
        $projet->delete();
        return redirect()->back();
    }
}
