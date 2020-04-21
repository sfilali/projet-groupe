<?php

namespace App\Http\Controllers;

use App\Projet;
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
        $projets = Projet::all();
        return view('projets.create', compact('projets'));

    }


    public function store(Request $request)
    {
        //
    }


    public function show(Projet $projet)
    {
        //
    }

 
    public function edit(Projet $projet)
    {
        //
    }


    public function update(Request $request, Projet $projet)
    {
        //
    }

 
    public function destroy(Projet $projet)
    {
        //
    }
}
