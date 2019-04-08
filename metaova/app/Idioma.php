<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $fillable = [
        'nombre', 'slug'
    ];

    public function ovas(){
        return $this->hasMany(ova::class);
    }
}
