<?php

namespace App\Http\Controllers; //package do java

use Illuminate\Http\Request; //import do java

class OperacaoController extends Controller {
    
    public function somar($n1, $n2) {
        $resultado = $n1 + $n2;
        return view('resultado', compact('resultado'));
    }

    public function subtrair($n1, $n2) {
        $resultado = $n1 - $n2;
        return view('resultado', compact('resultado'));
    }

    public function multiplicar($n1, $n2) {
        $resultado = $n1 * $n2;
        return view('resultado', compact('resultado'));
    }

    public function dividir($n1, $n2) {
        $resultado = $n1 / $n2;
        return view('resultado', compact('resultado'));
    }

}
