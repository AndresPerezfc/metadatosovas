<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoblacionObjetivo extends Model
{

    protected $table = 'poblaciones_objetivo';

    protected $fillable = [
        'nombre', 'slug'
    ];

    public function ovas(){
        return $this->hasMany(Ova::class);
    }
}
