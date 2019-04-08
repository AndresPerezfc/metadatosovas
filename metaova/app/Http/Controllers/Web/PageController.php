<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Ova;

class PageController extends Controller
{
    public function inicio(Request $request){
        $titulo = $request->get('titulo');
        $fecha = $request->get('fecha');
        $descripcion = $request->get('descripcion');

        $ovas = Ova::orderBy('id','DESC')
        ->titulo($titulo)
        ->fecha($fecha)
        ->descripcion($descripcion)
        ->paginate(5);

        $ovasCount = $ovas->count();

        return view('inicio', compact('ovas', 'ovasCount'));
    }

    public function ova($slug){
        $ova = Ova::where('slug', $slug)->first();

        return view('web.ova', compact('ova'));
    }
}
