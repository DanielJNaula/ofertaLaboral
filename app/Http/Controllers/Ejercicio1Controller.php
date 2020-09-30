<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio1Controller extends Controller
{
    public function index()
    {

        /*$array_input  = array(1, 5, 2, 4, 10, -4, 1);
        $suma_calculo = 6;
        //dd($array_input);
        $array_no_sobrepuestos = $this->obtenerArreglos($array_input, $suma_calculo);

        dd($array_no_sobrepuestos);*/

        return view('ejercicio1');
    }

    public function calculoEjercicio1(Request $request)
    {

        $array_calculo         = explode(",", $request->array_numero);
        $suma                  = $request->suma_calculo;
        $array_no_sobrepuestos = $this->obtenerArreglos($array_calculo, $request->suma_calculo);

        return view('resultados_ejercicio1', compact('array_no_sobrepuestos', 'array_calculo', 'suma'));
    }

    public function obtenerArreglos($array_input, $suma_calculo)
    {
        $array_no_sobrepuestos = array();

        for ($i = 0; $i < (sizeof($array_input) - 1); $i++) {

            $suma = $array_input[$i] + $array_input[$i + 1];
            if ($suma == $suma_calculo) {
                $array_suma = array($array_input[$i], $array_input[$i + 1]);
                $i++;
                array_push($array_no_sobrepuestos, $array_suma);
            }

        }

        return $array_no_sobrepuestos;
    }
}
