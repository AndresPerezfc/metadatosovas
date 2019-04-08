<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoInteractividad extends Model
{

    protected $table = 'tipos_interactividad';

    protected $fillable = [
        'nombre', 'slug'
    ];

    public function ovas(){
        return $this->hasMany(Ova::class);
    }
}
