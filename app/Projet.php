<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public function taches(){
        return $this->hasMany(Tache::class);
    }
}
