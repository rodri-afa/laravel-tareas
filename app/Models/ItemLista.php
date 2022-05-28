<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemLista extends Model
{
    use HasFactory;

    public function getAll(){
        return ItemLista::all();
    }

    public function nuevaTarea(){
        echo "guardando en la base de datos";
    }
}
