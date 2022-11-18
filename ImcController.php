<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function form() {
        return view('formulario');
    }

    public function calcular(Request $request) {
        $peso = $request->peso;
        $altura = $request->altura/100;
        $imc = $peso / ($altura * $altura);

        return view ('resultado', compact('imc'));
    }
}
