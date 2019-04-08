<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NivelInteractividad extends Model
{

    protected $table = 'niveles_interactividad';

    protected $fillable = [
        'nombre', 'slug'
    ];

    public function ovas(){
        return $this->hasMany(Ova::class);
    }
}
