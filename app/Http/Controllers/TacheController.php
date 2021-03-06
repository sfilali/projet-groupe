<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tache;
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

        $tache-> name = $request-> tache_name;
        $tache-> description = $request-> description;
        $tache-> projets_id = $request-> projets_id;

        $tache->save();
        return redirect()->route('taches.index');
    }


    public function show(Tache $tache)
    {
        //
    }


    public function edit(Tache $tach)
    {
        $projets = Projet::all();
        return view("taches.edit", compact('tach', 'projets'));
    }

 
    public function update(Request $request, Tache $tach)
    {
        $tach-> name = $request-> tache_name;
        $tach-> description = $request-> description;
        $tach-> projets_id = $request-> projets_id;
        $tach->save();
        return redirect()->route('taches.index');
    }


    public function destroy(Tache $tach)
    {
        $tach->delete();     
        return redirect()->back();
    }
}
