<?php

namespace App\Http\Controllers; //package do java

use Illuminate\Http\Request; //import do java

class OperacaoController extends Controller {
    
    public function somar($n1, $n2) {
        return $n1 + $n2;
    }

    public function subtrair($n1, $n2) {
        return $n1 - $n2;
    }

    public function multiplicar($n1, $n2) {
        return $n1 * $n2;
    }

    public function dividir($n1, $n2) {
        return $n1 / $n2;
    }

}
