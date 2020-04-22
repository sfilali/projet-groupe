<?php

namespace App\Http\Controllers;

use App\Tache;
use Illuminate\Http\Request;
use App\Projet;

class TacheController extends Controller
{

    public function index()
    {
        $taches = Tache::all();
        return view("taches", compact('taches'));
    }


    public function create()
    {
        $projets = Projet::all();
        return view('taches.create', compact('projets'));
    }


    public function store(Request $request)
    {
        $tache = new tache();

        $tache-> name = $request-> taches_name;
        $tache-> description = $request-> description;
        $tache-> projets_id = $request-> projets_id;

        $tache->save();
        return redirect()->route('taches.index');
    }


    public function show(Tache $tache)
    {
        //
    }


    public function edit(Tache $tache)
    {
        return view("taches.edit", compact('tache'));
    }

 
    public function update(Request $request, Tache $tache)
    {

    }


    public function destroy(Tache $tach)
    {
        $tach->delete();     
        return redirect()->back();
    }
}
