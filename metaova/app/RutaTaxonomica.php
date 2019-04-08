<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RutaTaxonomica extends Model
{
    protected $fillable = [
        'codigo', 'nombre', 'clasificacion_id'
    ];

    public function ovas(){
        return $this->hasMany(Ova::class);
    }

    public function clasificaciones(){
        return $this->belongsTo('App\Clasificacion', 'clasificacion_id');
    }
}
