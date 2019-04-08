<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ova extends Model
{
    protected $fillable = [
        'titulo', 'idioma_id', 'descripcion', 'palabras_claves', 'version', 'palabras_claves', 'version',
        'autor(es)', 'entidad_id', 'fecha', 'formato_id', 'tamano', 'ubicacion', 'requerimientos', 'instalacion', 'tipo_interactividad_id',
        'recurso_aprendizaje_id', 'nivel_interactividad_id', 'poblacion_objetivo_id', 'contexto_aprendizaje_id', 'costos', 'derechos_autor', 
        'restricciones', 'uso_educativo', 'clasificacion_id', 'ruta_taxonomica_id', 'user_id', 'slug'
    ];


    public function idiomas(){
        return $this->belongsTo('App\Idioma', 'idioma_id');
    }

    public function entidades(){
        return $this->belongsTo('App\Entidad', 'entidad_id');
    }

    public function formatos(){
        return $this->belongsTo('App\Formato', 'formato_id');
    }

    public function tiposInteractividad(){
        return $this->belongsTo('App\TipoInteractividad', 'tipo_interactividad_id');
    }

    public function recursosAprendizaje(){
        return $this->belongsTo('App\RecursoAprendizaje', 'recurso_aprendizaje_id');
    }

    public function nivelesInteractividad(){
        return $this->belongsTo('App\NivelInteractividad', 'nivel_interactividad_id');
    }

    public function poblacionesObjetivo(){
        return $this->belongsTo('App\PoblacionObjetivo', 'poblacion_objetivo_id');
    }

    public function contextosAprendizaje(){
        return $this->belongsTo('App\ContextoAprendizaje', 'contexto_aprendizaje_id');
    }

    public function clasificaciones(){
        return $this->belongsTo('App\Clasificacion', 'clasificacion_id');
    }

    public function rutasTaxonomicas(){
        return $this->belongsTo('App\RutaTaxonomica', 'ruta_taxonomica_id');
    }

    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }

    


    //#################################################
    //scope
    public function scopeTitulo($query, $titulo){
        if($titulo){
            return $query->where('titulo', 'LIKE', "%$titulo%");
        }
            
    }

    public function scopeFecha($query, $fecha){
        if($fecha){
            return $query->where('fecha', 'LIKE', "%$fecha%");
        }
            
    }

    public function scopeDescripcion($query, $descripcion){
        if($descripcion){
            return $query->where('descripcion', 'LIKE', "%$descripcion%");
        }
            
    }
}
