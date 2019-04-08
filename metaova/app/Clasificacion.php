<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    protected $fillable = [
        'codigo', 'nombre', 'slug'
    ];

    public function ovas(){
        return $this->hasMany(Ova::class);
    }

    public function rutasTaxonomicas(){
        return $this->hasMany(RutaTaxonomica::class);
    }
}
