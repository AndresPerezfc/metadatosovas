<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursoAprendizaje extends Model
{
    protected $table = 'recursos_aprendizaje';

    protected $fillable = [
        'nombre', 'slug'
    ];

    public function ovas(){
        return $this->hasMany(Ova::class);
    }
}
