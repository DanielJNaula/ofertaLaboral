<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio2Controller extends Controller
{
    public function index()
    {
        return view('ejercicio2');
    }

    public function calculoEjercicio2(Request $request)
    {

        $array_patron = explode(" ", $request->array_patron);

        $array_comprador = explode(" ", $request->array_comparador);

        $validacion_comparacion = $this->comparacionPatron($array_patron, $array_comprador);

        return view('resultados_ejercicio2', compact('array_patron', 'array_comprador', 'validacion_comparacion'));

    }

    public function comparacionPatron($array_patron, $array_comprador)
    {
        //este array guarda los elementos unicos del array patron
        $subarray_patron_unicos = array();

        //este array guarda los elementos unicos del array comparador
        $subarray_comparador_unicos = array();

        //inserta un elemtento del array patron sin repeticiones
        for ($i = 0; $i < sizeof($array_patron); $i++) {
            if (!in_array($array_patron[$i], $subarray_patron_unicos)) {
                array_push($subarray_patron_unicos, $array_patron[$i]);
            }
        }

        //inserta un elemtento del array comparador sin repeticiones

        for ($i = 0; $i < sizeof($array_comprador); $i++) {
            if (!in_array($array_comprador[$i], $subarray_comparador_unicos)) {
                array_push($subarray_comparador_unicos, $array_comprador[$i]);
            }
        }

        if (sizeof($subarray_patron_unicos) != sizeof($subarray_comparador_unicos)) {
            return 'FALSO';
        }

        //este array tiene una copia del array comparador
        $comparacion_final = $array_comprador;

        //remplaza los elementos de los  array comparacion por los elementos no repetitivos del subarrarray patron unicos
        for ($i = 0; $i < sizeof($subarray_patron_unicos); $i++) {
            //var_dump($subarray_comparador_unicos[$i], $subarray_patron_unicos[$i]);
            $comparacion_final = str_replace($subarray_comparador_unicos[$i], $subarray_patron_unicos[$i], $comparacion_final, $j);
        }

        //comparacion entre el array comparacion final y el array patron
        if ($comparacion_final == $array_patron) {
            return 'VERDADERO';
        } else {
            return 'FALSO';
        }

    }
}
