<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\Registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function store(RegistroRequest$request){
        $registro = Registro::Create([
            'sensor_id' => $request->sensor_id,
            'valor' => $request->valor,
            'unidade' => $request->unidade,
            'data_hora' => $request->data_hora
        ]);
        
       return $registro;
    }    

}
