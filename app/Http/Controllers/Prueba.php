<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;

class Prueba extends Controller
{
    public function getConstumers(){
        $busqueda=Productos::all();
        return response()->json($busqueda);
    }
}
