<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContextoAprendizaje extends Model
{
    protected $fillable = [
        'nombre', 'slug'
    ];

    public function ovas(){
        return $this->hasMany(Ova::class);
    }
}
