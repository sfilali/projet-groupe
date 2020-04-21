<?php

namespace App\Http\Controllers;

use App\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{

    public function index()
    {
        $taches = Tache::all();
        return view("taches", compact('taches'));
    }


    public function create()
    {
        $taches = Tache::all();
        return view('taches.create', compact('taches'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Tache $tache)
    {
        //
    }


    public function edit(Tache $tache)
    {
        //
    }

 
    public function update(Request $request, Tache $tache)
    {
        //
    }


    public function destroy(Tache $tache)
    {
        //
    }
}
